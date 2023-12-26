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
                  <a href="/islemler/" class="text-muted text-hover-primary">Sistem Raporları</a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                  <span class="text-muted">/</span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item active"> Vekalet Yönetimi</li>
                <!--end::Item-->
              </ul>
              <!--end::Breadcrumb-->
              <!--begin::Title-->
              <h1 class="page-heading d-flex text-dark fw-bold fs-4 flex-column justify-content-center my-0">
                Vekalet Yönetimi
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
          <div class="col-12 col-lg-2">
            <div class="pw-border-stroke border rounded-3 p-4 mh-800px overflow-y-auto">
              <div class="mb-5 mt-1">
                <button class="btn pw-btn-bg-primary-100 pw-shadow-sm py-2 px-10"><i class="fa-solid fa-circle-plus text-primary"></i></button>
                <button class="btn pw-bg-danger-100 pw-shadow-sm py-2 px-10 float-end"><i class="fa-solid fa-trash-can text-danger"></i></button>
              </div>
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
                    <span class="menu-title">Ezgi Çelik</span>
                  </a>
                </div>
                <!--end::Menu item-->

                <!--begin::Menu item-->
                <div class="menu-item">
                  <a href="#" class="menu-link">
                    <span class="menu-icon w-auto">
                      <i class="fa-solid fa-user fs-6"></i>
                    </span>
                    <span class="menu-title">Sefa Ulusoy</span>
                  </a>
                </div>
                <!--end::Menu item-->
              </div>
              <!--end::Menu-->
            </div>
          </div>
          <!--end::Menu col-->
          <!--begin::Content col-->
          <div class="col-12 col-lg-10 pt-5 pt-lg-0 ps-lg-5">
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
                          <label class="form-label fs-base fw-bold" for="pw_belge_tipi">İş Akışı</label>
                        </td>
                        <td>
                          <select class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2" data-placeholder="Seçim Yapın" id="pw_belge_tipi" name="pw_belge_tipi">
                            <option></option>
                            <option value="1" selected>Akış seçiniz</option>
                            <option value="2">Option 2</option>
                          </select>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td>
                          <label class="form-label fs-base fw-bold" for="pw_belge_formati">Vekalet Verilen</label>
                        </td>
                        <td>
                          <select class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2">
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                          </select>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td>
                          <label class="form-label fs-base fw-bold" for="pw_arsivleyen">Bitiş Tarihi</label>
                        </td>
                        <td>
                          <div class="row position-relative">
                            <div class="">
                              <span class="position-absolute top-50 translate-middle-y fs-base ms-4">
                                <i class="fa-solid fa-calendar-days text-primary"></i>
                              </span>
                              <input class="form-control form-control-solid fs-8 py-3 ps-10 pe-4" value="GG/AA/YY" placeholder="Tarih seçiniz" id="pw_akis_istatistikleri_datepicker" required="required" />
                            </div>
                          </div>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td>
                          <label class="form-label fs-base fw-bold" for="pw_arsivleyen">Açıklama</label>
                        </td>
                        <td>
                          <textarea class="form-control" name="" id="" cols="30" rows="3"></textarea>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <tr>
                        <td colspan="2" align="right">
                          <button type="submit" class="btn btn-primary fs-8 py-3 px-6">
                            Vekaletleri Kaydet
                          </button>
                        </td> 
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!--end::Form table-->
              </form>
              <!--end::Form-->
            </div>
            <!--end::Form wrapper-->

            <!--begin::Table-Light-->
            <table class="table table-row-bordered border pw-dark-bg-table pw-table-border-gray table-rounded w-max-content min-w-100 mt-5">
              <!--begin::Table head-->
              <thead>
                <tr class="fw-semibold fs-8 pw-text-neutral-700 pw-bg-neutral-100">
                  <th class="py-3 px-9">Sil</th>
                  <th class="py-3 px-9">Akış Adı</th>
                  <th class="py-3 px-9">Vekalet Verilen</th>
                  <th class="py-3 px-9">Vekalet Kaydeden</th>
                  <th class="py-3 px-9">Vekalet Veren</th>
                  <th class="py-3 px-9">Başlangıç Tarihi</th>
                </tr>
              </thead>
              <!--end::Table head-->

              <!--begin::Table body-->
              <tbody>
                <!--begin::Row-->
                <tr class="fw-medium pw-text-neutral-700 fs-9">
                  <td class="py-6 px-9"><a href="#"><i class="fa-solid fa-trash-can text-primary"></i></a></td>
                  <td class="py-6 px-9"><i class="fa-solid fa-gears fs-8 pe-1"></i>Aday Gösterme</td>
                  <td class="py-6 px-9">Abdullah Dayıoğlu</td>
                  <td class="py-6 px-9">Sefa Ulusoy</td>
                  <td class="py-6 px-9">Sefa Ulusoy</td>
                  <td class="py-6 px-9">03.02.2023</td>
                </tr>
                <!--end::Row-->

              </tbody>
              <!--end::Table body-->
            </table>
            <!--end::Table-Light-->
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