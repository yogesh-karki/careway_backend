<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Careway Dental</title>

    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
    <link
        href="https://fonts.googleapis.com/css2?family=Arimo:wght@400;500;600;700&family=DM+Sans:ital,opsz,wght@0,9..40,100;0,9..40,200;0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;0,9..40,800;0,9..40,900;0,9..40,1000;1,9..40,100&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.17.0/css/uikit.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/10.3.1/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="./css/dental.css">

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
                                <a href="./dental.html" class="uk-navbar-item uk-logo">
                                    <img class="" src="./images/logocropped.png" alt="">
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
                        <a href="https://www.facebook.com/Clinic.in.bharatpur" class="uk-navbar-item" target="_blank">
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
                            <a href="./dental.html" class="uk-navbar-item uk-logo">
                                <img src="./images/logocropped.png">
                            </a>
                        </div>
                        <div class="uk-navbar-right">
                            <a href="https://www.facebook.com/Clinic.in.bharatpur" class="uk-navbar-item"
                                target="_blank">
                                <span uk-icon="icon: facebook"></span>
                            </a>

                            <a href="./contact.html#booking" uk-scroll class=" button">
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
                                <a href="./dental.html">Home</a>
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
                surgeons and injectors. Your Dental clinic in Chitwan
            </p>
        </div>

    </div>


    <section class="callback">
        <div class="uk-container">
            <div class="callback__wrap">
                <label>Request a callback</label>
                <div class="search__input">
                    <form action="" method="GET">
                        <input type="text" placeholder="Name">
                        <input type="number" placeholder="Contact Number">
                        <button type="submit"><span uk-icon="arrow-right" class="uk-icon"></span></button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="treatments" id="services">
        <div class="uk-container">
            <div class="head uk-margin-large-bottom">
                <h6 class="subtitle">Services we provide</h6>
                <div class="title">Our Clinic Services</div>
            </div>
            <ul uk-switcher="" class="servicetab__wrap flex__wrap" role="tablist">
                <li class="uk-active" role="presentation">
                    <a href="" aria-selected="true" role="tab" id="uk-switcher-19-tab-0"
                        aria-controls="uk-switcher-19-tabpanel-0">General Dentistry</a>
                </li>
                <li role="presentation">
                    <a href="" aria-selected="false" tabindex="-1" role="tab" id="uk-switcher-19-tab-1"
                        aria-controls="uk-switcher-19-tabpanel-1">Cosmetic Dentistry</a>
                </li>
                <li role="presentation">
                    <a href="" aria-selected="false" tabindex="-1" role="tab" id="uk-switcher-19-tab-2"
                        aria-controls="uk-switcher-19-tabpanel-2">Advanced Dentistry</a>
                </li>
            </ul>
            <ul class="uk-switcher tab__content" role="presentation">
                <li class="uk-active" id="uk-switcher-19-tabpanel-0" role="tabpanel" aria-labelledby="uk-switcher-19-tab-0">
                    <div class="content">
                        <div class="m_card">
                            <img src="../images/dental-hygiene.png" alt="">
                            <h4>Dental Hygiene</h4>
                        </div>
                        <div class="m_card">
                            <img src="../images/dental-filling.png" alt="">
                            <h4>Dental Filling</h4>
                        </div>
                        <div class="m_card">
                            <img src="../images/denture.png" alt="">
                            <h4>Denture</h4>
                        </div>
                        <div class="m_card">
                            <img src="../images/dental-crown.png" alt="">
                            <h4>Dental Crown</h4>
                        </div>
                        <div class="m_card">
                            <img src="../images/root-canal.png" alt="">
                            <h4>Root Canal Treatment</h4>
                        </div>
                        <div class="m_card">
                            <img src="../images/dental-bridges.png" alt="">
                            <h4>Dental Bridges</h4>
                        </div>
                        <div class="m_card">
                            <img src="../images/baby-teeth.png" alt="">
                            <h4>Children's dentistry</h4>
                        </div>
                        <div class="m_card">
                            <img src="../images/tooth-extraction.png" alt="">
                            <h4>Dental Extraction</h4>
                        </div>
                    </div>
                </li>
                <li id="uk-switcher-19-tabpanel-1" role="tabpanel" aria-labelledby="uk-switcher-19-tab-1">
                    <div class="content">                    
                        <div class="m_card">
                            <img src="../images/veneer.png" alt="">
                            <h4>Veneer</h4>
                        </div>
                        <div class="m_card">
                            <img src="../images/straightens-teeth.png" alt="">
                            <h4>Invisalign</h4>
                        </div>
                        <div class="m_card">
                            <img src="../images/smile.png" alt="">
                            <h4>Smile Makeover</h4>
                        </div>
                        <div class="m_card">
                            <img src="../images/tooth-whitening.png" alt="">
                            <h4>Teeth Whitening</h4>
                        </div>
                        <div class="m_card">
                            <img src="../images/gold-teeth.png" alt="">
                            <h4>Dental Jewellery</h4>
                        </div>
                    </div>
                </li>
                <li id="uk-switcher-19-tabpanel-2" role="tabpanel" aria-labelledby="uk-switcher-19-tab-2">
                    <div class="content">                    
                        <div class="m_card">
                            <img src="../images/gingivitis.png" alt="">
                            <h4>Gum Surgery</h4>
                        </div>
                        <div class="m_card">
                            <img src="../images/braces.png" alt="">
                            <h4>Orthodontics</h4>
                        </div>
                        <div class="m_card">
                            <img src="../images/implant.png" alt="">
                            <h4>Dental Implants</h4>
                        </div>
                        <div class="m_card">
                            <img src="../images/mouth.png" alt="">
                            <h4>Oral Surgery</h4>
                        </div>
                        <div class="m_card">
                            <img src="../images/crown.png" alt="">
                            <h4>Crown and Bridges</h4>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <section id="about">
        <div class="uk-container">
            <div class="layout-grid content-grid">
                <div id="grid__text1" class="grid__text">
                    <div class="head  uk-text-left ">
                        <h6 class="subtitle">A little sth about Careway Dental</h6>
                        <!-- <div class="title">About Us</div> -->
                    </div>
                    <div class="heading gridstart__text">
                        <span class="opacity-70">We have Over </span>4&nbsp;years
                        <span class="opacity-70"> of experience in the field of </span>
                        orthodontics
                    </div>
                </div>
                <div id="grid__image1" class="grid__image uk-overflow-hidden" uk-scrollspy="cls: uk-animation-slide-right;  delay: 500">
                    <img src="./images/About.jpg" class="uk-animation-reverse uk-transform-origin-top-right" 
                        uk-scrollspy="cls: uk-animation-kenburns; repeat: true">
                </div>
                <div id="grid__image2" class="grid__image uk-overflow-hidden" uk-scrollspy="cls: uk-animation-slide-left; repeat: true">
                    <img src="./images/pexels-anna-shvets-3845811.jpg" class="uk-animation-reverse uk-transform-origin-top-right" 
                        uk-scrollspy="cls: uk-animation-kenburns; repeat: true">
                </div>
                <div id="grid__text2" class="grid__text">
                    <div class="head  uk-text-left ">
                        <h5 class="subtitle">Creating smiles</h5>
                    </div>
                    <h4>We specialize in helping patients with dental health and making their smiles
                        look great.</h4>
                    <div class="">
                        <p>Dental treatments are a vital part of your health. Choosing the best dental
                            care for your unique needs is difficult. Our excellent team will help you in every way.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="stories">
        <div class="uk-container uk-container-expand">
            <div class="head uk-margin-large-bottom">
                <h6 class="subtitle">Stories</h6>
                <div class="title">Our Success Stories</div>
            </div>
            <div class="gallery__grid" uk-lightbox="animation: fade">
                <div class="uk-position-relative galleryimage__wrap uk-overflow-hidden">
                    <a href="./images/dentist-examines-patients-teeth-dentist.jpg">
                        <img src="./images/dentist-examines-patients-teeth-dentist.jpg" alt="">
                        <div class="uk-overlay-default uk-position-cover">
                            <div class="uk-position-center">
                                <span uk-icon="expand" class="uk-icon uk-overlay-icon"></span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="uk-position-relative galleryimage__wrap uk-overflow-hidden">
                    <a href="./images/dentist-examines-patients-teeth-dentist.jpg">
                        <img src="./images/dentist-examines-patients-teeth-dentist.jpg" alt="">
                        <div class="uk-overlay-default uk-position-cover">
                            <div class="uk-position-center">
                                <span uk-icon="expand" class="uk-icon uk-overlay-icon"></span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="uk-position-relative galleryimage__wrap uk-overflow-hidden">
                    <a href="./images/dentist-examines-patients-teeth-dentist.jpg">
                        <img src="./images/dentist-examines-patients-teeth-dentist.jpg" alt="">
                        <div class="uk-overlay-default uk-position-cover">
                            <div class="uk-position-center">
                                <span uk-icon="expand" class="uk-icon uk-overlay-icon"></span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="uk-position-relative galleryimage__wrap uk-overflow-hidden">
                    <a href="./images/dentist-examines-patients-teeth-dentist.jpg">
                        <img src="./images/dentist-examines-patients-teeth-dentist.jpg" alt="">
                        <div class="uk-overlay-default uk-position-cover">
                            <div class="uk-position-center">
                                <span uk-icon="expand" class="uk-icon uk-overlay-icon"></span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="uk-position-relative galleryimage__wrap uk-overflow-hidden">
                    <a href="./images/dentist-examines-patients-teeth-dentist.jpg">
                        <img src="./images/dentist-examines-patients-teeth-dentist.jpg" alt="">
                        <div class="uk-overlay-default uk-position-cover">
                            <div class="uk-position-center">
                                <span uk-icon="expand" class="uk-icon uk-overlay-icon"></span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="uk-position-relative galleryimage__wrap uk-overflow-hidden">
                    <a href="./images/dentist-examines-patients-teeth-dentist.jpg">
                        <img src="./images/dentist-examines-patients-teeth-dentist.jpg" alt="">
                        <div class="uk-overlay-default uk-position-cover">
                            <div class="uk-position-center">
                                <span uk-icon="expand" class="uk-icon uk-overlay-icon"></span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="uk-position-relative galleryimage__wrap uk-overflow-hidden">
                    <a href="./images/dentist-examines-patients-teeth-dentist.jpg">
                        <img src="./images/dentist-examines-patients-teeth-dentist.jpg" alt="">
                        <div class="uk-overlay-default uk-position-cover">
                            <div class="uk-position-center">
                                <span uk-icon="expand" class="uk-icon uk-overlay-icon"></span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="uk-position-relative galleryimage__wrap uk-overflow-hidden">
                    <a href="./images/dentist-examines-patients-teeth-dentist.jpg">
                        <img src="./images/dentist-examines-patients-teeth-dentist.jpg" alt="">
                        <div class="uk-overlay-default uk-position-cover">
                            <div class="uk-position-center">
                                <span uk-icon="expand" class="uk-icon uk-overlay-icon"></span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Blogs -->
    <section id="blogs">
        <div class="uk-container">
            <div class="uk-position-relative">
                <div class="uk-flex uk-flex-between uk-flex-top ">
                    <div class="head uk-margin-large-bottom">
                        <h6 class="subtitle uk-text-left">Blogs</h6>
                        <div class="title">Read our blogs</div>
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
                        <div class="swiper-slide blog__wrap">
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
                        <div class="swiper-slide blog__wrap">
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
                        <div class="swiper-slide blog__wrap">
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
                        <div class="swiper-slide blog__wrap">
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
                        <div class="swiper-slide blog__wrap">
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
                        <div class="swiper-slide blog__wrap">
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
                             <li><a href="https://www.facebook.com/Clinic.in.bharatpur" target="_blank"><span
                                         uk-icon="icon: facebook"></span></a></li>
                             <li><a href="tel:+977-056-490860"><span uk-icon="icon: receiver"
                                         target="_blank"></span></a></li>
                             <li><a href=""><span uk-icon="icon: whatsapp" target="_blank"></span></a></li>
                         </ul>
                     </div>
                    <div class="col">
                        <ul>
                            <li>
                                <a href="https://maps.app.goo.gl/B7BRfWATss7u237WA" target="_blank">Bharatpur, Nepal</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col">
                        <ul >
                            <li><a href="tel:+977-056-490860" target="_blank">056-490860</a></li>
                        </ul>
                    </div>
                    <div class="col">
                        <ul>
                            <li><a href="mailto:carewaynepal@gmail.com" target="_blank">carewaynepal@gmail.com</a> </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer__bottom uk-text-center uk-margin-medium-top">
                <span>Ⓒ 2023 Careway Dental</span>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/10.3.1/swiper-bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.17.0/js/uikit.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.17.0/js/uikit-icons.min.js"></script>

    <script src="./js/script.js"></script>
</body>

</html>