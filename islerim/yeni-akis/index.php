<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/header.php'; ?>

<!--begin::Wrapper-->
<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">

  <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/sidebar.php'; ?>
  <!--begin::Main-->
  <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <!--begin::Content wrapper-->
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar col-12 col-md-12 px-6 py-6 border-bottom pw-border-stroke mb-5">

      <!--begin::Toolbar container-->
      <div id="kt_app_toolbar_container" class="container-fluid d-flex flex-stack p-0">

        <!--begin::Page title-->
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
          <!--begin::Breadcrumb-->
          <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-8 mt-0 mb-3">
            <!--begin::Item-->
            <li class="breadcrumb-item active">İşlerim</li>
            <!--end::Item-->
          </ul>
          <!--end::Breadcrumb-->
          <!--begin::Title-->
          <h1 class="page-heading d-flex text-dark fw-bolder fs-4 flex-column justify-content-center my-0">
            İşlerim
          </h1>
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

    <div class="col-12 col-md-12 mb-20 px-6 pb-6">
        <!--begin::Content -->
        <div class="row">
            <div class="row">
                <!--begin::Search wrapper-->
                <div id="kt_docs_search_handler_basic" class="w-100 mw-300px mb-3" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="true" data-kt-search-layout="inline">

                    <!--begin::Input Form-->
                    <form data-kt-search-element="form" class="position-relative" autocomplete="off">
                        <!--begin::Hidden input(Added to disable form autocomplete)-->
                        <input type="hidden" />
                        <!--end::Hidden input-->

                        <!--begin::Icon-->
                        <!--begin::Svg Icon | path: magnifier-->
                        <div class="position-absolute top-50 translate-middle-y w-100 mw-20px mh-20px ms-2">
                            <i class="fa-solid fa-magnifying-glass fs-4"></i>
                        </div>
                        <!--end::Icon-->

                        <!--begin::Input-->
                        <input type="text" class="form-control pw-input-stroke py-2 ps-9 pe-2 fs-8" name="search" value="" placeholder="Ara" data-kt-search-element="input" />
                        <!--end::Input-->

                        <!--begin::Spinner-->
                        <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
                            <span class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
                        </span>
                        <!--end::Spinner-->

                        <!--begin::Reset-->
                        <span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none" data-kt-search-element="clear">

                            <!--begin::Svg Icon | path: cross-->
                        </span>
                        <!--end::Reset-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Search wrapper-->
            </div>

            <div class="row">
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="row ps-3">
                        <div class="border pw-border-stroke rounded-3 px-0">
                            <div class="d-flex justify-content-end mt-2 pe-2">
                                <button class="btn btn-icon pw-bg-neutral-100 rounded-1 w-25px h-25px"><i class="fa-solid fa-arrow-rotate-left fs-9 text-primary"></i></button>                            
                            </div>
                            <div id="chartdiv" class="h-200px"></div>
                        </div>
                    </div>

                    <div class="row ps-3">
                        <div class="btn-group w-100 my-5 px-0">
                            <button type="button" class="btn btn-primary col-10 fs-7 px-5 py-2">Yeni Akış</button>
                            <button type="button" class="btn btn-primary col-2 border-start pw-border-primary-400 dropdown-toggle dropdown-toggle-split px-2 py-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu"></div>
                        </div>
                    </div>

                    <div class="row ps-3 mb-5">
                        <div class="border pw-border-stroke rounded-2 p-0 py-3">
                            <ul class="nav nav-tabs flex-row flex-md-column px-0 m-0 border-0">
                                <li class="nav-item">
                                    <!--begin::Menu-->
                                    <div class="menu menu-column menu-title-gray-700 menu-icon-primary-300 menu-arrow-primary-300 menu-arrow-primary-300 menu-state-bg fw-bold w-100" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item menu-accordion py-0" data-kt-menu-trigger="click">
                                            <!--begin::Menu link-->
                                            <a href="#" class="menu-link py-2 ps-6 pe-7">
                                                <span class="menu-title">Hepsi</span>
                                                <span class="menu-arrow w-12px"></span>
                                            </a>
                                            <!--end::Menu link-->

                                            <!--begin::Menu sub-->
                                            <div class="menu-sub menu-sub-accordion">
                                                <!--begin::Menu item-->
                                                <div class="menu-item py-0">
                                                    <a href="#" class="menu-link py-3">
                                                        <span class="menu-title d-flex justify-content-between">
                                                            <div class="">
                                                                <div class="d-grid align-items-center float-start">
                                                                    <i class="fa-solid fa-pen-to-square pw-text-danger-400 fs-10"></i>
                                                                    <i class="fa-solid fa-paperclip fs-10"></i>
                                                                </div>
                                                                <i class="fa-solid fa-id-card px-1 pw-text-primary-300"></i> IT Talep Süreci - 2023-02-24
                                                            </div>
                                                            <div class="rounded-circle w-20px h-20px pw-bg-primary-200 fs-9 p-3 d-flex justify-content-center text-primary align-items-center fw-normal">6</div>
                                                        </span>
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->

                                                <!--begin::Menu item-->
                                                <div class="menu-item py-0">
                                                    <a href="#" class="menu-link py-3">
                                                        <span class="menu-title d-flex justify-content-between">
                                                            <div class="">
                                                                <div class="d-grid align-items-center float-start">
                                                                    <i class="fa-solid fa-pen-to-square pw-text-danger-400 fs-10"></i>
                                                                    <i class="fa-solid fa-paperclip fs-10"></i>
                                                                </div>
                                                                <i class="fa-solid fa-id-card px-1 pw-text-primary-300"></i> IT Talep Süreci - 2023-02-24
                                                            </div>
                                                            <div class="rounded-circle w-20px h-20px pw-bg-primary-200 fs-9 p-3 d-flex justify-content-center text-primary align-items-center fw-normal">6</div>
                                                        </span>
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->

                                                <!--begin::Menu item-->
                                                <div class="menu-item py-0">
                                                    <a href="#" class="menu-link py-3">
                                                        <span class="menu-title d-flex justify-content-between">
                                                            <div class="">
                                                                <div class="d-grid align-items-center float-start">
                                                                    <i class="fa-solid fa-pen-to-square pw-text-danger-400 fs-10"></i>
                                                                    <i class="fa-solid fa-paperclip fs-10"></i>
                                                                </div>
                                                                <i class="fa-solid fa-id-card px-1 pw-text-primary-300"></i> IT Talep Süreci - 2023-02-24
                                                            </div>
                                                            <div class="rounded-circle w-20px h-20px pw-bg-primary-200 fs-9 p-3 d-flex justify-content-center text-primary align-items-center fw-normal">6</div>
                                                        </span>
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu sub-->
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active btn btn-flex btn-active-light-primary d-flex justify-content-between align-items-center py-2 rounded-0 w-100" data-bs-toggle="tab" href="#kt_vtab_pane_1">
                                        <span class="fs-8 text-primary">İşlerim</span>
                                        <div class="rounded-circle w-20px h-20px pw-bg-primary-200 fs-9 p-3 d-flex justify-content-center text-primary align-items-center">6</div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn btn-flex btn-active-light-primary d-flex justify-content-between align-items-center py-2 rounded-0 w-100" data-bs-toggle="tab" href="#kt_vtab_pane_2">
                                        <span class="fs-8 text-primary">Tamamlananlar</span>
                                        <div class="rounded-circle w-20px h-20px pw-bg-success-400 fs-9 p-3 d-flex justify-content-center text-white align-items-center">6</div>
                                    </a>
                                </li>
                                <li class="nav-item d-flex justify-content-between align-items-center">
                                    <a class="nav-link btn btn-flex btn-active-light-primary d-flex justify-content-between align-items-center py-2 rounded-0 w-100" data-bs-toggle="tab" href="#kt_vtab_pane_3">
                                        <span class="fs-8 text-primary">Taslaklar</span>
                                    </a>
                                </li>
                                <li class="nav-item d-flex justify-content-between align-items-center">
                                    <a class="nav-link btn btn-flex btn-active-light-primary d-flex justify-content-between align-items-center py-2 rounded-0 w-100" data-bs-toggle="tab" href="#kt_vtab_pane_4">
                                        <span class="fs-8 text-primary">Yönetim</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="row ps-3 mb-5">
                        <div class="border pw-border-stroke rounded-2 p-0 py-3">
                            <h6 class="fs-8 text-gray-800 px-4">Akış Önceliği</h6>
                            <ul class="list-style-none px-0 m-0">
                                <li class="py-2 px-4 hover-pw-bg-primary-300 d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <span class="w-15px h-15px bg-white rounded-circle"></span>
                                        <span class="fs-8 text-primary ms-2">Hiçbiri</span>
                                    </div>
                                    <div class="rounded-circle w-20px h-20px pw-bg-primary-200 fs-9 p-3 d-flex justify-content-center text-primary align-items-center">6</div>
                                </li>
                                <li class="py-2 px-4 hover-pw-bg-primary-300 d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <span class="w-15px h-15px pw-bg-neutral-400 rounded-circle"></span>
                                        <span class="fs-8 text-primary ms-2">Düşük</span>
                                    </div>
                                    <div class="rounded-circle w-25px h-25px pw-bg-neutral-400 fs-9 d-flex justify-content-center text-white align-items-center">6</div>
                                </li>
                                <li class="py-2 px-4 hover-pw-bg-primary-300 d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <span class="w-15px h-15px pw-bg-warning-300 rounded-circle"></span>
                                        <span class="fs-8 text-primary ms-2">Normal</span>
                                    </div>
                                </li>
                                <li class="py-2 px-4 hover-pw-bg-primary-300 d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <span class="w-15px h-15px pw-bg-warning-500 rounded-circle"></span>
                                        <span class="fs-8 text-primary ms-2">Yüksek</span>
                                    </div>
                                </li>
                                <li class="py-2 px-4 hover-pw-bg-primary-300 d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <span class="w-15px h-15px pw-bg-danger-500 rounded-circle"></span>
                                        <span class="fs-8 text-primary ms-2">Çok Yüksek</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="row ps-3 mb-5">
                        <div class="border pw-border-stroke rounded-2 p-0 py-3">
                            <h6 class="fs-8 text-gray-800 px-4">Başlatan</h6>
                            <ul class="list-style-none px-0 m-0">
                                <li class="py-2 px-4 hover-pw-bg-primary-300 d-flex justify-content-between align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-40px symbol-circle">
                                        <span class="symbol-label bg-light-primary text-primary fs-6 fw-bolder">E</span>
                                    </div>
                                    <!--end::Avatar-->
                                    <div class="col px-3">
                                        <div class="d-flex pb-1">
                                            <div class="col-6 fs-9 text-gray-600 fw-bold">Kullanıcı Adı:</div>
                                            <div class="col-6 text-gray-800 fs-9 px-0">Ezgi Çelik</div>
                                        </div>
                                        <div class="d-flex">
                                            <div class="col-6 fs-9 text-gray-600 fw-bold">Ünvanı:</div>
                                            <div class="col-6 text-gray-800 fs-9 px-0">Test Uzmanı</div>
                                        </div>
                                    </div>
                                    <div class="rounded-circle w-20px h-20px pw-bg-primary-200 fs-9 p-3 d-flex justify-content-center text-primary align-items-center">6</div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="row ps-3 mb-5">
                        <div class="border pw-border-stroke rounded-2 p-0 py-3">
                            <h6 class="fs-8 text-gray-800 px-4">Beklediği Kullanıcılar</h6>
                            <ul class="list-style-none px-0 m-0">
                                <li class="py-2 px-4 hover-pw-bg-primary-300 d-flex justify-content-between align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-40px symbol-circle">
                                        <span class="symbol-label bg-light-primary text-primary fs-6 fw-bolder">E</span>
                                    </div>
                                    <!--end::Avatar-->
                                    <div class="col px-2">
                                        <div class="d-flex pb-1">
                                            <div class="col-6 fs-9 text-gray-600 fw-bold">Kullanıcı Adı:</div>
                                            <div class="col-6 text-gray-800 fs-9 px-0">Ezgi Çelik</div>
                                        </div>
                                        <div class="d-flex">
                                            <div class="col-6 fs-9 text-gray-600 fw-bold">Ünvanı:</div>
                                            <div class="col-6 text-gray-800 fs-9 px-0">Test Uzmanı</div>
                                        </div>
                                    </div>
                                    <div class="rounded-circle w-20px h-20px pw-bg-primary-200 fs-9 p-3 d-flex justify-content-center text-primary align-items-center">6</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-8 col-lg-9">
                    <div class="border pw-border-stroke rounded-3 px-5 py-7 pe-lg-20 mb-5">
                        <div class="row mb-5">
                            <div class="col pe-1">
                                <div class="border pw-border-stroke rounded-3 p-3 text-center">
                                    <i class="fa-solid fa-flag pw-text-success-300 fs-8"></i>
                                    <p class="fs-9 my-2">Performans Değerlendirme<br>Süreci</p>
                                    <div class="d-flex justify-content-center">
                                        <span class="rounded-circle w-25px h-25px pw-bg-primary-200 fs-9 d-flex justify-content-center text-primary align-items-center">3</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col px-1">
                                <div class="border pw-border-stroke rounded-3 p-3 text-center">
                                    <i class="fa-solid fa-flag pw-text-success-300 fs-8"></i>
                                    <p class="fs-9 my-2">Performans Değerlendirme<br>Süreci</p>
                                    <div class="d-flex justify-content-center">
                                        <span class="rounded-circle w-25px h-25px pw-bg-primary-200 fs-9 d-flex justify-content-center text-primary align-items-center">3</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col px-1">
                                <div class="border pw-border-stroke rounded-3 p-3 text-center">
                                    <i class="fa-solid fa-flag pw-text-success-300 fs-8"></i>
                                    <p class="fs-9 my-2">Performans Değerlendirme<br>Süreci</p>
                                    <div class="d-flex justify-content-center">
                                        <span class="rounded-circle w-25px h-25px pw-bg-primary-200 fs-9 d-flex justify-content-center text-primary align-items-center">3</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col px-1">
                                <div class="border pw-border-stroke rounded-3 p-3 text-center">
                                    <i class="fa-solid fa-flag pw-text-success-300 fs-8"></i>
                                    <p class="fs-9 my-2">Performans Değerlendirme<br>Süreci</p>
                                    <div class="d-flex justify-content-center">
                                        <span class="rounded-circle w-25px h-25px pw-bg-primary-200 fs-9 d-flex justify-content-center text-primary align-items-center">3</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col ps-1">
                                <div class="border pw-border-stroke rounded-3 p-3 text-center">
                                    <i class="fa-solid fa-flag pw-text-success-300 fs-8"></i>
                                    <p class="fs-9 my-2">Performans Değerlendirme<br>Süreci</p>
                                    <div class="d-flex justify-content-center">
                                        <span class="rounded-circle w-25px h-25px pw-bg-primary-200 fs-9 d-flex justify-content-center text-primary align-items-center">3</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-5">
                            <div class="col col-md-7 col-lg-6">
                                <div class="border pw-border-stroke rounded-2 p-0">
                                    <ul class="list-style-none px-0 m-0">
                                        <li class="py-2 px-4 hover-pw-bg-primary-300 d-flex justify-content-between align-items-center cursor-pointer" data-bs-stacked-modal="#performansModal">
                                            <div class="d-flex align-items-center">
                                                <i class="fa-solid fa-flag fs-9 pw-text-success-300 me-2"></i>
                                                <span class="fs-9 text-primary">Performans Değerlendirme Süreci</span>
                                            </div>
                                            <div class="rounded-circle w-20px h-20px pw-bg-primary-200 fs-9 p-3 d-flex justify-content-center text-primary align-items-center">3</div>
                                        </li>
                                        <li class="py-2 px-4 hover-pw-bg-primary-300 d-flex justify-content-between align-items-center cursor-pointer" data-bs-stacked-modal="#performansModal">
                                            <div class="d-flex align-items-center">
                                                <i class="fa-solid fa-flag fs-9 pw-text-success-300 me-2"></i>
                                                <span class="fs-9 text-primary">Performans Değerlendirme Süreci</span>
                                            </div>
                                            <div class="rounded-circle w-20px h-20px pw-bg-primary-200 fs-9 p-3 d-flex justify-content-center text-primary align-items-center">3</div>
                                        </li>
                                        <li class="py-2 px-4 hover-pw-bg-primary-300 d-flex justify-content-between align-items-center cursor-pointer" data-bs-stacked-modal="#performansModal">
                                            <div class="d-flex align-items-center">
                                                <i class="fa-solid fa-flag fs-9 pw-text-success-300 me-2"></i>
                                                <span class="fs-9 text-primary">Performans Değerlendirme Süreci</span>
                                            </div>
                                            <div class="rounded-circle w-20px h-20px pw-bg-primary-200 fs-9 p-3 d-flex justify-content-center text-primary align-items-center">3</div>
                                        </li>
                                        <li class="py-2 px-4 hover-pw-bg-primary-300 d-flex justify-content-between align-items-center cursor-pointer" data-bs-stacked-modal="#performansModal">
                                            <div class="d-flex align-items-center">
                                                <i class="fa-solid fa-flag fs-9 pw-text-success-300 me-2"></i>
                                                <span class="fs-9 text-primary">Performans Değerlendirme Süreci</span>
                                            </div>
                                            <div class="rounded-circle w-20px h-20px pw-bg-primary-200 fs-9 p-3 d-flex justify-content-center text-primary align-items-center">3</div>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-5 col-lg-6">
                                <!--begin::Form-->
                                <form class="d-flex flex-column gap-13">
                                    <!--begin::Table-->
                                    <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                                        <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fw-bold fs-7">
                                            <tbody>
                                                <!--begin::Row-->
                                                <tr>
                                                    <td class="py-2 position-relative pe-8">
                                                        <label for="" class="mb-2 fs-9">Akış Adı</label>
                                                        <input type="text" class="form-control form-control-outline py-3 px-4 fs-8" name="" />
                                                        <a href="javascript:void(0);" class="position-absolute top-50 end-0 mt-2"><button class="btn btn-icon btn-primary w-25px h-25px rounded-2px"><i class="fa-solid fa-plus fs-7"></i></button></a>
                                                    </td>
                                                </tr>
                                                <!--end::Row-->

                                                <!--begin::Row-->
                                                <tr>
                                                    <td class="py-2 position-relative pe-8">
                                                        <label for="" class="mb-2 fs-9">Öncelik</label>
                                                        <input type="text" class="form-control form-control-outline py-3 px-4 fs-8" name="" />
                                                    </td>
                                                </tr>
                                                <!--end::Row-->

                                                <!--begin::Row-->
                                                <tr>
                                                    <td class="py-2 pt-0 pe-8">
                                                        <label for="" class="mb-2 fs-9">Açıklama</label>
                                                        <textarea class="form-control form-control-outline py-3 px-4 fs-8" name="" id="" cols="30" rows="2"></textarea>
                                                    </td>
                                                </tr>
                                                <!--end::Row-->

                                                <!--begin::Form actions row-->
                                                <tr>
                                                    <td class="py-2" colspan="2" align="right">
                                                        <button class="btn btn-primary fs-9 py-2 px-4 mt-5">Sonraki</button>
                                                    </td>
                                                </tr>
                                                <!--end::Form actions row-->
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </form>
                                <!--end::Form-->
                            </div>
                            
                        </div>
                    </div>

                    <div class="border pw-border-stroke rounded-3 px-5 py-7 pe-lg-20">
                        <div class="row">
                            <div class="col col-md-8 col-lg-9">
                                <div class="d-flex align-items-center">
                                    <a href="javascript:void(0);" class="me-3"><i class="fa-solid fa-angle-left fs-2 text-gray-600 fw-semibold"></i></a>
                                    <button class="btn btn-primary fs-9 px-4 py-2 me-3 ">Başlat</button>
                                    <button class="btn btn-outline btn-outline-primary fs-9 px-4 py-2">Taslak</button>
                                </div>

                                <div id="chartdiv" class="h-350px"></div>

                            </div>

                            <div class="col col-md-4 col-lg-3">
                                <div class="border rounded-2 pw-border-stroke scroll py-3">
                                    <div class="d-flex align-items-center ms-4 my-3">
                                        <button class="btn btn-icon pw-bg-neutral-200 me-2 w-20px h-20px rounded-2px" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" data-kt-menu-offset="0,5"><i class="fa-solid fa-plus text-primary fs-9"></i></button>
                                        <!--begin::dropdown-->
                                        <div class="menu menu-sub menu-sub-dropdown w-200px mt-2" data-kt-menu="true">
                                            <div class="d-flex flex-column">
                                                <!--begin::Item-->
                                                <a href="javascript:void(0);" class="btn btn-active-light-secondary pw-text-neutral-800 fw-semibold fs-8 text-start py-2 px-4 rounded-0">Sistem</a>
                                                <!--end::Item-->

                                                <!--begin::Item-->
                                                <a href="javascript:void(0);" class="btn btn-active-light-secondary pw-text-neutral-800 fw-semibold fs-8 text-start py-2 px-4 rounded-0">Supplier Archieve Type</a>
                                                <!--end::Item-->
                                            </div>
                                        </div>
                                        <!--end::dropdown-->

                                        <button class="btn btn-icon pw-bg-neutral-200 me-2 w-20px h-20px rounded-2px"><i class="fa-solid fa-trash text-primary fs-9"></i></button>
                                    </div>
                                    <!--begin::Menu-->
                                    <div class="menu menu-column pw-menu-custom-arrow menu-state-bg fw-semibold" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item menu-sub-indention menu-accordion hover showing" data-kt-menu-trigger="click">
                                            <!--begin::Menu link-->
                                            <a href="javascript:void(0)" class="menu-link p-1">
                                                <span class="menu-arrow me-0"><i class="fa-sharp fa-solid fa-triangle fs-10 text-gray-300"></i></span>
                                                <span class="menu-icon"><i class="fa-sharp fa-solid fa-folder fs-6 pw-text-primary-300"></i></span>
                                                <span class="menu-title fs-9 fw-semibold pw-text-neutral-700">Genel</span>
                                            </a>
                                            <!--end::Menu link-->

                                            <!--begin::Menu sub-->
                                            <div class="menu-sub menu-sub-accordion ms-12 show">
                                                <!--begin::Menu item-->
                                                <div class="menu-item">
                                                    <a href="javascript:void(0)" class="menu-link p-1">
                                                        <span class="menu-icon"><i class="fa-sharp fa-solid fa-folder fs-6 pw-text-primary-300"></i></span>
                                                        <span class="menu-title fs-9 fw-semibold pw-text-neutral-700">Supplier Archive Type</span>
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu sub-->
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item menu-sub-indention menu-accordion" data-kt-menu-trigger="click">
                                            <!--begin::Menu link-->
                                            <a href="javascript:void(0)" class="menu-link p-1">
                                                <span class="menu-arrow me-0"><i class="fa-sharp fa-solid fa-triangle fs-10 text-gray-300"></i></span>
                                                <span class="menu-icon"><i class="fa-sharp fa-solid fa-folder fs-6 pw-text-primary-300"></i></span>
                                                <span class="menu-title fs-9 fw-semibold pw-text-neutral-700">Supplier</span>
                                            </a>
                                            <!--end::Menu link-->

                                            <!--begin::Menu sub-->
                                            <div class="menu-sub menu-sub-accordion ms-12">
                                                <!--begin::Menu item-->
                                                <div class="menu-item">
                                                    <a href="javascript:void(0)" class="menu-link p-1">
                                                        <span class="menu-icon"><i class="fa-sharp fa-solid fa-folder fs-6 pw-text-primary-300"></i></span>
                                                        <span class="menu-title fs-9 fw-semibold pw-text-neutral-700">Supplier Archive Type</span>
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu sub-->
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item menu-sub-indention menu-accordion" data-kt-menu-trigger="click">
                                            <!--begin::Menu link-->
                                            <a href="javascript:void(0)" class="menu-link p-1">
                                                <span class="menu-arrow me-0"><i class="fa-sharp fa-solid fa-triangle fs-10 text-gray-300"></i></span>
                                                <span class="menu-icon"><i class="fa-sharp fa-solid fa-folder fs-6 pw-text-primary-300"></i></span>
                                                <span class="menu-title fs-9 fw-semibold pw-text-neutral-700">Yönetim</span>
                                            </a>
                                            <!--end::Menu link-->

                                            <!--begin::Menu sub-->
                                            <div class="menu-sub menu-sub-accordion ms-12">
                                                <!--begin::Menu item-->
                                                <div class="menu-item">
                                                    <a href="javascript:void(0)" class="menu-link p-1">
                                                        <span class="menu-icon"><i class="fa-sharp fa-solid fa-folder fs-6 pw-text-primary-300"></i></span>
                                                        <span class="menu-title fs-9 fw-semibold pw-text-neutral-700">Supplier Archive Type</span>
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu sub-->
                                        </div>
                                        <!--end::Menu item-->

                                    </div>
                                    <!--end::Menu-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!--end::Content -->
    </div>

    <!--end::Content wrapper-->
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/footer.php'; ?>
  </div>
  <!--end::Main-->

