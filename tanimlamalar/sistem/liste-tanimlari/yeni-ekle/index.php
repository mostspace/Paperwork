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
                <li class="breadcrumb-item active"> Yeni Liste Ekle</li>
                <!--end::Item-->
              </ul>
              <!--end::Breadcrumb-->
              <!--begin::Title-->
              <h1 class="page-heading d-flex text-dark fw-bold fs-4 flex-column justify-content-center my-0">
                Yeni Liste Ekle
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
            <div>
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
                                            <td><label for="">Liste Adı</label></td>
                                            <td>
                                                <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" id="" name="" required />
                                            </td>
                                        </tr>
                                        <!--end::Row-->

                                        <!--begin::Row-->
                                        <tr>
                                            <td class=""><label for="">Filtre Alanı*</label></td>
                                            <td>
                                                <select id="" class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2" data-placeholder="">
                                                    <option value="1">Option 1</option>
                                                    <option value="2">Option 2</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <!--end::Row-->

                                        <!--begin::Row-->
                                        <tr>
                                            <td class=""><label for="">Referans Alan</label></td>
                                            <td>
                                                <select id="" class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2" data-placeholder="">
                                                    <option value="1">Option 1</option>
                                                    <option value="2">Option 2</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <!--end::Row-->

                                        <!--begin::Row-->
                                        <tr>
                                            <td><label for="">Açıklama</label></td>
                                            <td>
                                                <div id="aciklama"></div>
                                            </td>
                                        </tr>
                                        <!--end::Row-->

                                        <!--begin::Row-->
                                        <tr>
                                            <td><label for="">Tipi</label></td>
                                            <td class="d-flex align-items-center">
                                                <div class="form-check form-check-custom me-10">
                                                    <input class="form-check-input bg-blue w-20px h-20px" type="radio" value="" id="sabit" name="pw_tipi">
                                                    <label class="form-check-label pw-text-neutral-700 fs-8" for="sabit">
                                                        Sabit
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-custom me-10">
                                                    <input class="form-check-input bg-blue w-20px h-20px" type="radio" value="" id="veritabani" name="pw_tipi" checked>
                                                    <label class="form-check-label pw-text-neutral-700 fs-8" for="veritabani">
                                                        Veritabanı
                                                    </label>
                                                </div>
                                                <a href="/tanimlamalar/sistem/liste-tanimlari/yeni-ekle/olustur/" class="btn btn-outline btn-outline-primary px-5 py-2 fs-8"><i class="fa-solid fa-coins me-2"></i>Oluştur</a>
                                            </td>
                                        </tr>
                                        <!--end::Row-->

                                        <!--begin::Row-->
                                        <tr>
                                            <td><label for="">SQL</label></td>
                                            <td>
                                                <textarea class="form-control form-control-solid fs-8" name="" id="" cols="30" rows="3"></textarea>
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
                <div class="row pe-20">
                    <div class="d-flex justify-content-between align-items-center py-3">
                        <h6>Veri Girişi</h6>
                        <div>
                            <button class="btn pw-bg-neutral-100 fs-7 text-gray-600 py-2 px-5 me-2">İptal Et</button>
                            <button class="btn btn-primary fs-7 py-2 px-5">+ Ekle</button>
                        </div>
                    </div>
                
                    <div class="table-responsive overflow-x-auto rounded">
                        <!--begin::Table-Light-->
                        <table class="table table-row-bordered border pw-dark-bg-table pw-table-border-gray pw-table-border-gray table-rounded align-middle w-max-content min-w-100 gy-2 gx-9 gs-9">
                            <thead>
                                <tr class="fw-semibold fs-8 pw-text-neutral-700 pw-bg-neutral-100">
                                    <th class="py-3 fw-bold">Tanımı</th>
                                    <th class="py-3 fw-bold">Genişlik</th>
                                    <th class="py-3 fw-bold">Alan Adı</th>
                                    <th class="py-3 fw-bold"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <!--begin::Row-->
                                <tr class="fw-medium pw-text-neutral-700 fs-8">
                                    <td>Alan1</td>
                                    <td>0</td>
                                    <td>ALAN1</td>
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
                                
                                <!--begin::Row-->
                                <tr class="fw-medium pw-text-neutral-700 fs-8">
                                    <td>Alan2</td>
                                    <td>0</td>
                                    <td>ALAN2</td>
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

                                <!--begin::Row-->
                                <tr class="fw-medium pw-text-neutral-700 fs-8">
                                    <td>Alan3</td>
                                    <td>0</td>
                                    <td>ALAN3</td>
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

                                <!--begin::Row-->
                                <tr class="fw-medium pw-text-neutral-700 fs-8">
                                    <td>Alan4</td>
                                    <td>0</td>
                                    <td>ALAN4</td>
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

                                <!--begin::Row-->
                                <tr class="fw-medium pw-text-neutral-700 fs-8">
                                    <td>Alan5</td>
                                    <td>0</td>
                                    <td>ALAN5</td>
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
                <!--end::Bottom content-->     
            </div>
                        
            <div class="my-20 border-top border-2 border-primary"></div>

            <div>
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
                                            <td><label for="">Liste Adı</label></td>
                                            <td>
                                                <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" id="" name="" required />
                                            </td>
                                        </tr>
                                        <!--end::Row-->

                                        <!--begin::Row-->
                                        <tr>
                                            <td class=""><label for="">Filtre Alanı*</label></td>
                                            <td>
                                                <select id="" class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2" data-placeholder="">
                                                    <option value="1">Option 1</option>
                                                    <option value="2">Option 2</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <!--end::Row-->

                                        <!--begin::Row-->
                                        <tr>
                                            <td class=""><label for="">Referans Alan</label></td>
                                            <td>
                                                <select id="" class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2" data-placeholder="">
                                                    <option value="1">Option 1</option>
                                                    <option value="2">Option 2</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <!--end::Row-->

                                        <!--begin::Row-->
                                        <tr>
                                            <td><label for="">Açıklama</label></td>
                                            <td>
                                                <div id="sabitAciklama"></div>
                                            </td>
                                        </tr>
                                        <!--end::Row-->

                                        <!--begin::Row-->
                                        <tr>
                                            <td><label for="">Tipi</label></td>
                                            <td class="d-flex align-items-center">
                                                <div class="form-check form-check-custom me-10">
                                                    <input class="form-check-input bg-blue w-20px h-20px" type="radio" value="" id="sabit" name="pw_tipi" checked>
                                                    <label class="form-check-label pw-text-neutral-700 fs-8" for="sabit">
                                                        Sabit
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-custom me-10">
                                                    <input class="form-check-input bg-blue w-20px h-20px" type="radio" value="" id="veritabani" name="pw_tipi">
                                                    <label class="form-check-label pw-text-neutral-700 fs-8" for="veritabani">
                                                        Veritabanı
                                                    </label>
                                                </div>
                                                <button class="btn btn-outline btn-outline-primary px-5 py-2 fs-8" disabled><i class="fa-solid fa-coins me-2"></i>Oluştur</button>
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
                <div class="row pe-20">
                    <div class="d-flex justify-content-between align-items-center my-5">
                        <h6 class="fs-7">Veri Girişi <i class="fa-solid fa-angles-down ms-2 text-gray-900"></i></h6>
                        <div>
                            <button class="btn pw-bg-neutral-100 fs-7 text-gray-700 py-2 px-5 me-2"><i class="fa-solid fa-file-export fs-8 text-primary me-1"></i>Excel’e Aktar</button>
                            <button class="btn pw-bg-neutral-100 fs-7 text-gray-700 py-2 px-5"><i class="fa-solid fa-file-pen fs-8 text-primary me-1"></i>Düzenle</button>
                        </div>
                    </div>

                    <h6 class="fs-7 my-1">Tedarikçi</h6>
                    <div class="d-flex justify-content-start align-items-center py-3">
                        <input type="text" class="form-control form-control-solid px-4 fs-8 w-150px" id="" name="" required />
                        <div class="py-1 h-100"><div class="w-1px h-100 pw-bg-neutral-400 mx-5"></div></div>
                        <button class="btn btn-primary h-100 px-5 me-3 fs-8">+ Ekle</button>
                        <button class="btn pw-bg-neutral-200 h-100 px-5 fs-8 d-flex align-items-center text-gray-600"><i class="fa-solid fa-trash-can me-1 text-danger"></i>Sil</button>
                    </div>
                
                    <div class="table-responsive overflow-x-auto rounded mt-4">
                        <!--begin::Table-Light-->
                        <table class="table table-row-bordered border pw-dark-bg-table pw-table-border-gray pw-table-border-gray table-rounded align-middle w-max-content min-w-100 gy-2 gx-9 gs-9">
                            <thead>
                                <tr class="fw-semibold fs-8 pw-text-neutral-700 pw-bg-neutral-100">
                                    <th class="py-3 fw-bold">Tedarikçi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!--begin::Row-->
                                <tr class="pw-text-neutral-700 fs-9">
                                    <td class="py-5">GGSoft</td>
                                </tr>
                                <!--end::Row-->
                                
                                <!--begin::Row-->
                                <tr class="pw-text-neutral-700 fs-9">
                                    <td class="py-5">PaperWork</td>
                                </tr>
                                <!--end::Row-->
                            </tbody>
                        </table>
                    </div>

                    <div class="my-5 fs-8 fw-bold">
                        <a href="javascript:void(0); ">Toplam kayıt sayısı: 4</a>
                    </div>
                </div>
                <!--end::Bottom content-->     
            </div>

            <!--begin::Form actions-->
            <div class="row mt-10">
                <div class="d-flex align-items-center justify-content-end gap-3 border-top pw-border-stroke pt-5 pe-20">
                    <button type="reset" class="btn btn-active-light fs-8 py-3 px-6">
                        İptal
                    </button>
                    <button type="submit" class="btn btn-primary fs-8 py-3 px-6" data-bs-toggle="modal" data-bs-target="#uyariModal">
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

