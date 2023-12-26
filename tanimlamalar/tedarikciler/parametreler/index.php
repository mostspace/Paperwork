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
              <a href="/tanimlamalar/" class="text-muted text-hover-primary">Tanımlamalar</a>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item">
              <span class="text-muted">/</span>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item active">Parametreler</li>
            <!--end::Item-->
          </ul>
          <!--end::Breadcrumb-->
          <!--begin::Title-->
          <h1 class="page-heading text-dark fw-bolder fs-4 align-items-center my-0">
            Parametreler
          </h1>
          <!--end::Title-->
        </div>
        <!--end::Page title-->

        <!--begin::Dropdown wrapper-->
        <div class="app-navbar-item ms-1 ms-md-3">
          <!--begin::Menu toggle-->
          <a href="/tanimlamalar/tedarikciler/kullanici-ek-ozellikleri/#" class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px" data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
            <i class="fa-solid fa-ellipsis-vertical fs-4"></i>
          </a>
          <!--begin::Menu toggle-->
          <!--begin::Menu-->
          <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-200px" data-kt-menu="true" data-kt-element="theme-mode-menu">
            <!--begin::Menu item-->
            <div class="menu-item px-3 my-0">
              <a href="/tanimlamalar/tedarikciler/kullanici-ek-ozellikleri/#" class="menu-link px-3 py-2 fs-8">
                <span class="menu-title">Açılış Sayfası Yap</span>
              </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item px-3 my-0">
              <a href="/tanimlamalar/tedarikciler/kullanici-ek-ozellikleri/#" class="menu-link px-3 py-2 fs-8">
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

    <!--begin::Content -->
    <div class="col mb-20 pt-6 px-6 pb-6 mt-6 border-top pw-border-stroke">
      <!--begin::Content Wrapper-->
      <form>
        <div class="table-responsive">
          <!--begin::Form-->
          <div>
            <table class="table w-min-content w-100 gy-3 gx-4 pw-text-neutral-800 fw-bold fs-7 mw-600px">
              <!--begin::Row-->
              <tr>
                <td width="220"><label for="pw_dil">Dil</label></td>
                <td>
                  <select class="form-select form-select-solid pw-form-select-primary  fs-8 py-3 px-4" data-control="select2" data-placeholder="Seçim Yapın" id="pw_dil" name="pw_dil">
                    <option></option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                  </select>
                </td>
              </tr>
              <!--end::Row-->

              <!--begin::Row-->
              <tr>
                <td><label for="pw_kabinet">Kabinet</label></td>
                <td>
                  <select class="form-select form-select-solid pw-form-select-primary  fs-8 py-3 px-4" data-control="select2" data-placeholder="Seçim Yapın" id="pw_kabinet" name="pw_kabinet">
                    <option></option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                  </select>
                </td>
              </tr>
              <!--end::Row-->

              <!--begin::Row-->
              <tr>
                <td><label for="pw_mfa">MFA</label></td>
                <td>
                  <select class="form-select form-select-solid pw-form-select-primary  fs-8 py-3 px-4" data-control="select2" data-placeholder="Seçim Yapın" id="pw_mfa" name="pw_mfa">
                    <option></option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                  </select>
                </td>
              </tr>
              <!--end::Row-->

              <!--begin::Row-->
              <tr>
                <td><label for="pw_gosterge_paneli">Gösterge Paneli</label></td>
                <td>
                  <select class="form-select form-select-solid pw-form-select-primary  fs-8 py-3 px-4" data-control="select2" data-placeholder="Seçim Yapın" id="pw_gosterge_paneli" name="pw_gosterge_paneli">
                    <option></option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                  </select>
                </td>
              </tr>
              <!--end::Row-->

              <!--begin::Row-->
              <tr>
                <td><label for="pw_degerlendirmeyi_gorebilir">Değerlendirmeyi Görebilir</label></td>
                <td>
                  <select class="form-select form-select-solid pw-form-select-primary  fs-8 py-3 px-4" data-control="select2" data-placeholder="Seçim Yapın" id="pw_degerlendirmeyi_gorebilir" name="pw_degerlendirmeyi_gorebilir">
                    <option></option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                  </select>
                </td>
              </tr>
              <!--end::Row-->
            </table>
          </div>
          <!--end::Form-->
        </div>

        <!--begin::Değerlendirme Tablosu-->
        <div class="d-flex flex-column mt-14">
          <h2 class="pw-text-neutral-800 fw-bold fs-7 mb-12">Değerlendirme Tablosu</h2>
          <div class="row">
            <!--begin::Item-->
            <div class="col-12 col-md-6 col-xl-3">
              <!--begin::Checkbox-->
              <div class="form-check mb-4">
                <input class="form-check-input" type="checkbox" value="" id="pw_zorunlu" name="pw_zorunlu" checked="checked" />
              </div>
              <!--end::Checkbox-->

              <!--begin::Card-->
              <div class="p-4 rounded border pw-border-stroke">
                <!--begin::Card header-->
                <div class="px-4 py-6 rounded-3 border pw-border-stroke">
                  <div class="d-flex justify-content-between flex-wrap gap-6">
                    <div class="d-flex gap-4 flex-wrap">
                      <!--begin::Icon-->
                      <div class="d-flex align-items-center justify-content-center w-60px h-60px pw-bg-primary-100 rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                          <g clip-path="url(#clip0_2233_53876)">
                            <path d="M3.08629 26.2428C5.38294 30.0553 10.9095 30.1484 13.2031 26.3282C13.9293 25.1183 14.3374 23.7444 14.3896 22.3343L14.4628 20.3807C14.4628 20.3807 10.9782 23.5604 9.54161 23.3652C9.05666 23.2996 9.42571 22.3998 9.60109 21.9545C10.2675 20.277 14.3164 16.1504 14.3164 16.1504C14.3164 16.1504 14.6382 10.3051 15.21 8.70228C15.5059 7.87268 15.849 7.49296 16.1632 7.34198C16.4773 7.49448 16.8204 7.87268 17.1163 8.70228C17.6882 10.3051 18.0099 16.1504 18.0099 16.1504C18.0099 16.1504 22.0588 20.2679 22.7252 21.9545C22.9006 22.3998 23.2697 23.2996 22.7847 23.3652C21.3466 23.5604 17.8635 20.3807 17.8635 20.3807L17.9367 22.3343C17.9918 23.8239 18.4441 25.2719 19.2467 26.528C21.5495 30.1301 26.8946 30.0355 29.1439 26.4014C30.6108 24.0314 31.3961 21.3029 31.4131 18.5157C31.4757 10.238 24.8069 3.34648 16.5292 3.15281C13.8005 3.08746 11.1042 3.75567 8.72183 5.0877C6.33944 6.41974 4.3582 8.36677 2.9849 10.7256C1.6116 13.0845 0.896553 15.7686 0.914388 18.4981C0.932223 21.2276 1.68228 23.9021 3.08629 26.2428Z" fill="black" />
                            <path d="M3.08629 26.2428C5.38294 30.0553 10.9095 30.1484 13.2031 26.3282C13.9293 25.1183 14.3374 23.7444 14.3896 22.3343L14.4628 20.3807C14.4628 20.3807 10.9782 23.5604 9.54161 23.3652C9.05666 23.2996 9.42571 22.3998 9.60109 21.9545C10.2675 20.277 14.3164 16.1504 14.3164 16.1504C14.3164 16.1504 14.6382 10.3051 15.21 8.70228C15.5059 7.87268 15.849 7.49296 16.1632 7.34198C16.4773 7.49448 16.8204 7.87268 17.1163 8.70228C17.6882 10.3051 18.0099 16.1504 18.0099 16.1504C18.0099 16.1504 22.0588 20.2679 22.7252 21.9545C22.9006 22.3998 23.2697 23.2996 22.7847 23.3652C21.3466 23.5604 17.8635 20.3807 17.8635 20.3807L17.9367 22.3343C17.9918 23.8239 18.4441 25.2719 19.2467 26.528C21.5495 30.1301 26.8946 30.0355 29.1439 26.4014C30.6108 24.0314 31.3961 21.3029 31.4131 18.5157C31.4757 10.238 24.8069 3.34648 16.5292 3.15281C13.8005 3.08746 11.1042 3.75567 8.72183 5.0877C6.33944 6.41974 4.3582 8.36677 2.9849 10.7256C1.6116 13.0845 0.896553 15.7686 0.914388 18.4981C0.932223 21.2276 1.68228 23.9021 3.08629 26.2428Z" fill="#0085FF" />
                          </g>
                          <defs>
                            <clipPath id="clip0_2233_53876">
                              <rect width="30.5" height="30.5" fill="white" transform="translate(0.914062 0.914062)" />
                            </clipPath>
                          </defs>
                        </svg>
                      </div>
                      <!--end::Icon-->

                      <!--begin::Info row-->
                      <div class="d-flex flex-column gap-2">
                        <div class="pw-text-neutral-600 fs-base fw-medium">Test 1</div>
                        <div class="pw-text-dark fs-4 fw-medium">85</div>
                      </div>
                      <!--end::Info row-->
                    </div>

                    <!--begin::Info row-->
                    <div class="d-flex flex-column gap-3">
                      <!--begin::Precentil-->
                      <div class="d-flex align-items-center gap-2">
                        <i class="fa-solid fa-arrow-up-right pw-text-success-500 fs-4"></i>
                        <div class="pw-text-success-500 fw-bold fs-6">+28.5%</div>
                      </div>
                      <!--end::Precentil-->

                      <div class="text-black fs-7 fw-bold">54/99</div>
                    </div>
                    <!--end::Info row-->
                  </div>
                </div>
                <!--end::Card header-->

                <!--begin::Card Content-->
                <div class="d-flex flex-column gap-4 mt-6">
                  <!--begin::Content row-->
                  <div class="d-flex align-items-center">
                    <label for="pw_baslik" class="w-60px pw-text-neutral-700 fs-9 fw-bold">Başlık</label>
                    <input type="text" class="form-control fs-8 py-3 px-4" id="pw_baslik" name="pw_baslik" />
                  </div>
                  <!--end::Content row-->

                  <!--begin::Content row-->
                  <div class="d-flex align-items-center">
                    <label for="pw_simge" class="w-60px pw-text-neutral-700 fs-9 fw-bold">Simge</label>
                    <select class="form-select fs-8 py-3 px-4" data-control="select2" data-placeholder="Seçim yapın" id="pw_simge" name="pw_simge">
                      <option></option>
                      <option value="1">Option 1</option>
                      <option value="2">Option 2</option>
                    </select>
                  </div>
                  <!--end::Content row-->
                  <!--begin::Content row-->
                  <div class="d-flex align-items-center">
                    <label for="pw_simge" class="w-60px pw-text-neutral-700 fs-9 fw-bold">Simge</label>
                     <!--begin::Color picker-->
                  <div class="pw-color-picker-group">
                      <input type="color" class="pw-color-picker" value="#3699FF" id="pw_simge_renk" name="pw_simge_renk" />
                      <label class="icon pw-shadow-sm" for="pw_simge_renk" data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click" title="Renk değiştir">
                        <i class="fa-solid fa-pen pw-text-neutral-300 fs-10 pe-0"></i>
                      </label>
                    </div>
                    <!--end::Color picker-->
                  </div>
                  <!--end::Content row-->
                </div>
                <!--end::Card body-->
              </div>
              <!--end::Card-->
            </div>
            <!--end::Item-->

            <!--begin::Item-->
            <div class="col-12 col-md-6 col-xl-3">
              <!--begin::Checkbox-->
              <div class="form-check mb-4">
                <input class="form-check-input" type="checkbox" value="" id="pw_zorunlu" name="pw_zorunlu" />
              </div>
              <!--end::Checkbox-->

              <!--begin::Card-->
              <div class="p-4 rounded border pw-border-stroke">
                <!--begin::Card header-->
                <div class="px-4 py-6 rounded-3 border pw-border-stroke opacity-20">
                  <div class="d-flex justify-content-between flex-wrap gap-6">
                    <div class="d-flex gap-4 flex-wrap">
                      <!--begin::Icon-->
                      <div class="d-flex align-items-center justify-content-center w-60px h-60px pw-bg-primary-100 rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                          <g clip-path="url(#clip0_2233_53876)">
                            <path d="M3.08629 26.2428C5.38294 30.0553 10.9095 30.1484 13.2031 26.3282C13.9293 25.1183 14.3374 23.7444 14.3896 22.3343L14.4628 20.3807C14.4628 20.3807 10.9782 23.5604 9.54161 23.3652C9.05666 23.2996 9.42571 22.3998 9.60109 21.9545C10.2675 20.277 14.3164 16.1504 14.3164 16.1504C14.3164 16.1504 14.6382 10.3051 15.21 8.70228C15.5059 7.87268 15.849 7.49296 16.1632 7.34198C16.4773 7.49448 16.8204 7.87268 17.1163 8.70228C17.6882 10.3051 18.0099 16.1504 18.0099 16.1504C18.0099 16.1504 22.0588 20.2679 22.7252 21.9545C22.9006 22.3998 23.2697 23.2996 22.7847 23.3652C21.3466 23.5604 17.8635 20.3807 17.8635 20.3807L17.9367 22.3343C17.9918 23.8239 18.4441 25.2719 19.2467 26.528C21.5495 30.1301 26.8946 30.0355 29.1439 26.4014C30.6108 24.0314 31.3961 21.3029 31.4131 18.5157C31.4757 10.238 24.8069 3.34648 16.5292 3.15281C13.8005 3.08746 11.1042 3.75567 8.72183 5.0877C6.33944 6.41974 4.3582 8.36677 2.9849 10.7256C1.6116 13.0845 0.896553 15.7686 0.914388 18.4981C0.932223 21.2276 1.68228 23.9021 3.08629 26.2428Z" fill="black" />
                            <path d="M3.08629 26.2428C5.38294 30.0553 10.9095 30.1484 13.2031 26.3282C13.9293 25.1183 14.3374 23.7444 14.3896 22.3343L14.4628 20.3807C14.4628 20.3807 10.9782 23.5604 9.54161 23.3652C9.05666 23.2996 9.42571 22.3998 9.60109 21.9545C10.2675 20.277 14.3164 16.1504 14.3164 16.1504C14.3164 16.1504 14.6382 10.3051 15.21 8.70228C15.5059 7.87268 15.849 7.49296 16.1632 7.34198C16.4773 7.49448 16.8204 7.87268 17.1163 8.70228C17.6882 10.3051 18.0099 16.1504 18.0099 16.1504C18.0099 16.1504 22.0588 20.2679 22.7252 21.9545C22.9006 22.3998 23.2697 23.2996 22.7847 23.3652C21.3466 23.5604 17.8635 20.3807 17.8635 20.3807L17.9367 22.3343C17.9918 23.8239 18.4441 25.2719 19.2467 26.528C21.5495 30.1301 26.8946 30.0355 29.1439 26.4014C30.6108 24.0314 31.3961 21.3029 31.4131 18.5157C31.4757 10.238 24.8069 3.34648 16.5292 3.15281C13.8005 3.08746 11.1042 3.75567 8.72183 5.0877C6.33944 6.41974 4.3582 8.36677 2.9849 10.7256C1.6116 13.0845 0.896553 15.7686 0.914388 18.4981C0.932223 21.2276 1.68228 23.9021 3.08629 26.2428Z" fill="#0085FF" />
                          </g>
                          <defs>
                            <clipPath id="clip0_2233_53876">
                              <rect width="30.5" height="30.5" fill="white" transform="translate(0.914062 0.914062)" />
                            </clipPath>
                          </defs>
                        </svg>
                      </div>
                      <!--end::Icon-->

                      <!--begin::Info row-->
                      <div class="d-flex flex-column gap-2">
                        <div class="pw-text-neutral-600 fs-base fw-medium">Test 1</div>
                        <div class="pw-text-dark fs-4 fw-medium">85</div>
                      </div>
                      <!--end::Info row-->
                    </div>

                    <!--begin::Info row-->
                    <div class="d-flex flex-column gap-3">
                      <!--begin::Precentil-->
                      <div class="d-flex align-items-center gap-2">
                        <i class="fa-solid fa-arrow-up-right pw-text-neutral-500 fs-4"></i>
                        <div class="pw-text-neutral-500 fw-bold fs-6">+28.5%</div>
                      </div>
                      <!--end::Precentil-->

                      <div class="text-black fs-7 fw-bold">54/99</div>
                    </div>
                    <!--end::Info row-->
                  </div>
                </div>
                <!--end::Card header-->

                <!--begin::Card body-->
                <div class="d-flex flex-column gap-4 mt-6 opacity-20">
                  <!--begin::Form row-->
                  <div class="d-flex align-items-center">
                    <label for="pw_baslik" class="w-60px pw-text-neutral-700 fs-9 fw-bold">Başlık</label>
                    <input type="text" class="form-control fs-8 py-3 px-4" id="pw_baslik" name="pw_baslik" />
                  </div>
                  <!--end::Card row-->

                  <!--begin::Card row-->
                  <div class="d-flex align-items-center">
                    <label for="pw_simge" class="w-60px pw-text-neutral-700 fs-9 fw-bold">Simge</label>
                    <select class="form-select fs-8 py-3 px-4" data-control="select2" data-placeholder="Seçim yapın" id="pw_simge" name="pw_simge">
                      <option></option>
                      <option value="1">Option 1</option>
                      <option value="2">Option 2</option>
                    </select>
                  </div>
                  <!--end::Card row-->
                  <!--begin::Card row-->
                  <div class="d-flex align-items-center">
                    <label for="pw_simge" class="w-60px pw-text-neutral-700 fs-9 fw-bold">Simge</label>
                     <!--begin::Color picker-->
                  <div class="pw-color-picker-group">
                      <input type="color" class="pw-color-picker" value="#3699FF" id="pw_simge_renk" name="pw_simge_renk" />
                      <label class="icon pw-shadow-sm" for="pw_simge_renk" data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click" title="Renk değiştir">
                        <i class="fa-solid fa-pen pw-text-neutral-300 fs-10 pe-0"></i>
                      </label>
                    </div>
                    <!--end::Color picker-->
                  </div>
                  <!--end::Card row-->
                </div>
                <!--end::Card body-->
              </div>
              <!--end::Card-->
            </div>
            <!--end::Item-->

            <!--begin::Item-->
            <div class="col-12 col-md-6 col-xl-3">
              <!--begin::Checkbox-->
              <div class="form-check mb-4">
                <input class="form-check-input" type="checkbox" value="" id="pw_zorunlu" name="pw_zorunlu" />
              </div>
              <!--end::Checkbox-->

              <!--begin::Card-->
              <div class="p-4 rounded border pw-border-stroke">
                <!--begin::Card header-->
                <div class="px-4 py-6 rounded-3 border pw-border-stroke opacity-20">
                  <div class="d-flex justify-content-between flex-wrap gap-6">
                    <div class="d-flex gap-4 flex-wrap">
                      <!--begin::Icon-->
                      <div class="d-flex align-items-center justify-content-center w-60px h-60px pw-bg-primary-100 rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                          <g clip-path="url(#clip0_2233_53876)">
                            <path d="M3.08629 26.2428C5.38294 30.0553 10.9095 30.1484 13.2031 26.3282C13.9293 25.1183 14.3374 23.7444 14.3896 22.3343L14.4628 20.3807C14.4628 20.3807 10.9782 23.5604 9.54161 23.3652C9.05666 23.2996 9.42571 22.3998 9.60109 21.9545C10.2675 20.277 14.3164 16.1504 14.3164 16.1504C14.3164 16.1504 14.6382 10.3051 15.21 8.70228C15.5059 7.87268 15.849 7.49296 16.1632 7.34198C16.4773 7.49448 16.8204 7.87268 17.1163 8.70228C17.6882 10.3051 18.0099 16.1504 18.0099 16.1504C18.0099 16.1504 22.0588 20.2679 22.7252 21.9545C22.9006 22.3998 23.2697 23.2996 22.7847 23.3652C21.3466 23.5604 17.8635 20.3807 17.8635 20.3807L17.9367 22.3343C17.9918 23.8239 18.4441 25.2719 19.2467 26.528C21.5495 30.1301 26.8946 30.0355 29.1439 26.4014C30.6108 24.0314 31.3961 21.3029 31.4131 18.5157C31.4757 10.238 24.8069 3.34648 16.5292 3.15281C13.8005 3.08746 11.1042 3.75567 8.72183 5.0877C6.33944 6.41974 4.3582 8.36677 2.9849 10.7256C1.6116 13.0845 0.896553 15.7686 0.914388 18.4981C0.932223 21.2276 1.68228 23.9021 3.08629 26.2428Z" fill="black" />
                            <path d="M3.08629 26.2428C5.38294 30.0553 10.9095 30.1484 13.2031 26.3282C13.9293 25.1183 14.3374 23.7444 14.3896 22.3343L14.4628 20.3807C14.4628 20.3807 10.9782 23.5604 9.54161 23.3652C9.05666 23.2996 9.42571 22.3998 9.60109 21.9545C10.2675 20.277 14.3164 16.1504 14.3164 16.1504C14.3164 16.1504 14.6382 10.3051 15.21 8.70228C15.5059 7.87268 15.849 7.49296 16.1632 7.34198C16.4773 7.49448 16.8204 7.87268 17.1163 8.70228C17.6882 10.3051 18.0099 16.1504 18.0099 16.1504C18.0099 16.1504 22.0588 20.2679 22.7252 21.9545C22.9006 22.3998 23.2697 23.2996 22.7847 23.3652C21.3466 23.5604 17.8635 20.3807 17.8635 20.3807L17.9367 22.3343C17.9918 23.8239 18.4441 25.2719 19.2467 26.528C21.5495 30.1301 26.8946 30.0355 29.1439 26.4014C30.6108 24.0314 31.3961 21.3029 31.4131 18.5157C31.4757 10.238 24.8069 3.34648 16.5292 3.15281C13.8005 3.08746 11.1042 3.75567 8.72183 5.0877C6.33944 6.41974 4.3582 8.36677 2.9849 10.7256C1.6116 13.0845 0.896553 15.7686 0.914388 18.4981C0.932223 21.2276 1.68228 23.9021 3.08629 26.2428Z" fill="#0085FF" />
                          </g>
                          <defs>
                            <clipPath id="clip0_2233_53876">
                              <rect width="30.5" height="30.5" fill="white" transform="translate(0.914062 0.914062)" />
                            </clipPath>
                          </defs>
                        </svg>
                      </div>
                      <!--end::Icon-->

                      <!--begin::Info row-->
                      <div class="d-flex flex-column gap-2">
                        <div class="pw-text-neutral-600 fs-base fw-medium">Test 1</div>
                        <div class="pw-text-dark fs-4 fw-medium">85</div>
                      </div>
                      <!--end::Info row-->
                    </div>

                    <!--begin::Info row-->
                    <div class="d-flex flex-column gap-3">
                      <!--begin::Precentil-->
                      <div class="d-flex align-items-center gap-2">
                        <i class="fa-solid fa-arrow-up-right pw-text-neutral-500 fs-4"></i>
                        <div class="pw-text-neutral-500 fw-bold fs-6">+28.5%</div>
                      </div>
                      <!--end::Precentil-->

                      <div class="text-black fs-7 fw-bold">54/99</div>
                    </div>
                    <!--end::Info row-->
                  </div>
                </div>
                <!--end::Card header-->

                <!--begin::Card body-->
                <div class="d-flex flex-column gap-4 mt-6 opacity-20">
                  <!--begin::Card row-->
                  <div class="d-flex align-items-center">
                    <label for="pw_baslik" class="w-60px pw-text-neutral-700 fs-9 fw-bold">Başlık</label>
                    <input type="text" class="form-control fs-8 py-3 px-4" id="pw_baslik" name="pw_baslik" />
                  </div>
                  <!--end::Card row-->

                  <!--begin::Card row-->
                  <div class="d-flex align-items-center">
                    <label for="pw_simge" class="w-60px pw-text-neutral-700 fs-9 fw-bold">Simge</label>
                    <select class="form-select fs-8 py-3 px-4" data-control="select2" data-placeholder="Seçim yapın" id="pw_simge" name="pw_simge">
                      <option></option>
                      <option value="1">Option 1</option>
                      <option value="2">Option 2</option>
                    </select>
                  </div>
                  <!--end::Card row-->
                  <!--begin::Card row-->
                  <div class="d-flex align-items-center">
                    <label for="pw_simge" class="w-60px pw-text-neutral-700 fs-9 fw-bold">Simge</label>
                     <!--begin::Color picker-->
                  <div class="pw-color-picker-group">
                      <input type="color" class="pw-color-picker" value="#3699FF" id="pw_simge_renk" name="pw_simge_renk" />
                      <label class="icon pw-shadow-sm" for="pw_simge_renk" data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click" title="Renk değiştir">
                        <i class="fa-solid fa-pen pw-text-neutral-300 fs-10 pe-0"></i>
                      </label>
                    </div>
                    <!--end::Color picker-->
                  </div>
                  <!--end::Card row-->
                </div>
                <!--end::Card body-->
              </div>
              <!--end::Card-->
            </div>
            <!--end::Item-->

            <!--begin::Item-->
            <div class="col-12 col-md-6 col-xl-3">
              <!--begin::Checkbox-->
              <div class="form-check mb-4">
                <input class="form-check-input" type="checkbox" value="" id="pw_zorunlu" name="pw_zorunlu" />
              </div>
              <!--end::Checkbox-->

              <!--begin::Card-->
              <div class="p-4 rounded border pw-border-stroke">
                <!--begin::Card header-->
                <div class="px-4 py-6 rounded-3 border pw-border-stroke opacity-20">
                  <div class="d-flex justify-content-between flex-wrap gap-6">
                    <div class="d-flex gap-4 flex-wrap">
                      <!--begin::Icon-->
                      <div class="d-flex align-items-center justify-content-center w-60px h-60px pw-bg-primary-100 rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                          <g clip-path="url(#clip0_2233_53876)">
                            <path d="M3.08629 26.2428C5.38294 30.0553 10.9095 30.1484 13.2031 26.3282C13.9293 25.1183 14.3374 23.7444 14.3896 22.3343L14.4628 20.3807C14.4628 20.3807 10.9782 23.5604 9.54161 23.3652C9.05666 23.2996 9.42571 22.3998 9.60109 21.9545C10.2675 20.277 14.3164 16.1504 14.3164 16.1504C14.3164 16.1504 14.6382 10.3051 15.21 8.70228C15.5059 7.87268 15.849 7.49296 16.1632 7.34198C16.4773 7.49448 16.8204 7.87268 17.1163 8.70228C17.6882 10.3051 18.0099 16.1504 18.0099 16.1504C18.0099 16.1504 22.0588 20.2679 22.7252 21.9545C22.9006 22.3998 23.2697 23.2996 22.7847 23.3652C21.3466 23.5604 17.8635 20.3807 17.8635 20.3807L17.9367 22.3343C17.9918 23.8239 18.4441 25.2719 19.2467 26.528C21.5495 30.1301 26.8946 30.0355 29.1439 26.4014C30.6108 24.0314 31.3961 21.3029 31.4131 18.5157C31.4757 10.238 24.8069 3.34648 16.5292 3.15281C13.8005 3.08746 11.1042 3.75567 8.72183 5.0877C6.33944 6.41974 4.3582 8.36677 2.9849 10.7256C1.6116 13.0845 0.896553 15.7686 0.914388 18.4981C0.932223 21.2276 1.68228 23.9021 3.08629 26.2428Z" fill="black" />
                            <path d="M3.08629 26.2428C5.38294 30.0553 10.9095 30.1484 13.2031 26.3282C13.9293 25.1183 14.3374 23.7444 14.3896 22.3343L14.4628 20.3807C14.4628 20.3807 10.9782 23.5604 9.54161 23.3652C9.05666 23.2996 9.42571 22.3998 9.60109 21.9545C10.2675 20.277 14.3164 16.1504 14.3164 16.1504C14.3164 16.1504 14.6382 10.3051 15.21 8.70228C15.5059 7.87268 15.849 7.49296 16.1632 7.34198C16.4773 7.49448 16.8204 7.87268 17.1163 8.70228C17.6882 10.3051 18.0099 16.1504 18.0099 16.1504C18.0099 16.1504 22.0588 20.2679 22.7252 21.9545C22.9006 22.3998 23.2697 23.2996 22.7847 23.3652C21.3466 23.5604 17.8635 20.3807 17.8635 20.3807L17.9367 22.3343C17.9918 23.8239 18.4441 25.2719 19.2467 26.528C21.5495 30.1301 26.8946 30.0355 29.1439 26.4014C30.6108 24.0314 31.3961 21.3029 31.4131 18.5157C31.4757 10.238 24.8069 3.34648 16.5292 3.15281C13.8005 3.08746 11.1042 3.75567 8.72183 5.0877C6.33944 6.41974 4.3582 8.36677 2.9849 10.7256C1.6116 13.0845 0.896553 15.7686 0.914388 18.4981C0.932223 21.2276 1.68228 23.9021 3.08629 26.2428Z" fill="#0085FF" />
                          </g>
                          <defs>
                            <clipPath id="clip0_2233_53876">
                              <rect width="30.5" height="30.5" fill="white" transform="translate(0.914062 0.914062)" />
                            </clipPath>
                          </defs>
                        </svg>
                      </div>
                      <!--end::Icon-->

                      <!--begin::Info row-->
                      <div class="d-flex flex-column gap-2">
                        <div class="pw-text-neutral-600 fs-base fw-medium">Test 1</div>
                        <div class="pw-text-dark fs-4 fw-medium">85</div>
                      </div>
                      <!--end::Info row-->
                    </div>

                    <!--begin::Info row-->
                    <div class="d-flex flex-column gap-3">
                      <!--begin::Precentil-->
                      <div class="d-flex align-items-center gap-2">
                        <i class="fa-solid fa-arrow-up-right pw-text-neutral-500 fs-4"></i>
                        <div class="pw-text-neutral-500 fw-bold fs-6">+28.5%</div>
                      </div>
                      <!--end::Precentil-->

                      <div class="text-black fs-7 fw-bold">54/99</div>
                    </div>
                    <!--end::Info row-->
                  </div>
                </div>
                <!--end::Card header-->

                <!--begin::Card body-->
                <div class="d-flex flex-column gap-4 mt-6 opacity-20">
                  <!--begin::Card row-->
                  <div class="d-flex align-items-center">
                    <label for="pw_baslik" class="w-60px pw-text-neutral-700 fs-9 fw-bold">Başlık</label>
                    <input type="text" class="form-control fs-8 py-3 px-4" id="pw_baslik" name="pw_baslik" />
                  </div>
                  <!--end::Card row-->

                  <!--begin::Card row-->
                  <div class="d-flex align-items-center">
                    <label for="pw_simge" class="w-60px pw-text-neutral-700 fs-9 fw-bold">Simge</label>
                    <select class="form-select fs-8 py-3 px-4" data-control="select2" data-placeholder="Seçim yapın" id="pw_simge" name="pw_simge">
                      <option></option>
                      <option value="1">Option 1</option>
                      <option value="2">Option 2</option>
                    </select>
                  </div>
                  <!--end::Card row-->
                  <!--begin::Card row-->
                  <div class="d-flex align-items-center">
                    <label for="pw_simge" class="w-60px pw-text-neutral-700 fs-9 fw-bold">Simge</label>
                     <!--begin::Color picker-->
                  <div class="pw-color-picker-group">
                      <input type="color" class="pw-color-picker" value="#3699FF" id="pw_simge_renk" name="pw_simge_renk" />
                      <label class="icon pw-shadow-sm" for="pw_simge_renk" data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click" title="Renk değiştir">
                        <i class="fa-solid fa-pen pw-text-neutral-300 fs-10 pe-0"></i>
                      </label>
                    </div>
                    <!--end::Color picker-->
                  </div>
                  <!--end::Card row-->
                </div>
                <!--end::Card body-->
              </div>
              <!--end::Card-->
            </div>
            <!--end::Item-->
          </div>
        </div>
        <!--end::Değerlendirme Tablosu-->

        <!--begin::Form actions-->
        <div class="d-flex align-items-center justify-content-end gap-3 border-top pw-border-stroke mt-14 p-5">
          <button type="reset" class="btn btn-active-light fs-8 py-3 px-6">
            İptal
          </button>
          <button type="submit" class="btn btn-primary fs-8 py-3 px-6">
            Kaydet
          </button>
        </div>
        <!--end::Form actions-->
      </form>
      <!--end::Content Wrapper-->
    </div>
    <!--end::Content -->
    <!--end::Content wrapper-->
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/footer.php'; ?>
  </div>
  <!--end::Main-->

</div>
<!--end::Wrapper -->


<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/foot.php'; ?>