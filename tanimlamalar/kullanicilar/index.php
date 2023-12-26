<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/header.php'; ?>

<!--begin::Wrapper-->
<div class="app-wrapper flex-column flex-row-fluid p-6" id="kt_app_wrapper">

  <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/sidebar.php'; ?>
  <!--begin::Main-->
  <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <!--begin::Content wrapper-->
    <div class="row">
      <div class="col col-md-11">
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
                  <a href="/tanimlamalar/" class="text-muted text-hover-primary">Tanımlamalar</a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                  <span class="text-muted">/</span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item active">Kullanıcılar</li>
                <!--end::Item-->
              </ul>
              <!--end::Breadcrumb-->
              <!--begin::Title-->
              <h1 class="page-heading d-flex text-dark fw-bold fs-4 flex-column justify-content-center my-0">
                Kullanıcılar
              </h1>
              <!--end::Title-->
            </div>
            <!--end::Page title-->

          </div>
          <!--end::Toolbar container-->
        </div>
        <!--end::Toolbar-->

        <!--begin::Content -->
        <div id="kt_app_content" class="app-content flex-column-fluid">
          <!--begin::User info wrapper-->
          <div class="d-flex flex-column flex-md-row justify-content-between p-md-8">
            <!--begin::User info-->
            <div class="d-flex flex-row align-items-center gap-4">
              <div class="symbol symbol-125px rounded-3">
                <img class="w-125px h-125px rounded-3" src="/assets/media/general/Blank.png" width="125" height="125" alt="Blank profile picture">
              </div>
              <div class="d-flex flex-column gap-5">
                <div class="d-flex align-items-center flex-row gap-4">
                  <div class="font-poppins pw-text-neutral-700 fs-4 fw-bold">Abdülaziz Bilge</div>
                  <div class="d-inline-flex align-items-center gap-2 py-1 px-2 rounded-pill border border-success">
                    <div class="w-8px h-8px bg-success rounded-pill"></div>
                    <span class="fs-9 fw-medium text-success">Aktif Kullanıcı</span>
                  </div>
                </div>
                <div class="d-flex flex-column gap-2">
                  <div class="d-inline-flex align-items-center gap-2">
                    <div class="d-inline-flex align-items-center justify-content-center w-20px h-20px pw-bg-primary-100 rounded-pill">
                      <i class="fa-solid fa-location-dot pw-text-primary-500 fs-9"></i>
                    </div>
                    <span class="fs-9 fw-medium pw-text-neutral-600">Türkiye</span>
                  </div>
                  <div class="d-inline-flex align-items-center gap-2">
                    <div class="d-inline-flex align-items-center justify-content-center w-20px h-20px pw-bg-primary-100 rounded-pill">
                      <i class="fa-solid fa-envelope  pw-text-primary-500 fs-9"></i>
                    </div>
                    <span class="fs-9 fw-medium pw-text-neutral-600">AB976429@g-gsoft.com</span>
                  </div>
                </div>
              </div>
            </div>
            <!--end::User info-->

            <!--begin::Actions-->
            <div>
              <button type="button" class="btn btn-primary fs-8 py-3 px-6">
                Fotoğrafı Değiştir
              </button>
            </div>
            <!--end::Actions-->
          </div>
          <!--end::User info wrapper-->

          <!--begin::Nav wrapper-->
          <div class="table-reponsive overflow-x-auto mt-4 px-8">
            <!--begin::nav tabs-->
            <ul class="nav nav-tabs nav-line-tabs fs-6">
              <!--begin::Nav item-->
              <li class="nav-item">
                <a class="nav-link mx-0 py-3 px-10 fs-base rounded-0 active fw-medium" data-bs-toggle="tab" href="#pw_tab_pane_genel">Genel</a>
              </li>
              <!--end::Nav item-->

              <!--begin::Nav item-->
              <li class="nav-item">
                <a class="nav-link py-3 px-10 mx-0 fs-base fw-medium rounded-0 pw-text-neutral-500" data-bs-toggle="tab" href="#pw_tab_pane_uyelikler">Üyelikler</a>
              </li>
              <!--end::Nav item-->

              <!--begin::Nav item-->
              <li class="nav-item">
                <a class="nav-link py-3 px-10 mx-0 fs-base fw-medium rounded-0 pw-text-neutral-500" data-bs-toggle="tab" href="#pw_tab_pane_ia">İş akışı</a>
              </li>
              <!--end::Nav item-->

              <!--begin::Nav item-->
              <li class="nav-item">
                <a class="nav-link py-3 px-10 mx-0 fs-base fw-medium rounded-0 pw-text-neutral-500" data-bs-toggle="tab" href="#pw_tab_pane_mobil">Mobil</a>
              </li>
              <!--end::Nav item-->

              <!--begin::Nav item-->
              <li class="nav-item">
                <a class="nav-link py-3 px-10 mx-0 fs-base fw-medium rounded-0 pw-text-neutral-500" data-bs-toggle="tab" href="#pw_tab_pane_vekalet">Vekalet</a>
              </li>
              <!--end::Nav item-->

              <!--begin::Nav item-->
              <li class="nav-item">
                <a class="nav-link py-3 px-10 mx-0 fs-base fw-medium rounded-0 pw-text-neutral-500" data-bs-toggle="tab" href="#pw_tab_pane_tedarikciler">Tedarikçiler</a>
              </li>
              <!--end::Nav item-->
            </ul>
            <!--end::nav tabs-->
          </div>
          <!--end::Nav wrapper-->
          <!--begin::Nav contents-->
          <div class="tab-content pw-dashboard-tab-content mt-6 p-10" id="yeniAdEkleTabs">
            <!--begin::Genel content-->
            <div class="tab-pane fade show active" id="pw_tab_pane_genel" role="tabpanel">
              <!--begin::Form-->
              <form>
                <div class="d-flex flex-column gap-12">
                  <h2 class="fw-bold pb-5 border-bottom pw-border-stroke fs-base mb-0">
                    Genel
                  </h2>
                  <!--begin::Table-->
                  <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                    <table class="table w-min-content w-100 gy-3 gx-4">
                      <tbody>
                        <!--begin::Row-->
                        <tr>
                          <td>
                            <label class="form-label fs-base" for="pw_kullanicilar_statu">Statü</label>
                          </td>
                          <td>
                            <div class="form-check form-switch form-check-custom form-check-solid">
                              <input class="form-check-input" type="checkbox" value="" id="pw_kullanicilar_statu" name="pw_kullanicilar_statu" />
                            </div>
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td>
                            <label class="form-label fs-base" for="pw_kullanicilar_dil">Dil</label>
                          </td>
                          <td>
                            <div class="form-floating border rounded">
                              <select class="form-select pw-form-control-neutral form-select-transparent" data-placeholder="Dil seçin" id="pw_kullanicilar_dil">
                                <option></option>
                                <option value="tr" data-kt-select2-country="assets/media/flags/turkey.svg" selected>Türkçe</option>
                                <option value="uk" data-kt-select2-country="assets/media/flags/united-kingdom.svg">İngilizce</option>
                              </select>
                            </div>
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td>
                            <label class="form-label fs-base" for="pw_kullanicilar_kaynak">Kaynak</label>
                          </td>
                          <td>
                            <select id="pw_kullanicilar_kaynak" class="form-select pw-form-control-neutral fs-8 py-3 px-4" data-control="select2" data-placeholder="Seçim yapın">
                              <option></option>
                              <option value="1" selected>Lokal Kullanıcı</option>
                            </select>
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td>
                            <label class="form-label fs-base" for="pw_kullanicilar_ad">Kullanıcı Adı</label>
                          </td>
                          <td>
                            <div class="row">
                              <div class="col col-md-6">
                                <input type="text" class="form-control pw-form-control-neutral fs-8 py-3 px-4" id="pw_kullanicilar_ad" name="pw_kullanicilar_ad" required="required" value="Abdülaziz" />
                              </div>
                              <div class="col col-md-6">
                                <input type="text" class="form-control pw-form-control-neutral fs-8 py-3 px-4" id="pw_ad_tanimi_soyad" name="pw_ad_tanimi_soyad" required="required" value="Bilge" />
                              </div>
                            </div>
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td>
                            <label class="form-label fs-base" for="pw_kullanicilar_giris_adi">Giriş Adı</label>
                          </td>
                          <td>
                            <input type="text" class="form-control pw-form-control-neutral fs-8 py-3 px-4" id="pw_kullanicilar_giris_adi" name="pw_kullanicilar_giris_adi" required="required" value="AB976429" />
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td>
                            <label class="form-label fs-base" for="pw_kullanicilar_giris_sifre">Şifre</label>
                          </td>
                          <td>
                            <input type="password" class="form-control pw-form-control-neutral fs-8 py-3 px-4" id="pw_kullanicilar_giris_sifre" name="pw_kullanicilar_giris_sifre" required="required" value="AB976429" />
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td>
                            <label class="form-label fs-base" for="pw_kullanicilar_giris_e_posta">E-posta</label>
                          </td>
                          <td>
                            <input type="email" class="form-control pw-form-control-neutral fs-8 py-3 px-4" id="pw_kullanicilar_giris_e_posta" name="pw_kullanicilar_giris_e_posta" required="required" value="Aegtdrgrsfsikpgob@gmail.com" />
                            <div class="fs-9 pw-text-neutral-600 text-end mt-3">Son giriş: 13.01.2023, 11:23</div>
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td>
                            <label class="form-label fs-base" for="pw_kullanicilar_giris_unvan">Ünvan</label>
                          </td>
                          <td>
                            <input type="text" class="form-control pw-form-control-neutral fs-8 py-3 px-4" id="pw_kullanicilar_giris_unvan" name="pw_kullanicilar_giris_unvan" required="required" value="YÖNETİCİ" />
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td>
                            <label class="form-label fs-base" for="pw_kullanicilar_giris_pozisyon">Pozisyon</label>
                          </td>
                          <td>
                            <input type="text" class="form-control pw-form-control-neutral fs-8 py-3 px-4" id="pw_kullanicilar_giris_pozisyon" name="pw_kullanicilar_giris_pozisyon" />
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td>
                            <label class="form-label fs-base" for="pw_kullanicilar_vekalet">Vekalet</label>
                          </td>
                          <td>
                            <input type="text" class="form-control pw-form-control-neutral fs-8 py-3 px-4" id="pw_kullanicilar_vekalet" name="pw_kullanicilar_vekalet" />
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td>
                            <label class="form-label fs-base" for="pw_kullanicilar_vekalet_gsm_no">Vekalet GSM No</label>
                          </td>
                          <td>
                            <input type="tel" class="form-control pw-form-control-neutral fs-8 py-3 px-4" id="pw_kullanicilar_vekalet_gsm_no" name="pw_kullanicilar_vekalet_gsm_no" />
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td>
                            <label class="form-label fs-base" for="pw_kullanicilar_aciklama">Açıklama</label>
                          </td>
                          <td>
                            <textarea class="form-control pw-form-control-neutral fs-8 py-3 px-4" rows="3" id="pw_kullanicilar_aciklama" name="pw_kullanicilar_aciklama" placeholder="Lorem ipsum dolor sit amet"></textarea>
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td>
                            <label class="form-label fs-base" for="pw_kullanicilar_yoneticiler">Yöneticiler</label>
                          </td>
                          <td>
                            <input type="text" class="form-control pw-form-control-neutral fs-8 py-3 px-4" id="pw_kullanicilar_yoneticiler" name="pw_kullanicilar_yoneticiler" value="Abdülaziz Bilge" />
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td>
                            <label class="form-label fs-base" for="pw_kullanicilar_gsm">GSM</label>
                          </td>
                          <td>
                            <input type="text" class="form-control pw-form-control-neutral fs-8 py-3 px-4" id="pw_kullanicilar_gsm" name="pw_kullanicilar_gsm" value="Agency" />
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td>
                            <label class="form-label fs-base" for="pw_kullanicilar_ulke">Ülke</label>
                          </td>
                          <td>
                            <input type="text" class="form-control pw-form-control-neutral fs-8 py-3 px-4" id="pw_kullanicilar_ulke" name="pw_kullanicilar_ulke" value="322484" />
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td>
                            <label class="form-label fs-base" for="pw_kullanicilar_posta">Posta</label>
                          </td>
                          <td>
                            <input type="text" class="form-control pw-form-control-neutral fs-8 py-3 px-4" id="pw_kullanicilar_posta" name="pw_kullanicilar_posta" value="76537995432" />
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td>
                            <label class="form-label fs-base" for="pw_kullanicilar_e_posta_2">E-posta</label>
                          </td>
                          <td>
                            <input type="email" class="form-control pw-form-control-neutral fs-8 py-3 px-4" id="pw_kullanicilar_e_posta_2" name="pw_kullanicilar_e_posta_2" />
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td colspan="2">
                            <div class="d-flex align-items-center justify-content-end gap-3">
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
                      </tbody>
                    </table>
                  </div>
                  <!--end::Table-->
                </div>
              </form>
              <!--end::Form-->
            </div>
            <!--end::Genel content-->

            <!--begin::Üyelikler content-->
            <div class="tab-pane fade" id="pw_tab_pane_uyelikler" role="tabpanel">
              <div class="d-flex flex-column flex-xl-row gap-4">
                <!--begin::1-->
                <div class="w-100 w-xl-50 d-flex flex-column gap-10 p-8">
                  <!--begin::Header-->
                  <div>
                    <h2 class="font-base fw-bold pw-text-neutral-800 mb-1">Gruplar</h2>
                    <p class="fs-9 fw-medium pw-text-neutral-600 mb-0">Grupları buradan görüntüleyebilirsin.</p>
                  </div>
                  <!--end::Header-->

                  <!--begin::Content wapper-->
                  <div class="d-flex flex-column gap-4">
                    <!--begin::Item-->
                    <div class="d-flex align-items-center justify-content-between gap-4">
                      <div class="d-flex flex-row flex-nowrap align-items-center gap-4">
                        <!--begin::Icon-->
                        <div class="w-50px h-50px rounded-0.25rem pw-bg-neutral-100 d-inline-flex align-items-center justify-content-center">
                          <i class="fa-solid fa-user-group fs-3 pw-text-primary-500"></i>
                        </div>
                        <!--end::Icon-->

                        <!--begin::Content-->
                        <div class="d-flex flex-column gap-1 pw-text-neutral-700">
                          <div class="fs-8 fw-semibold">Deneme</div>
                          <div class="fs-9">Oluşturulma Tarihi: <span class="pw-text-neutral-500">11.02.2022</span></div>
                        </div>
                        <!--end::Content-->
                      </div>

                      <!--begin::Actions-->
                      <div class="d-flex flex-nowrap gap-2">
                        <a href="/tanimlamalar/kullanicilar/#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                          <i class="fa-solid fa-pen-to-square fs-7 text-primary"></i>
                        </a>

                        <a href="/tanimlamalar/kullanicilar/#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                          <i class="fa-solid fa-trash fs-7 text-primary"></i>
                        </a>
                      </div>
                      <!--end::Actions-->
                    </div>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <div class="d-flex align-items-center justify-content-between gap-4">
                      <div class="d-flex flex-row flex-nowrap align-items-center gap-4">
                        <!--begin::Icon-->
                        <div class="w-50px h-50px rounded-0.25rem pw-bg-neutral-100 d-inline-flex align-items-center justify-content-center">
                          <i class="fa-solid fa-user-group fs-3 pw-text-primary-500"></i>
                        </div>
                        <!--end::Icon-->

                        <!--begin::Content-->
                        <div class="d-flex flex-column gap-1 pw-text-neutral-700">
                          <div class="fs-8 fw-semibold">deneme1112</div>
                          <div class="fs-9">Oluşturulma Tarihi: <span class="pw-text-neutral-500">11.02.2022</span></div>
                        </div>
                        <!--end::Content-->
                      </div>

                      <!--begin::Actions-->
                      <div class="d-flex flex-nowrap gap-2">
                        <a href="/tanimlamalar/kullanicilar/#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                          <i class="fa-solid fa-pen-to-square fs-7 text-primary"></i>
                        </a>

                        <a href="/tanimlamalar/kullanicilar/#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                          <i class="fa-solid fa-trash fs-7 text-primary"></i>
                        </a>
                      </div>
                      <!--end::Actions-->
                    </div>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <div class="d-flex align-items-center justify-content-between gap-4">
                      <div class="d-flex flex-row flex-nowrap align-items-center gap-4">
                        <!--begin::Icon-->
                        <div class="w-50px h-50px rounded-0.25rem pw-bg-neutral-100 d-inline-flex align-items-center justify-content-center">
                          <i class="fa-solid fa-user-group fs-3 pw-text-primary-500"></i>
                        </div>
                        <!--end::Icon-->

                        <!--begin::Content-->
                        <div class="d-flex flex-column gap-1 pw-text-neutral-700">
                          <div class="fs-8 fw-semibold">Fatura Finans</div>
                          <div class="fs-9">Oluşturulma Tarihi: <span class="pw-text-neutral-500">11.02.2022</span></div>
                        </div>
                        <!--end::Content-->
                      </div>

                      <!--begin::Actions-->
                      <div class="d-flex flex-nowrap gap-2">
                        <a href="/tanimlamalar/kullanicilar/#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                          <i class="fa-solid fa-pen-to-square fs-7 text-primary"></i>
                        </a>

                        <a href="/tanimlamalar/kullanicilar/#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                          <i class="fa-solid fa-trash fs-7 text-primary"></i>
                        </a>
                      </div>
                      <!--end::Actions-->
                    </div>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <div class="d-flex align-items-center justify-content-between gap-4">
                      <div class="d-flex flex-row flex-nowrap align-items-center gap-4">
                        <!--begin::Icon-->
                        <div class="w-50px h-50px rounded-0.25rem pw-bg-neutral-100 d-inline-flex align-items-center justify-content-center">
                          <i class="fa-solid fa-user-group fs-3 pw-text-primary-500"></i>
                        </div>
                        <!--end::Icon-->

                        <!--begin::Content-->
                        <div class="d-flex flex-column gap-1 pw-text-neutral-700">
                          <div class="fs-8 fw-semibold">Test V1</div>
                          <div class="fs-9">Oluşturulma Tarihi: <span class="pw-text-neutral-500">11.02.2022</span></div>
                        </div>
                        <!--end::Content-->
                      </div>

                      <!--begin::Actions-->
                      <div class="d-flex flex-nowrap gap-2">
                        <a href="/tanimlamalar/kullanicilar/#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                          <i class="fa-solid fa-pen-to-square fs-7 text-primary"></i>
                        </a>

                        <a href="/tanimlamalar/kullanicilar/#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                          <i class="fa-solid fa-trash fs-7 text-primary"></i>
                        </a>
                      </div>
                      <!--end::Actions-->
                    </div>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <div class="d-flex align-items-center justify-content-between gap-4">
                      <div class="d-flex flex-row flex-nowrap align-items-center gap-4">
                        <!--begin::Icon-->
                        <div class="w-50px h-50px rounded-0.25rem pw-bg-neutral-100 d-inline-flex align-items-center justify-content-center">
                          <i class="fa-solid fa-user-group fs-3 pw-text-primary-500"></i>
                        </div>
                        <!--end::Icon-->

                        <!--begin::Content-->
                        <div class="d-flex flex-column gap-1 pw-text-neutral-700">
                          <div class="fs-8 fw-semibold">testGroup</div>
                          <div class="fs-9">Oluşturulma Tarihi: <span class="pw-text-neutral-500">11.02.2022</span></div>
                        </div>
                        <!--end::Content-->
                      </div>

                      <!--begin::Actions-->
                      <div class="d-flex flex-nowrap gap-2">
                        <a href="/tanimlamalar/kullanicilar/#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                          <i class="fa-solid fa-pen-to-square fs-7 text-primary"></i>
                        </a>

                        <a href="/tanimlamalar/kullanicilar/#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                          <i class="fa-solid fa-trash fs-7 text-primary"></i>
                        </a>
                      </div>
                      <!--end::Actions-->
                    </div>
                    <!--end::Item-->
                  </div>
                  <!--end::Content wrapper-->
                </div>
                <!--end::1-->

                <!--begin::2-->
                <div class="w-100 w-xl-50 d-flex flex-column gap-10 p-8">
                  <!--begin::Header-->
                  <div>
                    <h2 class="font-base fw-bold pw-text-neutral-800 mb-1">Yetki Setleri</h2>
                    <p class="fs-9 fw-medium pw-text-neutral-600 mb-0">Yetki setlerini buradan görüntüleyebilirsin.</p>
                  </div>
                  <!--end::Header-->

                  <!--begin::Content wapper-->
                  <div class="d-flex flex-column gap-4">
                    <!--begin::Item-->
                    <div class="d-flex align-items-center justify-content-between gap-4">
                      <div class="d-flex flex-row flex-nowrap align-items-center gap-4">
                        <!--begin::Icon-->
                        <div class="w-50px h-50px rounded-0.25rem pw-bg-neutral-100 d-inline-flex align-items-center justify-content-center">
                          <i class="fa-solid fa-user-group fs-3 pw-text-primary-500"></i>
                        </div>
                        <!--end::Icon-->

                        <!--begin::Content-->
                        <div class="d-flex flex-column gap-1 pw-text-neutral-700">
                          <div class="fs-8 fw-semibold">Deneme</div>
                          <div class="fs-9">Oluşturulma Tarihi: <span class="pw-text-neutral-500">11.02.2022</span></div>
                        </div>
                        <!--end::Content-->
                      </div>

                      <!--begin::Actions-->
                      <div class="d-flex flex-nowrap gap-2">
                        <a href="/tanimlamalar/kullanicilar/#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                          <i class="fa-solid fa-pen-to-square fs-7 text-primary"></i>
                        </a>

                        <a href="/tanimlamalar/kullanicilar/#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                          <i class="fa-solid fa-trash fs-7 text-primary"></i>
                        </a>
                      </div>
                      <!--end::Actions-->
                    </div>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <div class="d-flex align-items-center justify-content-between gap-4">
                      <div class="d-flex flex-row flex-nowrap align-items-center gap-4">
                        <!--begin::Icon-->
                        <div class="w-50px h-50px rounded-0.25rem pw-bg-neutral-100 d-inline-flex align-items-center justify-content-center">
                          <i class="fa-solid fa-user-group fs-3 pw-text-primary-500"></i>
                        </div>
                        <!--end::Icon-->

                        <!--begin::Content-->
                        <div class="d-flex flex-column gap-1 pw-text-neutral-700">
                          <div class="fs-8 fw-semibold">deneme1112</div>
                          <div class="fs-9">Oluşturulma Tarihi: <span class="pw-text-neutral-500">11.02.2022</span></div>
                        </div>
                        <!--end::Content-->
                      </div>

                      <!--begin::Actions-->
                      <div class="d-flex flex-nowrap gap-2">
                        <a href="/tanimlamalar/ad-tanimlari/#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                          <i class="fa-solid fa-pen-to-square fs-7 text-primary"></i>
                        </a>

                        <a href="/tanimlamalar/ad-tanimlari/#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                          <i class="fa-solid fa-trash fs-7 text-primary"></i>
                        </a>
                      </div>
                      <!--end::Actions-->
                    </div>
                    <!--end::Item-->
                  </div>
                  <!--end::Content wrapper-->
                </div>
                <!--end::2-->
              </div>
            </div>
            <!--end::Üyelikler content-->

            <!--begin::İş Akışı content-->
            <div class="tab-pane fade" id="pw_tab_pane_ia" role="tabpanel">
              <div class="d-flex flex-column gap-10 p-8">
                <div>
                  <h2 class="font-base fw-bold pw-text-neutral-800 mb-1">İş Akışı</h2>
                  <p class="fs-9 fw-medium pw-text-neutral-600 mb-0">İş akışını buradan görüntüleyebilirsiniz.</p>
                </div>

                <div class="table-responsive">
                  <table class="table table-row-bordered align-middle table-r ow-stroke gy-5 fw-bold fs-8 text-gray-700">
                    <thead>
                      <tr class="fw-bold fs-8 text-gray-500">
                        <th>
                          <div class="form-check form-check-solid d-flex align-items-center gap-2 mb-0">
                            <input class="form-check-input rounded-0.20rem w-20px h-20px float-none" type="checkbox" value="" id="is_akisi_check_all" data-pw-check-all="true">
                            <label class="form-check-label pw-text-neutral-500 fs-8 fw-bold" for="is_akisi_check_all">
                              Süreç Adı
                            </label>
                          </div>
                        </th>
                        <th>Aktivite Adı</th>
                        <th>
                          <div class="d-inline-flex align-items-center justify-content-center w-25px h-25px pw-bg-primary-100 rounded-0.5">
                            <span class="font-poppins fs-9 pw-text-primary-500">1</span>
                          </div>
                        </th>
                        <th>
                          <a href="/tanimlamalar/kullanicilar/#" class="btn btn-icon pw-btn-bg-primary-100 btn-text-primary pw-btn-hover-bg-primary-200 w-30px h-30px rounded-0.5">
                            <i class="fa-solid fa-reply fs-7 text-primary"></i>
                          </a>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <!--begin::Row-->
                      <tr>
                        <td>
                          <div class="form-check form-check-solid d-flex align-items-center gap-2 mb-0">
                            <input class="form-check-input rounded-0.20rem w-20px h-20px float-none" type="checkbox" value="" id="row_1" data-pw-check-all-target="#is_akisi_check_all" />
                            <label class="form-check-label pw-text-neutral-700 fw-bold fs-8" for="row_1">
                              Fatura
                            </label>
                          </div>
                        </td>
                        <td>Finans Ödeme</td>
                        <td>
                          <div class="d-inline-flex align-items-center justify-content-center w-25px h-25px pw-bg-primary-100 rounded-0.5">
                            <span class="font-poppins fs-9 pw-text-primary-500">2</span>
                          </div>
                        </td>
                        <td>
                          <a href="/tanimlamalar/kullanicilar/#" class="btn btn-icon pw-btn-bg-primary-100 btn-text-primary pw-btn-hover-bg-primary-200 w-30px h-30px rounded-0.5">
                            <i class="fa-solid fa-reply fs-7 text-primary"></i>
                          </a>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td>
                          <div class="form-check form-check-solid d-flex align-items-center gap-2 mb-0">
                            <input class="form-check-input rounded-0.20rem w-20px h-20px float-none" type="checkbox" value="" id="row_2" data-pw-check-all-target="#is_akisi_check_all" />
                            <label class="form-check-label pw-text-neutral-700 fw-bold fs-8" for="row_2">
                              Fatura-2
                            </label>
                          </div>
                        </td>
                        <td>Finans Ödeme 2</td>
                        <td>
                          <div class="d-inline-flex align-items-center justify-content-center w-25px h-25px pw-bg-primary-100 rounded-0.5">
                            <span class="font-poppins fs-9 pw-text-primary-500">3 </span>
                          </div>
                        </td>
                        <td>
                          <a href="/tanimlamalar/kullanicilar/#" class="btn btn-icon pw-btn-bg-primary-100 btn-text-primary pw-btn-hover-bg-primary-200 w-30px h-30px rounded-0.5">
                            <i class="fa-solid fa-reply fs-7 text-primary"></i>
                          </a>
                        </td>
                      </tr>
                      <!--end::Row-->
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!--end::İş Akışı content-->

            <!--begin::Mobil content-->
            <div class="tab-pane fade" id="pw_tab_pane_mobil" role="tabpanel">
              <div class="d-flex flex-column flex-xl-row gap-4">
                <!--begin::1-->
                <div class="w-100 w-xl-50 p-8 d-inline-flex flex-column gap-10">
                  <!--begin::Header-->
                  <div>
                    <h2 class="font-base fw-bold pw-text-neutral-800 mb-1">Nerede giriş yaptın?</h2>
                    <p class="fs-9 fw-medium pw-text-neutral-600 mb-0">Giriş yaptığın cihazları buradan görüntüleyebilirsin.</p>
                  </div>
                  <!--end::Header-->

                  <!--begin::Content-->
                  <div class="d-flex flex-column gap-4">
                    <!--begin::Item-->
                    <div class="d-flex flex-row flex-nowrap align-items-center gap-4 py-3 border-bottom pw-border-stroke">
                      <!--begin::Icon-->
                      <div class="w-50px h-50px rounded-0.25rem pw-bg-neutral-100 d-inline-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-desktop fs-3 pw-text-primary-500"></i>
                      </div>
                      <!--end::Icon-->

                      <!--begin::Content-->
                      <div class="d-flex flex-column">
                        <div class="fs-8 pw-text-neutral-700 fw-bold">2018 Macbook Pro 15-inch</div>
                        <div class="d-flex flex-row flex-nowrap align-items-center gap-5 fs-9 pw-text-neutral-500">
                          <div>Melbourne, Australia</div>
                          <div class="w-6px h-6px rounded-pill pw-bg-neutral-700"></div>
                          <div>22 Jan at 10:40am</div>
                        </div>
                      </div>
                      <!--end::Content-->
                    </div>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <div class="d-flex flex-row flex-nowrap align-items-center gap-4 py-3 border-bottom pw-border-stroke">
                      <!--begin::Icon-->
                      <div class="w-50px h-50px rounded-0.25rem pw-bg-neutral-100 d-inline-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-desktop fs-3 pw-text-primary-500"></i>
                      </div>
                      <!--end::Icon-->

                      <!--begin::Content-->
                      <div class="d-flex flex-column">
                        <div class="fs-8 pw-text-neutral-700 fw-bold">2018 Macbook Pro 15-inch</div>
                        <div class="d-flex flex-row flex-nowrap align-items-center gap-5 fs-9 pw-text-neutral-500">
                          <div>Melbourne, Australia</div>
                          <div class="w-6px h-6px rounded-pill pw-bg-neutral-700"></div>
                          <div>22 Jan at 10:40am</div>
                        </div>
                      </div>
                      <!--end::Content-->
                    </div>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <div class="d-flex flex-row flex-nowrap align-items-center gap-4 py-3 border-bottom pw-border-stroke">
                      <!--begin::Icon-->
                      <div class="w-50px h-50px rounded-0.25rem pw-bg-neutral-100 d-inline-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-desktop fs-3 pw-text-primary-500"></i>
                      </div>
                      <!--end::Icon-->

                      <!--begin::Content-->
                      <div class="d-flex flex-column">
                        <div class="fs-8 pw-text-neutral-700 fw-bold">2018 Iphone XS</div>
                        <div class="d-flex flex-row flex-nowrap align-items-center gap-5 fs-9 pw-text-neutral-500">
                          <div>Melbourne, Australia</div>
                          <div class="w-6px h-6px rounded-pill pw-bg-neutral-700"></div>
                          <div>22 Jan at 10:40am</div>
                        </div>
                      </div>
                      <!--end::Content-->
                    </div>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <div class="d-flex flex-row flex-nowrap align-items-center gap-4 py-3 border-bottom pw-border-stroke">
                      <!--begin::Icon-->
                      <div class="w-50px h-50px rounded-0.25rem pw-bg-neutral-100 d-inline-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-desktop fs-3 pw-text-primary-500"></i>
                      </div>
                      <!--end::Icon-->

                      <!--begin::Content-->
                      <div class="d-flex flex-column">
                        <div class="fs-8 pw-text-neutral-700 fw-bold">2018 Macbook Pro 15-inch</div>
                        <div class="d-flex flex-row flex-nowrap align-items-center gap-5 fs-9 pw-text-neutral-500">
                          <div>Melbourne, Australia</div>
                          <div class="w-6px h-6px rounded-pill pw-bg-neutral-700"></div>
                          <div>22 Jan at 10:40am</div>
                        </div>
                      </div>
                      <!--end::Content-->
                    </div>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <div class="d-flex flex-row flex-nowrap align-items-center gap-4 py-3 border-bottom pw-border-stroke">
                      <!--begin::Icon-->
                      <div class="w-50px h-50px rounded-0.25rem pw-bg-neutral-100 d-inline-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-desktop fs-3 pw-text-primary-500"></i>
                      </div>
                      <!--end::Icon-->

                      <!--begin::Content-->
                      <div class="d-flex flex-column">
                        <div class="fs-8 pw-text-neutral-700 fw-bold">2018 Macbook Pro 15-inch</div>
                        <div class="d-flex flex-row flex-nowrap align-items-center gap-5 fs-9 pw-text-neutral-500">
                          <div>Melbourne, Australia</div>
                          <div class="w-6px h-6px rounded-pill pw-bg-neutral-700"></div>
                          <div>22 Jan at 10:40am</div>
                        </div>
                      </div>
                      <!--end::Content-->
                    </div>
                    <!--end::Item-->
                  </div>
                  <!--end::Content-->
                </div>
                <!--end::1-->

                <!--begin::2-->
                <div class="w-100 w-xl-50 p-8 d-inline-flex flex-column gap-10">
                  <!--begin::Header-->
                  <div>
                    <h2 class="font-base fw-bold pw-text-neutral-800 mb-1">Nerede giriş yaptın?</h2>
                    <p class="fs-9 fw-medium pw-text-neutral-600 mb-0">Giriş yaptığın cihazları buradan görüntüleyebilirsin.</p>
                  </div>
                  <!--end::Header-->

                  <!--begin::Content Form-->
                  <form class="d-flex flex-column gap-6">
                    <!--begin::Switcher group-->
                    <div class="d-flex flex-column gap-4">
                      <!--begin::Item-->
                      <div class="d-flex align-items-center justify-content-between gap-4">
                        <label class="form-check-label fs-8 pw-text-neutral-900 fw-medium" for="pw_kullanicilar_mobil_mesajlar">
                          Mesajlar
                        </label>
                        <div class="form-check form-switch form-check-custom form-check-solid">
                          <input class="form-check-input" type="checkbox" value="" id="pw_kullanicilar_mobil_mesajlar" />
                        </div>
                      </div>
                      <!--end::Item-->

                      <!--begin::Item-->
                      <div class="d-flex align-items-center justify-content-between gap-4">
                        <label class="form-check-label fs-8 pw-text-neutral-900 fw-medium" for="pw_kullanicilar_mobil_gelen_evrak">
                          Gelen Evrak
                        </label>
                        <div class="form-check form-switch form-check-custom form-check-solid">
                          <input class="form-check-input" type="checkbox" value="" id="pw_kullanicilar_mobil_gelen_evrak" />
                        </div>
                      </div>
                      <!--end::Item-->

                      <!--begin::Item-->
                      <div class="d-flex align-items-center justify-content-between gap-4">
                        <label class="form-check-label fs-8 pw-text-neutral-900 fw-medium" for="pw_kullanicilar_mobil_abonelikler">
                          Abonelikler
                        </label>
                        <div class="form-check form-switch form-check-custom form-check-solid">
                          <input class="form-check-input" type="checkbox" value="" id="pw_kullanicilar_mobil_abonelikler" />
                        </div>
                      </div>
                      <!--end::Item-->

                      <!--begin::Item-->
                      <div class="d-flex align-items-center justify-content-between gap-4">
                        <label class="form-check-label fs-8 pw-text-neutral-900 fw-medium" for="pw_kullanicilar_mobil_is_akislari">
                          İş Akışları
                        </label>
                        <div class="form-check form-switch form-check-custom form-check-solid">
                          <input class="form-check-input" type="checkbox" value="" id="pw_kullanicilar_mobil_is_akislari" />
                        </div>
                      </div>
                      <!--end::Item-->
                    </div>
                    <!--end::Switcher group-->

                    <!--begin::Divider-->
                    <div class="separator pw-border-stroke"></div>
                    <!--end::Divider-->

                    <!--begin::Form table-->
                    <div class="table-responsive">
                      <table class="table table-borderless align-middle pw-text-neutral-800 fs-8 fw-bold gy-3">
                        <tbody>
                          <!--begin::Row-->
                          <tr>
                            <td>
                              <label for="pw_kullanicilar_mobil_mesaj_baslangici">Masaj Başlangıcı</label>
                            </td>
                            <td>
                              <!--begin::Input group-->
                              <div class="input-group input-group-solid pw-input-group-solid-primary mb-0">
                                <input type="text" class="form-control p-3 fs-9" placeholder="Lorem ipsum dolor si amet " aria-label="Username" aria-describedby="basic-addon1" id="pw_kullanicilar_mobil_mesaj_baslangici" name="pw_kullanicilar_mobil_mesaj_baslangici" />
                                <span class="input-group-text" id="basic-addon1">
                                  <i class="fa-solid fa-clock pw-text-primary-300 fs-4"></i>
                                </span>
                              </div>
                              <!--end::Input group-->
                            </td>
                          </tr>
                          <!--end::Row-->

                          <!--begin::Row-->
                          <tr>
                            <td>
                              <label for="pw_kullanicilar_mobil_mesaj_sonu">Masaj Sonu</label>
                            </td>
                            <td>
                              <!--begin::Input group-->
                              <div class="input-group input-group-solid pw-input-group-solid-primary mb-0">
                                <input type="text" class="form-control p-3 fs-9" placeholder="Lorem ipsum dolor si amet " aria-label="Username" aria-describedby="basic-addon1" id="pw_kullanicilar_mobil_mesaj_sonu" name="pw_kullanicilar_mobil_mesaj_sonu" />
                                <span class="input-group-text" id="basic-addon1">
                                  <i class="fa-solid fa-clock pw-text-primary-300 fs-4"></i>
                                </span>
                              </div>
                              <!--end::Input group-->
                            </td>
                          </tr>
                          <!--end::Row-->
                        </tbody>
                      </table>
                    </div>
                    <!--end::Form table-->

                    <!--begin::Form footer-->
                    <div class="d-flex align-items-center justify-content-end gap-3">
                      <button type="reset" class="btn btn-active-light fs-8 py-3 px-6">
                        Vazgeç
                      </button>
                      <button type="submit" class="btn btn-primary fs-8 py-3 px-6">
                        Kaydet
                      </button>
                    </div>
                    <!--end::Form footer-->
                  </form>
                  <!--end::Content Form-->
                </div>
                <!--end::2-->
              </div>
            </div>
            <!--end::Mobil content-->

            <!--begin::Vekalet content-->
            <div class="tab-pane fade" id="pw_tab_pane_vekalet" role="tabpanel">
              <div class="d-flex flex-column gap-10">
                <!--begin::Header-->
                <div>
                  <h2 class="font-base fw-bold pw-text-neutral-800 mb-1">Vekalet</h2>
                  <p class="fs-9 fw-medium pw-text-neutral-600 mb-0">Vekalet tanımlamalarını buradan görüntüleyebilirsin.</p>
                </div>
                <!--end::Header-->

                <!--begin::Form table-->
                <div class="col col-lg-9">
                  <div class="table-responsive">
                    <table class="table table-borderless align-middle fs-8 pw-text-neutral-800 fw-bold">
                      <tbody>
                        <!--begin::Row-->
                        <tr>
                          <td>
                            <label for="pw_kullanicilar_vekalet_is_akisi">İş Akışı</label>
                          </td>
                          <td>
                            <select class="form-select form-select-solid pw-form-select-primary p-3 fs-9 pw-text-neutral-700" data-control="select2" data-placeholder="Seçim yapın" data-hide-search="true" id="pw_kullanicilar_vekalet_is_akisi" name="pw_kullanicilar_vekalet_is_akisi" required>
                              <option></option>
                              <option value="1" selected>Fatura 1</option>
                            </select>
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td>
                            <label for="pw_kullanicilar_vekalet_vekalet_veren">Vekalet Veren</label>
                          </td>
                          <td>
                            <select class="form-select form-select-solid pw-form-select-primary p-3 fs-9 pw-text-neutral-700" data-control="select2" data-placeholder="Seçim yapın" data-hide-search="true" id="pw_kullanicilar_vekalet_vekalet_veren" name="pw_kullanicilar_vekalet_vekalet_veren" required>
                              <option></option>
                              <option value="1" selected>Fatura 1</option>
                            </select>
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td>
                            <label for="pw_kullanicilar_vekalet_baslangic_tarihi">Başlangıç Tarihi</label>
                          </td>
                          <td>
                            <select class="form-select form-select-solid pw-form-select-primary p-3 fs-9 pw-text-neutral-700" data-control="select2" data-placeholder="Seçim yapın" data-hide-search="true" id="pw_kullanicilar_vekalet_baslangic_tarihi" name="pw_kullanicilar_vekalet_baslangic_tarihi">
                              <option selected></option>
                            </select>
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td>
                            <label for="pw_kullanicilar_vekalet_bitis_tarihi">Bitis Tarihi</label>
                          </td>
                          <td>
                            <select class="form-select form-select-solid pw-form-select-primary p-3 fs-9 pw-text-neutral-700" data-control="select2" data-placeholder="Seçim yapın" data-hide-search="true" id="pw_kullanicilar_vekalet_bitis_tarihi" name="pw_kullanicilar_vekalet_bitis_tarihi">
                              <option selected></option>
                            </select>
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td>
                            <label for="pw_kullanicilar_vekalet_aciklama">Açıklama</label>
                          </td>
                          <td>
                            <textarea class="form-control form-control-solid pw-form-control-primary p-3 fs-9 pw-text-neutral-700" row="3" data-kt-autosize="true" id="pw_kullanicilar_vekalet_aciklama" name="pw_kullanicilar_vekalet_aciklama"></textarea>
                          </td>
                        </tr>
                        <!--end::Row-->
                      </tbody>
                    </table>
                  </div>
                </div>
                <!--end::Form table-->

                <!--begin::Vekalet table-->
                <div class="table-responsive">
                  <table class="table table-row-bordered align-middle table-r ow-stroke gy-5 fw-bold fs-8 text-gray-700">
                    <thead>
                      <tr class="fw-bold fs-8 text-gray-500 align-middle">
                        <th>
                          <div class="form-check form-check-solid d-flex align-items-center gap-4 mb-0">
                            <input class="form-check-input rounded-0.20rem w-20px h-20px float-none" type="checkbox" value="" id="vekalet_akis_adi" data-pw-check-all="true">
                            <label class="form-check-label pw-text-neutral-500 fs-8 fw-bold" for="vekalet_akis_adi">
                              Akış Adı
                            </label>
                          </div>
                        </th>
                        <th>Vekalet Verilen</th>
                        <th>Vekaleti Kaybeden</th>
                        <th>Vekaleti Veren</th>
                        <th>
                          <button class="btn d-flex flex-row flex-nowrap gap-2 fs-8 p-0 pw-text-primary-500">
                            Başlangıç Tarihi
                            <span>
                              <i class="fa-solid fa-chevron-down fs-9 pw-text-neutral-600"></i>
                            </span>
                          </button>
                        </th>
                        <th>
                          <button class="btn d-flex flex-row flex-nowrap gap-2 fs-8 p-0 pw-text-primary-500">
                            Bitiş Tarihi
                            <span>
                              <i class="fa-solid fa-chevron-down fs-9 pw-text-neutral-600"></i>
                            </span>
                          </button>
                        </th>
                        <th class="fw-normal">Açıklama</th>
                        <th>
                          <a href="/tanimlamalar/kullanicilar/#" class="btn btn-icon pw-btn-bg-primary-100 btn-text-primary pw-btn-hover-bg-primary-200 w-30px h-30px rounded-0.5">
                            <i class="fa-solid fa-trash fs-7 text-primary"></i>
                          </a>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <!--begin::Row-->
                      <tr>
                        <td>
                          <div class="form-check form-check-solid d-flex align-items-center gap-4 mb-0">
                            <input class="form-check-input rounded-0.20rem w-20px h-20px float-none" type="checkbox" value="" id="pw_kullanicilar_vekalet_table_row_1" data-pw-check-all-target="#vekalet_akis_adi">
                            <label class="form-check-label pw-text-neutral-700 fw-bold fs-8" for="pw_kullanicilar_vekalet_table_row_1">
                              Akış 1
                            </label>
                          </div>
                        </td>
                        <td>Pelin Acar</td>
                        <td>Helin Gündüz</td>
                        <td>Murat Gece</td>
                        <td class="pw-text-primary-500">05/28/2020</td>
                        <td class="pw-text-primary-500">06/20/2021</td>
                        <td class="fw-normal pw-text-neutral-600">Lorem ipsum dolor</td>
                        <td>
                          <a href="/tanimlamalar/kullanicilar/#" class="btn btn-icon pw-btn-bg-primary-100 btn-text-primary pw-btn-hover-bg-primary-200 w-30px h-30px rounded-0.5">
                            <i class="fa-solid fa-trash fs-7 text-primary"></i>
                          </a>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td>
                          <div class="form-check form-check-solid d-flex align-items-center gap-4 mb-0">
                            <input class="form-check-input rounded-0.20rem w-20px h-20px float-none" type="checkbox" value="" id="pw_kullanicilar_vekalet_table_row_1" data-pw-check-all-target="#vekalet_akis_adi">
                            <label class="form-check-label pw-text-neutral-700 fw-bold fs-8" for="pw_kullanicilar_vekalet_table_row_1">
                              Akış 2
                            </label>
                          </div>
                        </td>
                        <td>Pelin Acar</td>
                        <td>Helin Gündüz</td>
                        <td>Murat Gece</td>
                        <td class="pw-text-primary-500">05/28/2020</td>
                        <td class="pw-text-primary-500">06/20/2021</td>
                        <td class="fw-normal pw-text-neutral-600">Lorem ipsum dolor</td>
                        <td>
                          <a href="/tanimlamalar/kullanicilar/#" class="btn btn-icon pw-btn-bg-primary-100 btn-text-primary pw-btn-hover-bg-primary-200 w-30px h-30px rounded-0.5">
                            <i class="fa-solid fa-trash fs-7 text-primary"></i>
                          </a>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td>
                          <div class="form-check form-check-solid d-flex align-items-center gap-4 mb-0">
                            <input class="form-check-input rounded-0.20rem w-20px h-20px float-none" type="checkbox" value="" id="pw_kullanicilar_vekalet_table_row_1" data-pw-check-all-target="#vekalet_akis_adi">
                            <label class="form-check-label pw-text-neutral-700 fw-bold fs-8" for="pw_kullanicilar_vekalet_table_row_1">
                              Akış 3
                            </label>
                          </div>
                        </td>
                        <td>Pelin Acar</td>
                        <td>Helin Gündüz</td>
                        <td>Murat Gece</td>
                        <td class="pw-text-primary-500">05/28/2020</td>
                        <td class="pw-text-primary-500">06/20/2021</td>
                        <td class="fw-normal pw-text-neutral-600">Lorem ipsum dolor</td>
                        <td>
                          <a href="/tanimlamalar/kullanicilar/#" class="btn btn-icon pw-btn-bg-primary-100 btn-text-primary pw-btn-hover-bg-primary-200 w-30px h-30px rounded-0.5">
                            <i class="fa-solid fa-trash fs-7 text-primary"></i>
                          </a>
                        </td>
                      </tr>
                      <!--end::Row-->
                    </tbody>
                  </table>
                </div>
                <!--end::Vekalet table-->
              </div>
            </div>
            <!--end::Vekalet content-->
          </div>
          <!--end::Nav contents-->
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

<script>
  window.addEventListener('DOMContentLoaded', () => {
    // Format options
    var optionFormat = function(item) {
      if (!item.id) {
        return item.text;
      }

      var span = document.createElement('span');
      var imgUrl = item.element.getAttribute('data-kt-select2-country');
      var template = '';

      template += '<img src="' + imgUrl + '" class="rounded-circle h-20px me-2" alt="image"/>';
      template += item.text;

      span.innerHTML = template;

      return $(span);
    }

    // Init Select2 --- more info: https://select2.org/
    $('#pw_kullanicilar_dil').select2({
      templateSelection: optionFormat,
      templateResult: optionFormat
    });
  })
</script>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/foot.php'; ?>