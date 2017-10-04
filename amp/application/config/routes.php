<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "mobile_home";
$route['404_override'] = '';
//category routes//
$route['business'] = "mobile_home/category/4";
$route['politics'] = "mobile_home/category/3";
$route['kenya'] = "mobile_home/category/1";
$route['world'] = "mobile_home/category/5";
$route['sports'] = "mobile_home/category/6";
$route['opinion'] = "mobile_home/category/7";
$route['mags'] = "mobile_home/category/10";
$route['magazines'] = "mobile_home/category/10";
$route['thenairobian'] = "mobile_home/category/173";
$route['football'] = "mobile_home/category/29";
$route['ureport'] = "mobile_home/category/90";
$route['technology'] = "mobile_home/category/42";
$route['comment'] = "mobile_home/comment";
$route['trendingstories'] = "mobile_home/trendingstories";
$route['latestnews'] = "mobile_home/latestnews";
$route['breakingnews'] = "mobile_home/latestnews";
$route['accommodation'] = "mobile_home/accomodation";
$route['breaking'] = "mobile_home/breaking";
$route['search'] = 'mobile_home/search';

//newsletter
$route['newsletterrg'] = 'mobile_home/newsletterrg';

//category
$route['categoryID=(:num)&pageNo=(:num)'] = 'mobile_home/category_older_stories/$i1/$i2';
$route['categoryID=(:num)&pageNo='] = 'mobile_home/category/$i1';
$route['categoryID=(:num)&pageNo=0'] = 'mobile_home/category/$i1';
$route['categoryID=(:num)&pageNo=1'] = 'mobile_home/category/$i1';
$route['category/(:num)/(:any)'] = 'mobile_home/category/$1';
$route['category/(:num)'] = 'mobile_home/category/$1';
$route['category/older/(:num)/(:any)'] = 'mobile_home/older_stories/$1';
$route['morecomments/(:num)'] = 'mobile_home/morecomments/$1';
$route['articleID=(:num)&c=(:any)'] = 'mobile_home/article_page/$i1';
$route['article/(:num)/(:any)'] = 'mobile_home/get_article/$1';
$route['article/(:num)'] = 'mobile_home/get_article/$1';
$route['rssfeeds'] = 'mobile_home/rss';
$route['category.php?categoryID=(:num)'] = 'mobile_home/category/$i';
$route['base'] = 'mobile_home/base';
$route['ktn/watch/(:num)/(:any)'] = 'mobile_home/watch/$1';
$route['ktn/category/(:num)/(:any)'] = 'mobile_home/ktn_category/$1';
$route['ktn'] = 'mobile_home/ktn_home';
$route['ktnlive'] = 'mobile_home/ktn_live';
$route['ktn/watch/(:num)'] = 'mobile_home/watch/$1';
$route['timeline'] = 'mobile_home/timeline';
$route['gettimeline'] = 'mobile_home/storytl';
$route['fulltable/(:num)/(:any)/(:any)'] = 'mobile_home/fulltable/$1';
$route['team/(:num)/(:any)'] = 'mobile_home/team/$1';
/* End of file routes.php */
/* Location: ./application/config/routes.php */