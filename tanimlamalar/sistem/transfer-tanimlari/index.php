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
            <li class="breadcrumb-item active">Transfer Tanımları</li>
            <!--end::Item-->
          </ul>
          <!--end::Breadcrumb-->
          <!--begin::Title-->
          <h1 class="page-heading d-flex text-dark fw-bold fs-4 flex-column justify-content-center my-0">
            Transfer Tanımları
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
    <div class="d-flex align-items-center gap-5 border-top border-bottom pw-border-neutral-200 px-6 py-2 my-4">
      <div class="font-poppins fs-8 pw-text-neutral-900 fw-bold py-1 border-end pw-border-neutral-200 pe-5">
        18 Tanımlı Transfer
      </div>
      <a href="/tanimlamalar/sistem/transfer-tanimlari/yeni-ekle/" type="button" class="btn p-0">
        <span class="btn p-0 fs-9 fs-semibold d-inline-flex align-items-center gap-2" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="bottom" title="Yeni Tansfer Ekle">
          <i class="fa-solid fa-file-import"></i>
        </span>
      </a>
    </div>
    <!--end::Actionbar-->

    <!--begin::Content -->
    <div class="col-12 col-md-11 mb-20 px-6 pb-6">
      <!--begin::Search wrapper-->
      <div id="kt_docs_search_handler_basic" class="w-100 mw-300px mb-3" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="true" data-kt-search-layout="inline">

        <!--begin::Input Form-->
        <form data-kt-search-element="form" class="position-relative" autocomplete="off">
          <!--begin::Hidden input(Added to disable form autocomplete)-->
          <input type="hidden" />
          <!--end::Hidden input-->

          <!--begin::Icon-->
          <!--begin::Svg Icon | path: magnifier-->
          <div class="position-absolute top-50 translate-middle-y w-100 mw-20px mh-20px ms-2">
            <i class="fa-solid fa-magnifying-glass fs-4"></i>
          </div>
          <!--end::Icon-->

          <!--begin::Input-->
          <input type="text" class="form-control pw-input-stroke py-2 ps-9 pe-2 fs-8" name="search" value="" placeholder="Ara" data-kt-search-element="input" />
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
      <!--begin::Table-->
      <div class="table-responsive overflow-x-auto rounded">
        <table class="table table-row-bordered border pw-table-border-gray table-rounded align-middle w-max-content min-w-100 gy-2 gx-9 gs-9">
          <thead>
            <tr class="fw-semibold fs-8 pw-text-neutral-700 pw-bg-neutral-100">
              <th class="py-3">Liste Adı</th>
              <th class="py-3"></th>
            </tr>
          </thead>
          <tbody>
            <!--begin::Row-->
            <tr class="fw-medium pw-text-neutral-700 fs-8">
              <td>
                <div class="d-flex align-items-center flex-nowrap gap-2">
                  <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                    <i class="fa-solid fa-file-import fs-7 pw-text-brand"></i>
                  </div>
                  <div>Transfer A</div>
                </div>
              </td>
              <td align="right">
                <!--end::Menu wrapper-->
                <a href="/tanimlamalar/sistem/transfer-tanimlari/#detay" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5" data-bs-toggle="modal" data-bs-target="#detay">
                  <i class="fa-solid fa-eye fs-7 text-primary"></i>
                </a>
                <a href="tanimlamalar/sistem/transfer-tanimlari#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-pen-to-square fs-7 text-primary"></i>
                </a>
                <a href="tanimlamalar/sistem/transfer-tanimlari#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-trash fs-7 text-primary"></i>
                </a>
              </td>
            </tr>
            <!--end::Row-->

            <!--begin::Row-->
            <tr class="fw-medium pw-text-neutral-700 fs-8">
              <td>
                <div class="d-flex align-items-center flex-nowrap gap-2">
                  <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                    <i class="fa-solid fa-file-import fs-7 pw-text-brand"></i>
                  </div>
                  <div>Transfer </div>
                </div>
              </td>
              <td align="right">
                <!--end::Menu wrapper-->
                <a href="/tanimlamalar/sistem/transfer-tanimlari/#detay" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5" data-bs-toggle="modal" data-bs-target="#detay">
                  <i class="fa-solid fa-eye fs-7 text-primary"></i>
                </a>
                <a href="tanimlamalar/sistem/transfer-tanimlari#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-pen-to-square fs-7 text-primary"></i>
                </a>
                <a href="tanimlamalar/sistem/transfer-tanimlari#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-trash fs-7 text-primary"></i>
                </a>
              </td>
            </tr>
            <!--end::Row-->

            <!--begin::Row-->
            <tr class="fw-medium pw-text-neutral-700 fs-8">
              <td>
                <div class="d-flex align-items-center flex-nowrap gap-2">
                  <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                    <i class="fa-solid fa-file-import fs-7 pw-text-brand"></i>
                  </div>
                  <div>Transfer Test</div>
                </div>
              </td>
              <td align="right">
                <!--end::Menu wrapper-->
                <a href="/tanimlamalar/sistem/transfer-tanimlari/#detay" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5" data-bs-toggle="modal" data-bs-target="#detay">
                  <i class="fa-solid fa-eye fs-7 text-primary"></i>
                </a>
                <a href="tanimlamalar/sistem/transfer-tanimlari#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-pen-to-square fs-7 text-primary"></i>
                </a>
                <a href="tanimlamalar/sistem/transfer-tanimlari#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-trash fs-7 text-primary"></i>
                </a>
              </td>
            </tr>
            <!--end::Row-->

            <!--begin::Row-->
            <tr class="fw-medium pw-text-neutral-700 fs-8">
              <td>
                <div class="d-flex align-items-center flex-nowrap gap-2">
                  <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                    <i class="fa-solid fa-file-import fs-7 pw-text-brand"></i>
                  </div>
                  <div>CCG Transfer DB Test</div>
                </div>
              </td>
              <td align="right">
                <!--end::Menu wrapper-->
                <a href="/tanimlamalar/sistem/transfer-tanimlari/#detay" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5" data-bs-toggle="modal" data-bs-target="#detay">
                  <i class="fa-solid fa-eye fs-7 text-primary"></i>
                </a>
                <a href="tanimlamalar/sistem/transfer-tanimlari#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-pen-to-square fs-7 text-primary"></i>
                </a>
                <a href="tanimlamalar/sistem/transfer-tanimlari#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-trash fs-7 text-primary"></i>
                </a>
              </td>
            </tr>
            <!--end::Row-->
          </tbody>
        </table>


      </div>
      <!--end::Table-->
    </div>
    <!--end::Content -->
    <!--end::Content wrapper-->
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/footer.php'; ?>
  </div>
  <!--end::Main-->

