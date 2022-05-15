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
<li><a class="nav-link scrollto" href="index.php">Accueil </a></li>
<li><a class="nav-link scrollto" href="index.php#about">A Propos</a></li>
<li><a class="nav-link scrollto" href="index.php#services">Services</a></li>
<li><a class="nav-link scrollto" href="index.php#team">Notre équipe</a></li>
<li class="dropdown"><a href="#"><span>Langages</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
<ul>
<li><a href="'.site_url('FrontOffice/changeFoLanguage/French').'">Français</a></li>
<li><a href="'.site_url('FrontOffice/changeFoLanguage/English').'">Anglais</a></li>
</ul>
</li>


</ul>
<i class="bi bi-list mobile-nav-toggle d-none"></i>
</nav>
<a class="btn-getstarted scrollto" href="index.php#about">A propos</a>';

$lang['un'] = '<h2>Je suis passé <span>ICI</span></h2>
<p>Laisse une partie de toi ici</p>
<div class="d-flex">
    <a href="#about" class="btn-get-started scrollto">A propos</a>
    <a href="https://web.facebook.com/WebcupMadagascar/videos/705218867193658"
        class="glightbox btn-watch-video d-flex align-items-center"><i
            class="bi bi-play-circle"></i><span>Regarder la vidéo</span></a>
</div>';

$lang['deux']=" <div class='col-xl-3 col-md-6 d-flex' data-aos='zoom-out'>
<div class='service-item position-relative'>
    <div class='icon'><i class='bi bi-star'></i></div>
    <h4><a href='' class='stretched-link'>Dans l'espace</a></h4>
    <p>On se retrouve au septième ciel</p>
</div>
</div>

<div class='col-xl-3 col-md-6 d-flex' data-aos='zoom-out' data-aos-delay='200'>
<div class='service-item position-relative'>
    <div class='icon'><i class='bi bi-droplet'></i></div>
    <h4><a href='' class='stretched-link'>Sous l'ocean</a></h4>
    <p>Vos souvenirs viveront longtemps comme les tortues</p>
</div>
</div>

<div class='col-xl-3 col-md-6 d-flex' data-aos='zoom-out' data-aos-delay='400'>
<div class='service-item position-relative'>
    <div class='icon'><i class='bi bi-clipboard-data'></i></div>
    <h4><a href='' class='stretched-link'>Dans les serveurs</a></h4>
    <p>Rien de plus sur qu'avoir les pieds sur terre</p>
</div>
</div>

<div class='col-xl-3 col-md-6 d-flex' data-aos='zoom-out' data-aos-delay='600'>
<div class='service-item position-relative'>
    <div class='icon'><i class='bi bi-bug'></i></div>
    <h4><a href='' class='stretched-link'>Enterré sous terre</a></h4>
    <p>On ne vous jettera jamais dans les orties</p>
</div>
</div>";

$lang['trois']="<div class='section-header'>
<h2>Nous vous offrons nos services</h2>
<p>Pour que votre histoire soit conservée</p>
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
            <h3>Dans l'espace</h3>
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
            <h3>Sous l'océan</h3>
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
            <h3>Dans les serveurs</h3>
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
            <h3>Enterré sous terre</h3>
            </a>
            <a href='#' class='stretched-link'></a>
        </div>
    </div>
</div>
</div>";

$lang['quatre']="<div class='container' data-aos='fade-up'>

<div class='section-header'>
<h2>A propos de nous</h2>
<p>Nous soutenons le start-up 'Lunaire' dans l'accompagnement de son projet pour développer un monde meilleur. 
    Pour que tous vos souvenirs soient gardés et que votre nom soit gravé dans l'histoire.
</p>
</div>

