<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {
    //https://testwp-eyek.c9users.io/CodeIgniter-3.1.2/formTest/
	function index()
	{
		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');

		$this->form_validation->set_rules('username', 'ユーザ名', 'trim|required|min_length[4]|max_length[12]',
		                                    array('min_length' => '%s は最小4文字です。',
		                                    	'max_length' => '%s は最大12文字です。',
		                                    )
		);
		$this->form_validation->set_rules('username', 'ユーザ名', 'callback_username_check');//callback_ : プリフィックスをつけて関数を呼び出す
		
		$this->form_validation->set_rules('password', 'パスワード', 'required',
		                                    array('required' => '%s は必須です。')
		);
		$this->form_validation->set_rules('passconf', 'パスワードの確認', 'required');
		$this->form_validation->set_rules('email', 'メールアドレス', 'required|valid_email');//valid_email:default
		
		$select_shirt_options = array(
	        'small'         => 'Small Shirt',
	        'med'           => 'Medium Shirt',
	        'large'         => 'Large Shirt',
	        'xlarge'        => 'Extra Large Shirt',
		);
		$data['select_shirt_options'] = $select_shirt_options ;//viewに渡す配列：変数名をkeyにして$dataに格納
		
				$data['gtenv'] = getenv('IP');
				//$data['ipp'] = IP ;
				
		//$shirts_on_sale = array('small', 'large');
		//echo form_dropdown('test_select', $options, 'large');
		//$this->form_validation->set_rules('options[]', 'Options', 'required');
		$this->form_validation->set_rules('test_select', 'select', 'required');
		$this->form_validation->set_rules('test_select', 'select', 'callback_select_check');


		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('vali_form', $data);
		}
		else
		{
			$this->load->view('vali_form_success');
		}
	}
	

	
	//ユーザー定義バリデ
	public function username_check($str)
	{
		if ($str == 'test')
		{
			$this->form_validation->set_message('username_check', '{field} 欄に、"test"は使えません');
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}
	public function select_check($str)
	{
		if ($str == '0')
		{
			$this->form_validation->set_message('select_check', '{field} 欄から選択してください。');
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}
}