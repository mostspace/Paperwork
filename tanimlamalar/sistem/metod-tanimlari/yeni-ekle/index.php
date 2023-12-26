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
            <li class="breadcrumb-item active"> Metod Tanımları</li>
            <!--end::Item-->
          </ul>
          <!--end::Breadcrumb-->
          
          <!--begin::Title-->
          <h1 class="page-heading d-flex text-dark fw-bold fs-4 flex-column justify-content-center my-0">
            Metod Tanımları
          </h1>
          <!--end::Title-->
        </div>
        <!--end::Page title-->
      </div>
      <!--end::Toolbar container-->
    </div>
    <!--end::Toolbar-->

    <!--begin::divider-->
    <div class="w-100 h-1px pw-bg-neutral-200 mt-4"></div>
    <!--end::divider-->

    <!--begin::Content -->
    <div class="">
        <!--begin::Tab header wrapper-->
        <div class="table-reponsive overflow-x-auto">
            <!--begin::Table tabs-->
            <div class="nav nav-tabs nav-line-tabs fs-6 px-6 gap-8" role="tablist">
                <!--begin::Tab item-->
                <li class="nav-item" role="presentation">
                    <a class="nav-link mx-0 pt-4 pb-2 fs-base rounded-0 fw-semibold active fs-7" data-bs-toggle="tab" href="#pw_tab_pane_detay" aria-selected="true" role="tab">Detay</a>
                </li>
                <!--end::Tab item-->

                <!--begin::Tab item-->
                <li class="nav-item" role="presentation">
                    <a class="nav-link mx-0 pt-4 pb-2 fs-base rounded-0 fs-7" data-bs-toggle="tab" href="#pw_tab_pane_kod" aria-selected="false" role="tab">Kod</a>
                </li>
                <!--end::Tab item-->

                <!--begin::Tab item-->
                <li class="nav-item" role="presentation">
                    <a class="nav-link mx-0 pt-4 pb-2 fs-base rounded-0 fs-7" data-bs-toggle="tab" href="#pw_tab_pane_tanimli_is" aria-selected="false" role="tab">Tanımlı İş</a>
                </li>
                <!--end::Tab item-->
            </div>
            <!--end::Table tabs-->
        </div>
        <!--end::Tab header wrapper-->

        <!--begin::Tab contents-->
        <div class="tab-content pw-dashboard-tab-content mt-6" id="kabinetTabContents">
            <!--begin::Ozellikler content-->
            <div class="tab-pane fade active show" id="pw_tab_pane_detay" role="tabpanel">
                <div class="col col-lg-11">
                    <!--begin::From-->
                    <div class="table-responsive overflow-x-auto overflow-lg-hidden px-6">
                        <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fw-bold fs-7">
                            <tbody>
                                <!--begin::Row-->
                                <tr>
                                    <td class="col col-md-3"><label for="metod-adi">Metod Adı</label></td>
                                    <td class="col col-md-9">
                                        <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" id="metod-adi" name="metod-adi"  />
                                    </td>
                                </tr>
                                <!--end::Row-->
                                
                                <!--begin::Row-->
                                <tr>
                                    <td class="col col-md-3"><label for="kutuphane-adi">Kütüphane Adı</label></td>
                                    <td class="col col-md-9">
                                        <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" id="kutuphane-adi" name="kutuphane-adi"  />
                                    </td>
                                </tr>
                                <!--end::Row-->

                                <!--begin::Row-->
                                <tr>
                                    <td class="col col-md-3"><label for="sinif-adi">Sınıf Adı</label></td>
                                    <td class="col col-md-9">
                                        <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" id="sinif-adi" name="sinif-adi"  />
                                    </td>
                                </tr>
                                <!--end::Row-->

                                <!--begin::Row-->
                                <tr>
                                    <td class="col col-md-3"><label for="akis-metodu">Akış Metodu</label></td>
                                    <td class="col col-md-9">
                                        <div class="form-check mb-0">
                                            <input class="form-check-input bg-blue" type="checkbox" value="" id="akis-metodu" name="akis-metodu" checked="checked">
                                        </div>                                        
                                    </td>
                                </tr>
                                <!--end::Row-->

                                <!--begin::Row-->
                                <tr>
                                    <td class="col col-md-3"><label for="kullanim-yeri">Kullanım Yeri</label></td>
                                    <td class="col col-md-9">
                                        <div class="d-flex align-items-center align-items-center">
                                            <div class="form-check mb-0 me-10">
                                                <input class="form-check-input bg-blue me-2" type="checkbox" value="" id="tanimli-is" name="tanimli-is" checked="checked">
                                                <label class="form-check-label fs-8 fw-semibold pw-text-neutral-800" for="tanimli-is">Tanımlı İş</label>
                                            </div> 
                                            <div class="form-check mb-0">
                                                <input class="form-check-input bg-blue me-2" type="checkbox" value="" id="pw-sistem" name="">
                                                <label class="form-check-label fs-8 fw-semibold pw-text-neutral-800" for="pw-sistem">Sistem</label>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <!--end::Row-->

                                <!--begin::Row-->
                                <tr>
                                    <td class="col col-md-3"><label for="calisma-suresi">Çalışma Süresi</label></td>
                                    <td class="col col-md-9">
                                        <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" id="calisma-suresi" name="calisma-suresi"  />
                                    </td>
                                </tr>
                                <!--end::Row-->

                                <!--begin::Row-->
                                <tr>
                                    <td class="col col-md-3"><label for="aciklama">Açıklama</label></td>
                                    <td class="col col-md-9">
                                        <textarea class="form-control form-control-solid" name="aciklama" id="aciklama" cols="30" rows="2"></textarea>
                                    </td>
                                </tr>
                                <!--end::Row-->

                                <!--begin::Row-->
                                <tr>
                                    <td class="col col-md-3"><label for="dis-kaynak-yolu">Dış Kaynak Yolu</label></td>
                                    <td class="col col-md-9">
                                        <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" id="dis-kaynak-yolu" name="dis-kaynak-yolu"  />
                                    </td>
                                </tr>
                                <!--end::Row-->
                            </tbody>
                        </table>
                    </div>
                    <!--end::From-->

                    <div class="px-6 mt-5 w-100">
                        <h5 class="mb-3">Parametreler <i class="fa-solid fa-angle-down pw-text-neutral-800 ms-3 fs-6"></i></h5>

                        <div class="d-flex justify-content-between align-items-center py-3">
                            <!--begin::Search wrapper-->
                            <div id="kt_docs_search_handler_basic" class="w-100 mw-300px" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="true" data-kt-search-layout="inline">
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
                                    <input type="text" class="form-control pw-input-stroke py-2 ps-9 pe-2 fs-8" name="search" value="" placeholder="Ara..." data-kt-search-element="input" />
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
                            <button class="btn btn-outline btn-outline-primary fs-7 py-2 px-5">+ Yeni Ekle</button>
                        </div>
                    
                        <div class="table-responsive overflow-x-auto rounded mb-15">
                            <!--begin::Table-Light-->
                            <table class="table table-row-bordered border pw-dark-bg-table pw-table-border-gray pw-table-border-gray table-rounded align-middle w-max-content min-w-100 gy-2 gx-9 gs-9">
                                <thead>
                                    <tr class="fw-semibold fs-8 pw-text-neutral-700 pw-bg-neutral-100">
                                        <th class="py-3">PARAMETRELER</th>
                                        <th class="py-3"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!--begin::Row-->
                                    <tr class="fw-medium pw-text-neutral-700 fs-8">
                                        <td>
                                            <div class="d-flex align-items-center flex-nowrap gap-2">
                                                <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                                                    <i class="fa-solid fa-file-lines pw-text-primary-500"></i>
                                                </div>
                                                <div>Parametre-1</div>
                                            </div>
                                        </td>
                                        <td align="right">
                                            <a href="javascript:void(0)" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                                                <i class="fa-solid fa-pen-to-square fs-7 text-primary"></i>
                                            </a>
                                            <a href="javascript:void(0)" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                                                <i class="fa-solid fa-trash fs-7 text-primary"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <!--end::Row-->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Ozellikler content-->

            <!--begin::Goster content-->
            <div class="tab-pane fade" id="pw_tab_pane_kod" role="tabpanel">
                <div class="col col-lg-11">
                    <div class="px-6 mt-10">
                        <div class="d-flex justify-content-end mb-2">
                            <div>
                                <a href="javascript:void(0)" class="me-2">
                                    <i class="fa-solid fa-magnifying-glass fs-7 text-gray-700"></i>
                                </a>
                                <a href="javascript:void(0)" class="fs-7 text-danger me-2" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="bottom" title="Class Çıkar">
                                    - <i class="fa-solid fa-code fs-7 text-danger"></i>
                                </a>
                                <a href="javascript:void(0)" class="fs-7 text-success me-2" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="bottom" title="Class Ekle">
                                    + <i class="fa-solid fa-code fs-7 text-success"></i>
                                </a>
                                <a href="javascript:void(0)" class="">
                                    <i class="fa-solid fa-circle-info fs-7 text-gray-700"></i>
                                </a>
                            </div>
                        </div>

                        <div class="w-100 border border-gray-500 h-500px mb-10">
                        </div>
                    </div>   
                </div>
            </div>
            <!--end::Goster content-->

            <!--begin::Goster content-->
            <div class="tab-pane fade" id="pw_tab_pane_tanimli_is" role="tabpanel">
                <div class="col col-lg-11 px-6">
                    <div class="d-flex justify-content-between align-items-center py-3">
                        <!--begin::Search wrapper-->
                        <div id="kt_docs_search_handler_basic" class="w-100 mw-300px" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="true" data-kt-search-layout="inline">
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
                                <input type="text" class="form-control pw-input-stroke py-2 ps-9 pe-2 fs-8" name="search" value="" placeholder="Ara..." data-kt-search-element="input" />
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
                        <button class="btn btn-outline btn-outline-primary fs-7 py-2 px-5" data-bs-toggle="modal" data-bs-target="#yeniEkle">+ Yeni Ekle</button>
                    </div>
                
                    <div class="table-responsive overflow-x-auto rounded mb-15">
                        <!--begin::Table-Light-->
                        <table class="table table-row-bordered border pw-dark-bg-table pw-table-border-gray pw-table-border-gray table-rounded align-middle w-max-content min-w-100 gy-2 gx-9 gs-9">
                            <thead>
                                <tr class="fw-semibold fs-8 pw-text-neutral-700 pw-bg-neutral-100">
                                    <th class="py-3">TANIMLI İŞLER</th>
                                    <th class="py-3"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <!--begin::Row-->
                                <tr class="fw-medium pw-text-neutral-700 fs-8">
                                    <td>
                                        <div class="d-flex align-items-center flex-nowrap gap-2">
                                            <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                                                <i class="fa-solid fa-file-lines pw-text-primary-500"></i>
                                            </div>
                                            <div>Tanımlı İşler-1</div>
                                        </div>
                                    </td>
                                    <td align="right">
                                        <a href="javascript:void(0)" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5 me-2" data-bs-toggle="modal" data-bs-target="#tanimliIsler">
                                            <i class="fa-solid fa-eye fs-7 text-primary"></i>
                                        </a>
                                        <a href="javascript:void(0)" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5 me-2">
                                            <i class="fa-solid fa-play fs-7 text-primary"></i>
                                        </a>
                                        <a href="javascript:void(0)" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5 me-2">
                                            <i class="fa-solid fa-pen-to-square fs-7 text-primary"></i>
                                        </a>
                                        <a href="javascript:void(0)" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                                            <i class="fa-solid fa-trash fs-7 text-primary"></i>
                                        </a>
                                    </td>
                                </tr>
                                <!--end::Row-->
                            </tbody>
                        </table>
                    </div>
                </div>
                
            </div>
            <!--end::Goster content-->
        </div>
        <!--end::Tab contents-->
        </div>
    <!--end::Content -->

    <!--begin::Actionbar-->
    <div class="border-top pw-border-stroke pt-5 mb-20">
        <div class="col col-lg-11 d-flex align-items-center justify-content-end">
            <button type="reset" class="btn btn-active-light fs-8 py-3 px-6">
                Vazgeç
            </button>
            <button type="submit" class="btn btn-primary fs-8 py-3 px-6 me-7">
                Kaydet
            </button>
        </div>
    </div>
    <!--end::Actionbar-->

    <!--end::Content wrapper-->
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/footer.php'; ?>
  </div>
  <!--end::Main-->

