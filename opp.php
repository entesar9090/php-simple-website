
<htm1 >
<head>
    
    <title>teatphp</title>
</head>
<body>

<form method = "POST">
    <br><br><br>

<button type='submit' name ="SEND" > SEND</button>
</form>

</body>
</htm1>
<br>
<?php



class student{

public $number;
public $name;

function infop (){
 $g = $this -> number;
 $g1 = $this -> name;

 echo "<h5> $g</h5>  <h2> $g1</h2>";

}
}


if (isset ($_POST['SEND'])) {//+
    
    echo '<br>';//+
    
    $DD = new student();//+
    $DD->number = 100000;//+
    $DD->name = "khalid";//+

    $DD -> infop();

}


?>