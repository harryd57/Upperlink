<?php
    $num1 = $num2 = $op = $result = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if (empty($_POST["num1"])){
            $num1 = "";
        } else {
            $num1 = $_POST["num1"];
        }

        if (empty($_POST["num2"])){
            $num2 = "";
        } else {
            $num2 = $_POST["num2"];
        }

        if (empty($_POST["op"])){
            $op = "";
        } else {
            $op = $_POST["op"];
        }

        if ($num1 && $num2 && $op){
            switch($op){
                case '+': $result = $num1 + $num2;
                    break;
                case '-': $result = $num1 - $num2;
                    break;
                case 'x': $result = $num1 * $num2;
                    break;
                case '/': $result = $num1 / $num2;
                    break;
                case 'C': $result = $num1 = $num2 = "";
                    break;
            }
        }
    }
?>
<div class="h-[180px] w-[250px] bg-gray-800 border border-gray-400 rounded-md p-2 text-sm">
    <h2 class="text-white text-lg font-semibold mb-2">Calculator</h2>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <div class="flex justify-between">
    <input class="w-[190px] h-6 p-2 rounded-md" type="number" value="<?= $result ?>" disabled>
    <input class="w-[30px] h-6 bg-red-600 text-white px-1 text-sm rounded-md" type="submit" value="C" name="op">
    </div>
    <div class="flex justify-between mt-2 w-[160px] mx-auto">
    <input class="w-[70px] border border-gray-400 bg-gray-800 text-xs p-1 rounded-md" type="number" name="num1" value="<?= $num1 ?>"  placeholder="Number">
    <input class="w-[70px] border border-gray-400 bg-gray-800 text-xs p-1 rounded-md" type="number" name="num2" value="<?= $num2 ?>"  placeholder="Number">
    </div> 
    <div class="flex justify-between w-[200px] mx-auto mt-4">
    <input class="px-2 bg-yellow-400 text-black rounded-md" type="submit" value="+" name="op">
    <input class="px-2 bg-yellow-400 text-black rounded-md" type="submit" value="-" name="op">
    <input class="px-2 bg-yellow-400 text-black rounded-md" type="submit" value="x" name="op">
    <input class="px-2 bg-yellow-400 text-black rounded-md" type="submit" value="/" name="op">
    </div>
</form>
</div>
