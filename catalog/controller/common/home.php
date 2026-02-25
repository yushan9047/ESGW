<?php
class ControllerCommonHome extends Controller {
	public function index() {
		$this->document->setTitle($this->config->get('config_meta_title'));
		$this->document->setDescription($this->config->get('config_meta_description'));
		$this->document->setKeywords($this->config->get('config_meta_keyword'));

		if (isset($this->request->get['route'])) {
			$this->document->addLink($this->config->get('config_url'), 'canonical');
		}
		
		$this->load->model('extension/module/d_blog_module');
		$this->load->model('extension/d_blog_module/post');
		
		// 取得平台
		$data['services'] = $this->model_extension_d_blog_module_post->getPostsByCategoryId($category_id = 8);
		
		// 取得新聞
		$data['blogs'] = $this->model_extension_d_blog_module_post->getPostsByCategoryId($category_id = 9);
		
		
		
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('common/home', $data));
	}
}
