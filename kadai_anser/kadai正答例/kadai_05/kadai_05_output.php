
<?php
// // 課題５正答例： 簡単なかけ算クイズ（出力画面）  【締切日：7/8(水)】
?>


<?php require 'header.php'; ?>
<?php require 'kadai_nav.php'?>
<section id="ans">
<h2>「課題５」 簡単なかけ算クイズ（出力画面）</h2>
<?php
	// ユーザーが入力した解答のリクエストパラメータが定義されているかチェック
    if (isset($_REQUEST['userAns'])){
    // 変数に格納
	$num1 = $_REQUEST['num1']; // 1つ目の数字 5 ではなく、文字列「$num1」
	$num2 = $_REQUEST['num2']; // 2つ目の数字 2
	$userAns = $_REQUEST['userAns']; // ユーザーが入力した答え 8

	// 正答を計算する
	$correctAns = $num1*$num2;  // 5×2 = 10
	
	// 正誤判定をして表示するメッセージを用意する
	if ($userAns === $correctAns) {  // ユーザーの答え と 正答を比較して一致するならtrue、違うならfalse
	    $message = '<p class="correct">正解です！</p>';
	} else {
		$message = '<p class="wrong">間違いです！</p>';
	}
	
	// 出力画面のHTML生成
	echo '<h3>解答</h3>';
	echo $message;
	echo '<p>問題：', $num1, '×',$num2,'</p>';
	echo '<p>あなたの答え：',$userAns,'</p>';
	echo '<p>正しい答え：',$correctAns,'</p>';
    echo '<form action="kadai_05.php" method="post">';
    echo '<p><input type="submit" value="問題へ戻る"></p>';
    echo '</form>';

    } else {
    	// ユーザーが入力した解答のリクエストパラメータが未定義、つまり直接、出力画面を開いたエラー画面の処理
        echo '<p>エラーが発生しました。もう一度解いて下さい。</p>' ;
        echo '<form action="kadai_05.php" method="post">';
        echo '<p><input type="submit" value="問題へ戻る"></p>';
        echo '</form>';
    }
?>
</section>
<?php require 'footer.php'; ?>

