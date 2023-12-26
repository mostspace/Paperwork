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
            <!--begin::Bottom content-->
            <div class="row">
                <!--begin::Tab header wrapper-->
                <div class="table-reponsive overflow-x-auto">
                    <!--begin::Table tabs-->
                    <div class="nav nav-tabs nav-line-tabs fs-6 gap-8" role="tablist">
                        <!--begin::Tab item-->
                        <li class="nav-item" role="presentation">
                            <a class="nav-link mx-0 pt-3 pb-6 fs-base rounded-0 fw-semibold active" data-bs-toggle="tab" href="#pw_tab_pane_kep_hesap_bilgilerri" aria-selected="true" role="tab">KEP Hesap Bilgileri</a>
                        </li>
                        <!--end::Tab item-->

                        <!--begin::Tab item-->
                        <li class="nav-item" role="presentation">
                            <a class="nav-link mx-0 pt-3 pb-6 fs-base rounded-0" data-bs-toggle="tab" href="#pw_tab_pane_arsiv_bilgileri" aria-selected="false" role="tab">Arşiv Bilgileri</a>
                        </li>
                        <!--end::Tab item-->

                        <!--begin::Tab item-->
                        <li class="nav-item" role="presentation">
                            <a class="nav-link mx-0 pt-3 pb-6 fs-base rounded-0" data-bs-toggle="tab" href="#pw_tab_pane_kep_adresleri" aria-selected="false" role="tab">KEP Adresleri</a>
                        </li>
                        <!--end::Tab item-->

                        <!--begin::Tab item-->
                        <li class="nav-item" role="presentation">
                            <a class="nav-link mx-0 pt-3 pb-6 fs-base rounded-0" data-bs-toggle="tab" href="#pw_tab_pane_imza_yetkileri" aria-selected="false" role="tab">İmza Yetkileri</a>
                        </li>
                        <!--end::Tab item-->
                    </div>
                    <!--end::Table tabs-->
                </div>
                <!--end::Tab header wrapper-->

                <!--begin::Tab contents-->
                <div class="tab-content pw-dashboard-tab-content mt-6" id="kabinetTabContents">
                    <!--begin::Ozellikler content-->
                    <div class="tab-pane fade active show" id="pw_tab_pane_kep_hesap_bilgilerri" role="tabpanel">
                        <!--begin::Form-->
                        <form class="d-flex flex-column gap-13">
                            <div class="col col-lg-8">
                                <!--begin::Table-->
                                <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                                    <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fw-bold fs-7">
                                        <tbody>
                                            <!--begin::Row-->
                                            <tr>
                                                <td class="col-md-3"><label for="pw_adi">KEP Adı</label></td>
                                                <td class="col-md-9">
                                                    <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" name="" required />
                                                </td>
                                            </tr>
                                            <!--end::Row-->

                                            <!--begin::Row-->
                                            <tr>
                                                <td class="col-md-3"><label for="pw_tasarim_yetki_seti">Entegratör</label></td>
                                                <td class="col-md-9">
                                                    <select id="pw_roller_bilgi_1" class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2" data-placeholder="Seçim Yapın" tabindex="0" aria-hidden="false" data-kt-initialized="1">
                                                        <option value="1"></option>
                                                        <option value="2">Option 2</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <!--end::Row-->

                                            <!--begin::Row-->
                                            <tr>
                                                <td class="col-md-3"><label for="pw_adi">Adres</label></td>
                                                <td class="col-md-9">
                                                    <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" name="" />
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
                        <div class="row">
                            <h3 class="mt-7">Kullanıcı Yönetimi</h1>
                            <!--begin::Tips-->

                            <div class="col col-lg-8">
                                <div class="d-flex align-items-center justify-content-between gap-3 border border-dashed border-primary pw-bg-primary-100 rounded-1 p-4 my-13 mt-7">
                                    <div class="d-flex align-items-center">
                                        <!--begin::Icon-->
                                        <i class="fa-solid fa-user-plus pw-text-primary-500 fs-1"></i>
                                        <!--end::Icon-->
                                        <!--begin::Tip content-->
                                        <p class="fs-base fw-medium pw-text-neutral-600 mb-0 ms-2">
                                            Henüz bir kullanıcı bulunmuyor.
                                        </p>
                                        <!--end::Tip content-->
                                    </div>                                
                                    <button class="btn btn-primary fs-7" data-bs-toggle="modal" data-bs-target="#kullaniciEkle">Kullanıcı Ekle</button>
                                </div>
                            </div>
                            <!--end::Tips-->
                        </div>

                        <div class="row">
                            <div class="text-end my-5">
                                <button class="btn btn-outline btn-outline-primary btn-active-light-primary fs-7">+ Yeni Kullanıcı Ekle</button>
                            </div>
                            <!--begin::Table-->
                            <div class="table-responsive overflow-x-auto rounded">
                                <!--begin::Table-Light-->
                                <table class="table table-row-bordered border pw-dark-bg-table pw-table-border-gray pw-table-border-gray table-rounded align-middle w-max-content min-w-100 gy-2 gx-9 gs-9">
                                    <thead>
                                        <tr class="fw-semibold fs-8 pw-text-neutral-700 pw-bg-neutral-100">
                                            <th class="py-3">KULLANICI ADI</th>
                                            <th class="py-3">KEP KULLANICI ADI</th>
                                            <th class="py-3">ETİKET</th>
                                            <th class="py-3"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!--begin::Row-->
                                        <tr class="fw-medium pw-text-neutral-700 fs-8">
                                            <td>
                                                <div class="d-flex align-items-center flex-nowrap gap-2">
                                                    <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0"></div>
                                                    <div>Adem Aydın</div>
                                                </div>
                                            </td>
                                            <td>Test</td>
                                            <td>Test</td>
                                            <td align="right">
                                                <a href="/tanimlamalar/sistem/plugin-tanimlamalari/#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5" data-bs-toggle="modal" data-bs-target="#duzenle">
                                                    <i class="fa-solid fa-pen-to-square fs-7 text-primary"></i>
                                                </a>
                                                <a href="/tanimlamalar/sistem/plugin-tanimlamalari/#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                                                    <i class="fa-solid fa-trash fs-7 text-primary"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <!--end::Row-->
                                        
                                        <!--begin::Row-->
                                        <tr class="fw-medium pw-text-neutral-700 fs-8">
                                            <td>
                                                <div class="d-flex align-items-center flex-nowrap gap-2">
                                                    <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0"></div>
                                                    <div>Adem Aydın</div>
                                                </div>
                                            </td>
                                            <td>Test</td>
                                            <td>Test</td>
                                            <td align="right">
                                                <a href="/tanimlamalar/sistem/plugin-tanimlamalari/#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5" data-bs-toggle="modal" data-bs-target="#duzenle">
                                                    <i class="fa-solid fa-pen-to-square fs-7 text-primary"></i>
                                                </a>
                                                <a href="/tanimlamalar/sistem/plugin-tanimlamalari/#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                                                    <i class="fa-solid fa-trash fs-7 text-primary"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <!--end::Row-->

                                        <!--begin::Row-->
                                        <tr class="fw-medium pw-text-neutral-700 fs-8">
                                            <td>
                                                <div class="d-flex align-items-center flex-nowrap gap-2">
                                                    <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0"></div>
                                                    <div>Adem Aydın</div>
                                                </div>
                                            </td>
                                            <td>Test</td>
                                            <td>Test</td>
                                            <td align="right">
                                                <a href="/tanimlamalar/sistem/plugin-tanimlamalari/#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5" data-bs-toggle="modal" data-bs-target="#duzenle">
                                                    <i class="fa-solid fa-pen-to-square fs-7 text-primary"></i>
                                                </a>
                                                <a href="/tanimlamalar/sistem/plugin-tanimlamalari/#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                                                    <i class="fa-solid fa-trash fs-7 text-primary"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <!--end::Row-->

                                        <!--begin::Row-->
                                        <tr class="fw-medium pw-text-neutral-700 fs-8">
                                            <td>
                                                <div class="d-flex align-items-center flex-nowrap gap-2">
                                                    <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0"></div>
                                                    <div>Adem Aydın</div>
                                                </div>
                                            </td>
                                            <td>Test</td>
                                            <td>Test</td>
                                            <td align="right">
                                                <a href="/tanimlamalar/sistem/plugin-tanimlamalari/#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5" data-bs-toggle="modal" data-bs-target="#duzenle">
                                                    <i class="fa-solid fa-pen-to-square fs-7 text-primary"></i>
                                                </a>
                                                <a href="/tanimlamalar/sistem/plugin-tanimlamalari/#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                                                    <i class="fa-solid fa-trash fs-7 text-primary"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <!--end::Row-->

                                        <!--begin::Row-->
                                        <tr class="fw-medium pw-text-neutral-700 fs-8">
                                            <td>
                                                <div class="d-flex align-items-center flex-nowrap gap-2">
                                                    <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0"></div>
                                                    <div>Adem Aydın</div>
                                                </div>
                                            </td>
                                            <td>Test</td>
                                            <td>Test</td>
                                            <td align="right">
                                                <a href="/tanimlamalar/sistem/plugin-tanimlamalari/#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5" data-bs-toggle="modal" data-bs-target="#duzenle">
                                                    <i class="fa-solid fa-pen-to-square fs-7 text-primary"></i>
                                                </a>
                                                <a href="/tanimlamalar/sistem/plugin-tanimlamalari/#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                                                    <i class="fa-solid fa-trash fs-7 text-primary"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <!--end::Row-->
                                    </tbody>
                                </table>
                                <!--end::Table-Light-->
                            </div>
                            <!--end::Table-->
                        </div>
                    </div>
                    <!--end::Ozellikler content-->

                    <!--begin::Goster content-->
                    <div class="tab-pane fade" id="pw_tab_pane_arsiv_bilgileri" role="tabpanel">
                        <!--begin::Form-->
                        <form class="d-flex flex-column gap-13">
                            <div class="col col-lg-8">
                                <!--begin::Table-->
                                <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                                    <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fw-bold fs-7">
                                        <tbody>
                                            <!--begin::Row-->
                                            <tr>
                                                <td class="col-md-3"><label for="">Yetki Seti</label></td>
                                                <td class="col-md-9">
                                                    <select id="" class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2" data-placeholder="" tabindex="0" aria-hidden="false" data-kt-initialized="1">
                                                        <option value="1">Option 1</option>
                                                        <option value="2">Option 2</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <!--end::Row-->

                                            <!--begin::Row-->
                                            <tr>
                                                <td class="col-md-3"><label for="">Kabinet Yolu</label></td>
                                                <td class="col-md-9">
                                                    <select id="" class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2" data-placeholder="" tabindex="0" aria-hidden="false" data-kt-initialized="1">
                                                        <option value="1">Option 1</option>
                                                        <option value="2">Option 2</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <!--end::Row-->

                                            <!--begin::Row-->
                                            <tr>
                                                <td class="col-md-3"><label for="">Dosya Kartı Adı</label></td>
                                                <td class="col-md-9">
                                                    <select id="" class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2" data-placeholder="" tabindex="0" aria-hidden="false" data-kt-initialized="1">
                                                        <option value="1">Option 1</option>
                                                        <option value="2">Option 2</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <!--end::Row-->
                                            
                                            <!--begin::Row-->
                                            <tr>
                                                <td class="col-md-3"><label for="">Gelen Dizini</label></td>
                                                <td class="col-md-9">
                                                    <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" name="" />
                                                </td>
                                            </tr>
                                            <!--end::Row-->

                                            <!--begin::Row-->
                                            <tr>
                                                <td class="col-md-3"><label for="">Gelen Dizini</label></td>
                                                <td class="col-md-9">
                                                    <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" name="" />
                                                </td>
                                            </tr>
                                            <!--end::Row-->

                                            <!--begin::Row-->
                                            <tr>
                                                <td class="col-md-3"><label for="">Ekler Dizini</label></td>
                                                <td class="col-md-9">
                                                    <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" name="" />
                                                </td>
                                            </tr>
                                            <!--end::Row-->

                                            <!--begin::Row-->
                                            <tr>
                                                <td class="col-md-3">
                                                    <label for="akisa_gonder">Akışa Gönder</label>
                                                </td>
                                                <td class="col-md-9">
                                                    <input type="checkbox" class="form-check-input bg-blue bg-blue w-25px h-25px" value="" id="akisa_gonder" name="pw_akisa_gonder" checked>
                                                </td>
                                            </tr>
                                            <!--end::Row-->

                                             <!--begin::Row-->
                                             <tr>
                                                <td class="col-md-3"><label for="">Akış</label></td>
                                                <td class="col-md-9">
                                                    <select id="" class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2" data-placeholder="" tabindex="0" aria-hidden="false" data-kt-initialized="1">
                                                        <option value="1">Option 1</option>
                                                        <option value="2">Option 2</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <!--end::Row-->

                                            <!--begin::Row-->
                                            <tr>
                                                <td class="col-md-3"><label for="formu_goster">Formu Göster</label></td>
                                                <td class="col-md-9">
                                                    <input type="checkbox" class="form-check-input bg-blue bg-blue  w-25px h-25px" id="formu_goster" name="pw_formu_goster" checked>
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

                        <!--begin::Bottom content-->
                        <div class="row">
                            <!--begin::Tab header wrapper-->
                            <div class="table-reponsive overflow-x-auto">
                                <!--begin::Table tabs-->
                                <div class="nav nav-tabs nav-line-tabs fs-6 gap-8" role="tablist">
                                    <!--begin::Tab item-->
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link mx-0 pt-3 pb-6 fs-base rounded-0 fw-semibold active" data-bs-toggle="tab" href="#pw_tab_pane_dosya_karti" aria-selected="true" role="tab">Dosya Kartı</a>
                                    </li>
                                    <!--end::Tab item-->

                                    <!--begin::Tab item-->
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link mx-0 pt-3 pb-6 fs-base rounded-0 fw-semibold px-2" data-bs-toggle="tab" href="#pw_tab_pane_akis" aria-selected="true" role="tab">Akış</a>
                                    </li>
                                    <!--end::Tab item-->
                                </div>
                                <!--end::Table tabs-->
                            </div>
                            <!--end::Tab header wrapper-->

                            <!--begin::Tab contents-->
                            <div class="tab-content pw-dashboard-tab-content mt-6">
                                <!--begin::Dosya Kartı content-->
                                <div class="tab-pane fade active show" id="pw_tab_pane_dosya_karti" role="tabpanel">
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
                                                                            DT Version Check
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
                                                                        <span class="fs-8 fw-bold mb-0 pw-text-gray-300 menu-title ps-2">Sayı Alanı</span>
                                                                    </div>
                                                                </div>
                                                                <!--end::Menu item-->

                                                                <!--begin::Menu item-->
                                                                <div class="menu-item border-bottom">
                                                                    <div class="menu-link ps-2">
                                                                        <input class="form-check-input w-15px h-15px" type="radio" value="" name="">
                                                                        <i class="fa-solid fa-calendar text-primary fs-7 ms-2"></i>
                                                                        <span class="fs-8 fw-bold mb-0 pw-text-gray-800 menu-title ps-2">Tarih Alanı</span>
                                                                    </div>
                                                                </div>
                                                                <!--end::Menu item-->

                                                                <!--begin::Menu item-->
                                                                <div class="menu-item border-bottom">
                                                                    <div class="menu-link ps-2">
                                                                        <input class="form-check-input w-15px h-15px" type="radio" value="" name="" checked>
                                                                        <i class="fa-solid fa-dollar-sign text-primary fs-7 ms-2"></i>
                                                                        <span class="fs-8 fw-bold mb-0 pw-text-gray-800 menu-title ps-2">Para Birimi</span>
                                                                    </div>
                                                                </div>
                                                                <!--end::Menu item-->

                                                                <!--begin::Menu item-->
                                                                <div class="menu-item border-bottom">
                                                                    <div class="menu-link ps-2">
                                                                        <input class="form-check-input w-15px h-15px" type="radio" value="" name="">
                                                                        <i class="fa-solid fa-file-pen text-primary fs-7 ms-2"></i>
                                                                        <span class="fs-8 fw-bold mb-0 pw-text-gray-800 menu-title ps-2">Adı Soyadı</span>
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
                                                                        <span class="fs-8 fw-bold mb-0  menu-title pw-text-gray-800 ps-2">Mesaj</span>
                                                                    </div>
                                                                </div>
                                                                <!--end::Menu item-->

                                                                <!--begin::Menu item-->
                                                                <div class="menu-item border-bottom">
                                                                    <div class="menu-link ps-2">
                                                                        <input class="form-check-input w-15px h-15px" type="radio" value="" name="">
                                                                        <span class="fs-8 fw-bold mb-0 pw-text-gray-800 menu-title ps-2">Diğer</span>
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
                                                                        <span class="fs-8 fw-bold mb-0 pw-text-gray-800 menu-title ps-2">Kimden</span>
                                                                    </div>
                                                                </div>
                                                                <!--end::Menu item-->

                                                                <!--begin::Menu item-->
                                                                <div class="menu-item border-bottom">
                                                                    <div class="menu-link ps-2">
                                                                        <input class="form-check-input w-15px h-15px" type="radio" value="" name="" checked>
                                                                        <span class="fs-8 fw-bold mb-0 pw-text-gray-300 menu-title ps-2">Tarih</span>
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
                                <!--end::Dosya Kartı content-->

                                <!--begin::Akış content-->
                                <div class="tab-pane fade" id="pw_tab_pane_akis" role="tabpanel"></div>
                                <!--end::Akış content-->
                            </div>
                            <!--end::Tab contents-->
                        </div>
                        <!--end::Bottom content-->  
                    </div>
                    <!--end::Goster content-->

                    <!--begin::Goster content-->
                    <div class="tab-pane fade" id="pw_tab_pane_kep_adresleri" role="tabpanel">
                        <div class="row my-10">
                            <div class="col col-lg-8">
                                <label class="btn btn-outline btn-outline-dashed btn-outline-default d-flex justify-content-between text-start p-6" data-kt-button="true">
                                    <span class="ms-5">
                                        <span class="fs-5 fw-bolder mb-1 d-block">Address 1 <span class="badge badge-light-success">Primary</span></span>
                                        <span class="fw-bold fs-8 text-gray-600">Ap #285-7193 Ullamcorper Avenue<br>Amesbury HI 93373<br>United States</span>
                                    </span>
                                    <div class="d-flex align-items-center">
                                        <a href="#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-40px h-40px rounded-0.5 me-3" data-bs-toggle="modal" data-bs-target="">
                                            <i class="fa-solid fa-pen-to-square fs-6 text-primary"></i>
                                        </a>
                                        <a href="#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-40px h-40px rounded-0.5">
                                            <i class="fa-solid fa-trash fs-6 text-primary"></i>
                                        </a>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <div class="row my-10">
                            <div class="col col-lg-8">
                                <label class="btn btn-outline btn-outline-dashed btn-outline-default d-flex justify-content-between text-start p-6" data-kt-button="true">
                                    <span class="ms-5">
                                        <span class="fs-5 fw-bolder mb-1 d-block">Address 2</span>
                                        <span class="fw-bold fs-8 text-gray-600">Ap #285-7193 Illinois Avenue<br>Chicago IL 50140<br>United States</span>
                                    </span>
                                    <div class="d-flex align-items-center">
                                        <a href="#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-40px h-40px rounded-0.5 me-3" data-bs-toggle="modal" data-bs-target="">
                                            <i class="fa-solid fa-pen-to-square fs-6 text-primary"></i>
                                        </a>
                                        <a href="#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-40px h-40px rounded-0.5">
                                            <i class="fa-solid fa-trash fs-6 text-primary"></i>
                                        </a>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col col-lg-8 text-end">
                                <button class="btn btn-primary fs-7" data-bs-toggle="modal" data-bs-target="#yeniAdresEkle">+ Yeni Adres Ekle</button>
                            </div>
                        </div>
                    </div>
                    <!--end::Goster content-->

                    <!--begin::Goster content-->
                    <div class="tab-pane fade" id="pw_tab_pane_imza_yetkileri" role="tabpanel">
                        <div class="row ps-3 pe-5">
                            <h6 class="px-0 my-5">Kurumlar</h3>
                            <div class="border rounded-2">
                                <div class="row">
                                    <div class="col-lg-2"></div>
                                    <div class="col-lg-10">
                                        <div class="col col-md-12 col-lg-10 border-start p-7 pb-2">
                                            <div class="row mb-7">
                                                <div class="col-lg-2">
                                                    <label class="fs-7 fw-bold form-label mt-3 me-20">KKK</label>
                                                </div>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control form-control-solid" name="name" value="" />
                                                </div>
                                            </div>

                                            <div class="row mb-7">
                                                <div class="col-lg-2">
                                                    <label class="fs-7 fw-bold form-label mt-3 me-20">Adı</label>
                                                </div>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control form-control-solid" name="name" value="" />
                                                </div>
                                            </div>

                                            <div class="row mb-7">
                                                <div class="col-lg-2">
                                                    <label class="fs-7 fw-bold form-label mt-3 me-20">Telefon</label>
                                                </div>
                                                <div class="col-lg-10">
                                                    <div class="row">
                                                        <div class="col-sm-12 col-lg-4"><input type="text" class="form-control form-control-solid" name="name" value="" /></div>
                                                        <div class="col-sm-12 col-lg-4"><label class="fs-7 fw-bold form-label mt-3 me-20">Telefon2</label></div>
                                                        <div class="col-sm-12 col-lg-4"><input type="text" class="form-control form-control-solid" name="name" value="" /></div>
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                            <div class="row mb-7">
                                                <div class="col-lg-2">
                                                    <label class="fs-7 fw-bold form-label mt-3 me-20">Faks</label>
                                                </div>
                                                <div class="col-lg-10">
                                                    <div class="row">
                                                        <div class="col-sm-12 col-lg-4"><input type="text" class="form-control form-control-solid" name="name" value="" /></div>
                                                        <div class="col-sm-12 col-lg-4"><label class="fs-7 fw-bold form-label mt-3 me-20">İl</label></div>
                                                        <div class="col-sm-12 col-lg-4"><input type="text" class="form-control form-control-solid" name="name" value="" /></div>
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                            <div class="row mb-7">
                                                <div class="col-lg-2">
                                                    <label class="fs-7 fw-bold form-label mt-3 me-20">İlçe</label>
                                                </div>
                                                <div class="col-lg-10">
                                                    <div class="row">
                                                        <div class="col-sm-12 col-lg-4"><input type="text" class="form-control form-control-solid" name="name" value="" /></div>
                                                        <div class="col-sm-12 col-lg-4"><label class="fs-7 fw-bold form-label mt-3 me-20">Ülke</label></div>
                                                        <div class="col-sm-12 col-lg-4"><input type="text" class="form-control form-control-solid" name="name" value="" /></div>
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                            <div class="row mb-7">
                                                <div class="col-lg-2">
                                                    <label class="fs-7 fw-bold form-label mt-3 me-20">Web</label>
                                                </div>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control form-control-solid" name="name" value="" />
                                                </div>
                                            </div>

                                            <div class="row mb-7">
                                                <div class="col-lg-2">
                                                    <label class="fs-7 fw-bold form-label mt-3 me-20">Elektronik Posta</label>
                                                </div>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control form-control-solid" name="name" value="" />
                                                </div>
                                            </div>

                                            <div class="row mb-7">
                                                <div class="col-lg-2">
                                                    <label class="fs-7 fw-bold form-label mt-3 me-20">Adres</label>
                                                </div>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control form-control-solid" name="name" value="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-10 pe-7 mb-7">
                                            <!--begin::Action buttons-->
                                            <div class="d-flex justify-content-end mt-5">
                                                <!--begin::Button-->
                                                <button type="reset" data-kt-contacts-type="cancel" class="btn btn-light me-3 fs-7">Sil</button>
                                                <!--end::Button-->
                                                <!--begin::Button-->
                                                <button type="submit" data-kt-contacts-type="submit" class="btn btn-primary fs-7">
                                                    <span class="indicator-label">Ekle</span>
                                                    <span class="indicator-progress">Please wait...
                                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                </button>
                                                <!--end::Button-->
                                            </div>
                                            <!--end::Action buttons-->
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>

                            <h6 class="px-0 my-7">Gerçek Kişiler</h3>
                            <div class="border rounded-2">
                                <div class="row">
                                    <div class="col-lg-2"></div>
                                    <div class="col-lg-10">
                                        <div class="col col-md-12 col-lg-10 border-start p-7 pb-2">
                                            <div class="row mb-7">
                                                <div class="col-lg-2">
                                                    <label class="fs-7 fw-bold form-label mt-3 me-20">TCKN</label>
                                                </div>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control form-control-solid" name="name" value="" />
                                                </div>
                                            </div>

                                            <div class="row mb-7">
                                                <div class="col-lg-2">
                                                    <label class="fs-7 fw-bold form-label mt-3 me-20">Görev</label>
                                                </div>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control form-control-solid" name="name" value="" />
                                                </div>
                                            </div>

                                            <div class="row mb-7">
                                                <div class="col-lg-2">
                                                    <label class="fs-7 fw-bold form-label mt-3 me-20">Ünvanı</label>
                                                </div>
                                                <div class="col-lg-10">
                                                    <div class="row">
                                                        <div class="col-sm-12 col-lg-4"><input type="text" class="form-control form-control-solid" name="name" value="" /></div>
                                                        <div class="col-sm-12 col-lg-4"><label class="fs-7 fw-bold form-label mt-3 me-20">Ön Ek</label></div>
                                                        <div class="col-sm-12 col-lg-4"><input type="text" class="form-control form-control-solid" name="name" value="" /></div>
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                            <div class="row mb-7">
                                                <div class="col-lg-2">
                                                    <label class="fs-7 fw-bold form-label mt-3 me-20">İlk Ad</label>
                                                </div>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control form-control-solid" name="name" value="" />
                                                </div>
                                            </div>

                                            <div class="row mb-7">
                                                <div class="col-lg-2">
                                                    <label class="fs-7 fw-bold form-label mt-3 me-20">Ad</label>
                                                </div>
                                                <div class="col-lg-10">
                                                    <div class="row">
                                                        <div class="col-sm-12 col-lg-4"><input type="text" class="form-control form-control-solid" name="name" value="" /></div>
                                                        <div class="col-sm-12 col-lg-4"><label class="fs-7 fw-bold form-label mt-3 me-20">Soyad</label></div>
                                                        <div class="col-sm-12 col-lg-4"><input type="text" class="form-control form-control-solid" name="name" value="" /></div>
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                            <div class="row mb-7">
                                                <div class="col-lg-2">
                                                    <label class="fs-7 fw-bold form-label mt-3 me-20">Telefon</label>
                                                </div>
                                                <div class="col-lg-10">
                                                    <div class="row">
                                                        <div class="col-sm-12 col-lg-4"><input type="text" class="form-control form-control-solid" name="name" value="" /></div>
                                                        <div class="col-sm-12 col-lg-4"><label class="fs-7 fw-bold form-label mt-3 me-20">Ülke</label></div>
                                                        <div class="col-sm-12 col-lg-4"><input type="text" class="form-control form-control-solid" name="name" value="" /></div>
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                            <div class="row mb-7">
                                                <div class="col-lg-2">
                                                    <label class="fs-7 fw-bold form-label mt-3 me-20">Telefon2</label>
                                                </div>
                                                <div class="col-lg-10">
                                                    <div class="row">
                                                        <div class="col-sm-12 col-lg-4"><input type="text" class="form-control form-control-solid" name="name" value="" /></div>
                                                        <div class="col-sm-12 col-lg-4"><label class="fs-7 fw-bold form-label mt-3 me-20">Faks</label></div>
                                                        <div class="col-sm-12 col-lg-4"><input type="text" class="form-control form-control-solid" name="name" value="" /></div>
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                            <div class="row mb-7">
                                                <div class="col-lg-2">
                                                    <label class="fs-7 fw-bold form-label mt-3 me-20">Elektronik Posta</label>
                                                </div>
                                                <div class="col-lg-10">
                                                    <div class="row">
                                                        <div class="col-sm-12 col-lg-4"><input type="text" class="form-control form-control-solid" name="name" value="" /></div>
                                                        <div class="col-sm-12 col-lg-4"><label class="fs-7 fw-bold form-label mt-3 me-20">İl</label></div>
                                                        <div class="col-sm-12 col-lg-4"><input type="text" class="form-control form-control-solid" name="name" value="" /></div>
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                            <div class="row mb-7">
                                                <div class="col-lg-2">
                                                    <label class="fs-7 fw-bold form-label mt-3 me-20">Web</label>
                                                </div>
                                                <div class="col-lg-10">
                                                    <div class="row">
                                                        <div class="col-sm-12 col-lg-4"><input type="text" class="form-control form-control-solid" name="name" value="" /></div>
                                                        <div class="col-sm-12 col-lg-4"><label class="fs-7 fw-bold form-label mt-3 me-20">İlçe</label></div>
                                                        <div class="col-sm-12 col-lg-4"><input type="text" class="form-control form-control-solid" name="name" value="" /></div>
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                            <div class="row mb-7">
                                                <div class="col-lg-2">
                                                    <label class="fs-7 fw-bold form-label mt-3 me-20">Adres</label>
                                                </div>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control form-control-solid" name="name" value="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-10 pe-7 mb-7">
                                            <!--begin::Action buttons-->
                                            <div class="d-flex justify-content-end mt-5">
                                                <!--begin::Button-->
                                                <button type="reset" data-kt-contacts-type="cancel" class="btn btn-light me-3 fs-7">Sil</button>
                                                <!--end::Button-->
                                                <!--begin::Button-->
                                                <button type="submit" data-kt-contacts-type="submit" class="btn btn-primary fs-7">
                                                    <span class="indicator-label">Ekle</span>
                                                    <span class="indicator-progress">Please wait...
                                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                </button>
                                                <!--end::Button-->
                                            </div>
                                            <!--end::Action buttons-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Goster content-->
                </div>
                <!--end::Tab contents-->
            </div>
            <!--end::Bottom content-->           

            <!--begin::Form actions-->
            <div class="row">
                <div class="col-lg-11">
                    <div class="d-flex align-items-center justify-content-end gap-3 pt-5">
                        <button type="reset" class="btn btn-active-light fs-8 py-3 px-6">
                            Vazgeç
                        </button>
                        <button type="submit" class="btn btn-primary fs-8 py-3 px-6">
                            Kaydet
                        </button>
                    </div>
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

