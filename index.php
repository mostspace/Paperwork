<?php require_once('globals/header.php'); ?>

<!--begin::Wrapper-->
<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">

  <?php require_once('globals/sidebar.php'); ?>
  <!--begin::Main-->
  <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
      <!--begin::Row-->
      <div class="row g-0 mb-5 mb-xl-10">
        <!--begin::Col-->
        <div class="col-md-8 col-lg-9 py-7">
          <!--begin::Toolbar-->
          <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
              <!--begin::Page title-->
              <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 mt-0 mb-3">
                  <!--begin::Item-->
                  <li class="breadcrumb-item active">Dashboard</li>
                  <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-dark fw-bold fs-4 flex-column justify-content-center my-0">
                  Dashboard
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
    <?php require_once('globals/footer.php'); ?>
  </div>
  <!--end::Main-->

</div>
<!--end::Wrapper -->

<?php require_once('globals/foot.php'); ?>