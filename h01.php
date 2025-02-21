
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
<div class="conmtainer">
  <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4"></div>
    <div class="col-sm-4"></div>
  </div>
</div>
<h1>Harjutused 1</h1>
    <?php
        // Mario Metshein
        $nimi = "Imre";
        $sa = 1980;
        $tk = "skorpion";

        echo $nimi." ".$sa." ".$tk."<br>";
        echo "$nimi $sa $tk <br>";
        printf("%s %d %s <br>", $nimi, $sa, $tk);
        echo '"It\'s My Life" – Dr. Alban<br>';
        echo "(\(\\<br>";
        echo "(-.o)<br>";
        echo 'o_(")(")<br>';

    ?>
<h1>Harjutused 2</h1>
<h2>Arvutused</h2>
    <?php
    $a = 10;
    $b = 20;
    printf("%d + %d = %d<br>", $a, $b, $a+$b);
    printf("%d - %d = %d<br>", $a, $b, $a-$b);
    printf("%d * %d = %d<br>", $a, $b, $a*$b);
    printf("%d / %d = %.2f<br>", $a, $b, $a/$b);
    ?>
<h2>Teisendamine</h2>
<form>
    Number (mm) <input type="number" name="nr"><br>
            <input type="submit" class="btn btn-danger" value="Teisenda"><br>
</form>
<?php
    $nr = $_GET["nr"];
    printf("%d mm on %0.2f cm<br>", $nr, $nr/10);
    printf("%d mm on %0.2f m<br>", $nr, $nr/1000);
?>
<h2>Kolmnurk</h2>
<form>
    a <input type="number" name="a"><br>
    b <input type="number" name="b"><br>
    <input type="submit" class="btn btn-success" value="Arvuta"><br>
</form>
<?php
    $a = $_GET["a"];
    $b = $_GET["b"];
    $c = sqrt(pow($a,2)+pow($b,2));
    $p = $a+$b+$c;
    $s = ($a+$b)/2;
    echo "kolmnurga pindala on <br>".$s;
    echo "kolmnurga ümbermõõt on ".$p;
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>