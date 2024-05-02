@extends('layouts.index')
@section('content')
    <div class="mainContent withImage">
        <div class="imageHeader">
            <div class="container">
                <h1 class="pageTitle">@lang('words.news')</h1>
                <nav aria-label="breadcrumb">
                    <ol id="w7" class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">@lang('words.home')</a></li>
                        <li class="breadcrumb-item active" aria-current="page">@lang('words.axborotMarkaz')</li>
                        <li class="breadcrumb-item active" aria-current="page">@lang('words.news')</li>
                    </ol>
                </nav>
                <div class="imageBox">
                    <img alt="." src="">
                </div>
            </div>
        </div>

        <div class="container">
            <div class="imageCardBoxes">
                @foreach ($news as $new)
                <a href="{{ route('show_news',$new->id) }}">
                    <div class="imageBox">
                        <img alt="image" src="/public/news/images/{{ $new->img }}">
                    </div>
                    <h1>{{ $new['title_' . \App::getLocale()]  }}</h1>
                    <span>{{ $new->created_at->format('H:i')}} / {{ $new->created_at->format('d.m.Y')}}</span>
                </a>
                @endforeach
               
            </div>
            <nav id="w1"></nav>
        </div>
    </div>
@endsection
<script src="/assets/93744a1d/js/kv-widgets.min.js"></script>
<script src="/assets/8eb6c245/js/locales/bootstrap-datepicker.uz-latn.min.js"></script>
<script src="/assets/8eb6c245/js/datepicker-kv.min.js"></script>
<script src="/assets/bd36669c/yii.validation.js"></script>
<script src="/assets/8eb6c245/js/bootstrap-datepicker.min.js"></script>
@section('js')
<script>
    jQuery(function($) {
        jQuery.fn.kvDatepicker.dates = {};
        jQuery && jQuery.pjax && (jQuery.pjax.defaults.maxCacheLength = 0);
        if (jQuery('#contentsearch-start_date').data('kvDatepicker')) {
            jQuery('#contentsearch-start_date').kvDatepicker('destroy');
        }
        jQuery('#contentsearch-start_date-kvdate').kvDatepicker(kvDatepicker_d042625d);
        jQuery('#contentsearch-start_date-kvdate').on('changeDate', function(e) {
            $('[data-sel="dateInput"]').kvDatepicker({
                "language": "uz-latn",
                "options": {
                    "format": "dd.mm.yyyy",
                    "autoclose": true,
                    "todayHighlight": true,
                }
            });
            $('[data-sel="dateInput"]').kvDatepicker("setStartDate", e.date);
        });

        initDPRemove('contentsearch-start_date');
        initDPAddon('contentsearch-start_date');
        if (jQuery('#contentsearch-end_date').data('kvDatepicker')) {
            jQuery('#contentsearch-end_date').kvDatepicker('destroy');
        }
        jQuery('#contentsearch-end_date-kvdate').kvDatepicker(kvDatepicker_d042625d);

        initDPRemove('contentsearch-end_date');
        initDPAddon('contentsearch-end_date');
        jQuery('#w0').yiiActiveForm([{
            "id": "contentsearch-category_id",
            "name": "category_id",
            "container": ".field-contentsearch-category_id",
            "input": "#contentsearch-category_id",
            "error": ".invalid-feedback",
            "validate": function(attribute, value, messages, deferred, $form) {
                yii.validation.number(value, messages, {
                    "pattern": /^[+-]?\d+$/,
                    "message": "«Kategoriya» qiymati butun son bo`lishi kerak.",
                    "skipOnEmpty": 1
                });
            }
        }], {
            "errorSummary": ".alert.alert-danger",
            "errorCssClass": "is-invalid",
            "successCssClass": "is-valid",
            "validationStateOn": "input"
        });
        jQuery('#w4').yiiActiveForm([], {
            "errorSummary": ".alert.alert-danger",
            "errorCssClass": "is-invalid",
            "successCssClass": "is-valid",
            "validationStateOn": "input"
        });
    });
</script>
@endsection
