<?php
/**
 * faculties_model.php
 *
 * faculties application model
 *
 * @package		phpHyppo
 * @author		phpHyppo Application Builder
 * @license		LGPL, see included license file
 * @link		http://www.phphyppo.org
 * @since		Version 8.02
 */
class Faculties_Model extends AppModel
{
	/**
	 * lists
	 *
	 * lists data from faculties
	 *
	 * @access public
	 * @return array
	 */	
	public function lists()
	{
		// get all data from table faculties
		return $this->db->find_all('faculties');
	}

	/**
	 * create
	 *
	 * create / add new data
	 *
	 * @access public
	 * @param array $input
	 * @return integer
	 */	
	public function create($input)	
	{
		// insert new data to table faculties
		return $this->db->insert('faculties', $input);
	}

	/**
	 * view
	 *
	 * get detail data
	 *
	 * @access private
	 * @param int $faculties_id
	 * @return array
	 */
	public function view($faculties_id)
	{		
		// get only one specific data	
		$this->db->where('faculty_id', $faculties_id);
		
		// from table faculties
		return $this->db->find('faculties');	
	}

	/**
	 * update
	 *
	 * update or change data on database
	 *
	 * @access public	 
	 * @param array $input 	 
	 * @param array $update 
	 * @return integer
	 */	
	public function update($input, $update)
	{
		// update only specific data		
		$this->db->where($update);
		
		// update data on table faculties
		return $this->db->update('faculties', $input);
	}

	/**
	 * remove
	 *
	 * delete / remove existing data
	 *
	 * @access public
	 * @param int $faculties_id
	 * @return integer
	 */
	public function remove($faculties_id)
	{
		// remove only specific faculties		
		$this->db->where('faculty_id', $faculties_id);				
		
		// from table faculties
		return $this->db->delete('faculties');
	}


}

/* End of faculties_model.php */
/* Location: /application/models/faculties_model.php */