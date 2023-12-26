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
                <li class="breadcrumb-item active"> Geri Dönüşüm</li>
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
        <div class="row mb-20">
          <form action="">
            <!--begin::Table-->
            <div class="table-responsive overflow-x-auto overflow-lg-hidden">
              <table class="table w-min-content w-100 align-middle gy-5 gx-4">
                <tbody>
                  <!--begin::Row-->
                  <tr>
                    <td>
                      <div class="d-flex flex-row flex-nowrap align-items-center gap-4 col-md-6">
                        <select class="form-select form-select-solid fs-8 py-3 px-4 float-start" data-control="select2">
                          <option value="1">Hepsi</option>
                          <option value="2">Eyüp Arşiv</option>
                          <option value="3">KT Arşiv Add </option>
                          <option value="4">Oryantasyon DK Tipi</option>
                          <option value="4">Sistem</option>
                        </select>
                        <!--begin::Button group-->
                        <div class="d-flex flex-row flex-nowrap align-items-center gap-2">
                          <a href="#" class="btn btn-icon btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                            <i class="fa-solid fa-rotate-left fs-7 pw-text-primary-400"></i>
                          </a>
                          <a href="#" class="btn btn-icon btn-text-danger pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                            <i class="fa-solid fa-trash-can fs-7 pw-text-danger-500"></i>
                          </a>
                        </div>
                        <!--end::Button group-->
                      </div>
                    </td>
                  </tr>
                  <!--end::Row-->
                </tbody>
              </table>
            </div>
            <!--end::Table-->
          </form>
          <!--end::Form wrapper-->

          <!--begin::Akış istatistikleri tablosu-->
          <div class="row">
            <div class="table-responsive overflow-x-auto">
              <!--begin::Table-Light-->
              <table class="table table-row-bordered border pw-dark-bg-table pw-table-border-gray pw-table-border-gray table-rounded align-middle w-max-content min-w-100 gy-2 gx-9 gs-9">
                <thead>
                  <tr class="fw-semibold fs-8 pw-text-neutral-700 pw-bg-neutral-100">
                    <th class="py-3">Nesne No</th>
                    <th class="py-3">Nesne Adı</th>
                    <th class="py-3">Nesne Tipi</th>
                    <th class="py-3">Sahibi</th>
                    <th class="py-3">Yaratılış Tarihi </th>
                    <th class="py-3">Silen Kullanıcı</th>
                    <th class="py-3">Geri Dönüşüm Tipi</th>
                    <th class="py-3">Kilit Tarihi</th>
                    <th class="py-3">Version</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="fw-medium pw-text-neutral-700 fs-9 hover-pw-bg-primary-300">
                    <td class="py-6">FF002000000063AF</td>
                    <td class="py-6">Cihan</td>
                    <td class="py-6">KT Active Add</td>
                    <td class="py-6">Cemil Cihan Güngör</td>
                    <td class="py-6">25/11/2022 - 14:20:14</td>
                    <td class="py-6">Cemil Cihan Güngör</td>
                    <td class="py-6">Zamana Bağlı</td>
                    <td class="py-6">18.01.2023</td>
                    <td class="py-6">1.0</td>
                  </tr>
                  <tr class="fw-medium pw-text-neutral-700 fs-9 hover-pw-bg-primary-300">
                    <td class="py-6">FF002000000063AF</td>
                    <td class="py-6">Cihan</td>
                    <td class="py-6">KT Active Add</td>
                    <td class="py-6">Cemil Cihan Güngör</td>
                    <td class="py-6">25/11/2022 - 14:20:14</td>
                    <td class="py-6">Cemil Cihan Güngör</td>
                    <td class="py-6">Zamana Bağlı</td>
                    <td class="py-6">18.01.2023</td>
                    <td class="py-6">1.0</td>
                  </tr>
                  <tr class="fw-medium pw-text-neutral-700 fs-9 hover-pw-bg-primary-300">
                    <td class="py-6">FF002000000063AF</td>
                    <td class="py-6">Cihan</td>
                    <td class="py-6">KT Active Add</td>
                    <td class="py-6">Cemil Cihan Güngör</td>
                    <td class="py-6">25/11/2022 - 14:20:14</td>
                    <td class="py-6">Cemil Cihan Güngör</td>
                    <td class="py-6">Zamana Bağlı</td>
                    <td class="py-6">18.01.2023</td>
                    <td class="py-6">1.0</td>
                  </tr>
                  <tr class="fw-medium pw-text-neutral-700 fs-9 hover-pw-bg-primary-300">
                    <td class="py-6">FF002000000063AF</td>
                    <td class="py-6">Cihan</td>
                    <td class="py-6">KT Active Add</td>
                    <td class="py-6">Cemil Cihan Güngör</td>
                    <td class="py-6">25/11/2022 - 14:20:14</td>
                    <td class="py-6">Cemil Cihan Güngör</td>
                    <td class="py-6">Zamana Bağlı</td>
                    <td class="py-6">18.01.2023</td>
                    <td class="py-6">1.0</td>
                  </tr>
                  <tr class="fw-medium pw-text-neutral-700 fs-9 hover-pw-bg-primary-300">
                    <td class="py-6">FF002000000063AF</td>
                    <td class="py-6">Cihan</td>
                    <td class="py-6">KT Active Add</td>
                    <td class="py-6">Cemil Cihan Güngör</td>
                    <td class="py-6">25/11/2022 - 14:20:14</td>
                    <td class="py-6">Cemil Cihan Güngör</td>
                    <td class="py-6">Zamana Bağlı</td>
                    <td class="py-6">18.01.2023</td>
                    <td class="py-6">1.0</td>
                  </tr>
                </tbody>
              </table>
              <!--end::Table-Light-->
              <!--begin::Table-Dark-->
              <table class="table table-row-bordered border pw-dark-bg-table theme-dark-show pw-table-border-gray pw-table-border-gray table-rounded align-middle w-max-content min-w-100 gy-2 gx-9 gs-9">
                <thead>
                  <tr class="fw-semibold fs-8 pw-text-neutral-700 pw-bg-neutral-100 pw-dark-bg-tr">
                    <th class="py-3">Nesne Adı</th>
                    <th class="py-3">Kayıt Sahibi </th>
                    <th class="py-3">Kilitleyen</th>
                    <th class="py-3">Kilit Tarihi</th>
                    <th class="py-3">Version</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="fw-medium pw-text-neutral-700 fs-9 hover-pw-bg-primary-300">
                    <td class="py-6 d-flex"><i class="fa-solid fa-lock-keyhole px-2 pw-text-primary"></i>10.21597-jist.817900-1369213</td>
                    <td class="py-6">Ezgi Çelik</td>
                    <td class="py-6">Cemil Cihan Güngör</td>
                    <td class="py-6">18.01.2023</td>
                    <td class="py-6">1.0</td>
                  </tr>
                  <tr class="fw-medium pw-text-neutral-700 fs-9 hover-pw-bg-primary-300">
                    <td class="py-6 d-flex"><i class="fa-solid fa-lock-keyhole px-2 pw-text-primary"></i>Samet Fırat</td>
                    <td class="py-6">Akış Yöneticisi</td>
                    <td class="py-6">Ezgi Çelik</td>
                    <td class="py-6">18.01.2023</td>
                    <td class="py-6">1.0</td>
                  </tr>
                  <tr class="fw-medium pw-text-neutral-700 fs-9 hover-pw-bg-primary-300">
                    <td class="py-6 d-flex"><i class="fa-solid fa-lock-keyhole px-2 pw-text-primary"></i>sihirbaz_aktif_kullanici_01</td>
                    <td class="py-6">Cemil Cihan Güngör</td>
                    <td class="py-6">Cemil Cihan Güngör</td>
                    <td class="py-6">18.01.2023</td>
                    <td class="py-6">1.0</td>
                  </tr>
                  <tr class="fw-medium pw-text-neutral-700 fs-9 hover-pw-bg-primary-300">
                    <td class="py-6 d-flex"><i class="fa-solid fa-lock-keyhole px-2 pw-text-primary"></i>ONS_rule_engine_01< /td>
                    <td class="py-6">Ezgi Çelik</td>
                    <td class="py-6">Cemil Cihan Güngör</td>
                    <td class="py-6">18.01.2023</td>
                    <td class="py-6">1.0</td>
                  </tr>
                  <tr class="fw-medium pw-text-neutral-700 fs-9 hover-pw-bg-primary-300">
                    <td class="py-6 d-flex"><i class="fa-solid fa-lock-keyhole px-2 pw-text-primary"></i>10.21597-jist.817900-1369213</td>
                    <td class="py-6">Ezgi Çelik</td>
                    <td class="py-6">Cemil Cihan Güngör</td>
                    <td class="py-6">18.01.2023</td>
                    <td class="py-6">1.0</td>
                  </tr>
                </tbody>
              </table>
              <!--end::Table-Dark-->
            </div>
          </div>
          <!--end::Akış istatistikleri tablosu-->
          
          <!--begin::Table footer-->
          <div class="d-flex flex-column-reverse flex-sm-row align-items-center align-items-sm-end justify-content-center justify-content-sm-between gap-8 gap-sm-4 my-10">
            <!--begin::Information-->
            <div class="d-flex flex-column flex-sm-row flex-wrap align-items-center gap-2 gap-sm-6 gap-md-9 fw-medium text-primary fs-8 justify-content-center justify-content-sm-start w-100">
              <span>Toplam: 5 Adet</span>
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

          <!--begin::Col-->
          <div class="row">
            <!--begin::Tab header wrapper-->
            <div class="table-reponsive overflow-x-auto mt-4">
              <!--begin::Table tabs-->
              <div class="nav nav-tabs nav-line-tabs fs-6 px-10 gap-8" role="tablist">
                <!--begin::Tab item-->
                <li class="nav-item" role="presentation">
                  <a class="nav-link mx-0 pt-3 pb-6 fs-base rounded-0 fw-semibold active" data-bs-toggle="tab" href="#pw_tab_pane_ozellikler" aria-selected="true" role="tab">Özellikler</a>
                </li>
                <!--end::Tab item-->

                <!--begin::Tab item-->
                <li class="nav-item" role="presentation">
                  <a class="nav-link mx-0 pt-3 pb-6 fs-base rounded-0" data-bs-toggle="tab" href="#pw_tab_pane_e_form" aria-selected="false" role="tab">E Form</a>
                </li>
                <!--end::Tab item-->

                <!--begin::Tab item-->
                <li class="nav-item" role="presentation">
                  <a class="nav-link mx-0 pt-3 pb-6 fs-base rounded-0" data-bs-toggle="tab" href="#pw_tab_pane_goster" aria-selected="false" role="tab">Goster</a>
                </li>
                <!--end::Tab item-->
              </div>
              <!--end::Table tabs-->
            </div>
            <!--end::Tab header wrapper-->

            <!--begin::Tab contents-->
            <div class="tab-content pw-dashboard-tab-content mt-6" id="kabinetTabContents">
              <!--begin::Ozellikler content-->
              <div class="tab-pane fade active show" id="pw_tab_pane_ozellikler" role="tabpanel">
                <div class="border pw-border-stroke rounded-3 py-6 px-7">
                  <!--begin::Card actions-->
                  <div class="d-flex align-items-center justify-content-between gap-3">
                    <div class="d-flex align-items-center gap-3">
                      <!--begin::Item-->
                      <button type="button" class="btn p-0 btn-icon-gray-400 btn-active-icon-primary">
                        <i class="fa-solid fa-floppy-disk fs-3 "></i>
                      </button>
                      <!--end::Item-->

                      <!--begin::Item-->
                      <button type="button" class="btn p-0 btn-icon-gray-400 btn-active-icon-primary">
                        <i class="fa-solid fa-user-pen fs-3"></i>
                      </button>
                      <!--end::Item-->

                      <!--begin::Item-->
                      <button type="button" class="btn p-0 btn-icon-gray-400 btn-active-icon-primary">
                        <i class="fa-solid fa-trash-can fs-3"></i>
                      </button>
                      <!--end::Item-->

                      <!--begin::Item-->
                      <button type="button" class="btn p-0 btn-icon-gray-400 btn-active-icon-primary">
                        <i class="fa-solid fa-print fs-3"></i>
                      </button>
                      <!--end::Item-->

                      <!--begin::Item-->
                      <button type="button" class="btn p-0 btn-icon-gray-400 btn-active-icon-primary">
                        <i class="fa-solid fa-share-nodes fs-3"></i>
                      </button>
                      <!--end::Item-->

                      <!--begin::Item-->
                      <button type="button" class="btn p-0 btn-icon-gray-400 btn-active-icon-primary">
                        <i class="fa-solid fa-heart fs-3"></i>
                      </button>
                      <!--end::Item-->

                      <!--begin::Item-->
                      <button type="button" class="btn p-0 btn-icon-gray-400 btn-active-icon-primary">
                        <i class="fa-solid fa-star-sharp fs-3"></i>
                      </button>
                      <!--end::Item-->

                      <!--begin::Item-->
                      <button type="button" class="btn p-0 btn-icon-gray-400 btn-active-icon-primary">
                        <i class="fa-solid fa-clock-rotate-left fs-3"></i>
                      </button>
                      <!--end::Item-->

                      <!--begin::Item-->
                      <button type="button" class="btn p-0 btn-icon-gray-400 btn-active-icon-primary">
                        <i class="fa-solid fa-messages fs-3"></i>
                      </button>
                      <!--end::Item-->

                      <!--begin::Item-->
                      <button type="button" class="btn p-0 btn-icon-gray-400 btn-active-icon-primary">
                        <i class="fa-solid fa-message fs-3"></i>
                      </button>
                      <!--end::Item-->

                      <!--begin::Item-->
                      <button type="button" class="btn p-0 btn-icon-gray-400 btn-active-icon-primary">
                        <i class="fa-solid fa-lock fs-3"></i>
                      </button>
                      <!--end::Item-->

                      <!--begin::Item-->
                      <button type="button" class="btn p-0 btn-icon-gray-400 btn-active-icon-primary">
                        <i class="fa-solid fa-clipboard-list-check fs-3"></i>
                      </button>
                      <!--end::Item-->

                      <!--begin::Item-->
                      <button type="button" class="btn p-0 btn-icon-gray-400 btn-active-icon-primary">
                        <i class="fa-solid fa-file-signature fs-3"></i>
                      </button>
                      <!--end::Item-->

                      <!--begin::Item-->
                      <button type="button" class="btn p-0 btn-icon-gray-400 btn-active-icon-primary">
                        <i class="fa-solid fa-gear fs-3"></i>
                      </button>
                      <!--end::Item-->

                      <!--begin::Item-->
                      <button type="button" class="btn p-0 btn-icon-gray-400 btn-active-icon-primary">
                        <i class="fa-solid fa-file-exclamation fs-3"></i>
                      </button>
                      <!--end::Item-->
                    </div>

                    <!--begin::Help button-->
                    <button type="button" class="btn p-0 btn-icon-gray-400 btn-active-icon-primary">
                      <i class="fa-solid fa-circle-question fs-3"></i>
                    </button>
                    <!--end::Help button-->
                  </div>
                  <!--end::Card actions-->

                  <!--begin::Table-->
                  <div class="table-responsive mt-12">
                    <table class="table pw-text-neutral-900 fs-8">
                      <tbody>
                        <!--begin::Row-->
                        <tr>
                          <td class="fw-bolder">Belge No</td>
                          <td>
                            <a href="/belgeler/kabinet/#" class="btn btn-link btn-text-primary p-0 fs-8" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="bottom" title="FF020002340020B10">FF020002340020B10</a>
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td class="fw-bolder">Belge Adı</td>
                          <td>
                            <a href="/belgeler/kabinet/#" class="btn btn-link btn-text-primary p-0 fs-8" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="bottom" title="ONS_rule_engine_01">ONS_rule_engine_01</a>
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td class="fw-bolder">Dosya Formatı</td>
                          <td>Portable Network Graphic</td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td class="fw-bolder">Belge Tipi</td>
                          <td>KT Form Wizard</td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td class="fw-bolder">Versiyonu</td>
                          <td>1.0</td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td class="fw-bolder">Kayıt Tarihi</td>
                          <td>26.12.2022 11:53:41</td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td class="fw-bolder">Kaydeden</td>
                          <td><a href="/belgeler/kabinet/#" class="btn btn-link btn-text-primary p-0 fs-8" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="bottom" title="Cemil Cihan Güngör">Cemil Cihan Güngör</a></td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td class="fw-bolder">Tam Metin Arama</td>
                          <td>
                            <div class="d-flex align-items-center gap-4">
                              Hazır
                              <button type="button" class="btn btn-icon p-0 h-20px w-20px">
                                <i class="fa-solid fa-circle-question fs-base pw-text-primary-300"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td class="fw-bolder">Checkout Yapan</td>
                          <td>Cemil Cihan Güngör</td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td class="fw-bolder">Belge Boyutu</td>
                          <td><a href="/belgeler/kabinet/#" class="btn btn-link btn-text-primary p-0 fs-8" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="bottom" title="Belge Boyutu">317.61 Kb</a></td>
                        </tr>
                        <!--end::Row-->
                        <!--begin::Row-->
                        <tr>
                          <td class="fw-bolder">Açıklama</td>
                          <td>
                            <button type="button" class="btn p-0">
                              <i class="fa-solid fa-pen-line fs-base pw-text-primary-300"></i>
                            </button>
                          </td>
                        </tr>
                        <!--end::Row-->
                      </tbody>
                    </table>
                  </div>
                  <!--end::Table-->
                </div>
              </div>
              <!--end::Ozellikler content-->

              <!--begin::Goster content-->
              <div class="tab-pane fade" id="pw_tab_pane_goster" role="tabpanel">
                <div class="border pw-border-stroke rounded-3 py-6 px-7">
                  <!--begin::Card actions-->
                  <div class="d-flex align-items-center justify-content-between gap-3">
                    <div class="d-flex align-items-center gap-3">
                      <!--begin::Item-->
                      <button type="button" class="btn p-0 btn-icon-gray-400 btn-active-icon-primary">
                        <i class="fa-solid fa-file-magnifying-glass fs-3"></i>
                      </button>
                      <!--end::Item-->

                      <!--begin::Item-->
                      <button type="button" class="btn p-0 btn-icon-gray-400 btn-active-icon-primary">
                        <i class="fa-solid fa-arrows-left-right fs-3"></i>
                      </button>
                      <!--end::Item-->

                      <!--begin::Item-->
                      <button type="button" class="btn p-0 btn-icon-gray-400 btn-active-icon-primary">
                        <i class="fa-solid fa-compress fs-3"></i>
                      </button>
                      <!--end::Item-->

                      <!--begin::Item-->
                      <button type="button" class="btn p-0 btn-icon-gray-400 btn-active-icon-primary">
                        <i class="fa-solid fa-magnifying-glass-plus fs-3"></i>
                      </button>
                      <!--end::Item-->

                      <!--begin::Item-->
                      <button type="button" class="btn p-0 btn-icon-gray-400 btn-active-icon-primary">
                        <i class="fa-solid fa-magnifying-glass-minus fs-3"></i>
                      </button>
                      <!--end::Item-->

                      <!--begin::Item-->
                      <button type="button" class="btn p-0 btn-icon-gray-400 btn-active-icon-primary">
                        <i class="fa-solid fa-arrow-rotate-left fs-3"></i>
                      </button>
                      <!--end::Item-->

                      <!--begin::Item-->
                      <button type="button" class="btn p-0 btn-icon-gray-400 btn-active-icon-primary">
                        <i class="fa-solid fa-arrow-rotate-right fs-3"></i>
                      </button>
                      <!--end::Item-->
                    </div>

                    <div class="float-right">
                      <!--begin::Help button-->
                      <a type="button" class="btn p-0 mx-2 btn-active-icon-primary">
                        <i class="fa-solid fa-circle-question fs-3"></i>
                      </a>
                      <!--end::Help button-->

                      <!--begin::Help button-->
                      <a type="button" class="btn p-0 btn-active-icon-primary" href="/tanimlamalar/dokuman-yonetimi/kabinet-tanimlari/yeni/#" data-bs-toggle="modal" data-bs-target="#tamEkran" >
                        <i class="fa-solid fa-arrows-maximize fs-3" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="bottom" title="Tam ekran"></i>
                      </a>
                      <!--end::Help button--> 
                    </div>
                  </div>
                  <!--end::Card actions-->
                </div>
              </div>
              <!--end::Goster content-->
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

