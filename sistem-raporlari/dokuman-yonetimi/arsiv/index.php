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
                  <a href="/sistem-raporlari/" class="text-muted text-hover-primary">Sistem Raporları</a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                  <span class="text-muted">/</span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item active">Arşiv</li>
                <!--end::Item-->
              </ul>
              <!--end::Breadcrumb-->
              <!--begin::Title-->
              <h1 class="page-heading d-flex text-dark fw-bold fs-4 flex-column justify-content-center my-0">
                Arşiv
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
          <div id="menuCol" class="col-12 col-lg-2 pb-5 pe-lg-4 border-lg-bottom-0 border-lg-end pw-border-stroke">
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
            <div class="menu menu-rounded menu-column menu-active-bg menu-hover-bg menu-title-gray-700 pw-aside-menu fs-9 fw-semibold w-100 mt-5 scroll h-100" data-kt-menu="true">
              <!--begin::Menu item-->
              <div class="menu-item">
                <a href="/sistem-raporlari/dokuman-yonetimi/arsiv#" class="menu-link active border-3 border-start border-primary">
                  <span class="menu-icon w-auto">
                    <i class="fa-solid fa-id-card fs-6"></i>
                  </span>
                  <span class="menu-title">Akçelik POC</span>
                </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item">
                <a href="/sistem-raporlari/dokuman-yonetimi/arsiv#" class="menu-link">
                  <span class="menu-icon w-auto">
                    <i class="fa-solid fa-h fs-6"></i>
                  </span>
                  <span class="menu-title">Akfen Form Kabineti</span>
                </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item">
                <a href="/sistem-raporlari/dokuman-yonetimi/arsiv#" class="menu-link">
                  <span class="menu-icon w-auto">
                    <i class="fa-solid fa-flag fs-6"></i>
                  </span>
                  <span class="menu-title">Aksiyon Belgeleri</span>
                </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item">
                <a href="/sistem-raporlari/dokuman-yonetimi/arsiv#" class="menu-link">
                  <span class="menu-icon w-auto">
                    <i class="fa-solid fa-flag fs-6"></i>
                  </span>
                  <span class="menu-title">Aksiyon Takip</span>
                </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item">
                <a href="/sistem-raporlari/dokuman-yonetimi/arsiv#" class="menu-link">
                  <span class="menu-icon w-auto">
                    <i class="fa-solid fa-a fs-6"></i>
                  </span>
                  <span class="menu-title">Alıcı Cari Hesap Açma DK</span>
                </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item">
                <a href="/sistem-raporlari/dokuman-yonetimi/arsiv#" class="menu-link">
                  <span class="menu-icon w-auto">
                    <i class="fa-solid fa-flag fs-6"></i>
                  </span>
                  <span class="menu-title">Anket Arşivi</span>
                </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item">
                <a href="/sistem-raporlari/dokuman-yonetimi/arsiv#" class="menu-link">
                  <span class="menu-icon w-auto">
                    <i class="fa-solid fa-motorcycle fs-6"></i>
                  </span>
                  <span class="menu-title">Araç Havuzu</span>
                </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item">
                <a href="/sistem-raporlari/dokuman-yonetimi/arsiv#" class="menu-link">
                  <span class="menu-icon w-auto">
                    <i class="fa-solid fa-basket-shopping fs-6"></i>
                  </span>
                  <span class="menu-title">Araç Talep</span>
                </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item">
                <a href="/sistem-raporlari/dokuman-yonetimi/arsiv#" class="menu-link">
                  <span class="menu-icon w-auto">
                    <i class="fa-solid fa-folder fs-6"></i>
                  </span>
                  <span class="menu-title">Araştırma Klasör Yetkileri Etkin</span>
                </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item">
                <a href="/sistem-raporlari/dokuman-yonetimi/arsiv#" class="menu-link">
                  <span class="menu-icon w-auto">
                    <i class="fa-solid fa-fish fs-6"></i>
                  </span>
                  <span class="menu-title">Araştırma Merkezi Arşivi</span>
                </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item">
                <a href="/sistem-raporlari/dokuman-yonetimi/arsiv#" class="menu-link">
                  <span class="menu-icon w-auto">
                    <i class="fa-solid fa-check fs-6"></i>
                  </span>
                  <span class="menu-title">Argusdev ARŞİV2</span>
                </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item">
                <a href="/sistem-raporlari/dokuman-yonetimi/arsiv#" class="menu-link">
                  <span class="menu-icon w-auto">
                    <i class="fa-solid fa-flag fs-6"></i>
                  </span>
                  <span class="menu-title">Baykuş Akademi Eğitim</span>
                </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item">
                <a href="/sistem-raporlari/dokuman-yonetimi/arsiv#" class="menu-link">
                  <span class="menu-icon w-auto">
                    <i class="fa-solid fa-gift fs-6"></i>
                  </span>
                  <span class="menu-title">BK- Promosyon Talep Kayıtları</span>
                </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item">
                <a href="/sistem-raporlari/dokuman-yonetimi/arsiv#" class="menu-link">
                  <span class="menu-icon w-auto">
                    <i class="fa-solid fa-folder fs-6"></i>
                  </span>
                  <span class="menu-title">Body Arşivi</span>
                </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item">
                <a href="/sistem-raporlari/dokuman-yonetimi/arsiv#" class="menu-link">
                  <span class="menu-icon w-auto">
                    <i class="fa-solid fa-bold fs-6"></i>
                  </span>
                  <span class="menu-title">Boryağı Yeni Emisyon Ölçüm Formları</span>
                </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item">
                <a href="/sistem-raporlari/dokuman-yonetimi/arsiv#" class="menu-link">
                  <span class="menu-icon w-auto">
                    <i class="fa-solid fa-folder fs-6"></i>
                  </span>
                  <span class="menu-title">BT Malzeme Talep</span>
                </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item">
                <a href="/sistem-raporlari/dokuman-yonetimi/arsiv#" class="menu-link">
                  <span class="menu-icon w-auto">
                    <i class="fa-solid fa-bold fs-6"></i>
                  </span>
                  <span class="menu-title">Büşra Test1</span>
                </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item">
                <a href="/sistem-raporlari/dokuman-yonetimi/arsiv#" class="menu-link">
                  <span class="menu-icon w-auto">
                    <i class="fa-solid fa-bold fs-6"></i>
                  </span>
                  <span class="menu-title">Büşra Test2</span>
                </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item">
                <a href="/sistem-raporlari/dokuman-yonetimi/arsiv#" class="menu-link">
                  <span class="menu-icon w-auto">
                    <i class="fa-solid fa-calendar-days fs-6"></i>
                  </span>
                  <span class="menu-title">Cari Test</span>
                </a>
              </div>
              <!--end::Menu item-->
            </div>
            <!--end::Menu-->
          </div>
          <!--end::Menu col-->
          <!--begin::Content col-->
          <div class="col-12 col-lg-10 pt-5 pt-lg-0 ps-lg-5">
            <div id="contentCol">
              <!--begin::Form wrapper-->
              <div class="col-12 col-lg-10">
                <!--begin::Form-->
                <form>
                  <!--begin::Form table-->
                  <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                    <table class="table w-min-content w-100">
                      <tbody>
                        <!--begin::Row-->
                        <tr>
                          <td>
                            <label class="form-label fs-base" for="pw_belge_tipi">Belge Tipi</label>
                          </td>
                          <td>
                            <select class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2" data-placeholder="Seçim Yapın" id="pw_belge_tipi" name="pw_belge_tipi">
                              <option></option>
                              <option value="1" selected>Akçelik POC DK</option>
                              <option value="2">Option 2</option>
                            </select>
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td>
                            <label class="form-label fs-base" for="pw_belge_formati">Belge Formatı</label>
                          </td>
                          <td>
                            <input type="text" id="pw_belge_formati" class="form-control form-control-solid fs-8 py-3 px-4" name="pw_belge_formati" required="required" />
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td>
                            <label class="form-label fs-base" for="pw_arsivleyen">Arşivleyen</label>
                          </td>
                          <td>
                            <select class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2" data-placeholder="Seçim Yapın" id="pw_arsivleyen" name="pw_arsivleyen">
                              <option></option>
                              <option value="1">Option 1</option>
                              <option value="2">Option 2</option>
                            </select>
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Form actions row-->
                        <tr>
                          <td colspan="2" align="right">
                            <button type="submit" class="btn btn-primary fs-8 py-3 px-6">
                              Tamam
                            </button>
                          </td>
                        </tr>
                        <!--end::Form actions row-->
                      </tbody>
                    </table>
                  </div>
                  <!--end::Form table-->
                </form>
                <!--end::Form-->
              </div>
              <!--end::Form wrapper-->

              <!--begin::Table tabs wrapper-->
              <div class="table-reponsive overflow-x-auto mt-4">
                <!--begin::Table tabs-->
                <div class="nav nav-tabs nav-line-tabs fs-6" role="tablist">
                  <!--begin::Tab item-->
                  <li class="nav-item" role="presentation">
                    <a class="nav-link mx-0 py-3 px-10 fs-base rounded-0 fw-medium active" data-bs-toggle="tab" href="#pw_tab_pane_belgeler" aria-selected="true" role="tab">Belgeler</a>
                  </li>
                  <!--end::Tab item-->

                  <!--begin::Tab item-->
                  <li class="nav-item" role="presentation">
                    <a class="nav-link py-3 px-10 mx-0 fs-base fw-medium rounded-0 pw-text-neutral-500" data-bs-toggle="tab" href="#pw_tab_pane_belge_formatlari" aria-selected="false" role="tab" tabindex="-1">Belge Formatları</a>
                  </li>
                  <!--end::Tab item-->

                  <!--begin::Tab item-->
                  <li class="nav-item" role="presentation">
                    <a class="nav-link py-3 px-10 mx-0 fs-base fw-medium rounded-0 pw-text-neutral-500" data-bs-toggle="tab" href="#pw_tab_pane_aylik_grafikler" aria-selected="false" role="tab" tabindex="-1">Aylık Grafikler</a>
                  </li>
                  <!--end::Tab item-->
                </div>
                <!--end::Table tabs-->
              </div>
              <!--end::Table tabs wrapper-->

              <!--begin::Table tab contents-->
              <div class="tab-content pw-dashboard-tab-content mt-6" id="tableTabContents">
                <!--begin::Belgeler content-->
                <div class="tab-pane fade active show" id="pw_tab_pane_belgeler" role="tabpanel">
                  <!--begin::Belgeler table-->
                  <div class="table-responsive overflow-x-auto rounded">
                    <!--begin::Table-Light-->
                    <table class="table table-row-bordered border pw-dark-bg-table pw-table-border-gray table-rounded w-max-content min-w-100">
                      <!--begin::Table head-->
                      <thead>
                        <tr class="fw-semibold fs-8 pw-text-neutral-700 pw-bg-neutral-100">
                          <th class="py-3 px-9">Tip Adı</th>
                          <th class="py-3 px-9">Belge Formatı</th>
                          <th class="py-3 px-9">Arşivleyen</th>
                          <th class="py-3 px-9">Adet</th>
                          <th class="py-3 px-9">Boyut</th>
                        </tr>
                      </thead>
                      <!--end::Table head-->

                      <!--begin::Table body-->
                      <tbody>
                        <!--begin::Row-->
                        <tr class="fw-medium pw-text-neutral-700 fs-9">
                          <td class="py-6 px-9">Akçelik POC DK</td>
                          <td class="py-6 px-9">CARD</td>
                          <td class="py-6 px-9">Ahmet Metin Aykılıç</td>
                          <td class="py-6 px-9">1</td>
                          <td class="py-6 px-9">-</td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr class="fw-medium pw-text-neutral-700 fs-9">
                          <td class="py-6 px-9">Akçelik POC DK</td>
                          <td class="py-6 px-9">CARD</td>
                          <td class="py-6 px-9">Hafriyat Mühendisi</td>
                          <td class="py-6 px-9">1</td>
                          <td class="py-6 px-9">-</td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr class="fw-medium pw-text-neutral-700 fs-9">
                          <td class="py-6 px-9">Akçelik POC DK</td>
                          <td class="py-6 px-9">CARD</td>
                          <td class="py-6 px-9">Hayrettin Çağrı Şen</td>
                          <td class="py-6 px-9">1</td>
                          <td class="py-6 px-9">-</td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr class="fw-medium pw-text-neutral-700 fs-9">
                          <td class="py-6 px-9">Akçelik POC DK</td>
                          <td class="py-6 px-9">CARD</td>
                          <td class="py-6 px-9">Mesut Gürbüz</td>
                          <td class="py-6 px-9">1</td>
                          <td class="py-6 px-9">-</td>
                        </tr>
                        <!--end::Row-->
                      </tbody>
                      <!--end::Table body-->
                    </table>
                    <!--end::Table-Light-->
                  </div>
                  <!--end::Belgeler table-->

                  <!--begin::Table footer-->
                  <div class="d-flex flex-column-reverse flex-sm-row align-items-center align-items-sm-end justify-content-center justify-content-sm-between gap-8 gap-sm-4 my-10">
                    <!--begin::Information-->
                    <div class="d-flex flex-column flex-sm-row flex-wrap align-items-center gap-2 gap-sm-6 gap-md-9 fw-medium text-primary fs-8 justify-content-center justify-content-sm-start w-100">
                      <span>Toplam: 15 Adet</span>
                      <span>Boyut: 0</span>
                    </div>
                    <!--end::Information-->
                    <!--begin::Pagination-->
                    <ul class="pagination flex-nowrap flex-shrink-0">
                      <!--begin::Pagination item previous-->
                      <li class="page-item previous disabled"><a href="#" class="page-link pw-min-w-32px h-32px fs-8"><i class="previous"></i></a></li>
                      <!--end::Pagination item previous-->

                      <!--begin::Pagination-item-->
                      <li class="page-item active">
                        <a href="/sistem-raporlari/dokuman-yonetimi/arsiv#" class="page-link pw-min-w-32px h-32px fs-8">1</a>
                      </li>
                      <!--end::Pagination item-->

                      <!--begin::Pagination item-->
                      <li class="page-item">
                        <a href="/sistem-raporlari/dokuman-yonetimi/arsiv#" class="page-link pw-min-w-32px h-32px fs-8">2</a>
                      </li>
                      <!--end::Pagination item-->

                      <!--begin::Pagination item-->
                      <li class="page-item ">
                        <a href="/sistem-raporlari/dokuman-yonetimi/arsiv#" class="page-link pw-min-w-32px h-32px fs-8">3</a>
                      </li>
                      <!--end::Pagination item-->

                      <!--begin::Pagination item-->
                      <li class="page-item ">
                        <a href="/sistem-raporlari/dokuman-yonetimi/arsiv#" class="page-link pw-min-w-32px h-32px fs-8">4</a>
                      </li>
                      <!--end::Pagination item-->

                      <!--begin::Pagination item-->
                      <li class="page-item ">
                        <a href="/sistem-raporlari/dokuman-yonetimi/arsiv#" class="page-link pw-min-w-32px h-32px fs-8">5</a>
                      </li>
                      <!--end::Pagination item-->

                      <!--begin::Pagination item-->
                      <li class="page-item ">
                        <a href="/sistem-raporlari/dokuman-yonetimi/arsiv#" class="page-link pw-min-w-32px h-32px fs-8">6</a>
                      </li>
                      <!--end::Pagination item-->

                      <!--begin::Pagination item-->
                      <li class="page-item next">
                        <a href="/sistem-raporlari/dokuman-yonetimi/arsiv#" class="page-link pw-min-w-32px h-32px fs-8"><i class="next"></i></a>
                      </li>
                      <!--end::Pagination item-->
                    </ul>
                    <!--end::Pagination-->
                  </div>
                  <!--end::Table footer-->
                </div>
                <!--end::Belgeler content-->

                <!--begin::Belge formatları content-->
                <div class="tab-pane fade" id="pw_tab_pane_belge_formatlari" role="tabpanel">
                  <!--begin::Card-->
                  <div class="position-relative w-100 h-500px rounded-3 pw-shadow-1 py-4 px-4">
                    <!--begin::Belge formatları tab wrapper-->
                    <div class="position-absolute rounded border border-2 pw-border-stroke p-1 bg-white" style="right: 2rem; top:0.81rem">
                      <!--begin::Belge formatları tabs-->
                      <div class="nav nav-tabs nav-pills pw-nav-pills fs-6" role="tablist">
                        <!--begin::Tab item-->
                        <li class="nav-item" role="presentation">
                          <a class="nav-link mx-0 py-1 px-8 fs-base rounded fw-medium active" data-bs-toggle="tab" href="#pw_tab_pane_belge_formatlari_adet" aria-selected="true" role="tab">Adet</a>
                        </li>
                        <!--end::Tab item-->

                        <!--begin::Tab item-->
                        <li class="nav-item" role="presentation">
                          <a class="nav-link py-1 px-8 mx-0 fs-base fw-medium rounded pw-text-neutral-500" data-bs-toggle="tab" href="#pw_tab_pane_belge_formatlari_boyut" aria-selected="false" role="tab" tabindex="-1">Boyut</a>
                        </li>
                        <!--end::Tab item-->
                      </div>
                      <!--end::Belge formatları tabs-->
                    </div>
                    <!--end::Belge formatları tab wrapper-->

                    <!--begin::Belge formatları tab contents-->
                    <div class="tab-content pw-dashboard-tab-content mt-6" id="belgeFormatlariTabContents">
                      <!--begin::Adet content-->
                      <div class="tab-pane fade active show" id="pw_tab_pane_belge_formatlari_adet" role="tabpanel">
                        Adet
                      </div>
                      <!--end::Adet content-->

                      <!--begin::Boyut content-->
                      <div class="tab-pane fade" id="pw_tab_pane_belge_formatlari_boyut" role="tabpanel">
                        Boyut
                      </div>
                      <!--end::Boyut content-->
                    </div>
                    <!--end::Belge formatları tab contents-->
                  </div>
                  <!--end::Card-->
                </div>
                <!--end::Belge formatları content-->

                <!--begin::Aylık Grafikler content-->
                <div class="tab-pane fade" id="pw_tab_pane_aylik_grafikler" role="tabpanel">
                  <!--begin::Card-->
                  <div class="position-relative w-100 h-500px rounded-3 pw-shadow-1 py-4 px-4">
                    <!--begin::Aylık Grafikler tab wrapper-->
                    <div class="position-absolute rounded border border-2 pw-border-stroke p-1 bg-white" style="right: 2rem; top:0.81rem">
                      <!--begin::Aylık Grafikler tabs-->
                      <div class="nav nav-tabs nav-pills pw-nav-pills fs-6" role="tablist">
                        <!--begin::Tab item-->
                        <li class="nav-item" role="presentation">
                          <a class="nav-link mx-0 py-1 px-8 fs-base rounded fw-medium active" data-bs-toggle="tab" href="#pw_tab_pane_aylik_grafikler_adet" aria-selected="true" role="tab">Adet</a>
                        </li>
                        <!--end::Tab item-->

                        <!--begin::Tab item-->
                        <li class="nav-item" role="presentation">
                          <a class="nav-link py-1 px-8 mx-0 fs-base fw-medium rounded pw-text-neutral-500" data-bs-toggle="tab" href="#pw_tab_pane_aylik_grafikler_boyut" aria-selected="false" role="tab" tabindex="-1">Boyut</a>
                        </li>
                        <!--end::Tab item-->
                      </div>
                      <!--end::Aylık Grafikler tabs-->
                    </div>
                    <!--end::Aylık Grafikler tab wrapper-->

                    <!--begin::Aylık Grafikler tab contents-->
                    <div class="tab-content pw-dashboard-tab-content mt-6" id="aylikGrafiklerContents">
                      <!--begin::Adet content-->
                      <div class="tab-pane fade active show" id="pw_tab_pane_aylik_grafikler_adet" role="tabpanel">
                        <canvas id="pw_aylik_grafikler_adet_line_chart" class="mh-400px"></canvas>
                      </div>
                      <!--end::Adet content-->

                      <!--begin::Boyut content-->
                      <div class="tab-pane fade" id="pw_tab_pane_aylik_grafikler_boyut" role="tabpanel">
                        Boyut
                      </div>
                      <!--end::Boyut content-->
                    </div>
                    <!--end::Aylık Grafikler tab contents-->
                  </div>
                  <!--end::Card-->
                </div>
                <!--end::Aylık Grafikler content-->
              </div>
              <!--end::Table tab contents-->
            </div>
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

