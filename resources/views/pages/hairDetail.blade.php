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
                        <li><a href="/hairs">Hair Clinic</a></li>
                        <li><span>{{$item->title}}</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="page__intro">
        <div class="uk-container uk-container-small">
            <h1 class="pagetitle uk-text-center">{{$item->title}}</h1>
            {!!$item->intro ?? ' '!!}
        </div>
    </div>

    @if($item->description)
    <section class="page">
        <div class="uk-container">
        {!!$item->description!!}
        </div>
    </section>
    @endif

    @if($item->image_results || $item->video_results)
    <section class="results">
        <div class="uk-container"> 
            <h1 class="pagetitle uk-text-center">Results</h1>
            @if($item->image_results && count(json_decode($item->image_results)) > 0)
            <div class="swiper beforeafterimages">
                <div class="swiper-wrapper  uk-margin-medium-bottom" uk-lightbox="animation: slide">
                    @foreach(json_decode($item->image_results) as $img)
                    <div class="swiper-slide  uk-position-relative">
                        <a href="{{Voyager::image($img)}}">
                            <img src="{{Voyager::image($img)}}" alt="">
                            <div class="uk-overlay-default uk-position-cover">
                                <div class="uk-position-center">
                                    <span uk-overlay-icon></span>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
                <a href="/photo-gallery" class="uk-margin-medium-top button">
                    Explore Images
                </a>
            </div>
            @endif

            @if($item->video_results)
            @php $videos = explode(',',$item->video_results); @endphp
            <div dir="rtl" class="swiper beforeaftervideos uk-margin-large-top">
                <div class="swiper-wrapper uk-margin-medium-bottom">
                @foreach($videos as $vid)
                    <div class="swiper-slide">
                        <iframe src="https://www.youtube-nocookie.com/embed/{{$vid}}?autoplay=0&amp;showinfo=0&amp;rel=0&amp;modestbranding=1&amp;playsinline=1" width="1920" height="1080" allowfullscreen uk-responsive uk-video="automute: true; autoplay: false;"></iframe>
                    </div>
                @endforeach
                </div>
                <a href="/video-gallery" class=" button">
                    Explore Videos
                </a>
            </div>
            @endif
        </div>
    </section>
    @endif
@endsection