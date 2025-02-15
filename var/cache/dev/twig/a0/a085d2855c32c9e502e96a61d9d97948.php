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

/* detailscoursscience.html.twig */
class __TwigTemplate_0ba45685b35bfd9346cd7e748d3c3b16 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "detailscoursscience.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>StudyKids LMS & University HTML Template </title>
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"assets/images/fav.png\">
    <!-- fontawesome 6.4.2 -->
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
</head>

<body>

    <!-- header style one -->
    <!-- header style one -->
    <header class=\"header-one header--sticky header-default\">
        <div class=\"header-top-one-wrapper\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"header-top-one\">
                            <div class=\"left-information\">
                                <a href=\"mailto:someone@example.com\" class=\"email\"><i class=\"fa-light fa-envelope\"></i>info@studyhub.com</a>
                                <a href=\"tel:+4733378901\" class=\"email\"><i class=\"fa-light fa-phone\"></i>+61 012 012 445</a>
                            </div>
                            <div class=\"right-information\">
                                <ul class=\"social-area\">
                                    <li>
                                        <a href=\"#\">
                                            <svg width=\"16\" height=\"16\" viewBox=\"0 0 16 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                                <path d=\"M14.6688 0.5H1.33125C1.11129 0.501635 0.900811 0.589738 0.745275 0.745275C0.589738 0.900811 0.501635 1.11129 0.5 1.33125V14.6688C0.501635 14.8887 0.589738 15.0992 0.745275 15.2547C0.900811 15.4103 1.11129 15.4984 1.33125 15.5H8.5125V9.7H6.5625V7.43125H8.5125V5.7625C8.5125 3.825 9.69375 2.76875 11.4312 2.76875C12.0125 2.76875 12.5938 2.76875 13.175 2.85625V4.875H11.9813C11.0375 4.875 10.8562 5.325 10.8562 5.98125V7.425H13.1063L12.8125 9.69375H10.8562V15.5H14.6688C14.8887 15.4984 15.0992 15.4103 15.2547 15.2547C15.4103 15.0992 15.4984 14.8887 15.5 14.6688V1.33125C15.4984 1.11129 15.4103 0.900811 15.2547 0.745275C15.0992 0.589738 14.8887 0.501635 14.6688 0.5V0.5Z\" fill=\"white\" />
                                                <path d=\"M14.6688 0.5H1.33125C1.11129 0.501635 0.900811 0.589738 0.745275 0.745275C0.589738 0.900811 0.501635 1.11129 0.5 1.33125V14.6688C0.501635 14.8887 0.589738 15.0992 0.745275 15.2547C0.900811 15.4103 1.11129 15.4984 1.33125 15.5H8.5125V9.7H6.5625V7.43125H8.5125V5.7625C8.5125 3.825 9.69375 2.76875 11.4312 2.76875C12.0125 2.76875 12.5938 2.76875 13.175 2.85625V4.875H11.9813C11.0375 4.875 10.8562 5.325 10.8562 5.98125V7.425H13.1063L12.8125 9.69375H10.8562V15.5H14.6688C14.8887 15.4984 15.0992 15.4103 15.2547 15.2547C15.4103 15.0992 15.4984 14.8887 15.5 14.6688V1.33125C15.4984 1.11129 15.4103 0.900811 15.2547 0.745275C15.0992 0.589738 14.8887 0.501635 14.6688 0.5V0.5Z\" fill=\"white\" />
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <svg width=\"16\" height=\"16\" viewBox=\"0 0 16 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                                <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M11.0306 1.89513C10.2398 1.859 10.0026 1.85137 8 1.85137V1.85131C5.99744 1.85131 5.76019 1.859 4.96938 1.89506C4.49378 1.90072 4.02269 1.98808 3.57669 2.15331C3.25324 2.27812 2.9595 2.46925 2.71436 2.7144C2.46922 2.95955 2.27811 3.2533 2.15331 3.57675C1.98808 4.02276 1.90072 4.49384 1.89506 4.96944C1.85894 5.76025 1.85131 5.9975 1.85131 8.00006C1.85131 10.0026 1.859 10.2399 1.89506 11.0307C1.90072 11.5063 1.98808 11.9774 2.15331 12.4234C2.27812 12.7468 2.46923 13.0405 2.71437 13.2857C2.95951 13.5308 3.25325 13.7219 3.57669 13.8467C4.02269 14.012 4.49378 14.0993 4.96938 14.105C5.76013 14.1411 5.99725 14.1487 8 14.1487C10.0028 14.1487 10.2399 14.1411 11.0306 14.105C11.5062 14.0993 11.9773 14.012 12.4233 13.8467C12.7467 13.7219 13.0405 13.5308 13.2856 13.2857C13.5308 13.0405 13.7219 12.7468 13.8467 12.4234C14.0119 11.9774 14.0993 11.5063 14.1049 11.0307C14.1411 10.2399 14.1487 10.0026 14.1487 8.00006C14.1487 5.9975 14.141 5.76025 14.1049 4.96944C14.0993 4.49384 14.0119 4.02276 13.8467 3.57675C13.7219 3.25331 13.5308 2.95958 13.2856 2.71444C13.0405 2.4693 12.7467 2.27818 12.4233 2.15338C11.9773 1.98814 11.5062 1.90079 11.0306 1.89513ZM4.90775 0.545125C5.70769 0.508625 5.96312 0.5 8 0.5C10.0369 0.5 10.2923 0.508625 11.0919 0.545438C11.7141 0.557899 12.3297 0.675778 12.9125 0.894062C13.4108 1.08672 13.8633 1.38135 14.2411 1.75907C14.6188 2.13679 14.9135 2.58927 15.1063 3.0875C15.3245 3.67018 15.4424 4.28566 15.4549 4.90775C15.4914 5.70769 15.5 5.96312 15.5 8C15.5 10.0369 15.4914 10.2923 15.4552 11.0919C15.4427 11.7141 15.3248 12.3297 15.1066 12.9125C14.9139 13.4108 14.6192 13.8633 14.2414 14.2411C13.8636 14.6189 13.4111 14.9136 12.9128 15.1063C12.33 15.3245 11.7144 15.4424 11.0922 15.4549C10.2923 15.4914 10.0369 15.5 8 15.5C5.96312 15.5 5.70769 15.4914 4.90806 15.4552C4.28586 15.4427 3.67028 15.3249 3.0875 15.1066C2.58921 14.9139 2.13667 14.6192 1.7589 14.2414C1.38112 13.8636 1.08645 13.4111 0.89375 12.9128C0.675466 12.33 0.557586 11.7144 0.545125 11.0922C0.508625 10.2923 0.5 10.0369 0.5 8C0.5 5.96312 0.508625 5.70769 0.545125 4.90806C0.557579 4.28586 0.675459 3.67028 0.89375 3.0875C1.08645 2.58921 1.38112 2.13667 1.7589 1.7589C2.13667 1.38112 2.58921 1.08645 3.0875 0.89375C3.67018 0.675493 4.28566 0.557614 4.90775 0.545125ZM12.0035 4.89644C12.5005 4.89644 12.9035 4.49349 12.9035 3.99644C12.9035 3.49938 12.5005 3.09644 12.0035 3.09644C11.5064 3.09644 11.1035 3.49938 11.1035 3.99644C11.1035 4.49349 11.5064 4.89644 12.0035 4.89644ZM7.99998 4.14868C7.23825 4.14868 6.49363 4.37456 5.86027 4.79776C5.22692 5.22095 4.73328 5.82245 4.44178 6.5262C4.15027 7.22995 4.074 8.00433 4.22261 8.75142C4.37122 9.49852 4.73802 10.1848 5.27665 10.7234C5.81527 11.262 6.50152 11.6288 7.24862 11.7774C7.99571 11.926 8.77009 11.8498 9.47384 11.5583C10.1776 11.2668 10.7791 10.7731 11.2023 10.1398C11.6255 9.50641 11.8514 8.76179 11.8514 8.00006C11.8514 6.97861 11.4456 5.999 10.7233 5.27672C10.001 4.55445 9.02143 4.14868 7.99998 4.14868ZM7.99998 10.5001C7.50553 10.5001 7.02218 10.3534 6.61106 10.0787C6.19993 9.80403 5.8795 9.41358 5.69028 8.95677C5.50106 8.49995 5.45156 7.99728 5.54802 7.51233C5.64448 7.02738 5.88258 6.58192 6.23221 6.23229C6.58185 5.88266 7.0273 5.64456 7.51226 5.54809C7.99721 5.45163 8.49988 5.50114 8.95669 5.69036C9.41351 5.87958 9.80395 6.20001 10.0787 6.61113C10.3534 7.02225 10.5 7.5056 10.5 8.00006C10.5 8.6631 10.2366 9.29898 9.76775 9.76782C9.29891 10.2367 8.66302 10.5001 7.99998 10.5001Z\" fill=\"white\" />
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <svg width=\"16\" height=\"16\" viewBox=\"0 0 16 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                                <path d=\"M14.3812 0.50002H1.61875C1.32795 0.498272 1.04803 0.610457 0.838927 0.812551C0.629823 1.01465 0.508163 1.29058 0.5 1.58127V14.375C0.506563 14.6662 0.627723 14.9431 0.837178 15.1455C1.04663 15.348 1.32748 15.4596 1.61875 15.4563H14.3812C14.6725 15.4596 14.9534 15.348 15.1628 15.1455C15.3723 14.9431 15.4934 14.6662 15.5 14.375V1.58127C15.4918 1.29058 15.3702 1.01465 15.1611 0.812551C14.952 0.610457 14.672 0.498272 14.3812 0.50002V0.50002ZM4.94375 13.2563H2.74375V6.12502H4.94375V13.2563ZM3.86875 5.13127C3.53097 5.13137 3.20655 4.99936 2.9648 4.76345C2.72306 4.52755 2.58316 4.20645 2.575 3.86877C2.56888 3.69723 2.59816 3.52626 2.66102 3.36653C2.72387 3.2068 2.81895 3.06172 2.94032 2.94034C3.0617 2.81897 3.20678 2.72389 3.36651 2.66104C3.52624 2.59818 3.69721 2.5689 3.86875 2.57502C4.19553 2.59777 4.50151 2.74364 4.72494 2.98317C4.94838 3.2227 5.07263 3.53808 5.07263 3.86565C5.07263 4.19321 4.94838 4.50859 4.72494 4.74812C4.50151 4.98765 4.19553 5.13352 3.86875 5.15627V5.13127ZM13.3 13.2125H11.125V9.72502C11.125 8.89377 11.125 7.81252 9.9625 7.81252C8.8 7.81252 8.625 8.72502 8.625 9.64377V13.175H6.4V6.12502H8.475V7.06252H8.51875C8.73143 6.69316 9.04155 6.38937 9.41522 6.18435C9.78888 5.97933 10.2117 5.88097 10.6375 5.90002C12.8812 5.90002 13.3 7.40002 13.3 9.30627V13.2125Z\" fill=\"#FFD335\" />
                                                <path d=\"M14.3812 0.50002H1.61875C1.32795 0.498272 1.04803 0.610457 0.838927 0.812551C0.629823 1.01465 0.508163 1.29058 0.5 1.58127V14.375C0.506563 14.6662 0.627723 14.9431 0.837178 15.1455C1.04663 15.348 1.32748 15.4596 1.61875 15.4563H14.3812C14.6725 15.4596 14.9534 15.348 15.1628 15.1455C15.3723 14.9431 15.4934 14.6662 15.5 14.375V1.58127C15.4918 1.29058 15.3702 1.01465 15.1611 0.812551C14.952 0.610457 14.672 0.498272 14.3812 0.50002V0.50002ZM4.94375 13.2563H2.74375V6.12502H4.94375V13.2563ZM3.86875 5.13127C3.53097 5.13137 3.20655 4.99936 2.9648 4.76345C2.72306 4.52755 2.58316 4.20645 2.575 3.86877C2.56888 3.69723 2.59816 3.52626 2.66102 3.36653C2.72387 3.2068 2.81895 3.06172 2.94032 2.94034C3.0617 2.81897 3.20678 2.72389 3.36651 2.66104C3.52624 2.59818 3.69721 2.5689 3.86875 2.57502C4.19553 2.59777 4.50151 2.74364 4.72494 2.98317C4.94838 3.2227 5.07263 3.53808 5.07263 3.86565C5.07263 4.19321 4.94838 4.50859 4.72494 4.74812C4.50151 4.98765 4.19553 5.13352 3.86875 5.15627V5.13127ZM13.3 13.2125H11.125V9.72502C11.125 8.89377 11.125 7.81252 9.9625 7.81252C8.8 7.81252 8.625 8.72502 8.625 9.64377V13.175H6.4V6.12502H8.475V7.06252H8.51875C8.73143 6.69316 9.04155 6.38937 9.41522 6.18435C9.78888 5.97933 10.2117 5.88097 10.6375 5.90002C12.8812 5.90002 13.3 7.40002 13.3 9.30627V13.2125Z\" fill=\"white\" />
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <svg width=\"18\" height=\"18\" viewBox=\"0 0 18 18\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                                <path d=\"M9 0.25C6.9714 0.263815 5.01064 0.982071 3.45313 2.2819C1.89562 3.58172 0.838154 5.38235 0.461624 7.37574C0.085095 9.36913 0.412903 11.4314 1.38897 13.2098C2.36504 14.9882 3.92871 16.3722 5.8125 17.125C5.68589 16.2965 5.68589 15.4535 5.8125 14.625L6.84375 10.25C6.68055 9.85378 6.59974 9.42847 6.60625 9C6.60625 7.7875 7.3125 6.875 8.1875 6.875C8.34601 6.87262 8.50317 6.90452 8.6482 6.96853C8.79323 7.03255 8.92272 7.12715 9.02778 7.24587C9.13284 7.36458 9.21101 7.50461 9.25691 7.65635C9.30282 7.80808 9.31538 7.96795 9.29375 8.125C9.29375 8.875 8.81875 10 8.56875 11.0375C8.51494 11.231 8.50854 11.4346 8.5501 11.6311C8.59165 11.8275 8.67993 12.0111 8.80747 12.1662C8.93501 12.3214 9.09805 12.4435 9.28278 12.5223C9.46752 12.601 9.66851 12.6341 9.86875 12.6188C11.4187 12.6188 12.6187 10.975 12.6187 8.6125C12.6343 8.13243 12.5497 7.65438 12.3702 7.20885C12.1907 6.76331 11.9203 6.36009 11.5763 6.02488C11.2323 5.68968 10.8222 5.42987 10.3721 5.26201C9.92209 5.09416 9.442 5.02195 8.9625 5.05C8.45056 5.02801 7.93948 5.11013 7.4602 5.29139C6.98092 5.47264 6.5434 5.74927 6.17412 6.10452C5.80485 6.45977 5.5115 6.88626 5.31184 7.35817C5.11217 7.83008 5.01033 8.33759 5.0125 8.85C5.00555 9.56384 5.22429 10.2616 5.6375 10.8438C5.66754 10.8771 5.68895 10.9174 5.69984 10.961C5.71074 11.0046 5.71079 11.0501 5.7 11.0938C5.63125 11.3688 5.48125 11.9688 5.45625 12.0875C5.43125 12.2063 5.325 12.2812 5.1625 12.2062C4.06875 11.6937 3.3875 10.1 3.3875 8.8125C3.3875 6.05625 5.39375 3.51875 9.16875 3.51875C12.2 3.51875 14.5625 5.68125 14.5625 8.575C14.5625 11.5875 12.6875 14.0125 10.0187 14.0125C9.62751 14.0261 9.23907 13.9418 8.8887 13.7671C8.53834 13.5925 8.23715 13.3331 8.0125 13.0125L7.46875 15.0938C7.20809 15.9026 6.84247 16.6738 6.38125 17.3875C7.23111 17.6387 8.11386 17.7609 9 17.75C11.3206 17.75 13.5462 16.8281 15.1872 15.1872C16.8281 13.5462 17.75 11.3206 17.75 9C17.75 6.67936 16.8281 4.45376 15.1872 2.81282C13.5462 1.17187 11.3206 0.25 9 0.25\" fill=\"#FFD335\" />
                                                <path d=\"M9 0.25C6.9714 0.263815 5.01064 0.982071 3.45313 2.2819C1.89562 3.58172 0.838154 5.38235 0.461624 7.37574C0.085095 9.36913 0.412903 11.4314 1.38897 13.2098C2.36504 14.9882 3.92871 16.3722 5.8125 17.125C5.68589 16.2965 5.68589 15.4535 5.8125 14.625L6.84375 10.25C6.68055 9.85378 6.59974 9.42847 6.60625 9C6.60625 7.7875 7.3125 6.875 8.1875 6.875C8.34601 6.87262 8.50317 6.90452 8.6482 6.96853C8.79323 7.03255 8.92272 7.12715 9.02778 7.24587C9.13284 7.36458 9.21101 7.50461 9.25691 7.65635C9.30282 7.80808 9.31538 7.96795 9.29375 8.125C9.29375 8.875 8.81875 10 8.56875 11.0375C8.51494 11.231 8.50854 11.4346 8.5501 11.6311C8.59165 11.8275 8.67993 12.0111 8.80747 12.1662C8.93501 12.3214 9.09805 12.4435 9.28278 12.5223C9.46752 12.601 9.66851 12.6341 9.86875 12.6188C11.4187 12.6188 12.6187 10.975 12.6187 8.6125C12.6343 8.13243 12.5497 7.65438 12.3702 7.20885C12.1907 6.76331 11.9203 6.36009 11.5763 6.02488C11.2323 5.68968 10.8222 5.42987 10.3721 5.26201C9.92209 5.09416 9.442 5.02195 8.9625 5.05C8.45056 5.02801 7.93948 5.11013 7.4602 5.29139C6.98092 5.47264 6.5434 5.74927 6.17412 6.10452C5.80485 6.45977 5.5115 6.88626 5.31184 7.35817C5.11217 7.83008 5.01033 8.33759 5.0125 8.85C5.00555 9.56384 5.22429 10.2616 5.6375 10.8438C5.66754 10.8771 5.68895 10.9174 5.69984 10.961C5.71074 11.0046 5.71079 11.0501 5.7 11.0938C5.63125 11.3688 5.48125 11.9688 5.45625 12.0875C5.43125 12.2063 5.325 12.2812 5.1625 12.2062C4.06875 11.6937 3.3875 10.1 3.3875 8.8125C3.3875 6.05625 5.39375 3.51875 9.16875 3.51875C12.2 3.51875 14.5625 5.68125 14.5625 8.575C14.5625 11.5875 12.6875 14.0125 10.0187 14.0125C9.62751 14.0261 9.23907 13.9418 8.8887 13.7671C8.53834 13.5925 8.23715 13.3331 8.0125 13.0125L7.46875 15.0938C7.20809 15.9026 6.84247 16.6738 6.38125 17.3875C7.23111 17.6387 8.11386 17.7609 9 17.75C11.3206 17.75 13.5462 16.8281 15.1872 15.1872C16.8281 13.5462 17.75 11.3206 17.75 9C17.75 6.67936 16.8281 4.45376 15.1872 2.81282C13.5462 1.17187 11.3206 0.25 9 0.25\" fill=\"white\" />
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <svg width=\"18\" height=\"14\" viewBox=\"0 0 18 14\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                                <path d=\"M17.3817 2.7875C17.2821 2.41753 17.0871 2.0802 16.8162 1.80927C16.5453 1.53835 16.2079 1.34334 15.838 1.24375C14.4755 0.875 9.00047 0.875 9.00047 0.875C9.00047 0.875 3.52547 0.875 2.16297 1.24375C1.79299 1.34334 1.45567 1.53835 1.18474 1.80927C0.913819 2.0802 0.718806 2.41753 0.61922 2.7875C0.364811 4.17704 0.241353 5.58739 0.25047 7C0.241353 8.41261 0.364811 9.82296 0.61922 11.2125C0.718806 11.5825 0.913819 11.9198 1.18474 12.1907C1.45567 12.4617 1.79299 12.6567 2.16297 12.7563C3.52547 13.125 9.00047 13.125 9.00047 13.125C9.00047 13.125 14.4755 13.125 15.838 12.7563C16.2079 12.6567 16.5453 12.4617 16.8162 12.1907C17.0871 11.9198 17.2821 11.5825 17.3817 11.2125C17.6361 9.82296 17.7596 8.41261 17.7505 7C17.7596 5.58739 17.6361 4.17704 17.3817 2.7875V2.7875ZM7.25047 9.625V4.375L11.7942 7L7.25047 9.625Z\" fill=\"#FFD335\" />
                                                <path d=\"M17.3817 2.7875C17.2821 2.41753 17.0871 2.0802 16.8162 1.80927C16.5453 1.53835 16.2079 1.34334 15.838 1.24375C14.4755 0.875 9.00047 0.875 9.00047 0.875C9.00047 0.875 3.52547 0.875 2.16297 1.24375C1.79299 1.34334 1.45567 1.53835 1.18474 1.80927C0.913819 2.0802 0.718806 2.41753 0.61922 2.7875C0.364811 4.17704 0.241353 5.58739 0.25047 7C0.241353 8.41261 0.364811 9.82296 0.61922 11.2125C0.718806 11.5825 0.913819 11.9198 1.18474 12.1907C1.45567 12.4617 1.79299 12.6567 2.16297 12.7563C3.52547 13.125 9.00047 13.125 9.00047 13.125C9.00047 13.125 14.4755 13.125 15.838 12.7563C16.2079 12.6567 16.5453 12.4617 16.8162 12.1907C17.0871 11.9198 17.2821 11.5825 17.3817 11.2125C17.6361 9.82296 17.7596 8.41261 17.7505 7C17.7596 5.58739 17.6361 4.17704 17.3817 2.7875V2.7875ZM7.25047 9.625V4.375L11.7942 7L7.25047 9.625Z\" fill=\"white\" />
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"header-main\">
            <div class=\"container\">
                <div class=\"header-one-wrapper\">
                    <div class=\"left-side-header\">
                        <a href=\"index.html\" class=\"logo-area\">
                            <img src=\"assets/images/logo/logo-1.png\" alt=\"logo\">
                        </a>
                    </div>

                    <div class=\"main-nav-one\">
                        <nav>
                            <ul>
                                <li class=\"has-dropdown\" style=\"position: static;\">
                                    <a class=\"nav-link\" href=\"#\">Home</a>

                                    <ul class=\"submenu\">
                                        <li>
                           <a href=\"";
        // line 104
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Home</a>
                                        </li>
                                        
                                    </ul>
                                </li>
                                <li class=\"has-dropdown\">
                                    <a class=\"nav-link\" href=\"#\">Pages</a>
                                    <ul class=\"submenu\">
                                        <li><a href=\"about.html\">About Us</a></li>
                                        <li><a href=\"team.html\">Team</a></li>
                                        <li><a href=\"team-details.html\">Team Details</a></li>
                                        <li><a href=\"event.html\">Event</a></li>
                                        <li><a href=\"event-details.html\">Event Details</a></li>
                                        <li><a href=\"program-details.html\">Program Details</a></li>
                                        <li><a href=\"pricing.html\">Pricing</a></li>
                                        <li><a href=\"pricing-two.html\">Pricing Two</a></li>
                                    </ul>
                                </li>
                                <li class=\"has-dropdown\">
                                    <a class=\"nav-link\" href=\"#\">Classes</a>
                                    <ul class=\"submenu\">
                                        <li><a href=\"";
        // line 125
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cours");
        yield "\">Courses</a></li>
                                        <li><a href=\"course-details.html\">Détails des cours</a></li>
                                    </ul>
                                </li>
                                <li class=\"has-dropdown\">
                                    <a class=\"nav-link\" href=\"#\">Blog</a>
                                    <ul class=\"submenu\">
                                        <li><a href=\"blog.html\">Blog</a></li>
                                        <li><a href=\"blog-grid.html\">Blog Grid</a></li>
                                        <li><a href=\"blog-list.html\">Blog List</a></li>
                                        <li><a href=\"blog-right-sidebar.html\">Blog Right Sidebar</a></li>
                                        <li><a href=\"blog-left-sidebar.html\">Blog Left Sidebar</a></li>
                                        <li><a href=\"blog-details.html\">Blog Details</a></li>
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
                            <a href=\"registration.html\" class=\"rts-btn btn-primary\">View More</a>
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
    </header>
    <!-- header style end -->
    <!-- header style end -->

    <!-- Bread-Crumb style -->

    <!-- bread crumb area -->
    <div class=\"rts-breadcrumb-area rts-section-gap bg_image\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"breadcrumb-main-wrapper\">
                        <div class=\"pagination-wrapper\">
                            <a href=\"index.html\">Home</a>
                            <i class=\"fa-regular fa-chevron-right\"></i>
                            <a class=\"active\" href=\"course.html\">Détails des cours</a>
                        </div>
                        <!-- breadcrumb pagination area -->
                        <h2 class=\"title\">Détails des cours</h2>
                        <!-- breadcrumb pagination area end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bread crumb area end -->

    <!-- Bread-Crumb style End -->

    <!-- course area start -->
    <div class=\"rts-course-details-area rts-section-gap rts-shape-move\">
        <div class=\"container\">
            <div class=\"row g-5 sticky-column-wrap\">
                <div class=\"col-lg-7\">
                    <div class=\"left-side-content\">
                        <div class=\"video-area\">
                            <div class=\"image\">
                                <img src=\"assets/images/course/abc.jpg\" alt=\"\">
                                <div class=\"video-btn-area\">
                                    <div class=\"vedio-icone\">
                                        <a class=\"video-play-button play-video popup-video\" href=\"https://www.youtube.com/watch?v=DAFsRQZ1Lss\">
                                            <span class=\"play-icon\">
                                                <i class=\"fa-sharp fa-solid fa-play\"></i>
                                            </span>
                                        </a>
                                        <div class=\"video-overlay\">
                                            <a class=\"video-overlay-close\">×</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"course-details-btn-wrapper full-width pb--20\">
                            <ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
                                <li class=\"nav-item\" role=\"presentation\">
                                    <button class=\"nav-link active\" id=\"home-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#home\" type=\"button\" role=\"tab\" aria-controls=\"home\" aria-selected=\"true\">Information du cours</button>
                                </li>
                                <li class=\"nav-item\" role=\"presentation\">
                                    <button class=\"nav-link \" id=\"review-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#review\" type=\"button\" role=\"tab\" aria-controls=\"review\" aria-selected=\"false\">Avis</button>
                                </li>
                            </ul>
                        </div>
                        <div class=\"tab-content mt--50\" id=\"myTabContent\">
                            <div class=\"tab-pane fade  show active\" id=\"home\" role=\"tabpanel\" aria-labelledby=\"home-tab\">
                                <div class=\"course-content-wrapper\">
                                    <h5 class=\"title mb--10\">Description du cours</h5>
                                    <p class=\"disc\">
                                        If filmmaking is your passion but you never went to film school you’ve come to the right place. Here, you will get hands-on
                                        experience and acquire skills that you never would’ve elsewhere like learning how to make feature films on your own,
                                        making do with any equipment, and doing it all faster and better.
                                    </p>
                                    <h5 class=\"title mb--10\">Description</h5>
                                    <p class=\"disc\">
                                        You will be taught the full process of filmmaking starting from planning, filming, and editing. Not only that but you will learn
                                        how to make films that look way more expensive than they are without spending a whole lot of time or money on them.
                                        In this course, we’ll focus on a few different forms of films from video ads, to movie trailers to travel vlogs, you name it.
                                        In addition to that, we’ll also go over Adobe Premiere Pro in detail so that you get an idea of all that you need to know to become an editing genius. And, if you feel like you’re stuck at any point then you can always ask for guidance and I’ll reply as soon as possible.
                                    </p>
                                    <p class=\"disc\">
                                        With this course, you also have access to a whole lot of resources not only for reference but also free media like aerial video shots, background music, fonts, and more. These all come with proper licensing so you can use them in your production worry free.
                                    </p>
                                    <div class=\"module-wrapper\">
                                        <h6 class=\"title mb--10\">What Will You Learn?</h6>
                                        <div class=\"inner-content\">
                                            <div class=\"single-wrapper\">
                                                <div class=\"single-codule\">
                                                    <i class=\"fa-regular fa-check\"></i>
                                                    <p>Learn the basics of computer programming</p>
                                                </div>
                                                <div class=\"single-codule\">
                                                    <i class=\"fa-regular fa-check\"></i>
                                                    <p>Differences between ads, trailers, vlogs, etc</p>
                                                </div>
                                                <div class=\"single-codule\">
                                                    <i class=\"fa-regular fa-check\"></i>
                                                    <p>Learn JavaScript</p>
                                                </div>
                                            </div>
                                            <div class=\"single-wrapper\">
                                                <div class=\"single-codule\">
                                                    <i class=\"fa-regular fa-check\"></i>
                                                    <p>Learn CSS</p>
                                                </div>
                                                <div class=\"single-codule\">
                                                    <i class=\"fa-regular fa-check\"></i>
                                                    <p>Tools you need for best results</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class=\"tab-pane fade\" id=\"review\" role=\"tabpanel\" aria-labelledby=\"review-tab\">
                                <div class=\"rating-main-wrapper\">
                                    <!-- single-top-rating -->
                                    <div class=\"rating-top-main-wrapper\">
                                        <!-- rating area start -->
                                        <div class=\"rating-area-main-wrapper\">
                                            <h2 class=\"title\">4.5</h2>
                                            <div class=\"stars-wrapper\">
                                                <i class=\"fa-solid fa-star\"></i>
                                                <i class=\"fa-solid fa-star\"></i>
                                                <i class=\"fa-solid fa-star\"></i>
                                                <i class=\"fa-solid fa-star\"></i>
                                                <i class=\"fa-regular fa-star\"></i>
                                            </div>
                                            <span>Total 2 Ratings</span>
                                        </div>
                                        <!-- rating area end -->
                                        <div class=\"progress-wrapper-main\">
                                            <div class=\"single-progress-area-h\" data-sal-delay=\"150\" data-sal=\"slide-up\" data-sal-duration=\"800\">
                                                <div class=\"progress-top\">
                                                    <i class=\"fa-regular fa-star\"></i>
                                                    <span class=\"parcent\">
                                                        5
                                                    </span>
                                                </div>
                                                <div class=\"progress\">
                                                    <div class=\"progress-bar wow fadeInLeft bg--primary\" role=\"progressbar\" style=\"width: 100%\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                    </div>
                                                </div>
                                                <div class=\"end\">
                                                    <span>25 Rating</span>
                                                </div>
                                            </div>
                                            <div class=\"single-progress-area-h\" data-sal-delay=\"150\" data-sal=\"slide-up\" data-sal-duration=\"800\">
                                                <div class=\"progress-top\">
                                                    <i class=\"fa-regular fa-star\"></i>
                                                    <span class=\"parcent\">
                                                        4
                                                    </span>
                                                </div>
                                                <div class=\"progress\">
                                                    <div class=\"progress-bar wow fadeInLeft bg--primary\" role=\"progressbar\" style=\"width: 80%\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                    </div>
                                                </div>
                                                <div class=\"end\">
                                                    <span>20 Rating</span>
                                                </div>
                                            </div>
                                            <div class=\"single-progress-area-h\" data-sal-delay=\"150\" data-sal=\"slide-up\" data-sal-duration=\"800\">
                                                <div class=\"progress-top\">
                                                    <i class=\"fa-regular fa-star\"></i>
                                                    <span class=\"parcent\">
                                                        3
                                                    </span>
                                                </div>
                                                <div class=\"progress\">
                                                    <div class=\"progress-bar wow fadeInLeft bg--primary\" role=\"progressbar\" style=\"width: 60%\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                    </div>
                                                </div>
                                                <div class=\"end\">
                                                    <span>5 Rating</span>
                                                </div>
                                            </div>
                                            <div class=\"single-progress-area-h\" data-sal-delay=\"150\" data-sal=\"slide-up\" data-sal-duration=\"800\">
                                                <div class=\"progress-top\">
                                                    <i class=\"fa-regular fa-star\"></i>
                                                    <span class=\"parcent\">
                                                        2
                                                    </span>
                                                </div>
                                                <div class=\"progress\">
                                                    <div class=\"progress-bar wow fadeInLeft bg--primary\" role=\"progressbar\" style=\"width: 40%\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                    </div>
                                                </div>
                                                <div class=\"end\">
                                                    <span>2 Rating</span>
                                                </div>
                                            </div>
                                            <div class=\"single-progress-area-h\" data-sal-delay=\"150\" data-sal=\"slide-up\" data-sal-duration=\"800\">
                                                <div class=\"progress-top\">
                                                    <i class=\"fa-regular fa-star\"></i>
                                                    <span class=\"parcent\">
                                                        1
                                                    </span>
                                                </div>
                                                <div class=\"progress\">
                                                    <div class=\"progress-bar wow fadeInLeft bg--primary\" role=\"progressbar\" style=\"width: 20%\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                    </div>
                                                </div>
                                                <div class=\"end\">
                                                    <span>1 Rating</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-top-rating end-->
                                    <!-- person indevidual rating area  -->
                                    <div class=\"indevidual-rating-area\">
                                        <!-- author-area -->
                                        <div class=\"author-area\">
                                            <img src=\"assets/images/course/28.jpg\" width=\"60\" alt=\"instructor\">
                                            <div class=\"information\">
                                                <span>William U.</span>
                                                <div class=\"stars\">
                                                    <i class=\"fa-solid fa-star\"></i>
                                                    <i class=\"fa-solid fa-star\"></i>
                                                    <i class=\"fa-solid fa-star\"></i>
                                                    <i class=\"fa-solid fa-star\"></i>
                                                    <i class=\"fa-regular fa-star\"></i>
                                                    <span class=\"ml--30\">a week ago</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- author-area end -->
                                        <p class=\"disc\">
                                            I still have a lot of studying to do using this course and the other practice exams, but so far it's been great! I have not taken my Security+ exam as well, so I'll update this at a later time.
                                        </p>
                                        <div class=\"like-love-area\">
                                            <a href=\"#\">
                                                <i class=\"fa-sharp fa-light fa-thumbs-up\"></i>
                                            </a>
                                            <a href=\"#\">
                                                <i class=\"fa-regular fa-heart\"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- person indevidual rating area end -->
                                    <!-- person indevidual rating area  -->
                                    <div class=\"indevidual-rating-area\">
                                        <!-- author-area -->
                                        <div class=\"author-area\">
                                            <img src=\"assets/images/course/29.jpg\" width=\"60\" alt=\"instructor\">
                                            <div class=\"information\">
                                                <span>William U.</span>
                                                <div class=\"stars\">
                                                    <i class=\"fa-solid fa-star\"></i>
                                                    <i class=\"fa-solid fa-star\"></i>
                                                    <i class=\"fa-solid fa-star\"></i>
                                                    <i class=\"fa-solid fa-star\"></i>
                                                    <i class=\"fa-regular fa-star\"></i>
                                                    <span class=\"ml--30\">a week ago</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- author-area end -->
                                        <p class=\"disc\">
                                            I still have a lot of studying to do using this course and the other practice exams, but so far it's been great! I have not taken my Security+ exam as well, so I'll update this at a later time.
                                        </p>
                                        <div class=\"like-love-area\">
                                            <a href=\"#\">
                                                <i class=\"fa-sharp fa-light fa-thumbs-up\"></i>
                                            </a>
                                            <a href=\"#\">
                                                <i class=\"fa-regular fa-heart\"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- person indevidual rating area end -->
                                </div>
                            </div>
                        </div>
                        <div class=\"course-content-wrapper-main\">
                            <h5 class=\"title\">Course Content</h5>

                            <!-- course content accordion area -->
                            <div class=\"accordion mt--30 mb--50\" id=\"accordionExample\">
                                <div class=\"accordion-item\">
                                    <h2 class=\"accordion-header\" id=\"headingOne\">
                                        <button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                                            <span>Introduction</span>
                                            <span>3 Lectures . 9 min</span>
                                        </button>
                                    </h2>
                                    <div id=\"collapseOne\" class=\"accordion-collapse collapse show\" aria-labelledby=\"headingOne\" data-bs-parent=\"#accordionExample\">
                                        <div class=\"accordion-body\">
                                            <!-- play single area start -->
                                            <a href=\"#\" class=\"play-vedio-wrapper\">
                                                <div class=\"left\">
                                                    <i class=\"fa-light fa-circle-play\"></i>
                                                    <span>Introduction to the course</span>
                                                </div>
                                                <div class=\"right\">
                                                    <span class=\"play\">Preview</span>
                                                    <span>9 min</span>
                                                </div>
                                            </a>
                                            <!-- play single area end -->
                                            <!-- play single area start -->
                                            <a href=\"#\" class=\"play-vedio-wrapper\">
                                                <div class=\"left\">
                                                    <i class=\"fa-light fa-circle-play\"></i>
                                                    <span>Introduction to the course</span>
                                                </div>
                                                <div class=\"right\">
                                                    <span class=\"play\">Preview</span>
                                                    <span>9 min</span>
                                                </div>
                                            </a>
                                            <!-- play single area end -->
                                            <!-- play single area start -->
                                            <a href=\"#\" class=\"play-vedio-wrapper\">
                                                <div class=\"left\">
                                                    <i class=\"fa-light fa-circle-play\"></i>
                                                    <span>Introduction to the course</span>
                                                </div>
                                                <div class=\"right\">
                                                    <i class=\"fa-regular fa-lock\"></i>
                                                </div>
                                            </a>
                                            <!-- play single area end -->
                                        </div>
                                    </div>
                                </div>
                                <div class=\"accordion-item\">
                                    <h2 class=\"accordion-header\" id=\"headingTwo\">
                                        <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
                                            <span>Learn to Storyboard</span>
                                            <span>7 Lectures . 120 min</span>
                                        </button>
                                    </h2>
                                    <div id=\"collapseTwo\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingTwo\" data-bs-parent=\"#accordionExample\">
                                        <div class=\"accordion-body\">
                                            <!-- play single area start -->
                                            <a href=\"#\" class=\"play-vedio-wrapper\">
                                                <div class=\"left\">
                                                    <i class=\"fa-light fa-circle-play\"></i>
                                                    <span>Become a storyboard artist</span>
                                                </div>
                                                <div class=\"right\">
                                                    <i class=\"fa-regular fa-lock\"></i>
                                                </div>
                                            </a>
                                            <!-- play single area end -->
                                            <!-- play single area start -->
                                            <a href=\"#\" class=\"play-vedio-wrapper\">
                                                <div class=\"left\">
                                                    <i class=\"fa-light fa-circle-play\"></i>
                                                    <span>storyboard artist</span>
                                                </div>
                                                <div class=\"right\">
                                                    <i class=\"fa-regular fa-lock\"></i>
                                                </div>
                                            </a>
                                            <!-- play single area end -->
                                            <!-- play single area start -->
                                            <a href=\"#\" class=\"play-vedio-wrapper\">
                                                <div class=\"left\">
                                                    <i class=\"fa-light fa-circle-play\"></i>
                                                    <span>Introduction PHP</span>
                                                </div>
                                                <div class=\"right\">
                                                    <i class=\"fa-regular fa-lock\"></i>
                                                </div>
                                            </a>
                                            <!-- play single area end -->
                                            <!-- play single area start -->
                                            <a href=\"#\" class=\"play-vedio-wrapper\">
                                                <div class=\"left\">
                                                    <i class=\"fa-light fa-circle-play\"></i>
                                                    <span>LEarning Fundamentsl Elementor</span>
                                                </div>
                                                <div class=\"right\">
                                                    <i class=\"fa-regular fa-lock\"></i>
                                                </div>
                                            </a>
                                            <!-- play single area end -->
                                            <!-- play single area start -->
                                            <a href=\"#\" class=\"play-vedio-wrapper\">
                                                <div class=\"left\">
                                                    <i class=\"fa-light fa-circle-play\"></i>
                                                    <span>Enter to the course</span>
                                                </div>
                                                <div class=\"right\">
                                                    <i class=\"fa-regular fa-lock\"></i>
                                                </div>
                                            </a>
                                            <!-- play single area end -->
                                            <!-- play single area start -->
                                            <a href=\"#\" class=\"play-vedio-wrapper\">
                                                <div class=\"left\">
                                                    <i class=\"fa-light fa-circle-play\"></i>
                                                    <span>Main Part of the course</span>
                                                </div>
                                                <div class=\"right\">
                                                    <i class=\"fa-regular fa-lock\"></i>
                                                </div>
                                            </a>
                                            <!-- play single area end -->
                                            <!-- play single area start -->
                                            <a href=\"#\" class=\"play-vedio-wrapper\">
                                                <div class=\"left\">
                                                    <i class=\"fa-light fa-circle-play\"></i>
                                                    <span>Function About PHP</span>
                                                </div>
                                                <div class=\"right\">
                                                    <i class=\"fa-regular fa-lock\"></i>
                                                </div>
                                            </a>
                                            <!-- play single area end -->
                                        </div>
                                    </div>
                                </div>
                                <div class=\"accordion-item\">
                                    <h2 class=\"accordion-header\" id=\"headingThree\">
                                        <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
                                            <span>How to draw characters, layouts, and scenes</span>
                                            <span>7 Lectures . 83 min</span>
                                        </button>
                                    </h2>
                                    <div id=\"collapseThree\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingThree\" data-bs-parent=\"#accordionExample\">
                                        <div class=\"accordion-body\">
                                            <!-- play single area start -->
                                            <a href=\"#\" class=\"play-vedio-wrapper\">
                                                <div class=\"left\">
                                                    <i class=\"fa-light fa-circle-play\"></i>
                                                    <span>Become a storyboard artist</span>
                                                </div>
                                                <div class=\"right\">
                                                    <i class=\"fa-regular fa-lock\"></i>
                                                </div>
                                            </a>
                                            <!-- play single area end -->
                                            <!-- play single area start -->
                                            <a href=\"#\" class=\"play-vedio-wrapper\">
                                                <div class=\"left\">
                                                    <i class=\"fa-light fa-circle-play\"></i>
                                                    <span>storyboard artist</span>
                                                </div>
                                                <div class=\"right\">
                                                    <i class=\"fa-regular fa-lock\"></i>
                                                </div>
                                            </a>
                                            <!-- play single area end -->
                                            <!-- play single area start -->
                                            <a href=\"#\" class=\"play-vedio-wrapper\">
                                                <div class=\"left\">
                                                    <i class=\"fa-light fa-circle-play\"></i>
                                                    <span>Introduction PHP</span>
                                                </div>
                                                <div class=\"right\">
                                                    <i class=\"fa-regular fa-lock\"></i>
                                                </div>
                                            </a>
                                            <!-- play single area end -->
                                            <!-- play single area start -->
                                            <a href=\"#\" class=\"play-vedio-wrapper\">
                                                <div class=\"left\">
                                                    <i class=\"fa-light fa-circle-play\"></i>
                                                    <span>LEarning Fundamentsl Elementor</span>
                                                </div>
                                                <div class=\"right\">
                                                    <i class=\"fa-regular fa-lock\"></i>
                                                </div>
                                            </a>
                                            <!-- play single area end -->
                                            <!-- play single area start -->
                                            <a href=\"#\" class=\"play-vedio-wrapper\">
                                                <div class=\"left\">
                                                    <i class=\"fa-light fa-circle-play\"></i>
                                                    <span>Enter to the course</span>
                                                </div>
                                                <div class=\"right\">
                                                    <i class=\"fa-regular fa-lock\"></i>
                                                </div>
                                            </a>
                                            <!-- play single area end -->
                                            <!-- play single area start -->
                                            <a href=\"#\" class=\"play-vedio-wrapper\">
                                                <div class=\"left\">
                                                    <i class=\"fa-light fa-circle-play\"></i>
                                                    <span>Main Part of the course</span>
                                                </div>
                                                <div class=\"right\">
                                                    <i class=\"fa-regular fa-lock\"></i>
                                                </div>
                                            </a>
                                            <!-- play single area end -->
                                            <!-- play single area start -->
                                            <a href=\"#\" class=\"play-vedio-wrapper\">
                                                <div class=\"left\">
                                                    <i class=\"fa-light fa-circle-play\"></i>
                                                    <span>Function About PHP</span>
                                                </div>
                                                <div class=\"right\">
                                                    <i class=\"fa-regular fa-lock\"></i>
                                                </div>
                                            </a>
                                            <!-- play single area end -->
                                        </div>
                                    </div>
                                </div>
                                <div class=\"accordion-item\">
                                    <h2 class=\"accordion-header\" id=\"headingFour\">
                                        <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseFour\" aria-expanded=\"false\" aria-controls=\"collapseFour\">
                                            <span>1-point and 2-point perspective</span>
                                            <span>7 Lectures . 72 min</span>
                                        </button>
                                    </h2>
                                    <div id=\"collapseFour\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingFour\" data-bs-parent=\"#accordionExample\">
                                        <div class=\"accordion-body\">
                                            <!-- play single area start -->
                                            <a href=\"#\" class=\"play-vedio-wrapper\">
                                                <div class=\"left\">
                                                    <i class=\"fa-light fa-circle-play\"></i>
                                                    <span>Become a storyboard artist</span>
                                                </div>
                                                <div class=\"right\">
                                                    <i class=\"fa-regular fa-lock\"></i>
                                                </div>
                                            </a>
                                            <!-- play single area end -->
                                            <!-- play single area start -->
                                            <a href=\"#\" class=\"play-vedio-wrapper\">
                                                <div class=\"left\">
                                                    <i class=\"fa-light fa-circle-play\"></i>
                                                    <span>storyboard artist</span>
                                                </div>
                                                <div class=\"right\">
                                                    <i class=\"fa-regular fa-lock\"></i>
                                                </div>
                                            </a>
                                            <!-- play single area end -->
                                            <!-- play single area start -->
                                            <a href=\"#\" class=\"play-vedio-wrapper\">
                                                <div class=\"left\">
                                                    <i class=\"fa-light fa-circle-play\"></i>
                                                    <span>Introduction PHP</span>
                                                </div>
                                                <div class=\"right\">
                                                    <i class=\"fa-regular fa-lock\"></i>
                                                </div>
                                            </a>
                                            <!-- play single area end -->
                                            <!-- play single area start -->
                                            <a href=\"#\" class=\"play-vedio-wrapper\">
                                                <div class=\"left\">
                                                    <i class=\"fa-light fa-circle-play\"></i>
                                                    <span>LEarning Fundamentsl Elementor</span>
                                                </div>
                                                <div class=\"right\">
                                                    <i class=\"fa-regular fa-lock\"></i>
                                                </div>
                                            </a>
                                            <!-- play single area end -->
                                            <!-- play single area start -->
                                            <a href=\"#\" class=\"play-vedio-wrapper\">
                                                <div class=\"left\">
                                                    <i class=\"fa-light fa-circle-play\"></i>
                                                    <span>Enter to the course</span>
                                                </div>
                                                <div class=\"right\">
                                                    <i class=\"fa-regular fa-lock\"></i>
                                                </div>
                                            </a>
                                            <!-- play single area end -->
                                            <!-- play single area start -->
                                            <a href=\"#\" class=\"play-vedio-wrapper\">
                                                <div class=\"left\">
                                                    <i class=\"fa-light fa-circle-play\"></i>
                                                    <span>Main Part of the course</span>
                                                </div>
                                                <div class=\"right\">
                                                    <i class=\"fa-regular fa-lock\"></i>
                                                </div>
                                            </a>
                                            <!-- play single area end -->
                                            <!-- play single area start -->
                                            <a href=\"#\" class=\"play-vedio-wrapper\">
                                                <div class=\"left\">
                                                    <i class=\"fa-light fa-circle-play\"></i>
                                                    <span>Function About PHP</span>
                                                </div>
                                                <div class=\"right\">
                                                    <i class=\"fa-regular fa-lock\"></i>
                                                </div>
                                            </a>
                                            <!-- play single area end -->
                                        </div>
                                    </div>
                                </div>
                                <div class=\"accordion-item\">
                                    <h2 class=\"accordion-header\" id=\"headingFive\">
                                        <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseFive\" aria-expanded=\"false\" aria-controls=\"collapseFive\">
                                            <span>Digital drawing application</span>
                                            <span>7 Lectures . 90 min</span>
                                        </button>
                                    </h2>
                                    <div id=\"collapseFive\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingFive\" data-bs-parent=\"#accordionExample\">
                                        <div class=\"accordion-body\">
                                            <!-- play single area start -->
                                            <a href=\"#\" class=\"play-vedio-wrapper\">
                                                <div class=\"left\">
                                                    <i class=\"fa-light fa-circle-play\"></i>
                                                    <span>Become a storyboard artist</span>
                                                </div>
                                                <div class=\"right\">
                                                    <i class=\"fa-regular fa-lock\"></i>
                                                </div>
                                            </a>
                                            <!-- play single area end -->
                                            <!-- play single area start -->
                                            <a href=\"#\" class=\"play-vedio-wrapper\">
                                                <div class=\"left\">
                                                    <i class=\"fa-light fa-circle-play\"></i>
                                                    <span>storyboard artist</span>
                                                </div>
                                                <div class=\"right\">
                                                    <i class=\"fa-regular fa-lock\"></i>
                                                </div>
                                            </a>
                                            <!-- play single area end -->
                                            <!-- play single area start -->
                                            <a href=\"#\" class=\"play-vedio-wrapper\">
                                                <div class=\"left\">
                                                    <i class=\"fa-light fa-circle-play\"></i>
                                                    <span>Introduction PHP</span>
                                                </div>
                                                <div class=\"right\">
                                                    <i class=\"fa-regular fa-lock\"></i>
                                                </div>
                                            </a>
                                            <!-- play single area end -->
                                            <!-- play single area start -->
                                            <a href=\"#\" class=\"play-vedio-wrapper\">
                                                <div class=\"left\">
                                                    <i class=\"fa-light fa-circle-play\"></i>
                                                    <span>LEarning Fundamentsl Elementor</span>
                                                </div>
                                                <div class=\"right\">
                                                    <i class=\"fa-regular fa-lock\"></i>
                                                </div>
                                            </a>
                                            <!-- play single area end -->
                                            <!-- play single area start -->
                                            <a href=\"#\" class=\"play-vedio-wrapper\">
                                                <div class=\"left\">
                                                    <i class=\"fa-light fa-circle-play\"></i>
                                                    <span>Enter to the course</span>
                                                </div>
                                                <div class=\"right\">
                                                    <i class=\"fa-regular fa-lock\"></i>
                                                </div>
                                            </a>
                                            <!-- play single area end -->
                                            <!-- play single area start -->
                                            <a href=\"#\" class=\"play-vedio-wrapper\">
                                                <div class=\"left\">
                                                    <i class=\"fa-light fa-circle-play\"></i>
                                                    <span>Main Part of the course</span>
                                                </div>
                                                <div class=\"right\">
                                                    <i class=\"fa-regular fa-lock\"></i>
                                                </div>
                                            </a>
                                            <!-- play single area end -->
                                            <!-- play single area start -->
                                            <a href=\"#\" class=\"play-vedio-wrapper\">
                                                <div class=\"left\">
                                                    <i class=\"fa-light fa-circle-play\"></i>
                                                    <span>Function About PHP</span>
                                                </div>
                                                <div class=\"right\">
                                                    <i class=\"fa-regular fa-lock\"></i>
                                                </div>
                                            </a>
                                            <!-- play single area end -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- course content accordion area end -->
                        </div>
                        <div class=\"single-instructor-area-details\">
                            <a href=\"#\" class=\"thumbnail\">
                                <img src=\"assets/images/course/28.jpg\" width=\"205\" alt=\"instructor\">
                            </a>
                            <div class=\"inner-instrustor-area\">
                                <h5 class=\"title\">William U.</h5>
                                <span class=\"deg\">Advanced Educator</span>
                                <div class=\"stars-area-wrapper\">
                                    <div class=\"stars-area\">
                                        <span>4.5</span>
                                        <i class=\"fa-solid fa-star\"></i>
                                        <i class=\"fa-solid fa-star\"></i>
                                        <i class=\"fa-solid fa-star\"></i>
                                        <i class=\"fa-solid fa-star\"></i>
                                        <i class=\"fa-regular fa-star\"></i>
                                    </div>
                                    <div class=\"users-area\">
                                        <i class=\"fa-light fa-users\"></i>
                                        <span>1350 Students</span>
                                    </div>
                                    <div class=\"users-area\">
                                        <i class=\"fa-light fa-video\"></i>
                                        <span>26 Courses</span>
                                    </div>
                                </div>
                                <p class=\"disc\">
                                    William U. Peña, MBA, CISSP No. 349867, is a former college professor and the lead instructor at Dion Training Solutions.
                                </p>
                                <div class=\"follow-us\">
                                    <span>Follow</span>
                                    <ul>
                                        <li><a href=\"#\"><i class=\"fa-brands fa-facebook\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa-brands fa-instagram\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa-brands fa-linkedin\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa-brands fa-pinterest\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa-brands fa-youtube\"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"rating-main-wrapper\">
                            <!-- single-top-rating -->
                            <div class=\"rating-top-main-wrapper\">
                                <!-- rating area start -->
                                <div class=\"rating-area-main-wrapper\">
                                    <h2 class=\"title\">4.5</h2>
                                    <div class=\"stars-wrapper\">
                                        <i class=\"fa-solid fa-star\"></i>
                                        <i class=\"fa-solid fa-star\"></i>
                                        <i class=\"fa-solid fa-star\"></i>
                                        <i class=\"fa-solid fa-star\"></i>
                                        <i class=\"fa-regular fa-star\"></i>
                                    </div>
                                    <span>Total 2 Ratings</span>
                                </div>
                                <!-- rating area end -->
                                <div class=\"progress-wrapper-main\">
                                    <div class=\"single-progress-area-h\" data-sal-delay=\"150\" data-sal=\"slide-up\" data-sal-duration=\"800\">
                                        <div class=\"progress-top\">
                                            <i class=\"fa-regular fa-star\"></i>
                                            <span class=\"parcent\">
                                                5
                                            </span>
                                        </div>
                                        <div class=\"progress\">
                                            <div class=\"progress-bar wow fadeInLeft bg--primary\" role=\"progressbar\" style=\"width: 100%\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                            </div>
                                        </div>
                                        <div class=\"end\">
                                            <span>25 Rating</span>
                                        </div>
                                    </div>
                                    <div class=\"single-progress-area-h\" data-sal-delay=\"150\" data-sal=\"slide-up\" data-sal-duration=\"800\">
                                        <div class=\"progress-top\">
                                            <i class=\"fa-regular fa-star\"></i>
                                            <span class=\"parcent\">
                                                4
                                            </span>
                                        </div>
                                        <div class=\"progress\">
                                            <div class=\"progress-bar wow fadeInLeft bg--primary\" role=\"progressbar\" style=\"width: 80%\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                            </div>
                                        </div>
                                        <div class=\"end\">
                                            <span>20 Rating</span>
                                        </div>
                                    </div>
                                    <div class=\"single-progress-area-h\" data-sal-delay=\"150\" data-sal=\"slide-up\" data-sal-duration=\"800\">
                                        <div class=\"progress-top\">
                                            <i class=\"fa-regular fa-star\"></i>
                                            <span class=\"parcent\">
                                                3
                                            </span>
                                        </div>
                                        <div class=\"progress\">
                                            <div class=\"progress-bar wow fadeInLeft bg--primary\" role=\"progressbar\" style=\"width: 60%\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                            </div>
                                        </div>
                                        <div class=\"end\">
                                            <span>5 Rating</span>
                                        </div>
                                    </div>
                                    <div class=\"single-progress-area-h\" data-sal-delay=\"150\" data-sal=\"slide-up\" data-sal-duration=\"800\">
                                        <div class=\"progress-top\">
                                            <i class=\"fa-regular fa-star\"></i>
                                            <span class=\"parcent\">
                                                2
                                            </span>
                                        </div>
                                        <div class=\"progress\">
                                            <div class=\"progress-bar wow fadeInLeft bg--primary\" role=\"progressbar\" style=\"width: 40%\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                            </div>
                                        </div>
                                        <div class=\"end\">
                                            <span>2 Rating</span>
                                        </div>
                                    </div>
                                    <div class=\"single-progress-area-h\" data-sal-delay=\"150\" data-sal=\"slide-up\" data-sal-duration=\"800\">
                                        <div class=\"progress-top\">
                                            <i class=\"fa-regular fa-star\"></i>
                                            <span class=\"parcent\">
                                                1
                                            </span>
                                        </div>
                                        <div class=\"progress\">
                                            <div class=\"progress-bar wow fadeInLeft bg--primary\" role=\"progressbar\" style=\"width: 20%\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                            </div>
                                        </div>
                                        <div class=\"end\">
                                            <span>1 Rating</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single-top-rating end-->
                            <!-- person indevidual rating area  -->
                            <div class=\"indevidual-rating-area\">
                                <!-- author-area -->
                                <div class=\"author-area\">
                                    <img src=\"assets/images/course/28.jpg\" width=\"60\" alt=\"instructor\">
                                    <div class=\"information\">
                                        <span>William U.</span>
                                        <div class=\"stars\">
                                            <i class=\"fa-solid fa-star\"></i>
                                            <i class=\"fa-solid fa-star\"></i>
                                            <i class=\"fa-solid fa-star\"></i>
                                            <i class=\"fa-solid fa-star\"></i>
                                            <i class=\"fa-regular fa-star\"></i>
                                            <span class=\"ml--30\">a week ago</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- author-area end -->
                                <p class=\"disc\">
                                    I still have a lot of studying to do using this course and the other practice exams, but so far it's been great! I have not taken my Security+ exam as well, so I'll update this at a later time.
                                </p>
                                <div class=\"like-love-area\">
                                    <a href=\"#\">
                                        <i class=\"fa-sharp fa-light fa-thumbs-up\"></i>
                                    </a>
                                    <a href=\"#\">
                                        <i class=\"fa-regular fa-heart\"></i>
                                    </a>
                                </div>
                            </div>
                            <!-- person indevidual rating area end -->
                            <!-- person indevidual rating area  -->
                            <div class=\"indevidual-rating-area\">
                                <!-- author-area -->
                                <div class=\"author-area\">
                                    <img src=\"assets/images/course/29.jpg\" width=\"60\" alt=\"instructor\">
                                    <div class=\"information\">
                                        <span>William U.</span>
                                        <div class=\"stars\">
                                            <i class=\"fa-solid fa-star\"></i>
                                            <i class=\"fa-solid fa-star\"></i>
                                            <i class=\"fa-solid fa-star\"></i>
                                            <i class=\"fa-solid fa-star\"></i>
                                            <i class=\"fa-regular fa-star\"></i>
                                            <span class=\"ml--30\">a week ago</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- author-area end -->
                                <p class=\"disc\">
                                    I still have a lot of studying to do using this course and the other practice exams, but so far it's been great! I have not taken my Security+ exam as well, so I'll update this at a later time.
                                </p>
                                <div class=\"like-love-area\">
                                    <a href=\"#\">
                                        <i class=\"fa-sharp fa-light fa-thumbs-up\"></i>
                                    </a>
                                    <a href=\"#\">
                                        <i class=\"fa-regular fa-heart\"></i>
                                    </a>
                                </div>
                            </div>
                            <!-- person indevidual rating area end -->
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-5 order-cl-2 order-lg-2 order-md-1 order-sm-1 order-1 rts-sticky-column-item\">
                    <!-- right- sticky bar area -->
                    <div class=\"right-course-details\">
                        <!-- single course-sidebar -->
                        <div class=\"course-side-bar\">
                            <div class=\"price-area\">
                                <h3 class=\"title\">\$39.99</h3>
                                <span class=\"discount\">100%</span>
                            </div>
                            <a href=\"#\" class=\"rts-btn btn-primary\">Add To Cart</a>
                            <div class=\"what-includes\">
                                <span class=\"m\">30-Day Money-Back Guarantee</span>
                                <h5 class=\"title\">This course includes: </h5>
                                <div class=\"single-include\">
                                    <div class=\"left\">
                                        <svg width=\"20\" height=\"20\" viewBox=\"0 0 20 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <path d=\"M16.875 17.5V3.75H11.875V17.5H9.375V8.75H4.375V17.5H2.5V1.25H1.25V17.5C1.25 17.8315 1.3817 18.1495 1.61612 18.3839C1.85054 18.6183 2.16848 18.75 2.5 18.75H18.75V17.5H16.875ZM8.125 17.5H5.625V10H8.125V17.5ZM15.625 17.5H13.125V5H15.625V17.5Z\" fill=\"#525252\" />
                                            <path d=\"M16.875 17.5V3.75H11.875V17.5H9.375V8.75H4.375V17.5H2.5V1.25H1.25V17.5C1.25 17.8315 1.3817 18.1495 1.61612 18.3839C1.85054 18.6183 2.16848 18.75 2.5 18.75H18.75V17.5H16.875ZM8.125 17.5H5.625V10H8.125V17.5ZM15.625 17.5H13.125V5H15.625V17.5Z\" fill=\"#09A24F\" />
                                        </svg>
                                        <span>Levels</span>
                                    </div>
                                    <div class=\"right\">
                                        <span>Beginner</span>
                                    </div>
                                </div>
                                <div class=\"single-include\">
                                    <div class=\"left\">
                                        <svg width=\"20\" height=\"20\" viewBox=\"0 0 20 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M5.13876 17.2754C6.57769 18.2368 8.26942 18.75 10 18.75C12.3206 18.75 14.5462 17.8281 16.1872 16.1872C17.8281 14.5462 18.75 12.3206 18.75 10C18.75 8.26942 18.2368 6.57769 17.2754 5.13876C16.3139 3.69983 14.9473 2.57832 13.3485 1.91606C11.7496 1.25379 9.9903 1.08051 8.29296 1.41813C6.59563 1.75575 5.03653 2.58911 3.81282 3.81282C2.58911 5.03653 1.75575 6.59563 1.41813 8.29296C1.08051 9.9903 1.25379 11.7496 1.91606 13.3485C2.57832 14.9473 3.69983 16.3139 5.13876 17.2754ZM5.83323 3.76398C7.0666 2.93987 8.51664 2.5 10 2.5C11.9891 2.5 13.8968 3.29018 15.3033 4.6967C16.7098 6.10323 17.5 8.01088 17.5 10C17.5 11.4834 17.0601 12.9334 16.236 14.1668C15.4119 15.4001 14.2406 16.3614 12.8701 16.9291C11.4997 17.4968 9.99168 17.6453 8.53683 17.3559C7.08197 17.0665 5.7456 16.3522 4.6967 15.3033C3.64781 14.2544 2.9335 12.918 2.64411 11.4632C2.35473 10.0083 2.50325 8.50032 3.07091 7.12988C3.63856 5.75943 4.59986 4.58809 5.83323 3.76398ZM9.375 10.2563L12.8688 13.75L13.75 12.8687L10.625 9.7375V4.375H9.375V10.2563Z\" fill=\"#505155\" />
                                            <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M5.13876 17.2754C6.57769 18.2368 8.26942 18.75 10 18.75C12.3206 18.75 14.5462 17.8281 16.1872 16.1872C17.8281 14.5462 18.75 12.3206 18.75 10C18.75 8.26942 18.2368 6.57769 17.2754 5.13876C16.3139 3.69983 14.9473 2.57832 13.3485 1.91606C11.7496 1.25379 9.9903 1.08051 8.29296 1.41813C6.59563 1.75575 5.03653 2.58911 3.81282 3.81282C2.58911 5.03653 1.75575 6.59563 1.41813 8.29296C1.08051 9.9903 1.25379 11.7496 1.91606 13.3485C2.57832 14.9473 3.69983 16.3139 5.13876 17.2754ZM5.83323 3.76398C7.0666 2.93987 8.51664 2.5 10 2.5C11.9891 2.5 13.8968 3.29018 15.3033 4.6967C16.7098 6.10323 17.5 8.01088 17.5 10C17.5 11.4834 17.0601 12.9334 16.236 14.1668C15.4119 15.4001 14.2406 16.3614 12.8701 16.9291C11.4997 17.4968 9.99168 17.6453 8.53683 17.3559C7.08197 17.0665 5.7456 16.3522 4.6967 15.3033C3.64781 14.2544 2.9335 12.918 2.64411 11.4632C2.35473 10.0083 2.50325 8.50032 3.07091 7.12988C3.63856 5.75943 4.59986 4.58809 5.83323 3.76398ZM9.375 10.2563L12.8688 13.75L13.75 12.8687L10.625 9.7375V4.375H9.375V10.2563Z\" fill=\"#09A24F\" />
                                        </svg>
                                        <span>Duration</span>
                                    </div>
                                    <div class=\"right\">
                                        <span>6 hours 56 minutes</span>
                                    </div>
                                </div>
                                <div class=\"single-include\">
                                    <div class=\"left\">
                                        <svg width=\"20\" height=\"20\" viewBox=\"0 0 20 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M10.25 18.2C10.6013 18.5517 11.0779 18.7496 11.575 18.75C12.0721 18.7496 12.5487 18.5517 12.9 18.2L18.2 12.9C18.3748 12.7258 18.5135 12.5188 18.6081 12.2909C18.7028 12.063 18.7515 11.8187 18.7515 11.5719C18.7515 11.3251 18.7028 11.0807 18.6081 10.8528C18.5135 10.6249 18.3748 10.4179 18.2 10.2437L9.75625 1.8C9.40496 1.44827 8.92836 1.25044 8.43125 1.25H3.125C2.62772 1.25 2.15081 1.44754 1.79917 1.79917C1.44754 2.15081 1.25 2.62772 1.25 3.125V8.43125C1.25044 8.92836 1.44827 9.40496 1.8 9.75625L10.25 18.2ZM2.68306 2.68306C2.80027 2.56585 2.95924 2.5 3.125 2.5H8.43125C8.51394 2.50034 8.59575 2.51709 8.67192 2.54928C8.74809 2.58146 8.81712 2.62845 8.875 2.6875L17.3188 11.1312C17.4352 11.2484 17.5005 11.4068 17.5005 11.5719C17.5005 11.737 17.4352 11.8954 17.3188 12.0125L12.0125 17.3187C11.8954 17.4352 11.737 17.5005 11.5719 17.5005C11.4068 17.5005 11.2484 17.4352 11.1313 17.3187L2.6875 8.875C2.62845 8.81712 2.58146 8.74809 2.54928 8.67192C2.51709 8.59574 2.50034 8.51394 2.5 8.43125V3.125C2.5 2.95924 2.56585 2.80027 2.68306 2.68306ZM4.86108 8.32868C5.2722 8.60338 5.75555 8.75 6.25 8.75C6.91304 8.75 7.54893 8.48661 8.01777 8.01777C8.48661 7.54893 8.75 6.91304 8.75 6.25C8.75 5.75555 8.60338 5.2722 8.32868 4.86108C8.05397 4.44995 7.66353 4.12952 7.20671 3.9403C6.74989 3.75108 6.24723 3.70157 5.76228 3.79804C5.27732 3.8945 4.83187 4.1326 4.48223 4.48223C4.1326 4.83187 3.8945 5.27732 3.79804 5.76228C3.70157 6.24723 3.75108 6.74989 3.9403 7.20671C4.12952 7.66353 4.44995 8.05397 4.86108 8.32868ZM5.55554 5.21066C5.7611 5.07331 6.00277 5 6.25 5C6.58152 5 6.89946 5.1317 7.13388 5.36612C7.3683 5.60054 7.5 5.91848 7.5 6.25C7.5 6.49723 7.42669 6.7389 7.28934 6.94446C7.15199 7.15003 6.95676 7.31024 6.72836 7.40485C6.49995 7.49946 6.24861 7.52421 6.00614 7.47598C5.76366 7.42775 5.54093 7.3087 5.36612 7.13388C5.1913 6.95907 5.07225 6.73634 5.02402 6.49386C4.97579 6.25139 5.00054 6.00005 5.09515 5.77165C5.18976 5.54324 5.34998 5.34802 5.55554 5.21066Z\" fill=\"#09A24F\" />
                                        </svg>
                                        <span>Subject</span>
                                    </div>
                                    <div class=\"right\">
                                        <span>Web Development</span>
                                    </div>
                                </div>
                                <div class=\"single-include\">
                                    <div class=\"left\">
                                        <svg width=\"20\" height=\"20\" viewBox=\"0 0 20 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M4.2375 6.25006H7.5V7.50006H2.5V2.50007H3.75V4.80007C4.81808 3.51424 6.25676 2.58914 7.86986 2.1509C9.48296 1.71266 11.192 1.78262 12.7639 2.35123C14.3357 2.91985 15.694 3.95944 16.6534 5.32826C17.6128 6.69708 18.1267 8.3285 18.125 10.0001H16.875C16.8751 8.51793 16.3962 7.07545 15.5097 5.88764C14.6233 4.69984 13.3767 3.83031 11.9558 3.40868C10.5349 2.98705 9.01576 3.03589 7.62489 3.54793C6.23401 4.05996 5.04584 5.00777 4.2375 6.25006ZM15.7625 13.7499H12.5V12.4999H17.5V17.4999H16.25V15.1999C15.1819 16.4858 13.7432 17.4109 12.1301 17.8491C10.517 18.2873 8.80803 18.2174 7.23614 17.6488C5.66426 17.0802 4.306 16.0406 3.34659 14.6718C2.38717 13.3029 1.87328 11.6715 1.875 9.99994H3.125C3.12491 11.4821 3.60379 12.9246 4.49027 14.1124C5.37674 15.3002 6.62334 16.1697 8.04423 16.5913C9.46513 17.013 10.9842 16.9641 12.3751 16.4521C13.766 15.94 14.9542 14.9922 15.7625 13.7499Z\" fill=\"#09A24F\" />
                                        </svg>
                                        <span>Update</span>
                                    </div>
                                    <div class=\"right\">
                                        <span>29 October, 2023 Last Update</span>
                                    </div>
                                </div>
                                <div class=\"single-include\">
                                    <div class=\"left\">
                                        <svg width=\"20\" height=\"20\" viewBox=\"0 0 20 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M2.5 16.25H10V17.5H2.5C2.16848 17.5 1.85054 17.3683 1.61612 17.1339C1.3817 16.8995 1.25 16.5815 1.25 16.25V3.75C1.25 3.41848 1.3817 3.10054 1.61612 2.86612C1.85054 2.6317 2.16848 2.5 2.5 2.5H17.5C17.8315 2.5 18.1495 2.6317 18.3839 2.86612C18.6183 3.10054 18.75 3.41848 18.75 3.75V10H17.5V3.75H2.5V16.25ZM10 5H3.75V6.25H10V5ZM3.75 7.5H10V8.75H3.75V7.5ZM7.5 10H3.75V11.25H7.5V10ZM15 10.625L16.195 12.9394L18.75 13.3106L16.875 15L17.3569 17.5L15 16.0938L12.6431 17.5L13.125 15L11.25 13.3106L13.875 12.9394L15 10.625Z\" fill=\"#09A24F\" />
                                        </svg>
                                        <span>Certificate</span>
                                    </div>
                                    <div class=\"right\">
                                        <span>Certificate of completion </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single course-sidebar end -->
                    </div>
                    <!-- right- sticky bar area end -->
                    <!-- right- sticky bar area -->
                    <div class=\"right-course-details mt--30\">
                        <!-- single course-sidebar -->
                        <div class=\"course-side-bar\">
                            <!-- course single sidebar -->
                            <div class=\"course-single-information\">
                                <h5 class=\"title\">A course by</h5>
                                <div class=\"body\">
                                    <div class=\"author\">
                                        <img src=\"assets/images/course/author-06.png\" alt=\"\">
                                        <span>Dr. Angela Yu</span>
                                    </div>
                                    <div class=\"author\">
                                        <img src=\"assets/images/course/author-06.png\" alt=\"\">
                                        <span>Dr. Angela Yu</span>
                                    </div>
                                </div>
                            </div>
                            <!-- course single sidebar end-->
                            <!-- course single sidebar -->
                            <div class=\"course-single-information\">
                                <h5 class=\"title\">Material Includes</h5>
                                <div class=\"body\">
                                    <!-- ingle check -->
                                    <div class=\"single-check\">
                                        <i class=\"fa-light fa-circle-check\"></i>
                                        Flexible Deadlines
                                    </div>
                                    <!-- ingle check end -->
                                    <!-- ingle check -->
                                    <div class=\"single-check\">
                                        <i class=\"fa-light fa-circle-check\"></i>
                                        Hours of live- demo
                                    </div>
                                    <!-- ingle check end -->
                                    <!-- ingle check -->
                                    <div class=\"single-check\">
                                        <i class=\"fa-light fa-circle-check\"></i>
                                        Hours of live- demo
                                    </div>
                                    <!-- ingle check end -->
                                    <!-- ingle check -->
                                    <div class=\"single-check\">
                                        <i class=\"fa-light fa-circle-check\"></i>
                                        200+ downloadable resoursces
                                    </div>
                                    <!-- ingle check end -->
                                </div>
                            </div>
                            <!-- course single sidebar end-->
                            <!-- course single sidebar -->
                            <div class=\"course-single-information\">
                                <h5 class=\"title\">Requirements</h5>
                                <div class=\"body\">
                                    <!-- ingle check -->
                                    <div class=\"single-check\">
                                        <i class=\"fa-light fa-circle-check\"></i>
                                        Access to Adobe Premiere Pro
                                    </div>
                                    <!-- ingle check end -->
                                    <!-- ingle check -->
                                    <div class=\"single-check\">
                                        <i class=\"fa-light fa-circle-check\"></i>
                                        Familiarity with computers and other devices
                                    </div>
                                    <!-- ingle check end -->
                                </div>
                            </div>
                            <!-- course single sidebar end-->
                            <!-- course single sidebar -->
                            <div class=\"course-single-information\">
                                <h5 class=\"title\">Tags</h5>
                                <div class=\"body\">
                                    <div class=\"tags-wrapper\">
                                        <!-- single tags -->
                                        <span>Course</span>
                                        <span>Design</span>
                                        <span>Web development</span>
                                        <span>Business</span>
                                        <span>UI/UX</span>
                                        <span>Financial</span>
                                        <!-- single tags end -->
                                    </div>
                                </div>
                            </div>
                            <!-- course single sidebar end-->
                            <!-- course single sidebar -->
                            <div class=\"course-single-information\">
                                <h5 class=\"title\">Share</h5>
                                <div class=\"body\">
                                    <!-- social-share-course-sidebar -->
                                    <div class=\"social-share-course-side-bar\">
                                        <ul>
                                            <li><a href=\"#\"><i class=\"fa-brands fa-facebook-f\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fa-brands fa-instagram\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fa-brands fa-linkedin\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fa-brands fa-pinterest\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fa-brands fa-youtube\"></i></a></li>
                                        </ul>
                                    </div>
                                    <!-- social-share-course-sidebar end -->
                                </div>
                            </div>
                            <!-- course single sidebar end-->

                            <!-- course single sidebar -->
                            <div class=\"course-single-information last\">
                                <h5 class=\"title\">Audience</h5>
                                <div class=\"body\">
                                    <!-- ingle check -->
                                    <div class=\"single-check\">
                                        <i class=\"fa-light fa-circle-check\"></i>
                                        Suitable for beginners and intermediates
                                    </div>
                                    <!-- ingle check end -->
                                </div>
                            </div>
                            <!-- course single sidebar end-->
                        </div>
                        <!-- single course-sidebar end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- course area end -->

    <!-- footer call to action area start -->

    <!-- footer call to action area start -->
    <div class=\"rts-footer-area section-bg2\">
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
                                    <li><a href=\"course-two.html\">Our Mission</a></li>
                                    <li><a href=\"about.html\">Our Course</a></li>
                                    <li><a href=\"become-instructor.html\">Careers</a></li>
                                    <li><a href=\"zoom-meeting.html\">Blog & News</a></li>
                                    <li><a href=\"pricing.html\">Event & News </a></li>
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
                                                <img src=\"assets/images/blog/blog-07.jpg\" width=\"80\" alt=\"\">
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
                                                <img src=\"assets/images/blog/blog-08.jpg\" width=\"80\" alt=\"\">
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
                            <p>Copyright © 2024 All Rights Reserved by Studykids</p>
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
                    <form action=\"#\" class=\"login-form\">
                        <input type=\"text\" placeholder=\"Username of Email Address\" required>
                        <input type=\"password\" placeholder=\"Password\" required>
                        <div class=\"d-flex mb--20 align-items-center\">
                            <input type=\"checkbox\" id=\"examplecheck-modal\">
                            <label for=\"examplecheck-modal\">I agree to the terms of use and privacy policy.</label>
                        </div>
                        <button type=\"submit\" class=\"rts-btn btn-primary\">Sign In</button>

                        <p class=\"dont-acc mt--20\">Dont Have an Account? <a href=\"registration.html\">Sign-up</a> </p>
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
                            <li><a class=\"mobile-menu-link\" href=\"course-details.html\">Détails des cours</a></li>
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

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "detailscoursscience.html.twig";
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
        return array (  174 => 125,  150 => 104,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>StudyKids LMS & University HTML Template </title>
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"assets/images/fav.png\">
    <!-- fontawesome 6.4.2 -->
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
</head>

<body>

    <!-- header style one -->
    <!-- header style one -->
    <header class=\"header-one header--sticky header-default\">
        <div class=\"header-top-one-wrapper\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"header-top-one\">
                            <div class=\"left-information\">
                                <a href=\"mailto:someone@example.com\" class=\"email\"><i class=\"fa-light fa-envelope\"></i>info@studyhub.com</a>
                                <a href=\"tel:+4733378901\" class=\"email\"><i class=\"fa-light fa-phone\"></i>+61 012 012 445</a>
                            </div>
                            <div class=\"right-information\">
                                <ul class=\"social-area\">
                                    <li>
                                        <a href=\"#\">
                                            <svg width=\"16\" height=\"16\" viewBox=\"0 0 16 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                                <path d=\"M14.6688 0.5H1.33125C1.11129 0.501635 0.900811 0.589738 0.745275 0.745275C0.589738 0.900811 0.501635 1.11129 0.5 1.33125V14.6688C0.501635 14.8887 0.589738 15.0992 0.745275 15.2547C0.900811 15.4103 1.11129 15.4984 1.33125 15.5H8.5125V9.7H6.5625V7.43125H8.5125V5.7625C8.5125 3.825 9.69375 2.76875 11.4312 2.76875C12.0125 2.76875 12.5938 2.76875 13.175 2.85625V4.875H11.9813C11.0375 4.875 10.8562 5.325 10.8562 5.98125V7.425H13.1063L12.8125 9.69375H10.8562V15.5H14.6688C14.8887 15.4984 15.0992 15.4103 15.2547 15.2547C15.4103 15.0992 15.4984 14.8887 15.5 14.6688V1.33125C15.4984 1.11129 15.4103 0.900811 15.2547 0.745275C15.0992 0.589738 14.8887 0.501635 14.6688 0.5V0.5Z\" fill=\"white\" />
                                                <path d=\"M14.6688 0.5H1.33125C1.11129 0.501635 0.900811 0.589738 0.745275 0.745275C0.589738 0.900811 0.501635 1.11129 0.5 1.33125V14.6688C0.501635 14.8887 0.589738 15.0992 0.745275 15.2547C0.900811 15.4103 1.11129 15.4984 1.33125 15.5H8.5125V9.7H6.5625V7.43125H8.5125V5.7625C8.5125 3.825 9.69375 2.76875 11.4312 2.76875C12.0125 2.76875 12.5938 2.76875 13.175 2.85625V4.875H11.9813C11.0375 4.875 10.8562 5.325 10.8562 5.98125V7.425H13.1063L12.8125 9.69375H10.8562V15.5H14.6688C14.8887 15.4984 15.0992 15.4103 15.2547 15.2547C15.4103 15.0992 15.4984 14.8887 15.5 14.6688V1.33125C15.4984 1.11129 15.4103 0.900811 15.2547 0.745275C15.0992 0.589738 14.8887 0.501635 14.6688 0.5V0.5Z\" fill=\"white\" />
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <svg width=\"16\" height=\"16\" viewBox=\"0 0 16 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                                <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M11.0306 1.89513C10.2398 1.859 10.0026 1.85137 8 1.85137V1.85131C5.99744 1.85131 5.76019 1.859 4.96938 1.89506C4.49378 1.90072 4.02269 1.98808 3.57669 2.15331C3.25324 2.27812 2.9595 2.46925 2.71436 2.7144C2.46922 2.95955 2.27811 3.2533 2.15331 3.57675C1.98808 4.02276 1.90072 4.49384 1.89506 4.96944C1.85894 5.76025 1.85131 5.9975 1.85131 8.00006C1.85131 10.0026 1.859 10.2399 1.89506 11.0307C1.90072 11.5063 1.98808 11.9774 2.15331 12.4234C2.27812 12.7468 2.46923 13.0405 2.71437 13.2857C2.95951 13.5308 3.25325 13.7219 3.57669 13.8467C4.02269 14.012 4.49378 14.0993 4.96938 14.105C5.76013 14.1411 5.99725 14.1487 8 14.1487C10.0028 14.1487 10.2399 14.1411 11.0306 14.105C11.5062 14.0993 11.9773 14.012 12.4233 13.8467C12.7467 13.7219 13.0405 13.5308 13.2856 13.2857C13.5308 13.0405 13.7219 12.7468 13.8467 12.4234C14.0119 11.9774 14.0993 11.5063 14.1049 11.0307C14.1411 10.2399 14.1487 10.0026 14.1487 8.00006C14.1487 5.9975 14.141 5.76025 14.1049 4.96944C14.0993 4.49384 14.0119 4.02276 13.8467 3.57675C13.7219 3.25331 13.5308 2.95958 13.2856 2.71444C13.0405 2.4693 12.7467 2.27818 12.4233 2.15338C11.9773 1.98814 11.5062 1.90079 11.0306 1.89513ZM4.90775 0.545125C5.70769 0.508625 5.96312 0.5 8 0.5C10.0369 0.5 10.2923 0.508625 11.0919 0.545438C11.7141 0.557899 12.3297 0.675778 12.9125 0.894062C13.4108 1.08672 13.8633 1.38135 14.2411 1.75907C14.6188 2.13679 14.9135 2.58927 15.1063 3.0875C15.3245 3.67018 15.4424 4.28566 15.4549 4.90775C15.4914 5.70769 15.5 5.96312 15.5 8C15.5 10.0369 15.4914 10.2923 15.4552 11.0919C15.4427 11.7141 15.3248 12.3297 15.1066 12.9125C14.9139 13.4108 14.6192 13.8633 14.2414 14.2411C13.8636 14.6189 13.4111 14.9136 12.9128 15.1063C12.33 15.3245 11.7144 15.4424 11.0922 15.4549C10.2923 15.4914 10.0369 15.5 8 15.5C5.96312 15.5 5.70769 15.4914 4.90806 15.4552C4.28586 15.4427 3.67028 15.3249 3.0875 15.1066C2.58921 14.9139 2.13667 14.6192 1.7589 14.2414C1.38112 13.8636 1.08645 13.4111 0.89375 12.9128C0.675466 12.33 0.557586 11.7144 0.545125 11.0922C0.508625 10.2923 0.5 10.0369 0.5 8C0.5 5.96312 0.508625 5.70769 0.545125 4.90806C0.557579 4.28586 0.675459 3.67028 0.89375 3.0875C1.08645 2.58921 1.38112 2.13667 1.7589 1.7589C2.13667 1.38112 2.58921 1.08645 3.0875 0.89375C3.67018 0.675493 4.28566 0.557614 4.90775 0.545125ZM12.0035 4.89644C12.5005 4.89644 12.9035 4.49349 12.9035 3.99644C12.9035 3.49938 12.5005 3.09644 12.0035 3.09644C11.5064 3.09644 11.1035 3.49938 11.1035 3.99644C11.1035 4.49349 11.5064 4.89644 12.0035 4.89644ZM7.99998 4.14868C7.23825 4.14868 6.49363 4.37456 5.86027 4.79776C5.22692 5.22095 4.73328 5.82245 4.44178 6.5262C4.15027 7.22995 4.074 8.00433 4.22261 8.75142C4.37122 9.49852 4.73802 10.1848 5.27665 10.7234C5.81527 11.262 6.50152 11.6288 7.24862 11.7774C7.99571 11.926 8.77009 11.8498 9.47384 11.5583C10.1776 11.2668 10.7791 10.7731 11.2023 10.1398C11.6255 9.50641 11.8514 8.76179 11.8514 8.00006C11.8514 6.97861 11.4456 5.999 10.7233 5.27672C10.001 4.55445 9.02143 4.14868 7.99998 4.14868ZM7.99998 10.5001C7.50553 10.5001 7.02218 10.3534 6.61106 10.0787C6.19993 9.80403 5.8795 9.41358 5.69028 8.95677C5.50106 8.49995 5.45156 7.99728 5.54802 7.51233C5.64448 7.02738 5.88258 6.58192 6.23221 6.23229C6.58185 5.88266 7.0273 5.64456 7.51226 5.54809C7.99721 5.45163 8.49988 5.50114 8.95669 5.69036C9.41351 5.87958 9.80395 6.20001 10.0787 6.61113C10.3534 7.02225 10.5 7.5056 10.5 8.00006C10.5 8.6631 10.2366 9.29898 9.76775 9.76782C9.29891 10.2367 8.66302 10.5001 7.99998 10.5001Z\" fill=\"white\" />
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <svg width=\"16\" height=\"16\" viewBox=\"0 0 16 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                                <path d=\"M14.3812 0.50002H1.61875C1.32795 0.498272 1.04803 0.610457 0.838927 0.812551C0.629823 1.01465 0.508163 1.29058 0.5 1.58127V14.375C0.506563 14.6662 0.627723 14.9431 0.837178 15.1455C1.04663 15.348 1.32748 15.4596 1.61875 15.4563H14.3812C14.6725 15.4596 14.9534 15.348 15.1628 15.1455C15.3723 14.9431 15.4934 14.6662 15.5 14.375V1.58127C15.4918 1.29058 15.3702 1.01465 15.1611 0.812551C14.952 0.610457 14.672 0.498272 14.3812 0.50002V0.50002ZM4.94375 13.2563H2.74375V6.12502H4.94375V13.2563ZM3.86875 5.13127C3.53097 5.13137 3.20655 4.99936 2.9648 4.76345C2.72306 4.52755 2.58316 4.20645 2.575 3.86877C2.56888 3.69723 2.59816 3.52626 2.66102 3.36653C2.72387 3.2068 2.81895 3.06172 2.94032 2.94034C3.0617 2.81897 3.20678 2.72389 3.36651 2.66104C3.52624 2.59818 3.69721 2.5689 3.86875 2.57502C4.19553 2.59777 4.50151 2.74364 4.72494 2.98317C4.94838 3.2227 5.07263 3.53808 5.07263 3.86565C5.07263 4.19321 4.94838 4.50859 4.72494 4.74812C4.50151 4.98765 4.19553 5.13352 3.86875 5.15627V5.13127ZM13.3 13.2125H11.125V9.72502C11.125 8.89377 11.125 7.81252 9.9625 7.81252C8.8 7.81252 8.625 8.72502 8.625 9.64377V13.175H6.4V6.12502H8.475V7.06252H8.51875C8.73143 6.69316 9.04155 6.38937 9.41522 6.18435C9.78888 5.97933 10.2117 5.88097 10.6375 5.90002C12.8812 5.90002 13.3 7.40002 13.3 9.30627V13.2125Z\" fill=\"#FFD335\" />
                                                <path d=\"M14.3812 0.50002H1.61875C1.32795 0.498272 1.04803 0.610457 0.838927 0.812551C0.629823 1.01465 0.508163 1.29058 0.5 1.58127V14.375C0.506563 14.6662 0.627723 14.9431 0.837178 15.1455C1.04663 15.348 1.32748 15.4596 1.61875 15.4563H14.3812C14.6725 15.4596 14.9534 15.348 15.1628 15.1455C15.3723 14.9431 15.4934 14.6662 15.5 14.375V1.58127C15.4918 1.29058 15.3702 1.01465 15.1611 0.812551C14.952 0.610457 14.672 0.498272 14.3812 0.50002V0.50002ZM4.94375 13.2563H2.74375V6.12502H4.94375V13.2563ZM3.86875 5.13127C3.53097 5.13137 3.20655 4.99936 2.9648 4.76345C2.72306 4.52755 2.58316 4.20645 2.575 3.86877C2.56888 3.69723 2.59816 3.52626 2.66102 3.36653C2.72387 3.2068 2.81895 3.06172 2.94032 2.94034C3.0617 2.81897 3.20678 2.72389 3.36651 2.66104C3.52624 2.59818 3.69721 2.5689 3.86875 2.57502C4.19553 2.59777 4.50151 2.74364 4.72494 2.98317C4.94838 3.2227 5.07263 3.53808 5.07263 3.86565C5.07263 4.19321 4.94838 4.50859 4.72494 4.74812C4.50151 4.98765 4.19553 5.13352 3.86875 5.15627V5.13127ZM13.3 13.2125H11.125V9.72502C11.125 8.89377 11.125 7.81252 9.9625 7.81252C8.8 7.81252 8.625 8.72502 8.625 9.64377V13.175H6.4V6.12502H8.475V7.06252H8.51875C8.73143 6.69316 9.04155 6.38937 9.41522 6.18435C9.78888 5.97933 10.2117 5.88097 10.6375 5.90002C12.8812 5.90002 13.3 7.40002 13.3 9.30627V13.2125Z\" fill=\"white\" />
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <svg width=\"18\" height=\"18\" viewBox=\"0 0 18 18\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                                <path d=\"M9 0.25C6.9714 0.263815 5.01064 0.982071 3.45313 2.2819C1.89562 3.58172 0.838154 5.38235 0.461624 7.37574C0.085095 9.36913 0.412903 11.4314 1.38897 13.2098C2.36504 14.9882 3.92871 16.3722 5.8125 17.125C5.68589 16.2965 5.68589 15.4535 5.8125 14.625L6.84375 10.25C6.68055 9.85378 6.59974 9.42847 6.60625 9C6.60625 7.7875 7.3125 6.875 8.1875 6.875C8.34601 6.87262 8.50317 6.90452 8.6482 6.96853C8.79323 7.03255 8.92272 7.12715 9.02778 7.24587C9.13284 7.36458 9.21101 7.50461 9.25691 7.65635C9.30282 7.80808 9.31538 7.96795 9.29375 8.125C9.29375 8.875 8.81875 10 8.56875 11.0375C8.51494 11.231 8.50854 11.4346 8.5501 11.6311C8.59165 11.8275 8.67993 12.0111 8.80747 12.1662C8.93501 12.3214 9.09805 12.4435 9.28278 12.5223C9.46752 12.601 9.66851 12.6341 9.86875 12.6188C11.4187 12.6188 12.6187 10.975 12.6187 8.6125C12.6343 8.13243 12.5497 7.65438 12.3702 7.20885C12.1907 6.76331 11.9203 6.36009 11.5763 6.02488C11.2323 5.68968 10.8222 5.42987 10.3721 5.26201C9.92209 5.09416 9.442 5.02195 8.9625 5.05C8.45056 5.02801 7.93948 5.11013 7.4602 5.29139C6.98092 5.47264 6.5434 5.74927 6.17412 6.10452C5.80485 6.45977 5.5115 6.88626 5.31184 7.35817C5.11217 7.83008 5.01033 8.33759 5.0125 8.85C5.00555 9.56384 5.22429 10.2616 5.6375 10.8438C5.66754 10.8771 5.68895 10.9174 5.69984 10.961C5.71074 11.0046 5.71079 11.0501 5.7 11.0938C5.63125 11.3688 5.48125 11.9688 5.45625 12.0875C5.43125 12.2063 5.325 12.2812 5.1625 12.2062C4.06875 11.6937 3.3875 10.1 3.3875 8.8125C3.3875 6.05625 5.39375 3.51875 9.16875 3.51875C12.2 3.51875 14.5625 5.68125 14.5625 8.575C14.5625 11.5875 12.6875 14.0125 10.0187 14.0125C9.62751 14.0261 9.23907 13.9418 8.8887 13.7671C8.53834 13.5925 8.23715 13.3331 8.0125 13.0125L7.46875 15.0938C7.20809 15.9026 6.84247 16.6738 6.38125 17.3875C7.23111 17.6387 8.11386 17.7609 9 17.75C11.3206 17.75 13.5462 16.8281 15.1872 15.1872C16.8281 13.5462 17.75 11.3206 17.75 9C17.75 6.67936 16.8281 4.45376 15.1872 2.81282C13.5462 1.17187 11.3206 0.25 9 0.25\" fill=\"#FFD335\" />
                                                <path d=\"M9 0.25C6.9714 0.263815 5.01064 0.982071 3.45313 2.2819C1.89562 3.58172 0.838154 5.38235 0.461624 7.37574C0.085095 9.36913 0.412903 11.4314 1.38897 13.2098C2.36504 14.9882 3.92871 16.3722 5.8125 17.125C5.68589 16.2965 5.68589 15.4535 5.8125 14.625L6.84375 10.25C6.68055 9.85378 6.59974 9.42847 6.60625 9C6.60625 7.7875 7.3125 6.875 8.1875 6.875C8.34601 6.87262 8.50317 6.90452 8.6482 6.96853C8.79323 7.03255 8.92272 7.12715 9.02778 7.24587C9.13284 7.36458 9.21101 7.50461 9.25691 7.65635C9.30282 7.80808 9.31538 7.96795 9.29375 8.125C9.29375 8.875 8.81875 10 8.56875 11.0375C8.51494 11.231 8.50854 11.4346 8.5501 11.6311C8.59165 11.8275 8.67993 12.0111 8.80747 12.1662C8.93501 12.3214 9.09805 12.4435 9.28278 12.5223C9.46752 12.601 9.66851 12.6341 9.86875 12.6188C11.4187 12.6188 12.6187 10.975 12.6187 8.6125C12.6343 8.13243 12.5497 7.65438 12.3702 7.20885C12.1907 6.76331 11.9203 6.36009 11.5763 6.02488C11.2323 5.68968 10.8222 5.42987 10.3721 5.26201C9.92209 5.09416 9.442 5.02195 8.9625 5.05C8.45056 5.02801 7.93948 5.11013 7.4602 5.29139C6.98092 5.47264 6.5434 5.74927 6.17412 6.10452C5.80485 6.45977 5.5115 6.88626 5.31184 7.35817C5.11217 7.83008 5.01033 8.33759 5.0125 8.85C5.00555 9.56384 5.22429 10.2616 5.6375 10.8438C5.66754 10.8771 5.68895 10.9174 5.69984 10.961C5.71074 11.0046 5.71079 11.0501 5.7 11.0938C5.63125 11.3688 5.48125 11.9688 5.45625 12.0875C5.43125 12.2063 5.325 12.2812 5.1625 12.2062C4.06875 11.6937 3.3875 10.1 3.3875 8.8125C3.3875 6.05625 5.39375 3.51875 9.16875 3.51875C12.2 3.51875 14.5625 5.68125 14.5625 8.575C14.5625 11.5875 12.6875 14.0125 10.0187 14.0125C9.62751 14.0261 9.23907 13.9418 8.8887 13.7671C8.53834 13.5925 8.23715 13.3331 8.0125 13.0125L7.46875 15.0938C7.20809 15.9026 6.84247 16.6738 6.38125 17.3875C7.23111 17.6387 8.11386 17.7609 9 17.75C11.3206 17.75 13.5462 16.8281 15.1872 15.1872C16.8281 13.5462 17.75 11.3206 17.75 9C17.75 6.67936 16.8281 4.45376 15.1872 2.81282C13.5462 1.17187 11.3206 0.25 9 0.25\" fill=\"white\" />
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <svg width=\"18\" height=\"14\" viewBox=\"0 0 18 14\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                                <path d=\"M17.3817 2.7875C17.2821 2.41753 17.0871 2.0802 16.8162 1.80927C16.5453 1.53835 16.2079 1.34334 15.838 1.24375C14.4755 0.875 9.00047 0.875 9.00047 0.875C9.00047 0.875 3.52547 0.875 2.16297 1.24375C1.79299 1.34334 1.45567 1.53835 1.18474 1.80927C0.913819 2.0802 0.718806 2.41753 0.61922 2.7875C0.364811 4.17704 0.241353 5.58739 0.25047 7C0.241353 8.41261 0.364811 9.82296 0.61922 11.2125C0.718806 11.5825 0.913819 11.9198 1.18474 12.1907C1.45567 12.4617 1.79299 12.6567 2.16297 12.7563C3.52547 13.125 9.00047 13.125 9.00047 13.125C9.00047 13.125 14.4755 13.125 15.838 12.7563C16.2079 12.6567 16.5453 12.4617 16.8162 12.1907C17.0871 11.9198 17.2821 11.5825 17.3817 11.2125C17.6361 9.82296 17.7596 8.41261 17.7505 7C17.7596 5.58739 17.6361 4.17704 17.3817 2.7875V2.7875ZM7.25047 9.625V4.375L11.7942 7L7.25047 9.625Z\" fill=\"#FFD335\" />
                                                <path d=\"M17.3817 2.7875C17.2821 2.41753 17.0871 2.0802 16.8162 1.80927C16.5453 1.53835 16.2079 1.34334 15.838 1.24375C14.4755 0.875 9.00047 0.875 9.00047 0.875C9.00047 0.875 3.52547 0.875 2.16297 1.24375C1.79299 1.34334 1.45567 1.53835 1.18474 1.80927C0.913819 2.0802 0.718806 2.41753 0.61922 2.7875C0.364811 4.17704 0.241353 5.58739 0.25047 7C0.241353 8.41261 0.364811 9.82296 0.61922 11.2125C0.718806 11.5825 0.913819 11.9198 1.18474 12.1907C1.45567 12.4617 1.79299 12.6567 2.16297 12.7563C3.52547 13.125 9.00047 13.125 9.00047 13.125C9.00047 13.125 14.4755 13.125 15.838 12.7563C16.2079 12.6567 16.5453 12.4617 16.8162 12.1907C17.0871 11.9198 17.2821 11.5825 17.3817 11.2125C17.6361 9.82296 17.7596 8.41261 17.7505 7C17.7596 5.58739 17.6361 4.17704 17.3817 2.7875V2.7875ZM7.25047 9.625V4.375L11.7942 7L7.25047 9.625Z\" fill=\"white\" />
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"header-main\">
            <div class=\"container\">
                <div class=\"header-one-wrapper\">
                    <div class=\"left-side-header\">
                        <a href=\"index.html\" class=\"logo-area\">
                            <img src=\"assets/images/logo/logo-1.png\" alt=\"logo\">
                        </a>
                    </div>

                    <div class=\"main-nav-one\">
                        <nav>
                            <ul>
                                <li class=\"has-dropdown\" style=\"position: static;\">
                                    <a class=\"nav-link\" href=\"#\">Home</a>

                                    <ul class=\"submenu\">
                                        <li>
                           <a href=\"{{ path('app_home') }}\">Home</a>
                                        </li>
                                        
                                    </ul>
                                </li>
                                <li class=\"has-dropdown\">
                                    <a class=\"nav-link\" href=\"#\">Pages</a>
                                    <ul class=\"submenu\">
                                        <li><a href=\"about.html\">About Us</a></li>
                                        <li><a href=\"team.html\">Team</a></li>
                                        <li><a href=\"team-details.html\">Team Details</a></li>
                                        <li><a href=\"event.html\">Event</a></li>
                                        <li><a href=\"event-details.html\">Event Details</a></li>
                                        <li><a href=\"program-details.html\">Program Details</a></li>
                                        <li><a href=\"pricing.html\">Pricing</a></li>
                                        <li><a href=\"pricing-two.html\">Pricing Two</a></li>
                                    </ul>
                                </li>
                                <li class=\"has-dropdown\">
                                    <a class=\"nav-link\" href=\"#\">Classes</a>
                                    <ul class=\"submenu\">
                                        <li><a href=\"{{path('app_cours')}}\">Courses</a></li>
                                        <li><a href=\"course-details.html\">Détails des cours</a></li>
                                    </ul>
                                </li>
                                <li class=\"has-dropdown\">
                                    <a class=\"nav-link\" href=\"#\">Blog</a>
                                    <ul class=\"submenu\">
                                        <li><a href=\"blog.html\">Blog</a></li>
                                        <li><a href=\"blog-grid.html\">Blog Grid</a></li>
                                        <li><a href=\"blog-list.html\">Blog List</a></li>
                                        <li><a href=\"blog-right-sidebar.html\">Blog Right Sidebar</a></li>
                                        <li><a href=\"blog-left-sidebar.html\">Blog Left Sidebar</a></li>
                                        <li><a href=\"blog-details.html\">Blog Details</a></li>
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
                            <a href=\"registration.html\" class=\"rts-btn btn-primary\">View More</a>
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
    </header>
    <!-- header style end -->
    <!-- header style end -->

    <!-- Bread-Crumb style -->

    <!-- bread crumb area -->
    <div class=\"rts-breadcrumb-area rts-section-gap bg_image\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"breadcrumb-main-wrapper\">
                        <div class=\"pagination-wrapper\">
                            <a href=\"index.html\">Home</a>
                            <i class=\"fa-regular fa-chevron-right\"></i>
                            <a class=\"active\" href=\"course.html\">Détails des cours</a>
                        </div>
                        <!-- breadcrumb pagination area -->
                        <h2 class=\"title\">Détails des cours</h2>
                        <!-- breadcrumb pagination area end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bread crumb area end -->

    <!-- Bread-Crumb style End -->

    <!-- course area start -->
    <div class=\"rts-course-details-area rts-section-gap rts-shape-move\">
        <div class=\"container\">
            <div class=\"row g-5 sticky-column-wrap\">
                <div class=\"col-lg-7\">
                    <div class=\"left-side-content\">
                        <div class=\"video-area\">
                            <div class=\"image\">
                                <img src=\"assets/images/course/abc.jpg\" alt=\"\">
                                <div class=\"video-btn-area\">
                                    <div class=\"vedio-icone\">
                                        <a class=\"video-play-button play-video popup-video\" href=\"https://www.youtube.com/watch?v=DAFsRQZ1Lss\">
                                            <span class=\"play-icon\">
                                                <i class=\"fa-sharp fa-solid fa-play\"></i>
                                            </span>
                                        </a>
                                        <div class=\"video-overlay\">
                                            <a class=\"video-overlay-close\">×</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"course-details-btn-wrapper full-width pb--20\">
                            <ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
                                <li class=\"nav-item\" role=\"presentation\">
                                    <button class=\"nav-link active\" id=\"home-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#home\" type=\"button\" role=\"tab\" aria-controls=\"home\" aria-selected=\"true\">Information du cours</button>
                                </li>
                                <li class=\"nav-item\" role=\"presentation\">
                                    <button class=\"nav-link \" id=\"review-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#review\" type=\"button\" role=\"tab\" aria-controls=\"review\" aria-selected=\"false\">Avis</button>
                                </li>
                            </ul>
                        </div>
                        <div class=\"tab-content mt--50\" id=\"myTabContent\">
                            <div class=\"tab-pane fade  show active\" id=\"home\" role=\"tabpanel\" aria-labelledby=\"home-tab\">
                                <div class=\"course-content-wrapper\">
                                    <h5 class=\"title mb--10\">Description du cours</h5>
                                    <p class=\"disc\">
                                        If filmmaking is your passion but you never went to film school you’ve come to the right place. Here, you will get hands-on
                                        experience and acquire skills that you never would’ve elsewhere like learning how to make feature films on your own,
                                        making do with any equipment, and doing it all faster and better.
                                    </p>
                                    <h5 class=\"title mb--10\">Description</h5>
                                    <p class=\"disc\">
                                        You will be taught the full process of filmmaking starting from planning, filming, and editing. Not only that but you will learn
                                        how to make films that look way more expensive than they are without spending a whole lot of time or money on them.
                                        In this course, we’ll focus on a few different forms of films from video ads, to movie trailers to travel vlogs, you name it.
                                        In addition to that, we’ll also go over Adobe Premiere Pro in detail so that you get an idea of all that you need to know to become an editing genius. And, if you feel like you’re stuck at any point then you can always ask for guidance and I’ll reply as soon as possible.
                                    </p>
                                    <p class=\"disc\">
                                        With this course, you also have access to a whole lot of resources not only for reference but also free media like aerial video shots, background music, fonts, and more. These all come with proper licensing so you can use them in your production worry free.
                                    </p>
                                    <div class=\"module-wrapper\">
                                        <h6 class=\"title mb--10\">What Will You Learn?</h6>
                                        <div class=\"inner-content\">
                                            <div class=\"single-wrapper\">
                                                <div class=\"single-codule\">
                                                    <i class=\"fa-regular fa-check\"></i>
                                                    <p>Learn the basics of computer programming</p>
                                                </div>
                                                <div class=\"single-codule\">
                                                    <i class=\"fa-regular fa-check\"></i>
                                                    <p>Differences between ads, trailers, vlogs, etc</p>
                                                </div>
                                                <div class=\"single-codule\">
                                                    <i class=\"fa-regular fa-check\"></i>
                                                    <p>Learn JavaScript</p>
                                                </div>
                                            </div>
                                            <div class=\"single-wrapper\">
                                                <div class=\"single-codule\">
                                                    <i class=\"fa-regular fa-check\"></i>
                                                    <p>Learn CSS</p>
                                                </div>
                                                <div class=\"single-codule\">
                                                    <i class=\"fa-regular fa-check\"></i>
                                                    <p>Tools you need for best results</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class=\"tab-pane fade\" id=\"review\" role=\"tabpanel\" aria-labelledby=\"review-tab\">
                                <div class=\"rating-main-wrapper\">
                                    <!-- single-top-rating -->
                                    <div class=\"rating-top-main-wrapper\">
                                        <!-- rating area start -->
                                        <div class=\"rating-area-main-wrapper\">
                                            <h2 class=\"title\">4.5</h2>
                                            <div class=\"stars-wrapper\">
                                                <i class=\"fa-solid fa-star\"></i>
                                                <i class=\"fa-solid fa-star\"></i>
                                                <i class=\"fa-solid fa-star\"></i>
                                                <i class=\"fa-solid fa-star\"></i>
                                                <i class=\"fa-regular fa-star\"></i>
                                            </div>
                                            <span>Total 2 Ratings</span>
                                        </div>
                                        <!-- rating area end -->
                                        <div class=\"progress-wrapper-main\">
                                            <div class=\"single-progress-area-h\" data-sal-delay=\"150\" data-sal=\"slide-up\" data-sal-duration=\"800\">
                                                <div class=\"progress-top\">
                                                    <i class=\"fa-regular fa-star\"></i>
                                                    <span class=\"parcent\">
                                                        5
                                                    </span>
                                                </div>
                                                <div class=\"progress\">
                                                    <div class=\"progress-bar wow fadeInLeft bg--primary\" role=\"progressbar\" style=\"width: 100%\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                    </div>
                                                </div>
                                                <div class=\"end\">
                                                    <span>25 Rating</span>
                                                </div>
                                            </div>
                                            <div class=\"single-progress-area-h\" data-sal-delay=\"150\" data-sal=\"slide-up\" data-sal-duration=\"800\">
                                                <div class=\"progress-top\">
                                                    <i class=\"fa-regular fa-star\"></i>
                                                    <span class=\"parcent\">
                                                        4
                                                    </span>
                                                </div>
                                                <div class=\"progress\">
                                                    <div class=\"progress-bar wow fadeInLeft bg--primary\" role=\"progressbar\" style=\"width: 80%\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                    </div>
                                                </div>
                                                <div class=\"end\">
                                                    <span>20 Rating</span>
                                                </div>
                                            </div>
                                            <div class=\"single-progress-area-h\" data-sal-delay=\"150\" data-sal=\"slide-up\" data-sal-duration=\"800\">
                                                <div class=\"progress-top\">
                                                    <i class=\"fa-regular fa-star\"></i>
                                                    <span class=\"parcent\">
                                                        3
                                                    </span>
                                                </div>
                                                <div class=\"progress\">
                                                    <div class=\"progress-bar wow fadeInLeft bg--primary\" role=\"progressbar\" style=\"width: 60%\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                    </div>
                                                </div>
                                                <div class=\"end\">
                                                    <span>5 Rating</span>
                                                </div>
                                            </div>
                                            <div class=\"single-progress-area-h\" data-sal-delay=\"150\" data-sal=\"slide-up\" data-sal-duration=\"800\">
                                                <div class=\"progress-top\">
                                                    <i class=\"fa-regular fa-star\"></i>
                                                    <span class=\"parcent\">
                                                        2
                                                    </span>
                                                </div>
                                                <div class=\"progress\">
                                                    <div class=\"progress-bar wow fadeInLeft bg--primary\" role=\"progressbar\" style=\"width: 40%\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                    </div>
                                                </div>
                                                <div class=\"end\">
                                                    <span>2 Rating</span>
                                                </div>
                                            </div>
                                            <div class=\"single-progress-area-h\" data-sal-delay=\"150\" data-sal=\"slide-up\" data-sal-duration=\"800\">
                                                <div class=\"progress-top\">
                                                    <i class=\"fa-regular fa-star\"></i>
                                                    <span class=\"parcent\">
                                                        1
                                                    </span>
                                                </div>
                                                <div class=\"progress\">
                                                    <div class=\"progress-bar wow fadeInLeft bg--primary\" role=\"progressbar\" style=\"width: 20%\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                    </div>
                                                </div>
                                                <div class=\"end\">
                                                    <span>1 Rating</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-top-rating end-->
                                    <!-- person indevidual rating area  -->
                                    <div class=\"indevidual-rating-area\">
                                        <!-- author-area -->
                                        <div class=\"author-area\">
                                            <img src=\"assets/images/course/28.jpg\" width=\"60\" alt=\"instructor\">
                                            <div class=\"information\">
                                                <span>William U.</span>
                                                <div class=\"stars\">
                                                    <i class=\"fa-solid fa-star\"></i>
                                                    <i class=\"fa-solid fa-star\"></i>
                                                    <i class=\"fa-solid fa-star\"></i>
                                                    <i class=\"fa-solid fa-star\"></i>
                                                    <i class=\"fa-regular fa-star\"></i>
                                                    <span class=\"ml--30\">a week ago</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- author-area end -->
                                        <p class=\"disc\">
                                            I still have a lot of studying to do using this course and the other practice exams, but so far it's been great! I have not taken my Security+ exam as well, so I'll update this at a later time.
                                        </p>
                                        <div class=\"like-love-area\">
                                            <a href=\"#\">
                                                <i class=\"fa-sharp fa-light fa-thumbs-up\"></i>
                                            </a>
                                            <a href=\"#\">
                                                <i class=\"fa-regular fa-heart\"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- person indevidual rating area end -->
                                    <!-- person indevidual rating area  -->
                                    <div class=\"indevidual-rating-area\">
                                        <!-- author-area -->
                                        <div class=\"author-area\">
                                            <img src=\"assets/images/course/29.jpg\" width=\"60\" alt=\"instructor\">
                                            <div class=\"information\">
                                                <span>William U.</span>
                                                <div class=\"stars\">
                                                    <i class=\"fa-solid fa-star\"></i>
                                                    <i class=\"fa-solid fa-star\"></i>
                                                    <i class=\"fa-solid fa-star\"></i>
                                                    <i class=\"fa-solid fa-star\"></i>
                                                    <i class=\"fa-regular fa-star\"></i>
                                                    <span class=\"ml--30\">a week ago</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- author-area end -->
                                        <p class=\"disc\">
                                            I still have a lot of studying to do using this course and the other practice exams, but so far it's been great! I have not taken my Security+ exam as well, so I'll update this at a later time.
                                        </p>
                                        <div class=\"like-love-area\">
                                            <a href=\"#\">
                                                <i class=\"fa-sharp fa-light fa-thumbs-up\"></i>
                                            </a>
                                            <a href=\"#\">
                                                <i class=\"fa-regular fa-heart\"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- person indevidual rating area end -->
                                </div>
                            </div>
                        </div>
                        <div class=\"course-content-wrapper-main\">
                            <h5 class=\"title\">Course Content</h5>

                            <!-- course content accordion area -->
                            <div class=\"accordion mt--30 mb--50\" id=\"accordionExample\">
                                <div class=\"accordion-item\">
                                    <h2 class=\"accordion-header\" id=\"headingOne\">
                                        <button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                                            <span>Introduction</span>
                                            <span>3 Lectures . 9 min</span>
                                        </button>
                                    </h2>
                                    <div id=\"collapseOne\" class=\"accordion-collapse collapse show\" aria-labelledby=\"headingOne\" data-bs-parent=\"#accordionExample\">
                                        <div class=\"accordion-body\">
                                            <!-- play single area start -->
                                            <a href=\"#\" class=\"play-vedio-wrapper\">
                                                <div class=\"left\">
                                                    <i class=\"fa-light fa-circle-play\"></i>
                                                    <span>Introduction to the course</span>
                                                </div>
                                                <div class=\"right\">
                                                    <span class=\"play\">Preview</span>
                                                    <span>9 min</span>
                                                </div>
                                            </a>
                                            <!-- play single area end -->
                                            <!-- play single area start -->
                                            <a href=\"#\" class=\"play-vedio-wrapper\">
                                                <div class=\"left\">
                                                    <i class=\"fa-light fa-circle-play\"></i>
                                                    <span>Introduction to the course</span>
                                                </div>
                                                <div class=\"right\">
                                                    <span class=\"play\">Preview</span>
                                                    <span>9 min</span>
                                                </div>
                                            </a>
                                            <!-- play single area end -->
                                            <!-- play single area start -->
                                            <a href=\"#\" class=\"play-vedio-wrapper\">
                                                <div class=\"left\">
                                                    <i class=\"fa-light fa-circle-play\"></i>
                                                    <span>Introduction to the course</span>
                                                </div>
                                                <div class=\"right\">
                                                    <i class=\"fa-regular fa-lock\"></i>
                                                </div>
                                            </a>
                                            <!-- play single area end -->
                                        </div>
                                    </div>
                                </div>
                                <div class=\"accordion-item\">
                                    <h2 class=\"accordion-header\" id=\"headingTwo\">
                                        <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
                                            <span>Learn to Storyboard</span>
                                            <span>7 Lectures . 120 min</span>
                                        </button>
                                    </h2>
                                    <div id=\"collapseTwo\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingTwo\" data-bs-parent=\"#accordionExample\">
                                        <div class=\"accordion-body\">
                                            <!-- play single area start -->
                                            <a href=\"#\" class=\"play-vedio-wrapper\">
                                                <div class=\"left\">
                                                    <i class=\"fa-light fa-circle-play\"></i>
                                                    <span>Become a storyboard artist</span>
                                                </div>
                                                <div class=\"right\">
                                                    <i class=\"fa-regular fa-lock\"></i>
                                                </div>
                                            </a>
                                            <!-- play single area end -->
                                            <!-- play single area start -->
                                            <a href=\"#\" class=\"play-vedio-wrapper\">
                                                <div class=\"left\">
                                                    <i class=\"fa-light fa-circle-play\"></i>
                                                    <span>storyboard artist</span>
                                                </div>
                                                <div class=\"right\">
                                                    <i class=\"fa-regular fa-lock\"></i>
                                                </div>
                                            </a>
                                            <!-- play single area end -->
                                            <!-- play single area start -->
                                            <a href=\"#\" class=\"play-vedio-wrapper\">
                                                <div class=\"left\">
                                                    <i class=\"fa-light fa-circle-play\"></i>
                                                    <span>Introduction PHP</span>
                                                </div>
                                                <div class=\"right\">
                                                    <i class=\"fa-regular fa-lock\"></i>
                                                </div>
                                            </a>
                                            <!-- play single area end -->
                                            <!-- play single area start -->
                                            <a href=\"#\" class=\"play-vedio-wrapper\">
                                                <div class=\"left\">
                                                    <i class=\"fa-light fa-circle-play\"></i>
                                                    <span>LEarning Fundamentsl Elementor</span>
                                                </div>
                                                <div class=\"right\">
                                                    <i class=\"fa-regular fa-lock\"></i>
                                                </div>
                                            </a>
                                            <!-- play single area end -->
                                            <!-- play single area start -->
                                            <a href=\"#\" class=\"play-vedio-wrapper\">
                                                <div class=\"left\">
                                                    <i class=\"fa-light fa-circle-play\"></i>
                                                    <span>Enter to the course</span>
                                                </div>
                                                <div class=\"right\">
                                                    <i class=\"fa-regular fa-lock\"></i>
                                                </div>
                                            </a>
                                            <!-- play single area end -->
                                            <!-- play single area start -->
                                            <a href=\"#\" class=\"play-vedio-wrapper\">
                                                <div class=\"left\">
                                                    <i class=\"fa-light fa-circle-play\"></i>
                                                    <span>Main Part of the course</span>
                                                </div>
                                                <div class=\"right\">
                                                    <i class=\"fa-regular fa-lock\"></i>
                                                </div>
                                            </a>
                                            <!-- play single area end -->
                                            <!-- play single area start -->
                                            <a href=\"#\" class=\"play-vedio-wrapper\">
                                                <div class=\"left\">
                                                    <i class=\"fa-light fa-circle-play\"></i>
                                                    <span>Function About PHP</span>
                                                </div>
                                                <div class=\"right\">
                                                    <i class=\"fa-regular fa-lock\"></i>
                                                </div>
                                            </a>
                                            <!-- play single area end -->
                                        </div>
                                    </div>
                                </div>
                                <div class=\"accordion-item\">
                                    <h2 class=\"accordion-header\" id=\"headingThree\">
                                        <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
                                            <span>How to draw characters, layouts, and scenes</span>
                                            <span>7 Lectures . 83 min</span>
                                        </button>
                                    </h2>
                                    <div id=\"collapseThree\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingThree\" data-bs-parent=\"#accordionExample\">
                                        <div class=\"accordion-body\">
                                            <!-- play single area start -->
                                            <a href=\"#\" class=\"play-vedio-wrapper\">
                                                <div class=\"left\">
                                                    <i class=\"fa-light fa-circle-play\"></i>
                                                    <span>Become a storyboard artist</span>
                                                </div>
                                                <div class=\"right\">
                                                    <i class=\"fa-regular fa-lock\"></i>
                                                </div>
                                            </a>
                                            <!-- play single area end -->
                                            <!-- play single area start -->
                                            <a href=\"#\" class=\"play-vedio-wrapper\">
                                                <div class=\"left\">
                                                    <i class=\"fa-light fa-circle-play\"></i>
                                                    <span>storyboard artist</span>
                                                </div>
                                                <div class=\"right\">
                                                    <i class=\"fa-regular fa-lock\"></i>
                                                </div>
                                            </a>
                                            <!-- play single area end -->
                                            <!-- play single area start -->
                                            <a href=\"#\" class=\"play-vedio-wrapper\">
                                                <div class=\"left\">
                                                    <i class=\"fa-light fa-circle-play\"></i>
                                                    <span>Introduction PHP</span>
                                                </div>
                                                <div class=\"right\">
                                                    <i class=\"fa-regular fa-lock\"></i>
                                                </div>
                                            </a>
                                            <!-- play single area end -->
                                            <!-- play single area start -->
                                            <a href=\"#\" class=\"play-vedio-wrapper\">
                                                <div class=\"left\">
                                                    <i class=\"fa-light fa-circle-play\"></i>
                                                    <span>LEarning Fundamentsl Elementor</span>
                                                </div>
                                                <div class=\"right\">
                                                    <i class=\"fa-regular fa-lock\"></i>
                                                </div>
                                            </a>
                                            <!-- play single area end -->
                                            <!-- play single area start -->
                                            <a href=\"#\" class=\"play-vedio-wrapper\">
                                                <div class=\"left\">
                                                    <i class=\"fa-light fa-circle-play\"></i>
                                                    <span>Enter to the course</span>
                                                </div>
                                                <div class=\"right\">
                                                    <i class=\"fa-regular fa-lock\"></i>
                                                </div>
                                            </a>
                                            <!-- play single area end -->
                                            <!-- play single area start -->
                                            <a href=\"#\" class=\"play-vedio-wrapper\">
                                                <div class=\"left\">
                                                    <i class=\"fa-light fa-circle-play\"></i>
                                                    <span>Main Part of the course</span>
                                                </div>
                                                <div class=\"right\">
                                                    <i class=\"fa-regular fa-lock\"></i>
                                                </div>
                                            </a>
                                            <!-- play single area end -->
                                            <!-- play single area start -->
                                            <a href=\"#\" class=\"play-vedio-wrapper\">
                                                <div class=\"left\">
                                                    <i class=\"fa-light fa-circle-play\"></i>
                                                    <span>Function About PHP</span>
                                                </div>
                                                <div class=\"right\">
                                                    <i class=\"fa-regular fa-lock\"></i>
                                                </div>
                                            </a>
                                            <!-- play single area end -->
                                        </div>
                                    </div>
                                </div>
                                <div class=\"accordion-item\">
                                    <h2 class=\"accordion-header\" id=\"headingFour\">
                                        <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseFour\" aria-expanded=\"false\" aria-controls=\"collapseFour\">
                                            <span>1-point and 2-point perspective</span>
                                            <span>7 Lectures . 72 min</span>
                                        </button>
                                    </h2>
                                    <div id=\"collapseFour\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingFour\" data-bs-parent=\"#accordionExample\">
                                        <div class=\"accordion-body\">
                                            <!-- play single area start -->
                                            <a href=\"#\" class=\"play-vedio-wrapper\">
                                                <div class=\"left\">
                                                    <i class=\"fa-light fa-circle-play\"></i>
                                                    <span>Become a storyboard artist</span>
                                                </div>
                                                <div class=\"right\">
                                                    <i class=\"fa-regular fa-lock\"></i>
                                                </div>
                                            </a>
                                            <!-- play single area end -->
                                            <!-- play single area start -->
                                            <a href=\"#\" class=\"play-vedio-wrapper\">
                                                <div class=\"left\">
                                                    <i class=\"fa-light fa-circle-play\"></i>
                                                    <span>storyboard artist</span>
                                                </div>
                                                <div class=\"right\">
                                                    <i class=\"fa-regular fa-lock\"></i>
                                                </div>
                                            </a>
                                            <!-- play single area end -->
                                            <!-- play single area start -->
                                            <a href=\"#\" class=\"play-vedio-wrapper\">
                                                <div class=\"left\">
                                                    <i class=\"fa-light fa-circle-play\"></i>
                                                    <span>Introduction PHP</span>
                                                </div>
                                                <div class=\"right\">
                                                    <i class=\"fa-regular fa-lock\"></i>
                                                </div>
                                            </a>
                                            <!-- play single area end -->
                                            <!-- play single area start -->
                                            <a href=\"#\" class=\"play-vedio-wrapper\">
                                                <div class=\"left\">
                                                    <i class=\"fa-light fa-circle-play\"></i>
                                                    <span>LEarning Fundamentsl Elementor</span>
                                                </div>
                                                <div class=\"right\">
                                                    <i class=\"fa-regular fa-lock\"></i>
                                                </div>
                                            </a>
                                            <!-- play single area end -->
                                            <!-- play single area start -->
                                            <a href=\"#\" class=\"play-vedio-wrapper\">
                                                <div class=\"left\">
                                                    <i class=\"fa-light fa-circle-play\"></i>
                                                    <span>Enter to the course</span>
                                                </div>
                                                <div class=\"right\">
                                                    <i class=\"fa-regular fa-lock\"></i>
                                                </div>
                                            </a>
                                            <!-- play single area end -->
                                            <!-- play single area start -->
                                            <a href=\"#\" class=\"play-vedio-wrapper\">
                                                <div class=\"left\">
                                                    <i class=\"fa-light fa-circle-play\"></i>
                                                    <span>Main Part of the course</span>
                                                </div>
                                                <div class=\"right\">
                                                    <i class=\"fa-regular fa-lock\"></i>
                                                </div>
                                            </a>
                                            <!-- play single area end -->
                                            <!-- play single area start -->
                                            <a href=\"#\" class=\"play-vedio-wrapper\">
                                                <div class=\"left\">
                                                    <i class=\"fa-light fa-circle-play\"></i>
                                                    <span>Function About PHP</span>
                                                </div>
                                                <div class=\"right\">
                                                    <i class=\"fa-regular fa-lock\"></i>
                                                </div>
                                            </a>
                                            <!-- play single area end -->
                                        </div>
                                    </div>
                                </div>
                                <div class=\"accordion-item\">
                                    <h2 class=\"accordion-header\" id=\"headingFive\">
                                        <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseFive\" aria-expanded=\"false\" aria-controls=\"collapseFive\">
                                            <span>Digital drawing application</span>
                                            <span>7 Lectures . 90 min</span>
                                        </button>
                                    </h2>
                                    <div id=\"collapseFive\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingFive\" data-bs-parent=\"#accordionExample\">
                                        <div class=\"accordion-body\">
                                            <!-- play single area start -->
                                            <a href=\"#\" class=\"play-vedio-wrapper\">
                                                <div class=\"left\">
                                                    <i class=\"fa-light fa-circle-play\"></i>
                                                    <span>Become a storyboard artist</span>
                                                </div>
                                                <div class=\"right\">
                                                    <i class=\"fa-regular fa-lock\"></i>
                                                </div>
                                            </a>
                                            <!-- play single area end -->
                                            <!-- play single area start -->
                                            <a href=\"#\" class=\"play-vedio-wrapper\">
                                                <div class=\"left\">
                                                    <i class=\"fa-light fa-circle-play\"></i>
                                                    <span>storyboard artist</span>
                                                </div>
                                                <div class=\"right\">
                                                    <i class=\"fa-regular fa-lock\"></i>
                                                </div>
                                            </a>
                                            <!-- play single area end -->
                                            <!-- play single area start -->
                                            <a href=\"#\" class=\"play-vedio-wrapper\">
                                                <div class=\"left\">
                                                    <i class=\"fa-light fa-circle-play\"></i>
                                                    <span>Introduction PHP</span>
                                                </div>
                                                <div class=\"right\">
                                                    <i class=\"fa-regular fa-lock\"></i>
                                                </div>
                                            </a>
                                            <!-- play single area end -->
                                            <!-- play single area start -->
                                            <a href=\"#\" class=\"play-vedio-wrapper\">
                                                <div class=\"left\">
                                                    <i class=\"fa-light fa-circle-play\"></i>
                                                    <span>LEarning Fundamentsl Elementor</span>
                                                </div>
                                                <div class=\"right\">
                                                    <i class=\"fa-regular fa-lock\"></i>
                                                </div>
                                            </a>
                                            <!-- play single area end -->
                                            <!-- play single area start -->
                                            <a href=\"#\" class=\"play-vedio-wrapper\">
                                                <div class=\"left\">
                                                    <i class=\"fa-light fa-circle-play\"></i>
                                                    <span>Enter to the course</span>
                                                </div>
                                                <div class=\"right\">
                                                    <i class=\"fa-regular fa-lock\"></i>
                                                </div>
                                            </a>
                                            <!-- play single area end -->
                                            <!-- play single area start -->
                                            <a href=\"#\" class=\"play-vedio-wrapper\">
                                                <div class=\"left\">
                                                    <i class=\"fa-light fa-circle-play\"></i>
                                                    <span>Main Part of the course</span>
                                                </div>
                                                <div class=\"right\">
                                                    <i class=\"fa-regular fa-lock\"></i>
                                                </div>
                                            </a>
                                            <!-- play single area end -->
                                            <!-- play single area start -->
                                            <a href=\"#\" class=\"play-vedio-wrapper\">
                                                <div class=\"left\">
                                                    <i class=\"fa-light fa-circle-play\"></i>
                                                    <span>Function About PHP</span>
                                                </div>
                                                <div class=\"right\">
                                                    <i class=\"fa-regular fa-lock\"></i>
                                                </div>
                                            </a>
                                            <!-- play single area end -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- course content accordion area end -->
                        </div>
                        <div class=\"single-instructor-area-details\">
                            <a href=\"#\" class=\"thumbnail\">
                                <img src=\"assets/images/course/28.jpg\" width=\"205\" alt=\"instructor\">
                            </a>
                            <div class=\"inner-instrustor-area\">
                                <h5 class=\"title\">William U.</h5>
                                <span class=\"deg\">Advanced Educator</span>
                                <div class=\"stars-area-wrapper\">
                                    <div class=\"stars-area\">
                                        <span>4.5</span>
                                        <i class=\"fa-solid fa-star\"></i>
                                        <i class=\"fa-solid fa-star\"></i>
                                        <i class=\"fa-solid fa-star\"></i>
                                        <i class=\"fa-solid fa-star\"></i>
                                        <i class=\"fa-regular fa-star\"></i>
                                    </div>
                                    <div class=\"users-area\">
                                        <i class=\"fa-light fa-users\"></i>
                                        <span>1350 Students</span>
                                    </div>
                                    <div class=\"users-area\">
                                        <i class=\"fa-light fa-video\"></i>
                                        <span>26 Courses</span>
                                    </div>
                                </div>
                                <p class=\"disc\">
                                    William U. Peña, MBA, CISSP No. 349867, is a former college professor and the lead instructor at Dion Training Solutions.
                                </p>
                                <div class=\"follow-us\">
                                    <span>Follow</span>
                                    <ul>
                                        <li><a href=\"#\"><i class=\"fa-brands fa-facebook\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa-brands fa-instagram\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa-brands fa-linkedin\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa-brands fa-pinterest\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa-brands fa-youtube\"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"rating-main-wrapper\">
                            <!-- single-top-rating -->
                            <div class=\"rating-top-main-wrapper\">
                                <!-- rating area start -->
                                <div class=\"rating-area-main-wrapper\">
                                    <h2 class=\"title\">4.5</h2>
                                    <div class=\"stars-wrapper\">
                                        <i class=\"fa-solid fa-star\"></i>
                                        <i class=\"fa-solid fa-star\"></i>
                                        <i class=\"fa-solid fa-star\"></i>
                                        <i class=\"fa-solid fa-star\"></i>
                                        <i class=\"fa-regular fa-star\"></i>
                                    </div>
                                    <span>Total 2 Ratings</span>
                                </div>
                                <!-- rating area end -->
                                <div class=\"progress-wrapper-main\">
                                    <div class=\"single-progress-area-h\" data-sal-delay=\"150\" data-sal=\"slide-up\" data-sal-duration=\"800\">
                                        <div class=\"progress-top\">
                                            <i class=\"fa-regular fa-star\"></i>
                                            <span class=\"parcent\">
                                                5
                                            </span>
                                        </div>
                                        <div class=\"progress\">
                                            <div class=\"progress-bar wow fadeInLeft bg--primary\" role=\"progressbar\" style=\"width: 100%\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                            </div>
                                        </div>
                                        <div class=\"end\">
                                            <span>25 Rating</span>
                                        </div>
                                    </div>
                                    <div class=\"single-progress-area-h\" data-sal-delay=\"150\" data-sal=\"slide-up\" data-sal-duration=\"800\">
                                        <div class=\"progress-top\">
                                            <i class=\"fa-regular fa-star\"></i>
                                            <span class=\"parcent\">
                                                4
                                            </span>
                                        </div>
                                        <div class=\"progress\">
                                            <div class=\"progress-bar wow fadeInLeft bg--primary\" role=\"progressbar\" style=\"width: 80%\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                            </div>
                                        </div>
                                        <div class=\"end\">
                                            <span>20 Rating</span>
                                        </div>
                                    </div>
                                    <div class=\"single-progress-area-h\" data-sal-delay=\"150\" data-sal=\"slide-up\" data-sal-duration=\"800\">
                                        <div class=\"progress-top\">
                                            <i class=\"fa-regular fa-star\"></i>
                                            <span class=\"parcent\">
                                                3
                                            </span>
                                        </div>
                                        <div class=\"progress\">
                                            <div class=\"progress-bar wow fadeInLeft bg--primary\" role=\"progressbar\" style=\"width: 60%\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                            </div>
                                        </div>
                                        <div class=\"end\">
                                            <span>5 Rating</span>
                                        </div>
                                    </div>
                                    <div class=\"single-progress-area-h\" data-sal-delay=\"150\" data-sal=\"slide-up\" data-sal-duration=\"800\">
                                        <div class=\"progress-top\">
                                            <i class=\"fa-regular fa-star\"></i>
                                            <span class=\"parcent\">
                                                2
                                            </span>
                                        </div>
                                        <div class=\"progress\">
                                            <div class=\"progress-bar wow fadeInLeft bg--primary\" role=\"progressbar\" style=\"width: 40%\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                            </div>
                                        </div>
                                        <div class=\"end\">
                                            <span>2 Rating</span>
                                        </div>
                                    </div>
                                    <div class=\"single-progress-area-h\" data-sal-delay=\"150\" data-sal=\"slide-up\" data-sal-duration=\"800\">
                                        <div class=\"progress-top\">
                                            <i class=\"fa-regular fa-star\"></i>
                                            <span class=\"parcent\">
                                                1
                                            </span>
                                        </div>
                                        <div class=\"progress\">
                                            <div class=\"progress-bar wow fadeInLeft bg--primary\" role=\"progressbar\" style=\"width: 20%\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                            </div>
                                        </div>
                                        <div class=\"end\">
                                            <span>1 Rating</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single-top-rating end-->
                            <!-- person indevidual rating area  -->
                            <div class=\"indevidual-rating-area\">
                                <!-- author-area -->
                                <div class=\"author-area\">
                                    <img src=\"assets/images/course/28.jpg\" width=\"60\" alt=\"instructor\">
                                    <div class=\"information\">
                                        <span>William U.</span>
                                        <div class=\"stars\">
                                            <i class=\"fa-solid fa-star\"></i>
                                            <i class=\"fa-solid fa-star\"></i>
                                            <i class=\"fa-solid fa-star\"></i>
                                            <i class=\"fa-solid fa-star\"></i>
                                            <i class=\"fa-regular fa-star\"></i>
                                            <span class=\"ml--30\">a week ago</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- author-area end -->
                                <p class=\"disc\">
                                    I still have a lot of studying to do using this course and the other practice exams, but so far it's been great! I have not taken my Security+ exam as well, so I'll update this at a later time.
                                </p>
                                <div class=\"like-love-area\">
                                    <a href=\"#\">
                                        <i class=\"fa-sharp fa-light fa-thumbs-up\"></i>
                                    </a>
                                    <a href=\"#\">
                                        <i class=\"fa-regular fa-heart\"></i>
                                    </a>
                                </div>
                            </div>
                            <!-- person indevidual rating area end -->
                            <!-- person indevidual rating area  -->
                            <div class=\"indevidual-rating-area\">
                                <!-- author-area -->
                                <div class=\"author-area\">
                                    <img src=\"assets/images/course/29.jpg\" width=\"60\" alt=\"instructor\">
                                    <div class=\"information\">
                                        <span>William U.</span>
                                        <div class=\"stars\">
                                            <i class=\"fa-solid fa-star\"></i>
                                            <i class=\"fa-solid fa-star\"></i>
                                            <i class=\"fa-solid fa-star\"></i>
                                            <i class=\"fa-solid fa-star\"></i>
                                            <i class=\"fa-regular fa-star\"></i>
                                            <span class=\"ml--30\">a week ago</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- author-area end -->
                                <p class=\"disc\">
                                    I still have a lot of studying to do using this course and the other practice exams, but so far it's been great! I have not taken my Security+ exam as well, so I'll update this at a later time.
                                </p>
                                <div class=\"like-love-area\">
                                    <a href=\"#\">
                                        <i class=\"fa-sharp fa-light fa-thumbs-up\"></i>
                                    </a>
                                    <a href=\"#\">
                                        <i class=\"fa-regular fa-heart\"></i>
                                    </a>
                                </div>
                            </div>
                            <!-- person indevidual rating area end -->
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-5 order-cl-2 order-lg-2 order-md-1 order-sm-1 order-1 rts-sticky-column-item\">
                    <!-- right- sticky bar area -->
                    <div class=\"right-course-details\">
                        <!-- single course-sidebar -->
                        <div class=\"course-side-bar\">
                            <div class=\"price-area\">
                                <h3 class=\"title\">\$39.99</h3>
                                <span class=\"discount\">100%</span>
                            </div>
                            <a href=\"#\" class=\"rts-btn btn-primary\">Add To Cart</a>
                            <div class=\"what-includes\">
                                <span class=\"m\">30-Day Money-Back Guarantee</span>
                                <h5 class=\"title\">This course includes: </h5>
                                <div class=\"single-include\">
                                    <div class=\"left\">
                                        <svg width=\"20\" height=\"20\" viewBox=\"0 0 20 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <path d=\"M16.875 17.5V3.75H11.875V17.5H9.375V8.75H4.375V17.5H2.5V1.25H1.25V17.5C1.25 17.8315 1.3817 18.1495 1.61612 18.3839C1.85054 18.6183 2.16848 18.75 2.5 18.75H18.75V17.5H16.875ZM8.125 17.5H5.625V10H8.125V17.5ZM15.625 17.5H13.125V5H15.625V17.5Z\" fill=\"#525252\" />
                                            <path d=\"M16.875 17.5V3.75H11.875V17.5H9.375V8.75H4.375V17.5H2.5V1.25H1.25V17.5C1.25 17.8315 1.3817 18.1495 1.61612 18.3839C1.85054 18.6183 2.16848 18.75 2.5 18.75H18.75V17.5H16.875ZM8.125 17.5H5.625V10H8.125V17.5ZM15.625 17.5H13.125V5H15.625V17.5Z\" fill=\"#09A24F\" />
                                        </svg>
                                        <span>Levels</span>
                                    </div>
                                    <div class=\"right\">
                                        <span>Beginner</span>
                                    </div>
                                </div>
                                <div class=\"single-include\">
                                    <div class=\"left\">
                                        <svg width=\"20\" height=\"20\" viewBox=\"0 0 20 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M5.13876 17.2754C6.57769 18.2368 8.26942 18.75 10 18.75C12.3206 18.75 14.5462 17.8281 16.1872 16.1872C17.8281 14.5462 18.75 12.3206 18.75 10C18.75 8.26942 18.2368 6.57769 17.2754 5.13876C16.3139 3.69983 14.9473 2.57832 13.3485 1.91606C11.7496 1.25379 9.9903 1.08051 8.29296 1.41813C6.59563 1.75575 5.03653 2.58911 3.81282 3.81282C2.58911 5.03653 1.75575 6.59563 1.41813 8.29296C1.08051 9.9903 1.25379 11.7496 1.91606 13.3485C2.57832 14.9473 3.69983 16.3139 5.13876 17.2754ZM5.83323 3.76398C7.0666 2.93987 8.51664 2.5 10 2.5C11.9891 2.5 13.8968 3.29018 15.3033 4.6967C16.7098 6.10323 17.5 8.01088 17.5 10C17.5 11.4834 17.0601 12.9334 16.236 14.1668C15.4119 15.4001 14.2406 16.3614 12.8701 16.9291C11.4997 17.4968 9.99168 17.6453 8.53683 17.3559C7.08197 17.0665 5.7456 16.3522 4.6967 15.3033C3.64781 14.2544 2.9335 12.918 2.64411 11.4632C2.35473 10.0083 2.50325 8.50032 3.07091 7.12988C3.63856 5.75943 4.59986 4.58809 5.83323 3.76398ZM9.375 10.2563L12.8688 13.75L13.75 12.8687L10.625 9.7375V4.375H9.375V10.2563Z\" fill=\"#505155\" />
                                            <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M5.13876 17.2754C6.57769 18.2368 8.26942 18.75 10 18.75C12.3206 18.75 14.5462 17.8281 16.1872 16.1872C17.8281 14.5462 18.75 12.3206 18.75 10C18.75 8.26942 18.2368 6.57769 17.2754 5.13876C16.3139 3.69983 14.9473 2.57832 13.3485 1.91606C11.7496 1.25379 9.9903 1.08051 8.29296 1.41813C6.59563 1.75575 5.03653 2.58911 3.81282 3.81282C2.58911 5.03653 1.75575 6.59563 1.41813 8.29296C1.08051 9.9903 1.25379 11.7496 1.91606 13.3485C2.57832 14.9473 3.69983 16.3139 5.13876 17.2754ZM5.83323 3.76398C7.0666 2.93987 8.51664 2.5 10 2.5C11.9891 2.5 13.8968 3.29018 15.3033 4.6967C16.7098 6.10323 17.5 8.01088 17.5 10C17.5 11.4834 17.0601 12.9334 16.236 14.1668C15.4119 15.4001 14.2406 16.3614 12.8701 16.9291C11.4997 17.4968 9.99168 17.6453 8.53683 17.3559C7.08197 17.0665 5.7456 16.3522 4.6967 15.3033C3.64781 14.2544 2.9335 12.918 2.64411 11.4632C2.35473 10.0083 2.50325 8.50032 3.07091 7.12988C3.63856 5.75943 4.59986 4.58809 5.83323 3.76398ZM9.375 10.2563L12.8688 13.75L13.75 12.8687L10.625 9.7375V4.375H9.375V10.2563Z\" fill=\"#09A24F\" />
                                        </svg>
                                        <span>Duration</span>
                                    </div>
                                    <div class=\"right\">
                                        <span>6 hours 56 minutes</span>
                                    </div>
                                </div>
                                <div class=\"single-include\">
                                    <div class=\"left\">
                                        <svg width=\"20\" height=\"20\" viewBox=\"0 0 20 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M10.25 18.2C10.6013 18.5517 11.0779 18.7496 11.575 18.75C12.0721 18.7496 12.5487 18.5517 12.9 18.2L18.2 12.9C18.3748 12.7258 18.5135 12.5188 18.6081 12.2909C18.7028 12.063 18.7515 11.8187 18.7515 11.5719C18.7515 11.3251 18.7028 11.0807 18.6081 10.8528C18.5135 10.6249 18.3748 10.4179 18.2 10.2437L9.75625 1.8C9.40496 1.44827 8.92836 1.25044 8.43125 1.25H3.125C2.62772 1.25 2.15081 1.44754 1.79917 1.79917C1.44754 2.15081 1.25 2.62772 1.25 3.125V8.43125C1.25044 8.92836 1.44827 9.40496 1.8 9.75625L10.25 18.2ZM2.68306 2.68306C2.80027 2.56585 2.95924 2.5 3.125 2.5H8.43125C8.51394 2.50034 8.59575 2.51709 8.67192 2.54928C8.74809 2.58146 8.81712 2.62845 8.875 2.6875L17.3188 11.1312C17.4352 11.2484 17.5005 11.4068 17.5005 11.5719C17.5005 11.737 17.4352 11.8954 17.3188 12.0125L12.0125 17.3187C11.8954 17.4352 11.737 17.5005 11.5719 17.5005C11.4068 17.5005 11.2484 17.4352 11.1313 17.3187L2.6875 8.875C2.62845 8.81712 2.58146 8.74809 2.54928 8.67192C2.51709 8.59574 2.50034 8.51394 2.5 8.43125V3.125C2.5 2.95924 2.56585 2.80027 2.68306 2.68306ZM4.86108 8.32868C5.2722 8.60338 5.75555 8.75 6.25 8.75C6.91304 8.75 7.54893 8.48661 8.01777 8.01777C8.48661 7.54893 8.75 6.91304 8.75 6.25C8.75 5.75555 8.60338 5.2722 8.32868 4.86108C8.05397 4.44995 7.66353 4.12952 7.20671 3.9403C6.74989 3.75108 6.24723 3.70157 5.76228 3.79804C5.27732 3.8945 4.83187 4.1326 4.48223 4.48223C4.1326 4.83187 3.8945 5.27732 3.79804 5.76228C3.70157 6.24723 3.75108 6.74989 3.9403 7.20671C4.12952 7.66353 4.44995 8.05397 4.86108 8.32868ZM5.55554 5.21066C5.7611 5.07331 6.00277 5 6.25 5C6.58152 5 6.89946 5.1317 7.13388 5.36612C7.3683 5.60054 7.5 5.91848 7.5 6.25C7.5 6.49723 7.42669 6.7389 7.28934 6.94446C7.15199 7.15003 6.95676 7.31024 6.72836 7.40485C6.49995 7.49946 6.24861 7.52421 6.00614 7.47598C5.76366 7.42775 5.54093 7.3087 5.36612 7.13388C5.1913 6.95907 5.07225 6.73634 5.02402 6.49386C4.97579 6.25139 5.00054 6.00005 5.09515 5.77165C5.18976 5.54324 5.34998 5.34802 5.55554 5.21066Z\" fill=\"#09A24F\" />
                                        </svg>
                                        <span>Subject</span>
                                    </div>
                                    <div class=\"right\">
                                        <span>Web Development</span>
                                    </div>
                                </div>
                                <div class=\"single-include\">
                                    <div class=\"left\">
                                        <svg width=\"20\" height=\"20\" viewBox=\"0 0 20 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M4.2375 6.25006H7.5V7.50006H2.5V2.50007H3.75V4.80007C4.81808 3.51424 6.25676 2.58914 7.86986 2.1509C9.48296 1.71266 11.192 1.78262 12.7639 2.35123C14.3357 2.91985 15.694 3.95944 16.6534 5.32826C17.6128 6.69708 18.1267 8.3285 18.125 10.0001H16.875C16.8751 8.51793 16.3962 7.07545 15.5097 5.88764C14.6233 4.69984 13.3767 3.83031 11.9558 3.40868C10.5349 2.98705 9.01576 3.03589 7.62489 3.54793C6.23401 4.05996 5.04584 5.00777 4.2375 6.25006ZM15.7625 13.7499H12.5V12.4999H17.5V17.4999H16.25V15.1999C15.1819 16.4858 13.7432 17.4109 12.1301 17.8491C10.517 18.2873 8.80803 18.2174 7.23614 17.6488C5.66426 17.0802 4.306 16.0406 3.34659 14.6718C2.38717 13.3029 1.87328 11.6715 1.875 9.99994H3.125C3.12491 11.4821 3.60379 12.9246 4.49027 14.1124C5.37674 15.3002 6.62334 16.1697 8.04423 16.5913C9.46513 17.013 10.9842 16.9641 12.3751 16.4521C13.766 15.94 14.9542 14.9922 15.7625 13.7499Z\" fill=\"#09A24F\" />
                                        </svg>
                                        <span>Update</span>
                                    </div>
                                    <div class=\"right\">
                                        <span>29 October, 2023 Last Update</span>
                                    </div>
                                </div>
                                <div class=\"single-include\">
                                    <div class=\"left\">
                                        <svg width=\"20\" height=\"20\" viewBox=\"0 0 20 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M2.5 16.25H10V17.5H2.5C2.16848 17.5 1.85054 17.3683 1.61612 17.1339C1.3817 16.8995 1.25 16.5815 1.25 16.25V3.75C1.25 3.41848 1.3817 3.10054 1.61612 2.86612C1.85054 2.6317 2.16848 2.5 2.5 2.5H17.5C17.8315 2.5 18.1495 2.6317 18.3839 2.86612C18.6183 3.10054 18.75 3.41848 18.75 3.75V10H17.5V3.75H2.5V16.25ZM10 5H3.75V6.25H10V5ZM3.75 7.5H10V8.75H3.75V7.5ZM7.5 10H3.75V11.25H7.5V10ZM15 10.625L16.195 12.9394L18.75 13.3106L16.875 15L17.3569 17.5L15 16.0938L12.6431 17.5L13.125 15L11.25 13.3106L13.875 12.9394L15 10.625Z\" fill=\"#09A24F\" />
                                        </svg>
                                        <span>Certificate</span>
                                    </div>
                                    <div class=\"right\">
                                        <span>Certificate of completion </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single course-sidebar end -->
                    </div>
                    <!-- right- sticky bar area end -->
                    <!-- right- sticky bar area -->
                    <div class=\"right-course-details mt--30\">
                        <!-- single course-sidebar -->
                        <div class=\"course-side-bar\">
                            <!-- course single sidebar -->
                            <div class=\"course-single-information\">
                                <h5 class=\"title\">A course by</h5>
                                <div class=\"body\">
                                    <div class=\"author\">
                                        <img src=\"assets/images/course/author-06.png\" alt=\"\">
                                        <span>Dr. Angela Yu</span>
                                    </div>
                                    <div class=\"author\">
                                        <img src=\"assets/images/course/author-06.png\" alt=\"\">
                                        <span>Dr. Angela Yu</span>
                                    </div>
                                </div>
                            </div>
                            <!-- course single sidebar end-->
                            <!-- course single sidebar -->
                            <div class=\"course-single-information\">
                                <h5 class=\"title\">Material Includes</h5>
                                <div class=\"body\">
                                    <!-- ingle check -->
                                    <div class=\"single-check\">
                                        <i class=\"fa-light fa-circle-check\"></i>
                                        Flexible Deadlines
                                    </div>
                                    <!-- ingle check end -->
                                    <!-- ingle check -->
                                    <div class=\"single-check\">
                                        <i class=\"fa-light fa-circle-check\"></i>
                                        Hours of live- demo
                                    </div>
                                    <!-- ingle check end -->
                                    <!-- ingle check -->
                                    <div class=\"single-check\">
                                        <i class=\"fa-light fa-circle-check\"></i>
                                        Hours of live- demo
                                    </div>
                                    <!-- ingle check end -->
                                    <!-- ingle check -->
                                    <div class=\"single-check\">
                                        <i class=\"fa-light fa-circle-check\"></i>
                                        200+ downloadable resoursces
                                    </div>
                                    <!-- ingle check end -->
                                </div>
                            </div>
                            <!-- course single sidebar end-->
                            <!-- course single sidebar -->
                            <div class=\"course-single-information\">
                                <h5 class=\"title\">Requirements</h5>
                                <div class=\"body\">
                                    <!-- ingle check -->
                                    <div class=\"single-check\">
                                        <i class=\"fa-light fa-circle-check\"></i>
                                        Access to Adobe Premiere Pro
                                    </div>
                                    <!-- ingle check end -->
                                    <!-- ingle check -->
                                    <div class=\"single-check\">
                                        <i class=\"fa-light fa-circle-check\"></i>
                                        Familiarity with computers and other devices
                                    </div>
                                    <!-- ingle check end -->
                                </div>
                            </div>
                            <!-- course single sidebar end-->
                            <!-- course single sidebar -->
                            <div class=\"course-single-information\">
                                <h5 class=\"title\">Tags</h5>
                                <div class=\"body\">
                                    <div class=\"tags-wrapper\">
                                        <!-- single tags -->
                                        <span>Course</span>
                                        <span>Design</span>
                                        <span>Web development</span>
                                        <span>Business</span>
                                        <span>UI/UX</span>
                                        <span>Financial</span>
                                        <!-- single tags end -->
                                    </div>
                                </div>
                            </div>
                            <!-- course single sidebar end-->
                            <!-- course single sidebar -->
                            <div class=\"course-single-information\">
                                <h5 class=\"title\">Share</h5>
                                <div class=\"body\">
                                    <!-- social-share-course-sidebar -->
                                    <div class=\"social-share-course-side-bar\">
                                        <ul>
                                            <li><a href=\"#\"><i class=\"fa-brands fa-facebook-f\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fa-brands fa-instagram\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fa-brands fa-linkedin\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fa-brands fa-pinterest\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fa-brands fa-youtube\"></i></a></li>
                                        </ul>
                                    </div>
                                    <!-- social-share-course-sidebar end -->
                                </div>
                            </div>
                            <!-- course single sidebar end-->

                            <!-- course single sidebar -->
                            <div class=\"course-single-information last\">
                                <h5 class=\"title\">Audience</h5>
                                <div class=\"body\">
                                    <!-- ingle check -->
                                    <div class=\"single-check\">
                                        <i class=\"fa-light fa-circle-check\"></i>
                                        Suitable for beginners and intermediates
                                    </div>
                                    <!-- ingle check end -->
                                </div>
                            </div>
                            <!-- course single sidebar end-->
                        </div>
                        <!-- single course-sidebar end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- course area end -->

    <!-- footer call to action area start -->

    <!-- footer call to action area start -->
    <div class=\"rts-footer-area section-bg2\">
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
                                    <li><a href=\"course-two.html\">Our Mission</a></li>
                                    <li><a href=\"about.html\">Our Course</a></li>
                                    <li><a href=\"become-instructor.html\">Careers</a></li>
                                    <li><a href=\"zoom-meeting.html\">Blog & News</a></li>
                                    <li><a href=\"pricing.html\">Event & News </a></li>
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
                                                <img src=\"assets/images/blog/blog-07.jpg\" width=\"80\" alt=\"\">
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
                                                <img src=\"assets/images/blog/blog-08.jpg\" width=\"80\" alt=\"\">
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
                            <p>Copyright © 2024 All Rights Reserved by Studykids</p>
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
                    <form action=\"#\" class=\"login-form\">
                        <input type=\"text\" placeholder=\"Username of Email Address\" required>
                        <input type=\"password\" placeholder=\"Password\" required>
                        <div class=\"d-flex mb--20 align-items-center\">
                            <input type=\"checkbox\" id=\"examplecheck-modal\">
                            <label for=\"examplecheck-modal\">I agree to the terms of use and privacy policy.</label>
                        </div>
                        <button type=\"submit\" class=\"rts-btn btn-primary\">Sign In</button>

                        <p class=\"dont-acc mt--20\">Dont Have an Account? <a href=\"registration.html\">Sign-up</a> </p>
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
                            <li><a class=\"mobile-menu-link\" href=\"course-details.html\">Détails des cours</a></li>
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

</html>", "detailscoursscience.html.twig", "C:\\Users\\Lenovo IdeaPad 3i\\Desktop\\Novalearn-new_project\\templates\\detailscoursscience.html.twig");
    }
}
