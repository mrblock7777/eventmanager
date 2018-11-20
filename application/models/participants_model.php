<?php
/**
 * participants_model.php
 *
 * participants application model
 *
 * @package		phpHyppo
 * @author		phpHyppo Application Builder
 * @license		LGPL, see included license file
 * @link		http://www.phphyppo.org
 * @since		Version 8.02
 */
class Participants_Model extends AppModel
{
	/**
	 * lists
	 *
	 * lists data from participants
	 *
	 * @access public
	 * @return array
	 */	
	public function lists()
	{
		// get all data from table participants
		return $this->db->find_all('participants');
	}
	public function listByEvent($event_id){
		$this->db->join('events','participants.event_id = events.event_id')
				->where('events.event_id',$event_id);
		return $this->db->find_all('participants');

	}

	public function countParticipant($event_id){
		$this->db->join('events','participants.event_id = events.event_id')
				->where('events.event_id',$event_id);
		return $this->db->record_count('participants','participant_id');

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
		// insert new data to table participants
		return $this->db->insert('participants', $input);
	}

	/**
	 * view
	 *
	 * get detail data
	 *
	 * @access private
	 * @param int $participants_id
	 * @return array
	 */
	public function view($participants_id)
	{		
		// get only one specific data		
		$this->db->where('participant_id', $participants_id);
		
		// from table participants
		return $this->db->find('participants');	
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
		
		// update data on table participants
		return $this->db->update('participants', $input);
	}

	/**
	 * remove
	 *
	 * delete / remove existing data
	 *
	 * @access public
	 * @param int $participants_id
	 * @return integer
	 */
	public function remove($participants_id)
	{
		// remove only specific participants		
		$this->db->where('participant_id', $participants_id);				
		
		// from table participants
		return $this->db->delete('participants');
	}


}

/* End of participants_model.php */
/* Location: /application/models/participants_model.php */