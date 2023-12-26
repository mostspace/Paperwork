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
      <button id="panoBtn" type="button" class="btn p-0 btn-icon-gray-400 btn-active-icon-primary fs-9 fs-semibold d-inline-flex align-items-center gap-2" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="bottom" title="Pano">
        <div class="w-35px h-35px pw-bg-neutral-50 rounded-0.20rem d-inline-flex align-items-center justify-content-center">
          <i class="fa-solid fa-clipboard-list-check fs-3"></i>
        </div>
      </button>
      <!--end::Item-->

      <!--begin::Item-->
      <div class="m-0">
        <!--begin::Dropdown toggle-->
        <button type="button" class="btn p-0 btn-icon-gray-400 btn-active-icon-primary fs-9 fs-semibold d-inline-flex align-items-center gap-2" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" data-kt-menu-offset="0,5">
          <div class="w-35px h-35px pw-bg-neutral-50 rounded-0.20rem d-inline-flex align-items-center justify-content-center">
            <i class="fa-solid fa-square-check fs-3"></i>
          </div>
        </button>
        <!--end::Dropdown toggle-->

        <!--begin::dropdown-->
        <div class="menu menu-sub menu-sub-dropdown w-200px" data-kt-menu="true" id="pw_belgeler_kabinet">
          <div class="d-flex flex-column">
            <!--begin::Item-->
            <a href="/belgeler/kabinet/sec" class="btn btn-active-light-secondary pw-text-neutral-800 fw-semibold fs-7 text-start py-3 px-4 rounded-0">Seç</a>
            <!--end::Item-->

            <!--begin::Item-->
            <a href="/belgeler/kabinet/tumunu-sec" class="btn btn-active-light-secondary pw-text-neutral-800 fw-semibold fs-7 text-start py-3 px-4 rounded-0">Tümünü Seç</a>
            <!--end::Item-->
          </div>
        </div>
        <!--end::dropdown-->
      </div>
      <!--end::Item-->

      <!--begin::Item-->
      <div class="m-0">
        <!--begin::Dropdown toggle-->
        <button type="button" class="btn p-0 btn-icon-gray-400 btn-active-icon-primary fs-9 fs-semibold d-inline-flex align-items-center gap-2" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" data-kt-menu-offset="0,5">
          <div class="w-35px h-35px pw-bg-neutral-50 rounded-0.20rem d-inline-flex align-items-center justify-content-center">
            <i class="fa-solid fa-eye fs-3"></i>
          </div>
        </button>
        <!--end::Dropdown toggle-->

        <!--begin::dropdown-->
        <div class="menu menu-sub menu-sub-dropdown w-200px" data-kt-menu="true" id="pw_belgeler_kabinet">
          <div class="d-flex flex-column">
            <!--begin::Item-->
            <a href="/belgeler/kabinet" class="btn btn-active-light-secondary pw-text-neutral-800 fw-semibold fs-7 text-start py-3 px-4 rounded-0">
              <i class="fa-solid fa-grid-horizontal fs-8 pw-text-neutral-500"></i>
              Büyük simgeler
            </a>
            <!--end::Item-->

            <!--begin::Item-->
            <a href="/belgeler/kabinet/kucuk-simgeler" class="btn btn-active-light-secondary pw-text-neutral-800 fw-semibold fs-7 text-start py-3 px-4 rounded-0">
              <i class="fa-solid fa-list fs-8 pw-text-neutral-500"></i>
              Küçük Simgeler
            </a>
            <!--end::Item-->
          </div>
        </div>
        <!--end::dropdown-->
      </div>
      <!--end::Item-->

      <!--begin::Item-->
      <div class="m-0">
        <!--begin::Dropdown toggle-->
        <button type="button" class="btn p-0 btn-icon-gray-400 btn-active-icon-primary fs-9 fs-semibold d-inline-flex align-items-center gap-2" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" data-kt-menu-offset="0,5">
          <div class="w-35px h-35px pw-bg-neutral-50 rounded-0.20rem d-inline-flex align-items-center justify-content-center">
            <i class="fa-solid fa-arrow-down-a-z fs-3"></i>
          </div>
        </button>
        <!--end::Dropdown toggle-->

        <!--begin::dropdown-->
        <div class="menu menu-sub menu-sub-dropdown w-200px" data-kt-menu="true" id="pw_belgeler_kabinet">
          <div class="d-flex flex-column">
            <!--begin::Item-->
            <a href="javascript:void(0)" class="btn btn-active-light-secondary pw-text-neutral-800 fw-semibold fs-7 text-start py-3 px-4 rounded-0">
              <i class="fa-solid fa-arrow-down-a-z fs-8 pw-text-neutral-500"></i>
              Nesne Adı Artan
            </a>
            <!--end::Item-->

            <!--begin::Item-->
            <a href="javascript:void(0)" class="btn btn-active-light-secondary pw-text-neutral-800 fw-semibold fs-7 text-start py-3 px-4 rounded-0">
              <i class="fa-solid fa-arrow-up-z-a fs-8 pw-text-neutral-500"></i>
              Nesne Adı Azalan
            </a>
            <!--end::Item-->

            <!--begin::Item-->
            <a href="javascript:void(0)" class="btn btn-active-light-secondary pw-text-neutral-800 fw-semibold fs-7 text-start py-3 px-4 rounded-0">
              <i class="fa-solid fa-calendar-arrow-down fs-8 pw-text-neutral-500"></i>
              Tarih Artan
            </a>
            <!--end::Item-->

            <!--begin::Item-->
            <a href="javascript:void(0)" class="btn btn-active-light-secondary pw-text-neutral-800 fw-semibold fs-7 text-start py-3 px-4 rounded-0">
              <i class="fa-solid fa-calendar-arrow-up fs-8 pw-text-neutral-500"></i>
              Tarih Azalan
            </a>
            <!--end::Item-->
          </div>
        </div>
        <!--end::dropdown-->
      </div>
      <!--end::Item-->

      <!--begin::Item-->
      <a href="/belgeler/kabinet/#" class="btn p-0 btn-icon-gray-400 btn-active-icon-primary fs-9 fs-semibold d-inline-flex align-items-center gap-2">
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
        <div class="col-12 col-lg-6">
          <!--begin::Cards wrapper-->
          <div class="border rounded-1 pw-border-stroke">
            <!--begin::Item-->
            <div class="d-flex gap-4 p-4 border-bottom pw-border-stroke">
              <!--begin::Icon-->
              <div class="d-flex align-items-center justify-content-center w-45px h-45px rounded-1 pw-bg-primary-50">
                <i class="fa-solid fa-folder-tree fs-2 pw-text-primary-400"></i>
              </div>
              <!--end::Icon-->

              <!--begin::Content-->
              <div class="d-flex flex-column gap-2">
                <!--begin::Title-->
                <h3 class="text-black fs-7 fw-semibold">Ruhsat Dosyası</h3>
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
                    1 Klasör, 12 Belge
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
                    <i class="fa-solid fa-heart fs-7 pw-text-neutral-300"></i>
                  </button>
                  <!--end::Item-->

                  <!--begin::Item-->
                  <button type="button" class="position-relative btn p-0">
                    <i class="fa-solid fa-messages fs-7 pw-text-neutral-300"></i>
                    <span class="position-absolute top-0 start-100 translate-middle fs-9 w-25px h-25px badge badge-circle pw-bg-danger-500 text-white fw-boldefa-rotate-180">1</span>
                  </button>
                  <!--end::Item-->

                  <!--begin::Item-->
                  <button type="button" class="btn p-0">
                    <i class="fa-solid fa-message fs-7 pw-text-neutral-300"></i>
                  </button>
                  <!--end::Item-->

                  <!--begin::Item-->
                  <button type="button" class="btn p-0">
                    <i class="fa-solid fa-share-nodes fs-7 pw-text-neutral-300"></i>
                  </button>
                  <!--end::Item-->

                  <!--begin::Item-->
                  <button type="button" class="btn p-0">
                    <i class="fa-solid fa-star-sharp fs-7 pw-text-neutral-300"></i>
                  </button>
                  <!--end::Item-->
                </div>
                <!--end::Actions-->
              </div>
              <!--end::Content-->
            </div>
            <!--end::Item-->

            <!--begin::Item-->
            <div class="d-flex gap-4 p-4 border-bottom pw-border-stroke">
              <!--begin::Icon-->
              <div class="d-flex align-items-center justify-content-center w-45px h-45px rounded-1 pw-bg-primary-50">
                <i class="fa-solid fa-file-word fs-2 pw-text-primary-400"></i>
              </div>
              <!--end::Icon-->

              <!--begin::Content-->
              <div class="d-flex flex-column gap-2">
                <!--begin::Title-->
                <h3 class="text-black fs-7 fw-semibold">Diğer-00009</h3>
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
                    1 Klasör, 12 Belge
                  </div>
                  <!--end::Item-->

                  <!--begin::Item-->
                  <div class="border border-dashed rounded pw-border-neutral-300 py-2 px-3 pw-text-neutral-800 fs-7 fw-semibold text-center min-w-125px">
                    (1.0) 4.61 Mb
                  </div>
                  <!--end::Item-->
                </div>
                <!--end::Informations-->

                <!--begin::Actions-->
                <div class="d-flex align-items-center gap-2 pt-2">
                  <!--begin::Item-->
                  <button type="button" class="btn p-0">
                    <i class="fa-solid fa-heart fs-7 pw-text-neutral-300"></i>
                  </button>
                  <!--end::Item-->

                  <!--begin::Item-->
                  <button type="button" class="btn p-0">
                    <i class="fa-solid fa-messages fs-7 pw-text-neutral-300"></i>
                  </button>
                  <!--end::Item-->

                  <!--begin::Item-->
                  <button type="button" class="btn p-0">
                    <i class="fa-solid fa-message fs-7 pw-text-neutral-300"></i>
                  </button>
                  <!--end::Item-->

                  <!--begin::Item-->
                  <button type="button" class="btn p-0">
                    <i class="fa-solid fa-share-nodes fs-7 pw-text-neutral-300"></i>
                  </button>
                  <!--end::Item-->

                  <!--begin::Item-->
                  <button type="button" class="btn p-0">
                    <i class="fa-solid fa-star-sharp fs-7 pw-text-neutral-300"></i>
                  </button>
                  <!--end::Item-->
                </div>
                <!--end::Actions-->
              </div>
              <!--end::Content-->
            </div>
            <!--end::Item-->

            <!--begin::Item-->
            <div class="d-flex gap-4 p-4 border-bottom pw-border-stroke">
              <!--begin::Icon-->
              <div class="d-flex align-items-center justify-content-center w-45px h-45px rounded-1 pw-bg-primary-50">
                <i class="fa-solid fa-folder-plus fs-2 pw-text-primary-400"></i>
              </div>
              <!--end::Icon-->

              <!--begin::Content-->
              <div class="d-flex flex-column gap-2">
                <!--begin::Title-->
                <h3 class="text-black fs-7 fw-semibold text-decoration-underline">Ruhsat Dosyası</h3>
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
                    1 Klasör, 12 Belge
                  </div>
                  <!--end::Item-->

                  <!--begin::Item-->
                  <div class="border border-dashed rounded pw-border-neutral-300 py-2 px-3 pw-text-neutral-800 fs-7 fw-semibold text-center min-w-125px">
                    4.61 Mb
                  </div>
                  <!--end::Item-->

                  <!--begin::Item-->
                  <div class="border border-dashed rounded pw-border-danger-200 py-2 px-3 pw-text-danger-500 fs-7 fw-semibold text-center min-w-125px">
                    1 Eksik Belge
                  </div>
                  <!--end::Item-->
                </div>
                <!--end::Informations-->

                <!--begin::Actions-->
                <div class="d-flex align-items-center gap-2 pt-2">
                  <!--begin::Item-->
                  <button type="button" class="btn p-0">
                    <i class="fa-solid fa-heart fs-7 pw-text-neutral-300"></i>
                  </button>
                  <!--end::Item-->

                  <!--begin::Item-->
                  <button type="button" class="btn p-0">
                    <i class="fa-solid fa-messages fs-7 pw-text-neutral-300"></i>
                  </button>
                  <!--end::Item-->

                  <!--begin::Item-->
                  <button type="button" class="btn p-0">
                    <i class="fa-solid fa-message fs-7 pw-text-neutral-300"></i>
                  </button>
                  <!--end::Item-->

                  <!--begin::Item-->
                  <button type="button" class="btn p-0">
                    <i class="fa-solid fa-share-nodes fs-7 pw-text-neutral-300"></i>
                  </button>
                  <!--end::Item-->

                  <!--begin::Item-->
                  <button type="button" class="btn p-0">
                    <i class="fa-solid fa-star-sharp fs-7 pw-text-neutral-300"></i>
                  </button>
                  <!--end::Item-->
                </div>
                <!--end::Actions-->
              </div>
              <!--end::Content-->
            </div>
            <!--end::Item-->

            <!--begin::Item-->
            <div class="d-flex gap-4 p-4 border-bottom pw-border-stroke">
              <!--begin::Icon-->
              <div class="d-flex align-items-center justify-content-center w-45px h-45px rounded-1 pw-bg-primary-50">
                <i class="fa-solid fa-folder-tree fs-2 pw-text-primary-400"></i>
              </div>
              <!--end::Icon-->

              <!--begin::Content-->
              <div class="d-flex flex-column gap-2">
                <!--begin::Title-->
                <h3 class="text-black fs-7 fw-semibold">Ruhsat Dosyası</h3>
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
                    1 Klasör, 12 Belge
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
                    <i class="fa-solid fa-heart fs-7 pw-text-neutral-300"></i>
                  </button>
                  <!--end::Item-->

                  <!--begin::Item-->
                  <button type="button" class="btn p-0">
                    <i class="fa-solid fa-messages fs-7 pw-text-neutral-300"></i>
                  </button>
                  <!--end::Item-->

                  <!--begin::Item-->
                  <button type="button" class="btn p-0">
                    <i class="fa-solid fa-message fs-7 pw-text-neutral-300"></i>
                  </button>
                  <!--end::Item-->

                  <!--begin::Item-->
                  <button type="button" class="btn p-0">
                    <i class="fa-solid fa-share-nodes fs-7 pw-text-neutral-300"></i>
                  </button>
                  <!--end::Item-->

                  <!--begin::Item-->
                  <button type="button" class="btn p-0">
                    <i class="fa-solid fa-star-sharp fs-7 pw-text-neutral-300"></i>
                  </button>
                  <!--end::Item-->
                </div>
                <!--end::Actions-->
              </div>
              <!--end::Content-->
            </div>
            <!--end::Item-->

            <!--begin::Item-->
            <div class="d-flex gap-4 p-4 border-bottom">
              <!--begin::Icon-->
              <div class="d-flex align-items-center justify-content-center w-45px h-45px rounded-1 pw-bg-primary-50">
                <i class="fa-solid fa-folder-tree fs-2 pw-text-primary-400"></i>
              </div>
              <!--end::Icon-->

              <!--begin::Content-->
              <div class="d-flex flex-column gap-2">
                <!--begin::Title-->
                <h3 class="text-black fs-7 fw-semibold">Ruhsat Dosyası</h3>
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
                    1 Klasör, 12 Belge
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
                    <i class="fa-solid fa-heart fs-7 pw-text-neutral-300"></i>
                  </button>
                  <!--end::Item-->

                  <!--begin::Item-->
                  <button type="button" class="btn p-0">
                    <i class="fa-solid fa-messages fs-7 pw-text-neutral-300"></i>
                  </button>
                  <!--end::Item-->

                  <!--begin::Item-->
                  <button type="button" class="btn p-0">
                    <i class="fa-solid fa-message fs-7 pw-text-neutral-300"></i>
                  </button>
                  <!--end::Item-->

                  <!--begin::Item-->
                  <button type="button" class="btn p-0">
                    <i class="fa-solid fa-share-nodes fs-7 pw-text-neutral-300"></i>
                  </button>
                  <!--end::Item-->

                  <!--begin::Item-->
                  <button type="button" class="btn p-0">
                    <i class="fa-solid fa-star-sharp fs-7 pw-text-neutral-300"></i>
                  </button>
                  <!--end::Item-->
                </div>
                <!--end::Actions-->
              </div>
              <!--end::Content-->
            </div>
            <!--end::Item-->

            <!--begin::Pagination wrapper-->
            <div class="d-flex align-items-center justify-content-between gap-4 py-4 px-6">
              <!--begin::Info-->
              <div class="pw-text-neutral-500 fs-7 fw-semibold">
                1-25 aralığı gösteriliyor. Toplam 43 öğe var.
              </div>
              <!--end::Info-->

              <!--begin::Wrapper-->
              <ul class="pagination flex-nowrap flex-shrink-0">
                <!--begin::Pagination item previous-->
                <li class="page-item previous disabled"><a href="/belgeler/kabinet/#" class="page-link pw-min-w-32px h-32px fs-8"><i class="previous"></i></a></li>
                <!--end::Pagination item previous-->

                <!--begin::Pagination-item-->
                <li class="page-item active">
                  <a href="/belgeler/kabinet/#" class="page-link pw-min-w-32px h-32px fs-8">1</a>
                </li>
                <!--end::Pagination item-->

                <!--begin::Pagination item-->
                <li class="page-item">
                  <a href="/belgeler/kabinet/#" class="page-link pw-min-w-32px h-32px fs-8">2</a>
                </li>
                <!--end::Pagination item-->

                <!--begin::Pagination item-->
                <li class="page-item ">
                  <a href="/belgeler/kabinet/#" class="page-link pw-min-w-32px h-32px fs-8">3</a>
                </li>
                <!--end::Pagination item-->

                <!--begin::Pagination item-->
                <li class="page-item ">
                  <a href="/belgeler/kabinet/#" class="page-link pw-min-w-32px h-32px fs-8">4</a>
                </li>
                <!--end::Pagination item-->

                <!--begin::Pagination item-->
                <li class="page-item ">
                  <a href="/belgeler/kabinet/#" class="page-link pw-min-w-32px h-32px fs-8">5</a>
                </li>
                <!--end::Pagination item-->

                <!--begin::Pagination item-->
                <li class="page-item next">
                  <a href="/belgeler/kabinet/#" class="page-link pw-min-w-32px h-32px fs-8"><i class="next"></i></a>
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

        <!--begin::Col-->
        <div class="col-12 col-lg-6">
          <!--begin::Card-->
          <div class="border pw-border-stroke rounded-3 py-5 px-7">
            <!--begin::Stepper-->
            <div class="stepper stepper-circles pt-6" id="Stepper">
              <!--begin::Nav wrapper-->
              <div class="stepper-nav d-flex flex-nowrap justify-content-between gap-12 position-relative overflow-x-auto">
                <!--begin::Prev step button-->
                <button type="button" class="d-flex btn p-0 h-30px fs-7 fw-semibold btn-color-gray-400 btn-active-color-primary" data-kt-stepper-action="previous">
                  <i class="fa-solid fa-chevron-left fs-2"></i>
                  Geri
                </button>
                <!--end::Prev step button-->

                <!--begin::Nav-->
                <div class="stepper-nav flex-fill flex-center flex-wrap justify-content-around gap-10 mb-10 mw-325px">
                  <!--begin::Step 1-->
                  <div class="stepper-item current" data-kt-stepper-element="nav" data-kt-stepper-action="step">
                    <!--begin::Wrapper-->
                    <div class="stepper-wrapper d-flex flex-column align-items-center gap-3">
                      <!--begin::Icon-->
                      <div class="stepper-icon w-30px h-30px me-0">
                        <i class="stepper-check fas fa-check"></i>
                        <span class="stepper-number fs-6">1</span>
                      </div>
                      <!--end::Icon-->

                      <!--begin::Label-->
                      <div class="stepper-label">
                        <h3 class="stepper-title fs-7 fw-semibold text-center mb-0">
                          Türü
                        </h3>
                      </div>
                      <!--end::Label-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Line-->
                    <div class="stepper-line h-40px"></div>
                    <!--end::Line-->
                  </div>
                  <!--end::Step 1-->

                  <!--begin::Step 2-->
                  <div class="stepper-item" data-kt-stepper-element="nav" data-kt-stepper-action="step">
                    <!--begin::Wrapper-->
                    <div class="stepper-wrapper d-flex flex-column align-items-center gap-2">
                      <!--begin::Icon-->
                      <div class="stepper-icon w-30px h-30px me-0">
                        <i class="stepper-check fas fa-check"></i>
                        <span class="stepper-number fs-6">2</span>
                      </div>
                      <!--begin::Icon-->

                      <!--begin::Label-->
                      <div class="stepper-label">
                        <h3 class="stepper-title fs-7 fw-semibold text-center mb-0">
                          Eklentiler
                        </h3>
                      </div>
                      <!--end::Label-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Line-->
                    <div class="stepper-line h-40px"></div>
                    <!--end::Line-->
                  </div>
                  <!--end::Step 2-->

                  <!--begin::Step 3-->
                  <div class="stepper-item" data-kt-stepper-element="nav" data-kt-stepper-action="step">
                    <!--begin::Wrapper-->
                    <div class="stepper-wrapper d-flex flex-column align-items-center gap-3">
                      <!--begin::Icon-->
                      <div class="stepper-icon w-30px h-30px me-0">
                        <i class="stepper-check fas fa-check"></i>
                        <span class="stepper-number fs-6">3</span>
                      </div>
                      <!--begin::Icon-->

                      <!--begin::Label-->
                      <div class="stepper-label">
                        <h3 class="stepper-title fs-7 fw-semibold text-center mb-0">
                          Detay
                        </h3>
                      </div>
                      <!--end::Label-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Line-->
                    <div class="stepper-line h-40px"></div>
                    <!--end::Line-->
                  </div>
                  <!--end::Step 3-->
                </div>
                <!--end::Nav-->

                <!--begin::Next step button-->
                <button type="button" class="d-flex btn p-0 h-30px fs-7 fw-semibold btn-color-gray-400 btn-active-color-primary" data-kt-stepper-action="next">
                  İleri
                  <i class="fa-solid fa-chevron-right fs-2 ms-3"></i>
                </button>
                <!--end::Next step button-->

                <!--begin::Steper line-->
                <div class="position-absolute w-400px h-3px start-50 translate-middle-x pw-bg-neutral-300" style="top:14px;z-index:-1">
                  <div id="stepperProgress" class="position-absolute h-3px pw-bg-primary-500" style="width:50%"></div>
                </div>
                <!--end::Steper line-->
              </div>
              <!--end::Nav wrapper-->

              <!--begin::Form-->
              <form class="form pt-4 border-top pw-border-stroke overflow-x-auto" novalidate="novalidate" id="kt_stepper_example_basic_form">
                <!--begin::Group-->
                <div class="mb-5 px-4">
                  <!--begin::Step 1-->
                  <div class="flex-column current" data-kt-stepper-element="content">
                    <div class="d-flex flex-wrap justify-content-center row-gap-4 column-gap-9">
                      <!--begin::Item-->
                      <div class="w-300px">
                        <!--begin::Option-->
                        <input type="radio" class="btn-check" name="pw_option" value="eklenti" id="pw_eklenti_olarak_gonder" />
                        <label class="btn btn-outline btn-active-secondary btn-active-icon-primary py-7 px-6 d-flex align-items-center rounded-4" for="pw_eklenti_olarak_gonder">
                          <i class="fa-solid fa-paperclip fs-3x me-4 me-md-5 me-lg-4 me-xl-5"></i>

                          <span class="d-block fw-semibold text-start">
                            <span class="pw-text-neutral-700 fw-bolder d-block fs-base">Eklenti Olarak Gönder</span>
                          </span>
                        </label>
                        <!--end::Option-->
                      </div>
                      <!--end::Item-->

                      <!--begin::Item-->
                      <div class="w-300px">
                        <!--begin::Option-->
                        <input type="radio" class="btn-check" name="pw_option" value="kisayol" id="pw_kisayol_olarak_gonder" />
                        <label class="btn btn-outline btn-active-secondary btn-active-icon-primary py-7 px-6 d-flex align-items-center rounded-4" for="pw_kisayol_olarak_gonder">
                          <i class="fa-solid fa-link fs-3x me-4 me-md-5 me-lg-4 me-xl-5"></i>

                          <span class="d-block fw-semibold text-start">
                            <span class="pw-text-neutral-700 fw-bolder d-block fs-base">Kısayol Olarak Gönder</span>
                          </span>
                        </label>
                        <!--end::Option-->
                      </div>
                      <!--end::Item-->
                    </div>

                    <!--begin::Table-->
                    <table class="table mt-10">
                      <tbody>
                        <!--begin::Row-->
                        <tr>
                          <td><label class="form-label fs-8 fw-bolder" for="pw_dosya_karti">Dosya Kartı Verilerini de Gönder</label></td>
                          <td>
                            <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                              <input class="form-check-input" type="checkbox" value="" id="pw_dosya_karti" />
                            </div>
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td><label class="form-label fs-8 fw-bolder" for="pw_zip">Zip ile Sıkıştır</label></td>
                          <td>
                            <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                              <input class="form-check-input" type="checkbox" value="" id="pw_zip" checked="checked" />
                            </div>
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td><label class="form-label fs-8 fw-bolder" for="pw_sifre">Şifre</label></td>
                          <td>
                            <input type="password" class="form-control form-control-solid fs-8 py-3 px-4" id="pw_sifre" />
                          </td>
                        </tr>
                        <!--end::Row-->
                      </tbody>
                    </table>
                    <!--end::Table-->
                  </div>
                  <!--end::Step 1-->

                  <!--begin::Step 2-->
                  <div class="flex-column" data-kt-stepper-element="content">
                    <!--begin::Table-->
                    <div class="table-responsive rounded">
                      <table class="table table-row-bordered border pw-dark-bg-table pw-table-border-gray table-rounded w-max-content fw-semibold pw-text-neutral-700 fs-7 min-w-100 gs-9 gy-6 gx-9">
                        <thead>
                          <tr class="fw-semibold fs-8 pw-text-neutral-700 pw-bg-neutral-100">
                            <th class="py-3">Adı</th>
                            <th class="py-3">Gör...</th>
                            <th class="py-3">Form Verisi</th>
                            <th class="py-3">Format</th>
                          </tr>
                        </thead>
                        <tbody>
                          <!--begin::Row-->
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-2">
                                <i class="fa-sharp fa-solid fa-triangle fs-10 pw-text-neutral-500" style="rotate: 90deg"></i>
                                <i class="fa-sharp fa-solid fa-folder fs-7 pw-text-primary-300"></i>
                                Belgeler
                              </div>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <!--end::Row-->

                          <!--begin::Row-->
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-2 ps-4">
                                <i class="fa-sharp fa-solid fa-triangle fs-10 pw-text-neutral-500" style="rotate: 90deg"></i>
                                <i class="fa-solid fa-folder fs-7 pw-text-primary-300"></i>
                                Genel
                              </div>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <!--end::Row-->

                          <!--begin::Row-->
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-2 ps-8">
                                <i class="fa-solid fa-file fs-7 pw-text-neutral-300"></i>
                                IMG-20232003210
                              </div>
                            </td>
                            <td>
                              <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                                <input class="form-check-input" type="checkbox" />
                              </div>
                            </td>
                            <td>
                              <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                                <input class="form-check-input" type="checkbox" />
                              </div>
                            </td>
                            <td>
                              <select class="form-select py-0 ps-2 pe-4 pw-text-neutral-700 fs-8 fw-bold rounded-2">
                                <option value="1" selected>JPG</option>
                                <option value="2">PNG</option>
                                <option value="3">WEBP</option>
                              </select>
                            </td>
                          </tr>
                          <!--end::Row-->
                        </tbody>
                      </table>
                    </div>
                    <!--end::Table-->
                  </div>
                  <!--end::Step 2-->

                  <!--begin::Step 3-->
                  <div class="flex-column" data-kt-stepper-element="content">
                    <!--begin::Wrapper-->
                    <div class="overflow-x-auto">
                      <!--begin::Form accordion-->
                      <div class="accordion accordion-icon-toggle" id="pw_step3_accordion">
                        <!--begin::Item-->
                        <div>
                          <!--begin::Header-->
                          <div class="accordion-header collapsed py-3 d-flex align-items-center gap-3" data-bs-toggle="collapse" data-bs-target="#pw_step3_accordion_1">
                            <span class="accordion-icon bg-white w-25px h-25px rounded-0.25rem" style="box-shadow: 0px 1px 4px 1px rgba(0, 0, 0, 0.08);">
                              <i class="fa-solid fa-angles-up fs-7"></i>
                            </span>
                            <h3 class="accordion-title text-black fs-8 mb-0 fw-normal">Daralt</h3>
                          </div>
                          <!--end::Header-->

                          <!--begin::Body-->
                          <div id="pw_step3_accordion_1" class="collapse" data-bs-parent="#pw_step3_accordion">
                            <!--begin::Table-->
                            <table class="table align-middle gy-2 gx-4 gs-2">
                              <tbody>
                                <!--begin::Row-->
                                <tr>
                                  <td>
                                    <label class="form-label fs-8 fw-bolder" for="pw_step3_imza">İmza</label>
                                  </td>
                                  <td>
                                    <select class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2" data-placeholder="Seçim Yapın" id="pw_step3_imza" name="pw_step3_imza">
                                      <option></option>
                                      <option value="1">Option 1</option>
                                      <option value="2">Option 2</option>
                                    </select>
                                  </td>
                                  <td class="w-30px text-center" width="30" align="center">
                                    <i class="fa-solid fa-list-ul fs-base pw-text-primary-500 cursor-pointer" data-bs-toggle="modal" data-bs-target="#eposta_imza"></i>
                                  </td>
                                </tr>
                                <!--end::Row-->

                                <!--begin::Row-->
                                <tr>
                                  <td>
                                    <label class="form-label fs-8 fw-bolder" for="pw_step3_hesap_adi">Hesap Adı</label>
                                  </td>
                                  <td>
                                    <select class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2" data-placeholder="Seçim Yapın" id="pw_step3_hesap_adi" name="pw_step3_hesap_adi">
                                      <option></option>
                                      <option value="1">Option 1</option>
                                      <option value="2">Option 2</option>
                                    </select>
                                  </td>
                                  <td class="w-30px text-center" width="30" align="center"></td>
                                </tr>
                                <!--end::Row-->

                                <!--begin::Row-->
                                <tr>
                                  <td>
                                    <label class="form-label fs-8 fw-bolder" for="pw_step3_sablon_adi">Şablon Adı</label>
                                  </td>
                                  <td>
                                    <select class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2" data-placeholder="Seçim Yapın" id="pw_step3_sablon_adi" name="pw_step3_sablon_adi">
                                      <option></option>
                                      <option value="1">Option 1</option>
                                      <option value="2">Option 2</option>
                                    </select>
                                  </td>
                                  <td class="w-30px text-center" width="30" align="center"></td>
                                </tr>
                                <!--end::Row-->
                              </tbody>
                            </table>
                            <!--end::Table-->
                          </div>
                          <!--end::Body-->
                        </div>
                        <!--end::Item-->
                      </div>
                      <!--end::Form accordion-->

                      <!--begin::Table-->
                      <table class="table align-middle gy-2 gx-4 gs-2 fs-8 fw-semibold">
                        <tbody>
                          <!--begin::Row-->
                          <tr>
                            <td>
                              <label class="form-label fs-8 fw-bolder" for="pw_step3_gonderen">Gönderen</label>
                            </td>
                            <td>
                              <span class="pw-text-neutral-900">UIDesk</span>
                            </td>
                            <td class="w-30px text-center" width="30" align="center"></td>
                          </tr>
                          <!--end::Row-->

                          <!--begin::Row-->
                          <tr>
                            <td>
                              <label class="form-label fs-8 fw-bolder" for="pw_step3_kime">Kime</label>
                            </td>
                            <td>
                              <input class="form-control form-control-sm fs-8 py-3 px-4" value="Abdullah Dayıoğlu" id="pw_step3_kime" />
                            </td>
                            <td class="w-30px text-center" width="30" align="center"></td>
                          </tr>
                          <!--end::Row-->

                          <!--begin::Row-->
                          <tr>
                            <td>
                              <label class="form-label fs-8 fw-bolder" for="pw_step3_kopya">Kopya</label>
                            </td>
                            <td>
                              <input class="form-control form-control-sm fs-8 py-3 px-4" id="pw_step3_kopya" placeholder="Kullanıcı seçiniz" />
                            </td>
                            <td class="w-30px text-center" width="30" align="center"></td>
                          </tr>
                          <!--end::Row-->

                          <!--begin::Row-->
                          <tr>
                            <td>
                              <label class="form-label fs-8 fw-bolder" for="pw_step3_gizli">Gizli</label>
                            </td>
                            <td>
                              <input class="form-control form-control-sm fs-8 py-3 px-4" id="pw_step3_gizli" placeholder="Kullanıcı seçiniz" />
                            </td>
                            <td class="w-30px text-center" width="30" align="center"></td>
                          </tr>
                          <!--end::Row-->

                          <!--begin::Row-->
                          <tr>
                            <td>
                              <label class="form-label fs-8 fw-bolder" for="pw_step3_konu">Konu</label>
                            </td>
                            <td>
                              <input type="text" class="form-control form-control-sm fs-8 py-3 px-4" id="pw_step3_konu" />
                            </td>
                            <td class="w-30px text-center" width="30" align="center"></td>
                          </tr>
                          <!--end::Row-->

                          <!--begin::Row-->
                          <tr>
                            <td colspan="2">
                              <div id="pw_step3_aciklama"></div>
                            </td>
                          </tr>
                          <!--end::Row-->
                        </tbody>
                      </table>
                      <!--end::Table-->
                    </div>
                    <!--end::Wrapper-->
                  </div>
                  <!--end::Step 3-->
                </div>
                <!--end::Group-->

                <!--begin::Actions-->
                <div class="d-flex align-items-center justify-content-end gap-3">
                  <button id="stepClear" type="clear" class="btn btn-active-light px-4 py-3 fs-7" data-kt-stepper-action="clear">
                    İptal
                  </button>
                  <button type="button" class="btn btn-primary px-4 py-3 fs-7" data-kt-stepper-action="submit">
                    <span class="indicator-label">
                      Gönder
                    </span>
                    <span class="indicator-progress">
                      Lütfen bekleyin... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                  </button>
                </div>
                <!--end::Actions-->
              </form>
              <!--end::Form-->
            </div>
            <!--end::Stepper-->
          </div>
          <!--end::Card-->
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

