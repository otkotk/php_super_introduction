<style>
        .phpPixelPanelBackground{
            border:1px solid white;
            text-align:center;
            padding:5px;
            background-color:#ff0000;
            color:white;
        }
        .td_P{
            background-color:#eeff00;
        }
        .td_H{
            background-color:#cc00ff;
        }
        .floatLeft{
            float: left;
        }
        </style>
<?php
function PixelText($text){
    $pixel_P = [
        "P",
        [0,0,0,0,0,0,0],
        [0,1,1,1,1,0,0],
        [0,1,1,0,1,1,0],
        [0,1,1,0,1,1,0],
        [0,1,1,1,1,0,0],
        [0,1,1,0,0,0,0],
        [0,0,0,0,0,0,0]
    ];
    $pixel_H = [
        "H",
        [0,0,0,0,0,0,0],
        [0,1,1,0,1,1,0],
        [0,1,1,0,1,1,0],
        [0,1,1,1,1,1,0],
        [0,1,1,0,1,1,0],
        [0,1,1,0,1,1,0],
        [0,0,0,0,0,0,0]
    ];
    switch($text){
        case "P":
            return $pixel_P;
        break;
        case "H":
            return $pixel_H;
        break;
    }
}

function DrawPixel($pixel_text){
    echo '<table class="floatLeft">';
    for($i=0; $i<7; $i++){
        echo '<tr>';
        for($j=0; $j<7; $j++){
            if($pixel_text[0][0] == "P"){
                switch($pixel_text[$i+1][$j]){
                    case 0:
                        echo '<td class="phpPixelPanelBackground"></td>';
                    break;
                    case 1:
                        echo '<td class="td_P"></td>';
                    break;
                }
            }else if($pixel_text[0][0] == "H"){
                switch($pixel_text[$i+1][$j]){
                    case 0:
                        echo '<td class="phpPixelPanelBackground"></td>';
                    break;
                    case 1:
                        echo '<td class="td_H"></td>';
                    break;
                }
            }
        }
        echo '</tr>';
    }
    echo '</table>';
}
?>