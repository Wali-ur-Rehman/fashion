<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="http://localhost/fashion-foresight-services/wp-content/themes/Fashion/css/bootstrap-icons.css">
    <link rel="stylesheet" href="http://localhost/fashion-foresight-services/wp-content/themes/Fashion/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/fashion-foresight-services/wp-content/themes/Fashion/style.css">
    
    <script src="http://localhost/fashion-foresight-services/wp-content/themes/Fashion/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/style.css' ?>">
    <title>Fashion ForeSight</title>
</head>

<body>

    <header>
        <div class="top-navbar px-4">
            <div>
                <img src="<?php site_url()?>./wp-content/themes/Fashion/img/logo.png" data-aos="zoom-out" alt="">
            </div>
            <div class="d-flex align-items-center">
                <a href="#" class="theme-btn-1" data-aos="zoom-out">Contact Us</a>
                <button id="hamburger-btn" data-aos="zoom-out">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
        <div class="nav-container">
            <div class="row">
                <div class="col-6 d-flex align-items-center justify-content-center">
                    <img src="<?php site_url()?>./wp-content/themes/Fashion/img/Logo-black.png" class="img-fluid dark-logo" alt="">
                </div>
                <div class="col-6 d-flex align-items-center bg-black">
                    <ul>
                        <li><a class="active" href="/">Home</a></li>
                        <li><a href="http://localhost/fashion-foresight-services/about">About Us</a></li>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Services
                                </button>
                              </h2>
                              <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul>
                                        <li>
                                            <a href="http://localhost/fashion-foresight-services/consulting">Consulting</a>
                                        </li>
                                        <li>
                                            <a href="http://localhost/fashion-foresight-services/technology">Techcnology</a>
                                        </li>
                                        <li>
                                            <a href="http://localhost/fashion-foresight-services/intelligence">Intelligence</a>
                                        </li>
                                        <li>
                                            <a href="http://localhost/fashion-foresight-services/immersive-experience">Immersive Experience</a>
                                        </li>
                                    </ul>
                                </div>
                              </div>
                            </div>
                            
                          </div>
                        <li><a href="http://localhost/fashion-foresight-services/blog">Blog</a></li>
                        <li><a href="http://localhost/fashion-foresight-services/contact">Contact Us</a></li>
                    </ul>
                </div>
                <button class="nav-close-btn"><i class="bi bi-x"></i></button>
            </div>
        </div>
 

    </header>