</div>
<!--end::Wrapper -->

<!--begin::Modal-->
<div class="modal fade" tabindex="-1" id="performansModal" role="dialog" aria-labelledby="klasorlerLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg mw-550px">
    <div class="modal-content">
      <div class="modal-header border pb-3 pt-5 ps-15">
        <h3 class="modal-title fs-9 fw-semibold">Performans Değerlendirme Süreci</h3>
      </div>

      <div class="modal-body ps-15 pt-5">
        <div class="mb-5 d-flex align-items-center">
            <a href="javascript:void(0);"><i class="fa-solid pw-text-primary-300 fs-7 fa-file-circle-plus me-2"></i></a>
            <a href="javascript:void(0);"><i class="fa-solid pw-text-primary-300 fs-7 fa-file-pen me-2"></i></a>
            <a href="javascript:void(0);"><i class="fa-solid pw-text-primary-300 fs-7 fa-file-xmark me-2"></i></a>
            <a href="javascript:void(0);"><i class="fa-solid pw-text-primary-300 fs-7 fa-arrow-up-big-small me-2"></i></a>
            <a href="javascript:void(0);"><i class="fa-solid pw-text-primary-300 fs-7 fa-arrow-down-small-big me-2"></i></a>
            <a href="javascript:void(0);"><i class="fa-solid pw-text-primary-300 fs-7 fa-eye-slash"></i></a>
        </div>

        <div class="pe-20">
            <div class="border rounded-2 pw-border-stroke scroll h-300px py-3">
                <!--begin::Menu-->
                <div class="menu menu-column pw-menu-custom-arrow menu-state-bg fw-semibold" data-kt-menu="true">
                    <!--begin::Menu item-->
                    <div class="menu-item menu-sub-indention menu-accordion" data-kt-menu-trigger="click">
                        <!--begin::Menu link-->
                        <a href="javascript:void(0)" class="menu-link p-1">
                            <span class="menu-arrow me-0">
                            <!-- <i class="fa-sharp fa-solid fa-triangle fs-10"></i> -->
                            </span>
                            <span class="menu-icon">
                            <i class="fa-sharp fa-solid fa-gears fs-6 pw-text-primary-300"></i>
                            </span>
                            <span class="menu-title fs-9 fw-semibold pw-text-neutral-700">Kabinetler</span>
                        </a>
                        <!--end::Menu link-->
                    </div>
                    <!--end::Menu item-->

                    <!--begin::Menu item-->
                    <div class="menu-item menu-sub-indention menu-accordion" data-kt-menu-trigger="click">
                        <!--begin::Menu link-->
                        <a href="javascript:void(0)" class="menu-link p-1">
                            <span class="menu-arrow me-0">
                            <!-- <i class="fa-sharp fa-solid fa-triangle fs-10"></i> -->
                            </span>
                            <span class="menu-icon">
                            <i class="fa-sharp fa-solid fa-gears fs-6 pw-text-primary-300"></i>
                            </span>
                            <span class="menu-title fs-9 fw-semibold pw-text-neutral-700">Kabinetler</span>
                        </a>
                        <!--end::Menu link-->
                    </div>
                    <!--end::Menu item-->

                    <!--begin::Menu item-->
                    <div class="menu-item menu-sub-indention menu-accordion" data-kt-menu-trigger="click">
                        <!--begin::Menu link-->
                        <a href="javascript:void(0)" class="menu-link p-1">
                            <span class="menu-arrow me-0">
                            <!-- <i class="fa-sharp fa-solid fa-triangle fs-10"></i> -->
                            </span>
                            <span class="menu-icon">
                            <i class="fa-sharp fa-solid fa-folders fs-6 pw-text-primary-300"></i>
                            </span>
                            <span class="menu-title fs-9 fw-semibold pw-text-neutral-700">Kabinetler</span>
                        </a>
                        <!--end::Menu link-->
                    </div>
                    <!--end::Menu item-->

                    <!--begin::Menu item-->
                    <div class="menu-item menu-sub-indention menu-accordion" data-kt-menu-trigger="click">
                        <!--begin::Menu link-->
                        <a href="javascript:void(0)" class="menu-link p-1">
                            <span class="menu-arrow me-0">
                            <!-- <i class="fa-sharp fa-solid fa-triangle fs-10"></i> -->
                            </span>
                            <span class="menu-icon">
                            <i class="fa-sharp fa-solid fa-gears fs-6 pw-text-primary-300"></i>
                            </span>
                            <span class="menu-title fs-9 fw-semibold pw-text-neutral-700">Kabinetler</span>
                        </a>
                        <!--end::Menu link-->
                    </div>
                    <!--end::Menu item-->

                    <!--begin::Menu item-->
                    <div class="menu-item menu-sub-indention menu-accordion" data-kt-menu-trigger="click">
                        <!--begin::Menu link-->
                        <a href="javascript:void(0)" class="menu-link p-1">
                            <span class="menu-arrow me-0">
                            <!-- <i class="fa-sharp fa-solid fa-triangle fs-10"></i> -->
                            </span>
                            <span class="menu-icon">
                            <i class="fa-sharp fa-solid fa-gears fs-6 pw-text-primary-300"></i>
                            </span>
                            <span class="menu-title fs-9 fw-semibold pw-text-neutral-700">Kabinetler</span>
                        </a>
                        <!--end::Menu link-->
                    </div>
                    <!--end::Menu item-->

                    <!--begin::Menu item-->
                    <div class="menu-item menu-sub-indention menu-accordion hover showing" data-kt-menu-trigger="click">
                        <!--begin::Menu link-->
                        <a href="javascript:void(0)" class="menu-link p-1">
                            <span class="menu-arrow me-0">
                            <i class="fa-sharp fa-solid fa-triangle fs-10 text-gray-300"></i>
                            </span>
                            <span class="menu-icon">
                            <i class="fa-sharp fa-solid fa-folders fs-6 pw-text-primary-300"></i>
                            </span>
                            <span class="menu-title fs-9 fw-semibold pw-text-neutral-700"></span>
                        </a>
                        <!--end::Menu link-->

                        <!--begin::Menu sub-->
                        <div class="menu-sub menu-sub-accordion show">
                            <!--begin::Menu item-->
                            <div class="menu-item">
                                <a href="javascript:void(0)" class="menu-link p-1">
                                    <span class="menu-arrow me-0"><i class="fa-sharp fa-solid fa-triangle fs-10 text-gray-300"></i></span>
                                    <span class="menu-icon"><i class="fa-sharp fa-solid fa-folders fs-6 pw-text-primary-300"></i></span>
                                    <span class="menu-title fs-9 fw-semibold pw-text-neutral-700">
                                        <div class="d-flex align-items-center">
                                            <input type="text" class="form-control py-1 w-150px me-2">
                                            <div class="form-check pw-form-check-rounded-sm pw-form-check-sm m-0">
                                                <input class="form-check-input opacity-50" type="checkbox" value="" id="" checked="checked" >
                                            </div>
                                            <button class="border-0 bg-transparent ms-n3"><i class="fa-solid fa-trash fs-4 pw-text-primary-300"></i></button>
                                        </div>
                                    </span>
                                </a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu sub-->
                    </div>
                    <!--end::Menu item-->
                </div>
                <!--end::Menu-->
            </div>
        </div>

        <div class="d-flex align-items-center justify-content-end gap-3 pt-5">
          <button type="submit" class="btn btn-primary fs-9 py-3 px-6">Kaydet</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!--end::Modal-->

