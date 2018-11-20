<?php
/**
 * users_model.php
 *
 * users application model
 *
 * @package		phpHyppo
 * @author		phpHyppo Application Builder
 * @license		LGPL, see included license file
 * @link		http://www.phphyppo.org
 * @since		Version 8.02
 */
class Users_Model extends AppModel
{
	/**
	 * lists
	 *
	 * lists data from users
	 *
	 * @access public
	 * @return array
	 */	
	public function lists()
	{
		// get all data from table users
		return $this->db->find_all('users');
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
		// insert new data to table users
		return $this->db->insert('users', $input);
	}

	/**
	 * view
	 *
	 * get detail data
	 *
	 * @access private
	 * @param int $users_id
	 * @return array
	 */
	public function view($users_id)
	{		
		// get only one specific data		
		$this->db->where('user_id', $users_id);
		
		// from table users
		return $this->db->find('users');	
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
		
		// update data on table users
		return $this->db->update('users', $input);
	}

	/**
	 * remove
	 *
	 * delete / remove existing data
	 *
	 * @access public
	 * @param int $users_id
	 * @return integer
	 */
	public function remove($users_id)
	{
		// remove only specific users		
		$this->db->where('user_id', $users_id);				
		
		// from table users
		return $this->db->delete('users');
	}


}

/* End of users_model.php */
/* Location: /application/models/users_model.php */