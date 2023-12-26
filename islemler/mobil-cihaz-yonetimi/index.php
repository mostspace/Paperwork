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
                  <a href="/islemler/" class="text-muted text-hover-primary">İşlemler</a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                  <span class="text-muted">/</span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item active"> Mobil Cihaz Yönetimi</li>
                <!--end::Item-->
              </ul>
              <!--end::Breadcrumb-->
              <!--begin::Title-->
              <h1 class="page-heading d-flex text-dark fw-bold fs-4 flex-column justify-content-center my-0">
                Mobil Cihaz Yönetimi
              </h1>
              <!--end::Title-->
            </div>
            <!--end::Page title-->

          </div>
          <!--end::Toolbar container-->
        </div>
        <!--end::Toolbar-->

        <!--begin::Content -->
        <div class="row mb-20">
          <!--begin::Menu col-->
          <div class="col-12 col-lg-3">
            <div class="border rounded-3 pw-border-stroke p-8 mh-800px overflow-y-auto">
              <!--begin::Header-->
              <div>
                <h2 class="font-base fw-bold pw-text-neutral-800 mb-1">Kullanıcılar</h2>
                <p class="fs-9 fw-medium pw-text-neutral-600 mb-0">Kullanıcıları buradan arayabilirsiniz.</p>
              </div>
              <!--end::Header-->
              <!--begin::Search wrapper-->
              <div id="kt_docs_search_handler_basic" class="w-100 mw-300px my-3" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="true" data-kt-search-layout="inline">
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
                  <input type="text" class="form-control pw-input-stroke py-2 ps-9 pe-2 fs-8" name="search" value="" placeholder="Kullanıcı adı giriniz" data-kt-search-element="input">
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
                <div class="menu menu-rounded menu-column menu-active-bg menu-hover-bg menu-title-gray-700 pw-aside-menu fs-9 fw-semibold w-100 mt-5" id="#kt_aside_menu" data-kt-menu="true">
                  <!--begin::Menu item-->
                  <div class="menu-item">
                    <a href="#" class="menu-link active border-3 border-start border-primary">
                      <span class="menu-icon w-auto">
                        <i class="fa-solid fa-user fs-6"></i>
                      </span>
                      <span class="menu-title">Göksel Aydemir</span>
                    </a>
                  </div>
                  <!--end::Menu item-->

                  <!--begin::Menu item-->
                  <div class="menu-item">
                    <a href="#" class="menu-link">
                      <span class="menu-icon w-auto">
                        <i class="fa-solid fa-user fs-6"></i>
                      </span>
                      <span class="menu-title">Akfen Form Kabineti</span>
                    </a>
                  </div>
                  <!--end::Menu item-->

                  <!--begin::Menu item-->
                  <div class="menu-item">
                    <a href="#" class="menu-link">
                      <span class="menu-icon w-auto">
                        <i class="fa-solid fa-user fs-6"></i>
                      </span>
                      <span class="menu-title">Akfen Form Kabineti</span>
                    </a>
                  </div>
                  <!--end::Menu item-->

                  <!--begin::Menu item-->
                  <div class="menu-item">
                    <a href="#" class="menu-link">
                      <span class="menu-icon w-auto">
                        <i class="fa-solid fa-user fs-6"></i>
                      </span>
                      <span class="menu-title">Akfen Form Kabineti</span>
                    </a>
                  </div>
                  <!--end::Menu item-->
                </div>
                <!--end::Menu-->
            </div>
          </div>
          <!--end::Menu col-->
          <!--begin::Content col-->
          <div class="col-12 col-lg-9 pt-5 pt-lg-0 ps-lg-5">
            <!--begin::Form wrapper-->
            <div class="col-12 col-lg-12">
              <div class="d-flex flex-column flex-xl-row gap-4">
                <!--begin::1-->
                <div class="w-100 w-xl-50 p-8 d-inline-flex flex-column gap-10 border rounded-3 pw-border-stroke">
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
            <!--end::Form wrapper-->
          </div>
          <!--end::Content col-->
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

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/foot.php'; ?>