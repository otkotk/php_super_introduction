<nav>
    <ul class="clearfix">
    <?php
    for($i=1; $i<12; $i++){
        if($i >= 10){
            echo '<li><a href="kadai_', $i, '.php">課題', $i, '</a></li>';
        }else{
            echo '<li><a href="kadai_0', $i, '.php">課題', $i, '</a></li>';
        }
    }
    ?>
        <!-- <li><a href="kadai_01.php">課題1</a></li>
        <li><a href="kadai_02.php">課題2</a></li>
        <li><a href="kadai_03.php">課題3</a></li>
        <li><a href="kadai_04.php">課題4</a></li>
        <li><a href="kadai_05.php">課題5</a></li>
        <li><a href="kadai_06.php">課題6</a></li>
        <li><a href="kadai_07.php">課題7</a></li>
        <li><a href="kadai_08.php">課題8</a></li> -->
    </ul>
</nav>

<div>
    <a href="#" class="btn-real-dent">
        <i class="fa fa-home">⇧</i>
    </a>
</div>