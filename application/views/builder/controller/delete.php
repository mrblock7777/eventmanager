	/**
	 * delete
	 *
	 * remove or delete existing {controller}
	 *
	 * @access public
	 * @return void
	 */
	public function delete(${tablename}_id)
	{
{acl_check}		// remove {controller} from database
		$this->{controller}->remove(${tablename}_id);
		redirect('/{controller}/index');
	}

