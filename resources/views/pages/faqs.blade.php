@extends('layouts.app')

@section('title')
<title>{{setting('faqs.Faq_title')}}</title>
<meta name="description" content="{{setting('faqs.meta')}}">

<meta property="og:locale" content="en_US" />
<meta property="og:type" content="article" />
<meta property="og:title" content="{{setting('faqs.Faq_title')}}" />
<meta property="og:description" content="{{setting('faqs.meta')}}" />
<meta property="og:url" content="{{Request::url()}}" />
<meta property="og:site_name" content="{{setting('faqs.Faq_title')}}" />
<meta property="og:image" content="{{Voyager::image(setting('faqs.banner'))}}" />

<link rel="canonical" href="{{Request::url()}}" >
@endsection

@section('body')

    <div class="banner uk-height-medium uk-background-cover uk-position-relative"
        style="background-image: url('{{Voyager::image(setting('faqs.banner'))}}');">
        <div class="uk-container">
            <div class="uk-overlay-default uk-position-cover">
                <div class="uk-position-center">
                    <ul class="uk-breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li><span>{{setting('faqs.Faq_title')}}</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="page__intro">
        <div class="uk-container uk-container-small">
            <h1 class="pagetitle uk-text-center">{{setting('faqs.Faq_title')}}</h1>
            <p>
                {!!setting('faqs.intro')!!}
            </p>
        </div>
    </div>

    <div>
        <div class="uk-container uk-container-small">
            <ul  uk-scrollspy-nav="closest: li; scroll: true; offset: 40" class="faq__nav flex__wrap">
                @foreach($items as $item)
                <li><a href="#faq{{$loop->iteration}}">{{$item->title}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>

    @foreach($items as $item)
    <div class="faqs">
        <div class="uk-container uk-container-small">
            <h5 class="uk-text-uppercase uk-margin-medium-bottom uk-text-bolder">{{$item->title}}</h5>
            <ul uk-accordion id="faq{{$loop->iteration}}">
                @foreach(json_decode($item->faq)->body as $faq)
                <li @if($loop->first) class="uk-open" @endif>
                    <a class="uk-accordion-title" href>{{$faq->question}}</a>
                    <div class="uk-accordion-content">
                    {!!$faq->answer!!}
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    @endforeach

@endsection