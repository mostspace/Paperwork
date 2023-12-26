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
            <li class="breadcrumb-item active">Belgeler</li>
            <!--end::Item-->
          </ul>
          <!--end::Breadcrumb-->
          <!--begin::Title-->
          <h1 class="page-heading d-flex text-dark fw-bold fs-4 flex-column justify-content-center my-0">
            Belgeler
          </h1>
          <!--end::Title-->
        </div>
        <!--end::Page title-->
      </div>
      <!--end::Toolbar container-->
    </div>
    <!--end::Toolbar-->

    <!--begin::Content -->
    <div class="px-6 pb-20 table-responsive overflow-x-auto min-w-1000px mt-4">
      <!--begin::Row-->
      <div class="row w-100 column-g-6">
        <!--begin::Menu Col-->
        <div class="col d-flex flex-column gap-4 mw-275px" id="menuCol">
          <!--begin::Trash button-->
          <a href="/belgeler/geri-donusum/" class="btn d-flex align-items-center justify-content-between gap-4 border rounded-1 pw-bg-neutral-50 pw-border-stroke p-2">
            <div class="d-flex align-items-center gap-2">
              <i class="fa-solid fa-trash-can-undo pw-text-danger-500"></i>
              <span class="pw-text-neutral-700 fs-9 fw-semibold text-truncate" title="Geri Dönüşüm (0)">Geri Dönüşüm (0)</span>
            </div>

            <i class="fa-solid fa-angle-right pw-text-neutral-500"></i>
          </a>
          <!--end::Trash button-->

          <!--begin::Menu-->
          <div class="menu menu-column gap-2 w-100 fw-semibold p-4 rounded-2 bg-white pw-shadow-3 scroll h-100">
            <!--begin::Menu item-->
            <div class="menu-item">
              <a href="/belgeler/kabinet/" class="menu-link py-1 px-0">
                <span class="menu-icon">
                  <i class="fa-solid fa-id-card pw-text-primary-300"></i>
                </span>
                <span class="menu-title pw-text-neutral-700 text-truncate" title="Akçelik POC">Akçelik POC</span>
              </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item">
              <a href="/belgeler/dinamik-belgeler/" class="menu-link py-1 px-0">
                <span class="menu-icon">
                  <i class="fa-solid fa-h pw-text-primary-300"></i>
                </span>
                <span class="menu-title pw-text-neutral-700 text-truncate" title="Akfen Form Kabineti">Akfen Form Kabineti</span>
              </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item">
              <a href="/belgeler/#" class="menu-link py-1 px-0">
                <span class="menu-icon">
                  <i class="fa-solid fa-flag pw-text-primary-300"></i>
                </span>
                <span class="menu-title pw-text-neutral-700 text-truncate" title="Aksiyon Belgeleri">Aksiyon Belgeleri</span>
              </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item">
              <a href="/belgeler/#" class="menu-link py-1 px-0">
                <span class="menu-icon">
                  <i class="fa-solid fa-flag pw-text-primary-300"></i>
                </span>
                <span class="menu-title pw-text-neutral-700 text-truncate" title="Aksiyon Takip">Aksiyon Takip</span>
              </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item">
              <a href="/belgeler/#" class="menu-link py-1 px-0">
                <span class="menu-icon">
                  <i class="fa-solid fa-a pw-text-primary-300"></i>
                </span>
                <span class="menu-title pw-text-neutral-700 text-truncate" title="Alıcı Cari Hesap Açma DK">Alıcı Cari Hesap Açma DK</span>
              </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item">
              <a href="/belgeler/#" class="menu-link py-1 px-0">
                <span class="menu-icon">
                  <i class="fa-solid fa-flag pw-text-primary-300"></i>
                </span>
                <span class="menu-title pw-text-neutral-700 text-truncate" title="Anket Arşivi">Anket Arşivi</span>
              </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item">
              <a href="/belgeler/#" class="menu-link py-1 px-0">
                <span class="menu-icon">
                  <i class="fa-solid fa-motorcycle pw-text-primary-300"></i>
                </span>
                <span class="menu-title pw-text-neutral-700 text-truncate" title="Araç Havuzu">Araç Havuzu</span>
              </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item">
              <a href="/belgeler/#" class="menu-link py-1 px-0">
                <span class="menu-icon">
                  <i class="fa-solid fa-basket-shopping pw-text-primary-300"></i>
                </span>
                <span class="menu-title pw-text-neutral-700 text-truncate" title="Araç Talep">Araç Talep</span>
              </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item">
              <a href="/belgeler/#" class="menu-link py-1 px-0">
                <span class="menu-icon">
                  <i class="fa-solid fa-basket-shopping pw-text-primary-300"></i>
                </span>
                <span class="menu-title pw-text-neutral-700 text-truncate" title="Araç Talep">Araç Talep</span>
              </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item">
              <a href="/belgeler/#" class="menu-link py-1 px-0">
                <span class="menu-icon">
                  <i class="fa-solid fa-basket-shopping pw-text-primary-300"></i>
                </span>
                <span class="menu-title pw-text-neutral-700 text-truncate" title="Araç Talep">Araç Talep</span>
              </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item">
              <a href="/belgeler/#" class="menu-link py-1 px-0">
                <span class="menu-icon">
                  <i class="fa-solid fa-folder pw-text-primary-300"></i>
                </span>
                <span class="menu-title pw-text-neutral-700 text-truncate" title="Araştırma Klasör Yetkileri Etkin">Araştırma Klasör Yetkileri Etkin</span>
              </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item">
              <a href="/belgeler/#" class="menu-link py-1 px-0">
                <span class="menu-icon">
                  <i class="fa-solid fa-fish pw-text-primary-300"></i>
                </span>
                <span class="menu-title pw-text-neutral-700 text-truncate" title="Araştırma Merkezi Arşivi">Araştırma Merkezi Arşivi</span>
              </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item">
              <a href="/belgeler/#" class="menu-link py-1 px-0">
                <span class="menu-icon">
                  <i class="fa-solid fa-fish pw-text-primary-300"></i>
                </span>
                <span class="menu-title pw-text-neutral-700 text-truncate" title="Araştırma Merkezi Arşivi">Araştırma Merkezi Arşivi</span>
              </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item">
              <a href="/belgeler/#" class="menu-link py-1 px-0">
                <span class="menu-icon">
                  <i class="fa-solid fa-fish pw-text-primary-300"></i>
                </span>
                <span class="menu-title pw-text-neutral-700 text-truncate" title="Araştırma Merkezi Arşivi">Araştırma Merkezi Arşivi</span>
              </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item">
              <a href="/belgeler/#" class="menu-link py-1 px-0">
                <span class="menu-icon">
                  <i class="fa-solid fa-fish pw-text-primary-300"></i>
                </span>
                <span class="menu-title pw-text-neutral-700 text-truncate" title="Araştırma Merkezi Arşivi">Araştırma Merkezi Arşivi</span>
              </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item">
              <a href="/belgeler/#" class="menu-link py-1 px-0">
                <span class="menu-icon">
                  <i class="fa-solid fa-fish pw-text-primary-300"></i>
                </span>
                <span class="menu-title pw-text-neutral-700 text-truncate" title="Araştırma Merkezi Arşivi">Araştırma Merkezi Arşivi</span>
              </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item">
              <a href="/belgeler/#" class="menu-link py-1 px-0">
                <span class="menu-icon">
                  <i class="fa-solid fa-fish pw-text-primary-300"></i>
                </span>
                <span class="menu-title pw-text-neutral-700 text-truncate" title="Araştırma Merkezi Arşivi">Araştırma Merkezi Arşivi</span>
              </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item">
              <a href="/belgeler/#" class="menu-link py-1 px-0">
                <span class="menu-icon">
                  <i class="fa-solid fa-fish pw-text-primary-300"></i>
                </span>
                <span class="menu-title pw-text-neutral-700 text-truncate" title="Araştırma Merkezi Arşivi">Araştırma Merkezi Arşivi</span>
              </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item">
              <a href="/belgeler/#" class="menu-link py-1 px-0">
                <span class="menu-icon">
                  <i class="fa-solid fa-fish pw-text-primary-300"></i>
                </span>
                <span class="menu-title pw-text-neutral-700 text-truncate" title="Araştırma Merkezi Arşivi">Araştırma Merkezi Arşivi</span>
              </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item">
              <a href="/belgeler/#" class="menu-link py-1 px-0">
                <span class="menu-icon">
                  <i class="fa-solid fa-fish pw-text-primary-300"></i>
                </span>
                <span class="menu-title pw-text-neutral-700 text-truncate" title="Araştırma Merkezi Arşivi">Araştırma Merkezi Arşivi</span>
              </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item">
              <a href="/belgeler/#" class="menu-link py-1 px-0">
                <span class="menu-icon">
                  <i class="fa-solid fa-fish pw-text-primary-300"></i>
                </span>
                <span class="menu-title pw-text-neutral-700 text-truncate" title="Araştırma Merkezi Arşivi">Araştırma Merkezi Arşivi</span>
              </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item">
              <a href="/belgeler/#" class="menu-link py-1 px-0">
                <span class="menu-icon">
                  <i class="fa-solid fa-fish pw-text-primary-300"></i>
                </span>
                <span class="menu-title pw-text-neutral-700 text-truncate" title="Araştırma Merkezi Arşivi">Araştırma Merkezi Arşivi</span>
              </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item">
              <a href="/belgeler/#" class="menu-link py-1 px-0">
                <span class="menu-icon">
                  <i class="fa-solid fa-fish pw-text-primary-300"></i>
                </span>
                <span class="menu-title pw-text-neutral-700 text-truncate" title="Araştırma Merkezi Arşivi">Araştırma Merkezi Arşivi</span>
              </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item">
              <a href="/belgeler/#" class="menu-link py-1 px-0">
                <span class="menu-icon">
                  <i class="fa-solid fa-fish pw-text-primary-300"></i>
                </span>
                <span class="menu-title pw-text-neutral-700 text-truncate" title="Araştırma Merkezi Arşivi">Araştırma Merkezi Arşivi</span>
              </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item">
              <a href="/belgeler/#" class="menu-link py-1 px-0">
                <span class="menu-icon">
                  <i class="fa-solid fa-fish pw-text-primary-300"></i>
                </span>
                <span class="menu-title pw-text-neutral-700 text-truncate" title="Araştırma Merkezi Arşivi">Araştırma Merkezi Arşivi</span>
              </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item">
              <a href="/belgeler/#" class="menu-link py-1 px-0">
                <span class="menu-icon">
                  <i class="fa-solid fa-fish pw-text-primary-300"></i>
                </span>
                <span class="menu-title pw-text-neutral-700 text-truncate" title="Araştırma Merkezi Arşivi">Araştırma Merkezi Arşivi</span>
              </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item">
              <a href="/belgeler/#" class="menu-link py-1 px-0">
                <span class="menu-icon">
                  <i class="fa-solid fa-fish pw-text-primary-300"></i>
                </span>
                <span class="menu-title pw-text-neutral-700 text-truncate" title="Araştırma Merkezi Arşivi">Araştırma Merkezi Arşivi</span>
              </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item">
              <a href="/belgeler/#" class="menu-link py-1 px-0">
                <span class="menu-icon">
                  <i class="fa-solid fa-fish pw-text-primary-300"></i>
                </span>
                <span class="menu-title pw-text-neutral-700 text-truncate" title="Araştırma Merkezi Arşivi">Araştırma Merkezi Arşivi</span>
              </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item">
              <a href="/belgeler/#" class="menu-link py-1 px-0">
                <span class="menu-icon">
                  <i class="fa-solid fa-fish pw-text-primary-300"></i>
                </span>
                <span class="menu-title pw-text-neutral-700 text-truncate" title="Araştırma Merkezi Arşivi">Araştırma Merkezi Arşivi</span>
              </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item">
              <a href="/belgeler/#" class="menu-link py-1 px-0">
                <span class="menu-icon">
                  <i class="fa-solid fa-fish pw-text-primary-300"></i>
                </span>
                <span class="menu-title pw-text-neutral-700 text-truncate" title="Araştırma Merkezi Arşivi">Araştırma Merkezi Arşivi</span>
              </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item">
              <a href="/belgeler/#" class="menu-link py-1 px-0">
                <span class="menu-icon">
                  <i class="fa-solid fa-fish pw-text-primary-300"></i>
                </span>
                <span class="menu-title pw-text-neutral-700 text-truncate" title="Araştırma Merkezi Arşivi">Araştırma Merkezi Arşivi</span>
              </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item">
              <a href="/belgeler/#" class="menu-link py-1 px-0">
                <span class="menu-icon">
                  <i class="fa-solid fa-fish pw-text-primary-300"></i>
                </span>
                <span class="menu-title pw-text-neutral-700 text-truncate" title="Araştırma Merkezi Arşivi">Araştırma Merkezi Arşivi</span>
              </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item">
              <a href="/belgeler/#" class="menu-link py-1 px-0">
                <span class="menu-icon">
                  <i class="fa-solid fa-fish pw-text-primary-300"></i>
                </span>
                <span class="menu-title pw-text-neutral-700 text-truncate" title="Araştırma Merkezi Arşivi">Araştırma Merkezi Arşivi</span>
              </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item">
              <a href="/belgeler/#" class="menu-link py-1 px-0">
                <span class="menu-icon">
                  <i class="fa-solid fa-fish pw-text-primary-300"></i>
                </span>
                <span class="menu-title pw-text-neutral-700 text-truncate" title="Araştırma Merkezi Arşivi">Araştırma Merkezi Arşivi</span>
              </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item">
              <a href="/belgeler/#" class="menu-link py-1 px-0">
                <span class="menu-icon">
                  <i class="fa-solid fa-fish pw-text-primary-300"></i>
                </span>
                <span class="menu-title pw-text-neutral-700 text-truncate" title="Araştırma Merkezi Arşivi">Araştırma Merkezi Arşivi</span>
              </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item">
              <a href="/belgeler/#" class="menu-link py-1 px-0">
                <span class="menu-icon">
                  <i class="fa-solid fa-fish pw-text-primary-300"></i>
                </span>
                <span class="menu-title pw-text-neutral-700 text-truncate" title="Araştırma Merkezi Arşivi">Araştırma Merkezi Arşivi</span>
              </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item">
              <a href="/belgeler/#" class="menu-link py-1 px-0">
                <span class="menu-icon">
                  <i class="fa-solid fa-fish pw-text-primary-300"></i>
                </span>
                <span class="menu-title pw-text-neutral-700 text-truncate" title="Araştırma Merkezi Arşivi">Araştırma Merkezi Arşivi</span>
              </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item">
              <a href="/belgeler/#" class="menu-link py-1 px-0">
                <span class="menu-icon">
                  <i class="fa-solid fa-fish pw-text-primary-300"></i>
                </span>
                <span class="menu-title pw-text-neutral-700 text-truncate" title="Araştırma Merkezi Arşivi">Araştırma Merkezi Arşivi</span>
              </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item">
              <a href="/belgeler/#" class="menu-link py-1 px-0">
                <span class="menu-icon">
                  <i class="fa-solid fa-fish pw-text-primary-300"></i>
                </span>
                <span class="menu-title pw-text-neutral-700 text-truncate" title="Araştırma Merkezi Arşivi">Araştırma Merkezi Arşivi</span>
              </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item">
              <a href="/belgeler/#" class="menu-link py-1 px-0">
                <span class="menu-icon">
                  <i class="fa-solid fa-fish pw-text-primary-300"></i>
                </span>
                <span class="menu-title pw-text-neutral-700 text-truncate" title="Araştırma Merkezi Arşivi">Araştırma Merkezi Arşivi</span>
              </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item">
              <a href="/belgeler/#" class="menu-link py-1 px-0">
                <span class="menu-icon">
                  <i class="fa-solid fa-fish pw-text-primary-300"></i>
                </span>
                <span class="menu-title pw-text-neutral-700 text-truncate" title="Araştırma Merkezi Arşivi">Araştırma Merkezi Arşivi</span>
              </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item">
              <a href="/belgeler/#" class="menu-link py-1 px-0">
                <span class="menu-icon">
                  <i class="fa-solid fa-fish pw-text-primary-300"></i>
                </span>
                <span class="menu-title pw-text-neutral-700 text-truncate" title="Araştırma Merkezi Arşivi">Araştırma Merkezi Arşivi</span>
              </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item">
              <a href="/belgeler/#" class="menu-link py-1 px-0">
                <span class="menu-icon">
                  <i class="fa-solid fa-fish pw-text-primary-300"></i>
                </span>
                <span class="menu-title pw-text-neutral-700 text-truncate" title="Araştırma Merkezi Arşivi">Araştırma Merkezi Arşivi</span>
              </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item">
              <a href="/belgeler/#" class="menu-link py-1 px-0">
                <span class="menu-icon">
                  <i class="fa-solid fa-fish pw-text-primary-300"></i>
                </span>
                <span class="menu-title pw-text-neutral-700 text-truncate" title="Araştırma Merkezi Arşivi">Araştırma Merkezi Arşivi</span>
              </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item">
              <a href="/belgeler/#" class="menu-link py-1 px-0">
                <span class="menu-icon">
                  <i class="fa-solid fa-fish pw-text-primary-300"></i>
                </span>
                <span class="menu-title pw-text-neutral-700 text-truncate" title="Araştırma Merkezi Arşivi">Araştırma Merkezi Arşivi</span>
              </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item">
              <a href="/belgeler/#" class="menu-link py-1 px-0">
                <span class="menu-icon">
                  <i class="fa-solid fa-fish pw-text-primary-300"></i>
                </span>
                <span class="menu-title pw-text-neutral-700 text-truncate" title="Araştırma Merkezi Arşivi">Araştırma Merkezi Arşivi</span>
              </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item">
              <a href="/belgeler/#" class="menu-link py-1 px-0">
                <span class="menu-icon">
                  <i class="fa-solid fa-fish pw-text-primary-300"></i>
                </span>
                <span class="menu-title pw-text-neutral-700 text-truncate" title="Araştırma Merkezi Arşivi">Araştırma Merkezi Arşivi</span>
              </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item">
              <a href="/belgeler/#" class="menu-link py-1 px-0">
                <span class="menu-icon">
                  <i class="fa-solid fa-fish pw-text-primary-300"></i>
                </span>
                <span class="menu-title pw-text-neutral-700 text-truncate" title="Araştırma Merkezi Arşivi">Araştırma Merkezi Arşivi</span>
              </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item">
              <a href="/belgeler/#" class="menu-link py-1 px-0">
                <span class="menu-icon">
                  <i class="fa-solid fa-fish pw-text-primary-300"></i>
                </span>
                <span class="menu-title pw-text-neutral-700 text-truncate" title="Araştırma Merkezi Arşivi">Araştırma Merkezi Arşivi</span>
              </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item">
              <a href="/belgeler/#" class="menu-link py-1 px-0">
                <span class="menu-icon">
                  <i class="fa-solid fa-fish pw-text-primary-300"></i>
                </span>
                <span class="menu-title pw-text-neutral-700 text-truncate" title="Araştırma Merkezi Arşivi">Araştırma Merkezi Arşivi</span>
              </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item">
              <a href="/belgeler/#" class="menu-link py-1 px-0">
                <span class="menu-icon">
                  <i class="fa-solid fa-fish pw-text-primary-300"></i>
                </span>
                <span class="menu-title pw-text-neutral-700 text-truncate" title="Araştırma Merkezi Arşivi">Araştırma Merkezi Arşivi</span>
              </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item">
              <a href="/belgeler/#" class="menu-link py-1 px-0">
                <span class="menu-icon">
                  <i class="fa-solid fa-fish pw-text-primary-300"></i>
                </span>
                <span class="menu-title pw-text-neutral-700 text-truncate" title="Araştırma Merkezi Arşivi">Araştırma Merkezi Arşivi</span>
              </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item">
              <a href="/belgeler/#" class="menu-link py-1 px-0">
                <span class="menu-icon">
                  <i class="fa-solid fa-fish pw-text-primary-300"></i>
                </span>
                <span class="menu-title pw-text-neutral-700 text-truncate" title="Araştırma Merkezi Arşivi">Araştırma Merkezi Arşivi</span>
              </a>
            </div>
            <!--end::Menu item-->
          </div>
          <!--end::Menu-->
        </div>
        <!--end::Menu Col-->

        <!--begin::Content col-->
        <div class="col">
          <div id="contentCol">
            <!--begin::Card row-->
            <div class="row g-6">
              <!--begin::Card-->
              <div class="col-12 col-md-6 col-xl-4">
                <div class="position-relative d-flex flex-column gap-5 py-6 px-7 bg-white border rounded-3 pw-border-stroke pw-shadow-3 overflow-hidden h-100">
                  <!--begin::Content-->
                  <span class="pw-text-primary-900 fs-2 fw-bold z-index-1">915</span>
                  <span class="pw-text-neutral-500 fs-base fw-semibold z-index-1 text-truncate" title="Toplam Belge">Toplam Belge</span>
                  <!--end::Content-->

                  <!--begin::Icon-->
                  <div class="position-absolute" style="transform:rotate(10deg);top:-10px;right:-10px">
                    <i class="fa-solid fa-folder-open fs-5tx pw-text-neutral-200"></i>
                  </div>
                  <!--end::Icon-->
                </div>
              </div>
              <!--end::Card-->

              <!--begin::Card-->
              <div class="col-12 col-md-6 col-xl-4">
                <div class="position-relative d-flex flex-column gap-5 py-6 px-7 bg-white border rounded-3 pw-border-stroke pw-shadow-3 overflow-hidden h-100">
                  <!--begin::Content-->
                  <span class="pw-text-primary-900 fs-2 fw-bold z-index-1">759.53 Mb</span>
                  <span class="pw-text-neutral-500 fs-base fw-semibold z-index-1 text-truncate" title="Toplam Belge Boyutu">Toplam Belge Boyutu</span>
                  <!--end::Content-->

                  <!--begin::Icon-->
                  <div class="position-absolute" style="transform:rotate(10deg);top:-10px;right:-10px">
                    <i class="fa-solid fa-file-minus fs-5tx pw-text-neutral-200"></i>
                  </div>
                  <!--end::Icon-->
                </div>
              </div>
              <!--end::Card-->

              <!--begin::Card-->
              <div class="col-12 col-md-6 col-xl-4">
                <div class="position-relative d-flex flex-column gap-5 py-6 px-7 bg-white border rounded-3 pw-border-stroke pw-shadow-3 overflow-hidden h-100">
                  <!--begin::Content-->
                  <span class="pw-text-primary-900 fs-2 fw-bold z-index-1">872</span>
                  <span class="pw-text-neutral-500 fs-base fw-semibold z-index-1 text-truncate" title="Toplam Belge Boyutu">Toplam Belge Boyutu</span>
                  <!--end::Content-->

                  <!--begin::Icon-->
                  <div class="position-absolute" style="transform:rotate(10deg);top:-10px;right:-10px">
                    <i class="fa-solid fa-hard-drive fs-5tx pw-text-neutral-200"></i>
                  </div>
                  <!--end::Icon-->
                </div>
              </div>
              <!--end::Card-->

              <!--begin::Card-->
              <div class="col-12 col-md-6 col-xl-4">
                <div class="position-relative d-flex flex-column gap-5 py-6 px-7 bg-white border rounded-3 pw-border-stroke pw-shadow-3 overflow-hidden h-100">
                  <!--begin::Content-->
                  <span class="pw-text-primary-900 fs-2 fw-bold z-index-1">1,684</span>
                  <span class="pw-text-neutral-500 fs-base fw-semibold z-index-1 text-truncate" title="Klasör Sayısı">Klasör Sayısı</span>
                  <!--end::Content-->

                  <!--begin::Icon-->
                  <div class="position-absolute" style="transform:rotate(10deg);top:-10px;right:-10px">
                    <i class="fa-solid fa-folder-open fs-5tx pw-text-neutral-200"></i>
                  </div>
                  <!--end::Icon-->
                </div>
              </div>
              <!--end::Card-->

              <!--begin::Card-->
              <div class="col-12 col-md-6 col-xl-4">
                <div class="position-relative d-flex flex-column gap-5 py-6 px-7 bg-white border rounded-3 pw-border-stroke pw-shadow-3 overflow-hidden h-100">
                  <!--begin::Content-->
                  <span class="pw-text-primary-900 fs-2 fw-bold z-index-1">363</span>
                  <span class="pw-text-neutral-500 fs-base fw-semibold z-index-1 text-truncate" title="Toplam Eksik Belge">Toplam Eksik Belge</span>
                  <!--end::Content-->

                  <!--begin::Icon-->
                  <div class="position-absolute" style="transform:rotate(10deg);top:-10px;right:-10px">
                    <i class="fa-solid fa-file-minus fs-5tx pw-text-neutral-200"></i>
                  </div>
                  <!--end::Icon-->
                </div>
              </div>
              <!--end::Card-->

              <!--begin::Card-->
              <div class="col-12 col-md-6 col-xl-4">
                <div class="position-relative d-flex flex-column gap-5 py-5 px-7 bg-white border rounded-3 pw-border-stroke pw-shadow-3 overflow-hidden h-100">
                  <!--begin::Content-->
                  <span class="pw-text-primary-900 fs-2 fw-bold z-index-1">3</span>
                  <span class="pw-text-neutral-500 fs-base fw-semibold z-index-1 text-truncate" title="Toplam Kısa Yol">Toplam Kısa Yol</span>
                  <!--end::Content-->

                  <!--begin::Icon-->
                  <div class="position-absolute" style="transform:rotate(10deg);top:-10px;right:-10px">
                    <i class="fa-solid fa-hard-drive fs-5tx pw-text-neutral-200"></i>
                  </div>
                  <!--end::Icon-->
                </div>
              </div>
              <!--end::Card-->
            </div>
            <!--end::Card row-->

            <!--begin::Card row-->
            <div class="row g-6 mt-10">
              <!--begin::Card col-->
              <div class="col-12 col-xl-6">
                <!--begin::Col-->
                <div class="border rounded-3 pw-shadow-3 p-7 h-100">
                  <!--begin::Card header-->
                  <div class="d-flex justify-content-between gap-4 pb-4 border-bottom pw-border-stroke">
                    <!--begin::Title-->
                    <h3 class="pw-text-neutral-700 fs-5 fw-bolder mb-0">Check Out Yaptıklarım</h3>
                    <!--end::Title-->

                    <div class="d-flex align-items-center gap-4 ps-4 border-start pw-border-stroke">
                      <!--begin::Button-->
                      <button type="button" class="btn p-0">
                        <i class="fa-solid fa-chevrons-down fs-base pw-text-neutral-300"></i>
                      </button>
                      <!--end::Button-->

                      <!--begin::Button-->
                      <button type="button" class="btn p-0" data-bs-toggle="modal" data-bs-target="#check-out-yaptiklarim">
                        <i class="fa-solid fa-arrows-maximize fs-base pw-text-neutral-300"></i>
                      </button>
                      <!--end::Button-->
                    </div>
                  </div>
                  <!--end::Card header-->

                  <!--begin::Card body-->
                  <div class="py-4">
                    <!--begin::Table-->
                    <div class="table-responsive">
                      <table class="table mb-0 w-max-content">
                        <thead>
                          <tr class="fw-bold fs-9 pw-text-neutral-500 text-center border-bottom pw-border-stroke">
                            <th class="text-start">Nesne Adı</th>
                            <th>Tipi</th>
                            <th>Sahibi</th>
                            <th>Boyut</th>
                            <th class="text-end">Yaratılış Tarihi</th>
                          </tr>
                        </thead>
                      </table>
                    </div>
                    <!--end::begin::Table-->
                  </div>
                  <!--end::Card body-->
                </div>
                <!--end::Col-->
              </div>
              <!--end::Card col-->

              <!--begin::Card col-->
              <div class="col-12 col-xl-6">
                <!--begin::Col-->
                <div class="border rounded-3 pw-shadow-3 p-7 h-100">
                  <!--begin::Card header-->
                  <div class="d-flex justify-content-between gap-4 pb-4 border-bottom pw-border-stroke">
                    <!--begin::Title-->
                    <h3 class="pw-text-neutral-700 fs-5 fw-bolder mb-0">Arşiv Grafiği</h3>
                    <!--end::Title-->

                    <div class="d-flex align-items-center gap-4 ps-4 border-start pw-border-stroke">
                      <!--begin::Button-->
                      <button type="button" class="btn p-0">
                        <i class="fa-solid fa-chevrons-down fs-base pw-text-neutral-300"></i>
                      </button>
                      <!--end::Button-->

                      <!--begin::Button-->
                      <button type="button" class="btn p-0" data-bs-toggle="modal" data-bs-target="#arsiv-grafigi">
                        <i class="fa-solid fa-arrows-maximize fs-base pw-text-neutral-300"></i>
                      </button>
                      <!--end::Button-->
                    </div>
                  </div>
                  <!--end::Card header-->

                  <!--begin::Card body-->
                  <div class="py-4">
                    <!--begin::Chart-->
                    <canvas id="arsivGrafigiChart" class="mh-450px"></canvas>
                    <!--end::Chart-->
                  </div>
                  <!--end::Card body-->
                </div>
                <!--end::Col-->
              </div>
              <!--end::Card col-->

              <!--begin::Card col-->
              <div class="col-12 col-xl-6">
                <!--begin::Col-->
                <div class="border rounded-3 pw-shadow-3 p-7 h-100">
                  <!--begin::Card header-->
                  <div class="d-flex justify-content-between gap-4 pb-4 border-bottom pw-border-stroke">
                    <!--begin::Title-->
                    <h3 class="pw-text-neutral-700 fs-5 fw-bolder mb-0">Favorilerim</h3>
                    <!--end::Title-->

                    <div class="d-flex align-items-center gap-4 ps-4 border-start pw-border-stroke">
                      <!--begin::Button-->
                      <button type="button" class="btn p-0">
                        <i class="fa-solid fa-chevrons-down fs-base pw-text-neutral-300"></i>
                      </button>
                      <!--end::Button-->

                      <!--begin::Button-->
                      <button type="button" class="btn p-0" data-bs-toggle="modal" data-bs-target="#favorilerim">
                        <i class="fa-solid fa-arrows-maximize fs-base pw-text-neutral-300"></i>
                      </button>
                      <!--end::Button-->
                    </div>
                  </div>
                  <!--end::Card header-->

                  <!--begin::Card body-->
                  <div class="py-4">
                    <!--begin::Table-->
                    <div class="table-responsive fs-9 pw-text-neutral-700">
                      <table class="table mb-0 w-max-content">
                        <thead>
                          <tr class="fw-bold pw-text-neutral-500 border-bottom pw-border-stroke text-center">
                            <th class="text-start">Nesne Adı</th>
                            <th>Tipi</th>
                            <th>Sahibi</th>
                            <th>Boyut</th>
                            <th class="text-end">Yaratılış Tarihi</th>
                          </tr>
                        </thead>
                        <tbody class="text-center">
                          <!--begin::Row-->
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-2">
                                <i class="fa-solid fa-folder-plus fs-8 pw-text-primary-500"></i>
                                <span>Eklenti</span>
                              </div>
                            </td>
                            <td>Araştır...</td>
                            <td>
                              <span id="testTool" class="fw-bolder cursor-pointer" data-bs-toggle="popover" data-bs-html="true" data-bs-placement="bottom" data-bs-custom-class="popover-inverse" data-bs-content="<table class='table fw-bold fs-9 text-white align-middle gx-1 gy-2'><tr><td class='pw-text-warning-500'>Nesne Adı:</td><td>Araştırma DK Şablonu</td></tr><tr><td class='pw-text-warning-500'>Tip Adı:</td><td>Araştırma Dosya Kartı Tipi</td></tr><tr><td class='pw-text-warning-500'>Tarih:</td><td>31/05/2023 - 15:30:04</td></tr><tr><td class='pw-text-warning-500'>Sahibi:</td><td>UIDESK</td></tr></table><div class='d-flex align-items-center gap-4 mt-6'><a href='javascript:void(0)'><i class='fa-solid fa-heart fs-8 pw-text-neutral-300'></i></a><a href='javascript:void(0)'><i class='fa-solid fa-star-sharp fs-8 pw-text-neutral-300'></i></a><a href='javascript:void(0)'><i class='fa-solid fa-clock-rotate-left fs-8 pw-text-neutral-300'></i></a><a href='javascript:void(0)'><i class='fa-solid fa-messages fs-8 pw-text-neutral-300'></i></a><a href='javascript:void(0)'><i class='fa-solid fa-message fs-8 pw-text-neutral-300'></i></a><a href='javascript:void(0)'><i class='fa-solid fa-lock fs-8 pw-text-neutral-300'></i></a></div>">
                                UIDESK
                              </span>
                            </td>
                            <td>-</td>
                            <td class="text-end">31/05/20...</td>
                          </tr>
                          <!--end::Row-->

                          <!--begin::Row-->
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-2">
                                <i class="fa-solid fa-folder-plus fs-8 pw-text-primary-500"></i>
                                <span>Eklenti</span>
                              </div>
                            </td>
                            <td>Araştır...</td>
                            <td>UIDESK</td>
                            <td>-</td>
                            <td class="text-end">31/05/20...</td>
                          </tr>
                          <!--end::Row-->

                          <!--begin::Row-->
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-2">
                                <i class="fa-solid fa-folder-plus fs-8 pw-text-primary-500"></i>
                                <span>Görev Atama</span>
                              </div>
                            </td>
                            <td>Araştır...</td>
                            <td>UIDESK</td>
                            <td>-</td>
                            <td class="text-end">31/05/20...</td>
                          </tr>
                          <!--end::Row-->

                          <!--begin::Row-->
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-2">
                                <i class="fa-solid fa-file-lines fs-8 pw-text-primary-500"></i>
                                <span>Genel</span>
                              </div>
                            </td>
                            <td>Araştır...</td>
                            <td>UIDESK</td>
                            <td>-</td>
                            <td class="text-end">31/05/20...</td>
                          </tr>
                          <!--end::Row-->

                          <!--begin::Row-->
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-2">
                                <i class="fa-solid fa-file-lines fs-8 pw-text-primary-500"></i>
                                <span>Anket Taslak</span>
                              </div>
                            </td>
                            <td>Araştır...</td>
                            <td>UIDESK</td>
                            <td>-</td>
                            <td class="text-end">31/05/20...</td>
                          </tr>
                          <!--end::Row-->

                          <!--begin::Row-->
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-2">
                                <i class="fa-solid fa-file-lines fs-8 pw-text-primary-500"></i>
                                <span>Screenshots</span>
                              </div>
                            </td>
                            <td>Araştır...</td>
                            <td>UIDESK</td>
                            <td>-</td>
                            <td class="text-end">31/05/20...</td>
                          </tr>
                          <!--end::Row-->

                          <!--begin::Row-->
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-2">
                                <i class="fa-solid fa-folder-plus fs-8 pw-text-primary-500"></i>
                                <span>Araştırma D...</span>
                              </div>
                            </td>
                            <td>Araştır...</td>
                            <td>UIDESK</td>
                            <td>-</td>
                            <td class="text-end">31/05/20...</td>
                          </tr>
                          <!--end::Row-->

                          <!--begin::Row-->
                          <tr></tr>
                          <td>
                            <div class="d-flex align-items-center gap-2">
                              <i class="fa-solid fa-file-lines fs-8 pw-text-primary-500"></i>
                              <span>Araştırma D...</span>
                            </div>
                          </td>
                          <td>Araştır...</td>
                          <td>UIDESK</td>
                          <td>-</td>
                          <td class="text-end">31/05/20...</td>
                          </tr>
                          <!--end::Row-->
                        </tbody>
                      </table>
                    </div>
                    <!--end::begin::Table-->
                  </div>
                  <!--end::Card body-->
                </div>
                <!--end::Col-->
              </div>
              <!--end::Card col-->

              <!--begin::Card col-->
              <div class="col-12 col-xl-6">
                <!--begin::Col-->
                <div class="border rounded-3 pw-shadow-3 p-7 h-100">
                  <!--begin::Card header-->
                  <div class="d-flex justify-content-between gap-4 pb-4 border-bottom pw-border-stroke">
                    <!--begin::Title-->
                    <h3 class="pw-text-neutral-700 fs-5 fw-bolder mb-0">Kaydettiklerim</h3>
                    <!--end::Title-->

                    <div class="d-flex align-items-center gap-4 ps-4 border-start pw-border-stroke">
                      <!--begin::Button-->
                      <button type="button" class="btn p-0">
                        <i class="fa-solid fa-chevrons-down fs-base pw-text-neutral-300"></i>
                      </button>
                      <!--end::Button-->

                      <!--begin::Button-->
                      <button type="button" class="btn p-0" data-bs-toggle="modal" data-bs-target="#kaydettiklerim">
                        <i class="fa-solid fa-arrows-maximize fs-base pw-text-neutral-300"></i>
                      </button>
                      <!--end::Button-->
                    </div>
                  </div>
                  <!--end::Card header-->

                  <!--begin::Card body-->
                  <div class="py-4">
                    <!--begin::Table-->
                    <div class="table-responsive fs-9 pw-text-neutral-700">
                      <table class="table mb-0 w-max-content">
                        <thead>
                          <tr class="fw-bold pw-text-neutral-500 border-bottom pw-border-stroke text-center">
                            <th class="text-start">Nesne Adı</th>
                            <th>Tipi</th>
                            <th>Sahibi</th>
                            <th>Boyut</th>
                            <th class="text-end">Yaratılış Tarihi</th>
                          </tr>
                        </thead>
                        <tbody class="text-center">
                          <!--begin::Row-->
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-2">
                                <i class="fa-solid fa-folder-plus fs-8 pw-text-primary-500"></i>
                                <span>Araştırma D...</span>
                              </div>
                            </td>
                            <td>Araştır</td>
                            <td>UIDESK</td>
                            <td>-</td>
                            <td class="text-end">31/05/20...</td>
                          </tr>
                          <!--end::Row-->

                          <!--begin::Row-->
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-2">
                                <i class="fa-solid fa-folder-plus fs-8 pw-text-primary-500"></i>
                                <span>Araştırma D...</span>
                              </div>
                            </td>
                            <td>Araştır</td>
                            <td>UIDESK</td>
                            <td>-</td>
                            <td class="text-end">31/05/20...</td>
                          </tr>
                          <!--end::Row-->

                          <!--begin::Row-->
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-2">
                                <i class="fa-solid fa-folder-plus fs-8 pw-text-primary-500"></i>
                                <span>Araştırma D...</span>
                              </div>
                            </td>
                            <td>Araştır</td>
                            <td>UIDESK</td>
                            <td>-</td>
                            <td class="text-end">31/05/20...</td>
                          </tr>
                          <!--end::Row-->

                          <!--begin::Row-->
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-2">
                                <i class="fa-solid fa-folder-plus fs-8 pw-text-primary-500"></i>
                                <span>Araştırma D...</span>
                              </div>
                            </td>
                            <td>Araştır</td>
                            <td>UIDESK</td>
                            <td>-</td>
                            <td class="text-end">31/05/20...</td>
                          </tr>
                          <!--end::Row-->

                          <!--begin::Row-->
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-2">
                                <i class="fa-solid fa-folder-plus fs-8 pw-text-primary-500"></i>
                                <span>Araştırma D...</span>
                              </div>
                            </td>
                            <td>Araştır</td>
                            <td>UIDESK</td>
                            <td>-</td>
                            <td class="text-end">31/05/20...</td>
                          </tr>
                          <!--end::Row-->

                          <!--begin::Row-->
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-2">
                                <i class="fa-solid fa-folder-plus fs-8 pw-text-primary-500"></i>
                                <span>Araştırma D...</span>
                              </div>
                            </td>
                            <td>Araştır</td>
                            <td>UIDESK</td>
                            <td>-</td>
                            <td class="text-end">31/05/20...</td>
                          </tr>
                          <!--end::Row-->

                          <!--begin::Row-->
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-2">
                                <i class="fa-solid fa-folder-plus fs-8 pw-text-primary-500"></i>
                                <span>Araştırma D...</span>
                              </div>
                            </td>
                            <td>Araştır</td>
                            <td>UIDESK</td>
                            <td>-</td>
                            <td class="text-end">31/05/20...</td>
                          </tr>
                          <!--end::Row-->

                          <!--begin::Row-->
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-2">
                                <i class="fa-solid fa-folder-plus fs-8 pw-text-primary-500"></i>
                                <span>Araştırma D...</span>
                              </div>
                            </td>
                            <td>Araştır</td>
                            <td>UIDESK</td>
                            <td>-</td>
                            <td class="text-end">31/05/20...</td>
                          </tr>
                          <!--end::Row-->
                        </tbody>
                      </table>
                    </div>
                    <!--end::begin::Table-->
                  </div>
                  <!--end::Card body-->
                </div>
                <!--end::Col-->
              </div>
              <!--end::Card col-->

              <!--begin::Card col-->
              <div class="col-12 col-xl-6">
                <!--begin::Col-->
                <div class="border rounded-3 pw-shadow-3 p-7 h-100">
                  <!--begin::Card header-->
                  <div class="d-flex justify-content-between gap-4 pb-4 border-bottom pw-border-stroke">
                    <!--begin::Title-->
                    <h3 class="pw-text-neutral-700 fs-5 fw-bolder mb-0">Görüntülediklerim</h3>
                    <!--end::Title-->

                    <div class="d-flex align-items-center gap-4 ps-4 border-start pw-border-stroke">
                      <!--begin::Button-->
                      <button type="button" class="btn p-0">
                        <i class="fa-solid fa-chevrons-down fs-base pw-text-neutral-300"></i>
                      </button>
                      <!--end::Button-->

                      <!--begin::Button-->
                      <button type="button" class="btn p-0" data-bs-toggle="modal" data-bs-target="#goruntulediklerim">
                        <i class="fa-solid fa-arrows-maximize fs-base pw-text-neutral-300"></i>
                      </button>
                      <!--end::Button-->
                    </div>
                  </div>
                  <!--end::Card header-->

                  <!--begin::Card body-->
                  <div class="py-4">
                    <!--begin::Table-->
                    <div class="table-responsive fs-9 pw-text-neutral-700">
                      <table class="table pw-table-text-overflow mb-0">
                        <thead>
                          <tr class="fw-bold pw-text-neutral-500 border-bottom pw-border-stroke text-center">
                            <th class="text-start">Nesne Adı</th>
                            <th>Tipi</th>
                            <th>Sahibi</th>
                            <th>Boyut</th>
                            <th class="text-end">Yaratılış Tarihi</th>
                          </tr>
                        </thead>
                        <tbody class="text-center">
                          <!--begin::Row-->
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-2">
                                <i class="fa-solid fa-file-lines fs-8 pw-text-primary-500"></i>
                                <span>10.21224-jj...</span>
                              </div>
                            </td>
                            <td>KT Ne..</td>
                            <td>Ezgi Çelik</td>
                            <td>1.64 Mb</td>
                            <td class="text-end">31/05/2023</td>
                          </tr>
                          <!--end::Row-->

                          <!--begin::Row-->
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-2">
                                <i class="fa-solid fa-file-lines fs-8 pw-text-primary-500"></i>
                                <span>3</span>
                              </div>
                            </td>
                            <td>Araştır</td>
                            <td>Cemil Cih..</td>
                            <td>1.64 Mb</td>
                            <td class="text-end">31/05/2023</td>
                          </tr>
                          <!--end::Row-->

                          <!--begin::Row-->
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-2">
                                <i class="fa-solid fa-file-lines fs-8 pw-text-primary-500"></i>
                                <span>Avans Talep</span>
                              </div>
                            </td>
                            <td>Fatura</td>
                            <td>Ezgi Çelik</td>
                            <td>1.64 Mb</td>
                            <td class="text-end">31/05/2023</td>
                          </tr>
                          <!--end::Row-->

                          <!--begin::Row-->
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-2">
                                <i class="fa-solid fa-file-lines fs-8 pw-text-primary-500"></i>
                                <span>Belge Taslak</span>
                              </div>
                            </td>
                            <td>Araştır</td>
                            <td>Ezgi Çelik</td>
                            <td>1.64 Mb</td>
                            <td class="text-end">31/05/2023</td>
                          </tr>
                          <!--end::Row-->

                          <!--begin::Row-->
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-2">
                                <i class="fa-solid fa-file-lines fs-8 pw-text-primary-500"></i>
                                <span>Blue</span>
                              </div>
                            </td>
                            <td>Araştır</td>
                            <td>Cemil Cih...</td>
                            <td>1.64 Mb</td>
                            <td class="text-end">31/05/2023</td>
                          </tr>
                          <!--end::Row-->

                          <!--begin::Row-->
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-2">
                                <i class="fa-solid fa-file-lines fs-8 pw-text-primary-500"></i>
                                <span>Bluee.min</span>
                              </div>
                            </td>
                            <td>Araştır</td>
                            <td>Ezgi Çelik</td>
                            <td>1.64 Mb</td>
                            <td class="text-end">31/05/2023</td>
                          </tr>
                          <!--end::Row-->

                          <!--begin::Row-->
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-2">
                                <i class="fa-solid fa-file-lines fs-8 pw-text-primary-500"></i>
                                <span>Belge Taslak</span>
                              </div>
                            </td>
                            <td>Araştır</td>
                            <td>UIDESK</td>
                            <td>1.64 Mb</td>
                            <td class="text-end">31/05/2023</td>
                          </tr>
                          <!--end::Row-->

                          <!--begin::Row-->
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-2">
                                <i class="fa-solid fa-file-lines fs-8 pw-text-primary-500"></i>
                                <span>Avans Talep</span>
                              </div>
                            </td>
                            <td>Araştır</td>
                            <td>UIDESK</td>
                            <td>1.64 Mb</td>
                            <td class="text-end">31/05/2023</td>
                          </tr>
                          <!--end::Row-->

                          <!--begin::Row-->
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-2">
                                <i class="fa-solid fa-file-lines fs-8 pw-text-primary-500"></i>
                                <span>Araştırma D...</span>
                              </div>
                            </td>
                            <td>Araştır</td>
                            <td>UIDESK</td>
                            <td>1.64 Mb</td>
                            <td class="text-end">31/05/2023</td>
                          </tr>
                          <!--end::Row-->
                        </tbody>
                      </table>
                    </div>
                    <!--end::begin::Table-->
                  </div>
                  <!--end::Card body-->
                </div>
                <!--end::Col-->
              </div>
              <!--end::Card col-->

              <!--begin::Card col-->
              <div class="col-12 col-xl-6">
                <!--begin::Col-->
                <div class="border rounded-3 pw-shadow-3 p-7 h-100">
                  <!--begin::Card header-->
                  <div class="d-flex justify-content-between gap-4 pb-4 border-bottom pw-border-stroke">
                    <div class="d-flex align-items-center justify-content-between gap-3 flex-fill">
                      <!--begin::Title-->
                      <h3 class="pw-text-neutral-700 fs-5 fw-bolder mb-0">Aktiviteler</h3>
                      <!--end::Title-->

                      <!--begin::User Select-->
                      <div class="form-floating border rounded">
                        <select class="form-select fs-9 pw-text-neutral-500 py-1 ps-2 pe-4 pw-border-stroke pw-bg-neutral-50" placeholder="Seçim Yapın" id="pw_aktiviteler_user">
                          <option></option>
                          <option value="0" data-pw-select2-icon="fa-solid fa-user fs-9 pw-text-neutral-500" selected>Benim
                          </option>
                        </select>
                      </div>
                      <!--end::User Select-->
                    </div>

                    <div class="d-flex align-items-center gap-4 ps-4 border-start pw-border-stroke">
                      <!--begin::Button-->
                      <button type="button" class="btn p-0">
                        <i class="fa-solid fa-arrows-rotate fs-base pw-text-neutral-300"></i>
                      </button>
                      <!--end::Button-->

                      <!--begin::Button-->
                      <button type="button" class="btn p-0">
                        <i class="fa-solid fa-chevrons-down fs-base pw-text-neutral-300"></i>
                      </button>
                      <!--end::Button-->

                      <!--begin::Button-->
                      <button type="button" class="btn p-0" data-bs-toggle="modal" data-bs-target="#aktiviteler">
                        <i class="fa-solid fa-arrows-maximize fs-base pw-text-neutral-300"></i>
                      </button>
                      <!--end::Button-->
                    </div>
                  </div>
                  <!--end::Card header-->

                  <!--begin::Card body-->
                  <div class="pt-4">
                    <!--begin::Table-->
                    <div class="table-responsive fs-9 pw-text-neutral-700">
                      <table class="table pw-table-text-overflow gy-2 mb-0">
                        <tbody>
                          <!--begin::Row-->
                          <tr>
                            <td>
                              <!--begin::Checkbox-->
                              <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                                <input class="form-check-input" type="checkbox" value="" id="pw_aktiviteler_1" checked="checked" />
                                <label class="form-check-label pw-text-neutral-700 fs-8" for="pw_aktiviteler_1">
                                  UIDESK tarafından check-out iptal edildi.
                                </label>
                              </div>
                              <!--end::Checkbox-->
                            </td>
                            <td class="pw-text-neutral-400 text-end">Perşembe 11:58:04</td>
                          </tr>
                          <!--end::Row-->

                          <!--begin::Row-->
                          <tr>
                            <td>
                              <!--begin::Checkbox-->
                              <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                                <input class="form-check-input" type="checkbox" value="" id="pw_aktiviteler_2" checked="checked" />
                                <label class="form-check-label pw-text-neutral-700 fs-8" for="pw_aktiviteler_2">
                                  UIDESK tarafından Anket Kullanıcı Raporu isimli raporu çalıştırdı.
                                </label>
                              </div>
                              <!--end::Checkbox-->
                            </td>
                            <td class="pw-text-neutral-400 text-end">Salı 16:31:26</td>
                          </tr>
                          <!--end::Row-->

                          <!--begin::Row-->
                          <tr>
                            <td>
                              <!--begin::Checkbox-->
                              <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                                <input class="form-check-input" type="checkbox" value="" id="pw_aktiviteler_3" checked="checked" />
                                <label class="form-check-label pw-text-neutral-700 fs-8" for="pw_aktiviteler_3">
                                  UIDESK tarafından yeni dosya kartı kaydı oluşturuldu.
                                </label>
                              </div>
                              <!--end::Checkbox-->
                            </td>
                            <td class="pw-text-neutral-400 text-end">Perşembe 11:58:04</td>
                          </tr>
                          <!--end::Row-->

                          <!--begin::Row-->
                          <tr>
                            <td>
                              <!--begin::Checkbox-->
                              <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                                <input class="form-check-input" type="checkbox" value="" id="pw_aktiviteler_4" checked="checked" />
                                <label class="form-check-label pw-text-neutral-700 fs-8" for="pw_aktiviteler_4">
                                  UIDESK tarafından klasör eklendi.
                                </label>
                              </div>
                              <!--end::Checkbox-->
                            </td>
                            <td class="pw-text-neutral-400 text-end">31.05.2023 12:31:01</td>
                          </tr>
                          <!--end::Row-->

                          <!--begin::Row-->
                          <tr>
                            <td>
                              <!--begin::Checkbox-->
                              <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                                <input class="form-check-input" type="checkbox" value="" id="pw_aktiviteler_4" checked="checked" />
                                <label class="form-check-label pw-text-neutral-700 fs-8" for="pw_aktiviteler_4">
                                  UIDESK tarafından klasör eklendi.
                                </label>
                              </div>
                              <!--end::Checkbox-->
                            </td>
                            <td class="pw-text-neutral-400 text-end">31.05.2023 12:31:01</td>
                          </tr>
                          <!--end::Row-->

                          <!--begin::Row-->
                          <tr>
                            <td>
                              <!--begin::Checkbox-->
                              <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                                <input class="form-check-input" type="checkbox" value="" id="pw_aktiviteler_5" checked="checked" />
                                <label class="form-check-label pw-text-neutral-700 fs-8" for="pw_aktiviteler_5">
                                  UIDESK tarafından yeni dosya kartı kaydı oluşturuldu.
                                </label>
                              </div>
                              <!--end::Checkbox-->
                            </td>
                            <td class="pw-text-neutral-400 text-end">31.05.2023 12:31:01</td>
                          </tr>
                          <!--end::Row-->

                          <!--begin::Row-->
                          <tr>
                            <td>
                              <!--begin::Checkbox-->
                              <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                                <input class="form-check-input" type="checkbox" value="" id="pw_aktiviteler_6" checked="checked" />
                                <label class="form-check-label pw-text-neutral-700 fs-8" for="pw_aktiviteler_6">
                                  UIDESK tarafından check-out iptal edildi.
                                </label>
                              </div>
                              <!--end::Checkbox-->
                            </td>
                            <td class="pw-text-neutral-400 text-end">31.05.2023 12:31:01</td>
                          </tr>
                          <!--end::Row-->

                          <!--begin::Row-->
                          <tr>
                            <td>
                              <!--begin::Checkbox-->
                              <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                                <input class="form-check-input" type="checkbox" value="" id="pw_aktiviteler_6" checked="checked" />
                                <label class="form-check-label pw-text-neutral-700 fs-8" for="pw_aktiviteler_6">
                                  UIDESK tarafından check-out iptal edildi.
                                </label>
                              </div>
                              <!--end::Checkbox-->
                            </td>
                            <td class="pw-text-neutral-400 text-end">31.05.2023 12:31:01</td>
                          </tr>
                          <!--end::Row-->

                          <!--begin::Row-->
                          <tr>
                            <td>
                              <!--begin::Checkbox-->
                              <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                                <input class="form-check-input" type="checkbox" value="" id="pw_aktiviteler_6" checked="checked" />
                                <label class="form-check-label pw-text-neutral-700 fs-8" for="pw_aktiviteler_6">
                                  UIDESK tarafından check-out iptal edildi.
                                </label>
                              </div>
                              <!--end::Checkbox-->
                            </td>
                            <td class="pw-text-neutral-400 text-end">31.05.2023 12:31:01</td>
                          </tr>
                          <!--end::Row-->

                          <!--begin::Row-->
                          <tr>
                            <td>
                              <!--begin::Checkbox-->
                              <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                                <input class="form-check-input" type="checkbox" value="" id="pw_aktiviteler_6" checked="checked" />
                                <label class="form-check-label pw-text-neutral-700 fs-8" for="pw_aktiviteler_6">
                                  UIDESK tarafından check-out iptal edildi.
                                </label>
                              </div>
                              <!--end::Checkbox-->
                            </td>
                            <td class="pw-text-neutral-400 text-end">31.05.2023 12:31:01</td>
                          </tr>
                          <!--end::Row-->
                        </tbody>
                      </table>
                    </div>
                    <!--end::begin::Table-->
                  </div>
                  <!--end::Card body-->
                </div>
                <!--end::Col-->
              </div>
              <!--end::Card col-->
            </div>
            <!--end::Card row-->
          </div>
        </div>
        <!--end::Content col-->
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

