<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/header.php'; ?>

<!--begin::Wrapper-->
<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">

  <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/sidebar.php'; ?>
  <!--begin::Main-->
  <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
      <!--begin::Row-->
      <div class="row g-0 mb-5 mb-xl-10">
        <!--begin::Col-->
        <div class="col py-7">
          <!--begin::Toolbar-->
          <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
              <!--begin::Page title-->
              <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-dark fw-bold fs-4 flex-column justify-content-center my-0">
                  Sistem Raporları
                </h1>
                <!--end::Title-->
              </div>
              <!--end::Page title-->
            </div>
            <!--end::Toolbar container-->
          </div>
          <!--end::Toolbar-->
          <!--begin::Content-->
          <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-fluid">
              <!--begin::Main wrapper-->
              <!--begin::Dashboard nav wrapper-->
              <div class="table-responsive">
                <!--begin::Dashboard nav tabs-->
                <ul class="nav pw-dashboard-nav-tabs nav-tabs nav-line-tabs fs-6">
                  <!--begin::Nav item-->
                  <li class="nav-item">
                    <a class="nav-link mx-0 py-3 px-10 fs-base rounded-0 active fw-medium" data-bs-toggle="tab" href="#pw_tab_pane_surec_yonetimi">Süreç Yönetimi</a>
                  </li>
                  <!--end::Nav item-->

                  <!--begin::Nav item-->
                  <li class="nav-item">
                    <a class="nav-link py-3 px-10 mx-0 fs-base fw-medium rounded-0 pw-text-neutral-500" data-bs-toggle="tab" href="#pw_tab_pane_dy">Döküman Yönetimi</a>
                  </li>
                  <!--end::Nav item-->

                  <!--begin::Nav item-->
                  <li class="nav-item">
                    <a class="nav-link py-3 px-10 mx-0 fs-base fw-medium rounded-0 pw-text-neutral-500" data-bs-toggle="tab" href="#pw_tab_pane_sistem">Sistem</a>
                  </li>
                  <!--end::Nav item-->
                </ul>
                <!--end::Dashboard nav tabs-->
              </div>
              <!--end::Dashboard nav wrapper-->

              <!--begin::Dashboard tab contents-->
              <div class="tab-content pw-dashboard-tab-content mt-5" id="myTabContent">
                <!--begin::Süreç Yönetimi contents-->
                <div class="tab-pane fade show active" id="pw_tab_pane_surec_yonetimi" role="tabpanel">
                  <!--begin::Content wrapper-->
                  <div class="d-flex column-gap-5 row-gap-10 flex-wrap">
                    <!--begin::Card-->
                    <a class="hover-elevate-up" href="/sistem-raporlari/surec-yonetimi/akis-istatistikleri">
                      <div class="card border pw-border-stroke py-1 px-6 mb-2 pw-rounded-5 pw-min-w-180px min-h-95px">
                        <div class="card-body d-flex align-items justify-content-center">
                          <span class="position-relative svg-icon mt-n5">
                            <span class="position-relative d-inline-flex align-items-center justify-content-center z-index-2 w-60px h-60px">
                              <i class="fa-solid fa-chart-line-up-down fs-60px pw-text-primary-300"></i>
                            </span>
                            <span class="position-absolute d-inline-block w-60px h-60px rounded-pill pw-bg-primary-100 start-50" style="transform: translate(-50%, 10px)"></span>
                          </span>
                        </div>
                      </div>
                      <span class="mt-2 pw-text-primary-800 fs-6 fw-bold">
                        Akış İstatistikleri
                      </span>
                    </a>
                    <!--end::Card-->

                    <!--begin::Card-->
                    <a class="hover-elevate-up" href="/sistem-raporlari/surec-yonetimi/kpi-olcum">
                      <div class="card border pw-border-stroke py-1 px-6 mb-2 pw-rounded-5 pw-min-w-180px min-h-95px">
                        <div class="card-body d-flex align-items justify-content-center">
                          <span class="position-relative svg-icon mt-n5">
                            <span class="position-relative d-inline-flex align-items-center justify-content-center z-index-2 w-60px h-60px">
                              <i class="fa-solid fa-grid-2 fs-60px pw-text-primary-300"></i>
                            </span>
                            <span class="position-absolute d-inline-block w-60px h-60px rounded-pill pw-bg-primary-100 start-50" style="transform: translate(-50%, 10px)"></span>
                          </span>
                        </div>
                      </div>
                      <span class="mt-2 pw-text-primary-800 fs-6 fw-bold">
                        KPI Ölçüm
                      </span>
                    </a>
                    <!--end::Card-->

                    <!--begin::Card-->
                    <a class="hover-elevate-up" href="/sistem-raporlari/surec-yonetimi/vekalet">
                      <div class="card border pw-border-stroke py-1 px-6 mb-2 pw-rounded-5 pw-min-w-180px min-h-95px">
                        <div class="card-body d-flex align-items justify-content-center">
                          <span class="position-relative svg-icon mt-n5">
                            <span class="position-relative d-inline-flex align-items-center justify-content-center z-index-2 w-60px h-60px">
                              <i class="fa-solid fa-user-gear fs-60px pw-text-primary-300"></i>
                            </span>
                            <span class="position-absolute d-inline-block w-60px h-60px rounded-pill pw-bg-primary-100 start-50" style="transform: translate(-50%, 10px)"></span>
                          </span>
                        </div>
                      </div>
                      <span class="mt-2 pw-text-primary-800 fs-6 fw-bold">
                        Vekalet
                      </span>
                    </a>
                    <!--end::Card-->
                  </div>
                  <!--end::Content wrapper-->
                </div>
                <!--end::Süreç Yönetimi contents-->

                <!--begin::Döküman Yönetimi contents-->
                <div class="tab-pane fade" id="pw_tab_pane_dy" role="tabpanel">
                  <!--begin::Content wrapper-->
                  <div class="d-flex column-gap-5 row-gap-10 flex-wrap">
                    <!--begin::Card-->
                    <a class="hover-elevate-up" href="/sistem-raporlari/dokuman-yonetimi/arsiv">
                      <div class="card border pw-border-stroke py-1 px-6 mb-2 pw-rounded-5 pw-min-w-180px min-h-95px">
                        <div class="card-body d-flex align-items justify-content-center">
                          <span class="position-relative svg-icon mt-n5">
                            <span class="position-relative d-inline-flex align-items-center justify-content-center z-index-2 w-60px h-60px">
                              <i class="fa-solid fa-file-chart-pie fs-60px pw-text-primary-300"></i>
                            </span>
                            <span class="position-absolute d-inline-block w-60px h-60px rounded-pill pw-bg-primary-100 start-50" style="transform: translate(-50%, 10px)"></span>
                          </span>
                        </div>
                      </div>
                      <span class="mt-2 pw-text-primary-800 fs-6 fw-bold">
                        Arşiv
                      </span>
                    </a>
                    <!--end::Card-->

                    <!--begin::Card-->
                    <a class="hover-elevate-up" href="/sistem-raporlari/dokuman-yonetimi/gelen-e-faturalar">
                      <div class="card border pw-border-stroke py-1 px-6 mb-2 pw-rounded-5 pw-min-w-180px min-h-95px">
                        <div class="card-body d-flex align-items justify-content-center">
                          <span class="position-relative svg-icon mt-n5">
                            <span class="position-relative d-inline-flex align-items-center justify-content-center z-index-2 w-60px h-60px">
                              <i class="fa-solid fa-clipboard-medical fs-60px pw-text-primary-300"></i>
                            </span>
                            <span class="position-absolute d-inline-block w-60px h-60px rounded-pill pw-bg-primary-100 start-50" style="transform: translate(-50%, 10px)"></span>
                          </span>
                        </div>
                      </div>
                      <span class="mt-2 pw-text-primary-800 fs-6 fw-bold">
                        Gelen E-Faturalar
                      </span>
                    </a>
                    <!--end::Card-->

                    <!--begin::Card-->
                    <a class="hover-elevate-up" href="/sistem-raporlari/dokuman-yonetimi/goruntulenmis-belgeler">
                      <div class="card border pw-border-stroke py-1 px-6 mb-2 pw-rounded-5 pw-min-w-180px min-h-95px">
                        <div class="card-body d-flex align-items justify-content-center">
                          <span class="position-relative svg-icon mt-n5">
                            <span class="position-relative d-inline-flex align-items-center justify-content-center z-index-2 w-60px h-60px">
                              <i class="fa-solid fa-files fs-60px pw-text-primary-300"></i>
                            </span>
                            <span class="position-absolute d-inline-block w-60px h-60px rounded-pill pw-bg-primary-100 start-50" style="transform: translate(-50%, 10px)"></span>
                          </span>
                        </div>
                      </div>
                      <span class="mt-2 pw-text-primary-800 fs-6 fw-bold">
                        Görüntülenmiş Belgeler
                      </span>
                    </a>
                    <!--end::Card-->

                    <!--begin::Card-->
                    <a class="hover-elevate-up" href="/sistem-raporlari/dokuman-yonetimi/silinmis-belgeler">
                      <div class="card border pw-border-stroke py-1 px-6 mb-2 pw-rounded-5 pw-min-w-180px min-h-95px">
                        <div class="card-body d-flex align-items justify-content-center">
                          <span class="position-relative svg-icon mt-n5">
                            <span class="position-relative d-inline-flex align-items-center justify-content-center z-index-2 w-60px h-60px">
                              <i class="fa-solid fa-laptop-file fs-60px pw-text-primary-300"></i>
                            </span>
                            <span class="position-absolute d-inline-block w-60px h-60px rounded-pill pw-bg-primary-100 start-50" style="transform: translate(-50%, 10px)"></span>
                          </span>
                        </div>
                      </div>
                      <span class="mt-2 pw-text-primary-800 fs-6 fw-bold">
                        Silinmiş Belgeler
                      </span>
                    </a>
                    <!--end::Card-->

                    <!--begin::Card-->
                    <a class="hover-elevate-up" href="/sistem-raporlari/dokuman-yonetimi/isdd-veri-goruntuleme">
                      <div class="card border pw-border-stroke py-1 px-6 mb-2 pw-rounded-5 pw-min-w-180px min-h-95px">
                        <div class="card-body d-flex align-items justify-content-center">
                          <span class="position-relative svg-icon mt-n5">
                            <span class="position-relative d-inline-flex align-items-center justify-content-center z-index-2 w-60px h-60px">
                              <i class="fa-solid fa-folder fs-60px pw-text-primary-300"></i>
                            </span>
                            <span class="position-absolute d-inline-block w-60px h-60px rounded-pill pw-bg-primary-100 start-50" style="transform: translate(-50%, 10px)"></span>
                          </span>
                        </div>
                      </div>
                      <span class="mt-2 pw-text-primary-800 fs-6 fw-bold">
                        ISDD Veri Görüntüleme
                      </span>
                    </a>
                    <!--end::Card-->
                  </div>
                  <!--end::Content wrapper-->
                </div>
                <!--end::Döküman Yönetimi contents-->

                <!--begin::Sistem contents-->
                <div class="tab-pane fade" id="pw_tab_pane_sistem" role="tabpanel">
                  <!--begin::Content wrapper-->
                  <div class="d-flex column-gap-5 row-gap-10 flex-wrap">
                    <!--begin::Card-->
                    <a class="hover-elevate-up" href="/sistem-raporlari/sistem/belge-indeks">
                      <div class="card border pw-border-stroke py-1 px-6 mb-2 pw-rounded-5 pw-min-w-180px min-h-95px">
                        <div class="card-body d-flex align-items justify-content-center">
                          <span class="position-relative svg-icon mt-n5">
                            <span class="position-relative d-inline-flex align-items-center justify-content-center z-index-2 w-60px h-60px">
                              <i class="fa-solid fa-list-tree fs-60px pw-text-primary-300"></i>
                            </span>
                            <span class="position-absolute d-inline-block w-60px h-60px rounded-pill pw-bg-primary-100 start-50" style="transform: translate(-50%, 10px)"></span>
                          </span>
                        </div>
                      </div>
                      <span class="mt-2 pw-text-primary-800 fs-6 fw-bold">
                        Belge İndeks
                      </span>
                    </a>
                    <!--end::Card-->

                    <!--begin::Card-->
                    <a class="hover-elevate-up" href="/sistem-raporlari/sistem/calismis-isler">
                      <div class="card border pw-border-stroke py-1 px-6 mb-2 pw-rounded-5 pw-min-w-180px min-h-95px">
                        <div class="card-body d-flex align-items justify-content-center">
                          <span class="position-relative svg-icon mt-n5">
                            <span class="position-relative d-inline-flex align-items-center justify-content-center z-index-2 w-60px h-60px">
                              <i class="fa-solid fa-aperture fs-60px pw-text-primary-300"></i>
                            </span>
                            <span class="position-absolute d-inline-block w-60px h-60px rounded-pill pw-bg-primary-100 start-50" style="transform: translate(-50%, 10px)"></span>
                          </span>
                        </div>
                      </div>
                      <span class="mt-2 pw-text-primary-800 fs-6 fw-bold">
                        Çalışmış İşler
                      </span>
                    </a>
                    <!--end::Card-->

                    <!--begin::Card-->
                    <a class="hover-elevate-up" href="/sistem-raporlari/sistem/elektronik-posta">
                      <div class="card border pw-border-stroke py-1 px-6 mb-2 pw-rounded-5 pw-min-w-180px min-h-95px">
                        <div class="card-body d-flex align-items justify-content-center">
                          <span class="position-relative svg-icon mt-n5">
                            <span class="position-relative d-inline-flex align-items-center justify-content-center z-index-2 w-60px h-60px">
                              <i class="fa-solid fa-envelope fs-60px pw-text-primary-300"></i>
                            </span>
                            <span class="position-absolute d-inline-block w-60px h-60px rounded-pill pw-bg-primary-100 start-50" style="transform: translate(-50%, 10px)"></span>
                          </span>
                        </div>
                      </div>
                      <span class="mt-2 pw-text-primary-800 fs-6 fw-bold">
                        Elektronik Posta
                      </span>
                    </a>
                    <!--end::Card-->

                    <!--begin::Card-->
                    <a class="hover-elevate-up" href="/sistem-raporlari/sistem/entegrasyon">
                      <div class="card border pw-border-stroke py-1 px-6 mb-2 pw-rounded-5 pw-min-w-180px min-h-95px">
                        <div class="card-body d-flex align-items justify-content-center">
                          <span class="position-relative svg-icon mt-n5">
                            <span class="position-relative d-inline-flex align-items-center justify-content-center z-index-2 w-60px h-60px">
                              <i class="fa-solid fa-cog fs-60px pw-text-primary-300"></i>
                            </span>
                            <span class="position-absolute d-inline-block w-60px h-60px rounded-pill pw-bg-primary-100 start-50" style="transform: translate(-50%, 10px)"></span>
                          </span>
                        </div>
                      </div>
                      <span class="mt-2 pw-text-primary-800 fs-6 fw-bold">
                        Entegrasyon
                      </span>
                    </a>
                    <!--end::Card-->

                    <!--begin::Card-->
                    <a class="hover-elevate-up" href="/sistem-raporlari/sistem/kullanici-yetkileri">
                      <div class="card border pw-border-stroke py-1 px-6 mb-2 pw-rounded-5 pw-min-w-180px min-h-95px">
                        <div class="card-body d-flex align-items justify-content-center">
                          <span class="position-relative svg-icon mt-n5">
                            <span class="position-relative d-inline-flex align-items-center justify-content-center z-index-2 w-60px h-60px">
                              <i class="fa-solid fa-file-user fs-60px pw-text-primary-300"></i>
                            </span>
                            <span class="position-absolute d-inline-block w-60px h-60px rounded-pill pw-bg-primary-100 start-50" style="transform: translate(-50%, 10px)"></span>
                          </span>
                        </div>
                      </div>
                      <span class="mt-2 pw-text-primary-800 fs-6 fw-bold">
                        Kullanıcı Yetkileri
                      </span>
                    </a>
                    <!--end::Card-->

                    <!--begin::Card-->
                    <a class="hover-elevate-up" href="/sistem-raporlari/sistem/mobil-cihazlar">
                      <div class="card border pw-border-stroke py-1 px-6 mb-2 pw-rounded-5 pw-min-w-180px min-h-95px">
                        <div class="card-body d-flex align-items justify-content-center">
                          <span class="position-relative svg-icon mt-n5">
                            <span class="position-relative d-inline-flex align-items-center justify-content-center z-index-2 w-60px h-60px">
                              <i class="fa-solid fa-mobile-screen-button fs-60px pw-text-primary-300"></i>
                            </span>
                            <span class="position-absolute d-inline-block w-60px h-60px rounded-pill pw-bg-primary-100 start-50" style="transform: translate(-50%, 10px)"></span>
                          </span>
                        </div>
                      </div>
                      <span class="mt-2 pw-text-primary-800 fs-6 fw-bold">
                        Mobil Cihazlar
                      </span>
                    </a>
                    <!--end::Card-->

                    <!--begin::Card-->
                    <a class="hover-elevate-up" href="/sistem-raporlari/sistem/mobil-mesajlar">
                      <div class="card border pw-border-stroke py-1 px-6 mb-2 pw-rounded-5 pw-min-w-180px min-h-95px">
                        <div class="card-body d-flex align-items justify-content-center">
                          <span class="position-relative svg-icon mt-n5">
                            <span class="position-relative d-inline-flex align-items-center justify-content-center z-index-2 w-60px h-60px">
                              <i class="fa-solid fa-comment-lines fs-60px pw-text-primary-300"></i>
                            </span>
                            <span class="position-absolute d-inline-block w-60px h-60px rounded-pill pw-bg-primary-100 start-50" style="transform: translate(-50%, 10px)"></span>
                          </span>
                        </div>
                      </div>
                      <span class="mt-2 pw-text-primary-800 fs-6 fw-bold">
                        Mobil Mesajlar
                      </span>
                    </a>
                    <!--end::Card-->

                    <!--begin::Card-->
                    <a class="hover-elevate-up" href="/sistem-raporlari/sistem/sistem-kullanim">
                      <div class="card border pw-border-stroke py-1 px-6 mb-2 pw-rounded-5 pw-min-w-180px min-h-95px">
                        <div class="card-body d-flex align-items justify-content-center">
                          <span class="position-relative svg-icon mt-n5">
                            <span class="position-relative d-inline-flex align-items-center justify-content-center z-index-2 w-60px h-60px">
                              <i class="fa-solid fa-user-shield fs-60px pw-text-primary-300"></i>
                            </span>
                            <span class="position-absolute d-inline-block w-60px h-60px rounded-pill pw-bg-primary-100 start-50" style="transform: translate(-50%, 10px)"></span>
                          </span>
                        </div>
                      </div>
                      <span class="mt-2 pw-text-primary-800 fs-6 fw-bold">
                        Sistem Kullanım
                      </span>
                    </a>
                    <!--end::Card-->

                    <!--begin::Card-->
                    <a class="hover-elevate-up" href="/sistem-raporlari/sistem/transfer">
                      <div class="card border pw-border-stroke py-1 px-6 mb-2 pw-rounded-5 pw-min-w-180px min-h-95px">
                        <div class="card-body d-flex align-items justify-content-center">
                          <span class="position-relative svg-icon mt-n5">
                            <span class="position-relative d-inline-flex align-items-center justify-content-center z-index-2 w-60px h-60px">
                              <i class="fa-solid fa-rocket fs-60px pw-text-primary-300"></i>
                            </span>
                            <span class="position-absolute d-inline-block w-60px h-60px rounded-pill pw-bg-primary-100 start-50" style="transform: translate(-50%, 10px)"></span>
                          </span>
                        </div>
                      </div>
                      <span class="mt-2 pw-text-primary-800 fs-6 fw-bold">
                        Transfer
                      </span>
                    </a>
                    <!--end::Card-->
                  </div>
                  <!--end::Content wrapper-->
                </div>
                <!--end::Sistem contents-->
              </div>
              <!--end::Dashboard tab contents-->
              <!--end::Main wrapper-->
              <!--begin::Contact Support-->
              <a href="#" class="btn pw-btn-icon-primary-800 pw-text-primary-800 btn-bg-transparent p-0 mt-6 mt-sm-10 mt-md-17">
                <i class="fa-solid fa-circle-question fs-4 pe-1"></i>
                <span class="fw-bold">
                  Contact Support
                </span>
              </a>
              <!--end::Contact Support-->
            </div>
            <!--end::Content container-->
          </div>
          <!--end::Content-->
        </div>
        <!--end::Col-->
      </div>
      <!--end::Row-->
    </div>
    <!--end::Content wrapper-->
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/footer.php'; ?>
  </div>
  <!--end::Main-->

</div>
<!--end::Wrapper -->

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/foot.php'; ?>