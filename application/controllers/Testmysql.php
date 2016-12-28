<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testmysql extends CI_Controller {
	public function index()
	{
        $servername = getenv('IP');
        $username = substr(getenv('C9_USER'), 0, 16);// eyek
        $password = "";
        $database = "c9";
        $dbport = 3306;
    
        // Create connection
        $db = new mysqli($servername, $username, $password, $database, $dbport);
        $db->set_charset('utf8');
    
        // Check connection
        if ($db->connect_error) {
            die("Connection failed: " . $db->connect_error);
        }
        //$data['host_info'] = $db->host_info;
        
        // 完成済みのSELECT文を実行する
        $sql = "select display_name from wp_users";
        if ($result = $db->query($sql)) {
            // 連想配列を取得
            while ($row = $result->fetch_assoc()) {
                //echo $row["display_name"] . "<br>";
                $data['display_name'][] = $row["display_name"];
            }
            $data['fetch'] = $result->fetch_assoc();
            // 結果セットを閉じる
            $result->close();
        }




		$this->load->view('test_form', $data);
	}
        

    
}