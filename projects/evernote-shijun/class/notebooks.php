<?php

class Notebooks {
	/**
	 * request info from $_GET, $_POST
	 * @var array
	 */
	public $request = null;

	/**
	 * response object
	 * @var array
	 */
	public $response = null;

	public function __construct($request, $response) {
		$this->request = $request;
		$this->response = $response;
	}

	/**
	 * Get all notebooks
	 * @return array
	 * @todo read data from csv
	 */
	public function index() {
		$this->response['data'] = array(
			array('id' => 1, 'name' => 'PHP', 'note_count' => 1),
			array('id' => 2, 'name' => 'CSS', 'note_count' => 1),
			array('id' => 3, 'name' => 'HTML', 'note_count' => 1),
			array('id' => 4, 'name' => 'Javascript', 'note_count' => 1),
		);
	}

	/**
	 * Add new notebook
	 */
	public function add() {}

	/**
	 * Delete an existing notebook
	 * @return array
	 */
	public function delete() {}
}