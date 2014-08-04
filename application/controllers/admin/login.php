<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 添加调试工具Kint这个工具放在第三方工具包里
 */
require APPPATH.'/third_party/kint-0.9/Kint.class.php';
/**
 * 登录控制器
 */
class Login extends CI_Controller{
	/**
	 * login controller for the system login part
	 */
	public function index()
	{
		/**
		 * 加载视图之前都需要对视图对存在性进行测试，可以写一个全局函数放在core/common.php中了
		 */
		test_view_exist('admin/fuchao.html');
		$this->load->view('admin/fuchao.html');
	}
	public function test()
	{
		// $this->load->model('login_model', 'login');
		// $this->login->add();
		// echo  "This is test";
		
	}
}