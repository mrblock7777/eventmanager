<?php
/**
 * events_model.php
 *
 * events application model
 *
 * @package		phpHyppo
 * @author		phpHyppo Application Builder
 * @license		LGPL, see included license file
 * @link		http://www.phphyppo.org
 * @since		Version 8.02
 */
class Events_Model extends AppModel
{
	/**
	 * lists
	 *
	 * lists data from events
	 *
	 * @access public
	 * @return array
	 */	
	public function lists()
	{
		// get all data from table events
		return $this->db->find_all('events');
	}

	public function listByFaculty($faculty_id){
		$this->db->join('faculties','faculties.faculty_id=events.faculty_id')
				->where('faculties.faculty_id',$faculty_id);

		return $this->db->find_all('events');

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
		// insert new data to table events
		return $this->db->insert('events', $input);
	}

	/**
	 * view
	 *
	 * get detail data
	 *
	 * @access private
	 * @param int $events_id
	 * @return array
	 */
	public function view($events_id)
	{		
		// get only one specific data		
		$this->db->where('event_id', $events_id);
		
		// from table events
		return $this->db->find('events');	
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
		
		// update data on table events
		return $this->db->update('events', $input);
	}

	/**
	 * remove
	 *
	 * delete / remove existing data
	 *
	 * @access public
	 * @param int $events_id
	 * @return integer
	 */
	public function remove($events_id)
	{
		// remove only specific events		
		$this->db->where('event_id', $events_id);				
		
		// from table events
		return $this->db->delete('events');
	}


}

/* End of events_model.php */
/* Location: /application/models/events_model.php */