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
    <title><?= $title ?></title>
    <meta charset="utf-8" />
    <meta name="description"
        content="Axel admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets." />
    <meta name="keywords"
        content="Axel theme, bootstrap, bootstrap 5, admin themes, free admin themes, bootstrap admin, bootstrap dashboard" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title"
        content="<?= $title ?>" />
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
        <!--begin::Authentication - 404 Page-->
        <div class="d-flex flex-column flex-center flex-column-fluid p-10">
            <!--begin::Illustration-->
            <img src="<?= PUBLIC_URL ?>media/illustrations/dozzy-1/18.png" alt=""
                class="mw-100 mb-10 h-lg-450px" />
            <!--end::Illustration-->

            <!--begin::Message-->
            <h1 class="fw-semibold mb-10" style="color: #A3A3C7">Có vẻ như không có gì ở đây</h1>
            <!--end::Message-->

            <!--begin::Link-->
            <a href="/axel-html-pro/index.html" class="btn btn-primary">Trở về trang chủ</a>
            <!--end::Link-->
        </div>
        <!--end::Authentication - 404 Page-->

    </div>
    <!--end::Root-->

    <!--begin::Javascript-->
    <script>
        var hostUrl = "<?= PUBLIC_URL ?>";        </script>

    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="<?= PUBLIC_URL ?>plugins/global/plugins.bundle.js"></script>
    <script src="<?= PUBLIC_URL ?>js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->


    <!--end::Javascript-->

</body>
<!--end::Body-->

</html>