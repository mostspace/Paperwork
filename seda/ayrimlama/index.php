<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/header.php'; ?>

<!--begin::Wrapper-->
<div class="app-wrapper flex-column flex-row-fluid p-6" id="kt_app_wrapper">

  <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/sidebar.php'; ?>
  <!--begin::Main-->
  <div class="app-main flex-column flex-row-fluid z-index-1" id="kt_app_main">
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
                  <a href="/islemler/" class="text-muted text-hover-primary">SEDA</a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                  <span class="text-muted">/</span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item active"> SEDA</li>
                <!--end::Item-->
              </ul>
              <!--end::Breadcrumb-->
              <!--begin::Title-->
              <h1 class="page-heading d-flex text-dark fw-bold fs-4 flex-column justify-content-center my-0">
                SEDA
              </h1>
              <!--end::Title-->
            </div>
            <!--end::Page title-->

          </div>
          <!--end::Toolbar container-->
        </div>
        <!--end::Toolbar-->

        <!--begin::Content -->
        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div class="row g-7">
                <!--begin::Contact groups-->
                <div class="col-lg-2 col-xl-2 col-md-3 col-sm-12">
                    <!--begin::Contact group wrapper-->
                    <div class="border rounded-3 pw-shadow-3 p-5 h-100 pt-1" id="rightClickMenu">
                        <div class="mt-2">
                            <a href="/#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5 me-1 my-1">
                                <i class="fa-solid fa-layer-group fs-7 pw-text-primary-300"></i>
                            </a>
                            <a href="/#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5 me-1 my-1">
                                <i class="fa-solid fa-circle-check fs-7 pw-text-primary-300"></i>
                            </a>
                            <a href="/#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5 my-1">
                                <i class="fa-solid fa-circle-xmark fs-7 pw-text-primary-300"></i>
                            </a>
                        </div>

                        <!--begin::Menu-->
                        <div class="menu menu-rounded menu-column menu-active-bg menu-hover-bg menu-title-gray-700 pw-aside-menu fs-9 fw-semibold w-100 mt-2" id="#kt_aside_menu" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item">
                                <a href="#" class="menu-link active border-3 border-start rounded-1 border-primary">
                                <span class="menu-icon w-auto">
                                    <i class="fa-solid fa-book fs-6"></i>
                                </span>
                                <span class="menu-title">Kaynak Sayfalar (0)</span>
                                </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item">
                                <a href="#" class="menu-link">
                                <span class="menu-icon w-auto">
                                    <i class="fa-solid fa-book fs-6"></i>
                                </span>
                                <span class="menu-title">Kaynak Sayfalar (0)</span>
                                </a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->

                        <!--begin::Mouse right-click menu-->
                        <div id="contextMenu" class="context-menu position-absolute bg-white" style="display:none"> 
                            <div class="border rounded-3 pw-shadow-3 w-max-content">
                                <!--begin::Menu-->
                                <div class="menu menu-rounded menu-column menu-gray-600 menu-state-bg fw-bold" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                        <!--begin::Menu link-->
                                        <a href="#" class="menu-link h-40px py-3">
                                            <span class="menu-icon">
                                                <i class="fa-solid fa-check text-primary fs-6"></i>
                                            </span>
                                            <span class="menu-title pw-text-neutral-700">Belge Profili Ata</span>
                                            <span class="menu-arrow ms-5 w-10px"></span>
                                        </a>
                                        <!--end::Menu link-->

                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown p-3 w-200px">
                                            <!--begin::Menu item-->
                                            <div class="menu-item">
                                                <a href="#" class="menu-link px-1 py-3">
                                                    <span class="menu-title pw-text-neutral-700">Birinci Profil</span>
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item">
                                                <a href="#" class="menu-link px-1 py-3">
                                                    <span class="menu-title pw-text-neutral-700">Formsuz Belge </span>
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                        <!--begin::Menu link-->
                                        <a href="#" class="menu-link h-40px py-3">
                                            <span class="menu-icon">
                                                <i class="fa-solid fa-check-double text-primary fs-6"></i>
                                            </span>
                                            <span class="menu-title pw-text-neutral-700">Belge Profili Ata  (Tümüne)</span>
                                            <span class="menu-arrow w-10px ms-5"></span>
                                        </a>
                                        <!--end::Menu link-->

                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown p-3 w-200px">
                                            <!--begin::Menu item-->
                                            <div class="menu-item">
                                                <a href="#" class="menu-link px-1 py-3">
                                                    <span class="menu-title pw-text-neutral-700">Example Link</span>
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item">
                                                <a href="#" class="menu-link px-1 py-3">
                                                    <span class="menu-title pw-text-neutral-700">Example Link</span>
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item">
                                        <a href="#" class="menu-link h-40px py-3 border-bottom">
                                            <span class="menu-icon">
                                                <i class="fa-solid fa-arrow-down-arrow-up text-primary fs-6"></i>
                                            </span>
                                            <span class="menu-title pw-text-neutral-700">Belge Türüne Göre Sırala</span>
                                        </a>
                                    </div>
                                    <!--end::Menu item-->                            

                                    <!--begin::Menu item-->
                                    <div class="menu-item">
                                        <a href="#" class="menu-link h-40px py-3">
                                            <span class="menu-icon">
                                                <i class="fa-solid fa-trash-can text-danger fs-6"></i>
                                            </span>
                                            <span class="menu-title pw-text-neutral-700">Belgeyi Sil</span>
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </div>
                        </div> 
                        <!--end::Mouse right-click menu-->
                    </div>
                    <!--end::Contact group wrapper-->
                </div>
                <!--end::Contact groups-->

                <!--begin::arrow groups-->
                <div class="" style="display: contents">
                    <div class="" style="transform: translate(-50%, 45%)">      
                        <div><i class="fa-solid fa-arrow-left-from-line my-2 pw-text-neutral-400"></i></div>
                        <i class="fa-solid fa-arrow-right-from-line my-2 pw-text-neutral-400"></i>
                    </div>
                </div>
                <!--end::arrow groups-->

                <!--begin::Search-->
                <div class="col-lg-6 col-xl-6 col-md-6 col-sm-12 ps-0">
                    <!--begin::Contacts-->
                    <div class="border rounded-3 pw-shadow-3 p-5 h-100 pt-1">
                        <!--begin::Table tabs wrapper-->
                        <div class="table-reponsive overflow-x-auto">
                            <!--begin::Table tabs-->
                            <div class="nav nav-tabs nav-line-tabs fs-6" role="tablist">
                                <!--begin::Tab item-->
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link mx-0 py-3 px-3 fs-base rounded-0 fw-medium active" data-bs-toggle="tab" href="#pw_tab_pane_ayrimlama" aria-selected="true" role="tab">Ayrımlama</a>
                                </li>
                                <!--end::Tab item-->

                                <!--begin::Tab item-->
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link py-3 px-3 mx-0 fs-base fw-medium rounded-0 pw-text-neutral-500" data-bs-toggle="tab" href="#pw_tab_pane_indeksleme" aria-selected="false" role="tab" tabindex="-1">İndeksleme</a>
                                </li>
                                <!--end::Tab item-->

                                <!--begin::Tab item-->
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link py-3 px-3 mx-0 fs-base fw-medium rounded-0 pw-text-neutral-500" data-bs-toggle="tab" href="#pw_tab_pane_dosyakarti" aria-selected="false" role="tab" tabindex="-1">Dosya Kartı</a>
                                </li>
                                <!--end::Tab item-->

                                <!--begin::Tab item-->
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link py-3 px-3 mx-0 fs-base fw-medium rounded-0 pw-text-neutral-500" data-bs-toggle="tab" href="#pw_tab_pane_dosyakarti_ara" aria-selected="false" role="tab" tabindex="-1">Dosya Kartı</a>
                                </li>
                                <!--end::Tab item-->
                            </div>
                            <!--end::Table tabs-->
                        </div>
                        <!--end::Table tabs wrapper-->

                        <!--begin::Table tab contents-->
                        <div class="tab-content pw-dashboard-tab-content" id="tableTabContents">
                            <!--begin::Ayrımlama content-->
                            <div class="tab-pane py-10 fade active show" id="pw_tab_pane_ayrimlama" role="tabpanel">
                                <div class="row px-3">
                                    <a href="/#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5 me-1 my-1">
                                        <i class="fa-solid fa-file-plus fs-7 pw-text-primary-300"></i>
                                    </a>
                                    <a href="/#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5 me-1 my-1">
                                        <i class="fa-solid fa-print fs-7 pw-text-primary-300"></i>
                                    </a>
                                    <a href="/#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5 my-1">
                                        <i class="fa-solid fa-file-check fs-7 pw-text-primary-300"></i>
                                    </a>
                                    <a href="/#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5 me-1 my-1">
                                        <i class="fa-solid fa-file-dashed-line fs-7 pw-text-primary-300"></i>
                                    </a>
                                    <a href="/#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5 me-1 my-1">
                                        <i class="fa-solid fa-files fs-7 pw-text-primary-300"></i>
                                    </a>
                                    <a href="/#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5 my-1">
                                        <i class="fa-solid fa-file fs-7 pw-text-primary-300"></i>
                                    </a>
                                    <a href="/#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5 me-1 my-1">
                                        <i class="fa-solid fa-file-invoice fs-7 pw-text-primary-300"></i>
                                    </a>
                                    <a href="/#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5 me-1 my-1">
                                        <i class="fa-solid fa-file-lines fs-7 pw-text-primary-300"></i>
                                    </a>
                                    <a href="/#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5 my-1">
                                        <i class="fa-solid fa-trash-can fs-7 pw-text-primary-300"></i>
                                    </a>
                                    <a href="/#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5 my-1">
                                        <i class="fa-solid fa-bars-sort fs-7 pw-text-primary-300"></i>
                                    </a>
                                </div>

                                <div class="row px-3 mt-5">
                                    <div class="border rounded-2 p-3 table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr class="d-flex justify-content-between">
                                                    <td class="px-1 py-1">
                                                        <div class="text-center">
                                                            <div class="w-55px h-65px pw-bg-neutral-200 rounded-1"></div>
                                                            <div class="mt-1">1</div>
                                                        </div>
                                                    </td>
                                                    <td class="px-1 py-1">
                                                        <div class="text-center">
                                                            <div class="w-55px h-65px pw-bg-neutral-200 rounded-1"></div>
                                                            <div class="mt-1">2</div>
                                                        </div>
                                                    </td>
                                                    <td class="px-1 py-1">
                                                        <div class="text-center">
                                                            <div class="w-55px h-65px pw-bg-neutral-200 rounded-1"></div>
                                                            <div class="mt-1">3</div>
                                                        </div>
                                                    </td>
                                                    <td class="px-1 py-1">
                                                        <div class="text-center">
                                                            <div class="w-55px h-65px pw-bg-neutral-200 rounded-1"></div>
                                                            <div class="mt-1">4</div>
                                                        </div>
                                                    </td>
                                                    <td class="px-1 py-1">
                                                        <div class="text-center">
                                                            <div class="w-55px h-65px pw-bg-neutral-200 rounded-1"></div>
                                                            <div class="mt-1">5</div>
                                                        </div>
                                                    </td>
                                                    <td class="px-1 py-1">
                                                        <div class="text-center">
                                                            <div class="w-55px h-65px pw-bg-neutral-200 rounded-1"></div>
                                                            <div class="mt-1">6</div>
                                                        </div>
                                                    </td>
                                                    <td class="px-1 py-1">
                                                        <div class="text-center">
                                                            <div class="w-55px h-65px pw-bg-neutral-200 rounded-1"></div>
                                                            <div class="mt-1">7</div>
                                                        </div>
                                                    </td>
                                                    <td class="px-1 py-1">
                                                        <div class="text-center">
                                                            <div class="w-55px h-65px pw-bg-neutral-200 rounded-1"></div>
                                                            <div class="mt-1">8</div>
                                                        </div>
                                                    </td>
                                                    <td class="px-1 py-1">
                                                        <div class="text-center">
                                                            <div class="w-55px h-65px pw-bg-neutral-200 rounded-1"></div>
                                                            <div class="mt-1">9</div>
                                                        </div>
                                                    </td>
                                                    <td class="px-1 py-1">
                                                        <div class="text-center">
                                                            <div class="w-55px h-65px pw-bg-neutral-200 rounded-1"></div>
                                                            <div class="mt-1">10</div>
                                                        </div>
                                                    </td>
                                                    <td class="px-1 py-1">
                                                        <div class="text-center">
                                                            <div class="w-55px h-65px pw-bg-neutral-200 rounded-1"></div>
                                                            <div class="mt-1">11</div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="d-flex justify-content-between">
                                                    <td class="px-1 py-1">
                                                        <div class="text-center">
                                                            <div class="w-55px h-65px pw-bg-neutral-200 rounded-1"></div>
                                                            <div class="mt-1">1</div>
                                                        </div>
                                                    </td>
                                                    <td class="px-1 py-1">
                                                        <div class="text-center">
                                                            <div class="w-55px h-65px pw-bg-neutral-200 rounded-1"></div>
                                                            <div class="mt-1">2</div>
                                                        </div>
                                                    </td>
                                                    <td class="px-1 py-1">
                                                        <div class="text-center">
                                                            <div class="w-55px h-65px pw-bg-neutral-200 rounded-1"></div>
                                                            <div class="mt-1">3</div>
                                                        </div>
                                                    </td>
                                                    <td class="px-1 py-1">
                                                        <div class="text-center">
                                                            <div class="w-55px h-65px pw-bg-neutral-200 rounded-1"></div>
                                                            <div class="mt-1">4</div>
                                                        </div>
                                                    </td>
                                                    <td class="px-1 py-1">
                                                        <div class="text-center">
                                                            <div class="w-55px h-65px pw-bg-neutral-200 rounded-1"></div>
                                                            <div class="mt-1">5</div>
                                                        </div>
                                                    </td>
                                                    <td class="px-1 py-1">
                                                        <div class="text-center">
                                                            <div class="w-55px h-65px pw-bg-neutral-200 rounded-1"></div>
                                                            <div class="mt-1">6</div>
                                                        </div>
                                                    </td>
                                                    <td class="px-1 py-1">
                                                        <div class="text-center">
                                                            <div class="w-55px h-65px pw-bg-neutral-200 rounded-1"></div>
                                                            <div class="mt-1">7</div>
                                                        </div>
                                                    </td>
                                                    <td class="px-1 py-1">
                                                        <div class="text-center">
                                                            <div class="w-55px h-65px pw-bg-neutral-200 rounded-1"></div>
                                                            <div class="mt-1">8</div>
                                                        </div>
                                                    </td>
                                                    <td class="px-1 py-1">
                                                        <div class="text-center">
                                                            <div class="w-55px h-65px pw-bg-neutral-200 rounded-1"></div>
                                                            <div class="mt-1">9</div>
                                                        </div>
                                                    </td>
                                                    <td class="px-1 py-1">
                                                        <div class="text-center">
                                                            <div class="w-55px h-65px pw-bg-neutral-200 rounded-1"></div>
                                                            <div class="mt-1">10</div>
                                                        </div>
                                                    </td>
                                                    <td class="px-1 py-1">
                                                        <div class="text-center">
                                                            <div class="w-55px h-65px pw-bg-neutral-200 rounded-1"></div>
                                                            <div class="mt-1">11</div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="d-flex justify-content-between">
                                                    <td class="px-1 py-1">
                                                        <div class="text-center">
                                                            <div class="w-55px h-65px pw-bg-neutral-200 rounded-1"></div>
                                                            <div class="mt-1">1</div>
                                                        </div>
                                                    </td>
                                                    <td class="px-1 py-1">
                                                        <div class="text-center">
                                                            <div class="w-55px h-65px pw-bg-neutral-200 rounded-1"></div>
                                                            <div class="mt-1">2</div>
                                                        </div>
                                                    </td>
                                                    <td class="px-1 py-1">
                                                        <div class="text-center">
                                                            <div class="w-55px h-65px pw-bg-neutral-200 rounded-1"></div>
                                                            <div class="mt-1">3</div>
                                                        </div>
                                                    </td>
                                                    <td class="px-1 py-1">
                                                        <div class="text-center">
                                                            <div class="w-55px h-65px pw-bg-neutral-200 rounded-1"></div>
                                                            <div class="mt-1">4</div>
                                                        </div>
                                                    </td>
                                                    <td class="px-1 py-1">
                                                        <div class="text-center">
                                                            <div class="w-55px h-65px pw-bg-neutral-200 rounded-1"></div>
                                                            <div class="mt-1">5</div>
                                                        </div>
                                                    </td>
                                                    <td class="px-1 py-1">
                                                        <div class="text-center">
                                                            <div class="w-55px h-65px pw-bg-neutral-200 rounded-1"></div>
                                                            <div class="mt-1">6</div>
                                                        </div>
                                                    </td>
                                                    <td class="px-1 py-1">
                                                        <div class="text-center">
                                                            <div class="w-55px h-65px pw-bg-neutral-200 rounded-1"></div>
                                                            <div class="mt-1">7</div>
                                                        </div>
                                                    </td>
                                                    <td class="px-1 py-1">
                                                        <div class="text-center">
                                                            <div class="w-55px h-65px pw-bg-neutral-200 rounded-1"></div>
                                                            <div class="mt-1">8</div>
                                                        </div>
                                                    </td>
                                                    <td class="px-1 py-1">
                                                        <div class="text-center">
                                                            <div class="w-55px h-65px pw-bg-neutral-200 rounded-1"></div>
                                                            <div class="mt-1">9</div>
                                                        </div>
                                                    </td>
                                                    <td class="px-1 py-1">
                                                        <div class="text-center">
                                                            <div class="w-55px h-65px pw-bg-neutral-200 rounded-1"></div>
                                                            <div class="mt-1">10</div>
                                                        </div>
                                                    </td>
                                                    <td class="px-1 py-1">
                                                        <div class="text-center">
                                                            <div class="w-55px h-65px pw-bg-neutral-200 rounded-1"></div>
                                                            <div class="mt-1">11</div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="d-flex justify-content-between">
                                                    <td class="px-1 py-1">
                                                        <div class="text-center">
                                                            <div class="w-55px h-65px pw-bg-neutral-200 rounded-1"></div>
                                                            <div class="mt-1">1</div>
                                                        </div>
                                                    </td>
                                                    <td class="px-1 py-1">
                                                        <div class="text-center">
                                                            <div class="w-55px h-65px pw-bg-neutral-200 rounded-1"></div>
                                                            <div class="mt-1">2</div>
                                                        </div>
                                                    </td>
                                                    <td class="px-1 py-1">
                                                        <div class="text-center">
                                                            <div class="w-55px h-65px pw-bg-neutral-200 rounded-1"></div>
                                                            <div class="mt-1">3</div>
                                                        </div>
                                                    </td>
                                                    <td class="px-1 py-1">
                                                        <div class="text-center">
                                                            <div class="w-55px h-65px pw-bg-neutral-200 rounded-1"></div>
                                                            <div class="mt-1">4</div>
                                                        </div>
                                                    </td>
                                                    <td class="px-1 py-1">
                                                        <div class="text-center">
                                                            <div class="w-55px h-65px pw-bg-neutral-200 rounded-1"></div>
                                                            <div class="mt-1">5</div>
                                                        </div>
                                                    </td>
                                                    <td class="px-1 py-1">
                                                        <div class="text-center">
                                                            <div class="w-55px h-65px pw-bg-neutral-200 rounded-1"></div>
                                                            <div class="mt-1">6</div>
                                                        </div>
                                                    </td>
                                                    <td class="px-1 py-1">
                                                        <div class="text-center">
                                                            <div class="w-55px h-65px pw-bg-neutral-200 rounded-1"></div>
                                                            <div class="mt-1">7</div>
                                                        </div>
                                                    </td>
                                                    <td class="px-1 py-1">
                                                        <div class="text-center">
                                                            <div class="w-55px h-65px pw-bg-neutral-200 rounded-1"></div>
                                                            <div class="mt-1">8</div>
                                                        </div>
                                                    </td>
                                                    <td class="px-1 py-1">
                                                        <div class="text-center">
                                                            <div class="w-55px h-65px pw-bg-neutral-200 rounded-1"></div>
                                                            <div class="mt-1">9</div>
                                                        </div>
                                                    </td>
                                                    <td class="px-1 py-1">
                                                        <div class="text-center">
                                                            <div class="w-55px h-65px pw-bg-neutral-200 rounded-1"></div>
                                                            <div class="mt-1">10</div>
                                                        </div>
                                                    </td>
                                                    <td class="px-1 py-1">
                                                        <div class="text-center">
                                                            <div class="w-55px h-65px pw-bg-neutral-200 rounded-1"></div>
                                                            <div class="mt-1">11</div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="d-flex justify-content-between">
                                                    <td class="px-1 py-1">
                                                        <div class="text-center">
                                                            <div class="w-55px h-65px pw-bg-neutral-200 rounded-1"></div>
                                                            <div class="mt-1">1</div>
                                                        </div>
                                                    </td>
                                                    <td class="px-1 py-1">
                                                        <div class="text-center">
                                                            <div class="w-55px h-65px pw-bg-neutral-200 rounded-1"></div>
                                                            <div class="mt-1">2</div>
                                                        </div>
                                                    </td>
                                                    <td class="px-1 py-1">
                                                        <div class="text-center">
                                                            <div class="w-55px h-65px pw-bg-neutral-200 rounded-1"></div>
                                                            <div class="mt-1">3</div>
                                                        </div>
                                                    </td>
                                                    <td class="px-1 py-1">
                                                        <div class="text-center">
                                                            <div class="w-55px h-65px pw-bg-neutral-200 rounded-1"></div>
                                                            <div class="mt-1">4</div>
                                                        </div>
                                                    </td>
                                                    <td class="px-1 py-1">
                                                        <div class="text-center">
                                                            <div class="w-55px h-65px pw-bg-neutral-200 rounded-1"></div>
                                                            <div class="mt-1">5</div>
                                                        </div>
                                                    </td>
                                                    <td class="px-1 py-1">
                                                        <div class="text-center">
                                                            <div class="w-55px h-65px pw-bg-neutral-200 rounded-1"></div>
                                                            <div class="mt-1">6</div>
                                                        </div>
                                                    </td>
                                                    <td class="px-1 py-1">
                                                        <div class="text-center">
                                                            <div class="w-55px h-65px pw-bg-neutral-200 rounded-1"></div>
                                                            <div class="mt-1">7</div>
                                                        </div>
                                                    </td>
                                                    <td class="px-1 py-1">
                                                        <div class="text-center">
                                                            <div class="w-55px h-65px pw-bg-neutral-200 rounded-1"></div>
                                                            <div class="mt-1">8</div>
                                                        </div>
                                                    </td>
                                                    <td class="px-1 py-1">
                                                        <div class="text-center">
                                                            <div class="w-55px h-65px pw-bg-neutral-200 rounded-1"></div>
                                                            <div class="mt-1">9</div>
                                                        </div>
                                                    </td>
                                                    <td class="px-1 py-1">
                                                        <div class="text-center">
                                                            <div class="w-55px h-65px pw-bg-neutral-200 rounded-1"></div>
                                                            <div class="mt-1">10</div>
                                                        </div>
                                                    </td>
                                                    <td class="px-1 py-1">
                                                        <div class="text-center">
                                                            <div class="w-55px h-65px pw-bg-neutral-200 rounded-1"></div>
                                                            <div class="mt-1">11</div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--end::Ayrımlama content-->

                            <!--begin::İndeksleme content-->
                            <div class="tab-pane fade py-10 pt-0 px-4" id="pw_tab_pane_indeksleme" role="tabpanel">
                                <div class="row my-5">
                                    <a href="/#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5 my-1">
                                        <i class="fa-solid fa-floppy-disk fs-7 pw-text-primary-300"></i>
                                    </a>
                                    <a href="/#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-35px h-30px rounded-0.5 my-1 ms-2">
                                        <i class="fa-solid fa-floppy-disk fs-7 pw-text-primary-300"></i><i class="fa-solid fa-arrow-turn-down fs-7 pw-text-primary-300"></i>
                                    </a>
                                </div>
                                <div class="row border pw-border-stroke rounded-2 p-5">
                                    <!--begin::Form-->
                                    <form>
                                        <!--begin::Table-->
                                        <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                                            <table class="table w-min-content w-100">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <label class="form-label fs-base fw-bold" for="senaryo">Ad Soyad</label>
                                                        </td>
                                                        <td>
                                                            <input class="form-control form-control-solid fs-8 py-3 ps-10 pe-4" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label class="form-label fs-base fw-bold" for="pw_gelen_e_faturalar_aktivite_durumu">Başlangıç Tarihi</label>
                                                        </td>
                                                        <td>
                                                            <div class="row position-relative">
                                                                <div class="">
                                                                    <span class="position-absolute top-50 translate-middle-y fs-base ms-4">
                                                                        <i class="fa-solid fa-calendar-days text-primary"></i>
                                                                    </span>
                                                                    <input class="form-control form-control-solid fs-8 py-3 ps-10 pe-4" value="GG/AA/YY" placeholder="Tarih seçiniz" id="pw_gelen_e_faturalar_aktivite_durumu" required="required" />
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label class="form-label fs-base fw-bold" for="senaryo">E-mail Adresi</label>
                                                        </td>
                                                        <td>
                                                            <input class="form-control form-control-solid fs-8 py-3 ps-10 pe-4" />
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!--end::Table-->

                                        <div class="row">
                                            <h1 class="fs-base pb-2">Araştırma Bilgileri</h1>
                                            <div class="table-responsive overflow-x-auto rounded">
                                                <!--begin::Table-Light-->
                                                <table class="table table-row-bordered border pw-table-border-gray table-rounded w-max-content min-w-100">
                                                    <thead>
                                                        <tr class="fw-semibold fs-8 pw-text-neutral-700 pw-bg-neutral-100">
                                                            <th class="py-3 px-9">Gözlem Tarihi</th>
                                                            <th class="py-3 px-9">Gözlemlenen</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="fw-medium pw-text-neutral-700 fs-9">
                                                            <td class="py-6 px-9"></td>
                                                            <td class="py-6 px-9"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <!--end::Table-Light-->
                                                <!--begin::Table footer-->
                                                <div class="d-flex flex-column-reverse flex-sm-row align-items-center align-items-sm-start justify-content-center justify-content-sm-end gap-8 gap-sm-4 my-10">
                                                    <!--begin::Pagination-->
                                                    <ul class="pagination flex-nowrap flex-shrink-0">
                                                        <!--begin::Pagination item previous-->
                                                        <li class="page-item previous disabled"><a href="#" class="page-link pw-min-w-32px h-32px fs-8"><i class="previous"></i></a></li>
                                                        <!--end::Pagination item previous-->

                                                        <!--begin::Pagination-item-->
                                                        <li class="page-item active">
                                                            <a href="/sistem-raporlari/vekalet/#" class="page-link pw-min-w-32px h-32px fs-8 BTN">1</a>
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
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <button type="submit" class="btn btn-primary fs-8 py-3 px-6">
                                                        + Ekle
                                                    </button>
                                                </div>   
                                            </div>
                                        </div>
                                    </form>
                                    <!--end::Form-->
                                    
                                </div>
                            </div>
                            <!--end::İndeksleme content-->

                            <!--begin::Dosya Kartı content-->
                            <div class="tab-pane fade p-5" id="pw_tab_pane_dosyakarti" role="tabpanel">
                                <div class="row">
                                    <a href="/#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5 my-1">
                                        <i class="fa-solid fa-circle-plus fs-7 pw-text-neutral-300"></i>
                                    </a>
                                    <div class="text-end mb-3">
                                        <button type="clear" class="btn btn-active-light fs-8 py-3 pw-text-neutral-600 px-6">
                                            İptal
                                        </button>
                                        <button type="submit" class="btn btn-primary fs-8 py-3 px-6">
                                            Tamam
                                        </button>
                                    </div>
                                </div>
                                <div class="row">
                                    <!--begin::Table-->
                                    <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                                        <table class="table w-min-content w-100">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <label class="form-label fs-base fw-bold" for="senaryo">Liste Adı</label>
                                                    </td>
                                                    <td>
                                                        <input class="form-control form-control-solid fs-8 py-3 ps-10 pe-4" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="form-label fs-base fw-bold" for="senaryo">Dosya Kaydı</label>
                                                    </td>
                                                    <td>
                                                        <input class="form-control form-control-solid fs-8 py-3 ps-10 pe-4" value="Araştırma DK Şablonu" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="form-label fs-base fw-bold" for="senaryo">Yetki Seti</label>
                                                    </td>
                                                    <td>
                                                        <select id="yetki_seti" class="form-select form-select-solid fs-8 py-3 px-4" name="yetki_seti">
                                                            <option></option>
                                                            <option value="1">option 1</option>
                                                            <option value="2">option 2</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="form-label fs-base fw-bolder" for="pw_dosya_karti_aciklama">Açıklama</label>
                                                    </td>
                                                    <td>
                                                        <div id="pw_dosya_karti_aciklama"></div>
                                                    </td>
                                                    </tr>
                                                <tr>
                                                    <td>
                                                        <label class="form-label fs-base fw-bold" for="senaryo">Ad Soyad</label>
                                                    </td>
                                                    <td>
                                                        <input class="form-control form-control-solid fs-8 py-3 ps-10 pe-4" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="form-label fs-base fw-bold" for="senaryo">Araştırma Konusu</label>
                                                    </td>
                                                    <td>
                                                        <input class="form-control form-control-solid fs-8 py-3 ps-10 pe-4" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="form-label fs-base fw-bold" for="pw_gelen_e_faturalar_aktivite_durumu">Patent Alma Tarihi</label>
                                                    </td>
                                                    <td>
                                                        <div class="row position-relative">
                                                            <div class="">
                                                                <span class="position-absolute top-50 translate-middle-y fs-base ms-4">
                                                                    <i class="fa-solid fa-calendar-days text-primary"></i>
                                                                </span>
                                                                <input class="form-control form-control-solid fs-8 py-3 ps-10 pe-4" value="GG/AA/YY" placeholder="Tarih seçiniz" id="pw_gelen_e_faturalar_aktivite_durumu" required="required" />
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                            </div>
                            <!--end::Dosya Kartı content-->

                            <!--begin::Dosya Kartı content-->
                            <div class="tab-pane fade p-5" id="pw_tab_pane_dosyakarti_ara" role="tabpanel">
                                <div class="row">
                                    <a href="/#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 btn-active-icon-primary w-30px h-30px rounded-0.5 my-1">
                                        <i class="fa-solid fa-circle-plus fs-7 pw-text-neutral-300"></i>
                                    </a>
                                </div>
                                <div class="row align-items-center my-3">
                                    <div class="col col-md-4 px-0">
                                        <!--begin::Input Form-->
                                        <form data-kt-search-element="form" class="position-relative" autocomplete="off">
                                            <!--begin::Hidden input(Added to disable form autocomplete)-->
                                            <input type="hidden" />
                                            <!--end::Hidden input-->

                                            <!--begin::Icon-->
                                            <!--begin::Svg Icon | path: magnifier-->
                                            <div class="position-absolute top-50 translate-middle-y w-100 mw-20px mh-20px ms-2">
                                                <i class="fa-solid fa-magnifying-glass fs-4"></i>
                                            </div>
                                            <!--end::Icon-->

                                            <!--begin::Input-->
                                            <input type="text" class="form-control pw-input-stroke py-2 ps-9 pe-2 fs-8" name="search" value="" placeholder="Ara" data-kt-search-element="input" />
                                            <!--end::Input-->

                                            <!--begin::Spinner-->
                                            <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
                                                <span class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
                                            </span>
                                            <!--end::Spinner-->

                                            <!--begin::Reset-->
                                            <span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none" data-kt-search-element="clear">

                                                <!--begin::Svg Icon | path: cross-->
                                            </span>
                                            <!--end::Reset-->
                                        </form>
                                        <!--end::Form-->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex align-items-center">
                                            <select id="yetki_seti" class="form-select form-select-solid fs-8 py-3 px-4" name="yetki_seti">
                                                <option value="1">
                                                    Assigned DK
                                                </option>
                                                <option value="2">option 2</option>
                                            </select>
                                            <button type="submit" class="btn btn-primary fs-8 py-3 px-6 ms-2">Ara</button>
                                        </div>
                                    </div>
                                    <div class="col-md-2 text-end">
                                        <a href="/#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-40px h-40px rounded-0.5 me-1 my-1">
                                            <i class="fa-solid fa-magnifying-glass-plus fs-7 pw-text-primary-400"></i>
                                        </a>
                                    </div>                                        
                                </div>
                                <div class="row">
                                    <a href="#" class="p-0">[Kriter Ekle]</a>
                                </div>
                            </div>
                            <!--end::Dosya Kartı content-->
                        </div>
                        <!--end::Table tab contents-->
                    </div>
                    <!--end::Contacts-->
                </div>
                <!--end::Search-->

                <!--begin::arrow groups-->
                <div class="" style="display: contents">
                    <div class="" style="transform: translate(-50%, 45%)">
                        <div><i class="fa-solid fa-arrow-left-from-line my-2 pw-text-neutral-400"></i></div>
                        <i class="fa-solid fa-arrow-right-from-line my-2 pw-text-neutral-400"></i>
                    </div>
                </div>
                <!--end::arrow groups-->

                <!--begin::Content-->
                <div class="col-lg-3 col-xl-3 col-md-2 col-sm-12 ps-0">
                    <!--begin::Contacts-->
                    <div class="border rounded-3 pw-shadow-3 p-5 h-100 pt-1">
                        <!--begin::Table tabs wrapper-->
                        <div class="d-flex justify-content-between nav-line-tabs">
                            <!--begin::Table tabs-->
                            <div class="nav nav-tabs fs-6 d-flex align-items-center w-100" role="tablist">
                                <!--begin::Tab item-->
                                <li class="nav-item" role="presentation">
                                    <button type="button" class="btn px-1 py-3 btn-icon-gray-400 btn-active-icon-primary">
                                        <i class="fa-solid fa-file-magnifying-glass fs-5"></i>
                                    </button>
                                </li>
                                <!--end::Tab item-->

                                <div class="w-1px pw-bg-neutral-400 h-25px"></div>
                                
                                <!--begin::Tab item-->
                                <li class="nav-item" role="presentation">
                                    <button type="button" class="btn px-1 py-3 btn-icon-gray-400 btn-active-icon-primary">
                                        <i class="fa-solid fa-arrows-left-right fs-5"></i>
                                    </button>
                                </li>
                                <!--end::Tab item-->

                                <!--begin::Tab item-->
                                <li class="nav-item" role="presentation">
                                    <button type="button" class="btn px-1 py-3 btn-icon-gray-400 btn-active-icon-primary">
                                        <i class="fa-solid fa-compress fs-5"></i>
                                    </button>
                                </li>
                                <!--end::Tab item-->

                                <div class="w-1px pw-bg-neutral-400 h-25px"></div>

                                <!--begin::Tab item-->
                                <li class="nav-item" role="presentation">
                                    <button type="button" class="btn px-1 py-3 btn-icon-gray-400 btn-active-icon-primary">
                                        <i class="fa-solid fa-magnifying-glass-plus fs-5"></i>
                                    </button>
                                </li>
                                <!--end::Tab item-->

                                <!--begin::Tab item-->
                                <li class="nav-item" role="presentation">
                                    <button type="button" class="btn px-1 py-3 btn-icon-gray-400 btn-active-icon-primary">
                                        <i class="fa-solid fa-magnifying-glass-minus fs-5"></i>
                                    </button>
                                </li>
                                <!--end::Tab item-->

                                <div class="w-1px pw-bg-neutral-400 h-25px"></div>

                                <!--begin::Tab item-->
                                <li class="nav-item" role="presentation">
                                    <button type="button" class="btn px-1 py-3 btn-icon-gray-400 btn-active-icon-primary">
                                        <i class="fa-solid fa-arrow-rotate-left fs-5"></i>
                                    </button>
                                </li>
                                <!--end::Tab item-->

                                <!--begin::Tab item-->
                                <li class="nav-item" role="presentation">
                                    <button type="button" class="btn px-1 py-3 btn-icon-gray-400 btn-active-icon-primary">
                                        <i class="fa-solid fa-arrow-rotate-right fs-5"></i>
                                    </button>
                                </li>
                                <!--end::Tab item-->

                                <!--begin::Tab item-->
                                <div class="d-flex align-items-center ms-auto">
                                    <div class="w-1px pw-bg-neutral-400 h-25px"></div>
                                    <button type="button" class="btn px-1 py-3 btn-icon-gray-400 btn-active-icon-primary ms-2">
                                        <i class="fa-solid fa-circle-question fs-5"></i>
                                    </button>
                                </div>
                                <!--end::Tab item-->
                            </div>                           
                            <!--end::Table tabs-->
                        </div>
                        <!--end::Table tabs wrapper-->

                        <div class="w-100 h-100 d-flex align-items-center justify-content-center pb-10">
                            <h1 class="fw-bold pw-text-neutral-700" style="font-size: 90px">0</span>
                        </div>
                    </div>
                    <!--end::Contacts-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Content container-->

            <div class="my-5 pw-text-neutral-500">
                <a href="#" class="pw-text-neutral-500"><span>Profil Adı: </span><span>Çalışan Oryantasyon Arşiv</span></a>
                <a href="#" class="ms-5 pw-text-neutral-500"><span>Belgedeki Sayfa Sayısı: </span><span>0</span></a>
                <a href="#" class="ms-5 pw-text-neutral-500"><span>Toplam Sayfa Sayısı: </span><span>0</span></a>
                <a href="#" class="ms-5 pw-text-neutral-500"><span>Orijinal Dosya Adı: </span></a>
            </div>
        </div>
        <!--end::Content-->

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

        ClassicEditor.create(document.querySelector('#pw_dosya_karti_aciklama'), {
        toolbar: {
            items: [
            'heading', '|',
            'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript',
            'removeFormat', '|',
            'bulletedList', 'numberedList', 'todoList', '|',
            'outdent', 'indent', '|',
            'undo', 'redo',
            'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', 'alignment', 'link',
            '|',
            ],
            shouldNotGroupWhenFull: true
        },
        }).catch(error => {
            console.error(error);
        });

        // Begin: Mouse Right-click menu
        document.onclick = hideMenu; 
        document.oncontextmenu = rightClick; 
  
        function hideMenu() { 
            document.getElementById( 
                "contextMenu").style.display = "none" 
        } 
  
        function rightClick(e) { 
            e.preventDefault(); 

            var rightClickMenu = document.getElementById("rightClickMenu");
            if (rightClickMenu.contains(e.target)) {
                var menu = document.getElementById("contextMenu");
                menu.style.display = 'block'; 
                menu.style.left = e.pageX + "px"; 
                menu.style.top = e.pageY + "px"; 
            } else {
                hideMenu();
            }
        }
        // End: Mouse Right-click menu
  });

</script>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/foot.php'; ?>