<?php

class Mobile_model extends CI_Model {

    // private $DB1 = null;
//var $db;
    //  private $DB2 = null;
    var $publishdate;
    var $publishDateVariance = '0:0:0';
    var $lifestyleCategoryID;
    var $magazineCategoryID;
    var $paragraphsPerPage;

    public function __construct() {
// Call the Model constructor
        parent::__construct();
        $this->lifestyleCategoryID = 9;
        date_default_timezone_set('Africa/Nairobi');
        $this->publishdate = date("Y-m-d H:i:s");
        //   $this->DB1 = $this->load->database('default', TRUE); //default db $this->publishDateVariance = $this->getConfigurationSettingValue('publishDateVariance');
        $this->publishDateVariance = $this->getConfigurationSettingValue('publishDateVariance');

        $this->magazineCategoryID = $this->getConfigurationSettingValue('magazineCategoryID');
       
        
        
        $this->paragraphsPerPage = 8;
        $this->paragraphsPerPage  = 70;
       
        
        // UNCOMMENT LATER  ERICK
        /*include(APPPATH . './../../stw/perpage.php');
        $this->paragraphsPerPage = PerPage();
        $this->hitsarray = get_hits();*/
        
        
        
        
        
        
// $this->DB2 = $this->load->database('secondDB', TRUE); //archive db
// $this->DB2 = $this->load->database('secondDB', TRUE); //archive db
    }

    function getConfigurationSettingValue($settingKey) {
        $settingValue = null;

        $sql = "SELECT cs.settingvalue FROM std_cfg_settings AS cs WHERE cs.settingkey= '$settingKey'";
        $relt = $this->DB1->query($sql);
        foreach ($relt->result() as $row) {
            $settingValue = $row->settingvalue;
        }

        return $settingValue;
    }

    

    function get_parentid($categoryID) {
        $sql = "SELECT parentid from std_category WHERE ((id = '$categoryID') OR (`refer_id`='$categoryID'))";
        $result = $this->DB1->query($sql);

        return $result;
    }

    function get_parent_category($parentid) {
        $sql = "select site, IF(refer_id=0,id,refer_id) AS id,parentid,name,shortname,inactive,layoutid,colourthemeid,
listorder,noofvideos,hideinparentcategory,updatedby,updateddate from std_category where parentid='$parentid'  AND site='main' and inactive is null order by listorder asc";

        return $this->DB1->query($sql);
    }

    function get_main_menu($categoryID, $limit) {
        $prid = $this->get_parentid($categoryID);

        $filterQstr = '';
        $sql = "SELECT IF(refer_id=0,id,refer_id) AS id, shortname FROM std_category WHERE parentid = '$categoryID' AND site='main'
        AND listorder IS NOT NULL AND inactive IS NULL AND  name not like '%Lady Speak%'
        AND  name not like '%Inspiration%' AND hideinparentcategory IS NULL $filterQstr
        ORDER BY listorder limit $limit";
        $result = $this->DB1->query($sql);

        return $result;
    }

    

    function num_articles($categoryID) {
        $dateNow = $this->publishdate;
        if ($categoryID == 0) {
            $where = "";
            $order = "";
            if ($categoryID == 0) {
                $where .=" and homepagelistorder is not null ";
                $order .= "homepagelistorder asc,";
            }
            $qstr = "SELECT *, std_article.id as id FROM std_article LEFT OUTER JOIN std_cfg_article_status on std_article.articlestatusid = std_cfg_article_status.id where inactive is null and ADDTIME(publishdate, '$this->publishDateVariance') <= '$dateNow' $where order by publishdate desc, $order listorder asc ";
        } else {
            $qstr = 'SELECT art.id, art.thumbURL, art.title, art.summary, art.story, art.publishdate AS publishDate, art.noofcomments AS noOfComments'
                    . ' FROM std_article AS art'
                    . " WHERE art.categoryid = '$categoryID'"
                    . " AND art.publishdate <= '$dateNow'"
                    . ' AND art.inactive IS NULL'
                    . " "
                    . ' ORDER BY art.publishdate DESC, art.listorder'
                    . "";
        }
        $relt = $this->DB1->query($qstr);

        return $relt->num_rows;
    }

    

    function get_category_newspanel($categoryID, $limit) {
        $county_prefix = 'County_%';
        $sql = "SELECT cat.id, cat.name, ct.name AS colourtheme, cat.noofvideos FROM std_category AS cat LEFT OUTER JOIN std_colour_theme AS ct ON ct.id = cat.colourthemeid WHERE cat.site='main' and cat.parentid = '$categoryID' AND cat.hideinparentcategory IS NULL AND cat.listorder IS NOT NULL AND cat.inactive IS NULL  AND cat.id <> '$this->magazineCategoryID' and cat.name not like  '$county_prefix'  ORDER BY cat.listorder limit $limit";
        $relt = $this->DB1->query($sql);
        if ($relt->num_rows == "") {
            $sql = "SELECT cat.id, cat.name, ct.name AS colourtheme, cat.noofvideos FROM std_category AS cat LEFT OUTER JOIN std_colour_theme AS ct ON ct.id = cat.colourthemeid WHERE   cat.site='main' and  cat.id = '$categoryID' AND cat.hideinparentcategory IS NULL AND cat.listorder IS NOT NULL AND cat.inactive IS NULL  AND cat.id <> '$this->magazineCategoryID' and cat.name not like  '$county_prefix'  ORDER BY cat.listorder limit $limit";
            $relt = $this->DB1->query($sql);
        }


        return $relt;
    }

   
 

    function get_news_by_keyword($pagetitle, $start, $limit) {
        $sql = "select title, std_article.id as id, thumbURL,summary from std_article left join std_category on std_category.id=std_article.categoryid where std_category.parentid='6' and (keywords like '%$pagetitle%' or title like '%$pagetitle%' or long_title like '%$pagetitle%') limit $start,$limit";
        return $this->DB1->query($sql);
    }

    function get_category_name($categoryID) {
        $sql = "SELECT cat.id, cat.name, ct.name AS colourtheme, cat.noofvideos FROM std_category AS cat LEFT OUTER JOIN std_colour_theme AS ct ON ct.id = cat.colourthemeid WHERE  cat.id = '$categoryID' AND cat.inactive IS NULL";
        $relt = $this->DB1->query($sql);
        return $relt;
    }

    function get_selected_category_main($id) {
        $sql = "select name,id from std_category where inactive is null AND site='main' and (id='$id' or refer_id='$id')";

        return $this->DB1->query($sql);
    }

