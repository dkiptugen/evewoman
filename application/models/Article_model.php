<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Article_model extends CI_Model
  {   public $db;
      public $db1;
      public $db2;
      public  $hitsarray;
      public $youtubelink; 
      public function __construct()
        {
          parent::__construct();
          $this->db1=$this->load->database("seconddb",TRUE);
          $this->db2=$this->load->database("thirddb",TRUE);
          $this->db=$this->load->database("default",TRUE);
           include(APPPATH . './../../stw/perpage.php');
        $this->hitsarray = get_hits();
    $this->youtubelink = youtube_link();
        } 
      public function getNav()
         {
             $dbh=$this->db->query("select name,id from std_category where site='evewoman' and inactive is null  and parentid=0 order by listorder asc");
             $x=$dbh->result();
             return $x;
         }
      public function getRealCatId($categoryid)
      {
        $this->db->where('id',$categoryid)
                 ->where('refer_id!=0')
                 ->where('site','evewoman');
        $dbh=$this->db->get('std_category');
        if($dbh->num_rows()>0)
          {
            return $dbh->row()->refer_id;
          }
        else
          {
            return $categoryid;
          }
      }
	  public function get_latest_stories_infinite($articleID) {
        $limitdate = date("Y-m-d H:i:s");
		$sql = "select refer_id from std_article left join std_category on std_category.refer_id=std_article.categoryid where std_article.id='$articleID'";
		$result = $this->db->query($sql);
		$refer_id=0;
		foreach($result->result() as $rl):
		$refer_id=$rl->refer_id;
		endforeach;
        $sql = "SELECT std_article.id,title, parentid FROM std_article left join std_category on (std_category.id=std_article.categoryid or std_category.refer_id=std_article.categoryid) where std_article.inactive IS NULL and std_article.publishdate<='$limitdate'
        AND source='evewoman'  and std_article.title
        is not null and std_article.id<'$articleID' and std_article.categoryid='$refer_id' ORDER BY std_article.publishdate desc, std_article.id desc  LIMIT 1 ";

        $result = $this->db->query($sql);
		if($result->num_rows()==""){
			 $sql = "SELECT std_article.id,title, parentid FROM std_article left join std_category on (std_category.id=std_article.categoryid or std_category.refer_id=std_article.categoryid) where std_article.inactive IS NULL and std_article.publishdate<='$limitdate'
        AND source='evewoman'  and std_article.title
        is not null ORDER BY std_article.publishdate desc, std_article.id desc  LIMIT 1 ";
        $result = $this->db->query($sql);
		}
		return $result;
    }
      public function getCatName($id)
        {

          $dbh=$this->db->query('select * from std_category  where site="evewoman" and refer_id='.$id);
          if($dbh->num_rows()>0)
            {
              return @$dbh->row()->name;
            }
          else
            {
              $dbh=$this->db->query('select * from std_category  where site="evewoman" and refer_id=0 and id='.$id);
              return @$dbh->row()->name;
            }
          // $this->db->where("refer_id!=0");
          // $this->db->or_where("parentid",$id);
          // $dbh=$this->db->get('std_category');
          // return $dbh->row()->name;
        }  
      public function getCatId($id)
          {
            $this->db->where("refer_id!=0");
            $this->db->or_where("parentid",$id);
            $dbh=$this->db->get('std_category');
            return $dbh->row()->id;
          }  
      public function get_catid($catid,$catname)
           {
               $dbh=$this->db->query("select * from std_category where (name='".$catname."' or id='".$catid."') and site='evewoman'");
               if($dbh->num_rows()>0)
                 {
                   $x = $dbh->result_array();
                   $x = array_shift($x);
                   return $x;
                 }
               else
                 {
                     return FALSE;
                 }
           }
     
      
      public function get_pages($story)
          {
            $story = explode('</p>', $story);
            $noOfPages = ceil(count($story) / $this->paragraphsPerPage);
            return $noOfPages;
          } 
      public function slugify($text)
          {
             $text = preg_replace('~[^\\pL\d]+~u', '-', $text);
             $text = trim($text, '-');
             if (function_exists('iconv')) {
                 $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
                }
             $text = $text;
             $text = preg_replace('~[^-\w]+~', '', $text);
             if (empty($text)) {
                 return 'n-a';
                }
             $text = strtolower($text);
             return $text;
          }
      public function getArticle($id,$title)
          {
              $this->article_hits($id);
              $dbh=$this->db->where("id",$id)->where("inactive is null")->get("std_article");              
              if($dbh->num_rows()>0)
                {                  
                  return $dbh->row();
                }
             else
                {
                  $dbh=NULL;
                  $dbh=$this->db1->where("id",$id)->where("inactive is null")->get("std_article");
                  if($dbh->num_rows()>0)
                    {
                        return $dbh->row();
                    }
                  else
                    {
                        $dbh=NULL;
                        $dbh=$this->db2->where("id",$id)->where("inactive is null")->get("std_article");
                        if($dbh->num_rows()>0)
                          {
                            return $dbh->row();
                          }
                        else
                          {
                            redirect(site_url());                               
                          }  
                    }
                }
          }
      public function latest_articles($limit,$start=0)
         {
             $this->db->where("source","evewoman");
             $this->db->where("inactive is NULL");
             $this->db->order_by("publishdate",'desc');
             $this->db->limit($limit,$start);
             $dbh = $this->db->get("std_article");
             return $dbh->result();
         }
      public function featured_articles($limit=9)
         {
            $this->db->where("inactive is NULL")
                     ->where("source","evewoman")
                     ->order_by("std_article.publishday",'desc')
                     ->order_by("std_article.homepagelistorder",'asc')
                     ->order_by('std_article.listorder','asc')
                     ->limit($limit);
            $dbh =$this->db->get('std_article');
            return $dbh->result();
         }
      public function get_latest_videos($limit,$start=0)
         {
            $this->db->select('v.title, v.videoURL, v.id,c.name ');
            $this->db->from("ktn_video as v, ktn_video_category as c, ktn_video_type as t");
            $this->db->where("v.categoryid=c.id AND c.videotypeid=t.id and t.source='evewoman' AND v.`inactive` IS   NULL");
            $this->db->order_by('v.publishdate','DESC');
            $this->db->order_by( 'v.id', 'desc');
            $this->db->limit($limit,$start);
            $dbh=$this->db->get();
            return $dbh->result();
         }
      public function get_video($id)
         {
            $this->db->where('ktn_video.id',$id);
            $dbh=$this->db->select('ktn_video.title, ktn_video.videoURL, ktn_video.id,ktn_video_category.name,ktn_video.publishdate,ktn_video.description ')->join('ktn_video_category','ktn_video_category.id=ktn_video.categoryid')->get('ktn_video');
            if($dbh->num_rows()>0)
              {
                return $dbh->row();
              }
            else
              {
                $this->db1->where('id',$id);
                $dbh=$this->db1->select('ktn_video.title, ktn_video.videoURL, ktn_video.id,ktn_video_category.name,ktn_video.publishdate,ktn_video.description ')->join('ktn_video_category','ktn_video_category.id=ktn_video.categoryid')->get('ktn_video');
                if($dbh->num_rows()>0)
                  {
                    return $dbh->row();
                  }
                else
                  {
                    $this->db2->where('id',$id);
                    $dbh=$this->db2->select('ktn_video.title, ktn_video.videoURL, ktn_video.id,ktn_video_category.name,ktn_video.publishdate,ktn_video.description ')->join('ktn_video_category','ktn_video_category.id=ktn_video.categoryid')->get('ktn_video');
                    if($dbh->num_rows()>0)
                      {
                        $this->db1->close();
                        return $dbh->row();
                      }
                    else
                      {
                        return false;
                      }  
                  }  
              }  
         } 
      public function get_related_video($dat,$limit=12)
         {
            $this->db->select('v.title, v.videoURL, v.id,v.publishdate,c.name ');
            $this->db->from("ktn_video as v, ktn_video_category as c, ktn_video_type as t");
            $this->db->where("v.categoryid=c.id AND c.videotypeid=t.id and t.source='evewoman' AND v.`inactive` IS   NULL");
            $this->db->order_by('v.publishdate','DESC');
            $this->db->order_by( 'v.id', 'desc');
            $this->db->limit($limit);
            $dbh=$this->db->get();
            return $dbh->result();
         }
      public function show_videos($limit=32)
          {
              $this->db->select('v.title, v.videoURL, v.id,v.publishdate,c.name ');
              $this->db->from("ktn_video as v, ktn_video_category as c, ktn_video_type as t");
              $this->db->where("v.categoryid=c.id AND c.videotypeid=t.id and t.source='evewoman' AND v.`inactive` IS   NULL");
              $this->db->order_by('v.publishdate','DESC');
              $this->db->order_by( 'v.id', 'desc');
              $this->db->limit($limit);
              $dbh=$this->db->get();
              return $dbh->result();
          }
      public function getAuthorName($id)
        {
            $dbh=$this->db->select("concat(firstname,' ',lastname) as Name")->where("id",$id)->get("um_user");
            return $dbh->row()->Name;
        }    
      public function getNoauthor($id)
        {
          $dbh=$this->db->where('author_id',$id)->where("source","evewoman")->get('std_article');
          return $dbh->num_rows();
        }
      public function author($authorid,$limit,$start=0)
        {
          $dbh=$this->db->where('author_id',$authorid)->where("source","evewoman")->order_by('publishday','DESC')->limit($limit,$start)->get('std_article');
          if($dbh->num_rows()>0)
            {
              return $dbh->result();
            }
        }
      public function related_articles($key,$limit=9)
         	{
         		if($key->keywords!=NULL)
	         	    {
		            $data = str_replace(".", ",", $key->keywords);
		            $data = str_replace(":", ",", $data);
		            $data = str_replace(";", ",", $data);
		            $keywords = explode(',', str_replace("'", "", $data));
		            $keywords=array_diff($keywords,array(" "));
		            if(is_array($keywords)&&(!empty($keywords)))
		                {
		                  $sql="select * from std_article where keywords is not null and inactive is null and id!='".$key->id."' and source='evewoman' and (";
		                  $sqlt="";
		                  foreach ($keywords as $keyword) 
                        {
		                       $sqlt.="title like '%".$keyword."%' or keywords like '%".$keyword."%' or ";
		                    }
		                  $sql.=substr($sqlt,0,-3);

		                  $sql.=") order by publishdate desc limit ".$limit."";
		                  $dbh=$this->db->query($sql);
                      if($dbh->num_rows()>0)
                        {
                         return $dbh->result();
                        }
                      else
                        {
                          return NULL;
                        }
                    }
                else
                    {
                      return NULL;
                    }
                  }
            }
                  public function article_hits_old($articleID)
          {
              if (0 == (rand($this->hitsarray['HitsStart'], 10) % 4)) {
                  date_default_timezone_set('Africa/Nairobi');
                  $cut_of_date = date('Y-m-d');
                  // $cut_of_date = date('Y-m-d H:i:s', mktime(date('H'), date('i'), 0, date('m'), date('d') - 1, date('Y')));
                  $current_date_time = date('Y-m-d H:i:s');

                  $max_std_trend_time =
                      date('Y-m-d H:i:s', mktime(date('H'), date('i') - 10, 0, date('m'), date('d'), date('Y')));


                  $id = $articleID;
                  $id = mysql_real_escape_string($id);
                 /* if (strpos($_SERVER['SERVER_NAME'], "standardmedia") > 0) {
                      $query = "delete  from std_article_hits  where std_article_hits_date < '$cut_of_date'";
                      $results = $this->DB1->query($query);
                  }
            */

                  $query =
                      "select * from std_article_hits  where std_article_hits_article_id ='$id' and std_article_hits_date = '$cut_of_date'";
                  $results = $this->db->query($query);
                  $total_stories = $results->num_rows();
                  if ($total_stories > 0) {
                      $query =
                          "update std_article_hits  set std_article_hits = std_article_hits + 1 where std_article_hits_article_id = '$id' and std_article_hits_date = '$cut_of_date'";
                  } else {
                      $query =
                          "insert into  std_article_hits  (std_article_hits_article_id, std_article_hits, std_article_hits_date ) values ( '$id', 1, '$cut_of_date') ";
                  }

                  $results = $this->db->query($query);
                  $query = "delete  from std_article_trends  where std_trend_timestamp <= '$max_std_trend_time'";
                  $results = $this->db->query($query);

                  $query = "select * from std_article_trends  where std_trend_article_id = '$id'  ";
                  $results = $this->db->query($query);
                  $total_stories = $results->num_rows();

                  $query =
                      "insert into  std_article_trends  (std_trend_article_id, std_trend_hits ,std_trend_timestamp   ) values ( '$id', 1, '$current_date_time' ) ";

                  $results = $this->db->query($query);
                  unset($total_stories);
              }
          }
      public function article_hits($articleID)
          {
              if (0 == (rand($this->hitsarray['HitsStart'], 45) % 15)) {
                  date_default_timezone_set('Africa/Nairobi');
                  $cut_of_date = date('Y-m-d');
                  // $cut_of_date = date('Y-m-d H:i:s', mktime(date('H'), date('i'), 0, date('m'), date('d') - 1, date('Y')));
                  $current_date_time = date('Y-m-d H:i:s');

                  $max_std_trend_time =
                      date('Y-m-d H:i:s', mktime(date('H'), date('i') - 10, 0, date('m'), date('d'), date('Y')));


                  $id = $articleID;
                 // $id = mysql_real_escape_string($id);
                 /* if (strpos($_SERVER['SERVER_NAME'], "standardmedia") > 0) {
                      $query = "delete  from std_article_hits  where std_article_hits_date < '$cut_of_date'";
                      $results = $this->DB1->query($query);
                  }
            */

                 $this->db->where('std_article_hits_article_id',$id)
                   ->where("std_article_hits_date",$cut_of_date);// return current article views 
          $dbh= $this->db->get('std_article_hits');
          
          if($dbh->num_rows()>0) 
            {
              $this->db->where('std_article_hits_id',$id);// then increase by one 
              $this->db->set('std_article_hits', ($dbh->row()->std_article_hits + 1)); 
              $this->db->update('std_article_hits'); 
            }
          else
            {
               $data=array("std_article_hits_article_id"=>$id,"std_article_hits"=>1,"std_article_hits_date"=>$cut_of_date);
              $this->db->insert('std_article_hits',$data); 
            } 
          $this->db->where("std_trend_timestamp <=",$max_std_trend_time);
          $this->db->delete('std_article_trends');
          $this->db->insert('std_article_trends',array("std_trend_article_id"=>$id,"std_trend_hits"=>1,"std_trend_timestamp"=>$current_date_time)); 
              }
          }
        // Get stories in a keyword
      public function keyword_search($keyword,$limit,$start=0)
        {
            $this->db->where("inactive is null")
                     ->where('source','evewoman')
                     ->like('Keywords',$keyword)
                    ->limit($limit,$start);
            $dbh=$this->db->get('std_article');
            if($dbh->num_rows()>0)
              {
                return $dbh->result();
              }
            return FALSE;

        }
        // Get No of stories in specified keyword
      public function getNokeyword($keyword)
        {
             $this->db->where("inactive is null")
                     ->where('source','evewoman')
                     ->like('Keywords',$keyword);
            $dbh=$this->db->get('std_article');
            return $dbh->num_rows();
        }
        // Get Author stories
      public function authorStories($authorid,$limit,$start=0)
        {
          $this->db->where('inactive is null')
                   ->where('author_id',$authorid)
                   ->where('source','evewoman')
                   ->limit($limit,$start);
          $dbh=$this->db->get('std_article');
          if($dbh->num_rows()>0)
            {
              return $dbh;
            }
        }
      public function update_counter($slug) 
        { 
          date_default_timezone_set('Africa/Nairobi');
          $cut_of_date = date('Y-m-d');
          $current_date_time = date('Y-m-d H:i:s');
          $max_std_trend_time = date('Y-m-d H:i:s', mktime(date('H'), date('i') - 10, 0, date('m'), date('d'), date('Y')));
          $id = $slug;
          //$id = mysql_real_escape_string($id);
          $this->db->where('std_article_hits_article_id',$id)
                   ->where("std_article_hits_date",$cut_of_date);// return current article views 
          $dbh= $this->db->get('std_article_hits');
          
          if($dbh->num_rows()>0) 
            {
              $this->db->where('std_article_hits_id',$id);// then increase by one 
              $this->db->set('std_article_hits', ($dbh->row()->std_article_hits + 1)); 
              $this->db->update('std_article_hits'); 
            }
          else
            {
               $data=array("std_article_hits_article_id"=>$id,"std_article_hits"=>1,"std_article_hits_date"=>$cut_of_date);
              $this->db->insert('std_article_hits',$data); 
            } 
          $this->db->where("std_trend_timestamp <=",$max_std_trend_time);
          $this->db->delete('std_article_trends');
          $this->db->insert('std_article_trends',array("std_trend_article_id"=>$id,"std_trend_hits"=>1,"std_trend_timestamp"=>$current_date_time)); 
        } 
      public function trending_articles($limit=15)
        {
          $dbh = $this->db->query("SELECT id,title,publishdate,thumbURL,thumbcaption,createdby,author,author_id,categoryid, sum(std_article_trends.std_trend_hits)  as std_trend_hits FROM std_article, std_article_trends WHERE std_article.`source`='evewoman' and  std_article.`id`=std_article_trends.`std_trend_article_id` group by id ORDER BY std_trend_hits DESC LIMIT ".$limit."");
          return $dbh->result();
        }  
      public function popular_articles($limit=15)
        {
          $this->db->select("id,title,publishdate,thumbURL,thumbcaption,createdby,author,author_id,categoryid")
                   ->from("std_article")
                   ->join("std_article_hits","std_article.id=std_article_hits.`std_article_hits_article_id`")
                   ->where("source","evewoman")
                   ->where('inactive is null')
                   ->order_by("std_article_hits","DESC")
                   ->limit($limit);
          $dbh=$this->db->get();
          if($dbh!=false)
            {
              return $dbh->result();
            }
         
      }

    }
