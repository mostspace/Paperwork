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
      <div data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="bottom" data-bs-original-title="Yeni Klasör" data-kt-initialized="1">
        <button class="btn p-0 fs-9 fs-semibold d-inline-flex align-items-center gap-1">
          <div class="w-25px h-25px rounded-0.20rem d-inline-flex align-items-center justify-content-center">
            <i class="fa-solid fa-plus pw-text-neutral-500"></i>
          </div>
          <span class="text-black">Yeni Klasör</span>
        </button>
      </div>

      <div data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="bottom" data-bs-original-title="Yeni Eksik Belge" data-kt-initialized="1">
        <button class="btn p-0 fs-9 fs-semibold d-inline-flex align-items-center gap-1">
          <div class="w-25px h-25px rounded-0.20rem d-inline-flex align-items-center justify-content-center">
            <i class="fa-solid fa-file-exclamation pw-text-neutral-500"></i>
          </div>
          <span class="text-black">Yeni Eksik Belge</span>
        </button>
      </div>

      <div data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="bottom" data-bs-original-title="Sil" data-kt-initialized="1">
        <button class="btn p-0 fs-9 fs-semibold d-inline-flex align-items-center gap-1">
          <div class="w-25px h-25px rounded-0.20rem d-inline-flex align-items-center justify-content-center">
            <i class="fa-solid fa-trash-can pw-text-neutral-500"></i>
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
              <a class="nav-link mx-0 py-3 px-10 fs-base rounded-0 fw-medium active" data-bs-toggle="tab" href="#pw_tab_pane_belgeler" aria-selected="true" role="tab">Belgeler</a>
            </li>
            <!--end::Tab item-->
          </div>
          <!--end::Tabs-->
        </div>
        <!--end::Tabs wrapper-->

        <!--begin::Tab contents-->
        <div class="tab-content pw-dashboard-tab-content mt-6" id="tableTabContents">
          <!--begin::Dosya kartı content-->
          <div class="tab-pane fade active show" id="pw_tab_pane_belgeler" role="tabpanel">
            <!--begin::Dosya kartı card-->
            <div class="border rounded-3 pw-border-stroke px-6 py-5">
              <!--begin::Form-->
              <form class="d-flex flex-column gap-13">
                <div class="col col-lg-9">
                  <!--begin::Table-->
                  <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                    <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fs-7">
                      <tbody>
                        <!--begin::Row-->
                        <tr>
                          <td><label class="form-label fs-base fw-bolder" for="pw_adi">Adı</label></td>
                          <td>
                            <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" id="pw_adi" name="pw_adi" required />
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td><label class="form-label fs-base fw-bolder" for="pw_yetki_seti">Yetki Seti</label></td>
                          <td>
                            <!--begin::Select-->
                            <select id="pw_yetki_seti" class="form-select form-select-solid fs-8 p-3" data-control="select2" data-placeholder="Seçim Yapın">
                              <option value="1">Option 1</option>
                            </select>
                            <!--end::Select-->
                            <textarea class="form-control form-control-solid py-3 px-4 fs-8 mt-3" cols="30" rows="4"></textarea>
                          </td>
                        </tr>
                        <!--end::Row-->
                      </tbody>
                    </table>
                  </div>
                  <!--end::Table-->

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
              </form>
              <!--end::Form-->
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