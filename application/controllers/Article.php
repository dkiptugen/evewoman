<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Article extends CI_Controller
  {
      public $data;
      public function __construct()
        {
            parent::__construct();
            $this->load->library('user_agent');
            $this->load->model("Article_model",'amodel');
            $this->load->model("Category_model","cmodel");
            
        }    
      public function article($id,$title=null)
        {            
            try
               {
                  //$this->add_count($id);
                  $this->data["article"]=$this->amodel->getArticle($id,$title);
                  $this->data["meta"]=$this->data["article"];     
                  $this->data["featured"]=$this->amodel->featured_articles(8);
                  $this->data["latest"]=$this->amodel->latest_articles(8);
                  $this->data["trending"]=$this->amodel->trending_articles(8);
                  $this->data["popular"]=$this->amodel->popular_articles(8);
               	  $this->data["related"]=$this->amodel->related_articles($this->data["article"],6);
               	  $this->data["view"]="article";
                  $this->load->view("structure",$this->data);
               }
            catch(Exception $e)
               {
               	write_file(FCPATH .'/application/logs/a'.date('d-M-Y').'.log', date('d-M-Y h:i:sA').'-error:'.json_encode($e->getMessage()), 'a');
               }          
        }
      public function add_count($slug)
              { 
                try
                 {
                    $this->load->helper('cookie'); // load cookie helper         
                    $check_visitor = $this->input->cookie(urldecode($slug), FALSE); // this line will return the cookie which has slug name        
                    $ip = $this->input->ip_address(); // this line will return the visitor ip address              
                    if ($check_visitor == false) 
                        { 
                              $cookie = array( "name" => urldecode($slug), "value" => "$ip", "expire" => time() + 7200, "secure" => false ); 
                              $this->input->set_cookie($cookie);
                              $this->amodel->update_counter(urldecode($slug));
                        }
                  }
              catch(Exception $e)
                 {
                  write_file(FCPATH .'/application/logs/addcount_'.date('d-M-Y').'.log', date('d-M-Y h:i:sA').'-error:'.json_encode($e->getMessage()), 'a');
                 }
              } 
       public function topic($keyword)
        {
          try
            {
              $keyword=str_replace("-"," ",$keyword);
              $this->data["cat_stories"]=$this->amodel->keyword_search($keyword,30);
              $this->data["view"]="modules/category";
              $this->load->view("structure",$this->data);
            }
          catch(Exception $e)
             {
              write_file(FCPATH .'/application/logs/topic_'.date('d-M-Y').'.log', date('d-M-Y h:i:sA').'-error:'.json_encode($e->getMessage()), 'a');
             }
        }  
       
  }