@extends('layout.header')

@include('layout.main')
    <section class="hero-section ptb-120 bg-dark text-white" style="background: url('assets/img/shape/dot-dot-wave-shape.svg')no-repeat bottom left">
        <div class="container">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-xl-5 col-lg-5">
                    <div class="hero-content-wrap text-center text-xl-start text-lg-start mt-5 mt-lg-0 mt-xl-0" data-aos="fade-up">
                        <h1 class="fw-bold display-5">You Imagine, We Build</h1>
                        <p class="lead">We don't just deliver a solution, we help you project a future with it. A Future with unprecedented technology.</p>
                        <div class="hero-subscribe-form-wrap pt-4 position-relative m-auto m-xl-0 d-none d-md-block d-lg-block d-xl-block">
                            <form id="subscribe-form" name="email-form" class="hero-subscribe-form d-block d-lg-flex d-md-flex">
                                <input type="email" class="form-control me-2" name="Email" data-name="Email" placeholder="Enter Your Email Address" id="email-address" required="">
                                <input type="submit" value="Get me a quote" data-wait="Please wait..." class="btn btn-primary mt-3 mt-lg-0 mt-md-0">
                            </form>
                            <ul class="nav subscribe-feature-list mt-3 justify-content-lg-start justify-content-md-center">
                                <li class="nav-item">
                                    <span class="ms-0"><i class="far fa-check-circle text-primary me-2"></i>Free 14-day trial</span>
                                </li>
                                <li class="nav-item">
                                    <span><i class="far fa-check-circle text-primary me-2"></i>No pre payment required</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 mt-lg-5 mt-4">
                    <div class="hero-img-wrap position-relative" data-aos="fade-up">
                        <div class="hero-screen-wrap">
                            <div class="phone-screen">
                                <img src="assets/img/screen/phone-screen.png" alt="hero image" class="position-relative img-fluid">
                            </div>
                            <div class="mac-screen">
                                <img src="assets/img/screen/mac-screen.png" alt="hero image" class="position-relative img-fluid rounded-custom">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="promo-section ptb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6">
                    <div class="section-heading text-center" data-aos="fade-up">
                        <h2>Your Success is OUR Success</h2>
                        <p>We do not compromise on your Product.   </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="promo-card-wrap promo-border-hover border border-2 bg-white rounded-custom p-5 mb-4 mb-lg-0 mb-md-4" data-aos="fade-up" data-aos-delay="50">
                        <div class="promo-card-info">
                            <h3 class="display-5 fw-medium mb-4">100+</h3>
                            <h2 class="h5">Completed Projects</h2>
                            <p class="mb-0">Passionate Development, Timely Delivery.  </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="promo-card-wrap promo-border-hover border border-2 bg-white rounded-custom p-5 mb-4 mb-lg-0 mb-md-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="promo-card-info">
                            <h3 class="display-5 fw-medium mb-4">57</h3>
                            <h2 class="h5">Happy Client</h2>
                            <p class="mb-0">We always put in Innovative ideas for your Project. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="promo-card-wrap promo-border-hover border border-2 bg-white rounded-custom p-5 mb-4 mb-lg-0 mb-md-0" data-aos="fade-up" data-aos-delay="150">
                        <div class="promo-card-info">
                            <h3 class="display-5 fw-medium mb-4">99%</h3>
                            <h2 class="h5">24/7 Support</h2>
                            <p class="mb-0">We value not just your Project but your Business too. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--highlight promo end-->

    <!--feature section start-->
    <section class="feature-section-two pt-60 pb-120">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-5 col-md-12">
                    <div class="section-heading" data-aos="fade-up">
                        <h4 class="h5 text-primary">WHAT</h4>
                        <h2>The Legendary idea that your Business Needs</h2>
                        <p>We understand how difficult it is to find a solution. We help you build your minimum viable product.</p>
                        <ul class="list-unstyled mt-5">
                            <li class="d-flex align-items-start mb-4">
                                <div class="icon-box bg-primary rounded me-4">
                                    <i class="fas fa-bezier-curve text-white"></i>
                                </div>
                                <div class="icon-content">
                                    <h3 class="h5">The DESIGN</h3>
                                    <p>The thing that catches the EYE of the Beholder. You guide, we visualize, together we create your dream project.
                                    </p>
                                </div>
                            </li>
                            <li class="d-flex align-items-start mb-4">
                                <div class="icon-box bg-danger rounded me-4">
                                    <i class="fas fa-fingerprint text-white"></i>
                                </div>
                                <div class="icon-content">
                                    <h3 class="h5">Dedicated DEVELOPMENT</h3>
                                    <p>Syncing the vision of an idea to the rhythm of the keyboard, regularly, successfully.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-7">
                    <div class="feature-img-wrap position-relative d-flex flex-column align-items-end">
                        <ul class="img-overlay-list list-unstyled position-absolute">
                            <li class="d-flex align-items-center bg-white rounded shadow-sm p-3" data-aos="fade-up" data-aos-delay="50">
                                <i class="fas fa-check bg-primary text-white rounded-circle"></i>
                                <h6 class="mb-0">App Development</h6>
                            </li>
                            <li class="d-flex align-items-center bg-white rounded shadow-sm p-3" data-aos="fade-up" data-aos-delay="100">
                                <i class="fas fa-check bg-primary text-white rounded-circle"></i>
                                <h6 class="mb-0">Data Analysis and Reporting</h6>
                            </li>
                            <li class="d-flex align-items-center bg-white rounded shadow-sm p-3" data-aos="fade-up" data-aos-delay="150">
                                <i class="fas fa-check bg-primary text-white rounded-circle"></i>
                                <h6 class="mb-0">Cloud and API Development</h6>
                            </li>
                        </ul>
                        <img src="assets/img/feature-img3.jpg" alt="feature image" class="img-fluid rounded-custom" data-aos="fade-up">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="feature-section pt-60 pb-120">
        <div class="container">
            <div class="row align-items-lg-center justify-content-between">
                <div class="col-lg-5 order-lg-2 mb-7 mb-lg-0">
                    <div class="mb-4" data-aos="fade-up">
                        <h2>Custom Software Development Partner.</h2>
                        <p>Convenient use of the solution to get rid of old-school paper filing enterprise structure. Time To Go DIGITAL.  </p>
                    </div>
                    <ul class="list-unstyled d-flex flex-wrap list-two-col mt-5" data-aos="fade-up" data-aos-delay="50">
                        <li>
                            <span class="d-block mb-4"><i class="fal fa-user fa-2x text-primary"></i></span>
                            <h3 class="h5">User analysis</h3>
                            <p>Zero expertise to an expert in a matter of minutes.</p>
                        </li>
                        <li>
                            <span class="d-block mb-4"><i class="fal fa-watch fa-2x text-primary"></i></span>
                            <h3 class="h5">Real time data</h3>
                            <p>Instant update to whatever is happening around you. </p>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="pr-lg-4">
                        <div class="bg-light text-center rounded-custom overflow-hidden p-lg-5 p-3 mx-lg-auto" data-aos="fade-up" data-aos-delay="50">
                            <img src="assets/img/dashboard-img.png" alt="" class="img-fluid">
                            <div class="position-absolute bg-primary-dark z--1 dot-mask dm-size-16 dm-wh-350 top--40 left--40 top-left"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--feature section end-->

    <!--feature service grid section start-->
    <section class="feature-section ptb-120 bg-dark text-white ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section-heading text-center" data-aos="fade-up">
                        <h4 class="h5 text-primary">WHY</h4>
                        <h2>Creating value through true convergence.</h2>
                        <p>What we provide in our solution is what helps you save time and cost.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="feature-grid">
                        <div class="feature-card  bg-custom-light promo-border-hover border border-2 border-light text-white shadow-sm highlight-card rounded-custom p-5" data-aos="fade-up" data-aos-delay="50">
                            <div class="icon-box d-inline-block rounded-circle bg-primary-soft mb-32">
                                <i class="fal fa-analytics icon-sm text-primary"></i>
                            </div>
                            <div class="feature-content">
                                <h3 class="h5">Advanced analytics</h3>
                                <p>Accurate data of Graphs and Charts to help understand your reports in a much more convenient way.</p>
                                <p> No a plus feature. We feel this is a basic requirement.</p>
                                <h6 class="mt-4">Includes...</h6>
                                <ul class="list-unstyled mb-0">
                                    <li class="py-1"><i class="fad fa-check-circle me-2 text-primary"></i>Daily Reports</li>
                                    <li class="py-1"><i class="fad fa-check-circle me-2 text-primary"></i>Highs and Lows in a day</li>
                                    <li class="py-1"><i class="fad fa-check-circle me-2 text-primary"></i>Real Time Update</li>
                                    <li class="py-1"><i class="fad fa-check-circle me-2 text-primary"></i>Interactive Information</li>
                                    <li class="py-1"><i class="fad fa-check-circle me-2 text-primary"></i>Necessary Overview</li>
                                    <li class="py-1"><i class="fad fa-check-circle me-2 text-primary"></i>Upto date in version</li>
                                </ul>
                            </div>
                            <a href="service-single.html" class="link-with-icon text-decoration-none mt-3">View Details <i class="far fa-arrow-right"></i></a>
                        </div>
                        <div class="feature-card  bg-custom-light promo-border-hover border border-2 border-light text-white shadow-sm rounded-custom p-5" data-aos="fade-up" data-aos-delay="50">
                            <div class="icon-box d-inline-block rounded-circle bg-success-soft mb-32">
                                <i class="fal fa-file-chart-line icon-sm text-success"></i>
                            </div>
                            <div class="feature-content">
                                <h3 class="h5">Automated Reports</h3>
                                <p class="mb-0">Get what reports you want, no need to customize, just ineract with the product.</p>
                            </div>
                            <a href="service-single.html" class="link-with-icon text-decoration-none mt-3">View Details <i class="far fa-arrow-right"></i></a>
                        </div>
                        <div class="feature-card  bg-custom-light promo-border-hover border border-2 border-light text-white shadow-sm rounded-custom p-5" data-aos="fade-up" data-aos-delay="50">
                            <div class="icon-box d-inline-block rounded-circle bg-danger-soft mb-32">
                                <i class="fal fa-user-friends icon-sm text-danger"></i>
                            </div>
                            <div class="feature-content">
                                <h3 class="h5">SAAS Solution</h3>
                                <p class="mb-0">Seek what you need, make a profile, ready to go for trial. Zero Waiting Time.</p>
                            </div>
                            <a href="service-single.html" class="link-with-icon text-decoration-none mt-3">View Details <i class="far fa-arrow-right"></i></a>
                        </div>
                        <div class="feature-card  bg-custom-light promo-border-hover border border-2 border-light text-white shadow-sm rounded-custom p-5" data-aos="fade-up" data-aos-delay="50">
                            <div class="icon-box d-inline-block rounded-circle bg-dark-soft mb-32">
                                <i class="fal fa-spell-check icon-sm text-dark"></i>
                            </div>
                            <div class="feature-content">
                                <h3 class="h5">Export/Import Ease</h3>
                                <p class="mb-0">Import your existing data, process, then export to any social media/ email platforms.</p>
                            </div>
                            <a href="service-single.html" class="link-with-icon text-decoration-none mt-3">View Details <i class="far fa-arrow-right"></i></a>
                        </div>
                        <div class="feature-card  bg-custom-light promo-border-hover border border-2 border-light text-white shadow-sm rounded-custom p-5" data-aos="fade-up" data-aos-delay="50">
                            <div class="icon-box d-inline-block rounded-circle bg-warning-soft mb-32">
                                <i class="fal fa-cog icon-sm text-warning"></i>
                            </div>
                            <div class="feature-content">
                                <h3 class="h5">Easy Customization</h3>
                                <p class="mb-0">Dynamically change your own settings with no hassle of Queued Support Ticket.</p>
                            </div>
                            <a href="service-single.html" class="link-with-icon text-decoration-none mt-3">View Details <i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--feature service grid section end-->

    <!--work process section start-->
    <section class="work-process ptb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6">
                    <div class="section-heading text-center" data-aos="fade-up">
                        <h4 class="h5 text-primary">HOW</h4>
                        <h2>Mainstream WorkFlow Process</h2>
                        <p>We Visualize, we strategize, we design, we implement, we support. </p>
                    </div>
                </div>
            </div>
            <div class="row d-flex align-items-center">
                <div class="col-md-6 col-lg-3">
                    <div class="process-card text-center px-4 py-lg-5 py-4 rounded-custom shadow-hover mb-3 mb-lg-0" data-aos="fade-up" data-aos-delay="50">
                        <div class="process-icon border border-light bg-custom-light rounded-custom p-3">
                            <span class="h2 mb-0 text-primary fw-bold">1</span>
                        </div>
                        <h3 class="h5">Research</h3>
                        <p class="mb-0">Getting to know what to build creates a sense of imagination.</p>
                    </div>
                </div>
                <div class="dots-line first"></div>
                <div class="col-md-6 col-lg-3">
                    <div class="process-card text-center px-4 py-lg-5 py-4 rounded-custom shadow-hover mb-3 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
                        <div class="process-icon border border-light bg-custom-light rounded-custom p-3">
                            <span class="h2 mb-0 text-primary fw-bold">2</span>
                        </div>
                        <h3 class="h5">Design</h3>
                        <p class="mb-0">Bringing Imagination to Reality through the art of Interface.</p>
                    </div>
                </div>
                <div class="dots-line first"></div>
                <div class="col-md-6 col-lg-3">
                    <div class="process-card text-center px-4 py-lg-5 py-4 rounded-custom shadow-hover mb-3 mb-lg-0 mb-md-0" data-aos="fade-up" data-aos-delay="150">
                        <div class="process-icon border border-light bg-custom-light rounded-custom p-3">
                            <span class="h2 mb-0 text-primary fw-bold">3</span>
                        </div>
                        <h3 class="h5">Develop</h3>
                        <p class="mb-0">Carrying on the Interface to the exciting phase of development.</p>
                    </div>
                </div>
                <div class="dots-line first"></div>
                <div class="col-md-6 col-lg-3">
                    <div class="process-card text-center px-4 py-lg-5 py-4 rounded-custom shadow-hover mb-0" data-aos="fade-up" data-aos-delay="200">
                        <div class="process-icon border border-light bg-custom-light rounded-custom p-3">
                            <span class="h2 mb-0 text-primary fw-bold">4</span>
                        </div>
                        <h3 class="h5">Deliver</h3>
                        <p class="mb-0">Interactive development to integrating your needs to solve your problems .</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--work process section end-->

    <!--integration section start-->
    <section class="integration-section pt-60 pb-120">
        <div class="container">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-6 col-md-12">
                    <div class="section-heading" data-aos="fade-up">
                        <h4 class="h5 text-primary">WITH WHO</h4>
                        <h2>Had the Previlege to Work</h2>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="text-lg-end mb-5 mb-lg-0" data-aos="fade-up">
                        <a href="integrations.html" class="btn btn-primary">View All Integrations</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="integration-wrapper position-relative w-100">
                        <!--animated shape start-->
                        <ul class="position-absolute animate-element parallax-element shape-service z--1 d-none d-lg-none d-xl-block">

                            <li class="layer" data-depth="0.02">
                                <img src="assets/img/color-shape/feature-2.svg" alt="shape" class="img-fluid position-absolute color-shape-2 z-5">
                            </li>
                            <li class="layer" data-depth="0.03">
                                <img src="assets/img/color-shape/feature-3.svg" alt="shape" class="img-fluid position-absolute color-shape-3">
                            </li>
                        </ul>
                        <!--animated shape end-->
                        <ul class="integration-list list-unstyled mb-0">
                            <!-- <li data-aos="fade-up" data-aos-delay="50">
                                <div class="single-integration">
                                    <img src="assets/img/integations/airbnb.png" alt="integration" class="img-fluid">
                                    <h6 class="mb-0 mt-4">Brand Name</h6>
                                </div>
                            </li>
                            <li data-aos="fade-up" data-aos-delay="50">
                                <div class="single-integration">
                                    <img src="assets/img/integations/figma.png" alt="integration" class="img-fluid">
                                    <h6 class="mb-0 mt-4">Brand Name</h6>
                                </div>
                            </li>
                            <li data-aos="fade-up" data-aos-delay="50">
                                <div class="single-integration">
                                    <img src="assets/img/integations/facebook.png" alt="integration" class="img-fluid">
                                    <h6 class="mb-0 mt-4">Brand Name</h6>
                                </div>
                            </li>
                            <li data-aos="fade-up" data-aos-delay="50">
                                <div class="single-integration">
                                    <img src="assets/img/integations/sales-force.png" alt="integration" class="img-fluid">
                                    <h6 class="mb-0 mt-4">Brand Name</h6>
                                </div>
                            </li>
                            <li data-aos="fade-up" data-aos-delay="50">
                                <div class="single-integration">
                                    <img src="assets/img/integations/atlassian.png" alt="integration" class="img-fluid">
                                    <h6 class="mb-0 mt-4">Brand Name</h6>
                                </div>
                            </li>
                            <li data-aos="fade-up" data-aos-delay="50">
                                <div class="single-integration">
                                    <img src="assets/img/integations/dropbox-2.png" alt="integration" class="img-fluid">
                                    <h6 class="mb-0 mt-4">Brand Name</h6>
                                </div>
                            </li> -->
                            <li data-aos="fade-up" data-aos-delay="100">
                                <div class="single-integration">
                                    <img src="assets/img/integations/nepalGovtLogo.png" alt="integration" class="img-fluid">
                                    <h6 class="mb-0 mt-4">TID Hetauda</h6>
                                </div>
                            </li>
                            <li data-aos="fade-up" data-aos-delay="100">
                                <div class="single-integration">
                                    <img src="assets/img/integations/nepalGovtLogo.png" alt="integration" class="img-fluid">
                                    <h6 class="mb-0 mt-4">BKTP Tunnel</h6>
                                </div>
                            </li>
                            <li data-aos="fade-up" data-aos-delay="100">
                                <div class="single-integration">
                                    <img src="assets/img/integations/nepalGovtLogo.png" alt="integration" class="img-fluid">
                                    <h6 class="mb-0 mt-4">Transport Htd </h6>
                                </div>
                            </li>
                            <!-- <li data-aos="fade-up" data-aos-delay="100">
                                <div class="single-integration">
                                    <img src="assets/img/integations/nepalGovtLogo.png" alt="integration" class="img-fluid">
                                    <h6 class="mb-0 mt-4">श्रम, राेजगार तथा यातायात मन्त्रालय
                                        </h6>
                                </div>
                            </li> -->

                            <li data-aos="fade-up" data-aos-delay="100">
                                <div class="single-integration">
                                    <img src="assets/img/integations/upahaar.webp" alt="integration" class="img-fluid">
                                    <h6 class="mb-0 mt-4">Upahaar</h6>
                                </div>
                            </li>

                            <li data-aos="fade-up" data-aos-delay="100">
                                <div class="single-integration">
                                    <img src="assets/img/integations/google-analytics.png" alt="integration" class="img-fluid">
                                    <h6 class="mb-0 mt-4">Brand Name</h6>
                                </div>
                            </li>

                            <li data-aos="fade-up" data-aos-delay="150">
                                <div class="single-integration">
                                    <img src="assets/img/integations/google-drive.png" alt="integration" class="img-fluid">
                                    <h6 class="mb-0 mt-4">Brand Name</h6>
                                </div>
                            </li>

                            <!-- <li data-aos="fade-up" data-aos-delay="150">
                                <div class="single-integration">
                                    <img src="assets/img/integations/hubspot.png" alt="integration" class="img-fluid">
                                    <h6 class="mb-0 mt-4">Brand Name</h6>
                                </div>
                            </li>

                            <li data-aos="fade-up" data-aos-delay="150">
                                <div class="single-integration">
                                    <img src="assets/img/integations/instagram.png" alt="integration" class="img-fluid">
                                    <h6 class="mb-0 mt-4">Brand Name</h6>
                                </div>
                            </li> -->
                            <!-- <li data-aos="fade-up" data-aos-delay="150">
                                <div class="single-integration">
                                    <img src="assets/img/integations/linkedin.png" alt="integration" class="img-fluid">
                                    <h6 class="mb-0 mt-4">Brand Name</h6>
                                </div>
                            </li>
                            <li data-aos="fade-up" data-aos-delay="150">
                                <div class="single-integration">
                                    <img src="assets/img/integations/mailchimp.png" alt="integration" class="img-fluid">
                                    <h6 class="mb-0 mt-4">Brand Name</h6>
                                </div>
                            </li>
                            <li data-aos="fade-up" data-aos-delay="150">
                                <div class="single-integration">
                                    <img src="assets/img/integations/marekto.png" alt="integration" class="img-fluid">
                                    <h6 class="mb-0 mt-4">Brand Name</h6>
                                </div>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--integration section end-->

    <!--customer review tab section start-->
    <!-- <section class="testimonial-section ptb-120 bg-light">
        <div class="container">
            <div class="row justify-content-center align-content-center">
                <div class="col-md-10 col-lg-6">
                    <div class="section-heading text-center" data-aos="fade-up">
                        <h4 class="h5 text-primary">Testimonial</h4>
                        <h2>What They Say About Us</h2>
                        <p>Uniquely promote adaptive quality vectors rather than stand-alone e-markets pontificate alternative architectures with accurate schemas.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="position-relative w-100" data-aos="fade-up" data-aos-delay="50">
                        <div class="swiper-container testimonialSwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide border border-2 p-5 rounded-custom position-relative">
                                    <img src="assets/img/testimonial/quotes-dot.svg" alt="quotes" width="100" class="img-fluid position-absolute left-0 top-0 z--1 p-3">
                                    <div class="d-flex mb-32 align-items-center">
                                        <img src="assets/img/testimonial/1.jpg" class="img-fluid me-3 rounded" width="60" alt="user">
                                        <div class="author-info">
                                            <h6 class="mb-0">Mr.Rupan Oberoi</h6>
                                            <small>Founder and CEO at Amaara Herbs</small>
                                        </div>
                                    </div>
                                    <blockquote>
                                        <h6>The Best Template You Got to Have it!</h6>
                                        Globally network long-term high-impact schemas vis-a-vis distinctive e-commerce
                                        cross-media infrastructures rather than ethical
                                    </blockquote>
                                    <ul class="review-rate mb-0 mt-2 list-unstyled list-inline">
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                    </ul>
                                    <img src="assets/img/testimonial/quotes.svg" alt="quotes" class="position-absolute right-0 bottom-0 z--1 pe-4 pb-4">
                                </div>
                                <div class="swiper-slide border border-2 p-5 rounded-custom position-relative">
                                    <img src="assets/img/testimonial/quotes-dot.svg" alt="quotes" width="100" class="img-fluid position-absolute left-0 top-0 z--1 p-3">
                                    <div class="d-flex mb-32 align-items-center">
                                        <img src="assets/img/testimonial/3.jpg" class="img-fluid me-3 rounded" width="60" alt="user">
                                        <div class="author-info">
                                            <h6 class="mb-0">Oberoi R.</h6>
                                            <small>CEO at Herbs</small>
                                        </div>
                                    </div>
                                    <blockquote>
                                        <h6>Embarrassed by the First Version.</h6>
                                        Dynamically create innovative core competencies with effective best
                                        practices promote innovative infrastructures.
                                    </blockquote>
                                    <ul class="review-rate mb-0 mt-2 list-unstyled list-inline">
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                    </ul>
                                    <img src="assets/img/testimonial/quotes.svg" alt="quotes" class="position-absolute right-0 bottom-0 z--1 pe-4 pb-4">
                                </div>
                                <div class="swiper-slide border border-2 p-5 rounded-custom position-relative">
                                    <img src="assets/img/testimonial/quotes-dot.svg" alt="quotes" width="100" class="img-fluid position-absolute left-0 top-0 z--1 p-3">
                                    <div class="d-flex mb-32 align-items-center">
                                        <img src="assets/img/testimonial/2.jpg" class="img-fluid me-3 rounded" width="60" alt="user">
                                        <div class="author-info">
                                            <h6 class="mb-0">Mr.Rupan Oberoi</h6>
                                            <small>Founder and CEO</small>
                                        </div>
                                    </div>
                                    <blockquote>
                                        <h6>Amazing Quiety template!</h6>
                                        Appropriately negotiate interactive niches rather than parallel strategic theme incubate premium total linkage areas.
                                    </blockquote>
                                    <ul class="review-rate mb-0 mt-2 list-unstyled list-inline">
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                    </ul>
                                    <img src="assets/img/testimonial/quotes.svg" alt="quotes" class="position-absolute right-0 bottom-0 z--1 pe-4 pb-4">
                                </div>
                                <div class="swiper-slide border border-2 p-5 rounded-custom position-relative">
                                    <img src="assets/img/testimonial/quotes-dot.svg" alt="quotes" width="100" class="img-fluid position-absolute left-0 top-0 z--1 p-3">
                                    <div class="d-flex mb-32 align-items-center">
                                        <img src="assets/img/testimonial/4.jpg" class="img-fluid me-3 rounded" width="60" alt="user">
                                        <div class="author-info">
                                            <h6 class="mb-0">Joan Dho</h6>
                                            <small>Founder and CTO</small>
                                        </div>
                                    </div>
                                    <blockquote>
                                        <h6>Best Template for SAAS Company!</h6>
                                        Dynamically create innovative core competencies with effective best
                                        practices promote innovative infrastructures.
                                    </blockquote>
                                    <ul class="review-rate mb-0 mt-2 list-unstyled list-inline">
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                    </ul>
                                    <img src="assets/img/testimonial/quotes.svg" alt="quotes" class="position-absolute right-0 bottom-0 z--1 pe-4 pb-4">
                                </div>
                                <div class="swiper-slide border border-2 p-5 rounded-custom position-relative">
                                    <img src="assets/img/testimonial/quotes-dot.svg" alt="quotes" width="100" class="img-fluid position-absolute left-0 top-0 z--1 p-3">
                                    <div class="d-flex mb-32 align-items-center">
                                        <img src="assets/img/testimonial/5.jpg" class="img-fluid me-3 rounded" width="60" alt="user">
                                        <div class="author-info">
                                            <h6 class="mb-0">Ranu Mondal</h6>
                                            <small>Lead Developer</small>
                                        </div>
                                    </div>
                                    <blockquote>
                                        <h6>It is undeniably good!</h6>
                                        Rapidiously supply client-centric e-markets and maintainable processes progressively engineer
                                    </blockquote>
                                    <ul class="review-rate mb-0 mt-2 list-unstyled list-inline">
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                    </ul>
                                    <img src="assets/img/testimonial/quotes.svg" alt="quotes" class="position-absolute right-0 bottom-0 z--1 pe-4 pb-4">
                                </div>
                            </div>
                        </div>
                        <span class="swiper-button-next"></span>
                        <span class="swiper-button-prev"></span>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--customer review tab section end-->

    <!--cat subscribe start-->
    <section class="cta-subscribe bg-dark text-white ptb-120 position-relative overflow-hidden">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="subscribe-info-wrap text-center position-relative z-2">
                        <div class="section-heading" data-aos="fade-up">
                            <h4 class="h5 text-warning">Let's Connect! Get Free Consultation</h4>
                            <h2>Start Your Innovation Journey</h2>
                            <p>We can help you to create your dream project with vetter ROI.</p>
                        </div>
                        <div class="form-block-banner mw-60 m-auto mt-5" data-aos="fade-up" data-aos-delay="50">
                            <a href="contact-us.html" class="btn btn-primary">Reach Out</a>
                            <a href="http://www.youtube.com/watch?v=hAP2QF--2Dg" class="text-decoration-none popup-youtube d-inline-flex align-items-center watch-now-btn ms-lg-3 ms-md-3 mt-3 mt-lg-0"> <i
                                    class="fas fa-play"></i> Watch Demo </a>
                        </div>
                        <ul class="nav justify-content-center subscribe-feature-list mt-4" data-aos="fade-up" data-aos-delay="100">
                            <li class="nav-item">
                                <span><i class="far fa-check-circle text-primary me-2"></i>free Trials</span>
                            </li>
                            <li class="nav-item">
                                <span><i class="far fa-check-circle text-primary me-2"></i>No Payment Info required</span>
                            </li>
                            <li class="nav-item">
                                <span><i class="far fa-check-circle text-primary me-2"></i>Support 24/7</span>
                            </li>
                            <li class="nav-item">
                                <span><i class="far fa-check-circle text-primary me-2"></i>Ping Anytime</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="bg-circle rounded-circle circle-shape-3 position-absolute bg-dark-light left-5"></div>
            <div class="bg-circle rounded-circle circle-shape-1 position-absolute bg-warning right-5"></div>
        </div>
    </section>
   @extends('layout.footer')
