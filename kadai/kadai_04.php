<?php require "footerHeaderNav/header.php" ?>

<?php require "footerHeaderNav/kadai_nav.php" ?>
<section id="tasizanDisplay">
    <h2>「課題４」 簡単な足し算クイズ（入力画面）</h2>
    <div>
        <h3>問題 : 足し算^^</h3>
        <form action="kadai_04_output.php" method="post">
            <input type="text" name="tasizan00" id="" value="110110" required>
            ＋<input type="text" name="tasizan01" id="" value="4404" required>
            ＝<input type="text" name="tasizanAns" id="" required>
            <br><input type="submit" value="解答する">
        </form>
    </div>
</section>

<script>
let t0 = document.getElementsByName("tasizan00")[0].value;
let t1 = document.getElementsByName("tasizan01")[0].value;
let answer = t0 + t1;

console.log(answer);
</script>

<?php require "footerHeaderNav/footer.php" ?>