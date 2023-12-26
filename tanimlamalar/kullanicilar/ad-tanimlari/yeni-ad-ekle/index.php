<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/header.php'; ?>

<!--begin::Wrapper-->
<div class="app-wrapper flex-column flex-row-fluid p-6" id="kt_app_wrapper">

  <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/sidebar.php'; ?>
  <!--begin::Main-->
  <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <!--begin::Content wrapper-->
    <div class="row">
      <div class="col col-md-8">
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
                <li class="breadcrumb-item text-muted">
                  <a href="/tanimlamalar/kullanicilar/ad-tanimlari/" class="text-muted text-hover-primary">AD Tanımları</a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                  <span class="text-muted">/</span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item active">Yeni Ekle</li>
                <!--end::Item-->
              </ul>
              <!--end::Breadcrumb-->
              <!--begin::Title-->
              <h1 class="page-heading d-flex text-dark fw-bold fs-4 flex-column justify-content-center my-0">
                Yeni AD Ekle
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
          <!--begin::Nav wrapper-->
          <div class="table-reponsive overflow-x-auto">
            <!--begin::nav tabs-->
            <ul class="nav nav-tabs nav-line-tabs fs-6">
              <!--begin::Nav item-->
              <li class="nav-item">
                <a class="nav-link mx-0 py-3 px-10 fs-base rounded-0 active fw-medium" data-bs-toggle="tab" href="#pw_tab_pane_detaylar">Detaylar</a>
              </li>
              <!--end::Nav item-->

              <!--begin::Nav item-->
              <li class="nav-item">
                <a class="nav-link py-3 px-10 mx-0 fs-base fw-medium rounded-0 pw-text-neutral-500" data-bs-toggle="tab" href="#pw_tab_pane_ke">Kullanıcı Eşleştirme</a>
              </li>
              <!--end::Nav item-->

              <!--begin::Nav item-->
              <li class="nav-item">
                <a class="nav-link py-3 px-10 mx-0 fs-base fw-medium rounded-0 pw-text-neutral-500" data-bs-toggle="tab" href="#pw_tab_pane_gruplar">Gruplar</a>
              </li>
              <!--end::Nav item-->

              <!--begin::Nav item-->
              <li class="nav-item">
                <a class="nav-link py-3 px-10 mx-0 fs-base fw-medium rounded-0 pw-text-neutral-500" data-bs-toggle="tab" href="#pw_tab_pane_metodlar">Metodlar</a>
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
          <div class="tab-content pw-dashboard-tab-content mt-6" id="yeniAdEkleTabs">
            <!--begin::Detaylar content-->
            <div class="tab-pane fade show active" id="pw_tab_pane_detaylar" role="tabpanel">
              <!--begin::Form-->
              <form>
                <div class="d-flex flex-column gap-5">
                  <div class="d-inline-block">
                    <a href="/tanimlamalar/kullanicilar/ad-tanimlari/yeni-ad-ekle/#" class="btn btn-outline btn-outline-primary btn-active-light-primary px-4 py-2 fs-9">
                      <i class="fa-solid fa-play"></i>
                      Çalıştır
                    </a>
                  </div>
                  <!--begin::Table-->
                  <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                    <table class="table w-min-content w-100 align-middle gy-5 gx-4">
                      <tbody>
                        <!--begin::Row-->
                        <tr>
                          <td>
                            <label class="form-label fs-base" for="pw_ad_tanimi_adi">Adı</label>
                          </td>
                          <td>
                            <input class="form-control fs-8 py-3 px-4" id="pw_ad_tanimi_adi" name="pw_ad_tanimi_adi" required="required" />
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td>
                            <label class="form-label fs-base" for="pw_ad_tanimi_domain">Domain</label>
                          </td>
                          <td>
                            <div class="d-flex flex-row flex-nowrap align-items-center gap-4">
                              <input class="form-control fs-8 py-3 px-4" id="pw_ad_tanimi_domain" name="pw_ad_tanimi_domain" required="required" />
                              <!--begin::Button group-->
                              <div class="d-flex flex-row flex-nowrap align-items-center gap-2">
                                <a href="/tanimlamalar/kullanicilar/ad-tanimlari/yeni-ad-ekle/#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                                  <i class="fa-solid fa-plus fs-7 text-primary"></i>
                                </a>
                                <a href="/tanimlamalar/kullanicilar/ad-tanimlari/yeni-ad-ekle/#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                                  <i class="fa-solid fa-pen-to-square fs-7 text-primary"></i>
                                </a>
                                <a href="/tanimlamalar/kullanicilar/ad-tanimlari/yeni-ad-ekle/#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                                  <i class="fa-solid fa-trash fs-7 text-primary"></i>
                                </a>
                                <a href="/tanimlamalar/kullanicilar/ad-tanimlari/yeni-ad-ekle/#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                                  <i class="fa-solid fa-play fs-7 text-primary"></i>
                                </a>
                              </div>
                              <!--end::Button group-->
                            </div>
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td>
                            <label class="form-label fs-base" for="pw_ad_tanimi_grup_aktarimi">Grup Aktarımı</label>
                          </td>
                          <td>
                            <input class="form-control fs-8 py-3 px-4" id="pw_ad_tanimi_grup_aktarimi" name="pw_ad_tanimi_grup_aktarimi" value="Fatura-1" required="required" />
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td>
                            <label class="form-label fs-base" for="pw_ad_tanimi_durumu">Durumu</label>
                          </td>
                          <td>
                            <div class="form-check form-switch form-check-custom form-check-solid">
                              <input class="form-check-input" type="checkbox" value="" id="flexSwitchDefault" />
                            </div>
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td>
                            <label class="form-label fs-base" for="pw_ad_yenileme_sikligi">Yenileme Sıklığı</label>
                          </td>
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
            <!--end::Detaylar content-->

            <!--begin::Kullanıcı Eşleştirme content-->
            <div class="tab-pane fade" id="pw_tab_pane_ke" role="tabpanel">
              <!--begin::Form-->
              <form>
                <!--begin::Table-->
                <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                  <table class="table w-min-content w-100 gy-5 gx-4">
                    <tbody>
                      <!--begin::Row-->
                      <tr>
                        <td class="w-225px">
                          <label class="form-label fs-base" for="pw_ad_tanimi_kullanici_adi">Kullanıcı Adı</label>
                        </td>
                        <td>
                          <select id="pw_ad_tanimi_kullanici_adi" class="form-select px-4 py-3 fs-8 pw-text-neutral-500" data-control="select2" data-placeholder="Seçim yapın">
                            <option></option>
                            <option>displayname</option>
                            <option>homephone</option>
                            <option>msrtcsip-userenabled</option>
                            <option>msexchmobilemailboxflags</option>
                            <option>logoncount</option>
                            <option>msexcharchivewarnquota</option>
                            <option>objectguid</option>
                          </select>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td class="w-225px">
                          <label class="form-label fs-base" for="pw_ad_tanimi_giris_adi">Giriş Adı</label>
                        </td>
                        <td>
                          <select id="pw_ad_tanimi_giris_adi" class="form-select px-4 py-3 fs-8 pw-text-neutral-500" data-control="select2" data-placeholder="Seçim yapın">
                            <option></option>
                            <option>displayname</option>
                            <option>homephone</option>
                            <option>msrtcsip-userenabled</option>
                            <option>msexchmobilemailboxflags</option>
                            <option>logoncount</option>
                            <option>msexcharchivewarnquota</option>
                            <option>objectguid</option>
                          </select>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td class="w-225px">
                          <label class="form-label fs-base" for="pw_ad_tanimi_elektronik_posta">Elektronik Posta</label>
                        </td>
                        <td>
                          <select id="pw_ad_tanimi_elektronik_posta" class="form-select px-4 py-3 fs-8 pw-text-neutral-500" data-control="select2" data-placeholder="Seçim yapın">
                            <option></option>
                            <option>displayname</option>
                            <option>homephone</option>
                            <option>msrtcsip-userenabled</option>
                            <option>msexchmobilemailboxflags</option>
                            <option>logoncount</option>
                            <option>msexcharchivewarnquota</option>
                            <option>objectguid</option>
                          </select>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td class="w-225px">
                          <label class="form-label fs-base" for="pw_ad_tanimi_statu">Statü</label>
                        </td>
                        <td>
                          <select id="pw_ad_tanimi_statu" class="form-select px-4 py-3 fs-8 pw-text-neutral-500" data-control="select2" data-placeholder="Seçim yapın">
                            <option></option>
                            <option>displayname</option>
                            <option>homephone</option>
                            <option>msrtcsip-userenabled</option>
                            <option>msexchmobilemailboxflags</option>
                            <option>logoncount</option>
                            <option>msexcharchivewarnquota</option>
                            <option>objectguid</option>
                          </select>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td class="w-225px">
                          <label class="form-label fs-base" for="pw_ad_tanimi_aciklama">Açıklama</label>
                        </td>
                        <td>
                          <select id="pw_ad_tanimi_aciklama" class="form-select px-4 py-3 fs-8 pw-text-neutral-500" data-control="select2" data-placeholder="Seçim yapın">
                            <option></option>
                            <option>displayname</option>
                            <option>homephone</option>
                            <option>msrtcsip-userenabled</option>
                            <option>msexchmobilemailboxflags</option>
                            <option>logoncount</option>
                            <option>msexcharchivewarnquota</option>
                            <option>objectguid</option>
                          </select>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td class="w-225px">
                          <label class="form-label fs-base" for="pw_ad_tanimi_unvan">Ünvan</label>
                        </td>
                        <td>
                          <select id="pw_ad_tanimi_unvan" class="form-select px-4 py-3 fs-8 pw-text-neutral-500" data-control="select2" data-placeholder="Seçim yapın">
                            <option></option>
                            <option>displayname</option>
                            <option>homephone</option>
                            <option>msrtcsip-userenabled</option>
                            <option>msexchmobilemailboxflags</option>
                            <option>logoncount</option>
                            <option>msexcharchivewarnquota</option>
                            <option>objectguid</option>
                          </select>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td class="w-225px">
                          <label class="form-label fs-base" for="pw_ad_tanimi_pozisyon">Pozisyon</label>
                        </td>
                        <td>
                          <select id="pw_ad_tanimi_pozisyon" class="form-select px-4 py-3 fs-8 pw-text-neutral-500" data-control="select2" data-placeholder="Seçim yapın">
                            <option></option>
                            <option>displayname</option>
                            <option>homephone</option>
                            <option>msrtcsip-userenabled</option>
                            <option>msexchmobilemailboxflags</option>
                            <option>logoncount</option>
                            <option>msexcharchivewarnquota</option>
                            <option>objectguid</option>
                          </select>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td class="w-225px">
                          <label class="form-label fs-base" for="pw_ad_tanimi_varsayilan_dil">Varsayılan Dil</label>
                        </td>
                        <td>
                          <select id="pw_ad_tanimi_varsayilan_dil" class="form-select px-4 py-3 fs-8 pw-text-neutral-500" data-control="select2" data-placeholder="Seçim yapın">
                            <option></option>
                            <option>displayname</option>
                            <option>homephone</option>
                            <option>msrtcsip-userenabled</option>
                            <option>msexchmobilemailboxflags</option>
                            <option>logoncount</option>
                            <option>msexcharchivewarnquota</option>
                            <option>objectguid</option>
                          </select>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td class="w-225px">
                          <label class="form-label fs-base" for="pw_ad_tanimi_gsm_no">GSM No</label>
                        </td>
                        <td>
                          <select id="pw_ad_tanimi_gsm_no" class="form-select px-4 py-3 fs-8 pw-text-neutral-500" data-control="select2" data-placeholder="Seçim yapın">
                            <option></option>
                            <option>displayname</option>
                            <option>homephone</option>
                            <option>msrtcsip-userenabled</option>
                            <option>msexchmobilemailboxflags</option>
                            <option>logoncount</option>
                            <option>msexcharchivewarnquota</option>
                            <option>objectguid</option>
                          </select>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td class="w-225px">
                          <label class="form-label fs-base" for="pw_ad_tanimi_sicil_no">Sicil No</label>
                        </td>
                        <td>
                          <select id="pw_ad_tanimi_sicil_no" class="form-select px-4 py-3 fs-8 pw-text-neutral-500" data-control="select2" data-placeholder="Seçim yapın">
                            <option></option>
                            <option>displayname</option>
                            <option>homephone</option>
                            <option>msrtcsip-userenabled</option>
                            <option>msexchmobilemailboxflags</option>
                            <option>logoncount</option>
                            <option>msexcharchivewarnquota</option>
                            <option>objectguid</option>
                          </select>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td class="w-225px">
                          <label class="form-label fs-base" for="pw_ad_tanimi_departman">Departman</label>
                        </td>
                        <td>
                          <select id="pw_ad_tanimi_departman" class="form-select px-4 py-3 fs-8 pw-text-neutral-500" data-control="select2" data-placeholder="Seçim yapın">
                            <option></option>
                            <option>displayname</option>
                            <option>homephone</option>
                            <option>msrtcsip-userenabled</option>
                            <option>msexchmobilemailboxflags</option>
                            <option>logoncount</option>
                            <option>msexcharchivewarnquota</option>
                            <option>objectguid</option>
                          </select>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td class="w-225px">
                          <label class="form-label fs-base" for="pw_ad_tanimi_masraf_kodu">Masraf Kodu</label>
                        </td>
                        <td>
                          <select id="pw_ad_tanimi_masraf_kodu" class="form-select px-4 py-3 fs-8 pw-text-neutral-500" data-control="select2" data-placeholder="Seçim yapın">
                            <option></option>
                            <option>displayname</option>
                            <option>homephone</option>
                            <option>msrtcsip-userenabled</option>
                            <option>msexchmobilemailboxflags</option>
                            <option>logoncount</option>
                            <option>msexcharchivewarnquota</option>
                            <option>objectguid</option>
                          </select>
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
              </form>
              <!--end::Form-->
            </div>
            <!--end::Kullanıcı Eşleştirme content-->

            <!--begin::Gruplar content-->
            <div class="tab-pane fade" id="pw_tab_pane_gruplar" role="tabpanel">
              <!--begin::Form-->
              <form>
                <div class="d-flex align-items-center gap-3 px-5 py-3 mb-3 border-bottom pw-border-stroke">
                  <div class="d-inline-flex gap-2 p-2 rounded pw-bg-neutral-100">
                    <i class="fa-solid fa-user-group pw-text-neutral-400"></i>
                    <span class="fs-9 fw-semibold pw-text-neutral-600">18 Grup</span>
                  </div>
                  <div class="d-inline-block">
                    <a href="/tanimlamalar/kullanicilar/ad-tanimlari/yeni-ad-ekle/#" class="btn btn-outline btn-outline-primary btn-active-light-primary px-4 py-2 fs-9">
                      <i class="fa-solid fa-play"></i>
                      Çalıştır
                    </a>
                  </div>
                </div>
                <!--begin::Form Table-->
                <div class="table-responsive overflow-x-auto rounded">
                  <!--begin::Table-Dark-->
                  <table class="table table-row-bordered border pw-dark-bg-table pw-table-border-gray table-rounded align-middle w-max-content min-w-100 gy-2 gx-9 gs-9">
                    <thead>
                      <tr class="fw-semibold fs-8 pw-text-neutral-700 pw-bg-neutral-100">
                        <th class="py-3">
                          <div class="form-check d-flex align-items-center gap-2 mb-0">
                            <input class="form-check-input rounded-0.20rem w-20px h-20px float-none" type="checkbox" value="" id="gruplar_check_all" data-pw-check-all="true">
                            <label class="form-check-label pw-text-neutral-800 fs-8 fw-bold" for="gruplar_check_all">
                              Gruplar
                            </label>
                          </div>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <!--begin::Row-->
                      <tr class="fw-medium pw-text-neutral-700 fs-8">
                        <td>
                          <div class="form-check d-flex align-items-center gap-2 mb-0">
                            <input class="form-check-input rounded-0.20rem w-20px h-20px float-none" type="checkbox" value="" id="row_1" data-pw-check-all-target="#gruplar_check_all" checked>
                            <label class="form-check-label pw-text-neutral-600 fs-8" for="row_1">
                              CN=Mantis Users,OU=CRMUSERS,DC=g-gsoft,DC=com
                            </label>
                          </div>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr class="fw-medium pw-text-neutral-700 fs-8">
                        <td>
                          <div class="form-check d-flex align-items-center gap-2 mb-0">
                            <input class="form-check-input rounded-0.20rem w-20px h-20px float-none" type="checkbox" value="" id="row_2" data-pw-check-all-target="#gruplar_check_all">
                            <label class="form-check-label pw-text-neutral-600 fs-8" for="row_2">
                              CN=Mantis Users,OU=CRMUSERS,DC=g-gsoft,DC=com
                            </label>
                          </div>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr class="fw-medium pw-text-neutral-700 fs-8">
                        <td>
                          <div class="form-check d-flex align-items-center gap-2 mb-0">
                            <input class="form-check-input rounded-0.20rem w-20px h-20px float-none" type="checkbox" value="" id="row_3" data-pw-check-all-target="#gruplar_check_all" checked>
                            <label class="form-check-label pw-text-neutral-600 fs-8" for="row_3">
                              CN=Yazılım Geliştirme,OU=CRMUSERS,DC=g-gsoft,DC=com
                            </label>
                          </div>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr class="fw-medium pw-text-neutral-700 fs-8">
                        <td>
                          <div class="form-check d-flex align-items-center gap-2 mb-0">
                            <input class="form-check-input rounded-0.20rem w-20px h-20px float-none" type="checkbox" value="" data-pw-check-all-target="#gruplar_check_all" id="row_4">
                            <label class="form-check-label pw-text-neutral-600 fs-8" for="row_4">
                              CN=Mantis Users,OU=CRMUSERS,DC=g-gsoft,DC=com
                            </label>
                          </div>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr class="fw-medium pw-text-neutral-700 fs-8">
                        <td>
                          <div class="form-check d-flex align-items-center gap-2 mb-0">
                            <input class="form-check-input rounded-0.20rem w-20px h-20px float-none" type="checkbox" value="" data-pw-check-all-target="#gruplar_check_all" id="row_5">
                            <label class="form-check-label pw-text-neutral-600 fs-8" for="row_5">
                              CN=Yazılım Geliştirme,OU=CRMUSERS,DC=g-gsoft,DC=com
                            </label>
                          </div>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr class="fw-medium pw-text-neutral-700 fs-8">
                        <td>
                          <div class="form-check d-flex align-items-center gap-2 mb-0">
                            <input class="form-check-input rounded-0.20rem w-20px h-20px float-none" type="checkbox" value="" data-pw-check-all-target="#gruplar_check_all" id="row_6">
                            <label class="form-check-label pw-text-neutral-600 fs-8" for="row_6">
                              CN=Yazılım Geliştirme,OU=CRMUSERS,DC=g-gsoft,DC=com
                            </label>
                          </div>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr class="fw-medium pw-text-neutral-700 fs-8">
                        <td>
                          <div class="form-check d-flex align-items-center gap-2 mb-0">
                            <input class="form-check-input rounded-0.20rem w-20px h-20px float-none" type="checkbox" value="" data-pw-check-all-target="#gruplar_check_all" id="row_7" checked>
                            <label class="form-check-label pw-text-neutral-600 fs-8" for="row_7">
                              CN=Mantis Users,OU=CRMUSERS,DC=g-gsoft,DC=com
                            </label>
                          </div>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr class="fw-medium pw-text-neutral-700 fs-8">
                        <td>
                          <div class="form-check d-flex align-items-center gap-2 mb-0">
                            <input class="form-check-input rounded-0.20rem w-20px h-20px float-none" type="checkbox" value="" data-pw-check-all-target="#gruplar_check_all" id="row_8" checked>
                            <label class="form-check-label pw-text-neutral-600 fs-8" for="row_8">
                              CN=Mantis Users,OU=CRMUSERS,DC=g-gsoft,DC=com
                            </label>
                          </div>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr class="fw-medium pw-text-neutral-700 fs-8">
                        <td>
                          <div class="form-check d-flex align-items-center gap-2 mb-0">
                            <input class="form-check-input rounded-0.20rem w-20px h-20px float-none" type="checkbox" value="" data-pw-check-all-target="#gruplar_check_all" id="row_9" checked>
                            <label class="form-check-label pw-text-neutral-600 fs-8" for="row_9">
                              CN=Mantis Users,OU=CRMUSERS,DC=g-gsoft,DC=com
                            </label>
                          </div>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr class="fw-medium pw-text-neutral-700 fs-8">
                        <td>
                          <div class="form-check d-flex align-items-center gap-2 mb-0">
                            <input class="form-check-input rounded-0.20rem w-20px h-20px float-none" type="checkbox" value="" data-pw-check-all-target="#gruplar_check_all" id="row_10">
                            <label class="form-check-label pw-text-neutral-600 fs-8" for="row_10">
                              CN=Yazılım Geliştirme,OU=CRMUSERS,DC=g-gsoft,DC=com
                            </label>
                          </div>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr class="fw-medium pw-text-neutral-700 fs-8">
                        <td>
                          <div class="form-check d-flex align-items-center gap-2 mb-0">
                            <input class="form-check-input rounded-0.20rem w-20px h-20px float-none" type="checkbox" value="" data-pw-check-all-target="#gruplar_check_all" id="row_11">
                            <label class="form-check-label pw-text-neutral-600 fs-8" for="row_11">
                              CN=Yazılım Geliştirme,OU=CRMUSERS,DC=g-gsoft,DC=com
                            </label>
                          </div>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr class="fw-medium pw-text-neutral-700 fs-8">
                        <td>
                          <div class="form-check d-flex align-items-center gap-2 mb-0">
                            <input class="form-check-input rounded-0.20rem w-20px h-20px float-none" type="checkbox" value="" data-pw-check-all-target="#gruplar_check_all" id="row_12" checked>
                            <label class="form-check-label pw-text-neutral-600 fs-8" for="row_12">
                              CN=Mantis Users,OU=CRMUSERS,DC=g-gsoft,DC=com
                            </label>
                          </div>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr class="fw-medium pw-text-neutral-700 fs-8">
                        <td>
                          <div class="form-check d-flex align-items-center gap-2 mb-0">
                            <input class="form-check-input rounded-0.20rem w-20px h-20px float-none" type="checkbox" value="" data-pw-check-all-target="#gruplar_check_all" id="row_13" checked>
                            <label class="form-check-label pw-text-neutral-600 fs-8" for="row_13">
                              CN=Mantis Users,OU=CRMUSERS,DC=g-gsoft,DC=com
                            </label>
                          </div>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr class="fw-medium pw-text-neutral-700 fs-8">
                        <td>
                          <div class="form-check d-flex align-items-center gap-2 mb-0">
                            <input class="form-check-input rounded-0.20rem w-20px h-20px float-none" type="checkbox" value="" data-pw-check-all-target="#gruplar_check_all" id="row_14" checked>
                            <label class="form-check-label pw-text-neutral-600 fs-8" for="row_14">
                              CN=Mantis Users,OU=CRMUSERS,DC=g-gsoft,DC=com
                            </label>
                          </div>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr class="fw-medium pw-text-neutral-700 fs-8">
                        <td>
                          <div class="form-check d-flex align-items-center gap-2 mb-0">
                            <input class="form-check-input rounded-0.20rem w-20px h-20px float-none" type="checkbox" value="" data-pw-check-all-target="#gruplar_check_all" id="row_15" checked>
                            <label class="form-check-label pw-text-neutral-600 fs-8" for="row_15">
                              CN=Mantis Users,OU=CRMUSERS,DC=g-gsoft,DC=com
                            </label>
                          </div>
                        </td>
                      </tr>
                      <!--end::Row-->
                    </tbody>
                  </table>
                  <!--end::Table-Dark-->
                </div>
                <!--end::Form Table-->


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
              <!--end::Form-->
            </div>
            <!--end::Gruplar content-->

            <!--begin::Metodlar content-->
            <div class="tab-pane fade" id="pw_tab_pane_metodlar" role="tabpanel">
              <!--begin::Nav wrapper-->
              <div class="table-reponsive overflow-x-auto">
                <!--begin::nav tabs-->
                <ul class="nav nav-tabs pw-dashboard-nav-tabs nav-line-tabs fs-6">
                  <!--begin::Nav item-->
                  <li class="nav-item">
                    <a class="nav-link mx-0 py-3 px-10 fs-base rounded-0 active fw-medium" data-bs-toggle="tab" href="#pw_tab_pane_metodlar_transfer_oncesi">Transfer Öncesi</a>
                  </li>
                  <!--end::Nav item-->

                  <!--begin::Nav item-->
                  <li class="nav-item">
                    <a class="nav-link mx-0 py-3 px-10 fs-base rounded-0 fw-text-neutral-500" data-bs-toggle="tab" href="#pw_tab_pane_metodlar_transfer_sonrasi">Transfer Sonrası</a>
                  </li>
                  <!--end::Nav item-->

                  <!--begin::Nav item-->
                  <li class="nav-item">
                    <a class="nav-link mx-0 py-3 px-10 fs-base rounded-0 fw-text-neutral-500" data-bs-toggle="tab" href="#pw_tab_pane_metodlar_tedarikciler">Tedarikçiler</a>
                  </li>
                  <!--end::Nav item-->
                </ul>
                <!--end::nav tabs-->
              </div>
              <!--end::Nav wrapper-->

              <!--begin::Nav contents-->
              <div class="tab-content pw-dashboard-tab-content mt-6" id="yeniAdEkleMetodlarTabs">
                <!--begin::Transfer öncesi content-->
                <div class="tab-pane fade show active" id="pw_tab_pane_metodlar_transfer_oncesi" role="tabpanel">
                  <!--begin::Form-->
                  <form>
                    <!--begin::Table-->
                    <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                      <table class="table w-min-content w-100 align-middle gy-5 gx-4">
                        <tbody>
                          <!--begin::Row-->
                          <tr>
                            <td>
                              <label class="form-label fs-base" for="pw_ad_tanimi_method_adi">Method Adı</label>
                            </td>
                            <td>
                              <input type="text" class="form-control fs-8 py-3 px-4" id="pw_ad_tanimi_method_adi" name="pw_ad_tanimi_method_adi" required="required" />
                            </td>
                          </tr>
                          <!--end::Row-->

                          <!--begin::Row-->
                          <tr>
                            <td>
                              <label class="form-label fs-base" for="pw_ad_tanimi_methodlar_transfer_oncesi_durumu">Durumu</label>
                            </td>
                            <td>
                              <div class="form-check form-switch form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="" id="pw_ad_tanimi_methodlar_transfer_oncesi_durumu">
                              </div>
                            </td>
                          </tr>
                          <!--end::Row-->

                          <!--begin::Row-->
                          <tr>
                            <td colspan="2">
                              <!--begin::Form Table-->
                              <div class="table-responsive overflow-x-auto rounded">
                                <!--begin::Table-Dark-->
                                <table class="table table-row-bordered border pw-dark-bg-table pw-table-border-gray table-rounded align-middle w-max-content min-w-100 gy-2 gx-9 gs-9">
                                  <thead>
                                    <tr class="fw-semibold fs-8 pw-text-neutral-700 pw-bg-neutral-100">
                                      <th class="py-3">Parametre</th>
                                      <th class="py-3">Değer</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <!--begin::Row-->
                                    <tr class="fw-medium pw-text-neutral-700 fs-8">
                                      <td>
                                        PAPERWORK
                                      </td>
                                      <td>
                                        <input type="text" class="form-control fs-8 py-2 px-4" id="pw_ad_tanimi_method_adi" value="Aaa" name="pw_ad_tanimi_method_adi" required="required" />
                                      </td>
                                    </tr>
                                    <!--end::Row-->

                                    <!--begin::Row-->
                                    <tr class="fw-medium pw-text-neutral-700 fs-8">
                                      <td>
                                        PAPERWORK
                                      </td>
                                      <td>
                                        <input type="text" class="form-control fs-8 py-2 px-4" id="pw_ad_tanimi_method_adi" value="Aaa" name="pw_ad_tanimi_method_adi" required="required" />
                                      </td>
                                    </tr>
                                    <!--end::Row-->

                                    <!--begin::Row-->
                                    <tr class="fw-medium pw-text-neutral-700 fs-8">
                                      <td>
                                        PAPERWORK
                                      </td>
                                      <td>
                                        <input type="text" class="form-control fs-8 py-2 px-4" id="pw_ad_tanimi_method_adi" value="Aaa" name="pw_ad_tanimi_method_adi" required="required" />
                                      </td>
                                    </tr>
                                    <!--end::Row-->

                                    <!--begin::Row-->
                                    <tr class="fw-medium pw-text-neutral-700 fs-8">
                                      <td>
                                        PAPERWORK
                                      </td>
                                      <td>
                                        <input type="text" class="form-control fs-8 py-2 px-4" id="pw_ad_tanimi_method_adi" value="Aaa" name="pw_ad_tanimi_method_adi" required="required" />
                                      </td>
                                    </tr>
                                    <!--end::Row-->

                                    <!--begin::Row-->
                                    <tr class="fw-medium pw-text-neutral-700 fs-8">
                                      <td>
                                        PAPERWORK
                                      </td>
                                      <td>
                                        <input type="text" class="form-control fs-8 py-2 px-4" id="pw_ad_tanimi_method_adi" value="Aaa" name="pw_ad_tanimi_method_adi" required="required" />
                                      </td>
                                    </tr>
                                    <!--end::Row-->
                                  </tbody>
                                </table>
                                <!--end::Table-Dark-->
                              </div>
                              <!--end::Form Table-->
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
                  </form>
                  <!--end::Form-->
                </div>
                <!--end::Transfer öncesi content-->

                <!--begin::Transfer sonrası content-->
                <div class="tab-pane fade" id="pw_tab_pane_metodlar_transfer_sonrasi" role="tabpanel">
                  <!--begin::Form-->
                  <form>
                    <!--begin::Table-->
                    <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                      <table class="table w-min-content w-100 align-middle gy-5 gx-4">
                        <tbody>
                          <!--begin::Row-->
                          <tr>
                            <td>
                              <label class="form-label fs-base" for="pw_ad_tanimi_method_adi">Method Adı</label>
                            </td>
                            <td>
                              <input type="text" class="form-control fs-8 py-3 px-4" id="pw_ad_tanimi_method_adi" name="pw_ad_tanimi_method_adi" required="required" />
                            </td>
                          </tr>
                          <!--end::Row-->

                          <!--begin::Row-->
                          <tr>
                            <td>
                              <label class="form-label fs-base" for="pw_ad_tanimi_methodlar_transfer_oncesi_durumu">Durumu</label>
                            </td>
                            <td>
                              <div class="form-check form-switch form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="" id="pw_ad_tanimi_methodlar_transfer_oncesi_durumu">
                              </div>
                            </td>
                          </tr>
                          <!--end::Row-->

                          <!--begin::Row-->
                          <tr>
                            <td colspan="2">
                              <!--begin::Form Table-->
                              <div class="table-responsive overflow-x-auto rounded">
                                <!--begin::Table-Dark-->
                                <table class="table table-row-bordered border pw-dark-bg-table pw-table-border-gray table-rounded align-middle w-max-content min-w-100 gy-2 gx-9 gs-9">
                                  <thead>
                                    <tr class="fw-semibold fs-8 pw-text-neutral-700 pw-bg-neutral-100">
                                      <th class="py-3">Parametre</th>
                                      <th class="py-3">Değer</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <!--begin::Row-->
                                    <tr class="fw-medium pw-text-neutral-700 fs-8">
                                      <td>
                                        PAPERWORK
                                      </td>
                                      <td>
                                        <input type="text" class="form-control fs-8 py-2 px-4" id="pw_ad_tanimi_method_adi" value="Aaa" name="pw_ad_tanimi_method_adi" required="required" />
                                      </td>
                                    </tr>
                                    <!--end::Row-->

                                    <!--begin::Row-->
                                    <tr class="fw-medium pw-text-neutral-700 fs-8">
                                      <td>
                                        PAPERWORK
                                      </td>
                                      <td>
                                        <input type="text" class="form-control fs-8 py-2 px-4" id="pw_ad_tanimi_method_adi" value="Aaa" name="pw_ad_tanimi_method_adi" required="required" />
                                      </td>
                                    </tr>
                                    <!--end::Row-->

                                    <!--begin::Row-->
                                    <tr class="fw-medium pw-text-neutral-700 fs-8">
                                      <td>
                                        PAPERWORK
                                      </td>
                                      <td>
                                        <input type="text" class="form-control fs-8 py-2 px-4" id="pw_ad_tanimi_method_adi" value="Aaa" name="pw_ad_tanimi_method_adi" required="required" />
                                      </td>
                                    </tr>
                                    <!--end::Row-->

                                    <!--begin::Row-->
                                    <tr class="fw-medium pw-text-neutral-700 fs-8">
                                      <td>
                                        PAPERWORK
                                      </td>
                                      <td>
                                        <input type="text" class="form-control fs-8 py-2 px-4" id="pw_ad_tanimi_method_adi" value="Aaa" name="pw_ad_tanimi_method_adi" required="required" />
                                      </td>
                                    </tr>
                                    <!--end::Row-->

                                    <!--begin::Row-->
                                    <tr class="fw-medium pw-text-neutral-700 fs-8">
                                      <td>
                                        PAPERWORK
                                      </td>
                                      <td>
                                        <input type="text" class="form-control fs-8 py-2 px-4" id="pw_ad_tanimi_method_adi" value="Aaa" name="pw_ad_tanimi_method_adi" required="required" />
                                      </td>
                                    </tr>
                                    <!--end::Row-->
                                  </tbody>
                                </table>
                                <!--end::Table-Dark-->
                              </div>
                              <!--end::Form Table-->
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
                  </form>
                  <!--end::Form-->
                </div>
                <!--end::Transfer sonrası content-->

                <!--begin::Tedarikçiler content-->
                <div class="tab-pane fade" id="pw_tab_pane_metodlar_tedarikciler" role="tabpanel">
                  <!--begin::Form-->
                  <form>
                    <!--begin::Table-->
                    <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                      <table class="table w-min-content w-100 align-middle gy-5 gx-4">
                        <tbody>
                          <!--begin::Row-->
                          <tr>
                            <td>
                              <label class="form-label fs-base" for="pw_ad_tanimi_method_adi">Method Adı</label>
                            </td>
                            <td>
                              <input type="text" class="form-control fs-8 py-3 px-4" id="pw_ad_tanimi_method_adi" name="pw_ad_tanimi_method_adi" required="required" />
                            </td>
                          </tr>
                          <!--end::Row-->

                          <!--begin::Row-->
                          <tr>
                            <td>
                              <label class="form-label fs-base" for="pw_ad_tanimi_methodlar_transfer_oncesi_durumu">Durumu</label>
                            </td>
                            <td>
                              <div class="form-check form-switch form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="" id="pw_ad_tanimi_methodlar_transfer_oncesi_durumu">
                              </div>
                            </td>
                          </tr>
                          <!--end::Row-->

                          <!--begin::Row-->
                          <tr>
                            <td colspan="2">
                              <!--begin::Form Table-->
                              <div class="table-responsive overflow-x-auto rounded">
                                <!--begin::Table-Dark-->
                                <table class="table table-row-bordered border pw-dark-bg-table pw-table-border-gray table-rounded align-middle w-max-content min-w-100 gy-2 gx-9 gs-9">
                                  <thead>
                                    <tr class="fw-semibold fs-8 pw-text-neutral-700 pw-bg-neutral-100">
                                      <th class="py-3">Parametre</th>
                                      <th class="py-3">Değer</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <!--begin::Row-->
                                    <tr class="fw-medium pw-text-neutral-700 fs-8">
                                      <td>
                                        PAPERWORK
                                      </td>
                                      <td>
                                        <input type="text" class="form-control fs-8 py-2 px-4" id="pw_ad_tanimi_method_adi" value="Aaa" name="pw_ad_tanimi_method_adi" required="required" />
                                      </td>
                                    </tr>
                                    <!--end::Row-->

                                    <!--begin::Row-->
                                    <tr class="fw-medium pw-text-neutral-700 fs-8">
                                      <td>
                                        PAPERWORK
                                      </td>
                                      <td>
                                        <input type="text" class="form-control fs-8 py-2 px-4" id="pw_ad_tanimi_method_adi" value="Aaa" name="pw_ad_tanimi_method_adi" required="required" />
                                      </td>
                                    </tr>
                                    <!--end::Row-->

                                    <!--begin::Row-->
                                    <tr class="fw-medium pw-text-neutral-700 fs-8">
                                      <td>
                                        PAPERWORK
                                      </td>
                                      <td>
                                        <input type="text" class="form-control fs-8 py-2 px-4" id="pw_ad_tanimi_method_adi" value="Aaa" name="pw_ad_tanimi_method_adi" required="required" />
                                      </td>
                                    </tr>
                                    <!--end::Row-->

                                    <!--begin::Row-->
                                    <tr class="fw-medium pw-text-neutral-700 fs-8">
                                      <td>
                                        PAPERWORK
                                      </td>
                                      <td>
                                        <input type="text" class="form-control fs-8 py-2 px-4" id="pw_ad_tanimi_method_adi" value="Aaa" name="pw_ad_tanimi_method_adi" required="required" />
                                      </td>
                                    </tr>
                                    <!--end::Row-->

                                    <!--begin::Row-->
                                    <tr class="fw-medium pw-text-neutral-700 fs-8">
                                      <td>
                                        PAPERWORK
                                      </td>
                                      <td>
                                        <input type="text" class="form-control fs-8 py-2 px-4" id="pw_ad_tanimi_method_adi" value="Aaa" name="pw_ad_tanimi_method_adi" required="required" />
                                      </td>
                                    </tr>
                                    <!--end::Row-->
                                  </tbody>
                                </table>
                                <!--end::Table-Dark-->
                              </div>
                              <!--end::Form Table-->
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
                  </form>
                  <!--end::Form-->
                </div>
                <!--end::Tedarikçiler content-->
              </div>
              <!--end::Nav contents-->
            </div>
            <!--end::Metodalar content-->
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

