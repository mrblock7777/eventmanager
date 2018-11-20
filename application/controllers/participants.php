<?php
/**
 * participants.php
 *
 * participants application controller
 *
 * @package		phpHyppo
 * @author		phpHyppo Application Builder
 * @license		LGPL, see included license file
 * @link		http://www.phphyppo.org
 * @since		Version 8.02
 */
 
class Participants_Controller extends AppController
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
		// load participants model alias as participants
		$this->load->model('participants_model', 'participants');		
	}
	
	/**
	 * index
	 *
	 * listing data participants
	 *
	 * @access public
	 * @return void
	 */
	public function index()
	{	
		// get data from database
		$content['participants'] = $this->participants->lists();
		
		// capture participants content to template
		$data['content'] = $this->view->fetch('participants/list', $content);

		// bind content to template
		$this->view->display('example_layout', $data);
	}

	/**
	 * create
	 *
	 * create / add new participants
	 *
	 * @access public
	 * @return void
	 */
	public function create($event_id)
	{	
		// load input library
		$this->load->library('input');
		
		// get input data & filter it
		$input = $this->input->post('data', true);
		
		// input data exist
		if ( $input !== false )
		{
			// insert new data to database
			try{
			if ( $this->participants->create($input) )
				redirect('/faculties');

			}catch(Exception $e){
				$this->view->assign('error','Identification number already existed');
			}
			
		}
		$content['event_id'] = $event_id;
		
		// capture form
		$data['content'] = $this->view->fetch('participants/create',$content);

		// bind content to template
		$this->view->display('example_layout', $data);		
	}

	/**
	 * view
	 *
	 * show / view details participants
	 *
	 * @access public
	 * @return void
	 */
	public function view($participants_id)
	{
		// get participants data from database
		$content = $this->participants->view($participants_id);
		
		// bind participants content to template
		$data['content'] = $this->view->fetch('participants/view', $content);

		// bind content to template
		$this->view->display('example_layout', $data);				
	}

	/**
	 * update
	 *
	 * update existing participants
	 *
	 * @access public
	 * @return void
	 */
	public function update($participants_id)
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
			$this->participants->update($input, $update);
			
			// redirect to index
			redirect('/participants/index');
		}
		
		// get participants data from database
		$content = $this->participants->view($participants_id);
		
		// bind participants data to template
		$data['content'] = $this->view->fetch('participants/update', $content);

		// bind content to template
		$this->view->display('example_layout', $data);		
	}

	/**
	 * delete
	 *
	 * remove or delete existing participants
	 *
	 * @access public
	 * @return void
	 */
	public function delete($participants_id)
	{
		// remove participants from database
		$this->participants->remove($participants_id);
		redirect('/participants/index');
	}


}

/* End of participants.php */
/* Location: /application/controllers/participants.php */