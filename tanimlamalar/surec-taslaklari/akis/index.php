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
                  <a href="/sistem-raporlari/" class="text-muted text-hover-primary">Tanımlamalar</a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                  <span class="text-muted">/</span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">
                  <a href="/tanimlamalar" class="text-muted text-hover-primary">Tanımlamalar</a>
                </li>
                <!--end::Item-->

                <!--begin::Item-->
                <li class="breadcrumb-item">
                  <span class="text-muted">/</span>
                </li>
                <!--end::Item-->

                <!--begin::Item-->
                <li class="breadcrumb-item">
                  <span class="text-muted">Yeni Proje Ekle</span>
                </li>
                <!--end::Item-->
              </ul>
              <!--end::Breadcrumb-->
              <!--begin::Title-->
              <h1 class="page-heading d-flex text-dark fw-bold fs-4 my-0 gap-2 align-items-center">
                <span><i class="fa-solid fa-angle-left fs-6 text-dark"></i></span> Sinerji
              </h1>
              <!--end::Title-->
            </div>
            <!--end::Page title-->

          </div>
          <!--end::Toolbar container-->
        </div>
        <!--end::Toolbar-->

        <!--begin::Actionbar-->
        <div class="d-flex align-items-center gap-5 border-top border-bottom pw-border-neutral-200 px-6 py-2 my-4">
          <a href="tanimlamalar/surec-taslaklari/tip/" class="btn p-0">
            <span class="btn p-0 fs-9 fs-semibold d-inline-flex align-items-center gap-1">
              <div class="w-25px h-25px rounded-0.20rem d-inline-flex align-items-center justify-content-center">
                <i class="fa-solid fa-copy text-primary"></i>
              </div>
              <span class="pw-text-black">Kopyala</span>
            </span>
          </a>
          <a href="tanimlamalar/surec-taslaklari/#/" class="btn p-0">
            <span class="btn p-0 fs-9 fs-semibold d-inline-flex align-items-center gap-1">
              <div class="w-25px h-25px rounded-0.20rem d-inline-flex align-items-center justify-content-center">
                <i class="fa-solid fa-function"></i>
              </div>
              <span class="pw-text-black">Sihirbaz</span>
            </span>
          </a>
          <a href="tanimlamalar/surec-taslaklari/#/" class="btn p-0">
            <span class="btn p-0 fs-9 fs-semibold d-inline-flex align-items-center gap-1">
              <div class="w-25px h-25px rounded-0.20rem d-inline-flex align-items-center justify-content-center">
                <i class="fa-solid fa-trash-can"></i>
              </div>
              <span class="pw-text-black">Sil</span>
            </span>
          </a>
        </div>
        <!--end::Actionbar-->

        <!--begin::Content -->
        <div class="row mb-20">
          <!--begin::Menu col-->
          <div class="col-12 col-lg mw-lg-300px pb-5 pe-lg-4 border-lg-bottom-0 border-lg-end pw-border-stroke mh-600px scroll">
            <!--begin::Search wrapper-->
            <div id="kt_docs_search_handler_basic" class="w-100 mw-300px mb-3" data-kt-search-keypress="true"
              data-kt-search-min-length="2" data-kt-search-enter="true" data-kt-search-layout="inline">

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
                <input type="text" class="form-control pw-input-stroke py-2 ps-9 pe-2 fs-8" name="search" value=""
                  placeholder="Ara" data-kt-search-element="input">
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
            <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/tanimlamalar/surec-taslaklari/globals/aside_menu.php'; ?>
            <!--end::Menu-->

          </div>
          <!--end::Menu col-->

          <!--begin::Content col-->
          <div class="col-12 col-lg-10 pt-5 pt-lg-0 ps-lg-5">
            <!--begin::Form wrapper-->
            <div class="col-12 col-lg-10">
              <!--begin::Table tabs-->
              <div class="nav nav-tabs nav-line-tabs fs-6" role="tablist">
                <!--begin::Tab item-->
                <li class="nav-item" role="presentation">
                  <a class="nav-link mx-0 py-3 px-10 fs-base rounded-0 fw-medium" data-bs-toggle="tab"
                    href="#pw_tab_pane_proje" aria-selected="true" role="tab">Proje</a>
                </li>
                <!--end::Tab item-->
                <!--begin::Tab item-->
                <li class="nav-item" role="presentation">
                  <a class="nav-link mx-0 py-3 px-10 fs-base rounded-0 fw-medium" data-bs-toggle="tab"
                    href="#pw_tab_pane_tip" aria-selected="true" role="tab">Tip</a>
                </li>
                <!--end::Tab item-->
                <!--begin::Tab item-->
                <li class="nav-item" role="presentation">
                  <a class="nav-link mx-0 py-3 px-10 fs-base rounded-0 fw-medium" data-bs-toggle="tab"
                    href="#pw_tab_pane_form" aria-selected="true" role="tab">Form</a>
                </li>
                <!--end::Tab item-->
                <!--begin::Tab item-->
                <li class="nav-item" role="presentation">
                  <a class="nav-link mx-0 py-3 px-10 fs-base rounded-0 fw-medium active" data-bs-toggle="tab"
                    href="#pw_tab_pane_akis" aria-selected="true" role="tab">Akış</a>
                </li>
                <!--end::Tab item-->
              </div>
              <!--end::Table tabs-->
              <!--begin::Tab contents-->
              <div class="tab-content pw-dashboard-tab-content mt-6" id="tableTabContents">
                <!--begin::Form-->
                <div class="tab-content" id="pane_proje">
                  <div class="tab-pane fade" id="pw_tab_pane_proje" role="tabpanel">
                    <!--begin::Tip card-->
                    <div class="rounded-3 pw-border-stroke px-6 py-5">
                      <h2 class="fs-4 mb-10">Genel</h2>
                      <!--begin::Tip form contents-->
                      <div class="tab-content pw-dashboard-tab-content mt-6" id="tipFormContents">
                        <!--begin::Genel content-->
                        <div class="tab-pane fade active show" id="pw_tab_pane_proje" role="tabpanel">
                          <!--begin::Form-->
                          <form class="d-flex flex-column gap-13">
                            <div class="col col-lg-9">
                              <!--begin::Table-->
                              <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                                <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fs-7">
                                  <tbody>
                                    <!--begin::Row-->
                                    <tr>
                                      <td><label class="form-label fs-base fw-bolder" for="pw_proje_adi">Proje
                                          Adı</label></td>
                                      <td>
                                        <input type="text" class="form-control form-control-solid py-3 px-4 fs-8"
                                          id="pw_proje_adi" name="pw_proje_adi" required />
                                      </td>
                                    </tr>
                                    <!--end::Row-->

                                    <!--begin::Row-->
                                    <tr>
                                      <td><label class="form-label fs-base fw-bolder" for="pw_yetki_seti">Tasarım Yetki
                                          Seti</label></td>
                                      <td>
                                        <input type="text" class="form-control form-control-solid py-3 px-4 fs-8"
                                          id="pw_yetki_seti" name="pw_yetki_seti" required />
                                      </td>
                                    </tr>
                                    <!--end::Row-->

                                    <!--begin::Row-->
                                    <tr>
                                      <td><label class="form-label fs-base fw-bolder" for="pw_aciklama">Açıklama</label>
                                      </td>
                                      <td>
                                        <textarea class="form-control form-control-solid" name="pw_aciklama"
                                          id="pw_aciklama" cols="30" rows="4"></textarea>
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
                        <!--end::Genel content-->

                        <!--begin::Detay content-->
                        <div class="tab-pane fade" id="pw_tab_pane_tip_detay" role="tabpanel">

                          <!--begin::Accordion-->
                          <div class="accordion accordion-icon-toggle" id="pw_detay_accordion">
                            <!--begin::Item-->
                            <div class="mb-5">
                              <!--begin::Header-->
                              <div class="accordion-header py-3 d-flex" data-bs-toggle="collapse"
                                data-bs-target="#pw_detay_accordion_item_1">
                                <span class="accordion-icon">
                                  <i class="fa-sharp fa-solid fa-triangle fs-6" style="rotate:90deg"></i>
                                </span>
                                <h3 class="d-flex align-items-center gap-2 fs-4 fw-semibold mb-0 ms-4">
                                  <i class="fa-regular fa-window-restore pw-text-primary-500 fs-3"></i>
                                  Süreç 2
                                </h3>
                              </div>
                              <!--end::Header-->

                              <!--begin::Body-->
                              <div id="pw_detay_accordion_item_1" class="fs-6 collapse show ps-10"
                                data-bs-parent="#pw_detay_accordion">
                                <!--begin::Form-->
                                <form>
                                  <!--begin::Body wrapper-->
                                  <div class="d-flex flex-wrap flex-lg-nowrap gap-3">
                                    <!--begin::Col-->
                                    <div class="col-12 col-lg-5 border pw-border-stroke rounded-3">
                                      <!--begin::Item-->
                                      <div
                                        class="d-flex align-items-center justify-content-between gap-4 px-3 py-4 border-bottom pw-border-stroke">
                                        <!--begin::Item name-->
                                        <div class="d-flex align-items-center gap-2">
                                          <i class="fa-solid fa-file-pen pw-text-primary-500 fs-4"></i>
                                          <span class="pw-text-neutral-700 fw-medium fs-7">Kullanıcı Adı</span>
                                        </div>
                                        <!--end::Item name-->

                                        <!--begin::Item info-->
                                        <div class="d-flex align-items-center justify-content-between gap-3 min-w-70px">
                                          <span class="text-black fs-9 fw-medium">Yazı (20)</span>
                                          <button class="btn p-0"><i
                                              class="fa-solid fa-circle-x pw-text-primary-500 fs-6"></i></button>
                                        </div>
                                        <!--end::Item info-->
                                      </div>
                                      <!--end::Item-->

                                      <!--begin::Item-->
                                      <div
                                        class="d-flex align-items-center justify-content-between gap-4 px-3 py-4 border-bottom pw-border-stroke">
                                        <!--begin::Item name-->
                                        <div class="d-flex align-items-center gap-2">
                                          <i class="fa-solid fa-input-numeric pw-text-primary-500 fs-4"></i>
                                          <span class="pw-text-neutral-700 fw-medium fs-7">Kullanıcı Yaşı</span>
                                        </div>
                                        <!--end::Item name-->

                                        <!--begin::Item info-->
                                        <div class="d-flex align-items-center justify-content-between gap-3 min-w-70px">
                                          <span class="text-black fs-9 fw-medium">Sayı</span>
                                          <button class="btn p-0"><i
                                              class="fa-solid fa-circle-x pw-text-primary-500 fs-6"></i></button>
                                        </div>
                                        <!--end::Item info-->
                                      </div>
                                      <!--end::Item-->

                                      <!--begin::Item-->
                                      <div
                                        class="d-flex align-items-center justify-content-between gap-4 px-3 py-4 border-bottom pw-border-stroke">
                                        <!--begin::Item name-->
                                        <div class="d-flex align-items-center gap-2">
                                          <i class="fa-solid fa-calendar pw-text-primary-500 fs-4"></i>
                                          <span class="pw-text-neutral-700 fw-medium fs-7">Tarihi</span>
                                        </div>
                                        <!--end::Item name-->

                                        <!--begin::Item info-->
                                        <div class="d-flex align-items-center justify-content-between gap-3 min-w-70px">
                                          <span class="text-black fs-9 fw-medium">Tarih</span>
                                          <button class="btn p-0"><i
                                              class="fa-solid fa-circle-x pw-text-primary-500 fs-6"></i></button>
                                        </div>
                                        <!--end::Item info-->
                                      </div>
                                      <!--end::Item-->

                                      <!--begin::Item-->
                                      <div
                                        class="d-flex align-items-center justify-content-between gap-4 px-3 py-4 border-bottom pw-border-stroke">
                                        <!--begin::Item name-->
                                        <div class="d-flex align-items-center gap-2">
                                          <i class="fa-solid fa-clock pw-text-primary-500 fs-4"></i>
                                          <span class="pw-text-neutral-700 fw-medium fs-7">Saati</span>
                                        </div>
                                        <!--end::Item name-->

                                        <!--begin::Item info-->
                                        <div class="d-flex align-items-center justify-content-between gap-3 min-w-70px">
                                          <span class="text-black fs-9 fw-medium">Saat</span>
                                          <button class="btn p-0"><i
                                              class="fa-solid fa-circle-x pw-text-primary-500 fs-6"></i></button>
                                        </div>
                                        <!--end::Item info-->
                                      </div>
                                      <!--end::Item-->

                                      <!--begin::Item-->
                                      <div
                                        class="d-flex align-items-center justify-content-between gap-4 px-3 py-4 border-bottom pw-border-stroke">
                                        <!--begin::Item name-->
                                        <div class="d-flex align-items-center gap-2">
                                          <i class="fa-solid fa-dollar-sign pw-text-primary-500 fs-4"></i>
                                          <span class="pw-text-neutral-700 fw-medium fs-7">KDV Tutarı</span>
                                        </div>
                                        <!--end::Item name-->

                                        <!--begin::Item info-->
                                        <div class="d-flex align-items-center justify-content-between gap-3 min-w-70px">
                                          <span class="text-black fs-9 fw-medium">Miktar</span>
                                          <button class="btn p-0"><i
                                              class="fa-solid fa-circle-x pw-text-primary-500 fs-6"></i></button>
                                        </div>
                                        <!--end::Item info-->
                                      </div>
                                      <!--end::Item-->
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-12 col-lg-7 border pw-border-stroke rounded-3 px-3 py-4">
                                      <h2 class="text-black fs-7 fw-medium">Alan Tanımı</h2>

                                      <!--begin::Table-->
                                      <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                                        <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fs-7">
                                          <tbody>
                                            <!--begin::Row-->
                                            <tr>
                                              <td><label class="form-label fs-base fw-medium"
                                                  for="pw_tip_detay_alan_adi">Alan Adı</label></td>
                                              <td>
                                                <input type="text"
                                                  class="form-control form-control-solid py-3 px-4 fs-8"
                                                  id="pw_tip_detay_alan_adi" name="pw_tip_detay_alan_adi" required />
                                              </td>
                                            </tr>
                                            <!--end::Row-->

                                            <!--begin::Row-->
                                            <tr>
                                              <td><label class="form-label fs-base fw-medium"
                                                  for="pw_tip_detay_veri_tipi">Veri Tipi</label></td>
                                              <td>
                                                <select id="pw_tip_detay_veri_tipi"
                                                  class="form-select form-select-solid fs-8 py-3 px-4"
                                                  data-control="select2" data-placeholder="Seçim Yapın">
                                                  <option value="1">Option 1</option>
                                                </select>
                                              </td>
                                            </tr>
                                            <!--end::Row-->

                                            <!--begin::Row-->
                                            <tr>
                                              <td></td>
                                              <td>
                                                <div class="form-check">
                                                  <input class="form-check-input" type="checkbox" value=""
                                                    id="pw_tip_detay_zorunlu" checked="checked" />
                                                  <label class="form-check-label pw-text-neutral-800 fs-medium"
                                                    for="pw_tip_detay_zorunlu">
                                                    Zorunlu
                                                  </label>
                                                </div>
                                              </td>
                                            </tr>
                                            <!--end::Row-->

                                            <!--begin::Row-->
                                            <tr>
                                              <td><label class="form-label fs-base fw-medium"
                                                  for="pw_tip_detay_boyut">Boyut</label></td>
                                              <td>
                                                <input type="number" class="form-control form-control-solid" value="0"
                                                  min="0" />
                                              </td>
                                            </tr>
                                            <!--end::Row-->

                                            <!--begin::Row-->
                                            <tr>
                                              <td><label class="form-label fs-base fw-medium"
                                                  for="pw_tip_detay_liste">Liste</label></td>
                                              <td>
                                                <select id="pw_tip_detay_liste"
                                                  class="form-select form-select-solid fs-8 py-3 px-4"
                                                  data-control="select2" data-placeholder="Seçim Yapın">
                                                  <option value="1">Option 1</option>
                                                </select>
                                              </td>
                                            </tr>
                                            <!--end::Row-->

                                            <!--begin::Row-->
                                            <tr>
                                              <td><label class="form-label fs-base fw-medium"
                                                  for="pw_tip_detay_anahtar_alan">Anahtar Alan</label></td>
                                              <td>
                                                <select id="pw_tip_detay_anahtar_alan"
                                                  class="form-select form-select-solid fs-8 py-3 px-4"
                                                  data-control="select2" data-placeholder="Seçim Yapın">
                                                  <option value="1">Option 1</option>
                                                </select>
                                              </td>
                                            </tr>
                                            <!--end::Row-->

                                            <!--begin::Row-->
                                            <tr>
                                              <td><label class="form-label fs-base fw-medium"
                                                  for="pw_tip_detay_goruntulenecek_alan">Görüntülenecek Alan</label>
                                              </td>
                                              <td>
                                                <select id="pw_tip_detay_goruntulenecek_alan"
                                                  class="form-select form-select-solid fs-8 py-3 px-4"
                                                  data-control="select2" data-placeholder="Seçim Yapın">
                                                  <option value="1">Option 1</option>
                                                </select>
                                              </td>
                                            </tr>
                                            <!--end::Row-->

                                            <!--begin::Row-->
                                            <tr>
                                              <td><label class="form-label fs-base fw-medium"
                                                  for="pw_tip_detay_aciklama">Açıklama</label></td>
                                              <td>
                                                <textarea id="pw_tip_detay_aciklama"
                                                  class="form-select form-select-solid fs-8 py-3 px-4" cols="30"
                                                  rows="4"></textarea>
                                              </td>
                                            </tr>
                                            <!--end::Row-->
                                          </tbody>
                                        </table>
                                      </div>
                                      <!--end::Table-->
                                    </div>
                                    <!--end::Col-->
                                  </div>
                                  <!--end::Body wrapper-->

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
                                </form>
                                <!--end::Form-->
                              </div>
                              <!--end::Body-->
                            </div>
                            <!--end::Item-->
                          </div>
                          <!--end::Accordion-->
                        </div>
                        <!--end::Detay content-->



                      </div>
                      <!--end::Tip form contents-->
                    </div>
                    <!--end::Tip card-->
                  </div>
                </div>
                <!--begin::Tip content-->
                <div class="tab-content" id="pane_tip">
                  <div class="tab-pane fade" id="pw_tab_pane_tip" role="tabpanel">
                    <!--begin::Tip card-->
                    <div class="border rounded-3 pw-border-stroke px-6 py-5">
                      <!--begin::Tip form tab-->
                      <div class="table-reponsive overflow-x-auto overflow-y-hidden">
                        <!--begin::Tabs-->
                        <div class="nav nav-tabs nav-line-tabs gap-6 fs-6 border-0 flex-nowrap w-max-content"
                          role="tablist">
                          <!--begin::Tab item-->
                          <li class="nav-item" role="presentation">
                            <a class="nav-link mx-0 fs-base rounded-0 border-0 fw-medium active" data-bs-toggle="tab"
                              href="#pw_tab_pane_tip_genel" aria-selected="true" role="tab">
                              <i class="fa-solid fa-pen pw-color-current"></i>
                              Genel
                            </a>
                          </li>
                          <!--end::Tab item-->

                          <!--begin::Tab item-->
                          <li class="nav-item" role="presentation">
                            <a class="nav-link mx-0 fs-base rounded-0 border-0 fw-medium" data-bs-toggle="tab"
                              href="#pw_tab_pane_surec_detay" role="tab">
                              <i class="fa-solid fa-eye pw-color-current"></i>
                              Detay
                            </a>
                          </li>
                          <!--end::Tab item-->

                          <!--begin::Tab item-->
                          <li class="nav-item" role="presentation">
                            <a class="nav-link mx-0 fs-base rounded-0 border-0 fw-medium" data-bs-toggle="tab"
                              href="#pw_tab_pane_surec_tip_paylasilan_kodlar" role="tab">
                              <i class="fa-solid fa-file-code pw-color-current"></i>
                              Paylaşılan Kodlar
                            </a>
                          </li>
                          <!--end::Tab item-->

                          <!--begin::Tab item-->
                          <li class="nav-item" role="presentation">
                            <a class="nav-link mx-0 fs-base rounded-0 border-0 fw-medium" data-bs-toggle="tab"
                              href="#pw_tab_pane_surec_tip_tarihce" role="tab">
                              <i class="fa-solid fa-book pw-color-current"></i>
                              Tarihçe
                            </a>
                          </li>
                          <!--end::Tab item-->
                        </div>
                        <!--end::Tabs-->
                      </div>
                      <!--end::Tip form tab-->

                      <!--begin::Tip form contents-->
                      <div class="tab-content pw-dashboard-tab-content mt-6" id="tipFormContents">
                        <!--begin::Genel content-->
                        <div class="tab-pane fade active show" id="pw_tab_pane_tip_genel" role="tabpanel">
                          <!--begin::Form-->
                          <form class="d-flex flex-column gap-13">
                            <div class="col col-lg-9">
                              <!--begin::Table-->
                              <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                                <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fs-7">
                                  <tbody>
                                    <!--begin::Row-->
                                    <tr>
                                      <td><label class="form-label fs-base fw-bolder" for="pw_tip_adi">Tip Adı</label>
                                      </td>
                                      <td>
                                        <input type="text" value="Süreç 2"
                                          class="form-control form-control-solid py-3 px-4 fs-8" id="pw_tip_adi"
                                          name="pw_tip_adi" required />
                                      </td>
                                    </tr>
                                    <!--end::Row-->

                                    <!--begin::Row-->
                                    <tr>
                                      <td><label class="form-label fs-base fw-bolder">Kullanım Yeri</label></td>
                                      <td>Akış</td>
                                    </tr>
                                    <!--end::Row-->




                                    <!--begin::Row-->
                                    <tr>
                                      <td></td>
                                      <td>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value=""
                                            id="pw_tam_metin_indeksleme" />
                                          <label class="form-check-label pw-text-neutral-800"
                                            for="pw_tam_metin_indeksleme">
                                            Tam Metin İndeksleme
                                          </label>
                                        </div>
                                      </td>
                                    </tr>
                                    <!--end::Row-->

                                    <!--begin::Row-->
                                    <tr>
                                      <td><label class="form-label fs-base fw-bolder"
                                          for="pw_genel_aciklama">Açıklama</label></td>
                                      <td>
                                        <div id="editor"></div>
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
                        <!--end::Genel content-->

                        <!--begin::Detay content-->
                        <div class="tab-pane fade" id="pw_tab_pane_surec_detay" role="tabpanel">

                          <!--begin::Accordion-->
                          <div class="accordion accordion-icon-toggle" id="pw_detay_accordion">
                            <!--begin::Item-->
                            <div class="mb-5">
                              <!--begin::Header-->
                              <div class="accordion-header py-3 d-flex" data-bs-toggle="collapse"
                                data-bs-target="#pw_detay_accordion_item_1">
                                <span class="accordion-icon">
                                  <i class="fa-sharp fa-solid fa-triangle fs-8" style="rotate:90deg"></i>
                                </span>
                                <h3 class="d-flex align-items-center gap-3 fs-8 fw-semibold mb-0 ms-4">
                                  <i class="fa-regular fa-window-restore pw-text-primary-500 fs-3"></i>
                                  Süreç 2
                                </h3>
                              </div>
                              <!--end::Header-->

                              <!--begin::Body-->
                              <div id="pw_detay_accordion_item_1" class="fs-6 collapse show ps-10"
                                data-bs-parent="#pw_detay_accordion">
                                <!--begin::Form-->
                                <form>
                                  <!--begin::Body wrapper-->
                                  <div class="d-flex flex-wrap flex-lg-nowrap gap-3">
                                    <!--begin::Col-->
                                    <div class="col-12 col-lg-5 border pw-border-stroke rounded-3">
                                      <!--begin::Item-->
                                      <div
                                        class="d-flex align-items-center justify-content-between gap-4 px-3 py-4 border-bottom pw-border-stroke">
                                        <!--begin::Item name-->
                                        <div class="d-flex align-items-center gap-2">
                                          <i class="fa-solid fa-file-pen pw-text-danger-500 fs-4"></i>
                                          <span class="pw-text-danger-500 fw-medium fs-7">Kullanıcı Adı</span>
                                        </div>
                                        <!--end::Item name-->

                                        <!--begin::Item info-->
                                        <div class="d-flex align-items-center justify-content-between gap-3 min-w-70px">
                                          <span class="pw-text-danger-500 fs-9 fw-medium">Yazı (20)</span>
                                          <button class="btn p-0">
                                            <i
                                              class="fa-solid fa-arrow-rotate-left pw-text-danger-500 fs-6"></i></button>
                                        </div>
                                        <!--end::Item info-->
                                      </div>
                                      <!--end::Item-->

                                      <!--begin::Item-->
                                      <div
                                        class="d-flex align-items-center justify-content-between gap-4 px-3 py-4 border-bottom pw-border-stroke">
                                        <!--begin::Item name-->
                                        <div class="d-flex align-items-center gap-2">
                                          <i class="fa-solid fa-file-pen pw-text-primary-500 fs-4"></i>
                                          <span class="pw-text-neutral-700 fw-medium fs-7">Kullanıcı Soyadı</span>
                                        </div>
                                        <!--end::Item name-->

                                        <!--begin::Item info-->
                                        <div class="d-flex align-items-center justify-content-between gap-3 min-w-70px">
                                          <span class="text-black fs-9 fw-medium">Yazı (20)</span>
                                          <button class="btn p-0"><i
                                              class="fa-solid fa-circle-x pw-text-primary-500 fs-6"></i></button>
                                        </div>
                                        <!--end::Item info-->
                                      </div>
                                      <!--end::Item-->

                                      <!--begin::Item-->
                                      <div
                                        class="d-flex align-items-center justify-content-between gap-4 px-3 py-4 border-bottom pw-border-stroke">
                                        <!--begin::Item name-->
                                        <div class="d-flex align-items-center gap-2">
                                          <i class="fa-solid fa-input-numeric pw-text-primary-500 fs-4"></i>
                                          <span class="pw-text-neutral-700 fw-medium fs-7">Kullanıcı Yaşı</span>
                                        </div>
                                        <!--end::Item name-->


                                        <!--begin::Item info-->
                                        <div class="d-flex align-items-center justify-content-between gap-3 min-w-70px">
                                          <span class="text-black fs-9 fw-medium">Sayı</span>
                                          <button class="btn p-0"><i
                                              class="fa-solid fa-circle-x pw-text-primary-500 fs-6"></i></button>
                                        </div>
                                        <!--end::Item info-->
                                      </div>
                                      <!--end::Item-->
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-12 col-lg-7 border pw-border-stroke rounded-3 px-3 py-4">
                                      <h2 class="text-black fs-7 fw-medium">Alan Tanımı</h2>

                                      <!--begin::Table-->
                                      <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                                        <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fs-7">
                                          <tbody>
                                            <!--begin::Row-->
                                            <tr>
                                              <td><label class="form-label fs-base fw-medium"
                                                  for="pw_tip_detay_alan_adi">Alan Adı</label></td>
                                              <td>
                                                <input type="text"
                                                  class="form-control form-control-solid py-3 px-4 fs-8"
                                                  id="pw_tip_detay_alan_adi" name="pw_tip_detay_alan_adi" required />
                                              </td>
                                            </tr>
                                            <!--end::Row-->

                                            <!--begin::Row-->
                                            <tr>
                                              <td><label class="form-label fs-base fw-medium"
                                                  for="pw_tip_detay_veri_tipi">Veri Tipi</label></td>
                                              <td>
                                                <input type="text"
                                                  class="form-control form-control-solid py-3 px-4 fs-8"
                                                  id="pw_tip_detay_veri_tipi" name="pw_tip_detay_veri_tipi" required />
                                              </td>
                                            </tr>
                                            <!--end::Row-->

                                            <!--begin::Row-->
                                            <tr>
                                              <td><label class="form-label fs-base fw-medium">Kullanım Yeri</label></td>
                                              <td>
                                                Akış
                                              </td>
                                            </tr>
                                            <!--end::Row-->

                                            <!--begin::Row-->
                                            <tr>
                                              <td><label class="form-label fs-base fw-medium"
                                                  for="pw_tip_tasarım_yetki_seti">Tasarım Yetki Seti</label></td>
                                              <td>
                                                <input type="text" value="2 Satır"
                                                  class="form-control form-control-solid py-3 px-4 fs-8"
                                                  id="pw_tip_tasarım_yetki_seti" name="pw_tip_tasarım_yetki_seti"
                                                  required />
                                              </td>
                                            </tr>
                                            <!--end::Row-->
                                          </tbody>
                                        </table>
                                      </div>
                                      <!--end::Table-->
                                    </div>
                                    <!--end::Col-->
                                  </div>
                                  <!--end::Body wrapper-->

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
                                </form>
                                <!--end::Form-->
                              </div>
                              <!--end::Body-->
                            </div>
                            <!--end::Item-->
                          </div>
                          <!--end::Accordion-->
                        </div>
                        <!--end::Detay content-->
                      </div>
                      <!--end::Tip form contents-->
                    </div>
                    <!--end::Tip card-->

                  </div>
                </div>
                <!--end::Tip content-->

                <!--begin::Form content-->
                <div class="tab-pane fade" id="pw_tab_pane_form" role="tabpanel">
                  <!--begin::Tip card-->
                  <div class="border rounded-3 pw-border-stroke px-6 py-5">
                    <!--begin::Tip form tab-->
                    <div class="table-reponsive overflow-x-auto overflow-y-hidden">
                      <!--begin::Tabs-->
                      <div class="nav nav-tabs nav-line-tabs gap-6 fs-6 border-0 flex-nowrap w-max-content"
                        role="tablist">
                        <!--begin::Tab item-->
                        <li class="nav-item" role="presentation">
                          <a class="nav-link mx-0 fs-base rounded-0 border-0 fw-medium active" data-bs-toggle="tab"
                            href="#pw_tab_pane_form_dizayn" aria-selected="true" role="tab">
                            <i class="fa-solid fa-paintbrush-fine pw-color-current"></i>
                            Dizayn
                          </a>
                        </li>
                        <!--end::Tab item-->

                        <!--begin::Tab item-->
                        <li class="nav-item" role="presentation">
                          <a class="nav-link mx-0 fs-base rounded-0 border-0 fw-medium" data-bs-toggle="tab"
                            href="#pw_tab_pane_form_kodlar" role="tab">
                            <i class="fa-solid fa-code pw-color-current"></i>
                            Kodlar
                          </a>
                        </li>
                        <!--end::Tab item-->

                        <!--begin::Tab item-->
                        <li class="nav-item" role="presentation">
                          <a class="nav-link mx-0 fs-base rounded-0 border-0 fw-medium" data-bs-toggle="tab"
                            href="#pw_tab_pane_form_paylasilan_kodlar" role="tab">
                            <i class="fa-solid fa-file-code pw-color-current"></i>
                            Paylaşılan Kodlar
                          </a>
                        </li>
                        <!--end::Tab item-->

                        <!--begin::Tab item-->
                        <li class="nav-item" role="presentation">
                          <a class="nav-link mx-0 fs-base rounded-0 border-0 fw-medium" data-bs-toggle="tab"
                            href="#pw_tab_pane_form_tbok" role="tab">
                            <i class="fa-solid fa-file-doc pw-color-current"></i>
                            Tip Bazında Ortak Kodlar
                          </a>
                        </li>
                        <!--end::Tab item-->
                      </div>
                      <!--end::Tabs-->
                    </div>
                    <!--end::Tip form tab-->

                    <!--begin::Tip form contents-->
                    <div class="tab-content pw-dashboard-tab-content mt-6" id="tipFormContents">
                      <!--begin::Dizayn content-->
                      <div class="tab-pane fade active show" id="pw_tab_pane_form_dizayn" role="tabpanel">
                        <!--begin::Form-->
                        <form>
                          <!--begin::Form wrapper-->
                          <div class="table-responsive overflow-x-auto overflow-y-hidden">
                            <!--begin::Row-->
                            <div class="d-flex mw-1000px mw-lg-100 px-1 gap-4">
                              <!--begin::Col-->
                              <div class="mw-225px w-100 pw-bg-neutral-50 border rounded-1 pw-border-stroke">
                                <!--begin::Action buttons-->
                                <div
                                  class="d-flex align-items-center justify-content-center gap-3 p-3 border-bottom pw-border-stroke">
                                  <!--begin::Button-->
                                  <button
                                    class="btn btn-icon btn-light-primary btn-color-primary btn-active-primary btn-active-color-white border pw-border-primary-500 w-40px h-40px">
                                    <i class="fa-solid fa-folder"></i>
                                  </button>
                                  <!--end::Button-->

                                  <!--begin::Button-->
                                  <button
                                    class="btn btn-icon btn-light-primary btn-color-primary btn-active-primary btn-active-color-white border pw-border-primary-500 w-40px h-40px">
                                    <i class="fa-solid fa-gavel"></i>
                                  </button>
                                  <!--end::Button-->

                                  <!--begin::Button-->
                                  <button
                                    class="btn btn-icon btn-light-primary btn-color-primary btn-active-primary btn-active-color-white border pw-border-primary-500 w-40px h-40px">
                                    <i class="fa-solid fa-database"></i>
                                  </button>
                                  <!--end::Button-->
                                </div>
                                <!--end::Action buttons-->

                                <!--begin::Draggable elements-->
                                <div class="d-flex flex-column gap-2 py-3 px-2">
                                  <!--begin::Search wrapper-->
                                  <div id="kt_docs_search_handler_basic" class="position-relative w-100 mw-300px mb-3"
                                    data-kt-search-keypress="true" data-kt-search-min-length="2"
                                    data-kt-search-enter="true" data-kt-search-layout="inline">

                                    <!--begin::Input Form-->
                                    <form data-kt-search-element="form" class="position-relative" autocomplete="off">
                                      <!--begin::Hidden input(Added to disable form autocomplete)-->
                                      <input type="hidden">
                                      <!--end::Hidden input-->

                                      <!--begin::Icon-->
                                      <!--begin::Svg Icon | path: magnifier-->
                                      <div
                                        class="position-absolute top-50 translate-middle-y w-100 mw-20px mh-20px ms-2">
                                        <i class="fa-solid fa-magnifying-glass fs-4"></i>
                                      </div>
                                      <!--end::Icon-->

                                      <!--begin::Input-->
                                      <input type="text" class="form-control pw-input-stroke py-2 ps-9 pe-2 fs-8"
                                        name="search" value="" placeholder="Ara" data-kt-search-element="input">
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

                                  <!--begin::Elements-->
                                  <div class="accordion accordion-icon-toggle" id="pw_drag_drop">
                                    <!--begin::Item-->
                                    <div class="mb-2">
                                      <!--begin::Header-->
                                      <div
                                        class="accordion-header py-3 d-flex collapsed pw-bg-primary-300 pw-text-neutral-800 fs-7 fw-medium rounded-1 p-2"
                                        data-bs-toggle="collapse" data-bs-target="#pw_drag_drop_item_1">
                                        <h3 class="fs-4 fw-semibold mb-0 ms-4">Genel</h3>
                                      </div>
                                      <!--end::Header-->

                                      <!--begin::Body-->
                                      <div id="pw_drag_drop_item_1" class="fs-6 collapse p-0 mt-2 collapse"
                                        data-bs-parent="#pw_drag_drop">
                                        <!--begin::Element wrapper-->
                                        <div class="d-flex flex-column gap-1">
                                          <!--begin::Elemet-->
                                          <button
                                            class="btn px-3 py-2 border border-dashed pw-border-neutral-500 pw-text-neutral-800 fs-8 fw-medium text-start">
                                            <i class="fa-solid fa-terminal fs-7 pw-color-current"></i>
                                            Text
                                          </button>
                                          <!--end::Elemet-->

                                          <!--begin::Elemet-->
                                          <button
                                            class="btn px-3 py-2 border border-dashed pw-border-neutral-500 pw-text-neutral-800 fs-8 fw-medium text-start">
                                            <i class="fa-solid fa-font fs-7 pw-color-current"></i>
                                            Memo
                                          </button>
                                          <!--end::Elemet-->

                                          <!--begin::Elemet-->
                                          <button
                                            class="btn px-3 py-2 border border-dashed pw-border-neutral-500 pw-text-neutral-800 fs-8 fw-medium text-start">
                                            <i class="fa-solid fa-hashtag fs-7 pw-color-current"></i>
                                            Number
                                          </button>
                                          <!--end::Elemet-->

                                          <!--begin::Elemet-->
                                          <button
                                            class="btn px-3 py-2 border border-dashed pw-border-neutral-500 pw-text-neutral-800 fs-8 fw-medium text-start">
                                            <i class="fa-solid fa-hashtag fs-7 pw-color-current"></i>
                                            Real Number
                                          </button>
                                          <!--end::Elemet-->

                                          <!--begin::Elemet-->
                                          <button
                                            class="btn px-3 py-2 border border-dashed pw-border-neutral-500 pw-text-neutral-800 fs-8 fw-medium text-start">
                                            <i class="fa-solid fa-calendar fs-7 pw-color-current"></i>
                                            Date
                                          </button>
                                          <!--end::Elemet-->

                                          <!--begin::Elemet-->
                                          <button
                                            class="btn px-3 py-2 border border-dashed pw-border-neutral-500 pw-text-neutral-800 fs-8 fw-medium text-start">
                                            <i class="fa-solid fa-clock fs-7 pw-color-current"></i>
                                            Time
                                          </button>
                                          <!--end::Elemet-->

                                          <!--begin::Elemet-->
                                          <button
                                            class="btn px-3 py-2 border border-dashed pw-border-neutral-500 pw-text-neutral-800 fs-8 fw-medium text-start">
                                            <i class="fa-solid fa-calendar-clock fs-7 pw-color-current"></i>
                                            Date / Time
                                          </button>
                                          <!--end::Elemet-->

                                          <!--begin::Elemet-->
                                          <button
                                            class="btn px-3 py-2 border border-dashed pw-border-neutral-500 pw-text-neutral-800 fs-8 fw-medium text-start">
                                            <i class="fa-solid fa-dollar-sign fs-7 pw-color-current"></i>
                                            Currency
                                          </button>
                                          <!--end::Elemet-->

                                          <!--begin::Elemet-->
                                          <button
                                            class="btn px-3 py-2 border border-dashed pw-border-neutral-500 pw-text-neutral-800 fs-8 fw-medium text-start">
                                            <i class="fa-solid fa-square-check fs-7 pw-color-current"></i>
                                            Checkbox
                                          </button>
                                          <!--end::Elemet-->

                                          <!--begin::Elemet-->
                                          <button
                                            class="btn px-3 py-2 border border-dashed pw-border-neutral-500 pw-text-neutral-800 fs-8 fw-medium text-start">
                                            <i class="fa-solid fa-circle-o fs-7 pw-color-current"></i>
                                            Radio
                                          </button>
                                          <!--end::Elemet-->

                                          <!--begin::Elemet-->
                                          <button
                                            class="btn px-3 py-2 border border-dashed pw-border-neutral-500 pw-text-neutral-800 fs-8 fw-medium text-start">
                                            <i class="fa-solid fa-table-list fs-7 pw-color-current"></i>
                                            Select
                                          </button>
                                          <!--end::Elemet-->

                                          <!--begin::Elemet-->
                                          <button
                                            class="btn px-3 py-2 border border-dashed pw-border-neutral-500 pw-text-neutral-800 fs-8 fw-medium text-start">
                                            <i class="fa-solid fa-list-check fs-7 pw-color-current"></i>
                                            Data Table
                                          </button>
                                          <!--end::Elemet-->

                                          <!--begin::Elemet-->
                                          <button
                                            class="btn px-3 py-2 border border-dashed pw-border-neutral-500 pw-text-neutral-800 fs-8 fw-medium text-start">
                                            <i class="fa-solid fa-square fs-7 pw-color-current"></i>
                                            Button
                                          </button>
                                          <!--end::Elemet-->

                                          <!--begin::Elemet-->
                                          <button
                                            class="btn px-3 py-2 border border-dashed pw-border-neutral-500 pw-text-neutral-800 fs-8 fw-medium text-start">
                                            <i class="fa-brands fa-html5 fs-7 pw-color-current"></i>
                                            HTML Element
                                          </button>
                                          <!--end::Elemet-->
                                        </div>
                                        <!--end::Element wrapper-->
                                      </div>
                                      <!--end::Body-->
                                    </div>
                                    <!--end::Item-->

                                    <!--begin::Item-->
                                    <div class="mb-2">
                                      <!--begin::Header-->
                                      <div
                                        class="accordion-header py-3 d-flex collapsed pw-bg-primary-300 pw-text-neutral-800 fs-7 fw-medium rounded-1 p-2"
                                        data-bs-toggle="collapse" data-bs-target="#pw_drag_drop_item_2">
                                        <h3 class="fs-4 fw-semibold mb-0 ms-4">Entegrasyon</h3>
                                      </div>
                                      <!--end::Header-->

                                      <!--begin::Body-->
                                      <div id="pw_drag_drop_item_2" class="fs-6 collapse p-0 mt-2 collapse"
                                        data-bs-parent="#pw_drag_drop">
                                        <!--begin::Element wrapper-->
                                        <div class="d-flex flex-column gap-1">
                                          <!--begin::Elemet-->
                                          <button
                                            class="btn px-3 py-2 border border-dashed pw-border-neutral-500 pw-text-neutral-800 fs-8 fw-medium text-start">
                                            <i class="fa-solid fa-user-secret fs-7 pw-color-current"></i>
                                            SAP Konnektörü
                                          </button>
                                          <!--end::Elemet-->

                                          <!--begin::Elemet-->
                                          <button
                                            class="btn px-3 py-2 border border-dashed pw-border-neutral-500 pw-text-neutral-800 fs-8 fw-medium text-start">
                                            <i class="fa-solid fa-user-secret fs-7 pw-color-current"></i>
                                            Logo Konnektörü
                                          </button>
                                          <!--end::Elemet-->

                                          <!--begin::Elemet-->
                                          <button
                                            class="btn px-3 py-2 border border-dashed pw-border-neutral-500 pw-text-neutral-800 fs-8 fw-medium text-start">
                                            <i class="fa-solid fa-user-secret fs-7 pw-color-current"></i>
                                            Robusta Konnektörü
                                          </button>
                                          <!--end::Elemet-->
                                        </div>
                                        <!--end::Element wrapper-->
                                      </div>
                                      <!--end::Body-->
                                    </div>
                                    <!--end::Item-->

                                    <!--begin::Item-->
                                    <div class="mb-2">
                                      <!--begin::Header-->
                                      <div
                                        class="accordion-header py-3 d-flex collapsed pw-bg-primary-300 pw-text-neutral-800 fs-7 fw-medium rounded-1 p-2"
                                        data-bs-toggle="collapse" data-bs-target="#pw_drag_drop_item_3">
                                        <h3 class="fs-4 fw-semibold mb-0 ms-4">Düzenleme</h3>
                                      </div>
                                      <!--end::Header-->

                                      <!--begin::Body-->
                                      <div id="pw_drag_drop_item_3" class="fs-6 collapse p-0 mt-2 collapse"
                                        data-bs-parent="#pw_drag_drop">
                                        <!--begin::Element wrapper-->
                                        <div class="d-flex flex-column gap-1">
                                          <!--begin::Elemet-->
                                          <button
                                            class="btn px-3 py-2 border border-dashed pw-border-neutral-500 pw-text-neutral-800 fs-8 fw-medium text-start">
                                            <i class="fa-solid fa-table-columns fs-7 pw-color-current"></i>
                                            Kolonlar
                                          </button>
                                          <!--end::Elemet-->

                                          <!--begin::Elemet-->
                                          <button
                                            class="btn px-3 py-2 border border-dashed pw-border-neutral-500 pw-text-neutral-800 fs-8 fw-medium text-start">
                                            <i class="fa-solid fa-list-dropdown fs-7 pw-color-current"></i>
                                            Panel
                                          </button>
                                          <!--end::Elemet-->

                                          <!--begin::Elemet-->
                                          <button
                                            class="btn px-3 py-2 border border-dashed pw-border-neutral-500 pw-text-neutral-800 fs-8 fw-medium text-start">
                                            <i class="fa-solid fa-table-cells fs-7 pw-color-current"></i>
                                            Tablo
                                          </button>
                                          <!--end::Elemet-->

                                          <!--begin::Elemet-->
                                          <button
                                            class="btn px-3 py-2 border border-dashed pw-border-neutral-500 pw-text-neutral-800 fs-8 fw-medium text-start">
                                            <i class="fa-solid fa-folder fs-7 pw-color-current"></i>
                                            Sekme
                                          </button>
                                          <!--end::Elemet-->

                                          <!--begin::Elemet-->
                                          <button
                                            class="btn px-3 py-2 border border-dashed pw-border-neutral-500 pw-text-neutral-800 fs-8 fw-medium text-start">
                                            <i class="fa-solid fa-window-restore fs-7 pw-color-current"></i>
                                            Açılır Pencere
                                          </button>
                                          <!--end::Elemet-->
                                        </div>
                                        <!--end::Element wrapper-->
                                      </div>
                                      <!--end::Body-->
                                    </div>
                                    <!--end::Item-->
                                  </div>
                                  <!--end::Elements-->
                                </div>
                                <!--end::Draggable elements-->
                              </div>
                              <!--end::Col-->

                              <!--begin::Col-->
                              <div class="col">...</div>
                              <!--end::Col-->
                            </div>
                            <!--end::Row-->

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
                          <!--end::Form wrapper-->
                        </form>
                        <!--end::Form-->
                      </div>
                      <!--end::Dizayn content-->

                      <!--begin::Kodlar content-->
                      <div class="tab-pane fade" id="pw_tab_pane_form_kodlar" role="tabpanel">

                        <!--begin::Accordion-->
                        <div class="accordion accordion-icon-toggle" id="pw_detay_accordion">
                          <!--begin::Item-->
                          <div class="mb-5">
                            <!--begin::Header-->
                            <div class="accordion-header py-3 d-flex" data-bs-toggle="collapse"
                              data-bs-target="#pw_detay_accordion_item_1">
                              <span class="accordion-icon">
                                <i class="fa-sharp fa-solid fa-triangle fs-6" style="rotate:90deg"></i>
                              </span>
                              <h3 class="d-flex align-items-center gap-2 fs-4 fw-semibold mb-0 ms-4">
                                <i class="fa-regular fa-window-restore pw-text-primary-500 fs-3"></i>
                                Süreç 2
                              </h3>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div id="pw_detay_accordion_item_1" class="fs-6 collapse show ps-10"
                              data-bs-parent="#pw_detay_accordion">
                              <!--begin::Form-->
                              <form>
                                <!--begin::Body wrapper-->
                                <div class="d-flex flex-wrap flex-lg-nowrap gap-3">
                                  <!--begin::Col-->
                                  <div class="col-12 col-lg-5 border pw-border-stroke rounded-3">
                                    <!--begin::Item-->
                                    <div
                                      class="d-flex align-items-center justify-content-between gap-4 px-3 py-4 border-bottom pw-border-stroke">
                                      <!--begin::Item name-->
                                      <div class="d-flex align-items-center gap-2">
                                        <i class="fa-solid fa-file-pen pw-text-primary-500 fs-4"></i>
                                        <span class="pw-text-neutral-700 fw-medium fs-7">Kullanıcı Adı</span>
                                      </div>
                                      <!--end::Item name-->

                                      <!--begin::Item info-->
                                      <div class="d-flex align-items-center justify-content-between gap-3 min-w-70px">
                                        <span class="text-black fs-9 fw-medium">Yazı (20)</span>
                                        <button class="btn p-0"><i
                                            class="fa-solid fa-circle-x pw-text-primary-500 fs-6"></i></button>
                                      </div>
                                      <!--end::Item info-->
                                    </div>
                                    <!--end::Item-->

                                    <!--begin::Item-->
                                    <div
                                      class="d-flex align-items-center justify-content-between gap-4 px-3 py-4 border-bottom pw-border-stroke">
                                      <!--begin::Item name-->
                                      <div class="d-flex align-items-center gap-2">
                                        <i class="fa-solid fa-input-numeric pw-text-primary-500 fs-4"></i>
                                        <span class="pw-text-neutral-700 fw-medium fs-7">Kullanıcı Yaşı</span>
                                      </div>
                                      <!--end::Item name-->

                                      <!--begin::Item info-->
                                      <div class="d-flex align-items-center justify-content-between gap-3 min-w-70px">
                                        <span class="text-black fs-9 fw-medium">Sayı</span>
                                        <button class="btn p-0"><i
                                            class="fa-solid fa-circle-x pw-text-primary-500 fs-6"></i></button>
                                      </div>
                                      <!--end::Item info-->
                                    </div>
                                    <!--end::Item-->

                                    <!--begin::Item-->
                                    <div
                                      class="d-flex align-items-center justify-content-between gap-4 px-3 py-4 border-bottom pw-border-stroke">
                                      <!--begin::Item name-->
                                      <div class="d-flex align-items-center gap-2">
                                        <i class="fa-solid fa-calendar pw-text-primary-500 fs-4"></i>
                                        <span class="pw-text-neutral-700 fw-medium fs-7">Tarihi</span>
                                      </div>
                                      <!--end::Item name-->

                                      <!--begin::Item info-->
                                      <div class="d-flex align-items-center justify-content-between gap-3 min-w-70px">
                                        <span class="text-black fs-9 fw-medium">Tarih</span>
                                        <button class="btn p-0"><i
                                            class="fa-solid fa-circle-x pw-text-primary-500 fs-6"></i></button>
                                      </div>
                                      <!--end::Item info-->
                                    </div>
                                    <!--end::Item-->

                                    <!--begin::Item-->
                                    <div
                                      class="d-flex align-items-center justify-content-between gap-4 px-3 py-4 border-bottom pw-border-stroke">
                                      <!--begin::Item name-->
                                      <div class="d-flex align-items-center gap-2">
                                        <i class="fa-solid fa-clock pw-text-primary-500 fs-4"></i>
                                        <span class="pw-text-neutral-700 fw-medium fs-7">Saati</span>
                                      </div>
                                      <!--end::Item name-->

                                      <!--begin::Item info-->
                                      <div class="d-flex align-items-center justify-content-between gap-3 min-w-70px">
                                        <span class="text-black fs-9 fw-medium">Saat</span>
                                        <button class="btn p-0"><i
                                            class="fa-solid fa-circle-x pw-text-primary-500 fs-6"></i></button>
                                      </div>
                                      <!--end::Item info-->
                                    </div>
                                    <!--end::Item-->

                                    <!--begin::Item-->
                                    <div
                                      class="d-flex align-items-center justify-content-between gap-4 px-3 py-4 border-bottom pw-border-stroke">
                                      <!--begin::Item name-->
                                      <div class="d-flex align-items-center gap-2">
                                        <i class="fa-solid fa-dollar-sign pw-text-primary-500 fs-4"></i>
                                        <span class="pw-text-neutral-700 fw-medium fs-7">KDV Tutarı</span>
                                      </div>
                                      <!--end::Item name-->

                                      <!--begin::Item info-->
                                      <div class="d-flex align-items-center justify-content-between gap-3 min-w-70px">
                                        <span class="text-black fs-9 fw-medium">Miktar</span>
                                        <button class="btn p-0"><i
                                            class="fa-solid fa-circle-x pw-text-primary-500 fs-6"></i></button>
                                      </div>
                                      <!--end::Item info-->
                                    </div>
                                    <!--end::Item-->
                                  </div>
                                  <!--end::Col-->

                                  <!--begin::Col-->
                                  <div class="col-12 col-lg-7 border pw-border-stroke rounded-3 px-3 py-4">
                                    <h2 class="text-black fs-7 fw-medium">Alan Tanımı</h2>

                                    <!--begin::Table-->
                                    <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                                      <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fs-7">
                                        <tbody>
                                          <!--begin::Row-->
                                          <tr>
                                            <td><label class="form-label fs-base fw-medium"
                                                for="pw_tip_detay_alan_adi">Alan Adı</label></td>
                                            <td>
                                              <input type="text" class="form-control form-control-solid py-3 px-4 fs-8"
                                                id="pw_tip_detay_alan_adi" name="pw_tip_detay_alan_adi" required />
                                            </td>
                                          </tr>
                                          <!--end::Row-->

                                          <!--begin::Row-->
                                          <tr>
                                            <td><label class="form-label fs-base fw-medium"
                                                for="pw_tip_detay_veri_tipi">Veri Tipi</label></td>
                                            <td>
                                              <select id="pw_tip_detay_veri_tipi"
                                                class="form-select form-select-solid fs-8 py-3 px-4"
                                                data-control="select2" data-placeholder="Seçim Yapın">
                                                <option value="1">Option 1</option>
                                              </select>
                                            </td>
                                          </tr>
                                          <!--end::Row-->

                                          <!--begin::Row-->
                                          <tr>
                                            <td></td>
                                            <td>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                  id="pw_tip_detay_zorunlu" checked="checked" />
                                                <label class="form-check-label pw-text-neutral-800 fs-medium"
                                                  for="pw_tip_detay_zorunlu">
                                                  Zorunlu
                                                </label>
                                              </div>
                                            </td>
                                          </tr>
                                          <!--end::Row-->

                                          <!--begin::Row-->
                                          <tr>
                                            <td><label class="form-label fs-base fw-medium"
                                                for="pw_tip_detay_boyut">Boyut</label></td>
                                            <td>
                                              <input type="number" class="form-control form-control-solid" value="0"
                                                min="0" />
                                            </td>
                                          </tr>
                                          <!--end::Row-->

                                          <!--begin::Row-->
                                          <tr>
                                            <td><label class="form-label fs-base fw-medium"
                                                for="pw_tip_detay_liste">Liste</label></td>
                                            <td>
                                              <select id="pw_tip_detay_liste"
                                                class="form-select form-select-solid fs-8 py-3 px-4"
                                                data-control="select2" data-placeholder="Seçim Yapın">
                                                <option value="1">Option 1</option>
                                              </select>
                                            </td>
                                          </tr>
                                          <!--end::Row-->

                                          <!--begin::Row-->
                                          <tr>
                                            <td><label class="form-label fs-base fw-medium"
                                                for="pw_tip_detay_anahtar_alan">Anahtar Alan</label></td>
                                            <td>
                                              <select id="pw_tip_detay_anahtar_alan"
                                                class="form-select form-select-solid fs-8 py-3 px-4"
                                                data-control="select2" data-placeholder="Seçim Yapın">
                                                <option value="1">Option 1</option>
                                              </select>
                                            </td>
                                          </tr>
                                          <!--end::Row-->

                                          <!--begin::Row-->
                                          <tr>
                                            <td><label class="form-label fs-base fw-medium"
                                                for="pw_tip_detay_goruntulenecek_alan">Görüntülenecek Alan</label></td>
                                            <td>
                                              <select id="pw_tip_detay_goruntulenecek_alan"
                                                class="form-select form-select-solid fs-8 py-3 px-4"
                                                data-control="select2" data-placeholder="Seçim Yapın">
                                                <option value="1">Option 1</option>
                                              </select>
                                            </td>
                                          </tr>
                                          <!--end::Row-->

                                          <!--begin::Row-->
                                          <tr>
                                            <td><label class="form-label fs-base fw-medium"
                                                for="pw_tip_detay_aciklama">Açıklama</label></td>
                                            <td>
                                              <textarea id="pw_tip_detay_aciklama"
                                                class="form-select form-select-solid fs-8 py-3 px-4" cols="30"
                                                rows="4"></textarea>
                                            </td>
                                          </tr>
                                          <!--end::Row-->
                                        </tbody>
                                      </table>
                                    </div>
                                    <!--end::Table-->
                                  </div>
                                  <!--end::Col-->
                                </div>
                                <!--end::Body wrapper-->

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
                              </form>
                              <!--end::Form-->
                            </div>
                            <!--end::Body-->
                          </div>
                          <!--end::Item-->
                        </div>
                        <!--end::Accordion-->
                      </div>
                      <!--end::Kodlar content-->

                      <!--begin::Paylaşınlan kodlar content-->
                      <div class="tab-pane fade" id="pw_tab_pane_form_paylasilan_kodlar" role="tabpanel">
                        <!--begin::Iframe wrapper-->
                        <div class="border pw-border-stroke rounded-3 py-6 px-4">
                          Paylaşılan kodlar
                        </div>
                        <!--end::Iframe wrapper-->

                        <!--begin::Button group-->
                        <div class="d-flex align-items-center justify-content-end gap-3 pt-5">
                          <button type="reset" class="btn btn-active-light fs-8 py-3 px-6">
                            İptal
                          </button>
                          <button type="submit" class="btn btn-primary fs-8 py-3 px-6">
                            Kaydet
                          </button>
                        </div>
                        <!--end::Button group-->
                      </div>
                      <!--end::Paylaşınlan kodlar content-->

                      <!--begin::Tip bazında ortak kodlar content-->
                      <div class="tab-pane fade" id="pw_tab_pane_form_tbok" role="tabpanel">
                        <!--begin::Tarihce wrapper-->
                        <div class="d-flex flex-wrap flex-lg-nowrap gap-4">
                          <!--begin::Col-->
                          <div
                            class="col-12 col-lg mw-lg-225px d-flex flex-column gap-8 border pw-border-stroke rounded-3 py-6 px-5">
                            <!--begin::Item-->
                            <div class="d-flex flex-column">
                              <span class="pw-text-neutral-600 fs-7 fw-medium">Turgut İnanbank</span>
                              <span class="pw-text-neutral-400 fs-8">23.11.2022 10:33</span>
                            </div>
                            <!--end::Item-->

                            <!--begin::Item-->
                            <div class="d-flex flex-column">
                              <span class="pw-text-neutral-600 fs-7 fw-medium">Hayrettin Çağrı Şen</span>
                              <span class="pw-text-neutral-400 fs-8">25.11.2022 15:21</span>
                            </div>
                            <!--end::Item-->

                            <!--begin::Item-->
                            <div class="d-flex flex-column">
                              <span class="pw-text-neutral-600 fs-7 fw-medium">Hayrettin Çağrı Şen</span>
                              <span class="pw-text-neutral-400 fs-8">25.11.2022 15:21</span>
                            </div>
                            <!--end::Item-->

                            <!--begin::Item-->
                            <div class="d-flex flex-column">
                              <span class="pw-text-neutral-600 fs-7 fw-medium">Ezgi Çelik</span>
                              <span class="pw-text-neutral-400 fs-8">23.11.2022 10:33</span>
                            </div>
                            <!--end::Item-->

                            <!--begin::Item-->
                            <div class="d-flex flex-column">
                              <span class="pw-text-neutral-600 fs-7 fw-medium">Hayrettin Çağrı Şen</span>
                              <span class="pw-text-neutral-400 fs-8">23.11.2022 10:33</span>
                            </div>
                            <!--end::Item-->

                            <!--begin::Item-->
                            <div class="d-flex flex-column">
                              <span class="pw-text-neutral-600 fs-7 fw-medium">Samet Fırat</span>
                              <span class="pw-text-neutral-400 fs-8">23.11.2022 10:33</span>
                            </div>
                            <!--end::Item-->
                          </div>
                          <!--begin::Col-->

                          <!--begin::Col-->
                          <div class="col-12 col-lg border pw-border-stroke rounded-3 py-6 px-5">
                            <!--begin::Table-->
                            <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                              <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fs-7">
                                <tbody>
                                  <!--begin::Row-->
                                  <tr>
                                    <td><label class="form-label fs-base fw-bolder">Tip Adı</label></td>
                                    <td>Sistem <br /> PW_SYSOBJECT</td>
                                  </tr>
                                  <!--end::Row-->

                                  <!--begin::Row-->
                                  <tr>
                                    <td><label class="form-label fs-base fw-bolder">Süper Tip</label></td>
                                    <td></td>
                                  </tr>
                                  <!--end::Row-->

                                  <!--begin::Row-->
                                  <tr>
                                    <td><label class="form-label fs-base fw-bolder">Tasarım Yetki Seti</label></td>
                                    <td>PW Destek Ekibi</td>
                                  </tr>
                                  <!--end::Row-->

                                  <!--begin::Row-->
                                  <tr>
                                    <td><label class="form-label fs-base fw-bolder"
                                        for="pw_tip_tarihce_tam_metin_indeksleme">Tam Metin Indeksleme</label></td>
                                    <td>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                          id="pw_tip_tarihce_tam_metin_indeksleme" checked="checked" />
                                      </div>
                                    </td>
                                  </tr>
                                  <!--end::Row-->

                                  <!--begin::Row-->
                                  <tr>
                                    <td><label class="form-label fs-base fw-bolder">Geri Dönüşüm</label></td>
                                    <td>Normal</td>
                                  </tr>
                                  <!--end::Row-->
                                </tbody>
                              </table>
                            </div>
                            <!--end::Table-->

                            <!--begin::Table 2-->
                            <div class="table-responsive overflow-x-auto rounded">
                              <table id="pw_erisim_ve_islem_yetkileri_table"
                                class="table table-row-bordered pw-dark-bg-table border pw-table-border-gray table-rounded align-middle w-max-content min-w-100 gy-4 gx-9 gs-9">
                                <thead>
                                  <tr class="fw-semibold fs-8 pw-text-neutral-700 pw-bg-neutral-100">
                                    <th class="py-3">Alan</th>
                                    <th class="py-3">GroupId</th>
                                    <th class="py-3">Veri Tipi</th>
                                    <th class="py-3">Zorunluluk</th>
                                    <th class="py-3">Aranabilir</th>
                                    <th class="py-3">Boyut</th>
                                    <th class="py-3">ISDD</th>
                                    <th class="py-3">İş Tanımı</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <!--begin::Row-->
                                  <tr class="fw-medium pw-text-neutral-700 fs-8">
                                    <td>Yetki Seti</td>
                                    <td>0</td>
                                    <td>Yazı</td>
                                    <td></td>
                                    <td></td>
                                    <td>16</td>
                                    <td></td>
                                    <td></td>
                                  </tr>
                                  <!--end::Row-->

                                  <!--begin::Row-->
                                  <tr class="fw-medium pw-text-neutral-700 fs-8">
                                    <td>İçerik No</td>
                                    <td>0</td>
                                    <td>Yazı</td>
                                    <td></td>
                                    <td></td>
                                    <td>16</td>
                                    <td></td>
                                    <td></td>
                                  </tr>
                                  <!--end::Row-->

                                  <!--begin::Row-->
                                  <tr class="fw-medium pw-text-neutral-700 fs-8 pw-bg-primary-200">
                                    <td>Oluştur</td>
                                    <td>0</td>
                                    <td>Yazı</td>
                                    <td></td>
                                    <td></td>
                                    <td>16</td>
                                    <td></td>
                                    <td></td>
                                  </tr>
                                  <!--end::Row-->

                                  <!--begin::Row-->
                                  <tr class="fw-medium pw-text-neutral-700 fs-8">
                                    <td>Silinme</td>
                                    <td>0</td>
                                    <td>Yazı</td>
                                    <td></td>
                                    <td></td>
                                    <td>16</td>
                                    <td></td>
                                    <td></td>
                                  </tr>
                                  <!--end::Row-->
                                </tbody>
                              </table>
                            </div>
                            <!--end::Table 2-->

                            <!--begin::Button group-->
                            <div class="d-flex align-items-center justify-content-end gap-3 pt-5">
                              <button type="reset" class="btn btn-active-light fs-8 py-3 px-6">
                                İptal
                              </button>
                              <button type="submit" class="btn btn-primary fs-8 py-3 px-6">
                                Kaydet
                              </button>
                            </div>
                            <!--begin::Button group-->
                          </div>
                          <!--end::Col-->
                        </div>
                        <!--end::Tarihce wrapper-->
                      </div>
                      <!--end::Tip bazında ortak kodlar content-->
                    </div>
                    <!--end::Tip form contents-->
                  </div>
                  <!--end::Tip card-->
                </div>
                <!--end::Form content-->

                <!--begin::Akış content-->
                <div class="tab-pane fade active show" id="pw_tab_pane_akis" role="tabpanel">
                  <!--begin::Tip card-->
                  <div class="border rounded-3 pw-border-stroke px-6 py-5">
                    <!--begin::Tip form contents-->
                    <div class="tab-content pw-dashboard-tab-content mt-6" id="tipFormContents">
                      <!--begin::Dizayn content-->
                      <div class="tab-pane fade active show" id="pw_tab_pane_form_dizayn" role="tabpanel">
                        <!--begin::Form-->
                        <form>
                          <!--begin::Form wrapper-->
                          <div class="table-responsive overflow-x-auto overflow-y-hidden">
                            <!--begin::Row-->
                            <div class="d-flex mw-1000px mw-lg-100 px-1 gap-4">
                              <!--begin::Col-->
                              <div class="mw-300px w-100 border rounded-1 pw-border-stroke">
                                <!--begin::Action buttons-->
                                <div
                                  class="d-flex align-items-center gap-3 p-3 border-bottom pw-border-stroke pw-bg-table ">
                                  <i class="fa-solid fa-caret-down fs-4 pw-text-primary-500"></i>
                                  <span>Genel</span>
                                </div>
                                <!--end::Action buttons-->

                                <!--begin::Draggable elements-->
                                <div class="d-flex flex-column gap-2 py-3 px-2 justify-center align-items-center">
                                  <!--begin::Elements-->
                                  <div class="accordion accordion-icon-toggle" id="pw_drag_drop">
                                    <div class="d-flex gap-4 justify-center">
                                      <!--Item:start-->
                                      <div
                                        class="d-flex flex-column justify-center align-items-center gap-2 text-center"
                                        data-bs-toggle="modal" data-bs-target="#basla">
                                        <i class="fa-solid fa-circle fs-2tx pw-text-success-500"></i>
                                        <span class="fw-semibold">Başla</span>
                                      </div>
                                      <!--Item:end-->

                                      <!--Item:start-->
                                      <div
                                        class="d-flex flex-column justify-center align-items-center gap-2 text-center"
                                        data-bs-toggle="modal" data-bs-target="#basla">
                                        <i class="fa-solid fa-circle fs-2tx pw-text-danger-500"></i>
                                        <span class="fw-semibold">Bitir</span>
                                      </div>
                                      <!--Item:end-->

                                      <!--Item:start-->
                                      <div
                                        class="d-flex flex-column justify-center align-items-center gap-2 text-center"
                                        data-bs-toggle="modal" data-bs-target="#basla">
                                        <i
                                          class="fa-solid fa-circle fs-2tx pw-text-success-200 border border-success rounded-circle"></i>
                                        <span class="fw-semibold">Süreli Başlangıç</span>
                                      </div>
                                      <!--Item:end-->

                                      <!--Item:start-->
                                      <div
                                        class="d-flex flex-column justify-center align-items-center gap-2 text-center"
                                        data-bs-toggle="modal" data-bs-target="#basla">
                                        <i
                                          class="fa-solid fa-circle fs-2tx pw-text-danger-200 border border-danger rounded-circle"></i>
                                        <span class="fw-semibold">Süreli Bitiş</span>
                                      </div>
                                      <!--Item:end-->
                                    </div>
                                  </div>
                                  <div class="d-flex gap-4 flex-wrap align-items-center justify-content-center"
                                    data-bs-toggle="modal" data-bs-target="#manuel-adim">
                                    <div class="d-flex flex-column align-items-center">
                                      <div class="border border-2 border-primary rounded py-4 px-1 w-80px">
                                        <i class="fa-solid fa-user fs-8 pw-text-primary-500 "></i>
                                      </div>
                                      <span class="text-center">
                                        Manuel Adım
                                      </span>
                                    </div>

                                    <div class="d-flex flex-column align-items-center" data-bs-toggle="modal"
                                      data-bs-target="#otomatik_adim_genel">
                                      <div class="border border-2 border-primary rounded py-4 px-1 w-80px">
                                        <i class="fa-solid fa-square-plus fs-8 pw-text-primary-500 "></i>
                                      </div>
                                      <span class="text-center">
                                        Otomatik Adım
                                      </span>
                                    </div>
                                    <div class="d-flex flex-column align-items-center" data-bs-toggle="modal"
                                      data-bs-target="#elektronik_posta_genel">
                                      <div class="border border-2 border-primary rounded py-4 px-1 w-80px">
                                        <i class="fa-solid fa-envelope fs-8 pw-text-primary-500 "></i>
                                      </div>
                                      <span class="text-center">
                                        Elektronik Adım
                                      </span>
                                    </div>
                                    <div class="d-flex flex-column align-items-center">
                                      <div class="border border-2 border-primary rounded py-4 px-1 w-80px">
                                        <i class="fa-solid fa-network-wired fs-8 pw-text-primary-500 "></i>
                                      </div>
                                      <span class="text-center">
                                        Alt İş Akışı
                                      </span>
                                    </div>
                                    <div class="d-flex flex-column align-items-center">
                                      <div class="border border-2 border-primary rounded py-4 px-1 w-80px">
                                        <i class="fa-solid fa-file-lines fs-8 pw-text-primary-500 "></i>
                                      </div>
                                      <span class="text-center">
                                        Makro
                                      </span>
                                    </div>
                                    <div class="d-flex flex-column align-items-center">
                                      <div class="border border-2 border-primary rounded py-4 px-1 w-80px">
                                        <i class="fa-solid fa-file-lines fs-8 pw-text-primary-500 "></i>
                                      </div>
                                      <span class="text-center">
                                        Makro
                                      </span>
                                    </div>
                                    <div class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#roller">Roller
                                      Modal
                                    </div>
                                    <div class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#roller">Grup
                                      Genel Modal
                                    </div>
                                    <div class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#karar-genel">
                                      Karar Genel Modal
                                    </div>
                                    <div class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#alt-is-akisi">
                                      Alt İş Akış Modal
                                    </div>
                                    <div class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#birlesim_genel">
                                      Birlesim Genel Modal
                                    </div>
                                    <div class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#dagitim_genel">
                                      Dağıtım Genel Modal
                                    </div>
                                    <div class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kpi-baslangic-genel">
                                      KPI Başlangıç Genel Modal
                                    </div>
                                    <div class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kpi-bitis-genel">
                                      KPI Bitiş Genel Modal
                                    </div>
                                    <div class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kpi-bilgilendirme-genel">
                                      KPI Bilgilendirme Bitiş Genel Modal
                                    </div>
                                    <div class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#makro-genel">
                                      Makro Genel Modal
                                    </div>
                                    <div class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kural-genel">
                                      Kural Genel Modal
                                    </div>
                                    <div class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#oncelik-genel">
                                      Öncellik Genel Modal
                                    </div>
                                    <div class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#yetkilendirme-genel">
                                      Yetkilendirme Genel Modal
                                    </div>
                                    <div class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#web-servis-genel">
                                      Web Servis Genel Modal
                                    </div>
                                    <div class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#bekleme-genel">
                                     Bekleme Genel Modal
                                    </div>
                                    <div class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#dokuman-yarat-gengel">
                                      Dokuman Genel Modal
                                    </div>
                                    <div class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#dosya-karti-yarat-genel">
                                      Dosya Karti Yarat Genel Modal
                                    </div>
                                    <div class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#logo-modulu-genel">
                                      Logo modulu Genel Modal
                                    </div>
                                  </div>
                                  <!--end::Elements-->
                                </div>
                                <!--end::Draggable elements-->
                              </div>
                              <!--end::Col-->

                              <!--begin::Col-->
                              <div class="col">...</div>
                              <!--end::Col-->
                            </div>
                            <!--end::Row-->

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
                          <!--end::Form wrapper-->
                        </form>
                        <!--end::Form-->
                      </div>
                      <!--end::Dizayn content-->

                      <!--begin::Kodlar content-->
                      <div class="tab-pane fade" id="pw_tab_pane_form_kodlar" role="tabpanel">

                        <!--begin::Accordion-->
                        <div class="accordion accordion-icon-toggle" id="pw_detay_accordion">
                          <!--begin::Item-->
                          <div class="mb-5">
                            <!--begin::Header-->
                            <div class="accordion-header py-3 d-flex" data-bs-toggle="collapse"
                              data-bs-target="#pw_detay_accordion_item_1">
                              <span class="accordion-icon">
                                <i class="fa-sharp fa-solid fa-triangle fs-6" style="rotate:90deg"></i>
                              </span>
                              <h3 class="d-flex align-items-center gap-2 fs-4 fw-semibold mb-0 ms-4">
                                <i class="fa-regular fa-window-restore pw-text-primary-500 fs-3"></i>
                                Süreç 2
                              </h3>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div id="pw_detay_accordion_item_1" class="fs-6 collapse show ps-10"
                              data-bs-parent="#pw_detay_accordion">
                              <!--begin::Form-->
                              <form>
                                <!--begin::Body wrapper-->
                                <div class="d-flex flex-wrap flex-lg-nowrap gap-3">
                                  <!--begin::Col-->
                                  <div class="col-12 col-lg-5 border pw-border-stroke rounded-3">
                                    <!--begin::Item-->
                                    <div
                                      class="d-flex align-items-center justify-content-between gap-4 px-3 py-4 border-bottom pw-border-stroke">
                                      <!--begin::Item name-->
                                      <div class="d-flex align-items-center gap-2">
                                        <i class="fa-solid fa-file-pen pw-text-primary-500 fs-4"></i>
                                        <span class="pw-text-neutral-700 fw-medium fs-7">Kullanıcı Adı</span>
                                      </div>
                                      <!--end::Item name-->

                                      <!--begin::Item info-->
                                      <div class="d-flex align-items-center justify-content-between gap-3 min-w-70px">
                                        <span class="text-black fs-9 fw-medium">Yazı (20)</span>
                                        <button class="btn p-0"><i
                                            class="fa-solid fa-circle-x pw-text-primary-500 fs-6"></i></button>
                                      </div>
                                      <!--end::Item info-->
                                    </div>
                                    <!--end::Item-->

                                    <!--begin::Item-->
                                    <div
                                      class="d-flex align-items-center justify-content-between gap-4 px-3 py-4 border-bottom pw-border-stroke">
                                      <!--begin::Item name-->
                                      <div class="d-flex align-items-center gap-2">
                                        <i class="fa-solid fa-input-numeric pw-text-primary-500 fs-4"></i>
                                        <span class="pw-text-neutral-700 fw-medium fs-7">Kullanıcı Yaşı</span>
                                      </div>
                                      <!--end::Item name-->

                                      <!--begin::Item info-->
                                      <div class="d-flex align-items-center justify-content-between gap-3 min-w-70px">
                                        <span class="text-black fs-9 fw-medium">Sayı</span>
                                        <button class="btn p-0"><i
                                            class="fa-solid fa-circle-x pw-text-primary-500 fs-6"></i></button>
                                      </div>
                                      <!--end::Item info-->
                                    </div>
                                    <!--end::Item-->

                                    <!--begin::Item-->
                                    <div
                                      class="d-flex align-items-center justify-content-between gap-4 px-3 py-4 border-bottom pw-border-stroke">
                                      <!--begin::Item name-->
                                      <div class="d-flex align-items-center gap-2">
                                        <i class="fa-solid fa-calendar pw-text-primary-500 fs-4"></i>
                                        <span class="pw-text-neutral-700 fw-medium fs-7">Tarihi</span>
                                      </div>
                                      <!--end::Item name-->

                                      <!--begin::Item info-->
                                      <div class="d-flex align-items-center justify-content-between gap-3 min-w-70px">
                                        <span class="text-black fs-9 fw-medium">Tarih</span>
                                        <button class="btn p-0"><i
                                            class="fa-solid fa-circle-x pw-text-primary-500 fs-6"></i></button>
                                      </div>
                                      <!--end::Item info-->
                                    </div>
                                    <!--end::Item-->

                                    <!--begin::Item-->
                                    <div
                                      class="d-flex align-items-center justify-content-between gap-4 px-3 py-4 border-bottom pw-border-stroke">
                                      <!--begin::Item name-->
                                      <div class="d-flex align-items-center gap-2">
                                        <i class="fa-solid fa-clock pw-text-primary-500 fs-4"></i>
                                        <span class="pw-text-neutral-700 fw-medium fs-7">Saati</span>
                                      </div>
                                      <!--end::Item name-->

                                      <!--begin::Item info-->
                                      <div class="d-flex align-items-center justify-content-between gap-3 min-w-70px">
                                        <span class="text-black fs-9 fw-medium">Saat</span>
                                        <button class="btn p-0"><i
                                            class="fa-solid fa-circle-x pw-text-primary-500 fs-6"></i></button>
                                      </div>
                                      <!--end::Item info-->
                                    </div>
                                    <!--end::Item-->

                                    <!--begin::Item-->
                                    <div
                                      class="d-flex align-items-center justify-content-between gap-4 px-3 py-4 border-bottom pw-border-stroke">
                                      <!--begin::Item name-->
                                      <div class="d-flex align-items-center gap-2">
                                        <i class="fa-solid fa-dollar-sign pw-text-primary-500 fs-4"></i>
                                        <span class="pw-text-neutral-700 fw-medium fs-7">KDV Tutarı</span>
                                      </div>
                                      <!--end::Item name-->

                                      <!--begin::Item info-->
                                      <div class="d-flex align-items-center justify-content-between gap-3 min-w-70px">
                                        <span class="text-black fs-9 fw-medium">Miktar</span>
                                        <button class="btn p-0"><i
                                            class="fa-solid fa-circle-x pw-text-primary-500 fs-6"></i></button>
                                      </div>
                                      <!--end::Item info-->
                                    </div>
                                    <!--end::Item-->
                                  </div>
                                  <!--end::Col-->

                                  <!--begin::Col-->
                                  <div class="col-12 col-lg-7 border pw-border-stroke rounded-3 px-3 py-4">
                                    <h2 class="text-black fs-7 fw-medium">Alan Tanımı</h2>

                                    <!--begin::Table-->
                                    <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                                      <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fs-7">
                                        <tbody>
                                          <!--begin::Row-->
                                          <tr>
                                            <td><label class="form-label fs-base fw-medium"
                                                for="pw_tip_detay_alan_adi">Alan Adı</label></td>
                                            <td>
                                              <input type="text" class="form-control form-control-solid py-3 px-4 fs-8"
                                                id="pw_tip_detay_alan_adi" name="pw_tip_detay_alan_adi" required />
                                            </td>
                                          </tr>
                                          <!--end::Row-->

                                          <!--begin::Row-->
                                          <tr>
                                            <td><label class="form-label fs-base fw-medium"
                                                for="pw_tip_detay_veri_tipi">Veri Tipi</label></td>
                                            <td>
                                              <select id="pw_tip_detay_veri_tipi"
                                                class="form-select form-select-solid fs-8 py-3 px-4"
                                                data-control="select2" data-placeholder="Seçim Yapın">
                                                <option value="1">Option 1</option>
                                              </select>
                                            </td>
                                          </tr>
                                          <!--end::Row-->

                                          <!--begin::Row-->
                                          <tr>
                                            <td></td>
                                            <td>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                  id="pw_tip_detay_zorunlu" checked="checked" />
                                                <label class="form-check-label pw-text-neutral-800 fs-medium"
                                                  for="pw_tip_detay_zorunlu">
                                                  Zorunlu
                                                </label>
                                              </div>
                                            </td>
                                          </tr>
                                          <!--end::Row-->

                                          <!--begin::Row-->
                                          <tr>
                                            <td><label class="form-label fs-base fw-medium"
                                                for="pw_tip_detay_boyut">Boyut</label></td>
                                            <td>
                                              <input type="number" class="form-control form-control-solid" value="0"
                                                min="0" />
                                            </td>
                                          </tr>
                                          <!--end::Row-->

                                          <!--begin::Row-->
                                          <tr>
                                            <td><label class="form-label fs-base fw-medium"
                                                for="pw_tip_detay_liste">Liste</label></td>
                                            <td>
                                              <select id="pw_tip_detay_liste"
                                                class="form-select form-select-solid fs-8 py-3 px-4"
                                                data-control="select2" data-placeholder="Seçim Yapın">
                                                <option value="1">Option 1</option>
                                              </select>
                                            </td>
                                          </tr>
                                          <!--end::Row-->

                                          <!--begin::Row-->
                                          <tr>
                                            <td><label class="form-label fs-base fw-medium"
                                                for="pw_tip_detay_anahtar_alan">Anahtar Alan</label></td>
                                            <td>
                                              <select id="pw_tip_detay_anahtar_alan"
                                                class="form-select form-select-solid fs-8 py-3 px-4"
                                                data-control="select2" data-placeholder="Seçim Yapın">
                                                <option value="1">Option 1</option>
                                              </select>
                                            </td>
                                          </tr>
                                          <!--end::Row-->

                                          <!--begin::Row-->
                                          <tr>
                                            <td><label class="form-label fs-base fw-medium"
                                                for="pw_tip_detay_goruntulenecek_alan">Görüntülenecek Alan</label></td>
                                            <td>
                                              <select id="pw_tip_detay_goruntulenecek_alan"
                                                class="form-select form-select-solid fs-8 py-3 px-4"
                                                data-control="select2" data-placeholder="Seçim Yapın">
                                                <option value="1">Option 1</option>
                                              </select>
                                            </td>
                                          </tr>
                                          <!--end::Row-->

                                          <!--begin::Row-->
                                          <tr>
                                            <td><label class="form-label fs-base fw-medium"
                                                for="pw_tip_detay_aciklama">Açıklama</label></td>
                                            <td>
                                              <textarea id="pw_tip_detay_aciklama"
                                                class="form-select form-select-solid fs-8 py-3 px-4" cols="30"
                                                rows="4"></textarea>
                                            </td>
                                          </tr>
                                          <!--end::Row-->
                                        </tbody>
                                      </table>
                                    </div>
                                    <!--end::Table-->
                                  </div>
                                  <!--end::Col-->
                                </div>
                                <!--end::Body wrapper-->

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
                              </form>
                              <!--end::Form-->
                            </div>
                            <!--end::Body-->
                          </div>
                          <!--end::Item-->
                        </div>
                        <!--end::Accordion-->
                      </div>
                      <!--end::Kodlar content-->

                      <!--begin::Paylaşınlan kodlar content-->
                      <div class="tab-pane fade" id="pw_tab_pane_form_paylasilan_kodlar" role="tabpanel">
                        <!--begin::Iframe wrapper-->
                        <div class="border pw-border-stroke rounded-3 py-6 px-4">
                          Paylaşılan kodlar
                        </div>
                        <!--end::Iframe wrapper-->

                        <!--begin::Button group-->
                        <div class="d-flex align-items-center justify-content-end gap-3 pt-5">
                          <button type="reset" class="btn btn-active-light fs-8 py-3 px-6">
                            İptal
                          </button>
                          <button type="submit" class="btn btn-primary fs-8 py-3 px-6">
                            Kaydet
                          </button>
                        </div>
                        <!--end::Button group-->
                      </div>
                      <!--end::Paylaşınlan kodlar content-->

                      <!--begin::Tip bazında ortak kodlar content-->
                      <div class="tab-pane fade" id="pw_tab_pane_form_tbok" role="tabpanel">
                        <!--begin::Tarihce wrapper-->
                        <div class="d-flex flex-wrap flex-lg-nowrap gap-4">
                          <!--begin::Col-->
                          <div
                            class="col-12 col-lg mw-lg-225px d-flex flex-column gap-8 border pw-border-stroke rounded-3 py-6 px-5">
                            <!--begin::Item-->
                            <div class="d-flex flex-column">
                              <span class="pw-text-neutral-600 fs-7 fw-medium">Turgut İnanbank</span>
                              <span class="pw-text-neutral-400 fs-8">23.11.2022 10:33</span>
                            </div>
                            <!--end::Item-->

                            <!--begin::Item-->
                            <div class="d-flex flex-column">
                              <span class="pw-text-neutral-600 fs-7 fw-medium">Hayrettin Çağrı Şen</span>
                              <span class="pw-text-neutral-400 fs-8">25.11.2022 15:21</span>
                            </div>
                            <!--end::Item-->

                            <!--begin::Item-->
                            <div class="d-flex flex-column">
                              <span class="pw-text-neutral-600 fs-7 fw-medium">Hayrettin Çağrı Şen</span>
                              <span class="pw-text-neutral-400 fs-8">25.11.2022 15:21</span>
                            </div>
                            <!--end::Item-->

                            <!--begin::Item-->
                            <div class="d-flex flex-column">
                              <span class="pw-text-neutral-600 fs-7 fw-medium">Ezgi Çelik</span>
                              <span class="pw-text-neutral-400 fs-8">23.11.2022 10:33</span>
                            </div>
                            <!--end::Item-->

                            <!--begin::Item-->
                            <div class="d-flex flex-column">
                              <span class="pw-text-neutral-600 fs-7 fw-medium">Hayrettin Çağrı Şen</span>
                              <span class="pw-text-neutral-400 fs-8">23.11.2022 10:33</span>
                            </div>
                            <!--end::Item-->

                            <!--begin::Item-->
                            <div class="d-flex flex-column">
                              <span class="pw-text-neutral-600 fs-7 fw-medium">Samet Fırat</span>
                              <span class="pw-text-neutral-400 fs-8">23.11.2022 10:33</span>
                            </div>
                            <!--end::Item-->
                          </div>
                          <!--begin::Col-->

                          <!--begin::Col-->
                          <div class="col-12 col-lg border pw-border-stroke rounded-3 py-6 px-5">
                            <!--begin::Table-->
                            <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                              <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fs-7">
                                <tbody>
                                  <!--begin::Row-->
                                  <tr>
                                    <td><label class="form-label fs-base fw-bolder">Tip Adı</label></td>
                                    <td>Sistem <br /> PW_SYSOBJECT</td>
                                  </tr>
                                  <!--end::Row-->

                                  <!--begin::Row-->
                                  <tr>
                                    <td><label class="form-label fs-base fw-bolder">Süper Tip</label></td>
                                    <td></td>
                                  </tr>
                                  <!--end::Row-->

                                  <!--begin::Row-->
                                  <tr>
                                    <td><label class="form-label fs-base fw-bolder">Tasarım Yetki Seti</label></td>
                                    <td>PW Destek Ekibi</td>
                                  </tr>
                                  <!--end::Row-->

                                  <!--begin::Row-->
                                  <tr>
                                    <td><label class="form-label fs-base fw-bolder"
                                        for="pw_tip_tarihce_tam_metin_indeksleme">Tam Metin Indeksleme</label></td>
                                    <td>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                          id="pw_tip_tarihce_tam_metin_indeksleme" checked="checked" />
                                      </div>
                                    </td>
                                  </tr>
                                  <!--end::Row-->

                                  <!--begin::Row-->
                                  <tr>
                                    <td><label class="form-label fs-base fw-bolder">Geri Dönüşüm</label></td>
                                    <td>Normal</td>
                                  </tr>
                                  <!--end::Row-->
                                </tbody>
                              </table>
                            </div>
                            <!--end::Table-->

                            <!--begin::Table 2-->
                            <div class="table-responsive overflow-x-auto rounded">
                              <table id="pw_erisim_ve_islem_yetkileri_table"
                                class="table table-row-bordered pw-dark-bg-table border pw-table-border-gray table-rounded align-middle w-max-content min-w-100 gy-4 gx-9 gs-9">
                                <thead>
                                  <tr class="fw-semibold fs-8 pw-text-neutral-700 pw-bg-neutral-100">
                                    <th class="py-3">Alan</th>
                                    <th class="py-3">GroupId</th>
                                    <th class="py-3">Veri Tipi</th>
                                    <th class="py-3">Zorunluluk</th>
                                    <th class="py-3">Aranabilir</th>
                                    <th class="py-3">Boyut</th>
                                    <th class="py-3">ISDD</th>
                                    <th class="py-3">İş Tanımı</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <!--begin::Row-->
                                  <tr class="fw-medium pw-text-neutral-700 fs-8">
                                    <td>Yetki Seti</td>
                                    <td>0</td>
                                    <td>Yazı</td>
                                    <td></td>
                                    <td></td>
                                    <td>16</td>
                                    <td></td>
                                    <td></td>
                                  </tr>
                                  <!--end::Row-->

                                  <!--begin::Row-->
                                  <tr class="fw-medium pw-text-neutral-700 fs-8">
                                    <td>İçerik No</td>
                                    <td>0</td>
                                    <td>Yazı</td>
                                    <td></td>
                                    <td></td>
                                    <td>16</td>
                                    <td></td>
                                    <td></td>
                                  </tr>
                                  <!--end::Row-->

                                  <!--begin::Row-->
                                  <tr class="fw-medium pw-text-neutral-700 fs-8 pw-bg-primary-200">
                                    <td>Oluştur</td>
                                    <td>0</td>
                                    <td>Yazı</td>
                                    <td></td>
                                    <td></td>
                                    <td>16</td>
                                    <td></td>
                                    <td></td>
                                  </tr>
                                  <!--end::Row-->

                                  <!--begin::Row-->
                                  <tr class="fw-medium pw-text-neutral-700 fs-8">
                                    <td>Silinme</td>
                                    <td>0</td>
                                    <td>Yazı</td>
                                    <td></td>
                                    <td></td>
                                    <td>16</td>
                                    <td></td>
                                    <td></td>
                                  </tr>
                                  <!--end::Row-->
                                </tbody>
                              </table>
                            </div>
                            <!--end::Table 2-->

                            <!--begin::Button group-->
                            <div class="d-flex align-items-center justify-content-end gap-3 pt-5">
                              <button type="reset" class="btn btn-active-light fs-8 py-3 px-6">
                                İptal
                              </button>
                              <button type="submit" class="btn btn-primary fs-8 py-3 px-6">
                                Kaydet
                              </button>
                            </div>
                            <!--begin::Button group-->
                          </div>
                          <!--end::Col-->
                        </div>
                        <!--end::Tarihce wrapper-->
                      </div>
                      <!--end::Tip bazında ortak kodlar content-->
                    </div>
                    <!--end::Tip form contents-->
                  </div>
                  <!--end::Tip card-->
                </div>
                <!--end::Akış content-->

              </div>



              <!--end::Form-->




            </div>
            <!--end::Form wrapper-->
          </div>
          <!--end::Content col-->
        </div>
        <!--end::Content-->
        <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/footer.php'; ?>
      </div>
    </div>
    <!--end::Content Wrapper -->  
  </div>
</div>


<!-- begin::Modal -->
<div class="modal fade" tabindex="-1" id="basla">
  <div class="modal-dialog modal-dialog-centered modal-lg mw-950px">
    <div class="modal-content">
      <div class="modal-header border pb-3">
        <h3 class="modal-title fs-5">Özellikler - Başla</h3>

        <!--begin::Close-->
        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
          <i class="fa-solid fa-xmark fs-5"></i>
        </div>
        <!--end::Close-->
      </div>

      <div class="modal-body">
        <!--begin::Title-->
        <div class="d-flex align-items-center justify-content-between gap-3 mb-8">
          <h3 class="fs-base fw-bold">Genel</h3>

          <!--begin::Help button-->
          <button class="btn p-0" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse"
            data-bs-placement="bottom" data-bs-original-title="Help center" data-kt-initialized="1">
            <i class="fa-regular fa-circle-question"></i>
          </button>
          <!--end::Help button-->
        </div>
        <!--end::Title-->

        <!--begin::Form-->
        <form>
          <!--begin::Table-->
          <div class="table-responsive overflow-x-auto overflow-lg-hidden">
            <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fw-bold fs-7">
              <tbody>
                <!--begin::Row-->
                <tr>
                  <td><label class="form-label fs-base fw-bolder">Aktivite No</label></td>
                  <td>AA000000000000000</td>
                </tr>
                <!--end::Row-->

                <!--begin::Row-->
                <tr>
                  <td><label class="form-label fs-base fw-bolder" for="pw_basla_aktivite_adi">Aktivite Adı</label>
                  </td>
                  <td>
                    <input type="text" class="form-control form-control-solid py-3 px-4 fs-8"
                      id="pw_basla_aktivite_adi" name="pw_basla_aktivite_adi" value="Başla" required disabled />
                  </td>
                </tr>
                <!--end::Row-->

                <!--begin::Row-->
                <tr>
                  <td><label class="form-label fs-base fw-bolder" for="pw_basla_hata_kullanicisi">Hata
                      Kullanıcısı</label></td>
                  <td>
                    <select id="pw_basla_hata_kullanicisi" class="form-select form-select-solid fs-8 py-3 px-4"
                      data-control="select2" data-placeholder="Seçim Yapın">
                      <option value="1">Option 1</option>
                    </select>
                  </td>
                </tr>
                <!--end::Row-->

                <!--begin::Row-->
                <tr>
                  <td><label class="form-label fs-base fw-bolder" for="pw_basla_cerceve_rengi">Çerçeve Rengi</label>
                  </td>
                  <td>
                    <!--begin::Color picker-->
                    <div class="pw-color-picker-group">
                      <input type="color" class="pw-color-picker" value="#3699FF" id="pw_basla_cerceve_rengi"
                        name="pw_basla_cerceve_rengi" />
                      <label class="icon pw-shadow-sm" for="pw_basla_cerceve_rengi"
                        data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click"
                        title="Çerçeve rengi">
                        <i class="fa-solid fa-pen pw-text-neutral-300 fs-10 pe-0"></i>
                      </label>
                    </div>
                    <!--end::Color picker-->
                  </td>
                </tr>
                <!--end::Row-->

                <!--begin::Row-->
                <tr>
                  <td><label class="form-label fs-base fw-bolder" for="pw_basla_font_rengi">Font Rengi</label></td>
                  <td>
                    <!--begin::Color picker-->
                    <div class="pw-color-picker-group">
                      <input type="color" class="pw-color-picker" value="#3699FF" id="pw_basla_font_rengi"
                        name="pw_basla_font_rengi" />
                      <label class="icon pw-shadow-sm" for="pw_basla_font_rengi" data-kt-image-input-action="change"
                        data-bs-toggle="tooltip" data-bs-dismiss="click" title="Font rengi">
                        <i class="fa-solid fa-pen pw-text-neutral-300 fs-10 pe-0"></i>
                      </label>
                    </div>
                    <!--end::Color picker-->
                  </td>
                </tr>
                <!--end::Row-->

                <!--begin::Row-->
                <tr>
                  <td><label class="form-label fs-base fw-bolder" for="pw_basla_arka_plan_rengi">Arka Plan
                      Rengi</label></td>
                  <td>
                    <!--begin::Color picker-->
                    <div class="pw-color-picker-group">
                      <input type="color" class="pw-color-picker" value="#3699FF" id="pw_basla_arka_plan_rengi"
                        name="pw_basla_arka_plan_rengi" />
                      <label class="icon pw-shadow-sm" for="pw_basla_arka_plan_rengi"
                        data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click"
                        title="Arka plan rengi">
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
                    <label class="form-label fs-base fw-bolder" for="pw_basla_aciklama">Açıklama</label>
                  </td>
                  <td>
                    <div id="pw_basla_aciklama"></div>
                  </td>
                </tr>
                <!--end::Row-->
              </tbody>
            </table>
          </div>
          <!--end::Table-->
        </form>
        <!--end::Form-->
      </div>
    </div>
  </div>
</div>
<!-- end::Modal -->

<!-- begin::Modal -->
<div class="modal fade" tabindex="-1" id="manuel-adim">
  <div class="modal-dialog modal-dialog-centered modal-lg mw-950px">
    <div class="modal-content">
      <div class="modal-header border pb-3">
        <h3 class="modal-title fs-5">Özellikler - X</h3>

        <!--begin::Close-->
        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
          <i class="fa-solid fa-xmark fs-5"></i>
        </div>
        <!--end::Close-->
      </div>

      <div class="modal-body">
        <!--begin::Tab wrapper-->
        <div
          class="d-flex align-items-center justify-content-between table-responsive overflow-x-auto overflow-y-hidden">
          <!--begin::Table tabs-->
          <div class="nav nav-tabs nav-line-tabs flex-nowrap w-max-content flex-grow-1 fs-6 gap-6 border-0"
            role="tablist">
            <!--begin::Tab item-->
            <li class="nav-item mb-0" role="presentation">
              <a class="nav-link mx-0 py-3 px-2 fs-base rounded-0 fw-medium active" data-bs-toggle="tab"
                href="#pw_tab_pane_manuel_genel" aria-selected="true" role="tab">Genel</a>
            </li>
            <!--end::Tab item-->

            <!--begin::Tab item-->
            <li class="nav-item mb-0" role="presentation">
              <a class="nav-link mx-0 py-3 px-2 fs-base rounded-0 fw-medium" data-bs-toggle="tab"
                href="#pw_tab_pane_manuel_ozellikler" role="tab">Özellikler</a>
            </li>
            <!--end::Tab item-->

            <!--begin::Tab item-->
            <li class="nav-item mb-0" role="presentation">
              <a class="nav-link mx-0 py-3 px-2 fs-base rounded-0 fw-medium" data-bs-toggle="tab"
                href="#pw_tab_pane_manuel_bilgi" role="tab">Bilgi</a>
            </li>
            <!--end::Tab item-->

            <!--begin::Tab item-->
            <li class="nav-item mb-0" role="presentation">
              <a class="nav-link mx-0 py-3 px-2 fs-base rounded-0 fw-medium" data-bs-toggle="tab"
                href="#pw_tab_pane_manuel_elektronik_posta" role="tab">Elektronik Posta</a>
            </li>
            <!--end::Tab item-->
          </div>
          <!--end::Table tabs-->

          <!--begin::Help button-->
          <button class="btn p-0" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse"
            data-bs-placement="bottom" data-bs-original-title="Help center" data-kt-initialized="1">
            <i class="fa-regular fa-circle-question"></i>
          </button>
          <!--end::Help button-->
        </div>
        <!--end::Tab wrapper-->

        <!--begin::Tab contents-->
        <div class="tab-content pw-dashboard-tab-content mt-6" id="manuelTabContents">
          <!--begin::Genel content-->
          <div class="tab-pane fade active show" id="pw_tab_pane_manuel_genel" role="tabpanel">
            <!--begin::Form-->
            <form>
              <!--begin::Table-->
              <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fw-bold fs-7">
                  <tbody>
                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder">Aktivite No</label></td>
                      <td>AA000000000000000</td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_manuel_aktivite_adi">Aktivite
                          Adı</label></td>
                      <td>
                        <input type="text" class="form-control form-control-solid py-3 px-4 fs-8"
                          id="pw_manuel_aktivite_adi" name="pw_manuel_aktivite_adi" value="Başla" required
                          disabled />
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_manuel_hata_kullanicisi">Hata
                          Kullanıcısı</label></td>
                      <td>
                        <select id="pw_manuel_hata_kullanicisi" class="form-select form-select-solid fs-8 py-3 px-4"
                          data-control="select2" data-placeholder="Seçim Yapın">
                          <option value="1">Option 1</option>
                        </select>
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_manuel_cerceve_rengi">Çerçeve
                          Rengi</label></td>
                      <td>
                        <!--begin::Color picker-->
                        <div class="pw-color-picker-group">
                          <input type="color" class="pw-color-picker" value="#3699FF" id="pw_manuel_cerceve_rengi"
                            name="pw_manuel_cerceve_rengi" />
                          <label class="icon pw-shadow-sm" for="pw_manuel_cerceve_rengi"
                            data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click"
                            title="Çerçeve rengi">
                            <i class="fa-solid fa-pen pw-text-neutral-300 fs-10 pe-0"></i>
                          </label>
                        </div>
                        <!--end::Color picker-->
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_manuel_font_rengi">Font Rengi</label>
                      </td>
                      <td>
                        <!--begin::Color picker-->
                        <div class="pw-color-picker-group">
                          <input type="color" class="pw-color-picker" value="#3699FF" id="pw_manuel_font_rengi"
                            name="pw_manuel_font_rengi" />
                          <label class="icon pw-shadow-sm" for="pw_manuel_font_rengi"
                            data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click"
                            title="Font rengi">
                            <i class="fa-solid fa-pen pw-text-neutral-300 fs-10 pe-0"></i>
                          </label>
                        </div>
                        <!--end::Color picker-->
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_manuel_arka_plan_rengi">Arka Plan
                          Rengi</label></td>
                      <td>
                        <!--begin::Color picker-->
                        <div class="pw-color-picker-group">
                          <input type="color" class="pw-color-picker" value="#3699FF" id="pw_manuel_arka_plan_rengi"
                            name="pw_manuel_arka_plan_rengi" />
                          <label class="icon pw-shadow-sm" for="pw_manuel_arka_plan_rengi"
                            data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click"
                            title="Arka plan rengi">
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
                        <label class="form-label fs-base fw-bolder" for="pw_manuel_aciklama">Açıklama</label>
                      </td>
                      <td>
                        <div id="pw_manuel_aciklama"></div>
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td>
                        <label class="form-label fs-base fw-bolder" for="pw_manuel_aktivite_ipucu">Aktivite
                          İpucu</label>
                      </td>
                      <td>
                        <div id="pw_manuel_aktivite_ipucu"></div>
                      </td>
                    </tr>
                    <!--end::Row-->
                  </tbody>
                </table>
              </div>
              <!--end::Table-->
            </form>
            <!--end::Form-->
          </div>
          <!--end::Genel content-->

          <!--begin::Ozellikler content-->
          <div class="tab-pane fade" id="pw_tab_pane_manuel_ozellikler" role="tabpanel">
            <!--begin::Form-->
            <form class="d-flex flex-column gap-3">
              <!--begin::Form row-->
              <div class="row px-4 py-6 border rounded-1 pw-border-stroke">
                <!--begin::Col-->
                <div class="col-12">
                  <!--begin::Title-->
                  <h3 class="pw-text-neutral-800 fs-base fw-bold">Özellikler</h3>
                  <!--end::Title-->
                </div>
                <!--end::Col-->

                <!--begin::Col-->
                <div class="col-12 col-lg-6 d-flex flex-column gap-3">
                  <!--begin::Table-->
                  <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                    <table class="table w-min-content w-100 gy-2 gx-3 pw-text-neutral-800 fw-bold fs-8">
                      <tbody>
                        <!--begin::Row-->
                        <tr>
                          <td><label class="form-label fs-8 fw-bolder"
                              for="pw_manuel_ozellikler_organizasyon_semalari">Organizasyon Şemaları</label></td>
                          <td>
                            <select id="pw_manuel_ozellikler_organizasyon_semalari"
                              class="form-select form-select-solid fs-8 py-3 px-4 min-w-200px"
                              data-control="select2" data-placeholder="Seçim Yapın">
                              <option value="1">Option 1</option>
                            </select>
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td><label class="form-label fs-8 fw-bolder"
                              for="pw_manuel_ozellikler_elektronik_form">Elektronik Form</label></td>
                          <td>
                            <select id="pw_manuel_ozellikler_elektronik_form"
                              class="form-select form-select-solid fs-8 py-3 px-4 min-w-200px"
                              data-control="select2" data-placeholder="Seçim Yapın">
                              <option value="1">Option 1</option>
                            </select>
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td><label class="form-label fs-8 fw-bolder"
                              for="pw_manuel_ozellikler_bitirme_sekli">Bitirme Şekli</label></td>
                          <td>
                            <select id="pw_manuel_ozellikler_bitirme_sekli"
                              class="form-select form-select-solid fs-8 py-3 px-4 min-w-200px"
                              data-control="select2" data-placeholder="Seçim Yapın">
                              <option value="1">Option 1</option>
                            </select>
                          </td>
                        </tr>
                        <!--end::Row-->
                      </tbody>
                    </table>
                  </div>
                  <!--end::Table-->
                </div>
                <!--end::Col-->

                <!--begin::Col-->
                <div class="col-12 col-lg-6 d-grid">
                  <!--begin::Checkbox wrapper-->
                  <div class="row gy-3 gx-6">
                    <!--begin::Col-->
                    <div class="col-12 col-sm-6 d-flex flex-column gap-3">
                      <!--begin::Checkbox-->
                      <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                        <input class="form-check-input" type="checkbox" value=""
                          id="pw_manuel_ozellikler_notlari_goster" checked="checked" />
                        <label class="form-check-label pw-text-neutral-700 fw-medium"
                          for="pw_manuel_ozellikler_notlari_goster">
                          Notları göster
                        </label>
                      </div>
                      <!--end::Checkbox-->

                      <!--begin::Checkbox-->
                      <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                        <input class="form-check-input" type="checkbox" value=""
                          id="pw_manuel_ozellikler_eklenti_varsa_goster">
                        <label class="form-check-label pw-text-neutral-700 fw-medium"
                          for="pw_manuel_ozellikler_eklenti_varsa_goster" />
                        Eklenti varsa göster
                        </label>
                      </div>
                      <!--end::Checkbox-->

                      <!--begin::Checkbox-->
                      <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                        <input class="form-check-input" type="checkbox" value=""
                          id="pw_manuel_ozellikler_iade_edebilir" checked="checked">
                        <label class="form-check-label pw-text-neutral-700 fw-medium"
                          for="pw_manuel_ozellikler_iade_edebilir" />
                        İade edebilir
                        </label>
                      </div>
                      <!--end::Checkbox-->

                      <!--begin::Checkbox-->
                      <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                        <input class="form-check-input" type="checkbox" value=""
                          id="pw_manuel_ozellikler_sohbet_baslatabilir" checked="checked">
                        <label class="form-check-label pw-text-neutral-700 fw-medium"
                          for="pw_manuel_ozellikler_sohbet_baslatabilir" />
                        Sohbet başlatabilir
                        </label>
                      </div>
                      <!--end::Checkbox-->

                      <!--begin::Checkbox-->
                      <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                        <input class="form-check-input" type="checkbox" value=""
                          id="pw_manuel_ozellikler_kep_gonder">
                        <label class="form-check-label pw-text-neutral-700 fw-medium"
                          for="pw_manuel_ozellikler_kep_gonder" />
                        KEP gönder
                        </label>
                      </div>
                      <!--end::Checkbox-->
                    </div>
                    <!--end::Col-->

                    <!--begin::Col-->
                    <div class="col-12 col-sm-6 d-flex flex-column gap-3">
                      <!--begin::Checkbox-->
                      <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                        <input class="form-check-input" type="checkbox" value=""
                          id="pw_manuel_ozellikler_diyagrami_goster" checked="checked" />
                        <label class="form-check-label pw-text-neutral-700 fw-medium"
                          for="pw_manuel_ozellikler_diyagrami_goster">
                          Diyagramı göster
                        </label>
                      </div>
                      <!--end::Checkbox-->

                      <!--begin::Checkbox-->
                      <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                        <input class="form-check-input" type="checkbox" value=""
                          id="pw_manuel_ozellikler_yonlendirmeyi_goster">
                        <label class="form-check-label pw-text-neutral-700 fw-medium"
                          for="pw_manuel_ozellikler_yonlendirmeyi_goster" />
                        Yönlendirmeyi göster
                        </label>
                      </div>
                      <!--end::Checkbox-->

                      <!--begin::Checkbox-->
                      <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                        <input class="form-check-input" type="checkbox" value=""
                          id="pw_manuel_ozellikler_baska_kullaniciya_atayabilir" checked="checked">
                        <label class="form-check-label pw-text-neutral-700 fw-medium"
                          for="pw_manuel_ozellikler_baska_kullaniciya_atayabilir" />
                        Başka kullanıcıya atayabilir
                        </label>
                      </div>
                      <!--end::Checkbox-->

                      <!--begin::Checkbox-->
                      <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                        <input class="form-check-input" type="checkbox" value=""
                          id="pw_manuel_ozellikler_eyp_olustur">
                        <label class="form-check-label pw-text-neutral-700 fw-medium"
                          for="pw_manuel_ozellikler_eyp_olustur" />
                        EYP oluştur
                        </label>
                      </div>
                      <!--end::Checkbox-->
                    </div>
                    <!--end::Col-->
                  </div>
                  <!--end::Checkbox wrapper-->
                </div>
                <!--end::Col-->
              </div>
              <!--end::Form row-->


              <!--begin::Form row-->
              <div class="row px-4 py-6 border rounded-1 pw-border-stroke">
                <!--begin::Col-->
                <div class="col-12 col-lg-6">
                  <!--begin::Title-->
                  <div class="d-flex align-items-center gap-6">
                    <span class="pw-text-neutral-800 fs-base fw-bold">Yerine Getiren</span>
                    <span class="d-flex align-items-center gap-3">
                      <i class="fa-solid fa-user pw-text-primary-500 fs-base"></i>
                      <span class="text-black fs-8 fw-medium">Turgut İnanbak</span>
                    </span>
                  </div>
                  <!--end::Title-->

                  <!--begin::Checkbox-->
                  <div class="form-check form-check-custom form-check-solid mt-6 mb-2">
                    <input class="form-check-input w-20px h-20px" type="checkbox" value=""
                      id="pw_manuel_ozellikler_kullanici" />
                    <label class="form-check-label pw-text-neutral-700 fs-8" for="pw_manuel_ozellikler_kullanici">
                      Kullanıcı
                    </label>
                  </div>
                  <!--end::Checkbox-->

                  <!--begin::Checkbox group-->
                  <div class="columns-2 columns-md-3">
                    <!--begin::Checkbox-->
                    <div class="form-check form-check-custom form-check-solid">
                      <input class="form-check-input w-20px h-20px" type="checkbox" value="" id="pw_manuel_grup"
                        checked />
                      <label class="form-check-label pw-text-neutral-700 fs-8" for="pw_manuel_grup">
                        Grup
                      </label>
                    </div>
                    <!--end::Checkbox-->

                    <!--begin::Checkbox-->
                    <div class="form-check form-check-custom form-check-solid">
                      <input class="form-check-input w-20px h-20px" type="checkbox" value=""
                        id="pw_manuel_ilk_gelen_alir" checked />
                      <label class="form-check-label pw-text-neutral-700 fs-8" for="pw_manuel_ilk_gelen_alir">
                        İlk Gelen Alır
                      </label>
                    </div>
                    <!--end::Checkbox-->

                    <!--begin::Checkbox-->
                    <div class="form-check form-check-custom form-check-solid">
                      <input class="form-check-input w-20px h-20px" type="checkbox" value=""
                        id="pw_manuel_ozellikler_kullanici" />
                      <label class="form-check-label pw-text-neutral-700 fs-8" for="pw_manuel_ozellikler_kullanici">
                        Kullanıcı
                      </label>
                    </div>
                    <!--end::Checkbox-->
                  </div>
                  <!--end::Checkbox group-->

                  <!--begin::Checkbox-->
                  <div class="form-check form-check-custom form-check-solid mt-2 mb-2">
                    <input class="form-check-input w-20px h-20px" type="checkbox" value=""
                      id="pw_manuel_tip_alani" />
                    <label class="form-check-label pw-text-neutral-700 fs-8" for="pw_manuel_tip_alani">
                      Tip Alanı
                    </label>
                  </div>
                  <!--end::Checkbox-->

                  <!--begin::Checkbox-->
                  <div class="form-check form-check-custom form-check-solid mt-2 mb-2">
                    <input class="form-check-input w-20px h-20px" type="checkbox" value=""
                      id="pw_manuel_organizasyon_semasi" />
                    <label class="form-check-label pw-text-neutral-700 fs-8" for="pw_manuel_organizasyon_semasi">
                      Organizasyon Şeması
                    </label>
                  </div>
                  <!--end::Checkbox-->

                  <!--begin::Table-->
                  <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                    <table
                      class="table w-min-content w-100 align-middle gy-2 gx-3 pw-text-neutral-800 fw-bold fs-8">
                      <tbody>
                        <!--begin::Row-->
                        <tr>
                          <td>
                            <!--begin::Checkbox-->
                            <div class="form-check form-check-custom form-check-solid mt-2 mb-2">
                              <input class="form-check-input w-20px h-20px" type="checkbox" value=""
                                id="pw_manuel_ozellikler_bilet_kullanicisi" />
                              <label class="form-check-label pw-text-neutral-700 fs-9 fw-semibold"
                                for="pw_manuel_ozellikler_bilet_kullanicisi">
                                Bilet Kullanıcısı
                              </label>
                            </div>
                            <!--end::Checkbox-->
                          </td>
                          <td>
                            <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" />
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td><label class="form-label fs-9 fw-semibold" for="pw_manuel_ozellikler_link_tanimi">Link
                              Tanımı</label></td>
                          <td>
                            <input type="text" class="form-control form-control-solid py-3 px-4 fs-8"
                              id="pw_manuel_ozellikler_link_tanimi" />
                          </td>
                        </tr>
                        <!--end::Row-->
                      </tbody>
                    </table>
                  </div>
                  <!--end::Table-->
                </div>
                <!--end::Col-->

                <!--begin::Col-->
                <div class="col-12 col-lg-6 ps-6 ps-lg-10">
                  <!--begin::Card-->
                  <div class="d-flex flex-column gap-4 px-4 py-3 border rounded pw-border-stroke">
                    <!--begin::Search wrapper-->
                    <div id="kt_docs_search_handler_basic" class="position-relative w-100 mb-3"
                      data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="true"
                      data-kt-search-layout="inline">

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
                        <input type="text" class="form-control pw-input-stroke py-2 ps-9 pe-2 fs-8" name="search"
                          value="" placeholder="Ara" data-kt-search-element="input">
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

                    <!--begin::Users-->
                    <div class="d-flex flex-column gap-4">
                      <!--begin::Item-->
                      <div class="d-flex align-items-center gap-2">
                        <i class="fa-solid fa-gears pw-text-neutral-500 fs-6"></i>
                        <span class="text-black fs-8">Önceki Kullanıcı</span>
                      </div>
                      <!--end::Item-->

                      <!--begin::Item-->
                      <div class="d-flex align-items-center gap-2">
                        <i class="fa-solid fa-gears pw-text-neutral-500 fs-6"></i>
                        <span class="text-black fs-8">Önceki Kullanıcı</span>
                      </div>
                      <!--end::Item-->

                      <!--begin::Item-->
                      <div class="d-flex align-items-center gap-2">
                        <i class="fa-solid fa-gears pw-text-neutral-500 fs-6"></i>
                        <span class="text-black fs-8">Önceki Kullanıcı</span>
                      </div>
                      <!--end::Item-->

                      <!--begin::Item-->
                      <div class="d-flex align-items-center gap-2">
                        <i class="fa-solid fa-user pw-text-neutral-500 fs-6"></i>
                        <span class="text-black fs-8">Önceki Kullanıcı</span>
                      </div>
                      <!--end::Item-->

                      <!--begin::Item-->
                      <div class="d-flex align-items-center gap-2">
                        <i class="fa-solid fa-user pw-text-neutral-500 fs-6"></i>
                        <span class="text-black fs-8">Önceki Kullanıcı</span>
                      </div>
                      <!--end::Item-->

                      <!--begin::Item-->
                      <div class="d-flex align-items-center gap-2">
                        <i class="fa-solid fa-user pw-text-neutral-500 fs-6"></i>
                        <span class="text-black fs-8">Önceki Kullanıcı</span>
                      </div>
                      <!--end::Item-->
                    </div>
                    <!--end::Users-->
                  </div>
                  <!--end::Card-->
                </div>
                <!--end::Col-->
              </div>
              <!--end::Form row-->


              <!--begin::Form row-->
              <div class="row px-4 py-6 border rounded-1 pw-border-stroke">
                <!--begin::Title-->
                <h3 class="pw-text-neutral-800 fs-base fw-bold mb-3">Zamanlayıcı</h3>
                <span class="text-black fs-8 fw-medium">Tetiklenme Süresi</span>
                <!--end::Title-->

                <!--begin::Item group-->
                <div class="d-grid grid-cols-1 grid-cols-lg-2 align-items-start gap-10 my-6">
                  <div class="d-grid grid-cols-1 grid-cols-sm-2 align-items-start">
                    <!--begin::Radio-->
                    <div class="form-check form-check-custom form-check-solid">
                      <input class="form-check-input w-20px h-20px" type="radio" value=""
                        id="pw_manuel_ozellikler_zamanlayici" name="ozellikler_zamanlayici" />
                      <label class="form-check-label pw-text-neutral-700 fs-8"
                        for="pw_manuel_ozellikler_zamanlayici">
                        Sabit
                      </label>
                    </div>
                    <!--end::Radio-->

                    <div class="">
                      <!--begin::Radio-->
                      <div class="form-check form-check-custom form-check-solid mb-2">
                        <input class="form-check-input w-20px h-20px" type="radio" value=""
                          id="pw_manuel_ozellikler_aagz" name="ozellikler_zamanlayici_item" />
                        <label class="form-check-label pw-text-neutral-700 fs-8" for="pw_manuel_ozellikler_aagz">
                          Akış Adımına geliş zamanı
                        </label>
                      </div>
                      <!--end::Radio-->

                      <!--begin::Radio-->
                      <div class="form-check form-check-custom form-check-solid">
                        <input class="form-check-input w-20px h-20px" type="radio" value=""
                          id="pw_manuel_ozellikler_aakaz" name="ozellikler_zamanlayici_item" />
                        <label class="form-check-label pw-text-neutral-700 fs-8" for="pw_manuel_ozellikler_aakaz">
                          Akış Adımının kullanıcıya atanma zamanı
                        </label>
                      </div>
                      <!--end::Radio-->
                    </div>

                    <!--begin::Radio-->
                    <div class="form-check form-check-custom form-check-solid">
                      <input class="form-check-input w-20px h-20px" type="radio" value=""
                        id="pw_manuel_ozellikler_tip_alani" name="ozellikler_zamanlayici" />
                      <label class="form-check-label pw-text-neutral-700 fs-8" for="pw_manuel_ozellikler_tip_alani">
                        Tip Alanı
                      </label>
                    </div>
                    <!--end::Radio-->
                  </div>

                  <!--begin::Checkbox-->
                  <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                    <input class="form-check-input" type="checkbox" value="" id="pw_manuel_ozellikler_tugy" />
                    <label class="form-check-label pw-text-neutral-700 fw-medium" for="pw_manuel_ozellikler_tugy">
                      Tip üzerinde alan güncelleme yap
                    </label>
                  </div>
                  <!--end::Checkbox-->
                </div>
                <!--end::Item group-->

                <!--begin::Input group-->
                <div class="d-flex align-items-center gap-3">
                  <input type="number" class="form-control form-control-solid py-3 px-4 fs-8 mw-100px" min="0" />
                  <span class="text-black fs-8">Dk.</span>
                </div>
                <!--end::Input group-->
              </div>
              <!--end::Form row-->

              <!--begin::Form row-->
              <div class="row px-4 py-6 border rounded-1 pw-border-stroke">
                <!--begin::Table-->
                <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                  <table
                    class="table w-min-content w-100 align-middle gy-2 gx-3 pw-text-neutral-700 fw-bold fs-8 mw-300px">
                    <tbody>
                      <!--begin::Row-->
                      <tr>
                        <td><span class="pw-text-neutral-800 fs-base fw-bold" style="text-wrap: nowrap">KPI
                            Ölçüm</span></td>
                        <td>
                          <!--begin::Checkbox-->
                          <div class="form-check form-check-custom form-check-solid">
                            <input class="form-check-input w-20px h-20px" type="checkbox" value=""
                              id="pw_manuel_ozellikler_aktif" />
                            <label class="form-check-label pw-text-neutral-700 fs-8"
                              for="pw_manuel_ozellikler_aktif">
                              Aktif
                            </label>
                          </div>
                          <!--end::Checkbox-->
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td><label class="form-label fs-9 fw-semibold pw-text-neutral-700"
                            for="pw_manuel_ozellikler_hedef_sure">Hedef Süre</label></td>
                        <td>
                          <div class="d-flex align-items-center gap-3">
                            <input type="number" class="form-control form-control-solid py-3 px-4 fs-8"
                              id="pw_manuel_ozellikler_hedef_sure" min="0" />
                            <span class="fs-8 text-black fw-regular">Sn.</span>
                          </div>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td><label class="form-label fs-9 fw-semibold pw-text-neutral-700"
                            for="pw_manuel_ozellikler_ikon">İkon</label></td>
                        <td>
                          <input type="number" class="form-control form-control-solid py-3 px-4 fs-8"
                            id="pw_manuel_ozellikler_ikon" min="0" />
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td><label class="form-label fs-9 fw-semibold pw-text-neutral-700"
                            for="pw_manuel_ozellikler_tolerans">Tolerans</label></td>
                        <td>
                          <input type="number" class="form-control form-control-solid py-3 px-4 fs-8"
                            id="pw_manuel_ozellikler_tolerans" min="0" />
                        </td>
                      </tr>
                      <!--end::Row-->
                    </tbody>
                  </table>
                </div>
                <!--end::Table-->
              </div>
              <!--end::Form row-->
            </form>
            <!--end::Form-->
          </div>
          <!--end::Ozellikler content-->

          <!--begin::Bilgi content-->
          <div class="tab-pane fade" id="pw_tab_pane_manuel_bilgi" role="tabpanel">
            <!--begin::Form-->
            <form class="d-flex flex-column gap-3">
              <!--begin::Form row-->
              <div class="row px-4 py-6 border rounded-1 pw-border-stroke">
                <!--begin::Select-->
                <div class="d-flex gap-8 gap-lg-14">
                  <label class="form-label fs-8 fw-bolder" for="pw_manuel_bilgi_bilge_formu">Bilge Formu</label>
                  <div class="mw-250px w-100">
                    <select id="pw_manuel_bilgi_bilge_formu" class="form-select form-select-solid fs-8 py-3 px-4"
                      data-control="select2" data-placeholder="Seçim Yapın">
                      <option value="1">Option 1</option>
                    </select>
                  </div>
                </div>
                <!--end::Select-->

                <!--begin::Sonlama-->
                <div class="d-flex flex-column gap-4">
                  <!--begin::Title-->
                  <h4 class="pw-text-neutral-700 fs-8 fw-bold">Sonlama</h4>
                  <!--end::Title-->

                  <!--begin::Input group-->
                  <div class="d-flex flex-column gap-2">
                    <!--begin::Radio-->
                    <div class="form-check form-check-custom form-check-solid">
                      <input class="form-check-input w-20px h-20px" type="radio" value=""
                        id="pw_manuel_bilgi_sonlama_1" name="pw_manuel_bilgi_sonlama" />
                      <label class="form-check-label pw-text-neutral-700 fs-8" for="pw_manuel_bilgi_sonlama_1">
                        Adım Sonunda
                      </label>
                    </div>
                    <!--end::Radio-->

                    <!--begin::Radio-->
                    <div class="form-check form-check-custom form-check-solid">
                      <input class="form-check-input w-20px h-20px" type="radio" value=""
                        id="pw_manuel_bilgi_sonlama_2" name="pw_manuel_bilgi_sonlama" />
                      <label class="form-check-label pw-text-neutral-700 fs-8" for="pw_manuel_bilgi_sonlama_2">
                        Akış Sonunda
                      </label>
                    </div>
                    <!--end::Radio-->

                    <!--begin::Radio-->
                    <div class="form-check form-check-custom form-check-solid">
                      <input class="form-check-input w-20px h-20px" type="radio" value=""
                        id="pw_manuel_bilgi_sonlama_3" name="pw_manuel_bilgi_sonlama" />
                      <label class="form-check-label pw-text-neutral-700 fs-8" for="pw_manuel_bilgi_sonlama_3">
                        Bilgilendirme Bitiş Adımında
                      </label>
                    </div>
                    <!--end::Radio-->

                    <!--begin::Checkbox-->
                    <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                      <input class="form-check-input" type="checkbox" value="" id="pw_manuel_bilgi_sonlama_4"
                        checked="checked" />
                      <label class="form-check-label pw-text-neutral-700 fw-medium" for="pw_manuel_bilgi_sonlama_4">
                        Kullanıcı Sonlandırabilir
                      </label>
                    </div>
                    <!--end::Checkbox-->
                  </div>
                  <!--end::Input group-->
                </div>
                <!--end::Sonlama-->
              </div>
              <!--end::Form row-->

              <!--begin::Form row-->
              <div class="row px-4 py-6 border rounded-1 pw-border-stroke justify-content-lg-between">
                <!--begin::Col-->
                <div class="col-12 col-lg-auto">
                  <!--begin::Sonlama-->
                  <div class="d-inline-flex flex-column gap-4">
                    <!--begin::Title-->
                    <h4 class="pw-text-neutral-700 fs-8 fw-bold">Sonlama</h4>
                    <!--end::Title-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column gap-2">
                      <!--begin::Radio-->
                      <div class="form-check form-check-custom form-check-solid">
                        <input class="form-check-input w-20px h-20px" type="radio" value=""
                          id="pw_manuel_bilgi_sonlama_1_1" name="pw_manuel_bilgi_sonlama_1" />
                        <label class="form-check-label pw-text-neutral-700 fs-8" for="pw_manuel_bilgi_sonlama_1">
                          Kullanıcılar
                        </label>
                      </div>
                      <!--end::Radio-->

                      <!--begin::Radio-->
                      <div class="form-check form-check-custom form-check-solid">
                        <input class="form-check-input w-20px h-20px" type="radio" value=""
                          id="pw_manuel_bilgi_sonlama_1_2" name="pw_manuel_bilgi_sonlama_1" />
                        <label class="form-check-label pw-text-neutral-700 fs-8" for="pw_manuel_bilgi_sonlama_2">
                          Tip Alanı
                        </label>
                      </div>
                      <!--end::Radio-->

                      <!--begin::Radio-->
                      <div class="form-check form-check-custom form-check-solid">
                        <input class="form-check-input w-20px h-20px" type="radio" value=""
                          id="pw_manuel_bilgi_sonlama_1_3" name="pw_manuel_bilgi_sonlama_1" />
                        <label class="form-check-label pw-text-neutral-700 fs-8" for="pw_manuel_bilgi_sonlama_3">
                          Organizasyon Şeması
                        </label>
                      </div>
                      <!--end::Radio-->
                    </div>
                    <!--end::Input group-->
                  </div>
                  <!--end::Sonlama-->
                </div>
                <!--end::Col-->

                <!--begin::Col-->
                <div class="col-12 col-lg-7">
                  <div class="d-flex gap-5">
                    <!--begin::Tipler tablosu-->
                    <div class="table-responsive overflow-x-auto rounded w-100 border pw-border-stroke py-3 px-4">
                      <!--begin::Table-->
                      <table class="table align-middle w-max-content min-w-100 gy-2 gx-4">
                        <tbody>
                          <!--begin::Row-->
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-2 cursor-pointer">
                                <i class="fa-solid fa-gears fs-6 pw-text-neutral-500"></i>
                                <span class="text-black fs-8">Önceki Kullanıcı</span>
                              </div>
                            </td>
                          </tr>
                          <!--end::Row-->

                          <!--begin::Row-->
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-2 cursor-pointer">
                                <i class="fa-solid fa-gears fs-6 pw-text-neutral-500"></i>
                                <span class="text-black fs-8">Önceki Kullanıcı</span>
                              </div>
                            </td>
                          </tr>
                          <!--end::Row-->

                          <!--begin::Row-->
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-2 cursor-pointer">
                                <i class="fa-solid fa-gears fs-6 pw-text-neutral-500"></i>
                                <span class="text-black fs-8">Önceki Kullanıcı</span>
                              </div>
                            </td>
                          </tr>
                          <!--end::Row-->

                          <!--begin::Row-->
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-2 cursor-pointer">
                                <i class="fa-solid fa-user fs-6 pw-text-neutral-500"></i>
                                <span class="text-black fs-8">Önceki Kullanıcı</span>
                              </div>
                            </td>
                          </tr>
                          <!--end::Row-->
                        </tbody>
                      </table>
                      <!--end::Table-->
                    </div>
                    <!--end::Tipler tablosu-->

                    <!--begin::Action buttons-->
                    <div class="d-flex flex-column gap-3">
                      <button
                        class="btn btn-icon bg-white btn-icon-primary btn-active-primary w-30px h-30px pw-shadow-sm">
                        <i class="fa-solid fa-chevron-left"></i>
                      </button>

                      <button
                        class="btn btn-icon bg-white btn-icon-primary btn-active-primary w-30px h-30px pw-shadow-sm">
                        <i class="fa-solid fa-chevron-right"></i>
                      </button>

                      <button
                        class="btn btn-icon bg-white btn-icon-primary btn-active-primary w-30px h-30px pw-shadow-sm">
                        <i class="fa-solid fa-chevrons-left"></i>
                      </button>
                    </div>
                    <!--end::Action buttons-->

                    <!--begin::Tipler tablosu-->
                    <div class="table-responsive overflow-x-auto rounded w-100 border pw-border-stroke py-3 px-4">
                      <!--begin::Table-->
                      <table class="table align-middle w-max-content min-w-100 gy-2 gx-4">
                        <tbody>
                          <!--begin::Row-->
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-2 cursor-pointer">
                                <span class="text-black fs-8">Projeler</span>
                              </div>
                            </td>
                          </tr>
                          <!--end::Row-->
                        </tbody>
                      </table>
                      <!--end::Table-->
                    </div>
                    <!--end::Tipler tablosu-->
                  </div>
                </div>
                <!--end::Col-->
              </div>
              <!--end::Form row-->

              <!--begin::Form row-->
              <div class="row px-4 py-6 border rounded-1 pw-border-stroke">
                <!--begin::Col-->
                <div class="col-12 mb-6">
                  <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                    <input class="form-check-input" type="checkbox" value="" id="pw_manuel_bilgi_sonlama_5"
                      checked="checked">
                    <label class="form-check-label pw-text-neutral-700 fw-medium" for="pw_manuel_bilgi_sonlama_5">
                      Elektronik Posta Gönderilsin
                    </label>
                  </div>
                </div>
                <!--end::Col-->

                <!--begin::Col-->
                <div class="col-12">
                  <!--begin::Form table-->
                  <div class="table-responsive overflow-x-auto rounded w-100">
                    <!--begin::Table-->
                    <table class="table w-max-content min-w-100 gy-2 gx-4">
                      <tbody>
                        <!--begin::Row-->
                        <tr>
                          <td><label class="form-label fs-8 fw-bolder" for="pw_manuel_bilgi_hesap_adi">Hesap
                              Adı</label></td>
                          <td>
                            <select id="pw_manuel_bilgi_hesap_adi"
                              class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2"
                              data-placeholder="Seçim Yapın">
                              <option value="1">Option 1</option>
                            </select>
                          </td>
                          <td><label class="form-label fs-8 fw-bolder" for="pw_manuel_bilgi_taslak_adi">Taslak
                              Adı</label></td>
                          <td>
                            <select id="pw_manuel_bilgi_taslak_adi"
                              class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2"
                              data-placeholder="Seçim Yapın">
                              <option value="1">Option 1</option>
                            </select>
                          </td>
                        </tr>
                        <!--begin::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td><label class="form-label fs-8 fw-bolder" for="pw_manuel_bilgi_konu">Konu</label></td>
                          <td colspan="3">
                            <input type="text" class="form-control form-control-solid py-3 px-4 fs-8 mb-4"
                              id="pw_manuel_bilgi_konu" />
                            <div id="pw_manuel_bilgi_konu_textarea"></div>
                          </td>
                        </tr>
                        <!--end::Row-->
                      </tbody>
                    </table>
                    <!--end::Table-->
                  </div>
                  <!--end::Form table-->
                </div>
                <!--end::Col-->
              </div>
              <!--end::Form row-->
            </form>
            <!--end::Form-->
          </div>
          <!--end::Bilgi content-->

          <!--begin::Elektronik posta content-->
          <div class="tab-pane fade" id="pw_tab_pane_manuel_elektronik_posta" role="tabpanel">
            <!--begin::Form-->
            <form class="d-flex flex-column gap-3">
              <!--begin::Checkbox-->
              <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                <input class="form-check-input" type="checkbox" value="" id="pw_manuel_eposta_aktif"
                  checked="checked">
                <label class="form-check-label pw-text-neutral-700 fw-medium" for="pw_manuel_eposta_aktif">
                  Aktif
                </label>
              </div>
              <!--end::Checkbox-->

              <!--begin::Form row-->
              <div class="row px-4 py-6 border rounded-1 pw-border-stroke">
                <!--begin::Col-->
                <div class="col-12 col-lg-6">
                  <!--begin::Form table-->
                  <div class="table-responsive overflow-x-auto rounded w-100">
                    <!--begin::Table-->
                    <table class="table w-max-content min-w-100 gy-3 gx-4">
                      <tbody>
                        <!--begin::Row-->
                        <tr>
                          <td><label class="form-label fs-8 fw-bolder" for="pw_manuel_eposta_hesap_adi">Hesap
                              Adı</label></td>
                          <td>
                            <select id="pw_manuel_eposta_hesap_adi"
                              class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2"
                              data-placeholder="Seçim Yapın">
                              <option value="1">Option 1</option>
                            </select>
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td><label class="form-label fs-8 fw-bolder" for="pw_manuel_eposta_taslak_adi">Taslak
                              Adı</label></td>
                          <td>
                            <select id="pw_manuel_eposta_taslak_adi"
                              class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2"
                              data-placeholder="Seçim Yapın">
                              <option value="1">Option 1</option>
                            </select>
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td colspan="2">
                            <!--begin::Checkbox-->
                            <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                              <input class="form-check-input" type="checkbox" value="" id="pw_manuel_eposta_1" />
                              <label class="form-check-label pw-text-neutral-700 fw-medium"
                                for="pw_manuel_eposta_1">
                                Ekleri Gönder
                              </label>
                            </div>
                            <!--end::Checkbox-->
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td colspan="2">
                            <!--begin::Checkbox-->
                            <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                              <input class="form-check-input" type="checkbox" value="" id="pw_manuel_eposta_2" />
                              <label class="form-check-label pw-text-neutral-700 fw-medium"
                                for="pw_manuel_eposta_1">
                                Şifresiz Girişe İzin Ver
                              </label>
                            </div>
                            <!--end::Checkbox-->
                          </td>
                        </tr>
                        <!--end::Row-->
                      </tbody>
                    </table>
                  </div>
                </div>
                <!--end::Col-->

                <!--begin::Col-->
                <div class="col-12 col-lg-6">
                  <!--begin::Form table-->
                  <div class="table-responsive overflow-x-auto rounded w-100">
                    <!--begin::Table-->
                    <table class="table w-max-content min-w-100 gy-3 gx-4">
                      <tbody>
                        <!--begin::Row-->
                        <tr>
                          <td><label class="form-label fs-8 fw-bolder" for="pw_manuel_bilgi_kime">Kime</label></td>
                          <td>
                            <div class="position-relative">
                              <span class="position-absolute start-0 top-50 translate-middle-y ms-4"><i
                                  class="fa-solid fa-user pw-text-neutral-500"></i></span>
                              <input type="text"
                                class="form-control form-control-solid py-3 ps-10 pe-4 fs-8 mb-4 pw-text-neutral-500"
                                id="pw_manuel_bilgi_kime" value="Turgut İnanbak" disabled />
                            </div>
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td>
                            <!--begin::Radio-->
                            <div class="form-check form-check-custom form-check-solid">
                              <input class="form-check-input w-20px h-20px" type="radio" value=""
                                id="pw_manuel_eposta_1_1" name="pw_manuel_eposta_1" />
                              <label class="form-check-label pw-text-neutral-700 fs-8" for="pw_manuel_eposta_1_1">
                                Sahibi
                              </label>
                            </div>
                            <!--end::Radio-->
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td>
                            <!--begin::Radio-->
                            <div class="form-check form-check-custom form-check-solid">
                              <input class="form-check-input w-20px h-20px" type="radio" value=""
                                id="pw_manuel_eposta_1_2" name="pw_manuel_eposta_1" checked="checked" />
                              <label class="form-check-label pw-text-neutral-700 fs-8" for="pw_manuel_eposta_1_2">
                                Tip Alanı
                              </label>
                            </div>
                            <!--end::Radio-->
                          </td>
                          <td align="right">
                            <div class="mw-250px w-100">
                              <select id="pw_manuel_eposta_1_2" class="form-select form-select-solid fs-8 py-3 px-4"
                                data-control="select2" data-placeholder="Seçim Yapın">
                                <option value="1">Option 1</option>
                              </select>
                            </div>
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td colspan="2">
                            <!--begin::Checkbox-->
                            <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                              <input class="form-check-input" type="checkbox" value="" id="pw_manuel_eposta_akye">
                              <label class="form-check-label pw-text-neutral-700 fw-medium"
                                for="pw_manuel_eposta_akye">
                                Akış Kısa Yoluna Ekle
                              </label>
                            </div>
                            <!--end::Checkbox-->
                          </td>
                        </tr>
                        <!--end::Row-->
                      </tbody>
                    </table>
                  </div>
                </div>
                <!--end::Col-->
              </div>
              <!--end::Form row-->

              <!--begin::Form row-->
              <div class="row px-4 py-6 border rounded-1 pw-border-stroke">
                <!--begin::Form table-->
                <div class="table-responsive overflow-x-auto rounded w-100">
                  <!--begin::Table-->
                  <table class="table w-max-content min-w-100 gy-3 gx-4">
                    <tbody>
                      <!--begin::Row-->
                      <tr>
                        <td><label class="form-label fs-8 fw-bolder" for="pw_manuel_eposta_konu">Konu</label></td>
                        <td>
                          <input type="text" class="form-control form-control-solid py-3 ps-10 pe-4 fs-8 mb-4"
                            id="pw_manuel_eposta_konu" />
                          <div id="pw_manuel_eposta_konu_textarea"></div>
                        </td>
                      </tr>
                      <!--end::Row-->
                    </tbody>
                  </table>
                  <!--end::Table-->
                </div>
                <!--end::Form table-->
              </div>
              <!--end::Form row-->

              <!--begin::Form row-->
              <div class="row px-4 py-6 border rounded-1 pw-border-stroke">
                <!--begin::Form table-->
                <div class="table-responsive overflow-x-auto rounded w-100">
                  <!--begin::Table-->
                  <table class="table w-max-content min-w-100 gy-3 gx-4">
                    <tbody>
                      <!--begin::Row-->
                      <tr>
                        <td><label class="form-label fs-8 fw-bolder" for="pw_manuel_eposta_hesap_adi_2">Hesap
                            Adı</label></td>
                        <td>
                          <div class="d-flex align-items-center gap-8">
                            <div class="mw-200px w-100">
                              <select id="pw_manuel_eposta_hesap_adi_2"
                                class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2"
                                data-placeholder="Seçim Yapın">
                                <option value="1">Option 1</option>
                              </select>
                            </div>

                            <a href="/tanimlamalar/kullanicilar/ad-tanimlari/yeni-ad-ekle/#"
                              class="btn btn-outline btn-outline-primary btn-active-light-primary px-4 py-2 fs-9">
                              <i class="fa-solid fa-plus"></i>
                              Aksiyon
                            </a>
                          </div>
                        </td>
                      </tr>
                      <!--end::Row-->
                    </tbody>
                  </table>
                  <!--end::Table-->
                </div>
                <!--end::Form table-->

                <!--begin::Form tabs-->
                <div class="nav nav-tabs nav-line-tabs flex-nowrap w-max-content flex-grow-1 fs-6 gap-6"
                  role="tablist">
                  <!--begin::Item-->
                  <li class="nav-item" role="presentation">
                    <a class="nav-link mx-0 py-3 px-2 fs-base rounded-0 fw-medium active" data-bs-toggle="tab"
                      href="#pw_tab_pane_manuel_eposta_statik_aksiyonlar" aria-selected="false" role="tab"
                      tabindex="-1">Statik Aksiyonlar</a>
                  </li>
                  <!--end::Item-->

                  <!--begin::Item-->
                  <li class="nav-item" role="presentation">
                    <a class="nav-link mx-0 py-3 px-2 fs-base rounded-0 fw-medium" data-bs-toggle="tab"
                      href="#pw_tab_pane_manuel_eposta_tablo_aksiyonlar" aria-selected="false" role="tab"
                      tabindex="-1">Tablo Aksiyonları</a>
                  </li>
                  <!--end::Item-->
                </div>
                <!--end::Form tabs-->

                <!--begin::Form tab contents-->
                <div class="tab-content pw-dashboard-tab-content mt-6" id="manuelEpostaContents">
                  <!--begin::Statik aksiyonlar content-->
                  <div class="tab-pane fade active show" id="pw_tab_pane_manuel_eposta_statik_aksiyonlar"
                    role="tabpanel">
                    <div class="table-responsive overflow-x-auto rounded w-100">
                      <!--begin::Table-->
                      <table
                        class="table table-row-bordered border pw-dark-bg-table pw-table-border-gray pw-table-border-gray table-rounded align-middle w-max-content min-w-100 gy-2 gx-9 gs-9">
                        <thead>
                          <tr class="fw-semibold fs-8 pw-text-neutral-700 pw-bg-neutral-100">
                            <th class="py-3">Aksiyon</th>
                            <th class="py-3">Değeri</th>
                            <th class="py-3">Açıklama</th>
                          </tr>
                        </thead>
                        <tbody>
                          <!--begin::Row-->
                          <tr class="fw-medium pw-text-neutral-700 fs-8">
                            <td>Aksiyon 1</td>
                          </tr>
                          <!--end::Row-->

                          <!--begin::Row-->
                          <tr class="fw-medium pw-text-neutral-700 fs-8">
                            <td>Aksiyon 1</td>
                          </tr>
                          <!--end::Row-->
                        </tbody>
                      </table>
                      <!--end::Table-->
                    </div>
                  </div>
                  <!--end::Statik aksiyonlar content-->

                  <!--begin::Tablo aksiyonları content-->
                  <div class="tab-pane fade" id="pw_tab_pane_manuel_eposta_tablo_aksiyonlar" role="tabpanel">
                    <!--begin::Row-->
                    <div class="row">
                      <!--begin::Col-->
                      <div class="col-12 col-lg-6">
                        <!--begin::Form table-->
                        <div class="table-responsive overflow-x-auto rounded w-100">
                          <!--begin::Table-->
                          <table class="table w-max-content min-w-100 gy-3 gx-4">
                            <tbody>
                              <!--begin::Row-->
                              <tr>
                                <td><label class="form-label fs-8 fw-bolder"
                                    for="pw_manuel_eposta_ta_tablo">Tablo</label></td>
                                <td>
                                  <select id="pw_manuel_eposta_ta_tablo"
                                    class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2"
                                    data-placeholder="Seçim Yapın">
                                    <option value="1">Option 1</option>
                                  </select>
                                </td>
                              </tr>
                              <!--end::Row-->

                              <!--begin::Row-->
                              <tr>
                                <td><label class="form-label fs-8 fw-bolder"
                                    for="pw_manuel_eposta_ta_baslik_alani">Başlık Alanı</label></td>
                                <td>
                                  <select id="pw_manuel_eposta_ta_baslik_alani"
                                    class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2"
                                    data-placeholder="Seçim Yapın">
                                    <option value="1">Option 1</option>
                                  </select>
                                </td>
                              </tr>
                              <!--end::Row-->

                              <!--begin::Row-->
                              <tr>
                                <td><label class="form-label fs-8 fw-bolder"
                                    for="pw_manuel_eposta_ta_aciklama">Açıklama</label></td>
                                <td>
                                  <select id="pw_manuel_eposta_ta_aciklama"
                                    class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2"
                                    data-placeholder="Seçim Yapın">
                                    <option value="1">Option 1</option>
                                  </select>
                                </td>
                              </tr>
                              <!--end::Row-->
                            </tbody>
                          </table>
                          <!--end::Table-->
                        </div>
                        <!--end::Form table-->
                      </div>
                      <!--end::Col-->

                      <!--begin::Col-->
                      <div class="col-12 col-lg-6 border pw-border-stroke"></div>
                      <!--end::Col-->
                    </div>
                    <!--end::Row-->
                  </div>
                  <!--end::Tablo aksiyonları content-->
                </div>
                <!--end::Form tab contents-->
              </div>
              <!--end::Form row-->
            </form>
            <!--end::Form-->
          </div>
          <!--end::Elektronik posta content-->
        </div>
        <!--end::Tab contents-->
      </div>
    </div>
  </div>
</div>
<!-- end::Modal -->

<!-- begin::Modal -->
<div class="modal fade" tabindex="-1" id="otomatik_adim_genel">
  <div class="modal-dialog modal-dialog-centered modal-lg mw-950px">
    <div class="modal-content">
      <div class="modal-header border pb-3">
        <h3 class="modal-title fs-5">Özellikler - X</h3>

        <!--begin::Close-->
        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
          <i class="fa-solid fa-xmark fs-5"></i>
        </div>
        <!--end::Close-->
      </div>

      <div class="modal-body">
        <!--begin::Title-->
        <div class="d-flex align-items-center justify-content-between gap-3 mb-8">
          <ul class="nav nav-tabs nav-line-tabs mb-5 fs-6 border-0 gap-6">
            <li class="nav-item mb-0">
              <a class="nav-link fw-bold active" data-bs-toggle="tab" href="#genel">Genel</a>
            </li>
            <li class="nav-item mb-0">
              <a class="nav-link" data-bs-toggle="tab" href="#method">Method</a>
            </li>
          </ul>

          <!--begin::Help button-->
          <button class="btn p-0" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse"
            data-bs-placement="bottom" data-bs-original-title="Help center" data-kt-initialized="1">
            <i class="fa-regular fa-circle-question"></i>
          </button>
          <!--end::Help button-->
        </div>
        <!--end::Title-->
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="genel" role="tabpanel">
            <!--begin::Form-->
            <form>
              <!--begin::Table-->
              <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fw-bold fs-7">
                  <tbody>
                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder">Aktivite No</label></td>
                      <td>AA000000000000000</td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_aktivite_adi">Aktivite
                          Adı</label></td>
                      <td>
                        <input type="text" class="form-control form-control-solid py-3 px-4 fs-8"
                          id="pw_basla_aktivite_adi" name="pw_basla_aktivite_adi" value="Başla" required disabled />
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_hata_kullanicisi">Hata
                          Kullanıcısı</label></td>
                      <td>
                        <select id="pw_basla_hata_kullanicisi" class="form-select form-select-solid fs-8 py-3 px-4"
                          data-control="select2" data-placeholder="Seçim Yapın">
                          <option value="1">Option 1</option>
                        </select>
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_cerceve_rengi">Çerçeve
                          Rengi</label></td>
                      <td>
                        <!--begin::Color picker-->
                        <div class="pw-color-picker-group">
                          <input type="color" class="pw-color-picker" value="#3699FF" id="pw_basla_cerceve_rengi"
                            name="pw_basla_cerceve_rengi" />
                          <label class="icon pw-shadow-sm" for="pw_basla_cerceve_rengi"
                            data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click"
                            title="Çerçeve rengi">
                            <i class="fa-solid fa-pen pw-text-neutral-300 fs-10 pe-0"></i>
                          </label>
                        </div>
                        <!--end::Color picker-->
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_font_rengi">Font Rengi</label>
                      </td>
                      <td>
                        <!--begin::Color picker-->
                        <div class="pw-color-picker-group">
                          <input type="color" class="pw-color-picker" value="#3699FF" id="pw_basla_font_rengi"
                            name="pw_basla_font_rengi" />
                          <label class="icon pw-shadow-sm" for="pw_basla_font_rengi"
                            data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click"
                            title="Font rengi">
                            <i class="fa-solid fa-pen pw-text-neutral-300 fs-10 pe-0"></i>
                          </label>
                        </div>
                        <!--end::Color picker-->
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_arka_plan_rengi">Arka Plan
                          Rengi</label></td>
                      <td>
                        <!--begin::Color picker-->
                        <div class="pw-color-picker-group">
                          <input type="color" class="pw-color-picker" value="#3699FF" id="pw_basla_arka_plan_rengi"
                            name="pw_basla_arka_plan_rengi" />
                          <label class="icon pw-shadow-sm" for="pw_basla_arka_plan_rengi"
                            data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click"
                            title="Arka plan rengi">
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
                        <label class="form-label fs-base fw-bolder" for="pw_basla_aciklama">Açıklama</label>
                      </td>
                      <td>
                        <div id="pw_otomatik_adim_aciklama"></div>
                      </td>
                    </tr>
                    <!--end::Row-->
                  </tbody>
                </table>
              </div>
              <!--end::Table-->
            </form>
            <!--end::Form-->
          </div>
          <div class="tab-pane fade" id="method" role="tabpanel">
            <!--begin::Form-->
            <form>
              <!--begin::Table-->
              <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fw-bold fs-7">
                  <tbody>
                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder">Metod Adı</label></td>
                      <td>
                        <select id="method_adi" class="form-select form-select-solid fs-8 py-3 px-4"
                          data-control="select2" data-placeholder="Seçim Yapın">
                          <option value="1" selected>Hatırlatma Maili</option>
                        </select>
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_aktivite_adi">Parameters</label>
                      </td>

                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_cabinet_path">CABINET_PATH</label>
                      </td>
                      <td>
                        <input type="text" class="form-control form-control-solid py-3 px-4 fs-8"
                          id="pw_cabinet_path" name="pw_cabinet_path" required />
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder"
                          for="pw_card_folder_name">CARD_FOLDER_NAME</label></td>
                      <td>
                        <input type="text" class="form-control form-control-solid py-3 px-4 fs-8"
                          id="pw_card_folder_name" name="pw_card_folder_name" required />
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_file_card_name">FILE_CARD_NAME</label>
                      </td>
                      <td>
                        <input type="text" class="form-control form-control-solid py-3 px-4 fs-8"
                          id="pw_card_folder_name" name="pw_card_folder_name" required />
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_arka_plan_rengi">MAIL_AD</label>
                      </td>
                      <td>
                        <input type="text" class="form-control form-control-solid py-3 px-4 fs-8"
                          id="pw_card_folder_name" name="pw_card_folder_name" required />
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_cabinet_path">CABINET_PATH</label>
                      </td>
                      <td>
                        <input type="text" class="form-control form-control-solid py-3 px-4 fs-8"
                          id="pw_cabinet_path" name="pw_cabinet_path" required />
                      </td>
                    </tr>
                    <!--end::Row-->

                  </tbody>
                </table>
              </div>
              <!--end::Table-->
            </form>
            <!--end::Form-->
          </div>
        </div>


      </div>
    </div>
  </div>
</div>
<!-- end::Modal -->

<!-- begin::Modal -->
<div class="modal fade" tabindex="-1" id="elektronik_posta_genel">
  <div class="modal-dialog modal-dialog-centered modal-lg mw-950px">
    <div class="modal-content">
      <div class="modal-header border pb-3">
        <h3 class="modal-title fs-5">Özellikler - X</h3>

        <!--begin::Close-->
        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
          <i class="fa-solid fa-xmark fs-5"></i>
        </div>
        <!--end::Close-->
      </div>

      <div class="modal-body">
        <!--begin::Title-->
        <div class="d-flex align-items-center justify-content-between gap-3 mb-8">
          <ul class="nav nav-tabs nav-line-tabs mb-5 fs-6 border-0 gap-6">
            <li class="nav-item mb-0">
              <a class="nav-link fw-bold active" data-bs-toggle="tab" href="#genel_posta">Genel</a>
            </li>
            <li class="nav-item mb-0">
              <a class="nav-link" data-bs-toggle="tab" href="#ozellikler">Özellikler</a>
            </li>
          </ul>

          <!--begin::Help button-->
          <button class="btn p-0" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse"
            data-bs-placement="bottom" data-bs-original-title="Help center" data-kt-initialized="1">
            <i class="fa-regular fa-circle-question"></i>
          </button>
          <!--end::Help button-->
        </div>
        <!--end::Title-->
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="genel_posta" role="tabpanel">
            <!--begin::Form-->
            <form>
              <!--begin::Table-->
              <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fw-bold fs-7">
                  <tbody>
                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder">Aktivite No</label></td>
                      <td>AA000000000000000</td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_aktivite_adi">Aktivite
                          Adı</label></td>
                      <td>
                        <input type="text" class="form-control form-control-solid py-3 px-4 fs-8"
                          id="pw_basla_aktivite_adi" name="pw_basla_aktivite_adi" value="Başla" required disabled />
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_hata_kullanicisi">Hata
                          Kullanıcısı</label></td>
                      <td>
                        <select id="pw_basla_hata_kullanicisi" class="form-select form-select-solid fs-8 py-3 px-4"
                          data-control="select2" data-placeholder="Seçim Yapın">
                          <option value="1">Option 1</option>
                        </select>
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_cerceve_rengi">Çerçeve
                          Rengi</label></td>
                      <td>
                        <!--begin::Color picker-->
                        <div class="pw-color-picker-group">
                          <input type="color" class="pw-color-picker" value="#3699FF" id="pw_basla_cerceve_rengi"
                            name="pw_basla_cerceve_rengi" />
                          <label class="icon pw-shadow-sm" for="pw_basla_cerceve_rengi"
                            data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click"
                            title="Çerçeve rengi">
                            <i class="fa-solid fa-pen pw-text-neutral-300 fs-10 pe-0"></i>
                          </label>
                        </div>
                        <!--end::Color picker-->
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_font_rengi">Font Rengi</label>
                      </td>
                      <td>
                        <!--begin::Color picker-->
                        <div class="pw-color-picker-group">
                          <input type="color" class="pw-color-picker" value="#3699FF" id="pw_basla_font_rengi"
                            name="pw_basla_font_rengi" />
                          <label class="icon pw-shadow-sm" for="pw_basla_font_rengi"
                            data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click"
                            title="Font rengi">
                            <i class="fa-solid fa-pen pw-text-neutral-300 fs-10 pe-0"></i>
                          </label>
                        </div>
                        <!--end::Color picker-->
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_arka_plan_rengi">Arka Plan
                          Rengi</label></td>
                      <td>
                        <!--begin::Color picker-->
                        <div class="pw-color-picker-group">
                          <input type="color" class="pw-color-picker" value="#3699FF" id="pw_basla_arka_plan_rengi"
                            name="pw_basla_arka_plan_rengi" />
                          <label class="icon pw-shadow-sm" for="pw_basla_arka_plan_rengi"
                            data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click"
                            title="Arka plan rengi">
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
                        <label class="form-label fs-base fw-bolder" for="pw_basla_aciklama">Açıklama</label>
                      </td>
                      <td>
                        <div id="pw_otomatik_adim_aciklama"></div>
                      </td>
                    </tr>
                    <!--end::Row-->
                  </tbody>
                </table>
              </div>
              <!--end::Table-->
            </form>
            <!--end::Form-->
          </div>
          <div class="tab-pane fade" id="ozellikler" role="tabpanel">
            <!--begin::Form-->
            <form class="d-flex flex-column gap-3">
              <!--begin::Form row-->
              <div class="px-4 py-6 border rounded-1 pw-border-stroke">

                <div class="form-check pw-form-check-rounded-sm pw-form-check-sm mb-4">
                  <input class="form-check-input" type="checkbox" value="" id="pw_aktif" checked="checked" />
                  <label class="form-check-label pw-text-neutral-700 fw-medium" for="pw_pw_aktif">
                    Aktif
                  </label>
                </div>

                <!--begin::Sonlama-->
                <div class="d-flex gap-4">
                  <!--begin::Input group-->
                  <div class="d-flex gap-2">
                    <!--begin::Radio-->
                    <div class="form-check form-check-custom form-check-solid">
                      <input class="form-check-input w-20px h-20px" type="radio" value="" id="pw_kullanici"
                        name="pw_manuel_bilgi_sonlama" />
                      <label class="form-check-label pw-text-neutral-700 fs-8" for="pw_kullanici">
                        Adım Sonunda
                      </label>
                    </div>
                    <!--end::Radio-->

                    <!--begin::Radio-->
                    <div class="form-check form-check-custom form-check-solid">
                      <input class="form-check-input w-20px h-20px" type="radio" value="" id="pw_grup"
                        name="pw_manuel_bilgi_sonlama" />
                      <label class="form-check-label pw-text-neutral-700 fs-8" for="pw_grup">
                        Grup
                      </label>
                    </div>
                    <!--end::Radio-->

                    <!--begin::Radio-->
                    <div class="form-check form-check-custom form-check-solid">
                      <input class="form-check-input w-20px h-20px" type="radio" value="" id="pw_tip_alani"
                        name="pw_manuel_bilgi_sonlama" />
                      <label class="form-check-label pw-text-neutral-700 fs-8" for="pw_tip_alani">
                        Tip Alanı
                      </label>
                    </div>
                    <!--end::Radio-->

                    <!--begin::Radio-->
                    <div class="form-check form-check-custom form-check-solid">
                      <input class="form-check-input w-20px h-20px" type="radio" value=""
                        id="pw_organizasyon_semasi" name="pw_manuel_bilgi_sonlama" checked />
                      <label class="form-check-label pw-text-neutral-700 fs-8" for="pw_organizasyon_semasi">
                        Organizasyon Şeması
                      </label>
                    </div>
                    <!--end::Radio-->

                  </div>
                  <!--end::Input group-->
                </div>
                <!--end::Sonlama-->
                <!--begin::Form row-->
                <div class="row px-4 py-6 rounded-1 justify-content-lg-between">
                  <!--begin::Col-->
                  <div class="col-12 col-lg-auto">
                    <!--begin::Sonlama-->
                    <div class="d-inline-flex flex-column gap-4">
                      <input type="text" class="form-control form-control-solid py-3 px-4 fs-8"
                        id="pw_basla_aktivite_adi" name="pw_basla_aktivite_adi" value="" required />

                    </div>
                    <!--end::Sonlama-->
                  </div>
                  <!--end::Col-->

                  <!--begin::Col-->
                  <div class="col-12 col-lg-7">
                    <div class="d-flex gap-5">
                      <!--begin::Action buttons-->
                      <div class="d-flex flex-column justify-content-center gap-3">
                        <button
                          class="btn btn-icon w-100 bg-white px-3 btn-icon-primary btn-active-primary pw-shadow-sm">
                          <div class="d-flex gap-2 align-items-center fs-7">
                            Kime
                            <i class="fa-solid fa-chevron-right"></i>
                          </div>
                        </button>

                        <button
                          class="btn btn-icon w-100 bg-white px-3 btn-icon-primary btn-active-primary pw-shadow-sm">
                          <div class="d-flex gap-2 align-items-center fs-7">
                            Bilgi
                            <i class="fa-solid fa-chevron-right"></i>
                          </div>
                        </button>

                      </div>
                      <!--end::Action buttons-->

                      <!--begin::Tipler tablosu-->
                      <div class="w-100">
                        <h5 class="fw-bold fs-8">
                          Kime:
                        </h5>
                        <div
                          class="table-responsive overflow-x-auto rounded w-100 border pw-border-stroke py-3 px-4">
                          <!--begin::Table-->

                          <table class="table align-middle w-max-content min-w-100 gy-2 gx-4">
                            <tbody>
                              <!--begin::Row-->
                              <tr>
                                <td>
                                  <div class="d-flex align-items-center gap-2 cursor-pointer">
                                    <i class="fa-solid fa-gears fs-6 pw-text-neutral-500"></i>
                                    <span class="text-black fs-8">Önceki Kullanıcı</span>
                                  </div>
                                </td>
                              </tr>
                              <!--end::Row-->

                              <!--begin::Row-->
                              <tr>
                                <td>
                                  <div class="d-flex align-items-center gap-2 cursor-pointer">
                                    <i class="fa-solid fa-gears fs-6 pw-text-neutral-500"></i>
                                    <span class="text-black fs-8">Önceki Kullanıcı</span>
                                  </div>
                                </td>
                              </tr>
                              <!--end::Row-->

                              <!--begin::Row-->
                              <tr>
                                <td>
                                  <div class="d-flex align-items-center gap-2 cursor-pointer">
                                    <i class="fa-solid fa-gears fs-6 pw-text-neutral-500"></i>
                                    <span class="text-black fs-8">Önceki Kullanıcı</span>
                                  </div>
                                </td>
                              </tr>
                              <!--end::Row-->

                              <!--begin::Row-->
                              <tr>
                                <td>
                                  <div class="d-flex align-items-center gap-2 cursor-pointer">
                                    <i class="fa-solid fa-user fs-6 pw-text-neutral-500"></i>
                                    <span class="text-black fs-8">Önceki Kullanıcı</span>
                                  </div>
                                </td>
                              </tr>
                              <!--end::Row-->
                            </tbody>
                          </table>
                          <!--end::Table-->
                        </div>
                      </div>
                      <!--end::Tipler tablosu-->
                      <div class="w-100 h-100">
                        <h5 class="fw-bold fs-8">
                          Bilgi
                        </h5>
                        <!--begin::Tipler tablosu-->
                        <div
                          class="table-responsive overflow-x-auto rounded w-100 border pw-border-stroke py-3 px-4">
                          <!--begin::Table-->
                          <table class="table align-middle w-max-content min-w-100 gy-2 gx-4">
                            <tbody>
                              <!--begin::Row-->
                              <tr>
                                <td>
                                  <div class="d-flex align-items-center gap-2 cursor-pointer">
                                    <span class="text-black fs-8">Projeler</span>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="d-flex align-items-center gap-2 cursor-pointer invisible">
                                    <i class="fa-solid fa-gears fs-6 pw-text-neutral-500"></i>
                                    <span class="text-black fs-8">Önceki Kullanıcı</span>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="d-flex align-items-center gap-2 cursor-pointer invisible">
                                    <i class="fa-solid fa-gears fs-6 pw-text-neutral-500"></i>
                                    <span class="text-black fs-8">Önceki Kullanıcı</span>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="d-flex align-items-center gap-2 cursor-pointer invisible">
                                    <i class="fa-solid fa-gears fs-6 pw-text-neutral-500"></i>
                                    <span class="text-black fs-8">Önceki Kullanıcı</span>
                                  </div>
                                </td>
                              </tr>
                              <!--end::Row-->
                            </tbody>
                          </table>
                          <!--end::Table-->
                        </div>
                      </div>
                      <!--end::Tipler tablosu-->
                    </div>
                  </div>
                  <!--end::Col-->
                </div>
                <!--end::Form row-->
              </div>
              <!--end::Form row-->



              <!--begin::Form row-->
              <div class="row px-4 py-6 border rounded-1 pw-border-stroke">

                <!--begin::Col-->
                <div class="col-12">
                  <!--begin::Form table-->
                  <div class="table-responsive overflow-x-auto rounded w-100">
                    <!--begin::Table-->
                    <table class="table w-max-content min-w-100 gy-2 gx-4">
                      <tbody>
                        <!--begin::Row-->
                        <tr>
                          <td class="align-middle"><label class="form-label fs-8 fw-bolder"
                              for="pw_manuel_bilgi_hesap_adi">Hesap Adı</label></td>
                          <td>
                            <select id="pw_manuel_bilgi_hesap_adi"
                              class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2"
                              data-placeholder="Seçim Yapın">
                              <option value="1">Option 1</option>
                            </select>
                          </td>
                          <td class="align-middle"><label class="form-label fs-8 fw-bolder"
                              for="pw_manuel_bilgi_taslak_adi">Taslak Adı</label></td>
                          <td>
                            <select id="pw_manuel_bilgi_taslak_adi"
                              class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2"
                              data-placeholder="Seçim Yapın">
                              <option value="1">Option 1</option>
                            </select>
                          </td>
                        </tr>
                        <!--begin::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td><label class="form-label fs-8 fw-bolder" for="pw_manuel_bilgi_konu">Konu</label></td>
                          <td colspan="3">
                            <input type="text" class="form-control form-control-solid py-3 px-4 fs-8 mb-4"
                              id="pw_manuel_bilgi_konu" />
                            <div id="pw_manuel_bilgi_konu_textarea"></div>
                          </td>
                        </tr>
                        <!--end::Row-->
                        <!--begin::Row-->
                        <tr>
                          <td></td>
                          <td colspan="3">
                            <div id="pw_elektronik_aciklama"></div>
                          </td>
                        </tr>
                        <!--end::Row-->
                      </tbody>
                    </table>
                    <!--end::Table-->
                  </div>
                  <!--end::Form table-->
                </div>
                <!--end::Col-->
              </div>
              <!--end::Form row-->
            </form>
            <!--end::Form-->
          </div>
        </div>


      </div>
    </div>
  </div>
</div>
<!-- end::Modal -->

<!--begin::Modal-->
<div class="modal fade" tabindex="-1" id="roller" role="dialog" aria-labelledby="rollerLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg mw-950px">
    <div class="modal-content">
      <div class="modal-header border pb-3">
        <h3 class="modal-title fs-5">Özellikler</h3>

        <!--begin::Close-->
        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
          <i class="fa-solid fa-xmark fs-5"></i>
        </div>
        <!--end::Close-->
      </div>

      <div class="modal-body">
        <!--begin::Tab wrapper-->
        <div
          class="d-flex align-items-center justify-content-between table-responsive overflow-x-auto overflow-y-hidden">
          <!--begin::Table tabs-->
          <div class="nav nav-tabs nav-line-tabs flex-nowrap w-max-content flex-grow-1 fs-6 gap-6 border-0"
            role="tablist">
            <!--begin::Tab item-->
            <li class="nav-item mb-0" role="presentation">
              <a class="nav-link mx-0 py-3 px-2 fs-base rounded-0 fw-medium active" data-bs-toggle="tab"
                href="#pw_tab_pane_roller_genel" aria-selected="true" role="tab">Genel</a>
            </li>
            <!--end::Tab item-->

            <!--begin::Tab item-->
            <li class="nav-item mb-0" role="presentation">
              <a class="nav-link mx-0 py-3 px-2 fs-base rounded-0 fw-medium" data-bs-toggle="tab"
                href="#pw_tab_pane_roller_ozellikler" aria-selected="true" role="tab">Özellikler</a>
            </li>
            <!--end::Tab item-->

            <!--begin::Tab item-->
            <li class="nav-item mb-0" role="presentation">
              <a class="nav-link mx-0 py-3 px-2 fs-base rounded-0 fw-medium" data-bs-toggle="tab"
                href="#pw_tab_pane_roller_akis_detaylari" aria-selected="true" role="tab">Akış Detayları</a>
            </li>
            <!--end::Tab item-->

            <!--begin::Tab item-->
            <li class="nav-item mb-0" role="presentation">
              <a class="nav-link mx-0 py-3 px-2 fs-base rounded-0 fw-medium" data-bs-toggle="tab"
                href="#pw_tab_pane_roller_sohbet" aria-selected="true" role="tab">Sohbet</a>
            </li>
            <!--end::Tab item-->

            <!--begin::Tab item-->
            <li class="nav-item mb-0" role="presentation">
              <a class="nav-link mx-0 py-3 px-2 fs-base rounded-0 fw-medium" data-bs-toggle="tab"
                href="#pw_tab_pane_roller_global_fonksiyonlar" aria-selected="true" role="tab">Global
                Fonsiyonlar</a>
            </li>
            <!--end::Tab item-->
          </div>
          <!--end::Table tabs-->

          <!--begin::Help button-->
          <button class="btn p-0" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse"
            data-bs-placement="bottom" data-bs-original-title="Help center" data-kt-initialized="1">
            <i class="fa-regular fa-circle-question"></i>
          </button>
          <!--end::Help button-->
        </div>
        <!--end::Tab wrapper-->

        <!--begin::Tab contents-->
        <div class="tab-content pw-dashboard-tab-content mt-6" id="rollerTabContents">
          <!--begin::Genel content-->
          <div class="tab-pane fade active show" id="pw_tab_pane_roller_genel" role="tabpanel">
            <!--begin::Form-->
            <form class="d-flex flex-column gap-3">
              <!--begin::Form row-->
              <div class="row justfiy-content-lg-between px-4 py-6 border rounded-1 pw-border-stroke">
                <!--begin::Col-->
                <div class="col-12 col-lg-5">
                  <!--begin::Table-->
                  <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                    <table class="table w-min-content w-100 gy-2 gx-3 pw-text-neutral-900 fw-bold fs-9 mb-0">
                      <tbody>
                        <!--begin::Row-->
                        <tr>
                          <td><label class="form-label fs-9 fw-bolder">Ana Akış No</label></td>
                          <td class="pw-text-neutral-500">50515100000003DB</td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td><label class="form-label fs-9 fw-bolder">Akış No</label></td>
                          <td class="pw-text-neutral-500">50515100000003DB</td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td><label class="form-label fs-9 fw-bolder">Versiyon</label></td>
                          <td>2</td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td><label class="form-label fs-9 fw-bolder">Bitmiş Akışlar</label></td>
                          <td>0</td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td><label class="form-label fs-9 fw-bolder">Değişiklik</label></td>
                          <td>-</td>
                        </tr>
                        <!--end::Row-->
                      </tbody>
                    </table>
                  </div>
                  <!--end::Table-->
                </div>
                <!--end::Col-->

                <!--begin::Col-->
                <div class="col-12 col-lg-5">
                  <!--begin::Table-->
                  <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                    <table class="table w-min-content w-100 gy-2 gx-3 pw-text-neutral-900 fw-bold fs-9 mb-0">
                      <tbody>
                        <!--begin::Row-->
                        <tr>
                          <td><label class="form-label fs-9 fw-bolder">Derleme No</label></td>
                          <td>-</td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td><label class="form-label fs-9 fw-bolder">Son İşlem Tarihi</label></td>
                          <td>13/07/2023</td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td><label class="form-label fs-9 fw-bolder">Son İşlem Yapan</label></td>
                          <td>Owl GGsoft</td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td><label class="form-label fs-9 fw-bolder">Devam Eden Akışlar</label></td>
                          <td>0</td>
                        </tr>
                        <!--end::Row-->
                      </tbody>
                    </table>
                  </div>
                  <!--end::Table-->
                </div>
                <!--end::Col-->
              </div>
              <!--end::Form row-->

              <!--begin::Form row-->
              <div class="row px-4 py-6 border rounded-1 pw-border-stroke">
                <!--begin::Col-->
                <div class="col-12 col-lg-6">
                  <!--begin::Table-->
                  <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                    <table class="table w-min-content w-100 gy-2 gx-3 pw-text-neutral-700 fw-bold fs-9 mb-0">
                      <tbody>
                        <!--begin::Row-->
                        <tr>
                          <td><label class="form-label fs-9 fw-bolder" for="pw_roller_genel_surec_adi">Süreç
                              Adı</label></td>
                          <td><input type="text" class="form-control form-control-solid py-3 px-4 fs-8"
                              id="pw_roller_genel_surec_adi" /></td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td><label class="form-label fs-9 fw-bolder" for="pw_roller_genel_tip_adi">Tip Adı</label>
                          </td>
                          <td>T_UI_TEST</td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td><label class="form-label fs-9 fw-bolder" for="pw_roller_genel_form_adi">Form
                              Adı</label></td>
                          <td>
                            <select id="pw_roller_genel_form_adi"
                              class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2"
                              data-placeholder="Seçim Yapın">
                              <option value="1">Option 1</option>
                            </select>
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td><label class="form-label fs-9 fw-bolder" for="pw_roller_genel_yonetici_formu">Yönetici
                              Formu</label></td>
                          <td>
                            <select id="pw_roller_genel_yonetici_formu"
                              class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2"
                              data-placeholder="Seçim Yapın">
                              <option value="1">Option 1</option>
                            </select>
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td><label class="form-label fs-9 fw-bolder"
                              for="pw_roller_genel_organizasyon_semasi">Organizasyon Şeması</label></td>
                          <td>
                            <select id="pw_roller_genel_organizasyon_semasi"
                              class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2"
                              data-placeholder="Seçim Yapın">
                              <option value="1">Option 1</option>
                            </select>
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td><label class="form-label fs-9 fw-bolder" for="pw_roller_genel_takvim">Takvim</label>
                          </td>
                          <td>
                            <select id="pw_roller_genel_takvim" class="form-select form-select-solid fs-8 py-3 px-4"
                              data-control="select2" data-placeholder="Seçim Yapın">
                              <option value="1">Option 1</option>
                            </select>
                          </td>
                        </tr>
                        <!--end::Row-->
                      </tbody>
                    </table>
                  </div>
                  <!--end::Table-->
                </div>
                <!--end::Col-->

                <!--begin::Col-->
                <div class="col-12 col-lg-6">
                  <!--begin::Table-->
                  <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                    <table class="table w-min-content w-100 gy-2 gx-3 pw-text-neutral-700 fw-bold fs-9 mb-0">
                      <tbody>
                        <!--begin::Row-->
                        <tr>
                          <td><label class="form-label fs-9 fw-bolder" for="pw_roller_genel_hata_kullanicisi">Hata
                              Kullanıcısı</label></td>
                          <td>
                            <select id="pw_roller_genel_hata_kullanicisi"
                              class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2"
                              data-placeholder="Seçim Yapın">
                              <option value="1">Option 1</option>
                            </select>
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td><label class="form-label fs-9 fw-bolder" for="pw_roller_genel_yetki_seti">Yetki
                              Seti</label></td>
                          <td>
                            <select id="pw_roller_genel_yetki_seti"
                              class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2"
                              data-placeholder="Seçim Yapın">
                              <option value="1">Option 1</option>
                            </select>
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td><label class="form-label fs-9 fw-bolder"
                              for="pw_roller_genel_tasarim_yetki_seti">Tasarım Yetki Seti</label></td>
                          <td>
                            <select id="pw_roller_genel_tasarim_yetki_seti"
                              class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2"
                              data-placeholder="Seçim Yapın">
                              <option value="1">Option 1</option>
                            </select>
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td><label class="form-label fs-9 fw-bolder"
                              for="pw_roller_genel_yonetim_yetki_seti">Yönetim Yetki Seti</label></td>
                          <td>
                            <select id="pw_roller_genel_yonetim_yetki_seti"
                              class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2"
                              data-placeholder="Seçim Yapın">
                              <option value="1">Option 1</option>
                            </select>
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td colspan="2">
                            <!--begin::Checkbox-->
                            <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                              <input class="form-check-input" type="checkbox" value=""
                                id="pw_roller_genel_eposta_warn" checked="checked">
                              <label class="form-check-label pw-text-neutral-700 fw-medium"
                                for="pw_roller_genel_eposta_warn">
                                Elektronik Posta ile Uyar
                              </label>
                            </div>
                            <!--end::Checkbox-->
                          </td>
                        </tr>
                        <!--end::Row-->
                      </tbody>
                    </table>
                  </div>
                  <!--end::Table-->
                </div>
                <!--end::Col-->
              </div>
              <!--end::Form row-->

              <!--begin::Form row-->
              <div class="row p-0">
                <!--begin::Col-->
                <div class="col-12 p-0">
                  <!--begin::Editor-->
                  <div id="pw_roller_genel_editor"></div>
                  <!--end::Editor-->
                </div>
                <!--end::Row-->
              </div>
              <!--end::Form row-->
            </form>
            <!--end::Form-->
          </div>
          <!--end::Genel content-->

          <!--begin::Ozellikler content-->
          <div class="tab-pane fade" id="pw_tab_pane_roller_ozellikler" role="tabpanel">
            <!--begin::Form-->
            <form class="d-flex flex-column gap-3">
              <!--begin::Form row-->
              <div class="row px-4 py-6 border rounded-1 pw-border-stroke">
                <!--begin::Title-->
                <h4 class="pw-text-neutral-800 fs-base fw-bold mb-6">İsimlendirme</h4>
                <!--end::Title-->

                <!--begin::Input group-->
                <div class="d-flex flex-column gap-3">
                  <!--begin::Checkbox-->
                  <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                    <input class="form-check-input" type="checkbox" value="" id="pw_roller_ozelliker_1_1" />
                    <label class="form-check-label pw-text-neutral-700 fw-medium" for="pw_roller_ozelliker_1_1">
                      Kullanıcı değiştirebilsin
                    </label>
                  </div>
                  <!--end::Checkbox-->

                  <!--begin::Checkbox-->
                  <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                    <input class="form-check-input" type="checkbox" value="" id="pw_roller_ozelliker_1_2"
                      checked="checked" />
                    <label class="form-check-label pw-text-neutral-700 fw-medium" for="pw_roller_ozelliker_1_2">
                      Akış adını otomatik üret
                    </label>
                  </div>
                  <!--end::Checkbox-->

                  <!--begin::Input-->
                  <input type="text" class="form-control form-control-solid py-3 px-4 fs-8 mw-475px" />
                  <!--end::Input-->
                </div>
                <!--end::Input group-->
              </div>
              <!--end::Form row-->

              <!--begin::Row-->
              <div class="row px-4 py-6 border rounded-1 pw-border-stroke">
                <!--begin::Col-->
                <div class="col-12 col-lg-6">
                  <!--begin::Title-->
                  <h4 class="pw-text-neutral-800 fs-base fw-bold mb-6">Bilgi Alanları</h4>
                  <!--end::Title-->

                  <!--begin::Form table-->
                  <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                    <table class="table w-min-content w-100 gy-2 gx-3 pw-text-neutral-700 fw-bold fs-9 mb-0">
                      <tbody>
                        <!--begin::Row-->
                        <tr>
                          <td><label class="form-label fs-9 fw-bolder" for="pw_roller_bilgi_1">Bilgi 1</label></td>
                          <td>
                            <select id="pw_roller_bilgi_1" class="form-select form-select-solid fs-8 py-3 px-4"
                              data-control="select2" data-placeholder="Seçim Yapın">
                              <option value="1">Option 1</option>
                            </select>
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td><label class="form-label fs-9 fw-bolder" for="pw_roller_bilgi_2">Bilgi 2</label></td>
                          <td>
                            <select id="pw_roller_bilgi_2" class="form-select form-select-solid fs-8 py-3 px-4"
                              data-control="select2" data-placeholder="Seçim Yapın">
                              <option value="1">Option 1</option>
                            </select>
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td><label class="form-label fs-9 fw-bolder" for="pw_roller_bilgi_3">Bilgi 3</label></td>
                          <td>
                            <select id="pw_roller_bilgi_3" class="form-select form-select-solid fs-8 py-3 px-4"
                              data-control="select2" data-placeholder="Seçim Yapın">
                              <option value="1">Option 1</option>
                            </select>
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td><label class="form-label fs-9 fw-bolder" for="pw_roller_bilgi_4">Bilgi 4</label></td>
                          <td>
                            <select id="pw_roller_bilgi_4" class="form-select form-select-solid fs-8 py-3 px-4"
                              data-control="select2" data-placeholder="Seçim Yapın">
                              <option value="1">Option 1</option>
                            </select>
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td><label class="form-label fs-9 fw-bolder" for="pw_roller_bilgi_5">Bilgi 5</label></td>
                          <td>
                            <select id="pw_roller_bilgi_5" class="form-select form-select-solid fs-8 py-3 px-4"
                              data-control="select2" data-placeholder="Seçim Yapın">
                              <option value="1">Option 1</option>
                            </select>
                          </td>
                        </tr>
                        <!--end::Row-->
                      </tbody>
                    </table>
                  </div>
                  <!--end::Form table-->
                </div>
                <!--end::Col-->
              </div>
              <!--end::Row-->

              <!--begin::Row-->
              <div class="row px-4 py-6 border rounded-1 pw-border-stroke">
                <!--begin::Col-->
                <div class="col-12">
                  <!--begin::Title-->
                  <h4 class="pw-text-neutral-800 fs-base fw-bold mb-6">Eklentiler</h4>
                  <!--end::Title-->

                  <!--begin::Form table-->
                  <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                    <table class="table w-min-content w-100 gy-2 gx-3 pw-text-neutral-700 fw-bold fs-9 mb-0">
                      <tbody>
                        <!--begin::Row-->
                        <tr>
                          <td colspan="2">
                            <!--begin::Checkbox-->
                            <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                              <input class="form-check-input" type="checkbox" value="" id="pw_roller_ozelliker_3_1"
                                checked="checked">
                              <label class="form-check-label pw-text-neutral-700 fw-medium fs-9"
                                for="pw_roller_ozelliker_3_1">
                                Eklenti ile başlat
                              </label>
                            </div>
                            <!--end::Checkbox-->
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td><label class="form-label fs-9 fw-bolder" for="pw_roller_ozellikler_klasor_adi">Klasör
                              Adı</label></td>
                          <td>
                            <div class="col-4">
                              <button type="button" class="d-flex align-items-center btn p-0"
                                data-bs-stacked-modal="#klasorler">
                                <div
                                  class="d-flex align-items-center justify-content-center rounded-0.25rem pw-bg-primary-100 w-40px h-40px">
                                  <i class="fa-solid fa-folder fs-base pw-text-primary-500"></i>
                                </div>
                                <span class="text-black fs-9 fw-medium ms-3">Akçelik Poc</span>
                              </button>
                            </div>
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td><label class="form-label fs-9 fw-bolder" for="pw_roller_ozellikler_klasor_yolu">Klasör
                              Yolu</label></td>
                          <td>
                            <div class="col-6">
                              <input type="text" class="form-control form-control-solid py-3 px-4 fs-9"
                                id="pw_roller_ozellikler_klasor_yolu" placeholder="Undefined..." />
                            </div>
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td><label class="form-label fs-9 fw-bolder" for="pw_roller_ozellikler_tipi">Tipi</label>
                          </td>
                          <td>
                            <div class="row align-items-center">
                              <div class="col-5">
                                <select id="pw_roller_ozellikler_tipi"
                                  class="form-select form-select-solid fs-9 py-3 px-4" data-control="select2"
                                  data-placeholder="Seçim Yapın">
                                  <option value="1">Option 1</option>
                                </select>
                              </div>

                              <div class="w-auto">
                                <!--begin::Checkbox-->
                                <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                                  <input class="form-check-input" type="checkbox" value=""
                                    id="pw_roller_ozellikler_zorunlu" />
                                  <label class="form-check-label pw-text-neutral-700 fw-medium"
                                    for="pw_roller_ozellikler_zorunlu">
                                    Zorunlu
                                  </label>
                                </div>
                                <!--end::Checkbox-->
                              </div>

                              <div class="col d-flex align-items-center gap-3">
                                <input type="number" class="form-control form-control-solid py-3 px-4 fs-9 mw-100px"
                                  min="0" value="0" />
                                <span class="text-black fw-normal flex-shrink-0">Belge Sayısı</span>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td><label class="form-label fs-9 fw-bolder"
                              for="pw_roller_ozellikler_eklenti">Eklenti</label></td>
                          <td>
                            <div class="col-6">
                              <input type="text" class="form-control form-control-solid py-3 px-4 fs-9"
                                id="pw_roller_ozellikler_eklenti" value="Eklenti" />
                            </div>
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td><label class="form-label fs-9 fw-bolder" for="pw_roller_ozellikler_veri_eslesme">Veri
                              Eşleşme</label></td>
                          <td>
                            <div class="col-4">
                              <button id="pw_roller_ozellikler_veri_eslesme" type="button"
                                class="d-flex align-items-center btn p-0" data-bs-stacked-modal="#veri-eslesme">
                                <div
                                  class="d-flex align-items-center justify-content-center rounded-0.25rem pw-bg-primary-100 w-40px h-40px">
                                  <i class="fa-solid fa-files fs-base pw-text-primary-500"></i>
                                </div>
                              </button>
                            </div>
                          </td>
                        </tr>
                        <!--end::Row-->
                      </tbody>
                    </table>
                  </div>
                  <!--end::Form table-->
                </div>
                <!--end::Col-->
              </div>
              <!--end::Row-->
            </form>
            <!--end::Form-->
          </div>
          <!--end::Ozellikler content-->

          <!--begin::Akis detayi content-->
          <div class="tab-pane fade" id="pw_tab_pane_roller_akis_detaylari" role="tabpanel">
            <!--begin::Form-->
            <form class="d-flex flex-column gap-3">
              <!--begin::Form row-->
              <div class="row px-4 py-6 border rounded-1 pw-border-stroke">
                <!--begin::Title-->
                <h4 class="col-12 pw-text-neutral-800 fs-base fw-bold mb-6">Değişkenler</h4>
                <!--end::Title-->

                <!--begin::Wrapper-->
                <div class="col-12">
                  <div class="row gx-5 table-responsive overflow-x-auto overflow-lg-hidden">
                    <!--begin::Form Col-->
                    <div class="col-7">
                      <!--begin::Table-->
                      <table class="table w-min-content w-100 gy-2 gx-3 pw-text-neutral-700 fw-bold fs-9 mb-0">
                        <tbody>
                          <!--begin::Row-->
                          <tr>
                            <td><label class="form-label fs-9 fw-bolder"
                                for="pw_roller_akis_istatistikleri_degisken">Değişken</label></td>
                            <td>
                              <input type="text" class="form-control form-control-solid py-3 px-4 fs-8"
                                id="pw_roller_akis_istatistikleri_degisken" />
                            </td>
                          </tr>
                          <!--end::Row-->

                          <!--begin::Row-->
                          <tr>
                            <td><label class="form-label fs-9 fw-bolder"
                                for="pw_roller_akis_istatistikleri_degisken_tipi">Değişken Tipi</label></td>
                            <td>
                              <select id="pw_roller_akis_istatistikleri_degisken_tipi"
                                class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2"
                                data-placeholder="Seçim Yapın">
                                <option value="1">Option 1</option>
                              </select>
                            </td>
                          </tr>
                          <!--end::Row-->
                        </tbody>
                      </table>
                      <!--end::Table-->
                    </div>
                    <!--end::Form Col-->

                    <!--begin::Action buttons-->
                    <div class="col d-flex flex-column gap-3 pt-2">
                      <button
                        class="btn btn-icon btn-icon-primary pw-btn-bg-primary-100 btn-active-icon-white btn-active-primary w-30px h-30px rounded-0.25rem">
                        <i class="fa-solid fa-plus"></i>
                      </button>
                    </div>
                    <!--end::Action buttons-->

                    <!--begin::Form col-->
                    <div class="col-4 p-3 border pw-border-stroke rounded-1">
                      <!--begin::Item-->
                      <div class="d-flex align-items-center justify-content-between gap-4">
                        <div class="d-flex align-items-center gap-2">
                          <i class="fa-solid fa-file-pen fs-8 pw-text-neutral-400"></i>
                          <span class="text-black fs-9">Test</span>
                        </div>

                        <button type="button"
                          class="btn btn-icon btn-icon-primary pw-btn-bg-primary-100 btn-active-icon-white btn-active-primary w-30px h-30px rounded-0.25rem">
                          <i class="fa-solid fa-trash-can fs-9"></i>
                        </button>
                      </div>
                      <!--end::Item-->
                    </div>
                    <!--end::Form col-->
                  </div>
                </div>
                <!--end::Wrapper-->
              </div>
              <!--end::Form row-->

              <!--begin::Form row-->
              <div class="row px-4 py-6 border rounded-1 pw-border-stroke">
                <!--begin::Title-->
                <h4 class="col-12 pw-text-neutral-800 fs-base fw-bold mb-6">Süre</h4>
                <!--end::Title-->

                <!--begin::Form col-->
                <div class="col-12 col-lg-6">
                  <!--begin::Form table-->
                  <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                    <table class="table w-min-content w-100 gy-2 gx-3 pw-text-neutral-700 fw-bold fs-9 mb-0">
                      <tbody>
                        <!--begin::Row-->
                        <tr>
                          <td>
                            <!--begin::Checkbox-->
                            <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                              <input class="form-check-input" type="checkbox" value=""
                                id="pw_roller_akis_istatistikleri_surec_suresi" checked="checked" />
                              <label class="form-check-label pw-text-neutral-700 fw-medium"
                                for="pw_roller_akis_istatistikleri_surec_suresi">
                                Süreç Süresi
                              </label>
                            </div>
                            <!--end::Checkbox-->
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td>
                            <!--begin::Radio-->
                            <div class="form-check form-check-custom form-check-solid">
                              <input class="form-check-input w-20px h-20px" type="radio" value=""
                                id="pw_roller_akis_istatistikleri_sure_1" name="pw_roller_akis_istatistikleri_sure">
                              <label class="form-check-label pw-text-neutral-700 fs-9 fw-semibold"
                                for="pw_roller_akis_istatistikleri_sure_1">
                                Sabit
                              </label>
                            </div>
                            <!--end::Radio-->
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td>
                            <!--begin::Radio-->
                            <div class="form-check form-check-custom form-check-solid">
                              <input class="form-check-input w-20px h-20px" type="radio" value=""
                                id="pw_roller_akis_istatistikleri_sure_2" name="pw_roller_akis_istatistikleri_sure">
                              <label class="form-check-label pw-text-neutral-700 fs-9 fw-semibold"
                                for="pw_roller_akis_istatistikleri_sure_2">
                                Tip Alanı
                              </label>
                            </div>
                            <!--end::Radio-->
                          </td>
                          <td>
                            <select id="pw_roller_akis_istatistikleri_sure_select"
                              class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2"
                              data-placeholder="Seçim Yapın">
                              <option value="1">Option 1</option>
                            </select>
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td><label class="form-label fs-9 fw-bolder"
                              for="pw_roller_akis_istatistikleri_dakika">Dakika</label></td>
                          <td>
                            <input type="number" class="form-control form-control-solid py-3 px-4 fs-8"
                              id="pw_roller_akis_istatistikleri_dakika" />
                          </td>
                        </tr>
                        <!--end::Row-->
                      </tbody>
                    </table>
                  </div>
                  <!--end::Form table-->
                </div>
                <!--end::Form col-->
              </div>
              <!--end::Form row-->

              <!--begin::Form row-->
              <div class="row px-4 py-6 border rounded-1 pw-border-stroke">
                <!--begin::Title-->
                <h4 class="col-12 pw-text-neutral-800 fs-base fw-bold mb-6">Öncelik</h4>
                <!--end::Title-->

                <!--begin::Wrapper-->
                <div class="row table-responsive overflow-x-auto overflow-lg-hidden">
                  <!--begin::Form col-->
                  <div class="col-6">
                    <!--begin::Form table-->
                    <table
                      class="table w-min-content w-100 align-middle gy-2 gx-3 pw-text-neutral-700 fw-bold fs-9 mb-0">
                      <tbody>
                        <!--begin::Row-->
                        <tr>
                          <td class="min-w-150px">
                            <!--begin::Checkbox-->
                            <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                              <input class="form-check-input" type="checkbox" value=""
                                id="pw_roller_akis_istatistikleri_surec_onceligi" checked="checked" />
                              <label class="form-check-label pw-text-neutral-700 fw-medium"
                                for="pw_roller_akis_istatistikleri_surec_onceligi">
                                Süreç Önceliği
                              </label>
                            </div>
                            <!--end::Checkbox-->
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td>
                            <label class="d-flex align-items-center gap-2 form-label fs-9 fw-semibold"
                              for="pw_roller_akis_istatistikleri_cok_yuksek">
                              <span class="w-15px h-15px rounded-pill pw-bg-danger-500"></span>
                              Çok Yüksek
                            </label>
                          </td>
                          <td>
                            <input type="number" class="form-control form-control-solid py-3 px-4 fs-8"
                              id="pw_roller_akis_istatistikleri_cok_yuksek" value="75" />
                          </td>
                          <td colspan="2">
                            <span class="text-black fs-9">ve üzeri</span>
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td>
                            <label class="d-flex align-items-center gap-2 form-label fs-9 fw-semibold"
                              for="pw_roller_akis_istatistikleri_yuksek">
                              <span class="w-15px h-15px rounded-pill pw-bg-warning-500"></span>
                              Yüksek
                            </label>
                          </td>
                          <td>
                            <input type="number" class="form-control form-control-solid py-3 px-4 fs-8"
                              id="pw_roller_akis_istatistikleri_yuksek" value="51" />
                          </td>
                          <td><span class="text-black fs-9">-</span></td>
                          <td>
                            <input type="number" class="form-control form-control-solid py-3 px-4 fs-8"
                              id="pw_roller_akis_istatistikleri_yuksek_2" value="75" />
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td>
                            <label class="d-flex align-items-center gap-2 form-label fs-9 fw-semibold"
                              for="pw_roller_akis_istatistikleri_normal">
                              <span class="w-15px h-15px rounded-pill pw-bg-warning-300"></span>
                              Normal
                            </label>
                          </td>
                          <td>
                            <input type="number" class="form-control form-control-solid py-3 px-4 fs-8"
                              id="pw_roller_akis_istatistikleri_normal" value="51" />
                          </td>
                          <td><span class="text-black fs-9">-</span></td>
                          <td>
                            <input type="number" class="form-control form-control-solid py-3 px-4 fs-8"
                              id="pw_roller_akis_istatistikleri_normal_2" value="75" />
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td>
                            <label class="d-flex align-items-center gap-2 form-label fs-9 fw-semibold"
                              for="pw_roller_akis_istatistikleri_dusuk">
                              <span class="w-15px h-15px rounded-pill pw-bg-neutral-400"></span>
                              Düşük
                            </label>
                          </td>
                          <td>
                            <input type="number" class="form-control form-control-solid py-3 px-4 fs-8"
                              id="pw_roller_akis_istatistikleri_dusuk" value="51" />
                          </td>
                          <td><span class="text-black fs-9">-</span></td>
                          <td>
                            <input type="number" class="form-control form-control-solid py-3 px-4 fs-8"
                              id="pw_roller_akis_istatistikleri_dusuk_2" value="75" />
                          </td>
                        </tr>
                        <!--end::Row-->
                      </tbody>
                    </table>
                    <!--end::Form table-->
                  </div>
                  <!--end::Form col-->

                  <!--begin::Form col-->
                  <div class="col-6">
                    <!--begin::Form table-->
                    <table
                      class="table w-min-content w-100 align-middle gy-2 gx-3 pw-text-neutral-700 fw-bold fs-9 mb-0">
                      <tbody>
                        <!--begin::Row-->
                        <tr>
                          <td>
                            <label class="form-label fs-9 fw-semibold"
                              for="pw_roller_akis_istatistikleri_baslangic_degeri">Başlangıç Değeri</label>
                          </td>
                          <td colspan="2">
                            <div>
                              <select id="pw_roller_akis_istatistikleri_baslangic_degeri_2"
                                class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2"
                                data-placeholder="Seçim Yapın">
                              </select>
                            </div>
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td>
                            <!--begin::Checkbox-->
                            <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                              <input class="form-check-input" type="checkbox" value=""
                                id="pw_roller_akis_istatistikleri_zamanla_arttir" checked="checked" />
                              <label class="form-check-label pw-text-neutral-700 fw-medium"
                                for="pw_roller_akis_istatistikleri_zamanla_arttir">
                                Zamanla Arttır
                              </label>
                            </div>
                            <!--end::Checkbox-->
                          </td>
                          <td>
                            <div class="d-flex align-items-center gap-2">
                              <input type="number" class="form-control form-control-solid py-3 px-2 fs-8 mw-70px"
                                id="pw_roller_akis_istatistikleri_zamanla_arttir_2" value="1" />
                              <span class="fs-9 text-black fw-medium">saatte</span>
                            </div>
                          </td>
                          <td>
                            <div class="d-flex align-items-center gap-2">
                              <input type="number" class="form-control form-control-solid py-3 px-2 fs-8 mw-70px"
                                id="pw_roller_akis_istatistikleri_zamanla_arttir_3" value="1" />
                              <span class="fs-9 text-black fw-medium">puan</span>
                            </div>
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td colspan="2">
                            <!--begin::Checkbox-->
                            <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                              <input class="form-check-input" type="checkbox" value=""
                                id="pw_roller_akis_istatistikleri_oncelik_5" />
                              <label class="form-check-label pw-text-neutral-700 fw-medium"
                                for="pw_roller_akis_istatistikleri_oncelik_5">
                                Akış başlatılırken kullanıcı değiştirebilsin.
                              </label>
                            </div>
                            <!--end::Checkbox-->
                          </td>
                        </tr>
                        <!--end::Row-->
                      </tbody>
                    </table>
                    <!--end::Form table-->
                  </div>
                  <!--end::Form col-->
                </div>
                <!--end::Wrapper-->
              </div>
              <!--end::Form row-->
            </form>
            <!--end::Form-->
          </div>
          <!--end::Akis detayi content-->

          <!--begin::Sohbet content-->
          <div class="tab-pane fade" id="pw_tab_pane_roller_sohbet" role="tabpanel">
            <!--begin::Form-->
            <form class="d-flex flex-column gap-3">
              <!--begin::Checkbox-->
              <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                <input class="form-check-input" type="checkbox" value="" id="pw_roller_sohbet" checked="checked" />
                <label class="form-check-label pw-text-neutral-700 fw-medium" for="pw_roller_sohbet">
                  Sohbet
                </label>
              </div>
              <!--end::Checkbox-->

              <!--begin::Form row-->
              <div class="row px-4 py-6 border rounded-1 pw-border-stroke table-responsive">
                <!--begin::Col-->
                <div class="min-w-875px col-12">
                  <!--begin::Title-->
                  <h4 class="pw-text-neutral-700 fw-semibold fs-9">Teknik Sohbet</h4>
                  <!--end::Title-->
                  
                  <!--begin::Wrapper-->
                  <div class="d-flex gap-5">
                    <!--begin::Col-->
                    <div class="col d-flex flex-column gap-1 py-3 px-4 border rounded-1 pw-border-stroke scroll h-250px">
                      <!--begin::Item-->
                      <div class="d-flex align-items-center gap-2 pw-text-neutral-700 fs-9">
                        <!--begin::Icon-->
                        <i class="fa-solid fa-user fs-8 pw-text-primary-400"></i>
                        <!--end::Icon-->
                        <span>Admin</span>
                      </div>
                      <!--end::Item-->
                    </div>
                    <!--end::Col-->

                    <!--begin::Action buttons-->
                    <div class="d-flex flex-column gap-3">
                      <button
                        class="btn btn-icon bg-white btn-icon-primary btn-active-primary w-30px h-30px pw-shadow-sm">
                        <i class="fa-solid fa-chevron-left"></i>
                      </button>

                      <button
                        class="btn btn-icon bg-white btn-icon-primary btn-active-primary w-30px h-30px pw-shadow-sm">
                        <i class="fa-solid fa-chevron-right"></i>
                      </button>
                    </div>
                    <!--end::Action buttons-->

                    <!--begin::Col-->
                    <div class="col d-flex flex-column gap-1 py-3 px-4 border rounded-1 pw-border-stroke scroll h-250px">
                      <!--begin::Item-->
                      <div class="d-flex align-items-center gap-2 pw-text-neutral-700 fs-9">
                        <!--begin::Icon-->
                        <i class="fa-solid fa-user fs-8 pw-text-primary-400"></i>
                        <!--end::Icon-->
                        <span>Admin</span>
                      </div>
                      <!--end::Item-->
                    </div>
                    <!--end::Col-->
                  </div>
                  <!--end::Wrapper-->
                </div>
                <!--end::Col-->
              </div>
              <!--end::Form row-->

              <!--begin::Form row-->
              <div class="row px-4 py-6 border rounded-1 pw-border-stroke table-responsive">
                <!--begin::Col-->
                <div class="min-w-875px col-12">
                  <!--begin::Title-->
                  <h4 class="pw-text-neutral-700 fw-semibold fs-9">Süreç Sohbet</h4>
                  <!--end::Title-->
                  
                  <!--begin::Wrapper-->
                  <div class="d-flex gap-5">
                    <!--begin::Col-->
                    <div class="col d-flex flex-column gap-1 py-3 px-4 border rounded-1 pw-border-stroke scroll h-250px">
                      <!--begin::Item-->
                      <div class="d-flex align-items-center gap-2 pw-text-neutral-700 fs-9">
                        <!--begin::Icon-->
                        <i class="fa-solid fa-user fs-8 pw-text-primary-400"></i>
                        <!--end::Icon-->
                        <span>Admin</span>
                      </div>
                      <!--end::Item-->
                    </div>
                    <!--end::Col-->

                    <!--begin::Action buttons-->
                    <div class="d-flex flex-column gap-3">
                      <button
                        class="btn btn-icon bg-white btn-icon-primary btn-active-primary w-30px h-30px pw-shadow-sm">
                        <i class="fa-solid fa-chevron-left"></i>
                      </button>

                      <button
                        class="btn btn-icon bg-white btn-icon-primary btn-active-primary w-30px h-30px pw-shadow-sm">
                        <i class="fa-solid fa-chevron-right"></i>
                      </button>
                    </div>
                    <!--end::Action buttons-->

                    <!--begin::Col-->
                    <div class="col d-flex flex-column gap-1 py-3 px-4 border rounded-1 pw-border-stroke scroll h-250px">
                      <!--begin::Item-->
                      <div class="d-flex align-items-center gap-2 pw-text-neutral-700 fs-9">
                        <!--begin::Icon-->
                        <i class="fa-solid fa-user fs-8 pw-text-primary-400"></i>
                        <!--end::Icon-->
                        <span>Admin</span>
                      </div>
                      <!--end::Item-->
                    </div>
                    <!--end::Col-->
                  </div>
                  <!--end::Wrapper-->
                </div>
                <!--end::Col-->
              </div>
              <!--end::Form row-->
            </form>
            <!--end::Form-->
          </div>
          <!--end::Sohbet content-->

          <!--begin::Global fonksiyonlar content-->
          <div class="tab-pane fade" id="pw_tab_pane_roller_global_fonksiyonlar" role="tabpanel">
            ...
          </div>
          <!--end::Global fonksiyonlar content-->
        </div>
        <!--end::Tab contents-->
      </div>
    </div>
  </div>
</div>
<!--end::Modal-->

<!--begin::Modal-->
<div class="modal fade" tabindex="-1" id="klasorler" role="dialog" aria-labelledby="klasorlerLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg mw-425px">
    <div class="modal-content">
      <div class="modal-header border pb-3">
        <h3 class="modal-title fs-5">Klasörler</h3>

        <!--begin::Close-->
        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
          <i class="fa-solid fa-xmark fs-5"></i>
        </div>
        <!--end::Close-->
      </div>

      <div class="modal-body">
        <div class="border rounded-2 pw-border-stroke scroll h-400px py-3 px-4">
          <!--begin::Menu-->
          <div class="menu menu-rounded menu-column pw-menu-custom-arrow menu-state-bg fw-semibold"
            data-kt-menu="true">
            <!--begin::Menu item-->
            <div class="menu-item menu-sub-indention menu-accordion" data-kt-menu-trigger="click">
              <!--begin::Menu link-->
              <a href="javascript:void(0)" class="menu-link p-1">
                <span class="menu-arrow me-0">
                  <i class="fa-sharp fa-solid fa-triangle fs-7"></i>
                </span>
                <span class="menu-icon">
                  <i class="fa-sharp fa-solid fa-folder fs-6 pw-text-primary-300"></i>
                </span>
                <span class="menu-title fs-9 fw-semibold pw-text-neutral-700">A departmanı</span>
              </a>
              <!--end::Menu link-->
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item menu-sub-indention menu-accordion" data-kt-menu-trigger="click">
              <!--begin::Menu link-->
              <a href="javascript:void(0)" class="menu-link p-1">
                <span class="menu-arrow me-0">
                  <i class="fa-sharp fa-solid fa-triangle fs-7"></i>
                </span>
                <span class="menu-icon">
                  <i class="fa-sharp fa-solid fa-folder fs-6 pw-text-primary-300"></i>
                </span>
                <span class="menu-title fs-9 fw-semibold pw-text-neutral-700">Akçelik Poc</span>
              </a>
              <!--end::Menu link-->
            </div>
            <!--end::Menu item-->
          </div>
          <!--end::Menu-->
        </div>
      </div>

      <div class="modal-footer">
        <div class="d-flex align-items-center justify-content-end gap-3 pt-5">
          <button type="button" class="btn btn-active-light fs-8 py-3 px-6" data-bs-dismiss="moda">
            İptal
          </button>
          <button type="submit" class="btn btn-primary fs-8 py-3 px-6">
            Tamam
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
<!--end::Modal-->

<!--begin::Modal-->
<div class="modal fade" tabindex="-1" id="veri-eslesme" role="dialog" aria-labelledby="veriEslesmeLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg mw-75 min-w-1000px table-responsive">
    <div class="modal-content">
      <div class="modal-header border pb-3">
        <h3 class="modal-title fs-5">Eşleştirme</h3>

        <!--begin::Close-->
        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
          <i class="fa-solid fa-xmark fs-5"></i>
        </div>
        <!--end::Close-->
      </div>

      <div class="modal-body py-0">
        <!--begin::Row-->
        <div class="row gx-0">
          <!--begin::Menu col-->
          <div class="mw-225px w-100 border-end pw-border-stroke">
            <!--begin::Menu-->
            <div class="menu menu-rounded menu-column pw-menu-custom-arrow menu-state-bg fw-semibold"
              data-kt-menu="true">
              <!--begin::Menu item-->
              <div class="menu-item menu-sub-indention menu-accordion" data-kt-menu-trigger="click">
                <!--begin::Menu link-->
                <a href="javascript:void(0)" class="menu-link p-1">
                  <span class="menu-arrow me-0">
                    <i class="fa-sharp fa-solid fa-triangle fs-7"></i>
                  </span>
                  <span class="menu-icon">
                    <i class="fa-sharp fa-solid fa-folder fs-6 pw-text-primary-300"></i>
                  </span>
                  <span class="menu-title fs-9 fw-semibold pw-text-neutral-700">A departmanı</span>
                </a>
                <!--end::Menu link-->
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item menu-sub-indention menu-accordion" data-kt-menu-trigger="click">
                <!--begin::Menu link-->
                <a href="javascript:void(0)" class="menu-link p-1">
                  <span class="menu-arrow me-0">
                    <i class="fa-sharp fa-solid fa-triangle fs-7"></i>
                  </span>
                  <span class="menu-icon">
                    <i class="fa-sharp fa-solid fa-folder fs-6 pw-text-primary-300"></i>
                  </span>
                  <span class="menu-title fs-9 fw-semibold pw-text-neutral-700">Akçelik Poc</span>
                </a>
                <!--end::Menu link-->
              </div>
              <!--end::Menu item-->
            </div>
            <!--end::Menu-->
          </div>
          <!--end::Menu col-->

          <!--begin::Content col-->
          <div class="col ps-6 py-6">
            <!--begin::Form-->
            <form class="d-flex flex-column gap-8">
              <!--begin::Form row-->
              <div class="col-12 col-lg-6">
                <!--begin::Form table-->
                <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                  <table class="table w-min-content w-100 gy-2 gx-3 pw-text-neutral-700 fw-bold fs-9 mb-0">
                    <tbody>
                      <!--begin::Row-->
                      <tr>
                        <td><label class="form-label fs-9 fw-bolder" for="pw_roller_ozellikler_eslestirme_1">Form
                            Adı</label></td>
                        <td>
                          <select id="pw_roller_ozellikler_eslestirme_1"
                            class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2"
                            data-placeholder="Seçim Yapın">
                            <option value="1">Option 1</option>
                          </select>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td><label class="form-label fs-9 fw-bolder" for="pw_roller_ozellikler_eslestirme_2">Yetki
                            Adı</label></td>
                        <td>
                          <select id="pw_roller_ozellikler_eslestirme_2"
                            class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2"
                            data-placeholder="Seçim Yapın">
                            <option value="1">Option 1</option>
                          </select>
                        </td>
                      </tr>
                      <!--end::Row-->
                    </tbody>
                  </table>
                </div>
                <!--end::Form table-->
              </div>
              <!--end::Form row-->

              <!--begin::Form row-->
              <div class="row g-5">
                <!--begin::Col-->
                <div class="mw-225px w-100">
                  <!--begin::Title-->
                  <h4 class="fs-7 fw-bold pw-text-neutral-700">Akış</h4>
                  <!--end::Title-->
                  <!--begin::Card-->
                  <div class="rounded border pw-border-stroke py-4 px-3">
                    <!--begin::Menu-->
                    <div class="menu menu-rounded menu-column menu-state-bg fw-semibold" data-kt-menu="true">
                      <!--begin::Menu item-->
                      <div class="menu-item">
                        <!--begin::Menu link-->
                        <a href="javascript:void(0)" class="menu-link p-1">
                          <span class="menu-icon">
                            <i class="fa-solid fa-pen fs-6 pw-text-primary-400"></i>
                          </span>
                          <span class="menu-title fs-9 fw-semibold pw-text-neutral-700">Ad Soyad</span>
                        </a>
                        <!--end::Menu link-->
                      </div>
                      <!--end::Menu item-->

                      <!--begin::Menu item-->
                      <div class="menu-item">
                        <!--begin::Menu link-->
                        <a href="javascript:void(0)" class="menu-link p-1">
                          <span class="menu-icon">
                            <i class="fa-solid fa-calendar-clock fs-6 pw-text-primary-400"></i>
                          </span>
                          <span class="menu-title fs-9 fw-semibold pw-text-neutral-700">Giriş Tarihi</span>
                        </a>
                        <!--end::Menu link-->
                      </div>
                      <!--end::Menu item-->

                      <!--begin::Menu item-->
                      <div class="menu-item">
                        <!--begin::Menu link-->
                        <a href="javascript:void(0)" class="menu-link p-1">
                          <span class="menu-icon">
                            <i class="fa-solid fa-dollar-sign fs-6 pw-text-primary-400"></i>
                          </span>
                          <span class="menu-title fs-9 fw-semibold pw-text-neutral-700">Tutar</span>
                        </a>
                        <!--end::Menu link-->
                      </div>
                      <!--end::Menu item-->
                    </div>
                    <!--end::Menu-->
                  </div>
                  <!--end::Card-->
                </div>
                <!--end::Col-->

                <!--begin::Col-->
                <div class="col">
                  <!--begin::Title-->
                  <h4 class="fs-7 fw-bold pw-text-neutral-700">Doküman</h4>
                  <!--end::Title-->

                  <!--begin::Card-->
                  <div class="d-flex flex-column gap-1 rounded border pw-border-stroke py-4 px-3">
                    <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-9 mt-0">
                      <!--begin::Item-->
                      <li class="breadcrumb-item">
                        <i class="fa-solid fa-pen pw-text-primary-400 fs-8"></i>
                      </li>
                      <!--end::Item-->

                      <!--begin::Item-->
                      <li class="breadcrumb-item">
                        <a href="javascript:void(0)" class="pw-text-neutral-700">KD-Alt Belge Grubu</a>
                      </li>
                      <!--end::Item-->

                      <!--begin::Item-->
                      <li class="breadcrumb-item">
                        <i class="fa-solid fa-arrow-left-long pw-text-neutral-500 fs-8"></i>
                      </li>
                      <!--end::Item-->

                      <!--begin::Item-->
                      <li class="breadcrumb-item">
                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 pw-text-neutral-700">
                          Ad Soyad
                          <i class="fa-solid fa-circle-x pw-text-neutral-500 fs-8"></i>
                        </a>
                      </li>
                      <!--end::Item-->
                    </ul>

                    <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-9 mt-0">
                      <!--begin::Item-->
                      <li class="breadcrumb-item">
                        <i class="fa-solid fa-pen pw-text-primary-400 fs-8"></i>
                      </li>
                      <!--end::Item-->

                      <!--begin::Item-->
                      <li class="breadcrumb-item">
                        <a href="javascript:void(0)" class="pw-text-neutral-700">KD-Belge Grubu</a>
                      </li>
                      <!--end::Item-->
                    </ul>
                  </div>
                  <!--end::Card-->
                </div>
                <!--end::Col-->
              </div>
              <!--end::Form row-->
            </form>
            <!--end::Form-->
          </div>
          <!--end::Content col-->
        </div>
        <!--end::Row-->
      </div>

      <div class="modal-footer">
        <div class="d-flex align-items-center justify-content-end gap-3 pt-5">
          <button type="button" class="btn btn-active-light fs-8 py-3 px-6" data-bs-dismiss="moda">
            İptal
          </button>
          <button type="submit" class="btn btn-primary fs-8 py-3 px-6">
            Tamam
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
<!--end::Modal-->

<!-- begin::Modal -->
<div class="modal fade" tabindex="-1" id="alt-is-akisi">
  <div class="modal-dialog modal-dialog-centered modal-lg mw-950px">
    <div class="modal-content">
      <div class="modal-header border pb-3">
        <h3 class="modal-title fs-5">Özellikler - X</h3>

        <!--begin::Close-->
        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
          <i class="fa-solid fa-xmark fs-5"></i>
        </div>
        <!--end::Close-->
      </div>

      <div class="modal-body">
        <!--begin::Title-->
        <div class="d-flex align-items-center justify-content-between gap-3 mb-8">
          <ul class="nav nav-tabs nav-line-tabs mb-5 fs-6 border-0 gap-6">
            <li class="nav-item mb-0">
              <a class="nav-link fw-bold active" data-bs-toggle="tab" href="#genel_karar">Genel</a>
            </li>
            <li class="nav-item mb-0">
              <a class="nav-link" data-bs-toggle="tab" href="#alt_ozellikler">Özellikler</a>
            </li>
            <li class="nav-item mb-0">
              <a class="nav-link" data-bs-toggle="tab" href="#veri_esleme">Veri Eşleme</a>
            </li>
          </ul>

          <!--begin::Help button-->
          <button class="btn p-0" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse"
            data-bs-placement="bottom" data-bs-original-title="Help center" data-kt-initialized="1">
            <i class="fa-regular fa-circle-question"></i>
          </button>
          <!--end::Help button-->
        </div>
        <!--end::Title-->
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="genel_karar" role="tabpanel">
            <!--begin::Form-->
            <form>
              <!--begin::Table-->
              <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fw-bold fs-7">
                  <tbody>
                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder">Aktivite No</label></td>
                      <td>AA000000000000000</td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_aktivite_adi">Aktivite
                          Adı</label></td>
                      <td>
                        <input type="text" class="form-control form-control-solid py-3 px-4 fs-8"
                          id="pw_basla_aktivite_adi" name="pw_basla_aktivite_adi" value="Başla" required disabled />
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_hata_kullanicisi">Hata
                          Kullanıcısı</label></td>
                      <td>
                        <select id="pw_basla_hata_kullanicisi" class="form-select form-select-solid fs-8 py-3 px-4"
                          data-control="select2" data-placeholder="Seçim Yapın">
                          <option value="1">Option 1</option>
                        </select>
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_cerceve_rengi">Çerçeve
                          Rengi</label></td>
                      <td>
                        <!--begin::Color picker-->
                        <div class="pw-color-picker-group">
                          <input type="color" class="pw-color-picker" value="#3699FF" id="pw_basla_cerceve_rengi"
                            name="pw_basla_cerceve_rengi" />
                          <label class="icon pw-shadow-sm" for="pw_basla_cerceve_rengi"
                            data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click"
                            title="Çerçeve rengi">
                            <i class="fa-solid fa-pen pw-text-neutral-300 fs-10 pe-0"></i>
                          </label>
                        </div>
                        <!--end::Color picker-->
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_font_rengi">Font Rengi</label>
                      </td>
                      <td>
                        <!--begin::Color picker-->
                        <div class="pw-color-picker-group">
                          <input type="color" class="pw-color-picker" value="#3699FF" id="pw_basla_font_rengi"
                            name="pw_basla_font_rengi" />
                          <label class="icon pw-shadow-sm" for="pw_basla_font_rengi"
                            data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click"
                            title="Font rengi">
                            <i class="fa-solid fa-pen pw-text-neutral-300 fs-10 pe-0"></i>
                          </label>
                        </div>
                        <!--end::Color picker-->
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_arka_plan_rengi">Arka Plan
                          Rengi</label></td>
                      <td>
                        <!--begin::Color picker-->
                        <div class="pw-color-picker-group">
                          <input type="color" class="pw-color-picker" value="#3699FF" id="pw_basla_arka_plan_rengi"
                            name="pw_basla_arka_plan_rengi" />
                          <label class="icon pw-shadow-sm" for="pw_basla_arka_plan_rengi"
                            data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click"
                            title="Arka plan rengi">
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
                        <label class="form-label fs-base fw-bolder" for="pw_basla_aciklama">Açıklama</label>
                      </td>
                      <td>
                        <div id="pw_otomatik_adim_aciklama"></div>
                      </td>
                    </tr>
                    <!--end::Row-->
                  </tbody>
                </table>
              </div>
              <!--end::Table-->
            </form>
            <!--end::Form-->
          </div>

          <div class="tab-pane fade" id="alt_ozellikler" role="tabpanel">
            <div class="row px-4 py-6 border rounded-1 pw-border-stroke">
              <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                <table class="table w-500px gy-2 gx-3 pw-text-neutral-700 fw-bold fs-9 mb-0">
                  <tbody>
                    <tr>
                      <!--begin:item-->
                      <td>
                        <span class="fw-bolder">
                          Alt İş Akışı
                        </span>
                      </td>
                      <!--end:item-->

                      <!--begin:item-->
                      <td>
                        <select class="form-select form-select-solid fs-8 py-3 px-4" data-control="select"
                          data-placeholder="">
                          <option value=""></option>
                        </select>
                      </td>
                      <!--end:item-->
                    </tr>
                    <tr>
                      <td>
                      </td>
                      <td>
                        <input type="text" class="form-control form-control-solid py-3 px-4 fs-8"
                          id="pw_alt_is_akisi" name="pw_alt_is_akisi">
                      </td>
                    </tr>
                    <tr>
                      <td>Akış Adı</td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                          <input class="form-check-input" type="checkbox" value="" id="pw_akis_bekleme">
                          <label class="form-check-label pw-text-neutral-700 fw-medium" fo_r="pw_akis_bekleme">
                            Alt Akış bitişini bekleme </label>
                        </div>
                        <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                          <input class="form-check-input" type="checkbox" value="" id="pw_akis_ekle"
                            checked="checked">
                          <label class="form-check-label pw-text-neutral-700 fw-medium" for="pw_akis_ekle">
                            Eklentileri Alt Akışa Ekle
                          </label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Alt Akış Sonucu</td>
                      <td>
                        <select class="form-select form-select-solid fs-8 py-3 px-4" data-control="select"
                          data-placeholder="">
                          <option value=""></option>
                        </select>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                          <input class="form-check-input" type="checkbox" value="" id="pw_akis_iptal">
                          <label class="form-check-label pw-text-neutral-700 fw-medium" for="pw_akis_iptal">
                            Alt Akış iptal edilirse sonuş eşleşmesini iptal et
                          </label>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <div class="tab-pane fade" id="veri_esleme" role="tabpanel">
            <div class="row px-4 py-6 border rounded-1 pw-border-stroke">
              <div class="d-flex gap-2 p-5">
                <div class="px-4 w-100 py-6 border rounded-1 pw-border-stroke">
                  <div class="nav nav-tabs flex-column nav-line-tabs gap-3 fs-6 border-0 flex-nowrap w-max-content"
                    role="tablist">
                    <!--begin::Tab item-->
                    <li class="nav-item px-4 border border-2 border-primary pw-bg-neutral-200" role="presentation"
                      style="border-style: dotted!important;">
                      <span class="nav-link mx-0 fs-base rounded-0 border-0 fw-medium active">
                        <i class="fa-solid me-2 fa-pen pw-color-current"></i>
                        Ad Soyad
                      </span>
                    </li>
                    <!--end::Tab item-->

                    <!--begin::Tab item-->
                    <li class="nav-item px-4" role="presentation">
                      <span class="nav-link mx-0 fs-base rounded-0 border-0 fw-medium" data-bs-toggle="tab"
                        href="#pw_tab_pane_form_tbok" role="tab" aria-selected="false" tabindex="-1">
                        <i class="fa-solid me-2 fa-calendar-clock pw-color-current"></i>
                        Giriş Tarihi </span>
                    </li>
                    <!--end::Tab item-->
                    <!--begin::Tab item-->
                    <li class="nav-item px-4" role="presentation">
                      <span class="nav-link mx-0 fs-base rounded-0 border-0 fw-medium" data-bs-toggle="tab"
                        href="#pw_tab_pane_form_tbok" role="tab" aria-selected="false" tabindex="-1">
                        <i class="fa-solid me-2 fa-dollar-sign pw-color-current"></i>
                        Tutar </span>
                    </li>
                    <!--end::Tab item-->

                  </div>
                </div>
                <div class="px-4 w-100 py-6 border rounded-1 pw-border-stroke">
                  <div class="nav nav-tabs flex-column nav-line-tabs gap-3 fs-6 border-0 flex-nowrap w-max-content"
                    role="tablist">
                    <!--begin::Tab item-->
                    <li class="nav-item px-4" role="presentation">
                      <span class="nav-link mx-0 fs-base rounded-0 border-0 fw-medium active">
                        <i class="fa-solid me-2 fa-pen pw-color-current"></i>
                        KD-Alt Belge Grubu <i class="fa-solid me-2 fa-arrow-left-long"></i> Ad Soyad <i
                          class="fa-solid me-2 fa-circle-x"></i>
                      </span>
                    </li>
                    <!--end::Tab item-->

                    <!--begin::Tab item-->
                    <li class="nav-item px-4" role="presentation">
                      <span class="nav-link mx-0 fs-base rounded-0 border-0 fw-medium" data-bs-toggle="tab"
                        href="#pw_tab_pane_form_tbok" role="tab" aria-selected="false" tabindex="-1">
                        <i class="fa-solid me-2 fa-pen pw-color-current"></i>
                        KD-Belge Grubu </span>
                    </li>
                    <!--end::Tab item-->

                  </div>
                </div>
              </div>
            </div>
          </div>



        </div>
      </div>
    </div>
  </div>
</div>
<!-- end::Modal -->

<!-- begin::Modal -->
<div class="modal fade" tabindex="-1" id="birlesim_genel">
  <div class="modal-dialog modal-dialog-centered modal-lg mw-950px">
    <div class="modal-content">
      <div class="modal-header border pb-3">
        <h3 class="modal-title fs-5">Özellikler - X</h3>

        <!--begin::Close-->
        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
          <i class="fa-solid fa-xmark fs-5"></i>
        </div>
        <!--end::Close-->
      </div>

      <div class="modal-body">
        <!--begin::Title-->
        <div class="d-flex align-items-center justify-content-between gap-3 mb-8">
          <ul class="nav nav-tabs nav-line-tabs mb-5 fs-6 border-0 gap-6">
            <li class="nav-item mb-0">
              <a class="nav-link active" data-bs-toggle="tab" href="#birlesim_genel_karar">Genel</a>
            </li>
          </ul>

          <!--begin::Help button-->
          <button class="btn p-0" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse"
            data-bs-placement="bottom" data-bs-original-title="Help center" data-kt-initialized="1">
            <i class="fa-regular fa-circle-question"></i>
          </button>
          <!--end::Help button-->
        </div>
        <!--end::Title-->
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="birlesim_genel_karar" role="tabpanel">
            <!--begin::Form-->
            <form>
              <!--begin::Table-->
              <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fw-bold fs-7">
                  <tbody>
                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder">Aktivite No</label></td>
                      <td>AA000000000000000</td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_aktivite_adi">Aktivite
                          Adı</label></td>
                      <td>
                        <input type="text" class="form-control form-control-solid py-3 px-4 fs-8"
                          id="pw_basla_aktivite_adi" name="pw_basla_aktivite_adi" value="Başla" required disabled />
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_hata_kullanicisi">Hata
                          Kullanıcısı</label></td>
                      <td>
                        <select id="pw_basla_hata_kullanicisi" class="form-select form-select-solid fs-8 py-3 px-4"
                          data-control="select2" data-placeholder="Seçim Yapın">
                          <option value="1">Option 1</option>
                        </select>
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_cerceve_rengi">Çerçeve
                          Rengi</label></td>
                      <td>
                        <!--begin::Color picker-->
                        <div class="pw-color-picker-group">
                          <input type="color" class="pw-color-picker" value="#3699FF" id="pw_basla_cerceve_rengi"
                            name="pw_basla_cerceve_rengi" />
                          <label class="icon pw-shadow-sm" for="pw_basla_cerceve_rengi"
                            data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click"
                            title="Çerçeve rengi">
                            <i class="fa-solid fa-pen pw-text-neutral-300 fs-10 pe-0"></i>
                          </label>
                        </div>
                        <!--end::Color picker-->
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_font_rengi">Font Rengi</label>
                      </td>
                      <td>
                        <!--begin::Color picker-->
                        <div class="pw-color-picker-group">
                          <input type="color" class="pw-color-picker" value="#3699FF" id="pw_basla_font_rengi"
                            name="pw_basla_font_rengi" />
                          <label class="icon pw-shadow-sm" for="pw_basla_font_rengi"
                            data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click"
                            title="Font rengi">
                            <i class="fa-solid fa-pen pw-text-neutral-300 fs-10 pe-0"></i>
                          </label>
                        </div>
                        <!--end::Color picker-->
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_arka_plan_rengi">Arka Plan
                          Rengi</label></td>
                      <td>
                        <!--begin::Color picker-->
                        <div class="pw-color-picker-group">
                          <input type="color" class="pw-color-picker" value="#3699FF" id="pw_basla_arka_plan_rengi"
                            name="pw_basla_arka_plan_rengi" />
                          <label class="icon pw-shadow-sm" for="pw_basla_arka_plan_rengi"
                            data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click"
                            title="Arka plan rengi">
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
                        <label class="form-label fs-base fw-bolder" for="pw_basla_aciklama">Açıklama</label>
                      </td>
                      <td>
                        <div id="pw_birlesim_genel"></div>
                      </td>
                    </tr>
                    <!--end::Row-->
                  </tbody>
                </table>
              </div>
              <!--end::Table-->
            </form>
            <!--end::Form-->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end::Modal -->

<!-- begin::Modal -->
<div class="modal fade" tabindex="-1" id="kpi-baslangic-genel">
  <div class="modal-dialog modal-dialog-centered modal-lg mw-950px">
    <div class="modal-content">
      <div class="modal-header border pb-3">
        <h3 class="modal-title fs-5">Özellikler - X</h3>

        <!--begin::Close-->
        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
          <i class="fa-solid fa-xmark fs-5"></i>
        </div>
        <!--end::Close-->
      </div>

      <div class="modal-body">
        <!--begin::Title-->
        <div class="d-flex align-items-center justify-content-between gap-3 mb-8">
          <ul class="nav nav-tabs nav-line-tabs mb-5 fs-6 border-0 gap-6">
            <li class="nav-item mb-0">
              <a class="nav-link active" data-bs-toggle="tab" href="#birlesim_genel_karar">Genel</a>
            </li>
          </ul>

          <!--begin::Help button-->
          <button class="btn p-0" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse"
            data-bs-placement="bottom" data-bs-original-title="Help center" data-kt-initialized="1">
            <i class="fa-regular fa-circle-question"></i>
          </button>
          <!--end::Help button-->
        </div>
        <!--end::Title-->
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="birlesim_genel_karar" role="tabpanel">
            <!--begin::Form-->
            <form>
              <!--begin::Table-->
              <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fw-bold fs-7">
                  <tbody>
                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder">Aktivite No</label></td>
                      <td>AA000000000000000</td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_aktivite_adi">Aktivite
                          Adı</label></td>
                      <td>
                        <input type="text" class="form-control form-control-solid py-3 px-4 fs-8"
                          id="pw_basla_aktivite_adi" name="pw_basla_aktivite_adi" value="KPI Başlangıç" required
                          disabled />
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_hata_kullanicisi">Hata
                          Kullanıcısı</label></td>
                      <td>
                        <select id="pw_basla_hata_kullanicisi" class="form-select form-select-solid fs-8 py-3 px-4"
                          data-control="select2" data-placeholder="Seçim Yapın">
                          <option value="1">Option 1</option>
                        </select>
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_cerceve_rengi">Çerçeve
                          Rengi</label></td>
                      <td>
                        <!--begin::Color picker-->
                        <div class="pw-color-picker-group">
                          <input type="color" class="pw-color-picker" value="#3699FF" id="pw_basla_cerceve_rengi"
                            name="pw_basla_cerceve_rengi" />
                          <label class="icon pw-shadow-sm" for="pw_basla_cerceve_rengi"
                            data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click"
                            title="Çerçeve rengi">
                            <i class="fa-solid fa-pen pw-text-neutral-300 fs-10 pe-0"></i>
                          </label>
                        </div>
                        <!--end::Color picker-->
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_font_rengi">Font Rengi</label>
                      </td>
                      <td>
                        <!--begin::Color picker-->
                        <div class="pw-color-picker-group">
                          <input type="color" class="pw-color-picker" value="#3699FF" id="pw_basla_font_rengi"
                            name="pw_basla_font_rengi" />
                          <label class="icon pw-shadow-sm" for="pw_basla_font_rengi"
                            data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click"
                            title="Font rengi">
                            <i class="fa-solid fa-pen pw-text-neutral-300 fs-10 pe-0"></i>
                          </label>
                        </div>
                        <!--end::Color picker-->
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_arka_plan_rengi">Arka Plan
                          Rengi</label></td>
                      <td>
                        <!--begin::Color picker-->
                        <div class="pw-color-picker-group">
                          <input type="color" class="pw-color-picker" value="#3699FF" id="pw_basla_arka_plan_rengi"
                            name="pw_basla_arka_plan_rengi" />
                          <label class="icon pw-shadow-sm" for="pw_basla_arka_plan_rengi"
                            data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click"
                            title="Arka plan rengi">
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
                        <label class="form-label fs-base fw-bolder" for="pw_kpi_baslangic_genel">Açıklama</label>
                      </td>
                      <td>
                        <div id="pw_kpi_baslangic_genel"></div>
                      </td>
                    </tr>
                    <!--end::Row-->
                  </tbody>
                </table>
              </div>
              <!--end::Table-->
            </form>
            <!--end::Form-->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end::Modal -->

<!-- begin::Modal -->
<div class="modal fade" tabindex="-1" id="kpi-bitis-genel">
  <div class="modal-dialog modal-dialog-centered modal-lg mw-950px">
    <div class="modal-content">
      <div class="modal-header border pb-3">
        <h3 class="modal-title fs-5">Özellikler - X</h3>

        <!--begin::Close-->
        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
          <i class="fa-solid fa-xmark fs-5"></i>
        </div>
        <!--end::Close-->
      </div>

      <div class="modal-body">
        <!--begin::Title-->
        <div class="d-flex align-items-center justify-content-between gap-3 mb-8">
          <ul class="nav nav-tabs nav-line-tabs mb-5 fs-6 border-0 gap-6">
            <li class="nav-item mb-0">
              <a class="nav-link active" data-bs-toggle="tab" href="#birlesim_genel_karar">Genel</a>
            </li>
          </ul>

          <!--begin::Help button-->
          <button class="btn p-0" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse"
            data-bs-placement="bottom" data-bs-original-title="Help center" data-kt-initialized="1">
            <i class="fa-regular fa-circle-question"></i>
          </button>
          <!--end::Help button-->
        </div>
        <!--end::Title-->
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="birlesim_genel_karar" role="tabpanel">
            <!--begin::Form-->
            <form>
              <!--begin::Table-->
              <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fw-bold fs-7">
                  <tbody>
                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder">Aktivite No</label></td>
                      <td>AA000000000000000</td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_aktivite_adi">Aktivite
                          Adı</label></td>
                      <td>
                        <input type="text" class="form-control form-control-solid py-3 px-4 fs-8"
                          id="pw_basla_aktivite_adi" name="pw_basla_aktivite_adi" value="KPI Bitiş" required
                          disabled />
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_hata_kullanicisi">Hata
                          Kullanıcısı</label></td>
                      <td>
                        <select id="pw_basla_hata_kullanicisi" class="form-select form-select-solid fs-8 py-3 px-4"
                          data-control="select2" data-placeholder="Seçim Yapın">
                          <option value="1">Option 1</option>
                        </select>
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_cerceve_rengi">Çerçeve
                          Rengi</label></td>
                      <td>
                        <!--begin::Color picker-->
                        <div class="pw-color-picker-group">
                          <input type="color" class="pw-color-picker" value="#3699FF" id="pw_basla_cerceve_rengi"
                            name="pw_basla_cerceve_rengi" />
                          <label class="icon pw-shadow-sm" for="pw_basla_cerceve_rengi"
                            data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click"
                            title="Çerçeve rengi">
                            <i class="fa-solid fa-pen pw-text-neutral-300 fs-10 pe-0"></i>
                          </label>
                        </div>
                        <!--end::Color picker-->
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_font_rengi">Font Rengi</label>
                      </td>
                      <td>
                        <!--begin::Color picker-->
                        <div class="pw-color-picker-group">
                          <input type="color" class="pw-color-picker" value="#3699FF" id="pw_basla_font_rengi"
                            name="pw_basla_font_rengi" />
                          <label class="icon pw-shadow-sm" for="pw_basla_font_rengi"
                            data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click"
                            title="Font rengi">
                            <i class="fa-solid fa-pen pw-text-neutral-300 fs-10 pe-0"></i>
                          </label>
                        </div>
                        <!--end::Color picker-->
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_arka_plan_rengi">Arka Plan
                          Rengi</label></td>
                      <td>
                        <!--begin::Color picker-->
                        <div class="pw-color-picker-group">
                          <input type="color" class="pw-color-picker" value="#3699FF" id="pw_basla_arka_plan_rengi"
                            name="pw_basla_arka_plan_rengi" />
                          <label class="icon pw-shadow-sm" for="pw_basla_arka_plan_rengi"
                            data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click"
                            title="Arka plan rengi">
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
                        <label class="form-label fs-base fw-bolder" for="pw_kpi_bitis">Açıklama</label>
                      </td>
                      <td>
                        <div id="pw_kpi_bitis"></div>
                      </td>
                    </tr>
                    <!--end::Row-->
                  </tbody>
                </table>
              </div>
              <!--end::Table-->
            </form>
            <!--end::Form-->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end::Modal -->

<!-- begin::Modal -->
<div class="modal fade" tabindex="-1" id="makro-genel">
  <div class="modal-dialog modal-dialog-centered modal-lg mw-950px">
    <div class="modal-content">
      <div class="modal-header border pb-3">
        <h3 class="modal-title fs-5">Özellikler - Makro</h3>

        <!--begin::Close-->
        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
          <i class="fa-solid fa-xmark fs-5"></i>
        </div>
        <!--end::Close-->
      </div>

      <div class="modal-body">
        <!--begin::Title-->
        <div class="d-flex align-items-center justify-content-between gap-3 mb-8">
          <ul class="nav nav-tabs nav-line-tabs mb-5 fs-6 border-0 gap-6">
            <li class="nav-item mb-0">
              <a class="nav-link active" data-bs-toggle="tab" href="#makro_genel_tab">Genel</a>
            </li>
            <li class="nav-item mb-0">
              <a class="nav-link" data-bs-toggle="tab" href="#makro_tab">Makro</a>
            </li>
          </ul>

          <!--begin::Help button-->
          <button class="btn p-0" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse"
            data-bs-placement="bottom" data-bs-original-title="Help center" data-kt-initialized="1">
            <i class="fa-regular fa-circle-question"></i>
          </button>
          <!--end::Help button-->
        </div>
        <!--end::Title-->
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="makro_genel_tab" role="tabpanel">
            <!--begin::Form-->
            <form>
              <!--begin::Table-->
              <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fw-bold fs-7">
                  <tbody>
                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder">Aktivite No</label></td>
                      <td>AA000000000000000</td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_aktivite_adi">Aktivite
                          Adı</label></td>
                      <td>
                        <input type="text" class="form-control form-control-solid py-3 px-4 fs-8"
                          id="pw_basla_aktivite_adi" name="pw_basla_aktivite_adi" value="KPI Bilgilendirme Bitiş"
                          required disabled />
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_hata_kullanicisi">Hata
                          Kullanıcısı</label></td>
                      <td>
                        <select id="pw_basla_hata_kullanicisi" class="form-select form-select-solid fs-8 py-3 px-4"
                          data-control="select2" data-placeholder="Seçim Yapın">
                          <option value="1">Option 1</option>
                        </select>
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_cerceve_rengi">Çerçeve
                          Rengi</label></td>
                      <td>
                        <!--begin::Color picker-->
                        <div class="pw-color-picker-group">
                          <input type="color" class="pw-color-picker" value="#3699FF" id="pw_basla_cerceve_rengi"
                            name="pw_basla_cerceve_rengi" />
                          <label class="icon pw-shadow-sm" for="pw_basla_cerceve_rengi"
                            data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click"
                            title="Çerçeve rengi">
                            <i class="fa-solid fa-pen pw-text-neutral-300 fs-10 pe-0"></i>
                          </label>
                        </div>
                        <!--end::Color picker-->
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_font_rengi">Font Rengi</label>
                      </td>
                      <td>
                        <!--begin::Color picker-->
                        <div class="pw-color-picker-group">
                          <input type="color" class="pw-color-picker" value="#3699FF" id="pw_basla_font_rengi"
                            name="pw_basla_font_rengi" />
                          <label class="icon pw-shadow-sm" for="pw_basla_font_rengi"
                            data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click"
                            title="Font rengi">
                            <i class="fa-solid fa-pen pw-text-neutral-300 fs-10 pe-0"></i>
                          </label>
                        </div>
                        <!--end::Color picker-->
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_arka_plan_rengi">Arka Plan
                          Rengi</label></td>
                      <td>
                        <!--begin::Color picker-->
                        <div class="pw-color-picker-group">
                          <input type="color" class="pw-color-picker" value="#3699FF" id="pw_basla_arka_plan_rengi"
                            name="pw_basla_arka_plan_rengi" />
                          <label class="icon pw-shadow-sm" for="pw_basla_arka_plan_rengi"
                            data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click"
                            title="Arka plan rengi">
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
                        <label class="form-label fs-base fw-bolder" for="pw_makro_genel">Açıklama</label>
                      </td>
                      <td>
                        <div id="pw_makro_genel"></div>
                      </td>
                    </tr>
                    <!--end::Row-->
                  </tbody>
                </table>
              </div>
              <!--end::Table-->
            </form>
            <!--end::Form-->
          </div>


          <div class="tab-pane fade" id="makro_tab" role="tabpanel">
            <!--begin::Form-->

            <!--end::Form-->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end::Modal -->

<!-- begin::Modal -->
<div class="modal fade" tabindex="-1" id="kural-genel">
  <div class="modal-dialog modal-dialog-centered modal-lg mw-950px">
    <div class="modal-content">
      <div class="modal-header border pb-3">
        <h3 class="modal-title fs-5">Özellikler - Kural</h3>

        <!--begin::Close-->
        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
          <i class="fa-solid fa-xmark fs-5"></i>
        </div>
        <!--end::Close-->
      </div>

      <div class="modal-body">
        <!--begin::Title-->
        <div class="d-flex align-items-center justify-content-between gap-3 mb-8">
          <ul class="nav nav-tabs nav-line-tabs mb-5 fs-6 border-0 gap-6">
            <li class="nav-item mb-0">
              <a class="nav-link active" data-bs-toggle="tab" href="#kural_genel_tab">Genel</a>
            </li>
            <li class="nav-item mb-0">
              <a class="nav-link" data-bs-toggle="tab" href="#kural_tab">Kural</a>
            </li>
          </ul>

          <!--begin::Help button-->
          <button class="btn p-0" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse"
            data-bs-placement="bottom" data-bs-original-title="Help center" data-kt-initialized="1">
            <i class="fa-regular fa-circle-question"></i>
          </button>
          <!--end::Help button-->
        </div>
        <!--end::Title-->
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="kural_genel_tab" role="tabpanel">
            <!--begin::Form-->
            <form>
              <!--begin::Table-->
              <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fw-bold fs-7">
                  <tbody>
                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder">Aktivite No</label></td>
                      <td>AA000000000000000</td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_aktivite_adi">Aktivite
                          Adı</label></td>
                      <td>
                        <input type="text" class="form-control form-control-solid py-3 px-4 fs-8"
                          id="pw_basla_aktivite_adi" name="pw_basla_aktivite_adi" value="KPI Bilgilendirme Bitiş"
                          required disabled />
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_hata_kullanicisi">Hata
                          Kullanıcısı</label></td>
                      <td>
                        <select id="pw_basla_hata_kullanicisi" class="form-select form-select-solid fs-8 py-3 px-4"
                          data-control="select2" data-placeholder="Seçim Yapın">
                          <option value="1">Option 1</option>
                        </select>
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_cerceve_rengi">Çerçeve
                          Rengi</label></td>
                      <td>
                        <!--begin::Color picker-->
                        <div class="pw-color-picker-group">
                          <input type="color" class="pw-color-picker" value="#3699FF" id="pw_basla_cerceve_rengi"
                            name="pw_basla_cerceve_rengi" />
                          <label class="icon pw-shadow-sm" for="pw_basla_cerceve_rengi"
                            data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click"
                            title="Çerçeve rengi">
                            <i class="fa-solid fa-pen pw-text-neutral-300 fs-10 pe-0"></i>
                          </label>
                        </div>
                        <!--end::Color picker-->
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_font_rengi">Font Rengi</label>
                      </td>
                      <td>
                        <!--begin::Color picker-->
                        <div class="pw-color-picker-group">
                          <input type="color" class="pw-color-picker" value="#3699FF" id="pw_basla_font_rengi"
                            name="pw_basla_font_rengi" />
                          <label class="icon pw-shadow-sm" for="pw_basla_font_rengi"
                            data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click"
                            title="Font rengi">
                            <i class="fa-solid fa-pen pw-text-neutral-300 fs-10 pe-0"></i>
                          </label>
                        </div>
                        <!--end::Color picker-->
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_arka_plan_rengi">Arka Plan
                          Rengi</label></td>
                      <td>
                        <!--begin::Color picker-->
                        <div class="pw-color-picker-group">
                          <input type="color" class="pw-color-picker" value="#3699FF" id="pw_basla_arka_plan_rengi"
                            name="pw_basla_arka_plan_rengi" />
                          <label class="icon pw-shadow-sm" for="pw_basla_arka_plan_rengi"
                            data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click"
                            title="Arka plan rengi">
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
                        <label class="form-label fs-base fw-bolder" for="pw_makro_genel">Açıklama</label>
                      </td>
                      <td>
                        <div id="pw_makro_genel"></div>
                      </td>
                    </tr>
                    <!--end::Row-->
                  </tbody>
                </table>
              </div>
              <!--end::Table-->
            </form>
            <!--end::Form-->
          </div>


          <div class="tab-pane fade" id="kural_tab" role="tabpanel">
            <!--begin::Form-->

            <!--end::Form-->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end::Modal -->

<!-- begin::Modal -->
<div class="modal fade" tabindex="-1" id="oncelik-genel">
  <div class="modal-dialog modal-dialog-centered modal-lg mw-950px">
    <div class="modal-content">
      <div class="modal-header border pb-3">
        <h3 class="modal-title fs-5">Özellikler - Öncelik</h3>

        <!--begin::Close-->
        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
          <i class="fa-solid fa-xmark fs-5"></i>
        </div>
        <!--end::Close-->
      </div>

      <div class="modal-body">
        <!--begin::Title-->
        <div class="d-flex align-items-center justify-content-between gap-3 mb-8">
          <ul class="nav nav-tabs nav-line-tabs mb-5 fs-6 border-0 gap-6">
            <li class="nav-item mb-0">
              <a class="nav-link active" data-bs-toggle="tab" href="#oncelik_genel_tab">Genel</a>
            </li>
            <li class="nav-item mb-0">
              <a class="nav-link" data-bs-toggle="tab" href="#oncelik_tab">Öncelik</a>
            </li>
          </ul>

          <!--begin::Help button-->
          <button class="btn p-0" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse"
            data-bs-placement="bottom" data-bs-original-title="Help center" data-kt-initialized="1">
            <i class="fa-regular fa-circle-question"></i>
          </button>
          <!--end::Help button-->
        </div>
        <!--end::Title-->
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="oncelik_genel_tab" role="tabpanel">
            <!--begin::Form-->
            <form>
              <!--begin::Table-->
              <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fw-bold fs-7">
                  <tbody>
                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder">Aktivite No</label></td>
                      <td>AA000000000000000</td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_aktivite_adi">Aktivite
                          Adı</label></td>
                      <td>
                        <input type="text" class="form-control form-control-solid py-3 px-4 fs-8"
                          id="pw_basla_aktivite_adi" name="pw_basla_aktivite_adi" value="KPI Bilgilendirme Bitiş"
                          required disabled />
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_hata_kullanicisi">Hata
                          Kullanıcısı</label></td>
                      <td>
                        <select id="pw_basla_hata_kullanicisi" class="form-select form-select-solid fs-8 py-3 px-4"
                          data-control="select2" data-placeholder="Seçim Yapın">
                          <option value="1">Option 1</option>
                        </select>
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_cerceve_rengi">Çerçeve
                          Rengi</label></td>
                      <td>
                        <!--begin::Color picker-->
                        <div class="pw-color-picker-group">
                          <input type="color" class="pw-color-picker" value="#3699FF" id="pw_basla_cerceve_rengi"
                            name="pw_basla_cerceve_rengi" />
                          <label class="icon pw-shadow-sm" for="pw_basla_cerceve_rengi"
                            data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click"
                            title="Çerçeve rengi">
                            <i class="fa-solid fa-pen pw-text-neutral-300 fs-10 pe-0"></i>
                          </label>
                        </div>
                        <!--end::Color picker-->
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_font_rengi">Font Rengi</label>
                      </td>
                      <td>
                        <!--begin::Color picker-->
                        <div class="pw-color-picker-group">
                          <input type="color" class="pw-color-picker" value="#3699FF" id="pw_basla_font_rengi"
                            name="pw_basla_font_rengi" />
                          <label class="icon pw-shadow-sm" for="pw_basla_font_rengi"
                            data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click"
                            title="Font rengi">
                            <i class="fa-solid fa-pen pw-text-neutral-300 fs-10 pe-0"></i>
                          </label>
                        </div>
                        <!--end::Color picker-->
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_arka_plan_rengi">Arka Plan
                          Rengi</label></td>
                      <td>
                        <!--begin::Color picker-->
                        <div class="pw-color-picker-group">
                          <input type="color" class="pw-color-picker" value="#3699FF" id="pw_basla_arka_plan_rengi"
                            name="pw_basla_arka_plan_rengi" />
                          <label class="icon pw-shadow-sm" for="pw_basla_arka_plan_rengi"
                            data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click"
                            title="Arka plan rengi">
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
                        <label class="form-label fs-base fw-bolder" for="pw_makro_genel">Açıklama</label>
                      </td>
                      <td>
                        <div id="pw_makro_genel"></div>
                      </td>
                    </tr>
                    <!--end::Row-->
                  </tbody>
                </table>
              </div>
              <!--end::Table-->
            </form>
            <!--end::Form-->
          </div>


          <div class="tab-pane fade" id="oncelik_tab" role="tabpanel">
          <form>
              <!--begin::Table-->
              <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fw-bold fs-7">
                  <tbody>
                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_baslangic_degeri">Başlangıç Değeri</label></td>
                      <td>
                        <select id="pw_baslangic_degeri" class="form-select  form-select-solid fs-8 py-3 px-4" data-control="select2" data-placeholder="Seçim Yapın" tabindex="0" aria-hidden="false" data-kt-initialized="1">
                        <option value="1" data-kt-icon="circle">Düşük</option>
                        </select>
                      </td>
                    </tr>
                    <!--end::Row-->
                  </tbody>
                </table>
              </div>
              <!--end::Table-->
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end::Modal -->

<!-- begin::Modal -->
<div class="modal fade" tabindex="-1" id="yetkilendirme-genel">
  <div class="modal-dialog modal-dialog-centered modal-lg mw-950px">
    <div class="modal-content">
      <div class="modal-header border pb-3">
        <h3 class="modal-title fs-5">Özellikler - Yetkilendirme</h3>

        <!--begin::Close-->
        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
          <i class="fa-solid fa-xmark fs-5"></i>
        </div>
        <!--end::Close-->
      </div>

      <div class="modal-body">
        <!--begin::Title-->
        <div class="d-flex align-items-center justify-content-between gap-3 mb-8">
          <ul class="nav nav-tabs nav-line-tabs mb-5 fs-6 border-0 gap-6">
            <li class="nav-item mb-0">
              <a class="nav-link active" data-bs-toggle="tab" href="#yetkilendirme_genel_tab">Genel</a>
            </li>
            <li class="nav-item mb-0">
              <a class="nav-link" data-bs-toggle="tab" href="#yetkilendirme_yetkilendirme_tab">Yetkilendirme</a>
            </li>
          </ul>

          <!--begin::Help button-->
          <button class="btn p-0" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse"
            data-bs-placement="bottom" data-bs-original-title="Help center" data-kt-initialized="1">
            <i class="fa-regular fa-circle-question"></i>
          </button>
          <!--end::Help button-->
        </div>
        <!--end::Title-->
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="yetkilendirme_genel_tab" role="tabpanel">
            <!--begin::Form-->
            <form>
              <!--begin::Table-->
              <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fw-bold fs-7">
                  <tbody>
                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder">Aktivite No</label></td>
                      <td>AA000000000000000</td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_aktivite_adi">Aktivite
                          Adı</label></td>
                      <td>
                        <input type="text" class="form-control form-control-solid py-3 px-4 fs-8"
                          id="pw_basla_aktivite_adi" name="pw_basla_aktivite_adi" value="Başla"
                          required disabled />
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_hata_kullanicisi">Hata
                          Kullanıcısı</label></td>
                      <td>
                        <select id="pw_basla_hata_kullanicisi" class="form-select form-select-solid fs-8 py-3 px-4"
                          data-control="select2" data-placeholder="Seçim Yapın">
                          <option value="1">Option 1</option>
                        </select>
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_cerceve_rengi">Çerçeve
                          Rengi</label></td>
                      <td>
                        <!--begin::Color picker-->
                        <div class="pw-color-picker-group">
                          <input type="color" class="pw-color-picker" value="#3699FF" id="pw_basla_cerceve_rengi"
                            name="pw_basla_cerceve_rengi" />
                          <label class="icon pw-shadow-sm" for="pw_basla_cerceve_rengi"
                            data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click"
                            title="Çerçeve rengi">
                            <i class="fa-solid fa-pen pw-text-neutral-300 fs-10 pe-0"></i>
                          </label>
                        </div>
                        <!--end::Color picker-->
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_font_rengi">Font Rengi</label>
                      </td>
                      <td>
                        <!--begin::Color picker-->
                        <div class="pw-color-picker-group">
                          <input type="color" class="pw-color-picker" value="#3699FF" id="pw_basla_font_rengi"
                            name="pw_basla_font_rengi" />
                          <label class="icon pw-shadow-sm" for="pw_basla_font_rengi"
                            data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click"
                            title="Font rengi">
                            <i class="fa-solid fa-pen pw-text-neutral-300 fs-10 pe-0"></i>
                          </label>
                        </div>
                        <!--end::Color picker-->
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_arka_plan_rengi">Arka Plan
                          Rengi</label></td>
                      <td>
                        <!--begin::Color picker-->
                        <div class="pw-color-picker-group">
                          <input type="color" class="pw-color-picker" value="#3699FF" id="pw_basla_arka_plan_rengi"
                            name="pw_basla_arka_plan_rengi" />
                          <label class="icon pw-shadow-sm" for="pw_basla_arka_plan_rengi"
                            data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click"
                            title="Arka plan rengi">
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
                        <label class="form-label fs-base fw-bolder" for="pw_yetkilendirme_genel">Açıklama</label>
                      </td>
                      <td>
                        <div id="pw_yetkilendirme_genel"></div>
                      </td>
                    </tr>
                    <!--end::Row-->
                  </tbody>
                </table>
              </div>
              <!--end::Table-->
            </form>
            <!--end::Form-->
          </div>

          <div class="tab-pane fade" id="yetkilendirme_yetkilendirme_tab" role="tabpanel">
            <!--begin::Row-->
            <div class="row px-4 pb-6">
              <!--begin::Col-->
              <div class="col-12 col-lg-8">
                <!--begin::Form table-->
                <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                  <table class="table w-min-content w-100 gy-2 gx-3 pw-text-neutral-700 fw-bold fs-9 mb-0">
                    <tbody>
                      <!--begin::Row-->
                      <tr>
                        <td class="pb-8">
                          <input class="form-check-input w-20px h-20px" type="radio" value="" id="pw_yetkilendirme_eklentiler" name="yetkilendirme_radio" checked/>
                          <label class="form-check-label pw-text-neutral-700 fs-8" for="pw_yetkilendirme_eklentiler"> Eklentiler</label>
                        </td> 
                        <td class="pb-8">
                          <input class="form-check-input w-20px h-20px" type="radio" value="" id="pw_yetkilendirme_diger" name="yetkilendirme_radio"/>
                          <label class="form-check-label pw-text-neutral-700 fs-8" for="pw_pw_yetkilendirme_diger"> Diğer</label>
                        </td>                                                    
                      </tr>
                      <!--end::Row-->
                      
                      <!--begin::Row-->
                      <tr>
                        <td><label class="form-label fs-9 fw-bolder" for="pw_roller_bilgi_1">Yetki Seti</label></td>
                        <td>
                          <select id="pw_roller_bilgi_1" class="form-select form-select-solid fs-8 py-3 px-4"
                            data-control="select2" data-placeholder="Seçim Yapın">
                            <option value="1">Option 1</option>
                          </select>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td><label class="form-label fs-9 fw-bolder" for="pw_roller_bilgi_2">Nesne No</label></td>
                        <td>
                          <select id="pw_roller_bilgi_2" class="form-select form-select-solid fs-8 py-3 px-4"
                            data-control="select2" data-placeholder="Seçim Yapın">
                            <option value="1">Option 1</option>
                          </select>
                        </td>
                      </tr>
                      <!--end::Row-->
                    </tbody>
                  </table>
                </div>
                <!--end::Form table-->
              </div>
              <!--end::Col-->
            </div>
            <!--end::Row-->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end::Modal -->

<!-- begin::Modal -->
<div class="modal fade" tabindex="-1" id="web-servis-genel">
  <div class="modal-dialog modal-dialog-centered modal-lg mw-950px">
    <div class="modal-content">
      <div class="modal-header border pb-3">
        <h3 class="modal-title fs-5">Özellikler - Web Servis</h3>

        <!--begin::Close-->
        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
          <i class="fa-solid fa-xmark fs-5"></i>
        </div>
        <!--end::Close-->
      </div>

      <div class="modal-body">
        <!--begin::Title-->
        <div class="d-flex align-items-center justify-content-between gap-3 mb-8">
          <ul class="nav nav-tabs nav-line-tabs mb-5 fs-6 border-0 gap-6">
            <li class="nav-item mb-0">
              <a class="nav-link active" data-bs-toggle="tab" href="#web_service_genel_tab">Genel</a>
            </li>
            <li class="nav-item mb-0">
              <a class="nav-link" data-bs-toggle="tab" href="#web_service_ozellikler_tab">Özellikler</a>
            </li>
          </ul>

          <!--begin::Help button-->
          <button class="btn p-0" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse"
            data-bs-placement="bottom" data-bs-original-title="Help center" data-kt-initialized="1">
            <i class="fa-regular fa-circle-question"></i>
          </button>
          <!--end::Help button-->
        </div>
        <!--end::Title-->
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="web_service_genel_tab" role="tabpanel">
            <!--begin::Form-->
            <form>
              <!--begin::Table-->
              <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fw-bold fs-7">
                  <tbody>
                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder">Aktivite No</label></td>
                      <td>AA000000000000000</td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_aktivite_adi">Aktivite
                          Adı</label></td>
                      <td>
                        <input type="text" class="form-control form-control-solid py-3 px-4 fs-8"
                          id="pw_basla_aktivite_adi" name="pw_basla_aktivite_adi" value="Başla"
                          required disabled />
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_hata_kullanicisi">Hata
                          Kullanıcısı</label></td>
                      <td>
                        <select id="pw_basla_hata_kullanicisi" class="form-select form-select-solid fs-8 py-3 px-4"
                          data-control="select2" data-placeholder="Seçim Yapın">
                          <option value="1">Option 1</option>
                        </select>
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_cerceve_rengi">Çerçeve
                          Rengi</label></td>
                      <td>
                        <!--begin::Color picker-->
                        <div class="pw-color-picker-group">
                          <input type="color" class="pw-color-picker" value="#3699FF" id="pw_basla_cerceve_rengi"
                            name="pw_basla_cerceve_rengi" />
                          <label class="icon pw-shadow-sm" for="pw_basla_cerceve_rengi"
                            data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click"
                            title="Çerçeve rengi">
                            <i class="fa-solid fa-pen pw-text-neutral-300 fs-10 pe-0"></i>
                          </label>
                        </div>
                        <!--end::Color picker-->
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_font_rengi">Font Rengi</label>
                      </td>
                      <td>
                        <!--begin::Color picker-->
                        <div class="pw-color-picker-group">
                          <input type="color" class="pw-color-picker" value="#3699FF" id="pw_basla_font_rengi"
                            name="pw_basla_font_rengi" />
                          <label class="icon pw-shadow-sm" for="pw_basla_font_rengi"
                            data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click"
                            title="Font rengi">
                            <i class="fa-solid fa-pen pw-text-neutral-300 fs-10 pe-0"></i>
                          </label>
                        </div>
                        <!--end::Color picker-->
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_arka_plan_rengi">Arka Plan
                          Rengi</label></td>
                      <td>
                        <!--begin::Color picker-->
                        <div class="pw-color-picker-group">
                          <input type="color" class="pw-color-picker" value="#3699FF" id="pw_basla_arka_plan_rengi"
                            name="pw_basla_arka_plan_rengi" />
                          <label class="icon pw-shadow-sm" for="pw_basla_arka_plan_rengi"
                            data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click"
                            title="Arka plan rengi">
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
                        <label class="form-label fs-base fw-bolder" for="pw_web_servis_genel">Açıklama</label>
                      </td>
                      <td>
                        <div id="pw_web_servis_genel"></div>
                      </td>
                    </tr>
                    <!--end::Row-->
                  </tbody>
                </table>
              </div>
              <!--end::Table-->
            </form>
            <!--end::Form-->
          </div>

          <div class="tab-pane fade" id="web_service_ozellikler_tab" role="tabpanel">
            <!--begin::Row-->
            <div class="row px-4 pb-6">
              <!--begin::Col-->
              <div class="col-12 col-lg-8">
                <!--begin::Form table-->
                <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                  <table class="table w-min-content w-100 gy-2 gx-3 pw-text-neutral-700 fw-bold fs-9 mb-0">
                    <tbody>                    
                      <!--begin::Row-->
                      <tr>
                        <td><label class="form-label fs-9 fw-bolder" for="pw_roller_bilgi_1">Servis Adı</label></td>
                        <td>
                          <select id="pw_roller_bilgi_1" class="form-select form-select-solid fs-8 py-3 px-4"
                            data-control="select2" data-placeholder="Seçim Yapın">
                            <option value="1">Option 1</option>
                          </select>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td><label class="form-label fs-9 fw-bolder" for="pw_roller_bilgi_2">Metod Adı</label></td>
                        <td>
                          <select id="pw_roller_bilgi_2" class="form-select form-select-solid fs-8 py-3 px-4"
                            data-control="select2" data-placeholder="Seçim Yapın">
                            <option value="1">Option 1</option>
                          </select>
                        </td>
                      </tr>
                      <!--end::Row-->
                    </tbody>
                  </table>
                </div>
                <!--end::Form table-->
              </div>
              <!--end::Col-->
            </div>
            <!--end::Row-->

            <div class="row px-4 py-6 border rounded-1 pw-border-stroke">
              <div class="d-flex gap-2 p-5">
                <div class="px-4 w-100 py-6 border rounded-1 pw-border-stroke">
                  <div class="nav nav-tabs flex-column nav-line-tabs gap-3 fs-6 border-0 flex-nowrap"
                    role="tablist">
                    <!--begin::Tab item-->
                    <li class="nav-item" role="presentation">
                      <div class="nav-link mx-0 px-4 fs-base rounded-1 fw-medium active w-max-content border border-2 border-dotted border-primary pw-bg-neutral-100">
                        <i class="fa-solid me-2 fa-pen pw-color-current"></i>
                        Ad Soyad
                      </div>
                    </li>
                    <!--end::Tab item-->

                    <!--begin::Tab item-->
                    <li class="nav-item px-4" role="presentation">
                      <span class="nav-link mx-0 fs-base rounded-0 border-0 fw-medium" data-bs-toggle="tab"
                        href="#pw_tab_pane_form_tbok" role="tab" aria-selected="false" tabindex="-1">
                        <i class="fa-solid me-2 fa-calendar-clock pw-color-current"></i>
                        Giriş Tarihi </span>
                    </li>
                    <!--end::Tab item-->
                    <!--begin::Tab item-->
                    <li class="nav-item px-4" role="presentation">
                      <div class="nav-link mx-0 fs-base rounded-0 border-0 fw-medium w-max-content float-start">
                        <i class="fa-solid me-2 fa-dollar-sign pw-color-current"></i>
                        Tutar
                      </div>
                      <div class="nav-link mx-0 px-4 fs-base rounded-1 fw-medium active w-max-content border border-2 border-dotted border-primary pw-bg-neutral-100 float-end">
                        <i class="fa-solid me-2 fa-pen pw-color-current"></i>
                        Ad Soyad
                      </div>
                    </li>
                    <!--end::Tab item-->

                  </div>
                </div>
                <div class="px-4 w-100 py-6 border rounded-1 pw-border-stroke">
                  <div class="nav nav-tabs flex-column nav-line-tabs gap-3 fs-6 border-0 flex-nowrap w-max-content"
                    role="tablist">
                    <!--begin::Tab item-->
                    <li class="nav-item px-4" role="presentation">
                      <span class="nav-link mx-0 fs-base rounded-0 border-0 fw-medium text-primary float-start">123</span>
                      <span class="nav-link mx-0 fs-base rounded-0 border-0 fw-medium ms-5 float-start pw-text-neutral-900">intA</span>
                    </li>
                    <!--end::Tab item-->

                    <!--begin::Tab item-->
                    <li class="nav-item px-4" role="presentation">
                      <span class="nav-link mx-0 fs-base rounded-0 border-0 fw-medium text-primary float-start">123</span>
                      <span class="nav-link mx-0 fs-base rounded-0 border-0 fw-medium ms-5 float-start pw-text-neutral-900">intB</span>
                    </li>
                    <!--end::Tab item-->

                    <!--begin::Tab item-->
                    <li class="nav-item px-4" role="presentation">
                      <span class="nav-link mx-0 fs-base rounded-0 border-0 fw-medium text-primary float-start">123</span>
                      <span class="nav-link mx-0 fs-base rounded-0 border-0 fw-medium ms-5 float-start text-danger">SubtractResult</span>
                    </li>
                    <!--end::Tab item-->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end::Modal -->

<!-- begin::Modal -->
<div class="modal fade" tabindex="-1" id="bekleme-genel">
  <div class="modal-dialog modal-dialog-centered modal-lg mw-950px">
    <div class="modal-content">
      <div class="modal-header border pb-3">
        <h3 class="modal-title fs-5">Özellikler - Bekleme</h3>

        <!--begin::Close-->
        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
          <i class="fa-solid fa-xmark fs-5"></i>
        </div>
        <!--end::Close-->
      </div>

      <div class="modal-body">
        <!--begin::Title-->
        <div class="d-flex align-items-center justify-content-between gap-3 mb-8">
          <ul class="nav nav-tabs nav-line-tabs mb-5 fs-6 border-0 gap-6">
            <li class="nav-item mb-0">
              <a class="nav-link active" data-bs-toggle="tab" href="#bekleme_tab">Genel</a>
            </li>
            <li class="nav-item mb-0">
              <a class="nav-link" data-bs-toggle="tab" href="#bekleme_ozellikler_tab">Özellikler</a>
            </li>
            <li class="nav-item mb-0">
              <a class="nav-link" data-bs-toggle="tab" href="#bekleme_makro_tab">Makro</a>
            </li>
          </ul>

          <!--begin::Help button-->
          <button class="btn p-0" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse"
            data-bs-placement="bottom" data-bs-original-title="Help center" data-kt-initialized="1">
            <i class="fa-regular fa-circle-question"></i>
          </button>
          <!--end::Help button-->
        </div>
        <!--end::Title-->
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="bekleme_tab" role="tabpanel">
            <!--begin::Form-->
            <form>
              <!--begin::Table-->
              <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fw-bold fs-7">
                  <tbody>
                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder">Aktivite No</label></td>
                      <td>AA000000000000000</td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_aktivite_adi">Aktivite
                          Adı</label></td>
                      <td>
                        <input type="text" class="form-control form-control-solid py-3 px-4 fs-8"
                          id="pw_basla_aktivite_adi" name="pw_basla_aktivite_adi" value="Başla"
                          required disabled />
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_hata_kullanicisi">Hata
                          Kullanıcısı</label></td>
                      <td>
                        <select id="pw_basla_hata_kullanicisi" class="form-select form-select-solid fs-8 py-3 px-4"
                          data-control="select2" data-placeholder="Seçim Yapın">
                          <option value="1">Option 1</option>
                        </select>
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_cerceve_rengi">Çerçeve
                          Rengi</label></td>
                      <td>
                        <!--begin::Color picker-->
                        <div class="pw-color-picker-group">
                          <input type="color" class="pw-color-picker" value="#3699FF" id="pw_basla_cerceve_rengi"
                            name="pw_basla_cerceve_rengi" />
                          <label class="icon pw-shadow-sm" for="pw_basla_cerceve_rengi"
                            data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click"
                            title="Çerçeve rengi">
                            <i class="fa-solid fa-pen pw-text-neutral-300 fs-10 pe-0"></i>
                          </label>
                        </div>
                        <!--end::Color picker-->
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_font_rengi">Font Rengi</label>
                      </td>
                      <td>
                        <!--begin::Color picker-->
                        <div class="pw-color-picker-group">
                          <input type="color" class="pw-color-picker" value="#3699FF" id="pw_basla_font_rengi"
                            name="pw_basla_font_rengi" />
                          <label class="icon pw-shadow-sm" for="pw_basla_font_rengi"
                            data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click"
                            title="Font rengi">
                            <i class="fa-solid fa-pen pw-text-neutral-300 fs-10 pe-0"></i>
                          </label>
                        </div>
                        <!--end::Color picker-->
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_arka_plan_rengi">Arka Plan
                          Rengi</label></td>
                      <td>
                        <!--begin::Color picker-->
                        <div class="pw-color-picker-group">
                          <input type="color" class="pw-color-picker" value="#3699FF" id="pw_basla_arka_plan_rengi"
                            name="pw_basla_arka_plan_rengi" />
                          <label class="icon pw-shadow-sm" for="pw_basla_arka_plan_rengi"
                            data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click"
                            title="Arka plan rengi">
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
                        <label class="form-label fs-base fw-bolder" for="pw_bekleme_genel">Açıklama</label>
                      </td>
                      <td>
                        <div id="pw_bekleme_genel"></div>
                      </td>
                    </tr>
                    <!--end::Row-->
                  </tbody>
                </table>
              </div>
              <!--end::Table-->
            </form>
            <!--end::Form-->
          </div>

          <div class="tab-pane fade" id="bekleme_ozellikler_tab" role="tabpanel">
            <!--begin::Row-->
            <div class="row px-4 border pw-border-stroke rounded-2 pb-6">
              <!--begin::Col-->
              <div class="col-12 col-lg-8">
                <!--begin::Form table-->
                <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                  <table class="table w-min-content w-100 gy-2 gx-3 pw-text-neutral-700 fw-bold fs-9 mb-0">
                    <tbody>        
                      <!--begin::Row-->
                      <tr>
                        <td>
                          <!--begin::Radio-->
                          <div class="form-check form-check-custom form-check-solid py-6">
                            <input class="form-check-input w-20px h-20px" type="radio" value=""
                              id="pw_radio_sabit_deger" name="pw_radio_sabit_deger" />
                            <label class="form-check-label pw-text-neutral-700 fs-8 ps-2" for="pw_radio_sabit_deger">
                              Sabit Değer
                            </label>
                          </div>
                          <!--end::Radio-->
                        </td>

                        <td>
                          <!--begin::Radio-->
                          <div class="form-check form-check-custom form-check-solid py-6">
                            <input class="form-check-input w-20px h-20px" type="radio" value=""
                              id="pw_radio_alan" name="pw_radio_sabit_deger" checked="checked" />
                            <label class="form-check-label pw-text-neutral-700 fs-8 ps-2 radio-outline" for="pw_radio_alan">
                              Alan
                            </label>
                          </div>
                          <!--end::Radio-->
                        </td>
                      </tr>
                      <!--end::Row-->
                      
                      <!--begin::Row-->
                      <tr>
                        <td><label class="form-label fs-9 fw-bolder" for="pw_roller_bilgi_1">Alan</label></td>
                        <td>
                          <select id="pw_roller_bilgi_1" class="form-select form-select-solid fs-8 py-3 px-4"
                            data-control="select2" data-placeholder="Seçim Yapın">
                            <option value="1">Option 1</option>
                          </select>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td><label class="form-label fs-9 fw-bolder" for="pw_roller_bilgi_2">Süre</label></td>
                        <td>
                          <select id="pw_roller_bilgi_2" class="form-select form-select-solid fs-8 py-3 px-4"
                            data-control="select2" data-placeholder="Seçim Yapın">
                            <option value="1">Option 1</option>
                          </select>
                        </td>
                      </tr>
                      <!--end::Row-->
                    </tbody>
                  </table>
                </div>
                <!--end::Form table-->
              </div>
              <!--end::Col-->
            </div>
            <!--end::Row-->
          </div>

          <div class="tab-pane fade" id="bekleme_makro_tab" role="tabpanel">
            <!--begin::Form-->
            <form class="d-flex flex-column gap-3">
              <!--begin::Checkbox-->
              <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                <input class="form-check-input" type="checkbox" value="" id="pw_roller_sohbet" checked="checked" />
                <label class="form-check-label pw-text-neutral-700 fw-medium" for="pw_roller_sohbet">
                  Makro Aktif
                </label>
              </div>
              <!--end::Checkbox-->

            </form>
            <!--end::Form-->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end::Modal -->

<!-- begin::Modal -->
<div class="modal fade" tabindex="-1" id="dokuman-yarat-gengel">
  <div class="modal-dialog modal-dialog-centered modal-lg mw-950px">
    <div class="modal-content">
      <div class="modal-header border pb-3">
        <h3 class="modal-title fs-5">Özellikler - X</h3>

        <!--begin::Close-->
        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
          <i class="fa-solid fa-xmark fs-5"></i>
        </div>
        <!--end::Close-->
      </div>

      <div class="modal-body">
        <!--begin::Title-->
        <div class="d-flex align-items-center justify-content-between gap-3 mb-8">
          <ul class="nav nav-tabs nav-line-tabs mb-5 fs-6 border-0 gap-6">
            <li class="nav-item mb-0">
              <a class="nav-link active" data-bs-toggle="tab" href="#dokuman_yarat_genel_tab">Genel</a>
            </li>
            <li class="nav-item mb-0">
              <a class="nav-link" data-bs-toggle="tab" href="#dokuman_yarat_ozellikler_tab">Özellikler</a>
            </li>
            <li class="nav-item mb-0">
              <a class="nav-link" data-bs-toggle="tab" href="#dokuman_yarat_veri_esleme_tab">Veri Eşleme</a>
            </li>
          </ul>

          <!--begin::Help button-->
          <button class="btn p-0" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse"
            data-bs-placement="bottom" data-bs-original-title="Help center" data-kt-initialized="1">
            <i class="fa-regular fa-circle-question"></i>
          </button>
          <!--end::Help button-->
        </div>
        <!--end::Title-->
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="dokuman_yarat_genel_tab" role="tabpanel">
            <!--begin::Form-->
            <form>
              <!--begin::Table-->
              <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fw-bold fs-7">
                  <tbody>
                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder">Aktivite No</label></td>
                      <td>AA000000000000000</td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_aktivite_adi">Aktivite
                          Adı</label></td>
                      <td>
                        <input type="text" class="form-control form-control-solid py-3 px-4 fs-8"
                          id="pw_basla_aktivite_adi" name="pw_basla_aktivite_adi" value="Başla"
                          required disabled />
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_cerceve_rengi">Çerçeve
                          Rengi</label></td>
                      <td>
                        <!--begin::Color picker-->
                        <div class="pw-color-picker-group">
                          <input type="color" class="pw-color-picker" value="#3699FF" id="pw_basla_cerceve_rengi"
                            name="pw_basla_cerceve_rengi" />
                          <label class="icon pw-shadow-sm" for="pw_basla_cerceve_rengi"
                            data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click"
                            title="Çerçeve rengi">
                            <i class="fa-solid fa-pen pw-text-neutral-300 fs-10 pe-0"></i>
                          </label>
                        </div>
                        <!--end::Color picker-->
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_font_rengi">Font Rengi</label>
                      </td>
                      <td>
                        <!--begin::Color picker-->
                        <div class="pw-color-picker-group">
                          <input type="color" class="pw-color-picker" value="#3699FF" id="pw_basla_font_rengi"
                            name="pw_basla_font_rengi" />
                          <label class="icon pw-shadow-sm" for="pw_basla_font_rengi"
                            data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click"
                            title="Font rengi">
                            <i class="fa-solid fa-pen pw-text-neutral-300 fs-10 pe-0"></i>
                          </label>
                        </div>
                        <!--end::Color picker-->
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_arka_plan_rengi">Arka Plan
                          Rengi</label></td>
                      <td>
                        <!--begin::Color picker-->
                        <div class="pw-color-picker-group">
                          <input type="color" class="pw-color-picker" value="#3699FF" id="pw_basla_arka_plan_rengi"
                            name="pw_basla_arka_plan_rengi" />
                          <label class="icon pw-shadow-sm" for="pw_basla_arka_plan_rengi"
                            data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click"
                            title="Arka plan rengi">
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
                        <label class="form-label fs-base fw-bolder" for="pw_dokuman_yarat_genel">Açıklama</label>
                      </td>
                      <td>
                        <div id="pw_dokuman_yarat_genel"></div>
                      </td>
                    </tr>
                    <!--end::Row-->
                  </tbody>
                </table>
              </div>
              <!--end::Table-->
            </form>
            <!--end::Form-->
          </div>

          <div class="tab-pane fade" id="dokuman_yarat_ozellikler_tab" role="tabpanel">
            <!--begin::Row-->
            <div class="row px-4 py-6 border pw-border-stroke rounded-2">
              <!--begin::Col-->
              <div class="col-12 col-lg-8">
                <!--begin::Form table-->
                <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                  <table class="table w-min-content w-100 gy-2 gx-3 pw-text-neutral-700 fw-bold fs-9 mb-0">
                    <tbody>
                      <!--begin::Row-->
                      <tr>
                        <td>
                          <!--begin::Radio-->
                          <div class="form-check form-check-custom form-check-solid py-6">
                            <input class="form-check-input w-20px h-20px" type="radio" value="" id="pw_radio_sabit_deger" name="pw_dokuman_yarat_ozellikler_radio" checked="checked" />
                            <label class="form-check-label pw-text-neutral-700 fs-8 ps-2" for="pw_radio_sabit_deger">
                              Dosya Kartına Ekle
                            </label>
                          </div>
                          <!--end::Radio-->
                        </td>

                        <td>
                          <!--begin::Radio-->
                          <div class="form-check form-check-custom form-check-solid py-6">
                            <input class="form-check-input w-20px h-20px" type="radio" value="" id="pw_radio_alan" name="pw_dokuman_yarat_ozellikler_radio"/>
                            <label class="form-check-label pw-text-neutral-700 fs-8 ps-2" for="pw_radio_alan">
                              Yeni Doküman Ekle
                            </label>
                          </div>
                          <!--end::Radio-->
                        </td>
                      </tr>
                      <!--end::Row-->
                      
                      <!--begin::Row-->
                      <tr>
                        <td><label class="form-label fs-9 fw-bolder" for="pw_roller_bilgi_1">Tip Adı</label></td>
                        <td>
                          <select id="pw_roller_bilgi_1" class="form-select form-select-solid fs-8 py-3 px-4"
                            data-control="select2" data-placeholder="Seçim Yapın">
                            <option value="1">Option 1</option>
                          </select>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td><label class="form-label fs-9 fw-bolder" for="pw_roller_bilgi_2">Taslak</label></td>
                        <td>
                          <select id="pw_roller_bilgi_2" class="form-select form-select-solid fs-8 py-3 px-4"
                            data-control="select2" data-placeholder="Seçim Yapın">
                            <option value="1">Option 1</option>
                          </select>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td><label class="form-label fs-9 fw-bolder" for="pw_roller_bilgi_2">Belge Adı</label></td>
                        <td>
                          <input type="text" class="form-control form-control-solid py-3 px-4 fs-8">
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td><label class="form-label fs-9 fw-bolder" for="pw_roller_bilgi_1">Klasör Adı</label></td>
                        <td>
                          <button type="button" class="d-flex align-items-center btn p-0 w-100" data-bs-stacked-modal="#klasorAdi">
                            <input type="text" class="form-control form-control-solid py-3 px-4 fs-8 me-3">
                            <div class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                              <i class="fa-solid fa-folder fs-7 text-primary"></i>
                            </div>
                          </button>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                      <td><label class="form-label fs-9 fw-bolder" for="pw_roller_bilgi_2">Yetki Adı</label></td>
                      <td>
                        <select id="pw_roller_bilgi_2" class="form-select form-select-solid fs-8 py-3 px-4"
                          data-control="select2" data-placeholder="Seçim Yapın">
                          <option value="1">Option 1</option>
                      </td>
                    </tr>
                    <!--end::Row-->
                    </tbody>
                  </table>
                </div>
                <!--end::Form table-->
              </div>
              <!--end::Col-->
            </div>
            <!--end::Row-->
          </div>

          <div class="tab-pane fade" id="dokuman_yarat_veri_esleme_tab" role="tabpanel">
            <div class="row">
              <div class="d-flex gap-2 p-5">
                <div class="px-4 w-100 py-6 border rounded-1 pw-border-stroke">
                  <div class="nav nav-tabs flex-column nav-line-tabs gap-3 fs-6 border-0 flex-nowrap"
                    role="tablist">
                    <!--begin::Tab item-->
                    <li class="nav-item" role="presentation">
                      <div class="nav-link mx-0 px-12 fs-base rounded-0 fw-medium active w-max-content border border-2 border-dotted border-primary pw-bg-neutral-100 rounded-1">
                        <i class="fa-solid me-2 fa-pen pw-color-current"></i>
                        Ad Soyad
                      </div>
                    </li>
                    <!--end::Tab item-->

                    <!--begin::Tab item-->
                    <li class="nav-item px-4" role="presentation">
                      <span class="nav-link mx-0 fs-base rounded-0 border-0 fw-medium" data-bs-toggle="tab"
                        href="#pw_tab_pane_form_tbok" role="tab" aria-selected="false" tabindex="-1">
                        <i class="fa-solid me-2 fa-calendar-clock pw-color-current"></i>
                        Giriş Tarihi </span>
                    </li>
                    <!--end::Tab item-->
                    <!--begin::Tab item-->
                    <li class="nav-item px-4" role="presentation">
                      <div class="nav-link mx-0 fs-base rounded-0 border-0 fw-medium w-max-content float-start">
                        <i class="fa-solid me-2 fa-dollar-sign pw-color-current"></i>
                        Tutar
                      </div>
                      <div class="nav-link mx-0 px-12 fs-base rounded-0 fw-medium active w-max-content border border-2 border-dotted border-primary pw-bg-neutral-100 rounded-1 float-end">
                        <i class="fa-solid me-2 fa-pen pw-color-current"></i>
                        Ad Soyad
                      </div>
                    </li>
                    <!--end::Tab item-->
                  </div>
                </div>
                <div class="px-4 w-100 py-6 border rounded-1 pw-border-stroke">
                  <div class="nav nav-tabs flex-column nav-line-tabs gap-3 fs-6 border-0 flex-nowrap w-max-content"
                    role="tablist">
                    <!--begin::Tab item-->
                    <li class="nav-item px-4" role="presentation">
                      <span class="nav-link mx-0 fs-base rounded-0 border-0 fw-medium">
                        <i class="fa-solid me-2 fa-pen pw-color-current"></i>
                        KD-Alt Belge Grubu <i class="fa-solid me-2 fa-arrow-left-long"></i> Ad Soyad <i
                          class="fa-solid me-2 fa-circle-x"></i>
                      </span>
                    </li>
                    <!--end::Tab item-->

                    <!--begin::Tab item-->
                    <li class="nav-item px-4" role="presentation">
                      <span class="nav-link mx-0 fs-base rounded-0 border-0 fw-medium" data-bs-toggle="tab"
                        href="#pw_tab_pane_form_tbok" role="tab" aria-selected="false" tabindex="-1">
                        <i class="fa-solid me-2 fa-pen pw-color-current"></i>
                        KD-Belge Grubu </span>
                    </li>
                    <!--end::Tab item-->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end::Modal -->

<!-- begin::Modal -->
<div class="modal fade" tabindex="-1" id="dosya-karti-yarat-genel">
  <div class="modal-dialog modal-dialog-centered modal-lg mw-950px">
    <div class="modal-content">
      <div class="modal-header border pb-3">
        <h3 class="modal-title fs-5">Özellikler - X</h3>

        <!--begin::Close-->
        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
          <i class="fa-solid fa-xmark fs-5"></i>
        </div>
        <!--end::Close-->
      </div>

      <div class="modal-body">
        <!--begin::Title-->
        <div class="d-flex align-items-center justify-content-between gap-3 mb-8">
          <ul class="nav nav-tabs nav-line-tabs mb-5 fs-6 border-0 gap-6">
            <li class="nav-item mb-0">
              <a class="nav-link active" data-bs-toggle="tab" href="#dosya_karti_yarat_genel_tab">Genel</a>
            </li>
            <li class="nav-item mb-0">
              <a class="nav-link" data-bs-toggle="tab" href="#dosya_karti_yarat_kart_tab">Kart Tasarım</a>
            </li>
            <li class="nav-item mb-0">
              <a class="nav-link" data-bs-toggle="tab" href="#dosya_karti_yarat_gelismis_tab">Gelismis</a>
            </li>
          </ul>

          <!--begin::Help button-->
          <button class="btn p-0" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse"
            data-bs-placement="bottom" data-bs-original-title="Help center" data-kt-initialized="1">
            <i class="fa-regular fa-circle-question"></i>
          </button>
          <!--end::Help button-->
        </div>
        <!--end::Title-->
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="dosya_karti_yarat_genel_tab" role="tabpanel">
            <!--begin::Form-->
            <form>
              <!--begin::Table-->
              <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fw-bold fs-7">
                  <tbody>
                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder">Aktivite No</label></td>
                      <td>AA000000000000000</td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_aktivite_adi">Aktivite
                          Adı</label></td>
                      <td>
                        <input type="text" class="form-control form-control-solid py-3 px-4 fs-8"
                          id="pw_basla_aktivite_adi" name="pw_basla_aktivite_adi" value="Başla"
                          required disabled />
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_cerceve_rengi">Çerçeve
                          Rengi</label></td>
                      <td>
                        <!--begin::Color picker-->
                        <div class="pw-color-picker-group">
                          <input type="color" class="pw-color-picker" value="#3699FF" id="pw_basla_cerceve_rengi"
                            name="pw_basla_cerceve_rengi" />
                          <label class="icon pw-shadow-sm" for="pw_basla_cerceve_rengi"
                            data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click"
                            title="Çerçeve rengi">
                            <i class="fa-solid fa-pen pw-text-neutral-300 fs-10 pe-0"></i>
                          </label>
                        </div>
                        <!--end::Color picker-->
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_font_rengi">Font Rengi</label>
                      </td>
                      <td>
                        <!--begin::Color picker-->
                        <div class="pw-color-picker-group">
                          <input type="color" class="pw-color-picker" value="#3699FF" id="pw_basla_font_rengi"
                            name="pw_basla_font_rengi" />
                          <label class="icon pw-shadow-sm" for="pw_basla_font_rengi"
                            data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click"
                            title="Font rengi">
                            <i class="fa-solid fa-pen pw-text-neutral-300 fs-10 pe-0"></i>
                          </label>
                        </div>
                        <!--end::Color picker-->
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_arka_plan_rengi">Arka Plan
                          Rengi</label></td>
                      <td>
                        <!--begin::Color picker-->
                        <div class="pw-color-picker-group">
                          <input type="color" class="pw-color-picker" value="#3699FF" id="pw_basla_arka_plan_rengi"
                            name="pw_basla_arka_plan_rengi" />
                          <label class="icon pw-shadow-sm" for="pw_basla_arka_plan_rengi"
                            data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click"
                            title="Arka plan rengi">
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
                        <label class="form-label fs-base fw-bolder" for="pw_dosya_karti_yarat_genel">Açıklama</label>
                      </td>
                      <td>
                        <div id="pw_dosya_karti_yarat_genel"></div>
                      </td>
                    </tr>
                    <!--end::Row-->
                  </tbody>
                </table>
              </div>
              <!--end::Table-->
            </form>
            <!--end::Form-->
          </div>

          <div class="tab-pane fade" id="dosya_karti_yarat_kart_tab" role="tabpanel">
            <!--begin::Row-->
            <div class="row px-4 pb-6">
              <!--begin::Col-->
              <div class="col-12 col-lg-8 col-md-8">
                <!--begin::Form table-->
                <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                  <table class="table w-min-content w-100 gy-2 gx-3 pw-text-neutral-700 fw-bold fs-9 mb-0">
                    <tbody>
                      <!--begin::Row-->
                      <tr>
                        <td><label class="form-label fs-9 fw-bolder" for="pw_roller_bilgi_1">Klasör Adı</label></td>
                        <td>
                          <button type="button" class="d-flex align-items-center btn p-0 w-100" data-bs-stacked-modal="#dosyaKlasorAdi">
                            <input type="text" class="form-control form-control-solid py-3 px-4 fs-8 me-3">
                            <div class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                              <i class="fa-solid fa-folder fs-7 text-primary"></i>
                            </div>
                          </button>
                        </td>
                      </tr>
                      <!--end::Row-->
                      
                      <!--begin::Row-->
                      <tr>
                        <td><label class="form-label fs-9 fw-bolder" for="pw_roller_bilgi_1">Dosya Kartı</label></td>
                        <td>
                          <select id="pw_roller_bilgi_1" class="form-select form-select-solid fs-8 py-3 px-4"
                            data-control="select2" data-placeholder="Seçim Yapın">
                            <option value="1">Option 1</option>
                          </select>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td><label class="form-label fs-9 fw-bolder" for="pw_roller_bilgi_2">Doküman Adı</label></td>
                        <td>
                          <input type="text" class="form-control form-control-solid py-3 px-4 fs-8 mw-475px">
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td>
                          <input class="form-check-input" type="checkbox" value="" id="pw_roller_sohbet" checked="checked" />
                          <label class="form-check-label pw-text-neutral-700 fw-medium ps-2" for="pw_roller_sohbet">
                            Yeni Eklenti olarak düzenle
                          </label>
                        </td>
                      </tr>
                      <!--end::Row-->

                    </tbody>
                  </table>
                </div>
                <!--end::Form table-->
              </div>
              <!--end::Col-->
            </div>
            <!--end::Row-->
          </div>

          <div class="tab-pane fade" id="dosya_karti_yarat_gelismis_tab" role="tabpanel">
            <!--begin::Row-->
            <div class="row">
              <div class="d-flex gap-2 p-5">
                <div class="px-4 w-100 py-6 border rounded-1 pw-border-stroke">
                  <div class="nav nav-tabs flex-column nav-line-tabs gap-3 fs-6 border-0 flex-nowrap"
                    role="tablist">
                    <!--begin::Tab item-->
                    <li class="nav-item" role="presentation">
                      <div class="nav-link mx-0 px-12 fs-base rounded-0 fw-medium active w-max-content border border-2 border-dotted border-primary pw-bg-neutral-100 rounded-1">
                        <i class="fa-solid me-2 fa-pen pw-color-current"></i>
                        Ad Soyad
                      </div>
                    </li>
                    <!--end::Tab item-->

                    <!--begin::Tab item-->
                    <li class="nav-item px-4" role="presentation">
                      <span class="nav-link mx-0 fs-base rounded-0 border-0 fw-medium" data-bs-toggle="tab"
                        href="#pw_tab_pane_form_tbok" role="tab" aria-selected="false" tabindex="-1">
                        <i class="fa-solid me-2 fa-calendar-clock pw-color-current"></i>
                        Giriş Tarihi </span>
                    </li>
                    <!--end::Tab item-->
                    <!--begin::Tab item-->
                    <li class="nav-item px-4" role="presentation">
                      <div class="nav-link mx-0 fs-base rounded-0 border-0 fw-medium w-max-content float-start">
                        <i class="fa-solid me-2 fa-dollar-sign pw-color-current"></i>
                        Tutar
                      </div>
                      <div class="nav-link mx-0 px-12 fs-base rounded-0 fw-medium active w-max-content border border-2 border-dotted border-primary pw-bg-neutral-100 rounded-1 float-end">
                        <i class="fa-solid me-2 fa-pen pw-color-current"></i>
                        Ad Soyad
                      </div>
                    </li>
                    <!--end::Tab item-->

                  </div>
                </div>
                <div class="px-4 w-100 py-6 border rounded-1 pw-border-stroke">
                  <div class="nav nav-tabs flex-column nav-line-tabs gap-3 fs-6 border-0 flex-nowrap w-max-content"
                    role="tablist">
                    <!--begin::Tab item-->
                    <li class="nav-item px-4" role="presentation">
                      <span class="nav-link mx-0 fs-base rounded-0 border-0 fw-medium active">
                        <i class="fa-solid me-2 fa-pen pw-color-current"></i>
                        KD-Alt Belge Grubu <i class="fa-solid me-2 fa-arrow-left-long"></i> Ad Soyad <i
                          class="fa-solid me-2 fa-circle-x"></i>
                      </span>
                    </li>
                    <!--end::Tab item-->

                    <!--begin::Tab item-->
                    <li class="nav-item px-4" role="presentation">
                      <span class="nav-link mx-0 fs-base rounded-0 border-0 fw-medium" data-bs-toggle="tab"
                        href="#pw_tab_pane_form_tbok" role="tab" aria-selected="false" tabindex="-1">
                        <i class="fa-solid me-2 fa-pen pw-color-current"></i>
                        KD-Belge Grubu </span>
                    </li>
                    <!--end::Tab item-->
                  </div>
                </div>
              </div>
            </div>
            <!--end::Row-->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end::Modal -->

<!-- begin::Modal -->
<div class="modal fade" tabindex="-1" id="logo-modulu-genel">
  <div class="modal-dialog modal-dialog-centered modal-lg mw-950px">
    <div class="modal-content">
      <div class="modal-header border pb-3">
        <h3 class="modal-title fs-5">Özellikler - X</h3>

        <!--begin::Close-->
        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
          <i class="fa-solid fa-xmark fs-5"></i>
        </div>
        <!--end::Close-->
      </div>

      <div class="modal-body">
        <!--begin::Title-->
        <div class="d-flex align-items-center justify-content-between gap-3 mb-8">
          <ul class="nav nav-tabs nav-line-tabs mb-5 fs-6 border-0 gap-6">
            <li class="nav-item mb-0">
              <a class="nav-link active" data-bs-toggle="tab" href="#logo_modulu_genel_tab">Genel</a>
            </li>
            <li class="nav-item mb-0">
              <a class="nav-link" data-bs-toggle="tab" href="#logo_modulu_parametreler_tab">Parametreler</a>
            </li>
            <li class="nav-item mb-0">
              <a class="nav-link" data-bs-toggle="tab" href="#logo_modulu_veri_tab">Veri Eşleme</a>
            </li>
          </ul>

          <!--begin::Help button-->
          <button class="btn p-0" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse"
            data-bs-placement="bottom" data-bs-original-title="Help center" data-kt-initialized="1">
            <i class="fa-regular fa-circle-question"></i>
          </button>
          <!--end::Help button-->
        </div>
        <!--end::Title-->
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="logo_modulu_genel_tab" role="tabpanel">
            <!--begin::Form-->
            <form>
              <!--begin::Table-->
              <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fw-bold fs-7">
                  <tbody>
                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder">Aktivite No</label></td>
                      <td>AA000000000000000</td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_aktivite_adi">Aktivite
                          Adı</label></td>
                      <td>
                        <input type="text" class="form-control form-control-solid py-3 px-4 fs-8"
                          id="pw_basla_aktivite_adi" name="pw_basla_aktivite_adi" value="Başla"
                          required disabled />
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_cerceve_rengi">Çerçeve
                          Rengi</label></td>
                      <td>
                        <!--begin::Color picker-->
                        <div class="pw-color-picker-group">
                          <input type="color" class="pw-color-picker" value="#3699FF" id="pw_basla_cerceve_rengi"
                            name="pw_basla_cerceve_rengi" />
                          <label class="icon pw-shadow-sm" for="pw_basla_cerceve_rengi"
                            data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click"
                            title="Çerçeve rengi">
                            <i class="fa-solid fa-pen pw-text-neutral-300 fs-10 pe-0"></i>
                          </label>
                        </div>
                        <!--end::Color picker-->
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_font_rengi">Font Rengi</label>
                      </td>
                      <td>
                        <!--begin::Color picker-->
                        <div class="pw-color-picker-group">
                          <input type="color" class="pw-color-picker" value="#3699FF" id="pw_basla_font_rengi"
                            name="pw_basla_font_rengi" />
                          <label class="icon pw-shadow-sm" for="pw_basla_font_rengi"
                            data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click"
                            title="Font rengi">
                            <i class="fa-solid fa-pen pw-text-neutral-300 fs-10 pe-0"></i>
                          </label>
                        </div>
                        <!--end::Color picker-->
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_arka_plan_rengi">Arka Plan
                          Rengi</label></td>
                      <td>
                        <!--begin::Color picker-->
                        <div class="pw-color-picker-group">
                          <input type="color" class="pw-color-picker" value="#3699FF" id="pw_basla_arka_plan_rengi"
                            name="pw_basla_arka_plan_rengi" />
                          <label class="icon pw-shadow-sm" for="pw_basla_arka_plan_rengi"
                            data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click"
                            title="Arka plan rengi">
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
                        <label class="form-label fs-base fw-bolder" for="pw_logo_modulu_genel">Açıklama</label>
                      </td>
                      <td>
                        <div id="pw_logo_modulu_genel"></div>
                      </td>
                    </tr>
                    <!--end::Row-->
                  </tbody>
                </table>
              </div>
              <!--end::Table-->
            </form>
            <!--end::Form-->
          </div>

          <div class="tab-pane fade" id="logo_modulu_parametreler_tab" role="tabpanel">
            <!--begin::Row-->
            <div class="row px-4 pb-6">
              <!--begin::Col-->
              <div class="col-12 col-lg-8 col-md-8">
                <!--begin::Form table-->
                <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                  <table class="table w-min-content w-100 gy-2 gx-3 pw-text-neutral-700 fw-bold fs-9 mb-0">
                    <tbody>
                      <!--begin::Row-->
                      <tr>
                        <td><label class="form-label fs-9 fw-bolder" for="pw_roller_bilgi_1">Entegrasyon Adı</label></td>
                        <td>
                          <select id="pw_roller_bilgi_1" class="form-select form-select-solid fs-8 py-3 px-4"
                            data-control="select2" data-placeholder="Seçim Yapın">
                            <option value="1">Option 1</option>
                          </select>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td><label class="form-label fs-9 fw-bolder" for="pw_roller_bilgi_1">Filtre</label></td>
                        <td>
                          <button type="button" class="d-flex align-items-center btn p-0 w-100" data-bs-stacked-modal="#logoModuluKlasorAdi">
                            <input type="text" class="form-control form-control-solid py-3 px-4 fs-8 me-3">
                            <div class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                              <i class="fa-solid fa-folder fs-7 text-primary"></i>
                            </div>
                          </button>
                        </td>
                      </tr>
                      <!--end::Row-->
                                           
                      <!--begin::Row-->
                      <tr>
                        <td><label class="form-label fs-9 fw-bolder" for="pw_roller_bilgi_1">Logo Nesnesi</label></td>
                        <td>
                          <select id="pw_roller_bilgi_1" class="form-select form-select-solid fs-8 py-3 px-4"
                            data-control="select2" data-placeholder="Seçim Yapın">
                            <option value="1">Option 1</option>
                          </select>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td><label class="form-label fs-9 fw-bolder" for="pw_roller_bilgi_1">Hedef Nesne</label></td>
                        <td>
                          <select id="pw_roller_bilgi_1" class="form-select form-select-solid fs-8 py-3 px-4"
                            data-control="select2" data-placeholder="Seçim Yapın">
                            <option value="1">Option 1</option>
                          </select>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td><label class="form-label fs-9 fw-bolder" for="pw_roller_bilgi_1">Sonuç</label></td>
                        <td>
                          <select id="pw_roller_bilgi_1" class="form-select form-select-solid fs-8 py-3 px-4"
                            data-control="select2" data-placeholder="Seçim Yapın">
                            <option value="1">Option 1</option>
                          </select>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td><label class="form-label fs-9 fw-bolder" for="pw_roller_bilgi_2">Başarılı</label></td>
                        <td>
                          <input type="text" class="form-control form-control-solid py-3 px-4 fs-8 mw-475px">
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td><input class="form-check-input" type="checkbox" value="" id="pw_roller_sohbet" checked="checked" /></td>
                        <td>
                          <label class="form-check-label pw-text-neutral-700 fw-medium" for="pw_roller_sohbet">
                            Hata Yaz
                          </label>
                        </td>
                      </tr>
                      <!--end::Row-->

                    </tbody>
                  </table>
                </div>
                <!--end::Form table-->
              </div>
              <!--end::Col-->
            </div>
            <!--end::Row-->
          </div>

          <div class="tab-pane fade" id="logo_modulu_veri_tab" role="tabpanel">
            <!--begin::Row-->
            <div class="row px-4 pb-6">
              <!--begin::Col-->
              <div class="col-12 col-lg-12">
                <!--begin::Form table-->
                <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                  <table class="table w-min-content w-100 gy-2 gx-3 pw-text-neutral-700 fw-bold fs-9 mb-0">
                    <tbody>
                      <!--begin::Row-->
                      <tr>
                        <td class="pb-8">
                          <input class="form-check-input w-20px h-20px" type="radio" value="" id="pw_yetkilendirme_eklentiler" name="logo_modulu_veri_radio" checked/>
                          <label class="form-check-label pw-text-neutral-700 fs-8" for="pw_yetkilendirme_eklentiler"> Giriş Parametreleri</label>
                        </td> 
                        <td class="pb-8">
                          <input class="form-check-input w-20px h-20px" type="radio" value="" id="pw_yetkilendirme_diger" name="logo_modulu_veri_radio" />
                          <label class="form-check-label pw-text-neutral-700 fs-8" for="pw_pw_yetkilendirme_diger"> Çıkış Parametreleri</label>
                        </td>                                                    
                      </tr>
                      <!--end::Row-->
                      

                    </tbody>
                  </table>
                </div>
                <!--end::Form table-->
              </div>
              <!--end::Col-->
            </div>
            <!--end::Row-->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end::Modal -->

<!--begin::Modal-->
<div class="modal fade" tabindex="-1" id="klasorAdi" role="dialog" aria-labelledby="klasorlerLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg mw-425px">
    <div class="modal-content">
      <div class="modal-header border pb-3">
        <h3 class="modal-title fs-5">Klasörler</h3>

        <!--begin::Close-->
        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
          <i class="fa-solid fa-xmark fs-5"></i>
        </div>
        <!--end::Close-->
      </div>

      <div class="modal-body">
        <div class="border rounded-2 pw-border-stroke scroll h-400px py-3 px-4">
          <!--begin::Menu-->
          <div class="menu menu-rounded menu-column pw-menu-custom-arrow menu-state-bg fw-semibold"
            data-kt-menu="true">
            <!--begin::Menu item-->
            <div class="menu-item menu-sub-indention menu-accordion" data-kt-menu-trigger="click">
              <!--begin::Menu link-->
              <a href="javascript:void(0)" class="menu-link p-1">
                <span class="menu-arrow me-0">
                  <i class="fa-sharp fa-solid fa-triangle fs-7"></i>
                </span>
                <span class="menu-icon">
                  <i class="fa-sharp fa-solid fa-folder fs-6 pw-text-primary-300"></i>
                </span>
                <span class="menu-title fs-9 fw-semibold pw-text-neutral-700">A departmanı</span>
              </a>
              <!--end::Menu link-->
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item menu-sub-indention menu-accordion" data-kt-menu-trigger="click">
              <!--begin::Menu link-->
              <a href="javascript:void(0)" class="menu-link p-1">
                <span class="menu-arrow me-0">
                  <i class="fa-sharp fa-solid fa-triangle fs-7"></i>
                </span>
                <span class="menu-icon">
                  <i class="fa-sharp fa-solid fa-folder fs-6 pw-text-primary-300"></i>
                </span>
                <span class="menu-title fs-9 fw-semibold pw-text-neutral-700">Akçelik Poc</span>
              </a>
              <!--end::Menu link-->
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item menu-sub-indention menu-accordion" data-kt-menu-trigger="click">
              <!--begin::Menu link-->
              <a href="javascript:void(0)" class="menu-link p-1">
                <span class="menu-arrow me-0">
                  <i class="fa-sharp fa-solid fa-triangle fs-7"></i>
                </span>
                <span class="menu-icon">
                  <i class="fa-sharp fa-solid fa-folder fs-6 pw-text-primary-300"></i>
                </span>
                <span class="menu-title fs-9 fw-semibold pw-text-neutral-700">Akçelik Poc</span>
              </a>
              <!--end::Menu link-->
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item menu-sub-indention menu-accordion" data-kt-menu-trigger="click">
              <!--begin::Menu link-->
              <a href="javascript:void(0)" class="menu-link p-1">
                <span class="menu-arrow me-0">
                  <i class="fa-sharp fa-solid fa-triangle fs-7"></i>
                </span>
                <span class="menu-icon">
                  <i class="fa-sharp fa-solid fa-folder fs-6 pw-text-primary-300"></i>
                </span>
                <span class="menu-title fs-9 fw-semibold pw-text-neutral-700">Akçelik Poc</span>
              </a>
              <!--end::Menu link-->
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item menu-sub-indention menu-accordion" data-kt-menu-trigger="click">
              <!--begin::Menu link-->
              <a href="javascript:void(0)" class="menu-link p-1">
                <span class="menu-arrow me-0">
                  <i class="fa-sharp fa-solid fa-triangle fs-7"></i>
                </span>
                <span class="menu-icon">
                  <i class="fa-sharp fa-solid fa-folder fs-6 pw-text-primary-300"></i>
                </span>
                <span class="menu-title fs-9 fw-semibold pw-text-neutral-700">Akçelik Poc</span>
              </a>
              <!--end::Menu link-->
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item menu-sub-indention menu-accordion" data-kt-menu-trigger="click">
              <!--begin::Menu link-->
              <a href="javascript:void(0)" class="menu-link p-1">
                <span class="menu-arrow me-0">
                  <i class="fa-sharp fa-solid fa-triangle fs-7"></i>
                </span>
                <span class="menu-icon">
                  <i class="fa-sharp fa-solid fa-folder fs-6 pw-text-primary-300"></i>
                </span>
                <span class="menu-title fs-9 fw-semibold pw-text-neutral-700">Akçelik Poc</span>
              </a>
              <!--end::Menu link-->
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item menu-sub-indention menu-accordion" data-kt-menu-trigger="click">
              <!--begin::Menu link-->
              <a href="javascript:void(0)" class="menu-link p-1">
                <span class="menu-arrow me-0">
                  <i class="fa-sharp fa-solid fa-triangle fs-7"></i>
                </span>
                <span class="menu-icon">
                  <i class="fa-sharp fa-solid fa-folder fs-6 pw-text-primary-300"></i>
                </span>
                <span class="menu-title fs-9 fw-semibold pw-text-neutral-700">Akçelik Poc</span>
              </a>
              <!--end::Menu link-->
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item menu-sub-indention menu-accordion" data-kt-menu-trigger="click">
              <!--begin::Menu link-->
              <a href="javascript:void(0)" class="menu-link p-1">
                <span class="menu-arrow me-0">
                  <i class="fa-sharp fa-solid fa-triangle fs-7"></i>
                </span>
                <span class="menu-icon">
                  <i class="fa-sharp fa-solid fa-folder fs-6 pw-text-primary-300"></i>
                </span>
                <span class="menu-title fs-9 fw-semibold pw-text-neutral-700">Akçelik Poc</span>
              </a>
              <!--end::Menu link-->
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item menu-sub-indention menu-accordion" data-kt-menu-trigger="click">
              <!--begin::Menu link-->
              <a href="javascript:void(0)" class="menu-link p-1">
                <span class="menu-arrow me-0">
                  <i class="fa-sharp fa-solid fa-triangle fs-7"></i>
                </span>
                <span class="menu-icon">
                  <i class="fa-sharp fa-solid fa-folder fs-6 pw-text-primary-300"></i>
                </span>
                <span class="menu-title fs-9 fw-semibold pw-text-neutral-700">Akçelik Poc</span>
              </a>
              <!--end::Menu link-->
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item menu-sub-indention menu-accordion" data-kt-menu-trigger="click">
              <!--begin::Menu link-->
              <a href="javascript:void(0)" class="menu-link p-1">
                <span class="menu-arrow me-0">
                  <i class="fa-sharp fa-solid fa-triangle fs-7"></i>
                </span>
                <span class="menu-icon">
                  <i class="fa-sharp fa-solid fa-folder fs-6 pw-text-primary-300"></i>
                </span>
                <span class="menu-title fs-9 fw-semibold pw-text-neutral-700">Akçelik Poc</span>
              </a>
              <!--end::Menu link-->
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item menu-sub-indention menu-accordion" data-kt-menu-trigger="click">
              <!--begin::Menu link-->
              <a href="javascript:void(0)" class="menu-link p-1">
                <span class="menu-arrow me-0">
                  <i class="fa-sharp fa-solid fa-triangle fs-7"></i>
                </span>
                <span class="menu-icon">
                  <i class="fa-sharp fa-solid fa-folder fs-6 pw-text-primary-300"></i>
                </span>
                <span class="menu-title fs-9 fw-semibold pw-text-neutral-700">Akçelik Poc</span>
              </a>
              <!--end::Menu link-->
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item menu-sub-indention menu-accordion" data-kt-menu-trigger="click">
              <!--begin::Menu link-->
              <a href="javascript:void(0)" class="menu-link p-1">
                <span class="menu-arrow me-0">
                  <i class="fa-sharp fa-solid fa-triangle fs-7"></i>
                </span>
                <span class="menu-icon">
                  <i class="fa-sharp fa-solid fa-folder fs-6 pw-text-primary-300"></i>
                </span>
                <span class="menu-title fs-9 fw-semibold pw-text-neutral-700">Akçelik Poc</span>
              </a>
              <!--end::Menu link-->
            </div>
            <!--end::Menu item-->
          </div>
          <!--end::Menu-->
        </div>
      </div>

      <div class="modal-footer">
        <div class="d-flex align-items-center justify-content-end gap-3 pt-5">
          <button type="button" class="btn btn-active-light fs-8 py-3 px-6" data-bs-dismiss="moda">
            İptal
          </button>
          <button type="submit" class="btn btn-primary fs-8 py-3 px-6">
            Tamam
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
<!--end::Modal-->

<!--begin::Modal-->
<div class="modal fade" tabindex="-1" id="dosyaKlasorAdi" role="dialog" aria-labelledby="klasorlerLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg mw-425px">
    <div class="modal-content">
      <div class="modal-header border pb-3">
        <h3 class="modal-title fs-5">Klasörler</h3>

        <!--begin::Close-->
        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
          <i class="fa-solid fa-xmark fs-5"></i>
        </div>
        <!--end::Close-->
      </div>

      <div class="modal-body">
        <div class="border rounded-2 pw-border-stroke scroll h-400px py-3 px-4">
          <!--begin::Menu-->
          <div class="menu menu-rounded menu-column pw-menu-custom-arrow menu-state-bg fw-semibold"
            data-kt-menu="true">
            <!--begin::Menu item-->
            <div class="menu-item menu-sub-indention menu-accordion" data-kt-menu-trigger="click">
              <!--begin::Menu link-->
              <a href="javascript:void(0)" class="menu-link p-1">
                <span class="menu-arrow me-0">
                  <i class="fa-sharp fa-solid fa-triangle fs-7"></i>
                </span>
                <span class="menu-icon">
                  <i class="fa-sharp fa-solid fa-folder fs-6 pw-text-primary-300"></i>
                </span>
                <span class="menu-title fs-9 fw-semibold pw-text-neutral-700">A departmanı</span>
              </a>
              <!--end::Menu link-->
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item menu-sub-indention menu-accordion" data-kt-menu-trigger="click">
              <!--begin::Menu link-->
              <a href="javascript:void(0)" class="menu-link p-1">
                <span class="menu-arrow me-0">
                  <i class="fa-sharp fa-solid fa-triangle fs-7"></i>
                </span>
                <span class="menu-icon">
                  <i class="fa-sharp fa-solid fa-folder fs-6 pw-text-primary-300"></i>
                </span>
                <span class="menu-title fs-9 fw-semibold pw-text-neutral-700">Akçelik Poc</span>
              </a>
              <!--end::Menu link-->
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item menu-sub-indention menu-accordion" data-kt-menu-trigger="click">
              <!--begin::Menu link-->
              <a href="javascript:void(0)" class="menu-link p-1">
                <span class="menu-arrow me-0">
                  <i class="fa-sharp fa-solid fa-triangle fs-7"></i>
                </span>
                <span class="menu-icon">
                  <i class="fa-sharp fa-solid fa-folder fs-6 pw-text-primary-300"></i>
                </span>
                <span class="menu-title fs-9 fw-semibold pw-text-neutral-700">Akçelik Poc</span>
              </a>
              <!--end::Menu link-->
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item menu-sub-indention menu-accordion" data-kt-menu-trigger="click">
              <!--begin::Menu link-->
              <a href="javascript:void(0)" class="menu-link p-1">
                <span class="menu-arrow me-0">
                  <i class="fa-sharp fa-solid fa-triangle fs-7"></i>
                </span>
                <span class="menu-icon">
                  <i class="fa-sharp fa-solid fa-folder fs-6 pw-text-primary-300"></i>
                </span>
                <span class="menu-title fs-9 fw-semibold pw-text-neutral-700">Akçelik Poc</span>
              </a>
              <!--end::Menu link-->
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item menu-sub-indention menu-accordion" data-kt-menu-trigger="click">
              <!--begin::Menu link-->
              <a href="javascript:void(0)" class="menu-link p-1">
                <span class="menu-arrow me-0">
                  <i class="fa-sharp fa-solid fa-triangle fs-7"></i>
                </span>
                <span class="menu-icon">
                  <i class="fa-sharp fa-solid fa-folder fs-6 pw-text-primary-300"></i>
                </span>
                <span class="menu-title fs-9 fw-semibold pw-text-neutral-700">Akçelik Poc</span>
              </a>
              <!--end::Menu link-->
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item menu-sub-indention menu-accordion" data-kt-menu-trigger="click">
              <!--begin::Menu link-->
              <a href="javascript:void(0)" class="menu-link p-1">
                <span class="menu-arrow me-0">
                  <i class="fa-sharp fa-solid fa-triangle fs-7"></i>
                </span>
                <span class="menu-icon">
                  <i class="fa-sharp fa-solid fa-folder fs-6 pw-text-primary-300"></i>
                </span>
                <span class="menu-title fs-9 fw-semibold pw-text-neutral-700">Akçelik Poc</span>
              </a>
              <!--end::Menu link-->
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item menu-sub-indention menu-accordion" data-kt-menu-trigger="click">
              <!--begin::Menu link-->
              <a href="javascript:void(0)" class="menu-link p-1">
                <span class="menu-arrow me-0">
                  <i class="fa-sharp fa-solid fa-triangle fs-7"></i>
                </span>
                <span class="menu-icon">
                  <i class="fa-sharp fa-solid fa-folder fs-6 pw-text-primary-300"></i>
                </span>
                <span class="menu-title fs-9 fw-semibold pw-text-neutral-700">Akçelik Poc</span>
              </a>
              <!--end::Menu link-->
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item menu-sub-indention menu-accordion" data-kt-menu-trigger="click">
              <!--begin::Menu link-->
              <a href="javascript:void(0)" class="menu-link p-1">
                <span class="menu-arrow me-0">
                  <i class="fa-sharp fa-solid fa-triangle fs-7"></i>
                </span>
                <span class="menu-icon">
                  <i class="fa-sharp fa-solid fa-folder fs-6 pw-text-primary-300"></i>
                </span>
                <span class="menu-title fs-9 fw-semibold pw-text-neutral-700">Akçelik Poc</span>
              </a>
              <!--end::Menu link-->
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item menu-sub-indention menu-accordion" data-kt-menu-trigger="click">
              <!--begin::Menu link-->
              <a href="javascript:void(0)" class="menu-link p-1">
                <span class="menu-arrow me-0">
                  <i class="fa-sharp fa-solid fa-triangle fs-7"></i>
                </span>
                <span class="menu-icon">
                  <i class="fa-sharp fa-solid fa-folder fs-6 pw-text-primary-300"></i>
                </span>
                <span class="menu-title fs-9 fw-semibold pw-text-neutral-700">Akçelik Poc</span>
              </a>
              <!--end::Menu link-->
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item menu-sub-indention menu-accordion" data-kt-menu-trigger="click">
              <!--begin::Menu link-->
              <a href="javascript:void(0)" class="menu-link p-1">
                <span class="menu-arrow me-0">
                  <i class="fa-sharp fa-solid fa-triangle fs-7"></i>
                </span>
                <span class="menu-icon">
                  <i class="fa-sharp fa-solid fa-folder fs-6 pw-text-primary-300"></i>
                </span>
                <span class="menu-title fs-9 fw-semibold pw-text-neutral-700">Akçelik Poc</span>
              </a>
              <!--end::Menu link-->
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item menu-sub-indention menu-accordion" data-kt-menu-trigger="click">
              <!--begin::Menu link-->
              <a href="javascript:void(0)" class="menu-link p-1">
                <span class="menu-arrow me-0">
                  <i class="fa-sharp fa-solid fa-triangle fs-7"></i>
                </span>
                <span class="menu-icon">
                  <i class="fa-sharp fa-solid fa-folder fs-6 pw-text-primary-300"></i>
                </span>
                <span class="menu-title fs-9 fw-semibold pw-text-neutral-700">Akçelik Poc</span>
              </a>
              <!--end::Menu link-->
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item menu-sub-indention menu-accordion" data-kt-menu-trigger="click">
              <!--begin::Menu link-->
              <a href="javascript:void(0)" class="menu-link p-1">
                <span class="menu-arrow me-0">
                  <i class="fa-sharp fa-solid fa-triangle fs-7"></i>
                </span>
                <span class="menu-icon">
                  <i class="fa-sharp fa-solid fa-folder fs-6 pw-text-primary-300"></i>
                </span>
                <span class="menu-title fs-9 fw-semibold pw-text-neutral-700">Akçelik Poc</span>
              </a>
              <!--end::Menu link-->
            </div>
            <!--end::Menu item-->
          </div>
          <!--end::Menu-->
        </div>
      </div>

      <div class="modal-footer">
        <div class="d-flex align-items-center justify-content-end gap-3 pt-5">
          <button type="button" class="btn btn-active-light fs-8 py-3 px-6" data-bs-dismiss="moda">
            İptal
          </button>
          <button type="submit" class="btn btn-primary fs-8 py-3 px-6">
            Tamam
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
<!--end::Modal-->

<!--begin::Modal-->
<div class="modal fade" tabindex="-1" id="logoModuluKlasorAdi" role="dialog" aria-labelledby="klasorlerLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg mw-425px">
    <div class="modal-content">
      <div class="modal-header border pb-3">
        <h3 class="modal-title fs-5">Klasörler</h3>

        <!--begin::Close-->
        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
          <i class="fa-solid fa-xmark fs-5"></i>
        </div>
        <!--end::Close-->
      </div>

      <div class="modal-body">
        <div class="border rounded-2 pw-border-stroke scroll h-400px py-3 px-4">
          <!--begin::Menu-->
          <div class="menu menu-rounded menu-column pw-menu-custom-arrow menu-state-bg fw-semibold"
            data-kt-menu="true">
            <!--begin::Menu item-->
            <div class="menu-item menu-sub-indention menu-accordion" data-kt-menu-trigger="click">
              <!--begin::Menu link-->
              <a href="javascript:void(0)" class="menu-link p-1">
                <span class="menu-arrow me-0">
                  <i class="fa-sharp fa-solid fa-triangle fs-7"></i>
                </span>
                <span class="menu-icon">
                  <i class="fa-sharp fa-solid fa-folder fs-6 pw-text-primary-300"></i>
                </span>
                <span class="menu-title fs-9 fw-semibold pw-text-neutral-700">A departmanı</span>
              </a>
              <!--end::Menu link-->
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item menu-sub-indention menu-accordion" data-kt-menu-trigger="click">
              <!--begin::Menu link-->
              <a href="javascript:void(0)" class="menu-link p-1">
                <span class="menu-arrow me-0">
                  <i class="fa-sharp fa-solid fa-triangle fs-7"></i>
                </span>
                <span class="menu-icon">
                  <i class="fa-sharp fa-solid fa-folder fs-6 pw-text-primary-300"></i>
                </span>
                <span class="menu-title fs-9 fw-semibold pw-text-neutral-700">Akçelik Poc</span>
              </a>
              <!--end::Menu link-->
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item menu-sub-indention menu-accordion" data-kt-menu-trigger="click">
              <!--begin::Menu link-->
              <a href="javascript:void(0)" class="menu-link p-1">
                <span class="menu-arrow me-0">
                  <i class="fa-sharp fa-solid fa-triangle fs-7"></i>
                </span>
                <span class="menu-icon">
                  <i class="fa-sharp fa-solid fa-folder fs-6 pw-text-primary-300"></i>
                </span>
                <span class="menu-title fs-9 fw-semibold pw-text-neutral-700">Akçelik Poc</span>
              </a>
              <!--end::Menu link-->
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item menu-sub-indention menu-accordion" data-kt-menu-trigger="click">
              <!--begin::Menu link-->
              <a href="javascript:void(0)" class="menu-link p-1">
                <span class="menu-arrow me-0">
                  <i class="fa-sharp fa-solid fa-triangle fs-7"></i>
                </span>
                <span class="menu-icon">
                  <i class="fa-sharp fa-solid fa-folder fs-6 pw-text-primary-300"></i>
                </span>
                <span class="menu-title fs-9 fw-semibold pw-text-neutral-700">Akçelik Poc</span>
              </a>
              <!--end::Menu link-->
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item menu-sub-indention menu-accordion" data-kt-menu-trigger="click">
              <!--begin::Menu link-->
              <a href="javascript:void(0)" class="menu-link p-1">
                <span class="menu-arrow me-0">
                  <i class="fa-sharp fa-solid fa-triangle fs-7"></i>
                </span>
                <span class="menu-icon">
                  <i class="fa-sharp fa-solid fa-folder fs-6 pw-text-primary-300"></i>
                </span>
                <span class="menu-title fs-9 fw-semibold pw-text-neutral-700">Akçelik Poc</span>
              </a>
              <!--end::Menu link-->
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item menu-sub-indention menu-accordion" data-kt-menu-trigger="click">
              <!--begin::Menu link-->
              <a href="javascript:void(0)" class="menu-link p-1">
                <span class="menu-arrow me-0">
                  <i class="fa-sharp fa-solid fa-triangle fs-7"></i>
                </span>
                <span class="menu-icon">
                  <i class="fa-sharp fa-solid fa-folder fs-6 pw-text-primary-300"></i>
                </span>
                <span class="menu-title fs-9 fw-semibold pw-text-neutral-700">Akçelik Poc</span>
              </a>
              <!--end::Menu link-->
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item menu-sub-indention menu-accordion" data-kt-menu-trigger="click">
              <!--begin::Menu link-->
              <a href="javascript:void(0)" class="menu-link p-1">
                <span class="menu-arrow me-0">
                  <i class="fa-sharp fa-solid fa-triangle fs-7"></i>
                </span>
                <span class="menu-icon">
                  <i class="fa-sharp fa-solid fa-folder fs-6 pw-text-primary-300"></i>
                </span>
                <span class="menu-title fs-9 fw-semibold pw-text-neutral-700">Akçelik Poc</span>
              </a>
              <!--end::Menu link-->
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item menu-sub-indention menu-accordion" data-kt-menu-trigger="click">
              <!--begin::Menu link-->
              <a href="javascript:void(0)" class="menu-link p-1">
                <span class="menu-arrow me-0">
                  <i class="fa-sharp fa-solid fa-triangle fs-7"></i>
                </span>
                <span class="menu-icon">
                  <i class="fa-sharp fa-solid fa-folder fs-6 pw-text-primary-300"></i>
                </span>
                <span class="menu-title fs-9 fw-semibold pw-text-neutral-700">Akçelik Poc</span>
              </a>
              <!--end::Menu link-->
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item menu-sub-indention menu-accordion" data-kt-menu-trigger="click">
              <!--begin::Menu link-->
              <a href="javascript:void(0)" class="menu-link p-1">
                <span class="menu-arrow me-0">
                  <i class="fa-sharp fa-solid fa-triangle fs-7"></i>
                </span>
                <span class="menu-icon">
                  <i class="fa-sharp fa-solid fa-folder fs-6 pw-text-primary-300"></i>
                </span>
                <span class="menu-title fs-9 fw-semibold pw-text-neutral-700">Akçelik Poc</span>
              </a>
              <!--end::Menu link-->
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item menu-sub-indention menu-accordion" data-kt-menu-trigger="click">
              <!--begin::Menu link-->
              <a href="javascript:void(0)" class="menu-link p-1">
                <span class="menu-arrow me-0">
                  <i class="fa-sharp fa-solid fa-triangle fs-7"></i>
                </span>
                <span class="menu-icon">
                  <i class="fa-sharp fa-solid fa-folder fs-6 pw-text-primary-300"></i>
                </span>
                <span class="menu-title fs-9 fw-semibold pw-text-neutral-700">Akçelik Poc</span>
              </a>
              <!--end::Menu link-->
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item menu-sub-indention menu-accordion" data-kt-menu-trigger="click">
              <!--begin::Menu link-->
              <a href="javascript:void(0)" class="menu-link p-1">
                <span class="menu-arrow me-0">
                  <i class="fa-sharp fa-solid fa-triangle fs-7"></i>
                </span>
                <span class="menu-icon">
                  <i class="fa-sharp fa-solid fa-folder fs-6 pw-text-primary-300"></i>
                </span>
                <span class="menu-title fs-9 fw-semibold pw-text-neutral-700">Akçelik Poc</span>
              </a>
              <!--end::Menu link-->
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item menu-sub-indention menu-accordion" data-kt-menu-trigger="click">
              <!--begin::Menu link-->
              <a href="javascript:void(0)" class="menu-link p-1">
                <span class="menu-arrow me-0">
                  <i class="fa-sharp fa-solid fa-triangle fs-7"></i>
                </span>
                <span class="menu-icon">
                  <i class="fa-sharp fa-solid fa-folder fs-6 pw-text-primary-300"></i>
                </span>
                <span class="menu-title fs-9 fw-semibold pw-text-neutral-700">Akçelik Poc</span>
              </a>
              <!--end::Menu link-->
            </div>
            <!--end::Menu item-->
          </div>
          <!--end::Menu-->
        </div>
      </div>

      <div class="modal-footer">
        <div class="d-flex align-items-center justify-content-end gap-3 pt-5">
          <button type="button" class="btn btn-active-light fs-8 py-3 px-6" data-bs-dismiss="moda">
            İptal
          </button>
          <button type="submit" class="btn btn-primary fs-8 py-3 px-6">
            Tamam
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
<!--end::Modal-->

<!-- begin::Modal -->
<div class="modal fade" tabindex="-1" id="kpi-bilgilendirme-genel">
  <div class="modal-dialog modal-dialog-centered modal-lg mw-950px">
    <div class="modal-content">
      <div class="modal-header border pb-3">
        <h3 class="modal-title fs-5">Özellikler - X</h3>

        <!--begin::Close-->
        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
          <i class="fa-solid fa-xmark fs-5"></i>
        </div>
        <!--end::Close-->
      </div>

      <div class="modal-body">
        <!--begin::Title-->
        <div class="d-flex align-items-center justify-content-between gap-3 mb-8">
          <ul class="nav nav-tabs nav-line-tabs mb-5 fs-6 border-0 gap-6">
            <li class="nav-item mb-0">
              <a class="nav-link active" data-bs-toggle="tab" href="#birlesim_genel_karar">Genel</a>
            </li>
          </ul>

          <!--begin::Help button-->
          <button class="btn p-0" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse"
            data-bs-placement="bottom" data-bs-original-title="Help center" data-kt-initialized="1">
            <i class="fa-regular fa-circle-question"></i>
          </button>
          <!--end::Help button-->
        </div>
        <!--end::Title-->
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="birlesim_genel_karar" role="tabpanel">
            <!--begin::Form-->
            <form>
              <!--begin::Table-->
              <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fw-bold fs-7">
                  <tbody>
                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder">Aktivite No</label></td>
                      <td>AA000000000000000</td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_aktivite_adi">Aktivite
                          Adı</label></td>
                      <td>
                        <input type="text" class="form-control form-control-solid py-3 px-4 fs-8"
                          id="pw_basla_aktivite_adi" name="pw_basla_aktivite_adi" value="KPI Bilgilendirme Bitiş"
                          required disabled />
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_hata_kullanicisi">Hata
                          Kullanıcısı</label></td>
                      <td>
                        <select id="pw_basla_hata_kullanicisi" class="form-select form-select-solid fs-8 py-3 px-4"
                          data-control="select2" data-placeholder="Seçim Yapın">
                          <option value="1">Option 1</option>
                        </select>
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_cerceve_rengi">Çerçeve
                          Rengi</label></td>
                      <td>
                        <!--begin::Color picker-->
                        <div class="pw-color-picker-group">
                          <input type="color" class="pw-color-picker" value="#3699FF" id="pw_basla_cerceve_rengi"
                            name="pw_basla_cerceve_rengi" />
                          <label class="icon pw-shadow-sm" for="pw_basla_cerceve_rengi"
                            data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click"
                            title="Çerçeve rengi">
                            <i class="fa-solid fa-pen pw-text-neutral-300 fs-10 pe-0"></i>
                          </label>
                        </div>
                        <!--end::Color picker-->
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_font_rengi">Font Rengi</label>
                      </td>
                      <td>
                        <!--begin::Color picker-->
                        <div class="pw-color-picker-group">
                          <input type="color" class="pw-color-picker" value="#3699FF" id="pw_basla_font_rengi"
                            name="pw_basla_font_rengi" />
                          <label class="icon pw-shadow-sm" for="pw_basla_font_rengi"
                            data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click"
                            title="Font rengi">
                            <i class="fa-solid fa-pen pw-text-neutral-300 fs-10 pe-0"></i>
                          </label>
                        </div>
                        <!--end::Color picker-->
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_arka_plan_rengi">Arka Plan
                          Rengi</label></td>
                      <td>
                        <!--begin::Color picker-->
                        <div class="pw-color-picker-group">
                          <input type="color" class="pw-color-picker" value="#3699FF" id="pw_basla_arka_plan_rengi"
                            name="pw_basla_arka_plan_rengi" />
                          <label class="icon pw-shadow-sm" for="pw_basla_arka_plan_rengi"
                            data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click"
                            title="Arka plan rengi">
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
                        <label class="form-label fs-base fw-bolder"
                          for="pw_kpi_bilgilendirme_bitis">Açıklama</label>
                      </td>
                      <td>
                        <div id="pw_kpi_bilgilendirme_bitis"></div>
                      </td>
                    </tr>
                    <!--end::Row-->
                  </tbody>
                </table>
              </div>
              <!--end::Table-->
            </form>
            <!--end::Form-->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end::Modal -->

<!-- begin::Modal -->
<div class="modal fade" tabindex="-1" id="dagitim_genel">
  <div class="modal-dialog modal-dialog-centered modal-lg mw-950px">
    <div class="modal-content">
      <div class="modal-header border pb-3">
        <h3 class="modal-title fs-5">Özellikler - X</h3>

        <!--begin::Close-->
        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
          <i class="fa-solid fa-xmark fs-5"></i>
        </div>
        <!--end::Close-->
      </div>

      <div class="modal-body">
        <!--begin::Title-->
        <div class="d-flex align-items-center justify-content-between gap-3 mb-8">
          <ul class="nav nav-tabs nav-line-tabs mb-5 fs-6 border-0 gap-6">
            <li class="nav-item mb-0">
              <a class="nav-link active" data-bs-toggle="tab" href="#birlesim_genel_karar">Genel</a>
            </li>
          </ul>

          <!--begin::Help button-->
          <button class="btn p-0" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse"
            data-bs-placement="bottom" data-bs-original-title="Help center" data-kt-initialized="1">
            <i class="fa-regular fa-circle-question"></i>
          </button>
          <!--end::Help button-->
        </div>
        <!--end::Title-->
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="birlesim_genel_karar" role="tabpanel">
            <!--begin::Form-->
            <form>
              <!--begin::Table-->
              <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fw-bold fs-7">
                  <tbody>
                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder">Aktivite No</label></td>
                      <td>AA000000000000000</td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_aktivite_adi">Aktivite
                          Adı</label></td>
                      <td>
                        <input type="text" class="form-control form-control-solid py-3 px-4 fs-8"
                          id="pw_basla_aktivite_adi" name="pw_basla_aktivite_adi" value="Başla" required disabled />
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_hata_kullanicisi">Hata
                          Kullanıcısı</label></td>
                      <td>
                        <select id="pw_basla_hata_kullanicisi" class="form-select form-select-solid fs-8 py-3 px-4"
                          data-control="select2" data-placeholder="Seçim Yapın">
                          <option value="1">Option 1</option>
                        </select>
                        <div class="form-check pw-form-check-rounded-sm pw-form-check-sm mt-6">
                          <input class="form-check-input" type="checkbox" value="" id="pw_birlesme_sonlandir">
                          <label class="form-check-label pw-text-neutral-700 fw-medium" for="pw_birlesme_sonlandir">
                            İlk birleşimde sonlandır
                          </label>
                        </div>
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_cerceve_rengi">Çerçeve
                          Rengi</label></td>
                      <td>
                        <!--begin::Color picker-->
                        <div class="pw-color-picker-group">
                          <input type="color" class="pw-color-picker" value="#3699FF" id="pw_basla_cerceve_rengi"
                            name="pw_basla_cerceve_rengi" />
                          <label class="icon pw-shadow-sm" for="pw_basla_cerceve_rengi"
                            data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click"
                            title="Çerçeve rengi">
                            <i class="fa-solid fa-pen pw-text-neutral-300 fs-10 pe-0"></i>
                          </label>
                        </div>
                        <!--end::Color picker-->
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_font_rengi">Font Rengi</label>
                      </td>
                      <td>
                        <!--begin::Color picker-->
                        <div class="pw-color-picker-group">
                          <input type="color" class="pw-color-picker" value="#3699FF" id="pw_basla_font_rengi"
                            name="pw_basla_font_rengi" />
                          <label class="icon pw-shadow-sm" for="pw_basla_font_rengi"
                            data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click"
                            title="Font rengi">
                            <i class="fa-solid fa-pen pw-text-neutral-300 fs-10 pe-0"></i>
                          </label>
                        </div>
                        <!--end::Color picker-->
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_arka_plan_rengi">Arka Plan
                          Rengi</label></td>
                      <td>
                        <!--begin::Color picker-->
                        <div class="pw-color-picker-group">
                          <input type="color" class="pw-color-picker" value="#3699FF" id="pw_basla_arka_plan_rengi"
                            name="pw_basla_arka_plan_rengi" />
                          <label class="icon pw-shadow-sm" for="pw_basla_arka_plan_rengi"
                            data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click"
                            title="Arka plan rengi">
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
                        <label class="form-label fs-base fw-bolder" for="pw_dagitim_genel">Açıklama</label>
                      </td>
                      <td>
                        <div id="pw_dagitim_genel"></div>
                      </td>
                    </tr>
                    <!--end::Row-->
                  </tbody>
                </table>
              </div>
              <!--end::Table-->
            </form>
            <!--end::Form-->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end::Modal -->

<!-- begin::Modal -->
<div class="modal fade" tabindex="-1" id="karar-genel">
  <div class="modal-dialog modal-dialog-centered modal-lg mw-950px">
    <div class="modal-content">
      <div class="modal-header border pb-3">
        <h3 class="modal-title fs-5">Özellikler - X</h3>

        <!--begin::Close-->
        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
          <i class="fa-solid fa-xmark fs-5"></i>
        </div>
        <!--end::Close-->
      </div>

      <div class="modal-body">
        <!--begin::Title-->
        <div class="d-flex align-items-center justify-content-between gap-3 mb-8">
          <ul class="nav nav-tabs nav-line-tabs mb-5 fs-6 border-0 gap-6">
            <li class="nav-item mb-0">
              <a class="nav-link fw-bold active" data-bs-toggle="tab" href="#genel_karar">Genel</a>
            </li>
            <li class="nav-item mb-0">
              <a class="nav-link" data-bs-toggle="tab" href="#kararlar">Kararlar</a>
            </li>
          </ul>

          <!--begin::Help button-->
          <button class="btn p-0" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse"
            data-bs-placement="bottom" data-bs-original-title="Help center" data-kt-initialized="1">
            <i class="fa-regular fa-circle-question"></i>
          </button>
          <!--end::Help button-->
        </div>
        <!--end::Title-->
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="genel_karar" role="tabpanel">
            <!--begin::Form-->
            <form>
              <!--begin::Table-->
              <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fw-bold fs-7">
                  <tbody>
                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder">Aktivite No</label></td>
                      <td>AA000000000000000</td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_aktivite_adi">Aktivite
                          Adı</label></td>
                      <td>
                        <input type="text" class="form-control form-control-solid py-3 px-4 fs-8"
                          id="pw_basla_aktivite_adi" name="pw_basla_aktivite_adi" value="Başla" required disabled />
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_hata_kullanicisi">Hata
                          Kullanıcısı</label></td>
                      <td>
                        <select id="pw_basla_hata_kullanicisi" class="form-select form-select-solid fs-8 py-3 px-4"
                          data-control="select2" data-placeholder="Seçim Yapın">
                          <option value="1">Option 1</option>
                        </select>
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_cerceve_rengi">Çerçeve
                          Rengi</label></td>
                      <td>
                        <!--begin::Color picker-->
                        <div class="pw-color-picker-group">
                          <input type="color" class="pw-color-picker" value="#3699FF" id="pw_basla_cerceve_rengi"
                            name="pw_basla_cerceve_rengi" />
                          <label class="icon pw-shadow-sm" for="pw_basla_cerceve_rengi"
                            data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click"
                            title="Çerçeve rengi">
                            <i class="fa-solid fa-pen pw-text-neutral-300 fs-10 pe-0"></i>
                          </label>
                        </div>
                        <!--end::Color picker-->
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_font_rengi">Font Rengi</label>
                      </td>
                      <td>
                        <!--begin::Color picker-->
                        <div class="pw-color-picker-group">
                          <input type="color" class="pw-color-picker" value="#3699FF" id="pw_basla_font_rengi"
                            name="pw_basla_font_rengi" />
                          <label class="icon pw-shadow-sm" for="pw_basla_font_rengi"
                            data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click"
                            title="Font rengi">
                            <i class="fa-solid fa-pen pw-text-neutral-300 fs-10 pe-0"></i>
                          </label>
                        </div>
                        <!--end::Color picker-->
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td><label class="form-label fs-base fw-bolder" for="pw_basla_arka_plan_rengi">Arka Plan
                          Rengi</label></td>
                      <td>
                        <!--begin::Color picker-->
                        <div class="pw-color-picker-group">
                          <input type="color" class="pw-color-picker" value="#3699FF" id="pw_basla_arka_plan_rengi"
                            name="pw_basla_arka_plan_rengi" />
                          <label class="icon pw-shadow-sm" for="pw_basla_arka_plan_rengi"
                            data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click"
                            title="Arka plan rengi">
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
                        <label class="form-label fs-base fw-bolder" for="pw_basla_aciklama">Açıklama</label>
                      </td>
                      <td>
                        <div id="pw_otomatik_adim_aciklama"></div>
                      </td>
                    </tr>
                    <!--end::Row-->
                  </tbody>
                </table>
              </div>
              <!--end::Table-->
            </form>
            <!--end::Form-->
          </div>
          <div class="tab-pane fade" id="kararlar" role="tabpanel">
            <div class="row px-4 py-6 border rounded-1 pw-border-stroke">
              <div>
                <button class="btn btn-icon btn-secondary w-25px h-25px" style="flex-shrink:0"><i
                    class="fa-solid fa-plus fs-7 text-white"></i></button>
              </div>
              <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                <table class="table w-min-content w-100 gy-2 gx-3 pw-text-neutral-700 fw-bold fs-9 mb-0">
                  <tbody>
                    <tr>
                      <!--begin:item-->
                      <td>
                        <div class="d-flex gap-2 align-items-center">
                          <button class="btn btn-icon btn-primary w-25px h-25px" style="flex-shrink:0"><i
                              class="fa-solid fa-plus fs-7"></i></button>
                          <select class="form-select form-select-solid fs-8 py-3 px-4" data-control="select"
                            data-placeholder="">
                            <option value=""></option>
                          </select>
                        </div>
                      </td>
                      <!--end:item-->

                      <!--begin:item-->
                      <td>
                        <select class="form-select form-select-solid fs-8 py-3 px-4" data-control="select"
                          data-placeholder="">
                          <option value=""></option>
                        </select>
                      </td>
                      <!--end:item-->

                      <!--begin:item-->
                      <td>
                        <div class="bg-red border h-100 py-3 px-4 rounded">
                          asd
                        </div>
                      </td>
                      <!--end:item-->

                      <!--begin:item-->
                      <td>
                        <select class="form-select form-select-solid fs-8 py-3 px-4" data-control="select"
                          data-placeholder="">
                          <option value=""></option>
                        </select>
                      </td>
                      <!--end:item-->

                      <!--begin:item-->
                      <td>
                        <select class="form-select form-select-solid fs-8 py-3 px-4" data-control="select"
                          data-placeholder="">
                          <option value=""></option>
                        </select>
                      </td>
                      <!--end:item-->

                      <!--begin:item-->
                      <td>
                        <select class="form-select form-select-solid fs-8 py-3 px-4" data-control="select"
                          data-placeholder="">
                          <option value=""></option>
                        </select>
                      </td>
                      <!--end:item-->
                    </tr>

                    <tr>
                      <!--begin:item-->
                      <td>
                        <div class="d-flex gap-2 align-items-center">
                          <button class="btn btn-icon btn-primary w-25px h-25px" style="flex-shrink:0"><i
                              class="fa-solid fa-minus fs-7"></i></button>
                          <select class="form-select form-select-solid fs-8 py-3 px-4" data-control="select"
                            data-placeholder="">
                            <option value=""></option>
                          </select>
                        </div>
                      </td>
                      <!--end:item-->

                      <!--begin:item-->
                      <td>
                        <select class="form-select form-select-solid fs-8 py-3 px-4" data-control="select"
                          data-placeholder="">
                          <option value=""></option>
                        </select>
                      </td>
                      <!--end:item-->

                      <!--begin:item-->
                      <td>
                        <div class="bg-red border h-100 py-3 px-4 rounded">
                          asd
                        </div>
                      </td>
                      <!--end:item-->

                      <!--begin:item-->
                      <td>
                        <select class="form-select form-select-solid fs-8 py-3 px-4" data-control="select"
                          data-placeholder="">
                          <option value=""></option>
                        </select>
                      </td>
                      <!--end:item-->

                      <!--begin:item-->
                      <td>
                        <select class="form-select form-select-solid fs-8 py-3 px-4" data-control="select"
                          data-placeholder="">
                          <option value=""></option>
                        </select>
                      </td>
                      <!--end:item-->

                      <!--begin:item-->
                      <td>

                      </td>
                      <!--end:item-->
                    </tr>

                  </tbody>
                </table>
              </div>
            </div>
            <div class="row px-4 py-6 border rounded-1 pw-border-stroke">
              <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                <table class="table w-min-content w-100 gy-2 gx-3 pw-text-neutral-700 fw-bold fs-9 mb-0">
                  <tbody>
                    <tr>
                      <!--begin:item-->
                      <td><label class="form-label fs-base fw-bolder" for="pw_diger_durumlarda">Diğer
                          Durumlarda</label></td>
                      <td>
                        <select id="pw_diger_durumlarda" name="pw_diger_durumlarda"
                          class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2"
                          data-placeholder="">
                          <option value=""></option>
                        </select>
                      </td>
                      <!--end:item-->
                    </tr>

              </div>
            </div>
          </div>


        </div>
      </div>
    </div>
  </div>
</div>
<!-- end::Modal -->

<script>
  window.addEventListener('DOMContentLoaded', () => {
    ClassicEditor.create(document.querySelector('#editor'), {
      toolbar: {
        items: [
          'heading', '|',
          'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript',
          'removeFormat', '|',
          'bulletedList', 'numberedList', 'todoList', '|',
          'outdent', 'indent', '|',
          'undo', 'redo',
          'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', 'alignment', 'link',
          '|',
        ],
        shouldNotGroupWhenFull: true
      },
    }).catch(error => {
      console.error(error);
    });

    ClassicEditor.create(document.querySelector('#pw_basla_aciklama'), {
      toolbar: {
        items: [
          'heading', '|',
          'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript',
          'removeFormat', '|',
          'bulletedList', 'numberedList', 'todoList', '|',
          'outdent', 'indent', '|',
          'undo', 'redo',
          'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', 'alignment', 'link',
          '|',
        ],
        shouldNotGroupWhenFull: true
      },
    }).catch(error => {
      console.error(error);
    });

    ClassicEditor.create(document.querySelector('#pw_manuel_aciklama'), {
      toolbar: {
        items: [
          'heading', '|',
          'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript',
          'removeFormat', '|',
          'bulletedList', 'numberedList', 'todoList', '|',
          'outdent', 'indent', '|',
          'undo', 'redo',
          'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', 'alignment', 'link',
          '|',
        ],
        shouldNotGroupWhenFull: true
      },
    }).catch(error => {
      console.error(error);
    });

    ClassicEditor.create(document.querySelector('#pw_manuel_aktivite_ipucu'), {
      toolbar: {
        items: [
          'heading', '|',
          'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript',
          'removeFormat', '|',
          'bulletedList', 'numberedList', 'todoList', '|',
          'outdent', 'indent', '|',
          'undo', 'redo',
          'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', 'alignment', 'link',
          '|',
        ],
        shouldNotGroupWhenFull: true
      },
    }).catch(error => {
      console.error(error);
    });

    ClassicEditor.create(document.querySelector('#pw_otomatik_adim_aciklama'), {
      toolbar: {
        items: [
          'heading', '|',
          'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript',
          'removeFormat', '|',
          'bulletedList', 'numberedList', 'todoList', '|',
          'outdent', 'indent', '|',
          'undo', 'redo',
          'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', 'alignment', 'link',
          '|',
        ],
        shouldNotGroupWhenFull: true
      },
    }).catch(error => {
      console.error(error);
    });

    ClassicEditor.create(document.querySelector('#pw_manuel_bilgi_konu_textarea'), {
      toolbar: {
        items: [
          'heading', '|',
          'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript',
          'removeFormat', '|',
          'bulletedList', 'numberedList', 'todoList', '|',
          'outdent', 'indent', '|',
          'undo', 'redo',
          'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', 'alignment', 'link',
          '|',
        ],
        shouldNotGroupWhenFull: true
      },
    }).catch(error => {
      console.error(error);
    });

    ClassicEditor.create(document.querySelector('#pw_manuel_eposta_konu_textarea'), {
      toolbar: {
        items: [
          'heading', '|',
          'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript',
          'removeFormat', '|',
          'bulletedList', 'numberedList', 'todoList', '|',
          'outdent', 'indent', '|',
          'undo', 'redo',
          'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', 'alignment', 'link',
          '|',
        ],
        shouldNotGroupWhenFull: true
      },
    }).catch(error => {
      console.error(error);
    });

    ClassicEditor.create(document.querySelector('#pw_elektronik_aciklama'), {
      toolbar: {
        items: [
          'heading', '|',
          'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript',
          'removeFormat', '|',
          'bulletedList', 'numberedList', 'todoList', '|',
          'outdent', 'indent', '|',
          'undo', 'redo',
          'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', 'alignment', 'link',
          '|',
        ],
        shouldNotGroupWhenFull: true
      },
    }).catch(error => {
      console.error(error);
    });

    ClassicEditor.create(document.querySelector('#pw_roller_genel_editor'), {
      toolbar: {
        items: [
          'heading', '|',
          'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript',
          'removeFormat', '|',
          'bulletedList', 'numberedList', 'todoList', '|',
          'outdent', 'indent', '|',
          'undo', 'redo',
          'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', 'alignment', 'link',
          '|',
        ],
        shouldNotGroupWhenFull: true
      },
    }).catch(error => {
      console.error(error);
    });

    ClassicEditor.create(document.querySelector('#pw_birlesim_genel'), {
      toolbar: {
        items: [
          'heading', '|',
          'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript',
          'removeFormat', '|',
          'bulletedList', 'numberedList', 'todoList', '|',
          'outdent', 'indent', '|',
          'undo', 'redo',
          'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', 'alignment', 'link',
          '|',
        ],
        shouldNotGroupWhenFull: true
      },
    })
    .catch(error => {
      console.error(error);
    });

    ClassicEditor.create(document.querySelector('#pw_dagitim_genel'), {
      toolbar: {
        items: [
          'heading', '|',
          'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript',
          'removeFormat', '|',
          'bulletedList', 'numberedList', 'todoList', '|',
          'outdent', 'indent', '|',
          'undo', 'redo',
          'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', 'alignment', 'link',
          '|',
        ],
        shouldNotGroupWhenFull: true
      },
    }).catch(error => {
      console.error(error);
    });

    ClassicEditor.create(document.querySelector('#pw_kpi_baslangic_genel'), {
      toolbar: {
        items: [
          'heading', '|',
          'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript',
          'removeFormat', '|',
          'bulletedList', 'numberedList', 'todoList', '|',
          'outdent', 'indent', '|',
          'undo', 'redo',
          'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', 'alignment', 'link',
          '|',
        ],
        shouldNotGroupWhenFull: true
      },
    }).catch(error => {
      console.error(error);
    });

    ClassicEditor.create(document.querySelector('#pw_kpi_bitis'), {
      toolbar: {
        items: [
          'heading', '|',
          'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript',
          'removeFormat', '|',
          'bulletedList', 'numberedList', 'todoList', '|',
          'outdent', 'indent', '|',
          'undo', 'redo',
          'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', 'alignment', 'link',
          '|',
        ],
        shouldNotGroupWhenFull: true
      },
    }).catch(error => {
      console.error(error);
    });

    ClassicEditor.create(document.querySelector('#pw_kpi_bilgilendirme_bitis'), {
      toolbar: {
        items: [
          'heading', '|',
          'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript',
          'removeFormat', '|',
          'bulletedList', 'numberedList', 'todoList', '|',
          'outdent', 'indent', '|',
          'undo', 'redo',
          'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', 'alignment', 'link',
          '|',
        ],
        shouldNotGroupWhenFull: true
      },
    }).catch(error => {
      console.error(error);
    });

    ClassicEditor.create(document.querySelector('#pw_makro_genel'), {
      toolbar: {
        items: [
          'heading', '|',
          'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript',
          'removeFormat', '|',
          'bulletedList', 'numberedList', 'todoList', '|',
          'outdent', 'indent', '|',
          'undo', 'redo',
          'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', 'alignment', 'link',
          '|',
        ],
        shouldNotGroupWhenFull: true
      },
    }).catch(error => {
      console.error(error);
    });

    ClassicEditor.create(document.querySelector('#pw_yetkilendirme_genel'), {
      toolbar: {
        items: [
          'heading', '|',
          'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript',
          'removeFormat', '|',
          'bulletedList', 'numberedList', 'todoList', '|',
          'outdent', 'indent', '|',
          'undo', 'redo',
          'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', 'alignment', 'link',
          '|',
        ],
        shouldNotGroupWhenFull: true
      },
    }).catch(error => {
      console.error(error);
    });

    ClassicEditor.create(document.querySelector('#pw_web_servis_genel'), {
      toolbar: {
        items: [
          'heading', '|',
          'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript',
          'removeFormat', '|',
          'bulletedList', 'numberedList', 'todoList', '|',
          'outdent', 'indent', '|',
          'undo', 'redo',
          'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', 'alignment', 'link',
          '|',
        ],
        shouldNotGroupWhenFull: true
      },
    }).catch(error => {
      console.error(error);
    });

    ClassicEditor.create(document.querySelector('#pw_bekleme_genel'), {
      toolbar: {
        items: [
          'heading', '|',
          'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript',
          'removeFormat', '|',
          'bulletedList', 'numberedList', 'todoList', '|',
          'outdent', 'indent', '|',
          'undo', 'redo',
          'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', 'alignment', 'link',
          '|',
        ],
        shouldNotGroupWhenFull: true
      },
    }).catch(error => {
      console.error(error);
    });
    
    ClassicEditor.create(document.querySelector('#pw_dokuman_yarat_genel'), {
      toolbar: {
        items: [
          'heading', '|',
          'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript',
          'removeFormat', '|',
          'bulletedList', 'numberedList', 'todoList', '|',
          'outdent', 'indent', '|',
          'undo', 'redo',
          'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', 'alignment', 'link',
          '|',
        ],
        shouldNotGroupWhenFull: true
      },
    }).catch(error => {
      console.error(error);
    });

    ClassicEditor.create(document.querySelector('#pw_dosya_karti_yarat_genel'), {
      toolbar: {
        items: [
          'heading', '|',
          'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript',
          'removeFormat', '|',
          'bulletedList', 'numberedList', 'todoList', '|',
          'outdent', 'indent', '|',
          'undo', 'redo',
          'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', 'alignment', 'link',
          '|',
        ],
        shouldNotGroupWhenFull: true
      },
    }).catch(error => {
      console.error(error);
    });
    
    ClassicEditor.create(document.querySelector('#pw_logo_modulu_genel'), {
      toolbar: {
        items: [
          'heading', '|',
          'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript',
          'removeFormat', '|',
          'bulletedList', 'numberedList', 'todoList', '|',
          'outdent', 'indent', '|',
          'undo', 'redo',
          'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', 'alignment', 'link',
          '|',
        ],
        shouldNotGroupWhenFull: true
      },
    }).catch(error => {
      console.error(error);
    });
    
    // Format options
    var optionFormat = function(item) {
        if ( !item.id ) {
            return item.text;
        }

        var span = document.createElement('span');
        span.classList.add("d-flex","align-items-center");
        var iconLabel = item.element.getAttribute('data-kt-icon');
        var template = '';

        template += '<i class="fa-solid fa-' + iconLabel + ' fs-10 me-3"></i>';
        template += item.text;

        span.innerHTML = template;

        return $(span);
    }

    // Init Select2 --- more info: https://select2.org/
    $('#pw_baslangic_degeri').select2({
        templateSelection: optionFormat,
        templateResult: optionFormat
    });
  });
</script>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/foot.php'; ?>