<!--begin::Modal-->
<div class="modal bg-body fade" tabindex="-1" id="arsiv-grafigi">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content shadow-none p-7">
      <!--begin::Card header-->
      <div class="d-flex justify-content-between gap-4 pb-4 border-bottom pw-border-stroke">
        <!--begin::Title-->
        <h3 class="pw-text-neutral-700 fs-5 fw-bolder mb-0">Arşiv Grafiği</h3>
        <!--end::Title-->

        <div class="d-flex align-items-center gap-4 ps-4 border-start pw-border-stroke">
          <!--begin::Button-->
          <button type="button" class="btn p-0">
            <i class="fa-solid fa-chevrons-down fs-base pw-text-neutral-300"></i>
          </button>
          <!--end::Button-->

          <!--begin::Button-->
          <button type="button" class="btn p-0" data-bs-dismiss="modal" aria-label="Close">
            <i class="fa-solid fa-arrows-minimize fs-base pw-text-neutral-300"></i>
          </button>
          <!--end::Button-->
        </div>
      </div>
      <!--end::Card header-->

      <!--begin::Card body-->
      <div class="py-4">
        <!--begin::Chart-->
        <canvas id="arsivGrafigiChart2" class="mh-450px"></canvas>
        <!--end::Chart-->
      </div>
      <!--end::Card body-->
    </div>
  </div>