<!-- begin::Modal -->
<div class="modal fade" tabindex="-1" id="kullaniciEkle">
    <div class="modal-dialog modal-dialog-centered modal-lg mw-950px">
        <div class="modal-content">
            <div class="modal-header border pb-3">
                <h3 class="modal-title fs-5 fw-bolder">Kullanıcı Ekle</h3>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                <i class="fa-solid fa-xmark fs-5"></i>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body">
                <!--begin::Form-->
                <form>
                    <!--begin::Table-->
                    <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                        <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fw-bold fs-7">
                            <tbody>
                                <!--begin::Row-->
                                <tr>
                                    <td><label class="form-label fs-base fw-bolder" for="kullanicilar">Kullanıcılar</label></td>
                                    <td>
                                        <select id="kullanicilar" class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2">
                                            <option value="1">Option 1</option>
                                            <option value="2">Option 2</option>
                                        </select>
                                    </td>
                                </tr>
                                <!--end::Row-->

                                <!--begin::Row-->
                                <tr>
                                    <td><label class="form-label fs-base fw-bolder" for="">KEP Kullanıcı Adı</label></td>
                                    <td><input type="text" class="form-control form-control-solid py-3 px-4 fs-8" name="" value="" required disabled /></td>
                                </tr>
                                <!--end::Row-->

                                <!--begin::Row-->
                                <tr>
                                    <td><label class="form-label fs-base fw-bolder" for="">Etiket</label></td>
                                    <td><input type="text" class="form-control form-control-solid py-3 px-4 fs-8" name="" value="" required disabled /></td>
                                </tr>
                                <!--end::Row-->
                            </tbody>
                        </table>
                    </div>
                    <!--end::Table-->
                    </form>
                    <!--end::Form-->
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light fs-7" data-bs-dismiss="modal">Vazgeç</button>
                <button type="button" class="btn btn-primary fs-7">Ekle</button>
            </div>
        </div>
    </div>
