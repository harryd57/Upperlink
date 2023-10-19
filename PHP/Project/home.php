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
        header("location: success.php?name=$name");
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Homepage</title>
</head>
<body class="text-white">
    <?php include "header.html" ?>
    <?php include "body.html" ?>
    <section class="flex justify-between w-[900px] mx-auto">
        <div id="contact" class="border border-gray-400 rounded-md p-4">
            <div>
                <h2 class="font-semibold mb-2 text-xl">Contact Me</h2>
                <p class="mb-2"><span class="text-red-600 text-xs">* Required field</span></p>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <div class="mb-2 flex flex-col">
                    <span class="mb-2"><label class="text-sm" for="name">Name</label> <span class="text-red-600 text-xs ml-6">* <?php echo $nameErr;?></span></span>
                    <input class="w-3/4 bg-black border border-white p-1 text-white rounded-md text-sm" type="text" name="name" value="<?= $name ?>">
                </div>
                <div class="mb-2 flex flex-col">
                    <span class="mb-2"><label class="text-sm" for="email">Email</label> <span class="text-red-600 text-xs ml-6">* <?php echo $emailErr;?></span></span>
                    <input class="w-3/4 bg-black border border-white p-1 text-white rounded-md text-sm" type="email" name="email" value="<?= $email ?>">
                </div>
                <div class="mb-2 flex flex-col">
                    <span class="mb-2"><label class="text-sm" for="occupation">Occupation</label></span>
                    <input class="w-3/4 bg-black border border-white p-1 text-white rounded-md text-sm" type="text" name="occupation" value="<?= $occupation ?>">
                </div>
                <div class="mb-2 flex flex-col">
                    <label class="mb-2 text-sm" for="comment">Comment</label>
                    <textarea class="bg-black border border-white p-1 text-white rounded-md text-sm" name="comment" rows="5" cols="40" value="<?= $comment ?>"></textarea>
                </div>
                <div class="mb-4 flex flex-col">
                    <span class="mb-2 flex flex-row"><h3 class="text-sm">Gender</h3><span class="text-red-600 text-xs ml-6">* <?php echo $genderErr;?></span></span>
                    <div class="flex justify-between border border-white">
                        <span class="border-r p-2">
                        <input class="w-4 h-4 text-blue-600 bg-black border-gray-400 px-2" type="radio" name="gender" value="female">
                        <label class="w-full ml-2 text-sm font-medium" for="female">Female</label>
                        </span>
                        <span class="border-r p-2">
                        <input class="w-4 h-4 text-blue-600 bg-black border-gray-400 px-2" type="radio" name="gender" value="male">
                        <label class="w-full ml-2 text-sm font-medium" for="male">Male</label>
                        </span>
                        <span class="border-r p-2">
                        <input class="w-4 h-4 text-blue-600 bg-black border-gray-400 px-2" type="radio" name="gender" value="other">
                        <label class="w-full ml-2 text-sm font-medium" for="other">Other</label>
                        </span>
                    </div>
                </div>
                <input class="bg-[#00df9a] w-full text-black p-2 rounded-md text-sm" type="submit" name="submit" value="Submit">
                </form>
            </div>
        </div>
        <div>
        <?php 
            include "calculator.php";
        ?>
        </div>
    </section>
    <?php include "footer.html" ?>
</body>
</html>