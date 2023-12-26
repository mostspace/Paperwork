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
                <li class="breadcrumb-item active">KPI Ölçüm</li>
                <!--end::Item-->
              </ul>
              <!--end::Breadcrumb-->
              <!--begin::Title-->
              <h1 class="page-heading d-flex text-dark fw-bold fs-4 flex-column justify-content-center my-0">
                KPI Ölçüm
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
                    <td><label class="form-label fs-base" for="tarih">Tarih</label></td>
                    <td>
                    <div class="row position-relative">
                        <div class="col-6">
                          <span class="position-absolute top-50 translate-middle-y fs-base ms-4">
                            <i class="fa-solid fa-calendar-days text-primary"></i>
                          </span>
                          <input class="form-control form-control-solid fs-8 py-3 ps-10 pe-4" value="12/01/2021" placeholder="Tarih seçiniz" id="tarih" required="required" />
                        </div>
                        <div class="col-6">
                          <span class="position-absolute top-50 translate-middle-y fs-base ms-4">
                            <i class="fa-solid fa-calendar-days text-primary"></i>
                          </span>
                          <input class="form-control form-control-solid fs-8 py-3 ps-10 pe-4" value="15/12/2023" placeholder="Tarih seçiniz" id="tarih" required="required" />
                        </div> 
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td><label class="form-label fs-base" for="akis-adi">Akış Adı</label></td>
                    <td>
                    <select id="akis-adi" class="form-select form-select-solid fs-8 py-3 px-4" name="akis-adi" aria-label="Akış Adı">
                        <option>Akçelik POC (5)</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label class="form-label fs-base" for="son-aktivite">Son Aktivite Sahibi</label>
                    </td>
                    <td>
                      <select id="son-aktivite" class="form-select form-select-solid fs-8 py-3 px-4" name="son-aktivite" aria-label="Son Aktivite Sahibi">
                        <option></option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label class="form-label fs-base" for="aktivite-adi">Aktivite Adı</label>
                    </td>
                    <td>
                      <select name="aktivite-adi" id="aktivite-adi" class="form-select form-select-solid fs-8 py-3 px-4">
                        <option value="all">Hepsi</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label class="form-label fs-base" for="aktivite-durumu">Aktivite Durumu</label>
                    </td>
                    <td>
                    <select id="aktivite-durumu" class="form-select form-select-solid fs-8 py-3 px-4" name="aktivite-durumu" aria-label="Aktivite Durumu">
                        <option>Hepsi</option>
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
                    <select id="durum" class="form-select form-select-solid fs-8 py-3 px-4" name="durum" aria-label="Durum">
                        <option></option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
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
      <div class="col">
        <div class="d-flex align-items-center h-100 justify-content-center">
          <div class="w-225px h-375px pw-bg-table py-10 px-5">
            <h2 class="text-center mb-12">Veriler</h2>
    <canvas id="pw_kpi_olcum_veriler" class="mh-400px"></canvas>

          </div>
        </div>
    </div>

    <div class="row">
      <div class="col">
        <!--begin::Akış istatistikleri tablosu-->
        <div class="table-responsive overflow-x-auto">
          <!--begin::Table-Dark-->
          <table class="table table-row-bordered border pw-dark-bg-table table-rounded w-max-content min-w-100">
            <thead>
              <tr class="fw-semibold fs-8 pw-text-neutral-700 pw-dark-bg-tr">
                <th class="py-3 px-9">Süreç No</th>
                <th class="py-3 px-9">Süreç Adı</th>
                <th class="py-3 px-9">Akış No</th>
                <th class="py-3 px-9">Akış Adı</th>
                <th class="py-3 px-9">Sahibi</th>
                <th class="py-3 px-9">Başlangıç Tarihi</th>
                <th class="py-3 px-9">Bitiş Tarihi</th>
              </tr>
            </thead>
            <tbody>
              <tr class="fw-medium pw-text-neutral-700 fs-9">
                <td class="py-6 px-9">50000200002B</td>
                <td class="py-6 px-9">Akçelik POC</td>
                <td class="py-6 px-9">AB0232480123</td>
                <td class="py-6 px-9">Akçelik POC - 2023/02/07</td>
                <td class="py-6 px-9">Abiye Bakım</td>
                <td class="py-6 px-9">07/02/2023 - 15:00</td>
                <td class="py-6 px-9">08/02/2023 - 17:00</td>
              </tr>
              <tr class="fw-medium pw-text-neutral-700 fs-9">
                <td class="py-6 px-9">50000200002B</td>
                <td class="py-6 px-9">Akçelik POC</td>
                <td class="py-6 px-9">AB0232480123</td>
                <td class="py-6 px-9">Akçelik POC - 2023/02/07</td>
                <td class="py-6 px-9">Abiye Bakım</td>
                <td class="py-6 px-9">07/02/2023 - 15:00</td>
                <td class="py-6 px-9">08/02/2023 - 17:00</td>
              </tr>
              <tr class="fw-medium pw-text-neutral-700 fs-9">
                <td class="py-6 px-9">50000200002B</td>
                <td class="py-6 px-9">Akçelik POC</td>
                <td class="py-6 px-9">AB0232480123</td>
                <td class="py-6 px-9">Akçelik POC - 2023/02/07</td>
                <td class="py-6 px-9">Abiye Bakım</td>
                <td class="py-6 px-9">07/02/2023 - 15:00</td>
                <td class="py-6 px-9">08/02/2023 - 17:00</td>
              </tr>
              <tr class="fw-medium pw-text-neutral-700 fs-9">
                <td class="py-6 px-9">50000200002B</td>
                <td class="py-6 px-9">Akçelik POC</td>
                <td class="py-6 px-9">AB0232480123</td>
                <td class="py-6 px-9">Akçelik POC - 2023/02/07</td>
                <td class="py-6 px-9">Abiye Bakım</td>
                <td class="py-6 px-9">07/02/2023 - 15:00</td>
                <td class="py-6 px-9">08/02/2023 - 17:00</td>
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

    
    <!--end::Content wrapper-->
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/footer.php'; ?>
  </div>
  <!--end::Main-->

</div>
<!--end::Wrapper -->

<script>
  window.addEventListener('DOMContentLoaded', () => {
    var ctx = document.getElementById('pw_kpi_olcum_veriler');

    // Define colors
    var primaryColor = KTUtil.getCssVariableValue('--kt-primary');
    var dangerColor = KTUtil.getCssVariableValue('--kt-danger');

    // Define fonts
    var fontFamily = KTUtil.getCssVariableValue('--bs-font-sans-serif');

    // Chart data
    const data = {
  labels: [
    'Beklenenden erken',
    'Beklenenden geç',
  ],
  datasets: [{
    label: 'Veriler',
    data: [2, 3],
    backgroundColor: [
      '#1dc894',
      '#f53d40'
      
    ],
    hoverOffset: 4
  }]
};

    // Chart config
    const config = {
      type: 'pie',
      data: data,
      options: {
        plugins: {
          tooltip:{
            backgroundColor: '#FEE8E8',
            titleColor: '#000',
            bodyColor: '#000',
            displayColors: false,
            titleAlign: 'center',
            bodyAlign: 'center',
            titleFont: {
              size: 12,
              weight: 'normal',
              family: fontFamily,
              lineHeight: 1.5
            },

           
          },
          legend:{
            position : 'bottom',
            labels:{
              padding:12,
              boxWidth: 20,
              useBorderRadius: true,
              borderRadius: 5,


            }
          },
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