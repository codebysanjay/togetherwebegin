<?php


class Service extends CI_Model {

    public function __construct()
    {
         $this->load->database();
         $this->load->library('session');
    }

    public function get_services($entity = NULL) {
        if ($entity == NULL) {
            $sql = "SELECT * FROM `services`";
            // echo $sql;
            $query = $this->db->query($sql);
            return $query->result_array();
        }

        if ($entity['district'] != NULL && $entity['taluk'] != NULL && $entity['category'] != NULL) {
            $sql = "SELECT * FROM `services`WHERE `services`.district='".$entity['district']."' AND `services`.taluk='".$entity['taluk']."' AND category='".$entity['category']."'";
        } elseif ($entity['district'] != NULL && $entity['taluk'] != NULL && $entity['category'] == NULL) {
           $sql = "SELECT * FROM `services`WHERE `services`.district='".$entity['district']."' AND `services`.taluk='".$entity['taluk']."'";
        }
        elseif ($entity['district'] != NULL && $entity['taluk'] == NULL && $entity['category'] != NULL) {
           $sql = "SELECT * FROM `services`WHERE `services`.district='".$entity['district']."' AND category='".$entity['category']."'";
        }
        elseif ($entity['district'] == NULL && $entity['taluk'] != NULL && $entity['category'] != NULL) {
           $sql = "SELECT * FROM `services`WHERE category='".$entity['category']."' AND `services`.taluk='".$entity['taluk']."'";
        }
        elseif ($entity['district'] == NULL && $entity['taluk'] == NULL && $entity['category'] != NULL) {
           $sql = "SELECT * FROM `services`WHERE category='".$entity['category']."'";
        }
        elseif ($entity['district'] == NULL && $entity['taluk'] != NULL && $entity['category'] == NULL) {
           $sql = "SELECT * FROM `services`WHERE `services`.taluk='".$entity['taluk']."'";
        }
        elseif ($entity['district'] != NULL && $entity['taluk'] == NULL && $entity['category'] == NULL) {
           $sql = "SELECT * FROM `services`WHERE `services`.district='".$entity['district']."'";
        }
        
        // echo $sql;
            // "."$entity['district']"."' AND `services`.taluk='"."$entity['taluk']"."' AND category='"."$entity['category']"."' AND subcategory='"."$entity['subcategory']"
            $query = $this->db->query($sql);
            return $query->result_array();
        

        
    }

    public function add_sp($data) {
        if ($this->db->insert('service_providers',$data)) {
            return True;
        } else {
            return False;
        }
    }

    // public function find_district($tk) {
    //     if ($this->db->insert('service_providers',$data)) {
    //         return True;
    //     } else {
    //         return False;
    //     }
    // }

    public function add_service($data) {
        // var_dump($data);
        $district = $data['district'];
        $taluk = $data['taluk'];
        $category = $data['category'];
        // $subcategory = $data['subcategory'];

        foreach ($taluk as $tk) {
            $entry['sp_id'] = $this->session->userdata('user_id');
            // $entry['subcategory'] = $sc;
            $entry['category'] = $data['category'];
            $entry['taluk'] = $tk;
            $entry['phone'] = $data['phone'];
            $entry['created_on'] = $data['created_on'];
            $entry['company'] = $data['company'];
            $entry['remark'] = $data['remark'];
            // $entry['district'] = $this->find_district($tk);

            $this->db->insert('services',$entry);
        }
    return True;
    }
        
}
