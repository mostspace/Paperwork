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
            <li class="breadcrumb-item text-muted">
              <a href="/tanimlamalar/dokuman-yonetimi/kabinet-tanimlari/" class="text-muted text-hover-primary">Kabinet Tanımları</a>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item">
              <span class="text-muted">/</span>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item active">Yeni Dinamik Klasör Ekle</li>
            <!--end::Item-->
          </ul>
          <!--end::Breadcrumb-->
          <!--begin::Title-->
          <div class="d-flex gap-2 align-items-center mb-8">
            <a href="/tanimlamalar/dokuman-yonetimi/kabinet-tanimlari/" class="btn p-0 pw-text-dark">
              <i class="fa-solid fs-2 fa-angle-left pw-text-dark"></i>
            </a>
            <h1 class="page-heading d-flex pw-text-dark fw-bolder fs-4 flex-column justify-content-center my-0">
              Yeni Dinamik Klasör Ekle
            </h1>
          </div>
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

    <!--begin::Content -->
    <div class="col-12 col-md-11 mb-20 px-6 pb-6 ">
      <!--begin::Form-->
      <form class="d-flex flex-column gap-13">
        <div class="col col-lg-9 pe-12">
          <!--begin::Table-->
          <div class="table-responsive overflow-x-auto overflow-lg-hidden">
            <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fw-bold fs-7">
              <tbody>
                <!--begin::Row-->
                <tr>
                  <td><label for="pw_adi">Adı</label></td>
                  <td>
                    <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" id="pw_adi" name="pw_adi" required />
                  </td>
                </tr>
                <!--end::Row-->

                <!--begin::Row-->
                <tr>
                  <td><label for="pw_tasarim_yetki_seti">Tasarım Yetki Seti</label></td>
                  <td>
                    <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" id="pw_tasarim_yetki_seti" name="pw_tasarim_yetki_seti" required />
                  </td>
                </tr>
                <!--end::Row-->

                <!--begin::Row-->
                <tr>
                  <td><label for="pw_simge">Simge</label></td>
                  <td>
                    <!--begin::Image input-->
                    <div class="image-input image-input-empty" data-kt-image-input="true">
                      <!--begin::Image preview wrapper-->
                      <div class="image-input-wrapper w-40px h-40px rounded" style="background-color: var(--pw-stroke-color)"></div>
                      <!--end::Image preview wrapper-->

                      <!--begin::Edit button-->
                      <label class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-20px h-20px bg-body pw-shadow-sm rounded-0.25rem" data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click" title="Simge değiştir">
                        <i class="fa-solid fa-plus pw-text-neutral-300 fs-10 pe-0"></i>

                        <!--begin::Inputs-->
                        <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                        <input type="hidden" name="avatar_remove" />
                        <!--end::Inputs-->
                      </label>
                      <!--end::Edit button-->

                      <!--begin::Cancel button-->
                      <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-20px h-20px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" data-bs-dismiss="click" title="İptal">
                        <i class="fa-solid fa-xmark pw-text-neutral-300 fs-10 pe-0"></i>
                      </span>
                      <!--end::Cancel button-->

                      <!--begin::Remove button-->
                      <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-20px h-20px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" data-bs-dismiss="click" title="Simgeyi kaldır">
                        <i class="fa-solid fa-xmark pw-text-neutral-300 fs-10 pe-0"></i>
                      </span>
                      <!--end::Remove button-->
                    </div>
                    <!--end::Image input-->
                  </td>
                </tr>
                <!--end::Row-->

                <!--begin::Row-->
                <tr>
                  <td><label for="pw_renk">Renk</label></td>
                  <td>
                    <!--begin::Color picker-->
                    <div class="pw-color-picker-group">
                      <input type="color" class="pw-color-picker" value="#3699FF" id="pw_renk" name="pw_renk" />
                      <label class="icon pw-shadow-sm" for="pw_renk" data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click" title="Renk değiştir">
                        <i class="fa-solid fa-pen pw-text-neutral-300 fs-10 pe-0"></i>
                      </label>
                    </div>
                    <!--end::Color picker-->
                  </td>
                </tr>
                <!--end::Row-->

                <!--begin::Row-->
                <tr>
                  <td><label for="pw_tip">Tip</label></td>
                  <td>
                    <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" id="pw_tip" name="pw_tip" required />
                  </td>
                </tr>
                <!--end::Row-->

                <!--begin::Row-->
                <tr>
                  <td><label for="pw_form">Form</label></td>
                  <td>
                    <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" id="pw_form" name="pw_form" required />
                  </td>
                </tr>
                <!--end::Row-->

                <!--begin::Row-->
                <tr>
                  <td><label for="pw_saklama_kabineti">Saklama Kabineti</label></td>
                  <td>
                    <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" id="pw_saklama_kabineti" name="pw_saklama_kabineti" required />
                  </td>
                </tr>
                <!--end::Row-->

                <!--begin::Row-->
                <tr>
                  <td><label for="pw_klasor_yolu">Klasör Yolu</label></td>
                  <td>
                    <div class="d-flex flex-column gap-3">
                      <!--begin::Input-->
                      <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" id="pw_klasor_yolu" name="pw_klasor_yolu" required />
                      <!--end::Input-->

                      <!--begin::Input-->
                      <div class="position-relative pe-12">
                        <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" id="pw_klasor_yolu" name="pw_klasor_yolu" required />
                        <!--begin::Trash button-->
                        <button class="position-absolute end-0 top-50 translate-middle-y btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                          <i class="fa-solid fa-trash fs-7 text-primary"></i>
                        </button>
                        <!--end::Trash button-->
                      </div>
                      <!--end::Input-->

                      <!--begin::Input-->
                      <div class="position-relative pe-12">
                        <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" id="pw_klasor_yolu" name="pw_klasor_yolu" required />
                        <!--begin::Trash button-->
                        <button class="position-absolute end-0 top-50 translate-middle-y btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                          <i class="fa-solid fa-trash fs-7 text-primary"></i>
                        </button>
                        <!--end::Trash button-->
                      </div>
                      <!--end::Input-->

                      <!--begin::Add Folder Button-->
                      <div class="d-flex align-items-center justify-content-end">
                        <a class="d-flex align-items-center gap-3" href="/tanimlamalar/dokuman-yonetimi/kabinet-tanimlari/yeni-dinamik/#">
                          <span class="btn-text-primary btn-text-underline">+ Klasör Yolu Ekle</span>
                          <div class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                            <i class="fa-solid fa-folder fs-7 text-primary"></i>
                          </div>
                        </a>
                      </div>
                      <!--end::Add Folder Button-->
                    </div>
                  </td>
                </tr>
                <!--end::Row-->

                <!--begin::Row-->
                <tr>
                  <td><label for="pw_goruntulenecek_klonlar">Görütülenecek Kolonlar</label></td>
                  <td>
                    <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" id="pw_goruntulenecek_klonlar" name="pw_goruntulenecek_klonlar" required />
                  </td>
                </tr>
                <!--end::Row-->

                <!--begin::Row-->
                <tr>
                  <td><label>Sonuçları Daralt</label></td>
                  <td>
                    <a class="btn-text-primary btn-text-underline" href="/tanimlamalar/dokuman-yonetimi/kabinet-tanimlari/yeni-dinamik/#">[Kriter Ekle]</a>
                  </td>
                </tr>
                <!--end::Row-->

                <!--begin::Row-->
                <tr>
                  <td>
                    <label class="form-label fs-base" for="pw_aciklama">Açıklama</label>
                  </td>
                  <td>
                    <div class="form-check form-switch form-check-custom form-check-solid">
                      <textarea class="form-control form-control-solid" name="pw_aciklama" id="pw_aciklama" cols="30" rows="4"></textarea>
                    </div>
                  </td>
                </tr>
                <!--end::Row-->
              </tbody>
            </table>
          </div>
          <!--end::Table-->
        </div>

        <!--begin::Form actions-->
        <div class="d-flex align-items-center justify-content-end gap-3 border-top pw-border-stroke pt-5">
          <button type="reset" class="btn btn-active-light fs-8 py-3 px-6">
            İptal
          </button>
          <button type="submit" class="btn btn-primary fs-8 py-3 px-6">
            Kaydet
          </button>
        </div>
        <!--end::Form actions-->
      </form>
      <!--end::Form-->
    </div>
    <!--end::Content -->
    <!--end::Content wrapper-->
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/footer.php'; ?>
  </div>
  <!--end::Main-->

</div>
<!--end::Wrapper -->

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/foot.php'; ?>