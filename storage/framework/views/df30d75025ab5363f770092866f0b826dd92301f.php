<!Doctype html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Bitstocks Trading Limited | Terms of Use</title>
    <meta name="description"
        content="Bitstocks Trading Limited is a global pioneer in online trading and investment, offering award-winning platforms to thousands of clients worldwide.">
    <meta name="keywords"
        content="Bitstocks Trading Limited bank,regulated banking,forex trading,CFD trading,Forex,trading,online trading,mobile trading,licensed trading">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#282828">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <link rel="icon" href="<?php echo e(asset('frontend/img/favicon.ico')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/main.css')); ?>" />
    <link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="<?php echo e(asset('frontend/vendor/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('frontend/vendor/vendor/bootstrap-icons/bootstrap-icons.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('frontend/vendor/vendor/boxicons/css/boxicons.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('frontend/vendor/vendor/glightbox/css/glightbox.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('frontend/vendor/vendor/remixicon/remixicon.html')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('frontend/vendor/vendor/swiper/swiper-bundle.min.css')); ?>" rel="stylesheet">

    <style>

        body {
            font-family: "Open Sans", sans-serif;
            color: #444444;
        }

        a {
            color: #ff4a17;
            text-decoration: none;
        }

        a:hover {
            color: #ff724a;
            text-decoration: none;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Raleway", sans-serif;
        }

        /*--------------------------------------------------------------
# Back to top button
--------------------------------------------------------------*/
        .back-to-top {
            position: fixed;
            visibility: hidden;
            opacity: 0;
            right: 15px;
            bottom: 15px;
            z-index: 996;
            background: #ff4a17;
            width: 40px;
            height: 40px;
            border-radius: 4px;
            transition: all 0.4s;
        }

        .back-to-top i {
            font-size: 24px;
            color: #fff;
            line-height: 0;
        }

        .back-to-top:hover {
            background: #ff6a40;
            color: #fff;
        }

        .back-to-top.active {
            visibility: visible;
            opacity: 1;
        }

        /*--------------------------------------------------------------
# Preloader
--------------------------------------------------------------*/
        #preloader {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 9999;
            overflow: hidden;
            background: #fff;
        }

        #preloader:before {
            content: "";
            position: fixed;
            top: calc(50% - 30px);
            left: calc(50% - 30px);
            border: 6px solid #ff4a17;
            border-top-color: #ffe9e3;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            -webkit-animation: animate-preloader 1s linear infinite;
            animation: animate-preloader 1s linear infinite;
        }

        @-webkit-keyframes animate-preloader {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        @keyframes  animate-preloader {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        /*--------------------------------------------------------------
# Disable aos animation delay on mobile devices
--------------------------------------------------------------*/
        @media  screen and (max-width: 768px) {
            [data-aos-delay] {
                transition-delay: 0 !important;
            }
        }

        /*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/
        .header {
            transition: all 0.5s;
            z-index: 997;
            padding: 30px 0;
        }

        .header.sticked {
            background: rgba(14, 29, 52, 0.9);
            padding: 15px 0;
            box-shadow: 0px 2px 20px rgba(14, 29, 52, 0.1);
        }

        .header .logo img {
            max-height: 40px;
            margin-right: 6px;
        }

        .header .logo h1 {
            font-size: 30px;
            margin: 0;
            font-weight: 700;
            color: #fff;
            font-family: var(--font-primary);
        }

        /*--------------------------------------------------------------
# Desktop Navigation
--------------------------------------------------------------*/
        @media (min-width: 1280px) {
            .navbar {
                padding: 0;
            }

            .navbar ul {
                margin: 0;
                padding: 0;
                display: flex;
                list-style: none;
                align-items: center;
            }

            .navbar li {
                position: relative;
            }

            .navbar a,
            .navbar a:focus {
                display: flex;
                align-items: center;
                justify-content: space-between;
                padding: 10px 0 10px 30px;
                font-family: var(--font-primary);
                font-size: 16px;
                font-weight: 400;
                color: rgba(255, 255, 255, 0.6);
                white-space: nowrap;
                transition: 0.3s;
            }

            .navbar a i,
            .navbar a:focus i {
                font-size: 12px;
                line-height: 0;
                margin-left: 5px;
            }

            .navbar a:hover,
            .navbar .active,
            .navbar .active:focus,
            .navbar li:hover>a {
                color: #fff;
            }

            .navbar .get-a-quote,
            .navbar .get-a-quote:focus {
                background: var(--color-primary);
                padding: 8px 20px;
                margin-left: 30px;
                border-radius: 4px;
                color: #fff;
            }

            .navbar .get-a-quote:hover,
            .navbar .get-a-quote:focus:hover {
                color: #fff;
                background: #2756ff;
            }

            .navbar .dropdown ul {
                display: block;
                position: absolute;
                left: 14px;
                top: calc(100% + 30px);
                margin: 0;
                padding: 10px 0;
                z-index: 99;
                opacity: 0;
                visibility: hidden;
                background: #fff;
                box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
                transition: 0.3s;
                border-radius: 4px;
            }

            .navbar .dropdown ul li {
                min-width: 200px;
            }

            .navbar .dropdown ul a {
                padding: 10px 20px;
                font-size: 15px;
                text-transform: none;
                font-weight: 400;
                color: var(--color-secondary);
            }

            .navbar .dropdown ul a i {
                font-size: 12px;
            }

            .navbar .dropdown ul a:hover,
            .navbar .dropdown ul .active:hover,
            .navbar .dropdown ul li:hover>a {
                color: var(--color-primary);
            }

            .navbar .dropdown:hover>ul {
                opacity: 1;
                top: 100%;
                visibility: visible;
            }

            .navbar .dropdown .dropdown ul {
                top: 0;
                left: calc(100% - 30px);
                visibility: hidden;
            }

            .navbar .dropdown .dropdown:hover>ul {
                opacity: 1;
                top: 0;
                left: 100%;
                visibility: visible;
            }
        }

        @media (min-width: 1280px) and (max-width: 1366px) {
            .navbar .dropdown .dropdown ul {
                left: -90%;
            }

            .navbar .dropdown .dropdown:hover>ul {
                left: -100%;
            }
        }

        @media (min-width: 1280px) {

            .mobile-nav-show,
            .mobile-nav-hide {
                display: none;
            }
        }

        /*--------------------------------------------------------------
# Mobile Navigation
--------------------------------------------------------------*/
        @media (max-width: 1279px) {
            .navbar {
                position: fixed;
                top: 0;
                right: -100%;
                width: 100%;
                max-width: 400px;
                bottom: 0;
                transition: 0.3s;
                z-index: 9997;
            }

            .navbar ul {
                position: absolute;
                inset: 0;
                padding: 50px 0 10px 0;
                margin: 0;
                background: rgba(14, 29, 52, 0.9);
                overflow-y: auto;
                transition: 0.3s;
                z-index: 9998;
            }

            .navbar a,
            .navbar a:focus {
                display: flex;
                align-items: center;
                justify-content: space-between;
                padding: 12px 20px;
                font-family: var(--font-primary);
                font-size: 16px;
                font-weight: 500;
                color: rgba(255, 255, 255, 0.7);
                white-space: nowrap;
                transition: 0.3s;
            }

            .navbar a i,
            .navbar a:focus i {
                font-size: 12px;
                line-height: 0;
                margin-left: 5px;
            }

            .navbar a:hover,
            .navbar .active,
            .navbar .active:focus,
            .navbar li:hover>a {
                color: #fff;
            }

            .navbar .get-a-quote,
            .navbar .get-a-quote:focus {
                background: var(--color-primary);
                padding: 8px 20px;
                border-radius: 4px;
                margin: 15px;
                color: #fff;
            }

            .navbar .get-a-quote:hover,
            .navbar .get-a-quote:focus:hover {
                color: #fff;
                background: rgba(13, 66, 255, 0.8);
            }

            .navbar .dropdown ul,
            .navbar .dropdown .dropdown ul {
                position: static;
                display: none;
                padding: 10px 0;
                margin: 10px 20px;
                transition: all 0.5s ease-in-out;
                border: 1px solid #19335c;
            }

            .navbar .dropdown>.dropdown-active,
            .navbar .dropdown .dropdown>.dropdown-active {
                display: block;
            }

            .mobile-nav-show {
                color: #fff;
                font-size: 28px;
                cursor: pointer;
                line-height: 0;
                transition: 0.5s;
                z-index: 9999;
                margin-right: 10px;
            }

            .mobile-nav-hide {
                color: #fff;
                font-size: 32px;
                cursor: pointer;
                line-height: 0;
                transition: 0.5s;
                position: fixed;
                right: 20px;
                top: 20px;
                z-index: 9999;
            }

            .mobile-nav-active {
                overflow: hidden;
            }

            .mobile-nav-active .navbar {
                right: 0;
            }

            .mobile-nav-active .navbar:before {
                content: "";
                position: fixed;
                inset: 0;
                background: rgba(14, 29, 52, 0.8);
                z-index: 9996;
            }
        }


        /*--------------------------------------------------------------
# Hero Section
--------------------------------------------------------------*/
        #hero {
            width: 100%;
            height: 70vh;
            background: url("<?php echo e(asset('frontend/img/uiux.jpg')); ?>") top center;
            background-size: cover;
            position: relative;
            padding: 0;
        }

        #hero:before {
            content: "";
            background: rgba(13, 20, 26, 0.7);
            position: absolute;
            bottom: 0;
            top: 0;
            left: 0;
            right: 0;
        }

        #hero .hero-container {
            position: absolute;
            bottom: 0;
            top: 0;
            left: 0;
            right: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align: center;
        }

        #hero h1 {
            margin: 0 0 10px 0;
            font-size: 48px;
            font-weight: 700;
            line-height: 56px;
            text-transform: uppercase;
            color: #fff;
        }

        #hero h2 {
            color: #eee;
            margin-bottom: 50px;
            font-size: 24px;
        }

        #hero .btn-get-started {
            font-family: "Open Sans", sans-serif;
            text-transform: uppercase;
            font-weight: 500;
            font-size: 14px;
            display: inline-block;
            padding: 10px 35px 10px 35px;
            border-radius: 4px;
            transition: 0.5s;
            color: #fff;
            background: #ff4a17;
            border: 2px solid #ff4a17;
        }

        #hero .btn-get-started:hover {
            border-color: #fff;
            background: rgba(255, 255, 255, 0.1);
        }

        #hero .btn-watch-video {
            font-size: 16px;
            display: inline-block;
            transition: 0.5s;
            margin-left: 25px;
            color: #fff;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        #hero .btn-watch-video i {
            line-height: 0;
            color: #fff;
            font-size: 32px;
            transition: 0.3s;
            margin-right: 8px;
        }

        #hero .btn-watch-video:hover i {
            color: #ff4a17;
        }

        @media (min-width: 1024px) {
            #hero {
                background-attachment: fixed;
            }
        }

        @media (max-width: 768px) {
            #hero h1 {
                font-size: 28px;
                line-height: 36px;
            }

            #hero h2 {
                font-size: 18px;
                line-height: 24px;
                margin-bottom: 30px;
            }
        }
    </style>
