<html>
    <head>
        <title>Praktikum 4</title>
    </head>
    <body>
        <?php
            $total_pembelian = 250000;

            if($total_pembelian < 100000){
            $diskon = 0;
            }elseif($total_pembelian >= 100000 && $total_pembelian <= 200000){
                $diskon = $total_pembelian * 0.10;
            }elseif($total_pembelian >= 200000 && $total_pembelian <= 300000){
                $diskon = $total_pembelian * 0.20;
            }else{
                $diskon = $total_pembelian * 0.30;
            }

            echo "Total pembelian : Rp." . $total_pembelian . "<br>";
            echo "Diskon : Rp." . $diskon . "<br>";
            echo "Total yang harus dibayar : Rp." . ($total_pembelian - $diskon);
        ?>
    </body>
</html>