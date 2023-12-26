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
                <li class="breadcrumb-item active">Belge Taslakları</li>
                <!--end::Item-->
              </ul>
              <!--end::Breadcrumb-->
              <!--begin::Title-->
              <h1 class="page-heading d-flex text-dark fw-bold fs-4 flex-column justify-content-center my-0">
                Belge Taslakları
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
                            <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" id="pw_taslak_adi" name="pw_taslak_adi" value="Avans Talep Döküman" required />
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td><label for="pw_degistirilebilir">Değiştirilebilir</label></td>
                          <td>
                            <div class="form-check form-switch form-check-custom form-check-solid">
                              <input class="form-check-input" type="checkbox" value="" id="pw_degistirilebilir" name="pw_degistirilebilir" checked />
                            </div>
                          </td>
                        </tr>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <tr>
                          <td><label for="pw_kullaniciya_goster">Kullanıcıya Göster</label></td>
                          <td>
                            <div class="form-check form-switch form-check-custom form-check-solid">
                              <input class="form-check-input" type="checkbox" value="" id="pw_kullaniciya_goster" name="pw_kullaniciya_goster" checked />
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
                              <option value="AB976429" selected>AB976429</option>
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
                            <span class="fs-8 fw-semibold pw-text-neutral-600">Karbosan Avan Talep Belge</span>
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
                <div class="d-flex flex-column flex-sm-row align-items-center justify-content-between gap-5 border-top pw-border-stroke pt-5">
                  <button type="button" class="btn btn-outline btn-outline-primary fs-8 py-3 px-6 mw-sm-125px w-100" data-bs-toggle="modal" data-bs-target="#test">
                    Test
                  </button>
                  <div class="d-flex align-items-center justify-content-end gap-3 w-100 w-sm-auto">
                    <button type="reset" class="btn btn-active-light fs-8 py-3 px-6 w-100">
                      Vazgeç
                    </button>
                    <button type="submit" class="btn btn-primary fs-8 py-3 px-6 w-100">
                      Kaydet
                    </button>
                  </div>
                </div>
                <!--end::Form footer-->
              </form>
              <!--end::Form-->
            </div>
            <!--end::Detaylar content-->

            <!--begin::Editor content-->
            <div class="tab-pane fade" id="pw_belge_taslaklari_editor" role="tabpanel">
              <div class="d-flex flex-column gap-5">
                <div class="d-flex flex-column gap-1">
                  <!--begin::Title-->
                  <h2 class="pw-text-neutral-800 fs-5 fw-semibold">Karbosan Avans Talep Belge</h2>
                  <!--end::Title-->

                  <!--begin::Content-->
                  <div class="d-flex flex-row flex-wrap gap-13">
                    <!--begin::Item-->
                    <div class="d-flex flex-row flex-nowrap align-items-center gap-5">
                      <div class="d-flex flex-row flex-nowrap align-items-center gap-3">
                        <div class="w-35px h-35px pw-bg-neutral-200 rounded-pill"></div>
                        <div class="pw-text-neutral-600 fs-8 fw-medium">Avans Tutarı</div>
                      </div>
                      <a href="/tanimlamalar/dokuman-yonetimi/belge-taslaklari/yeni-ekle/#alan-tanimi" class="link-primary link-underline fs-9" data-bs-toggle="modal" data-bs-target="#alan-tanimi">
                        Ekle
                      </a>
                    </div>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <div class="d-flex flex-row flex-nowrap align-items-center gap-5">
                      <div class="d-flex flex-row flex-nowrap align-items-center gap-3">
                        <div class="w-35px h-35px pw-bg-neutral-200 rounded-pill"></div>
                        <div class="pw-text-neutral-600 fs-8 fw-medium">Talep Eden Personel</div>
                      </div>
                      <a href="/tanimlamalar/dokuman-yonetimi/belge-taslaklari/yeni-ekle/#alan-tanimi" class="link-primary link-underline fs-9" data-bs-toggle="modal" data-bs-target="#alan-tanimi">
                        Ekle
                      </a>
                    </div>
                    <!--end::Item-->
                  </div>
                  <!--end::Content-->
                  <div></div>
                </div>
              </div>
            </div>
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

