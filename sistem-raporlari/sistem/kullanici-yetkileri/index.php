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
                  <a href="/sistem-raporlari/" class="text-muted text-hover-primary">Sistem Raporları</a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                  <span class="text-muted">/</span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item active">Kullanıcı Yetkileri</li>
                <!--end::Item-->
              </ul>
              <!--end::Breadcrumb-->
              <!--begin::Title-->
              <h1 class="page-heading d-flex text-dark fw-bold fs-4 flex-column justify-content-center my-0">
                Kullanıcı Yetkileri
              </h1>
              <!--end::Title-->
            </div>
            <!--end::Page title-->

          </div>
          <!--end::Toolbar container-->
        </div>
        <!--end::Toolbar-->

        <!--begin::Content -->
        <div class="row flex-lg-nowrap mb-20 me-20">
          <!--begin::Menu col-->
          <div class="col-12 w-lg-300px pb-5 border-lg-bottom-0 border-lg-end pw-border-stroke">
            <!--begin::Search wrapper-->
            <div id="kt_docs_search_handler_basic" class="w-100 mw-300px mb-3 pe-lg-4" data-kt-search-keypress="true"
              data-kt-search-min-length="2" data-kt-search-enter="true" data-kt-search-layout="inline">

              <!--begin::Input Form-->
              <form data-kt-search-element="form" class="position-relative" autocomplete="off">
                <!--begin::Hidden input(Added to disable form autocomplete)-->
                <input type="hidden">
                <!--end::Hidden input-->

                <!--begin::Icon-->
                <!--begin::Svg Icon | path: magnifier-->
                <div class="position-absolute top-50 translate-middle-y w-100 mw-20px mh-20px ms-2">
                  <i class="fa-solid fa-magnifying-glass fs-4"></i>
                </div>
                <!--end::Icon-->

                <!--begin::Input-->
                <input type="text" class="form-control pw-input-stroke py-2 ps-9 pe-2 fs-8" name="search" value=""
                  placeholder="Kullanıcı adı giriniz" data-kt-search-element="input">
                <!--end::Input-->

                <!--begin::Spinner-->
                <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5"
                  data-kt-search-element="spinner">
                  <span class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
                </span>
                <!--end::Spinner-->

                <!--begin::Reset-->
                <span
                  class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none"
                  data-kt-search-element="clear">

                  <!--begin::Svg Icon | path: cross-->
                </span>
                <!--end::Reset-->
              </form>
              <!--end::Form-->
            </div>
            <!--end::Search wrapper-->

            <!--begin::Menu wrapper-->
            <div class="scroll pe-2 me-lg-2 mh-450px" data-kt-scroll="true" data-kt-scroll-height="auto"
              data-kt-scroll-wrappers="#kt_example_js_content"
              data-kt-scroll-dependencies="#kt_example_js_header, #kt_example_js_footer, #kt_header"
              data-kt-scroll-offset="100px">
              <!--begin::Menu-->
              <div
                class="menu menu-rounded menu-column menu-active-bg menu-hover-bg menu-title-gray-700 pw-aside-menu fs-9 fw-semibold w-100 mt-5"
                id="#kt_aside_menu" data-kt-menu="true">
                <!--begin::Menu item-->
                <div class="menu-item">
                  <a href="/sistem-raporlari/sistem/kullanici-yetkileri#"
                    class="menu-link active border-3 border-start border-primary">
                    <span class="menu-icon w-auto">
                      <i class="fa-solid fa-user fs-6"></i>
                    </span>
                    <span class="menu-title">Abdullah Dayıoğlu</span>
                  </a>
                </div>
                <!--end::Menu item-->

                <!--begin::Menu item-->
                <div class="menu-item">
                  <a href="/sistem-raporlari/sistem/kullanici-yetkileri#" class="menu-link">
                    <span class="menu-icon w-auto">
                      <i class="fa-solid fa-user fs-6"></i>
                    </span>
                    <span class="menu-title">Abdullah Vidinlioğlu</span>
                  </a>
                </div>
                <!--end::Menu item-->

                <!--begin::Menu item-->
                <div class="menu-item">
                  <a href="/sistem-raporlari/sistem/kullanici-yetkileri#" class="menu-link">
                    <span class="menu-icon w-auto">
                      <i class="fa-solid fa-user fs-6"></i>
                    </span>
                    <span class="menu-title">Abdurrahim Çınaroğlu</span>
                  </a>
                </div>
                <!--end::Menu item-->

                <!--begin::Menu item-->
                <div class="menu-item">
                  <a href="/sistem-raporlari/sistem/kullanici-yetkileri#" class="menu-link">
                    <span class="menu-icon w-auto">
                      <i class="fa-solid fa-user fs-6"></i>
                    </span>
                    <span class="menu-title">Adem Aydın</span>
                  </a>
                </div>
                <!--end::Menu item-->

                <!--begin::Menu item-->
                <div class="menu-item">
                  <a href="/sistem-raporlari/sistem/kullanici-yetkileri#" class="menu-link">
                    <span class="menu-icon w-auto">
                      <i class="fa-solid fa-user fs-6"></i>
                    </span>
                    <span class="menu-title">Ahmet Devrim Topal</span>
                  </a>
                </div>
                <!--end::Menu item-->

                <!--begin::Menu item-->
                <div class="menu-item">
                  <a href="/sistem-raporlari/sistem/kullanici-yetkileri#" class="menu-link">
                    <span class="menu-icon w-auto">
                      <i class="fa-solid fa-user fs-6"></i>
                    </span>
                    <span class="menu-title">Adem Aydın</span>
                  </a>
                </div>
                <!--end::Menu item-->

                <!--begin::Menu item-->
                <div class="menu-item">
                  <a href="/sistem-raporlari/sistem/kullanici-yetkileri#" class="menu-link">
                    <span class="menu-icon w-auto">
                      <i class="fa-solid fa-user fs-6"></i>
                    </span>
                    <span class="menu-title">Ahmet Devrim Topal</span>
                  </a>
                </div>
                <!--end::Menu item-->

                <!--begin::Menu item-->
                <div class="menu-item">
                  <a href="/sistem-raporlari/sistem/kullanici-yetkileri#" class="menu-link">
                    <span class="menu-icon w-auto">
                      <i class="fa-solid fa-user fs-6"></i>
                    </span>
                    <span class="menu-title">Abdurrahim Çınaroğlu</span>
                  </a>
                </div>
                <!--end::Menu item-->

                <!--begin::Menu item-->
                <div class="menu-item">
                  <a href="/sistem-raporlari/sistem/kullanici-yetkileri#" class="menu-link">
                    <span class="menu-icon w-auto">
                      <i class="fa-solid fa-user fs-6"></i>
                    </span>
                    <span class="menu-title">Adem Aydın</span>
                  </a>
                </div>
                <!--end::Menu item-->

                <!--begin::Menu item-->
                <div class="menu-item">
                  <a href="/sistem-raporlari/sistem/kullanici-yetkileri#" class="menu-link">
                    <span class="menu-icon w-auto">
                      <i class="fa-solid fa-user fs-6"></i>
                    </span>
                    <span class="menu-title">Ahmet Devrim Topal</span>
                  </a>
                </div>
                <!--end::Menu item-->

                <!--begin::Menu item-->
                <div class="menu-item">
                  <a href="/sistem-raporlari/sistem/kullanici-yetkileri#" class="menu-link">
                    <span class="menu-icon w-auto">
                      <i class="fa-solid fa-user fs-6"></i>
                    </span>
                    <span class="menu-title">Abdurrahim Çınaroğlu</span>
                  </a>
                </div>
                <!--end::Menu item-->

                <!--begin::Menu item-->
                <div class="menu-item">
                  <a href="/sistem-raporlari/sistem/kullanici-yetkileri#" class="menu-link">
                    <span class="menu-icon w-auto">
                      <i class="fa-solid fa-user fs-6"></i>
                    </span>
                    <span class="menu-title">Ahmet Devrim Topal</span>
                  </a>
                </div>
                <!--end::Menu item-->

                <!--begin::Menu item-->
                <div class="menu-item">
                  <a href="/sistem-raporlari/sistem/kullanici-yetkileri#" class="menu-link">
                    <span class="menu-icon w-auto">
                      <i class="fa-solid fa-user fs-6"></i>
                    </span>
                    <span class="menu-title">Adem Aydın</span>
                  </a>
                </div>
                <!--end::Menu item-->

                <!--begin::Menu item-->
                <div class="menu-item">
                  <a href="/sistem-raporlari/sistem/kullanici-yetkileri#" class="menu-link">
                    <span class="menu-icon w-auto">
                      <i class="fa-solid fa-user fs-6"></i>
                    </span>
                    <span class="menu-title">Ahmet Devrim Topal</span>
                  </a>
                </div>
                <!--end::Menu item-->

                <!--begin::Menu item-->
                <div class="menu-item">
                  <a href="/sistem-raporlari/sistem/kullanici-yetkileri#" class="menu-link">
                    <span class="menu-icon w-auto">
                      <i class="fa-solid fa-user fs-6"></i>
                    </span>
                    <span class="menu-title">Abdurrahim Çınaroğlu</span>
                  </a>
                </div>
                <!--end::Menu item-->

                <!--begin::Menu item-->
                <div class="menu-item">
                  <a href="/sistem-raporlari/sistem/kullanici-yetkileri#" class="menu-link">
                    <span class="menu-icon w-auto">
                      <i class="fa-solid fa-user fs-6"></i>
                    </span>
                    <span class="menu-title">Adem Aydın</span>
                  </a>
                </div>
                <!--end::Menu item-->

                <!--begin::Menu item-->
                <div class="menu-item">
                  <a href="/sistem-raporlari/sistem/kullanici-yetkileri#" class="menu-link">
                    <span class="menu-icon w-auto">
                      <i class="fa-solid fa-user fs-6"></i>
                    </span>
                    <span class="menu-title">Ahmet Devrim Topal</span>
                  </a>
                </div>
                <!--end::Menu item-->

                <!--begin::Menu item-->
                <div class="menu-item">
                  <a href="/sistem-raporlari/sistem/kullanici-yetkileri#" class="menu-link">
                    <span class="menu-icon w-auto">
                      <i class="fa-solid fa-user fs-6"></i>
                    </span>
                    <span class="menu-title">Adem Aydın</span>
                  </a>
                </div>
                <!--end::Menu item-->

                <!--begin::Menu item-->
                <div class="menu-item">
                  <a href="/sistem-raporlari/sistem/kullanici-yetkileri#" class="menu-link">
                    <span class="menu-icon w-auto">
                      <i class="fa-solid fa-user fs-6"></i>
                    </span>
                    <span class="menu-title">Ahmet Devrim Topal</span>
                  </a>
                </div>
                <!--end::Menu item-->

                <!--begin::Menu item-->
                <div class="menu-item">
                  <a href="/sistem-raporlari/sistem/kullanici-yetkileri#" class="menu-link">
                    <span class="menu-icon w-auto">
                      <i class="fa-solid fa-user fs-6"></i>
                    </span>
                    <span class="menu-title">Adem Aydın</span>
                  </a>
                </div>
                <!--end::Menu item-->

                <!--begin::Menu item-->
                <div class="menu-item">
                  <a href="/sistem-raporlari/sistem/kullanici-yetkileri#" class="menu-link">
                    <span class="menu-icon w-auto">
                      <i class="fa-solid fa-user fs-6"></i>
                    </span>
                    <span class="menu-title">Ahmet Devrim Topal</span>
                  </a>
                </div>
                <!--end::Menu item-->

                <!--begin::Menu item-->
                <div class="menu-item">
                  <a href="/sistem-raporlari/sistem/kullanici-yetkileri#" class="menu-link">
                    <span class="menu-icon w-auto">
                      <i class="fa-solid fa-user fs-6"></i>
                    </span>
                    <span class="menu-title">Ahmet Devrim Topal</span>
                  </a>
                </div>
                <!--end::Menu item-->

                <!--begin::Menu item-->
                <div class="menu-item">
                  <a href="/sistem-raporlari/sistem/kullanici-yetkileri#" class="menu-link">
                    <span class="menu-icon w-auto">
                      <i class="fa-solid fa-user fs-6"></i>
                    </span>
                    <span class="menu-title">Ahmet Devrim Topal</span>
                  </a>
                </div>
                <!--end::Menu item-->
              </div>
              <!--end::Menu-->
            </div>
            <!--end::Menu wrapper-->

            <!--begin::User info card-->
            <div
              class="d-flex flex-column align-items-center gap-4 border pw-border-stroke rounded-3 pw-shadow-2 px-6 py-7 mt-6 text-start">
              <!--begin::User profile pic-->
              <div
                class="d-flex align-items-center justify-content-center w-40px h-40px rounded-pill pw-bg-primary-50 pw-text-primary-500 fs-4 fw-semibold">
                A</div>
              <!--end::User profile pic-->

              <!--begin::Title-->
              <div class="pw-text-neutral-900 fs-9 fw-bolder">Kullanıcı Bilgileri</div>
              <!--end::Title-->

              <!--begin::User info-->
              <table class="table table-borderless fs-9 text-black gx-1 gy-2 ">
                <!--begin::Row-->
                <tr>
                  <td class="fw-semibold">Kullanıcı Adı:</td>
                  <td>Abdullah Dayıoğlu</td>
                </tr>
                <!--end::Row-->

                <!--begin::Row-->
                <tr>
                  <td class="fw-semibold">Ünvanı:</td>
                  <td>Sorumlu</td>
                </tr>
                <!--end::Row-->

                <!--begin::Row-->
                <tr>
                  <td class="fw-semibold">E-Mail:</td>
                  <td>aracmontaj@knsotomotiv.com</td>
                </tr>
                <!--end::Row-->
              </table>
              <!--end::User info-->
            </div>
            <!--end::User info card-->
          </div>
          <!--end::Menu col-->

          <!--begin::Content col-->
          <div class="col pt-5 pt-lg-0 ps-lg-5">
            <!--begin::Kullanıcı yetkileri table-->
            <div class="table-responsive overflow-x-auto rounded">
              <!--begin::Table-->
              <table
                class="table table-row-bordered border pw-dark-bg-table pw-table-border-gray table-rounded align-middle w-max-content min-w-100 text-start">
                <!--begin::Table head-->
                <thead>
                  <tr class="fw-semibold fs-8 pw-text-neutral-700 pw-bg-neutral-100">
                    <th class="py-3 px-6">Yetki Seti</th>
                    <th class="px-0 mw-55px">
                      <div class="verticalTableHeader"><span>Görme</span></div>
                    </th>
                    <th class="px-0 mw-55px">
                      <div class="verticalTableHeader"><span>Okuma</span></div>
                    </th>
                    <th class="px-0 mw-55px">
                      <div class="verticalTableHeader"><span>Versiyonlama</span></div>
                    </th>
                    <th class="px-0 mw-55px">
                      <div class="verticalTableHeader"><span>Yazma</span></div>
                    </th>
                    <th class="px-0 mw-55px">
                      <div class="verticalTableHeader"><span>Silme</span></div>
                    </th>
                    <th class="px-0 mw-55px">
                      <div class="verticalTableHeader"><span>E-Mail Gönderme</span></div>
                    </th>
                    <th class="px-0 mw-55px">
                      <div class="verticalTableHeader"><span>Yetkilendirme İzni</span></div>
                    </th>
                    <th class="px-0 mw-55px">
                      <div class="verticalTableHeader"><span>Diske Keydetme</span></div>
                    </th>
                    <th class="px-0 mw-55px">
                      <div class="verticalTableHeader"><span>Çıktı Alma</span></div>
                    </th>
                    <th class="px-0 mw-55px">
                      <div class="verticalTableHeader"><span>İmza</span></div>
                    </th>
                    <th class="px-0 mw-55px">
                      <div class="verticalTableHeader"><span>Kişisel Veri İzni</span></div>
                    </th>
                  </tr>
                </thead>
                <!--end::Table head-->

                <!--begin::Table body-->
                <tbody>
                  <!--begin::Row-->
                  <tr class="fw-medium pw-text-neutral-700 fs-9">
                    <td class="py-6 px-6">5S Audi Süreci Denetim Sorumlulukları</td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                  </tr>
                  <!--end::Row-->

                  <!--begin::Row-->
                  <tr class="fw-medium pw-text-neutral-700 fs-9">
                    <td class="py-6 px-6">Admin Ekranı</td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-xmark pw-text-danger-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-xmark pw-text-danger-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                  </tr>
                  <!--end::Row-->

                  <!--begin::Row-->
                  <tr class="fw-medium pw-text-neutral-700 fs-9">
                    <td class="py-6 px-6">5S Audi Süreci Denetim Sorumlulukları</td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                  </tr>
                  <!--end::Row-->

                  <!--begin::Row-->
                  <tr class="fw-medium pw-text-neutral-700 fs-9">
                    <td class="py-6 px-6">5S Audi Süreci Denetim Sorumlulukları</td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                  </tr>
                  <!--end::Row-->

                  <!--begin::Row-->
                  <tr class="fw-medium pw-text-neutral-700 fs-9">
                    <td class="py-6 px-6">5S Audi Süreci Denetim Sorumlulukları</td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                  </tr>
                  <!--end::Row-->

                  <!--begin::Row-->
                  <tr class="fw-medium pw-text-neutral-700 fs-9">
                    <td class="py-6 px-6">5S Audi Süreci Denetim Sorumlulukları</td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                  </tr>
                  <!--end::Row-->

                  <!--begin::Row-->
                  <tr class="fw-medium pw-text-neutral-700 fs-9">
                    <td class="py-6 px-6">5S Audi Süreci Denetim Sorumlulukları</td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                  </tr>
                  <!--end::Row-->

                  <!--begin::Row-->
                  <tr class="fw-medium pw-text-neutral-700 fs-9">
                    <td class="py-6 px-6">5S Audi Süreci Denetim Sorumlulukları</td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                  </tr>
                  <!--end::Row-->

                  <!--begin::Row-->
                  <tr class="fw-medium pw-text-neutral-700 fs-9">
                    <td class="py-6 px-6">5S Audi Süreci Denetim Sorumlulukları</td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                  </tr>
                  <!--end::Row-->

                  <!--begin::Row-->
                  <tr class="fw-medium pw-text-neutral-700 fs-9">
                    <td class="py-6 px-6">5S Audi Süreci Denetim Sorumlulukları</td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                  </tr>
                  <!--end::Row-->

                  <!--begin::Row-->
                  <tr class="fw-medium pw-text-neutral-700 fs-9">
                    <td class="py-6 px-6">5S Audi Süreci Denetim Sorumlulukları</td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                    <td class="px-0 text-center"><i class="fa-solid fa-check pw-text-success-500"></i></td>
                  </tr>
                  <!--end::Row-->
                </tbody>
                <!--end::Table body-->
              </table>
              <!--end::Table-->
            </div>
            <!--end::Kullanıcı yetkileri table-->

          </div>
          <!--end::Content col-->
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
<!--begin::canvas trigger-->
<div
  class="position-fixed w-85px end-0 shadow d-flex flex-column align-items-center drawer-header-gap top-160px top-md-280px gap-6 p-6 pw-bg-drawer rounded-start-3 bg-white">
  <button id="pw_history_canvas_button" class="btn btn-text-primary btn-active-text-primary p-0">
    <i class="fa-solid fa-angles-left fs-3 pw-color-current"></i>
  </button>
  <button id="pw_history_canvas_button" class="btn btn-active-text-primary p-0">
    <i class="fa-solid fa-box-archive fs-3 pw-color-current"></i>
  </button>
  <button id="pw_history_canvas_button" class="btn btn-active-text-primary p-0">
    <i class="fa-solid fa-wave-pulse fs-3 pw-color-current"></i>
  </button>
