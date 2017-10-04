<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Search extends CI_Controller
   {
     public function __construct()
        {
            error_reporting(E_ALL);
            ini_set('display_errors',1);
            parent::__construct();
            $this->load->model("Article_model","amodel");
            $this->load->model("Category_model","cmodel");
        }
     public function index()
        {
            $data["latest"]=$this->amodel->latest_articles(4);
            $data["trending"]=$this->amodel->trending_articles(5);
            $data["featured"]=$this->amodel->featured_articles(8);
            $data["view"]="search";
            $this->load->view("structure",$data);
        }
    }
?>