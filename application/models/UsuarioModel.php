<?php
class UsuarioModel extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

		public function insert($data){
			
			return $this->db->insert('usuario', $data);
		}

		public function get_news($nombre = FALSE)
		{
			if ($nombre === FALSE)
			{
				$query = $this->db->get('usuario');
				return $query->result_array();
			}
		
			$query = $this->db->get_where('usuario', array('nombre' => $nombre));
			return $query->row_array();
		}
}
