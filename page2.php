<?php
require 'func.php';

$formStatLab="Sprawdź formularz i wyślij";
$imie = $drugieimie = $nazwisko = $pesel2 = $data_ur = /*$zgoda1 = $zgoda2 = $zgoda3 = $zgoda4 =*/ "";
/*$kraj = */$wojewodztwo = $miasto = $ulica = $nrdomu = $nrlokalu = $kodpocztowy = $telefon = $email = "";
$peselStatus = "";


echo "pesel status: $peselStatus<br>";
echo "Imie: $imie<br>";
echo "Nazwisko: $nazwisko<br>";
echo "Pesel: $pesel2<br>";
echo "Rok: $data_ur_rok<br>";
echo "Miesiac: $data_ur_mie<br>";
echo "Dzien: $data_ur_dzi<br>";
echo "Kraj: $kraj<br>";
echo "woj: $wojewodztwo";
 
?>





<!DOCTYPE html>
<html lang="pl">
    <head>
        <title>Ufam - ubezpieczenia życia i zdrowia</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
         <script type="text/javascript" src="pesel_validation.js"></script>
        <link rel="stylesheet" href="styles.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    </head>
    <body>
        <nav>
            <ul class="topnav" id="dropdownClick">
                <li><a href="index.html">wróć do strony głównej</a></li>
                <li class="topnav-right"><a href="kontakt.html">Kontakt</a></li>
                <li class="dropdownicon"><a href="javascript:void(0);" onclick="dropdownMenu()">&#9776;</a></li>
            </ul>
        </nav>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="box-horizontal" id="box-color1">
                        <label class="naglowek">Ubezpiecznie życia i zdrowia</label>
                    </div>
                </div>
            </div>
            <form class="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <div class="row">
                <div class="col-12">
                    <p class="informacja">Do przygotowania najlepszej oferty ubezpieczenia on-line przez Ufam - Ubezpieczenia dopasowanej do potrzeb indywidulanego klienta niezbędne jest wyrażenie zgody na przetwarzanie danych w sekcji: "OŚWIADCZENIE DOTYCZĄCE PRZETWARZANIA DANYCH OSOBOWYCH" - punkty od 1 do 4 oraz podanie wymaganych danych osobowych w kolejnych sekcjach formularza.</p>
                    <p class="informacja">Jeśli nie wyraża Pan/Pani takiej zgody zapraszamy do skorzystania z naszej oferty poprzez <a href="kontakt.html">kontakt telefoniczny</a> lub wizytę w <a href="kontakt.html">naszym biurze</a>.
                    <a href="kontakt.html"><button class="button-break" type="button">Kontakt z biurem Ufam - ubezpieczenia</button></a>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                
                    <fieldset><legend>OŚWIADCZENIE DOTYCZĄCE PRZETWARZANIA DANYCH OSOBOWYCH</legend>
                    <ol class="zgoda-tresc">
                        <li>Wyrażam zgodę, aby moje dane osobowe były przetwarzane przez <b>FINANSE I UBEZPIECZENIA Joanna Murzyn</b>, w celach marketingowych, w tym poprzez profilowanie w celu określenia preferencji lub wymagań i potrzeb w zakresie produktów ubezpieczeniowych i innych produktów finansowych oraz w celu przedstawienia oferty.<br>
                            <input type="checkbox" name="zgoda1" class="zgoda-hak" autofocus required <?php if(isset ($zgoda1)) echo "checked"; ?> ><b>Wyrażam zgodę </b>(pole wymagane)</li>
                        <li>Wyrażam zgodę na otrzymywanie od <b>FINANSE I UBEZPIECZENIA Joanna Murzyn</b>, informacji handlowej drogą elektroniczną, przy wykorzystaniu podanego adresu email lub wiadomości MMS/SMS na podany numer telefonu, w oparciu o art. 10 Ustawy z 18 lipca 2002r., o świadczeniu usług drogą elektroniczną.<br>
                            <input class="zgoda-hak" type="checkbox" name="zgoda2" required <?php if(isset ($zgoda2)) echo "checked"; ?>><b>Wyrażam zgodę </b>(pole wymagane)</li>
                        <li>Wyrażam zgodę na używanie telekomunikacyjnych urządzeń końcowych  i automatycznych systemów wywołujących dla celów marketingu bezpośredniego przez <b>FINANSE I UBEZPIECZENIA Joanna Murzyn</b>, przy wykorzystaniu podanego numeru telefonu lub adresu email, w oparciu o art. 172 Ustawy z dnia 16 lipca 2004r., Prawo telekomunikacyjne.<br>
                            <input class="zgoda-hak" type="checkbox" name="zgoda3" required <?php if(isset ($zgoda3)) echo "checked"; ?>><b>Wyrażam zgodę </b>(pole wymagane)</li>
                        <li>
                        <p class="zgoda-naglowek2">INFORMACJA ADMINISTRATORA DANYCH OSOBOWYCH</p>
                        <div class="ofy">
                            <ol class="zgoda-tresc2">
                                <li>Administrator i dane kontaktowe administratora oraz Inspektora Ochrony Danych.<br><br>
                                    Administratorem danych osobowych jest <b>FINANSE I UBEZPIECZENIA Joanna Murzyn</b>, adres do korespondencji: <b>11-001 Dywity</b>, ul Okrągła 7. Kontakt z administratorem jest możliwy za pośrednictwem adresu e-mail: <b>finanseiubezpieczenia.murzyn@wp.pl</b> ,telefonicznie pod numerem: <b>516737941</b> lub pisemnie na wyżej wskazany adres do korespondencji. We wszystkich sprawach z zakresu ochrony danych osobowych, w tym korzystania z praw związanych z przetwarzaniem danych, może Pani/Pan kontaktować się z wyznaczonym przez administratora Inspektorem Ochrony Danych Osobowych. Taki kontakt może się odbyć drogą elektroniczną na adres e-mail <b>finanseiubezpieczenia.murzyn@wp.pl</b> lub pisemnie na adres <b>11-001 Dywity, ul Okrągła 7</b>.</li> 
                                <li>Cel przetwarzania danych osobowych oraz podstawa prawna przetwarzania.<br><br>
                                    <b>FINANSE I UBEZPIECZENIA Joanna Murzyn</b> może przetwarzać Pani/Pana dane w celu:
                                        <ol type="a">
                                    <li>przedstawienia oferty marketingowej produktu ubezpieczeniowegoz oferty współpracujących z <b>FINANSE I UBEZPIECZENIA Joanna Murzyn</b> zakładów ubezpieczeń –podstawę do przetwarzania stanowi dobrowolna zgoda na przetwarzanie Pani/Pana danych osobowych, w rozumieniu art. 6 ust. 1 pkt a Rozporządzania Parlamentu Europejskiego i Rady (UE) 2016/679 z dnia 27 kwietnia 2016r. w sprawie ochrony osób fizycznych w związku z przetwarzaniem danych osobowych i w sprawie swobodnego przepływu takich danych oraz uchylenia dyrektywy 95/46/WE (ogólne rozporządzenie o ochronie danych) (Dz.Urz. UE L 119 z 4.05.2016, str. 1) –dalej „RODO”. 
                                            </li><li>marketingu bezpośredniego usług własnych zakładu ubezpieczeń, z którym ma Pan/Pani zawartą zapośrednictwem <b>FINANSE I UBEZPIECZENIA Joanna Murzyn</b> umowę ubezpieczenia lub innych usług <b>FINANSE I UBEZPIECZENIA Joanna Murzyn</b> –podstawę do przetwarzania stanowi niezbędność przetwarzania do realizacji celu wynikającego z prawnie uzasadnionego interesu administratora w rozumieniu art. 6 ust. 1 pkt f RODO, którym jest marketing usług własnych tego zakładu ubezpieczeń, na podstawie powierzonego <b>FINANSE I UBEZPIECZENIA Joanna Murzyn</b> zakresu przetwarzania danych osobowych przez ten zakład ubezpieczeń oraz marketing usług własnych <b>FINANSE I UBEZPIECZENIA Joanna Murzyn</b>
                                    </li><li>zawarcia i wykonania umowy ubezpieczenia, w tym dokonania oceny ryzyka ubezpieczeniowego - podstawą prawną przetwarzania jest niezbędnośćprzetwarzania danych do podjęcia działań na żądanie osoby, której dane dotyczą niezbędnych do zawarcia umowy (np. na potrzeby wniosku o zawarcie umowy ubezpieczenia) i wykonywania umowy, w rozumieniu art. 6 ust. 1 pkt b RODO, na podstawie powierzonego <b>FINANSE I UBEZPIECZENIA Joanna Murzyn</b> zakresu przetwarzania danych osobowych przez współpracujący zakład ubezpieczeń.
                                    </li><li>oceny ryzyka ubezpieczeniowego w sposób zautomatyzowany w ramach profilowania klientów przedzawarciem umowy - podstawą prawnąprzetwarzania jest niezbędność przetwarzania do realizacji prawnego obowiązku ciążącego na zakładzie ubezpieczeń, w rozumieniu art. 6 ust. 1 pkt c RODO, na podstawie powierzonego <b>FINANSE I UBEZPIECZENIA Joanna Murzyn</b> zakresu przetwarzania danych osobowych przez współpracujący zakład ubezpieczeń.
                                    </li><li>wypełnienia obowiązków wynikającychz ustawy o rachunkowości - podstawą prawną przetwarzania danych jest niezbędność przetwarzania do wypełnienia obowiązku prawnego ciążącego na <b>FINANSE I UBEZPIECZENIA Joanna Murzyn</b>, w rozumieniu art. 6 ust. 1 pkt c RODO. 
                                    </li><li>w celach analitycznych, w tym profilowania na potrzeby monitorowania i analiz oferty produktówubezpieczeniowych współpracujących z <b>FINANSE I UBEZPIECZENIA Joanna Murzyn</b> zakładów ubezpieczeń, w celu zapewnienia możliwości zaproponowania produktu najbardziej dostosowanego do wymagań i potrzeb osoby poszukującej ochrony ubezpieczeniowej –podstawę przetwarzania stanowi niezbędność do realizacji celu wynikającego z prawnie uzasadnionego interesu realizowanego przez administratora, jakim jest proponowanie klientowi produktu najbardziej odpowiedniego do wymagań i potrzeb klienta, w rozumieniu art. 6 ust. 1 pkt f RODO oraz docelowo także niezbędność przetwarzania do wypełnienia obowiązku prawnego ciążącego na administratorze , w rozumieniu art. 6 ust. 1 pkt c RODO, w ramach realizacji art. 8 ust. 1 i ust. 3 Ustawy z 15 grudnia 2017r. o dystrybucji ubezpieczeń (Dz.U. z 2017 r. poz. 2486),wprowadzającej obowiązek ustalenia wymagań i potrzeb osoby poszukującej ochrony oraz przedstawienia produktu odpowiedniego do tych wymagań i potrzeb. 
                                    </li><li>ewentualnie w celu dochodzenia roszczeń lub w ramach obrony przed dochodzonymi roszczeniami, związanych z przedstawioną Pani/Panu ofertą produktu ubezpieczeniowego – podstawą prawną przetwarzania danych jest niezbędność przetwarzania do realizacji prawnie uzasadnionego interesu administratora; jakim jest zapewnienie możliwość dochodzenia oraz obrony przed roszczeniami, w rozumieniu art. 6 ust. 1 pkt f RODO.
                                    </li></ol>
                                    </li>


                                    <li> Informacja o zautomatyzowanym podejmowaniu decyzji, w tym profilowaniu.<br><br> 
                                    W związku z przetwarzaniem Pani/Pana danych osobowych, decyzje dotyczące Pani/Pana będąpodejmowane w sposób zautomatyzowany (bez wpływu człowieka). Decyzje te będą dotyczyły wysokości składki ubezpieczeniowej. Decyzje będąpodejmowane na podstawie Pani /Pana danych obejmujących w szczególności imię i nazwisko, numeru PESEL, data urodzenia, miejsce zamieszkania). Decyzje będą oparte o profilowanie, tj. automatyczną ocenę ryzyka ubezpieczeniowego zawarcia z Panią/Panem umowy ubezpieczenia.  
                                    </li><li>
                                    Informacja o wymogu podania danych osobowych. <br><br>

                                    Podanie danych osobowych w związku z zawieraną umową jest konieczne do zawarcia i wykonywania umowy ubezpieczenia oraz do dokonania oceny ryzyka ubezpieczeniowego - bez podania danych osobowych nie jest możliwe zawarcie umowy ubezpieczenia oraz dokonanie oceny ryzyka. 
                                    Podanie danych osobowych w celach marketingowych jest dobrowolne. 
                                    </li><li>
                                    Okres przechowywania danych. <br><br>
                                    Pani/Pana dane osobowe będą przechowywane do momentu przedawnienia roszczeń lub do momentu wygaśnięcia obowiązku przechowywania danych wynikającego z przepisów prawa.
                                    Administrator przestanie wcześniej przetwarzaćdane wykorzystywane do celów profilowania i analitycznych jeżeli zgłosi Pani/Pan sprzeciw wobec przetwarzania Pani/Pana danych w tych celach. 
                                    </li><li>
                                    Przekazywanie danych.<br><br> 
                                    <ol type="a">
                                    <li>Pani/Pana dane osobowe mogą być udostępnione podmiotom i organom upoważnionym do przetwarzania tych danych na podstawie przepisów prawa oraz zakładom ubezpieczeń współpracującym z <b>FINANSE I UBEZPIECZENIA Joanna Murzyn oraz do Unilink S.A.</b>, jako agenta ubezpieczeniowego (w ramach pośrednictwa ubezpieczeniowego). 
                                    </li><li>Pani/Pana dane osobowe mogą być przekazywane podmiotom przetwarzającym dane osobowe na zlecenie administratora, tj. dostawcom usług IT lub współpracującym z <b>FINANSE I UBEZPIECZENIA Joanna Murzyn</b> partnerom, w ramach wykonywania przez nich czynności agencyjnych, przy czym takie podmioty przetwarzają dane na podstawie umowy z administratorem i wyłącznie zgodnie z poleceniami administratora. 
                                    </li><li>Pani/Pana dane osobowe nie będąprzekazywane do odbiorców mających siedzibę lub przetwarzających dane osobowe w państwach poza Europejskim Obszarem Gospodarczym (EOG). 
                                    </li></ol></li><li>
                                    Pani/Pana prawa. 

                                    <ol type="a">
                                    <li>Przysługuje Pani/Panu prawo dostępu do swoich danych osobowych oraz prawo żądania ich sprostowania, ich usunięcia lub ograniczenia ich przetwarzania. 
                                    </li><li>W zakresie, w jakim podstawąprzetwarzania Pani/Pana danych osobowych jest zgoda, ma Pani/Pan prawo wycofania zgody. Wycofanie zgody nie ma wpływu na zgodnośćz prawem przetwarzania, którego dokonano na podstawie zgody przed jej wycofaniem.
                                    </li><li>W zakresie, w jakim podstawą przetwarzania Pani/Pana danych osobowych jest przesłanka niezbędności przetwarzania do realizacji celu wynikającego z prawnie uzasadnionego interesu administratora, przysługuje Pani/Panu prawo wniesienia sprzeciwu wobec przetwarzania Pani/Pana danych osobowych. W szczególności przysługuje Pani/Panu prawo sprzeciwu wobec przetwarzania danych na potrzeby profilowania. 
                                    </li><li>W zakresie, w jakim Pani/Pana dane są przetwarzane w celu zawarcia i wykonywania umowy ubezpieczenia lub przetwarzane na podstawie zgody - przysługuje Pani/Panu także prawo do przenoszenia danych osobowych, tj. do otrzymania od administratora Pani/Pana danych osobowych, w ustrukturyzowanym, powszechnie używanym formacie nadającym się do odczytu maszynowego. Może Pani/Pan przesłać te dane innemu administratorowi danych. 
                                    </li><li>W związku ze zautomatyzowanym podejmowaniem decyzji, ma Pani/Pan prawo do zakwestionowania tej decyzji, prawo do wyrażenia własnego stanowiska oraz wystąpienia o ponowne przeanalizowanie 
                                        Pani/Pana sprawy i podjęcie decyzji przez pracownika zakładu ubezpieczeńwspółpracującego z <b>FINANSE I UBEZPIECZENIA Joanna Murzyn</b>.
                                    </li><li>Przysługuje Pani/Panu prawo wniesienia skargi do organu nadzorczego zajmującegosię ochroną danych osobowych w Polsce (Prezesa Urzędu Ochrony Danych Osobowych).
                                        </li></ol>
                                    W celu skorzystania z powyższych praw należy skontaktować się z administratorem lub z Inspektorem Ochrony Danych, korzystając ze wskazanych wyżej danych kontaktowych lub bezpośrednio z organem nadzorczym (w zakresie prawa do wniesienia skargi do tego organu).
                                        </li></ol></div>
                               <input class="zgoda-hak" type="checkbox" name="zgoda4" required <?php if(isset ($zgoda4)) echo "checked"; ?>><b>Zapoznałem/Zapoznałam się z: "Informacja Administratora danych osobowych." </b>(pole wymagane) </li>
                    </ol></fieldset>
                </div>
            </div>
            <!--    *************************************************************** -->
            <fieldset><legend>Dane personalne</legend>
                
                <label class="formularz">Imię:</label>
                <input type="text" name="imie" placeholder="od 3 do 20 liter" pattern="[^\d.;()*&^%$#@!{}\[\]]{3,20}" required title="Imię powinno zawierać od 3 do 20 liter." size="20" value="<?php echo $imie;?>"> 
                
                <label class="formularz">Drugie imię:</label>
                <input type="text" name="drugieimie" placeholder="jeśli wprowadzone: od 3 do 20 liter" pattern="[^\d.;()*&^%$#@!{}\[\]]{3,20}" title="Imię powinno zawierać od 3 do 20 liter. To pole nie jest wymagane." size="24" value = "<?php if(isset ($drugieimie)) echo $drugieimie; ?>">
                
                <label class="formularz">Nazwisko:</label>
                <input type="text" name="nazwisko" placeholder="od 3 do 30 liter" pattern="[^\d.;()*&^%$#@!{}\[\]]{3,20}" title="Nazwisko powinno zawierać od 3 do 30 liter. Dozwolony jest znak spacji i myślnika." required  size="30" value="<?php echo $nazwisko;?>">
                <br>
                <label class="formularz">Pesel: 
                    
                </label>
                <input id="jsPolePesel" type="text" name="pesel2" pattern="[0-9]{11}" placeholder="11 cyfr" title="Numer Pesel wymaga podania ciągu 11 cyfr." size="11" required value="<?php if($peselStatus==1){echo $pesel2;} ?>">
                <?php 
                        if($peselStatus == 0 and $pesel2 != "")
                            {echo "<span class=\"foError\"><< Wprowadź poprawny numer pesel. </span>" ;} 
                    ?>
                <label class="formularz">Data urodzenia:</label>
                <input type="text" name="data_ur" pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" required placeholder="w formacie: RRRR-MM-DD" size="24" title="Podaj datę urodzin w formacie: RRRR-MM-DD" value="<?php echo $data_ur;?>">
                <fieldset class="wew"><legend>Adres/Kontakt</legend>
                    <label class="formularz">Kraj:</label>
                    <input type="text" name="kraj" placeholder="od 3 do 30 liter" pattern="[^\d.;()*&^%$#@!{}\[\]]{3,30}" required title="Nazwa kraju powinna zawierać od 3 do 30 liter." size="30" value="<?php if(isset ($kraj)){echo $kraj;} else {echo "Polska";} ?>"> 
                    
                    <label class="formularz">Województwo:</label>
                    <select class="selx" name="wojewodztwo" placeholder="Województwo" required>
                        <option>Wybierz</option>
                        <option <?php if(isset($wojewodztwo) and $wojewodztwo == "Dolnośląskie"){echo " selected";}?>>Dolnośląskie</option>
                        <option <?php if(isset($wojewodztwo) and $wojewodztwo == "Kujawsko-Pomorskie"){echo " selected";}?>>Kujawsko-Pomorskie</option>
                        <option <?php if(isset($wojewodztwo) and $wojewodztwo == "Lubelskie"){echo " selected";}?>>Lubelskie</option>
                        <option <?php if(isset($wojewodztwo) and $wojewodztwo == "Lubuskie"){echo " selected";}?>>Lubuskie</option>
                        <option <?php if(isset($wojewodztwo) and $wojewodztwo == "Łódzkie"){echo " selected";}?>>Łódzkie</option>
                        <option <?php if(isset($wojewodztwo) and $wojewodztwo == "Małopolskie"){echo " selected";}?>>Małopolskie</option>
                        <option <?php if(isset($wojewodztwo) and $wojewodztwo == "Mazowieckie"){echo " selected";}?>>Mazowieckie</option>
                        <option <?php if(isset($wojewodztwo) and $wojewodztwo == "Opolskie"){echo " selected";}?>>Opolskie</option>
                        <option <?php if(isset($wojewodztwo) and $wojewodztwo == "Podkarpackie"){echo " selected";}?>>Podkarpackie</option>
                        <option <?php if(isset($wojewodztwo) and $wojewodztwo == "Podlaskie"){echo " selected";}?>>Podlaskie</option>
                        <option <?php if(isset($wojewodztwo) and $wojewodztwo == "Pomorskie"){echo " selected";}?>>Pomorskie</option>
                        <option <?php if(isset($wojewodztwo) and $wojewodztwo == "Śląskie"){echo " selected";}?>>Śląskie</option>
                        <option <?php if(isset($wojewodztwo) and $wojewodztwo == "Świętokrzyskie"){echo " selected";}?>>Świętokrzyskie</option>
                        <option <?php if(isset($wojewodztwo) and $wojewodztwo == "Warmińsko-Mazurskie"){echo " selected";}?>>Warmińsko-Mazurskie</option>
                        <option <?php if(isset($wojewodztwo) and $wojewodztwo == "Wielkopolskie"){echo " selected";}?>>Wielkopolskie</option>
                        <option <?php if(isset($wojewodztwo) and $wojewodztwo == "Zachodniopomorskie"){echo " selected";}?>>Zachodniopomorskie</option>
                        <option <?php if(isset($wojewodztwo) and $wojewodztwo == "nie dotyczy"){echo " selected";}?>>nie dotyczy</option>
                    </select>
                    
                    <label class="formularz">Miasto:</label>
                    <input type="text" name="miasto" placeholder="od 3 do 40 liter" pattern="[^\d.;()*&^%$#@!{}\[\]]{3,40}" title="Nazwa miasta powinna zawierać od 3 do 40 liter. Dozwolony jest znak spacji i myślnika." required  size="40" value="<?php echo $miasto; ?>">
                    <br>
                    <label class="formularz">Ulica:</label>
                    <input type="text" name="ulica" placeholder="od 3 do 40 liter i cyfr" pattern="[^.;()*&^%$#@!{}\[\]]{3,40}" title="Nazwa ulicy powinna zawierać od 3 do 40 liter i cyfr. Dozwolony jest znak spacji i myślnika." required  size="40" value="<?php echo $ulica; ?>">
                    
                    <label class="formularz">Nr domu:</label>
                    <input type="text" name="numerdomu" pattern="[0-9]{1,4}" placeholder="maks. 4 cyfry" size="10" title="Numer domu powinien zawierać maks. 4 cyfry." required value="<?php echo $nrdomu; ?>">
                    
                    <label class="formularz">Nr lokalu:</label>
                    <input type="text" name="numerlokalu" pattern="[0-9]{1,4}" placeholder="maks. 4 cyfry" title="Numer lokalu powinien zawierać maks. 4 cyfry." size="10" value="<?php echo $nrlokalu; ?>">
                    
                    <label class="formularz">Kod pocztowy:</label>
                    <input type="text" name="kodpocztowy" pattern="^[0-9]{2}-[0-9]{3}$" placeholder="XX-XXX" title="Kod pocztowy powinien składać się z 2 cyfr myślnika i kolejnych 3 cyfr." size="15" required value="<?php echo $kodpocztowy; ?>">
                    <br>
                    <label class="formularz">Nr telefonu:</label>
                    <input type="text" name="nrtel" pattern="[0-9-]{8,20}" placeholder="od 8 do 20 cyfr" required value="<?php echo $telefon; ?>">
                    
                    <label class="formularz">Adres e-mail:</label>
                    <input type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="poprawny adres e-mail" required  value="<?php echo $email; ?>">
                </fieldset>
            </fieldset>             
            <div class="row">
                <div class="col-12">
                    <input id="btn-send" type="submit" value="<?php echo $formStatLab;?>" class="button"><br><br>
                </div>
            </div>
                
 </form>
       
