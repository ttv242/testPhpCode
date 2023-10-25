<style>
    .app-content-menu {
        display: none;
    }
</style>

<!--begin::Navbar-->
<div class="card mb-5 mb-xl-10">
    <div class="card-body pt-9 pb-0">
        <!--begin::Details-->
        <div class="d-flex flex-wrap flex-sm-nowrap mb-3">
            <!--begin: Pic-->
            <div class="me-7 mb-4">
                <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                    <img src="/axel-html-pro/assets/media/avatars/300-3.jpg" alt="image" />
                    <div
                        class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px">
                    </div>
                </div>
            </div>
            <!--end::Pic-->

            <!--begin::Info-->
            <div class="flex-grow-1">
                <!--begin::Title-->
                <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                    <!--begin::User-->
                    <div class="d-flex flex-column">
                        <!--begin::Name-->
                        <div class="d-flex align-items-center mb-2">
                            <a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1"><?= $_SESSION['name'] ?></a>
                            <a href="#"><i class="ki-duotone ki-verify fs-1 text-primary"><span
                                        class="path1"></span><span class="path2"></span></i></a>

                            <a href="#" class="btn btn-sm btn-light-success fw-bold ms-2 fs-8 py-1 px-3"
                                data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan" data-bs-toggle="modal"
                                data-bs-target="#kt_modal_upgrade_plan">Upgrade to Pro</a>
                        </div>
                        <!--end::Name-->

                        <!--begin::Info-->
                        <div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">
                            <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                <i class="ki-duotone ki-profile-circle fs-4 me-1"><span class="path1"></span><span
                                        class="path2"></span><span class="path3"></span></i> React Developer
                            </a>
                            <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                <i class="ki-duotone ki-geolocation fs-4 me-1"><span class="path1"></span><span
                                        class="path2"></span></i> SF, Bay Area
                            </a>
                            <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">
                                <i class="ki-duotone ki-sms fs-4 me-1"><span class="path1"></span><span
                                        class="path2"></span></i> <?= $_SESSION['email'] ?>
                            </a>
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::User-->

                    <!--begin::Actions-->
                    <div class="d-flex my-4">
                        <a href="#" class="btn btn-sm btn-light me-2" id="kt_user_follow_button">
                            <i class="ki-duotone ki-check fs-2 d-none"></i>
                            <!--begin::Indicator label-->
                            <span class="indicator-label">
                                Follow</span>
                            <!--end::Indicator label-->

                            <!--begin::Indicator progress-->
                            <span class="indicator-progress">
                                Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </span>
                            <!--end::Indicator progress--> </a>

                        <a href="#" class="btn btn-sm btn-primary me-2" data-bs-toggle="modal"
                            data-bs-target="#kt_modal_offer_a_deal">Hire Me</a>

                        <!--begin::Menu-->
                        <div class="me-0">
                            <button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary"
                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                <i class="bi bi-three-dots fs-3"></i>
                            </button>

                            <!--begin::Menu 3-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3"
                                data-kt-menu="true">
                                <!--begin::Heading-->
                                <div class="menu-item px-3">
                                    <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                        Payments
                                    </div>
                                </div>
                                <!--end::Heading-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">
                                        Create Invoice
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link flex-stack px-3">
                                        Create Payment

                                        <span class="ms-2" data-bs-toggle="tooltip"
                                            title="Specify a target name for future usage and reference">
                                            <i class="ki-duotone ki-information fs-6"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span></i> </span>
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">
                                        Generate Bill
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                    data-kt-menu-placement="right-end">
                                    <a href="#" class="menu-link px-3">
                                        <span class="menu-title">Subscription</span>
                                        <span class="menu-arrow"></span>
                                    </a>

                                    <!--begin::Menu sub-->
                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">
                                                Plans
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">
                                                Billing
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">
                                                Statements
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu separator-->
                                        <div class="separator my-2"></div>
                                        <!--end::Menu separator-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content px-3">
                                                <!--begin::Switch-->
                                                <label
                                                    class="form-check form-switch form-check-custom form-check-solid">
                                                    <!--begin::Input-->
                                                    <input class="form-check-input w-30px h-20px" type="checkbox"
                                                        value="1" checked="checked" name="notifications" />
                                                    <!--end::Input-->

                                                    <!--end::Label-->
                                                    <span class="form-check-label text-muted fs-6">
                                                        Recuring
                                                    </span>
                                                    <!--end::Label-->
                                                </label>
                                                <!--end::Switch-->
                                            </div>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu sub-->
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3 my-1">
                                    <a href="#" class="menu-link px-3">
                                        Settings
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu 3-->
                        </div>
                        <!--end::Menu-->
                    </div>
                    <!--end::Actions-->
                </div>
                <!--end::Title-->

                <!--begin::Stats-->
                <div class="d-flex flex-wrap flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column flex-grow-1 pe-8">
                        <!--begin::Stats-->
                        <div class="d-flex flex-wrap">
                            <!--begin::Stat-->
                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                <!--begin::Number-->
                                <div class="d-flex align-items-center">
                                    <i class="ki-duotone ki-arrow-up fs-2 text-success me-2"><span
                                            class="path1"></span><span class="path2"></span></i>
                                    <div class="fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="4500"
                                        data-kt-countup-prefix="$">0</div>
                                </div>
                                <!--end::Number-->

                                <!--begin::Label-->
                                <div class="fw-semibold fs-6 text-gray-400">Earnings</div>
                                <!--end::Label-->
                            </div>
                            <!--end::Stat-->

                            <!--begin::Stat-->
                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                <!--begin::Number-->
                                <div class="d-flex align-items-center">
                                    <i class="ki-duotone ki-arrow-down fs-2 text-danger me-2"><span
                                            class="path1"></span><span class="path2"></span></i>
                                    <div class="fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="75">0
                                    </div>
                                </div>
                                <!--end::Number-->

                                <!--begin::Label-->
                                <div class="fw-semibold fs-6 text-gray-400">Projects</div>
                                <!--end::Label-->
                            </div>
                            <!--end::Stat-->

                            <!--begin::Stat-->
                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                <!--begin::Number-->
                                <div class="d-flex align-items-center">
                                    <i class="ki-duotone ki-arrow-up fs-2 text-success me-2"><span
                                            class="path1"></span><span class="path2"></span></i>
                                    <div class="fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="60"
                                        data-kt-countup-prefix="%">0</div>
                                </div>
                                <!--end::Number-->

                                <!--begin::Label-->
                                <div class="fw-semibold fs-6 text-gray-400">Success Rate</div>
                                <!--end::Label-->
                            </div>
                            <!--end::Stat-->
                        </div>
                        <!--end::Stats-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Progress-->
                    <div class="d-flex align-items-center w-200px w-sm-300px flex-column mt-3">
                        <div class="d-flex justify-content-between w-100 mt-auto mb-2">
                            <span class="fw-semibold fs-6 text-gray-400">Profile Compleation</span>
                            <span class="fw-bold fs-6">50%</span>
                        </div>

                        <div class="h-5px mx-3 w-100 bg-light mb-3">
                            <div class="bg-success rounded h-5px" role="progressbar" style="width: 50%;"
                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <!--end::Progress-->
                </div>
                <!--end::Stats-->
            </div>
            <!--end::Info-->
        </div>
        <!--end::Details-->

        <!--begin::Navs-->
        <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
            <!--begin::Nav item-->
            <li class="nav-item mt-2">
                <a class="nav-link text-active-primary ms-0 me-10 py-5 active"
                    href="<?= project . 'userprofile?username=' . $_SESSION['username']?>">
                    Tổng quan </a>
            </li>
            <!--end::Nav item-->
            <!--begin::Nav item-->
            <li class="nav-item mt-2">
                <a class="nav-link text-active-primary ms-0 me-10 py-5 " href="/axel-html-pro/account/settings.html">
                    Settings </a>
            </li>
            <!--end::Nav item-->
            <!--begin::Nav item-->
            <li class="nav-item mt-2">
                <a class="nav-link text-active-primary ms-0 me-10 py-5 " href="/axel-html-pro/account/security.html">
                    Security </a>
            </li>
            <!--end::Nav item-->
            <!--begin::Nav item-->
            <li class="nav-item mt-2">
                <a class="nav-link text-active-primary ms-0 me-10 py-5 " href="/axel-html-pro/account/activity.html">
                    Activity </a>
            </li>
            <!--end::Nav item-->
            <!--begin::Nav item-->
            <li class="nav-item mt-2">
                <a class="nav-link text-active-primary ms-0 me-10 py-5 " href="/axel-html-pro/account/billing.html">
                    Billing </a>
            </li>
            <!--end::Nav item-->
            <!--begin::Nav item-->
            <li class="nav-item mt-2">
                <a class="nav-link text-active-primary ms-0 me-10 py-5 " href="/axel-html-pro/account/statements.html">
                    Statements </a>
            </li>
            <!--end::Nav item-->
            <!--begin::Nav item-->
            <li class="nav-item mt-2">
                <a class="nav-link text-active-primary ms-0 me-10 py-5 " href="/axel-html-pro/account/referrals.html">
                    Referrals </a>
            </li>
            <!--end::Nav item-->
            <!--begin::Nav item-->
            <li class="nav-item mt-2">
                <a class="nav-link text-active-primary ms-0 me-10 py-5 " href="/axel-html-pro/account/api-keys.html">
                    API Keys </a>
            </li>
            <!--end::Nav item-->
            <!--begin::Nav item-->
            <li class="nav-item mt-2">
                <a class="nav-link text-active-primary ms-0 me-10 py-5 " href="/axel-html-pro/account/logs.html">
                    Logs </a>
            </li>
            <!--end::Nav item-->
        </ul>
        <!--begin::Navs-->
    </div>
