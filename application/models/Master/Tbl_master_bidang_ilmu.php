<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Tbl_master_bidang_ilmu extends CI_Model {

	public function create($data){
		if($this->db->insert('tbl_master_bidang_ilmu',$data)){
			return TRUE;
		}else{
			return FALSE;
		}
	}

	public function read() {
		return $this->db->get('tbl_master_bidang_ilmu');
	}

	public function update($id,$data){
		$this->db->where('no',$id);
		if($this->db->update('tbl_master_bidang_ilmu',$data)){
			return TRUE;
		}else{
			return FALSE;
		}
	}

	public function delete($id){
		$this->db->where('no',$id);
		if($this->db->delete('tbl_master_bidang_ilmu')){
			return TRUE;
		}else{
			return FALSE;
		}
	}

	public function whereAnd($data){
		$this->db->where($data);
		return $this->db->get('tbl_master_bidang_ilmu');
	}

    public function whereOr($data){
        $this->db->or_where($data);
        return $this->db->get('tbl_master_bidang_ilmu');
    }

	public function likeAnd($data){
		$this->db->like($data);
		return $this->db->get('tbl_master_bidang_ilmu');
	}

	public function likeOr($data){
		$this->db->or_like($data);
		return $this->db->get('tbl_master_bidang_ilmu');
	}

}
