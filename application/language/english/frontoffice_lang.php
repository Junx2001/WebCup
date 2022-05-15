<?php
/**
 * System messages translation for CodeIgniter(tm)
 * @author	CodeIgniter community
 * @copyright	Copyright (c) 2014 - 2016, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	http://codeigniter.com
 */
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['navbar']= '  <nav id="navbar" class="navbar">
<ul>
<li><a class="nav-link scrollto" href="index.php">Home </a></li>
<li><a class="nav-link scrollto" href="index.php#about">About us</a></li>
<li><a class="nav-link scrollto" href="index.php#services">Services</a></li>
<li><a class="nav-link scrollto" href="index.php#team">Our team</a></li>
              <li class="dropdown"><a href="#"><span>Languages</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                <li><a href="'.site_url('FrontOffice/changeFoLanguage/French').'">French</a></li>
                <li><a href="'.site_url('FrontOffice/changeFoLanguage/English').'">English</a></li>
                </ul>
              </li>


</ul>
<i class="bi bi-list mobile-nav-toggle d-none"></i>
</nav>
<a class="btn-getstarted scrollto" href="index.php#about">Getting started</a>';

$lang['un'] = '<h2>I was <span>here</span></h2>
<p>Leave a part of you here</p>
<div class="d-flex">
    <a href="#about" class="btn-get-started scrollto">Getting started</a>
    <a href="https://web.facebook.com/WebcupMadagascar/videos/705218867193658"
        class="glightbox btn-watch-video d-flex align-items-center"><i
            class="bi bi-play-circle"></i><span>Watch the video</span></a>
</div>';

$lang['deux']=" <div class='col-xl-3 col-md-6 d-flex' data-aos='zoom-out'>
<div class='service-item position-relative'>
    <div class='icon'><i class='bi bi-star'></i></div>
    <h4><a href='' class='stretched-link'>In space</a></h4>
    <p>We find ourselves in seventh heaven</p>
</div>
</div>

<div class='col-xl-3 col-md-6 d-flex' data-aos='zoom-out' data-aos-delay='200'>
<div class='service-item position-relative'>
    <div class='icon'><i class='bi bi-droplet'></i></div>
    <h4><a href='' class='stretched-link'>Underwater</a></h4>
    <p>Your memories will live long as turtles</p>
</div>
</div>

<div class='col-xl-3 col-md-6 d-flex' data-aos='zoom-out' data-aos-delay='400'>
<div class='service-item position-relative'>
    <div class='icon'><i class='bi bi-clipboard-data'></i></div>
    <h4><a href='' class='stretched-link'>In data center</a></h4>
    <p>Nothing is safer than having your feet on earth</p>
</div>
</div>

<div class='col-xl-3 col-md-6 d-flex' data-aos='zoom-out' data-aos-delay='600'>
<div class='service-item position-relative'>
    <div class='icon'><i class='bi bi-bug'></i></div>
    <h4><a href='' class='stretched-link'>Buried underground</a></h4>
    <p>We'll never throw you in the nettles</p>
</div>
</div>";

$lang['trois']="<div class='section-header'>
<h2>We offer you our services</h2>
<p>To keep your story alive</p>
</div>

<div class='row gy-5'>

<div class='col-xl-6 col-md-6' data-aos='zoom-in' data-aos-delay='200'>
    <div class='service-item'>
        <div class='img'>
            <img src='".site_url('assets/images/front-office/fusee-espace.jpg')."' class='img-fluid' alt=''>
        </div>
        <div class='details position-relative'>
            <div class='icon'>
            <i class='bi bi-star'></i>
            </div>
            <a href='#' class='stretched-link'>
                <h3>In space</h3>
            </a>
        </div>
    </div>
</div>

<div class='col-xl-6 col-md-6' data-aos='zoom-in' data-aos-delay='300'>
    <div class='service-item'>
        <div class='img'>
            <img src='".site_url('assets/images/front-office/under-water.jpg')."' alt='' class='img-fluid'>
        </div>
        <div class='details position-relative'>
            <div class='icon'>
            <i class='bi bi-droplet'></i>
            </div>
            <a href='#' class='stretched-link'>
                <h3>Underwater</h3>
            </a>
        </div>
    </div>
</div>

<div class='col-xl-6 col-md-6' data-aos='zoom-in' data-aos-delay='400'>
    <div class='service-item'>
        <div class='img'>
            <img src='".site_url('assets/images/front-office/data-center.jpg')."' alt='' class='img-fluid'>
        </div>
        <div class='details position-relative'>
            <div class='icon'>
            <i class='bi bi-clipboard-data'></i>
            </div>
            <a href='#' class='stretched-link'>
                <h3>Inside data center</h3>
            </a>
        </div>
    </div>
</div>

<div class='col-xl-6 col-md-6' data-aos='zoom-in' data-aos-delay='500'>
    <div class='service-item'>
        <div class='img'>

            <img src='".site_url('assets/images/front-office/soil-vector-png-.png')."' class='img-fluid' alt=''>
        </div>
        <div class='details position-relative'>
            <div class='icon'>
            <i class='bi bi-bug'></i>
            </div>
            <a href='#' class='stretched-link'>
                <h3>Buried underground</h3>
            </a>
            <a href='#' class='stretched-link'></a>
        </div>
    </div>
