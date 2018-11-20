<?php
/**
 * roles.php
 *
 * roles application controller
 *
 * @package		phpHyppo
 * @author		phpHyppo Application Builder
 * @license		LGPL, see included license file
 * @link		http://www.phphyppo.org
 * @since		Version 8.02
 */
 
class Roles_Controller extends AppController
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
		// load roles model alias as roles
		$this->load->model('roles_model', 'roles');		
	}
	
	/**
	 * index
	 *
	 * listing data roles
	 *
	 * @access public
	 * @return void
	 */
	public function index()
	{	
		// get data from database
		$content['roles'] = $this->roles->lists();
		
		// capture roles content to template
		$data['content'] = $this->view->fetch('roles/list', $content);

		// bind content to template
		$this->view->display('example_layout', $data);
	}

	/**
	 * create
	 *
	 * create / add new roles
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
			if ( $this->roles->create($input) )
				redirect('/roles/index');
		}
		
		// capture form
		$data['content'] = $this->view->fetch('roles/create');

		// bind content to template
		$this->view->display('example_layout', $data);		
	}

	/**
	 * view
	 *
	 * show / view details roles
	 *
	 * @access public
	 * @return void
	 */
	public function view($roles_id)
	{
		// get roles data from database
		$content = $this->roles->view($roles_id);
		
		// bind roles content to template
		$data['content'] = $this->view->fetch('roles/view', $content);

		// bind content to template
		$this->view->display('example_layout', $data);				
	}

	/**
	 * update
	 *
	 * update existing roles
	 *
	 * @access public
	 * @return void
	 */
	public function update($roles_id)
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
			$this->roles->update($input, $update);
			
			// redirect to index
			redirect('/roles/index');
		}
		
		// get roles data from database
		$content = $this->roles->view($roles_id);
		
		// bind roles data to template
		$data['content'] = $this->view->fetch('roles/update', $content);

		// bind content to template
		$this->view->display('example_layout', $data);		
	}

	/**
	 * delete
	 *
	 * remove or delete existing roles
	 *
	 * @access public
	 * @return void
	 */
	public function delete($roles_id)
	{
		// remove roles from database
		$this->roles->remove($roles_id);
		redirect('/roles/index');
	}


}

/* End of roles.php */
/* Location: /application/controllers/roles.php */