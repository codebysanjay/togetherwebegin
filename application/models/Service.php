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

     public function find_district($tk) {
        $kerala = array();
        $kerala["Thiruvananthapuram"] = ["Neyyattinkara", "Kattakkada", "Nedumangadu", "Thiruvananthapuram", "Chirayinkeezhu", "Varkala"];
        $kerala["Kollam"] = ["Kollam", "Kunnathoor", "Karunagappally", "Kottarakkara", "Punalur", "Pathanapuram"];
        $kerala["Pathanamthitta"] = ["Adoor", "Konni", "Kozhencherry", "Ranni", "Mallappally", "Thiruvalla"];
        $kerala["Alappuzha"] = ["Chenganoor", "Mavelikkara", "Karthikappally", "Kuttanad", "Ambalappuzha", "Cherthala"];
        $kerala["Kottayam"] = ["Changanasserry", "Kottayam", "Vaikom", "Meenachil", "Kanjirappally"];
        $kerala["Idukki"] = ["Peermade", "Udumbanchola", "Idukki", "Thodupuzha", "Devikulam"];
        $kerala["Ernakulam"] = ["Kothamangalam", "Muvattupuzha", "Kunnathunad", "Kanayannur", "Kochi", "North Paravur", "Aluva"];
        $kerala["Thrissur"] = ["Chalakudy", "Mukundapuram", "Kodungallur", "Thrissur", "Chavakkad", "Kunnamkulam", "Thalapilly"];
        $kerala["Palakkad"] = ["Alathoor", "Chittur", "Palakkad", "Pattambi", "Ottappalam", "Mannarkkad"];
        $kerala["Malappuram"] = ["Perinthalmanna", "Nilambur", "Eranad", "Kondotty", "Ponnani", "Tirur", "Thiroorangadi"];
        $kerala["Kozhikode"] = ["Kozhikode", "Thamarassery", "Koyilandy", "Vatakara"];
        $kerala["Wayanad"] = ["Vythiri", "Sulthan Bathery", "Mananthavady"];
        $kerala["Kannur"] = ["Thalassery", "Iritty", "Kannur", "Taliparamba", "Payyannur"];
        $kerala["Kasaragod"] = ["Hosdurg", "Vellarikundu", "Kasaragod", "Manjeswaram"];

        foreach ($kerala as $z => $y) {
            if (in_array($tk, $y)) {
		return $z;
	}
}
}

    public function add_service($data) {
        // var_dump($data);
        $district = $data['district'];
        $taluk = $data['taluk'];
        $category = $data['category'];
        // $subcategory = $data['subcategory'];

        foreach ($taluk as $tk) {
            $entry['sp_id'] = $this->session->userdata('user_id');
            $entry['name'] = $data['name'];
            $entry['category'] = $data['category'];
            $entry['taluk'] = $tk;
            $entry['phone'] = $data['phone'];
            $entry['created_on'] = $data['created_on'];
            $entry['company'] = $data['company'];
            $entry['remark'] = $data['remark'];
            $entry['district'] = $this->find_district($tk);
//            var_dump($entry);
             
            $this->db->insert('services',$entry);
//            $this->db->_compile_select(); 
//            echo $this->db->last_query();
        }
//    return True;
    }
        
}
