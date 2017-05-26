<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
        public function __construct() {
            parent::__construct();
            $this->output->set_header('Access-Control-Allow-Origin: *');
            $this->load->helper('url');
            $this->load->helper('date');
        }
        
	public function index()
	{
            $this->load->view('index');
            
	}
        
        public function datetime()
        {
            $data = array();
            header('Access-Control-Allow-Origin: *');
            header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
            $data['datetime'] = date('Y-m-d H:i:s');
            $data['datenow'] = date('M d, Y');
            $data['dateformat'] = date('Y-m-d');
            $data['time'] = date('h:i:s A');
            $data['hour'] = date('h');
            $data['minute'] = date('i');
            $data['seconds'] = date('s');
            $data['am_pm'] = date('A');
            echo json_encode($data);
            exit;
        }
        
        /*public function getUnixTime(){
            header('Access-Control-Allow-Origin: *');
            header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
            $datetime = date('Y-m-d h:i:s A');
            echo strtotime($datetime);
            exit;
        }*/
        
        public function login(){
            header('Access-Control-Allow-Origin: *');
            header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
            
            $this->load->model('DbQuery');
            $list = $this->DbQuery->login($_POST);
            echo json_encode($list);
            exit;
        }
        
        public function timein(){
            header('Access-Control-Allow-Origin: *');
            header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
            $this->load->model('DbQuery');
            $list = $this->DbQuery->timein($_POST);
            //$data['product_id'] = $args;
            echo json_encode($list);
            exit;
        }
        
        public function timeout(){
            header('Access-Control-Allow-Origin: *');
            header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
            $this->load->model('DbQuery');
            $list = $this->DbQuery->timeout($_POST);
            //$data['product_id'] = $args;
            echo json_encode($list);
            exit;
        }
        
        public function getTimeIn(){
            header('Access-Control-Allow-Origin: *');
            header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
            $this->load->model('DbQuery');
            $list = $this->DbQuery->getTimeIn($_POST);
            echo json_encode($list);
            exit;
        }
        
        public function getTimeOut(){
            header('Access-Control-Allow-Origin: *');
            header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
            $this->load->model('DbQuery');
            $list = $this->DbQuery->getTimeOut($_POST);
            echo json_encode($list);
            exit;
        }
                
        public function home_page($args){
            header('Access-Control-Allow-Origin: *');
            header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
            $data = array();
            $data['user_id'] = $args;
            $this->load->view('homepage', $data);
//            echo $data['user_id'];
//            exit;
        }
        
        public function checkIn(){
            header('Access-Control-Allow-Origin: *');
            header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
            $this->load->model('DbQuery');
            $list = $this->DbQuery->checkIn($_POST);
            echo json_encode($list);
            exit;
        }
        
        public function checkOut(){
            header('Access-Control-Allow-Origin: *');
            header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
            $this->load->model('DbQuery');
            $list = $this->DbQuery->checkOut($_POST);
            echo json_encode($list);
            exit;
        }
}
?>