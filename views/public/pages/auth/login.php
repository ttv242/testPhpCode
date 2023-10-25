<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Axel 
Product Version: 1.0.1
Purchase: https://keenthemes.com/products/axel-html-pro
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->

<head>
    <title>
        <?= $title ?>
    </title>
    <meta charset="utf-8" />
    <meta name="description"
        content="Axel admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets." />
    <meta name="keywords"
        content="Axel theme, bootstrap, bootstrap 5, admin themes, free admin themes, bootstrap admin, bootstrap dashboard" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="<?= $title ?>" />
    <meta property="og:url" content="https://keenthemes.com/products/axel-html-pro" />
    <meta property="og:site_name" content="Axel HTML Pro by Keenthemes" />
    <link rel="canonical" href="https://preview.keenthemes.com/axel-html-pro" />
    <link rel="shortcut icon" href="<?= PUBLIC_URL ?>media/logos/favicon.ico" />

    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" /> <!--end::Fonts-->



    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="<?= PUBLIC_URL ?>plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?= PUBLIC_URL ?>css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->

    <!--begin::Google tag-->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-37564768-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'UA-37564768-1');
    </script>
    <!--end::Google tag-->
    <script>
        // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking)
        if (window.top != window.self) {
            window.top.location.replace(window.self.location.href);
        }
    </script>
</head>
<!--end::Head-->

<!--begin::Body-->

