<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/header.php'; ?>

<!--begin::Wrapper-->
<div class="app-wrapper flex-column flex-row-fluid p-6" id="kt_app_wrapper">

  <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/sidebar.php'; ?>
  <!--begin::Main-->
  <div class="app-main flex-column flex-row-fluid p-8" id="kt_app_main">
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
                  <li class="breadcrumb-item active">Yetki Setleri</li>
                  <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-dark fw-bold fs-4 flex-column justify-content-center my-0">
                  Yeni Ekle
                </h1>
                <!--end::Title-->
              </div>
              <!--end::Page title-->

            </div>
            <!--end::Toolbar container-->
          </div>
          <!--end::Toolbar-->

          <!--begin::Content -->
          <div class="mb-8">
            <!--begin::Form-->
            <!--begin::Table-->
            <div class="table-responsive overflow-x-auto overflow-lg-hidden">
              <table class="table w-min-content w-100">
                <tbody>
                  <!--begin::Row-->
                  <tr>
                    <td>
                      <label class="form-label fs-base" for="pw_yetki_seti_adi">Yetki Seti Adı</label>
                    </td>
                    <td>
                      <input class="form-control form-control-solid fs-8 py-3 px-4" value="5S Audit Süreci-Denetim Sorumluları" id="pw_yetki_seti_adi" name="pw_yetki_seti_adi" required="required" />
                    </td>
                  </tr>
                  <!--end::Row-->

                  <!--begin::Row-->
                  <tr>
                    <td>
                      <div class="form-label fs-base">Kullanım Şekli</div>
                    </td>
                    <td>
                      <!--begin::Radio groups-->
                      <div class="d-flex align-items-center gap-6">
                        <!--begin::Radio button-->
                        <div class="form-check form-check-custom form-check-solid">
                          <input class="form-check-input bg-blue" type="radio" value="ozel" id="ozel" name="pw_kullanim_sekli" />
                          <label class="form-check-label pw-text-neutral-700 fs-8" for="ozel">
                            Özel
                          </label>
                        </div>
                        <!--end::Radio button-->

                        <!--begin::Radio button-->
                        <div class="form-check form-check-custom form-check-solid">
                          <input class="form-check-input bg-blue" type="radio" value="genel" id="genel" name="pw_kullanim_sekli" />
                          <label class="form-check-label pw-text-neutral-700 fs-8" for="genel">
                            Genel
                          </label>
                        </div>
                        <!--end::Radio button-->
                      </div>
                      <!--end::Radio groups-->
                    </td>
                  </tr>
                  <!--end::Row-->

                  <!--begin::Row-->
                  <tr>
                    <td>
                      <div class="form-label fs-base">Tipi</div>
                    </td>
                    <td>
                      <!--begin::Radio groups-->
                      <div class="d-flex align-items-center gap-6">
                        <!--begin::Radio button-->
                        <div class="form-check form-check-custom form-check-solid">
                          <input class="form-check-input bg-blue" type="radio" value="genel" id="genel2" name="pw_tipi" />
                          <label class="form-check-label pw-text-neutral-700 fs-8" for="genel">
                            Genel
                          </label>
                        </div>
                        <!--end::Radio button-->

                        <!--begin::Radio button-->
                        <div class="form-check form-check-custom form-check-solid">
                          <input class="form-check-input bg-blue" type="radio" value="tasarim" id="tasarim" name="pw_tipi" />
                          <label class="form-check-label pw-text-neutral-700 fs-8" for="tasarim">
                            Tasarım
                          </label>
                        </div>
                        <!--end::Radio button-->
                      </div>
                      <!--end::Radio groups-->
                    </td>
                  </tr>
                  <!--end::Row-->

                  <!--begin::Row-->
                  <tr>
                    <td>
                      <label class="form-label fs-base" for="pw_aciklama">Açıklama</label>
                    </td>
                    <td>
                      <textarea class="form-control form-control-solid fs-8 py-3 px-4" value="5S Audit Süreci-Denetim Sorumluları" id="pw_aciklama" name="pw_yetki_seti_adi" rows="6" cols="10"></textarea>
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
  <!--end::Content -->

