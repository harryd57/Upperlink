<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $occupationErr = "";
$name = $email = $gender = $comment = $occupation = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
    }

    if (empty($_POST["occupation"])) {
        $occupation = "";
    } else {
        $occupation = test_input($_POST["occupation"]);
    }

    if (empty($_POST["comment"])) {
        $comment = "";
    } else {
        $comment = test_input($_POST["comment"]);
    }

    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = test_input($_POST["gender"]);
    }
    if ($name && $email && $gender){
        header("location: success.php");
        $name = $email = $gender = "";
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>


    <p><span class="error">* required field</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

    Name: <input type="text" name="name" value="<?= $name ?>">
    <span class="error">* <?php echo $nameErr;?></span>
    <br><br>
    Email:
    <input type="text" name="email" value="<?= $email ?>">
    <span class="error">* <?php echo $emailErr;?></span>
    <br><br>
    Occupation:
    <input type="text" name="occupation" value="<?= $occupation ?>">
    <span class="error"><?php echo $occupationErr;?></span>
    <br><br>
    Comment: <textarea name="comment" rows="5" cols="40" value="<?= $comment ?>"></textarea>
    <br><br>
    Gender:
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="other">Other
    <span class="error">* <?php echo $genderErr;?></span>
    <br><br>
    <input type="submit" name="submit" value="Submit">

    </form>