</div>
<!--end::Navbar-->
<!--begin::details View-->
<div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
    <!--begin::Card header-->
    <div class="card-header cursor-pointer">
        <!--begin::Card title-->
        <div class="card-title m-0">
            <h3 class="fw-bold m-0">Chi tiết hồ sơ</h3>
        </div>
        <!--end::Card title-->

        <!--begin::Action-->
        <a href="<?= project . 'updateUserprofile?username=' . $_SESSION['username']?>" class="btn btn-sm btn-primary align-self-center">Chỉnh sửa hồ sơ</a>
        <!--end::Action-->
    </div>
    <!--begin::Card header-->

    <!--begin::Card body-->
    <div class="card-body p-9">
        <!--begin::Row-->
        <div class="row mb-7">
            <!--begin::Label-->
            <label class="col-lg-4 fw-semibold text-muted">Họ và tên</label>
            <!--end::Label-->

            <!--begin::Col-->
            <div class="col-lg-8">
                <span class="fw-bold fs-6 text-gray-800"><?= $_SESSION['name'] ?></span>
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->

        <!--begin::Input group-->
        <div class="row mb-7">
            <!--begin::Label-->
            <label class="col-lg-4 fw-semibold text-muted">Công ty</label>
            <!--end::Label-->

            <!--begin::Col-->
            <div class="col-lg-8 fv-row">
                <span class="fw-semibold text-gray-800 fs-6">FPT</span>
            </div>
            <!--end::Col-->
        </div>
        <!--end::Input group-->

        <!--begin::Input group-->
        <div class="row mb-7">
            <!--begin::Label-->
            <label class="col-lg-4 fw-semibold text-muted">
                Số điện thoại

                <span class="ms-1" data-bs-toggle="tooltip" title="Phone number must be active">
                    <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span
                            class="path2"></span><span class="path3"></span></i> </span>
            </label>
            <!--end::Label-->

            <!--begin::Col-->
            <div class="col-lg-8 d-flex align-items-center">
                <span class="fw-bold fs-6 text-gray-800 me-2">044 3276 454 935</span>
                <span class="badge badge-success">Verified</span>
            </div>
            <!--end::Col-->
        </div>
        <!--end::Input group-->

        <!--begin::Input group-->
        <div class="row mb-7">
            <!--begin::Label-->
            <label class="col-lg-4 fw-semibold text-muted">Email</label>
            <!--end::Label-->

            <!--begin::Col-->
            <div class="col-lg-8">
                <a href="#" class="fw-semibold fs-6 text-gray-800 text-hover-primary"><?= $_SESSION['email'] ?></a>
            </div>
            <!--end::Col-->
        </div>
        <!--end::Input group-->

        <!--begin::Input group-->
        <div class="row mb-7">
            <!--begin::Label-->
            <label class="col-lg-4 fw-semibold text-muted">
                Quê quán

                <span class="ms-1" data-bs-toggle="tooltip" title="Country of origination">
                    <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span
                            class="path2"></span><span class="path3"></span></i> </span>
            </label>
            <!--end::Label-->

            <!--begin::Col-->
            <div class="col-lg-8">
                <span class="fw-bold fs-6 text-gray-800">Germany</span>
            </div>
            <!--end::Col-->
        </div>
        <!--end::Input group-->


        <!--begin::Notice-->
        <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed  p-6">
            <!--begin::Icon-->
            <i class="ki-duotone ki-information fs-2tx text-warning me-4"><span class="path1"></span><span
                    class="path2"></span><span class="path3"></span></i> <!--end::Icon-->

            <!--begin::Wrapper-->
            <div class="d-flex flex-stack flex-grow-1 ">
                <!--begin::Content-->
                <div class=" fw-semibold">
                    <h4 class="text-gray-900 fw-bold">Hồ sơ chưa hoàn thiện!</h4>

                    <div class="fs-6 text-gray-700 ">Vui lòng cập nhật thông tin chi tiết để hoàn chỉnh hồ sơ chi tiếttiết<a
                            class="fw-bold" href="/axel-html-pro/account/billing.html">Chỉnh sửa hồ sơ</a>.</div>
                </div>
                <!--end::Content-->

            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Notice-->
    </div>
    <!--end::Card body-->
