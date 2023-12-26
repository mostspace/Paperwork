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
              <a href="/islemler/" class="text-muted text-hover-primary">İşlemler</a>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item">
              <span class="text-muted">/</span>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item active"> Outlook Kullanıcıları</li>
            <!--end::Item-->
          </ul>
          <!--end::Breadcrumb-->
          <!--begin::Title-->
          <h1 class="page-heading d-flex text-dark fw-bolder fs-4 flex-column justify-content-center my-0">
            Outlook Kullanıcıları
          </h1>
          <!--end::Title-->
        </div>
        <!--end::Page title-->
      </div>
      <!--end::Toolbar container-->
    </div>
    <!--end::Toolbar-->

    <!--begin::Content -->
    <div class="col-12 col-md-11 my-12 px-6 pb-6">
      <!--begin::Rapor Tasarım tablosu-->
      <div class="table-responsive overflow-x-auto rounded">
        <!--begin::Table-Light-->
        <table class="table table-row-bordered border pw-dark-bg-table pw-table-border-gray pw-table-border-gray table-rounded align-middle w-max-content min-w-100 gy-2 gx-9 gs-9">
          <thead>
            <tr class="fw-semibold fs-8 pw-text-neutral-700 pw-bg-neutral-100">
              <th class="py-3">Kullanıcı Adı</th>
              <th class="py-3"><i class="fa-solid fa-filter pw-text-primary-300 pe-2"></i>Son Kullanım Tarihi</th>
              <th class="py-3 text-end"><i class="fa-solid fa-filter pw-text-primary-300 pe-2"></i></th>
            </tr>
          </thead>
          <tbody>
            <!--begin::Row-->
            <tr class="fw-medium pw-text-neutral-700 fs-8 cursor-pointer hover-pw-bg-primary-300" data-bs-toggle="modal" data-bs-target="#avas-talep-dokuman">
              <td>
                <div class="d-flex align-items-center flex-nowrap gap-2">
                  <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center flex-shrink-0">
                    <i class="fa-solid fa-user pw-text-primary-500"></i>
                  </div>
                  <div>
                    Ezgi Çelik
                  </div>
                </div>
              </td>
              <td>24.02.2023 08:57</td>
              <td align="right">
                <a href="tanimlamalar/is-zekasi/rapor-tasarim/#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-trash fs-7 text-primary"></i>
                </a>
              </td>
            </tr>
            <!--end::Row-->
          </tbody>
        </table>
        <!--end::Table-Light-->
      </div>
      <!--end::Rapor Tasarım tablosu-->

      <!--begin::Table footer-->
      <div class="d-flex flex-column-reverse flex-sm-row align-items-center align-items-sm-end justify-content-center justify-content-sm-between gap-8 gap-sm-4 my-5">
        <!--begin::Information-->
        <div class="d-flex flex-column flex-sm-row flex-wrap align-items-center gap-2 gap-sm-6 gap-md-9 fw-medium text-primary fs-8 justify-content-center justify-content-sm-start w-100">
          <span>Toplam: 1 Adet</span>
        </div>
        <!--end::Information-->
        <!--begin::Pagination-->
        <ul class="pagination flex-nowrap flex-shrink-0">
          <!--begin::Pagination item previous-->
          <li class="page-item previous disabled"><a href="#" class="page-link pw-min-w-32px h-32px fs-8"><i class="previous"></i></a></li>
          <!--end::Pagination item previous-->

          <!--begin::Pagination-item-->
          <li class="page-item active">
            <a href="/sistem-raporlari/akis-istatistikleri/#" class="page-link pw-min-w-32px h-32px fs-8">1</a>
          </li>
          <!--end::Pagination item-->

          <!--begin::Pagination item-->
          <li class="page-item">
            <a href="/sistem-raporlari/akis-istatistikleri/#" class="page-link pw-min-w-32px h-32px fs-8">2</a>
          </li>
          <!--end::Pagination item-->

          <!--begin::Pagination item-->
          <li class="page-item ">
            <a href="/sistem-raporlari/akis-istatistikleri/#" class="page-link pw-min-w-32px h-32px fs-8">3</a>
          </li>
          <!--end::Pagination item-->

          <!--begin::Pagination item-->
          <li class="page-item ">
            <a href="/sistem-raporlari/akis-istatistikleri/#" class="page-link pw-min-w-32px h-32px fs-8">4</a>
          </li>
          <!--end::Pagination item-->

          <!--begin::Pagination item-->
          <li class="page-item ">
            <a href="/sistem-raporlari/akis-istatistikleri/#" class="page-link pw-min-w-32px h-32px fs-8">5</a>
          </li>
          <!--end::Pagination item-->

          <!--begin::Pagination item-->
          <li class="page-item next">
            <a href="/sistem-raporlari/akis-istatistikleri/#" class="page-link pw-min-w-32px h-32px fs-8"><i class="next"></i></a>
          </li>
          <!--end::Pagination item-->
        </ul>
        <!--end::Pagination-->
      </div>
      <!--end::Table footer-->
    </div>
    <!--end::Content -->
    <!--end::Content wrapper-->
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/footer.php'; ?>
  </div>
  <!--end::Main-->

</div>
<!--end::Wrapper -->

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/foot.php'; ?>