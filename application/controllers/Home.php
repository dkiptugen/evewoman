<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller
   {
        public $data;
     function __construct()
        {
            parent::__construct();
            $this->load->model("Article_model","amodel");
            $this->load->model("Category_model",'cmodel');
        }
     function index()
        {
            if($this->input->get("articleID"))
                {
                    $this->output->set_header("Location: ".site_url("article/".$this->input->get("articleID")."/".$this->input->get("story_title")).", TRUE, 301"); 
                    redirect("article/".$this->input->get("articleID")."/".$this->input->get("story_title"));
                }
            elseif($this->input->get("categoryID"))
                {
                    $this->output->set_header("Location: ".site_url("category/".$this->input->get("categoryID")).", TRUE, 301");
                    redirect("category/".$this->input->get("categoryID"));
                }
            $this->data["nav"]=$this->amodel->getNav();
            $this->data["latest"]=$this->amodel->latest_articles(6);
            $this->data["featured"]=$this->amodel->featured_articles(3);
            $this->data["popular"]=$this->amodel->popular_articles(6);
            $this->data["trending"]=$this->amodel->trending_articles(6);
            $this->data["videos"]=$this->amodel->get_latest_videos(3);
            $this->data["woman"]=$this->cmodel->catStories(271,"lady talk",6);
            $this->data["food"]=$this->cmodel->catStories(267,"Food",6);
            $this->data["clinic"]=$this->cmodel->catStories(388,"The clinic",3);
            $this->data["beauty"]=$this->cmodel->catStories(282,"Beauty",8);
            $this->data["view"]="home";            
            $this->load->view("structure",$this->data);
        }
   }