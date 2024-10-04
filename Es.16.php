<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TABELLA</title>
    </head>
    <body>
        <?php
            function stampaTabella ($m, $n) {
                echo "<table style='border: 1px solid black; width: 30%; border-collapse: collapse; text-align:center'>";
                for ($i = 0; $i < $m; $i++) {
                    echo "<tr>";
                    for ($k = 0; $k < $n; $k++) {
                        echo "<td style='border: 1px solid black; padding: 10px'>$i , $k</td>";
                    }
                    echo "</tr>";
                }
                
                echo "</table>";
            }

            stampaTabella(10, 4);

        ?>
        
    </body>
</html>