PHP ülesanded ilma andmebaasita
PHP projektid

1. Autopesula
   Fail: 'services.csv' (teenuse nimi; hind; kirjeldus). Kalkulaator arvestab auto suurust (sedaan, universaal, maastur lisab % juurde).

	* Failid tuleb genereerida saidil https://mockaroo.com
	* Leht peab olema kujundatud Bootstrapiga ja kohanduv (responsive)
	* Navigeerimismenüü tuleb teha Bootstrap komponentidega. Menüüs vähemalt: Avaleht, Teenused, Autopesu kalkulaator, Kontakt, Ostukorv
	* Logo (võib olla tekstina või pildina)
	* Bänner – Bootstrap carousel, mis võtab pildid automaatselt kaustast 'reklaam/'. Pildid valitakse suvaliselt, nt PHP 'glob()' abil
	* Teenused: kuvatakse failist ('.csv' või '.txt'), vähemalt 12 teenust, Bootstrap kaardina, 3 veerus ('col-md-4'). Kuvada nimi, hind, pilt, nupp "Lisa ostukorvi". Lisatud eraldi kausta 'pildid/'
	* Kalkulaator: arvutab teenuse hinna vastavalt valitud teenusele ja auto suurusele (sedaan = 0%, universaal = +10%, maastur = +20%). Tulemus tuleb salvestada faili (nt 'orders.txt')
	* Kontaktileht: sisaldab Google Mapsi ja kontaktivormi
	* Leht peab olema üleval: 'liivakast.hkhk.edu.ee/~kasutaja/phpprojekt'
	* Lisaks GitHubi repositoorium
	* Esitada tuleb nii liivakasti link kui GitHubi link

2. Spordiklubi
   Fail: 'packages.csv' (paketi nimi; hind kuus; kirjeldus). Kalkulaator: kuude arv × inimeste arv.

	* Failid tuleb genereerida saidil https://mockaroo.com
	* Leht peab olema kujundatud Bootstrapiga ja kohanduv (responsive)
	* Navigeerimismenüü tuleb teha Bootstrap komponentidega. Menüüs vähemalt: Avaleht, Teenused, Kalkulaator, Kontakt, Ostukorv
	* Logo (võib olla tekstina või pildina)
	* Bänner – Bootstrap carousel, mis võtab pildid automaatselt kaustast 'reklaam/'. Pildid valitakse suvaliselt, nt PHP 'glob()' abil
	* Teenused: kuvatakse failist ('.csv' või '.txt'), vähemalt 12 teenust, Bootstrap kaardina, 3 veerus ('col-md-4'). Kuvada nimi, hind, pilt, nupp "Lisa ostukorvi". Lisatud eraldi kausta 'pildid/'
	* Kalkulaator: arvutab paketi hinna valitud kuude ja inimeste arvu järgi (hind × kuud × inimesed). Lisavalik: õpilase soodustus –15%. Tulemus tuleb salvestada faili (nt 'orders.txt')
	* Kontaktileht: sisaldab Google Mapsi ja kontaktivormi
	* Leht peab olema üleval: 'liivakast.hkhk.edu.ee/~kasutaja/phpprojekt'
	* Lisaks GitHubi repositoorium
	* Esitada tuleb nii liivakasti link kui GitHubi link

3. Kohvik
   Fail: 'menu.csv' (nimi; hind; kategooria; kirjeldus). Kalkulaator summeerib tellitud toodete hinna.

	* Failid tuleb genereerida saidil https://mockaroo.com
	* Leht peab olema kujundatud Bootstrapiga ja kohanduv (responsive)
	* Navigeerimismenüü tuleb teha Bootstrap komponentidega. Menüüs vähemalt: Avaleht, Tooted, Kalkulaator, Kontakt, Ostukorv
	* Logo (võib olla tekstina või pildina)
	* Bänner – Bootstrap carousel, mis võtab pildid automaatselt kaustast 'reklaam/'. Pildid valitakse suvaliselt, nt PHP 'glob()' abil
	* Tooted: kuvatakse failist ('.csv' või '.txt'), vähemalt 12 toodet, Bootstrap kaardina, 4 veerus ('col-md-3'). Kuvada nimi, hind, pilt, nupp "Lisa ostukorvi". Lisatud eraldi kausta 'pildid/'
	* Kalkulaator: arvutab eritellimuskoogi hinna vastavalt inimeste arvule ja valitud täidisele (täidisel on erinev lisahind). Tulemus tuleb salvestada faili (nt 'orders.txt')
	* Kontaktileht: sisaldab Google Mapsi ja kontaktivormi
	* Leht peab olema üleval: 'liivakast.hkhk.edu.ee/~kasutaja/phpprojekt'
	* Lisaks GitHubi repositoorium
	* Esitada tuleb nii liivakasti link kui GitHubi link

