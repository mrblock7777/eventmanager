<?php
/**
 * groups.php
 *
 * groups application controller
 *
 * @package		phpHyppo
 * @author		phpHyppo Application Builder
 * @license		LGPL, see included license file
 * @link		http://www.phphyppo.org
 * @since		Version 8.02
 */
 
class Groups_Controller extends AppController
{
	/**
	 * beforeFilter
	 *
	 * load library and database before event execution
	 *
	 * @access	public
	 */
	public function beforeFilter()
	{
		// load groups model alias as groups
		$this->load->model('groups_model', 'groups');		
	}
	
	/**
	 * index
	 *
	 * listing data groups
	 *
	 * @access public
	 * @return void
	 */
	public function index()
	{	
		// get data from database
		$content['groups'] = $this->groups->lists();
		
		// capture groups content to template
		$data['content'] = $this->view->fetch('groups/list', $content);

		// bind content to template
		$this->view->display('example_layout', $data);
	}

	/**
	 * create
	 *
	 * create / add new groups
	 *
	 * @access public
	 * @return void
	 */
	public function create()
	{	
		// load input library
		$this->load->library('input');
		
		// get input data & filter it
		$input = $this->input->post('data', true);
		
		// input data exist
		if ( $input !== false )
		{
			// insert new data to database
			if ( $this->groups->create($input) )
				redirect('/groups/index');
		}
		
		// capture form
		$data['content'] = $this->view->fetch('groups/create');

		// bind content to template
		$this->view->display('example_layout', $data);		
	}

	/**
	 * view
	 *
	 * show / view details groups
	 *
	 * @access public
	 * @return void
	 */
	public function view($groups_id)
	{
		// get groups data from database
		$content = $this->groups->view($groups_id);
		
		// bind groups content to template
		$data['content'] = $this->view->fetch('groups/view', $content);

		// bind content to template
		$this->view->display('example_layout', $data);				
	}

	/**
	 * update
	 *
	 * update existing groups
	 *
	 * @access public
	 * @return void
	 */
	public function update($groups_id)
	{
		// load input library
		$this->load->library('input');
		
		// get input data & filter it
		$input = $this->input->post('data', true);
		
		// data exists
		if ( $input !== false )
		{
			// get specific update
			$update = $this->input->post('update', true);
			
			// update data on database
			$this->groups->update($input, $update);
			
			// redirect to index
			redirect('/groups/index');
		}
		
		// get groups data from database
		$content = $this->groups->view($groups_id);
		
		// bind groups data to template
		$data['content'] = $this->view->fetch('groups/update', $content);

		// bind content to template
		$this->view->display('example_layout', $data);		
	}

	/**
	 * delete
	 *
	 * remove or delete existing groups
	 *
	 * @access public
	 * @return void
	 */
	public function delete($groups_id)
	{
		// remove groups from database
		$this->groups->remove($groups_id);
		redirect('/groups/index');
	}


}

/* End of groups.php */
/* Location: /application/controllers/groups.php */