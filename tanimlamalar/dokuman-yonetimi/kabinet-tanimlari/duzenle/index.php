<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/header.php'; ?>

<!--begin::Wrapper-->
<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">

  <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/sidebar.php'; ?>
  <!--begin::Main-->
  <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <!--begin::Content wrapper-->
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar col-12 px-6 pt-6">3

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
            <li class="breadcrumb-item active">Akçelik POC</li>
            <!--end::Item-->
          </ul>
          <!--end::Breadcrumb-->
          <!--begin::Title-->
          <div class="d-flex gap-2 align-items-center mb-8">
            <a href="/tanimlamalar/dokuman-yonetimi/kabinet-tanimlari/" class="btn p-0 pw-text-dark">
              <i class="fa-solid fs-2 fa-angle-left pw-text-dark"></i>
            </a>
            <h1 class="page-heading d-flex pw-text-dark fw-bolder fs-4 flex-column justify-content-center my-0">
              Akçelik POC
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

     <!--begin::Actionbar-->
     <div class="d-flex align-items-center gap-5 border-top border-bottom pw-border-neutral-200 px-6 py-2 mt-4">
      <div data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="bottom" data-bs-original-title="Yeni Tip" data-kt-initialized="1">
        <button class="btn p-0 fs-9 fs-semibold d-inline-flex align-items-center gap-1" data-bs-toggle="modal" data-bs-target="#yeni-tip">
          <div class="w-25px h-25px rounded-0.20rem d-inline-flex align-items-center justify-content-center">
            <i class="fa-solid fa-table pw-text-neutral-500"></i>
          </div>
          <span class="text-black">Yeni Tip</span>
        </button>
      </div>

      <div data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="bottom" data-bs-original-title="Tip Ekle" data-kt-initialized="1">
        <button class="btn p-0 fs-9 fs-semibold d-inline-flex align-items-center gap-1" data-bs-toggle="modal" data-bs-target="#tip-ekle">
          <div class="w-25px h-25px rounded-0.20rem d-inline-flex align-items-center justify-content-center">
            <i class="fa-solid fa-plus pw-text-neutral-500"></i>
          </div>
          <span class="text-black">Tip Ekle</span>
        </button>
      </div>
    </div>
    <!--end::Actionbar-->

    <!--begin::Content -->
    <div class="d-flex flex-wrap mb-20">
      <!--begin::Menu col-->
      <div class="col-12 col-lg-4 col-xxl-2 py-6 px-4 border-lg-bottom-0 border-lg-end pw-border-stroke">
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
            <input type="text" class="form-control pw-input-stroke py-2 ps-9 pe-2 fs-8" name="search" value="" placeholder="Ara" data-kt-search-element="input">
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

        
        <!--begin::Aside menu-->
        <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/tanimlamalar/dokuman-yonetimi/kabinet-tanimlari/duzenle/globals/aside_menu.php';  ?>
        <!--end::Aside menu-->
      </div>
      <!--end::Menu col-->
      <!--begin::Content col-->
      <div class="col-12 col-lg-8 col-xxl-10  pt-5 px-4 pt-lg-0 ps-lg-5">
        <!--begin::Tabs wrapper-->
        <div class="table-reponsive overflow-x-auto mt-4">
          <!--begin::Tabs-->
          <div class="nav nav-tabs nav-line-tabs fs-6" role="tablist">
            <!--begin::Tab item-->
            <li class="nav-item" role="presentation">
              <a class="nav-link mx-0 py-3 px-10 fs-base rounded-0 fw-medium active" data-bs-toggle="tab" href="#pw_tab_pane_proje" aria-selected="true" role="tab">Proje</a>
            </li>
            <!--end::Tab item-->

            <!--begin::Tab item-->
            <li class="nav-item" role="presentation">
              <a class="nav-link py-3 px-10 mx-0 fs-base fw-medium rounded-0 pw-text-neutral-500" data-bs-toggle="tab" href="#pw_tab_pane_kabinet_yetkileri" aria-selected="false" role="tab" tabindex="-1">Kabinet Yetkileri</a>
            </li>
            <!--end::Tab item-->
          </div>
          <!--end::Tabs-->
        </div>
        <!--end::Tabs wrapper-->

        <!--begin::Tab contents-->
        <div class="tab-content pw-dashboard-tab-content mt-6" id="tableTabContents">
          <!--begin::Proje content-->
          <div class="tab-pane fade active show" id="pw_tab_pane_proje" role="tabpanel">
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

                <!--begin::Form actions-->
                <div class="d-flex align-items-center justify-content-end gap-3 pt-5">
                  <button type="reset" class="btn btn-active-light fs-8 py-3 px-6">
                    İptal
                  </button>
                  <button type="submit" class="btn btn-primary fs-8 py-3 px-6">
                    Kaydet
                  </button>
                </div>
                <!--end::Form actions-->
              </div>
            </form>
            <!--end::Form-->
          </div>
          <!--end::Proje content-->

          <!--begin::Kabinet yetkileri content-->
          <div class="tab-pane fade" id="pw_tab_pane_kabinet_yetkileri" role="tabpanel">
            <div class="col-12 col-lg-10">
              <!--begin::Title-->
              <h3 class="fs-8 pw-text-neutral-800 fw-semibold">Erişim ve İşlem Yetkileri</h3>
              <!--end::Title-->

              <!--begin::Add button-->
              <button type="button" class="btn p-0 fs-9 fs-semibold d-inline-flex align-items-center gap-2 py-6" data-bs-toggle="modal" data-bs-target="#ekle">
                <div class="w-25px h-25px pw-bg-iconbg rounded-0.20rem d-inline-flex align-items-center justify-content-center">
                  <i class="fa-solid fa-plus pw-text-primary-400"></i>
                </div>
                <span class="pw-text-black">Ekle</span>
              </button>
              <!--end::Add button-->

              <!--begin::Kabinet yetkileri table-->
              <div class="table-responsive overflow-x-auto rounded">
                <!--begin::Table light-->
                <table id="pw_erisim_ve_islem_yetkileri_table" class="table table-row-bordered border pw-table-border-gray table-rounded align-middle w-max-content min-w-100 gy-2 gx-9 gs-9">
                  <thead>
                    <tr class="fw-semibold fs-8 pw-text-neutral-700 pw-bg-neutral-100">
                      <th class="py-3">Paylaşılan Kullanıcılar/Gruplar</th>
                      <th class="py-3">Unvan/Açıklama</th>
                      <th class="py-3">Paylaşım Yetkileri</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <!--begin::Row-->
                    <tr class="fw-medium pw-text-neutral-700 fs-8">
                      <td>
                        <div class="d-flex align-items-center flex-nowrap gap-2">
                          <div class="w-35px h-35px  d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                            <i class="fa-solid fa-user-check pw-text-primary-500"></i>
                          </div>
                          <div>
                            Nesne Sahibi
                          </div>
                        </div>
                      </td>
                      <td>-</td>
                      <td>Yok</td>
                      <td align="right">
                        <a href="/tanimlamalar/kullanicilar/yetki-setleri/yeni-ekle/#yetki-seti" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5 me-2" data-bs-toggle="modal" data-bs-target="#yetki-seti">
                          <i class="fa-solid fa-pen-to-square fs-7 text-primary"></i>
                        </a>
                        <a href="/tanimlamalar/kullanicilar/yetki-setleri/yeni-ekle/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                          <i class="fa-solid fa-trash fs-7 text-primary"></i>
                        </a>
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr class="fw-medium pw-text-neutral-700 fs-8">
                      <td>
                        <div class="d-flex align-items-center flex-nowrap gap-2">
                          <div class="w-35px h-35px  d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                            <i class="fa-solid fa-user-check pw-text-primary-500"></i>
                          </div>
                          <div>
                            Bilet Kullnıcısı
                          </div>
                        </div>
                      </td>
                      <td>-</td>
                      <td>Yok</td>
                      <td align="right">
                        <a href="/tanimlamalar/kullanicilar/yetki-setleri/yeni-ekle/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5 me-2">
                          <i class="fa-solid fa-pen-to-square fs-7 text-primary"></i>
                        </a>
                        <a href="/tanimlamalar/kullanicilar/yetki-setleri/yeni-ekle/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                          <i class="fa-solid fa-trash fs-7 text-primary"></i>
                        </a>
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr class="fw-medium pw-text-neutral-700 fs-8">
                      <td>
                        <div class="d-flex align-items-center flex-nowrap gap-2">
                          <div class="w-35px h-35px  d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                            <i class="fa-solid fa-user-check pw-text-primary-500"></i>
                          </div>
                          <div>
                            Bilet Kullnıcısı
                          </div>
                        </div>
                      </td>
                      <td>-</td>
                      <td>Silme</td>
                      <td align="right">
                        <a href="/tanimlamalar/kullanicilar/yetki-setleri/yeni-ekle/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5 me-2">
                          <i class="fa-solid fa-pen-to-square fs-7 text-primary"></i>
                        </a>
                        <a href="/tanimlamalar/kullanicilar/yetki-setleri/yeni-ekle/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                          <i class="fa-solid fa-trash fs-7 text-primary"></i>
                        </a>
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr class="fw-medium pw-text-neutral-700 fs-8">
                      <td>
                        <div class="d-flex align-items-center flex-nowrap gap-2">
                          <div class="w-35px h-35px  d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                            <i class="fa-solid fa-user-check pw-text-primary-500"></i>
                          </div>
                          <div>
                            Bilet Kullnıcısı
                          </div>
                        </div>
                      </td>
                      <td>-</td>
                      <td>Görme</td>
                      <td align="right">
                        <a href="/tanimlamalar/kullanicilar/yetki-setleri/yeni-ekle/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5 me-2">
                          <i class="fa-solid fa-pen-to-square fs-7 text-primary"></i>
                        </a>
                        <a href="/tanimlamalar/kullanicilar/yetki-setleri/yeni-ekle/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                          <i class="fa-solid fa-trash fs-7 text-primary"></i>
                        </a>
                      </td>
                    </tr>
                    <!--end::Row-->
                  </tbody>
                </table>
                <!--end::Table light-->
                <!--begin::Table dark-->
                <table id="pw_erisim_ve_islem_yetkileri_table" class="table table-row-bordered border pw-dark-bg-table pw-table-border-gray table-rounded align-middle w-max-content min-w-100 gy-2 gx-9 gs-9 theme-dark-show">
                  <thead>
                    <tr class="fw-semibold fs-8 pw-text-neutral-700 pw-bg-neutral-100">
                      <th class="py-3">Paylaşılan Kullanıcılar/Gruplar</th>
                      <th class="py-3">Unvan/Açıklama</th>
                      <th class="py-3">Paylaşım Yetkileri</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <!--begin::Row-->
                    <tr class="fw-medium pw-text-neutral-700 fs-8">
                      <td>
                        <div class="d-flex align-items-center flex-nowrap gap-2">
                          <div class="w-35px h-35px  d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                            <i class="fa-solid fa-user-tag pw-text-primary-500"></i>
                          </div>
                          <div>Bilet Kullanıcısı</div>
                        </div>
                      </td>
                      <td>-</td>
                      <td>Yok</td>
                      <td align="right">
                        <a href="/tanimlamalar/dokuman-yonetimi/kabinet-tanimlari/duzenle/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5 me-2">
                          <i class="fa-solid fa-pen-to-square fs-7 text-primary"></i>
                        </a>
                        <a href="/tanimlamalar/dokuman-yonetimi/kabinet-tanimlari/duzenle/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                          <i class="fa-solid fa-trash fs-7 text-primary"></i>
                        </a>
                      </td>
                    </tr>
                    <!--end::Row-->
                  </tbody>
                </table>
                <!--end::Table dark-->
              </div>
              <!--end::Kabinet yetkileri table-->
            </div>
          </div>
          <!--end::Kabinet yetkileri content-->
        </div>
        <!--end::Table tab contents-->
      </div>
      <!--end::Content col-->
    </div>
    <!--end::Content -->
    <!--end::Content wrapper-->
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/footer.php'; ?>
  </div>
  <!--end::Main-->

