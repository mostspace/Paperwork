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
                <li class="breadcrumb-item active"> Yeni Web Servis Ekle </li>
                <!--end::Item-->
              </ul>
              <!--end::Breadcrumb-->

              <!--begin::Title-->
              <h1 class="page-heading d-flex text-dark fw-bold fs-4 my-0 gap-2 align-items-center">
                <span><i class="fa-solid fa-angle-left fs-6 text-dark"></i></span> Yeni Web Servis Ekle
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
                    <div class="nav nav-tabs nav-line-tabs fs-6 gap-2" role="tablist">
                        <!--begin::Tab item-->
                        <li class="nav-item" role="presentation">
                            <a class="nav-link mx-0 pt-3 px-5 pb-4 fs-base rounded-0 fw-semibold active" data-bs-toggle="tab" href="#pw_tab_pane_detat" aria-selected="true" role="tab">Detay</a>
                        </li>
                        <!--end::Tab item-->

                        <!--begin::Tab item-->
                        <li class="nav-item" role="presentation">
                            <a class="nav-link mx-0 pt-3 px-5 pb-4 fs-base rounded-0" data-bs-toggle="tab" href="#pw_tab_pane_test" aria-selected="false" role="tab">Test</a>
                        </li>
                        <!--end::Tab item-->
                    </div>
                    <!--end::Table tabs-->
                </div>
                <!--end::Tab header wrapper-->

                <!--begin::Tab contents-->
                <div class="tab-content pw-dashboard-tab-content mt-6">
                    <!--begin::Ozellikler content-->
                    <div class="tab-pane fade active show" id="pw_tab_pane_detat" role="tabpanel">
                        <div class="row">
                            <div class="col-12 col-lg-3 col-md-3">
                                <!--begin::Form-->
                                <form class="d-flex flex-column gap-13">
                                    <!--begin::Table-->
                                    <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                                        <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fw-bold fs-7">
                                            <tbody>
                                                <!--begin::Row-->
                                                <tr>
                                                    <td class="py-2 pt-0 pe-5">
                                                        <label for="" class="mb-2">Liste Adı</label>
                                                        <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" name="" />
                                                    </td>
                                                </tr>
                                                <!--end::Row-->

                                                <!--begin::Row-->
                                                <tr>
                                                    <td class="py-2 pe-5">
                                                        <label for="" class="mb-2">Tipi</label>
                                                        <select id="" class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2" data-placeholder="">
                                                            <option value="1">Soap</option>
                                                            <option value="2">Rest</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <!--end::Row-->

                                                <!--begin::Row-->
                                                    <tr>
                                                    <td class="py-2 pe-5">
                                                        <label for="" class="mb-2">Proxy Adı</label>
                                                        <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" name="" />
                                                    </td>
                                                </tr>
                                                <!--end::Row-->

                                                <!--begin::Row-->
                                                <tr>
                                                    <td class="py-2 pe-5">
                                                        <label for="" class="mb-2">Kimlik Doğrulama</label>
                                                        <select id="" class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2" data-placeholder="">
                                                            <option value="1">Yok</option>
                                                            <option value="2">Temel</option>
                                                            <option value="3">AuthInHeader</option>
                                                            <option value="4">ApiKey (Bearer)</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <!--end::Row-->

                                                <!--begin::Row-->
                                                <tr>
                                                    <td class="py-2 pe-5">
                                                        <label for="guvenli-mi" class="mb-2">Güvenli mi?</label>
                                                        <div class="form-check mb-0">
                                                            <input id="guvenli-mi" class="form-check-input bg-blue" type="checkbox" value="" id="" name="">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <!--end::Row-->

                                                <!--begin::Row-->
                                                <tr>
                                                    <td class="py-2 pe-5">
                                                        <label for="" class="mb-2">Client Adı</label>
                                                        <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" name="" />
                                                    </td>
                                                </tr>
                                                <!--end::Row-->

                                                <!--begin::Row-->
                                                <tr>
                                                    <td class="py-2 pe-5">
                                                        <label for="Platform" class="mb-2">Platform</label>
                                                        <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" name="" />
                                                    </td>
                                                </tr>
                                                <!--end::Row-->

                                                <!--begin::Row-->
                                                <tr>
                                                    <td class="py-2 pe-5 position-relative">
                                                        <a href="javascript:void(0);" class="position-absolute end-0 mt-6"><i class="fa-solid fa-gear fs-8 text-primary"></i></a>
                                                        <label for="Platform" class="mb-2">Wsdl</label>
                                                        <textarea class="form-control form-control-solid py-3 px-4 fs-8" name="" id="" cols="30" rows="2"></textarea>
                                                    </td>
                                                </tr>
                                                <!--end::Row-->

                                                <!--begin::Row-->
                                                <tr>
                                                    <td class="py-2 pe-5">
                                                        <label for="" class="mb-2">End Point</label>
                                                        <textarea class="form-control form-control-solid py-3 px-4 fs-8" name="" id="" cols="30" rows="2"></textarea>
                                                    </td>
                                                </tr>
                                                <!--end::Row-->

                                                <!--begin::Row-->
                                                <tr>
                                                    <td class="py-2 pe-5">
                                                        <label for="" class="mb-2">Açıklama</label>
                                                        <div id="aciklama"></div>
                                                    </td>
                                                </tr>
                                                <!--end::Row-->
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </form>
                                <!--end::Form-->
                            </div>
                            
                            <div class="col-12 col-lg-9 col-md-9">
                                <div class="border rounded-3 pw-shadow-3 p-4 h-100">
                                    <div class="row px-3">
                                        <h6 class="fs-6 mb-0">Metodlar</h6>
                                        <div class="separator my-3"></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4 col-lg-4">
                                            <div class="border pw-border-stroke rounded-2 py-3 h-100">
                                                <ul class="list-style-none px-0">
                                                    <li class="py-2 px-4 hover-pw-bg-primary-300"><i class="fa-solid fa-gear me-2 text-gray-800"></i>Add</li>
                                                    <li class="py-2 px-4 hover-pw-bg-primary-300"><i class="fa-solid fa-gear me-2 text-gray-800"></i>Subtract</li>
                                                    <li class="py-2 px-4 hover-pw-bg-primary-300"><i class="fa-solid fa-gear me-2 text-gray-800"></i>Multiply</li>
                                                    <li class="py-2 px-4 hover-pw-bg-primary-300"><i class="fa-solid fa-gear me-2 text-gray-800"></i>Divide</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-lg-8">
                                            <div class="row">
                                                <!--begin::Form-->
                                                <form class="d-flex flex-column gap-13">
                                                    <div class="col col-lg-11">
                                                        <!--begin::Table-->
                                                        <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                                                            <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fw-bold fs-7">
                                                                <tbody>
                                                                    <!--begin::Row-->
                                                                    <tr>
                                                                        <td><label for="">Method Adı</label></td>
                                                                        <td>
                                                                            <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" name="" />
                                                                        </td>
                                                                    </tr>
                                                                    <!--end::Row-->

                                                                    <!--begin::Row-->
                                                                    <tr>
                                                                        <td><label for="durumu">Durumu</label></td>
                                                                        <td>
                                                                            <div class="form-check mb-0">
                                                                                <input id="durumu" class="form-check-input bg-blue" type="checkbox" value="" id="" name="">
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <!--end::Row-->

                                                                    <!--begin::Row-->
                                                                    <tr>
                                                                        <td><label for="" class="mb-2">Tipi</label></td>
                                                                        <td>
                                                                            <select id="" class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2" data-placeholder="">
                                                                                <option value="1">Post</option>
                                                                                <option value="2">option 2</option>
                                                                            </select>
                                                                        </td>
                                                                    </tr>
                                                                    <!--end::Row-->

                                                                    <!--begin::Row-->
                                                                    <tr>
                                                                        <td><label for="" class="mb-2">İçerik Tipi</label></td>
                                                                        <td>
                                                                            <select id="" class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2" data-placeholder="">
                                                                                <option value="1">option 1</option>
                                                                                <option value="2">option 2</option>
                                                                            </select>
                                                                        </td>
                                                                    </tr>
                                                                    <!--end::Row-->

                                                                    <!--begin::Row-->
                                                                    <tr>
                                                                        <td><label for="" class="mb-2">End Point</label></td>
                                                                        <td>
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
                                            </div>

                                            <div class="row px-3">
                                                <h6 class="fs-6 px-0 mb-0">Parametreler</h6>
                                                <div class="separator my-3"></div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6 col-lg-6">
                                                    <div class="border pw-border-stroke rounded-2 py-3 h-100">
                                                        <ul class="list-style-none px-0">
                                                            <li class="py-2 px-4 hover-pw-bg-primary-300 text-success"><span class="me-2">123</span>Add</li>
                                                            <li class="py-2 px-4 hover-pw-bg-primary-300 text-success"><span class="me-2">123</span>Subtract</li>
                                                            <li class="py-2 px-4 hover-pw-bg-primary-300 text-danger"><span class="me-2">123</span>Multiply</li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-lg-6">
                                                    <!--begin::Form-->
                                                    <form class="d-flex flex-column gap-13">
                                                        <!--begin::Table-->
                                                        <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                                                            <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fw-bold fs-7">
                                                                <tbody>
                                                                    <!--begin::Row-->
                                                                    <tr>
                                                                        <td class="py-2 pt-0 pe-6">
                                                                            <label for="" class="mb-2">Parametre Adı</label>
                                                                            <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" name="" />
                                                                        </td>
                                                                    </tr>
                                                                    <!--end::Row-->

                                                                    <!--begin::Row-->
                                                                    <tr>
                                                                        <td class="py-2 pe-6">
                                                                            <label for="" class="mb-2">Tipi</label>
                                                                            <select id="" class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2" data-placeholder="">
                                                                                <option value="1">Giriş</option>
                                                                                <option value="2">option 2</option>
                                                                            </select>
                                                                        </td>
                                                                    </tr>
                                                                    <!--end::Row-->

                                                                    <!--begin::Row-->
                                                                    <tr>
                                                                        <td class="py-2 pe-6">
                                                                            <label for="zorunlu" class="mb-2">Zorunlu</label>
                                                                            <div class="form-check mb-0">
                                                                                <input id="zorunlu" class="form-check-input bg-blue" type="checkbox" value="" id="" name="">
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <!--end::Row-->

                                                                    <!--begin::Row-->
                                                                    <tr>
                                                                        <td class="py-2 position-relative pe-6">
                                                                            <label for="" class="mb-2">Veri Tipi</label>
                                                                            <select id="" class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2" data-placeholder="">
                                                                                <option value="1">Sayı</option>
                                                                                <option value="2">option 2</option>
                                                                            </select>
                                                                            <a href="javascript:void(0);" class="position-absolute end-0 mt-3"><i class="fa-solid fa-plus fs-6 text-gray-600"></i></a>
                                                                        </td>
                                                                    </tr>
                                                                    <!--end::Row-->

                                                                    <!--begin::Form actions row-->
                                                                    <tr>
                                                                        <td class="py-2 pe-6" colspan="2" align="right">
                                                                            <button class="btn btn-primary fs-7 py-2 px-4 me-2"><i class="fa-solid fa-plus text-white fs-8 me-1"></i>Ekle</button>
                                                                            <button class="btn pw-bg-neutral-100 fs-7 py-2 px-4 text-gray-600"><i class="fa-solid fa-trash-can text-danger fs-8 me-1"></i>Sil</button>
                                                                        </td>
                                                                    </tr>
                                                                    <!--end::Form actions row-->
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
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Ozellikler content-->

                    <!--begin::Goster content-->
                    <div class="tab-pane fade" id="pw_tab_pane_test" role="tabpanel">
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <h6 class="fs-6 text-gray-600 px-5 mt-3">Giriş</h6>
                                <div class="separator my-3"></div>
                                <!--begin::Form-->
                                <form class="d-flex flex-column gap-13 mt-10">
                                    <!--begin::Table-->
                                    <div class="table-responsive overflow-x-auto overflow-lg-hidden px-5">
                                        <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fw-bold fs-7">
                                            <tbody>
                                                <!--begin::Row-->
                                                <tr>
                                                    <td><label for="" class="mb-2">intA</label></td>
                                                    <td><input type="text" class="form-control form-control-solid py-3 px-4 fs-8" name="" /></td>
                                                </tr>
                                                <!--end::Row-->

                                                <!--begin::Row-->
                                                <tr>
                                                    <td><label for="" class="mb-2">intB</label></td>
                                                    <td><input type="text" class="form-control form-control-solid py-3 px-4 fs-8" name="" /></td>
                                                </tr>
                                                <!--end::Row-->
                                                
                                                <!--begin::Form actions row-->
                                                <tr>
                                                    <td colspan="2" align="right">
                                                        <button type="submit" class="btn btn-primary fs-7 py-2 px-4">Tamam</button>
                                                    </td>
                                                </tr>
                                                <!--end::Form actions row-->
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </form>
                                <!--end::Form-->
                            </div>

                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <h6 class="fs-6 text-gray-600 px-5 mt-3">Sonuç</h6>
                                <div class="separator my-3"></div>
                                <div class="border rounded-3 pw-shadow-3 p-5 mt-7">
                                    <p>
                                        {<br>  "ErrorCode": -1,<br>  "Message": "Hata oluştu::System.FormatException: Input string was not in a correct format.\r\n   at System.Number.StringToNumber(String str, NumberStyles options, NumberBuffer& number, NumberFormatInfo info, Boolean parseDecimal)\r\n   at System.Number.ParseInt32(String s, NumberStyles style, NumberFormatInfo info)\r\n   at System.String.System.IConvertible.ToInt32(IFormatProvider provider)\r\n   at System.Convert.ChangeType(Object value, Type conversionType, IFormatProvider provider)\r\n   at Paperwork.Web.Mvc.Areas.Design.Models.WebService.executeSoap(WSService service, String MethodName, List`1 inputs, String objectId)\r\n   at Paperwork.Web.Mvc.Areas.Design.Models.WebService.ExecuteService(String serviceName, String MethodName, List`1 inputs, String objectId)\r\n   at Paperwork.Web.Mvc.Areas.Design.Controllers.WebServicesController.ExecuteService(String serviceName, String MethodName, List`1 inputs, String objectId)"<br>}
                                    </p>
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
            <div class="row mt-5">
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

<script>
    window.addEventListener('DOMContentLoaded', () => {
        ClassicEditor
        .create(document.querySelector('#aciklama'), {
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