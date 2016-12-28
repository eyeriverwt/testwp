<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

</head>
<body>

<div id="container">

</div>
access!!!!! : 
</body>
</html>
<?php
if(isset($host_info)){
	echo $host_info;
}


print_r("<br>");
print_r("debug ==========================================");
print_r("<br>\$_POST = <br>");
print_r($_POST);

print_r("<br><br>");


print_r($display_name);
print_r("<br>");

print_r($fetch);
print_r("<br>");

print_r("<br><br>");
print_r("debug ==========================================");
print_r("<br>");
print_r("<br><br>");
print_r(substr(getenv('C9_USER'), 0, 16));
print_r("<br><br>");
print_r(getenv('IP'));
print_r("debug ==========================================");
print_r("<br>");

?>