<!-- begin::Modal -->
<div class="modal fade" tabindex="-1" id="tamEkran">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Belgeler</h5>

        <!--begin::Close-->
        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
          <i class="fa-solid fa-xmark"></i>
        </div>
        <!--end::Close-->
      </div>

      <div class="modal-body">
        <!--begin::Content -->
        <div class="px-6 pb-6 table-responsive overflow-x-auto min-w-1000px mt-4">
          <!--begin::Row-->
          <div class="row w-100 g-6">
            <!--begin::Menu Col-->
            <div class="col d-flex flex-column gap-4 mw-275px">
              <!--begin::Trash button-->
              <button type="button" class="btn d-flex align-items-center justify-content-between gap-4 border rounded-1 pw-bg-neutral-50 pw-border-stroke p-2">
                <div class="d-flex align-items-center gap-2">
                  <i class="fa-solid fa-trash-can-undo pw-text-danger-500"></i>
                  <span class="pw-text-neutral-700 fs-9 fw-semibold">Geri Dönüşüm (0)</span>
                </div>

                <i class="fa-solid fa-angle-right pw-text-neutral-500"></i>
              </button>
              <!--end::Trash button-->

              <!--begin::Menu-->
              <div class="menu menu-column gap-2 w-100 fw-semibold p-4 rounded-2 bg-white pw-shadow-3">
                <!--begin::Menu item-->
                <div class="menu-item">
                  <a href="/belgeler/kabinet/" class="menu-link py-1 px-0">
                    <span class="menu-icon">
                      <i class="fa-solid fa-id-card pw-text-primary-300"></i>
                    </span>
                    <span class="menu-title pw-text-neutral-700">Akçelik POC</span>
                  </a>
                </div>
                <!--end::Menu item-->

                <!--begin::Menu item-->
                <div class="menu-item">
                  <a href="/belgeler/#" class="menu-link py-1 px-0">
                    <span class="menu-icon">
                      <i class="fa-solid fa-h pw-text-primary-300"></i>
                    </span>
                    <span class="menu-title pw-text-neutral-700">Akfen Form Kabineti</span>
                  </a>
                </div>
                <!--end::Menu item-->

                <!--begin::Menu item-->
                <div class="menu-item">
                  <a href="/belgeler/#" class="menu-link py-1 px-0">
                    <span class="menu-icon">
                      <i class="fa-solid fa-flag pw-text-primary-300"></i>
                    </span>
                    <span class="menu-title pw-text-neutral-700">Aksiyon Belgeleri</span>
                  </a>
                </div>
                <!--end::Menu item-->

                <!--begin::Menu item-->
                <div class="menu-item">
                  <a href="/belgeler/#" class="menu-link py-1 px-0">
                    <span class="menu-icon">
                      <i class="fa-solid fa-flag pw-text-primary-300"></i>
                    </span>
                    <span class="menu-title pw-text-neutral-700">Aksiyon Takip</span>
                  </a>
                </div>
                <!--end::Menu item-->

                <!--begin::Menu item-->
                <div class="menu-item">
                  <a href="/belgeler/#" class="menu-link py-1 px-0">
                    <span class="menu-icon">
                      <i class="fa-solid fa-a pw-text-primary-300"></i>
                    </span>
                    <span class="menu-title pw-text-neutral-700">Alıcı Cari Hesap Açma DK</span>
                  </a>
                </div>
                <!--end::Menu item-->

                <!--begin::Menu item-->
                <div class="menu-item">
                  <a href="/belgeler/#" class="menu-link py-1 px-0">
                    <span class="menu-icon">
                      <i class="fa-solid fa-flag pw-text-primary-300"></i>
                    </span>
                    <span class="menu-title pw-text-neutral-700">Anket Arşivi</span>
                  </a>
                </div>
                <!--end::Menu item-->

                <!--begin::Menu item-->
                <div class="menu-item">
                  <a href="/belgeler/#" class="menu-link py-1 px-0">
                    <span class="menu-icon">
                      <i class="fa-solid fa-motorcycle pw-text-primary-300"></i>
                    </span>
                    <span class="menu-title pw-text-neutral-700">Araç Havuzu</span>
                  </a>
                </div>
                <!--end::Menu item-->

                <!--begin::Menu item-->
                <div class="menu-item">
                  <a href="/belgeler/#" class="menu-link py-1 px-0">
                    <span class="menu-icon">
                      <i class="fa-solid fa-basket-shopping pw-text-primary-300"></i>
                    </span>
                    <span class="menu-title pw-text-neutral-700">Araç Talep</span>
                  </a>
                </div>
                <!--end::Menu item-->

                <!--begin::Menu item-->
                <div class="menu-item">
                  <a href="/belgeler/#" class="menu-link py-1 px-0">
                    <span class="menu-icon">
                      <i class="fa-solid fa-basket-shopping pw-text-primary-300"></i>
                    </span>
                    <span class="menu-title pw-text-neutral-700">Araç Talep</span>
                  </a>
                </div>
                <!--end::Menu item-->

                <!--begin::Menu item-->
                <div class="menu-item">
                  <a href="/belgeler/#" class="menu-link py-1 px-0">
                    <span class="menu-icon">
                      <i class="fa-solid fa-basket-shopping pw-text-primary-300"></i>
                    </span>
                    <span class="menu-title pw-text-neutral-700">Araç Talep</span>
                  </a>
                </div>
                <!--end::Menu item-->

                <!--begin::Menu item-->
                <div class="menu-item">
                  <a href="/belgeler/#" class="menu-link py-1 px-0">
                    <span class="menu-icon">
                      <i class="fa-solid fa-folder pw-text-primary-300"></i>
                    </span>
                    <span class="menu-title pw-text-neutral-700">Araştırma Klasör Yetkileri Etkin</span>
                  </a>
                </div>
                <!--end::Menu item-->

                <!--begin::Menu item-->
                <div class="menu-item">
                  <a href="/belgeler/#" class="menu-link py-1 px-0">
                    <span class="menu-icon">
                      <i class="fa-solid fa-fish pw-text-primary-300"></i>
                    </span>
                    <span class="menu-title pw-text-neutral-700">Araştırma Merkezi Arşivi</span>
                  </a>
                </div>
                <!--end::Menu item-->
              </div>
              <!--end::Menu-->
            </div>
            <!--end::Menu Col-->

            <!--begin::Content col-->
            <div class="col">
              <!--begin::Card row-->
              <div class="row g-6">
                <!--begin::Card-->
                <div class="col-12 col-md-6 col-xl-4">
                  <div class="position-relative d-flex flex-column gap-5 py-6 px-7 bg-white border rounded-3 pw-border-stroke pw-shadow-3 overflow-hidden">
                    <!--begin::Content-->
                    <span class="pw-text-primary-900 fs-2x fw-bold">915</span>
                    <span class="pw-text-neutral-500 fs-base fw-semibold">Toplam Belge</span>
                    <!--end::Content-->

                    <!--begin::Icon-->
                    <div class="position-absolute" style="transform:rotate(10deg);top:-10px;right:-10px">
                      <i class="fa-solid fa-folder-open fs-5tx pw-text-neutral-200"></i>
                    </div>
                    <!--end::Icon-->
                  </div>
                </div>
                <!--end::Card-->

                <!--begin::Card-->
                <div class="col-12 col-md-6 col-xl-4">
                  <div class="position-relative d-flex flex-column gap-5 py-6 px-7 bg-white border rounded-3 pw-border-stroke pw-shadow-3 overflow-hidden">
                    <!--begin::Content-->
                    <span class="pw-text-primary-900 fs-2x fw-bold">759.53 Mb</span>
                    <span class="pw-text-neutral-500 fs-base fw-semibold">Toplam Belge Boyutu</span>
                    <!--end::Content-->

                    <!--begin::Icon-->
                    <div class="position-absolute" style="transform:rotate(10deg);top:-10px;right:-10px">
                      <i class="fa-solid fa-file-minus fs-5tx pw-text-neutral-200"></i>
                    </div>
                    <!--end::Icon-->
                  </div>
                </div>
                <!--end::Card-->

                <!--begin::Card-->
                <div class="col-12 col-md-6 col-xl-4">
                  <div class="position-relative d-flex flex-column gap-5 py-6 px-7 bg-white border rounded-3 pw-border-stroke pw-shadow-3 overflow-hidden">
                    <!--begin::Content-->
                    <span class="pw-text-primary-900 fs-2x fw-bold">872</span>
                    <span class="pw-text-neutral-500 fs-base fw-semibold">Toplam Belge Boyutu</span>
                    <!--end::Content-->

                    <!--begin::Icon-->
                    <div class="position-absolute" style="transform:rotate(10deg);top:-10px;right:-10px">
                      <i class="fa-solid fa-hard-drive fs-5tx pw-text-neutral-200"></i>
                    </div>
                    <!--end::Icon-->
                  </div>
                </div>
                <!--end::Card-->

                <!--begin::Card-->
                <div class="col-12 col-md-6 col-xl-4">
                  <div class="position-relative d-flex flex-column gap-5 py-6 px-7 bg-white border rounded-3 pw-border-stroke pw-shadow-3 overflow-hidden">
                    <!--begin::Content-->
                    <span class="pw-text-primary-900 fs-2x fw-bold">1,684</span>
                    <span class="pw-text-neutral-500 fs-base fw-semibold">Klasör Sayısı</span>
                    <!--end::Content-->

                    <!--begin::Icon-->
                    <div class="position-absolute" style="transform:rotate(10deg);top:-10px;right:-10px">
                      <i class="fa-solid fa-folder-open fs-5tx pw-text-neutral-200"></i>
                    </div>
                    <!--end::Icon-->
                  </div>
                </div>
                <!--end::Card-->

                <!--begin::Card-->
                <div class="col-12 col-md-6 col-xl-4">
                  <div class="position-relative d-flex flex-column gap-5 py-6 px-7 bg-white border rounded-3 pw-border-stroke pw-shadow-3 overflow-hidden">
                    <!--begin::Content-->
                    <span class="pw-text-primary-900 fs-2x fw-bold">363</span>
                    <span class="pw-text-neutral-500 fs-base fw-semibold">Toplam Eksik Belge</span>
                    <!--end::Content-->

                    <!--begin::Icon-->
                    <div class="position-absolute" style="transform:rotate(10deg);top:-10px;right:-10px">
                      <i class="fa-solid fa-file-minus fs-5tx pw-text-neutral-200"></i>
                    </div>
                    <!--end::Icon-->
                  </div>
                </div>
                <!--end::Card-->

                <!--begin::Card-->
                <div class="col-12 col-md-6 col-xl-4">
                  <div class="position-relative d-flex flex-column gap-5 py-5 px-7 bg-white border rounded-3 pw-border-stroke pw-shadow-3 overflow-hidden">
                    <!--begin::Content-->
                    <span class="pw-text-primary-900 fs-2x fw-bold">3</span>
                    <span class="pw-text-neutral-500 fs-base fw-semibold">Toplam Kısa Yol</span>
                    <!--end::Content-->

                    <!--begin::Icon-->
                    <div class="position-absolute" style="transform:rotate(10deg);top:-10px;right:-10px">
                      <i class="fa-solid fa-hard-drive fs-5tx pw-text-neutral-200"></i>
                    </div>
                    <!--end::Icon-->
                  </div>
                </div>
                <!--end::Card-->
              </div>
              <!--end::Card row-->

              <!--begin::Card row-->
              <div class="row g-6 mt-10">
                <!--begin::Card col-->
                <div class="col-12 col-xl-6">
                  <!--begin::Col-->
                  <div class="border rounded-3 pw-shadow-3 p-7 h-100">
                    <!--begin::Card header-->
                    <div class="d-flex justify-content-between gap-4 pb-4 border-bottom pw-border-stroke">
                      <!--begin::Title-->
                      <h3 class="pw-text-neutral-700 fs-3 fw-bolder">Check Out Yaptıklarım</h3>
                      <!--end::Title-->

                      <div class="d-flex align-items-center gap-4 ps-4 border-start pw-border-stroke">
                        <!--begin::Button-->
                        <button type="button" class="btn p-0">
                          <i class="fa-solid fa-chevrons-down fs-base pw-text-neutral-300"></i>
                        </button>
                        <!--end::Button-->

                        <!--begin::Button-->
                        <button type="button" class="btn p-0" data-bs-toggle="modal" data-bs-target="#check-out-yaptiklarim">
                          <i class="fa-solid fa-arrows-maximize fs-base pw-text-neutral-300"></i>
                        </button>
                        <!--end::Button-->
                      </div>
                    </div>
                    <!--end::Card header-->

                    <!--begin::Card body-->
                    <div class="py-4">
                      <!--begin::Table-->
                      <div class="table-responsive">
                        <table class="table mb-0">
                          <thead>
                            <tr class="fw-bold fs-9 pw-text-neutral-500 text-center border-bottom pw-border-stroke">
                              <th class="text-start">Nesne Adı</th>
                              <th>Tipi</th>
                              <th>Sahibi</th>
                              <th>Boyut</th>
                              <th class="text-end">Yaratılış Tarihi</th>
                            </tr>
                          </thead>
                        </table>
                      </div>
                      <!--end::begin::Table-->
                    </div>
                    <!--end::Card body-->
                  </div>
                  <!--end::Col-->
                </div>
                <!--end::Card col-->

                <!--begin::Card col-->
                <div class="col-12 col-xl-6">
                  <!--begin::Col-->
                  <div class="border rounded-3 pw-shadow-3 p-7 h-100">
                    <!--begin::Card header-->
                    <div class="d-flex justify-content-between gap-4 pb-4 border-bottom pw-border-stroke">
                      <!--begin::Title-->
                      <h3 class="pw-text-neutral-700 fs-3 fw-bolder">Arşiv Grafiği</h3>
                      <!--end::Title-->

                      <div class="d-flex align-items-center gap-4 ps-4 border-start pw-border-stroke">
                        <!--begin::Button-->
                        <button type="button" class="btn p-0">
                          <i class="fa-solid fa-chevrons-down fs-base pw-text-neutral-300"></i>
                        </button>
                        <!--end::Button-->

                        <!--begin::Button-->
                        <button type="button" class="btn p-0" data-bs-toggle="modal" data-bs-target="#arsiv-grafigi">
                          <i class="fa-solid fa-arrows-maximize fs-base pw-text-neutral-300"></i>
                        </button>
                        <!--end::Button-->
                      </div>
                    </div>
                    <!--end::Card header-->

                    <!--begin::Card body-->
                    <div class="py-4">
                      <!--begin::Chart-->
                      <canvas id="arsivGrafigiChart" class="mh-450px"></canvas>
                      <!--end::Chart-->
                    </div>
                    <!--end::Card body-->
                  </div>
                  <!--end::Col-->
                </div>
                <!--end::Card col-->

                <!--begin::Card col-->
                <div class="col-12 col-xl-6">
                  <!--begin::Col-->
                  <div class="border rounded-3 pw-shadow-3 p-7 h-100">
                    <!--begin::Card header-->
                    <div class="d-flex justify-content-between gap-4 pb-4 border-bottom pw-border-stroke">
                      <!--begin::Title-->
                      <h3 class="pw-text-neutral-700 fs-3 fw-bolder">Favorilerim</h3>
                      <!--end::Title-->

                      <div class="d-flex align-items-center gap-4 ps-4 border-start pw-border-stroke">
                        <!--begin::Button-->
                        <button type="button" class="btn p-0">
                          <i class="fa-solid fa-chevrons-down fs-base pw-text-neutral-300"></i>
                        </button>
                        <!--end::Button-->

                        <!--begin::Button-->
                        <button type="button" class="btn p-0" data-bs-toggle="modal" data-bs-target="#favorilerim">
                          <i class="fa-solid fa-arrows-maximize fs-base pw-text-neutral-300"></i>
                        </button>
                        <!--end::Button-->
                      </div>
                    </div>
                    <!--end::Card header-->

                    <!--begin::Card body-->
                    <div class="py-4">
                      <!--begin::Table-->
                      <div class="table-responsive fs-9 pw-text-neutral-700">
                        <table class="table mb-0">
                          <thead>
                            <tr class="fw-bold pw-text-neutral-500 border-bottom pw-border-stroke text-center">
                              <th class="text-start">Nesne Adı</th>
                              <th>Tipi</th>
                              <th>Sahibi</th>
                              <th>Boyut</th>
                              <th class="text-end">Yaratılış Tarihi</th>
                            </tr>
                          </thead>
                          <tbody class="text-center">
                            <!--begin::Row-->
                            <tr>
                              <td>
                                <div class="d-flex align-items-center gap-2">
                                  <i class="fa-solid fa-folder-plus fs-8 pw-text-primary-500"></i>
                                  <span>Eklenti</span>
                                </div>
                              </td>
                              <td>Araştır...</td>
                              <td>
                                <span id="testTool" class="fw-bolder cursor-pointer" data-bs-toggle="popover" data-bs-html="true" data-bs-placement="bottom" data-bs-custom-class="popover-inverse" data-bs-content="<table class='table fw-bold fs-9 text-white align-middle gx-1 gy-2'><tr><td class='pw-text-warning-500'>Nesne Adı:</td><td>Araştırma DK Şablonu</td></tr><tr><td class='pw-text-warning-500'>Tip Adı:</td><td>Araştırma Dosya Kartı Tipi</td></tr><tr><td class='pw-text-warning-500'>Tarih:</td><td>31/05/2023 - 15:30:04</td></tr><tr><td class='pw-text-warning-500'>Sahibi:</td><td>UIDESK</td></tr></table><div class='d-flex align-items-center gap-4 mt-6'><a href='javascript:void(0)'><i class='fa-solid fa-heart fs-8 pw-text-neutral-300'></i></a><a href='javascript:void(0)'><i class='fa-solid fa-star-sharp fs-8 pw-text-neutral-300'></i></a><a href='javascript:void(0)'><i class='fa-solid fa-clock-rotate-left fs-8 pw-text-neutral-300'></i></a><a href='javascript:void(0)'><i class='fa-solid fa-messages fs-8 pw-text-neutral-300'></i></a><a href='javascript:void(0)'><i class='fa-solid fa-message fs-8 pw-text-neutral-300'></i></a><a href='javascript:void(0)'><i class='fa-solid fa-lock fs-8 pw-text-neutral-300'></i></a></div>">
                                  UIDESK
                                </span>
                              </td>
                              <td>-</td>
                              <td class="text-end">31/05/20...</td>
                            </tr>
                            <!--end::Row-->

                            <!--begin::Row-->
                            <tr>
                              <td>
                                <div class="d-flex align-items-center gap-2">
                                  <i class="fa-solid fa-folder-plus fs-8 pw-text-primary-500"></i>
                                  <span>Eklenti</span>
                                </div>
                              </td>
                              <td>Araştır...</td>
                              <td>UIDESK</td>
                              <td>-</td>
                              <td class="text-end">31/05/20...</td>
                            </tr>
                            <!--end::Row-->

                            <!--begin::Row-->
                            <tr>
                              <td>
                                <div class="d-flex align-items-center gap-2">
                                  <i class="fa-solid fa-folder-plus fs-8 pw-text-primary-500"></i>
                                  <span>Görev Atama</span>
                                </div>
                              </td>
                              <td>Araştır...</td>
                              <td>UIDESK</td>
                              <td>-</td>
                              <td class="text-end">31/05/20...</td>
                            </tr>
                            <!--end::Row-->

                            <!--begin::Row-->
                            <tr>
                              <td>
                                <div class="d-flex align-items-center gap-2">
                                  <i class="fa-solid fa-file-lines fs-8 pw-text-primary-500"></i>
                                  <span>Genel</span>
                                </div>
                              </td>
                              <td>Araştır...</td>
                              <td>UIDESK</td>
                              <td>-</td>
                              <td class="text-end">31/05/20...</td>
                            </tr>
                            <!--end::Row-->

                            <!--begin::Row-->
                            <tr>
                              <td>
                                <div class="d-flex align-items-center gap-2">
                                  <i class="fa-solid fa-file-lines fs-8 pw-text-primary-500"></i>
                                  <span>Anket Taslak</span>
                                </div>
                              </td>
                              <td>Araştır...</td>
                              <td>UIDESK</td>
                              <td>-</td>
                              <td class="text-end">31/05/20...</td>
                            </tr>
                            <!--end::Row-->

                            <!--begin::Row-->
                            <tr>
                              <td>
                                <div class="d-flex align-items-center gap-2">
                                  <i class="fa-solid fa-file-lines fs-8 pw-text-primary-500"></i>
                                  <span>Screenshots</span>
                                </div>
                              </td>
                              <td>Araştır...</td>
                              <td>UIDESK</td>
                              <td>-</td>
                              <td class="text-end">31/05/20...</td>
                            </tr>
                            <!--end::Row-->

                            <!--begin::Row-->
                            <tr>
                              <td>
                                <div class="d-flex align-items-center gap-2">
                                  <i class="fa-solid fa-folder-plus fs-8 pw-text-primary-500"></i>
                                  <span>Araştırma D...</span>
                                </div>
                              </td>
                              <td>Araştır...</td>
                              <td>UIDESK</td>
                              <td>-</td>
                              <td class="text-end">31/05/20...</td>
                            </tr>
                            <!--end::Row-->

                            <!--begin::Row-->
                            <tr></tr>
                            <td>
                              <div class="d-flex align-items-center gap-2">
                                <i class="fa-solid fa-file-lines fs-8 pw-text-primary-500"></i>
                                <span>Araştırma D...</span>
                              </div>
                            </td>
                            <td>Araştır...</td>
                            <td>UIDESK</td>
                            <td>-</td>
                            <td class="text-end">31/05/20...</td>
                            </tr>
                            <!--end::Row-->
                          </tbody>
                        </table>
                      </div>
                      <!--end::begin::Table-->
                    </div>
                    <!--end::Card body-->
                  </div>
                  <!--end::Col-->
                </div>
                <!--end::Card col-->

                <!--begin::Card col-->
                <div class="col-12 col-xl-6">
                  <!--begin::Col-->
                  <div class="border rounded-3 pw-shadow-3 p-7 h-100">
                    <!--begin::Card header-->
                    <div class="d-flex justify-content-between gap-4 pb-4 border-bottom pw-border-stroke">
                      <!--begin::Title-->
                      <h3 class="pw-text-neutral-700 fs-3 fw-bolder">Kaydettiklerim</h3>
                      <!--end::Title-->

                      <div class="d-flex align-items-center gap-4 ps-4 border-start pw-border-stroke">
                        <!--begin::Button-->
                        <button type="button" class="btn p-0">
                          <i class="fa-solid fa-chevrons-down fs-base pw-text-neutral-300"></i>
                        </button>
                        <!--end::Button-->

                        <!--begin::Button-->
                        <button type="button" class="btn p-0" data-bs-toggle="modal" data-bs-target="#kaydettiklerim">
                          <i class="fa-solid fa-arrows-maximize fs-base pw-text-neutral-300"></i>
                        </button>
                        <!--end::Button-->
                      </div>
                    </div>
                    <!--end::Card header-->

                    <!--begin::Card body-->
                    <div class="py-4">
                      <!--begin::Table-->
                      <div class="table-responsive fs-9 pw-text-neutral-700">
                        <table class="table mb-0">
                          <thead>
                            <tr class="fw-bold pw-text-neutral-500 border-bottom pw-border-stroke text-center">
                              <th class="text-start">Nesne Adı</th>
                              <th>Tipi</th>
                              <th>Sahibi</th>
                              <th>Boyut</th>
                              <th class="text-end">Yaratılış Tarihi</th>
                            </tr>
                          </thead>
                          <tbody class="text-center">
                            <!--begin::Row-->
                            <tr>
                              <td>
                                <div class="d-flex align-items-center gap-2">
                                  <i class="fa-solid fa-folder-plus fs-8 pw-text-primary-500"></i>
                                  <span>Araştırma D...</span>
                                </div>
                              </td>
                              <td>Araştır</td>
                              <td>UIDESK</td>
                              <td>-</td>
                              <td class="text-end">31/05/20...</td>
                            </tr>
                            <!--end::Row-->

                            <!--begin::Row-->
                            <tr>
                              <td>
                                <div class="d-flex align-items-center gap-2">
                                  <i class="fa-solid fa-folder-plus fs-8 pw-text-primary-500"></i>
                                  <span>Araştırma D...</span>
                                </div>
                              </td>
                              <td>Araştır</td>
                              <td>UIDESK</td>
                              <td>-</td>
                              <td class="text-end">31/05/20...</td>
                            </tr>
                            <!--end::Row-->

                            <!--begin::Row-->
                            <tr>
                              <td>
                                <div class="d-flex align-items-center gap-2">
                                  <i class="fa-solid fa-folder-plus fs-8 pw-text-primary-500"></i>
                                  <span>Araştırma D...</span>
                                </div>
                              </td>
                              <td>Araştır</td>
                              <td>UIDESK</td>
                              <td>-</td>
                              <td class="text-end">31/05/20...</td>
                            </tr>
                            <!--end::Row-->

                            <!--begin::Row-->
                            <tr>
                              <td>
                                <div class="d-flex align-items-center gap-2">
                                  <i class="fa-solid fa-folder-plus fs-8 pw-text-primary-500"></i>
                                  <span>Araştırma D...</span>
                                </div>
                              </td>
                              <td>Araştır</td>
                              <td>UIDESK</td>
                              <td>-</td>
                              <td class="text-end">31/05/20...</td>
                            </tr>
                            <!--end::Row-->

                            <!--begin::Row-->
                            <tr>
                              <td>
                                <div class="d-flex align-items-center gap-2">
                                  <i class="fa-solid fa-folder-plus fs-8 pw-text-primary-500"></i>
                                  <span>Araştırma D...</span>
                                </div>
                              </td>
                              <td>Araştır</td>
                              <td>UIDESK</td>
                              <td>-</td>
                              <td class="text-end">31/05/20...</td>
                            </tr>
                            <!--end::Row-->

                            <!--begin::Row-->
                            <tr>
                              <td>
                                <div class="d-flex align-items-center gap-2">
                                  <i class="fa-solid fa-folder-plus fs-8 pw-text-primary-500"></i>
                                  <span>Araştırma D...</span>
                                </div>
                              </td>
                              <td>Araştır</td>
                              <td>UIDESK</td>
                              <td>-</td>
                              <td class="text-end">31/05/20...</td>
                            </tr>
                            <!--end::Row-->

                            <!--begin::Row-->
                            <tr>
                              <td>
                                <div class="d-flex align-items-center gap-2">
                                  <i class="fa-solid fa-folder-plus fs-8 pw-text-primary-500"></i>
                                  <span>Araştırma D...</span>
                                </div>
                              </td>
                              <td>Araştır</td>
                              <td>UIDESK</td>
                              <td>-</td>
                              <td class="text-end">31/05/20...</td>
                            </tr>
                            <!--end::Row-->

                            <!--begin::Row-->
                            <tr>
                              <td>
                                <div class="d-flex align-items-center gap-2">
                                  <i class="fa-solid fa-folder-plus fs-8 pw-text-primary-500"></i>
                                  <span>Araştırma D...</span>
                                </div>
                              </td>
                              <td>Araştır</td>
                              <td>UIDESK</td>
                              <td>-</td>
                              <td class="text-end">31/05/20...</td>
                            </tr>
                            <!--end::Row-->
                          </tbody>
                        </table>
                      </div>
                      <!--end::begin::Table-->
                    </div>
                    <!--end::Card body-->
                  </div>
                  <!--end::Col-->
                </div>
                <!--end::Card col-->

                <!--begin::Card col-->
                <div class="col-12 col-xl-6">
                  <!--begin::Col-->
                  <div class="border rounded-3 pw-shadow-3 p-7 h-100">
                    <!--begin::Card header-->
                    <div class="d-flex justify-content-between gap-4 pb-4 border-bottom pw-border-stroke">
                      <!--begin::Title-->
                      <h3 class="pw-text-neutral-700 fs-3 fw-bolder">Görüntülediklerim</h3>
                      <!--end::Title-->

                      <div class="d-flex align-items-center gap-4 ps-4 border-start pw-border-stroke">
                        <!--begin::Button-->
                        <button type="button" class="btn p-0">
                          <i class="fa-solid fa-chevrons-down fs-base pw-text-neutral-300"></i>
                        </button>
                        <!--end::Button-->

                        <!--begin::Button-->
                        <button type="button" class="btn p-0" data-bs-toggle="modal" data-bs-target="#goruntulediklerim">
                          <i class="fa-solid fa-arrows-maximize fs-base pw-text-neutral-300"></i>
                        </button>
                        <!--end::Button-->
                      </div>
                    </div>
                    <!--end::Card header-->

                    <!--begin::Card body-->
                    <div class="py-4">
                      <!--begin::Table-->
                      <div class="table-responsive fs-9 pw-text-neutral-700">
                        <table class="table pw-table-text-overflow mb-0">
                          <thead>
                            <tr class="fw-bold pw-text-neutral-500 border-bottom pw-border-stroke text-center">
                              <th class="text-start">Nesne Adı</th>
                              <th>Tipi</th>
                              <th>Sahibi</th>
                              <th>Boyut</th>
                              <th class="text-end">Yaratılış Tarihi</th>
                            </tr>
                          </thead>
                          <tbody class="text-center">
                            <!--begin::Row-->
                            <tr>
                              <td>
                                <div class="d-flex align-items-center gap-2">
                                  <i class="fa-solid fa-file-lines fs-8 pw-text-primary-500"></i>
                                  <span>10.21224-jj...</span>
                                </div>
                              </td>
                              <td>KT Ne..</td>
                              <td>Ezgi Çelik</td>
                              <td>1.64 Mb</td>
                              <td class="text-end">31/05/2023</td>
                            </tr>
                            <!--end::Row-->

                            <!--begin::Row-->
                            <tr>
                              <td>
                                <div class="d-flex align-items-center gap-2">
                                  <i class="fa-solid fa-file-lines fs-8 pw-text-primary-500"></i>
                                  <span>3</span>
                                </div>
                              </td>
                              <td>Araştır</td>
                              <td>Cemil Cih..</td>
                              <td>1.64 Mb</td>
                              <td class="text-end">31/05/2023</td>
                            </tr>
                            <!--end::Row-->

                            <!--begin::Row-->
                            <tr>
                              <td>
                                <div class="d-flex align-items-center gap-2">
                                  <i class="fa-solid fa-file-lines fs-8 pw-text-primary-500"></i>
                                  <span>Avans Talep</span>
                                </div>
                              </td>
                              <td>Fatura</td>
                              <td>Ezgi Çelik</td>
                              <td>1.64 Mb</td>
                              <td class="text-end">31/05/2023</td>
                            </tr>
                            <!--end::Row-->

                            <!--begin::Row-->
                            <tr>
                              <td>
                                <div class="d-flex align-items-center gap-2">
                                  <i class="fa-solid fa-file-lines fs-8 pw-text-primary-500"></i>
                                  <span>Belge Taslak</span>
                                </div>
                              </td>
                              <td>Araştır</td>
                              <td>Ezgi Çelik</td>
                              <td>1.64 Mb</td>
                              <td class="text-end">31/05/2023</td>
                            </tr>
                            <!--end::Row-->

                            <!--begin::Row-->
                            <tr>
                              <td>
                                <div class="d-flex align-items-center gap-2">
                                  <i class="fa-solid fa-file-lines fs-8 pw-text-primary-500"></i>
                                  <span>Blue</span>
                                </div>
                              </td>
                              <td>Araştır</td>
                              <td>Cemil Cih...</td>
                              <td>1.64 Mb</td>
                              <td class="text-end">31/05/2023</td>
                            </tr>
                            <!--end::Row-->

                            <!--begin::Row-->
                            <tr>
                              <td>
                                <div class="d-flex align-items-center gap-2">
                                  <i class="fa-solid fa-file-lines fs-8 pw-text-primary-500"></i>
                                  <span>Bluee.min</span>
                                </div>
                              </td>
                              <td>Araştır</td>
                              <td>Ezgi Çelik</td>
                              <td>1.64 Mb</td>
                              <td class="text-end">31/05/2023</td>
                            </tr>
                            <!--end::Row-->

                            <!--begin::Row-->
                            <tr>
                              <td>
                                <div class="d-flex align-items-center gap-2">
                                  <i class="fa-solid fa-file-lines fs-8 pw-text-primary-500"></i>
                                  <span>Belge Taslak</span>
                                </div>
                              </td>
                              <td>Araştır</td>
                              <td>UIDESK</td>
                              <td>1.64 Mb</td>
                              <td class="text-end">31/05/2023</td>
                            </tr>
                            <!--end::Row-->

                            <!--begin::Row-->
                            <tr>
                              <td>
                                <div class="d-flex align-items-center gap-2">
                                  <i class="fa-solid fa-file-lines fs-8 pw-text-primary-500"></i>
                                  <span>Avans Talep</span>
                                </div>
                              </td>
                              <td>Araştır</td>
                              <td>UIDESK</td>
                              <td>1.64 Mb</td>
                              <td class="text-end">31/05/2023</td>
                            </tr>
                            <!--end::Row-->

                            <!--begin::Row-->
                            <tr>
                              <td>
                                <div class="d-flex align-items-center gap-2">
                                  <i class="fa-solid fa-file-lines fs-8 pw-text-primary-500"></i>
                                  <span>Araştırma D...</span>
                                </div>
                              </td>
                              <td>Araştır</td>
                              <td>UIDESK</td>
                              <td>1.64 Mb</td>
                              <td class="text-end">31/05/2023</td>
                            </tr>
                            <!--end::Row-->
                          </tbody>
                        </table>
                      </div>
                      <!--end::begin::Table-->
                    </div>
                    <!--end::Card body-->
                  </div>
                  <!--end::Col-->
                </div>
                <!--end::Card col-->

                <!--begin::Card col-->
                <div class="col-12 col-xl-6">
                  <!--begin::Col-->
                  <div class="border rounded-3 pw-shadow-3 p-7 h-100">
                    <!--begin::Card header-->
                    <div class="d-flex justify-content-between gap-4 pb-4 border-bottom pw-border-stroke">
                      <div class="d-flex align-items-center justify-content-between gap-3 flex-fill">
                        <!--begin::Title-->
                        <h3 class="pw-text-neutral-700 fs-3 fw-bolder">Aktiviteler</h3>
                        <!--end::Title-->

                        <!--begin::User Select-->
                        <div class="form-floating border rounded">
                          <select class="form-select fs-9 pw-text-neutral-500 py-1 ps-2 pe-4 pw-border-stroke pw-bg-neutral-50" placeholder="Seçim Yapın" id="pw_aktiviteler_user">
                            <option></option>
                            <option value="0" data-pw-select2-icon="fa-solid fa-user fs-9 pw-text-neutral-500" selected>Benim
                            </option>
                          </select>
                        </div>
                        <!--end::User Select-->
                      </div>

                      <div class="d-flex align-items-center gap-4 ps-4 border-start pw-border-stroke">
                        <!--begin::Button-->
                        <button type="button" class="btn p-0">
                          <i class="fa-solid fa-arrows-rotate fs-base pw-text-neutral-300"></i>
                        </button>
                        <!--end::Button-->

                        <!--begin::Button-->
                        <button type="button" class="btn p-0">
                          <i class="fa-solid fa-chevrons-down fs-base pw-text-neutral-300"></i>
                        </button>
                        <!--end::Button-->

                        <!--begin::Button-->
                        <button type="button" class="btn p-0" data-bs-toggle="modal" data-bs-target="#aktiviteler">
                          <i class="fa-solid fa-arrows-maximize fs-base pw-text-neutral-300"></i>
                        </button>
                        <!--end::Button-->
                      </div>
                    </div>
                    <!--end::Card header-->

                    <!--begin::Card body-->
                    <div class="pt-4">
                      <!--begin::Table-->
                      <div class="table-responsive fs-9 pw-text-neutral-700">
                        <table class="table pw-table-text-overflow gy-2 mb-0">
                          <tbody>
                            <!--begin::Row-->
                            <tr>
                              <td>
                                <!--begin::Checkbox-->
                                <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                                  <input class="form-check-input" type="checkbox" value="" id="pw_aktiviteler_1" checked="checked" />
                                  <label class="form-check-label pw-text-neutral-700 fs-8" for="pw_aktiviteler_1">
                                    UIDESK tarafından check-out iptal edildi.
                                  </label>
                                </div>
                                <!--end::Checkbox-->
                              </td>
                              <td class="pw-text-neutral-400 text-end">Perşembe 11:58:04</td>
                            </tr>
                            <!--end::Row-->

                            <!--begin::Row-->
                            <tr>
                              <td>
                                <!--begin::Checkbox-->
                                <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                                  <input class="form-check-input" type="checkbox" value="" id="pw_aktiviteler_2" checked="checked" />
                                  <label class="form-check-label pw-text-neutral-700 fs-8" for="pw_aktiviteler_2">
                                    UIDESK tarafından Anket Kullanıcı Raporu isimli raporu çalıştırdı.
                                  </label>
                                </div>
                                <!--end::Checkbox-->
                              </td>
                              <td class="pw-text-neutral-400 text-end">Salı 16:31:26</td>
                            </tr>
                            <!--end::Row-->

                            <!--begin::Row-->
                            <tr>
                              <td>
                                <!--begin::Checkbox-->
                                <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                                  <input class="form-check-input" type="checkbox" value="" id="pw_aktiviteler_3" checked="checked" />
                                  <label class="form-check-label pw-text-neutral-700 fs-8" for="pw_aktiviteler_3">
                                    UIDESK tarafından yeni dosya kartı kaydı oluşturuldu.
                                  </label>
                                </div>
                                <!--end::Checkbox-->
                              </td>
                              <td class="pw-text-neutral-400 text-end">Perşembe 11:58:04</td>
                            </tr>
                            <!--end::Row-->

                            <!--begin::Row-->
                            <tr>
                              <td>
                                <!--begin::Checkbox-->
                                <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                                  <input class="form-check-input" type="checkbox" value="" id="pw_aktiviteler_4" checked="checked" />
                                  <label class="form-check-label pw-text-neutral-700 fs-8" for="pw_aktiviteler_4">
                                    UIDESK tarafından klasör eklendi.
                                  </label>
                                </div>
                                <!--end::Checkbox-->
                              </td>
                              <td class="pw-text-neutral-400 text-end">31.05.2023 12:31:01</td>
                            </tr>
                            <!--end::Row-->

                            <!--begin::Row-->
                            <tr>
                              <td>
                                <!--begin::Checkbox-->
                                <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                                  <input class="form-check-input" type="checkbox" value="" id="pw_aktiviteler_4" checked="checked" />
                                  <label class="form-check-label pw-text-neutral-700 fs-8" for="pw_aktiviteler_4">
                                    UIDESK tarafından klasör eklendi.
                                  </label>
                                </div>
                                <!--end::Checkbox-->
                              </td>
                              <td class="pw-text-neutral-400 text-end">31.05.2023 12:31:01</td>
                            </tr>
                            <!--end::Row-->

                            <!--begin::Row-->
                            <tr>
                              <td>
                                <!--begin::Checkbox-->
                                <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                                  <input class="form-check-input" type="checkbox" value="" id="pw_aktiviteler_5" checked="checked" />
                                  <label class="form-check-label pw-text-neutral-700 fs-8" for="pw_aktiviteler_5">
                                    UIDESK tarafından yeni dosya kartı kaydı oluşturuldu.
                                  </label>
                                </div>
                                <!--end::Checkbox-->
                              </td>
                              <td class="pw-text-neutral-400 text-end">31.05.2023 12:31:01</td>
                            </tr>
                            <!--end::Row-->

                            <!--begin::Row-->
                            <tr>
                              <td>
                                <!--begin::Checkbox-->
                                <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                                  <input class="form-check-input" type="checkbox" value="" id="pw_aktiviteler_6" checked="checked" />
                                  <label class="form-check-label pw-text-neutral-700 fs-8" for="pw_aktiviteler_6">
                                    UIDESK tarafından check-out iptal edildi.
                                  </label>
                                </div>
                                <!--end::Checkbox-->
                              </td>
                              <td class="pw-text-neutral-400 text-end">31.05.2023 12:31:01</td>
                            </tr>
                            <!--end::Row-->

                            <!--begin::Row-->
                            <tr>
                              <td>
                                <!--begin::Checkbox-->
                                <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                                  <input class="form-check-input" type="checkbox" value="" id="pw_aktiviteler_6" checked="checked" />
                                  <label class="form-check-label pw-text-neutral-700 fs-8" for="pw_aktiviteler_6">
                                    UIDESK tarafından check-out iptal edildi.
                                  </label>
                                </div>
                                <!--end::Checkbox-->
                              </td>
                              <td class="pw-text-neutral-400 text-end">31.05.2023 12:31:01</td>
                            </tr>
                            <!--end::Row-->

                            <!--begin::Row-->
                            <tr>
                              <td>
                                <!--begin::Checkbox-->
                                <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                                  <input class="form-check-input" type="checkbox" value="" id="pw_aktiviteler_6" checked="checked" />
                                  <label class="form-check-label pw-text-neutral-700 fs-8" for="pw_aktiviteler_6">
                                    UIDESK tarafından check-out iptal edildi.
                                  </label>
                                </div>
                                <!--end::Checkbox-->
                              </td>
                              <td class="pw-text-neutral-400 text-end">31.05.2023 12:31:01</td>
                            </tr>
                            <!--end::Row-->

                            <!--begin::Row-->
                            <tr>
                              <td>
                                <!--begin::Checkbox-->
                                <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                                  <input class="form-check-input" type="checkbox" value="" id="pw_aktiviteler_6" checked="checked" />
                                  <label class="form-check-label pw-text-neutral-700 fs-8" for="pw_aktiviteler_6">
                                    UIDESK tarafından check-out iptal edildi.
                                  </label>
                                </div>
                                <!--end::Checkbox-->
                              </td>
                              <td class="pw-text-neutral-400 text-end">31.05.2023 12:31:01</td>
                            </tr>
                            <!--end::Row-->
                          </tbody>
                        </table>
                      </div>
                      <!--end::begin::Table-->
                    </div>
                    <!--end::Card body-->
                  </div>
                  <!--end::Col-->
                </div>
                <!--end::Card col-->
              </div>
              <!--end::Card row-->
            </div>
            <!--end::Content col-->
          </div>
          <!--end::Row-->
        </div>
        <!--end::Content -->
      </div>

      <div class="modal-footer border-0">
        <button type="reset" class="btn btn-active-light pw-btn-text-neutral-500 py-2 px-4 me-2 fs-8" data-bs-dismiss="modal">
          İptal
        </button>
        <button type="submit" class="btn btn-primary py-2 px-4 fs-8">
          Kaydet
        </button>
      </div>
    </div>
  </div>
