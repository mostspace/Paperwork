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
            <li class="breadcrumb-item active">Kural Motoru</li>
            <!--end::Item-->
          </ul>
          <!--end::Breadcrumb-->
          <!--begin::Title-->
          <h1 class="page-heading d-flex text-dark fw-bolder fs-4 flex-column justify-content-center my-0">
            Kural Motoru
          </h1>
          <!--end::Title-->
        </div>
        <!--end::Page title-->

        

        <!--begin::Dropdown wrapper-->
        <div class="app-navbar-item ms-1 ms-md-3">
          <!--begin::Ortak Kodlar Button-->
          <button class="btn btn-outline btn-outline-primary btn-active-light-primary fs-7 px-3 py-2" data-bs-toggle="modal" data-bs-target="#ortakKodlar">Ortak Kodlar</button>
          <!--end::Ortak Kodlar Button-->
          
          <!--begin::Menu toggle-->
          <a href="#"
            class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px"
            data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent"
            data-kt-menu-placement="bottom-end">
            <i class="fa-solid fa-ellipsis-vertical fs-4"></i>
          </a>
          <!--begin::Menu toggle-->
          <!--begin::Menu-->
          <div
            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-200px"
            data-kt-menu="true" data-kt-element="theme-mode-menu">
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
    <div class="row gap-5 px-9 py-2 my-4 w-100">
      <ul class="nav nav-tabs nav-line-tabs mb-5 fs-6">
        <li class="nav-item">
          <a class="nav-link active" data-bs-toggle="tab" href="#degiskenler">Değişkenler</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" href="#listeler">Listeler</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" href="#tablolar">Tablolar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" href="#fonksiyonlar">Fonksiyonlar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" href="#test">Test</a>
        </li>
      </ul>
    </div>
    <!--end::Actionbar-->

    <!--begin::Content -->
    <div class="col-12 col-md-11 mb-20 px-6 pb-6">
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="degiskenler" role="tabpanel">
          <!--begin::Form -->
          <div class="row my-5"> 
            <!--begin::Form wrapper-->
            <form class="d-flex flex-column gap-13">
              <div class="col col-lg-8">
                <!--begin::Table-->
                <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                  <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fw-bold fs-7">
                    <tbody>
                      <!--begin::Row-->
                      <tr>
                        <td class="col-md-3"><label for="transfer_adi">Değişken Adı</label></td>
                        <td class="col-md-9">
                            <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" id="transfer_adi" name="pw_transfer_adi" required />
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td class="col-md-3"><label for="entegrator">Tipi</label></td>
                        <td class="col-md-9">
                          <select id="entegrator" class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2" data-placeholder="Seçiniz">
                            <option></option>
                            <option value="1">Int</option>
                            <option value="2">String</option>
                            <option value="2">Double</option>
                            <option value="2">Bool</option>
                            <option value="2">Date time</option>
                          </select>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td class="col-md-3"><label for="">Değeri</label></td>
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

              <!--begin::Form actions-->
              <div class="row mb-5 px-3">
                <div class="d-flex col col-lg-11 align-items-center justify-content-end gap-3 border-top pw-border-stroke pt-5">
                    <button type="reset" class="btn btn-active-light fs-8 py-3 px-6">Vazgeç</button>
                    <button type="submit" class="btn btn-primary fs-8 py-3 px-6">Kaydet</button>
                </div>
              </div>
              <!--end::Form actions-->
            </form>
            <!--end::Form wrapper-->
          </div>
          <!--end::Form-->

          <div class="p-4 border rounded pw-border-neutral-200">
            <button class="mb-3 btn btn-primary py-2 px-4 d-flex align-items-center fs-8 fw-bold"><i class="fa-solid fa-plus"></i>Değişken Ekle</button>
            <ul class="list-group rounded-0 pw-border-neutral-200">
              <li class="list-group-item px-6 py-2">
                <span class="btn p-0 fs-8 fw-bold d-inline-flex align-items-center gap-2 pw-text-brand w-100">
                  <div class="w-25px h-25px pw-bg-iconbg rounded-circle d-inline-flex align-items-center justify-content-center p-4">
                    <i class="fa-solid fa-file-lines pw-text-brand"></i>
                  </div>
                  <span class="d-inline-flex align-items-center gap-5">
                    <span class="fw-bold">Public String</span>
                    <span class="fw-bold fs-9 pw-text-neutral-700">butceTablosuBelgeNo=”FF002000005EDA</span>
                  </span>
                  <div class="w-25px h-25px pw-bg-primary-50 rounded-0.20rem d-inline-flex align-items-center justify-content-center p-4" style="margin-left:auto">
                    <i class="fa-solid fa-trash pw-text-brand"></i>
                  </div>
                </span>
              </li>
              <li class="list-group-item px-6 py-2">
                <span class="btn p-0 fs-8 fw-bold d-inline-flex align-items-center gap-2 pw-text-brand w-100">
                  <div
                    class="w-25px h-25px pw-bg-iconbg rounded-circle d-inline-flex align-items-center justify-content-center p-4">
                    <i class="fa-solid fa-file-lines pw-text-brand"></i>
                  </div>
                  <span class="d-inline-flex align-items-center gap-5">
                    <span class="fw-bold">Public String</span>
                    <span class="fw-bold fs-9 pw-text-neutral-700">butceTablosuBelgeNo=”FF002000005EDA</span>
                  </span>
                  <div class="w-25px h-25px pw-bg-primary-50 rounded-0.20rem d-inline-flex align-items-center justify-content-center p-4" style="margin-left:auto">
                  <i class="fa-solid fa-trash pw-text-brand"></i>
                  </div>
                </span>
              </li>
              <li class="list-group-item px-6 py-2">
                <span class="btn p-0 fs-8 fw-bold d-inline-flex align-items-center gap-2 pw-text-brand w-100">
                  <div
                    class="w-25px h-25px pw-bg-iconbg rounded-circle d-inline-flex align-items-center justify-content-center p-4">
                    <i class="fa-solid fa-file-lines pw-text-brand"></i>
                  </div>
                  <span class="d-inline-flex align-items-center gap-5">
                    <span class="fw-bold">Public String</span>
                    <span class="fw-bold fs-9 pw-text-neutral-700">butceTablosuBelgeNo=”FF002000005EDA</span>
                  </span>
                  <div class="w-25px h-25px pw-bg-primary-50 rounded-0.20rem d-inline-flex align-items-center justify-content-center p-4" style="margin-left:auto">
                    <i class="fa-solid fa-trash pw-text-brand"></i>
                  </div>
                </span>
              </li>
              <li class="list-group-item px-6 py-2">
                <span class="btn p-0 fs-8 fw-bold d-inline-flex align-items-center gap-2 pw-text-brand w-100">
                  <div
                    class="w-25px h-25px pw-bg-iconbg rounded-circle d-inline-flex align-items-center justify-content-center p-4">
                    <i class="fa-solid fa-file-lines pw-text-brand"></i>
                  </div>
                  <span class="d-inline-flex align-items-center gap-5">
                    <span class="fw-bold">Public String</span>
                    <span class="fw-bold fs-9 pw-text-neutral-700">butceTablosuBelgeNo=”FF002000005EDA</span>
                  </span>
                  <div class="w-25px h-25px pw-bg-primary-50 rounded-0.20rem d-inline-flex align-items-center justify-content-center p-4" style="margin-left:auto">
                    <i class="fa-solid fa-trash pw-text-brand"></i>
                  </div>
                </span>
              </li>
              <li class="list-group-item px-6 py-2">
                <span class="btn p-0 fs-8 fw-bold d-inline-flex align-items-center gap-2 pw-text-brand w-100">
                  <div
                    class="w-25px h-25px pw-bg-iconbg rounded-circle d-inline-flex align-items-center justify-content-center p-4">
                    <i class="fa-solid fa-file-lines pw-text-brand"></i>
                  </div>
                  <span class="d-inline-flex align-items-center gap-5">
                    <span class="fw-bold">Public String</span>
                    <span class="fw-bold fs-9 pw-text-neutral-700">butceTablosuBelgeNo=”FF002000005EDA</span>
                  </span>
                  <div class="w-25px h-25px pw-bg-primary-50 rounded-0.20rem d-inline-flex align-items-center justify-content-center p-4" style="margin-left:auto">
                    <i class="fa-solid fa-trash pw-text-brand"></i>
                  </div>
                </span>
              </li>
              <li class="list-group-item px-6 py-2">
                <span class="btn p-0 fs-8 fw-bold d-inline-flex align-items-center gap-2 pw-text-brand w-100">
                  <div
                    class="w-25px h-25px pw-bg-iconbg rounded-circle d-inline-flex align-items-center justify-content-center p-4">
                    <i class="fa-solid fa-file-lines pw-text-brand"></i>
                  </div>
                  <span class="d-inline-flex align-items-center gap-5">
                    <span class="fw-bold">Public String</span>
                    <span class="fw-bold fs-9 pw-text-neutral-700">butceTablosuBelgeNo=”FF002000005EDA</span>
                  </span>
                  <div class="w-25px h-25px pw-bg-primary-50 rounded-0.20rem d-inline-flex align-items-center justify-content-center p-4" style="margin-left:auto">
                    <i class="fa-solid fa-trash pw-text-brand"></i>
                  </div>
                </span>
              </li>
            </ul>
          </div>
        </div>

        <div class="tab-pane fade" id="listeler" role="tabpanel">
          <!--begin::Liste Ekle-->
          <div class="row">
            <div class="col-md-6">
              <div class="border rounded-2 p-3">
                <button class="btn btn-primary py-2 px-3 fs-7">+ Liste Ekle</button>
                <div class="table-responsive overflow-x-auto mt-3">
                  <!--begin::Table-->
                  <table class="table table-row-bordered rounded-0 border pw-dark-bg-table pw-table-border-gray table-rounded align-middle w-max-content min-w-100">
                    <!--begin::Table head-->
                    <thead></thead>
                    <!--end::Table head-->  
                    <!--begin::Table body-->
                    <tbody>
                      <tr class="fw-medium pw-text-neutral-700 fs-9">
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                      </tr>
                      <tr class="fw-medium pw-text-neutral-700 fs-9">
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                      </tr>
                      <tr class="fw-medium pw-text-neutral-700 fs-9">
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                      </tr>
                      <tr class="fw-medium pw-text-neutral-700 fs-9">
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                      </tr>
                    </tbody>
                    <!--end::Table body-->
                  </table>
                  <!--end::Table-->
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="border rounded-2 h-100 py-2 px-3">
                <div class="table-responsive overflow-x-auto mt-13">
                  <!--begin::Table-->
                  <table class="table table-row-bordered rounded-0 border pw-dark-bg-table pw-table-border-gray table-rounded align-middle w-max-content min-w-100">
                    <!--begin::Table head-->
                    <thead></thead>
                    <!--end::Table head-->  
                    <!--begin::Table body-->
                    <tbody>
                      <tr class="fw-medium pw-text-neutral-700 fs-9">
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                      </tr>
                      <tr class="fw-medium pw-text-neutral-700 fs-9">
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                      </tr>
                      <tr class="fw-medium pw-text-neutral-700 fs-9">
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                      </tr>
                      <tr class="fw-medium pw-text-neutral-700 fs-9">
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                      </tr>
                    </tbody>
                    <!--end::Table body-->
                  </table>
                  <!--end::Table-->
                </div>
              </div>
            </div>
          </div>
          <!--end::Liste Ekle-->

          <!--begin::Divider-->
          <div class="my-20 border-top border-2 border-primary"></div>
          <!--end::Divider-->

          <div class="row">
            <div class="col-md-6 my-3">
              <div class="border rounded-2 pt-15 pb-5 px-5">
                <!--begin::Form-->
                <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                  <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fw-bold fs-7">
                    <tbody>
                      <!--begin::Row-->
                      <tr>
                        <td class="col-md-3"><label for="liste-adi">Liste Adı</label></td>
                        <td class="col-md-9">
                            <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" id="liste-adi" name="liste-adi" required />
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td class="col-md-3"><label for="tipi">Tipi</label></td>
                        <td class="col-md-9">
                          <select id="" class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2" data-placeholder="Seçiniz">
                            <option></option>
                            <option value="1">Int</option>
                            <option value="2">String</option>
                            <option value="2">Double</option>
                            <option value="2">Bool</option>
                            <option value="2">Date time</option>
                          </select>
                        </td>
                      </tr>
                      <!--end::Row-->
                    </tbody>
                  </table>

                  <!--begin::Form actions-->
                  <div class="row">
                    <div class="d-flex align-items-center justify-content-end gap-3 border-top pw-border-stroke pt-5">
                      <button type="reset" class="btn btn-active-light fs-8 py-3 px-6">Vazgeç</button>
                      <button type="submit" class="btn btn-primary fs-8 py-3 px-6">Kaydet</button>
                    </div>
                  </div>
                  <!--end::Form actions-->
                </div>
                <!--end::Form-->    
              </div>

              <div class="mt-5">
                <div class="border rounded-2 p-3">
                  <button class="btn btn-primary py-2 px-3 fs-7 mb-5">+ Liste Ekle</button>
                  <ul class="list-group rounded-0 pw-border-neutral-200">
                    <li class="list-group-item px-6 py-2">
                      <span class="btn p-0 fs-8 fw-bold d-inline-flex align-items-center gap-2 pw-text-brand w-100">
                        <div class="w-25px h-25px pw-bg-iconbg rounded-circle d-inline-flex align-items-center justify-content-center p-4">
                          <i class="fa-solid fa-file-lines pw-text-brand"></i>
                        </div>
                        <span class="d-inline-flex align-items-center gap-5">
                          <span class="fw-bold fs-9 pw-text-neutral-700">bütçe</span>
                        </span>
                        <div class="w-25px h-25px pw-bg-primary-50 rounded-0.20rem d-inline-flex align-items-center justify-content-center p-4" style="margin-left:auto">
                          <i class="fa-solid fa-trash pw-text-brand"></i>
                        </div>
                      </span>
                    </li>
                    <li class="list-group-item px-6 py-2">
                      <span class="btn p-0 fs-8 fw-bold d-inline-flex align-items-center gap-2 pw-text-brand w-100">
                        <div
                          class="w-25px h-25px pw-bg-iconbg rounded-circle d-inline-flex align-items-center justify-content-center p-4">
                          <i class="fa-solid fa-file-lines pw-text-brand"></i>
                        </div>
                        <span class="d-inline-flex align-items-center gap-5">
                          <span class="fw-bold fs-9 pw-text-neutral-700">bütçe</span>
                        </span>
                        <div class="w-25px h-25px pw-bg-primary-50 rounded-0.20rem d-inline-flex align-items-center justify-content-center p-4" style="margin-left:auto">
                        <i class="fa-solid fa-trash pw-text-brand"></i>
                        </div>
                      </span>
                    </li>
                    <li class="list-group-item px-6 py-2">
                      <span class="btn p-0 fs-8 fw-bold d-inline-flex align-items-center gap-2 pw-text-brand w-100">
                        <div
                          class="w-25px h-25px pw-bg-iconbg rounded-circle d-inline-flex align-items-center justify-content-center p-4">
                          <i class="fa-solid fa-file-lines pw-text-brand"></i>
                        </div>
                        <span class="d-inline-flex align-items-center gap-5">
                          <span class="fw-bold fs-9 pw-text-neutral-700">bütçe</span>
                        </span>
                        <div class="w-25px h-25px pw-bg-primary-50 rounded-0.20rem d-inline-flex align-items-center justify-content-center p-4" style="margin-left:auto">
                          <i class="fa-solid fa-trash pw-text-brand"></i>
                        </div>
                      </span>
                    </li>
                    <li class="list-group-item px-6 py-2">
                      <span class="btn p-0 fs-8 fw-bold d-inline-flex align-items-center gap-2 pw-text-brand w-100">
                        <div
                          class="w-25px h-25px pw-bg-iconbg rounded-circle d-inline-flex align-items-center justify-content-center p-4">
                          <i class="fa-solid fa-file-lines pw-text-brand"></i>
                        </div>
                        <span class="d-inline-flex align-items-center gap-5">
                          <span class="fw-bold fs-9 pw-text-neutral-700">bütçe</span>
                        </span>
                        <div class="w-25px h-25px pw-bg-primary-50 rounded-0.20rem d-inline-flex align-items-center justify-content-center p-4" style="margin-left:auto">
                          <i class="fa-solid fa-trash pw-text-brand"></i>
                        </div>
                      </span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-6 my-3">
              <div class="border rounded-2 p-3 h-100">
                <button class="btn btn-primary py-2 px-3 fs-7">+ Değer Ekle</button>
                <!--begin::Deger table-->
                <div class="table-responsive overflow-x-auto mt-3">
                  <!--begin::Table-->
                  <table class="table table-row-bordered rounded-0 border pw-dark-bg-table pw-table-border-gray table-rounded align-middle w-max-content min-w-100">
                    <!--begin::Table head-->
                    <thead></thead>
                    <!--end::Table head-->  
                    <!--begin::Table body-->
                    <tbody>
                      <tr class="fw-medium pw-text-neutral-700 fs-9">
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                      </tr>
                      <tr class="fw-medium pw-text-neutral-700 fs-9">
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                      </tr>
                      <tr class="fw-medium pw-text-neutral-700 fs-9">
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                      </tr>
                      <tr class="fw-medium pw-text-neutral-700 fs-9">
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                      </tr>
                    </tbody>
                    <!--end::Table body-->
                  </table>
                  <!--end::Table-->
                </div>
                <!--end::Deger table-->
              </div>
            </div>
          </div>

          <!--begin::Divider-->
          <div class="my-20 border-top border-2 border-primary"></div>
          <!--end::Divider-->

          <div class="row">
            <div class="col-md-6 my-3">
              <div class="border rounded-2 p-3 h-100">
                <button class="btn btn-primary py-2 px-3 fs-7 mb-5">+ Liste Ekle</button>
                <ul class="list-group rounded-0 pw-border-neutral-200">
                  <li class="list-group-item px-6 py-2">
                    <span class="btn p-0 fs-8 fw-bold d-inline-flex align-items-center gap-2 pw-text-brand w-100">
                      <div class="w-25px h-25px pw-bg-iconbg rounded-circle d-inline-flex align-items-center justify-content-center p-4">
                        <i class="fa-solid fa-file-lines pw-text-brand"></i>
                      </div>
                      <span class="d-inline-flex align-items-center gap-5">
                        <span class="fw-bold fs-9 pw-text-neutral-700">bütçe</span>
                      </span>
                      <div class="w-25px h-25px pw-bg-primary-50 rounded-0.20rem d-inline-flex align-items-center justify-content-center p-4" style="margin-left:auto">
                        <i class="fa-solid fa-trash pw-text-brand"></i>
                      </div>
                    </span>
                  </li>
                  <li class="list-group-item px-6 py-2">
                    <span class="btn p-0 fs-8 fw-bold d-inline-flex align-items-center gap-2 pw-text-brand w-100">
                      <div
                        class="w-25px h-25px pw-bg-iconbg rounded-circle d-inline-flex align-items-center justify-content-center p-4">
                        <i class="fa-solid fa-file-lines pw-text-brand"></i>
                      </div>
                      <span class="d-inline-flex align-items-center gap-5">
                        <span class="fw-bold fs-9 pw-text-neutral-700">bütçe</span>
                      </span>
                      <div class="w-25px h-25px pw-bg-primary-50 rounded-0.20rem d-inline-flex align-items-center justify-content-center p-4" style="margin-left:auto">
                      <i class="fa-solid fa-trash pw-text-brand"></i>
                      </div>
                    </span>
                  </li>
                  <li class="list-group-item px-6 py-2">
                    <span class="btn p-0 fs-8 fw-bold d-inline-flex align-items-center gap-2 pw-text-brand w-100">
                      <div
                        class="w-25px h-25px pw-bg-iconbg rounded-circle d-inline-flex align-items-center justify-content-center p-4">
                        <i class="fa-solid fa-file-lines pw-text-brand"></i>
                      </div>
                      <span class="d-inline-flex align-items-center gap-5">
                        <span class="fw-bold fs-9 pw-text-neutral-700">bütçe</span>
                      </span>
                      <div class="w-25px h-25px pw-bg-primary-50 rounded-0.20rem d-inline-flex align-items-center justify-content-center p-4" style="margin-left:auto">
                        <i class="fa-solid fa-trash pw-text-brand"></i>
                      </div>
                    </span>
                  </li>
                  <li class="list-group-item px-6 py-2">
                    <span class="btn p-0 fs-8 fw-bold d-inline-flex align-items-center gap-2 pw-text-brand w-100">
                      <div
                        class="w-25px h-25px pw-bg-iconbg rounded-circle d-inline-flex align-items-center justify-content-center p-4">
                        <i class="fa-solid fa-file-lines pw-text-brand"></i>
                      </div>
                      <span class="d-inline-flex align-items-center gap-5">
                        <span class="fw-bold fs-9 pw-text-neutral-700">bütçe</span>
                      </span>
                      <div class="w-25px h-25px pw-bg-primary-50 rounded-0.20rem d-inline-flex align-items-center justify-content-center p-4" style="margin-left:auto">
                        <i class="fa-solid fa-trash pw-text-brand"></i>
                      </div>
                    </span>
                  </li>
              </ul>
              </div>
            </div>
            <div class="col-md-6 my-3">
              <!--begin::Form-->
              <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fw-bold fs-7">
                  <tbody>
                    <!--begin::Row-->
                    <tr>
                      <td class="col-md-3"><label for="degeri">Değeri</label></td>
                      <td class="col-md-9">
                          <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" id="degeri" name="degeri" required />
                      </td>
                    </tr>
                    <!--end::Row-->
                  </tbody>
                </table>

                <!--begin::Form actions-->
                <div class="row">
                  <div class="d-flex align-items-center justify-content-end gap-3 border-top pw-border-stroke pt-5">
                    <button type="reset" class="btn btn-active-light fs-8 py-3 px-6">Vazgeç</button>
                    <button type="submit" class="btn btn-primary fs-8 py-3 px-6">Kaydet</button>
                  </div>
                </div>
                <!--end::Form actions-->
              </div>
              <!--end::Form-->  
              <div class="border rounded-2 p-3 mt-10">
                <button class="btn btn-primary py-2 px-3 fs-7 mb-5">+ Değer Ekle</button>
                <ul class="list-group rounded-0 pw-border-neutral-200">
                  <li class="list-group-item px-6 py-2">
                    <span class="btn p-0 fs-8 fw-bold d-inline-flex align-items-center gap-2 pw-text-brand w-100">
                      <div class="w-25px h-25px pw-bg-iconbg rounded-circle d-inline-flex align-items-center justify-content-center p-4">
                        <i class="fa-solid fa-file-lines pw-text-brand"></i>
                      </div>
                      <span class="d-inline-flex align-items-center gap-5">
                        <span class="fw-bold fs-9 pw-text-neutral-700">bütçe</span>
                      </span>
                      <div class="w-25px h-25px pw-bg-primary-50 rounded-0.20rem d-inline-flex align-items-center justify-content-center p-4" style="margin-left:auto">
                        <i class="fa-solid fa-trash pw-text-brand"></i>
                      </div>
                    </span>
                  </li>
                  <li class="list-group-item px-6 py-2">
                    <span class="btn p-0 fs-8 fw-bold d-inline-flex align-items-center gap-2 pw-text-brand w-100">
                      <div
                        class="w-25px h-25px pw-bg-iconbg rounded-circle d-inline-flex align-items-center justify-content-center p-4">
                        <i class="fa-solid fa-file-lines pw-text-brand"></i>
                      </div>
                      <span class="d-inline-flex align-items-center gap-5">
                        <span class="fw-bold fs-9 pw-text-neutral-700">bütçe</span>
                      </span>
                      <div class="w-25px h-25px pw-bg-primary-50 rounded-0.20rem d-inline-flex align-items-center justify-content-center p-4" style="margin-left:auto">
                      <i class="fa-solid fa-trash pw-text-brand"></i>
                      </div>
                    </span>
                  </li>
                  <li class="list-group-item px-6 py-2">
                    <span class="btn p-0 fs-8 fw-bold d-inline-flex align-items-center gap-2 pw-text-brand w-100">
                      <div
                        class="w-25px h-25px pw-bg-iconbg rounded-circle d-inline-flex align-items-center justify-content-center p-4">
                        <i class="fa-solid fa-file-lines pw-text-brand"></i>
                      </div>
                      <span class="d-inline-flex align-items-center gap-5">
                        <span class="fw-bold fs-9 pw-text-neutral-700">bütçe</span>
                      </span>
                      <div class="w-25px h-25px pw-bg-primary-50 rounded-0.20rem d-inline-flex align-items-center justify-content-center p-4" style="margin-left:auto">
                        <i class="fa-solid fa-trash pw-text-brand"></i>
                      </div>
                    </span>
                  </li>
                  <li class="list-group-item px-6 py-2">
                    <span class="btn p-0 fs-8 fw-bold d-inline-flex align-items-center gap-2 pw-text-brand w-100">
                      <div
                        class="w-25px h-25px pw-bg-iconbg rounded-circle d-inline-flex align-items-center justify-content-center p-4">
                        <i class="fa-solid fa-file-lines pw-text-brand"></i>
                      </div>
                      <span class="d-inline-flex align-items-center gap-5">
                        <span class="fw-bold fs-9 pw-text-neutral-700">bütçe</span>
                      </span>
                      <div class="w-25px h-25px pw-bg-primary-50 rounded-0.20rem d-inline-flex align-items-center justify-content-center p-4" style="margin-left:auto">
                        <i class="fa-solid fa-trash pw-text-brand"></i>
                      </div>
                    </span>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <!--begin::Divider-->
          <div class="my-20 border-top border-2 border-primary"></div>
          <!--end::Divider-->

          <div class="row">
            <div class="col-md-6 my-3">
              <div class="border rounded-2 p-3 h-100">
                <button class="btn btn-primary py-2 px-3 fs-7 mb-5">+ Liste Ekle</button>
                <ul class="list-group rounded-0 pw-border-neutral-200">
                  <li class="list-group-item px-6 py-2">
                    <span class="btn p-0 fs-8 fw-bold d-inline-flex align-items-center gap-2 pw-text-brand w-100">
                      <div class="w-25px h-25px pw-bg-iconbg rounded-circle d-inline-flex align-items-center justify-content-center p-4">
                        <i class="fa-solid fa-file-lines pw-text-brand"></i>
                      </div>
                      <span class="d-inline-flex align-items-center gap-5">
                        <span class="fw-bold fs-9 pw-text-neutral-700">bütçe</span>
                      </span>
                      <div class="w-25px h-25px pw-bg-primary-50 rounded-0.20rem d-inline-flex align-items-center justify-content-center p-4" style="margin-left:auto">
                        <i class="fa-solid fa-trash pw-text-brand"></i>
                      </div>
                    </span>
                  </li>
                  <li class="list-group-item px-6 py-2">
                    <span class="btn p-0 fs-8 fw-bold d-inline-flex align-items-center gap-2 pw-text-brand w-100">
                      <div
                        class="w-25px h-25px pw-bg-iconbg rounded-circle d-inline-flex align-items-center justify-content-center p-4">
                        <i class="fa-solid fa-file-lines pw-text-brand"></i>
                      </div>
                      <span class="d-inline-flex align-items-center gap-5">
                        <span class="fw-bold fs-9 pw-text-neutral-700">bütçe</span>
                      </span>
                      <div class="w-25px h-25px pw-bg-primary-50 rounded-0.20rem d-inline-flex align-items-center justify-content-center p-4" style="margin-left:auto">
                      <i class="fa-solid fa-trash pw-text-brand"></i>
                      </div>
                    </span>
                  </li>
                  <li class="list-group-item px-6 py-2">
                    <span class="btn p-0 fs-8 fw-bold d-inline-flex align-items-center gap-2 pw-text-brand w-100">
                      <div
                        class="w-25px h-25px pw-bg-iconbg rounded-circle d-inline-flex align-items-center justify-content-center p-4">
                        <i class="fa-solid fa-file-lines pw-text-brand"></i>
                      </div>
                      <span class="d-inline-flex align-items-center gap-5">
                        <span class="fw-bold fs-9 pw-text-neutral-700">bütçe</span>
                      </span>
                      <div class="w-25px h-25px pw-bg-primary-50 rounded-0.20rem d-inline-flex align-items-center justify-content-center p-4" style="margin-left:auto">
                        <i class="fa-solid fa-trash pw-text-brand"></i>
                      </div>
                    </span>
                  </li>
                  <li class="list-group-item px-6 py-2">
                    <span class="btn p-0 fs-8 fw-bold d-inline-flex align-items-center gap-2 pw-text-brand w-100">
                      <div
                        class="w-25px h-25px pw-bg-iconbg rounded-circle d-inline-flex align-items-center justify-content-center p-4">
                        <i class="fa-solid fa-file-lines pw-text-brand"></i>
                      </div>
                      <span class="d-inline-flex align-items-center gap-5">
                        <span class="fw-bold fs-9 pw-text-neutral-700">bütçe</span>
                      </span>
                      <div class="w-25px h-25px pw-bg-primary-50 rounded-0.20rem d-inline-flex align-items-center justify-content-center p-4" style="margin-left:auto">
                        <i class="fa-solid fa-trash pw-text-brand"></i>
                      </div>
                    </span>
                  </li>
              </ul>
              </div>
            </div>
            <div class="col-md-6 my-3">
              <div class="border rounded-2 p-3 h-100">
                <button class="btn btn-primary py-2 px-3 fs-7 mb-5">+ Değer Ekle</button>
                <ul class="list-group rounded-0 pw-border-neutral-200">
                  <li class="list-group-item px-6 py-2">
                    <span class="btn p-0 fs-8 fw-bold d-inline-flex align-items-center gap-2 pw-text-brand w-100">
                      <div class="w-25px h-25px pw-bg-iconbg rounded-circle d-inline-flex align-items-center justify-content-center p-4">
                        <i class="fa-solid fa-file-lines pw-text-brand"></i>
                      </div>
                      <span class="d-inline-flex align-items-center gap-5">
                        <span class="fw-bold fs-9 pw-text-neutral-700">bütçe</span>
                      </span>
                      <div class="w-25px h-25px pw-bg-primary-50 rounded-0.20rem d-inline-flex align-items-center justify-content-center p-4" style="margin-left:auto">
                        <i class="fa-solid fa-trash pw-text-brand"></i>
                      </div>
                    </span>
                  </li>
                  <li class="list-group-item px-6 py-2">
                    <span class="btn p-0 fs-8 fw-bold d-inline-flex align-items-center gap-2 pw-text-brand w-100">
                      <div
                        class="w-25px h-25px pw-bg-iconbg rounded-circle d-inline-flex align-items-center justify-content-center p-4">
                        <i class="fa-solid fa-file-lines pw-text-brand"></i>
                      </div>
                      <span class="d-inline-flex align-items-center gap-5">
                        <span class="fw-bold fs-9 pw-text-neutral-700">bütçe</span>
                      </span>
                      <div class="w-25px h-25px pw-bg-primary-50 rounded-0.20rem d-inline-flex align-items-center justify-content-center p-4" style="margin-left:auto">
                      <i class="fa-solid fa-trash pw-text-brand"></i>
                      </div>
                    </span>
                  </li>
                  <li class="list-group-item px-6 py-2">
                    <span class="btn p-0 fs-8 fw-bold d-inline-flex align-items-center gap-2 pw-text-brand w-100">
                      <div
                        class="w-25px h-25px pw-bg-iconbg rounded-circle d-inline-flex align-items-center justify-content-center p-4">
                        <i class="fa-solid fa-file-lines pw-text-brand"></i>
                      </div>
                      <span class="d-inline-flex align-items-center gap-5">
                        <span class="fw-bold fs-9 pw-text-neutral-700">bütçe</span>
                      </span>
                      <div class="w-25px h-25px pw-bg-primary-50 rounded-0.20rem d-inline-flex align-items-center justify-content-center p-4" style="margin-left:auto">
                        <i class="fa-solid fa-trash pw-text-brand"></i>
                      </div>
                    </span>
                  </li>
                  <li class="list-group-item px-6 py-2">
                    <span class="btn p-0 fs-8 fw-bold d-inline-flex align-items-center gap-2 pw-text-brand w-100">
                      <div
                        class="w-25px h-25px pw-bg-iconbg rounded-circle d-inline-flex align-items-center justify-content-center p-4">
                        <i class="fa-solid fa-file-lines pw-text-brand"></i>
                      </div>
                      <span class="d-inline-flex align-items-center gap-5">
                        <span class="fw-bold fs-9 pw-text-neutral-700">bütçe</span>
                      </span>
                      <div class="w-25px h-25px pw-bg-primary-50 rounded-0.20rem d-inline-flex align-items-center justify-content-center p-4" style="margin-left:auto">
                        <i class="fa-solid fa-trash pw-text-brand"></i>
                      </div>
                    </span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="tab-pane fade" id="tablolar" role="tabpanel">
          <div class="row">
            <div class="col-md-6">
              <div class="border rounded-2 p-3 h-100">
                <button class="btn btn-primary py-2 px-3 fs-7">+ Tablo Ekle</button>
                <div class="table-responsive overflow-x-auto mt-3">
                  <!--begin::Table-->
                  <table class="table table-row-bordered rounded-0 border pw-dark-bg-table pw-table-border-gray table-rounded align-middle w-max-content min-w-100">
                    <!--begin::Table head-->
                    <thead></thead>
                    <!--end::Table head-->  
                    <!--begin::Table body-->
                    <tbody>
                      <tr class="fw-medium pw-text-neutral-700 fs-9">
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                      </tr>
                      <tr class="fw-medium pw-text-neutral-700 fs-9">
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                      </tr>
                      <tr class="fw-medium pw-text-neutral-700 fs-9">
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                      </tr>
                    </tbody>
                    <!--end::Table body-->
                  </table>
                  <!--end::Table-->
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="border rounded-2 h-100 py-2 px-3">
                <div class="table-responsive overflow-x-auto mt-13">
                  <!--begin::Table-->
                  <table class="table table-row-bordered rounded-0 border pw-dark-bg-table pw-table-border-gray table-rounded align-middle w-max-content min-w-100">
                    <!--begin::Table head-->
                    <thead></thead>
                    <!--end::Table head-->  
                    <!--begin::Table body-->
                    <tbody>
                      <tr class="fw-medium pw-text-neutral-700 fs-9">
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                      </tr>
                      <tr class="fw-medium pw-text-neutral-700 fs-9">
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                      </tr>
                      <tr class="fw-medium pw-text-neutral-700 fs-9">
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                      </tr>
                    </tbody>
                    <!--end::Table body-->
                  </table>
                  <!--end::Table-->
                </div>
              </div>
            </div>
          </div>

          <!--begin::Divider-->
          <div class="my-20 border-top border-2 border-primary"></div>
          <!--end::Divider-->

          <div class="row">
            <div class="col-md-6 my-3">
              <div class="border rounded-2 pt-15 pb-5 px-5">
                <!--begin::Form-->
                <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                  <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fw-bold fs-7">
                    <tbody>
                      <!--begin::Row-->
                      <tr>
                        <td class="col-md-3"><label for="Tablo-adi">Tablo Adı</label></td>
                        <td class="col-md-9">
                            <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" id="liste-adi" name="liste-adi" required />
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td class="col-md-3"><label for="liste-adi">Kolon Adı</label></td>
                        <td class="col-md-9">
                          <div class="row">
                            <div class="col-md-7">
                              <input type="text" class="form-control form-control-solid py-3 px-4 fs-8 me-2" id="liste-adi" name="liste-adi" required />
                            </div>
                            <div class="col-md-5">
                              <select id="" class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2" data-placeholder="Seçiniz">
                                <option></option>
                                <option value="1">Int</option>
                                <option value="2">String</option>
                                <option value="2">Double</option>
                                <option value="2">Bool</option>
                                <option value="2">Date time</option>
                              </select>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td class="col-md-3"></td>
                        <td class="col-md-9">
                          <div class="table-responsive overflow-x-auto mt-3">
                            <!--begin::Table-->
                            <table class="table border pw-dark-bg-table pw-table-border-gray table-rounded align-middle">
                              <!--begin::Table body-->
                              <tbody>
                                <tr class="fw-medium pw-text-neutral-700 fs-9">
                                  <td class="py-5 px-9"></td>
                                  <td class="py-5 px-9"></td>
                                </tr>
                                <tr class="fw-medium pw-text-neutral-700 fs-9">
                                  <td class="py-5 px-9"></td>
                                  <td class="py-5 px-9"></td>
                                </tr>
                                <tr class="fw-medium pw-text-neutral-700 fs-9">
                                  <td class="py-5 px-9"></td>
                                  <td class="py-5 px-9"></td>
                                </tr>
                              </tbody>
                              <!--end::Table body-->
                            </table>
                            <!--end::Table-->
                          </div>
                        </td>
                      </tr>
                      <!--end::Row-->
                    </tbody>
                  </table>

                  <!--begin::Form actions-->
                  <div class="row">
                    <div class="d-flex align-items-center justify-content-end gap-3 border-top pw-border-stroke pt-5">
                      <button type="reset" class="btn btn-active-light fs-8 py-3 px-6 text-gray-400">Vazgeç</button>
                      <button type="submit" class="btn btn-primary fs-8 py-3 px-6">Kaydet</button>
                    </div>
                  </div>
                  <!--end::Form actions-->
                </div>
                <!--end::Form-->    
              </div>

              <div class="border rounded-2 p-3 mt-7">
                <button class="btn btn-primary py-2 px-3 fs-7 mb-5">+ Tablo Ekle</button>
                <div class="table-responsive overflow-x-auto mt-3">
                  <!--begin::Table-->
                  <table class="table table-row-bordered rounded-0 border pw-dark-bg-table pw-table-border-gray table-rounded align-middle w-max-content min-w-100">
                    <!--begin::Table head-->
                    <thead></thead>
                    <!--end::Table head-->  
                    <!--begin::Table body-->
                    <tbody>
                      <tr class="fw-medium pw-text-neutral-700 fs-9">
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                      </tr>
                      <tr class="fw-medium pw-text-neutral-700 fs-9">
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                      </tr>
                      <tr class="fw-medium pw-text-neutral-700 fs-9">
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                      </tr>
                      <tr class="fw-medium pw-text-neutral-700 fs-9">
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                      </tr>
                    </tbody>
                    <!--end::Table body-->
                  </table>
                  <!--end::Table-->
                </div>
              </div>
            </div>
            <div class="col-md-6 my-3">
              <div class="border rounded-2 p-3 h-100">
                <!--begin::Yeni Kayıt table-->
                <div class="table-responsive overflow-x-auto mt-3">
                  <!--begin::Table-->
                  <table class="table table-row-bordered rounded-0 border pw-dark-bg-table pw-table-border-gray table-rounded align-middle w-max-content min-w-100">
                    <!--begin::Table head-->
                    <thead></thead>
                    <!--end::Table head-->  
                    <!--begin::Table body-->
                    <tbody>
                      <tr class="fw-medium pw-text-neutral-700 fs-9">
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                      </tr>
                      <tr class="fw-medium pw-text-neutral-700 fs-9">
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                      </tr>
                      <tr class="fw-medium pw-text-neutral-700 fs-9">
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                      </tr>
                      <tr class="fw-medium pw-text-neutral-700 fs-9">
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                      </tr>
                    </tbody>
                    <!--end::Table body-->
                  </table>
                  <!--end::Table-->
                </div>
                <!--end::Yeni Kayıt table-->
              </div>
            </div>
          </div>

          <!--begin::Divider-->
          <div class="my-20 border-top border-2 border-primary"></div>
          <!--end::Divider-->

          <div class="row">
            <div class="col-md-6 my-3">
              <div class="border rounded-2 pt-15 pb-5 px-5">
                <!--begin::Form-->
                <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                  <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fw-bold fs-7">
                    <tbody>
                      <!--begin::Row-->
                      <tr>
                        <td class="col-md-3"><label for="Tablo-adi">Tablo Adı</label></td>
                        <td class="col-md-9">
                            <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" id="liste-adi" name="liste-adi" required />
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td class="col-md-3"><label for="liste-adi">Kolon Adı</label></td>
                        <td class="col-md-9">
                          <div class="row">
                            <div class="col-md-7">
                              <input type="text" class="form-control form-control-solid py-3 px-4 fs-8 me-2" id="liste-adi" name="liste-adi" required />
                            </div>
                            <div class="col-md-5">
                              <select id="tipi" class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2" data-placeholder="Seçiniz">
                                <option></option>
                                <option value="1">Int</option>
                                <option value="2">String</option>
                                <option value="2">Double</option>
                                <option value="2">Bool</option>
                                <option value="2">Date time</option>
                              </select>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td class="col-md-3"></td>
                        <td class="col-md-9">
                          <div class="table-responsive overflow-x-auto mt-3">
                            <!--begin::Table-->
                            <table class="table border pw-dark-bg-table pw-table-border-gray table-rounded align-middle">
                              <!--begin::Table body-->
                              <tbody>
                                <tr class="fw-medium pw-text-neutral-700">
                                  <td class="py-2 px-3 d-flex align-items-center fs-7" align="left">
                                    <i class="fa-solid fa-table-cells-large pw-text-brand me-2"></i>Tablo (string)
                                  </td>
                                  <td class="py-1 px-3" align="right">
                                    <div class="w-25px h-25px pw-bg-primary-50 rounded-0.20rem d-inline-flex align-items-center justify-content-center p-4" style="margin-left:auto">
                                      <i class="fa-solid fa-trash pw-text-brand"></i>
                                    </div>
                                  </td>
                                </tr>
                                <tr class="fw-medium pw-text-neutral-700 fs-9">
                                  <td class="py-5 px-9"></td>
                                  <td class="py-5 px-9"></td>
                                </tr>
                                <tr class="fw-medium pw-text-neutral-700 fs-9">
                                  <td class="py-5 px-9"></td>
                                  <td class="py-5 px-9"></td>
                                </tr>
                              </tbody>
                              <!--end::Table body-->
                            </table>
                            <!--end::Table-->
                          </div>
                        </td>
                      </tr>
                      <!--end::Row-->
                    </tbody>
                  </table>

                  <!--begin::Form actions-->
                  <div class="row">
                    <div class="d-flex align-items-center justify-content-end gap-3 border-top pw-border-stroke pt-5">
                      <button type="reset" class="btn btn-active-light fs-8 py-3 px-6 text-gray-400">Vazgeç</button>
                      <button type="submit" class="btn btn-primary fs-8 py-3 px-6">Kaydet</button>
                    </div>
                  </div>
                  <!--end::Form actions-->
                </div>
                <!--end::Form-->    
              </div>

              <div class="border rounded-2 p-3 mt-7">
                <div class="table-responsive overflow-x-auto mt-3">
                  <!--begin::Table-->
                  <table class="table table-row-bordered rounded-0 border pw-dark-bg-table pw-table-border-gray table-rounded align-middle w-max-content min-w-100">
                    <!--begin::Table head-->
                    <thead></thead>
                    <!--end::Table head-->  
                    <!--begin::Table body-->
                    <tbody>
                      <tr class="fw-medium pw-text-neutral-700 fs-9">
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                      </tr>
                      <tr class="fw-medium pw-text-neutral-700 fs-9">
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                      </tr>
                      <tr class="fw-medium pw-text-neutral-700 fs-9">
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                      </tr>
                      <tr class="fw-medium pw-text-neutral-700 fs-9">
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                      </tr>
                    </tbody>
                    <!--end::Table body-->
                  </table>
                  <!--end::Table-->
                </div>
              </div>
            </div>
            <div class="col-md-6 my-3">
              <div class="border rounded-2 p-3 h-100">
                <button class="btn btn-primary py-2 px-3 fs-7">+ Yeni Kayıt</button>
                <!--begin::Yeni Kayıt table-->
                <div class="table-responsive overflow-x-auto mt-3">
                  <!--begin::Table-->
                  <table class="table table-row-bordered rounded-0 border pw-dark-bg-table pw-table-border-gray table-rounded align-middle w-max-content min-w-100">
                    <!--begin::Table head-->
                    <thead></thead>
                    <!--end::Table head-->  
                    <!--begin::Table body-->
                    <tbody>
                      <tr class="fw-medium pw-text-neutral-700 fs-9">
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                      </tr>
                      <tr class="fw-medium pw-text-neutral-700 fs-9">
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                      </tr>
                      <tr class="fw-medium pw-text-neutral-700 fs-9">
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                      </tr>
                      <tr class="fw-medium pw-text-neutral-700 fs-9">
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                        <td class="py-6 px-9"></td>
                      </tr>
                    </tbody>
                    <!--end::Table body-->
                  </table>
                  <!--end::Table-->
                </div>
                <!--end::Yeni Kayıt table-->
              </div>
            </div>
          </div>

          <!--begin::Divider-->
          <div class="my-20 border-top border-2 border-primary"></div>
          <!--end::Divider-->

          <div class="row">
            <div class="col-md-6 my-3">
              <div class="border rounded-2 p-3 h-100">
                <button class="btn btn-primary py-2 px-3 fs-7">+ Tablo Ekle</button>
                <!--begin::Tablo-->
                <div class="table-responsive overflow-x-auto mt-3">
                  <!--begin::Table-->
                  <table class="table table-row-bordered rounded-0 border pw-dark-bg-table pw-table-border-gray table-rounded align-middle">
                    <!--begin::Table body-->
                    <tbody>
                      <tr class="fw-medium pw-text-neutral-700">
                        <td class="py-3 px-3 d-flex align-items-center fs-7" align="left">
                          <i class="fa-solid fa-table-cells-large pw-text-brand me-2"></i>Tablo1
                        </td>
                        <td class="py-1 px-3" align="right">
                          <div class="w-25px h-25px pw-bg-primary-50 rounded-0.20rem d-inline-flex align-items-center justify-content-center p-4 me-2" style="margin-left:auto">
                            <i class="fa-solid fa-pen-to-square pw-text-brand"></i>
                          </div>
                          <div class="w-25px h-25px pw-bg-primary-50 rounded-0.20rem d-inline-flex align-items-center justify-content-center p-4" style="margin-left:auto">
                            <i class="fa-solid fa-trash pw-text-brand"></i>
                          </div>
                        </td>
                      </tr>
                      <tr class="fw-medium pw-text-neutral-700 fs-9">
                        <td class="py-5 px-9"></td>
                        <td class="py-5 px-9"></td>
                      </tr>
                      <tr class="fw-medium pw-text-neutral-700 fs-9">
                        <td class="py-5 px-9"></td>
                        <td class="py-5 px-9"></td>
                      </tr>
                    </tbody>
                    <!--end::Table body-->
                  </table>
                  <!--end::Table-->
                </div>
                <!--end::Tablo-->
              </div>
            </div>
            <div class="col-md-6 my-3">
              <div class="border rounded-2 p-3 h-100">
                <button class="btn btn-primary py-2 px-3 fs-7">+ Yeni Kayıt</button>
                <!--begin::Yeni Kayıt-->
                <div class="table-responsive overflow-x-auto mt-3">
                  <!--begin::Table-->
                  <table class="table table-bordered pw-dark-bg-table pw-table-border-gray align-middle">
                    <thead>
                      <th class="px-3 fs-7 fw-normal">Rows</th>
                      <th class="px-3 fs-7 fw-normal">Kolon</th>
                    </thead>
                    <!--begin::Table body-->
                    <tbody>
                      <tr class="fw-medium pw-text-neutral-700">
                        <td class="px-3 d-flex align-items-center fs-7">
                          <input class="me-2 w-20px h-20px pw-bg-primary-400 opacity-75" type="checkbox" value="" id="" name="" checked="">
                          <a href="javascript:void(0);"><i class="fa-solid fa-trash pw-text-brand me-2 pt-1"></i></a>
                          <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" name="" />
                        </td>
                        <td class="px-3">
                          <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" name="" />
                        </td>
                      </tr>
                      <tr class="fw-medium pw-text-neutral-700 fs-9">
                        <td class="py-5 px-9"></td>
                        <td class="py-5 px-9"></td>
                      </tr>
                      <tr class="fw-medium pw-text-neutral-700 fs-9">
                        <td class="py-5 px-9"></td>
                        <td class="py-5 px-9"></td>
                      </tr>
                    </tbody>
                    <!--end::Table body-->
                  </table>
                  <!--end::Table-->
                </div>
                <!--end::Yeni Kayıt-->
              </div>
            </div>
          </div>
        </div>

        <div class="tab-pane fade" id="fonksiyonlar" role="tabpanel">
          <div class="row">
            <div class="col-md-3">
              <div class="">
                <div class="my-1">
                  <label for="" class="fs-7 fw-bold my-2 pw-neutral-700">Fonksiyon Adı</label>
                  <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" name="" required />
                </div>

                <div class="my-1">
                  <label for="" class="fs-7 fw-bold my-2 pw-neutral-700">Dönüş Tipi</label>
                  <select id="" class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2" data-placeholder="Seçiniz">
                    <option></option>
                    <option value="1">Int</option>
                    <option value="2">String</option>
                    <option value="2">Double</option>
                    <option value="2">Bool</option>
                    <option value="2">Date time</option>
                  </select>
                </div>

                <div class="text-end my-5">
                  <button class="btn btn-primary rounded-1 py-2 px-5 fs-7">Ekle</button>
                </div>
              </div>

              <div class="table-responsive overflow-x-auto mt-3">
                <!--begin::Table-->
                <table class="table border pw-dark-bg-table pw-table-border-gray table-rounded align-middle">
                  <!--begin::Table body-->
                  <tbody>
                    <tr class="fw-medium pw-text-neutral-700 fs-9">
                      <td class="py-9 px-9"></td>
                      <td class="py-9 px-9"></td>
                    </tr>
                    <tr class="fw-medium pw-text-neutral-700 fs-9">
                      <td class="py-9 px-9"></td>
                      <td class="py-9 px-9"></td>
                    </tr>
                    <tr class="fw-medium pw-text-neutral-700 fs-9">
                      <td class="py-9 px-9"></td>
                      <td class="py-9 px-9"></td>
                    </tr>
                    <tr class="fw-medium pw-text-neutral-700 fs-9">
                      <td class="py-9 px-9"></td>
                      <td class="py-9 px-9"></td>
                    </tr>
                    <tr class="fw-medium pw-text-neutral-700 fs-9">
                      <td class="py-9 px-9"></td>
                      <td class="py-9 px-9"></td>
                    </tr>
                    <tr class="fw-medium pw-text-neutral-700 fs-9">
                      <td class="py-9 px-9"></td>
                      <td class="py-9 px-9"></td>
                    </tr>
                  </tbody>
                  <!--end::Table body-->
                </table>
                <!--end::Table-->
              </div>
            </div>

            <div class="col-md-9">
              <div class="border rounded-2 p-5 h-100">
                <div class="row">
                  <div class="col-md-8">
                    <div class="">
                      <div class="my-1">
                        <label for="" class="fs-7 fw-bold my-2 pw-neutral-700">Parametre</label>
                        <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" name="" required />
                      </div>

                      <div class="my-1">
                        <label for="" class="fs-7 fw-bold my-2 pw-neutral-700">Tipi</label>
                        <select id="" class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2" data-placeholder="">
                          <option value="1">Option 1</option>
                          <option value="2">Option 2</option>
                        </select>
                      </div>

                      <div class="text-end my-5">
                        <button class="btn btn-primary rounded-1 py-2 px-5 fs-7">Ekle</button>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="table-responsive overflow-x-auto mt-3">
                      <!--begin::Table-->
                      <table class="table border pw-dark-bg-table pw-table-border-gray table-rounded align-middle">
                        <!--begin::Table body-->
                        <tbody>
                          <tr class="fw-medium pw-text-neutral-700 fs-9">
                            <td class="py-9 px-9"></td>
                            <td class="py-9 px-9"></td>
                          </tr>
                          <tr class="fw-medium pw-text-neutral-700 fs-9">
                            <td class="py-9 px-9"></td>
                            <td class="py-9 px-9"></td>
                          </tr>
                          <tr class="fw-medium pw-text-neutral-700 fs-9">
                            <td class="py-9 px-9"></td>
                            <td class="py-9 px-9"></td>
                          </tr>
                        </tbody>
                        <!--end::Table body-->
                      </table>
                      <!--end::Table-->
                    </div>
                  </div>
                </div>

                <div class="row">
                  <!--begin::Card actions-->
                  <div class="d-flex align-items-start gap-3">
                    <!--begin::Item-->
                    <button type="button" class="btn p-0 btn-icon-gray-400 btn-active-icon-primary">
                      <i class="fa-solid fa-floppy-disk fs-7"></i>
                    </button>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <button type="button" class="btn p-0 btn-icon-gray-400 btn-active-icon-primary">
                      <i class="fa-solid fa-message fs-7"></i>
                    </button>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <button type="button" class="btn p-0 btn-icon-gray-400 btn-active-icon-primary">
                      <i class="fa-solid fa-message-xmark fs-7"></i>
                    </button>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <button type="button" class="btn p-0 btn-icon-gray-400 btn-active-icon-primary">
                      <i class="fa-solid fa-font-case fs-7"></i>
                    </button>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <button type="button" class="btn p-0 btn-icon-gray-400 btn-active-icon-primary">
                      <i class="fs-7">aA</i>
                    </button>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <button type="button" class="btn p-0 btn-icon-gray-400 btn-active-icon-primary">
                      <i class="fa-solid fa-a fs-7"></i>
                    </button>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <button type="button" class="btn p-0 btn-icon-gray-400 btn-active-icon-primary">
                      <i class="fa-solid fa-magnifying-glass-minus fs-7"></i>
                    </button>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <button type="button" class="btn p-0 btn-icon-gray-400 btn-active-icon-primary">
                      <i class="fa-solid fa-magnifying-glass-plus fs-7"></i>
                    </button>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <button type="button" class="btn p-0 btn-icon-gray-400 btn-active-icon-primary">
                      <i class="fa-light fa-outdent fs-7"></i>
                    </button>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <button type="button" class="btn p-0 btn-icon-gray-400 btn-active-icon-primary">
                      <i class="fa-light fa-indent fs-7"></i>
                    </button>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <button type="button" class="btn p-0 btn-icon-gray-400 btn-active-icon-primary">
                      <i class="fa-solid fa-binoculars fs-7"></i>
                    </button>
                    <!--end::Item-->
                  </div>
                  <!--end::Card actions-->
                </div>

                <div class="row px-3">
                  <div class="border rounded-2 p-3 mt-3 h-350px">
                    <div class="d-flex align-items-center">
                      <span class="fs-7 pw-text-neutral-600 me-2">1</span>
                      <input type="text" class="form-control py-3 px-4 fs-8" name="" required="">
                    </div>
                    
                  </div>

                  <!--begin::Form actions-->
                  <div class="row mt-7 px-0">
                    <div class="d-flex align-items-center justify-content-end gap-3 px-0">
                        <button type="reset" class="btn btn-active-light fs-8 py-3 px-6 text-gray-400">İptal</button>
                        <button type="submit" class="btn btn-primary fs-8 py-3 px-6">Kaydet</button>
                    </div>
                  </div>
                  <!--end::Form actions-->
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="tab-pane fade" id="test" role="tabpanel">
          ...test
        </div>
      </div>
    </div>
    <!--end::Belge Taslakları tablosu-->
  </div>
  <!--end::Content -->
  <!--end::Content wrapper-->
  <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/footer.php'; ?>
