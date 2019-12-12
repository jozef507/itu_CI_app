<?php

class Shows_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function get_shows()
	{
		$query = $this->db->get('KulturneDielo');
		$result= $query->result_array();
		return $result;
	}

	public function create_show($name, $type, $genre, $text)
	{
		$data = array(
			'Nazov' => $name,
			'Typ' => $type,
			'Zaner' => $genre,
			'Ucinkujuci' => $text
		);

		$this->db->insert('KulturneDielo', $data);
		return true;
	}

	public function delete_show($id)
	{
		$this->db->delete('KulturneDielo', array('ID_KulturneDielo' => $id));
		return true;
	}


}
