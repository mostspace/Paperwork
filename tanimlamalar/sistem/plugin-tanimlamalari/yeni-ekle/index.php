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
                <li class="breadcrumb-item active"> Plugin Tanımlamaları</li>
                <!--end::Item-->
              </ul>
              <!--end::Breadcrumb-->
              <!--begin::Title-->
              <h1 class="page-heading d-flex text-dark fw-bold fs-4 flex-column justify-content-center my-0">
                Plugin Tanımlamaları
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
            <div class="row">
                <!--begin::Form-->
                <form class="d-flex flex-column gap-13">
                    <div class="col col-lg-10">
                        <!--begin::Table-->
                        <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                            <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fw-bold fs-7">
                                <tbody>
                                    <!--begin::Row-->
                                    <tr>
                                        <td class="col col-md-3"><label for="eklenti-adi">Eklenti Adı</label></td>
                                        <td class="col col-md-9">
                                            <select id="eklenti-adi" class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2" data-placeholder="">
                                                <option value="1">Option 1</option>
                                                <option value="2">Option 2</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <!--end::Row-->                                  

                                    <!--begin::Row-->
                                    <tr>
                                        <td class="col col-md-3 pt-0"><label for="transfer_turu">Transfer Türü</label></td>
                                        <td class="d-flex align-items-center col-md-9">
                                            <div class="form-check form-check-custom me-10">
                                                <input class="form-check-input bg-blue w-20px h-20px" type="radio" value="" id="sql-server" name="transfer_turu" checked>
                                                <label class="form-check-label pw-text-neutral-700 fs-8" for="sql-server">
                                                    SQL Server
                                                </label>
                                            </div>
                                            <div class="form-check form-check-custom me-10">
                                                <input class="form-check-input bg-blue w-20px h-20px" type="radio" value="" id="oracle" name="transfer_turu">
                                                <label class="form-check-label pw-text-neutral-700 fs-8" for="oracle">
                                                    Oracle
                                                </label>
                                            </div>
                                            <div class="form-check form-check-custom me-10">
                                                <input class="form-check-input bg-blue w-20px h-20px" type="radio" value="" id="db2" name="transfer_turu">
                                                <label class="form-check-label pw-text-neutral-700 fs-8" for="db2">
                                                    DB2
                                                </label>
                                            </div>
                                            <div class="form-check form-check-custom">
                                                <input class="form-check-input bg-blue w-20px h-20px" type="radio" value="" id="diger" name="transfer_turu">
                                                <label class="form-check-label pw-text-neutral-700 fs-8" for="diger">
                                                    Diğer
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <!--end::Row-->

                                    <!--begin::Row-->
                                    <tr>
                                        <td class="col col-md-3"><label for="kutuphane-adi">Kütüphane Adı</label></td>
                                        <td class="col col-md-9">
                                            <select id="kutuphane-adi" class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2" data-placeholder="">
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
                                        <td class="col col-md-3"><label for="sunucu">Sunucu</label></td>
                                        <td class="col col-md-9">
                                            <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" id="sunucu" name="sunucu" />
                                        </td>
                                    </tr>
                                    <!--end::Row-->

                                    <!--begin::Row-->
                                    <tr>
                                        <td class="col col-md-3"><label for="veritabani">Veritabanı</label></td>
                                        <td class="col col-md-9">
                                            <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" id="veritabani" name="veritabani" />
                                        </td>
                                    </tr>
                                    <!--end::Row-->

                                    <!--begin::Row-->
                                    <tr>
                                        <td class="col col-md-3"><label for="port">Port</label></td>
                                        <td class="col col-md-9">
                                            <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" id="port" name="port" />
                                        </td>
                                    </tr>
                                    <!--end::Row-->
                                </tbody>
                            </table>
                        </div>
                        <!--end::Table-->
                    </div>
                </form>
                <!--end::Form-->
            </div>
            <!--end::Form wrapper--> 

            <!--begin::Form actions-->
            <div class="row">
                <div class="col col-lg-10">
                    <div class="d-flex align-items-center justify-content-end gap-3 border-top pw-border-stroke pt-5">
                        <button type="reset" class="btn btn-active-light fs-8 py-3 px-6">
                            İptal
                        </button>
                        <button type="submit" class="btn btn-primary fs-8 py-3 px-6">
                            Kaydet
                        </button>
                    </div>
                </div>
            </div>
            <!--end::Form actions-->
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

<!--begin::Drawers-->
<!--begin::History & Recent canvas trigger-->
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/history-drawer.php'; ?>
<!--end::History canvas-->
<!--end::Drawers-->

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/foot.php'; ?>