</div>
<!--end::Modal-->

<!--begin::Modal-->
<div class="modal bg-body fade" tabindex="-1" id="kaydettiklerim">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content shadow-none p-7">
      <!--begin::Card header-->
      <div class="d-flex justify-content-between gap-4 pb-4 border-bottom pw-border-stroke">
        <!--begin::Title-->
        <h3 class="pw-text-neutral-700 fs-5 fw-bolder mb-0">Kaydettiklerim</h3>
        <!--end::Title-->

        <div class="d-flex align-items-center gap-4 ps-4 border-start pw-border-stroke">
          <!--begin::Button-->
          <button type="button" class="btn p-0">
            <i class="fa-solid fa-chevrons-down fs-base pw-text-neutral-300"></i>
          </button>
          <!--end::Button-->

          <!--begin::Button-->
          <button type="button" class="btn p-0" data-bs-dismiss="modal" aria-label="Close">
            <i class="fa-solid fa-arrows-minimize fs-base pw-text-neutral-300"></i>
          </button>
          <!--end::Button-->
        </div>
      </div>
      <!--end::Card header-->

      <!--begin::Card body-->
      <div class="py-4">
        <!--begin::Table-->
        <div class="table-responsive fs-9 pw-text-neutral-700">
          <table class="table mb-0">
            <thead>
              <tr class="fw-bold pw-text-neutral-500 border-bottom pw-border-stroke text-center">
                <th>Nesne Adı</th>
                <th>Tipi</th>
                <th>Sahibi</th>
                <th>Boyut</th>
                <th>Yaratılış Tarihi</th>
              </tr>
            </thead>
            <tbody class="text-center">
              <!--begin::Row-->
              <tr>
                <td>
                  <div class="d-flex align-items-center justify-content-center gap-2">
                    <i class="fa-solid fa-folder-plus fs-8 pw-text-primary-500"></i>
                    <span>Araştırma DK Şablonu</span>
                  </div>
                </td>
                <td>Araştır</td>
                <td>UIDESK</td>
                <td>-</td>
                <td>31.05.2023 12:31:03</td>
              </tr>
              <!--end::Row-->

              <!--begin::Row-->
              <tr>
                <td>
                  <div class="d-flex align-items-center justify-content-center gap-2">
                    <i class="fa-solid fa-folder-plus fs-8 pw-text-primary-500"></i>
                    <span>Araştırma DK Şablonu</span>
                  </div>
                </td>
                <td>Araştır</td>
                <td>UIDESK</td>
                <td>-</td>
                <td>31.05.2023 12:31:03</td>
              </tr>
              <!--end::Row-->

              <!--begin::Row-->
              <tr>
                <td>
                  <div class="d-flex align-items-center justify-content-center gap-2">
                    <i class="fa-solid fa-folder-plus fs-8 pw-text-primary-500"></i>
                    <span>Araştırma DK Şablonu</span>
                  </div>
                </td>
                <td>Araştır</td>
                <td>UIDESK</td>
                <td>-</td>
                <td>31.05.2023 12:31:03</td>
              </tr>
              <!--end::Row-->

              <!--begin::Row-->
              <tr>
                <td>
                  <div class="d-flex align-items-center justify-content-center gap-2">
                    <i class="fa-solid fa-folder-plus fs-8 pw-text-primary-500"></i>
                    <span>Araştırma DK Şablonu</span>
                  </div>
                </td>
                <td>Araştır</td>
                <td>UIDESK</td>
                <td>-</td>
                <td>31.05.2023 12:31:03</td>
              </tr>
              <!--end::Row-->

              <!--begin::Row-->
              <tr>
                <td>
                  <div class="d-flex align-items-center justify-content-center gap-2">
                    <i class="fa-solid fa-folder-plus fs-8 pw-text-primary-500"></i>
                    <span>Araştırma DK Şablonu</span>
                  </div>
                </td>
                <td>Araştır</td>
                <td>UIDESK</td>
                <td>-</td>
                <td>31.05.2023 12:31:03</td>
              </tr>
              <!--end::Row-->

              <!--begin::Row-->
              <tr>
                <td>
                  <div class="d-flex align-items-center justify-content-center gap-2">
                    <i class="fa-solid fa-folder-plus fs-8 pw-text-primary-500"></i>
                    <span>Araştırma DK Şablonu</span>
                  </div>
                </td>
                <td>Araştır</td>
                <td>UIDESK</td>
                <td>-</td>
                <td>31.05.2023 12:31:03</td>
              </tr>
              <!--end::Row-->

              <!--begin::Row-->
              <tr>
                <td>
                  <div class="d-flex align-items-center justify-content-center gap-2">
                    <i class="fa-solid fa-folder-plus fs-8 pw-text-primary-500"></i>
                    <span>Araştırma DK Şablonu</span>
                  </div>
                </td>
                <td>Araştır</td>
                <td>UIDESK</td>
                <td>-</td>
                <td>31.05.2023 12:31:03</td>
              </tr>
              <!--end::Row-->

              <!--begin::Row-->
              <tr>
                <td>
                  <div class="d-flex align-items-center justify-content-center gap-2">
                    <i class="fa-solid fa-folder-plus fs-8 pw-text-primary-500"></i>
                    <span>Araştırma DK Şablonu</span>
                  </div>
                </td>
                <td>Araştır</td>
                <td>UIDESK</td>
                <td>-</td>
                <td>31.05.2023 12:31:03</td>
              </tr>
              <!--end::Row-->
            </tbody>
          </table>
        </div>
        <!--end::begin::Table-->
      </div>
      <!--end::Card body-->
    </div>
  </div>