<!--begin:Modal-->
<div class="modal fade" tabindex="-1" id="alan-tanimi">
  <div class="modal-dialog modal-dialog-centered modal-lg mw-650px">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Alan Tanımı</h3>
      </div>

      <!--begin::Form-->
      <form>

        <div class="modal-body">
          <!--begin::Table-->
          <div class="table-responsive">
            <table class="table table-borderless gy-3 gx-4">
              <tbody>
                <!--begin::Row-->
                <tr>
                  <td><label for="pw_belge_taslaklari_alan_adi">Alan Adı</label></td>
                  <td><input type="text" class="form-control form-control-solid py-3 px-4 fs-8" id="pw_belge_taslaklari_alan_adi" name="pw_belge_taslaklari_alan_adi" value="Takip Eden Personel" required /></td>
                </tr>
                <!--end::Row-->

                <!--begin::Row-->
                <tr>
                  <td><label for="pw_belge_taslaklari_alan_formati">Alan Formatı</label></td>
                  <td><input type="text" class="form-control form-control-solid py-3 px-4 fs-8" id="pw_belge_taslaklari_alan_formati" name="pw_belge_taslaklari_alan_formati" /></td>
                </tr>
                <!--end::Row-->

                <!--begin::Row-->
                <tr>
                  <td><label for="pw_belge_taslaklari_eger">Eğer</label></td>
                  <td>
                    <div class="form-check form-check-custom form-check-solid">
                      <input class="form-check-input" type="checkbox" value="" id="pw_belge_taslaklari_eger" checked />
                    </div>
                  </td>
                </tr>
                <!--end::Row-->

                <!--begin::Row-->
                <tr>
                  <td><label for="pw_belge_taslaklari_operator">Operatör</label></td>
                  <td>
                    <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" id="pw_belge_taslaklari_operator" name="pw_belge_taslaklari_operator" />
                  </td>
                </tr>
                <!--end::Row-->

                <!--begin::Row-->
                <tr>
                  <td><label for="pw_belge_taslaklari_deger">Değer</label></td>
                  <td>
                    <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" id="pw_belge_taslaklari_deger" name="pw_belge_taslaklari_deger" />
                  </td>
                </tr>
                <!--end::Row-->

                <!--begin::Row-->
                <tr>
                  <td><label for="pw_belge_taslaklari_dogruysa">Doğruysa</label></td>
                  <td>
                    <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" id="pw_belge_taslaklari_dogruysa" name="pw_belge_taslaklari_dogruysa" />
                  </td>
                </tr>
                <!--end::Row-->

                <!--begin::Row-->
                <tr>
                  <td><label for="pw_belge_taslaklari_yanlissa">Yanlışsa</label></td>
                  <td>
                    <input type="text" class="form-control form-control-solid py-3 px-4 fs-8" id="pw_belge_taslaklari_yanlissa" name="pw_belge_taslaklari_yanlissa" />
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
  </div>
</div>
<!--end::Modal-->

