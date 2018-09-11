<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	function __construct() {
        parent::__construct();

		$this->load->helper('url');
        $this->load->library('session');
		$this->load->model('service');
		$this->load->model('user');
    }

	public function index()
	{
		$this->load->view('general/home');
	}
	
	public function admin()
	{
	    if ($this->session->userdata('type') == "ADMIN") {
	        if (empty($_POST)) {
    	        $data['service'] = $this->service->get_admin_services();
    		    $this->load->view('general/admin', $data);
    		    return;
	        }
	        $idnum = $_POST['id'];
	        $action = $_POST['action'];
	        if ($action == "verify") {
	            $this->service->verify($idnum);
	            return;
	        }
	        $this->service->unverify($idnum);
	        return;
	    }
	    redirect('home', 'location');
	}
	
	public function service_used()
	{
        if (empty($_POST)) {
		    return;
        }
        $idnum = $_POST['id'];
        $this->service->service_count_update($idnum);
        return;
	}

	public function home()
	{
		// $this->load->view('panel/templates/header');
		$this->load->view('general/home');
		// $this->load->view('panel/templates/footer');
		// $this->load->view('panel/templates/footer-general');
	}

	// --------------------------------------------------------------------------------------

	public function signup() {
                if (!is_null($this->session->userdata('user_id'))) {
                    redirect('home', 'location');
                    echo "logged in";
                    return;
                }
		// echo $this->session->userdata('user_id');
		// return;
		// if no input
		if (empty($_POST)) {
			$this->load->view('general/signup');
			return;
		}

		// malicious input
		// else if (!$this->checkUserInput($_POST)) {
			// log as malicious
		// 	$history = array();
		// 	$history['action'] = 'SIGNUP_FAILED';
		// 	$history['details'] = 'Invalid Input';
		// 	$history['date'] = date("Y-m-d H:i:s");
		// 	$history['ip'] = $_SERVER['REMOTE_ADDR'];
		// 	$history['malicious'] = 1;
		// 	$this->history->log($history);
		// 	echo "Sign Up Error";
		// }

		// nothing suspicious
		else {
			// check if email already exists
			if ($this->user->checkEmail($_POST['email'])) {
				// log repeated signup attempt (as malicious)
				echo "Already Registered | Sign Up Error";
				$this->load->view('general/common/verify-timeout');
				return;
			} else {
				$data['username'] = $_POST['username'];
				$data['email'] = $_POST['email'];
				$data['password'] = $_POST['password'];
				$data['type'] = 'USER';
				$data['status'] = 'VERIFIED';
				$data['active_sessions'] = 1;
				$data['joinedon'] = date("Y-m-d H:i:s");
				$data['last_login'] = date("Y-m-d H:i:s");
				$data['last_login_attempts'] = 0;
				$data['malicious'] = 0;

				// update users
				if ($this->user->signup($data)) {
					// log to history
					// $history = array();
					// $history['action'] = 'SIGNUP';
					// $history['user_id'] = $this->session->userdata('user_id');
					// $history['date'] = date("Y-m-d H:i:s");
					// $history['ip'] = $_SERVER['REMOTE_ADDR'];
					// $history['malicious'] = 0;
					// $this->history->log($history);

					// log to logs
					// $this->session->set_userdata($data);
					echo "Sign Up Successful";
					$this->load->view('general/common/verified');
					header('Refresh:3; url= '.base_url().'home'); 
					// redirect('main/home', 'location');
					// $this->verify_email($data['email']);
					// redirect('main/verify?type=email', 'location');
				}
			}
		}
	}

	// --------------------------------------------------------------------------------------

