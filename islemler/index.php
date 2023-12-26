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
        <div class="col-md-8 py-7">
          <!--begin::Toolbar-->
          <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
              <!--begin::Page title-->
              <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-dark fw-bold fs-4 flex-column justify-content-center my-0">
                    İşlemler
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
              <!--begin::Dashboard tab contents-->
              <div class="tab-content pw-dashboard-tab-content mt-5" id="myTabContent">
                <!--begin::Süreç Yönetimi contents-->
                <div class="tab-pane fade show active" id="pw_tab_pane_surec_yonetimi" role="tabpanel">
                  <!--begin::Content wrapper-->
                  <div class="d-flex column-gap-5 row-gap-10 flex-wrap">
                    <!--begin::Card-->
                    <a class="hover-elevate-up" href="/islemler/is-akisi-yonetimi">
                      <div class="card border pw-border-stroke py-1 px-6 mb-2 pw-rounded-5 pw-min-w-180px min-h-95px">
                        <div class="card-body d-flex align-items justify-content-center">
                          <span class="position-relative svg-icon mt-n5"> 
                            <span class="position-relative d-inline-flex align-items-center justify-content-center z-index-2 w-60px h-60px">
                              <i class="fa-solid fa-diagram-project fs-60px pw-text-primary-300"></i>
                            </span>
                            <span class="position-absolute d-inline-block w-60px h-60px rounded-pill pw-bg-primary-100 start-50" style="transform: translate(-50%, 10px)"></span>
                          </span>
                        </div>
                      </div>
                      <span class="mt-2 pw-text-primary-800 fs-6 fw-bold">
                        İş Akışı Yönetimi 
                      </span>
                    </a>
                    <!--end::Card-->
                    <!--begin::Card-->
                    <a class="hover-elevate-up" href="/islemler/check-out-dokumanlar">
                      <div class="card border pw-border-stroke py-1 px-6 mb-2 pw-rounded-5 pw-min-w-180px min-h-95px">
                        <div class="card-body d-flex align-items justify-content-center">
                          <span class="position-relative svg-icon mt-n5">
                            <span class="position-relative d-inline-flex align-items-center justify-content-center z-index-2 w-60px h-60px">
                              <i class="fa-solid fa-lock-keyhole fs-60px pw-text-primary-300"></i>
                            </span>
                            <span class="position-absolute d-inline-block w-60px h-60px rounded-pill pw-bg-primary-100 start-50" style="transform: translate(-50%, 10px)"></span>
                          </span>
                        </div>
                      </div>
                      <span class="mt-2 pw-text-primary-800 fs-6 fw-bold">
                        Check Out Dokümanlar
                      </span>
                    </a>
                    <!--end::Card-->
                    <!--begin::Card-->
                    <a class="hover-elevate-up" href="/islemler/geri-donusum">
                      <div class="card border pw-border-stroke py-1 px-6 mb-2 pw-rounded-5 pw-min-w-180px min-h-95px">
                        <div class="card-body d-flex align-items justify-content-center">
                          <span class="position-relative svg-icon mt-n5">
                            <span class="position-relative d-inline-flex align-items-center justify-content-center z-index-2 w-60px h-60px">
                              <i class="fa-solid fa-trash-can fs-60px pw-text-primary-300"></i>
                            </span>
                            <span class="position-absolute d-inline-block w-60px h-60px rounded-pill pw-bg-primary-100 start-50" style="transform: translate(-50%, 10px)"></span>
                          </span>
                        </div>
                      </div>
                      <span class="mt-2 pw-text-primary-800 fs-6 fw-bold">
                        Geri Dönüşüm
                      </span>
                    </a>
                    <!--end::Card-->
                    <!--begin::Card-->
                    <a class="hover-elevate-up" href="/islemler/servis-yonetimi">
                      <div class="card border pw-border-stroke py-1 px-6 mb-2 pw-rounded-5 pw-min-w-180px min-h-95px">
                        <div class="card-body d-flex align-items justify-content-center">
                          <span class="position-relative svg-icon mt-n5">
                            <span class="position-relative d-inline-flex align-items-center justify-content-center z-index-2 w-60px h-60px">
                              <i class="fa-solid fa-poll-people fs-60px pw-text-primary-300"></i>
                            </span>
                            <span class="position-absolute d-inline-block w-60px h-60px rounded-pill pw-bg-primary-100 start-50" style="transform: translate(-50%, 10px)"></span>
                          </span>
                        </div>
                      </div>
                      <span class="mt-2 pw-text-primary-800 fs-6 fw-bold">
                        Servis Yönetimi
                      </span>
                    </a>
                    <!--end::Card-->
                    <!--begin::Card-->
                    <a class="hover-elevate-up" href="/islemler/mobil-cihaz-yonetimi">
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
                        Mobil Cihaz Yönetimi
                      </span>
                    </a>
                    <!--end::Card-->
                    <!--begin::Card-->
                    <a class="hover-elevate-up" href="/islemler/vekalet-yonetimi">
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
                        Vekalet Yönetimi
                      </span>
                    </a>
                    <!--end::Card-->
                    <!--begin::Card-->
                    <a class="hover-elevate-up" href="/islemler/outlook-kullanicilari">
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
                        Outlook Kullanıcıları
                      </span>
                    </a>
                    <!--end::Card-->
                    <!--begin::Card-->
                    <a class="hover-elevate-up" href="/islemler/tasima">
                      <div class="card border pw-border-stroke py-1 px-6 mb-2 pw-rounded-5 pw-min-w-180px min-h-95px">
                        <div class="card-body d-flex align-items justify-content-center">
                          <span class="position-relative svg-icon mt-n5">
                            <span class="position-relative d-inline-flex align-items-center justify-content-center z-index-2 w-60px h-60px">
                              <i class="fa-solid fa-folder-minus fs-60px pw-text-primary-300"></i>
                            </span>
                            <span class="position-absolute d-inline-block w-60px h-60px rounded-pill pw-bg-primary-100 start-50" style="transform: translate(-50%, 10px)"></span>
                          </span>
                        </div>
                      </div>
                      <span class="mt-2 pw-text-primary-800 fs-6 fw-bold">
                        Taşıma
                      </span>
                    </a>
                    <!--end::Card-->
                  </div>
                  <!--end::Content wrapper-->
                </div>
                <!--end::Süreç Yönetimi contents-->
              </div>
              <!--end::Dashboard tab contents-->
              <!--end::Main wrapper-->
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