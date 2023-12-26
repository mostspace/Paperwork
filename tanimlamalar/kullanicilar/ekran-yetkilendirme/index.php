<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/header.php'; ?>

<!--begin::Wrapper-->
<div class="app-wrapper flex-column flex-row-fluid p-6" id="kt_app_wrapper">

  <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/sidebar.php'; ?>
  <!--begin::Main-->
  <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <!--begin::Content wrapper-->
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
                <li class="breadcrumb-item active">Ekran Yetkilendirme</li>
                <!--end::Item-->
              </ul>
              <!--end::Breadcrumb-->
              <!--begin::Title-->
              <h1 class="page-heading d-flex text-dark fw-bold fs-4 flex-column justify-content-center my-0">
                Ekran Yetkilendirme
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
          <!--begin::Tabs-->
          <!--begin::Tabs nav-->
          <ul class="nav nav-tabs nav-line-tabs px-8 mb-5 fs-6" role="tablist">
            <li class="nav-item" role="presentation">
              <a class="nav-link fw-medium py-3 px-8 me-0 active" data-bs-toggle="tab" href="#pw_tab_pane_islemler" aria-selected="true" role="tab">İşlemler</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link fw-medium py-3 px-8 me-0" data-bs-toggle="tab" href="#pw_tab_pane_sistem_raporlari" aria-selected="false" role="tab" tabindex="-1">Sistem Raporları</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link fw-medium py-3 px-8 me-0" data-bs-toggle="tab" href="#pw_tab_pane_sistem_tanimlamalar" aria-selected="false" role="tab" tabindex="-1">Tanımlamalar</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link fw-medium py-3 px-8 me-0" data-bs-toggle="tab" href="#pw_tab_pane_sistem_tedarikciler" aria-selected="false" role="tab" tabindex="-1">
                Tedarikçiler
              </a>
            </li>
          </ul>
          <!--end::Tabs nav-->

          <!--begin::Tabs content-->
          <div class="tab-content" id="myTabContent">
            <!--begin::İşlemler-->
            <div class="tab-pane fade show active" id="pw_tab_pane_islemler" role="tabpanel">
              <!--begin::Form-->
              <form>
                <!--begin::Form Table-->
                <div class="table-responsive">
                  <table class="table">
                    <!--begin::Table body-->
                    <tbody>
                      <!--begin::Row-->
                      <tr>
                        <td>
                          <label class="d-flex align-items-center gap-4" for="is-akis-yonetimi">
                            <span class="w-30px h-30px rounded-circle pw-bg-neutral-200"></span>
                            <span class="fs-8 fw-semibold">İş Akış Yönetimi</span>
                          </label>
                        </td>
                        <td>
                          <div class="d-flex flex-column gap-2">
                            <input id="is-akis-yonetimi" type="text" class="form-control pw-input-stroke py-3 px-4 fs-8 fw-medium" name="is-akis-yonetimi" placeholder="Eğitim" required />
                            <span class="fs-9 pw-text-neutral-700">*Dökümanlar + DOKUMANLAR</span>
                          </div>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td>
                          <label class="d-flex align-items-center gap-4" for="check-out-dokumanlar">
                            <span class="w-30px h-30px rounded-circle pw-bg-neutral-200"></span>
                            <span class="fs-8 fw-semibold">Check Out Dökümanlar</span>
                          </label>
                        </td>
                        <td>
                          <div class="d-flex flex-column gap-2">
                            <input id="check-out-dokumanlar" type="text" class="form-control pw-input-stroke py-3 px-4 fs-8 fw-medium" name="check-out-dokumanlar" placeholder="PW Test Ekibi" required />
                            <span class="fs-9 pw-text-neutral-700">*Platformda kullanılacak Base yetki setidir.</span>
                          </div>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td>
                          <label class="d-flex align-items-center gap-4" for="geri-donusum">
                            <span class="w-30px h-30px rounded-circle pw-bg-neutral-200"></span>
                            <span class="fs-8 fw-semibold">Geri Dönüşüm</span>
                          </label>
                        </td>
                        <td>
                          <div class="d-flex flex-column gap-2">
                            <input id="geri-donusum" type="text" class="form-control pw-input-stroke py-3 px-4 fs-8 fw-medium" name="geri-donusum" placeholder="PW Test Ekibi" required />
                            <span class="fs-9 pw-text-neutral-700">*Platformda kullanılacak Base yetki setidir.</span>
                          </div>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td>
                          <label class="d-flex align-items-center gap-4" for="servis-yonetimi">
                            <span class="w-30px h-30px rounded-circle pw-bg-neutral-200"></span>
                            <span class="fs-8 fw-semibold">Servis Yönetimi</span>
                          </label>
                        </td>
                        <td>
                          <div class="d-flex flex-column gap-2">
                            <input id="servis-yonetimi" type="text" class="form-control pw-input-stroke py-3 px-4 fs-8 fw-medium" name="servis-yonetimi" placeholder="PW Test Ekibi" required />
                            <span class="fs-9 pw-text-neutral-700">*Platformda kullanılacak Base yetki setidir.</span>
                          </div>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td>
                          <label class="d-flex align-items-center gap-4" for="mobil-cihaz-yonetimi">
                            <span class="w-30px h-30px rounded-circle pw-bg-neutral-200"></span>
                            <span class="fs-8 fw-semibold">Mobil Cihaz Yönetimi</span>
                          </label>
                        </td>
                        <td>
                          <div class="d-flex flex-column gap-2">
                            <input id="mobil-cihaz-yonetimi" type="text" class="form-control pw-input-stroke py-3 px-4 fs-8 fw-medium" name="mobil-cihaz-yonetimi" placeholder="PW Test Ekibi" required />
                            <span class="fs-9 pw-text-neutral-700">*Platformda kullanılacak Base yetki setidir.</span>
                          </div>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td>
                          <label class="d-flex align-items-center gap-4" for="vekalet-yonetimi">
                            <span class="w-30px h-30px rounded-circle pw-bg-neutral-200"></span>
                            <span class="fs-8 fw-semibold">Vekalet Yönetimi</span>
                          </label>
                        </td>
                        <td>
                          <div class="d-flex flex-column gap-2">
                            <input id="vekalet-yonetimi" type="text" class="form-control pw-input-stroke py-3 px-4 fs-8 fw-medium" name="vekalet-yonetimi" placeholder="PW Test Ekibi" required />
                            <span class="fs-9 pw-text-neutral-700">*Platformda kullanılacak Base yetki setidir.</span>
                          </div>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td>
                          <label class="d-flex align-items-center gap-4" for="outlook-kullanicilari">
                            <span class="w-30px h-30px rounded-circle pw-bg-neutral-200"></span>
                            <span class="fs-8 fw-semibold">Outlook Kullanıcıları</span>
                          </label>
                        </td>
                        <td>
                          <div class="d-flex flex-column gap-2">
                            <input id="outlook-kullanicilari" type="text" class="form-control pw-input-stroke py-3 px-4 fs-8 fw-medium" name="outlook-kullanicilari" placeholder="PW Test Ekibi" required />
                            <span class="fs-9 pw-text-neutral-700">*Platformda kullanılacak Base yetki setidir.</span>
                          </div>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td>
                          <label class="d-flex align-items-center gap-4" for="tasima">
                            <span class="w-30px h-30px rounded-circle pw-bg-neutral-200"></span>
                            <span class="fs-8 fw-semibold">Taşıma</span>
                          </label>
                        </td>
                        <td>
                          <div class="d-flex flex-column gap-2">
                            <input id="tasima" type="text" class="form-control pw-input-stroke py-3 px-4 fs-8 fw-medium" name="tasima" placeholder="PW Test Ekibi" required />
                            <span class="fs-9 pw-text-neutral-700">*Platformda kullanılacak Base yetki setidir.</span>
                          </div>
                        </td>
                      </tr>
                      <!--end::Row-->
                    </tbody>
                    <!--end:Table body-->

                    <!--begin::Table footer-->
                    <tfoot>
                      <tr>
                        <td class="pt-8" colspan="2" align="right">
                          <button type="reset" class="btn btn-active-light pw-btn-text-neutral-500 py-3 px-6 me-2">
                            Vazgeç
                          </button>
                          <button type="submit" class="btn btn-primary py-3 px-6">
                            Kaydet
                          </button>
                        </td>
                      </tr>
                    </tfoot>
                    <!--end::Table footer-->
                  </table>
                  <!--end::Form Table-->
                </div>
              </form>
              <!--end::Form-->
            </div>
            <!--end::İşlemler-->
            <!--begin::Sistem Raporları-->
            <div class="tab-pane fade " id="pw_tab_pane_sistem_raporlari" role="tabpanel">
              <!--begin::Form-->
              <form>
                <!--begin::Form Table-->
                <div class="table-responsive">
                  <table class="table">
                    <!--begin::Table body-->
                    <tbody>
                      <!--begin::Row-->
                      <tr>
                        <td>
                          <label class="d-flex align-items-center gap-4" for="is-akis-yonetimi">
                            <span class="w-30px h-30px rounded-circle pw-bg-neutral-200"></span>
                            <span class="fs-8 fw-semibold">Akış İstatistikleri</span>
                          </label>
                        </td>
                        <td>
                          <div class="d-flex flex-column gap-2">
                            <input id="is-akis-yonetimi" type="text" class="form-control pw-input-stroke py-3 px-4 fs-8 fw-medium" name="is-akis-yonetimi" placeholder="Eğitim" required />
                            <span class="fs-9 pw-text-neutral-700">*Dökümanlar + DOKUMANLAR</span>
                          </div>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td>
                          <label class="d-flex align-items-center gap-4" for="check-out-dokumanlar">
                            <span class="w-30px h-30px rounded-circle pw-bg-neutral-200"></span>
                            <span class="fs-8 fw-semibold">Arşiv</span>
                          </label>
                        </td>
                        <td>
                          <div class="d-flex flex-column gap-2">
                            <input id="check-out-dokumanlar" type="text" class="form-control pw-input-stroke py-3 px-4 fs-8 fw-medium" name="check-out-dokumanlar" placeholder="PW Test Ekibi" required />
                            <span class="fs-9 pw-text-neutral-700">*Platformda kullanılacak Base yetki setidir.</span>
                          </div>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td>
                          <label class="d-flex align-items-center gap-4" for="geri-donusum">
                            <span class="w-30px h-30px rounded-circle pw-bg-neutral-200"></span>
                            <span class="fs-8 fw-semibold">Belge İndeks</span>
                          </label>
                        </td>
                        <td>
                          <div class="d-flex flex-column gap-2">
                            <input id="geri-donusum" type="text" class="form-control pw-input-stroke py-3 px-4 fs-8 fw-medium" name="geri-donusum" placeholder="PW Test Ekibi" required />
                            <span class="fs-9 pw-text-neutral-700">*Platformda kullanılacak Base yetki setidir.</span>
                          </div>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td>
                          <label class="d-flex align-items-center gap-4" for="servis-yonetimi">
                            <span class="w-30px h-30px rounded-circle pw-bg-neutral-200"></span>
                            <span class="fs-8 fw-semibold">Çalışmış İşler</span>
                          </label>
                        </td>
                        <td>
                          <div class="d-flex flex-column gap-2">
                            <input id="servis-yonetimi" type="text" class="form-control pw-input-stroke py-3 px-4 fs-8 fw-medium" name="servis-yonetimi" placeholder="PW Test Ekibi" required />
                            <span class="fs-9 pw-text-neutral-700">*Platformda kullanılacak Base yetki setidir.</span>
                          </div>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td>
                          <label class="d-flex align-items-center gap-4" for="mobil-cihaz-yonetimi">
                            <span class="w-30px h-30px rounded-circle pw-bg-neutral-200"></span>
                            <span class="fs-8 fw-semibold">Elektronik Posta</span>
                          </label>
                        </td>
                        <td>
                          <div class="d-flex flex-column gap-2">
                            <input id="mobil-cihaz-yonetimi" type="text" class="form-control pw-input-stroke py-3 px-4 fs-8 fw-medium" name="mobil-cihaz-yonetimi" placeholder="PW Test Ekibi" required />
                            <span class="fs-9 pw-text-neutral-700">*Platformda kullanılacak Base yetki setidir.</span>
                          </div>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td>
                          <label class="d-flex align-items-center gap-4" for="vekalet-yonetimi">
                            <span class="w-30px h-30px rounded-circle pw-bg-neutral-200"></span>
                            <span class="fs-8 fw-semibold">Entegrasyon</span>
                          </label>
                        </td>
                        <td>
                          <div class="d-flex flex-column gap-2">
                            <input id="vekalet-yonetimi" type="text" class="form-control pw-input-stroke py-3 px-4 fs-8 fw-medium" name="vekalet-yonetimi" placeholder="PW Test Ekibi" required />
                            <span class="fs-9 pw-text-neutral-700">*Platformda kullanılacak Base yetki setidir.</span>
                          </div>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td>
                          <label class="d-flex align-items-center gap-4" for="outlook-kullanicilari">
                            <span class="w-30px h-30px rounded-circle pw-bg-neutral-200"></span>
                            <span class="fs-8 fw-semibold">Gelen eFaturalar</span>
                          </label>
                        </td>
                        <td>
                          <div class="d-flex flex-column gap-2">
                            <input id="outlook-kullanicilari" type="text" class="form-control pw-input-stroke py-3 px-4 fs-8 fw-medium" name="outlook-kullanicilari" placeholder="PW Test Ekibi" required />
                            <span class="fs-9 pw-text-neutral-700">*Platformda kullanılacak Base yetki setidir.</span>
                          </div>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td>
                          <label class="d-flex align-items-center gap-4" for="tasima">
                            <span class="w-30px h-30px rounded-circle pw-bg-neutral-200"></span>
                            <span class="fs-8 fw-semibold">Görüntülenmiş Belgeler</span>
                          </label>
                        </td>
                        <td>
                          <div class="d-flex flex-column gap-2">
                            <input id="tasima" type="text" class="form-control pw-input-stroke py-3 px-4 fs-8 fw-medium" name="tasima" placeholder="PW Test Ekibi" required />
                            <span class="fs-9 pw-text-neutral-700">*Platformda kullanılacak Base yetki setidir.</span>
                          </div>
                        </td>
                      </tr>
                      <!--end::Row-->
                    </tbody>
                    <!--end:Table body-->

                    <!--begin::Table footer-->
                    <tfoot>
                      <tr>
                        <td class="pt-8" colspan="2" align="right">
                          <button type="reset" class="btn btn-active-light pw-btn-text-neutral-500 py-3 px-6 me-2">
                            Vazgeç
                          </button>
                          <button type="submit" class="btn btn-primary py-3 px-6">
                            Kaydet
                          </button>
                        </td>
                      </tr>
                    </tfoot>
                    <!--end::Table footer-->
                  </table>
                  <!--end::Form Table-->
                </div>
              </form>
              <!--end::Form-->
            </div>
            <!--end::Sistem Raporları-->
            <!--begin::Tanımlamalar-->
            <div class="tab-pane fade " id="pw_tab_pane_sistem_tanimlamalar" role="tabpanel">
              <!--begin::Form-->
              <form>
                <!--begin::Form Table-->
                <div class="table-responsive">
                  <table class="table">
                    <!--begin::Table body-->
                    <tbody>
                      <!--begin::Row-->
                      <tr>
                        <td>
                          <label class="d-flex align-items-center gap-4" for="is-akis-yonetimi">
                            <span class="w-30px h-30px rounded-circle pw-bg-neutral-200"></span>
                            <span class="fs-8 fw-semibold">AD Tanımları</span>
                          </label>
                        </td>
                        <td>
                          <div class="d-flex flex-column gap-2">
                            <input id="is-akis-yonetimi" type="text" class="form-control pw-input-stroke py-3 px-4 fs-8 fw-medium" name="is-akis-yonetimi" placeholder="Eğitim" required />
                            <span class="fs-9 pw-text-neutral-700">*Dökümanlar + DOKUMANLAR</span>
                          </div>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td>
                          <label class="d-flex align-items-center gap-4" for="check-out-dokumanlar">
                            <span class="w-30px h-30px rounded-circle pw-bg-neutral-200"></span>
                            <span class="fs-8 fw-semibold">Belge Taslakları</span>
                          </label>
                        </td>
                        <td>
                          <div class="d-flex flex-column gap-2">
                            <input id="check-out-dokumanlar" type="text" class="form-control pw-input-stroke py-3 px-4 fs-8 fw-medium" name="check-out-dokumanlar" placeholder="PW Test Ekibi" required />
                            <span class="fs-9 pw-text-neutral-700">*Platformda kullanılacak Base yetki setidir.</span>
                          </div>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td>
                          <label class="d-flex align-items-center gap-4" for="geri-donusum">
                            <span class="w-30px h-30px rounded-circle pw-bg-neutral-200"></span>
                            <span class="fs-8 fw-semibold">Departmanlar</span>
                          </label>
                        </td>
                        <td>
                          <div class="d-flex flex-column gap-2">
                            <input id="geri-donusum" type="text" class="form-control pw-input-stroke py-3 px-4 fs-8 fw-medium" name="geri-donusum" placeholder="PW Test Ekibi" required />
                            <span class="fs-9 pw-text-neutral-700">*Platformda kullanılacak Base yetki setidir.</span>
                          </div>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td>
                          <label class="d-flex align-items-center gap-4" for="servis-yonetimi">
                            <span class="w-30px h-30px rounded-circle pw-bg-neutral-200"></span>
                            <span class="fs-8 fw-semibold">Ekran Yetkilendirme</span>
                          </label>
                        </td>
                        <td>
                          <div class="d-flex flex-column gap-2">
                            <input id="servis-yonetimi" type="text" class="form-control pw-input-stroke py-3 px-4 fs-8 fw-medium" name="servis-yonetimi" placeholder="PW Test Ekibi" required />
                            <span class="fs-9 pw-text-neutral-700">*Platformda kullanılacak Base yetki setidir.</span>
                          </div>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td>
                          <label class="d-flex align-items-center gap-4" for="mobil-cihaz-yonetimi">
                            <span class="w-30px h-30px rounded-circle pw-bg-neutral-200"></span>
                            <span class="fs-8 fw-semibold">Elektronik Posta</span>
                          </label>
                        </td>
                        <td>
                          <div class="d-flex flex-column gap-2">
                            <input id="mobil-cihaz-yonetimi" type="text" class="form-control pw-input-stroke py-3 px-4 fs-8 fw-medium" name="mobil-cihaz-yonetimi" placeholder="PW Test Ekibi" required />
                            <span class="fs-9 pw-text-neutral-700">*Platformda kullanılacak Base yetki setidir.</span>
                          </div>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td>
                          <label class="d-flex align-items-center gap-4" for="vekalet-yonetimi">
                            <span class="w-30px h-30px rounded-circle pw-bg-neutral-200"></span>
                            <span class="fs-8 fw-semibold">Süreç Taslakları</span>
                          </label>
                        </td>
                        <td>
                          <div class="d-flex flex-column gap-2">
                            <input id="vekalet-yonetimi" type="text" class="form-control pw-input-stroke py-3 px-4 fs-8 fw-medium" name="vekalet-yonetimi" placeholder="PW Test Ekibi" required />
                            <span class="fs-9 pw-text-neutral-700">*Platformda kullanılacak Base yetki setidir.</span>
                          </div>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td>
                          <label class="d-flex align-items-center gap-4" for="outlook-kullanicilari">
                            <span class="w-30px h-30px rounded-circle pw-bg-neutral-200"></span>
                            <span class="fs-8 fw-semibold">Kabinet Tanımları</span>
                          </label>
                        </td>
                        <td>
                          <div class="d-flex flex-column gap-2">
                            <input id="outlook-kullanicilari" type="text" class="form-control pw-input-stroke py-3 px-4 fs-8 fw-medium" name="outlook-kullanicilari" placeholder="PW Test Ekibi" required />
                            <span class="fs-9 pw-text-neutral-700">*Platformda kullanılacak Base yetki setidir.</span>
                          </div>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td>
                          <label class="d-flex align-items-center gap-4" for="tasima">
                            <span class="w-30px h-30px rounded-circle pw-bg-neutral-200"></span>
                            <span class="fs-8 fw-semibold">SEDA™ Tanımları</span>
                          </label>
                        </td>
                        <td>
                          <div class="d-flex flex-column gap-2">
                            <input id="tasima" type="text" class="form-control pw-input-stroke py-3 px-4 fs-8 fw-medium" name="tasima" placeholder="PW Test Ekibi" required />
                            <span class="fs-9 pw-text-neutral-700">*Platformda kullanılacak Base yetki setidir.</span>
                          </div>
                        </td>
                      </tr>
                      <!--end::Row-->
                    </tbody>
                    <!--end:Table body-->

                    <!--begin::Table footer-->
                    <tfoot>
                      <tr>
                        <td class="pt-8" colspan="2" align="right">
                          <button type="reset" class="btn btn-active-light pw-btn-text-neutral-500 py-3 px-6 me-2">
                            Vazgeç
                          </button>
                          <button type="submit" class="btn btn-primary py-3 px-6">
                            Kaydet
                          </button>
                        </td>
                      </tr>
                    </tfoot>
                    <!--end::Table footer-->
                  </table>
                  <!--end::Form Table-->
                </div>
              </form>
              <!--end::Form-->
            </div>
            <!--end::Tanımlamalar-->
            <!--begin::Tedarikçiler-->
            <div class="tab-pane fade " id="pw_tab_pane_sistem_tedarikciler" role="tabpanel">
              <!--begin::Form-->
              <form>
                <!--begin::Form Table-->
                <div class="table-responsive">
                  <table class="table">
                    <!--begin::Table body-->
                    <tbody>
                      <!--begin::Row-->
                      <tr>
                        <td>
                          <label class="d-flex align-items-center gap-4" for="is-akis-yonetimi">
                            <span class="w-30px h-30px rounded-circle pw-bg-neutral-200"></span>
                            <span class="fs-8 fw-semibold">İş Akış Yönetimi</span>
                          </label>
                        </td>
                        <td>
                          <div class="d-flex flex-column gap-2">
                            <input id="is-akis-yonetimi" type="text" class="form-control pw-input-stroke py-3 px-4 fs-8 fw-medium" name="is-akis-yonetimi" placeholder="Eğitim" required />
                            <span class="fs-9 pw-text-neutral-700">*Dökümanlar + DOKUMANLAR</span>
                          </div>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td>
                          <label class="d-flex align-items-center gap-4" for="check-out-dokumanlar">
                            <span class="w-30px h-30px rounded-circle pw-bg-neutral-200"></span>
                            <span class="fs-8 fw-semibold">Check Out Dökümanlar</span>
                          </label>
                        </td>
                        <td>
                          <div class="d-flex flex-column gap-2">
                            <input id="check-out-dokumanlar" type="text" class="form-control pw-input-stroke py-3 px-4 fs-8 fw-medium" name="check-out-dokumanlar" placeholder="PW Test Ekibi" required />
                            <span class="fs-9 pw-text-neutral-700">*Platformda kullanılacak Base yetki setidir.</span>
                          </div>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td>
                          <label class="d-flex align-items-center gap-4" for="geri-donusum">
                            <span class="w-30px h-30px rounded-circle pw-bg-neutral-200"></span>
                            <span class="fs-8 fw-semibold">Geri Dönüşüm</span>
                          </label>
                        </td>
                        <td>
                          <div class="d-flex flex-column gap-2">
                            <input id="geri-donusum" type="text" class="form-control pw-input-stroke py-3 px-4 fs-8 fw-medium" name="geri-donusum" placeholder="PW Test Ekibi" required />
                            <span class="fs-9 pw-text-neutral-700">*Platformda kullanılacak Base yetki setidir.</span>
                          </div>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td>
                          <label class="d-flex align-items-center gap-4" for="servis-yonetimi">
                            <span class="w-30px h-30px rounded-circle pw-bg-neutral-200"></span>
                            <span class="fs-8 fw-semibold">Servis Yönetimi</span>
                          </label>
                        </td>
                        <td>
                          <div class="d-flex flex-column gap-2">
                            <input id="servis-yonetimi" type="text" class="form-control pw-input-stroke py-3 px-4 fs-8 fw-medium" name="servis-yonetimi" placeholder="PW Test Ekibi" required />
                            <span class="fs-9 pw-text-neutral-700">*Platformda kullanılacak Base yetki setidir.</span>
                          </div>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td>
                          <label class="d-flex align-items-center gap-4" for="mobil-cihaz-yonetimi">
                            <span class="w-30px h-30px rounded-circle pw-bg-neutral-200"></span>
                            <span class="fs-8 fw-semibold">Mobil Cihaz Yönetimi</span>
                          </label>
                        </td>
                        <td>
                          <div class="d-flex flex-column gap-2">
                            <input id="mobil-cihaz-yonetimi" type="text" class="form-control pw-input-stroke py-3 px-4 fs-8 fw-medium" name="mobil-cihaz-yonetimi" placeholder="PW Test Ekibi" required />
                            <span class="fs-9 pw-text-neutral-700">*Platformda kullanılacak Base yetki setidir.</span>
                          </div>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td>
                          <label class="d-flex align-items-center gap-4" for="vekalet-yonetimi">
                            <span class="w-30px h-30px rounded-circle pw-bg-neutral-200"></span>
                            <span class="fs-8 fw-semibold">Vekalet Yönetimi</span>
                          </label>
                        </td>
                        <td>
                          <div class="d-flex flex-column gap-2">
                            <input id="vekalet-yonetimi" type="text" class="form-control pw-input-stroke py-3 px-4 fs-8 fw-medium" name="vekalet-yonetimi" placeholder="PW Test Ekibi" required />
                            <span class="fs-9 pw-text-neutral-700">*Platformda kullanılacak Base yetki setidir.</span>
                          </div>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td>
                          <label class="d-flex align-items-center gap-4" for="outlook-kullanicilari">
                            <span class="w-30px h-30px rounded-circle pw-bg-neutral-200"></span>
                            <span class="fs-8 fw-semibold">Outlook Kullanıcıları</span>
                          </label>
                        </td>
                        <td>
                          <div class="d-flex flex-column gap-2">
                            <input id="outlook-kullanicilari" type="text" class="form-control pw-input-stroke py-3 px-4 fs-8 fw-medium" name="outlook-kullanicilari" placeholder="PW Test Ekibi" required />
                            <span class="fs-9 pw-text-neutral-700">*Platformda kullanılacak Base yetki setidir.</span>
                          </div>
                        </td>
                      </tr>
                      <!--end::Row-->

                      <!--begin::Row-->
                      <tr>
                        <td>
                          <label class="d-flex align-items-center gap-4" for="tasima">
                            <span class="w-30px h-30px rounded-circle pw-bg-neutral-200"></span>
                            <span class="fs-8 fw-semibold">Taşıma</span>
                          </label>
                        </td>
                        <td>
                          <div class="d-flex flex-column gap-2">
                            <input id="tasima" type="text" class="form-control pw-input-stroke py-3 px-4 fs-8 fw-medium" name="tasima" placeholder="PW Test Ekibi" required />
                            <span class="fs-9 pw-text-neutral-700">*Platformda kullanılacak Base yetki setidir.</span>
                          </div>
                        </td>
                      </tr>
                      <!--end::Row-->
                    </tbody>
                    <!--end:Table body-->

                    <!--begin::Table footer-->
                    <tfoot>
                      <tr>
                        <td class="pt-8" colspan="2" align="right">
                          <button type="reset" class="btn btn-active-light pw-btn-text-neutral-500 py-3 px-6 me-2">
                            Vazgeç
                          </button>
                          <button type="submit" class="btn btn-primary py-3 px-6">
                            Kaydet
                          </button>
                        </td>
                      </tr>
                    </tfoot>
                    <!--end::Table footer-->
                  </table>
                  <!--end::Form Table-->
                </div>
              </form>
              <!--end::Form-->
            </div>
            <!--end::Tedarikçiler-->
          </div>
          <!--end::Tabs content-->
          <!--end::Tabs-->
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

<!--begin::Drawers-->
<!--begin::History & Recent canvas trigger-->
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/history-drawer.php'; ?>
<!--end::History canvas-->
<!--end::Drawers-->

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/foot.php'; ?>