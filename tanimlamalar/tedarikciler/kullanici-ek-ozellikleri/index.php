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
            <li class="breadcrumb-item active">Kullanıcı Ek Özellikleri</li>
            <!--end::Item-->
          </ul>
          <!--end::Breadcrumb-->
          <!--begin::Title-->
          <h1 class="page-heading d-flex text-dark fw-bolder fs-4 flex-column justify-content-center my-0">
            Kullanıcı Ek Özellikleri
          </h1>
          <!--end::Title-->
        </div>
        <!--end::Page title-->

        <!--begin::Dropdown wrapper-->
        <div class="app-navbar-item ms-1 ms-md-3">
          <!--begin::Menu toggle-->
          <a href="/tanimlamalar/tedarikciler/kullanici-ek-ozellikleri/#" class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px" data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
            <i class="fa-solid fa-ellipsis-vertical fs-4"></i>
          </a>
          <!--begin::Menu toggle-->
          <!--begin::Menu-->
          <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-200px" data-kt-menu="true" data-kt-element="theme-mode-menu">
            <!--begin::Menu item-->
            <div class="menu-item px-3 my-0">
              <a href="/tanimlamalar/tedarikciler/kullanici-ek-ozellikleri/#" class="menu-link px-3 py-2 fs-8">
                <span class="menu-title">Açılış Sayfası Yap</span>
              </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item px-3 my-0">
              <a href="/tanimlamalar/tedarikciler/kullanici-ek-ozellikleri/#" class="menu-link px-3 py-2 fs-8">
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
    <div class="d-flex align-items-center gap-5 border-top border-bottom pw-border-neutral-200 px-6 py-2 my-4">
      <a href="/tanimlamalar/tedarikciler/kullanici-ek-ozellikleri/#" class="btn p-0" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="bottom" title="Yeni Tedarikçi Ek Özelliği Ekle">
        <span class="btn p-0 fs-9 fs-semibold d-inline-flex align-items-center gap-2">
          <div class="w-25px h-25px pw-bg-iconbg rounded-0.20rem d-inline-flex align-items-center justify-content-center">
            <i class="fa-solid fa-plus pw-text-primary-400"></i>
          </div>
          <span class="pw-text-black">Yeni</span>
        </span>
      </a>

      <a href="/tanimlamalar/tedarikciler/kullanici-ek-ozellikleri/#" class="btn p-0" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="bottom" title="Kaydet">
        <span class="btn p-0 fs-9 fs-semibold d-inline-flex align-items-center gap-2">
          <div class="w-25px h-25px pw-bg-iconbg rounded-0.20rem d-inline-flex align-items-center justify-content-center">
            <i class="fa-solid fa-floppy-disk pw-text-primary-400"></i>
          </div>
          <span class="pw-text-black">Kaydet</span>
        </span>
      </a>
    </div>
    <!--end::Actionbar-->

    <!--begin::Content -->
    <div class="col-12 col-md-11 mb-20 px-6 pb-6">
      <div class="row g-10">
        <div class="col-12 col-lg-4 border-bottom border-lg-bottom-0 border-lg-end pw-border-stroke">
          <!--begin::Tedarikçi Ek Özellikleri tablosu-->
          <div class="table-responsive overflow-x-auto rounded">
            <!--begin::Table-Light-->
            <table class="table table-row-bordered border pw-dark-bg-table pw-table-border-gray pw-table-border-gray table-rounded align-middle w-max-content min-w-100 gy-2 gx-9 gs-9">
              <thead>
                <tr class="fw-semibold fs-8 pw-text-neutral-700 pw-bg-neutral-100">
                  <th class="py-3">Kolon</th>
                  <th class="py-3">Başlık</th>
                </tr>
              </thead>
              <tbody>
                <!--begin::Row-->
                <tr class="fw-medium pw-text-neutral-700 fs-8">
                  <td>Kolon 1</td>
                  <td>Departman</td>
                </tr>
                <!--end::Row-->

                <!--begin::Row-->
                <tr class="fw-medium pw-text-neutral-700 fs-8">
                  <td>Kolon 2</td>
                  <td>Pozisyon</td>
                </tr>
                <!--end::Row-->

                <!--begin::Row-->
                <tr class="fw-medium pw-text-neutral-700 fs-8">
                  <td>Kolon 3</td>
                  <td>Adres</td>
                </tr>
                <!--end::Row-->
              </tbody>
            </table>
            <!--end::Table-Light-->
          </div>
          <!--end::Tedarikçi Ek Özellikleri tablosu-->
        </div>

        <div class="col-12 col-lg-8">
          <form>
            <!--begin::Form Table-->
            <div class="table-responsive overflow-x-auto overflow-lg-visible">
              <table class="table w-min-content align-middle w-100 gy-3 gx-4 pw-text-neutral-800 fw-bold fs-7">
                <tbody>
                  <!--begin::Row-->
                  <tr>
                    <td><label for="pw_baslik">Taslak Adı</label></td>
                    <td>
                      <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" id="pw_baslik" name="pw_baslik" />
                    </td>
                  </tr>
                  <!--end::Row-->

                  <!--begin::Row-->
                  <tr>
                    <td><label for="pw_zorunlu">Zorunlu</label></td>
                    <td>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="pw_zorunlu" name="pw_zorunlu" />
                      </div>
                    </td>
                  </tr>
                  <!--end::Row-->

                  <!--begin::Row-->
                  <tr>
                    <td><label for="pw_liste_adi">Liste Adı</label></td>
                    <td>
                      <div class="position-relative">
                        <select class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2" data-placeholder="Seçim Yapın" id="pw_liste_adi" name="pw_liste_adi">
                          <option></option>
                          <option value="1">Option 1</option>
                          <option value="2">Option 2</option>
                        </select>

                        <button class="position-absolute left-100 btn bg-body fs-8 py-3 px-4">
                          <i class="fa-solid fa-trash-can pw-text-danger-500 me-0"></i>
                        </button>
                      </div>
                    </td>
                  </tr>
                  <!--end::Row-->

                  <!--begin::Row-->
                  <tr>
                    <td><label for="pw_anahtar_alan">Anahtar Alan</label></td>
                    <td>
                      <select class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2" data-placeholder="Seçim Yapın" id="pw_anahtar_alan" name="pw_anahtar_alan">
                        <option></option>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                      </select>
                    </td>
                  </tr>
                  <!--end::Row-->

                  <!--begin::Row-->
                  <tr>
                    <td><label for="pw_goruntulenecek_alan">Görüntülenecek Alan</label></td>
                    <td>
                      <select class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2" data-placeholder="Seçim Yapın" id="pw_goruntulenecek_alan" name="pw_goruntulenecek_alan">
                        <option></option>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                      </select>
                    </td>
                  </tr>
                  <!--end::Row-->
                </tbody>
              </table>
            </div>
            <!--end::Form Table-->

            <!--begin::Form Actions-->

            <div class="d-flex align-items-center justify-content-end gap-3 mt-16 pt-5 border-top pw-border-stroke">
              <button type="reset" class="btn btn-active-light fs-8 py-3 px-6">
                İptal
              </button>
              <button type="submit" class="btn btn-primary fs-8 py-3 px-6">
                Güncelle
              </button>
            </div>

            <!--end::Form Actions-->
          </form>
        </div>
      </div>

    </div>
    <!--end::Content -->
    <!--end::Content wrapper-->
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/footer.php'; ?>
  </div>
  <!--end::Main-->

</div>
<!--end::Wrapper -->


<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/foot.php'; ?>