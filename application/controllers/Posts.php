<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts extends CI_Controller{

	public function index(){
		$data['title'] = 'Latest Posts';

		$data['posts']=$this->post_model->get_posts();

		//print_r($data['posts']);

		$this->load->view('template/header', $data);
		$this->load->view('posts/index', $data);
		$this->load->view('template/footer');
	}

	public function view($slug = NULL){
		$data['post'] = $this->post_model->get_posts($slug);

		if(empty($data['post'])){
			show_404();
			echo "hi";
		}

		$data['title'] = $data['post']['title'];

		$this->load->view('template/header', $data);
		$this->load->view('posts/view', $data);
		$this->load->view('template/footer');
	}

	public function create(){
		$data['title'] = "Create Post";

		$data['categories'] = $this->post_model->get_categories();

		$this->form_validation->set_rules('b_title', 'Title', 'required');
		$this->form_validation->set_rules('b_body', 'Body', 'required');

		if($this->form_validation->run() === FALSE){
			$this->load->view('template/header', $data);
			$this->load->view('posts/create', $data);
			$this->load->view('template/footer');
		}
		else{

			//upload image coding

			$upload['upload_path'] = './assets/images/posts';
			$upload['allowed_types'] = 'gif|png|jpg';
			$upload['max_size'] = '2048'; //2MB is set
			$upload['max_height'] = '2000';
			$upload['max_width'] = '2000';

			$this->load->library('upload', $upload);

			if(!$this->upload->do_upload()){
				$errors= array('error'=>$this->upload->display_errors());
				$post_image='noimage.jpg';
			}else{
				$data = array('upload_data' => $this->upload->data());
				$post_image = $_FILES['userfile']['name'];
			}

			$this->post_model->create_post($post_image);
			redirect('posts');
		}
	}

	public function delete($post_id){
		$this->post_model->delete_post($post_id);
		redirect('posts');
	}

	public function edit($slug){
		$data['post'] = $this->post_model->get_posts($slug);

		$data['categories'] = $this->post_model->get_categories();

		if(empty($data['post'])){
			show_404();
			echo "hi";
		}

		$data['title'] = "Edit";

		$this->load->view('template/header', $data);
		$this->load->view('posts/edit', $data);
		$this->load->view('template/footer');
	}

	public function update(){
		$this->post_model->update_post();
		redirect('posts');
	}

}
?>