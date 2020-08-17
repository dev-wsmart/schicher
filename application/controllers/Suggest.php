<?php if(! defined('BASEPATH'))exit('No direct script access allowed');


class Suggest extends CI_Controller{

    public function brand(){
        $brand = $_GET["brand"];
        $this->db->select("*");
        $this->db->from("brands");
        $this->db->like('brands.name_brand', $brand, 'after');
        $query = $this->db->get();
        $brands = $query->result();
        echo json_encode($brands);
    }

    public function model(){
        $brand = $_GET["brand"];
        $model = $_GET["model"];
        $this->db->select("*");
        $this->db->from("models");
        $this->db->join('brands', "brands.id_brand = models.id_brand");
        $this->db->like('brands.name_brand', $brand, 'after');
        $this->db->like('models.name_model', $model, 'after');
        $query = $this->db->get();
        $models = $query->result();
        echo json_encode($models);
    }

    public function ccs(){
        $cc = $_GET["cc"];
        $this->db->select("*");
        $this->db->from("ccs");
        $this->db->like('ccs.cc', $cc, 'after');
        $query = $this->db->get();
        $ccs = $query->result();
        echo json_encode($ccs);
    }

}
?>