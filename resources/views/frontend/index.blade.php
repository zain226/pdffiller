@extends('frontend.layouts.app')

@section('content')
    <section class="bg-half-170 d-table w-100 overflow-hidden">
        <div class="container">
            <div class="row align-items-center pt-5">
                <div class="col-lg-7 col-md-6">
                    <div class="title-heading">
                        <h1 class="heading fw-bold mb-3">The AI Content Plaform <br> for <span class="text-primary typewrite"
                                data-period="2000" data-type='[ "Videos", "Modern Teams", "Social Media" ]'> <span
                                    class="wrap"></span> </span></h1>
                        <p class="para-desc text-muted">Launch your campaign and benefit from our expertise on designing and
                            managing conversion centered bootstrap v5 html page.</p>
                        <div class="mt-4 pt-2">
                            <a href="#" target="_blank" class="btn btn-primary">Try For Free</a>
                            <p class="text-muted small mb-0 mt-1">No credit card required. Free 14-days trial</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-5 col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <div class="ai-hero position-relative">
                        <div class="image position-relative">
                            <img src="{{ asset('frontend/assets/images/laptop.png') }}" class="mx-auto d-block"
                                alt="">
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- Hero End -->

    <!-- Partners start -->
    <section class="py-4 border-bottom border-top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                    <img src="{{ asset('frontend/assets/images/client/amazon.svg') }}" class="avatar avatar-ex-sm"
                        alt="">
                </div><!--end col-->

                <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                    <img src="{{ asset('frontend/assets/images/client/google.svg') }}" class="avatar avatar-ex-sm"
                        alt="">
                </div><!--end col-->

                <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                    <img src="{{ asset('frontend/assets/images/client/lenovo.svg') }}" class="avatar avatar-ex-sm"
                        alt="">
                </div><!--end col-->

                <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                    <img src="{{ asset('frontend/assets/images/client/paypal.svg') }}" class="avatar avatar-ex-sm"
                        alt="">
                </div><!--end col-->

                <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                    <img src="{{ asset('frontend/assets/images/client/shopify.svg') }}" class="avatar avatar-ex-sm"
                        alt="">
                </div><!--end col-->

                <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                    <img src="{{ asset('frontend/assets/images/client/spotify.svg') }}" class="avatar avatar-ex-sm"
                        alt="">
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- Partners End -->

    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">So, how does it works?</h4>
                        <p class="text-muted para-desc mx-auto mb-0">Start working with <span
                                class="text-primary fw-bold">Landrick</span> that can provide everything you need to
                            generate awareness, drive traffic, connect.</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                <div class="col-md-4 mt-4 pt-2">
                    <div class="card border-0 features feature-primary feature-clean p-4">
                        <div class="icons">
                            <i class="mdi mdi-account-search-outline rounded-pill h3 mb-0"></i>
                        </div>
                        <div class="content mt-4">
                            <h5 class="fw-bold">Search & Write Content</h5>
                            <p class="text-muted mb-0">Composed in a pseudo-Latin language which more or less pseudo-Latin
                                language corresponds.</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-4 mt-4 pt-2">
                    <div class="card border-0 features feature-primary feature-clean p-4">
                        <div class="icons">
                            <i class="mdi mdi-wallet-bifold-outline rounded-pill h3 mb-0"></i>
                        </div>
                        <div class="content mt-4">
                            <h5 class="fw-bold">Discribe Content</h5>
                            <p class="text-muted mb-0">Composed in a pseudo-Latin language which more or less pseudo-Latin
                                language corresponds.</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-4 mt-4 pt-2">
                    <div class="card border-0 features feature-primary feature-clean p-4">
                        <div class="icons">
                            <i class="mdi mdi-home-plus-outline rounded-pill h3 mb-0"></i>
                        </div>
                        <div class="content mt-4">
                            <h5 class="fw-bold">Generate Content</h5>
                            <p class="text-muted mb-0">Composed in a pseudo-Latin language which more or less pseudo-Latin
                                language corresponds.</p>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="position-relative p-4 rounded shadow">
                        <video class="w-100 rounded" controls autoplay loop>
                            <source src="{{ asset('frontend/assets/images/video.mp4') }}" type="video/mp4">
                        </video>

                        <div class="position-absolute top-50 start-50 translate-middle">
                            <a href="#!" data-type="youtube" data-id="yba7hPeTSjk"
                                class="avatar avatar-small rounded-pill shadow-md card d-flex justify-content-center align-items-center lightbox">
                                <i class="mdi mdi-play mdi-24px text-primary"></i>
                            </a>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-6 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="section-title ms-lg-5">
                        <h4 class="title mb-4">Turn text into high-quality <br> voiceovers with one click</h4>
                        <p class="text-muted">You can combine all the Landrick templates into a single one, you can take a
                            component from the Application theme and use it in the Website.</p>
                        <ul class="list-unstyled text-muted">
                            <li class="mb-1"><span class="text-primary h5 me-2"><i
                                        class="uil uil-check-circle align-middle"></i></span>Digital Marketing Solutions for
                                Tomorrow</li>
                            <li class="mb-1"><span class="text-primary h5 me-2"><i
                                        class="uil uil-check-circle align-middle"></i></span>Our Talented & Experienced
                                Marketing Agency</li>
                            <li class="mb-1"><span class="text-primary h5 me-2"><i
                                        class="uil uil-check-circle align-middle"></i></span>Create your own skin to match
                                your brand</li>
                        </ul>

                        <a href="javascript:void(0)" class="mt-3 h6 text-primary">Find Out More <i
                                class="uil uil-angle-right-b align-middle"></i></a>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">The future of AI.</h4>
                        <p class="text-muted para-desc mx-auto mb-0">Start working with <span
                                class="text-primary fw-bold">Landrick</span> that can provide everything you need to
                            generate awareness, drive traffic, connect.</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="d-flex features feature-primary feature-clean">
                        <div class="icons text-center mx-auto">
                            <i class="uil uil-pen rounded h3 mb-0"></i>
                        </div>
                        <div class="content ms-4 me-md-4">
                            <h5 class="mb-1"><a href="javascript:void(0)" class="text-dark">AI Generator</a></h5>
                            <p class="text-muted mb-0">One disadvantage of Lorum Ipsum is that in Latin frequently than
                                others</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="d-flex features feature-primary feature-clean">
                        <div class="icons text-center mx-auto">
                            <i class="uil uil-airplay rounded h3 mb-0"></i>
                        </div>
                        <div class="content ms-4 me-md-4">
                            <h5 class="mb-1"><a href="javascript:void(0)" class="text-dark">Advanced Dashboard</a></h5>
                            <p class="text-muted mb-0">One disadvantage of Lorum Ipsum is that in Latin frequently than
                                others</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="d-flex features feature-primary feature-clean">
                        <div class="icons text-center mx-auto">
                            <i class="uil uil-credit-card rounded h3 mb-0"></i>
                        </div>
                        <div class="content ms-4 me-md-4">
                            <h5 class="mb-1"><a href="javascript:void(0)" class="text-dark">Payment Gateways</a></h5>
                            <p class="text-muted mb-0">One disadvantage of Lorum Ipsum is that in Latin frequently than
                                others</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="d-flex features feature-primary feature-clean">
                        <div class="icons text-center mx-auto">
                            <i class="uil uil-globe rounded h3 mb-0"></i>
                        </div>
                        <div class="content ms-4 me-md-4">
                            <h5 class="mb-1"><a href="javascript:void(0)" class="text-dark">Multi-Lingual</a></h5>
                            <p class="text-muted mb-0">One disadvantage of Lorum Ipsum is that in Latin frequently than
                                others</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="d-flex features feature-primary feature-clean">
                        <div class="icons text-center mx-auto">
                            <i class="uil uil-window-grid rounded h3 mb-0"></i>
                        </div>
                        <div class="content ms-4 me-md-4">
                            <h5 class="mb-1"><a href="javascript:void(0)" class="text-dark">Custom Templates</a></h5>
                            <p class="text-muted mb-0">One disadvantage of Lorum Ipsum is that in Latin frequently than
                                others</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="d-flex features feature-primary feature-clean">
                        <div class="icons text-center mx-auto">
                            <i class="uil uil-life-ring rounded h3 mb-0"></i>
                        </div>
                        <div class="content ms-4 me-md-4">
                            <h5 class="mb-1"><a href="javascript:void(0)" class="text-dark">Support Platform</a></h5>
                            <p class="text-muted mb-0">One disadvantage of Lorum Ipsum is that in Latin frequently than
                                others</p>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="bg-soft-primary ps-4 pt-4 position-relative overflow-hidden rounded shadow">
                        <img src="{{ asset('frontend/assets/images/saas/classic02.png') }}" class="img-fluid"
                            alt="">
                    </div>
                </div><!--end col-->

                <div class="col-lg-6 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="section-title ms-lg-5">
                        <h4 class="title mb-4">Write Blog Posts, <br> Stories, & Even Books</h4>
                        <p class="text-muted">Due to its widespread use as filler text for layouts, non-readability is of
                            great importance: human perception is tuned to recognize certain patterns and repetitions in
                            texts. If the distribution of letters visual impact.</p>
                        <ul class="list-unstyled text-muted mb-0">
                            <li class="mb-1"><span class="text-primary h5 me-2"><i
                                        class="uil uil-check-circle align-middle"></i></span>Digital Marketing Solutions
                                for Tomorrow</li>
                            <li class="mb-1"><span class="text-primary h5 me-2"><i
                                        class="uil uil-check-circle align-middle"></i></span>Our Talented & Experienced
                                Marketing Agency</li>
                            <li class="mb-1"><span class="text-primary h5 me-2"><i
                                        class="uil uil-check-circle align-middle"></i></span>Create your own skin to match
                                your brand</li>
                        </ul>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 order-2 order-md-1 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="section-title me-lg-5">
                        <h4 class="title mb-4">Create Content In Single <br> Click With AI Power</h4>
                        <p class="text-muted">This prevents repetitive patterns from impairing the overall visual
                            impression and facilitates the comparison of different typefaces. Furthermore, it is
                            advantageous when the dummy text is relatively realistic.</p>
                        <ul class="list-unstyled text-muted mb-0">
                            <li class="mb-1"><span class="text-primary h5 me-2"><i
                                        class="uil uil-check-circle align-middle"></i></span>Digital Marketing Solutions
                                for Tomorrow</li>
                            <li class="mb-1"><span class="text-primary h5 me-2"><i
                                        class="uil uil-check-circle align-middle"></i></span>Our Talented & Experienced
                                Marketing Agency</li>
                            <li class="mb-1"><span class="text-primary h5 me-2"><i
                                        class="uil uil-check-circle align-middle"></i></span>Create your own skin to match
                                your brand</li>
                        </ul>
                    </div>
                </div><!--end col-->

                <div class="col-lg-6 col-md-6 order-1 order-md-2">
                    <div class="bg-soft-primary pe-4 pt-4 position-relative overflow-hidden rounded shadow">
                        <img src="{{ asset('frontend/assets/images/saas/classic03.png') }}" class="img-fluid"
                            alt="">
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">You don't have to choose between cost, time and quality</h4>
                        <p class="text-muted para-desc mb-0 mx-auto">Start working with <span
                                class="text-primary fw-bold">Landrick</span> that can provide everything you need to
                            generate awareness, drive traffic, connect.</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="switcher-pricing d-flex justify-content-center align-items-center mb-4 pb-2">
                        <label class="toggler text-muted toggler--is-active" id="filt-monthly">Monthly</label>
                        <div class="form-check form-switch mx-3">
                            <input class="form-check-input" type="checkbox" id="switcher">
                        </div>
                        <label class="toggler text-muted" id="filt-yearly">Yearly</label>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                <div class="col-12">
                    <div id="monthly" class="wrapper-full">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                                <div class="card pricing pricing-primary business-rate shadow bg-light border-0 rounded">
                                    <div class="card-body">
                                        <h6 class="title name fw-bold text-uppercase mb-4">Free</h6>
                                        <div class="d-flex mb-4">
                                            <span class="h4 mb-0 mt-2">$</span>
                                            <span class="price h1 mb-0">0</span>
                                            <span class="h4 align-self-end mb-1">/mo</span>
                                        </div>

                                        <ul class="list-unstyled mb-0 ps-0">
                                            <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Full Access
                                            </li>
                                            <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Source Files
                                            </li>
                                        </ul>
                                        <a href="javascript:void(0)" class="btn btn-primary mt-4">Buy Now</a>
                                    </div>
                                </div>
                            </div><!--end col-->

                            <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                                <div class="card pricing pricing-primary business-rate shadow border-0 rounded">
                                    <div class="ribbon ribbon-right ribbon-warning overflow-hidden"><span
                                            class="text-center d-block shadow small h6">Best</span></div>
                                    <div class="card-body">
                                        <h6 class="title name fw-bold text-uppercase mb-4">Starter</h6>
                                        <div class="d-flex mb-4">
                                            <span class="h4 mb-0 mt-2">$</span>
                                            <span class="price h1 mb-0">39</span>
                                            <span class="h4 align-self-end mb-1">/mo</span>
                                        </div>

                                        <ul class="list-unstyled mb-0 ps-0">
                                            <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Full Access
                                            </li>
                                            <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Source Files
                                            </li>
                                            <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Free
                                                Appointments</li>
                                        </ul>
                                        <a href="javascript:void(0)" class="btn btn-primary mt-4">Get Started</a>
                                    </div>
                                </div>
                            </div><!--end col-->

                            <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                                <div class="card pricing pricing-primary business-rate shadow bg-light border-0 rounded">
                                    <div class="card-body">
                                        <h6 class="title name fw-bold text-uppercase mb-4">Professional</h6>
                                        <div class="d-flex mb-4">
                                            <span class="h4 mb-0 mt-2">$</span>
                                            <span class="price h1 mb-0">59</span>
                                            <span class="h4 align-self-end mb-1">/mo</span>
                                        </div>

                                        <ul class="list-unstyled mb-0 ps-0">
                                            <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Full Access
                                            </li>
                                            <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Source Files
                                            </li>
                                            <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>1 Domain Free
                                            </li>
                                            <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Enhanced
                                                Security</li>
                                        </ul>
                                        <a href="javascript:void(0)" class="btn btn-primary mt-4">Try It Now</a>
                                    </div>
                                </div>
                            </div><!--end col-->

                            <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                                <div class="card pricing pricing-primary business-rate shadow bg-light border-0 rounded">
                                    <div class="card-body">
                                        <h6 class="title name fw-bold text-uppercase mb-4">Ultimate</h6>
                                        <div class="d-flex mb-4">
                                            <span class="h4 mb-0 mt-2">$</span>
                                            <span class="price h1 mb-0">79</span>
                                            <span class="h4 align-self-end mb-1">/mo</span>
                                        </div>

                                        <ul class="list-unstyled mb-0 ps-0">
                                            <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Full Access
                                            </li>
                                            <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Enhanced
                                                Security</li>
                                            <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Source Files
                                            </li>
                                            <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>1 Domain Free
                                            </li>
                                            <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Free
                                                Installment</li>
                                        </ul>
                                        <a href="javascript:void(0)" class="btn btn-primary mt-4">Started Now</a>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div>

                    <div id="yearly" class="wrapper-full hide">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                                <div class="card pricing pricing-primary business-rate shadow bg-light border-0 rounded">
                                    <div class="card-body">
                                        <h6 class="title name fw-bold text-uppercase mb-4">Free</h6>
                                        <div class="d-flex mb-4">
                                            <span class="h4 mb-0 mt-2">$</span>
                                            <span class="price h1 mb-0">10</span>
                                            <span class="h4 align-self-end mb-1">/mo</span>
                                        </div>

                                        <ul class="list-unstyled mb-0 ps-0">
                                            <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Full Access
                                            </li>
                                            <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Source Files
                                            </li>
                                        </ul>
                                        <a href="javascript:void(0)" class="btn btn-primary mt-4">Buy Now</a>
                                    </div>
                                </div>
                            </div><!--end col-->

                            <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                                <div class="card pricing pricing-primary business-rate shadow border-0 rounded">
                                    <div class="ribbon ribbon-right ribbon-warning overflow-hidden"><span
                                            class="text-center d-block shadow small h6">Best</span></div>
                                    <div class="card-body">
                                        <h6 class="title name fw-bold text-uppercase mb-4">Starter</h6>
                                        <div class="d-flex mb-4">
                                            <span class="h4 mb-0 mt-2">$</span>
                                            <span class="price h1 mb-0">139</span>
                                            <span class="h4 align-self-end mb-1">/mo</span>
                                        </div>

                                        <ul class="list-unstyled mb-0 ps-0">
                                            <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Full Access
                                            </li>
                                            <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Source Files
                                            </li>
                                            <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Free
                                                Appointments</li>
                                        </ul>
                                        <a href="javascript:void(0)" class="btn btn-primary mt-4">Get Started</a>
                                    </div>
                                </div>
                            </div><!--end col-->

                            <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                                <div class="card pricing pricing-primary business-rate shadow bg-light border-0 rounded">
                                    <div class="card-body">
                                        <h6 class="title name fw-bold text-uppercase mb-4">Professional</h6>
                                        <div class="d-flex mb-4">
                                            <span class="h4 mb-0 mt-2">$</span>
                                            <span class="price h1 mb-0">159</span>
                                            <span class="h4 align-self-end mb-1">/mo</span>
                                        </div>

                                        <ul class="list-unstyled mb-0 ps-0">
                                            <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Full Access
                                            </li>
                                            <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Source Files
                                            </li>
                                            <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>1 Domain Free
                                            </li>
                                            <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Enhanced
                                                Security</li>
                                        </ul>
                                        <a href="javascript:void(0)" class="btn btn-primary mt-4">Try It Now</a>
                                    </div>
                                </div>
                            </div><!--end col-->

                            <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                                <div class="card pricing pricing-primary business-rate shadow bg-light border-0 rounded">
                                    <div class="card-body">
                                        <h6 class="title name fw-bold text-uppercase mb-4">Ultimate</h6>
                                        <div class="d-flex mb-4">
                                            <span class="h4 mb-0 mt-2">$</span>
                                            <span class="price h1 mb-0">179</span>
                                            <span class="h4 align-self-end mb-1">/mo</span>
                                        </div>

                                        <ul class="list-unstyled mb-0 ps-0">
                                            <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Full Access
                                            </li>
                                            <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Enhanced
                                                Security</li>
                                            <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Source Files
                                            </li>
                                            <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>1 Domain Free
                                            </li>
                                            <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Free
                                                Installment</li>
                                        </ul>
                                        <a href="javascript:void(0)" class="btn btn-primary mt-4">Started Now</a>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title mb-4">What Our Users Say</h4>
                        <p class="text-muted para-desc mb-0 mx-auto">Start working with <span
                                class="text-primary fw-bold">Landrick</span> that can provide everything you need to
                            generate awareness, drive traffic, connect.</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row justify-content-center">
                <div class="col-lg-12 mt-4">
                    <div class="tiny-three-item">
                        <div class="tiny-slide">
                            <div class="d-flex client-testi m-1">
                                <img src="{{ asset('frontend/assets/images/client/01.jpg') }}"
                                    class="avatar avatar-small client-image rounded shadow" alt="">
                                <div class="card flex-1 content p-3 shadow rounded position-relative">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    </ul>
                                    <p class="text-muted mt-2">" It seems that only fragments of the original text remain
                                        in the Lorem Ipsum texts used today. "</p>
                                    <h6 class="text-primary">- Thomas Israel <small class="text-muted">C.E.O</small></h6>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="d-flex client-testi m-1">
                                <img src="{{ asset('frontend/assets/images/client/02.jpg') }}"
                                    class="avatar avatar-small client-image rounded shadow" alt="">
                                <div class="card flex-1 content p-3 shadow rounded position-relative">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star-half text-warning"></i></li>
                                    </ul>
                                    <p class="text-muted mt-2">" One disadvantage of Lorum Ipsum is that in Latin certain
                                        letters appear more frequently than others. "</p>
                                    <h6 class="text-primary">- Barbara McIntosh <small class="text-muted">M.D</small></h6>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="d-flex client-testi m-1">
                                <img src="{{ asset('frontend/assets/images/client/03.jpg') }}"
                                    class="avatar avatar-small client-image rounded shadow" alt="">
                                <div class="card flex-1 content p-3 shadow rounded position-relative">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    </ul>
                                    <p class="text-muted mt-2">" The most well-known dummy text is the 'Lorem Ipsum', which
                                        is said to have originated in the 16th century. "</p>
                                    <h6 class="text-primary">- Carl Oliver <small class="text-muted">P.A</small></h6>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="d-flex client-testi m-1">
                                <img src="{{ asset('frontend/assets/images/client/04.jpg') }}"
                                    class="avatar avatar-small client-image rounded shadow" alt="">
                                <div class="card flex-1 content p-3 shadow rounded position-relative">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    </ul>
                                    <p class="text-muted mt-2">" According to most sources, Lorum Ipsum can be traced back
                                        to a text composed by Cicero. "</p>
                                    <h6 class="text-primary">- Christa Smith <small class="text-muted">Manager</small>
                                    </h6>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="d-flex client-testi m-1">
                                <img src="{{ asset('frontend/assets/images/client/05.jpg') }}"
                                    class="avatar avatar-small client-image rounded shadow" alt="">
                                <div class="card flex-1 content p-3 shadow rounded position-relative">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    </ul>
                                    <p class="text-muted mt-2">" There is now an abundance of readable dummy texts. These
                                        are usually used when a text is required. "</p>
                                    <h6 class="text-primary">- Dean Tolle <small class="text-muted">Developer</small></h6>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="d-flex client-testi m-1">
                                <img src="{{ asset('frontend/assets/images/client/06.jpg') }}"
                                    class="avatar avatar-small client-image rounded shadow" alt="">
                                <div class="card flex-1 content p-3 shadow rounded position-relative">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    </ul>
                                    <p class="text-muted mt-2">" Thus, Lorem Ipsum has only limited suitability as a visual
                                        filler for German texts. "</p>
                                    <h6 class="text-primary">- Jill Webb <small class="text-muted">Designer</small></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title">
                        <h4 class="title mb-4">Get the App now !</h4>
                        <p class="text-muted para-desc mx-auto">Start working with <span
                                class="text-primary fw-bold">Landrick</span> that can provide everything you need to
                            generate awareness, drive traffic, connect.</p>
                        <div class="mt-4">
                            <a href="javascript:void(0)">
                                <img src="{{ asset('frontend/assets/images/app/app.png') }}" class="m-1"
                                    height="50" alt="">
                            </a>

                            <a href="javascript:void(0)">
                                <img src="{{ asset('frontend/assets/images/app/playstore.png') }}" class="m-1"
                                    height="50" alt="">
                            </a>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
@endsection
