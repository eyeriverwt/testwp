<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class Ssh2_connect extends CI_Controller {
    //https://testwp-eyek.c9users.io/CodeIgniter-3.1.2/formTest/
	function index()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

		$select_shirt_options = array(
	        'small'         => 'Small Shirt',
	        'med'           => 'Medium Shirt',
	        'large'         => 'Large Shirt',
	        'xlarge'        => 'Extra Large Shirt',
		);
		$view_data['select_shirt_options'] = $select_shirt_options ;//viewに渡す配列：keyにして$dataに
		

		

		// ssh接続して、ファイルのパーミッションをチェックするサンプル
		
		$ok = "";
		$ng = ""; 
		
		//$connection = ssh2_connect('192.168.1.1', 22);
		//ssh2_auth_password($connection, 'user', 'pass');
		
		//$stream = ssh2_exec($connection, 'echo `ls -l /home/test/call.agi` | cut -d" " -f1');
		//$errorstream = ssh2_fetch_stream($stream, SSH2_STREAM_STDERR);
		
		//stream_set_blocking($stream, true);
		//stream_set_blocking($errorstream, true);
		
		//$ok =  stream_get_contents($stream);
		//$ng =  stream_get_contents($errorstream); //エラーがあれば表示
		
		//if($ok == "-rwxrwxrwxn" && !$ng) {
		//    echo "OK";
		//    exit();
		//}
		//echo "NG";













		
		$this->load->view('ssh2_index', $view_data);
	}
	//ユーザー定義
	// ssh接続
	public function conn_ssh($str)
	{
		if ($str == 'test')
		{
			//$this->form_validation->set_message('username_check', '{field} 欄に、"test"は使えません');
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}

}