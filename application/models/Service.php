<?php


class Service extends CI_Model {

    public function __construct()
    {
         $this->load->database();
         $this->load->library('session');
    }

    public function get_service_count($entity) {
        // var_dump($entity);
        $this->db->select('*');
        $this->db->from('services');
        $this->db->where($entity);
        $this->db->group_by('name, category, district');
        // $this->db->_compile_select();
        // echo $this->db->get_compiled_select(); // before $this->db->get();
        $query = $this->db->get();
        // echo $this->db->last_query();
        return $query->num_rows();
    }

    public function get_services($offset, $limit, $entity = NULL) {
        // var_dump($entity);
        $this->db->select('*, SUM(service_count) as s_count');
        $this->db->from('services');
        $this->db->where($entity);
        $this->db->group_by('name, category, district');
        $this->db->limit($limit, $offset);
        $query = $this->db->get();
        // echo $this->db->last_query();
        return $query->result_array();
    }
    
    public function get_admin_services() {
        $sql = "SELECT * FROM `services` WHERE sp_id NOT IN (1,2,3,4,7,11)";
        // echo $sql;
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
    public function verify($idnum) {
        $data['verified'] = 1;
        $this->db->where('id', $idnum);
        $this->db->update('services', $data);
        return true;
    }
    public function unverify($idnum) {
        $data['verified'] = 0;
        $this->db->where('id', $idnum);
        $this->db->update('services', $data);
        return true;
    }
    
    public function service_count_update($idnum) {
        $this->db->where('id', $idnum);
        $this->db->set('service_count', 'service_count+1', FALSE);
        $this->db->update('services');
        return true;
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
            $entry['taluk_list'] = implode(",", $data['taluk']);
//            var_dump($entry);
             
            $this->db->insert('services',$entry);
//            $this->db->_compile_select(); 
//            echo $this->db->last_query();
        }
//    return True;
    }
        
}
