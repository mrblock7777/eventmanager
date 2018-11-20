<?php
/**
 * applications_model.php
 *
 * applications application model
 *
 * @package		phpHyppo
 * @author		phpHyppo Application Builder
 * @license		LGPL, see included license file
 * @link		http://www.phphyppo.org
 * @since		Version 8.02
 */
class Applications_Model extends AppModel
{
	/**
	 * lists
	 *
	 * lists data from applications
	 *
	 * @access public
	 * @return array
	 */	
	public function lists()
	{
		// get all data from table applications
		return $this->db->find_all('applications');
	}
	
	public function listByUser($user_id){
		$this->db->join('users','users.user_id = applications.user_id')
				->where('users.user_id',$user_id);

		return $this->db->find_all('applications');

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
		// insert new data to table applications
		return $this->db->insert('applications', $input);
	}

	/**
	 * view
	 *
	 * get detail data
	 *
	 * @access private
	 * @param int $applications_id
	 * @return array
	 */
	public function view($applications_id)
	{		
		// get only one specific data		
		$this->db->where('app_id', $applications_id);
		
		// from table applications
		return $this->db->find('applications');	
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
		
		// update data on table applications
		return $this->db->update('applications', $input);
	}

	/**
	 * remove
	 *
	 * delete / remove existing data
	 *
	 * @access public
	 * @param int $applications_id
	 * @return integer
	 */
	public function remove($applications_id)
	{
		// remove only specific applications		
		$this->db->where('app_id', $applications_id);				
		
		// from table applications
		return $this->db->delete('applications');
	}


}

/* End of applications_model.php */
/* Location: /application/models/applications_model.php */