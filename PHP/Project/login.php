<?php
    $username = $password = "";
    $invalidErr = $requiredErr = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = test_input($_POST["username"]);
        $password = test_input($_POST["password"]);
        if ($username && $password){
            if ($username == "admin" && $password == "password1234"){
                header("location: home.php");
            } else {
                $invalidErr = "* Invalid Credentials";
            }
        } else {
            $requiredErr = "* Username and Password fields are required";
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
    <title>Login Page</title>
</head>
<body class="text-gray-100">
    <section class="h-screen flex justify-center items-center flex-col">
    <span class="text-red-600 mb-2 text-xs"> <?php echo $invalidErr;?></span>
    <span class="text-red-600 mb-2 text-xs"> <?php echo $requiredErr;?></span>
    <div class="bg-gray-800 h-1/3 w-1/5 p-4 rounded-lg">
        <div class="text-2xl font-semibold border-b-2 pb-2">Login</div>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="mt-2">
            <input class="mb-2 w-full bg-gray-800 border border-gray-100 p-2 text-sm text-white rounded-md focus:outline-[#00df9a]" type="text" name="username" placeholder="Enter Username">
            <input class="mb-2 w-full bg-gray-800 border border-gray-100 p-2 text-sm text-white rounded-md focus:outline-[#00df9a]" type="password" name="password" placeholder="Enter Password">
            <input class="bg-[#00df9a] w-full text-black p-2 rounded-md text-sm" type="submit" value="Login">
        </form>
    </div>
    </section>
</body>
</html>