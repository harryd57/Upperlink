<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment</title>
</head>
<body>
    <!-- Question 1 -->
    <h2>Create a PHP script that takes user input and writes it to a text file</h2> <br>
    <?php 
        $userInput = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            if(empty($_POST["input"])){
                $userInput = "";
            } else{
                $userInput = $_POST["input"];
            }

            if ($userInput){
                $myfile = fopen("input.txt", "w") or die("Unable to open file!");
                $txt = $userInput."\n";
                fwrite($myfile, $txt);
                fclose($myfile);             
            }
        }
    ?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        Input: <input type="text" name="input">
        <input type="submit" value="Submit">
    </form>
    <br>


    <!-- Question 2 -->
    <h2>Create a PHP script that takes in user info like name and date of birth, when they submit, output the user's
        name and age based on their input.</h2> <br>


    <?php 
        $name = $date = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            if (empty($_POST["name"])){
                $name = "";
            } else {
                $name = $_POST["name"];
            }
            if (empty($_POST["date"])){
                $date = "";
            } else {
                $date = $_POST["date"];
            }
        }
    ?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        Name: <input type="text" name="name"><br>
        D.O.B: <input type="date" name="date">
        <input type="submit" value="Submit">
    </form>
    <br>
    <?php 
        if ($name && $date){
            $d = date("Y-m-d");
            $date1 = date_create($date);
            $date2 = date_create($d);
            $dateDifference = date_diff($date1, $date2)->format('%y years, %m months and %d days');

            echo("Hello $name, You are $dateDifference old.");
        }
    ?>
    
</body>
</html>