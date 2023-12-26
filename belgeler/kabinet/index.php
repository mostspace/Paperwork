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
              <a href="javscript:void(0)" class="menu-link px-3 py-2 fs-8">
                <span class="menu-title">Açılış Sayfası Yap</span>
              </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item px-3 my-0">
              <a href="#" class="menu-link px-3 py-2 fs-8" data-bs-toggle="modal" data-bs-target="#menuye_ekle">
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
                <h3 class="text-black fs-7 fw-semibold mb-0">Ruhsat Dosyası</h3>
                <!--end::Title-->

                <!--begin::Description-->
                <p class="pw-text-neutral-500 fs-8 mb-0">
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
                <h3 class="text-black fs-7 fw-semibold mb-0">Diğer-00009</h3>
                <!--end::Title-->

                <!--begin::Description-->
                <p class="pw-text-neutral-500 fs-8 mb-0">
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
              <div class="position-relative d-flex align-items-center justify-content-center w-60px h-80px border pw-border-stroke">
                <img class="mw-100" src="/assets/media/screenshots/c9b464f84316653e451a37601b03b43a.png" />

                <button type="button" class="position-absolute bottom-0 end-0 btn p-0">
                  <i class="fa-solid fa-file-word pw-text-primary-400 fs-5 p-0"></i>
                </button>
              </div>
              <!--end::Icon-->

              <!--begin::Content-->
              <div class="d-flex flex-column gap-2">
                <!--begin::Title-->
                <h3 class="text-black fs-7 fw-semibold mb-0">Diğer-00009</h3>
                <!--end::Title-->

                <!--begin::Description-->
                <p class="pw-text-neutral-500 fs-8 mb-0">
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
                <h3 class="text-black fs-7 fw-semibold mb-0 text-decoration-underline">Ruhsat Dosyası</h3>
                <!--end::Title-->

                <!--begin::Description-->
                <p class="pw-text-neutral-500 fs-8 mb-0">
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
                <h3 class="text-black fs-7 fw-semibold mb-0">Ruhsat Dosyası</h3>
                <!--end::Title-->

                <!--begin::Description-->
                <p class="pw-text-neutral-500 fs-8 mb-0">
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
                <h3 class="text-black fs-7 fw-semibold mb-0">Ruhsat Dosyası</h3>
                <!--end::Title-->

                <!--begin::Description-->
                <p class="pw-text-neutral-500 fs-8 mb-0">
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
          <!--begin::Tab header wrapper-->
          <div class="table-reponsive overflow-x-auto">
            <!--begin::Table tabs-->
            <div class="nav nav-tabs nav-line-tabs fs-6 px-10 gap-8" role="tablist">
              <!--begin::Tab item-->
              <li class="nav-item" role="presentation">
                <a class="nav-link mx-0 pt-0 pb-3 fs-base rounded-0 fw-semibold active" data-bs-toggle="tab" href="#pw_tab_pane_ozellikler" aria-selected="true" role="tab">Özellikler</a>
              </li>
              <!--end::Tab item-->

              <!--begin::Tab item-->
              <li class="nav-item" role="presentation">
                <a class="nav-link mx-0 pt-0 pb-3 fs-base rounded-0" data-bs-toggle="tab" href="#pw_tab_pane_e_form" aria-selected="false" role="tab">E Form</a>
              </li>
              <!--end::Tab item-->

              <!--begin::Tab item-->
              <li class="nav-item" role="presentation">
                <a class="nav-link mx-0 pt-0 pb-3 fs-base rounded-0" data-bs-toggle="tab" href="#pw_tab_pane_e_form" aria-selected="false" role="tab">Goster</a>
              </li>
              <!--end::Tab item-->
            </div>
            <!--end::Table tabs-->
          </div>
          <!--end::Tab header wrapper-->

          <!--begin::Tab contents-->

          <div class="tab-content pw-dashboard-tab-content mt-2" id="kabinetTabContents">
            <!--begin::Ozellikler content-->
            <div class="tab-pane fade active show" id="pw_tab_pane_ozellikler" role="tabpanel">
              <div class="border pw-border-stroke rounded-3 py-6 px-7">
                <!--begin::Card actions-->
                <div class="d-flex align-items-center justify-content-between gap-3 overflow-x-auto pb-2">
                  <div class="d-flex align-items-center gap-3">
                    <!--begin::Item-->
                    <button type="button" class="btn p-0" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="bottom" title="Diske Kaydet">
                      <i class="fa-solid fa-floppy-disk fs-3 pw-text-neutral-300"></i>
                    </button>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <a href="/belgeler/kabinet/word" class="btn p-0">
                      <i class="fa-solid fa-user-pen fs-3 pw-text-neutral-300"></i>
                    </a>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <div>
                      <button type="button" class="btn p-0" data-kt-menu-trigger="click" data-kt-menu-placement="bottom" data-kt-menu-offset="0,5">
                        <i class="fa-solid fa-trash-can fs-3 pw-text-neutral-300"></i>
                      </button>

                      <!--begin::Dropdown-->
                      <div class="menu menu-sub menu-sub-dropdown w-250px py-4 px-6 rounded-4 pw-shadow-3" data-kt-menu="true">
                        <!--begin::title-->
                        <h4 class="pw-text-primary-800 fs-8 fw-semibold mb-3">Bu belgeyi silmek istiyor musunuz?</h4>
                        <!--end::title-->

                        <!--begin::Paragraph-->
                        <p class="pw-text-danger-300 fs-9 mb-4">Bu belge tipi anında sistemden çıkartılır.</p>
                        <!--end::Paragraph-->

                        <!--begin::Actions-->
                        <div class="d-flex align-items-center justify-content-end gap-2">
                          <!--begin::Item-->
                          <button type="button" class="btn btn-active-light px-4 py-3 fs-9">Vazgeç</button>
                          <!--end::Item-->

                          <!--begin::Item-->
                          <button id="deleteToastr" type="button" class="btn btn-danger px-7 py-3 fs-9">Sil</button>
                          <!--end::Item-->
                        </div>
                        <!--end::Actions-->
                      </div>
                      <!--end::Dropdown-->
                    </div>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <button type="button" class="btn p-0" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="bottom" title="Yazıcıya Gönder">
                      <i class="fa-solid fa-print fs-3 pw-text-neutral-300"></i>
                    </button>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <div>
                      <button type="button" class="btn p-0" data-kt-menu-trigger="click" data-kt-menu-placement="bottom" data-kt-menu-offset="0,5">
                        <i class="fa-solid fa-share-nodes fs-3 pw-text-neutral-300"></i>
                      </button>

                      <!--begin::dropdown-->
                      <div class="menu menu-sub menu-sub-dropdown w-200px" data-kt-menu="true" id="pw_belgeler_kabinet">
                        <div class="d-flex flex-column">
                          <!--begin::Item-->
                          <a href="/belgeler/kabinet/paylas/elektronik-posta/" class="btn btn-active-light-secondary pw-text-neutral-800 fw-semibold fs-7 text-start py-3 px-4 rounded-0">Elektronik Posta</a>
                          <!--end::Item-->

                          <!--begin::Item-->
                          <a href="/belgeler/kabinet/paylas/paylasim-tarihcesi/" class="btn btn-active-light-secondary pw-text-neutral-800 fw-semibold fs-7 text-start py-3 px-4 rounded-0">Paylaşım Tarihçesi</a>
                          <!--end::Item-->
                        </div>
                      </div>
                      <!--end::dropdown-->
                    </div>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <button id="favoriteBtn" type="button" class="btn p-0" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="bottom" title="Favoriye Ekle/Çıkar">
                      <i class="fa-solid fa-heart fs-3 pw-text-neutral-300"></i>
                    </button>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <div>
                      <button type="button" class="btn p-0" data-kt-menu-trigger="click" data-kt-menu-placement="bottom" data-kt-menu-offset="0,5">
                        <i class="fa-solid fa-star-sharp fs-3 pw-text-neutral-300"></i>
                      </button>

                      <!--begin::Dropdown-->
                      <div class="menu menu-sub menu-sub-dropdown w-250px p-1 rounded-4 pw-shadow-3" data-kt-menu="true">
                        <!--begin::Row-->
                        <div class="d-flex flex-column gap-2 p-3 border-bottom pw-border-stroke">
                          <!--begin::Label-->
                          <span class="text-black fs-9 fw-semibold">Değerlendir:</span>
                          <!--end::Label-->

                          <div class="d-flex justify-content-between gap-3">
                            <div class="d-flex align-items-center">
                              <button type="text" class="btn active p-0 btn-icon-gray-300 btn-active-icon-warning">
                                <i class="fa-solid fa-star-sharp fs-7"></i>
                              </button>

                              <button type="text" class="btn active p-0 btn-icon-gray-300 btn-active-icon-warning">
                                <i class="fa-solid fa-star-sharp fs-7"></i>
                              </button>

                              <button type="text" class="btn p-0 btn-icon-gray-300 btn-active-icon-warning">
                                <i class="fa-solid fa-star-sharp fs-7"></i>
                              </button>

                              <button type="text" class="btn p-0 btn-icon-gray-300 btn-active-icon-warning">
                                <i class="fa-solid fa-star-sharp fs-7"></i>
                              </button>

                              <button type="text" class="btn p-0 btn-icon-gray-300 btn-active-icon-warning">
                                <i class="fa-solid fa-star-sharp fs-7"></i>
                              </button>
                            </div>

                            <span class="text-black fs-9 fw-semibold">2</span>
                          </div>
                        </div>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <div class="d-flex flex-column gap-2 p-3">
                          <!--begin::Label-->
                          <span class="text-black fs-9 fw-semibold">Ortalama:</span>
                          <!--end::Label-->

                          <div class="d-flex justify-content-between gap-3">
                            <div class="d-flex align-items-center">
                              <button type="text" class="btn p-0 btn-icon-gray-300 btn-active-icon-warning">
                                <i class="fa-solid fa-star-sharp fs-7"></i>
                              </button>

                              <button type="text" class="btn p-0 btn-icon-gray-300 btn-active-icon-warning">
                                <i class="fa-solid fa-star-sharp fs-7"></i>
                              </button>

                              <button type="text" class="btn p-0 btn-icon-gray-300 btn-active-icon-warning">
                                <i class="fa-solid fa-star-sharp fs-7"></i>
                              </button>

                              <button type="text" class="btn p-0 btn-icon-gray-300 btn-active-icon-warning">
                                <i class="fa-solid fa-star-sharp fs-7"></i>
                              </button>

                              <button type="text" class="btn p-0 btn-icon-gray-300 btn-active-icon-warning">
                                <i class="fa-solid fa-star-sharp fs-7"></i>
                              </button>
                            </div>

                            <span class="text-black fs-9 fw-semibold">0</span>
                          </div>
                        </div>
                        <!--end::Row-->
                      </div>
                      <!--end::Dropdown-->
                    </div>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <a href="/belgeler/kabinet/tarihce/" class="btn p-0" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="bottom" title="Tarihçe">
                      <i class="fa-solid fa-clock-rotate-left fs-3 pw-text-neutral-300"></i>
                    </a>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <a href="/belgeler/kabinet/sohbet/" class="btn p-0" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="bottom" title="Sohbet">
                      <i class="fa-solid fa-messages fs-3 pw-text-neutral-300"></i>
                    </a>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <a href="/belgeler/kabinet/notlar/" class="btn p-0" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="bottom" title="Notlar">
                      <i class="fa-solid fa-message fs-3 pw-text-neutral-300"></i>
                    </a>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <div>
                      <button type="button" class="btn p-0" data-kt-menu-trigger="click" data-kt-menu-placement="bottom" data-kt-menu-offset="0,5">
                        <i class="fa-solid fa-lock fs-3 pw-text-neutral-300"></i>
                      </button>

                      <!--begin::dropdown-->
                      <div class="menu menu-sub menu-sub-dropdown w-200px" data-kt-menu="true" id="pw_belgeler_kabinet">
                        <div class="d-flex flex-column">
                          <!--begin::Item-->
                          <button id="lockCheckOutBtn" type="button" class="btn btn-active-light-secondary pw-text-neutral-800 fw-semibold fs-7 text-start py-3 px-4 rounded-0">Check Out</button>
                          <!--end::Item-->

                          <!--begin::Item-->
                          <a href="/belgeler/kabinet/editor-ile-versiyonla/" class="btn btn-active-light-secondary pw-text-neutral-800 fw-semibold fs-7 text-start py-3 px-4 rounded-0">Editör ile Versiyonla</a>
                          <!--end::Item-->
                        </div>
                      </div>
                      <!--end::dropdown-->
                    </div>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <button id="panoBtn" type="button" class="btn p-0" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="bottom" title="Panoya Ekle">
                      <i class="fa-solid fa-clipboard-list-check fs-3 pw-text-neutral-300"></i>
                    </button>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <div>
                      <button type="button" class="btn p-0" data-kt-menu-trigger="click" data-kt-menu-placement="bottom" data-kt-menu-offset="0,5">
                        <i class="fa-solid fa-file-signature fs-3 pw-text-neutral-300"></i>
                      </button>

                      <!--begin::dropdown-->
                      <div class="menu menu-sub menu-sub-dropdown w-200px" data-kt-menu="true" id="pw_belgeler_kabinet">
                        <div class="d-flex flex-column">
                          <!--begin::Item-->
                          <a href="/belgeler/kabinet/imzala/" class="btn btn-active-light-secondary pw-text-neutral-800 fw-semibold fs-7 text-start py-3 px-4 rounded-0">İmzala</a>
                          <!--end::Item-->

                          <!--begin::Item-->
                          <a href="/belgeler/kabinet/imzala/dokuman-imza-listesi/" class="btn btn-active-light-secondary pw-text-neutral-800 fw-semibold fs-7 text-start py-3 px-4 rounded-0">Döküman İmza Listesi</a>
                          <!--end::Item-->
                        </div>
                      </div>
                      <!--end::dropdown-->
                    </div>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <div data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="bottom" title="Akışa Gönder">
                      <button type="button" class="btn p-0" data-bs-toggle="modal" data-bs-target="#akisa_gonder">
                        <i class="fa-solid fa-gear fs-3 pw-text-neutral-300"></i>
                      </button>
                    </div>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <button type="button" class="btn p-0" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="bottom" title="Eksik Belge">
                      <i class="fa-solid fa-file-exclamation fs-3 pw-text-neutral-300"></i>
                    </button>
                    <!--end::Item-->
                  </div>

                  <!--begin::Help button-->
                  <button type="button" class="btn p-0">
                    <i class="fa-solid fa-circle-question fs-3 pw-text-neutral-300"></i>
                  </button>
                  <!--end::Help button-->
                </div>
                <!--end::Card actions-->

                <!--begin::Table-->
                <div class="table-responsive mt-6">
                  <table class="table pw-text-neutral-900 fs-8 gx-4 gy-2">
                    <tbody>
                      <!--begin::Row-->
                      <tr>
                        <td class="fw-bolder">Belge No</td>
                        <td>
                          <button id="clipboardBtn" type="button" class="btn btn-link btn-text-primary p-0 fs-8" data-clipboard-text="FF020002340020B10">FF020002340020B10</button>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td class="fw-bolder">Belge Adı</td>
                        <td>
                          <a href="/belgeler/kabinet/#" class="btn btn-link btn-text-primary p-0 fs-8">ONS_rule_engine_01</a>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td class="fw-bolder">Dosya Formatı</td>
                        <td>Tagged Image File Format</td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td class="fw-bolder">Belge Tipi</td>
                        <td>Sistem</td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td class="fw-bolder">Versiyonu</td>
                        <td>1.0</td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td class="fw-bolder">Kayıt Tarihi</td>
                        <td>26.12.2022 11:53:41</td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td class="fw-bolder">Kaydeden</td>
                        <td><button type="button" class="btn btn-link btn-text-primary p-0 fs-8" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="bottom" data-bs-html="true" title="<img src='https://placehold.co/150x150' class='w-25px h-25px rounded-pill me-2' width='25' height='25' /><span class='fw-bold'>Fatih Şimşek</span>">Fatih Şimşek</button></td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td class="fw-bolder">Tam Metin Arama</td>
                        <td>
                          <div class="d-flex align-items-center gap-4">
                            Hazır
                            <button type="button" class="btn btn-icon p-0 h-20px w-20px">
                              <i class="fa-solid fa-circle-question fs-base pw-text-primary-300"></i>
                            </button>
                          </div>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td class="fw-bolder">Belge Boyutu</td>
                        <td>317.61 Kb</td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td class="fw-bolder">Yetki Seti</td>
                        <td><a href="/belgeler/kabinet/#" class="btn btn-link btn-text-primary p-0 fs-8">Sales Base ACL</a></td>
                      </tr>
                      <!--end::Row-->
                      <!--begin::Row-->
                      <tr>
                        <td class="fw-bolder">Açıklama</td>
                        <td>
                          <a href="/belgeler/kabinet/edit/" class="btn p-0">
                            <i class="fa-solid fa-pen-line fs-base pw-text-primary-300"></i>
                            </button>
                        </td>
                      </tr>
                      <!--end::Row-->
                    </tbody>
                  </table>
                </div>
                <!--end::Table-->
              </div>
            </div>
            <!--end::Ozellikler content-->
          </div>
          <!--end::Tab contents-->
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