// --------------------------------------------------------------------------------------
	public function privacy_policy()
	{
		$this->load->view('general/privacy_policy');
	}
	public function tnc()
	{
		$this->load->view('general/tnc');
	}
	public function login()
	{	
        if (!is_null($this->session->userdata('user_id'))) {
            redirect('home', 'location');
            echo "logged in";
            return;
        }
		// if no input
		if (empty($_POST)) {
			// $this->load->library('facebook');
			// $this->config->load('facebook');

			// $fb = new Facebook\Facebook([
   //            'app_id' => $this->config->item('facebook_app_id'), // Replace {app-id} with your app id
   //            'app_secret' => $this->config->item('facebook_app_secret'),
   //            'default_graph_version' => $this->config->item('facebook_graph_version'),
   //          ]);
            
   //          $helper = $fb->getRedirectLoginHelper();
   //          $permissions = ['email']; // Optional permissions
   //          $loginUrl = $helper->getLoginUrl('http://localhost/flood/login', $permissions);

   //          $loginURL['loginURL'] = htmlspecialchars($loginUrl);

            // $data['login_url'] = $loginURL['loginURL']
			$this->load->view('general/login');
			// echo '<a href='.$loginURL['loginURL'].'">Login</a>';
			// echo '<script>console.log("'.$loginURL['loginURL'].'")</script>';
		}
		// malicious input
		// else if (!$this->security->checkUserInput($_POST)) {
		// 	// log to malicious
		// 	echo "Log In Error";
		// }
		// nothing suspicious
		else {
			// $user_input = 
			$data['email'] = $_POST['email'];
			$data['password'] = $_POST['password'];
			$last_login = date("Y-m-d H:i:s");
			// login
			if ($this->user->login($data, $last_login)) {
				// log to history
				// log to logs
				// log to logs
				echo "Log In Successful";
				// echo $this->session->userdata('user_id');
				redirect('home', 'location');
			} else {
				// log to history
				// log to logs
				// log to logs
				echo "Log In Error";
				$a['login'] = "failed";
				$this->session->set_userdata($a);
				redirect('login', 'location');
			}
		}
	}

	// --------------------------------------------------------------------------------------

	public function verify($entity=NULL)
	{	
		if ($entity == "timeout") {
			$this->load->view('general/common/verify-timeout');
			// redirect to dashboard
			// header('Refresh:3; url= '.base_url().'dashboard'); 
			return;
		}

		@$type = $this->input->get()['type'];
		@$key = $this->input->get()['key'];

		if (is_null($key)) {
			if ($type == 'email') {
				$this->verify_email($data['email']);
				// $this->load->view('panel/user/verify-email', $data);
			}
			else if ($type == 'mobile')
				$this->load->view('panel/user/verify-mobile', $data);
			else
				// echo 1;
				redirect('error/404', 'location');
		}
		else {
			//logic for email verification
			if ($key == $this->session->userdata('key')) {
				$this->session->set_userdata('status','VERIFIED');
				$this->user->update_status($data['email']);
				$this->load->view('panel/user/verified');
			}
			else {
				$this->load->view('panel/user/verify-timeout');
			}
		}
	}

	// ==============================================================================
	public function offer_service()
	{	
		if ($this->session->userdata('user_id')) {
			$this->load->view('general/offer_service');
			return;
		}
		redirect('login', 'location');

		// $this->load->view('panel/templates/header');
		
		// $this->load->view('panel/templates/footer');
		// $this->load->view('panel/templates/footer-general');
	}

	public function nearby()
	{
		$data['service'] = $this->service->get_services();
		$this->load->view('general/request_service', $data);
		return;
	}
        
        public function logout()
	{
            $this->session->unset_userdata('user_id');
            redirect('login');
	}
        
        public function contact()
	{
		$this->load->view('general/contact');
		return;
	}

	public function request_service()
	{
		$this->load->library('pagination');

		if($this->uri->segment(2) > 0){
			$page = ($this->uri->segment(2));
			// echo "india";
		}
		else{
			$page = 1;
			// echo "no";
		}

		if (empty($_POST)) {
			if(!is_numeric($this->uri->segment(2))) {
				$input['verified'] = 1;
				$input = array_filter($input, 'strlen');
				$filter_input['input'] = $input;
				$this->session->unset_userdata('input');
				$this->session->set_userdata($filter_input);
			} else {//if ($this->session->userdata('input')) {
				//echo "input from session";
				$input = $this->session->userdata('input');
				// $this->session->unset_userdata('input');
				//var_dump($input);
				// $this->service->get_services(2, 10, $input);
			}
		} else {
			$input['district'] = isset($_POST['district']) ? $_POST['district'] : NULL;
			$input['taluk'] = isset($_POST['taluk']) ? $_POST['taluk'] : NULL;
			$input['category'] = isset($_POST['category']) ? $_POST['category'] : NULL;
			$input['subcategory'] = isset($_POST['subcategory']) ? $_POST['subcategory'] : NULL;
			$input['verified'] = 1;
			$input = array_filter($input, 'strlen');

			$filter_input['input'] = $input;
			$page = 1;
			// if(isset($input['district']) | isset($input['taluk']) | isset($input['category'])) {
			$this->session->unset_userdata('input');
			$this->session->set_userdata($filter_input);
			// }
			//echo "no session";
			//var_dump($input);
		}


		// echo $_GET['page'];
		// var_dump($input);
		// return;

		// if($page > 1) {
		// 	$input = $this->session->userdata($filter_input);
		// }
		// echo "<hr>";
		// var_dump($input);
		// echo "<hr>";
		if ($input == NULL) {
			$input['verified'] = 1;
		}
		$total_row = $this->service->get_service_count($input);
		//echo "<hr>".$total_row;

	// Initialize empty array.
	$config = array();
	// Set base_url for every links
	$config["base_url"] = base_url()."services";
	$config["first_url"] = '1';
	// Set total rows in the result set you are creating pagination for.
	$config["total_rows"] = $total_row;
	// Number of items you intend to show per page.
	$config["per_page"] = 10;
	// Use pagination number for anchor URL.
	$config['use_page_numbers'] = TRUE;
	//Set that how many number of pages you want to view.
	$config['num_links'] = 3;

	// $config['full_tag_open'] = '<li class="previous">';
	// $config['full_tag_close'] = '</li>';

	$config['num_tag_open'] = '<li class="hidden-xs centre waves-effect" style="overflow: visible;">';
	$config['num_tag_close'] = '</li>';

	// Open tag for CURRENT link.
	$config['cur_tag_open'] = '<li class="hidden-xs centre"><a href="javascript:void(0);" style="background-color: turquoise;color: white; overflow: visible;" class="waves-effect">';
	// Close tag for CURRENT link.
	$config['cur_tag_close'] = '</a></li>';

	$config['prev_tag_open'] = '<li class="previous">';
	$config['prev_tag_close'] = '</li>';
	$config['next_tag_open'] = '<li class="next">';
	$config['next_tag_close'] = '</li>';

	// $config['first_url'] = base_url().'services/1';

	$config['last_tag_open'] = '<li class="next">';
	$config['last_tag_close'] = '</li>';

	// By clicking on performing NEXT pagination.
	$config['next_link'] = 'Next <span aria-hidden="true">→</span>';
	$config['last_link'] = false;//'Last <span aria-hidden="true">>></span>';
	$config['first_link'] = false;
	// By clicking on performing PREVIOUS pagination.
	$config['prev_link'] = '<span aria-hidden="true">←</span> Prev';
	// $config['attributes'] = array('class' => 'waves-effect');
	// To initialize "$config" array and set to pagination library.
	$this->pagination->initialize($config);

	// Create link.
	// $this->pagination->create_links();



	// if (empty($_POST)) {
	// 	// $data['service'] = $this->service->get_services($offset, $limit);
	// 	$total_row = $this->service->get_service_count();
	// } else {

	// 	// $data['service'] = $this->service->get_services($offset, $limit, $input);
	// 	$total_row = $this->service->get_service_count($input);

	// 	echo $total_row;
	// 	return;
	// }

	// echo $this->uri->segment(4),"<hr>";
	// <a href="http://localhost/flood/index.php/main/request_service/3" data-ci-pagination-page="3">Prev</a><a href="http://localhost/flood/index.php/main/request_service" data-ci-pagination-page="1">1</a><a href="http://localhost/flood/index.php/main/request_service/2" data-ci-pagination-page="2">2</a><a href="http://localhost/flood/index.php/main/request_service/3" data-ci-pagination-page="3">3</a>&nbsp;<a class="current">4</a><a href="http://localhost/flood/index.php/main/request_service/5" data-ci-pagination-page="5">5</a><a href="http://localhost/flood/index.php/main/request_service/6" data-ci-pagination-page="6">6</a><a href="http://localhost/flood/index.php/main/request_service/7" data-ci-pagination-page="7">7</a><a href="http://localhost/flood/index.php/main/request_service/5" data-ci-pagination-page="5">Next</a><a href="http://localhost/flood/index.php/main/request_service/20" data-ci-pagination-page="20">Last ›</a>

	$limit = $config["per_page"];
	$offset = 0; // default
	if (!is_null($page) && is_numeric($page)) {
		$offset = ($page - 1) * $config["per_page"];
	}

	// echo $page, "<br>", $offset;

	
	$data['service'] = $this->service->get_services($offset, $limit, $input);
	$data['links'] = $this->pagination->create_links();
	$data['link_last'] = ceil($total_row / $config["per_page"]);
	$data['page'] = $page;
	// $data['link_prev'] = 2;


	// echo "<hr>",$this->pagination->create_links(),"<hr>";

	// View data according to array.
	// $this->load->view("pagination_view", $data);

	$this->load->view('general/request_service', $data);
	// echo $data['links'];
	// echo $page, "<br>", $offset;
	return;
	}


	public function add_sp() {	

		$dat['id'] = $this->session->userdata('user_id');
		$dat['company'] = $_POST['company'];
		$dat['name'] = $_POST['fname'].' '.$_POST['lname'];
		$dat['phone'] = $_POST['mobnum'];
		$dat['district'] = $_POST['owndistrict'];
		$dat['address'] = $_POST['permaddr'];

		$dat['created_on'] = date("Y-m-d");
		$dat['updated_on'] = date("Y-m-d");
		$dat['service_count'] = 0;

		if ($this->service->add_sp($dat)) {
			return True;
		}
		else {
			return False;
		}
	}

	public function add_service() {	
		$dat['id'] = $this->session->userdata('user_id');
		$dat['company'] = $_POST['company'];
		$dat['name'] = $_POST['fname'].' '.$_POST['lname'];
		$dat['phone'] = $_POST['mobnum'];
		$dat['district'] = $_POST['owndistrict'];
		$dat['address'] = $_POST['permaddr'];
		$dat['created_on'] = date("Y-m-d");
		$dat['updated_on'] = date("Y-m-d");
		$dat['service_count'] = 0;
                
                $data['name'] = $_POST['fname'].' '.$_POST['lname'];
		$data['company'] = $_POST['company'];
		$data['remark'] = $_POST['remarks'];
		$data['phone'] = $_POST['mobnum'];
		$data['created_on'] = date("Y-m-d");
		$data['district'] = $_POST['district'];
		$data['taluk'] = $_POST['taluk'];
		$data['category'] = $_POST['category'];
		// $data['subcategory'] = $_POST['subcategory'];
		$data['sp_id'] = $this->session->userdata('user_id');
		// echo $this->session->userdata('user_id');
		// var_dump($_POST);
		if ($this->service->add_service($data)) {
			return True;
		}
		else {
			return False;
		}
	}











}





?>