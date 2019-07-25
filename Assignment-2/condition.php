<?php 
if(isset($_POST['login'])){ 
    $val=$_POST['inputname'];
if ($val>=80 && $val <=100) {
    echo "You got A+";
} else if($val>=70 && $val <= 79){
    echo "You got A";
}else if($val>=60 && $val <=69){
    echo "You got A-";
}else if($val>=50 && $val <=59){
    echo "You got B";
}else if($val>=40 && $val <=49){
    echo "You got C";
}else if($val>=30 && $val <=39){
    echo "You got D";
}else if($val>=0 && $val <=39){
    echo "You got D";
}else{
    echo "Your result is invalid";
}

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action=""method="POST">
    <input type="number"name="inputname">
    <input type="submit"value="submit"name="login">
    </form>
</body>
</html>