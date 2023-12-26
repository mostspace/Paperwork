<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/header.php'; ?>

<!--begin::Wrapper-->
<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">

  <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/sidebar.php'; ?>
  <!--begin::Main-->
  <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <!--begin::Content wrapper-->
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar col-12 col-md-11 px-6 pt-6">

      <!--begin::Toolbar container-->
      <div id="kt_app_toolbar_container" class="container-fluid d-flex flex-stack p-0">

        <!--begin::Page title-->
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
          <!--begin::Breadcrumb-->
          <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-9 mt-0 mb-3">
            <!--begin::Item-->
            <li class="breadcrumb-item text-muted">
              <a href="/tanimlamalar/" class="text-muted text-hover-primary">Tanımlamalar</a>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item">
              <span class="text-muted">/</span>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item active">Uyarı Tanımları</li>
            <!--end::Item-->
          </ul>
          <!--end::Breadcrumb-->
          <!--begin::Title-->
          <h1 class="page-heading d-flex text-dark fw-bold fs-4 flex-column justify-content-center my-0">
            Uyarı Tanımları
          </h1>
          <!--end::Title-->
        </div>
        <!--end::Page title-->
      </div>
      <!--end::Toolbar container-->
    </div>
    <!--end::Toolbar-->

    <!--begin::divider-->
    <div class="w-100 h-1px pw-bg-neutral-200 my-6"></div>
    <!--end::divider-->

    <!--begin::Content -->
    <div class="col-12 col-md-11 col-lg-10 px-6 pb-8">
        <!--begin::Table-->
        <div class="table-responsive overflow-x-auto overflow-lg-hidden">
            <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fw-bold fs-7">
                <tbody>
                    <!--begin::Row-->
                    <tr>
                        <td class="col col-md-3"><label for="aktif">Aktif</label></td>
                        <td class="col col-md-9">
                            <div class="form-check mb-0">
                                <input class="form-check-input bg-blue" type="checkbox" value="" id="" name="" checked="checked">
                            </div>                                        
                        </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                        <td class="col col-md-3"><label for="aciklama">Açıklama</label></td>
                        <td class="col col-md-9">
                            <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" id="aciklama" name="aciklama"  />
                        </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                        <td class="col col-md-3"><label for="uyari">Uyarı</label></td>
                        <td class="col col-md-9">
                            <textarea name="sablon-adi" id="uyari"></textarea>
                        </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                        <td class="col col-md-3"><label for="e-mail">E-Mail</label></td>
                        <td class="col col-md-9">
                            <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" id="e-mail" name="e-mail"  />
                        </td>
                    </tr>
                    <!--end::Row-->
                </tbody>
            </table>
        </div>
        <!--end::Table-->
    </div>
    <!--end::Content -->

    <!--begin::Actionbar-->
    <div class="d-flex align-items-center justify-content-end gap-3 border-top pw-border-stroke pt-5 mb-20 pe-20">
        <button type="reset" class="btn btn-active-light fs-8 py-3 px-6">
            Vazgeç
        </button>
        <button type="submit" class="btn btn-primary fs-8 py-3 px-6 me-10">
            Kaydet
        </button>
    </div>
    <!--end::Actionbar-->

    <!--end::Content wrapper-->
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/footer.php'; ?>
  </div>
  <!--end::Main-->

</div>
<!--end::Wrapper -->

<script>
    // Class definition
    var KTCkeditor = function () {
        // Private functions
        var demos = function () {
            ClassicEditor
                .create( document.querySelector( '#uyari' ) )
                .then( editor => {
                    console.log( editor );
                } )
                .catch( error => {
                    console.error( error );
                } );
        }

        return {
            // public functions
            init: function() {
                demos();
            }
        };
    }();

    // Initialization
    jQuery(document).ready(function() {
        KTCkeditor.init();
    });
</script>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/foot.php'; ?>