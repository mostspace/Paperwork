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
                        <div class="border pw-border-stroke rounded-3 p-5">
                            <div class="row my-5">
                                <div class="col">
                                    <p class="fs-8 text-gray-900 fw-bold">2.927 / 930</p>
                                    <p class="fs-9 text-primary fw-bold">Toplam Adet (Genel)</p>
                                </div>
                                <div class="col">
                                    <div class="float-end">
                                        <p class="fs-8 text-gray-900 fw-bold">372 / 312</p>
                                        <p class="fs-9 text-primary fw-bold">Toplam İş Sayısı</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row my-5">
                                <div class="col">
                                    <p class="fs-8 text-gray-900 fw-bold">480 / 196</p>
                                    <p class="fs-9 text-primary fw-bold">Toplam Adet (Benim)</p>
                                </div>
                                <div class="col">
                                    <div class="float-end">
                                        <p class="fs-8 text-gray-900 fw-bold">6/6</p>
                                        <p class="fs-9 text-primary fw-bold">Bekleyen İşlerim</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row ps-3">
                        <div class="btn-group w-100 my-5 px-0">
                            <a href="/islerim/yeni-akis/" class="btn btn-primary col-10 fs-7 px-5 py-2">Yeni Akış</a>
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
                                    <div class="rounded-circle w-20px h-20px pw-bg-neutral-400 fs-9 p-3 d-flex justify-content-center text-white align-items-center">6</div>
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
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="kt_vtab_pane_1" role="tabpanel">
                            <div class="row ps-3">
                                <div class="border pw-border-stroke rounded-3 px-5 py-7">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <h6 class="text-gray-700 fs-8">İşlerim</h6>
                                        
                                        <div class="d-flex align-items-center ms-4 my-3">
                                            <button class="btn btn-icon pw-bg-neutral-200 me-2 w-20px h-20px rounded-2px" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" data-kt-menu-offset="0,5"><i class="fa-solid fa-magnifying-glass text-primary fs-9"></i></button>
                                            <!--begin::dropdown-->
                                            <div class="menu menu-sub menu-sub-dropdown w-200px mt-2" data-kt-menu="true">
                                                <div class="d-flex flex-column">
                                                    <!--begin::Item-->
                                                    <a href="javascript:void(0);" class="btn btn-active-light-secondary pw-text-neutral-800 fw-semibold fs-9 text-start py-2 px-4 rounded-0">Arama Seçiniz</a>
                                                    <!--end::Item-->

                                                    <!--begin::Item-->
                                                    <a href="javascript:void(0);" class="btn btn-active-light-secondary pw-text-neutral-800 fw-semibold fs-9 text-start py-2 px-4 rounded-0">
                                                        <i class="fa-solid fa-flag pw-text-primary-300 me-2 fs-9"></i>Akış No ile Ara
                                                    </a>
                                                    <!--end::Item-->

                                                    <!--begin::Item-->
                                                    <a href="javascript:void(0);" class="btn btn-active-light-secondary pw-text-neutral-800 fw-semibold fs-9 text-start py-2 px-4 rounded-0">
                                                        <i class="fa-solid fa-flag pw-text-primary-300 me-2 fs-9"></i>Akış No ile Ara
                                                    </a>
                                                    <!--end::Item-->

                                                    <!--begin::Item-->
                                                    <a href="javascript:void(0);" class="btn btn-active-light-secondary pw-text-neutral-800 fw-semibold fs-9 text-start py-2 px-4 rounded-0">
                                                        <i class="fa-solid fa-flag pw-text-primary-300 me-2 fs-9"></i>Akış No ile Ara
                                                    </a>
                                                    <!--end::Item-->
                                                </div>
                                            </div>
                                            <!--end::dropdown-->
                                            <a href="/islerim/listede-filtreleme/" class="btn btn-icon pw-bg-neutral-200 me-2 w-20px h-20px rounded-2px"><i class="fa-solid fa-bars-filter text-primary fs-9"></i></a>
                                        </div>
                                    </div>
                                    
                                    <!--begin::İşlerim Table-->
                                    <div class="table-responsive overflow-x-auto rounded">
                                        <table class="table table-row-bordered border pw-dark-bg-table pw-table-border-gray pw-table-border-gray table-rounded align-middle w-max-content min-w-100 gy-2 gx-9 gs-9">
                                            <thead>
                                                <tr class="fw-semibold fs-8 pw-text-neutral-700 pw-bg-neutral-100">
                                                    <th class="py-3"><i class="fa-solid fa-id-card pw-text-primary-300 me-2"></i>Akış Adı</th>
                                                    <th class="py-3">Aktivite Adı</th>
                                                    <th class="py-3">Başlangıç Tarihi</th>
                                                    <th class="py-3">Son İşlem Zamanı </th>
                                                    <th class="py-3">Geçen Süre</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="fw-medium pw-text-neutral-700 fs-9 hover-pw-bg-primary-300">
                                                    <td class="py-3 d-flex">
                                                        <div class="me-2">
                                                            <div class="d-grid align-items-center float-start me-1">
                                                                <i class="fa-solid fa-pen-to-square pw-text-danger-400 fs-10"></i>
                                                                <i class="fa-solid fa-paperclip fs-10"></i>
                                                            </div>
                                                            <i class="fa-solid fa-map-pin px-1 pw-text-primary-300"></i>  
                                                        </div>
                                                        
                                                        IT Talep Süreci - 2023-02-24
                                                    </td>
                                                    <td class="py-3">Talep Değerlendirme</td>
                                                    <td class="py-3">24.02.2023 10:56</td>
                                                    <td class="py-3">24.02.2023 10:56</td>
                                                    <td class="py-3">114 Gün 22 Saat 35 Dakika </td>
                                                </tr>
                                                <tr class="fw-medium pw-text-neutral-700 fs-9 hover-pw-bg-primary-300">
                                                    <td class="py-3 d-flex">
                                                        <div class="me-2">
                                                            <div class="d-grid align-items-center float-start me-1">
                                                                <i class="fa-solid fa-pen-to-square pw-text-danger-400 fs-10"></i>
                                                                <i class="fa-solid fa-paperclip fs-10"></i>
                                                            </div>
                                                            <i class="fa-solid fa-id-card pw-text-primary-300"></i>  
                                                        </div>
                                                        
                                                        IT Talep Süreci - 2023-02-24
                                                    </td>
                                                    <td class="py-3">Talep Değerlendirme</td>
                                                    <td class="py-3">24.02.2023 10:56</td>
                                                    <td class="py-3">24.02.2023 10:56</td>
                                                    <td class="py-3">114 Gün 22 Saat 35 Dakika </td>
                                                </tr>
                                                <tr class="fw-medium pw-text-neutral-700 fs-9 hover-pw-bg-primary-300">
                                                    <td class="py-3 d-flex">
                                                        <div class="me-2">
                                                            <div class="d-grid align-items-center float-start me-1">
                                                                <i class="fa-solid fa-pen-to-square pw-text-danger-400 fs-10"></i>
                                                                <i class="fa-solid fa-paperclip fs-10"></i>
                                                            </div>
                                                            <i class="fa-solid fa-id-card pw-text-primary-300"></i>  
                                                        </div>
                                                        
                                                        IT Talep Süreci - 2023-02-24
                                                    </td>
                                                    <td class="py-3">Talep Değerlendirme</td>
                                                    <td class="py-3">24.02.2023 10:56</td>
                                                    <td class="py-3">24.02.2023 10:56</td>
                                                    <td class="py-3">114 Gün 22 Saat 35 Dakika </td>
                                                </tr>
                                                <tr class="fw-medium pw-text-neutral-700 fs-9 hover-pw-bg-primary-300 pw-bg-danger-200">
                                                    <td class="py-3 d-flex">
                                                        <div class="me-2">
                                                            <div class="d-grid align-items-center float-start me-1">
                                                                <i class="fa-solid fa-pen-to-square pw-text-danger-400 fs-10"></i>
                                                                <i class="fa-solid fa-paperclip fs-10"></i>
                                                            </div>
                                                            <i class="fa-solid fa-id-card pw-text-primary-300"></i>  
                                                        </div>
                                                        
                                                        IT Talep Süreci - 2023-02-24
                                                    </td>
                                                    <td class="py-3">Talep Değerlendirme</td>
                                                    <td class="py-3">24.02.2023 10:56</td>
                                                    <td class="py-3">24.02.2023 10:56</td>
                                                    <td class="py-3">114 Gün 22 Saat 35 Dakika </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end::İşlerim Table-->

                                    <!--begin::Table footer-->
                                    <div class="d-flex flex-column-reverse flex-sm-row align-items-center align-items-sm-end justify-content-center justify-content-sm-between gap-8 gap-sm-4 my-3">
                                        <!--begin::Information-->
                                        <div class="d-flex flex-column flex-sm-row flex-wrap align-items-center gap-2 gap-sm-6 gap-md-9 fw-medium text-primary fs-8 justify-content-center justify-content-sm-start w-100">
                                            <span>Toplam: 4 Adet</span>
                                        </div>
                                        <!--end::Information-->
                                        <!--begin::Pagination-->
                                        <ul class="pagination flex-nowrap flex-shrink-0">
                                            <!--begin::Pagination item previous-->
                                            <li class="page-item previous disabled"><a href="#" class="page-link pw-min-w-32px h-32px fs-8"><i class="previous"></i></a></li>
                                            <!--end::Pagination item previous-->

                                            <!--begin::Pagination-item-->
                                            <li class="page-item active">
                                                <a href="/sistem-raporlari/akis-istatistikleri/#" class="page-link pw-min-w-32px h-32px fs-8">1</a>
                                            </li>
                                            <!--end::Pagination item-->

                                            <!--begin::Pagination item-->
                                            <li class="page-item">
                                                <a href="/sistem-raporlari/akis-istatistikleri/#" class="page-link pw-min-w-32px h-32px fs-8">2</a>
                                            </li>
                                            <!--end::Pagination item-->

                                            <!--begin::Pagination item-->
                                            <li class="page-item ">
                                                <a href="/sistem-raporlari/akis-istatistikleri/#" class="page-link pw-min-w-32px h-32px fs-8">3</a>
                                            </li>
                                            <!--end::Pagination item-->

                                            <!--begin::Pagination item-->
                                            <li class="page-item ">
                                                <a href="/sistem-raporlari/akis-istatistikleri/#" class="page-link pw-min-w-32px h-32px fs-8">4</a>
                                            </li>
                                            <!--end::Pagination item-->

                                            <!--begin::Pagination item-->
                                            <li class="page-item ">
                                                <a href="/sistem-raporlari/akis-istatistikleri/#" class="page-link pw-min-w-32px h-32px fs-8">5</a>
                                            </li>
                                            <!--end::Pagination item-->

                                            <!--begin::Pagination item-->
                                            <li class="page-item next">
                                                <a href="/sistem-raporlari/akis-istatistikleri/#" class="page-link pw-min-w-32px h-32px fs-8"><i class="next"></i></a>
                                            </li>
                                            <!--end::Pagination item-->
                                        </ul>
                                        <!--end::Pagination-->
                                    </div>
                                    <!--end::Table footer-->
                                </div>
                            </div>

                            <div class="row ps-3 mt-5">
                                <div class="border pw-border-stroke rounded-3 px-5 py-7">
                                    <div class="d-flex">
                                        <button class="btn pw-bg-primary-400 w-20px h-20px p-0 m-0 d-flex align-items-center justify-content-center rounded-circle me-2"><i class="fa-solid text-white fa-xmark fs-9 p-0"></i></button>
                                        <button class="btn pw-bg-primary-400 w-20px h-20px p-0 m-0 d-flex align-items-center justify-content-center rounded-circle me-2"><i class="fa-solid text-white fa-angle-up fs-9 p-0"></i></button>
                                        <button class="btn pw-bg-primary-400 w-20px h-20px p-0 m-0 d-flex align-items-center justify-content-center rounded-circle me-2"><i class="fa-solid text-white fa-angle-down pt-1 fs-9 p-0"></i></button>
                                        <button class="btn pw-bg-primary-400 w-20px h-20px p-0 m-0 d-flex align-items-center justify-content-center rounded-circle me-2"><i class="fa-solid text-white fa-star fs-9 p-0"></i></button>
                                    </div>

                                    <div class="my-5">
                                        <h5 class="fs-6 p-0 m-0 text-gray-800">IT Talep Süreci - 2023-02-24</h5>
                                    </div>

                                    <div class="row ps-3 mb-5">
                                        <div class="border pw-border-stroke pw-shadow-3 rounded-2 p-0 py-4 w-325px">
                                            <h6 class="fs-8 text-gray-800 px-4 mb-3">Başlatan <span class="fs-8 text-gray-600">(24.02.2023 10:17:04)</span></h6>
                                            <div class="d-flex align-items-center w-100 px-3">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-45px symbol-circle me-3">
                                                    <span class="symbol-label bg-light-primary text-primary fs-6 fw-bolder">E</span>
                                                    <div class="symbol-badge bg-success start-100 top-100 p-1 h-5px w-5px ms-n2 mt-n2"></div>
                                                </div>
                                                <!--end::Avatar-->
                                                
                                                <div class="w-100">
                                                    <div class="row pb-1">
                                                        <div class="col-5 fs-9 text-gray-600 fw-bold">Kullanıcı Adı:</div>
                                                        <div class="col-7 text-gray-800 fs-9 px-0">Ezgi Çelik</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-5 fs-9 text-gray-600 fw-bold">Ünvanı:</div>
                                                        <div class="col-7 text-gray-800 fs-9 px-0">Test Uzmanı</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row ps-3 mb-5">
                                        <div class="border pw-border-stroke pw-shadow-3 rounded-2 p-0 py-4 w-325px">
                                            <h6 class="fs-8 text-gray-800 px-4 mb-3">Son Aktivite Sahibi <span class="fs-8 text-gray-600">(24.02.2023 10:17:17)</span></h6>
                                            <div class="d-flex align-items-center w-100 px-3">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-45px symbol-circle me-3">
                                                    <span class="symbol-label bg-light-primary text-primary fs-6 fw-bolder">E</span>
                                                    <div class="symbol-badge bg-success start-100 top-100 p-1 h-5px w-5px ms-n2 mt-n2"></div>
                                                </div>
                                                <!--end::Avatar-->
                                                
                                                <div class="w-100">
                                                    <div class="row pb-1">
                                                        <div class="col-5 fs-9 text-gray-600 fw-bold">Kullanıcı Adı:</div>
                                                        <div class="col-7 text-gray-800 fs-9 px-0">Ezgi Çelik</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-5 fs-9 text-gray-600 fw-bold">Ünvanı:</div>
                                                        <div class="col-7 text-gray-800 fs-9 px-0">Test Uzmanı</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--begin::Bottom content-->
                                    <div class="rounded border p-5 mt-10" id="bottomContent">
                                        <!--begin::Table tabs wrapper-->
                                        <div class="table-reponsive overflow-x-auto">
                                            <!--begin::Table tabs-->
                                            <div class="nav nav-tabs nav-line-tabs fs-6" role="tablist">
                                                <!--begin::Tab item-->
                                                <li class="nav-item pe-5" role="presentation">
                                                    <a class="nav-link py-3 px-1 mx-0 fs-8 fw-medium active rounded-0 pw-text-neutral-500" data-bs-toggle="tab" href="#pw_tab_pane_elektronik_form" aria-selected="false" role="tab" tabindex="-1">Elektronik Form</a>
                                                </li>
                                                <!--end::Tab item-->

                                                <!--begin::Tab item-->
                                                <li class="nav-item px-5" role="presentation">
                                                    <a class="nav-link mx-0 py-3 px-1 fs-8 rounded-0 fw-medium" data-bs-toggle="tab" href="#pw_tab_pane_tarihce" aria-selected="true" role="tab">Tarihçe</a>
                                                </li>
                                                <!--end::Tab item-->

                                                <!--begin::Tab item-->
                                                <li class="nav-item px-5 position-relative" role="presentation">
                                                    <a class="nav-link py-3 px-1 mx-0 fs-8 fw-medium rounded-0 pw-text-neutral-500" data-bs-toggle="tab" href="#pw_tab_pane_notlar" aria-selected="false" role="tab" tabindex="-1">Notlar </a>
                                                    <span class="position-absolute top-25 start-75 translate-middle w-12px h-12px badge badge-circle badge-light-primary fs-9 p-2 mt-n1 ms-2">1</span>
                                                </li>
                                                <!--end::Tab item-->

                                                <!--begin::Tab item-->
                                                <li class="nav-item px-5" role="presentation">
                                                    <a class="nav-link py-3 px-1 mx-0 fs-8 fw-medium rounded-0 pw-text-neutral-500" data-bs-toggle="tab" href="#pw_tab_pane_sohbet" aria-selected="false" role="tab" tabindex="-1">Sohbet</a>
                                                </li>
                                                <!--end::Tab item-->

                                                <!--begin::Tab item-->
                                                <li class="nav-item px-5" role="presentation">
                                                    <a class="nav-link py-3 px-1 mx-0 fs-8 fw-medium rounded-0 pw-text-neutral-500" data-bs-toggle="tab" href="#pw_tab_pane_eklentiler" aria-selected="false" role="tab" tabindex="-1">Eklentiler</a>
                                                </li>
                                                <!--end::Tab item-->
                                            </div>
                                            <!--end::Table tabs-->
                                        </div>
                                        <!--end::Table tabs wrapper-->

                                        <!--begin::Table tab contents-->
                                        <div class="tab-content pw-dashboard-tab-content" id="tableTabContents">
                                            
                                            <div class="tab-pane py-5 fade active show" id="pw_tab_pane_elektronik_form" role="tabpanel">
                                                <div class="table-responsive overflow-x-auto rounded">
                                                    <!--begin::Table tabs wrapper-->
                                                    <div class="table-reponsive overflow-x-auto">
                                                        <!--begin::Table tabs-->
                                                        <div class="nav fs-6" role="tablist">
                                                            <!--begin::Tab item-->
                                                            <li class="nav-item" role="presentation">
                                                                <a class="mx-0 px-2 fs-base rounded-0 fw-medium active" data-bs-toggle="tab" href="#pw_tab_pane_flooppy_disk" aria-selected="true" role="tab">
                                                                    <i class="fa-solid fa-floppy-disk pw-text-primary-400 fs-7 text-primary"></i>
                                                                </a>
                                                            </li>
                                                            <!--end::Tab item-->

                                                            <!--begin::Tab item-->
                                                            <li class="nav-item" role="presentation">
                                                                <a class="px-2 mx-0 fs-base fw-medium rounded-0 pw-text-neutral-500" data-bs-toggle="tab" href="#pw_tab_shuffle" aria-selected="false" role="tab" tabindex="-1">
                                                                    <i class="fa-solid fa-shuffle pw-text-primary-400 fs-7 text-primary"></i>
                                                                </a>
                                                            </li>
                                                            <!--end::Tab item-->

                                                            <!--begin::Tab item-->
                                                            <li class="nav-item" role="presentation">
                                                                <a class="px-2 mx-0 fs-base fw-medium rounded-0 pw-text-neutral-500" data-bs-toggle="tab" href="#pw_tab_right_from_line" aria-selected="false" role="tab" tabindex="-1">
                                                                <i class="fa-solid fa-right-from-line pw-text-primary-400 fs-7 text-primary"></i>
                                                                </a>
                                                            </li>
                                                            <!--end::Tab item-->
                                                        </div>
                                                        <!--end::Table tabs-->
                                                    </div>
                                                    <!--end::Table tabs wrapper-->

                                                    <!--begin::Table tab contents-->
                                                    <div class="tab-content pw-dashboard-tab-content mt-5 mb-7" id="tableTabContents">
                                                        <div class="tab-pane fade" id="pw_tab_shuffle" role="tabpanel">
                                                            <div class="d-flex align-items-center">
                                                                <label for="yonlendirme" class="pw-text-neutral-600 fs-7 fw-bold me-5">Yönlendirme</label>
                                                                <div class="w-375px me-5">
                                                                    <select class="form-select form-select-solid fs-8 py-4 px-4" data-control="select2" py data-placeholder="" name="">
                                                                        <option value="1">Option 1</option>
                                                                        <option value="2">Option 2</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                                                                    <input class="form-check-input" type="checkbox" value="" id="" checked="checked">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="tab-pane fade" id="pw_tab_right_from_line" role="tabpanel">
                                                            <div class="d-flex align-items-center">
                                                                <label for="yonlendirme" class="pw-text-neutral-600 fs-7 fw-bold me-5">Ata</label>
                                                                <div class="w-375px me-5">
                                                                    <select class="form-select form-select-solid fs-8 py-4 px-4" data-control="select2" py data-placeholder="" name="">
                                                                        <option value="1">Option 1</option>
                                                                        <option value="2">Option 2</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                                                                    <input class="form-check-input" type="checkbox" value="" id="" checked="checked">
                                                                </div>
                                                                <a href="javascript:void(0);" class="float-start me-3 mb-1"><i class="fa-solid fa-trash fs-4 text-primary"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade py-5" id="pw_tab_pane_tarihce" role="tabpanel">
                                                <div class="rounded border p-3">
                                                    <!--begin::Table tabs wrapper-->
                                                    <div class="table-reponsive overflow-x-auto">
                                                        <!--begin::Table tabs-->
                                                        <div class="nav nav-tabs nav-line-tabs fs-6" role="tablist">
                                                            <!--begin::Tab item-->
                                                            <li class="nav-item pe-3" role="presentation">
                                                                <a class="nav-link active py-3 px-1 mx-0 fw-medium rounded-0 pw-text-neutral-500 fs-8" data-bs-toggle="tab" href="#pw_sub_tab_pane_tum_kullanicilar" aria-selected="false" role="tab" tabindex="-1">Tüm Kullanıcılar</a>
                                                            </li>
                                                            <!--end::Tab item-->

                                                            <!--begin::Tab item-->
                                                            <li class="nav-item px-3" role="presentation">
                                                                <a class="nav-link mx-0 py-3 px-1 rounded-0 fw-medium fs-8" data-bs-toggle="tab" href="#pw_sub_tab_pane_tarihce" aria-selected="true" role="tab">Tarihçe</a>
                                                            </li>
                                                            <!--end::Tab item-->

                                                            <!--begin::Tab item-->
                                                            <li class="nav-item px-3" role="presentation">
                                                                <a class="nav-link py-3 px-1 mx-0 fw-medium rounded-0 pw-text-neutral-500 fs-8" data-bs-toggle="tab" href="#pw_sub_tab_pane_diyagram" aria-selected="false" role="tab" tabindex="-1">Diyagram</a>
                                                            </li>
                                                            <!--end::Tab item-->
                                                        </div>
                                                        <!--end::Table tabs-->
                                                    </div>
                                                    <!--end::Table tabs wrapper-->

                                                    <!--begin::Table tab contents-->
                                                    <div class="tab-content pw-dashboard-tab-content" id="tableTabContents">
                                                        <!--begin::Tum Kullanicilar content-->
                                                        <div class="tab-pane fade active show py-10" id="pw_sub_tab_pane_tum_kullanicilar" role="tabpanel">
                                                            <!--begin::Timeline-->
                                                            <div class="row ps-10">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="float-start fs-7 pw-text-gray-900 fw-bold">
                                                                        27.02.2023 10:46
                                                                    </div>
                                                                    <div class="float-start h-100 d-flex align-items-center position-relative mx-10">
                                                                        <div class="position-absolute pw-bg-neutral-400 w-1px ms-5 h-100"></div>
                                                                            <div class="timeline-icon symbol symbol-circle symbol-40px">
                                                                            <div class="symbol-label bg-white">
                                                                                <i class="fa-regular fa-circle text-primary fs-3"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="p-3">
                                                                        <!--begin::Card-->
                                                                        <div class="card w-275px h-225px pw-bg-neutral-100 time-line-card">
                                                                            <!--begin::Card body-->
                                                                            <div class="card-body d-flex flex-center flex-column p-3">
                                                                                <!--begin::Avatar-->
                                                                                <div class="symbol symbol-65px symbol-circle mb-3">
                                                                                    <img src="assets/media//avatars/795aef3699650569594c1f14a35a60f7.jpg" alt="image" />
                                                                                </div>
                                                                                <!--end::Avatar-->
                                                                                <!--begin::Name-->
                                                                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold mb-0">Eyüp Tarık Doğan</a>
                                                                                <!--end::Name-->
                                                                                <!--begin::Position-->
                                                                                <div class="fw-semibold text-gray-500 mb-3">Test Uzman Yardımcısı</div>
                                                                                <!--end::Position-->

                                                                                <!--begin::Position-->
                                                                                <div class="text-gray-500 text-center">
                                                                                    <p class="my-0 py-0">İptal Edildi</p>
                                                                                    <p class="my-0 py-1"><span class="fw-bold">Bitiş:</span> 14.02.2023 09:37:42</p>
                                                                                </div>
                                                                                <!--end::Position-->
                                                                            </div>
                                                                            <!--end::Card body-->
                                                                        </div>
                                                                        <!--end::Card-->
                                                                    </div>
                                                                </div>

                                                                <div class="d-flex align-items-center">
                                                                    <div class="float-start fs-7 pw-text-gray-900 fw-bold">
                                                                        27.02.2023 10:46
                                                                    </div>
                                                                    <div class="float-start h-100 d-flex align-items-center position-relative mx-10">
                                                                        <div class="position-absolute pw-bg-neutral-400 w-1px ms-5 h-100"></div>
                                                                            <div class="timeline-icon symbol symbol-circle symbol-40px">
                                                                            <div class="symbol-label bg-white">
                                                                                <i class="fa-regular fa-circle text-primary fs-3"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="p-3">
                                                                        <!--begin::Card-->
                                                                        <div class="card w-275px h-225px pw-bg-neutral-100 time-line-card">
                                                                            <!--begin::Card body-->
                                                                            <div class="card-body d-flex flex-center flex-column p-3">
                                                                                <!--begin::Avatar-->
                                                                                <div class="symbol symbol-65px symbol-circle mb-3">
                                                                                    <img src="assets/media//avatars/795aef3699650569594c1f14a35a60f7.jpg" alt="image" />
                                                                                </div>
                                                                                <!--end::Avatar-->
                                                                                <!--begin::Name-->
                                                                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold mb-0">Eyüp Tarık Doğan</a>
                                                                                <!--end::Name-->
                                                                                <!--begin::Position-->
                                                                                <div class="fw-semibold text-gray-500 mb-3">Test Uzman Yardımcısı</div>
                                                                                <!--end::Position-->

                                                                                <!--begin::Position-->
                                                                                <div class="text-gray-500 text-center">
                                                                                    <p class="my-0 py-0">İptal Edildi</p>
                                                                                    <p class="my-0 py-1"><span class="fw-bold">Bitiş:</span> 14.02.2023 09:37:42</p>
                                                                                </div>
                                                                                <!--end::Position-->
                                                                            </div>
                                                                            <!--end::Card body-->
                                                                        </div>
                                                                        <!--end::Card-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--end::Timeline-->
                                                        </div>
                                                        <!--end::Tum Kullanicilar content-->

                                                        <!--begin::Tarihçe content-->
                                                        <div class="tab-pane fade py-5" id="pw_sub_tab_pane_tarihce" role="tabpanel">
                                                            <!--begin::Table tabs wrapper-->
                                                            <div class="table-reponsive overflow-x-auto mb-5">
                                                                <!--begin::Table tabs-->
                                                                <div class="nav fs-6" role="tablist">
                                                                    <!--begin::Tab item-->
                                                                    <li class="nav-item" role="presentation">
                                                                        <a class="mx-0 px-2 fs-base rounded-0 fw-medium active" data-bs-toggle="tab" href="#pw_tab_pane_flooppy_disk" aria-selected="true" role="tab">
                                                                            <i class="fa-solid fa-circle pw-text-warning-400 fs-7 text-primary"></i>
                                                                        </a>
                                                                    </li>
                                                                    <!--end::Tab item-->

                                                                    <!--begin::Tab item-->
                                                                    <li class="nav-item" role="presentation">
                                                                        <a class="px-2 mx-0 fs-base fw-medium rounded-0 pw-text-neutral-500" data-bs-toggle="tab" href="#pw_tab_shuffle" aria-selected="false" role="tab" tabindex="-1">
                                                                            <i class="fa-solid fa-envelope pw-text-primary-400 fs-7 text-primary"></i>
                                                                        </a>
                                                                    </li>
                                                                    <!--end::Tab item-->
                                                                </div>
                                                                <!--end::Table tabs-->
                                                            </div>
                                                            <!--end::Table tabs wrapper-->

                                                            <div class="table-responsive overflow-x-auto rounded">
                                                                <table class="table table-row-bordered border pw-dark-bg-table pw-table-border-gray pw-table-border-gray table-rounded align-middle w-max-content min-w-100 gy-2 gx-9 gs-9">
                                                                    <thead>
                                                                        <tr class="fw-semibold fs-8 pw-text-neutral-700 pw-bg-neutral-100">
                                                                            <th class="py-3"><i class="fa-solid fa-id-card pw-text-primary-300 me-2"></i>Adım Numarası</th>
                                                                            <th class="py-3">Aktivite Numarası</th>
                                                                            <th class="py-3">Kullanıcı</th>
                                                                            <th class="py-3">Aktivite Adı</th>
                                                                            <th class="py-3">Durumu</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr class="fw-medium pw-text-neutral-700 fs-9 hover-pw-bg-primary-300">
                                                                            <td class="py-3">
                                                                                <i class="fa-solid fa-map-pin pw-text-primary-300 fs-7 me-2"></i>
                                                                                IT Talep Süreci - 2023-02-24
                                                                            </td>
                                                                            <td class="py-3">Talep Değerlendirme</td>
                                                                            <td class="py-3">24.02.2023 10:56</td>
                                                                            <td class="py-3">24.02.2023 10:56</td>
                                                                            <td class="py-3">Bitirildi </td>
                                                                        </tr>
                                                                        <tr class="fw-medium pw-text-neutral-700 fs-9 hover-pw-bg-primary-300">
                                                                            <td class="py-3">
                                                                                <i class="fa-solid fa-map-pin pw-text-primary-300 fs-7 me-2"></i>
                                                                                IT Talep Süreci - 2023-02-24
                                                                            </td>
                                                                            <td class="py-3">Talep Değerlendirme</td>
                                                                            <td class="py-3">24.02.2023 10:56</td>
                                                                            <td class="py-3">24.02.2023 10:56</td>
                                                                            <td class="py-3">Bitirildi </td>
                                                                        </tr>
                                                                        <tr class="fw-medium pw-text-neutral-700 fs-9 hover-pw-bg-primary-300">
                                                                            <td class="py-3">
                                                                                <i class="fa-solid fa-map-pin pw-text-primary-300 fs-7 me-2"></i>
                                                                                IT Talep Süreci - 2023-02-24
                                                                            </td>
                                                                            <td class="py-3">Talep Değerlendirme</td>
                                                                            <td class="py-3">24.02.2023 10:56</td>
                                                                            <td class="py-3">24.02.2023 10:56</td>
                                                                            <td class="py-3">Bitirildi </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>

                                                            <!--begin::Table footer-->
                                                            <div class="d-flex flex-column-reverse flex-sm-row align-items-center align-items-sm-end justify-content-center justify-content-sm-between gap-8 gap-sm-4 my-3">
                                                                <!--begin::Information-->
                                                                <div class="d-flex flex-column flex-sm-row flex-wrap align-items-center gap-2 gap-sm-6 gap-md-9 fw-medium text-primary fs-8 justify-content-center justify-content-sm-start w-100">
                                                                    <span>Toplam: 3 Adet</span>
                                                                </div>
                                                                <!--end::Information-->
                                                                <!--begin::Pagination-->
                                                                <ul class="pagination flex-nowrap flex-shrink-0">
                                                                    <!--begin::Pagination item previous-->
                                                                    <li class="page-item previous disabled"><a href="#" class="page-link pw-min-w-32px h-32px fs-8"><i class="previous"></i></a></li>
                                                                    <!--end::Pagination item previous-->

                                                                    <!--begin::Pagination-item-->
                                                                    <li class="page-item active">
                                                                        <a href="/sistem-raporlari/akis-istatistikleri/#" class="page-link pw-min-w-32px h-32px fs-8">1</a>
                                                                    </li>
                                                                    <!--end::Pagination item-->

                                                                    <!--begin::Pagination item-->
                                                                    <li class="page-item">
                                                                        <a href="/sistem-raporlari/akis-istatistikleri/#" class="page-link pw-min-w-32px h-32px fs-8">2</a>
                                                                    </li>
                                                                    <!--end::Pagination item-->

                                                                    <!--begin::Pagination item-->
                                                                    <li class="page-item ">
                                                                        <a href="/sistem-raporlari/akis-istatistikleri/#" class="page-link pw-min-w-32px h-32px fs-8">3</a>
                                                                    </li>
                                                                    <!--end::Pagination item-->

                                                                    <!--begin::Pagination item-->
                                                                    <li class="page-item ">
                                                                        <a href="/sistem-raporlari/akis-istatistikleri/#" class="page-link pw-min-w-32px h-32px fs-8">4</a>
                                                                    </li>
                                                                    <!--end::Pagination item-->

                                                                    <!--begin::Pagination item-->
                                                                    <li class="page-item ">
                                                                        <a href="/sistem-raporlari/akis-istatistikleri/#" class="page-link pw-min-w-32px h-32px fs-8">5</a>
                                                                    </li>
                                                                    <!--end::Pagination item-->

                                                                    <!--begin::Pagination item-->
                                                                    <li class="page-item next">
                                                                        <a href="/sistem-raporlari/akis-istatistikleri/#" class="page-link pw-min-w-32px h-32px fs-8"><i class="next"></i></a>
                                                                    </li>
                                                                    <!--end::Pagination item-->
                                                                </ul>
                                                                <!--end::Pagination-->
                                                            </div>
                                                            <!--end::Table footer-->
                                                            
                                                        </div>

                                                        <!--begin::Diyagram content-->
                                                        <div class="tab-pane fade" id="pw_sub_tab_pane_diyagram" role="tabpanel">
                                                            
                                                        </div>
                                                        <!--end::Diyagram content-->
                                                    </div>
                                                    <!--end::Table tab contents-->
                                                </div>
                                            </div>

                                            <div class="tab-pane fade py-5 position-relative" id="pw_tab_pane_notlar" role="tabpanel">
                                                <button class="btn btn-primary d-flex align-items-center justify-content-center px-3 py-1 fs-9 position-absolute z-index-1 m-2 end-0">Gönder<i class="fa-solid fa-angle-right fs-9"></i></button>
                                                <div id="notlarCKEditor"></div>
                                            </div>

                                            <div class="tab-pane fade py-5" id="pw_tab_pane_sohbet" role="tabpanel">

                                            </div>

                                            <div class="tab-pane fade py-5" id="pw_tab_pane_eklentiler" role="tabpanel">

                                            </div>
                                        </div>
                                        <!--end::Table tab contents-->
                                    </div>
                                    <!--end::Bottom content-->
                                </div>
                            </div>
                            
                        </div>

                        <div class="tab-pane fade" id="kt_vtab_pane_2" role="tabpanel">
                            <div class="row ps-3">
                                <div class="border pw-border-stroke rounded-3 px-5 py-7">
                                    <div class="row mb-5">
                                        <div class="col-md-8 col-lg-8">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h6 class="text-gray-700 fs-8 me-5">Tamamlananlar</h6>
                                                <div class="w-325px">
                                                    <select class="form-select form-select-solid fs-8 py-4 px-4" data-control="select2" py data-placeholder="" name="">
                                                        <option value="1">Hepsi</option>
                                                        <option value="2">Devam edenler</option>
                                                        <option value="3">Tamamlananlar</option>
                                                        <option value="4">Hatalı Akışlar</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!--begin::İşlerim Table-->
                                    <div class="table-responsive overflow-x-auto rounded">
                                        <table class="table table-row-bordered border pw-dark-bg-table pw-table-border-gray pw-table-border-gray table-rounded align-middle w-max-content min-w-100 gy-2 gx-9 gs-9">
                                            <thead>
                                                <tr class="fw-semibold fs-8 pw-text-neutral-700 pw-bg-neutral-100">
                                                    <th class="py-3"><i class="fa-solid fa-id-card pw-text-primary-300 me-2"></i>Akış Adı</th>
                                                    <th class="py-3">Aktivite Adı</th>
                                                    <th class="py-3">Başlangıç Tarihi</th>
                                                    <th class="py-3">Son İşlem Zamanı </th>
                                                    <th class="py-3">Geçen Süre</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="fw-medium pw-text-neutral-700 fs-9 hover-pw-bg-primary-300">
                                                    <td class="py-3 d-flex">
                                                        <div class="me-2">
                                                            <div class="d-grid align-items-center float-start me-1">
                                                                <i class="fa-solid fa-pen-to-square pw-text-danger-400 fs-10"></i>
                                                                <i class="fa-solid fa-paperclip fs-10"></i>
                                                            </div>
                                                            <i class="fa-solid fa-map-pin px-1 pw-text-primary-300"></i>  
                                                        </div>
                                                        
                                                        IT Talep Süreci - 2023-02-24
                                                    </td>
                                                    <td class="py-3">Talep Değerlendirme</td>
                                                    <td class="py-3">24.02.2023 10:56</td>
                                                    <td class="py-3">24.02.2023 10:56</td>
                                                    <td class="py-3">114 Gün 22 Saat 35 Dakika </td>
                                                </tr>
                                                <tr class="fw-medium pw-text-neutral-700 fs-9 hover-pw-bg-primary-300">
                                                    <td class="py-3 d-flex">
                                                        <div class="me-2">
                                                            <div class="d-grid align-items-center float-start me-1">
                                                                <i class="fa-solid fa-pen-to-square pw-text-danger-400 fs-10"></i>
                                                                <i class="fa-solid fa-paperclip fs-10"></i>
                                                            </div>
                                                            <i class="fa-solid fa-id-card pw-text-primary-300"></i>  
                                                        </div>
                                                        
                                                        IT Talep Süreci - 2023-02-24
                                                    </td>
                                                    <td class="py-3">Talep Değerlendirme</td>
                                                    <td class="py-3">24.02.2023 10:56</td>
                                                    <td class="py-3">24.02.2023 10:56</td>
                                                    <td class="py-3">114 Gün 22 Saat 35 Dakika </td>
                                                </tr>
                                                <tr class="fw-medium pw-text-neutral-700 fs-9 hover-pw-bg-primary-300">
                                                    <td class="py-3 d-flex">
                                                        <div class="me-2">
                                                            <div class="d-grid align-items-center float-start me-1">
                                                                <i class="fa-solid fa-pen-to-square pw-text-danger-400 fs-10"></i>
                                                                <i class="fa-solid fa-paperclip fs-10"></i>
                                                            </div>
                                                            <i class="fa-solid fa-id-card pw-text-primary-300"></i>  
                                                        </div>
                                                        
                                                        IT Talep Süreci - 2023-02-24
                                                    </td>
                                                    <td class="py-3">Talep Değerlendirme</td>
                                                    <td class="py-3">24.02.2023 10:56</td>
                                                    <td class="py-3">24.02.2023 10:56</td>
                                                    <td class="py-3">114 Gün 22 Saat 35 Dakika </td>
                                                </tr>
                                                <tr class="fw-medium pw-text-neutral-700 fs-9 hover-pw-bg-primary-300 pw-bg-danger-200">
                                                    <td class="py-3 d-flex">
                                                        <div class="me-2">
                                                            <div class="d-grid align-items-center float-start me-1">
                                                                <i class="fa-solid fa-pen-to-square pw-text-danger-400 fs-10"></i>
                                                                <i class="fa-solid fa-paperclip fs-10"></i>
                                                            </div>
                                                            <i class="fa-solid fa-id-card pw-text-primary-300"></i>  
                                                        </div>
                                                        
                                                        IT Talep Süreci - 2023-02-24
                                                    </td>
                                                    <td class="py-3">Talep Değerlendirme</td>
                                                    <td class="py-3">24.02.2023 10:56</td>
                                                    <td class="py-3">24.02.2023 10:56</td>
                                                    <td class="py-3">114 Gün 22 Saat 35 Dakika </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end::İşlerim Table-->

                                    <!--begin::Table footer-->
                                    <div class="d-flex flex-column-reverse flex-sm-row align-items-center align-items-sm-end justify-content-center justify-content-sm-between gap-8 gap-sm-4 my-3">
                                        <!--begin::Information-->
                                        <div class="d-flex flex-column flex-sm-row flex-wrap align-items-center gap-2 gap-sm-6 gap-md-9 fw-medium text-primary fs-8 justify-content-center justify-content-sm-start w-100">
                                            <span>Toplam: 4 Adet</span>
                                        </div>
                                        <!--end::Information-->
                                        <!--begin::Pagination-->
                                        <ul class="pagination flex-nowrap flex-shrink-0">
                                            <!--begin::Pagination item previous-->
                                            <li class="page-item previous disabled"><a href="#" class="page-link pw-min-w-32px h-32px fs-8"><i class="previous"></i></a></li>
                                            <!--end::Pagination item previous-->

                                            <!--begin::Pagination-item-->
                                            <li class="page-item active">
                                                <a href="/sistem-raporlari/akis-istatistikleri/#" class="page-link pw-min-w-32px h-32px fs-8">1</a>
                                            </li>
                                            <!--end::Pagination item-->

                                            <!--begin::Pagination item-->
                                            <li class="page-item">
                                                <a href="/sistem-raporlari/akis-istatistikleri/#" class="page-link pw-min-w-32px h-32px fs-8">2</a>
                                            </li>
                                            <!--end::Pagination item-->

                                            <!--begin::Pagination item-->
                                            <li class="page-item ">
                                                <a href="/sistem-raporlari/akis-istatistikleri/#" class="page-link pw-min-w-32px h-32px fs-8">3</a>
                                            </li>
                                            <!--end::Pagination item-->

                                            <!--begin::Pagination item-->
                                            <li class="page-item ">
                                                <a href="/sistem-raporlari/akis-istatistikleri/#" class="page-link pw-min-w-32px h-32px fs-8">4</a>
                                            </li>
                                            <!--end::Pagination item-->

                                            <!--begin::Pagination item-->
                                            <li class="page-item ">
                                                <a href="/sistem-raporlari/akis-istatistikleri/#" class="page-link pw-min-w-32px h-32px fs-8">5</a>
                                            </li>
                                            <!--end::Pagination item-->

                                            <!--begin::Pagination item-->
                                            <li class="page-item next">
                                                <a href="/sistem-raporlari/akis-istatistikleri/#" class="page-link pw-min-w-32px h-32px fs-8"><i class="next"></i></a>
                                            </li>
                                            <!--end::Pagination item-->
                                        </ul>
                                        <!--end::Pagination-->
                                    </div>
                                    <!--end::Table footer-->
                                </div>
                            </div>

                            <div class="row ps-3 mt-5">
                                <div class="border pw-border-stroke rounded-3 px-5 py-7">
                                    <div class="d-flex">
                                        <button class="btn pw-bg-primary-400 w-20px h-20px p-0 m-0 d-flex align-items-center justify-content-center rounded-circle me-2"><i class="fa-solid text-white fa-xmark fs-9 p-0"></i></button>
                                        <button class="btn pw-bg-primary-400 w-20px h-20px p-0 m-0 d-flex align-items-center justify-content-center rounded-circle me-2"><i class="fa-solid text-white fa-angle-up fs-9 p-0"></i></button>
                                        <button class="btn pw-bg-primary-400 w-20px h-20px p-0 m-0 d-flex align-items-center justify-content-center rounded-circle me-2"><i class="fa-solid text-white fa-angle-down pt-1 fs-9 p-0"></i></button>
                                        <button class="btn pw-bg-primary-400 w-20px h-20px p-0 m-0 d-flex align-items-center justify-content-center rounded-circle me-2"><i class="fa-solid text-white fa-star fs-9 p-0"></i></button>
                                    </div>

                                    <div class="my-5">
                                        <h5 class="fs-6 p-0 m-0 text-gray-800 mb-2">IT Talep Süreci - 2023-02-24</h5>
                                        <p class="fs-8 text-gray-800">Bitiş Tarihi: <span class="text-gray-600">24.02.2023 16:47</span></p>
                                    </div>

                                    <div class="row">
                                        <!--begin::Table tabs wrapper-->
                                        <div class="table-reponsive overflow-x-auto">
                                            <!--begin::Table tabs-->
                                            <div class="nav nav-tabs nav-line-tabs fs-6" role="tablist">
                                                <!--begin::Tab item-->
                                                <li class="nav-item pe-5" role="presentation">
                                                    <a class="nav-link py-3 px-1 mx-0 fs-8 fw-medium active rounded-0 pw-text-neutral-500" data-bs-toggle="tab" href="#tamalananlar_tab_pane_elektronik_form" aria-selected="false" role="tab" tabindex="-1">Elektronik Form</a>
                                                </li>
                                                <!--end::Tab item-->

                                                <!--begin::Tab item-->
                                                <li class="nav-item px-5" role="presentation">
                                                    <a class="nav-link mx-0 py-3 px-1 fs-8 rounded-0 fw-medium" data-bs-toggle="tab" href="#tamalananlar_tab_pane_tum_kullanicilar" aria-selected="true" role="tab">Tüm Kullanıcılar</a>
                                                </li>
                                                <!--end::Tab item-->

                                                <!--begin::Tab item-->
                                                <li class="nav-item px-5" role="presentation">
                                                    <a class="nav-link mx-0 py-3 px-1 fs-8 rounded-0 fw-medium" data-bs-toggle="tab" href="#tamalananlar_tab_pane_tarihce" aria-selected="true" role="tab">Tarihçe</a>
                                                </li>
                                                <!--end::Tab item-->

                                                <!--begin::Tab item-->
                                                <li class="nav-item px-5" role="presentation">
                                                    <a class="nav-link py-3 px-1 mx-0 fs-8 fw-medium rounded-0 pw-text-neutral-500" data-bs-toggle="tab" href="#tamalananlar_tab_pane_sohbet" aria-selected="false" role="tab" tabindex="-1">Sohbet</a>
                                                </li>
                                                <!--end::Tab item-->

                                                <!--begin::Tab item-->
                                                <li class="nav-item px-5" role="presentation">
                                                    <a class="nav-link py-3 px-1 mx-0 fs-8 fw-medium rounded-0 pw-text-neutral-500" data-bs-toggle="tab" href="#tamalananlar_tab_pane_eklentiler" aria-selected="false" role="tab" tabindex="-1">Eklentiler</a>
                                                </li>
                                                <!--end::Tab item-->
                                            </div>
                                            <!--end::Table tabs-->
                                        </div>
                                        <!--end::Table tabs wrapper-->

                                        <!--begin::Table tab contents-->
                                        <div class="tab-content pw-dashboard-tab-content" id="tableTabContents">
                                            
                                            <div class="tab-pane py-5 fade active show" id="tamalananlar_tab_pane_elektronik_form" role="tabpanel">

                                            </div>

                                            <div class="tab-pane fade py-5" id="tamalananlar_tab_pane_tum_kullanicilar" role="tabpanel">
                                                <!--begin::Timeline-->
                                                <div class="row">
                                                    <div class="d-flex align-items-center">
                                                        <div class="float-start fs-7 pw-text-gray-900 fw-bold">
                                                            27.02.2023 10:46
                                                        </div>
                                                        <div class="float-start h-100 d-flex align-items-center position-relative mx-10">
                                                            <div class="position-absolute pw-bg-neutral-400 w-1px ms-5 h-100"></div>
                                                                <div class="timeline-icon symbol symbol-circle symbol-40px">
                                                                <div class="symbol-label bg-white">
                                                                    <i class="fa-regular fa-circle text-primary fs-3"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="p-3">
                                                            <!--begin::Card-->
                                                            <div class="card w-275px h-225px pw-bg-neutral-100 time-line-card">
                                                                <!--begin::Card body-->
                                                                <div class="card-body d-flex flex-center flex-column p-3">
                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-65px symbol-circle mb-3">
                                                                        <img src="assets/media//avatars/795aef3699650569594c1f14a35a60f7.jpg" alt="image" />
                                                                    </div>
                                                                    <!--end::Avatar-->
                                                                    <!--begin::Name-->
                                                                    <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold mb-0">Eyüp Tarık Doğan</a>
                                                                    <!--end::Name-->
                                                                    <!--begin::Position-->
                                                                    <div class="fw-semibold text-gray-500 mb-3">Test Uzman Yardımcısı</div>
                                                                    <!--end::Position-->

                                                                    <!--begin::Position-->
                                                                    <div class="text-gray-500 text-center">
                                                                        <p class="my-0 py-0">İptal Edildi</p>
                                                                        <p class="my-0 py-1"><span class="fw-bold">Bitiş:</span> 14.02.2023 09:37:42</p>
                                                                    </div>
                                                                    <!--end::Position-->
                                                                </div>
                                                                <!--end::Card body-->
                                                            </div>
                                                            <!--end::Card-->
                                                        </div>
                                                    </div>

                                                    <div class="d-flex align-items-center">
                                                        <div class="float-start fs-7 pw-text-gray-900 fw-bold">
                                                            27.02.2023 10:46
                                                        </div>
                                                        <div class="float-start h-100 d-flex align-items-center position-relative mx-10">
                                                            <div class="position-absolute pw-bg-neutral-400 w-1px ms-5 h-100"></div>
                                                                <div class="timeline-icon symbol symbol-circle symbol-40px">
                                                                <div class="symbol-label bg-white">
                                                                    <i class="fa-regular fa-circle text-primary fs-3"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="p-3">
                                                            <!--begin::Card-->
                                                            <div class="card w-275px h-225px pw-bg-neutral-100 time-line-card">
                                                                <!--begin::Card body-->
                                                                <div class="card-body d-flex flex-center flex-column p-3">
                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-65px symbol-circle mb-3">
                                                                        <img src="assets/media//avatars/795aef3699650569594c1f14a35a60f7.jpg" alt="image" />
                                                                    </div>
                                                                    <!--end::Avatar-->
                                                                    <!--begin::Name-->
                                                                    <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold mb-0">Eyüp Tarık Doğan</a>
                                                                    <!--end::Name-->
                                                                    <!--begin::Position-->
                                                                    <div class="fw-semibold text-gray-500 mb-3">Test Uzman Yardımcısı</div>
                                                                    <!--end::Position-->

                                                                    <!--begin::Position-->
                                                                    <div class="text-gray-500 text-center">
                                                                        <p class="my-0 py-0">İptal Edildi</p>
                                                                        <p class="my-0 py-1"><span class="fw-bold">Bitiş:</span> 14.02.2023 09:37:42</p>
                                                                    </div>
                                                                    <!--end::Position-->
                                                                </div>
                                                                <!--end::Card body-->
                                                            </div>
                                                            <!--end::Card-->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Timeline-->
                                            </div>

                                            <div class="tab-pane fade py-5" id="tamalananlar_tab_pane_tarihce" role="tabpanel">
                                                <!--begin::Table tabs wrapper-->
                                                <div class="table-reponsive overflow-x-auto mb-5">
                                                    <!--begin::Table tabs-->
                                                    <div class="nav fs-6" role="tablist">
                                                        <!--begin::Tab item-->
                                                        <li class="nav-item" role="presentation">
                                                            <a class="mx-0 px-2 fs-base rounded-0 fw-medium active" data-bs-toggle="tab" href="#pw_tab_pane_flooppy_disk" aria-selected="true" role="tab">
                                                                <i class="fa-solid fa-circle pw-text-warning-400 fs-7 text-primary"></i>
                                                            </a>
                                                        </li>
                                                        <!--end::Tab item-->

                                                        <!--begin::Tab item-->
                                                        <li class="nav-item" role="presentation">
                                                            <a class="px-2 mx-0 fs-base fw-medium rounded-0 pw-text-neutral-500" data-bs-toggle="tab" href="#pw_tab_shuffle" aria-selected="false" role="tab" tabindex="-1">
                                                                <i class="fa-solid fa-envelope pw-text-primary-400 fs-7 text-primary"></i>
                                                            </a>
                                                        </li>
                                                        <!--end::Tab item-->
                                                    </div>
                                                    <!--end::Table tabs-->
                                                </div>
                                                <!--end::Table tabs wrapper-->

                                                <div class="table-responsive overflow-x-auto rounded">
                                                    <table class="table table-row-bordered border pw-dark-bg-table pw-table-border-gray pw-table-border-gray table-rounded align-middle w-max-content min-w-100 gy-2 gx-9 gs-9">
                                                        <thead>
                                                            <tr class="fw-semibold fs-8 pw-text-neutral-700 pw-bg-neutral-100">
                                                                <th class="py-3"><i class="fa-solid fa-id-card pw-text-primary-300 me-2"></i>Adım Numarası</th>
                                                                <th class="py-3">Aktivite Numarası</th>
                                                                <th class="py-3">Kullanıcı</th>
                                                                <th class="py-3">Aktivite Adı</th>
                                                                <th class="py-3">Durumu</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr class="fw-medium pw-text-neutral-700 fs-9 hover-pw-bg-primary-300">
                                                                <td class="py-3">
                                                                    <i class="fa-solid fa-map-pin pw-text-primary-300 fs-7 me-2"></i>
                                                                    IT Talep Süreci - 2023-02-24
                                                                </td>
                                                                <td class="py-3">Talep Değerlendirme</td>
                                                                <td class="py-3">24.02.2023 10:56</td>
                                                                <td class="py-3">24.02.2023 10:56</td>
                                                                <td class="py-3">Bitirildi </td>
                                                            </tr>
                                                            <tr class="fw-medium pw-text-neutral-700 fs-9 hover-pw-bg-primary-300">
                                                                <td class="py-3">
                                                                    <i class="fa-solid fa-map-pin pw-text-primary-300 fs-7 me-2"></i>
                                                                    IT Talep Süreci - 2023-02-24
                                                                </td>
                                                                <td class="py-3">Talep Değerlendirme</td>
                                                                <td class="py-3">24.02.2023 10:56</td>
                                                                <td class="py-3">24.02.2023 10:56</td>
                                                                <td class="py-3">Bitirildi </td>
                                                            </tr>
                                                            <tr class="fw-medium pw-text-neutral-700 fs-9 hover-pw-bg-primary-300">
                                                                <td class="py-3">
                                                                    <i class="fa-solid fa-map-pin pw-text-primary-300 fs-7 me-2"></i>
                                                                    IT Talep Süreci - 2023-02-24
                                                                </td>
                                                                <td class="py-3">Talep Değerlendirme</td>
                                                                <td class="py-3">24.02.2023 10:56</td>
                                                                <td class="py-3">24.02.2023 10:56</td>
                                                                <td class="py-3">Bitirildi </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>

                                                <!--begin::Table footer-->
                                                <div class="d-flex flex-column-reverse flex-sm-row align-items-center align-items-sm-end justify-content-center justify-content-sm-between gap-8 gap-sm-4 my-3">
                                                    <!--begin::Information-->
                                                    <div class="d-flex flex-column flex-sm-row flex-wrap align-items-center gap-2 gap-sm-6 gap-md-9 fw-medium text-primary fs-8 justify-content-center justify-content-sm-start w-100">
                                                        <span>Toplam: 3 Adet</span>
                                                    </div>
                                                    <!--end::Information-->
                                                    <!--begin::Pagination-->
                                                    <ul class="pagination flex-nowrap flex-shrink-0">
                                                        <!--begin::Pagination item previous-->
                                                        <li class="page-item previous disabled"><a href="#" class="page-link pw-min-w-32px h-32px fs-8"><i class="previous"></i></a></li>
                                                        <!--end::Pagination item previous-->

                                                        <!--begin::Pagination-item-->
                                                        <li class="page-item active">
                                                            <a href="/sistem-raporlari/akis-istatistikleri/#" class="page-link pw-min-w-32px h-32px fs-8">1</a>
                                                        </li>
                                                        <!--end::Pagination item-->

                                                        <!--begin::Pagination item-->
                                                        <li class="page-item">
                                                            <a href="/sistem-raporlari/akis-istatistikleri/#" class="page-link pw-min-w-32px h-32px fs-8">2</a>
                                                        </li>
                                                        <!--end::Pagination item-->

                                                        <!--begin::Pagination item-->
                                                        <li class="page-item ">
                                                            <a href="/sistem-raporlari/akis-istatistikleri/#" class="page-link pw-min-w-32px h-32px fs-8">3</a>
                                                        </li>
                                                        <!--end::Pagination item-->

                                                        <!--begin::Pagination item-->
                                                        <li class="page-item ">
                                                            <a href="/sistem-raporlari/akis-istatistikleri/#" class="page-link pw-min-w-32px h-32px fs-8">4</a>
                                                        </li>
                                                        <!--end::Pagination item-->

                                                        <!--begin::Pagination item-->
                                                        <li class="page-item ">
                                                            <a href="/sistem-raporlari/akis-istatistikleri/#" class="page-link pw-min-w-32px h-32px fs-8">5</a>
                                                        </li>
                                                        <!--end::Pagination item-->

                                                        <!--begin::Pagination item-->
                                                        <li class="page-item next">
                                                            <a href="/sistem-raporlari/akis-istatistikleri/#" class="page-link pw-min-w-32px h-32px fs-8"><i class="next"></i></a>
                                                        </li>
                                                        <!--end::Pagination item-->
                                                    </ul>
                                                    <!--end::Pagination-->
                                                </div>
                                                <!--end::Table footer-->
                                            </div>

                                            <div class="tab-pane fade py-5" id="tamalananlar_tab_pane_sohbet" role="tabpanel">

                                            </div>

                                            <div class="tab-pane fade py-5" id="tamalananlar_tab_pane_eklentiler" role="tabpanel">

                                            </div>
                                        </div>
                                        <!--end::Table tab contents-->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="kt_vtab_pane_3" role="tabpanel">
                            <div class="row ps-3">
                                <div class="border pw-border-stroke rounded-3 px-5 py-7">
                                    <div class="row mb-5">
                                        <div class="col-md-8 col-lg-8">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h6 class="text-gray-700 fs-8 me-5">Tamamlananlar</h6>
                                                <div class="w-325px">
                                                    <select class="form-select form-select-solid fs-8 py-4 px-4" data-control="select2" py data-placeholder="" name="">
                                                        <option value="1">Hepsi</option>
                                                        <option value="2">Devam edenler</option>
                                                        <option value="3">Tamamlananlar</option>
                                                        <option value="4">Hatalı Akışlar</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!--begin::İşlerim Table-->
                                    <div class="table-responsive overflow-x-auto rounded">
                                        <table class="table table-row-bordered border pw-dark-bg-table pw-table-border-gray pw-table-border-gray table-rounded align-middle w-max-content min-w-100 gy-2 gx-9 gs-9">
                                            <thead>
                                                <tr class="fw-semibold fs-8 pw-text-neutral-700 pw-bg-neutral-100">
                                                    <th class="py-3"><i class="fa-solid fa-id-card pw-text-primary-300 me-2"></i>Akış Adı</th>
                                                    <th class="py-3">Aktivite Adı</th>
                                                    <th class="py-3">Başlangıç Tarihi</th>
                                                    <th class="py-3">Son İşlem Zamanı </th>
                                                    <th class="py-3">Geçen Süre</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="fw-medium pw-text-neutral-700 fs-9 hover-pw-bg-primary-300">
                                                    <td class="py-3 d-flex">
                                                        <div class="me-2">
                                                            <div class="d-grid align-items-center float-start me-1">
                                                                <i class="fa-solid fa-pen-to-square pw-text-danger-400 fs-10"></i>
                                                                <i class="fa-solid fa-paperclip fs-10"></i>
                                                            </div>
                                                            <i class="fa-solid fa-map-pin px-1 pw-text-primary-300"></i>  
                                                        </div>
                                                        
                                                        IT Talep Süreci - 2023-02-24
                                                    </td>
                                                    <td class="py-3">Talep Değerlendirme</td>
                                                    <td class="py-3">24.02.2023 10:56</td>
                                                    <td class="py-3">24.02.2023 10:56</td>
                                                    <td class="py-3">114 Gün 22 Saat 35 Dakika </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end::İşlerim Table-->

                                    <!--begin::Table footer-->
                                    <div class="d-flex flex-column-reverse flex-sm-row align-items-center align-items-sm-end justify-content-center justify-content-sm-between gap-8 gap-sm-4 my-3">
                                        <!--begin::Information-->
                                        <div class="d-flex flex-column flex-sm-row flex-wrap align-items-center gap-2 gap-sm-6 gap-md-9 fw-medium text-primary fs-8 justify-content-center justify-content-sm-start w-100">
                                            <span>Toplam: 1 Adet</span>
                                        </div>
                                        <!--end::Information-->
                                        <!--begin::Pagination-->
                                        <ul class="pagination flex-nowrap flex-shrink-0">
                                            <!--begin::Pagination item previous-->
                                            <li class="page-item previous disabled"><a href="#" class="page-link pw-min-w-32px h-32px fs-8"><i class="previous"></i></a></li>
                                            <!--end::Pagination item previous-->

                                            <!--begin::Pagination-item-->
                                            <li class="page-item active">
                                                <a href="/sistem-raporlari/akis-istatistikleri/#" class="page-link pw-min-w-32px h-32px fs-8">1</a>
                                            </li>
                                            <!--end::Pagination item-->

                                            <!--begin::Pagination item-->
                                            <li class="page-item">
                                                <a href="/sistem-raporlari/akis-istatistikleri/#" class="page-link pw-min-w-32px h-32px fs-8">2</a>
                                            </li>
                                            <!--end::Pagination item-->

                                            <!--begin::Pagination item-->
                                            <li class="page-item ">
                                                <a href="/sistem-raporlari/akis-istatistikleri/#" class="page-link pw-min-w-32px h-32px fs-8">3</a>
                                            </li>
                                            <!--end::Pagination item-->

                                            <!--begin::Pagination item-->
                                            <li class="page-item ">
                                                <a href="/sistem-raporlari/akis-istatistikleri/#" class="page-link pw-min-w-32px h-32px fs-8">4</a>
                                            </li>
                                            <!--end::Pagination item-->

                                            <!--begin::Pagination item-->
                                            <li class="page-item ">
                                                <a href="/sistem-raporlari/akis-istatistikleri/#" class="page-link pw-min-w-32px h-32px fs-8">5</a>
                                            </li>
                                            <!--end::Pagination item-->

                                            <!--begin::Pagination item-->
                                            <li class="page-item next">
                                                <a href="/sistem-raporlari/akis-istatistikleri/#" class="page-link pw-min-w-32px h-32px fs-8"><i class="next"></i></a>
                                            </li>
                                            <!--end::Pagination item-->
                                        </ul>
                                        <!--end::Pagination-->
                                    </div>
                                    <!--end::Table footer-->
                                </div>
                            </div>

                            <div class="row ps-3 mt-5">
                                <div class="border pw-border-stroke rounded-3 px-5 py-7">
                                    <div class="row">
                                        <!--begin::Table tabs wrapper-->
                                        <div class="table-reponsive overflow-x-auto">
                                            <!--begin::Table tabs-->
                                            <div class="nav nav-tabs nav-line-tabs fs-6" role="tablist">
                                                <!--begin::Tab item-->
                                                <li class="nav-item pe-5" role="presentation">
                                                    <a class="nav-link py-3 px-1 mx-0 fs-8 fw-medium active rounded-0 pw-text-neutral-500" data-bs-toggle="tab" href="#taslaklar_tab_pane_elektronik_form" aria-selected="false" role="tab" tabindex="-1">Elektronik Form</a>
                                                </li>
                                                <!--end::Tab item-->

                                                <!--begin::Tab item-->
                                                <li class="nav-item px-5" role="presentation">
                                                    <a class="nav-link mx-0 py-3 px-1 fs-8 rounded-0 fw-medium" data-bs-toggle="tab" href="#taslaklar_tab_pane_tum_ekentiler" aria-selected="true" role="tab">Eklentiler</a>
                                                </li>
                                                <!--end::Tab item-->
                                            </div>
                                            <!--end::Table tabs-->
                                        </div>
                                        <!--end::Table tabs wrapper-->

                                        <!--begin::Table tab contents-->
                                        <div class="tab-content pw-dashboard-tab-content" id="tableTabContents">
                                            <div class="tab-pane py-5 fade active show" id="taslaklar_tab_pane_elektronik_form" role="tabpanel">
                                                <div class="table-responsive overflow-x-auto rounded">
                                                    <!--begin::Table tabs wrapper-->
                                                    <div class="table-reponsive overflow-x-auto">
                                                        <!--begin::Table tabs-->
                                                        <div class="nav fs-6" role="tablist">
                                                            <!--begin::Tab item-->
                                                            <li class="nav-item" role="presentation">
                                                                <a class="mx-0 px-2 fs-base rounded-0 fw-medium active" data-bs-toggle="tab" href="#taslaklar_tab_pane_flooppy_disk" aria-selected="true" role="tab">
                                                                    <i class="fa-solid fa-floppy-disk pw-text-primary-400 fs-7 text-primary"></i>
                                                                </a>
                                                            </li>
                                                            <!--end::Tab item-->

                                                            <!--begin::Tab item-->
                                                            <li class="nav-item" role="presentation">
                                                                <a class="px-2 mx-0 fs-base fw-medium rounded-0 pw-text-neutral-500" data-bs-toggle="tab" href="#taslaklar_tab_shuffle" aria-selected="false" role="tab" tabindex="-1">
                                                                    <i class="fa-solid fa-play pw-text-primary-400 fs-7 text-primary"></i>
                                                                </a>
                                                            </li>
                                                            <!--end::Tab item-->

                                                            <!--begin::Tab item-->
                                                            <li class="nav-item" role="presentation">
                                                                <a class="px-2 mx-0 fs-base fw-medium rounded-0 pw-text-neutral-500" data-bs-toggle="tab" href="#taslaklar_tab_right_from_line" aria-selected="false" role="tab" tabindex="-1">
                                                                <i class="fa-solid fa-trash pw-text-primary-400 fs-7 text-primary"></i>
                                                                </a>
                                                            </li>
                                                            <!--end::Tab item-->
                                                        </div>
                                                        <!--end::Table tabs-->
                                                    </div>
                                                    <!--end::Table tabs wrapper-->

                                                    <!--begin::Table tab contents-->
                                                    <div class="tab-content pw-dashboard-tab-content mt-5 mb-7" id="tableTabContents">
                                                        <div class="tab-pane fade" id="taslaklar_tab_pane_flooppy_disk" role="tabpanel">
                                                            
                                                        </div>

                                                        <div class="tab-pane fade" id="taslaklar_tab_shuffle" role="tabpanel">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade py-5" id="taslaklar_tab_pane_tarihce" role="tabpanel">

                                            </div>
                                        </div>
                                        <!--end::Table tab contents-->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="kt_vtab_pane_4" role="tabpanel">
                            <div class="row mb-5">
                                <div class="col-md-8 col-lg-4 min-w-325px">
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
                                                <div class="">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="fs-9 text-primary-800">444</span>
                                                        <i class="fa-solid fa-circle-check fs-9 pw-text-primary-300 ps-1"></i>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="fs-9 text-primary-800">06</span>
                                                        <i class="fa-solid fa-loader fs-9 pw-text-primary-300 ps-1"></i>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                
                            </div>

                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <div class="table-responsive overflow-x-auto rounded">
                                        <table class="table table-row-bordered border pw-dark-bg-table pw-table-border-gray pw-table-border-gray table-rounded align-middle w-max-content min-w-100 gy-2 gx-9 gs-9">
                                            <thead>
                                                <tr class="fw-medium fs-9 pw-text-neutral-700">
                                                    <th class="py-3"><i class="me-4"></i>Hepsi</th>
                                                    <th class="py-3">444/06</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="fw-medium pw-text-neutral-700 fs-9 hover-pw-bg-primary-300">
                                                    <td class="py-3"><i class="fa-solid fa-flag pw-text-success-400 fs-9 me-1"></i>Hepsi</td>
                                                    <td class="py-3">444/06</td>
                                                </tr>
                                                <tr class="fw-medium pw-text-neutral-700 fs-9 hover-pw-bg-primary-300">
                                                    <td class="py-3"><i class="fa-solid fa-flag pw-text-success-400 fs-9 me-1"></i>Hepsi</td>
                                                    <td class="py-3">444/06</td>
                                                </tr>
                                                <tr class="fw-medium pw-text-neutral-700 fs-9 hover-pw-bg-primary-300">
                                                    <td class="py-3"><i class="fa-solid fa-flag pw-text-success-400 fs-9 me-1"></i>Hepsi</td>
                                                    <td class="py-3">444/06</td>
                                                </tr>
                                                <tr class="fw-medium pw-text-neutral-700 fs-9 hover-pw-bg-primary-300">
                                                    <td class="py-3"><i class="fa-solid fa-flag pw-text-success-400 fs-9 me-1"></i>Hepsi</td>
                                                    <td class="py-3">444/06</td>
                                                </tr>
                                                <tr class="fw-medium pw-text-neutral-700 fs-9 hover-pw-bg-primary-300">
                                                    <td class="py-3"><i class="fa-solid fa-flag pw-text-success-400 fs-9 me-1"></i>Hepsi</td>
                                                    <td class="py-3">444/06</td>
                                                </tr>
                                                <tr class="fw-medium pw-text-neutral-700 fs-9 hover-pw-bg-primary-300">
                                                    <td class="py-3"><i class="fa-solid fa-flag pw-text-success-400 fs-9 me-1"></i>Hepsi</td>
                                                    <td class="py-3">444/06</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-5">
                                    <div class="table-responsive overflow-x-auto rounded">
                                        <table class="table table-row-bordered border pw-dark-bg-table pw-table-border-gray pw-table-border-gray table-rounded align-middle w-max-content min-w-100 gy-2 gx-9 gs-9">
                                            <thead>
                                                <tr class="fw-medium fs-9 pw-text-neutral-700">
                                                    <th class="py-3"><i class="me-4"></i>Süreç Adı</th>
                                                    <th class="py-3">İş Adımı</th>
                                                    <th class="py-3 border-start"><i class="fa-solid fa-loader pw-text-primary-300"></i></th>
                                                    <th class="py-3 border-start"><i class="fa-solid fa-circle-check pw-text-primary-300"></i></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="fw-medium pw-text-neutral-700 fs-9 hover-pw-bg-primary-300">
                                                    <td class="py-3"><i class="fa-solid fa-flag pw-text-success-400 me-1 fs-9"></i>Süreç Adı</td>
                                                    <td class="py-3">İş Adımı</td>
                                                    <td class="py-3">0</td>
                                                    <td class="py-3">1</td>
                                                </tr>
                                                <tr class="fw-medium pw-text-neutral-700 fs-9 hover-pw-bg-primary-300">
                                                    <td class="py-3"><i class="fa-solid fa-flag pw-text-success-400 me-1 fs-9"></i>Süreç Adı</td>
                                                    <td class="py-3">İş Adımı</td>
                                                    <td class="py-3">0</td>
                                                    <td class="py-3">1</td>
                                                </tr>
                                                <tr class="fw-medium pw-text-neutral-700 fs-9 hover-pw-bg-primary-300">
                                                    <td class="py-3"><i class="fa-solid fa-flag pw-text-success-400 me-1 fs-9"></i>Süreç Adı</td>
                                                    <td class="py-3">İş Adımı</td>
                                                    <td class="py-3">0</td>
                                                    <td class="py-3">1</td>
                                                </tr>
                                                <tr class="fw-medium pw-text-neutral-700 fs-9 hover-pw-bg-primary-300">
                                                    <td class="py-3"><i class="fa-solid fa-flag pw-text-success-400 me-1 fs-9"></i>Süreç Adı</td>
                                                    <td class="py-3">İş Adımı</td>
                                                    <td class="py-3">0</td>
                                                    <td class="py-3">1</td>
                                                </tr>
                                                <tr class="fw-medium pw-text-neutral-700 fs-9 hover-pw-bg-primary-300">
                                                    <td class="py-3"><i class="fa-solid fa-flag pw-text-success-400 me-1 fs-9"></i>Süreç Adı</td>
                                                    <td class="py-3">İş Adımı</td>
                                                    <td class="py-3">0</td>
                                                    <td class="py-3">1</td>
                                                </tr>
                                                <tr class="fw-medium pw-text-neutral-700 fs-9 hover-pw-bg-primary-300">
                                                    <td class="py-3"><i class="fa-solid fa-flag pw-text-success-400 me-1 fs-9"></i>Süreç Adı</td>
                                                    <td class="py-3">İş Adımı</td>
                                                    <td class="py-3">0</td>
                                                    <td class="py-3">1</td>
                                                </tr>
                                                <tr class="fw-medium pw-text-neutral-700 fs-9 hover-pw-bg-primary-300">
                                                    <td class="py-3"><i class="fa-solid fa-flag pw-text-success-400 me-1 fs-9"></i>Süreç Adı</td>
                                                    <td class="py-3">İş Adımı</td>
                                                    <td class="py-3">0</td>
                                                    <td class="py-3">1</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            
                        </div>

                        <div class="tab-pane fade" id="kt_vtab_pane_5" role="tabpanel">

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
    })
</script>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/foot.php'; ?>