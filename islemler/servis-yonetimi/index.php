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
                  <a href="islemler/" class="text-muted text-hover-primary">İşlemler</a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                  <span class="text-muted">/</span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item active"> Servis Yönetimi</li>
                <!--end::Item-->
              </ul>
              <!--end::Breadcrumb-->
              <!--begin::Title-->
              <h1 class="page-heading d-flex text-dark fw-bold fs-4 flex-column justify-content-center my-0">
                Servis Yönetimi
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
          <!--begin::Servis Yönetimi table-->
          <div class="table-responsive overflow-x-auto">
            <!--begin::Table-Light-->
            <table class="table table-row-bordered border pw-dark-bg-table pw-table-border-gray pw-table-border-gray table-rounded align-middle w-max-content min-w-100 gy-2 gx-9 gs-9">
              <thead>
                <tr class="fw-semibold fs-8 pw-text-neutral-700 pw-bg-neutral-100">
                  <th class="py-3">Servis Adı</th>
                  <th class="py-3">Versiyon Numarası</th>
                  <th class="py-3">Sunucu</th>
                  <th class="py-3">Başlama Tarihi</th>
                  <th class="py-3">Son İşlem Zamanı</th>
                </tr>
              </thead>
              <tbody>
                <tr class="fw-medium pw-text-neutral-700 fs-9 hover-pw-bg-primary-300">
                  <td class="py-6 d-flex"><i class="fa-solid fa-camera-polaroid px-2 pw-text-primary-300"></i>CasServer</td>
                  <td class="py-6">234567000</td>
                  <td class="py-6">Akış Durumu</td>
                  <td class="py-6">21.11.2022</td>
                  <td class="py-6">11111111111</td>
                </tr>
                <tr class="fw-medium pw-text-neutral-700 fs-9 hover-pw-bg-primary-300">
                  <td class="py-6 d-flex"><i class="fa-solid fa-cassette-tape px-2 pw-text-primary-300"></i>ContentServer</td>
                  <td class="py-6">234567000</td>
                  <td class="py-6">Akış Durumu</td>
                  <td class="py-6">21.11.2022</td>
                  <td class="py-6">11111111111</td>
                </tr>
                <tr class="fw-medium pw-text-neutral-700 fs-9 hover-pw-bg-primary-300">
                  <td class="py-6 d-flex"><i class="fa-solid fa-webhook px-2 pw-text-primary-300"></i>IndexServer</td>
                  <td class="py-6">234567000</td>
                  <td class="py-6">Akış Durumu</td>
                  <td class="py-6">21.11.2022</td>
                  <td class="py-6">11111111111</td>
                </tr>
                <tr class="fw-medium pw-text-neutral-700 fs-9 hover-pw-bg-primary-300">
                  <td class="py-6 d-flex"><i class="fa-solid fa-server px-2 pw-text-primary-300"></i>MethodServer</td>
                  <td class="py-6">234567000</td>
                  <td class="py-6">Akış Durumu</td>
                  <td class="py-6">21.11.2022</td>
                  <td class="py-6">11111111111</td>
                </tr>
                <tr class="fw-medium pw-text-neutral-700 fs-9 hover-pw-bg-primary-300">
                  <td class="py-6 d-flex"><i class="fa-solid fa-shekel-sign px-2 pw-text-primary-300"></i>ReportServer</td>
                  <td class="py-6">234567000</td>
                  <td class="py-6">Akış Durumu</td>
                  <td class="py-6">21.11.2022</td>
                  <td class="py-6">11111111111</td>
                </tr>
                <tr class="fw-medium pw-text-neutral-700 fs-9 hover-pw-bg-primary-300">
                  <td class="py-6 d-flex"><i class="fa-solid fa-spider-web px-2 pw-text-primary-300"></i>WorkflowServer</td>
                  <td class="py-6">234567000</td>
                  <td class="py-6">Akış Durumu</td>
                  <td class="py-6">21.11.2022</td>
                  <td class="py-6">11111111111</td>
                </tr>
                <tr class="fw-medium pw-text-neutral-700 fs-9 hover-pw-bg-primary-300">
                  <td class="py-6 d-flex"><i class="fa-solid fa-sitemap px-2 pw-text-primary-300"></i>TransferServer</td>
                  <td class="py-6">234567000</td>
                  <td class="py-6">Akış Durumu</td>
                  <td class="py-6">21.11.2022</td>
                  <td class="py-6">11111111111</td>
                </tr>
              </tbody>
            </table>
            <!--end::Table-Light-->
          </div>
          <!--end::Servis Yönetimi table-->
          
          <!--begin::Content -->
          <div class="row">
            <!--begin::Form-->
            <form class="col-md-8">
              <!--begin::Table-->
              <div class="table-responsive">
                <table class="table">
                  <tbody>
                    <tr>
                      <td>
                        <label class="form-label fs-base py-3 fw-bold" for="pw_akis_istatistikleri_datepicker">Tarih</label>
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
                        <button type="clear" class="btn btn-active-light fs-8 py-3 pw-text-neutral-600 px-6">
                          Vazgeç
                        </button>
                        <button type="submit" class="btn btn-primary fs-8 py-3 px-6">
                          Kaydet
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

          <!--begin::Col-->
          <div class="row">
            <!--begin::Tab header wrapper-->
            <div class="table-reponsive overflow-x-auto mt-4">
              <!--begin::Table tabs-->
              <div class="nav nav-tabs nav-line-tabs fs-6 gap-8" role="tablist">
                <!--begin::Tab item-->
                <li class="nav-item" role="presentation">
                  <a class="nav-link mx-0 pt-3 pb-6 fs-base rounded-0 fw-semibold active" data-bs-toggle="tab" href="#pw_tab_pane_ozellikler" aria-selected="true" role="tab">Genel</a>
                </li>
                <!--end::Tab item-->

                <!--begin::Tab item-->
                <li class="nav-item" role="presentation">
                  <a class="nav-link mx-0 pt-3 pb-6 fs-base rounded-0" data-bs-toggle="tab" href="#pw_tab_pane_islemci_kullanimi" aria-selected="false" role="tab">İşlemci Kullanımı%</a>
                </li>
                <!--end::Tab item-->

                <!--begin::Tab item-->
                <li class="nav-item" role="presentation">
                  <a class="nav-link mx-0 pt-3 pb-6 fs-base rounded-0" data-bs-toggle="tab" href="#pw_tab_pane_hafiza_kullanimi" aria-selected="false" role="tab">Hafıza Kullanımı</a>
                </li>
                <!--end::Tab item-->
              </div>
              <!--end::Table tabs-->
            </div>
            <!--end::Tab header wrapper-->

            <!--begin::Tab contents-->
            <div class="tab-content pw-dashboard-tab-content mt-6" id="kabinetTabContents">
              <!--begin::Genel content-->
              <div class="tab-pane fade active show" id="pw_tab_pane_ozellikler" role="tabpanel">
                <div class="col-md-7">
                  <div class="row my-4 pw-text-neutral-500 ">
                    <div class="col-md-4 col-sm-12">
                      <!--begin::Menu-->
                      <div class="menu menu-rounded menu-column menu-active-bg menu-hover-bg menu-title-gray-700 pw-aside-menu fs-9 fw-semibold" data-kt-menu="true">
                        <!--begin::Menu item-->
                        <div class="menu-item">
                          <a href="#" class="menu-link align-items-start">
                            <span class="menu-icon w-auto pt-1">
                              <i class="fa-solid fa-file-pen"></i> 
                            </span>
                            <span class="menu-title fs-6 fw-bold">Toplam Geçen Süre<br>99.09 gün</span>
                          </a>
                        </div>
                        <!--end::Menu item-->
                      </div>
                      <!--end::Menu-->
                    </div>
                    <div class="col-md-4 col-sm-12">
                      <!--begin::Menu-->
                      <div class="menu menu-rounded menu-column menu-active-bg menu-hover-bg menu-title-gray-700 pw-aside-menu fs-9 fw-semibold" data-kt-menu="true">
                        <!--begin::Menu item-->
                        <div class="menu-item">
                          <a href="#" class="menu-link align-items-start">
                            <span class="menu-icon w-auto pt-1">
                              <i class="fa-solid fa-file-circle-check"></i> 
                            </span>
                            <span class="menu-title fs-6 fw-bold">Toplam Açık Kaldığı Süre<br>99.09 gün</span>
                          </a>
                        </div>
                        <!--end::Menu item-->
                      </div>
                      <!--end::Menu-->
                    </div>
                    <div class="col-md-4 col-sm-12">
                      <!--begin::Menu-->
                      <div class="menu menu-rounded menu-column menu-active-bg menu-hover-bg menu-title-gray-700 pw-aside-menu fs-9 fw-semibold" data-kt-menu="true">
                        <!--begin::Menu item-->
                        <div class="menu-item">
                          <a href="#" class="menu-link align-items-start">
                            <span class="menu-icon w-auto pt-1">
                              <i class="fa-solid fa-file-chart-column"></i> 
                            </span>
                            <span class="menu-title fs-6 fw-bold">Çalışma Oranı<br>100,00</span>
                          </a>
                        </div>
                        <!--end::Menu item-->
                      </div>
                      <!--end::Menu-->
                    </div>
                  </div>
                </div>
                <!--begin::Bottom Table-->
                <div class="table-responsive overflow-x-auto">
                  <!--begin::Table-Light-->
                  <table class="table table-row-bordered border pw-dark-bg-table pw-table-border-gray pw-table-border-gray table-rounded align-middle w-max-content min-w-100 gy-2 gx-9 gs-9">
                    <thead>
                      <tr class="fw-semibold fs-8 pw-text-neutral-700 pw-bg-neutral-100">
                        <th class="py-3">Başlangıç Zamanı</th>
                        <th class="py-3">Duruş Zamanı</th>
                        <th class="py-3">Çalışma Süresi</th>
                        <th class="py-3">Duruş Nedeni</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="fw-medium pw-text-neutral-700 fs-9 hover-pw-bg-primary-300">
                        <td class="py-6">28.02.2023 10:02</td>
                        <td class="py-6">28.02.2023 10:05</td>
                        <td class="py-6">5.78 dk</td>
                        <td class="py-6 text-success">Planlı</td>
                      </tr>
                      <tr class="fw-medium pw-text-neutral-700 fs-9 hover-pw-bg-primary-300">
                        <td class="py-6">28.02.2023 10:02</td>
                        <td class="py-6">28.02.2023 10:05</td>
                        <td class="py-6">5.78 dk</td>
                        <td class="py-6 text-danger">Göçme</td>
                      </tr>
                      <tr class="fw-medium pw-text-neutral-700 fs-9 hover-pw-bg-primary-300">
                        <td class="py-6">28.02.2023 10:02</td>
                        <td class="py-6">28.02.2023 10:05</td>
                        <td class="py-6">5.78 dk</td>
                        <td class="py-6 text-primary">Çalışıyor</td>
                      </tr>
                      <tr class="fw-medium pw-text-neutral-700 fs-9 hover-pw-bg-primary-300">
                        <td class="py-6">28.02.2023 10:02</td>
                        <td class="py-6">28.02.2023 10:05</td>
                        <td class="py-6">5.78 dk</td>
                        <td class="py-6 text-primary">Çalışıyor</td>
                      </tr>
                    </tbody>
                  </table>
                  <!--end::Table-Light-->
                </div>
                <!--end::Bottom Table-->
              </div>
              <!--end::Genel content-->

              <!--begin::islemci kullanimi content-->
              <div class="tab-pane fade" id="pw_tab_pane_islemci_kullanimi" role="tabpanel">
                <!--begin::Card-->
                <canvas id="pw_aylik_islemci_kullanimi_line_chart" class="mh-400px"></canvas>
                <!--end::Card-->
              </div>
              <!--end::islemci kullanimi content-->

              <!--begin::Hafıza Kullanımı content-->
              <div class="tab-pane fade" id="pw_tab_pane_hafiza_kullanimi" role="tabpanel">
                <!--begin::Card-->
                <canvas id="pw_hafiza_kullanimi_line_chart" class="mh-400px"></canvas>
                <!--end::Card-->
              </div>
              <!--end::Hafıza Kullanımı content-->
            </div>
            <!--end::Tab contents-->
          </div>
          <!--end::Col-->
        </div>      
        <!--end::Content -->  
    </div>
    <!--end::Content wrapper-->

    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/footer.php'; ?>
  </div>
  <!--end::Main-->

</div>
<!--end::Wrapper -->

<script>
  window.addEventListener('DOMContentLoaded', () => {
    var ctx_islemci = document.getElementById('pw_aylik_islemci_kullanimi_line_chart');
    var ctx_hafiza = document.getElementById('pw_hafiza_kullanimi_line_chart');

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
    var myChart_islemci = new Chart(ctx_islemci, config);
    var myChart_hafiza = new Chart(ctx_hafiza, config);
  })
</script>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/foot.php'; ?>