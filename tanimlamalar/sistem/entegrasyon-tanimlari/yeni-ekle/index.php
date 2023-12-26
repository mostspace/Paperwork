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
            <li class="breadcrumb-item active">Entegrasyon Tanımları</li>
            <!--end::Item-->
          </ul>
          <!--end::Breadcrumb-->
          <!--begin::Title-->
          <h1 class="page-heading d-flex text-dark fw-bold fs-4 flex-column justify-content-center my-0">
            Entegrasyon Tanımları
          </h1>
          <!--end::Title-->
        </div>
        <!--end::Page title-->
      </div>
      <!--end::Toolbar container-->
    </div>
    <!--end::Toolbar-->

    <!--begin::Actionbar-->
    <div class="d-flex align-items-center gap-3 border-top border-bottom pw-border-neutral-200 px-6 py-2 my-4">
      <a href="javascript:void(0);" class="btn p-0 fs-9 fs-semibold d-inline-flex align-items-center" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="bottom" title="Bağlantıyı Kontrol Et">
        <div class="w-25px h-25px pw-bg-iconbg rounded-0.20rem d-inline-flex align-items-center justify-content-center">
          <i class="fa-solid fa-check pw-text-primary-500"></i>
        </div>
      </a>

      <a href="javascript:void(0);" class="btn p-0 fs-9 fs-semibold d-inline-flex align-items-center" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="top" title="Versiyon">
        <div class="w-25px h-25px pw-bg-iconbg rounded-0.20rem d-inline-flex align-items-center justify-content-center">
          <i class="fa-solid fa-code-merge pw-text-primary-500"></i>
        </div>
      </a>

      <a href="javascript:void(0);" class="btn p-0 fs-9 fs-semibold d-inline-flex align-items-center" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="right" title="Yardım">
        <div class="w-25px h-25px pw-bg-iconbg rounded-0.20rem d-inline-flex align-items-center justify-content-center">
          <i class="fa-solid fa-question pw-text-primary-500"></i>
        </div>
      </a>
    </div>
    <!--end::Actionbar-->

    <!--begin::Content -->
    <div class="col-12 col-md-10 px-6 pb-8">
        <!--begin::Table-->
        <div class="table-responsive overflow-x-auto overflow-lg-hidden">
            <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fw-bold fs-7">
                <tbody>
                    <!--begin::Row-->
                    <tr>
                        <td class="col col-md-3"><label for="adi">Adı</label></td>
                        <td class="col col-md-9">
                            <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" id="adi" name="adi"  />
                        </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                        <td class="col col-md-3"><label for="entegrasyon-tipi">Entegrasyon Tipi</label></td>
                        <td class="col col-md-9">
                            <select id="entegrasyon-tipi" class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2" data-placeholder="">
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                            </select>
                        </td>
                    </tr>
                    <!--end::Row-->                                  

                    <!--begin::Row-->
                    <tr>
                        <td class="col col-md-3"><label for="kullanici">Kullanıcı</label></td>
                        <td class="col col-md-9">
                            <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" id="kullanici" name="kullanici"  />
                        </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                        <td class="col col-md-3"><label for="sifre">Şifre</label></td>
                        <td class="col col-md-9">
                            <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" id="sifre" name="sifre" placeholder="*********" />
                        </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                        <td class="col col-md-3"><label for="guvenli-baglanti">Güvenli Bağlantı</label></td>
                        <td class="col col-md-9">
                            <div class="form-check form-switch form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="" id="guvenli-baglanti" />
                            </div>                                        
                        </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                        <td class="col col-md-3"><label for="domain">Domain</label></td>
                        <td class="col col-md-9">
                            <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" id="domain" name="domain" />
                        </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                        <td class="col col-md-3"><label for="guvenlik-anahtari">Güvenlik Anahtarı</label></td>
                        <td class="col col-md-9">
                            <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" id="guvenlik-anahtari" name="guvenlik-anahtari" />
                        </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                        <td class="col col-md-3"><label for="end-point">End Point</label></td>
                        <td class="col col-md-9">
                            <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" id="end-point" name="end-point" />
                        </td>
                    </tr>
                    <!--end::Row-->
                </tbody>
            </table>
        </div>
        <!--end::Table-->
    </div>
    <!--end::Content -->

    <!--begin::Form actions-->
    <div class="border-top pw-border-stroke pt-5 mb-20">
        <div class="col col-lg-11 d-flex align-items-center justify-content-end">
            <button type="reset" class="btn btn-active-light fs-8 py-3 px-6">
                Vazgeç
            </button>
            <button type="submit" class="btn btn-primary fs-8 py-3 px-6 me-7">
                Kaydet
            </button>
        </div>
    </div>
    <!--end::Form actions-->

    <!--end::Content wrapper-->
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/footer.php'; ?>
  </div>
  <!--end::Main-->

</div>
<!--end::Wrapper -->

<!--begin::Drawers-->
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/history-drawer.php'; ?>
<!--end::History canvas-->
<!--end::Drawers-->

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/foot.php'; ?>