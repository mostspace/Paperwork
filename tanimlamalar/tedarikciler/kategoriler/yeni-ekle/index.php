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
                  <a href="tanimlamalar/" class="text-muted text-hover-primary">Tanımlamalar</a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                  <span class="text-muted">/</span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item active"> Faaliyet Alanları</li>
                <!--end::Item-->
              </ul>
              <!--end::Breadcrumb-->
              <!--begin::Title-->
              <h1 class="page-heading d-flex text-dark fw-bold fs-4 flex-column justify-content-center my-0">
                A Proje
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
          <!--begin::Form wrapper-->
          <div class="col-12 col-lg-5">
            <!--begin::Form-->
            <form>
              <!--begin::Form table-->
              <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                <table class="table w-min-content w-100">
                  <tbody>
                    <!--begin::Row-->
                    <tr>
                      <td>
                        <label class="form-label fs-7 fw-bolder" for="pw_kategori">Kategori</label>
                      </td>
                      <td>
                        <input type="text" class="form-control pw-input-stroke py-2 ps-3 pe-2 fs-8" name="pw_kategori" value="" placeholder="Analist" data-kt-search-element="input" />
                      </td>
                    </tr>
                    <!--end::Row-->
                  </tbody>
                </table>
              </div>
              <!--end::Form table-->
            </form>
            <!--end::Form-->
          </div>
          <!--end::Form wrapper-->
        </div>
        <!--end::Content -->
      </div>
    </div>
    <!--end::Content wrapper-->
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/footer.php'; ?>
  </div>
  <!--end::Main-->

</div>
<!--end::Wrapper -->

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/foot.php'; ?>