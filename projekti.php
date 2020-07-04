<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Projekti</title>

	<link rel="stylesheet" type="text/css" href="stil.css">
	<link href="css/bootstrap-4.4.1.css" rel="stylesheet">
</head>
	
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="images/logo_fullsize.png"><img src="images/logo.svg" height="150px" alt="bastinica" title="bastinica_logo"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
		<li class="nav-item">
			<a class="nav-link" href="naslovnica.html">Naslovnica</a>
		</li>
      	<li class="nav-item">
			<a class="nav-link" href="proslostice.html">Prošlostice</a>
      	</li>
		<li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          		Projekti
        	</a>
        	<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				<a class="dropdown-item" href="projekti.php?a=5">Glagoljačić</a>
			  	<a class="dropdown-item" href="projekti.php?a=6">Koronameron</a>
                                <a class="dropdown-item" href="projekti.php"><b>Svi projekti</b></a>
			  	<div class="dropdown-divider"></div>
                                &emsp;Budući projekti:
			  	<a class="dropdown-item" href="#">Budući</a>
        	</div>
      	</li>
		<li class="nav-item dropdown">
        	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         		Događaji
        	</a>
        	<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				<a class="dropdown-item" href="#">Action</a>
			  	<a class="dropdown-item" href="#">Another action</a>
			  	<div class="dropdown-divider"></div>
			  	<a class="dropdown-item" href="#">Something else here</a>
        	</div>
      </li>
	  <li class="nav-item">
      		<a class="nav-link" href="o_nama.html">O nama</a>
      </li>
	  <li class="nav-item">
      	  <a class="nav-link" href="kontakti.html">Kontakt</a>
      </li>
	</ul>
  </div>
