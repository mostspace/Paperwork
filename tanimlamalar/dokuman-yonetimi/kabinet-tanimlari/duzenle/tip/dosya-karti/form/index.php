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
            <li class="breadcrumb-item text-muted">
              <a href="/tanimlamalar/dokuman-yonetimi/kabinet-tanimlari/" class="text-muted text-hover-primary">Kabinet Tanımları</a>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item">
              <span class="text-muted">/</span>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item active">Akçelik POC</li>
            <!--end::Item-->
          </ul>
          <!--end::Breadcrumb-->
          <!--begin::Title-->
          <div class="d-flex gap-2 align-items-center mb-8">
            <a href="/tanimlamalar/dokuman-yonetimi/kabinet-tanimlari/" class="btn p-0 pw-text-dark">
              <i class="fa-solid fs-2 fa-angle-left pw-text-dark"></i>
            </a>
            <h1 class="page-heading d-flex pw-text-dark fw-bolder fs-4 flex-column justify-content-center my-0">
              Akçelik POC
            </h1>
          </div>
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
    <div class="d-flex align-items-center gap-5 border-top border-bottom pw-border-neutral-200 px-6 py-2 mt-4">
      <div data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="bottom" data-bs-original-title="Sihirbaz" data-kt-initialized="1">
        <button class="btn p-0 fs-9 fs-semibold d-inline-flex align-items-center gap-1">
          <div class="w-25px h-25px rounded-0.20rem d-inline-flex align-items-center justify-content-center">
            <i class="fa-solid fa-function"></i>
          </div>
          <span class="text-black">Sihirbaz</span>
        </button>
      </div>

      <div data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="bottom" data-bs-original-title="Sil" data-kt-initialized="1">
        <button class="btn p-0 fs-9 fs-semibold d-inline-flex align-items-center gap-1">
          <div class="w-25px h-25px rounded-0.20rem d-inline-flex align-items-center justify-content-center">
            <i class="fa-solid fa-trash-can pw-text-danger-500"></i>
          </div>
          <span class="text-black">Sil</span>
        </button>
      </div>
    </div>
    <!--end::Actionbar-->

    <!--begin::Content -->
    <div class="d-flex flex-wrap mb-20 pe-6">
      <!--begin::Menu col-->
      <div class="col-12 col-lg-4 col-xxl-2 py-6 px-4 border-lg-bottom-0 border-lg-end pw-border-stroke">
        <!--begin::Search wrapper-->
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

        <!--begin::Aside menu-->
        <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/tanimlamalar/dokuman-yonetimi/kabinet-tanimlari/duzenle/globals/aside_menu.php';  ?>
        <!--end::Aside menu-->
      </div>
      <!--end::Menu col-->
      <!--begin::Content col-->
      <div class="col-12 col-lg-8 col-xxl-10 pt-5 px-4 pt-lg-0 ps-lg-5">
        <!--begin::Tabs wrapper-->
        <div class="table-reponsive overflow-x-auto mt-4">
          <!--begin::Tabs-->
          <div class="nav nav-tabs nav-line-tabs fs-6" role="tablist">
            <!--begin::Tab item-->
            <li class="nav-item" role="presentation">
              <a class="nav-link mx-0 py-3 px-10 fs-base rounded-0 fw-medium active" data-bs-toggle="tab" href="#pw_tab_pane_form" aria-selected="true" role="tab">Form</a>
            </li>
            <!--end::Tab item-->
          </div>
          <!--end::Tabs-->
        </div>
        <!--end::Tabs wrapper-->

        <!--begin::Tab contents-->
        <div class="tab-content pw-dashboard-tab-content mt-6" id="tableTabContents">
          <!--begin::Tip content-->
          <div class="tab-pane fade active show" id="pw_tab_pane_form" role="tabpanel">
            <!--begin::Tip card-->
            <div class="border rounded-3 pw-border-stroke px-6 py-5">
              <!--begin::Tip form tab-->
              <div class="table-reponsive overflow-x-auto overflow-y-hidden">
                <!--begin::Tabs-->
                <div class="nav nav-tabs nav-line-tabs gap-6 fs-6 border-0 flex-nowrap w-max-content" role="tablist">
                  <!--begin::Tab item-->
                  <li class="nav-item" role="presentation">
                    <a class="nav-link mx-0 fs-base rounded-0 border-0 fw-medium active" data-bs-toggle="tab" href="#pw_tab_pane_form_dizayn" aria-selected="true" role="tab">
                      <i class="fa-solid fa-paintbrush-fine pw-color-current"></i>
                      Dizayn
                    </a>
                  </li>
                  <!--end::Tab item-->

                  <!--begin::Tab item-->
                  <li class="nav-item" role="presentation">
                    <a class="nav-link mx-0 fs-base rounded-0 border-0 fw-medium" data-bs-toggle="tab" href="#pw_tab_pane_form_kodlar" role="tab">
                      <i class="fa-solid fa-code pw-color-current"></i>
                      Kodlar
                    </a>
                  </li>
                  <!--end::Tab item-->

                  <!--begin::Tab item-->
                  <li class="nav-item" role="presentation">
                    <a class="nav-link mx-0 fs-base rounded-0 border-0 fw-medium" data-bs-toggle="tab" href="#pw_tab_pane_form_paylasilan_kodlar" role="tab">
                      <i class="fa-solid fa-file-code pw-color-current"></i>
                      Paylaşılan Kodlar
                    </a>
                  </li>
                  <!--end::Tab item-->

                  <!--begin::Tab item-->
                  <li class="nav-item" role="presentation">
                    <a class="nav-link mx-0 fs-base rounded-0 border-0 fw-medium" data-bs-toggle="tab" href="#pw_tab_pane_form_tbok" role="tab">
                      <i class="fa-solid fa-file-doc pw-color-current"></i>
                      Tip Bazında Ortak Kodlar
                    </a>
                  </li>
                  <!--end::Tab item-->
                </div>
                <!--end::Tabs-->
              </div>
              <!--end::Tip form tab-->

              <!--begin::Tip form contents-->
              <div class="tab-content pw-dashboard-tab-content mt-6" id="tipFormContents">
                <!--begin::Dizayn content-->
                <div class="tab-pane fade active show" id="pw_tab_pane_form_dizayn" role="tabpanel">
                  <!--begin::Form-->
                  <form>
                    <!--begin::Form wrapper-->
                    <div class="table-responsive overflow-x-auto overflow-y-hidden">
                      <!--begin::Row-->
                      <div class="d-flex mw-1000px mw-lg-100 px-1 gap-4">
                        <!--begin::Col-->
                        <div class="mw-225px w-100 pw-bg-neutral-50 border rounded-1 pw-border-stroke">
                          <!--begin::Action buttons-->
                          <div class="d-flex align-items-center justify-content-center gap-3 p-3 border-bottom pw-border-stroke">
                            <!--begin::Button-->
                            <button class="btn btn-icon btn-light-primary btn-color-primary btn-active-primary btn-active-color-white border pw-border-primary-500 w-40px h-40px">
                              <i class="fa-solid fa-folder"></i>
                            </button>
                            <!--end::Button-->

                            <!--begin::Button-->
                            <button class="btn btn-icon btn-light-primary btn-color-primary btn-active-primary btn-active-color-white border pw-border-primary-500 w-40px h-40px">
                              <i class="fa-solid fa-gavel"></i>
                            </button>
                            <!--end::Button-->

                            <!--begin::Button-->
                            <button class="btn btn-icon btn-light-primary btn-color-primary btn-active-primary btn-active-color-white border pw-border-primary-500 w-40px h-40px">
                              <i class="fa-solid fa-database"></i>
                            </button>
                            <!--end::Button-->
                          </div>
                          <!--end::Action buttons-->

                          <!--begin::Draggable elements-->
                          <div class="d-flex flex-column gap-2 py-3 px-2">
                            <!--begin::Search wrapper-->
                            <div id="kt_docs_search_handler_basic" class="position-relative w-100 mw-300px mb-3" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="true" data-kt-search-layout="inline">

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

                            <!--begin::Elements-->
                            <div class="accordion accordion-icon-toggle" id="pw_drag_drop">
                              <!--begin::Item-->
                              <div class="mb-2">
                                <!--begin::Header-->
                                <div class="accordion-header py-3 d-flex collapsed pw-bg-primary-300 pw-text-neutral-800 fs-7 fw-medium rounded-1 p-2" data-bs-toggle="collapse" data-bs-target="#pw_drag_drop_item_1">
                                  <h3 class="fs-4 fw-semibold mb-0 ms-4">Genel</h3>
                                </div>
                                <!--end::Header-->

                                <!--begin::Body-->
                                <div id="pw_drag_drop_item_1" class="fs-6 collapse p-0 mt-2 collapse" data-bs-parent="#pw_drag_drop">
                                  <!--begin::Element wrapper-->
                                  <div class="d-flex flex-column gap-1">
                                    <!--begin::Elemet-->
                                    <button class="btn px-3 py-2 border border-dashed pw-border-neutral-500 pw-text-neutral-800 fs-8 fw-medium text-start">
                                      <i class="fa-solid fa-terminal fs-7 pw-color-current"></i>
                                      Text
                                    </button>
                                    <!--end::Elemet-->

                                    <!--begin::Elemet-->
                                    <button class="btn px-3 py-2 border border-dashed pw-border-neutral-500 pw-text-neutral-800 fs-8 fw-medium text-start">
                                      <i class="fa-solid fa-font fs-7 pw-color-current"></i>
                                      Memo
                                    </button>
                                    <!--end::Elemet-->

                                    <!--begin::Elemet-->
                                    <button class="btn px-3 py-2 border border-dashed pw-border-neutral-500 pw-text-neutral-800 fs-8 fw-medium text-start">
                                      <i class="fa-solid fa-hashtag fs-7 pw-color-current"></i>
                                      Number
                                    </button>
                                    <!--end::Elemet-->

                                    <!--begin::Elemet-->
                                    <button class="btn px-3 py-2 border border-dashed pw-border-neutral-500 pw-text-neutral-800 fs-8 fw-medium text-start">
                                      <i class="fa-solid fa-hashtag fs-7 pw-color-current"></i>
                                      Real Number
                                    </button>
                                    <!--end::Elemet-->

                                    <!--begin::Elemet-->
                                    <button class="btn px-3 py-2 border border-dashed pw-border-neutral-500 pw-text-neutral-800 fs-8 fw-medium text-start">
                                      <i class="fa-solid fa-calendar fs-7 pw-color-current"></i>
                                      Date
                                    </button>
                                    <!--end::Elemet-->

                                    <!--begin::Elemet-->
                                    <button class="btn px-3 py-2 border border-dashed pw-border-neutral-500 pw-text-neutral-800 fs-8 fw-medium text-start">
                                      <i class="fa-solid fa-clock fs-7 pw-color-current"></i>
                                      Time
                                    </button>
                                    <!--end::Elemet-->

                                    <!--begin::Elemet-->
                                    <button class="btn px-3 py-2 border border-dashed pw-border-neutral-500 pw-text-neutral-800 fs-8 fw-medium text-start">
                                      <i class="fa-solid fa-calendar-clock fs-7 pw-color-current"></i>
                                      Date / Time
                                    </button>
                                    <!--end::Elemet-->

                                    <!--begin::Elemet-->
                                    <button class="btn px-3 py-2 border border-dashed pw-border-neutral-500 pw-text-neutral-800 fs-8 fw-medium text-start">
                                      <i class="fa-solid fa-dollar-sign fs-7 pw-color-current"></i>
                                      Currency
                                    </button>
                                    <!--end::Elemet-->

                                    <!--begin::Elemet-->
                                    <button class="btn px-3 py-2 border border-dashed pw-border-neutral-500 pw-text-neutral-800 fs-8 fw-medium text-start">
                                      <i class="fa-solid fa-square-check fs-7 pw-color-current"></i>
                                      Checkbox
                                    </button>
                                    <!--end::Elemet-->

                                    <!--begin::Elemet-->
                                    <button class="btn px-3 py-2 border border-dashed pw-border-neutral-500 pw-text-neutral-800 fs-8 fw-medium text-start">
                                      <i class="fa-solid fa-circle-o fs-7 pw-color-current"></i>
                                      Radio
                                    </button>
                                    <!--end::Elemet-->

                                    <!--begin::Elemet-->
                                    <button class="btn px-3 py-2 border border-dashed pw-border-neutral-500 pw-text-neutral-800 fs-8 fw-medium text-start">
                                      <i class="fa-solid fa-table-list fs-7 pw-color-current"></i>
                                      Select
                                    </button>
                                    <!--end::Elemet-->

                                    <!--begin::Elemet-->
                                    <button class="btn px-3 py-2 border border-dashed pw-border-neutral-500 pw-text-neutral-800 fs-8 fw-medium text-start">
                                      <i class="fa-solid fa-list-check fs-7 pw-color-current"></i>
                                      Data Table
                                    </button>
                                    <!--end::Elemet-->

                                    <!--begin::Elemet-->
                                    <button class="btn px-3 py-2 border border-dashed pw-border-neutral-500 pw-text-neutral-800 fs-8 fw-medium text-start">
                                      <i class="fa-solid fa-square fs-7 pw-color-current"></i>
                                      Button
                                    </button>
                                    <!--end::Elemet-->

                                    <!--begin::Elemet-->
                                    <button class="btn px-3 py-2 border border-dashed pw-border-neutral-500 pw-text-neutral-800 fs-8 fw-medium text-start">
                                      <i class="fa-brands fa-html5 fs-7 pw-color-current"></i>
                                      HTML Element
                                    </button>
                                    <!--end::Elemet-->
                                  </div>
                                  <!--end::Element wrapper-->
                                </div>
                                <!--end::Body-->
                              </div>
                              <!--end::Item-->

                              <!--begin::Item-->
                              <div class="mb-2">
                                <!--begin::Header-->
                                <div class="accordion-header py-3 d-flex collapsed pw-bg-primary-300 pw-text-neutral-800 fs-7 fw-medium rounded-1 p-2" data-bs-toggle="collapse" data-bs-target="#pw_drag_drop_item_2">
                                  <h3 class="fs-4 fw-semibold mb-0 ms-4">Entegrasyon</h3>
                                </div>
                                <!--end::Header-->

                                <!--begin::Body-->
                                <div id="pw_drag_drop_item_2" class="fs-6 collapse p-0 mt-2 collapse" data-bs-parent="#pw_drag_drop">
                                  <!--begin::Element wrapper-->
                                  <div class="d-flex flex-column gap-1">
                                    <!--begin::Elemet-->
                                    <button class="btn px-3 py-2 border border-dashed pw-border-neutral-500 pw-text-neutral-800 fs-8 fw-medium text-start">
                                      <i class="fa-solid fa-user-secret fs-7 pw-color-current"></i>
                                      SAP Konnektörü
                                    </button>
                                    <!--end::Elemet-->

                                    <!--begin::Elemet-->
                                    <button class="btn px-3 py-2 border border-dashed pw-border-neutral-500 pw-text-neutral-800 fs-8 fw-medium text-start">
                                      <i class="fa-solid fa-user-secret fs-7 pw-color-current"></i>
                                      Logo Konnektörü
                                    </button>
                                    <!--end::Elemet-->

                                    <!--begin::Elemet-->
                                    <button class="btn px-3 py-2 border border-dashed pw-border-neutral-500 pw-text-neutral-800 fs-8 fw-medium text-start">
                                      <i class="fa-solid fa-user-secret fs-7 pw-color-current"></i>
                                      Robusta Konnektörü
                                    </button>
                                    <!--end::Elemet-->
                                  </div>
                                  <!--end::Element wrapper-->
                                </div>
                                <!--end::Body-->
                              </div>
                              <!--end::Item-->

                              <!--begin::Item-->
                              <div class="mb-2">
                                <!--begin::Header-->
                                <div class="accordion-header py-3 d-flex collapsed pw-bg-primary-300 pw-text-neutral-800 fs-7 fw-medium rounded-1 p-2" data-bs-toggle="collapse" data-bs-target="#pw_drag_drop_item_3">
                                  <h3 class="fs-4 fw-semibold mb-0 ms-4">Düzenleme</h3>
                                </div>
                                <!--end::Header-->

                                <!--begin::Body-->
                                <div id="pw_drag_drop_item_3" class="fs-6 collapse p-0 mt-2 collapse" data-bs-parent="#pw_drag_drop">
                                  <!--begin::Element wrapper-->
                                  <div class="d-flex flex-column gap-1">
                                    <!--begin::Elemet-->
                                    <button class="btn px-3 py-2 border border-dashed pw-border-neutral-500 pw-text-neutral-800 fs-8 fw-medium text-start">
                                      <i class="fa-solid fa-table-columns fs-7 pw-color-current"></i>
                                      Kolonlar
                                    </button>
                                    <!--end::Elemet-->

                                    <!--begin::Elemet-->
                                    <button class="btn px-3 py-2 border border-dashed pw-border-neutral-500 pw-text-neutral-800 fs-8 fw-medium text-start">
                                      <i class="fa-solid fa-list-dropdown fs-7 pw-color-current"></i>
                                      Panel
                                    </button>
                                    <!--end::Elemet-->

                                    <!--begin::Elemet-->
                                    <button class="btn px-3 py-2 border border-dashed pw-border-neutral-500 pw-text-neutral-800 fs-8 fw-medium text-start">
                                      <i class="fa-solid fa-table-cells fs-7 pw-color-current"></i>
                                      Tablo
                                    </button>
                                    <!--end::Elemet-->

                                    <!--begin::Elemet-->
                                    <button class="btn px-3 py-2 border border-dashed pw-border-neutral-500 pw-text-neutral-800 fs-8 fw-medium text-start">
                                      <i class="fa-solid fa-folder fs-7 pw-color-current"></i>
                                      Sekme
                                    </button>
                                    <!--end::Elemet-->

                                    <!--begin::Elemet-->
                                    <button class="btn px-3 py-2 border border-dashed pw-border-neutral-500 pw-text-neutral-800 fs-8 fw-medium text-start">
                                      <i class="fa-solid fa-window-restore fs-7 pw-color-current"></i>
                                      Açılır Pencere
                                    </button>
                                    <!--end::Elemet-->
                                  </div>
                                  <!--end::Element wrapper-->
                                </div>
                                <!--end::Body-->
                              </div>
                              <!--end::Item-->
                            </div>
                            <!--end::Elements-->
                          </div>
                          <!--end::Draggable elements-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col">...</div>
                        <!--end::Col-->
                      </div>
                      <!--end::Row-->

                      <!--begin::Form actions-->
                      <div class="d-flex align-items-center justify-content-end gap-3 pt-5">
                        <button type="reset" class="btn btn-active-light fs-8 py-3 px-6">
                          İptal
                        </button>
                        <button type="submit" class="btn btn-primary fs-8 py-3 px-6">
                          Kaydet
                        </button>
                      </div>
                      <!--end::Form actions-->
                    </div>
                    <!--end::Form wrapper-->
                  </form>
                  <!--end::Form-->
                </div>
                <!--end::Dizayn content-->

                <!--begin::Kodlar content-->
                <div class="tab-pane fade" id="pw_tab_pane_form_kodlar" role="tabpanel">

                  <!--begin::Accordion-->
                  <div class="accordion accordion-icon-toggle" id="pw_detay_accordion">
                    <!--begin::Item-->
                    <div class="mb-5">
                      <!--begin::Header-->
                      <div class="accordion-header py-3 d-flex" data-bs-toggle="collapse" data-bs-target="#pw_detay_accordion_item_1">
                        <span class="accordion-icon">
                          <i class="fa-sharp fa-solid fa-triangle fs-6" style="rotate:90deg"></i>
                        </span>
                        <h3 class="d-flex align-items-center gap-2 fs-4 fw-semibold mb-0 ms-4">
                          <i class="fa-regular fa-window-restore pw-text-primary-500 fs-3"></i>
                          Süreç 2
                        </h3>
                      </div>
                      <!--end::Header-->

                      <!--begin::Body-->
                      <div id="pw_detay_accordion_item_1" class="fs-6 collapse show ps-10" data-bs-parent="#pw_detay_accordion">
                        <!--begin::Form-->
                        <form>
                          <!--begin::Body wrapper-->
                          <div class="d-flex flex-wrap flex-lg-nowrap gap-3">
                            <!--begin::Col-->
                            <div class="col-12 col-lg-5 border pw-border-stroke rounded-3">
                              <!--begin::Item-->
                              <div class="d-flex align-items-center justify-content-between gap-4 px-3 py-4 border-bottom pw-border-stroke">
                                <!--begin::Item name-->
                                <div class="d-flex align-items-center gap-2">
                                  <i class="fa-solid fa-file-pen pw-text-primary-500 fs-4"></i>
                                  <span class="pw-text-neutral-700 fw-medium fs-7">Kullanıcı Adı</span>
                                </div>
                                <!--end::Item name-->

                                <!--begin::Item info-->
                                <div class="d-flex align-items-center justify-content-between gap-3 min-w-70px">
                                  <span class="text-black fs-9 fw-medium">Yazı (20)</span>
                                  <button class="btn p-0"><i class="fa-solid fa-circle-x pw-text-primary-500 fs-6"></i></button>
                                </div>
                                <!--end::Item info-->
                              </div>
                              <!--end::Item-->

                              <!--begin::Item-->
                              <div class="d-flex align-items-center justify-content-between gap-4 px-3 py-4 border-bottom pw-border-stroke">
                                <!--begin::Item name-->
                                <div class="d-flex align-items-center gap-2">
                                  <i class="fa-solid fa-input-numeric pw-text-primary-500 fs-4"></i>
                                  <span class="pw-text-neutral-700 fw-medium fs-7">Kullanıcı Yaşı</span>
                                </div>
                                <!--end::Item name-->

                                <!--begin::Item info-->
                                <div class="d-flex align-items-center justify-content-between gap-3 min-w-70px">
                                  <span class="text-black fs-9 fw-medium">Sayı</span>
                                  <button class="btn p-0"><i class="fa-solid fa-circle-x pw-text-primary-500 fs-6"></i></button>
                                </div>
                                <!--end::Item info-->
                              </div>
                              <!--end::Item-->

                              <!--begin::Item-->
                              <div class="d-flex align-items-center justify-content-between gap-4 px-3 py-4 border-bottom pw-border-stroke">
                                <!--begin::Item name-->
                                <div class="d-flex align-items-center gap-2">
                                  <i class="fa-solid fa-calendar pw-text-primary-500 fs-4"></i>
                                  <span class="pw-text-neutral-700 fw-medium fs-7">Tarihi</span>
                                </div>
                                <!--end::Item name-->

                                <!--begin::Item info-->
                                <div class="d-flex align-items-center justify-content-between gap-3 min-w-70px">
                                  <span class="text-black fs-9 fw-medium">Tarih</span>
                                  <button class="btn p-0"><i class="fa-solid fa-circle-x pw-text-primary-500 fs-6"></i></button>
                                </div>
                                <!--end::Item info-->
                              </div>
                              <!--end::Item-->

                              <!--begin::Item-->
                              <div class="d-flex align-items-center justify-content-between gap-4 px-3 py-4 border-bottom pw-border-stroke">
                                <!--begin::Item name-->
                                <div class="d-flex align-items-center gap-2">
                                  <i class="fa-solid fa-clock pw-text-primary-500 fs-4"></i>
                                  <span class="pw-text-neutral-700 fw-medium fs-7">Saati</span>
                                </div>
                                <!--end::Item name-->

                                <!--begin::Item info-->
                                <div class="d-flex align-items-center justify-content-between gap-3 min-w-70px">
                                  <span class="text-black fs-9 fw-medium">Saat</span>
                                  <button class="btn p-0"><i class="fa-solid fa-circle-x pw-text-primary-500 fs-6"></i></button>
                                </div>
                                <!--end::Item info-->
                              </div>
                              <!--end::Item-->

                              <!--begin::Item-->
                              <div class="d-flex align-items-center justify-content-between gap-4 px-3 py-4 border-bottom pw-border-stroke">
                                <!--begin::Item name-->
                                <div class="d-flex align-items-center gap-2">
                                  <i class="fa-solid fa-dollar-sign pw-text-primary-500 fs-4"></i>
                                  <span class="pw-text-neutral-700 fw-medium fs-7">KDV Tutarı</span>
                                </div>
                                <!--end::Item name-->

                                <!--begin::Item info-->
                                <div class="d-flex align-items-center justify-content-between gap-3 min-w-70px">
                                  <span class="text-black fs-9 fw-medium">Miktar</span>
                                  <button class="btn p-0"><i class="fa-solid fa-circle-x pw-text-primary-500 fs-6"></i></button>
                                </div>
                                <!--end::Item info-->
                              </div>
                              <!--end::Item-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-12 col-lg-7 border pw-border-stroke rounded-3 px-3 py-4">
                              <h2 class="text-black fs-7 fw-medium">Alan Tanımı</h2>

                              <!--begin::Table-->
                              <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                                <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fs-7">
                                  <tbody>
                                    <!--begin::Row-->
                                    <tr>
                                      <td><label class="form-label fs-base fw-medium" for="pw_tip_detay_alan_adi">Alan Adı</label></td>
                                      <td>
                                        <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" id="pw_tip_detay_alan_adi" name="pw_tip_detay_alan_adi" required />
                                      </td>
                                    </tr>
                                    <!--end::Row-->

                                    <!--begin::Row-->
                                    <tr>
                                      <td><label class="form-label fs-base fw-medium" for="pw_tip_detay_veri_tipi">Veri Tipi</label></td>
                                      <td>
                                        <select id="pw_tip_detay_veri_tipi" class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2" data-placeholder="Seçim Yapın">
                                          <option value="1">Option 1</option>
                                        </select>
                                      </td>
                                    </tr>
                                    <!--end::Row-->

                                    <!--begin::Row-->
                                    <tr>
                                      <td></td>
                                      <td>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="" id="pw_tip_detay_zorunlu" checked="checked" />
                                          <label class="form-check-label pw-text-neutral-800 fs-medium" for="pw_tip_detay_zorunlu">
                                            Zorunlu
                                          </label>
                                        </div>
                                      </td>
                                    </tr>
                                    <!--end::Row-->

                                    <!--begin::Row-->
                                    <tr>
                                      <td><label class="form-label fs-base fw-medium" for="pw_tip_detay_boyut">Boyut</label></td>
                                      <td>
                                        <input type="number" class="form-control form-control-solid" value="0" min="0" />
                                      </td>
                                    </tr>
                                    <!--end::Row-->

                                    <!--begin::Row-->
                                    <tr>
                                      <td><label class="form-label fs-base fw-medium" for="pw_tip_detay_liste">Liste</label></td>
                                      <td>
                                        <select id="pw_tip_detay_liste" class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2" data-placeholder="Seçim Yapın">
                                          <option value="1">Option 1</option>
                                        </select>
                                      </td>
                                    </tr>
                                    <!--end::Row-->

                                    <!--begin::Row-->
                                    <tr>
                                      <td><label class="form-label fs-base fw-medium" for="pw_tip_detay_anahtar_alan">Anahtar Alan</label></td>
                                      <td>
                                        <select id="pw_tip_detay_anahtar_alan" class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2" data-placeholder="Seçim Yapın">
                                          <option value="1">Option 1</option>
                                        </select>
                                      </td>
                                    </tr>
                                    <!--end::Row-->

                                    <!--begin::Row-->
                                    <tr>
                                      <td><label class="form-label fs-base fw-medium" for="pw_tip_detay_goruntulenecek_alan">Görüntülenecek Alan</label></td>
                                      <td>
                                        <select id="pw_tip_detay_goruntulenecek_alan" class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2" data-placeholder="Seçim Yapın">
                                          <option value="1">Option 1</option>
                                        </select>
                                      </td>
                                    </tr>
                                    <!--end::Row-->

                                    <!--begin::Row-->
                                    <tr>
                                      <td><label class="form-label fs-base fw-medium" for="pw_tip_detay_aciklama">Açıklama</label></td>
                                      <td>
                                        <textarea id="pw_tip_detay_aciklama" class="form-select form-select-solid fs-8 py-3 px-4" cols="30" rows="4"></textarea>
                                      </td>
                                    </tr>
                                    <!--end::Row-->
                                  </tbody>
                                </table>
                              </div>
                              <!--end::Table-->
                            </div>
                            <!--end::Col-->
                          </div>
                          <!--end::Body wrapper-->

                          <!--begin::Form actions-->
                          <div class="d-flex align-items-center justify-content-end gap-3 pt-5">
                            <button type="reset" class="btn btn-active-light fs-8 py-3 px-6">
                              İptal
                            </button>
                            <button type="submit" class="btn btn-primary fs-8 py-3 px-6">
                              Kaydet
                            </button>
                          </div>
                          <!--end::Form actions-->
                        </form>
                        <!--end::Form-->
                      </div>
                      <!--end::Body-->
                    </div>
                    <!--end::Item-->
                  </div>
                  <!--end::Accordion-->
                </div>
                <!--end::Kodlar content-->

                <!--begin::Paylaşınlan kodlar content-->
                <div class="tab-pane fade" id="pw_tab_pane_form_paylasilan_kodlar" role="tabpanel">
                  <!--begin::Iframe wrapper-->
                  <div class="border pw-border-stroke rounded-3 py-6 px-4">
                    Paylaşılan kodlar
                  </div>
                  <!--end::Iframe wrapper-->

                  <!--begin::Button group-->
                  <div class="d-flex align-items-center justify-content-end gap-3 pt-5">
                    <button type="reset" class="btn btn-active-light fs-8 py-3 px-6">
                      İptal
                    </button>
                    <button type="submit" class="btn btn-primary fs-8 py-3 px-6">
                      Kaydet
                    </button>
                  </div>
                  <!--end::Button group-->
                </div>
                <!--end::Paylaşınlan kodlar content-->

                <!--begin::Tip bazında ortak kodlar content-->
                <div class="tab-pane fade" id="pw_tab_pane_form_tbok" role="tabpanel">
                  <!--begin::Tarihce wrapper-->
                  <div class="d-flex flex-wrap flex-lg-nowrap gap-4">
                    <!--begin::Col-->
                    <div class="col-12 col-lg mw-lg-225px d-flex flex-column gap-8 border pw-border-stroke rounded-3 py-6 px-5">
                      <!--begin::Item-->
                      <div class="d-flex flex-column">
                        <span class="pw-text-neutral-600 fs-7 fw-medium">Turgut İnanbank</span>
                        <span class="pw-text-neutral-400 fs-8">23.11.2022 10:33</span>
                      </div>
                      <!--end::Item-->

                      <!--begin::Item-->
                      <div class="d-flex flex-column">
                        <span class="pw-text-neutral-600 fs-7 fw-medium">Hayrettin Çağrı Şen</span>
                        <span class="pw-text-neutral-400 fs-8">25.11.2022 15:21</span>
                      </div>
                      <!--end::Item-->

                      <!--begin::Item-->
                      <div class="d-flex flex-column">
                        <span class="pw-text-neutral-600 fs-7 fw-medium">Hayrettin Çağrı Şen</span>
                        <span class="pw-text-neutral-400 fs-8">25.11.2022 15:21</span>
                      </div>
                      <!--end::Item-->

                      <!--begin::Item-->
                      <div class="d-flex flex-column">
                        <span class="pw-text-neutral-600 fs-7 fw-medium">Ezgi Çelik</span>
                        <span class="pw-text-neutral-400 fs-8">23.11.2022 10:33</span>
                      </div>
                      <!--end::Item-->

                      <!--begin::Item-->
                      <div class="d-flex flex-column">
                        <span class="pw-text-neutral-600 fs-7 fw-medium">Hayrettin Çağrı Şen</span>
                        <span class="pw-text-neutral-400 fs-8">23.11.2022 10:33</span>
                      </div>
                      <!--end::Item-->

                      <!--begin::Item-->
                      <div class="d-flex flex-column">
                        <span class="pw-text-neutral-600 fs-7 fw-medium">Samet Fırat</span>
                        <span class="pw-text-neutral-400 fs-8">23.11.2022 10:33</span>
                      </div>
                      <!--end::Item-->
                    </div>
                    <!--begin::Col-->

                    <!--begin::Col-->
                    <div class="col-12 col-lg border pw-border-stroke rounded-3 py-6 px-5">
                      <!--begin::Table-->
                      <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                        <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fs-7">
                          <tbody>
                            <!--begin::Row-->
                            <tr>
                              <td><label class="form-label fs-base fw-bolder">Tip Adı</label></td>
                              <td>Sistem <br /> PW_SYSOBJECT</td>
                            </tr>
                            <!--end::Row-->

                            <!--begin::Row-->
                            <tr>
                              <td><label class="form-label fs-base fw-bolder">Süper Tip</label></td>
                              <td></td>
                            </tr>
                            <!--end::Row-->

                            <!--begin::Row-->
                            <tr>
                              <td><label class="form-label fs-base fw-bolder">Tasarım Yetki Seti</label></td>
                              <td>PW Destek Ekibi</td>
                            </tr>
                            <!--end::Row-->

                            <!--begin::Row-->
                            <tr>
                              <td><label class="form-label fs-base fw-bolder" for="pw_tip_tarihce_tam_metin_indeksleme">Tam Metin Indeksleme</label></td>
                              <td>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="pw_tip_tarihce_tam_metin_indeksleme" checked="checked" />
                                </div>
                              </td>
                            </tr>
                            <!--end::Row-->

                            <!--begin::Row-->
                            <tr>
                              <td><label class="form-label fs-base fw-bolder">Geri Dönüşüm</label></td>
                              <td>Normal</td>
                            </tr>
                            <!--end::Row-->
                          </tbody>
                        </table>
                      </div>
                      <!--end::Table-->

                      <!--begin::Table 2-->
                      <div class="table-responsive overflow-x-auto rounded">
                        <table id="pw_erisim_ve_islem_yetkileri_table" class="table table-row-bordered pw-dark-bg-table border pw-table-border-gray table-rounded align-middle w-max-content min-w-100 gy-4 gx-9 gs-9">
                          <thead>
                            <tr class="fw-semibold fs-8 pw-text-neutral-700 pw-bg-neutral-100">
                              <th class="py-3">Alan</th>
                              <th class="py-3">GroupId</th>
                              <th class="py-3">Veri Tipi</th>
                              <th class="py-3">Zorunluluk</th>
                              <th class="py-3">Aranabilir</th>
                              <th class="py-3">Boyut</th>
                              <th class="py-3">ISDD</th>
                              <th class="py-3">İş Tanımı</th>
                            </tr>
                          </thead>
                          <tbody>
                            <!--begin::Row-->
                            <tr class="fw-medium pw-text-neutral-700 fs-8">
                              <td>Yetki Seti</td>
                              <td>0</td>
                              <td>Yazı</td>
                              <td></td>
                              <td></td>
                              <td>16</td>
                              <td></td>
                              <td></td>
                            </tr>
                            <!--end::Row-->

                            <!--begin::Row-->
                            <tr class="fw-medium pw-text-neutral-700 fs-8">
                              <td>İçerik No</td>
                              <td>0</td>
                              <td>Yazı</td>
                              <td></td>
                              <td></td>
                              <td>16</td>
                              <td></td>
                              <td></td>
                            </tr>
                            <!--end::Row-->

                            <!--begin::Row-->
                            <tr class="fw-medium pw-text-neutral-700 fs-8 pw-bg-primary-200">
                              <td>Oluştur</td>
                              <td>0</td>
                              <td>Yazı</td>
                              <td></td>
                              <td></td>
                              <td>16</td>
                              <td></td>
                              <td></td>
                            </tr>
                            <!--end::Row-->

                            <!--begin::Row-->
                            <tr class="fw-medium pw-text-neutral-700 fs-8">
                              <td>Silinme</td>
                              <td>0</td>
                              <td>Yazı</td>
                              <td></td>
                              <td></td>
                              <td>16</td>
                              <td></td>
                              <td></td>
                            </tr>
                            <!--end::Row-->
                          </tbody>
                        </table>
                      </div>
                      <!--end::Table 2-->

                      <!--begin::Button group-->
                      <div class="d-flex align-items-center justify-content-end gap-3 pt-5">
                        <button type="reset" class="btn btn-active-light fs-8 py-3 px-6">
                          İptal
                        </button>
                        <button type="submit" class="btn btn-primary fs-8 py-3 px-6">
                          Kaydet
                        </button>
                      </div>
                      <!--begin::Button group-->
                    </div>
                    <!--end::Col-->
                  </div>
                  <!--end::Tarihce wrapper-->
                </div>
                <!--end::Tip bazında ortak kodlar content-->
              </div>
              <!--end::Tip form contents-->
            </div>
            <!--end::Tip card-->
          </div>
          <!--end::Tip content-->
        </div>
        <!--end::Table tab contents-->
      </div>
      <!--end::Content col-->
    </div>
    <!--end::Content -->
    <!--end::Content wrapper-->
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/footer.php'; ?>
  </div>
  <!--end::Main-->

</div>
<!--end::Wrapper -->

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/foot.php'; ?>