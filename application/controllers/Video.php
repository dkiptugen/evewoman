<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Video extends CI_Controller
{
    public function __construct()
      {
          error_reporting(E_ALL);
          ini_set("display_errors",1);
          parent::__construct();
          $this->load->library('user_agent');
          $this->load->model("Article_model","amodel");
          $this->load->model("Category_model","cmodel");
          $this->load->helper('share');
      }
    public function index()
      {
          $this->data["videos"]=$this->amodel->show_videos();
          $this->data["view"]="mainvideos";
          $this->load->view("structure",$this->data);
      }
    public function watch($id,$title=null)
      { 
        $this->data["meta"]=NULL;
        $this->data["mainvideo"]=$this->amodel->get_video($id);  
        $this->data["latest"]=$this->amodel->latest_articles(6);
        //$this->data["trending"]=$this->Article_model->trending_articles(3);
        $this->data["popular"]=$this->amodel->popular_articles(8);
        $this->data["view"]="videos";
        $this->data["related"]=$this->amodel->get_related_video($this->data["mainvideo"],3);
        $this->load->view("structure",$this->data);
        //var_dump($data["related"]);
      }
     
}