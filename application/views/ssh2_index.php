<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>ssh2_connect</title>
	<style type="text/css">
	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }
	body {
	    font-family: "ヒラギノ角ゴ Pro W3","メイリオ","Meiryo","Hiragino Kaku Gothic Pro";
		background-color: #fff;
		margin: 40px;
		font: 13px/20px;
		color: #4F5155;
	}
	code {
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>ssh2_connext</h1>
	
	
	
<div style="width:755px; height:190px;padding: 10px; border: 1px solid #607D8B;"><!-- 動画コンテンツwrap -->
<div style="display: inline-block;  "><!-- 動画  -->
	<iframe width="350" height="190" src="https://www.youtube.com/embed/7CYMGnob3GE" frameborder="0" allowfullscreen></iframe>
</div>
<div style="display: inline-block;  width: 380px; vertical-align: top; margin-left: 15px;"><!-- 説明文 -->
	<div style=" font-size: 19px;">■「転送録」紹介動画のご案内</div>
	<div style="font-size: 14px; margin-top: 15px;">
		<p>電話転送（転送電話）切替の自動化なら<br>
	クラウド型電話転送サービス「転送録」！<br>
	「転送録」の特徴やメリット、サービス内容について、<br>
	アニメーション（約2分間）でご紹介しています。<br>
	契約をご検討中の方にも、すでにお使いの方にも、<br>
	ぜひ一度ご覧いただければ幸いです。</p></div>
</div>
</div>	
	
	
	
	
	
	
	
	
	
	
	
	
	<span style="color:red; font-size:smaller;">
		<?php echo validation_errors(); ?>
	</span>
	<?php echo form_open('form'); ?>
	
	<h5>ユーザ名</h5>
	<span style="color:red; font-size:smaller;"><?php echo form_error('username'); ?></span>
	<input type="text" name="username" value="<?php echo set_value('username'); ?>" size="20" />
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
print_r("debug ==========================================");
print_r("<br>");
?>