</div>
<!-- end::Modal -->

<!--begin::Arsiv grafigi chart-->
<script>
  window.addEventListener('DOMContentLoaded', () => {
    var ctx = document.getElementById('arsivGrafigiChart');

    // Define colors
    var primaryColor = KTUtil.getCssVariableValue('--kt-primary');
    var dangerColor = KTUtil.getCssVariableValue('--kt-danger');
    var successColor = KTUtil.getCssVariableValue('--kt-success');
    var warningColor = KTUtil.getCssVariableValue('--kt-warning');
    var infoColor = KTUtil.getCssVariableValue('--kt-info');

    // Define fonts
    var fontFamily = KTUtil.getCssVariableValue('--bs-font-sans-serif');

    // Chart labels
    const labels = ['January', 'February', 'March', 'April', 'May'];

    const sampleData = [10, 20, 30, 40, 50];

    // Chart data
    const data = {
      labels: labels,
      datasets: [{
          label: 'Veri Seti 1', // Veri seti için bir etiket belirleyin.
          data: sampleData, // Veri setinin içeriğini ekleyin.
          backgroundColor: 'rgba(75, 192, 192, 0.2)', // Çubukların arka plan rengini ayarlayın.
          borderColor: 'rgba(75, 192, 192, 1)', // Çubukların kenarlık rengini ayarlayın.
          borderWidth: 1 // Çubukların kenarlık kalınlığını ayarlayın.
        },
        // İhtiyacınıza göre daha fazla veri seti ekleyebilirsiniz.
      ]
    };

    // Chart config
    const config = {
      type: 'pie',
      data: data,
      options: {
        plugins: {
          title: {
            display: false,
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
<!--end::Arsiv grafigi chart-->

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/foot.php'; ?>