    function get_panel_theme($categoryID) {
        $sql = "SELECT cat.id, cat.name, ct.name AS colourtheme, cat.noofvideos FROM std_category AS cat LEFT OUTER JOIN std_colour_theme AS ct ON ct.id = cat.colourthemeid WHERE  cat.id = '$categoryID' AND cat.inactive IS NULL ORDER BY cat.listorder limit 1";
        $relt = $this->DB1->query($sql);
        foreach ($relt->result() as $rl) {
            $colourtheme = $rl->colourtheme;
        }
        return $colourtheme;
    }

    function article_hits($articleID) {
        if(!$articleID || 0==(int)$articleID) return;
	 if (rand($this->hitsarray['HitsStart'], $this->hitsarray['HitsEnd']) % $this->hitsarray['HitsDivide'] == 0) {
       // if (rand(0, 5000) % 4500 == 0) {
            date_default_timezone_set('Africa/Nairobi');
            $cut_of_date = date('Y-m-d');
            // $cut_of_date = date('Y-m-d H:i:s', mktime(date('H'), date('i'), 0, date('m'), date('d') - 1, date('Y')));
            $current_date_time = date('Y-m-d H:i:s');

            $max_std_trend_time = date('Y-m-d H:i:s', mktime(date('H'), date('i') - 5, 0, date('m'), date('d'), date('Y')));
            $id = $articleID;
				
            $id = $this->DB1->escape_str($id);
			 $query = "select * from std_article_hits  where std_article_hits_article_id ='$id' and
            std_article_hits_date >= '$cut_of_date 00:00:00'";
            $results = $this->DB1->query($query);
			
			
           if (strpos($_SERVER['SERVER_NAME'], "standardmedia") > 0) {
                $query = "delete  from std_article_hits  where std_article_hits_date < '$cut_of_date  00:00:00'";
                $this->DB1->query($query);
            }
			


           
            $total_stories = $results->num_rows;
            if ($total_stories > 0) {
			
                $query = "update std_article_hits  set std_article_hits = std_article_hits + 1 where
                std_article_hits_article_id = '$id' and std_article_hits_date = '$current_date_time'";
            } else {
                $query = "insert into  std_article_hits  (std_article_hits_article_id, std_article_hits,
                std_article_hits_date ) values ( '$id', 1, '$current_date_time') ";
            }

            $results = $this->DB1->query($query);

            //$query = "select * from std_article_trends  where std_trend_article_id = '$id'  ";
           // $results = $this->DB1->query($query);
            //$total_stories = $results->num_rows;

            $query = "insert into  std_article_trends  (std_trend_article_id, std_trend_hits ,std_trend_timestamp   )
            values ( '$id', 1, '$current_date_time' ) ";

            $results = $this->DB1->query($query);
           // unset($total_stories);
        }
		 if (rand($this->hitsarray['HitsStart'], $this->hitsarray['HitsEnd']) % $this->hitsarray['HitsDivide'] == 5) {
        //if (rand(0, 5000) % 4500 == 5) {
		   date_default_timezone_set('Africa/Nairobi');
            $cut_of_date = date('Y-m-d');
            // $cut_of_date = date('Y-m-d H:i:s', mktime(date('H'), date('i'), 0, date('m'), date('d') - 1, date('Y')));
            $current_date_time = date('Y-m-d H:i:s');

            $max_std_trend_time =
                date('Y-m-d H:i:s', mktime(date('H'), date('i') - 5, 0, date('m'), date('d'), date('Y')));
				  $query = "delete  from std_article_trends  where std_trend_timestamp <= '$max_std_trend_time'";
					$this->DB1->query($query);
		}
    }

    function count_para($story, $pageNo) {
        $story = explode('</p>', $story);
        if (count($story) > 1) {
            //   array_pop($story);
        }
        //Input boundary checking
        $noOfPages = ceil(count($story) / $this->paragraphsPerPage);

        $pageNo = (int) $pageNo;

        if ($pageNo < 1) {
            $pageNo = 1;
        } elseif ($pageNo > $noOfPages) {
            $pageNo = $noOfPages;
        }

        $articleStory = array_slice($story, (($pageNo - 1) * $this->paragraphsPerPage), $this->paragraphsPerPage);
        return $articleStory;
        // return $noOfPages;
    }

    function get_pages($story) {
        $story = explode('</p>', $story);
        $noOfPages = ceil(count($story) / $this->paragraphsPerPage);
        return $noOfPages;
    }

    function get_articles_for_category($categoryID, $start, $limit) {
        $dateNow = $this->publishdate;
        if ($categoryID == 0) {
            $where = "";
            $order = "";
            if ($categoryID == 0) {
                $where .=" and homepagelistorder is not null ";
                $order .= "homepagelistorder asc,";
            }
            $start = $start - 5;
            $qstr = "SELECT *, std_article.thumbURL, std_article.title, std_article.story,
            std_article.summary, std_article.publishdate AS publishDate,
            std_article.noofcomments AS noOfComments, std_article.posteddate as dposted ,
            std_article.id as id FROM std_article LEFT OUTER JOIN std_cfg_article_status on
            std_article.articlestatusid = std_cfg_article_status.id where source='main' and
            inactive is null and ADDTIME(publishdate, '$this->publishDateVariance') <= '$dateNow'
             $where order by publishdate desc, $order listorder asc   limit $start, $limit";
        } else {
            $qstr = "SELECT  art.id, art.thumbURL, art.title, art.story, art.summary,
            art.publishdate AS publishDate, art.noofcomments AS noOfComments,
            art.posteddate as dposted  FROM std_category, std_article as art
            WHERE  art.source='main' and  std_category.id = art.categoryid AND
            ( ( std_category.parentid =  '$categoryID' and
            parentcategorylistorder is  not null ) or
            (  art.categoryid = '$categoryID' )  )  and art.inactive is null
            order by   art.publishdate desc  , art.parentcategorylistorder
            limit $start, $limit ";
        }
        $result = $this->DB1->query($qstr);

        return $result;
    }
 function get_article_video($videoid)
    {
        $sql = "SELECT * from ktn_video where id='$videoid' and inactive is null";
        $result = $this->DB1->query($sql);

        return $result;
    }
    function get_articles_for_categoryxx($categoryID, $start, $limit) {
        $baseQStr = "";
        $orderBy = "";
        $dateNow = date("Y-m-d H:i:s");
        if ($categoryID == 0) {
            $baseQStr = 'FROM std_article AS art'
                    . ' LEFT OUTER JOIN std_cfg_article_status AS cas ON cas.id = art.articlestatusid'
                    . ' WHERE art.source=\'main\' AND art.homepagelistorder IS NOT NULL'
                    . ' AND art.publishdate<=' . $dateNow . ''
                    . ' AND art.inactive IS NULL ' .
                    " AND categoryid='$categoryID'";
            $orderBy = 'art.publishday DESC, art.homepagelistorder';
        } else {
// If not home page, determine if the category has child categories.
            $hasChildCategories = $this->categoryHasChildCategories($categoryID);

            /* If the category has child categories, get articles for the category and for it's child categories ordered by parentcategorylistorder. */
            if ($hasChildCategories) {
                $baseQStr = 'FROM std_category AS cat'
                        . ' INNER JOIN std_article AS art'
                        . ' LEFT OUTER JOIN std_cfg_article_status AS cas ON cas.id = art.articlestatusid'
                        . ' WHERE art.source=\'main\' AND (cat.id = ' . $categoryID . ' OR (cat.parentid = ' . $categoryID . ' AND cat.hideinparentcategory IS NULL))'
                        . ' AND art.categoryid = cat.id'
                        . " AND art.publishdate <= '$dateNow'"
                        . ' AND art.inactive IS NULL'
                        . ' AND art.parentcategorylistorder IS NOT NULL';
                $orderBy = 'art.publishday DESC, art.parentcategorylistorder';
            }
            /* If the category does NOT have child categories, get articles for category ordered by listorder */ else {
                $baseQStr = ' FROM std_article AS art'
                        . ' LEFT OUTER JOIN std_cfg_article_status AS cas ON cas.id = art.articlestatusid'
                        . ' WHERE art.source=\'main\' AND art.categoryid = ' . $categoryID
                        . " AND art.publishdate <= '$dateNow'"
                        . ' AND art.inactive IS NULL';
                $orderBy = 'art.publishday DESC, art.listorder';
            }
        }
        $sql = "SELECT art.id, art.title, art.summary, art.thumbURL $baseQStr ORDER BY $orderBy limit $start,$limit";
        echo $sql;
        $result = $this->DB1->query($sql);

        return $result;
    }

    function categoryHasChildCategories($categoryID) {
        $hasChildCategories = false;

        $sql = "SELECT id FROM std_category WHERE parentid = '$categoryID'";
        $results = $this->DB1->query($sql);
        $hasChildCategories = $results->num_rows();

        return $hasChildCategories;
    }

    function slugify($text) {
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

    function get_selected_article($articleID) {
        
        $articleID = $this->DB1->escape_str($articleID);
         
        $sql = 'SELECT std_article.id, std_article.publishdate, std_article.author, std_article.related_video, std_article.source, std_article.thumbURL, std_category.parentid, categoryid, title,
        long_title, glancefacts, summary, story, std_article.updateddate as updateddate, posteddate, keywords,noofcomments'
                . " FROM std_article left join std_category on std_category.id=std_article.categoryid
                WHERE  std_article.inactive is NULL AND std_article.source='evewoman' AND std_article.id ='$articleID' "
                . ' LIMIT 0, 1;';
        $resultDB1 = $this->DB1->query($sql);
        if ($resultDB1->num_rows != "") {

            return $resultDB1;
        } else {
// this is the second db search
            $this->DB3 = $this->load->database('thirddb', true); // DB 2
            $qstr = 'SELECT std_article.id,std_article.publishdate, std_article.related_video, std_article.author, std_article.source, std_article.thumbURL, std_category.parentid, categoryid, title, long_title,
            glancefacts, summary, story, std_article.publishdate as updateddate, posteddate, keywords,noofcomments'
                    . " FROM std_article left join std_category on std_category.id=std_article.categoryid
                    WHERE  std_article.inactive is null AND std_article.source='evewoman' and std_article.id ='$articleID'"
                    . ' LIMIT 0, 1;';
            $resultDB3 = $this->DB3->query($qstr);
            $this->DB3->close();
            if ($resultDB3->num_rows != "") {
                return $resultDB3;
            } else {
                //If no result found in second db, go to the third db (seconddb)
                $this->DB2 = $this->load->database('seconddb', true); // DB 2
                $qstr = 'SELECT std_article.id, std_article.publishdate, std_article.related_video, std_article.author, std_article.source, std_article.thumbURL, std_category.parentid, categoryid, title,
                  long_title, glancefacts, summary, story, std_article.publishdate as updateddate, posteddate, 
                  keywords,noofcomments'
                        . " FROM std_article left join std_category on std_category.id=std_article.categoryid
                    WHERE   std_article.inactive is null AND std_article.source='evewoman' and  std_article.id ='$articleID'"
                        . ' LIMIT 0, 1;';
                $resultDB2 = $this->DB2->query($qstr);
                $this->DB2->close();

                return $resultDB2;
            }
        }
    }
  function get_standard_popular($limit)
    {
        $cut_of_date = date('Y-m-d');
        $sql = "SELECT id, title,summary, categoryid,thumbURL FROM std_article, std_article_hits
        WHERE source='main' AND inactive IS NULL AND std_article_hits_date >= '$cut_of_date'
        and std_article_hits_article_id = id ORDER BY   std_article_hits  DESC LIMIT 0,$limit";
        $result = $this->DB1->query($sql);
        if ($result->num_rows == "") {
            $sql = "SELECT id, title,summary, categoryid,thumbURL from std_article
            where source='main' AND inactive IS NULL and publishdate<='$this->publishdate' and categoryid='1' order by listorder asc limit $limit";
            $result = $this->DB1->query($sql);
        }

        return $result;
    }

   function get_standard_trending_articles($limit)
    {
    $cut_of_date = date('Y-m-d H:i:s', mktime(date('H'), date('i') - 5, 0, date('m'), date('d'), date('Y')));  
$sql = "SELECT title, id, publishdate, summary, thumbURL, SUM(std_trend_hits) AS std_trend_hits1,source
        FROM std_article, std_article_trends  WHERE std_trend_timestamp>='$cut_of_date' and 
        std_article.id = std_article_trends.std_trend_article_id AND inactive IS NULL GROUP BY std_article.id
        ORDER BY std_trend_hits1 DESC LIMIT 0, $limit ";
	  /* $sql = "SELECT title, id, publishdate, summary, thumbURL, SUM(std_trend_hits) AS std_trend_hits1,categoryid
        FROM std_article, std_article_trends  WHERE  std_article.id = std_article_trends.std_trend_article_id
        AND inactive IS NULL GROUP BY std_article.id   ORDER BY std_trend_hits1 DESC LIMIT 0,$limit";
		*/
        $result = $this->DB1->query($sql);

        return $result;
    }
    function get_parent_nodes($categoryID) {
        $catselect = "select std_category.id as mid,name, thumbURL from std_category left join std_article on std_category.id=std_article.categoryid where std_category.parentid='$categoryID' and std_article.listorder='1' and std_category.inactive is null group by std_category.id";
        $rlt = $this->DB1->query($catselect);
        return $rlt;
    }

    function get_patent_cat_article($categoryID) {
        $sql = "select parentid from std_category where categoryid='$categoryID' or parentid='$categoryID'";
        $result = $this->DB1->query($sql);
        $rlt = "";
        foreach ($result->result() as $rl) {
            $rlt = $rl->parentid;
        }
        return $rlt;
    }

    function get_category_videos_keyword($keywords, $noOfVideos) {
        $sql = "SELECT scv.id, scv.title, scv.id AS ktnvideoid, scv.videoURL, scv.description FROM 
         ktn_video AS scv  WHERE
        scv.keywords like '%$keywords%' AND scv.publishdate <= '$this->publishdate' AND 
                scv.inactive IS NULL ORDER BY scv.publishdate DESC LIMIT 0,$noOfVideos";
        $result = $this->DB1->query($sql);
        if ($result->num_rows == "") {
            $sql = "SELECT scv.id, scv.title, scv.id AS ktnvideoid, scv.videoURL, scv.description  FROM 
         ktn_video AS scv  WHERE  scv.publishdate <= '$this->publishdate' AND 
                scv.inactive IS NULL ORDER BY scv.publishdate DESC LIMIT 0,$noOfVideos";
            $result = $this->DB1->query($sql);
        }

        return $result;
    }

    function get_video($id) {
        $sql = "select title, videoURL, description, categoryid from ktn_video where id='$id' and inactive is null";
        $result = $this->DB1->query($sql);
        return $result;
    }

    function get_related_vids($categoryID) {
        $sql = "select id, title from ktn_video where inactive is null and categoryid='$categoryID' order by publishdate desc, listorder asc limit 10";
        return $this->DB1->query($sql);
    }

    function get_cat_vids($categoryID, $start, $end) {
        $sql = "select id, title from ktn_video where inactive is null and categoryid='$categoryID' order by publishdate desc, listorder asc limit $start,$end";
        return $this->DB1->query($sql);
    }

    function record_videos($categoryID) {
        $sql = "select id, title from ktn_video where inactive is null and categoryid='$categoryID' order by publishdate desc, listorder asc";
        $result = $this->DB1->query($sql);
        return $result->num_rows;
    }

    function get_video_category($categoryID) {
        $sql = "select name, id from ktn_video_category where id='$categoryID'";
        return $this->DB1->query($sql);
    }

    public function get_category() {

        $sql = "select * from ktn_video_category where showintopnews='1' and videotypeid='1' and inactive is NULL";
        $result = $this->DB1->query($sql);
        return $result;
    }

    public function get_entertainment_category() {
        $sql = "select * from ktn_video_category where  videotypeid='2' and inactive is NULL";
        $result = $this->DB1->query($sql);
        return $result;
    }

    function get_latest_stories($limit) {
        $limitdate = date("Y-m-d H:i:s");
        $sql = "SELECT * FROM std_article where inactive IS NULL and publishdate<='$limitdate' and source='evewoman' ORDER BY std_article.posteddate desc  LIMIT 0, $limit ";
        return $this->DB1->query($sql);
    }

    
   
 
    function keywords_generator($story, $keywords) {
        $dom = new DOMDocument();
        @$dom->loadHTML($story);
        $xpath = new DOMXPath($dom);
        $body = $xpath->query('/html/body');
        $firstoutput = ($dom->saveXml($body->item(0)));
        $keywords = trim(str_replace(' ', '', $keywords));
        $keysearch = explode(';', $keywords);
        $count = 0;

        foreach ($keysearch as $key => $value) {
            $count++;
        }
        $sc = 0;
        while ($sc < $count) {
            $skey = trim($keysearch[$sc]);
            if ($skey != "") {
                $firstoutput = str_replace($skey, "<a href='http://www.standardmedia.co.ke/mobile/?q=$skey'> $skey</a>", $firstoutput);
            }
            $sc++;
        }

        return $firstoutput;
    }

    function get_related_articles($keywords, $articleID,$limit) {
        $keywordsFilterQstr = $this->getKeywordsFilterString($keywords);
        $and = "";
        if ($keywordsFilterQstr != "") {
            $and = "AND";
        }
        $sql = "SELECT art.id, art.title, art.thumbURL, art.summary,art.publishdate FROM std_article AS art WHERE $keywordsFilterQstr $and art.id <> '$articleID' AND art.publishdate <= '$this->publishdate' AND art.inactive IS NULL and art.source='main' ORDER BY art.publishdate DESC LIMIT 4,$limit";
        $result = $this->DB1->query($sql);

        return $result;
    }

    function get_other_other_latest($categoryid, $limit) {
        $max_time = date('Y-m-d H:i:s', mktime(date('H'), date('i'), 0, date('m'), date('d') - 30, date('Y')));
        $sql = "SELECT * FROM std_article where inactive IS NULL and publishdate>='$max_time'
        AND source='main'  and std_article.title
        is not null and categoryid='$categoryid' ORDER BY std_article.publishdate desc, std_article.id desc  LIMIT 0, $limit ";

        return $this->DB1->query($sql);
    }

    function mid_recommend_articles($keywords, $articleID) {
        $keywordsFilterQstr = $this->getKeywordsFilterString($keywords);
        $and = "";
        if ($keywordsFilterQstr != "") {
            $and = "AND";
        }
        $sql = "SELECT art.id, art.title FROM std_article AS art WHERE $keywordsFilterQstr $and art.id <> '$articleID' AND id<'$articleID' AND art.publishdate <= '$this->publishdate' AND art.source='evewoman' and art.inactive IS NULL ORDER BY art.publishdate DESC LIMIT 3";
        $result = $this->DB1->query($sql);

        return $result;
    }
	
  function get_related_articles_home($keywords, $articleID)
    {
        $mdate =
            date('Y-m-d H:i:s', mktime(date('H'), date('i'), 0, date('m'), date('d') - 20, date('Y')));
        $keywordsFilterQstr = $this->getKeywordsFilterString($keywords);
        $and = "";
        if ($keywordsFilterQstr != "") {
            $and = "AND";
        }
        $sql =
            "SELECT art.id, art.title,art.thumbURL FROM std_article AS art WHERE art.source='main' AND $keywordsFilterQstr $and art.id <> '$articleID' AND (art.publishdate <= '$this->publishdate') AND art.inactive IS NULL ORDER BY art.publishday DESC LIMIT 0,2";
        $result = $this->DB1->query($sql);

        return $result;
    }
    function getKeywordsFilterString($keywords) {
        $keywordsFilterQstr = '';
        $keywordsArray = explode(';', $keywords);

        if (count($keywordsArray) > 0) {
            foreach ($keywordsArray as $keyword) {
                if ($keyword != '') {
                    if ($keywordsFilterQstr != '') {
                        $keywordsFilterQstr = $keywordsFilterQstr . ' OR keywords LIKE ';
                    } else {
                        $keywordsFilterQstr = '(keywords LIKE ';
                    }
                    $keywordsFilterQstr = $keywordsFilterQstr . "'%" . trim($this->DB1->escape_str($keyword)) . "%'";
                }
            }

            if ($keywordsFilterQstr != '') {
                $keywordsFilterQstr = $keywordsFilterQstr . ')';
            }
        }

        return $keywordsFilterQstr;
    }

    /* function getArticlesListingForColumn($categoryID, $noOfArticles, $start = 0, $articleID = 0) {
      $dateNow = $this->publishdate;

      $qstr = "SELECT  std_category_picture.imgURL as sIMG,std_category.name, art.id, art.thumbURL, art.title, art.story, art.summary, art.publishdate AS publishDate, art.noofcomments AS noOfComments, art.posteddate as dposted, art.categoryid as catid  FROM std_category, std_article as art left join  std_category_picture on  std_category_picture.categoryid=art.categoryid  WHERE std_category.id = art.categoryid AND ( ( std_category.parentid =  '$categoryID' ) or    (  art.categoryid = '$categoryID' )  )  and art.inactive is null      order by   art.publishdate desc  , art.parentcategorylistorder  limit $start,$noOfArticles ";


      $result = $this->DB1->query($qstr);

      return $result;
      }
     */

    function getArticlesListingForColumn($categoryID, $noOfArticles, $start = 0, $articleID = 0) {
        $dateNow = $this->publishdate;

        $qstr = "SELECT  std_category_picture.imgURL as sIMG,std_category.name, art.id, art.thumbURL, art.title, 
           art.story, art.summary, art.publishdate AS publishDate, art.noofcomments AS noOfComments, 
           art.posteddate as dposted, art.categoryid as catid  FROM std_category, std_article as art 
           left join  std_category_picture on  std_category_picture.categoryid=art.categoryid  
           WHERE art.source='main' AND std_category.id = art.categoryid AND std_category.site='main' AND ( ( std_category.parentid =  '$categoryID' ) or
           (  art.categoryid = '$categoryID' )  )  and art.inactive is null  group by art.categoryid  order by   art.publishdate desc  , 
           art.parentcategorylistorder  limit $start,$noOfArticles ";


        $result = $this->DB1->query($qstr);

        return $result;
    }

    function all_columnist($categoryID) {
        $sql = "select * from std_category where parentid='$categoryID' order by updateddate desc limit 0,6";
        $result = $this->DB1->query($sql);

        return $result;
    }

    function temp_home_columns($categoryID) {
        $sql = "SELECT   std_category_picture.imgURL as sIMG, art.id, art.thumbURL, art.title,
           art.story, art.summary, art.publishdate AS publishDate, art.noofcomments AS noOfComments, 
           art.posteddate as dposted, art.categoryid as catid, art.categoryid as categoryid  FROM  std_article as art 
           left join  (std_category_picture) on  std_category_picture.categoryid=art.categoryid 
           WHERE art.source='main' and  art.categoryid = '$categoryID'    and art.inactive is null  order by   art.publishdate desc  , 
           art.parentcategorylistorder  limit 1";
        $result = $this->DB1->query($sql);

        return $result;
    }

    function get_slideshow($slideshowID) {
        $slideshowID = $this->DB1->escape_str($slideshowID);
        $sql = "SELECT id, imgURL, title, description FROM std_slideshow_picture WHERE slideshowid = '$slideshowID' AND inactive IS NULL ORDER BY listorder";
        $result = $this->DB1->query($sql);

        return $result;
    }

    function get_selected_slideshows($slideshowID) {
        $slideshowID = $this->DB1->escape_str($slideshowID);
        $sql = "SELECT id, imgURL, title,publishdate,updateddate FROM std_slideshow WHERE inactive IS NULL AND publishdate <= '$this->publishdate'and id='$slideshowID'";
        $result = $this->DB1->query($sql);

        return $result;
    }

    function get_all_slideshows($limit) {
        $sql = "SELECT id, imgURL, title FROM std_slideshow WHERE inactive IS NULL AND publishdate <= '$this->publishdate' ORDER BY publishdate DESC LIMIT 0,$limit";
        $result = $this->DB1->query($sql);

        return $result;
    }

    function count_timeline() {
        $limitdate = date("Y-m-d H:i:s");
        $sql = "SELECT count(*) as allstr FROM std_article where inactive IS NULL and publishdate<='$limitdate' ORDER BY std_article.publishdate desc, std_article.id desc ";
        $result = $this->DB1->query($sql);
        foreach ($result->result() as $rl):
            return $rl->allstr;
        endforeach;
    }

    function get_timeline_stories($position, $items_per_group) {
        $limitdate = date("Y-m-d H:i:s");
        $sql = "SELECT * FROM std_article where inactive IS NULL and publishdate<='$limitdate' ORDER BY std_article.publishdate desc, std_article.id desc  LIMIT $position, $items_per_group ";
        $result = $this->DB1->query($sql);
        return $result;
    }

    function get_sde_top_stories($limit) {
        $dateNow = $this->publishdate;
        $where = "";
        $order = "";
        $where .= " and homepagelistorder is not null ";
        $order .= "homepagelistorder asc,";
        $sql = "SELECT *, std_article.id as id FROM std_article LEFT OUTER JOIN std_cfg_article_status on
        std_article.articlestatusid = std_cfg_article_status.id where inactive is null and publishdate <= '$dateNow' AND std_article.source='entertainment'
        $where ORDER BY publishday desc, $order listorder asc   limit $limit";
        $result = $this->DB1->query($sql);

        return $result;
    }

    function get_nairobian_pulse_stories($categoryID, $noOfArticles, $start = 0, $articleID = 0) {
        $dateNow = $this->publishdate;
        $linked_categories = $this->linked_category_where($categoryID, 'entertainment', 'art');
        $where = "";
        $order = "";
        $where .= " and homepagelistorder is not null ";
        $order .= "homepagelistorder asc,";
        $sql = "SELECT
            IF(art.parentcategorylistorder IS NULL OR art.parentcategorylistorder=0,99,art.parentcategorylistorder) AS l_order,
            art.categoryid,art.id, art.thumbURL, art.title, art.story, art.summary,
            art.publishdate AS publishdateishDate, art.noofcomments AS noOfComments, art.posteddate AS dposted, art.author
              FROM (standard_digital_world.`std_article` AS art,standard_digital_world.std_category AS cat)
              WHERE ADDTIME(art.publishdate, '$this->publishDateVariance') <= '$dateNow' AND
			  ((( cat.`site` = 'entertainment' AND art.inactive IS NULL AND
			  ( cat.`id` = art.`categoryid` OR art.`categoryid` = cat.`refer_id` OR
			  cat.`parentid` = art.`categoryid` )
              AND ( cat.`id` = $categoryID OR cat.`refer_id` = $categoryID OR cat.`parentid` = $categoryID )
              AND art.`source` = 'entertainment' )
              AND ( art.`categoryid` = cat.`id` OR art.`categoryid` = cat.`refer_id` )) $linked_categories) GROUP BY art.id
              ORDER BY art.publishday DESC, l_order LIMIT $start , $noOfArticles;";
        $result = $this->DB1->query($sql);

        return $result;
    }

    private function linked_category_where($id, $site, $art_prefix = '') {
        $id = (int) $id;
        if ($id) {
            $this->DB1->where("(id = {$id} OR refer_id = {$id})", null, false);
            $this->DB1->where("site", $site);
            $res = $this->DB1->get('std_category', 1);
            if (0 < $res->num_rows()) {
                $res = $res->row();
                $id = $res->id;
                $art_prefix = $art_prefix ? $art_prefix . '.' : '';
                return " OR ({$art_prefix}linked_category LIKE '%,{$id}%' OR " .
                        "{$art_prefix}linked_category LIKE '%{$id},%' OR " .
                        "{$art_prefix}linked_category = '{$id}')";
            }
        }
        return '';
    }

    function get_related_seealso($keywords, $articleID) {
        $keywordsFilterQstr = $this->getKeywordsFilterString($keywords);
        $and = "";
        if ($keywordsFilterQstr != "") {
            $and = "AND";
        }
        $sql = "SELECT art.id, art.title FROM std_article AS art WHERE art.source='main' AND $keywordsFilterQstr $and art.id <> '$articleID'
                 AND art.publishdate <= '$this->publishdate' AND art.inactive IS NULL ORDER BY art.publishday DESC LIMIT 0,3";
        $result = $this->DB1->query($sql);

        return $result;
    }

    function chrstring($string) {
        $search = array(chr(0xe2) . chr(0x80) . chr(0x98),
            chr(0xe2) . chr(0x80) . chr(0x99),
            chr(0xe2) . chr(0x80) . chr(0x9c),
            chr(0xe2) . chr(0x80) . chr(0x9d),
            chr(0xe2) . chr(0x80) . chr(0x93),
            chr(0xe2) . chr(0x80) . chr(0x94));
        $replace = array(
            '&lsquo;',
            '&rsquo;',
            '&ldquo;',
            '&rdquo;',
            '&ndash;',
            '&mdash;');

        return str_ireplace("�", "", str_replace($search, $replace, $string));
    }

    function time_ago($since) {
        $since = time() - strtotime($since);
        $chunks = array(
            array(60 * 60 * 24 * 365, 'year'),
            array(60 * 60 * 24 * 30, 'month'),
            array(60 * 60 * 24 * 7, 'week'),
            array(60 * 60 * 24, 'day'),
            array(60 * 60, 'hour'),
            array(60, 'minute'),
            array(1, 'second')
        );

        for ($i = 0, $j = count($chunks); $i < $j; $i++) {
            $seconds = $chunks[$i][0];
            $name = $chunks[$i][1];
            if (($count = floor($since / $seconds)) != 0) {
                break;
            }
        }

        $print = ($count == 1) ? '1 ' . $name : "$count {$name}s";

        return $print . ' ago';
    }

    function detectif_mobile() {
        $useragent = $_SERVER['HTTP_USER_AGENT'];
        if (preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i', $useragent) || preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i', substr($useragent, 0, 4)))
            return TRUE;
    }

    function getBrowserbytype() {
        $u_agent = $_SERVER['HTTP_USER_AGENT'];
        $bname = 'Unknown';
        $platform = 'Unknown';
        $version = "";

        //First get the platform?
        if (preg_match('/linux/i', $u_agent)) {
            $platform = 'linux';
        } elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
            $platform = 'mac';
        } elseif (preg_match('/windows|win32/i', $u_agent)) {
            $platform = 'windows';
        }

        // Next get the name of the useragent yes seperately and for good reason
        if (preg_match('/MSIE/i', $u_agent) && !preg_match('/Opera/i', $u_agent)) {
            $bname = 'Internet Explorer';
            $ub = "MSIE";
        } elseif (preg_match('/Firefox/i', $u_agent)) {
            $bname = 'Mozilla Firefox';
            $ub = "Firefox";
        } elseif (preg_match('/Chrome/i', $u_agent)) {
            $bname = 'Google Chrome';
            $ub = "Chrome";
        } elseif (preg_match('/Safari/i', $u_agent)) {
            $bname = 'Apple Safari';
            $ub = "Safari";
        } elseif (preg_match('/Opera/i', $u_agent)) {
            $bname = 'Opera';
            $ub = "Opera";
        } elseif (preg_match('/Netscape/i', $u_agent)) {
            $bname = 'Netscape';
            $ub = "Netscape";
        }

        // finally get the correct version number
        $known = array('Version', $ub, 'other');
        $pattern = '#(?<browser>' . join('|', $known) .
                ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
        if (!preg_match_all($pattern, $u_agent, $matches)) {
            // we have no matching number just continue
        }

        // see how many we have
        $i = count($matches['browser']);
        if ($i != 1) {
            //we will have two since we are not using 'other' argument yet
            //see if version is before or after the name
            if (strripos($u_agent, "Version") < strripos($u_agent, $ub)) {
                $version = $matches['version'][0];
            } else {
                $version = $matches['version'][1];
            }
        } else {
            $version = $matches['version'][0];
        }

        // check if we have a number
        if ($version == null || $version == "") {
            $version = "?";
        }

        return array(
            'userAgent' => $u_agent,
            'name' => $bname,
            'version' => $version,
            'platform' => $platform,
            'pattern' => $pattern
        );
    }

    function do_search($limit) {
        if (isset($_GET['q'])) {
            $searchtext = $_GET['q'];
            $where_value = $this->set_search_condition($searchtext);
            $sql = "SELECT * FROM std_article WHERE ($where_value) and std_article.source='main' order by publishdate desc $limit";
            //echo $sql;
            //check if achives is defined
            if (isset($_GET['place'])) {
                //search in archives
                $this->DB3 = $this->load->database('thirddb', true); // DB 2
                $resultDB3 = $this->DB3->query($sql);
                $this->DB3->close();
                if ($resultDB3->num_rows != "") {
                    return $resultDB3;
                } else {
                    $this->DB2 = $this->load->database('seconddb', true); // DB 3
                    $resultDB2 = $this->DB2->query($sql);
                    $this->DB2->close();
                }
            } else {
                $resultDB1 = $this->DB1->query($sql);
                if ($resultDB1->num_rows != "") {
                    return $resultDB1;
                } else {
                    // this is the second db search
                    $this->DB3 = $this->load->database('thirddb', true); // DB 2
                    $resultDB3 = $this->DB3->query($sql);
                    $this->DB3->close();
                    if ($resultDB3->num_rows != "") {
                        return $resultDB3;
                    } else {
                        $this->DB2 = $this->load->database('seconddb', true); // DB 3
                        $resultDB2 = $this->DB2->query($sql);
                        $this->DB2->close();
                    }
                }
            }
        }
    }

    function set_search_condition($term) {
        $searchterm = explode(' ', $this->removeCommonWords($term));
        $searchterm = preg_replace('/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s', '', $searchterm);
        $searchColumns = array("keywords", "title", "long_title", "summary");
        $searchCondition = "";
        for ($i = 0; $i < count($searchColumns); $i++) {
            $searchFieldName = $searchColumns[$i];
            $searchCondition .= "($searchFieldName LIKE '%" . implode("%' OR $searchFieldName LIKE '%", $searchterm) . "%')";
            if ($i + 1 < count($searchColumns))
                $searchCondition .= " OR ";
        }
        return $searchCondition;
    }

    function removeCommonWords($input) {
        $commonWords = array('a', 'able', 'about', 'above', 'abroad', 'according', 'accordingly', 'across', 'actually', 'adj', 'after', 'afterwards', 'again', 'against', 'ago', 'ahead', 'ain\'t', 'all', 'allow', 'allows', 'almost', 'alone', 'along', 'alongside', 'already', 'also', 'although', 'always', 'am', 'amid', 'amidst', 'among', 'amongst', 'an', 'and', 'another', 'any', 'anybody', 'anyhow', 'anyone', 'anything', 'anyway', 'anyways', 'anywhere', 'apart', 'appear', 'appreciate', 'appropriate', 'are', 'aren\'t', 'around', 'as', 'a\'s', 'aside', 'ask', 'asking', 'associated', 'at', 'available', 'away', 'awfully', 'b', 'back', 'backward', 'backwards', 'be', 'became', 'because', 'become', 'becomes', 'becoming', 'been', 'before', 'beforehand', 'begin', 'behind', 'being', 'believe', 'below', 'beside', 'besides', 'best', 'better', 'between', 'beyond', 'both', 'brief', 'but', 'by', 'c', 'came', 'can', 'cannot', 'cant', 'can\'t', 'caption', 'cause', 'causes', 'certain', 'certainly', 'changes', 'clearly', 'c\'mon', 'co', 'co.', 'com', 'come', 'comes', 'concerning', 'consequently', 'consider', 'considering', 'contain', 'containing', 'contains', 'corresponding', 'could', 'couldn\'t', 'course', 'c\'s', 'currently', 'd', 'dare', 'daren\'t', 'definitely', 'described', 'despite', 'did', 'didn\'t', 'different', 'directly', 'do', 'does', 'doesn\'t', 'doing', 'done', 'don\'t', 'down', 'downwards', 'during', 'e', 'each', 'edu', 'eg', 'eight', 'eighty', 'either', 'else', 'elsewhere', 'end', 'ending', 'enough', 'entirely', 'especially', 'et', 'etc', 'even', 'ever', 'evermore', 'every', 'everybody', 'everyone', 'everything', 'everywhere', 'ex', 'exactly', 'example', 'except', 'f', 'fairly', 'far', 'farther', 'few', 'fewer', 'fifth', 'first', 'five', 'followed', 'following', 'follows', 'for', 'forever', 'former', 'formerly', 'forth', 'forward', 'found', 'four', 'from', 'further', 'furthermore', 'g', 'get', 'gets', 'getting', 'given', 'gives', 'go', 'goes', 'going', 'gone', 'got', 'gotten', 'greetings', 'h', 'had', 'hadn\'t', 'half', 'happens', 'hardly', 'has', 'hasn\'t', 'have', 'haven\'t', 'having', 'he', 'he\'d', 'he\'ll', 'hello', 'help', 'hence', 'her', 'here', 'hereafter', 'hereby', 'herein', 'here\'s', 'hereupon', 'hers', 'herself', 'he\'s', 'hi', 'him', 'himself', 'his', 'hither', 'hopefully', 'how', 'howbeit', 'however', 'hundred', 'i', 'i\'d', 'ie', 'if', 'ignored', 'i\'ll', 'i\'m', 'immediate', 'in', 'inasmuch', 'inc', 'inc.', 'indeed', 'indicate', 'indicated', 'indicates', 'inner', 'inside', 'insofar', 'instead', 'into', 'inward', 'is', 'isn\'t', 'it', 'it\'d', 'it\'ll', 'its', 'it\'s', 'itself', 'i\'ve', 'j', 'just', 'k', 'keep', 'keeps', 'kept', 'know', 'known', 'knows', 'l', 'last', 'lately', 'later', 'latter', 'latterly', 'least', 'less', 'lest', 'let', 'let\'s', 'like', 'liked', 'likely', 'likewise', 'little', 'look', 'looking', 'looks', 'low', 'lower', 'ltd', 'm', 'made', 'mainly', 'make', 'makes', 'many', 'may', 'maybe', 'mayn\'t', 'me', 'mean', 'meantime', 'meanwhile', 'merely', 'might', 'mightn\'t', 'mine', 'minus', 'miss', 'more', 'moreover', 'most', 'mostly', 'mr', 'mrs', 'much', 'must', 'mustn\'t', 'my', 'myself', 'n', 'name', 'namely', 'nd', 'near', 'nearly', 'necessary', 'need', 'needn\'t', 'needs', 'neither', 'never', 'neverf', 'neverless', 'nevertheless', 'new', 'next', 'nine', 'ninety', 'no', 'nobody', 'non', 'none', 'nonetheless', 'noone', 'no-one', 'nor', 'normally', 'not', 'nothing', 'notwithstanding', 'novel', 'now', 'nowhere', 'o', 'obviously', 'of', 'off', 'often', 'oh', 'ok', 'okay', 'old', 'on', 'once', 'one', 'ones', 'one\'s', 'only', 'onto', 'opposite', 'or', 'other', 'others', 'otherwise', 'ought', 'oughtn\'t', 'our', 'ours', 'ourselves', 'out', 'outside', 'over', 'overall', 'own', 'p', 'particular', 'particularly', 'past', 'per', 'perhaps', 'placed', 'please', 'plus', 'possible', 'presumably', 'probably', 'provided', 'provides', 'q', 'que', 'quite', 'qv', 'r', 'rather', 'rd', 're', 'really', 'reasonably', 'recent', 'recently', 'regarding', 'regardless', 'regards', 'relatively', 'respectively', 'right', 'round', 's', 'said', 'same', 'saw', 'say', 'saying', 'says', 'second', 'secondly', 'see', 'seeing', 'seem', 'seemed', 'seeming', 'seems', 'seen', 'self', 'selves', 'sensible', 'sent', 'serious', 'seriously', 'seven', 'several', 'shall', 'shan\'t', 'she', 'she\'d', 'she\'ll', 'she\'s', 'should', 'shouldn\'t', 'since', 'six', 'so', 'some', 'somebody', 'someday', 'somehow', 'someone', 'something', 'sometime', 'sometimes', 'somewhat', 'somewhere', 'soon', 'sorry', 'specified', 'specify', 'specifying', 'still', 'sub', 'such', 'sup', 'sure', 't', 'take', 'taken', 'taking', 'tell', 'tends', 'th', 'than', 'thank', 'thanks', 'thanx', 'that', 'that\'ll', 'thats', 'that\'s', 'that\'ve', 'the', 'their', 'theirs', 'them', 'themselves', 'then', 'thence', 'there', 'thereafter', 'thereby', 'there\'d', 'therefore', 'therein', 'there\'ll', 'there\'re', 'theres', 'there\'s', 'thereupon', 'there\'ve', 'these', 'they', 'they\'d', 'they\'ll', 'they\'re', 'they\'ve', 'thing', 'things', 'think', 'third', 'thirty', 'this', 'thorough', 'thoroughly', 'those', 'though', 'three', 'through', 'throughout', 'thru', 'thus', 'till', 'to', 'together', 'too', 'took', 'toward', 'towards', 'tried', 'tries', 'truly', 'try', 'trying', 't\'s', 'twice', 'two', 'u', 'un', 'under', 'underneath', 'undoing', 'unfortunately', 'unless', 'unlike', 'unlikely', 'until', 'unto', 'up', 'upon', 'upwards', 'us', 'use', 'used', 'useful', 'uses', 'using', 'usually', 'v', 'value', 'various', 'versus', 'very', 'via', 'viz', 'vs', 'w', 'want', 'wants', 'was', 'wasn\'t', 'way', 'we', 'we\'d', 'welcome', 'well', 'we\'ll', 'went', 'were', 'we\'re', 'weren\'t', 'we\'ve', 'what', 'whatever', 'what\'ll', 'what\'s', 'what\'ve', 'when', 'whence', 'whenever', 'where', 'whereafter', 'whereas', 'whereby', 'wherein', 'where\'s', 'whereupon', 'wherever', 'whether', 'which', 'whichever', 'while', 'whilst', 'whither', 'who', 'who\'d', 'whoever', 'whole', 'who\'ll', 'whom', 'whomever', 'who\'s', 'whose', 'why', 'will', 'willing', 'wish', 'with', 'within', 'without', 'wonder', 'won\'t', 'would', 'wouldn\'t', 'x', 'y', 'yes', 'yet', 'you', 'you\'d', 'you\'ll', 'your', 'you\'re', 'yours', 'yourself', 'yourselves', 'you\'ve', 'z', 'zero');
        return preg_replace('/\b(' . implode('|', $commonWords) . ')\b/', '', $input);
    }
