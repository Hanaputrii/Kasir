<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Pelanggan extends CI_model{

    public function get_all()
    {
        $query = $this->db->select("*")
                 ->from('pelanggan')
                 ->order_by('id', 'DESC')
                 ->get();
        return $query->result();
    }

    public function simpan($data)
    {

        $query = $this->db->insert("tbl_pelanggan", $data);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function edit($id_pelanggan)
    {

        $query = $this->db->where("id_pelanggan", $id_pelanggan)
                ->get("tbl_pelanggan");

        if($query){
            return $query->row();
        }else{
            return false;
        }

    }

    public function update($data, $id)
    {

        $query = $this->db->update("tbl_pelanggan", $data, $id);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function hapus($id)
    {

        $query = $this->db->delete("tbl_pelanggan", $id);

        if($query){
            return true;
        }else{
            return false;
        }

    }

}