<!--begin::Modal-->
<div class="modal fade" tabindex="-1" id="eposta_imza" role="dialog">
  <div class="modal-dialog modal-dialog-centered modal-lg mw-950px">
    <div class="modal-content">
      <div class="modal-header border-0 pb-3">
        <h3 class="modal-title fs-5">Elektronik Posta İmza Taslakları</h3>
      </div>

      <div class="modal-body">
        <!--begin::Wrapper-->
        <div class="d-flex gap-8 overflow-x-auto">
          <!--begin::Col-->
          <div class="w-325px d-flex flex-column gap-3 py-5 px-7 border pw-border-stroke rounded-1 flex-shrink-0">
            <!--begin::Item-->
            <div class="d-flex align-items-center gap-3 fs-8 pw-text-danger-500 fw-semibold">
              <i class="fa-solid fa-file-signature pw-text-primary-500 fs-7"></i>
              Yeni
            </div>
            <!--end::Item-->

            <!--begin::Item-->
            <div class="d-flex align-items-center gap-3 justify-content-between fs-8 pw-text-neutral-800 fw-semibold">
              <div class="d-flex align-items-center gap-3">
                <i class="fa-solid fa-file-signature pw-text-primary-500 fs-6"></i>
                UIDesk
              </div>

              <button type="button" class="btn p-0">
                <i class="fa-solid fa-trash-can pw-text-neutral-300 fs-6"></i>
              </button>
            </div>
            <!--end::Item-->
          </div>
          <!--end::Col-->

          <!--begin::Col-->
          <div class="min-w-500px w-100">
            <!--begin::Table-->
            <table class="table align-middle gy-4">
              <!--begin::Row-->
              <tr>
                <td>
                  <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                    <input class="form-check-input" type="checkbox" id="pw_modal_varsayilan_imza" checked="checked" />
                    <label class="form-check-label pw-text-neutral-700 fw-medium" for="pw_modal_varsayilan_imza">
                      Varsayılan İmza
                    </label>
                  </div>
                </td>
              </tr>
              <!--end::Row-->

              <!--begin::Row-->
              <tr>
                <td>
                  <input type="text" class="form-control form-control-solid px-4 py-3 fs-8" placeholder="İmza Adı" />
                </td>
              </tr>
              <!--end::Row-->

              <!--begin::Row-->
              <tr>
                <td>
                  <div id="pw_modal_aciklama"></div>
                </td>
              </tr>
              <!--end::Row-->
            </table>
            <!--end::Table-->
          </div>
          <!--end::Col-->
        </div>
        <!--end::Wrapper-->
      </div>
    </div>
  </div>
