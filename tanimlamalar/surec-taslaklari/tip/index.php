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
              <a href="/tanimlamalar/surec-taslaklari/tip" class="btn p-0">
                <span class="btn p-0 fs-9 fs-semibold d-inline-flex align-items-center gap-3">
                  <div class="w-25px h-25px pw-bg-success-200 rounded-pill d-inline-flex align-items-center justify-content-center">
                    <i class="fa-solid fa-plus text-white"></i>
                  </div>
                  <span class="pw-text-black fs-8">Form</span>
              </a>
            </div>
            <!--end::Actionbar-->

            <!--begin::Content -->
            <div class="row mb-20">
              <!--begin::Menu col-->
              <div class="col-12 col-lg mw-lg-300px pb-5 pe-lg-4 border-lg-bottom-0 border-lg-end pw-border-stroke mh-600px scroll">
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
                      <a class="nav-link mx-0 py-3 px-10 fs-base rounded-0 fw-medium" data-bs-toggle="tab" href="#pw_tab_pane_proje" aria-selected="true" role="tab">Proje</a>
                    </li>
                    <!--end::Tab item-->
                    <!--begin::Tab item-->
                    <li class="nav-item" role="presentation">
                      <a class="nav-link mx-0 py-3 px-10 fs-base rounded-0 fw-medium active" data-bs-toggle="tab" href="#pw_tab_pane_tip" aria-selected="true" role="tab">Tip</a>
                    </li>
                    <!--end::Tab item-->
                  </div>
                  <!--end::Table tabs-->
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
                                        <td><label class="form-label fs-base fw-bolder" for="pw_proje_adi">Proje Adı</label></td>
                                        <td>
                                          <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" id="pw_proje_adi" name="pw_proje_adi" required />
                                        </td>
                                      </tr>
                                      <!--end::Row-->

                                      <!--begin::Row-->
                                      <tr>
                                        <td><label class="form-label fs-base fw-bolder" for="pw_yetki_seti">Tasarım Yetki Seti</label></td>
                                        <td>
                                          <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" id="pw_yetki_seti" name="pw_yetki_seti" required />
                                        </td>
                                      </tr>
                                      <!--end::Row-->

                                      <!--begin::Row-->
                                      <tr>
                                        <td><label class="form-label fs-base fw-bolder" for="pw_aciklama">Açıklama</label></td>
                                        <td>
                                          <textarea class="form-control form-control-solid" name="pw_aciklama" id="pw_aciklama" cols="30" rows="4"></textarea>
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
                                <div class="accordion-header py-3 d-flex" data-bs-toggle="collapse" data-bs-target="#pw_detay_accordion_item_1">
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
                                <div id="pw_detay_accordion_item_1" class="fs-6 collapse show ps-10" data-bs-parent="#pw_detay_accordion">
                                  <!--begin::Form-->
                                  <form>
                                    <!--begin::Body wrapper-->
                                    <div class="d-flex flex-wrap flex-lg-nowrap gap-3">
                                      <!--begin::Col-->
                                      <div class="col-12 col-lg-5 border pw-border-stroke rounded-3">
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center justify-content-between gap-4 px-3 py-4 border-bottom pw-border-stroke">
                                          <!--begin::Item name-->
                                          <div class="d-flex align-items-center gap-2">
                                            <i class="fa-solid fa-file-pen pw-text-primary-500 fs-4"></i>
                                            <span class="pw-text-neutral-700 fw-medium fs-7">Kullanıcı Adı</span>
                                          </div>
                                          <!--end::Item name-->

                                          <!--begin::Item info-->
                                          <div class="d-flex align-items-center justify-content-between gap-3 min-w-70px">
                                            <span class="text-black fs-9 fw-medium">Yazı (20)</span>
                                            <button class="btn p-0"><i class="fa-solid fa-circle-x pw-text-primary-500 fs-6"></i></button>
                                          </div>
                                          <!--end::Item info-->
                                        </div>
                                        <!--end::Item-->

                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center justify-content-between gap-4 px-3 py-4 border-bottom pw-border-stroke">
                                          <!--begin::Item name-->
                                          <div class="d-flex align-items-center gap-2">
                                            <i class="fa-solid fa-input-numeric pw-text-primary-500 fs-4"></i>
                                            <span class="pw-text-neutral-700 fw-medium fs-7">Kullanıcı Yaşı</span>
                                          </div>
                                          <!--end::Item name-->

                                          <!--begin::Item info-->
                                          <div class="d-flex align-items-center justify-content-between gap-3 min-w-70px">
                                            <span class="text-black fs-9 fw-medium">Sayı</span>
                                            <button class="btn p-0"><i class="fa-solid fa-circle-x pw-text-primary-500 fs-6"></i></button>
                                          </div>
                                          <!--end::Item info-->
                                        </div>
                                        <!--end::Item-->

                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center justify-content-between gap-4 px-3 py-4 border-bottom pw-border-stroke">
                                          <!--begin::Item name-->
                                          <div class="d-flex align-items-center gap-2">
                                            <i class="fa-solid fa-calendar pw-text-primary-500 fs-4"></i>
                                            <span class="pw-text-neutral-700 fw-medium fs-7">Tarihi</span>
                                          </div>
                                          <!--end::Item name-->

                                          <!--begin::Item info-->
                                          <div class="d-flex align-items-center justify-content-between gap-3 min-w-70px">
                                            <span class="text-black fs-9 fw-medium">Tarih</span>
                                            <button class="btn p-0"><i class="fa-solid fa-circle-x pw-text-primary-500 fs-6"></i></button>
                                          </div>
                                          <!--end::Item info-->
                                        </div>
                                        <!--end::Item-->

                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center justify-content-between gap-4 px-3 py-4 border-bottom pw-border-stroke">
                                          <!--begin::Item name-->
                                          <div class="d-flex align-items-center gap-2">
                                            <i class="fa-solid fa-clock pw-text-primary-500 fs-4"></i>
                                            <span class="pw-text-neutral-700 fw-medium fs-7">Saati</span>
                                          </div>
                                          <!--end::Item name-->

                                          <!--begin::Item info-->
                                          <div class="d-flex align-items-center justify-content-between gap-3 min-w-70px">
                                            <span class="text-black fs-9 fw-medium">Saat</span>
                                            <button class="btn p-0"><i class="fa-solid fa-circle-x pw-text-primary-500 fs-6"></i></button>
                                          </div>
                                          <!--end::Item info-->
                                        </div>
                                        <!--end::Item-->

                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center justify-content-between gap-4 px-3 py-4 border-bottom pw-border-stroke">
                                          <!--begin::Item name-->
                                          <div class="d-flex align-items-center gap-2">
                                            <i class="fa-solid fa-dollar-sign pw-text-primary-500 fs-4"></i>
                                            <span class="pw-text-neutral-700 fw-medium fs-7">KDV Tutarı</span>
                                          </div>
                                          <!--end::Item name-->

                                          <!--begin::Item info-->
                                          <div class="d-flex align-items-center justify-content-between gap-3 min-w-70px">
                                            <span class="text-black fs-9 fw-medium">Miktar</span>
                                            <button class="btn p-0"><i class="fa-solid fa-circle-x pw-text-primary-500 fs-6"></i></button>
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
                                                <td><label class="form-label fs-base fw-medium" for="pw_tip_detay_alan_adi">Alan Adı</label></td>
                                                <td>
                                                  <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" id="pw_tip_detay_alan_adi" name="pw_tip_detay_alan_adi" required />
                                                </td>
                                              </tr>
                                              <!--end::Row-->

                                              <!--begin::Row-->
                                              <tr>
                                                <td><label class="form-label fs-base fw-medium" for="pw_tip_detay_veri_tipi">Veri Tipi</label></td>
                                                <td>
                                                  <select id="pw_tip_detay_veri_tipi" class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2" data-placeholder="Seçim Yapın">
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
                                                    <input class="form-check-input" type="checkbox" value="" id="pw_tip_detay_zorunlu" checked="checked" />
                                                    <label class="form-check-label pw-text-neutral-800 fs-medium" for="pw_tip_detay_zorunlu">
                                                      Zorunlu
                                                    </label>
                                                  </div>
                                                </td>
                                              </tr>
                                              <!--end::Row-->

                                              <!--begin::Row-->
                                              <tr>
                                                <td><label class="form-label fs-base fw-medium" for="pw_tip_detay_boyut">Boyut</label></td>
                                                <td>
                                                  <input type="number" class="form-control form-control-solid" value="0" min="0" />
                                                </td>
                                              </tr>
                                              <!--end::Row-->

                                              <!--begin::Row-->
                                              <tr>
                                                <td><label class="form-label fs-base fw-medium" for="pw_tip_detay_liste">Liste</label></td>
                                                <td>
                                                  <select id="pw_tip_detay_liste" class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2" data-placeholder="Seçim Yapın">
                                                    <option value="1">Option 1</option>
                                                  </select>
                                                </td>
                                              </tr>
                                              <!--end::Row-->

                                              <!--begin::Row-->
                                              <tr>
                                                <td><label class="form-label fs-base fw-medium" for="pw_tip_detay_anahtar_alan">Anahtar Alan</label></td>
                                                <td>
                                                  <select id="pw_tip_detay_anahtar_alan" class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2" data-placeholder="Seçim Yapın">
                                                    <option value="1">Option 1</option>
                                                  </select>
                                                </td>
                                              </tr>
                                              <!--end::Row-->

                                              <!--begin::Row-->
                                              <tr>
                                                <td><label class="form-label fs-base fw-medium" for="pw_tip_detay_goruntulenecek_alan">Görüntülenecek Alan</label></td>
                                                <td>
                                                  <select id="pw_tip_detay_goruntulenecek_alan" class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2" data-placeholder="Seçim Yapın">
                                                    <option value="1">Option 1</option>
                                                  </select>
                                                </td>
                                              </tr>
                                              <!--end::Row-->

                                              <!--begin::Row-->
                                              <tr>
                                                <td><label class="form-label fs-base fw-medium" for="pw_tip_detay_aciklama">Açıklama</label></td>
                                                <td>
                                                  <textarea id="pw_tip_detay_aciklama" class="form-select form-select-solid fs-8 py-3 px-4" cols="30" rows="4"></textarea>
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

                          <!--begin::Paylaşınlan kodlar content-->
                          <div class="tab-pane fade" id="pw_tab_pane_tip_paylasilan_kodlar" role="tabpanel">
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

                          <!--begin::Tarihce content-->
                          <div class="tab-pane fade" id="pw_tab_pane_tip_tarihce" role="tabpanel">
                            <!--begin::Tarihce wrapper-->
                            <div class="d-flex flex-wrap flex-lg-nowrap gap-4">
                              <!--begin::Col-->
                              <div class="col-12 col-lg mw-lg-225px d-flex flex-column gap-8 border pw-border-stroke rounded-3 py-6 px-5">
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
                                        <td><label class="form-label fs-base fw-bolder" for="pw_tip_tarihce_tam_metin_indeksleme">Tam Metin Indeksleme</label></td>
                                        <td>
                                          <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="pw_tip_tarihce_tam_metin_indeksleme" checked="checked" />
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
                                  <table id="pw_erisim_ve_islem_yetkileri_table" class="table table-row-bordered pw-dark-bg-table border pw-table-border-gray table-rounded align-middle w-max-content min-w-100 gy-4 gx-9 gs-9">
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
                          <!--end::Tarihce content-->
                        </div>
                        <!--end::Tip form contents-->
                      </div>
                      <!--end::Tip card-->
                    </div>
                  </div>
                  <!--begin::Tip content-->
                  <div class="tab-content" id="pane_tip">
                    <div class="tab-pane fade active show" id="pw_tab_pane_tip" role="tabpanel">
                      <!--begin::Tip card-->
                      <div class="border rounded-3 pw-border-stroke px-6 py-5">
                        <!--begin::Tip form tab-->
                        <div class="table-reponsive overflow-x-auto overflow-y-hidden">
                          <!--begin::Tabs-->
                          <div class="nav nav-tabs nav-line-tabs gap-6 fs-6 border-0 flex-nowrap w-max-content" role="tablist">
                            <!--begin::Tab item-->
                            <li class="nav-item" role="presentation">
                              <a class="nav-link mx-0 fs-base rounded-0 border-0 fw-medium active" data-bs-toggle="tab" href="#pw_tab_pane_tip_genel" aria-selected="true" role="tab">
                                <i class="fa-solid fa-pen pw-color-current"></i>
                                Genel
                              </a>
                            </li>
                            <!--end::Tab item-->

                            <!--begin::Tab item-->
                            <li class="nav-item" role="presentation">
                              <a class="nav-link mx-0 fs-base rounded-0 border-0 fw-medium" data-bs-toggle="tab" href="#pw_tab_pane_surec_detay" role="tab">
                                <i class="fa-solid fa-eye pw-color-current"></i>
                                Detay
                              </a>
                            </li>
                            <!--end::Tab item-->

                            <!--begin::Tab item-->
                            <li class="nav-item" role="presentation">
                              <a class="nav-link mx-0 fs-base rounded-0 border-0 fw-medium" data-bs-toggle="tab" href="#pw_tab_pane_surec_tip_paylasilan_kodlar" role="tab">
                                <i class="fa-solid fa-file-code pw-color-current"></i>
                                Paylaşılan Kodlar
                              </a>
                            </li>
                            <!--end::Tab item-->

                            <!--begin::Tab item-->
                            <li class="nav-item" role="presentation">
                              <a class="nav-link mx-0 fs-base rounded-0 border-0 fw-medium" data-bs-toggle="tab" href="#pw_tab_pane_surec_tip_tarihce" role="tab">
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
                                        <td><label class="form-label fs-base fw-bolder" for="pw_tip_adi">Tip Adı</label></td>
                                        <td>
                                          <input type="text" value="Süreç 2" class="form-control form-control-solid py-3 px-4 fs-8" id="pw_tip_adi" name="pw_tip_adi" required />
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
                                            <input class="form-check-input" type="checkbox" value="" id="pw_tam_metin_indeksleme" />
                                            <label class="form-check-label pw-text-neutral-800" for="pw_tam_metin_indeksleme">
                                              Tam Metin İndeksleme
                                            </label>
                                          </div>
                                        </td>
                                      </tr>
                                      <!--end::Row-->

                                      <!--begin::Row-->
                                      <tr>
                                        <td><label class="form-label fs-base fw-bolder" for="pw_genel_aciklama">Açıklama</label></td>
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
                                <div class="accordion-header py-3 d-flex" data-bs-toggle="collapse" data-bs-target="#pw_detay_accordion_item_1">
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
                                <div id="pw_detay_accordion_item_1" class="fs-6 collapse show ps-10" data-bs-parent="#pw_detay_accordion">
                                  <!--begin::Form-->
                                  <form>
                                    <!--begin::Body wrapper-->
                                    <div class="d-flex flex-wrap flex-lg-nowrap gap-3">
                                      <!--begin::Col-->
                                      <div class="col-12 col-lg-5 border pw-border-stroke rounded-3">
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center justify-content-between gap-4 px-3 py-4 border-bottom pw-border-stroke">
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
                                              <i class="fa-solid fa-arrow-rotate-left pw-text-danger-500 fs-6"></i></button>
                                          </div>
                                          <!--end::Item info-->
                                        </div>
                                        <!--end::Item-->

                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center justify-content-between gap-4 px-3 py-4 border-bottom pw-border-stroke">
                                          <!--begin::Item name-->
                                          <div class="d-flex align-items-center gap-2">
                                           <i class="fa-solid fa-file-pen pw-text-primary-500 fs-4"></i>
                                            <span class="pw-text-neutral-700 fw-medium fs-7">Kullanıcı Soyadı</span>
                                          </div>
                                          <!--end::Item name-->

                                          <!--begin::Item info-->
                                          <div class="d-flex align-items-center justify-content-between gap-3 min-w-70px">
                                            <span class="text-black fs-9 fw-medium">Yazı (20)</span>
                                            <button class="btn p-0"><i class="fa-solid fa-circle-x pw-text-primary-500 fs-6"></i></button>
                                          </div>
                                          <!--end::Item info-->
                                        </div>
                                        <!--end::Item-->

                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center justify-content-between gap-4 px-3 py-4 border-bottom pw-border-stroke">
                                          <!--begin::Item name-->
                                          <div class="d-flex align-items-center gap-2">
                                            <i class="fa-solid fa-input-numeric pw-text-primary-500 fs-4"></i>
                                            <span class="pw-text-neutral-700 fw-medium fs-7">Kullanıcı Yaşı</span>
                                          </div>
                                          <!--end::Item name-->
                                        

                                          <!--begin::Item info-->
                                          <div class="d-flex align-items-center justify-content-between gap-3 min-w-70px">
                                            <span class="text-black fs-9 fw-medium">Sayı</span>
                                            <button class="btn p-0"><i class="fa-solid fa-circle-x pw-text-primary-500 fs-6"></i></button>
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
                                                <td><label class="form-label fs-base fw-medium" for="pw_tip_detay_alan_adi">Alan Adı</label></td>
                                                <td>
                                                  <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" id="pw_tip_detay_alan_adi" name="pw_tip_detay_alan_adi" required />
                                                </td>
                                              </tr>
                                              <!--end::Row-->

                                              <!--begin::Row-->
                                              <tr>
                                                <td><label class="form-label fs-base fw-medium" for="pw_tip_detay_veri_tipi">Veri Tipi</label></td>
                                                <td>
                                                <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" id="pw_tip_detay_veri_tipi" name="pw_tip_detay_veri_tipi" required />
                                              </tr>
                                              <!--end::Row-->

                                              <!--begin::Row-->
                                              <tr>
                                                <td><label class="form-label fs-base fw-medium">Kullanım Yeri</label></td>
                                                <td>
                                                Akış
                                              </tr>
                                              <!--end::Row-->

                                              <!--begin::Row-->
                                              <tr>
                                                <td><label class="form-label fs-base fw-medium" for="pw_tip_tasarım_yetki_seti">Tasarım Yetki Seti</label></td>
                                                <td>
                                                <input type="text" value="2 Satır" class="form-control form-control-solid py-3 px-4 fs-8" id="pw_tip_tasarım_yetki_seti" name="pw_tip_tasarım_yetki_seti" required />
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



                  <!--end::Form-->




                </div>
                <!--end::Form wrapper-->
              </div>
            </div>
            <!--end::Content wrapper-->
            <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/footer.php'; ?>
          </div>
          <!--end::Main-->

        </div>
        <!--end::Wrapper -->

        <script>
          window.addEventListener('DOMContentLoaded', () => {
            ClassicEditor
              .create(document.querySelector('#editor'), {
                toolbar: {
                  items: [
                    'heading', '|',
                    'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript', 'removeFormat', '|',
                    'bulletedList', 'numberedList', 'todoList', '|',
                    'outdent', 'indent', '|',
                    'undo', 'redo',
                    'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', 'alignment', 'link', '|',
                  ],
                  shouldNotGroupWhenFull: true
                },
              })
              .catch(error => {
                console.error(error);
              });
          })
        </script>

        <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/foot.php'; ?>