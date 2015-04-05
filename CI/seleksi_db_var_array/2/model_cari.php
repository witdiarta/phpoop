<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class model_cari extends CI_Model {

	function cari_no($id_user) { 
	
		// cari data dengan cakupan array
		$sql_cari_no = "select telp from xp where pic_input = '$id_user';";
		
		// eksekusi database, ambil data user, buat kembalian data user
		return $this->db->query($sql_cari_no)->result();
		
	} // end function cari_no

	function tampil_data($cari_no) { 
	
		// cari data dengan cakupan array
		$sql_tampil_data = "select * from sys_org_dept where fax IN ($cari_no);";
		
		// eksekusi database, ambil data user, buat kembalian data user
		return $this->db->query($sql_tampil_data)->result();
		
	} // end function tampil_data
	
} // end model
?>