<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* base.html.twig */
class __TwigTemplate_5952ce0d3689e36aba7b7a352fdbc04c extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 7
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"assets/images/fav.png\">
    <!-- fontawesome 6.4.2 -->
    ";
        // line 10
        yield from $this->unwrap()->yieldBlock('css', $context, $blocks);
        // line 25
        yield "</head>

<body>

       
    <!-- header style one -->
    <header class=\"header-one header--sticky\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"header-one-wrapper\">
                        <div class=\"left-side-header\">
                            <a href=\"#\" class=\"logo-area\">
                                <img src=\"assets/images/logo/logo-1.png\" alt=\"logo\" width=\"280\" height=\"auto\">

                            </a>
                        </div>

                        <div class=\"main-nav-one\">
                            <nav>
                               <ul>
                                   <li>
                                     <a class=\"nav-link\" href=\"#\">Home</a>
                                    </li>

                                    </li>
                                    <li class=\"has-dropdown\">
                                        <a class=\"nav-link\" href=\"#\">Pages</a>
                                        <ul class=\"submenu\">
                                            <li><a href=\"team.html\">Team</a></li>
                                            <li><a href=\"team-details.html\">Team Details</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"has-dropdown\">
                                        <a class=\"nav-link\" href=\"#\">Classes</a>
                                        <ul class=\"submenu\">
                                            <li><a href=\"course.html\">Courses</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class=\"nav-link\" href=\"contact.html\">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                        <div class=\"header-right-area-one\">
                            <div class=\"buttons-area\">
                                <a href=\"contact.html\" class=\"rts-btn btn-primary border-radius\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal-login\" >Sign In</a>
                                    </div>
                            </div>
                            <div class=\"menu-btn\" id=\"menu-btn\">
                                <svg width=\"20\" height=\"16\" viewBox=\"0 0 20 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <rect y=\"14\" width=\"20\" height=\"2\" fill=\"#1F1F25\"></rect>
                                    <rect y=\"7\" width=\"20\" height=\"2\" fill=\"#1F1F25\"></rect>
                                    <rect width=\"20\" height=\"2\" fill=\"#1F1F25\"></rect>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header style end -->

    <!-- banner area start -->
    <section class=\"banner-area-one rts-shape-move\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6 order-xl-1 order-lg-1 order-sm-2 order-2\">
                    <div class=\"banner-content-one\">
                        <div class=\"inner\">
                       <h1 class=\"title-banner\" style=\"text-align: center;\">
   Découvrez la magie de l'apprentissage à <span style=\"color: #FFC107;\">Novalearn</span>
    <img src=\"assets/images/banner/title-shape-1.svg\" alt=\"banner\" style=\"vertical-align: middle; margin-left: 10px;\">
</h1>


                            <p class=\"disc\">Bienvenue sur NovaLearn, un espace où chaque jour est une occasion d’apprendre et de grandir.
                            Notre communauté dynamique œuvre pour favoriser l'apprentissage</p>


                            <div class=\"banner-btn\">
                                <a href=\"about.html\" class=\"rts-btn btn-primary border-radius\">Explorer maintenant</a>
                                <div class=\"video-btn-area\">
                                    <div class=\"vedio-icone\">
                                        <a class=\"video-play-button play-video popup-video\" href=\"https://www.youtube.com/watch?v=ezbJwaLmOeM\">
                                            <span class=\"icon\"><img src=\"assets/images/banner/play.svg\" alt=\"\"></span>
                                        </a>
                                        <div class=\"video-overlay\">
                                            <a class=\"video-overlay-close\"></a>
                                        </div>
                                    </div>
                                    <p class=\"intro\">Regarder la vidéo</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               <div class=\"col-lg-6 order-change order-lg-2 order-sm-1 order-1\">
    <div class=\"banner-right-img\" style=\"transform: translateY(-80px);\">
        <img src=\"assets/images/banner/01.png\" width= 900\" alt=\"banner\">
    </div>