4. Raamatupood
   Fail: 'books.csv' (pealkiri; autor; hind; kategooria). Kalkulaator arvutab raamatute koguhinna.

	* Failid tuleb genereerida saidil https://mockaroo.com
	* Leht peab olema kujundatud Bootstrapiga ja kohanduv (responsive)
	* Navigeerimismenüü tuleb teha Bootstrap komponentidega. Menüüs vähemalt: Avaleht, Teenused, Kalkulaator, Kontakt, Ostukorv
	* Logo (võib olla tekstina või pildina)
	* Bänner – Bootstrap carousel, mis võtab pildid automaatselt kaustast 'reklaam/'. Pildid valitakse suvaliselt, nt PHP 'glob()' abil
	* Tooted: kuvatakse failist ('.csv' või '.txt'), vähemalt 12 toodet, Bootstrap kaardina, 4 veerus ('col-md-3'). Kuvada nimi, hind, pilt, nupp "Lisa ostukorvi". Lisatud eraldi kausta 'pildid/'
	* Kalkulaator: arvutab raamatute koguhinna, võimaldab lisada kinkepakendi (+2 €/raamat) ja kasutada sooduskoodi (nt RAAMAT10 = –10%). Tulemus tuleb salvestada faili (nt 'orders.txt')
	* Kontaktileht: sisaldab Google Mapsi ja kontaktivormi
	* Leht peab olema üleval: 'liivakast.hkhk.edu.ee/~kasutaja/phpprojekt'
	* Lisaks GitHubi repositoorium
	* Esitada tuleb nii liivakasti link kui GitHubi link

5. Ehitusmaterjalid
   Fail: 'materials.csv' (toote nimi; hind; ühik). Kalkulaator: pindala põhjal vajaliku koguse ja hinna arvutus.

	* Failid tuleb genereerida saidil https://mockaroo.com
	* Leht peab olema kujundatud Bootstrapiga ja kohanduv (responsive)
	* Navigeerimismenüü tuleb teha Bootstrap komponentidega. Menüüs vähemalt: Avaleht, Tooted/Teenused, Kalkulaator, Kontakt, Ostukorv
	* Logo (võib olla tekstina või pildina)
	* Bänner – Bootstrap carousel, mis võtab pildid automaatselt kaustast 'reklaam/'. Pildid valitakse suvaliselt, nt PHP 'glob()' abil
	* Tooted: kuvatakse failist ('.csv' või '.txt'), vähemalt 12 toodet, Bootstrap kaardina, 4 veerus ('col-md-3'). Kuvada nimi, hind, pilt, nupp "Lisa ostukorvi". Lisatud eraldi kausta 'pildid/'
	* Kalkulaator: arvutab vajaliku koguse ja hinna pindala järgi (sisestatakse m²). Lisavalik: püsikliendi soodustus –10%. Tulemus tuleb salvestada faili (nt 'orders.txt')
	* Kontaktileht: sisaldab Google Mapsi ja kontaktivormi
	* Leht peab olema üleval: 'liivakast.hkhk.edu.ee/~kasutaja/phpprojekt'
	* Lisaks GitHubi repositoorium
	* Esitada tuleb nii liivakasti link kui GitHubi link

