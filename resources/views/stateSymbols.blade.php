@extends('layouts.index')
@section('content')

    <div class="mainContent ">
        <div class="imageHeader">
            <div class="container">
                <h1 class="pageTitle">@lang('words.symbols')</h1>
                <nav aria-label="breadcrumb">
                    <ol id="w5" class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">@lang('words.home')</a></li>
                        <li class="breadcrumb-item active" aria-current="page">@lang('words.symbols')</li>
                    </ol>
                </nav>
                <div class="imageBox">
                    <img alt="." src="">
                </div>
            </div>
        </div>

        <div class="container">
            <img class="cHeadImage" src="/img/placeholder.jpg" alt="" style="display: none">
            <div class="page_content"><b></b>
                <p>
                <h3><strong>@lang('words.emblemTitle')</strong></h3>

                <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>

                <p style="text-align:center"><img alt="" height="284"
                        src="/uploads/2021/10/B_PzEd6tAYqtUBrtMxwEaFvtS5kFgjpZ.jpg" width="274" /></p>

                <p>@lang('words.emblemText')</p>

                

                <p>&nbsp;</p>

                <h3><strong>@lang('words.flagTitle')</strong></h3>

                <p>&nbsp;</p>

                <p style="text-align:center"><img alt="" height="200"
                        src="/uploads/2021/10/QgwTbCfD0pJ_tzvPyBVS81XegXqxUlzn.jpg" width="400"/></p>

                <p>&nbsp;</p>

                <p>@lang('words.flagText')</p>

                
                <p>&nbsp;</p>

                <p><strong>@lang('words.author')</strong></p>

                <p>...</p>

                <p>@lang('words.anthem')</p>
            </div>
        </div>
    </div>

   @endsection

