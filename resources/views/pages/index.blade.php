@extends('layouts.app')

@section('title')
<title>Careway Nepal Clinic</title>
@endsection

@section('body')
    <div class="share uk-position-fixed">
        <a href="tel:+977-9851050310" target="blank">
            <img src="../images/phone.png" alt="">
        </a>
        <a href="viber://chat?number=%2B9779851050310" target="blank">
            <img src="../images/viber.png" alt="">
        </a>
        <a href="https://wa.me/+9779851050310" target="blank"> 
            <img src="../images/whatsapp.png" alt="">
        </a>
        <a href="" target="blank"> 
            <img src="../images/messenger.png" alt="">
        </a>
    </div>

    <!-- <div class="home__slider">
        <div class="swiper homeSwiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img src="./images/doctor-inject-treatment-serum-vitamins-hair-fall.jpg" alt="">
              </div>
              <div class="swiper-slide">
                <img src="./images/medical-professional-with-gloves-draws-dotted-line-head-balding-man.jpg" alt="">
              </div>
              <div class="swiper-slide">
                <img src="./images/patient-suffering-from-hair-loss-consultation-with-doctor.jpg" alt="">
              </div>
              <div class="swiper-slide">
                <img src="./images/dentist-examines-patients-teeth-dentist.jpg" alt="">
              </div>
              <div class="swiper-slide">
                <img src="./images/woman-dentist-stomatologist-mask-working-oral-health-assessment.jpg" alt="">
              </div>
            </div>
            <div class="swiper-button-next homeslidernav">
                <i class="fa-solid fa-arrow-right-long"></i>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="home__slidertext">
            <h1>Rediscover Your Confidence </h1>
            <p>Welcome to our clinic, your pathway to natural-looking results from industry-leading 
                surgeons and injectors. Skin | Hair | Dental | ENT clinic in Chitwan</p>
        </div>
    </div> -->

    <div class="home__video">
        <div class="video__wrap uk-position-relative">
            
            <video class="uk-visible@s" src="./images/production_id_4487290 (2160p).mp4" width="1920" height="1080" uk-video="autoplay: inview; automute: true" controls playsinline></video>
            <video class="uk-hidden@s" src="https://yootheme.com/site/images/media/yootheme-pro.mp4" width="1920" height="1080" uk-video="autoplay: inview; automute: true" controls playsinline></video>
            <div class="results__cta uk-hidden@s uk-position-absolute">
                <a href="./images.html" target="blank">
                    <img src="../images/image-gallery (1).png" alt="">
                </a>
                <a href="./videos.html" target="blank">
                    <img src="../images/play (4).png" alt="">
                </a>
            </div>
        </div>
    </div>

    <section class="intro">
        <div class="uk-container">
            <div class="uk-grid uk-child-width-1-2@s uk-flex-middle">
                <div class="intro__desc">
                    <div class="uk-margin-large-right">
                        <h2 class="uk-margin-medium-bottom">We offer diverse services for all age groups</h2>
                        <p>
                            At Careway Medical, we are committed to your well-being. As a premier healthcare facility,
                            we
                            offer a wide range of specialized services, including Hair Transplant, Dental Care,
                            Outpatient
                            Department (OPD) services, Skin Care, and Psychiatry. Our mission is to provide you with
                            holistic and personalized healthcare solutions that empower you to lead a healthier, happier
                            life.
                        </p>
                        <p>
                            We invite you to come discover why we are the leading destination.
                        </p>
                        <a href="./about.html" class="button">Learn More</a>
                    </div>
                </div>
                <div class="intro__images">
                    <div class="uk-position-relative" uk-scrollspy="cls: uk-animation-fade; target: img; delay: 500;">
                        <img class="security" src="./images/security.png" alt="">
                        <img class="top" src="./images/beautician-doing-injection-filler-female-client.jpg" alt="">
                        <img class="bottom"
                            src="./images/woman-dentist-stomatologist-mask-working-oral-health-assessment.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="service__tab">
        <div class="uk-container">
            <ul uk-switcher class="servicetab__wrap flex__wrap">
                <li class="uk-active"><a href="">Hair</a></li>
                <li><a href="">Skin</a></li>
                <li><a href="">Dental</a></li>
                <li><a href="">ENT</a></li>
            </ul>

            <ul class="uk-switcher uk-margin">
                <li>
                    <div class="uk-column-1-2@s">
                        <div class="" uk-scrollspy="cls: uk-animation-slide-right; outview">
                            <img src="./images/medical-professional-with-gloves-draws-dotted-line-head-balding-man.jpg"
                                alt="">
                        </div>
                        <div class="" uk-scrollspy="cls: uk-animation-fade; delay: 400">
                            <h2>Hair Transplant</h2>
                            <div class="servicetab__desc">
                                <p>
                                    Are you tired of dealing with hair loss and thinning? Say goodbye to your hair woes
                                    and
                                    embrace a new era of confidence with our cutting-edge hair transplant technology.
                                    With
                                    our latest advancements, we guarantee exceptional results that will transform your
                                    appearance and boost your self-esteem.
                                </p>
                                <p>
                                    Hair transplant surgery involves taking hair follicles from one area of the scalp
                                    and
                                    transplanting them to another area. This can be an effective option for people with
                                    advanced hair loss.
                                </p>
                            </div>
                            <a href="./hair.html" class="button">Learn More</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-column-1-2@s">
                        <div class="" uk-scrollspy="cls: uk-animation-slide-right; outview">
                            <img src="./images/beautician-doing-injection-filler-female-client.jpg" alt="">
                        </div>
                        <div class="" uk-scrollspy="cls: uk-animation-fade; delay: 400">
                            <h2>Skin</h2>
                            <div class="servicetab__desc">
                                <p>
                                    You are at the right place if you want to anaesthetise your face or body, correct
                                    the
                                    body parts you are not satisfied with or perfect your looks.

                                </p>
                                <p>
                                    At Careway, we provide a safe and modern environment, staffed by expert surgeons,
                                    for
                                    both surgical and non-surgical cosmetic procedures. Our goal is to enhance your
                                    natural
                                    beauty and boost your self-confidence through advanced techniques, ensuring your
                                    results
                                    are both discreet and stunning.
                                </p>
                            </div>
                            <a href="./skin.html" class="button">Learn More</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-column-1-2@s">
                        <div class="" uk-scrollspy="cls: uk-animation-slide-right; outview">
                            <img src="./images/dentist-examines-patients-teeth-dentist.jpg" alt="">
                        </div>
                        <div class="" uk-scrollspy="cls: uk-animation-fade; delay: 400">
                            <h2>Dental Aesthetics</h2>
                            <div class="servicetab__desc">
                                <p>
                                    Say goodbye to dental worries and hello to a brighter, healthier smile with Careway
                                    Medical Clinic. Our dedicated dental team is here to provide you with top-notch care
                                    that you deserve.

                                </p>
                                <p>
                                    At Careway, we assure a secure setting for achieving successful outcomes in dental
                                    and
                                    smile enhancement procedures. Our expert dentists employ cutting-edge dental
                                    equipment
                                    and top-quality products to bring out your natural and healthy smile. Our primary
                                    goal
                                    is to enhance your confidence and make your reflection in the mirror even more
                                    delightful through smile aesthetics.
                                </p>
                            </div>
                            <a href="./dental.html" class="button">Learn More</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-column-1-2@s">
                        <div class="" uk-scrollspy="cls: uk-animation-slide-right; outview">
                            <img src="./images/ears-endoscopy-child-otoscopy-procedure-with-otoscope-ent-doctor-otolaryngologist-treat-ears-girl.jpg"
                                alt="">
                        </div>
                        <div class="" uk-scrollspy="cls: uk-animation-fade; delay: 400">
                            <h2>ENT</h2>
                            <div class="servicetab__desc">
                                <p>
                                    Nepal faces a notable challenge in addressing a substantial population afflicted
                                    with
                                    Ear, Nose, Throat, and Thyroid disorders. The rising incidence of ENT issues compels
                                    patients to either turn to multi-specialty hospitals or consider seeking medical
                                    care
                                    abroad. Notably, there is a glaring absence of a dedicated ENT, Head & Neck/Thyroid
                                    specialty center within both the government and private healthcare sectors in Nepal.
                                </p>
                                <p>
                                    Most conditions of the ear, nose and throat are preventable. It is important to
                                    create
                                    awareness among the community members regarding harmful practices which can lead to
                                    the
                                    diseases of ear, nose and throat.
                                </p>
                            </div>
                            <a href="./dental.html" class="button">Learn More</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <!-- Results -->
    <section>
        <div class="uk-container">
            <h2 class="uk-text-center uk-margin-large-bottom">Hair Transplant Results</h2>
        </div>
        <div class="swiper beforeafter">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="./images/rev1.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="./images/rev2.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="./images/rev3.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="./images/rev4.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="./images/rev5.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="./images/rev6.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="./images/rev7.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="./images/rev8.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="./images/rev9.jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <div class="homebook">
        <div class="uk-container">
            <div class="homebook__content  uk-background-fixed uk-background-cover uk-position-relative" style="background-image: url(../images/medical-professional-with-gloves-draws-dotted-line-head-balding-man.jpg);">
                <div class="uk-overlay uk-position-absolute">
                    
                    <h2 class="uk-text-center uk-margin-large-bottom">Book online</h2>
                    <div class="width600 uk-text-center uk-margin-auto">
                        <div class="uk-margin-medium-bottom">
                            <p>Would you like to discuss directly what your options are? To book an appointment straight away you can use our online booking form</p>
                        </div>
                        <a class="button" href="./contact.html#booking">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="testimonials__sec">
        <div class="uk-grid-match" uk-grid>
            <div class="uk-width-2-5@l uk-width-1-3@m uk-width-1-1@s">
                <div class="rev__info uk-margin-large-right">
                    <h2 class="">What Our Patients Say</h2>
                    <p class="">
                        We invite you to come discover why we are the leading destination for hair transplant and luxury
                        cosmetic care
                        in Chitwan.
                    </p>
                </div>
            </div>
            <div class="uk-width-3-5@l uk-width-2-3@m uk-width-1-1@s">
                <div class="swiper testimonials">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonials-text-wrapper dark-style">
                                <p>
                                    "One of the best place in bharatpur chitwan for treatment of all kind of teeth i
                                    changed my teeth when i have been in nepal for holiday they did very well all staffs
                                    they are very kind and very punctual in treatment thanks for all and specially
                                    thanks "
                                </p>
                                <div class="testimonials-slider-author"><img alt="Photo" loading="lazy"
                                        src="./images/test1.jpg">
                                    <div>
                                        <h4 class="">Bijay Khanal</h4>
                                        <p class="">CEO</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonials-text-wrapper dark-style">
                                <p class="">"I did my PRP therapy for hair loss from CareWay Chitwan and the team was
                                    very friendly. Atmosphere is very nice and clean. Now I am waiting for my result."
                                </p>
                                <div class="testimonials-slider-author"><img alt="Photo" loading="lazy"
                                        src="https://assets.website-files.com/6400cab93af08bf954144b71/6400cab93af08b8b52144c95_Member-Photo-Close-up-5.webp">
                                    <div>
                                        <h4 class="">Eleanor Pena</h4>
                                        <p class="">Developer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonials-text-wrapper dark-style">
                                <p class="">"It really saves me time and effort. doctor sahab
                                    is exactly what our business has been lacking. I'm good to go. Thank you for
                                    making it painless, pleasant and most of all hassle free!"</p>
                                <div class="testimonials-slider-author"><img alt="Photo" loading="lazy"
                                        src="https://assets.website-files.com/6400cab93af08bf954144b71/6400cab93af08b8349144c97_Member-Photo-Close-up-6.webp">
                                    <div>
                                        <h4 class="">Ronald Richards</h4>
                                        <p class="">Manager</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonials-text-wrapper dark-style">
                                <p class="">"This is me"</p>
                                <div class="testimonials-slider-author"><img alt="Photo" loading="lazy"
                                        src="https://assets.website-files.com/6400cab93af08bf954144b71/6400cab93af08b8349144c97_Member-Photo-Close-up-6.webp">
                                    <div>
                                        <h4 class="">Astha</h4>
                                        <p class="">Manager</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-prev testimonialnav">
                    <i class="fa-solid fa-arrow-left-long"></i>
                </div>
                <div class="swiper-button-next testimonialnav">
                    <i class="fa-solid fa-arrow-right-long"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- Blogs -->
    <section>
        <div class="uk-container">
            <div class="uk-flex uk-flex-between uk-flex-top">
                <h2 class="uk-margin-large-bottom">Blogs</h2>
                <div class="button">See All</div>
            </div>
            <div class="uk-grid uk-child-width-1-3@m uk-child-width-1-2@s uk-child-width-1-1">
                <div class="blog__wrap">
                    <div class="blog uk-position-relative">
                        <img src="./images/medical-professional-with-gloves-draws-dotted-line-head-balding-man.jpg"
                            alt="">
                        <div class="uk-overlay uk-overlay-default uk-position-absolute">
                            <h5>Hair transplantation without shaving</h5>
                            <p>
                                The hair transplantation without shaving method preferred by men and women with long
                                hair
                                is performed with Sapphire Fue technique, but what makes this technique different is
                                that only a very small area is shaved on the neck, which is the donor area.
                            </p>
                            <div>
                                <a href="" class="button">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog__wrap">
                    <div class="blog uk-position-relative">
                        <img src="./images/head-balding-man-before-after-hair-transplant-surgery-man-losing-his-hair-has-become.jpg"
                            alt="">
                        <div class="uk-overlay uk-overlay-default uk-position-absolute">
                            <h5>DHI Hair Transplantation</h5>
                            <p>
                                It is the process of direct hair transplantation, the grafts taken from the donor area
                                are planted directly without the need to open the channel to the area where the hair
                                transplant will be performed. In this method, using a medical pen named Choi-Pen, the
                                hair follicles are first removed, and then planted in the problematic area with the same
                                pen.
                            </p>
                            <div>
                                <a href="" class="button">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog__wrap">
                    <div class="blog uk-position-relative">
                        <img src="./images/beautician-doing-injection-filler-female-client.jpg" alt="">
                        <div class="uk-overlay uk-overlay-default uk-position-absolute">
                            <h5>Hair transplantation without shaving</h5>
                            <p>
                                The hair transplantation without shaving method preferred by men and women with long
                                hair
                                is performed with Sapphire Fue technique, but what makes this technique different is
                                that only a very small area is shaved on the neck, which is the donor area.
                            </p>
                            <div>
                                <a href="" class="button">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
