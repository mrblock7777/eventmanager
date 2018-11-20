<?php
/**
 * roles_model.php
 *
 * roles application model
 *
 * @package		phpHyppo
 * @author		phpHyppo Application Builder
 * @license		LGPL, see included license file
 * @link		http://www.phphyppo.org
 * @since		Version 8.02
 */
class Roles_Model extends AppModel
{
	/**
	 * lists
	 *
	 * lists data from roles
	 *
	 * @access public
	 * @return array
	 */	
	public function lists()
	{
		// get all data from table roles
		return $this->db->find_all('roles');
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
		// insert new data to table roles
		return $this->db->insert('roles', $input);
	}

	/**
	 * view
	 *
	 * get detail data
	 *
	 * @access private
	 * @param int $roles_id
	 * @return array
	 */
	public function view($roles_id)
	{		
		// get only one specific data		
		$this->db->where('role_id', $roles_id);
		
		// from table roles
		return $this->db->find('roles');	
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
		
		// update data on table roles
		return $this->db->update('roles', $input);
	}

	/**
	 * remove
	 *
	 * delete / remove existing data
	 *
	 * @access public
	 * @param int $roles_id
	 * @return integer
	 */
	public function remove($roles_id)
	{
		// remove only specific roles		
		$this->db->where('role_id', $roles_id);				
		
		// from table roles
		return $this->db->delete('roles');
	}


}

/* End of roles_model.php */
/* Location: /application/models/roles_model.php */