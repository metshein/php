<h1>Ülesanne 3</h1>
<form>
    a <input type="number" name="a"><br>
    b <input type="number" name="b"><br>
    h <input type="number" name="h"><br>
    <input type="submit" value="Arvuta"><br>
</form>
<?php
if (isset($_GET['a']) && isset($_GET['b']) && isset($_GET['h'])) {
    $a = $_GET['a'];
    $b = $_GET['b'];
    $h = $_GET['h'];

    $s = ($a+$b)/2*$h;

    printf("Trapets pindala on %.1f",$s);

}
?>

<h1>Ülesanded 4</h1>
<form>
    nr1 <input type="number" name="nr1"><br>
    nr2 <input type="number" name="nr2"><br>
    <input type="submit" value="Arvuta"><br>
</form>

<?php
if (isset($_GET['nr1']) && isset($_GET['nr2'])){
// Jagamine – sisestatakse 2 täisarvulist muutujat. Jaga üks arv teisega. 
// Väljasta ka hoiatav lause, kui kasutaja üritab jagada nulliga. 
// Lisa kontroll, mis ei käivita koodi tühjade lahtrite puhul (N: if(!empty($_GET[‘name’])){lause}, 
// see käivitab koodi siis, kui lahtrisse on midagi lisatud)
$nr1 = $_GET['nr1'];
$nr2 = $_GET['nr2'];

if ($nr2==0) {
    echo "Nulliga ei saa jagada";
} else {
    printf("%d / %d = %.2f", $nr1, $nr2, $nr1/$nr2);
}
echo "<br>";
// Vanus (if…elseif) – sisestatakse kasutaja vanused. Leia, kumb on vanem või on ühevanused. Kood ei käivtu, kui kumbki lahter on jäänud tühjaks
if ($nr1>$nr2) {
    echo "Esimene tüüp on vanem";
}else if ($nr1<$nr2) {
    echo "Teine tüüp on vanem";
} else {
    echo "Ühevanused";
}
echo "<br>";
// Ristkülik või ruut – kasutaja sisestab ristküliku külgede väärtused. Sinu kood otsustab, kumb on võimalik: ruut või ristkülik
// Ristkülik või ruut II – vastavalt kasutaja sisestatud arvudele kuvatakse vastavalt ruut või ristkülik
if ($nr1>$nr2) {
    echo "Ristkülik";
    echo '<img src="https://www.real.edu.ee/matemaatika/sisu/0148/joonis1.gif" alt="ristkülik">';
} else {
    echo "Ruut";
    echo '<img src="https://www.real.edu.ee/matemaatika/sisu/0148/joonis2.gif" alt="ruut">';
}

echo "<br>";
// Juubel – kasutaja lisab sünniaasta ning kood väljastab, kas tegemist on juubeliaastaga. Lisa kontroll, mis ei käivita koodi tühjade lahtrite puhul.
echo "<br>";
// Hinne (switch) – kasutaja sisestab oma KT punktide arvu. kui

//     ta sai rohkem kui 10p, tuleb kiri SUPER!
//     5-9p TEHTUD!
//     alla 5p KASIN!
//     kui pole punkte lisanud või lisas kogemata teksti tuleb kiri SISESTA OMA PUNKTID!

}
?>

