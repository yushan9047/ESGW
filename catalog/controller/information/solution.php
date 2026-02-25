<?php
class ControllerInformationSolution extends Controller {
	public function index() {
		
		$this->load->model('extension/module/d_blog_module');
		
		$this->load->model('extension/d_blog_module/post');
		
		// $this->load->language('information/information');

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);
		
		// 取得平台清單
		$data['services'] = $this->model_extension_d_blog_module_post->getPostsByCategoryId($category_id = 8);
		

		$post_id = 25;
		
		$service_info = $this->model_extension_d_blog_module_post->getPost($post_id);
		$video_info = $this->model_extension_d_blog_module_post->getPostVideos($post_id);


		if ($service_info) {
			$this->document->setTitle($service_info['meta_title']);
			$this->document->setDescription($service_info['meta_description']);
			$this->document->setKeywords($service_info['meta_keyword']);

			$data['breadcrumbs'][] = array(
				'text' => $service_info['title'],
				'href' => $this->url->link('information/solution', 'id=' .  $post_id)
			);

			$data['heading_title'] = $service_info['title'];
			
			if ( $video_info ) {
				foreach ( $video_info as $video ) {
					$data['youtubes'][] = $video;
				}
				
			}
			
			
			
			$data['description'] = html_entity_decode($service_info['description'], ENT_QUOTES, 'UTF-8');

			$data['continue'] = $this->url->link('common/home');

			$data['column_left'] = $this->load->controller('common/column_left');
			$data['column_right'] = $this->load->controller('common/column_right');
			$data['content_top'] = $this->load->controller('common/content_top');
			$data['content_bottom'] = $this->load->controller('common/content_bottom');
			$data['footer'] = $this->load->controller('common/footer');
			$data['header'] = $this->load->controller('common/header');

			$this->response->setOutput($this->load->view('information/solution', $data));
		} else {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('text_error'),
				'href' => $this->url->link('information/information', 'post_id=' . $post_id)
			);

			$this->document->setTitle($this->language->get('text_error'));

			$data['heading_title'] = $this->language->get('text_error');

			$data['text_error'] = $this->language->get('text_error');

			$data['continue'] = $this->url->link('common/home');

			$this->response->addHeader($this->request->server['SERVER_PROTOCOL'] . ' 404 Not Found');

			$data['column_left'] = $this->load->controller('common/column_left');
			$data['column_right'] = $this->load->controller('common/column_right');
			$data['content_top'] = $this->load->controller('common/content_top');
			$data['content_bottom'] = $this->load->controller('common/content_bottom');
			$data['footer'] = $this->load->controller('common/footer');
			$data['header'] = $this->load->controller('common/header');

			$this->response->setOutput($this->load->view('error/not_found', $data));
		}
	}


}
