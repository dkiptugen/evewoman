<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Category_model extends CI_Model
  {
    public $db;
    public $db2;
    public $db3;
    public function __construct()
        {
          parent::__construct();
          $this->db2=$this->load->database("thirddb",TRUE);
          $this->db3=$this->load->database("seconddb",TRUE);
          $this->db=$this->load->database("default",TRUE);
        }
    public function hasChild($id)
      {
        $x=array('child'=>0);
        $id=$this->getRealCatId($id);
        $this->db->where('parentid',$id)
                 ->where('refer_id!=0')
                 ->where('site','evewoman');
        $dbh=$this->db->get('std_category');
        if($dbh->num_rows()>0)
          {
            $x=array('child'=>1,'result'=>$dbh->result());
          }
        return (object)$x;
      }
    public function getParent($catid)
      {
        $dbh=$this->db->query("select * from std_category where site='evewoman' and (refer_id=".$catid." and parentid!=0) or (id=".$catid." and refer_id=0)");
        if($dbh->num_rows()>0)
          {
            
            return $dbh->row();
          }
        else
          {
            return False;
          }
      }
    public function confusedCategory($categoryid)
      {
        $this->db->where('refer_id',0)
                 ->where('parentid',0)
                 ->where('site','evewoman')
                 ->where('inactive is null')
                 ->where('id',$categoryid);
        $dbh=$this->db->get('std_category');
        if($dbh->num_rows()>0)
          {
            return true;
          }
        else
          {
            return false;
          }
      }
    public function getOtherCatId($categoryid)
      {
        $this->db->where('refer_id',$categoryid)
                 ->where('refer_id!=0')
                 ->where('site','evewoman');
        $dbh=$this->db->get('std_category');
        if($dbh->num_rows()>0)
          {
            return $dbh->row()->id;
          }
        else
          {
            return $categoryid;
          }
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
    public function getSelectedCategory($categoryid)
      {
         $category=$this->getRealCatId($categoryid);
         $categoryid=($category)?$category:$categoryid;
         $this->db->where('refer_id',$categoryid)
                  ->where('site','evewoman');
         $dbh=$this->db->get('std_category');
         return $dbh->row();

      }
    public function NcatStories($categoryid)
      {
        if($this->confusedCategory($categoryid))
          {
            $this->db->where('categoryid',$categoryid);
          }
        else
          {
            $categoryid=$this->getRealCatId($categoryid);
           
            $children[]=$categoryid;
            if($this->hasChild($categoryid)->child==0)
              {
                $this->db->where('categoryid',$categoryid);
              }
            else
              {
                foreach($this->hasChild($categoryid)->result as $value)
                  {
                    $children[]=$value->refer_id;
                  }            
                $this->db->where_in('categoryid',$children);
              }
          }
        $this->db->where('inactive is null')
                 ->where('source','evewoman');
        $dbh=$this->db->get('std_article');
        return $dbh->num_rows(); 
      }   
    public function catStories($categoryid,$title,$limit=32,$start=0)
      {
        //first database
        if($this->confusedCategory($categoryid))
          {
            $this->db->where('categoryid',$categoryid);
          }
        else
          {
            $categoryid=$this->getRealCatId($categoryid);
            
            $children[]=$categoryid;
            if($this->hasChild($categoryid)->child==0)
              {
                $this->db->where('categoryid',$categoryid);
              }
            else
              {
                foreach($this->hasChild($categoryid)->result as $value)
                  {
                    $children[]=$value->refer_id;
                  }            
                $this->db->where_in('categoryid',$children);
              }
          }
        $this->db->where('inactive is null')
                 ->where('source','evewoman')
                 ->order_by("publishday","desc")
                 ->order_by("listorder"," asc")
                 ->order_by("homepagelistorder","asc")
                 ->limit($limit,$start);
        $dbh=$this->db->get('std_article');
        if($dbh->num_rows()<$limit)
          {
            $limit=(int)($limit-$dbh->num_rows());
            //second Db
            $data=$dbh->result();
            if($this->confusedCategory($categoryid))
              {
                $this->db2->where('categoryid',$categoryid);
              }
            else
              {
                $categoryid=$this->getRealCatId($categoryid);
                
                $children[]=$categoryid;
                if($this->hasChild($categoryid)->child==0)
                  {
                    $this->db2->where('categoryid',$categoryid);
                  }
                else
                  {
                    foreach($this->hasChild($categoryid)->result as $value)
                      {
                        $children[]=$value->refer_id;
                      }            
                    $this->db2->where_in('categoryid',$children);
                  }
              }
            $this->db2->where('inactive is null')
                     ->where('source','evewoman')
                     ->order_by("publishday","desc")
                     ->order_by("listorder"," asc")
                     ->order_by("homepagelistorder","asc")
                     ->limit($limit,$start);
            $dbh=$this->db2->get('std_article');
            if($dbh->num_rows()<$limit)
              {
                $limit=(int)($limit-$dbh->num_rows());
                //third db
                $data=$dbh->result();
                if($this->confusedCategory($categoryid))
                  {
                    $this->db3->where('categoryid',$categoryid);
                  }
                else
                  {
                    $categoryid=$this->getRealCatId($categoryid);
                    
                    $children[]=$categoryid;
                    if($this->hasChild($categoryid)->child==0)
                      {
                        $this->db3->where('categoryid',$categoryid);
                      }
                    else
                      {
                        foreach($this->hasChild($categoryid)->result as $value)
                          {
                            $children[]=$value->refer_id;
                          }            
                        $this->db3->where_in('categoryid',$children);
                      }
                  }
                $this->db3->where('inactive is null')
                         ->where('source','evewoman')
                         ->order_by("publishday","desc")
                         ->order_by("listorder"," asc")
                         ->order_by("homepagelistorder","asc")
                         ->limit($limit,$start);
                $dbh=$this->db3->get('std_article');
                if($dbh->num_rows()>0)
                  {
                    $limit=(int)($limit-$dbh->num_rows());
                    return array_merge($data,$dbh->result());

                  }
              }
            else
              {
                return array_merge($data,$dbh->result());
              }         

          }
        else
          {
            return $dbh->result();
          }         
      }
    public function isChild($id)
      {
        $x=array('child'=>FALSE);
        $categoryid=$this->getRealCatId($id);
        $this->db->where("refer_id",$categoryid)
                 ->where("parentid!=0");
        $dbh=$this->db->get("std_category");
        if($dbh->num_rows()>0)
          {
            $x=array('child'=>TRUE,'parent'=>$dbh->row()->parentid);
          }
        return (object)$x;
      }
    
}