</div>
<!--end::details View-->
<!--begin::Row-->
<div class="row gy-5 g-xl-10">
    <!--begin::Col-->
    <div class="col-xl-8 mb-xl-10">
        <!--begin::Chart widget 5-->
        <div class="card card-flush h-lg-100">
            <!--begin::Header-->
            <div class="card-header flex-nowrap pt-5">
                <!--begin::Title-->
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold text-dark">Top Selling Categories</span>

                    <span class="text-gray-400 pt-2 fw-semibold fs-6">8k social visitors</span>
                </h3>
                <!--end::Title-->

                <!--begin::Toolbar-->
                <div class="card-toolbar">
                    <!--begin::Menu-->
                    <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                        <i class="ki-duotone ki-dots-square fs-1 text-gray-400 me-n1"><span class="path1"></span><span
                                class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                    </button>


                    <!--begin::Menu 2-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                        data-kt-menu="true">
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu separator-->
                        <div class="separator mb-3 opacity-75"></div>
                        <!--end::Menu separator-->

                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3">
                                New Ticket
                            </a>
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3">
                                New Customer
                            </a>
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu item-->
                        <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                            <!--begin::Menu item-->
                            <a href="#" class="menu-link px-3">
                                <span class="menu-title">New Group</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <!--end::Menu item-->

                            <!--begin::Menu sub-->
                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">
                                        Admin Group
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">
                                        Staff Group
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">
                                        Member Group
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu sub-->
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3">
                                New Contact
                            </a>
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu separator-->
                        <div class="separator mt-3 opacity-75"></div>
                        <!--end::Menu separator-->

                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <div class="menu-content px-3 py-3">
                                <a class="btn btn-primary  btn-sm px-4" href="#">
                                    Generate Reports
                                </a>
                            </div>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::Menu 2-->

                    <!--end::Menu-->
                </div>
                <!--end::Toolbar-->
            </div>
            <!--end::Header-->

            <!--begin::Body-->
            <div class="card-body pt-5 ps-6">
                <div id="kt_charts_widget_5" class="min-h-auto"></div>
            </div>
            <!--end::Body-->
        </div>
        <!--end::Chart widget 5-->


    </div>
    <!--end::Col-->

    <!--begin::Col-->
    <div class="col-xl-4 mb-5 mb-xl-10">

        <!--begin::Engage widget 1-->
        <div class="card h-md-100" dir="ltr">
            <!--begin::Body-->
            <div class="card-body d-flex flex-column flex-center">
                <!--begin::Heading-->
                <div class="mb-2">
                    <!--begin::Title-->
                    <h1 class="fw-semibold text-gray-800 text-center lh-lg">
                        Have you tried <br /> new
                        <span class="fw-bolder"> Mobile Application ?</span>
                    </h1>
                    <!--end::Title-->

                    <!--begin::Illustration-->
                    <div class="py-10 text-center">
                        <img src="/axel-html-pro/assets/media/svg/illustrations/easy/1.svg"
                            class="theme-light-show w-200px" alt="" />
                        <img src="/axel-html-pro/assets/media/svg/illustrations/easy/1-dark.svg"
                            class="theme-dark-show w-200px" alt="" />
                    </div>
                    <!--end::Illustration-->
                </div>
                <!--end::Heading-->

                <!--begin::Links-->
                <div class="text-center mb-1">
                    <!--begin::Link-->
                    <a class="btn btn-sm btn-primary me-2" data-bs-target="#kt_modal_create_app" data-bs-toggle="modal">
                        Try now </a>
                    <!--end::Link-->

                    <!--begin::Link-->
                    <a class="btn btn-sm btn-light" href="/axel-html-pro/apps/invoices/view/invoice-1.html">
                        Learn more </a>
                    <!--end::Link-->
                </div>
                <!--end::Links-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Engage widget 1-->

    </div>
    <!--end::Col-->
