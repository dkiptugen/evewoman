<?php
class Assist 
	{
	   var $codeigniter;
	   public function __construct()
	   		{
	   			$this->codeigniter = & get_instance();
	   		}
	   public function secu($username,$password)
			{
               $key=sha1($username);
               $password=substr(md5($password),5,20);
               $key=substr($key,7,5);
               return md5($key.$password);
			}  	
		public function passgen($size)
            {
                $seed = str_split('abcdefghijklmnopqrstuvwxyz'
        			.'ABCDEFGHIJKLMNOPQRSTUVWXYZ'
        			.'0123456789'
        			.'%$#!@_=&');
                 shuffle($seed);
                 $rand = '';
                 foreach (array_rand($seed,$size) as $k){ $rand .= $seed[$k]; }       	
                  return $rand;
            }
    public function picuploads($x=NULL,$config=NULL)
            {
                $config['upload_path']= FCPATH."images";
                $config['allowed_types']='gif|jpg|png|jpeg';
                $config['file_ext_tolower']= TRUE;
                $config['file_name'] = "FILE-".time();              
                $this->codeigniter->load->library('upload', $config);
                if( ! $this->codeigniter->upload->do_upload('userfile'))
                  {
                    $error = array('error' => $this->codeigniter->upload->display_errors());
                    $this->output->set_output(json_encode($error));
                  }
                else
                  {
                    $data = array('upload_data' => $this->codeigniter->upload->data());
                    if($x=="upload")
                      {
                         return $data;
                      }
                    else
                       {
                          $this->output->set_output($data["upload_data"]["file_name"]);
                       }  
                    
                  }
            }
        public function page($baseurl,$total_rows,$vpp,$urlsegment)
            {
               
                $this->codeigniter->load->library('pagination');
                $config['base_url'] = $baseurl;
                $config['total_rows'] = $total_rows;
                $config['per_page'] = $vpp;
                $config['uri_segment'] = $urlsegment;
                $config['num_links'] = 9;
                $config['page_query_string'] = TRUE;
                $config['query_string_segment'] = 'page';
                $config['full_tag_open'] = '<div><ul  class="pagination">';
                $config['full_tag_close'] = '</ul></div><!--pagination-->';
                $config['first_link'] = '<i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
 First';
                $config['first_tag_open'] = '<li class="prev page page-item">';
                $config['first_tag_close'] = '</li>';
                $config['last_link'] = 'Last <i class="fa fa-arrow-circle-left" aria-hidden="true"></i>
';
                $config['last_tag_open'] = '<li class="next page page-item">';
                $config['last_tag_close'] = '</li>';
                $config['next_link'] = 'Next <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
';
                $config['next_tag_open'] = '<li class="next page page-item">';
                $config['next_tag_close'] = '</li>';
                $config['prev_link'] = '<i class="fa fa-arrow-circle-left" aria-hidden="true"></i>
 Previous';
                $config['prev_tag_open'] = '<li class="prev page page-item">';
                $config['prev_tag_close'] = '</li>';
                $config['cur_tag_open'] = '<li class="active"><a href="">';
                $config['cur_tag_close'] = '</a></li>';
                $config['num_tag_open'] = '<li class="page page-item">';
                $config['num_tag_close'] = '</li>';
                $config['display_pages'] = FALSE;//
                $config['anchor_class'] = 'page_link';
                $this->codeigniter->pagination->initialize($config);
                $data["links"] = $this->codeigniter->pagination->create_links();
                $data['vpp']=$config['per_page'];
                return (object)$data;
            }
        public function chrstring($string)
        {
            $search = array(chr(0xe2) . chr(0x80) . chr(0x98),
                chr(0xe2) . chr(0x80) . chr(0x99),
                chr(0xe2) . chr(0x80) . chr(0x9c),
                chr(0xe2) . chr(0x80) . chr(0x9d),
                chr(0xe2) . chr(0x80) . chr(0x93),
                chr(0xe2) . chr(0x80) . chr(0x94));
            $replace = array(
                '&lsquo;',
                '&rsquo;',
                '&ldquo;',
                '&rdquo;',
                '&ndash;',
                '&mdash;');
            return str_ireplace("�", "", str_replace($search, $replace, $string));
        }
    public function count_para($story, $pageNo)
        {
            $story = explode('</p>', $story);
            if (count($story) > 1) {
                //   array_pop($story);
            }
            //Input boundary checking
            $noOfPages = ceil(count($story) / $this->paragraphsPerPage);

            $pageNo = (int)$pageNo;

            if ($pageNo < 1) {
                $pageNo = 1;
            } elseif ($pageNo > $noOfPages) {
                $pageNo = $noOfPages;
            }

            $articleStory = array_slice($story, (($pageNo - 1) * $this->paragraphsPerPage), $this->paragraphsPerPage);

            return $articleStory;
            // return $noOfPages;
        }
    public function slugify($text)
        {
            $text = preg_replace('~[^\\pL\d]+~u', '-', $text);
            $text = trim($text, '-');
            if (function_exists('iconv')) {
                $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
            }
            $text = $text;
            $text = preg_replace('~[^-\w]+~', '', $text);
            if (empty($text)) {
                return 'n-a';
            }
            $text = strtolower($text);
            return $text;
        }
    public function checkifmobileweb()
        {
            $useragent=$_SERVER['HTTP_USER_AGENT'];
            if(preg_match('/(tizen|android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))||strpos($useragent, 'Tizen') !== false)
            {
                return TRUE;
            }
        }
    public function removeimg($content)
        {
            $content = preg_replace("/<img[^>]+\>/i", "", $content);
           
            return $content;
        }
  public function paragraph($content,$count=5)
    {
       $pos = strpos($content, '.');
             return substr($content, 0, $pos+$count);
    }
    public function removeEmptyParagraphs($content)
      {
        return preg_replace('#<p>(\s|&nbsp;|</?\s?br\s?/?>)*</?p>#', '', $content);
      }
    public function strip_word_html($text, $allowed_tags=NULL)
      {
          mb_regex_encoding('UTF-8');
          //replace MS special characters first
          $search = array('/&lsquo;/u', '/&rsquo;/u', '/&ldquo;/u', '/&rdquo;/u', '/&mdash;/u');
          $replace = array('\'', '\'', '"', '"', '-');
          $text = preg_replace($search, $replace, $text);
          //make sure _all_ html entities are converted to the plain ascii equivalents - it appears
          //in some MS headers, some html entities are encoded and some aren't
          $text = html_entity_decode($text, ENT_QUOTES, 'UTF-8');
          //try to strip out any C style comments first, since these, embedded in html comments, seem to
          //prevent strip_tags from removing html comments (MS Word introduced combination)
          if(mb_stripos($text, '/*') !== FALSE){
              $text = mb_eregi_replace('#/\*.*?\*/#s', '', $text, 'm');
          }
          //introduce a space into any arithmetic expressions that could be caught by strip_tags so that they won't be
          //'<1' becomes '< 1'(note: somewhat application specific)
          $text = preg_replace(array('/<([0-9]+)/'), array('< $1'), $text);
          $text = strip_tags($text, $allowed_tags);
          //eliminate extraneous whitespace from start and end of line, or anywhere there are two or more spaces, convert it to one
          $text = preg_replace(array('/^\s\s+/', '/\s\s+$/', '/\s\s+/u'), array('', '', ' '), $text);
          //strip out inline css and simplify style tags
          $search = array('#<(strong|b)[^>]*>(.*?)</(strong|b)>#isu', '#<(em|i)[^>]*>(.*?)</(em|i)>#isu', '#<u[^>]*>(.*?)</u>#isu');
          $replace = array('<b>$2</b>', '<i>$2</i>', '<u>$1</u>');
          $text = preg_replace($search, $replace, $text);
          //on some of the ?newer MS Word exports, where you get conditionals of the form 'if gte mso 9', etc., it appears
          //that whatever is in one of the html comments prevents strip_tags from eradicating the html comment that contains
          //some MS Style Definitions - this last bit gets rid of any leftover comments */
          $num_matches = preg_match_all("/\<!--/u", $text, $matches);
          if($num_matches){
              $text = preg_replace('/\<!--(.)*--\>/isu', '', $text);
          }

          $text = preg_replace('/(<[^>]+) style=".*?"/i', '$1', $text);
          $text=preg_replace('/class=".*?"/i', '', $text);
          $text=preg_replace('/xss=removed/i', '', $text);
          //$text=preg_replace('/\s\s/i','',$text);
          $text=preg_replace('/<p\s\s>/i','<p>',$text);
          $text = $this->removeEmptyParagraphs($text);
          return $text;
      }  
        public function log($file,$msg)
            {
                file_put_contents(FCPATH."application/logs/".$file,"\n".$msg,FILE_APPEND);
            }
	}
?>