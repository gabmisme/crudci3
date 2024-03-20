<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Usuario extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('UsuarioModel');
                $this->load->helper('url_helper');
        }

        public function index()
        {
			$data['usuarios'] = $this->UsuarioModel->get_news();
			if (empty($data['usuarios']))
			{
				$data = array(
					"status" => "error",
					"message" => "No se encontraron usuarios"
				);
				// show_404();
			}
			echo json_encode($data);

			$this->load->view('usuario/usuarioindex');

        }

        public function view($slug = NULL)
        {
                // $data['news_item'] = $this->Usuario_Model->get_news($slug);
				$data['usuarios'] = $this->UsuarioModel->get_news();
				if (empty($data['usuarios']))
				{
					$data = array(
						"status" => "error",
						"message" => "No se encontraron usuarios"
					);
					// show_404();
				}
				echo json_encode($data);
        }
}
