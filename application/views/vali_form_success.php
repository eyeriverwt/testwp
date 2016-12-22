<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>vali_form_success</title>
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
	<h1>vali_form_success</h1>

	<h3>あなたのフォームは送信成功しました！</h3>
	
	<p><?php echo anchor('form', 'once more!'); ?></p>

</div>

</body>
</html>