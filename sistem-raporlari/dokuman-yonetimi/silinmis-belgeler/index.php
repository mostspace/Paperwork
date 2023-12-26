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
                <li class="breadcrumb-item active">Silinmiş Belgeler</li>
                <!--end::Item-->
              </ul>
              <!--end::Breadcrumb-->
              <!--begin::Title-->
              <h1 class="page-heading d-flex text-dark fw-bold fs-4 flex-column justify-content-center my-0">
                Silinmiş Belgeler
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
                        <label class="form-label fs-base" for="pw_tarih">Tarih</label>
                      </td>
                      <td>
                        <div class="row position-relative">
                          <div class="col-6">
                            <span class="position-absolute top-50 translate-middle-y fs-base ms-4">
                              <i class="fa-solid fa-calendar-days text-primary"></i>
                            </span>
                            <input class="form-control form-control-solid fs-8 py-3 ps-10 pe-4" value="12/01/2021" placeholder="Tarih seçiniz" id="pw_tarih" required="required">
                          </div>
                          <div class="col-6">
                            <span class="position-absolute top-50 translate-middle-y fs-base ms-4">
                              <i class="fa-solid fa-calendar-days text-primary"></i>
                            </span>
                            <input class="form-control form-control-solid fs-8 py-3 ps-10 pe-4" value="15/12/2023" placeholder="Tarih seçiniz" id="pw_tarih" required="required">
                          </div>
                        </div>
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td>
                        <label class="form-label fs-7 fw-bolder" for="pw_tipi">Tipi</label>
                      </td>
                      <td>
                        <select class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2" data-placeholder="Seçim Yapın" id="pw_tipi" name="pw_kullanici_adi">
                          <option></option>
                          <option value="1">Option 1</option>
                          <option value="2">Option 2</option>
                        </select>
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td>
                        <label class="form-label fs-7 fw-bolder" for="pw_depolama_adi">Depolama Adı</label>
                      </td>
                      <td>
                        <select class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2" data-placeholder="Seçim Yapın" id="pw_depolama_adi" name="pw_kullanici_adi">
                          <option></option>
                          <option value="1">Option 1</option>
                          <option value="2">Option 2</option>
                        </select>
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td>
                        <label class="form-label fs-7 fw-bolder" for="pw_belge_tipi">Belge Tipi</label>
                      </td>
                      <td>
                        <select class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2" data-placeholder="Seçim Yapın" id="pw_belge_tipi" name="pw_belge_tipi">
                          <option></option>
                          <option value="1">Option 1</option>
                          <option value="2">Option 2</option>
                        </select>
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td>
                        <label class="form-label fs-7 fw-bolder" for="pw_dosya_formati">Dosya Formatı</label>
                      </td>
                      <td>
                        <select class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2" data-placeholder="Seçim Yapın" id="pw_dosya_formati" name="pw_dosya_formati">
                          <option></option>
                          <option value="1">Option 1</option>
                          <option value="2">Option 2</option>
                        </select>
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Form actions row-->
                    <tr>
                      <td colspan="2" align="right">
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

          <!--begin::Table tabs wrapper-->
          <div class="table-reponsive overflow-x-auto mt-4">
            <!--begin::Table tabs-->
            <div class="nav nav-tabs nav-line-tabs fs-6" role="tablist">
              <!--begin::Tab item-->
              <li class="nav-item" role="presentation">
                <a class="nav-link mx-0 py-3 px-10 fs-base rounded-0 fw-medium active" data-bs-toggle="tab" href="#pw_tab_pane_veri" aria-selected="true" role="tab">Veri</a>
              </li>
              <!--end::Tab item-->

              <!--begin::Tab item-->
              <li class="nav-item" role="presentation">
                <a class="nav-link py-3 px-10 mx-0 fs-base fw-medium rounded-0 pw-text-neutral-500" data-bs-toggle="tab" href="#pw_tab_pane_grafik" aria-selected="false" role="tab" tabindex="-1">Grafik</a>
              </li>
              <!--end::Tab item-->
            </div>
            <!--end::Table tabs-->
          </div>
          <!--end::Table tabs wrapper-->

          <!--begin::Table tab contents-->
          <div class="tab-content pw-dashboard-tab-content mt-6" id="tableTabContents">
            <!--begin::Veri content-->
            <div class="tab-pane fade active show" id="pw_tab_pane_veri" role="tabpanel">
              <!--begin::Veri table-->
              <div class="table-responsive overflow-x-auto rounded">
                <!--begin::Table-->
                <table class="table table-row-bordered border pw-dark-bg-table pw-table-border-gray table-rounded w-max-content min-w-100">
                  <!--begin::Table head-->
                  <thead>
                    <tr class="fw-semibold fs-8 pw-text-neutral-700 pw-bg-neutral-100">
                      <th class="py-3 px-9">Tarih</th>
                      <th class="py-3 px-9">Kullanıcı Adı</th>
                      <th class="py-3 px-9">Belge Adı</th>
                      <th class="py-3 px-9">Depolama</th>
                      <th class="py-3 px-9">Belge Tipi</th>
                      <th class="py-3 px-9">Dosya Formatı</th>
                    </tr>
                  </thead>
                  <!--end::Table head-->

                  <!--begin::Table body-->
                  <tbody>
                    <!--begin::Row-->
                    <tr class="fw-medium pw-text-neutral-700 fs-9">
                      <td class="py-6 px-9">07/02/2023 - 15:00</td>
                      <td class="py-6 px-9">Turgut İnanbak</td>
                      <td class="py-6 px-9">Image</td>
                      <td class="py-6 px-9">FileStore01</td>
                      <td class="py-6 px-9">Sistem</td>
                      <td class="py-6 px-9">JPG</td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr class="fw-medium pw-text-neutral-700 fs-9">
                      <td class="py-6 px-9">07/02/2023 - 15:00</td>
                      <td class="py-6 px-9">Cemil Cihan Güngör</td>
                      <td class="py-6 px-9">Format_tablo_02</td>
                      <td class="py-6 px-9">FileStore01</td>
                      <td class="py-6 px-9">KT Form Wizard</td>
                      <td class="py-6 px-9">PNG</td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr class="fw-medium pw-text-neutral-700 fs-9">
                      <td class="py-6 px-9">07/02/2023 - 15:00</td>
                      <td class="py-6 px-9">Cemil Cihan Güngör</td>
                      <td class="py-6 px-9">CCG</td>
                      <td class="py-6 px-9">FileStore01</td>
                      <td class="py-6 px-9">KT Form Wizard</td>
                      <td class="py-6 px-9">PNG</td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr class="fw-medium pw-text-neutral-700 fs-9">
                      <td class="py-6 px-9">07/02/2023 - 15:00</td>
                      <td class="py-6 px-9">Cemil Cihan Güngör</td>
                      <td class="py-6 px-9">Copy of OverMultiPage1</td>
                      <td class="py-6 px-9">FileStore01</td>
                      <td class="py-6 px-9">KT Form Wizard</td>
                      <td class="py-6 px-9">TIF</td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr class="fw-medium pw-text-neutral-700 fs-9">
                      <td class="py-6 px-9">07/02/2023 - 15:00</td>
                      <td class="py-6 px-9">Cemil Cihan Güngör</td>
                      <td class="py-6 px-9">Copy of OverMultiPage1</td>
                      <td class="py-6 px-9">FileStore01</td>
                      <td class="py-6 px-9">KT Form Wizard</td>
                      <td class="py-6 px-9">TIF</td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr class="fw-medium pw-text-neutral-700 fs-9">
                      <td class="py-6 px-9">07/02/2023 - 15:00</td>
                      <td class="py-6 px-9">Cemil Cihan Güngör</td>
                      <td class="py-6 px-9">Copy of OverMultiPage1</td>
                      <td class="py-6 px-9">FileStore01</td>
                      <td class="py-6 px-9">KT Form Wizard</td>
                      <td class="py-6 px-9">TIF</td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr class="fw-medium pw-text-neutral-700 fs-9">
                      <td class="py-6 px-9">07/02/2023 - 15:00</td>
                      <td class="py-6 px-9">Cemil Cihan Güngör</td>
                      <td class="py-6 px-9">Çalışmış İşler</td>
                      <td class="py-6 px-9">FileStore01</td>
                      <td class="py-6 px-9">KT Form Wizard</td>
                      <td class="py-6 px-9">XLSX</td>
                    </tr>
                    <!--end::Row-->
                    
                    <!--begin::Row-->
                    <tr class="fw-medium pw-text-neutral-700 fs-9">
                      <td class="py-6 px-9">07/02/2023 - 15:00</td>
                      <td class="py-6 px-9">Cemil Cihan Güngör</td>
                      <td class="py-6 px-9">Test</td>
                      <td class="py-6 px-9">FileStore01</td>
                      <td class="py-6 px-9">KT Form Wizard</td>
                      <td class="py-6 px-9">DOCX</td>
                    </tr>
                    <!--end::Row-->
                    
                    <!--begin::Row-->
                    <tr class="fw-medium pw-text-neutral-700 fs-9">
                      <td class="py-6 px-9">07/02/2023 - 15:00</td>
                      <td class="py-6 px-9">Cemil Cihan Güngör</td>
                      <td class="py-6 px-9">WhatsApp Image 2022-11-29 at 10.48.50</td>
                      <td class="py-6 px-9">FileStore01</td>
                      <td class="py-6 px-9">KT Form Wizard</td>
                      <td class="py-6 px-9">JPEG</td>
                    </tr>
                    <!--end::Row-->
                    
                    <!--begin::Row-->
                    <tr class="fw-medium pw-text-neutral-700 fs-9">
                      <td class="py-6 px-9">07/02/2023 - 15:00</td>
                      <td class="py-6 px-9">Cemil Cihan Güngör</td>
                      <td class="py-6 px-9">Test</td>
                      <td class="py-6 px-9">FileStore01</td>
                      <td class="py-6 px-9">KT Form Wizard</td>
                      <td class="py-6 px-9">JPEG</td>
                    </tr>
                    <!--end::Row-->
                  </tbody>
                  <!--end::Table body-->
                </table>
                <!--end::Table-->
              </div>
              <!--end::Veri table-->

              <!--begin::Table footer-->
              <div class="d-flex flex-column-reverse flex-sm-row align-items-center align-items-sm-end justify-content-center justify-content-sm-between gap-8 gap-sm-4 my-10">
                <!--begin::Information-->
                <div class="d-flex flex-column flex-sm-row flex-wrap align-items-center gap-2 gap-sm-6 gap-md-9 fw-medium text-primary fs-8 justify-content-center justify-content-sm-start w-100">
                  <span>Toplam: 15 Adet</span>
                  <span>Boyut: 0</span>
                </div>
                <!--end::Information-->
                <!--begin::Pagination-->
                <ul class="pagination flex-nowrap flex-shrink-0">
                  <!--begin::Pagination item previous-->
                  <li class="page-item previous disabled"><a href="/sistem-raporlari/dokuman-yonetimi/silinmis-belgeler#" class="page-link pw-min-w-32px h-32px fs-8"><i class="previous"></i></a></li>
                  <!--end::Pagination item previous-->

                  <!--begin::Pagination-item-->
                  <li class="page-item active">
                    <a href="/sistem-raporlari/dokuman-yonetimi/silinmis-belgeler#" class="page-link pw-min-w-32px h-32px fs-8">1</a>
                  </li>
                  <!--end::Pagination item-->

                  <!--begin::Pagination item-->
                  <li class="page-item">
                    <a href="/sistem-raporlari/dokuman-yonetimi/silinmis-belgeler#" class="page-link pw-min-w-32px h-32px fs-8">2</a>
                  </li>
                  <!--end::Pagination item-->

                  <!--begin::Pagination item-->
                  <li class="page-item ">
                    <a href="/sistem-raporlari/dokuman-yonetimi/silinmis-belgeler#" class="page-link pw-min-w-32px h-32px fs-8">3</a>
                  </li>
                  <!--end::Pagination item-->

                  <!--begin::Pagination item-->
                  <li class="page-item ">
                    <a href="/sistem-raporlari/dokuman-yonetimi/silinmis-belgeler#" class="page-link pw-min-w-32px h-32px fs-8">4</a>
                  </li>
                  <!--end::Pagination item-->

                  <!--begin::Pagination item-->
                  <li class="page-item ">
                    <a href="/sistem-raporlari/dokuman-yonetimi/silinmis-belgeler#" class="page-link pw-min-w-32px h-32px fs-8">5</a>
                  </li>
                  <!--end::Pagination item-->

                  <!--begin::Pagination item-->
                  <li class="page-item ">
                    <a href="/sistem-raporlari/dokuman-yonetimi/silinmis-belgeler#" class="page-link pw-min-w-32px h-32px fs-8">6</a>
                  </li>
                  <!--end::Pagination item-->

                  <!--begin::Pagination item-->
                  <li class="page-item next">
                    <a href="/sistem-raporlari/dokuman-yonetimi/silinmis-belgeler#" class="page-link pw-min-w-32px h-32px fs-8"><i class="next"></i></a>
                  </li>
                  <!--end::Pagination item-->
                </ul>
                <!--end::Pagination-->
              </div>
              <!--end::Table footer-->
            </div>
            <!--end::Belgeler content-->

            <!--begin::Grafik content-->
            <div class="tab-pane fade" id="pw_tab_pane_grafik" role="tabpanel">
              <!--begin::Card-->
              <div class="position-relative w-100 h-500px rounded-3 pw-shadow-1 py-4 px-4">
                <!--begin::Grafik tab wrapper-->
                <div class="position-absolute rounded border border-2 pw-border-stroke p-1 bg-white" style="right: 2rem; top:0.81rem">
                  <!--begin::Grafik tabs-->
                  <div class="nav nav-tabs nav-pills pw-nav-pills fs-6" role="tablist">
                    <!--begin::Tab item-->
                    <li class="nav-item" role="presentation">
                      <a class="nav-link mx-0 py-1 px-8 fs-base rounded fw-medium active" data-bs-toggle="tab" href="#pw_tab_pane_aylik_grafikler_adet" aria-selected="true" role="tab">Adet</a>
                    </li>
                    <!--end::Tab item-->

                    <!--begin::Tab item-->
                    <li class="nav-item" role="presentation">
                      <a class="nav-link py-1 px-8 mx-0 fs-base fw-medium rounded pw-text-neutral-500" data-bs-toggle="tab" href="#pw_tab_pane_aylik_grafikler_boyut" aria-selected="false" role="tab" tabindex="-1">Boyut</a>
                    </li>
                    <!--end::Tab item-->
                  </div>
                  <!--end::Grafik tabs-->
                </div>
                <!--end::Grafik tab wrapper-->

                <!--begin::Grafik tab contents-->
                <div class="tab-content pw-dashboard-tab-content mt-6" id="aylikGrafiklerContents">
                  <!--begin::Adet content-->
                  <div class="tab-pane fade active show" id="pw_tab_pane_aylik_grafikler_adet" role="tabpanel">
                    <canvas id="pw_aylik_grafikler_adet_line_chart" class="mh-400px"></canvas>
                  </div>
                  <!--end::Adet content-->

                  <!--begin::Boyut content-->
                  <div class="tab-pane fade" id="pw_tab_pane_aylik_grafikler_boyut" role="tabpanel">
                    Boyut
                  </div>
                  <!--end::Boyut content-->
                </div>
                <!--end::Grafik tab contents-->
              </div>
              <!--end::Card-->
            </div>
            <!--end::Grafik content-->
          </div>
          <!--end::Table tab contents-->
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