</div>
<!--end::Wrapper -->

<!-- begin::Modal -->
<div class="modal fade" tabindex="-1" id="yeniEkle">
    <div class="modal-dialog modal-dialog-centered modal-lg mw-950px">
        <div class="modal-content">
            <div class="modal-header border pb-3">
                <h3 class="modal-title fs-5 fw-bolder">Yeni Tanımlı İş Ekle</h3>

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
                                    <td><label class="form-label fs-base fw-bolder" for="">İş Adı</label></td>
                                    <td><input type="text" class="form-control form-control-solid py-3 px-4 fs-8" name="" value="" /></td>
                                </tr>
                                <!--end::Row-->

                                <!--begin::Row-->
                                <tr>
                                    <td><label class="form-label fs-base fw-bolder" for="">Durumu</label></td>
                                    <td>
                                        <div class="form-check form-switch form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="" id="">
                                        </div>
                                    </td>
                                </tr>
                                <!--end::Row-->

                                <!--begin::Row-->
                                <tr>
                                    <td><label class="form-label fs-base fw-bolder" for="">Başlangıç Tarihi</label></td>
                                    <td><input type="text" class="form-control form-control-solid py-3 px-4 fs-8" name="" value=""/></td>
                                </tr>
                                <!--end::Row-->

                                <!--begin::Row-->
                                <tr>
                                    <td><label class="form-label fs-base fw-bolder" for="">Bitiş Tarihi</label></td>
                                    <td><input type="text" class="form-control form-control-solid py-3 px-4 fs-8" name="" value=""/></td>
                                </tr>
                                <!--end::Row-->

                                <!--begin::Row-->
                                <tr>
                                    <td><label class="form-label fs-base fw-bolder" for="">Elektronik Posta</label></td>
                                    <td><input type="text" class="form-control form-control-solid py-3 px-4 fs-8" name="" value=""/></td>
                                </tr>
                                <!--end::Row-->

                                 <!--begin::Row-->
                                 <tr>
                                    <td><label class="form-label fs-base fw-bolder mb-5" for="">Her durumda bilgi ver</label></td>
                                    <td>
                                        <div class="form-check mb-5">
                                            <input class="form-check-input bg-blue" type="checkbox" value="" id="" name="" checked="checked" data-listener-added_0195d4bd="true">
                                        </div>
                                    </td>
                                </tr>
                                <!--end::Row-->

                                <tr class="border-top pw-border-stroke py-10"></tr>

                                <!--begin::Row-->
                                <tr>
                                    <td><label class="form-label fs-4 fw-bolder mt-5" for="">İş Aralığı</label></td>
                                    <td></td>
                                </tr>
                                <!--end::Row-->

                                <!--begin::Row-->
                                <tr>
                                    <td><label class="form-label fs-base fw-bolder" for="">Aralık Tipi</label></td>
                                    <td><input type="text" class="form-control form-control-solid py-3 px-4 fs-8" name="" value=""/></td>
                                </tr>
                                <!--end::Row-->

                                <!--begin::Row-->
                                <tr>
                                    <td><label class="form-label fs-base fw-bolder" for="">Aralık</label></td>
                                    <td><input type="text" class="form-control form-control-solid py-3 px-4 fs-8" name="" value=""/></td>
                                </tr>
                                <!--end::Row-->

                                <!--begin::Row-->
                                <tr>
                                    <td><label class="form-label fs-base fw-bolder" for="">Başlangıç Saati</label></td>
                                    <td><input type="text" class="form-control form-control-solid py-3 px-4 fs-8" name="" value=""/></td>
                                </tr>
                                <!--end::Row-->

                                <!--begin::Row-->
                                <tr>
                                    <td><label class="form-label fs-base fw-bolder" for="">Açıklama</label></td>
                                    <td><textarea class="form-control form-control-solid" name="" id="" cols="30" rows="2"></textarea></td>
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
                <button type="button" class="btn btn-light fs-7 px-5 py-2" data-bs-dismiss="modal">İptal</button>
                <button type="button" class="btn btn-primary fs-7 px-5 py-2">Ekle</button>
            </div>
        </div>
    </div>
