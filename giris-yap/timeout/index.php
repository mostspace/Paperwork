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

  <!--begin::Wrapper-->
  <div class="position-fixed w-100 h-100 top-0 end-0 bottom-0 start-0 d-flex align-items-center justify-content-center overflow-hidden" style="background:#006CEA">
    <!--begin::Container-->
    <div class="d-flex flex-column align-items-center gap-8 gap-sm-10 gap-md-12 gap-lg-16 p-4 mw-650px w-100 z-index-1">
      <img class="mw-325px w-100 h-auto" src="/assets/media/logos/paperwork-beyaz.png" />
    
      <!--begin::Card-->
      <div class="mw-650px w-100 bg-white rounded-2 py-18 px-4">
        <!--begin::Body-->
        <div class="d-flex flex-column gap-8 mw-400px w-100 mx-auto">
          <img class="mw-225px w-100 mx-auto" src="/assets/media/auth/timeout.svg" />

          <!--begin::Content-->
          <div class="text-center">
            <h1 class="pw-text-neutral-900 fs-1 mb-2">Oturumunuz Sona Erdi</h1>
            <span class="pw-text-neutral-600 fs-3">Lütfen tekrar giriş yapın.</span>
          </div>
          <!--end::Content-->

          <!--begin::Login button-->
          <button type="button" class="btn btn-primary py-3 px-6 fs-6 fw-semibold">Giriş Yap</button>
          <!--end::Login button-->
        </div>
        <!--end::Body-->
      </div>
      <!--end::Card-->
    </div>
    <!--end::Container-->
  <img class="position-absolute d-none d-md-block top-0 start-0 translate-middle" src="/assets/media/logos/paperwork-2.png" />
  <img class="position-absolute d-none d-md-block top-100 start-100 translate-middle" src="/assets/media/logos/paperwork-2.png" />

  </div>
  <!--end::Wrapper-->



  <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/foot.php'; ?>