<script>
  window.addEventListener('DOMContentLoaded', () => {
    var ctx = document.getElementById('pw_aylik_grafikler_adet_line_chart');

    // Define colors
    var primaryColor = KTUtil.getCssVariableValue('--kt-primary');
    var dangerColor = KTUtil.getCssVariableValue('--kt-danger');

    // Define fonts
    var fontFamily = KTUtil.getCssVariableValue('--bs-font-sans-serif');

    // Chart labels
    const labels = ['12/1', '12/5', '12/9', '12/13', '12/17', '12/21', '12/25', '12/29'];

    // Chart data
    const data = {
      labels: labels,
      datasets: [{
        data: [{
          x: '12/1',
          y: 13,
        }, {
          x: '12/29',
          y: 2
        }],
        borderWidth: 1,
        borderColor: KTUtil.getCssVariableValue('--pw-primary-500'),
        backgroundColor: KTUtil.getCssVariableValue('--pw-primary-500'),
      }],
    };

    // Chart config
    const config = {
      type: 'line',
      data: data,
      options: {
        plugins: {
          title: {
            display: true,
          }
        },
        responsive: true,
      },
      defaults: {
        global: {
          defaultFont: fontFamily
        }
      }
    };

    // Init ChartJS -- for more info, please visit: https://www.chartjs.org/docs/latest/
    var myChart = new Chart(ctx, config);
  })
</script>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/foot.php'; ?>