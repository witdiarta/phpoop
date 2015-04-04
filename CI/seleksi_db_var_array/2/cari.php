<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class cari extends CI_Controller {


	function __construct(){
	
	parent::__construct();
	
	$this->load->model('model_cari');

	}

	function index() {
	
	$id_user = '69e4b759180d';
	
	foreach($this->model_cari->cari_no($id_user) as $cari_no){
	
	foreach($this->model_cari->tampil_data($cari_no->telp) as $tampil_data){

	echo $tampil_data->name.'<br>'; } }
 
	}
}