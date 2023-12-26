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
            A Proje
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

    <!--begin::Content -->
    <div class="col-12 col-md-11 mb-20 mt-10 px-6 pb-6">
      <!--begin::Form Table-->
      <div class="table-responsive overflow-x-auto overflow-lg-hidden mb-6">
        <table class="table w-min-content w-100">
          <tbody>
            <!--begin::Row-->
            <tr>
              <td>
                <label class="form-label fs-base" for="pozisyon-adi">Pozisyon Adı</label>
              </td>
              <td>
                <input id="pozisyon-adi" type="text" class="form-control pw-input-stroke fs-8 py-3 px-4" name="pozisyon-adi" value="Analist" />
              </td>
            </tr>
            <!--end::Row-->
          </tbody>
        </table>
      </div>
      <!--end::Form Table-->

      <!--begin::Kullanıcılar Table-->
      <div class="table-responsive overflow-x-auto rounded mb-6">
        <!--begin::Table-Light-->
        <table class="table table-row-bordered border pw-table-border-gray table-rounded align-middle w-max-content min-w-100 gy-2 gx-9 gs-9">
          <thead>
            <tr class="fw-semibold fs-8 pw-text-neutral-700 pw-bg-neutral-100">
              <th class="py-3 text-left">Kullanıcılar</th>
              <th class="py-3">E-posta</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <!--begin::Row-->
            <tr class="fw-medium pw-text-neutral-700 fs-8">
              <td>
                <div class="d-flex align-items-center flex-nowrap gap-2">
                  <div class="w-35px h-35px  d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-primary-100 flex-shrink-0">
                    <i class="fa-solid fa-user pw-text-primary"></i>
                  </div>
                  <div>
                    Bakioğlu Holding
                  </div>
                </div>
              </td>
              <td>Emmasmith@gmail.com</td>
              <td align="right">
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/detay/#pozisyon-edit" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5" data-bs-toggle="modal" data-bs-target="#pozisyon-edit">
                  <i class="fa-solid fa-share fs-7 pw-text-primary"></i>
                </a>
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/detay/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-trash fs-7 pw-text-primary "></i>
                </a>
              </td>
            </tr>
            <!--end::Row-->

            <!--begin::Row-->
            <tr class="fw-medium pw-text-neutral-700 fs-8">
              <td>
                <div class="d-flex align-items-center flex-nowrap gap-2">
                  <div class="w-35px h-35px  d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-primary-100 flex-shrink-0">
                    <i class="fa-solid fa-user pw-text-primary"></i>
                  </div>
                  <div>
                    Bakioğlu Holding
                  </div>
                </div>
              </td>
              <td>Emmasmith@gmail.com</td>
              <td align="right">
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/detay/#pozisyon-edit" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5" data-bs-toggle="modal" data-bs-target="#pozisyon-edit">
                  <i class="fa-solid fa-share fs-7 pw-text-primary"></i>
                </a>
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/detay/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-trash fs-7 pw-text-primary "></i>
                </a>
              </td>
            </tr>
            <!--end::Row-->

            <!--begin::Row-->
            <tr class="fw-medium pw-text-neutral-700 fs-8">
              <td>
                <div class="d-flex align-items-center flex-nowrap gap-2">
                  <div class="w-35px h-35px  d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-primary-100 flex-shrink-0">
                    <i class="fa-solid fa-user pw-text-primary"></i>
                  </div>
                  <div>
                    Bakioğlu Holding
                  </div>
                </div>
              </td>
              <td>Emmasmith@gmail.com</td>
              <td align="right">
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/detay/#pozisyon-edit" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5" data-bs-toggle="modal" data-bs-target="#pozisyon-edit">
                  <i class="fa-solid fa-share fs-7 pw-text-primary"></i>
                </a>
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/detay/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-trash fs-7 pw-text-primary "></i>
                </a>
              </td>
            </tr>
            <!--end::Row-->

            <!--begin::Row-->
            <tr class="fw-medium pw-text-neutral-700 fs-8">
              <td>
                <div class="d-flex align-items-center flex-nowrap gap-2">
                  <div class="w-35px h-35px  d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-primary-100 flex-shrink-0">
                    <i class="fa-solid fa-user pw-text-primary"></i>
                  </div>
                  <div>
                    Bakioğlu Holding
                  </div>
                </div>
              </td>
              <td>Emmasmith@gmail.com</td>
              <td align="right">
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/detay/#pozisyon-edit" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5" data-bs-toggle="modal" data-bs-target="#pozisyon-edit">
                  <i class="fa-solid fa-share fs-7 pw-text-primary"></i>
                </a>
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/detay/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-trash fs-7 pw-text-primary "></i>
                </a>
              </td>
            </tr>
            <!--end::Row-->

            <!--begin::Row-->
            <tr class="fw-medium pw-text-neutral-700 fs-8">
              <td>
                <div class="d-flex align-items-center flex-nowrap gap-2">
                  <div class="w-35px h-35px  d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-primary-100 flex-shrink-0">
                    <i class="fa-solid fa-user pw-text-primary"></i>
                  </div>
                  <div>
                    Bakioğlu Holding
                  </div>
                </div>
              </td>
              <td>Emmasmith@gmail.com</td>
              <td align="right">
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/detay/#pozisyon-edit" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5" data-bs-toggle="modal" data-bs-target="#pozisyon-edit">
                  <i class="fa-solid fa-share fs-7 pw-text-primary"></i>
                </a>
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/detay/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-trash fs-7 pw-text-primary "></i>
                </a>
              </td>
            </tr>
            <!--end::Row-->
          </tbody>
        </table>
        <!--end::Table-Light-->
        <!--begin::Table-Dark-->
        <table class="table pw-dark-bg-table table-row-bordered border pw-table-border-gray table-rounded align-middle w-max-content min-w-100 gy-2 gx-9 gs-9 theme-dark-show">
          <thead>
            <tr class="fw-semibold fs-8 pw-text-neutral-700">
              <th class="py-3">Kullanıcılar</th>
              <th class="py-3">E-posta</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <!--begin::Row-->
            <tr class="fw-medium pw-text-neutral-700 fs-8">
              <td>
                <div class="d-flex align-items-center flex-nowrap gap-2">
                  <div class="w-35px h-35px  d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-primary-100 flex-shrink-0">
                    <i class="fa-solid fa-user pw-text-primary"></i>
                  </div>
                  <div>
                    Bakioğlu Holding
                  </div>
                </div>
              </td>
              <td>Emmasmith@gmail.com</td>
              <td align="right">
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/detay/#posisyon-edit" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5" data-bs-toggle="modal" data-bs-target="#pozisyon-edit">
                  <i class="fa-solid fa-share fs-7 pw-text-primary"></i>
                </a>
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/detay/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-trash fs-7 pw-text-primary "></i>
                </a>
              </td>
            </tr>
            <!--end::Row-->

            <!--begin::Row-->
            <tr class="fw-medium pw-text-neutral-700 fs-8">
              <td>
                <div class="d-flex align-items-center flex-nowrap gap-2">
                  <div class="w-35px h-35px  d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-primary-100 flex-shrink-0">
                    <i class="fa-solid fa-user pw-text-primary"></i>
                  </div>
                  <div>
                    Bakioğlu Holding
                  </div>
                </div>
              </td>
              <td>Emmasmith@gmail.com</td>
              <td align="right">
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/detay/#pozisyon-edit" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5" data-bs-toggle="modal" data-bs-target="#pozisyon-edit">
                  <i class="fa-solid fa-share fs-7 pw-text-primary"></i>
                </a>
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/detay/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-trash fs-7 pw-text-primary "></i>
                </a>
              </td>
            </tr>
            <!--end::Row-->

            <!--begin::Row-->
            <tr class="fw-medium pw-text-neutral-700 fs-8">
              <td>
                <div class="d-flex align-items-center flex-nowrap gap-2">
                  <div class="w-35px h-35px  d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-primary-100 flex-shrink-0">
                    <i class="fa-solid fa-user pw-text-primary"></i>
                  </div>
                  <div>
                    Bakioğlu Holding
                  </div>
                </div>
              </td>
              <td>Emmasmith@gmail.com</td>
              <td align="right">
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/detay/#pozisyon-edit" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5" data-bs-toggle="modal" data-bs-target="#pozisyon-edit">
                  <i class="fa-solid fa-share fs-7 pw-text-primary"></i>
                </a>
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/detay/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-trash fs-7 pw-text-primary "></i>
                </a>
              </td>
            </tr>
            <!--end::Row-->

            <!--begin::Row-->
            <tr class="fw-medium pw-text-neutral-700 fs-8">
              <td>
                <div class="d-flex align-items-center flex-nowrap gap-2">
                  <div class="w-35px h-35px  d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-primary-100 flex-shrink-0">
                    <i class="fa-solid fa-user pw-text-primary"></i>
                  </div>
                  <div>
                    Bakioğlu Holding
                  </div>
                </div>
              </td>
              <td>Emmasmith@gmail.com</td>
              <td align="right">
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/detay/#pozisyon-edit" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5" data-bs-toggle="modal" data-bs-target="#pozisyon-edit">
                  <i class="fa-solid fa-share fs-7 pw-text-primary"></i>
                </a>
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/detay/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-trash fs-7 pw-text-primary "></i>
                </a>
              </td>
            </tr>
            <!--end::Row-->

            <!--begin::Row-->
            <tr class="fw-medium pw-text-neutral-700 fs-8">
              <td>
                <div class="d-flex align-items-center flex-nowrap gap-2">
                  <div class="w-35px h-35px  d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-primary-100 flex-shrink-0">
                    <i class="fa-solid fa-user pw-text-primary"></i>
                  </div>
                  <div>
                    Bakioğlu Holding
                  </div>
                </div>
              </td>
              <td>Emmasmith@gmail.com</td>
              <td align="right">
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/detay/#pozisyon-edit" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5" data-bs-toggle="modal" data-bs-target="#pozisyon-edit">
                  <i class="fa-solid fa-share fs-7 pw-text-primary"></i>
                </a>
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/detay/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-trash fs-7 pw-text-primary "></i>
                </a>
              </td>
            </tr>
            <!--end::Row-->
        </table>
        <!--end::Table-Dark-->
      </div>
      <!--end::Kullanıcılar Table-->

      <!--begin::Organizasyon Şemaları Table-->
      <div class="table-responsive overflow-x-auto rounded mb-6">
        <!--begin::Table-Light-->
        <table class="table table-row-bordered border pw-table-border-gray table-rounded align-middle w-max-content min-w-100 gy-2 gx-9 gs-9">
          <thead>
            <tr class="fw-semibold fs-8 pw-text-neutral-700 pw-bg-neutral-100">
              <th class="py-3 text-left">Organizasyon Şemaları</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <!--begin::Row-->
            <tr class="fw-medium pw-text-neutral-700 fs-8">
              <td>
                <div class="d-flex align-items-center flex-nowrap gap-2">
                  <div class="w-35px h-35px  d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                  </div>
                  <div>
                    İSTEK FORMU
                  </div>
                </div>
              </td>
              <td align="right">
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/detay/#pozisyon-edit" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5" data-bs-toggle="modal" data-bs-target="#pozisyon-edit">
                  <i class="fa-solid fa-share fs-7 pw-text-primary"></i>
                </a>
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/detay/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-trash fs-7 pw-text-primary "></i>
                </a>
              </td>
            </tr>
            <!--end::Row-->

            <!--begin::Row-->
            <tr class="fw-medium pw-text-neutral-700 fs-8">
              <td>
                <div class="d-flex align-items-center flex-nowrap gap-2">
                  <div class="w-35px h-35px  d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                  </div>
                  <div>
                    Ayşe Test
                  </div>
                </div>
              </td>
              <td align="right">
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/detay/#pozisyon-edit" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5" data-bs-toggle="modal" data-bs-target="#pozisyon-edit">
                  <i class="fa-solid fa-share fs-7 pw-text-primary"></i>
                </a>
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/detay/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-trash fs-7 pw-text-primary "></i>
                </a>
              </td>
            </tr>
            <!--end::Row-->

            <!--begin::Row-->
            <tr class="fw-medium pw-text-neutral-700 fs-8">
              <td>
                <div class="d-flex align-items-center flex-nowrap gap-2">
                  <div class="w-35px h-35px  d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                  </div>
                  <div>
                    BK Deneme
                  </div>
                </div>
              </td>
              <td align="right">
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/detay/#pozisyon-edit" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5" data-bs-toggle="modal" data-bs-target="#pozisyon-edit">
                  <i class="fa-solid fa-share fs-7 pw-text-primary"></i>
                </a>
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/detay/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-trash fs-7 pw-text-primary "></i>
                </a>
              </td>
            </tr>
            <!--end::Row-->

            <!--begin::Row-->
            <tr class="fw-medium pw-text-neutral-700 fs-8">
              <td>
                <div class="d-flex align-items-center flex-nowrap gap-2">
                  <div class="w-35px h-35px  d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                  </div>
                  <div>
                    BK Deneme
                  </div>
                </div>
              </td>
              <td align="right">
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/detay/#pozisyon-edit" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5" data-bs-toggle="modal" data-bs-target="#pozisyon-edit">
                  <i class="fa-solid fa-share fs-7 pw-text-primary"></i>
                </a>
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/detay/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-trash fs-7 pw-text-primary "></i>
                </a>
              </td>
            </tr>
            <!--end::Row-->

            <!--begin::Row-->
            <tr class="fw-medium pw-text-neutral-700 fs-8">
              <td>
                <div class="d-flex align-items-center flex-nowrap gap-2">
                  <div class="w-35px h-35px  d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                  </div>
                  <div>
                    BK Deneme
                  </div>
                </div>
              </td>
              <td align="right">
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/detay/#pozisyon-edit" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5" data-bs-toggle="modal" data-bs-target="#pozisyon-edit">
                  <i class="fa-solid fa-share fs-7 pw-text-primary"></i>
                </a>
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/detay/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-trash fs-7 pw-text-primary "></i>
                </a>
              </td>
            </tr>
            <!--end::Row-->
          </tbody>
        </table>
        <!--end::Table-Light-->
        <!--begin::Table-Dark-->
        <table class="table pw-dark-bg-table table-row-bordered border pw-table-border-gray table-rounded align-middle w-max-content min-w-100 gy-2 gx-9 gs-9 theme-dark-show">
          <thead>
            <tr class="fw-semibold fs-8 pw-text-neutral-700">
              <th class="py-3">Organizasyon Şemaları</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <!--begin::Row-->
            <tr class="fw-medium pw-text-neutral-700 fs-8">
              <td>
                <div class="d-flex align-items-center flex-nowrap gap-2">
                  <div class="w-35px h-35px  d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                  </div>
                  <div>
                    İSTEK FORMU
                  </div>
                </div>
              </td>
              <td align="right">
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/detay/#pozisyon-edit" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5" data-bs-toggle="modal" data-bs-target="#pozisyon-edit">
                  <i class="fa-solid fa-share fs-7 pw-text-primary"></i>
                </a>
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/detay/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-trash fs-7 pw-text-primary "></i>
                </a>
              </td>
            </tr>
            <!--end::Row-->

            <!--begin::Row-->
            <tr class="fw-medium pw-text-neutral-700 fs-8">
              <td>
                <div class="d-flex align-items-center flex-nowrap gap-2">
                  <div class="w-35px h-35px  d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                  </div>
                  <div>
                    Ayşe Test
                  </div>
                </div>
              </td>
              <td align="right">
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/detay/#pozisyon-edit" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5" data-bs-toggle="modal" data-bs-target="#pozisyon-edit">
                  <i class="fa-solid fa-share fs-7 pw-text-primary"></i>
                </a>
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/detay/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-trash fs-7 pw-text-primary "></i>
                </a>
              </td>
            </tr>
            <!--end::Row-->

            <!--begin::Row-->
            <tr class="fw-medium pw-text-neutral-700 fs-8">
              <td>
                <div class="d-flex align-items-center flex-nowrap gap-2">
                  <div class="w-35px h-35px  d-inline-flex align-it ems-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                  </div>
                  <div>
                    BK Deneme
                  </div>
                </div>
              </td>
              <td align="right">
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/detay/#pozisyon-edit" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5" data-bs-toggle="modal" data-bs-target="#pozisyon-edit">
                  <i class="fa-solid fa-share fs-7 pw-text-primary"></i>
                </a>
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/detay/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-trash fs-7 pw-text-primary "></i>
                </a>
              </td>
            </tr>
            <!--end::Row-->

            <!--begin::Row-->
            <tr class="fw-medium pw-text-neutral-700 fs-8">
              <td>
                <div class="d-flex align-items-center flex-nowrap gap-2">
                  <div class="w-35px h-35px  d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                  </div>
                  <div>
                    BK Deneme
                  </div>
                </div>
              </td>
              <td align="right">
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/detay/#pozisyon-edit" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5" data-bs-toggle="modal" data-bs-target="#pozisyon-edit">
                  <i class="fa-solid fa-share fs-7 pw-text-primary"></i>
                </a>
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/detay/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-trash fs-7 pw-text-primary "></i>
                </a>
              </td>
            </tr>
            <!--end::Row-->

            <!--begin::Row-->
            <tr class="fw-medium pw-text-neutral-700 fs-8">
              <td>
                <div class="d-flex align-items-center flex-nowrap gap-2">
                  <div class="w-35px h-35px  d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                  </div>
                  <div>
                    BK Deneme
                  </div>
                </div>
              </td>
              <td align="right">
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/detay/#pozisyon-edit" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5" data-bs-toggle="modal" data-bs-target="#pozisyon-edit">
                  <i class="fa-solid fa-share fs-7 pw-text-primary"></i>
                </a>
                <a href="/tanimlamalar/kullanicilar/pozisyonlar/detay/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-trash fs-7 pw-text-primary "></i>
                </a>
              </td>
            </tr>
            <!--end::Row-->
        </table>
        <!--end::Table-Dark-->
      </div>
      <!--end::Organizasyon Şemaları Table-->
    </div>
    <!--end::Content -->
    <!--end::Content wrapper-->
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/footer.php'; ?>
  </div>
  <!--end::Main-->

</div>
<!--end::Wrapper -->

<!--begin:Modal-->
<div class="modal fade" tabindex="-1" id="pozisyon-edit">
  <div class="modal-dialog modal-dialog-centered modal-lg mw-400px">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Pozisyonlar</h3>
      </div>

      <div class="modal-body">
        <input type="text" class="form-control form-control-solid mb-3 fs-8" value="Bakım Personeli" placeholder="Pozisyon Adı" />
      </div>

      <div class="modal-footer border-0">
        <button type="button" class="btn btn-active-light pw-btn-text-neutral-500 py-2 px-4 me-2 fs-8" data-bs-dismiss="modal">
          İptal Et
        </button>
        <button class="btn btn-primary py-2 px-4 fs-8">
          Tamam
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