<?php
class Sitemap extends CI_Controller
	{
		public function __construct()
		 	{   
		 		parent::__construct();

		 	}
		public function index()
			{
                		
				$this->load->model("Sitemap_model");
				$this->load->model("Article_model");
				$data["data"]=$this->Sitemap_model->sitem(date('Y-m-d'));
				$this->load->view('sitemap',$data);
			} 	
	}