6. Kinkepood
   Fail: 'gifts.csv' (nimi; hind; kirjeldus). Kalkulaator: kogus + pakendamise tasu + transport.

	* Failid tuleb genereerida saidil https://mockaroo.com
	* Leht peab olema kujundatud Bootstrapiga ja kohanduv (responsive)
	* Navigeerimismenüü tuleb teha Bootstrap komponentidega. Menüüs vähemalt: Avaleht, Tooted/Teenused, Kalkulaator, Kontakt, Ostukorv
	* Logo (võib olla tekstina või pildina)
	* Bänner – Bootstrap carousel, mis võtab pildid automaatselt kaustast 'reklaam/'. Pildid valitakse suvaliselt, nt PHP 'glob()' abil
	* Tooted: kuvatakse failist ('.csv' või '.txt'), vähemalt 12 toodet, Bootstrap kaardina, 4 veerus ('col-md-3'). Kuvada nimi, hind, pilt, nupp "Lisa ostukorvi". Lisatud eraldi kausta 'pildid/'
	* Kalkulaator: arvutab toote koguhinna koos valitud pakendiga (tavaline, luksus, oma disain) ja transpordiga (pakiautomaat, kuller). Tulemus tuleb salvestada faili (nt 'orders.txt')
	* Kontaktileht: sisaldab Google Mapsi ja kontaktivormi
	* Leht peab olema üleval: 'liivakast.hkhk.edu.ee/~kasutaja/phpprojekt'
	* Lisaks GitHubi repositoorium
	* Esitada tuleb nii liivakasti link kui GitHubi link

7. Turismibüroo
   Fail: 'trips.csv' (sihtkoht; hind; kestus; kirjeldus). Kalkulaator: hind inimeste arvu järgi.

	* Failid tuleb genereerida saidil https://mockaroo.com
	* Leht peab olema kujundatud Bootstrapiga ja kohanduv (responsive)
	* Navigeerimismenüü tuleb teha Bootstrap komponentidega. Menüüs vähemalt: Avaleht, Tooted/Teenused, Kalkulaator, Kontakt, Ostukorv
	* Logo (võib olla tekstina või pildina)
	* Bänner – Bootstrap carousel, mis võtab pildid automaatselt kaustast 'reklaam/'. Pildid valitakse suvaliselt, nt PHP 'glob()' abil
	* Teenused: kuvatakse failist ('.csv' või '.txt'), vähemalt 12 teenust, Bootstrap kaardina, 3 veerus ('col-md-4'). Kuvada nimi, hind, pilt, nupp "Lisa ostukorvi". Lisatud eraldi kausta 'pildid/'
	* Kalkulaator: arvutab reisi koguhinna (hind × inimeste arv), lisades vajadusel lisateenused (giid, kindlustus). Tulemus tuleb salvestada faili (nt 'orders.txt')
	* Kontaktileht: sisaldab Google Mapsi ja kontaktivormi
	* Leht peab olema üleval: 'liivakast.hkhk.edu.ee/~kasutaja/phpprojekt'
	* Lisaks GitHubi repositoorium
	* Esitada tuleb nii liivakasti link kui GitHubi link

8. Koolituskeskus
   Fail: 'courses.csv' (kursuse nimi; hind; kestus; kirjeldus). Kalkulaator: hind osalejate arvuga.

	* Failid tuleb genereerida saidil https://mockaroo.com
	* Leht peab olema kujundatud Bootstrapiga ja kohanduv (responsive)
	* Navigeerimismenüü tuleb teha Bootstrap komponentidega. Menüüs vähemalt: Avaleht, Tooted/Teenused, Kalkulaator, Kontakt, Ostukorv
	* Logo (võib olla tekstina või pildina)
	* Bänner – Bootstrap carousel, mis võtab pildid automaatselt kaustast 'reklaam/'. Pildid valitakse suvaliselt, nt PHP 'glob()' abil
	* Teenused: kuvatakse failist ('.csv' või '.txt'), vähemalt 12 teenust, Bootstrap kaardina, 3 veerus ('col-md-4'). Kuvada nimi, hind, pilt, nupp "Lisa ostukorvi". Lisatud eraldi kausta 'pildid/'
	* Kalkulaator: arvutab kursuse koguhinna osalejate arvu põhjal. Lisavalik: online (–20%) või klassikoolitus (tavahind). Tulemus tuleb salvestada faili (nt 'orders.txt')
	* Kontaktileht: sisaldab Google Mapsi ja kontaktivormi
	* Leht peab olema üleval: 'liivakast.hkhk.edu.ee/~kasutaja/phpprojekt'
	* Lisaks GitHubi repositoorium
	* Esitada tuleb nii liivakasti link kui GitHubi link

