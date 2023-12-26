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
            <li class="breadcrumb-item active">Yeni Kabinet Ekle</li>
            <!--end::Item-->
          </ul>
          <!--end::Breadcrumb-->
          <!--begin::Title-->
          <div class="d-flex gap-2 align-items-center mb-8">
            <a href="/tanimlamalar/dokuman-yonetimi/kabinet-tanimlari/" class="btn p-0 pw-text-dark">
              <i class="fa-solid fs-2 fa-angle-left pw-text-dark"></i>
            </a>
            <h1 class="page-heading d-flex pw-text-dark fw-bolder fs-4 flex-column justify-content-center my-0">
              Yeni Kabinet Ekle
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
        <div class="col col-lg-9">
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
                  <td>
                    <label for="pw_klasor_yonetimi">Klasör Yetkileri</label>
                  </td>
                  <td>
                    <div class="form-check form-switch form-check-custom form-check-solid">
                      <input class="form-check-input" type="checkbox" value="" id="pw_klasor_yonetimi" name="pw_klasor_yonetimi" />
                    </div>
                  </td>
                </tr>
                <!--end::Row-->

                <!--begin::Row-->
                <tr>
                  <td>
                    <label for="pw_aciklama">Açıklama</label>
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

          <!--begin::Tips-->
          <div class="d-flex align-items-center gap-3 border border-dashed border-primary pw-bg-primary-100 rounded-1 p-4 my-13">
            <!--begin::Icon-->
            <i class="fa-solid fa-grid-2-plus pw-text-primary-500 fs-1"></i>
            <!--end::Icon-->
            <!--begin::Tip content-->
            <p class="fs-base fw-medium pw-text-neutral-600 mb-0">
              Kullanılacak tipleri <a class="btn-text-primary btn-text-underline" href="/tanimlamalar/dokuman-yonetimi/kabinet-tanimlari/yeni/#" data-bs-toggle="modal" data-bs-target="#kullanilacak-tipler">seçiniz.</a>
            </p>
            <!--end::Tip content-->
          </div>
          <!--end::Tips-->
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



