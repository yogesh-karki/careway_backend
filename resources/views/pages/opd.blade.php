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
    <div class="banner uk-height-medium uk-background-cover uk-position-relative" style="background-image: url('./images/medical-professional-with-gloves-draws-dotted-line-head-balding-man.jpg');">
        <div class="uk-container">
            <div class="uk-overlay-default uk-position-cover">
                <div class="uk-position-center">
                    <ul class="uk-breadcrumb">
                        <li><a href="/">Home</a></li>
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

    <section>
        <div class="uk-container"> 
            <div class="uk-grid uk-child-width-1-3@m uk-child-width-1-2@s uk-child-1-1">
            @foreach($opds as $opd)
                <div class="post">
                    <img src="{{Voyager::image($opd->banner)}}" alt="">
                    <div class="about__post">
                        <h5>{{$opd->title}} </h5>
                        <p>
                           {!!strip_tags($opd->intro)!!}
                        </p>
                        <div>
                            <a href="/opd/{{$opd->slug}}" class="button">Explore</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection