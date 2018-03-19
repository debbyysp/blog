<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BlogModel extends CI_Model {
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function create(){

	}

	function get_tags_blogs($q){
		$sql = "select * from blog__content c where c.tags LIKE '%". $this->db->escape_like_str($q) . "%' ";
		$query = $this->db->query($sql);
		if($query->num_rows() > 0){
			return $query->result_array();
		}
		return false;
	}

	function get_author_blogs($uid){
		$sql = "select * from blog__content c where c.author = ? ";
		$query = $this->db->query($sql, array($uid));
		if($query->num_rows() > 0){
			return $query->result_array();
		}
		return false;
	}

	function get_content_blogs(){
		$sql = "select * from blog__content ORDER BY DESC LIMIT 3 ";
		$query = $this->db->query($sql);
		if($query->num_rows() > 0){
			return $query->result_array();
		}
		return false;
	}
}

?>