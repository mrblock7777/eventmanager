<?php
/**
 * events.php
 *
 * events application controller
 *
 * @package		phpHyppo
 * @author		phpHyppo Application Builder
 * @license		LGPL, see included license file
 * @link		http://www.phphyppo.org
 * @since		Version 8.02
 */
 
class Events_Controller extends AppController
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
		// load events model alias as events
		$this->load->model('events_model', 'events');	
		$this->load->model('venues_model','venues');
		$this->load->model('faculties_model','faculties');
		$this->load->model('participants_model','participants');
	}
	
	/**
	 * index
	 *
	 * listing data events
	 *
	 * @access public
	 * @return void
	 */
	public function index()
	{	
		// get data from database
		$content['events'] = $this->events->lists();
		
		// capture events content to template
		if($this->acl->is_login()){
			$data['content'] = $this->view->fetch('events/list_admin', $content);
			// bind content to template
			$this->view->display('admin_layout', $data);
		}
		else{
			$data['content'] = $this->view->fetch('events/list', $content);
			// bind content to template
			$this->view->display('public_layout', $data);
		}

		
	}
	public function list(){

		$group = $this->group;

		$content['events'] = $this->events->lists();
		$content['faculties'] = $this->faculties->lists();
	// capture events content to template
		$data['content'] = $this->view->fetch('events/list', $content);
		// bind content to template
		if($group == 2)
			$this->view->display('users_layout', $data);
		else
			$this->view->display('public_layout', $data);

	}

	/**
	 * create
	 *
	 * create / add new events
	 *
	 * @access public
	 * @return void
	 */
	public function create($faculty_id)
	{	
		// load input library
		$this->load->library('input');
		
		// get input data & filter it
		$input = $this->input->post('data', true);
		
		// input data exist
		if ( $input !== false )
		{
			// insert new data to database
			if ( $this->events->create($input) )
				redirect('/faculties/event/'.$faculty_id);
		}
		$content['faculty_id'] = $faculty_id;
		// capture form
		$content['venues'] = $this->venues->listByFaculty($faculty_id);
		$data['content'] = $this->view->fetch('events/create',$content);

		// bind content to template
		$this->view->display('example_layout', $data);		
	}
	

	/**
	 * view
	 *
	 * show / view details events
	 *
	 * @access public
	 * @return void
	 */
	public function view($events_id)
	{
		// get events data from database
		$content = $this->events->view($events_id);
		$this->view->participant = $this->participants->countParticipant($events_id);
		// bind events content to template
		$data['content'] = $this->view->fetch('events/view', $content);
		$content['participants'] = $this->participants->listByEvent($events_id);
		
		if($this->acl->is_login() && $this->group ==1){
			$data['content'] .= $this->view->fetch('participants/list_admin',$content);
		}
		else{
			$data['content'] .= $this->view->fetch('participants/list_public',$content);
		}

		// bind content to template
		$this->view->display('example_layout', $data);				
	}

	/**
	 * update
	 *
	 * update existing events
	 *
	 * @access public
	 * @return void
	 */
	public function update($events_id)
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
			$this->events->update($input, $update);
			
			// redirect to index
			redirect('/faculties/event/'.$input['faculty_id']);
		}
		
		
		// get events data from database
		$content = $this->events->view($events_id);
		
		// capture form
		$content['venues'] = $this->venues->listByFaculty($content['faculty_id']);
		
		// bind events data to template
		$data['content'] = $this->view->fetch('events/update', $content);

		// bind content to template
		$this->view->display('example_layout', $data);		
	}

	/**
	 * delete
	 *
	 * remove or delete existing events
	 *
	 * @access public
	 * @return void
	 */
	public function delete($events_id)
	{
		// remove events from database
		$this->events->remove($events_id);
		redirect('/events/index');
	}


}

/* End of events.php */
/* Location: /application/controllers/events.php */