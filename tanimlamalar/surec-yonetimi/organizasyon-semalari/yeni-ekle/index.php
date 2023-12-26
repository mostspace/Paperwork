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
                <li class="breadcrumb-item active"> Organizasyon Şemaları</li>
                <!--end::Item-->
              </ul>
              <!--end::Breadcrumb-->
              <!--begin::Title-->
              <h1 class="page-heading d-flex text-dark fw-bold fs-4 flex-column justify-content-center my-0">
                Organizasyon Şemaları
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
                <div class="col-md-4 col-lg-4">
                    <div class="mt-5">
                        <!-- ... Search wrapper ... -->
                        <span class="fw-bolder d-block mb-2 fs-7">Şema Kullanıcıları</span>
                        <!--begin::Search wrapper-->
                        <div id="kt_docs_search_handler_basic" class="w-100 mb-3" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="true" data-kt-search-layout="inline">
                            <!--begin::Input Form-->
                            <form data-kt-search-element="form" class="position-relative" autocomplete="off">
                                <!--begin::Hidden input(Added to disable form autocomplete)-->
                                <input type="hidden" />
                                <!--end::Hidden input-->

                                <!--begin::Icon-->
                                <!--begin::Svg Icon | path: magnifier-->
                                <div class="position-absolute top-50 translate-middle-y w-100 mw-20px mh-20px ms-2">
                                    <i class="fa-solid fa-magnifying-glass fs-4"></i>
                                </div>
                                <!--end::Icon-->

                                <!--begin::Input-->
                                <input type="text" class="form-control pw-input-stroke py-2 ps-9 pe-2 fs-8" name="search" value="" placeholder="Ara..." data-kt-search-element="input" />
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
                        <!--begin::Menu-->
                        <div class="menu menu-rounded menu-column menu-title-gray-700 menu-icon-gray-400 menu-arrow-gray-400 menu-bullet-gray-400 menu-arrow-gray-400 menu-state-bg fw-semibold" data-kt-menu="true" id="pw-seda-menu">
                            <!--begin::Menu item-->
                            <div class="menu-item py-0 menu-sub-indention menu-accordion" data-kt-menu-trigger="click">
                                <!--begin::Menu link-->
                                <a href="javascript:void(0);" class="menu-link ps-0">
                                    <div class="d-flex align-items-center">
                                        <span class="menu-arrow"></span>
                                        <span class="menu-icon">
                                            <i class="fa-solid fa-users fs-7 me-1"></i>
                                        </span>
                                        <span class="fs-9 mb-0 pw-text-gray-800 menu-title pw-text-neutral-700">
                                            000-ONS ORGANİZASYON ŞEMASI V1
                                        </span>
                                    </div>
                                </a>
                                <!--end::Menu link-->

                                <!--begin::Menu sub-->
                                <div class="menu-sub menu-sub-accordion">
                                    <!--begin::Menu item-->
                                    <div class="menu-item py-0 menu-sub-indention menu-accordion" data-kt-menu-trigger="click">
                                        <a href="javascript:void(0);" class="menu-link">
                                            <div class="d-flex align-items-center">
                                                <span class="menu-arrow"></span>
                                                <span class="menu-icon">
                                                    <i class="fa-solid fa-users fs-7 me-1"></i>
                                                </span>
                                                <span class="fs-9 pw-text-neutral-700 mb-0 pw-text-gray-800 menu-title">
                                                    ÜST YÖNETİM ( )
                                                </span>
                                            </div>
                                        </a>

                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-accordion">
                                            <!--begin::Menu item-->
                                            <div class="menu-item py-0 menu-sub-indention menu-accordion" data-kt-menu-trigger="click">
                                                <a href="javascript:void(0);" class="menu-link">
                                                    <div class="d-flex align-items-center">
                                                        <span class="menu-arrow"></span>
                                                        <span class="menu-icon">
                                                            <i class="fa-solid fa-users fs-7 me-1"></i>
                                                        </span>
                                                        <span class="fs-9 pw-text-neutral-700 mb-0 pw-text-gray-800 menu-title">
                                                            ENTEGRE SİSTEMLER ( )
                                                        </span>
                                                    </div>
                                                </a>

                                                <!--begin::Menu sub-->
                                                <div class="menu-sub menu-sub-accordion">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item py-0 menu-sub-indention menu-accordion" data-kt-menu-trigger="click">
                                                        <a href="javascript:void(0);" class="menu-link">
                                                            <div class="d-flex align-items-center">
                                                                <span class="menu-arrow"></span>
                                                                <span class="menu-icon">
                                                                    <i class="fa-solid fa-users fs-7 me-1"></i>
                                                                </span>
                                                                <span class="fs-9 pw-text-neutral-700 mb-0 pw-text-gray-800 menu-title">
                                                                    İSG VE ÇEVRE YÖNETİM ( )
                                                                </span>
                                                            </div>
                                                        </a>

                                                        <!--begin::Menu sub-->
                                                        <div class="menu-sub menu-sub-accordion">
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item py-0">
                                                                <a href="javascript:void(0);" class="menu-link">
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="menu-arrow"></span>
                                                                        <span class="menu-icon">
                                                                            <i class="fa-solid fa-users fs-7 me-1"></i>
                                                                        </span>
                                                                        <span class="fs-9 pw-text-neutral-700 mb-0 pw-text-gray-800 menu-title">
                                                                            İŞ YERİ SAĞLIK BİRİMİ ( )
                                                                        </span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                        </div>
                                                        <!--end::Menu sub-->
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item py-0 menu-sub-indention menu-accordion" data-kt-menu-trigger="click">
                                                        <a href="javascript:void(0);" class="menu-link">
                                                            <div class="d-flex align-items-center">
                                                                <span class="menu-arrow"></span>
                                                                <span class="menu-icon">
                                                                    <i class="fa-solid fa-users fs-7 me-1"></i>
                                                                </span>
                                                                <span class="fs-9 pw-text-neutral-700 mb-0 pw-text-gray-800 menu-title">
                                                                    KALİTE YÖNETİM ( )
                                                                </span>
                                                            </div>
                                                        </a>

                                                        <!--begin::Menu sub-->
                                                        <div class="menu-sub menu-sub-accordion">
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item py-0">
                                                                <a href="javascript:void(0);" class="menu-link">
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="menu-arrow"></span>
                                                                        <span class="menu-icon">
                                                                            <i class="fa-solid fa-users fs-7 me-1"></i>
                                                                        </span>
                                                                        <span class="fs-9 pw-text-neutral-700 mb-0 pw-text-gray-800 menu-title">
                                                                            KAYNAK KOORDİNASYON BİRİMİ ( )
                                                                        </span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                        </div>
                                                        <!--end::Menu sub-->
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item py-0">
                                                        <a href="javascript:void(0);" class="menu-link">
                                                            <div class="d-flex align-items-center">
                                                                <span class="menu-arrow"></span>
                                                                <span class="menu-icon">
                                                                    <i class="fa-solid fa-users fs-7 me-1"></i>
                                                                </span>
                                                                <span class="fs-9 pw-text-neutral-700 mb-0 pw-text-gray-800 menu-title">
                                                                    TESİS VE MAKİNE BAKIM ( )
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu sub-->
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item py-0">
                                                <a href="javascript:void(0);" class="menu-link">
                                                    <div class="d-flex align-items-center ps-7">
                                                        <span class="menu-icon">
                                                            <i class="fa-solid fa-users fs-7 me-1"></i>
                                                        </span>
                                                        <span class="fs-9 pw-text-neutral-700 mb-0 pw-text-gray-800 menu-title">
                                                            MALİ VE İDARİ İŞLER ( )
                                                        </span>
                                                    </div>
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item py-0">
                                                <a href="javascript:void(0);" class="menu-link">
                                                    <div class="d-flex align-items-center ps-7">
                                                        <span class="menu-icon">
                                                            <i class="fa-solid fa-users fs-7 me-1"></i>
                                                        </span>
                                                        <span class="fs-9 pw-text-neutral-700 mb-0 pw-text-gray-800 menu-title">
                                                            PROJE / SATIŞ ( )
                                                        </span>
                                                    </div>
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item py-0">
                                                <a href="javascript:void(0);" class="menu-link">
                                                    <div class="d-flex align-items-center ps-7">
                                                        <span class="menu-icon">
                                                            <i class="fa-solid fa-users fs-7 me-1"></i>
                                                        </span>
                                                        <span class="fs-9 pw-text-neutral-700 mb-0 pw-text-gray-800 menu-title">
                                                            ÜRETİM ( )
                                                        </span>
                                                    </div>
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu sub-->
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </div>
                </div>
                <div class="col-md-8 col-lg-8">
                    <div class="border h-100 position-relative">
                        <!--begin::Form actions-->
                        <div class="position-absolute fixed-bottom d-flex align-items-center justify-content-between gap-3 border-top px-15 py-5 mt-10" id="buttonGroup">
                            <div>
                                <button type="reset" class="btn btn-success fs-8 py-3 px-6 me-5 my-2">PDF Formatında Kaydet</button>
                                <button type="submit" class="btn btn-primary fs-8 py-3 px-6 my-2" data-bs-toggle="modal" data-bs-target="#kullaniciEkle">Kullanıcı Ekle</button>
                            </div>
                            <div>
                                <button type="reset" class="btn btn-active-light fs-8 py-3 px-6 text-gray-400 my-2">İptal</button>
                                <button type="submit" class="btn btn-primary fs-8 py-3 px-6 my-2">Kaydet</button>
                            </div>
                        </div>
                        <!--end::Form actions-->
                    </div>
                </div>
            </div>
            <!--end::Form wrapper-->
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


