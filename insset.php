
<html>
<head>

    <title>testphp</title>
</head>

<body>
       <div style="color:darkmagenta; font-size: xx-large; height: 100px; background-color: antiquewhite; "> page one </div>
       <img src="OIP.jpg" alt="" >
       <br>


       <form method="post">
              <br><br>
        <input type=" text" name ='fname' placeholder="first name"><br><br>

        <input type="text" name='lname' placeholder="last name">
        
        <input type="submit" name ='submit' value ='submit'>
        <br><br>
        <button type ='submit' name="add" >add</button>
</form>

</body>

       <br><br><br>


       <?php
       if ( isset ($_POST['submit'])){

        echo 'first name'.'<br>';
        echo
        strip_tags($_POST['fname']).'<br>'.md5 ($_POST['lname']);//wrong in spelling word
        
        




       } if (isset($_POST['add'])){
        header('location: https://www.google.com');
       }


       function  add(){         
echo 1+1;

       }
       add();

       class father {
              function f_mony(){

              echo '1 million';

              }

       }
       
       class son extends father  {
              function s_mony(){

              echo '200 dollor';
              }
       }
 $finfo = new father();
 

 echo '<br>mony of father:<br>';
 $finfo -> f_mony();
 
$sinfo = new son();
 echo '<br> mony of son:<br>';

$sinfo ->  s_mony() ;
$sinfo-> f_mony();
 

 

 
/*
  $n5 = array ('name'=>'ahmad', 'age'=>25);

  echo '<br>';
  echo ($n5['age']);
  echo '<br>';

  $in1 = 'can you learn more 23:';

  $f = explode(' ',$in1);
  echo '<pre>';


  print_r($f);

  echo '</pre>';

*/
  
class Student {//+
    function __construct($h, $age1) {//+
        echo '<br>';//+
        echo $h . "<br>" . $age1;
        echo'<br>';
    }//+
}//
       
             
 $ttt = new student('ahama',10);

 class st{
       function int1($na,$d8){

              echo $na.'<br>'.$d8;//<br> :<
       
       }
 }
$q1 = new st();
$q1 -> int1 ('ali',5);

class ere{

       const nw='hello';
       public $name33 = 'GOOOOO';
       public static $rty ='gygygygygy';
       

}

$hhh = new ere();
echo $hhh -> name33;
echo '<br>';
echo  ere :: nw;
echo '<br>';
echo ere::$rty;
       ?>

       </html>