<!-- begin::Modal -->
<div class="modal fade" tabindex="-1" id="uyariModal">
    <div class="modal-dialog modal-dialog-centered modal-lg mw-850px">
        <div class="modal-content">
            <div class="modal-header border-0 pb-3 px-7">
                <h3 class="modal-title fs-5 fw-bolder">Uyarı</h3>
            </div>

            <div class="modal-body">
                <p>Liste Alan isimleri 5-30 karakter uzunluğunda, harf ile başlamadı ve içinde türkçe karakter olmamalıdır. Liste Alan uzunluğu 0’dan büyük olmalıdır.</p>
                <button class="btn btn-primary py-2 px-3 fs-8 float-end mt-7" data-bs-dismiss="modal">Kapat</button>
            </div>
        </div>
    </div>
</div>
<!-- end::Modal -->

<script>
    window.addEventListener('DOMContentLoaded', () => {

        ClassicEditor.create(document.querySelector('#aciklama'), {
        toolbar: {
            items: [
            'heading', '|',
            'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript',
            'removeFormat', '|',
            'bulletedList', 'numberedList', 'todoList', '|',
            'outdent', 'indent', '|',
            'undo', 'redo',
            'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', 'alignment', 'link',
            '|',
            ],
            shouldNotGroupWhenFull: true
        },
        }).catch(error => {
            console.error(error);
        });

        ClassicEditor.create(document.querySelector('#sabitAciklama'), {
        toolbar: {
            items: [
            'heading', '|',
            'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript',
            'removeFormat', '|',
            'bulletedList', 'numberedList', 'todoList', '|',
            'outdent', 'indent', '|',
            'undo', 'redo',
            'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', 'alignment', 'link',
            '|',
            ],
            shouldNotGroupWhenFull: true
        },
        }).catch(error => {
            console.error(error);
        });

    });
</script>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/foot.php'; ?>