<!-- https://webdesign.tutsplus.com/tutorials/html5-form-validation-with-the-pattern-attribute--cms-25145 -->
        
        <!-- http://kursjs.pl/kurs/regular.php -->
            
            <!-- http://www.webmaster.org.pl/administracja/wyrazenia-regularne.html -->
<!--              
<div>
    <button class="button button-primary button-big" id="buttonTest" type="button">Wpierw podepnij zdarzenie!</button>

    <button class="button" id="buttonTestAdd" type="button">Podepnij zdarzenie</button>

    <button class="button" id="buttonTestRemove" type="button">Odepnij zdarzenie</button>

    <button class="button" id="buttonTestClick" type="button">Kliknij na dużym przycisku</button>
    
    <button class="button" id="sprPesel" type="button">Sprawdz pesel</button>
</div>   
-->             

        
        <footer class="footsy">
            <div class="row">
                <div class="col-4"></div>
                <h1 class="foot">Ufam</h1>
                <h2 class="foot">ubezpieczenia</h2>
                <ul>
                    <li><a href="page1.html">Ubezpiecznie życia i zdrowia</a></li>
                    <li>Ubezpiecznie mieszkania i domu</li>
                    <li>Ubezpiecznie OC/AC</li>
                    <li>Ubezpiecznie turystyczne</li>
                    <li><a href="kontakt.html">Kontakt</a></li>
                </ul>
                <div class="col-4"></div>
            </div>
        </footer>  
        
        
        <script>
            function dropdownMenu(){
                var x = document.getElementById("dropdownClick");
                if (x.className === "topnav"){
                    x.className += " responsive";
                    /* change topnav to topnav.responsive*/
                } else {
                    x.className = "topnav";
                }
            }
            /*----------------------------------------------------------------*/
            //document.addEventListener("DOMContentLoaded", function() {
            //const numer_pesel = document.getElementById('js_numer_pesel');
            //console.log(btn_send.innerText); //Kliknij mnie
                
            //1. Pobieram elementy