</div>
</div>
<div class="row">
  <div class="col-12 col-md-10">
    <!--begin::Table Topbar-->
    <div class="d-flex flex-column gap-5 mb-5">
      <!--begin::Title-->
      <h2 class="pw-text-neutral-800 fs-8 fs-semibold">Erişim ve İşlem Yetkileri</h2>
      <!--end::Title-->
      <!--begin::Button-->
      <div>
        <button type="button" class="btn p-0 fs-9 fs-semibold d-inline-flex align-items-center gap-2" data-pw-toggle="table-selection-add" data-pw-target="pw_erisim_ve_islem_yetkileri_table" data-pw-select-label="Gruplar" data-pw-options="['admin', 'A departmanı', 'Akçelik Poc', 'Akçelik Poc', 'Akçelik Poc', 'Akçelik Poc', 'Akçelik Poc', 'Akçelik Poc']" data-pw-fw-icon="fa-solid fa-user-check">
          <div class="w-25px h-25px pw-bg-iconbg rounded-0.20rem d-inline-flex align-items-center justify-content-center">
            <i class="fa-solid fa-plus pw-text-primary-400"></i>
          </div>
          <span class="pw-text-black">Ekle</span>
        </button>
      </div>
      <!--end::Button-->
    </div>
    <!--end::Table Topbar-->
    <!--begin::Yetki Setleri Detay tablosu-->
    <div class="table-responsive overflow-x-auto rounded">
      <!--begin::Table light-->
      <table id="pw_erisim_ve_islem_yetkileri_table" class="table table-row-bordered border pw-table-border-gray table-rounded align-middle w-max-content min-w-100 gy-2 gx-9 gs-9">
        <thead>
          <tr class="fw-semibold fs-8 pw-text-neutral-700 pw-bg-neutral-100">
            <th class="py-3">Paylaşılan Kullanıcılar/Gruplar</th>
            <th class="py-3">Unvan/Açıklama</th>
            <th class="py-3">Paylaşım Yetkileri</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <!--begin::Row-->
          <tr class="fw-medium pw-text-neutral-700 fs-8">
            <td>
              <div class="d-flex align-items-center flex-nowrap gap-2">
                <div class="w-35px h-35px  d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                  <i class="fa-solid fa-user-check pw-text-primary-500"></i>
                </div>
                <div>
                  Nesne Sahibi
                </div>
              </div>
            </td>
            <td>-</td>
            <td>Yok</td>
            <td align="right">
              <a href="/tanimlamalar/kullanicilar/yetki-setleri/yeni-ekle/#yetki-seti" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5 me-2" data-bs-toggle="modal" data-bs-target="#yetki-seti">
                <i class="fa-solid fa-pen-to-square fs-7 text-primary"></i>
              </a>
              <a href="/tanimlamalar/kullanicilar/yetki-setleri/yeni-ekle/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                <i class="fa-solid fa-trash fs-7 text-primary"></i>
              </a>
            </td>
          </tr>
          <!--end::Row-->

          <!--begin::Row-->
          <tr class="fw-medium pw-text-neutral-700 fs-8">
            <td>
              <div class="d-flex align-items-center flex-nowrap gap-2">
                <div class="w-35px h-35px  d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                  <i class="fa-solid fa-user-check pw-text-primary-500"></i>
                </div>
                <div>
                  Bilet Kullnıcısı
                </div>
              </div>
            </td>
            <td>-</td>
            <td>Yok</td>
            <td align="right">
              <a href="/tanimlamalar/kullanicilar/yetki-setleri/yeni-ekle/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5 me-2">
                <i class="fa-solid fa-pen-to-square fs-7 text-primary"></i>
              </a>
              <a href="/tanimlamalar/kullanicilar/yetki-setleri/yeni-ekle/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                <i class="fa-solid fa-trash fs-7 text-primary"></i>
              </a>
            </td>
          </tr>
          <!--end::Row-->

          <!--begin::Row-->
          <tr class="fw-medium pw-text-neutral-700 fs-8">
            <td>
              <div class="d-flex align-items-center flex-nowrap gap-2">
                <div class="w-35px h-35px  d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                  <i class="fa-solid fa-user-check pw-text-primary-500"></i>
                </div>
                <div>
                  Bilet Kullnıcısı
                </div>
              </div>
            </td>
            <td>-</td>
            <td>Silme</td>
            <td align="right">
              <a href="/tanimlamalar/kullanicilar/yetki-setleri/yeni-ekle/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5 me-2">
                <i class="fa-solid fa-pen-to-square fs-7 text-primary"></i>
              </a>
              <a href="/tanimlamalar/kullanicilar/yetki-setleri/yeni-ekle/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                <i class="fa-solid fa-trash fs-7 text-primary"></i>
              </a>
            </td>
          </tr>
          <!--end::Row-->

          <!--begin::Row-->
          <tr class="fw-medium pw-text-neutral-700 fs-8">
            <td>
              <div class="d-flex align-items-center flex-nowrap gap-2">
                <div class="w-35px h-35px  d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                  <i class="fa-solid fa-user-check pw-text-primary-500"></i>
                </div>
                <div>
                  Bilet Kullnıcısı
                </div>
              </div>
            </td>
            <td>-</td>
            <td>Görme</td>
            <td align="right">
              <a href="/tanimlamalar/kullanicilar/yetki-setleri/yeni-ekle/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5 me-2">
                <i class="fa-solid fa-pen-to-square fs-7 text-primary"></i>
              </a>
              <a href="/tanimlamalar/kullanicilar/yetki-setleri/yeni-ekle/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                <i class="fa-solid fa-trash fs-7 text-primary"></i>
              </a>
            </td>
          </tr>
          <!--end::Row-->
        </tbody>
      </table>
      <!--end::Table light-->
      <!--begin::Table dark-->
      <table id="pw_erisim_ve_islem_yetkileri_table" class="table table-row-bordered border pw-dark-bg-table pw-table-border-gray table-rounded align-middle w-max-content min-w-100 gy-2 gx-9 gs-9 theme-dark-show">
        <thead>
          <tr class="fw-semibold fs-8 pw-text-neutral-700 pw-bg-neutral-100">
            <th class="py-3">Paylaşılan Kullanıcılar/Gruplar</th>
            <th class="py-3">Unvan/Açıklama</th>
            <th class="py-3">Paylaşım Yetkileri</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <!--begin::Row-->
          <tr class="fw-medium pw-text-neutral-700 fs-8">
            <td>
              <div class="d-flex align-items-center flex-nowrap gap-2">
                <div class="w-35px h-35px  d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                  <i class="fa-solid fa-user-check pw-text-primary-500"></i>
                </div>
                <div>
                  Nesne Sahibi
                </div>
              </div>
            </td>
            <td>-</td>
            <td>Yok</td>
            <td align="right">
            <a href="/tanimlamalar/kullanicilar/yetki-setleri/yeni-ekle/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5 me-2">
                <i class="fa-solid fa-pen-to-square fs-7 text-primary"></i>
              </a>
              <a href="/tanimlamalar/kullanicilar/yetki-setleri/yeni-ekle/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                <i class="fa-solid fa-trash fs-7 text-primary"></i>
              </a>
            </td>
          </tr>
          <!--end::Row-->

          <!--begin::Row-->
          <tr class="fw-medium pw-text-neutral-700 fs-8">
            <td>
              <div class="d-flex align-items-center flex-nowrap gap-2">
                <div class="w-35px h-35px  d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                  <i class="fa-solid fa-user-check pw-text-primary-500"></i>
                </div>
                <div>
                  Bilet Kullnıcısı
                </div>
              </div>
            </td>
            <td>-</td>
            <td>Yok</td>
            <td align="right">
              <a href="/tanimlamalar/kullanicilar/yetki-setleri/yeni-ekle/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5 me-2">
                <i class="fa-solid fa-pen-to-square fs-7 text-primary"></i>
              </a>
              <a href="/tanimlamalar/kullanicilar/yetki-setleri/yeni-ekle/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                <i class="fa-solid fa-trash fs-7 text-primary"></i>
              </a>
            </td>
          </tr>
          <!--end::Row-->

          <!--begin::Row-->
          <tr class="fw-medium pw-text-neutral-700 fs-8">
            <td>
              <div class="d-flex align-items-center flex-nowrap gap-2">
                <div class="w-35px h-35px  d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                  <i class="fa-solid fa-user-check pw-text-primary-500"></i>
                </div>
                <div>
                  Bilet Kullnıcısı
                </div>
              </div>
            </td>
            <td>-</td>
            <td>Silme</td>
            <td align="right">
              <a href="/tanimlamalar/kullanicilar/yetki-setleri/yeni-ekle/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5 me-2">
                <i class="fa-solid fa-pen-to-square fs-7 text-primary"></i>
              </a>
              <a href="/tanimlamalar/kullanicilar/yetki-setleri/yeni-ekle/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                <i class="fa-solid fa-trash fs-7 text-primary"></i>
              </a>
            </td>
          </tr>
          <!--end::Row-->

          <!--begin::Row-->
          <tr class="fw-medium pw-text-neutral-700 fs-8">
            <td>
              <div class="d-flex align-items-center flex-nowrap gap-2">
                <div class="w-35px h-35px  d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0">
                  <i class="fa-solid fa-user-check pw-text-primary-500"></i>
                </div>
                <div>
                  Bilet Kullnıcısı
                </div>
              </div>
            </td>
            <td>-</td>
            <td>Görme</td>
            <td align="right">
              <a href="/tanimlamalar/kullanicilar/yetki-setleri/yeni-ekle/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5 me-2">
                <i class="fa-solid fa-pen-to-square fs-7 text-primary"></i>
              </a>
              <a href="/tanimlamalar/kullanicilar/yetki-setleri/yeni-ekle/#" class="btn btn-icon pw-btn-bg-neutral-100 pw-btn-hover-bg-neutral-200 w-30px h-30px rounded-0.5">
                <i class="fa-solid fa-trash fs-7 text-primary"></i>
              </a>
            </td>
          </tr>
          <!--end::Row-->
        </tbody>
      </table>
      <!--end::Table dark-->
    </div>
    <!--end::Yetki Setleri Detay tablosu-->
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
  </div>