</div>
<!--end::Modal-->

<!--begin::Modal-->
<div class="modal bg-body fade" tabindex="-1" id="goruntulediklerim">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content shadow-none p-7">
      <!--begin::Card header-->
      <div class="d-flex justify-content-between gap-4 pb-4 border-bottom pw-border-stroke">
        <!--begin::Title-->
        <h3 class="pw-text-neutral-700 fs-5 fw-bolder mb-0">Görüntülediklerim</h3>
        <!--end::Title-->

        <div class="d-flex align-items-center gap-4 ps-4 border-start pw-border-stroke">
          <!--begin::Button-->
          <button type="button" class="btn p-0">
            <i class="fa-solid fa-chevrons-down fs-base pw-text-neutral-300"></i>
          </button>
          <!--end::Button-->

          <!--begin::Button-->
          <button type="button" class="btn p-0" data-bs-toggle="modal" data-bs-target="#goruntulediklerim">
            <i class="fa-solid fa-arrows-maximize fs-base pw-text-neutral-300"></i>
          </button>
          <!--end::Button-->
        </div>
      </div>
      <!--end::Card header-->

      <!--begin::Card body-->
      <div class="py-4">
        <!--begin::Table-->
        <div class="table-responsive fs-9 pw-text-neutral-700">
          <table class="table pw-table-text-overflow mb-0 w-max-content">
            <thead>
              <tr class="fw-bold pw-text-neutral-500 border-bottom pw-border-stroke text-center">
                <th>Nesne Adı</th>
                <th>Tipi</th>
                <th>Sahibi</th>
                <th>Boyut</th>
                <th>Yaratılış Tarihi</th>
              </tr>
            </thead>
            <tbody class="text-center">
              <!--begin::Row-->
              <tr>
                <td>
                  <div class="d-flex align-items-center justify-content-center gap-2">
                    <i class="fa-solid fa-file-lines fs-8 pw-text-primary-500"></i>
                    <span>10.21597-jist.817900-136921</span>
                  </div>
                </td>
                <td>KT Nesne Verileri</td>
                <td>Ezgi Çelik</td>
                <td>1.64 Mb</td>
                <td>16.01.2023 13:36:08</td>
              </tr>
              <!--end::Row-->

              <!--begin::Row-->
              <tr>
                <td>
                  <div class="d-flex align-items-center justify-content-center gap-2">
                    <i class="fa-solid fa-file-lines fs-8 pw-text-primary-500"></i>
                    <span>3</span>
                  </div>
                </td>
                <td>Araştır</td>
                <td>Cemil Cih..</td>
                <td>1.64 Mb</td>
                <td>31/05/2023</td>
              </tr>
              <!--end::Row-->

              <!--begin::Row-->
              <tr>
                <td>
                  <div class="d-flex align-items-center justify-content-center gap-2">
                    <i class="fa-solid fa-file-lines fs-8 pw-text-primary-500"></i>
                    <span>Avans Talep</span>
                  </div>
                </td>
                <td>Fatura</td>
                <td>Ezgi Çelik</td>
                <td>1.64 Mb</td>
                <td>31/05/2023</td>
              </tr>
              <!--end::Row-->

              <!--begin::Row-->
              <tr>
                <td>
                  <div class="d-flex align-items-center justify-content-center gap-2">
                    <i class="fa-solid fa-file-lines fs-8 pw-text-primary-500"></i>
                    <span>Belge Taslak</span>
                  </div>
                </td>
                <td>Araştır</td>
                <td>Ezgi Çelik</td>
                <td>1.64 Mb</td>
                <td>31/05/2023</td>
              </tr>
              <!--end::Row-->

              <!--begin::Row-->
              <tr>
                <td>
                  <div class="d-flex align-items-center justify-content-center gap-2">
                    <i class="fa-solid fa-file-lines fs-8 pw-text-primary-500"></i>
                    <span>Blue</span>
                  </div>
                </td>
                <td>Araştır</td>
                <td>Cemil Cih...</td>
                <td>1.64 Mb</td>
                <td>31/05/2023</td>
              </tr>
              <!--end::Row-->

              <!--begin::Row-->
              <tr>
                <td>
                  <div class="d-flex align-items-center justify-content-center gap-2">
                    <i class="fa-solid fa-file-lines fs-8 pw-text-primary-500"></i>
                    <span>Bluee.min</span>
                  </div>
                </td>
                <td>Araştır</td>
                <td>Ezgi Çelik</td>
                <td>1.64 Mb</td>
                <td>31/05/2023</td>
              </tr>
              <!--end::Row-->

              <!--begin::Row-->
              <tr>
                <td>
                  <div class="d-flex align-items-center justify-content-center gap-2">
                    <i class="fa-solid fa-file-lines fs-8 pw-text-primary-500"></i>
                    <span>Belge Taslak</span>
                  </div>
                </td>
                <td>Araştır</td>
                <td>UIDESK</td>
                <td>1.64 Mb</td>
                <td>31/05/2023</td>
              </tr>
              <!--end::Row-->

              <!--begin::Row-->
              <tr>
                <td>
                  <div class="d-flex align-items-center justify-content-center gap-2">
                    <i class="fa-solid fa-file-lines fs-8 pw-text-primary-500"></i>
                    <span>Avans Talep</span>
                  </div>
                </td>
                <td>Araştır</td>
                <td>UIDESK</td>
                <td>1.64 Mb</td>
                <td>31/05/2023</td>
              </tr>
              <!--end::Row-->

              <!--begin::Row-->
              <tr>
                <td>
                  <div class="d-flex align-items-center justify-content-center gap-2">
                    <i class="fa-solid fa-file-lines fs-8 pw-text-primary-500"></i>
                    <span>Araştırma DK Şablonu</span>
                  </div>
                </td>
                <td>Araştır</td>
                <td>UIDESK</td>
                <td>1.64 Mb</td>
                <td>31/05/2023</td>
              </tr>
              <!--end::Row-->
            </tbody>
          </table>
        </div>
        <!--end::begin::Table-->
      </div>
      <!--end::Card body-->
    </div>
  </div>
