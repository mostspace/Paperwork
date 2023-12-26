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
            <li class="breadcrumb-item active">Elektronik Posta</li>
            <!--end::Item-->
          </ul>
          <!--end::Breadcrumb-->
          <!--begin::Title-->
          <h1 class="page-heading d-flex text-dark fw-bold fs-4 flex-column justify-content-center my-0">
            Elektronik Posta
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
      <a href="javascript:void(0);" class="btn p-0 fs-9 fs-semibold d-inline-flex align-items-center" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="bottom" title="">
        <div class="w-25px h-25px pw-bg-iconbg rounded-0.20rem d-inline-flex align-items-center justify-content-center me-2">
          <i class="fa-solid fa-envelope pw-text-primary-500"></i>
        </div>
        <span class="text-black fw-bold">Test</span>
      </a>
    </div>
    <!--end::Actionbar-->

    

    <!--begin::Content -->
    <div class="col-12 col-md-11 col-lg-10 px-6 pb-8">
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
                        <td class="col col-md-3"><label for="varsayilan-hesap">Varsayılan Hesap</label></td>
                        <td class="col col-md-9">
                            <div class="form-check form-switch form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="" id="varsayilan-hesap" />
                            </div>                                        
                        </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                        <td class="col col-md-3"><label for="sunucu">Sunucu</label></td>
                        <td class="col col-md-9">
                            <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" id="sunucu" name="sunucu"  />
                        </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                        <td class="col col-md-3"><label for="port">Port</label></td>
                        <td class="col col-md-9">
                            <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" id="port" name="port"  />
                        </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                        <td class="col col-md-3"><label for="guvenli-soket-secenegi">Güvenli Soket Seçeneği</label></td>
                        <td class="col col-md-9">
                            <select id="guvenli-soket-secenegi" class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2" data-placeholder="">
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                            </select>
                        </td>
                    </tr>
                    <!--end::Row-->      
                    
                    <!--begin::Row-->
                    <tr>
                        <td class="col col-md-3"><label for="adi">Varsayılan Kimlik Bilgilerini Kullan</label></td>
                        <td class="col col-md-9">
                            <div class="form-check mb-0">
                                <input class="form-check-input bg-blue" type="checkbox" value="" id="" name="" checked="checked">
                            </div>
                        </td>
                    </tr>
                    <!--end::Row-->
                    
                    <!--begin::Row-->
                    <tr>
                        <td class="col col-md-3"><label for="kullanici">Kullanıcı Adı</label></td>
                        <td class="col col-md-9">
                            <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" id="kullanici" name="kullanici"  />
                        </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                        <td class="col col-md-3"><label for="sifre">Şifre</label></td>
                        <td class="col col-md-9">
                            <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" id="sifre" name="sifre" placeholder="" />
                        </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                        <td class="col col-md-3"><label for="guvenli-baglanti">Güvenli Bağlantı</label></td>
                        <td class="col col-md-9">
                            <div class="form-check mb-0">
                                <input class="form-check-input bg-blue" type="checkbox" value="" id="guvenli-baglanti" name="guvenli-baglanti" checked="checked">
                            </div>
                        </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                        <td class="col col-md-3"><label for="relay-aktif">Relay Aktif</label></td>
                        <td class="col col-md-9">
                            <div class="form-check mb-0">
                                <input class="form-check-input bg-blue" type="checkbox" value="" id="relay-aktif" name="relay-aktif" checked="checked">
                            </div>
                        </td>
                    </tr>
                    <!--end::Row-->
                    

                    <!--begin::Row-->
                    <tr>
                        <td class="col col-md-3"><label for="gonderen-adi">Gönderen Adı</label></td>
                        <td class="col col-md-9">
                            <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" id="gonderen-adi" name="gonderen-adi" />
                        </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                        <td class="col col-md-3"><label for="gonderen-elektronik-posta">Gönderen Elektronik Posta</label></td>
                        <td class="col col-md-9">
                            <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" id="gonderen-elektronik-posta" name="gonderen-elektronik-posta" />
                        </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                        <td class="col col-md-3"><label for="hedef">Hedef</label></td>
                        <td class="col col-md-9">
                            <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" id="hedef" name="hedef" />
                        </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                        <td class="col col-md-3"><label for="test-email-adresi">Test Email Adresi</label></td>
                        <td class="col col-md-9">
                            <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" id="test-email-adresi" name="test-email-adresi" />
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

<!--begin::Drawers-->
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/history-drawer.php'; ?>
<!--end::History canvas-->
<!--end::Drawers-->

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/foot.php'; ?>