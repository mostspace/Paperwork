<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/header.php'; ?>

<div class="app-wrapper flex-column flex-row-fluid p-6" id="kt_app_wrapper">

  <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/sidebar.php'; ?>

  <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <div class="row">
      <div class="col col-md-11">
        <div id="kt_app_toolbar" class="app-toolbar mb-10">
          <div id="kt_app_toolbar_container" class="container-fluid d-flex flex-stack p-0">
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
              <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-9 mt-0 mb-3">
                <!-- ... breadcrumb items ... -->
              </ul>
              <h1 class="page-heading d-flex text-dark fw-bold fs-4 flex-column justify-content-center my-0">
                Araştırma Merkezi Arşiv
              </h1>
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col-4 p-0">
            <!-- ... Search wrapper ... -->
            <span class="pw-text-primary fw-bolder d-block mb-2" style="font-size:14px;">Araştırma Merkezi Arşiv</span>
            <!--begin::Search wrapper-->
            <div id="kt_docs_search_handler_basic" class="w-100 mb-3" data-kt-search-keypress="true"
              data-kt-search-min-length="2" data-kt-search-enter="true" data-kt-search-layout="inline">

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
                <input type="text" class="form-control pw-input-stroke py-2 ps-9 pe-2 fs-8" name="search" value=""
                  placeholder="Ara" data-kt-search-element="input" />
                <!--end::Input-->

                <!--begin::Spinner-->
                <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5"
                  data-kt-search-element="spinner">
                  <span class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
                </span>
                <!--end::Spinner-->

                <!--begin::Reset-->
                <span
                  class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none"
                  data-kt-search-element="clear">

                  <!--begin::Svg Icon | path: cross-->
                </span>
                <!--end::Reset-->
              </form>
              <!--end::Form-->
            </div>
            <!--end::Search wrapper-->
            <!--begin::Menu-->
            <div
              class="menu menu-rounded menu-column menu-title-gray-700 menu-icon-gray-400 menu-arrow-gray-400 menu-bullet-gray-400 menu-arrow-gray-400 menu-state-bg fw-semibold"
              data-kt-menu="true" id="pw-seda-menu">

              <!--begin::Menu item-->
              <div class="menu-item menu-sub-indention menu-accordion" data-kt-menu-trigger="click">
                <!--begin::Menu link-->
                <a href="#" class="menu-link ps-0 py-3">
                  <div class="d-flex align-items-center">
                    <span class="menu-arrow"></span>
                    <span class="menu-icon">
                      <i class="fa-solid fa-layer-group fs-7 me-1"></i>
                    </span>
                    <span class="fs-8 fw-bold mb-0 pw-text-gray-800 menu-title">
                      Ayrımlama
                    </span>
                  </div>
                  <small class="pw-text-gray-800 fs-8 fw-bold ms-auto">2</small>
                </a>
                <!--end::Menu link-->

                <!--begin::Menu sub-->
                <div class="menu-sub menu-sub-accordion pt-3">
                  <!--begin::Menu item-->
                  <div class="menu-item">
                    <a href="#" class="menu-link py-3">
                      <div class="d-flex align-items-center">
                        <span class="menu-icon">
                          <i class="fa-solid fa-file fs-7 me-1"></i>
                        </span>
                        <span class="fs-8 fw-bold mb-0 pw-text-gray-800 menu-title">
                          Birinci Çeyrek
                        </span>
                      </div>
                      <small class="pw-text-gray-800 fs-9 fw-medium ms-auto">6 Sayfa</small>
                    </a>
                  </div>
                  <!--end::Menu item-->

                  <!--begin::Menu item-->
                  <div class="menu-item">
                    <a href="#" class="menu-link py-3">
                      <div class="d-flex align-items-center">
                        <span class="menu-icon">
                          <i class="fa-solid fa-file fs-7 me-1"></i>
                        </span>
                        <span class="fs-8 fw-bold mb-0 pw-text-gray-800 menu-title">
                          İkinci Çeyrek
                        </span>
                      </div>
                      <small class="pw-text-gray-800 fs-9 fw-medium ms-auto">3 Sayfa</small>
                    </a>
                  </div>
                  <!--end::Menu item-->
                </div>
                <!--end::Menu sub-->
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item menu-sub-indention menu-accordion" data-kt-menu-trigger="click">
                <!--begin::Menu link-->
                <a href="#" class="menu-link ps-0 py-3">
                  <div class="d-flex align-items-center">
                    <span class="menu-arrow"></span>
                    <span class="menu-icon">
                      <i class="fa-solid fa-shapes fs-7 me-1"></i>
                    </span>
                    <span class="fs-8 fw-bold mb-0 pw-text-gray-800 menu-title">
                      Paylaşılan Değerler
                    </span>
                  </div>
                  <small class="pw-text-gray-800 fs-8 fw-bold ms-auto">1</small>
                </a>
                <!--end::Menu link-->

                <!--begin::Menu sub-->
                <div class="menu-sub menu-sub-accordion pt-3">
                  <!--begin::Menu item-->
                  <div class="menu-item">
                    <a href="#" class="menu-link py-3">
                      <div class="d-flex align-items-center">
                        <span class="menu-icon">
                          <i class="fa-solid fa-circle fs-7 me-1"></i>
                        </span>
                        <span class="fs-8 fw-bold mb-0 pw-text-gray-800 menu-title">
                          Değer-1
                        </span>
                      </div>
                      <small class="pw-text-gray-800 fs-8 fw-bold ms-auto"></small>
                    </a>
                  </div>
                  <!--end::Menu item-->
                </div>
                <!--end::Menu sub-->
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item menu-sub-indention menu-accordion" data-kt-menu-trigger="click">
                <!--begin::Menu link-->
                <a href="#" class="menu-link ps-0 py-3">
                  <div class="d-flex align-items-center">
                    <span class="menu-arrow"></span>
                    <span class="menu-icon">
                      <i class="fa-solid fa-circle fs-7 me-1"></i>
                    </span>
                    <span class="fs-8 fw-bold mb-0 pw-text-gray-800 menu-title">
                      Dizin
                    </span>
                  </div>
                  <small class="pw-text-gray-800 fs-8 fw-bold ms-auto">2</small>
                </a>
                <!--end::Menu link-->

                <!--begin::Menu sub-->
                <div class="menu-sub menu-sub-accordion pt-3">
                  <!--begin::Menu item-->
                  <div class="menu-item menu-accordion" data-kt-menu-trigger="click">
                    <!--begin::Menu link-->
                    <a href="#" class="menu-link ps-0 py-3">
                      <div class="d-flex align-items-center">
                        <span class="menu-arrow"></span>
                        <span class="menu-icon">
                          <i class="fa-solid fa-folder-open fs-7 me-1"></i>
                        </span>
                        <span class="fs-8 fw-bold mb-0 pw-text-gray-800 menu-title">
                          Birinci Çeyrek ( Klasör )
                        </span>
                      </div>
                      <small class="pw-text-gray-800 fs-8 fw-bold ms-auto"></small>
                    </a>
                    <!--end::Menu link-->

                    <!--begin::Menu sub-->
                    <div class="menu-sub menu-sub-accordion pt-3">
                      <!--begin::Menu item-->
                      <div class="menu-item menu-accordion" data-kt-menu-trigger="click">
                        <!--begin::Menu link-->
                        <a href="#" class="menu-link ps-0 py-3">
                          <div class="d-flex align-items-center">
                            <span class="menu-arrow"></span>
                            <span class="menu-icon">
                              <i class="fa-solid fa-circle fs-7 me-1"></i>
                            </span>
                            <span class="fs-8 fw-bold mb-0 pw-text-gray-800 menu-title">
                              Aktif Kullanıcı: Tam
                            </span>
                          </div>
                          <small class="pw-text-gray-800 fs-8 fw-bold ms-auto"></small>
                        </a>
                        <!--end::Menu link-->

                        <!--begin::Menu sub-->
                        <div class="menu-sub menu-sub-accordion pt-3">
                          <!--begin::Menu item-->
                          <div class="menu-item">
                            <a href="#" class="menu-link ps-0 py-3">
                              <div class="d-flex align-items-center">
                                <span class="menu-icon">
                                  <i class="fa-solid fa-circle fs-7 me-1"></i>
                                </span>
                                <span class="fs-8 fw-bold mb-0 pw-text-gray-800 menu-title">
                                  Birinci Çeyrek
                                </span>
                              </div>
                              <small class="pw-text-gray-800 fs-8 fw-bold ms-auto"></small>
                            </a>
                          </div>
                          <!--end::Menu item-->
                        </div>
                        <!--end::Menu sub-->

                        <!--begin::Menu sub-->
                        <div class="menu-sub menu-sub-accordion pt-3">
                          <!--begin::Menu item-->
                          <div class="menu-item">
                            <a href="#" class="menu-link ps-0 py-3">
                              <div class="d-flex align-items-center">
                                <span class="menu-icon">
                                  <i class="fa-solid fa-circle fs-7 me-1"></i>
                                </span>
                                <span class="fs-8 fw-bold mb-0 pw-text-gray-800 menu-title">
                                  Yedinci Çeyrek
                                </span>
                              </div>
                              <small class="pw-text-gray-800 fs-8 fw-bold ms-auto"></small>
                            </a>
                          </div>
                          <!--end::Menu item-->
                        </div>
                        <!--end::Menu sub-->
                      </div>
                      <!--end::Menu item-->

                      <!--begin::Menu item-->
                      <div class="menu-item">
                        <a href="#" class="menu-link ps-0 py-3">
                          <div class="d-flex align-items-center">
                            <span class="menu-icon">
                              <i class="fa-solid fa-file fs-7 me-1"></i>
                            </span>
                            <span class="fs-8 fw-bold mb-0 pw-text-gray-800 menu-title">
                              İkinci Çeyrek
                            </span>
                          </div>
                          <small class="pw-text-gray-800 fs-8 fw-bold ms-auto"></small>
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
          <div class="col-8">
            <!--begin::otomatik-ayrimlama-->
          <form class="d-flex flex-column gap-13 border-start d-none">
                  <div>
                    <!--begin::Table-->
                    <h2 class="fw-bold pw-text-dark fs-5 pb-6 border-bottom ps-10 ms-2">Otomatik Ayrımlama</h2>
                    <div class="table-responsive overflow-x-auto overflow-lg-hidden ps-10">

                      <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fw-bold fs-7">
                        <tbody>
                          <!--begin::Row-->
                          <tr>
                            <td><label for="pw_ayrimlama">Ayrımlama Türü</label></td>
                            <td>
                              <div class="input-group mb-5">
                                <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" id="pw_ayrimlama"
                                  name="pw_ayrimlama" required aria-label="Username" aria-describedby="basic-addon1" />
                                <span class="input-group-text" id="basic-addon1">
                                  <i class="fa-solid fa-gear-complex"></i>
                                </span>
                              </div>
                            </td>
                          </tr>
                          <!--end::Row-->

                          <!--begin::Row-->
                          <tr>
                            <td></td>
                            <td>
                            <div class="form-check form-switch form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="" id="pw_empty"
                                  name="pw_empty" />
                              </div>
                            </td>
                          </tr>
                          <!--end::Row-->

                          <!--begin::Row-->
                          <tr>
                            <td><label for="pw_artan-sayfalar">Artan Sayfalar</label></td>
                            <td>
                            <div class="input-group mb-5">
                                <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" id="pw_artan-sayfalar"
                                  name="pw_artan-sayfalar" required aria-label="Username" aria-describedby="basic-addon1" />
                                <span class="input-group-text" id="basic-addon1">
                                  <i class="fa-solid fa-gear-complex"></i>
                                </span>
                              </div>
                            </td>
                          </tr>
                          <!--end::Row-->

                          <!--begin::Row-->
                          <tr>
                            <td><label for="pw_sayfa_sayisi_kontrol">Sayfa Sayısı Kontrolü Yap</label></td>
                            <td>
                            <div class="form-check form-switch form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="" id="pw_sayfa_sayisi_kontrol"
                                  name="pw_sayfa_sayisi_kontrol" />
                              </div>
                            </td>
                          </tr>
                          <!--end::Row-->
                        </tbody>
                      </table>
                    </div>
                    <!--end::Table-->
                    <div class="w-100 d-flex justify-content-end">
                      <button type="button" class="btn pw-bg-success-500 text-white fs-8 py-3 px-6 mw-sm-125px w-100">
                        Uygula
                      </button>
                    </div>
                  </div>
                  <!--begin::Form footer-->
                  <div
                    class="d-flex flex-column flex-sm-row align-items-center justify-content-end gap-5 border-top ms-2 pw-border-stroke py-10">
                    <div class="d-flex align-items-center  gap-3 w-100 w-sm-auto">
                      <button type="reset" class="btn btn-active-light fs-8 py-3 px-6 w-100">
                        Vazgeç
                      </button>
                      <button type="submit" class="btn btn-primary fs-8 py-3 px-6 w-100">
                        Kaydet
                      </button>
                    </div>
                  </div>
                  <!--end::Form footer-->
                </form>
                <!--end::otomatik-ayrimlama-->

                <!--begin::Profil Detayı-->
                <form class="d-flex flex-column gap-13 border-start">
                  <div>
                    <!--begin::Table-->
                    <h2 class="fw-bold pw-text-dark fs-5 pb-6 border-bottom ps-10 ms-2">Profil Detayı</h2>
                    <div class="table-responsive overflow-x-auto overflow-lg-hidden ps-10">

                      <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fw-bold fs-7">
                        <tbody>
                          <!--begin::Row-->
                          <tr>
                            <td><label for="pw_islem_adi">İşlem Adı</label></td>
                            <td>
                              <input type="text" class="form-control form-control-solid py-3 px-4 fs-8"
                                id="pw_islem_adi" name="pw_islem_adi" required />
                            </td>
                          </tr>
                          <!--end::Row-->

                          <!--begin::Row-->
                          <tr>
                            <td><label for="pw_kaynak">Kaynak</label></td>
                            <td>
                              <div class="input-group mb-5">
                                <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" id="pw_kaynak"
                                  name="pw_kaynak" required aria-label="Username" aria-describedby="basic-addon1" />
                                <span class="input-group-text" id="basic-addon1">
                                  <i class="fa-solid fa-gear-complex"></i>
                                </span>
                              </div>
                            </td>
                          </tr>
                          <!--end::Row-->

                          <!--begin::Row-->
                          <tr>
                            <td><label for="pw_kabinet_yolu">Kabinet Yolu</label></td>
                            <td>
                              <div class="d-flex gap-4 align-items-center">
                                <input type="text" class="form-control form-control-solid py-3 px-4 fs-8 flex-root"
                                  id="pw_kabinet_yolu" name="pw_kabinet_yolu" required />

                                <a data-bs-toggle="modal" data-bs-target="#klasor_yolu"
                                  class="fs-8 fw-medium text-decoration-underline flex-1"><i
                                    class="fa-solid fa-folder pw-text-primary me-2"></i>Klasör Yolu Seç</a>
                              </div>
                            </td>
                          </tr>
                          <!--end::Row-->

                          <!--begin::Row-->
                          <tr>
                            <td><label for="pw_yetki_servisi">Yetki Seti</label></td>
                            <td>
                              <input type="text" class="form-control form-control-solid py-3 px-4 fs-8"
                                id="pw_yetki_servisi" name="pw_yetki_servisi" required />
                            </td>
                          </tr>
                          <!--end::Row-->

                          <!--begin::Row-->
                          <tr>
                            <td><label for="pw_dosya_karti_adi">Dosya Kartı Adı</label></td>
                            <td>
                              <input type="text" class="form-control form-control-solid py-3 px-4 fs-8"
                                id="pw_dosya_karti_adi" name="pw_dosya_karti_adi" required />
                            </td>
                          </tr>
                          <!--end::Row-->

                          <!--begin::Row-->
                          <tr>
                            <td><label for="pw_arama_adi">Arama Adı</label></td>
                            <td>
                              <input type="text" class="form-control form-control-solid py-3 px-4 fs-8"
                                id="pw_arama_adi" name="pw_arama_adi" required />
                            </td>
                          </tr>
                          <!--end::Row-->

                          <!--begin::Row-->
                          <tr>
                            <td><label for="pw_aktarim-dosya-islemi">Aktarım Sonrası Dosya İşlemi</label></td>
                            <td>
                              <div class="input-group mb-5">
                                <input type="text" class="form-control form-control-solid py-3 px-4 fs-8"
                                  id="pw_aktarim-dosya-islemi" name="pw_aktarim-dosya-islemi" required
                                  aria-describedby="basic-addon2" />
                                <span class="input-group-text" id="basic-addon2">
                                  <i class="fa-solid fa-gear-complex"></i>
                                </span>
                              </div>
                            </td>
                          </tr>
                          <!--end::Row-->
                          <!--begin::Row-->
                          <tr>
                            <td><label for="pw_kayit_sonrasi_uayari">Kayıt Sonrası Uyarı Ver</label></td>
                            <td>
                              <div class="form-check form-switch form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="" id="pw_kayit_sonrasi_uayari"
                                  name="pw_kayit_sonrasi_uayari" />
                              </div>
                            </td>
                          </tr>
                          <!--end::Row-->
                        </tbody>
                      </table>
                    </div>
                    <!--end::Table-->
                    <div class="w-100 d-flex justify-content-end">
                      <button type="button" class="btn pw-bg-success-500 text-white fs-8 py-3 px-6 mw-sm-125px w-100">
                        Uygula
                      </button>
                    </div>
                  </div>
                  <!--begin::Form footer-->
                  <div
                    class="d-flex flex-column flex-sm-row align-items-center justify-content-end gap-5 border-top ms-2 pw-border-stroke py-10">
                    <div class="d-flex align-items-center  gap-3 w-100 w-sm-auto">
                      <button type="reset" class="btn btn-active-light fs-8 py-3 px-6 w-100">
                        Vazgeç
                      </button>
                      <button type="submit" class="btn btn-primary fs-8 py-3 px-6 w-100">
                        Kaydet
                      </button>
                    </div>
                  </div>
                  <!--end::Form footer-->
                </form>
              <!--end::Profil Detayı-->
              
           
          </div>
        </div>
      </div>

    </div>
  </div>
  <!--begin::Modal-->
  <div class="modal fade" tabindex="-1" id="klasor_yolu">
    <div class="modal-dialog modal-dialog-centered modal-lg mw-375px">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title">Klasör Yolu</h3>

          <!--begin::Close-->
          <div class="btn btn-icon btn-sm btn-active-light-primary ms-2 w-35px h-35px" data-bs-dismiss="modal"
            aria-label="Close">
            <i class="fa-solid fa-xmark fs-6"></i>
          </div>
          <!--end::Close-->
        </div>

        <div class="modal-body">
          <div class="d-flex flex-column">
            <!-- ... Search wrapper ... -->
            <!--begin::Search wrapper-->
            <div id="kt_docs_search_handler_basic" class="w-100 mb-3" data-kt-search-keypress="true"
              data-kt-search-min-length="2" data-kt-search-enter="true" data-kt-search-layout="inline">

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
                <input type="text" class="form-control pw-input-stroke py-2 ps-9 pe-2 fs-8" name="search" value=""
                  placeholder="Ara" data-kt-search-element="input" />
                <!--end::Input-->

                <!--begin::Spinner-->
                <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5"
                  data-kt-search-element="spinner">
                  <span class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
                </span>
                <!--end::Spinner-->

                <!--begin::Reset-->
                <span
                  class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none"
                  data-kt-search-element="clear">

                  <!--begin::Svg Icon | path: cross-->
                </span>
                <!--end::Reset-->
              </form>
              <!--end::Form-->
            </div>
            <!--end::Search wrapper-->
            <!--begin::Test tablosu-->
            <!--begin::Accordion-->
            <div class="accordion accordion-icon-toggle pw-seda-accordion" id="pw-seda-accordion-modal">
              <!--begin::Item 1-->
              <div>
                <!--begin::Header 1-->
                <div class="accordion-header py-3 d-flex justify-content-between collapsed" data-bs-toggle="collapse"
                  data-bs-target="#pw-seda-accordion-modal_item_1">
                  <div class="d-flex align-items-center">
                    <span class="accordion-icon">
                      <i class="fa-solid fa-caret-down fs-8"></i>
                    </span>
                    <h3 class="fs-8 fw-bold mb-0 ms-2 pw-text-gray-800">
                      <i class="fa-solid fa-folder fs-7 me-1"></i>
                      Akçelik PORC
                    </h3>
                  </div>
                </div>
                <!--end::Header 1-->

                <!--begin::Body 1-->
                <div id="pw-seda-accordion-modal_item_1" class="fs-6 collapse ps-10"
                  data-bs-parent="#pw-seda-accordion-modal">
                  <ul class="nav nav-tabs ms-8 nav-line-tabs nav-line-tabs-2x fs-6 flex-column gap-3 border-0">
                    <li class="nav-item">
                      <a class="nav-link active d-flex justify-content-between m-0 border-0" data-bs-toggle="tab"
                        href="#kt_tab_pane_4">
                        <div class="d-flex align-items-center">
                          <h3 class="fs-8 fw-medium mb-0 pw-text-gray-800">
                            <i class="fa-solid fa-folder fs-7 me-1"></i>
                            Birinci Çeyrek
                          </h3>
                        </div>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link d-flex justify-content-between m-0 border-0" data-bs-toggle="tab"
                        href="#kt_tab_pane_4">
                        <div class="d-flex align-items-center">
                          <h3 class="fs-8 fw-medium mb-0 pw-text-gray-800">
                            <i class="fa-solid fa-folder fs-7 me-1"></i>
                            İkinci Çeyrek
                          </h3>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
                <!--end::Body 1-->
              </div>
              <!--end::Item 1-->
              <!--begin::Item 2-->
              <div>
                <!--begin::Header 2-->
                <div class="accordion-header py-3 d-flex justify-content-between collapsed" data-bs-toggle="collapse"
                  data-bs-target="#pw-seda-accordion-modal_item_2">
                  <div class="d-flex align-items-center">
                    <span class="accordion-icon">
                      <i class="fa-solid fa-caret-down fs-8"></i>
                    </span>
                    <h3 class="fs-8 fw-bold mb-0 ms-2 pw-text-gray-800">
                      <i class="fa-solid fa-folder fs-7 me-1"></i>
                      Akfen Form Kabineti
                    </h3>
                  </div>
                </div>
                <!--end::Header 2-->

                <!--begin::Body 2-->
                <div id="pw-seda-accordion-modal_item_2" class="fs-6 collapse ps-10"
                  data-bs-parent="#pw-seda-accordion-modal">
                  <ul class="nav nav-tabs ms-8 nav-line-tabs nav-line-tabs-2x fs-6 flex-column gap-3 border-0">
                    <li class="nav-item">
                      <a class="nav-link active d-flex justify-content-between m-0 border-0" data-bs-toggle="tab"
                        href="#kt_tab_pane_4">
                        <div class="d-flex align-items-center">
                          <h3 class="fs-8 fw-medium mb-0 pw-text-gray-800">
                            <i class="fa-solid fa-folder fs-7 me-1"></i>
                            Birinci Çeyrek
                          </h3>
                        </div>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link d-flex justify-content-between m-0 border-0" data-bs-toggle="tab"
                        href="#kt_tab_pane_4">
                        <div class="d-flex align-items-center">
                          <h3 class="fs-8 fw-medium mb-0 pw-text-gray-800">
                            <i class="fa-solid fa-folder fs-7 me-1"></i>
                            İkinci Çeyrek
                          </h3>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
                <!--end::Body 2-->
              </div>
              <!--end::Item 2-->
              <!--begin::Item 2-->
              <div>
                <!--begin::Header 2-->
                <div class="accordion-header py-3 d-flex justify-content-between collapsed" data-bs-toggle="collapse"
                  data-bs-target="#pw-seda-accordion-modal_item_3">
                  <div class="d-flex align-items-center">
                    <span class="accordion-icon">
                      <i class="fa-solid fa-caret-down fs-8"></i>
                    </span>
                    <h3 class="fs-8 fw-bold mb-0 ms-2 pw-text-gray-800">
                      <i class="fa-solid fa-folder fs-7 me-1"></i>
                      Akfen Form Kabineti
                    </h3>
                  </div>
                </div>
                <!--end::Header 2-->

                <!--begin::Body 2-->
                <div id="pw-seda-accordion-modal_item_3" class="fs-6 collapse ps-10"
                  data-bs-parent="#pw-seda-accordion-modal">
                  <ul class="nav nav-tabs ms-8 nav-line-tabs nav-line-tabs-2x fs-6 flex-column gap-3 border-0">
                    <li class="nav-item">
                      <a class="nav-link active d-flex justify-content-between m-0 border-0" data-bs-toggle="tab"
                        href="#kt_tab_pane_4">
                        <div class="d-flex align-items-center">
                          <h3 class="fs-8 fw-medium mb-0 pw-text-gray-800">
                            <i class="fa-solid fa-folder fs-7 me-1"></i>
                            Birinci Çeyrek
                          </h3>
                        </div>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link d-flex justify-content-between m-0 border-0" data-bs-toggle="tab"
                        href="#kt_tab_pane_4">
                        <div class="d-flex align-items-center">
                          <h3 class="fs-8 fw-medium mb-0 pw-text-gray-800">
                            <i class="fa-solid fa-folder fs-7 me-1"></i>
                            İkinci Çeyrek
                          </h3>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
                <!--end::Body 2-->
              </div>
              <!--end::Item 2-->


            </div>
            <!--end::Accordion-->
            <!--end::Test tablosu-->
          </div>
        </div>

        <div class="modal-footer border-0">
          <button type="button" class="btn btn-active-light pw-btn-text-neutral-500 py-2 px-4 me-2 fs-8"
            data-bs-dismiss="modal">
            Vazgeç
          </button>
          <button class="btn btn-primary py-2 px-4 fs-8">
            Çalıştır
          </button>
        </div>
      </div>
    </div>
  </div>
  <!--begin::Modal-->




  <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/footer.php'; ?>
</div>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/foot.php'; ?>