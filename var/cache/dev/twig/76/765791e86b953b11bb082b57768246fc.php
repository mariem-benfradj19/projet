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

/* cours.html.twig */
class __TwigTemplate_58ff6b95f1e0104f67e8ada4739bb8d4 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cours.html.twig"));

        // line 1
        yield "
<!DOCTYPE html>
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
                             <img src=\"assets/images/logo/logo-1.png\" alt=\"logo\" width=\"280\" height=\"auto\">
                        </a>
                    </div>

                    <div class=\"main-nav-one\">
    <nav>
        <ul>
            <li>
                <a class=\"nav-link\" href=\"#\">Home</a>
            </li>

            <li class=\"has-dropdown\">
                <a class=\"nav-link\" href=\"#\">Classes</a>
                <ul class=\"submenu\">
                    <li><a href=\"";
        // line 107
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cours");
        yield "\">Cours</a></li>

                    ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["courses"]) || array_key_exists("courses", $context) ? $context["courses"] : (function () { throw new RuntimeError('Variable "courses" does not exist.', 109, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 110
            yield "                        <li>
                            <a href=\"";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_detailscours", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["course"], "id", [], "any", false, false, false, 111)]), "html", null, true);
            yield "\">Voir les détails</a>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['course'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        yield "                </ul>
            </li>
            <li><a class=\"nav-link\" href=\"blogsEns\">Blog</a></li>

            <li>
                <a class=\"nav-link\" href=\"contact.html\">Contact</a>
            </li>
        </ul>
    </nav>
</div>


                    <div class=\"header-right-area-one\">
                       <div class=\"buttons-area\">
                                     <form action=\"";
        // line 128
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" method=\"post\">
                                     <button type=\"submit\" class=\"dropdown-item\">Se Déconnecter</button>
                                     </form>     
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
                            <a class=\"active\" href=\"";
        // line 158
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cours");
        yield "\">Cours</a>
                        </div>
                        <!-- breadcrumb pagination area -->
                        <h2 class=\"title\">Cours</h2>
                        <!-- breadcrumb pagination area end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bread crumb area end -->

    <!-- Bread-Crumb style End -->

    <!-- course area start -->
    <div class=\"rts-course-default-area rts-section-gap rts-shape-move\">
        <div class=\"container\">
            <div class=\"row g-5\">
                <div class=\"col-lg-12\">
                    <!-- filter top-area  -->
                    <div class=\"filter-small-top-full\">
                    
                    <a href=\"";
        // line 180
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("course_new");
        yield "\" class=\"btn btn-success\">Ajouter un cours</a>

                    <div class=\"course-list\">
         
    </div>
     

                       
                        <div class=\"right-filter\">
                            <span>Showing 1-9 of 19 results</span>
                            <ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
                                <li class=\"nav-item\" role=\"presentation\">
                                    <button class=\"nav-link active\" id=\"home-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#home\" type=\"button\" role=\"tab\" aria-controls=\"home\" aria-selected=\"false\">
                                        <svg width=\"16\" height=\"16\" viewBox=\"0 0 16 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M1.75 0.5H5.5C5.83152 0.5 6.14946 0.631696 6.38388 0.866116C6.6183 1.10054 6.75 1.41848 6.75 1.75V5.5C6.75 5.83152 6.6183 6.14946 6.38388 6.38388C6.14946 6.6183 5.83152 6.75 5.5 6.75H1.75C1.41848 6.75 1.10054 6.6183 0.866116 6.38388C0.631696 6.14946 0.5 5.83152 0.5 5.5V1.75C0.5 1.41848 0.631696 1.10054 0.866116 0.866116C1.10054 0.631696 1.41848 0.5 1.75 0.5ZM1.75 5.5H5.5V1.75H1.75V5.5ZM10.5 0.5H14.25C14.5815 0.5 14.8995 0.631696 15.1339 0.866116C15.3683 1.10054 15.5 1.41848 15.5 1.75V5.5C15.5 5.83152 15.3683 6.14946 15.1339 6.38388C14.8995 6.6183 14.5815 6.75 14.25 6.75H10.5C10.1685 6.75 9.85054 6.6183 9.61612 6.38388C9.3817 6.14946 9.25 5.83152 9.25 5.5V1.75C9.25 1.41848 9.3817 1.10054 9.61612 0.866116C9.85054 0.631696 10.1685 0.5 10.5 0.5ZM10.5 5.5H14.25V1.75H10.5V5.5ZM5.5 9.25H1.75C1.41848 9.25 1.10054 9.3817 0.866116 9.61612C0.631696 9.85054 0.5 10.1685 0.5 10.5V14.25C0.5 14.5815 0.631696 14.8995 0.866116 15.1339C1.10054 15.3683 1.41848 15.5 1.75 15.5H5.5C5.83152 15.5 6.14946 15.3683 6.38388 15.1339C6.6183 14.8995 6.75 14.5815 6.75 14.25V10.5C6.75 10.1685 6.6183 9.85054 6.38388 9.61612C6.14946 9.3817 5.83152 9.25 5.5 9.25ZM5.5 14.25H1.75V10.5H5.5V14.25ZM10.5 9.25H14.25C14.5815 9.25 14.8995 9.3817 15.1339 9.61612C15.3683 9.85054 15.5 10.1685 15.5 10.5V14.25C15.5 14.5815 15.3683 14.8995 15.1339 15.1339C14.8995 15.3683 14.5815 15.5 14.25 15.5H10.5C10.1685 15.5 9.85054 15.3683 9.61612 15.1339C9.3817 14.8995 9.25 14.5815 9.25 14.25V10.5C9.25 10.1685 9.3817 9.85054 9.61612 9.61612C9.85054 9.3817 10.1685 9.25 10.5 9.25ZM10.5 14.25H14.25V10.5H10.5V14.25Z\" fill=\"#262626\" />
                                        </svg>
                                        <span>Grid</span>
                                    </button>
                                </li>
                                <li class=\"nav-item\" role=\"presentation\">
                                    <button class=\"nav-link\" id=\"profile-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#profile\" type=\"button\" role=\"tab\" aria-controls=\"profile\" aria-selected=\"true\">
                                        <svg width=\"18\" height=\"16\" viewBox=\"0 0 18 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M5.25 6.75H1.5C1.1686 6.74962 0.850875 6.6178 0.616537 6.38346C0.382199 6.14913 0.25038 5.8314 0.25 5.5V1.75C0.25038 1.4186 0.382199 1.10087 0.616537 0.866537C0.850875 0.632199 1.1686 0.50038 1.5 0.5H5.25C5.5814 0.50038 5.89913 0.632199 6.13346 0.866537C6.3678 1.10087 6.49962 1.4186 6.5 1.75V5.5C6.49962 5.8314 6.3678 6.14913 6.13346 6.38346C5.89913 6.6178 5.5814 6.74962 5.25 6.75ZM1.5 1.75V5.5H5.25075L5.25 1.75H1.5ZM9 3H17.75V4.25H9V3ZM9 11.75H17.75V13H9V11.75ZM1.5 15.5H5.25C5.5814 15.4996 5.89913 15.3678 6.13346 15.1335C6.3678 14.8991 6.49962 14.5814 6.5 14.25V10.5C6.49962 10.1686 6.3678 9.85087 6.13346 9.61654C5.89913 9.3822 5.5814 9.25038 5.25 9.25H1.5C1.1686 9.25038 0.850875 9.3822 0.616537 9.61654C0.382199 9.85087 0.25038 10.1686 0.25 10.5V14.25C0.25038 14.5814 0.382199 14.8991 0.616537 15.1335C0.850875 15.3678 1.1686 15.4996 1.5 15.5ZM1.5 14.25V10.5H5.25L5.25075 14.25H1.5Z\" fill=\"#110C2D\" />
                                        </svg>
                                        <span> List</span>
                                    </button>
                                </li>
                            </ul>

                        </div>
                    </div>
                    <!-- filter top-area end -->
                    <div class=\"tab-content\" id=\"myTabContent\">
                        <div class=\"tab-pane fade show active\" id=\"home\" role=\"tabpanel\" aria-labelledby=\"home-tab\">
                            <div class=\"row g-5 mt--30\">
                                <div class=\"col-xl-3 col-lg-4 col-md-6 col-sm-6\" data-category=\"transition\">
                                    <!-- rts single course -->

                                   ";
        // line 218
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["courses"]) || array_key_exists("courses", $context) ? $context["courses"] : (function () { throw new RuntimeError('Variable "courses" does not exist.', 218, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 219
            yield "    <div class=\"course-wrapper-style-2 inner\">
        <div class=\"wrapper-inner bg-one\">
            <div class=\"image\">
                <a href=\"";
            // line 222
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_detailscours", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["course"], "id", [], "any", false, false, false, 222)]), "html", null, true);
            yield "\">
                    <img src=\"assets/images/course/04.jpg\" alt=\"\">
                </a>
                <div class=\"wishlist save-icon\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal-login\">
                    <i class=\"fa-regular fa-heart bg-one\"></i>
                </div>
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

                <!-- Lien vers les détails du cours -->
                <a href=\"";
            // line 246
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_detailscours", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["course"], "id", [], "any", false, false, false, 246)]), "html", null, true);
            yield "\">
                    <h5 class=\"title\">";
            // line 247
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["course"], "titre", [], "any", false, false, false, 247), "html", null, true);
            yield "</h5>
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
                            <img src=\"assets/images/course/author-01.png\" width=\"40\" alt=\"\">
                        </div>
                        <p class=\"author-name\">Maria Sofa</p>
                    </div>
                    <h5 class=\"price\">\$15.00</h5>
                </div>

                <!-- Boutons Modifier et Supprimer -->
                <div class=\"course-actions\">
                    <a href=\"";
            // line 272
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("course_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["course"], "id", [], "any", false, false, false, 272)]), "html", null, true);
            yield "\" class=\"btn btn-primary\">Modifier</a>
<form action=\"";
            // line 273
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("course_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["course"], "id", [], "any", false, false, false, 273)]), "html", null, true);
            yield "\" method=\"post\" style=\"display:inline;\">
    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 274
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["course"], "id", [], "any", false, false, false, 274))), "html", null, true);
            yield "\">
    <button type=\"submit\" class=\"btn btn-danger\" onclick=\"return confirm('Voulez-vous vraiment supprimer ce cours ?');\">
        Supprimer
    </button>
</form>

                </div>
            </div>
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['course'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 285
        yield "

                                
                               
                                                
                                                   
                               
            <div class=\"row mt--30\">
                <div class=\"col-lg-12\">
                    <!-- rts-pagination-area -->
                    <div class=\"rts-pagination-area-2\">
                        <ul>
                            <li class=\"button\">
                                <div class=\"inner\"><a href=\"#\"><i class=\"fa-solid fa-chevron-left\"></i></a></div>
                            </li>
                            <li class=\"active\">1</li>
                            <li>2</li>
                            <li>3</li>
                            <li>4</li>
                            <li class=\"button\">
                                <div class=\"inner\"><a href=\"#\"><i class=\"fa-solid fa-chevron-right\"></i></a></div>
                            </li>
                        </ul>
                    </div>
                    <!-- rts-pagination-area end -->
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
                                    <li><a href=\"";
        // line 378
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cours");
        yield "\">Cours</a></li>
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
                        <a href=\"#\" class=\"main\">Class</a>
                        <ul class=\"submenu mm-collapse\">
                            <li><a class=\"mobile-menu-link\" href=\"course.html\">Cours</a></li>
            ";
        // line 499
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["courses"]) || array_key_exists("courses", $context) ? $context["courses"] : (function () { throw new RuntimeError('Variable "courses" does not exist.', 499, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 500
            yield "
                            <li><a class=\"mobile-menu-link\" href=\"";
            // line 501
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_detailscours", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["course"], "id", [], "any", false, false, false, 501)]), "html", null, true);
            yield "\">Détails des cours</a></li>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['course'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 503
        yield "
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
        return "cours.html.twig";
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
        return array (  616 => 503,  608 => 501,  605 => 500,  601 => 499,  477 => 378,  382 => 285,  365 => 274,  361 => 273,  357 => 272,  329 => 247,  325 => 246,  298 => 222,  293 => 219,  289 => 218,  248 => 180,  223 => 158,  190 => 128,  174 => 114,  165 => 111,  162 => 110,  158 => 109,  153 => 107,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
<!DOCTYPE html>
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
                             <img src=\"assets/images/logo/logo-1.png\" alt=\"logo\" width=\"280\" height=\"auto\">
                        </a>
                    </div>

                    <div class=\"main-nav-one\">
    <nav>
        <ul>
            <li>
                <a class=\"nav-link\" href=\"#\">Home</a>
            </li>

            <li class=\"has-dropdown\">
                <a class=\"nav-link\" href=\"#\">Classes</a>
                <ul class=\"submenu\">
                    <li><a href=\"{{ path('app_cours') }}\">Cours</a></li>

                    {% for course in courses %}
                        <li>
                            <a href=\"{{ path('app_detailscours', { 'id': course.id }) }}\">Voir les détails</a>
                        </li>
                    {% endfor %}
                </ul>
            </li>
            <li><a class=\"nav-link\" href=\"blogsEns\">Blog</a></li>

            <li>
                <a class=\"nav-link\" href=\"contact.html\">Contact</a>
            </li>
        </ul>
    </nav>
</div>


                    <div class=\"header-right-area-one\">
                       <div class=\"buttons-area\">
                                     <form action=\"{{ path('app_logout') }}\" method=\"post\">
                                     <button type=\"submit\" class=\"dropdown-item\">Se Déconnecter</button>
                                     </form>     
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
                            <a class=\"active\" href=\"{{path('app_cours')}}\">Cours</a>
                        </div>
                        <!-- breadcrumb pagination area -->
                        <h2 class=\"title\">Cours</h2>
                        <!-- breadcrumb pagination area end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bread crumb area end -->

    <!-- Bread-Crumb style End -->

    <!-- course area start -->
    <div class=\"rts-course-default-area rts-section-gap rts-shape-move\">
        <div class=\"container\">
            <div class=\"row g-5\">
                <div class=\"col-lg-12\">
                    <!-- filter top-area  -->
                    <div class=\"filter-small-top-full\">
                    
                    <a href=\"{{path('course_new')}}\" class=\"btn btn-success\">Ajouter un cours</a>

                    <div class=\"course-list\">
         
    </div>
     

                       
                        <div class=\"right-filter\">
                            <span>Showing 1-9 of 19 results</span>
                            <ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
                                <li class=\"nav-item\" role=\"presentation\">
                                    <button class=\"nav-link active\" id=\"home-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#home\" type=\"button\" role=\"tab\" aria-controls=\"home\" aria-selected=\"false\">
                                        <svg width=\"16\" height=\"16\" viewBox=\"0 0 16 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M1.75 0.5H5.5C5.83152 0.5 6.14946 0.631696 6.38388 0.866116C6.6183 1.10054 6.75 1.41848 6.75 1.75V5.5C6.75 5.83152 6.6183 6.14946 6.38388 6.38388C6.14946 6.6183 5.83152 6.75 5.5 6.75H1.75C1.41848 6.75 1.10054 6.6183 0.866116 6.38388C0.631696 6.14946 0.5 5.83152 0.5 5.5V1.75C0.5 1.41848 0.631696 1.10054 0.866116 0.866116C1.10054 0.631696 1.41848 0.5 1.75 0.5ZM1.75 5.5H5.5V1.75H1.75V5.5ZM10.5 0.5H14.25C14.5815 0.5 14.8995 0.631696 15.1339 0.866116C15.3683 1.10054 15.5 1.41848 15.5 1.75V5.5C15.5 5.83152 15.3683 6.14946 15.1339 6.38388C14.8995 6.6183 14.5815 6.75 14.25 6.75H10.5C10.1685 6.75 9.85054 6.6183 9.61612 6.38388C9.3817 6.14946 9.25 5.83152 9.25 5.5V1.75C9.25 1.41848 9.3817 1.10054 9.61612 0.866116C9.85054 0.631696 10.1685 0.5 10.5 0.5ZM10.5 5.5H14.25V1.75H10.5V5.5ZM5.5 9.25H1.75C1.41848 9.25 1.10054 9.3817 0.866116 9.61612C0.631696 9.85054 0.5 10.1685 0.5 10.5V14.25C0.5 14.5815 0.631696 14.8995 0.866116 15.1339C1.10054 15.3683 1.41848 15.5 1.75 15.5H5.5C5.83152 15.5 6.14946 15.3683 6.38388 15.1339C6.6183 14.8995 6.75 14.5815 6.75 14.25V10.5C6.75 10.1685 6.6183 9.85054 6.38388 9.61612C6.14946 9.3817 5.83152 9.25 5.5 9.25ZM5.5 14.25H1.75V10.5H5.5V14.25ZM10.5 9.25H14.25C14.5815 9.25 14.8995 9.3817 15.1339 9.61612C15.3683 9.85054 15.5 10.1685 15.5 10.5V14.25C15.5 14.5815 15.3683 14.8995 15.1339 15.1339C14.8995 15.3683 14.5815 15.5 14.25 15.5H10.5C10.1685 15.5 9.85054 15.3683 9.61612 15.1339C9.3817 14.8995 9.25 14.5815 9.25 14.25V10.5C9.25 10.1685 9.3817 9.85054 9.61612 9.61612C9.85054 9.3817 10.1685 9.25 10.5 9.25ZM10.5 14.25H14.25V10.5H10.5V14.25Z\" fill=\"#262626\" />
                                        </svg>
                                        <span>Grid</span>
                                    </button>
                                </li>
                                <li class=\"nav-item\" role=\"presentation\">
                                    <button class=\"nav-link\" id=\"profile-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#profile\" type=\"button\" role=\"tab\" aria-controls=\"profile\" aria-selected=\"true\">
                                        <svg width=\"18\" height=\"16\" viewBox=\"0 0 18 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M5.25 6.75H1.5C1.1686 6.74962 0.850875 6.6178 0.616537 6.38346C0.382199 6.14913 0.25038 5.8314 0.25 5.5V1.75C0.25038 1.4186 0.382199 1.10087 0.616537 0.866537C0.850875 0.632199 1.1686 0.50038 1.5 0.5H5.25C5.5814 0.50038 5.89913 0.632199 6.13346 0.866537C6.3678 1.10087 6.49962 1.4186 6.5 1.75V5.5C6.49962 5.8314 6.3678 6.14913 6.13346 6.38346C5.89913 6.6178 5.5814 6.74962 5.25 6.75ZM1.5 1.75V5.5H5.25075L5.25 1.75H1.5ZM9 3H17.75V4.25H9V3ZM9 11.75H17.75V13H9V11.75ZM1.5 15.5H5.25C5.5814 15.4996 5.89913 15.3678 6.13346 15.1335C6.3678 14.8991 6.49962 14.5814 6.5 14.25V10.5C6.49962 10.1686 6.3678 9.85087 6.13346 9.61654C5.89913 9.3822 5.5814 9.25038 5.25 9.25H1.5C1.1686 9.25038 0.850875 9.3822 0.616537 9.61654C0.382199 9.85087 0.25038 10.1686 0.25 10.5V14.25C0.25038 14.5814 0.382199 14.8991 0.616537 15.1335C0.850875 15.3678 1.1686 15.4996 1.5 15.5ZM1.5 14.25V10.5H5.25L5.25075 14.25H1.5Z\" fill=\"#110C2D\" />
                                        </svg>
                                        <span> List</span>
                                    </button>
                                </li>
                            </ul>

                        </div>
                    </div>
                    <!-- filter top-area end -->
                    <div class=\"tab-content\" id=\"myTabContent\">
                        <div class=\"tab-pane fade show active\" id=\"home\" role=\"tabpanel\" aria-labelledby=\"home-tab\">
                            <div class=\"row g-5 mt--30\">
                                <div class=\"col-xl-3 col-lg-4 col-md-6 col-sm-6\" data-category=\"transition\">
                                    <!-- rts single course -->

                                   {% for course in courses %}
    <div class=\"course-wrapper-style-2 inner\">
        <div class=\"wrapper-inner bg-one\">
            <div class=\"image\">
                <a href=\"{{ path('app_detailscours', { 'id': course.id }) }}\">
                    <img src=\"assets/images/course/04.jpg\" alt=\"\">
                </a>
                <div class=\"wishlist save-icon\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal-login\">
                    <i class=\"fa-regular fa-heart bg-one\"></i>
                </div>
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

                <!-- Lien vers les détails du cours -->
                <a href=\"{{ path('app_detailscours', { 'id': course.id }) }}\">
                    <h5 class=\"title\">{{ course.titre }}</h5>
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
                            <img src=\"assets/images/course/author-01.png\" width=\"40\" alt=\"\">
                        </div>
                        <p class=\"author-name\">Maria Sofa</p>
                    </div>
                    <h5 class=\"price\">\$15.00</h5>
                </div>

                <!-- Boutons Modifier et Supprimer -->
                <div class=\"course-actions\">
                    <a href=\"{{ path('course_edit', { 'id': course.id }) }}\" class=\"btn btn-primary\">Modifier</a>
<form action=\"{{ path('course_delete', { 'id': course.id }) }}\" method=\"post\" style=\"display:inline;\">
    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ course.id) }}\">
    <button type=\"submit\" class=\"btn btn-danger\" onclick=\"return confirm('Voulez-vous vraiment supprimer ce cours ?');\">
        Supprimer
    </button>
</form>

                </div>
            </div>
        </div>
    </div>
{% endfor %}


                                
                               
                                                
                                                   
                               
            <div class=\"row mt--30\">
                <div class=\"col-lg-12\">
                    <!-- rts-pagination-area -->
                    <div class=\"rts-pagination-area-2\">
                        <ul>
                            <li class=\"button\">
                                <div class=\"inner\"><a href=\"#\"><i class=\"fa-solid fa-chevron-left\"></i></a></div>
                            </li>
                            <li class=\"active\">1</li>
                            <li>2</li>
                            <li>3</li>
                            <li>4</li>
                            <li class=\"button\">
                                <div class=\"inner\"><a href=\"#\"><i class=\"fa-solid fa-chevron-right\"></i></a></div>
                            </li>
                        </ul>
                    </div>
                    <!-- rts-pagination-area end -->
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
                                    <li><a href=\"{{path('app_cours')}}\">Cours</a></li>
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
                        <a href=\"#\" class=\"main\">Class</a>
                        <ul class=\"submenu mm-collapse\">
                            <li><a class=\"mobile-menu-link\" href=\"course.html\">Cours</a></li>
            {% for course in courses %}

                            <li><a class=\"mobile-menu-link\" href=\"{{ path('app_detailscours', { 'id': course.id }) }}\">Détails des cours</a></li>
                                        {% endfor %}

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

</html>", "cours.html.twig", "C:\\Users\\yassi\\Downloads\\Novalearn-master\\Novalearn-master\\templates\\cours.html.twig");
    }
}