<!--begin::Drawers-->
<!--begin::Filter canvas trigger-->
<div class="position-fixed w-85px end-0 shadow d-flex flex-column align-items-center drawer-header-gap top-160px top-md-280px gap-6 p-6 pw-bg-drawer rounded-start-3">
  <button id="pw_filter_canvas_btn" class="btn btn-text-primary btn-active-text-primary p-0">
    <i class="fa-solid fa-angles-right fs-3 pw-color-current"></i>
  </button>
  <button id="pw_filter_canvas_btn" class="btn btn-active-text-primary p-0">
    <i class="fa-solid fa-filter fs-3 pw-color-current"></i>
  </button>
</div>
<!--end::Filter canvas trigger-->
<!--begin::Filter canvas-->
<div class="shadow drawer-header-gap flex-column rounded-start-3 drawer-on" data-kt-drawer="true" data-kt-drawer-activate="true" data-kt-drawer-toggle="#pw_filter_canvas_btn" data-kt-drawer-overlay="false" data-kt-drawer-width="404px" data-kt-drawer-activate="{default: false, md: true}" data-kt-drawer-close="#pw_filter_drawer_close_btn">
  <div class="d-flex align-items-center justify-content-between gap-2 border-bottom px-10 py-5">
    <h3 class="font-poppins pw-text-neutral-800 fw-bold fs-base mb-0">Filtreler</h3>
    <!--begin::Card toolbar-->
    <div class="card-toolbar">
      <!--begin::Close-->
      <div class="btn btn-sm btn-icon btn-active-light-primary w-30px h-30px" id="pw_filter_drawer_close_btn">
        <i class="fa-solid fa-xmark fs-4"></i>
      </div>
      <!--end::Close-->
    </div>
    <!--end::Card toolbar-->
  </div>
  <!--begin::Filter wrapper-->
  <div class="d-flex flex-column gap-3 px-10 py-5">
    <!--begin::Filter Item-->
    <label class="position-relative btn btn-outline pw-border-neutral-200 p-3 group" for="filter_1" data-pw-check-card="true">
      <!--begin::Filter content-->
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="filter_1">
        <label class="form-check-label fs-8 fw-semibold pw-text-neutral-500 text-start" for="filter_1">
          (|(uid=*csdccsc*)(displayName=*csdc*)(cn=*csdc*)(sn=*csdc*))
        </label>
      </div>
      <!--end::Filter content-->

      <!--begin::Action buttons-->
      <div class="position-absolute d-inline-flex align-items-center gap-4 p-2 bg-white pw-shadow-3 rounded-0.20rem group-hover:visible" style="right: 0.75rem;bottom:0.75rem">
        <button type="button" class="btn btn-icon pw-btn-text-neutral-300 btn-active-text-primary w-15px h-15px">
          <i class="fa-solid fa-trash fs-base pw-color-current"></i>
        </button>
        <button type="button" class="btn btn-icon pw-btn-text-neutral-300 btn-active-text-primary w-15px h-15px">
          <i class="fa-solid fa-pen-to-square fs-base pw-color-current"></i>
        </button>
        <button type="button" class="btn btn-icon pw-btn-text-neutral-300 btn-active-text-primary w-15px h-15px">
          <i class="fa-solid fa-copy fs-base pw-color-current"></i>
        </button>
      </div>
      <!--end::Action buttons-->
    </label>
    <!--end::Filter Item-->

    <!--begin::Filter Item-->
    <label class="position-relative btn btn-outline pw-border-neutral-200 p-3 group" for="filter_2" data-pw-check-card="true">
      <!--begin::Filter content-->
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="filter_2">
        <label class="form-check-label fs-8 fw-semibold pw-text-neutral-500 text-start" for="filter_2">
          (|(uid=*csdc*)(displayName=*csdc*)(cn=*csdc*)(sn=*csdc*))(&(objectClass=user)(objectCategory=person)(|(uid=*csdc*)(displayName=*csdc*)(cn=*csdc*)(sn=*csdc*)))
        </label>
      </div>
      <!--end::Filter content-->

      <!--begin::Action buttons-->
      <div class="position-absolute d-inline-flex align-items-center gap-4 p-2 bg-white pw-shadow-3 rounded-0.20rem group-hover:visible" style="right: 0.75rem;bottom:0.75rem">
        <button type="button" class="btn btn-icon pw-btn-text-neutral-300 btn-active-text-primary w-15px h-15px">
          <i class="fa-solid fa-trash fs-base pw-color-current"></i>
        </button>
        <button type="button" class="btn btn-icon pw-btn-text-neutral-300 btn-active-text-primary w-15px h-15px">
          <i class="fa-solid fa-pen-to-square fs-base pw-color-current"></i>
        </button>
        <button type="button" class="btn btn-icon pw-btn-text-neutral-300 btn-active-text-primary w-15px h-15px">
          <i class="fa-solid fa-copy fs-base pw-color-current"></i>
        </button>
      </div>
      <!--end::Action buttons-->
    </label>
    <!--end::Filter Item-->

    <!--begin::Add filter-->
    <div class="mt-10">
      <button type="button" class="btn btn-success px-4 py-2 rounded-0.20rem fs-9">
        Filtre Ekle
      </button>
    </div>
    <!--begin::Add filter-->
  </div>
  <!--end::Filter wrapper-->
</div>
<!--end::Filter canvas-->
<!--end::Drawers-->

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/foot.php'; ?>