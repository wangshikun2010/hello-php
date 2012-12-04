<?php

class Notes {
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
	 * Load note snippets from a notebook
	 * @return array
	 * @todo read data from csv
	 */
	public function snippets() {
		$snippets = array(
			array('id' => 1, 'title' => 'Note 1 From NoteBook 1', 'pubdate' => date('Y-m-d'), 'abstract' => 'Note 1 From NoteBook 1'),
			array('id' => 2, 'title' => 'Note 2 From NoteBook 1', 'pubdate' => date('Y-m-d'), 'abstract' => 'Note 2 From NoteBook 1'),
			array('id' => 3, 'title' => 'Note 3 From NoteBook 1', 'pubdate' => date('Y-m-d'), 'abstract' => 'Note 3 From NoteBook 1'),
			array('id' => 4, 'title' => 'Note 4 From NoteBook 1', 'pubdate' => date('Y-m-d'), 'abstract' => 'Note 4 From NoteBook 1'),
		);

		if (isset($this->request['notebook'])) {
			$notebook = $this->request['notebook'];
			foreach ($snippets as &$snippet) {
				$snippet['title'] = str_replace('NoteBook 1', 'NoteBook ' . $notebook, $snippet['title']);
				$snippet['abstract'] = str_replace('NoteBook 1', 'NoteBook ' . $notebook, $snippet['abstract']);
			}
		}

		$this->response['data'] = $snippets;
	}

	/**
	 * Load note detail
	 * @return array
	 */
	public function detail() {
		$notes = array(
			1 => array('id' => 1, 'title' => 'Note 1 From NoteBook 1', 'pubdate' => date('Y-m-d'), 'content' => 'Note 1 From NoteBook 1'),
			2 => array('id' => 2, 'title' => 'Note 2 From NoteBook 1', 'pubdate' => date('Y-m-d'), 'content' => 'Note 2 From NoteBook 1'),
			3 => array('id' => 3, 'title' => 'Note 3 From NoteBook 1', 'pubdate' => date('Y-m-d'), 'content' => 'Note 3 From NoteBook 1'),
			4 => array('id' => 4, 'title' => 'Note 4 From NoteBook 1', 'pubdate' => date('Y-m-d'), 'content' => 'Note 4 From NoteBook 1'),
		);

		if (isset($this->request['notebook'])) {
			$notebook = $this->request['notebook'];
			foreach ($notes as &$note) {
				$note['title'] = str_replace('NoteBook 1', 'NoteBook ' . $notebook, $note['title']);
				$note['content'] = str_replace('NoteBook 1', 'NoteBook NoteBook NoteBook NoteBook NoteBook NoteBook NoteBook NoteBook NoteBook NoteBook NoteBook NoteBook NoteBook NoteBook NoteBook NoteBook NoteBook NoteBook NoteBook NoteBook NoteBook NoteBook NoteBook NoteBook NoteBook NoteBook NoteBook NoteBook NoteBook NoteBook NoteBook NoteBook NoteBook NoteBook NoteBook NoteBook NoteBook NoteBook ' . $notebook, $note['content']);
			}
		}

		if (isset($this->request['note']) && isset($notes[$this->request['note']])) {
			$this->response['data'] = $notes[$this->request['note']];
		} else {
			$this->response['data'] = $this->request;
			$this->response['status'] = false;
			$this->response['code'] = 'Note not found';
		}

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