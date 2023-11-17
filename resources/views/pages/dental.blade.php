<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$item->title}}</title>
    <meta name="description" content="{{$item->meta_description}}">

    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{$item->title}}" />
    <meta property="og:description" content="{{$item->meta_description}}" />
    <meta property="og:url" content="{{Request::url()}}" />
    <meta property="og:site_name" content="{{$item->title}}" />
    <meta property="og:image" content="{{Voyager::image(setting('site.dental_og'))}}" />

    <link rel="canonical" href="{{Request::url()}}" >

    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" type="image/x-icon">
    <link
        href="https://fonts.googleapis.com/css2?family=Arimo:wght@400;500;600;700&family=DM+Sans:ital,opsz,wght@0,9..40,100;0,9..40,200;0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;0,9..40,800;0,9..40,900;0,9..40,1000;1,9..40,100&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.17.0/css/uikit.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/10.3.1/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/dental.css')}}">

</head>


<body>
    <header uk-sticky="show-on-up: true; animation: uk-animation-slide-top"
        class="header uk-sticky uk-active uk-sticky-below uk-sticky-fixed">
        <nav class="uk-navbar-container uk-navbar-transparent uk-visible@m">
            <div class="uk-container">
                <div uk-navbar>

                    <div class="uk-navbar-left">

                        <ul class="uk-navbar-nav">
                            <li>
                                <a href="/dental" class="uk-navbar-item uk-logo">
                                    <img class="" src="{{Voyager::image(setting('site.dental_logo'))}}" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#services">Services</a>
                            </li>
                            <li>
                                <a href="#about">About</a>
                            </li>
                            <li>
                                <a href="#stories">Success Stories</a>
                            </li>
                            <li>
                                <a href="#blogs">Blogs</a>
                            </li>
                            <li>
                                <a href="#book">Booking</a>
                            </li>
                            <li>
                                <a href="#contact">Contact</a>
                            </li>
                        </ul>

                    </div>

                    <div class="uk-navbar-right">
                        <a href="{{setting('contact-us.facebook')}}" class="uk-navbar-item" target="_blank">
                            <span uk-icon="icon: facebook"></span>
                        </a>

                        <a href="#booking" uk-scroll class=" button">
                            Book Now
                        </a>
                    </div>
                </div>
            </div>
        </nav>
        <div class="careway-header-mobile uk-hidden@m">
            <div class="uk-container">
                <div class="uk-navbar-container">
                    <nav uk-navbar="" class="uk-navbar">
                        <div class="uk-navbar-left uk-margin-right">
                            <a href="/dental" class="uk-navbar-item uk-logo">
                                <img src="{{Voyager::image(setting('site.dental_logo'))}}">
                            </a>
                        </div>
                        <div class="uk-navbar-right">
                            <a href="{{setting('contact-us.facebook')}}" class="uk-navbar-item"
                                target="_blank">
                                <span uk-icon="icon: facebook"></span>
                            </a>

                            <a href="#booking" uk-scroll class=" button">
                                Book Now
                            </a>
                            <a class="uk-navbar-item uk-navbar-toggle" href="#careway-mobile" uk-toggle=""
                                aria-expanded="false">
                                <div uk-navbar-toggle-icon="" class="uk-icon uk-navbar-toggle-icon"></div>
                            </a>
                        </div>
                    </nav>
                </div>
            </div>
            <div id="careway-mobile" uk-offcanvas="" mode="slide" overlay="" class="uk-offcanvas">
                <div class="uk-offcanvas-bar">
                    <button class="uk-offcanvas-close uk-icon uk-close" type="button" uk-close=""></button>
                    <div class="uk-panel uk-margin-top uk-margin-remove-last-child">
                        <ul class="uk-nav">
                            <li>
                                <a href="/dental">Home</a>
                            </li>
                            <li>
                                <a href="#services">Services</a>
                            </li>
                            <li>
                                <a href="#about">About</a>
                            </li>
                            <li>
                                <a href="#stories">Success Stories</a>
                            </li>
                            <li>
                                <a href="#blogs">Blogs</a>
                            </li>
                            <li>
                                <a href="#book">Booking</a>
                            </li>
                            <li>
                                <a href="#contact">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </header>

    <div class="home__slider">
        <div class="swiper homeSwiper">
            <div class="swiper-wrapper">
                @foreach($sliders as $slider)
                <div class="swiper-slide">
                    <img src="{{Voyager::image($slider->image)}}" alt="">
                </div>
                @endforeach
            </div>
            <div class="swiper-button-next homeslidernav">
                <i class="fa-solid fa-arrow-right-long"></i>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="home__slidertext">
            <h1>{{$item->slider_title}}</h1>
            <p>{{$item->slider_subtitle}}
            </p>
        </div>

    </div>


    <section class="callback">
        <div class="uk-container">
            <div class="callback__wrap">
                <label>Request a callback</label>
                <div class="search__input">
                    <form action="{{Route('call')}}" method="POST">
                    @csrf
                        <input type="text" placeholder="Name" name="name">
                        <input type="number" placeholder="Contact Number" name="number">
                        <button type="submit"><span uk-icon="arrow-right" class="uk-icon"></span></button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="treatments" id="services">
        <div class="uk-container">
            <div class="head uk-margin-large-bottom">
                <h6 class="subtitle">{{$item->service_subtitle}}</h6>
                <div class="title">{{$item->service_title}}</div>
            </div>
            <ul uk-switcher="" class="servicetab__wrap flex__wrap" role="tablist">
                @foreach($categories as $cat)
                <li @if($loop->first) class="uk-active" @endif role="presentation">
                    <a href="" aria-selected="{{$loop->first ? 'true' : 'false'}}" @if(!$loop->first) tabindex="-1" @endif role="tab" id="uk-switcher-19-tab-{{$loop->index}}"
                        aria-controls="uk-switcher-19-tabpanel-0">{{$cat->title}}</a>
                </li>
                @endforeach
            </ul>
            <ul class="uk-switcher tab__content" role="presentation">
                @foreach($categories as $cat)
                <li class="uk-active" id="uk-switcher-19-tabpanel-{{$loop->index}}" role="tabpanel" aria-labelledby="uk-switcher-19-tab-{{$loop->index}}">
                    <div class="content">
                        @foreach($cat->dentalservices as $ser)
                        <div class="m_card">
                            <img src="{{Voyager::image($ser->image)}}" alt="{{$ser->title}}">
                            <h4>{{$ser->title}}</h4>
                        </div>
                        @endforeach
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </section>

    <section id="about">
        <div class="uk-container">
            <div class="layout-grid content-grid">
                <div id="grid__text1" class="grid__text">
                    <div class="head  uk-text-left ">
                        <h6 class="subtitle">{{$item->abt_title}}</h6>
                        <!-- <div class="title">About Us</div> -->
                    </div>
                    <div class="heading gridstart__text">
                        <span >{{$item->abt_intro}} </span>
                    </div>
                </div>
                <div id="grid__image1" class="grid__image uk-overflow-hidden" uk-scrollspy="cls: uk-animation-slide-right;  delay: 500">
                    <img src="{{Voyager::image($item->abt_image)}}" class="uk-animation-reverse uk-transform-origin-top-right" 
                        uk-scrollspy="cls: uk-animation-kenburns; repeat: true">
                </div>
                <div id="grid__image2" class="grid__image uk-overflow-hidden" uk-scrollspy="cls: uk-animation-slide-left; repeat: true">
                    <img src="{{Voyager::image($item->smile_image)}}" class="uk-animation-reverse uk-transform-origin-top-right" 
                        uk-scrollspy="cls: uk-animation-kenburns; repeat: true">
                </div>
                <div id="grid__text2" class="grid__text">
                    <div class="head  uk-text-left ">
                        <h5 class="subtitle">{{$item->smile_title}}</h5>
                    </div>
                    <h4>{{$item->smile_subtitle}}</h4>
                    <div class="">
                        <p>{{$item->smile_intro}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="stories">
        <div class="uk-container uk-container-expand">
            <div class="head uk-margin-large-bottom">
                <h6 class="subtitle">{{$item->story_title}}</h6>
                <div class="title">{{$item->story_subtitle}}</div>
            </div>
            <div class="gallery__grid" uk-lightbox="animation: fade">
                @foreach(json_decode($item->story_images) as $img)
                <div class="uk-position-relative galleryimage__wrap uk-overflow-hidden">
                    <a href="{{Voyager::image($img)}}">
                        <img src="{{Voyager::image($img)}}" alt="">
                        <div class="uk-overlay-default uk-position-cover">
                            <div class="uk-position-center">
                                <span uk-icon="expand" class="uk-icon uk-overlay-icon"></span>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Blogs -->
    <section id="blogs">
        <div class="uk-container">
            <div class="uk-position-relative">
                <div class="uk-flex uk-flex-between uk-flex-top ">
                    <div class="head uk-margin-large-bottom">
                        <h6 class="subtitle uk-text-left">{{$item->blog_title}}</h6>
                        <div class="title">{{$item->blog_subtitle}}</div>
                    </div>
                    <div class="swiper__navigation ">
                        <div class="swiper-button-prev dentalblog">
                            <i class="fa-solid fa-arrow-left-long"></i>
                        </div>
                        <div class="swiper-button-next dentalblog">
                            <i class="fa-solid fa-arrow-right-long"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper blogs">
                    <div class="swiper-wrapper">
                        @foreach($blogs as $blog)
                        <div class="swiper-slide blog__wrap">
                            <div class="blog uk-position-relative">
                                <img src="{{Voyager::image($blog->banner)}}"
                                    alt="">
                                <div class="uk-overlay uk-overlay-default uk-position-absolute">
                                    <h5>{{$blog->title}}</h5>
                                    <p>
                                       {!!strip_tags($blog->description)!!}
                                    </p>
                                    <div>
                                        <a href="/dental-blogs/{{$blog->slug}}" class="button">Read more</a>
                                    </div>
                                </div>     
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer>
        <div class="uk-container">
            <form action="" id="book">
                <div class="head uk-margin-large-bottom">
                    <h6 class="subtitle">Book Now</h6>
                    <div class="title">Make an appointment</div>
                </div>
                <div class="uk-grid uk-child-width-1-2 uk-flex-between">
                    <div class="form__group">
                        <input type="date" placeholder="Pick a date *" required>
                    </div>
                    <div class="form__group">
                        <input type="time" placeholder="Time *" required>
                    </div>
                    <div class="form__group">
                        <input type="text" placeholder="Name *" required>
                    </div>
                    <div class="form__group">
                        <input type="number" placeholder="Number *" required>
                    </div>
                    <div class="form__group">
                        <input type="email" placeholder="Email">
                    </div>
                    <div class="form__group">
                        <select id="inputState" class="form-select">
                            <option selected="">Patient type</option>
                            <option>New Patient</option>
                            <option>Existing Patient</option>
                        </select>
                    </div>
                    <div class="form__group">
                        <select id="inputState" class="form-select">
                            <option selected="">Service</option>
                            <option>General Dentistry</option>
                            <option>Cosmetic Dentistry</option>
                            <option>Advanced Dentistry</option>
                        </select>
                    </div>
                    <div class="form__group">
                        <textarea name="" id="" cols="30" rows="8" placeholder="Message"></textarea>
                    </div>
                </div>
                <button class="button" onclick="window.location.href=''">Book Now</button>
            </form>
            <div class="footer__wrap" id="contact">
                <div class="uk-grid uk-child-width-1-4@m uk-child-width-1-2@s uk-flex-between@s">
                    <div class="col">
                         <ul class="uk-flex">
                             <li><a href="{{setting('contact-us.facebook')}}" target="_blank"><span
                                         uk-icon="icon: facebook"></span></a></li>
                             <li><a href="tel:{{setting('contact-us.phone')}}"><span uk-icon="icon: receiver"
                                         target="_blank"></span></a></li>
                             <li><a href="https://wa.me/{{setting('contact-us.whatsapp')}}"><span uk-icon="icon: whatsapp" target="_blank"></span></a></li>
                         </ul>
                     </div>
                    <div class="col">
                        <ul>
                            <li>
                                <a href="{{setting('contact-us.address_map')}}" target="_blank">{{setting('contact-us.address')}}</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col">
                        <ul >
                            <li><a href="tel:{{setting('contact-us.phone')}}" target="_blank">{{setting('contact-us.phone')}}</a></li>
                        </ul>
                    </div>
                    <div class="col">
                        <ul>
                            <li><a href="mailto:{{setting('contact-us.email')}}" target="_blank">{{setting('contact-us.email')}}</a> </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer__bottom uk-text-center uk-margin-medium-top">
                <span>Ⓒ {{now()->year}} Careway Dental</span>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/10.3.1/swiper-bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.17.0/js/uikit.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.17.0/js/uikit-icons.min.js"></script>

    <script src="{{asset('js/script.js')}}"></script>
</body>

</html>