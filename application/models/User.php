<?php


class User extends CI_Model {

    public function __construct()
    {
         $this->load->database();
         $this->load->library('session');
    }

    // check if email is already registered
    public function checkEmail($email) {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where(array('email'=>$email));
        $query = $this->db->get();
        $noOfRows = $query->num_rows();
        
        if($noOfRows > 0){
            return TRUE;
        } else {
            return FALSE;
        }
    }

    // signup = insert and load to session
    public function signup($data) {
        
        $this->db->insert('users',$data);
        
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where(array('email'=>$data['email']));
        $query = $this->db->get();
        
        $userData = $query->row_array();
        $this->session->set_userdata($userData);
        return TRUE;
    }

    // public function update_status($email) {
    //     $this->db->where('email', $email);
    //     $this->db->set('status', 'VERIFIED');
    //     $this->db->update('users');
    // }

    // public function update_password($email, $password) {
    //     $this->db->where('email', $email);
    //     $this->db->set('password', $password);
    //     $this->db->update('users');
    // }

    // public function edit_profile($data) {
    //     $profile_type = $data['profile_type'];
    //     unset($data['profile_type']);
    //     $data['user_id'] = $this->session->userdata('user_id');

    //     if ($profile_type == "Personal Information") {
    //         $this->db->select('*');
    //         $this->db->from('personal_profile');
    //         $this->db->where('user_id', $data['user_id']);
    //         $query = $this->db->get();
    //         $noOfRows = $query->num_rows();
            
    //         if($noOfRows > 0){
    //             $this->db->where('user_id', $data['user_id']);
    //             $this->db->set($data);
    //             $this->db->update('personal_profile');
    //         } else {
    //             $this->db->insert('personal_profile',$data);
    //         }
    //     }
    //     else if ($profile_type == "Academic Information") {
    //         $this->db->select('*');
    //         $this->db->from('academic_profile');
    //         $this->db->where('user_id', $data['user_id']);
    //         $query = $this->db->get();
    //         $noOfRows = $query->num_rows();
            
    //         if($noOfRows > 0){
    //             $this->db->where('user_id', $data['user_id']);
    //             $this->db->set($data);
    //             $this->db->update('academic_profile');
    //         } else {
    //             $this->db->insert('academic_profile',$data);
    //         }
    //     }
    //     unset($data['user_id']);
    //     print_r($data);
    // }

    // public function get_profile($user_id) {
    //     $data['user_id'] = $user_id;
    //     $this->db->select('*');
    //     $this->db->from('personal_profile');
    //     $this->db->where($data);
    //     $query = $this->db->get();
        
    //     $data = $query->row_array();

    //     if (empty($data)) {
    //         return FALSE;
    //     }
        
    //     return $data;
    // }

    // login = check and return true if correct
    public function login($data, $last_login) {
        
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where($data);
        $query = $this->db->get();

        // $query = $this->db->get_compiled_select();
        // echo $query;
        
        $userData = $query->row_array();

        if (empty($userData)) {
            return FALSE;
        }
        
        $this->session->set_userdata($userData);

        $this->db->where('email', $data['email']);

        $this->db->set('active_sessions', 'active_sessions+1', FALSE);
        $this->db->update('users', array('last_login'=>$last_login));
        $active_sessions = $this->session->userdata('sessions');
        $this->session->set_userdata('active_sessions',$active_sessions+1);
        $this->session->set_userdata('last_login',$last_login);

        // echo $this->session->userdata('id');

        return TRUE;
    }



        // update user profile on db
        // public function update_profile($data = array()) {
        //     $email = $this->session->userdata('email');
        //     $this->db->where('email', $email);
        //     $this->db->update('user', $data);
        //     return true;
        // }
        
        // public function update_coins() {
        //     $email = $this->session->userdata('email');
        //     $this->db->where('email', $email);
        //     $this->db->set('coins', 'coins-10', FALSE);
        //     $this->db->update('user');
        //     $coins = $this->session->userdata('coins');
        //     $this->session->set_userdata('coins',$coins-10);
        //     return true;
        // }
        
