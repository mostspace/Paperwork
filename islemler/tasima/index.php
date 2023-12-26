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
                <li class="breadcrumb-item active"> Taşıma</li>
                <!--end::Item-->
              </ul>
              <!--end::Breadcrumb-->
              <!--begin::Title-->
              <h1 class="page-heading d-flex text-dark fw-bold fs-4 flex-column justify-content-center my-0">
                Taşıma
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
          <!--begin::Col-->
          <div class="row">
            <!--begin::Tab header wrapper-->
            <div class="table-reponsive overflow-x-auto mt-4">
              <!--begin::Table tabs-->
              <div class="nav nav-tabs nav-line-tabs fs-6 gap-8" role="tablist">
                <!--begin::Tab item-->
                <li class="nav-item" role="presentation">
                  <a class="nav-link mx-0 pt-3 pb-6 fs-base rounded-0 fw-semibold active btn btn-active-icon-primary" data-bs-toggle="tab" href="#pw_tab_pane_iceri_aktar" aria-selected="true" role="tab"><i class="fa-solid fa-arrow-up-from-square pe-1"></i>İçeri Aktar</a>
                </li>
                <!--end::Tab item-->

                <!--begin::Tab item-->
                <li class="nav-item" role="presentation">
                  <a class="nav-link mx-0 pt-3 pb-6 fs-base rounded-0 btn btn-active-icon-primary" data-bs-toggle="tab" href="#pw_tab_pane_disari_aktar" aria-selected="false" role="tab"><i class="fa-solid fa-arrow-down-to-square pe-1"></i>Dışarı Aktar</a>
                </li>
                <!--end::Tab item-->

                <!--begin::Tab item-->
                <li class="nav-item" role="presentation">
                  <a class="nav-link mx-0 pt-3 pb-6 fs-base rounded-0 btn btn-active-icon-primary" data-bs-toggle="tab" href="#pw_tab_pane_tarihce" aria-selected="false" role="tab"><i class="fa-solid fa-clock-rotate-left pe-1"></i>Tarihçe</a>
                </li>
                <!--end::Tab item-->
              </div>
              <!--end::Table tabs-->
            </div>
            <!--end::Tab header wrapper-->

            <!--begin::Tab contents-->
            <div class="tab-content pw-dashboard-tab-content mt-6" id="kabinetTabContents">
              <!--begin::İçeri Aktar content-->
              <div class="tab-pane fade active show" id="pw_tab_pane_iceri_aktar" role="tabpanel">
                <div class="border pw-border-stroke rounded-3 py-6 px-7">
                  <div class="row">
                    <!--begin::Dropzone-->
                    <div class="col-md-8 mx-auto border pw-border-stroke rounded-3 py-6 px-7">
                      <!--begin::Card body-->
                      <div class="card-body pt-0 pb-20">
                        <!--begin::Input group-->
                        <div class="fv-row mb-2">
                          <!--begin::Dropzone-->
                          <div class="dropzone d-flex justify-content-center py-20 bg-transparent border-dashed pw-border-stroke" id="kt_dropzonejs_example_1">
                            <!--begin::Message-->
                            <div class="dz-message needsclick ">
                              <!--begin::Info-->
                              <div class="text-center">
                                <h3 class="fs-5 fw-bold text-gray-900"><span class="text-primary">Dosya Seçiniz</span> veya Dosyayı Buraya Sürükleyin  </h3>
                                <p class="fs-7 fw-semibold text-gray-400 my-3">YÜKLENECEK DOSYAYI BURAYA BIRAKIN</p>
                                <p class="fs-8 text-gray-400">Her yeni dosya seçildiğinde eski dosya silinecektir ve işleme yeni seçilen dosya ile devam edilecektir.</p>
                              </div>
                              <!--end::Info-->
                            </div>
                          </div>
                          <!--end::Dropzone-->
                        </div>
                        <!--end::Input group-->
                      </div>
                      <!--end::Card header-->
                    </div>
                    <!--end::Dropzone-->
                  </div>                  
                </div>
              </div>
              <!--end::İçeri Aktar content-->

              <!--begin::Dışarı Aktar content-->
              <div class="tab-pane fade" id="pw_tab_pane_disari_aktar" role="tabpanel">
                <div class="border pw-border-stroke rounded-3 py-6 px-7">
                  <div class="my-5 d-flex justify-content-between">
                    <button class="btn btn-outline btn-outline-primary fs-8 d-flex align-items-center"><input type="checkbox" class="form-check-input bg-blue bg-blue me-2" checked>Gelişmiş Ayarlar</button>
                    <button class="btn btn-primary fs-8 float-end"><i class="fa-solid fa-arrow-down-to-square pe-3 align-text-bottom"></i>Dışarı Aktar</button>
                  </div>
                  <div class="row">
                    <div class="col-md-6 col-lg-3 col-xl-3 col-sm-12 my-1">
                      <div class="border pw-border-stroke rounded-3 p-7 pt-4">
                        <!--begin::Aside menu-->
                        <div class="aside-menu flex-column-fluid">
                          <!--begin::Aside Menu-->
                          <div class="hover-scroll-overlay-y" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true, md; true,}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="0">
                            <!--begin::Menu-->
                            <div class="menu menu-rounded menu-column menu-title-gray-700 menu-icon-gray-400 menu-arrow-gray-400 menu-bullet-gray-400 menu-arrow-gray-400 menu-state-bg fw-semibold" data-kt-menu="true" id="pw-seda-menu">
                              <!--begin::Menu item-->
                              <div class="menu-item menu-sub-indention menu-accordion" data-kt-menu-trigger="click">
                                <!--begin::Menu link-->
                                <a href="#" class="menu-link ps-0 py-3">
                                  <div class="d-flex align-items-center">
                                    <span class="menu-arrow"></span>
                                    <input type="checkbox" class="form-check-input bg-blue bg-blue mx-2">
                                    <span class="fs-8 fw-bold mb-0 pw-text-gray-800 menu-title">
                                      Listeler
                                    </span>
                                  </div>
                                </a>
                                <!--end::Menu link-->

                                <!--begin::Menu sub-->
                                <div class="menu-sub menu-sub-accordion pt-3">
                                  <!--begin::Menu item-->
                                  <div class="menu-item">
                                    <a href="#" class="menu-link py-3">
                                      <div class="d-flex align-items-center">
                                        <span class="menu-arrow"></span>
                                        <input type="checkbox" class="form-check-input bg-blue bg-blue mx-2">
                                        <span class="fs-9 mb-0 pw-text-gray-800 menu-title">
                                          Akış Adımları
                                        </span>
                                      </div>
                                    </a>
                                  </div>
                                  <!--end::Menu item-->

                                  <!--begin::Menu item-->
                                  <div class="menu-item">
                                    <a href="#" class="menu-link py-3">
                                      <div class="d-flex align-items-center">
                                        <span class="menu-arrow"></span>
                                        <input type="checkbox" class="form-check-input bg-blue bg-blue mx-2">
                                        <span class="fs-9 mb-0 pw-text-gray-800 menu-title">
                                          Akış Adımları
                                        </span>
                                      </div>
                                    </a>
                                  </div>
                                  <!--end::Menu item-->

                                  <!--begin::Menu item-->
                                  <div class="menu-item">
                                    <a href="#" class="menu-link py-3">
                                      <div class="d-flex align-items-center">
                                        <span class="menu-arrow"></span>
                                        <input type="checkbox" class="form-check-input bg-blue bg-blue mx-2">
                                        <span class="fs-9 mb-0 pw-text-gray-800 menu-title">
                                          Akış Adımları
                                        </span>
                                      </div>
                                    </a>
                                  </div>
                                  <!--end::Menu item-->
                                </div>
                                <!--end::Menu sub-->
                              </div>
                              <!--end::Menu item-->

                              <!--begin::Menu item-->
                              <div class="menu-item menu-sub-indention menu-accordion" data-kt-menu-trigger="click">
                                <!--begin::Menu link-->
                                <a href="#" class="menu-link ps-0 py-3">
                                  <div class="d-flex align-items-center">
                                    <span class="menu-arrow"></span>
                                    <input type="checkbox" class="form-check-input bg-blue bg-blue mx-2">
                                    <span class="fs-8 fw-bold mb-0 pw-text-gray-800 menu-title">
                                      Gruplar
                                    </span>
                                  </div>
                                </a>
                                <!--end::Menu link-->

                                <!--begin::Menu sub-->
                                <div class="menu-sub menu-sub-accordion pt-3">
                                  <!--begin::Menu item-->
                                  <div class="menu-item">
                                    <a href="#" class="menu-link py-3">
                                      <div class="d-flex align-items-center">
                                        <span class="menu-arrow"></span>
                                        <input type="checkbox" class="form-check-input bg-blue bg-blue mx-2">
                                        <span class="fs-9 mb-0 pw-text-gray-800 menu-title">
                                          Akış Adımları
                                        </span>
                                      </div>
                                    </a>
                                  </div>
                                  <!--end::Menu item-->

                                  <!--begin::Menu item-->
                                  <div class="menu-item">
                                    <a href="#" class="menu-link py-3">
                                      <div class="d-flex align-items-center">
                                        <span class="menu-arrow"></span>
                                        <input type="checkbox" class="form-check-input bg-blue bg-blue mx-2">
                                        <span class="fs-9 mb-0 pw-text-gray-800 menu-title">
                                          Akış Adımları
                                        </span>
                                      </div>
                                    </a>
                                  </div>
                                  <!--end::Menu item-->

                                  <!--begin::Menu item-->
                                  <div class="menu-item">
                                    <a href="#" class="menu-link py-3">
                                      <div class="d-flex align-items-center">
                                        <span class="menu-arrow"></span>
                                        <input type="checkbox" class="form-check-input bg-blue bg-blue mx-2">
                                        <span class="fs-9 mb-0 pw-text-gray-800 menu-title">
                                          Akış Adımları
                                        </span>
                                      </div>
                                    </a>
                                  </div>
                                  <!--end::Menu item-->
                                </div>
                                <!--end::Menu sub-->
                              </div>
                              <!--end::Menu item-->

                              <!--begin::Menu item-->
                              <div class="menu-item menu-sub-indention menu-accordion" data-kt-menu-trigger="click">
                                <!--begin::Menu link-->
                                <a href="#" class="menu-link ps-0 py-3">
                                  <div class="d-flex align-items-center">
                                    <span class="menu-arrow"></span>
                                    <input type="checkbox" class="form-check-input bg-blue bg-blue mx-2">
                                    <span class="fs-8 fw-bold mb-0 pw-text-gray-800 menu-title">
                                      Organizasyon
                                    </span>
                                  </div>
                                </a>
                                <!--end::Menu link-->

                                <!--begin::Menu sub-->
                                <div class="menu-sub menu-sub-accordion pt-3">
                                  <!--begin::Menu item-->
                                  <div class="menu-item">
                                    <a href="#" class="menu-link py-3">
                                      <div class="d-flex align-items-center">
                                        <span class="menu-arrow"></span>
                                        <input type="checkbox" class="form-check-input bg-blue bg-blue mx-2">
                                        <span class="fs-9 mb-0 pw-text-gray-800 menu-title">
                                          Akış Adımları
                                        </span>
                                      </div>
                                    </a>
                                  </div>
                                  <!--end::Menu item-->

                                  <!--begin::Menu item-->
                                  <div class="menu-item">
                                    <a href="#" class="menu-link py-3">
                                      <div class="d-flex align-items-center">
                                        <span class="menu-arrow"></span>
                                        <input type="checkbox" class="form-check-input bg-blue bg-blue mx-2">
                                        <span class="fs-9 mb-0 pw-text-gray-800 menu-title">
                                          Akış Adımları
                                        </span>
                                      </div>
                                    </a>
                                  </div>
                                  <!--end::Menu item-->

                                  <!--begin::Menu item-->
                                  <div class="menu-item">
                                    <a href="#" class="menu-link py-3">
                                      <div class="d-flex align-items-center">
                                        <span class="menu-arrow"></span>
                                        <input type="checkbox" class="form-check-input bg-blue bg-blue mx-2">
                                        <span class="fs-9 mb-0 pw-text-gray-800 menu-title">
                                          Akış Adımları
                                        </span>
                                      </div>
                                    </a>
                                  </div>
                                  <!--end::Menu item-->
                                </div>
                                <!--end::Menu sub-->
                              </div>
                              <!--end::Menu item-->

                              <!--begin::Menu item-->
                              <div class="menu-item menu-sub-indention menu-accordion" data-kt-menu-trigger="click">
                                <!--begin::Menu link-->
                                <a href="#" class="menu-link ps-0 py-3">
                                  <div class="d-flex align-items-center">
                                    <span class="menu-arrow"></span>
                                    <input type="checkbox" class="form-check-input bg-blue bg-blue mx-2">
                                    <span class="fs-8 fw-bold mb-0 pw-text-gray-800 menu-title">
                                      Kullanıcılar
                                    </span>
                                  </div>
                                </a>
                                <!--end::Menu link-->

                                <!--begin::Menu sub-->
                                <div class="menu-sub menu-sub-accordion pt-3">
                                  <!--begin::Menu item-->
                                  <div class="menu-item">
                                    <a href="#" class="menu-link py-3">
                                      <div class="d-flex align-items-center">
                                        <span class="menu-arrow"></span>
                                        <input type="checkbox" class="form-check-input bg-blue bg-blue mx-2">
                                        <span class="fs-9 mb-0 pw-text-gray-800 menu-title">
                                          Akış Adımları
                                        </span>
                                      </div>
                                    </a>
                                  </div>
                                  <!--end::Menu item-->

                                  <!--begin::Menu item-->
                                  <div class="menu-item">
                                    <a href="#" class="menu-link py-3">
                                      <div class="d-flex align-items-center">
                                        <span class="menu-arrow"></span>
                                        <input type="checkbox" class="form-check-input bg-blue bg-blue mx-2">
                                        <span class="fs-9 mb-0 pw-text-gray-800 menu-title">
                                          Akış Adımları
                                        </span>
                                      </div>
                                    </a>
                                  </div>
                                  <!--end::Menu item-->

                                  <!--begin::Menu item-->
                                  <div class="menu-item">
                                    <a href="#" class="menu-link py-3">
                                      <div class="d-flex align-items-center">
                                        <span class="menu-arrow"></span>
                                        <input type="checkbox" class="form-check-input bg-blue bg-blue mx-2">
                                        <span class="fs-9 mb-0 pw-text-gray-800 menu-title">
                                          Akış Adımları
                                        </span>
                                      </div>
                                    </a>
                                  </div>
                                  <!--end::Menu item-->
                                </div>
                                <!--end::Menu sub-->
                              </div>
                              <!--end::Menu item-->

                              <!--begin::Menu item-->
                              <div class="menu-item menu-sub-indention menu-accordion" data-kt-menu-trigger="click">
                                <!--begin::Menu link-->
                                <a href="#" class="menu-link ps-0 py-3">
                                  <div class="d-flex align-items-center">
                                    <span class="menu-arrow"></span>
                                    <input type="checkbox" class="form-check-input bg-blue bg-blue mx-2">
                                    <span class="fs-8 fw-bold mb-0 pw-text-gray-800 menu-title">
                                      Tanımlı İşler
                                    </span>
                                  </div>
                                </a>
                                <!--end::Menu link-->

                                <!--begin::Menu sub-->
                                <div class="menu-sub menu-sub-accordion pt-3">
                                  <!--begin::Menu item-->
                                  <div class="menu-item">
                                    <a href="#" class="menu-link py-3">
                                      <div class="d-flex align-items-center">
                                        <span class="menu-arrow"></span>
                                        <input type="checkbox" class="form-check-input bg-blue bg-blue mx-2">
                                        <span class="fs-9 mb-0 pw-text-gray-800 menu-title">
                                          Akış Adımları
                                        </span>
                                      </div>
                                    </a>
                                  </div>
                                  <!--end::Menu item-->

                                  <!--begin::Menu item-->
                                  <div class="menu-item">
                                    <a href="#" class="menu-link py-3">
                                      <div class="d-flex align-items-center">
                                        <span class="menu-arrow"></span>
                                        <input type="checkbox" class="form-check-input bg-blue bg-blue mx-2">
                                        <span class="fs-9 mb-0 pw-text-gray-800 menu-title">
                                          Akış Adımları
                                        </span>
                                      </div>
                                    </a>
                                  </div>
                                  <!--end::Menu item-->

                                  <!--begin::Menu item-->
                                  <div class="menu-item">
                                    <a href="#" class="menu-link py-3">
                                      <div class="d-flex align-items-center">
                                        <span class="menu-arrow"></span>
                                        <input type="checkbox" class="form-check-input bg-blue bg-blue mx-2">
                                        <span class="fs-9 mb-0 pw-text-gray-800 menu-title">
                                          Akış Adımları
                                        </span>
                                      </div>
                                    </a>
                                  </div>
                                  <!--end::Menu item-->
                                </div>
                                <!--end::Menu sub-->
                              </div>
                              <!--end::Menu item-->

                              <!--begin::Menu item-->
                              <div class="menu-item menu-sub-indention menu-accordion" data-kt-menu-trigger="click">
                                <!--begin::Menu link-->
                                <a href="#" class="menu-link ps-0 py-3">
                                  <div class="d-flex align-items-center">
                                    <span class="menu-arrow"></span>
                                    <input type="checkbox" class="form-check-input bg-blue bg-blue mx-2">
                                    <span class="fs-8 fw-bold mb-0 pw-text-gray-800 menu-title">
                                      Metodlar
                                    </span>
                                  </div>
                                </a>
                                <!--end::Menu link-->

                                <!--begin::Menu sub-->
                                <div class="menu-sub menu-sub-accordion pt-3">
                                  <!--begin::Menu item-->
                                  <div class="menu-item">
                                    <a href="#" class="menu-link py-3">
                                      <div class="d-flex align-items-center">
                                        <span class="menu-arrow"></span>
                                        <input type="checkbox" class="form-check-input bg-blue bg-blue mx-2">
                                        <span class="fs-9 mb-0 pw-text-gray-800 menu-title">
                                          Akış Adımları
                                        </span>
                                      </div>
                                    </a>
                                  </div>
                                  <!--end::Menu item-->

                                  <!--begin::Menu item-->
                                  <div class="menu-item">
                                    <a href="#" class="menu-link py-3">
                                      <div class="d-flex align-items-center">
                                        <span class="menu-arrow"></span>
                                        <input type="checkbox" class="form-check-input bg-blue bg-blue mx-2">
                                        <span class="fs-9 mb-0 pw-text-gray-800 menu-title">
                                          Akış Adımları
                                        </span>
                                      </div>
                                    </a>
                                  </div>
                                  <!--end::Menu item-->

                                  <!--begin::Menu item-->
                                  <div class="menu-item">
                                    <a href="#" class="menu-link py-3">
                                      <div class="d-flex align-items-center">
                                        <span class="menu-arrow"></span>
                                        <input type="checkbox" class="form-check-input bg-blue bg-blue mx-2">
                                        <span class="fs-9 mb-0 pw-text-gray-800 menu-title">
                                          Akış Adımları
                                        </span>
                                      </div>
                                    </a>
                                  </div>
                                  <!--end::Menu item-->
                                </div>
                                <!--end::Menu sub-->
                              </div>
                              <!--end::Menu item-->

                              <!--begin::Menu item-->
                              <div class="menu-item menu-sub-indention menu-accordion" data-kt-menu-trigger="click">
                                <!--begin::Menu link-->
                                <a href="#" class="menu-link ps-0 py-3">
                                  <div class="d-flex align-items-center">
                                    <span class="menu-arrow"></span>
                                    <input type="checkbox" class="form-check-input bg-blue bg-blue mx-2">
                                    <span class="fs-8 fw-bold mb-0 pw-text-gray-800 menu-title">
                                      Yetki Setleri
                                    </span>
                                  </div>
                                </a>
                                <!--end::Menu link-->

                                <!--begin::Menu sub-->
                                <div class="menu-sub menu-sub-accordion pt-3">
                                  <!--begin::Menu item-->
                                  <div class="menu-item">
                                    <a href="#" class="menu-link py-3">
                                      <div class="d-flex align-items-center">
                                        <span class="menu-arrow"></span>
                                        <input type="checkbox" class="form-check-input bg-blue bg-blue mx-2">
                                        <span class="fs-9 mb-0 pw-text-gray-800 menu-title">
                                          Akış Adımları
                                        </span>
                                      </div>
                                    </a>
                                  </div>
                                  <!--end::Menu item-->

                                  <!--begin::Menu item-->
                                  <div class="menu-item">
                                    <a href="#" class="menu-link py-3">
                                      <div class="d-flex align-items-center">
                                        <span class="menu-arrow"></span>
                                        <input type="checkbox" class="form-check-input bg-blue bg-blue mx-2">
                                        <span class="fs-9 mb-0 pw-text-gray-800 menu-title">
                                          Akış Adımları
                                        </span>
                                      </div>
                                    </a>
                                  </div>
                                  <!--end::Menu item-->

                                  <!--begin::Menu item-->
                                  <div class="menu-item">
                                    <a href="#" class="menu-link py-3">
                                      <div class="d-flex align-items-center">
                                        <span class="menu-arrow"></span>
                                        <input type="checkbox" class="form-check-input bg-blue bg-blue mx-2">
                                        <span class="fs-9 mb-0 pw-text-gray-800 menu-title">
                                          Akış Adımları
                                        </span>
                                      </div>
                                    </a>
                                  </div>
                                  <!--end::Menu item-->
                                </div>
                                <!--end::Menu sub-->
                              </div>
                              <!--end::Menu item-->

                              <!--begin::Menu item-->
                              <div class="menu-item menu-sub-indention menu-accordion" data-kt-menu-trigger="click">
                                <!--begin::Menu link-->
                                <a href="#" class="menu-link ps-0 py-3">
                                  <div class="d-flex align-items-center">
                                    <span class="menu-arrow"></span>
                                    <input type="checkbox" class="form-check-input bg-blue bg-blue mx-2">
                                    <span class="fs-8 fw-bold mb-0 pw-text-gray-800 menu-title">
                                      Tipler
                                    </span>
                                  </div>
                                </a>
                                <!--end::Menu link-->

                                <!--begin::Menu sub-->
                                <div class="menu-sub menu-sub-accordion pt-3">
                                  <!--begin::Menu item-->
                                  <div class="menu-item">
                                    <a href="#" class="menu-link py-3">
                                      <div class="d-flex align-items-center">
                                        <span class="menu-arrow"></span>
                                        <input type="checkbox" class="form-check-input bg-blue bg-blue mx-2">
                                        <span class="fs-9 mb-0 pw-text-gray-800 menu-title">
                                          Akış Adımları
                                        </span>
                                      </div>
                                    </a>
                                  </div>
                                  <!--end::Menu item-->

                                  <!--begin::Menu item-->
                                  <div class="menu-item">
                                    <a href="#" class="menu-link py-3">
                                      <div class="d-flex align-items-center">
                                        <span class="menu-arrow"></span>
                                        <input type="checkbox" class="form-check-input bg-blue bg-blue mx-2">
                                        <span class="fs-9 mb-0 pw-text-gray-800 menu-title">
                                          Akış Adımları
                                        </span>
                                      </div>
                                    </a>
                                  </div>
                                  <!--end::Menu item-->

                                  <!--begin::Menu item-->
                                  <div class="menu-item">
                                    <a href="#" class="menu-link py-3">
                                      <div class="d-flex align-items-center">
                                        <span class="menu-arrow"></span>
                                        <input type="checkbox" class="form-check-input bg-blue bg-blue mx-2">
                                        <span class="fs-9 mb-0 pw-text-gray-800 menu-title">
                                          Akış Adımları
                                        </span>
                                      </div>
                                    </a>
                                  </div>
                                  <!--end::Menu item-->
                                </div>
                                <!--end::Menu sub-->
                              </div>
                              <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->  
                          </div>
                          <!--end::Aside Menu-->
                        </div>
                        <!--end::Aside menu-->
                      </div>
                    </div>

                    <div class="col-md-6 col-lg-9 col-xl-9 col-sm-12 my-1">
                      <div class="border pw-border-stroke rounded-3 p-7">
                        <div class="mb-5">
                          <button class="btn btn-primary fs-8 my-1 me-5"><i class="fa-solid fa-trash pe-3 align-text-bottom"></i>Seçili Satırı Sil</button>
                          <button class="btn btn-primary fs-8 my-1"><i class="fa-solid fa-trash pe-3 align-text-bottom"></i>Tüm Satırları Sil</button>
                        </div>
                        <!--begin::Taşıma tablosu-->
                        <div class="table-responsive overflow-x-auto rounded">
                          <!--begin::Table-Light-->
                          <table class="table table-row-bordered border pw-dark-bg-table pw-table-border-gray pw-table-border-gray table-rounded align-middle w-max-content min-w-100 gy-2 gx-9 gs-9">
                            <thead>
                              <tr class="fw-semibold fs-8 pw-text-neutral-700 pw-bg-neutral-100">
                                <th class="py-3">Kayıt Tipi</th>
                                <th class="py-3">Nesne Adı</th>
                              </tr>
                            </thead>
                            <tbody>
                              <!--begin::Row-->
                              <tr class="fw-medium pw-text-neutral-700 fs-8">
                                <td><i class="fa-solid fa-calendar-lines pw-text-primary-300 pe-2"></i>Liste</td>
                                <td>2022 Özel Günler</td>
                              </tr>
                              <!--end::Row-->

                              <!--begin::Row-->
                              <tr class="fw-medium pw-text-neutral-700 fs-8">
                                <td><i class="fa-solid fa-calendar-lines pw-text-primary-300 pe-2"></i>Liste</td>
                                <td>2022 Özel Günler</td>
                              </tr>
                              <!--end::Row-->

                              <!--begin::Row-->
                              <tr class="fw-medium pw-text-neutral-700 fs-8">
                                <td><i class="fa-solid fa-calendar-lines pw-text-primary-300 pe-2"></i>Liste</td>
                                <td>2022 Özel Günler</td>
                              </tr>
                              <!--end::Row-->

                              <!--begin::Row-->
                              <tr class="fw-medium pw-text-neutral-700 fs-8">
                                <td><i class="fa-solid fa-calendar-lines pw-text-primary-300 pe-2"></i>Liste</td>
                                <td>2022 Özel Günler</td>
                              </tr>
                              <!--end::Row-->

                              <!--begin::Row-->
                              <tr class="fw-medium pw-text-neutral-700 fs-8">
                                <td><i class="fa-solid fa-calendar-lines pw-text-primary-300 pe-2"></i>Liste</td>
                                <td>2022 Özel Günler</td>
                              </tr>
                              <!--end::Row-->
                            </tbody>
                          </table>
                          <!--end::Table-Light-->
                        </div>
                        <!--end::Taşıma tablosu-->
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>
              <!--end::Dışarı Aktar content-->

              <!--begin::Tarihçe content-->
              <div class="tab-pane fade" id="pw_tab_pane_tarihce" role="tabpanel">
                <div class="border pw-border-stroke rounded-3 p-8">
                  <!--begin::Tarihçe tablosu-->
                  <div class="table-responsive overflow-x-auto mt-5">
                    <!--begin::Table-Light-->
                    <table class="table table-row-bordered border pw-dark-bg-table pw-table-border-gray pw-table-border-gray table-rounded align-middle w-max-content min-w-100 gy-2 gx-9 gs-9">
                      <thead>
                        <tr class="fw-semibold fs-8 pw-text-neutral-700 pw-bg-neutral-100">
                          <th class="py-3">Tipi</th>
                          <th class="py-3">Tarih</th>
                          <th class="py-3">Kullanıcı</th>
                          <th class="py-3">Kaynak</th>
                          <th class="py-3">Version</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="fw-medium pw-text-neutral-700 fs-9 hover-pw-bg-primary-300">
                          <td class="py-6 d-flex"><i class="fa-solid fa-arrow-down text-danger"></i></td>
                          <td class="py-6">21.12.2021</td>
                          <td class="py-6">UIDESK</td>
                          <td class="py-6">HTML 5 V5.0.0.0</td>
                          <td class="py-6">4.08 saat</td>
                        </tr>
                        <tr class="fw-medium pw-text-neutral-700 fs-9 hover-pw-bg-primary-300">
                          <td class="py-6 d-flex"><i class="fa-solid fa-arrow-up text-success"></i></td>
                          <td class="py-6">20.10.2020</td>
                          <td class="py-6">Eyüp Tarık Doğan</td>
                          <td class="py-6">HTML 5 V5.0.0.0</td>
                          <td class="py-6">4.08 saat</td>
                        </tr>
                        <tr class="fw-medium pw-text-neutral-700 fs-9 hover-pw-bg-primary-300">
                          <td class="py-6 d-flex"><i class="fa-solid fa-arrow-up text-success"></i></td>
                          <td class="py-6">10.09.2023</td>
                          <td class="py-6">Berke Deniz</td>
                          <td class="py-6">HTML 5 V5.0.0.0</td>
                          <td class="py-6">4.08 saat</td>
                        </tr>
                        <tr class="fw-medium pw-text-neutral-700 fs-9 hover-pw-bg-primary-300">
                          <td class="py-6 d-flex"><i class="fa-solid fa-arrow-down text-danger"></i></td>
                          <td class="py-6">11.12.2021</td>
                          <td class="py-6">Remzi Gölgeli</td>
                          <td class="py-6">HTML 5 V5.0.0.0</td>
                          <td class="py-6">4.08 saat</td>
                        </tr>
                      </tbody>
                    </table>
                    <!--end::Table-Light-->
                  </div>
                  <!--end::Tarihçe tablosu-->
                </div>
              </div>
              <!--end::Tarihçe content-->
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
  var myDropzone = new Dropzone("#kt_dropzonejs_example_1", {
      url: "https://keenthemes.com/scripts/void.php", // Set the url for your upload script location
      paramName: "file", // The name that will be used to transfer the file
      maxFiles: 10,
      maxFilesize: 10, // MB
      addRemoveLinks: true,
      accept: function(file, done) {
          if (file.name == "wow.jpg") {
              done("Naha, you don't.");
          } else {
              done();
          }
      }
  });
</script>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/foot.php'; ?>