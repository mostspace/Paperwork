<!DOCTYPE html>

<html lang="tr">
<!--begin::Head-->

<head>
  <!-- localbase -->
  <base href="/" />
  <!-- Development base <base href="https://paperwork.gurudesk.dev/" /> -->
  <title>PaperWork</title>
  <meta charset="utf-8" />
  <meta name="description" content="Süreçleri PaperWork'e Taşıyın, Performansı Ölçün, İşlerin Durumunu Anlık Olarak Takip Edin. İK, IT, Kalite, Finans, Satınalma, Proje, Satış, Arge gibi Tüm Süreçler için Tek Platform." />
  <meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta property="og:locale" content="tr_TR" />
  <meta property="og:type" content="article" />
  <meta property="og:title" content="PaperWork - Süreçleri PaperWork'e Taşıyın, Performansı Ölçün, İşlerin Durumunu Anlık Olarak Takip Edin. İK, IT, Kalite, Finans, Satınalma, Proje, Satış, Arge gibi Tüm Süreçler için Tek Platform." />
  <meta property="og:url" content="https://www.paperwork.com.tr" />
  <meta property="og:site_name" content="PaperWork" />
  <link rel="shortcut icon" href="assets/media/logos/paperwork-icon-beyaz.png" />
  <!--begin::Fonts(mandatory for all pages)-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700&Poppins:wght@300;400;500;600;700" />
  <!--end::Fonts-->
  <!--begin::Vendor Stylesheets(used for this page only)-->
  <link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
  <link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
  <!--end::Vendor Stylesheets-->
  <!--begin::Fontawseome Styleseehts-->
  <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
  <!--end::Fontawseome Stylesheets-->
  <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
  <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/global.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="assets/css/global-dark.css">
  <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
  <!--end::Global Stylesheets Bundle--> 

  <script src="assets/plugins/global/plugins.bundle.js"></script>
  <script src="assets/js/custom/paperwork.js"></script>
  <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_app_body" data-kt-app-layout="light-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
  <!--begin::Theme mode setup on page load-->
  <script>
    var defaultThemeMode = "light";
    var themeMode;
    if (document.documentElement) {
      if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
        themeMode =
          document.documentElement.getAttribute("data-bs-theme-mode");
      } else {
        if (localStorage.getItem("data-bs-theme") !== null) {
          themeMode = localStorage.getItem("data-bs-theme");
        } else {
          themeMode = defaultThemeMode;
        }
      }
      if (themeMode === "system") {
        themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ?
          "dark" :
          "light";
      }
      document.documentElement.setAttribute("data-bs-theme", themeMode);
    }
  </script>
  <!--end::Theme mode setup on page load-->
  <!--begin::App-->
  <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
    <!--begin::Page-->
    <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
      <!--begin::Header-->
      <div id="kt_app_header" class="app-header">
        <!--begin::Header container-->
        <div class="app-container container-fluid d-flex align-items-stretch justify-content-between" id="kt_app_header_container">
          <!--begin::Sidebar mobile toggle-->
          <div class="d-flex align-items-center d-lg-none ms-n3 me-1 me-md-2" title="Show sidebar menu">
            <div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_sidebar_mobile_toggle">
              <i class="ki-duotone ki-abstract-14 fs-2 fs-md-1">
                <span class="path1"></span>
                <span class="path2"></span>
              </i>
            </div>
          </div>
          <!--end::Sidebar mobile toggle-->
          <!--begin::Mobile logo-->
          <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
            <a href="../../index.html" class="d-lg-none">
              <img alt="Logo" src="assets/media/logos/paperwork-logo.png" class="h-32px mt-n3" />
            </a>
          </div>
          <!--end::Mobile logo-->
          <!--begin::Header wrapper-->
          <div class="d-flex align-items-stretch justify-content-end flex-lg-grow-1" id="kt_app_header_wrapper">
            <!--begin::Navbar-->
            <div class="app-navbar flex-shrink-0">
              <!--begin::Search-->
              <div class="app-navbar-item align-items-stretch ms-1 ms-md-3">
                <!--begin::Search-->
                <div id="kt_header_search" class="header-search d-flex align-items-stretch" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-menu-trigger="auto" data-kt-menu-overflow="false" data-kt-menu-permanent="true" data-kt-menu-placement="bottom-end">
                  <!--begin::Search toggle-->
                  <div class="d-flex align-items-center" data-kt-search-element="toggle" id="kt_header_search_toggle">
                    <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px">
                      <i class="fa-solid fa-magnifying-glass fs-4"></i>
                    </div>
                  </div>
                  <!--end::Search toggle-->
                  <!--begin::Menu-->
                  <div data-kt-search-element="content" class="menu menu-sub menu-sub-dropdown p-7 w-325px w-md-375px">
                    <!--begin::Wrapper-->
                    <div data-kt-search-element="wrapper">
                      <!--begin::Form-->
                      <form data-kt-search-element="form" class="w-100 position-relative mb-3" autocomplete="off">
                        <!--begin::Icon-->
                        <i class="fa-solid fa-magnifying-glass fs-3 text-gray-500 position-absolute top-50 translate-middle-y ms-0"></i>
                        <!--end::Icon-->
                        <!--begin::Input-->
                        <input type="text" class="search-input form-control form-control-flush ps-10" name="search" value="" placeholder="Arama..." data-kt-search-element="input" />
                        <!--end::Input-->
                        <!--begin::Spinner-->
                        <span class="search-spinner position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-1" data-kt-search-element="spinner">
                          <span class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
                        </span>
                        <!--end::Spinner-->
                        <!--begin::Reset-->
                        <span class="search-reset btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none" data-kt-search-element="clear">
                          <i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0">
                            <span class="path1"></span>
                            <span class="path2"></span>
                          </i>
                        </span>
                        <!--end::Reset-->
                      </form>
                      <!--end::Form-->
                      <!--begin::Separator-->
                      <div class="separator border-gray-200 mb-6"></div>
                      <!--end::Separator-->
                      <!--begin::Recently viewed-->
                      <div class="mb-5" data-kt-search-element="main">
                        <!--begin::Heading-->
                        <div class="d-flex flex-stack fw-semibold mb-4">
                          <!--begin::Label-->
                          <span class="text-muted fs-6 me-2">Önceki Aramalar:</span>
                          <!--end::Label-->
                        </div>
                        <!--end::Heading-->
                        <!--begin::Items-->
                        <div class="scroll-y mh-200px mh-lg-325px">
                          <!--begin::Item-->
                          <div class="d-flex align-items-center mb-5">
                            <!--begin::Title-->
                            <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">Lorem ipsum dolor sit amet</a>
                            <!--end::Title-->
                          </div>
                          <!--end::Item-->
                          <!--begin::Item-->
                          <div class="d-flex align-items-center mb-5">
                            <!--begin::Title-->
                            <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">Lorem ipsum dolor sit amet</a>
                            <!--end::Title-->
                          </div>
                          <!--end::Item-->
                          <!--begin::Item-->
                          <div class="d-flex align-items-center mb-5">
                            <!--begin::Title-->
                            <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">Lorem ipsum dolor sit amet</a>
                            <!--end::Title-->
                          </div>
                          <!--end::Item-->
                          <!--begin::Item-->
                          <div class="d-flex align-items-center mb-5">
                            <!--begin::Title-->
                            <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">Lorem ipsum dolor sit amet</a>
                            <!--end::Title-->
                          </div>
                          <!--end::Item-->
                          <!--begin::Item-->
                          <div class="d-flex align-items-center mb-5">
                            <!--begin::Title-->
                            <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">Lorem ipsum dolor sit amet</a>
                            <!--end::Title-->
                          </div>
                          <!--end::Item-->
                          <!--begin::Item-->
                          <div class="d-flex align-items-center mb-5">
                            <!--begin::Title-->
                            <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">Lorem ipsum dolor sit amet</a>
                            <!--end::Title-->
                          </div>
                          <!--end::Item-->
                        </div>
                        <!--end::Items-->
                      </div>
                      <!--end::Recently viewed-->
                      <!--begin::Empty-->
                      <div data-kt-search-element="empty" class="text-center d-none">
                        <!--begin::Icon-->
                        <div class="pt-10 pb-10">
                          <i class="ki-duotone ki-search-list fs-4x opacity-50">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                          </i>
                        </div>
                        <!--end::Icon-->
                        <!--begin::Message-->
                        <div class="pb-15 fw-semibold">
                          <h3 class="text-gray-600 fs-5 mb-2">
                            Sonuç Bulunamadı
                          </h3>
                          <div class="text-muted fs-7">
                            Lütfen farklı bir aramayla tekrar deneyin.
                          </div>
                        </div>
                        <!--end::Message-->
                      </div>
                      <!--end::Empty-->
                    </div>
                    <!--end::Wrapper-->
                  </div>
                  <!--end::Menu-->
                </div>
                <!--end::Search-->
              </div>
              <!--end::Search-->
              <!--begin::Activities-->
              <div class="app-navbar-item ms-1 ms-md-3">
                <!--begin::Drawer toggle-->
                <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px" id="kt_activities_toggle">
                <i class="fa-solid fa-chart-bar fs-4"></i>
                </div>
                <!--end::Drawer toggle-->
              </div>
              <!--end::Activities-->
              <!--begin::Notifications-->
              <div class="app-navbar-item ms-1 ms-md-3 d-none">
                <!--begin::Menu- wrapper-->
                <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end" id="kt_menu_item_wow">
                  <i class="ki-duotone ki-abstract-4 fs-2 fs-lg-1">
                    <span class="path1"></span>
                    <span class="path2"></span>
                  </i>
                </div>
                <!--begin::Menu-->
                <div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px" data-kt-menu="true" id="kt_menu_notifications">
                  <!--begin::Heading-->
                  <div class="d-flex flex-column bgi-no-repeat rounded-top" style="
                        background-image: url('assets/media/misc/menu-header-bg.jpg');
                      ">
                    <!--begin::Title-->
                    <h3 class="text-white fw-semibold px-9 mt-10 mb-6">
                      Notifications
                      <span class="fs-8 opacity-75 ps-3">24 reports</span>
                    </h3>
                    <!--end::Title-->
                    <!--begin::Tabs-->
                    <ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-semibold px-9">
                      <li class="nav-item">
                        <a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab" href="#kt_topbar_notifications_1">Alerts</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-white opacity-75 opacity-state-100 pb-4 active" data-bs-toggle="tab" href="#kt_topbar_notifications_2">Updates</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab" href="#kt_topbar_notifications_3">Logs</a>
                      </li>
                    </ul>
                    <!--end::Tabs-->
                  </div>
                  <!--end::Heading-->
                  <!--begin::Tab content-->
                  <div class="tab-content">
                    <!--begin::Tab panel-->
                    <div class="tab-pane fade" id="kt_topbar_notifications_1" role="tabpanel">
                      <!--begin::Items-->
                      <div class="scroll-y mh-325px my-5 px-8">
                        <!--begin::Item-->
                        <div class="d-flex flex-stack py-4">
                          <!--begin::Section-->
                          <div class="d-flex align-items-center">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-35px me-4">
                              <span class="symbol-label bg-light-primary">
                                <i class="ki-duotone ki-abstract-28 fs-2 text-primary">
                                  <span class="path1"></span>
                                  <span class="path2"></span>
                                </i>
                              </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Title-->
                            <div class="mb-0 me-2">
                              <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project Alice</a>
                              <div class="text-gray-400 fs-7">
                                Phase 1 development
                              </div>
                            </div>
                            <!--end::Title-->
                          </div>
                          <!--end::Section-->
                          <!--begin::Label-->
                          <span class="badge badge-light fs-8">1 hr</span>
                          <!--end::Label-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack py-4">
                          <!--begin::Section-->
                          <div class="d-flex align-items-center">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-35px me-4">
                              <span class="symbol-label bg-light-danger">
                                <i class="ki-duotone ki-information fs-2 text-danger">
                                  <span class="path1"></span>
                                  <span class="path2"></span>
                                  <span class="path3"></span>
                                </i>
                              </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Title-->
                            <div class="mb-0 me-2">
                              <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">HR Confidential</a>
                              <div class="text-gray-400 fs-7">
                                Confidential staff documents
                              </div>
                            </div>
                            <!--end::Title-->
                          </div>
                          <!--end::Section-->
                          <!--begin::Label-->
                          <span class="badge badge-light fs-8">2 hrs</span>
                          <!--end::Label-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack py-4">
                          <!--begin::Section-->
                          <div class="d-flex align-items-center">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-35px me-4">
                              <span class="symbol-label bg-light-warning">
                                <i class="ki-duotone ki-briefcase fs-2 text-warning">
                                  <span class="path1"></span>
                                  <span class="path2"></span>
                                </i>
                              </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Title-->
                            <div class="mb-0 me-2">
                              <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Company HR</a>
                              <div class="text-gray-400 fs-7">
                                Corporeate staff profiles
                              </div>
                            </div>
                            <!--end::Title-->
                          </div>
                          <!--end::Section-->
                          <!--begin::Label-->
                          <span class="badge badge-light fs-8">5 hrs</span>
                          <!--end::Label-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack py-4">
                          <!--begin::Section-->
                          <div class="d-flex align-items-center">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-35px me-4">
                              <span class="symbol-label bg-light-success">
                                <i class="ki-duotone ki-abstract-12 fs-2 text-success">
                                  <span class="path1"></span>
                                  <span class="path2"></span>
                                </i>
                              </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Title-->
                            <div class="mb-0 me-2">
                              <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project Redux</a>
                              <div class="text-gray-400 fs-7">
                                New frontend admin theme
                              </div>
                            </div>
                            <!--end::Title-->
                          </div>
                          <!--end::Section-->
                          <!--begin::Label-->
                          <span class="badge badge-light fs-8">2 days</span>
                          <!--end::Label-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack py-4">
                          <!--begin::Section-->
                          <div class="d-flex align-items-center">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-35px me-4">
                              <span class="symbol-label bg-light-primary">
                                <i class="ki-duotone ki-colors-square fs-2 text-primary">
                                  <span class="path1"></span>
                                  <span class="path2"></span>
                                  <span class="path3"></span>
                                  <span class="path4"></span>
                                </i>
                              </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Title-->
                            <div class="mb-0 me-2">
                              <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project Breafing</a>
                              <div class="text-gray-400 fs-7">
                                Product launch status update
                              </div>
                            </div>
                            <!--end::Title-->
                          </div>
                          <!--end::Section-->
                          <!--begin::Label-->
                          <span class="badge badge-light fs-8">21 Jan</span>
                          <!--end::Label-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack py-4">
                          <!--begin::Section-->
                          <div class="d-flex align-items-center">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-35px me-4">
                              <span class="symbol-label bg-light-info">
                                <i class="ki-duotone ki-picture fs-2 text-info"></i>
                              </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Title-->
                            <div class="mb-0 me-2">
                              <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Banner Assets</a>
                              <div class="text-gray-400 fs-7">
                                Collection of banner images
                              </div>
                            </div>
                            <!--end::Title-->
                          </div>
                          <!--end::Section-->
                          <!--begin::Label-->
                          <span class="badge badge-light fs-8">21 Jan</span>
                          <!--end::Label-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack py-4">
                          <!--begin::Section-->
                          <div class="d-flex align-items-center">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-35px me-4">
                              <span class="symbol-label bg-light-warning">
                                <i class="ki-duotone ki-color-swatch fs-2 text-warning">
                                  <span class="path1"></span>
                                  <span class="path2"></span>
                                  <span class="path3"></span>
                                  <span class="path4"></span>
                                  <span class="path5"></span>
                                  <span class="path6"></span>
                                  <span class="path7"></span>
                                  <span class="path8"></span>
                                  <span class="path9"></span>
                                  <span class="path10"></span>
                                  <span class="path11"></span>
                                  <span class="path12"></span>
                                  <span class="path13"></span>
                                  <span class="path14"></span>
                                  <span class="path15"></span>
                                  <span class="path16"></span>
                                  <span class="path17"></span>
                                  <span class="path18"></span>
                                  <span class="path19"></span>
                                  <span class="path20"></span>
                                  <span class="path21"></span>
                                </i>
                              </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Title-->
                            <div class="mb-0 me-2">
                              <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Icon Assets</a>
                              <div class="text-gray-400 fs-7">
                                Collection of SVG icons
                              </div>
                            </div>
                            <!--end::Title-->
                          </div>
                          <!--end::Section-->
                          <!--begin::Label-->
                          <span class="badge badge-light fs-8">20 March</span>
                          <!--end::Label-->
                        </div>
                        <!--end::Item-->
                      </div>
                      <!--end::Items-->
                      <!--begin::View more-->
                      <div class="py-3 text-center border-top">
                        <a href="../../pages/user-profile/activity.html" class="btn btn-color-gray-600 btn-active-color-primary">View All
                          <i class="ki-duotone ki-arrow-right fs-5">
                            <span class="path1"></span>
                            <span class="path2"></span> </i></a>
                      </div>
                      <!--end::View more-->
                    </div>
                    <!--end::Tab panel-->
                    <!--begin::Tab panel-->
                    <div class="tab-pane fade show active" id="kt_topbar_notifications_2" role="tabpanel">
                      <!--begin::Wrapper-->
                      <div class="d-flex flex-column px-9">
                        <!--begin::Section-->
                        <div class="pt-10 pb-0">
                          <!--begin::Title-->
                          <h3 class="text-dark text-center fw-bold">
                            Get Pro Access
                          </h3>
                          <!--end::Title-->
                          <!--begin::Text-->
                          <div class="text-center text-gray-600 fw-semibold pt-1">
                            Outlines keep you honest. They stoping you from
                            amazing poorly about drive
                          </div>
                          <!--end::Text-->
                          <!--begin::Action-->
                          <div class="text-center mt-5 mb-9">
                            <a href="#" class="btn btn-sm btn-primary px-6" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">Upgrade</a>
                          </div>
                          <!--end::Action-->
                        </div>
                        <!--end::Section-->
                        <!--begin::Illustration-->
                        <div class="text-center px-4">
                          <img class="mw-100 mh-200px" alt="image" src="assets/media/illustrations/sketchy-1/1.png" />
                        </div>
                        <!--end::Illustration-->
                      </div>
                      <!--end::Wrapper-->
                    </div>
                    <!--end::Tab panel-->
                    <!--begin::Tab panel-->
                    <div class="tab-pane fade" id="kt_topbar_notifications_3" role="tabpanel">
                      <!--begin::Items-->
                      <div class="scroll-y mh-325px my-5 px-8">
                        <!--begin::Item-->
                        <div class="d-flex flex-stack py-4">
                          <!--begin::Section-->
                          <div class="d-flex align-items-center me-2">
                            <!--begin::Code-->
                            <span class="w-70px badge badge-light-success me-4">200 OK</span>
                            <!--end::Code-->
                            <!--begin::Title-->
                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">New order</a>
                            <!--end::Title-->
                          </div>
                          <!--end::Section-->
                          <!--begin::Label-->
                          <span class="badge badge-light fs-8">Just now</span>
                          <!--end::Label-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack py-4">
                          <!--begin::Section-->
                          <div class="d-flex align-items-center me-2">
                            <!--begin::Code-->
                            <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                            <!--end::Code-->
                            <!--begin::Title-->
                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">New customer</a>
                            <!--end::Title-->
                          </div>
                          <!--end::Section-->
                          <!--begin::Label-->
                          <span class="badge badge-light fs-8">2 hrs</span>
                          <!--end::Label-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack py-4">
                          <!--begin::Section-->
                          <div class="d-flex align-items-center me-2">
                            <!--begin::Code-->
                            <span class="w-70px badge badge-light-success me-4">200 OK</span>
                            <!--end::Code-->
                            <!--begin::Title-->
                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Payment process</a>
                            <!--end::Title-->
                          </div>
                          <!--end::Section-->
                          <!--begin::Label-->
                          <span class="badge badge-light fs-8">5 hrs</span>
                          <!--end::Label-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack py-4">
                          <!--begin::Section-->
                          <div class="d-flex align-items-center me-2">
                            <!--begin::Code-->
                            <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                            <!--end::Code-->
                            <!--begin::Title-->
                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Search query</a>
                            <!--end::Title-->
                          </div>
                          <!--end::Section-->
                          <!--begin::Label-->
                          <span class="badge badge-light fs-8">2 days</span>
                          <!--end::Label-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack py-4">
                          <!--begin::Section-->
                          <div class="d-flex align-items-center me-2">
                            <!--begin::Code-->
                            <span class="w-70px badge badge-light-success me-4">200 OK</span>
                            <!--end::Code-->
                            <!--begin::Title-->
                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">API connection</a>
                            <!--end::Title-->
                          </div>
                          <!--end::Section-->
                          <!--begin::Label-->
                          <span class="badge badge-light fs-8">1 week</span>
                          <!--end::Label-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack py-4">
                          <!--begin::Section-->
                          <div class="d-flex align-items-center me-2">
                            <!--begin::Code-->
                            <span class="w-70px badge badge-light-success me-4">200 OK</span>
                            <!--end::Code-->
                            <!--begin::Title-->
                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Database restore</a>
                            <!--end::Title-->
                          </div>
                          <!--end::Section-->
                          <!--begin::Label-->
                          <span class="badge badge-light fs-8">Mar 5</span>
                          <!--end::Label-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack py-4">
                          <!--begin::Section-->
                          <div class="d-flex align-items-center me-2">
                            <!--begin::Code-->
                            <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                            <!--end::Code-->
                            <!--begin::Title-->
                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">System update</a>
                            <!--end::Title-->
                          </div>
                          <!--end::Section-->
                          <!--begin::Label-->
                          <span class="badge badge-light fs-8">May 15</span>
                          <!--end::Label-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack py-4">
                          <!--begin::Section-->
                          <div class="d-flex align-items-center me-2">
                            <!--begin::Code-->
                            <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                            <!--end::Code-->
                            <!--begin::Title-->
                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Server OS update</a>
                            <!--end::Title-->
                          </div>
                          <!--end::Section-->
                          <!--begin::Label-->
                          <span class="badge badge-light fs-8">Apr 3</span>
                          <!--end::Label-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack py-4">
                          <!--begin::Section-->
                          <div class="d-flex align-items-center me-2">
                            <!--begin::Code-->
                            <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                            <!--end::Code-->
                            <!--begin::Title-->
                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">API rollback</a>
                            <!--end::Title-->
                          </div>
                          <!--end::Section-->
                          <!--begin::Label-->
                          <span class="badge badge-light fs-8">Jun 30</span>
                          <!--end::Label-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack py-4">
                          <!--begin::Section-->
                          <div class="d-flex align-items-center me-2">
                            <!--begin::Code-->
                            <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                            <!--end::Code-->
                            <!--begin::Title-->
                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Refund process</a>
                            <!--end::Title-->
                          </div>
                          <!--end::Section-->
                          <!--begin::Label-->
                          <span class="badge badge-light fs-8">Jul 10</span>
                          <!--end::Label-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack py-4">
                          <!--begin::Section-->
                          <div class="d-flex align-items-center me-2">
                            <!--begin::Code-->
                            <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                            <!--end::Code-->
                            <!--begin::Title-->
                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Withdrawal process</a>
                            <!--end::Title-->
                          </div>
                          <!--end::Section-->
                          <!--begin::Label-->
                          <span class="badge badge-light fs-8">Sep 10</span>
                          <!--end::Label-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack py-4">
                          <!--begin::Section-->
                          <div class="d-flex align-items-center me-2">
                            <!--begin::Code-->
                            <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                            <!--end::Code-->
                            <!--begin::Title-->
                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Mail tasks</a>
                            <!--end::Title-->
                          </div>
                          <!--end::Section-->
                          <!--begin::Label-->
                          <span class="badge badge-light fs-8">Dec 10</span>
                          <!--end::Label-->
                        </div>
                        <!--end::Item-->
                      </div>
                      <!--end::Items-->
                      <!--begin::View more-->
                      <div class="py-3 text-center border-top">
                        <a href="../../pages/user-profile/activity.html" class="btn btn-color-gray-600 btn-active-color-primary">View All
                          <i class="ki-duotone ki-arrow-right fs-5">
                            <span class="path1"></span>
                            <span class="path2"></span> </i></a>
                      </div>
                      <!--end::View more-->
                    </div>
                    <!--end::Tab panel-->
                  </div>
                  <!--end::Tab content-->
                </div>
                <!--end::Menu-->
                <!--end::Menu wrapper-->
              </div>
              <!--end::Notifications-->
              <!--begin::Chat-->
              <div class="app-navbar-item ms-1 ms-md-3">
                <!--begin::Menu wrapper-->
                <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px position-relative" id="kt_drawer_chat_toggle">
                  <i class="fa-solid fa-circle-question fs-4"></i>
                  <span class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle top-0 start-50 animation-blink"></span>
                </div>
                <!--end::Menu wrapper-->
              </div>
              <!--end::Chat-->
              <!--begin::Theme mode-->
              <div class="app-navbar-item ms-1 ms-md-3">
                <!--begin::Menu toggle-->
                <a href="#" class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px" data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                  <i class="fa-solid fa-sun-bright theme-light-show fs-4"></i>
                  <i class="fa-solid fa-moon theme-dark-show fs-4"></i>
                </a>
                <!--begin::Menu toggle-->
                <!--begin::Menu-->
                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px" data-kt-menu="true" data-kt-element="theme-mode-menu">
                  <!--begin::Menu item-->
                  <div class="menu-item px-3 my-0">
                    <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
                      <span class="menu-icon" data-kt-element="icon">
                        <i class="fa-solid fa-sun fs-3"></i>
                      </span>
                      <span class="menu-title">Açık</span>
                    </a>
                  </div>
                  <!--end::Menu item-->
                  <!--begin::Menu item-->
                  <div class="menu-item px-3 my-0">
                    <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
                      <span class="menu-icon" data-kt-element="icon">
                        <i class="fa-solid fa-moon fs-3"></i>
                      </span>
                      <span class="menu-title">Koyu</span>
                    </a>
                  </div>
                  <!--end::Menu item-->
                  <!--begin::Menu item-->
                  <div class="menu-item px-3 my-0">
                    <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
                      <span class="menu-icon" data-kt-element="icon">
                        <i class="fa-solid fa-display fs-3"></i>
                      </span>
                      <span class="menu-title">Sistem</span>
                    </a>
                  </div>
                  <!--end::Menu item-->
                </div>
                <!--end::Menu-->
              </div>
              <!--end::Theme mode-->
              <!--begin::User menu-->
              <div class="app-navbar-item ms-1 ms-md-3" id="kt_header_user_menu_toggle">
                <!--begin::Menu wrapper-->
                <div class="cursor-pointer symbol symbol-circle symbol-30px symbol-md-40px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                  <img src="assets/media/avatars/300-1.jpg" alt="user" />
                </div>
                <!--begin::User account menu-->
                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
                  <!--begin::Menu item-->
                  <div class="menu-item px-3">
                    <div class="menu-content d-flex align-items-center px-3">
                      <!--begin::Avatar-->
                      <div class="symbol symbol-circle symbol-40px me-5">
                        <span class="bullet bullet-dot bg-success border border-2 border-white h-12px w-12px position-absolute end-0 bottom-0"></span>
                        <img alt="Logo" src="assets/media/avatars/300-1.jpg" />
                      </div>
                      <!--end::Avatar-->
                      <!--begin::Username-->
                      <div class="d-flex flex-column">
                        <div class="fw-bold d-flex align-items-center fs-5">
                          Sean James
                        </div>
                        <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">sean@paperwork.com</a>
                      </div>
                      <!--end::Username-->
                    </div>
                  </div>
                  <!--end::Menu item-->
                  <!--begin::Menu separator-->
                  <div class="separator my-2"></div>
                  <!--end::Menu separator-->
                  <!--begin::Menu item-->
                  <div class="menu-item px-5">
                    <a href="#" class="menu-link px-5">Hesabım</a>
                  </div>
                  <!--end::Menu item-->
                  <!--begin::Menu separator-->
                  <div class="separator my-2"></div>
                  <!--end::Menu separator-->
                  <!--begin::Menu item-->
                  <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                    <a href="#" class="menu-link px-5">
                      <span class="menu-title position-relative">Dil
                        <span class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">Türkçe
                          <img class="w-15px h-15px rounded-1 ms-2" src="assets/media/flags/turkey.svg" alt="" /></span></span>
                    </a>
                    <!--begin::Menu sub-->
                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                      <!--begin::Menu item-->
                      <div class="menu-item px-3">
                        <a href="#" class="menu-link d-flex px-5 active">
                          <span class="symbol symbol-20px me-4">
                            <img class="rounded-1" src="assets/media/flags/turkey.svg" alt="" /> </span>Türkçe</a>
                      </div>
                      <!--end::Menu item-->
                      <!--begin::Menu item-->
                      <div class="menu-item px-3">
                        <a href="#" class="menu-link d-flex px-5">
                          <span class="symbol symbol-20px me-4">
                            <img class="rounded-1" src="assets/media/flags/united-states.svg" alt="" /> </span>English</a>
                      </div>
                      <!--end::Menu item-->
                      <!--begin::Menu item-->
                      <div class="menu-item px-3">
                        <a href="#" class="menu-link d-flex px-5">
                          <span class="symbol symbol-20px me-4">
                            <img class="rounded-1" src="assets/media/flags/spain.svg" alt="" /> </span>Spanish</a>
                      </div>
                      <!--end::Menu item-->
                      <!--begin::Menu item-->
                      <div class="menu-item px-3">
                        <a href="#" class="menu-link d-flex px-5">
                          <span class="symbol symbol-20px me-4">
                            <img class="rounded-1" src="assets/media/flags/germany.svg" alt="" /> </span>German</a>
                      </div>
                      <!--end::Menu item-->
                      <!--begin::Menu item-->
                      <div class="menu-item px-3">
                        <a href="#" class="menu-link d-flex px-5">
                          <span class="symbol symbol-20px me-4">
                            <img class="rounded-1" src="assets/media/flags/japan.svg" alt="" /> </span>Japanese</a>
                      </div>
                      <!--end::Menu item-->
                      <!--begin::Menu item-->
                      <div class="menu-item px-3">
                        <a href="#" class="menu-link d-flex px-5">
                          <span class="symbol symbol-20px me-4">
                            <img class="rounded-1" src="assets/media/flags/france.svg" alt="" /> </span>French</a>
                      </div>
                      <!--end::Menu item-->
                    </div>
                    <!--end::Menu sub-->
                  </div>
                  <!--end::Menu item-->
                  <!--begin::Menu item-->
                  <div class="menu-item px-5 my-1">
                    <a href="/ayarlar" class="menu-link px-5">Hesap Ayarları</a>
                  </div>
                  <!--end::Menu item-->
                  <!--begin::Menu item-->
                  <div class="menu-item px-5">
                    <a href="#" class="menu-link px-5">Çıkış Yap</a>
                  </div>
                  <!--end::Menu item-->
                </div>
                <!--end::User account menu-->
                <!--end::Menu wrapper-->
              </div>
              <!--end::User menu-->
              <!--begin::Header menu toggle-->
              <div class="app-navbar-item d-lg-none ms-2 me-n2" title="Show header menu">
                <div class="btn btn-flex btn-icon btn-active-color-primary w-30px h-30px" id="kt_app_header_menu_toggle">
                  <i class="ki-duotone ki-element-4 fs-1">
                    <span class="path1"></span>
                    <span class="path2"></span>
                  </i>
                </div>
              </div>
              <!--end::Header menu toggle-->
            </div>
            <!--end::Navbar-->
          </div>
          <!--end::Header wrapper-->
        </div>
        <!--end::Header container-->
      </div>
      <!--end::Header-->