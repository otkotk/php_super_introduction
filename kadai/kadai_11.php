<?php
// 【課題１１】
?>

<?php require "footerHeaderNav/header.php" ?>

<?php require "footerHeaderNav/kadai_nav.php" ?>

<section id="mezamashiDisplay">
    <section>
        <h2>ドット絵</h2>
        <p>２次元配列と表を使ってドット絵でイニシャルを描く</p>
        <h3>２次元配列の出力の練習</h3>
        <div>
        <?php
            // ２次元配列の定義
            $pixel = [
                [0,0,0,0,0,0,0],
                [0,1,1,1,1,1,0],
                [0,0,0,0,1,1,0],
                [0,0,1,1,1,0,0],
                [0,1,1,0,0,0,0],
                [0,1,1,1,1,1,0],
                [0,0,0,0,0,0,0]
            ];
            
            
            // ２次元配列の出力
            echo $pixel[0][0], '<br>';
            echo $pixel[1][1], '<br>';
            echo $pixel[2][2], '<br>';
            echo $pixel[3][3], '<br>';
            ?>
        </div>
    </section>

    <section>
        <h3>２次元配列をfor文で出力</h3>
        <?php
        echo '<div>';
        for($i=0; $i<count($pixel); $i++){
            for($j=0; $j<count($pixel[$i]); $j++){
                switch($pixel[$i][$j]){
                    case 0:
                        echo '0';
                    break;
                    case 1:
                        echo '1';
                    break;
                    // case 0:
                    //     echo '<p style="position:relative;background-color:#404040;border:1px solid black;width:10px;height:10px;float:left;margin:0;"></p>';
                    // break;
                    // case 1:
                    //     echo '<p style="position:relative;background-color:#0EE652;border:1px solid black;width:10px;height:10px;float:left;margin:0;"></p>';
                    // break;
                }
            }
            echo '<br>';
        }
        echo '</div>';
        ?>
    </section>

    <section>
        <h3>HTMLで下絵を作成</h3>
        <style>
        /* テーブルのtd要素につけるCSSを下記に記述 */
        /* 例
        .b { background-color: #ccc; }
        */
        table tr td{
            border:1px solid black;
            text-align:center;
            padding:5px;
            background-color:#404040;
            color:white;
        }
        .td1{
            background-color:#0EE652;
        }


        </style>
        <div>
            <!--下記にテーブルを記述-->
            <table>
                <tr>
                    <td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
                </tr>
                <tr>
                    <td>0</td><td>1</td><td>1</td><td>1</td><td>1</td><td>1</td><td>0</td>
                </tr>
                <tr>
                    <td>0</td><td>0</td><td>0</td><td>0</td><td>1</td><td>1</td><td>0</td>
                </tr>
                <tr>
                    <td>0</td><td>0</td><td>1</td><td>1</td><td>1</td><td>0</td><td>0</td>
                </tr>
                <tr>
                    <td>0</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td>
                </tr>
                <tr>
                    <td>0</td><td>1</td><td>1</td><td>1</td><td>1</td><td>1</td><td>0</td>
                </tr>
                <tr>
                    <td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
                </tr>
            </table>
        </div>
    </section>

    <section>
        <h3>CSSで色見本を作成</h3>
        <!--下記にテーブルを記述し、td要素に用意したclass属性を追加する。-->
        <!--例
        <td class="b">0</td>  数値が0なら#cccの背景色
        -->
        <div>
            <table>
                <tr>
                    <td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
                </tr>
                <tr>
                    <td>0</td><td class="td1">1</td><td class="td1">1</td><td class="td1">1</td><td class="td1">1</td><td class="td1">1</td><td>0</td>
                </tr>
                <tr>
                    <td>0</td><td>0</td><td>0</td><td>0</td><td class="td1">1</td><td class="td1">1</td><td>0</td>
                </tr>
                <tr>
                    <td>0</td><td>0</td><td class="td1">1</td><td class="td1">1</td><td class="td1">1</td><td>0</td><td>0</td>
                </tr>
                <tr>
                    <td>0</td><td class="td1">1</td><td class="td1">1</td><td>0</td><td>0</td><td>0</td><td>0</td>
                </tr>
                <tr>
                    <td>0</td><td class="td1">1</td><td class="td1">1</td><td class="td1">1</td><td class="td1">1</td><td class="td1">1</td><td>0</td>
                </tr>
                <tr>
                    <td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
                </tr>
            </table>
        </div>
    </section>

    <section>
        <h3>色見本を完成</h3>
        <div>
            <!--下記にテーブルを記述-->
            <table>
                <tr>
                    <td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td></td><td class="td1"></td><td class="td1"></td><td class="td1"></td><td class="td1"></td><td class="td1"></td><td></td>
                </tr>
                <tr>
                    <td></td><td></td><td></td><td></td><td class="td1"></td><td class="td1"></td><td></td>
                </tr>
                <tr>
                    <td></td><td></td><td class="td1"></td><td class="td1"></td><td class="td1"></td><td></td><td></td>
                </tr>
                <tr>
                    <td></td><td class="td1"></td><td class="td1"></td><td></td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td></td><td class="td1"></td><td class="td1"></td><td class="td1"></td><td class="td1"></td><td class="td1"></td><td></td>
                </tr>
                <tr>
                    <td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                </tr>
            </table>
        </div>
    </section>

    <section>
        <h3>for文で作成</h3>
        <?php
        // echo '<div style="position:relative;display:flex;height:80px">';
        // for($i=0; $i<count($pixel); $i++){
        //     for($j=0; $j<count($pixel[$i]); $j++){
        //         switch($pixel[$i][$j]){
        //             case 0:
        //                 echo '<div style="border-radius:none;background:#404040;position:absolute;top:', $i*10, 'px;left:', $j*10, 'px;background-color:#404040;border:1px solid black;width:10px;height:10px;margin:0;padding:0;float:left;box-shadow:none;border-radius:0;"></div>';
        //             break;
        //             case 1:
        //                 echo '<div style="border-radius:none;background:#0EE652;position:absolute;top:', $i*10, 'px;left:', $j*10, 'px;background-color:#0EE652;border:1px solid black;width:10px;height:10px;margin:0;padding:0;float:left;box-shadow:none;border-radius:0;"></div>';
        //             break;
        //         }
        //     }
        // }
        // echo '</div>';
        echo '<div>';
        echo '<table>';
        for($i=0; $i<count($pixel); $i++){
            echo '<tr>';
            for($j=0; $j<count($pixel[$i]); $j++){
                switch($pixel[$i][$j]){
                    case 0:
                        echo '<td></td>';
                    break;
                    case 1:
                        echo '<td class="td1"></td>';
                    break;
                }
            }
            echo '</tr>';
        }
        echo '</table>';
        echo '</div>';
        ?>
    <!--テーブルを作成-->
    </section>

    <section>
        <h3>foreach文で作成</h3>
        <!--テーブルを作成-->
        <?php
        echo '<div>';
        echo '<table>';
        foreach($pixel as $p1){
            echo '<tr>';
            foreach($p1 as $p2){
                switch($p2){
                    case 0:
                        echo '<td></td>';
                    break;
                    case 1:
                        echo '<td class="td1"></td>';
                    break;
                }
            }
            echo '</tr>';
        }
        echo '</table>';
        echo '</div>';
        ?>
    </section>

    <section>
        <h3>phpスクリプトでドット絵文字「php」を作成</h3>

        
        <?php
        // 外部ファイルから関数を呼び込む
        require "DrawPixel.php"; 

        // 親タグにはclearfixする
        echo '<div class="clearfix">';

        // DrawPixel : ドット絵を描画する関数
        // PixelText : ドット絵の配列をreturnする関数
        DrawPixel(PixelText("P"));
        DrawPixel(PixelText("H"));
        DrawPixel(PixelText("P"));
        echo '</div>';
        ?>
    </section>
</section>
<?php require "footerHeaderNav/footer.php" ?>