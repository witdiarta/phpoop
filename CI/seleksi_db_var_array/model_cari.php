<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class model_cari extends CI_Model {

	function cari_data($array) { 
	
		// cari data dengan cakupan array
		$sql_cari = "select * from sys_org_dept where fax IN (".implode(',',$array).")";
		
		// eksekusi database, ambil data user, buat kembalian data user
		return $this->db->query($sql_cari)->result();
		
	} // end function cari_data
	
} // end model
?>