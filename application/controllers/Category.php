<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Category extends CI_Controller
  {
    public $data;
    public function __construct()
      {
        parent::__construct();
        $this->load->model("Category_model","cmodel");
        $this->load->model("Article_model","amodel");
      }
    public function category($catid,$catname=null)
         {
            $check=$this->cmodel->hasChild($catid);
            $this->data["parent"]=$this->cmodel->getParent($catid);
            $this->data['category']=$this->cmodel->getSelectedCategory($catid);
            if($check->child==1)
              {
                $this->data['children']=$check->result;
                $this->data["latest"]=$this->amodel->latest_articles(4,0);

                $this->data['featured']=$this->cmodel->catStories($catid,$catname,6);
                foreach ($this->data['children'] as $value) 
                  {
                    $this->data['cat'][]=(object)array('CatName'=>$value->name,'CatId'=>$value->id,'result'=>$this->cmodel->catStories($value->id,$value->name,8));
                  }  

                $this->data["view"]="parentCategory";
              }
            else
              {
                $this->data["popular"]=$this->amodel->popular_articles(4,0);
                if($this->cmodel->isChild($catid)->child)
                  {

                    $this->data["breadcrumb"]='<ul class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
                                                    <li itemprop="itemListElement" itemscope
      itemtype="http://schema.org/ListItem"><a href="'.site_url().'" itemscope itemtype="http://schema.org/Thing"
       itemprop="item"><span itemprop="name">Home</span><meta itemprop="position" content="1" /></a></li>
                                                  <li itemprop="itemListElement" itemscope
      itemtype="http://schema.org/ListItem">
                                                    <a href="'.site_url('category/'.$this->cmodel->getOtherCatId($this->cmodel->isChild($catid)->parent).'/'.$this->amodel->getCatName($this->cmodel->isChild($catid)->parent)).'" itemscope itemtype="http://schema.org/Thing"
       itemprop="item">
                                                    <span itemprop="name">'.$this->amodel->getCatName($this->cmodel->isChild($catid)->parent).'</span>
                                                    <meta itemprop="position" content="2" /></a>
                                                    <span class="divider"></span>
                                                  </li>
                                                  <li class="active" itemprop="itemListElement" itemscope
      itemtype="http://schema.org/ListItem"><a href="'.site_url('category/'.$catid.'/'.$catname).'" itemscope itemtype="http://schema.org/Thing"
       itemprop="item" ><span itemprop="name">'.$catname.'</span><meta itemprop="position" content="3" /></a> <span class="divider"></span></li>                                                  
                                              </ul>';
                  }
                else
                  {
                    $this->data["breadcrumb"]='<ul class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
                                                    <li itemprop="itemListElement" itemscope
      itemtype="http://schema.org/ListItem"><a href="'.site_url().'" itemscope itemtype="http://schema.org/Thing"
       itemprop="item"><span itemprop="name">Home</span></a><meta itemprop="position" content="1" /></li>
                                                    <li class="active" itemprop="itemListElement" itemscope
      itemtype="http://schema.org/ListItem"><a href="'.site_url('category/'.$catid.'/'.$catname).'" itemscope itemtype="http://schema.org/Thing"
       itemprop="item" ><span itemprop="name">'.$catname.'</span><meta itemprop="position" content="3" /></a> <span class="divider"></span></li>                                                       
                                              </ul>';
                  }
                $pag=$this->assist->page(current_url(),$this->cmodel->NcatStories($catid),20,3);
                $this->data["link"]=$pag->links;
                $this->data['stories']=$this->cmodel->catStories($catid,$catname,$pag->vpp,$this->input->get('page'));
                $this->data["view"]="childCategory";
              }

          
            
            $this->load->view("structure",$this->data);
         }

  }
?>