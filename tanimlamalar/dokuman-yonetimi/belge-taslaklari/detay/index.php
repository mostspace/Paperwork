<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/header.php'; ?>

<!--begin::Wrapper-->
<div class="app-wrapper flex-column flex-row-fluid p-6" id="kt_app_wrapper">

  <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/sidebar.php'; ?>
  <!--begin::Main-->
  <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <!--begin::Content wrapper-->
    <div class="row">
      <div class="col col-md-11">
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
                <li class="breadcrumb-item text-muted">
                  <a href="/tanimlamalar/dokuman-yonetimi/belge-taslaklari/" class="text-muted text-hover-primary">Belge Taslakları</a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                  <span class="text-muted">/</span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item active">Avas Talep Döküman</li>
                <!--end::Item-->
              </ul>
              <!--end::Breadcrumb-->
              <!--begin::Title-->
              <h1 class="page-heading d-flex text-dark fw-bold fs-4 flex-column justify-content-center my-0">
                Avas Talep Döküman
              </h1>
              <!--end::Title-->
            </div>
            <!--end::Page title-->

          </div>
          <!--end::Toolbar container-->
        </div>
        <!--end::Toolbar-->

        <!--begin::Content -->
        <div id="kt_app_content" class="app-content flex-column-fluid">

          <!--begin::Nav wrapper-->
          <div class="table-reponsive overflow-x-auto mt-4">
            <!--begin::nav tabs-->
            <ul class="nav nav-tabs nav-line-tabs fs-6">
              <!--begin::Nav item-->
              <li class="nav-item">
                <a class="nav-link mx-0 py-3 px-10 fs-base rounded-0 active fw-medium" data-bs-toggle="tab" href="#pw_belge_taslaklari_detaylar">Detaylar</a>
              </li>
              <!--end::Nav item-->

              <!--begin::Nav item-->
              <li class="nav-item">
                <a class="nav-link py-3 px-10 mx-0 fs-base fw-medium rounded-0 pw-text-neutral-500" data-bs-toggle="tab" href="#pw_belge_taslaklari_editor">Editör</a>
              </li>
              <!--end::Nav item-->
            </ul>
            <!--end::nav tabs-->
          </div>
          <!--end::Nav wrapper-->
          <!--begin::Nav contents-->
          <div class="tab-content pw-dashboard-tab-content mt-6" id="belgeTaslaklariDetayTabs">
            <!--begin::Detaylar content-->
            <div class="tab-pane fade show active" id="pw_belge_taslaklari_detaylar" role="tabpanel">
              <!--begin::Form-->
              <form class="d-flex flex-column gap-13">
                <div class="col col-lg-9">
                  <!--begin::Table-->
                  <div class="table-responsive overflow-x-auto overflow-lg-hidden">
                    <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fw-bold fs-7">
                      <tbody>
                        <!--begin::Row-->
                        <tr>
                          <td><label for="pw_taslak_adi">Taslak Adı</label></td>
                          <td>
                            <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" id="pw_taslak_adi" name="pw_taslak_adi" required />
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td><label for="pw_degistirilebilir">Değiştirilebilir</label></td>
                          <td>
                            <div class="form-check form-switch form-check-custom form-check-solid">
                              <input class="form-check-input" type="checkbox" value="" id="pw_degistirilebilir" name="pw_degistirilebilir" />
                            </div>
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td><label for="pw_kullaniciya_goster">Kullanıcıya Göster</label></td>
                          <td>
                            <div class="form-check form-switch form-check-custom form-check-solid">
                              <input class="form-check-input" type="checkbox" value="" id="pw_kullaniciya_goster" name="pw_kullaniciya_goster" />
                            </div>
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td><label for="pw_yetki_seti">Yetki Seti</label></td>
                          <td>
                            <select id="pw_yetki_seti" class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2" data-placeholder="Seçim yapın">
                              <option></option>
                              <option value="1">Yetki Seti 1</option>
                            </select>
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td><label for="pw_tasarim_yetki_seti">Tasarım Yetki Seti</label></td>
                          <td>
                          <input type="password" class="form-control form-control-solid py-3 px-4 fs-8" id="pw_tasarim_yetki_seti" name="pw_tasarim_yetki_seti" value="Avans Talep Döküman" required />
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td><label for="pw_tip">Tip</label></td>
                          <td>
                            <select id="pw_tip" class="form-select form-select-solid fs-8 py-3 px-4" data-control="select2" data-placeholder="Seçim yapın" data-hide-search="true">
                              <option></option>
                              <option value="1">Tip 1</option>
                            </select>
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td><label for="pw_aciklama">Açıklama</label></td>
                          <td>
                            <textarea class="form-control form-control-solid fs-8 py-3 px-4" rows="3" id="pw_aciklama" name="pw_aciklama" placeholder="Açıklama..."></textarea>
                          </td>
                        </tr>
                        <!--end::Row-->
                      </tbody>
                    </table>
                  </div>
                  <!--end::Table-->
                </div>
                <!--begin::Form footer-->
                <div class="d-flex align-items-center justify-content-end gap-3 border-top pw-border-stroke pt-5">
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
            <!--end::Detaylar content-->
          
            <!--begin::Editor content-->
            <div class="tab-pane fade" id="pw_belge_taslaklari_editor" role="tabpanel"></div>
            <!--end::Editor content-->
          </div>
          <!--end::Nav contents-->
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