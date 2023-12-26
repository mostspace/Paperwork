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
                <li class="breadcrumb-item active">Akış İstatistikleri</li>
                <!--end::Item-->
              </ul>
              <!--end::Breadcrumb-->
              <!--begin::Title-->
              <h1 class="page-heading d-flex text-dark fw-bold fs-4 flex-column justify-content-center my-0">
                Akış İstatistikleri
              </h1>
              <!--end::Title-->
            </div>
            <!--end::Page title-->

          </div>
          <!--end::Toolbar container-->
        </div>
        <!--end::Toolbar-->

        <!--begin::Content -->
        <div>
          <!--begin::Form-->
          <form>
            <!--begin::Table-->
            <div class="table-responsive overflow-x-auto overflow-lg-hidden">
              <table class="table w-min-content w-100 align-middle gy-5 gx-4">
                <tbody>
                  <tr>
                    <td><label class="form-label fs-base" for="akis-no">Akış No</label></td>
                    <td>
                      <input type="text" id="akis-no" class="form-control form-control-solid fs-8 py-3 px-4" name="akisNo" required="required">
                    </td>
                  </tr>
                  <tr>
                    <td><label class="form-label fs-base" for="akis-no">Akış Adı</label></td>
                    <td>
                      <input type="text" id="akis-adi" class="form-control form-control-solid fs-8 py-3 px-4" name="akisAdi" required="required">
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label class="form-label fs-base" for="is-akisi">İş Akışı</label>
                    </td>
                    <td>
                      <select id="is-akisi" class="form-select form-select-solid fs-8 py-3 px-4" name="isAkisi" aria-label="İş Akışı">
                        <option>Çalışan Oryantasyon Sayısı (12)</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label class="form-label fs-base" for="durum">Durum</label>
                    </td>
                    <td>
                      <select name="durum" id="durum" class="form-select form-select-solid fs-8 py-3 px-4">
                        <option value="all">Hepsi</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label class="form-label fs-base" for="pw_akis_istatistikleri_datepicker">Tarih</label>
                    </td>
                    <td>
                      <div class="row position-relative">
                        <div class="col-6">
                          <span class="position-absolute top-50 translate-middle-y fs-base ms-4">
                            <i class="fa-solid fa-calendar-days text-primary"></i>
                          </span>
                          <input class="form-control form-control-solid fs-8 py-3 ps-10 pe-4" value="12/01/2021" placeholder="Tarih seçiniz" id="pw_akis_istatistikleri_datepicker" required="required" />
                        </div>
                        <div class="col-6">
                          <span class="position-absolute top-50 translate-middle-y fs-base ms-4">
                            <i class="fa-solid fa-calendar-days text-primary"></i>
                          </span>
                          <input class="form-control form-control-solid fs-8 py-3 ps-10 pe-4" value="15/12/2023" placeholder="Tarih seçiniz" id="pw_akis_istatistikleri_datepicker" required="required" />
                        </div> 
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2" align="right">
                      <button type="submit" class="btn btn-primary fs-8 py-3 px-6 mt-4">
                        Tamam
                      </button>
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
        <!--begin::Akış istatistikleri tablosu-->
        <div class="table-responsive overflow-x-auto">
          <!--begin::Table-Light-->
          <table class="table table-row-bordered border pw-table-border-gray table-rounded w-max-content min-w-100 theme-light-show">
            <thead>
              <tr class="fw-semibold fs-8 pw-text-neutral-700 pw-bg-neutral-100">
                <th class="py-3 px-9">Akış No</th>
                <th class="py-3 px-9">Akış Adı</th>
                <th class="py-3 px-9">Sahibi</th>
                <th class="py-3 px-9">Başlangıç Tarihi</th>
                <th class="py-3 px-9">Bitiş Tarihi</th>
                <th class="py-3 px-9">Durum</th>
              </tr>
            </thead>
            <tbody>
              <tr class="fw-medium pw-text-neutral-700 fs-9">
                <td class="py-6 px-9">AB0232480123</td>
                <td class="py-6 px-9">Çalışan Oryantasyon Süreci - 2023/02/07</td>
                <td class="py-6 px-9">Ezgi Çelik</td>
                <td class="py-6 px-9">07/02/2023 - 15:00</td>
                <td class="py-6 px-9">08/02/2023 - 17:00</td>
                <td class="py-6 px-9">Bitirildi</td>
              </tr>
              <tr class="fw-medium pw-text-neutral-700 fs-9">
                <td class="py-6 px-9">AB0232480123</td>
                <td class="py-6 px-9">Çalışan Oryantasyon Süreci - 2023/02/07</td>
                <td class="py-6 px-9">Ezgi Çelik</td>
                <td class="py-6 px-9">07/02/2023 - 15:00</td>
                <td class="py-6 px-9">08/02/2023 - 17:00</td>
                <td class="py-6 px-9">Bitirildi</td>
              </tr>
              <tr class="fw-medium pw-text-neutral-700 fs-9">
                <td class="py-6 px-9">AB0232480123</td>
                <td class="py-6 px-9">Çalışan Oryantasyon Süreci - 2023/02/07</td>
                <td class="py-6 px-9">Ezgi Çelik</td>
                <td class="py-6 px-9">07/02/2023 - 15:00</td>
                <td class="py-6 px-9">08/02/2023 - 17:00</td>
                <td class="py-6 px-9">Bitirildi</td>
              </tr>
              <tr class="fw-medium pw-text-neutral-700 fs-9">
                <td class="py-6 px-9">AB0232480123</td>
                <td class="py-6 px-9">Çalışan Oryantasyon Süreci - 2023/02/07</td>
                <td class="py-6 px-9">Ezgi Çelik</td>
                <td class="py-6 px-9">07/02/2023 - 15:00</td>
                <td class="py-6 px-9">08/02/2023 - 17:00</td>
                <td class="py-6 px-9">Bitirildi</td>
              </tr>
              <tr class="fw-medium pw-text-neutral-700 fs-9">
                <td class="py-6 px-9">AB0232480123</td>
                <td class="py-6 px-9">Çalışan Oryantasyon Süreci - 2023/02/07</td>
                <td class="py-6 px-9">Ezgi Çelik</td>
                <td class="py-6 px-9">07/02/2023 - 15:00</td>
                <td class="py-6 px-9">08/02/2023 - 17:00</td>
                <td class="py-6 px-9">Bitirildi</td>
              </tr>
              <tr class="fw-medium pw-text-neutral-700 fs-9">
                <td class="py-6 px-9">AB0232480123</td>
                <td class="py-6 px-9">Çalışan Oryantasyon Süreci - 2023/02/07</td>
                <td class="py-6 px-9">Ezgi Çelik</td>
                <td class="py-6 px-9">07/02/2023 - 15:00</td>
                <td class="py-6 px-9">08/02/2023 - 17:00</td>
                <td class="py-6 px-9">Bitirildi</td>
              </tr>
              <tr class="fw-medium pw-text-neutral-700 fs-9">
                <td class="py-6 px-9">AB0232480123</td>
                <td class="py-6 px-9">Çalışan Oryantasyon Süreci - 2023/02/07</td>
                <td class="py-6 px-9">Ezgi Çelik</td>
                <td class="py-6 px-9">07/02/2023 - 15:00</td>
                <td class="py-6 px-9">08/02/2023 - 17:00</td>
                <td class="py-6 px-9">Bitirildi</td>
              </tr>
              <tr class="fw-medium pw-text-neutral-700 fs-9">
                <td class="py-6 px-9">AB0232480123</td>
                <td class="py-6 px-9">Çalışan Oryantasyon Süreci - 2023/02/07</td>
                <td class="py-6 px-9">Ezgi Çelik</td>
                <td class="py-6 px-9">07/02/2023 - 15:00</td>
                <td class="py-6 px-9">08/02/2023 - 17:00</td>
                <td class="py-6 px-9">Bitirildi</td>
              </tr>
              <tr class="fw-medium pw-text-neutral-700 fs-9">
                <td class="py-6 px-9">AB0232480123</td>
                <td class="py-6 px-9">Çalışan Oryantasyon Süreci - 2023/02/07</td>
                <td class="py-6 px-9">Ezgi Çelik</td>
                <td class="py-6 px-9">07/02/2023 - 15:00</td>
                <td class="py-6 px-9">08/02/2023 - 17:00</td>
                <td class="py-6 px-9">Bitirildi</td>
              </tr>
              <tr class="fw-medium pw-text-neutral-700 fs-9">
                <td class="py-6 px-9">AB0232480123</td>
                <td class="py-6 px-9">Çalışan Oryantasyon Süreci - 2023/02/07</td>
                <td class="py-6 px-9">Ezgi Çelik</td>
                <td class="py-6 px-9">07/02/2023 - 15:00</td>
                <td class="py-6 px-9">08/02/2023 - 17:00</td>
                <td class="py-6 px-9">Bitirildi</td>
              </tr>
            </tbody>
          </table>
          <!--end::Table-Light-->
          <!--begin::Table-Dark-->
          <table class="table table-row-bordered border pw-dark-bg-table table-rounded w-max-content min-w-100 theme-dark-show">
            <thead>
              <tr class="fw-semibold fs-8 pw-text-neutral-700 pw-dark-bg-tr">
                <th class="py-3 px-9">Akış No</th>
                <th class="py-3 px-9">Akış Adı</th>
                <th class="py-3 px-9">Sahibi</th>
                <th class="py-3 px-9">Başlangıç Tarihi</th>
                <th class="py-3 px-9">Bitiş Tarihi</th>
                <th class="py-3 px-9">Durum</th>
              </tr>
            </thead>
            <tbody>
              <tr class="fw-medium pw-text-neutral-700 fs-9">
                <td class="py-6 px-9">AB0232480123</td>
                <td class="py-6 px-9">Çalışan Oryantasyon Süreci - 2023/02/07</td>
                <td class="py-6 px-9">Ezgi Çelik</td>
                <td class="py-6 px-9">07/02/2023 - 15:00</td>
                <td class="py-6 px-9">08/02/2023 - 17:00</td>
                <td class="py-6 px-9">Bitirildi</td>
              </tr>
              <tr class="fw-medium pw-text-neutral-700 fs-9">
                <td class="py-6 px-9">AB0232480123</td>
                <td class="py-6 px-9">Çalışan Oryantasyon Süreci - 2023/02/07</td>
                <td class="py-6 px-9">Ezgi Çelik</td>
                <td class="py-6 px-9">07/02/2023 - 15:00</td>
                <td class="py-6 px-9">08/02/2023 - 17:00</td>
                <td class="py-6 px-9">Bitirildi</td>
              </tr>
              <tr class="fw-medium pw-text-neutral-700 fs-9">
                <td class="py-6 px-9">AB0232480123</td>
                <td class="py-6 px-9">Çalışan Oryantasyon Süreci - 2023/02/07</td>
                <td class="py-6 px-9">Ezgi Çelik</td>
                <td class="py-6 px-9">07/02/2023 - 15:00</td>
                <td class="py-6 px-9">08/02/2023 - 17:00</td>
                <td class="py-6 px-9">Bitirildi</td>
              </tr>
              <tr class="fw-medium pw-text-neutral-700 fs-9">
                <td class="py-6 px-9">AB0232480123</td>
                <td class="py-6 px-9">Çalışan Oryantasyon Süreci - 2023/02/07</td>
                <td class="py-6 px-9">Ezgi Çelik</td>
                <td class="py-6 px-9">07/02/2023 - 15:00</td>
                <td class="py-6 px-9">08/02/2023 - 17:00</td>
                <td class="py-6 px-9">Bitirildi</td>
              </tr>
              <tr class="fw-medium pw-text-neutral-700 fs-9">
                <td class="py-6 px-9">AB0232480123</td>
                <td class="py-6 px-9">Çalışan Oryantasyon Süreci - 2023/02/07</td>
                <td class="py-6 px-9">Ezgi Çelik</td>
                <td class="py-6 px-9">07/02/2023 - 15:00</td>
                <td class="py-6 px-9">08/02/2023 - 17:00</td>
                <td class="py-6 px-9">Bitirildi</td>
              </tr>
              <tr class="fw-medium pw-text-neutral-700 fs-9">
                <td class="py-6 px-9">AB0232480123</td>
                <td class="py-6 px-9">Çalışan Oryantasyon Süreci - 2023/02/07</td>
                <td class="py-6 px-9">Ezgi Çelik</td>
                <td class="py-6 px-9">07/02/2023 - 15:00</td>
                <td class="py-6 px-9">08/02/2023 - 17:00</td>
                <td class="py-6 px-9">Bitirildi</td>
              </tr>
              <tr class="fw-medium pw-text-neutral-700 fs-9">
                <td class="py-6 px-9">AB0232480123</td>
                <td class="py-6 px-9">Çalışan Oryantasyon Süreci - 2023/02/07</td>
                <td class="py-6 px-9">Ezgi Çelik</td>
                <td class="py-6 px-9">07/02/2023 - 15:00</td>
                <td class="py-6 px-9">08/02/2023 - 17:00</td>
                <td class="py-6 px-9">Bitirildi</td>
              </tr>
              <tr class="fw-medium pw-text-neutral-700 fs-9">
                <td class="py-6 px-9">AB0232480123</td>
                <td class="py-6 px-9">Çalışan Oryantasyon Süreci - 2023/02/07</td>
                <td class="py-6 px-9">Ezgi Çelik</td>
                <td class="py-6 px-9">07/02/2023 - 15:00</td>
                <td class="py-6 px-9">08/02/2023 - 17:00</td>
                <td class="py-6 px-9">Bitirildi</td>
              </tr>
              <tr class="fw-medium pw-text-neutral-700 fs-9">
                <td class="py-6 px-9">AB0232480123</td>
                <td class="py-6 px-9">Çalışan Oryantasyon Süreci - 2023/02/07</td>
                <td class="py-6 px-9">Ezgi Çelik</td>
                <td class="py-6 px-9">07/02/2023 - 15:00</td>
                <td class="py-6 px-9">08/02/2023 - 17:00</td>
                <td class="py-6 px-9">Bitirildi</td>
              </tr>
              <tr class="fw-medium pw-text-neutral-700 fs-9">
                <td class="py-6 px-9">AB0232480123</td>
                <td class="py-6 px-9">Çalışan Oryantasyon Süreci - 2023/02/07</td>
                <td class="py-6 px-9">Ezgi Çelik</td>
                <td class="py-6 px-9">07/02/2023 - 15:00</td>
                <td class="py-6 px-9">08/02/2023 - 17:00</td>
                <td class="py-6 px-9">Bitirildi</td>
              </tr>
            </tbody>
          </table>
          <!--end::Table-Dark-->
        </div>
        <!--end::Akış istatistikleri tablosu-->
        <!--begin::Table footer-->
        <div class="d-flex flex-column-reverse flex-sm-row align-items-center align-items-sm-end justify-content-center justify-content-sm-between gap-8 gap-sm-4 my-10">
          <!--begin::Information-->
          <div class="d-flex flex-column flex-sm-row flex-wrap align-items-center gap-2 gap-sm-6 gap-md-9 fw-medium text-primary fs-8 justify-content-center justify-content-sm-start w-100">
            <span>Tamamlananlar: 12</span>
            <span>Devam Edenler: 0</span>
            <span>İptal Edilenler: 0</span>
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
            <li class="page-item ">
              <a href="/sistem-raporlari/akis-istatistikleri/#" class="page-link pw-min-w-32px h-32px fs-8">6</a>
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
    </div>

    <!--begin::Empty table-->
    <div class="table-responsive overflow-x-auto pb-8">
      <table class="table table-row-bordered border align-middle pw-table-border-gray pw-dark-bg-table table-rounded w-max-content min-w-100 theme-light-show h-300px">
        <thead>
          <tr class="fw-semibold fs-8 pw-text-neutral-700 pw-bg-neutral-100">
            <th class="py-3 px-9">Akış No</th>
            <th class="py-3 px-9">Akış Adı</th>
            <th class="py-3 px-9">Sahibi</th>
            <th class="py-3 px-9">Başlangıç Tarihi</th>
            <th class="py-3 px-9">Bitiş Tarihi</th>
            <th class="py-3 px-9">Durum</th>
          </tr>
        </thead>
        <tbody>
          <tr class="fw-medium pw-text-neutral-700 fs-9">
            <td class="py-6 px-9 text-center" colspan="6">Sonuç Yok</td>
          </tr>
        </tbody>
      </table>
    </div>
    <!--end::Empty table-->
    <!--end::Content wrapper-->
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/footer.php'; ?>
  </div>
  <!--end::Main-->

</div>
<!--end::Wrapper -->

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/foot.php'; ?>