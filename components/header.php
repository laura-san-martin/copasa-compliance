<?php 
$preUrl = "";

$opcoes = json_decode(
    '{
    "facebookLink": "https://www.facebook.com/copasaoficial",
    "youtubeLink": "https://www.youtube.com/user/TVCOPASAMG/",
    "twitterLink": "https://www.instagram.com/copasamg/",
    "instagramLink": "https://www.instagram.com/copasamg/",
    "linkedInLink": "https://www.linkedin.com/company/copasamg/?originalSubdomain=br"
}', true
);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- PAGE TITLE -->
    <title>Copasa - <?php echo $title ?></title>
    <!-- FAVI ICON -->
    <link rel="shortcut icon" type="image/png" href="<?php echo $preUrl ?>/public/imgs/icons/favicon.ico">
    <!-- STYLES -->
    <link href="<?php echo $preUrl ?>/public/scripts/main.css" rel="stylesheet">
    <!-- SCRIPTS -->
    <script src="<?php echo $preUrl ?>/public/scripts/index.js" type="text/javascript"></script>
</head>
<body class="copasa" id="top">
    <!-- NAVIGATION -->
    <header>
        <nav class="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex">
                        <svg class="navigation__menu" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path></svg>
                        <a class="navigation__logo scroll-to" href="<?php echo $preUrl ?>/">
                            <img src="<?php echo $preUrl ?>/public/imgs/logos/copasa.png" alt="Logo Copasa" />
                            <img src="<?php echo $preUrl ?>/public/imgs/logos/marca-compliance.png" alt="Logo Copasa" />
                        </a>
                        <!-- MENU -->
                        <div class="navigation__sections">
                            <a href="<?php echo $preUrl ?>/">
                                Copasa em Compliance
                            </a>
                            <div class="copasa__lista">
                                <ol>
                                    <li><a href="<?php echo $preUrl ?>/governanca" class="copasa__botao">Governança e Comprometimento da Alta Administração</a></li>
                                    <li><a href="<?php echo $preUrl ?>/gestao-e-controle" class="copasa__botao">Gestão de Riscos e Controles Internos</a></li>
                                    <li><a href="<?php echo $preUrl ?>/instrumentos-de-integridade" class="copasa__botao">Instrumentos de Integridade</a></li>
                                    <li><a href="<?php echo $preUrl ?>/comunicacao-e-treinamento" class="copasa__botao">Comunicação e Treinamento</a></li>
                                    <li><a href="<?php echo $preUrl ?>/due-diligence" class="copasa__botao">Due Diligence</a></li>
                                    <li><a href="<?php echo $preUrl ?>/monitoramento-e-tratamento" class="copasa__botao">Monitoramento e tratamento</a></li>
                                    <li><a href="<?php echo $preUrl ?>/transparencia-informacao-e-controle" class="copasa__botao">Transparência pública, informação relevante e controle social</a></li>
                                </ol>
                            </div>
                            <div class="dark-graient-menu"></div>
                        </div>
                        <!-- SOCIAL -->
                        <div class="navigation__social">
                            <a class="navigation__social__icon" target="_blank" href="<?php echo $opcoes["facebookLink"] ?>"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 264 512">
                                    <path
                                        d="M76.7 512V283H0v-91h76.7v-71.7C76.7 42.4 124.3 0 193.8 0c33.3 0 61.9 2.5 70.2 3.6V85h-48.2c-37.8 0-45.1 18-45.1 44.3V192H256l-11.7 91h-73.6v229" />
                                </svg>
                            </a>
                            <a class="navigation__social__icon"  target="_blank" href="<?php echo $opcoes["instagramLink"] ?>"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path
                                        d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                                </svg>
                            </a>
                            <a class="navigation__social__icon" target="_blank" href="<?php echo $opcoes["twitterLink"] ?>"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z" />
                                </svg>
                            </a>
                            <a class="navigation__social__icon" target="_blank" href="<?php echo $opcoes["youtubeLink"] ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"/>
                                </svg>
                            </a>
                            <a class="navigation__social__icon" target="_blank" href="<?php echo $opcoes["linkedInLink"] ?>"><svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 448 512"><path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>