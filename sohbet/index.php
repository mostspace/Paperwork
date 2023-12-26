<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/header.php'; ?>

<!--begin::Wrapper-->
<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">

    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/sidebar.php'; ?>
    <!--begin::Main-->
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <!--begin::Content wrapper-->
        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar col-12 px-6 py-6 border-bottom pw-border-stroke">

            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="container-fluid d-flex flex-stack p-0">

                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-9 mt-0 mb-3">
                        <!--begin::Item-->
                        <li class="breadcrumb-item active">Sohbet</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                    <!--begin::Title-->
                    <h1 class="page-heading d-flex text-dark fw-bold fs-4 flex-column justify-content-center my-0">Sohbet</h1>
                    <!--end::Title-->
                </div>
                <!--end::Page title-->

                <!--begin::Dropdown wrapper-->
                <div class="app-navbar-item ms-1 ms-md-3">
                    <!--begin::Menu toggle-->
                    <a href="#" class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px" data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                        <i class="fa-solid fa-ellipsis-vertical fs-4"></i>
                    </a>
                    <!--begin::Menu toggle-->
                    <!--begin::Menu-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-200px" data-kt-menu="true" data-kt-element="theme-mode-menu">
                        <!--begin::Menu item-->
                        <div class="menu-item px-3 my-0">
                            <a href="#" class="menu-link px-3 py-2 fs-8">
                                <span class="menu-title">Açılış Sayfası Yap</span>
                            </a>
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu item-->
                        <div class="menu-item px-3 my-0">
                            <a href="#" class="menu-link px-3 py-2 fs-8">
                                <span class="menu-title">Menüye Ekle</span>
                            </a>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::Menu-->
                </div>
                <!--end::Dropdown wrapper-->

            </div>
            <!--end::Toolbar container-->
        </div>
        <!--end::Toolbar-->

        <!--begin::Content -->
        <div class="mb-20 px-8 py-10 pe-15">
            <!--begin::Row-->
            <div class="row">
                <a href="/sohbet/listele" class="d-flex border align-items-center justify-content-between pw-border-stroke rounded-2 p-5 py-3 hover-pw-bg-primary-300 cursor-pointer">
                    <div class="me-3">
                        <div class="mb-1 position-relative">
                            <i class="fa-solid fa-comment-lines fs-1 text-primary"></i>
                            <span class="position-absolute top-25 start-50 translate-middle w-15px h-15px badge badge-circle pw-bg-primary-300 pw-text-primary-600 fs-9 fw-semibold p-2 mt-n1 ms-n1">3</span>
                        </div>
                        <p class="m-0 fs-9 text-gray-600">21.03.2023</p>
                        <p class="m-0 fs-9 text-gray-600">11:53:21</p>
                    </div>
                    <div class="d-flex">
                        <!--begin::Avatar-->
                        <div class="symbol symbol-30px symbol-circle me-3">
                            <span class="symbol-label bg-warning text-white fs-6 fw-bold">A</span>
                        </div>
                        <!--end::Avatar-->
                        
                        <div class="">
                            <h6 class="fs-8 fw-bold m-0">Abdullah Dayıoğlu</h6>
                            <p class="text-gray-400 fs-9 m-0 py-1">Test Uzmanı</p>
                            <p class="text-danger fs-9 m-0 fw-semibold">1 okunmamış mesajın var!</p>
                        </div>
                    </div>
                    <div class="fs-8 text-gray-700 fw-bold">
                        <i class="fa-solid fa-flag pw-text-success-300 fs-8 me-2"></i> Mobile App Workflow /Anket Taslak 
                    </div>
                    <button class="btn btn-icon bg-transparentn w-25px"><i class="fa-solid fa-trash fs-6 text-primary"></i></button>
                </a>

                <a href="/sohbet/listele" class="d-flex border align-items-center justify-content-between pw-border-stroke rounded-2 p-5 py-3 hover-pw-bg-primary-300 cursor-pointer">
                    <div class="me-3">
                        <div class="mb-1 position-relative">
                            <i class="fa-solid fa-comment-lines fs-1 text-primary"></i>
                            <span class="position-absolute top-25 start-50 translate-middle w-15px h-15px badge badge-circle pw-bg-primary-300 pw-text-primary-600 fs-9 fw-semibold p-2 mt-n1 ms-n1">3</span>
                        </div>
                        <p class="m-0 fs-9 text-gray-600">21.03.2023</p>
                        <p class="m-0 fs-9 text-gray-600">11:53:21</p>
                    </div>
                    <div class="d-flex">
                        <!--begin::Avatar-->
                        <div class="symbol symbol-30px symbol-circle me-3">
                            <span class="symbol-label bg-warning text-white fs-6 fw-bold">A</span>
                        </div>
                        <!--end::Avatar-->
                        
                        <div class="">
                            <h6 class="fs-8 fw-bold m-0">Abdullah Dayıoğlu</h6>
                            <p class="text-gray-400 fs-9 m-0 py-1">Test Uzmanı</p>
                            <p class="text-danger fs-9 m-0 fw-semibold">1 okunmamış mesajın var!</p>
                        </div>
                    </div>
                    <div class="fs-8 text-gray-700 fw-bold">
                        <i class="fa-solid fa-flag pw-text-success-300 fs-8 me-2"></i> Mobile App Workflow /Anket Taslak 
                    </div>
                    <button class="btn btn-icon bg-transparentn w-25px"><i class="fa-solid fa-trash fs-6 text-primary"></i></button>
                </a>

                <a href="/sohbet/listele" class="d-flex border align-items-center justify-content-between pw-border-stroke rounded-2 p-5 py-3 hover-pw-bg-primary-300 cursor-pointer">
                    <div class="me-3">
                        <div class="mb-1 position-relative">
                            <i class="fa-solid fa-comment-lines fs-1 text-primary"></i>
                            <span class="position-absolute top-25 start-50 translate-middle w-15px h-15px badge badge-circle pw-bg-primary-300 pw-text-primary-600 fs-9 fw-semibold p-2 mt-n1 ms-n1">3</span>
                        </div>
                        <p class="m-0 fs-9 text-gray-600">21.03.2023</p>
                        <p class="m-0 fs-9 text-gray-600">11:53:21</p>
                    </div>
                    <div class="d-flex">
                        <!--begin::Avatar-->
                        <div class="symbol symbol-30px symbol-circle me-3">
                            <span class="symbol-label bg-warning text-white fs-6 fw-bold">A</span>
                        </div>
                        <!--end::Avatar-->
                        
                        <div class="">
                            <h6 class="fs-8 fw-bold m-0">Abdullah Dayıoğlu</h6>
                            <p class="text-gray-400 fs-9 m-0 py-1">Test Uzmanı</p>
                            <p class="text-danger fs-9 m-0 fw-semibold">1 okunmamış mesajın var!</p>
                        </div>
                    </div>
                    <div class="fs-8 text-gray-700 fw-bold">
                        <i class="fa-solid fa-flag pw-text-success-300 fs-8 me-2"></i> Mobile App Workflow /Anket Taslak 
                    </div>
                    <button class="btn btn-icon bg-transparentn w-25px"><i class="fa-solid fa-trash fs-6 text-primary"></i></button>
                </a>

                <a href="/sohbet/listele" class="d-flex border align-items-center justify-content-between pw-border-stroke rounded-2 p-5 py-3 hover-pw-bg-primary-300 cursor-pointer">
                    <div class="me-3">
                        <div class="mb-1 position-relative">
                            <i class="fa-solid fa-comment-lines fs-1 text-primary"></i>
                            <span class="position-absolute top-25 start-50 translate-middle w-15px h-15px badge badge-circle pw-bg-primary-300 pw-text-primary-600 fs-9 fw-semibold p-2 mt-n1 ms-n1">3</span>
                        </div>
                        <p class="m-0 fs-9 text-gray-600">21.03.2023</p>
                        <p class="m-0 fs-9 text-gray-600">11:53:21</p>
                    </div>
                    <div class="d-flex">
                        <!--begin::Avatar-->
                        <div class="symbol symbol-30px symbol-circle me-3">
                            <span class="symbol-label bg-warning text-white fs-6 fw-bold">A</span>
                        </div>
                        <!--end::Avatar-->
                        
                        <div class="">
                            <h6 class="fs-8 fw-bold m-0">Abdullah Dayıoğlu</h6>
                            <p class="text-gray-400 fs-9 m-0 py-1">Test Uzmanı</p>
                            <p class="text-danger fs-9 m-0 fw-semibold">1 okunmamış mesajın var!</p>
                        </div>
                    </div>
                    <div class="fs-8 text-gray-700 fw-bold">
                        <i class="fa-solid fa-flag pw-text-success-300 fs-8 me-2"></i> Mobile App Workflow /Anket Taslak 
                    </div>
                    <button class="btn btn-icon bg-transparentn w-25px"><i class="fa-solid fa-trash fs-6 text-primary"></i></button>
                </a>
                
            </div>
            <!--end::Row-->
        </div>
        <!--end::Content -->
        <!--end::Content wrapper-->
        <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/footer.php'; ?>
    </div>
    <!--end::Main-->

</div>
<!--end::Wrapper -->

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/foot.php'; ?>