</div>
<!--end::Wrapper -->



<!-- begin::Modal -->
<div class="modal fade" tabindex="-1" id="ekle">
  <div class="modal-dialog modal-dialog-centered modal-lg mw-950px">
    <div class="modal-content">
      <div class="modal-body px-3 pt-3 pb-0">
        <!--begin::Row-->
        <div class="d-flex gap-4">
          <!--begin::Col-->
          <div class="col col-lg-4 flex-fill border pw-border-stroke rounded-1 p-4">
            <!--begin::Select-->
            <select class="form-select form-select-solid pw-form-select-primary pw-form-select-primary-border fs-8 p-3" data-control="select2" data-placeholder="">
              <option value="1" seleted>Gruplar</option>
            </select>
            <!--end::Select-->

            <!--begin::Search wrapper--->
            <div id="pw_modal_search" class="w-100 mw-300px mt-3" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="true" data-kt-search-layout="inline">

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
                <input type="text" class="form-control pw-input-stroke py-2 ps-9 pe-2 fs-8" name="search" value="" placeholder="Ara" data-kt-search-element="input">
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
            <!--begin::Search wrpper--->

            <!--begin::Separator-->
            <div class="separator my-3"></div>
            <!--end::Separator-->

            <!--begin::Menu-->
            <div class="menu menu-rounded menu-column menu-title-gray-700 menu-icon-gray-400 menu-arrow-gray-400 menu-bullet-gray-400 menu-arrow-gray-400 menu-state-bg fw-semibold" data-kt-menu="true">
              <!--begin::Menu item-->
              <div class="menu-item">
                <a href="/tanimlamalar/dokuman-yonetimi/kabinet-tanimlari/duzenle/#" class="menu-link py-3">
                  <span class="menu-icon">
                    <i class="fa-solid fa-users"></i>
                  </span>
                  <span class="menu-title">A departmanı</span>
                </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item">
                <a href="/tanimlamalar/dokuman-yonetimi/kabinet-tanimlari/duzenle/#" class="menu-link active py-3">
                  <span class="menu-icon">
                    <i class="fa-solid fa-users"></i>
                  </span>
                  <span class="menu-title">Akçelik Poc</span>
                </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item">
                <a href="/tanimlamalar/dokuman-yonetimi/kabinet-tanimlari/duzenle/#" class="menu-link py-3">
                  <span class="menu-icon">
                    <i class="fa-solid fa-users"></i>
                  </span>
                  <span class="menu-title">Akçelik Poc</span>
                </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item">
                <a href="/tanimlamalar/dokuman-yonetimi/kabinet-tanimlari/duzenle/#" class="menu-link py-3">
                  <span class="menu-icon">
                    <i class="fa-solid fa-users"></i>
                  </span>
                  <span class="menu-title">Akçelik Poc</span>
                </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item">
                <a href="/tanimlamalar/dokuman-yonetimi/kabinet-tanimlari/duzenle/#" class="menu-link py-3">
                  <span class="menu-icon">
                    <i class="fa-solid fa-users"></i>
                  </span>
                  <span class="menu-title">Akçelik Poc</span>
                </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item">
                <a href="/tanimlamalar/dokuman-yonetimi/kabinet-tanimlari/duzenle/#" class="menu-link py-3">
                  <span class="menu-icon">
                    <i class="fa-solid fa-users"></i>
                  </span>
                  <span class="menu-title">Akçelik Poc</span>
                </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item">
                <a href="/tanimlamalar/dokuman-yonetimi/kabinet-tanimlari/duzenle/#" class="menu-link py-3">
                  <span class="menu-icon">
                    <i class="fa-solid fa-users"></i>
                  </span>
                  <span class="menu-title">Akçelik Poc</span>
                </a>
              </div>
              <!--end::Menu item-->
            </div>
            <!--end::Menu-->
          </div>
          <!--end::Col-->

          <!--begin::Col-->
          <div class="col col-lg-4 flex-fill border pw-border-stroke rounded-1 p-4">
            <!--begin::Title-->
            <h2 class="pw-text-neutral-700 fs-8 fw-bold">Akçelik Poc</h2>
            <!--end::Title-->

            <!--begin::Options wrapper-->
            <div class="d-flex flex-column gap-6 mt-5">
              <!--begin::Option-->
              <input type="radio" class="btn-check" name="radio_buttons" value="1" checked="checked" id="kt_radio_buttons_option_1" />
              <label class="btn btn-active-light-primary py-1 px-3 d-flex align-items-center gap-2" for="kt_radio_buttons_option_1">
                <!--begin::User profile-->
                <div class="d-flex align-items-center justify-content-center w-35px h-35px text-white fs-base fw-bold rounded-pill" style="background-color:#FFC700">A</div>
                <!--end::User profile-->

                <!--begin::User info-->
                <span class="d-flex flex-column gap-0 text-start">
                  <span class="text-black d-block fs-6 fw-medium">Abdullah Dayıoğlu</span>
                  <span class="fs-9 pw-text-neutral-300">Test Uzmanı</span>
                </span>
                <!--end::User info-->
              </label>
              <!--end::Option-->

              <!--begin::Option-->
              <input type="radio" class="btn-check" name="radio_buttons" value="1" id="kt_radio_buttons_option_2" />
              <label class="btn btn-active-light-primary py-1 px-3 d-flex align-items-center gap-3" for="kt_radio_buttons_option_2">
                <!--begin::User profile-->
                <div class="d-flex align-items-center justify-content-center w-35px h-35px text-white fs-base fw-bold rounded-pill pw-bg-danger-400">O</div>
                <!--end::User profile-->

                <!--begin::User info-->
                <span class="d-flex flex-column gap-0 text-start">
                  <span class="text-black d-block fs-6 fw-medium">Owl Paperwork</span>
                  <span class="fs-9 pw-text-neutral-300">Test Uzman Yardımcısı</span>
                </span>
                <!--end::User info-->
              </label>
              <!--end::Option-->

              <!--begin::Option-->
              <input type="radio" class="btn-check" name="radio_buttons" value="1" id="kt_radio_buttons_option_3" />
              <label class="btn btn-active-light-primary py-1 px-3 d-flex align-items-center gap-3" for="kt_radio_buttons_option_3">
                <!--begin::User profile-->
                <div class="d-flex align-items-center justify-content-center w-35px h-35px text-white fs-base fw-bold rounded-pill pw-bg-danger-400">O</div>
                <!--end::User profile-->

                <!--begin::User info-->
                <span class="d-flex flex-column gap-0 text-start">
                  <span class="text-black d-block fs-6 fw-medium">Owl Paperwork</span>
                  <span class="fs-9 pw-text-neutral-300">Test Uzman Yardımcısı</span>
                </span>
                <!--end::User info-->
              </label>
              <!--end::Option-->
            </div>
            <!--end::Options wrapper-->
          </div>
          <!--end::Col-->

          <!--begin::Col-->
          <div class="col col-lg-4 flex-fill border pw-border-stroke rounded-1 p-4">
            <div class="d-flex flex-column align-items-center text-center pw-text-neutral-800 fs-8 fw-semibold">
              <!--begin::User profile-->
              <div class="d-flex align-items-center justify-content-center w-60px h-60px text-white fs-4 fw-semibold rounded-pill" style="background-color:#FFC700">A</div>
              <!--end::User profile-->

              <!--begin::User info-->
              <span class="mt-4">Abdullah Dayıoğlu</span>
              <span class="mt-2">xxxxx@paperwork.com.tr</span>
              <span class="mt-2">Test Uzmanı</span>
              <!--end::User info-->
            </div>
          </div>
          <!--end::Col-->
        </div>
        <!--end::Row-->
      </div>

      <div class="modal-footer border-0 px-3 pt-4 pb-6">
        <button type="button" class="btn btn-active-light pw-btn-text-neutral-500 py-2 px-4 me-2 fs-8" data-bs-dismiss="modal">
          İptal
        </button>
        <button class="btn btn-primary py-2 px-4 fs-8">
          Kaydet
        </button>
      </div>
    </div>
  </div>
