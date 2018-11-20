<?php
/**
 * groups_model.php
 *
 * groups application model
 *
 * @package		phpHyppo
 * @author		phpHyppo Application Builder
 * @license		LGPL, see included license file
 * @link		http://www.phphyppo.org
 * @since		Version 8.02
 */
class Groups_Model extends AppModel
{
	/**
	 * lists
	 *
	 * lists data from groups
	 *
	 * @access public
	 * @return array
	 */	
	public function lists()
	{
		// get all data from table groups
		return $this->db->find_all('groups');
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
		// insert new data to table groups
		return $this->db->insert('groups', $input);
	}

	/**
	 * view
	 *
	 * get detail data
	 *
	 * @access private
	 * @param int $groups_id
	 * @return array
	 */
	public function view($groups_id)
	{		
		// get only one specific data		
		$this->db->where('group_id', $groups_id);
		
		// from table groups
		return $this->db->find('groups');	
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
		
		// update data on table groups
		return $this->db->update('groups', $input);
	}

	/**
	 * remove
	 *
	 * delete / remove existing data
	 *
	 * @access public
	 * @param int $groups_id
	 * @return integer
	 */
	public function remove($groups_id)
	{
		// remove only specific groups		
		$this->db->where('group_id', $groups_id);				
		
		// from table groups
		return $this->db->delete('groups');
	}


}

/* End of groups_model.php */
/* Location: /application/models/groups_model.php */