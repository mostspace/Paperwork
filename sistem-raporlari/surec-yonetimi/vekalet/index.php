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
                  <a href="sistem-raporlari/" class="text-muted text-hover-primary">Sistem Raporları</a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                  <span class="text-muted">/</span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item active">Vekalet</li>
                <!--end::Item-->
              </ul>
              <!--end::Breadcrumb-->
              <!--begin::Title-->
              <h1 class="page-heading d-flex text-dark fw-bold fs-4 flex-column justify-content-center my-0">
                Vekalet
              </h1>
              <!--end::Title-->
            </div>
            <!--end::Page title-->

          </div>
          <!--end::Toolbar container-->
        </div>
        <!--end::Toolbar-->

        <!--begin::Content -->
        <div class="mb-15">
          <!--begin::Form-->
          <form>
            <!--begin::Table-->
            <div class="table-responsive overflow-x-auto overflow-lg-hidden">
              <table class="table w-min-content w-100 align-middle gy-5 gx-4">
                <tbody>
                  <tr>
                    <td>
                      <label class="form-label fs-base" for="statu">Statü</label>
                    </td>
                    <td>
                      <select name="statu" id="statu" class="form-select form-select-solid fs-8 py-3 px-4 mw-300px">
                        <option value="1">Aktif</option>
                        <option value="2">Pasif</option>
                        <option value="all" selected>Hepsi</option>
                      </select>
                    </td>
                  </tr>
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
        <!--begin::Vekalet tablosu-->
        <div class="table-responsive overflow-x-auto">
          <!--begin::Table-Light-->
            <table class="table table-row-bordered border pw-table-border-gray table-rounded w-max-content min-w-100">
              <thead>
                <tr class="fw-semibold fs-8 pw-text-neutral-700 pw-bg-neutral-100">
                  <th class="py-3 px-9">Statü</th>
                  <th class="py-3 px-9">Vekalet Tarihi</th>
                  <th class="py-3 px-9">Vakalet Kaydeden</th>
                  <th class="py-3 px-9">Vekalet Verilen</th>
                  <th class="py-3 px-9">Süreç Adı</th>
                  <th class="py-3 px-9">Açıklama</th>
                  <th class="py-3 px-9">Vekaleti Silen</th>
                </tr>
              </thead>
              <tbody>
                <tr class="fw-medium pw-text-neutral-700 fs-9">
                  <td class="py-6 px-9">Aktif</td>
                  <td class="py-6 px-9">07/02/2023 - 15:00</td>
                  <td class="py-6 px-9">Feyzi Öztürk</td>
                  <td class="py-6 px-9">Muhammet Bergin</td>
                  <td class="py-6 px-9">Aday Gönderme</td>
                  <td class="py-6 px-9">-</td>
                  <td class="py-6 px-9">-</td>
                </tr>
                <tr class="fw-medium pw-text-neutral-700 fs-9">
                  <td class="py-6 px-9">Aktif</td>
                  <td class="py-6 px-9">07/02/2023 - 15:00</td>
                  <td class="py-6 px-9">Feyzi Öztürk</td>
                  <td class="py-6 px-9">Muhammet Bergin</td>
                  <td class="py-6 px-9">Aday Gönderme</td>
                  <td class="py-6 px-9">-</td>
                  <td class="py-6 px-9">-</td>
                </tr>
              </tbody>
            </table>
            <!--end::Table-Light-->
            <!--begin::Table-Dark-->
            <table class="table table-row-bordered border pw-dark-bg-table table-rounded w-max-content min-w-100 theme-dark-show">
              <thead>
                <tr class="fw-semibold fs-8 pw-text-neutral-700 pw-dark-bg-tr">
                  <th class="py-3 px-9">Statü</th>
                  <th class="py-3 px-9">Vekalet Tarihi</th>
                  <th class="py-3 px-9">Vakalet Kaydeden</th>
                  <th class="py-3 px-9">Vekalet Verilen</th>
                  <th class="py-3 px-9">Süreç Adı</th>
                  <th class="py-3 px-9">Açıklama</th>
                  <th class="py-3 px-9">Vekaleti Silen</th>
                </tr>
              </thead>
              <tbody>
                <tr class="fw-medium pw-text-neutral-700 fs-9">
                  <td class="py-6 px-9">Aktif</td>
                  <td class="py-6 px-9">07/02/2023 - 15:00</td>
                  <td class="py-6 px-9">Feyzi Öztürk</td>
                  <td class="py-6 px-9">Muhammet Bergin</td>
                  <td class="py-6 px-9">Aday Gönderme</td>
                  <td class="py-6 px-9">-</td>
                  <td class="py-6 px-9">-</td>
                </tr>
                <tr class="fw-medium pw-text-neutral-700 fs-9">
                  <td class="py-6 px-9">Aktif</td>
                  <td class="py-6 px-9">07/02/2023 - 15:00</td>
                  <td class="py-6 px-9">Feyzi Öztürk</td>
                  <td class="py-6 px-9">Muhammet Bergin</td>
                  <td class="py-6 px-9">Aday Gönderme</td>
                  <td class="py-6 px-9">-</td>
                  <td class="py-6 px-9">-</td>
                </tr>
              </tbody>
            </table>
            <!--end::Table-Dark-->
          </div>
          <!--end::Vekalet tablosu-->
          <!--begin::Table footer-->
          <div class="d-flex flex-column-reverse flex-sm-row align-items-center align-items-sm-center justify-content-center justify-content-sm-end gap-8 gap-sm-4 my-10">
            <!--begin::Pagination-->
            <ul class="pagination flex-nowrap flex-shrink-0">
              <!--begin::Pagination item previous-->
              <li class="page-item previous disabled"><a href="#" class="page-link pw-min-w-32px h-32px fs-8"><i class="previous"></i></a></li>
              <!--end::Pagination item previous-->

              <!--begin::Pagination-item-->
              <li class="page-item active">
                <a href="/sistem-raporlari/vekalet/#" class="page-link pw-min-w-32px h-32px fs-8">1</a>
              </li>
              <!--end::Pagination item-->
              
              <!--begin::Pagination item-->
              <li class="page-item">
                <a href="/sistem-raporlari/vekalet/#" class="page-link pw-min-w-32px h-32px fs-8">2</a>
              </li>
              <!--end::Pagination item-->
              
              <!--begin::Pagination item-->
              <li class="page-item ">
                <a href="/sistem-raporlari/vekalet/#" class="page-link pw-min-w-32px h-32px fs-8">3</a>
              </li>
              <!--end::Pagination item-->
              
              <!--begin::Pagination item-->
              <li class="page-item ">
                <a href="/sistem-raporlari/vekalet/#" class="page-link pw-min-w-32px h-32px fs-8">4</a>
              </li>
              <!--end::Pagination item-->
              
              <!--begin::Pagination item-->
              <li class="page-item ">
                <a href="/sistem-raporlari/vekalet/#" class="page-link pw-min-w-32px h-32px fs-8">5</a>
              </li>
              <!--end::Pagination item-->
              
              <!--begin::Pagination item-->
              <li class="page-item ">
                <a href="/sistem-raporlari/vekalet/#" class="page-link pw-min-w-32px h-32px fs-8">6</a>
              </li>
              <!--end::Pagination item-->
              
              <!--begin::Pagination item-->
              <li class="page-item next">
                <a href="/sistem-raporlari/vekalet/#" class="page-link pw-min-w-32px h-32px fs-8"><i class="next"></i></a>
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