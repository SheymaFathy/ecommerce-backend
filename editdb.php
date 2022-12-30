<?php
       require("connect.php");
       if(isset($_GET["s"])==true){
           for($i=1;$i<250;$i++){
                 $r = $con->query("INSERT INTO my_order VALUES (null,'user".$i."','".rand(0,250)."','email".$i."@gmail.com','add".$i."','city".$i."','coun".$i."','phone".$i."','zip".$i."','".rand(200,5000)."')");
                 
                }
    echo 'done';
            }
       else{
           echo'
      <form action="editdb.php" method="get">
           <input type="submit" value="go" name="s">
           <input type="text" >
           <input type="text">
         </form>';}
    ?>