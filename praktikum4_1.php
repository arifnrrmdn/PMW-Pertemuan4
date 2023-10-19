<html>
    <head>
        <title>Praktikum 4</title>
    </head>
    <body>
        <?php
        echo"<b>GANJIL : </b>";
            for($i = 1; $i <= 20; $i++){
                if($i % 2 != 0){
                    echo "$i, ";
                }
            }

        echo "<br>";

        echo"<b>GENAP  : </b>";
            for($i = 1; $i <= 20; $i++){
                if($i % 2 == 0){
                    echo "$i, ";
                }
            }
        ?>
    </body>
</html>