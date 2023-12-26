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
  <div class="row g-0 h-100">
    <!--begin::Left side-->
    <div class="position-relative overflow-hidden col mw-500px d-none d-lg-flex flex-column justify-content-center" style="background: #006CEA">
      <!--begin::Wrapper-->
      <div class="d-flex flex-column align-items-center mw-400px w-100 mx-auto">
        <!--begin::Logo-->
        <img class="w-100 h-auto mb-8 z-index-1" src="/assets/media/logos/paperwork-beyaz.png" width="100%" height="auto" />
        <!--end::Logo-->

        <!--begin::Text-->
        <p class="pw-text-neutral-50 fs-7 mb-8 z-index-1">
          PaperWork, çalışanlar, müşteriler ve sistemler arasındaki bilgi ve belge akışını yöneterek, organizasyonların operasyonel mükemmelliğe ulaşmalarını sağlar.
        </p>
        <!--end::Text-->

        <!--begin::Image-->
        <img class="w-100 h-auto z-index-1" src="/assets/media/auth/login.svg" width="100%" height="auto" />
        <!--end::Image-->

        <!--begin::Layer-->
        <div class="position-absolute pointer-events-none" style="bottom:-32px;right:0">
          <img class="w-auto h-500px" src="/assets/media/logos/paperwork.png" width="auto" height="500" />
        </div>
        <!--end::Layer-->

        <!--begin::Footer-->
        <div class="position-absolute bottom-0 left-50 translate-x-middle d-flex align-items-center gap-6 w-400px pb-6">
          <!--begin::Item-->
          <a href="javascript:void(0)" class="pw-text-success-500">Şartlar</a>
          <!--end::Item-->

          <!--begin::Item-->
          <a href="javascript:void(0)" class="pw-text-success-500">Planlar</a>
          <!--end::Item-->

          <!--begin::Item-->
          <a href="javascript:void(0)" class="pw-text-success-500">İletişim</a>
          <!--end::Item-->
        </div>
        <!--end::Footer-->
      </div>
      <!--end::Wrapper-->
    </div>
    <!--end::Left side-->

    <!--begin::Right side-->
    <div class="position-relative col d-flex flex-column align-items-center justify-content-center">
      <!--begin::Langueage selector-->
      <div class="position-absolute top-0 end-0 pt-2 pe-2 pt-md-9 pe-md-12">
        <div class="form-floating">
          <select class="form-select form-select-transparent w-150px" id="pw_lang_select" data-hide-search="true">
            <option value="AF" data-kt-select2-country="/assets/media/flags/turkey.svg" selected>Türkçe</option>
            <option value="AX" data-kt-select2-country="/assets/media/flags/united-states.svg">English</option>
          </select>
        </div>
      </div>
      <!--end::Langueage selector-->

      <!--begin::Form-->
      <form class="d-flex flex-column gap-6 mw-500px w-100 p-4">
        <!--begin::Header-->
        <div class="d-flex flex-column justfiy-content-center text-center">
          <img class="mw-125px w-100 h-auto mx-auto" src="/assets/media/auth/envelope.svg" />

          <!--begin::Title-->
          <h1 class="pw-text-primary-900 fs-2x fw-bold font-poppins mb-2">Çift Faktörlü Koruma</h1>
          <!--end::Title-->

          <!--begin::Text-->
          <div class="pw-text-neutral-700 fs-base">
            E-posta adresinize gönderdiğimiz doğrulama kodunu giriniz
            <span class="fw-bold pw-text-neutral-900">z*********@gmail.com</span>
          </div>
          <!--end::Text-->
        </div>
        <!--end::Header-->

        <!--begin::Body-->
        <div class="d-flex flex-column mx-auto" style="max-width:460px">
          <div class="d-flex gap-5 flex-nowrap mx-auto mb-4">
            <input type="text" class="form-control fs-2 fs-md-1 fs-lg-2x w-25px h-25px w-md-40px h-md-40px w-lg-60px h-lg-60px text-center" />
            <input type="text" class="form-control fs-2 fs-md-1 fs-lg-2x w-25px h-25px w-md-40px h-md-40px w-lg-60px h-lg-60px text-center" />
            <input type="text" class="form-control fs-2 fs-md-1 fs-lg-2x w-25px h-25px w-md-40px h-md-40px w-lg-60px h-lg-60px text-center" />
            <input type="text" class="form-control fs-2 fs-md-1 fs-lg-2x w-25px h-25px w-md-40px h-md-40px w-lg-60px h-lg-60px text-center" />
            <input type="text" class="form-control fs-2 fs-md-1 fs-lg-2x w-25px h-25px w-md-40px h-md-40px w-lg-60px h-lg-60px text-center" />
            <input type="text" class="form-control fs-2 fs-md-1 fs-lg-2x w-25px h-25px w-md-40px h-md-40px w-lg-60px h-lg-60px text-center" />
          </div>

          <!--begin::error message-->
          <span class="mt-8 mb-6 pw-text-danger-500 fs-7 text-center">Lütfen güvenlik kodunu kontrol edin ve tekrar deneyin.</span>
          <!--end::error message-->

          <button type="button" class="btn btn-primary py-3 px-5 fs-7 fw-semibold">Gönder</button>

          <span class="pw-text-neutral-900 fs-7 text-center mt-5">
            Kodu almadınız mı? Tekrar göndermek için <a href="javascript:void(0)" class="pw-text-primary-500">tıklayın.</a>
          </span>
        </div>
        <!--end::Body-->
      </form>
      <!--end::Form-->
    </div>
    <!--end::Right side-->
  </div>
  <!--end::Wrapper-->

  <!--begin::Lang selector script-->
  <script>
    window.addEventListener('DOMContentLoaded', () => {
      // Format options
      var optionFormat = function(item) {
        if (!item.id) {
          return item.text;
        }

        var span = document.createElement('span');
        var imgUrl = item.element.getAttribute('data-kt-select2-country');
        var template = '';

        template += '<img src="' + imgUrl + '" class="rounded-circle h-20px me-2" alt="image"/>';
        template += item.text;

        span.innerHTML = template;

        return $(span);
      }

      $('#pw_lang_select').select2({
        templateSelection: optionFormat,
        templateResult: optionFormat,
        minimumResultsForSearch: -1,
      });
    })
  </script>
  <!--end::Lang selector script-->

  <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/foot.php'; ?>