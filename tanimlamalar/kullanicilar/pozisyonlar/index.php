<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/header.php'; ?>

<!--begin::Wrapper-->
<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">

  <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/sidebar.php'; ?>
  <!--begin::Main-->
  <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <!--begin::Content wrapper-->
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar col-12 col-md-11 px-6 pt-6">

      <!--begin::Toolbar container-->
      <div id="kt_app_toolbar_container" class="container-fluid d-flex flex-stack p-0">

        <!--begin::Page title-->
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
          <!--begin::Breadcrumb-->
          <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-8 mt-0 mb-3">
            <!--begin::Item-->
            <li class="breadcrumb-item text-muted">
              <a href="/tanimlamalar/" class="text-muted text-hover-primary">Tanımlamalar</a>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item">
              <span class="text-muted">/</span>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item active">Pozisyonlar</li>
            <!--end::Item-->
          </ul>
          <!--end::Breadcrumb-->
          <!--begin::Title-->
          <h1 class="page-heading d-flex text-dark fw-bold fs-4 flex-column justify-content-center my-0">
            Pozisyonlar
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

    <!--begin::Actionbar-->
    <div class="d-flex align-items-center gap-5 border-top border-bottom pw-border-neutral-200 px-6 py-2 my-4">
      <div class="font-poppins fs-8 pw-text-neutral-900 fw-bold py-1 border-end pw-border-neutral-200 pe-5">
        10 Tanımlı Pozisyon
      </div>
      <a href="/tanimlamalar/kullanicilar/pozisyonlar/detay/" class="btn p-0 fs-9 fs-semibold d-inline-flex align-items-center gap-2" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="bottom" title="Yeni Pozisyon Ekle">
        <div class="w-25px h-25px pw-bg-iconbg rounded-0.20rem d-inline-flex align-items-center justify-content-center">
          <i class="fa-solid fa-plus pw-text-primary-400"></i>
        </div>
        <span class="pw-text-black">Yeni</span>
      </a>
    </div>
    <!--end::Actionbar-->

    <!--begin::Content -->
    <div class="col-12 col-md-11 mb-20 px-6 pb-6">
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
      <!--begin::Departmanlar tablosu-->
      <div class="table-responsive overflow-x-auto rounded">
        <!--begin::Table-Light-->
        <table class="table table-row-bordered border pw-table-border-gray table-rounded align-middle w-max-content min-w-100 gy-2 gx-9 gs-9">
          <thead>
            <tr class="fw-semibold fs-8 pw-text-neutral-700 pw-bg-neutral-100">
              <th class="py-3">GRUP ADI</th>
              <th class="py-3"></th>
            </tr>
          </thead>
          <tbody>
            <!--begin::Row-->
            <tr class="fw-medium pw-text-neutral-700 fs-8 pw-bg-primary-50">
              <td>
                <div class="d-flex align-items-center flex-nowrap gap-2">
                  <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-primary-200 flex-shrink-0">
                    <i class="fa-solid fa-file-lines pw-text-primary"></i>
                  </div>
                  <div>
                    Avas Talep Döküman
                  </div>
                </div>
              </td>
              <td align="right">
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-eye fs-7 pw-text-brand"></i>
                </a>
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-pen-to-square fs-7 pw-text-brand"></i>
                </a>
              </td>
            </tr>
            <!--end::Row-->

            <!--begin::Row-->
            <tr class="fw-medium pw-text-neutral-700 fs-8 pw-bg-primary-50">
              <td>
                <div class="d-flex align-items-center flex-nowrap gap-2">
                  <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-primary-200 flex-shrink-0">
                    <i class="fa-solid fa-file-lines pw-text-primary"></i>
                  </div>
                  <div>
                    Belge Taslağı Sistem
                  </div>
                </div>
              </td>
              <td align="right">
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-eye fs-7 pw-text-brand"></i>
                </a>
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-pen-to-square fs-7 pw-text-brand"></i>
                </a>
              </td>
            </tr>
            <!--end::Row-->

            <!--begin::Row-->
            <tr class="fw-medium pw-text-neutral-700 fs-8 pw-bg-primary-50">
              <td>
                <div class="d-flex align-items-center flex-nowrap gap-2">
                  <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-primary-200 flex-shrink-0">
                    <i class="fa-solid fa-file-lines pw-text-primary"></i>
                  </div>
                  <div>
                    Avas Talep Döküman
                  </div>
                </div>
              </td>
              <td align="right">
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-eye fs-7 pw-text-brand"></i>
                </a>
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-pen-to-square fs-7 pw-text-brand"></i>
                </a>
              </td>
            </tr>
            <!--end::Row-->

            <!--begin::Row-->
            <tr class="fw-medium pw-text-neutral-700 fs-8 pw-bg-primary-50">
              <td>
                <div class="d-flex align-items-center flex-nowrap gap-2">
                  <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-primary-200 flex-shrink-0">
                    <i class="fa-solid fa-file-lines pw-text-primary"></i>
                  </div>
                  <div>
                    Belge Taslağı Sistem
                  </div>
                </div>
              </td>
              <td align="right">
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-eye fs-7 pw-text-brand"></i>
                </a>
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-pen-to-square fs-7 pw-text-brand"></i>
                </a>
              </td>
            </tr>
            <!--end::Row-->

            <!--begin::Row-->
            <tr class="fw-medium pw-text-neutral-700 fs-8 pw-bg-primary-50">
              <td>
                <div class="d-flex align-items-center flex-nowrap gap-2">
                  <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-primary-200 flex-shrink-0">
                    <i class="fa-solid fa-file-lines pw-text-primary"></i>
                  </div>
                  <div>
                    Avas Talep Döküman
                  </div>
                </div>
              </td>
              <td align="right">
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-eye fs-7 pw-text-brand"></i>
                </a>
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-pen-to-square fs-7 pw-text-brand"></i>
                </a>
              </td>
            </tr>
            <!--end::Row-->

            <!--begin::Row-->
            <tr class="fw-medium pw-text-neutral-700 fs-8 pw-bg-primary-50">
              <td>
                <div class="d-flex align-items-center flex-nowrap gap-2">
                  <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-primary-200 flex-shrink-0">
                    <i class="fa-solid fa-file-lines pw-text-primary"></i>
                  </div>
                  <div>
                    Belge Taslağı Sistem
                  </div>
                </div>
              </td>
              <td align="right">
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-eye fs-7 pw-text-brand"></i>
                </a>
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-pen-to-square fs-7 pw-text-brand"></i>
                </a>
              </td>
            </tr>
            <!--end::Row-->

            <!--begin::Row-->
            <tr class="fw-medium pw-text-neutral-700 fs-8">
              <td>
                <div class="d-flex align-items-center flex-nowrap gap-2">
                  <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                  </div>
                  <div>
                    Analist
                  </div>
                </div>
              </td>
              <td align="right">
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-eye fs-7 pw-text-brand"></i>
                </a>
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-pen-to-square fs-7 pw-text-brand"></i>
                </a>
              </td>
            </tr>
            <!--end::Row-->

            <!--begin::Row-->
            <tr class="fw-medium pw-text-neutral-700 fs-8">
              <td>
                <div class="d-flex align-items-center flex-nowrap gap-2">
                  <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                  </div>
                  <div>
                    Bakım Personlei
                  </div>
                </div>
              </td>
              <td align="right">
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-eye fs-7 pw-text-brand"></i>
                </a>
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-pen-to-square fs-7 pw-text-brand"></i>
                </a>
              </td>
            </tr>
            <!--end::Row-->

            <!--begin::Row-->
            <tr class="fw-medium pw-text-neutral-700 fs-8">
              <td>
                <div class="d-flex align-items-center flex-nowrap gap-2">
                  <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                  </div>
                  <div>
                    Bak Dış Ticaret
                  </div>
                </div>
              </td>
              <td align="right">
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-eye fs-7 pw-text-brand"></i>
                </a>
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-pen-to-square fs-7 pw-text-brand"></i>
                </a>
              </td>
            </tr>
            <!--end::Row-->

            <!--begin::Row-->
            <tr class="fw-medium pw-text-neutral-700 fs-8">
              <td>
                <div class="d-flex align-items-center flex-nowrap gap-2">
                  <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                  </div>
                  <div>
                    Bakioğlu Holding
                  </div>
                </div>
              </td>
              <td align="right">
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-eye fs-7 pw-text-brand"></i>
                </a>
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-pen-to-square fs-7 pw-text-brand"></i>
                </a>
              </td>
            </tr>
            <!--end::Row-->

            <!--begin::Row-->
            <tr class="fw-medium pw-text-neutral-700 fs-8">
              <td>
                <div class="d-flex align-items-center flex-nowrap gap-2">
                  <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                  </div>
                  <div>
                    Bak Cycle
                  </div>
                </div>
              </td>
              <td align="right">
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-eye fs-7 pw-text-brand"></i>
                </a>
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-pen-to-square fs-7 pw-text-brand"></i>
                </a>
              </td>
            </tr>
            <!--end::Row-->

            <!--begin::Row-->
            <tr class="fw-medium pw-text-neutral-700 fs-8">
              <td>
                <div class="d-flex align-items-center flex-nowrap gap-2">
                  <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                  </div>
                  <div>
                    Bak Dış Ticaret
                  </div>
                </div>
              </td>
              <td align="right">
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-eye fs-7 pw-text-brand"></i>
                </a>
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-pen-to-square fs-7 pw-text-brand"></i>
                </a>
              </td>
            </tr>
            <!--end::Row-->

            <!--begin::Row-->
            <tr class="fw-medium pw-text-neutral-700 fs-8">
              <td>
                <div class="d-flex align-items-center flex-nowrap gap-2">
                  <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                  </div>
                  <div>
                    Bakioğlu Holding
                  </div>
                </div>
              </td>
              <td align="right">
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-eye fs-7 pw-text-brand"></i>
                </a>
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-pen-to-square fs-7 pw-text-brand"></i>
                </a>
              </td>
            </tr>
            <!--end::Row-->

            <!--begin::Row-->
            <tr class="fw-medium pw-text-neutral-700 fs-8">
              <td>
                <div class="d-flex align-items-center flex-nowrap gap-2">
                  <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                  </div>
                  <div>
                    Bak Cycle
                  </div>
                </div>
              </td>
              <td align="right">
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-eye fs-7 pw-text-brand"></i>
                </a>
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-pen-to-square fs-7 pw-text-brand"></i>
                </a>
              </td>
            </tr>
            <!--end::Row-->
          </tbody>
        </table>
        <!--end::Table-Light-->
        <!--Table-Dark-->
        <table class="table table-row-bordered border pw-dark-bg-table pw-table-border-gray table-rounded align-middle w-max-content min-w-100 gy-2 gx-9 gs-9 theme-dark-show">
          <thead>
            <tr class="fw-semibold fs-8 pw-text-neutral-700">
              <th class="py-3">GRUP ADI</th>
              <th class="py-3"></th>
            </tr>
          </thead>
          <tbody>
            <!--begin::Row-->
            <tr class="fw-medium pw-text-neutral-700 fs-8 pw-bg-primary-50">
              <td>
                <div class="d-flex align-items-center flex-nowrap gap-2">
                  <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-primary-200 flex-shrink-0">
                    <i class="fa-solid fa-file-lines pw-text-primary"></i>
                  </div>
                  <div>
                    Avas Talep Döküman
                  </div>
                </div>
              </td>
              <td align="right">
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-eye fs-7 pw-text-brand"></i>
                </a>
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-pen-to-square fs-7 pw-text-brand"></i>
                </a>
              </td>
            </tr>
            <!--end::Row-->

            <!--begin::Row-->
            <tr class="fw-medium pw-text-neutral-700 fs-8 pw-bg-primary-50">
              <td>
                <div class="d-flex align-items-center flex-nowrap gap-2">
                  <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-primary-200 flex-shrink-0">
                    <i class="fa-solid fa-file-lines pw-text-primary"></i>
                  </div>
                  <div>
                    Belge Taslağı Sistem
                  </div>
                </div>
              </td>
              <td align="right">
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-eye fs-7 pw-text-brand"></i>
                </a>
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-pen-to-square fs-7 pw-text-brand"></i>
                </a>
              </td>
            </tr>
            <!--end::Row-->

            <!--begin::Row-->
            <tr class="fw-medium pw-text-neutral-700 fs-8 pw-bg-primary-50">
              <td>
                <div class="d-flex align-items-center flex-nowrap gap-2">
                  <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-primary-200 flex-shrink-0">
                    <i class="fa-solid fa-file-lines pw-text-primary"></i>
                  </div>
                  <div>
                    Avas Talep Döküman
                  </div>
                </div>
              </td>
              <td align="right">
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-eye fs-7 pw-text-brand"></i>
                </a>
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-pen-to-square fs-7 pw-text-brand"></i>
                </a>
              </td>
            </tr>
            <!--end::Row-->

            <!--begin::Row-->
            <tr class="fw-medium pw-text-neutral-700 fs-8 pw-bg-primary-50">
              <td>
                <div class="d-flex align-items-center flex-nowrap gap-2">
                  <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-primary-200 flex-shrink-0">
                    <i class="fa-solid fa-file-lines pw-text-primary"></i>
                  </div>
                  <div>
                    Belge Taslağı Sistem
                  </div>
                </div>
              </td>
              <td align="right">
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-eye fs-7 pw-text-brand"></i>
                </a>
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-pen-to-square fs-7 pw-text-brand"></i>
                </a>
              </td>
            </tr>
            <!--end::Row-->

            <!--begin::Row-->
            <tr class="fw-medium pw-text-neutral-700 fs-8 pw-bg-primary-50">
              <td>
                <div class="d-flex align-items-center flex-nowrap gap-2">
                  <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-primary-200 flex-shrink-0">
                    <i class="fa-solid fa-file-lines pw-text-primary"></i>
                  </div>
                  <div>
                    Avas Talep Döküman
                  </div>
                </div>
              </td>
              <td align="right">
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-eye fs-7 pw-text-brand"></i>
                </a>
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-pen-to-square fs-7 pw-text-brand"></i>
                </a>
              </td>
            </tr>
            <!--end::Row-->

            <!--begin::Row-->
            <tr class="fw-medium pw-text-neutral-700 fs-8 pw-bg-primary-50">
              <td>
                <div class="d-flex align-items-center flex-nowrap gap-2">
                  <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-primary-200 flex-shrink-0">
                    <i class="fa-solid fa-file-lines pw-text-primary"></i>
                  </div>
                  <div>
                    Belge Taslağı Sistem
                  </div>
                </div>
              </td>
              <td align="right">
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-eye fs-7 pw-text-brand"></i>
                </a>
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-pen-to-square fs-7 pw-text-brand"></i>
                </a>
              </td>
            </tr>
            <!--end::Row-->

            <!--begin::Row-->
            <tr class="fw-medium pw-text-neutral-700 fs-8">
              <td>
                <div class="d-flex align-items-center flex-nowrap gap-2">
                  <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                  </div>
                  <div>
                    Analist
                  </div>
                </div>
              </td>
              <td align="right">
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-eye fs-7 pw-text-brand"></i>
                </a>
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-pen-to-square fs-7 pw-text-brand"></i>
                </a>
              </td>
            </tr>
            <!--end::Row-->

            <!--begin::Row-->
            <tr class="fw-medium pw-text-neutral-700 fs-8">
              <td>
                <div class="d-flex align-items-center flex-nowrap gap-2">
                  <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                  </div>
                  <div>
                    Bakım Personlei
                  </div>
                </div>
              </td>
              <td align="right">
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-eye fs-7 pw-text-brand"></i>
                </a>
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-pen-to-square fs-7 pw-text-brand"></i>
                </a>
              </td>
            </tr>
            <!--end::Row-->

            <!--begin::Row-->
            <tr class="fw-medium pw-text-neutral-700 fs-8">
              <td>
                <div class="d-flex align-items-center flex-nowrap gap-2">
                  <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                  </div>
                  <div>
                    Bak Dış Ticaret
                  </div>
                </div>
              </td>
              <td align="right">
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-eye fs-7 pw-text-brand"></i>
                </a>
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-pen-to-square fs-7 pw-text-brand"></i>
                </a>
              </td>
            </tr>
            <!--end::Row-->

            <!--begin::Row-->
            <tr class="fw-medium pw-text-neutral-700 fs-8">
              <td>
                <div class="d-flex align-items-center flex-nowrap gap-2">
                  <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                  </div>
                  <div>
                    Bakioğlu Holding
                  </div>
                </div>
              </td>
              <td align="right">
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-eye fs-7 pw-text-brand"></i>
                </a>
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-pen-to-square fs-7 pw-text-brand"></i>
                </a>
              </td>
            </tr>
            <!--end::Row-->

            <!--begin::Row-->
            <tr class="fw-medium pw-text-neutral-700 fs-8">
              <td>
                <div class="d-flex align-items-center flex-nowrap gap-2">
                  <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                  </div>
                  <div>
                    Bak Cycle
                  </div>
                </div>
              </td>
              <td align="right">
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-eye fs-7 pw-text-brand"></i>
                </a>
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-pen-to-square fs-7 pw-text-brand"></i>
                </a>
              </td>
            </tr>
            <!--end::Row-->

            <!--begin::Row-->
            <tr class="fw-medium pw-text-neutral-700 fs-8">
              <td>
                <div class="d-flex align-items-center flex-nowrap gap-2">
                  <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                  </div>
                  <div>
                    Bak Dış Ticaret
                  </div>
                </div>
              </td>
              <td align="right">
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-eye fs-7 pw-text-brand"></i>
                </a>
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-pen-to-square fs-7 pw-text-brand"></i>
                </a>
              </td>
            </tr>
            <!--end::Row-->

            <!--begin::Row-->
            <tr class="fw-medium pw-text-neutral-700 fs-8">
              <td>
                <div class="d-flex align-items-center flex-nowrap gap-2">
                  <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                  </div>
                  <div>
                    Bakioğlu Holding
                  </div>
                </div>
              </td>
              <td align="right">
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-eye fs-7 pw-text-brand"></i>
                </a>
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-pen-to-square fs-7 pw-text-brand"></i>
                </a>
              </td>
            </tr>
            <!--end::Row-->

            <!--begin::Row-->
            <tr class="fw-medium pw-text-neutral-700 fs-8">
              <td>
                <div class="d-flex align-items-center flex-nowrap gap-2">
                  <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                  </div>
                  <div>
                    Bak Cycle
                  </div>
                </div>
              </td>
              <td align="right">
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-eye fs-7 pw-text-brand"></i>
                </a>
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-pen-to-square fs-7 pw-text-brand"></i>
                </a>
              </td>
            </tr>
            <!--end::Row-->
          </tbody>
        </table>
        <!--end::Table-Dark-->


      </div>
      <!--end::Departmanlar tablosu-->
    </div>
    <!--end::Content -->
    <!--end::Content wrapper-->
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/footer.php'; ?>
  </div>
  <!--end::Main-->