</div>
<!-- end::Modal -->

<!-- begin::Modal -->
<div class="modal fade" tabindex="-1" id="tanimliIsler">
    <div class="modal-dialog modal-dialog-centered modal-lg mw-950px">
        <div class="modal-content">
            <div class="modal-header border pb-3">
                <h3 class="modal-title fs-5 fw-bolder">Tanımlı İş-1</h3>

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
                                    <td><label class="form-label fs-base fw-bolder" for="">İş Adı</label></td>
                                    <td class="text-gray-500 fs-7">AD_Custombhnj</td>
                                </tr>
                                <!--end::Row-->

                                <!--begin::Row-->
                                <tr>
                                    <td><label class="form-label fs-base fw-bolder" for="">Başlangıç Tarihi</label></td>
                                    <td class="text-gray-500 fs-7">26.04.2023  |   12:36</td>
                                </tr>
                                <!--end::Row-->

                                <!--begin::Row-->
                                <tr>
                                    <td><label class="form-label fs-base fw-bolder" for="">Bitiş Tarihi</label></td>
                                    <td class="text-gray-500 fs-7">26.04.2023  |   12:36</td>
                                </tr>
                                <!--end::Row-->

                                <!--begin::Row-->
                                <tr>
                                    <td><label class="form-label fs-base fw-bolder" for="">Durum</label></td>
                                    <td class="text-gray-500 fs-7">Başarılı</td>
                                </tr>
                                <!--end::Row-->

                                <!--begin::Row-->
                                <tr>
                                    <td><label class="form-label fs-base fw-bolder" for="">Parametreler</label></td>
                                    <td class="text-gray-500 fs-7">SSL_ENABLE:True; HOST:uidesk.g-gsoft.com; PORT:8099;</td>
                                </tr>
                                <!--end::Row-->
                            </tbody>
                        </table>
                    </div>
                    <!--end::Table-->
                </form>
                <!--end::Form-->
            </div>
        </div>
    </div>
</div>
<!-- end::Modal -->

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/foot.php'; ?>