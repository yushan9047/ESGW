<?php
namespace Template;
final class Twig {
	private $data = array();

	public function set($key, $value) {
		$this->data[$key] = $value;
	}
	
	public function render($filename, $code = '') {
		if (!$code) {
			$file = DIR_TEMPLATE . $filename . '.twig';

			if (defined('DIR_CATALOG') && is_file(DIR_MODIFICATION . 'admin/view/template/' . $filename . '.twig')) {	
                $code = file_get_contents(DIR_MODIFICATION . 'admin/view/template/' . $filename . '.twig');
            } elseif (is_file(DIR_MODIFICATION . 'catalog/view/theme/' . $filename . '.twig')) {
                $code = file_get_contents(DIR_MODIFICATION . 'catalog/view/theme/' . $filename . '.twig');
            } elseif (is_file($file)) {
				$code = file_get_contents($file);
			} else {
				throw new \Exception('Error: Could not load template ' . $file . '!');
				exit();
			}
		}

		// initialize Twig environment
		$config = array(
			'autoescape'  => false,
			'debug'       => false,
			'auto_reload' => true,
			'cache'       => DIR_CACHE . 'template/'
		);

		try {
			$loader = new \Twig\Loader\ArrayLoader(array($filename . '.twig' => $code));

            //d_opencart_patch.xml
			$d_loader = new \Twig\Loader\FilesystemLoader();
			

    		if (defined('DIR_CATALOG') && is_dir(DIR_MODIFICATION . 'admin/view/template/')) {	
    			$d_loader->addPath(DIR_MODIFICATION . 'admin/view/template/');
    		} elseif (is_dir(DIR_MODIFICATION . 'catalog/view/theme/')) {
    			$d_loader->addPath(DIR_MODIFICATION . 'catalog/view/theme/');
    		}
    		
    		$d_loader->addPath(DIR_TEMPLATE);
			$loader = new \Twig\Loader\ChainLoader(array($loader, $d_loader));
            

			$twig = new \Twig\Environment($loader, $config);

            //d_twig_manager.xml >= 3.0.3.5 
            if (isset($this->data['d_twig_manager'])) {
                $twig->addExtension($this->data['d_twig_manager']);
				unset($this->data['d_twig_manager']);
            } else if (isset($this->data['d_registry'])) {
                $this->data['d_registry']->set('d_twig_manager_extension', new \Twig_Extension_DTwigManager($this->data['d_registry']));
                $twig->addExtension($this->data['d_registry']->get('d_twig_manager_extension'));
                unset($this->data['d_registry']);
            }
            

			return $twig->render($filename . '.twig', $this->data);
		} catch (\Exception $e) {
			trigger_error('Error: Could not load template ' . $filename . '!');
			exit();
		}	
	}	
}
