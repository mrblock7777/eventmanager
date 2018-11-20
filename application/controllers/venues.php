<?php
/**
 * venues.php
 *
 * venues application controller
 *
 * @package		phpHyppo
 * @author		phpHyppo Application Builder
 * @license		LGPL, see included license file
 * @link		http://www.phphyppo.org
 * @since		Version 8.02
 */
 
class Venues_Controller extends AppController
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
		// load venues model alias as venues
		$this->load->model('venues_model', 'venues');		
		$this->load->model('faculties_model','faculties');
	}
	
	/**
	 * index
	 *
	 * listing data venues
	 *
	 * @access public
	 * @return void
	 */
	public function index()
	{	
		// get data from database
		$content['venues'] = $this->venues->lists();
		
		// capture venues content to template
		$data['content'] = $this->view->fetch('venues/list', $content);

		// bind content to template
		$this->view->display('example_layout', $data);
	}

	/**
	 * create
	 *
	 * create / add new venues
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
			if ( $this->venues->create($input) )
				redirect('/venues/index');
		}
		$content['faculties'] = $this->faculties->lists();
		
		// capture form
		$data['content'] = $this->view->fetch('venues/create',$content);

		// bind content to template
		$this->view->display('example_layout', $data);		
	}

	/**
	 * view
	 *
	 * show / view details venues
	 *
	 * @access public
	 * @return void
	 */
	public function view($venues_id)
	{
		// get venues data from database
		$content = $this->venues->view($venues_id);
		
		// bind venues content to template
		$data['content'] = $this->view->fetch('venues/view', $content);

		// bind content to template
		$this->view->display('example_layout', $data);				
	}

	/**
	 * update
	 *
	 * update existing venues
	 *
	 * @access public
	 * @return void
	 */
	public function update($venues_id)
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
			$this->venues->update($input, $update);
			
			// redirect to index
			redirect('/venues/index');
		}
		
		// get venues data from database
		$content = $this->venues->view($venues_id);
		$content['faculties'] = $this->faculties->lists();
		
		// capture form
		$data['content'] = $this->view->fetch('venues/create',$content);
		
		// bind venues data to template
		$data['content'] = $this->view->fetch('venues/update', $content);

		// bind content to template
		$this->view->display('example_layout', $data);		
	}

	/**
	 * delete
	 *
	 * remove or delete existing venues
	 *
	 * @access public
	 * @return void
	 */
	public function delete($venues_id)
	{
		// remove venues from database
		$this->venues->remove($venues_id);
		redirect('/venues/index');
	}


}

/* End of venues.php */
/* Location: /application/controllers/venues.php */