</div>
<!--end::canvas trigger-->
<!--begin::Canvas-->
<div class="shadow drawer-header-gap flex-column gap-6 py-5 rounded-start-3" data-kt-drawer="true"
  data-kt-drawer-activate="true" data-kt-drawer-toggle="#pw_history_canvas_button"
  data-kt-drawer-close="#pw_history_canvas_close_btn" data-kt-drawer-overlay="false" data-kt-drawer-width="454px">
  <!--begin::Canvas header-->
  <div class="d-flex align-items-center justify-content-between gap-2 border-bottom pw-border-stroke">
    <!--begin::Canvas tabs-->
    <div class="nav nav-tabs nav-line-tabs fs-6 border-0 ps-5 gap-4" role="tablist">
      <!--begin::Tab item-->
      <li class="nav-item" role="presentation">
        <a class="nav-link mx-0 p-3 fs-base rounded-0 fw-bold active" data-bs-toggle="tab"
          href="#pw_tab_pane_arsiv" aria-selected="true" role="tab">Arşiv</a>
      </li>
      <!--end::Tab item-->

      <!--begin::Tab item-->
      <li class="nav-item" role="presentation">
        <a class="nav-link p-3 mx-0 fs-base fw-bold rounded-0 pw-text-neutral-500" data-bs-toggle="tab"
          href="#pw_tab_pane_akis" aria-selected="false" role="tab" tabindex="-1">Akış</a>
      </li>
      <!--end::Tab item-->
    </div>
    <!--end::Canvas tabs-->

    <!--begin::Canvas close-->
    <button id="pw_history_canvas_close_btn" class="btn btn-icon-muted p-0 flex-shrink-0 me-6" type="button">
      <i class="fa-solid fa-xmark fs-4"></i>
    </button>
    <!--end::Canvas close-->
  </div>
  <!--end::Canvas header-->

  <!--begin::Tab contents-->
  <div class="tab-content pw-dashboard-tab-content mt-0 px-7" id="tableTabContents">
    <!--begin::Arsiv content-->
    <div class="tab-pane fade active show" id="pw_tab_pane_arsiv" role="tabpanel">
      <!--begin::Arsiv wrapper-->
      <div class="d-flex flex-column gap-3">
        <!--begin::Arsiv item-->
        <div class="d-flex align-items-center justify-content-between gap-4">
          <div class="d-flex align-items-center gap-3">
            <i class="fa-solid fa-h pw-text-neutral-500"></i>
            <span class="pw-text-primary-900 fs-8 fw-medium">Akfen Form Kabineti</span>
          </div>

          <!--begin::Item info-->
          <div class="d-flex align-items-center gap-2">
            <!--begin::Drive-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-hard-drive pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::Drive-->

            <!--begin::File-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-file pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::File-->
          </div>
          <!--end::Item info-->
        </div>
        <!--end::Arsiv item-->

        <!--begin::Arsiv item-->
        <div class="d-flex align-items-center justify-content-between gap-4">
          <div class="d-flex align-items-center gap-3">
            <i class="fa-solid fa-flag pw-text-neutral-500"></i>
            <span class="pw-text-primary-900 fs-8 fw-medium">Aksiyon Belgeleri</span>
          </div>

          <!--begin::Item info-->
          <div class="d-flex align-items-center gap-2">
            <!--begin::Drive-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-hard-drive pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::Drive-->

            <!--begin::File-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-file pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::File-->
          </div>
          <!--end::Item info-->
        </div>
        <!--end::Arsiv item-->

        <!--begin::Arsiv item-->
        <div class="d-flex align-items-center justify-content-between gap-4">
          <div class="d-flex align-items-center gap-3">
            <i class="fa-solid fa-flag pw-text-neutral-500"></i>
            <span class="pw-text-primary-900 fs-8 fw-medium">Aksiyon Takip</span>
          </div>

          <!--begin::Item info-->
          <div class="d-flex align-items-center gap-2">
            <!--begin::Drive-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-hard-drive pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::Drive-->

            <!--begin::File-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-file pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::File-->
          </div>
          <!--end::Item info-->
        </div>
        <!--end::Arsiv item-->

        <!--begin::Arsiv item-->
        <div class="d-flex align-items-center justify-content-between gap-4">
          <div class="d-flex align-items-center gap-3">
            <i class="fa-solid fa-a pw-text-neutral-500"></i>
            <span class="pw-text-primary-900 fs-8 fw-medium">Alıcı Cari Hesap Açma DK</span>
          </div>

          <!--begin::Item info-->
          <div class="d-flex align-items-center gap-2">
            <!--begin::Drive-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-hard-drive pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::Drive-->

            <!--begin::File-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-file pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::File-->
          </div>
          <!--end::Item info-->
        </div>
        <!--end::Arsiv item-->

        <!--begin::Arsiv item-->
        <div class="d-flex align-items-center justify-content-between gap-4">
          <div class="d-flex align-items-center gap-3">
            <i class="fa-solid fa-flag pw-text-neutral-500"></i>
            <span class="pw-text-primary-900 fs-8 fw-medium">Aksiyon Talebi</span>
          </div>

          <!--begin::Item info-->
          <div class="d-flex align-items-center gap-2">
            <!--begin::Drive-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-hard-drive pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::Drive-->

            <!--begin::File-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-file pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::File-->
          </div>
          <!--end::Item info-->
        </div>
        <!--end::Arsiv item-->

        <!--begin::Arsiv item-->
        <div class="d-flex align-items-center justify-content-between gap-4">
          <div class="d-flex align-items-center gap-3">
            <i class="fa-solid fa-motorcycle pw-text-neutral-500"></i>
            <span class="pw-text-primary-900 fs-8 fw-medium">Aktif Nesneler Süreci</span>
          </div>

          <!--begin::Item info-->
          <div class="d-flex align-items-center gap-2">
            <!--begin::Drive-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-hard-drive pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::Drive-->

            <!--begin::File-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-file pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::File-->
          </div>
          <!--end::Item info-->
        </div>
        <!--end::Arsiv item-->

        <!--begin::Arsiv item-->
        <div class="d-flex align-items-center justify-content-between gap-4">
          <div class="d-flex align-items-center gap-3">
            <i class="fa-solid fa-basket-shopping pw-text-neutral-500"></i>
            <span class="pw-text-primary-900 fs-8 fw-medium">Alt İş Akış Süreci</span>
          </div>

          <!--begin::Item info-->
          <div class="d-flex align-items-center gap-2">
            <!--begin::Drive-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-hard-drive pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::Drive-->

            <!--begin::File-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-file pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::File-->
          </div>
          <!--end::Item info-->
        </div>
        <!--end::Arsiv item-->

        <!--begin::Arsiv item-->
        <div class="d-flex align-items-center justify-content-between gap-4">
          <div class="d-flex align-items-center gap-3">
            <i class="fa-solid fa-folder pw-text-neutral-500"></i>
            <span class="pw-text-primary-900 fs-8 fw-medium">Araç Talebi</span>
          </div>

          <!--begin::Item info-->
          <div class="d-flex align-items-center gap-2">
            <!--begin::Drive-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-hard-drive pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::Drive-->

            <!--begin::File-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-file pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::File-->
          </div>
          <!--end::Item info-->
        </div>
        <!--end::Arsiv item-->

        <!--begin::Arsiv item-->
        <div class="d-flex align-items-center justify-content-between gap-4">
          <div class="d-flex align-items-center gap-3">
            <i class="fa-solid fa-fish pw-text-neutral-500"></i>
            <span class="pw-text-primary-900 fs-8 fw-medium">Araç Talebi Süreci</span>
          </div>

          <!--begin::Item info-->
          <div class="d-flex align-items-center gap-2">
            <!--begin::Drive-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-hard-drive pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::Drive-->

            <!--begin::File-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-file pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::File-->
          </div>
          <!--end::Item info-->
        </div>
        <!--end::Arsiv item-->

        <!--begin::Arsiv item-->
        <div class="d-flex align-items-center justify-content-between gap-4">
          <div class="d-flex align-items-center gap-3">
            <i class="fa-solid fa-check pw-text-neutral-500"></i>
            <span class="pw-text-primary-900 fs-8 fw-medium">Araç Talebi Süreci BD</span>
          </div>

          <!--begin::Item info-->
          <div class="d-flex align-items-center gap-2">
            <!--begin::Drive-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-hard-drive pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::Drive-->

            <!--begin::File-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-file pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::File-->
          </div>
          <!--end::Item info-->
        </div>
        <!--end::Arsiv item-->

        <!--begin::Arsiv item-->
        <div class="d-flex align-items-center justify-content-between gap-4">
          <div class="d-flex align-items-center gap-3">
            <i class="fa-solid fa-flag pw-text-neutral-500"></i>
            <span class="pw-text-primary-900 fs-8 fw-medium">Araştırma Süreci</span>
          </div>

          <!--begin::Item info-->
          <div class="d-flex align-items-center gap-2">
            <!--begin::Drive-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-hard-drive pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::Drive-->

            <!--begin::File-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-file pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::File-->
          </div>
          <!--end::Item info-->
        </div>
        <!--end::Arsiv item-->

        <!--begin::Arsiv item-->
        <div class="d-flex align-items-center justify-content-between gap-4">
          <div class="d-flex align-items-center gap-3">
            <i class="fa-solid fa-check pw-text-neutral-500"></i>
            <span class="pw-text-primary-900 fs-8 fw-medium">Avans Süreci</span>
          </div>

          <!--begin::Item info-->
          <div class="d-flex align-items-center gap-2">
            <!--begin::Drive-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-hard-drive pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::Drive-->

            <!--begin::File-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-file pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::File-->
          </div>
          <!--end::Item info-->
        </div>
        <!--end::Arsiv item-->

        <!--begin::Arsiv item-->
        <div class="d-flex align-items-center justify-content-between gap-4">
          <div class="d-flex align-items-center gap-3">
            <i class="fa-solid fa-gift pw-text-neutral-500"></i>
            <span class="pw-text-primary-900 fs-8 fw-medium">Avans Talep</span>
          </div>

          <!--begin::Item info-->
          <div class="d-flex align-items-center gap-2">
            <!--begin::Drive-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-hard-drive pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::Drive-->

            <!--begin::File-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-file pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::File-->
          </div>
          <!--end::Item info-->
        </div>
        <!--end::Arsiv item-->

        <!--begin::Arsiv item-->
        <div class="d-flex align-items-center justify-content-between gap-4">
          <div class="d-flex align-items-center gap-3">
            <i class="fa-solid fa-folder pw-text-neutral-500"></i>
            <span class="pw-text-primary-900 fs-8 fw-medium">Avans Talep Süreci</span>
          </div>

          <!--begin::Item info-->
          <div class="d-flex align-items-center gap-2">
            <!--begin::Drive-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-hard-drive pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::Drive-->

            <!--begin::File-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-file pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::File-->
          </div>
          <!--end::Item info-->
        </div>
        <!--end::Arsiv item-->

        <!--begin::Arsiv item-->
        <div class="d-flex align-items-center justify-content-between gap-4">
          <div class="d-flex align-items-center gap-3">
            <i class="fa-solid fa-b pw-text-neutral-500"></i>
            <span class="pw-text-primary-900 fs-8 fw-medium">Bilet Kullanıcısı</span>
          </div>

          <!--begin::Item info-->
          <div class="d-flex align-items-center gap-2">
            <!--begin::Drive-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-hard-drive pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::Drive-->

            <!--begin::File-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-file pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::File-->
          </div>
          <!--end::Item info-->
        </div>
        <!--end::Arsiv item-->

        <!--begin::Arsiv item-->
        <div class="d-flex align-items-center justify-content-between gap-4">
          <div class="d-flex align-items-center gap-3">
            <i class="fa-solid fa-folder pw-text-neutral-500"></i>
            <span class="pw-text-primary-900 fs-8 fw-medium">Body Süreci</span>
          </div>

          <!--begin::Item info-->
          <div class="d-flex align-items-center gap-2">
            <!--begin::Drive-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-hard-drive pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::Drive-->

            <!--begin::File-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-file pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::File-->
          </div>
          <!--end::Item info-->
        </div>
        <!--end::Arsiv item-->

        <!--begin::Arsiv item-->
        <div class="d-flex align-items-center justify-content-between gap-4">
          <div class="d-flex align-items-center gap-3">
            <i class="fa-solid fa-b pw-text-neutral-500"></i>
            <span class="pw-text-primary-900 fs-8 fw-medium">Boshoku Seyahat Talep</span>
          </div>

          <!--begin::Item info-->
          <div class="d-flex align-items-center gap-2">
            <!--begin::Drive-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-hard-drive pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::Drive-->

            <!--begin::File-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-file pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::File-->
          </div>
          <!--end::Item info-->
        </div>
        <!--end::Arsiv item-->

        <!--begin::Arsiv item-->
        <div class="d-flex align-items-center justify-content-between gap-4">
          <div class="d-flex align-items-center gap-3">
            <i class="fa-solid fa-b pw-text-neutral-500"></i>
            <span class="pw-text-primary-900 fs-8 fw-medium">Cari Hesap Açılış</span>
          </div>

          <!--begin::Item info-->
          <div class="d-flex align-items-center gap-2">
            <!--begin::Drive-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-hard-drive pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::Drive-->

            <!--begin::File-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-file pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::File-->
          </div>
          <!--end::Item info-->
        </div>
        <!--end::Arsiv item-->

        <!--begin::Arsiv item-->
        <div class="d-flex align-items-center justify-content-between gap-4">
          <div class="d-flex align-items-center gap-3">
            <i class="fa-solid fa-calendar-days pw-text-neutral-500"></i>
            <span class="pw-text-primary-900 fs-8 fw-medium">Communication Workflow</span>
          </div>

          <!--begin::Item info-->
          <div class="d-flex align-items-center gap-2">
            <!--begin::Drive-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-hard-drive pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::Drive-->

            <!--begin::File-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-file pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::File-->
          </div>
          <!--end::Item info-->
        </div>
        <!--end::Arsiv item-->

        <!--begin::Arsiv item-->
        <div class="d-flex align-items-center justify-content-between gap-4">
          <div class="d-flex align-items-center gap-3">
            <i class="fa-solid fa-flag pw-text-neutral-500"></i>
            <span class="pw-text-primary-900 fs-8 fw-medium">Customer Flow</span>
          </div>

          <!--begin::Item info-->
          <div class="d-flex align-items-center gap-2">
            <!--begin::Drive-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-hard-drive pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::Drive-->

            <!--begin::File-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-file pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::File-->
          </div>
          <!--end::Item info-->
        </div>
        <!--end::Arsiv item-->

        <!--begin::Arsiv item-->
        <div class="d-flex align-items-center justify-content-between gap-4">
          <div class="d-flex align-items-center gap-3">
            <i class="fa-solid fa-heart pw-text-neutral-500"></i>
            <span class="pw-text-primary-900 fs-8 fw-medium">Çalışan Oryantasyon Süreci</span>
          </div>

          <!--begin::Item info-->
          <div class="d-flex align-items-center gap-2">
            <!--begin::Drive-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-hard-drive pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::Drive-->

            <!--begin::File-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-file pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::File-->
          </div>
          <!--end::Item info-->
        </div>
        <!--end::Arsiv item-->

        <!--begin::Arsiv item-->
        <div class="d-flex align-items-center justify-content-between gap-4">
          <div class="d-flex align-items-center gap-3">
            <i class="fa-solid fa-circle-plus pw-text-neutral-500"></i>
            <span class="pw-text-primary-900 fs-8 fw-medium">Dava Yönetimi</span>
          </div>

          <!--begin::Item info-->
          <div class="d-flex align-items-center gap-2">
            <!--begin::Drive-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-hard-drive pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::Drive-->

            <!--begin::File-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-file pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::File-->
          </div>
          <!--end::Item info-->
        </div>
        <!--end::Arsiv item-->

        <!--begin::Arsiv item-->
        <div class="d-flex align-items-center justify-content-between gap-4">
          <div class="d-flex align-items-center gap-3">
            <i class="fa-solid fa-minus pw-text-neutral-500"></i>
            <span class="pw-text-primary-900 fs-8 fw-medium">Ders Kayıt Süreci</span>
          </div>

          <!--begin::Item info-->
          <div class="d-flex align-items-center gap-2">
            <!--begin::Drive-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-hard-drive pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::Drive-->

            <!--begin::File-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-file pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::File-->
          </div>
          <!--end::Item info-->
        </div>
        <!--end::Arsiv item-->

        <!--begin::Arsiv item-->
        <div class="d-flex align-items-center justify-content-between gap-4">
          <div class="d-flex align-items-center gap-3">
            <i class="fa-solid fa-flag pw-text-neutral-500"></i>
            <span class="pw-text-primary-900 fs-8 fw-medium">Ders Kayıt Süreci</span>
          </div>

          <!--begin::Item info-->
          <div class="d-flex align-items-center gap-2">
            <!--begin::Drive-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-hard-drive pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::Drive-->

            <!--begin::File-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-file pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::File-->
          </div>
          <!--end::Item info-->
        </div>
        <!--end::Arsiv item-->

        <!--begin::Arsiv item-->
        <div class="d-flex align-items-center justify-content-between gap-4">
          <div class="d-flex align-items-center gap-3">
            <i class="fa-solid fa-circle-minus pw-text-neutral-500"></i>
            <span class="pw-text-primary-900 fs-8 fw-medium">Ders Kayıt Süreci</span>
          </div>

          <!--begin::Item info-->
          <div class="d-flex align-items-center gap-2">
            <!--begin::Drive-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-hard-drive pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::Drive-->

            <!--begin::File-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-file pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::File-->
          </div>
          <!--end::Item info-->
        </div>
        <!--end::Arsiv item-->

        <!--begin::Arsiv item-->
        <div class="d-flex align-items-center justify-content-between gap-4">
          <div class="d-flex align-items-center gap-3">
            <i class="fa-solid fa-circle-minus pw-text-neutral-500"></i>
            <span class="pw-text-primary-900 fs-8 fw-medium">Ders Kayıt Süreci</span>
          </div>

          <!--begin::Item info-->
          <div class="d-flex align-items-center gap-2">
            <!--begin::Drive-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-hard-drive pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::Drive-->

            <!--begin::File-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-file pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::File-->
          </div>
          <!--end::Item info-->
        </div>
        <!--end::Arsiv item-->

        <!--begin::Arsiv item-->
        <div class="d-flex align-items-center justify-content-between gap-4">
          <div class="d-flex align-items-center gap-3">
            <i class="fa-solid fa-circle-minus pw-text-neutral-500"></i>
            <span class="pw-text-primary-900 fs-8 fw-medium">Ders Kayıt Süreci</span>
          </div>

          <!--begin::Item info-->
          <div class="d-flex align-items-center gap-2">
            <!--begin::Drive-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-hard-drive pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::Drive-->

            <!--begin::File-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-file pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::File-->
          </div>
          <!--end::Item info-->
        </div>
        <!--end::Arsiv item-->

        <!--begin::Arsiv item-->
        <div class="d-flex align-items-center justify-content-between gap-4">
          <div class="d-flex align-items-center gap-3">
            <i class="fa-solid fa-flag pw-text-neutral-500"></i>
            <span class="pw-text-primary-900 fs-8 fw-medium">Ders Kayıt Süreci</span>
          </div>

          <!--begin::Item info-->
          <div class="d-flex align-items-center gap-2">
            <!--begin::Drive-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-hard-drive pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::Drive-->

            <!--begin::File-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-file pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::File-->
          </div>
          <!--end::Item info-->
        </div>
        <!--end::Arsiv item-->
      </div>
      <!--end::Arsiv wrapper-->
    </div>
    <!--end::Arsiv content-->

    <!--begin::Akis content-->
    <div class="tab-pane fade active show" id="pw_tab_pane_akis" role="tabpanel">
      <!--begin::Arsiv wrapper-->
      <div class="d-flex flex-column gap-3">
        <!--begin::Arsiv item-->
        <div class="d-flex align-items-center justify-content-between gap-4">
          <div class="d-flex align-items-center gap-3">
            <i class="fa-solid fa-h pw-text-neutral-500"></i>
            <span class="pw-text-primary-900 fs-8 fw-medium">Akfen Form Kabineti</span>
          </div>

          <!--begin::Item info-->
          <div class="d-flex align-items-center gap-2">
            <!--begin::Drive-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-hard-drive pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::Drive-->

            <!--begin::File-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-file pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::File-->
          </div>
          <!--end::Item info-->
        </div>
        <!--end::Arsiv item-->

        <!--begin::Arsiv item-->
        <div class="d-flex align-items-center justify-content-between gap-4">
          <div class="d-flex align-items-center gap-3">
            <i class="fa-solid fa-flag pw-text-neutral-500"></i>
            <span class="pw-text-primary-900 fs-8 fw-medium">Aksiyon Belgeleri</span>
          </div>

          <!--begin::Item info-->
          <div class="d-flex align-items-center gap-2">
            <!--begin::Drive-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-hard-drive pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::Drive-->

            <!--begin::File-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-file pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::File-->
          </div>
          <!--end::Item info-->
        </div>
        <!--end::Arsiv item-->

        <!--begin::Arsiv item-->
        <div class="d-flex align-items-center justify-content-between gap-4">
          <div class="d-flex align-items-center gap-3">
            <i class="fa-solid fa-flag pw-text-neutral-500"></i>
            <span class="pw-text-primary-900 fs-8 fw-medium">Aksiyon Takip</span>
          </div>

          <!--begin::Item info-->
          <div class="d-flex align-items-center gap-2">
            <!--begin::Drive-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-hard-drive pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::Drive-->

            <!--begin::File-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-file pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::File-->
          </div>
          <!--end::Item info-->
        </div>
        <!--end::Arsiv item-->

        <!--begin::Arsiv item-->
        <div class="d-flex align-items-center justify-content-between gap-4">
          <div class="d-flex align-items-center gap-3">
            <i class="fa-solid fa-a pw-text-neutral-500"></i>
            <span class="pw-text-primary-900 fs-8 fw-medium">Alıcı Cari Hesap Açma DK</span>
          </div>

          <!--begin::Item info-->
          <div class="d-flex align-items-center gap-2">
            <!--begin::Drive-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-hard-drive pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::Drive-->

            <!--begin::File-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-file pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::File-->
          </div>
          <!--end::Item info-->
        </div>
        <!--end::Arsiv item-->

        <!--begin::Arsiv item-->
        <div class="d-flex align-items-center justify-content-between gap-4">
          <div class="d-flex align-items-center gap-3">
            <i class="fa-solid fa-flag pw-text-neutral-500"></i>
            <span class="pw-text-primary-900 fs-8 fw-medium">Aksiyon Talebi</span>
          </div>

          <!--begin::Item info-->
          <div class="d-flex align-items-center gap-2">
            <!--begin::Drive-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-hard-drive pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::Drive-->

            <!--begin::File-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-file pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::File-->
          </div>
          <!--end::Item info-->
        </div>
        <!--end::Arsiv item-->

        <!--begin::Arsiv item-->
        <div class="d-flex align-items-center justify-content-between gap-4">
          <div class="d-flex align-items-center gap-3">
            <i class="fa-solid fa-motorcycle pw-text-neutral-500"></i>
            <span class="pw-text-primary-900 fs-8 fw-medium">Aktif Nesneler Süreci</span>
          </div>

          <!--begin::Item info-->
          <div class="d-flex align-items-center gap-2">
            <!--begin::Drive-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-hard-drive pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::Drive-->

            <!--begin::File-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-file pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::File-->
          </div>
          <!--end::Item info-->
        </div>
        <!--end::Arsiv item-->

        <!--begin::Arsiv item-->
        <div class="d-flex align-items-center justify-content-between gap-4">
          <div class="d-flex align-items-center gap-3">
            <i class="fa-solid fa-basket-shopping pw-text-neutral-500"></i>
            <span class="pw-text-primary-900 fs-8 fw-medium">Alt İş Akış Süreci</span>
          </div>

          <!--begin::Item info-->
          <div class="d-flex align-items-center gap-2">
            <!--begin::Drive-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-hard-drive pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::Drive-->

            <!--begin::File-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-file pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::File-->
          </div>
          <!--end::Item info-->
        </div>
        <!--end::Arsiv item-->

        <!--begin::Arsiv item-->
        <div class="d-flex align-items-center justify-content-between gap-4">
          <div class="d-flex align-items-center gap-3">
            <i class="fa-solid fa-folder pw-text-neutral-500"></i>
            <span class="pw-text-primary-900 fs-8 fw-medium">Araç Talebi</span>
          </div>

          <!--begin::Item info-->
          <div class="d-flex align-items-center gap-2">
            <!--begin::Drive-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-hard-drive pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::Drive-->

            <!--begin::File-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-file pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::File-->
          </div>
          <!--end::Item info-->
        </div>
        <!--end::Arsiv item-->

        <!--begin::Arsiv item-->
        <div class="d-flex align-items-center justify-content-between gap-4">
          <div class="d-flex align-items-center gap-3">
            <i class="fa-solid fa-fish pw-text-neutral-500"></i>
            <span class="pw-text-primary-900 fs-8 fw-medium">Araç Talebi Süreci</span>
          </div>

          <!--begin::Item info-->
          <div class="d-flex align-items-center gap-2">
            <!--begin::Drive-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-hard-drive pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::Drive-->

            <!--begin::File-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-file pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::File-->
          </div>
          <!--end::Item info-->
        </div>
        <!--end::Arsiv item-->

        <!--begin::Arsiv item-->
        <div class="d-flex align-items-center justify-content-between gap-4">
          <div class="d-flex align-items-center gap-3">
            <i class="fa-solid fa-check pw-text-neutral-500"></i>
            <span class="pw-text-primary-900 fs-8 fw-medium">Araç Talebi Süreci BD</span>
          </div>

          <!--begin::Item info-->
          <div class="d-flex align-items-center gap-2">
            <!--begin::Drive-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-hard-drive pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::Drive-->

            <!--begin::File-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-file pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::File-->
          </div>
          <!--end::Item info-->
        </div>
        <!--end::Arsiv item-->

        <!--begin::Arsiv item-->
        <div class="d-flex align-items-center justify-content-between gap-4">
          <div class="d-flex align-items-center gap-3">
            <i class="fa-solid fa-flag pw-text-neutral-500"></i>
            <span class="pw-text-primary-900 fs-8 fw-medium">Araştırma Süreci</span>
          </div>

          <!--begin::Item info-->
          <div class="d-flex align-items-center gap-2">
            <!--begin::Drive-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-hard-drive pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::Drive-->

            <!--begin::File-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-file pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::File-->
          </div>
          <!--end::Item info-->
        </div>
        <!--end::Arsiv item-->

        <!--begin::Arsiv item-->
        <div class="d-flex align-items-center justify-content-between gap-4">
          <div class="d-flex align-items-center gap-3">
            <i class="fa-solid fa-check pw-text-neutral-500"></i>
            <span class="pw-text-primary-900 fs-8 fw-medium">Avans Süreci</span>
          </div>

          <!--begin::Item info-->
          <div class="d-flex align-items-center gap-2">
            <!--begin::Drive-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-hard-drive pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::Drive-->

            <!--begin::File-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-file pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::File-->
          </div>
          <!--end::Item info-->
        </div>
        <!--end::Arsiv item-->

        <!--begin::Arsiv item-->
        <div class="d-flex align-items-center justify-content-between gap-4">
          <div class="d-flex align-items-center gap-3">
            <i class="fa-solid fa-gift pw-text-neutral-500"></i>
            <span class="pw-text-primary-900 fs-8 fw-medium">Avans Talep</span>
          </div>

          <!--begin::Item info-->
          <div class="d-flex align-items-center gap-2">
            <!--begin::Drive-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-hard-drive pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::Drive-->

            <!--begin::File-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-file pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::File-->
          </div>
          <!--end::Item info-->
        </div>
        <!--end::Arsiv item-->

        <!--begin::Arsiv item-->
        <div class="d-flex align-items-center justify-content-between gap-4">
          <div class="d-flex align-items-center gap-3">
            <i class="fa-solid fa-folder pw-text-neutral-500"></i>
            <span class="pw-text-primary-900 fs-8 fw-medium">Avans Talep Süreci</span>
          </div>

          <!--begin::Item info-->
          <div class="d-flex align-items-center gap-2">
            <!--begin::Drive-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-hard-drive pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::Drive-->

            <!--begin::File-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-file pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::File-->
          </div>
          <!--end::Item info-->
        </div>
        <!--end::Arsiv item-->

        <!--begin::Arsiv item-->
        <div class="d-flex align-items-center justify-content-between gap-4">
          <div class="d-flex align-items-center gap-3">
            <i class="fa-solid fa-b pw-text-neutral-500"></i>
            <span class="pw-text-primary-900 fs-8 fw-medium">Bilet Kullanıcısı</span>
          </div>

          <!--begin::Item info-->
          <div class="d-flex align-items-center gap-2">
            <!--begin::Drive-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-hard-drive pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::Drive-->

            <!--begin::File-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-file pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::File-->
          </div>
          <!--end::Item info-->
        </div>
        <!--end::Arsiv item-->

        <!--begin::Arsiv item-->
        <div class="d-flex align-items-center justify-content-between gap-4">
          <div class="d-flex align-items-center gap-3">
            <i class="fa-solid fa-folder pw-text-neutral-500"></i>
            <span class="pw-text-primary-900 fs-8 fw-medium">Body Süreci</span>
          </div>

          <!--begin::Item info-->
          <div class="d-flex align-items-center gap-2">
            <!--begin::Drive-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-hard-drive pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::Drive-->

            <!--begin::File-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-file pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::File-->
          </div>
          <!--end::Item info-->
        </div>
        <!--end::Arsiv item-->

        <!--begin::Arsiv item-->
        <div class="d-flex align-items-center justify-content-between gap-4">
          <div class="d-flex align-items-center gap-3">
            <i class="fa-solid fa-b pw-text-neutral-500"></i>
            <span class="pw-text-primary-900 fs-8 fw-medium">Boshoku Seyahat Talep</span>
          </div>

          <!--begin::Item info-->
          <div class="d-flex align-items-center gap-2">
            <!--begin::Drive-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-hard-drive pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::Drive-->

            <!--begin::File-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-file pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::File-->
          </div>
          <!--end::Item info-->
        </div>
        <!--end::Arsiv item-->

        <!--begin::Arsiv item-->
        <div class="d-flex align-items-center justify-content-between gap-4">
          <div class="d-flex align-items-center gap-3">
            <i class="fa-solid fa-b pw-text-neutral-500"></i>
            <span class="pw-text-primary-900 fs-8 fw-medium">Cari Hesap Açılış</span>
          </div>

          <!--begin::Item info-->
          <div class="d-flex align-items-center gap-2">
            <!--begin::Drive-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-hard-drive pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::Drive-->

            <!--begin::File-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-file pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::File-->
          </div>
          <!--end::Item info-->
        </div>
        <!--end::Arsiv item-->

        <!--begin::Arsiv item-->
        <div class="d-flex align-items-center justify-content-between gap-4">
          <div class="d-flex align-items-center gap-3">
            <i class="fa-solid fa-calendar-days pw-text-neutral-500"></i>
            <span class="pw-text-primary-900 fs-8 fw-medium">Communication Workflow</span>
          </div>

          <!--begin::Item info-->
          <div class="d-flex align-items-center gap-2">
            <!--begin::Drive-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-hard-drive pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::Drive-->

            <!--begin::File-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-file pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::File-->
          </div>
          <!--end::Item info-->
        </div>
        <!--end::Arsiv item-->

        <!--begin::Arsiv item-->
        <div class="d-flex align-items-center justify-content-between gap-4">
          <div class="d-flex align-items-center gap-3">
            <i class="fa-solid fa-flag pw-text-neutral-500"></i>
            <span class="pw-text-primary-900 fs-8 fw-medium">Customer Flow</span>
          </div>

          <!--begin::Item info-->
          <div class="d-flex align-items-center gap-2">
            <!--begin::Drive-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-hard-drive pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::Drive-->

            <!--begin::File-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-file pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::File-->
          </div>
          <!--end::Item info-->
        </div>
        <!--end::Arsiv item-->

        <!--begin::Arsiv item-->
        <div class="d-flex align-items-center justify-content-between gap-4">
          <div class="d-flex align-items-center gap-3">
            <i class="fa-solid fa-heart pw-text-neutral-500"></i>
            <span class="pw-text-primary-900 fs-8 fw-medium">Çalışan Oryantasyon Süreci</span>
          </div>

          <!--begin::Item info-->
          <div class="d-flex align-items-center gap-2">
            <!--begin::Drive-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-hard-drive pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::Drive-->

            <!--begin::File-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-file pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::File-->
          </div>
          <!--end::Item info-->
        </div>
        <!--end::Arsiv item-->

        <!--begin::Arsiv item-->
        <div class="d-flex align-items-center justify-content-between gap-4">
          <div class="d-flex align-items-center gap-3">
            <i class="fa-solid fa-circle-plus pw-text-neutral-500"></i>
            <span class="pw-text-primary-900 fs-8 fw-medium">Dava Yönetimi</span>
          </div>

          <!--begin::Item info-->
          <div class="d-flex align-items-center gap-2">
            <!--begin::Drive-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-hard-drive pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::Drive-->

            <!--begin::File-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-file pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::File-->
          </div>
          <!--end::Item info-->
        </div>
        <!--end::Arsiv item-->

        <!--begin::Arsiv item-->
        <div class="d-flex align-items-center justify-content-between gap-4">
          <div class="d-flex align-items-center gap-3">
            <i class="fa-solid fa-minus pw-text-neutral-500"></i>
            <span class="pw-text-primary-900 fs-8 fw-medium">Ders Kayıt Süreci</span>
          </div>

          <!--begin::Item info-->
          <div class="d-flex align-items-center gap-2">
            <!--begin::Drive-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-hard-drive pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::Drive-->

            <!--begin::File-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-file pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::File-->
          </div>
          <!--end::Item info-->
        </div>
        <!--end::Arsiv item-->

        <!--begin::Arsiv item-->
        <div class="d-flex align-items-center justify-content-between gap-4">
          <div class="d-flex align-items-center gap-3">
            <i class="fa-solid fa-flag pw-text-neutral-500"></i>
            <span class="pw-text-primary-900 fs-8 fw-medium">Ders Kayıt Süreci</span>
          </div>

          <!--begin::Item info-->
          <div class="d-flex align-items-center gap-2">
            <!--begin::Drive-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-hard-drive pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::Drive-->

            <!--begin::File-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-file pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::File-->
          </div>
          <!--end::Item info-->
        </div>
        <!--end::Arsiv item-->

        <!--begin::Arsiv item-->
        <div class="d-flex align-items-center justify-content-between gap-4">
          <div class="d-flex align-items-center gap-3">
            <i class="fa-solid fa-circle-minus pw-text-neutral-500"></i>
            <span class="pw-text-primary-900 fs-8 fw-medium">Ders Kayıt Süreci</span>
          </div>

          <!--begin::Item info-->
          <div class="d-flex align-items-center gap-2">
            <!--begin::Drive-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-hard-drive pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::Drive-->

            <!--begin::File-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-file pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::File-->
          </div>
          <!--end::Item info-->
        </div>
        <!--end::Arsiv item-->

        <!--begin::Arsiv item-->
        <div class="d-flex align-items-center justify-content-between gap-4">
          <div class="d-flex align-items-center gap-3">
            <i class="fa-solid fa-circle-minus pw-text-neutral-500"></i>
            <span class="pw-text-primary-900 fs-8 fw-medium">Ders Kayıt Süreci</span>
          </div>

          <!--begin::Item info-->
          <div class="d-flex align-items-center gap-2">
            <!--begin::Drive-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-hard-drive pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::Drive-->

            <!--begin::File-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-file pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::File-->
          </div>
          <!--end::Item info-->
        </div>
        <!--end::Arsiv item-->

        <!--begin::Arsiv item-->
        <div class="d-flex align-items-center justify-content-between gap-4">
          <div class="d-flex align-items-center gap-3">
            <i class="fa-solid fa-circle-minus pw-text-neutral-500"></i>
            <span class="pw-text-primary-900 fs-8 fw-medium">Ders Kayıt Süreci</span>
          </div>

          <!--begin::Item info-->
          <div class="d-flex align-items-center gap-2">
            <!--begin::Drive-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-hard-drive pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::Drive-->

            <!--begin::File-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-file pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::File-->
          </div>
          <!--end::Item info-->
        </div>
        <!--end::Arsiv item-->

        <!--begin::Arsiv item-->
        <div class="d-flex align-items-center justify-content-between gap-4">
          <div class="d-flex align-items-center gap-3">
            <i class="fa-solid fa-flag pw-text-neutral-500"></i>
            <span class="pw-text-primary-900 fs-8 fw-medium">Ders Kayıt Süreci</span>
          </div>

          <!--begin::Item info-->
          <div class="d-flex align-items-center gap-2">
            <!--begin::Drive-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-hard-drive pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::Drive-->

            <!--begin::File-->
            <div class="d-flex align-items-center gap-1">
              <i class="fa-solid fa-file pw-text-primary-300"></i>
              <span class="pw-text-primary-500 fw-semibold fs-8">:18</span>
            </div>
            <!--end::File-->
          </div>
          <!--end::Item info-->
        </div>
        <!--end::Arsiv item-->
      </div>
      <!--end::Arsiv wrapper-->
    </div>
    <!--end::Akis content-->
  </div>
  <!--end::Tab contents-->
</div>
<!--end::Canvas-->
<!--end::Drawers-->

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/foot.php'; ?>