<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

<!-- Chart code -->
<script>
    am5.ready(function() {

        // Create root element
        // https://www.amcharts.com/docs/v5/getting-started/#Root_element
        var root = am5.Root.new("chartdiv");

        // Set themes
        // https://www.amcharts.com/docs/v5/concepts/themes/
        root.setThemes([
        am5themes_Animated.new(root)
        ]);

        // Create chart
        // https://www.amcharts.com/docs/v5/charts/xy-chart/
        var chart = root.container.children.push(am5xy.XYChart.new(root, {
        panX: false,
        panY: false,
        wheelX: "panX",
        wheelY: "zoomX"
        }));


        // Add cursor
        // https://www.amcharts.com/docs/v5/charts/xy-chart/cursor/
        var cursor = chart.set("cursor", am5xy.XYCursor.new(root, {
        behavior: "zoomX"
        }));
        cursor.lineY.set("visible", false);

        var date = new Date();
        date.setHours(0, 0, 0, 0);
        var value = 100;

        function generateData() {
            value = Math.round((Math.random() * 10 - 5) + value);
            am5.time.add(date, "day", 1);
            return {
                date: date.getTime(),
                value: value
            };
        }

        function generateDatas(count) {
        var data = [];
        for (var i = 0; i < count; ++i) {
            data.push(generateData());
        }
        return data;
        }

        // Create axes
        // https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
        var xAxis = chart.xAxes.push(am5xy.DateAxis.new(root, {
        maxDeviation: 0,
        baseInterval: {
            timeUnit: "day",
            count: 1
        },
        renderer: am5xy.AxisRendererX.new(root, {
            minGridDistance: 60
        }),
        tooltip: am5.Tooltip.new(root, {})
        }));

        var yAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
        renderer: am5xy.AxisRendererY.new(root, {})
        }));

        // Add series
        // https://www.amcharts.com/docs/v5/charts/xy-chart/series/
        var series = chart.series.push(am5xy.ColumnSeries.new(root, {
            name: "Series",
            xAxis: xAxis,
            yAxis: yAxis,
            valueYField: "value",
            valueXField: "date",
            tooltip: am5.Tooltip.new(root, {
                labelText: "{valueY}"
            })
        }));

        // series.columns.template.setAll({ strokeOpacity: 0 })

        // // Add scrollbar
        // // https://www.amcharts.com/docs/v5/charts/xy-chart/scrollbars/
        // chart.set("scrollbarX", am5.Scrollbar.new(root, {
        // orientation: "horizontal"
        // }));

        var data = generateDatas(50);
        series.data.setAll(data);

        // Make stuff animate on load
        // https://www.amcharts.com/docs/v5/concepts/animations/
        series.appear(1000);
        series.set("fill", am5.color(0x6CE3AA)); 
        series.set("stroke", am5.color(0x6CE3AA)); 
        chart.appear(1000, 100);

    }); // end am5.ready()
</script>

<script>
    window.addEventListener('DOMContentLoaded', () => {
        ClassicEditor
        .create(document.querySelector('#notlarCKEditor'), {
            toolbar: {
            items: [
                'heading', '|',
                'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript', 'removeFormat', '|',
                'bulletedList', 'numberedList', 'todoList', '|',
                'outdent', 'indent', '|',
                'undo', 'redo',
                'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', 'alignment', 'link', '|',
            ],
            shouldNotGroupWhenFull: true
            },
        }).catch(error => {
            console.error(error);
        });
    });

</script>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/foot.php'; ?>