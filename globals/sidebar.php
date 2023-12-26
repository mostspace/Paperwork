<?php $_SERVER['REQUEST_URI'] == 'sayfa' ?>
<!--begin::Sidebar-->
<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
  <!--begin::Logo-->
  <div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
    <!--begin::Logo image-->
    <a href="/">
      <img alt="Logo" src="assets/media/logos/paperwork-logo-with-text.png" class="h-32px app-sidebar-logo-default" />
      <img alt="Logo" src="assets/media/logos/paperwork-logo.png" class="h-32px app-sidebar-logo-minimize" />
    </a>
    <!--end::Logo image-->
    <!--begin::Sidebar toggle-->
    <div id="kt_app_sidebar_toggle" class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary body-bg h-30px w-30px position-absolute top-50 start-100 translate-middle rotate" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="app-sidebar-minimize">
      <i class="ki-duotone ki-double-left fs-2 rotate-180">
        <span class="path1"></span>
        <span class="path2"></span>
      </i>
    </div>
    <!--end::Sidebar toggle-->
  </div>
  <!--end::Logo-->
  <!--begin::sidebar menu-->
  <div class="app-sidebar-menu overflow-hidden flex-column-fluid">
    <!--begin::Menu wrapper-->
    <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper scroll-y pe-0 my-5" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
      <!--begin::Menu-->
      <div class="menu menu-column menu-rounded menu-sub-indention px-3" id="kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
        <!--begin:Menu item-->
        <div class="menu-item <?php if ($_SERVER['REQUEST_URI'] == '/') : echo 'here show';
                              endif; ?> menu-accordion">
          <!--begin:Menu link-->
          <a href="/" class="menu-link">
            <span class="menu-icon">
              <i class="fa-solid fa-layer-group"></i>
            </span>
            <span class="menu-title">Dashboard</span>
          </a>
          <!--end:Menu link-->
        </div>
        <!--end:Menu item-->
        <!--begin:Menu item-->
        <div id="islerim" class="menu-item <?php if ($_SERVER['REQUEST_URI'] == '/islerim/' || strpos($_SERVER['REQUEST_URI'], '/islerim/') === 0) : echo 'here show';
                                                endif; ?>">
          <!--begin:Menu link-->
          <span class="menu-link">
            <a class="d-flex w-100" href="/islerim/">
              <span class="menu-icon">
                <i class="fa-solid fa-briefcase"></i>
              </span>
              <span class="menu-title">İşlerim</span>
            </a>
          </span>
          <!--end:Menu link-->
        </div>
        <!--end:Menu item-->
        <!--begin:Menu item-->
        <div id="belgeler" class="menu-item menu-accordion">
          <!--begin:Menu link-->
          <span class="menu-link">
            <a class="d-flex w-100" href="/belgeler/">
              <span class="menu-icon">
                <i class="fa-solid fa-folder"></i>
              </span>
              <span class="menu-title">Belgeler</span>
            </a>
            <span class="menu-arrow" data-pw-menu-trigger="click" data-pw-target="#belgeler"></span>
          </span>
          <!--end:Menu link-->
          <!--begin:Menu sub-->
          <div class="menu-sub menu-sub-accordion">
            <!--begin:Menu item-->
            <div class="menu-item">
              <!--begin:Menu link-->
              <a class="menu-link" href="#">
                <span class="menu-bullet">
                  <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">Menu Item</span>
              </a>
              <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
          </div>
          <!--end:Menu sub-->
        </div>
        <!--end:Menu item-->
        <!--begin:Menu item-->
        <div id="raporlar" class="menu-item <?php if ($_SERVER['REQUEST_URI'] == '/raporlar/' || strpos($_SERVER['REQUEST_URI'], '/raporlar/') === 0) : echo 'here show';
                                                endif; ?>">
          <!--begin:Menu link-->
          <span class="menu-link">
            <a class="d-flex w-100" href="/raporlar/">
              <span class="menu-icon">
                <i class="fa-solid fa-swatchbook"></i>
              </span>
              <span class="menu-title">Raporlar</span>
            </a>
          </span>
          <!--end:Menu link-->
        </div>
        <!--end:Menu item-->
        <!--begin:Menu item-->
        <div id="islemler" class="menu-item menu-accordion <?php if ($_SERVER['REQUEST_URI'] == '/islemler/' || strpos($_SERVER['REQUEST_URI'], '/islemler/') === 0) : echo 'here show';
                                                endif; ?>">
          <!--begin:Menu link-->
          <span class="menu-link">
            <a class="d-flex w-100" href="/islemler/">
              <span class="menu-icon">
                <i class="fa-solid fa-note-sticky"></i>
              </span>
              <span class="menu-title">İşlemler</span>
            </a>
            <span class="menu-arrow" data-pw-menu-trigger="click" data-pw-target="#islemler"></span>
          </span>
          <!--end:Menu link-->
          <!--begin:Menu sub-->
          <div class="menu-sub menu-sub-accordion menu-active-bg">
            <!--begin:Menu item-->
            <div class="menu-item">
              <!--begin:Menu link-->
              <a class="menu-link <?php if ($_SERVER['REQUEST_URI'] == '/islemler/is-akisi-yonetimi' || strpos($_SERVER['REQUEST_URI'], '/islemler/is-akisi-yonetimi') === 0) : echo 'active';
                                      endif; ?>" href="/islemler/is-akisi-yonetimi">
                <span class="menu-bullet">
                  <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">İş Akışı Yönetimi</span>
              </a>
              </span>
              <!--end:Menu link-->
            </div>
            <!--end:Menu item-->

            <!--begin:Menu item-->
            <div class="menu-item">
              <!--begin:Menu link-->
              <a class="menu-link <?php if ($_SERVER['REQUEST_URI'] == '/islemler/check-out-dokumanlar' || strpos($_SERVER['REQUEST_URI'], '/islemler/check-out-dokumanlar') === 0) : echo 'active';
                                      endif; ?>" href="/islemler/check-out-dokumanlar">
                <span class="menu-bullet">
                  <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">Check Out Dokümanlar</span>
              </a>
              </span>
              <!--end:Menu link-->
            </div>
            <!--end:Menu item-->

            <!--begin:Menu item-->
            <div class="menu-item">
              <!--begin:Menu link-->
              <a class="menu-link <?php if ($_SERVER['REQUEST_URI'] == '/islemler/geri-donusum' || strpos($_SERVER['REQUEST_URI'], '/islemler/geri-donusum') === 0) : echo 'active';
                                      endif; ?>" href="/islemler/geri-donusum">
                <span class="menu-bullet">
                  <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">Geri Dönüşüm</span>
              </a>
              </span>
              <!--end:Menu link-->
            </div>
            <!--end:Menu item-->

            <!--begin:Menu item-->
            <div class="menu-item">
              <!--begin:Menu link-->
              <a class="menu-link <?php if ($_SERVER['REQUEST_URI'] == '/islemler/servis-yonetimi' || strpos($_SERVER['REQUEST_URI'], '/islemler/servis-yonetimi') === 0) : echo 'active';
                                      endif; ?>" href="/islemler/servis-yonetimi">
                <span class="menu-bullet">
                  <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">Servis Yönetimi</span>
              </a>
              </span>
              <!--end:Menu link-->
            </div>
            <!--end:Menu item-->

            <!--begin:Menu item-->
            <div class="menu-item">
              <!--begin:Menu link-->
              <a class="menu-link <?php if ($_SERVER['REQUEST_URI'] == '/islemler/mobil-cihaz-yonetimi' || strpos($_SERVER['REQUEST_URI'], '/islemler/mobil-cihaz-yonetimi') === 0) : echo 'active';
                                      endif; ?>" href="/islemler/mobil-cihaz-yonetimi">
                <span class="menu-bullet">
                  <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">Mobil Cihaz Yönetimi</span>
              </a>
              </span>
              <!--end:Menu link-->
            </div>
            <!--end:Menu item-->

            <!--begin:Menu item-->
            <div class="menu-item">
              <!--begin:Menu link-->
              <a class="menu-link <?php if ($_SERVER['REQUEST_URI'] == '/islemler/vekalet-yonetimi' || strpos($_SERVER['REQUEST_URI'], '/islemler/vekalet-yonetimi') === 0) : echo 'active';
                                      endif; ?>" href="/islemler/vekalet-yonetimi">
                <span class="menu-bullet">
                  <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">Vekalet Yönetimi</span>
              </a>
              </span>
              <!--end:Menu link-->
            </div>
            <!--end:Menu item-->

            <!--begin:Menu item-->
            <div class="menu-item">
              <!--begin:Menu link-->
              <a class="menu-link <?php if ($_SERVER['REQUEST_URI'] == '/islemler/outlook-kullanicilari' || strpos($_SERVER['REQUEST_URI'], '/islemler/outlook-kullanicilari') === 0) : echo 'active';
                                      endif; ?>" href="/islemler/outlook-kullanicilari">
                <span class="menu-bullet">
                  <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">Outlook Kullanıcıları</span>
              </a>
              </span>
              <!--end:Menu link-->
            </div>
            <!--end:Menu item-->

            <!--begin:Menu item-->
            <div class="menu-item">
              <!--begin:Menu link-->
              <a class="menu-link <?php if ($_SERVER['REQUEST_URI'] == '/islemler/tasima' || strpos($_SERVER['REQUEST_URI'], '/islemler/tasima') === 0) : echo 'active';
                                      endif; ?>" href="/islemler/tasima">
                <span class="menu-bullet">
                  <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">Taşıma</span>
              </a>
              </span>
              <!--end:Menu link-->
            </div>
            <!--end:Menu item-->

          </div>
          <!--end:Menu sub-->
        </div>
        <!--end:Menu item-->
        <!--begin:Menu item-->
        <div id="seda" class="menu-item menu-accordion <?php if ($_SERVER['REQUEST_URI'] == '/seda/' || strpos($_SERVER['REQUEST_URI'], '/seda/') === 0) : echo 'here show';
                                                endif; ?>">
          <!--begin:Menu link-->
          <span class="menu-link">
            <a class="d-flex w-100" href="/seda/">
              <span class="menu-icon">
                <i class="fa-solid fa-file-lines"></i>
              </span>
              <span class="menu-title">SEDA</span>
            </a>
          </span>
          <!--end:Menu link-->
        </div>
        <!--end:Menu item-->
        <!--begin:Menu item-->
        <div id="sistem-raporlari" class="menu-item <?php if ($_SERVER['REQUEST_URI'] == '/sistem-raporlari/' || strpos($_SERVER['REQUEST_URI'], '/sistem-raporlari/') === 0) : echo 'here show';
                                                    endif; ?> menu-accordion">
          <!--begin:Menu link-->
          <span class="menu-link">
            <a class="d-flex w-100" href="/sistem-raporlari/">
              <span class="menu-icon">
                <i class="fa-solid fa-note-sticky"></i>
              </span>
              <span class="menu-title">Sistem Raporları</span>
            </a>
            <span class="menu-arrow" data-pw-menu-trigger="click" data-pw-target="#sistem-raporlari"></span>
          </span>
          <!--end:Menu link-->
          <!--begin:Menu sub-->
          <div class="menu-sub menu-sub-accordion menu-active-bg">

             <!--begin:Menu item-->
             <div id="sistem_raporlari_surec_yonetimi" data-kt-menu-trigger="click" class="menu-item menu-accordion <?php if ($_SERVER['REQUEST_URI'] == '/sistem-raporlari/surec-yonetimi' || strpos($_SERVER['REQUEST_URI'], '/sistem-raporlari/surec-yonetimi') === 0) : echo 'show';
                                                                                              endif; ?>">
              <!--begin:Menu link-->
              <span class="menu-link <?php if ($_SERVER['REQUEST_URI'] == '/sisrem-raporlari/surec-yonetimi' || strpos($_SERVER['REQUEST_URI'], '/sistem-raporlari/surec-yonetimi') === 0) : echo 'active';
                                      endif; ?>">
                <span class="menu-bullet">
                  <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">Süreç Yönetimi</span>
                <span class="menu-arrow"></span>
              </span>
              <!--end:Menu link-->
              <!--begin:Menu sub-->
              <div class="menu-sub menu-sub-accordion menu-active-bg">
                <!--begin:Menu item-->
                <div class="menu-item">
                  <!--begin:Menu link-->
                  <a class="menu-link <?php if ($_SERVER['REQUEST_URI'] == '/sistem-raporlari/surec-yonetimi/akis-istatistikleri' || strpos($_SERVER['REQUEST_URI'], '/sistem-raporlari/surec-yonetimi/akis-istatistikleri') === 0) : echo 'active';
                                      endif; ?>" href="/sistem-raporlari/surec-yonetimi/akis-istatistikleri">
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Akış İstatistikleri</span>
                  </a>
                  <!--end:Menu link-->
                </div>
                <!--end:Menu item-->


                <!--begin:Menu item-->
                <div class="menu-item">
                  <!--begin:Menu link-->
                  <a class="menu-link <?php if ($_SERVER['REQUEST_URI'] == '/sistem-raporlari/surec-yonetimi/kpi-olcum' || strpos($_SERVER['REQUEST_URI'], '/sistem-raporlari/surec-yonetimi/kpi-olcum') === 0) : echo 'active';
                                      endif; ?>" href="/sistem-raporlari/surec-yonetimi/kpi-olcum">
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">KPI Ölçüm</span>
                  </a>
                  <!--end:Menu link-->
                </div>
                <!--end:Menu item-->

                <!--begin:Menu item-->
                <div class="menu-item">
                  <!--begin:Menu link-->
                  <a class="menu-link <?php if ($_SERVER['REQUEST_URI'] == '/sistem-raporlari/surec-yonetimi/vekalet' || strpos($_SERVER['REQUEST_URI'], '/sistem-raporlari/surec-yonetimi/vekalet') === 0) : echo 'active';
                                      endif; ?>" href="/sistem-raporlari/surec-yonetimi/vekalet">
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Vekalet</span>
                  </a>
                  <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
              </div>
              <!--end:Menu sub-->
            </div>
            <!--end:Menu item-->

             <!--begin:Menu item-->
             <div id="dokuman_yonetimi" data-kt-menu-trigger="click" class="menu-item menu-accordion <?php if ($_SERVER['REQUEST_URI'] == '/sistem-raporlari/dokuman-yonetimi' || strpos($_SERVER['REQUEST_URI'], '/sistem-raporlari/dokuman-yonetimi') === 0) : echo 'show';
                                                                                              endif; ?>">
              <!--begin:Menu link-->
              <span class="menu-link <?php if ($_SERVER['REQUEST_URI'] == '/sisrem-raporlari/dokuman-yonetimi' || strpos($_SERVER['REQUEST_URI'], '/sistem-raporlari/dokuman-yonetimi') === 0) : echo 'active';
                                      endif; ?>">
                <span class="menu-bullet">
                  <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">Döküman Yönetimi</span>
                <span class="menu-arrow"></span>
              </span>
              <!--end:Menu link-->
              <!--begin:Menu sub-->
              <div class="menu-sub menu-sub-accordion menu-active-bg">
                <!--begin:Menu item-->
                <div class="menu-item">
                  <!--begin:Menu link-->
                  <a class="menu-link <?php if ($_SERVER['REQUEST_URI'] == '/sistem-raporlari/dokuman-yonetimi/arsiv' || strpos($_SERVER['REQUEST_URI'], '/sistem-raporlari/dokuman-yonetimi/arsiv') === 0) : echo 'active';
                                      endif; ?>" href="/sistem-raporlari/dokuman-yonetimi/arsiv">
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Arşiv</span>
                  </a>
                  <!--end:Menu link-->
                </div>
                <!--end:Menu item-->


                <!--begin:Menu item-->
                <div class="menu-item">
                  <!--begin:Menu link-->
                  <a class="menu-link <?php if ($_SERVER['REQUEST_URI'] == '/sistem-raporlari/dokuman-yonetimi/gelen-e-faturalar' || strpos($_SERVER['REQUEST_URI'], '/sistem-raporlari/dokuman-yonetimi/gelen-e-faturalar') === 0) : echo 'active';
                                      endif; ?>" href="/sistem-raporlari/dokuman-yonetimi/gelen-e-faturalar">
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Gelen E-Faturalar</span>
                  </a>
                  <!--end:Menu link-->
                </div>
                <!--end:Menu item-->

                <!--begin:Menu item-->
                <div class="menu-item">
                  <!--begin:Menu link-->
                  <a class="menu-link <?php if ($_SERVER['REQUEST_URI'] == '/sistem-raporlari/dokuman-yonetimi/goruntulenmis-belgeler' || strpos($_SERVER['REQUEST_URI'], '/sistem-raporlari/dokuman-yonetimi/goruntulenmis-belgeler') === 0) : echo 'active';
                                      endif; ?>" href="/sistem-raporlari/dokuman-yonetimi/goruntulenmis-belgeler">
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Görüntülenmiş Belgeler</span>
                  </a>
                  <!--end:Menu link-->
                </div>
                <!--end:Menu item-->

                <!--begin:Menu item-->
                <div class="menu-item">
                  <!--begin:Menu link-->
                  <a class="menu-link <?php if ($_SERVER['REQUEST_URI'] == '/sistem-raporlari/dokuman-yonetimi/silinmis-belgeler' || strpos($_SERVER['REQUEST_URI'], '/sistem-raporlari/dokuman-yonetimi/silinmis-belgeler') === 0) : echo 'active';
                                      endif; ?>" href="/sistem-raporlari/dokuman-yonetimi/silinmis-belgeler">
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Silinmiş Belgeler</span>
                  </a>
                  <!--end:Menu link-->
                </div>
                <!--end:Menu item-->

                <!--begin:Menu item-->
                <div class="menu-item">
                  <!--begin:Menu link-->
                  <a class="menu-link <?php if ($_SERVER['REQUEST_URI'] == '/sistem-raporlari/dokuman-yonetimi/isdd-veri-goruntuleme' || strpos($_SERVER['REQUEST_URI'], '/sistem-raporlari/dokuman-yonetimi/isdd-veri-goruntuleme') === 0) : echo 'active';
                                      endif; ?>" href="/sistem-raporlari/dokuman-yonetimi/isdd-veri-goruntuleme/">
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">ISDD Veri Görüntüleme</span>
                  </a>
                  <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
              </div>
              <!--end:Menu sub-->
            </div>
            <!--end:Menu item-->

             <!--begin:Menu item-->
             <div id="sistem_raporlari_sistem" data-kt-menu-trigger="click" class="menu-item menu-accordion <?php if ($_SERVER['REQUEST_URI'] == '/sistem-raporlari/sistem' || strpos($_SERVER['REQUEST_URI'], '/sistem-raporlari/sistem') === 0) : echo 'show';
                                                                                              endif; ?>">
              <!--begin:Menu link-->
              <span class="menu-link <?php if ($_SERVER['REQUEST_URI'] == '/sisrem-raporlari/sistem' || strpos($_SERVER['REQUEST_URI'], '/sistem-raporlari/sistem') === 0) : echo 'active';
                                      endif; ?>">
                <span class="menu-bullet">
                  <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">Sistem</span>
                <span class="menu-arrow"></span>
              </span>
              <!--end:Menu link-->
              <!--begin:Menu sub-->
              <div class="menu-sub menu-sub-accordion menu-active-bg">
                <!--begin:Menu item-->
                <div class="menu-item">
                  <!--begin:Menu link-->
                  <a class="menu-link <?php if ($_SERVER['REQUEST_URI'] == '/sistem-raporlari/sistem/calismis-isler' || strpos($_SERVER['REQUEST_URI'], '/sistem-raporlari/sistem/belge-indeksi') === 0) : echo 'active';
                                      endif; ?>" href="/sistem-raporlari/sistem/belge-indeksi/">
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Belge İndeksi</span>
                  </a>
                  <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                 <!--begin:Menu item-->
                 <div class="menu-item">
                  <!--begin:Menu link-->
                  <a class="menu-link <?php if ($_SERVER['REQUEST_URI'] == '/sistem-raporlari/sistem/calismis-isler' || strpos($_SERVER['REQUEST_URI'], '/sistem-raporlari/sistem/calismis-isler') === 0) : echo 'active';
                                      endif; ?>" href="/sistem-raporlari/sistem/calismis-isler/">
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Çalışmış İşler</span>
                  </a>
                  <!--end:Menu link-->
                </div>
                <!--end:Menu item-->

                 <!--begin:Menu item-->
                 <div class="menu-item">
                  <!--begin:Menu link-->
                  <a class="menu-link <?php if ($_SERVER['REQUEST_URI'] == '/sistem-raporlari/sistem/entegrasyon' || strpos($_SERVER['REQUEST_URI'], '/sistem-raporlari/sistem/entegrasyon') === 0) : echo 'active';
                                      endif; ?>" href="/sistem-raporlari/sistem/entegrasyon/">
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Entegrasyon</span>
                  </a>
                  <!--end:Menu link-->
                </div>
                <!--end:Menu item-->

                 <!--begin:Menu item-->
                 <div class="menu-item">
                  <!--begin:Menu link-->
                  <a class="menu-link <?php if ($_SERVER['REQUEST_URI'] == '/sistem-raporlari/sistem/kullanici-yetkileri' || strpos($_SERVER['REQUEST_URI'], '/sistem-raporlari/sistem/kullanici-yetkileri') === 0) : echo 'active';
                                      endif; ?>" href="/sistem-raporlari/sistem/kullanici-yetkileri/">
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Kullanıcı Yetkileri</span>
                  </a>
                  <!--end:Menu link-->
                </div>
                <!--end:Menu item-->

                 <!--begin:Menu item-->
                 <div class="menu-item">
                  <!--begin:Menu link-->
                  <a class="menu-link <?php if ($_SERVER['REQUEST_URI'] == '/sistem-raporlari/sistem/transfer' || strpos($_SERVER['REQUEST_URI'], '/sistem-raporlari/sistem/transfer') === 0) : echo 'active';
                                      endif; ?>" href="/sistem-raporlari/sistem/transfer/">
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Transfer</span>
                  </a>
                  <!--end:Menu link-->
                </div>
                <!--end:Menu item-->

                 <!--begin:Menu item-->
                 <div class="menu-item">
                  <!--begin:Menu link-->
                  <a class="menu-link <?php if ($_SERVER['REQUEST_URI'] == '/sistem-raporlari/sistem/mobil-cihazlar' || strpos($_SERVER['REQUEST_URI'], '/sistem-raporlari/sistem/mobil-cihazlar') === 0) : echo 'active';
                                      endif; ?>" href="/sistem-raporlari/sistem/mobil-cihazlar/">
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Mobil Cihazlar</span>
                  </a>
                  <!--end:Menu link-->
                </div>
                <!--end:Menu item-->

                                          <!--begin:Menu item-->
                 <div class="menu-item">
                  <!--begin:Menu link-->
                  <a class="menu-link <?php if ($_SERVER['REQUEST_URI'] == '/sistem-raporlari/sistem/sistem-kullanim' || strpos($_SERVER['REQUEST_URI'], '/sistem-raporlari/sistem/sistem-kullanim') === 0) : echo 'active';
                                      endif; ?>" href="/sistem-raporlari/sistem/sistem-kullanim/">
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Sistem Kullanım</span>
                  </a>
                  <!--end:Menu link-->
                </div>
                <!--end:Menu item-->

                                              <!--begin:Menu item-->
                                              <div class="menu-item">
                  <!--begin:Menu link-->
                  <a class="menu-link <?php if ($_SERVER['REQUEST_URI'] == '/sistem-raporlari/sistem/mobil-mesajlar' || strpos($_SERVER['REQUEST_URI'], '/sistem-raporlari/sistem/mobil-mesajlar') === 0) : echo 'active';
                                      endif; ?>" href="/sistem-raporlari/sistem/mobil-mesajlar/">
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Mobil Mesajlar</span>
                  </a>
                  <!--end:Menu link-->
                </div>
                <!--end:Menu item-->

                <!--begin:Menu item-->
                <div class="menu-item">
                  <!--begin:Menu link-->
                  <a class="menu-link <?php if ($_SERVER['REQUEST_URI'] == '/sistem-raporlari/sistem/elektronik-posta' || strpos($_SERVER['REQUEST_URI'], '/sistem-raporlari/sistem/elektronik-posta') === 0) : echo 'active';
                                      endif; ?>" href="/sistem-raporlari/sistem/elektronik-posta/">
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Elektronik Posta</span>
                  </a>
                  <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
              </div>
              <!--end:Menu sub-->
            </div>
            <!--end:Menu item-->
          </div>
          <!--end:Menu sub-->
        </div>
        <!--end:Menu item-->
        <!--begin:Menu item-->
        <div id="tanimlamalar" class="menu-item <?php if ($_SERVER['REQUEST_URI'] == '/tanimlamalar/' || strpos($_SERVER['REQUEST_URI'], '/tanimlamalar/') === 0) : echo 'here show';
                                                endif; ?> menu-accordion">
          <!--begin:Menu link-->
          <span class="menu-link">
            <a class="d-flex w-100" href="/tanimlamalar/">
              <span class="menu-icon">
                <i class="fa-solid fa-link"></i>
              </span>
              <span class="menu-title">Tanımlamalar</span>
            </a>
            <span class="menu-arrow" data-pw-menu-trigger="click" data-pw-target="#tanimlamalar"></span>
          </span>
          <!--end:Menu link-->
          <!--begin:Menu sub-->
          <div class="menu-sub menu-sub-accordion <?php if ($_SERVER['REQUEST_URI'] == '/tanimlamalar/kullanicilar' || strpos($_SERVER['REQUEST_URI'], '/tanimlamalar/kullanicilar') === 0) : echo 'here show';
                                                  endif; ?> menu-active-bg">
            <!--begin:Menu item-->
            <div id="kullanicilar" class="menu-item menu-accordion <?php if ($_SERVER['REQUEST_URI'] == '/tanimlamalar/kullanicilar' || strpos($_SERVER['REQUEST_URI'], '/tanimlamalar/kullanicilar') === 0) : echo 'show';
                                                                    endif; ?>">
              <!--begin:Menu link-->
              <div class="menu-link  <?php if ($_SERVER['REQUEST_URI'] == '/tanimlamalar/kullanicilar' || strpos($_SERVER['REQUEST_URI'], '/tanimlamalar/kullanicilar') === 0) : echo 'active';
                                      endif; ?>">
                <a class="d-flex w-100" href="/tanimlamalar/kullanicilar">
                  <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                  </span>
                  <span class="menu-title">Kullanıcılar</span>
                </a>
                <span class="menu-arrow" data-pw-menu-trigger="click" data-pw-target="#kullanicilar"></span>
              </div>
              <!--end:Menu link-->
              <!--begin:Menu sub-->
              <div class="menu-sub menu-sub-accordion menu-active-bg">
                <!--begin:Menu item-->
                <div class="menu-item">
                  <!--begin:Menu link-->
                  <a class="menu-link <?php if ($_SERVER['REQUEST_URI'] == '/tanimlamalar/kullanicilar/ad-tanimlari' || strpos($_SERVER['REQUEST_URI'], '/tanimlamalar/kullanicilar/ad-tanimlari') === 0) : echo 'active';
                                      endif; ?>" href="/tanimlamalar/kullanicilar/ad-tanimlari/">
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">AD Tanımları</span>
                  </a>
                  <!--end:Menu link-->
                </div>
                <!--end:Menu item-->

                <!--begin:Menu item-->
                <div class="menu-item">
                  <!--begin:Menu link-->
                  <a class="menu-link <?php if ($_SERVER['REQUEST_URI'] == '/tanimlamalar/kullanicilar/departmanlar/' || strpos($_SERVER['REQUEST_URI'], '/tanimlamalar/kullanicilar/departmanlar/') === 0) : echo 'active';
                                      endif; ?>" href="/tanimlamalar/kullanicilar/departmanlar/">
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Departmanlar</span>
                  </a>
                  <!--end:Menu link-->
                </div>
                <!--end:Menu item-->

                <!--begin:Menu item-->
                <div class="menu-item">
                  <!--begin:Menu link-->
                  <a class="menu-link <?php if ($_SERVER['REQUEST_URI'] == '/tanimlamalar/kullanicilar/ekran-yetkilendirme/' || strpos($_SERVER['REQUEST_URI'], '/tanimlamalar/kullanicilar/ekran-yetkilendirme/') === 0) : echo 'active';
                                      endif; ?>" href="/tanimlamalar/kullanicilar/ekran-yetkilendirme/">
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Ekran Yetkilendirme</span>
                  </a>
                  <!--end:Menu link-->
                </div>
                <!--end:Menu item-->

                <!--begin:Menu item-->
                <div class="menu-item">
                  <!--begin:Menu link-->
                  <a class="menu-link <?php if ($_SERVER['REQUEST_URI'] == '/tanimlamalar/kullanicilar/kullanici-ek-ozellikleri/' || strpos($_SERVER['REQUEST_URI'], '/tanimlamalar/kullanicilar/kullanici-ek-ozellikleri/') === 0) : echo 'active';
                                      endif; ?>" href="/tanimlamalar/kullanicilar/kullanici-ek-ozellikleri/">
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Kullanıcı Ek Özellikleri</span>
                  </a>
                  <!--end:Menu link-->
                </div>
                <!--end:Menu item-->

                <!--begin:Menu item-->
                <div class="menu-item">
                  <!--begin:Menu link-->
                  <a class="menu-link <?php if ($_SERVER['REQUEST_URI'] == '/tanimlamalar/kullanicilar/kullanici-gruplari/' || strpos($_SERVER['REQUEST_URI'], '/tanimlamalar/kullanicilar/kullanici-gruplari/') === 0) : echo 'active';
                                      endif; ?>" href="/tanimlamalar/kullanicilar/kullanici-gruplari/">
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Kullanıcı Grupları</span>
                  </a>
                  <!--end:Menu link-->
                </div>
                <!--end:Menu item-->

                <!--begin:Menu item-->
                <div class="menu-item">
                  <!--begin:Menu link-->
                  <a class="menu-link <?php if ($_SERVER['REQUEST_URI'] == '/tanimlamalar/kullanicilar/pozisyonlar/' || strpos($_SERVER['REQUEST_URI'], '/tanimlamalar/kullanicilar/pozisyonlar/') === 0) : echo 'active';
                                      endif; ?>" href="/tanimlamalar/kullanicilar/pozisyonlar/">
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Pozisyonlar</span>
                  </a>
                  <!--end:Menu link-->
                </div>
                <!--end:Menu item-->

                <!--begin:Menu item-->
                <div class="menu-item">
                  <!--begin:Menu link-->
                  <a class="menu-link <?php if ($_SERVER['REQUEST_URI'] == '/tanimlamalar/kullanicilar/yetki-setleri/' || strpos($_SERVER['REQUEST_URI'], '/tanimlamalar/kullanicilar/yetki-setleri/') === 0) : echo 'active';
                                      endif; ?>" href="/tanimlamalar/kullanicilar/yetki-setleri/">
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Yetki Setleri</span>
                  </a>
                  <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
              </div>
              <!--end:Menu sub-->
            </div>
            <!--end:Menu item-->

            <!--begin:Menu item-->
            <div id="dokuman_yonetimi" data-kt-menu-trigger="click" class="menu-item menu-accordion <?php if ($_SERVER['REQUEST_URI'] == '/tanimlamalar/dokuman-yonetimi' || strpos($_SERVER['REQUEST_URI'], '/tanimlamalar/dokuman-yonetimi') === 0) : echo 'show';
                                                                                                    endif; ?>">
              <!--begin:Menu link-->
              <span class="menu-link <?php if ($_SERVER['REQUEST_URI'] == '/tanimlamalar/dokuman-yonetimi' || strpos($_SERVER['REQUEST_URI'], '/tanimlamalar/dokuman-yonetimi') === 0) : echo 'active';
                                      endif; ?>">
                <span class="menu-bullet">
                  <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">Döküman Yönetimi</span>
                <span class="menu-arrow"></span>
              </span>
              <!--end:Menu link-->
              <!--begin:Menu sub-->
              <div class="menu-sub menu-sub-accordion menu-active-bg">
                <!--begin:Menu item-->
                <div class="menu-item">
                  <!--begin:Menu link-->
                  <a class="menu-link <?php if ($_SERVER['REQUEST_URI'] == '/tanimlamalar/dokuman-yonetimi/belge-taslaklari/' || strpos($_SERVER['REQUEST_URI'], '/tanimlamalar/dokuman-yonetimi/belge-taslaklari') === 0) : echo 'active';
                                      endif; ?>" href="/tanimlamalar/dokuman-yonetimi/belge-taslaklari">
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Belge Taslakları</span>
                  </a>
                  <!--end:Menu link-->
                </div>
                <!--end:Menu item-->

                <!--begin:Menu item-->
                <div class="menu-item">
                  <!--begin:Menu link-->
                  <a class="menu-link <?php if ($_SERVER['REQUEST_URI'] == '/tanimlamalar/dokuman-yonetimi/seda-tanimlari/' || strpos($_SERVER['REQUEST_URI'], '/tanimlamalar/dokuman-yonetimi/seda-tanimlari') === 0) : echo 'active';
                                      endif; ?>" href="/tanimlamalar/dokuman-yonetimi/seda-tanimlari/">
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">SEDA Tanımları</span>
                  </a>
                  <!--end:Menu link-->
                </div>
                <!--end:Menu item-->

                <!--begin:Menu item-->
                <div class="menu-item">
                  <!--begin:Menu link-->
                  <a class="menu-link <?php if ($_SERVER['REQUEST_URI'] == '/tanimlamalar/dokuman-yonetimi/isdd-tanimlari/' || strpos($_SERVER['REQUEST_URI'], '/tanimlamalar/dokuman-yonetimi/isdd-tanimlari') === 0) : echo 'active';
                                      endif; ?>" href="/tanimlamalar/dokuman-yonetimi/isdd-tanimlari/">
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">ISDD Tanımları</span>
                  </a>
                  <!--end:Menu link-->
                </div>
                <!--end:Menu item-->

                <!--begin:Menu item-->
                <div class="menu-item">
                  <!--begin:Menu link-->
                  <a class="menu-link <?php if ($_SERVER['REQUEST_URI'] == '/tanimlamalar/dokuman-yonetimi/e-fatura/' || strpos($_SERVER['REQUEST_URI'], '/tanimlamalar/dokuman-yonetimi/e-fatura') === 0) : echo 'active';
                                      endif; ?>" href="/tanimlamalar/dokuman-yonetimi/e-fatura/">
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">E-Fatura</span>
                  </a>
                  <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item">
                  <!--begin:Menu link-->
                  <a class="menu-link <?php if ($_SERVER['REQUEST_URI'] == '/tanimlamalar/dokuman-yonetimi/kabinet-tanimlari/' || strpos($_SERVER['REQUEST_URI'], '/tanimlamalar/dokuman-yonetimi/kabinet-tanimlari') === 0) : echo 'active';
                                      endif; ?>" href="/tanimlamalar/dokuman-yonetimi/kabinet-tanimlari/">
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Kabinet Tanımları</span>
                  </a>
                  <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
              </div>
              <!--end:Menu sub-->
            </div>
            <!--end:Menu item-->

            <!--begin:Menu item-->
            <div id="is_zekasi" data-kt-menu-trigger="click" class="menu-item menu-accordion <?php if ($_SERVER['REQUEST_URI'] == '/tanimlamalar/is-zekasi' || strpos($_SERVER['REQUEST_URI'], '/tanimlamalar/is-zekasi') === 0) : echo 'show';
                                                                                              endif; ?>">
              <!--begin:Menu link-->
              <span class="menu-link <?php if ($_SERVER['REQUEST_URI'] == '/tanimlamalar/is-zekasi' || strpos($_SERVER['REQUEST_URI'], '/tanimlamalar/is-zekasi') === 0) : echo 'active';
                                      endif; ?>">
                <span class="menu-bullet">
                  <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">İş Zekası</span>
                <span class="menu-arrow"></span>
              </span>
              <!--end:Menu link-->
              <!--begin:Menu sub-->
              <div class="menu-sub menu-sub-accordion menu-active-bg">
                <!--begin:Menu item-->
                <div class="menu-item">
                  <!--begin:Menu link-->
                  <a class="menu-link <?php if ($_SERVER['REQUEST_URI'] == '/tanimlamalar/is-zekasi/rapor-tasarim/' || strpos($_SERVER['REQUEST_URI'], '/tanimlamalar/is-zekasi/rapor-tasarim') === 0) : echo 'active';
                                      endif; ?>" href="/tanimlamalar/is-zekasi/rapor-tasarim">
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Rapor Tasarım</span>
                  </a>
                  <!--end:Menu link-->
                </div>
                <!--end:Menu item-->


                <!--begin:Menu item-->
                <div class="menu-item">
                  <!--begin:Menu link-->
                  <a class="menu-link <?php if ($_SERVER['REQUEST_URI'] == '/tanimlamalar/is-zekasi/veri-kaynaklari/' || strpos($_SERVER['REQUEST_URI'], '/tanimlamalar/is-zekasi/veri-kaynaklari') === 0) : echo 'active';
                                      endif; ?>" href="/tanimlamalar/is-zekasi/veri-kaynaklari">
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Veri Kaynakları</span>
                  </a>
                  <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
              </div>
              <!--end:Menu sub-->
            </div>
            <!--end:Menu item-->

               <!--begin:Menu item-->
               <div class="menu-item">
                  <!--begin:Menu link-->
                  <a class="menu-link <?php if ($_SERVER['REQUEST_URI'] == '/tanimlamalar/surec-taslaklari/' || strpos($_SERVER['REQUEST_URI'], '/tanimlamalar/surec-taslaklari/') === 0) : echo 'active';
                                      endif; ?>" href="/tanimlamalar/surec-taslaklari/">
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Süreç Taslakları</span>
                  </a>
                  <!--end:Menu link-->
                </div>
                <!--end:Menu item-->

                           


            <!--begin:Menu item-->
            <div id="tedarikciler" class="menu-item menu-accordion <?php if ($_SERVER['REQUEST_URI'] == '/tanimlamalar/tedarikciler' || strpos($_SERVER['REQUEST_URI'], '/tanimlamalar/tedarikciler') === 0) : echo 'show';
                                                                    endif; ?>">
              <!--begin:Menu link-->
              <div class="menu-link  <?php if ($_SERVER['REQUEST_URI'] == '/tanimlamalar/tedarikciler' || strpos($_SERVER['REQUEST_URI'], '/tanimlamalar/tedarikciler') === 0) : echo 'active';
                                      endif; ?>">
                <a class="d-flex w-100" href="/tanimlamalar/tedarikciler">
                  <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                  </span>
                  <span class="menu-title">Tedarikçiler</span>
                </a>
                <span class="menu-arrow" data-pw-menu-trigger="click" data-pw-target="#tedarikciler"></span>
              </div>
              <!--end:Menu link-->
              <!--begin:Menu sub-->
              <div class="menu-sub menu-sub-accordion menu-active-bg">
                <!--begin:Menu item-->
                <div class="menu-item">
                  <!--begin:Menu link-->
                  <a class="menu-link <?php if ($_SERVER['REQUEST_URI'] == '/tanimlamalar/tedarikciler/tedarikci-ek-ozellikleri' || strpos($_SERVER['REQUEST_URI'], '/tanimlamalar/tedarikciler/tedarikci-ek-ozellikleri') === 0) : echo 'active';
                                      endif; ?>" href="/tanimlamalar/tedarikciler/tedarikci-ek-ozellikleri">
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Tedarikçi Ek Özellikleri</span>
                  </a>
                  <!--end:Menu link-->

                  <!--begin:Menu link-->
                  <a class="menu-link <?php if ($_SERVER['REQUEST_URI'] == '/tanimlamalar/tedarikciler/kullanici-ek-ozellikleri' || strpos($_SERVER['REQUEST_URI'], '/tanimlamalar/tedarikciler/kullanici-ek-ozellikleri') === 0) : echo 'active';
                                      endif; ?>" href="/tanimlamalar/tedarikciler/kullanici-ek-ozellikleri">
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Kullanıcı Ek Özellikleri</span>
                  </a>
                  <!--end:Menu link-->

                  <!--begin:Menu link-->
                  <a class="menu-link <?php if ($_SERVER['REQUEST_URI'] == '/tanimlamalar/tedarikciler/calisma-alanlari' || strpos($_SERVER['REQUEST_URI'], '/tanimlamalar/tedarikciler/calisma-alanlari') === 0) : echo 'active';
                                      endif; ?>" href="/tanimlamalar/tedarikciler/calisma-alanlari">
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Çalışma Alanları</span>
                  </a>
                  <!--end:Menu link-->
                  <!--begin:Menu link-->
                  <a class="menu-link <?php if ($_SERVER['REQUEST_URI'] == '/tanimlamalar/tedarikciler/faaliyet-alanlari' || strpos($_SERVER['REQUEST_URI'], '/tanimlamalar/tedarikciler/faaliyet-alanlari') === 0) : echo 'active';
                                      endif; ?>" href="/tanimlamalar/tedarikciler/faaliyet-alanlari">
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Faaliyet Alanları</span>
                  </a>
                  <!--end:Menu link-->
                  <!--begin:Menu link-->
                  <a class="menu-link <?php if ($_SERVER['REQUEST_URI'] == '/tanimlamalar/tedarikciler/kategoriler' || strpos($_SERVER['REQUEST_URI'], '/tanimlamalar/tedarikciler/kategoriler') === 0) : echo 'active';
                                      endif; ?>" href="/tanimlamalar/tedarikciler/kategoriler">
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Kategoriler</span>
                  </a>
                  <!--end:Menu link-->
                  <!--begin:Menu link-->
                  <a class="menu-link <?php if ($_SERVER['REQUEST_URI'] == '/tanimlamalar/tedarikciler/posta-sablonlari' || strpos($_SERVER['REQUEST_URI'], '/tanimlamalar/tedarikciler/posta-sablonlari') === 0) : echo 'active';
                                      endif; ?>" href="/tanimlamalar/tedarikciler/posta-sablonlari">
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Posta Şablonları</span>
                  </a>
                  <!--end:Menu link-->
                  <!--begin:Menu link-->
                  <a class="menu-link <?php if ($_SERVER['REQUEST_URI'] == '/tanimlamalar/tedarikciler/duyurular' || strpos($_SERVER['REQUEST_URI'], '/tanimlamalar/tedarikciler/duyurular') === 0) : echo 'active';
                                      endif; ?>" href="/tanimlamalar/tedarikciler/duyurular">
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Duyurular</span>
                  </a>
                  <!--end:Menu link-->

                  <!--begin:Menu link-->
                  <a class="menu-link <?php if ($_SERVER['REQUEST_URI'] == '/tanimlamalar/tedarikciler/klasor-sablonlari' || strpos($_SERVER['REQUEST_URI'], '/tanimlamalar/tedarikciler/klasor-sablonlari') === 0) : echo 'active';
                                      endif; ?>" href="/tanimlamalar/tedarikciler/klasor-sablonlari">
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Klasör Şablonları</span>
                  </a>
                  <!--end:Menu link-->

                  <!--begin:Menu link-->
                  <a class="menu-link <?php if ($_SERVER['REQUEST_URI'] == '/tanimlamalar/tedarikciler/gorunum' || strpos($_SERVER['REQUEST_URI'], '/tanimlamalar/tedarikciler/gorunum') === 0) : echo 'active';
                                      endif; ?>" href="/tanimlamalar/tedarikciler/gorunum">
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Görünüm</span>
                  </a>
                  <!--end:Menu link-->

                  <!--begin:Menu link-->
                  <a class="menu-link <?php if ($_SERVER['REQUEST_URI'] == '/tanimlamalar/tedarikciler/parametreler' || strpos($_SERVER['REQUEST_URI'], '/tanimlamalar/tedarikciler/parametreler') === 0) : echo 'active';
                                      endif; ?>" href="/tanimlamalar/tedarikciler/parametreler">
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Parametreler</span>
                  </a>
                  <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
              </div>
              <!--end:Menu sub-->
            </div>
            <!--end:Menu item-->

            <!--begin:Menu item-->
            <div id="surec_yonetimi" class="menu-item menu-accordion <?php if ($_SERVER['REQUEST_URI'] == '/tanimlamalar/surec-yonetimi' || strpos($_SERVER['REQUEST_URI'], '/tanimlamalar/surec-yonetimi') === 0) : echo 'show';
                                                                      endif; ?>">
              <!--begin:Menu link-->
              <div class="menu-link  <?php if ($_SERVER['REQUEST_URI'] == '/tanimlamalar/surec-yonetimi' || strpos($_SERVER['REQUEST_URI'], '/tanimlamalar/surec-yonetimi') === 0) : echo 'active';
                                      endif; ?>">
                <div class="d-flex w-100">
                  <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                  </span>
                  <span class="menu-title">Süreç Yönetimi</span>
                </div>
                <span class="menu-arrow" data-pw-menu-trigger="click" data-pw-target="#surec_yonetimi"></span>
              </div>
              <!--end:Menu link-->
              <!--begin:Menu sub-->
              <div class="menu-sub menu-sub-accordion menu-active-bg">
                <!--begin:Menu item-->
                <div class="menu-item">
                   <!--begin:Menu link-->
                   <a class="menu-link <?php if ($_SERVER['REQUEST_URI'] == '/tanimlamalar/surec-yonetimi/surec-taslaklari' || strpos($_SERVER['REQUEST_URI'], '/tanimlamalar/surec-yonetimi/surec-taslaklari') === 0) : echo 'active';
                                      endif; ?>" href="/tanimlamalar/surec-yonetimi/surec-taslaklari/">
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Süreç Taslakları</span>
                  </a>
                  <!--end:Menu link-->
                  <!--begin:Menu link-->
                  <a class="menu-link <?php if ($_SERVER['REQUEST_URI'] == '/tanimlamalar/surec-yonetimi/kep-tanimlari' || strpos($_SERVER['REQUEST_URI'], '/tanimlamalar/surec-yonetimi/kep-tanimlari') === 0) : echo 'active';
                                      endif; ?>" href="/tanimlamalar/surec-yonetimi/kep-tanimlari/">
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">KEP Tanımları</span>
                  </a>
                  <!--end:Menu link-->
                  <!--begin:Menu link-->
                  <a class="menu-link <?php if ($_SERVER['REQUEST_URI'] == '/tanimlamalar/surec-yonetimi/organizasyon-semalari' || strpos($_SERVER['REQUEST_URI'], '/tanimlamalar/surec-yonetimi/organizasyon-semalari') === 0) : echo 'active';
                                      endif; ?>" href="/tanimlamalar/surec-yonetimi/organizasyon-semalari">
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Organizasyon Şemaları</span>
                  </a>
                  <!--end:Menu link-->
                  <!--begin:Menu link-->
                  <a class="menu-link <?php if ($_SERVER['REQUEST_URI'] == '/tanimlamalar/surec-yonetimi/kural-motoru' || strpos($_SERVER['REQUEST_URI'], '/tanimlamalar/surec-yonetimi/kural-motoru') === 0) : echo 'active';
                                      endif; ?>" href="/tanimlamalar/surec-yonetimi/kural-motoru">
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Kural Motorları</span>
                  </a>
                  <!--end:Menu link-->
                  <!--begin:Menu link-->
                  <a class="menu-link <?php if ($_SERVER['REQUEST_URI'] == '/tanimlamalar/surec-yonetimi/takvim-tanimlari' || strpos($_SERVER['REQUEST_URI'], '/tanimlamalar/surec-yonetimi/takvim-tanimlari') === 0) : echo 'active';
                                      endif; ?>" href="/tanimlamalar/surec-yonetimi/takvim-tanimlari">
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Takvim Kuralları</span>
                  </a>
                  <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
              </div>
              <!--end:Menu sub-->
            </div>
            <!--end:Menu item-->

            <!--begin:Menu item-->
            <div id="sistem" class="menu-item menu-accordion <?php if ($_SERVER['REQUEST_URI'] == '/tanimlamalar/sistem' || strpos($_SERVER['REQUEST_URI'], '/tanimlamalar/sistem') === 0) : echo 'show';
                                                              endif; ?>">
              <!--begin:Menu link-->
              <div class="menu-link  <?php if ($_SERVER['REQUEST_URI'] == '/tanimlamalar/sistem' || strpos($_SERVER['REQUEST_URI'], '/tanimlamalar/sistem') === 0) : echo 'active';
                                      endif; ?>">
                <div class="d-flex w-100">
                  <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                  </span>
                  <span class="menu-title">Sistem</span>
                </div>
                <span class="menu-arrow" data-pw-menu-trigger="click" data-pw-target="#sistem"></span>
              </div>
              <!--end:Menu link-->
              <!--begin:Menu sub-->
              <div class="menu-sub menu-sub-accordion menu-active-bg">
                <!--begin:Menu item-->
                <div class="menu-item">
                  <!--begin:Menu link-->
                  <a class="menu-link <?php if ($_SERVER['REQUEST_URI'] == '/tanimlamalar/sistem/depolama-birimleri' || strpos($_SERVER['REQUEST_URI'], '/tanimlamalar/sistem/depolama-birimleri') === 0) : echo 'active';
                                      endif; ?>" href="/tanimlamalar/sistem/depolama-birimleri">
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Depolama Birimleri</span>
                  </a>
                  <!--end:Menu link-->
                </div>
                <!--end:Menu item-->

                <!--begin:Menu item-->
                <div class="menu-item">
                  <!--begin:Menu link-->
                  <a class="menu-link <?php if ($_SERVER['REQUEST_URI'] == '/tanimlamalar/sistem/plugin-tanimlamalari' || strpos($_SERVER['REQUEST_URI'], '/tanimlamalar/sistem/plugin-tanimlamalari') === 0) : echo 'active';
                                      endif; ?>" href="/tanimlamalar/sistem/plugin-tanimlamalari">
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Plugin Tanımlamaları</span>
                  </a>
                  <!--end:Menu link-->
                </div>
                <!--end:Menu item-->

                <!--begin:Menu item-->
                <div class="menu-item">
                  <!--begin:Menu link-->
                  <a class="menu-link <?php if ($_SERVER['REQUEST_URI'] == '/tanimlamalar/sistem/entegrasyon-tanimlari' || strpos($_SERVER['REQUEST_URI'], '/tanimlamalar/sistem/entegrasyon-tanimlari') === 0) : echo 'active';
                                      endif; ?>" href="/tanimlamalar/sistem/entegrasyon-tanimlari">
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Entegrasyon Tanımları</span>
                  </a>
                  <!--end:Menu link-->
                </div>
                <!--end:Menu item-->

                <!--begin:Menu item-->
                <div class="menu-item">
                  <!--begin:Menu link-->
                  <a class="menu-link <?php if ($_SERVER['REQUEST_URI'] == '/tanimlamalar/sistem/metod-tanimlari' || strpos($_SERVER['REQUEST_URI'], '/tanimlamalar/sistem/metod-tanimlari') === 0) : echo 'active';
                                      endif; ?>" href="/tanimlamalar/sistem/metod-tanimlari">
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Metod Tanımları</span>
                  </a>
                  <!--end:Menu link-->
                </div>
                <!--end:Menu item-->

                <!--begin:Menu item-->
                <div class="menu-item">
                  <!--begin:Menu link-->
                  <a class="menu-link <?php if ($_SERVER['REQUEST_URI'] == '/tanimlamalar/sistem/gorunum' || strpos($_SERVER['REQUEST_URI'], '/tanimlamalar/sistem/gorunum') === 0) : echo 'active';
                                      endif; ?>" href="/tanimlamalar/sistem/gorunum">
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Görünüm</span>
                  </a>
                  <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item">
                  <!--begin:Menu link-->
                  <a class="menu-link <?php if ($_SERVER['REQUEST_URI'] == '/tanimlamalar/sistem/uyari-tanimlari' || strpos($_SERVER['REQUEST_URI'], '/tanimlamalar/sistem/uyari-tanimlari') === 0) : echo 'active';
                                      endif; ?>" href="/tanimlamalar/sistem/uyari-tanimlari">
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Uyarı Tanımları</span>
                  </a>
                  <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item">
                  <!--begin:Menu link-->
                  <a class="menu-link <?php if ($_SERVER['REQUEST_URI'] == '/tanimlamalar/sistem/elektronik-posta' || strpos($_SERVER['REQUEST_URI'], '/tanimlamalar/sistem/elektronik-posta') === 0) : echo 'active';
                                      endif; ?>" href="/tanimlamalar/sistem/elektronik-posta">
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Elektronik Posta</span>
                  </a>
                  <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item">
                  <!--begin:Menu link-->
                  <a class="menu-link <?php if ($_SERVER['REQUEST_URI'] == '/tanimlamalar/sistem/parametreler' || strpos($_SERVER['REQUEST_URI'], '/tanimlamalar/sistem/parametreler') === 0) : echo 'active';
                                      endif; ?>" href="/tanimlamalar/sistem/parametreler">
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Parametreler</span>
                  </a>
                  <!--end:Menu link-->
                </div>
                <!--end:Menu item-->

                <!--begin:Menu item-->
                <div class="menu-item">
                  <!--begin:Menu link-->
                  <a class="menu-link <?php if ($_SERVER['REQUEST_URI'] == '/tanimlamalar/sistem/liste-tanimlari' || strpos($_SERVER['REQUEST_URI'], '/tanimlamalar/sistem/liste-tanimlari') === 0) : echo 'active';
                                      endif; ?>" href="/tanimlamalar/sistem/liste-tanimlari">
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Liste Tanımları</span>
                  </a>
                  <!--end:Menu link-->
                </div>
                <!--end:Menu item-->

                <!--begin:Menu item-->
                <div class="menu-item">
                  <!--begin:Menu link-->
                  <a class="menu-link <?php if ($_SERVER['REQUEST_URI'] == '/tanimlamalar/sistem/web-servis-tanimlari' || strpos($_SERVER['REQUEST_URI'], '/tanimlamalar/sistem/web-servis-tanimlari') === 0) : echo 'active';
                                      endif; ?>" href="/tanimlamalar/sistem/web-servis-tanimlari">
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Web Servis Tanımları</span>
                  </a>
                  <!--end:Menu link-->
                </div>
                <!--end:Menu item-->

                <!--begin:Menu item-->
                <div class="menu-item">
                  <!--begin:Menu link-->
                  <a class="menu-link <?php if ($_SERVER['REQUEST_URI'] == '/tanimlamalar/sistem/transfer-tanimlari' || strpos($_SERVER['REQUEST_URI'], '/tanimlamalar/sistem/transfer-tanimlari') === 0) : echo 'active';
                                      endif; ?>" href="/tanimlamalar/sistem/transfer-tanimlari">
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Transfer Tanımları</span>
                  </a>
                  <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
              </div>
              <!--end:Menu sub-->
            </div>
            <!--end:Menu item-->

          </div>
          <!--end:Menu sub-->
        </div>
        <!--end:Menu item-->
      </div>
      <!--end::Menu-->
    </div>
    <!--end::Menu wrapper-->
  </div>
  <!--end::sidebar menu-->
</div>
<!--end::Sidebar-->