//const buttonTest = document.querySelector('#buttonTest');
  //    buttonTest.dataset.text = 'To jest tekst do wypisania';

//const buttonAdd =  document.querySelector('#buttonTestAdd');
//const buttonRemove =  document.querySelector('#buttonTestRemove');
//const buttonClick =  document.querySelector('#buttonTestClick');
//const buttonPesel =  document.querySelector('#sprPesel');
const testPesel = document.querySelector('#jsPolePesel');
            //console.log("test");
            //console.log(testPesel);


//2. Podpinam eventy
//function showText() {
//    alert(this.dataset.text);
//}

function wazneRzeczy() {
    //alert(testPesel.value);
    var wynikTestuPesel = 0;
    if (validatePesel(testPesel.value) == true){
            wynikTestuPesel = " poprawny."
        }
        else {
            wynikTestuPesel = " błędny."
        }
    //alert("Podany numer Pesel: " + testPesel.value + " jest " +  validatePesel(testPesel.value));
    alert("Podany numer Pesel: \"" + testPesel.value + "\" jest" +  wynikTestuPesel);
}

//function addTestEvent() {
//    buttonTest.innerText = 'No dobra. Można klikać!';
//    buttonTest.addEventListener('click', showText);
//}

//function removeTestEvent() {
//    buttonTest.innerText = 'Wpierw podepnij zdarzenie!';
//    buttonTest.removeEventListener('click', showText);
//}

//function clickOnBtn() {
//    buttonTest.click();
//}

document.addEventListener("DOMContentLoaded", function() {
    //buttonAdd.addEventListener('click', addTestEvent);
    //buttonRemove.addEventListener('click', removeTestEvent);
    //buttonClick.addEventListener('click', clickOnBtn);
    testPesel.addEventListener('blur', wazneRzeczy);
});    
                
                
           // });        
        </script>
    </body>
</html>