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
                  <a href="tanimlamalar/" class="text-muted text-hover-primary">Tanımlamalar</a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                  <span class="text-muted">/</span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item active"> Transfer Tanımları </li>
                <!--end::Item-->
              </ul>
              <!--end::Breadcrumb-->

              <!--begin::Title-->
              <h1 class="page-heading d-flex text-dark fw-bold fs-4 my-0 gap-2 align-items-center">
                <span><i class="fa-solid fa-angle-left fs-6 text-dark"></i></span> Transfer Tanımları
              </h1>
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
                <!--begin::Stepper-->
                <div class="stepper stepper-pills stepper-column stepper-circles pe-8" id="transfer_tanimlari_stepper">
                    <div class="row">
                        <div class="col-md-4 col-lg-4">
                            <!--begin::Nav-->
                            <div class="stepper-nav mt-2">
                                <!--begin::Step 1-->
                                <div class="stepper-item current" data-kt-stepper-element="nav" data-kt-stepper-action="step">
                                    <!--begin::Wrapper-->
                                    <div class="stepper-wrapper">
                                        <!--begin::Icon-->
                                        <div class="stepper-icon w-45px h-45px">
                                            <i class="ki-duotone ki-check fs-2 stepper-check"></i>
                                            <span class="stepper-number"><i class="fa-solid fa-circle-info text-white fs-4"></i></span>
                                        </div>
                                        <!--end::Icon-->
                                        
                                        <!--begin::Label-->
                                        <div class="stepper-label">
                                            <h3 class="stepper-title fs-7">Transfer Tanımı</h3>
                                            <div class="stepper-desc fw-semibold fs-9">İlk transfer tanımı</div>
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Line-->
                                    <div class="stepper-line h-40px"></div>
                                    <!--end::Line-->
                                </div>
                                <!--end::Step 1-->

                                <!--begin::Step 2-->
                                <div class="stepper-item" data-kt-stepper-element="nav" data-kt-stepper-action="step">
                                    <!--begin::Wrapper-->
                                    <div class="stepper-wrapper">
                                        <!--begin::Icon-->
                                        <div class="stepper-icon w-45px h-45px">
                                            <i class="ki-duotone ki-check fs-2 stepper-check"></i>
                                            <span class="stepper-number"><i class="fa-solid fa-upload text-white fs-4"></i></span>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Label-->
                                        <div class="stepper-label">
                                            <h3 class="stepper-title fs-7">Transfer Kaynağı</h3>
                                            <div class="stepper-desc fw-semibold fs-9">Aktarılacak kaynağı ayarla</div>
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Line-->
                                    <div class="stepper-line h-40px"></div>
                                    <!--end::Line-->
                                </div>
                                <!--end::Step 2-->

                                <!--begin::Step 3-->
                                <div class="stepper-item" data-kt-stepper-element="nav">
                                    <!--begin::Wrapper-->
                                    <div class="stepper-wrapper">
                                        <!--begin::Icon-->
                                        <div class="stepper-icon w-45px h-45px">
                                            <i class="ki-duotone ki-check fs-2 stepper-check"></i>
                                            <span class="stepper-number"><i class="fa-solid fa-download text-white fs-4"></i></span>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Label-->
                                        <div class="stepper-label">
                                            <h3 class="stepper-title fs-7">Transfer Hedefi</h3>
                                            <div class="stepper-desc fw-semibold fs-9">Aktarılacak hedefi ayarla</div>
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Line-->
                                    <div class="stepper-line h-40px"></div>
                                    <!--end::Line-->
                                </div>
                                <!--end::Step 3-->

                                <!--begin::Step 4-->
                                <div class="stepper-item" data-kt-stepper-element="nav">
                                    <!--begin::Wrapper-->
                                    <div class="stepper-wrapper">
                                        <!--begin::Icon-->
                                        <div class="stepper-icon w-45px h-45px">
                                            <i class="ki-duotone ki-check fs-2 stepper-check"></i>
                                            <span class="stepper-number"><i class="fa-solid fa-sliders text-white fs-4"></i></span>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Label-->
                                        <div class="stepper-label">
                                            <h3 class="stepper-title fs-7">Hedef Bilgileri</h3>
                                            <div class="stepper-desc fw-semibold fs-9">Transfer için hedefi ayarla</div>
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Line-->
                                    <div class="stepper-line h-40px"></div>
                                    <!--end::Line-->
                                </div>
                                <!--end::Step 4-->

                                <!--begin::Step 5-->
                                <div class="stepper-item" data-kt-stepper-element="nav">
                                    <!--begin::Wrapper-->
                                    <div class="stepper-wrapper">
                                        <!--begin::Icon-->
                                        <div class="stepper-icon w-45px h-45px">
                                            <i class="ki-duotone ki-check fs-2 stepper-check"></i>
                                            <span class="stepper-number"><i class="fa-solid fa-shuffle text-white fs-4"></i></span>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Label-->
                                        <div class="stepper-label">
                                            <h3 class="stepper-title fs-7">Dosya Kartı Alan Eşleşmeleri</h3>
                                            <div class="stepper-desc fw-semibold fs-9">Kaynak ve hedef arasındaki verileri eşleyin</div>
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Line-->
                                    <div class="stepper-line h-40px"></div>
                                    <!--end::Line-->
                                </div>
                                <!--end::Step 5-->

                                <!--begin::Step 6-->
                                <div class="stepper-item" data-kt-stepper-element="nav">
                                    <!--begin::Wrapper-->
                                    <div class="stepper-wrapper">
                                        <!--begin::Icon-->
                                        <div class="stepper-icon w-45px h-45px">
                                            <i class="ki-duotone ki-check fs-2 stepper-check"></i>
                                            <span class="stepper-number"><i class="fa-solid fa-shuffle text-white fs-4"></i></span>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Label-->
                                        <div class="stepper-label">
                                            <h3 class="stepper-title fs-7">Belge Alan Eşleşmeleri</h3>
                                            <div class="stepper-desc fw-semibold fs-9">Kaynak ve hedef arasındaki verileri eşleyin</div>
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Line-->
                                    <div class="stepper-line h-40px"></div>
                                    <!--end::Line-->
                                </div>
                                <!--end::Step 6-->

                                <!--begin::Step 7-->
                                <div class="stepper-item mark-completed" data-kt-stepper-element="nav">
                                    <!--begin::Wrapper-->
                                    <div class="stepper-wrapper">
                                        <!--begin::Icon-->
                                        <div class="stepper-icon w-45px h-45px">
                                            <i class="ki-duotone ki-check fs-2 stepper-check"></i>
                                            <span class="stepper-number"><i class="fa-solid fa-check-to-slot text-white fs-4"></i></span>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Label-->
                                        <div class="stepper-label">
                                            <h3 class="stepper-title fs-7">İncele & Kaydet</h3>
                                            <div class="stepper-desc fw-semibold fs-9">Tanımları inceleyin ve kaydedin</div>
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Step 7-->
                            </div>
                            <!--end::Nav-->
                        </div>

                        <div class="col-md-8 col-lg-8">
                            <div class="row">
                                <!--begin::Nav-->
                                <div class="pw-stepper-show-actions d-flex justify-content-between px-0 mb-3">
                                    <!--begin::Prev step-->
                                    <button type="button" class="btn btn-color-gray-400 btn-active-icon-primary btn-active-text-primary d-flex align-items-center py-2 px-0 fs-8" data-kt-stepper-action="previous">
                                        <i class="fa-solid fa-angle-left fs-5 me-2"></i> Geri
                                    </button>
                                    <!--end::Prev step-->

                                    <div>
                                        <!-- <button type="button" class="btn btn-active-icon-primary p-0 pb-6" data-kt-stepper-action="submit">
                                            <i class="fa-solid fa-angle-right fs-1"></i>Submit
                                            <span class="indicator-progress">Please wait...
                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        </button> -->

                                        <!--begin::Next step-->
                                        <button type="button" class="btn btn-active-icon-primary btn-color-gray-400 btn-active-text-primary d-flex align-items-center py-2 px-0 fs-8" data-kt-stepper-action="next">
                                            İleri <i class="fa-solid fa-angle-right fs-5 ms-2"></i>
                                        </button>
                                        <!--end::Next step-->
                                    </div>

                                    
                                </div>
                                <!--end::Nav-->
                            </div>

                            <div class="row">
                                <!--begin::Content-->
                                <div class="d-flex flex-row-fluid flex-center border rounded-3 pw-shadow-3 px-0">
                                    <!--begin::Form-->
                                    <form class="card-body p-7" novalidate="novalidate" id="kt_create_account_form">
                                        <!--begin::Step 1-->
                                        <div class="current" data-kt-stepper-element="content">
                                            <!--begin::Wrapper-->
                                            <div class="w-100">
                                                <h6 class="fs-6 px-0 mb-0">Transfer Tanımları</h6>
                                                <div class="separator my-6"></div>
                                                <!--begin::Form-->
                                                <div class="d-flex flex-column gap-13">
                                                    <!--begin::Table-->
                                                    <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                                                        <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fw-bold fs-7">
                                                            <tbody>
                                                                <!--begin::Row-->
                                                                <tr>
                                                                    <td><label for="" class="fs-8">Transfer Adı*</label></td>
                                                                    <td><input type="text" class="form-control form-control-solid py-3 px-4 fs-8" name="" /></td>
                                                                </tr>
                                                                <!--end::Row-->

                                                                <!--begin::Row-->
                                                                <tr>
                                                                    <td><label for="" class="fs-8">Bilgi Elektronik Posta</label></td>
                                                                    <td><input type="text" class="form-control form-control-solid py-3 px-4 fs-8" name="" /></td>
                                                                </tr>
                                                                <!--end::Row-->

                                                                <!--begin::Row-->
                                                                <tr>
                                                                    <td><label for="" class="fs-8">Hata Elektronik Posta</label></td>
                                                                    <td><input type="text" class="form-control form-control-solid py-3 px-4 fs-8" name="" /></td>
                                                                </tr>
                                                                <!--end::Row-->

                                                                <!--begin::Row-->
                                                                <tr>
                                                                    <td><label for="" class="fs-8">Durumu</label></td>
                                                                    <td>
                                                                        <div class="form-check form-switch form-check-custom form-check-solid">
                                                                            <input class="form-check-input" type="checkbox" value="" id="">
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <!--end::Row-->

                                                                <!--begin::Row-->
                                                                <tr>
                                                                    <td><label for="" class="fs-8">Transfer Önceliği</label></td>
                                                                    <td>
                                                                        <div class="position-relative" data-kt-dialer="true" data-kt-dialer-min="0" data-kt-dialer-max="1000" data-kt-dialer-step="1" data-kt-dialer-suffix="" data-kt-dialer-decimals="true">
                                                                            <!--begin::Decrease control-->
                                                                            <button type="button" class="btn btn-icon btn-active-color-primary position-absolute translate-middle-y top-50 start-0" data-kt-dialer-control="decrease">
                                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                                                                                <span class="svg-icon svg-icon-1">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
                                                                                        <rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                                                                                    </svg>
                                                                                </span>
                                                                                <!--end::Svg Icon-->
                                                                            </button>
                                                                            <!--end::Decrease control-->
                                                                            <!--begin::Input control-->
                                                                            <input type="text" class="form-control form-control-solid border-0 ps-12 py-3 fs-7" data-kt-dialer-control="input" placeholder="" name="" readonly="readonly" value="2" />
                                                                            <!--end::Input control-->
                                                                            <!--begin::Increase control-->
                                                                            <button type="button" class="btn btn-icon btn-active-color-primary position-absolute translate-middle-y top-50 end-0" data-kt-dialer-control="increase">
                                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                                                                <span class="svg-icon svg-icon-1">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
                                                                                        <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
                                                                                        <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                                                                                    </svg>
                                                                                </span>
                                                                                <!--end::Svg Icon-->
                                                                            </button>
                                                                            <!--end::Increase control-->
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <!--end::Row-->

                                                                <!--begin::Row-->
                                                                <tr>
                                                                    <td><label for="" class="fs-8">Kayıt Sayısı</label></td>
                                                                    <td>
                                                                        <div class="position-relative" data-kt-dialer="true" data-kt-dialer-min="0" data-kt-dialer-max="1000" data-kt-dialer-step="1" data-kt-dialer-suffix="" data-kt-dialer-decimals="true">
                                                                            <!--begin::Decrease control-->
                                                                            <button type="button" class="btn btn-icon btn-active-color-primary position-absolute translate-middle-y top-50 start-0" data-kt-dialer-control="decrease">
                                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                                                                                <span class="svg-icon svg-icon-1">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
                                                                                        <rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                                                                                    </svg>
                                                                                </span>
                                                                                <!--end::Svg Icon-->
                                                                            </button>
                                                                            <!--end::Decrease control-->
                                                                            <!--begin::Input control-->
                                                                            <input type="text" class="form-control form-control-solid border-0 ps-12 py-3 fs-7" data-kt-dialer-control="input" placeholder="" name="" readonly="readonly" value="2" />
                                                                            <!--end::Input control-->
                                                                            <!--begin::Increase control-->
                                                                            <button type="button" class="btn btn-icon btn-active-color-primary position-absolute translate-middle-y top-50 end-0" data-kt-dialer-control="increase">
                                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                                                                <span class="svg-icon svg-icon-1">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
                                                                                        <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
                                                                                        <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                                                                                    </svg>
                                                                                </span>
                                                                                <!--end::Svg Icon-->
                                                                            </button>
                                                                            <!--end::Increase control-->
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <!--end::Row-->
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!--end::Table-->
                                                </div>
                                                <!--end::Form-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Step 1-->

                                        <!--begin::Step 2-->
                                        <div data-kt-stepper-element="content">
                                            <!--begin::Wrapper-->
                                            <div class="w-100">
                                                <h6 class="fs-6 px-0 mb-0">Transfer Kaynağı</h6>
                                                <div class="separator my-6"></div>
                                                <!--begin::Form-->
                                                <div class="d-flex flex-column gap-13">
                                                    <!--begin::Table-->
                                                    <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                                                        <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fw-bold fs-7">
                                                            <tbody>
                                                                <!--begin::Row-->
                                                                <tr>
                                                                    <td><label for="" class="fs-8">Veri Tabanı Tipi</label></td>
                                                                    <td class="fs-8 text-gray-600 fw-normal">Ms Sql Server</td>
                                                                </tr>
                                                                <!--end::Row-->

                                                                <!--begin::Row-->
                                                                <tr>
                                                                    <td><label for="" class="fs-8">Sunucu</label></td>
                                                                    <td><input type="text" class="form-control form-control-solid py-3 px-4 fs-8" name="" /></td>
                                                                </tr>
                                                                <!--end::Row-->

                                                                <!--begin::Row-->
                                                                <tr>
                                                                    <td><label for="" class="fs-8">Kullanıcı Adı</label></td>
                                                                    <td><input type="text" class="form-control form-control-solid py-3 px-4 fs-8" name="" /></td>
                                                                </tr>
                                                                <!--end::Row-->

                                                                <!--begin::Row-->
                                                                <tr>
                                                                    <td><label for="" class="fs-8">Şifre* </label></td>
                                                                    <td>
                                                                        <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" name="" />
                                                                        <div class="text-end mt-5">
                                                                            <button class="btn btn-outline btn-outline-danger fs-7 px-4 py-2"><i class="fa-solid fa-plug text-danger fs-7 me-1"></i>Bağlan</button>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <!--end::Row-->

                                                                <!--begin::Row-->
                                                                <tr>
                                                                    <td><label for="" class="fs-8">Veritabanı</label></td>
                                                                    <td>
                                                                        <select id="" class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2">
                                                                            <option value="1">Option 1</option>
                                                                            <option value="2">Option 2</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <!--end::Row-->

                                                                <!--begin::Row-->
                                                                <tr>
                                                                    <td><label for="" class="fs-8">Tablo</label></td>
                                                                    <td><input type="text" class="form-control form-control-outline py-3 px-4 fs-8" name="" /></td>
                                                                </tr>
                                                                <!--end::Row-->
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!--end::Table-->
                                                </div>
                                                <!--end::Form-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Step 2-->

                                        <!--begin::Step 3-->
                                        <div data-kt-stepper-element="content">
                                            <!--begin::Wrapper-->
                                            <div class="w-100">
                                                <h6 class="fs-6 px-0 mb-0">Transfer Kaynağı</h6>
                                                <div class="separator my-6"></div>
                                                <!--begin::Form-->
                                                <div class="d-flex flex-column gap-13">
                                                    <!--begin::Table-->
                                                    <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                                                        <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fw-bold fs-7">
                                                            <tbody>
                                                                <!--begin::Row-->
                                                                <tr>
                                                                    <td><label for="" class="fs-8">Hedef Türü</label></td>
                                                                    <td>
                                                                        <select id="" class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2">
                                                                            <option value="1">Option 1</option>
                                                                            <option value="2">Option 2</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <!--end::Row-->

                                                                <!--begin::Row-->
                                                                <tr>
                                                                    <td><label for="" class="fs-8">Anahtar Kolon</label></td>
                                                                    <td>
                                                                        <select id="" class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2">
                                                                            <option value="1">Option 1</option>
                                                                            <option value="2">Option 2</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <!--end::Row-->

                                                                <!--begin::Row-->
                                                                <tr>
                                                                    <td><label for="" class="fs-8">Hata Kolon</label></td>
                                                                    <td>
                                                                        <select id="" class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2">
                                                                            <option value="1">Option 1</option>
                                                                            <option value="2">Option 2</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <!--end::Row-->

                                                                <!--begin::Row-->
                                                                <tr>
                                                                    <td><label for="" class="fs-8">Öncelik Kolunu</label></td>
                                                                    <td>
                                                                        <select id="" class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2">
                                                                            <option value="1">Option 1</option>
                                                                            <option value="2">Option 2</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <!--end::Row-->

                                                                <!--begin::Row-->
                                                                <tr>
                                                                    <td><label for="" class="fs-8">Durum Kolonu</label></td>
                                                                    <td>
                                                                        <select id="" class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2">
                                                                            <option value="1">Option 1</option>
                                                                            <option value="2">Option 2</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <!--end::Row-->

                                                                <!--begin::Row-->
                                                                <tr>
                                                                    <td><label for="" class="fs-8">İşlem Tarihi Kolonu</label></td>
                                                                    <td>
                                                                        <select id="" class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2">
                                                                            <option value="1">Option 1</option>
                                                                            <option value="2">Option 2</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <!--end::Row-->

                                                                <!--begin::Row-->
                                                                <tr>
                                                                    <td><label for="" class="fs-8">Doküman Kolonu</label></td>
                                                                    <td>
                                                                        <select id="" class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2">
                                                                            <option value="1">Option 1</option>
                                                                            <option value="2">Option 2</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <!--end::Row-->

                                                                <!--begin::Row-->
                                                                <tr>
                                                                    <td><label for="" class="fs-8">Koşul</label></td>
                                                                    <td><input type="text" class="form-control form-control-outline py-3 px-4 fs-8" name="" /></td>
                                                                </tr>
                                                                <!--end::Row-->

                                                                <!--begin::Row-->
                                                                <tr>
                                                                    <td><label for="dokumanKolonu" class="fs-8">Doküman Kolonu</label></td>
                                                                    <td>
                                                                        <div class="form-check mb-0">
                                                                            <input class="form-check-input bg-blue" type="checkbox" value="" id="dokumanKolonu" name="pw_ettn_kontrolu_yap">
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <!--end::Row-->

                                                                <!--begin::Row-->
                                                                <tr>
                                                                    <td><label for="" class="fs-8">Kolonu</label></td>
                                                                    <td>
                                                                        <select id="" class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2">
                                                                            <option value="1">Option 1</option>
                                                                            <option value="2">Option 2</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <!--end::Row-->
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!--end::Table-->
                                                </div>
                                                <!--end::Form-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Step 3-->

                                        <!--begin::Step 4-->
                                        <div data-kt-stepper-element="content">
                                            <!--begin::Wrapper-->
                                            <div class="w-100">
                                                <h6 class="fs-6 px-0 mb-0">Transfer Kaynağı</h6>
                                                <div class="separator my-6"></div>
                                                <!--begin::Form-->
                                                <div class="d-flex flex-column gap-13">
                                                    <!--begin::Table-->
                                                    <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                                                        <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fw-bold fs-7">
                                                            <tbody>
                                                                <!--begin::Row-->
                                                                <tr>
                                                                    <td><label for="" class="fs-8">Kabinet Yolu</label></td>
                                                                    <td>
                                                                        <button type="button" class="d-flex align-items-center btn p-0 w-100 position-relative" data-bs-stacked-modal="#kabinetYolu">
                                                                            <input type="text" class="form-control form-control-outline py-3 px-4 fs-8 me-3">
                                                                            <div class="btn btn-icon position-absolute end-0 me-10 pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                                                                                <i class="fa-solid fa-folder fs-7 text-primary"></i>
                                                                            </div>
                                                                            <a href="javascript:void(0);" class="mt-7"><i class="fa-solid fa-pen-to-square fs-5"></i></a>
                                                                        </button>
                                                                    </td>
                                                                </tr>
                                                                <!--end::Row-->

                                                                <!--begin::Row-->
                                                                <tr>
                                                                    <td><label for="" class="fs-8">Kabinet Yetki Seti</label></td>
                                                                    <td>
                                                                        <select id="" class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2">
                                                                            <option value="1">A Klasör Yetki Seti</option>
                                                                            <option value="2">Option 2</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <!--end::Row-->

                                                                <!--begin::Row-->
                                                                <tr>
                                                                    <td><label for="" class="fs-8">Belge Aktarım Türü</label></td>
                                                                    <td>
                                                                        <select id="" class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2">
                                                                            <option value="1">Seçiniz</option>
                                                                            <option value="2">İçerik</option>
                                                                            <option value="3">İndeks</option>
                                                                            <option value="4">İçerik ve İndeks</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <!--end::Row-->

                                                                <!--begin::Row-->
                                                                <tr>
                                                                    <td><label for="" class="fs-8">Dosya Kartı</label></td>
                                                                    <td><input type="text" class="form-control form-control-outline py-3 px-4 fs-8" name="" /></td>
                                                                </tr>
                                                                <!--end::Row-->

                                                                <!--begin::Row-->
                                                                <tr>
                                                                    <td><label for="" class="fs-8">Dosya Kartı Adı</label></td>
                                                                    <td>
                                                                        <select id="" class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2">
                                                                            <option value="1">Option 1</option>
                                                                            <option value="2">Option 2</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <!--end::Row-->
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!--end::Table-->
                                                </div>
                                                <!--end::Form-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Step 4-->

                                        <!--begin::Step 5-->
                                        <div data-kt-stepper-element="content">
                                            <!--begin::Wrapper-->
                                            <div class="w-100">
                                                <h6 class="fs-6 px-0 mb-0">Dosya Kartı Alan Eşleşmeleri</h6>
                                                <div class="separator my-6"></div>
                                                <div class="table-responsive overflow-x-auto rounded">
                                                    <table class="table table-row-bordered border pw-dark-bg-table pw-table-border-gray pw-table-border-gray table-rounded align-middle min-w-100 gy-2 gx-9 gs-9">
                                                        <thead>
                                                            <tr class="fw-semibold fs-8 pw-text-neutral-700 pw-bg-neutral-100">
                                                                <th class="py-3">Anahtar Alan</th>
                                                                <th class="py-3">Tip Alan Adı</th>
                                                                <th class="py-3">Tablo Alan Adı</th>
                                                                <th class="py-3">Boş Değere İzin Ver</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr class="fw-medium pw-text-neutral-700 fs-9 border-0">
                                                                <td class="py-2">
                                                                    <div class="form-check mb-0">
                                                                        <input class="form-check-input bg-blue" type="checkbox" value="" id="" name="">
                                                                    </div>
                                                                </td>
                                                                <td class="py-2">KD-Alt Belge Grubu</td>
                                                                <td class="py-2">
                                                                    <select id="" class="form-select form-select-outline fs-8 py-3 px-4" data-control="select2">
                                                                        <option value="1">Option 1</option>
                                                                        <option value="2">Option 2</option>
                                                                    </select>
                                                                </td>
                                                                <td class="py-2">
                                                                    <div class="form-check mb-0">
                                                                        <input class="form-check-input bg-blue" type="checkbox" value="" id="" name="" checked>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                            <tr class="fw-medium pw-text-neutral-700 fs-9 border-0">
                                                                <td class="py-2">
                                                                    <div class="form-check mb-0">
                                                                        <input class="form-check-input bg-blue" type="checkbox" value="" id="" name="">
                                                                    </div>
                                                                </td>
                                                                <td class="py-2">KD-Alt Belge Grubu</td>
                                                                <td class="py-2">
                                                                    <select id="" class="form-select form-select-outline fs-8 py-3 px-4" data-control="select2">
                                                                        <option value="1">Option 1</option>
                                                                        <option value="2">Option 2</option>
                                                                    </select>
                                                                </td>
                                                                <td class="py-2">
                                                                    <div class="form-check mb-0">
                                                                        <input class="form-check-input bg-blue" type="checkbox" value="" id="" name="" checked>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Step 5-->

                                        <!--begin::Step 6-->
                                        <div data-kt-stepper-element="content">
                                            <!--begin::Wrapper-->
                                            <div class="w-100">
                                                <h6 class="fs-6 px-0 mb-0">Dosya Kartı Alan Eşleşmeleri</h6>
                                                <div class="separator my-6"></div>
                                                <div class="table-responsive overflow-x-auto rounded">
                                                    <table class="table table-row-bordered border pw-dark-bg-table pw-table-border-gray pw-table-border-gray table-rounded align-middle min-w-100 gy-2 gx-9 gs-9">
                                                        <thead>
                                                            <tr class="fw-semibold fs-8 pw-text-neutral-700 pw-bg-neutral-100">
                                                                <th class="py-3">Tip Alan Adı</th>
                                                                <th class="py-3">Tablo Alan Adı</th>
                                                                <th class="py-3">Boş Değere İzin Ver</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr class="fw-medium pw-text-neutral-700 fs-9 border-0">
                                                                <td class="py-2">Adı Soyadı</td>                                                                
                                                                <td class="py-2">
                                                                    <select id="" class="form-select form-select-outline fs-8 py-3 px-4" data-control="select2">
                                                                        <option value="1">Option 1</option>
                                                                        <option value="2">Option 2</option>
                                                                    </select>
                                                                </td>
                                                                <td class="py-2">
                                                                    <div class="form-check mb-0">
                                                                        <input class="form-check-input bg-blue" type="checkbox" value="" id="" name="" checked>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                            <tr class="fw-medium pw-text-neutral-700 fs-9 border-0">
                                                                <td class="py-2">Dosya Masrafı</td>                                                                
                                                                <td class="py-2">
                                                                    <select id="" class="form-select form-select-outline fs-8 py-3 px-4" data-control="select2">
                                                                        <option value="1">Option 1</option>
                                                                        <option value="2">Option 2</option>
                                                                    </select>
                                                                </td>
                                                                <td class="py-2">
                                                                    <div class="form-check mb-0">
                                                                        <input class="form-check-input bg-blue" type="checkbox" value="" id="" name="" checked>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                            <tr class="fw-medium pw-text-neutral-700 fs-9 border-0">
                                                                <td class="py-2">Dosya Sayısı</td>                                                                
                                                                <td class="py-2">
                                                                    <select id="" class="form-select form-select-outline fs-8 py-3 px-4" data-control="select2">
                                                                        <option value="1">Option 1</option>
                                                                        <option value="2">Option 2</option>
                                                                    </select>
                                                                </td>
                                                                <td class="py-2">
                                                                    <div class="form-check mb-0">
                                                                        <input class="form-check-input bg-blue" type="checkbox" value="" id="" name="" checked>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                            <tr class="fw-medium pw-text-neutral-700 fs-9 border-0">
                                                                <td class="py-2">Ekleme Saati</td>                                                                
                                                                <td class="py-2">
                                                                    <select id="" class="form-select form-select-outline fs-8 py-3 px-4" data-control="select2">
                                                                        <option value="1">Option 1</option>
                                                                        <option value="2">Option 2</option>
                                                                    </select>
                                                                </td>
                                                                <td class="py-2">
                                                                    <div class="form-check mb-0">
                                                                        <input class="form-check-input bg-blue" type="checkbox" value="" id="" name="" checked>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                            <tr class="fw-medium pw-text-neutral-700 fs-9 border-0">
                                                                <td class="py-2">Ekleme Tarihi</td>                                                                
                                                                <td class="py-2">
                                                                    <select id="" class="form-select form-select-outline fs-8 py-3 px-4" data-control="select2">
                                                                        <option value="1">Option 1</option>
                                                                        <option value="2">Option 2</option>
                                                                    </select>
                                                                </td>
                                                                <td class="py-2">
                                                                    <div class="form-check mb-0">
                                                                        <input class="form-check-input bg-blue" type="checkbox" value="" id="" name="" checked>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                            <tr class="fw-medium pw-text-neutral-700 fs-9 border-0">
                                                                <td class="py-2">Kayıt TS</td>                                                                
                                                                <td class="py-2">
                                                                    <select id="" class="form-select form-select-outline fs-8 py-3 px-4" data-control="select2">
                                                                        <option value="1">Option 1</option>
                                                                        <option value="2">Option 2</option>
                                                                    </select>
                                                                </td>
                                                                <td class="py-2">
                                                                    <div class="form-check mb-0">
                                                                        <input class="form-check-input bg-blue" type="checkbox" value="" id="" name="" checked>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                            <tr class="fw-medium pw-text-neutral-700 fs-9 border-0">
                                                                <td class="py-2">Serbest Alan</td>                                                                
                                                                <td class="py-2">
                                                                    <select id="" class="form-select form-select-outline fs-8 py-3 px-4" data-control="select2">
                                                                        <option value="1">Option 1</option>
                                                                        <option value="2">Option 2</option>
                                                                    </select>
                                                                </td>
                                                                <td class="py-2">
                                                                    <div class="form-check mb-0">
                                                                        <input class="form-check-input bg-blue" type="checkbox" value="" id="" name="" checked>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Step 6-->

                                        <!--begin::Step 7-->
                                        <div data-kt-stepper-element="content">
                                            <!--begin::Wrapper-->
                                            <div class="w-100">
                                                <h6 class="fs-6 px-0 mb-0">Dosya Kartı Alan Eşleşmeleri</h6>
                                                <div class="separator my-6"></div>
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                                        <div class="row">
                                                            <h6 class="my-8 mt-5">Tanım</h6>
                                                        </div>
                                                        <div class="row">
                                                            <div class="row">
                                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                                    <label for="" class="fs-9 fw-bold">Adı</label>
                                                                </div>
                                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                                    <p class="fs-9 text-gray-600">Transfer A</p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                                    <label for="" class="fs-9 fw-bold">Bilgi Elektronik Posta</label>
                                                                </div>
                                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                                    <p class="fs-9 text-gray-600">ekaplan@paperwork.com.tr</p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                                    <label for="" class="fs-9 fw-bold">Hata Elektronik Posta</label>
                                                                </div>
                                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                                    <p class="fs-9 text-gray-600">ekaplan@paperwork.com.tr</p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                                    <label for="" class="fs-9 fw-bold">Durum</label>
                                                                </div>
                                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                                    <p class="fs-9 text-gray-600">Pasif</p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                                    <label for="" class="fs-9 fw-bold">Dosya İşlevi</label>
                                                                </div>
                                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                                    <p class="fs-9 text-gray-600">Yok</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <h6 class="my-8">Veri Tabanı</h6>
                                                        </div>
                                                        <div class="row">
                                                            <div class="row">
                                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                                    <label for="" class="fs-9 fw-bold">Adı</label>
                                                                </div>
                                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                                    <p class="fs-9 text-gray-600">Transfer A</p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                                    <label for="" class="fs-9 fw-bold">Bilgi Elektronik Posta</label>
                                                                </div>
                                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                                    <p class="fs-9 text-gray-600">ekaplan@paperwork.com.tr</p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                                    <label for="" class="fs-9 fw-bold">Hata Elektronik Posta</label>
                                                                </div>
                                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                                    <p class="fs-9 text-gray-600">ekaplan@paperwork.com.tr</p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                                    <label for="" class="fs-9 fw-bold">Durum</label>
                                                                </div>
                                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                                    <p class="fs-9 text-gray-600">Pasif</p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                                    <label for="" class="fs-9 fw-bold">Dosya İşlevi</label>
                                                                </div>
                                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                                    <p class="fs-9 text-gray-600">Yok</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>

                                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                                        <div class="row">
                                                            <h6 class="my-8 mt-5">Arşiv</h6>
                                                        </div>
                                                        <div class="row">
                                                            <div class="row">
                                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                                    <label for="" class="fs-9 fw-bold">Hedef</label>
                                                                </div>
                                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                                    <p class="fs-9 text-gray-600">argusdb</p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                                    <label for="" class="fs-9 fw-bold">Hedef Klasör</label>
                                                                </div>
                                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                                    <p class="fs-9 text-gray-600">sa</p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                                    <label for="" class="fs-9 fw-bold">Dosya Kartı Adı</label>
                                                                </div>
                                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                                    <p class="fs-9 text-gray-600">paperwork_argustest</p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                                    <label for="" class="fs-9 fw-bold">Dosya Kartı Klasör</label>
                                                                </div>
                                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                                    <p class="fs-9 text-gray-600">tr_transfer_dilan</p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                                    <label for="" class="fs-9 fw-bold">Belge Tipi</label>
                                                                </div>
                                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                                    <p class="fs-9 text-gray-600">transfer_message</p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                                    <label for="" class="fs-9 fw-bold">Belge Formu</label>
                                                                </div>
                                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                                    <p class="fs-9 text-gray-600">transfer_priority</p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                                    <label for="" class="fs-9 fw-bold">Belge Yetki Seti</label>
                                                                </div>
                                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                                    <p class="fs-9 text-gray-600">5S Audit Süreci - Uygunsuzluk Raporu Görüntüleme</p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                                    <label for="" class="fs-9 fw-bold">Belge Aktarım Türü</label>
                                                                </div>
                                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                                    <p class="fs-9 text-gray-600">transfer_date</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Step 7-->
                                    </form>
                                    <!--end::Form-->
                                </div>
                                <!--end::Content-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Stepper-->
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

<!--begin::Stepper script-->
<script>
    window.addEventListener('DOMContentLoaded', () => {
        // Stepper lement
        var element = document.querySelector("#transfer_tanimlari_stepper");

        // Initialize Stepper
        var stepper = new KTStepper(element);

        // Handle next step
        stepper.on("kt.stepper.next", function (stepper) {
            stepper.goNext(); // go next step
        });

        // Handle previous step
        stepper.on("kt.stepper.previous", function (stepper) {
            stepper.goPrevious(); // go previous step
        });
    });
</script>
<!--end::Stepper script-->

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/foot.php'; ?>