<!-- begin::Modal -->
<div class="modal fade" tabindex="-1" id="kullanilacak-tipler">
  <div class="modal-dialog modal-dialog-centered modal-lg mw-950px">
    <div class="modal-content">
      <div class="modal-header pb-3">
        <h3 class="modal-title fs-5">Kullanılacak Tipler</h3>


      </div>

      <div class="modal-body">
        <!--begin::Search wrapper-->
        <div id="kt_docs_search_handler_basic" class="w-100 mw-300px mb-3" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="true" data-kt-search-layout="inline">

          <!--begin::Input Form-->
          <form data-kt-search-element="form" class="position-relative" autocomplete="off">
            <!--begin::Hidden input(Added to disable form autocomplete)-->
            <input type="hidden">
            <!--end::Hidden input-->

            <!--begin::Icon-->
            <!--begin::Svg Icon | path: magnifier-->
            <div class="position-absolute top-50 translate-middle-y w-100 mw-20px mh-20px ms-2">
              <i class="fa-solid fa-magnifying-glass fs-4"></i>
            </div>
            <!--end::Icon-->

            <!--begin::Input-->
            <input type="text" class="form-control pw-input-stroke py-2 ps-9 pe-2 fs-8" name="search" value="" placeholder="İşlemlerde ara" data-kt-search-element="input">
            <!--end::Input-->

            <!--begin::Spinner-->
            <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
              <span class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
            </span>
            <!--end::Spinner-->

            <!--begin::Reset-->
            <span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none" data-kt-search-element="clear">

              <!--begin::Svg Icon | path: cross-->
            </span>
            <!--end::Reset-->
          </form>
          <!--end::Form-->
        </div>
        <!--end::Search wrapper-->

        <div class="d-flex gap-5">
          <!--begin::Tipler tablosu-->
          <div class="table-responsive overflow-x-auto rounded w-100">
            <div class="text-end pw-text-primary-500 fw-bold fs-8 mb-3">106 Belge</div>
            <!--begin::Table-Light-->
            <table class="table table-row-bordered border pw-dark-bg-table pw-table-border-gray pw-table-border-gray table-rounded align-middle w-max-content min-w-100 gy-2 gx-9 gs-9">
              <thead>
                <tr class="fw-semibold fs-8 pw-text-neutral-700 pw-bg-neutral-100">
                  <th class="py-3">Tip Adı</th>
                </tr>
              </thead>
              <tbody>
                <!--begin::Row-->
                <tr class="fw-medium pw-text-neutral-700 fs-8">
                  <td>
                    <div class="d-flex align-items-center flex-nowrap gap-2">
                      <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                        <i class="fa-solid fa-table pw-text-primary-500"></i>
                      </div>
                      <div>Akçelik POC</div>
                    </div>
                  </td>
                </tr>
                <!--end::Row-->

                <!--begin::Row-->
                <tr class="fw-medium pw-text-neutral-700 fs-8">
                  <td>
                    <div class="d-flex align-items-center flex-nowrap gap-2">
                      <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                        <i class="fa-solid fa-table pw-text-primary-500"></i>
                      </div>
                      <div>Aksiyon Belgeleri</div>
                    </div>
                  </td>
                </tr>
                <!--end::Row-->

                <!--begin::Row-->
                <tr class="fw-medium pw-text-neutral-700 fs-8">
                  <td>
                    <div class="d-flex align-items-center flex-nowrap gap-2">
                      <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                        <i class="fa-solid fa-table pw-text-primary-500"></i>
                      </div>
                      <div>Aksiyon Takip</div>
                    </div>
                  </td>
                </tr>
                <!--end::Row-->

                <!--begin::Row-->
                <tr class="fw-medium pw-text-neutral-700 fs-8">
                  <td>
                    <div class="d-flex align-items-center flex-nowrap gap-2">
                      <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                        <i class="fa-solid fa-table pw-text-primary-500"></i>
                      </div>
                      <div>Alıcı Cari Hesap Açma DK</div>
                    </div>
                  </td>
                </tr>
                <!--end::Row-->

                <!--begin::Row-->
                <tr class="fw-medium pw-text-neutral-700 fs-8">
                  <td>
                    <div class="d-flex align-items-center flex-nowrap gap-2">
                      <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                        <i class="fa-solid fa-table pw-text-primary-500"></i>
                      </div>
                      <div>Anket Arşivi</div>
                    </div>
                  </td>
                </tr>
                <!--end::Row-->

                <!--begin::Row-->
                <tr class="fw-medium pw-text-neutral-700 fs-8">
                  <td>
                    <div class="d-flex align-items-center flex-nowrap gap-2">
                      <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                        <i class="fa-solid fa-table pw-text-primary-500"></i>
                      </div>
                      <div>Araç Havuzu</div>
                    </div>
                  </td>
                </tr>
                <!--end::Row-->

                <!--begin::Row-->
                <tr class="fw-medium pw-text-neutral-700 fs-8">
                  <td>
                    <div class="d-flex align-items-center flex-nowrap gap-2">
                      <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                        <i class="fa-solid fa-table pw-text-primary-500"></i>
                      </div>
                      <div>Aksiyon Belgeleri</div>
                    </div>
                  </td>
                </tr>
                <!--end::Row-->

                <!--begin::Row-->
                <tr class="fw-medium pw-text-neutral-700 fs-8">
                  <td>
                    <div class="d-flex align-items-center flex-nowrap gap-2">
                      <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                        <i class="fa-solid fa-table pw-text-primary-500"></i>
                      </div>
                      <div>Aksiyon Takip</div>
                    </div>
                  </td>
                </tr>
                <!--end::Row-->

                <!--begin::Row-->
                <tr class="fw-medium pw-text-neutral-700 fs-8">
                  <td>
                    <div class="d-flex align-items-center flex-nowrap gap-2">
                      <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                        <i class="fa-solid fa-table pw-text-primary-500"></i>
                      </div>
                      <div>Alıcı Cari Hesap Açma DK</div>
                    </div>
                  </td>
                </tr>
                <!--end::Row-->

                <!--begin::Row-->
                <tr class="fw-medium pw-text-neutral-700 fs-8">
                  <td>
                    <div class="d-flex align-items-center flex-nowrap gap-2">
                      <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                        <i class="fa-solid fa-table pw-text-primary-500"></i>
                      </div>
                      <div>Anket Arşivi</div>
                    </div>
                  </td>
                </tr>
                <!--end::Row-->

                <!--begin::Row-->
                <tr class="fw-medium pw-text-neutral-700 fs-8">
                  <td>
                    <div class="d-flex align-items-center flex-nowrap gap-2">
                      <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                        <i class="fa-solid fa-table pw-text-primary-500"></i>
                      </div>
                      <div>Araç Havuzu</div>
                    </div>
                  </td>
                </tr>
                <!--end::Row-->
              </tbody>
            </table>
            <!--end::Table-Light-->
          </div>
          <!--end::Tipler tablosu-->

          <!--begin::Action buttons-->
          <div class="d-flex flex-column gap-3 pt-8">
            <button class="btn btn-icon bg-white btn-icon-primary btn-active-primary w-30px h-30px pw-shadow-sm">
              <i class="fa-solid fa-chevron-left"></i>
            </button>

            <button class="btn btn-icon bg-white btn-icon-primary btn-active-primary w-30px h-30px pw-shadow-sm">
              <i class="fa-solid fa-chevron-right"></i>
            </button>

            <button class="btn btn-icon bg-white btn-icon-primary btn-active-primary w-30px h-30px pw-shadow-sm">
              <i class="fa-solid fa-chevrons-left"></i>
            </button>
          </div>
          <!--end::Action buttons-->

          <!--begin::Seçili tipler tablosu-->
          <div class="table-responsive overflow-x-auto rounded w-100">
            <div class="text-end pw-text-primary-500 fw-bold fs-8 mb-3">4 Belge</div>
            <!--begin::Table-Light-->
            <table class="table table-row-bordered border pw-dark-bg-table pw-table-border-gray pw-table-border-gray table-rounded align-middle w-max-content min-w-100 gy-2 gx-9 gs-9">
              <thead>
                <tr class="fw-semibold fs-8 pw-text-neutral-700 pw-bg-neutral-100">
                  <th class="py-3">Tip Adı</th>
                </tr>
              </thead>
              <tbody>
                <!--begin::Row-->
                <tr class="fw-medium pw-text-neutral-700 fs-8">
                  <td>
                    <div class="d-flex align-items-center flex-nowrap gap-2">
                      <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                        <i class="fa-solid fa-table pw-text-primary-500"></i>
                      </div>
                      <div>Akçelik POC</div>
                    </div>
                  </td>
                </tr>
                <!--end::Row-->

                <!--begin::Row-->
                <tr class="fw-medium pw-text-neutral-700 fs-8">
                  <td>
                    <div class="d-flex align-items-center flex-nowrap gap-2">
                      <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                        <i class="fa-solid fa-table pw-text-primary-500"></i>
                      </div>
                      <div>Aksiyon Belgeleri</div>
                    </div>
                  </td>
                </tr>
                <!--end::Row-->

                <!--begin::Row-->
                <tr class="fw-medium pw-text-neutral-700 fs-8">
                  <td>
                    <div class="d-flex align-items-center flex-nowrap gap-2">
                      <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                        <i class="fa-solid fa-table pw-text-primary-500"></i>
                      </div>
                      <div>Aksiyon Takip</div>
                    </div>
                  </td>
                </tr>
                <!--end::Row-->

                <!--begin::Row-->
                <tr class="fw-medium pw-text-neutral-700 fs-8">
                  <td>
                    <div class="d-flex align-items-center flex-nowrap gap-2">
                      <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                        <i class="fa-solid fa-table pw-text-primary-500"></i>
                      </div>
                      <div>Alıcı Cari Hesap Açma DK</div>
                    </div>
                  </td>
                </tr>
                <!--end::Row-->
              </tbody>
            </table>
            <!--end::Table-Light-->
          </div>
          <!--end::Seçili tipler tablosu-->
        </div>
      </div>

      <div class="modal-footer border-0">
        <button type="reset" class="btn btn-active-light pw-btn-text-neutral-500 py-2 px-4 me-2 fs-8" data-bs-dismiss="modal">
          İptal
        </button>
        <button type="submit" class="btn btn-primary py-2 px-4 fs-8">
          Kaydet
        </button>
      </div>
    </div>
  </div>
</div>
<!-- end::Modal -->


<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/foot.php'; ?>