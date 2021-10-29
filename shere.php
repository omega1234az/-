<?php
    $shareSql="select * from share_td where memID=$result[memID]";
    $shareQr=mysqli_query($conn,$shareSql);
    while($shareResult=mysqli_fetch_array($shareQr)){
        echo $shareResult["shDate"]."  ".$shareResult['shAmount']

    }
?>
    <div class="row">
    <div ></div>
    <div>
    <table>

    </table>
    </div>
    </div>