</div>
<!-- end::Modal -->

<!-- begin::Modal -->
<div class="modal fade" tabindex="-1" id="yeniAdresEkle">
    <div class="modal-dialog modal-dialog-centered modal-lg mw-950px">
        <div class="modal-content">
            <div class="modal-header border pb-3">
                <h3 class="modal-title fs-5 fw-bolder">Yeni Adres Ekle</h3>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                <i class="fa-solid fa-xmark fs-5"></i>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body">
                <!--begin::Form-->
                <form>
                    <!--begin::Table-->
                    <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                        <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fw-bold fs-7">
                            <tbody>
                                <!--begin::Row-->
                                <tr>
                                    <td><label class="form-label fs-base fw-bolder" for="">Adres Adı</label></td>
                                    <td><input type="text" class="form-control form-control-solid py-3 px-4 fs-8" name="" value="" required disabled /></td>
                                </tr>
                                <!--end::Row-->

                                <!--begin::Row-->
                                <tr>
                                    <td><label class="form-label fs-base fw-bolder" for="">Adres</label></td>
                                    <td><input type="text" class="form-control form-control-solid py-3 px-4 fs-8" name="" value="" required disabled /></td>
                                </tr>
                                <!--end::Row-->
                            </tbody>
                        </table>
                    </div>
                    <!--end::Table-->
                </form>
                <!--end::Form-->
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light fs-7" data-bs-dismiss="modal">Vazgeç</button>
                <button type="button" class="btn btn-primary fs-7">Ekle</button>
            </div>
        </div>
    </div>
</div>
<!-- end::Modal -->


<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/foot.php'; ?>