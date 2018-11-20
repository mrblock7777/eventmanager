<?php
/**
 * venues_model.php
 *
 * venues application model
 *
 * @package		phpHyppo
 * @author		phpHyppo Application Builder
 * @license		LGPL, see included license file
 * @link		http://www.phphyppo.org
 * @since		Version 8.02
 */
class Venues_Model extends AppModel
{
	/**
	 * lists
	 *
	 * lists data from venues
	 *
	 * @access public
	 * @return array
	 */	
	public function lists()
	{
		// get all data from table venues
		return $this->db->find_all('venues');
	}

	public function listByFaculty($faculty_id){
		$this->db->join('faculties','faculties.faculty_id=venues.faculty_id')
				->where('faculties.faculty_id',$faculty_id);

		return $this->db->find_all('venues');

	}
	public function listByEvent($location_id){
		$this->db->join('events','events.location_id = venues.location_id')
				->where('events.location_id',$location_id);
		return $this->db->find_all('venues');
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
		// insert new data to table venues
		return $this->db->insert('venues', $input);
	}

	/**
	 * view
	 *
	 * get detail data
	 *
	 * @access private
	 * @param int $venues_id
	 * @return array
	 */
	public function view($venues_id)
	{		
		// get only one specific data		
		$this->db->where('location_id', $venues_id);
		
		// from table venues
		return $this->db->find('venues');	
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
		
		// update data on table venues
		return $this->db->update('venues', $input);
	}

	/**
	 * remove
	 *
	 * delete / remove existing data
	 *
	 * @access public
	 * @param int $venues_id
	 * @return integer
	 */
	public function remove($venues_id)
	{
		// remove only specific venues		
		$this->db->where('location_id', $venues_id);				
		
		// from table venues
		return $this->db->delete('venues');
	}


}

/* End of venues_model.php */
/* Location: /application/models/venues_model.php */