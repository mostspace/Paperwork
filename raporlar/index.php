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
              <a href="/raporlar/" class="text-muted text-hover-primary">Raporlar</a>
            </li>
            <!--end::Item-->
          </ul>
          <!--end::Breadcrumb-->
          <!--begin::Title-->
          <h1 class="page-heading d-flex text-dark fw-bold fs-4 flex-column justify-content-center mb-5">
            Raporlar
          </h1>
          <!--end::Title-->
        </div>
        <!--end::Page title-->

      </div>
      <!--end::Toolbar container-->
    </div>
    <!--end::Toolbar-->

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
      <!--begin::Table-->
      <div class="table-responsive overflow-x-auto rounded">
        <table class="table table-row-bordered border pw-table-border-gray table-rounded align-middle w-max-content min-w-100 gy-2 gx-9 gs-9">
          <thead>
            <tr class="fw-semibold fs-8 pw-text-neutral-700 pw-bg-neutral-100">
              <th class="py-3">Liste Adı</th>
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
                    <i class="fa-solid fa-badge-sheriff fs-7 pw-text-brand"></i>
                  </div>
                  <div>ADT İşe Alım</div>
                </div>
              </td>
              <td>-</td>
              <td align="right">
                <!--end::Menu wrapper-->
                <a href="/raporlar#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-eye fs-7 text-primary"></i>
                </a>
                <a href="/raporlar#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-pen-to-square fs-7 text-primary"></i>
                </a>
                <a href="/raporlar#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
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
                    <i class="fa-solid fa-badge-sheriff fs-7 pw-text-brand"></i>
                  </div>
                  <div>ADT İzin Talep</div>
                </div>
              </td>
              <td>Lorem ipsum dolor sit ame...</td>
              <td align="right">
                <!--end::Menu wrapper-->
                <a href="/raporlar#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-eye fs-7 text-primary"></i>
                </a>
                <a href="/raporlar#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-pen-to-square fs-7 text-primary"></i>
                </a>
                <a href="/raporlar#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
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
                    <i class="fa-solid fa-badge-sheriff fs-7 pw-text-brand"></i>
                  </div>
                  <div>Akçelik POC</div>
                </div>
              </td>
              <td>Lorem ipsum dolor sit ame...</td>
              <td align="right">
                <!--end::Menu wrapper-->
                <a href="/raporlar#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-eye fs-7 text-primary"></i>
                </a>
                <a href="/raporlar#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-pen-to-square fs-7 text-primary"></i>
                </a>
                <a href="/raporlar#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
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
                    <i class="fa-solid fa-badge-sheriff fs-7 pw-text-brand"></i>
                  </div>
                  <div>Aksiyon Atama Süreci</div>
                </div>
              </td>
              <td>-</td>
              <td align="right">
                <!--end::Menu wrapper-->
                <a href="/raporlar#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-eye fs-7 text-primary"></i>
                </a>
                <a href="/raporlar#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-pen-to-square fs-7 text-primary"></i>
                </a>
                <a href="/raporlar#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
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
                    <i class="fa-solid fa-badge-sheriff fs-7 pw-text-brand"></i>
                  </div>
                  <div>Aksiyon Yönetimi Süreci</div>
                </div>
              </td>
              <td>-</td>
              <td align="right">
                <!--end::Menu wrapper-->
                <a href="/raporlar#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-eye fs-7 text-primary"></i>
                </a>
                <a href="/raporlar#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-pen-to-square fs-7 text-primary"></i>
                </a>
                <a href="/raporlar#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
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
                    <i class="fa-solid fa-badge-sheriff fs-7 pw-text-brand"></i>
                  </div>
                  <div>Alıcı Cari Hesap Açma Süreci</div>
                </div>
              </td>
              <td>-</td>
              <td align="right">
                <!--end::Menu wrapper-->
                <a href="/raporlar#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-eye fs-7 text-primary"></i>
                </a>
                <a href="/raporlar#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-pen-to-square fs-7 text-primary"></i>
                </a>
                <a href="/raporlar#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
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
                    <i class="fa-solid fa-badge-sheriff fs-7 pw-text-brand"></i>
                  </div>
                  <div>Araç Talep BD</div>
                </div>
              </td>
              <td>-</td>
              <td align="right">
                <!--end::Menu wrapper-->
                <a href="/raporlar#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-eye fs-7 text-primary"></i>
                </a>
                <a href="/raporlar#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-pen-to-square fs-7 text-primary"></i>
                </a>
                <a href="/raporlar#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
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
                    <i class="fa-solid fa-badge-sheriff fs-7 pw-text-brand"></i>
                  </div>
                  <div>Araç Talep KU</div>
                </div>
              </td>
              <td>Lorem ipsum dolor sit ame...</td>
              <td align="right">
                <!--end::Menu wrapper-->
                <a href="/raporlar#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-eye fs-7 text-primary"></i>
                </a>
                <a href="/raporlar#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-pen-to-square fs-7 text-primary"></i>
                </a>
                <a href="/raporlar#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
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
                    <i class="fa-solid fa-badge-sheriff fs-7 pw-text-brand"></i>
                  </div>
                  <div>Araç Talep Süreci</div>
                </div>
              </td>
              <td>-</td>
              <td align="right">
                <!--end::Menu wrapper-->
                <a href="/raporlar#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-eye fs-7 text-primary"></i>
                </a>
                <a href="/raporlar#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-pen-to-square fs-7 text-primary"></i>
                </a>
                <a href="/raporlar#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
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
                    <i class="fa-solid fa-badge-sheriff fs-7 pw-text-brand"></i>
                  </div>
                  <div>Araştırma Projesi</div>
                </div>
              </td>
              <td>Lorem ipsum dolor sit ame...</td>
              <td align="right">
                <!--end::Menu wrapper-->
                <a href="/raporlar#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-eye fs-7 text-primary"></i>
                </a>
                <a href="/raporlar#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-pen-to-square fs-7 text-primary"></i>
                </a>
                <a href="/raporlar#" class="btn btn-icon pw-btn-bg-neutral-100 btn-text-primary pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                  <i class="fa-solid fa-trash fs-7 text-primary"></i>
                </a>
              </td>
            </tr>
            <!--end::Row-->
          </tbody>
        </table>


      </div>
      <!--end::Table-->
    </div>
    <!--end::Content -->
    <!--end::Content wrapper-->
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/footer.php'; ?>
  </div>
  <!--end::Main-->

</div>
<!--end::Wrapper -->

<!--begin::Drawers-->
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/history-drawer.php'; ?>
<!--end::Drawers-->


<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/foot.php'; ?>