<!--begin::Pano dropdown-->
<div id="panoDropdown" class="d-none app-navbar-item ms-1 ms-md-3">
  <div class="position-relative btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" data-kt-menu-offset="0,5">
    <i class="fa-solid fa-clipboard-list-check fs-4"></i>
    <span class="position-absolute top-0 start-100 translate-middle badge badge-circle pw-bg-danger-500 text-white w-20px h-20px fs-9">1</span>
  </div>

  <div class="menu menu-sub menu-sub-dropdown w-300px overflow-hidden" data-kt-menu="true" id="pw_pano" data-popper-placement="bottom-start">
    <!--begin::Header-->
    <div class="d-flex align-items-center justify-content-between gap-4 pw-bg-neutral-200 p-3">
      <!--begin::Title-->
      <span class="fs-8 pw-text-neutral-700 fw-bold">Pano</span>
      <!--end::Title-->

      <button type="text" class="btn p-0">
        <i class="fa-solid fa-trash-can fs-6 pw-text-danger-500"></i>
      </button>
    </div>
    <!--end::Header-->

    <!--begin::Body-->
    <div class="d-flex gap-3 px-4 py-2">
      <!--begin::Icon-->
      <div class="d-flex align-items-center justify-content-center w-30px h-30px rounded pw-bg-primary-100">
        <i class="fa-solid fa-file-word fs-6 pw-text-primary-500"></i>
      </div>
      <!--end::Icon-->

      <!--begin::Content-->
      <div>
        <!--begin::Label-->
        <span class="text-black fs-8">Diğer-00009</span>
        <!--end::Label-->

        <div class="d-flex align-items-center gap-4 mt-2">
          <!--begin::Item-->
          <div class="py-1 px-3 border border-dashed rounded pw-border-neutral-200 fs-9 pw-text-neutral-800 fw-semibold">
            1 Klasör, 12 Belge
          </div>
          <!--end::Item-->

          <!--begin::Item-->
          <div class="py-1 px-3 border border-dashed rounded pw-border-neutral-200 fs-9 pw-text-neutral-800 fw-semibold">
            (1.0) 4.61 Mb
          </div>
          <!--end::Item-->
        </div>

        <!--begin::Actions-->
        <div class="d-flex align-items-center gap-2 mt-3">
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

        <span class="pw-text-primary-400 fs-9 mt-1">Dikkan Taslak Kabineti</span>
      </div>
      <!--end::Content-->
    </div>
    <!--end::Body-->
  </div>
