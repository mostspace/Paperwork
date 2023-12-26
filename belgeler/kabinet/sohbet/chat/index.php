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
        <div class="col-12 col-lg-6 d-flex flex-column">
          <!--begin::Back button-->
          <div>
            <a href="/belgeler/kabinet/" class="btn btn-color-primary fs-7 p-0 fw-semibold mb-4">
              <i class="fa-solid fa-chevron-left fs-4"></i>
              Geri
            </a>
          </div>
          <!--end::Back button-->

          <!--begin::Card-->
          <div class="border pw-border-stroke rounded-3 flex-fill">
            <!--begin::Row-->
            <div class="overflow-x-auto row g-0 pb-4 h-100">
              <!--begin::Sidebar-->
              <div class="ps-3 col mw-225px border-end pw-border-stroke">
                <!--begin::Header-->
                <div class="d-flex align-items-center gap-5 border-bottom pw-border-stroke pe-3 h-70px">
                  <!--begin::Back button-->
                  <a href="/belgeler/kabinet/sohbet/chat/sohbet-listesi/" class="btn btn-color-primary p-0" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="bottom" title="Sohbet Listesi">
                    <i class="fa-solid fa-chevron-left fs-6"></i>
                  </a>
                  <!--end::Back button-->

                  <!--begin::User info-->
                  <div class="d-flex align-items-center gap-3 py-3">
                    <!--begin::Avatar-->
                    <div class="position-relative w-35px h-35px d-flex align-items-center justify-content-center pw-bg-primary-100 rounded-pill">
                      <span class="pw-text-primary-500 fs-4 fw-semibold">U</span>
                      <span class="position-absolute bottom-0 end-0 w-8px h-8px pw-bg-success-500 rounded-pill"></span>
                    </div>
                    <!--end::Avatar-->

                    <!--begin::Label-->
                    <div class="d-flex flex-column gap-1">
                      <span class="pw-text-primary-900 fs-7 fw-bolder">UIDesk</span>
                      <span class="pw-text-neutral-500 fs-9 fw-semibold d-inline-block text-truncate" style="max-width: 130px;">Art Director at Novica Co.</span>
                    </div>
                    <!--end::Label-->
                  </div>
                  <!--end::User info-->
                </div>
                <!--end::Header-->

                <!--begin::Sidebar content-->
                <div class="pe-3">
                  <!--begin::Add user button-->
                  <button type="button" class="btn btn-primary py-2 px-3 fs-9 fw-semibold mt-3">
                    <i class="fa-solid fa-plus"></i>
                    Kullanıcı Ekle
                  </button>
                  <!--end::Add user button-->

                  <!--begin::Users-->
                  <div class="d-flex align-items-center my-4">
                    <!--begin::Item-->
                    <div class="d-flex align-items-center justify-content-center w-25px h-25px rounded-pill text-white fs-8 fw-bolder" style="background: #FFC700;">A</div>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <div class="d-flex align-items-center justify-content-center w-25px h-25px rounded-pill text-white fs-8 fw-bolder ms-n1" style="background: #00A3FF;">S</div>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <div class="d-flex align-items-center justify-content-center w-25px h-25px rounded-pill text-white fs-8 fw-bolder ms-n1" style="background: #F1416C;">P</div>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <div class="d-flex align-items-center justify-content-center w-25px h-25px rounded-pill text-white fw-bolder ms-n1" style="background: #181C32;font-size: 10px">+42</div>
                    <!--end::Item-->
                  </div>
                  <!--end::Users-->

                  <!--begin::User search-->
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
                      <input type="text" class="form-control pw-input-stroke py-2 ps-9 pe-2 fs-8" name="search" value="" placeholder="Kullanıcı adı arayınız" data-kt-search-element="input">
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
                  <!--end::User search-->

                  <!--begin::Users-->
                  <div class="d-flex flex-column">
                    <!--begin::Title-->
                    <div class="px-4 py-3 pw-text-neutral-900 fs-8">
                      Hepsi
                    </div>
                    <!--end::Title-->

                    <!--begin::Users-->
                    <div class="menu menu-column menu-state-bg">
                      <!--begin::Menu item-->
                      <div class="menu-item">
                        <a href="javascript:void(0)" class="menu-link d-flex align-items-center gap-2" role="button">
                          <!--begin::Avatar-->
                          <div class="position-relative symbol symbol-35px w-35px h-35px d-flex align-items-center justify-content-center symbol-circle pw-bg-primary-100">
                            <span class="pw-text-primary-500 fs-4 fw-bold">U</span>
                            <span class="position-absolute bottom-0 end-0 w-8px h-8px rounded-pill pw-bg-success-500"></span>
                          </div>
                          <!--end::Avatar-->

                          <!--begin::User info-->
                          <div class="d-flex flex-column">
                            <span class="pw-text-neutral-700 fs-8 fw-bolder">UIDesk</span>
                            <span class="pw-text-neutral-500 fs-9 fw-semibold d-inline-block text-truncate" style="max-width:125px">Art Director at Novica Co.</span>
                          </div>
                          <!--end::User info-->
                        </a>
                      </div>
                      <!--end::Menu item-->

                      <!--begin::Menu item-->
                      <div class="menu-item">
                        <a href="javascript:void(0)" class="menu-link d-flex align-items-center gap-2" role="button">
                          <!--begin::Avatar-->
                          <div class="position-relative symbol symbol-35px w-35px h-35px d-flex align-items-center justify-content-center symbol-circle" style="background:#FFC700">
                            <span class="text-white fs-4 fw-bold">A</span>
                          </div>
                          <!--end::Avatar-->

                          <!--begin::User info-->
                          <div class="d-flex flex-column">
                            <span class="pw-text-neutral-700 fs-8 fw-bolder">Abdullah Dayıoğlu</span>
                            <span class="pw-text-neutral-500 fs-9 fw-semibold d-inline-block text-truncate" style="max-width:125px">Test Uzmanı</span>
                          </div>
                          <!--end::User info-->
                        </a>
                      </div>
                      <!--end::Menu item-->

                      <!--begin::Menu item-->
                      <div class="menu-item">
                        <a href="javascript:void(0)" class="menu-link d-flex align-items-center gap-2" role="button">
                          <!--begin::Avatar-->
                          <div class="position-relative symbol symbol-35px w-35px h-35px d-flex align-items-center justify-content-center symbol-circle pw-bg-danger-400">
                            <span class="text-white fs-4 fw-bold">O</span>
                          </div>
                          <!--end::Avatar-->

                          <!--begin::User info-->
                          <div class="d-flex flex-column">
                            <span class="pw-text-neutral-700 fs-8 fw-bolder">Owl Paperwork</span>
                            <span class="pw-text-neutral-500 fs-9 fw-semibold d-inline-block text-truncate" style="max-width:125px">Test Uzman Yardımcısı</span>
                          </div>
                          <!--end::User info-->
                        </a>
                      </div>
                      <!--end::Menu item-->
                    </div>
                    <!--end::Users-->
                  </div>
                  <!--end::Users-->
                </div>
                <!--end::Sidebar content-->
              </div>
              <!--end::Sidebar-->

              <!--begin::Messenger-->
              <div class="col d-flex flex-column">
                <!--begin::Header-->
                <div class="d-flex align-items-center justify-content-between px-4 py-3 h-70px border-bottom pw-border-stroke">
                  <!--begin::Title-->
                  <div class="pw-text-neutral-800 fs-8 fw-semibold">Test</div>
                  <!--end::Title-->

                  <!--begin::Actions-->
                  <div class="d-flex align-items-center gap-4">
                    <!--begin::Item-->
                    <button type="button" class="btn p-0 btn-color-gray btn-active-color-primary">
                      <i class="fa-solid fa-bars fs-2"></i>
                    </button>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <button type="button" class="btn p-0 btn-color-gray btn-active-color-primary">
                      <i class="fa-solid fa-arrows-maximize fs-2"></i>
                    </button>
                    <!--end::Item-->
                  </div>
                  <!--end::Actions-->
                </div>
                <!--end::Header-->

                <!--begin::Messages-->
                <div class="d-flex flex-column justify-content-between flex-fill">
                  <!--begin::Wrapper-->
                  <div class="d-flex flex-column gap-8 flex-fill py-4 px-3">
                    <!--begin::Item-->
                    <div class="d-flex flex-column gap-4">
                      <!--begin::User info-->
                      <div class="d-flex align-items-center gap-3">
                        <!--begin::Avatar-->
                        <div class="d-flex align-items-center justify-content-center w-35px h-35px rounded-pill text-white fs-base fw-bolder" style="background-color: #FFC700;">A</div>
                        <!--end::Avatar-->

                        <!--begin::Label-->
                        <div class="d-flex flex-column gap-1">
                          <span class="text-black fs-8 fw-bolder">Abdullah Dayıoğlu</span>
                          <span class="pw-text-neutral-300 fs-9 fw-semibold">Test Uzmanı</span>
                        </div>
                        <!--end::Label-->
                      </div>
                      <!--end::User info-->

                      <!--begin::Message-->
                      <div class="d-flex align-items-center gap-4">
                        <div class="py-3 px-2 rounded pw-bg-warning-100 text-black fs-8">
                          Worem ipsum dolor sit amet, consectetur adipiscing elit.      
                        </div>

                        <span class="pw-text-neutral-300 fs-9">2dk</span>
                      </div>
                      <!--end::Message-->
                    </div>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <div class="d-flex flex-column gap-4">
                      <!--begin::User info-->
                      <div class="d-flex flex-row-reverse text-end align-items-center gap-3">
                        <!--begin::Avatar-->
                        <div class="d-flex align-items-center justify-content-center w-35px h-35px rounded-pill pw-text-primary-500 pw-bg-primary-100 fs-base fw-bolder">U</div>
                        <!--end::Avatar-->

                        <!--begin::Label-->
                        <div class="d-flex flex-column gap-1">
                          <span class="text-black fs-8 fw-bolder">UIDesk</span>
                          <span class="pw-text-neutral-300 fs-9 fw-semibold">Test Uzmanı</span>
                        </div>
                        <!--end::Label-->
                      </div>
                      <!--end::User info-->

                      <!--begin::Message-->
                      <div class="d-flex flex-row-reverse align-items-center gap-4">
                        <div class="py-3 px-2 rounded pw-bg-primary-100 text-black fs-8">
                          Worem ipsum dolor sit amet, consectetur adipiscing elit.      
                        </div>

                        <span class="pw-text-neutral-300 fs-9">1dk</span>
                      </div>
                      <!--end::Message-->
                    </div>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <div class="d-flex flex-column gap-4">
                      <!--begin::User info-->
                      <div class="d-flex align-items-center gap-3">
                        <!--begin::Avatar-->
                        <div class="d-flex align-items-center justify-content-center w-35px h-35px rounded-pill text-white pw-bg-danger-400 fs-base fw-bolder">O</div>
                        <!--end::Avatar-->

                        <!--begin::Label-->
                        <div class="d-flex flex-column gap-1">
                          <span class="text-black fs-8 fw-bolder">Owl PaperWork</span>
                          <span class="pw-text-neutral-300 fs-9 fw-semibold">Test Uzmanı Yardımcısı</span>
                        </div>
                        <!--end::Label-->
                      </div>
                      <!--end::User info-->

                      <!--begin::Message-->
                      <div class="d-flex align-items-center gap-4">
                        <div class="py-3 px-2 rounded pw-bg-danger-200 text-black fs-8">
                          Worem ipsum dolor sit amet, consectetur adipiscing elit.      
                        </div>
                      </div>
                      <!--end::Message-->
                    </div>
                    <!--end::Item-->
                  </div>
                  <!--end::Wrapper-->

                  <!--begin::Message box-->
                  <div id="messageBox"></div>
                  <!--end::Message box-->
                </div>
                <!--end::Messages-->
              </div>
              <!--end::Messenger-->
            </div>
            <!--end::Row-->
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

<script>
  window.addEventListener('DOMContentLoaded', () => {
    ClassicEditor
      .create(document.querySelector('#messageBox'), {
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

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/foot.php'; ?>