<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Csv Assignment</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <?php 
        function read_csv($filename, $header=false){
            $handle = fopen($filename, "r");
            echo "<div class='table-responsive'><table class='table table-sm table-striped table-bordered table-hover'> \n\n";
            if ($header) {
                $csvcontents = fgetcsv($handle);
                echo "<tr>";
                foreach ($csvcontents as $headercolumn) {
                    echo "<th>$headercolumn</th>";
                }
                echo "</tr> \n";
            }
            while ($csvcontents = fgetcsv($handle)) {
                echo "<tr>";
                foreach ($csvcontents as $column) {
                    echo "<td style='width:1px; white-space:nowrap;'>$column</td>";
                }
                echo "</tr> \n";
            }
            echo "\n</table></div>";
            fclose($handle);
        }

        read_csv("username.csv", true);
    ?>
</body>
</html>