9. Autolaenutus
   Fail: 'cars.csv' (mark; hind päev; kirjeldus). Kalkulaator: päevade arv × päevahind.

	* Failid tuleb genereerida saidil https://mockaroo.com
	* Leht peab olema kujundatud Bootstrapiga ja kohanduv (responsive)
	* Navigeerimismenüü tuleb teha Bootstrap komponentidega. Menüüs vähemalt: Avaleht, Tooted/Teenused, Kalkulaator, Kontakt, Ostukorv
	* Logo (võib olla tekstina või pildina)
	* Bänner – Bootstrap carousel, mis võtab pildid automaatselt kaustast 'reklaam/'. Pildid valitakse suvaliselt, nt PHP 'glob()' abil
	* Teenused: kuvatakse failist ('.csv' või '.txt'), vähemalt 12 teenust (autot), Bootstrap kaardina, 3 veerus ('col-md-4'). Kuvada nimi, hind, pilt, nupp "Lisa ostukorvi". Lisatud eraldi kausta 'pildid/'
	* Kalkulaator: arvutab koguhinna päevade arvu ja päevahinna järgi. Lisavalikud: kindlustus (+10 €/päev) ja lapseiste (+5 €/päev). Tulemus tuleb salvestada faili (nt 'orders.txt')
	* Kontaktileht: sisaldab Google Mapsi ja kontaktivormi
	* Leht peab olema üleval: 'liivakast.hkhk.edu.ee/~kasutaja/phpprojekt'
	* Lisaks GitHubi repositoorium
	* Esitada tuleb nii liivakasti link kui GitHubi link

10. Tervisekeskus / spa
    Fail: 'spa.csv' (paketi nimi; hind; kirjeldus). Kalkulaator: hind × osalejate arv.

	* Failid tuleb genereerida saidil https://mockaroo.com
	* Leht peab olema kujundatud Bootstrapiga ja kohanduv (responsive)
	* Navigeerimismenüü tuleb teha Bootstrap komponentidega. Menüüs vähemalt: Avaleht, Tooted/Teenused, Kalkulaator, Kontakt, Ostukorv
	* Logo (võib olla tekstina või pildina)
	* Bänner – Bootstrap carousel, mis võtab pildid automaatselt kaustast 'reklaam/'. Pildid valitakse suvaliselt, nt PHP 'glob()' abil
	* Teenused: kuvatakse failist ('.csv' või '.txt'), vähemalt 12 teenust, Bootstrap kaardina, 3 veerus ('col-md-4'). Kuvada nimi, hind, pilt, nupp "Lisa ostukorvi". Lisatud eraldi kausta 'pildid/'
	* Kalkulaator: arvutab paketi hinna osalejate arvu järgi, lisades valitud lisateenused (massaaž, saun). Tulemus tuleb salvestada faili (nt 'orders.txt')
	* Kontaktileht: sisaldab Google Mapsi ja kontaktivormi
	* Leht peab olema üleval: 'liivakast.hkhk.edu.ee/~kasutaja/phpprojekt'
	* Lisaks GitHubi repositoorium
	* Esitada tuleb nii liivakasti link kui GitHubi link