</nav>
<?php
if(isset($_GET['a'])){
    $a = $_GET['a'];

    switch($a){
        case 1:
            $tekst = "<br><h4>U POTRAZI ZA FRANKOPANSKIM POSJEDIMA U GACKOJ</h4><br>
            Udruga Baštinica nositelj je projekta „U potrazi za frankopanskim posjedima u Gackoj“, realiziranog od travnja 2018. do 
            travnja 2019. u suradnji s fotografom Darkom Antolkovićem i arheologinjom Katarinom Mužar (udruga Arx Novum). GPOU Muzej 
            Gacke organizirao je na inicijativu i uz podršku Baštinice izložbu fotografija „U potrazi za frankopanskim posjedima u Gackoj“
            u ožujku 2019. Uspjeli smo osvijestiti činjenicu da je i Otočac nekoć bio slavan i bogat frankopanski grad u kojem je u 15. 
            st., na vrhuncu frankopanske moći, bujala kultura - vladar Otočca Žigmund Frankopan osnovao je Otočku biskupiju, obnovio samostan
            sv. Mikule, koji se spominje i na Bašćanskoj ploči, pisao pisma i darovnice na glagoljici zajedno s braćom, konkretno u Otočcu i 
            Švici, a upravo su iz toga razdoblja tri sačuvana glagoljska rukopisa iz Gacke (Borgiano Illyrico 5 i 6, Dabarski brevijar i 
            Kolunićev zbornik). Tada je i gospodarstvo bilo cvjetalo - trgovina, mlinarenje itd. U to su vrijeme u Otočcu živjele tri 
            Frankopanke. Žigmundova supruga Jelena nepoznata podrijetla i kćeri Doroteja i Barbara („dobra Barbara“). Uočljivo je da se zlatno 
            doba Frankopana poklapa sa zlatnim razdobljem glagoljice. U tijeku je nadogradnja ovog projekta uključivanjem Baštinice u projekt 
            Darka Antolkovića i udruge Knezovi Krčki Frankopani iz Krka.<br><br>";
        break;
        case 2:
            $tekst = "<br><h4>CRVENKAPICA NA FORTICI</h4><br>
            U travnju 2018. upriličili smo događaj „Crvenkapica na Fortici“, povezujući oko multidisciplinarnog gostujućeg 
            projekta divovske uskočke kape Crvenkape senjske umjetnice Marije Zudenigo vjerojatno dosad najširu mrežu 
            suradnika na nekom malom, lokalnom projektu – 5 udruga iz Otočca i Brinja, 4 odgojno-obrazovne ustanove, jednu 
            kulturnu ustanovu i brojne pojedince. Ujedno smo promovirali utvrdu Fortica kao idealan prostor za slična 
            kulturna događanja i potencijal brenda u nastajanju „the coklje“ Danijele Tonković.<br><br>";
        break;
        case 3:
            $tekst = "<br><h4>THE COKLJE FEST</h4><br>
            U srpnju 2019. udruga je organizirala događaj koji je promicao kreativno izražavanje i stvaralaštvo „1. The coklje 
            fest Otočac 2019.“ (sajam rukotvorina i suvenira, zabavni glazbeni program, nagradni natječaji), u suradnji s Kućnom 
            radinosti Danijela Tonković i book cafeom Paradiso, a koji bi morao postati tradicionalni ljetni događaj.<br><br>";
        break;
        case 4:
            $tekst = "<br><h4>50 POEMS FOR SNOW</h4><br>
            U zimu 2018. Baštinica se pridružila međunarodnom festivalu „50 poems for snow/50 poema za snijeg“ te je organizirala 
            pjesničku večer u noći prvog snijega na otvorenom - na utvrdi Fortica u Otočcu, čime je još jednom potvrđen potencijal 
            utvrde za najrazličitija kulturna događanja, ali i aktivnost regionalnih književnika. Svoje su pjesme čitali Jelena 
            Benčić, Jasna Ilić i Manja Kostelac-Gomerčić. Sljedeće zime 2019./2020. prvi ozbiljniji snijeg pao je tek u ožujku 2020., 
            a zbog izvanrednih okolnosti i mjera uzrokovanih globalnom pandemijom koronavirusa, festival je u izolaciji održan 
            virtualno – u snijegu privatnih dvorišta ili balkona troje autora koji su čitali svoju poeziju, a to su Ramona Adriana 
            Vukelić, Goran Jurković i Berislav Kostelac.<br><br>";
        break;
        case 5:
            $tekst = "<br><h4>GLAGOLJAČIĆ</h4><br>
            Proveden je i kompleksan projekt „Slovo pojedi, neznanje pobijedi“ čiji je rezultat nastanak gastro suvenira glagoljačić 
            (domaći keksi u obliku slova glagoljice koji prate priču o kulturnoj baštini i povijesti Gacke). Projekt je javno 
            promoviran u srpnju 2019., a u tijeku je tržišno-implementacijska faza.<br>
            Cilj projekta je promoviranje glagoljice, jedinstvene hrvatske baštine, raritetne u svjetskim razmjerima, i brendiranje 
            Gacke kao značajne točke na karti glagoljaštva. Projekt je osmišljen kao potencijalni poslovni model. Gastro suvenir, 
            tri vrste keksa u obliku slova glagoljice, prati posebna ambalaža, tekstne kartice i informativni letak s nenametljivo 
            prezentiranim pojmovima iz gačanske i hrvatske povijesti. Kolačiće su nazvani Barbarini, Dorotejini i Jelenini glagoljačići, 
            čime su “proštimane” tri Frankopanke koje su živjele u Otočcu u 15. st., a od kojih je Barbara, kći Žigmunda Frankopana, 
            daleko najpoznatija i, svakako, veliki potencijal za daljnje brendiranje.<br>
            Znate li da su se stoljećima francuski kraljevi prilikom krunidbe zaklinjali na glagoljski misal vjerujući da je to pismo 
            napisao sam sv. Jeronim svetim slovima? Znate li da je upravo replika jednog glagoljskog rukopisa iz Gacke, iz Dabra, 
            ugrađena u temelje Nacionalne i sveučilišne knjižnice u Zagrebu? Znate li da je očigledno ondašnja glavna 'faca' i vodeći 
            intelektualac Broz Kolunić od plemena Kacitića iz Dubovika (Kosinj), poznat po vrijednom glagoljskom rukopisu Kolunićev 
            zbornik, nastalom u Otočcu godine 1486., ujedno, prema određenim znanstveno utvrđenim pokazateljima, i priređivač prve 
            hrvatske tiskane knjige u kosinjskoj tiskari 1483. godine – inkunabule Misal po zakonu rimskoga dvora?<br><br>";
        break;
        case 6:
            $tekst = "<br><h4>2. OTOČKI DEKAMERON – COVID-19 ili KORONAMERON</h4><br>
            Nakon što je većina budućih članova Baštinice sudjelovala tijekom 2016. i 2017. u realizaciji projekta Otočki dekameron, 
            formiranja literarno-književnog kružooka za područje Gacke i platforme za afirmaciju pisaca, koji je rezultirao istoimenom 
            Facebook stranicom s pričama i dvotomnom knjigom od 100 priča desetorice uključenih lokalnih autora dekameronista u nakladi 
            Katedre Čakavskog sabora pokrajine Gacke, neki od sudionika-članova do danas su objavili svoje nove knjige. Također se grupa 
            ponovno zajednički aktivirala nakon pojave globalne pandemije koronavirusa, a pridružili su im se i novi članovi iz drugih 
            sredina, te je u nastajanju Koronameron – zbirka kratkih priča i crtica nastalih u vrijeme karantene i izvanrednih mjera 
            sprječavanja širenja virusa. Na Facebook stranici objavljeno je dosad više od 200 priča.<br><br>";
        break;
        case 7:
            $tekst = "<br><h4>UGRAĐENI U GRAD</h4><br>
            Udruga sudjeluje u projektu „Ugrađeni u grad“. Uključila se je u 2. fazi projekta 2018. i 2019. godine, zajedno s nositeljem 
            projekta Katedrom Čakavskog sabora pokrajine Gacke i Hrvatskim radijem Otočac, u serijal radijskih emisija u kojima je bilo 
            govora o mnogim poznatim Otočanima. Treća faza projekta je u tijeku 
            (finaliziranje opsežnog Priloga za leksikon znamenitih Gačana).<br><br>";
        break;
        case 8:
            $tekst = "<br><h4>BOOK CAFE PARADISO</h4><br>
            Od početka udruga je partner book cafea Paradiso u organizaciji književnih večeri u Otočcu (Alis Marić, Lea Brezar, Ivana Matić, 
            Damir Karakaš, Edo Popović, Tomislav Birtić, Ivana Plechinger, Sanja Toljan, Ingrid Divković, Maja Prović, Tanja Džido, 
            Kenan Crnkić, Dalibor Talajaić, Nataša Jukić…).<br><br>";
        break;
        case 9:
            $tekst = "<br><h4>MREŽA „PLOD“</h4><br>
            Mreža je inicijativa koju je 2018. godine pokrenulo nekoliko neprofitnih udruga i interesnih skupina s područja kulture, 
            turizma i malog poduzetništva. Uz Baštinicu, to su Omladinska udruga Podum, Book cafe Paradiso, Kućna radinost Danijela 
            Tonković, Renata Kostelac i grupa mladih Otočana. Cilj mreže je osnaživanje pojedinaca, interesnih skupina i udruga za 
            aktivno i odgovorno sudjelovanje u društvu, doprinos razvoju civilnog društva te razvoju interkulturalne, višegeneracijske, 
            interdisciplinarne i međuinstitucionalne suradnje na lokalnoj, regionalnoj i nacionalnoj razini. Prvi skup Mreže održan je 
            u travnju 2018., 2. skup u travnju 2019., a termin održavanja 3. Skupa Mreže zbog pandemije koronavirusa pomaknut je s travnja 
            2020. na travanj 2020.<br><br>";
        break;
        case 10:
            $tekst = '<br><h4>PREDAVANJA</h4><br>
            <ul class="list-group list-group-horizontal">
            <li class="list-group-item">
            <b>„Interpretacija baštine - interpretativno vođenje kao jamstvo očuvanja baštine (Kreativni narativi za jačanje destinacijskog 
            brenda – A gdje su te sojenice?)“</b> u sklopu 5. Regionalnog Foruma obiteljskog smještaja za regiju Lika-Karlovac, održanog u GPOU 
            u Otočcu dana 4. svibnja 2019.
            </li>
            <li class="list-group-item">
            <b>„Značaj Japodki i Frankopanki za destinacijsko brendiranje Gacke“</b> u sklopu terenske nastave za studente Edward Bernays visoke 
            škole za komunikacijski menadžment u Zagrebu održane u ŽK Otočac dana 24. svibnja 2019.
            </li>
            <li class="list-group-item">
            <b>„Interpretacija baštine - interpretativno vođenje kao jamstvo očuvanja baštine (Kreativni narativi za jačanje destinacijskog 
            brenda – primjer: glagoljačići)“</b> u sklopu Plenarne sjednice Strukovne grupe kulturnog turizma Županijske komore Otočac u ŽK 
            Otočac dana 21. 11. 2019.
            </li>
            </ul>';
    }
}
?>
<div class="row">
	<div class="col-lg-1"></div>
        <div class="col-lg-6">
            <?php if(!isset($_GET['a']) || $_GET['a'] == 0){ ?>
            <br><h5>Svi projekti:</h5>
            <br><h6><a href="projekti.php?a=1">U POTRAZI ZA FRANKOPANSKIM POSJEDIMA U GACKOJ</a></h6>
            <h6><a href="projekti.php?a=2">CRVENKAPICA NA FORTICI</a></h6>
            <h6><a href="projekti.php?a=3">THE COKLJE FEST</a></h6>
            <h6><a href="projekti.php?a=4">50 POEMS FOR SNOW</a></h6>
            <h6><a href="projekti.php?a=5">GLAGOLJAČIĆ</a></h6>
            <h6><a href="projekti.php?a=6">2. OTOČKI DEKAMERON – COVID-19 ili KORONAMERON</a></h6>
            <h6><a href="projekti.php?a=7">UGRAĐENI U GRAD</a></h6>
            <h6><a href="projekti.php?a=8">BOOK CAFE PARADISO</a></h6>
            <h6><a href="projekti.php?a=9">MREŽA „PLOD“</a></h6>
            <h6><a href="projekti.php?a=10">PREDAVANJA</a></h6><br>
            <?php }else{ echo $tekst.'<br><br><a href="projekti.php?a=0"><--Povratak na sve projekte</a><br><br>'; } ?>
	</div>
    <div class="col-lg-5">
		
	</div>
</div>
	  <footer style="background-color: black; color: white;" class="page-footer font-small pt-4">
	  <div class="container-fluid text-center text-md-left">
		  <div class="col-md-3 mt-md-0 mt-3">
			  <h5>Podnožje</h5>
			  <ul class="list-unstyled">
				  <li><a href="#">Neki linkovi?</a></li>
				  <li><a href="#">Link</a></li>
				  <li><a href="#">Link</a></li>
			  </ul>
		  </div>
		  </div>
		  <br>
	  </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
    <script src="js/jquery-3.4.1.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed --> 
    <script src="js/popper.min.js"></script>
  <script src="js/bootstrap-4.4.1.js"></script>
  <script src="js/bootstrap-4.4.1.js"></script>
  </body>
</html>

