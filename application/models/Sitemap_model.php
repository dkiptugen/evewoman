<?php
class Sitemap_model extends CI_Model
	{
		public function __construct()
		 	{
		 		parent::__construct();
		 	}
		public function sitem($date)
			{
				$this->db->select("id,title,publishday,thumbURL");
				$this->db->where("publishday",$date);
				$this->db->where("source",'evewoman');
				$dbh=$this->db->get("std_article");
				return $dbh->result();
			} 	
	}