<?php
/**
 * users.php
 *
 * users application controller
 *
 * @package		phpHyppo
 * @author		phpHyppo Application Builder
 * @license		LGPL, see included license file
 * @link		http://www.phphyppo.org
 * @since		Version 8.02
 */
 
class Users_Controller extends AppController
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
		// load users model alias as users
		$this->load->model('users_model', 'users');	
		$this->load->model('faculties_model','faculties');
		$this->load->model('groups_model','groups');
	}
	
	/**
	 * index
	 *
	 * listing data users
	 *
	 * @access public
	 * @return void
	 */
	public function index()
	{	
		// get data from database
		$content['users'] = $this->users->lists();
		
		// capture users content to template
		$data['content'] = $this->view->fetch('users/list', $content);

		// bind content to template
		$this->view->display('example_layout', $data);
	}

	/**
	 * create
	 *
	 * create / add new users
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
			if ( $this->users->create($input) )
				redirect('/session/login');
		}
		$content['faculties'] = $this->faculties->lists();
		$content['groups'] = $this->groups->lists();
		// capture form
		$data['content'] = $this->view->fetch('users/create', $content);

		// bind content to template
		$this->view->display('example_layout', $data);		
	}

	/**
	 * view
	 *
	 * show / view details users
	 *
	 * @access public
	 * @return void
	 */
	public function view($users_id)
	{
		// get users data from database
		$content = $this->users->view($users_id);
		
		// bind users content to template
		$data['content'] = $this->view->fetch('users/view', $content);

		// bind content to template
		$this->view->display('example_layout', $data);				
	}

	/**
	 * update
	 *
	 * update existing users
	 *
	 * @access public
	 * @return void
	 */
	public function update($users_id)
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
			$this->users->update($input, $update);
			
			// redirect to index
			redirect('/users/index');
		}
		
		// get users data from database
		$content = $this->users->view($users_id);
		
		// bind users data to template
		$data['content'] = $this->view->fetch('users/update', $content);

		// bind content to template
		$this->view->display('example_layout', $data);		
	}

	/**
	 * delete
	 *
	 * remove or delete existing users
	 *
	 * @access public
	 * @return void
	 */
	public function delete($users_id)
	{
		// remove users from database
		$this->users->remove($users_id);
		redirect('/users/index');
	}


}

/* End of users.php */
/* Location: /application/controllers/users.php */