</div>
</form>
<!--end::Content wrapper-->
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/footer.php'; ?>
</div>
<!--end::Main-->

</div>
<!--end::Wrapper -->

<!--begin:Modal-->
<div class="modal fade" tabindex="-1" id="yetki-seti">
  <div class="modal-dialog modal-dialog-centered modal-lg mw-800px">
    <div class="modal-content">
      <!--begin::Modal header-->
      <div class="modal-header">
        <h3 class="modal-title">Yetki Seti</h3>
      </div>
      <!--end::Modal header-->

      <!--begin::Yetki seti form-->
      <form>
        <!--begin::Modal body-->
        <div class="modal-body p-0">
          <!--begin::Form content-->
          <div class="d-flex flex-column gap-8 p-7">
            <!--begin::Form part-->
            <div class="d-flex flex-column gap-9">
              <!--begin::Form check-->
              <div class="form-check">
                <input class="form-check-input bg-blue" type="checkbox" value="" id="temel_yetkiler" />
                <label class="form-check-label fs-8 pw-text-neutral-800" for="temel_yetkiler">
                  <span class="pw-text-brand fw-bold">Temel Yetkiler: </span>
                  İlgili kayıt üzerindeki yetkiler bu bölümden belirlenir.
                </label>
              </div>
              <!--end::Form check-->

              <!--begin::Form check group-->
              <div class="d-flex align-items-center justify-content-between gap-6">
                <!--begin::Form check-->
                <div class="form-check">
                  <input class="form-check-input bg-blue" type="checkbox" value="" id="gorme" />
                  <label class="form-check-label fs-8 fw-semibold pw-text-neutral-500" for="gorme">
                    Görme
                  </label>
                </div>
                <!--end::Form check-->

                <!--begin::Form check-->
                <div class="form-check">
                  <input class="form-check-input bg-blue" type="checkbox" value="" id="okuma" />
                  <label class="form-check-label fs-8 fw-semibold pw-text-neutral-500" for="okuma">
                    Okuma
                  </label>
                </div>
                <!--end::Form check-->

                <!--begin::Form check-->
                <div class="form-check">
                  <input class="form-check-input bg-blue" type="checkbox" value="" id="versiyonlama" />
                  <label class="form-check-label fs-8 fw-semibold pw-text-neutral-500" for="versiyonlama">
                    Versiyonlama
                  </label>
                </div>
                <!--end::Form check-->

                <!--begin::Form check-->
                <div class="form-check">
                  <input class="form-check-input bg-blue" type="checkbox" value="" id="yazma" />
                  <label class="form-check-label fs-8 fw-semibold pw-text-neutral-500" for="yazma">
                    Yazma
                  </label>
                </div>
                <!--end::Form check-->

                <!--begin::Form check-->
                <div class="form-check">
                  <input class="form-check-input bg-blue" type="checkbox" value="" id="silme" />
                  <label class="form-check-label fs-8 fw-semibold pw-text-neutral-500" for="silme">
                    Silme
                  </label>
                </div>
                <!--end::Form check-->
              </div>
              <!--end::Form check group-->
            </div>
            <!--end::Form part-->

            <div class="separator"></div>

            <!--begin::Form part-->
            <div class="d-flex flex-column gap-6">
              <!--begin::Form check-->
              <div class="form-check">
                <input class="form-check-input bg-blue" type="checkbox" value="" id="belgeler" />
                <label class="form-check-label fs-8 pw-text-neutral-800" for="belgeler">
                  <span class="pw-text-brand fw-bold">Belgeler: </span>
                  Belge üzerindeki yetkiler bu bölümden belirlenir.
                </label>
              </div>
              <!--end::Form check-->

              <!--begin::Form check group-->
              <div class="row g-4">
                <!--begin::Form check-->
                <div class="col-12 col-sm-6 col-md-4">
                  <div class="form-check">
                    <input class="form-check-input bg-blue" type="checkbox" value="" id="diske_kaydedilebilir" />
                    <label class="form-check-label fs-8 fw-semibold pw-text-neutral-500" for="diske_kaydedilebilir">
                      Diske kaydedilebilir
                    </label>
                  </div>
                </div>
                <!--end::Form check-->

                <!--begin::Form check-->
                <div class="col-12 col-sm-6 col-md-4">
                  <div class="form-check">
                    <input class="form-check-input bg-blue" type="checkbox" value="" id="yetkilendirme_yapabilir" />
                    <label class="form-check-label fs-8 fw-semibold pw-text-neutral-500" for="yetkilendirme_yapabilir">
                      Yetkilendirme yapabilir
                    </label>
                  </div>
                </div>
                <!--end::Form check-->

                <!--begin::Form check-->
                <div class="col-12 col-sm-6 col-md-4">
                  <div class="form-check">
                    <input class="form-check-input bg-blue" type="checkbox" value="" id="imzalayabilir" />
                    <label class="form-check-label fs-8 fw-semibold pw-text-neutral-500" for="imzalayabilir">
                      İmzalayabilir
                    </label>
                  </div>
                </div>
                <!--end::Form check-->

                <!--begin::Form check-->
                <div class="col-12 col-sm-6 col-md-4">
                  <div class="form-check">
                    <input class="form-check-input bg-blue" type="checkbox" value="" id="elektronik_posta_gonderebilir" />
                    <label class="form-check-label fs-8 fw-semibold pw-text-neutral-500" for="elektronik_posta_gonderebilir">
                      Elektronik posta gönderebilir
                    </label>
                  </div>
                </div>
                <!--end::Form check-->

                <!--begin::Form check-->
                <div class="col-12 col-sm-6 col-md-4">
                  <div class="form-check">
                    <input class="form-check-input bg-blue" type="checkbox" value="" id="yaziciya_gonderebilir" />
                    <label class="form-check-label fs-8 fw-semibold pw-text-neutral-500" for="yaziciya_gonderebilir">
                      Yazıcıya gönderebilir
                    </label>
                  </div>
                </div>
                <!--end::Form check-->

                <!--begin::Form check-->
                <div class="col-12 col-sm-6 col-md-4">
                  <div class="form-check">
                    <input class="form-check-input bg-blue" type="checkbox" value="" id="kisisel_verileri_alabilir" />
                    <label class="form-check-label fs-8 fw-semibold pw-text-neutral-500" for="kisisel_verileri_alabilir">
                      Kişisel verileri alabilir
                    </label>
                  </div>
                </div>
                <!--end::Form check-->
              </div>
              <!--end::Form check group-->
            </div>
            <!--end::Form part-->

          </div>
          <!--end::Form content-->
        </div>
        <!--end::Modal body-->

        <!--begin::Modal footer-->
        <div class="modal-footer border-0 pt-0">
          <button type="button" class="btn btn-active-light pw-btn-text-neutral-500 py-2 px-4 me-2 fs-8" data-bs-dismiss="modal">
            İptal Et
          </button>
          <button class="btn btn-primary py-2 px-4 fs-8">
            Tamam
          </button>
        </div>
        <!--end::Modal footer-->
      </form>
      <!--end::Yetki seti form-->
    </div>
  </div>
</div>
<!--end::Modal-->

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/history-drawer.php'; ?>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/foot.php'; ?>