        // public function reward_coins() {
        //     $email = $this->session->userdata('email');
        //     $this->db->where('email', $email);
        //     $this->db->set('coins', 'coins+30', FALSE);
        //     $this->db->update('user');
        //     $coins = $this->session->userdata('coins');
        //     $this->session->set_userdata('coins',$coins+30);
        //     return true;
        // }

        // retrieve user data from db
        // public function retrieve_user_data($email) {
        //     $this->db->select('*');
        //     $this->db->from('user');
        //     $this->db->where(array('email'=>$email));

        //     $query = $this->db->get();
            
        //     $userData = $query->row_array();
        //     return $userData;
            
        // }

        // public function get_ranklist() {
        //     $this->db->select('*');
        //     $this->db->from('user');
        //     $this->db->order_by("level", "desc");
        //     $this->db->order_by("level_pass_time", "asc");

        //     $query = $this->db->get();

        //     $result = $query->result_array();
            
        //     return $result;

            
        // }
        
        // public function get_rank() {
        //     $userData['level'] = $this->session->userdata('level');
        //     $userData['level_pass_time'] = $this->session->userdata('level_pass_time');
        //     $this->db->select('*');
        //     $this->db->from('user');
        //     $this->db->where("level >", $userData['level']);
        //     $query = $this->db->get();

        //     $result = $query->num_rows();
            
        //     $this->db->select('*');
        //     $this->db->from('user');
        //     $this->db->where("level =", $userData['level']);
        //     $this->db->where("level_pass_time <=", $userData['level_pass_time']);
        //     $query = $this->db->get();
            
        //     $result += $query->num_rows();
        //     return $result;
        // }
        
        // public function level_up($data = array()) {
        //     $email = $this->session->userdata('email');
        //     $this->db->where('email', $email);
        //     $this->db->where_not_in('status', "TERMINATED");
        //     $this->db->update('user', $data);
        //     return true;
        // }

        // //admin function
        // public function get_malicious_users() {
        //     $this->db->select('*');
        //     $this->db->from('user');
        //     $this->db->where('malicious>',1);
        //     $this->db->order_by("malicious", "desc");

        //     $query = $this->db->get();
        //     $result = $query->result_array();
        //     return $result;
        // }
        
        // public function get_users() {
        //     $this->db->select('*');
        //     $this->db->from('user');

        //     $query = $this->db->get();
        //     $result = $query->result_array();
        //     return $result;
        // }
        
        // public function get_blocked_users() {
        //     $this->db->select('*');
        //     $this->db->from('user');
        //     $this->db->where('status',"TERMINATED");

        //     $query = $this->db->get();
        //     $result = $query->result_array();
        //     return $result;
        // }
        
        // public function get_suspected_users() {
        //     $this->db->select('*');
        //     $this->db->from('user');
        //     $this->db->where('status',"SUSPECTED");

        //     $query = $this->db->get();
        //     $result = $query->result_array();
        //     return $result;
        // }
        
        // public function get_admin_users() {
        //     $this->db->select('*');
        //     $this->db->from('user');
        //     $this->db->where('type',"ADMIN");

        //     $query = $this->db->get();
        //     $result = $query->result_array();
        //     return $result;
        // }
        
        // public function block_user($user_id) {
        //     $data['STATUS'] = "TERMINATED";
        //     $this->db->where('id', $user_id);
        //     $this->db->update('user', $data);
        //     return true;
        // }
        
        // public function unblock_user($user_id) {
        //     $data['STATUS'] = "SUSPECTED";
        //     $this->db->where('id', $user_id);
        //     $this->db->update('user', $data);
        //     return true;
        // }
        
        // public function make_admin($user_id) {
        //     $data['type'] = "ADMIN";
        //     $this->db->where('id', $user_id);
        //     $this->db->update('user', $data);
        //     return true;
        // }
        // public function downgrade_admin($user_id) {
        //     $data['type'] = "MODERATOR";
        //     $this->db->where('id', $user_id);
        //     $this->db->update('user', $data);
        //     return true;
        // }
        
}