</head>

<body style="background-color:#F2F2F5">

    <?php echo $__env->make('frontend.panels.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script src="../code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <div class="cover hide"></div>

    <section id="hero">
        <div class="hero-container" data-aos="fade-up" data-aos-delay="150">
            <h1>Terms of Use</h1>
        </div>
    </section><br><br>
    <section class="section terms">
        <div class="container pt-md-9">
            <h2>Bitstocks Trading Limited Terms of Use</h2>
            <p class="text-secondary small bold">Last updated on February 03rd, 2022</p>
            <hr class="my-4">
            <p class="bold">Welcome to Bitstocks Trading Limited</p>
            <p>This terms of use (together with the documents referred to in it) advises you the terms of use on which
                you may make use of our website <a href="<?php echo e(url('/')); ?>">bitstockslmtd.net</a> and any subdomains
                ("our site"), whether as a guest or a registered user. Use of our site includes accessing, browsing, or
                registering to use our site.</p>
            <p class="text-uppercase mb-5">Please read these terms of use carefully before you start to use our site, as
                these will apply to your use of our site. We recommend that you print a copy of this for future
                reference. By using our site, you confirm that you accept these terms of use and that you agree to
                comply with them. If you do not agree to these terms of use, you must not use our site.
            </p>
            <h3>Other applicable terms</h3><br>
            <h5>These terms of use refer to the following additional terms, which also apply to your use of our site:
            </h5><br>
            <p class="bold">Our Privacy Policy, which sets out the terms on which we process any personal data we
                collect from you, or that you provide to us. By using our site, you consent to such processing and you
                confirm that all data provided by you is accurate. Our Cookie Policy, which sets out information about
                the cookies on our site.
            </p>
            <p>If you use our Market Advisory or Automated Trading Services with regard to Fiat/Virtual Currencies (or
                any other services we may offer via our site) our Terms of Business for Market Advisory and Automated
                Trading Services (“Fiat/Virtual Currency Terms”) will apply. Where you have agreed the Virtual Currency
                Terms, they will prevail over these Terms of Website Use in the event of inconsistency.
            </p>
            <h3>Information about us</h3>
            <p>Bitstocksltd.com is a site operated by Bitstocks Trading Limited ( Bitstocks Limited "We"). We are
                registered in England and Wales under company number 08994234 and have our registered office at Tower
                42, 25 Old Broad Street, London EC2N 1HN.
            </p>
            <h5>We are a limited company.</h5><br>
            <h5>Changes to these terms</h5><br>
            <p>We may revise these terms of use at any time by amending this page. Please check this page from time to
                time to take notice of any changes we made, as they are binding on you.</p>
            <p>We may update our site from time to time, and may change the content at any time. However, please note
                that any of the content on our site may be out of date at any given time, and we are under no obligation
                to update it. We do not guarantee that our site, or any content on it, will be free from errors or
                omissions.</p>
            <h3>Access to our site</h3><br>
            <h5>Our site is made available free of charge.</h5><br>
            <p>We do not guarantee that our site, or any content on it, will always be available or be uninterrupted.
                Access to our site is permitted on a temporary basis. We may suspend, withdraw, discontinue or change
                all or any part of our site without notice. We will not be liable to you if for any reason our site is
                unavailable at any time or for any period. You are responsible for making all arrangements necessary for
                you to have access to our site.You are also responsible for ensuring that all persons who access our
                site through your internet connection are aware of these terms of use and other applicable terms and
                conditions, and that they comply with them.</p>
            <h5>Your account and password</h5><br>
            <p>If you choose, or you are provided with, a user identification code, password or any other piece of
                information as part of our security procedures, you must treat such information as confidential. You
                must not disclose it to any third party. We have the right to disable any user identification code or
                password, whether chosen by you or allocated by us, at any time, if in our reasonable opinion you have
                failed to comply with any of the provisions of these terms of use. If you know or suspect that anyone
                other than you knows your user identification code or password, you must promptly notify us at <a
                    href="cdn-cgi/l/email-protection.html#097a7c7979667b7d496b607d7a7d666a627a657d6d276a6664"><span
                        class="__cf_email__"
                        data-cfemail="97e4e2e7e7f8e5e3d7f5fee3e4e3f8f4fce4fbe3f3b9f4f8fa">[email&#160;protected]</span></a>
                or contact us by WhatsApp our account team on 0771 654 9288.
            </p>
            <h5>Intellectual property rights</h5><br>
            <p>We are the owner or the licensee of all intellectual property rights in our site, and in the material
                published on it. Those works are protected by copyright laws and treaties around the world. All such
                rights are reserved. You may print off one copy, and may download extracts, of any page(s) from our site
                for your personal use and you may draw the attention of others within your organisation to content
                posted on our site. You must not modify the paper or digital copies of any materials you have printed
                off or downloaded in any way, and you must not use any illustrations, photographs, video or audio
                sequences or any graphics separately from any accompanying text. Our status (and that of any identified
                contributors) as the authors of content on our site must always be acknowledged. You must not use any
                part of the content on our site for commercial purposes without obtaining a licence to do so from us or
                our licensors. If you print off, copy or download any part of our site in breach of these terms of use,
                your right to use our site will cease immediately and you must, at our option, return or destroy any
                copies of the materials you have made.
            </p>
            <h5>No reliance on information</h5><br>
            <p>The general content on our site is provided for general information only. It is not intended to amount to
                advice on which you should rely – we will only give you advice under the Fiat/Virtual Currency Terms.
                Although we make reasonable efforts to update the information on our site, we make no representations,
                warranties or guarantees, whether express or implied, that the content on our site is accurate, complete
                or up-to-date.</p>
            <h5>Limitation of our liability</h5><br>
            <p>Nothing in these terms of use excludes or limits our liability for death or personal injury arising from
                our negligence, or our fraud or fraudulent misrepresentation, or any other liability that cannot be
                excluded or limited by English law. To the extent permitted by law, we exclude all conditions,
                warranties, representations or other terms which may apply to our site or any content on it, whether
                express or implied. We will not be liable to any user for any loss or damage, whether in contract, tort
                (including negligence), breach of statutory duty, or otherwise, even if foreseeable, arising under or in
                connection with:
            </p>
            <p><strong>Use of, or inability to use, our site; or use of or reliance on any content displayed on our
                    site.
                </strong></p>
            <p><strong>If you are a business user, please note that in particular, we will not be liable for:
                </strong></p>
            <p>loss of profits, sales, business, or revenue;business interruption;loss of anticipated savings;loss of
                business opportunity, goodwill or reputation; orany indirect or consequential loss or damage.
            </p>
            <p>If you are a consumer user, please note that we only provide our site for domestic and private use. You
                agree not to use our site for any commercial or business purposes, and we have no liability to you for
                any loss of profit, loss of business, business interruption, or loss of business opportunity. We will
                not be liable for any loss or damage caused by a virus, distributed denial-of-service attack, or other
                technologically harmful material that may infect your computer equipment, computer programs, data or
                other proprietary material due to your use of our site or to your downloading of any content on it, or
                on any website linked to it. We assume no responsibility for the content of websites linked on our site.
                Such links should not be interpreted as endorsement by us of those linked websites. We will not be
                liable for any loss or damage that may arise from your use of them. Different limitations and exclusions
                of liability will apply to liability arising under the Virtual Currency Terms use to you, which will be
                set out in our Terms and conditions of supply.</p>
            <h5>Uploading content to our site</h5><br>
            <p>Whenever you make use of a feature that allows you to upload content to our site, or to make contact with
                other users of our site, you must comply with the content standards set out in our Acceptable Use
                Policy. You warrant that any such contribution does comply with those standards, and you will be liable
                to us and indemnify us for any breach of that warranty. If you are a consumer user, this means you will
                be responsible for any loss or damage we suffer as a result of your breach of warranty. The views
                expressed by other users on our site do not represent our views or values.
            </p>
            <h5>Viruses</h5><br>
            <p>We do not guarantee that our site will be secure or free from bugs or viruses. You are responsible for
                configuring your information technology, computer programmes and platform in order to access our site.
                You should use your own virus protection software. You must not misuse our site by knowingly introducing
                viruses, trojans, worms, logic bombs or other material which is malicious or technologically harmful.
                You must not attempt to gain unauthorised access to our site, the server on which our site is stored or
                any server, computer or database connected to our site. You must not attack our site via a
                denial-of-service attack or a distributed denial-of service attack. By breaching this provision, you
                would commit a criminal offence under the Computer Misuse Act 1990. We will report any such breach to
                the relevant law enforcement authorities and we will co-operate with those authorities by disclosing
                your identity to them. In the event of such a breach, your right to use our site will cease immediately.
            </p>
            <h5>Linking to our site</h5><br>
            <p>You may link to our website pages, provided you do so in a way that is fair and legal and does not damage
                our reputation or take advantage of it. You must not establish a link in such a way as to suggest any
                form of association, approval or endorsement on our part where none exists. Our site must not be framed
                on any other site. We reserve the right to withdraw linking permission without notice. If you wish to
                make any use of content on our site other than that set out above, please contact <a
                    href="cdn-cgi/l/email-protection.html#59313c353536193b302d2a2d363a322a352d3d773a3634"><span
                        class="__cf_email__"
                        data-cfemail="1a727f7676755a78736e696e75797169766e7e34797577">[email&#160;protected]</span></a>
            </p>
            <h5>Third party links and resources in our site</h5><br>
            <p>Where our site contains links to other sites and resources provided by third parties, these links are
                provided for your information only.We have no control over the contents of those sites or resources.
            </p>
            <h5>Applicable law</h5><br>
            <p>If you are a consumer, please note that these terms of use, its subject matter and its formation, are
                governed by English law. You and we both agree to that the courts of England and Wales will have
                non-exclusive jurisdiction. However, if you are a resident of Northern Ireland you may also bring
                proceedings in Northern Ireland, and if you are resident of Scotland, you may also bring proceedings in
                Scotland. If you are a business, these terms of use, its subject matter and its formation (and any
                non-contractual disputes or claims) are governed by English law. We both agree to the exclusive
                jurisdiction of the courts of England and Wales.</p>
            <h5>Trade marks</h5><br>
            <p>"Bitstocks Trading Limited" and the Bitstocks Logo are UK REGISTERED trade marks of Bitstocks Ltd.
            </p>
        </div>
    </section>
    <style>
        .footers {
            font-size: 14px;
            background-color: var(--color-secondary);
            padding: 50px 0;
            color: white;
        }

        .footers a {
            color: #f5f5f5;
        }

        .footers a:hover {
            color: #e3612d;
        }

        .footers p {
            color: #f5f5f5;
        }

        .footers ul {
            line-height: 30px;
        }

        .footers h5 {
            color: #fff;
            font-family: "Raleway", sans-serif;
            font-size: 20px;
            font-weight: 500;
            line-height: 26px;
        }

        .footers .bg-dark {
            background-color: #010c2b;
        }

        #social-fb:hover {
            color: #3B5998;
            transition: all .001s;
        }

        #social-tw:hover {
            color: #4099FF;
            transition: all .001s;
        }

        #social-gp:hover {
            color: #d34836;
            transition: all .001s;
        }

        #social-em:hover {
            color: #f39c12;
            transition: all .001s;
        }

        #social-yb:hover {
            color: #f50a0a;
            transition: all .001s;
        }

        #social-tm:hover {
            color: #02103b;
            transition: all .001s;
        }

        hr {
            width: 50%;
            margin: 0;
            border: none;
        }

        .disc {
            font-size: 12px;
            line-height: 20px;
            color: #fff;
        }

        ul#footermenu li {
            display: inline;
            float: left;
        }

        .footer {
            padding: 10px 0;
        }

        .footer .copyright {
            margin: 0;
        }

        .footer .footer-social-links {
            text-align: right;
        }

        .footer .footer-social-links a {
            display: inline-block;
            padding: 0 6px;
            color: #fff;
        }

        .footer .footer-social-links a:hover {
            color: #e3612d;
        }

        .bg-dark a {
            color: #aaa;
        }

        .font-alt {
            font-family: "Raleway", sans-serif;
            color: #fff;
        }
    </style>

       <?php echo $__env->make('frontend.panels.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script src="<?php echo e(asset('frontend/vendor/vendor/purecounter/purecounter.html')); ?>"></script>
    <script src="<?php echo e(asset('frontend/vendor/vendor/aos/aos.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/vendor/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/vendor/vendor/glightbox/js/glightbox.min.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/vendor/vendor/isotope-layout/isotope.pkgd.min.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/vendor/vendor/swiper/swiper-bundle.min.js')); ?>"></script>

    <script src="<?php echo e(asset('frontend/vendor/vendor/main.js')); ?>"></script>
</body>

</html>
<?php /**PATH S:\jobs\bitstocks_trading\resources\views/frontend/terms.blade.php ENDPATH**/ ?>