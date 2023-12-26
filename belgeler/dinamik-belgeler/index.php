<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/header.php'; ?>

<!--begin::Wrapper-->
<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">

  <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/sidebar.php'; ?>
  <!--begin::Main-->
  <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <!--begin::Content wrapper-->
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar col-12 px-6 pt-6">

      <!--begin::Toolbar container-->
      <div id="kt_app_toolbar_container" class="container-fluid d-flex flex-stack p-0">

        <!--begin::Page title-->
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
          <!--begin::Breadcrumb-->
          <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-9 mt-0 mb-3">
            <!--begin::Item-->
            <li class="breadcrumb-item text-muted">
              <a href="/belgeler/" class="text-muted text-hover-primary">Belgeler</a>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item">
              <span class="text-muted">/</span>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item active">H Daikin Kabineti</li>
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
    <div class="d-flex align-items-center gap-2 border-top pw-border-neutral-200 px-6 pt-2 pb-2 mt-4">
      <!--begin::Item-->
      <div class="m-0">
        <!--begin::Dropdown toggle-->
        <button type="button" class="btn p-0 btn-icon-gray-400 btn-active-icon-primary fs-9 fs-semibold d-inline-flex align-items-center gap-2" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" data-kt-menu-offset="0,5">
          <div class="w-35px h-35px pw-bg-neutral-50 rounded-0.20rem d-inline-flex align-items-center justify-content-center">
            <i class="fa-solid fa-circle-plus fs-3"></i>
          </div>
        </button>
        <!--end::Dropdown toggle-->

        <!--begin::dropdown-->
        <div class="menu menu-sub menu-sub-dropdown w-200px" data-kt-menu="true" id="pw_belgeler_kabinet">
          <div class="d-flex flex-column">
            <!--begin::Item-->
            <a href="/belgeler/kabinet/yeni-belge/" class="btn btn-active-light-secondary pw-text-neutral-800 fw-semibold fs-7 text-start py-3 px-4 rounded-0">Yeni Belge</a>
            <!--end::Item-->

            <!--begin::Item-->
            <a href="/belgeler/kabinet/yeni-dosya-karti/" class="btn btn-active-light-secondary pw-text-neutral-800 fw-semibold fs-7 text-start py-3 px-4 rounded-0">Yeni Dosya Kartı</a>
            <!--end::Item-->

            <!--begin::Item-->
            <a href="/belgeler/kabinet/yeni-klasor/" class="btn btn-active-light-secondary pw-text-neutral-800 fw-semibold fs-7 text-start py-3 px-4 rounded-0">Yeni Klasör</a>
            <!--end::Item-->
          </div>
        </div>
        <!--end::dropdown-->
      </div>
      <!--end::Item-->

      <!--begin::Item-->
      <a href="javascript:void(0)" class="btn p-0 btn-icon-gray-400 btn-active-icon-primary fs-9 fs-semibold d-inline-flex align-items-center gap-2">
        <div class="w-35px h-35px pw-bg-neutral-50 rounded-0.20rem d-inline-flex align-items-center justify-content-center">
          <i class="fa-solid fa-magnifying-glass fs-3"></i>
        </div>
      </a>
      <!--end::Item-->
    </div>
    <!--end::Actionbar-->

    <!--begin::Content -->
    <div class="mb-20 px-6 pb-6">
      <!--begin::Row-->
      <div class="row g-6">
        <!--begin::Col-->
        <div class="col-12">
          <!--begin::Cards wrapper-->
          <div class="border rounded-1 pw-border-stroke">
            <!--begin::Item-->
            <a href="/belgeler/dinamik-belgeler/eyup-tarik-dogan/" class="d-flex gap-4 p-4 border-bottom pw-border-stroke">
              <!--begin::Icon-->
              <div class="d-flex align-items-center justify-content-center w-45px h-45px rounded-1 pw-bg-warning-50">
                <i class="fa-solid fa-folder-plus fs-2 pw-text-warning-400"></i>
              </div>
              <!--end::Icon-->

              <!--begin::Content-->
              <div class="d-flex flex-column gap-2">
                <!--begin::Title-->
                <h3 class="text-black fs-7 fw-semibold">Eyüp Tarık Doğan</h3>
                <!--end::Title-->

                <!--begin::Description-->
                <p class="pw-text-neutral-500 fs-8">
                  Bu dosya kartı 30.01.2023 - 14:47:02 tarihinde <span class="fw-semibold pw-text-neutral-900">Trainer</span> tarafından oluşturuldu.
                </p>
                <!--end::Description-->

                <!--begin::Informations-->
                <div class="d-flex align-items-center gap-4 flex-wrarp">
                  <!--begin::Item-->
                  <div class="border border-dashed rounded pw-border-neutral-300 py-2 px-3 pw-text-neutral-800 fs-7 fw-semibold text-center min-w-125px">
                    3 Dosya Kartı, 4 Klasör, 2 Belge
                  </div>
                  <!--end::Item-->

                  <!--begin::Item-->
                  <div class="border border-dashed rounded pw-border-neutral-300 py-2 px-3 pw-text-neutral-800 fs-7 fw-semibold text-center min-w-125px">
                    4.61 Mb
                  </div>
                  <!--end::Item-->
                </div>
                <!--end::Informations-->

                <!--begin::Actions-->
                <div class="d-flex align-items-center gap-2 pt-2">
                  <!--begin::Item-->
                  <button type="button" class="btn p-0">
                    <i class="fa-solid fa-message fs-7 pw-text-neutral-300"></i>
                  </button>
                  <!--end::Item-->
                </div>
                <!--end::Actions-->
              </div>
              <!--end::Content-->
            </a>
            <!--end::Item-->

            <!--begin::Item-->
            <a href="/belgeler/dinamik-belgeler/eyup-tarik-dogan/" class="d-flex gap-4 p-4">
              <!--begin::Icon-->
              <div class="d-flex align-items-center justify-content-center w-45px h-45px rounded-1 pw-bg-warning-50">
                <i class="fa-solid fa-folder-plus fs-2 pw-text-warning-400"></i>
              </div>
              <!--end::Icon-->

              <!--begin::Content-->
              <div class="d-flex flex-column gap-2">
                <!--begin::Title-->
                <h3 class="text-black fs-7 fw-semibold">Ezgi Çelik</h3>
                <!--end::Title-->

                <!--begin::Description-->
                <p class="pw-text-neutral-500 fs-8">
                  Bu dosya kartı 30.01.2023 - 14:47:02 tarihinde <span class="fw-semibold pw-text-neutral-900">Trainer</span> tarafından oluşturuldu.
                </p>
                <!--end::Description-->

                <!--begin::Informations-->
                <div class="d-flex align-items-center gap-4 flex-wrarp">
                  <!--begin::Item-->
                  <div class="border border-dashed rounded pw-border-neutral-300 py-2 px-3 pw-text-neutral-800 fs-7 fw-semibold text-center min-w-125px">
                    3 Dosya Kartı, 4 Klasör, 2 Belge
                  </div>
                  <!--end::Item-->

                  <!--begin::Item-->
                  <div class="border border-dashed rounded pw-border-neutral-300 py-2 px-3 pw-text-neutral-800 fs-7 fw-semibold text-center min-w-125px">
                    4.61 Mb
                  </div>
                  <!--end::Item-->
                </div>
                <!--end::Informations-->

                <!--begin::Actions-->
                <div class="d-flex align-items-center gap-2 pt-2">
                  <!--begin::Item-->
                  <button type="button" class="btn p-0">
                    <i class="fa-solid fa-message fs-7 pw-text-neutral-300"></i>
                  </button>
                  <!--end::Item-->
                </div>
                <!--end::Actions-->
              </div>
              <!--end::Content-->
            </a>
            <!--end::Item-->

            <!--begin::Pagination wrapper-->
            <div class="d-flex align-items-center justify-content-between gap-4 py-4 px-6">
              <!--begin::Info-->
              <div class="pw-text-neutral-500 fs-7 fw-semibold">
                1-2 aralığı gösteriliyor. Toplam 2 öğe var.
              </div>
              <!--end::Info-->

              <!--begin::Wrapper-->
              <ul class="pagination flex-nowrap flex-shrink-0">
                <!--begin::Pagination item previous-->
                <li class="page-item previous disabled"><a href="javascript:void(0)" class="page-link pw-min-w-32px h-32px fs-8"><i class="previous"></i></a></li>
                <!--end::Pagination item previous-->

                <!--begin::Pagination-item-->
                <li class="page-item active">
                  <a href="javascript:void(0)" class="page-link pw-min-w-32px h-32px fs-8">1</a>
                </li>
                <!--end::Pagination item-->

                <!--begin::Pagination item-->
                <li class="page-item next">
                  <a href="javascript:void(0)" class="page-link pw-min-w-32px h-32px fs-8"><i class="next"></i></a>
                </li>
                <!--end::Pagination item-->
              </ul>
              <!--end::Wrapper-->
            </div>
            <!--end::Pagination wrapper-->
          </div>
          <!--end::Cards wrapper-->
        </div>
        <!--end::Col-->
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