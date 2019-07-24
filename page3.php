<?php
require 'func.php';

$formStatLab="Sprawdź formularz i wyślij";
$imie = $drugieimie = $nazwisko = $pesel2 = $data_ur = /*$zgoda1 = $zgoda2 = $zgoda3 = $zgoda4 =*/ "";
/*$kraj = */$wojewodztwo = $miasto = $ulica = $nrdomu = $nrlokalu = $kodpocztowy = $telefon = $email = "";
$peselStatus = "";


/*
echo "pesel status: $peselStatus<br>";
echo "Imie: $imie<br>";
echo "Nazwisko: $nazwisko<br>";
echo "Pesel: $pesel2<br>";
echo "Rok: $data_ur_rok<br>";
echo "Miesiac: $data_ur_mie<br>";
echo "Dzien: $data_ur_dzi<br>";
echo "Kraj: $kraj<br>";
echo "woj: $wojewodztwo";
*/
 
?>





<!DOCTYPE html>
<html lang="pl">
    <head>
        <title>Ufam - ubezpieczenia komunikacyjne OC/AC</title>
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
                        <label class="naglowek">Ubezpiecznie OC/AC</label>
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
                
            <!-- ---------------------------DANE POJAZDU START ----------------------  -->
                <fieldset><legend>Ubezpieczany pojazd</legend>
                    <label class="formularz">Czy samochód jest zarejestrowany na firmę?</label>
                        <select class="selx" name="ocacRejNaFirme" placeholder="Wybierz jedną odpowiedź" required>
                        <option <?php if(isset($ocacRejNaFirme) and $ocacRejNaFirme == "Tak"){echo " selected";}?>>Tak</option>
                        <option <?php if(isset($ocacRejNaFirme) and $ocacRejNaFirme == "Nie"){echo " selected";}?> default>nie</option>    
                        </select><br>
                    <label class="formularz">Numer rejestracyjny pojazdu:</label>
                        <input type="text" name="ocacNumRej" placeholder="7 znaków" pattern="[^.;()*& -^%$#@!{}\[\]]{7}" title="Numer rejestracyjny powinien zawierać 7 znaków."  size="8" value="<?php echo $ocacNumRej; ?>">
                            <label class="formularz">albo:</label>
                                <input type="checkbox" name="ocacNumRejBrak" value="Nie znam numeru rejestracyjnego."><label class="formularz">Nie znam numeru rejestracyjnego.</label><br>
                    <label class="formularz">Numer VIN:</label>
                        <input type="text" name="ocacNumVin" placeholder="17 znaków" pattern="[A-Z0-9]{17}" title="Numer VIN składający się z 17 znaków."  size="20" value="<?php echo $ocacNumVin; ?>">       
                    <label class="formularz">Rok produkcji samochodu</label>
                        <input type="text" name="ocacRokPro" pattern="[0-9]{4}" placeholder="rok w formacie: RRRR" required value="<?php echo $ocacRokPro; ?>"><br>
                    <label class="formularz">Marka samochodu</label>
                         <input type="text" name="ocacMarSam" placeholder="od 3 do 30 liter" pattern="[^\d.;()*&^%$#@!{}\[\]]{3,30}" title="Marka samochodu powinna zawierać od 3 do 30 liter. Dozwolony jest znak spacji i myślnika." required  size="40" value="<?php echo $ocacMarSam;?>"><br>
                    <label class="formularz">Model samochodu</label>
                        <input type="text" name="ocacModSam" placeholder="od 3 do 30 liter" pattern="[^\d.;()*&^%$#@!{}\[\]]{3,30}" title="Model samochodu powinien zawierać od 3 do 30 liter. Dozwolony jest znak spacji i myślnika." required  size="40" value="<?php echo $ocacModSam;?>"><br>
                    <label class="formularz">Rodzaj paliwa</label>
                        <select class="selx" name="ocacRodPal" placeholder="Wybierz rodzaj paliwa" required>
                        <option <?php if(isset($ocacRodPal) and $ocacRodPal == "Benzyna"){echo " selected";}?>>Benzyna</option>
                        <option <?php if(isset($ocacRodPal) and $ocacRodPal == "Diesel"){echo " selected";}?> default>Diesel</option>
                        <option <?php if(isset($ocacRodPal) and $ocacRodPal == "LPG"){echo " selected";}?>>LPG</option>
                        <option <?php if(isset($ocacRodPal) and $ocacRodPal == "Elektryczny"){echo " selected";}?>>Elektryczny</option>
                        <option <?php if(isset($ocacRodPal) and $ocacRodPal == "Wodór"){echo " selected";}?>>Wodór</option>
                        </select><br>
                    <label class="formularz">Pojemność silnika [cm³]</label>
                        <input type="text" name="ocacPojSil" pattern="[0-9]{2,5}" placeholder="pojemność wyrażona w cm³" required value="<?php echo $ocacPojSil; ?>"><br>
                    <label class="formularz">Liczba drzwi:</label>
                        <select class="selx" name="ocacLicDrz" placeholder="Wybierz liczbę drzwi" required>
                        <option <?php if(isset($ocacLicDrz) and $ocacLicDrz == "2"){echo " selected";}?>>2</option>
                        <option <?php if(isset($ocacLicDrz) and $ocacLicDrz == "3"){echo " selected";}?> default>3</option>
                        <option <?php if(isset($ocacLicDrz) and $ocacLicDrz == "4"){echo " selected";}?>>4</option>
                        <option <?php if(isset($ocacLicDrz) and $ocacLicDrz == "5"){echo " selected";}?>>5</option>
                        </select><br>
                    <label class="formularz">Wersja pojazdu (wyposażenie):</label>
                        <input type="text" name="ocacWerSam" placeholder="od 3 do 30 liter" pattern="[^\d.;()*&^%$#@!{}\[\]]{3,30}" title="Wersja pojazdu powinna zawierać od 3 do 30 liter. Dozwolony jest znak spacji i myślnika." required  size="40" value="<?php echo $ocacWerSam;?>"><br>
                    <label class="formularz">Czy samochod jest zarejestrowany jako ciężarowy?</label>
                        <select class="selx" name="ocacRejCie" placeholder="Wybierz jedną odpowiedź" required>
                        <option <?php if(isset($ocacRejCie) and $ocacRejCie == "Tak"){echo " selected";}?>>Tak</option>
                        <option <?php if(isset($ocacRejCie) and $ocacRejCie == "Nie"){echo " selected";}?> default>Nie</option>    
                        </select><br>
                    <label class="formularz">Którym od nowości wlaścicielem jest obecny wlaściciel?</label>
                        <select class="selx" name="ocacKtoWla" placeholder="Wybierz jedną odpowiedź" required>
                        <option <?php if(isset($ocacKtoWla) and $ocacKtoWla == "1"){echo " selected";}?> default>1</option>
                        <option <?php if(isset($ocacKtoWla) and $ocacKtoWla == "2"){echo " selected";}?>>2</option>
                        <option <?php if(isset($ocacKtoWla) and $ocacKtoWla == "3 i więcej"){echo " selected";}?>>3 i więcej</option> 
                        </select><br>
                    <label class="formularz">Kraj pierwszej rejestracji pojazdu:</label>
                        <input type="text" name="ocacPieRej" placeholder="od 3 do 30 liter" pattern="[^\d.;()*&^%$#@!{}\[\]]{3,30}" title="Kraj pierwszej rejestracji pojazdu powinien zawierać od 3 do 30 liter. Dozwolony jest znak spacji i myślnika." required  size="40" value="<?php echo $ocacPieRej;?>"><br>
                    <label class="formularz">Data pierwszej rejestracji pojazdu:</label>
                        <input type="text" name="ocacDaPiRe" pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" required placeholder="w formacie: RRRR-MM-DD" size="24" title="Data pierwszej rejestracji pojazdu w formacie: RRRR-MM-DD" value="<?php echo $ocacDaPiRe;?>"><br>
                    <label class="formularz">Data rejestracji samochodu przez obecnego wlaściciela:</label>
                        <input type="text" name="ocacDaReWl" pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" required placeholder="w formacie: RRRR-MM-DD" size="24" title="Data rejestracji samochodu przez obecnego wlasciciela w formacie: RRRR-MM-DD" value="<?php echo $ocacDaReWl;?>"><br>
                    <label class="formularz">Data ważności badań technicznych:</label>
                        <input type="text" name="ocacDaBaTe" pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" required placeholder="w formacie: RRRR-MM-DD" size="24" title="Data waznosci badan technicznych w formacie: RRRR-MM-DD" value="<?php echo $ocacDaBaTe;?>"><br>
                    <label class="formularz">Immobilizer:</label>
                        <input type="checkbox" name="ocacImm" value="Immobilizer: tak">
                    <label class="formularz">Blokada skrzyni biegow:</label>
                        <input type="checkbox" name="ocacBlo" value="Blokada skrzyni biegow: tak">
                    <label class="formularz">Alarm:</label>
                        <input type="checkbox" name="ocacAla" value="Alarm: tak">
                    <label class="formularz">Monitoring GPS:</label>
                        <input type="checkbox" name="ocacGps" value="Monitoring GPS: tak"><br>
                    <label class="formularz">Aktualny przebieg w tyś km</label>
                        <input type="text" name="ocacAktPrz" pattern="[0-9]{1,}" placeholder="przebieg w tyś km" required value="<?php echo $ocacAktPrz; ?>"><br>
                    <label class="formularz">Czy samochód posiada jakieś uszkodzenia?</label>
                        <select class="selx" name="ocacUsz" placeholder="Wybierz jedną odpowiedź" required>
                        <option <?php if(isset($ocacUsz) and $ocacUsz == "brak"){echo " selected";}?> default>brak</option>
                        <option <?php if(isset($ocacUsz) and $ocacUsz == "1"){echo " selected";}?>>1</option>
                        <option <?php if(isset($ocacUsz) and $ocacUsz == "2"){echo " selected";}?>>2</option>
                        <option <?php if(isset($ocacUsz) and $ocacUsz == "3 i więcej"){echo " selected";}?>>3 i więcej</option> 
                        </select><br>
                    <label class="formularz">Sposób użytkowania samochodu:</label>
                        <select class="selx" name="ocacSpoUzy" placeholder="Wybierz jedną odpowiedź" required>
                        <option <?php if(isset($ocacSpoUzy) and $ocacSpoUzy == "prywatny"){echo " selected";}?> default>prywatny</option>
                        <option <?php if(isset($ocacSpoUzy) and $ocacSpoUzy == "służbowy"){echo " selected";}?>>służbowy</option>
                        </select><br>
                    <label class="formularz">Ile km przejedzie samochód w ciagu najbliższych 12 miesięcy?</label>
                        <select class="selx" name="ocacKmRo" placeholder="Wybierz jedną odpowiedź" required>
                        <option <?php if(isset($ocacKmRo) and $ocacKmRo == "0 - 5000 km"){echo " selected";}?>>0 - 5000 km</option>
                        <option <?php if(isset($ocacKmRo) and $ocacKmRo == "5000 - 10000 km"){echo " selected";}?>>5000 - 10 000 km</option>
                        <option <?php if(isset($ocacKmRo) and $ocacKmRo == "10 000 - 15 000 km"){echo " selected";}?> default>10 000 - 15 000 km</option>
                        <option <?php if(isset($ocacKmRo) and $ocacKmRo == "powyżej 15 000 km"){echo " selected";}?>>powyżej 15 000 km</option>
                        </select><br>
                    <label class="formularz">Gdzie samochód jest najczęściej parkowany noca?</label>
                        <select class="selx" name="ocacPaNo" placeholder="Wybierz jedną odpowiedź" required>
                        <option <?php if(isset($ocacPaNo) and $ocacPaNo == "ulica"){echo " selected";}?> default>ulica</option>
                        <option <?php if(isset($ocacPaNo) and $ocacPaNo == "parking strzeżony"){echo " selected";}?>>parking strzeżony</option>
                        <option <?php if(isset($ocacPaNo) and $ocacPaNo == "prywatna ogrodzona posesja"){echo " selected";}?>>prywatna ogrodzona posesja</option>
                        <option <?php if(isset($ocacPaNo) and $ocacPaNo == "parking podziemny"){echo " selected";}?>>parking podziemny</option>
                        </select><br>
                    <label class="formularz">Jak długo samochód będzie użytkowany za granicą?</label>
                        <select class="selx" name="ocacUzGr" placeholder="Wybierz jedną odpowiedź" required>
                        <option <?php if(isset($ocacUzGr) and $ocacUzGr == "nie będzie"){echo " selected";}?> default>nie będzie</option>
                        <option <?php if(isset($ocacUzGr) and $ocacUzGr == "1 miesiąc"){echo " selected";}?>>1 miesiąc</option>
                        <option <?php if(isset($ocacUzGr) and $ocacUzGr == "3 miesiące"){echo " selected";}?>>3 miesiące</option>
                        <option <?php if(isset($ocacUzGr) and $ocacUzGr == "ponad pół roku"){echo " selected";}?>>ponad pół roku</option>
                        </select><br>
                </fieldset>
            <!-- --------------------------- DANE POJAZDU KONIEC --------------------- -->    
           <!--    ******DANE PERSONALNE START ********************************************************* -->
            <fieldset><legend>Dane personalne właściciela</legend>
                
                <label class="formularz">Imię głównego właściciela:</label>
                <input type="text" name="imie" placeholder="od 3 do 20 liter" pattern="[^\d.;()*&^%$#@!{}\[\]]{3,20}" required title="Imię powinno zawierać od 3 do 20 liter." size="20" value="<?php echo $imie;?>"> 
                
                <label class="formularz">Nazwisko głównego właściciela:</label>
                <input type="text" name="nazwisko" placeholder="od 3 do 30 liter" pattern="[^\d.;()*&^%$#@!{}\[\]]{3,20}" title="Nazwisko powinno zawierać od 3 do 30 liter. Dozwolony jest znak spacji i myślnika." required  size="30" value="<?php echo $nazwisko;?>">
                <br>
                <label class="formularz">Pesel głównego właściciela:</label>
                <input id="jsPolePesel" type="text" name="pesel2" pattern="[0-9]{11}" placeholder="11 cyfr" title="Numer Pesel wymaga podania ciągu 11 cyfr." size="11" required value="<?php if($peselStatus==1){echo $pesel2;} ?>">
                <?php 
                        if($peselStatus == 0 and $pesel2 != "")
                            {echo "<span class=\"foError\"><< Wprowadź poprawny numer pesel. </span>" ;} 
                    ?>
                <label class="formularz">Nr telefonu głównego właściciela:</label>
                    <input type="text" name="nrtel" pattern="[0-9-]{8,20}" placeholder="od 8 do 20 cyfr" required value="<?php echo $telefon; ?>">
                <label class="formularz">Adres e-mail głównego właściciela:</label>
                    <input type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="poprawny adres e-mail" required  value="<?php echo $email; ?>">
                <label class="formularz">Data urodzenia głównego właściciela:</label>
                    <input type="text" name="data_ur" pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" required placeholder="w formacie: RRRR-MM-DD" size="24" title="Podaj datę urodzin w formacie: RRRR-MM-DD" value="<?php echo $data_ur;?>"><br>
                <label class="formularz">Czy właściciel bedzie kierowal tym autem?</label>
                    <select class="selx" name="ocacWlaKie" placeholder="Wybierz jedną odpowiedź" required>
                        <option <?php if(isset($ocacWlaKie) and $ocacWlaKie == "Tak"){echo " selected";}?> default>Tak</option>
                        <option <?php if(isset($ocacWlaKie) and $ocacWlaKie == "Nie"){echo " selected";}?>>Nie</option>
                        </select><br>
                <label class="formularz">Czy właściel posiada prawo jazdy kategorii B?</label>
                    <select class="selx" name="ocacWlaPra" placeholder="Wybierz jedną odpowiedź" required>
                        <option <?php if(isset($ocacWlaPra) and $ocacWlaPra == "Tak"){echo " selected";}?> default>Tak</option>
                        <option <?php if(isset($ocacWlaPra) and $ocacWlaPra == "Nie"){echo " selected";}?>>Nie</option>
                        </select><br>
                <label class="formularz">Data uzyskania prawa jazdy kategorii B właściciela:</label>
                    <input type="text" name="dataUzPr" pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" required placeholder="w formacie: RRRR-MM-DD" size="24" title="Podaj datę uzyskania prawa jazdy kategorii B właściciela w formacie: RRRR-MM-DD" value="<?php echo $dataUzPr;?>"><br>
                <label class="formularz">Kod pocztowy z adresu zamieszkania właściela:</label>
                    <input type="text" name="ocackodPocztowy" pattern="^[0-9]{2}-[0-9]{3}$" placeholder="XX-XXX" title="Kod pocztowy powinien składać się z 2 cyfr myślnika i kolejnych 3 cyfr." size="15" required value="<?php echo $ocackodPocztowy; ?>"><br>
                <label class="formularz">Miejscowość:</label>
                    <input type="text" name="ocacMiejs" placeholder="od 3 do 40 liter" pattern="[^\d.;()*&^%$#@!{}\[\]]{3,40}" title="Nazwa miejscowości powinna zawierać od 3 do 40 liter. Dozwolony jest znak spacji i myślnika." required  size="40" value="<?php echo $ocacMiejs; ?>"><br>
                <label class="formularz">Czy adres zameldowania jest taki sam jak zamieszkania?</label>
                    <select class="selx" name="ocacZameq" placeholder="Wybierz jedną odpowiedź" required>
                        <option <?php if(isset($ocacZameq) and $ocacZameq == "Tak"){echo " selected";}?> default>Tak</option>
                        <option <?php if(isset($ocacZameq) and $ocacZameq == "Nie"){echo " selected";}?>>Nie</option>
                        </select><br>
                <label class="formularz">Pleć właścicela:</label>
                    <select class="selx" name="ocacPlWla" placeholder="Wybierz jedną odpowiedź" required>
                        <option <?php if(isset($ocacPlWla) and $ocacPlWla == "Kobieta"){echo " selected";}?> default>Kobieta</option>
                        <option <?php if(isset($ocacPlWla) and $ocacPlWla == "Mężczyzna"){echo " selected";}?>>Mężczyzna</option>
                        </select><br>
                <label class="formularz">Stan cywilny właściciela:</label>
                    <select class="selx" name="ocacStCy" placeholder="Wybierz jedną odpowiedź" required>
                        <option <?php if(isset($ocacStCy) and $ocacStCy == "panna/kawaler"){echo " selected";}?> default>panna/kawaler</option>
                        <option <?php if(isset($ocacStCy) and $ocacStCy == "zamężna/żonaty"){echo " selected";}?>>zamężna/żonaty</option>
                        </select><br>
                <label class="formularz">Czy wlasciciel posiada dzieci w wieku ponizej 26 lat?</label>
                    <select class="selx" name="ocacDzieci" placeholder="Wybierz jedną odpowiedź" required>
                        <option <?php if(isset($ocacDzieci) and $ocacDzieci == "Tak"){echo " selected";}?> default>Tak</option>
                        <option <?php if(isset($ocacDzieci) and $ocacDzieci == "Nie"){echo " selected";}?>>Nie</option>
                    </select><br>
                    <label class="formularz">Jeśli tak, podaj liczbę dzieci oraz ich wiek:</label><br>
                         <textarea rows="2" cols="50" name="ocacDzieciSz" value="<?php echo $ocacDzieciSz; ?>"></textarea> 
                            <br>
                <label class="formularz">Zawod wykonywany przez właściciela:</label>
                    <input type="text" name="ocacZaWl" placeholder="od 3 do 40 liter" pattern="[^\d.;()*&^%$#@!{}\[\]]{3,40}" title="Nazwa zawodu powinna zawierać od 3 do 40 liter. Dozwolony jest znak spacji i myślnika." required  size="40" value="<?php echo $ocacZaWl; ?>"><br>
                <label class="formularz">Ilu współwlaścicieli posiada pojazd?</label>
                    <select class="selx" name="ocacIluWsp" placeholder="Wybierz jedną odpowiedź" required>
                        <option <?php if(isset($ocacIluWsp) and $ocacIluWsp == "0"){echo " selected";}?> default>0</option>
                        <option <?php if(isset($ocacIluWsp) and $ocacIluWsp == "1"){echo " selected";}?>>1</option>
                        <option <?php if(isset($ocacIluWsp) and $ocacIluWsp == "2 i więcej"){echo " selected";}?>>2 i więcej</option>
                        </select><br>
                <input type="checkbox" name="ocacPolPry" value=">Zgadzam sie na politykę prywatności wszystkich obsługiwanych TU: tak.">
                <label class="formularz">Zgadzam sie na politykę prywatności wszystkich obsługiwanych TU</label>
                            
                            <fieldset class="wew"><legend>Dodatkowi kierowcy</legend>
                                <label class="formularz">Czy beda dodatkowi kierowcy młodsi od wymienionych lub posiadający prawo jazdy krócej niż 3 lata:</label>
                                    <select class="selx" name="ocacDodKie" placeholder="Wybierz jedną odpowiedź" required>
                                        <option <?php if(isset($ocacIluWsp) and $ocacIluWsp == "nie, nie bedzie"){echo " selected";}?> default>nie, nie bedzie</option>
                                        <option <?php if(isset($ocacIluWsp) and $ocacIluWsp == "tak jeden"){echo " selected";}?>>tak jeden</option>
                                        <option <?php if(isset($ocacIluWsp) and $ocacIluWsp == "tak, dwóch lub więcej"){echo " selected";}?>>tak, dwóch lub więcej</option>
                                        </select><br>
                            </fieldset>
                            <fieldset class="wew"><legend>Pytania dotyczace ubezpieczenia wlaściciela</legend>
                                <label class="formularz">Od ilu lat wlasciciel kupuje polisy OC dla swoich pojazdow?</label>
                                    <select class="selx" name="ocacLatPol" placeholder="Wybierz jedną odpowiedź" required>
                                        <option <?php if(isset($ocacLatPol) and $ocacLatPol == "1"){echo " selected";}?> default>1</option>
                                        <option <?php if(isset($ocacLatPol) and $ocacLatPol == "2"){echo " selected";}?>>2</option>
                                        <option <?php if(isset($ocacLatPol) and $ocacLatPol == "3"){echo " selected";}?>>3</option>
                                        <option <?php if(isset($ocacLatPol) and $ocacLatPol == "4"){echo " selected";}?>>4</option>
                                        <option <?php if(isset($ocacLatPol) and $ocacLatPol == "5"){echo " selected";}?>>5</option>
                                        <option <?php if(isset($ocacLatPol) and $ocacLatPol == "6"){echo " selected";}?>>6</option>
                                        <option <?php if(isset($ocacLatPol) and $ocacLatPol == "7"){echo " selected";}?>>7</option>
                                        <option <?php if(isset($ocacLatPol) and $ocacLatPol == "8"){echo " selected";}?>>8</option>
                                        <option <?php if(isset($ocacLatPol) and $ocacLatPol == "9"){echo " selected";}?>>9</option>
                                        <option <?php if(isset($ocacLatPol) and $ocacLatPol == "10"){echo " selected";}?>>10</option>
                                        </select><br>
                                <label class="formularz">Od kiedy potrzebujesz ubezpieczenia?</label>
                                    <input type="text" name="ocacDatUbe" pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" required placeholder="w formacie: RRRR-MM-DD" size="24" title="Podaj datę od kiedy potrzebujesz ubezpieczenia w formacie: RRRR-MM-DD" value="<?php echo $ocacDatUbe;?>"><br>
                            </fieldset>   
                
                
                
                
                
              
            </fieldset>
            <!-- -------------------------- DANE PERSONALNE KONIEC -------------------  -->


               
            
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