<?php
/**
 * faculties.php
 *
 * faculties application controller
 *
 * @package		phpHyppo
 * @author		phpHyppo Application Builder
 * @license		LGPL, see included license file
 * @link		http://www.phphyppo.org
 * @since		Version 8.02
 */
 
class Faculties_Controller extends AppController
{
	/**
	 * beforeFilter
	 *
	 * load library and database before event execution
	 *
	 * @access	public
	 */
	  private $group, $user;
	public function beforeFilter()
	{
		// load authentication library
		$this->load->library('acl');

		$this->view->session = $this->session->all_userdata();

		$this->group = $this->view->session['group_id'];
		$this->user = $this->view->session['user_id'];
		// load faculties model alias as faculties
		$this->load->model('faculties_model', 'faculties');		
		$this->load->model('events_model','events');
		$this->load->model('venues_model','venues');
		$this->load->model('users_model','users');
		$this->load->model('participants_model','participants');
	}
	
	/**
	 * index
	 *
	 * listing data faculties
	 *
	 * @access public
	 * @return void
	 */
	public function index()
	{	
		$group = $this->group;
		// get data from database
		$content['faculties'] = $this->faculties->lists();

		$content['session'] = $this->session->all_userdata();

		$content['users'] = $this->users->lists();
		// capture faculties content to template
		
		if ( $this->acl->is_login() ){
			if($group ==1){
			$data['content'] = $this->view->fetch('faculties/list_admin', $content);
			// bind content to template
			$this->view->display('admin_layout', $data);
			}
			else if($group == 2){
				$data['content'] = $this->view->fetch('faculties/list_public', $content);
				$this->view->display('users_layout', $data);
			}

		}
		else{
			$data['content'] = $this->view->fetch('faculties/list_public', $content);
			// bind content to template
			$this->view->display('public_layout', $data);
		}

		
	}


	public function event($faculties_id){

		$content = $this->faculties->view($faculties_id);
		$content['user_id'] = $this->user;
		
		$content['events'] = $this->events->listByFaculty($faculties_id);
		$data['content'] = $this->view->fetch('faculties/view',$content);
		
		if($this->acl->is_login() && $this->group == 1){
			$content['venues'] = $this->venues->listByFaculty($faculties_id);
			$data['content'] .= $this->view->fetch('events/list_admin',$content);
		}
		else{
			$content['venues'] = $this->venues->listByFaculty($faculties_id);
			$data['content'] .= $this->view->fetch('events/list_public',$content);
			
		}
		$this->view->display('example_layout',$data);
	}
	

	/**
	 * create
	 *
	 * create / add new faculties
	 *
	 * @access public
	 * @return void
	 */
	public function create()
	{	
		// check access role
			if ( ! $this->acl->is_login() )
				redirect('/faculties/error');

		// load input library
		$this->load->library('input');
		
		// get input data & filter it
		$input = $this->input->post('data', true);
		
		// input data exist
		if ( $input !== false )
		{
			// insert new data to database
			if ( $this->faculties->create($input) )
				redirect('/faculties/index');
		}
		
		// capture form
		$data['content'] = $this->view->fetch('faculties/create');

		// bind content to template
		$this->view->display('example_layout', $data);		
	}

	public function error(){
		$this->view->display('/faculties/error_splash');
	}

	/**
	 * view
	 *
	 * show / view details faculties
	 *
	 * @access public
	 * @return void
	 */
	public function view($faculties_id)
	{
		// get faculties data from database
		$content = $this->faculties->view($faculties_id);
		
		// bind faculties content to template
		$data['content'] = $this->view->fetch('faculties/view', $content);

		// bind content to template
		$this->view->display('example_layout', $data);				
	}

	/**
	 * update
	 *
	 * update existing faculties
	 *
	 * @access public
	 * @return void
	 */
	public function update($faculties_id)
	{
		// check access role
		if ( ! $this->acl->is_login() )
			redirect('/session/login');

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
			$this->faculties->update($input, $update);
			
			// redirect to index
			redirect('/faculties/index');
		}
		
		// get faculties data from database
		$content = $this->faculties->view($faculties_id);
		
		// bind faculties data to template
		$data['content'] = $this->view->fetch('faculties/update', $content);

		// bind content to template
		$this->view->display('example_layout', $data);		
	}

	/**
	 * delete
	 *
	 * remove or delete existing faculties
	 *
	 * @access public
	 * @return void
	 */
	public function delete($faculties_id)
	{
		// remove faculties from database
		$this->faculties->remove($faculties_id);
		redirect('/faculties/index');
	}


}

/* End of faculties.php */
/* Location: /application/controllers/faculties.php */