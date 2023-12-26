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
            <li class="breadcrumb-item active">ISDD Tanımları</li>
            <!--end::Item-->
          </ul>
          <!--end::Breadcrumb-->
          <!--begin::Title-->
          <h1 class="page-heading d-flex text-dark fw-bold fs-4 flex-column justify-content-center my-0">
            ISDD Tanımları
          </h1>
          <!--end::Title-->
        </div>
        <!--end::Page title-->

      </div>
      <!--end::Toolbar container-->
    </div>
    <!--end::Toolbar-->

    <!--begin::Content -->
    <div class="col-12 col-md-11 mb-20 pe-6 pb-6 mt-8">
      <!--begin::Content layout-->
      <div class="d-grid grid-template-columns-1fr grid-template-columns-lg-300px-1fr">
        <!--begin::ISDD Nav-->
        <ul id="pw-issd-tabs" class="nav nav-tabs flex-nowrap flex-column border-lg-end pw-border-stroke border-lg-bottom-0 border-bottom-1 mb-6 mb-lg-0 scroll h-100 mh-700px">
          <!--begin::Nav item-->
          <li class="nav-item">
            <a class="nav-link w-100 btn btn-flex btn-active-light-primary btn-active-line-hover-primary rounded-0.25rem py-3 px-5">
              <div class="form-check mb-0" data-bs-toggle="modal" data-bs-target="#kullanici-tanimli">
                <input class="form-check-input bg-blue" type="checkbox" value="" id="pw_isdd_kullanici_tanimli" />
                <label class="form-check-label fs-8 fw-semibold pw-text-neutral-800" for="pw_isdd_kullanici_tanimli">
                  Kullanıcı Tanımlı
                </label>
              </div>
            </a>
          </li>
          <!--end::Nav item-->

          <!--begin::Nav item-->
          <li class="nav-item">
            <a class="nav-link w-100 btn btn-flex btn-active-light-primary btn-active-line-hover-primary rounded-0.25rem py-3 px-5">
              <div class="form-check mb-0" data-bs-toggle="modal" data-bs-target="#kisi-dahil-et">
                <input class="form-check-input bg-blue" type="checkbox" value="" id="pw_isdd_kisi" />
                <label class="form-check-label fs-8 fw-semibold pw-text-neutral-800" for="pw_isdd_kisi">
                  Kişi
                </label>
              </div>
            </a>
          </li>
          <!--end::Nav item-->

          <!--begin::Nav item-->
          <li class="nav-item">
            <a class="nav-link w-100 btn btn-flex btn-active-light-primary btn-active-line-hover-primary rounded-0.25rem py-3 px-5">
              <div class="form-check mb-0" data-bs-toggle="modal" data-bs-target="#oraganizasyon">
                <label class="form-check-label fs-8 fw-semibold pw-text-neutral-800" for="pw_isdd_organizasyon">
                  Organizasyon
                </label>
              </div>
            </a>
          </li>
          <!--end::Nav item-->

          <!--begin::Nav item-->
          <li class="nav-item">
            <a class="nav-link w-100 btn btn-flex btn-active-light-primary btn-active-line-hover-primary rounded-0.25rem py-3 px-5">
              <div class="form-check mb-0" data-bs-toggle="modal" data-bs-target="#lokasyon">
                <input class="form-check-input bg-blue" type="checkbox" value="" id="pw_isdd_lokasyon" />
                <label class="form-check-label fs-8 fw-semibold pw-text-neutral-800" for="pw_isdd_lokasyon">
                  Lokasyon
                </label>
              </div>
            </a>
          </li>
          <!--end::Nav item-->

          <!--begin::Nav item-->
          <li class="nav-item">
            <a class="nav-link w-100 btn btn-flex btn-active-light-primary btn-active-line-hover-primary rounded-0.25rem py-3 px-5">
              <div class="form-check mb-0" data-bs-toggle="modal" data-bs-target="#kan-grubu">
                <input class="form-check-input bg-blue" type="checkbox" value="" id="pw_isdd_kan_grubu" />
                <label class="form-check-label fs-8 fw-semibold pw-text-neutral-800" for="pw_isdd_kan_grubu">
                  Kan Grubu
                </label>
              </div>
            </a>
          </li>
          <!--end::Nav item-->

          <!--begin::Nav item-->
          <li class="nav-item">
            <a class="nav-link w-100 btn btn-flex btn-active-light-primary btn-active-line-hover-primary rounded-0.25rem py-3 px-5">
              <div class="form-check mb-0" data-bs-toggle="modal" data-bs-target="#kredi-karti">
                <label class="form-check-label fs-8 fw-semibold pw-text-neutral-800" for="pw_isdd_kredi_karti">
                  Kredi Kartı
                </label>
              </div>
            </a>
          </li>
          <!--end::Nav item-->

          <!--begin::Nav item-->
          <li class="nav-item">
            <a class="nav-link w-100 btn btn-flex btn-active-light-primary btn-active-line-hover-primary rounded-0.25rem py-3 px-5">
              <div class="form-check mb-0" data-bs-toggle="modal" data-bs-target="#tarih">
                <label class="form-check-label fs-8 fw-semibold pw-text-neutral-800" for="pw_isdd_tarih">
                  Tarih
                </label>
              </div>
            </a>
          </li>
          <!--end::Nav item-->

          <!--begin::Nav item-->
          <li class="nav-item">
            <a class="nav-link w-100 btn btn-flex btn-active-light-primary btn-active-line-hover-primary rounded-0.25rem py-3 px-5">
              <div class="form-check mb-0" data-bs-toggle="modal" data-bs-target="#eloktronik-posta">
                <label class="form-check-label fs-8 fw-semibold pw-text-neutral-800" for="pw_isdd_e_posta">
                  Elektronik Posta
                </label>
              </div>
            </a>
          </li>
          <!--end::Nav item-->

          <!--begin::Nav item-->
          <li class="nav-item">
            <a class="nav-link w-100 btn btn-flex btn-active-light-primary btn-active-line-hover-primary rounded-0.25rem py-3 px-5">
              <div class="form-check mb-0" data-bs-toggle="modal" data-bs-target="#yuz-resmi">
                <label class="form-check-label fs-8 fw-semibold pw-text-neutral-800" for="pw_isdd_yuz_resmi">
                  Yüz Resmi
                </label>
              </div>
            </a>
          </li>
          <!--end::Nav item-->

          <!--begin::Nav item-->
          <li class="nav-item">
            <a class="nav-link w-100 btn btn-flex btn-active-light-primary btn-active-line-hover-primary rounded-0.25rem py-3 px-5">
              <div class="form-check mb-0" data-bs-toggle="modal" data-bs-target="#iban">
                <label class="form-check-label fs-8 fw-semibold pw-text-neutral-800" for="pw_isdd_iban">
                  IBAN
                </label>
              </div>
            </a>
          </li>
          <!--end::Nav item-->

          <!--begin::Nav item-->
          <li class="nav-item">
            <a class="nav-link w-100 btn btn-flex btn-active-light-primary btn-active-line-hover-primary rounded-0.25rem py-3 px-5">
              <div class="form-check mb-0" data-bs-toggle="modal" data-bs-target="#ip-adresi">
                <label class="form-check-label fs-8 fw-semibold pw-text-neutral-800" for="pw_isdd_ip_adresi">
                  IP Adresi
                </label>
              </div>
            </a>
          </li>
          <!--end::Nav item-->
        </ul>
        <!--end::ISDD Nav-->


        <!--begin::Content-->
        <div>
          <!--begin::Kişiler tab-->
          <ul class="nav nav-tabs nav-line-tabs px-8 mb-5 fs-6" role="tablist">
            <!--begin::Nav item-->
            <li class="nav-item" role="presentation">
              <a class="nav-link fw-medium py-1 px-4 me-0 active" data-bs-toggle="tab" href="#pw_tab_pane_dahil_edilen_kisiler" aria-selected="true" role="tab">
                Dahil Edilen Kişiler
              </a>
            </li>
            <!--end::Nav item-->

            <!--begin::Nav item-->
            <li class="nav-item" role="presentation">
              <a class="nav-link fw-medium py-1 px-4 me-0" data-bs-toggle="tab" href="#pw_tab_pane_haric_tutlan_kisiler" aria-selected="false" role="tab" tabindex="-1">
                Hariç Tutlan Kişiler
              </a>
            </li>
            <!--end::Nav item-->
          </ul>
          <!--end::Kişiler tab-->
          <!--begin::Kişiler tab contents-->
          <div class="tab-content py-10 px-8">
            <!--begin::Dahil edilen kişiler-->
            <div class="tab-pane fade show active" id="pw_tab_pane_dahil_edilen_kisiler" role="tabpanel">
              <div class="table-responsive overflow-x-auto rounded">
                <!--begin::Table-Light-->
                <table class="table table-row-bordered border pw-dark-bg-table pw-table-border-gray pw-table-border-gray table-rounded align-middle w-max-content min-w-100 gy-2 gx-9 gs-9">
                  <thead>
                    <tr class="fw-semibold fs-8 pw-text-neutral-700 pw-bg-neutral-100">
                      <th class="py-3">Kişileri Dahil Et</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!--begin::Row-->
                    <tr class="fw-medium pw-text-neutral-700 fs-8">
                      <td>
                        <div class="d-flex align-items-center flex-nowrap gap-2">
                          <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                            <i class="fa-solid fa-user pw-text-primary-500"></i>
                          </div>
                          <div>
                            Zekiye Sülüşoğlu
                          </div>
                        </div>
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr class="fw-medium pw-text-neutral-700 fs-8">
                      <td>
                        <div class="d-flex align-items-center flex-nowrap gap-2">
                          <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                            <i class="fa-solid fa-user pw-text-primary-500"></i>
                          </div>
                          <div>
                            Zekiye Sülüşoğlu
                          </div>
                        </div>
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr class="fw-medium pw-text-neutral-700 fs-8">
                      <td>
                        <div class="d-flex align-items-center flex-nowrap gap-2">
                          <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                            <i class="fa-solid fa-user pw-text-primary-500"></i>
                          </div>
                          <div>
                            Zekiye Sülüşoğlu
                          </div>
                        </div>
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr class="fw-medium pw-text-neutral-700 fs-8">
                      <td>
                        <div class="d-flex align-items-center flex-nowrap gap-2">
                          <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                            <i class="fa-solid fa-user pw-text-primary-500"></i>
                          </div>
                          <div>
                            Zekiye Sülüşoğlu
                          </div>
                        </div>
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr class="fw-medium pw-text-neutral-700 fs-8">
                      <td>
                        <div class="d-flex align-items-center flex-nowrap gap-2">
                          <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                            <i class="fa-solid fa-user pw-text-primary-500"></i>
                          </div>
                          <div>
                            Zekiye Sülüşoğlu
                          </div>
                        </div>
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr class="fw-medium pw-text-neutral-700 fs-8">
                      <td>
                        <div class="d-flex align-items-center flex-nowrap gap-2">
                          <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                            <i class="fa-solid fa-user pw-text-primary-500"></i>
                          </div>
                          <div>
                            Zekiye Sülüşoğlu
                          </div>
                        </div>
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr class="fw-medium pw-text-neutral-700 fs-8">
                      <td>
                        <div class="d-flex align-items-center flex-nowrap gap-2">
                          <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                            <i class="fa-solid fa-user pw-text-primary-500"></i>
                          </div>
                          <div>
                            Zekiye Sülüşoğlu
                          </div>
                        </div>
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr class="fw-medium pw-text-neutral-700 fs-8">
                      <td>
                        <div class="d-flex align-items-center flex-nowrap gap-2">
                          <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                            <i class="fa-solid fa-user pw-text-primary-500"></i>
                          </div>
                          <div>
                            Zekiye Sülüşoğlu
                          </div>
                        </div>
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr class="fw-medium pw-text-neutral-700 fs-8">
                      <td>
                        <div class="d-flex align-items-center flex-nowrap gap-2">
                          <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                            <i class="fa-solid fa-user pw-text-primary-500"></i>
                          </div>
                          <div>
                            Zekiye Sülüşoğlu
                          </div>
                        </div>
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr class="fw-medium pw-text-neutral-700 fs-8">
                      <td>
                        <div class="d-flex align-items-center flex-nowrap gap-2">
                          <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                            <i class="fa-solid fa-user pw-text-primary-500"></i>
                          </div>
                          <div>
                            Zekiye Sülüşoğlu
                          </div>
                        </div>
                      </td>
                    </tr>
                    <!--end::Row-->
                  </tbody>
                </table>
                <!--end::Table-Light-->
              </div>
            </div>
            <!--end::Dahil edilen kişiler-->

            <!--begin::Hariç Tutulan kişiler-->
            <div class="tab-pane fade" id="pw_tab_pane_haric_tutlan_kisiler" role="tabpanel">
              <div class="table-responsive overflow-x-auto rounded">
                <!--begin::Table-Light-->
                <table class="table table-row-bordered border pw-dark-bg-table pw-table-border-gray pw-table-border-gray table-rounded align-middle w-max-content min-w-100 gy-2 gx-9 gs-9">
                  <thead>
                    <tr class="fw-semibold fs-8 pw-text-neutral-700 pw-bg-neutral-100">
                      <th class="py-3">Kişileri Hariç Tut</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!--begin::Row-->
                    <tr class="fw-medium pw-text-neutral-700 fs-8">
                      <td>
                        <div class="d-flex align-items-center flex-nowrap gap-2">
                          <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                            <i class="fa-solid fa-user pw-text-primary-500"></i>
                          </div>
                          <div>
                            Zekiye Sülüşoğlu
                          </div>
                        </div>
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr class="fw-medium pw-text-neutral-700 fs-8">
                      <td>
                        <div class="d-flex align-items-center flex-nowrap gap-2">
                          <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                            <i class="fa-solid fa-user pw-text-primary-500"></i>
                          </div>
                          <div>
                            Zekiye Sülüşoğlu
                          </div>
                        </div>
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr class="fw-medium pw-text-neutral-700 fs-8">
                      <td>
                        <div class="d-flex align-items-center flex-nowrap gap-2">
                          <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                            <i class="fa-solid fa-user pw-text-primary-500"></i>
                          </div>
                          <div>
                            Zekiye Sülüşoğlu
                          </div>
                        </div>
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr class="fw-medium pw-text-neutral-700 fs-8">
                      <td>
                        <div class="d-flex align-items-center flex-nowrap gap-2">
                          <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                            <i class="fa-solid fa-user pw-text-primary-500"></i>
                          </div>
                          <div>
                            Zekiye Sülüşoğlu
                          </div>
                        </div>
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr class="fw-medium pw-text-neutral-700 fs-8">
                      <td>
                        <div class="d-flex align-items-center flex-nowrap gap-2">
                          <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                            <i class="fa-solid fa-user pw-text-primary-500"></i>
                          </div>
                          <div>
                            Zekiye Sülüşoğlu
                          </div>
                        </div>
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr class="fw-medium pw-text-neutral-700 fs-8">
                      <td>
                        <div class="d-flex align-items-center flex-nowrap gap-2">
                          <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                            <i class="fa-solid fa-user pw-text-primary-500"></i>
                          </div>
                          <div>
                            Zekiye Sülüşoğlu
                          </div>
                        </div>
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr class="fw-medium pw-text-neutral-700 fs-8">
                      <td>
                        <div class="d-flex align-items-center flex-nowrap gap-2">
                          <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                            <i class="fa-solid fa-user pw-text-primary-500"></i>
                          </div>
                          <div>
                            Zekiye Sülüşoğlu
                          </div>
                        </div>
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr class="fw-medium pw-text-neutral-700 fs-8">
                      <td>
                        <div class="d-flex align-items-center flex-nowrap gap-2">
                          <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                            <i class="fa-solid fa-user pw-text-primary-500"></i>
                          </div>
                          <div>
                            Zekiye Sülüşoğlu
                          </div>
                        </div>
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr class="fw-medium pw-text-neutral-700 fs-8">
                      <td>
                        <div class="d-flex align-items-center flex-nowrap gap-2">
                          <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                            <i class="fa-solid fa-user pw-text-primary-500"></i>
                          </div>
                          <div>
                            Zekiye Sülüşoğlu
                          </div>
                        </div>
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr class="fw-medium pw-text-neutral-700 fs-8">
                      <td>
                        <div class="d-flex align-items-center flex-nowrap gap-2">
                          <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                            <i class="fa-solid fa-user pw-text-primary-500"></i>
                          </div>
                          <div>
                            Zekiye Sülüşoğlu
                          </div>
                        </div>
                      </td>
                    </tr>
                    <!--end::Row-->
                  </tbody>
                </table>
                <!--end::Table-Light-->
              </div>
            </div>
            <!--end::Hariç Tutulan kişiler-->
          </div>
          <!--end::Kişiler tab contents-->
        </div>
        <!--end::Content-->
      </div>
      <!--end::Content layout-->
    </div>
    <!--end::Content -->
    <!--end::Content wrapper-->
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/footer.php'; ?>
  </div>
  <!--end::Main-->

</div>
<!--end::Wrapper -->

<!--begin::Modal-->
<div class="modal fade" tabindex="-1" id="kisi-dahil-et">
  <div class="modal-dialog modal-dialog-centered modal-lg mw-650px">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title">Kişileri Dahil Et</h2>
      </div>

      <form>
        <div class="modal-body">
          <input class="form-control fs-8 py-3 px-4" id="pw_ad_tanimi_adi" name="pw_ad_tanimi_adi" required="required">
        </div>

        <div class="modal-footer border-0">
          <button type="button" class="btn btn-active-light pw-btn-text-neutral-500 py-2 px-4 me-2 fs-8" data-bs-dismiss="modal">
            İptal
          </button>
          <button type="submit" class="btn btn-primary py-2 px-4 fs-8">
            Tamam
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
<!--end::Modal-->


<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/foot.php'; ?>