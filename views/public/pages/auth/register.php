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
    <title>Axel HTML Pro- Bootstrap 5 HTML Multipurpose Admin Dashboard Theme - Axel HTML Pro by KeenThemes</title>
    <meta charset="utf-8" />
    <meta name="description"
        content="Axel admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets." />
    <meta name="keywords"
        content="Axel theme, bootstrap, bootstrap 5, admin themes, free admin themes, bootstrap admin, bootstrap dashboard" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title"
        content="Axel HTML Pro- Bootstrap 5 HTML Multipurpose Admin Dashboard Theme - Axel HTML Pro by KeenThemes" />
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
        <!--begin::Authentication - Sign-up -->
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
                    <div class="w-lg-600px p-10 p-lg-15 mx-auto">

                        <!--begin::Form-->
                        <form class="form w-100" novalidate="novalidate" id="kt_sign_up_form" action="register_"
                            method="POST">
                            <!--begin::Heading-->
                            <div class="mb-10 text-center">
                                <!--begin::Title-->
                                <h1 class="text-dark mb-3">
                                    Tạo một tài khoản
                                </h1>
                                <!--end::Title-->

                                <!--begin::Link-->
                                <div class="text-gray-400 fw-semibold fs-4">
                                    Tạo một tài khoản?

                                    <a href="<?php project ?>login" class="link-primary fw-bold">
                                        Đăng nhập tại đây
                                    </a>
                                </div>
                                <!--end::Link-->
                            </div>
                            <!--end::Heading-->

                            <!--begin::Action-->
                            <button type="button" class="btn btn-light-primary fw-bold w-100 mb-10">
                                <img alt="Logo" src="<?= PUBLIC_URL ?>media/svg/brand-logos/google-icon.svg"
                                    class="h-20px me-3" />
                                Đăng nhập với Google
                            </button>
                            <!--end::Action-->

                            <!--begin::Separator-->
                            <div class="d-flex align-items-center mb-10">
                                <div class="border-bottom border-gray-300 mw-50 w-100"></div>
                                <span class="fw-semibold text-gray-400 fs-7 mx-2">Hoặc</span>
                                <div class="border-bottom border-gray-300 mw-50 w-100"></div>
                            </div>
                            <!--end::Separator-->

                            <?php
                                if (isset($_GET["error"])) {
                                    echo '<h3 class="text-center text-danger">' . $_SESSION["error"] . '</h3>';
                                }
                            ?>


                            <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                <label class="form-label fw-bold text-dark fs-6">Họ và tên</label>
                                <input class="form-control form-control-lg form-control-solid" type="email"
                                    placeholder="" name="name" autocomplete="off" />
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                <label class="form-label fw-bold text-dark fs-6">Email</label>
                                <input class="form-control form-control-lg form-control-solid" type="email"
                                    placeholder="" name="email" autocomplete="off" />
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                <label class="form-label fw-bold text-dark fs-6">Ngày sinh</label>
                                <input class="form-control form-control-lg form-control-solid" type="date"
                                    placeholder="" name="birthday" autocomplete="off" />
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                <label class="form-label fw-bold text-dark fs-6">Tài khoản</label>
                                <input class="form-control form-control-lg form-control-solid" type="text"
                                    placeholder="" name="username" autocomplete="off" />
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="mb-10 fv-row" data-kt-password-meter="true">
                                <!--begin::Wrapper-->
                                <div class="mb-1">
                                    <!--begin::Label-->
                                    <label class="form-label fw-bold text-dark fs-6">
                                        Mật khẩu
                                    </label>
                                    <!--end::Label-->

                                    <!--begin::Input wrapper-->
                                    <div class="position-relative mb-3">
                                        <input class="form-control form-control-lg form-control-solid" type="password"
                                            placeholder="" name="password" autocomplete="off" />

                                        <span
                                            class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                                            data-kt-password-meter-control="visibility">
                                            <i class="ki-duotone ki-eye-slash fs-2"></i> <i
                                                class="ki-duotone ki-eye fs-2 d-none"></i> </span>
                                    </div>
                                    <!--end::Input wrapper-->

                                    <!--begin::Meter-->
                                    <div class="d-flex align-items-center mb-3"
                                        data-kt-password-meter-control="highlight">
                                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                        </div>
                                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                        </div>
                                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                        </div>
                                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                                    </div>
                                    <!--end::Meter-->
                                </div>
                                <!--end::Wrapper-->

                                <!--begin::Hint-->
                                <div class="text-muted">
                                    Sử dụng 8 ký tự trở lên kết hợp chữ cái, số và ký hiệu.
                                </div>
                                <!--end::Hint-->
                            </div>
                            <!--end::Input group--->

                            <!--begin::Input group-->
                            <div class="fv-row mb-5">
                                <label class="form-label fw-bold text-dark fs-6">Xác nhận mật khẩu</label>
                                <input class="form-control form-control-lg form-control-solid" type="password"
                                    placeholder="" name="confirm-password" autocomplete="off" />
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="fv-row mb-10">
                                <label class="form-check form-check-custom form-check-solid form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="toc" value="1" />
                                    <span class="form-check-label fw-semibold text-gray-700 fs-6">
                                        Tôi đồng ý <a href="#" class="ms-1 link-primary">Điều khoản và điều kiện .</a>.
                                    </span>
                                </label>
                            </div>
                            <!--end::Input group-->

                            <!--begin::Actions-->
                            <div class="text-center">
                                <!-- <input type="button" id="kt_sign_up_submit" class="btn btn-lg btn-primary"> -->
                                <input type="submit" id="" class="btn btn-lg btn-primary" value="Đăng ký">
                                <!-- <span class="indicator-label">
                                        Submit
                                    </span>
                                    <span class="indicator-progress">
                                        Please wait... <span
                                            class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                    </span> -->
                                </input>
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
        <!--end::Authentication - Sign-up-->
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
    <script src="<?= PUBLIC_URL ?>js/custom/authentication/sign-up/general.js"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->

</body>
<!--end::Body-->

</html>