<?php
/*
function sanitize_output($buffer) {

    $search = array(
        '/\>[^\S ]+/s',  // strip whitespaces after tags, except space
        '/[^\S ]+\</s',  // strip whitespaces before tags, except space
        '/(\s)+/s'       // shorten multiple whitespace sequences
    );

    $replace = array(
        '>',
        '<',
        '\\1'
    );

    $buffer = preg_replace($search, $replace, $buffer);

    return $buffer;
}

ob_start("sanitize_output");
*/
?>
<?php $this->load->view('mobile_theme/sdmv2/include/mobile_header'); ?>
<?php $this->load->view($content); ?>
<?php $this->load->view('mobile_theme/sdmv2/include/mobile_footer'); ?>
<?php

//ob_end_flush();

?>