11. Fotostuudio
    Fail: 'packages.csv' (pakett; hind; kirjeldus). Kalkulaator: hind tundide arvu järgi.

	* Failid tuleb genereerida saidil https://mockaroo.com
	* Leht peab olema kujundatud Bootstrapiga ja kohanduv (responsive)
	* Navigeerimismenüü tuleb teha Bootstrap komponentidega. Menüüs vähemalt: Avaleht, Tooted/Teenused, Kalkulaator, Kontakt, Ostukorv
	* Logo (võib olla tekstina või pildina)
	* Bänner – Bootstrap carousel, mis võtab pildid automaatselt kaustast 'reklaam/'. Pildid valitakse suvaliselt, nt PHP 'glob()' abil
	* Teenused: kuvatakse failist ('.csv' või '.txt'), vähemalt 12 teenust, Bootstrap kaardina, 3 veerus ('col-md-4'). Kuvada nimi, hind, pilt, nupp "Lisa ostukorvi". Lisatud eraldi kausta 'pildid/'
	* Kalkulaator: arvutab paketi hinna tundide arvu põhjal. Lisavalik: pildid digitaalselt või trükituna (trükk = fikseeritud summa juurde). Tulemus tuleb salvestada faili (nt 'orders.txt')
	* Kontaktileht: sisaldab Google Mapsi ja kontaktivormi
	* Leht peab olema üleval: 'liivakast.hkhk.edu.ee/~kasutaja/phpprojekt'
	* Lisaks GitHubi repositoorium
	* Esitada tuleb nii liivakasti link kui GitHubi link

12. Lillepood
    Fail: 'flowers.csv' (nimi; hind; kirjeldus). Kalkulaator: kimbu hind (kogus × hind).

	* Failid tuleb genereerida saidil https://mockaroo.com
	* Leht peab olema kujundatud Bootstrapiga ja kohanduv (responsive)
	* Navigeerimismenüü tuleb teha Bootstrap komponentidega. Menüüs vähemalt: Avaleht, Tooted/Teenused, Kalkulaator, Kontakt, Ostukorv
	* Logo (võib olla tekstina või pildina)
	* Bänner – Bootstrap carousel, mis võtab pildid automaatselt kaustast 'reklaam/'. Pildid valitakse suvaliselt, nt PHP 'glob()' abil
	* Tooted: kuvatakse failist ('.csv' või '.txt'), vähemalt 12 toodet (lille), Bootstrap kaardina, 4 veerus ('col-md-3'). Kuvada nimi, hind, pilt, nupp "Lisa ostukorvi". Lisatud eraldi kausta 'pildid/'
	* Kalkulaator: arvutab kimbu hinna (hind × kogus). Lisavalik: vaas (+7 €). Tulemus tuleb salvestada faili (nt 'orders.txt')
	* Kontaktileht: sisaldab Google Mapsi ja kontaktivormi
	* Leht peab olema üleval: 'liivakast.hkhk.edu.ee/~kasutaja/phpprojekt'
	* Lisaks GitHubi repositoorium
	* Esitada tuleb nii liivakasti link kui GitHubi link

13. Pagarikoda
    Fail: 'bakery.csv' (nimi; hind; kirjeldus). Kalkulaator: ostukogus × hind.

	* Failid tuleb genereerida saidil https://mockaroo.com
	* Leht peab olema kujundatud Bootstrapiga ja kohanduv (responsive)
	* Navigeerimismenüü tuleb teha Bootstrap komponentidega. Menüüs vähemalt: Avaleht, Tooted/Teenused, Kalkulaator, Kontakt, Ostukorv
	* Logo (võib olla tekstina või pildina)
	* Bänner – Bootstrap carousel, mis võtab pildid automaatselt kaustast 'reklaam/'. Pildid valitakse suvaliselt, nt PHP 'glob()' abil
	* Tooted: kuvatakse failist ('.csv' või '.txt'), vähemalt 12 toodet, Bootstrap kaardina, 4 veerus ('col-md-3'). Kuvada nimi, hind, pilt, nupp "Lisa ostukorvi". Lisatud eraldi kausta 'pildid/'
	* Kalkulaator: arvutab toodete koguhinna. Lisavalik: kook eritellimusena (+15%). Tulemus tuleb salvestada faili (nt 'orders.txt')
	* Kontaktileht: sisaldab Google Mapsi ja kontaktivormi
	* Leht peab olema üleval: 'liivakast.hkhk.edu.ee/~kasutaja/phpprojekt'
	* Lisaks GitHubi repositoorium
	* Esitada tuleb nii liivakasti link kui GitHubi link