<!--begin:Modal-->
<div class="modal fade" tabindex="-1" id="test">
  <div class="modal-dialog modal-dialog-centered modal-lg mw-650px">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Test</h3>

        <!--begin::Close-->
        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2 w-35px h-35px" data-bs-dismiss="modal" aria-label="Close">
        <i class="fa-solid fa-xmark fs-6"></i>
        </div>
        <!--end::Close-->
      </div>

      <div class="modal-body">
        <div class="d-flex flex-column gap-10">
          <div class="d-flex justify-content-between">
            <label class="flex-sm-shrink-0 fs-8 fw-bolder" for="pw_belge_taslaklari_test_no">Test No</label>
            <input type="text" class="form-control form-control-solid mb-3 mw-md-375px w-100 fs-8" value="FF00200000003DDB" id="pw_belge_taslaklari_test_no" name="pw_belge_taslaklari_test_no" />
          </div>
          <!--begin::Test tablosu-->
      <div class="table-responsive overflow-x-auto rounded">
        <table class="table table-row-bordered border pw-dark-bg-table pw-table-border-gray pw-table-border-gray table-rounded align-middle w-max-content min-w-100 gy-2 gx-9 gs-9">
          <thead>
            <tr class="fw-semibold fs-8 pw-text-neutral-700 pw-bg-neutral-100">
              <th class="py-3">Nesne Adı</th>
              <th class="py-3">Sahibi</th>
              <th class="py-3">Yaratılış Tarihi</th>
            </tr>
          </thead>
          <tbody>
            <!--begin::Row-->
            <tr class="fw-medium pw-text-neutral-700 fs-8">
              <td>
                <div class="d-flex align-items-center flex-nowrap gap-2">
                  <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                    <i class="fa-solid fa-file-lines pw-text-primary"></i>
                  </div>
                  <div>
                    d
                  </div>
                </div>
              </td>
              <td>mbercin</td>
              <td>03.01.2023 15:48:55</td>
            </tr>
            <!--end::Row-->

            <!--begin::Row-->
            <tr class="fw-medium pw-text-neutral-700 fs-8">
              <td>
                <div class="d-flex align-items-center flex-nowrap gap-2">
                  <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                    <i class="fa-solid fa-file-lines pw-text-primary"></i>
                  </div>
                  <div>
                  test 2
                  </div>
                </div>
              </td>
              <td>btekeli</td>
              <td>13.12.2022 16:49:16</td>
            </tr>
            <!--end::Row-->

            <!--begin::Row-->
            <tr class="fw-medium pw-text-neutral-700 fs-8">
              <td>
                <div class="d-flex align-items-center flex-nowrap gap-2">
                  <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                    <i class="fa-solid fa-file-lines pw-text-primary"></i>
                  </div>
                  <div>
                  deneme
                  </div>
                </div>
              </td>
              <td>btekeli</td>
              <td>13.12.2022 16:47:41</td>
            </tr>
            <!--end::Row-->

            <!--begin::Row-->
            <tr class="fw-medium pw-text-neutral-700 fs-8">
              <td>
                <div class="d-flex align-items-center flex-nowrap gap-2">
                  <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                    <i class="fa-solid fa-file-lines pw-text-primary"></i>
                  </div>
                  <div>
                  test
                  </div>
                </div>
              </td>
              <td>btekeli</td>
              <td>13.12.2022 16:44:00</td>
            </tr>
            <!--end::Row-->

            <!--begin::Row-->
            <tr class="fw-medium pw-text-neutral-700 fs-8">
              <td>
                <div class="d-flex align-items-center flex-nowrap gap-2">
                  <div class="w-35px h-35px d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                    <i class="fa-solid fa-file-lines pw-text-primary"></i>
                  </div>
                  <div>
                  Mesut Gürbüz - 15
                  </div>
                </div>
              </td>
              <td>FlowUser</td>
              <td>25.11.2022 17:08:42</td>
            </tr>
            <!--end::Row-->
          </tbody>
        </table>
      </div>
      <!--end::Test tablosu-->
        </div>
      </div>

      <div class="modal-footer border-0">
        <button type="button" class="btn btn-active-light pw-btn-text-neutral-500 py-2 px-4 me-2 fs-8" data-bs-dismiss="modal">
          Vazgeç
        </button>
        <button class="btn btn-primary py-2 px-4 fs-8">
          Çalıştır
        </button>
      </div>
    </div>
  </div>
</div>
<!--end::Modal-->

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/foot.php'; ?>