<body id="kt_body" class="app-blank">
    <!--begin::Theme mode setup on page load-->
    <script>
        var defaultThemeMode = "light";
        var themeMode;

        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if (localStorage.getItem("data-bs-theme") !== null) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }

            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }

            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }            
    </script>
    <!--end::Theme mode setup on page load-->
    <!--Begin::Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!--End::Google Tag Manager (noscript) -->

    <!--begin::Root-->
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <!--begin::Authentication - Sign-in -->
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <!--begin::Aside-->
            <div class="d-flex flex-column flex-lg-row-auto bg-primary w-xl-600px positon-xl-relative">
                <!--begin::Wrapper-->
                <div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-600px scroll-y">
                    <!--begin::Header-->
                    <div class="d-flex flex-row-fluid flex-column text-center p-5 p-lg-10 pt-lg-20">
                        <!--begin::Logo-->
                        <a href="/axel-html-pro/index.html" class="py-2 py-lg-20">
                            <img alt="Logo" src="<?= PUBLIC_URL ?>media/logos/default.svg"
                                class="theme-light-show h-40px h-lg-50px" />
                            <img alt="Logo" src="<?= PUBLIC_URL ?>media/logos/default-dark.svg"
                                class="theme-dark-show h-40px h-lg-50px" />
                        </a>
                        <!--end::Logo-->

                        <!--begin::Title-->
                        <h1 class="d-none d-lg-block fw-bold text-white fs-2qx pb-5 pb-md-10">
                            Welcome to Axel HTML Pro </h1>
                        <!--end::Title-->

                        <!--begin::Description-->
                        <p class="d-none d-lg-block fw-semibold fs-2 text-white">
                            Plan your blog post by choosing a topic creating <br />
                            an outline and checking facts
                        </p>
                        <!--end::Description-->
                    </div>
                    <!--end::Header-->

                    <!--begin::Illustration-->
                    <div class="d-none d-lg-block d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-100px min-h-lg-350px"
                        style="background-image: url(<?= PUBLIC_URL ?>media/illustrations/dozzy-1/17.png)">
                    </div>
                    <!--end::Illustration-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--begin::Aside-->

            <!--begin::Body-->
            <div class="d-flex flex-column flex-lg-row-fluid py-10">
                <!--begin::Content-->
                <div class="d-flex flex-center flex-column flex-column-fluid">
                    <!--begin::Wrapper-->
                    <div class="w-lg-500px p-10 p-lg-15 mx-auto">

                        <!--begin::Form-->
                        <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" action="login_"
                            method="POST">
                            <!--begin::Heading-->
                            <div class="text-center mb-10">
                                <!--begin::Title-->
                                <h1 class="text-dark mb-3">
                                    Đăng nhập
                                </h1>
                                <!--end::Title-->

                                <!--begin::Link-->
                                <div class="text-gray-400 fw-semibold fs-4">
                                    Bạn có tài khoản chưa?

                                    <a href="<?php project ?>register" class="link-primary fw-bold">
                                        Tạo một tài khoản
                                    </a>
                                </div>
                                <!--end::Link-->
                            </div>
                            <!--begin::Heading-->

                            <?php
                                if (isset($_GET["error"])) {
                                    echo '<h3 class="text-center text-danger">' . $_SESSION["error"] . '</h3>';
                                } else if (isset($_GET["success"])) {
                                    echo '<h3 class="text-center text-success">' . $_SESSION["success"] . '</h3>';
                                }
                            ?>

                            <!--begin::Input group-->
                            <div class="fv-row mb-10">
                                <!--begin::Label-->
                                <label class="form-label fs-6 fw-bold text-dark">Tài khoản</label>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <input class="form-control form-control-lg form-control-solid" type="text"
                                    name="username" autocomplete="off" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="fv-row mb-10">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-stack mb-2">
                                    <!--begin::Label-->
                                    <label class="form-label fw-bold text-dark fs-6 mb-0">Mật khẩu</label>
                                    <!--end::Label-->

                                    <!--begin::Link-->
                                    <a href="<?php project ?>forgotpassword" class="link-primary fs-6 fw-bold">
                                        Quên mật khẩu?
                                    </a>
                                    <!--end::Link-->
                                </div>
                                <!--end::Wrapper-->

                                <!--begin::Input-->
                                <input class="form-control form-control-lg form-control-solid" type="password"
                                    name="password" autocomplete="off" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Actions-->
                            <div class="text-center">
                                <!--begin::Submit button-->
                                <!-- <input type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5" value="Đăng nhập"> -->
                                <input type="submit" id="" class="btn btn-lg btn-primary w-100 mb-5" value="Đăng nhập">
                                <!-- <span class="indicator-label">
                Đăng nhập
            </span> -->

                                <!-- <span class="indicator-progress">
                Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
            </span> -->
                                </input>
                                <!--end::Submit button-->

                                <!--begin::Separator-->
                                <div class="text-center text-muted text-uppercase fw-bold mb-5">Hoặc</div>
                                <!--end::Separator-->

                                <!--begin::Google link-->
                                <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
                                    <img alt="Logo" src="<?= PUBLIC_URL ?>media/svg/brand-logos/google-icon.svg"
                                        class="h-20px me-3" />
                                    Tiếp tục với Google
                                </a>
                                <!--end::Google link-->

                                <!--begin::Google link-->
                                <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
                                    <img alt="Logo" src="<?= PUBLIC_URL ?>media/svg/brand-logos/facebook-4.svg"
                                        class="h-20px me-3" />
                                    Tiếp tục với Facebook
                                </a>
                                <!--end::Google link-->

                                <!--begin::Google link-->
                                <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100">
                                    <img alt="Logo" src="<?= PUBLIC_URL ?>media/svg/brand-logos/apple-black.svg"
                                        class="theme-light-show h-20px me-3" />
                                    <img alt="Logo" src="<?= PUBLIC_URL ?>media/svg/brand-logos/apple-black-dark.svg"
                                        class="theme-dark-show h-20px me-3" />
                                    Tiếp tục với Apple
                                </a>
                                <!--end::Google link-->
                            </div>
                            <!--end::Actions-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Content-->

                <!--begin::Footer-->
                <div class="d-flex flex-center flex-wrap fs-6 p-5 pb-0">
                    <!--begin::Links-->
                    <div class="d-flex flex-center fw-semibold fs-6">
                        <a href="https://keenthemes.com" class="text-muted text-hover-primary px-2"
                            target="_blank">About</a>

                        <a href="https://devs.keenthemes.com" class="text-muted text-hover-primary px-2"
                            target="_blank">Support</a>

                        <a href="https://keenthemes.com/products/axel-html-pro"
                            class="text-muted text-hover-primary px-2" target="_blank">Purchase</a>
                    </div>
                    <!--end::Links-->
                </div>
                <!--end::Footer-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Authentication - Sign-in-->
    </div>
    <!--end::Root-->

    <!--begin::Javascript-->
    <script>
        var hostUrl = "<?= PUBLIC_URL ?>";        </script>

    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="<?= PUBLIC_URL ?>plugins/global/plugins.bundle.js"></script>
    <script src="<?= PUBLIC_URL ?>js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->


    <!--begin::Custom Javascript(used for this page only)-->
    <script src="<?= PUBLIC_URL ?>js/custom/authentication/sign-in/general.js"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->

</body>
<!--end::Body-->

</html>