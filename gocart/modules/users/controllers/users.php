<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends Front_Controller {

	public function index($id=0)
	{ 
            $this->load->model('Category_model');
            $category = $this->Category_model->get_categories();
            echo "<pre>"; print_r($category); die;
            $this->view('users_view');
	}
}

/* End of file users.php */
/* Location: ./application/modules/users/controllers/users.php */