function getnews_alerts(){
$dnow = date('Y-m-d H:i:s');
$datetime_from = date("Y-m-d H:i", strtotime("-30 minutes", strtotime($dnow)));
//$sql = "select * from sms_alerts where timeposted>='$datetime_from' order by alertid desc limit 1";
$sql = "select id,title from std_article where source='main' and inactive is null and publishdate>='$datetime_from' and breaking='1' order by id desc limit 1";
return $this->DB1->query($sql);
}
 
function generate_rd($random_string_length){
	$characters = 'abcdefghijklmnopqrstuvwxyz0123456789';
	$string = '';
 for ($i = 0; $i < $random_string_length; $i++) {
      $string .= $characters[rand(0, strlen($characters) - 1)];
 }
 return $string;
}
function get_client_ip() 
    {
	    $ipaddress = '';
	    if (@$_SERVER['HTTP_CLIENT_IP'])
	        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
	    else if(@$_SERVER['HTTP_X_FORWARDED_FOR'])
	        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
	    else if(@$_SERVER['HTTP_X_FORWARDED'])
	        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
	    else if(@$_SERVER['HTTP_FORWARDED_FOR'])
	        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
	    else if(@$_SERVER['HTTP_FORWARDED'])
	        $ipaddress = $_SERVER['HTTP_FORWARDED'];
	    else if(@$_SERVER['REMOTE_ADDR'])
	        $ipaddress = $_SERVER['REMOTE_ADDR'];
	    else
	        $ipaddress = 'UNKNOWN';
	    return $ipaddress;
	}
}

?>