</div>
<!--end::Wrapper -->

<!--begin:Modal-->
<div class="modal fade" tabindex="-1" id="yeni-departman-ekle">
  <div class="modal-dialog modal-dialog-centered modal-lg mw-650px">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Düzenle</h3>
      </div>

      <div class="modal-body">
        <div class="d-flex flex-column gap-10">
          <div class="d-flex justify-content-between">
            <span class="flex-sm-shrink-0 fs-8 fw-bolder">Departman Adı</span>
            <input type="text" class="form-control form-control-solid mb-3 mw-md-375px w-100 fs-8" value="Ana Yönetici" placeholder="Departman Adı" />
          </div>
          <div class="d-flex justify-content-between">
            <span class="flex-sm-shrink-0 fs-8 fw-bolder">Organizasyon Şeması</span>
            <select class="form-select form-select-solid mb-3 mw-375px w-100 fs-8 scroll-primary" size="8" multiple data-placeholder="Seçiniz">
              <option value="1">Bilişim Talep Organizasyonu</option>
              <option value="2">Departman Tets</option>
              <option value="3">Doğan Organizasyon</option>
              <option value="4">GGSoft</option>
              <option value="5">HCS Şema</option>
              <option value="6">IT Talep Deneme Organizasyon</option>
              <option value="7">ONS Şema</option>
              <option value="8">ONS Şema 2</option>
              <option value="9">TEST Ekibi</option>
            </select>
          </div>
        </div>
      </div>

      <div class="modal-footer border-0">
        <button type="button" class="btn btn-active-light pw-btn-text-neutral-500 py-2 px-4 me-2 fs-8" data-bs-dismiss="modal">
          Vazgeç
        </button>
        <button class="btn btn-primary py-2 px-4 fs-8">
          Kaydet
        </button>
      </div>
    </div>
  </div>
</div>
<!--end::Modal-->

<!--begin::Drawers-->
<!--begin::History & Recent canvas trigger-->
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/history-drawer.php'; ?>
<!--end::History canvas-->
<!--end::Drawers-->


<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/foot.php'; ?>