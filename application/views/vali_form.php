<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>vali_form</title>
	<link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet" type="text/css">
	
	<style type="text/css">

	</style>
</head>
<body>

<div id="container">
	<h1>vali_form</h1>
	<span style="color:red; font-size:smaller;">
	<?php echo validation_errors(); ?>
	</span>
	<?php echo form_open('form/'); ?>
	
	<h5>ユーザ名</h5>
	<span style="color:red; font-size:smaller;"><?php echo form_error('username'); ?></span>
	<input type="text" name="username" value="<?php echo set_value('username'); ?>" size="20" />
	
	<h5>パスワード</h5>
	<input type="text" name="password" value="<?php echo set_value('password'); ?>" size="20" />
	
	<h5>パスワード確認</h5>
	<input type="text" name="passconf" value="<?php echo set_value('passconf'); ?>" size="20" />
	
	<h5>メールアドレス</h5>
	<input type="text" name="email" value="<?php echo set_value('email'); ?>" size="30" />
	<br>
	
	<?php echo form_error('test_select'); ?>
	<!--  <?php echo set_value('options[]'); ?>  -->
	<select name="test_select">
	<option value="0" name="options[]" <?php echo  set_select('test_select', '0', TRUE); ?> >選択してください</option>
	<option value="1" name="options[]" <?php echo  set_select('test_select', '1'); ?> >test_select1</option>
	<option value="2" name="options[]" <?php echo  set_select('test_select', '2'); ?> >test_select2</option>
	</select>
	<br>
	
	<?php
		//controllersから$data[select_shirt_options]のkey名を変数名として使用できる = $select_shirt_options
		echo form_dropdown('select_shirt', $select_shirt_options, 'large');
	?>
	<br>
	
	<div><input type="submit" value="Submit" /></div>
	
	</form>

</div>

</body>
</html>
<?php
print_r("<br>");
print_r("debug ==========================================");
print_r("<br><br>");

print_r($_POST);

print_r("<br><br>");
print_r(substr(getenv('C9_USER'), 0, 16));
print_r("<br><br>");
print_r(getenv('IP'));
print_r("debug ==========================================");
print_r("<br>");

print_r($gtenv);

?>