</div>
<!--end::Modal-->

<!--begin::Modal-->
<div class="modal bg-body fade" tabindex="-1" id="aktiviteler">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content shadow-none p-7">
      <!--begin::Card header-->
      <div class="d-flex justify-content-between gap-4 pb-4 border-bottom pw-border-stroke">
        <div class="d-flex align-items-center justify-content-between gap-3 flex-fill">
          <!--begin::Title-->
          <h3 class="pw-text-neutral-700 fs-5 fw-bolder mb-0">Aktiviteler</h3>
          <!--end::Title-->

          <!--begin::User Select-->
          <div class="form-floating border rounded">
            <select class="form-select fs-9 pw-text-neutral-500 py-1 ps-2 pe-4 pw-border-stroke pw-bg-neutral-50" placeholder="Seçim Yapın" id="pw_aktiviteler_user">
              <option></option>
              <option value="0" data-pw-select2-icon="fa-solid fa-user fs-9 pw-text-neutral-500" selected>Benim
              </option>
            </select>
          </div>
          <!--end::User Select-->
        </div>

        <div class="d-flex align-items-center gap-4 ps-4 border-start pw-border-stroke">
          <!--begin::Button-->
          <button type="button" class="btn p-0">
            <i class="fa-solid fa-arrows-rotate fs-base pw-text-neutral-300"></i>
          </button>
          <!--end::Button-->

          <!--begin::Button-->
          <button type="button" class="btn p-0">
            <i class="fa-solid fa-chevrons-down fs-base pw-text-neutral-300"></i>
          </button>
          <!--end::Button-->

          <!--begin::Button-->
          <button type="button" class="btn p-0" data-bs-dismiss="modal" aria-label="Close">
            <i class="fa-solid fa-arrows-minimize fs-base pw-text-neutral-300"></i>
          </button>
          <!--end::Button-->
        </div>
      </div>
      <!--end::Card header-->

      <!--begin::Card body-->
      <div class="pt-4">
        <!--begin::Table-->
        <div class="table-responsive fs-9 pw-text-neutral-700">
          <table class="table pw-table-text-overflow gy-2 mb-0">
            <tbody>
              <!--begin::Row-->
              <tr>
                <td>
                  <!--begin::Checkbox-->
                  <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                    <input class="form-check-input" type="checkbox" value="" id="pw_aktiviteler_1" checked="checked" />
                    <label class="form-check-label pw-text-neutral-700 fs-8" for="pw_aktiviteler_1">
                      UIDESK tarafından check-out iptal edildi.
                    </label>
                  </div>
                  <!--end::Checkbox-->
                </td>
                <td class="pw-text-neutral-400 text-end">Perşembe 11:58:04</td>
              </tr>
              <!--end::Row-->

              <!--begin::Row-->
              <tr>
                <td>
                  <!--begin::Checkbox-->
                  <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                    <input class="form-check-input" type="checkbox" value="" id="pw_aktiviteler_2" checked="checked" />
                    <label class="form-check-label pw-text-neutral-700 fs-8" for="pw_aktiviteler_2">
                      UIDESK tarafından Anket Kullanıcı Raporu isimli raporu çalıştırdı.
                    </label>
                  </div>
                  <!--end::Checkbox-->
                </td>
                <td class="pw-text-neutral-400 text-end">Salı 16:31:26</td>
              </tr>
              <!--end::Row-->

              <!--begin::Row-->
              <tr>
                <td>
                  <!--begin::Checkbox-->
                  <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                    <input class="form-check-input" type="checkbox" value="" id="pw_aktiviteler_3" checked="checked" />
                    <label class="form-check-label pw-text-neutral-700 fs-8" for="pw_aktiviteler_3">
                      UIDESK tarafından yeni dosya kartı kaydı oluşturuldu.
                    </label>
                  </div>
                  <!--end::Checkbox-->
                </td>
                <td class="pw-text-neutral-400 text-end">Perşembe 11:58:04</td>
              </tr>
              <!--end::Row-->

              <!--begin::Row-->
              <tr>
                <td>
                  <!--begin::Checkbox-->
                  <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                    <input class="form-check-input" type="checkbox" value="" id="pw_aktiviteler_4" checked="checked" />
                    <label class="form-check-label pw-text-neutral-700 fs-8" for="pw_aktiviteler_4">
                      UIDESK tarafından klasör eklendi.
                    </label>
                  </div>
                  <!--end::Checkbox-->
                </td>
                <td class="pw-text-neutral-400 text-end">31.05.2023 12:31:01</td>
              </tr>
              <!--end::Row-->

              <!--begin::Row-->
              <tr>
                <td>
                  <!--begin::Checkbox-->
                  <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                    <input class="form-check-input" type="checkbox" value="" id="pw_aktiviteler_4" checked="checked" />
                    <label class="form-check-label pw-text-neutral-700 fs-8" for="pw_aktiviteler_4">
                      UIDESK tarafından klasör eklendi.
                    </label>
                  </div>
                  <!--end::Checkbox-->
                </td>
                <td class="pw-text-neutral-400 text-end">31.05.2023 12:31:01</td>
              </tr>
              <!--end::Row-->

              <!--begin::Row-->
              <tr>
                <td>
                  <!--begin::Checkbox-->
                  <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                    <input class="form-check-input" type="checkbox" value="" id="pw_aktiviteler_5" checked="checked" />
                    <label class="form-check-label pw-text-neutral-700 fs-8" for="pw_aktiviteler_5">
                      UIDESK tarafından yeni dosya kartı kaydı oluşturuldu.
                    </label>
                  </div>
                  <!--end::Checkbox-->
                </td>
                <td class="pw-text-neutral-400 text-end">31.05.2023 12:31:01</td>
              </tr>
              <!--end::Row-->

              <!--begin::Row-->
              <tr>
                <td>
                  <!--begin::Checkbox-->
                  <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                    <input class="form-check-input" type="checkbox" value="" id="pw_aktiviteler_6" checked="checked" />
                    <label class="form-check-label pw-text-neutral-700 fs-8" for="pw_aktiviteler_6">
                      UIDESK tarafından check-out iptal edildi.
                    </label>
                  </div>
                  <!--end::Checkbox-->
                </td>
                <td class="pw-text-neutral-400 text-end">31.05.2023 12:31:01</td>
              </tr>
              <!--end::Row-->

              <!--begin::Row-->
              <tr>
                <td>
                  <!--begin::Checkbox-->
                  <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                    <input class="form-check-input" type="checkbox" value="" id="pw_aktiviteler_6" checked="checked" />
                    <label class="form-check-label pw-text-neutral-700 fs-8" for="pw_aktiviteler_6">
                      UIDESK tarafından check-out iptal edildi.
                    </label>
                  </div>
                  <!--end::Checkbox-->
                </td>
                <td class="pw-text-neutral-400 text-end">31.05.2023 12:31:01</td>
              </tr>
              <!--end::Row-->

              <!--begin::Row-->
              <tr>
                <td>
                  <!--begin::Checkbox-->
                  <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                    <input class="form-check-input" type="checkbox" value="" id="pw_aktiviteler_6" checked="checked" />
                    <label class="form-check-label pw-text-neutral-700 fs-8" for="pw_aktiviteler_6">
                      UIDESK tarafından check-out iptal edildi.
                    </label>
                  </div>
                  <!--end::Checkbox-->
                </td>
                <td class="pw-text-neutral-400 text-end">31.05.2023 12:31:01</td>
              </tr>
              <!--end::Row-->

              <!--begin::Row-->
              <tr>
                <td>
                  <!--begin::Checkbox-->
                  <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                    <input class="form-check-input" type="checkbox" value="" id="pw_aktiviteler_6" checked="checked" />
                    <label class="form-check-label pw-text-neutral-700 fs-8" for="pw_aktiviteler_6">
                      UIDESK tarafından check-out iptal edildi.
                    </label>
                  </div>
                  <!--end::Checkbox-->
                </td>
                <td class="pw-text-neutral-400 text-end">31.05.2023 12:31:01</td>
              </tr>
              <!--end::Row-->
            </tbody>
          </table>
        </div>
        <!--end::begin::Table-->
      </div>
      <!--end::Card body-->
    </div>
  </div>
