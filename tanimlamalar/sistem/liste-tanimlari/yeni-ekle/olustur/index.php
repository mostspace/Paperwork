<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/header.php'; ?>

<!--begin::Wrapper-->
<div class="app-wrapper flex-column flex-row-fluid p-6" id="kt_app_wrapper">

  <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/sidebar.php'; ?>
  <!--begin::Main-->
  <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <!--begin::Content wrapper-->
    <div class="row">
      <div class="col">
        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar mb-10">

          <!--begin::Toolbar container-->
          <div id="kt_app_toolbar_container" class="container-fluid d-flex flex-stack p-0">

            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
              <!--begin::Breadcrumb-->
              <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-9 mt-0 mb-3">
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">
                  <a href="/tanimlamalar" class="text-muted text-hover-primary">Tanımlamalar</a>
                </li>
                <!--end::Item-->

                <!--begin::Item-->
                <li class="breadcrumb-item">
                  <span class="text-muted">/</span>
                </li>
                <!--end::Item-->

                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">
                  <a href="/tanimlamalar/sistem/liste-tanimlari/" class="text-muted text-hover-primary"> Liste Tanımları</a>
                </li>
                <!--end::Item-->

                <!--begin::Item-->
                <li class="breadcrumb-item">
                  <span class="text-muted">/</span>
                </li>
                <!--end::Item-->

                <!--begin::Item-->
                <li class="breadcrumb-item">
                  <a href="/tanimlamalar/sistem/liste-tanimlari/yeni-ekle/" class="text-muted text-hover-primary"> Yeni Liste Ekle</a>
                </li>
                <!--end::Item-->

                <!--begin::Item-->
                <li class="breadcrumb-item">
                  <span class="text-muted">/</span>
                </li>
                <!--end::Item-->

                <!--begin::Item-->
                <li class="breadcrumb-item active"> Veritabanı Oluşturma</li>
                <!--end::Item-->
              </ul>
              <!--end::Breadcrumb-->

              <!--begin::Title-->
              <h1 class="page-heading d-flex text-dark fw-bold fs-4 my-0 gap-2 align-items-center">
                <span>Veritabanı Oluştur
              </h1>
              <!--end::Title-->
            </div>
            <!--end::Page title-->

          </div>
          <!--end::Toolbar container-->
        </div>
        <!--end::Toolbar-->

        <!--begin::Content -->
        <div class="row mb-20">
          <!--begin::Menu col-->
          <div class="col mw-lg-300px pb-5 pe-lg-4 border-lg-bottom-0 border-lg-end pw-border-stroke">
            <!--begin::Search wrapper-->
            <div id="kt_docs_search_handler_basic" class="w-100 mw-300px mb-3" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="true" data-kt-search-layout="inline">

              <!--begin::Input Form-->
              <form data-kt-search-element="form" class="position-relative" autocomplete="off">
                <!--begin::Hidden input(Added to disable form autocomplete)-->
                <input type="hidden">
                <!--end::Hidden input-->

                <!--begin::Icon-->
                <!--begin::Svg Icon | path: magnifier-->
                <div class="position-absolute top-50 translate-middle-y w-100 mw-20px mh-20px ms-2">
                  <i class="fa-solid fa-magnifying-glass fs-4"></i>
                </div>
                <!--end::Icon-->

                <!--begin::Input-->
                <input type="text" class="form-control pw-input-stroke py-2 ps-9 pe-2 fs-8" name="search" value="" placeholder="Ara" data-kt-search-element="input">
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
            
            <!--begin::Menu-->
            <div class="menu menu-rounded menu-column menu-title-gray-700 menu-icon-gray-400 menu-arrow-gray-400 menu-bullet-gray-400 menu-arrow-gray-400 menu-state-bg fw-semibold" data-kt-menu="true" id="pw-seda-menu">
                <!--begin::Menu item-->
                <div class="menu-item menu-sub-indention menu-accordion" data-kt-menu-trigger="click">
                    <!--begin::Menu link-->
                    <a href="javascript:void(0)" class="menu-link ps-0 py-3">
                        <div class="d-flex align-items-center">
                            <span class="menu-arrow"></span>
                            <span class="menu-icon"><i class="fa-solid fa-flag fs-7 me-1"></i></span>
                            <span class="fs-8 fw-bold mb-0 pw-text-gray-800 menu-title">Sistem</span>
                        </div>
                    </a>
                    <!--end::Menu link-->

                    <!--begin::Menu sub-->
                    <div class="menu-sub menu-sub-accordion">
                        <!--begin::Menu item-->
                        <div class="menu-item">
                            <a href="javascript:void(0)" class="menu-link py-3">
                                <div class="d-flex align-items-center">
                                    <span class="menu-arrow"></span>
                                    <div class="form-check d-flex align-items-center mb-0 mx-1 ps-8">
                                        <input class="form-check-input bg-blue" type="checkbox" name="">
                                    </div>
                                    <span class="fs-8 fw-bold mb-0 pw-text-gray-800 menu-title">Akış Adımları</span>
                                </div>
                            </a>
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu item-->
                        <div class="menu-item">
                            <a href="javascript:void(0)" class="menu-link py-3">
                                <div class="d-flex align-items-center">
                                    <span class="menu-arrow"></span>
                                    <div class="form-check d-flex align-items-center mb-0 mx-1 ps-8">
                                        <input class="form-check-input bg-blue" type="checkbox" name="">
                                    </div>
                                    <span class="fs-8 fw-bold mb-0 pw-text-gray-800 menu-title">Akış Detayları</span>
                                </div>
                            </a>
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu item-->
                        <div class="menu-item">
                            <a href="javascript:void(0)" class="menu-link py-3">
                                <div class="d-flex align-items-center">
                                    <span class="menu-arrow"></span>
                                    <div class="form-check d-flex align-items-center mb-0 mx-1 ps-8">
                                        <input class="form-check-input bg-blue" type="checkbox" name="">
                                    </div>
                                    <span class="fs-8 fw-bold mb-0 pw-text-gray-800 menu-title">Akış Notları</span>
                                </div>
                            </a>
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu item-->
                        <div class="menu-item">
                            <a href="javascript:void(0)" class="menu-link py-3">
                                <div class="d-flex align-items-center">
                                    <span class="menu-arrow"></span>
                                    <div class="form-check d-flex align-items-center mb-0 mx-1 ps-8">
                                        <input class="form-check-input bg-blue" type="checkbox" name="">
                                    </div>
                                    <span class="fs-8 fw-bold mb-0 pw-text-gray-800 menu-title">Departmanlar</span>
                                </div>
                            </a>
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu item-->
                        <div class="menu-item">
                            <a href="javascript:void(0)" class="menu-link py-3">
                                <div class="d-flex align-items-center">
                                    <span class="menu-arrow"></span>
                                    <div class="form-check d-flex align-items-center mb-0 mx-1 ps-8">
                                        <input class="form-check-input bg-blue" type="checkbox" name="">
                                    </div>
                                    <span class="fs-8 fw-bold mb-0 pw-text-gray-800 menu-title">Dosya Kartı Belgeleri</span>
                                </div>
                            </a>
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu item-->
                        <div class="menu-item">
                            <a href="javascript:void(0)" class="menu-link py-3">
                                <div class="d-flex align-items-center">
                                    <span class="menu-arrow"></span>
                                    <div class="form-check d-flex align-items-center mb-0 mx-1 ps-8">
                                        <input class="form-check-input bg-blue" type="checkbox" name="">
                                    </div>
                                    <span class="fs-8 fw-bold mb-0 pw-text-gray-800 menu-title">Dosya Kartları</span>
                                </div>
                            </a>
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu item-->
                        <div class="menu-item">
                            <a href="javascript:void(0)" class="menu-link py-3">
                                <div class="d-flex align-items-center">
                                    <span class="menu-arrow"></span>
                                    <div class="form-check d-flex align-items-center mb-0 mx-1 ps-8">
                                        <input class="form-check-input bg-blue" type="checkbox" name="">
                                    </div>
                                    <span class="fs-8 fw-bold mb-0 pw-text-gray-800 menu-title">Formlar</span>
                                </div>
                            </a>
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu item-->
                        <div class="menu-item">
                            <a href="javascript:void(0)" class="menu-link py-3">
                                <div class="d-flex align-items-center">
                                    <span class="menu-arrow"></span>
                                    <div class="form-check d-flex align-items-center mb-0 mx-1 ps-8">
                                        <input class="form-check-input bg-blue" type="checkbox" name="">
                                    </div>
                                    <span class="fs-8 fw-bold mb-0 pw-text-gray-800 menu-title">Gruplar</span>
                                </div>
                            </a>
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu item-->
                        <div class="menu-item">
                            <a href="javascript:void(0)" class="menu-link py-3">
                                <div class="d-flex align-items-center">
                                    <span class="menu-arrow"></span>
                                    <div class="form-check d-flex align-items-center mb-0 mx-1 ps-8">
                                        <input class="form-check-input bg-blue" type="checkbox" name="">
                                    </div>
                                    <span class="fs-8 fw-bold mb-0 pw-text-gray-800 menu-title">İş Akışı Taslakları</span>
                                </div>
                            </a>
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu item-->
                        <div class="menu-item">
                            <a href="javascript:void(0)" class="menu-link py-3">
                                <div class="d-flex align-items-center">
                                    <span class="menu-arrow"></span>
                                    <div class="form-check d-flex align-items-center mb-0 mx-1 ps-8">
                                        <input class="form-check-input bg-blue" type="checkbox" name="">
                                    </div>
                                    <span class="fs-8 fw-bold mb-0 pw-text-gray-800 menu-title">İş Akışları</span>
                                </div>
                            </a>
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu item-->
                        <div class="menu-item">
                            <a href="javascript:void(0)" class="menu-link py-3">
                                <div class="d-flex align-items-center">
                                    <span class="menu-arrow"></span>
                                    <div class="form-check d-flex align-items-center mb-0 mx-1 ps-8">
                                        <input class="form-check-input bg-blue" type="checkbox" name="">
                                    </div>
                                    <span class="fs-8 fw-bold mb-0 pw-text-gray-800 menu-title">Kullanıcılar</span>
                                </div>
                            </a>
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu item-->
                        <div class="menu-item">
                            <a href="javascript:void(0)" class="menu-link py-3">
                                <div class="d-flex align-items-center">
                                    <span class="menu-arrow"></span>
                                    <div class="form-check d-flex align-items-center mb-0 mx-1 ps-8">
                                        <input class="form-check-input bg-blue" type="checkbox" name="">
                                    </div>
                                    <span class="fs-8 fw-bold mb-0 pw-text-gray-800 menu-title">Organizasyon Şemaları</span>
                                </div>
                            </a>
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu item-->
                        <div class="menu-item">
                            <a href="javascript:void(0)" class="menu-link py-3">
                                <div class="d-flex align-items-center">
                                    <span class="menu-arrow"></span>
                                    <div class="form-check d-flex align-items-center mb-0 mx-1 ps-8">
                                        <input class="form-check-input bg-blue" type="checkbox" name="">
                                    </div>
                                    <span class="fs-8 fw-bold mb-0 pw-text-gray-800 menu-title">Pozisyonlar</span>
                                </div>
                            </a>
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu item-->
                        <div class="menu-item">
                            <a href="javascript:void(0)" class="menu-link py-3">
                                <div class="d-flex align-items-center">
                                    <span class="menu-arrow"></span>
                                    <div class="form-check d-flex align-items-center mb-0 mx-1 ps-8">
                                        <input class="form-check-input bg-blue" type="checkbox" name="">
                                    </div>
                                    <span class="fs-8 fw-bold mb-0 pw-text-gray-800 menu-title">Sistem</span>
                                </div>
                            </a>
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu item-->
                        <div class="menu-item">
                            <a href="javascript:void(0)" class="menu-link py-3">
                                <div class="d-flex align-items-center">
                                    <span class="menu-arrow"></span>
                                    <div class="form-check d-flex align-items-center mb-0 mx-1 ps-8">
                                        <input class="form-check-input bg-blue" type="checkbox" name="">
                                    </div>
                                    <span class="fs-8 fw-bold mb-0 pw-text-gray-800 menu-title">Tipler</span>
                                </div>
                            </a>
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu item-->
                        <div class="menu-item">
                            <a href="javascript:void(0)" class="menu-link py-3">
                                <div class="d-flex align-items-center">
                                    <span class="menu-arrow"></span>
                                    <div class="form-check d-flex align-items-center mb-0 mx-1 ps-8">
                                        <input class="form-check-input bg-blue" type="checkbox" name="">
                                    </div>
                                    <span class="fs-8 fw-bold mb-0 pw-text-gray-800 menu-title">Yetki Setleri</span>
                                </div>
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
                    <a href="javascript:void(0)" class="menu-link ps-0 py-3">
                        <div class="d-flex align-items-center">
                            <span class="menu-arrow"></span>
                            <span class="menu-icon"><i class="fa-solid fa-list fs-7 me-1"></i></span>
                            <span class="fs-8 fw-bold mb-0 pw-text-gray-800 menu-title">Listeler</span>
                        </div>
                    </a>
                    <!--end::Menu link-->

                    <!--begin::Menu sub-->
                    <div class="menu-sub menu-sub-accordion">
                        <!--begin::Menu item-->
                        <div class="menu-item">
                            <a href="javascript:void(0)" class="menu-link py-3">
                                <div class="d-flex align-items-center">
                                    <span class="menu-arrow"></span>
                                    <div class="form-check d-flex align-items-center mb-0 mx-1 ps-8">
                                        <input class="form-check-input bg-blue" type="checkbox" name="">
                                    </div>
                                    <span class="fs-8 fw-bold mb-0 pw-text-gray-800 menu-title">Akış Adımları</span>
                                </div>
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
                    <a href="javascript:void(0)" class="menu-link ps-0 py-3">
                        <div class="d-flex align-items-center">
                            <span class="menu-arrow"></span>
                            <span class="menu-icon"><i class="fa-solid fa-window-restore fs-7 me-1"></i></span>
                            <span class="fs-8 fw-bold mb-0 pw-text-gray-800 menu-title">Tipler (Arşiv)</span>
                        </div>
                    </a>
                    <!--end::Menu link-->

                    <!--begin::Menu sub-->
                    <div class="menu-sub menu-sub-accordion">
                        <!--begin::Menu item-->
                        <div class="menu-item">
                            <a href="javascript:void(0)" class="menu-link py-3">
                                <div class="d-flex align-items-center">
                                    <span class="menu-arrow"></span>
                                    <div class="form-check d-flex align-items-center mb-0 mx-1 ps-8">
                                        <input class="form-check-input bg-blue" type="checkbox" name="">
                                    </div>
                                    <span class="fs-8 fw-bold mb-0 pw-text-gray-800 menu-title">Akış Adımları</span>
                                </div>
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
                    <a href="javascript:void(0)" class="menu-link ps-0 py-3">
                        <div class="d-flex align-items-center">
                            <span class="menu-arrow"></span>
                            <span class="menu-icon"><i class="fa-solid fa-window-restore fs-7 me-1"></i></span>
                            <span class="fs-8 fw-bold mb-0 pw-text-gray-800 menu-title">Tipler (Dosya Kartı)</span>
                        </div>
                    </a>
                    <!--end::Menu link-->

                    <!--begin::Menu sub-->
                    <div class="menu-sub menu-sub-accordion">
                        <!--begin::Menu item-->
                        <div class="menu-item">
                            <a href="javascript:void(0)" class="menu-link py-3">
                                <div class="d-flex align-items-center">
                                    <span class="menu-arrow"></span>
                                    <div class="form-check d-flex align-items-center mb-0 mx-1 ps-8">
                                        <input class="form-check-input bg-blue" type="checkbox" name="">
                                    </div>
                                    <span class="fs-8 fw-bold mb-0 pw-text-gray-800 menu-title">Akış Adımları</span>
                                </div>
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
                    <a href="javascript:void(0)" class="menu-link ps-0 py-3">
                        <div class="d-flex align-items-center">
                            <span class="menu-arrow"></span>
                            <span class="menu-icon"><i class="fa-solid fa-window-restore fs-7 me-1"></i></span>
                            <span class="fs-8 fw-bold mb-0 pw-text-gray-800 menu-title">Tipler (Arşiv)</span>
                        </div>
                    </a>
                    <!--end::Menu link-->

                    <!--begin::Menu sub-->
                    <div class="menu-sub menu-sub-accordion">
                        <!--begin::Menu item-->
                        <div class="menu-item">
                            <a href="javascript:void(0)" class="menu-link py-3">
                                <div class="d-flex align-items-center">
                                    <span class="menu-arrow"></span>
                                    <div class="form-check d-flex align-items-center mb-0 mx-1 ps-8">
                                        <input class="form-check-input bg-blue" type="checkbox" name="">
                                    </div>
                                    <span class="fs-8 fw-bold mb-0 pw-text-gray-800 menu-title">Akış Adımları</span>
                                </div>
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
          <!--end::Menu col-->

          <!--begin::Content col-->
          <div class="col pt-5 pt-lg-0 px-0">
            <!--begin::Form wrapper-->
            <div class="col-12 col-lg-12">
                <div class="table-reponsive overflow-x-auto mt-4 position-relative">
                    <!--begin::Tabs-->
                    <div class="nav nav-tabs nav-line-tabs fs-6" role="tablist">
                        <!--begin::Tab item-->
                        <li class="nav-item px-3" role="presentation">
                            <a class="nav-link mx-0 py-3 px-5 fs-base rounded-0 fw-medium active" data-bs-toggle="tab" href="#pw_tab_pane_tasarim" aria-selected="true" role="tab">Tasarım </a>
                        </li>
                        <!--end::Tab item-->

                        <!--begin::Tab item-->
                        <li class="nav-item px-3" role="presentation">
                            <a class="nav-link mx-0 py-3 px-5 fs-base rounded-0 fw-medium" data-bs-toggle="tab" href="#pw_tab_pane_sql" aria-selected="true" role="tab">SQL</a>
                        </li>
                        <!--end::Tab item-->
                    </div>
                    <!--end::Tabs-->

                    <div class="position-absolute top-0 end-0 mt-1 me-5">
                        <button class="fs-7 bg-transparent border-0 text-primary me-2">
                            <div class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5 me-2 my-1"><i class="fa-solid fa-play fs-6 text-primary"></i></div>
                            Çalıştır
                        </button>
                        <button class="fs-7 bg-transparent border-0 text-primary">
                            <div class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5 me-2 my-1"><i class="fa-solid fa-floppy-disk fs-6 text-primary"></i></div>
                            Kaydet
                        </button>
                    </div>
                </div>
                <!--end::Tabs wrapper-->

                <!--begin::Tab contents-->
                <div class="tab-content pw-dashboard-tab-content mt-6" id="tableTabContents">
                    <!--begin::Tasarim content-->
                    <div class="tab-pane fade active show" id="pw_tab_pane_tasarim" role="tabpanel">
                        <div class="px-5">
                            <div class="border pw-border-stroke rounded-2 w-100 my-5">
                                <div class="border-bottom d-flex align-items-center p-3">
                                    <h6 class="border-end pw-border-stroke my-0 me-5 pe-5 py-1 ms-3 fs-5">Kolonlar</h6>
                                    
                                    <button class="btn btn-primary h-30px w-30px d-flex align-items-center justify-content-center p-2" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" data-kt-menu-offset="0,5"><i class="fa-solid fa-plus fs-9 p-0"></i></button>
                                    <!--begin::dropdown-->
                                    <div class="menu menu-sub menu-sub-dropdown w-275px" data-kt-menu="true">
                                        <div class="d-flex flex-column">
                                            <!--begin::Item-->
                                            <a href="javascript:void(0);" class="btn btn-active-light-secondary pw-text-neutral-800 fw-semibold fs-8 text-start py-3 px-4 rounded-0">Kullanıcı Akış Adımları </a>
                                            <!--end::Item-->

                                            <!--begin::Item-->
                                            <a href="javascript:void(0);" class="btn btn-active-light-secondary d-flex align-items-center justify-content-between pw-text-neutral-800 fw-semibold fs-8 text-start py-3 px-4 rounded-0" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start" data-kt-menu-offset="0,5">
                                                Kullanıcılar
                                                <i class="fa-solid fa-angle-right fs-8 text-gray-900"></i>
                                            </a>
                                            <!--begin::dropdown-->
                                            <div class="menu menu-sub menu-sub-dropdown w-275px ms-n2" data-kt-menu="true">
                                                <div class="d-flex flex-column">
                                                    <!--begin::Item-->
                                                    <a href="javascript:void(0);" class="btn btn-active-light-secondary pw-text-neutral-800 fw-semibold fs-8 text-start py-3 px-4 rounded-0">Dahili</a>
                                                    <!--end::Item-->

                                                    <!--begin::Item-->
                                                    <a href="javascript:void(0);" class="btn btn-active-light-secondary pw-text-neutral-800 fw-semibold fs-8 text-start py-3 px-4 rounded-0">E-Posta</a>
                                                    <!--end::Item-->

                                                    <!--begin::Item-->
                                                    <a href="javascript:void(0);" class="btn btn-active-light-secondary pw-text-neutral-800 fw-semibold fs-8 text-start py-3 px-4 rounded-0">Giriş Adı</a>
                                                    <!--end::Item-->

                                                    <!--begin::Item-->
                                                    <a href="javascript:void(0);" class="btn btn-active-light-secondary pw-text-neutral-800 fw-semibold fs-8 text-start py-3 px-4 rounded-0">Kullanıcı Adı</a>
                                                    <!--end::Item-->

                                                    <!--begin::Item-->
                                                    <a href="javascript:void(0);" class="btn btn-active-light-secondary pw-text-neutral-800 fw-semibold fs-8 text-start py-3 px-4 rounded-0">Sicil No</a>
                                                    <!--end::Item-->
                                                </div>
                                            </div>
                                            <!--end::dropdown-->

                                            <!--end::Item-->
                                        </div>
                                    </div>
                                    <!--end::dropdown-->
                                </div>
                                <div class="row p-5">
                                    <div class="d-flex align-items-center">
                                        <button class="bg-transparent border-0 me-2"><i class="fa-solid fa-grip-dots-vertical fs-2"></i></button>
                                        <button class="px-6 py-2 fs-8 border pw-border-stroke pw-bg-neutral-100 rounded-2 me-2">Kullanıcılar.E-posta</button>
                                        <button class="px-2 py-2 fs-8 border border-primary-subtle pw-bg-primary-200 rounded-2 me-2 d-flex align-items-center">
                                            <a class="rounded-1 w-20px h-20px pw-bg-primary-800 p-2 d-flex align-items-center justify-content-center me-2" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" data-kt-menu-offset="0,5"><i class="fa-solid fa-sort fs-9 text-white"></i></a>
                                            <!--begin::dropdown-->
                                            <div class="menu menu-sub menu-sub-dropdown w-200px mt-2" data-kt-menu="true">
                                                <div class="d-flex flex-column">
                                                    <!--begin::Item-->
                                                    <a href="javascript:void(0);" class="btn btn-active-light-secondary pw-text-neutral-800 fw-semibold fs-8 text-start py-2 px-4 rounded-0">Sıralama yok</a>
                                                    <!--end::Item-->

                                                    <!--begin::Item-->
                                                    <a href="javascript:void(0);" class="btn btn-active-light-secondary pw-text-neutral-800 fw-semibold fs-8 text-start py-2 px-4 rounded-0">Artan</a>
                                                    <!--end::Item-->

                                                    <!--begin::Item-->
                                                    <a href="javascript:void(0);" class="btn btn-active-light-secondary pw-text-neutral-800 fw-semibold fs-8 text-start py-2 px-4 rounded-0">Azalan</a>
                                                    <!--end::Item-->

                                                    <!--begin::Item-->
                                                    <a href="javascript:void(0);" class="btn btn-active-light-secondary pw-text-neutral-800 fw-semibold fs-8 text-start py-2 px-4 rounded-0">Tepeye kaydır</a>
                                                    <!--end::Item-->

                                                    <!--begin::Item-->
                                                    <a href="javascript:void(0);" class="btn btn-active-light-secondary pw-text-neutral-800 fw-semibold fs-8 text-start py-2 px-4 rounded-0">Yukarı kaydır</a>
                                                    <!--end::Item-->

                                                    <!--begin::Item-->
                                                    <a href="javascript:void(0);" class="btn btn-active-light-secondary pw-text-neutral-800 fw-semibold fs-8 text-start py-2 px-4 rounded-0">Aşağı kaydır</a>
                                                    <!--end::Item-->

                                                    <!--begin::Item-->
                                                    <a href="javascript:void(0);" class="btn btn-active-light-secondary pw-text-neutral-800 fw-semibold fs-8 text-start py-2 px-4 rounded-0">Aşağı taşı</a>
                                                    <!--end::Item-->
                                                </div>
                                            </div>
                                            <!--end::dropdown-->
                                            Kullanıcılar.E-posta
                                            <a class="rounded-1 w-20px h-20px pw-bg-primary-800 p-2 d-flex align-items-center justify-content-center mx-2"><i class="fa-solid fa-florin-sign fs-9 text-white"></i></a>
                                            <a class="rounded-1 w-20px h-20px bg-danger p-2 d-flex align-items-center justify-content-center"><i class="fa-solid fa-xmark fs-9 text-white"></i></a>
                                        </button>
                                        <button class="btn btn-outline btn-outline-primary px-6 py-2 fs-8 text-gray-900">Kullanıcılar.E-posta</button>
                                    </div>
                                    <div class="w-100 h-200px"></div>
                                </div>
                            </div>

                            <div class="border pw-border-stroke rounded-2 w-100 my-5">
                                <div class="border-bottom d-flex align-items-center p-3">
                                    <h6 class="border-end pw-border-stroke my-0 me-5 pe-5 py-1 ms-3 fs-5">Kriterler</h6>
                                    <button class="btn btn-primary h-30px w-30px d-flex align-items-center justify-content-center p-2 me-2"><i class="fa-solid fa-plus fs-9 p-0"></i></button>
                                    <button class="btn btn-primary h-30px w-30px d-flex align-items-center justify-content-center p-2 fs-8 me-2">&#123; &#125;</button>
                                    <button class="btn fs-8 p-0 px-2 text-primary text-decoration-underline" type="button" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" data-kt-menu-offset="0,5">Tümü<i class="fa-solid fa-angle-down text-primary fs-9 p-0 ms-2"></i></button>
                                    <!--begin::dropdown-->
                                    <div class="menu menu-sub menu-sub-dropdown w-200px mt-2" data-kt-menu="true">
                                        <div class="d-flex flex-column">
                                            <!--begin::Item-->
                                            <a href="javascript:void(0);" class="btn btn-active-light-secondary pw-text-neutral-800 fw-semibold fs-8 text-start py-2 px-4 rounded-0">Tümü</a>
                                            <!--end::Item-->

                                            <!--begin::Item-->
                                            <a href="javascript:void(0);" class="btn btn-active-light-secondary pw-text-neutral-800 fw-semibold fs-8 text-start py-2 px-4 rounded-0">Herhangi Biri</a>
                                            <!--end::Item-->

                                            <!--begin::Item-->
                                            <a href="javascript:void(0);" class="btn btn-active-light-secondary pw-text-neutral-800 fw-semibold fs-8 text-start py-2 px-4 rounded-0">Hiçbiri</a>
                                            <!--end::Item-->

                                            <!--begin::Item-->
                                            <a href="javascript:void(0);" class="btn btn-active-light-secondary pw-text-neutral-800 fw-semibold fs-8 text-start py-2 px-4 rounded-0">Hariç</a>
                                            <!--end::Item-->
                                        </div>
                                    </div>
                                    <!--end::dropdown-->
                                </div>
                                <div class="row p-5">
                                    <div class="d-flex align-items-center mb-5">
                                        <button class="btn fs-8 p-0 px-2 pw-text-primary-600 text-decoration-underline me-3" type="button">Kullanıcı Akış Adımları - Derleme No<i class="fa-solid fa-angle-down pw-text-primary-600 fs-9 p-0 ms-2"></i></button>
                                        <button class="btn fs-8 p-0 px-2 pw-text-warning-300 text-decoration-underline me-3" type="button" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" data-kt-menu-offset="0,5">ile başlayan<i class="fa-solid fa-angle-down pw-text-warning-300 fs-9 p-0 ms-2"></i></button>
                                        <!--begin::dropdown-->
                                        <div class="menu menu-sub menu-sub-dropdown w-200px" data-kt-menu="true">
                                            <div class="d-flex flex-column">
                                                <!--begin::Item-->
                                                <a href="javascript:void(0);" class="btn btn-active-light-secondary pw-text-neutral-800 fw-semibold fs-8 text-start py-2 px-4 rounded-0">İle başlayan</a>
                                                <!--end::Item-->

                                                <!--begin::Item-->
                                                <a href="javascript:void(0);" class="btn btn-active-light-secondary pw-text-neutral-800 fw-semibold fs-8 text-start py-2 px-4 rounded-0">İçeren</a>
                                                <!--end::Item-->

                                                <!--begin::Item-->
                                                <a href="javascript:void(0);" class="btn btn-active-light-secondary pw-text-neutral-800 fw-semibold fs-8 text-start py-2 px-4 rounded-0 border-bottom">Eşit</a>
                                                <!--end::Item-->

                                                <!--begin::Item-->
                                                <a href="javascript:void(0);" class="btn btn-active-light-secondary pw-text-neutral-800 fw-semibold fs-8 text-start py-2 px-4 rounded-0">İle Başlayan</a>
                                                <!--end::Item-->

                                                <!--begin::Item-->
                                                <a href="javascript:void(0);" class="btn btn-active-light-secondary pw-text-neutral-800 fw-semibold fs-8 text-start py-2 px-4 rounded-0">İçermeyen</a>
                                                <!--end::Item-->

                                                <!--begin::Item-->
                                                <a href="javascript:void(0);" class="btn btn-active-light-secondary pw-text-neutral-800 fw-semibold fs-8 text-start py-2 px-4 rounded-0">Eşit değil</a>
                                                <!--end::Item-->

                                                <!--begin::Item-->
                                                <a href="javascript:void(0);" class="btn btn-active-light-secondary pw-text-neutral-800 fw-semibold fs-8 text-start py-2 px-4 rounded-0">Null olan</a>
                                                <!--end::Item-->

                                                <!--begin::Item-->
                                                <a href="javascript:void(0);" class="btn btn-active-light-secondary pw-text-neutral-800 fw-semibold fs-8 text-start py-2 px-4 rounded-0">Null olmayan</a>
                                                <!--end::Item-->

                                                <!--begin::Item-->
                                                <a href="javascript:void(0);" class="btn btn-active-light-secondary pw-text-neutral-800 fw-semibold fs-8 text-start py-2 px-4 rounded-0">Listeye bağla</a>
                                                <!--end::Item-->
                                            </div>
                                        </div>
                                        <!--end::dropdown-->
                                        <button class="btn fs-8 p-0 px-2 pw-text-neutral-400 text-decoration-underline me-3" type="button">[Değer Giriniz]</button>
                                    </div>
                                    <div class="d-flex align-items-center mb-5">
                                        <button class="btn fs-8 p-0 px-2 pw-text-primary-600 me-3" type="button"><i class="fa-solid fa-bars fs-7 pe-2"></i><span class="pw-text-neutral-900 mx-2">Ve</span><span class="text-decoration-underline">Kullanıcılar E-Posta</span><i class="fa-solid fa-angle-down pw-text-primary-600 fs-9 p-0 ms-2"></i></button>
                                        <button class="btn fs-8 p-0 px-2 pw-text-warning-300 text-decoration-underline me-3" type="button">ile başlayan<i class="fa-solid fa-angle-down pw-text-warning-300 fs-9 p-0 ms-2"></i></button>
                                        <button class="btn fs-8 p-0 px-2 pw-text-neutral-400 text-decoration-underline me-3" type="button">[Değer Giriniz]</button>
                                    </div>
                                    <div class="d-flex align-items-center mb-5">
                                        <button class="btn fs-8 p-0 px-2 pw-text-primary-600 me-3" type="button"><span class="pw-text-neutral-900 mx-2">Ve</span><span class="text-decoration-underline">Kullanıcılar Giriş Adı</span><i class="fa-solid fa-angle-down pw-text-primary-600 fs-9 p-0 ms-2"></i></button>
                                        <button class="btn fs-8 p-0 px-2 pw-text-warning-300 text-decoration-underline me-3" type="button">ile başlayan<i class="fa-solid fa-angle-down pw-text-warning-300 fs-9 p-0 ms-2"></i></button>
                                        <button class="btn fs-8 p-0 px-2 pw-text-neutral-400 text-decoration-underline me-3" type="button">[Değer Giriniz]</button>
                                    </div>
                                    <div class="d-flex align-items-center mb-5">
                                        <button class="btn fs-8 p-0 px-2 pw-text-primary-600 me-3" type="button"><span class="pw-text-neutral-900 mx-2">Ve</span><span class="text-decoration-underline">Kullanıcı Akış Adımları - Form Adı</span><i class="fa-solid fa-angle-down pw-text-primary-600 fs-9 p-0 ms-2"></i></button>
                                        <button class="btn fs-8 p-0 px-2 pw-text-warning-300 text-decoration-underline me-3" type="button">ile başlayan<i class="fa-solid fa-angle-down pw-text-warning-300 fs-9 p-0 ms-2"></i></button>
                                        <button class="btn fs-8 p-0 px-2 pw-text-neutral-400 text-decoration-underline me-3" type="button">[Değer Giriniz]</button>
                                    </div>
                                    <div class="d-flex align-items-center mb-5">
                                        <div class="d-flex align-items-center">
                                            <button class="btn pw-bg-neutral-200 btn-active-primary w-30px h-30px p-0 me-1"><i class="fa-solid fa-plus fs-8 p-0 text-white"></i></button>
                                            <button class="btn pw-bg-neutral-200 btn-active-primary w-30px h-30px p-0 fs-8 text-white me-1">&#123; &#125;</button>
                                            <button class="btn pw-bg-neutral-200 btn-active-primary w-30px h-30px p-0 me-1"><i class="fa-solid fa-circle fs-8 p-0 text-white"></i></button>
                                            <button class="btn pw-bg-neutral-200 btn-active-primary w-30px h-30px p-0"><i class="fa-solid fa-xmark fs-8 p-0 text-white"></i></button>
                                        </div>
                                        <button class="btn fs-8 p-0 px-2 pw-text-primary-600 me-3" type="button"><span class="pw-text-neutral-900 mx-2">Ve</span><span class="text-decoration-underline">Herhangi biri</span><i class="fa-solid fa-angle-down pw-text-primary-600 fs-9 p-0 ms-2"></i></button>
                                        <button class="btn fs-8 p-0 px-2" type="button">takiben uygulananlar</button>
                                    </div>
                                    <div class="d-flex align-items-center mb-5 ps-20">
                                        <button class="btn fs-8 p-0 px-2 pw-text-primary-600 me-3 ms-20" type="button"><span class="text-decoration-underline">Kullanıcı Akış Adımları - Form Adı</span><i class="fa-solid fa-angle-down pw-text-primary-600 fs-9 p-0 ms-2"></i></button>
                                        <button class="btn fs-8 p-0 px-2 pw-text-warning-300 text-decoration-underline me-3" type="button">ile başlayan<i class="fa-solid fa-angle-down pw-text-warning-300 fs-9 p-0 ms-2"></i></button>
                                        <button class="btn fs-8 p-0 px-2 pw-text-neutral-400 text-decoration-underline me-3" type="button">[Değer Giriniz]</button>
                                    </div>
                                    <div class="w-100 py-3">
                                        <button class="btn text-primary fs-8 px-2"><i class="fa-solid fa-plus fs-7 pe-2 text-primary"></i>Kriter ekle</button>
                                    </div>
                                </div>
                            </div>

                            <div class="border pw-border-stroke rounded-2 w-100 my-5">
                                <div class="border-bottom d-flex align-items-center p-3">
                                    <h6 class="pw-border-stroke my-0 py-1 ms-3 fs-5">Bağlantılar</h6>
                                </div>
                                <div class="row p-5">
                                    <div class="d-flex align-items-center">
                                        <div class="me-7">
                                            <button class="btn pw-bg-neutral-100 fs-8 w-275px py-3 px-2" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" data-kt-menu-offset="0,5">Kullanıcı Akış Adımları.Derleme No<i class="fa-solid fa-angle-down text-gray-700 fs-9 p-0 ms-2"></i></button>
                                            <!--begin::dropdown-->
                                            <div class="menu menu-sub menu-sub-dropdown w-275px" data-kt-menu="true">
                                                <div class="d-flex flex-column">
                                                    <!--begin::Item-->
                                                    <a href="javascript:void(0);" class="btn btn-active-light-secondary pw-text-neutral-800 fw-semibold fs-8 text-start py-3 px-4 rounded-0">Derleme No</a>
                                                    <!--end::Item-->

                                                    <!--begin::Item-->
                                                    <a href="javascript:void(0);" class="btn btn-active-light-secondary pw-text-neutral-800 fw-semibold fs-8 text-start py-3 px-4 rounded-0">Form Adı</a>
                                                    <!--end::Item-->
                                                </div>
                                            </div>
                                            <!--end::dropdown-->
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <label for="kullanicilarGirisAdi" class="fs-8 me-7">LEFT</label>
                                            <button id="kullanicilarGirisAdi" class="btn pw-bg-neutral-100 fs-8 w-275px py-3 px-2 d-flex align-items-center justify-content-between" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" data-kt-menu-offset="0,5">Kullanıcılar.Giriş Adı<i class="fa-solid fa-angle-down text-gray-700 fs-9 p-0 me-2"></i></button>
                                            <!--begin::dropdown-->
                                            <div class="menu menu-sub menu-sub-dropdown w-275px" data-kt-menu="true">
                                                <div class="d-flex flex-column">
                                                    <!--begin::Item-->
                                                    <a href="javascript:void(0);" class="btn btn-active-light-secondary pw-text-neutral-800 fw-semibold fs-8 text-start py-3 px-4 rounded-0">E-Posta</a>
                                                    <!--end::Item-->

                                                    <!--begin::Item-->
                                                    <a href="javascript:void(0);" class="btn btn-active-light-secondary pw-text-neutral-800 fw-semibold fs-8 text-start py-3 px-4 rounded-0">Giriş Adı</a>
                                                    <!--end::Item-->

                                                    <!--begin::Item-->
                                                    <a href="javascript:void(0);" class="btn btn-active-light-secondary pw-text-neutral-800 fw-semibold fs-8 text-start py-3 px-4 rounded-0">Kullanıcı Adı</a>
                                                    <!--end::Item-->

                                                    <!--begin::Item-->
                                                    <a href="javascript:void(0);" class="btn btn-active-light-secondary pw-text-neutral-800 fw-semibold fs-8 text-start py-3 px-4 rounded-0">Sicil No</a>
                                                    <!--end::Item-->
                                                </div>
                                            </div>
                                            <!--end::dropdown-->
                                        </div>
                                        
                                    </div>
                                    <div class="w-100 h-200px py-3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Tasarim content-->

                    <!--begin::Sql content-->
                    <div class="tab-pane fade" id="pw_tab_pane_sql" role="tabpanel">
                        <div class="row px-5">
                            <div class="col-md-12">
                                <h6 class="fs-7 text-primary mb-3">Editor<i class="fa-solid fa-angles-down ms-2 text-primary"></i></h6>
                                <div class="border rounded-2 p-3">
                                    <div class="row">
                                        <!--begin::Card actions-->
                                        <div class="d-flex align-items-start gap-3">
                                            <!--begin::Item-->
                                            <button type="button" class="btn p-0 btn-icon-gray-400 btn-active-icon-primary">
                                            <i class="fa-solid fa-floppy-disk fs-7"></i>
                                            </button>
                                            <!--end::Item-->

                                            <!--begin::Item-->
                                            <button type="button" class="btn p-0 btn-icon-gray-400 btn-active-icon-primary">
                                            <i class="fa-solid fa-message fs-7"></i>
                                            </button>
                                            <!--end::Item-->

                                            <!--begin::Item-->
                                            <button type="button" class="btn p-0 btn-icon-gray-400 btn-active-icon-primary">
                                            <i class="fa-solid fa-message-xmark fs-7"></i>
                                            </button>
                                            <!--end::Item-->

                                            <!--begin::Item-->
                                            <button type="button" class="btn p-0 btn-icon-gray-400 btn-active-icon-primary">
                                            <i class="fa-solid fa-font-case fs-7"></i>
                                            </button>
                                            <!--end::Item-->

                                            <!--begin::Item-->
                                            <button type="button" class="btn p-0 btn-icon-gray-400 btn-active-icon-primary">
                                            <i class="fs-7">aA</i>
                                            </button>
                                            <!--end::Item-->

                                            <!--begin::Item-->
                                            <button type="button" class="btn p-0 btn-icon-gray-400 btn-active-icon-primary">
                                            <i class="fa-solid fa-a fs-7"></i>
                                            </button>
                                            <!--end::Item-->

                                            <!--begin::Item-->
                                            <button type="button" class="btn p-0 btn-icon-gray-400 btn-active-icon-primary">
                                            <i class="fa-solid fa-magnifying-glass-minus fs-7"></i>
                                            </button>
                                            <!--end::Item-->

                                            <!--begin::Item-->
                                            <button type="button" class="btn p-0 btn-icon-gray-400 btn-active-icon-primary">
                                            <i class="fa-solid fa-magnifying-glass-plus fs-7"></i>
                                            </button>
                                            <!--end::Item-->

                                            <!--begin::Item-->
                                            <button type="button" class="btn p-0 btn-icon-gray-400 btn-active-icon-primary">
                                            <i class="fa-light fa-outdent fs-7"></i>
                                            </button>
                                            <!--end::Item-->

                                            <!--begin::Item-->
                                            <button type="button" class="btn p-0 btn-icon-gray-400 btn-active-icon-primary">
                                            <i class="fa-light fa-indent fs-7"></i>
                                            </button>
                                            <!--end::Item-->

                                            <!--begin::Item-->
                                            <button type="button" class="btn p-0 btn-icon-gray-400 btn-active-icon-primary">
                                            <i class="fa-solid fa-binoculars fs-7"></i>
                                            </button>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Card actions-->
                                    </div>

                                    <div class="row">
                                        <textarea class="form-control py-3 px-2 fs-8 border-0" name="" id="" cols="30" rows="5"></textarea>
                                    </div>
                                </div>
                                <h6 class="fs-7 text-primary my-3 mt-4">Sonuç<i class="fa-solid fa-angles-down ms-2 text-primary"></i></h6>
                                <div class="row">
                                    <!--begin::Yetki Setleri Detay tablosu-->
                                    <div class="table-responsive overflow-x-auto rounded py-2">
                                        <table class="table table-row-bordered border pw-table-border-gray table-rounded align-middle w-max-content min-w-100 gy-2 gx-9 gs-9">
                                            <thead>
                                                <tr class="fw-semibold fs-8 pw-text-neutral-700 pw-bg-neutral-100">
                                                    <th class="py-3 col-md-4 border-end">
                                                        <div class="d-flex align-items-center justify-content-between gap-3 flex-nowrap">
                                                            <span>ID</span>
                                                            <a href="javascript:void(0);" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" data-kt-menu-offset="0,5"><span><i class="fa-solid fa-filter"></i></span></a>
                                                            <!--begin::dropdown-->
                                                            <div class="menu menu-sub menu-sub-dropdown w-225px" data-kt-menu="true">
                                                                <div class="d-flex flex-column p-3">
                                                                    <h6 class="fs-8 my-2">Tanıma uyan kayıtları göster:</h6>
                                                                    <!--begin::Item-->
                                                                    <select id="" class="form-select form-select-solid fs-8 py-3 px-4 mb-2" data-control="select2">
                                                                        <option value="1">Eşit</option>
                                                                        <option value="2">Option 2</option>
                                                                    </select>
                                                                    <!--end::Item-->

                                                                    <!--begin::Item-->
                                                                    <input type="text" class="form-control fs-8 mb-2">
                                                                    <!--end::Item-->

                                                                    <!--begin::Item-->
                                                                    <select id="" class="form-select form-select-solid fs-8 py-3 px-4 mb-2" data-control="select2">
                                                                        <option value="1">Ve</option>
                                                                        <option value="2">Option 2</option>
                                                                    </select>
                                                                    <!--end::Item-->

                                                                    <!--begin::Item-->
                                                                    <select id="" class="form-select form-select-solid fs-8 py-3 px-4 mb-2" data-control="select2">
                                                                        <option value="1">Eşit</option>
                                                                        <option value="2">Option 2</option>
                                                                    </select>
                                                                    <!--end::Item-->

                                                                    <!--begin::Item-->
                                                                    <input type="text" class="form-control fs-8 mb-2">
                                                                    <!--end::Item-->

                                                                    <!--begin::Item-->
                                                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                                                        <button class="btn btn-outline btn-outline-secondary px-3 py-2 fs-8 text-gray-600">Temizle</button>
                                                                        <button class="btn btn-primary px-3 py-2 fs-8">Filtrele</button>
                                                                    </div>
                                                                    <!--end::Item-->

                                                                   
                                                                </div>
                                                            </div>
                                                            <!--end::dropdown-->
                                                        </div>
                                                    </th>
                                                    <th class="py-3 col-md-4 border-end">
                                                        <div class="d-flex align-items-center justify-content-between gap-3 flex-nowrap">
                                                            <span>Kullanıcı Akış Adımları.Form Adı</span>
                                                            <span><i class="fa-solid fa-filter"></i></span>
                                                        </div>
                                                    </th>
                                                    <th class="py-3 col-md-4">
                                                        <div class="d-flex align-items-center justify-content-between gap-3 flex-nowrap">
                                                            <span>Kullanıcılar.E-Posta</span>
                                                            <span><i class="fa-solid fa-filter"></i></span>
                                                        </div>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!--begin::Row-->
                                                <tr class="fw-medium pw-text-neutral-700 fs-8">
                                                    <td class="px-9 py-6"></td>
                                                    <td class="px-9 py-6"></td>
                                                    <td class="px-9 py-6"></td>
                                                </tr>
                                                <!--end::Row-->
                                                
                                                <!--begin::Row-->
                                                <tr class="fw-medium pw-text-neutral-700 fs-8">
                                                    <td class="px-9 py-6"></td>
                                                    <td class="px-9 py-6"></td>
                                                    <td class="px-9 py-6"></td>
                                                </tr>
                                                <!--end::Row-->

                                                <!--begin::Row-->
                                                <tr class="fw-medium pw-text-neutral-700 fs-8">
                                                    <td class="px-9 py-6"></td>
                                                    <td class="px-9 py-6"></td>
                                                    <td class="px-9 py-6"></td>
                                                </tr>
                                                <!--end::Row-->

                                                <!--begin::Row-->
                                                <tr class="fw-medium pw-text-neutral-700 fs-8">
                                                    <td class="px-9 py-6"></td>
                                                    <td class="px-9 py-6"></td>
                                                    <td class="px-9 py-6"></td>
                                                </tr>
                                                <!--end::Row-->

                                                <!--begin::Row-->
                                                <tr class="fw-medium pw-text-neutral-700 fs-8">
                                                    <td class="px-9 py-6"></td>
                                                    <td class="px-9 py-6"></td>
                                                    <td class="px-9 py-6"></td>
                                                </tr>
                                                <!--end::Row-->
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end::Yetki Setleri Detay tablosu-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Sql content-->
                </div>
            </div>
            <!--end::Form wrapper-->
          </div>
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
        .create(document.querySelector('#editor'), {
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