</div>
<!--end::Modal-->

<!--begin::Stepper script-->
<script>
  window.addEventListener('DOMContentLoaded', () => {
    // Stepper lement
    var element = document.querySelector("#Stepper");

    // Initialize Stepper
    var stepper = new KTStepper(element);

    // Handle navigation click
    stepper.on("kt.stepper.click", function(stepper) {
      stepper.goTo(stepper.getClickedStepIndex()); // go to clicked step
    });

    // Handle next step
    stepper.on("kt.stepper.next", function(stepper) {
      stepper.goNext(); // go next step
    });

    // Handle previous step
    stepper.on("kt.stepper.previous", function(stepper) {
      stepper.goPrevious(); // go previous step
    });

    var stepClear = document.getElementById('stepClear');
    stepClear.addEventListener('click', () => {
      stepper.goFirst();
    })
  });
</script>
<!--end::Stepper script-->

<style>
  [data-kt-stepper-action=clear] {
    display: none;
  }

  .stepper.last [data-kt-stepper-action=clear] {
    display: inline-block !important;
  }
</style>

<!--begin::Tagify script-->
<script>
  window.addEventListener('DOMContentLoaded', () => {
    var input1 = document.querySelector("#pw_step3_kime");
    var input2 = document.querySelector("#pw_step3_kopya");
    var input3 = document.querySelector("#pw_step3_gizli");
    new Tagify(input1);
    new Tagify(input2);
    new Tagify(input3);
  })
</script>
<!--end::Tagify script-->

<!--begin::Classic editor script-->
<script>
  window.addEventListener('DOMContentLoaded', () => {
    ClassicEditor
      .create(document.querySelector('#pw_step3_aciklama'), {
        toolbar: {
          items: [
            'heading', '|',
            'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript',
            'removeFormat', '|',
            'bulletedList', 'numberedList', 'todoList', '|',
            'outdent', 'indent', '|',
            'undo', 'redo',
            'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', 'alignment', 'link',
            '|',
          ],
          shouldNotGroupWhenFull: true
        },
      })
      .catch(error => {
        console.error(error);
      });
    ClassicEditor
      .create(document.querySelector('#pw_modal_aciklama'), {
        toolbar: {
          items: [
            'heading', '|',
            'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript',
            'removeFormat', '|',
            'bulletedList', 'numberedList', 'todoList', '|',
            'outdent', 'indent', '|',
            'undo', 'redo',
            'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', 'alignment', 'link',
            '|',
          ],
          shouldNotGroupWhenFull: true
        },
      })
      .catch(error => {
        console.error(error);
      });
  })
</script>
<!--end::Classic editor script-->

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/foot.php'; ?>