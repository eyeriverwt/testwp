<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

    private $_user;
    
    public function __construct()
    {
        parent::__construct();

        // 独自処理
        //デフォルトコントローラを変更するには/config/routes.php
        //$route['default_controller'] = 'test';
        $this->_user = 'ゲストさん';
    }
    
    public function test2($surname=NULL, $firstname=NULL)
    {
        if ( is_null($surname) ) {
           echo 'Hello, ' . $this->_user . '.';
        } else {
           echo 'Hello, ' . $surname;
            if ( ! is_null($firstname) ) {
                echo ' ' . $firstname;
            }
        }
    }
	public function index()
	{
		$this->load->view('test_form');
	}
    
}