</div>
<!--end::Pano dropdown-->

<!--begin::Modal-->
<div class="modal fade" tabindex="-1" id="akisa_gonder" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg mw-950px">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Akışa Gönder</h3>

        <!--begin::Close-->
        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
          <i class="fa-solid fa-xmark fs-4"></i>
        </div>
        <!--end::Close-->
      </div>

      <div class="modal-body">
        <!--begin::Card group-->
        <div class="row g-3 table-responsive">
          <!--begin::Col-->
          <div class="col">
            <!--begin::Card-->
            <div class="d-flex align-items-center flex-column gap-2 p-3 border pw-border-stroke rounded-3 text-center">
              <!--begin::Icon-->
              <i class="fa-solid fa-flag fs-4 pw-text-success-300"></i>
              <!--end::Icon-->

              <!--begin::Label-->
              <h3 class="pw-text-neutral-700 fs-9 mb-0 fw-semibold">Performans Değerlendirme Süreci</h3>
              <!--end::Label-->

              <span class="d-flex align-items-center justify-content-center w-20px h-20px rounded-pill pw-bg-primary-200 fs-8 fw-bold pw-text-primary-500">3</span>
            </div>
            <!--end::Card-->
          </div>
          <!--end::Col-->

          <!--begin::Col-->
          <div class="col">
            <!--begin::Card-->
            <div class="d-flex align-items-center flex-column gap-2 p-3 border pw-border-stroke rounded-3 text-center">
              <!--begin::Icon-->
              <i class="fa-solid fa-flag fs-4 pw-text-success-300"></i>
              <!--end::Icon-->

              <!--begin::Label-->
              <h3 class="pw-text-neutral-700 fs-9 mb-0 fw-semibold">Performans Değerlendirme Süreci</h3>
              <!--end::Label-->

              <span class="d-flex align-items-center justify-content-center w-20px h-20px rounded-pill pw-bg-primary-200 fs-8 fw-bold pw-text-primary-500">3</span>
            </div>
            <!--end::Card-->
          </div>
          <!--end::Col-->

          <!--begin::Col-->
          <div class="col">
            <!--begin::Card-->
            <div class="d-flex align-items-center flex-column gap-2 p-3 border pw-border-stroke rounded-3 text-center">
              <!--begin::Icon-->
              <i class="fa-solid fa-flag fs-4 pw-text-success-300"></i>
              <!--end::Icon-->

              <!--begin::Label-->
              <h3 class="pw-text-neutral-700 fs-9 mb-0 fw-semibold">Performans Değerlendirme Süreci</h3>
              <!--end::Label-->

              <span class="d-flex align-items-center justify-content-center w-20px h-20px rounded-pill pw-bg-primary-200 fs-8 fw-bold pw-text-primary-500">3</span>
            </div>
            <!--end::Card-->
          </div>
          <!--end::Col-->

          <!--begin::Col-->
          <div class="col">
            <!--begin::Card-->
            <div class="d-flex align-items-center flex-column gap-2 p-3 border pw-border-stroke rounded-3 text-center">
              <!--begin::Icon-->
              <i class="fa-solid fa-flag fs-4 pw-text-success-300"></i>
              <!--end::Icon-->

              <!--begin::Label-->
              <h3 class="pw-text-neutral-700 fs-9 mb-0 fw-semibold">Performans Değerlendirme Süreci</h3>
              <!--end::Label-->

              <span class="d-flex align-items-center justify-content-center w-20px h-20px rounded-pill pw-bg-primary-200 fs-8 fw-bold pw-text-primary-500">3</span>
            </div>
            <!--end::Card-->
          </div>
          <!--end::Col-->

          <!--begin::Col-->
          <div class="col">
            <!--begin::Card-->
            <div class="d-flex align-items-center flex-column gap-2 p-3 border pw-border-stroke rounded-3 text-center">
              <!--begin::Icon-->
              <i class="fa-solid fa-flag fs-4 pw-text-success-300"></i>
              <!--end::Icon-->

              <!--begin::Label-->
              <h3 class="pw-text-neutral-700 fs-9 mb-0 fw-semibold">Performans Değerlendirme Süreci</h3>
              <!--end::Label-->

              <span class="d-flex align-items-center justify-content-center w-20px h-20px rounded-pill pw-bg-primary-200 fs-8 fw-bold pw-text-primary-500">3</span>
            </div>
            <!--end::Card-->
          </div>
          <!--end::Col-->
        </div>
        <!--end::Card group-->

        <!--begin::Container-->
        <div class="mt-7">
          <!--begin::Row-->
          <div class="row mb-3">
            <div class="col-8">
              <!--begin::Search wrapper-->
              <div id="kt_docs_search_handler_basic" class="w-100" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="true" data-kt-search-layout="inline">

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
            </div>
          </div>
          <!--end::Row-->

          <!--begin::Row-->
          <div class="row g-5">
            <!--begin::Col-->
            <div class="col-8">
              <div class="d-flex flex-column">

                <!--begin::Table-->
                <table class="table border table-rounded table-row-bordered gy-3 gs-5 ge-5">
                  <!--begin::Row-->
                  <tr class="hover-pw-bg-primary-300 rounded-top">
                    <td>
                      <div class="d-flex align-items-center justify-content-between gap-5">
                        <div class="d-flex align-items-center gap-2">
                          <i class="fa-solid fa-flag-swallowtail fs-5 pw-text-success-300"></i>
                          <span class="pw-text-neutral-700 fs-7 fw-semibold">Performans Değerlendirme </span>
                        </div>

                        <span class="d-flex align-items-center justify-content-center w-20px h-20px rounded-pill pw-bg-primary-200 fs-8 fw-bold pw-text-primary-500">3</span>
                      </div>
                    </td>
                  </tr>
                  <!--end::Row-->

                  <!--begin::Row-->
                  <tr class="hover-pw-bg-primary-300 rounded-top">
                    <td>
                      <div class="d-flex align-items-center justify-content-between gap-5">
                        <div class="d-flex align-items-center gap-2">
                          <i class="fa-solid fa-flag-swallowtail fs-5 pw-text-success-300"></i>
                          <span class="pw-text-neutral-700 fs-7 fw-semibold">Performans Değerlendirme </span>
                        </div>

                        <span class="d-flex align-items-center justify-content-center w-20px h-20px rounded-pill pw-bg-primary-200 fs-8 fw-bold pw-text-primary-500">3</span>
                      </div>
                    </td>
                  </tr>
                  <!--end::Row-->

                  <!--begin::Row-->
                  <tr class="hover-pw-bg-primary-300 rounded-top">
                    <td>
                      <div class="d-flex align-items-center justify-content-between gap-5">
                        <div class="d-flex align-items-center gap-2">
                          <i class="fa-solid fa-flag-swallowtail fs-5 pw-text-success-300"></i>
                          <span class="pw-text-neutral-700 fs-7 fw-semibold">Performans Değerlendirme </span>
                        </div>

                        <span class="d-flex align-items-center justify-content-center w-20px h-20px rounded-pill pw-bg-primary-200 fs-8 fw-bold pw-text-primary-500">3</span>
                      </div>
                    </td>
                  </tr>
                  <!--end::Row-->
                </table>
                <!--end::Table-->
              </div>
            </div>
            <!--end::Col-->

            <!--begin::Col-->
            <div class="col-4">
              <!--begin::Form-->
              <form>
                <!--begin::Form table-->
                <table class="table gy-4 gx-2">
                  <!--begin::Row-->
                  <tr>
                    <td>
                      <div class="d-flex flex-column gap-2">
                        <label class="pw-text-neutral-700 fs-8 fw-semibold" for="pw_akis_adi">Akış Adı</label>
                        <input type="text" class="form-control py-3 px-2 pw-text-neutral-700 fs-8 fw-semibold" id="pw_akis_adi" value="Performans Değerlendirme Süreci" />
                      </div>
                    </td>
                    <td class="align-bottom">
                      <!--begin::Dropdown wrapper-->
                      <div>
                        <!--begin::Toggle-->
                        <button type="button" class="btn btn-icon btn-primary w-25px h-25px rounded-0.25rem menu-dropdown" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-offset="0px, 10px">
                          <i class="fa-solid fa-plus"></i>
                        </button>
                        <!--end::Toggle-->

                        <!--begin::Dropdown-->
                        <div class="menu menu-sub menu-sub-dropdown fw-semibold w-auto w-400px pw-shadow-sm bg-white rounded" data-kt-menu="true">
                          <!--begin::Header-->
                          <div class="pt-4 pb-3 px-8 pw-text-neutral-600 fs-8 border-bottom pw-border-stroke fw-bold">
                            Performans Değerlendirme Süreci
                          </div>
                          <!--end::Header-->

                          <!--begin::Body-->
                          <div class="pt-3 pb-4 px-8">
                            <!--begin::Actions-->
                            <div class="d-flex align-items-center gap-2">
                              <!--begin::Item-->
                              <button type="button" class="btn p-0">
                                <i class="fa-solid fa-file-circle-plus fs-4 pw-text-primary-300"></i>
                              </button>
                              <!--end::Item-->

                              <!--begin::Item-->
                              <button type="button" class="btn p-0">
                                <i class="fa-solid fa-file-pen fs-4 pw-text-primary-300"></i>
                              </button>
                              <!--end::Item-->

                              <!--begin::Item-->
                              <button type="button" class="btn p-0">
                                <i class="fa-solid fa-file-circle-xmark fs-4 pw-text-primary-300"></i>
                              </button>
                              <!--end::Item-->

                              <!--begin::Item-->
                              <button type="button" class="btn p-0">
                                <i class="fa-solid fa-arrow-up-big-small fs-4 pw-text-primary-300"></i>
                              </button>
                              <!--end::Item-->

                              <!--begin::Item-->
                              <button type="button" class="btn p-0">
                                <i class="fa-solid fa-arrow-down-big-small fs-4 pw-text-primary-300"></i>
                              </button>
                              <!--end::Item-->

                              <!--begin::Item-->
                              <button type="button" class="btn p-0">
                                <i class="fa-solid fa-eye-slash fs-4 pw-text-primary-300"></i>
                              </button>
                              <!--end::Item-->
                            </div>
                            <!--end::Actions-->

                            <!--begin::Menu-->
                            <div class="p-4 border pw-border-stroke rounded-3 fs-8 fw-semibold mt-3">
                              <!--begin::Menu item-->
                              <div class="menu-item">
                                <a href="javascript:void(0)" class="menu-link ps-4 p-0">
                                  <span class="menu-icon">
                                    <i class="fa-solid fa-gears fs-4 pw-text-primary-300"></i>
                                  </span>
                                  <span class="menu-title pw-text-neutral-700">Kabinetler</span>
                                </a>
                              </div>
                              <!--end::Menu item-->

                              <!--begin::Menu item-->
                              <div class="menu-item">
                                <a href="javascript:void(0)" class="menu-link ps-4 p-0">
                                  <span class="menu-icon">
                                    <i class="fa-solid fa-gears fs-4 pw-text-primary-300"></i>
                                  </span>
                                  <span class="menu-title pw-text-neutral-700">Kabinetler</span>
                                </a>
                              </div>
                              <!--end::Menu item-->

                              <!--begin::Menu item-->
                              <div class="menu-item">
                                <a href="javascript:void(0)" class="menu-link ps-4 p-0">
                                  <span class="menu-icon">
                                    <i class="fa-solid fa-folders fs-4 pw-text-primary-300"></i>
                                  </span>
                                  <span class="menu-title pw-text-neutral-700">Kabinetler</span>
                                </a>
                              </div>
                              <!--end::Menu item-->

                              <!--begin::Menu item-->
                              <div class="menu-item">
                                <a href="javascript:void(0)" class="menu-link ps-4 p-0">
                                  <span class="menu-icon">
                                    <i class="fa-solid fa-gears fs-4 pw-text-primary-300"></i>
                                  </span>
                                  <span class="menu-title pw-text-neutral-700">Kabinetler</span>
                                </a>
                              </div>
                              <!--end::Menu item-->

                              <!--begin::Menu item-->
                              <div class="menu-item">
                                <a href="javascript:void(0)" class="menu-link ps-4 p-0">
                                  <span class="menu-icon">
                                    <i class="fa-solid fa-gears fs-4 pw-text-primary-300"></i>
                                  </span>
                                  <span class="menu-title pw-text-neutral-700">Kabinetler</span>
                                </a>
                              </div>
                              <!--end::Menu item-->

                              <!--begin::Menu item-->
                              <div class="menu-item menu-sub-indention menu-accordion" data-kt-menu-trigger="click">
                                <!--begin::Menu link-->
                                <span class="menu-link p-0">
                                  <span class="menu-arrow me-2 ms-0 w-10px h-10px"></span>
                                  <span class="menu-icon">
                                    <i class="fa-solid fa-gears fs-4 pw-text-primary-300"></i>
                                  </span>
                                  <span class="menu-title pw-text-neutral-700">Kabinetler</span>
                                </span>
                                <!--end::Menu link-->


                                <!--begin::Menu sub-->
                                <div class="menu-sub menu-sub-accordion show pt-2">
                                  <!--begin::Menu item-->
                                  <div class="menu-item">
                                    <span class="menu-link py-0">
                                      <div class="menu-icon">
                                        <i class="fa-solid fa-folders fs-4 pw-text-primary-300"></i>
                                      </div>
                                      <input type="text" class="form-control px-4 py-1 fs-8 pw-text-neutral-700 mx-1" />
                                      <div class="d-flex align-items-center gap-1">
                                        <button type="button" class="btn p-0">
                                          <i class="fa-solid fa-square-check fs-7 pw-text-primary-400"></i>
                                        </button>
                                        <button type="button" class="btn p-0">
                                          <i class="fa-solid fa-trash fs-7 pw-text-primary-400"></i>
                                        </button>
                                      </div>
                                    </span>
                                  </div>
                                  <!--end::Menu item-->
                                </div>
                                <!--end::Menu sub-->
                              </div>
                              <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                          </div>
                          <!--end::Body-->
                        </div>
                        <!--end::Dropdown-->
                      </div>
                      <!--end::Dropdown wrapper-->
                    </td>
                  </tr>
                  <!--end::Row-->

                  <!--begin::Row-->
                  <tr>
                    <td>
                      <div class="d-flex flex-column gap-2">
                        <label class="pw-text-neutral-700 fs-8 fw-semibold" for="pw_aciklama">Açıklama</label>
                        <textarea class="form-control py-3 px-2 pw-text-neutral-700 fs-8 fw-semibold" cols="30" rows="3"></textarea>
                      </div>
                    </td>
                  </tr>
                  <!--end::Row-->

                  <!--begin::Row-->
                  <tr>
                    <td></td>
                    <td>
                      <button type="button" class="btn btn-primary p-2 fs-8">Sonraki</button>
                    </td>
                  </tr>
                  <!--end::Row-->
                </table>
                <!--end::Form table-->
              </form>
              <!--end::Form-->
            </div>
            <!--end::Col-->
          </div>
          <!--end::Row-->
        </div>
        <!--end::Container-->

        <!--begin::Separator-->
        <div class="separator border-2 border-primary my-10"></div>
        <!--end::Separator-->

        <div class="d-flex flex-column">
          <!--begin::Button group-->
          <div class="d-flex align-items-center gap-2">
            <!--begin::Item-->
            <button type="button" class="btn p-0">
              <i class="fa-solid fa-chevron-left fs-4 pw-text-neutral-600"></i>
            </button>
            <!--end::Item-->

            <!--begin::Item-->
            <button type="button" class="btn btn-primary py-2 px-4 fs-8">Başlat</button>
            <!--end::Item-->

            <!--begin::Item-->
            <button type="button" class="btn btn-outline btn-outline-primary py-2 px-4 fs-8">Taslak</button>
            <!--end::Item-->
          </div>
          <!--end::Button group-->

          <!--begin::Notification-->
          <div class="d-flex gap-4 border border-dashed rounded-1 pw-border-danger-500 pw-bg-danger-50 px-4 py-6 mb-8 mt-6">
            <!--begin::Icon-->
            <div class="d-flex align-items-center justify-content-center w-35px h-35px pw-bg-danger-200 rounded-pill flex-shrink-0">
              <i class="fa-solid fa-exclamation fs-3 pw-text-danger-500"></i>
            </div>
            <!--end::Icon-->

            <!--begin::Content-->
            <div>
              <!--begin::Title-->
              <h3 class="pw-text-danger-500 fs-8 fw-bolder mb-2">Kaydetmeden önce aşağıdaki hatayı gideriniz.</h3>
              <!--end::Title-->

              <!--begin::Paragraph-->
              <ul class="fs-8 pw-text-neutral-500 fw-semibold">
                <li>Beceriler zorunludur</li>
                <li>Form üzerindeki zorunlu alanlar eksiktir.</li>
              </ul>
              <!--end::Paragraph-->
            </div>
            <!--end::Content-->
          </div>
          <!--end::Notification-->

          <div class="text-end">
            <button type="button" class="btn btn-primary py-2 px-4 fs-8">Ekle</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--end::Modal-->

