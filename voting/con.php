<?php
   $con=mysqli_connnect("localhost","root","","mytest");

   if(isset($_POST['first'])){
       $vote_first="update votes set first=first+1";
       $run_first=mysqli_query($con,$vote_first);
     if($run_first){
         echo "casted vote";
     }
   
    }

 ?>