</div>
</div>";

$lang['quatre']="<div class='container' data-aos='fade-up'>

<div class='section-header'>
    <h2>About our team</h2>
    <p>We support the start-up 'Lunaire' in its project to develop a better world. 
    So that all your memories are kept and that your name is engraved in history.
    </p>
</div>

<div class='row g-4 g-lg-5' data-aos='fade-up' data-aos-delay='200'>

    <div class='col-lg-5'>
        <div class='about-img'>
            <img src='".site_url('assets/images/front-office/about.jpg')."' class='img-fluid' alt=''>
        </div>
    </div>

    <div class='col-lg-7'>
        <h3 class='pt-0 pt-lg-5'>Give us a testimony of your time.</h3>

        <!-- Tabs -->
        <ul class='nav nav-pills mb-3'>
            <li><a class='nav-link active' data-bs-toggle='pill' href='#tab1'>Our missions</a></li>
            <li><a class='nav-link' data-bs-toggle='pill' href='#tab2'>Our values</a></li>
        </ul><!-- End Tabs -->

        <!-- Tab Content -->
        <div class='tab-content'>

            <div class='tab-pane fade show active' id='tab1'>

                <p class='fst-italic'>PostGen supports you in your development project.</p>

                <div class='d-flex align-items-center mt-4'>
                    <i class='bi bi-check2'></i>
                    <h4>Secure your website.</h4>
                </div>

                <div class='d-flex align-items-center mt-4'>
                    <i class='bi bi-check2'></i>
                    <h4>Trust in us.</h4>
                </div>
                
                <div class='d-flex align-items-center mt-4'>
                    <i class='bi bi-check2'></i>
                    <h4>Entrust us with your project, it will be in good hands.</h4>
                </div>
             
            </div><!-- End Tab 1 Content -->

            <div class='tab-pane fade show' id='tab2'>

                <p class='fst-italic'>PostGen, the application developed by 
                Enigma is fully in line with the values that the team shares.</p>

                <div class='d-flex align-items-center mt-4'>
                    <i class='bi bi-check2'></i>
                    <h4>Solidarity</h4>
                </div>
                <p>We get more results by helping each other.</p>

                <div class='d-flex align-items-center mt-4'>
                    <i class='bi bi-check2'></i>
                    <h4>Dynamism</h4>
                </div>
                <p>We are young, let's take advantage of this youth to develop a better world.
                Let's help those who need it.</p>

                <div class='d-flex align-items-center mt-4'>
                    <i class='bi bi-check2'></i>
                    <h4>Family</h4>
                </div>
                <p>We are a family, even though we are not related by blood. 
                Our teammates are our family, they are part of our life.
                </p>

            </div><!-- End Tab 2 Content -->

        </div>

    </div>

</div>

</div>";

$lang['cinq']="
<div class='row g-5'>

                    <div
                        class='col-lg-8 col-md-6 content d-flex flex-column justify-content-center order-last order-md-first'>
                        <h3>What will the future remember about you?</h3>
                        <p> We will only remember your memories.

                        Entrust us with all the testimonies of all the eras in which you lived,
                        save everything you have experienced for future generations.

I think therefore I am, your life is worth passing on from generation to generation.

The money? What's that compared to the admiration that future civilization will bring you?

A <em>time capsule</em> is your guarantee to endure through the centuries,

it will be able to access your memories in due time.</p>

                    </div>

                    <div class='col-lg-4 col-md-6 order-first order-md-last d-flex align-items-center'>
                        <div class='img'>
                            <img src='".site_url('assets/images/front-office/corp-capsule.png')."' alt='' class='img-fluid'>
                        </div>
                    </div>

                </div>";


$lang["six"]="
<div class='col-lg-6'>
                        <div class='content d-flex flex-column justify-content-center h-100'>
                            <h3>Capsule presentation</h3>
                            <p class='fst-italic'>
                            We help give you the opportunity to cross the centuries.
                            Your life, your experiences, your relationships, ... you are unique, let it be known.</br>
                            You are then presented with a time capsule :
                            </p>
                            <ul>
                                <li><i class='bi bi-check-circle'></i>
                                Hermetic.</li>
                                <li><i class='bi bi-check-circle'></i> 
                                Waterproof. </li>
                                <li><i class='bi bi-check-circle'></i> Very resistant.</li>
                            </ul>
                            <a href='#' class='read-more align-self-start'><span>Back</span><i
                                    class='bi bi-arrow-right'></i></a>
                        </div>
                    </div>";

                    $lang["sept"]="
                    <h2>Our prices</h2>
                                        
                    <p>To keep your memories until infinity and beyond, entrust us your data, they will be safe.</p>";
                    
                    $lang["huit"]="
                    <h2>Our team</h2>
                                        <p>Enigma has developed the Lunar company's time capsule application. This application named PostGen offers packages 
                                        that benefit you.
                                        </p>";

                    $lang["neuf"]="
                    <ul>
                            <li><i class='bi bi-chevron-right'></i> <a href='#'>Home</a></li>
                            <li><i class='bi bi-chevron-right'></i> <a href='#'>About us</a></li>
                            <li><i class='bi bi-chevron-right'></i> <a href='#'>Services</a></li>
                        </ul>";