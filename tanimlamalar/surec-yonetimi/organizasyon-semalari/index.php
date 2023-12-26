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
            <li class="breadcrumb-item active">Organizasyon Şemaları</li>
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

        <!--begin::Dropdown wrapper-->
        <div class="app-navbar-item ms-1 ms-md-3">
          <!--begin::Menu toggle-->
          <a href="#" class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px" data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
            <i class="fa-solid fa-ellipsis-vertical fs-4"></i>
          </a>
          <!--begin::Menu toggle-->
          <!--begin::Menu-->
          <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-200px" data-kt-menu="true" data-kt-element="theme-mode-menu">
            <!--begin::Menu item-->
            <div class="menu-item px-3 my-0">
              <a href="#" class="menu-link px-3 py-2 fs-8">
                <span class="menu-title">Açılış Sayfası Yap</span>
              </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item px-3 my-0">
              <a href="#" class="menu-link px-3 py-2 fs-8">
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

    <!--begin::Actionbar-->
    <div class="d-flex align-items-center gap-5 border-top border-bottom pw-border-neutral-200 px-6 py-2 my-4">
      <div class="font-poppins fs-8 pw-text-neutral-900 fw-bold py-1 border-end pw-border-neutral-200 pe-5">
      60 Organizasyon Şeması
      </div>
      <a href="/tanimlamalar/surec-yonetimi/organizasyon-semalari/yeni-ekle/" type="button" class="btn p-0" >
        <span class="btn p-0 fs-9 fs-semibold d-inline-flex align-items-center gap-2" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="bottom" title="Yeni Organizasyon Ekle">
            <i class="fa-solid fa-sitemap"></i>
        </span>
      </a>
    </div>
    <!--end::Actionbar-->

    <!--begin::Content -->
    <div class="col-12 col-md-11 mb-20 px-6 pb-6">
      <!--begin::Search wrapper-->
      <div id="kt_docs_search_handler_basic" class="w-100 mw-300px mb-3" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="true" data-kt-search-layout="inline">

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
          <input type="text" class="form-control pw-input-stroke py-2 ps-9 pe-2 fs-8" name="search" value="" placeholder="Ara" data-kt-search-element="input" />
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
      <!--begin::Departmanlar tablosu-->
      <div class="table-responsive overflow-x-auto rounded">
        <!--begin::Table-Light-->
        <table class="table table-row-bordered border pw-table-border-gray table-rounded align-middle w-max-content min-w-100 gy-2 gx-9 gs-9">
          <thead>
            <tr class="fw-semibold fs-8 pw-text-neutral-700 pw-bg-neutral-100">
              <th class="py-3">Organizasyon Şeması</th>
              <th class="py-3">Kullanıldığı akış Sayısı</th>
              <th class="py-3">Açıklama</th>
              <th class="py-3"></th>
            </tr>
          </thead>
          <tbody>
            <!--begin::Row-->
            <tr class="fw-medium pw-text-neutral-700 fs-8">
              <td>
                <div class="d-flex align-items-center flex-nowrap gap-2">
                  <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                  <i class="fa-solid fa-sitemap fs-7 pw-text-brand"></i>
                  </div>
                  <div>
                     000-ONS ORGANİZASYON ŞEMASI V1
                  </div>
                </div>
              </td>
              <td>-</td>
              <td>
                -
              </td>
              <td align="right">
              <!--end::Menu wrapper-->
              <a href="tanimlamalar/surec-yonetimi/organizasyon-semalari/#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5" data-bs-toggle="modal" data-bs-target="#yeni-organisasyon-ekle">
                <i class="fa-solid fa-eye fs-7 text-primary"></i>
              </a>
              <a href="tanimlamalar/surec-yonetimi/organizasyon-semalari/#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5" data-bs-toggle="modal" data-bs-target="#arastırma-merkezi-arsiv">
                <i class="fa-solid fa-pen-to-square fs-7 text-primary"></i>
              </a>
              <a href="tanimlamalar/surec-yonetimi/organizasyon-semalari/#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                <i class="fa-solid fa-trash fs-7 text-primary"></i>
              </a>
            </td>
            </tr>
            <!--end::Row-->
              <!--begin::Row-->
              <tr class="fw-medium pw-text-neutral-700 fs-8">
              <td>
                <div class="d-flex align-items-center flex-nowrap gap-2">
                  <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                  <i class="fa-solid fa-sitemap fs-7 pw-text-brand"></i>
                  </div>
                  <div>
                     000-ONS ORGANİZASYON ŞEMASI V1
                  </div>
                </div>
              </td>
              <td>-</td>
              <td>
                -
              </td>
              <td align="right">
              <!--end::Menu wrapper-->
              <a href="tanimlamalar/surec-yonetimi/organizasyon-semalari/#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                <i class="fa-solid fa-eye fs-7 text-primary"></i>
              </a>
              <a href="tanimlamalar/surec-yonetimi/organizasyon-semalari/#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5" data-bs-toggle="modal" data-bs-target="#arastırma-merkezi-arsiv">
                <i class="fa-solid fa-pen-to-square fs-7 text-primary"></i>
              </a>
              <a href="tanimlamalar/surec-yonetimi/organizasyon-semalari/#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                <i class="fa-solid fa-trash fs-7 text-primary"></i>
              </a>
            </td>
            </tr>
            <!--end::Row-->
              <!--begin::Row-->
              <tr class="fw-medium pw-text-neutral-700 fs-8">
              <td>
                <div class="d-flex align-items-center flex-nowrap gap-2">
                  <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                  <i class="fa-solid fa-sitemap fs-7 pw-text-brand"></i>
                  </div>
                  <div>
                  2023 Organizasyon Şeması
                  </div>
                </div>
              </td>
              <td>-</td>
              <td>
              Lorem ipsum dolor sit ame...
              </td>
              <td align="right">
              <!--end::Menu wrapper-->
              <a href="tanimlamalar/surec-yonetimi/organizasyon-semalari/#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                <i class="fa-solid fa-eye fs-7 text-primary"></i>
              </a>
              <a href="tanimlamalar/surec-yonetimi/organizasyon-semalari/#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5" data-bs-toggle="modal" data-bs-target="#arastırma-merkezi-arsiv">
                <i class="fa-solid fa-pen-to-square fs-7 text-primary"></i>
              </a>
              <a href="tanimlamalar/surec-yonetimi/organizasyon-semalari/#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                <i class="fa-solid fa-trash fs-7 text-primary"></i>
              </a>
            </td>
            </tr>
            <!--end::Row-->
              <!--begin::Row-->
              <tr class="fw-medium pw-text-neutral-700 fs-8">
              <td>
                <div class="d-flex align-items-center flex-nowrap gap-2">
                  <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                  <i class="fa-solid fa-sitemap fs-7 pw-text-brand"></i>
                  </div>
                  <div>
                  Akfen Holding Organizasyon Şeması
                  </div>
                </div>
              </td>
              <td>18</td>
              <td>
              Lorem ipsum dolor sit ame...
              </td>
              <td align="right">
              <!--end::Menu wrapper-->
              <a href="tanimlamalar/surec-yonetimi/organizasyon-semalari/#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                <i class="fa-solid fa-eye fs-7 text-primary"></i>
              </a>
              <a href="tanimlamalar/surec-yonetimi/organizasyon-semalari/#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5" data-bs-toggle="modal" data-bs-target="#arastırma-merkezi-arsiv">
                <i class="fa-solid fa-pen-to-square fs-7 text-primary"></i>
              </a>
              <a href="tanimlamalar/surec-yonetimi/organizasyon-semalari/#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                <i class="fa-solid fa-trash fs-7 text-primary"></i>
              </a>
            </td>
            </tr>
            <!--end::Row-->
              <!--begin::Row-->
              <tr class="fw-medium pw-text-neutral-700 fs-8">
              <td>
                <div class="d-flex align-items-center flex-nowrap gap-2">
                  <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                  <i class="fa-solid fa-sitemap fs-7 pw-text-brand"></i>
                  </div>
                  <div>
                  AKSA Jeneratör
                  </div>
                </div>
              </td>
              <td>-</td>
              <td>
                5
              </td>
              <td align="right">
              <!--end::Menu wrapper-->
              <a href="tanimlamalar/surec-yonetimi/organizasyon-semalari/#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                <i class="fa-solid fa-eye fs-7 text-primary"></i>
              </a>
              <a href="tanimlamalar/surec-yonetimi/organizasyon-semalari/#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5" data-bs-toggle="modal" data-bs-target="#arastırma-merkezi-arsiv">
                <i class="fa-solid fa-pen-to-square fs-7 text-primary"></i>
              </a>
              <a href="tanimlamalar/surec-yonetimi/organizasyon-semalari/#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                <i class="fa-solid fa-trash fs-7 text-primary"></i>
              </a>
            </td>
            </tr>
            <!--end::Row-->
              <!--begin::Row-->
              <tr class="fw-medium pw-text-neutral-700 fs-8">
              <td>
                <div class="d-flex align-items-center flex-nowrap gap-2">
                  <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                  <i class="fa-solid fa-sitemap fs-7 pw-text-brand"></i>
                  </div>
                  <div>
                  ASC Hukuk Organizasyon Şeması
                  </div>
                </div>
              </td>
              <td>-</td>
              <td>
                -
              </td>
              <td align="right">
              <!--end::Menu wrapper-->
              <a href="tanimlamalar/surec-yonetimi/organizasyon-semalari/#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                <i class="fa-solid fa-eye fs-7 text-primary"></i>
              </a>
              <a href="tanimlamalar/surec-yonetimi/organizasyon-semalari/#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5" data-bs-toggle="modal" data-bs-target="#arastırma-merkezi-arsiv">
                <i class="fa-solid fa-pen-to-square fs-7 text-primary"></i>
              </a>
              <a href="tanimlamalar/surec-yonetimi/organizasyon-semalari/#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                <i class="fa-solid fa-trash fs-7 text-primary"></i>
              </a>
            </td>
            </tr>
            <!--end::Row-->
          </tbody>
        </table>
        <!--end::Table-Dark-->


      </div>
      <!--end::Departmanlar tablosu-->
    </div>
    <!--end::Content -->
    <!--end::Content wrapper-->
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/footer.php'; ?>
  </div>
  <!--end::Main-->

