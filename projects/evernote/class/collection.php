<?php
abstract class collection {
	public $data_file;
	public $request;
	public $response;

	public function __construct($request, $response) {
		$this->request = $request;
		$this->response = $response;
		$this->data_file = DATA_DIR . get_class($this) . '.csv';
		var_dump($this);
		exit();
	}

	public function __destruct() {}

	public function _readAll($item) {

	}

	public function _readById($id) {

	}

	public function _add($item) {

	}

	public function _edit($item, $id) {

	}

	public function _delete($id) {

	}
}