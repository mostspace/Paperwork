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
      <a href="/belgeler/kabinet/#" class="btn p-0 btn-icon-gray-400 btn-active-icon-primary fs-9 fs-semibold d-inline-flex align-items-center gap-2">
        <div
          class="w-35px h-35px pw-bg-neutral-50 rounded-0.20rem d-inline-flex align-items-center justify-content-center">
          <i class="fa-solid fa-clipboard-list-check fs-3"></i>
        </div>
      </a>
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
        <div
          class="w-35px h-35px pw-bg-neutral-50 rounded-0.20rem d-inline-flex align-items-center justify-content-center">
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
          <!--begin::Card-->
          <div class="border pw-border-stroke rounded-3 px-8 py-12">
            <!--begin::Stepper-->
            <div class="stepper pw-stepper-primary" id="kt_stepper_example_basic">
              <!--begin::Nav-->
              <div class="table-responsive">
                <div class="stepper-nav pw-stepper-show-actions d-flex flex-nowrap justify-content-between gap-12 g-0">
                  <!--begin::Prev step-->
                  <button type="button" class="btn btn-active-icon-primary p-0 pb-6" data-kt-stepper-action="previous">
                    <i class="fa-solid fa-angle-left fs-1"></i>
                  </button>
                  <!--end::Prev step-->

                  <!--begin::Nav wrapper-->
                  <div class="flex-fill d-flex flex-nowrap justify-content-between gap-4 g-0 pb-6 border-bottom pw-border-stroke">

                    <!--begin::Step 1-->
                    <div class="stepper-item current" data-kt-stepper-element="nav" data-kt-stepper-action="step">
                      <!--begin::Wrapper-->
                      <div class="stepper-wrapper d-flex justify-between">
                        <div class="d-flex flex-column align-items-center text-center gap-4">
                          <!--begin::Icon-->
                          <div class="stepper-icon me-0">
                            <i class="fa-solid fa-books fs-2tx"></i>
                          </div>
                          <!--end::Icon-->

                          <!--begin::Title-->
                          <div class="fs-7 fw-semibold step-title">1. Kaynak</div>
                          <!--end::Title-->
                        </div>
                      </div>
                      <!--end::Wrapper-->
                    </div>
                    <!--end::Step 1-->

                    <!--begin::Arrow-->
                    <div class="stepper-arrow h-45px d-flex align-items-center">
                      <i class="fa-solid fa-arrow-right-long fs-2"></i>
                    </div>
                    <!--end::Arrow-->

                    <!--begin::Step 2-->
                    <div class="stepper-item pending" data-kt-stepper-element="nav" data-kt-stepper-action="step">
                      <!--begin::Wrapper-->
                      <div class="stepper-wrapper d-flex justify-between">
                        <div class="d-flex flex-column align-items-center text-center gap-4">
                          <!--begin::Icon-->
                          <div class="stepper-icon me-0">
                            <i class="fa-solid fa-info fs-2tx"></i>
                          </div>
                          <!--end::Icon-->

                          <!--begin::Title-->
                          <div class="fs-7 fw-semibold step-title">2. Belge</div>
                          <!--end::Title-->
                        </div>
                      </div>
                      <!--end::Wrapper-->
                    </div>
                    <!--end::Step 2-->

                    <!--begin::Arrow-->
                    <div class="stepper-arrow h-45px d-flex align-items-center">
                      <i class="fa-solid fa-arrow-right-long fs-2"></i>
                    </div>
                    <!--end::Arrow-->

                    <!--begin::Step 3-->
                    <div class="stepper-item pending" data-kt-stepper-element="nav" data-kt-stepper-action="step">
                      <!--begin::Wrapper-->
                      <div class="stepper-wrapper d-flex justify-between">
                        <div class="d-flex flex-column align-items-center text-center gap-4">
                          <!--begin::Icon-->
                          <div class="stepper-icon me-0">
                            <i class="fa-solid fa-files fs-2tx"></i>
                          </div>
                          <!--end::Icon-->

                          <!--begin::Title-->
                          <div class="step-title fs-7 fw-semibold">3. Form</div>
                          <!--end::Title-->
                        </div>
                      </div>
                      <!--end::Wrapper-->
                    </div>
                    <!--end::Step 3-->

                  </div>
                  <!--end::Nav wrapper-->

                  <!--begin::Next step-->
                  <button type="button" class="btn btn-active-icon-primary p-0 pb-6" data-kt-stepper-action="next">
                    <i class="fa-solid fa-angle-right fs-1"></i>
                  </button>
                  <!--end::Next step-->
                </div>
              </div>
              <!--end::Nav-->

              <!--begin::Form-->
              <form class="form" novalidate="novalidate" id="kt_stepper_example_basic_form">
                <!--begin::Group-->
                <div class="mt-6">
                  <!--begin::Step 1-->
                  <div class="flex-column current" data-kt-stepper-element="content">
                    <div class="d-flex flex-wrap justify-content-center row-gap-4 column-gap-9">
                      <!--begin::Item-->
                      <div class="w-250px">
                        <!--begin::Option-->
                        <input type="radio" class="btn-check" name="pw_kaynak" value="dosya_sistemi" id="pw_kaynak_dosya_sistemi" required />
                        <label class="btn btn-outline btn-active-secondary btn-active-icon-primary py-7 px-6 d-flex align-items-center rounded-4" for="pw_kaynak_dosya_sistemi">
                          <i class="fa-solid fa-folder-gear fs-3x me-4 me-md-5 me-lg-4 me-xl-5"></i>

                          <span class="d-block fw-semibold text-start">
                            <span class="pw-text-neutral-700 fw-bolder d-block fs-base">Dosya Sistemi</span>
                          </span>
                        </label>
                        <!--end::Option-->
                      </div>
                      <!--end::Item-->

                      <!--begin::Item-->
                      <div class="w-250px">
                        <!--begin::Option-->
                        <input type="radio" class="btn-check" name="pw_kaynak" value="taslak" id="pw_kaynak_taslak" required />
                        <label class="btn btn-outline btn-active-secondary btn-active-icon-primary py-7 px-6 d-flex align-items-center rounded-4" for="pw_kaynak_taslak">
                          <i class="fa-solid fa-file-contract fs-3x me-4 me-md-5 me-lg-4 me-xl-5"></i>

                          <span class="d-block fw-semibold text-start">
                            <span class="pw-text-neutral-700 fw-bolder d-block fs-base">Taslak</span>
                          </span>
                        </label>
                        <!--end::Option-->
                      </div>
                      <!--end::Item-->

                      <!--begin::Item-->
                      <div class="w-250px">
                        <!--begin::Option-->
                        <input type="radio" class="btn-check" name="pw_kaynak" value="taslak" id="pw_kaynak_tarayici" required />
                        <label class="btn btn-outline btn-active-secondary btn-active-icon-primary py-7 px-6 d-flex align-items-center rounded-4" for="pw_kaynak_tarayici">
                          <i class="fa-solid fa-scanner-image fs-3x me-4 me-md-5 me-lg-4 me-xl-5"></i>

                          <span class="d-block fw-semibold text-start">
                            <span class="pw-text-neutral-700 fw-bolder d-block fs-base">Tarayıcı</span>
                          </span>
                        </label>
                        <!--end::Option-->
                      </div>
                      <!--end::Item-->

                      <!--begin::Item-->
                      <div class="w-250px">
                        <!--begin::Option-->
                        <input type="radio" class="btn-check" name="pw_kaynak" value="taslak" id="pw_kaynak_belgesiz_form" required />
                        <label class="btn btn-outline btn-active-secondary btn-active-icon-primary py-7 px-6 d-flex align-items-center rounded-4" for="pw_kaynak_belgesiz_form">
                          <i class="fa-solid fa-file-xmark fs-3x me-4 me-md-5 me-lg-4 me-xl-5"></i>

                          <span class="d-block fw-semibold text-start">
                            <span class="pw-text-neutral-700 fw-bolder d-block fs-base">Belgesiz Form</span>
                          </span>
                        </label>
                        <!--end::Option-->
                      </div>
                      <!--end::Item-->

                      <!--begin::Item-->
                      <div class="w-250px">
                        <!--begin::Option-->
                        <input type="radio" class="btn-check" name="pw_kaynak" value="taslak" id="pw_kaynak_editor" required />
                        <label class="btn btn-outline btn-active-secondary btn-active-icon-primary py-7 px-6 d-flex align-items-center rounded-4" for="pw_kaynak_editor">
                          <i class="fa-solid fa-user-pen fs-3x me-4 me-md-5 me-lg-4 me-xl-5"></i>

                          <span class="d-block fw-semibold text-start">
                            <span class="pw-text-neutral-700 fw-bolder d-block fs-base">Editör</span>
                          </span>
                        </label>
                        <!--end::Option-->
                      </div>
                      <!--end::Item-->

                      <!--begin::Item-->
                      <div class="w-250px">
                        <!--begin::Option-->
                        <input type="radio" class="btn-check" name="pw_kaynak" value="taslak" id="pw_kaynak_eksik_belge" required />
                        <label class="btn btn-outline btn-active-secondary btn-active-icon-primary py-7 px-6 d-flex align-items-center rounded-4" for="pw_kaynak_eksik_belge">
                          <i class="fa-solid fa-file-exclamation fs-3x me-4 me-md-5 me-lg-4 me-xl-5"></i>

                          <span class="d-block fw-semibold text-start">
                            <span class="pw-text-neutral-700 fw-bolder d-block fs-base">Eksik Belge</span>
                          </span>
                        </label>
                        <!--end::Option-->
                      </div>
                      <!--end::Item-->

                      

                      <!--begin::Item-->
                      <a href="/belgeler/kabinet/yeni-belge/dosya-sistemi/" class="w-250px">
                        <!--begin::Option-->
                        <div class="btn btn-outline btn-active-secondary btn-active-icon-primary py-7 px-6 d-flex align-items-center rounded-4">
                          <i class="fa-solid fa-folder-gear fs-3x me-4 me-md-5 me-lg-4 me-xl-5"></i>

                          <span class="d-block fw-semibold text-start">
                            <span class="pw-text-neutral-700 fw-bolder d-block fs-base">Dosya Sistemi</span>
                          </span>
                        </div>
                        <!--end::Option-->
                      </a>
                      <!--end::Item-->

                      <!--begin::Item-->
                      <a href="/belgeler/kabinet/yeni-belge/taslak/" class="w-250px">
                        <!--begin::Option-->
                        <div class="btn btn-outline btn-active-secondary btn-active-icon-primary py-7 px-6 d-flex align-items-center rounded-4">
                          <i class="fa-solid fa-file-contract fs-3x me-4 me-md-5 me-lg-4 me-xl-5"></i>

                          <span class="d-block fw-semibold text-start">
                            <span class="pw-text-neutral-700 fw-bolder d-block fs-base">Taslak</span>
                          </span>
                        </div>
                        <!--end::Option-->
                      </a>
                      <!--end::Item-->

                      <!--begin::Item-->
                      <a href="/belgeler/kabinet/yeni-belge/tarayici/" class="w-250px">
                        <!--begin::Option-->
                        <div class="btn btn-outline btn-active-secondary btn-active-icon-primary py-7 px-6 d-flex align-items-center rounded-4">
                          <i class="fa-solid fa-scanner-image fs-3x me-4 me-md-5 me-lg-4 me-xl-5"></i>

                          <span class="d-block fw-semibold text-start">
                            <span class="pw-text-neutral-700 fw-bolder d-block fs-base">Tarayıcı</span>
                          </span>
                        </div>
                        <!--end::Option-->
                      </a>
                      <!--end::Item-->

                      <!--begin::Item-->
                      <a href="/belgeler/kabinet/yeni-belge/belgesiz-form/" class="w-250px">
                        <!--begin::Option-->
                        <div class="btn btn-outline btn-active-secondary btn-active-icon-primary py-7 px-6 d-flex align-items-center rounded-4">
                          <i class="fa-solid fa-file-xmark fs-3x me-4 me-md-5 me-lg-4 me-xl-5"></i>

                          <span class="d-block fw-semibold text-start">
                            <span class="pw-text-neutral-700 fw-bolder d-block fs-base">Belgesiz Form</span>
                          </span>
                        </div>
                        <!--end::Option-->
                      </a>
                      <!--end::Item-->

                      <!--begin::Item-->
                      <a href="/belgeler/kabinet/yeni-belge/editor/" class="w-250px">
                        <!--begin::Option-->
                        <div class="btn btn-outline btn-active-secondary btn-active-icon-primary py-7 px-6 d-flex align-items-center rounded-4">
                          <i class="fa-solid fa-user-pen fs-3x me-4 me-md-5 me-lg-4 me-xl-5"></i>

                          <span class="d-block fw-semibold text-start">
                            <span class="pw-text-neutral-700 fw-bolder d-block fs-base">Editör</span>
                          </span>
                        </div>
                        <!--end::Option-->
                      </a>
                      <!--end::Item-->

                      <!--begin::Item-->
                      <a href="/belgeler/kabinet/yeni-belge/eksik-belge/" class="w-250px">
                        <!--begin::Option-->
                        <div class="btn btn-outline btn-active-secondary btn-active-icon-primary py-7 px-6 d-flex align-items-center rounded-4">
                          <i class="fa-solid fa-file-exclamation fs-3x me-4 me-md-5 me-lg-4 me-xl-5"></i>

                          <span class="d-block fw-semibold text-start">
                            <span class="pw-text-neutral-700 fw-bolder d-block fs-base">Eksik Belge</span>
                          </span>
                        </div>
                        <!--end::Option-->
                      </a>
                      <!--end::Item-->
                    </div>
                  </div>
                  <!--end::Step 1-->

                  <!--begin::Step 2-->
                  <div class="flex-column pending" data-kt-stepper-element="content">
                    <div class="table-responsive">
                      <table class="table gx-3 gy-6">
                        <tbody>
                          <!--begin::Row-->
                          <tr>
                            <td><label class="form-label fs-base fw-bolder" for="pw_belge_adi">Belge Adı*</label></td>
                            <td>
                              <select id="pw_belge_adi" class="form-select form-select-solid text-black fs-8 fw-semibold py-3 px-4" data-control="select2" data-placeholder="Seçim yapın" data-hide-search="true" required>
                                <option></option>
                                <option value="1">Option</option>
                              </select>
                            </td>
                          </tr>
                          <!--end::Row-->

                          <!--begin::Row-->
                          <tr>
                            <td><label class="form-label fs-base fw-bolder" for="pw_belge_tipi">Belge Tipi*</label></td>
                            <td>
                              <select id="pw_belge_tipi" class="form-select form-select-solid text-black fs-8 fw-semibold py-3 px-4" data-control="select2" data-placeholder="Seçim yapın" data-hide-search="true" required>
                                <option></option>
                                <option value="0">Sistem</option>
                                <option value="1">Baykuş Arşiv</option>
                                <option value="2" selected>Mantis Arşiv Tipi</option>
                              </select>
                            </td>
                          </tr>
                          <!--end::Row-->

                          <!--begin::Row-->
                          <tr>
                            <td><label class="form-label fs-base fw-bolder" for="pw_yetki_seti">Yetki Seti*</label></td>
                            <td>
                              <select id="pw_yetki_seti" class="form-select form-select-solid text-black fs-8 fw-semibold py-3 px-4" data-control="select2" data-placeholder="Seçim yapın" required>
                                <option></option>
                                <option value="1">Test</option>
                              </select>
                            </td>
                          </tr>
                          <!--end::Row-->

                          <!--begin::Row-->
                          <tr>
                            <td><label class="form-label fs-base fw-bolder" for="pw_aciklama">Açıklama</label></td>
                            <td>
                              <div id="pw_aciklama"></div>
                            </td>
                          </tr>
                          <!--end::Row-->
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <!--end::Step 2-->

                  <!--begin::Step 3-->
                  <div class="flex-column pending" data-kt-stepper-element="content">
                    <!--begin::PaperWork Troy-->
                    <div class="d-flex gap-4 border border-dashed rounded-1 pw-border-warning-500 pw-bg-warning-50 px-4 py-6 mb-8">
                      <!--begin::Icon-->
                      <i class="fa-solid fa-circle-info fs-2x pw-text-warning-300"></i>
                      <!--end::Icon-->

                      <!--begin::Content-->
                      <div>
                        <!--begin::Title-->
                        <h3 class="pw-text-neutral-800 fs-8 fw-bolder mb-2">PaperWorkTroy’a bağlanılamıyor.</h3>
                        <!--end::Title-->

                        <!--begin::Paragraph-->
                        <p class="fs-8 pw-text-neutral-500 fw-semibold mb-8">
                          Eğer daha önce kurulum yapmadıysanız <b>“Uygulamayı Kur”</b> tuşuna basarak kurulum yapabilirsiniz. Eğer uygulamayı daha önce kurduysanız uygulamayı çalıştırıp <b>“Tekrar Dene”</b> tuşuna basabilirsiniz.
                        </p>
                        <!--end::Paragraph-->

                        <!--begin::Actions-->
                        <div class="d-flex align-items-center gap-3">
                          <!--begin::Item-->
                          <button type="button" class="btn btn-primary fs-8 px-4 py-2 rounded-0.25rem">
                            <i class="fa-solid fa-arrow-rotate-right"></i>
                            Tekrar Dene
                          </button>
                          <!--end::Item-->

                          <!--begin::Item-->
                          <button type="button" class="btn btn-warning fs-8 px-4 py-2 rounded-0.25rem">
                            <i class="fa-solid fa-download"></i>
                            Uygulamayı  Kur
                          </button>
                          <!--end::Item-->
                        </div>
                        <!--end::Actions-->
                      </div>
                      <!--end::Content-->
                    </div>
                    <!--end::PaperWork Troy-->

                    <!--begin::Connetion info-->
                    <div class="d-flex flex-column mb-10">
                      <!--begin::Item-->
                      <div class="d-flex align-items-center gap-3 p-3 pw-bg-primary-100">
                        <!--begin::Icon-->
                        <span>
                          <i class="fa-solid fa-loader fs-6 pw-text-primary-500"></i>
                        </span>
                        <!--end::Icon-->

                        <!--begin::Label-->
                        <span class="fs-8 pw-text-neutral-800 fw-semibold">
                          PaperWorkTray’e bağlanıyor...
                        </span>
                        <!--end::Label-->
                      </div>
                      <!--end::Item-->

                      <!--begin::Item-->
                      <div class="d-flex align-items-center gap-3 p-3 pw-bg-danger-100">
                        <!--begin::Icon-->
                        <span>
                          <i class="fa-solid fa-circle-exclamation fs-6 pw-text-danger-500"></i>
                        </span>
                        <!--end::Icon-->

                        <!--begin::Label-->
                        <span class="fs-8 pw-text-neutral-800 fw-semibold">
                          PaperWorkTray’e bağlanılamıyor...
                        </span>
                        <!--end::Label-->
                      </div>
                      <!--end::Item-->

                      <!--begin::Item-->
                      <div class="d-flex align-items-center gap-3 p-3 pw-bg-primary-100">
                        <!--begin::Icon-->
                        <span>
                          <i class="fa-solid fa-loader fs-6 pw-text-primary-500"></i>
                        </span>
                        <!--end::Icon-->

                        <!--begin::Label-->
                        <span class="fs-8 pw-text-neutral-800 fw-semibold">
                          PaperWorkTray’e bağlanıyor...
                        </span>
                        <!--end::Label-->
                      </div>
                      <!--end::Item-->
                    </div>
                    <!--end::Connetion info-->
                  </div>
                  <!--end::Step 3-->
                </div>
                <!--end::Group-->
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

<!--begin::Stepper script-->
<script>
  window.addEventListener('DOMContentLoaded', () => {
    // Stepper lement
    var element = document.querySelector("#kt_stepper_example_basic");

    // Initialize Stepper
    var stepper = new KTStepper(element);

    // Handle next step
    stepper.on("kt.stepper.next", function(stepper) {
      stepper.goNext(); // go next step
    });

    // Handle previous step
    stepper.on("kt.stepper.previous", function(stepper) {
      stepper.goPrevious(); // go previous step
    });
  });
</script>
<!--end::Stepper script-->

<!--begin::Classic editor script-->
<script>
  window.addEventListener('DOMContentLoaded', () => {
    ClassicEditor
      .create(document.querySelector('#pw_aciklama'), {
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