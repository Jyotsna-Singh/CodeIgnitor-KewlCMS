<?php
class Categories extends MY_Controller{
	
	public function __construct(){
		parent::__construct();
		
		//Access Control
		if(!$this->session->userdata('logged_in')){
			redirect('admin/login');
		}
	}
	
	/*
	* Categories Main Index
	*/
	public function index(){
		//Get categories
		$data['categories'] = $this->Article_model->get_categories('id', 'DESC');
		
		//Views
		$data['main_content'] = 'admin/categories/index';
		$this->load->view('admin/layouts/main', $data);
	}
	
	/*
	* Add Category
	*/
	public function add(){
		//Validation Rules
		$this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[4]|xss_clean');
		
		if($this->form_validation->run() == FALSE){
			//Views
			$data['main_content'] = 'admin/categories/add';
			$this->load->view('admin/layouts/main', $data);
		} else {
			//Create Data Array
			$data = array(
					'name'  => $this->input->post('name')
			);
			
			//Categories Table Insert
			$this->Article_model->insert_category($data);
			
			//Create Message
			$this->session->set_flashdata('category_saved', 'Your category has been saved');
			
			//Redirect to pages
			redirect('admin/categories');
		}
		
	}
	/*
	 * Edit Category
	*
	* @param - $id
	*/
	public function edit($id){
		//Validation Rules
		$this->form_validation->set_rules('name','Name','trim|required|min_length[4]|xss_clean');
	
		if($this->form_validation->run() == FALSE){
			$data['category'] = $this->Article_model->get_category($id);
			
			//Views
			$data['main_content'] = 'admin/categories/edit';
			$this->load->view('admin/layouts/main', $data);
		} else {
			//Create Data Array
			$data = array(
					'name'         => $this->input->post('name')
			);
	
			//Articles Table Insert
			$this->Article_model->update_category($data, $id);
	
			//Create Message
			$this->session->set_flashdata('category_saved', 'Your category has been saved');
	
			//Redirect to pages
			redirect('admin/categories');
		}
	}
	
	/*
	 * Delete Category
	*
	* @param - (int) $id
	public function delete($id) {
		// check for existing articles in this category
		$test = $this->Article_model->get_articles_by_category($id);
		if (count($test) == 0) { // no articles with this category found
			// Execute Update Method
			$this->Article_model->delete_category($id); 
			// Create Message 
			$this->session->set_flashdata('category_deleted', 'This Category has been deleted');
			
			
		} else { 
			// Create Refusal Message 
			$this->session->set_flashdata('category_not_deleted', 'Unable to delete, this category still has articles linked!');
		}
		// Redirect to index page 
		redirect('admin/categories');
	}
	*/
	public function delete($id){
		$this->Article_model->delete_category($id);
			
		//Create Message
		$this->session->set_flashdata('category_deleted', 'Your category has been deleted');
	
		//Redirect to articles
		redirect('admin/categories');
	}
	
	
}