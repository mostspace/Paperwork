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
          <a href="#"
            class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px"
            data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent"
            data-kt-menu-placement="bottom-end">
            <i class="fa-solid fa-ellipsis-vertical fs-4"></i>
          </a>
          <!--begin::Menu toggle-->
          <!--begin::Menu-->
          <div
            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-200px"
            data-kt-menu="true" data-kt-element="theme-mode-menu">
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
              <div class="d-flex flex-column gap-2 flex-fill">
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

              <!--begin::Checkbox-->
              <div class="d-flex align-items-center">
                <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                  <input class="form-check-input" type="checkbox" value="0" checked="checked" />
                </div>
              </div>
              <!--end::Checkbox-->
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
              <div class="d-flex flex-column gap-2 flex-fill">
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

              <!--begin::Checkbox-->
              <div class="d-flex align-items-center">
                <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                  <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                </div>
              </div>
              <!--end::Checkbox-->
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
              <div class="d-flex flex-column gap-2 flex-fill">
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

              <!--begin::Checkbox-->
              <div class="d-flex align-items-center">
                <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                  <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                </div>
              </div>
              <!--end::Checkbox-->
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
              <div class="d-flex flex-column gap-2 flex-fill">
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

              <!--begin::Checkbox-->
              <div class="d-flex align-items-center">
                <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                  <input class="form-check-input" type="checkbox" value="3" checked="checked" />
                </div>
              </div>
              <!--end::Checkbox-->
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
              <div class="d-flex flex-column gap-2 flex-fill">
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
              
              <!--begin::Checkbox-->
              <div class="d-flex align-items-center">
                <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                  <input class="form-check-input" type="checkbox" value="4" checked="checked" />
                </div>
              </div>
              <!--end::Checkbox-->
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
                <li class="page-item previous disabled"><a href="/belgeler/kabinet/#" class="page-link pw-min-w-32px h-32px fs-8"><i
                      class="previous"></i></a></li>
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
                  <a href="/belgeler/kabinet/#" class="page-link pw-min-w-32px h-32px fs-8"><i
                      class="next"></i></a>
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
          <!--begin::Cards wrapper-->
          <div class="row g-4">
            <!--begin::Col-->
            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
              <!--begin::Card-->
              <div class="border pw-border-stroke rounded-3 px-6 pt-8 pb-7">
                <div class="d-flex gap-7">
                  <!--begin::Icon-->
                  <div class="position-relative d-flex align-items-center justify-content-center w-65px h-65px pw-bg-neutral-100 rounded-3">
                    <i class="fa-solid fa-floppy-disk fs-2x pw-text-primary-500"></i>

                    <!--begin::Badge-->
                    <span class="position-absolute top-0 start-100 translate-middle badge badge-circle pw-bg-danger-300 text-white fs-base fw-bolder">9</span>
                    <!--end::Badge-->
                  </div>
                  <!--end::Icon-->

                  <!--begin::Label-->
                  <div class="pw-text-primary-900 fs-base fw-bold pt-2">Diske Kaydet</div>
                  <!--end::Label-->
                </div>

                <!--begin::Actions-->
                <div class="d-flex align-items-center gap-3 mt-7">
                  <!--begin::Item-->
                  <button type="button" class="btn p-1">
                    <i class="fa-solid fa-file-lines fs-3 pw-text-neutral-400 me-0"></i>
                  </button>
                  <!--end::Item-->

                  <!--begin::Separator-->
                  <div class="border-end pw-border-stroke h-35px"></div>
                  <!--end::Separator-->

                  <!--begin::Item-->
                  <div class="btn p-1" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="bottom" title="Seçim listesinde indiremeyeceğiniz listeler mevcut">
                    <i class="fa-solid fa-circle-exclamation fs-3 pw-text-warning-500 me-0"></i>
                  </div>
                  <!--end::Item-->
                </div>
                <!--end::Actions-->
              </div>
              <!--end::Card-->
            </div>
            <!--end::Col-->

            <!--begin::Col-->
            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
              <!--begin::Card-->
              <div class="border pw-border-stroke rounded-3 px-6 pt-8 pb-7">
                <div class="d-flex gap-7">
                  <!--begin::Icon-->
                  <div class="position-relative d-flex align-items-center justify-content-center w-65px h-65px pw-bg-danger-50 rounded-3">
                    <i class="fa-solid fa-trash-can fs-2x pw-text-danger-500"></i>

                    <!--begin::Badge-->
                    <span class="position-absolute top-0 start-100 translate-middle badge badge-circle pw-bg-danger-300 text-white fs-base fw-bolder">11</span>
                    <!--end::Badge-->
                  </div>
                  <!--end::Icon-->

                  <!--begin::Label-->
                  <div class="pw-text-primary-900 fs-base fw-bold pt-2">Sil</div>
                  <!--end::Label-->
                </div>

                <!--begin::Actions-->
                <div class="d-flex align-items-center gap-3 mt-7">
                  <!--begin::Item-->
                  <button type="button" class="btn p-1">
                    <i class="fa-solid fa-file-lines fs-3 pw-text-neutral-400 me-0"></i>
                  </button>
                  <!--end::Item-->

                  <!--begin::Item-->
                  <button type="button" class="btn p-1">
                    <i class="fa-solid fa-folder-tree fs-3 pw-text-neutral-400 me-0"></i>
                  </button>
                  <!--end::Item-->

                  <!--begin::Item-->
                  <button type="button" class="btn p-1">
                    <i class="fa-solid fa-folder fs-3 pw-text-neutral-400 me-0"></i>
                  </button>
                  <!--end::Item-->

                  <!--begin::Item-->
                  <button type="button" class="btn p-1">
                    <i class="fa-solid fa-arrow-rotate-right fs-3 pw-text-neutral-400 me-0"></i>
                  </button>
                  <!--end::Item-->
                </div>
                <!--end::Actions-->
              </div>
              <!--end::Card-->
            </div>
            <!--end::Col-->

            <!--begin::Col-->
            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
              <!--begin::Card-->
              <div class="border pw-border-stroke rounded-3 px-6 pt-8 pb-7">
                <div class="d-flex gap-7">
                  <!--begin::Icon-->
                  <div class="position-relative d-flex align-items-center justify-content-center w-65px h-65px rounded-3" style="background:#F7E5FC">
                    <i class="fa-solid fa-heart fs-2x" style="color:#BF61D7"></i>

                    <!--begin::Badge-->
                    <span class="position-absolute top-0 start-100 translate-middle badge badge-circle pw-bg-danger-300 text-white fs-base fw-bolder">11</span>
                    <!--end::Badge-->
                  </div>
                  <!--end::Icon-->

                  <!--begin::Label-->
                  <div class="pw-text-primary-900 fs-base fw-bold pt-2">Favoriye Ekle/Çıkar</div>
                  <!--end::Label-->
                </div>

                <!--begin::Actions-->
                <div class="d-flex align-items-center gap-3 mt-7">
                  <!--begin::Item-->
                  <button type="button" class="btn p-1">
                    <i class="fa-solid fa-file-lines fs-3 pw-text-neutral-400 me-0"></i>
                  </button>
                  <!--end::Item-->

                  <!--begin::Item-->
                  <button type="button" class="btn p-1">
                    <i class="fa-solid fa-folder-tree fs-3 pw-text-neutral-400 me-0"></i>
                  </button>
                  <!--end::Item-->

                  <!--begin::Item-->
                  <button type="button" class="btn p-1">
                    <i class="fa-solid fa-folder fs-3 pw-text-neutral-400 me-0"></i>
                  </button>
                  <!--end::Item-->

                  <!--begin::Item-->
                  <button type="button" class="btn p-1">
                    <i class="fa-solid fa-arrow-rotate-right fs-3 pw-text-neutral-400 me-0"></i>
                  </button>
                  <!--end::Item-->
                </div>
                <!--end::Actions-->
              </div>
              <!--end::Card-->
            </div>
            <!--end::Col-->

            <!--begin::Col-->
            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
              <!--begin::Card-->
              <div class="border pw-border-stroke rounded-3 px-6 pt-8 pb-7">
                <div class="d-flex gap-7">
                  <!--begin::Icon-->
                  <div class="position-relative d-flex align-items-center justify-content-center w-65px h-65px pw-bg-warning-50 rounded-3">
                    <i class="fa-solid fa-star-sharp fs-2x pw-text-warning-500"></i>

                    <!--begin::Badge-->
                    <span class="position-absolute top-0 start-100 translate-middle badge badge-circle pw-bg-danger-300 text-white fs-base fw-bolder">11</span>
                    <!--end::Badge-->
                  </div>
                  <!--end::Icon-->

                  <!--begin::Label-->
                  <div>
                    <div class="pw-text-primary-900 fs-base fw-bold pt-2 mb-3">Derecelendirme</div>
                    <div class="d-flex align-items-center">
                      <!--begin::Item-->
                      <button type="button" class="btn p-0">
                        <i class="fa-solid fa-star-sharp fs-4 pw-text-neutral-300"></i>
                      </button>
                      <!--end::Item-->

                      <!--begin::Item-->
                      <button type="button" class="btn p-0">
                        <i class="fa-solid fa-star-sharp fs-4 pw-text-neutral-300"></i>
                      </button>
                      <!--end::Item-->

                      <!--begin::Item-->
                      <button type="button" class="btn p-0">
                        <i class="fa-solid fa-star-sharp fs-4 pw-text-neutral-300"></i>
                      </button>
                      <!--end::Item-->

                      <!--begin::Item-->
                      <button type="button" class="btn p-0">
                        <i class="fa-solid fa-star-sharp fs-4 pw-text-neutral-300"></i>
                      </button>
                      <!--end::Item-->

                      <!--begin::Item-->
                      <button type="button" class="btn p-0">
                        <i class="fa-solid fa-star-sharp fs-4 pw-text-neutral-300"></i>
                      </button>
                      <!--end::Item-->
                    </div>
                  </div>
                  <!--end::Label-->
                </div>

                <!--begin::Actions-->
                <div class="d-flex align-items-center gap-3 mt-7">
                  <!--begin::Item-->
                  <button type="button" class="btn p-1">
                    <i class="fa-solid fa-file-lines fs-3 pw-text-neutral-400 me-0"></i>
                  </button>
                  <!--end::Item-->

                  <!--begin::Item-->
                  <button type="button" class="btn p-1">
                    <i class="fa-solid fa-folder-tree fs-3 pw-text-neutral-400 me-0"></i>
                  </button>
                  <!--end::Item-->

                  <!--begin::Item-->
                  <button type="button" class="btn p-1">
                    <i class="fa-solid fa-folder fs-3 pw-text-neutral-400 me-0"></i>
                  </button>
                  <!--end::Item-->

                  <!--begin::Item-->
                  <button type="button" class="btn p-1">
                    <i class="fa-solid fa-arrow-rotate-right fs-3 pw-text-neutral-400 me-0"></i>
                  </button>
                  <!--end::Item-->
                </div>
                <!--end::Actions-->
              </div>
              <!--end::Card-->
            </div>
            <!--end::Col-->

            <!--begin::Col-->
            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
              <!--begin::Card-->
              <div class="border pw-border-stroke rounded-3 px-6 pt-8 pb-7">
                <div class="d-flex gap-7">
                  <!--begin::Icon-->
                  <div class="position-relative d-flex align-items-center justify-content-center w-65px h-65px rounded-3 pw-bg-neutral-100">
                    <i class="fa-solid fa-message fs-2x pw-text-neutral-500"></i>

                    <!--begin::Badge-->
                    <span class="position-absolute top-0 start-100 translate-middle badge badge-circle pw-bg-danger-300 text-white fs-base fw-bolder">11</span>
                    <!--end::Badge-->
                  </div>
                  <!--end::Icon-->

                  <!--begin::Label-->
                  <div class="pw-text-primary-900 fs-base fw-bold pt-2">Notlar</div>
                  <!--end::Label-->
                </div>

                <!--begin::Actions-->
                <div class="d-flex align-items-center gap-3 mt-7">
                  <!--begin::Item-->
                  <button type="button" class="btn p-1">
                    <i class="fa-solid fa-file-lines fs-3 pw-text-neutral-400 me-0"></i>
                  </button>
                  <!--end::Item-->

                  <!--begin::Item-->
                  <button type="button" class="btn p-1">
                    <i class="fa-solid fa-folder-tree fs-3 pw-text-neutral-400 me-0"></i>
                  </button>
                  <!--end::Item-->

                  <!--begin::Item-->
                  <button type="button" class="btn p-1">
                    <i class="fa-solid fa-folder fs-3 pw-text-neutral-400 me-0"></i>
                  </button>
                  <!--end::Item-->

                  <!--begin::Item-->
                  <button type="button" class="btn p-1">
                    <i class="fa-solid fa-arrow-rotate-right fs-3 pw-text-neutral-400 me-0"></i>
                  </button>
                  <!--end::Item-->
                </div>
                <!--end::Actions-->
              </div>
              <!--end::Card-->
            </div>
            <!--end::Col-->

            <!--begin::Col-->
            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
              <!--begin::Card-->
              <div class="border pw-border-stroke rounded-3 px-6 pt-8 pb-7">
                <div class="d-flex gap-7">
                  <!--begin::Icon-->
                  <div class="position-relative d-flex align-items-center justify-content-center w-65px h-65px rounded-3 pw-bg-success-100">
                    <i class="fa-solid fa-clipboard-list-check fs-2x pw-text-success-500"></i>

                    <!--begin::Badge-->
                    <span class="position-absolute top-0 start-100 translate-middle badge badge-circle pw-bg-danger-300 text-white fs-base fw-bolder">11</span>
                    <!--end::Badge-->
                  </div>
                  <!--end::Icon-->

                  <!--begin::Label-->
                  <div class="pw-text-primary-900 fs-base fw-bold pt-2">Panoya Ekle </div>
                  <!--end::Label-->
                </div>

                <!--begin::Actions-->
                <div class="d-flex align-items-center gap-3 mt-7">
                  <!--begin::Item-->
                  <button type="button" class="btn p-1">
                    <i class="fa-solid fa-file-lines fs-3 pw-text-neutral-400 me-0"></i>
                  </button>
                  <!--end::Item-->

                  <!--begin::Item-->
                  <button type="button" class="btn p-1">
                    <i class="fa-solid fa-folder-tree fs-3 pw-text-neutral-400 me-0"></i>
                  </button>
                  <!--end::Item-->

                  <!--begin::Item-->
                  <button type="button" class="btn p-1">
                    <i class="fa-solid fa-folder fs-3 pw-text-neutral-400 me-0"></i>
                  </button>
                  <!--end::Item-->

                  <!--begin::Item-->
                  <button type="button" class="btn p-1">
                    <i class="fa-solid fa-arrow-rotate-right fs-3 pw-text-neutral-400 me-0"></i>
                  </button>
                  <!--end::Item-->
                </div>
                <!--end::Actions-->
              </div>
              <!--end::Card-->
            </div>
            <!--end::Col-->
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