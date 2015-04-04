<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class cari extends CI_Controller {


	function __construct(){
	
	parent::__construct();
	
	$this->load->model('model_cari');

	}

	function index() {
	
	$no_hp = array('0812666556', '0812666559');
 
	foreach($this->model_cari->cari_data($no_hp) as $cari_data){

	echo $cari_data->name.'<br>'; } 
 
	}
}