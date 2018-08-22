<?php


class Service extends CI_Model {

    public function __construct()
    {
         $this->load->database();
         $this->load->library('session');
    }

    public function get_services($entity = NULL) {
        if ($entity == NULL) {
            $sql = "SELECT * FROM `services` INNER JOIN `service_providers` on `services`.sp_id = `service_providers`.id";
            $query = $this->db->query($sql);
            return $query->result_array();
        }

        // $sql = "SELECT * FROM `services` INNER JOIN `service_providers` on `services`.sp_id = `service_providers`.id WHERE district='$entity['district']";
            // $query = $this->db->query($sql);
            // return $query->result_array();
        echo $sql;

        
    }

    public function add_sp($data) {
        if ($this->db->insert('service_providers',$data)) {
            return True;
        } else {
            return False;
        }
    }

    public function add_service($data) {
        // var_dump($data);
        $district = $data['district'];
        $taluk = $data['taluk'];
        $category = $data['category'];
        $subcategory = $data['subcategory'];

        foreach ($subcategory as $sc) {
            foreach ($taluk as $tk) {
                $entry['subcategory'] = $sc;
                $entry['category'] = $data['category'];
                $entry['taluk'] = $tk;

                $this->db->insert('services',$entry);
            }
        }
        return True;
    }
        
}