14. Sporditarvete pood
    Fail: 'sports.csv' (toote nimi; hind; kategooria). Kalkulaator: ostukogus × hind.

	* Failid tuleb genereerida saidil https://mockaroo.com
	* Leht peab olema kujundatud Bootstrapiga ja kohanduv (responsive)
	* Navigeerimismenüü tuleb teha Bootstrap komponentidega. Menüüs vähemalt: Avaleht, Tooted/Teenused, Kalkulaator, Kontakt, Ostukorv
	* Logo (võib olla tekstina või pildina)
	* Bänner – Bootstrap carousel, mis võtab pildid automaatselt kaustast 'reklaam/'. Pildid valitakse suvaliselt, nt PHP 'glob()' abil
	* Tooted: kuvatakse failist ('.csv' või '.txt'), vähemalt 12 toodet, Bootstrap kaardina, 4 veerus ('col-md-3'). Kuvada nimi, hind, pilt, nupp "Lisa ostukorvi". Lisatud eraldi kausta 'pildid/'
	* Kalkulaator: arvutab toodete hinna (hind × kogus). Lisavalik: transpordiviis (pakiautomaat 3 €, kuller 6 €). Tulemus tuleb salvestada faili (nt 'orders.txt')
	* Kontaktileht: sisaldab Google Mapsi ja kontaktivormi
	* Leht peab olema üleval: 'liivakast.hkhk.edu.ee/~kasutaja/phpprojekt'
	* Lisaks GitHubi repositoorium
	* Esitada tuleb nii liivakasti link kui GitHubi link

15. Tööriistade rent
    Fail: 'tools.csv' (tööriist; hind päev; kirjeldus). Kalkulaator: päevade arv × hind × kogus.

	* Failid tuleb genereerida saidil https://mockaroo.com
	* Leht peab olema kujundatud Bootstrapiga ja kohanduv (responsive)
	* Navigeerimismenüü tuleb teha Bootstrap komponentidega. Menüüs vähemalt: Avaleht, Tooted/Teenused, Kalkulaator, Kontakt, Ostukorv
	* Logo (võib olla tekstina või pildina)
	* Bänner – Bootstrap carousel, mis võtab pildid automaatselt kaustast 'reklaam/'. Pildid valitakse suvaliselt, nt PHP 'glob()' abil
	* Teenused: kuvatakse failist ('.csv' või '.txt'), vähemalt 12 teenust (tööriista), Bootstrap kaardina, 3 veerus ('col-md-4'). Kuvada nimi, hind, pilt, nupp "Lisa ostukorvi". Lisatud eraldi kausta 'pildid/'
	* Kalkulaator: arvutab hinna päevade, koguse ja päevahinna põhjal (hind × päevad × kogus). Lisavalik: tagatisraha (20 € tööriista kohta, kuvatakse eraldi). Tulemus tuleb salvestada faili (nt 'orders.txt')
	* Kontaktileht: sisaldab Google Mapsi ja kontaktivormi
	* Leht peab olema üleval: 'liivakast.hkhk.edu.ee/~kasutaja/phpprojekt'
	* Lisaks GitHubi repositoorium
	* Esitada tuleb nii liivakasti link kui GitHubi link

