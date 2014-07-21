<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller{
	/**
	 * login controller for the system login part
	 */
	public function index()
	{
		$this->load->view('admin/index.html');
	}
}