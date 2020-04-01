<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Post_model extends CI_Model
	{

		public function __constuct(){
			$this->load->database();
		}

		public function get_posts($slug=FALSE){
			if($slug === FALSE){

				$query = $this->db->order_by('post_id','DESC')->get('posts');
				return $query->result_array();
			}

			$query = $this->db->get_where('posts', array('slug'=> $slug));

			return $query->row_array();

		}

		public function create_post(){
			$slug = url_title($this->input->post('b_title'));

			$data = array(
				'title' => $this->input->post('b_title'),
				'slug'  => $slug,
				'body'  => $this->input->post('b_body')
				);

			return $this->db->insert('posts',$data);
		}

		public function delete_post($post_id){
			$this->db->where('post_id', $post_id)->delete('posts');
			return true;
		}

		public function update_post(){
			$slug = url_title($this->input->post('b_title'));

			$data = array(
				'title' => $this->input->post('b_title'),
				'slug'  => $slug,
				'body'  => $this->input->post('b_body')
			);

			$this->db->where('post_id', $this->input->post('post_id'))->update('posts', $data);
			return true;
		}
		
	}
?>