</div>
<!-- end::Modal -->


<!--begin::Modal-->
<div class="modal fade" tabindex="-1" id="yeni-tip">
  <div class="modal-dialog modal-dialog-centered modal-lg mw-950px">
    <div class="modal-content">
      <div class="modal-header border pb-3">
        <h3 class="modal-title fs-5">Yeni Tip</h3>
      </div>

      <!--begin::Detay form-->
      <form>

        <div class="modal-body px-0">
          <div class="px-7 pb-8 border-b pw-border-stroke">
            <div class="table-responsive overflow-x-auto overflow-lg-hidden">
              <table class="table w-min-content w-100 align-middle gy-5 gx-4 pw-text-neutral-700">
                <tbody>
                  <!--begin::Row-->
                  <tr>
                    <td>
                      <label class="form-label fs-base fw-bolder" for="pw_tip_adi">Tip Adı</label>
                    </td>
                    <td>
                      <input type="text" class="form-control pw-input-stroke fs-8 py-3 px-4" id="pw_tip_adi" name="pw_tip_adi">
                    </td>
                    <td>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="pw_dosya_karti" checked="checked">
                        <label class="form-check-label pw-text-neutral-800" for="pw_dosya_karti">
                          Dosya Kartı
                        </label>
                      </div>
                    </td>
                  </tr>
                  <!--end::Row-->

                  <!--begin::Row-->
                  <tr>
                    <td>
                      <label class="form-label fs-base fw-bolder" for="pw_aciklama">Açıklama</label>
                    </td>
                    <td>
                      <textarea class="form-control pw-input-stroke fs-8 py-3 px-4" name="pw_aciklama" id="pw_aciklama" cols="30" rows="4"></textarea>
                    </td>
                  </tr>
                  <!--end::Row-->
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-active-light pw-btn-text-neutral-500 py-2 px-4 me-2 fs-8" data-bs-dismiss="modal">
            İptal Et
          </button>
          <button class="btn btn-primary py-2 px-4 fs-8">
            Kaydet
          </button>
        </div>

      </form>
      <!--end::Detay form-->
    </div>
  </div>
