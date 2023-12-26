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
                <li class="breadcrumb-item active"> Takvim Tanımları</li>
                <!--end::Item-->
              </ul>
              <!--end::Breadcrumb-->
              <!--begin::Title-->
              <h1 class="page-heading d-flex text-dark fw-bold fs-4 flex-column justify-content-center my-0">
                Takvim Tanımları
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
                            <a class="nav-link mx-0 pt-3 pb-6 fs-base rounded-0 fw-semibold active" data-bs-toggle="tab" href="#pw_tab_pane_takvim_adi" aria-selected="true" role="tab">Takvim Adı</a>
                        </li>
                        <!--end::Tab item-->

                        <!--begin::Tab item-->
                        <li class="nav-item" role="presentation">
                            <a class="nav-link mx-0 pt-3 pb-6 fs-base rounded-0" data-bs-toggle="tab" href="#pw_tab_pane_tatil_adi" aria-selected="false" role="tab">Tatil Adı</a>
                        </li>
                        <!--end::Tab item-->
                    </div>
                    <!--end::Table tabs-->
                </div>
                <!--end::Tab header wrapper-->

                <!--begin::Tab contents-->
                <div class="tab-content pw-dashboard-tab-content mt-6">
                    <!--begin::Ozellikler content-->
                    <div class="tab-pane fade active show" id="pw_tab_pane_takvim_adi" role="tabpanel">
                        <!--begin::Form-->
                        <form class="d-flex flex-column gap-13">
                            <div class="col col-lg-11">
                                <!--begin::Table-->
                                <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                                    <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fw-bold fs-7">
                                        <tbody>
                                            <!--begin::Row-->
                                            <tr>
                                                <td class="col-md-3"><label for="takvim-adi">Takvim Adı</label></td>
                                                <td class="col-md-9">
                                                    <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" name="takvim-adi" />
                                                </td>
                                            </tr>
                                            <!--end::Row-->
                                        </tbody>
                                    </table>

                                    <div class="mt-10 mb-5 border-bottom w-100">
                                        <h6 class="py-3">Çalışma Saatleri</h6>
                                    </div>

                                    <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fw-bold fs-7">
                                        <tbody>
                                            <!--begin::Row-->
                                            <tr>
                                                <td class="col-md-3"><label for="pw_tasarim_yetki_seti">Öğleden Önce</label></td>
                                                <td class="col-md-9">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="input-group flex-nowrap">
                                                                <span class="input-group-text rounded-end-0 border-0 ps-3 pe-1"><i class="fa-solid fa-clock pw-text-primary-300 fs-4"></i></span>
                                                                <select id="" class="form-select form-select-solid rounded-start-0 fs-8 py-3 px-1" data-control="select2" data-placeholder="">
                                                                    <option value="1">09:00</option>
                                                                    <option value="2">10:00</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="input-group flex-nowrap">
                                                                <span class="input-group-text rounded-end-0 border-0 ps-3 pe-1"><i class="fa-solid fa-clock pw-text-primary-300 fs-4"></i></span>
                                                                <select id="" class="form-select form-select-solid rounded-start-0 fs-8 py-3 px-1" data-control="select2" data-placeholder="">
                                                                    <option value="1">11:00</option>
                                                                    <option value="2">12:00</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!--end::Row-->

                                            <!--begin::Row-->
                                            <tr>
                                                <td class="col-md-3"><label for="pw_tasarim_yetki_seti">Öğleden Sonra</label></td>
                                                <td class="col-md-9">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="input-group flex-nowrap">
                                                                <span class="input-group-text rounded-end-0 border-0 ps-3 pe-1"><i class="fa-solid fa-clock pw-text-primary-300 fs-4"></i></span>
                                                                <select id="" class="form-select form-select-solid rounded-start-0 fs-8 py-3 px-1" data-control="select2" data-placeholder="">
                                                                    <option value="1">13:00</option>
                                                                    <option value="2">14:00</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="input-group flex-nowrap">
                                                                <span class="input-group-text border-0 rounded-end-0 ps-3 pe-1"><i class="fa-solid fa-clock pw-text-primary-300 fs-4"></i></span>
                                                                <select id="" class="form-select form-select-solid rounded-start-0 fs-8 py-3 px-1" data-control="select2" data-placeholder="">
                                                                    <option value="1">16:00</option>
                                                                    <option value="2">17:00</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!--end::Row-->
                                        </tbody>
                                    </table>
                                </div>
                                <!--end::Table-->

                                <div class="mt-10 mb-5 border-bottom w-100">
                                    <h6 class="py-3">Çalışma Günleri</h6>
                                </div>

                                <div class="row">
                                    <div class="col col-1g-10">
                                        <!--begin::Table-->
                                        <div class="table-responsive overflow-x-auto rounded">
                                            <!--begin::Table-Light-->
                                            <table class="table table-row-bordered pw-dark-bg-table pw-table-border-gray pw-table-border-gray table-rounded align-middle w-max-content min-w-100 gy-2 gx-9 gs-9">
                                                <thead>
                                                    <tr class="fw-semibold fs-8 pw-text-neutral-700 pw-bg-neutral-100">
                                                        <th class="py-3"></th>
                                                        <th class="py-3">Pazartesi</th>
                                                        <th class="py-3">Salı</th>
                                                        <th class="py-3">Çarşamba</th>
                                                        <th class="py-3">Perşembe</th>
                                                        <th class="py-3">Cuma</th>
                                                        <th class="py-3">Cumartesi</th>
                                                        <th class="py-3">Pazar</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!--begin::Row-->
                                                    <tr class="fw-medium pw-text-neutral-700 fs-8 border-dashed">
                                                        <td>Öğleden Önce</td>
                                                        <td>
                                                            <div class="form-check mb-0">
                                                                <input class="form-check-input bg-blue" type="checkbox" value="" id="" name="" checked="checked">
                                                            </div>    
                                                        </td>
                                                        <td>
                                                            <div class="form-check mb-0">
                                                                <input class="form-check-input bg-blue" type="checkbox" value="" id="" name="" checked="checked">
                                                            </div>    
                                                        </td>
                                                        <td>
                                                            <div class="form-check mb-0">
                                                                <input class="form-check-input bg-blue" type="checkbox" value="" id="" name="" checked="checked">
                                                            </div>    
                                                        </td>
                                                        <td>
                                                            <div class="form-check mb-0">
                                                                <input class="form-check-input bg-blue" type="checkbox" value="" id="" name="" checked="checked">
                                                            </div>    
                                                        </td>
                                                        <td>
                                                            <div class="form-check mb-0">
                                                                <input class="form-check-input bg-blue" type="checkbox" value="" id="" name="" checked="checked">
                                                            </div>    
                                                        </td>
                                                        <td>
                                                            <div class="form-check mb-0">
                                                                <input class="form-check-input bg-blue" type="checkbox" value="" id="" name="" checked="checked">
                                                            </div>    
                                                        </td>
                                                        <td>
                                                            <div class="form-check mb-0">
                                                                <input class="form-check-input bg-blue" type="checkbox" value="" id="" name="">
                                                            </div>    
                                                        </td>
                                                    </tr>
                                                    <!--end::Row-->

                                                    <!--begin::Row-->
                                                    <tr class="fw-medium pw-text-neutral-700 fs-8 border-dashed">
                                                        <td>Öğleden Sonra</td>
                                                        <td>
                                                            <div class="form-check mb-0">
                                                                <input class="form-check-input bg-blue" type="checkbox" value="" id="" name="" checked="checked">
                                                            </div>    
                                                        </td>
                                                        <td>
                                                            <div class="form-check mb-0">
                                                                <input class="form-check-input bg-blue" type="checkbox" value="" id="" name="" checked="checked">
                                                            </div>    
                                                        </td>
                                                        <td>
                                                            <div class="form-check mb-0">
                                                                <input class="form-check-input bg-blue" type="checkbox" value="" id="" name="" checked="checked">
                                                            </div>    
                                                        </td>
                                                        <td>
                                                            <div class="form-check mb-0">
                                                                <input class="form-check-input bg-blue" type="checkbox" value="" id="" name="" checked="checked">
                                                            </div>    
                                                        </td>
                                                        <td>
                                                            <div class="form-check mb-0">
                                                                <input class="form-check-input bg-blue" type="checkbox" value="" id="" name="" checked="checked">
                                                            </div>    
                                                        </td>
                                                        <td>
                                                            <div class="form-check mb-0">
                                                                <input class="form-check-input bg-blue" type="checkbox" value="" id="" name="" checked="checked">
                                                            </div>    
                                                        </td>
                                                        <td>
                                                            <div class="form-check mb-0">
                                                                <input class="form-check-input bg-blue" type="checkbox" value="" id="" name="">
                                                            </div>    
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
                            </div>
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Ozellikler content-->

                    <!--begin::Goster content-->
                    <div class="tab-pane fade" id="pw_tab_pane_tatil_adi" role="tabpanel">
                        <!--begin::Form-->
                        <form class="d-flex flex-column gap-13">
                            <div class="col col-lg-11">
                                <!--begin::Table-->
                                <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                                    <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fw-bold fs-7">
                                        <tbody>
                                            <!--begin::Row-->
                                            <tr>
                                                <td class="col-md-3"><label for="tatil-adi">Tatil Adı</label></td>
                                                <td class="col-md-9">
                                                    <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" name="tatil-adi" />
                                                </td>
                                            </tr>
                                            <!--end::Row-->

                                            <!--begin::Row-->
                                            <tr>
                                                <td class="col-md-3"><label for="baslangic">Başlangıç</label></td>
                                                <td class="col-md-9">
                                                    <div class="input-group flex-nowrap">
                                                        <span class="input-group-text border-0 rounded-end-0 ps-3 pe-1"><i class="fa-solid fa-clock pw-text-primary-300 fs-4"></i></span>
                                                        <select id="" class="form-select form-select-solid rounded-start-0 fs-8 py-3 px-1" data-control="select2" data-placeholder="">
                                                            <option value="1">09:00</option>
                                                            <option value="2">10:00</option>
                                                        </select>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!--end::Row-->

                                            <!--begin::Row-->
                                            <tr>
                                                <td class="col-md-3"><label for="bitis">Bitiş</label></td>
                                                <td class="col-md-9">
                                                    <div class="input-group flex-nowrap">
                                                        <span class="input-group-text border-0 rounded-end-0 ps-3 pe-1"><i class="fa-solid fa-clock pw-text-primary-300 fs-4"></i></span>
                                                        <select id="" class="form-select form-select-solid rounded-start-0 fs-8 py-3 px-1" data-control="select2" data-placeholder="">
                                                            <option value="1">13:00</option>
                                                            <option value="2">14:00</option>
                                                        </select>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!--end::Row-->

                                            <!--begin::Form actions row-->
                                            <tr>
                                                <td colspan="2" align="right">
                                                    <button type="submit" class="btn btn-primary fs-8 py-2 px-6">
                                                        Ekle
                                                    </button>
                                                </td>
                                            </tr>
                                            <!--end::Form actions row-->
                                        </tbody>
                                    </table>
                                </div>
                                <!--end::Table-->

                                <div class="row">
                                    <div class="col col-1g-10">
                                        <!--begin::Table-->
                                        <div class="table-responsive overflow-x-auto rounded mt-5">
                                            <!--begin::Table-Light-->
                                            <table class="table table-row-bordered border pw-dark-bg-table pw-table-border-gray pw-table-border-gray table-rounded align-middle w-max-content min-w-100 gy-2 gx-9 gs-9">
                                                <thead>
                                                    <tr class="fw-semibold fs-8 pw-text-neutral-700 pw-bg-neutral-100">
                                                        <th class="py-3">TATİL ADI</th>
                                                        <th class="py-3">BAŞLANGIÇ TARİHİ</th>
                                                        <th class="py-3">BAŞLANGIÇ ZAMANI</th>
                                                        <th class="py-3">BİTİŞ TARİHİ</th>
                                                        <th class="py-3">BİTİŞ ZAMANI</th>
                                                        <th class="py-3"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!--begin::Row-->
                                                    <tr class="fw-medium pw-text-neutral-700 fs-8">
                                                        <td>
                                                            <div class="d-flex align-items-center flex-nowrap gap-2">
                                                                <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0"><i class="fa-solid fa-file-invoice text-primary"></i></div>
                                                                <div>Tatil-1</div>
                                                            </div>
                                                        </td>
                                                        <td>02.02.2021</td>
                                                        <td>02:30</td>
                                                        <td>03.02.2021</td>
                                                        <td>21:30</td>
                                                        <td align="right">
                                                            <a href="#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5" data-bs-toggle="modal" data-bs-target="#duzenle">
                                                                <i class="fa-solid fa-pen-to-square fs-7 text-primary"></i>
                                                            </a>
                                                            <a href="javascript:void(0)" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                                                                <i class="fa-solid fa-trash fs-7 text-primary"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <!--end::Row-->

                                                    <!--begin::Row-->
                                                    <tr class="fw-medium pw-text-neutral-700 fs-8">
                                                        <td>
                                                            <div class="d-flex align-items-center flex-nowrap gap-2">
                                                                <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0"><i class="fa-solid fa-file-invoice text-primary"></i></div>
                                                                <div>Tatil-2</div>
                                                            </div>
                                                        </td>
                                                        <td>02.02.2021</td>
                                                        <td>01:30</td>
                                                        <td>03.02.2021</td>
                                                        <td>13:30</td>
                                                        <td align="right">
                                                            <a href="#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5" data-bs-toggle="modal" data-bs-target="#duzenle">
                                                                <i class="fa-solid fa-pen-to-square fs-7 text-primary"></i>
                                                            </a>
                                                            <a href=" javascript:void(0)"  class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
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
                            </div>
                        </form>
                        <!--end::Form-->
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