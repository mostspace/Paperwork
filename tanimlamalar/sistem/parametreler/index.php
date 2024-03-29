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
            <li class="breadcrumb-item active">Parametreler</li>
            <!--end::Item-->
          </ul>
          <!--end::Breadcrumb-->
          <!--begin::Title-->
          <h1 class="page-heading d-flex text-dark fw-bold fs-4 flex-column justify-content-center my-0">
            Parametreler
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
      <div class="font-poppins fs-8 pw-text-neutral-900 fw-bold py-1 pe-5">
      60 Tanımlı Parametre
      </div>
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
              <th class="py-3">Parametre Adı</th>
              <th class="py-3"></th>
              <th class="py-3"></th>
              <th class="py-3">Değeri</th>
              <th class="py-3">Değiştiren</th>
              <th class="py-3">Değişim Tarihi</th>
            </tr>
          </thead>
          <tbody>
            <!--begin::Row-->
            <tr class="fw-medium pw-text-neutral-700 fs-8 pw-bg-neutral-200">
              <td>
                <div class="d-flex align-items-center flex-nowrap gap-2">
                  <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                    <i class="fa-solid fa-sitemap fs-7 pw-text-brand"></i>
                  </div>
                  <div>
                  Parametre-1<span  data-bs-toggle="tooltip" data-bs-placement="top" title="
This is the address of HTML forms build directory in IIS. For example; C \inetpub\wwwroot\Paperwork\Forms. If you are not sure, please DO NOT modify." data-bs-custom-class="tooltip-inverse"  >*</span>
                  </div>
                </div>
              </td>
              <td></td>
              <td>GENERAL</td>
              <td>
                <div class="d-flex align-items-center flex-nowrap gap-4">
                5.0.0.8455
                  <div class="w-20px h-20px d-inline-flex align-items-center justify-content-center rounded border pw-border-primary-300 p-4 flex-shrink-0 cursor-pointer ">
                    <i class="fa-solid fa-pen-to-square fs-7 pw-text-brand"></i>
                  </div>
                  <div>
              </td>
              <td><div class="d-flex gap-2 align-items-center"><div class="w-30px h-30px pw-bg-neutral-100 rounded-circle"></div><span>Installer</span></div></td>
              <td>28/02/2023  |   14:51</td>
            </tr>
            <!--end::Row-->
 <!--begin::Row-->
 <tr class="fw-medium pw-text-neutral-700 fs-8">
              <td>
                <div class="d-flex align-items-center flex-nowrap gap-2">
                  <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                    <i class="fa-solid fa-sitemap fs-7 pw-text-brand"></i>
                  </div>
                  <div>
                  Parametre-1
                  </div>
                </div>
              </td>
              <td></td>
              <td>GENERAL</td>
              <td>5.0.0.8455</td>
              <td><div class="d-flex gap-2 align-items-center"><div class="w-30px h-30px pw-bg-neutral-100 rounded-circle"></div><span>Installer</span></div></td>
              <td>28/02/2023  |   14:51</td>
            </tr>
            <!--end::Row-->
             <!--begin::Row-->
             <tr class="fw-medium pw-text-neutral-700 fs-8 pw-bg-neutral-200">
              <td>
                <div class="d-flex align-items-center flex-nowrap gap-2">
                  <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                    <i class="fa-solid fa-sitemap fs-7 pw-text-brand"></i>
                  </div>
                  <div>
                  Parametre-1
                  </div>
                </div>
              </td>
              <td></td>
              <td>GENERAL</td>
              <td>5.0.0.8455</td>
              <td><div class="d-flex gap-2 align-items-center"><div class="w-30px h-30px pw-bg-neutral-100 rounded-circle"></div><span>Installer</span></div></td>
              <td>28/02/2023  |   14:51</td>
            </tr>
            <!--end::Row-->
             <!--begin::Row-->
             <tr class="fw-medium pw-text-neutral-700 fs-8">
              <td>
                <div class="d-flex align-items-center flex-nowrap gap-2">
                  <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                    <i class="fa-solid fa-sitemap fs-7 pw-text-brand"></i>
                  </div>
                  <div>
                  Parametre-1
                  </div>
                </div>
              </td>
              <td></td>
              <td>GENERAL</td>
              <td>5.0.0.8455</td>
              <td><div class="d-flex gap-2 align-items-center"><div class="w-30px h-30px pw-bg-neutral-100 rounded-circle"></div><span>Installer</span></div></td>
              <td>28/02/2023  |   14:51</td>
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
        <h3 class="modal-title fs-5">Metod-1</h3>


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
              <table class="table w-min-content w-100 align-middle gy-5 gx-4">
                <tbody>
                  <!--begin::Row-->
                  <tr>
                    <td><span class="form-label fs-base fw-bolder">Adı</span></td>
                    <td>Metod-1</td>
                  </tr>
                  <!--end::Row-->

                  <!--begin::Row-->
                  <tr>
                    <td><span class="form-label fs-base fw-bolder">Kütüphane Adı</span></td>
                    <td>CustomPWMethods</td>
                  </tr>
                  <!--end::Row-->

                  <!--begin::Row-->
                  <tr>
                    <td><span class="form-label fs-base fw-bolder">Sınıf Adı</span></td>
                    <td>SyncADUsers</td>
                  </tr>
                  <!--end::Row-->

                  <!--begin::Row-->
                  <tr>
                    <td><span class="form-label fs-base fw-bolder">Kullanım Yeri</span></td>
                    <td>Tanımlı İş</td>
                  </tr>
                  <!--end::Row-->

                  <!--begin::Row-->
                  <tr>
                    <td><span class="form-label fs-base fw-bolder">Açıklama</span></td>
                    <td>-</td>
                  </tr>
                  <!--end::Row-->

                  <!--begin::Row-->
                  <tr>
                    <td><span class="form-label fs-base fw-bolder">Dış Kaynak Yolu</span></td>
                    <td>c:\Paperwork\Bin\Libs\System.DirectoryServices.AccountManagement.dll;</td>
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