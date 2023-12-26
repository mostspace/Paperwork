<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/header.php'; ?>

<!--begin::Wrapper-->
<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">

    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/sidebar.php'; ?>
    <!--begin::Main-->
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <!--begin::Content wrapper-->
        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar col-12 px-6 py-6 border-bottom pw-border-stroke">

            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="container-fluid d-flex flex-stack p-0">

                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-9 mt-0 mb-3">
                        <!--begin::Item-->
                        <li class="breadcrumb-item active">Sohbet</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                    <!--begin::Title-->
                    <h1 class="page-heading d-flex text-dark fw-bold fs-4 flex-column justify-content-center my-0">Sohbet</h1>
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

        <!--begin::Content -->
        <div class="mb-20 px-8 py-10 pe-15">
            <!--begin::Row-->
            <div class="row">
                <!--begin::Card-->
                <div class="border pw-border-stroke rounded-3 flex-fill">
                    <!--begin::Row-->
                    <div class="overflow-x-auto row g-0 pb-4 h-100">
                    <!--begin::Sidebar-->
                    <div class="col mw-225px border-end pw-border-stroke">
                        <!--begin::Header-->
                        <div class="d-flex align-items-center gap-5 border-bottom pw-border-stroke pe-3 h-70px">
                            <!--begin::Back button-->
                            <a href="/sohbet/" class="btn btn-color-primary p-0" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="bottom" title="Sohbet Listesi">
                                <i class="fa-solid fa-chevron-left fs-6"></i>
                            </a>
                            <!--end::Back button-->

                            <!--begin::User info-->
                            <div class="d-flex align-items-center gap-3 py-3">
                                <!--begin::Avatar-->
                                <div class="position-relative w-35px h-35px d-flex align-items-center justify-content-center pw-bg-primary-100 rounded-pill">
                                    <span class="pw-text-primary-500 fs-4 fw-semibold">U</span>
                                    <span class="position-absolute bottom-0 end-0 w-8px h-8px pw-bg-success-500 rounded-pill"></span>
                                </div>
                                <!--end::Avatar-->

                                <!--begin::Label-->
                                <div class="d-flex flex-column gap-1">
                                    <span class="pw-text-primary-900 fs-7 fw-bolder">UIDesk</span>
                                    <span class="pw-text-neutral-500 fs-9 fw-semibold d-inline-block text-truncate" style="max-width: 130px;">Art Director at Novica Co.</span>
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::User info-->
                        </div>
                        <!--end::Header-->

                        <!--begin::SubHeader-->
                        <div class="d-flex align-items-center border-bottom pw-border-stroke pe-3 h-70px">
                        </div>
                        <!--end::SubHeader-->

                        <!--begin::Sidebar content-->
                        <div class="pe-3">
                            <button class="btn btn-danger fs-9 px-3 py-2 my-3">İptal</button>

                            <!--begin::User search-->
                            <div id="kt_docs_search_handler_basic" class="w-100 mw-300px mb-3" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="true" data-kt-search-layout="inline">

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
                                    <input type="text" class="form-control pw-input-stroke py-2 ps-9 pe-2 fs-8" name="search" value="" placeholder="Kullanıcı adı arayınız" data-kt-search-element="input">
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
                            <!--end::User search-->

                            <!--begin::Users-->
                            <div class="d-flex flex-column">
                                <!--begin::Title-->
                                <div class="px-4 py-3 pw-text-neutral-900 fs-8">
                                    Hepsi
                                </div>
                                <!--end::Title-->

                                <!--begin::Users-->
                                <div class="menu menu-column menu-state-bg">
                                    <!--begin::Menu item-->
                                    <div class="menu-item">
                                        <a href="javascript:void(0)" class="menu-link d-flex align-items-center gap-2" role="button">
                                        <!--begin::Avatar-->
                                        <div class="position-relative symbol symbol-35px w-35px h-35px d-flex align-items-center justify-content-center symbol-circle pw-bg-primary-100">
                                            <span class="pw-text-primary-500 fs-4 fw-bold">U</span>
                                            <span class="position-absolute bottom-0 end-0 w-8px h-8px rounded-pill pw-bg-success-500"></span>
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::User info-->
                                        <div class="d-flex flex-column">
                                            <span class="pw-text-neutral-700 fs-8 fw-bolder">UIDesk</span>
                                            <span class="pw-text-neutral-500 fs-9 fw-semibold d-inline-block text-truncate" style="max-width:125px">Art Director at Novica Co.</span>
                                        </div>
                                        <!--end::User info-->
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item">
                                        <a href="javascript:void(0)" class="menu-link d-flex align-items-center gap-2" role="button">
                                        <!--begin::Avatar-->
                                        <div class="position-relative symbol symbol-35px w-35px h-35px d-flex align-items-center justify-content-center symbol-circle" style="background:#FFC700">
                                            <span class="text-white fs-4 fw-bold">A</span>
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::User info-->
                                        <div class="d-flex flex-column">
                                            <span class="pw-text-neutral-700 fs-8 fw-bolder">Abdullah Dayıoğlu</span>
                                            <span class="pw-text-neutral-500 fs-9 fw-semibold d-inline-block text-truncate" style="max-width:125px">Test Uzmanı</span>
                                        </div>
                                        <!--end::User info-->
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item">
                                        <a href="javascript:void(0)" class="menu-link d-flex align-items-center gap-2" role="button">
                                        <!--begin::Avatar-->
                                        <div class="position-relative symbol symbol-35px w-35px h-35px d-flex align-items-center justify-content-center symbol-circle pw-bg-danger-400">
                                            <span class="text-white fs-4 fw-bold">O</span>
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::User info-->
                                        <div class="d-flex flex-column">
                                            <span class="pw-text-neutral-700 fs-8 fw-bolder">Owl Paperwork</span>
                                            <span class="pw-text-neutral-500 fs-9 fw-semibold d-inline-block text-truncate" style="max-width:125px">Test Uzman Yardımcısı</span>
                                        </div>
                                        <!--end::User info-->
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Users-->
                            </div>
                            <!--end::Users-->
                        </div>
                        <!--end::Sidebar content-->
                    </div>
                    <!--end::Sidebar-->

                    <!--begin::Messenger-->
                    <div class="col d-flex flex-column">
                        <!--begin::Header-->
                        <div class="d-flex align-items-center justify-content-between px-4 py-3 h-70px border-bottom pw-border-stroke">
                            <!--begin::Title-->
                            <div class="pw-text-neutral-800 fs-8 fw-semibold">Test</div>
                            <!--end::Title-->

                            <div class="">
                                <!--begin::Add user button-->
                                <button type="button" class="btn btn-primary py-2 px-3 fs-9 fw-semibold me-2">
                                    <i class="fa-solid fa-plus"></i>
                                    Kullanıcı Ekle
                                </button>
                                <!--end::Add user button-->

                                <!--begin::List button-->
                                <button type="button" class="btn btn-outline btn-outline-primary py-2 px-3 fs-9 fw-semibold">
                                    <i class="fa-solid fa-list"></i>
                                    Listele
                                </button>
                                <!--end::List button-->
                            </div>
                        </div>
                        <!--end::Header-->

                        <!--begin::Header-->
                        <div class="d-flex align-items-center justify-content-end px-4 py-3 h-70px border-bottom pw-border-stroke">
                            <!--begin::Title-->
                            <div class="card-title">
                                <!--begin::Users-->
                                <div class="symbol-group symbol-hover">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-30px symbol-circle">
                                        <span class="symbol-label bg-warning text-white 30px">A</span>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-30px symbol-circle">
                                        <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-30px symbol-circle">
                                        <span class="symbol-label bg-primary text-white 30px">S</span>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Avatar-->
                                     <div class="symbol symbol-30px symbol-circle">
                                        <img alt="Pic" src="assets/media/avatars/300-2.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-30px symbol-circle">
                                        <span class="symbol-label bg-danger text-white 40px">P</span>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-30px symbol-circle">
                                        <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::All users-->
                                    <a href="#" class="symbol symbol-30px symbol-circle" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
                                        <span class="symbol-label fs-9 fw-bolder bg-black text-white" data-bs-toggle="tooltip" data-bs-trigger="hover" title="View more users">+42</span>
                                    </a>
                                    <!--end::All users-->
                                </div>
                                <!--end::Users-->
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Header-->

                        <!--begin::Messages-->
                        <div class="d-flex flex-column justify-content-between flex-fill">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column gap-8 flex-fill py-4 px-3">
                                <!--begin::Item-->
                                <div class="d-flex flex-column gap-4">
                                    <!--begin::User info-->
                                    <div class="d-flex align-items-center gap-3">
                                        <!--begin::Avatar-->
                                        <div class="d-flex align-items-center justify-content-center w-35px h-35px rounded-pill text-white fs-base fw-bolder" style="background-color: #FFC700;">A</div>
                                        <!--end::Avatar-->

                                        <!--begin::Label-->
                                        <div class="d-flex flex-column gap-1">
                                            <span class="text-black fs-8 fw-bolder">Abdullah Dayıoğlu</span>
                                            <span class="pw-text-neutral-300 fs-9 fw-semibold">Test Uzmanı</span>
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::User info-->

                                    <!--begin::Message-->
                                    <div class="d-flex align-items-center gap-4">
                                        <div class="py-3 px-2 rounded pw-bg-warning-100 text-black fs-8">
                                            Worem ipsum dolor sit amet, consectetur adipiscing elit.      
                                        </div>

                                        <span class="pw-text-neutral-300 fs-9">2dk</span>
                                    </div>
                                    <!--end::Message-->
                                </div>
                                <!--end::Item-->

                                <!--begin::Item-->
                                <div class="d-flex flex-column gap-4">
                                    <!--begin::User info-->
                                    <div class="d-flex flex-row-reverse text-end align-items-center gap-3">
                                        <!--begin::Avatar-->
                                        <div class="d-flex align-items-center justify-content-center w-35px h-35px rounded-pill pw-text-primary-500 pw-bg-primary-100 fs-base fw-bolder">U</div>
                                        <!--end::Avatar-->

                                        <!--begin::Label-->
                                        <div class="d-flex flex-column gap-1">
                                            <span class="text-black fs-8 fw-bolder">UIDesk</span>
                                            <span class="pw-text-neutral-300 fs-9 fw-semibold">Test Uzmanı</span>
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::User info-->

                                    <!--begin::Message-->
                                    <div class="d-flex flex-row-reverse align-items-center gap-4">
                                        <div class="py-3 px-2 rounded pw-bg-primary-100 text-black fs-8">
                                            Worem ipsum dolor sit amet, consectetur adipiscing elit.      
                                        </div>

                                        <span class="pw-text-neutral-300 fs-9">1dk</span>
                                    </div>
                                    <!--end::Message-->
                                </div>
                                <!--end::Item-->

                                <!--begin::Item-->
                                <div class="d-flex flex-column gap-4">
                                <!--begin::User info-->
                                <div class="d-flex align-items-center gap-3">
                                    <!--begin::Avatar-->
                                    <div class="d-flex align-items-center justify-content-center w-35px h-35px rounded-pill text-white pw-bg-danger-400 fs-base fw-bolder">O</div>
                                    <!--end::Avatar-->

                                    <!--begin::Label-->
                                    <div class="d-flex flex-column gap-1">
                                        <span class="text-black fs-8 fw-bolder">Owl PaperWork</span>
                                        <span class="pw-text-neutral-300 fs-9 fw-semibold">Test Uzmanı Yardımcısı</span>
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::User info-->

                                <!--begin::Message-->
                                <div class="d-flex align-items-center gap-4">
                                    <div class="py-3 px-2 rounded pw-bg-danger-200 text-black fs-8">
                                        Worem ipsum dolor sit amet, consectetur adipiscing elit.      
                                    </div>
                                </div>
                                <!--end::Message-->
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Wrapper-->

                            <div class="position-relative">
                                <button class="btn btn-primary p-2 position-absolute fs-9 end-0 z-index-1 me-1 mt-1">Gönder<i class="fa-solid fa-angle-right fs-9 text-white ms-2"></i></button>
                                <!--begin::Message box-->
                                <div id="messageBox"></div>
                                <!--end::Message box-->
                            </div>
                        </div>
                        <!--end::Messages-->
                    </div>
                    <!--end::Messenger-->
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Content -->
        <!--end::Content wrapper-->
        <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/footer.php'; ?>
    </div>
    <!--end::Main-->
</div>
<!--end::Wrapper -->

<script>
  window.addEventListener('DOMContentLoaded', () => {
    ClassicEditor
      .create(document.querySelector('#messageBox'), {
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
      })
      .catch(error => {
        console.error(error);
      });
  })
</script>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/globals/foot.php'; ?>