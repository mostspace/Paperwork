<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/header.php'; ?>

<!--begin::Wrapper-->
<div class="app-wrapper flex-column flex-row-fluid p-6" id="kt_app_wrapper">

  <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/sidebar.php'; ?>
  <!--begin::Main-->
  <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <!--begin::Content wrapper-->
    <div class="row">
      <div class="col col-md-8">
        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar mb-10">

          <!--begin::Toolbar container-->
          <div id="kt_app_toolbar_container" class="container-fluid d-flex flex-stack p-0">

            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
              <!--begin::Breadcrumb-->
              <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-9 mt-0 mb-3">
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">
                  <a href="sistem-raporlari/" class="text-muted text-hover-primary">Belgeler</a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                  <span class="text-muted">/</span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item active">Geri Dönüşüm</li>
                <!--end::Item-->
              </ul>
              <!--end::Breadcrumb-->
              <!--begin::Title-->
              <h1 class="page-heading d-flex text-dark fw-bold fs-4 flex-column justify-content-center my-0">
                Geri Dönüşüm
              </h1>
              <!--end::Title-->
            </div>
            <!--end::Page title-->

          </div>
          <!--end::Toolbar container-->
        </div>
        <!--end::Toolbar-->

        <!--begin::Content -->
        <div class="mb-20">
          <!--begin::Form-->
          <form class="col-12 col-md-8 col-lg-6">
            <!--begin::Table-->
            <div class="table-responsive overflow-x-auto overflow-lg-hidden">
              <table class="table w-min-content w-100">
                <tbody>
                  <!--begin::Row-->
                  <tr>
                    <td>
                      <select class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2" data-placeholder="Seçim Yapın">
                        <option></option>
                        <option value="1" selected>Hepsi</option>
                        <option value="2">Option 2</option>
                      </select>
                    </td>
                  </tr>
                  <!--end::Row-->
                </tbody>
              </table>
            </div>
            <!--end::Table-->
          </form>
          <!--end::Form-->
        </div>
        <!--end::Content -->

      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="table-responsive overflow-x-auto rounded">
          <!--begin::Table-->
          <table class="table table-row-bordered border pw-table-border-gray table-rounded w-max-content min-w-100">
            <thead>
              <tr class="fw-semibold fs-8 pw-text-neutral-700 pw-bg-neutral-100">
                <th class="py-3 px-9">Nesno No</th>
                <th class="py-3 px-9">Nesne Adı</th>
                <th class="py-3 px-9">Nesne Tipi</th>
                <th class="py-3 px-9">Sahibi</th>
                <th class="py-3 px-9">Yaratılış Tarihi</th>
                <th class="py-3 px-9">Silen Kullanıcı</th>
                <th class="py-3 px-9">Geri Dönüşüm Tipi</th>
                <th class="py-3 px-9">Silinme Tarihi</th>
                <th class="py-3 px-9">Silineceği Tarih</th>
              </tr>
            </thead>
            <tbody>
              <!--begin::Row-->
              <tr class="h-65px">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <!--end::Row-->

              <!--begin::Row-->
              <tr class="h-65px">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <!--end::Row-->

              <!--begin::Row-->
              <tr class="h-65px">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <!--end::Row-->

              <!--begin::Row-->
              <tr class="h-65px">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <!--end::Row-->

              <!--begin::Row-->
              <tr class="h-65px">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <!--end::Row-->

              <!--begin::Row-->
              <tr class="h-65px">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <!--end::Row-->
            </tbody>
          </table>
          <!--end::Table-->
        </div>

        <!--begin::Table footer-->
        <div class="d-flex flex-column-reverse flex-sm-row align-items-center align-items-sm-start justify-content-center justify-content-md-between gap-8 gap-sm-4 my-10">
          <!--begin:::Table info-->
          <div class="fs-8 fw-semibold pw-text-primary-500">
            Toplam: 0 Adet
          </div>
          <!--end:::Table info-->

          <!--begin::Pagination-->
          <ul class="pagination flex-nowrap flex-shrink-0">
            <!--begin::Pagination item previous-->
            <li class="page-item previous disabled"><a href="/belgeler/geri-donusum/#" class="page-link pw-min-w-32px h-32px fs-8"><i class="previous"></i></a></li>
            <!--end::Pagination item previous-->

            <!--begin::Pagination-item-->
            <li class="page-item active">
              <a href="/belgeler/geri-donusum/#" class="page-link pw-min-w-32px h-32px fs-8">0</a>
            </li>
            <!--end::Pagination item-->

            <!--begin::Pagination item-->
            <li class="page-item next">
              <a href="/belgeler/geri-donusum/#" class="page-link pw-min-w-32px h-32px fs-8"><i class="next"></i></a>
            </li>
            <!--end::Pagination item-->
          </ul>
          <!--end::Pagination-->
        </div>
        <!--end::Table footer-->
      </div>
    </div>
    <!--end::Content wrapper-->
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/footer.php'; ?>
  </div>
  <!--end::Main-->

</div>
<!--end::Wrapper -->

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/foot.php'; ?>