</div>

<!--begin::Fix menu hieght-->
<script>
  window.addEventListener('load', () => {
    const menuCol = document.getElementById('menuCol');
    const contentCol = document.getElementById('contentCol');
    menuCol.style.maxHeight = contentCol.clientHeight + 'px';
  })
</script>
<!--end::Fix menu hieght-->

<!--begin::Aktiviteler select2-->
<script>
  // Format options
  var optionFormat = function(item) {
    if (!item.id) {
      return item.text;
    }

    var span = document.createElement('span');
    span.classList.add('d-flex', 'align-items-center', 'gap-2')
    var icon = item.element.getAttribute('data-pw-select2-icon');
    var template = '';

    template += '<i class="' + icon + '"></i>';
    template += item.text;

    span.innerHTML = template;

    return $(span);
  }

  $('#pw_aktiviteler_user').select2({
    templateSelection: optionFormat,
    templateResult: optionFormat
  });
</script>
<!--end::Aktiviteler select2-->

<!--begin::Arsiv grafigi chart-->
<script>
  window.addEventListener('DOMContentLoaded', () => {
    var ctx = document.getElementById('arsivGrafigiChart');
    var ctx2 = document.getElementById('arsivGrafigiChart2');

    // Define colors
    var primaryColor = KTUtil.getCssVariableValue('--kt-primary');
    var dangerColor = KTUtil.getCssVariableValue('--kt-danger');
    var successColor = KTUtil.getCssVariableValue('--kt-success');
    var warningColor = KTUtil.getCssVariableValue('--kt-warning');
    var infoColor = KTUtil.getCssVariableValue('--kt-info');

    // Define fonts
    var fontFamily = KTUtil.getCssVariableValue('--bs-font-sans-serif');

    // Chart labels
    const labels = ['January', 'February', 'March', 'April', 'May'];

    const sampleData = [10, 20, 30, 40, 50];

    // Chart data
    const data = {
      labels: labels,
      datasets: [{
          label: 'Veri Seti 1', // Veri seti için bir etiket belirleyin.
          data: sampleData, // Veri setinin içeriğini ekleyin.
          backgroundColor: 'rgba(75, 192, 192, 0.2)', // Çubukların arka plan rengini ayarlayın.
          borderColor: 'rgba(75, 192, 192, 1)', // Çubukların kenarlık rengini ayarlayın.
          borderWidth: 1 // Çubukların kenarlık kalınlığını ayarlayın.
        },
        // İhtiyacınıza göre daha fazla veri seti ekleyebilirsiniz.
      ]
    };

    // Chart config
    const config = {
      type: 'pie',
      data: data,
      options: {
        plugins: {
          title: {
            display: false,
          }
        },
        responsive: true,
      },
      defaults: {
        global: {
          defaultFont: fontFamily
        }
      }
    };

    // Init ChartJS -- for more info, please visit: https://www.chartjs.org/docs/latest/
    var myChart = new Chart(ctx, config);
    var myChart = new Chart(ctx2, config);
  })
</script>
<!--end::Arsiv grafigi chart-->

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/foot.php'; ?>