</div>
<!--end::Wrapper -->

<!--begin::Modal-->
<div class="modal fade" tabindex="-1" id="yeni-organisasyon-ekle">
  <div class="modal-dialog modal-dialog-centered modal-lg mw-650px">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title">Araştırma Merkezi Arşiv</h2>
      </div>

      <div class="modal-body">
        <!--begin::Modal tabs-->
        <ul class="nav nav-tabs nav-line-tabs px-8 mb-5 fs-6" role="tablist">
          <!--begin::Nav item-->
          <li class="nav-item" role="presentation">
            <a class="nav-link fw-medium py-1 px-4 me-0 active" data-bs-toggle="tab" href="#pw_tab_pane_detaylar" aria-selected="true" role="tab">
              Detaylar
            </a>
          </li>
          <!--end::Nav item-->

          <!--begin::Nav item-->
          <li class="nav-item" role="presentation">
            <a class="nav-link fw-medium py-1 px-4 me-0" data-bs-toggle="tab" href="#pw_tab_pane_tarihce" aria-selected="false" role="tab" tabindex="-1">
              Tarihçe
            </a>
          </li>
          <!--end::Nav item-->
        </ul>
        <!--end::Modal tabs-->

        <!--begin::Modal tabs contents-->
        <div class="tab-content" id="eFaturaTabContent">

          <!--begin::Detaylar content-->
          <div class="tab-pane fade show active" id="pw_tab_pane_detaylar" role="tabpanel">
            <form>
              <div class="table-responsive">
                <table class="table">
                  <tbody>
                    <!--begin::Row-->
                    <tr>
                      <td>
                        <label class="fs-8 fw-bolder" for="organizasyon-adi">Organizasyon Şeması</label>
                      </td>
                      <td>
                        <input id="organizasyon-adi" type="text" class="form-control form-control-solid mb-3 mw-md-375px w-100 fs-8" name="organizasyon-adi" />
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td>
                        <label class="fs-8 fw-bolder" for="kullanildigi-akislar">Kullanıldığı Akışlar</label>
                      </td>
                      <td>
                      <textarea id="kullanildigi-akislar" class="form-control form-control-solid mb-8 fs-8" rows="3" placeholder=""></textarea>
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td>
                        <label class="fs-8 fw-bolder" for="aciklama">Açıklama</label>
                      </td>
                      <td>
                      <input id="aciklama" type="text" class="form-control form-control-solid mb-3 mw-md-375px w-100 fs-8" name="kullanildigi-akislar" />
                      </td>
                    </tr>
                    <!--end::Row-->
                  </tbody>
                </table>
              </div>
            </form>
          </div>
          <!--end::Detaylar content-->

          <!--begin::Tarihçe content-->
          <div class="tab-pane fade" id="pw_tab_pane_tarihce" role="tabpanel">
            <div class="d-flex flex-column gap-6">
              <!--begin::History item-->
              <a href="#" class="d-flex align-items-center gap-3">
                <div class="d-inline-flex align-items-center justify-content-center w-40px h-40px pw-bg-primary-100 rounded-circle flex-shrink-0">
                  <i class="fa-solid fa-file-plus pw-text-primary"></i>
                </div>
                <div class="d-flex flex-column gap-1">
                  <div class="fs-9 pw-text-neutral-800 fw-medium"><b>BT Eyüp</b> isimli belge taslağı <b>Eyüp Tarık Doğan</b> tarafından eklendi.</div>
                  <div class="d-flex align-items-center gap-1 fs-9 pw-text-neutral-500">
                    <span>27.02.2023</span>
                    <span>|</span>
                    <span>11:39:32</span>
                  </div>
                </div>
              </a>
              <!--end::History item-->

              <!--begin::History item-->
              <a href="#" class="d-flex align-items-center gap-3">
                <div class="d-inline-flex align-items-center justify-content-center w-40px h-40px pw-bg-primary-100 rounded-circle flex-shrink-0">
                  <i class="fa-solid fa-pen-to-square pw-text-primary"></i>
                </div>
                <div class="d-flex flex-column gap-1">
                  <div class="fs-9 pw-text-neutral-800 fw-medium"><b>Özlük Dosyaları Belge Taslağı</b> isimli belge taslağı <b>Eyüp Tarık Doğan</b> tarafından değiştirildi.</div>
                  <div class="d-flex align-items-center gap-1 fs-9 pw-text-neutral-500">
                    <span>27.02.2023</span>
                    <span>|</span>
                    <span>11:39:32</span>
                  </div>
                </div>
              </a>
              <!--end::History item-->

              <!--begin::History item-->
              <a href="#" class="d-flex align-items-center gap-3">
                <div class="d-inline-flex align-items-center justify-content-center w-40px h-40px pw-bg-primary-100 rounded-circle flex-shrink-0">
                  <i class="fa-solid fa-file-plus pw-text-primary"></i>
                </div>
                <div class="d-flex flex-column gap-1">
                  <div class="fs-9 pw-text-neutral-800 fw-medium"><b>ÇORUH PSS İPTAL SÜRECİ HATALI- İPTAL CEVAP YAZISI</b> isimli belge taslağı <b>Süreyya Borhan</b> tarafından eklendi.</div>
                  <div class="d-flex align-items-center gap-1 fs-9 pw-text-neutral-500">
                    <span>27.02.2023</span>
                    <span>|</span>
                    <span>11:39:32</span>
                  </div>
                </div>
              </a>
              <!--end::History item-->

              <!--begin::History item-->
              <a href="#" class="d-flex align-items-center gap-3">
                <div class="d-inline-flex align-items-center justify-content-center w-40px h-40px pw-bg-primary-100 rounded-circle flex-shrink-0">
                  <i class="fa-solid fa-pen-to-square pw-text-primary"></i>
                </div>
                <div class="d-flex flex-column gap-1">
                  <div class="fs-9 pw-text-neutral-800 fw-medium"><b>PSS-Belge Taslağı 2</b> isimli belge taslağı <b>Remzi Gölgeli</b> tarafından değiştirildi.</div>
                  <div class="d-flex align-items-center gap-1 fs-9 pw-text-neutral-500">
                    <span>27.02.2023</span>
                    <span>|</span>
                    <span>11:39:32</span>
                  </div>
                </div>
              </a>
              <!--end::History item-->

              <!--begin::History item-->
              <a href="#" class="d-flex align-items-center gap-3">
                <div class="d-inline-flex align-items-center justify-content-center w-40px h-40px pw-bg-primary-100 rounded-circle flex-shrink-0">
                  <i class="fa-solid fa-trash pw-text-primary"></i>
                </div>
                <div class="d-flex flex-column gap-1">
                  <div class="fs-9 pw-text-neutral-800 fw-medium"><b>Taslak1</b> isimli belge taslağı <b>Eyüp Tarık Doğan</b> tarafından silindi.</div>
                  <div class="d-flex align-items-center gap-1 fs-9 pw-text-neutral-500">
                    <span>27.02.2023</span>
                    <span>|</span>
                    <span>11:39:32</span>
                  </div>
                </div>
              </a>
              <!--end::History item-->
            </div>
          </div>
          <!--end::Tarihçe content-->

        </div>
        <!--end::Modal tabs contents-->
      </div>
    </div>
  </div>
</div>
<!--end::Modal-->

<!--begin::Drawers-->
<!--begin::History & Recent canvas trigger-->
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/history-drawer.php'; ?>
<!--end::History canvas-->
<!--end::Drawers-->


<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/foot.php'; ?>