16. Käsitööpood
    Fail: 'crafts.csv' (toote nimi; hind; kirjeldus). Kalkulaator: ostukogus × hind. Lisaleht: Blogi ('blog.txt').

	* Failid tuleb genereerida saidil https://mockaroo.com
	* Leht peab olema kujundatud Bootstrapiga ja kohanduv (responsive)
	* Navigeerimismenüü tuleb teha Bootstrap komponentidega. Menüüs vähemalt: Avaleht, Tooted/Teenused, Kalkulaator, Kontakt, Ostukorv
	* Logo (võib olla tekstina või pildina)
	* Bänner – Bootstrap carousel, mis võtab pildid automaatselt kaustast 'reklaam/'. Pildid valitakse suvaliselt, nt PHP 'glob()' abil
	* Tooted: kuvatakse failist ('.csv' või '.txt'), vähemalt 12 toodet, Bootstrap kaardina, 4 veerus ('col-md-3'). Kuvada nimi, hind, pilt, nupp "Lisa ostukorvi". Lisatud eraldi kausta 'pildid/'
	* Kalkulaator: arvutab hinna (hind × kogus). Lisavalik: kampaania blogist (nt –5%). Tulemus tuleb salvestada faili (nt 'orders.txt')
	* Kontaktileht: sisaldab Google Mapsi ja kontaktivormi
	* Leht peab olema üleval: 'liivakast.hkhk.edu.ee/~kasutaja/phpprojekt'
	* Lisaks GitHubi repositoorium
	* Esitada tuleb nii liivakasti link kui GitHubi link

17. Muusikapood
    Fail: 'instruments.csv' (nimi; hind; kategooria). Kalkulaator: ostukogus × hind.

	* Failid tuleb genereerida saidil https://mockaroo.com
	* Leht peab olema kujundatud Bootstrapiga ja kohanduv (responsive)
	* Navigeerimismenüü tuleb teha Bootstrap komponentidega. Menüüs vähemalt: Avaleht, Tooted/Teenused, Kalkulaator, Kontakt, Ostukorv
	* Logo (võib olla tekstina või pildina)
	* Bänner – Bootstrap carousel, mis võtab pildid automaatselt kaustast 'reklaam/'. Pildid valitakse suvaliselt, nt PHP 'glob()' abil
	* Tooted: kuvatakse failist ('.csv' või '.txt'), vähemalt 12 toodet (instrumenti), Bootstrap kaardina, 4 veerus ('col-md-3'). Kuvada nimi, hind, pilt, nupp "Lisa ostukorvi". Lisatud eraldi kausta 'pildid/'
	* Kalkulaator: arvutab hinna (hind × kogus). Lisavalik: pikendatud garantii (hind × 10%). Tulemus tuleb salvestada faili (nt 'orders.txt')
	* Kontaktileht: sisaldab Google Mapsi ja kontaktivormi
	* Leht peab olema üleval: 'liivakast.hkhk.edu.ee/~kasutaja/phpprojekt'
	* Lisaks GitHubi repositoorium
	* Esitada tuleb nii liivakasti link kui GitHubi link

18. Kodumasinate pood
    Fail: 'appliances.csv' (nimi; hind; energiakulu kWh). Kalkulaator: hind + elektrikulu kuus (kWh hind ja kasutustunnid).

	* Failid tuleb genereerida saidil https://mockaroo.com
	* Leht peab olema kujundatud Bootstrapiga ja kohanduv (responsive)
	* Navigeerimismenüü tuleb teha Bootstrap komponentidega. Menüüs vähemalt: Avaleht, Tooted/Teenused, Kalkulaator, Kontakt, Ostukorv
	* Logo (võib olla tekstina või pildina)
	* Bänner – Bootstrap carousel, mis võtab pildid automaatselt kaustast 'reklaam/'. Pildid valitakse suvaliselt, nt PHP 'glob()' abil
	* Tooted: kuvatakse failist ('.csv' või '.txt'), vähemalt 12 toodet (seadet), Bootstrap kaardina, 4 veerus ('col-md-3'). Kuvada nimi, hind, pilt, nupp "Lisa ostukorvi". Lisatud eraldi kausta 'pildid/'
	* Kalkulaator: arvutab seadme hinna ja elektrikulu kuus (kWh hind × kWh kasutus × tunnid). Tulemus tuleb salvestada faili (nt 'orders.txt')
	* Kontaktileht: sisaldab Google Mapsi ja kontaktivormi
	* Leht peab olema üleval: 'liivakast.hkhk.edu.ee/~kasutaja/phpprojekt'
	* Lisaks GitHubi repositoorium
	* Esitada tuleb nii liivakasti link kui GitHubi link
