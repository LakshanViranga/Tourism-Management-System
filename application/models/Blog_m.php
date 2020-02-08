<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_m extends CI_Model{ 

	public function getBlog(){
		$this->db->order_by('user_id', 'desc');
		$query = $this->db->get('user_details');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}
	

 
	public function submit(){
		$field = array(
			'user_name'=>$this->input->post('txt_title'),
			'email'=>$this->input->post('txt_description'),
			);
		$this->db->insert('user_details', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	} 

	public function getBlogById($id){
		$this->db->where('user_id',$id);
		$query = $this->db->get('user_details');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}

		

	public function update(){
		$id = $this->input->post('txt_hidden');
		$field = array(
			'user_name'=>$this->input->post('txt_title'),
			'email'=>$this->input->post('txt_description'),
			
			);
		$this->db->where('user_id', $id);
		$this->db->update('user_details', $field);
		echo $this->db->last_query();extit;
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	public function delete($id){
		$this->db->where('user_id', $id);
		$this->db->delete('user_details');
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

}