</div>
<!--end::Wrapper -->

<!-- begin::Modal -->
<div class="modal fade" tabindex="-1" id="detay">
  <div class="modal-dialog modal-dialog-centered modal-lg mw-950px">
    <div class="modal-content">
      <div class="modal-header border-0 pb-3">
        <h3 class="modal-title fs-5">Transfer A</h3>


      </div>

      <div class="modal-body">
        <ul class="nav nav-tabs nav-line-tabs mb-5 fs-base">
          <li class="nav-item">
            <a class="nav-link active fw-bolder" data-bs-toggle="tab" href="#detaylar">Detaylar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bolder" data-bs-toggle="tab" href="#tarihce">Tarihçe</a>
        </ul>

        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="detaylar" role="tabpanel">
            <div class="table-responsive overflow-x-auto overflow-lg-hidden">
              <table class="table w-min-content w-100 align-middle gy-3 gx-4">
                <tbody>
                  <!--begin::Row-->
                  <tr>
                    <td><span class="form-label fs-base fw-bolder">Liste Adı</span></td>
                    <td>CCG Transfer DB Test</td>
                  </tr>
                  <!--end::Row-->

                  <!--begin::Row-->
                  <tr>
                    <td><span class="form-label fs-base fw-bolder">Bilgi Elektronik Posta</span></td>
                    <td>cgungor@paperwork.com.tr</td>
                  </tr>
                  <!--end::Row-->

                  <!--begin::Row-->
                  <tr>
                    <td><span class="form-label fs-base fw-bolder">Hata Elektronik Posta</span></td>
                    <td>cgungor@paperwork.com.tr</td>
                  </tr>
                  <!--end::Row-->

                  <!--begin::Row-->
                  <tr>
                    <td><span class="form-label fs-base fw-bolder">Dosya İşlemi</span></td>
                    <td>Yok</td>
                  </tr>
                  <!--end::Row-->

                  <!--begin::Row-->
                  <tr>
                    <td><span class="form-label fs-base fw-bolder">Sunucu</span></td>
                    <td>D CONSOLE CHECK NOT ACTIVE</td>
                  </tr>
                  <!--end::Row-->

                  <!--begin::Row-->
                  <tr>
                    <td><span class="form-label fs-base fw-bolder">Kullanıcı</span></td>
                    <td>argusdb</td>
                  </tr>
                  <!--end::Row-->

                  <!--begin::Row-->
                  <tr>
                    <td><span class="form-label fs-base fw-bolder">Veritabanı</span></td>
                    <td>sa</td>
                  </tr>
                  <!--end::Row-->

                  <!--begin::Row-->
                  <tr>
                    <td><span class="form-label fs-base fw-bolder">Tablo</span></td>
                    <td>Toyota</td>
                  </tr>
                  <!--end::Row-->

                  <!--begin::Row-->
                  <tr>
                    <td><span class="form-label fs-base fw-bolder">Hedef</span></td>
                    <td>PAPERWORK_ARGUSDEV45</td>
                  </tr>
                  <!--end::Row-->

                  <!--begin::Row-->
                  <tr>
                    <td><span class="form-label fs-base fw-bolder">Hedef Klasör</span></td>
                    <td>TR_CUSTOMER</td>
                  </tr>
                  <!--end::Row-->

                  <!--begin::Row-->
                  <tr>
                    <td><span class="form-label fs-base fw-bolder">Dosya Kartı Adı</span></td>
                    <td>Dosya Kartı</td>
                  </tr>
                  <!--end::Row-->

                  <!--begin::Row-->
                  <tr>
                    <td><span class="form-label fs-base fw-bolder">Dosya Kartı Klasör</span></td>
                    <td>D CONSOLE CHECK NOT ACTIVE</td>
                  </tr>
                  <!--end::Row-->

                  <!--begin::Row-->
                  <tr>
                    <td><span class="form-label fs-base fw-bolder">Belge Formu</span></td>
                    <td>-</td>
                  </tr>
                  <!--end::Row-->
                </tbody>
              </table>
            </div>
          </div>
          <div class="tab-pane fade" id="tarihce" role="tabpanel">
            <div class="d-flex flex-column gap-7 py-4 scroll h-300px">

              <!--begin::History content-->
              <div class="d-flex flex-column gap-6">
                <!--begin::History item-->
                <a href="/tanimlamalar/dokuman-yonetimi/belge-taslaklari/#belge-taslaklari" class="d-flex align-items-center gap-3">
                  <div class="d-inline-flex align-items-center justify-content-center w-40px h-40px pw-bg-primary-100 rounded-circle flex-shrink-0">
                    <i class="fa-solid fa-pen-to-square fs-5 pw-text-primary-500"></i>
                  </div>
                  <div class="d-flex flex-column gap-1">
                    <div class="fs-9 pw-text-neutral-800 fw-medium"><b>Ezgi Çelik</b> tarafından <b>Logo</b> isimli entegrasyon tanımı güncellenmiştir.</div>
                    <div class="d-flex align-items-center gap-1 fs-9 pw-text-neutral-500">
                      <span>27.02.203</span>
                      <span>|</span>
                      <span>11:39:32</span>
                    </div>
                  </div>
                </a>
                <!--end::History item-->
                
                <!--begin::History item-->
                <a href="/tanimlamalar/dokuman-yonetimi/belge-taslaklari/#belge-taslaklari" class="d-flex align-items-center gap-3">
                  <div class="d-inline-flex align-items-center justify-content-center w-40px h-40px pw-bg-primary-100 rounded-circle flex-shrink-0">
                    <i class="fa-solid fa-pen-to-square fs-5 pw-text-primary-500"></i>
                  </div>
                  <div class="d-flex flex-column gap-1">
                    <div class="fs-9 pw-text-neutral-800 fw-medium"><b>Ezgi Çelik</b> tarafından <b>Logo</b> isimli entegrasyon tanımı güncellenmiştir.</div>
                    <div class="d-flex align-items-center gap-1 fs-9 pw-text-neutral-500">
                      <span>27.02.203</span>
                      <span>|</span>
                      <span>11:39:32</span>
                    </div>
                  </div>
                </a>
                <!--end::History item-->

                <!--begin::History item-->
                <a href="/tanimlamalar/dokuman-yonetimi/belge-taslaklari/#belge-taslaklari" class="d-flex align-items-center gap-3">
                  <div class="d-inline-flex align-items-center justify-content-center w-40px h-40px pw-bg-primary-100 rounded-circle flex-shrink-0">
                    <i class="fa-solid fa-pen-to-square fs-5 pw-text-primary-500"></i>
                  </div>
                  <div class="d-flex flex-column gap-1">
                    <div class="fs-9 pw-text-neutral-800 fw-medium"><b>Ezgi Çelik</b> tarafından <b>Logo</b> isimli entegrasyon tanımı güncellenmiştir.</div>
                    <div class="d-flex align-items-center gap-1 fs-9 pw-text-neutral-500">
                      <span>27.02.203</span>
                      <span>|</span>
                      <span>11:39:32</span>
                    </div>
                  </div>
                </a>
                <!--end::History item-->

                <!--begin::History item-->
                <a href="/tanimlamalar/dokuman-yonetimi/belge-taslaklari/#belge-taslaklari" class="d-flex align-items-center gap-3">
                  <div class="d-inline-flex align-items-center justify-content-center w-40px h-40px pw-bg-primary-100 rounded-circle flex-shrink-0">
                    <i class="fa-solid fa-pen-to-square fs-5 pw-text-primary-500"></i>
                  </div>
                  <div class="d-flex flex-column gap-1">
                    <div class="fs-9 pw-text-neutral-800 fw-medium"><b>Ezgi Çelik</b> tarafından <b>Logo</b> isimli entegrasyon tanımı güncellenmiştir.</div>
                    <div class="d-flex align-items-center gap-1 fs-9 pw-text-neutral-500">
                      <span>27.02.203</span>
                      <span>|</span>
                      <span>11:39:32</span>
                    </div>
                  </div>
                </a>
                <!--end::History item-->
              </div>
              <!--end::History content-->
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
<!-- end::Modal -->

<!--begin::Drawers-->
<!--begin::History & Recent canvas trigger-->
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/history-drawer.php'; ?>
<!--end::History canvas-->
<!--end::Drawers-->


<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/foot.php'; ?>