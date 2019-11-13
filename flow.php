<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Control flow</title>
</head>
<body>

<?php

function getLevel($score){
//  if($score>=90){
//    return '优秀';
//  }elseif($score>=80){
//    return '良好';
//  }elseif($score>=70){
//    return '好';
//  }elseif($score>=60){
//    return '还行';
//  }else{
//    return '垃圾';
//  }
//}

    switch(intval($score/10)){
        case 10:
        case 9:
          return '优秀';
        case 8:
          return '良好;
        case 7:
          return '好';
        case 6:
          return '还行';
        default:
          return '垃圾';
    }
}

echo getLevel(55);
?>

</body>
</html>
