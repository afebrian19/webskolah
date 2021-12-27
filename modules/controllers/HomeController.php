<?php

/**
 * ini adalah controller Home
 */ //setting pertama library Controller.php
use \modules\controllers\Main;

class HomeController extends Main
{
	public function index()
	{
		// $this->model('artikel'); // Memanggil model artikel
		// $data = $this->artikel->get(array('limit' => '0,5')); // mendapatkan datapada model artikel

		// view home yang sudah dimasukkan kedalam template
		$this->template('home', array('artikel'));
	}
}
