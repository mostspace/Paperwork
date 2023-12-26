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
                  <a href="islemler/" class="text-muted text-hover-primary">İşlemler</a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                  <span class="text-muted">/</span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item active"> İş Akışı Yönetimi</li>
                <!--end::Item-->
              </ul>
              <!--end::Breadcrumb-->
              <!--begin::Title-->
              <h1 class="page-heading d-flex text-dark fw-bold fs-4 flex-column justify-content-center my-0">
                İş Akışı Yönetimi
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
          <div class="col-12 col-lg-9">
            <!--begin::Form-->
            <form>
              <!--begin::Form table-->
              <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                <table class="table w-min-content w-100">
                  <tbody>
                    <!--begin::Row-->
                    <tr>
                      <td>
                        <label class="form-label fs-7 fw-bolder" for="pw_surec_adi">Süreç Adı</label>
                      </td>
                      <td>
                        <select class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2" data-placeholder="Süreç Adı" name="pw_surec_adi">
                          <option></option>
                          <option value="1">Tümü</option>
                          <option value="2">Customer Flow</option>
                          <option value="3">ADT İzin Süreci</option>
                          <option value="4">Body Süreci</option>
                        </select>
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <tr>
                      <td>
                        <label class="form-label fs-7 fw-bolder" for="pw_durum">Durum</label>
                      </td>
                      <td>
                        <select class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2" data-placeholder="Durum" name="pw_durum">
                          <option></option>
                          <option value="1">Tümü</option>
                          <option value="2">Hatalı Akışlar</option>
                          <option value="3">Devam Edenler</option>
                          <option value="4">Tamamlananlar</option>
                          <option value="5">İptal Edilenler</option>
                          <option value="6">Durdurulanlar</option>
                        </select>
                      </td>
                    </tr>
                    <!--end::Row-->

                    <!--begin::Form actions row-->
                    <tr>
                      <td colspan="2" align="right">
                        <button type="clear" class="btn btn-active-light fs-8 py-3 pw-text-neutral-600 px-6">
                          Vazgeç
                        </button>
                        <button type="submit" class="btn btn-primary fs-8 py-3 px-6">
                          Kaydet
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

          <!--begin::Top content-->
          <div class="rounded border p-8 mb-10">
            <!--begin::table controller-->
            <div class="mb-5">
              <!--end::Menu wrapper-->
              <a href="/#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5 me-1">
                  <i class="fa-solid fa-rotate-left fs-7 text-primary"></i>
              </a>
              <a href="/#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5 me-1">
                  <i class="fa-solid fa-pause fs-7 text-primary"></i>
              </a>
              <a href="/#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-stop fs-7 text-primary"></i>
              </a>
            </div>
            <!--end::table controller-->

            <!--begin::Akış istatistikleri tablosu-->
            <div class="table-responsive overflow-x-auto rounded">
              <!--begin::Table-Light-->
              <table class="table table-row-bordered border pw-dark-bg-table pw-table-border-gray pw-table-border-gray table-rounded align-middle w-max-content min-w-100 gy-2 gx-9 gs-9">
                <thead>
                  <tr class="fw-semibold fs-8 pw-text-neutral-700 pw-bg-neutral-100">
                    <th class="py-3">Süreç Adı</th>
                    <th class="py-3">Akış Adı </th>
                    <th class="py-3">Akış Numarası</th>
                    <th class="py-3">Akış Sahibi</th>
                    <th class="py-3">İşlem Tarihi</th>
                    <th class="py-3">Bitiş Tarihi</th>
                    <th class="py-3">Durum</th>
                    <th class="py-3">Süreç Adı</th>
                    <th class="py-3">Akış Adı </th>
                    <th class="py-3">Akış Numarası</th>
                    <th class="py-3">Akış Sahibi</th>
                    <th class="py-3">İşlem Tarihi</th>
                    <th class="py-3">Bitiş Tarihi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="fw-medium pw-text-neutral-700 fs-9 hover-pw-bg-primary-300">
                    <td class="py-6 d-flex">
                        <div class="d-grid align-items-center float-start">
                          <i class="fa-solid fa-pen-to-square pw-text-danger-400 fs-10"></i>
                          <i class="fa-solid fa-paperclip fs-10"></i>
                        </div>
                        <div class="px-1">
                          <i class="fa-solid fa-id-card pw-text-primary-300"></i>
                          <i class="fa-solid fa-gear px-2 pw-text-success-400"></i>
                        </div>    
                        Customer Flow
                    </td>
                    <td class="py-6">Customer Flow - 2023-02-02</td>
                    <td class="py-6">AB0020000897</td>
                    <td class="py-6">Fevzi Öztürk</td>
                    <td class="py-6">02.02.2023 14:37:20</td>
                    <td class="py-6">08/02/2023 - 17:00</td>
                    <td class="py-6">Bitirildi</td>
                    <td class="py-6">Customer Flow</td>
                    <td class="py-6">Customer Flow - 2023-02-02</td>
                    <td class="py-6">AB0020000897</td>
                    <td class="py-6">Fevzi Öztürk</td>
                    <td class="py-6">02.02.2023 14:37:20</td>
                    <td class="py-6">08/02/2023 - 17:00</td>
                  </tr>
                  <tr class="fw-medium pw-text-neutral-700 fs-9 hover-pw-bg-primary-300">
                    <td class="py-6 d-flex">
                        <div class="d-grid align-items-center float-start">
                          <i class="fa-solid fa-paperclip fs-10"></i>
                        </div>
                        <div class="px-1">
                          <i class="fa-solid fa-id-card pw-text-primary-300"></i>
                          <i class="fa-solid fa-gear px-2 pw-text-success-400"></i>
                        </div>    
                        Customer Flow
                    </td>
                    <td class="py-6">Customer Flow - 2023-02-02</td>
                    <td class="py-6">AB0020000897</td>
                    <td class="py-6">Fevzi Öztürk</td>
                    <td class="py-6">02.02.2023 14:37:20</td>
                    <td class="py-6">08/02/2023 - 17:00</td>
                    <td class="py-6">Bitirildi</td>
                    <td class="py-6">Customer Flow</td>
                    <td class="py-6">Customer Flow - 2023-02-02</td>
                    <td class="py-6">AB0020000897</td>
                    <td class="py-6">Fevzi Öztürk</td>
                    <td class="py-6">02.02.2023 14:37:20</td>
                    <td class="py-6">08/02/2023 - 17:00</td>
                  </tr>
                  <tr class="fw-medium pw-text-neutral-700 fs-9 hover-pw-bg-primary-300">
                    <td class="py-6 d-flex">
                        <div class="d-grid align-items-center float-start">
                          <i class="fa-solid fa-pen-to-square pw-text-danger-400 fs-10"></i>
                          <i class="fa-solid fa-paperclip fs-10"></i>
                        </div>
                        <div class="px-1">
                          <i class="fa-solid fa-id-card pw-text-primary-300"></i>
                          <i class="fa-solid fa-gear px-2 pw-text-success-400"></i>
                        </div>    
                        Customer Flow
                    </td>
                    <td class="py-6">Customer Flow - 2023-02-02</td>
                    <td class="py-6">AB0020000897</td>
                    <td class="py-6">Fevzi Öztürk</td>
                    <td class="py-6">02.02.2023 14:37:20</td>
                    <td class="py-6">08/02/2023 - 17:00</td>
                    <td class="py-6">Bitirildi</td>
                    <td class="py-6">Customer Flow</td>
                    <td class="py-6">Customer Flow - 2023-02-02</td>
                    <td class="py-6">AB0020000897</td>
                    <td class="py-6">Fevzi Öztürk</td>
                    <td class="py-6">02.02.2023 14:37:20</td>
                    <td class="py-6">08/02/2023 - 17:00</td>
                  </tr>
                  <tr class="fw-medium pw-text-neutral-700 fs-9 hover-pw-bg-primary-300">
                    <td class="py-6 d-flex">
                        <div class="d-grid align-items-center float-start">
                          <i class="fa-solid fa-pen-to-square pw-text-danger-400 fs-10"></i>
                          <i class="fa-solid fa-paperclip fs-10"></i>
                        </div>
                        <div class="px-1">
                          <i class="fa-solid fa-id-card pw-text-primary-300"></i>
                          <i class="fa-solid fa-gear px-2 pw-text-success-400"></i>
                        </div>    
                        Customer Flow
                    </td>
                    <td class="py-6">Customer Flow - 2023-02-02</td>
                    <td class="py-6">AB0020000897</td>
                    <td class="py-6">Fevzi Öztürk</td>
                    <td class="py-6">02.02.2023 14:37:20</td>
                    <td class="py-6">08/02/2023 - 17:00</td>
                    <td class="py-6">Bitirildi</td>
                    <td class="py-6">Customer Flow</td>
                    <td class="py-6">Customer Flow - 2023-02-02</td>
                    <td class="py-6">AB0020000897</td>
                    <td class="py-6">Fevzi Öztürk</td>
                    <td class="py-6">02.02.2023 14:37:20</td>
                    <td class="py-6">08/02/2023 - 17:00</td>
                  </tr>
                  <tr class="fw-medium pw-text-neutral-700 fs-9 hover-pw-bg-primary-300">
                    <td class="py-6 d-flex">
                        <div class="d-grid align-items-center float-start">
                          <i class="fa-solid fa-pen-to-square pw-text-danger-400 fs-10"></i>
                          <i class="fa-solid fa-paperclip fs-10"></i>
                        </div>
                        <div class="px-1">
                          <i class="fa-solid fa-id-card pw-text-primary-300"></i>
                          <i class="fa-solid fa-gear px-2 pw-text-success-400"></i>
                        </div>    
                        Customer Flow
                    </td>
                    <td class="py-6">Customer Flow - 2023-02-02</td>
                    <td class="py-6">AB0020000897</td>
                    <td class="py-6">Fevzi Öztürk</td>
                    <td class="py-6">02.02.2023 14:37:20</td>
                    <td class="py-6">08/02/2023 - 17:00</td>
                    <td class="py-6">Bitirildi</td>
                    <td class="py-6">Customer Flow</td>
                    <td class="py-6">Customer Flow - 2023-02-02</td>
                    <td class="py-6">AB0020000897</td>
                    <td class="py-6">Fevzi Öztürk</td>
                    <td class="py-6">02.02.2023 14:37:20</td>
                    <td class="py-6">08/02/2023 - 17:00</td>
                  </tr>
                </tbody>
              </table>
              <!--end::Table-Light-->
              <!--begin::Table-Dark-->
              <table class="table table-row-bordered border pw-dark-bg-table theme-dark-show pw-table-border-gray pw-table-border-gray table-rounded align-middle w-max-content min-w-100 gy-2 gx-9 gs-9">
                <thead>
                  <tr class="fw-semibold fs-8 pw-text-neutral-700 pw-bg-neutral-100 pw-dark-bg-tr">
                    <th class="py-3">Süreç Adı</th>
                    <th class="py-3">Akış Adı </th>
                    <th class="py-3">Akış Numarası</th>
                    <th class="py-3">Akış Sahibi</th>
                    <th class="py-3">İşlem Tarihi</th>
                    <th class="py-3">Bitiş Tarihi</th>
                    <th class="py-3">Durum</th>
                    <th class="py-3">Süreç Adı</th>
                    <th class="py-3">Akış Adı </th>
                    <th class="py-3">Akış Numarası</th>
                    <th class="py-3">Akış Sahibi</th>
                    <th class="py-3">İşlem Tarihi</th>
                    <th class="py-3">Bitiş Tarihi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="fw-medium pw-text-neutral-700 fs-9 hover-pw-bg-primary-300">
                    <td class="py-6 d-flex">
                        <div class="pen-and-clip d-grid align-items-center">
                            <i class="fa-solid fa-pen-to-square"></i>
                            <i class="fa-solid fa-paperclip"></i>
                        </div>
                        <div class="card-and-gear">
                            <i class="fa-solid fa-id-card" style="color: #b2d5ff;"></i>
                            <i class="fa-solid fa-gear px-2" style="color: #6CE3AA;"></i>
                        </div>    
                        Customer Flow
                    </td>
                    <td class="py-6">Customer Flow - 2023-02-02</td>
                    <td class="py-6">AB0020000897</td>
                    <td class="py-6">Fevzi Öztürk</td>
                    <td class="py-6">02.02.2023 14:37:20</td>
                    <td class="py-6">08/02/2023 - 17:00</td>
                    <td class="py-6">Bitirildi</td>
                    <td class="py-6">Customer Flow</td>
                    <td class="py-6">Customer Flow - 2023-02-02</td>
                    <td class="py-6">AB0020000897</td>
                    <td class="py-6">Fevzi Öztürk</td>
                    <td class="py-6">02.02.2023 14:37:20</td>
                    <td class="py-6">08/02/2023 - 17:00</td>
                  </tr>
                  <tr class="fw-medium pw-text-neutral-700 fs-9 hover-pw-bg-primary-300">
                    <td class="py-6 d-flex">
                        <div class="pen-and-clip d-grid align-items-center">
                            <i class="fa-solid fa-paperclip"></i>
                        </div>
                        <div class="card-and-gear">
                            <i class="fa-solid fa-id-card" style="color: #b2d5ff;"></i>
                            <i class="fa-solid fa-gear px-2" style="color: #6CE3AA;"></i>
                        </div>    
                        Customer Flow
                    </td>
                    <td class="py-6">Customer Flow - 2023-02-02</td>
                    <td class="py-6">AB0020000897</td>
                    <td class="py-6">Fevzi Öztürk</td>
                    <td class="py-6">02.02.2023 14:37:20</td>
                    <td class="py-6">08/02/2023 - 17:00</td>
                    <td class="py-6">Bitirildi</td>
                    <td class="py-6">Customer Flow</td>
                    <td class="py-6">Customer Flow - 2023-02-02</td>
                    <td class="py-6">AB0020000897</td>
                    <td class="py-6">Fevzi Öztürk</td>
                    <td class="py-6">02.02.2023 14:37:20</td>
                    <td class="py-6">08/02/2023 - 17:00</td>
                  </tr>
                  <tr class="fw-medium pw-text-neutral-700 fs-9 hover-pw-bg-primary-300">
                    <td class="py-6 d-flex">
                        <div class="pen-and-clip d-grid align-items-center">
                            <i class="fa-solid fa-pen-to-square"></i>
                            <i class="fa-solid fa-paperclip"></i>
                        </div>
                        <div class="card-and-gear">
                            <i class="fa-solid fa-id-card" style="color: #b2d5ff;"></i>
                            <i class="fa-solid fa-gear px-2" style="color: #6CE3AA;"></i>
                        </div>    
                        Customer Flow
                    </td>
                    <td class="py-6">Customer Flow - 2023-02-02</td>
                    <td class="py-6">AB0020000897</td>
                    <td class="py-6">Fevzi Öztürk</td>
                    <td class="py-6">02.02.2023 14:37:20</td>
                    <td class="py-6">08/02/2023 - 17:00</td>
                    <td class="py-6">Bitirildi</td>
                    <td class="py-6">Customer Flow</td>
                    <td class="py-6">Customer Flow - 2023-02-02</td>
                    <td class="py-6">AB0020000897</td>
                    <td class="py-6">Fevzi Öztürk</td>
                    <td class="py-6">02.02.2023 14:37:20</td>
                    <td class="py-6">08/02/2023 - 17:00</td>
                  </tr>
                  <tr class="fw-medium pw-text-neutral-700 fs-9 hover-pw-bg-primary-300">
                    <td class="py-6 d-flex">
                        <div class="pen-and-clip d-grid align-items-center">
                            <i class="fa-solid fa-pen-to-square"></i>
                            <i class="fa-solid fa-paperclip"></i>
                        </div>
                        <div class="card-and-gear">
                            <i class="fa-solid fa-id-card" style="color: #b2d5ff;"></i>
                            <i class="fa-solid fa-gear px-2" style="color: #6CE3AA;"></i>
                        </div>    
                        Customer Flow
                    </td>
                    <td class="py-6">Customer Flow - 2023-02-02</td>
                    <td class="py-6">AB0020000897</td>
                    <td class="py-6">Fevzi Öztürk</td>
                    <td class="py-6">02.02.2023 14:37:20</td>
                    <td class="py-6">08/02/2023 - 17:00</td>
                    <td class="py-6">Bitirildi</td>
                    <td class="py-6">Customer Flow</td>
                    <td class="py-6">Customer Flow - 2023-02-02</td>
                    <td class="py-6">AB0020000897</td>
                    <td class="py-6">Fevzi Öztürk</td>
                    <td class="py-6">02.02.2023 14:37:20</td>
                    <td class="py-6">08/02/2023 - 17:00</td>
                  </tr>
                  <tr class="fw-medium pw-text-neutral-700 fs-9 hover-pw-bg-primary-300">
                    <td class="py-6 d-flex">
                        <div class="pen-and-clip d-grid align-items-center">
                            <i class="fa-solid fa-pen-to-square"></i>
                            <i class="fa-solid fa-paperclip"></i>
                        </div>
                        <div class="card-and-gear">
                            <i class="fa-solid fa-id-card" style="color: #b2d5ff;"></i>
                            <i class="fa-solid fa-gear px-2" style="color: #6CE3AA;"></i>
                        </div>    
                        Customer Flow
                    </td>
                    <td class="py-6">Customer Flow - 2023-02-02</td>
                    <td class="py-6">AB0020000897</td>
                    <td class="py-6">Fevzi Öztürk</td>
                    <td class="py-6">02.02.2023 14:37:20</td>
                    <td class="py-6">08/02/2023 - 17:00</td>
                    <td class="py-6">Bitirildi</td>
                    <td class="py-6">Customer Flow</td>
                    <td class="py-6">Customer Flow - 2023-02-02</td>
                    <td class="py-6">AB0020000897</td>
                    <td class="py-6">Fevzi Öztürk</td>
                    <td class="py-6">02.02.2023 14:37:20</td>
                    <td class="py-6">08/02/2023 - 17:00</td>
                  </tr>
                </tbody>
              </table>
              <!--end::Table-Dark-->
            </div>
            <!--end::Akış istatistikleri tablosu-->

            <!--begin::Table footer-->
            <div class="d-flex flex-column-reverse flex-sm-row align-items-center align-items-sm-end justify-content-center justify-content-sm-between gap-8 gap-sm-4 my-5">
              <!--begin::Information-->
              <div class="d-flex flex-column flex-sm-row flex-wrap align-items-center gap-2 gap-sm-6 gap-md-9 fw-medium text-primary fs-8 justify-content-center justify-content-sm-start w-100">
                <span>Toplam: 6 Adet</span>
              </div>
              <!--end::Information-->
              <!--begin::Pagination-->
              <ul class="pagination flex-nowrap flex-shrink-0">
                <!--begin::Pagination item previous-->
                <li class="page-item previous disabled"><a href="#" class="page-link pw-min-w-32px h-32px fs-8"><i class="previous"></i></a></li>
                <!--end::Pagination item previous-->

                <!--begin::Pagination-item-->
                <li class="page-item active">
                  <a href="/sistem-raporlari/akis-istatistikleri/#" class="page-link pw-min-w-32px h-32px fs-8">1</a>
                </li>
                <!--end::Pagination item-->

                <!--begin::Pagination item-->
                <li class="page-item">
                  <a href="/sistem-raporlari/akis-istatistikleri/#" class="page-link pw-min-w-32px h-32px fs-8">2</a>
                </li>
                <!--end::Pagination item-->

                <!--begin::Pagination item-->
                <li class="page-item ">
                  <a href="/sistem-raporlari/akis-istatistikleri/#" class="page-link pw-min-w-32px h-32px fs-8">3</a>
                </li>
                <!--end::Pagination item-->

                <!--begin::Pagination item-->
                <li class="page-item ">
                  <a href="/sistem-raporlari/akis-istatistikleri/#" class="page-link pw-min-w-32px h-32px fs-8">4</a>
                </li>
                <!--end::Pagination item-->

                <!--begin::Pagination item-->
                <li class="page-item ">
                  <a href="/sistem-raporlari/akis-istatistikleri/#" class="page-link pw-min-w-32px h-32px fs-8">5</a>
                </li>
                <!--end::Pagination item-->

                <!--begin::Pagination item-->
                <li class="page-item next">
                  <a href="/sistem-raporlari/akis-istatistikleri/#" class="page-link pw-min-w-32px h-32px fs-8"><i class="next"></i></a>
                </li>
                <!--end::Pagination item-->
              </ul>
              <!--end::Pagination-->
            </div>
            <!--end::Table footer-->
          </div>
          <!--end::Top content-->

          <!--begin::Middle divider-->
          <div class="border my-10 text-center position-relative">
            <div class="btn btn-icon btn-sm btn-color-primary body-bg h-30px w-30px translate-middle position-absolute" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="#bottomContent" data-kt-toggle-name="bottomContent-toggle">
              <i class="fa-sharp fa-solid fa-chevrons-up rotate-180"></i>
            </div>
          </div>
          <!--end::Middle divider-->

          <!--begin::Bottom content-->
          <div class="rounded border p-8" id="bottomContent">
            <!--begin::Table tabs wrapper-->
            <div class="table-reponsive overflow-x-auto">
              <!--begin::Table tabs-->
              <div class="nav nav-tabs nav-line-tabs fs-6" role="tablist">
                <!--begin::Tab item-->
                <li class="nav-item" role="presentation">
                    <a class="nav-link mx-0 py-3 px-5 fs-base rounded-0 fw-medium active" data-bs-toggle="tab" href="#pw_tab_pane_tarihce" aria-selected="true" role="tab">Tarihçe</a>
                </li>
                <!--end::Tab item-->

                <!--begin::Tab item-->
                <li class="nav-item" role="presentation">
                    <a class="nav-link py-3 px-10 mx-0 fs-base fw-medium rounded-0 pw-text-neutral-500" data-bs-toggle="tab" href="#pw_tab_pane_tum_kullanicilar" aria-selected="false" role="tab" tabindex="-1">Tüm Kullanıcılar</a>
                </li>
                <!--end::Tab item-->

                <!--begin::Tab item-->
                <li class="nav-item" role="presentation">
                    <a class="nav-link py-3 px-10 mx-0 fs-base fw-medium rounded-0 pw-text-neutral-500" data-bs-toggle="tab" href="#pw_tab_pane_diyagram" aria-selected="false" role="tab" tabindex="-1">Diyagram</a>
                </li>
                <!--end::Tab item-->

                <!--begin::Tab item-->
                <li class="nav-item" role="presentation">
                    <a class="nav-link py-3 px-10 mx-0 fs-base fw-medium rounded-0 pw-text-neutral-500" data-bs-toggle="tab" href="#pw_tab_pane_elektronik_form" aria-selected="false" role="tab" tabindex="-1">Elektronik Form</a>
                </li>
                <!--end::Tab item-->

                <!--begin::Tab item-->
                <li class="nav-item" role="presentation">
                    <a class="nav-link py-3 px-10 mx-0 fs-base fw-medium rounded-0 pw-text-neutral-500" data-bs-toggle="tab" href="#pw_tab_pane_eklentiler" aria-selected="false" role="tab" tabindex="-1">Eklentiler</a>
                </li>
                <!--end::Tab item-->

                <!--begin::Tab item-->
                <li class="nav-item position-relative" role="presentation">
                  <a class="nav-link py-3 px-10 mx-0 fs-base fw-medium rounded-0 pw-text-neutral-500" data-bs-toggle="tab" href="#pw_tab_pane_notlar" aria-selected="false" role="tab" tabindex="-1">Notlar </a>
                  <span class="position-absolute top-25 start-75 translate-middle fs-9 w-12px h-12px mx-1 badge badge-circle pw-bg-primary-200 pw-text-primary-400 fw-boldefa-rotate-180 p-3">1</span>
                </li>
                <!--end::Tab item-->
              </div>
              <!--end::Table tabs-->
            </div>
            <!--end::Table tabs wrapper-->

            <!--begin::Table tab contents-->
            <div class="tab-content pw-dashboard-tab-content" id="tableTabContents">
                <!--begin::Tarihçe content-->
                <div class="tab-pane py-10 fade active show" id="pw_tab_pane_tarihce" role="tabpanel">
                  <!--begin::Tarihçe table-->
                  <div class="table-responsive overflow-x-auto rounded">
                    <!--begin::Table tabs wrapper-->
                    <div class="table-reponsive overflow-x-auto">
                      <!--begin::Table tabs-->
                      <div class="nav fs-6" role="tablist">
                        <!--begin::Tab item-->
                        <li class="nav-item" role="presentation">
                            <a class="mx-0 py-3 px-2 fs-base rounded-0 fw-medium active" data-bs-toggle="tab" href="#pw_tab_pane_rotate" aria-selected="true" role="tab">
                                <i class="fa-solid fa-rotate pw-text-primary-500 fs-7 text-primary"></i>
                            </a>
                        </li>
                        <!--end::Tab item-->

                        <!--begin::Tab item-->
                        <li class="nav-item" role="presentation">
                            <a class="py-3 px-2 mx-0 fs-base fw-medium rounded-0 pw-text-neutral-500" data-bs-toggle="tab" href="#pw_tab_circle" aria-selected="false" role="tab" tabindex="-1">
                                <i class="fa-solid fa-circle pw-text-warning-400 fs-7 text-primary"></i>
                            </a>
                        </li>
                        <!--end::Tab item-->

                        <!--begin::Tab item-->
                        <li class="nav-item" role="presentation">
                            <a class="py-3 px-2 mx-0 fs-base fw-medium rounded-0 pw-text-neutral-500" data-bs-toggle="tab" href="#pw_tab_shuffle" aria-selected="false" role="tab" tabindex="-1">
                            <i class="fa-solid fa-shuffle pw-text-primary-500 fs-7 text-primary"></i>
                            </a>
                        </li>
                        <!--end::Tab item-->

                        <!--begin::Tab item-->
                        <!-- <li class="nav-item" role="presentation">
                            <a class="py-3 px-2 mx-0 fs-base fw-medium rounded-0 pw-text-neutral-500" data-bs-toggle="tab" href="#pw_tab_exclamation" aria-selected="false" role="tab" tabindex="-1">
                            <i class="fa-solid fa-circle-exclamation pw-text-danger-500 fs-7 text-primary"></i>
                            </a>
                        </li> -->
                        <!--end::Tab item-->

                        <!--begin::Tab item-->
                        <li class="nav-item" role="presentation">
                            <a class="py-3 px-2 mx-0 fs-base fw-medium rounded-0 pw-text-neutral-500" data-bs-toggle="tab" href="#pw_tab_arrow_right" aria-selected="false" role="tab" tabindex="-1">
                                <i class="fa-solid fa-arrow-right-from-line pw-text-primary-500 fs-7 text-primary"></i>
                            </a>
                        </li>
                          <!--end::Tab item-->
                      </div>
                      <!--end::Table tabs-->
                    </div>
                    <!--end::Table tabs wrapper-->

                    <!--begin::Table tab contents-->
                    <div class="tab-content pw-dashboard-tab-content mt-5 mb-7" id="tableTabContents">
                        <div class="tab-pane fade active show" id="pw_tab_pane_rotate" role="tabpanel">
                            <div class="row">
                                <div class="col col-md-3">
                                    <input type="text" class="form-control pw-bg-neutral-100 py-3 px-4 text-center fs-7 fw-bold pw-text-neutral-600" name="pw_oncelik" required="required" value="Öncelik" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col col-md-3 mt-3">
                                    <i class="fa-solid fa-circle pw-text-danger-400 text-left float-start ms-3"></i>
                                    <div class="text-center">76</div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pw_tab_circle" role="tabpanel">
                          <div class="d-flex align-items-center">
                            <label for="yonlendirme" class="pw-text-neutral-600 fs-7 fw-bold me-5">Yönlendirme</label>
                            <div class="w-375px me-5">
                              <select class="form-select form-select-solid fs-8 py-4 px-4" data-control="select2" py data-placeholder="" name="">
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                              </select>
                            </div>
                            <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                              <input class="form-check-input" type="checkbox" value="" id="" checked="checked">
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="pw_tab_shuffle" role="tabpanel">
                          <div class="d-flex align-items-center">
                            <label for="yonlendirme" class="pw-text-neutral-600 fs-7 fw-bold me-5">Ata</label>
                            <div class="w-375px me-5">
                              <select class="form-select form-select-solid fs-8 py-4 px-4" data-control="select2" py data-placeholder="" name="">
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                              </select>
                            </div>
                            <a href="javascript:void(0);" class="float-start me-3"><i class="fa-solid fa-trash fs-7 text-primary"></i></a>
                            <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                              <input class="form-check-input" type="checkbox" value="" id="" checked="checked">
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="pw_tab_arrow_right" role="tabpanel">
                          <div class="w-200px">
                            <input type="text" class="form-control pw-bg-neutral-100 py-3 text-center fs-8 fw-semibold pw-text-neutral-600" name="pw_oncelik" required="required" value="Lorem Ipsum" />
                          </div>
                        </div>
                    </div>

                    <!--begin::Table-Light-->
                    <table class="table table-row-bordered border pw-dark-bg-table pw-table-border-gray pw-table-border-gray table-rounded align-middle w-max-content min-w-100 gy-2 gx-9 gs-9">
                      <thead>
                        <tr class="fw-semibold fs-8 pw-text-neutral-700 pw-bg-neutral-100">
                          <th class="py-3">Adım Numarası</th>
                          <th class="py-3">Aktivite Numarası</th>
                          <th class="py-3">Kullanıcı</th>
                          <th class="py-3">Aktivite Adı</th>
                          <th class="py-3">Durumu</th>
                          <th class="py-3">Adım Numarası</th>
                          <th class="py-3">Aktivite Numarası</th>
                        </tr>
                      </thead>
                      <tbody>
                          <tr class="fw-medium pw-text-neutral-700 fs-9 hover-pw-bg-primary-300">
                              <td class="py-6 d-flex"><i class="fa-solid fa-gear px-2"></i>AB0020000897</td>
                              <td class="py-6">Customer Flow - 2023-02-02</td>
                              <td class="py-6">AB0020000897</td>
                              <td class="py-6">Fevzi Öztürk</td>
                              <td class="py-6">Bitirildi</td>
                              <td class="py-6">AC0020000003EA</td>
                              <td class="py-6">Customer Flow - 2023-02-02</td>
                          </tr>
                          <tr class="fw-medium pw-text-neutral-700 fs-9 hover-pw-bg-primary-300">
                              <td class="py-6 d-flex"><i class="fa-solid fa-gear px-2"></i>AB0020000897</td>
                              <td class="py-6">Customer Flow - 2023-02-02</td>
                              <td class="py-6">AB0020000897</td>
                              <td class="py-6">Fevzi Öztürk</td>
                              <td class="py-6">Bitirildi</td>
                              <td class="py-6">AC0020000003EA</td>
                              <td class="py-6">Customer Flow - 2023-02-02</td>
                          </tr>
                          <tr class="fw-medium pw-text-neutral-700 fs-9 hover-pw-bg-primary-300 pw-bg-success-300">
                              <td class="py-6 d-flex"><i class="fa-solid fa-gear px-2"></i>AB0020000897</td>
                              <td class="py-6">Customer Flow - 2023-02-02</td>
                              <td class="py-6">AB0020000897</td>
                              <td class="py-6">Fevzi Öztürk</td>
                              <td class="py-6">Bitirildi</td>
                              <td class="py-6">AC0020000003EA</td>
                              <td class="py-6">Customer Flow - 2023-02-02</td>
                          </tr>
                      </tbody>
                    </table>
                    <!--end::Table-Light-->
                  </div>
                  <!--end::Tarihçe table-->
                </div>

                <!--begin::Tum Kullanicilar content-->
                <div class="tab-pane fade py-10" id="pw_tab_pane_tum_kullanicilar" role="tabpanel">
                  <!--begin::Timeline-->
                  <div class="row">
                    <div class="d-flex align-items-center">
                      <div class="float-start fs-7 pw-text-gray-900 fw-bold">
                        27.02.2023 10:46
                      </div>
                      <div class="float-start h-100 d-flex align-items-center position-relative mx-10">
                        <div class="position-absolute pw-bg-gray-900 w-1px ms-5 h-100"></div>
                        <div class="timeline-icon symbol symbol-circle symbol-40px">
                          <div class="symbol-label bg-white">
                            <i class="fa-regular fa-circle text-primary fs-3"></i>
                          </div>
                        </div>
                      </div>
                      <div class="p-3">
                        <!--begin::Card-->
                        <div class="card w-275px h-225px pw-bg-neutral-100 time-line-card">
                          <!--begin::Card body-->
                          <div class="card-body d-flex flex-center flex-column p-3">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-65px symbol-circle mb-3">
                              <img src="assets/media//avatars/795aef3699650569594c1f14a35a60f7.jpg" alt="image" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Name-->
                            <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold mb-0">Eyüp Tarık Doğan</a>
                            <!--end::Name-->
                            <!--begin::Position-->
                            <div class="fw-semibold text-gray-500 mb-3">Test Uzman Yardımcısı</div>
                            <!--end::Position-->

                            <!--begin::Position-->
                            <div class="text-gray-500 text-center">
                              <p class="my-0 py-0">İptal Edildi</p>
                              <p class="my-0 py-1"><span class="fw-bold">Bitiş:</span> 14.02.2023 09:37:42</p>
                            </div>
                            <!--end::Position-->
                          </div>
                          <!--end::Card body-->
                        </div>
                        <!--end::Card-->
                      </div>
                    </div>

                    <div class="d-flex align-items-center">
                      <div class="float-start fs-7 pw-text-gray-900 fw-bold">
                        27.02.2023 10:46
                      </div>
                      <div class="float-start h-100 d-flex align-items-center position-relative mx-10">
                        <div class="position-absolute pw-bg-gray-900 w-1px ms-5 h-100"></div>
                        <div class="timeline-icon symbol symbol-circle symbol-40px">
                          <div class="symbol-label bg-white">
                            <i class="fa-regular fa-circle text-primary fs-3"></i>
                          </div>
                        </div>
                      </div>
                      <div class="p-3">
                        <!--begin::Card-->
                        <div class="card w-275px h-225px pw-bg-neutral-100 time-line-card">
                          <!--begin::Card body-->
                          <div class="card-body d-flex flex-center flex-column p-3">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-65px symbol-circle mb-3">
                              <img src="assets/media//avatars/795aef3699650569594c1f14a35a60f7.jpg" alt="image" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Name-->
                            <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold mb-0">Eyüp Tarık Doğan</a>
                            <!--end::Name-->
                            <!--begin::Position-->
                            <div class="fw-semibold text-gray-500 mb-3">Test Uzman Yardımcısı</div>
                            <!--end::Position-->

                            <!--begin::Position-->
                            <div class="text-gray-500 text-center">
                              <p class="my-0 py-0">İptal Edildi</p>
                              <p class="my-0 py-1"><span class="fw-bold">Bitiş:</span> 14.02.2023 09:37:42</p>
                            </div>
                            <!--end::Position-->
                          </div>
                          <!--end::Card body-->
                        </div>
                        <!--end::Card-->
                      </div>
                    </div>
                  </div>
                  <!--end::Timeline-->
                </div>
              <!--end::Tum Kullanicilar content-->

              <!--begin::Diyagram content-->
              <div class="tab-pane fade" id="pw_tab_pane_diyagram" role="tabpanel">
                Diyagram
              </div>
              <!--end::Diyagram content-->

              <!--begin::Elektronik Form content-->
              <div class="tab-pane fade" id="pw_tab_pane_elektronik_form" role="tabpanel">
                Elektronik Form
              </div>
              <!--end::Elektronik Form content-->

              <!--begin::Eklentiler content-->
              <div class="tab-pane fade" id="pw_tab_pane_eklentiler" role="tabpanel">
                Eklentiler
              </div>
              <!--end::Eklentiler content-->

              <!--begin::Notlar content-->
              <div class="tab-pane py-10 fade" id="pw_tab_pane_notlar" role="tabpanel">
                <!--begin::Timeline-->
                <div class="row">
                  <div class="d-flex align-items-center">
                    <div class="float-start fs-7 pw-text-gray-900 fw-bold">
                      27.02.2023 10:46
                    </div>
                    <div class="float-start h-100 d-flex align-items-center position-relative mx-10">
                      <div class="position-absolute pw-bg-gray-900 w-1px ms-5 h-100"></div>
                      <div class="timeline-icon symbol symbol-circle symbol-40px">
                        <div class="symbol-label bg-white">
                          <i class="fa-regular fa-circle text-primary fs-3"></i>
                        </div>
                      </div>
                    </div>
                    <div class="p-3">
                      <!--begin::Card-->
                      <div class="card w-275px h-225px pw-bg-neutral-100 time-line-card">
                        <!--begin::Card body-->
                        <div class="card-body d-flex flex-center flex-column p-3">
                          <!--begin::Avatar-->
                          <div class="symbol symbol-65px symbol-circle mb-3">
                            <img src="assets/media//avatars/795aef3699650569594c1f14a35a60f7.jpg" alt="image" />
                          </div>
                          <!--end::Avatar-->
                          <!--begin::Name-->
                          <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold mb-0">Eyüp Tarık Doğan</a>
                          <!--end::Name-->
                          <!--begin::Position-->
                          <div class="fw-semibold text-gray-500 mb-3">Test Uzman Yardımcısı</div>
                          <!--end::Position-->

                          <!--begin::Position-->
                          <div class="text-gray-500 text-center">
                            <p class="my-0 py-0">İptal Edildi</p>
                            <p class="my-0 py-1"><span class="fw-bold">Bitiş:</span> 14.02.2023 09:37:42</p>
                          </div>
                          <!--end::Position-->
                        </div>
                        <!--end::Card body-->
                      </div>
                      <!--end::Card-->
                    </div>
                  </div>
                </div>
                <!--end::Timeline-->
              </div>
              <!--end::Notlar content-->
            </div>
            <!--end::Table tab contents-->
          </div>
          <!--end::Bottom content-->
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