<!--begin::Fix menu hieght-->
<script>
  window.addEventListener('load', () => {
    const menuCol = document.getElementById('menuCol');
    const contentCol = document.getElementById('contentCol');
    menuCol.style.maxHeight = contentCol.clientHeight + 'px';
  })
</script>
<!--end::Fix menu hieght-->

<script>
  window.addEventListener('DOMContentLoaded', () => {
    var ctx = document.getElementById('pw_aylik_grafikler_adet_line_chart');

    // Define colors
    var primaryColor = KTUtil.getCssVariableValue('--kt-primary');
    var dangerColor = KTUtil.getCssVariableValue('--kt-danger');

    // Define fonts
    var fontFamily = KTUtil.getCssVariableValue('--bs-font-sans-serif');

    // Chart labels
    const labels = ['12/1', '12/5', '12/9', '12/13', '12/17', '12/21', '12/25', '12/29'];

    // Chart data
    const data = {
      labels: labels,
      datasets: [{
        data: [{x: '12/1', y: 13,}, {x: '12/29', y: 2}],
        borderWidth: 1,
        borderColor: KTUtil.getCssVariableValue('--pw-primary-500'),
        backgroundColor: KTUtil.getCssVariableValue('--pw-primary-500'),
      }],
    };

    // Chart config
    const config = {
      type: 'line',
      data: data,
      options: {
        plugins: {
          title: {
            display: true,
          }
        },
        responsive: true,
      },
      defaults: {
        global: {
          defaultFont: fontFamily
        }
      }
    };

    // Init ChartJS -- for more info, please visit: https://www.chartjs.org/docs/latest/
    var myChart = new Chart(ctx, config);
  })
</script>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/foot.php'; ?>