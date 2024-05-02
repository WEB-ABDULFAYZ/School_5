@extends('layouts.index')
@section('content')

    <div class="mainContent withImage">
        <div class="imageHeader">
            <div class="container">
                <h1 class="pageTitle">@lang('words.projects')</h1>
                <nav aria-label="breadcrumb">
                    <ol id="w5" class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">@lang('words.home')</a></li>
                        <li class="breadcrumb-item active" aria-current="page">@lang('words.projects')</li>
                    </ol>
                </nav>
                <div class="imageBox">
                    <img alt="." src="/img/zm.jpg">
                </div>
            </div>
        </div>

        <div class="container">

            <div class="projectsList">

                <a class="item" href="https://itsm.uz/uz/edu-kids">
                    <img alt="logo" src="https://329.maktab.uz/uploads/2022/03/ANCl5FdApcQtCSosDRpUmBb0JxkLJMWq.jpg">
                    <div class="description">
                        <h1>@lang('words.edukids')</h1>
                        <h3>@lang('words.edukidsdesc')
                        </h3>
                    </div>
                </a>

                <a class="item" href="https://maktab.uz/">
                    <img alt="logo" src="https://329.maktab.uz/uploads/2021/10/GOblsQG5A_FGOSqHu7i3myjphxCJfqDd.jpg">
                    <div class="description">
                        <h1>@lang('words.maktabuz')</h1>
                        <h3>@lang('words.maktabuzdesc')
                        </h3>
                    </div>
                </a>

                <a class="item" href="https://uzbekcoders.uz/">
                    <img alt="logo" src="https://329.maktab.uz/uploads/2021/10/d88U4DhybhQWnGZJGVBepE9cRO6vv4mw.jpg">
                    <div class="description">
                        <h1>@lang('words.uzbekcoders')</h1>
                        <h3>@lang('words.uzbekcodersdesc')
                        </h3>
                    </div>
                </a>

                <a class="item" href="https://onlinedu.uz/">
                    <img alt="logo" src="https://329.maktab.uz/uploads/2021/10/98CiO9wMZtFU8WVEG0NeijKmHdwmPaGL.jpg">
                    <div class="description">
                        <h1>@lang('words.onlinedu')</h1>
                        <h3>@lang('words.onlinedudesc')
                        </h3>
                    </div>
                </a>

                <a class="item" href="https://xt.uzedu.uz/">
                    <img alt="logo" src="https://329.maktab.uz/uploads/2021/10/jFpPZE6I_C854ZhUC4LhCOOEYzqNtb4W.jpg">
                    <div class="description">
                        <h1>@lang('words.ishuzedu')</h1>
                        <h3>@lang('words.ishuzedudesc')
                        </h3>
                    </div>
                </a>

                <a class="item" href="https://edumarket.uz/">
                    <img alt="logo" src="https://329.maktab.uz/uploads/2021/10/TQ7qkhYTCwdPZ3BBmpznuBLuc24TwCEN.jpg">
                    <div class="description">
                        <h1>@lang('words.smartland')</h1>
                        <h3>@lang('words.smartlanddesc')
                        </h3>
                    </div>
                </a>

                <a class="item" href="https://ustozmukofoti.uz/uz">
                    <img alt="logo" src="https://329.maktab.uz/uploads/2021/10/F65dDRK5TyempWSPdtapMnwLsQYmDe9v.jpg">
                    <div class="description">
                        <h1>@lang('words.ustozmukofoti')</h1>
                        <h3>@lang('words.ustozmukofotidesc')
                        </h3>
                    </div>
                </a>

                <a class="item" href="https://olympiad.uzedu.uz/">
                    <img alt="logo" src="https://329.maktab.uz/uploads/2021/10/RovlL2cUmiYnTPSQg6FO_XZhaWrvhf0K.jpg">
                    <div class="description">
                        <h1>@lang('words.olympiaduzedu')</h1>
                        <h3>@lang('words.olympiaduzedudesc')
                        </h3>
                    </div>
                </a>

                <a class="item" href="https://idea.uzedu.uz/uz">
                    <img alt="logo" src="https://329.maktab.uz/uploads/2021/10/Fdy6V1JQKi5NRNFhNYjfzsnb-M1iCm8Z.jpg">
                    <div class="description">
                        <h1>@lang('words.ideauzedu')</h1>
                        <h3>@lang('words.ideauzedudesc')
                        </h3>
                    </div>
                </a>

                <a class="item" href="https://kundalik.com/">
                    <img alt="logo" src="https://329.maktab.uz/uploads/2021/10/IO5eA5EjEnfvQ5wzpYIUaNv1YPx4EbAC.jpg">
                    <div class="description">
                        <h1>@lang('words.kundalik')</h1>
                        <h3>@lang('words.kundalikdesc')
                        </h3>
                    </div>
                </a>

                <a class="item" href="https://attestat.uzedu.uz/">
                    <img alt="logo" src="https://329.maktab.uz/uploads/2021/10/XQ_iStZ1GFRDfYQbWjOf82biildlYEun.jpg">
                    <div class="description">
                        <h1>@lang('words.attestatuzedu')</h1>
                        <h3>@lang('words.attestatuzedudesc')
                        </h3>
                    </div>
                </a>

                <a class="item" href="https://kitob.uz/">
                    <img alt="logo" src="https://329.maktab.uz/uploads/2021/10/BFjwSXUVJKvUcxglIP2feU2wdVXfW7_O.jpg">
                    <div class="description">
                        <h1>@lang('words.kitob')</h1>
                        <h3>@lang('words.kitobdesc')
                        </h3>
                    </div>
                </a>

                <a class="item" href="https://my.maktab.uz/">
                    <img alt="logo" src="https://329.maktab.uz/uploads/2021/10/knTaeZ6iVCSwGkfkFT31xXy-_keb6m1k.jpg">
                    <div class="description">
                        <h1>@lang('words.mymaktab')</h1>
                        <h3>@lang('words.mymaktabdesc')
                        </h3>
                    </div>
                </a>

                <a class="item" href="http://www.zm.uz">
                    <img alt="logo" src="https://329.maktab.uz/uploads/2021/10/leky-TCW6_bj0YTIhb1gKXWcKUTVmBTF.jpg">
                    <div class="description">
                        <h1>@lang('words.zamonaviymaktab')</h1>
                        <h3>@lang('words.zamonaviymaktabdesc')
                        </h3>
                    </div>
                </a>
            </div>
        </div>
    </div>

   @endsection
