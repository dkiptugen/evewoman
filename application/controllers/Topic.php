<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Topic extends CI_Controller
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
    public function topic($keyword)
      {
        $keyword=str_replace("-"," ",$keyword);
        $data['breadcrumb']='<ul class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
                              <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                <a href="'.site_url().'" itemscope itemtype="http://schema.org/Thing"  itemprop="item">
                                    <span itemprop="name">Home</span>
                                </a>
                                <meta itemprop="position" content="1" />
                              </li>
                              <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                <a href="'.site_url().'" itemscope itemtype="http://schema.org/Thing"  itemprop="item">
                                    <span itemprop="name">Topic</span>
                                </a>
                                <meta itemprop="position" content="2" />
                              </li>
                              <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="'.current_url().'" itemscope itemtype="http://schema.org/Thing" itemprop="item" ><span itemprop="name">'.ucfirst($keyword).'</span><meta itemprop="position" content="3" /></a> <span class="divider"></span></li>                                                       
                            </ul>';
        $pag=$this->assist->page(current_url(),$this->amodel->getNokeyword($keyword),16,3);
        $data["stories"]=$this->amodel->keyword_search($keyword,$pag->vpp,$this->input->get('page'));
        $data["link"]=$pag->links;
        $data["view"]="childCategory";
        $this->load->view("structure",$data);
      }  
    public function author($authorid,$author)
      {
        $data['breadcrumb']='<ul class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
                              <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                <a href="'.site_url().'" itemscope itemtype="http://schema.org/Thing"  itemprop="item">
                                    <span itemprop="name">Home</span>
                                </a>
                                <meta itemprop="position" content="1" />
                              </li>
                              <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                <a href="'.site_url().'" itemscope itemtype="http://schema.org/Thing"  itemprop="item">
                                    <span itemprop="name">Author</span>
                                </a>
                                <meta itemprop="position" content="2" />
                              </li>
                              <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="'.current_url().'" itemscope itemtype="http://schema.org/Thing" itemprop="item" ><span itemprop="name">'.ucfirst(str_replace('-',' ',$author)).'</span><meta itemprop="position" content="3" /></a> <span class="divider"></span></li>                                                       
                            </ul>';
        $pag=$this->assist->page(current_url(),$this->amodel->getNoauthor($authorid),20,3);
        $data["stories"]=$this->amodel->author($authorid,$pag->vpp,$this->input->get('page'));
        $data["link"]=$pag->links;
        $data["view"]="childCategory";
        $this->load->view("structure",$data);
      }
}
      ?>