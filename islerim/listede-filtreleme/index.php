<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/header.php'; ?>

<!--begin::Wrapper-->
<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">

  <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/sidebar.php'; ?>
  <!--begin::Main-->
  <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <!--begin::Content wrapper-->
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar col-12 col-md-12 px-6 py-6 border-bottom pw-border-stroke mb-5">

      <!--begin::Toolbar container-->
      <div id="kt_app_toolbar_container" class="container-fluid d-flex flex-stack p-0">

        <!--begin::Page title-->
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
          <!--begin::Breadcrumb-->
          <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-8 mt-0 mb-3">
            <!--begin::Item-->
            <li class="breadcrumb-item active">İşlerim</li>
            <!--end::Item-->
          </ul>
          <!--end::Breadcrumb-->
          <!--begin::Title-->
          <h1 class="page-heading d-flex text-dark fw-bolder fs-4 flex-column justify-content-center my-0">
            İşlerim
          </h1>
          <!--end::Title-->
        </div>
        <!--end::Page title-->

        <!--begin::Dropdown wrapper-->
        <div class="app-navbar-item ms-1 ms-md-3">
          <!--begin::Menu toggle-->
          <a href="#" class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px" data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
            <i class="fa-solid fa-ellipsis-vertical fs-4"></i>
          </a>
          <!--begin::Menu toggle-->
          <!--begin::Menu-->
          <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-200px" data-kt-menu="true" data-kt-element="theme-mode-menu">
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

    <div class="col-12 col-md-12 mb-20 px-6 pb-6">
        <!--begin::Content -->
        <div class="row mt-5">
            <div class="col-md-6 col-lg-6">
                <button class="btn btn-danger px-4 py-2 fs-9">Tanımları Sıfırla</button>
                <div class="row mt-10">
                    <!--begin::Table-->
                    <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                        <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fw-bold fs-7">
                            <tbody>
                                <!--begin::Row-->
                                <tr>
                                    <td><label for="" class="mb-2">Tipi</label></td>
                                    <td>
                                        <input type="number" class="form-control form-control-solid py-3 px-4 fs-8" name="" value="100"/>
                                    </td>
                                </tr>
                                <!--end::Row-->

                                <!--begin::Row-->
                                <tr>
                                    <td><label for="" class="mb-2">İçerik Tipi</label></td>
                                    <td>
                                        <input type="number" class="form-control form-control-solid py-3 px-4 fs-8" name="" value="2 Satır"/>
                                    </td>
                                </tr>
                                <!--end::Row-->
                            </tbody>
                        </table>
                    </div>
                    <!--end::Table-->
                </div>
            </div>
            
            <div class="col-md-6 col-lg-6">
                <div class="border pw-border-stroke rounded-2 p-5">
                    <div class="row">
                        <div class="d-flex align-items-center justify-content-center mb-5">
                            <label for="" class="fs-8 fw-normal me-2">İşlem Menüsünü Göster</label>
                            <div class="form-check pw-form-check-rounded-sm pw-form-check-sm mt-1">
                                <input class="form-check-input" type="checkbox">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <!--begin::Table-->
                            <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                                <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fw-bold fs-7 border-end pw-border-stroke">
                                    <tbody>
                                        <!--begin::Row-->
                                        <tr>
                                            <td class="py-2"><label for="" class="fs-8 fw-normal">Akış Önceliği</label></td>
                                            <td class="py-2">
                                                <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                                                    <input class="form-check-input" type="checkbox">
                                                </div>
                                            </td>
                                        </tr>
                                        <!--end::Row-->

                                        <!--begin::Row-->
                                        <tr>
                                            <td class="py-2"><label for="" class="fs-8 fw-normal">Toplamları Göster</label></td>
                                            <td class="py-2">
                                                <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                                                    <input class="form-check-input" type="checkbox">
                                                </div>
                                            </td>
                                        </tr>
                                        <!--end::Row-->

                                        <!--begin::Row-->
                                        <tr>
                                            <td class="py-2"><label for="" class="fs-8 fw-normal">Planlanan Bitiş Tarihi</label></td>
                                            <td class="py-2">
                                                <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                                                    <input class="form-check-input" type="checkbox">
                                                </div>
                                            </td>
                                        </tr>
                                        <!--end::Row-->

                                        <!--begin::Row-->
                                        <tr>
                                            <td class="py-2"><label for="" class="fs-8 fw-normal">Vekalet</label></td>
                                            <td class="py-2">
                                                <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                                                    <input class="form-check-input" type="checkbox">
                                                </div>
                                            </td>
                                        </tr>
                                        <!--end::Row-->

                                        <!--begin::Row-->
                                        <tr>
                                            <td class="py-2"><label for="" class="fs-8 fw-normal">Son 5 Kullanıcı</label></td>
                                            <td class="py-2">
                                                <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                                                    <input class="form-check-input" type="checkbox">
                                                </div>
                                            </td>
                                        </tr>
                                        <!--end::Row-->

                                        <!--begin::Row-->
                                        <tr>
                                            <td class="py-2"><label for="" class="fs-8 fw-normal">Başlatan</label></td>
                                            <td class="py-2">
                                                <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                                                    <input class="form-check-input" type="checkbox">
                                                </div>
                                            </td>
                                        </tr>
                                        <!--end::Row-->
                                    </tbody>
                                </table>
                            </div>
                            <!--end::Table-->
                        </div>

                        <div class="col-6 ps-8">
                            <!--begin::Table-->
                            <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                                <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fw-bold fs-7">
                                    <tbody>
                                        <!--begin::Row-->
                                        <tr>
                                            <td class="py-2 fw-bold text-primary">Tamamlananlar</label></td>
                                            <td class="py-2"></td>
                                        </tr>
                                        <!--end::Row-->

                                        <!--begin::Row-->
                                        <tr>
                                            <td class="py-2"><label for="" class="fs-8 fw-normal">Başlatan</label></td>
                                            <td class="py-2">
                                                <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                                                    <input class="form-check-input" type="checkbox">
                                                </div>
                                            </td>
                                        </tr>
                                        <!--end::Row-->

                                        <!--begin::Row-->
                                        <tr>
                                            <td class="py-2"><label for="" class="fs-8 fw-normal">Akış Önceliği</label></td>
                                            <td class="py-2">
                                                <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                                                    <input class="form-check-input" type="checkbox">
                                                </div>
                                            </td>
                                        </tr>
                                        <!--end::Row-->

                                        <!--begin::Row-->
                                        <tr>
                                            <td class="py-2"><label for="" class="fs-8 fw-normal">Beklediği Kullanıcılar</label></td>
                                            <td class="py-2">
                                                <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                                                    <input class="form-check-input" type="checkbox">
                                                </div>
                                            </td>
                                        </tr>
                                        <!--end::Row-->

                                        <!--begin::Row-->
                                        <tr>
                                            <td class="py-2"><label for="" class="fs-8 fw-normal">Derecelendirme</label></td>
                                            <td class="py-2">
                                                <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                                                    <input class="form-check-input" type="checkbox">
                                                </div>
                                            </td>
                                        </tr>
                                        <!--end::Row-->
                                    </tbody>
                                </table>
                            </div>
                            <!--end::Table-->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="d-flex align-items-center justify-content-start my-5">
                <label for="" class="fs-8 fw-normal me-2">Aktivite Detaylarını Göster</label>
                <div class="form-check pw-form-check-rounded-sm pw-form-check-sm mt-1">
                    <input class="form-check-input" type="checkbox" checked>
                </div>
            </div>

            <div class="border pw-border-stroke rounded-3 p-5">
                <h6 class="fs-8 text-primary fw-bold mb-5">Aranabilir Menü Ayarları</h6>
                <div class="row">
                    <div class="col-md-3 col-lg-3">
                        <!--begin::Table-->
                        <div class="table-responsive overflow-x-auto overflow-lg-hidden border pw-border-stroke rounded-2 p-3 pt-0">
                            <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fw-bold fs-7">
                                <tbody>
                                    <!--begin::Row-->
                                    <tr>
                                        <td class="py-2 fw-bold text-primary">Menü</label></td>
                                        <td class="py-2"></td>
                                    </tr>
                                    <!--end::Row-->

                                    <!--begin::Row-->
                                    <tr>
                                        <td class="py-2"><label for="" class="fs-8 fw-normal">Akış Önceliği</label></td>
                                        <td class="py-2">
                                            <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                                                <input class="form-check-input" type="checkbox" checked>
                                            </div>
                                        </td>
                                    </tr>
                                    <!--end::Row-->

                                    <!--begin::Row-->
                                    <tr>
                                        <td class="py-2"><label for="" class="fs-8 fw-normal">Toplamları Göster</label></td>
                                        <td class="py-2">
                                            <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                                                <input class="form-check-input" type="checkbox" checked>
                                            </div>
                                        </td>
                                    </tr>
                                    <!--end::Row-->

                                    <!--begin::Row-->
                                    <tr>
                                        <td class="py-2"><label for="" class="fs-8 fw-normal">Planlanan Bitiş Tarihi</label></td>
                                        <td class="py-2">
                                            <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                                                <input class="form-check-input" type="checkbox" checked>
                                            </div>
                                        </td>
                                    </tr>
                                    <!--end::Row-->

                                    <!--begin::Row-->
                                    <tr>
                                        <td class="py-2"><label for="" class="fs-8 fw-normal">Vekalet</label></td>
                                        <td class="py-2">
                                            <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                                                <input class="form-check-input" type="checkbox" checked>
                                            </div>
                                        </td>
                                    </tr>
                                    <!--end::Row-->

                                    <!--begin::Row-->
                                    <tr>
                                        <td class="py-2"><label for="" class="fs-8 fw-normal">Son 5 Kullanıcı</label></td>
                                        <td class="py-2">
                                            <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                                                <input class="form-check-input" type="checkbox" checked>
                                            </div>
                                        </td>
                                    </tr>
                                    <!--end::Row-->

                                    <!--begin::Row-->
                                    <tr>
                                        <td class="py-2"><label for="" class="fs-8 fw-normal">Başlatan</label></td>
                                        <td class="py-2">
                                            <div class="form-check pw-form-check-rounded-sm pw-form-check-sm">
                                                <input class="form-check-input" type="checkbox" checked>
                                            </div>
                                        </td>
                                    </tr>
                                    <!--end::Row-->
                                </tbody>
                            </table>
                        </div>
                        <!--end::Table-->
                    </div>
                    <div class="col-md-3 col-lg-3">
                        <!--begin::Table-->
                        <div class="table-responsive overflow-x-auto overflow-lg-hidden border pw-border-stroke rounded-2 p-3  pt-0 h-100">
                            <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fw-bold fs-7">
                                <tbody>
                                    <!--begin::Row-->
                                    <tr>
                                        <td class="py-2 fw-bold text-primary">Menü</label></td>
                                        <td class="py-2"></td>
                                    </tr>
                                    <!--end::Row-->

                                </tbody>
                            </table>
                        </div>
                        <!--end::Table-->
                    </div>
                    <div class="col-md-3 col-lg-3">
                        <!--begin::Table-->
                        <div class="table-responsive overflow-x-auto overflow-lg-hidden border pw-border-stroke rounded-2 p-5 pt-0 h-100">
                            <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fw-bold fs-7">
                                <tbody>
                                    <!--begin::Row-->
                                        <tr>
                                            <td class="py-2 fw-bold text-primary">Sıralama</label></td>
                                            <td class="py-2"></td>
                                        </tr>
                                        <!--end::Row-->

                                    <!--begin::Row-->
                                    <tr>
                                        <td class="py-2"><label for="" class="fs-8 fw-normal">Akış Önceliği</label></td>
                                        <td class="py-2"></td>
                                    </tr>
                                    <!--end::Row-->

                                    <!--begin::Row-->
                                    <tr>
                                        <td class="py-2"><label for="" class="fs-8 fw-normal">Toplamları Göster</label></td>
                                        <td class="py-2"></td>
                                    </tr>
                                    <!--end::Row-->

                                    <!--begin::Row-->
                                    <tr>
                                        <td class="py-2"><label for="" class="fs-8 fw-normal">Planlanan Bitiş Tarihi</label></td>
                                        <td class="py-2"></td>
                                    </tr>
                                    <!--end::Row-->

                                    <!--begin::Row-->
                                    <tr>
                                        <td class="py-2"><label for="" class="fs-8 fw-normal">Vekalet</label></td>
                                        <td class="py-2"></td>
                                    </tr>
                                    <!--end::Row-->

                                    <!--begin::Row-->
                                    <tr>
                                        <td class="py-2"><label for="" class="fs-8 fw-normal">Son 5 Kullanıcı</label></td>
                                        <td class="py-2"></td>
                                    </tr>
                                    <!--end::Row-->

                                    <!--begin::Row-->
                                    <tr>
                                        <td class="py-2"><label for="" class="fs-8 fw-normal">Başlatan</label></td>
                                        <td class="py-2"></td>
                                    </tr>
                                    <!--end::Row-->
                                </tbody>
                            </table>
                        </div>
                        <!--end::Table-->
                    </div>
                    <div class="col-md-3 col-lg-3">
                        <!--begin::Table-->
                        <div class="table-responsive overflow-x-auto overflow-lg-hidden border pw-border-stroke rounded-2 p-5 pt-0 h-100">
                            <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fw-bold fs-7">
                                <tbody>
                                    <!--begin::Row-->
                                    <tr>
                                        <td class="py-2 fw-bold text-primary">Seçili</label></td>
                                        <td class="py-2"></td>
                                    </tr>
                                    <!--end::Row-->
                                </tbody>
                            </table>
                        </div>
                        <!--end::Table-->
                    </div>
                </div>
            </div>
        </div>
        
        <!--end::Content -->

        <!--begin::Form actions-->
        <div class="row mt-5">
            <div class="d-flex align-items-center justify-content-end gap-3 pt-5">
                <button type="reset" class="btn btn-active-light fs-8 py-3 px-6">
                    Vazgeç
                </button>
                <button type="submit" class="btn btn-primary fs-8 py-3 px-6">
                    Kaydet
                </button>
            </div>
        </div>
        <!--end::Form actions-->
    </div>

    <!--end::Content wrapper-->
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/footer.php'; ?>
  </div>
  <!--end::Main-->

</div>
<!--end::Wrapper -->

<script>
    window.addEventListener('DOMContentLoaded', () => {
        ClassicEditor
        .create(document.querySelector('#notlarCKEditor'), {
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
        }).catch(error => {
            console.error(error);
        });
    })
</script>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/foot.php'; ?>