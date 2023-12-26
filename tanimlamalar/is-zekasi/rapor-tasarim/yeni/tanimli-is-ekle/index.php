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
            <li class="breadcrumb-item active">Rapor Tasarım</li>
            <!--end::Item-->
          </ul>
          <!--end::Breadcrumb-->
          <!--begin::Title-->
          <h1 class="page-heading d-flex text-dark fw-bolder fs-4 flex-column justify-content-center my-0">
            Rapor Tasarım
          </h1>
          <!--end::Title-->
        </div>
        <!--end::Page title-->

        <!--begin::Dropdown wrapper-->
        <div class="app-navbar-item ms-1 ms-md-3">
          <!--begin::Menu toggle-->
          <a href="/tanimlamalar/is-zekasi/rapor-tasarim/#" class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px" data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
            <i class="fa-solid fa-ellipsis-vertical fs-4"></i>
          </a>
          <!--begin::Menu toggle-->
          <!--begin::Menu-->
          <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-200px" data-kt-menu="true" data-kt-element="theme-mode-menu">
            <!--begin::Menu item-->
            <div class="menu-item px-3 my-0">
              <a href="/tanimlamalar/is-zekasi/rapor-tasarim/#" class="menu-link px-3 py-2 fs-8">
                <span class="menu-title">Açılış Sayfası Yap</span>
              </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item px-3 my-0">
              <a href="/tanimlamalar/is-zekasi/rapor-tasarim/#" class="menu-link px-3 py-2 fs-8">
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
    <div class="col-12 col-md-11 mb-20 px-6 pb-6 mt-4 mt-xl-6">
      <!--begin::Form tabs wrapper-->
      <div class="table-reponsive overflow-x-auto">
        <!--begin::Table tabs-->
        <div class="nav nav-tabs nav-line-tabs fs-6 gap-8" role="tablist">
          <!--begin::Tab item-->
          <li class="nav-item" role="presentation">
            <a class="nav-link mx-0 pt-0 pb-3 fs-base rounded-0" data-bs-toggle="tab" href="#pw_tab_pane_detay" role="tab">Detay</a>
          </li>
          <!--end::Tab item-->

          <!--begin::Tab item-->
          <li class="nav-item" role="presentation">
            <a class="nav-link mx-0 pt-0 pb-3 fs-base rounded-0" data-bs-toggle="tab" href="#pw_tab_pane_kod_uret" role="tab">Kod Üret</a>
          </li>
          <!--end::Tab item-->

          <!--begin::Tab item-->
          <li class="nav-item" role="presentation">
            <a class="nav-link mx-0 pt-0 pb-3 fs-base rounded-0" data-bs-toggle="tab" href="#pw_tab_pane_tasarim" role="tab">Tasarım</a>
          </li>
          <!--end::Tab item-->

          <!--begin::Tab item-->
          <li class="nav-item" role="presentation">
            <a class="nav-link mx-0 pt-0 pb-3 fs-base rounded-0 fw-semibold active" data-bs-toggle="tab" href="#pw_tab_pane_tanimli_is" role="tab">Tanımlı İş</a>
          </li>
          <!--end::Tab item-->
        </div>
        <!--end::Table tabs-->
      </div>
      <!--end::Form tabs wrapper-->

      <!--begin::Form tabs contents-->
      <div class="tab-content pw-dashboard-tab-content mt-2" id="raporTasarimiTab">
        <!--begin::Detay content-->
        <div class="tab-pane fade" id="pw_tab_pane_detay" role="tabpanel">
          <!--begin::Card-->
          <div class="border rounded-1 pw-border-stroke px-xxl-8 py-xxl-8 p-4">
            <!--begin::Form-->
            <form class="table-responsive mw-600px">
              <table class="table gx-4 gy-2 gy-xxl-4 align-middle">
                <!--begin::Row-->
                <tr>
                  <td><label class="form-label fs-base fw-bolder mb-0" for="pw_rapor_adi">Rapor Adı</label></td>
                  <td>
                    <input type="text" class="form-control form-control-solid fs-8 px-4 py-3" name="raporAdi" id="pw_rapor_adi" />
                  </td>
                </tr>
                <!--end::Row-->

                <!--begin::Row-->
                <tr>
                  <td><label class="form-label fs-base fw-bolder mb-0" for="pw_yetki_seti">Yetki Seti</label></td>
                  <td>
                    <select id="pw_yetki_seti" class="form-select form-select-solid fs-8 px-4 py-3" data-control="select2" data-placeholder="Seçim yapınız">
                      <option></option>
                      <option value="1">Option 1</option>
                      <option value="2">Option 2</option>
                    </select>
                  </td>
                </tr>
                <!--end::Row-->

                <!--begin::Row-->
                <tr>
                  <td><label class="form-label fs-base fw-bolder mb-0" for="pw_tasarim_yetki_seti">Tasarım Yetki Seti</label></td>
                  <td>
                    <select id="pw_tasarim_yetki_seti" class="form-select form-select-solid fs-8 px-4 py-3" data-control="select2" data-placeholder="Seçim yapınız">
                      <option></option>
                      <option value="1">Option 1</option>
                      <option value="2">Option 2</option>
                    </select>
                  </td>
                </tr>
                <!--end::Row-->

                <!--begin::Row-->
                <tr>
                  <td><label class="form-label fs-base fw-bolder mb-0" for="pw_kullanım_yeri">Kullanım Yeri</label></td>
                  <td>
                    <div class="row g-0">
                      <!--begin::Option-->
                      <div class="col-4 pe-1">
                        <input type="radio" class="btn-check" name="pw_kullanım_yeri" value="kullaniciRaporu" id="pw_kullanım_yeri_option_1" />
                        <label class="d-flex aling-items-center justify-content-center h-100 btn btn-light btn-active-primary w-100 px-2 py-3 fs-8" for="pw_kullanım_yeri_option_1">Kullanıcı Raporu</label>
                      </div>
                      <!--end::Option-->

                      <!--begin::Option-->
                      <div class="col-4 px-1">
                        <input type="radio" class="btn-check" name="pw_kullanım_yeri" value="formRaporu" checked="checked" id="pw_kullanım_yeri_option_2" />
                        <label class="d-flex aling-items-center justify-content-center h-100 btn btn-light btn-active-primary w-100 px-2 py-3 fs-8" for="pw_kullanım_yeri_option_2">Form Raporu</label>
                      </div>
                      <!--end::Option-->

                      <!--begin::Option-->
                      <div class="col-4 px-1">
                        <input type="radio" class="btn-check" name="pw_kullanım_yeri" value="gostergePaneli" id="pw_kullanım_yeri_option_3" />
                        <label class="d-flex aling-items-center justify-content-center h-100 btn btn-light btn-active-primary w-100 px-2 py-3 fs-8" for="pw_kullanım_yeri_option_3">Gösterge Paneli</label>
                      </div>
                      <!--end::Option-->
                    </div>
                  </td>
                </tr>
                <!--end::Row-->

                <!--begin::Row-->
                <tr>
                  <td><label class="form-label fs-base fw-bolder mb-0" for="pw_formlar">Formlar</label></td>
                  <td>
                    <select id="pw_formlar" class="form-select form-select-solid fs-8 px-4 py-3" data-control="select2" data-placeholder="Seçim yapınız">
                      <option></option>
                      <option value="1">Option 1</option>
                      <option value="2">Option 2</option>
                    </select>
                  </td>
                </tr>
                <!--end::Row-->

                <!--begin::Row-->
                <tr>
                  <td><label class="form-label fs-base fw-bolder mb-0" for="pw_veri_kaynagi">Veri Kaynağı</label></td>
                  <td>
                    <select id="pw_veri_kaynagi" class="form-select form-select-solid fs-8 px-4 py-3" data-control="select2" data-placeholder="Seçim yapınız">
                      <option></option>
                      <option value="1">Option 1</option>
                      <option value="2">Option 2</option>
                    </select>
                  </td>
                </tr>
                <!--end::Row-->

                <!--begin::Row-->
                <tr>
                  <td class="align-top"><label class="form-label fs-base fw-bolder mb-0" for="pw_aciklama">Açıklama</label></td>
                  <td>
                    <div id="pw_aciklama"></div>
                  </td>
                </tr>
                <!--end::Row-->

                <!--begin::Row-->
                <tr>
                  <td colspan="2">
                    <div class="d-flex align-items-center justify-content-end gap-2">
                      <button type="reset" class="btn btn-active-light fs-8 py-3 px-6">
                        Vazgeç
                      </button>
                      <button type="submit" class="btn btn-primary fs-8 py-3 px-6">
                        Kaydet
                      </button>
                    </div>
                  </td>
                </tr>
                <!--end::Row-->
              </table>
            </form>
            <!--end::Form-->
          </div>
          <!--end::Card-->
        </div>
        <!--end::Detay content-->

        <!--begin::Kod uret content-->
        <div class="tab-pane fade" id="pw_tab_pane_kod_uret" role="tabpanel">
          <!--begin::Card-->
          <div class="border rounded-1 pw-border-stroke px-xxl-8 py-xxl-8 p-4">
            Kod Üret
          </div>
          <!--end::Card-->
        </div>
        <!--end::Kod uret content-->

        <!--begin::Tasarim content-->
        <div class="tab-pane fade" id="pw_tab_pane_tasarim" role="tabpanel">
          <!--begin::Card-->
          <div class="border rounded-1 pw-border-stroke px-xxl-8 py-xxl-8 p-4">
            <!--begin::Form-->
            <form class="table-responsive mw-600px">
              <table class="table gx-4 gy-2 gy-xxl-4 align-middle">
                <!--begin::Row-->
                <tr>
                  <td><label class="form-label fs-base fw-bolder mb-0" for="pw_objectid">Objectid</label></td>
                  <td>
                    <input type="text" class="form-control form-control-solid fs-8 px-4 py-3" name="objectId" id="pw_objectid" />
                  </td>
                </tr>
                <!--end::Row-->

                <!--begin::Row-->
                <tr>
                  <td colspan="2">
                    <div class="d-flex align-items-center justify-content-end gap-2">
                      <button type="reset" class="btn btn-active-light fs-8 py-3 px-6">
                        Vazgeç
                      </button>
                      <button type="submit" class="btn btn-primary fs-8 py-3 px-6">
                        Kaydet
                      </button>
                    </div>
                  </td>
                </tr>
                <!--end::Row-->
              </table>
            </form>
            <!--end::Form-->
          </div>
          <!--end::Card-->
        </div>
        <!--end::Tasarim content-->

        <!--begin::Tanimli is content-->
        <div class="tab-pane fade show active" id="pw_tab_pane_tanimli_is" role="tabpanel">
          <!--begin::Wrapper-->
          <div class="row">
            <!--begin::Col-->
            <div class="col col-lg-3">
              <!--begin::Card-->
              <div class="border rounded-1 pw-border-stroke px-2 py-4 h-100">
                <!--begin::Card header-->
                <div class="d-flex flex-column flex-lg-row align-items-stretch justify-content-lg-between gap-2 flex-wrap pb-2 border-bottom pw-border-neutral-200">
                  <!--begin::Button-->
                  <div>
                    <a href="javascript:void(0)" class="btn btn-outline btn-outline btn-outline-primary btn-active-light-primary px-2 py-2 fs-9 rounded-0.25rem">
                      <i class="fa-solid fa-plus fs-8"></i>
                      Tanımlı İş Ekle
                    </a>
                  </div>
                  <!--end::Button-->

                  <!--begin::Button group-->
                  <div class="d-flex align-items-center gap-1 flex-nowrap">
                    <!--begin::Item-->
                    <button class="btn btn-icon pw-bg-neutral-200 btn-color-primary btn-active-primary btn-active-color-white w-30px h-30px rounded-0.25rem">
                      <i class="fa-solid fa-play fs-7"></i>
                    </button>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <button class="btn btn-icon pw-bg-neutral-200 btn-color-primary btn-active-primary btn-active-color-white w-30px h-30px rounded-0.25rem" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="bottom" title="Rapor">
                      <i class="fa-solid fa-trash fs-7"></i>
                    </button>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <button class="btn btn-icon pw-bg-neutral-200 btn-color-primary btn-active-primary btn-active-color-white w-30px h-30px rounded-0.25rem">
                      <i class="fa-solid fa-file-lines fs-7"></i>
                    </button>
                    <!--end::Item-->
                  </div>
                  <!--end::Button group-->
                </div>
                <!--end::Card header-->

                <!--begin::Menu-->
                <div class="menu menu-rounded menu-column menu-active-bg menu-hover-bg menu-title-gray-700 fs-5 fw-semibold w-100 mt-2" id="#kt_aside_menu" data-kt-menu="true">
                  <div class="menu-item">
                    <a href="javascript:void(0)" class="menu-link active border-3 border-start border-primary px-2 py-2">
                      <span class="menu-icon me-1">
                        <i class="fa-solid fa-flag fs-7"></i>
                      </span>
                      <span class="menu-title fs-8 pw-text-neutral-800">Tablo 1</span>
                    </a>
                  </div>
                </div>
                <!--end::Menu-->
              </div>
              <!--end::Card-->
            </div>
            <!--end::Col-->

            <!--begin::Form-->
            <form class="col">
              <!--begin::Row-->
              <div class="row g-5">
                <!--begin::Col-->
                <div class="col col-lg-6">
                  <!--begin::Card-->
                  <div class="border rounded-1 pw-border-stroke px-2 py-4 h-100">
                    <!--begin::Table-->
                    <div class="table-responsive">
                      <table class="table gx-3 gy-2 align-middle">
                        <!--begin::Row-->
                        <tr>
                          <td><label class="form-label fs-7 fw-bolder mb-0" for="pw_tanimli_is_adi">İş Adı</label></td>
                          <td>
                            <input type="text" class="form-control form-control-solid fs-8 px-4 py-3" value="Tablo 1" id="pw_tanimli_is_adi" />
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td><label class="form-label fs-7 fw-bolder mb-0" for="pw_tanimli_is_durumu">Durumu</label></td>
                          <td>
                            <div class="d-flex align-items-center gap-3">
                              <!--begin::Radio-->
                              <div class="form-check form-check-custom form-check-solid">
                                <input class="form-check-input bg-blue" type="radio" value="aktif" id="aktif" name="pw_tanimli_is_durumu">
                                <label class="form-check-label pw-text-neutral-700 fs-8" for="aktif">
                                  Aktif
                                </label>
                              </div>
                              <!--end::Radio-->

                              <!--begin::Radio-->
                              <div class="form-check form-check-custom form-check-solid">
                                <input class="form-check-input bg-blue" type="radio" value="pasif" id="pasif" name="pw_tanimli_is_durumu">
                                <label class="form-check-label pw-text-neutral-700 fs-8" for="pasif">
                                  Pasif
                                </label>
                              </div>
                              <!--end::Radio-->
                            </div>
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td><label class="form-label fs-7 fw-bolder mb-0" for="pw_tanimli_is_eposta">Elektronik Posta</label></td>
                          <td>
                            <input type="text" class="form-control form-control-solid fs-8 px-4 py-3" id="pw_tanimli_is_eposta" />
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td><label class="form-label fs-7 fw-bolder mb-0" for="pw_tanimli_is_her_durum">Her durumda bilgi ver</label></td>
                          <td>
                            <div class="form-check">
                              <input class="form-check-input rounded-0.25rem" type="checkbox" value="" id="pw_tanimli_is_her_durum">
                            </div>
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td><label class="form-label fs-7 fw-bolder mb-0" for="pw_tanimli_is_yenileme_sikligi">Yenileme Sıklığı</label></td>
                          <td>
                            <a href="/tanimlamalar/kullanicilar/ad-tanimlari/yeni-ad-ekle/#yenileme-sikligi" class="btn btn-outline btn-outline-secondary pw-text-neutral-500 btn-active-light-primary px-4 py-3 fs-8" data-bs-toggle="modal" data-bs-target="#yenileme-sikligi">
                              Tekrarlanmaz
                              <i class="fa-solid fa-pen-to-sqaure fa-pen-to-square pw-text-primary ms-4 pe-0"></i>
                            </a>
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td class="align-top"><label class="form-label fs-7 fw-bolder mb-0" for="pw_tanimli_is_aciklama">Açıklama</label></td>
                          <td>
                            <div id="pw_tanimli_is_aciklama"></div>
                          </td>
                        </tr>
                        <!--end::Row-->
                      </table>
                    </div>
                    <!--end::Table-->
                  </div>
                  <!--end::Card-->
                </div>
                <!--end::Col-->

                <!--begin::Col-->
                <div class="col col-lg-6">
                  <!--begin::Card-->
                  <div class="border rounded-1 pw-border-stroke px-2 py-4 h-100">
                    <!--begin::Title-->
                    <div class="pw-text-primary-500 fs-6 fw-bolder pb-2 border-bottom pw-border-neutral-300 mb-4">Rapor</div>
                    <!--end::Title-->

                    <!--begin::Table-->
                    <div class="table-responsive mb-6">
                      <table class="table gx-4 gy-2 align-middle">
                        <!--begin::Row-->
                        <tr>
                          <td><label class="form-label fs-7 fw-bolder mb-0" for="pw_tanimli_is_rapor_eposta">Elektronik Posta</label></td>
                          <td>
                            <input type="email" class="form-control form-control-solid fs-8 px-4 py-3" id="pw_tanimli_is_rapor_eposta" />
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td><label class="form-label fs-7 fw-bolder mb-0" for="pw_tanimli_is_rapor_konu">Konu</label></td>
                          <td>
                            <input type="text" class="form-control form-control-solid fs-8 px-4 py-3" id="pw_tanimli_is_rapor_konu" />
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td><label class="form-label fs-8 fw-bolder mb-0" for="pw_tanimli_is_rapor_mesaj">Mesaj</label></td>
                          <td>
                            <textarea class="form-control form-control-solid fs-8 px-4 py-3" id="pw_tanimli_is_rapor_mesaj" cols="20" rows="4"></textarea>
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td><label class="form-label fs-8 fw-bolder mb-0" for="pw_tanimli_is_rapor_proxy_adi">Proxy Adı</label></td>
                          <td>
                            <input type="text" class="form-control form-control-solid" id="pw_tanimli_is_rapor_proxy_adi" />
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td><label class="form-label fs-8 fw-bolder mb-0" for="pw_tanimli_is_rapor_tipi">Tipi</label></td>
                          <td>
                            <div class="d-flex align-items-center gap-2">
                              <!--begin::Radio-->
                              <div class="form-check form-check-custom form-check-solid">
                                <input class="form-check-input bg-blue" type="radio" value="PDF" id="PDF" name="pw_tanimli_is_rapor_tipi">
                                <label class="form-check-label pw-text-neutral-700 fs-8" for="PDF">
                                  PDF
                                </label>
                              </div>
                              <!--end::Radio-->

                              <!--begin::Radio-->
                              <div class="form-check form-check-custom form-check-solid">
                                <input class="form-check-input bg-blue" type="radio" value="Excel" id="Excel" name="pw_tanimli_is_rapor_tipi">
                                <label class="form-check-label pw-text-neutral-700 fs-8" for="Excel">
                                  Excel
                                </label>
                              </div>
                              <!--end::Radio-->
                            </div>
                          </td>
                        </tr>
                        <!--end::Row-->
                      </table>
                    </div>
                    <!--end::Table-->

                    <!--begin::Title-->
                    <div class="pw-text-primary-500 fs-6 fw-bolder pb-2 border-bottom pw-border-neutral-300 mb-4">Parametreler</div>
                    <!--end::Title-->

                    <!--begin::Table-->
                    <div class="table-responsive">
                      <table class="table gx-4 gy-2 align-middle">
                        <!--begin::Row-->
                        <tr>
                          <td><label class="form-label fs-8 fw-bolder mb-0">Objectid</label></td>
                        </tr>
                        <!--end::Row-->
                      </table>
                    </div>
                    <!--end::Table-->
                  </div>
                  <!--end::Card-->
                </div>
                <!--end::Col-->
              </div>
              <!--end::Row-->

              <!--begin::Action buttons-->
              <div class="d-flex align-items-center justify-content-end gap-2 mt-4">
                <button type="reset" class="btn btn-active-light fs-8 py-3 px-6">
                  Vazgeç
                </button>
                <button type="submit" class="btn btn-primary fs-8 py-3 px-6">
                  Kaydet
                </button>
              </div>
              <!--end::Action buttons-->
            </form>
            <!--end::Form-->
          </div>
          <!--end::Wrapper-->
        </div>
        <!--end::Tanimli is content-->
      </div>
      <!--end::Form tabs contents-->
    </div>
    <!--end::Content -->
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