<!--begin::Modal-->
<div class="modal fade" tabindex="-1" id="menuye_ekle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg mw-625px">
    <div class="modal-content min-h-650px">
      <div class="modal-header">
        <h3 class="modal-title">Kısayol Tanımı</h3>

        <!--begin::Close-->
        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
          <i class="fa-solid fa-xmark fs-4"></i>
        </div>
        <!--end::Close-->
      </div>

      <div class="modal-body d-flex flex-column">
        <form class="d-flex flex-column flex-fill h-100">
          <!--begin::Input-->
          <input type="text" class="form-control form-control-solid px-4 py-3 fs-8 pw-text-neutral-800" value="Daikin Kabineti" />
          <!--end::Input-->

          <!--begin::Action group-->
          <div class="d-flex align-items-center gap-2 mt-5 mb-7">
            <!--begin::Item-->
            <button type="button" class="btn btn-icon pw-bg-neutral-100 w-25px h-25px rounded-0.25rem">
              <i class="fa-solid fa-folder-plus fs-7 pw-text-neutral-400"></i>
            </button>
            <!--end::Item-->

            <!--begin::Item-->
            <button type="button" class="btn btn-icon pw-bg-neutral-100 w-25px h-25px rounded-0.25rem">
              <i class="fa-solid fa-pen-to-square fs-7 pw-text-neutral-400"></i>
            </button>
            <!--end::Item-->

            <!--begin::Item-->
            <button type="button" class="btn btn-icon pw-bg-neutral-100 w-25px h-25px rounded-0.25rem">
              <i class="fa-solid fa-circle-xmark fs-7 pw-text-neutral-400"></i>
            </button>
            <!--end::Item-->

            <!--begin::Item-->
            <button type="button" class="btn btn-icon pw-bg-neutral-100 w-25px h-25px rounded-0.25rem">
              <i class="fa-solid fa-arrows-maximize fs-7 pw-text-neutral-400"></i>
            </button>
            <!--end::Item-->

            <!--begin::Item-->
            <button type="button" class="btn btn-icon pw-bg-neutral-100 w-25px h-25px rounded-0.25rem">
              <i class="fa-solid fa-arrows-minimize fs-7 pw-text-neutral-400"></i>
            </button>
            <!--end::Item-->

            <!--begin::Item-->
            <button type="button" class="btn btn-icon pw-bg-neutral-100 w-25px h-25px rounded-0.25rem">
              <i class="fa-solid fa-eye-slash fs-7 pw-text-neutral-400"></i>
            </button>
            <!--end::Item-->
          </div>
          <!--end::Action group-->

          <!--begin::Frame-->
          <div class="flex-fill border pw-border-stroke rounded-2"></div>
          <!--end::Frame-->

          <!--begin::Form actions-->
          <div class="d-flex align-items-center justify-content-end mt-5 gap-3">
            <button type="reset" class="btn btn-active-light fs-8 py-3 px-6">
              İptal
            </button>
            <button type="submit" class="btn btn-primary fs-8 py-3 px-6">
              Tamam
            </button>
          </div>
          <!--end::Form actions-->
        </form>
      </div>
    </div>
  </div>
