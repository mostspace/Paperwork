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
                <li class="breadcrumb-item active">Gelen E-Faturalar</li>
                <!--end::Item-->
              </ul>
              <!--end::Breadcrumb-->
              <!--begin::Title-->
              <h1 class="page-heading d-flex text-dark fw-bold fs-4 flex-column justify-content-center my-0">
                Gelen E-Faturalar
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
          <form>
            <!--begin::Table-->
            <div class="table-responsive overflow-x-auto overflow-lg-hidden">
              <table class="table w-min-content w-100">
                <tbody>
                  <tr>
                    <td>
                      <label class="form-label fs-base" for="pw_gelen_e_faturalar_aktivite_durumu">Aktivite Durumu</label>
                    </td>
                    <td>
                      <div class="row position-relative">
                        <div class="col-6">
                          <span class="position-absolute top-50 translate-middle-y fs-base ms-4">
                            <i class="fa-solid fa-calendar-days text-primary"></i>
                          </span>
                          <input class="form-control form-control-solid fs-8 py-3 ps-10 pe-4" value="12/01/2021" placeholder="Tarih seçiniz" id="pw_gelen_e_faturalar_aktivite_durumu" required="required" />
                        </div>
                        <div class="col-6">
                          <span class="position-absolute top-50 translate-middle-y fs-base ms-4">
                            <i class="fa-solid fa-calendar-days text-primary"></i>
                          </span>
                          <input class="form-control form-control-solid fs-8 py-3 ps-10 pe-4" value="15/12/2023" placeholder="Tarih seçiniz" id="pw_gelen_e_faturalar_aktivite_durumu" required="required" />
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label class="form-label fs-base" for="senaryo">Senaryo</label>
                    </td>
                    <td>
                      <select id="senaryo" class="form-select form-select-solid fs-8 py-3 px-4" name="senaryo" aria-label="Senaryo">
                        <option value="1">E-Arşiv Fatura</option>
                        <option value="2">Temel Fatura</option>
                        <option value="3">Ticari Fatura</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label class="form-label fs-base" for="fatura-tip-kodu">Fatura Tip Kodu</label>
                    </td>
                    <td>
                      <select id="fatura-tip-kodu" class="form-select form-select-solid fs-8 py-3 px-4" name="fatura-tip-kodu" aria-label="Fatura Tip Kodu">
                        <option value="1">Satış</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label class="form-label fs-base" for="akis-durumu">Akış Durumu</label>
                    </td>
                    <td>
                      <select id="akis-durumu" class="form-select form-select-solid fs-8 py-3 px-4" name="akis-durumu" aria-label="Akış Durumu">
                        <option value="all">Tümü</option>
                        <option value="1">Devam Eden</option>
                        <option value="2">Tamamlanan</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label class="form-label fs-base" for="ettn">ETTN</label>
                    </td>
                    <td>
                      <input id="ettn" type="text" class="form-control pw-input-stroke fs-8 py-3 px-4" name="ettn" />
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2">
                      <div class="d-flex align-items-center justify-content-end mt-4 gap-3">
                        <button type="reset" class="btn btn-active-light fs-8 py-3 px-6">
                          Vazgeç
                        </button>
                        <button type="submit" class="btn btn-primary fs-8 py-3 px-6">
                          Kaydet
                        </button>
                      </div>
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
        <!--begin::Gelen E-Faturalar tablosu-->
        <div class="table-responsive overflow-x-auto rounded">
          <!--begin::Table-Light-->
          <table class="table table-row-bordered border pw-table-border-gray table-rounded w-max-content min-w-100">
            <thead>
              <tr class="fw-semibold fs-8 pw-text-neutral-700 pw-bg-neutral-100">
                <th class="py-3 px-9">Yaratılış Tarihi</th>
                <th class="py-3 px-9">Fatura Numarası</th>
                <th class="py-3 px-9">Senaryo</th>
                <th class="py-3 px-9">Fatura Tarihi</th>
                <th class="py-3 px-9">Fatura Tipi Kodu</th>
                <th class="py-3 px-9">Akış Durumu</th>
                <th class="py-3 px-9">ETTN</th>
              </tr>
            </thead>
            <tbody>
              <tr class="fw-medium pw-text-neutral-700 fs-9">
                <td class="py-6 px-9">22.11.2022</td>
                <td class="py-6 px-9">234567000</td>
                <td class="py-6 px-9">Akış Durumu</td>
                <td class="py-6 px-9">21.11.2022</td>
                <td class="py-6 px-9">11111111111</td>
                <td class="py-6 px-9">Tümü</td>
                <td class="py-6 px-9">11111111111</td>
              </tr>
              <tr class="fw-medium pw-text-neutral-700 fs-9">
                <td class="py-6 px-9">22.11.2022</td>
                <td class="py-6 px-9">234567000</td>
                <td class="py-6 px-9">Akış Durumu</td>
                <td class="py-6 px-9">21.11.2022</td>
                <td class="py-6 px-9">11111111111</td>
                <td class="py-6 px-9">Tümü</td>
                <td class="py-6 px-9">11111111111</td>
              </tr>
              <tr class="fw-medium pw-text-neutral-700 fs-9">
                <td class="py-6 px-9">22.11.2022</td>
                <td class="py-6 px-9">234567000</td>
                <td class="py-6 px-9">Akış Durumu</td>
                <td class="py-6 px-9">21.11.2022</td>
                <td class="py-6 px-9">11111111111</td>
                <td class="py-6 px-9">Tümü</td>
                <td class="py-6 px-9">11111111111</td>
              </tr>
              <tr class="fw-medium pw-text-neutral-700 fs-9">
                <td class="py-6 px-9">22.11.2022</td>
                <td class="py-6 px-9">234567000</td>
                <td class="py-6 px-9">Akış Durumu</td>
                <td class="py-6 px-9">21.11.2022</td>
                <td class="py-6 px-9">11111111111</td>
                <td class="py-6 px-9">Tümü</td>
                <td class="py-6 px-9">11111111111</td>
              </tr>
            </tbody>
          </table>
          <!--end::Table-Light-->
          <!--begin::Table-Dark-->
          <table class="table table-row-bordered border pw-dark-bg-table pw-table-border-gray table-rounded w-max-content min-w-100 theme-dark-show">
            <thead>
              <tr class="fw-semibold fs-8 pw-text-neutral-700 pw-dark-bg-tr">
                <th class="py-3 px-9">Yaratılış Tarihi</th>
                <th class="py-3 px-9">Fatura Numarası</th>
                <th class="py-3 px-9">Senaryo</th>
                <th class="py-3 px-9">Fatura Tarihi</th>
                <th class="py-3 px-9">Fatura Tipi Kodu</th>
                <th class="py-3 px-9">Akış Durumu</th>
                <th class="py-3 px-9">ETTN</th>
              </tr>
            </thead>
            <tbody>
              <tr class="fw-medium pw-text-neutral-700 fs-9">
                <td class="py-6 px-9">22.11.2022</td>
                <td class="py-6 px-9">234567000</td>
                <td class="py-6 px-9">Akış Durumu</td>
                <td class="py-6 px-9">21.11.2022</td>
                <td class="py-6 px-9">11111111111</td>
                <td class="py-6 px-9">Tümü</td>
                <td class="py-6 px-9">11111111111</td>
              </tr>
              <tr class="fw-medium pw-text-neutral-700 fs-9">
                <td class="py-6 px-9">22.11.2022</td>
                <td class="py-6 px-9">234567000</td>
                <td class="py-6 px-9">Akış Durumu</td>
                <td class="py-6 px-9">21.11.2022</td>
                <td class="py-6 px-9">11111111111</td>
                <td class="py-6 px-9">Tümü</td>
                <td class="py-6 px-9">11111111111</td>
              </tr>
              <tr class="fw-medium pw-text-neutral-700 fs-9">
                <td class="py-6 px-9">22.11.2022</td>
                <td class="py-6 px-9">234567000</td>
                <td class="py-6 px-9">Akış Durumu</td>
                <td class="py-6 px-9">21.11.2022</td>
                <td class="py-6 px-9">11111111111</td>
                <td class="py-6 px-9">Tümü</td>
                <td class="py-6 px-9">11111111111</td>
              </tr>
              <tr class="fw-medium pw-text-neutral-700 fs-9">
                <td class="py-6 px-9">22.11.2022</td>
                <td class="py-6 px-9">234567000</td>
                <td class="py-6 px-9">Akış Durumu</td>
                <td class="py-6 px-9">21.11.2022</td>
                <td class="py-6 px-9">11111111111</td>
                <td class="py-6 px-9">Tümü</td>
                <td class="py-6 px-9">11111111111</td>
              </tr>
            </tbody>
          </table>
          <!--end::Table-Dark-->
        </div>
        <!--end::Gelen E-Faturalar tablosu-->
        <!--begin::Table footer-->
        <div class="d-flex flex-column-reverse flex-sm-row align-items-center align-items-sm-start justify-content-center justify-content-sm-end gap-8 gap-sm-4 my-10">
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