<link rel="stylesheet" href="style.css">
<?php
//POST送信で送られてきた名前を受け取って変数を作成
$name = $_POST['name'];
//①画像を参考に問題文の選択肢の配列を作成してください。
$question1 = [80,22,20,21];
$question2 = ["PHP","Python","JAVA","HTML"];
$question3 = ["join","select","insert","update"];
//② ①で作成した、配列から正解の選択肢の変数を作成してください
$answer1 = 80;
$answer2 = "PHP";
$answer3 = "select";
?>
<body>
<div>
<p>お疲れ様です<?php echo $name; ?>さん</p>
<form action="answer.php" method="post">
<!--フォームの作成 通信はPOST通信で-->
<h2>①ネットワークのポート番号は何番？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
  <?php
	foreach( $question1 as $id => $value ){
		echo "<input type=\"radio\" name=\"question1\" value=\"{$value}\"";
	
		echo ">";
		echo $value;
	}
	?>

<h2>②Webページを作成するための言語は？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php
	foreach( $question2 as $id => $value ){
		echo "<input type=\"radio\" name=\"question2\" value=\"{$value}\"";
	
		echo ">";
		echo $value;
	}
	?>
<h2>③MySQLで情報を取得するためのコマンドは？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php
	foreach( $question3 as $id => $value ){
		echo "<input type=\"radio\" name=\"question3\" value=\"{$value}\"";
		
		echo ">";
		echo $value;
	}
	?>
  <br>
<!--問題の正解の変数と名前の変数を[answer.php]に送る-->
<input type="hidden" name="name" value= <?php echo $name; ?>>
<input type="hidden" name="answer1" value= <?php echo $answer1; ?>>
<input type="hidden" name="answer2" value= "<?php echo $answer2; ?>">
<input type="hidden" name="answer3" value= "<?php echo $answer3; ?>">
<input type="submit" value="回答する" />
</form>
</div>
</body>