<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Success Page</title>
</head>
<body>
    <?php
        $name = "Anon User";

        if(!empty($_GET["name"])){
            $name = $_GET["name"];
        }
    ?>
    <?php include "header.html" ?>

    <div class="h-[350px] flex items-center justify-center">
    <h1 class="font-bold text-3xl text-[#00df9a]">Thank you <? echo $name ?> for submitting the form.</h1>
    </div>

    <?php include "footer.html" ?>
</body>
</html>