<div class='row g-4 g-lg-5' data-aos='fade-up' data-aos-delay='200'>

    <div class='col-lg-5'>
        <div class='about-img'>
            <img src='".site_url('assets/images/front-office/about.jpg')."' class='img-fluid' alt=''>
        </div>
    </div>

    <div class='col-lg-7'>
    <h3 class='pt-0 pt-lg-5'>Confiez nous un témoignage de votre époque.</h3>

        <!-- Tabs -->
        <ul class='nav nav-pills mb-3'>
            <li><a class='nav-link active' data-bs-toggle='pill' href='#tab1'>Nos missions</a></li>
            <li><a class='nav-link' data-bs-toggle='pill' href='#tab2'>Nos valeurs</a></li>
        </ul><!-- End Tabs -->

        <!-- Tab Content -->
        <div class='tab-content'>

            <div class='tab-pane fade show active' id='tab1'>

                <p class='fst-italic'>PostGen vous accompagne dans votre projet de développement.</p>

                <div class='d-flex align-items-center mt-4'>
                    <i class='bi bi-check2'></i>
                    <h4>Sécurisez votre site.</h4>
                </div>

                <div class='d-flex align-items-center mt-4'>
                    <i class='bi bi-check2'></i>
                    <h4>Ayez confiance en nous.</h4>
                </div>
                
                <div class='d-flex align-items-center mt-4'>
                    <i class='bi bi-check2'></i>
                    <h4>Confiez-nous votre projet, il sera entre de bonnes mains.</h4>
                </div>
             
            </div><!-- End Tab 1 Content -->

            <div class='tab-pane fade show' id='tab2'>

                <p class='fst-italic'>PostGen, l'application développée par 
                Enigma est tout à fait conforme aux valeurs que l'équipe partage.</p>

                <div class='d-flex align-items-center mt-4'>
                    <i class='bi bi-check2'></i>
                    <h4>Solidarité</h4>
                </div>
                <p>On obtient plus de résultat dans l'entraide.</p>

                <div class='d-flex align-items-center mt-4'>
                    <i class='bi bi-check2'></i>
                    <h4>Dynamisme</h4>
                </div>
                <p>Nous sommes jeune, profitons de cette jeunesse pour développer un monde meilleur.
                Aidons ceux qui ont en besoin.</p>

                <div class='d-flex align-items-center mt-4'>
                    <i class='bi bi-check2'></i>
                    <h4>Famille</h4>
                </div>
                <p>Nous formons une famille, même si nous n'avons pas de lien de sang. 
                Nos coéquipiers sont notre famille, ils font partie de notre vie.
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
                        <h3>Qu’est ce que le future retiendra de vous?</h3>
                        <p> 
                            
                        On ne retiendra de vous que ce que vous laisseriez aux générations futures. 

Confiez nous tous les témoignages de toutes les époques où vous avez vécu,

gardez tout ce que vous avez vécu pour les générations futures.

Je pense donc je suis, votre vie vaut la peine d’être transmise de génération en génération.

L’argent ? C’est quoi à côté de l’admiration que la future civilisation vous apportera?

Une <em> capsule temporelle </em> est votre garantie pour perdurer au fil des siecles,

elle acouchera de vos mémoires en tant voulue.</p>

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
                            <h3>Présentation de la capsule</h3>
                            <p class='fst-italic'>
                            Nous contribuons à vous donner l'opportunité de traverser les âges.
                            Votre vie, vos expériences, vos relations, … vous êtes unique, faites le savoir.</br>
                            On vous présente alors une capsule temporelle :
                            </p>
                            <ul>
                                <li><i class='bi bi-check-circle'></i>
                                Hermétique.</li>
                                <li><i class='bi bi-check-circle'></i> 
                                Waterproof. </li>
                                <li><i class='bi bi-check-circle'></i> Très résistant..</li>
                            </ul>
                            <a href='#' class='read-more align-self-start'><span>Retour</span><i
                                    class='bi bi-arrow-right'></i></a>
                        </div>
                    </div>";

                    $lang["sept"]="
                    <h2>Nos prix</h2>
                    <p>Pour gardez vos souvenirs jusqu'à l'infini et au delà, confiez-nous vos données, elles seront an sécurité.</p>";
                    
                    $lang["huit"]="
                    <h2>Notre équipe</h2>
                    <p>Enigma a développé l'application de capsule temporelle de l'entreprise Lunaire. Cette application baptisée PostGen propose des forfaits 
                        qui vous sont bénéficiaires.
                    </p>";

                    $lang["neuf"]="
                    <ul>
                            <li><i class='bi bi-chevron-right'></i> <a href='#'>Accueil</a></li>
                            <li><i class='bi bi-chevron-right'></i> <a href='#'>A propos</a></li>
                            <li><i class='bi bi-chevron-right'></i> <a href='#'>Services</a></li>
                        </ul>";