<!--begin:Modal-->
<div class="modal fade" tabindex="-1" id="yenileme-sikligi">
  <div class="modal-dialog modal-dialog-centered modal-lg mw-800px">
    <div class="modal-content py-2">
      <!--begin::Nav wrapper-->
      <div class="table-reponsive overflow-x-auto">
        <!--begin::nav tabs-->
        <ul class="nav nav-tabs nav-line-tabs justify-content-center fs-6">
          <!--begin::Nav item-->
          <li class="nav-item">
            <a class="nav-link mx-0 py-3 px-10 fs-base rounded-0 fw-medium active" data-bs-toggle="tab" href="#pw_tab_pane_dk">Dakika</a>
          </li>
          <!--end::Nav item-->

          <!--begin::Nav item-->
          <li class="nav-item">
            <a class="nav-link py-3 px-10 mx-0 fs-base fw-medium rounded-0 pw-text-neutral-500" data-bs-toggle="tab" href="#pw_tab_pane_saat">Saat</a>
          </li>
          <!--end::Nav item-->

          <!--begin::Nav item-->
          <li class="nav-item">
            <a class="nav-link py-3 px-10 mx-0 fs-base fw-medium rounded-0 pw-text-neutral-500" data-bs-toggle="tab" href="#pw_tab_pane_gun">Gün</a>
          </li>
          <!--end::Nav item-->

          <!--begin::Nav item-->
          <li class="nav-item">
            <a class="nav-link py-3 px-10 mx-0 fs-base fw-medium rounded-0 pw-text-neutral-500" data-bs-toggle="tab" href="#pw_tab_pane_hafta">Hafta</a>
          </li>
          <!--end::Nav item-->

          <!--begin::Nav item-->
          <li class="nav-item">
            <a class="nav-link py-3 px-10 mx-0 fs-base fw-medium rounded-0 pw-text-neutral-500" data-bs-toggle="tab" href="#pw_tab_pane_ay">Ay</a>
          </li>
          <!--end::Nav item-->

          <!--begin::Nav item-->
          <li class="nav-item">
            <a class="nav-link py-3 px-10 mx-0 fs-base fw-medium rounded-0 pw-text-neutral-500" data-bs-toggle="tab" href="#pw_tab_pane_yil">Yıl</a>
          </li>
          <!--end::Nav item-->
        </ul>
        <!--end::nav tabs-->
      </div>
      <!--end::Nav wrapper-->
      <!--begin::Nav contents-->
      <div class="tab-content pw-dashboard-tab-content mt-8 px-10" id="yeniAdEkleTabs">
        <!--begin::Dakika content-->
        <div class="tab-pane fade show active" id="pw_tab_pane_dk" role="tabpanel">
          <!--begin::Form-->
          <form>
            <!--begin::Form table-->
            <div class="table-responsive">
              <table class="table align-middle">
                <tbody>
                  <!--begin::Row-->
                  <tr>
                    <td>
                      <label class="fs-8 fw-bolder" for="yenileme_sikligi">Yenileme Sıklığı</label>
                    </td>
                    <td>
                      <div class="d-flex flex-row align-items-center gap-4">
                        <input id="yenileme_sikligi" type="number" class="form-control mw-65px fs-8" name="yenileme_sikligi" value="0" />
                        <div class="px-10 py-3 border border-1 pw-border-neutral-200 rounded-0.5 pw-bg-neutral-50 pw-text-neutral-900">Dakika</div>
                      </div>
                    </td>
                  </tr>
                  <!--end::Row-->

                  <!--begin::Row-->
                  <tr>
                    <td>
                      <label class="fs-8 fw-bolder" for="saat">Başlangıç Saati</label>
                    </td>
                    <td>
                      <select id="saat" class="form-select mw-200px px-4 py-3 fs-8 pw-text-neutral-500" data-control="select2" data-placeholder="Seçim yapın" data-hide-search="true" data-dropdown-css-class="mw-200px" data-pw-hours-options="true">
                        <option></option>

                      </select>
                    </td>
                  </tr>
                  <!--end::Row-->

                  <!--begin::Row-->
                  <tr>
                    <td>
                      <label class="fs-8 fw-bolder" for="baslangic_tarihi">Başlangıç Tarihi</label>
                    </td>
                    <td>
                      <div class="position-relative mw-200px">
                        <span class="position-absolute top-50 translate-middle-y fs-base ms-4">
                          <i class="fa-solid fa-calendar-days pw-text-neutral-300"></i>
                        </span>
                        <input class="form-control fs-8 py-3 ps-10 pe-4" placeholder="Tarih seçiniz" id="baslangic_tarihi" required="required">
                      </div>
                    </td>
                  </tr>
                  <!--end::Row-->

                  <!--begin::Row-->
                  <tr>
                    <td><label class="fs-8 fw-bolder">Bitiş</label></td>
                  </tr>
                  <!--end::Row-->

                  <!--begin::Row-->
                  <tr data-pw-toggle="disabled-radio-switcher" data-pw-hide-target="#dakika_hicbir_zaman" data-pw-show-target="#dakika_bitis" data-pw-input="#dakika_bitis_tarihi">
                    <td>
                      <!--begin::Radio-->
                      <div class="form-check form-check-custom form-check-solid">
                        <input class="form-check-input w-20px h-20px" type="radio" value="" id="dakika_hicbir_zaman" name="bitis" checked />
                        <label class="form-check-label pw-text-neutral-900" for="dakika_hicbir_zaman">
                          Hiçbir zaman
                        </label>
                      </div>
                      <!--end::Radio-->

                      <!--begin::Radio-->
                      <div class="form-check form-check-custom form-check-solid mt-8 mb-3">
                        <input class="form-check-input w-20px h-20px" type="radio" value="" id="dakika_bitis" name="bitis" />
                        <label class="form-check-label pw-text-neutral-900" for="dakika_bitis">
                          Şu tarihte:
                        </label>
                      </div>
                      <!--end::Radio-->
                    </td>
                    <td class="align-bottom">
                      <div class="position-relative mw-200px">
                        <span class="position-absolute top-50 translate-middle-y fs-base ms-4">
                          <i class="fa-solid fa-calendar-days pw-text-neutral-300"></i>
                        </span>
                        <input class="form-control fs-8 py-3 ps-10 pe-4" placeholder="Tarih seçiniz" id="dakika_bitis_tarihi" required="required" disabled />
                      </div>
                    </td>
                  </tr>
                  <!--end::Row-->

                  <!--begin::Row-->
                  <tr>
                    <td colspan="2">
                      <div class="d-flex align-items-center justify-content-end gap-3">
                        <button type="reset" class="btn btn-active-light fs-8 py-3 px-6" data-bs-dismiss="modal" aria-label="Close">
                          Vazgeç
                        </button>
                        <button type="submit" class="btn btn-primary fs-8 py-3 px-6">
                          Kaydet
                        </button>
                      </div>
                    </td>
                  </tr>
                  <!--end::Row-->
                </tbody>
              </table>
            </div>
            <!--end::Form table-->
          </form>
          <!--end::Form-->
        </div>
        <!--end::Dakika content-->

        <!--begin::Saat content-->
        <div class="tab-pane fade" id="pw_tab_pane_saat" role="tabpanel">
          <!--begin::Form-->
          <form>
            <!--begin::Form table-->
            <div class="table-responsive">
              <table class="table align-middle">
                <tbody>
                  <!--begin::Row-->
                  <tr>
                    <td>
                      <label class="fs-8 fw-bolder" for="yenileme_sikligi">Yenileme Sıklığı</label>
                    </td>
                    <td>
                      <div class="d-flex flex-row align-items-center gap-4">
                        <input id="yenileme_sikligi" type="number" class="form-control mw-65px fs-8" name="yenileme_sikligi" value="0" />
                        <div class="px-10 py-3 border border-1 pw-border-neutral-200 rounded-0.5 pw-bg-neutral-50 pw-text-neutral-900">Saat</div>
                      </div>
                    </td>
                  </tr>
                  <!--end::Row-->

                  <!--begin::Row-->
                  <tr>
                    <td>
                      <label class="fs-8 fw-bolder" for="saat">Başlangıç Saati</label>
                    </td>
                    <td>
                      <select id="saat" class="form-select mw-200px px-4 py-3 fs-8 pw-text-neutral-500" data-control="select2" data-placeholder="Seçim yapın" data-hide-search="true" data-dropdown-css-class="mw-200px" data-pw-hours-options="true">
                        <option></option>

                      </select>
                    </td>
                  </tr>
                  <!--end::Row-->

                  <!--begin::Row-->
                  <tr>
                    <td>
                      <label class="fs-8 fw-bolder" for="baslangic_tarihi">Başlangıç Tarihi</label>
                    </td>
                    <td>
                      <div class="position-relative mw-200px">
                        <span class="position-absolute top-50 translate-middle-y fs-base ms-4">
                          <i class="fa-solid fa-calendar-days pw-text-neutral-300"></i>
                        </span>
                        <input class="form-control fs-8 py-3 ps-10 pe-4" placeholder="Tarih seçiniz" id="baslangic_tarihi" required="required">
                      </div>
                    </td>
                  </tr>
                  <!--end::Row-->

                  <!--begin::Row-->
                  <tr>
                    <td><label class="fs-8 fw-bolder">Bitiş</label></td>
                  </tr>
                  <!--end::Row-->

                  <!--begin::Row-->
                  <tr data-pw-toggle="disabled-radio-switcher" data-pw-hide-target="#saat_hicbir_zaman" data-pw-show-target="#saat_bitis" data-pw-input="#saat_bitis_tarihi">
                    <td>
                      <!--begin::Radio-->
                      <div class="form-check form-check-custom form-check-solid">
                        <input class="form-check-input w-20px h-20px" type="radio" value="" id="saat_hicbir_zaman" name="bitis" checked />
                        <label class="form-check-label pw-text-neutral-900" for="saat_hicbir_zaman">
                          Hiçbir zaman
                        </label>
                      </div>
                      <!--end::Radio-->

                      <!--begin::Radio-->
                      <div class="form-check form-check-custom form-check-solid mt-8 mb-3">
                        <input class="form-check-input w-20px h-20px" type="radio" value="" id="saat_bitis" name="bitis" />
                        <label class="form-check-label pw-text-neutral-900" for="saat_bitis">
                          Şu tarihte:
                        </label>
                      </div>
                      <!--end::Radio-->
                    </td>
                    <td class="align-bottom">
                      <div class="position-relative mw-200px">
                        <span class="position-absolute top-50 translate-middle-y fs-base ms-4">
                          <i class="fa-solid fa-calendar-days pw-text-neutral-300"></i>
                        </span>
                        <input class="form-control fs-8 py-3 ps-10 pe-4" placeholder="Tarih seçiniz" id="saat_bitis_tarihi" required="required" disabled />
                      </div>
                    </td>
                  </tr>
                  <!--end::Row-->

                  <!--begin::Row-->
                  <tr>
                    <td colspan="2">
                      <div class="d-flex align-items-center justify-content-end gap-3">
                        <button type="reset" class="btn btn-active-light fs-8 py-3 px-6" data-bs-dismiss="modal" aria-label="Close">
                          Vazgeç
                        </button>
                        <button type="submit" class="btn btn-primary fs-8 py-3 px-6">
                          Kaydet
                        </button>
                      </div>
                    </td>
                  </tr>
                  <!--end::Row-->
                </tbody>
              </table>
            </div>
            <!--end::Form table-->
          </form>
          <!--end::Form-->
        </div>
        <!--end::Saat content-->

        <!--begin::Gün content-->
        <div class="tab-pane fade" id="pw_tab_pane_gun" role="tabpanel">
          <!--begin::Form-->
          <form>
            <!--begin::Form table-->
            <div class="table-responsive">
              <table class="table align-middle">
                <tbody>
                  <!--begin::Row-->
                  <tr>
                    <td>
                      <label class="fs-8 fw-bolder" for="yenileme_sikligi">Yenileme Sıklığı</label>
                    </td>
                    <td>
                      <div class="d-flex flex-row align-items-center gap-4">
                        <input id="yenileme_sikligi" type="number" class="form-control mw-65px fs-8" name="yenileme_sikligi" value="0" />
                        <div class="px-10 py-3 border border-1 pw-border-neutral-200 rounded-0.5 pw-bg-neutral-50 pw-text-neutral-900">Gün</div>
                      </div>
                    </td>
                  </tr>
                  <!--end::Row-->

                  <!--begin::Row-->
                  <tr>
                    <td>
                      <label class="fs-8 fw-bolder" for="saat">Başlangıç Saati</label>
                    </td>
                    <td>
                      <select id="saat" class="form-select mw-200px px-4 py-3 fs-8 pw-text-neutral-500" data-control="select2" data-placeholder="Seçim yapın" data-hide-search="true" data-dropdown-css-class="mw-200px" data-pw-hours-options="true">
                        <option></option>

                      </select>
                    </td>
                  </tr>
                  <!--end::Row-->

                  <!--begin::Row-->
                  <tr>
                    <td>
                      <label class="fs-8 fw-bolder" for="baslangic_tarihi">Başlangıç Tarihi</label>
                    </td>
                    <td>
                      <div class="position-relative mw-200px">
                        <span class="position-absolute top-50 translate-middle-y fs-base ms-4">
                          <i class="fa-solid fa-calendar-days pw-text-neutral-300"></i>
                        </span>
                        <input class="form-control fs-8 py-3 ps-10 pe-4" placeholder="Tarih seçiniz" id="baslangic_tarihi" required="required">
                      </div>
                    </td>
                  </tr>
                  <!--end::Row-->

                  <!--begin::Row-->
                  <tr>
                    <td><label class="fs-8 fw-bolder">Bitiş</label></td>
                  </tr>
                  <!--end::Row-->

                  <!--begin::Row-->
                  <tr data-pw-toggle="disabled-radio-switcher" data-pw-hide-target="#gun_hicbir_zaman" data-pw-show-target="#gun_bitis" data-pw-input="#gun_bitis_tarihi">
                    <td>
                      <!--begin::Radio-->
                      <div class="form-check form-check-custom form-check-solid">
                        <input class="form-check-input w-20px h-20px" type="radio" value="" id="gun_hicbir_zaman" name="bitis" checked />
                        <label class="form-check-label pw-text-neutral-900" for="gun_hicbir_zaman">
                          Hiçbir zaman
                        </label>
                      </div>
                      <!--end::Radio-->

                      <!--begin::Radio-->
                      <div class="form-check form-check-custom form-check-solid mt-8 mb-3">
                        <input class="form-check-input w-20px h-20px" type="radio" value="" id="gun_bitis" name="bitis" />
                        <label class="form-check-label pw-text-neutral-900" for="gun_bitis">
                          Şu tarihte:
                        </label>
                      </div>
                      <!--end::Radio-->
                    </td>
                    <td class="align-bottom">
                      <div class="position-relative mw-200px">
                        <span class="position-absolute top-50 translate-middle-y fs-base ms-4">
                          <i class="fa-solid fa-calendar-days pw-text-neutral-300"></i>
                        </span>
                        <input class="form-control fs-8 py-3 ps-10 pe-4" placeholder="Tarih seçiniz" id="gun_bitis_tarihi" required="required" disabled />
                      </div>
                    </td>
                  </tr>
                  <!--end::Row-->

                  <!--begin::Row-->
                  <tr>
                    <td colspan="2">
                      <div class="d-flex align-items-center justify-content-end gap-3">
                        <button type="reset" class="btn btn-active-light fs-8 py-3 px-6" data-bs-dismiss="modal" aria-label="Close">
                          Vazgeç
                        </button>
                        <button type="submit" class="btn btn-primary fs-8 py-3 px-6">
                          Kaydet
                        </button>
                      </div>
                    </td>
                  </tr>
                  <!--end::Row-->
                </tbody>
              </table>
            </div>
            <!--end::Form table-->
          </form>
          <!--end::Form-->
        </div>
        <!--end::Gün content-->

        <!--begin::Hafta content-->
        <div class="tab-pane fade" id="pw_tab_pane_hafta" role="tabpanel">
          <!--begin::Form-->
          <form>
            <!--begin::Form table-->
            <div class="table-responsive">
              <table class="table align-middle">
                <tbody>
                  <!--begin::Row-->
                  <tr>
                    <td>
                      <label class="fs-8 fw-bolder" for="aralik_tipi">Aralık Tipi</label>
                    </td>
                    <td>
                      <div class="d-flex flex-row align-items-center gap-4">
                        <input id="grup_adi" type="number" class="form-control mw-65px fs-8" name="aralik_tipi" value="0" />
                        <div class="px-10 py-3 border border-1 pw-border-neutral-200 rounded-0.5 pw-bg-neutral-50 pw-text-neutral-900">Hafta</div>
                      </div>
                    </td>
                  </tr>
                  <!--end::Row-->

                  <!--begin::Row-->
                  <tr>
                    <td class="py-6">
                      <label class="fs-8 fw-bolder" for="gun_seciniz">Gün Seçiniz</label>
                    </td>
                    <td class="py-6">
                      <!--begin::Checkbox group-->
                      <div class="d-flex flex-row align-items-center gap-4">
                        <!--begin::Checkbox-->
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="pzt" />
                          <label class="form-check-label pw-text-neutral-800" for="pzt">
                            Pzt
                          </label>
                        </div>
                        <!--end::Checkbox-->

                        <!--begin::Checkbox-->
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="sal" />
                          <label class="form-check-label pw-text-neutral-800" for="sal">
                            Sal
                          </label>
                        </div>
                        <!--end::Checkbox-->

                        <!--begin::Checkbox-->
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="car" />
                          <label class="form-check-label pw-text-neutral-800" for="car">
                            Çar
                          </label>
                        </div>
                        <!--end::Checkbox-->

                        <!--begin::Checkbox-->
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="per" />
                          <label class="form-check-label pw-text-neutral-800" for="per">
                            Per
                          </label>
                        </div>
                        <!--end::Checkbox-->

                        <!--begin::Checkbox-->
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="cum" />
                          <label class="form-check-label pw-text-neutral-800" for="cum">
                            Cum
                          </label>
                        </div>
                        <!--end::Checkbox-->

                        <!--begin::Checkbox-->
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="cts" />
                          <label class="form-check-label pw-text-neutral-800" for="cts">
                            Cts
                          </label>
                        </div>
                        <!--end::Checkbox-->

                        <!--begin::Checkbox-->
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="paz" />
                          <label class="form-check-label pw-text-neutral-800" for="paz">
                            Paz
                          </label>
                        </div>
                        <!--end::Checkbox-->
                      </div>
                      <!--end::Checkbox group-->
                    </td>
                  </tr>
                  <!--end::Row-->

                  <!--begin::Row-->
                  <tr>
                    <td>
                      <label class="fs-8 fw-bolder" for="saat">Başlangıç Saati</label>
                    </td>
                    <td>
                      <select id="saat" class="form-select mw-200px px-4 py-3 fs-8 pw-text-neutral-500" data-control="select2" data-placeholder="Seçim yapın" data-hide-search="true" data-dropdown-css-class="mw-200px" data-pw-hours-options="true">
                        <option></option>

                      </select>
                    </td>
                  </tr>
                  <!--end::Row-->

                  <!--begin::Row-->
                  <tr>
                    <td>
                      <label class="fs-8 fw-bolder" for="baslangic_tarihi">Başlangıç Tarihi</label>
                    </td>
                    <td>
                      <div class="position-relative mw-200px">
                        <span class="position-absolute top-50 translate-middle-y fs-base ms-4">
                          <i class="fa-solid fa-calendar-days pw-text-neutral-300"></i>
                        </span>
                        <input class="form-control fs-8 py-3 ps-10 pe-4" placeholder="Tarih seçiniz" id="baslangic_tarihi" required="required">
                      </div>
                    </td>
                  </tr>
                  <!--end::Row-->

                  <!--begin::Row-->
                  <tr>
                    <td><label class="fs-8 fw-bolder">Bitiş</label></td>
                  </tr>
                  <!--end::Row-->

                  <!--begin::Row-->
                  <tr data-pw-toggle="disabled-radio-switcher" data-pw-hide-target="#yil_hicbir_zaman" data-pw-show-target="#yil_bitis" data-pw-input="#yil_bitis_tarihi">
                    <td>
                      <!--begin::Radio-->
                      <div class="form-check form-check-custom form-check-solid">
                        <input class="form-check-input w-20px h-20px" type="radio" value="" data-pw-showing="hicbir_zaman" id="yil_hicbir_zaman" name="bitis" checked />
                        <label class="form-check-label pw-text-neutral-900" for="yil_hicbir_zaman">
                          Hiçbir zaman
                        </label>
                      </div>
                      <!--end::Radio-->

                      <!--begin::Radio-->
                      <div class="form-check form-check-custom form-check-solid mt-8 mb-3">
                        <input class="form-check-input w-20px h-20px" type="radio" value="" data-pw-showing="bitis" id="yil_bitis" name="bitis" />
                        <label class="form-check-label pw-text-neutral-900" for="yil_bitis">
                          Şu tarihte:
                        </label>
                      </div>
                      <!--end::Radio-->
                    </td>
                    <td class="align-bottom">
                      <div class="position-relative mw-200px">
                        <span class="position-absolute top-50 translate-middle-y fs-base ms-4">
                          <i class="fa-solid fa-calendar-days pw-text-neutral-300"></i>
                        </span>
                        <input class="form-control fs-8 py-3 ps-10 pe-4" placeholder="Tarih seçiniz" id="yil_bitis_tarihi" required="required" disabled />
                      </div>
                    </td>
                  </tr>
                  <!--end::Row-->

                  <!--begin::Row-->
                  <tr>
                    <td colspan="2">
                      <div class="d-flex align-items-center justify-content-end gap-3">
                        <button type="reset" class="btn btn-active-light fs-8 py-3 px-6" data-bs-dismiss="modal" aria-label="Close">
                          Vazgeç
                        </button>
                        <button type="submit" class="btn btn-primary fs-8 py-3 px-6">
                          Kaydet
                        </button>
                      </div>
                    </td>
                  </tr>
                  <!--end::Row-->
                </tbody>
              </table>
            </div>
            <!--end::Form table-->
          </form>
          <!--end::Form-->
        </div>
        <!--end::Hafta content-->

        <!--begin::Ay content-->
        <div class="tab-pane fade" id="pw_tab_pane_ay" role="tabpanel">
          <!--begin::Form-->
          <form>
            <!--begin::Form table-->
            <div class="table-responsive">
              <table class="table align-middle">
                <tbody>
                  <!--begin::Row-->
                  <tr>
                    <td>
                      <label class="fs-8 fw-bolder" for="yenileme_sikligi">Yenileme Sıklığı</label>
                    </td>
                    <td>
                      <div class="d-flex flex-row align-items-center gap-4">
                        <input id="yenileme_sikligi" type="number" class="form-control mw-65px fs-8" name="yenileme_sikligi" value="0" />
                        <div class="px-10 py-3 border border-1 pw-border-neutral-200 rounded-0.5 pw-bg-neutral-50 pw-text-neutral-900">Ay</div>
                      </div>
                    </td>
                  </tr>
                  <!--end::Row-->

                  <!--begin::Row-->
                  <tr>
                    <td>
                      <label class="fs-8 fw-bolder" for="gun_seciniz">Gün Seçiniz</label>
                    </td>
                    <td>
                      <select id="gun_seciniz" class="form-select mw-200px px-4 py-3 fs-8 pw-text-neutral-500" data-control="select2" data-placeholder="Seçim yapın" data-hide-search="true" data-dropdown-css-class="mw-200px">
                        <option></option>
                        <option value="1">Her ayın 1. günü</option>
                        <option value="2">Her ayın ilk Cuma günü</option>
                        <option value="3">Her ayın son günü</option>
                      </select>
                    </td>
                  </tr>
                  <!--end::Row-->

                  <!--begin::Row-->
                  <tr>
                    <td>
                      <label class="fs-8 fw-bolder" for="saat">Başlangıç Saati</label>
                    </td>
                    <td>
                      <select id="saat" class="form-select mw-200px px-4 py-3 fs-8 pw-text-neutral-500" data-control="select2" data-placeholder="Seçim yapın" data-hide-search="true" data-dropdown-css-class="mw-200px" data-pw-hours-options="true">
                        <option></option>

                      </select>
                    </td>
                  </tr>
                  <!--end::Row-->

                  <!--begin::Row-->
                  <tr>
                    <td>
                      <label class="fs-8 fw-bolder" for="baslangic_tarihi">Başlangıç Tarihi</label>
                    </td>
                    <td>
                      <div class="position-relative mw-200px">
                        <span class="position-absolute top-50 translate-middle-y fs-base ms-4">
                          <i class="fa-solid fa-calendar-days pw-text-neutral-300"></i>
                        </span>
                        <input class="form-control fs-8 py-3 ps-10 pe-4" placeholder="Tarih seçiniz" id="baslangic_tarihi" required="required">
                      </div>
                    </td>
                  </tr>
                  <!--end::Row-->

                  <!--begin::Row-->
                  <tr>
                    <td><label class="fs-8 fw-bolder">Bitiş</label></td>
                  </tr>
                  <!--end::Row-->

                  <!--begin::Row-->
                  <tr data-pw-toggle="disabled-radio-switcher" data-pw-hide-target="#yil_hicbir_zaman" data-pw-show-target="#yil_bitis" data-pw-input="#yil_bitis_tarihi">
                    <td>
                      <!--begin::Radio-->
                      <div class="form-check form-check-custom form-check-solid">
                        <input class="form-check-input w-20px h-20px" type="radio" value="" id="yil_hicbir_zaman" name="bitis" checked />
                        <label class="form-check-label pw-text-neutral-900" for="yil_hicbir_zaman">
                          Hiçbir zaman
                        </label>
                      </div>
                      <!--end::Radio-->

                      <!--begin::Radio-->
                      <div class="form-check form-check-custom form-check-solid mt-8 mb-3">
                        <input class="form-check-input w-20px h-20px" type="radio" value="" id="yil_bitis" name="bitis" />
                        <label class="form-check-label pw-text-neutral-900" for="yil_bitis">
                          Şu tarihte:
                        </label>
                      </div>
                      <!--end::Radio-->
                    </td>
                    <td class="align-bottom">
                      <div class="position-relative mw-200px">
                        <span class="position-absolute top-50 translate-middle-y fs-base ms-4">
                          <i class="fa-solid fa-calendar-days pw-text-neutral-300"></i>
                        </span>
                        <input class="form-control fs-8 py-3 ps-10 pe-4" placeholder="Tarih seçiniz" id="yil_bitis_tarihi" required="required" disabled />
                      </div>
                    </td>
                  </tr>
                  <!--end::Row-->

                  <!--begin::Row-->
                  <tr>
                    <td colspan="2">
                      <div class="d-flex align-items-center justify-content-end gap-3">
                        <button type="reset" class="btn btn-active-light fs-8 py-3 px-6" data-bs-dismiss="modal" aria-label="Close">
                          Vazgeç
                        </button>
                        <button type="submit" class="btn btn-primary fs-8 py-3 px-6">
                          Kaydet
                        </button>
                      </div>
                    </td>
                  </tr>
                  <!--end::Row-->
                </tbody>
              </table>
            </div>
            <!--end::Form table-->
          </form>
          <!--end::Form-->
        </div>
        <!--end::Ay content-->

        <!--begin::Yıl content-->
        <div class="tab-pane fade" id="pw_tab_pane_yil" role="tabpanel">
          <!--begin::Form-->
          <form>
            <!--begin::Form table-->
            <div class="table-responsive">
              <table class="table align-middle">
                <tbody>
                  <!--begin::Row-->
                  <tr>
                    <td>
                      <label class="fs-8 fw-bolder" for="yenileme_sikligi">Yenileme Sıklığı</label>
                    </td>
                    <td>
                      <div class="d-flex flex-row align-items-center gap-4">
                        <input id="yenileme_sikligi" type="number" class="form-control mw-65px fs-8" name="yenileme_sikligi" value="0" />
                        <div class="px-10 py-3 border border-1 pw-border-neutral-200 rounded-0.5 pw-bg-neutral-50 pw-text-neutral-900">Yıl</div>
                      </div>
                    </td>
                  </tr>
                  <!--end::Row-->

                  <!--begin::Row-->
                  <tr>
                    <td>
                      <label class="fs-8 fw-bolder" for="saat">Başlangıç Saati</label>
                    </td>
                    <td>
                      <select id="saat" class="form-select mw-200px px-4 py-3 fs-8 pw-text-neutral-500" data-control="select2" data-placeholder="Seçim yapın" data-hide-search="true" data-dropdown-css-class="mw-200px" data-pw-hours-options="true">
                        <option></option>

                      </select>
                    </td>
                  </tr>
                  <!--end::Row-->

                  <!--begin::Row-->
                  <tr>
                    <td>
                      <label class="fs-8 fw-bolder" for="baslangic_tarihi">Başlangıç Tarihi</label>
                    </td>
                    <td>
                      <div class="position-relative mw-200px">
                        <span class="position-absolute top-50 translate-middle-y fs-base ms-4">
                          <i class="fa-solid fa-calendar-days pw-text-neutral-300"></i>
                        </span>
                        <input class="form-control fs-8 py-3 ps-10 pe-4" placeholder="Tarih seçiniz" id="baslangic_tarihi" required="required">
                      </div>
                    </td>
                  </tr>
                  <!--end::Row-->

                  <!--begin::Row-->
                  <tr>
                    <td><label class="fs-8 fw-bolder">Bitiş</label></td>
                  </tr>
                  <!--end::Row-->

                  <!--begin::Row-->
                  <tr data-pw-toggle="disabled-radio-switcher" data-pw-hide-target="#yil_hicbir_zaman" data-pw-show-target="#yil_bitis" data-pw-input="#yil_bitis_tarihi">
                    <td>
                      <!--begin::Radio-->
                      <div class="form-check form-check-custom form-check-solid">
                        <input class="form-check-input w-20px h-20px" type="radio" value="" id="yil_hicbir_zaman" name="bitis" checked />
                        <label class="form-check-label pw-text-neutral-900" for="yil_hicbir_zaman">
                          Hiçbir zaman
                        </label>
                      </div>
                      <!--end::Radio-->

                      <!--begin::Radio-->
                      <div class="form-check form-check-custom form-check-solid mt-8 mb-3">
                        <input class="form-check-input w-20px h-20px" type="radio" value="" id="yil_bitis" name="bitis" />
                        <label class="form-check-label pw-text-neutral-900" for="yil_bitis">
                          Şu tarihte:
                        </label>
                      </div>
                      <!--end::Radio-->
                    </td>
                    <td class="align-bottom">
                      <div class="position-relative mw-200px">
                        <span class="position-absolute top-50 translate-middle-y fs-base ms-4">
                          <i class="fa-solid fa-calendar-days pw-text-neutral-300"></i>
                        </span>
                        <input class="form-control fs-8 py-3 ps-10 pe-4" placeholder="Tarih seçiniz" id="yil_bitis_tarihi" required="required" disabled />
                      </div>
                    </td>
                  </tr>
                  <!--end::Row-->

                  <!--begin::Row-->
                  <tr>
                    <td colspan="2">
                      <div class="d-flex align-items-center justify-content-end gap-3">
                        <button type="reset" class="btn btn-active-light fs-8 py-3 px-6" data-bs-dismiss="modal" aria-label="Close">
                          Vazgeç
                        </button>
                        <button type="submit" class="btn btn-primary fs-8 py-3 px-6">
                          Kaydet
                        </button>
                      </div>
                    </td>
                  </tr>
                  <!--end::Row-->
                </tbody>
              </table>
            </div>
            <!--end::Form table-->
          </form>
          <!--end::Form-->
        </div>
        <!--end::Yıl content-->
      </div>
      <!--end::Nav contents-->
    </div>
  </div>
</div>
<!--end::Modal-->

<!--begin::Script-->
<script>
  window.addEventListener('DOMContentLoaded', () => {
    ClassicEditor
      .create(document.querySelector('#pw_aciklama'), {
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
    ClassicEditor
      .create(document.querySelector('#pw_tanimli_is_aciklama'), {
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
    ClassicEditor.replace('Resolution', {
      height: 100
    });
  })
</script>
<!--end::Script-->

<!--begin::Minimize sidebar script-->
<script>
  window.addEventListener('DOMContentLoaded', () => {
    document.querySelector('body').setAttribute('data-kt-app-sidebar-minimize', 'on');
  })
</script>
<!--end::Minimize sidebar script-->


<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/foot.php'; ?>