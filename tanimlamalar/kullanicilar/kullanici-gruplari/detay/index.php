<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/header.php'; ?>

<!--begin::Wrapper-->
<div class="app-wrapper flex-column flex-row-fluid p-6" id="kt_app_wrapper">

  <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/sidebar.php'; ?>
  <!--begin::Main-->
  <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <!--begin::Content wrapper-->
    <form>
      <div class="row">
        <div class="col col-md-8">
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
                    <a href="/tanimlamalar/" class="text-muted text-hover-primary">Tanımlamalar</a>
                  </li>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <li class="breadcrumb-item">
                    <span class="text-muted">/</span>
                  </li>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <li class="breadcrumb-item active">Kullanıcı Grupları</li>
                  <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-dark fw-bold fs-4 flex-column justify-content-center my-0">
                  Kullanıcı Grupları
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
            <!--begin::Form-->
            <!--begin::Table-->
            <div class="table-responsive overflow-x-auto">
              <table class="table w-min-content w-100">
                <tbody>
                  <!--begin::Row-->
                  <tr>
                    <td>
                      <label class="form-label fs-base" for="grup_adi">Grup Adı</label>
                    </td>
                    <td>
                      <input class="form-control form-control-solid fs-8 py-3 px-4" value="Bakioğlu Holding" id="grup_adi" name="grup_adi" required="required" />
                    </td>
                  </tr>
                  <!--end::Row-->

                  <!--begin::Row-->
                  <tr>
                    <td>
                      <div class="form-label fs-base">Açıklama</div>
                    </td>
                    <td>
                      <div id="editor"></div>
                    </td>
                  </tr>
                  <!--end::Row-->
                </tbody>
              </table>
            </div>
            <!--end::Table-->
            <!--begin::Form footer-->
            <div class="d-flex align-items-center justify-content-end my-6 gap-3">
              <button type="reset" class="btn btn-active-light fs-8 py-3 px-6">
                Vazgeç
              </button>
              <button type="submit" class="btn btn-primary fs-8 py-3 px-6">
                Kaydet
              </button>
            </div>
            <!--end::Form footer-->
    </form>
    <!--end::Form-->
  </div>
  <!--end::Content -->

  <div class="row g-4">
    <!--begin::Col-->
    <div class="col-12 col-md-6">
      <div class="d-flex flex-column gap-5 p-8 border border-pw-stroke rounded">
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
        <!--begin::Yetki Setleri Detay tablosu-->
        <div class="table-responsive overflow-x-auto rounded">
          <table class="table table-row-bordered border pw-table-border-gray table-rounded align-middle w-max-content min-w-100 gy-2 gx-9 gs-9">
            <thead>
              <tr class="fw-semibold fs-8 pw-text-neutral-700 pw-bg-neutral-100">
                <th class="py-3">
                  <div class="d-flex align-items-center justify-content-between gap-3 flex-nowrap">
                    <span>Kullanıcı Adı</span>
                    <span><i class="fa-solid fa-filter"></i></span>
                  </div>
                </th>
                <th class="py-3">
                  <div class="d-flex align-items-center justify-content-between gap-3 flex-nowrap">
                    <span>Ünvanı</span>
                    <span><i class="fa-solid fa-filter"></i></span>
                  </div>
                </th>
                <th class="py-3">
                  <div class="d-flex align-items-center justify-content-between gap-3 flex-nowrap">
                    <span>Pozisyonu</span>
                    <span><i class="fa-solid fa-filter"></i></span>
                  </div>
                </th>
              </tr>
            </thead>
            <tbody>
              <!--begin::Row-->
              <tr class="fw-medium pw-text-neutral-700 fs-8">
                <td>
                  <div class="d-flex align-items-center flex-nowrap gap-2">
                    <div class="w-35px h-35px  d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                      <i class="fa-solid fa-user pw-text-primary-500"></i>
                    </div>
                    <div>
                      Bakioğlu Holding
                    </div>
                  </div>
                </td>
                <td>Sorumlu</td>
                <td>Formen</td>
              </tr>
              <!--end::Row-->

              <!--begin::Row-->
              <tr class="fw-medium pw-text-neutral-700 fs-8">
                <td>
                  <div class="d-flex align-items-center flex-nowrap gap-2">
                    <div class="w-35px h-35px  d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                      <i class="fa-solid fa-user pw-text-primary-500"></i>
                    </div>
                    <div>
                      Bakioğlu Holding
                    </div>
                  </div>
                </td>
                <td>Sorumlu</td>
                <td>Formen</td>
              </tr>
              <!--end::Row-->

              <!--begin::Row-->
              <tr class="fw-medium pw-text-neutral-700 fs-8">
                <td>
                  <div class="d-flex align-items-center flex-nowrap gap-2">
                    <div class="w-35px h-35px  d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                      <i class="fa-solid fa-user pw-text-primary-500"></i>
                    </div>
                    <div>
                      Bakioğlu Holding
                    </div>
                  </div>
                </td>
                <td>Sorumlu</td>
                <td>Formen</td>
              </tr>
              <!--end::Row-->

              <!--begin::Row-->
              <tr class="fw-medium pw-text-neutral-700 fs-8">
                <td>
                  <div class="d-flex align-items-center flex-nowrap gap-2">
                    <div class="w-35px h-35px  d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                      <i class="fa-solid fa-user pw-text-primary-500"></i>
                    </div>
                    <div>
                      Bakioğlu Holding
                    </div>
                  </div>
                </td>
                <td>Sorumlu</td>
                <td>Formen</td>
              </tr>
              <!--end::Row-->

              <!--begin::Row-->
              <tr class="fw-medium pw-text-neutral-700 fs-8">
                <td>
                  <div class="d-flex align-items-center flex-nowrap gap-2">
                    <div class="w-35px h-35px  d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                      <i class="fa-solid fa-user pw-text-primary-500"></i>
                    </div>
                    <div>
                      Bakioğlu Holding
                    </div>
                  </div>
                </td>
                <td>Sorumlu</td>
                <td>Formen</td>
              </tr>
              <!--end::Row-->
            </tbody>
          </table>
        </div>
        <!--end::Yetki Setleri Detay tablosu-->
      </div>
    </div>
    <!--end::Col-->
    <!--begin::Col-->
    <div class="col-12 col-md-6">
      <div class="d-flex flex-column gap-5 p-8 border border-pw-stroke rounded">
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
        <!--begin::Yetki Setleri Detay tablosu-->
        <div class="table-responsive overflow-x-auto rounded">
          <table class="table table-row-bordered border pw-table-border-gray table-rounded align-middle w-max-content min-w-100 gy-2 gx-9 gs-9">
            <thead>
              <tr class="fw-semibold fs-8 pw-text-neutral-700 pw-bg-neutral-100">
                <th class="py-3">
                  <div class="d-flex align-items-center justify-content-between gap-3 flex-nowrap">
                    <span>Kullanıcı Adı</span>
                    <span><i class="fa-solid fa-filter"></i></span>
                  </div>
                </th>
                <th class="py-3">
                  <div class="d-flex align-items-center justify-content-between gap-3 flex-nowrap">
                    <span>Ünvanı</span>
                    <span><i class="fa-solid fa-filter"></i></span>
                  </div>
                </th>
                <th class="py-3">
                  <div class="d-flex align-items-center justify-content-between gap-3 flex-nowrap">
                    <span>Pozisyonu</span>
                    <span><i class="fa-solid fa-filter"></i></span>
                  </div>
                </th>
              </tr>
            </thead>
            <tbody>
              <!--begin::Row-->
              <tr class="fw-medium pw-text-neutral-700 fs-8">
                <td>
                  <div class="d-flex align-items-center flex-nowrap gap-2">
                    <div class="w-35px h-35px  d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                      <i class="fa-solid fa-user pw-text-primary-500"></i>
                    </div>
                    <div>
                      Bakioğlu Holding
                    </div>
                  </div>
                </td>
                <td>Sorumlu</td>
                <td>Formen</td>
              </tr>
              <!--end::Row-->

              <!--begin::Row-->
              <tr class="fw-medium pw-text-neutral-700 fs-8">
                <td>
                  <div class="d-flex align-items-center flex-nowrap gap-2">
                    <div class="w-35px h-35px  d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                      <i class="fa-solid fa-user pw-text-primary-500"></i>
                    </div>
                    <div>
                      Bakioğlu Holding
                    </div>
                  </div>
                </td>
                <td>Sorumlu</td>
                <td>Formen</td>
              </tr>
              <!--end::Row-->

              <!--begin::Row-->
              <tr class="fw-medium pw-text-neutral-700 fs-8">
                <td>
                  <div class="d-flex align-items-center flex-nowrap gap-2">
                    <div class="w-35px h-35px  d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                      <i class="fa-solid fa-user pw-text-primary-500"></i>
                    </div>
                    <div>
                      Bakioğlu Holding
                    </div>
                  </div>
                </td>
                <td>Sorumlu</td>
                <td>Formen</td>
              </tr>
              <!--end::Row-->

              <!--begin::Row-->
              <tr class="fw-medium pw-text-neutral-700 fs-8">
                <td>
                  <div class="d-flex align-items-center flex-nowrap gap-2">
                    <div class="w-35px h-35px  d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                      <i class="fa-solid fa-user pw-text-primary-500"></i>
                    </div>
                    <div>
                      Bakioğlu Holding
                    </div>
                  </div>
                </td>
                <td>Sorumlu</td>
                <td>Formen</td>
              </tr>
              <!--end::Row-->

              <!--begin::Row-->
              <tr class="fw-medium pw-text-neutral-700 fs-8">
                <td>
                  <div class="d-flex align-items-center flex-nowrap gap-2">
                    <div class="w-35px h-35px  d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                      <i class="fa-solid fa-user pw-text-primary-500"></i>
                    </div>
                    <div>
                      Bakioğlu Holding
                    </div>
                  </div>
                </td>
                <td>Sorumlu</td>
                <td>Formen</td>
              </tr>
              <!--end::Row-->
            </tbody>
          </table>
        </div>
        <!--end::Yetki Setleri Detay tablosu-->
      </div>
    </div>
    <!--end::Col-->
  </div>
  </form>
  <!--end::Content wrapper-->
  <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/footer.php'; ?>
</div>
<!--end::Main-->

</div>
<!--end::Wrapper -->

<script>
  window.addEventListener('DOMContentLoaded', () => {
    ClassicEditor
      .create(document.querySelector('#editor'), {
        toolbar: {
          items: [
            'heading', '|',
            'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript', 'removeFormat', '|',
            'bulletedList', 'numberedList', 'todoList', '|',
            'outdent', 'indent', '|',
            'undo', 'redo',
            'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', 'alignment', 'link', '|',
          ],
          shouldNotGroupWhenFull: true
        },
      })
      .catch(error => {
        console.error(error);
      });
  })
</script>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/foot.php'; ?>