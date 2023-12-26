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
                <li class="breadcrumb-item active">Ayarlar</li>
                <!--end::Item-->
              </ul>
              <!--end::Breadcrumb-->

              <!--begin::Title-->
              <h1 class="page-heading d-flex text-dark fw-bold fs-4 my-0 gap-2 align-items-center">Ayarlar</h1>
              <!--end::Title-->
            </div>
            <!--end::Page title-->
          </div>
          <!--end::Toolbar container-->
        </div>
        <!--end::Toolbar-->

        <!--begin::Content -->
        <div class="mb-20">
            <div class="row">
                <div class="col col-md-4 col-lg-4">
                    <div class="row border-lg-end pw-border-stroke pt-5 pb-20 px-3">
                        <div class="ps-10 border-bottom pw-border-stroke">
                            <!--begin::User info-->
                            <div class="d-flex flex-row align-items-center gap-4">
                                <div class="symbol symbol-125px rounded-3">
                                    <img class="w-125px h-125px rounded-3" src="/assets/media/general/Blank.png" width="125" height="125" alt="Blank profile picture">
                                </div>
                                <div class="d-flex flex-column gap-5">
                                    <div class="d-flex align-items-center flex-row gap-4">
                                        <div class="font-poppins pw-text-neutral-700 fs-4 fw-bold">Owl GGsoft</div>
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
                            <div class="my-7">
                                <button type="button" class="btn btn-primary fs-8 py-3 px-4 me-2">Fotoğrafı Değiştir</button>
                                <button type="button" class="btn btn-outline btn-outline-primary fs-8 py-3 px-4">Şifreyi Değiştir</button>
                            </div>
                            <!--end::Actions-->
                        </div>

                        <!--begin::Tabs-->
                        <ul id="pw-issd-tabs" class="nav nav-tabs flex-row flex-md-column mb-6 mb-lg-0 border-0 pe-0">
                            <!--begin::Nav item-->
                            <li class="nav-item">
                                <a class="nav-link active w-100 btn btn-flex btn-active-light-secondary btn-active-line-hover-primary rounded-0.25rem py-3 px-5" data-bs-toggle="tab" href="#ayarlarGenel">
                                    <div class="form-check mb-0 ps-5">
                                        <label class="form-check-label fs-8 fw-semibold pw-text-neutral-800" for="pw_isdd_kredi_karti">Genel</label>
                                    </div>
                                </a>
                            </li>
                            <!--end::Nav item-->

                            <!--begin::Nav item-->
                            <li class="nav-item">
                                <a class="nav-link w-100 btn btn-flex btn-active-light-secondary btn-active-line-hover-primary rounded-0.25rem py-3 px-5" data-bs-toggle="tab" href="#ayarlarVekalet">
                                    <div class="form-check mb-0 ps-5">
                                        <label class="form-check-label fs-8 fw-semibold pw-text-neutral-800" for="pw_isdd_tarih">Vekalet</label>
                                    </div>
                                </a>
                            </li>
                            <!--end::Nav item-->

                            <!--begin::Nav item-->
                            <li class="nav-item">
                                <a class="nav-link w-100 btn btn-flex btn-active-light-secondary btn-active-line-hover-primary rounded-0.25rem py-3 px-5" data-bs-toggle="tab" href="#ayarlarMobil">
                                    <div class="form-check mb-0 ps-5">
                                        <label class="form-check-label fs-8 fw-semibold pw-text-neutral-800" for="pw_isdd_tarih">Mobil</label>
                                    </div>
                                </a>
                            </li>
                            <!--end::Nav item-->

                            <!--begin::Nav item-->
                            <li class="nav-item">
                                <a class="nav-link w-100 btn btn-flex btn-active-light-secondary btn-active-line-hover-primary rounded-0.25rem py-3 px-5" data-bs-toggle="tab" href="#ayarlarKisayollar">
                                    <div class="form-check mb-0 ps-5">
                                        <label class="form-check-label fs-8 fw-semibold pw-text-neutral-800" for="pw_isdd_tarih">Kısayollar</label>
                                    </div>
                                </a>
                            </li>
                            <!--end::Nav item-->

                            <!--begin::Nav item-->
                            <li class="nav-item">
                                <a class="nav-link w-100 btn btn-flex btn-active-light-secondary btn-active-line-hover-primary rounded-0.25rem py-3 px-5" data-bs-toggle="tab" href="#ayarlarIslerim">
                                    <div class="form-check mb-0 ps-5">
                                        <label class="form-check-label fs-8 fw-semibold pw-text-neutral-800" for="pw_isdd_tarih">İşlerim</label>
                                    </div>
                                </a>
                            </li>
                            <!--end::Nav item-->

                            <!--begin::Nav item-->
                            <li class="nav-item">
                                <a class="nav-link w-100 btn btn-flex btn-active-light-secondary btn-active-line-hover-primary rounded-0.25rem py-3 px-5" data-bs-toggle="tab" href="#ayarlarBelgeler">
                                    <div class="form-check mb-0 ps-5">
                                        <label class="form-check-label fs-8 fw-semibold pw-text-neutral-800" for="pw_isdd_tarih">Belgeler</label>
                                    </div>
                                </a>
                            </li>
                            <!--end::Nav item-->

                            <!--begin::Nav item-->
                            <li class="nav-item">
                                <a class="nav-link w-100 btn btn-flex btn-active-light-secondary btn-active-line-hover-primary rounded-0.25rem py-3 px-5" data-bs-toggle="tab" href="#ayarlarYardim">
                                    <div class="form-check mb-0 ps-5">
                                        <label class="form-check-label fs-8 fw-semibold pw-text-neutral-800" for="pw_isdd_tarih">Yardım</label>
                                    </div>
                                </a>
                            </li>
                            <!--end::Nav item-->

                            <!--begin::Nav item-->
                            <li class="nav-item">
                                <a class="nav-link w-100 btn btn-flex btn-active-light-secondary btn-active-line-hover-primary rounded-0.25rem py-3 px-5" data-bs-toggle="tab" href="#ayarlarLisanslar">
                                    <div class="form-check mb-0 ps-5">
                                        <label class="form-check-label fs-8 fw-semibold pw-text-neutral-800" for="pw_isdd_tarih">Lisanslar</label>
                                    </div>
                                </a>
                            </li>
                            <!--end::Nav item-->

                            <!--begin::Nav item-->
                            <li class="nav-item">
                                <a class="nav-link w-100 btn btn-flex btn-active-light-secondary btn-active-line-hover-primary rounded-0.25rem py-3 px-5" data-bs-toggle="tab" href="#ayarlarHakkinda">
                                    <div class="form-check mb-0 ps-5">
                                        <label class="form-check-label fs-8 fw-semibold pw-text-neutral-800" for="pw_isdd_tarih">Hakkında</label>
                                    </div>
                                </a>
                            </li>
                            <!--end::Nav item-->

                        </ul>
                        <!--end::Tabs-->
                    </div>
                </div>

                <div class="col col-md-8 col-lg-8">
                    <!--begin::Nav contents-->
                    <div class="tab-content pw-dashboard-tab-content px-5 pt-5" id="">
                        <!--begin::Genel content-->
                        <div class="tab-pane fade show active pe-lg-20" id="ayarlarGenel" role="tabpanel">
                            <!--begin::Form-->
                            <form>
                                <div class="d-flex flex-column gap-12">
                                    <div class="d-flex justify-content-between border-bottom pw-border-stroke pb-5">
                                        <h2 class="fw-bold pb-5 fs-base mb-0">Genel</h2>
                                        <button class="btn btn-danger fs-8 px-4 py-3">Tanımları Sıfırla</button>
                                    </div>
                                    
                                    <!--begin::Table-->
                                    <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                                        <table class="table w-min-content w-100 gy-3 gx-4">
                                            <tbody>
                                                <!--begin::Row-->
                                                 <tr>
                                                    <td>
                                                        <label class="form-label fs-8 fw-bold" for="pw_kullanicilar_giris_adi">Giriş Adı</label>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control pw-form-control-neutral fs-8 py-3 px-4" id="pw_kullanicilar_giris_adi" name="pw_kullanicilar_giris_adi" required="required" value="AB976429" />
                                                    </td>
                                                </tr>
                                                <!--end::Row-->

                                                 <!--begin::Row-->
                                                 <tr>
                                                    <td>
                                                        <label class="form-label fs-8 fw-bold" for="pw_kullanicilar_giris_sifre">Son Giriş</label>
                                                    </td>
                                                    <td>
                                                        <input type="password" class="form-control pw-form-control-neutral fs-8 py-3 px-4" id="pw_kullanicilar_giris_sifre" name="pw_kullanicilar_giris_sifre" required="required" value="AB976429" />
                                                    </td>
                                                </tr>
                                                <!--end::Row-->

                                                <!--begin::Row-->
                                                <tr>
                                                    <td>
                                                        <label class="form-label fs-8 fw-bold" for="pw_kullanicilar_giris_e_posta">E-posta</label>
                                                    </td>
                                                    <td>
                                                        <input type="email" class="form-control pw-form-control-neutral fs-8 py-3 px-4" id="pw_kullanicilar_giris_e_posta" name="pw_kullanicilar_giris_e_posta" required="required" value="Aegtdrgrsfsikpgob@gmail.com" />
                                                    </td>
                                                </tr>
                                                <!--end::Row-->

                                                <!--begin::Row-->
                                                <tr>
                                                    <td>
                                                        <label class="form-label fs-8 fw-bold" for="pw_kullanicilar_giris_unvan">Ünvan</label>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control pw-form-control-neutral fs-8 py-3 px-4" id="pw_kullanicilar_giris_unvan" name="pw_kullanicilar_giris_unvan" required="required" value="YÖNETİCİ" />
                                                    </td>
                                                </tr>
                                                <!--end::Row-->

                                                <!--begin::Row-->
                                                <tr>
                                                    <td>
                                                        <label class="form-label fs-8 fw-bold" for="pw_kullanicilar_dil">Dil</label>
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

                        <!--begin::Vekalet content-->
                        <div class="tab-pane fade" id="ayarlarVekalet" role="tabpanel">
                            <div class="mb-10">
                                <div class="d-flex align-items-center">
                                    <div class="btn btn-icon btn-sm btn-color-primary body-bg h-25px w-25px me-3 pw-shadow-1" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="#bottomContent" data-kt-toggle-name="bottomContent-toggle">
                                        <i class="fa-sharp fa-solid fa-chevrons-down fs-8 rotate-180"></i>
                                    </div>
                                    <h6 class="fs-base fw-bold m-0">Vekalet</h6>
                                </div>
                                <p class="fs-9 text-gray-600 ms-10">Vekalet tanımlamalarını buradan görüntüleyebilirsin.</p>
                            </div>

                            <!--begin::Form-->
                            <form class="pe-lg-10">
                                <div class="d-flex flex-column gap-12">
                                    <!--begin::Table-->
                                    <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                                        <table class="table w-min-content w-100 gy-3 gx-4">
                                            <tbody>
                                                <!--begin::Row-->
                                                <tr>
                                                    <td><label class="form-label fs-8 fw-bold" for="">İş Akışı</label></td>
                                                    <td>
                                                        <select id="" class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2" data-placeholder="">
                                                            <option value="1">Fatura-1</option>
                                                            <option value="2">option 2</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <!--end::Row-->

                                                <!--begin::Row-->
                                                <tr>
                                                    <td><label class="form-label fs-8 fw-bold" for="">Vekalet veren</label></td>
                                                    <td>
                                                        <select id="" class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2" data-placeholder="">
                                                            <option value="1">Fatura-1</option>
                                                            <option value="2">option 2</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <!--end::Row-->

                                                <!--begin::Row-->
                                                <tr>
                                                    <td><label class="form-label fs-8 fw-bold" for="">Bitiş Tarihi</label></td>
                                                    <td>
                                                        <select id="" class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2" data-placeholder="">
                                                            <option value="1">option 1</option>
                                                            <option value="2">option 2</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <!--end::Row-->

                                                <!--begin::Row-->
                                                <tr>
                                                    <td><label class="form-label fs-8 fw-bold" for="">Açıklama</label></td>
                                                    <td>
                                                        <textarea class="form-control border-0 pw-form-control-neutral fs-8 py-3 px-4" rows="3" id="" name="" placeholder="Lorem ipsum"></textarea>
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

                            <div class="table-responsive overflow-x-auto mt-5">
                                <!--begin::Table-->
                                <table class="table table-row-bordered align-middle w-max-content min-w-100">
                                    <!--begin::Table head-->
                                    <thead>
                                        <tr class="fw-semibold fs-8 pw-text-neutral-500">
                                            <th class="py-3 px-2 ps-0">
                                                <!--begin::Checkbox-->
                                                <div class="form-check form-check-custom form-check-solid d-flex align-items-center gap-2 mb-0">
                                                    <input class="form-check-input" type="checkbox" value="" id="pw_indeks_numarasi">
                                                    <label for="pw_indeks_numarasi">Akış Adı</label>
                                                </div>
                                                <!--end::Checkbox-->
                                            </th>
                                            <th class="py-3 px-2">Vekalet Verilen</th>
                                            <th class="py-3 px-2">Vekaleti Kaydeden</th>
                                            <th class="py-3 px-2">Vekaleti Veren</th>
                                            <th class="py-3 px-2 text-primary">Başlangıç Tarihi<i class="fa-solid fa-angle-down fs-9 text-gray-600 ms-3"></i></th>
                                            <th class="py-3 px-2 text-primary">Bitiş Tarihi<i class="fa-solid fa-angle-down fs-9 text-gray-600 ms-3"></i></th>
                                            <th class="py-3 px-2">Açıklama</th>
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->

                                    <!--begin::Table body-->
                                    <tbody>
                                        <!--begin::Row-->
                                        <tr class="fw-medium pw-text-neutral-700 fs-8">
                                            <td class="py-6 px-2 ps-0">
                                                <!--begin::Checkbox-->
                                                <div class="form-check form-check-custom form-check-solid d-flex align-items-center gap-2 mb-0">
                                                    <input class="form-check-input" type="checkbox" value="" id="pw_indeks_numarasi">
                                                    <label for="pw_indeks_numarasi" class="fw-bold">Akış 1</label>
                                                </div>
                                                <!--end::Checkbox-->
                                            </td>
                                            <td class="py-6 px-2 fw-semibold">Pelin Acar</td>
                                            <td class="py-6 px-2 fw-semibold">Helin Gündüz</td>
                                            <td class="py-6 px-2 fw-semibold">Murat Gece</td>
                                            <td class="py-6 px-2 fw-semibold text-primary">05/28/2020</td>
                                            <td class="py-6 px-2 fw-semibold text-primary">06/20/2021</td>
                                            <td class="py-6 px-2">Lorem ipsum dolor</td>
                                        </tr>
                                        <!--end::Row-->

                                        <!--begin::Row-->
                                        <tr class="fw-medium pw-text-neutral-700 fs-8">
                                            <td class="py-6 px-2 ps-0">
                                                <!--begin::Checkbox-->
                                                <div class="form-check form-check-custom form-check-solid d-flex align-items-center gap-2 mb-0">
                                                    <input class="form-check-input" type="checkbox" value="" id="pw_indeks_numarasi">
                                                    <label for="pw_indeks_numarasi" class="fw-bold">Akış 1</label>
                                                </div>
                                                <!--end::Checkbox-->
                                            </td>
                                            <td class="py-6 px-2 fw-semibold">Pelin Acar</td>
                                            <td class="py-6 px-2 fw-semibold">Helin Gündüz</td>
                                            <td class="py-6 px-2 fw-semibold">Murat Gece</td>
                                            <td class="py-6 px-2 fw-semibold text-primary">05/28/2020</td>
                                            <td class="py-6 px-2 fw-semibold text-primary">06/20/2021</td>
                                            <td class="py-6 px-2">Lorem ipsum dolor</td>
                                        </tr>
                                        <!--end::Row-->

                                        <!--begin::Row-->
                                        <tr class="fw-medium pw-text-neutral-700 fs-8">
                                            <td class="py-6 px-2 ps-0">
                                                <!--begin::Checkbox-->
                                                <div class="form-check form-check-custom form-check-solid d-flex align-items-center gap-2 mb-0">
                                                    <input class="form-check-input" type="checkbox" value="" id="pw_indeks_numarasi">
                                                    <label for="pw_indeks_numarasi" class="fw-bold">Akış 1</label>
                                                </div>
                                                <!--end::Checkbox-->
                                            </td>
                                            <td class="py-6 px-2 fw-semibold">Pelin Acar</td>
                                            <td class="py-6 px-2 fw-semibold">Helin Gündüz</td>
                                            <td class="py-6 px-2 fw-semibold">Murat Gece</td>
                                            <td class="py-6 px-2 fw-semibold text-primary">05/28/2020</td>
                                            <td class="py-6 px-2 fw-semibold text-primary">06/20/2021</td>
                                            <td class="py-6 px-2">Lorem ipsum dolor</td>
                                        </tr>
                                        <!--end::Row-->
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                        </div>
                        <!--end::Vekalet content-->

                        <!--begin::Mobil content-->
                        <div class="tab-pane fade" id="ayarlarMobil" role="tabpanel">
                            <div class="d-flex flex-column flex-xl-row gap-4">
                                <!--begin::1-->
                                <div class="w-100 w-xl-50 p-8 d-inline-flex flex-column gap-10 border-end pw-border-stroke">
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
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::1-->

                                <!--begin::2-->
                                <div class="w-100 w-xl-50 p-8 d-inline-flex flex-column gap-10">
                                    <!--begin::Header-->
                                    <div>
                                        <h2 class="font-base fw-bold pw-text-neutral-800 mb-1">Bildirim Ayarları</h2>
                                        <p class="fs-9 fw-medium pw-text-neutral-600 mb-0">Bildirim ayarlarınızı güncelleyebilirsiniz.</p>
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

                        <!--begin::Genel content-->
                        <div class="tab-pane fade" id="ayarlarKisayollar" role="tabpanel">
                            <h6 class="mb-7 fs-7">Kısayollar</h6>
                            <div class="d-flex align-items-center my-5">
                                <button class="btn btn-icon pw-bg-neutral-100 me-2 w-30px h-30px" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="bottom" title="Klasör Ekle"><i class="fa-solid fa-folder-plus text-primary fs-8"></i></button>
                                <button class="btn btn-icon pw-bg-neutral-100 me-2 w-30px h-30px" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="bottom" title="Adını Değiştir"><i class="fa-solid fa-pen-to-square text-primary fs-8"></i></button>
                                <button class="btn btn-icon pw-bg-neutral-100 me-2 w-30px h-30px" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="bottom" title="Seçileni Sil"><i class="fa-solid fa-square-x text-primary fs-8"></i></button>
                                <button class="btn btn-icon pw-bg-neutral-100 me-2 w-30px h-30px"><i class="fa-solid fa-arrows-maximize text-primary fs-8"></i></button>
                                <button class="btn btn-icon pw-bg-neutral-100 me-2 w-30px h-30px"><i class="fa-solid fa-arrows-minimize text-primary fs-8"></i></button>
                                <button class="btn btn-icon pw-bg-neutral-100 me-2 w-30px h-30px" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="bottom" title="Kısayolları Göster"><i class="fa-solid fa-eye-slash text-primary fs-8"></i></button>
                            </div>

                            <div class="border rounded-2 pw-border-stroke scroll py-3">
                                <!--begin::Menu-->
                                <div class="menu menu-column pw-menu-custom-arrow menu-state-bg fw-semibold" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item menu-sub-indention menu-accordion w-max-content" data-kt-menu-trigger="click">
                                        <!--begin::Menu link-->
                                        <a href="javascript:void(0)" class="menu-link p-1">
                                            <span class="menu-arrow me-0"><i class="fa-sharp fa-solid fa-triangle fs-10 text-gray-300"></i></span>
                                            <span class="menu-icon"><i class="fa-sharp fa-solid fa-folder fs-6 pw-text-primary-300"></i></span>
                                            <span class="menu-title fs-9 fw-semibold pw-text-neutral-700">K Eczacıbaşı</span>
                                        </a>
                                        <!--end::Menu link-->

                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-accordion ms-9">
                                            <!--begin::Menu item-->
                                            <div class="menu-item">
                                                <a href="javascript:void(0)" class="menu-link p-1">
                                                    <span class="menu-icon"><i class="fa-sharp fa-solid fa-folder fs-6 pw-text-primary-300"></i></span>
                                                    <span class="menu-title fs-9 fw-semibold pw-text-neutral-700">
                                                        <div class="d-flex align-items-center">
                                                            <input type="text" class="form-control py-1 w-150px me-2">
                                                            <div class="form-check pw-form-check-rounded-sm pw-form-check-sm m-0">
                                                                <input class="form-check-input" type="checkbox" value="" id="" checked="checked" >
                                                            </div>
                                                            <button class="btn btn-icon btn-secondary ms-n2 w-20px h-20px mb-1 rounded-2px"><i class="fa-solid fa-x text-white fs-9"></i></button>
                                                        </div>
                                                    </span>
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item menu-sub-indention menu-accordion w-max-content ms-7" data-kt-menu-trigger="click">
                                        <!--begin::Menu link-->
                                        <a href="javascript:void(0)" class="menu-link p-1">
                                            <span class="menu-icon"><i class="fa-sharp fa-solid fa-gears fs-6 pw-text-primary-300"></i></span>
                                            <span class="menu-title fs-9 fw-semibold pw-text-neutral-700">Cabinets</span>
                                        </a>
                                        <!--end::Menu link-->
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </div>
                        </div>
                        <!--end::Genel content-->

                        <!--begin::Genel content-->
                        <div class="tab-pane fade" id="ayarlarIslerim" role="tabpanel">
                            <!--begin::Form-->
                            <form class="pe-lg-20">
                                <div class="d-flex flex-column gap-12">
                                    <div class="d-flex justify-content-between border-bottom pw-border-stroke pb-5">
                                        <h2 class="fw-bold pb-5 fs-base mb-0">İşlerim</h2>
                                        <button class="btn btn-danger fs-8 px-4 py-3">Tanımları Sıfırla</button>
                                    </div>
                                    
                                    <!--begin::Table-->
                                    <div class="table-responsive overflow-x-auto overflow-lg-hidden pe-lg-20">
                                        <table class="table w-min-content w-100 gy-3 gx-4">
                                            <tbody>
                                                <!--begin::Row-->
                                                <tr>
                                                    <td>
                                                        <label class="form-label fs-8" for="">Kart Sayısı</label>
                                                    </td>
                                                    <td>
                                                        <input type="number" class="form-control form-control-solid py-3 px-4 fs-8" name="" value="100"/>
                                                    </td>
                                                </tr>
                                                <!--end::Row-->

                                                 <!--begin::Row-->
                                                 <tr>
                                                    <td>
                                                        <label class="form-label fs-8" for="">Detay Satır Sayısı</label>
                                                    </td>
                                                    <td>
                                                        <input type="number" class="form-control form-control-solid py-3 px-4 fs-8" name="" value="2"/>
                                                    </td>
                                                </tr>
                                                <!--end::Row-->
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>

                                <div class="row">
                                    <div class="d-flex align-items-center justify-content-start mb-5 pe-lg-20">
                                        <label for="" class="fs-8 fw-normal me-2">İşlem Menüsünü Göster</label>
                                        <div class="form-check pw-form-check-rounded-sm pw-form-check-sm mt-1">
                                            <input class="form-check-input" type="checkbox" checked>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-5">
                                    <div class="col-6">
                                        <!--begin::Table-->
                                        <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                                            <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fw-bold fs-7">
                                                <tbody>
                                                    <!--begin::Row-->
                                                    <tr>
                                                        <td class="py-2"><label for="" class="fs-8 fw-normal">Akış Önceliği</label></td>
                                                        <td class="py-2">
                                                            <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                                                                <input class="form-check-input" type="checkbox" checked>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <!--end::Row-->

                                                    <!--begin::Row-->
                                                    <tr>
                                                        <td class="py-2"><label for="" class="fs-8 fw-normal">Toplamları Göster</label></td>
                                                        <td class="py-2">
                                                            <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                                                                <input class="form-check-input" type="checkbox" checked>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <!--end::Row-->

                                                    <!--begin::Row-->
                                                    <tr>
                                                        <td class="py-2"><label for="" class="fs-8 fw-normal">Planlanan Bitiş Tarihi</label></td>
                                                        <td class="py-2">
                                                            <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                                                                <input class="form-check-input" type="checkbox" checked>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <!--end::Row-->

                                                    <!--begin::Row-->
                                                    <tr>
                                                        <td class="py-2"><label for="" class="fs-8 fw-normal">Vekalet</label></td>
                                                        <td class="py-2">
                                                            <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                                                                <input class="form-check-input" type="checkbox" checked>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <!--end::Row-->

                                                    <!--begin::Row-->
                                                    <tr>
                                                        <td class="py-2"><label for="" class="fs-8 fw-normal">Son 5 Kullanıcı</label></td>
                                                        <td class="py-2">
                                                            <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                                                                <input class="form-check-input" type="checkbox" checked>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <!--end::Row-->

                                                    <!--begin::Row-->
                                                    <tr>
                                                        <td class="py-2"><label for="" class="fs-8 fw-normal">Başlatan</label></td>
                                                        <td class="py-2">
                                                            <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                                                                <input class="form-check-input" type="checkbox" checked>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <!--end::Row-->
                                                </tbody>
                                            </table>
                                        </div>
                                        <!--end::Table-->
                                    </div>

                                    <div class="col-6 ps-8">
                                        <!--begin::Table-->
                                        <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                                            <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fw-bold fs-7">
                                                <tbody>
                                                    <!--begin::Row-->
                                                    <tr>
                                                        <td class="py-2 fw-bold text-primary">Tamamlananlar</label></td>
                                                        <td class="py-2"></td>
                                                    </tr>
                                                    <!--end::Row-->

                                                    <!--begin::Row-->
                                                    <tr>
                                                        <td class="py-2"><label for="" class="fs-8 fw-normal">Başlatan</label></td>
                                                        <td class="py-2">
                                                            <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                                                                <input class="form-check-input" type="checkbox" checked>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <!--end::Row-->

                                                    <!--begin::Row-->
                                                    <tr>
                                                        <td class="py-2"><label for="" class="fs-8 fw-normal">Akış Önceliği</label></td>
                                                        <td class="py-2">
                                                            <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                                                                <input class="form-check-input" type="checkbox" checked>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <!--end::Row-->

                                                    <!--begin::Row-->
                                                    <tr>
                                                        <td class="py-2"><label for="" class="fs-8 fw-normal">Beklediği Kullanıcılar</label></td>
                                                        <td class="py-2">
                                                            <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                                                                <input class="form-check-input" type="checkbox" checked>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <!--end::Row-->

                                                    <!--begin::Row-->
                                                    <tr>
                                                        <td class="py-2"><label for="" class="fs-8 fw-normal">Derecelendirme</label></td>
                                                        <td class="py-2">
                                                            <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                                                                <input class="form-check-input" type="checkbox" checked>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <!--end::Row-->
                                                </tbody>
                                            </table>
                                        </div>
                                        <!--end::Table-->
                                    </div>
                                </div>

                                <div class="row">
                                    <h6 class="fs-8 text-primary fw-bold mb-7">Aranabilir Menü Ayarları</h6>
                                    <div class="row mb-5">
                                        <div class="col col-md-6 col-lg-6">
                                            <!--begin::Table-->
                                            <div class="table-responsive overflow-x-auto overflow-lg-hidden border pw-border-stroke rounded-2 p-3 pt-0">
                                                <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fw-bold fs-7">
                                                    <tbody>
                                                        <!--begin::Row-->
                                                        <tr>
                                                            <td class="py-2 fw-bold text-primary">Menü</label></td>
                                                            <td class="py-2"></td>
                                                        </tr>
                                                        <!--end::Row-->

                                                        <!--begin::Row-->
                                                        <tr>
                                                            <td class="py-2"><label for="" class="fs-8 fw-normal">Akış Önceliği</label></td>
                                                            <td class="py-2">
                                                                <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                                                                    <input class="form-check-input" type="checkbox" checked>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <!--end::Row-->

                                                        <!--begin::Row-->
                                                        <tr>
                                                            <td class="py-2"><label for="" class="fs-8 fw-normal">Toplamları Göster</label></td>
                                                            <td class="py-2">
                                                                <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                                                                    <input class="form-check-input" type="checkbox" checked>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <!--end::Row-->

                                                        <!--begin::Row-->
                                                        <tr>
                                                            <td class="py-2"><label for="" class="fs-8 fw-normal">Planlanan Bitiş Tarihi</label></td>
                                                            <td class="py-2">
                                                                <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                                                                    <input class="form-check-input" type="checkbox" checked>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <!--end::Row-->

                                                        <!--begin::Row-->
                                                        <tr>
                                                            <td class="py-2"><label for="" class="fs-8 fw-normal">Vekalet</label></td>
                                                            <td class="py-2">
                                                                <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                                                                    <input class="form-check-input" type="checkbox" checked>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <!--end::Row-->

                                                        <!--begin::Row-->
                                                        <tr>
                                                            <td class="py-2"><label for="" class="fs-8 fw-normal">Son 5 Kullanıcı</label></td>
                                                            <td class="py-2">
                                                                <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                                                                    <input class="form-check-input" type="checkbox" checked>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <!--end::Row-->

                                                        <!--begin::Row-->
                                                        <tr>
                                                            <td class="py-2"><label for="" class="fs-8 fw-normal">Başlatan</label></td>
                                                            <td class="py-2">
                                                                <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                                                                    <input class="form-check-input" type="checkbox" checked>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <!--end::Row-->
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!--end::Table-->
                                        </div>
                                        <div class="col col-md-6 col-lg-6">
                                            <!--begin::Table-->
                                            <div class="table-responsive overflow-x-auto overflow-lg-hidden border pw-border-stroke rounded-2 p-3  pt-0 h-100">
                                                <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fw-bold fs-7">
                                                    <tbody>
                                                        <!--begin::Row-->
                                                        <tr>
                                                            <td class="py-2 fw-bold text-primary">Menü</label></td>
                                                            <td class="py-2"></td>
                                                        </tr>
                                                        <!--end::Row-->

                                                    </tbody>
                                                </table>
                                            </div>
                                            <!--end::Table-->
                                        </div>
                                    </div>
                                    <div class="row mb-5">
                                        <div class="col col-md-6 col-lg-6">
                                            <!--begin::Table-->
                                            <div class="table-responsive overflow-x-auto overflow-lg-hidden border pw-border-stroke rounded-2 p-5 pt-0 h-100">
                                                <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fw-bold fs-7">
                                                    <tbody>
                                                        <!--begin::Row-->
                                                            <tr>
                                                                <td class="py-2 fw-bold text-primary">Sıralama</label></td>
                                                                <td class="py-2"></td>
                                                            </tr>
                                                            <!--end::Row-->

                                                        <!--begin::Row-->
                                                        <tr>
                                                            <td class="py-2"><label for="" class="fs-8 fw-normal">Akış Önceliği</label></td>
                                                            <td class="py-2"></td>
                                                        </tr>
                                                        <!--end::Row-->

                                                        <!--begin::Row-->
                                                        <tr>
                                                            <td class="py-2"><label for="" class="fs-8 fw-normal">Toplamları Göster</label></td>
                                                            <td class="py-2"></td>
                                                        </tr>
                                                        <!--end::Row-->

                                                        <!--begin::Row-->
                                                        <tr>
                                                            <td class="py-2"><label for="" class="fs-8 fw-normal">Planlanan Bitiş Tarihi</label></td>
                                                            <td class="py-2"></td>
                                                        </tr>
                                                        <!--end::Row-->

                                                        <!--begin::Row-->
                                                        <tr>
                                                            <td class="py-2"><label for="" class="fs-8 fw-normal">Vekalet</label></td>
                                                            <td class="py-2"></td>
                                                        </tr>
                                                        <!--end::Row-->

                                                        <!--begin::Row-->
                                                        <tr>
                                                            <td class="py-2"><label for="" class="fs-8 fw-normal">Son 5 Kullanıcı</label></td>
                                                            <td class="py-2"></td>
                                                        </tr>
                                                        <!--end::Row-->

                                                        <!--begin::Row-->
                                                        <tr>
                                                            <td class="py-2"><label for="" class="fs-8 fw-normal">Başlatan</label></td>
                                                            <td class="py-2"></td>
                                                        </tr>
                                                        <!--end::Row-->
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!--end::Table-->
                                        </div>
                                        <div class="col col-md-6 col-lg-6">
                                            <!--begin::Table-->
                                            <div class="table-responsive overflow-x-auto overflow-lg-hidden border pw-border-stroke rounded-2 p-5 pt-0 h-100">
                                                <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fw-bold fs-7">
                                                    <tbody>
                                                        <!--begin::Row-->
                                                        <tr>
                                                            <td class="py-2 fw-bold text-primary">Seçili</label></td>
                                                            <td class="py-2"></td>
                                                        </tr>
                                                        <!--end::Row-->
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!--end::Table-->
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Genel content-->

                        <!--begin::Genel content-->
                        <div class="tab-pane fade" id="ayarlarBelgeler" role="tabpanel">
                            <!--begin::Form-->
                            <form class="pe-lg-15">
                                <div class="d-flex flex-column gap-12">
                                    <div class="d-flex justify-content-between border-bottom pw-border-stroke pb-5">
                                        <h2 class="fw-bold pb-5 fs-base mb-0">Belgeler</h2>
                                        <button class="btn btn-danger fs-8 px-4 py-3">Tanımları Sıfırla</button>
                                    </div>
                                    
                                    <!--begin::Table-->
                                    <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                                        <table class="table w-min-content w-100 gy-3 gx-4">
                                            <tbody>
                                                <!--begin::Row-->
                                                <tr>
                                                    <td>
                                                        <label class="form-label fs-8" for="">Arşiv Kayıt Sayısı</label>
                                                    </td>
                                                    <td>
                                                        <input type="number" class="form-control form-control-solid py-3 px-4 fs-8" name="" value="25"/>
                                                    </td>
                                                </tr>
                                                <!--end::Row-->

                                                 <!--begin::Row-->
                                                 <tr>
                                                    <td>
                                                        <label class="form-label fs-8" for="">Diğer Ekranlar için  Kayıt Sayısı</label>
                                                    </td>
                                                    <td>
                                                        <input type="number" class="form-control form-control-solid py-3 px-4 fs-8" name="" value="25"/>
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

                        <!--begin::Genel content-->
                        <div class="tab-pane fade" id="ayarlarYardim" role="tabpanel">
                            <div class="d-flex justify-content-between border-bottom pw-border-stroke pb-5 mb-7">
                                <h2 class="fw-bold fs-base mb-0">Yardım</h2>
                            </div>

                            <div class="row">
                                <div class="col-sm-12 col-md-6 col-lg-6 my-3">
                                    <div class="d-flex border pw-border-stroke rounded-4 p-5">
                                        <div class="w-85px h-85px me-5"><img class="img-fluid h-85px" src="../assets/media/ayarlar/157206e37c6d2f6cbf7d69f866b6f6d2.png" alt=""></div>
                                        <div class="">
                                            <h6 class="fs-8">PaperWork Tray</h6>
                                            <p class="fs-9">PaperWork Tray Uygulaması hakkında her şey.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-6 col-lg-6 my-3">
                                    <div class="d-flex border pw-border-stroke rounded-4 p-5">
                                        <div class="w-85px h-85px me-5"><img class="img-fluid h-85px" src="../assets/media/ayarlar/d0cfa108-6b9d-4c81-8766-10c059d9014c.png" alt=""></div>
                                        <div class="">
                                            <h6 class="fs-8">Sistem Yönetimi</h6>
                                            <p class="fs-9">PaperWork Tray Uygulaması hakkında her şey.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-6 col-lg-6 my-3">
                                    <div class="d-flex border pw-border-stroke rounded-4 p-5">
                                        <div class="w-85px h-85px me-5"><img class="img-fluid h-85px" src="../assets/media/ayarlar/a169a3202809134877ec1d4c6cc1f39c.png" alt=""></div>
                                        <div class="">
                                            <h6 class="fs-8">Versiyonlar</h6>
                                            <p class="fs-9">PaperWork Tray Uygulaması hakkında her şey.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-6 col-lg-6 my-3">
                                    <div class="d-flex border pw-border-stroke rounded-4 p-5">
                                        <div class="w-85px h-85px me-5"><img class="img-fluid h-85px" src="../assets/media/ayarlar/a64fff7a01d32cc42070f8b9f53a51ca.png" alt=""></div>
                                        <div class="">
                                            <h6 class="fs-8">SAP Ürünleri</h6>
                                            <p class="fs-9">PaperWork Tray Uygulaması hakkında her şey.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-6 col-lg-6 my-3">
                                    <div class="d-flex border pw-border-stroke rounded-4 p-5">
                                        <div class="w-85px h-85px me-5"><img class="img-fluid h-85px" src="../assets/media/ayarlar/ef3f544c-1f2c-451d-8ddc-8949543f7544.png" alt=""></div>
                                        <div class="">
                                            <h6 class="fs-8">Logo</h6>
                                            <p class="fs-9">PaperWork Tray Uygulaması hakkında her şey.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-6 col-lg-6 my-3">
                                    <div class="d-flex border pw-border-stroke rounded-4 p-5">
                                        <div class="w-85px h-85px me-5"><img class="img-fluid h-85px" src="../assets/media/ayarlar/6802b606-cd24-49c1-baec-2224edc47e4d.png" alt=""></div>
                                        <div class="">
                                            <h6 class="fs-8">Robusta RPA</h6>
                                            <p class="fs-9">PaperWork Tray Uygulaması hakkında her şey.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-6 col-lg-6 my-3">
                                    <div class="d-flex border pw-border-stroke rounded-4 p-5">
                                        <div class="w-85px h-85px me-5"><img class="img-fluid h-85px" src="../assets/media/ayarlar/61f310aa081bbdbe5cc60e86bdb28248.png" alt=""></div>
                                        <div class="">
                                            <h6 class="fs-8">Eğitimler ve Planlar</h6>
                                            <p class="fs-9">PaperWork Tray Uygulaması hakkında her şey.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-6 col-lg-6 my-3">
                                    <div class="d-flex border pw-border-stroke rounded-4 p-5">
                                        <div class="w-85px h-85px me-5"><img class="img-fluid h-85px" src="../assets/media/ayarlar/3571373c-0068-486c-b48a-b91be37d332a.png" alt=""></div>
                                        <div class="">
                                            <h6 class="fs-8">PaperWork SDK</h6>
                                            <p class="fs-9">PaperWork Tray Uygulaması hakkında her şey.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-6 col-lg-6 my-3">
                                    <div class="d-flex border pw-border-stroke rounded-4 p-5">
                                        <div class="w-85px h-85px me-5"><img class="img-fluid h-85px" src="../assets/media/ayarlar/b83bfa0e-7df3-4318-b21d-2e2620dd8931.png" alt=""></div>
                                        <div class="">
                                            <h6 class="fs-8">Outlook</h6>
                                            <p class="fs-9">PaperWork Tray Uygulaması hakkında her şey.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-6 col-lg-6 my-3">
                                    <div class="d-flex border pw-border-stroke rounded-4 p-5">
                                        <div class="w-85px h-85px me-5"><img class="img-fluid h-85px" src="../assets/media/ayarlar/7143f05f-ed8a-4e63-920e-fe20bc3a3fea.png" alt=""></div>
                                        <div class="">
                                            <h6 class="fs-8">Nasıl Yaparım?</h6>
                                            <p class="fs-9">PaperWork Tray Uygulaması hakkında her şey.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-6 col-lg-6 my-3">
                                    <div class="d-flex border pw-border-stroke rounded-4 p-5">
                                        <div class="w-85px h-85px me-5"><img class="img-fluid h-85px" src="../assets/media/ayarlar/7563527a-5b74-4bf2-a0ba-e81280f7ac9b.png" alt=""></div>
                                        <div class="">
                                            <h6 class="fs-8">ISDD</h6>
                                            <p class="fs-9">PaperWork Tray Uygulaması hakkında her şey.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-6 col-lg-6 my-3">
                                    <div class="d-flex border pw-border-stroke rounded-4 p-5">
                                        <div class="w-85px h-85px me-5"><img class="img-fluid h-85px" src="../assets/media/ayarlar/0a0f8f37-b241-4225-89b8-9ce0b14faac9.png" alt=""></div>
                                        <div class="">
                                            <h6 class="fs-8">KEP ve E-İmza</h6>
                                            <p class="fs-9">PaperWork Tray Uygulaması hakkında her şey.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-6 col-lg-6 my-3">
                                    <div class="d-flex border pw-border-stroke rounded-4 p-5">
                                        <div class="w-85px h-85px me-5"><img class="img-fluid h-85px" src="../assets/media/ayarlar/8a716ddb-395d-4dce-b394-5590b9a1319f.png" alt=""></div>
                                        <div class="">
                                            <h6 class="fs-8">Tedarikçi Yönetimi</h6>
                                            <p class="fs-9">PaperWork Tray Uygulaması hakkında her şey.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Genel content-->

                        <!--begin::Genel content-->
                        <div class="tab-pane fade" id="ayarlarLisanslar" role="tabpanel">
                            <div class="d-flex justify-content-between border-bottom pw-border-stroke pb-5 ms-9 mb-1">
                                <h2 class="fw-bold fs-base mb-0">Lisanslar</h2>
                            </div>

                            <div class="table-responsive">
                                <!--begin::Table light-->
                                <table class="table table-row-bordered table-row-gray-200 align-middle w-max-content min-w-100 gy-3 gx-9 gs-9">
                                    <thead>
                                        <tr class="fw-semibold fs-8 pw-text-neutral-700 pw-bg-neutral-100 justify-content-between">
                                            <th class="py-3">Lisanslar</th>
                                            <th class="py-3 w-200px">Durum</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!--begin::Row-->
                                        <tr class="fw-medium pw-text-neutral-700 fs-8 border-bottom">
                                            <td><i class="fa-solid fa-file-certificate text-primary fs-8 me-3"></i>CAS Bundle</td>
                                            <td><span class="badge badge-light-success">Evet</span></td>
                                        </tr>
                                        <!--end::Row-->

                                        <!--begin::Row-->
                                        <tr class="fw-medium pw-text-neutral-700 fs-8 border-bottom">
                                            <td><i class="fa-solid fa-file-certificate text-primary fs-8 me-3"></i>Compression Pack</td>
                                            <td><span class="badge badge-light-success">Evet</span></td>
                                        </tr>
                                        <!--end::Row-->

                                        <!--begin::Row-->
                                        <tr class="fw-medium pw-text-neutral-700 fs-8 border-bottom">
                                            <td><i class="fa-solid fa-file-certificate text-primary fs-8 me-3"></i>Content Server</td>
                                            <td><span class="badge badge-light-primary">1 Adet</span></td>
                                        </tr>
                                        <!--end::Row-->

                                        <!--begin::Row-->
                                        <tr class="fw-medium pw-text-neutral-700 fs-8 border-bottom">
                                            <td><i class="fa-solid fa-file-certificate text-primary fs-8 me-3"></i>E- İmza</td>
                                            <td><span class="badge badge-light-danger">0 Adet</span></td>
                                        </tr>
                                        <!--end::Row-->

                                        <!--begin::Row-->
                                        <tr class="fw-medium pw-text-neutral-700 fs-8 border-bottom">
                                            <td><i class="fa-solid fa-file-certificate text-primary fs-8 me-3"></i>E-Fatura Entegrasyon Modülü</td>
                                            <td><span class="badge badge-light-success">Evet</span></td>
                                        </tr>
                                        <!--end::Row-->

                                        <!--begin::Row-->
                                        <tr class="fw-medium pw-text-neutral-700 fs-8 border-bottom">
                                            <td><i class="fa-solid fa-file-certificate text-primary fs-8 me-3"></i>ECM Doküman Yönetimi</td>
                                            <td><span class="badge badge-light-success">Evet</span></td>
                                        </tr>
                                        <!--end::Row-->

                                        <!--begin::Row-->
                                        <tr class="fw-medium pw-text-neutral-700 fs-8 border-bottom">
                                            <td><i class="fa-solid fa-file-certificate text-primary fs-8 me-3"></i>KEP Entegrasyon Modülü</td>
                                            <td><span class="badge badge-light-success">Evet</span></td>
                                        </tr>
                                        <!--end::Row-->

                                        <!--begin::Row-->
                                        <tr class="fw-medium pw-text-neutral-700 fs-8 border-bottom">
                                            <td><i class="fa-solid fa-file-certificate text-primary fs-8 me-3"></i>KVKK Veri Maskeleme Modülü</td>
                                            <td><span class="badge badge-light-success">Evet</span></td>
                                        </tr>
                                        <!--end::Row-->

                                        <!--begin::Row-->
                                        <tr class="fw-medium pw-text-neutral-700 fs-8 border-bottom">
                                            <td><i class="fa-solid fa-file-certificate text-primary fs-8 me-3"></i>Logo Eklentisi</td>
                                            <td><span class="badge badge-light-success">Evet</span></td>
                                        </tr>
                                        <!--end::Row-->

                                        <!--begin::Row-->
                                        <tr class="fw-medium pw-text-neutral-700 fs-8 border-bottom">
                                            <td><i class="fa-solid fa-file-certificate text-primary fs-8 me-3"></i>Mobil Kullanıcı Lisansı</td>
                                            <td><span class="badge badge-light-success">Evet</span></td>
                                        </tr>
                                        <!--end::Row-->

                                        <!--begin::Row-->
                                        <tr class="fw-medium pw-text-neutral-700 fs-8 border-bottom">
                                            <td><i class="fa-solid fa-file-certificate text-primary fs-8 me-3"></i>Outlook Kullanıcı Lisansı</td>
                                            <td><span class="badge badge-light-success">Evet</span></td>
                                        </tr>
                                        <!--end::Row-->

                                        <!--begin::Row-->
                                        <tr class="fw-medium pw-text-neutral-700 fs-8 border-bottom">
                                            <td><i class="fa-solid fa-file-certificate text-primary fs-8 me-3"></i>Robusta Konnektörü</td>
                                            <td><span class="badge badge-light-success">Evet</span></td>
                                        </tr>
                                        <!--end::Row-->

                                    </tbody>
                                </table>
                                <!--end::Table dark-->
                                </div>
                        </div>
                        <!--end::Genel content-->

                        <!--begin::Genel content-->
                        <div class="tab-pane fade" id="ayarlarHakkinda" role="tabpanel">
                            <div class="d-flex align-items-center justify-content-between border pw-border-stroke rounded-3 mb-5 px-7 py-5">
                                <div class="">
                                    <h6 class="fs-base text-primary mb-2">Derleme No</h6>
                                    <p class="fs-base m-0">5.0.08606</p>
                                </div>
                                <a href="javascript:void(0);" class="mt-n9"><i class="fa-regular fa-circle-question text-gray-400 fs-6"></i></a>
                            </div>

                            <div class="d-flex align-items-center border pw-border-stroke rounded-3 mb-5 px-7 py-5">
                                <div class="">
                                    <h6 class="fs-base text-primary mb-2">Telif Hakkı</h6>
                                    <p class="fs-base m-0">G-GSoft, All Right Reserved</p>
                                </div>
                            </div>

                            <div class="d-flex align-items-center border pw-border-stroke rounded-3 mb-5 px-7 py-5">
                                <div class="">
                                    <h6 class="fs-base text-primary mb-2">Adres</h6>
                                    <p class="fs-base m-0">İçerenköy Mah. Büyük Kartal Sokak</p>
                                    <p class="fs-base m-0">Parlar Bolat İş Merkezi</p>
                                    <p class="fs-base m-0">No: 19 Kat:2 34742</p>
                                    <p class="fs-base m-0">Ataşehir / İstanbul</p>
                                </div>
                            </div>

                            <div class="d-flex align-items-center border pw-border-stroke rounded-3 mb-5 px-7 py-5">
                                <div class="">
                                    <h6 class="fs-base text-primary mb-2">Telefon</h6>
                                    <p class="fs-base m-0">+ 90 216 384 07 51</p>
                                </div>
                            </div>

                            <div class="d-flex align-items-center border pw-border-stroke rounded-3 mb-5 px-7 py-5">
                                <div class="">
                                    <h6 class="fs-base text-primary mb-2">Telif Hakkı</h6>
                                    <p class="fs-base m-0">G-GSoft, All Right Reserved</p>
                                </div>
                            </div>

                            <div class="d-flex align-items-center border pw-border-stroke rounded-3 mb-5 px-7 py-5">
                                <div class="">
                                    <h6 class="fs-base text-primary mb-2">Faks</h6>
                                    <p class="fs-base m-0">+ 90 216 384 02 86</p>
                                </div>
                            </div>

                            <div class="d-flex align-items-center border pw-border-stroke rounded-3 mb-5 px-7 py-5">
                                <div class="">
                                    <h6 class="fs-base text-primary mb-2">Web</h6>
                                    <p class="fs-base m-0">www.paperwork.com.tr</p>
                                </div>
                            </div>

                            <div class="border pw-border-stroke rounded-3 mb-5 px-7 py-5">
                                <div class="d-flex align-items-center mb-10">
                                    <div class="btn btn-icon btn-sm btn-color-primary body-bg h-25px w-25px me-3 pw-shadow-1" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="#bottomContent" data-kt-toggle-name="bottomContent-toggle">
                                        <i class="fa-sharp fa-solid fa-chevrons-down fs-8 rotate-180"></i>
                                    </div>
                                    <h6 class="fs-base text-primary m-0">Şirket Bilgisi</h6>
                                </div>
                                <div class="mb-5">
                                    <h6 class="fs-base text-primary mb-2">Müşteri Kodu</h6>
                                    <p class="fs-base m-0">GGSoft - Argusdev51</p>
                                </div>
                                <div class="mb-5">
                                    <h6 class="fs-base text-primary mb-2">Müşteri Adı</h6>
                                    <p class="fs-base m-0">GGSoft</p>
                                </div>
                                <div class="mb-5">
                                    <h6 class="fs-base text-primary mb-2">Platform</h6>
                                    <p class="fs-base m-0">Development</p>
                                </div>
                                <div class="mb-5">
                                    <h6 class="fs-base text-primary mb-2">Varsayılan Dil</h6>
                                    <p class="fs-base m-0">TR</p>
                                </div>
                                <div class="mb-5">
                                    <h6 class="fs-base text-primary mb-2">Repository ID</h6>
                                    <p class="fs-base m-0">5151</p>
                                </div>
                                <div class="mb-5">
                                    <h6 class="fs-base text-primary mb-2">DB Derleme No</h6>
                                    <p class="fs-base m-0">5.0.1.18</p>
                                </div>
                            </div>
                        </div>
                        <!--end::Genel content-->
                    </div>
                    <!--end::Nav contents-->
                </div>
            </div>          
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

<!--begin::Modal-->
<div class="modal fade" tabindex="-1" id="kabinetYolu" role="dialog" aria-labelledby="klasorlerLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg mw-425px">
        <div class="modal-content">
            <div class="modal-header border pb-3">
                <h3 class="modal-title fs-5">Klasör Yolu</h3>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark fs-5"></i>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body">
                <div class="mb-5">
                    <input type="text" class="form-control form-control-outline py-3 px-4 fs-8" name="" value="/" />
                </div>

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