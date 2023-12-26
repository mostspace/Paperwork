<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/header.php'; ?>

<!--begin::Wrapper-->
<div class="app-wrapper flex-column flex-row-fluid p-6" id="kt_app_wrapper">

  <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/sidebar.php'; ?>
  <!--begin::Main-->
  <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <!--begin::Content wrapper-->
    <div class="row">
      <div class="col">
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
                  <a href="/sistem-raporlari/" class="text-muted text-hover-primary">Sistem Raporları</a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                  <span class="text-muted">/</span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item active">Mobil Cihazlar</li>
                <!--end::Item-->
              </ul>
              <!--end::Breadcrumb-->
              <!--begin::Title-->
              <h1 class="page-heading d-flex text-dark fw-bold fs-4 flex-column justify-content-center my-0">
                Mobil Cihazlar
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
          <!--begin::Form wrapper-->
          <div class="col-12 col-lg-9">
            <!--begin::Form-->
            <form>
              <!--begin::Form table-->
              <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                <table class="table w-min-content w-100">
                  <tbody>
                    <!--begin::Row-->
                    <tr>
                      <td>
                        <label class="form-label fs-7 fw-bolder" for="pw_statu">Statü</label>
                      </td>
                      <td>
                        <select class="form-select form-select-solid fs-8 py-3 px-4" data-placeholder="Seçim Yapın" data-control="select2"  id="pw_statu" >
                          <option></option>
                        </select>
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Form actions row-->
                    <tr>
                      <td colspan="2" align="right">
                        <button type="clear" class="btn btn-active-light fs-8 py-3 px-6">
                          Vazgeç
                        </button>
                        <button type="submit" class="btn btn-primary fs-8 py-3 px-6">
                          Tamam
                        </button>
                      </td>
                    </tr>
                    <!--end::Form actions row-->
                  </tbody>
                </table>
              </div>
              <!--end::Form table-->
            </form>
            <!--end::Form-->
          </div>
          <!--end::Form wrapper-->


          <!--begin::Elektronik posta table-->
          <div class="table-responsive overflow-x-auto rounded">
            <!--begin::Table-->
            <table class="table table-row-bordered border pw-dark-bg-table pw-table-border-gray table-rounded align-middle w-max-content min-w-100">
              <!--begin::Table head-->
              <thead>
                <tr class="fw-semibold fs-8 pw-text-neutral-700 pw-bg-neutral-100">
                  <th class="py-3 px-9">
                    <!--begin::Checkbox-->
                    <div class="form-check d-flex align-items-center gap-2 mb-0">
                      <label for="pw_indeks_numarasi">Durum</label>
                    </div>
                    <!--end::Checkbox-->
                  </th>
                  <th class="py-3 px-9">Kullanıcı</th>
                  <th class="py-3 px-9">Cihaz Adı</th>
                  <th class="py-3 px-9">Kurum</th>
                  <th class="py-3 px-9">İşletim Sistemi</th>
                </tr>
              </thead>
              <!--end::Table head-->

              <!--begin::Table body-->
              <tbody>
                <!--begin::Row-->
                <tr class="fw-medium pw-text-neutral-700 fs-9">
                  <td class="py-6 px-9"></td>
                  <td class="py-6 px-9"></td>
                  <td class="py-6 px-9"></td>
                  <td class="py-6 px-9"></td>
                  <td class="py-6 px-9"></td>
                </tr>
                <!--end::Row-->

                <!--begin::Row-->
                <tr class="fw-medium pw-text-neutral-700 fs-9">
                  <td class="py-6 px-9"></td>
                  <td class="py-6 px-9"></td>
                  <td class="py-6 px-9"></td>
                  <td class="py-6 px-9"></td>
                  <td class="py-6 px-9"></td>
                </tr>
                <!--end::Row-->

                <!--begin::Row-->
                <tr class="fw-medium pw-text-neutral-700 fs-9">
                  <td class="py-6 px-9"></td>
                  <td class="py-6 px-9"></td>
                  <td class="py-6 px-9"></td>
                  <td class="py-6 px-9"></td>
                  <td class="py-6 px-9"></td>
                </tr>
                <!--end::Row-->

                <!--begin::Row-->
                <tr class="fw-medium pw-text-neutral-700 fs-9">
                  <td class="py-6 px-9"></td>
                  <td class="py-6 px-9"></td>
                  <td class="py-6 px-9"></td>
                  <td class="py-6 px-9"></td>
                  <td class="py-6 px-9"></td>
                </tr>
                <!--end::Row-->

                <!--begin::Row-->
                <tr class="fw-medium pw-text-neutral-700 fs-9">
                  <td class="py-6 px-9"></td>
                  <td class="py-6 px-9"></td>
                  <td class="py-6 px-9"></td>
                  <td class="py-6 px-9"></td>
                  <td class="py-6 px-9"></td>
                </tr>
                <!--end::Row-->

                <!--begin::Row-->
                <tr class="fw-medium pw-text-neutral-700 fs-9">
                  <td class="py-6 px-9"></td>
                  <td class="py-6 px-9"></td>
                  <td class="py-6 px-9"></td>
                  <td class="py-6 px-9"></td>
                  <td class="py-6 px-9"></td>
                </tr>
                <!--end::Row-->
              </tbody>
              <!--end::Table body-->
            </table>
            <!--end::Table-->
          </div>
          <!--end::Belge indeks table-->

          <!--begin::Table footer-->
          <div class="d-flex flex-column-reverse flex-sm-row align-items-center align-items-sm-end justify-content-center justify-content-sm-end gap-8 gap-sm-4 my-10">
            <!--begin::Pagination-->
            <ul class="pagination flex-nowrap flex-shrink-0">
              <!--begin::Pagination item previous-->
              <li class="page-item previous disabled"><a href="/sistem-raporlari/sistem/mobil-cihazlar/#" class="page-link pw-min-w-32px h-32px fs-8"><i class="previous"></i></a></li>
              <!--end::Pagination item previous-->

              <!--begin::Pagination-item-->
              <li class="page-item active">
                <a href="/sistem-raporlari/sistem/mobil-cihazlar/#" class="page-link pw-min-w-32px h-32px fs-8">1</a>
              </li>
              <!--end::Pagination item-->

              <!--begin::Pagination-item-->
              <li class="page-item active">
                <a href="/sistem-raporlari/sistem/mobil-cihazlar/#" class="page-link pw-min-w-32px h-32px fs-8">2</a>
              </li>
              <!--end::Pagination item-->

              <!--begin::Pagination-item-->
              <li class="page-item active">
                <a href="/sistem-raporlari/sistem/mobil-cihazlar/#" class="page-link pw-min-w-32px h-32px fs-8">3</a>
              </li>
              <!--end::Pagination item-->

              <!--begin::Pagination-item-->
              <li class="page-item active">
                <a href="/sistem-raporlari/sistem/mobil-cihazlar/#" class="page-link pw-min-w-32px h-32px fs-8">4</a>
              </li>
              <!--end::Pagination item-->

              <!--begin::Pagination-item-->
              <li class="page-item active">
                <a href="/sistem-raporlari/sistem/mobil-cihazlar/#" class="page-link pw-min-w-32px h-32px fs-8">5</a>
              </li>
              <!--end::Pagination item-->

              <!--begin::Pagination item-->
              <li class="page-item next">
                <a href="/sistem-raporlari/sistem/mobil-cihazlar/#" class="page-link pw-min-w-32px h-32px fs-8"><i class="next"></i></a>
              </li>
              <!--end::Pagination item-->
            </ul>
            <!--end::Pagination-->
          </div>
          <!--end::Table footer-->
        </div>
        <!--end::Content -->

      </div>
    </div>
    <!--end::Content wrapper-->
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/footer.php'; ?>
  </div>
  <!--end::Main-->

</div>
<!--end::Wrapper -->

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/foot.php'; ?>