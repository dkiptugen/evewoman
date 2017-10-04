<?php
if($this->assist->checkifmobileweb())
    {
   		define('device', 'mobile');
    }
else
	{
   		define('device', 'desktop');
    }
$this->view(device.'/includes/header');
$this->view(device.'/includes/body');
$this->view(device.'/includes/footer');
?>