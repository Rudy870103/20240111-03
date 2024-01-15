<?php include_once "db.php";
$movie=$_GET['movie'];
$date=$GET_['date'];

for($i=1;$i<=5;$i++){
echo "<option value='{$sess[$i]}'>{$sess[$i]} 剩餘座位 20</option>";
}

/* for($i=(2-$diff);$i<3;$i++){
    $date=date("Y-m-d",strtotime("+$i days",strtotime($ondate)));
    echo "<option value='$date'>$date</option>";
} */