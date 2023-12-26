# paperwork-dashboard

## Dosya Yapısı

- `assets` klasörü içerisinde projede bulunan varlıkların (css, js, medya dosyaları vb.) yer aldığı klasördür.

  - Bu klasörün içerisinde temanın orjinal **css**, **js** ve **medya** dosyaları da yer almaktadır. Proje için yazılmış olan özel **css** ve **js** dosyaları da bu klasörü içerisinde yer almaktadır.
    - Özel CSS dosyası `/assets/css/` içerisinde yer alan `global.css` ve `global-dark.css` dosyalarından ibarettir.
    - Özel JS dosyası ise `/assets/js/custom/` klasörü içerisinde `paperwork.js` isiminde bulunmaktadır.
  - Son olarak `assets` klasörünün içersinde `fontawesome` klasörü bulunmaktadır. Burada ise FontAwesome kütüphanesinin dosyları bulunmaktadır. Site içerisindeki iconlar buradaki dosyadan gelmektedir.
  - Yukarıdaki maddelerde yer alan dosyalar haricindeki dosyalar temanın orjinal dosyalarıdır. Bu dosylar içerisinde herhangi bir değişiklik yapılmamıştır!

- `globals` klasörünün içerisinde web sitesinin iskeletini oluşturan öğreler ve tasarımı değişmeyen **html** bölümleri bulunmaktadır. Örneğin `globals` klasörü içerisinde yer alan `sidebar.php` dosyası sitenin her sayafısında bulunmaktadır. Her sayfaya ayrı ayrı eklenmemesi için php kullanılarak sayfalara include edilmiştir.

  - Ek olarak buradaki `history-drawer.php` dosyası bazı sayfalarda yer alan history canvasının bir HTML'i bulunmaktadır. Çeşitli sayfalarda tasarım değişmeksizin içeriği değişen bir bölüm olduğu için bu şekilde `globals` klasörüne eklenmiştir. Projenin bu aşamasında şu an site iskeletinin dışında bu klasörü içerisinde sadece `history-drawer.php` dosyası yer almaktadır. İlerleyen dönemlerde bu dosya haricinde iskelete dahil olmayan bazı php dosyaları eklenebilir.

- `theme` klasörü ise tema dosyalarının orjinal kopyasının barındığı bir klasördür. Bu klasör front-end tarafında geliştirme yaparken kullanılan bir klasördür.

- Projenin root klasöründe (yani ana dizininde) yer alan `index.php` dosyası site içersinde `Dashboard` sayfasını temsil etmektedir.

- Yukarıdaki klasör veya dosyalar haricinde yer alan diğer klasör ve dosyalar web sitesinin sayfalarını oluşturmaktadır.

## Kodlama Yapısı

Kodalama yapısı genel temaya bağlı kalınarak ilerlemiştir. Proje geliştirilirken tekrar kullanılabilirlik ve kolay kullanım ön planda olarak hazırlanmıştır.

- Proje içerisinde yer alan her dosyada yorum satırları bulunmaktadır. Bu yorum satırları HTML elementlerinin, CSS ve JS kodlarının ne amaçla eklendiği konusunda bir bilgi vermektedirler.

### HTML Yapısı
Örneğin aşağıda bir HTML öğesinin içersinde yer alan yorum satırlarını görebilirsiniz. Burada `<!--begin::Card-->` yorum satırı bu öğenin başlangıcını, `<!--end::Card-->` yorum satırı ise bu öğrenin bittiği alanı göstermektedir. Bu yorum satırları hemen hemen her HTML öğesinde yer almaktadır.
```html
<!--begin::Card-->
<a class="hover-elevate-up" href="/tanimlamalar/departmanlar/">
  <div
    class="card border pw-border-stroke py-1 px-6 mb-2 pw-rounded-5 pw-min-w-180px min-h-95px"
  >
    <div class="card-body d-flex align-items justify-content-center">
      <span class="position-relative svg-icon mt-n5">
        <span
          class="position-relative d-inline-flex align-items-center justify-content-center z-index-2 w-60px h-60px"
        >
          <i class="fa-solid fa-grid-2 fs-60px pw-text-primary-300"></i>
        </span>
        <span
          class="position-absolute d-inline-block w-60px h-60px rounded-pill pw-bg-primary-100 start-50"
          style="transform: translate(-50%, 10px)"
        ></span>
      </span>
    </div>
  </div>
  <span class="mt-2 pw-text-primary-800 fs-6 fw-bold"> Departmanlar </span>
</a>
<!--end::Card-->
```

### CSS Yapısı

Proje içerisinde iki adet `css` dosyası bulunmaktadır. Bular `global.css` ve `global-dark.css` olarak yer alır. `global-dark.css` içerisinde dark mode için yazılan `css` kodları yer almaktadır.

`global.css` dosyasına geldiğimizde `html` yapısında olduğu gibi css kodları yorum satırlarıyla birlikte bölümlere ayrılmıştır. Bununla ilgili bir örneği aşağıda görebilirsiniz.
```css
/* begin::Border colors */

.pw-border-primary-300 {
  border-color: var(--pw-primary-300) !important;
}

.pw-border-stroke {
  border-color: var(--pw-stroke-color) !important;
}

.pw-border-neutral-200 {
  border-color: var(--pw-neutral-200) !important;
}

/* end::Border colors */
```

Yine `html` yapısında olduğu gibi `css` kodlarında da `begin` ve `end` yorum satırları kullanılarak başlangıç ve bitişini belirtilmektedir. Ayrıca bu yorum satırlarında örnekte de görüldüğü gibi yorum satırları içerisinde css kodlarının ne amaçla kullanılacağı hakkında kısa bir şekilde bilgi verildiğini de görebilirsiniz (`/* begin::Border colors */`).

### JS Yapısı

CSS'de yer alan yorum satırı kullanımı aynı şekilde JS dosyasındaki kodlar içerisinde de yer almaktadır. Ancak burada bazı kodların yorum satırlarında daha detaylı açıklamalar yer almaktadır. Bunun amacı kodun anlaşılabilirliğini arttırmak ve kullanımı hakkında daha fazla bilgi verebilmektir.