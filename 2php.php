<form action="#" method="POST">
    <label>Number1</label>
    <input tyle="text" pattern="[0-9]+" name="num1" required placeholder="Enter.."><br><br>
    <label>Number2</label>
    <input tyle="text" pattern="[0-9]+" name="num2" required placeholder="Enter.."><br><br>

    <input type="submit" value="Answer"><br><br>
</form>





   <?php
   if($_POST){
         $num1=$_POST["num1"];
         $num2=$_POST["num2"];
        
         if($num1>$num2 ){
           echo $num1;
         }
         else{
             echo $num2;
           }
        
         
     }
   ?>