</div>
<!--end::Modal-->

<!--begin::Pano script-->
<script>
  window.addEventListener('DOMContentLoaded', () => {
    const btns = document.querySelectorAll('#panoBtn')
    const panoDropdown = document.getElementById('panoDropdown')
    if (btns.length > 0) {
      Array.from(btns).map((btn, index) => {
        btn.addEventListener('click', () => {
          const menuTarget = document.querySelector('#kt_app_header .app-navbar');
          menuTarget.insertBefore(panoDropdown, menuTarget.children[1])
          panoDropdown.classList.remove('d-none')

          toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toastr-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": 0,
            "extendedTimeOut": 0,
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut",
            "tapToDismiss": false
          };

          toastr.success("Belge panoya kaydedildi.");
        })
      })
    }
  })
</script>
<!--end::Pano script-->

<!--begin::Delete toast script-->
<script>
  const toast = (text) => {
    toastr.options = {
      "closeButton": true,
      "debug": false,
      "newestOnTop": false,
      "progressBar": false,
      "positionClass": "toastr-top-right",
      "preventDuplicates": false,
      "onclick": null,
      "showDuration": "300",
      "hideDuration": "1000",
      "timeOut": 0,
      "extendedTimeOut": 0,
      "showEasing": "swing",
      "hideEasing": "linear",
      "showMethod": "fadeIn",
      "hideMethod": "fadeOut",
      "tapToDismiss": false
    };

    toastr.success(text);
  }

  window.addEventListener('DOMContentLoaded', () => {
    const delBtn = document.getElementById('deleteToastr');
    const favBtn = document.getElementById('favoriteBtn');
    const lockBtn = document.getElementById('lockCheckOutBtn');
    delBtn.addEventListener('click', () => {
      toast('Döküman silindi.')
    })

    favBtn.addEventListener('click', () => {
      toast('İşlem Tamamlandı.')
    })

    lockBtn.addEventListener('click', () => {
      toast('İşlem Tamamlandı.')
    })
  })
</script>
<!--end::Delete toast script-->

<!--begin::Clipboard script-->
<script>
  window.addEventListener('DOMContentLoaded', () => {
    // Select element
    const target = document.getElementById('clipboardBtn');

    // Init clipboard -- for more info, please read the offical documentation: https://clipboardjs.com/
    clipboard = new ClipboardJS(target);

    // Success action handler
    clipboard.on('success', function(e) {
      target.addEventListener('click', () => {
        toast('Panoya kopyalandı.')
      })
    });
  })
</script>
<!--end::Clipboard script-->

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/foot.php'; ?>