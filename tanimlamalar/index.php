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
                  Tanımlamalar
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
                  <a class="nav-link mx-0 py-3 px-10 fs-base rounded-0 active fw-medium" data-bs-toggle="tab" href="#pw_tab_pane_kullanicilar">Kullanıcılar</a>
                </li>
                <!--end::Nav item-->

                <!--begin::Nav item-->
                <li class="nav-item">
                  <a class="nav-link py-3 px-10 mx-0 fs-base fw-medium rounded-0 pw-text-neutral-500" data-bs-toggle="tab" href="#pw_tab_pane_dy">Döküman Yönetimi</a>
                </li>
                <!--end::Nav item-->

                <!--begin::Nav item-->
                <li class="nav-item">
                  <a class="nav-link py-3 px-10 mx-0 fs-base fw-medium rounded-0 pw-text-neutral-500" data-bs-toggle="tab" href="#pw_tab_pane_iz">İş Zekası</a>
                </li>
                <!--end::Nav item-->

                <!--begin::Nav item-->
                <li class="nav-item">
                  <a class="nav-link py-3 px-10 mx-0 fs-base fw-medium rounded-0 pw-text-neutral-500" data-bs-toggle="tab" href="#pw_tab_pane_sy">Süreç Yönetimi</a>
                </li>
                <!--end::Nav item-->

                <!--begin::Nav item-->
                <li class="nav-item">
                  <a class="nav-link py-3 px-10 mx-0 fs-base fw-medium rounded-0 pw-text-neutral-500" data-bs-toggle="tab" href="#pw_tab_pane_sistem">Sistem</a>
                </li>
                <!--end::Nav item-->

                <!--begin::Nav item-->
                <li class="nav-item">
                  <a class="nav-link py-3 px-10 mx-0 fs-base fw-medium rounded-0 pw-text-neutral-500" data-bs-toggle="tab" href="#pw_tab_pane_tedarikciler">Tedarikçiler</a>
                </li>
                <!--end::Nav item-->
              </ul>
              <!--end::Dashboard nav tabs-->
              </div>
              <!--end::Dashboard nav wrapper-->

              <!--begin::Dashboard tab contents-->
              <div class="tab-content pw-dashboard-tab-content mt-5" id="myTabContent">
                <!--begin::Kullanıcılar contents-->
                <div class="tab-pane fade show active" id="pw_tab_pane_kullanicilar" role="tabpanel">
                  <!--begin::Content wrapper-->
                  <div class="d-flex column-gap-5 row-gap-10 flex-wrap">
                    <!--begin::Card-->
                    <a class="hover-elevate-up" href="/tanimlamalar/kullanicilar/ad-tanimlari/">
                      <div class="card border pw-border-stroke py-1 px-6 mb-2 pw-rounded-5 pw-min-w-180px min-h-95px">
                        <div class="card-body d-flex align-items justify-content-center">
                          <span class="position-relative svg-icon mt-n5">
                            <span class="position-relative d-inline-flex align-items-center justify-content-center z-index-2 w-60px h-60px">
                              <i class="fa-sharp fa-solid fa-scroll fs-60px pw-text-primary-300"></i>
                            </span>
                            <span class="position-absolute d-inline-block w-60px h-60px rounded-pill pw-bg-primary-100 start-50" style="transform: translate(-50%, 10px)"></span>
                          </span>
                        </div>
                      </div>
                      <span class="mt-2 pw-text-primary-800 fs-6 fw-bold">
                        AD Tanımları
                      </span>
                    </a>
                    <!--end::Card-->

                    <!--begin::Card-->
                    <a class="hover-elevate-up" href="/tanimlamalar/kullanicilar/departmanlar/">
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
                        Departmanlar
                      </span>
                    </a>
                    <!--end::Card-->

                    <!--begin::Card-->
                    <a class="hover-elevate-up" href="/tanimlamalar/kullanicilar/ekran-yetkilendirme/">
                      <div class="card border pw-border-stroke py-1 px-6 mb-2 pw-rounded-5 pw-min-w-180px min-h-95px">
                        <div class="card-body d-flex align-items justify-content-center">
                          <span class="position-relative svg-icon mt-n5">
                            <span class="position-relative d-inline-flex align-items-center justify-content-center z-index-2 w-60px h-60px">
                              <i class="fa-solid fa-file-plus fs-60px pw-text-primary-300"></i>
                            </span>
                            <span class="position-absolute d-inline-block w-60px h-60px rounded-pill pw-bg-primary-100 start-50" style="transform: translate(-50%, 10px)"></span>
                          </span>
                        </div>
                      </div>
                      <span class="mt-2 pw-text-primary-800 fs-6 fw-bold">
                        Ekran Yetkilendirme
                      </span>
                    </a>
                    <!--end::Card-->

                    <!--begin::Card-->
                    <a class="hover-elevate-up" href="/tanimlamalar/kullanicilar">
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
                        Kullanıcılar
                      </span>
                    </a>
                    <!--end::Card-->

                    <!--begin::Card-->
                    <a class="hover-elevate-up" href="/tanimlamalar/kullanicilar/kullanici-ek-ozellikleri/">
                      <div class="card border pw-border-stroke py-1 px-6 mb-2 pw-rounded-5 pw-min-w-180px min-h-95px">
                        <div class="card-body d-flex align-items justify-content-center">
                          <span class="position-relative svg-icon mt-n5">
                            <span class="position-relative d-inline-flex align-items-center justify-content-center z-index-2 w-60px h-60px">
                              <i class="fa-solid fa-user-group fs-60px pw-text-primary-300"></i>
                            </span>
                            <span class="position-absolute d-inline-block w-60px h-60px rounded-pill pw-bg-primary-100 start-50" style="transform: translate(-50%, 10px)"></span>
                          </span>
                        </div>
                      </div>
                      <span class="mt-2 pw-text-primary-800 fs-6 fw-bold">
                        Kullanıcı Ek Özellikleri
                      </span>
                    </a>
                    <!--end::Card-->

                    <!--begin::Card-->
                    <a class="hover-elevate-up" href="/tanimlamalar/kullanicilar/kullanici-gruplari/">
                      <div class="card border pw-border-stroke py-1 px-6 mb-2 pw-rounded-5 pw-min-w-180px min-h-95px">
                        <div class="card-body d-flex align-items justify-content-center">
                          <span class="position-relative svg-icon mt-n5">
                            <span class="position-relative d-inline-flex align-items-center justify-content-center z-index-2 w-60px h-60px">
                              <i class="fa-solid fa-users fs-60px pw-text-primary-300"></i>
                            </span>
                            <span class="position-absolute d-inline-block w-60px h-60px rounded-pill pw-bg-primary-100 start-50" style="transform: translate(-50%, 10px)"></span>
                          </span>
                        </div>
                      </div>
                      <span class="mt-2 pw-text-primary-800 fs-6 fw-bold">
                        Kullanıcı Grupları
                      </span>
                    </a>
                    <!--end::Card-->

                    <!--begin::Card-->
                    <a class="hover-elevate-up" href="/tanimlamalar/kullanicilar/pozisyonlar/">
                      <div class="card border pw-border-stroke py-1 px-6 mb-2 pw-rounded-5 pw-min-w-180px min-h-95px">
                        <div class="card-body d-flex align-items justify-content-center">
                          <span class="position-relative svg-icon mt-n5">
                            <span class="position-relative d-inline-flex align-items-center justify-content-center z-index-2 w-60px h-60px">
                              <i class="fa-solid fa-grid-round-2 fs-60px pw-text-primary-300"></i>
                            </span>
                            <span class="position-absolute d-inline-block w-60px h-60px rounded-pill pw-bg-primary-100 start-50" style="transform: translate(-50%, 10px)"></span>
                          </span>
                        </div>
                      </div>
                      <span class="mt-2 pw-text-primary-800 fs-6 fw-bold">
                        Pozisyonlar
                      </span>
                    </a>
                    <!--end::Card-->

                    <!--begin::Card-->
                    <a class="hover-elevate-up" href="/tanimlamalar/kullanicilar/yetki-setleri/">
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
                        Yetki Setleri
                      </span>
                    </a>
                    <!--end::Card-->
                  </div>
                  <!--end::Content wrapper-->
                </div>
                <!--end::Kullanıcılar contents-->

                <!--begin::Döküman Yönetimi contents-->
                <div class="tab-pane fade" id="pw_tab_pane_dy" role="tabpanel">
                  <!--begin::Content wrapper-->
                  <div class="d-flex column-gap-5 row-gap-10 flex-wrap">
                    <!--begin::Card-->
                    <a class="hover-elevate-up" href="/tanimlamalar/dokuman-yonetimi/belge-taslaklari/">
                      <div class="card border pw-border-stroke py-1 px-6 mb-2 pw-rounded-5 pw-min-w-180px min-h-95px">
                        <div class="card-body d-flex align-items justify-content-center">
                          <span class="position-relative svg-icon mt-n5">
                            <span class="position-relative d-inline-flex align-items-center justify-content-center z-index-2 w-60px h-60px">
                              <i class="fa-solid fa-file fs-60px pw-text-primary-300"></i>
                            </span>
                            <span class="position-absolute d-inline-block w-60px h-60px rounded-pill pw-bg-primary-100 start-50" style="transform: translate(-50%, 10px)"></span>
                          </span>
                        </div>
                      </div>
                      <span class="mt-2 pw-text-primary-800 fs-6 fw-bold">
                        Belge Taslakları
                      </span>
                    </a>
                    <!--end::Card-->

                    <!--begin::Card-->
                    <a class="hover-elevate-up" href="/tanimlamalar/dokuman-yonetimi/kabinet-tanimlari/">
                      <div class="card border pw-border-stroke py-1 px-6 mb-2 pw-rounded-5 pw-min-w-180px min-h-95px">
                        <div class="card-body d-flex align-items justify-content-center">
                          <span class="position-relative svg-icon mt-n5">
                            <span class="position-relative d-inline-flex align-items-center justify-content-center z-index-2 w-60px h-60px">
                              <i class="fa-solid fa-file-lines fs-60px pw-text-primary-300"></i>
                            </span>
                            <span class="position-absolute d-inline-block w-60px h-60px rounded-pill pw-bg-primary-100 start-50" style="transform: translate(-50%, 10px)"></span>
                          </span>
                        </div>
                      </div>
                      <span class="mt-2 pw-text-primary-800 fs-6 fw-bold">
                        Kabinet Tanımları
                      </span>
                    </a>
                    <!--end::Card-->

                    <!--begin::Card-->
                    <a class="hover-elevate-up" href="/tanimlamalar/dokuman-yonetimi/seda-tanimlari/">
                      <div class="card border pw-border-stroke py-1 px-6 mb-2 pw-rounded-5 pw-min-w-180px min-h-95px">
                        <div class="card-body d-flex align-items justify-content-center">
                          <span class="position-relative svg-icon mt-n5">
                            <span class="position-relative d-inline-flex align-items-center justify-content-center z-index-2 w-60px h-60px">
                              <i class="fa-solid fa-clipboard-list-check fs-60px pw-text-primary-300"></i>
                            </span>
                            <span class="position-absolute d-inline-block w-60px h-60px rounded-pill pw-bg-primary-100 start-50" style="transform: translate(-50%, 10px)"></span>
                          </span>
                        </div>
                      </div>
                      <span class="mt-2 pw-text-primary-800 fs-6 fw-bold">
                        SEDA Tanımları
                      </span>
                    </a>
                    <!--end::Card-->

                    <!--begin::Card-->
                    <a class="hover-elevate-up" href="/tanimlamalar/dokuman-yonetimi/isdd-tanimlari/">
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
                        ISDD Tanımları
                      </span>
                    </a>
                    <!--end::Card-->

                    <!--begin::Card-->
                    <a class="hover-elevate-up" href="/tanimlamalar/dokuman-yonetimi/e-fatura/">
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
                        E-Fatura Tanımları
                      </span>
                    </a>
                    <!--end::Card-->
                  </div>
                  <!--end::Content wrapper-->
                </div>
                <!--end::Döküman Yönetimi contents-->

                <!--begin::İş zekası contents-->
                <div class="tab-pane fade" id="pw_tab_pane_iz" role="tabpanel">
                  <!--begin::Content wrapper-->
                  <div class="d-flex column-gap-5 row-gap-10 flex-wrap">
                    <!--begin::Card-->
                    <a class="hover-elevate-up" href="/tanimlamalar/is-zekasi/rapor-tasarim/">
                      <div class="card border pw-border-stroke py-1 px-6 mb-2 pw-rounded-5 pw-min-w-180px min-h-95px">
                        <div class="card-body d-flex align-items justify-content-center">
                          <span class="position-relative svg-icon mt-n5">
                            <span class="position-relative d-inline-flex align-items-center justify-content-center z-index-2 w-60px h-60px">
                              <i class="fa-solid fa-file-chart-column fs-60px pw-text-primary-300"></i>
                            </span>
                            <span class="position-absolute d-inline-block w-60px h-60px rounded-pill pw-bg-primary-100 start-50" style="transform: translate(-50%, 10px)"></span>
                          </span>
                        </div>
                      </div>
                      <span class="mt-2 pw-text-primary-800 fs-6 fw-bold">
                        Rapor Tasarım
                      </span>
                    </a>
                    <!--end::Card-->

                    <!--begin::Card-->
                    <a class="hover-elevate-up" href="/tanimlamalar/is-zekasi/veri-kaynaklari/">
                      <div class="card border pw-border-stroke py-1 px-6 mb-2 pw-rounded-5 pw-min-w-180px min-h-95px">
                        <div class="card-body d-flex align-items justify-content-center">
                          <span class="position-relative svg-icon mt-n5">
                            <span class="position-relative d-inline-flex align-items-center justify-content-center z-index-2 w-60px h-60px">
                              <i class="fa-solid fa-chart-simple fs-60px pw-text-primary-300"></i>
                            </span>
                            <span class="position-absolute d-inline-block w-60px h-60px rounded-pill pw-bg-primary-100 start-50" style="transform: translate(-50%, 10px)"></span>
                          </span>
                        </div>
                      </div>
                      <span class="mt-2 pw-text-primary-800 fs-6 fw-bold">
                        Veri Kaynakları
                      </span>
                    </a>
                    <!--end::Card-->
                  </div>
                  <!--end::Content wrapper-->
                </div>
                <!--end::İş zekası contents-->

                <!--begin::Süreç yönetimi contents-->
                <div class="tab-pane fade" id="pw_tab_pane_sy" role="tabpanel">
                  <!--begin::Content wrapper-->
                  <div class="d-flex column-gap-5 row-gap-10 flex-wrap">
                    <!--begin::Card-->
                    <a class="hover-elevate-up" href="/tanimlamalar/surec-yonetimi/surec-taslaklari/">
                      <div class="card border pw-border-stroke py-1 px-6 mb-2 pw-rounded-5 pw-min-w-180px min-h-95px">
                        <div class="card-body d-flex align-items justify-content-center">
                          <span class="position-relative svg-icon mt-n5">
                            <span class="position-relative d-inline-flex align-items-center justify-content-center z-index-2 w-60px h-60px">
                              <i class="fa-solid fa-ruler-combined fs-60px pw-text-primary-300"></i>
                            </span>
                            <span class="position-absolute d-inline-block w-60px h-60px rounded-pill pw-bg-primary-100 start-50" style="transform: translate(-50%, 10px)"></span>
                          </span>
                        </div>
                      </div>
                      <span class="mt-2 pw-text-primary-800 fs-6 fw-bold">
                        Süreç Taslakları
                      </span>
                    </a>
                    <!--end::Card-->

                    <!--begin::Card-->
                    <a class="hover-elevate-up" href="/tanimlamalar/surec-yonetimi/kep-tanimlari/">
                      <div class="card border pw-border-stroke py-1 px-6 mb-2 pw-rounded-5 pw-min-w-180px min-h-95px">
                        <div class="card-body d-flex align-items justify-content-center">
                          <span class="position-relative svg-icon mt-n5">
                            <span class="position-relative d-inline-flex align-items-center justify-content-center z-index-2 w-60px h-60px">
                              <i class="fa-solid fa-note-sticky fs-60px pw-text-primary-300"></i>
                            </span>
                            <span class="position-absolute d-inline-block w-60px h-60px rounded-pill pw-bg-primary-100 start-50" style="transform: translate(-50%, 10px)"></span>
                          </span>
                        </div>
                      </div>
                      <span class="mt-2 pw-text-primary-800 fs-6 fw-bold">
                        Kep Tanıtımları
                      </span>
                    </a>
                    <!--end::Card-->

                    <!--begin::Card-->
                    <a class="hover-elevate-up" href="/tanimlamalar/surec-yonetimi/organizasyon-semalari/">
                      <div class="card border pw-border-stroke py-1 px-6 mb-2 pw-rounded-5 pw-min-w-180px min-h-95px">
                        <div class="card-body d-flex align-items justify-content-center">
                          <span class="position-relative svg-icon mt-n5">
                            <span class="position-relative d-inline-flex align-items-center justify-content-center z-index-2 w-60px h-60px">
                              <i class="fa-solid fa-chart-simple-horizontal fs-60px pw-text-primary-300"></i>
                            </span>
                            <span class="position-absolute d-inline-block w-60px h-60px rounded-pill pw-bg-primary-100 start-50" style="transform: translate(-50%, 10px)"></span>
                          </span>
                        </div>
                      </div>
                      <span class="mt-2 pw-text-primary-800 fs-6 fw-bold">
                        Organizasyon Şemaları
                      </span>
                    </a>
                    <!--end::Card-->

                    <!--begin::Card-->
                    <a class="hover-elevate-up" href="/tanimlamalar/surec-yonetimi/takvim-tanimlari/">
                      <div class="card border pw-border-stroke py-1 px-6 mb-2 pw-rounded-5 pw-min-w-180px min-h-95px">
                        <div class="card-body d-flex align-items justify-content-center">
                          <span class="position-relative svg-icon mt-n5">
                            <span class="position-relative d-inline-flex align-items-center justify-content-center z-index-2 w-60px h-60px">
                              <i class="fa-solid fa-calendar fs-60px pw-text-primary-300"></i>
                            </span>
                            <span class="position-absolute d-inline-block w-60px h-60px rounded-pill pw-bg-primary-100 start-50" style="transform: translate(-50%, 10px)"></span>
                          </span>
                        </div>
                      </div>
                      <span class="mt-2 pw-text-primary-800 fs-6 fw-bold">
                        Takvim Tanımları
                      </span>
                    </a>
                    <!--end::Card-->

                    <!--begin::Card-->
                    <a class="hover-elevate-up" href="/tanimlamalar/surec-yonetimi/kural-motoru/">
                      <div class="card border pw-border-stroke py-1 px-6 mb-2 pw-rounded-5 pw-min-w-180px min-h-95px">
                        <div class="card-body d-flex align-items justify-content-center">
                          <span class="position-relative svg-icon mt-n5">
                            <span class="position-relative d-inline-flex align-items-center justify-content-center z-index-2 w-60px h-60px">
                              <i class="fa-solid fa-ruler fs-60px pw-text-primary-300"></i>
                            </span>
                            <span class="position-absolute d-inline-block w-60px h-60px rounded-pill pw-bg-primary-100 start-50" style="transform: translate(-50%, 10px)"></span>
                          </span>
                        </div>
                      </div>
                      <span class="mt-2 pw-text-primary-800 fs-6 fw-bold">
                        Kural Motoru
                      </span>
                    </a>
                    <!--end::Card-->
                  </div>
                  <!--end::Content wrapper-->
                </div>
                <!--end::Süreç yönetimi contents-->

                <!--begin::Sistem contents-->
                <div class="tab-pane fade" id="pw_tab_pane_sistem" role="tabpanel">
                  <!--begin::Content wrapper-->
                  <div class="d-flex column-gap-5 row-gap-10 flex-wrap">
                    <!--begin::Card-->
                    <a class="hover-elevate-up" href="/tanimlamalar/sistem/elektronik-posta/">
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
                    <a class="hover-elevate-up" href="/tanimlamalar/sistem/entegrasyon-tanimlari/">
                      <div class="card border pw-border-stroke py-1 px-6 mb-2 pw-rounded-5 pw-min-w-180px min-h-95px">
                        <div class="card-body d-flex align-items justify-content-center">
                          <span class="position-relative svg-icon mt-n5">
                            <span class="position-relative d-inline-flex align-items-center justify-content-center z-index-2 w-60px h-60px">
                              <i class="fa-solid fa-gear fs-60px pw-text-primary-300"></i>
                            </span>
                            <span class="position-absolute d-inline-block w-60px h-60px rounded-pill pw-bg-primary-100 start-50" style="transform: translate(-50%, 10px)"></span>
                          </span>
                        </div>
                      </div>
                      <span class="mt-2 pw-text-primary-800 fs-6 fw-bold">
                        Entegrasyon Tanımları
                      </span>
                    </a>
                    <!--end::Card-->

                    <!--begin::Card-->
                    <a class="hover-elevate-up" href="/tanimlamalar/sistem/liste-tanimlari/">
                      <div class="card border pw-border-stroke py-1 px-6 mb-2 pw-rounded-5 pw-min-w-180px min-h-95px">
                        <div class="card-body d-flex align-items justify-content-center">
                          <span class="position-relative svg-icon mt-n5">
                            <span class="position-relative d-inline-flex align-items-center justify-content-center z-index-2 w-60px h-60px">
                              <i class="fa-solid fa-list fs-60px pw-text-primary-300"></i>
                            </span>
                            <span class="position-absolute d-inline-block w-60px h-60px rounded-pill pw-bg-primary-100 start-50" style="transform: translate(-50%, 10px)"></span>
                          </span>
                        </div>
                      </div>
                      <span class="mt-2 pw-text-primary-800 fs-6 fw-bold">
                        Liste Tanımları
                      </span>
                    </a>
                    <!--end::Card-->

                    <!--begin::Card-->
                    <a class="hover-elevate-up" href="/tanimlamalar/sistem/metod-tanimlari/">
                      <div class="card border pw-border-stroke py-1 px-6 mb-2 pw-rounded-5 pw-min-w-180px min-h-95px">
                        <div class="card-body d-flex align-items justify-content-center">
                          <span class="position-relative svg-icon mt-n5">
                            <span class="position-relative d-inline-flex align-items-center justify-content-center z-index-2 w-60px h-60px">
                              <i class="fa-solid fa-list-check fs-60px pw-text-primary-300"></i>
                            </span>
                            <span class="position-absolute d-inline-block w-60px h-60px rounded-pill pw-bg-primary-100 start-50" style="transform: translate(-50%, 10px)"></span>
                          </span>
                        </div>
                      </div>
                      <span class="mt-2 pw-text-primary-800 fs-6 fw-bold">
                        Metod Tanımları
                      </span>
                    </a>
                    <!--end::Card-->

                    <!--begin::Card-->
                    <a class="hover-elevate-up" href="/tanimlamalar/sistem/plugin-tanimlamalari/">
                      <div class="card border pw-border-stroke py-1 px-6 mb-2 pw-rounded-5 pw-min-w-180px min-h-95px">
                        <div class="card-body d-flex align-items justify-content-center">
                          <span class="position-relative svg-icon mt-n5">
                            <span class="position-relative d-inline-flex align-items-center justify-content-center z-index-2 w-60px h-60px">
                              <i class="fa-solid fa-puzzle-piece fs-60px pw-text-primary-300"></i>
                            </span>
                            <span class="position-absolute d-inline-block w-60px h-60px rounded-pill pw-bg-primary-100 start-50" style="transform: translate(-50%, 10px)"></span>
                          </span>
                        </div>
                      </div>
                      <span class="mt-2 pw-text-primary-800 fs-6 fw-bold">
                        Plugin Tanımlamaları
                      </span>
                    </a>
                    <!--end::Card-->

              <!--begin::Card-->
              <a class="hover-elevate-up" href="/tanimlamalar/sistem/depolama-birimleri">
                      <div class="card border pw-border-stroke py-1 px-6 mb-2 pw-rounded-5 pw-min-w-180px min-h-95px">
                        <div class="card-body d-flex align-items justify-content-center">
                          <span class="position-relative svg-icon mt-n5">
                            <span class="position-relative d-inline-flex align-items-center justify-content-center z-index-2 w-60px h-60px">
                              <i class="fa-solid fa-box-archive fs-60px pw-text-primary-300"></i>
                            </span>
                            <span class="position-absolute d-inline-block w-60px h-60px rounded-pill pw-bg-primary-100 start-50" style="transform: translate(-50%, 10px)"></span>
                          </span>
                        </div>
                      </div>
                      <span class="mt-2 pw-text-primary-800 fs-6 fw-bold">
                       Depo Birimleri
                      </span>
                    </a>
                    <!--end::Card-->

                    <!--begin::Card-->
                    <a class="hover-elevate-up" href="/tanimlamalar/sistem/web-servis-tanimlari/">
                      <div class="card border pw-border-stroke py-1 px-6 mb-2 pw-rounded-5 pw-min-w-180px min-h-95px">
                        <div class="card-body d-flex align-items justify-content-center">
                          <span class="position-relative svg-icon mt-n5">
                            <span class="position-relative d-inline-flex align-items-center justify-content-center z-index-2 w-60px h-60px">
                              <i class="fa-solid fa-window-flip fs-60px pw-text-primary-300"></i>
                            </span>
                            <span class="position-absolute d-inline-block w-60px h-60px rounded-pill pw-bg-primary-100 start-50" style="transform: translate(-50%, 10px)"></span>
                          </span>
                        </div>
                      </div>
                      <span class="mt-2 pw-text-primary-800 fs-6 fw-bold">
                        Web Servis Tanımları
                      </span>
                    </a>
                    <!--end::Card-->

                    <!--begin::Card-->
                    <a class="hover-elevate-up" href="/tanimlamalar/sistem/transfer-tanimlari/">
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
                        Transfer Tanımları
                      </span>
                    </a>
                    <!--end::Card-->

                    <!--begin::Card-->
                    <a class="hover-elevate-up" href="/tanimlamalar/sistem/uyari-tanimlari/">
                      <div class="card border pw-border-stroke py-1 px-6 mb-2 pw-rounded-5 pw-min-w-180px min-h-95px">
                        <div class="card-body d-flex align-items justify-content-center">
                          <span class="position-relative svg-icon mt-n5">
                            <span class="position-relative d-inline-flex align-items-center justify-content-center z-index-2 w-60px h-60px">
                              <i class="fa-solid fa-octagon-exclamation fs-60px pw-text-primary-300"></i>
                            </span>
                            <span class="position-absolute d-inline-block w-60px h-60px rounded-pill pw-bg-primary-100 start-50" style="transform: translate(-50%, 10px)"></span>
                          </span>
                        </div>
                      </div>
                      <span class="mt-2 pw-text-primary-800 fs-6 fw-bold">
                        Uyarı Tanımları
                      </span>
                    </a>
                    <!--end::Card-->

                    <!--begin::Card-->
                    <a class="hover-elevate-up" href="/tanimlamalar/sistem/gorunum/">
                      <div class="card border pw-border-stroke py-1 px-6 mb-2 pw-rounded-5 pw-min-w-180px min-h-95px">
                        <div class="card-body d-flex align-items justify-content-center">
                          <span class="position-relative svg-icon mt-n5">
                            <span class="position-relative d-inline-flex align-items-center justify-content-center z-index-2 w-60px h-60px">
                              <i class="fa-solid fa-image fs-60px pw-text-primary-300"></i>
                            </span>
                            <span class="position-absolute d-inline-block w-60px h-60px rounded-pill pw-bg-primary-100 start-50" style="transform: translate(-50%, 10px)"></span>
                          </span>
                        </div>
                      </div>
                      <span class="mt-2 pw-text-primary-800 fs-6 fw-bold">
                        Görünüm
                      </span>
                    </a>
                    <!--end::Card-->

                    <!--begin::Card-->
                    <a class="hover-elevate-up" href="/tanimlamalar/sistem/parametreler/">
                      <div class="card border pw-border-stroke py-1 px-6 mb-2 pw-rounded-5 pw-min-w-180px min-h-95px">
                        <div class="card-body d-flex align-items justify-content-center">
                          <span class="position-relative svg-icon mt-n5">
                            <span class="position-relative d-inline-flex align-items-center justify-content-center z-index-2 w-60px h-60px">
                              <i class="fa-solid fa-bars-sort fs-60px pw-text-primary-300"></i>
                            </span>
                            <span class="position-absolute d-inline-block w-60px h-60px rounded-pill pw-bg-primary-100 start-50" style="transform: translate(-50%, 10px)"></span>
                          </span>
                        </div>
                      </div>
                      <span class="mt-2 pw-text-primary-800 fs-6 fw-bold">
                        Parametreler
                      </span>
                    </a>
                    <!--end::Card-->
                  </div>
                  <!--end::Content wrapper-->
                </div>
                <!--end::Sistem contents-->

                <!--begin::Tedarikçiler contents-->
                <div class="tab-pane fade" id="pw_tab_pane_tedarikciler" role="tabpanel">
                  <!--begin::Content wrapper-->
                  <div class="d-flex column-gap-5 row-gap-10 flex-wrap">
                    <!--begin::Card-->
                    <a class="hover-elevate-up" href="/tanimlamalar/tedarikciler/">
                      <div class="card border pw-border-stroke py-1 px-6 mb-2 pw-rounded-5 pw-min-w-180px min-h-95px">
                        <div class="card-body d-flex align-items justify-content-center">
                          <span class="position-relative svg-icon mt-n5">
                            <span class="position-relative d-inline-flex align-items-center justify-content-center z-index-2 w-60px h-60px">
                              <i class="fa-solid fa-people-carry-box fs-60px pw-text-primary-300"></i>
                            </span>
                            <span class="position-absolute d-inline-block w-60px h-60px rounded-pill pw-bg-primary-100 start-50" style="transform: translate(-50%, 10px)"></span>
                          </span>
                        </div>
                      </div>
                      <span class="mt-2 pw-text-primary-800 fs-6 fw-bold">
                        Tedarikçiler
                      </span>
                    </a>
                    <!--end::Card-->

                    <!--begin::Card-->
                    <a class="hover-elevate-up" href="/tanimlamalar/tedarikciler/tedarikci-ek-ozellikleri/">
                      <div class="card border pw-border-stroke py-1 px-6 mb-2 pw-rounded-5 pw-min-w-180px min-h-95px">
                        <div class="card-body d-flex align-items justify-content-center">
                          <span class="position-relative svg-icon mt-n5">
                            <span class="position-relative d-inline-flex align-items-center justify-content-center z-index-2 w-60px h-60px">
                              <i class="fa-solid fa-cart-flatbed-boxes fs-60px pw-text-primary-300"></i>
                            </span>
                            <span class="position-absolute d-inline-block w-60px h-60px rounded-pill pw-bg-primary-100 start-50" style="transform: translate(-50%, 10px)"></span>
                          </span>
                        </div>
                      </div>
                      <span class="mt-2 pw-text-primary-800 fs-6 fw-bold">
                        Tedarikçi Ek Özellikleri
                      </span>
                    </a>
                    <!--end::Card-->

                    <!--begin::Card-->
                    <a class="hover-elevate-up" href="/tanimlamalar/tedarikciler/kullanici-ek-ozellikleri/">
                      <div class="card border pw-border-stroke py-1 px-6 mb-2 pw-rounded-5 pw-min-w-180px min-h-95px">
                        <div class="card-body d-flex align-items justify-content-center">
                          <span class="position-relative svg-icon mt-n5">
                            <span class="position-relative d-inline-flex align-items-center justify-content-center z-index-2 w-60px h-60px">
                              <i class="fa-solid fa-user-tag fs-60px pw-text-primary-300"></i>
                            </span>
                            <span class="position-absolute d-inline-block w-60px h-60px rounded-pill pw-bg-primary-100 start-50" style="transform: translate(-50%, 10px)"></span>
                          </span>
                        </div>
                      </div>
                      <span class="mt-2 pw-text-primary-800 fs-6 fw-bold">
                        Kullanıcı Ek Özellikleri
                      </span>
                    </a>
                    <!--end::Card-->

                    <!--begin::Card-->
                    <a class="hover-elevate-up" href="/tanimlamalar/tedarikciler/calisma-alanlari/">
                      <div class="card border pw-border-stroke py-1 px-6 mb-2 pw-rounded-5 pw-min-w-180px min-h-95px">
                        <div class="card-body d-flex align-items justify-content-center">
                          <span class="position-relative svg-icon mt-n5">
                            <span class="position-relative d-inline-flex align-items-center justify-content-center z-index-2 w-60px h-60px">
                              <i class="fa-solid fa-briefcase fs-60px pw-text-primary-300"></i>
                            </span>
                            <span class="position-absolute d-inline-block w-60px h-60px rounded-pill pw-bg-primary-100 start-50" style="transform: translate(-50%, 10px)"></span>
                          </span>
                        </div>
                      </div>
                      <span class="mt-2 pw-text-primary-800 fs-6 fw-bold">
                        Çalışma Alanları
                      </span>
                    </a>
                    <!--end::Card-->

                    <!--begin::Card-->
                    <a class="hover-elevate-up" href="/tanimlamalar/tedarikciler/faaliyet-alanlari/">
                      <div class="card border pw-border-stroke py-1 px-6 mb-2 pw-rounded-5 pw-min-w-180px min-h-95px">
                        <div class="card-body d-flex align-items justify-content-center">
                          <span class="position-relative svg-icon mt-n5">
                            <span class="position-relative d-inline-flex align-items-center justify-content-center z-index-2 w-60px h-60px">
                              <i class="fa-solid fa-vector-square fs-60px pw-text-primary-300"></i>
                            </span>
                            <span class="position-absolute d-inline-block w-60px h-60px rounded-pill pw-bg-primary-100 start-50" style="transform: translate(-50%, 10px)"></span>
                          </span>
                        </div>
                      </div>
                      <span class="mt-2 pw-text-primary-800 fs-6 fw-bold">
                        Faaliyet Alanları
                      </span>
                    </a>
                    <!--end::Card-->

                    <!--begin::Card-->
                    <a class="hover-elevate-up" href="/tanimlamalar/tedarikciler/klasor-sablonlari/">
                      <div class="card border pw-border-stroke py-1 px-6 mb-2 pw-rounded-5 pw-min-w-180px min-h-95px">
                        <div class="card-body d-flex align-items justify-content-center">
                          <span class="position-relative svg-icon mt-n5">
                            <span class="position-relative d-inline-flex align-items-center justify-content-center z-index-2 w-60px h-60px">
                              <i class="fa-duotone fa-folders fs-60px pw-text-primary-300"></i>
                            </span>
                            <span class="position-absolute d-inline-block w-60px h-60px rounded-pill pw-bg-primary-100 start-50" style="transform: translate(-50%, 10px)"></span>
                          </span>
                        </div>
                      </div>
                      <span class="mt-2 pw-text-primary-800 fs-6 fw-bold">
                        Klasör Şablonları
                      </span>
                    </a>
                    <!--end::Card-->

                    <!--begin::Card-->
                    <a class="hover-elevate-up" href="/tanimlamalar/tedarikciler/posta-sablonlari/">
                      <div class="card border pw-border-stroke py-1 px-6 mb-2 pw-rounded-5 pw-min-w-180px min-h-95px">
                        <div class="card-body d-flex align-items justify-content-center">
                          <span class="position-relative svg-icon mt-n5">
                            <span class="position-relative d-inline-flex align-items-center justify-content-center z-index-2 w-60px h-60px">
                              <i class="fa-solid fa-envelopes-bulk fs-60px pw-text-primary-300"></i>
                            </span>
                            <span class="position-absolute d-inline-block w-60px h-60px rounded-pill pw-bg-primary-100 start-50" style="transform: translate(-50%, 10px)"></span>
                          </span>
                        </div>
                      </div>
                      <span class="mt-2 pw-text-primary-800 fs-6 fw-bold">
                        Posta Şablonları
                      </span>
                    </a>
                    <!--end::Card-->

                    <!--begin::Card-->
                    <a class="hover-elevate-up" href="/tanimlamalar/tedarikciler/kategoriler/">
                      <div class="card border pw-border-stroke py-1 px-6 mb-2 pw-rounded-5 pw-min-w-180px min-h-95px">
                        <div class="card-body d-flex align-items justify-content-center">
                          <span class="position-relative svg-icon mt-n5">
                            <span class="position-relative d-inline-flex align-items-center justify-content-center z-index-2 w-60px h-60px">
                              <i class="fa-solid fa-layer-group fs-60px pw-text-primary-300"></i>
                            </span>
                            <span class="position-absolute d-inline-block w-60px h-60px rounded-pill pw-bg-primary-100 start-50" style="transform: translate(-50%, 10px)"></span>
                          </span>
                        </div>
                      </div>
                      <span class="mt-2 pw-text-primary-800 fs-6 fw-bold">
                        Kategoriler
                      </span>
                    </a>
                    <!--end::Card-->

                    <!--begin::Card-->
                    <a class="hover-elevate-up" href="/tanimlamalar/tedarikciler/gorunum/">
                      <div class="card border pw-border-stroke py-1 px-6 mb-2 pw-rounded-5 pw-min-w-180px min-h-95px">
                        <div class="card-body d-flex align-items justify-content-center">
                          <span class="position-relative svg-icon mt-n5">
                            <span class="position-relative d-inline-flex align-items-center justify-content-center z-index-2 w-60px h-60px">
                              <i class="fa-solid fa-image fs-60px pw-text-primary-300"></i>
                            </span>
                            <span class="position-absolute d-inline-block w-60px h-60px rounded-pill pw-bg-primary-100 start-50" style="transform: translate(-50%, 10px)"></span>
                          </span>
                        </div>
                      </div>
                      <span class="mt-2 pw-text-primary-800 fs-6 fw-bold">
                        Görünüm
                      </span>
                    </a>
                    <!--end::Card-->

                    <!--begin::Card-->
                    <a class="hover-elevate-up" href="/tanimlamalar/tedarikciler/duyurular/">
                      <div class="card border pw-border-stroke py-1 px-6 mb-2 pw-rounded-5 pw-min-w-180px min-h-95px">
                        <div class="card-body d-flex align-items justify-content-center">
                          <span class="position-relative svg-icon mt-n5">
                            <span class="position-relative d-inline-flex align-items-center justify-content-center z-index-2 w-60px h-60px">
                              <i class="fa-solid fa-message-lines fs-60px pw-text-primary-300"></i>
                            </span>
                            <span class="position-absolute d-inline-block w-60px h-60px rounded-pill pw-bg-primary-100 start-50" style="transform: translate(-50%, 10px)"></span>
                          </span>
                        </div>
                      </div>
                      <span class="mt-2 pw-text-primary-800 fs-6 fw-bold">
                        Duyurular
                      </span>
                    </a>
                    <!--end::Card-->

                    <!--begin::Card-->
                    <a class="hover-elevate-up" href="/tanimlamalar/tedarikciler/parametreler/">
                      <div class="card border pw-border-stroke py-1 px-6 mb-2 pw-rounded-5 pw-min-w-180px min-h-95px">
                        <div class="card-body d-flex align-items justify-content-center">
                          <span class="position-relative svg-icon mt-n5">
                            <span class="position-relative d-inline-flex align-items-center justify-content-center z-index-2 w-60px h-60px">
                              <i class="fa-solid fa-bars-sort fs-60px pw-text-primary-300"></i>
                            </span>
                            <span class="position-absolute d-inline-block w-60px h-60px rounded-pill pw-bg-primary-100 start-50" style="transform: translate(-50%, 10px)"></span>
                          </span>
                        </div>
                      </div>
                      <span class="mt-2 pw-text-primary-800 fs-6 fw-bold">
                        Parametreler
                      </span>
                    </a>
                    <!--end::Card-->

                    <!--begin::Card-->
                    <a class="hover-elevate-up" href="/tanimlamalar#">
                      <div class="card border pw-border-stroke py-1 px-6 mb-2 pw-rounded-5 pw-min-w-180px min-h-95px">
                        <div class="card-body d-flex align-items justify-content-center">
                          <span class="position-relative svg-icon mt-n5">
                            <span class="position-relative d-inline-flex align-items-center justify-content-center z-index-2 w-60px h-60px">
                              <i class="fa-solid fa-chart-bar fs-60px pw-text-primary-300"></i>
                            </span>
                            <span class="position-absolute d-inline-block w-60px h-60px rounded-pill pw-bg-primary-100 start-50" style="transform: translate(-50%, 10px)"></span>
                          </span>
                        </div>
                      </div>
                      <span class="mt-2 pw-text-primary-800 fs-6 fw-bold">
                        Tedarikçiler Listesi
                      </span>
                    </a>
                    <!--end::Card-->
                  </div>
                  <!--end::Content wrapper-->
                </div>
                <!--end::Tedarikçiler contents-->
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