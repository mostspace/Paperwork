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
            <li class="breadcrumb-item active">Görünüm</li>
            <!--end::Item-->
          </ul>
          <!--end::Breadcrumb-->
          <!--begin::Title-->
          <h1 class="page-heading d-flex text-dark fw-bolder fs-4 flex-column justify-content-center my-0">
            Görünüm
          </h1>
          <!--end::Title-->
        </div>
        <!--end::Page title-->

        <!--begin::Dropdown wrapper-->
        <div class="app-navbar-item ms-1 ms-md-3">
          <!--begin::Menu toggle-->
          <a href="#" class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px" data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
            <i class="fa-solid fa-ellipsis-vertical fs-4"></i>
          </a>
          <!--begin::Menu toggle-->
          <!--begin::Menu-->
          <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-200px" data-kt-menu="true" data-kt-element="theme-mode-menu">
            <!--begin::Menu item-->
            <div class="menu-item px-3 my-0">
              <a href="#" class="menu-link px-3 py-2 fs-8">
                <span class="menu-title">Açılış Sayfası Yap</span>
              </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item px-3 my-0">
              <a href="#" class="menu-link px-3 py-2 fs-8">
                <span class="menu-title">Menüye Ekle</span>
              </a>
            </div>
            <!--end::Menu item-->
          </div>
          <!--end::Menu-->
        </div>
        <!--end::Dropdown wrapper-->

      </div>
      <!--end::Toolbar container-->
    </div>
    <!--end::Toolbar-->

    <!--begin::Actionbar-->
    <div class="d-flex align-items-center gap-5 border-top pw-border-neutral-200 px-6 py-2 my-4">

    </div>
    <!--end::Actionbar-->

    <!--begin::Content -->
    <div class="col-12 col-md-11 mb-20 px-6 pb-6">
      <div class="d-flex gap-6 mb-6">
        <div class="">
          <img src="https://placehold.co/140x140" />
        </div>
        <div class="d-flex flex-column">
          <h2>PaperWork</h2>
          <span>Paperwork’e Hoşgeldiniz!</span>
        </div>
      </div>
      <ul class="nav nav-tabs border-top pw-border-neutral-200 nav-line-tabs mb-5 fs-6">
        <li class="nav-item">
          <a class="nav-link active" data-bs-toggle="tab" href="#giris-ekrani">Giriş Ekranı</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" href="#anasayfa">Anasayfa</a>
        </li>
      </ul>

      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="giris-ekrani" role="tabpanel">
          <!--begin::Form-->
          <form class="mt-8">
            <h2 class="fs-4 fw-bolder pb-5 border-bottom pw-border-neutral-200">
              Ekran Ayarları
            </h2>
            <!--begin::Table-->
            <div class="table-responsive">
              <table class="table align-middle">
                <tbody>
                  <tr>
                    <td><label class="form-label fs-7 fw-bolder" for="akis-no">Logo</label></td>
                    <td>
                      <!--begin::Image input placeholder-->
                      <style>
                        .image-input-empty {
                          background-image: url('https://preview.keenthemes.com/html/metronic/docs/assets/media/svg/avatars/blank.svg');
                        }

                        [data-bs-theme="dark"] .image-input-empty {
                          background-image: url('https://preview.keenthemes.com/html/metronic/docs/assets/media/svg/avatars/blank-dark.svg');
                        }
                      </style>
                      <!--end::Image input placeholder-->

                      <!--begin::Image input-->
                      <div class="image-input image-input-empty" data-kt-image-input="true">
                        <!--begin::Image preview wrapper-->
                        <div class="image-input-wrapper w-125px h-125px"></div>
                        <!--end::Image preview wrapper-->

                        <!--begin::Edit button-->
                        <label class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click" title="Change avatar">
                        <i class="fa-solid fa-pen pw-text-neutral-300 fs-10 pe-0"></i>

                          <!--begin::Inputs-->
                          <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                          <input type="hidden" name="avatar_remove" />
                          <!--end::Inputs-->
                        </label>
                        <!--end::Edit button-->

                        <!--begin::Cancel button-->
                        <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" data-bs-dismiss="click" title="Cancel avatar">
                          <i class="ki-outline ki-cross fs-3"></i>
                        </span>
                        <!--end::Cancel button-->

                        <!--begin::Remove button-->
                        <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" data-bs-dismiss="click" title="Remove avatar">
                          <i class="ki-outline ki-cross fs-3"></i>
                        </span>
                        <!--end::Remove button-->
                      </div>
                      <!--end::Image input-->
                    </td>
                    <td rowspan="6">
                      <h3 class="fs-7 fw-bolder mb-6">Ön İzleme</h3>
                      <div class="border p-4 d-flex align-items-center">
                        <img src="https://placehold.co/570x475" class="mx-auto" />
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td><label class="form-label fs-7 fw-bolder" for="akis-no">Arkaplan Rengi</label></td>
                    <td>
                       <!--begin::Color picker-->
                    <div class="pw-color-picker-group">
                      <input type="color" class="pw-color-picker" value="#3699FF" id="pw_renk" name="pw_renk" />
                      <label class="icon pw-shadow-sm" for="pw_renk" data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click" title="Renk değiştir">
                        <i class="fa-solid fa-pen pw-text-neutral-300 fs-10 pe-0"></i>
                      </label>
                    </div>
                    <!--end::Color picker-->
                  </tr>
                  <tr>
                    <td>
                      <label class="form-label fs-7 fw-bolder" for="is-akisi">Form Alanı Rengi</label>
                    </td>
                    <td>
                        <!--begin::Color picker-->
                    <div class="pw-color-picker-group">
                      <input type="color" class="pw-color-picker" value="#3699FF" id="pw_form_renk" name="pw_form_renk" />
                      <label class="icon pw-shadow-sm" for="pw_form_renk" data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click" title="Renk değiştir">
                        <i class="fa-solid fa-pen pw-text-neutral-300 fs-10 pe-0"></i>
                      </label>
                    </div>
                    <!--end::Color picker-->
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label class="form-label fs-7 fw-bolder" for="durum">Giriş Mesajı</label>
                    </td>
                    <td>
                      <textarea class="form-control form-control-solid mb-8 fs-8" rows="3" placeholder="Paperwork’e Hoşgeldiniz!"></textarea>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label class="form-label fs-7 fw-bolder" for="pw_akis_istatistikleri_datepicker">Login Mesaj Rengi</label>
                    </td>
                    <td>
                       <!--begin::Color picker-->
                    <div class="pw-color-picker-group">
                      <input type="color" class="pw-color-picker" value="#3699FF" id="pw_login_renk" name="pw_login_renk" />
                      <label class="icon pw-shadow-sm" for="pw_login_renk" data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click" title="Renk değiştir">
                        <i class="fa-solid fa-pen pw-text-neutral-300 fs-10 pe-0"></i>
                      </label>
                    </div>
                    <!--end::Color picker-->
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label class="form-label fs-7 fw-bolder" for="pw_akis_istatistikleri_datepicker">Login Mesaj Yazı Fontu</label>
                    </td>
                    <td>
                    <select class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2" data-placeholder="">
                        <option value="Inter" seleted>Inter</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2" align="right">
                      <button type="submit" class="btn btn-primary fs-8 py-3 px-6 mt-4">
                        Tamam
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!--end::Table-->
          </form>
          <!--end::Form-->
        </div>
        <div class="tab-pane fade" id="anasayfa" role="tabpanel">
        <form class="mt-8">
            <h2 class="fs-4 fw-bolder pb-5 border-bottom pw-border-neutral-200">
            Anasayfa Ayarları
            </h2>
            <!--begin::Table-->
            <div class="table-responsive">
              <table class="table">
                <tbody>
                  <tr>
                    <td><label class="form-label fs-7 fw-bolder" for="akis-no">Başlık Rengi</label></td>
                    <td>
                     <!--begin::Color picker-->
                  <button type="button" class="btn position-relative w-40px h-40px rounded p-0" style="background-color:var(--pw-primary-500)">
                    <div class="btn pw-position-right-bottom-50 p-0 w-20px h-20px d-flex align-items-center justify-content-center bg-white rounded-0.25 pw-shadow-sm">
                      <i class="fa-solid fa-pen pw-text-neutral-300 fs-10 pe-0"></i>
                    </div>
                  </button>
                  <!--end::Color picker-->
                    </td>
                    <td rowspan="7">
                      <h3 class="fs-7 fw-bolder mb-6">Ön İzleme</h3>
                      <div class="border p-4 d-flex align-items-center">
                        <img src="https://placehold.co/570x475" class="mx-auto" />
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td><label class="form-label fs-7 fw-bolder" for="akis-no">Menü Rengi</label></td>
                    <td>
                      <!--begin::Color picker-->
                      <button type="button" class="btn position-relative w-40px h-40px rounded p-0" style="background-color:var(--pw-primary-500)">
                        <div class="btn pw-position-right-bottom-50 p-0 w-20px h-20px d-flex align-items-center justify-content-center bg-white rounded-0.25 pw-shadow-sm">
                          <i class="fa-solid fa-pen pw-text-neutral-300 fs-10 pe-0"></i>
                        </div>
                      </button>
                      <!--end::Color picker-->
                  </tr>
                  <tr>
                    <td>
                      <label class="form-label fs-7 fw-bolder" for="is-akisi">Yazı Fontu Rengi</label>
                    </td>
                    <td>
                      <!--begin::Color picker-->
                      <button type="button" class="btn position-relative w-40px h-40px rounded p-0" style="background-color:var(--pw-primary-500)">
                        <div class="btn pw-position-right-bottom-50 p-0 w-20px h-20px d-flex align-items-center justify-content-center bg-white rounded-0.25 pw-shadow-sm">
                          <i class="fa-solid fa-pen pw-text-neutral-300 fs-10 pe-0"></i>
                        </div>
                      </button>
                      <!--end::Color picker-->
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label class="form-label fs-7 fw-bolder" for="durum">Yazı Rengi</label>
                    </td>
                    <td>
                      <!--begin::Color picker-->
                  <button type="button" class="btn position-relative w-40px h-40px rounded p-0" style="background-color:var(--pw-primary-500)">
                    <div class="btn pw-position-right-bottom-50 p-0 w-20px h-20px d-flex align-items-center justify-content-center bg-white rounded-0.25 pw-shadow-sm">
                      <i class="fa-solid fa-pen pw-text-neutral-300 fs-10 pe-0"></i>
                    </div>
                  </button>
                  <!--end::Color picker-->
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label class="form-label fs-7 fw-bolder" for="pw_akis_istatistikleri_datepicker">Yazı Tipi</label>
                    </td>
                    <td>
                      <select class="form-select form-select-solid pw-form-select-primary  fs-8 py-3 px-4" data-control="select2" data-placeholder="">
                        <option value="Inter" seleted>Inter</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2" align="right">
                      <button type="submit" class="btn btn-primary fs-8 py-3 px-6 mt-4">
                        Tamam
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!--end::Table-->
          </form>
        </div>

      </div>
    </div>
    <!--end::Belge Taslakları tablosu-->

  </div>
  <!--end::Content -->

  <script type="text/javascript">


  </script>

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