<?php
/**
 * applications.php
 *
 * applications application controller
 *
 * @package		phpHyppo
 * @author		phpHyppo Application Builder
 * @license		LGPL, see included license file
 * @link		http://www.phphyppo.org
 * @since		Version 8.02
 */
 
class Applications_Controller extends AppController
{
	/**
	 * beforeFilter
	 *
	 * load library and database before event execution
	 *
	 * @access	public
	 */
	 private $group;
	public function beforeFilter()
	{
		$this->load->library('acl');
		$this->view->session = $this->session->all_userdata();
		$this->group = $this->view->session['group_id'];
		// load applications model alias as applications
		$this->load->model('applications_model', 'applications');	
		$this->load->model('venues_model','venues');
	}
	
	/**
	 * index
	 *
	 * listing data applications
	 *
	 * @access public
	 * @return void
	 */
	public function index()
	{	
		// get data from database
		$content['applications'] = $this->applications->lists();
		$group = $this->group;
		if(!$this->acl->is_login())
		// capture applications content to template
			redirect('/session/login');
		else{
			if($group == 2){
				$data['content'] = $this->view->fetch('applications/list_public', $content);
			}
			else if($group == 1){
				$data['content'] = $this->view->fetch('applications/list_admin',$content);
			}
		}

		// bind content to template
		$this->view->display('example_layout', $data);
	}

	public function list($user_id){

		$content['applications'] = $this->applications->listByUser($user_id);
		$group = $this->group;
		if(!$this->acl->is_login())
		// capture applications content to template
			redirect('/session/login');
		else{
			if($group == 2){
				$data['content'] = $this->view->fetch('applications/list_public', $content);
			}
			else if($group == 1){
				$data['content'] = $this->view->fetch('applications/list_admin',$content);
			}
		}

		// bind content to template
		$this->view->display('example_layout', $data);
	}

	/**
	 * create
	 *
	 * create / add new applications
	 *
	 * @access public
	 * @return void
	 */
	public function create($user_id,$faculty_id)
	{	
		// load input library
		$this->load->library('input');
		$content['venues'] = $this->venues->listByFaculty($faculty_id);
		// get input data & filter it
		$input = $this->input->post('data', true);
		
		// input data exist
		if ( $input !== false )
		{
			// insert new data to database
			if ( $this->applications->create($input) )
				redirect('/faculties/event/'.$faculty_id);
		}
		
		$content['faculty_id'] = $faculty_id;
		$content['user_id'] = $user_id;
		// capture form
		$data['content'] = $this->view->fetch('applications/create',$content);

		// bind content to template
		$this->view->display('example_layout', $data);		
	}

	/**
	 * view
	 *
	 * show / view details applications
	 *
	 * @access public
	 * @return void
	 */
	public function view($applications_id)
	{
		// get applications data from database
		$content = $this->applications->view($applications_id);
		
		// bind applications content to template
		$data['content'] = $this->view->fetch('applications/view', $content);

		// bind content to template
		$this->view->display('example_layout', $data);				
	}

	/**
	 * update
	 *
	 * update existing applications
	 *
	 * @access public
	 * @return void
	 */
	public function update($applications_id)
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
			$this->applications->update($input, $update);
			
			// redirect to index
			redirect('/applications/index');
		}
		
		// get applications data from database
		$content = $this->applications->view($applications_id);
		
		// bind applications data to template
		if($this->group == 1)
			$data['content'] = $this->view->fetch('applications/update', $content);
		else
			$data['content'] = $this->view->fetch('applications/update', $content);

		// bind content to template
		$this->view->display('example_layout', $data);		
	}

	/**
	 * delete
	 *
	 * remove or delete existing applications
	 *
	 * @access public
	 * @return void
	 */
	public function delete($applications_id)
	{
		// remove applications from database
		$this->applications->remove($applications_id);
		redirect('/applications/index');
	}


}

/* End of applications.php */
/* Location: /application/controllers/applications.php */