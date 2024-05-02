@extends('layouts.index')
@section('content')

    <div class="mainContent withImage">
        <div class="imageHeader">
            <div class="container">
                <h1 class="pageTitle">@lang('words.strategy')</h1>
                <nav aria-label="breadcrumb">
                    <ol id="w5" class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">@lang('words.home')</a></li>
                        <li class="breadcrumb-item active" aria-current="page">@lang('words.strategy')</li>
                    </ol>
                </nav>
                <div class="imageBox">
                    <img alt="." src="/img/zm.jpg">
                </div>
            </div>
        </div>

        <div class="container">
        </div>
        <div class="container">
            <div class="mainQuoteBox">
                <div></div>
                <div class="quoteBox">
                    <p>"@lang('words.prezidentText')"</p>
                    <span>@lang('words.prezident')</span>
                </div>
            </div>
        </div>

        <div class="ourMissionBig">
            <div class="container">
                <div class="content">
                    <h1 class="greenTitle">@lang('words.mission')</h1>
                    <p>@lang('words.mission2')</p>
                </div>
            </div>
        </div>

        <div class="container">
            <h1 class="greenTitle center">@lang('words.function')</h1>
            <p class="text-center">@lang('words.clause')</p>

            <ul class="tasksListWithTicks">
                <li>@lang('words.function1')</li>
                <li>@lang('words.function2')</li>
                <li>@lang('words.function3')</li>
                <li>@lang('words.function4')</li>
                <li>@lang('words.function5')</li>
                <li>@lang('words.function6')</li>
            </ul>
        </div>

        <div class="ourAim">
            <div class="container">
                <h1>@lang('words.aim') <br> @lang('words.aim2')</h1>
                <p>@lang('words.aimdesc')</p>
            </div>
        </div>

        <div class="ourStrategy">
            <div class="container">
                <div class="textArea">
                    <h1 class="greenTitle">@lang('words.ourstrategy')</h1>
                    <div class="rowedTexts">
                        <p>@lang('words.ourstrategy2')</p>
                        <p>@lang('words.ourstrategy3')</p>
                    </div>
                </div>
            </div>
        </div>
        <div> </div>
    </div>

   @endsection
   
