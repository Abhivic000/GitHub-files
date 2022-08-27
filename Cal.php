<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My PHP Calculator</title>
    <style>
        .container{
            background: rgb(50, 49, 48);
             border: 3px dotted  rgb(90, 161, 148);
             padding: 49px;
             margin: 20px;
             font-style: italic;
            border-top-left-radius: 14px;
            border-top-right-radius: 24px;
            border-bottom-left-radius: 24px;
            border-bottom-right-radius: 14px;
         }
       .box{
        background-color: rgb(192, 176, 176);
        border: 2px dotted  rgb(90, 161, 148);
        border-top-left-radius: 14px;
        border-top-right-radius: 14px;
        border-bottom-left-radius: 14px;
        border-bottom-right-radius: 14px;
        padding: 3px;
        margin: 2px;
        font-style: italic;
       }
       body{
            background-color: rgb(123, 136, 136) ;
       }
    </style>

</head>
<body>
    <h2>Calculator to help</h2>
    <form class="container">
        <input type="text" name="num1" placeholder="Number 1">
        <input type="text" name="num2" placeholder="Number 2">
        <select name="operator">
            <option>ADDITION</option>
            <option>SUBTRACT</option>
            <option>MULTIPLY</option>
            <option>DIVIDE</option>
        </select>
        <br><br>
        <button type="submit" name="submit" value="submit">Calculate</button>
    </form>
    <span class="box">The value is:    </span>
        <?php
          if(isset($_GET['submit'])){
                 $answer1= $_GET['num1'];
                 $answer2= $_GET['num2'];
                 $operator= $_GET['operator'];

                 switch($operator){
                    case "ADDITION":
                        echo $answer1 + $answer2;
                        break;
                    case "SUBTRACT":
                        echo $answer1 - $answer2;
                        break;  
                     case "MULTIPLY":
                        echo $answer1 * $answer2;
                        break;  
                     case "DIVIDE":
                         echo $answer1 / $answer2;
                        break;        
                 }
          }
        ?>
</body>
</html>