</div>
<!--end::Main-->

</div>
<!--end::Wrapper -->


<!-- begin::Modal -->
<div class="modal fade" tabindex="-1" id="ortakKodlar">
  <div class="modal-dialog modal-dialog-centered modal-lg mw-950px">
    <div class="modal-content">
      <div class="modal-header border pb-3">
        <h3 class="modal-title fs-5">Ortak Kodlar</h3>

        <!--begin::Close-->
        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
          <i class="fa-solid fa-xmark fs-5"></i>
        </div>
        <!--end::Close-->
      </div>

      <div class="modal-body">
        <!--begin::Title-->
        <div class="d-flex align-items-center justify-content-between gap-3 mb-8">
          <ul class="nav nav-tabs nav-line-tabs mb-5 fs-6 border-0 gap-6">
            <li class="nav-item mb-0">
              <a class="nav-link active" data-bs-toggle="tab" href="#form_ortak_kodlari_tab">Form Ortak Kodları</a>
            </li>
            <li class="nav-item mb-0">
              <a class="nav-link" data-bs-toggle="tab" href="#akis_ortak_kodlari_tab">Akış Ortak Kodları</a>
            </li>
          </ul>
        </div>
        <!--end::Title-->
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="form_ortak_kodlari_tab" role="tabpanel">
            <!--begin::Card actions-->
            <div class="d-flex align-items-start gap-3 h-350px">
              <!--begin::Item-->
              <button type="button" class="btn p-0 btn-icon-gray-400 btn-active-icon-primary">
                <i class="fa-solid fa-floppy-disk fs-3"></i>
              </button>
              <!--end::Item-->

              <!--begin::Item-->
              <button type="button" class="btn p-0 btn-icon-gray-400 btn-active-icon-primary">
                <i class="fa-solid fa-message fs-3"></i>
              </button>
              <!--end::Item-->

              <!--begin::Item-->
              <button type="button" class="btn p-0 btn-icon-gray-400 btn-active-icon-primary">
                <i class="fa-solid fa-message-xmark fs-3"></i>
              </button>
              <!--end::Item-->

              <!--begin::Item-->
              <button type="button" class="btn p-0 btn-icon-gray-400 btn-active-icon-primary">
                <i class="fa-solid fa-font-case fs-3"></i>
              </button>
              <!--end::Item-->

              <!--begin::Item-->
              <button type="button" class="btn p-0 btn-icon-gray-400 btn-active-icon-primary">
                <i class="fs-3">aA</i>
              </button>
              <!--end::Item-->

              <!--begin::Item-->
              <button type="button" class="btn p-0 btn-icon-gray-400 btn-active-icon-primary">
                <i class="fa-solid fa-a fs-3"></i>
              </button>
              <!--end::Item-->

              <!--begin::Item-->
              <button type="button" class="btn p-0 btn-icon-gray-400 btn-active-icon-primary">
                <i class="fa-solid fa-magnifying-glass-minus fs-3"></i>
              </button>
              <!--end::Item-->

              <!--begin::Item-->
              <button type="button" class="btn p-0 btn-icon-gray-400 btn-active-icon-primary">
                <i class="fa-solid fa-magnifying-glass-plus fs-3"></i>
              </button>
              <!--end::Item-->

              <!--begin::Item-->
              <button type="button" class="btn p-0 btn-icon-gray-400 btn-active-icon-primary">
                <i class="fa-light fa-outdent fs-3"></i>
              </button>
              <!--end::Item-->

              <!--begin::Item-->
              <button type="button" class="btn p-0 btn-icon-gray-400 btn-active-icon-primary">
                <i class="fa-light fa-indent fs-3"></i>
              </button>
              <!--end::Item-->

              <!--begin::Item-->
              <button type="button" class="btn p-0 btn-icon-gray-400 btn-active-icon-primary">
                <i class="fa-solid fa-binoculars fs-3"></i>
              </button>
              <!--end::Item-->
            </div>
            <!--end::Card actions-->
          </div>

          <div class="tab-pane fade" id="akis_ortak_kodlari_tab" role="tabpanel">
            <!--begin::Card actions-->
            <div class="d-flex align-items-start gap-3 h-350px">
              <!--begin::Item-->
              <button type="button" class="btn p-0 btn-icon-gray-400 btn-active-icon-primary">
                <i class="fa-solid fa-floppy-disk fs-3"></i>
              </button>
              <!--end::Item-->

              <!--begin::Item-->
              <button type="button" class="btn p-0 btn-icon-gray-400 btn-active-icon-primary">
                <i class="fa-solid fa-message fs-3"></i>
              </button>
              <!--end::Item-->

              <!--begin::Item-->
              <button type="button" class="btn p-0 btn-icon-gray-400 btn-active-icon-primary">
                <i class="fa-solid fa-message-xmark fs-3"></i>
              </button>
              <!--end::Item-->

              <!--begin::Item-->
              <button type="button" class="btn p-0 btn-icon-gray-400 btn-active-icon-primary">
                <i class="fa-solid fa-font-case fs-3"></i>
              </button>
              <!--end::Item-->

              <!--begin::Item-->
              <button type="button" class="btn p-0 btn-icon-gray-400 btn-active-icon-primary">
                <i class="fs-3">aA</i>
              </button>
              <!--end::Item-->

              <!--begin::Item-->
              <button type="button" class="btn p-0 btn-icon-gray-400 btn-active-icon-primary">
                <i class="fa-solid fa-a fs-3"></i>
              </button>
              <!--end::Item-->

              <!--begin::Item-->
              <button type="button" class="btn p-0 btn-icon-gray-400 btn-active-icon-primary">
                <i class="fa-solid fa-magnifying-glass-minus fs-3"></i>
              </button>
              <!--end::Item-->

              <!--begin::Item-->
              <button type="button" class="btn p-0 btn-icon-gray-400 btn-active-icon-primary">
                <i class="fa-solid fa-magnifying-glass-plus fs-3"></i>
              </button>
              <!--end::Item-->

              <!--begin::Item-->
              <button type="button" class="btn p-0 btn-icon-gray-400 btn-active-icon-primary">
                <i class="fa-light fa-outdent fs-3"></i>
              </button>
              <!--end::Item-->

              <!--begin::Item-->
              <button type="button" class="btn p-0 btn-icon-gray-400 btn-active-icon-primary">
                <i class="fa-light fa-indent fs-3"></i>
              </button>
              <!--end::Item-->

              <!--begin::Item-->
              <button type="button" class="btn p-0 btn-icon-gray-400 btn-active-icon-primary">
                <i class="fa-solid fa-binoculars fs-3"></i>
              </button>
              <!--end::Item-->
            </div>
            <!--end::Card actions-->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end::Modal -->



<!--begin::Drawers-->
<!--begin::History & Recent canvas trigger-->
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/history-drawer.php'; ?>
<!--end::History canvas-->
<!--end::Drawers-->

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/foot.php'; ?>