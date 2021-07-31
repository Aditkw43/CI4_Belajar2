<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
class Authent extends CI_Controller
{
    function __construct()
    {
        parent::__construct;
        $this->load->model('mAuthent');
        $index = $this->config->item('index_php');
        $host = $this->config->item('base_url');
        $this->url = empty($index) ? $host : $host . $index . '/';
    }

    function in(){
        
    }    
}
