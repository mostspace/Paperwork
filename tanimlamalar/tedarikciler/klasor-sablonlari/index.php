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
            <li class="breadcrumb-item active">Klasör Şablonları</li>
            <!--end::Item-->
          </ul>
          <!--end::Breadcrumb-->
          <!--begin::Title-->
          <h1 class="page-heading d-flex text-dark fw-bolder fs-4 align-items-center gap-3 my-0">
            <button class="btn p-0"><i class="fa-regular fa-chevron-left text-black"></i></button>
            Klasör Şablonları
          </h1>
          <!--end::Title-->
        </div>
        <!--end::Page title-->

        <!--begin::Dropdown wrapper-->
        <div class="app-navbar-item ms-1 ms-md-3">
          <!--begin::Menu toggle-->
          <a href="/tanimlamalar/tedarikciler/kullanici-ek-ozellikleri/#" class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px" data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
            <i class="fa-solid fa-ellipsis-vertical fs-4"></i>
          </a>
          <!--begin::Menu toggle-->
          <!--begin::Menu-->
          <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-200px" data-kt-menu="true" data-kt-element="theme-mode-menu">
            <!--begin::Menu item-->
            <div class="menu-item px-3 my-0">
              <a href="/tanimlamalar/tedarikciler/kullanici-ek-ozellikleri/#" class="menu-link px-3 py-2 fs-8">
                <span class="menu-title">Açılış Sayfası Yap</span>
              </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item px-3 my-0">
              <a href="/tanimlamalar/tedarikciler/kullanici-ek-ozellikleri/#" class="menu-link px-3 py-2 fs-8">
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

    <!--begin::Content -->
    <div class="col-12 col-md-11 mb-20 px-6 pb-6 mt-6">
      <!--begin::Content Wrapper-->
      <div class="border pw-border-stroke rounded px-6">
        <div class="row">
          <div class="col-12 col-lg-4 border-bottom border-lg-bottom-0 border-lg-end pw-border-stroke pe-6">
            <!--begin::Explorer-->
            <div class="py-3 border pw-border-stroke rounded my-6">
              <!--begin::Menu-->
              <div class="pw-explorer-menu menu menu-column menu-title-gray-700 menu-icon-gray-400 menu-arrow-gray-400 menu-bullet-gray-400 menu-arrow-gray-400 menu-state-bg fw-semibold" data-kt-menu="true">

                <!--begin::Explorer actions-->
                <div class="d-flex align-items-center justify-content-end gap-2 mb-2 px-3">
                  <button class="btn p-0 fs-9 fs-semibold d-inline-flex align-items-center gap-2" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="bottom" title="Yeni Klasör">
                    <div class="w-25px h-25px pw-bg-iconbg rounded-0.20rem d-inline-flex align-items-center justify-content-center">
                      <i class="fa-solid fa-folder-plus pw-text-primary-400"></i>
                    </div>
                  </button>

                  <button class="btn p-0 fs-9 fs-semibold d-inline-flex align-items-center gap-2" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="bottom" title="Yeni Dosya">
                    <div class="w-25px h-25px pw-bg-iconbg rounded-0.20rem d-inline-flex align-items-center justify-content-center">
                      <i class="fa-solid fa-file-plus pw-text-primary-400"></i>
                    </div>
                  </button>

                  <button class="btn p-0 fs-9 fs-semibold d-inline-flex align-items-center gap-2" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="bottom" title="Sil">
                    <div class="w-25px h-25px pw-bg-iconbg rounded-0.20rem d-inline-flex align-items-center justify-content-center">
                      <i class="fa-solid fa-trash pw-text-primary-400"></i>
                    </div>
                  </button>
                </div>
                <!--end::Explorer actions-->
                <!--begin::Menu item-->
                <div class="menu-item menu-sub-indention menu-accordion hover show" data-kt-menu-trigger="click">
                  <!--begin::Menu link-->
                  <div class="menu-link py-3">
                    <span class="menu-arrow"></span>
                    <span class="menu-icon">
                      <i class="fa-solid fa-folder-tree"></i>
                    </span>
                  </div>
                  <!--end::Menu link-->

                  <!--begin::Menu sub-->
                  <div class="menu-sub menu-sub-accordion">
                    <!--begin::Menu item-->
                    <div class="menu-item menu-accordion" data-kt-menu-trigger="click">
                      <!--begin::Menu link-->
                      <div class="menu-link py-3">
                        <span class="menu-arrow me-2 ms-0"></span>
                        <a class="d-flex" href="/tanimlamalar/tedarikciler/klasor-sablonlari/#">
                          <span class="menu-bullet">
                            <i class="fa-solid fa-folder"></i>
                          </span>
                          <span class="menu-title">Test A</span>
                        </a>
                      </div>
                      <!--end::Menu link-->

                      <!--begin::Menu sub-->
                      <div class="menu-sub menu-sub-accordion">
                        <!--begin::Menu item-->
                        <div class="menu-item menu-accordion" data-kt-menu-trigger="click">
                          <!--begin::Menu link-->
                          <div class="menu-link py-3">
                            <span class="menu-arrow me-2 ms-0"></span>
                            <a class="d-flex" href="/tanimlamalar/tedarikciler/klasor-sablonlari/#">
                              <span class="menu-bullet">
                                <i class="fa-solid fa-folder"></i>
                              </span>
                              <span class="menu-title">Test B</span>
                            </a>
                          </div>
                          <!--end::Menu link-->

                          <!--begin::Menu sub-->
                          <div class="menu-sub menu-sub-accordion">
                            <!--begin::Menu item-->
                            <div class="menu-item">
                              <div class="menu-link py-3">
                                <a class="d-flex" href="/tanimlamalar/tedarikciler/klasor-sablonlari/#">
                                  <span class="menu-bullet">
                                    <i class="fa-solid fa-folder"></i>
                                  </span>
                                  <span class="menu-title">Test C</span>
                                </a>
                              </div>
                            </div>
                            <!--end::Menu item-->
                          </div>
                          <!--end::Menu sub-->
                        </div>
                        <!--end::Menu item-->
                      </div>
                      <!--end::Menu sub-->
                    </div>
                    <!--end::Menu item-->

                  </div>
                  <!--end::Menu sub-->
                </div>
                <!--end::Menu item-->

              </div>
              <!--end::Menu-->
            </div>
            <!--end::Explorer-->
          </div>

          <div class="col-12 col-lg-8 py-6 ps-6">
            <form>
              <!--begin::Form Table-->
              <div class="table-responsive overflow-x-auto overflow-lg-visible mw-400px">
                <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fw-bold fs-7">
                  <tbody>
                    <!--begin::Row-->
                    <tr>
                      <td><label for="pw_adi">Adı</label></td>
                      <td>
                        <input type="text" class="form-control form-control-solid pw-form-control-primary py-3 px-4 fs-8" id="pw_adi" name="pw_adi" />
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label for="pw_yetki_seti">Yetki Seti</label></td>
                      <td>
                        <select class="form-select form-select-solid pw-form-select-primary  fs-8 py-3 px-4" data-control="select2" data-placeholder="Seçim Yapın" id="pw_yetki_seti" name="pw_yetki_seti">
                          <option></option>
                          <option value="1">Option 1</option>
                          <option value="2">Option 2</option>
                        </select>
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label for="pw_anahtar_alan">Belge Tipi</label></td>
                      <td>
                        <select class="form-select form-select-solid pw-form-select-primary fs-8 py-3 px-4" data-control="select2" data-placeholder="Seçim Yapın" id="pw_belge_tipi" name="pw_belge_tipi">
                          <option></option>
                          <option value="1">Option 1</option>
                          <option value="2">Option 2</option>
                        </select>
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label for="pw_tarih">Tarih</label></td>
                      <td>
                        <div class="position-relative">
                          <span class="position-absolute top-50 translate-middle-y fs-base ms-4">
                            <i class="fa-solid fa-calendar-days text-primary"></i>
                          </span>
                          <input class="form-control form-control-solid pw-form-control-primary fs-8 py-3 ps-10 pe-4" value="12/01/2021" placeholder="Tarih seçiniz" id="pw_tarih" required="required">
                        </div>
                      </td>
                    </tr>
                    <!--end::Row-->
                  </tbody>
                </table>
              </div>
              <!--end::Form Table-->

              <!--begin::Form Actions-->

              <div class="d-flex align-items-center justify-content-end gap-3 mt-5 mw-400px">
                <button type="submit" class="btn btn-primary fs-8 py-2 px-3">
                  Güncelle
                </button>
              </div>

              <!--end::Form Actions-->
            </form>
          </div>
        </div>
      </div>
      <!--end::Content Wrapper-->
    </div>
    <!--end::Content -->
    <!--end::Content wrapper-->
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/footer.php'; ?>
  </div>
  <!--end::Main-->

</div>
<!--end::Wrapper -->


<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/foot.php'; ?>