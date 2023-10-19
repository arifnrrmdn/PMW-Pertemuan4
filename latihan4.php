<html>
    <head>
        <title>Struktur Kontrol</title>
    </head>
    <body>
        <?php
            // struktur else if
            echo "<h1 align='center'>struktur pengulangan else if</h1>";
            $nilai = 60;
            if($nilai >= 80){
                echo "Index nilai anda = A<br>";
            }else if($nilai >= 70){
                echo "Index nilai anda = B<br>";
            }else if($nilai >= 60){
                echo "Index nilai anda = C<br>";
            }

            // Looping while
            echo"<h1 align='center'>Looping menggunakan while</h1>";
            $a_w=1;
            while($a_w<1000){
                echo"$a_w, ";
                $a_w++;
            }

            //Looping do while
            echo"<h1 align='center'>Looping menggunakan Do while</h1>";
            $a_d=2;
            do{
                echo"$a_d, ";
                $a_d++;
            }while($a_d<1000);

            //Looping For
            echo"<h1 align='center'>Looping menggunakan For</h1>"; 
            for($a_f=5;$a_f>0;$a_f--){
                echo "$a_f<br>";
            }
        ?>
    </body>
</html>