</div>
<!--end::Modal-->


<!-- begin::Modal -->
<div class="modal fade" tabindex="-1" id="tip-ekle">
  <div class="modal-dialog modal-dialog-centered modal-lg mw-950px">
    <div class="modal-content">
      <div class="modal-header pb-3">
        <h3 class="modal-title fs-5">Kullanılacak Tipler</h3>


      </div>

      <div class="modal-body">
        <div class="d-flex gap-5">
          <!--begin::Menu wrapper-->
          <div class="w-100 rounded-1 border pw-border-stroke py-3 px-4">
            <!--begin::Search wrapper-->
            <div id="kt_docs_search_handler_basic" class="w-100 mb-3" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="true" data-kt-search-layout="inline">

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
                <input type="text" class="form-control pw-input-stroke py-2 ps-9 pe-2 fs-8" name="search" value="" placeholder="Ara" data-kt-search-element="input">
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

            <!--begin::Tipler menu-->
            <div class="menu menu-rounded menu-column menu-title-gray-700 menu-icon-gray-400 menu-arrow-gray-400 menu-bullet-gray-400 menu-arrow-gray-400 menu-state-bg fw-semibold" data-kt-menu="true">
              <!--begin::Menu item-->
              <div class="menu-item">
                <a href="/tanimlamalar/dokuman-yonetimi/kabinet-tanimlari/duzenle/#" class="menu-link py-3">
                  <span class="menu-icon">
                    <i class="fa-solid fa-folder fs-3 pw-text-primary-300"></i>
                  </span>
                  <span class="menu-title">Sahibinden.com SAS</span>
                </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item">
                <a href="/tanimlamalar/dokuman-yonetimi/kabinet-tanimlari/duzenle/#" class="menu-link py-3">
                  <span class="menu-icon">
                    <i class="fa-solid fa-folders fs-3 pw-text-warning-500"></i>
                  </span>
                  <span class="menu-title">Talimat DK</span>
                </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item">
                <a href="/tanimlamalar/dokuman-yonetimi/kabinet-tanimlari/duzenle/#" class="menu-link py-3">
                  <span class="menu-icon">
                    <i class="fa-solid fa-folder fs-3 pw-text-primary-300"></i>
                  </span>
                  <span class="menu-title">Sahibinden.com SAS</span>
                </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item">
                <a href="/tanimlamalar/dokuman-yonetimi/kabinet-tanimlari/duzenle/#" class="menu-link py-3">
                  <span class="menu-icon">
                    <i class="fa-solid fa-folder fs-3 pw-text-primary-300"></i>
                  </span>
                  <span class="menu-title">Sahibinden.com SAS</span>
                </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item">
                <a href="/tanimlamalar/dokuman-yonetimi/kabinet-tanimlari/duzenle/#" class="menu-link py-3">
                  <span class="menu-icon">
                    <i class="fa-solid fa-folders fs-3 pw-text-warning-500"></i>
                  </span>
                  <span class="menu-title">Talimat DK</span>
                </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item">
                <a href="/tanimlamalar/dokuman-yonetimi/kabinet-tanimlari/duzenle/#" class="menu-link py-3">
                  <span class="menu-icon">
                    <i class="fa-solid fa-folders fs-3 pw-text-warning-500"></i>
                  </span>
                  <span class="menu-title">Talimat DK</span>
                </a>
              </div>
              <!--end::Menu item-->
            </div>
            <!--end::Tipler menu-->
          </div>
          <!--end::Menu wrapper-->

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

          <!--begin::Menu wrapper-->
          <div class="w-100 rounded-1 border pw-border-stroke py-3 px-4">
            <!--begin::Tipler menu-->
            <div class="menu menu-rounded menu-column menu-title-gray-700 menu-icon-gray-400 menu-arrow-gray-400 menu-bullet-gray-400 menu-arrow-gray-400 menu-state-bg fw-semibold" data-kt-menu="true">
              <!--begin::Menu item-->
              <div class="menu-item">
                <a href="/tanimlamalar/dokuman-yonetimi/kabinet-tanimlari/duzenle/#" class="menu-link py-3">
                  <span class="menu-icon">
                    <i class="fa-solid fa-folder fs-3 pw-text-primary-300"></i>
                  </span>
                  <span class="menu-title">Sahibinden.com SAS</span>
                </a>
              </div>
              <!--end::Menu item-->
            </div>
            <!--end::Tipler menu-->
          </div>
          <!--end::Menu wrapper-->
        </div>
      </div>

      <div class="modal-footer border-0">
        <button type="reset" class="btn btn-active-light pw-btn-text-neutral-500 py-2 px-4 me-2 fs-8" data-bs-dismiss="modal">
          İptal Et
        </button>
        <button type="submit" class="btn btn-primary py-2 px-4 fs-8">
          Tamam
        </button>
      </div>
    </div>
  </div>
</div>
<!-- end::Modal -->


<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/foot.php'; ?>