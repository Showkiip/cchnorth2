@extends('frontend.partials.master')


@section('title', 'Agent Details')

@section('content')

<section class="page-header page-header-modern bg-color-primary border-0 m-0">
    <div class="container position-relative z-index-2">
        <div class="row text-center text-md-start py-5">
            <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                <h1 class="font-weight-bold text-color-light text-8 mb-0">John Doe</h1>
                <p class="text-color-light opacity-7 mb-0"></p>
            </div>
            <div class="col-md-4 order-1 order-md-2 align-self-center">
                <ul class="breadcrumb breadcrumb-light d-block text-md-end text-4 mb-0">
                    <li><a href="#" class="text-decoration-none">Home</a></li>
                    <li class="text-upeercase active">Agents</li>
                </ul>
            </div>
        </div>
    </div>

</section>

<div class="container py-5 my-3">
    <div class="row">
        <div class="col-lg-9">

            <div class="row justify-content-center">
                <div class="col mb-3">
                    <div class="row align-items-center pb-4 pb-md-2">
                        <div class="col-md-3 pe-lg-0 mb-4-5 mb-lg-0">
                            <div class="border-radius overflow-hidden">
                                <img src="img/team/team-1.jpg" class="img-fluid" alt="" />
                            </div>
                        </div>
                        <div class="col-md-9 ps-lg-4">
                            <h4 class="text-color-dark font-weight-semibold line-height-1 mb-2 text-6">John Doe</h4>
                            <h3 class="text-default text-uppercase text-3 ls-0 mb-0">Listed Properties: 3</h3>
                            <ul class="social-icons social-icons-clean social-icons-icon-dark social-icons-medium my-3">
                                <li class="social-icons-facebook">
                                    <a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li class="social-icons-twitter">
                                    <a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li class="social-icons-linkedin">
                                    <a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                            </ul>

                            <p class="font-weight-medium text-4">Hello, nibh vel. Aene <span class="highlight highlight-primary highlight-bg-opacity highlight-animated px-0" data-appear-animation="highlight-animated-start" data-appear-animation-delay="200" data-plugin-options="{'flagClassOnly': true}">nisi elit consequat ipsum</span> nec sagittis sem nibh id elit. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat. </p>
                        </div>
                    </div>
                </div>
            </div>

            <p class="text-3-5 line-height-9 pb-2">Sed consequat euismod diam, eu ultrices nulla ullamcorper ac. Praesent hendrerit lorem nec gravida ultrices. Morbi vitae odio eu mauris dapibus posuere. Etiam congue est et enim scelerisque rhoncus vel vitae dui. Duis velit ipsum, mattis a mauris ultrices, rhoncus malesuada odio. Aliquam consectetur erat id ullamcorper aliquam. Curabitur condimentum, justo non commodo aliquet, sapien massa consectetur justo, a faucibus sapien felis non tellus.</p>

            <p class="text-3-5 line-height-9">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci semper vestibulum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci semper vestibulum.</p>

            <p class="text-3-5 line-height-9">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci semper vestibulum.</p>

            <h3 class="mt-5 mb-2">My History</h3>

            <p class="text-3-5 line-height-9">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci semper vestibulum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci semper vestibulum.</p>

            <p class="text-3-5 line-height-9">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci semper vestibulum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci semper vestibulum.</p>

        </div>
        <div class="col-lg-3">
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-12">
                    <div class="owl-carousel owl-theme mb-0 pb-4" data-plugin-options="{'items': 1, 'autoplay': true, 'autoplayTimeout': 5000, 'margin': 10}">
                        <div>
                            <div class="card custom-card-info border-0">
                                <div class="card-body overflow-hidden p-relative z-index-1">
                                    <a href="#" class="text-decoration-none">
                                        <span class="custom-card-info-type bg-primary text-color-light px-3 py-1 text-1 font-weight-semibold text-uppercase d-inline-block p-absolute top-8 left-8">For Sale</span>
                                        <span class="custom-card-info-img d-block">
                                            <img src="img/demos/real-estate/listing/listing-1-thumb.jpg" class="img-fluid">
                                        </span>
                                        <span class="custom-card-info-header d-block p-relative">
                                            <strong class="text-dark text-4">$ 1.250.000</strong>
                                        </span>
                                        <span class="custom-card-info-content d-block">
                                            <h4 class="text-dark mb-1 text-5">South Miami</h4>
                                            <ul class="list list-unstyled list-inline mb-0">
                                                <li class="list-inline-item me-2 mb-0">
                                                    <strong class="text-default text-uppercase text-3">Beds: 3</strong>
                                                </li>
                                                <li class="list-inline-item me-2 mb-0">
                                                    <strong class="text-default text-uppercase text-3">Baths: 2</strong>
                                                </li>
                                                <li class="list-inline-item me-0 mb-0">
                                                    <strong class="text-default text-uppercase text-3">Sq Ft: 500</strong>
                                                </li>
                                            </ul>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card custom-card-info border-0">
                                <div class="card-body overflow-hidden p-relative z-index-1">
                                    <a href="#" class="text-decoration-none">
                                        <span class="custom-card-info-type bg-primary text-color-light px-3 py-1 text-1 font-weight-semibold text-uppercase d-inline-block p-absolute top-8 left-8">For Sale</span>
                                        <span class="custom-card-info-img d-block">
                                            <img src="img/demos/real-estate/listing/listing-1-thumb.jpg" class="img-fluid">
                                        </span>
                                        <span class="custom-card-info-header d-block p-relative">
                                            <strong class="text-dark text-4">$ 1.250.000</strong>
                                        </span>
                                        <span class="custom-card-info-content d-block">
                                            <h4 class="text-dark mb-1 text-5">South Miami</h4>
                                            <ul class="list list-unstyled list-inline mb-0">
                                                <li class="list-inline-item me-2 mb-0">
                                                    <strong class="text-default text-uppercase text-3">Beds: 3</strong>
                                                </li>
                                                <li class="list-inline-item me-2 mb-0">
                                                    <strong class="text-default text-uppercase text-3">Baths: 2</strong>
                                                </li>
                                                <li class="list-inline-item me-0 mb-0">
                                                    <strong class="text-default text-uppercase text-3">Sq Ft: 500</strong>
                                                </li>
                                            </ul>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card custom-card-info border-0">
                                <div class="card-body overflow-hidden p-relative z-index-1">
                                    <a href="#" class="text-decoration-none">
                                        <span class="custom-card-info-type bg-primary text-color-light px-3 py-1 text-1 font-weight-semibold text-uppercase d-inline-block p-absolute top-8 left-8">For Sale</span>
                                        <span class="custom-card-info-img d-block">
                                            <img src="img/demos/real-estate/listing/listing-1-thumb.jpg" class="img-fluid">
                                        </span>
                                        <span class="custom-card-info-header d-block p-relative">
                                            <strong class="text-dark text-4">$ 1.250.000</strong>
                                        </span>
                                        <span class="custom-card-info-content d-block">
                                            <h4 class="text-dark mb-1 text-5">South Miami</h4>
                                            <ul class="list list-unstyled list-inline mb-0">
                                                <li class="list-inline-item me-2 mb-0">
                                                    <strong class="text-default text-uppercase text-3">Beds: 3</strong>
                                                </li>
                                                <li class="list-inline-item me-2 mb-0">
                                                    <strong class="text-default text-uppercase text-3">Baths: 2</strong>
                                                </li>
                                                <li class="list-inline-item me-0 mb-0">
                                                    <strong class="text-default text-uppercase text-3">Sq Ft: 500</strong>
                                                </li>
                                            </ul>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-12">
                    <div class="card custom-card-info bg-color-quaternary border-0 mb-4">
                        <div class="card-body bg-transparent p-relative p-4 m-2 z-index-1">
                            <h3 class="text-color-dark font-weight-semibold text-5 d-block mt-1 mb-2">Contact Us</h3>

                            <p>
                                We help you choose your property and any other question.
                            </p>

                            <form class="contact-form form-style-3" action="php/contact-form.php" method="POST">
                                <div class="contact-form-success alert alert-success d-none mt-4">
                                    <strong>Success!</strong> Your message has been sent to us.
                                </div>

                                <div class="contact-form-error alert alert-danger d-none mt-4">
                                    <strong>Error!</strong> There was an error sending your message.
                                    <span class="mail-error-message text-1 d-block"></span>
                                </div>

                                <div class="row">
                                    <div class="form-group mb-2">
                                        <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control bg-color-light box-shadow-none border-0" name="name" id="name" required placeholder="Name *">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group mb-2">
                                        <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control bg-color-light box-shadow-none border-0" name="email" id="email" required placeholder="E-mail *">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group mb-2">
                                        <input type="text" value="" data-msg-required="Please enter your phone number." maxlength="100" class="form-control bg-color-light box-shadow-none border-0" name="phone" id="phone" required placeholder="Phone *">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group mb-2">
                                        <textarea maxlength="5000" data-msg-required="Please enter your message." rows="5" class="form-control bg-color-light box-shadow-none border-0" name="message" id="message" required placeholder="Message *"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group mb-0">
                                        <div class="d-grid gap-2">
                                            <button class="btn btn-secondary font-weight-semibold border-0 p-relative text-2 text-uppercase mt-1 btn-px-4 btn-py-2 mb-2" type="submit">Send Message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
