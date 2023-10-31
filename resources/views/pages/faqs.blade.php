<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Careway Medical</title>

    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&family=Merriweather:wght@300;400;700;900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.17.0/css/uikit.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/10.3.1/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="./css/style.css">

</head>

<body>

    <header uk-sticky="show-on-up: true; animation: uk-animation-slide-top"
        class="header uk-sticky uk-active uk-sticky-below uk-sticky-fixed">
        <nav class="uk-navbar-container uk-navbar-transparent">
            <div class="uk-container">
                <div uk-navbar>

                    <div class="uk-navbar-left">

                        <ul class="uk-navbar-nav">
                            <li>
                                <a href="./index.html" class="uk-navbar-item uk-logo">
                                    <img class="full" src="./images/logo.png" alt="">
                                    <img class="cropped" src="./images/logocropped.png" alt="">
                                </a>
                            </li>

                        </ul>

                    </div>

                    <div class="uk-navbar-center">

                        <ul class="uk-navbar-nav">
                            <li><a href="./index.html">Home</a></li>
                            <li>
                                <a href="./hair.html">Hair Clinic</a>
                                <div class="uk-navbar-dropdown">
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li><a href="./innerservicepage.html">Hair Transplant</a></li>
                                        <li><a href="./innerservicepage.html">PRP</a></li>
                                        <li><a href="./innerservicepage.html">GFC</a></li>
                                        <li><a href="./innerservicepage.html">LLLT</a></li>
                                        <li><a href="./innerservicepage.html">Mesotherapy</a></li>
                                        <li><a href="./innerservicepage.html">SMP</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a>Dental Aesthetics</a>
                                <div class="uk-navbar-dropdown">
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li><a href="#">General Dentistry</a></li>
                                        <li><a href="#">Cosmetic Dentistry</a></li>
                                        <li><a href="#">Teeth Scaling & Whitening</a></li>
                                        <li><a href="#">Hollywood Smile</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a>OPD</a>
                                <div class="uk-navbar-dropdown">
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li><a href="./innerservicepage.html">Skin</a></li>
                                        <li><a href="./innerservicepage.html">ENT</a></li>
                                        <li><a href="./innerservicepage.html">Psychiatry</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a>Results</a>
                                <div class="uk-navbar-dropdown">
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li><a href="./images.html">Photo gallery</a></li>
                                        <li><a href="./videos.html">Video Gallery</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="uk-active"><a href="./faqs.html">FAQs</a></li>
                        </ul>

                    </div>

                    <div class="uk-navbar-right">
                        <a href="https://www.facebook.com/Clinic.in.bharatpur" class="uk-navbar-item" target="_blank">
                            <span uk-icon="icon: facebook"></span>
                        </a>

                        <a href="./contact.html" class=" button">
                            Book Now
                        </a>
                    </div>

                </div>
            </div>
        </nav>
    </header>

    <div class="banner uk-height-medium uk-background-cover uk-position-relative"
        style="background-image: url('./images/medical-professional-with-gloves-draws-dotted-line-head-balding-man.jpg');">
        <div class="uk-container">
            <div class="uk-overlay-default uk-position-cover">
                <div class="uk-position-center">
                    <ul class="uk-breadcrumb">
                        <li><a href="./index.html">Home</a></li>
                        <li><span>FAQs</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="page__intro">
        <div class="uk-container uk-container-small">
            <h1 class="pagetitle uk-text-center">FAQs</h1>
            <p>
                Don't see the answer you're looking for? Reach out to <a
                    href="mailto:carewaymedical@gmail.com">carewaymedical@gmail.com</a> and we'll get back to you.
            </p>
        </div>
    </div>

    <div>
        <div class="uk-container uk-container-small">
            <ul  uk-scrollspy-nav="closest: li; scroll: true; offset: 40" class="faq__nav flex__wrap">
                <li><a href="#hair">Hair Care</a></li>
                <li><a href="#dental">Dental Care</a></li>
                <li><a href="#opd">OPD</a></li>
            </ul>
        </div>
    </div>

    <div class="faqs">
        <div class="uk-container uk-container-small">
            <h5 class="uk-text-uppercase uk-margin-medium-bottom uk-text-bolder">Hair Care</h5>
            <ul uk-accordion id="hair">
                <li class="uk-open">
                    <a class="uk-accordion-title" href>What is the success rate for hair transplants?</a>
                    <div class="uk-accordion-content">
                        <p>
                            100% success can be achieved if the operation is done by expert surgeons in a sterile
                            environment and when the surgeon’s recommendations are followed after the hair transplant.
                        </p>
                    </div>
                </li>
                <li>
                    <a class="uk-accordion-title" href>Who can have a hair transplant?</a>
                    <div class="uk-accordion-content">
                        <p>
                            Any woman or man above 22 years old with a hair loss problem and a sufficient amount of hair
                            in the donor region can have a hair transplant.
                        </p>
                    </div>
                </li>
                <li>
                    <a class="uk-accordion-title" href>Will the implanted hair fall after the hair transplant?</a>
                    <div class="uk-accordion-content">
                        <p>
                            The strongest hair from the donor region is used for hair transplants. The expert surgeons
                            will transplant this hair and 100% permanency is achieved.
                        </p>
                    </div>
                </li>
                <li>
                    <a class="uk-accordion-title" href>Will a hair transplant operation hurt?</a>
                    <div class="uk-accordion-content">
                        <p>
                            Since hair transplant procedures are operated under local anaesthesia, you will not feel
                            any pain or ache.
                        </p>
                    </div>
                </li>
                <li>
                    <a class="uk-accordion-title" href>Is there any age limit for hair transplant procedures?</a>
                    <div class="uk-accordion-content">
                        <p>
                            There is no age limit for hair transplants but a hair transplant for individuals younger
                            than 22 years old is not recommended.
                        </p>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div class="faqs">
        <div class="uk-container uk-container-small">
            <h5 class="uk-text-uppercase uk-margin-medium-bottom uk-text-bolder">Dental Care</h5>
            <ul uk-accordion id="dental">
                <li class="uk-open">
                    <a class="uk-accordion-title" href>What are the treatment options for missing teeth</a>
                    <div class="uk-accordion-content">
                        <p>
                            The following are treatment options available for missing teeth: Tooth
                            supported fixed bridges, Implant support bridges, Dental implants, etc.
                        </p>
                    </div>
                </li>
                <li>
                    <a class="uk-accordion-title" href>Is flossing important? </a>
                    <div class="uk-accordion-content">
                        <p>
                            It is important to perform flossing in a correct way; otherwise it will lead to damage of
                            the gum or soft tissues. Place the floss between the two teeth. Glide the floss up and down
                            and rubbing it against the both side of each teeth. Do not rub on gum, it will cause
                            bleeding. Gently glide the floss between tooth and gum area and clean it. Rinse your mouth
                            well after flossing. People who floss daily enjoy a better gum and teeth health.
                        </p>
                    </div>
                </li>
                <li>
                    <a class="uk-accordion-title" href>How often should you see your dentist?</a>
                    <div class="uk-accordion-content">
                        <p>
                            The thumb rule says, visit your dentist in every six months. If you do not have any dental or 
                            associate problem, visit at least once a year, while people have oral issues, should go for 
                            an oral checkup every 5 to 6 months.
                        </p>
                    </div>
                </li>
                <li>
                    <a class="uk-accordion-title" href>How to prevent teeth staining?</a>
                    <div class="uk-accordion-content">
                        <p>
                            Stained teeth are not a pleasant sight for anybody. It gives an impression that you don’t
                            pay attention to your teeth. Teeth staining is caused by extrinsic stains. Extrinsic stains
                            are the discoloration of tooth on the outer layer, which is enamel of the tooth. The
                            extrinsic tooth stains are caused by lifestyle habits like, the type of food you eat, cola
                            and hard drink, smoking etc.
                        </p>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div class="faqs">
        <div class="uk-container uk-container-small">
            <h5 class="uk-text-uppercase uk-margin-medium-bottom uk-text-bolder">OPD</h5>
            <ul uk-accordion id="opd">
                <li class="uk-open">
                    <a class="uk-accordion-title" href>What is the success rate for cosmetic surgeries?</a>
                    <div class="uk-accordion-content">
                        <p>
                            You are under a 100% satisfaction guarantee at Nimclinic. Therefore, you will have 100% success rate.
                        </p>
                    </div>
                </li>
                <li>
                    <a class="uk-accordion-title" href>When can I go back to normal life? </a>
                    <div class="uk-accordion-content">
                        <p>
                            Although this duration depends on the surgical procedure, you can go back to your normal life in 3-7 days.
                        </p>
                    </div>
                </li>
                <li>
                    <a class="uk-accordion-title" href>Who operates the patients?</a>
                    <div class="uk-accordion-content">
                        <p>
                            Plastic surgery operations are operated by our plastic surgeons.
                        </p>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <footer>
        <div class="uk-container">
            <div class="footer__top uk-text-center">
                <h2>Contact</h2>
                <a href="./contact" class="button">Let's Connect</a>
            </div>
            <div class="uk-grid uk-child-width-1-2">
                <div class="footer__wrap">
                    <div class="uk-grid uk-child-width-1-2 uk-flex-between@s uk-flex-bottom">
                        <div class="col">
                            <div class="logo">
                                <a href="./index.html">
                                    <img src="./images/logo.png" alt="">
                                </a>
                            </div>
                        </div>
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
                                <li><a href="https://maps.app.goo.gl/B7BRfWATss7u237WA" target="_blank">Bharatpur</a>
                                </li>
                                <li><a href="https://maps.app.goo.gl/B7BRfWATss7u237WA" target="_blank">Chitwan,
                                        Nepal</a></li>
                            </ul>
                        </div>
                        <div class="col">
                            <ul>
                                <li><a href="tel:+977-056-490860" target="_blank">056-490860</a></li>
                                <li><a href="mailto:carewaynepal@gmail.com" target="_blank">carewaynepal@gmail.com</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col">
                            <ul>
                                <li><a href="./blogs.html">Blogs</a></li>
                                <li><a href="./faqs.html">FAQs</a></li>
                            </ul>
                        </div>
                        <div class="col">
                            <ul>
                                <li><a href="./about.html">About</a></li>
                                <li><a href="./contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="form">
                    <h6>Stay in Touch</h6>
                    <p>Fill the form and we’ll reach out to you asap.</p>
                    <form action="">
                        <div class="form__group">
                            <input type="text" placeholder="Name">
                        </div>
                        <div class="form__group">
                            <input type="number" placeholder="Contact Number">
                        </div>
                        <button class="button">Get a call</button>
                    </form>
                </div>
            </div>
            <div class="footer__bottom uk-text-center uk-margin-medium-top">
                <span>Ⓒ 2023 Careway Medical</span>
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