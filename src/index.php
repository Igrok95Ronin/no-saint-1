<?php
$site_data      = json_decode(file_get_contents('http://local.jquery.link/api/' . $_SERVER['HTTP_HOST']), true);

$phone_name     = $site_data['phone_name'];
$phone_href     = $site_data['phone_href'];

$text           = str_replace('+', ' ', trim($_GET['t'] ?? 'Rørlegger'));
$city           = str_replace('+', ' ', trim($_GET['n'] ?? ''));

$title = $text . ' ' . $city;
?>

<!DOCTYPE html>
<html lang="no">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <?= $site_data['html'] ?>
    <title>
        <?= $title ?>
    </title>
</head>

<body>


    <!--Шапка сайта-->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 containerP0">
                    <div class="header__box">
                        <div class="header__left">
                            <h1 class="header__title"><?= $title ?></h1>
                            <div class="imgWrp">
                                <img class="header__img" src="./assets/img/main.jpg" alt="main">
                            </div>
                        </div>
                        <div class="header__right">
                            <h2 class="header__subTitle">Rørlegger i <?= $city === "" ? "nærheten" : $city ?></h2>
                            <p class="header__txt">Trenger du en <strong>rørlegger i</strong> <strong><?= $city === "" ? "nærheten" : $city ?></strong> ? Vi er  tilgjengelige 24/7, både for nødstilfeller og  vanlige oppdrag. Ring oss når som helst – vi  er alltid her for å hjelpe deg med dine  rørleggerbehov.</p>
                            <div class="header__inner">
                                <div class="header__imgWrpReviews">
                                    <img class="header__imgReviews" src="./assets/img/reviews.png" alt="reviews">
                                </div>
                                <p class="header__plumber">Rørlegger i <?= $city === "" ? "nærheten" : $city ?></p>
                            </div>
                            <div class="header__numberLinkWrp">
                                <a class="header__numberLink" href="<?= $phone_href ?>"><span><?= $phone_name ?></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Основное содержимое страницы -->
    <main class="main">
        <section class="comment">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <div class="comment__box">
                            <div class="comment__imgWrp">
                                <img class="comment__img" src="./assets/img/comment.png" alt="comment">
                            </div>
                            <div class="comment__content">
                                <div class="comment__imgWrp2">
                                    <img class="comment__img2" src="./assets/img/img2.jpg" alt="img2">
                                </div>
                                <h2 class="comment__title">Rørlegger i <?= $city === "" ? "nærheten" : $city ?>  tilgjengelig 24/7</h2>
                                <p class="comment__txt">Er du i nød og trenger en rørlegger? Vårt team av  profesjonelle rørleggere er klare til å hjelpe deg når  som helst, dag og natt. Enten det er en rørbrudd  eller en rørforstoppelse, står vi klare til å løse alle  dine sanitærproblemer. Kontakt oss for rask og  pålitelig service i ditt nærområde, uansett tidspunkt.  Vi er her for å sikre at ditt hjem er trygt og  funksjonelt, døgnet rundt.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="quickly">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 containerP0">
                        <div class="quickly__box">
                            <div class="quickly__imgWrp">
                                <img class="quickly__img" src="./assets/img/img3.jpg" alt="">
                            </div>
                            <div class="quickly__content">
                                <h2 class="quickly__title">Raskt på plass: Innen 40 til 60  minutter</h2>
                                <p class="quickly__txt">Når et sanitærnotfall oppstår, kan du stole på oss  for rask og effektiv hjelp. Vi er tilgjengelige 24  timer i døgnet for å håndtere alle typer  nødsituasjoner, fra rørbrudd til tette rør. Vårt  erfarne team vil være på plass innen 40 til 60  minutter for å sikre at problemet blir løst raskt og  effektivt. Vi <strong>tilbyr tjenester i <?= $city === "" ? "ditt nærområde" : $city ?></strong>  og garanterer profesjonell reparasjon og service  når du trenger det mest. Kontakt oss umiddelbart  ved sanitærnødsituasjoner, og vi sørger for at alt  fungerer som det skal igjen.</p>
                                <div class="quickly__inner">
                                    <a class="quickly__link" href="<?= $phone_href ?>"><span>RINGE</span></a>
                                    <a class="quickly__link" href="#anchorForm"><span>E-POST</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="services">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 containerP0">
                        <div class="services__box">
                            <h2 class="services__title">Sanitærtjenester</h2>
                            <ul class="services__ul">
                                <li>Installasjon og vedlikehold av rør</li>
                                <li>Reparasjon av lekkasjer og rørbrudd</li>
                                <li>VVS-installasjoner</li>
                                <li>Avløpsrensing</li>
                                <li>Baderomsrenovering</li>
                                <li>Varmtvannsberedere</li>
                                <li>Septiktjenester</li>
                                <li>Installasjon av sanitærutstyr</li>
                                <li>Rørinspeksjon</li>
                                <li>Nødreparasjoner</li>
                            </ul>
                            <p class="services__txt">Vi tilbyr et komplett spekter av <strong>sanitærtjenester</strong>  for å dekke alle dine behov. Dette inkluderer  <strong>installasjon</strong> og vedlikehold av rør (vann, avløp,  gass), reparasjon av lekkasjer og rørbrudd (rør,  kraner, toaletter), samt VVS-<strong>installasjoner</strong>  (varme, ventilasjon, sanitær). Vi utfører også  avløpsrensing og baderomsrenovering,  installasjon og vedlikehold av  varmtvannsberedere, septiktjenester, og  installasjon av sanitærutstyr. Våre tjenester  inkluderer også rørinspeksjon og  nødreparasjoner. Med våre omfattende tjenester  sikrer vi funksjonelle og pålitelige sanitæranlegg i  ditt hjem eller bygg.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="help">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 containerP0">
                        <div class="help__box">
                            <div class="help__imgWrp">
                                <img class="help__img" src="./assets/img/img4.jpg" alt="">
                            </div>
                            <div class="help__content">
                                <h2 class="help__title">WC tett <?= $city ?> ? Trenger hjelp?</h2>
                                <p class="help__txt">Hvis du har en WC-, rør- eller kanalforstoppelse –  uansett hvilken type forstoppelse det er – for våre  eksperter er det ikke noe problem. Våre  medarbeidere er utstyrt med moderne maskiner  og verktøy og kan hjelpe deg døgnet rundt med  enhver forstoppelse, stor eller liten. Ring oss, og  vi er på plass innen en time.</p>
                                <div class="help__linkWrp">
                                    <a class="help__link" href="<?= $phone_href ?>" ><span><?= $phone_name?></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="help">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 containerP0">
                        <div class="help__box">
                            <div class="help__imgWrp">
                                <img class="help__img" src="./assets/img/img5.jpg" alt="">
                            </div>
                            <div class="help__content">
                                <h2 class="help__title">Umiddelbar hjelp ved lekkasjer  og rørbrudd i <?= $city === "" ? "nærheten" : $city ?></h2>
                                <p class="help__txt">Når uhellet er ute og du oppdager en lekkasje  eller et rørbrudd, trenger du rask og pålitelig hjelp.  Vi tilbyr umiddelbar assistanse ved lekkasjer og  <strong>rørbrudd i <?= $city === "" ? "nærheten" : $city ?></strong>, med mål om å løse  problemene dine så raskt som mulig. Vårt team av  erfarne fagfolk er alltid tilgjengelig og rykker ut  med en gang for å utføre nødvendige reparasjoner  på stedet. Vi forstår viktigheten av å handle raskt  for å minimere skade og ulempe, og vi er her for å  sikre at du får den hjelpen du trenger, akkurat når  du trenger det. Med vår service kan du være trygg  på at problemer blir løst effektivt og profesjonelt,  hver gang.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="help">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 containerP0">
                        <div class="help__box">
                            <div class="help__imgWrp">
                                <img class="help__img" src="./assets/img/img6.jpg" alt="">
                            </div>
                            <div class="help__content">
                                <h2 class="help__title">Dine eksperter for  førsteklasses VVS-  installasjoner</h2>
                                <p class="help__txt">Vårt team av erfarne fagfolk er dedikert til å levere  førsteklasses <strong>VVS-installasjoner i <?= $city === "" ? "ditt  nærområde" : $city ?></strong>. Vi spesialiserer oss på installasjon  og reparasjon av WC, bad og armaturer, og  sørger for at alt arbeid utføres med høyeste  kvalitet og presisjon. Enten du trenger hjelp med å  oppgradere baderomsinnredningen eller fikse  lekkasjer og rørbrudd, kan du stole på vår  ekspertise. Vi tilbyr skreddersydde løsninger som  passer dine behov og sikrer optimal funksjonalitet.  Kontakt oss for pålitelige og effektive VVS-  tjenester nær deg.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id='anchorForm' class='forms'>
            <div class='forms__wrapper'>
               <div class='container-fluid'>
                  <div class='row'>
                     <div class='col-12 container'>
                        <div class='forms__box'>
                           <h2 class='forms__title'>Kontakt oss:</h2>
                           <form id='jq_form' class='mb-0 mt-3'>
                              <div class='my-0'>
                                 <input class='form-control' placeholder='Navn *' name='jq_name' type='text'>
                                 <div id='jq_name' style='font-weight:700;font-size:15px;color:red;padding-top:2px;display:none'>Dette er et obligatorisk felt.</div>
                              </div>
                              <div class='my-4'>
                                 <input class='form-control' placeholder='Telefon *' name='jq_phone' type='text'>
                                 <div id='jq_phone' style='font-weight:700;font-size:15px;color:red;padding-top:2px;display:none'>Dette er et obligatorisk felt.</div>
                              </div>
                              <div class='my-4'>
                                 <input class='form-control' placeholder='Adresse *' name='jq_street' type='text'>
                                 <div id='jq_street' style='font-weight:700;font-size:15px;color:red;padding-top:2px;display:none'>Dette er et obligatorisk felt.</div>
                              </div>
                              <div class='my-4'>
                                 <input class='form-control' placeholder='Postnummer *' name='jq_city' type='text'>
                                 <div id='jq_city' style='font-weight:700;font-size:15px;color:red;padding-top:2px;display:none'>Dette er et obligatorisk felt.</div>
                              </div>
                              <div class='my-4'>
                                 <input class='form-control' placeholder='E-mail *' name='jq_email' type='text'>
                                 <div id='jq_email' style='font-weight:700;font-size:15px;color:red;padding-top:2px;display:none'>Dette er et obligatorisk felt.</div>
                              </div>
                              <div class='my-4'>
                                 <textarea rows='3' class='form-control' name='jq_text' placeholder='Besked *'></textarea>
                                 <div id='jq_text' style='font-weight:700;font-size:15px;color:red;padding-top:2px;display:none'>Dette er et obligatorisk felt.</div>
                              </div>
                              <div>
                                 <input class='btn  text-uppercase fw-bold mb-0 px-3 py-2 forms__button' type='submit' id='jq_submit' value='Send besked'>
                              </div>
                              <div id='jq_success' style='display:none'>Vielen Dank für Ihre Anfrage. Unsere Mitarbeiter werden sich in Kürze bei Ihnen melden.</div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
        </section>
        
        <section class='btnFixedD'>
            <div class='btnFixedD__box'>
                <a class="btnFixedD__btn" href="<?= $phone_href ?>" ><img class="btnFixedD__img" src="assets/icons/telephone-fill.svg" alt=""></a>
            </div>
        </section>
        <section class='btnFixed'>
            <div class='btnFixed__box'>
                <a class="btnFixed__btn" href="<?= $phone_href ?>" ><span><?= $phone_name?></span></a>
            </div>
        </section>
    </main>
    <!--Нижний колонтитул страницы-->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 container">© 2024</div>
            </div>
        </div>
    </footer>
    <!--Style-->
    <link href="assets/css/reset.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.min.css" rel="stylesheet">
    <script src="assets/js/main.min.js"></script>
</body>

</html>