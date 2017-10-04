<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Mobile_home extends CI_Controller {

    public $DB1 = null;
//var $db;
    public $DB2 = null;
    public $DB3 = null;
    public $SDE = null;
    public $CLASSIFIEDS = null;

    public function __construct() {
        parent::__construct();
        $this->DB1 = $this->load->database('default', TRUE); // DB 2
        //var $public_key = "6LcbtswSAAAAAD7qN7QW1LAgF7Shdma4dXqjhedc";
        //var $privkey = "6LcbtswSAAAAAEqlx21KxrF2MrJgEDL0BiGBO4sl";
        // $this->DB1 = $this->load->database('default', TRUE); //default db
        $this->load->helper("url");
        $this->load->library("pagination");
        $this->load->helper('form');
        $this->load->model('mobile_model');
        $this->set_global_db_vars();
        $this->load->library('session');
        // $this->nocache();
        $this->output->enable_profiler(FALSE);
    }

    public function index() {
        if (isset($_GET['articleID'])) {
            $this->get_article($_GET['articleID']);
        } elseif (isset($_GET['pageNo'])) {
            if ($_GET['pageNo'] == "" || $_GET['pageNo'] <= 1) {
                $this->category($_GET['categoryID']);
            } else {
                $this->older_stories($_GET['categoryID'], $_GET['pageNo']);
            }
        } elseif (isset($_GET['categoryID'])) {
            $this->category($_GET['categoryID']);
        } elseif (isset($_GET['q'])) {
            $this->search();
        } elseif (isset($_GET['slideshowID'])) {
            $this->show_slideshow($_GET['slideshowID']);
        } elseif (isset($_GET['contentPage'])) {
            $this->show_mobileterms();
        } else {
		
    $recent = $this->mobile_model->get_latest_stories(1);
	if($recent->num_rows!=""){
            $data['categoryID'] = 0;
            $data['content'] = 'mobile_theme/sdmv2/home/mobile_index';
            $data['title'] = "Kenya, Breaking News, Politics, Africa, World, Entertainment and Sports";
            $this->load->view('mobile_theme/sdmv2/include/mobile_template', $data);
			}else{
            //redirect("");
			
		   $this->load->view('reloaduser');
			
			}
        }
    }

    function show_mobileterms() {
        $data['categoryID'] = 0;
        $data['content'] = 'home/mobile_terms';
        $data['title'] = "Terms and conditions of use";
        $this->load->view('include/mobile_template', $data);
    }
 

    public function category($categoryID) {
        if ($categoryID == 10) {
            $categoryID = 9;
        }
        $data['content'] = 'mobile_theme/sdmv2/home/mobile_category';
        $data['categoryID'] = $categoryID;
        $category = $this->mobile_model->get_category_name($categoryID);
        $data['cstories'] = $this->mobile_model->getArticlesListingForCategoryLayout($categoryID, 20);
        // echo $category->num_rows;
        foreach ($category->result() as $ct):
            $data['colourtheme'] = $ct->colourtheme;
            $data['catname'] = $ct->name;
            $data['categorytitle'] = $ct->name;
        endforeach;
        $data['title'] = $ct->name;
        $this->load->view('mobile_theme/sdmv2/include/mobile_template', $data);
    }

    function base() {
        $data['content'] = 'home/mobile_category_node';
        $data['categoryID'] = $_GET['categoryID'];
        $categoryID = $_GET['categoryID'];
        $data['node'] = $this->mobile_model->get_parent_nodes($categoryID);

        $category = $this->mobile_model->get_category_name($categoryID);
        foreach ($category->result() as $ct):
            $data['colourtheme'] = $ct->colourtheme;
            $data['catname'] = $ct->name;
        endforeach;
        $data['title'] = '- ' . $ct->name;
        $this->load->view('include/mobile_template', $data);
    }

    public function search() {

        $data['title'] = "Search Results";
        //$data['content'] = 'home/sde_search';
        //$this->load->view('include/sde_template', $data);
        if (isset($_GET['q'])) {
            $config = array();
            $this->load->library('pagination');
            $place = "";
            if (isset($_GET['place'])) {
                $place = "&place=archives";
            }
            $config['base_url'] = '?q=' . $_GET['q'] . $place;
            $config['per_page'] = 20;
            if (isset($_GET['per_page'])) {
                $start = $_GET['per_page'];
            } else {
                $start = 0;
            }
            $limit = "";
            $config['page_query_string'] = TRUE;
            $gx = $this->mobile_model->do_search($limit);
            $config["total_rows"] = $gx->num_rows;
            $this->pagination->initialize($config);
            $data['totalrows'] = $config["total_rows"];
            $data['ppage'] = $config["per_page"];
            $config['query_string_segment'] = 'pagenum';
            $limit = "limit " . $start . "," . $config['per_page'];
            $data['rl'] = $this->mobile_model->do_search($limit);
            $data['links'] = $this->pagination->create_links();
        }
        //$data['content'] = 'home/sde_search';
        //$this->load->view('include/sde_template', $data);
        $data['content'] = 'mobile_theme/sdmv2/home/mobile_search';
        $this->load->view('mobile_theme/sdmv2/include/mobile_template', $data);
    }

     
 

    function older_stories($categoryID) {
        $sl = $this->mobile_model->get_selected_category_main($categoryID);
        $parentid = "";
        if (isset($_GET['pageNo'])) {
            $pageNo = $_GET['pageNo'];
        } else {
            $pageNo = 0;
        }

        if ($sl->num_rows != "") {
            foreach ($sl->result() as $s):
                $data['title'] = $s->name;
                $data['categorytitle'] = $s->name;
                $data['categoryID'] = $s->id;
            endforeach;
        } else {
            redirect();
        }
        $config = array();

        $config["base_url"] = base_url() . "category/older/" . $categoryID . "/" . $this->mobile_model->slugify($s->name) . "?";

        $config["total_rows"] = $this->mobile_model->num_articles($categoryID);
        $config['use_page_numbers'] = TRUE;
        $config["per_page"] = 16;
        if ($pageNo > 1) {
            $pageNo - 1;
        }
        $start = ($config['per_page'] * $pageNo) - ($config['per_page'] - 1);
        $this->pagination->initialize($config);
        if ($start <= 0) {
            $start = 0;
        }
        $data['start'] = $start;
        $data["more_article"] = $this->mobile_model->getArticlesListingForCategoryLayout($categoryID, $config['per_page'], $start);
//get_category_videos($config["per_page"], $page, $catid);
        $data["links"] = $this->pagination->create_links();
        $data['content'] = 'mobile_theme/sdmv2/home/mobile_category_older';
        //$this->load->view('include/sde_template', $data);
        $data['content'] = 'mobile_theme/sdmv2/home/mobile_category_older';
        $this->load->view('mobile_theme/sdmv2/include/mobile_template', $data);
    }

    function get_article($articleID) {
        $article = $this->mobile_model->get_selected_article($articleID);

        $dt = $this->default_header();
        $data['title'] = $dt['title'];
        $data['keywords'] = $dt['keywords'];
        $data['description'] = $dt['description'];
        $data['categoryID'] = 0;
        $data['article_title'] = "";
        $data['short_title'] = "";
        $data['articleID'] = "";
        $data['story'] = "";
        $data['updated'] = "";
        $data['glanceFacts'] = "";
        $data['noofcomments'] = "";
        $data['posteddate'] = "";
        $data['publishdate'] = "";
        $data['parentID'] = 0;
        $data['author'] = "";
		$data['thumbURL']="";
        if (isset($_GET['pageNo'])) {
            $data['pageNo'] = $_GET['pageNo'];
        } else {
            $data['pageNo'] = 1;
        }
        if ($article->num_rows != "") {
            $this->mobile_model->article_hits($articleID);
            foreach ($article->result() as $art):
                $data['title'] = $art->title;
                $data['article_title'] = $art->title;
                $data['short_title'] = $art->title;
                $data['author'] = $art->author;
                $data['article_long_title'] = $art->long_title;
                $data['keywords'] = $art->keywords;
                $data['articleID'] = $art->id;
                $data['description'] = $art->summary;
                $data['categoryID'] = $art->categoryid;
                $categoryID = $art->categoryid;
                
                
                 $data['imgURL'] = $art->thumbURL;
                 
                $category = $this->mobile_model->get_category_name($categoryID);
                foreach ($category->result() as $ct):
                    $data['colourtheme'] = $ct->colourtheme;
                    $data['catname'] = $ct->name;
                endforeach;
                $data['story'] = $art->story;
                $data['glanceFacts'] = $art->glancefacts;
                $data['updateddate'] = $art->updateddate;
                $data['posteddate'] = $art->posteddate;
                $data['publishdate'] = $art->publishdate;
                $data['noofcomments'] = $art->noofcomments;
				$data['videoid'] = $art->related_video;
                $data['articleID'] = $art->id;
                $data['parentID'] = $art->parentid;
                $data['parentid'] = $art->parentid;
                $data['thumbURL'] = $art->thumbURL;
                 
                 
                if (strlen(trim($data['article_long_title'])) > 5) {
                    $data['title'] = $art->long_title;
                    $data['article_title'] = $art->long_title;
                }
            endforeach;
			
        $data['content'] = 'mobile_theme/sdmv2/home/mobile_article';
        $this->load->view('mobile_theme/sdmv2/include/mobile_template', $data);
		$this->DB1->close();
        } else {
		 $recent = $this->mobile_model->get_latest_stories(1);
	if($recent->num_rows!=""){
            redirect("");
			}else{
		   $this->load->view('reloaduser');
		   }
        }
    }

    function default_header() {
        $data['title'] = "Home, Breaking News,   Business, Jobs,   Football, Travel, Tourism, Elections, National,
                Kenya, Nairobi, County, East Africa, Kibaki,  Raila, Elections 2013, Choice 2013";
        $data['description'] = "standardmedia.co.ke We deliver breaking news from across Kenya and the globe and 
                information on the latest top stories, business, sports and entertainment headlines. 
                Follow the news as it happens through: special reports, videos, audio, photo galleries.";
        $data['keywords'] = "News Kenya, Breaking news, Nairobi, Tanzania, Uganda, Africa,Politics,
                Business,Sports,Blogs,Photos,Videos, The Standard Group, Kenya, East African Standard, Online Edition,
                PDS, Outdoor Adverting, Corporate Website, Radio Maisha, Live Streaming KTN Live";
        return $data;
    }

     
  function set_global_db_vars()
    {
        $query = "set   interactive_timeout = 1";
        $this->DB1->query($query);
		$query = "set  wait_timeout=1";
		$this->DB1->query($query);
    }
	function newsletterrg(){
		$this->mobile_model->add_newsletterrg();
	}
}

 