<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Administrator extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
	}

	public function _administartor_output($output = null)
	{
		if($_SESSION["isLogged"]){
			$this->load->model('Register_model');
			if(!$this->Register_model->verify_administrator()){
				redirect('home');
			}
		}else{
			redirect('login');
		}
		$this->load->view('administrator.php',(array)$output);
	}

	public function index()
	{
		$this->_administartor_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}

	public function users_management()
	{
		try{
			$crud = new grocery_CRUD();

			$crud->set_table('users');
			$crud->required_fields('firstname','lastname','username','email','password');
			$crud->columns('users_id','firstname','lastname','username','email','password','Administrator');

			$output = $crud->render();

			$this->_administartor_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

	public function orders_management()
	{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('products');

			$crud->required_fields('lastName');

			$crud->set_field_upload('file_url','assets/uploads/files');

			$output = $crud->render();

			$this->_administartor_output($output);
	}

	public function products_management()
	{
			$crud = new grocery_CRUD();

			$crud->set_table('products');
			$crud->columns('products_id','title','description','price','image','created');

			$output = $crud->render();

			$this->_administartor_output($output);
	}

	public function order_details_management()
	{
			$crud = new grocery_CRUD();

			$crud->set_relation('customerNumber','customers','{contactLastName} {contactFirstName}');
			$crud->display_as('customerNumber','Customer');
			$crud->set_table('orders');
			$crud->set_subject('Order');
			$crud->unset_add();
			$crud->unset_delete();

			$output = $crud->render();

			$this->_administartor_output($output);
	}

	public function valueToEuro($value, $row)
	{
		return $value.' &euro;';
	}

}
