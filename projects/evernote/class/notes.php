<?php
class notes extends collection {
	public $request;
	public $response;
	public $id;

	public function add() {
		$this->response['code'] = 'Notebook is added';
		$this->response['data'] = $this->request;
	}

	public function index() {
		$this->response['data'] = array(
			array('id' => 1, 'name' => 'PHP', 'note_count' => 1),
			array('id' => 2, 'name' => 'CSS', 'note_count' => 1),
			array('id' => 3, 'name' => 'HTML', 'note_count' => 1),
			array('id' => 4, 'name' => 'Javascript', 'note_count' => 1),
		);
	}

	public function delete($id) {

	}

}