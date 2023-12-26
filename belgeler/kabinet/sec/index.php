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
              <!--begin::Checkbox-->
              <div class="d-flex align-items-center">
                <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                  <input class="form-check-input" type="checkbox" value="0" />
                </div>
              </div>
              <!--end::Checkbox-->

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
              <!--begin::Checkbox-->
              <div class="d-flex align-items-center">
                <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                  <input class="form-check-input" type="checkbox" value="1" />
                </div>
              </div>
              <!--end::Checkbox-->

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
              <!--begin::Checkbox-->
              <div class="d-flex align-items-center">
                <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                  <input class="form-check-input" type="checkbox" value="2" />
                </div>
              </div>
              <!--end::Checkbox-->

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
              <!--begin::Checkbox-->
              <div class="d-flex align-items-center">
                <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                  <input class="form-check-input" type="checkbox" value="3" />
                </div>
              </div>
              <!--end::Checkbox-->

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
              <!--begin::Checkbox-->
              <div class="d-flex align-items-center">
                <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                  <input class="form-check-input" type="checkbox" value="4" />
                </div>
              </div>
              <!--end::Checkbox-->

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
                <div class="d-flex align-items-center justify-content-between gap-3">
                  <div class="d-flex align-items-center gap-3">
                    <!--begin::Item-->
                    <button type="button" class="btn p-0">
                      <i class="fa-solid fa-floppy-disk fs-3 pw-text-neutral-300"></i>
                    </button>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <button type="button" class="btn p-0">
                      <i class="fa-solid fa-user-pen fs-3 pw-text-neutral-300"></i>
                    </button>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <button type="button" class="btn p-0">
                      <i class="fa-solid fa-trash-can fs-3 pw-text-neutral-300"></i>
                    </button>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <button type="button" class="btn p-0">
                      <i class="fa-solid fa-print fs-3 pw-text-neutral-300"></i>
                    </button>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <button type="button" class="btn p-0">
                      <i class="fa-solid fa-share-nodes fs-3 pw-text-neutral-300"></i>
                    </button>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <button type="button" class="btn p-0">
                      <i class="fa-solid fa-heart fs-3 pw-text-neutral-300"></i>
                    </button>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <button type="button" class="btn p-0">
                      <i class="fa-solid fa-star-sharp fs-3 pw-text-neutral-300"></i>
                    </button>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <button type="button" class="btn p-0">
                      <i class="fa-solid fa-clock-rotate-left fs-3 pw-text-neutral-300"></i>
                    </button>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <button type="button" class="btn p-0">
                      <i class="fa-solid fa-messages fs-3 pw-text-neutral-300"></i>
                    </button>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <button type="button" class="btn p-0">
                      <i class="fa-solid fa-message fs-3 pw-text-neutral-300"></i>
                    </button>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <button type="button" class="btn p-0">
                      <i class="fa-solid fa-lock fs-3 pw-text-neutral-300"></i>
                    </button>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <button type="button" class="btn p-0">
                      <i class="fa-solid fa-clipboard-list-check fs-3 pw-text-neutral-300"></i>
                    </button>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <button type="button" class="btn p-0">
                      <i class="fa-solid fa-file-signature fs-3 pw-text-neutral-300"></i>
                    </button>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <button type="button" class="btn p-0">
                      <i class="fa-solid fa-gear fs-3 pw-text-neutral-300"></i>
                    </button>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <button type="button" class="btn p-0">
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
                          <a href="/belgeler/kabinet/#" class="btn btn-link btn-text-primary p-0 fs-8">FF020002340020B10</a>
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
                        <td><a href="/belgeler/kabinet/#" class="btn btn-link btn-text-primary p-0 fs-8">Fatih Şimşek</a></td>
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
                          <button type="button" class="btn p-0">
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

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/foot.php'; ?>