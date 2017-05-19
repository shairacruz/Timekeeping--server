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
        
        public function date()
        {
            header('Access-Control-Allow-Origin: *');
            header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
            $date = date('M d, Y');
            echo $date;
        }
        
        public function time()
        {
            header('Access-Control-Allow-Origin: *');
       header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
            $time = date('h:i:s A');
            echo $time;
        }
        
        public function datetime()
        {
            header('Access-Control-Allow-Origin: *');
       header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
            $date = new DateTime();
            echo $date->getTimestamp();
        }
        
        public function login(){
            header('Access-Control-Allow-Origin: *');
       header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
            $this->load->model('DbQuery');
            $list = $this->DbQuery->login($_POST);
            echo json_encode($list);
            exit;
        }
        
        public function timein(){
            $this->load->model('DbQuery');
            $list = $this->DbQuery->timein($_POST);
            //$data['product_id'] = $args;
            echo json_encode($list);
            exit;
        }
        
        public function home(){
            $this->load->view('homepage');
        }
}
?>