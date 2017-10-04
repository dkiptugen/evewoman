<?php

class M extends CI_controller 
  {  
	  function __construct()  
  	  { 	  
        parent::__construct();  
        error_reporting(E_ALL);
        ini_set("display_errors",1);
  	  }
    function index($type=NULL)
  	  {
        if($this->input->get("articleID"))
          {
             redirect("http://www.standardmedia.co.ke/article/".$this->input->get("articleID")."/redirected","refresh");
          }
        elseif($this->input->get("categoryID"))
          {
             redirect("http://www.standardmedia.co.ke/category/".$this->input->get("categoryID")."/redirected","refresh");
          }
        else
          {
              redirect("http://www.standardmedia.co.ke/evewoman","refresh");
          }    
	    }
  }