<!DOCTYPE html>
<html lang="uz" class="h-100">

<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="/img/logo.png" rel="shortcut icon" type="image/png">
    <title>@lang('words.main')</title>
    <meta name="csrf-param" content="_csrf-frontend">
    <meta name="csrf-token"
        content="LUt2Jvqjj_6AnCm8EHYI64sDeacYUSWo-kYXlZQl8m50FCl_uNHcnfHLZfMkA3jZuFofxSpkUf6XNlrY-kyRDA==">

    <link href="/css/specialView.css?v2" rel="stylesheet">
    <link href="/asset/1555dc35/themes/smoothness/jquery-ui.css" rel="stylesheet">
    <link href="/asset/7cd64088/css/bootstrap.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/media.css?v17" rel="stylesheet">
    <link href="/css/print.css?v3" rel="stylesheet">
    <link href="/css/font-awesome.all.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>

<body>


    <div class="menuContent">
        <div class="headerBar noBg">
            <div class="container">
                <div class="headerMenuBox big position-absolute">
                    <div class="bigMenuBtn">
                        <button type="button" class="borderedBtn">  
                            <div class="menuBarsClose"></div>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="container h-100">
            <div class="menuContentInner show">
                <img src="/img/logo.png" alt="logo">

                <div class="listMenu">
                    <ul>
                        <li><a href="#">@lang('words.about')</a>
                            <ul>
                                <li><a href="{{ route('strategy') }}">@lang('words.strategy')</a></li>
                                <li><a href="{{ route('leaders') }}">@lang('words.leaderShip')</a></li>
                                <li><a href="{{ route('teachers') }}">@lang('words.teachers')</a></li>
                            </ul>
                        </li>
                        <li><a href="#">@lang('words.education')</a>
                            <ul>
                                <li><a href="{{ route('services1') }}">1-@lang('words.smena')</a></li>
                                <li><a href="{{ route('services2') }}">2-@lang('words.smena')</a></li>
                                <li><a href="{{ route('lessons') }}">@lang('words.lessons')</a></li>
                                <li><a href="{{ route('sports') }}">@lang('words.sports')</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('news') }}">@lang('words.axborotMarkaz')</a>
                            <ul>
                                <li><a href="{{ route('news') }}">@lang('words.News')</a></li>
                                <li><a href="{{ route('gallery') }}">@lang('words.gallery')</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('projects') }}">@lang('words.projects')</a>
                            <ul>
                                <li><a href="{{ route('contact') }}">@lang('words.contactUs')</a></li>
                            </ul>
                        </li>
                    </ul>
                    
                </div>

                <div class="topMainMenu">
                    <ul>
                        <li><a href="https://vacancy.argos.uz/">@lang('words.vacancies')</a></li>
                        <li><a href="{{ route('schoolRule') }}">@lang('words.rules')</a></li>
                        <li><a href="{{ route('faq') }}">@lang('words.faq')</a></li>
                        <li><a href="{{ route('stateSymbols') }}">@lang('words.symbols')</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="headerBar">
        <div class="container">
            <div class="headerMenuBox">
                <div class="bigMenuBtn">
                    <button type="button" class="borderedBtn">
                        <div class="menuBars"></div>
                    </button>
                </div>
                <a href="{{ route('index') }}" class="mainLogo">
                    <img alt="logo" class="inlinesvg" src="/img/logo.png">
                </a>

                <div class="mainMenuBox">

                    <div class="menusList">
                        <div class="topMainMenu">
                            <ul>
                                <li><a href="https://vacancy.argos.uz/">@lang('words.vacancies')</a></li>
                                <li><a href="{{ route('schoolRule') }}">@lang('words.rules')</a></li>
                                <li><a href="{{ route('faq') }}">@lang('words.faq')</a></li>
                                <li><a href="{{ route('stateSymbols') }}">@lang('words.symbols')</a></li>
                            </ul>
                            <div class="additionalFunctions">
                                <div class="dropdown">
                                    <a href="#" data-toggle="dropdown"><img alt="Icon"
                                            src="/img/eyeIcon.svg"></a>
                                    <div class="dropdown-menu specialViewArea dropdown-menu-right no-propagation"
                                        aria-labelledby="dropdownMenuButton">
                                        <div class="appearance">
                                            <p class="specialTitle">@lang('words.view')</p>

                                            <div class="squareAppearances">
                                                <div class="squareBox spcNormal" data-toggle="tooltip"
                                                    data-placement="bottom" title=""
                                                    data-original-title="Oddiy rejim">A
                                                </div>
                                            </div>
                                            <div class="squareAppearances">
                                                <div class="squareBox spcWhiteAndBlack" data-toggle="tooltip"
                                                    data-placement="bottom" title=""
                                                    data-original-title="Oq-qora rejim">A
                                                </div>
                                            </div>
                                            <!--            <div class="squareAppearances">-->
                                            <!--                <div class="squareBox spcDark" data-toggle="tooltip" data-placement="bottom" title=""-->
                                            <!--                     data-original-title="--><? //= Yii::t('main', 'Темный режим') 
                                                        ?>

                                        </div>

                                        <div class="appearance">
                                            <p class="specialTitle">@lang('words.font')</p>

                                            <div class="squareAppearances">
                                                <div class="squareBox fontSizer miniFont middleFont"
                                                    data-toggle="tooltip" data-placement="bottom" title=""
                                                    data-original-title="Oddiy">F
                                                </div>
                                            </div>
                                            <div class="squareAppearances">
                                                <div class="squareBox fontSizer largeFont" data-toggle="tooltip"
                                                    data-placement="bottom" title=""
                                                    data-original-title="Kattalashtirilgan">F
                                                </div>
                                            </div>
                                        </div>

                                        <div class="appearance">
                                            <p class="specialTitle">@lang('words.reader')</p>


                                            <div class="block">

                                                <div class="blueCheckbox">
                                                    <input type="checkbox" id="speechSwitcher"
                                                        name="speechSwitcher" />
                                                    <label for="speechSwitcher"><span></span>@lang('words.on') /
                                                        @lang('words.off')</label>
                                                </div>

                                                <div id="speechOptions">
                                                    <div class="sliderText">@lang('words.reader') <span
                                                            class="range">100</span>%</div>
                                                    <div id="speechVolume" class="defaultSlider"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="appearance">
                                            <button id="_resetAllSettings"
                                                class="btn btn-link pull-center">@lang('words.reset')</button>
                                        </div>

                                        <div class="clearfix"></div>
                                    </div>
                                </div> 
                            </div>
                        </div>

                        <div class="menuLine"></div>

                        <div class="bottomMainMenu">
                            <ul class="menu">
                                <li><a href="#">@lang('words.about')</a>
                                    <ul>
                                        <li><a href="{{ route('strategy') }}">@lang('words.strategy')</a></li>
                                        <li><a href="{{ route('leaders') }}">@lang('words.leaderShip')</a></li>
                                        <li><a href="{{ route('teachers') }}">@lang('words.teachers')</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">@lang('words.education')</a>
                                    <ul>
                                        <li><a href="{{ route('services1') }}">1-@lang('words.smena')</a></li>
                                        <li><a href="{{ route('services2') }}">2-@lang('words.smena')</a></li>
                                        <li><a href="{{ route('lessons') }}">@lang('words.lessons')</a></li>
                                        <li><a href="{{ route('sports') }}">@lang('words.sports')</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('projects') }}">@lang('words.projects')</a></li>
                                <li><a href="{{ route('news') }}">@lang('words.axborotMarkaz')</a>
                                    <ul>
                                        <li><a href="{{ route('news') }}">@lang('words.News')</a></li>
                                        <li><a href="{{ route('gallery') }}">@lang('words.gallery')</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('contact') }}">@lang('words.contactUs')</a></li>
                                
                            </ul>
                           
                        </div>
                    </div>

                    <form id="w2" class="mainSearchForm" action="/uz/search" method="get">
                        <div class="input-group">
                            <input type="text" id="mainSearch" class="form-control" placeholder="@lang('words.search')"
                                name="ContentSearch[q]">

                            <div class="input-group-prepend">
                                <button class="btn __searchBtn closeBtn" type="button">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>

                    </form>

              
                    <div class="dropdown langBar">
                        <button class="borderedBtn" type="button" data-toggle="dropdown">{{ \App::getLocale() }}</button>

                        <div id="w4" class="dropdown-menu-right dropdown-menu"><a class="dropdown-item"
                                href="/lang/uz">O&#039;zbekcha</a>
                            <a class="dropdown-item" href="/lang/ru">Русский</a>
                            <a class="dropdown-item" href="/lang/en">English</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @yield('content')

    <div class="container footerLogo"></div>
    <div class="footer">
        <div class="container fContent">
            <div class="mainBlock">
                <img alt="Logo" class="footerLogoImg" src="/img/logo.png">

                <h1>@lang('words.main')</h1>
                <h1>@lang('words.address')</h1>

                <div class="footerContactsBox">
                    <a href="tel:+99891-191-84-48">
                        <i class="fas fa-phone-alt"></i>
                        <span>+99891-191-84-48</span>
                    </a>
                    <a href="mailto:info@maktab.uz">
                        <i class="fas fa-envelope"></i>
                        <span>info@maktab.uz</span>
                    </a>
                    <a href="https://www.facebook.com/5_maktab" target="_blank">
                        <i class="fab fa-facebook-f"></i>
                        <span>@5_maktab</span>
                    </a>
                    <a href="https://t.me/5maktab" target="_blank">
                        <i class="fab fa-telegram-plane"></i>
                        <span>@5maktab</span>
                    </a>
                    <a href="https://www.instagram.com/5_maktab/" target="_blank">
                        <i class="fab fa-instagram"></i>
                        <span>/5_maktab</span>
                    </a>
                </div>
            </div>

            <div class="simpleBlock">
                <ul class="dashed">
                    <li><a href="{{ route('cookie') }}">@lang('words.cookie')</a></li>
                    <li><a href="{{ route('privacy') }}">@lang('words.xafvsizliksiyosati')</a></li>
                    <li><a href="{{ route('terms') }}">@lang('words.foydalanish')</a></li>
                    <li><a href="/uploads/uzedu_guide_ru.pdf">@lang('words.qollanma')</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <div class="socialNetworksBar">


        <div>
            <a href="mailto:info@maktab.uz">
                <span>info@maktab.uz</span>
                <i class="fas fa-envelope"></i>
            </a>
        </div>

        <div>
            <a href="https://www.facebook.com/5_maktab" target="_blank">
                <span>@5_maktab</span>
                <i class="fab fa-facebook-square"></i>
            </a>
        </div>

        <div>
            <a href="https://t.me/5maktab" target="_blank">
                <span>@5maktab</span>
                <i class="fab fa-telegram-plane"></i>
            </a>
        </div>

        <div>
            <a href="https://www.instagram.com/5_maktab/" target="_blank">
                <span>/5_maktab</span>
                <i class="fab fa-instagram"></i>
            </a>
        </div>
    </div>
    <script src="/asset/25ffaa01/jquery.js"></script>
    <script src="/asset/bd36669c/yii.js"></script>
    <script src="/asset/1555dc35/jquery-ui.js"></script>
    <script src="/asset/7cd64088/js/bootstrap.bundle.js"></script>
    <script src="/js/main.js?v4"></script>
    <script src="/js/inlinesvg.js"></script>
    <script src="/js/jquery.cookie.js"></script>
    <script src="/js/specialView.js"></script>
    <script src="/js/jquery.fancybox.min.js"></script>
    <script src="/asset/bd36669c/yii.activeForm.js"></script>
    @yield('js')
    <script>
        jQuery(function($) {
            jQuery('#w2').yiiActiveForm([], {
                "errorSummary": ".alert.alert-danger",
                "errorCssClass": "is-invalid",
                "successCssClass": "is-valid",
                "validationStateOn": "input"
            });
        });
    </script>
</body>

</html>
