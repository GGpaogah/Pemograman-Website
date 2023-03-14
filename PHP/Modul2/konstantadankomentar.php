<html>
    <head>
        <title>Menghitung Luas Lingkaran</title>
    </head>
    <body>
        <?php
        define("Judul","Hitung Luas Lingkaran");
        define("Phi",3.14);
        $r=10;
        echo "<br> jari jari : $r <br>";
        $luas = Phi*$r*$r;
        echo "Luas lingkaran = $luas";
        ?>
    </body>
</html>