</div>

            </div>
        </div>
        <img class=\"banner-bg-shape-2\" src=\"assets/images/banner/banner-bg-1.png\" alt=\"\">
        <div class=\"shape-image\">
            <div class=\"shape one\" data-speed=\"0.04\" data-revert=\"true\"><img src=\"assets/images/banner/shape/01.svg\" alt=\"shape_image\"></div>
            <div class=\"shape two\" data-speed=\"0.04\"><img src=\"assets/images/banner/shape/02.svg\" alt=\"shape_image\"></div>
            <div class=\"shape three\" data-speed=\"0.04\" data-revert=\"true\"><img src=\"assets/images/banner/shape/03.svg\" alt=\"shape_image\"></div>
            <div class=\"shape four\" data-speed=\"0.04\" data-revert=\"true\"><img src=\"assets/images/banner/shape/04.svg\" alt=\"shape_image\"></div>
            <div class=\"shape five\" data-speed=\"0.04\"><img src=\"assets/images/banner/shape/05.svg\" alt=\"shape_image\"></div>
            <div class=\"shape six\" data-speed=\"0.04\"><img src=\"assets/images/banner/shape/06.svg\" alt=\"shape_image\"></div>
            <div class=\"shape seven\" data-speed=\"0.04\" data-revert=\"true\"><img src=\"assets/images/banner/shape/07.svg\" alt=\"shape_image\"></div>
        </div>
        <div class=\"banner-bg-grid-shape\">
        </div>
    </section>
    <!-- banner area end -->

    <!-- about area start -->
    <section class=\"rts-about-area rts-shape-move rts-section-gap\">
        <div class=\"container\">
            <div class=\"section-inner\">
                <div class=\"row align-items-center\">
                    <div class=\"col-lg-6\">
                        <div class=\"about-image\">
                            <img src=\"assets/images/about/about-01.png\" width=\"620\" alt=\"\">
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"about-content\">
                            <div class=\"section-title-area\">
                                <p class=\"pre-title\"><img src=\"assets/images/banner/title-img.svg\" alt=\"\">About Us</p>
                                <h2 class=\"section-title\">Découvrez notre mission pour <br> Novalearn</h2>
                                <p class=\"desc\">Bienvenue sur Novalearn, où l'éducation rencontre l'inspiration et où chaque parcours d'enfant est une histoire de croissance et de découverte.</p>
                            </div>
                            <ul class=\"about-wrapper\">
                                <li class=\"wrapper-list\">
                                    <div class=\"list-inner\">
                                        <div class=\"icon\"><img src=\"assets/images/icon/01.svg\" alt=\"\"></div>
                                        <div class=\"content\">
                                            <h4 class=\"title\">Notre Mission</h4>
                                            <p class=\"desc\">At novalearn our mission is to cultivate <br>
                                                an environment where curiosity is sparked.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"wrapper-list\">
                                    <div class=\"list-inner\">
                                        <div class=\"icon\"><img src=\"assets/images/icon/02.svg\" alt=\"\"></div>
                                        <div class=\"content\">
                                            <h4 class=\"title\">Our Commitment</h4>
                                            <p class=\"desc\">As we embark on the journey of education <br>
                                                together, we remain committed to providing.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class=\"about-btn-area\">
                                <a href=\"about.html\" class=\"rts-btn btn-primary border-radius\">About More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"shape-image\">
            <div class=\"shape one\" data-speed=\"0.04\" data-revert=\"true\"><img src=\"assets/images/banner/shape/08.svg\" alt=\"shape_image\"></div>
            <div class=\"shape two\" data-speed=\"0.04\" data-revert=\"true\"><img src=\"assets/images/banner/shape/09.svg\" alt=\"shape_image\"></div>
            <div class=\"shape three\" data-speed=\"0.04\"><img src=\"assets/images/banner/shape/10.svg\" alt=\"shape_image\"></div>
        </div>
    </section>
    <!-- about area end -->

    <!-- about area start -->
    <section class=\"rts-about-area area-2 rts-shape-move rts-section-gap section-bg2\">
        <div class=\"container\">
            <div class=\"section-inner\">
                <div class=\"row align-items-center\">
                    <div class=\"col-lg-6 p-0\">
                        <div class=\"about-content area-2\">
                            <div class=\"section-title-area\">
                                <p class=\"pre-title\"><img src=\"assets/images/banner/title-img.svg\" alt=\"\">About Us</p>
                                <h2 class=\"section-title\">Discover Our Mission for Studykids Academy</h2>
                                <p class=\"desc\">Welcome to Sutdykids, where education meets inspiration, and every <br> child's journey is a story of growth and discovery.</p>
                            </div>
                            <div class=\"about-wrapper-area\">
                                <ul class=\"about-wrapper\">
                                    <li class=\"item\">
                                        <i class=\"fa-solid fa-check\"></i>
                                        Educational Institutions
                                    </li>
                                    <li class=\"item\">
                                        <i class=\"fa-solid fa-check\"></i>
                                        Educational Materials
                                    </li>
                                    <li class=\"item\">
                                        <i class=\"fa-solid fa-check\"></i>
                                        Parents and Communities
                                    </li>
                                </ul>
                                <ul class=\"about-wrapper\">
                                    <li class=\"item\">
                                        <i class=\"fa-solid fa-check\"></i>
                                        Online Learning Platforms
                                    </li>
                                    <li class=\"item\">
                                        <i class=\"fa-solid fa-check\"></i>
                                        Education Departments Institutions
                                    </li>
                                    <li class=\"item\">
                                        <i class=\"fa-solid fa-check\"></i>
                                        Nonprofit Organizations
                                    </li>
                                </ul>
                            </div>
                            <div class=\"about-btn-area\">
                                <a href=\"#\" class=\"rts-btn btn-primary\">About More</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 order-change\">
                        <div class=\"about-image2\">
                            <img src=\"assets/images/about/about-02.jpg\" alt=\"\">
                            <div class=\"video-btn-area\">
                                <div class=\"vedio-icone\">
                                    <a class=\"video-play-button play-video popup-video\" href=\"https://www.youtube.com/watch?v=ezbJwaLmOeM\">
                                        <span class=\"icon\"><img src=\"assets/images/icon/round-shape.svg\" width=\"80\" alt=\"\"></span>
                                        <span class=\"play-icon\">
                                            <img src=\"assets/images/icon/play.svg\" width=\"32\" alt=\"\">
                                        </span>
                                    </a>
                                    <div class=\"video-overlay\">
                                        <a class=\"video-overlay-close\">×</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"shape-image\">
            <div class=\"shape one\" data-speed=\"0.04\" data-revert=\"true\"><img src=\"assets/images/banner/shape/25.svg\" alt=\"shape_image\"></div>
            <div class=\"shape two\" data-speed=\"0.04\" data-revert=\"true\"><img src=\"assets/images/banner/shape/26.svg\" alt=\"shape_image\"></div>
            <div class=\"shape three\" data-speed=\"0.04\"><img src=\"assets/images/banner/shape/27.svg\" alt=\"shape_image\"></div>
            <div class=\"shape four\" data-speed=\"0.04\"><img src=\"assets/images/banner/shape/28.svg\" alt=\"shape_image\"></div>
            <div class=\"shape five\" data-speed=\"0.04\" data-revert=\"true\"><img src=\"assets/images/banner/shape/29.svg\" alt=\"shape_image\"></div>
            <div class=\"shape six\" data-speed=\"0.04\" data-revert=\"true\"><img src=\"assets/images/banner/shape/02.svg\" alt=\"shape_image\"></div>
        </div>
    </section>
    <!-- about area end -->

    <!-- course area start -->
    <section class=\"rts-course-area style-2\">
        <div class=\"container\">
            <div class=\"section-title-area text-center\">
                <p class=\"pre-title justify-content-center\"><img src=\"assets/images/banner/title-img.svg\" alt=\"\">Classes</p>
                <h2 class=\"section-title\">Popular Classes</h2>
                <p class=\"desc\">Marked by significant growth and exploration <br> as toddlers transition from infancy</p>
            </div>
            <div class=\"slider-inner\">
                <div class=\"swiper mySwiper-category-1 swiper-data\" data-swiper='{
                            \"spaceBetween\":30,
                            \"slidesPerView\":4,
                            \"loop\": true,
                            \"speed\": 1500,
                            \"navigation\":{
                                \"nextEl\":\".swiper-button-next2\",
                                \"prevEl\":\".swiper-button-prev2\"
                            },
                            \"autoplay\":{
                                \"delay\":\"4500\"
                            },
                            \"breakpoints\":{
                            \"0\":{
                                \"slidesPerView\":1,
                                \"spaceBetween\":30},
                            \"320\":{
                                \"slidesPerView\":1,
                                \"spaceBetween\":30},
                            \"480\":{
                                \"slidesPerView\":1,
                                \"spaceBetween\":30},
                            \"640\":{
                                \"slidesPerView\":2,
                                \"spaceBetween\":30},
                            \"768\":{
                                \"slidesPerView\":2,
                                \"spaceBetween\":30},
                            \"991\":{
                                \"slidesPerView\":3,
                                \"spaceBetween\":30},
                            \"1200\":{
                                \"slidesPerView\":4,
                                \"spaceBetween\":30}
                            }
                        }'>
                    <div class=\"swiper-wrapper\">
                        <!-- single swiper style -->
                        <div class=\"swiper-slide\">
                            <div class=\"course-wrapper-style-2\">
                                <div class=\"wrapper-inner bg-one\">
                                    <div class=\"image\">
                                        <img src=\"assets/images/course/04.png\" alt=\"\">
                                        <div class=\"wishlist save-icon\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal-login\"><i class=\"fa-regular fa-heart bg-one\"></i></div>
                                    </div>
                                    <div class=\"content\">
                                        <ul class=\"meta-wrapper\">
                                            <li class=\"wrapper-list\">
                                                <div class=\"icon\">
                                                    <img src=\"assets/images/icon/12.svg\" alt=\"\">
                                                </div>
                                                <p class=\"desc\">Ages 3-8</p>
                                            </li>
                                            <li class=\"wrapper-list\">
                                                <div class=\"icon\">
                                                    <img src=\"assets/images/icon/13.svg\" alt=\"\">
                                                </div>
                                                <p class=\"desc\">50 Min</p>
                                            </li>
                                        </ul>
                                        <a href=\"course-details.html\">
                                            <h5 class=\"title\">Little Adventurers Travel the World Together! (Ages 7-9)</h5>
                                        </a>
                                        <div class=\"review-area\">
                                            <ul class=\"star-rating-area\">
                                                <li><i class=\"fa-sharp fa-solid fa-star\"></i></li>
                                                <li><i class=\"fa-sharp fa-solid fa-star\"></i></li>
                                                <li><i class=\"fa-sharp fa-solid fa-star\"></i></li>
                                                <li><i class=\"fa-sharp fa-solid fa-star\"></i></li>
                                                <li><i class=\"fa-regular fa-star\"></i></li>
                                            </ul>
                                            <p class=\"desc\">4.5 (124)</p>
                                        </div>
                                        <div class=\"bottom-wrapper\">
                                            <div class=\"author-area\">
                                                <div class=\"autor-image\">
                                                    <img src=\"assets/images/course/author-01.jpg\" width=\"40\" alt=\"\">
                                                </div>
                                                <p class=\"author-name\">Maria Sofa</p>
                                            </div>
                                            <h5 class=\"price\">\$15.00</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single swiper style -->
                        <!-- single swiper style -->
                        <div class=\"swiper-slide\">
                            <div class=\"course-wrapper-style-2\">
                                <div class=\"wrapper-inner bg-four\">
                                    <div class=\"image\">
                                        <img src=\"assets/images/course/05.png\" alt=\"\">
                                        <div class=\"wishlist save-icon\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal-login\"><i class=\"fa-regular fa-heart bg-four\"></i></div>
                                    </div>
                                    <div class=\"content\">
                                        <ul class=\"meta-wrapper\">
                                            <li class=\"wrapper-list\">
                                                <div class=\"icon\">
                                                    <img src=\"assets/images/icon/12.svg\" alt=\"\">
                                                </div>
                                                <p class=\"desc\">Ages 3-8</p>
                                            </li>
                                            <li class=\"wrapper-list\">
                                                <div class=\"icon\">
                                                    <img src=\"assets/images/icon/13.svg\" alt=\"\">
                                                </div>
                                                <p class=\"desc\">50 Min</p>
                                            </li>
                                        </ul>
                                        <a href=\"course-details.html\">
                                            <h5 class=\"title\">Weekly English Language
                                                Arts Club (Age 9-13)</h5>
                                        </a>
                                        <div class=\"review-area\">
                                            <ul class=\"star-rating-area\">
                                                <li><i class=\"fa-sharp fa-solid fa-star\"></i></li>
                                                <li><i class=\"fa-sharp fa-solid fa-star\"></i></li>
                                                <li><i class=\"fa-sharp fa-solid fa-star\"></i></li>
                                                <li><i class=\"fa-sharp fa-solid fa-star\"></i></li>
                                                <li><i class=\"fa-regular fa-star\"></i></li>
                                            </ul>
                                            <p class=\"desc\">4.5 (90)</p>
                                        </div>
                                        <div class=\"bottom-wrapper\">
                                            <div class=\"author-area\">
                                                <div class=\"autor-image\">
                                                    <img src=\"assets/images/course/author-01.jpg\" width=\"40\" alt=\"\">
                                                </div>
                                                <p class=\"author-name\">Arya Stark</p>
                                            </div>
                                            <h5 class=\"price\">\$10.00</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single swiper style -->
                        <!-- single swiper style -->
                        <div class=\"swiper-slide\">
                            <div class=\"course-wrapper-style-2\">
                                <div class=\"wrapper-inner bg-two\">
                                    <div class=\"image\">
                                        <img src=\"assets/images/course/06.png\" alt=\"\">
                                        <div class=\"wishlist save-icon\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal-login\"><i class=\"fa-regular fa-heart bg-two\"></i></div>
                                    </div>
                                    <div class=\"content\">
                                        <ul class=\"meta-wrapper\">
                                            <li class=\"wrapper-list\">
                                                <div class=\"icon\">
                                                    <img src=\"assets/images/icon/12.svg\" alt=\"\">
                                                </div>
                                                <p class=\"desc\">Ages 3-8</p>
                                            </li>
                                            <li class=\"wrapper-list\">
                                                <div class=\"icon\">
                                                    <img src=\"assets/images/icon/13.svg\" alt=\"\">
                                                </div>
                                                <p class=\"desc\">50 Min</p>
                                            </li>
                                        </ul>
                                        <a href=\"course-details.html\">
                                            <h5 class=\"title\">Dragon, Monster & Magical
                                                Creature Drawing Club</h5>
                                        </a>
                                        <div class=\"review-area\">
                                            <ul class=\"star-rating-area\">
                                                <li><i class=\"fa-sharp fa-solid fa-star\"></i></li>
                                                <li><i class=\"fa-sharp fa-solid fa-star\"></i></li>
                                                <li><i class=\"fa-sharp fa-solid fa-star\"></i></li>
                                                <li><i class=\"fa-sharp fa-solid fa-star\"></i></li>
                                                <li><i class=\"fa-regular fa-star\"></i></li>
                                            </ul>
                                            <p class=\"desc\">4.5 (88)</p>
                                        </div>
                                        <div class=\"bottom-wrapper\">
                                            <div class=\"author-area\">
                                                <div class=\"autor-image\">
                                                    <img src=\"assets/images/course/author-02.jpg\" width=\"40\" alt=\"\">
                                                </div>
                                                <p class=\"author-name\">Rosabell</p>
                                            </div>
                                            <h5 class=\"price\">\$16.00</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single swiper style -->
                        <!-- single swiper style -->
                        <div class=\"swiper-slide\">
                            <div class=\"course-wrapper-style-2\">
                                <div class=\"wrapper-inner bg-three\">
                                    <div class=\"image\">
                                        <img src=\"assets/images/course/07.png\" alt=\"\">
                                        <div class=\"wishlist save-icon\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal-login\"><i class=\"fa-regular fa-heart bg-three\"></i></div>
                                    </div>
                                    <div class=\"content\">
                                        <ul class=\"meta-wrapper\">
                                            <li class=\"wrapper-list\">
                                                <div class=\"icon\">
                                                    <img src=\"assets/images/icon/12.svg\" alt=\"\">
                                                </div>
                                                <p class=\"desc\">Ages 3-8</p>
                                            </li>
                                            <li class=\"wrapper-list\">
                                                <div class=\"icon\">
                                                    <img src=\"assets/images/icon/13.svg\" alt=\"\">
                                                </div>
                                                <p class=\"desc\">50 Min</p>
                                            </li>
                                        </ul>
                                        <a href=\"course-details.html\">

                                            <h5 class=\"title\">Bloxburg 1 on 1 Class Learn
                                                to Build or Improve</h5>
                                        </a>
                                        <div class=\"review-area\">
                                            <ul class=\"star-rating-area\">
                                                <li><i class=\"fa-sharp fa-solid fa-star\"></i></li>
                                                <li><i class=\"fa-sharp fa-solid fa-star\"></i></li>
                                                <li><i class=\"fa-sharp fa-solid fa-star\"></i></li>
                                                <li><i class=\"fa-sharp fa-solid fa-star\"></i></li>
                                                <li><i class=\"fa-regular fa-star\"></i></li>
                                            </ul>
                                            <p class=\"desc\">4.5 (44)</p>
                                        </div>
                                        <div class=\"bottom-wrapper\">
                                            <div class=\"author-area\">
                                                <div class=\"autor-image\">
                                                    <img src=\"assets/images/course/author-03.jpg\" width=\"40\" alt=\"\">
                                                </div>
                                                <p class=\"author-name\">Morgan Jofs</p>
                                            </div>
                                            <h5 class=\"price\">\$35.00</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single swiper style -->

                    </div>
                </div>
                <div class=\"swiper-btn swiper-button-next2\">
                    <div class=\"inner\">
                        <svg width=\"11\" height=\"20\" viewBox=\"0 0 11 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                            <path d=\"M1.6918 20C1.80148 20.0006 1.91019 19.9796 2.01173 19.9381C2.11326 19.8967 2.2056 19.8356 2.28347 19.7583L9.0918 12.95C9.47983 12.5629 9.78769 12.1032 9.99774 11.5969C10.2078 11.0907 10.3159 10.5481 10.3159 10C10.3159 9.45194 10.2078 8.90926 9.99774 8.40305C9.78769 7.89685 9.47983 7.43705 9.0918 7.05L2.28347 0.241678C2.20577 0.163979 2.11353 0.102345 2.01201 0.0602948C1.91049 0.0182446 1.80169 -0.00339842 1.6918 -0.00339842C1.58192 -0.00339842 1.47311 0.0182446 1.3716 0.0602948C1.27008 0.102345 1.17784 0.163979 1.10014 0.241678C1.02244 0.319376 0.960803 0.411618 0.918753 0.513136C0.876703 0.614655 0.85506 0.723461 0.85506 0.833344C0.85506 0.943226 0.876703 1.05203 0.918753 1.15355C0.960803 1.25507 1.02244 1.34731 1.10014 1.42501L7.90847 8.23333C8.37664 8.70209 8.6396 9.3375 8.6396 10C8.6396 10.6625 8.37664 11.2979 7.90847 11.7667L1.10014 18.575C1.02203 18.6525 0.960034 18.7446 0.917726 18.8462C0.875419 18.9477 0.853638 19.0566 0.853638 19.1667C0.853638 19.2767 0.875419 19.3856 0.917726 19.4871C0.960034 19.5887 1.02203 19.6809 1.10014 19.7583C1.178 19.8356 1.27035 19.8967 1.37188 19.9381C1.47341 19.9796 1.58213 20.0006 1.6918 20Z\" fill=\"#262626\" />
                        </svg>
                    </div>
                </div>
                <div class=\"swiper-btn swiper-button-prev2\">
                    <div class=\"inner\">
                        <svg width=\"11\" height=\"20\" viewBox=\"0 0 11 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                            <path d=\"M9.30869 20C9.19901 20.0006 9.09029 19.9796 8.98876 19.9381C8.88723 19.8966 8.79488 19.8355 8.71702 19.7583L1.90869 12.95C1.52066 12.5629 1.2128 12.1031 1.00275 11.5969C0.792694 11.0907 0.68457 10.548 0.68457 9.99998C0.68457 9.45192 0.792694 8.90924 1.00275 8.40303C1.2128 7.89683 1.52066 7.43703 1.90869 7.04998L8.71702 0.241658C8.79472 0.163959 8.88696 0.102325 8.98848 0.0602752C9.09 0.018225 9.1988 -0.00341797 9.30869 -0.00341797C9.41857 -0.00341797 9.52737 0.018225 9.62889 0.0602752C9.73041 0.102325 9.82265 0.163959 9.90035 0.241658C9.97805 0.319357 10.0397 0.411599 10.0817 0.513117C10.1238 0.614635 10.1454 0.723442 10.1454 0.833324C10.1454 0.943207 10.1238 1.05201 10.0817 1.15353C10.0397 1.25505 9.97805 1.34729 9.90035 1.42499L3.09202 8.23332C2.62385 8.70207 2.36088 9.33748 2.36088 9.99998C2.36088 10.6625 2.62385 11.2979 3.09202 11.7666L9.90035 18.575C9.97846 18.6524 10.0405 18.7446 10.0828 18.8462C10.1251 18.9477 10.1469 19.0566 10.1469 19.1666C10.1469 19.2766 10.1251 19.3856 10.0828 19.4871C10.0405 19.5887 9.97846 19.6808 9.90035 19.7583C9.82248 19.8355 9.73014 19.8966 9.62861 19.9381C9.52708 19.9796 9.41836 20.0006 9.30869 20Z\" fill=\"white\" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- course area end -->

    <!-- course area start -->
    <section class=\"rts-team-area section-bg\">
        <div class=\"container\">
            <div class=\"section-title-area text-center\">
                <p class=\"pre-title justify-content-center\"><img src=\"assets/images/banner/title-img.svg\" alt=\"\">Teacher</p>
                <h2 class=\"section-title\">Our Expert Teacher</h2>
                <p class=\"desc\">we take pride in our team of dedicated and expert <br> teachers who play a pivotal role in shaping.</p>
            </div>
            <div class=\"slider-inner\">
                <div class=\"swiper mySwiper-category-1 swiper-data\" data-swiper='{
                            \"spaceBetween\":30,
                            \"slidesPerView\":3,
                            \"loop\": true,
                            \"speed\": 1500,
                            \"pagination\":{
                                \"el\": \".swiper-pagination3\",
                                \"clickable\": \"true\"
                            },
                            \"autoplay\":{
                                \"delay\":\"4000\"
                            },
                            \"breakpoints\":{
                            \"0\":{
                                \"slidesPerView\":1,
                                \"spaceBetween\":30},
                            \"320\":{
                                \"slidesPerView\":1,
                                \"spaceBetween\":30},
                            \"480\":{
                                \"slidesPerView\":1,
                                \"spaceBetween\":30},
                            \"640\":{
                                \"slidesPerView\":2,
                                \"spaceBetween\":30},
                            \"840\":{
                                \"slidesPerView\":2,
                                \"spaceBetween\":30},
                            \"1140\":{
                                \"slidesPerView\":3,
                                \"spaceBetween\":30}
                            }
                        }'>
                    <div class=\"swiper-wrapper\">
                        <!-- single swiper style -->
                        <div class=\"swiper-slide\">
                            <div class=\"team-wrapper\">
                                <div class=\"wrapper-inner\">
                                    <div class=\"image\">
                                        <img src=\"assets/images/instructor/01.png\" alt=\"\">
                                        <ul class=\"social-area\">
                                            <li><a href=\"#\"><img src=\"assets/images/instructor/social-01.svg\" alt=\"\"></a></li>
                                            <li><a href=\"#\"><img src=\"assets/images/instructor/social-02.svg\" alt=\"\"></a></li>
                                            <li><a href=\"#\"><img src=\"assets/images/instructor/social-03.svg\" alt=\"\"></a></li>
                                            <li><a href=\"#\"><img src=\"assets/images/instructor/social-04.svg\" alt=\"\"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"content\">
                                    <h4 class=\"title\"><a href=\"team-details.html\">Eleanor Alice</a></h4>
                                </div>
                            </div>
                        </div>
                        <!-- single swiper style -->
                        <!-- single swiper style -->
                        <div class=\"swiper-slide\">
                            <div class=\"team-wrapper\">
                                <div class=\"wrapper-inner\">
                                    <div class=\"image\">
                                        <img src=\"assets/images/instructor/02.png\" alt=\"\">
                                        <ul class=\"social-area\">
                                            <li><a href=\"#\"><img src=\"assets/images/instructor/social-01.svg\" alt=\"\"></a></li>
                                            <li><a href=\"#\"><img src=\"assets/images/instructor/social-02.svg\" alt=\"\"></a></li>
                                            <li><a href=\"#\"><img src=\"assets/images/instructor/social-03.svg\" alt=\"\"></a></li>
                                            <li><a href=\"#\"><img src=\"assets/images/instructor/social-04.svg\" alt=\"\"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"content\">
                                    <h4 class=\"title\"><a href=\"team-details.html\">Isabella Jane</a></h4>
                                </div>
                            </div>
                        </div>
                        <!-- single swiper style -->
                        <!-- single swiper style -->
                        <div class=\"swiper-slide\">
                            <div class=\"team-wrapper\">
                                <div class=\"wrapper-inner\">
                                    <div class=\"image\">
                                        <img src=\"assets/images/instructor/03.png\" alt=\"\">
                                        <ul class=\"social-area\">
                                            <li><a href=\"#\"><img src=\"assets/images/instructor/social-01.svg\" alt=\"\"></a></li>
                                            <li><a href=\"#\"><img src=\"assets/images/instructor/social-02.svg\" alt=\"\"></a></li>
                                            <li><a href=\"#\"><img src=\"assets/images/instructor/social-03.svg\" alt=\"\"></a></li>
                                            <li><a href=\"#\"><img src=\"assets/images/instructor/social-04.svg\" alt=\"\"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"content\">
                                    <h4 class=\"title\"><a href=\"team-details.html\">Catherine Avery</a></h4>
                                </div>
                            </div>
                        </div>
                        <!-- single swiper style -->
                    </div>
                </div>
                <div class=\"swiper-pagination3\"></div>
            </div>
            <img class=\"banner-bg-shape-3\" src=\"assets/images/banner/banner-bg-2.png\" alt=\"\">
        </div>
    </section>
    <!-- course area end -->

    
    






    <!-- gallery area start -->
    <section class=\"rts-gallery-area rts-section-gap section-bg2\">
        <div class=\"container\">
            <div class=\"section-title-area text-center\">
                <p class=\"pre-title justify-content-center\"><img src=\"assets/images/banner/title-img.svg\" alt=\"\">Gallery</p>
                <h2 class=\"section-title\">Tiny Scholars Showcase</h2>
                <p class=\"desc\">Marked by significant growth and exploration <br> as toddlers transition from infancy</p>
            </div>
            <div class=\"section-inner\">
                <div class=\"row g-5\">
                    <div class=\"col-lg-4\">
                        <div class=\"gallery-wrapper\">
                            <img src=\"assets/images/course/12.png\" alt=\"gallery-image\">
                            <a href=\"assets/images/course/12.png\" class=\"gallery-image\">
                                <div class=\"item-overlay\">
                                    <span>
                                        <i class=\"fa-light fa-plus\"></i>  
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"gallery-wrapper\">
                            <img src=\"assets/images/course/13.png\" alt=\"gallery-image\">
                            <a href=\"assets/images/course/13.png\" class=\"gallery-image\">
                                <div class=\"item-overlay\">
                                    <span>
                                        <i class=\"fa-light fa-plus\"></i>  
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"gallery-wrapper\">
                            <img src=\"assets/images/course/14.png\" alt=\"gallery-image\">
                            <a href=\"assets/images/course/14.png\" class=\"gallery-image\">
                                <div class=\"item-overlay\">
                                    <span>
                                        <i class=\"fa-light fa-plus\"></i>  
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"gallery-wrapper\">
                            <img src=\"assets/images/course/15.png\" alt=\"gallery-image\">
                            <a href=\"assets/images/course/15.png\" class=\"gallery-image\">
                                <div class=\"item-overlay\">
                                    <span>
                                        <i class=\"fa-light fa-plus\"></i>  
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"gallery-wrapper\">
                            <img src=\"assets/images/course/16.png\" alt=\"gallery-image\">
                            <a href=\"assets/images/course/16.png\" class=\"gallery-image\">
                                <div class=\"item-overlay\">
                                    <span>
                                        <i class=\"fa-light fa-plus\"></i>  
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"gallery-wrapper\">
                            <img src=\"assets/images/course/17.png\" alt=\"gallery-image\">
                            <a href=\"assets/images/course/17.png\" class=\"gallery-image\">
                                <div class=\"item-overlay\">
                                    <span>
                                        <i class=\"fa-light fa-plus\"></i>  
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- gallery area end -->

    <!-- testimonials area start -->
    <section class=\"rts-testimonials-area v-2\">
        <div class=\"container\">
            <div class=\"section-title-area text-center\">
                <p class=\"pre-title justify-content-center\"><img src=\"assets/images/banner/title-img.svg\" alt=\"\">Testimonials</p>
                <h2 class=\"section-title\">What Parents Say About Us</h2>
                <p class=\"desc\">The success and happiness of our students are at the heart <br> of everything we do. But don't just take our word</p>
            </div>
            <div class=\"slider-inner\">
                <div class=\"swiper mySwiper-category-1 swiper-data\" data-swiper='{
                            \"spaceBetween\":30,
                            \"slidesPerView\":3,
                            \"loop\": true,
                            \"speed\": 1500,
                            \"navigation\":{
                                \"nextEl\":\".swiper-button-next3\",
                                \"prevEl\":\".swiper-button-prev3\"
                            },
                            \"autoplay\":{
                                \"delay\":\"4000\"
                            },
                            \"breakpoints\":{
                            \"0\":{
                                \"slidesPerView\":1,
                                \"spaceBetween\":30},
                            \"320\":{
                                \"slidesPerView\":1,
                                \"spaceBetween\":30},
                            \"480\":{
                                \"slidesPerView\":1,
                                \"spaceBetween\":30},
                            \"640\":{
                                \"slidesPerView\":1,
                                \"spaceBetween\":30},
                            \"840\":{
                                \"slidesPerView\":1,
                                \"spaceBetween\":30},
                            \"1140\":{
                                \"slidesPerView\":1,
                                \"spaceBetween\":30}
                            }
                        }'>
                    <div class=\"swiper-wrapper\">
                        <!-- single swiper style -->
                        <div class=\"swiper-slide\">
                            <div class=\"testimonials-wrapper\">
                                <div class=\"wrapper-inner\">
                                    <div class=\"content\">
                                        <div class=\"author-image mb--30\">
                                            <img src=\"assets/images/about/about-author.jpg\" width=\"72\" alt=\"\">
                                        </div>
                                        <h4 class=\"author\">David John</h4>
                                        <p class=\"desig\">Artist and Instructor</p>
                                        <p class=\"desc\">I would highly recommend Michael Richard to anyone interested the subject matter. It has provided me with invaluable knowledge & a newfound passion topic.</p>
                                        <ul class=\"star-rating-area\">
                                            <li><a href=\"#\"><i class=\"fa-sharp fa-solid fa-star\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fa-sharp fa-solid fa-star\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fa-sharp fa-solid fa-star\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fa-sharp fa-solid fa-star\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fa-light fa-star\"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class=\"testimonials-shape-image\">
                                        <div class=\"shape one\"><img src=\"assets/images/banner/shape/13.svg\" alt=\"shape_image\"></div>
                                        <div class=\"shape two\"><img src=\"assets/images/banner/shape/14.svg\" alt=\"shape_image\"></div>
                                        <div class=\"shape three\"><img src=\"assets/images/banner/shape/15.svg\" alt=\"shape_image\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single swiper style -->
                    </div>
                </div>
                <div class=\"swiper-btn swiper-button-next3\">
                    <div class=\"inner\">
                        <svg width=\"11\" height=\"20\" viewBox=\"0 0 11 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                            <path d=\"M1.6918 20C1.80148 20.0006 1.91019 19.9796 2.01173 19.9381C2.11326 19.8967 2.2056 19.8356 2.28347 19.7583L9.0918 12.95C9.47983 12.5629 9.78769 12.1032 9.99774 11.5969C10.2078 11.0907 10.3159 10.5481 10.3159 10C10.3159 9.45194 10.2078 8.90926 9.99774 8.40305C9.78769 7.89685 9.47983 7.43705 9.0918 7.05L2.28347 0.241678C2.20577 0.163979 2.11353 0.102345 2.01201 0.0602948C1.91049 0.0182446 1.80169 -0.00339842 1.6918 -0.00339842C1.58192 -0.00339842 1.47311 0.0182446 1.3716 0.0602948C1.27008 0.102345 1.17784 0.163979 1.10014 0.241678C1.02244 0.319376 0.960803 0.411618 0.918753 0.513136C0.876703 0.614655 0.85506 0.723461 0.85506 0.833344C0.85506 0.943226 0.876703 1.05203 0.918753 1.15355C0.960803 1.25507 1.02244 1.34731 1.10014 1.42501L7.90847 8.23333C8.37664 8.70209 8.6396 9.3375 8.6396 10C8.6396 10.6625 8.37664 11.2979 7.90847 11.7667L1.10014 18.575C1.02203 18.6525 0.960034 18.7446 0.917726 18.8462C0.875419 18.9477 0.853638 19.0566 0.853638 19.1667C0.853638 19.2767 0.875419 19.3856 0.917726 19.4871C0.960034 19.5887 1.02203 19.6809 1.10014 19.7583C1.178 19.8356 1.27035 19.8967 1.37188 19.9381C1.47341 19.9796 1.58213 20.0006 1.6918 20Z\" fill=\"#262626\" />
                        </svg>
                    </div>
                </div>
                <div class=\"swiper-btn swiper-button-prev3\">
                    <div class=\"inner\">
                        <svg width=\"11\" height=\"20\" viewBox=\"0 0 11 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                            <path d=\"M9.30869 20C9.19901 20.0006 9.09029 19.9796 8.98876 19.9381C8.88723 19.8966 8.79488 19.8355 8.71702 19.7583L1.90869 12.95C1.52066 12.5629 1.2128 12.1031 1.00275 11.5969C0.792694 11.0907 0.68457 10.548 0.68457 9.99998C0.68457 9.45192 0.792694 8.90924 1.00275 8.40303C1.2128 7.89683 1.52066 7.43703 1.90869 7.04998L8.71702 0.241658C8.79472 0.163959 8.88696 0.102325 8.98848 0.0602752C9.09 0.018225 9.1988 -0.00341797 9.30869 -0.00341797C9.41857 -0.00341797 9.52737 0.018225 9.62889 0.0602752C9.73041 0.102325 9.82265 0.163959 9.90035 0.241658C9.97805 0.319357 10.0397 0.411599 10.0817 0.513117C10.1238 0.614635 10.1454 0.723442 10.1454 0.833324C10.1454 0.943207 10.1238 1.05201 10.0817 1.15353C10.0397 1.25505 9.97805 1.34729 9.90035 1.42499L3.09202 8.23332C2.62385 8.70207 2.36088 9.33748 2.36088 9.99998C2.36088 10.6625 2.62385 11.2979 3.09202 11.7666L9.90035 18.575C9.97846 18.6524 10.0405 18.7446 10.0828 18.8462C10.1251 18.9477 10.1469 19.0566 10.1469 19.1666C10.1469 19.2766 10.1251 19.3856 10.0828 19.4871C10.0405 19.5887 9.97846 19.6808 9.90035 19.7583C9.82248 19.8355 9.73014 19.8966 9.62861 19.9381C9.52708 19.9796 9.41836 20.0006 9.30869 20Z\" fill=\"white\" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonials area end -->

    <!-- counterup area start -->
    <div class=\"rts-counter-up-area rts-section-gapBottom\">
        <div class=\"container\">
            <div class=\"counter-section-inner rts-shape-move\">
                <div class=\"counter-inner\">
                    <div class=\"counter-wrapper\">
                        <h3 class=\"title\"><span class=\"counter animated fadeInDownBig\">15</span>+</h3>
                        <span class=\"review\">Expert Teacher</span>
                    </div>
                    <div class=\"counter-wrapper\">
                        <h3 class=\"title\"><span class=\"counter animated fadeInDownBig\">244</span>+</h3>
                        <span class=\"review\">Completed Courses</span>
                    </div>
                    <div class=\"counter-wrapper\">
                        <h3 class=\"title\"><span class=\"counter animated fadeInDownBig\">455</span>+</h3>
                        <span class=\"review\">Students Learner</span>
                    </div>
                    <div class=\"counter-wrapper\">
                        <h3 class=\"title\"><span class=\"counter animated fadeInDownBig\">241</span>+</h3>
                        <span class=\"review\">Students Enrolled</span>
                    </div>
                </div>
                <div class=\"shape-image\">
                    <div class=\"shape one\" data-speed=\"0.04\" data-revert=\"true\"><img src=\"assets/images/banner/shape/19.svg\" alt=\"shape_image\"></div>
                    <div class=\"shape two\" data-speed=\"0.04\" data-revert=\"true\"><img src=\"assets/images/banner/shape/20.svg\" alt=\"shape_image\"></div>
                    <div class=\"shape three\" data-speed=\"0.04\"><img src=\"assets/images/banner/shape/21.svg\" alt=\"shape_image\"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- counterup area end -->


    <!-- footer call to action area start -->

    <!-- footer call to action area start -->
    <div class=\"rts-footer-area section-bg\">
        <div class=\"container\">
            <div class=\"footer-top\">
                <form action=\"#\">
                    <h3 class=\"form-title\">Don’t Miss Awesome Story From Our Alumni</h3>
                    <div class=\"form-inner\">
                        <input type=\"email\" name=\"Email\" placeholder=\"Enter Your mail\" required>
                        <button type=\"submit\" class=\"rts-btn btn-primary border-radius\">Subscribe Now</button>
                    </div>
                </form>
            </div>
            <div class=\"row ptb--65\">
                <div class=\"col-lg-12\">
                    <!-- footer main wrapper -->
                    <div class=\"footer-one-main-wrapper\">
                        <!-- single sized  footer  -->
                        <div class=\"footer-single-wized left-logo\">
                            <div class=\"head\">
                                <a href=\"#\">
                                    <img src=\"assets/images/logo/logo-1.png\" alt=\"logo\" loading=\"lazy\">
                                </a>
                            </div>
                            <div class=\"body\">
                                <p class=\"dsic\">
                                    We are passionate education dedicated to providing high-quality resources learners
                                    all backgrounds.
                                </p>
                                <ul class=\"wrapper-list\">
                                    <li><i class=\"fa-regular fa-location-dot\"></i>Yarra Park, Melbourne, Australia </li>
                                    <li><i class=\"fa-regular fa-phone\"></i><a href=\"tel:+4733378901\">+(61) 485-826-710</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- single sized  footer end -->
                        <!-- single sized  footer  -->
                        <div class=\"footer-single-wized\">
                            <div class=\"head\">
                                <h6 class=\"title\">About Us</h6>
                            </div>
                            <div class=\"body\">
                                <ul class=\"menu\">
                                    <li><a href=\"about.html\">About Us</a></li>
                                    <li><a href=\"team.html\">Teachers</a></li>
                                    <li><a href=\"team-details.html\">Teachers Info</a></li>
                                    <li><a href=\"zoom-meeting.html\">Event</a></li>
                                    <li><a href=\"pricing.html\">Pricing</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- single sized  footer end -->
                        <!-- single sized  footer  -->
                        <div class=\"footer-single-wized\">
                            <div class=\"head\">
                                <h6 class=\"title\">Our Course</h6>
                            </div>
                            <div class=\"body\">
                                <ul class=\"menu\">
                                    <li><a href=\"course.html\">Courses</a></li>
                                    <li><a href=\"blog.html\">Blog</a></li>
                                    <li><a href=\"program-details.html\">Program</a></li>
                                    <li><a href=\"contact.html\">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- single sized  footer end -->
                        <!-- single sized  footer  -->
                        <div class=\"footer-single-wized input-area\">
                            <div class=\"head\">
                                <h6 class=\"title\">Recent Post</h6>
                            </div>
                            <div class=\"body\">
                                <ul>
                                    <li class=\"post-area\">
                                        <div class=\"image\">
                                            <a href=\"#\">
                                                <img src=\"assets/images/blog/blog-07.jpeg\" width=\"80\" alt=\"\">
                                            </a>
                                        </div>
                                        <div class=\"content\">
                                            <p class=\"date\">October 29, 2023</p>
                                            <h6 class=\"post-title\"><a href=\"#\">Avoid These 4 Common When Managing Remote Teams</a></h6>
                                        </div>
                                    </li>
                                    <li class=\"post-area\">
                                        <div class=\"image\">
                                            <a href=\"#\">
                                                <img src=\"assets/images/blog/blog-08.jpeg\" width=\"80\" alt=\"\">
                                            </a>
                                        </div>
                                        <div class=\"content\">
                                            <p class=\"date\">October 29, 2023</p>
                                            <h6 class=\"post-title\"><a href=\"#\">How To Draw Realistic Lips In 7 Simple Steps</a></h6>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- single sized  footer end -->
                    </div>
                    <!-- footer main wrapper end -->
                </div>
            </div>
        </div>
        <div class=\"copyright-area-one-border\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"copyright-area-one\">
                            <p>Copyright © 2024 All Rights Reserved by Novalearn</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer call to action area end -->
    <!-- footer call to action area end -->

    <!-- Modal -->
   <div class=\"modal login-pupup-modal fade\" id=\"exampleModal-login\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Hi, Welcome back!</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                ";
        // line 1017
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 1017, $this->source); })())) {
            // line 1018
            yield "                    <div class=\"alert alert-danger\">
                        ";
            // line 1019
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 1019, $this->source); })()), "messageKey", [], "any", false, false, false, 1019), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 1019, $this->source); })()), "messageData", [], "any", false, false, false, 1019), "security"), "html", null, true);
            yield "
                    </div>
                ";
        }
        // line 1022
        yield "
                <form method=\"post\" action=\"";
        // line 1023
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 1024
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">

                    <label for=\"email\">Email :</label>
                    <input type=\"email\" name=\"email\" id=\"email\" placeholder=\"Email Address\" required value=\"";
        // line 1027
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("last_username", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 1027, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\">

                    <label for=\"password\">Mot de passe :</label>
                    <input type=\"password\" name=\"password\" id=\"password\" placeholder=\"Password\" required>

                    <div class=\"d-flex mb--20 align-items-center\">
                        <input type=\"checkbox\" id=\"examplecheck-modal\">
                        <label for=\"examplecheck-modal\">I agree to the terms of use and privacy policy.</label>
                    </div>

                    <button type=\"submit\" class=\"rts-btn btn-primary\">Sign In</button>

                    <p class=\"dont-acc mt--20\">Don't Have an Account? 
                        <a href=\"";
        // line 1040
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_signup");
        yield "\">Inscription Élève</a> / 
                        <a href=\"";
        // line 1041
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_signupPar");
        yield "\">Inscription Parent</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>




    <!-- header style two -->
    <div id=\"side-bar\" class=\"side-bar header-two\">
        <button class=\"close-icon-menu\"><i class=\"far fa-times\"></i></button>
        <!-- inner menu area desktop start -->
        <div class=\"inner-main-wrapper-desk\">
            <div class=\"inner-content\">
                <h4 class=\"title\">We Build Building and Great Constructive Homes.</h4>
                <p class=\"disc\">
                    We successfully cope with tasks of varying complexity, provide long-term guarantees and regularly master new technologies.
                </p>
                <div class=\"footer\">
                    <h4 class=\"title\">Got a project in mind?</h4>
                    <a href=\"contact.html\" class=\"rts-btn btn-primary\">Let's talk</a>
                </div>
            </div>
        </div>
        <!-- mobile menu area start -->
        <div class=\"mobile-menu-main\">
            <nav class=\"nav-main mainmenu-nav mt--30\">
                <ul class=\"mainmenu metismenu\" id=\"mobile-menu-active\">
                    <li class=\"has-droupdown\">
                        <a href=\"#\" class=\"main\">Home</a>
                        <ul class=\"submenu mm-collapse\">
                            <li><a class=\"mobile-menu-link\" href=\"index.html\">Home 01</a></li>
                            <li><a class=\"mobile-menu-link\" href=\"index-two.html\">Home 02</a></li>
                            <li><a class=\"mobile-menu-link\" href=\"index-three.html\">Home 03</a></li>
                            <li><a class=\"mobile-menu-link\" href=\"index-four.html\">home 04</a></li>
                        </ul>
                    </li>
                    <li class=\"has-droupdown\">
                        <a href=\"#\" class=\"main\">Pages</a>
                        <ul class=\"submenu mm-collapse\">
                            <li><a class=\"mobile-menu-link\" href=\"about.html\">About Us</a></li>
                            <li><a class=\"mobile-menu-link\" href=\"team.html\">Team</a></li>
                            <li><a class=\"mobile-menu-link\" href=\"team-details.html\">Team Details</a></li>
                            <li><a class=\"mobile-menu-link\" href=\"event.html\">Event</a></li>
                            <li><a class=\"mobile-menu-link\" href=\"event-details.html\">Event Details</a></li>
                            <li><a class=\"mobile-menu-link\" href=\"program-details.html\">Program Details</a></li>
                            <li><a class=\"mobile-menu-link\" href=\"pricing.html\">Pricing</a></li>
                            <li><a class=\"mobile-menu-link\" href=\"pricing-two.html\">Pricing Two</a></li>
                        </ul>
                    </li>
                    <li class=\"has-droupdown\">
                        <a href=\"#\" class=\"main\">Class</a>
                        <ul class=\"submenu mm-collapse\">
                            <li><a class=\"mobile-menu-link\" href=\"course.html\">Courses</a></li>
                            <li><a class=\"mobile-menu-link\" href=\"course-details.html\">Course Details</a></li>
                        </ul>
                    </li>
                    <li class=\"has-droupdown\">
                        <a href=\"#\" class=\"main\">Blog</a>
                        <ul class=\"submenu mm-collapse\">
                            <li><a class=\"mobile-menu-link\" href=\"blog.html\">Blog</a></li>
                            <li><a class=\"mobile-menu-link\" href=\"blog-grid.html\">Blog Grid</a></li>
                            <li><a class=\"mobile-menu-link\" href=\"blog-list.html\">Blog List</a></li>
                            <li><a class=\"mobile-menu-link\" href=\"blog-right-sidebar.html\">Blog Right Sidebar</a></li>
                            <li><a class=\"mobile-menu-link\" href=\"blog-left-sidebar.html\">Blog Left Sidebar</a></li>
                            <li><a class=\"mobile-menu-link\" href=\"blog-details.html\">Blog Details</a></li>
                        </ul>
                    </li>
                    <li class=\"menu-item\">
                        <a href=\"contact.html\" class=\"main\">Contact</a>
                    </li>
                </ul>
            </nav>

            <div class=\"buttons-area\">
                <a href=\"#\" class=\"rts-btn btn-border\">Log In</a>
                <a href=\"#\" class=\"rts-btn btn-primary\">Sign Up</a>
            </div>

            <div class=\"rts-social-style-one pl--20 mt--50\">
                <ul>
                    <li>
                        <a href=\"#\">
                            <i class=\"fa-brands fa-facebook-f\"></i>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <i class=\"fa-brands fa-twitter\"></i>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <i class=\"fa-brands fa-youtube\"></i>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <i class=\"fa-brands fa-linkedin-in\"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- mobile menu area end -->
    </div>
    <!-- header style two End -->

    <div id=\"preloader\" class=\"preloader\">
        <div class=\"animation-preloader\">
            <div class=\"txt-loading\">
                <span data-text-preloader=\"N\" class=\"letters-loading first\">
                        N
                    </span>
                <span data-text-preloader=\"O\" class=\"letters-loading first\">
                        O
                    </span>
                <span data-text-preloader=\"V\" class=\"letters-loading first\">
                    V
                    </span>
                <span data-text-preloader=\"A\" class=\"letters-loading first\">
                    A
                    </span>
                <span data-text-preloader=\"L\" class=\"letters-loading first\">
                        L
                    </span>
                <span data-text-preloader=\"E\" class=\"letters-loading\">
                        E
                    </span>
                <span data-text-preloader=\"A\" class=\"letters-loading\">
                        A
                    </span>
                <span data-text-preloader=\"R\" class=\"letters-loading\">
                    R
                    </span>
                <span data-text-preloader=\"N\" class=\"letters-loading\">
                    N
                    </span>
            </div>
            <p class=\"text-center\">Loading</p>
        </div>
        <div class=\"loader\">
            <div class=\"row\">
                <div class=\"col-3 loader-section section-left\">
                    <div class=\"bg\"></div>
                </div>
                <div class=\"col-3 loader-section section-left\">
                    <div class=\"bg\"></div>
                </div>
                <div class=\"col-3 loader-section section-right\">
                    <div class=\"bg\"></div>
                </div>
                <div class=\"col-3 loader-section section-right\">
                    <div class=\"bg\"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- rts backto top start -->
    <div class=\"progress-wrap\">
        <svg class=\"progress-circle svg-content\" width=\"100%\" height=\"100%\" viewBox=\"-1 -1 102 102\">
            <path d=\"M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98\" style=\"transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;\"></path>
        </svg>
    </div>
    <!-- rts backto top end -->

    <!-- offcanvase search -->
    <div class=\"search-input-area\">
        <div class=\"container\">
            <div class=\"search-input-inner\">
                <div class=\"input-div\">
                    <input class=\"search-input autocomplete\" type=\"text\" placeholder=\"Search by keyword or #\">
                    <button><i class=\"far fa-search\"></i></button>
                </div>
            </div>
        </div>
        <div id=\"close\" class=\"search-close-icon\"><i class=\"far fa-times\"></i></div>
    </div>
    <!-- offcanvase search -->
    <div id=\"anywhere-home\" class=\"\">
    </div>

    <!-- all scripts -->
    <!-- jquery min js -->
    <script src=\"assets/js/vendor/jquery.min.js\"></script>
    <!-- jquery ui js -->
    <script src=\"assets/js/vendor/jquery-ui.js\"></script>
    <!-- metismenu js -->
    <script src=\"assets/js/vendor/metismenu.js\"></script>
    <!-- magnific popup js-->
    <script src=\"assets/js/vendor/magnifying-popup.js\"></script>
    <!-- swiper JS 10.2.0 -->
    <script src=\"assets/js/plugins/swiper.js\"></script>
    <!-- counterup js -->
    <script src=\"assets/js/plugins/counterup.js\"></script>
    <!-- waypoint js -->
    <script src=\"assets/js/vendor/waypoint.js\"></script>
    <!-- wow js -->
    <script src=\"assets/js/vendor/waw.js\"></script>
    <!-- isotop mesonary -->
    <script src=\"assets/js/plugins/isotop.js\"></script>
    <!-- jquery imageloaded -->
    <script src=\"assets/js/plugins/imagesloaded.pkgd.min.js\"></script>
    <!-- resize sensor js -->
    <script src=\"assets/js/plugins/resizer-sensor.js\"></script>
    <!-- sticky sidebar -->
    <script src=\"assets/js/plugins/sticky-sidebar.js\"></script>
    <!-- gsap twinmax js -->
    <script src=\"assets/js/plugins/twinmax.js\"></script>
    <!-- chroma js -->
    <script src=\"assets/js/vendor/chroma.min.js\"></script>
    <!-- bootstrap 5.0.2 -->
    <script src=\"assets/js/plugins/bootstrap.min.js\"></script>
    <!-- dymanic Contact Form -->
    <script src=\"assets/js/plugins/contact.form.js\"></script>
    <!-- calender js -->
    <script src=\"assets/js/plugins/calender.js\"></script>
    <!-- main Js -->
    <script src=\"assets/js/main.js\"></script>


</body>

</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "NovaLearn";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_css(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 11
        yield "    <link rel=\"stylesheet\" href=\"assets/css/plugins/fontawesome-6.css\">
    <!-- swiper Css 10.2.0 -->
    <link rel=\"stylesheet\" href=\"assets/css/plugins/swiper.min.css\">
    <!-- magnific popup css -->
    <link rel=\"stylesheet\" href=\"assets/css/vendor/magnific-popup.css\">
    <!-- Bootstrap 5.0.2 -->
    <link rel=\"stylesheet\" href=\"assets/css/vendor/bootstrap.min.css\">
    <!-- jquery ui css -->
    <link rel=\"stylesheet\" href=\"assets/css/vendor/jquery-ui.css\">
    <!-- metismenu scss -->
    <link rel=\"stylesheet\" href=\"assets/css/vendor/metismenu.css\">
    <!-- custom style css -->
    <link rel=\"stylesheet\" href=\"assets/css/style.css\">
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  1364 => 11,  1354 => 10,  1337 => 7,  1101 => 1041,  1097 => 1040,  1081 => 1027,  1075 => 1024,  1071 => 1023,  1068 => 1022,  1062 => 1019,  1059 => 1018,  1057 => 1017,  63 => 25,  61 => 10,  55 => 7,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{% block title %}NovaLearn{% endblock %}</title>
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"assets/images/fav.png\">
    <!-- fontawesome 6.4.2 -->
    {% block css %}
    <link rel=\"stylesheet\" href=\"assets/css/plugins/fontawesome-6.css\">
    <!-- swiper Css 10.2.0 -->
    <link rel=\"stylesheet\" href=\"assets/css/plugins/swiper.min.css\">
    <!-- magnific popup css -->
    <link rel=\"stylesheet\" href=\"assets/css/vendor/magnific-popup.css\">
    <!-- Bootstrap 5.0.2 -->
    <link rel=\"stylesheet\" href=\"assets/css/vendor/bootstrap.min.css\">
    <!-- jquery ui css -->
    <link rel=\"stylesheet\" href=\"assets/css/vendor/jquery-ui.css\">
    <!-- metismenu scss -->
    <link rel=\"stylesheet\" href=\"assets/css/vendor/metismenu.css\">
    <!-- custom style css -->
    <link rel=\"stylesheet\" href=\"assets/css/style.css\">
    {% endblock %}
</head>

<body>

       
    <!-- header style one -->
    <header class=\"header-one header--sticky\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"header-one-wrapper\">
                        <div class=\"left-side-header\">
                            <a href=\"#\" class=\"logo-area\">
                                <img src=\"assets/images/logo/logo-1.png\" alt=\"logo\" width=\"280\" height=\"auto\">

                            </a>
                        </div>

                        <div class=\"main-nav-one\">
                            <nav>
                               <ul>
                                   <li>
                                     <a class=\"nav-link\" href=\"#\">Home</a>
                                    </li>

                                    </li>
                                    <li class=\"has-dropdown\">
                                        <a class=\"nav-link\" href=\"#\">Pages</a>
                                        <ul class=\"submenu\">
                                            <li><a href=\"team.html\">Team</a></li>
                                            <li><a href=\"team-details.html\">Team Details</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"has-dropdown\">
                                        <a class=\"nav-link\" href=\"#\">Classes</a>
                                        <ul class=\"submenu\">
                                            <li><a href=\"course.html\">Courses</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class=\"nav-link\" href=\"contact.html\">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                        <div class=\"header-right-area-one\">
                            <div class=\"buttons-area\">
                                <a href=\"contact.html\" class=\"rts-btn btn-primary border-radius\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal-login\" >Sign In</a>
                                    </div>
                            </div>
                            <div class=\"menu-btn\" id=\"menu-btn\">
                                <svg width=\"20\" height=\"16\" viewBox=\"0 0 20 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <rect y=\"14\" width=\"20\" height=\"2\" fill=\"#1F1F25\"></rect>
                                    <rect y=\"7\" width=\"20\" height=\"2\" fill=\"#1F1F25\"></rect>
                                    <rect width=\"20\" height=\"2\" fill=\"#1F1F25\"></rect>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header style end -->

    <!-- banner area start -->
    <section class=\"banner-area-one rts-shape-move\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6 order-xl-1 order-lg-1 order-sm-2 order-2\">
                    <div class=\"banner-content-one\">
                        <div class=\"inner\">
                       <h1 class=\"title-banner\" style=\"text-align: center;\">
   Découvrez la magie de l'apprentissage à <span style=\"color: #FFC107;\">Novalearn</span>
    <img src=\"assets/images/banner/title-shape-1.svg\" alt=\"banner\" style=\"vertical-align: middle; margin-left: 10px;\">
</h1>


                            <p class=\"disc\">Bienvenue sur NovaLearn, un espace où chaque jour est une occasion d’apprendre et de grandir.
                            Notre communauté dynamique œuvre pour favoriser l'apprentissage</p>


                            <div class=\"banner-btn\">
                                <a href=\"about.html\" class=\"rts-btn btn-primary border-radius\">Explorer maintenant</a>
                                <div class=\"video-btn-area\">
                                    <div class=\"vedio-icone\">
                                        <a class=\"video-play-button play-video popup-video\" href=\"https://www.youtube.com/watch?v=ezbJwaLmOeM\">
                                            <span class=\"icon\"><img src=\"assets/images/banner/play.svg\" alt=\"\"></span>
                                        </a>
                                        <div class=\"video-overlay\">
                                            <a class=\"video-overlay-close\"></a>
                                        </div>
                                    </div>
                                    <p class=\"intro\">Regarder la vidéo</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               <div class=\"col-lg-6 order-change order-lg-2 order-sm-1 order-1\">
    <div class=\"banner-right-img\" style=\"transform: translateY(-80px);\">
        <img src=\"assets/images/banner/01.png\" width= 900\" alt=\"banner\">
    </div>
</div>

            </div>
        </div>
        <img class=\"banner-bg-shape-2\" src=\"assets/images/banner/banner-bg-1.png\" alt=\"\">
        <div class=\"shape-image\">
            <div class=\"shape one\" data-speed=\"0.04\" data-revert=\"true\"><img src=\"assets/images/banner/shape/01.svg\" alt=\"shape_image\"></div>
            <div class=\"shape two\" data-speed=\"0.04\"><img src=\"assets/images/banner/shape/02.svg\" alt=\"shape_image\"></div>
            <div class=\"shape three\" data-speed=\"0.04\" data-revert=\"true\"><img src=\"assets/images/banner/shape/03.svg\" alt=\"shape_image\"></div>
            <div class=\"shape four\" data-speed=\"0.04\" data-revert=\"true\"><img src=\"assets/images/banner/shape/04.svg\" alt=\"shape_image\"></div>
            <div class=\"shape five\" data-speed=\"0.04\"><img src=\"assets/images/banner/shape/05.svg\" alt=\"shape_image\"></div>
            <div class=\"shape six\" data-speed=\"0.04\"><img src=\"assets/images/banner/shape/06.svg\" alt=\"shape_image\"></div>
            <div class=\"shape seven\" data-speed=\"0.04\" data-revert=\"true\"><img src=\"assets/images/banner/shape/07.svg\" alt=\"shape_image\"></div>
        </div>
        <div class=\"banner-bg-grid-shape\">
        </div>
    </section>
    <!-- banner area end -->

    <!-- about area start -->
    <section class=\"rts-about-area rts-shape-move rts-section-gap\">
        <div class=\"container\">
            <div class=\"section-inner\">
                <div class=\"row align-items-center\">
                    <div class=\"col-lg-6\">
                        <div class=\"about-image\">
                            <img src=\"assets/images/about/about-01.png\" width=\"620\" alt=\"\">
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"about-content\">
                            <div class=\"section-title-area\">
                                <p class=\"pre-title\"><img src=\"assets/images/banner/title-img.svg\" alt=\"\">About Us</p>
                                <h2 class=\"section-title\">Découvrez notre mission pour <br> Novalearn</h2>
                                <p class=\"desc\">Bienvenue sur Novalearn, où l'éducation rencontre l'inspiration et où chaque parcours d'enfant est une histoire de croissance et de découverte.</p>
                            </div>
                            <ul class=\"about-wrapper\">
                                <li class=\"wrapper-list\">
                                    <div class=\"list-inner\">
                                        <div class=\"icon\"><img src=\"assets/images/icon/01.svg\" alt=\"\"></div>
                                        <div class=\"content\">
                                            <h4 class=\"title\">Notre Mission</h4>
                                            <p class=\"desc\">At novalearn our mission is to cultivate <br>
                                                an environment where curiosity is sparked.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"wrapper-list\">
                                    <div class=\"list-inner\">
                                        <div class=\"icon\"><img src=\"assets/images/icon/02.svg\" alt=\"\"></div>
                                        <div class=\"content\">
                                            <h4 class=\"title\">Our Commitment</h4>
                                            <p class=\"desc\">As we embark on the journey of education <br>
                                                together, we remain committed to providing.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class=\"about-btn-area\">
                                <a href=\"about.html\" class=\"rts-btn btn-primary border-radius\">About More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"shape-image\">
            <div class=\"shape one\" data-speed=\"0.04\" data-revert=\"true\"><img src=\"assets/images/banner/shape/08.svg\" alt=\"shape_image\"></div>
            <div class=\"shape two\" data-speed=\"0.04\" data-revert=\"true\"><img src=\"assets/images/banner/shape/09.svg\" alt=\"shape_image\"></div>
            <div class=\"shape three\" data-speed=\"0.04\"><img src=\"assets/images/banner/shape/10.svg\" alt=\"shape_image\"></div>
        </div>
    </section>
    <!-- about area end -->

    <!-- about area start -->
    <section class=\"rts-about-area area-2 rts-shape-move rts-section-gap section-bg2\">
        <div class=\"container\">
            <div class=\"section-inner\">
                <div class=\"row align-items-center\">
                    <div class=\"col-lg-6 p-0\">
                        <div class=\"about-content area-2\">
                            <div class=\"section-title-area\">
                                <p class=\"pre-title\"><img src=\"assets/images/banner/title-img.svg\" alt=\"\">About Us</p>
                                <h2 class=\"section-title\">Discover Our Mission for Studykids Academy</h2>
                                <p class=\"desc\">Welcome to Sutdykids, where education meets inspiration, and every <br> child's journey is a story of growth and discovery.</p>
                            </div>
                            <div class=\"about-wrapper-area\">
                                <ul class=\"about-wrapper\">
                                    <li class=\"item\">
                                        <i class=\"fa-solid fa-check\"></i>
                                        Educational Institutions
                                    </li>
                                    <li class=\"item\">
                                        <i class=\"fa-solid fa-check\"></i>
                                        Educational Materials
                                    </li>
                                    <li class=\"item\">
                                        <i class=\"fa-solid fa-check\"></i>
                                        Parents and Communities
                                    </li>
                                </ul>
                                <ul class=\"about-wrapper\">
                                    <li class=\"item\">
                                        <i class=\"fa-solid fa-check\"></i>
                                        Online Learning Platforms
                                    </li>
                                    <li class=\"item\">
                                        <i class=\"fa-solid fa-check\"></i>
                                        Education Departments Institutions
                                    </li>
                                    <li class=\"item\">
                                        <i class=\"fa-solid fa-check\"></i>
                                        Nonprofit Organizations
                                    </li>
                                </ul>
                            </div>
                            <div class=\"about-btn-area\">
                                <a href=\"#\" class=\"rts-btn btn-primary\">About More</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 order-change\">
                        <div class=\"about-image2\">
                            <img src=\"assets/images/about/about-02.jpg\" alt=\"\">
                            <div class=\"video-btn-area\">
                                <div class=\"vedio-icone\">
                                    <a class=\"video-play-button play-video popup-video\" href=\"https://www.youtube.com/watch?v=ezbJwaLmOeM\">
                                        <span class=\"icon\"><img src=\"assets/images/icon/round-shape.svg\" width=\"80\" alt=\"\"></span>
                                        <span class=\"play-icon\">
                                            <img src=\"assets/images/icon/play.svg\" width=\"32\" alt=\"\">
                                        </span>
                                    </a>
                                    <div class=\"video-overlay\">
                                        <a class=\"video-overlay-close\">×</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"shape-image\">
            <div class=\"shape one\" data-speed=\"0.04\" data-revert=\"true\"><img src=\"assets/images/banner/shape/25.svg\" alt=\"shape_image\"></div>
            <div class=\"shape two\" data-speed=\"0.04\" data-revert=\"true\"><img src=\"assets/images/banner/shape/26.svg\" alt=\"shape_image\"></div>
            <div class=\"shape three\" data-speed=\"0.04\"><img src=\"assets/images/banner/shape/27.svg\" alt=\"shape_image\"></div>
            <div class=\"shape four\" data-speed=\"0.04\"><img src=\"assets/images/banner/shape/28.svg\" alt=\"shape_image\"></div>
            <div class=\"shape five\" data-speed=\"0.04\" data-revert=\"true\"><img src=\"assets/images/banner/shape/29.svg\" alt=\"shape_image\"></div>
            <div class=\"shape six\" data-speed=\"0.04\" data-revert=\"true\"><img src=\"assets/images/banner/shape/02.svg\" alt=\"shape_image\"></div>
        </div>
    </section>
    <!-- about area end -->

    <!-- course area start -->
    <section class=\"rts-course-area style-2\">
        <div class=\"container\">
            <div class=\"section-title-area text-center\">
                <p class=\"pre-title justify-content-center\"><img src=\"assets/images/banner/title-img.svg\" alt=\"\">Classes</p>
                <h2 class=\"section-title\">Popular Classes</h2>
                <p class=\"desc\">Marked by significant growth and exploration <br> as toddlers transition from infancy</p>
            </div>
            <div class=\"slider-inner\">
                <div class=\"swiper mySwiper-category-1 swiper-data\" data-swiper='{
                            \"spaceBetween\":30,
                            \"slidesPerView\":4,
                            \"loop\": true,
                            \"speed\": 1500,
                            \"navigation\":{
                                \"nextEl\":\".swiper-button-next2\",
                                \"prevEl\":\".swiper-button-prev2\"
                            },
                            \"autoplay\":{
                                \"delay\":\"4500\"
                            },
                            \"breakpoints\":{
                            \"0\":{
                                \"slidesPerView\":1,
                                \"spaceBetween\":30},
                            \"320\":{
                                \"slidesPerView\":1,
                                \"spaceBetween\":30},
                            \"480\":{
                                \"slidesPerView\":1,
                                \"spaceBetween\":30},
                            \"640\":{
                                \"slidesPerView\":2,
                                \"spaceBetween\":30},
                            \"768\":{
                                \"slidesPerView\":2,
                                \"spaceBetween\":30},
                            \"991\":{
                                \"slidesPerView\":3,
                                \"spaceBetween\":30},
                            \"1200\":{
                                \"slidesPerView\":4,
                                \"spaceBetween\":30}
                            }
                        }'>
                    <div class=\"swiper-wrapper\">
                        <!-- single swiper style -->
                        <div class=\"swiper-slide\">
                            <div class=\"course-wrapper-style-2\">
                                <div class=\"wrapper-inner bg-one\">
                                    <div class=\"image\">
                                        <img src=\"assets/images/course/04.png\" alt=\"\">
                                        <div class=\"wishlist save-icon\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal-login\"><i class=\"fa-regular fa-heart bg-one\"></i></div>
                                    </div>
                                    <div class=\"content\">
                                        <ul class=\"meta-wrapper\">
                                            <li class=\"wrapper-list\">
                                                <div class=\"icon\">
                                                    <img src=\"assets/images/icon/12.svg\" alt=\"\">
                                                </div>
                                                <p class=\"desc\">Ages 3-8</p>
                                            </li>
                                            <li class=\"wrapper-list\">
                                                <div class=\"icon\">
                                                    <img src=\"assets/images/icon/13.svg\" alt=\"\">
                                                </div>
                                                <p class=\"desc\">50 Min</p>
                                            </li>
                                        </ul>
                                        <a href=\"course-details.html\">
                                            <h5 class=\"title\">Little Adventurers Travel the World Together! (Ages 7-9)</h5>
                                        </a>
                                        <div class=\"review-area\">
                                            <ul class=\"star-rating-area\">
                                                <li><i class=\"fa-sharp fa-solid fa-star\"></i></li>
                                                <li><i class=\"fa-sharp fa-solid fa-star\"></i></li>
                                                <li><i class=\"fa-sharp fa-solid fa-star\"></i></li>
                                                <li><i class=\"fa-sharp fa-solid fa-star\"></i></li>
                                                <li><i class=\"fa-regular fa-star\"></i></li>
                                            </ul>
                                            <p class=\"desc\">4.5 (124)</p>
                                        </div>
                                        <div class=\"bottom-wrapper\">
                                            <div class=\"author-area\">
                                                <div class=\"autor-image\">
                                                    <img src=\"assets/images/course/author-01.jpg\" width=\"40\" alt=\"\">
                                                </div>
                                                <p class=\"author-name\">Maria Sofa</p>
                                            </div>
                                            <h5 class=\"price\">\$15.00</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single swiper style -->
                        <!-- single swiper style -->
                        <div class=\"swiper-slide\">
                            <div class=\"course-wrapper-style-2\">
                                <div class=\"wrapper-inner bg-four\">
                                    <div class=\"image\">
                                        <img src=\"assets/images/course/05.png\" alt=\"\">
                                        <div class=\"wishlist save-icon\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal-login\"><i class=\"fa-regular fa-heart bg-four\"></i></div>
                                    </div>
                                    <div class=\"content\">
                                        <ul class=\"meta-wrapper\">
                                            <li class=\"wrapper-list\">
                                                <div class=\"icon\">
                                                    <img src=\"assets/images/icon/12.svg\" alt=\"\">
                                                </div>
                                                <p class=\"desc\">Ages 3-8</p>
                                            </li>
                                            <li class=\"wrapper-list\">
                                                <div class=\"icon\">
                                                    <img src=\"assets/images/icon/13.svg\" alt=\"\">
                                                </div>
                                                <p class=\"desc\">50 Min</p>
                                            </li>
                                        </ul>
                                        <a href=\"course-details.html\">
                                            <h5 class=\"title\">Weekly English Language
                                                Arts Club (Age 9-13)</h5>
                                        </a>
                                        <div class=\"review-area\">
                                            <ul class=\"star-rating-area\">
                                                <li><i class=\"fa-sharp fa-solid fa-star\"></i></li>
                                                <li><i class=\"fa-sharp fa-solid fa-star\"></i></li>
                                                <li><i class=\"fa-sharp fa-solid fa-star\"></i></li>
                                                <li><i class=\"fa-sharp fa-solid fa-star\"></i></li>
                                                <li><i class=\"fa-regular fa-star\"></i></li>
                                            </ul>
                                            <p class=\"desc\">4.5 (90)</p>
                                        </div>
                                        <div class=\"bottom-wrapper\">
                                            <div class=\"author-area\">
                                                <div class=\"autor-image\">
                                                    <img src=\"assets/images/course/author-01.jpg\" width=\"40\" alt=\"\">
                                                </div>
                                                <p class=\"author-name\">Arya Stark</p>
                                            </div>
                                            <h5 class=\"price\">\$10.00</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single swiper style -->
                        <!-- single swiper style -->
                        <div class=\"swiper-slide\">
                            <div class=\"course-wrapper-style-2\">
                                <div class=\"wrapper-inner bg-two\">
                                    <div class=\"image\">
                                        <img src=\"assets/images/course/06.png\" alt=\"\">
                                        <div class=\"wishlist save-icon\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal-login\"><i class=\"fa-regular fa-heart bg-two\"></i></div>
                                    </div>
                                    <div class=\"content\">
                                        <ul class=\"meta-wrapper\">
                                            <li class=\"wrapper-list\">
                                                <div class=\"icon\">
                                                    <img src=\"assets/images/icon/12.svg\" alt=\"\">
                                                </div>
                                                <p class=\"desc\">Ages 3-8</p>
                                            </li>
                                            <li class=\"wrapper-list\">
                                                <div class=\"icon\">
                                                    <img src=\"assets/images/icon/13.svg\" alt=\"\">
                                                </div>
                                                <p class=\"desc\">50 Min</p>
                                            </li>
                                        </ul>
                                        <a href=\"course-details.html\">
                                            <h5 class=\"title\">Dragon, Monster & Magical
                                                Creature Drawing Club</h5>
                                        </a>
                                        <div class=\"review-area\">
                                            <ul class=\"star-rating-area\">
                                                <li><i class=\"fa-sharp fa-solid fa-star\"></i></li>
                                                <li><i class=\"fa-sharp fa-solid fa-star\"></i></li>
                                                <li><i class=\"fa-sharp fa-solid fa-star\"></i></li>
                                                <li><i class=\"fa-sharp fa-solid fa-star\"></i></li>
                                                <li><i class=\"fa-regular fa-star\"></i></li>
                                            </ul>
                                            <p class=\"desc\">4.5 (88)</p>
                                        </div>
                                        <div class=\"bottom-wrapper\">
                                            <div class=\"author-area\">
                                                <div class=\"autor-image\">
                                                    <img src=\"assets/images/course/author-02.jpg\" width=\"40\" alt=\"\">
                                                </div>
                                                <p class=\"author-name\">Rosabell</p>
                                            </div>
                                            <h5 class=\"price\">\$16.00</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single swiper style -->
                        <!-- single swiper style -->
                        <div class=\"swiper-slide\">
                            <div class=\"course-wrapper-style-2\">
                                <div class=\"wrapper-inner bg-three\">
                                    <div class=\"image\">
                                        <img src=\"assets/images/course/07.png\" alt=\"\">
                                        <div class=\"wishlist save-icon\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal-login\"><i class=\"fa-regular fa-heart bg-three\"></i></div>
                                    </div>
                                    <div class=\"content\">
                                        <ul class=\"meta-wrapper\">
                                            <li class=\"wrapper-list\">
                                                <div class=\"icon\">
                                                    <img src=\"assets/images/icon/12.svg\" alt=\"\">
                                                </div>
                                                <p class=\"desc\">Ages 3-8</p>
                                            </li>
                                            <li class=\"wrapper-list\">
                                                <div class=\"icon\">
                                                    <img src=\"assets/images/icon/13.svg\" alt=\"\">
                                                </div>
                                                <p class=\"desc\">50 Min</p>
                                            </li>
                                        </ul>
                                        <a href=\"course-details.html\">

                                            <h5 class=\"title\">Bloxburg 1 on 1 Class Learn
                                                to Build or Improve</h5>
                                        </a>
                                        <div class=\"review-area\">
                                            <ul class=\"star-rating-area\">
                                                <li><i class=\"fa-sharp fa-solid fa-star\"></i></li>
                                                <li><i class=\"fa-sharp fa-solid fa-star\"></i></li>
                                                <li><i class=\"fa-sharp fa-solid fa-star\"></i></li>
                                                <li><i class=\"fa-sharp fa-solid fa-star\"></i></li>
                                                <li><i class=\"fa-regular fa-star\"></i></li>
                                            </ul>
                                            <p class=\"desc\">4.5 (44)</p>
                                        </div>
                                        <div class=\"bottom-wrapper\">
                                            <div class=\"author-area\">
                                                <div class=\"autor-image\">
                                                    <img src=\"assets/images/course/author-03.jpg\" width=\"40\" alt=\"\">
                                                </div>
                                                <p class=\"author-name\">Morgan Jofs</p>
                                            </div>
                                            <h5 class=\"price\">\$35.00</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single swiper style -->

                    </div>
                </div>
                <div class=\"swiper-btn swiper-button-next2\">
                    <div class=\"inner\">
                        <svg width=\"11\" height=\"20\" viewBox=\"0 0 11 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                            <path d=\"M1.6918 20C1.80148 20.0006 1.91019 19.9796 2.01173 19.9381C2.11326 19.8967 2.2056 19.8356 2.28347 19.7583L9.0918 12.95C9.47983 12.5629 9.78769 12.1032 9.99774 11.5969C10.2078 11.0907 10.3159 10.5481 10.3159 10C10.3159 9.45194 10.2078 8.90926 9.99774 8.40305C9.78769 7.89685 9.47983 7.43705 9.0918 7.05L2.28347 0.241678C2.20577 0.163979 2.11353 0.102345 2.01201 0.0602948C1.91049 0.0182446 1.80169 -0.00339842 1.6918 -0.00339842C1.58192 -0.00339842 1.47311 0.0182446 1.3716 0.0602948C1.27008 0.102345 1.17784 0.163979 1.10014 0.241678C1.02244 0.319376 0.960803 0.411618 0.918753 0.513136C0.876703 0.614655 0.85506 0.723461 0.85506 0.833344C0.85506 0.943226 0.876703 1.05203 0.918753 1.15355C0.960803 1.25507 1.02244 1.34731 1.10014 1.42501L7.90847 8.23333C8.37664 8.70209 8.6396 9.3375 8.6396 10C8.6396 10.6625 8.37664 11.2979 7.90847 11.7667L1.10014 18.575C1.02203 18.6525 0.960034 18.7446 0.917726 18.8462C0.875419 18.9477 0.853638 19.0566 0.853638 19.1667C0.853638 19.2767 0.875419 19.3856 0.917726 19.4871C0.960034 19.5887 1.02203 19.6809 1.10014 19.7583C1.178 19.8356 1.27035 19.8967 1.37188 19.9381C1.47341 19.9796 1.58213 20.0006 1.6918 20Z\" fill=\"#262626\" />
                        </svg>
                    </div>
                </div>
                <div class=\"swiper-btn swiper-button-prev2\">
                    <div class=\"inner\">
                        <svg width=\"11\" height=\"20\" viewBox=\"0 0 11 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                            <path d=\"M9.30869 20C9.19901 20.0006 9.09029 19.9796 8.98876 19.9381C8.88723 19.8966 8.79488 19.8355 8.71702 19.7583L1.90869 12.95C1.52066 12.5629 1.2128 12.1031 1.00275 11.5969C0.792694 11.0907 0.68457 10.548 0.68457 9.99998C0.68457 9.45192 0.792694 8.90924 1.00275 8.40303C1.2128 7.89683 1.52066 7.43703 1.90869 7.04998L8.71702 0.241658C8.79472 0.163959 8.88696 0.102325 8.98848 0.0602752C9.09 0.018225 9.1988 -0.00341797 9.30869 -0.00341797C9.41857 -0.00341797 9.52737 0.018225 9.62889 0.0602752C9.73041 0.102325 9.82265 0.163959 9.90035 0.241658C9.97805 0.319357 10.0397 0.411599 10.0817 0.513117C10.1238 0.614635 10.1454 0.723442 10.1454 0.833324C10.1454 0.943207 10.1238 1.05201 10.0817 1.15353C10.0397 1.25505 9.97805 1.34729 9.90035 1.42499L3.09202 8.23332C2.62385 8.70207 2.36088 9.33748 2.36088 9.99998C2.36088 10.6625 2.62385 11.2979 3.09202 11.7666L9.90035 18.575C9.97846 18.6524 10.0405 18.7446 10.0828 18.8462C10.1251 18.9477 10.1469 19.0566 10.1469 19.1666C10.1469 19.2766 10.1251 19.3856 10.0828 19.4871C10.0405 19.5887 9.97846 19.6808 9.90035 19.7583C9.82248 19.8355 9.73014 19.8966 9.62861 19.9381C9.52708 19.9796 9.41836 20.0006 9.30869 20Z\" fill=\"white\" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- course area end -->

    <!-- course area start -->
    <section class=\"rts-team-area section-bg\">
        <div class=\"container\">
            <div class=\"section-title-area text-center\">
                <p class=\"pre-title justify-content-center\"><img src=\"assets/images/banner/title-img.svg\" alt=\"\">Teacher</p>
                <h2 class=\"section-title\">Our Expert Teacher</h2>
                <p class=\"desc\">we take pride in our team of dedicated and expert <br> teachers who play a pivotal role in shaping.</p>
            </div>
            <div class=\"slider-inner\">
                <div class=\"swiper mySwiper-category-1 swiper-data\" data-swiper='{
                            \"spaceBetween\":30,
                            \"slidesPerView\":3,
                            \"loop\": true,
                            \"speed\": 1500,
                            \"pagination\":{
                                \"el\": \".swiper-pagination3\",
                                \"clickable\": \"true\"
                            },
                            \"autoplay\":{
                                \"delay\":\"4000\"
                            },
                            \"breakpoints\":{
                            \"0\":{
                                \"slidesPerView\":1,
                                \"spaceBetween\":30},
                            \"320\":{
                                \"slidesPerView\":1,
                                \"spaceBetween\":30},
                            \"480\":{
                                \"slidesPerView\":1,
                                \"spaceBetween\":30},
                            \"640\":{
                                \"slidesPerView\":2,
                                \"spaceBetween\":30},
                            \"840\":{
                                \"slidesPerView\":2,
                                \"spaceBetween\":30},
                            \"1140\":{
                                \"slidesPerView\":3,
                                \"spaceBetween\":30}
                            }
                        }'>
                    <div class=\"swiper-wrapper\">
                        <!-- single swiper style -->
                        <div class=\"swiper-slide\">
                            <div class=\"team-wrapper\">
                                <div class=\"wrapper-inner\">
                                    <div class=\"image\">
                                        <img src=\"assets/images/instructor/01.png\" alt=\"\">
                                        <ul class=\"social-area\">
                                            <li><a href=\"#\"><img src=\"assets/images/instructor/social-01.svg\" alt=\"\"></a></li>
                                            <li><a href=\"#\"><img src=\"assets/images/instructor/social-02.svg\" alt=\"\"></a></li>
                                            <li><a href=\"#\"><img src=\"assets/images/instructor/social-03.svg\" alt=\"\"></a></li>
                                            <li><a href=\"#\"><img src=\"assets/images/instructor/social-04.svg\" alt=\"\"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"content\">
                                    <h4 class=\"title\"><a href=\"team-details.html\">Eleanor Alice</a></h4>
                                </div>
                            </div>
                        </div>
                        <!-- single swiper style -->
                        <!-- single swiper style -->
                        <div class=\"swiper-slide\">
                            <div class=\"team-wrapper\">
                                <div class=\"wrapper-inner\">
                                    <div class=\"image\">
                                        <img src=\"assets/images/instructor/02.png\" alt=\"\">
                                        <ul class=\"social-area\">
                                            <li><a href=\"#\"><img src=\"assets/images/instructor/social-01.svg\" alt=\"\"></a></li>
                                            <li><a href=\"#\"><img src=\"assets/images/instructor/social-02.svg\" alt=\"\"></a></li>
                                            <li><a href=\"#\"><img src=\"assets/images/instructor/social-03.svg\" alt=\"\"></a></li>
                                            <li><a href=\"#\"><img src=\"assets/images/instructor/social-04.svg\" alt=\"\"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"content\">
                                    <h4 class=\"title\"><a href=\"team-details.html\">Isabella Jane</a></h4>
                                </div>
                            </div>
                        </div>
                        <!-- single swiper style -->
                        <!-- single swiper style -->
                        <div class=\"swiper-slide\">
                            <div class=\"team-wrapper\">
                                <div class=\"wrapper-inner\">
                                    <div class=\"image\">
                                        <img src=\"assets/images/instructor/03.png\" alt=\"\">
                                        <ul class=\"social-area\">
                                            <li><a href=\"#\"><img src=\"assets/images/instructor/social-01.svg\" alt=\"\"></a></li>
                                            <li><a href=\"#\"><img src=\"assets/images/instructor/social-02.svg\" alt=\"\"></a></li>
                                            <li><a href=\"#\"><img src=\"assets/images/instructor/social-03.svg\" alt=\"\"></a></li>
                                            <li><a href=\"#\"><img src=\"assets/images/instructor/social-04.svg\" alt=\"\"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"content\">
                                    <h4 class=\"title\"><a href=\"team-details.html\">Catherine Avery</a></h4>
                                </div>
                            </div>
                        </div>
                        <!-- single swiper style -->
                    </div>
                </div>
                <div class=\"swiper-pagination3\"></div>
            </div>
            <img class=\"banner-bg-shape-3\" src=\"assets/images/banner/banner-bg-2.png\" alt=\"\">
        </div>
    </section>
    <!-- course area end -->

    
    






    <!-- gallery area start -->
    <section class=\"rts-gallery-area rts-section-gap section-bg2\">
        <div class=\"container\">
            <div class=\"section-title-area text-center\">
                <p class=\"pre-title justify-content-center\"><img src=\"assets/images/banner/title-img.svg\" alt=\"\">Gallery</p>
                <h2 class=\"section-title\">Tiny Scholars Showcase</h2>
                <p class=\"desc\">Marked by significant growth and exploration <br> as toddlers transition from infancy</p>
            </div>
            <div class=\"section-inner\">
                <div class=\"row g-5\">
                    <div class=\"col-lg-4\">
                        <div class=\"gallery-wrapper\">
                            <img src=\"assets/images/course/12.png\" alt=\"gallery-image\">
                            <a href=\"assets/images/course/12.png\" class=\"gallery-image\">
                                <div class=\"item-overlay\">
                                    <span>
                                        <i class=\"fa-light fa-plus\"></i>  
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"gallery-wrapper\">
                            <img src=\"assets/images/course/13.png\" alt=\"gallery-image\">
                            <a href=\"assets/images/course/13.png\" class=\"gallery-image\">
                                <div class=\"item-overlay\">
                                    <span>
                                        <i class=\"fa-light fa-plus\"></i>  
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"gallery-wrapper\">
                            <img src=\"assets/images/course/14.png\" alt=\"gallery-image\">
                            <a href=\"assets/images/course/14.png\" class=\"gallery-image\">
                                <div class=\"item-overlay\">
                                    <span>
                                        <i class=\"fa-light fa-plus\"></i>  
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"gallery-wrapper\">
                            <img src=\"assets/images/course/15.png\" alt=\"gallery-image\">
                            <a href=\"assets/images/course/15.png\" class=\"gallery-image\">
                                <div class=\"item-overlay\">
                                    <span>
                                        <i class=\"fa-light fa-plus\"></i>  
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"gallery-wrapper\">
                            <img src=\"assets/images/course/16.png\" alt=\"gallery-image\">
                            <a href=\"assets/images/course/16.png\" class=\"gallery-image\">
                                <div class=\"item-overlay\">
                                    <span>
                                        <i class=\"fa-light fa-plus\"></i>  
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"gallery-wrapper\">
                            <img src=\"assets/images/course/17.png\" alt=\"gallery-image\">
                            <a href=\"assets/images/course/17.png\" class=\"gallery-image\">
                                <div class=\"item-overlay\">
                                    <span>
                                        <i class=\"fa-light fa-plus\"></i>  
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- gallery area end -->

    <!-- testimonials area start -->
    <section class=\"rts-testimonials-area v-2\">
        <div class=\"container\">
            <div class=\"section-title-area text-center\">
                <p class=\"pre-title justify-content-center\"><img src=\"assets/images/banner/title-img.svg\" alt=\"\">Testimonials</p>
                <h2 class=\"section-title\">What Parents Say About Us</h2>
                <p class=\"desc\">The success and happiness of our students are at the heart <br> of everything we do. But don't just take our word</p>
            </div>
            <div class=\"slider-inner\">
                <div class=\"swiper mySwiper-category-1 swiper-data\" data-swiper='{
                            \"spaceBetween\":30,
                            \"slidesPerView\":3,
                            \"loop\": true,
                            \"speed\": 1500,
                            \"navigation\":{
                                \"nextEl\":\".swiper-button-next3\",
                                \"prevEl\":\".swiper-button-prev3\"
                            },
                            \"autoplay\":{
                                \"delay\":\"4000\"
                            },
                            \"breakpoints\":{
                            \"0\":{
                                \"slidesPerView\":1,
                                \"spaceBetween\":30},
                            \"320\":{
                                \"slidesPerView\":1,
                                \"spaceBetween\":30},
                            \"480\":{
                                \"slidesPerView\":1,
                                \"spaceBetween\":30},
                            \"640\":{
                                \"slidesPerView\":1,
                                \"spaceBetween\":30},
                            \"840\":{
                                \"slidesPerView\":1,
                                \"spaceBetween\":30},
                            \"1140\":{
                                \"slidesPerView\":1,
                                \"spaceBetween\":30}
                            }
                        }'>
                    <div class=\"swiper-wrapper\">
                        <!-- single swiper style -->
                        <div class=\"swiper-slide\">
                            <div class=\"testimonials-wrapper\">
                                <div class=\"wrapper-inner\">
                                    <div class=\"content\">
                                        <div class=\"author-image mb--30\">
                                            <img src=\"assets/images/about/about-author.jpg\" width=\"72\" alt=\"\">
                                        </div>
                                        <h4 class=\"author\">David John</h4>
                                        <p class=\"desig\">Artist and Instructor</p>
                                        <p class=\"desc\">I would highly recommend Michael Richard to anyone interested the subject matter. It has provided me with invaluable knowledge & a newfound passion topic.</p>
                                        <ul class=\"star-rating-area\">
                                            <li><a href=\"#\"><i class=\"fa-sharp fa-solid fa-star\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fa-sharp fa-solid fa-star\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fa-sharp fa-solid fa-star\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fa-sharp fa-solid fa-star\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fa-light fa-star\"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class=\"testimonials-shape-image\">
                                        <div class=\"shape one\"><img src=\"assets/images/banner/shape/13.svg\" alt=\"shape_image\"></div>
                                        <div class=\"shape two\"><img src=\"assets/images/banner/shape/14.svg\" alt=\"shape_image\"></div>
                                        <div class=\"shape three\"><img src=\"assets/images/banner/shape/15.svg\" alt=\"shape_image\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single swiper style -->
                    </div>
                </div>
                <div class=\"swiper-btn swiper-button-next3\">
                    <div class=\"inner\">
                        <svg width=\"11\" height=\"20\" viewBox=\"0 0 11 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                            <path d=\"M1.6918 20C1.80148 20.0006 1.91019 19.9796 2.01173 19.9381C2.11326 19.8967 2.2056 19.8356 2.28347 19.7583L9.0918 12.95C9.47983 12.5629 9.78769 12.1032 9.99774 11.5969C10.2078 11.0907 10.3159 10.5481 10.3159 10C10.3159 9.45194 10.2078 8.90926 9.99774 8.40305C9.78769 7.89685 9.47983 7.43705 9.0918 7.05L2.28347 0.241678C2.20577 0.163979 2.11353 0.102345 2.01201 0.0602948C1.91049 0.0182446 1.80169 -0.00339842 1.6918 -0.00339842C1.58192 -0.00339842 1.47311 0.0182446 1.3716 0.0602948C1.27008 0.102345 1.17784 0.163979 1.10014 0.241678C1.02244 0.319376 0.960803 0.411618 0.918753 0.513136C0.876703 0.614655 0.85506 0.723461 0.85506 0.833344C0.85506 0.943226 0.876703 1.05203 0.918753 1.15355C0.960803 1.25507 1.02244 1.34731 1.10014 1.42501L7.90847 8.23333C8.37664 8.70209 8.6396 9.3375 8.6396 10C8.6396 10.6625 8.37664 11.2979 7.90847 11.7667L1.10014 18.575C1.02203 18.6525 0.960034 18.7446 0.917726 18.8462C0.875419 18.9477 0.853638 19.0566 0.853638 19.1667C0.853638 19.2767 0.875419 19.3856 0.917726 19.4871C0.960034 19.5887 1.02203 19.6809 1.10014 19.7583C1.178 19.8356 1.27035 19.8967 1.37188 19.9381C1.47341 19.9796 1.58213 20.0006 1.6918 20Z\" fill=\"#262626\" />
                        </svg>
                    </div>
                </div>
                <div class=\"swiper-btn swiper-button-prev3\">
                    <div class=\"inner\">
                        <svg width=\"11\" height=\"20\" viewBox=\"0 0 11 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                            <path d=\"M9.30869 20C9.19901 20.0006 9.09029 19.9796 8.98876 19.9381C8.88723 19.8966 8.79488 19.8355 8.71702 19.7583L1.90869 12.95C1.52066 12.5629 1.2128 12.1031 1.00275 11.5969C0.792694 11.0907 0.68457 10.548 0.68457 9.99998C0.68457 9.45192 0.792694 8.90924 1.00275 8.40303C1.2128 7.89683 1.52066 7.43703 1.90869 7.04998L8.71702 0.241658C8.79472 0.163959 8.88696 0.102325 8.98848 0.0602752C9.09 0.018225 9.1988 -0.00341797 9.30869 -0.00341797C9.41857 -0.00341797 9.52737 0.018225 9.62889 0.0602752C9.73041 0.102325 9.82265 0.163959 9.90035 0.241658C9.97805 0.319357 10.0397 0.411599 10.0817 0.513117C10.1238 0.614635 10.1454 0.723442 10.1454 0.833324C10.1454 0.943207 10.1238 1.05201 10.0817 1.15353C10.0397 1.25505 9.97805 1.34729 9.90035 1.42499L3.09202 8.23332C2.62385 8.70207 2.36088 9.33748 2.36088 9.99998C2.36088 10.6625 2.62385 11.2979 3.09202 11.7666L9.90035 18.575C9.97846 18.6524 10.0405 18.7446 10.0828 18.8462C10.1251 18.9477 10.1469 19.0566 10.1469 19.1666C10.1469 19.2766 10.1251 19.3856 10.0828 19.4871C10.0405 19.5887 9.97846 19.6808 9.90035 19.7583C9.82248 19.8355 9.73014 19.8966 9.62861 19.9381C9.52708 19.9796 9.41836 20.0006 9.30869 20Z\" fill=\"white\" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonials area end -->

    <!-- counterup area start -->
    <div class=\"rts-counter-up-area rts-section-gapBottom\">
        <div class=\"container\">
            <div class=\"counter-section-inner rts-shape-move\">
                <div class=\"counter-inner\">
                    <div class=\"counter-wrapper\">
                        <h3 class=\"title\"><span class=\"counter animated fadeInDownBig\">15</span>+</h3>
                        <span class=\"review\">Expert Teacher</span>
                    </div>
                    <div class=\"counter-wrapper\">
                        <h3 class=\"title\"><span class=\"counter animated fadeInDownBig\">244</span>+</h3>
                        <span class=\"review\">Completed Courses</span>
                    </div>
                    <div class=\"counter-wrapper\">
                        <h3 class=\"title\"><span class=\"counter animated fadeInDownBig\">455</span>+</h3>
                        <span class=\"review\">Students Learner</span>
                    </div>
                    <div class=\"counter-wrapper\">
                        <h3 class=\"title\"><span class=\"counter animated fadeInDownBig\">241</span>+</h3>
                        <span class=\"review\">Students Enrolled</span>
                    </div>
                </div>
                <div class=\"shape-image\">
                    <div class=\"shape one\" data-speed=\"0.04\" data-revert=\"true\"><img src=\"assets/images/banner/shape/19.svg\" alt=\"shape_image\"></div>
                    <div class=\"shape two\" data-speed=\"0.04\" data-revert=\"true\"><img src=\"assets/images/banner/shape/20.svg\" alt=\"shape_image\"></div>
                    <div class=\"shape three\" data-speed=\"0.04\"><img src=\"assets/images/banner/shape/21.svg\" alt=\"shape_image\"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- counterup area end -->


    <!-- footer call to action area start -->

    <!-- footer call to action area start -->
    <div class=\"rts-footer-area section-bg\">
        <div class=\"container\">
            <div class=\"footer-top\">
                <form action=\"#\">
                    <h3 class=\"form-title\">Don’t Miss Awesome Story From Our Alumni</h3>
                    <div class=\"form-inner\">
                        <input type=\"email\" name=\"Email\" placeholder=\"Enter Your mail\" required>
                        <button type=\"submit\" class=\"rts-btn btn-primary border-radius\">Subscribe Now</button>
                    </div>
                </form>
            </div>
            <div class=\"row ptb--65\">
                <div class=\"col-lg-12\">
                    <!-- footer main wrapper -->
                    <div class=\"footer-one-main-wrapper\">
                        <!-- single sized  footer  -->
                        <div class=\"footer-single-wized left-logo\">
                            <div class=\"head\">
                                <a href=\"#\">
                                    <img src=\"assets/images/logo/logo-1.png\" alt=\"logo\" loading=\"lazy\">
                                </a>
                            </div>
                            <div class=\"body\">
                                <p class=\"dsic\">
                                    We are passionate education dedicated to providing high-quality resources learners
                                    all backgrounds.
                                </p>
                                <ul class=\"wrapper-list\">
                                    <li><i class=\"fa-regular fa-location-dot\"></i>Yarra Park, Melbourne, Australia </li>
                                    <li><i class=\"fa-regular fa-phone\"></i><a href=\"tel:+4733378901\">+(61) 485-826-710</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- single sized  footer end -->
                        <!-- single sized  footer  -->
                        <div class=\"footer-single-wized\">
                            <div class=\"head\">
                                <h6 class=\"title\">About Us</h6>
                            </div>
                            <div class=\"body\">
                                <ul class=\"menu\">
                                    <li><a href=\"about.html\">About Us</a></li>
                                    <li><a href=\"team.html\">Teachers</a></li>
                                    <li><a href=\"team-details.html\">Teachers Info</a></li>
                                    <li><a href=\"zoom-meeting.html\">Event</a></li>
                                    <li><a href=\"pricing.html\">Pricing</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- single sized  footer end -->
                        <!-- single sized  footer  -->
                        <div class=\"footer-single-wized\">
                            <div class=\"head\">
                                <h6 class=\"title\">Our Course</h6>
                            </div>
                            <div class=\"body\">
                                <ul class=\"menu\">
                                    <li><a href=\"course.html\">Courses</a></li>
                                    <li><a href=\"blog.html\">Blog</a></li>
                                    <li><a href=\"program-details.html\">Program</a></li>
                                    <li><a href=\"contact.html\">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- single sized  footer end -->
                        <!-- single sized  footer  -->
                        <div class=\"footer-single-wized input-area\">
                            <div class=\"head\">
                                <h6 class=\"title\">Recent Post</h6>
                            </div>
                            <div class=\"body\">
                                <ul>
                                    <li class=\"post-area\">
                                        <div class=\"image\">
                                            <a href=\"#\">
                                                <img src=\"assets/images/blog/blog-07.jpeg\" width=\"80\" alt=\"\">
                                            </a>
                                        </div>
                                        <div class=\"content\">
                                            <p class=\"date\">October 29, 2023</p>
                                            <h6 class=\"post-title\"><a href=\"#\">Avoid These 4 Common When Managing Remote Teams</a></h6>
                                        </div>
                                    </li>
                                    <li class=\"post-area\">
                                        <div class=\"image\">
                                            <a href=\"#\">
                                                <img src=\"assets/images/blog/blog-08.jpeg\" width=\"80\" alt=\"\">
                                            </a>
                                        </div>
                                        <div class=\"content\">
                                            <p class=\"date\">October 29, 2023</p>
                                            <h6 class=\"post-title\"><a href=\"#\">How To Draw Realistic Lips In 7 Simple Steps</a></h6>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- single sized  footer end -->
                    </div>
                    <!-- footer main wrapper end -->
                </div>
            </div>
        </div>
        <div class=\"copyright-area-one-border\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"copyright-area-one\">
                            <p>Copyright © 2024 All Rights Reserved by Novalearn</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer call to action area end -->
    <!-- footer call to action area end -->

    <!-- Modal -->
   <div class=\"modal login-pupup-modal fade\" id=\"exampleModal-login\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Hi, Welcome back!</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                {% if error %}
                    <div class=\"alert alert-danger\">
                        {{ error.messageKey|trans(error.messageData, 'security') }}
                    </div>
                {% endif %}

                <form method=\"post\" action=\"{{ path('app_home') }}\">
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

                    <label for=\"email\">Email :</label>
                    <input type=\"email\" name=\"email\" id=\"email\" placeholder=\"Email Address\" required value=\"{{ last_username|default('') }}\">

                    <label for=\"password\">Mot de passe :</label>
                    <input type=\"password\" name=\"password\" id=\"password\" placeholder=\"Password\" required>

                    <div class=\"d-flex mb--20 align-items-center\">
                        <input type=\"checkbox\" id=\"examplecheck-modal\">
                        <label for=\"examplecheck-modal\">I agree to the terms of use and privacy policy.</label>
                    </div>

                    <button type=\"submit\" class=\"rts-btn btn-primary\">Sign In</button>

                    <p class=\"dont-acc mt--20\">Don't Have an Account? 
                        <a href=\"{{ path('app_signup') }}\">Inscription Élève</a> / 
                        <a href=\"{{ path('app_signupPar') }}\">Inscription Parent</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>




    <!-- header style two -->
    <div id=\"side-bar\" class=\"side-bar header-two\">
        <button class=\"close-icon-menu\"><i class=\"far fa-times\"></i></button>
        <!-- inner menu area desktop start -->
        <div class=\"inner-main-wrapper-desk\">
            <div class=\"inner-content\">
                <h4 class=\"title\">We Build Building and Great Constructive Homes.</h4>
                <p class=\"disc\">
                    We successfully cope with tasks of varying complexity, provide long-term guarantees and regularly master new technologies.
                </p>
                <div class=\"footer\">
                    <h4 class=\"title\">Got a project in mind?</h4>
                    <a href=\"contact.html\" class=\"rts-btn btn-primary\">Let's talk</a>
                </div>
            </div>
        </div>
        <!-- mobile menu area start -->
        <div class=\"mobile-menu-main\">
            <nav class=\"nav-main mainmenu-nav mt--30\">
                <ul class=\"mainmenu metismenu\" id=\"mobile-menu-active\">
                    <li class=\"has-droupdown\">
                        <a href=\"#\" class=\"main\">Home</a>
                        <ul class=\"submenu mm-collapse\">
                            <li><a class=\"mobile-menu-link\" href=\"index.html\">Home 01</a></li>
                            <li><a class=\"mobile-menu-link\" href=\"index-two.html\">Home 02</a></li>
                            <li><a class=\"mobile-menu-link\" href=\"index-three.html\">Home 03</a></li>
                            <li><a class=\"mobile-menu-link\" href=\"index-four.html\">home 04</a></li>
                        </ul>
                    </li>
                    <li class=\"has-droupdown\">
                        <a href=\"#\" class=\"main\">Pages</a>
                        <ul class=\"submenu mm-collapse\">
                            <li><a class=\"mobile-menu-link\" href=\"about.html\">About Us</a></li>
                            <li><a class=\"mobile-menu-link\" href=\"team.html\">Team</a></li>
                            <li><a class=\"mobile-menu-link\" href=\"team-details.html\">Team Details</a></li>
                            <li><a class=\"mobile-menu-link\" href=\"event.html\">Event</a></li>
                            <li><a class=\"mobile-menu-link\" href=\"event-details.html\">Event Details</a></li>
                            <li><a class=\"mobile-menu-link\" href=\"program-details.html\">Program Details</a></li>
                            <li><a class=\"mobile-menu-link\" href=\"pricing.html\">Pricing</a></li>
                            <li><a class=\"mobile-menu-link\" href=\"pricing-two.html\">Pricing Two</a></li>
                        </ul>
                    </li>
                    <li class=\"has-droupdown\">
                        <a href=\"#\" class=\"main\">Class</a>
                        <ul class=\"submenu mm-collapse\">
                            <li><a class=\"mobile-menu-link\" href=\"course.html\">Courses</a></li>
                            <li><a class=\"mobile-menu-link\" href=\"course-details.html\">Course Details</a></li>
                        </ul>
                    </li>
                    <li class=\"has-droupdown\">
                        <a href=\"#\" class=\"main\">Blog</a>
                        <ul class=\"submenu mm-collapse\">
                            <li><a class=\"mobile-menu-link\" href=\"blog.html\">Blog</a></li>
                            <li><a class=\"mobile-menu-link\" href=\"blog-grid.html\">Blog Grid</a></li>
                            <li><a class=\"mobile-menu-link\" href=\"blog-list.html\">Blog List</a></li>
                            <li><a class=\"mobile-menu-link\" href=\"blog-right-sidebar.html\">Blog Right Sidebar</a></li>
                            <li><a class=\"mobile-menu-link\" href=\"blog-left-sidebar.html\">Blog Left Sidebar</a></li>
                            <li><a class=\"mobile-menu-link\" href=\"blog-details.html\">Blog Details</a></li>
                        </ul>
                    </li>
                    <li class=\"menu-item\">
                        <a href=\"contact.html\" class=\"main\">Contact</a>
                    </li>
                </ul>
            </nav>

            <div class=\"buttons-area\">
                <a href=\"#\" class=\"rts-btn btn-border\">Log In</a>
                <a href=\"#\" class=\"rts-btn btn-primary\">Sign Up</a>
            </div>

            <div class=\"rts-social-style-one pl--20 mt--50\">
                <ul>
                    <li>
                        <a href=\"#\">
                            <i class=\"fa-brands fa-facebook-f\"></i>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <i class=\"fa-brands fa-twitter\"></i>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <i class=\"fa-brands fa-youtube\"></i>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <i class=\"fa-brands fa-linkedin-in\"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- mobile menu area end -->
    </div>
    <!-- header style two End -->

    <div id=\"preloader\" class=\"preloader\">
        <div class=\"animation-preloader\">
            <div class=\"txt-loading\">
                <span data-text-preloader=\"N\" class=\"letters-loading first\">
                        N
                    </span>
                <span data-text-preloader=\"O\" class=\"letters-loading first\">
                        O
                    </span>
                <span data-text-preloader=\"V\" class=\"letters-loading first\">
                    V
                    </span>
                <span data-text-preloader=\"A\" class=\"letters-loading first\">
                    A
                    </span>
                <span data-text-preloader=\"L\" class=\"letters-loading first\">
                        L
                    </span>
                <span data-text-preloader=\"E\" class=\"letters-loading\">
                        E
                    </span>
                <span data-text-preloader=\"A\" class=\"letters-loading\">
                        A
                    </span>
                <span data-text-preloader=\"R\" class=\"letters-loading\">
                    R
                    </span>
                <span data-text-preloader=\"N\" class=\"letters-loading\">
                    N
                    </span>
            </div>
            <p class=\"text-center\">Loading</p>
        </div>
        <div class=\"loader\">
            <div class=\"row\">
                <div class=\"col-3 loader-section section-left\">
                    <div class=\"bg\"></div>
                </div>
                <div class=\"col-3 loader-section section-left\">
                    <div class=\"bg\"></div>
                </div>
                <div class=\"col-3 loader-section section-right\">
                    <div class=\"bg\"></div>
                </div>
                <div class=\"col-3 loader-section section-right\">
                    <div class=\"bg\"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- rts backto top start -->
    <div class=\"progress-wrap\">
        <svg class=\"progress-circle svg-content\" width=\"100%\" height=\"100%\" viewBox=\"-1 -1 102 102\">
            <path d=\"M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98\" style=\"transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;\"></path>
        </svg>
    </div>
    <!-- rts backto top end -->

    <!-- offcanvase search -->
    <div class=\"search-input-area\">
        <div class=\"container\">
            <div class=\"search-input-inner\">
                <div class=\"input-div\">
                    <input class=\"search-input autocomplete\" type=\"text\" placeholder=\"Search by keyword or #\">
                    <button><i class=\"far fa-search\"></i></button>
                </div>
            </div>
        </div>
        <div id=\"close\" class=\"search-close-icon\"><i class=\"far fa-times\"></i></div>
    </div>
    <!-- offcanvase search -->
    <div id=\"anywhere-home\" class=\"\">
    </div>

    <!-- all scripts -->
    <!-- jquery min js -->
    <script src=\"assets/js/vendor/jquery.min.js\"></script>
    <!-- jquery ui js -->
    <script src=\"assets/js/vendor/jquery-ui.js\"></script>
    <!-- metismenu js -->
    <script src=\"assets/js/vendor/metismenu.js\"></script>
    <!-- magnific popup js-->
    <script src=\"assets/js/vendor/magnifying-popup.js\"></script>
    <!-- swiper JS 10.2.0 -->
    <script src=\"assets/js/plugins/swiper.js\"></script>
    <!-- counterup js -->
    <script src=\"assets/js/plugins/counterup.js\"></script>
    <!-- waypoint js -->
    <script src=\"assets/js/vendor/waypoint.js\"></script>
    <!-- wow js -->
    <script src=\"assets/js/vendor/waw.js\"></script>
    <!-- isotop mesonary -->
    <script src=\"assets/js/plugins/isotop.js\"></script>
    <!-- jquery imageloaded -->
    <script src=\"assets/js/plugins/imagesloaded.pkgd.min.js\"></script>
    <!-- resize sensor js -->
    <script src=\"assets/js/plugins/resizer-sensor.js\"></script>
    <!-- sticky sidebar -->
    <script src=\"assets/js/plugins/sticky-sidebar.js\"></script>
    <!-- gsap twinmax js -->
    <script src=\"assets/js/plugins/twinmax.js\"></script>
    <!-- chroma js -->
    <script src=\"assets/js/vendor/chroma.min.js\"></script>
    <!-- bootstrap 5.0.2 -->
    <script src=\"assets/js/plugins/bootstrap.min.js\"></script>
    <!-- dymanic Contact Form -->
    <script src=\"assets/js/plugins/contact.form.js\"></script>
    <!-- calender js -->
    <script src=\"assets/js/plugins/calender.js\"></script>
    <!-- main Js -->
    <script src=\"assets/js/main.js\"></script>


</body>

</html>", "base.html.twig", "C:\\Users\\yassi\\Downloads\\Novalearn-master\\Novalearn-master\\templates\\base.html.twig");
    }
}
