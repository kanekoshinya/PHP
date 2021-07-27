<link rel="stylesheet" href="style.css">
<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$name = $_POST['name'];
$question1 = $_POST['question1'];
$question2 = $_POST['question2'];
$question3 = $_POST['question3'];
$answer1 = $_POST['answer1'];
$answer2 = $_POST['answer2'];
$answer3 = $_POST['answer3'];
//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
function doCheck($question,$answer) {
  if($question===$answer){
    return "正解！";
  }else{
    return "残念・・・";
  }
  }

?>
<body>
  <div class="top">
    <p class="test"><?php echo $name; ?>さんの結果は・・・？</p>
    <p class="test">①の答え</p>
    <!--作成した関数を呼び出して結果を表示-->
    <?php echo doCheck($question1,$answer1); ?>
    <p class="test">②の答え</p>
    <!--作成した関数を呼び出して結果を表示-->
    <?php echo doCheck($question2,$answer2); ?>
    <p class="test">③の答え</p>
    <!--作成した関数を呼び出して結果を表示-->
    <?php echo doCheck($question3,$answer3); ?>
  </div>
</body>