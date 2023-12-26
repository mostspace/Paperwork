<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/header.php'; ?>

<!--begin::Wrapper-->
<div class="app-wrapper flex-column flex-row-fluid p-6" id="kt_app_wrapper">

  <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/sidebar.php'; ?>
  <!--begin::Main-->
  <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <!--begin::Content wrapper-->
    <div class="row">
      <div class="col col-md-8">
        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar mb-10">

          <!--begin::Toolbar container-->
          <div id="kt_app_toolbar_container" class="container-fluid d-flex flex-stack p-0">

            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
              <!--begin::Breadcrumb-->
              <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-8 mt-0 mb-3">
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
                <li class="breadcrumb-item active">Kullanıcı Ek Özellikleri</li>
                <!--end::Item-->
              </ul>
              <!--end::Breadcrumb-->
              <!--begin::Title-->
              <h1 class="page-heading d-flex text-dark fw-bold fs-4 flex-column justify-content-center my-0 mb-2">
                Kullanıcı Ek Özellikleri
              </h1>
              <p class="mw-550px fs-8 pw-text-neutral-600 mb-0">
                Lorem ipsum dolor sit amet, consectetur adipiscing
                elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua.
              </p>
              <!--end::Title-->
            </div>
            <!--end::Page title-->

          </div>
          <!--end::Toolbar container-->
        </div>
        <!--end::Toolbar-->

        <!--begin::Content -->
        <div class="col-12 col-md-11 mb-20 px-6 pb-6">
          <!--begin::Kullanıcı Özellikleri-->
          <form>
            <div class="d-flex flex-column gap-5 card rounded-2 border pw-border-stroke py-6">
              <!--begin::Column Count-->
              <div class="d-flex align-items-center gap-2 pw-text-neutral-800 fw-bold px-10">
                <i class="fa-solid fa-columns-3 fs-base pw-text-neutral-800"></i>
                2 Kolon
              </div>
              <!--end::Column Count-->

              <!--begin::Kullanıcı Özellikleri Table-->
              <div class="table-responsive overflow-x-auto">
                <table class="table table-row-bordered pw-table-border-gray table-rounded align-middle w-max-content min-w-100 gy-2 gx-10 gs-10 ge-10">
                  <thead>
                    <tr class="fw-semibold fs-8 pw-text-neutral-800 fw-bolder">
                      <th>KOLONLAR</th>
                      <th>KOLON ADI</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <!--begin::Row-->
                    <tr class="fw-medium pw-text-neutral-700 fs-8">
                      <td class="pt-6">
                        Kolon-1
                      </td>
                      <td class="pt-6">
                        <div class="d-flex align-items-center gap-2">
                          Sicil No
                          <a href="/tanimlamalar/kullanicilar/kullanici-ek-ozellikleri/#" class="btn btn-icon pw-btn-bg-neutral-100 btn-pw-text-primary-500 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                            <i class="fa-solid fa-pen-to-square fs-7 text-primary"></i>
                          </a>
                        </div>
                      </td>
                      <td class="pt-6" align="right">
                        <a href="/tanimlamalar/kullanicilar/kullanici-ek-ozellikleri/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                          <i class="fa-solid fa-trash fs-7 text-primary"></i>
                        </a>
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr class="fw-medium pw-text-neutral-700 fs-8">
                      <td class="pt-6">
                        Kolon-2
                      </td>
                      <td class="pt-6">
                        <div class="d-flex align-items-center gap-2">
                          Departman
                          <a href="/tanimlamalar/kullanicilar/kullanici-ek-ozellikleri/#" class="btn btn-icon pw-btn-bg-neutral-100 btn-pw-text-primary-500 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                            <i class="fa-solid fa-pen-to-square fs-7 text-primary"></i>
                          </a>
                        </div>
                      </td>
                      <td class="pt-6" align="right">
                        <a href="/tanimlamalar/kullanicilar/kullanici-ek-ozellikleri/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                          <i class="fa-solid fa-trash fs-7 text-primary"></i>
                        </a>
                      </td>
                    </tr>
                    <!--end::Row-->
                  </tbody>
                </table>
              </div>
              <!--end::Kullanıcı Özellikleri Table-->
              <!--begin::Add Column-->
              <div class="d-flex align-items-center justify-content-between gap-4 px-10">
                <input class="form-control form-control-solid fs-8 py-3 px-4" placeholder="Kolon Adı" id="pw_gelen_e_faturalar_aktivite_durumu" required="required">
                <button type="button" class="btn btn-icon-primary btn-text-primary btn-active-primary flex-shrink-0 py-3 px-4 fs-8">
                  <i class="fa-solid fa-plus fs-8"></i>
                  Kolon Ekle
                </button>
              </div>
              <!--end::Add Column-->
            </div>

            <!--begin::Form footer-->
            <div class="d-flex align-items-center justify-content-end mt-10 gap-3">
              <button type="reset" class="btn btn-active-light fs-8 py-3 px-6">
                Vazgeç
              </button>
              <button type="submit" class="btn btn-primary fs-8 py-3 px-6">
                Kaydet
              </button>
            </div>
            <!--end::Form footer-->

          </form>
          <!--end::Kullanıcı Özellikleri-->
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