<!-- begin::Modal -->
<div class="modal fade" tabindex="-1" id="kullaniciEkle">
    <div class="modal-dialog modal-dialog-centered modal-lg mw-950px">
        <div class="modal-content">
            <div class="modal-header border pb-3">
                <h3 class="modal-title fs-5">Kullanıcı Ekle</h3>
            </div>

            <div class="modal-body">
                <form>
                    <!--begin::Table-->
                    <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                        <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fw-bold fs-7">
                            <tbody>
                                <!--begin::Row-->
                                <tr>
                                    <td><label class="form-label fs-base fw-bolder" for="organizasyon-adi">Organizasyon Adı</label></td>
                                    <td>
                                        <select id="organizasyon-adi" class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2" data-placeholder="">
                                            <option value="1">Option 1</option>
                                        </select>
                                    </td>
                                </tr>
                                <!--end::Row-->

                                <!--begin::Row-->
                                <tr>
                                    <td><label class="form-label fs-base fw-bolder" for="alan">Alan</label></td>
                                    <td>
                                        <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" name="alan" value=""/>
                                    </td>
                                </tr>
                                <!--end::Row-->

                                <!--begin::Row-->
                                <tr>
                                    <td><label class="form-label fs-base fw-bolder" for="kullanici">Kullanıcı</label></td>
                                    <td>
                                        <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" name="kullanici" value=""/>
                                    </td>
                                </tr>
                                <!--end::Row-->
                                
                                <!--begin::Row-->
                                <tr>
                                    <td></td>
                                    <td>
                                        <div class="row mt-5">
                                            <div class="col-md-3">
                                                <div class="d-flex align-items-center">
                                                    <button class="w-100px h-100px pw-bg-primary-200 border-0 text-primary fs-3 rounded-circle">E</button>
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="fs-7 text-gray-500">
                                                        <p>Kullanıcı Adı:</p>
                                                        <p>Elektronik Posta:</p>
                                                        <p>Ünvanı:</p>
                                                    </div>
                                                    <div class="fs-7">
                                                        <p>Ezgi Çelik</p>
                                                        <p>ecelik@paperwork.com.tr</p>
                                                        <p>Test Uzmanı</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <!--end::Row-->
                            </tbody>
                        </table>
                    </div>
                    <!--end::Table-->
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light fs-7 py-2 px-3" data-bs-dismiss="modal">Vazgeç</button>
                <button type="button" class="btn btn-primary fs-7 py-2 px-5">Ekle</button>
            </div>
        </div>
    </div>
</div>
<!-- end::Modal -->

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/foot.php'; ?>