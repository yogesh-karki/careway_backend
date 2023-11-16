@extends('layouts.app')

@section('title')
<title>{{$item->title}}</title>
<meta name="description" content="{{$item->meta_description}}">

<meta property="og:locale" content="en_US" />
<meta property="og:type" content="article" />
<meta property="og:title" content="{{$item->title}}" />
<meta property="og:description" content="{{$item->meta_description}}" />
<meta property="og:url" content="{{Request::url()}}" />
<meta property="og:site_name" content="{{$item->title}}" />
<meta property="og:image" content="{{Voyager::image($item->banner)}}" />

<link rel="canonical" href="{{Request::url()}}" >
@endsection

@section('body')
    <div class="banner uk-height-medium uk-background-cover uk-position-relative" style="background-image: url('{{Voyager::image($item->banner)}}');">
        <div class="uk-container">
            <div class="uk-overlay-default uk-position-cover">
                <div class="uk-position-center">
                    <ul class="uk-breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li><a href="/opd">OPD Clinic</a></li>
                        <li><span>{{$item->title}}</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="page__intro">
        <div class="uk-container uk-container-small">
            <h1 class="pagetitle uk-text-center">{{$item->title}}</h1>
            {!!$item->intro!!}
        </div>
    </div>

    <section class="page">
        <div class="uk-container">
           {!!$item->description!!}
        </div>
    </section>
 @endsection