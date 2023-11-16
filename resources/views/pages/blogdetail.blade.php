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
    <div class="blog__page">
        <div class="uk-container">
            <div class="blog__title">
                <h4>{{$item->title}}</h4>
            </div>
            <img src="{{Voyager::image($item->banner)}}" alt="">
            <div class="date"><span uk-icon="icon: calendar" target="_blank"></span>{{$item->date}}</div>
          {!!$item->description!!}
        </div>
    </div>

 @endsection