</div>
<!--end::Row-->

<!--begin::Row-->
<div class="row gy-5 g-xl-10">
    <!--begin::Col-->
    <div class="col-xl-4">

        <!--begin::List widget 5-->
        <div class="card card-flush h-xl-100">
            <!--begin::Header-->
            <div class="card-header pt-7">
                <!--begin::Title-->
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold text-dark">Product Delivery</span>
                    <span class="text-gray-400 mt-1 fw-semibold fs-6">1M Products Shipped so far</span>
                </h3>
                <!--end::Title-->

                <!--begin::Toolbar-->
                <div class="card-toolbar">
                    <a href="/axel-html-pro/apps/ecommerce/sales/details.html" class="btn btn-sm btn-light">Order
                        Details</a>
                </div>
                <!--end::Toolbar-->
            </div>
            <!--end::Header-->

            <!--begin::Body-->
            <div class="card-body">
                <!--begin::Scroll-->
                <div class="hover-scroll-overlay-y pe-6 me-n6" style="height: 415px">
                    <!--begin::Item-->
                    <div class="border border-dashed border-gray-300 rounded px-7 py-3 mb-6">
                        <!--begin::Info-->
                        <div class="d-flex flex-stack mb-3">
                            <!--begin::Wrapper-->
                            <div class="me-3">
                                <!--begin::Icon-->
                                <img src="/axel-html-pro/assets/media/stock/ecommerce/210.png" class="w-50px ms-n1 me-1"
                                    alt="" />
                                <!--end::Icon-->

                                <!--begin::Title-->
                                <a href="/axel-html-pro/apps/ecommerce/catalog/edit-product.html"
                                    class="text-gray-800 text-hover-primary fw-bold">Elephant 1802</a>
                                <!--end::Title-->
                            </div>
                            <!--end::Wrapper-->

                            <!--begin::Action-->
                            <div class="m-0">
                                <!--begin::Menu-->
                                <button
                                    class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                    data-kt-menu-overflow="true">

                                    <i class="ki-duotone ki-dots-square fs-1"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span><span
                                            class="path4"></span></i>
                                </button>

                                <!--begin::Menu 2-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                    data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions
                                        </div>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu separator-->
                                    <div class="separator mb-3 opacity-75"></div>
                                    <!--end::Menu separator-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">
                                            New Ticket
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">
                                            New Customer
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                        data-kt-menu-placement="right-start">
                                        <!--begin::Menu item-->
                                        <a href="#" class="menu-link px-3">
                                            <span class="menu-title">New Group</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <!--end::Menu item-->

                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    Admin Group
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    Staff Group
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    Member Group
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">
                                            New Contact
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu separator-->
                                    <div class="separator mt-3 opacity-75"></div>
                                    <!--end::Menu separator-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content px-3 py-3">
                                            <a class="btn btn-primary  btn-sm px-4" href="#">
                                                Generate Reports
                                            </a>
                                        </div>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu 2-->

                                <!--end::Menu-->
                            </div>
                            <!--end::Action-->
                        </div>
                        <!--end::Info-->

                        <!--begin::Customer-->
                        <div class="d-flex flex-stack">
                            <!--begin::Name-->
                            <span class="text-gray-400 fw-bold">To:
                                <a href="/axel-html-pro/apps/ecommerce/sales/details.html"
                                    class="text-gray-800 text-hover-primary fw-bold">
                                    Jason Bourne </a>
                            </span>
                            <!--end::Name-->

                            <!--begin::Label-->
                            <span class="badge badge-light-success">Delivered</span>
                            <!--end::Label-->
                        </div>
                        <!--end::Customer-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="border border-dashed border-gray-300 rounded px-7 py-3 mb-6">
                        <!--begin::Info-->
                        <div class="d-flex flex-stack mb-3">
                            <!--begin::Wrapper-->
                            <div class="me-3">
                                <!--begin::Icon-->
                                <img src="/axel-html-pro/assets/media/stock/ecommerce/209.png" class="w-50px ms-n1 me-1"
                                    alt="" />
                                <!--end::Icon-->

                                <!--begin::Title-->
                                <a href="/axel-html-pro/apps/ecommerce/catalog/edit-product.html"
                                    class="text-gray-800 text-hover-primary fw-bold">RiseUP</a>
                                <!--end::Title-->
                            </div>
                            <!--end::Wrapper-->

                            <!--begin::Action-->
                            <div class="m-0">
                                <!--begin::Menu-->
                                <button
                                    class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                    data-kt-menu-overflow="true">

                                    <i class="ki-duotone ki-dots-square fs-1"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span><span
                                            class="path4"></span></i>
                                </button>

                                <!--begin::Menu 2-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                    data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions
                                        </div>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu separator-->
                                    <div class="separator mb-3 opacity-75"></div>
                                    <!--end::Menu separator-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">
                                            New Ticket
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">
                                            New Customer
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                        data-kt-menu-placement="right-start">
                                        <!--begin::Menu item-->
                                        <a href="#" class="menu-link px-3">
                                            <span class="menu-title">New Group</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <!--end::Menu item-->

                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    Admin Group
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    Staff Group
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    Member Group
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">
                                            New Contact
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu separator-->
                                    <div class="separator mt-3 opacity-75"></div>
                                    <!--end::Menu separator-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content px-3 py-3">
                                            <a class="btn btn-primary  btn-sm px-4" href="#">
                                                Generate Reports
                                            </a>
                                        </div>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu 2-->

                                <!--end::Menu-->
                            </div>
                            <!--end::Action-->
                        </div>
                        <!--end::Info-->

                        <!--begin::Customer-->
                        <div class="d-flex flex-stack">
                            <!--begin::Name-->
                            <span class="text-gray-400 fw-bold">To:
                                <a href="/axel-html-pro/apps/ecommerce/sales/details.html"
                                    class="text-gray-800 text-hover-primary fw-bold">
                                    Marie Durant </a>
                            </span>
                            <!--end::Name-->

                            <!--begin::Label-->
                            <span class="badge badge-light-primary">Shipping</span>
                            <!--end::Label-->
                        </div>
                        <!--end::Customer-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="border border-dashed border-gray-300 rounded px-7 py-3 mb-6">
                        <!--begin::Info-->
                        <div class="d-flex flex-stack mb-3">
                            <!--begin::Wrapper-->
                            <div class="me-3">
                                <!--begin::Icon-->
                                <img src="/axel-html-pro/assets/media/stock/ecommerce/214.png" class="w-50px ms-n1 me-1"
                                    alt="" />
                                <!--end::Icon-->

                                <!--begin::Title-->
                                <a href="/axel-html-pro/apps/ecommerce/catalog/edit-product.html"
                                    class="text-gray-800 text-hover-primary fw-bold">Yellow Stone</a>
                                <!--end::Title-->
                            </div>
                            <!--end::Wrapper-->

                            <!--begin::Action-->
                            <div class="m-0">
                                <!--begin::Menu-->
                                <button
                                    class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                    data-kt-menu-overflow="true">

                                    <i class="ki-duotone ki-dots-square fs-1"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span><span
                                            class="path4"></span></i>
                                </button>

                                <!--begin::Menu 2-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                    data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions
                                        </div>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu separator-->
                                    <div class="separator mb-3 opacity-75"></div>
                                    <!--end::Menu separator-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">
                                            New Ticket
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">
                                            New Customer
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                        data-kt-menu-placement="right-start">
                                        <!--begin::Menu item-->
                                        <a href="#" class="menu-link px-3">
                                            <span class="menu-title">New Group</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <!--end::Menu item-->

                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    Admin Group
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    Staff Group
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    Member Group
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">
                                            New Contact
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu separator-->
                                    <div class="separator mt-3 opacity-75"></div>
                                    <!--end::Menu separator-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content px-3 py-3">
                                            <a class="btn btn-primary  btn-sm px-4" href="#">
                                                Generate Reports
                                            </a>
                                        </div>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu 2-->

                                <!--end::Menu-->
                            </div>
                            <!--end::Action-->
                        </div>
                        <!--end::Info-->

                        <!--begin::Customer-->
                        <div class="d-flex flex-stack">
                            <!--begin::Name-->
                            <span class="text-gray-400 fw-bold">To:
                                <a href="/axel-html-pro/apps/ecommerce/sales/details.html"
                                    class="text-gray-800 text-hover-primary fw-bold">
                                    Dan Wilson </a>
                            </span>
                            <!--end::Name-->

                            <!--begin::Label-->
                            <span class="badge badge-light-danger">Confirmed</span>
                            <!--end::Label-->
                        </div>
                        <!--end::Customer-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="border border-dashed border-gray-300 rounded px-7 py-3 mb-6">
                        <!--begin::Info-->
                        <div class="d-flex flex-stack mb-3">
                            <!--begin::Wrapper-->
                            <div class="me-3">
                                <!--begin::Icon-->
                                <img src="/axel-html-pro/assets/media/stock/ecommerce/211.png" class="w-50px ms-n1 me-1"
                                    alt="" />
                                <!--end::Icon-->

                                <!--begin::Title-->
                                <a href="/axel-html-pro/apps/ecommerce/catalog/edit-product.html"
                                    class="text-gray-800 text-hover-primary fw-bold">Elephant 1802</a>
                                <!--end::Title-->
                            </div>
                            <!--end::Wrapper-->

                            <!--begin::Action-->
                            <div class="m-0">
                                <!--begin::Menu-->
                                <button
                                    class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                    data-kt-menu-overflow="true">

                                    <i class="ki-duotone ki-dots-square fs-1"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span><span
                                            class="path4"></span></i>
                                </button>

                                <!--begin::Menu 2-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                    data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions
                                        </div>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu separator-->
                                    <div class="separator mb-3 opacity-75"></div>
                                    <!--end::Menu separator-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">
                                            New Ticket
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">
                                            New Customer
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                        data-kt-menu-placement="right-start">
                                        <!--begin::Menu item-->
                                        <a href="#" class="menu-link px-3">
                                            <span class="menu-title">New Group</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <!--end::Menu item-->

                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    Admin Group
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    Staff Group
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    Member Group
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">
                                            New Contact
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu separator-->
                                    <div class="separator mt-3 opacity-75"></div>
                                    <!--end::Menu separator-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content px-3 py-3">
                                            <a class="btn btn-primary  btn-sm px-4" href="#">
                                                Generate Reports
                                            </a>
                                        </div>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu 2-->

                                <!--end::Menu-->
                            </div>
                            <!--end::Action-->
                        </div>
                        <!--end::Info-->

                        <!--begin::Customer-->
                        <div class="d-flex flex-stack">
                            <!--begin::Name-->
                            <span class="text-gray-400 fw-bold">To:
                                <a href="/axel-html-pro/apps/ecommerce/sales/details.html"
                                    class="text-gray-800 text-hover-primary fw-bold">
                                    Lebron Wayde </a>
                            </span>
                            <!--end::Name-->

                            <!--begin::Label-->
                            <span class="badge badge-light-success">Delivered</span>
                            <!--end::Label-->
                        </div>
                        <!--end::Customer-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="border border-dashed border-gray-300 rounded px-7 py-3 mb-6">
                        <!--begin::Info-->
                        <div class="d-flex flex-stack mb-3">
                            <!--begin::Wrapper-->
                            <div class="me-3">
                                <!--begin::Icon-->
                                <img src="/axel-html-pro/assets/media/stock/ecommerce/215.png" class="w-50px ms-n1 me-1"
                                    alt="" />
                                <!--end::Icon-->

                                <!--begin::Title-->
                                <a href="/axel-html-pro/apps/ecommerce/catalog/edit-product.html"
                                    class="text-gray-800 text-hover-primary fw-bold">RiseUP</a>
                                <!--end::Title-->
                            </div>
                            <!--end::Wrapper-->

                            <!--begin::Action-->
                            <div class="m-0">
                                <!--begin::Menu-->
                                <button
                                    class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                    data-kt-menu-overflow="true">

                                    <i class="ki-duotone ki-dots-square fs-1"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span><span
                                            class="path4"></span></i>
                                </button>

                                <!--begin::Menu 2-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                    data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions
                                        </div>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu separator-->
                                    <div class="separator mb-3 opacity-75"></div>
                                    <!--end::Menu separator-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">
                                            New Ticket
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">
                                            New Customer
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                        data-kt-menu-placement="right-start">
                                        <!--begin::Menu item-->
                                        <a href="#" class="menu-link px-3">
                                            <span class="menu-title">New Group</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <!--end::Menu item-->

                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    Admin Group
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    Staff Group
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    Member Group
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">
                                            New Contact
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu separator-->
                                    <div class="separator mt-3 opacity-75"></div>
                                    <!--end::Menu separator-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content px-3 py-3">
                                            <a class="btn btn-primary  btn-sm px-4" href="#">
                                                Generate Reports
                                            </a>
                                        </div>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu 2-->

                                <!--end::Menu-->
                            </div>
                            <!--end::Action-->
                        </div>
                        <!--end::Info-->

                        <!--begin::Customer-->
                        <div class="d-flex flex-stack">
                            <!--begin::Name-->
                            <span class="text-gray-400 fw-bold">To:
                                <a href="/axel-html-pro/apps/ecommerce/sales/details.html"
                                    class="text-gray-800 text-hover-primary fw-bold">
                                    Ana Simmons </a>
                            </span>
                            <!--end::Name-->

                            <!--begin::Label-->
                            <span class="badge badge-light-primary">Shipping</span>
                            <!--end::Label-->
                        </div>
                        <!--end::Customer-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="border border-dashed border-gray-300 rounded px-7 py-3 ">
                        <!--begin::Info-->
                        <div class="d-flex flex-stack mb-3">
                            <!--begin::Wrapper-->
                            <div class="me-3">
                                <!--begin::Icon-->
                                <img src="/axel-html-pro/assets/media/stock/ecommerce/192.png" class="w-50px ms-n1 me-1"
                                    alt="" />
                                <!--end::Icon-->

                                <!--begin::Title-->
                                <a href="/axel-html-pro/apps/ecommerce/catalog/edit-product.html"
                                    class="text-gray-800 text-hover-primary fw-bold">Yellow Stone</a>
                                <!--end::Title-->
                            </div>
                            <!--end::Wrapper-->

                            <!--begin::Action-->
                            <div class="m-0">
                                <!--begin::Menu-->
                                <button
                                    class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                    data-kt-menu-overflow="true">

                                    <i class="ki-duotone ki-dots-square fs-1"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span><span
                                            class="path4"></span></i>
                                </button>

                                <!--begin::Menu 2-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                    data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions
                                        </div>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu separator-->
                                    <div class="separator mb-3 opacity-75"></div>
                                    <!--end::Menu separator-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">
                                            New Ticket
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">
                                            New Customer
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                        data-kt-menu-placement="right-start">
                                        <!--begin::Menu item-->
                                        <a href="#" class="menu-link px-3">
                                            <span class="menu-title">New Group</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <!--end::Menu item-->

                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    Admin Group
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    Staff Group
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    Member Group
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">
                                            New Contact
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu separator-->
                                    <div class="separator mt-3 opacity-75"></div>
                                    <!--end::Menu separator-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content px-3 py-3">
                                            <a class="btn btn-primary  btn-sm px-4" href="#">
                                                Generate Reports
                                            </a>
                                        </div>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu 2-->

                                <!--end::Menu-->
                            </div>
                            <!--end::Action-->
                        </div>
                        <!--end::Info-->

                        <!--begin::Customer-->
                        <div class="d-flex flex-stack">
                            <!--begin::Name-->
                            <span class="text-gray-400 fw-bold">To:
                                <a href="/axel-html-pro/apps/ecommerce/sales/details.html"
                                    class="text-gray-800 text-hover-primary fw-bold">
                                    Kevin Leonard </a>
                            </span>
                            <!--end::Name-->

                            <!--begin::Label-->
                            <span class="badge badge-light-danger">Confirmed</span>
                            <!--end::Label-->
                        </div>
                        <!--end::Customer-->
                    </div>
                    <!--end::Item-->
                </div>
                <!--end::Scroll-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::List widget 5-->


    </div>
    <!--end::Col-->

    <!--begin::Col-->
    <div class="col-xl-8">

        <!--begin::Table Widget 5-->
        <div class="card card-flush h-xl-100">
            <!--begin::Card header-->
            <div class="card-header pt-7">
                <!--begin::Title-->
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold text-dark">Stock Report</span>
                    <span class="text-gray-400 mt-1 fw-semibold fs-6">Total 2,356 Items in the Stock</span>
                </h3>
                <!--end::Title-->

                <!--begin::Actions-->
                <div class="card-toolbar">
                    <!--begin::Filters-->
                    <div class="d-flex flex-stack flex-wrap gap-4">
                        <!--begin::Destination-->
                        <div class="d-flex align-items-center fw-bold">
                            <!--begin::Label-->
                            <div class="text-muted fs-7 me-2">Cateogry</div>
                            <!--end::Label-->

                            <!--begin::Select-->
                            <select
                                class="form-select form-select-transparent text-dark fs-7 lh-1 fw-bold py-0 ps-3 w-auto"
                                data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px"
                                data-placeholder="Select an option">
                                <option></option>
                                <option value="Show All" selected>Show All</option>
                                <option value="a">Category A</option>
                                <option value="b">Category B</option>
                            </select>
                            <!--end::Select-->
                        </div>
                        <!--end::Destination-->

                        <!--begin::Status-->
                        <div class="d-flex align-items-center fw-bold">
                            <!--begin::Label-->
                            <div class="text-muted fs-7 me-2">Status</div>
                            <!--end::Label-->

                            <!--begin::Select-->
                            <select
                                class="form-select form-select-transparent text-dark fs-7 lh-1 fw-bold py-0 ps-3 w-auto"
                                data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px"
                                data-placeholder="Select an option" data-kt-table-widget-5="filter_status">
                                <option></option>
                                <option value="Show All" selected>Show All</option>
                                <option value="In Stock">In Stock</option>
                                <option value="Out of Stock">Out of Stock</option>
                                <option value="Low Stock">Low Stock</option>
                            </select>
                            <!--end::Select-->
                        </div>
                        <!--end::Status-->

                        <!--begin::Search-->
                        <a href="/axel-html-pro/apps/ecommerce/catalog/products.html" class="btn btn-light btn-sm">View
                            Stock</a>
                        <!--end::Search-->
                    </div>
                    <!--begin::Filters-->
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Card header-->

            <!--begin::Card body-->
            <div class="card-body">
                <!--begin::Table-->
                <table class="table align-middle table-row-dashed fs-6 gy-3" id="kt_table_widget_5_table">
                    <!--begin::Table head-->
                    <thead>
                        <!--begin::Table row-->
                        <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                            <th class="min-w-150px">Item</th>
                            <th class="text-end pe-3 min-w-100px">Product ID</th>
                            <th class="text-end pe-3 min-w-150px">Date Added</th>
                            <th class="text-end pe-3 min-w-100px">Price</th>
                            <th class="text-end pe-3 min-w-100px">Status</th>
                            <th class="text-end pe-0 min-w-75px">Qty</th>
                        </tr>
                        <!--end::Table row-->
                    </thead>
                    <!--end::Table head-->

                    <!--begin::Table body-->
                    <tbody class="fw-bold text-gray-600">
                        <tr>
                            <!--begin::Item-->
                            <td>
                                <a href="/axel-html-pro/apps/ecommerce/catalog/edit-product.html"
                                    class="text-dark text-hover-primary">Macbook Air M1</a>
                            </td>
                            <!--end::Item-->

                            <!--begin::Product ID-->
                            <td class="text-end">
                                #XGY-356 </td>
                            <!--end::Product ID-->

                            <!--begin::Date added-->
                            <td class="text-end">
                                02 Apr, 2023 </td>
                            <!--end::Date added-->

                            <!--begin::Price-->
                            <td class="text-end">
                                $1,230 </td>
                            <!--end::Price-->

                            <!--begin::Status-->
                            <td class="text-end">
                                <span class="badge py-3 px-4 fs-7 badge-light-primary">In Stock</span>
                            </td>
                            <!--end::Status-->

                            <!--begin::Qty-->
                            <td class="text-end" data-order="58">
                                <span class="text-dark fw-bold">58 PCS</span>
                            </td>
                            <!--end::Qty-->
                        </tr>
                        <tr>
                            <!--begin::Item-->
                            <td>
                                <a href="/axel-html-pro/apps/ecommerce/catalog/edit-product.html"
                                    class="text-dark text-hover-primary">Surface Laptop 4</a>
                            </td>
                            <!--end::Item-->

                            <!--begin::Product ID-->
                            <td class="text-end">
                                #YHD-047 </td>
                            <!--end::Product ID-->

                            <!--begin::Date added-->
                            <td class="text-end">
                                01 Apr, 2023 </td>
                            <!--end::Date added-->

                            <!--begin::Price-->
                            <td class="text-end">
                                $1,060 </td>
                            <!--end::Price-->

                            <!--begin::Status-->
                            <td class="text-end">
                                <span class="badge py-3 px-4 fs-7 badge-light-danger">Out of Stock</span>
                            </td>
                            <!--end::Status-->

                            <!--begin::Qty-->
                            <td class="text-end" data-order="0">
                                <span class="text-dark fw-bold">0 PCS</span>
                            </td>
                            <!--end::Qty-->
                        </tr>
                        <tr>
                            <!--begin::Item-->
                            <td>
                                <a href="/axel-html-pro/apps/ecommerce/catalog/edit-product.html"
                                    class="text-dark text-hover-primary">Logitech MX 250</a>
                            </td>
                            <!--end::Item-->

                            <!--begin::Product ID-->
                            <td class="text-end">
                                #SRR-678 </td>
                            <!--end::Product ID-->

                            <!--begin::Date added-->
                            <td class="text-end">
                                24 Mar, 2023 </td>
                            <!--end::Date added-->

                            <!--begin::Price-->
                            <td class="text-end">
                                $64 </td>
                            <!--end::Price-->

                            <!--begin::Status-->
                            <td class="text-end">
                                <span class="badge py-3 px-4 fs-7 badge-light-primary">In Stock</span>
                            </td>
                            <!--end::Status-->

                            <!--begin::Qty-->
                            <td class="text-end" data-order="290">
                                <span class="text-dark fw-bold">290 PCS</span>
                            </td>
                            <!--end::Qty-->
                        </tr>
                        <tr>
                            <!--begin::Item-->
                            <td>
                                <a href="/axel-html-pro/apps/ecommerce/catalog/edit-product.html"
                                    class="text-dark text-hover-primary">AudioEngine HD3</a>
                            </td>
                            <!--end::Item-->

                            <!--begin::Product ID-->
                            <td class="text-end">
                                #PXF-578 </td>
                            <!--end::Product ID-->

                            <!--begin::Date added-->
                            <td class="text-end">
                                24 Mar, 2023 </td>
                            <!--end::Date added-->

                            <!--begin::Price-->
                            <td class="text-end">
                                $1,060 </td>
                            <!--end::Price-->

                            <!--begin::Status-->
                            <td class="text-end">
                                <span class="badge py-3 px-4 fs-7 badge-light-danger">Out of Stock</span>
                            </td>
                            <!--end::Status-->

                            <!--begin::Qty-->
                            <td class="text-end" data-order="46">
                                <span class="text-dark fw-bold">46 PCS</span>
                            </td>
                            <!--end::Qty-->
                        </tr>
                        <tr>
                            <!--begin::Item-->
                            <td>
                                <a href="/axel-html-pro/apps/ecommerce/catalog/edit-product.html"
                                    class="text-dark text-hover-primary">HP Hyper LTR</a>
                            </td>
                            <!--end::Item-->

                            <!--begin::Product ID-->
                            <td class="text-end">
                                #PXF-778 </td>
                            <!--end::Product ID-->

                            <!--begin::Date added-->
                            <td class="text-end">
                                16 Jan, 2023 </td>
                            <!--end::Date added-->

                            <!--begin::Price-->
                            <td class="text-end">
                                $4500 </td>
                            <!--end::Price-->

                            <!--begin::Status-->
                            <td class="text-end">
                                <span class="badge py-3 px-4 fs-7 badge-light-primary">In Stock</span>
                            </td>
                            <!--end::Status-->

                            <!--begin::Qty-->
                            <td class="text-end" data-order="78">
                                <span class="text-dark fw-bold">78 PCS</span>
                            </td>
                            <!--end::Qty-->
                        </tr>
                        <tr>
                            <!--begin::Item-->
                            <td>
                                <a href="/axel-html-pro/apps/ecommerce/catalog/edit-product.html"
                                    class="text-dark text-hover-primary">Dell 32 UltraSharp</a>
                            </td>
                            <!--end::Item-->

                            <!--begin::Product ID-->
                            <td class="text-end">
                                #XGY-356 </td>
                            <!--end::Product ID-->

                            <!--begin::Date added-->
                            <td class="text-end">
                                22 Dec, 2023 </td>
                            <!--end::Date added-->

                            <!--begin::Price-->
                            <td class="text-end">
                                $1,060 </td>
                            <!--end::Price-->

                            <!--begin::Status-->
                            <td class="text-end">
                                <span class="badge py-3 px-4 fs-7 badge-light-warning">Low Stock</span>
                            </td>
                            <!--end::Status-->

                            <!--begin::Qty-->
                            <td class="text-end" data-order="8">
                                <span class="text-dark fw-bold">8 PCS</span>
                            </td>
                            <!--end::Qty-->
                        </tr>
                        <tr>
                            <!--begin::Item-->
                            <td>
                                <a href="/axel-html-pro/apps/ecommerce/catalog/edit-product.html"
                                    class="text-dark text-hover-primary">Google Pixel 6 Pro</a>
                            </td>
                            <!--end::Item-->

                            <!--begin::Product ID-->
                            <td class="text-end">
                                #XVR-425 </td>
                            <!--end::Product ID-->

                            <!--begin::Date added-->
                            <td class="text-end">
                                27 Dec, 2023 </td>
                            <!--end::Date added-->

                            <!--begin::Price-->
                            <td class="text-end">
                                $1,060 </td>
                            <!--end::Price-->

                            <!--begin::Status-->
                            <td class="text-end">
                                <span class="badge py-3 px-4 fs-7 badge-light-primary">In Stock</span>
                            </td>
                            <!--end::Status-->

                            <!--begin::Qty-->
                            <td class="text-end" data-order="124">
                                <span class="text-dark fw-bold">124 PCS</span>
                            </td>
                            <!--end::Qty-->
                        </tr>
                    </tbody>
                    <!--end::Table body-->
                </table>
                <!--end::Table-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Table Widget 5-->
    </div>
    <!--end::Col-->
</div>
<!--end::Row-->