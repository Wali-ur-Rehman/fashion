<?php
/*
Template Name:Contact 
*/
get_header();
?>

<main>
<div class="page-header-2 px-4">
            <img src="<?php site_url()?>./wp-content/themes/Fashion/img/Ellipse-1.svg" class="ellipse-1" alt="">
            <img src="<?php site_url()?>./wp-content/themes/Fashion/img/Ellipse-2.svg" class="ellipse-2" alt="">
            <div class="main-content w-100 contact-header">
                <div class="container ">
                    <div class="row">
                        <div class="col-md-6 m-auto position-relative">
                            <div class="gradient-ball-1"></div>
                            <div class="gradient-ball-2"></div>
                            <div class="white-circle"> </div>
                            <div class="fashion-heading-section px-md-5">
                                <div class="fashion-heading">
                                    <h2 class="mb-0">Reach</h2>
                                    <h1 class="">Fashion <br> Foresight</h1>
                                </div>
                                <p class="text-center mt-4">
                                    Drop us a message or give us a good old-fashioned call. We’re ready to turn your
                                    idea into something epic. 
                                </p>
                                <div class="text-center mt-3">
                                    <img src="<?php site_url()?>./wp-content/themes/Fashion/img/arrow.svg" class="img-fluid down-arrow" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-section py-5">
            <div class="container-fluid">
                <h1>Let’s talk business!</h1>
                <form action="">
                    <div class="row gy-3">
                        <div class="col-md-6">
                            <label for="agency">
                                You are
                            </label>
                        </div>
                        <div class="col-md-6">
                            <div class="input-container">
                                <select name="" id="agency" class="custom-select">
                                    <option value="">An agency</option>
                                    <option value="">Company</option>
                                    <option value="">An agency</option>
                                </select>
                                <div class="gradient-bar"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="intersted">
                                Intersted in
                            </label>
                        </div>
                        <div class="col-md-6">
                            <div class="input-container">
                                <select name="" id="intersted" class="custom-select">
                                    <option value="">Design Services</option>
                                    <option value="">Design Services</option>
                                    <option value="">Design Services</option>
                                </select>
                                <div class="gradient-bar"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="name">
                                Your name is
                            </label>
                        </div>
                        <div class="col-md-6">
                            <div class="input-container">
                                <input type="text" class="custom-input" placeholder="Jon Doe" id="name">
                                <div class="gradient-bar"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="c_name">
                                Your Company name is
                            </label>
                        </div>
                        <div class="col-md-6">
                            <div class="input-container">
                                <input type="text" class="custom-input" placeholder="Microsoft" id="c_name">
                                <div class="gradient-bar"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="number">
                                Your contact no is
                            </label>
                        </div>
                        <div class="col-md-6">
                            <div class="input-container">
                                <input type="number" class="custom-input" placeholder="+1-042-37182004" id="number">
                                <div class="gradient-bar"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="email">
                                Your email id is
                            </label>
                        </div>
                        <div class="col-md-6">
                            <div class="input-container">
                                <input type="email" class="custom-input" placeholder="email@company.com" id="email">
                                <div class="gradient-bar"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="hear">
                                How did you hear about us?
                            </label>
                        </div>
                        <div class="col-md-6">
                            <div class="input-container">
                                <select name="" id="hear" class="custom-select">
                                    <option value="">Google</option>
                                    <option value="">Facebook</option>
                                    <option value="">In Person</option>
                                </select>
                                <div class="gradient-bar"></div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-5">
                        <input type="submit" class="theme-btn-4" value="Send Message">
                    </div>
                </form>
            </div>
        </div>

        <div class="meetus-section my-5">
            <div class="container py-5">
                <h1>Meet Us In Person</h1>
                <div class="row gy-5 mt-3">
                    <div class="col-md-6 pe-lg-5">
                        <div class="contact-box ms-auto" data-aos="zoom-in">
                            <div class="icon-circle">
                                <img src="<?php site_url()?>./wp-content/themes/Fashion/img/Email.png" alt="">
                            </div>
                            <a href="mailto:Contact@fashionforesight.com">Contact@fashionforesight.com</a>
                        </div>
                    </div>
                    <div class="col-md-6 ps-lg-5">
                        <div class="contact-box me-auto" data-aos="zoom-in" data-aos-delay="300">
                            <div class="icon-circle">
                                <img src="<?php site_url()?>./wp-content/themes/Fashion/img/phone-icon.png" alt="">
                            </div>
                            <a href="tel:0349-1466556042-37180130">0349-1466556042-37180130</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


<?php get_footer(); ?>