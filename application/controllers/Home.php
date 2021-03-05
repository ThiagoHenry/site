<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
	public function index()
	{
		$data = array(
		'view' => 'home/index',
		'title' => 'RAIANY MARQUES',
		'redes' => $this->getRedesSociais(),
	);

		$this->parser->parse('home/index', $data);
	}

	private function getRedesSociais()
	{
		return array (
				array (
					'id' =>1,
					'titulo' =>"Facebook",
					'url' => "https://www.google.com.br",
					'class' => "fa-facebook"
				),
				array (
					'id' =>8,
					'titulo' =>"Instagram",
					'url' => "https://www.google.com.br",
					'class' =>"fa-instagram"
				),
				array (
					'id' =>6	,
					'titulo' =>"Linkedin"	,
					'url' => "https://www.google.com.br",
					'class' =>"fa-linkedin"
				),
				array (
					'id' =>7	,
					'titulo' =>"Youtube"	,
					'url' => "https://www.google.com.br",
					'class' =>"fa-youtube"
				),
			);
	}
}
