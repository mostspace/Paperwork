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
                <li class="breadcrumb-item active"> E-Fatura Tanımları</li>
                <!--end::Item-->
              </ul>
              <!--end::Breadcrumb-->
              <!--begin::Title-->
              <h1 class="page-heading d-flex text-dark fw-bold fs-4 flex-column justify-content-center my-0">
                Yeni E-Fatura Ekle
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
            <!--begin::Form wrapper-->
            <div class="row">
                <!--begin::Form-->
                <form class="d-flex flex-column gap-13">
                    <div class="col col-lg-8">
                        <!--begin::Table-->
                        <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                            <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fw-bold fs-7">
                                <tbody>
                                    <!--begin::Row-->
                                    <tr>
                                        <td class="col-md-3"><label for="transfer_adi">Transfer Adı</label></td>
                                        <td class="col-md-9">
                                            <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" id="transfer_adi" name="pw_transfer_adi" required />
                                        </td>
                                    </tr>
                                    <!--end::Row-->

                                    <!--begin::Row-->
                                    <tr>
                                        <td class="col-md-3 pt-0"><label for="transfer_turu">Transfer Türü</label></td>
                                        <td class="d-flex align-items-center col-md-9">
                                            <div class="form-check form-check-custom me-10">
                                                <input class="form-check-input bg-blue w-20px h-20px" type="radio" value="web-servis" id="web-servis" name="pw_transfer_turu">
                                                <label class="form-check-label pw-text-neutral-700 fs-8" for="web-servis">
                                                    Web Servis
                                                </label>
                                            </div>
                                            <div class="form-check form-check-custom">
                                                <input class="form-check-input bg-blue w-20px h-20px" type="radio" value="dizin" id="dizin" name="pw_transfer_turu">
                                                <label class="form-check-label pw-text-neutral-700 fs-8" for="dizin">
                                                    Dizin
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <!--end::Row-->

                                    <!--begin::Row-->
                                    <tr>
                                        <td class="col-md-3"><label for="pw_tasarim_yetki_seti">Çalışma Aralığı</label></td>
                                        <td class="d-flex align-items-center col-md-9">
                                            <!--begin::Dialer-->
                                            <div class="position-relative w-md-300px" data-kt-dialer="true" data-kt-dialer-min="0" data-kt-dialer-max="1000" data-kt-dialer-step="1" data-kt-dialer-suffix=" Dakika" data-kt-dialer-decimals="true">
                                                <!--begin::Decrease control-->
                                                <button type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 start-0" data-kt-dialer-control="decrease">
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
                                                <input type="text" class="form-control form-control-solid border-0 ps-12 py-3 fs-7" data-kt-dialer-control="input" placeholder="Amount" name="calisma_araligi" readonly="readonly" value="10 Dakika" />
                                                <!--end::Input control-->
                                                <!--begin::Increase control-->
                                                <button type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 end-0" data-kt-dialer-control="increase">
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
                                            <!--end::Dialer-->

                                            <div class="form-check mb-0 ms-7">
                                                <label class="form-check-label fs-8 fw-semibold pw-text-neutral-800" for="aktif">
                                                    Aktif
                                                </label>
                                                <input class="form-check-input bg-blue" type="checkbox" value="" id="aktif" name="pw_aktif" checked>
                                            </div>
                                        </td>
                                    </tr>
                                    <!--end::Row-->

                                    <!--begin::Row-->
                                    <tr>
                                        <td class="col-md-3"><label for="entegrator">Entegratör</label></td>
                                        <td class="col-md-9">
                                            <select id="entegrator" class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2" data-placeholder="" tabindex="0" aria-hidden="false" data-kt-initialized="1">
                                                <option value="1">ISIS</option>
                                                <option value="2">Option 2</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <!--end::Row-->

                                    <!--begin::Row-->
                                    <tr>
                                        <td class="col-md-3"><label for="">Kullanıcı Adı</label></td>
                                        <td class="col-md-9">
                                            <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" name="" />
                                        </td>
                                    </tr>
                                    <!--end::Row-->

                                    <!--begin::Row-->
                                    <tr>
                                        <td class="col-md-3"><label for="">Şifre</label></td>
                                        <td class="col-md-9">
                                            <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" placeholder="*********" name="" />
                                        </td>
                                    </tr>
                                    <!--end::Row-->

                                    <!--begin::Row-->
                                    <tr>
                                        <td class="col-md-3"></td>
                                        <td class="pt-10 col-md-9">
                                            <div class="form-check mb-0">
                                                <label class="form-check-label fs-8 fw-semibold pw-text-neutral-800" for="ettn_kontrolu_yap">
                                                    ETTN Kontrolü Yap
                                                </label>
                                                <input class="form-check-input bg-blue" type="checkbox" value="" id="ettn_kontrolu_yap" name="pw_ettn_kontrolu_yap" checked>
                                            </div>
                                        </td>
                                    </tr>
                                    <!--end::Row-->

                                    <!--begin::Row-->
                                    <tr>
                                        <td class="col-md-3"><label for="pw_elektronik_posta">Elektronik Posta</label></td>
                                        <td class="col-md-9">
                                            <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" name="pw_elektronik_posta" />
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
            <!--end::Form wrapper-->

            <!--begin::Bottom content-->
            <div class="row">
                <!--begin::Tab header wrapper-->
                <div class="table-reponsive overflow-x-auto">
                    <!--begin::Table tabs-->
                    <div class="nav nav-tabs nav-line-tabs fs-6 gap-8" role="tablist">
                        <!--begin::Tab item-->
                        <li class="nav-item" role="presentation">
                            <a class="nav-link mx-0 pt-3 pb-6 fs-base rounded-0 fw-semibold active" data-bs-toggle="tab" href="#pw_tab_pane_arsiv_tanimi" aria-selected="true" role="tab">Arşiv Tanımı</a>
                        </li>
                        <!--end::Tab item-->

                        <!--begin::Tab item-->
                        <li class="nav-item" role="presentation">
                            <a class="nav-link mx-0 pt-3 pb-6 fs-base rounded-0" data-bs-toggle="tab" href="#pw_tab_pane_akis_tanimi" aria-selected="false" role="tab">Akış Tanımı</a>
                        </li>
                        <!--end::Tab item-->
                    </div>
                    <!--end::Table tabs-->
                </div>
                <!--end::Tab header wrapper-->

                <!--begin::Tab contents-->
                <div class="tab-content pw-dashboard-tab-content mt-6" id="kabinetTabContents">
                    <!--begin::Ozellikler content-->
                    <div class="tab-pane fade active show" id="pw_tab_pane_arsiv_tanimi" role="tabpanel">
                        <!--begin::Form wrapper-->
                        <div class="row">
                            <!--begin::Form-->
                            <form class="d-flex flex-column gap-13">
                                <div class="col col-lg-8">
                                    <!--begin::Table-->
                                    <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                                        <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fw-bold fs-7">
                                            <tbody>
                                                <!--begin::Row-->
                                                <tr>
                                                    <td class="col-md-3"><label for="">Klasör Yolu</label></td>
                                                    <td class="col-md-9">
                                                        <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" name="" required />
                                                    </td>
                                                </tr>
                                                <!--end::Row-->

                                                <!--begin::Row-->
                                                <tr>
                                                    <td class="col-md-3"><label for="">Kabinet Yolu</label></td>
                                                    <td class="col-md-9">
                                                        <select class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2" data-placeholder="*********" name="">
                                                            <option></option>
                                                            <option value="1">Option 1</option>
                                                            <option value="2">Option 2</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <!--end::Row-->

                                                <!--begin::Row-->
                                                <tr>
                                                    <td class="col-md-3"><label for="">Yetki Seti</label></td>
                                                    <td class="col-md-9">
                                                        <select class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2" data-placeholder="*********" name="">
                                                            <option></option>
                                                            <option value="1">Option 1</option>
                                                            <option value="2">Option 2</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <!--end::Row-->

                                                <!--begin::Row-->
                                                <tr>
                                                    <td class="col-md-3"><label for="">Belge Tipi</label></td>
                                                    <td class="col-md-9">
                                                        <select class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2" data-placeholder="*********" name="">
                                                            <option></option>
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
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Form wrapper-->

                        <div class="row px-20">
                            <div class="position-relative">
                                <div class="position-absolute w-100 h-1px w-100 mx-100 bg-primary z-index-n1" style="margin-top: 99px"></div>
                            </div>
                        </div>

                        <!--begin::Tab Bottom content-->
                        <div class="d-flex justify-content-between row mt-8 mb-15">            
                            <div class="col-md-4 col-sm-12 my-1">
                                <!--begin::Aside menu-->
                                <div class="aside-menu flex-column-fluid border border-stroke border-primary rounded-2 p-2 bg-white z-index-1">
                                    <h1 class="fs-5 my-5 ms-8 fw-bold">E-Fatura Alanları</h1>
                                    <!--begin::Aside Menu-->
                                    <div class="hover-scroll-overlay-y" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true, md; true,}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="0">
                                        <!--begin::Menu-->
                                        <div class="menu menu-column menu-title-gray-700 menu-icon-gray-400 menu-arrow-gray-400 fw-semibold" data-kt-menu="true" id="pw-seda-menu">
                                            <!--begin::Menu item-->
                                            <div class="menu-item menu-sub-indention menu-accordion show" data-kt-menu-trigger="click">
                                                <!--begin::Menu link-->
                                                <a href="#" class="menu-link ps-0 d-block pt-1 pb-0">
                                                    <span class="menu-arrow float-start"></span>
                                                    <div class="d-flex justify-content-between align-items-center border-bottom pb-2">
                                                        <div class="d-flex align-items-center">
                                                            <i class="fa-solid fa-folder text-primary fs-6 ms-2"></i>
                                                            <span class="fs-8 fw-bold mb-0 pw-text-gray-800 menu-title ps-2">
                                                                eFatura Arşivim
                                                            </span>
                                                        </div>
                                                        <i class="fa-sharp fa-regular fa-angle-right text-primary fs-8"></i>
                                                    </div>
                                                </a>
                                                <!--end::Menu link-->

                                                <!--begin::Menu sub-->
                                                <div class="menu-sub menu-sub-accordion ms-7 me-3">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item border-bottom">
                                                        <div class="menu-link ps-2">
                                                            <input class="form-check-input w-15px h-15px" type="radio" value="" name="transfer_turu" disabled>
                                                            <i class="fa-solid fa-input-numeric pw-text-neutral-300 fs-9 ms-2"></i>
                                                            <span class="fs-8 fw-bold mb-0 pw-text-gray-300 menu-title ps-2">Detay Sıra No</span>
                                                        </div>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item border-bottom">
                                                        <div class="menu-link ps-2">
                                                            <input class="form-check-input w-15px h-15px" type="radio" value="" name="transfer_turu">
                                                            <i class="fa-solid fa-calendar text-primary fs-7 ms-2"></i>
                                                            <span class="fs-8 fw-bold mb-0 pw-text-gray-800 menu-title ps-2">Fatura Tarihi</span>
                                                        </div>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item border-bottom">
                                                        <div class="menu-link ps-2">
                                                            <input class="form-check-input w-15px h-15px" type="radio" value="" name="transfer_turu" checked>
                                                            <i class="fa-solid fa-dollar-sign text-primary fs-7 ms-2"></i>
                                                            <span class="fs-8 fw-bold mb-0 pw-text-gray-800 menu-title ps-2">KDV Tutari</span>
                                                        </div>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item border-bottom">
                                                        <div class="menu-link ps-2">
                                                            <input class="form-check-input w-15px h-15px" type="radio" value="" name="transfer_turu">
                                                            <i class="fa-solid fa-file-pen text-primary fs-7 ms-2"></i>
                                                            <span class="fs-8 fw-bold mb-0 pw-text-gray-800 menu-title ps-2">Alıcı Adı</span>
                                                        </div>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item border-bottom">
                                                        <div class="menu-link ps-2">
                                                            <input class="form-check-input w-15px h-15px" type="radio" value="" name="transfer_turu" disabled>
                                                            <i class="fa-solid fa-file-pen pw-text-neutral-300 fs-7 ms-2"></i>
                                                            <span class="fs-8 fw-bold mb-0 pw-text-gray-300 menu-title ps-2">Alıcı Adı</span>
                                                        </div>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item">
                                                        <div class="menu-link ps-2">
                                                            <input class="form-check-input w-15px h-15px" type="radio" value="" name="transfer_turu">
                                                            <i class="fa-solid fa-dollar-sign text-primary fs-7 ms-2"></i>
                                                            <span class="fs-8 fw-bold mb-0 pw-text-gray-800 menu-title ps-2">KDV Tutari</span>
                                                        </div>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu sub-->
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->  
                                    </div>
                                    <!--end::Aside Menu-->
                                    <div class="my-2 ms-15">
                                        <a href="#" class="fs-7 fw-bold">Tümünü Gör</a>
                                    </div>
                                </div>
                                <!--end::Aside menu-->
                            </div>
                            
                            <!--begin::Middle wedge content-->
                            <div class="" style="display: contents">
                                <div class="bg-white z-index-1 mt-12">      
                                    <div class="d-flex align-items-center justify-content-center border border-gray-400 rounded-circle w-40px h-40px"><i class="fa-solid fa-plus text-primary fs-7 text-center v-middle"></i></div>
                                </div>
                            </div>
                            <!--end::Middle wedge content-->

                            <div class="col-md-4 col-sm-12 my-1">
                                <!--begin::Aside menu-->
                                <div class="aside-menu flex-column-fluid border border-stroke border-primary rounded-2 p-2 bg-white z-index-1">
                                    <h1 class="fs-5 my-5 mb-2 ms-8 fw-bold">Tip Alanları</h1>
                                    <!--begin::Aside Menu-->
                                    <div class="hover-scroll-overlay-y" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true, md; true,}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="0">
                                        <!--begin::Menu-->
                                        <div class="menu menu-column menu-title-gray-700 menu-icon-gray-400 menu-arrow-gray-400 fw-semibold" data-kt-menu="true" id="pw-seda-menu">
                                            <!--begin::Menu item-->
                                            <div class="menu-item menu-sub-indention menu-accordion show" data-kt-menu-trigger="click">
                                                <!--begin::Menu sub-->
                                                <div class="menu-sub menu-sub-accordion me-3">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item border-bottom">
                                                        <div class="menu-link ps-2">
                                                            <input class="form-check-input w-15px h-15px" type="radio" value="" name="">
                                                            <span class="fs-8 fw-bold mb-0  menu-title pw-text-gray-800 ps-2">Alıcı Abone No</span>
                                                        </div>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item border-bottom">
                                                        <div class="menu-link ps-2">
                                                            <input class="form-check-input w-15px h-15px" type="radio" value="" name="">
                                                            <span class="fs-8 fw-bold mb-0 pw-text-gray-800 menu-title ps-2">Satıcı Fax</span>
                                                        </div>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item border-bottom">
                                                        <div class="menu-link ps-2">
                                                            <input class="form-check-input w-15px h-15px" type="radio" value="" name="" disabled>
                                                            <span class="fs-8 fw-bold mb-0 text-gray-400 menu-title ps-2">Sipariş No</span>
                                                        </div>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item border-bottom">
                                                        <div class="menu-link ps-2">
                                                            <input class="form-check-input w-15px h-15px" type="radio" value="" name="">
                                                            <span class="fs-8 fw-bold mb-0 pw-text-gray-800 menu-title ps-2">Vergi Dairesi</span>
                                                        </div>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item border-bottom">
                                                        <div class="menu-link ps-2">
                                                            <input class="form-check-input w-15px h-15px" type="radio" value="" name="" checked>
                                                            <span class="fs-8 fw-bold mb-0 pw-text-gray-300 menu-title ps-2">KDV</span>
                                                        </div>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item border-bottom">
                                                        <div class="menu-link ps-2">
                                                            <input class="form-check-input w-15px h-15px" type="radio" value="" name="" disabled>
                                                            <span class="fs-8 fw-bold mb-0 text-gray-400 menu-title ps-2">eFatura FH</span>
                                                        </div>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item">
                                                        <div class="menu-link ps-2">
                                                            <input class="form-check-input w-15px h-15px" type="radio" value="" name="">
                                                            <span class="fs-8 fw-bold mb-0 pw-text-gray-300 menu-title ps-2">KDV Tutarı</span>
                                                        </div>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu sub-->
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->  
                                    </div>
                                    <!--end::Aside Menu-->
                                    <div class="my-2 ms-12">
                                        <a href="#" class="fs-7 fw-bold">Tümünü Gör</a>
                                    </div>
                                </div>
                                <!--end::Aside menu-->
                            </div>

                            <!--begin::Middle wedge content-->
                            <div class="" style="display: contents">
                                <div class="bg-white z-index-1 mt-12">      
                                    <div class="d-flex align-items-center justify-content-center border border-gray-400 rounded-circle w-40px h-40px"><i class="fa-solid fa-link text-primary fs-7"></i></div>
                                    <div class="mt-8">
                                        <a href="/#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-40px h-40px rounded-0.5 me-1 my-1">
                                            <i class="fa-sharp fa-regular fa-angle-right fs-7 text-primary"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!--end::Middle wedge content-->

                            <div class="col-md-3 col-sm-12 my-1">
                                <!--begin::Aside menu-->
                                <div class="aside-menu flex-column-fluid border border-dashed border-primary rounded-2 bg-white z-index-1 h-100">
                                    <h1 class="fs-5 mt-7 mb-3 ms-8 fw-bold">Eşleştirmeler</h1>
                                    <!--begin::Aside Menu-->
                                    <div class="hover-scroll-overlay-y" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true, md; true,}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="0">
                                        <!--begin::Menu-->
                                        <div class="menu menu-column menu-title-gray-700 menu-icon-gray-400 menu-arrow-gray-400 fw-semibold" data-kt-menu="true" id="pw-seda-menu">
                                            <!--begin::Menu item-->
                                            <div class="menu-item menu-sub-indention menu-accordion show" data-kt-menu-trigger="click">
                                                <!--begin::Menu sub-->
                                                <div class="menu-sub menu-sub-accordion mx-0">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item border-bottom">
                                                        <div class="menu-link d-flex justify-content-between border-bottom border-top border-primary pw-bg-primary-200 px-5 py-1">
                                                            <button class="d-flex border bg-white px-2 py-1">
                                                                <div class="d-flex align-items-center me-3">
                                                                    <i class="fa-solid fa-dollar-sign text-primary fs-7"></i>
                                                                    <span class="fs-8 fw-bold mb-0 menu-title ps-2">KDV Tutarı</span>
                                                                </div>
                                                                <div class="d-flex align-items-center">
                                                                    <i class="fa-solid fa-link text-primary fs-7"></i>
                                                                    <span class="fs-8 fw-bold mb-0 menu-title ps-2">KDV</span>
                                                                </div>
                                                            </button>
                                                            <button class="border-0 bg-transparent"><i class="fa-regular fa-circle-xmark text-danger fs-7"></i></button>
                                                        </div>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item">
                                                        <div class="menu-link ps-5">
                                                            <div class="w-100 pb-3 border-bottom">
                                                                <div class="d-flex align-items-center float-start me-5">
                                                                    <i class="fa-solid fa-input-numeric text-primary fs-7"></i>
                                                                    <span class="fs-8 fw-bold mb-0 menu-title ps-2">Detay Sıra No</span>
                                                                </div>
                                                                <div class="d-flex align-items-center float-start">
                                                                    <i class="fa-solid fa-link text-primary fs-7"></i>
                                                                    <span class="fs-8 fw-bold mb-0 menu-title ps-2">Sipariş No</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end::Menu item-->

                                                </div>
                                                <!--end::Menu sub-->
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->  
                                    </div>
                                    <!--end::Aside Menu-->
                                </div>
                                <!--end::Aside menu-->
                            </div>
                        </div>
                        <!--end::Tab Bottom content-->
                    </div>
                    <!--end::Ozellikler content-->

                    <!--begin::Goster content-->
                    <div class="tab-pane fade" id="pw_tab_pane_akis_tanimi" role="tabpanel">
                        <!--begin::Form wrapper-->
                        <div class="row">
                            <!--begin::Form-->
                            <form class="d-flex flex-column gap-13">
                                <div class="col col-lg-8">
                                    <!--begin::Table-->
                                    <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                                        <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fw-bold fs-7">
                                            <tbody>
                                                <!--begin::Row-->
                                                <tr>
                                                    <td class="col-md-3"><label for="">Süreç Adı</label></td>
                                                    <td class="col-md-9">
                                                        <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" name="" required />
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
                        <!--end::Form wrapper-->

                        <div class="row px-20">
                            <div class="position-relative">
                                <div class="position-absolute w-100 h-1px w-100 mx-100 bg-primary z-index-n1" style="margin-top: 99px"></div>
                            </div>
                        </div>

                        <!--begin::Tab Bottom content-->
                        <div class="d-flex justify-content-between row mt-8 mb-15">            
                            <div class="col-md-4 col-sm-12 my-1">
                                <!--begin::Aside menu-->
                                <div class="aside-menu flex-column-fluid border border-stroke border-primary rounded-2 p-2 bg-white z-index-1">
                                    <h1 class="fs-5 my-5 ms-8 fw-bold">Gruplar</h1>
                                    <!--begin::Aside Menu-->
                                    <div class="hover-scroll-overlay-y" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true, md; true,}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="0">
                                        <!--begin::Menu-->
                                        <div class="menu menu-column menu-title-gray-700 menu-icon-gray-400 menu-arrow-gray-400 fw-semibold" data-kt-menu="true" id="pw-seda-menu">
                                            <!--begin::Menu item-->
                                            <div class="menu-item menu-sub-indention menu-accordion show" data-kt-menu-trigger="click">
                                                <!--begin::Menu link-->
                                                <a href="#" class="menu-link ps-0 d-block pt-1 pb-0">
                                                    <span class="menu-arrow float-start"></span>
                                                    <div class="d-flex justify-content-between align-items-center border-bottom pb-2">
                                                        <div class="d-flex align-items-center">
                                                            <i class="fa-solid fa-folder text-primary fs-6 ms-2"></i>
                                                            <span class="fs-8 fw-bold mb-0 pw-text-gray-800 menu-title ps-2">
                                                                eFatura Arşivim
                                                            </span>
                                                        </div>
                                                        <i class="fa-sharp fa-regular fa-angle-right text-primary fs-8"></i>
                                                    </div>
                                                </a>
                                                <!--end::Menu link-->

                                                <!--begin::Menu sub-->
                                                <div class="menu-sub menu-sub-accordion ms-7 me-3">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item border-bottom">
                                                        <div class="menu-link ps-2">
                                                            <input class="form-check-input w-15px h-15px" type="radio" value="" name="" disabled>
                                                            <i class="fa-solid fa-input-numeric pw-text-neutral-300 fs-9 ms-2"></i>
                                                            <span class="fs-8 fw-bold mb-0 pw-text-gray-300 menu-title ps-2">Detay Sıra No</span>
                                                        </div>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item border-bottom">
                                                        <div class="menu-link ps-2">
                                                            <input class="form-check-input w-15px h-15px" type="radio" value="" name="">
                                                            <i class="fa-solid fa-calendar text-primary fs-7 ms-2"></i>
                                                            <span class="fs-8 fw-bold mb-0 pw-text-gray-800 menu-title ps-2">Fatura Tarihi</span>
                                                        </div>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item border-bottom">
                                                        <div class="menu-link ps-2">
                                                            <input class="form-check-input w-15px h-15px" type="radio" value="" name="" checked>
                                                            <i class="fa-solid fa-dollar-sign text-primary fs-7 ms-2"></i>
                                                            <span class="fs-8 fw-bold mb-0 pw-text-gray-800 menu-title ps-2">KDV Tutari</span>
                                                        </div>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item border-bottom">
                                                        <div class="menu-link ps-2">
                                                            <input class="form-check-input w-15px h-15px" type="radio" value="" name="">
                                                            <i class="fa-solid fa-file-pen text-primary fs-7 ms-2"></i>
                                                            <span class="fs-8 fw-bold mb-0 pw-text-gray-800 menu-title ps-2">Alıcı Adı</span>
                                                        </div>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item border-bottom">
                                                        <div class="menu-link ps-2">
                                                            <input class="form-check-input w-15px h-15px" type="radio" value="" name="" disabled>
                                                            <i class="fa-solid fa-file-pen pw-text-neutral-300 fs-7 ms-2"></i>
                                                            <span class="fs-8 fw-bold mb-0 pw-text-gray-300 menu-title ps-2">Alıcı Adı</span>
                                                        </div>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item">
                                                        <div class="menu-link ps-2">
                                                            <input class="form-check-input w-15px h-15px" type="radio" value="" name="">
                                                            <i class="fa-solid fa-dollar-sign text-primary fs-7 ms-2"></i>
                                                            <span class="fs-8 fw-bold mb-0 pw-text-gray-800 menu-title ps-2">KDV Tutari</span>
                                                        </div>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu sub-->
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->  
                                    </div>
                                    <!--end::Aside Menu-->
                                    <div class="my-2 ms-15">
                                        <a href="#" class="fs-7 fw-bold">Tümünü Gör</a>
                                    </div>
                                </div>
                                <!--end::Aside menu-->
                            </div>
                            
                            <!--begin::Middle wedge content-->
                            <div class="" style="display: contents">
                                <div class="bg-white z-index-1 mt-12">      
                                    <div class="d-flex align-items-center justify-content-center border border-gray-400 rounded-circle w-40px h-40px"><i class="fa-solid fa-plus text-primary fs-7 text-center v-middle"></i></div>
                                </div>
                            </div>
                            <!--end::Middle wedge content-->

                            <div class="col-md-4 col-sm-12 my-1">
                                <!--begin::Aside menu-->
                                <div class="aside-menu flex-column-fluid border border-stroke border-primary rounded-2 p-2 bg-white z-index-1">
                                    <h1 class="fs-5 my-5 mb-2 ms-8 fw-bold">Gruplar</h1>
                                    <!--begin::Aside Menu-->
                                    <div class="hover-scroll-overlay-y" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true, md; true,}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="0">
                                        <!--begin::Menu-->
                                        <div class="menu menu-column menu-title-gray-700 menu-icon-gray-400 menu-arrow-gray-400 fw-semibold" data-kt-menu="true" id="pw-seda-menu">
                                            <!--begin::Menu item-->
                                            <div class="menu-item menu-sub-indention menu-accordion show" data-kt-menu-trigger="click">
                                                <!--begin::Menu sub-->
                                                <div class="menu-sub menu-sub-accordion me-3">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item border-bottom">
                                                        <div class="menu-link ps-2">
                                                            <input class="form-check-input w-15px h-15px" type="radio" value="" name="">
                                                            <span class="fs-8 fw-bold mb-0  menu-title pw-text-gray-800 ps-2">Alıcı Abone No</span>
                                                        </div>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item border-bottom">
                                                        <div class="menu-link ps-2">
                                                            <input class="form-check-input w-15px h-15px" type="radio" value="" name="">
                                                            <span class="fs-8 fw-bold mb-0 pw-text-gray-800 menu-title ps-2">Satıcı Fax</span>
                                                        </div>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item border-bottom">
                                                        <div class="menu-link ps-2">
                                                            <input class="form-check-input w-15px h-15px" type="radio" value="" name="" disabled>
                                                            <span class="fs-8 fw-bold mb-0 text-gray-400 menu-title ps-2">Sipariş No</span>
                                                        </div>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item border-bottom">
                                                        <div class="menu-link ps-2">
                                                            <input class="form-check-input w-15px h-15px" type="radio" value="" name="">
                                                            <span class="fs-8 fw-bold mb-0 pw-text-gray-800 menu-title ps-2">Vergi Dairesi</span>
                                                        </div>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item border-bottom">
                                                        <div class="menu-link ps-2">
                                                            <input class="form-check-input w-15px h-15px" type="radio" value="" name="" checked>
                                                            <span class="fs-8 fw-bold mb-0 pw-text-gray-300 menu-title ps-2">KDV</span>
                                                        </div>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item border-bottom">
                                                        <div class="menu-link ps-2">
                                                            <input class="form-check-input w-15px h-15px" type="radio" value="" name="" disabled>
                                                            <span class="fs-8 fw-bold mb-0 text-gray-400 menu-title ps-2">eFatura FH</span>
                                                        </div>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item">
                                                        <div class="menu-link ps-2">
                                                            <input class="form-check-input w-15px h-15px" type="radio" value="" name="">
                                                            <span class="fs-8 fw-bold mb-0 pw-text-gray-300 menu-title ps-2">KDV Tutarı</span>
                                                        </div>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu sub-->
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->  
                                    </div>
                                    <!--end::Aside Menu-->
                                    <div class="my-2 ms-12">
                                        <a href="#" class="fs-7 fw-bold">Tümünü Gör</a>
                                    </div>
                                </div>
                                <!--end::Aside menu-->
                            </div>

                            <!--begin::Middle wedge content-->
                            <div class="" style="display: contents">
                                <div class="bg-white z-index-1 mt-12">      
                                    <div class="d-flex align-items-center justify-content-center border border-gray-400 rounded-circle w-40px h-40px"><i class="fa-solid fa-link text-primary fs-7"></i></div>
                                    <div class="mt-8">
                                        <a href="/#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-40px h-40px rounded-0.5 me-1 my-1">
                                            <i class="fa-sharp fa-regular fa-angle-right fs-7 text-primary"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!--end::Middle wedge content-->

                            <div class="col-md-3 col-sm-12 my-1">
                                <!--begin::Aside menu-->
                                <div class="aside-menu flex-column-fluid border border-dashed border-primary rounded-2 bg-white z-index-1 h-100">
                                    <h1 class="fs-5 mt-7 mb-3 ms-8 fw-bold">Birleştirme</h1>
                                    <!--begin::Aside Menu-->
                                    <div class="hover-scroll-overlay-y" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true, md; true,}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="0">
                                        <!--begin::Menu-->
                                        <div class="menu menu-column menu-title-gray-700 menu-icon-gray-400 menu-arrow-gray-400 fw-semibold" data-kt-menu="true" id="pw-seda-menu">
                                            <!--begin::Menu item-->
                                            <div class="menu-item menu-sub-indention menu-accordion show" data-kt-menu-trigger="click">
                                                <!--begin::Menu sub-->
                                                <div class="menu-sub menu-sub-accordion mx-0">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item border-bottom">
                                                        <div class="menu-link d-flex justify-content-between border-bottom border-top border-primary pw-bg-primary-200 px-5 py-1">
                                                            <button class="d-flex border bg-white px-2 py-1">
                                                                <div class="d-flex align-items-center me-3">
                                                                    <i class="fa-solid fa-dollar-sign text-primary fs-7"></i>
                                                                    <span class="fs-8 fw-bold mb-0 menu-title ps-2">KDV Tutarı</span>
                                                                </div>
                                                                <div class="d-flex align-items-center">
                                                                    <i class="fa-solid fa-link text-primary fs-7"></i>
                                                                    <span class="fs-8 fw-bold mb-0 menu-title ps-2">KDV</span>
                                                                </div>
                                                            </button>
                                                            <button class="border-0 bg-transparent"><i class="fa-regular fa-circle-xmark text-danger fs-7"></i></button>
                                                        </div>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item">
                                                        <div class="menu-link ps-5">
                                                            <div class="w-100 pb-3 border-bottom">
                                                                <div class="d-flex align-items-center float-start me-5">
                                                                    <i class="fa-solid fa-input-numeric text-primary fs-7"></i>
                                                                    <span class="fs-8 fw-bold mb-0 menu-title ps-2">Detay Sıra No</span>
                                                                </div>
                                                                <div class="d-flex align-items-center float-start">
                                                                    <i class="fa-solid fa-link text-primary fs-7"></i>
                                                                    <span class="fs-8 fw-bold mb-0 menu-title ps-2">Sipariş No</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end::Menu item-->

                                                </div>
                                                <!--end::Menu sub-->
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->  
                                    </div>
                                    <!--end::Aside Menu-->
                                </div>
                                <!--end::Aside menu-->
                            </div>
                        </div>
                        <!--end::Tab Bottom content-->
                    </div>
                    <!--end::Goster content-->
                </div>
                <!--end::Tab contents-->
            </div>
            <!--end::Bottom content-->           

            <!--begin::Form actions-->
            <div class="row">
                <div class="d-flex align-items-center justify-content-end gap-3 border-top pw-border-stroke pt-5">
                    <button type="reset" class="btn btn-active-light fs-8 py-3 px-6">
                        İptal
                    </button>
                    <button type="submit" class="btn btn-primary fs-8 py-3 px-6">
                        Kaydet
                    </button>
                </div>
            </div>
            <!--end::Form actions-->
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