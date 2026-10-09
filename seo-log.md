# SEO Log — pizzaboxliners.net

> Not: Bu dosya git'e eklenmedi (untracked). main'e push = otomatik FTP deploy olduğu için bilinçli olarak commitlenmedi.

---

## 2026-10-09 — B5 Dönüşüm takibi (kod tarafı)

- **Branch:** `seo/b5-conversion-tracking` (commit `e20fe67`)
- **Değişen dosyalar:**
  - `app/Config/Tracking.php` (yeni) — `adsId`, `labelWhatsapp`, `labelEmail`, `labelContactForm`; hepsi boş yer tutucu, `.env` ile override edilebilir (`tracking.adsId = AW-...`)
  - `app/Views/layouts/main.php` — `window.pblTracking` config çıktısı; `adsId` doluysa `gtag('config', AW-...)`
  - `public/assets/js/main.js` — `wa.me` tıklaması → `whatsapp_click`, `mailto:` tıklaması → `email_click`, `form[data-track="contact"]` gönderimi → `contact_form_submit`. GA4 event her zaman; Ads `conversion` sadece ID + label doluysa. `link_location` parametresi: content / cta / sticky / footer.
- **Etkilenen URL'ler:** tüm sayfalar (layout + main.js)
- **Test:** lokal; tıklamalar doğru event'leri üretti, `tel:` tetiklemedi; env override ile `gtag('config','AW-…')` basıldı.
- **Diff gate:** Kaldırılan öğe yok. Mevcut `conversion_event_page_view` event'i olduğu gibi duruyor.
- **Not:** Sitede şu an iletişim formu yok (commit 993b872 ile kaldırılmış). Form geri gelirse `<form data-track="contact">` eklemek yeterli.
- **Bekleyen:** Conversion ID + 3 label `[VERİ GEREKLİ]`; merge/deploy onayı.

## 2026-10-09 — B1 Teknik özellik tablosu

- **Branch:** `seo/b1-specifications` (commit `ef4ed0d`)
- **Değişen dosyalar:**
  - `app/Config/ProductSpecs.php` (yeni) — tek veri kaynağı; `null` satırlar ne tabloda ne schema'da görünür
  - `app/Views/partials/spec_table.php` (yeni)
  - `app/Controllers/Products.php` — iki sayfa için ortak `productSchema()`; width/depth (29 CMT) + `additionalProperty`
  - `app/Views/products/pizza_box_liners.php`, `app/Views/products/wholesale_pizza_box_liners.php` — Specifications bölümü eklendi
- **Etkilenen URL'ler:** `/products/pizza-box-liners`, `/products/wholesale-pizza-box-liners`
- **Şu an dolu tek satır:** Standard size — 29 × 29 cm (11.4 × 11.4 in)
- **Diff gate:** ⚠️ Product schema'dan `offers` bloğu (url + `availability: InStock`, fiyatsız) **kaldırıldı** — talimat gereği ("offers sadece veri gelirse"). Başka kaldırılan öğe yok; title/meta/canonical değişmedi.
- **Bekleyen:** Diğer tüm spec değerleri `[VERİ GEREKLİ]`; merge/deploy onayı.

## 2026-10-09 — B3 Test sayfası iskeleti

- **Branch:** `seo/b3-heat-test-skeleton` (commit `f266a9f`)
- **Değişen dosyalar:**
  - `app/Config/Routes.php` — `blog/pizza-box-liner-heat-test`
  - `app/Controllers/Blog.php` — `HEAT_TEST_PUBLISHED = false`; false iken production'da 404
  - `app/Views/blog/pizza_box_liner_heat_test.php` (yeni) — yöntem tablosu, boş sonuç tablosu, 4 foto + 1 video yer tutucu
- **Etkilenen URL'ler:** `/blog/pizza-box-liner-heat-test` (yeni; production'da 404)
- **Sitemap / blog listesi:** eklenmedi (yayın onayında eklenecek)
- **Diff gate:** Yeni sayfa, kaldırılan öğe yok. Rakip iddiası yok.
- **Bekleyen:** Test verileri + görseller `[VERİ GEREKLİ]`; yayın onayı.

## 2026-10-09 — B2 ABD stoğu

- Kod değişikliği yok. `[KARAR]` bekleniyor.

## 2026-10-09 — Deploy + Ads/GA4 ayarları

- **Deploy:** B5 + B1 main'e merge (`00d41bd`, `e9055bd`), push → GitHub Actions "Deploy to Production" başarılı.
- **Canlı doğrulama:** iki ürün sayfasında Specifications tablosu + schema width/depth var, `offers` yok; `main.js` yeni event'leri içeriyor; `/blog/pizza-box-liner-heat-test` canlıda 404.
- **B5 yolu:** A (GA4 key event → Ads import). Ads conversion ID/label gerekmiyor; `Config\Tracking` boş kalıyor.
- **Ads (YILDIRIM OFSET 466-375-4652):** `PAGE_VIEW` (GA4 `conversion_event_page_view`) Birincil → **İkincil** yapıldı (kullanıcı onaylı).
- **GA4 (Pizza Box Liners, p542348385):** canlı sitede `whatsapp_click` + `email_click` test olarak 1'er kez tetiklendi. Henüz Events listesinde görünmüyor (işleme gecikmesi).
- **Bekleyen:** event'ler listede görününce yıldızla key event yap → Ads'te "Yeni dönüşüm → Google Analytics (GA4) içe aktar" ile ikisini Birincil olarak ekle.
- **Not:** GA4'te `generate_lead` zaten key event ve Pizza Box Liners stream'inden aktif geliyor; kaynağı sitede kod değil (muhtemelen GA4 tarafı kural). İncelenmeli.
- **B2:** Karar = hayır. NJ deposu hiçbir yere yazılmayacak.

## 2026-10-09 — generate_lead incelemesi

- Kaynak: GA4 Admin → Events → Custom configurations → Custom events. Kod değil.
  - `generate_lead` = `event_name equals page_view` AND `page_path starts with /contact` → /contact sayfasını görüntüleyen herkes "lead".
  - `ads_conversion_Hakkımızda_1` = `page_view` AND `page_path starts with /about` → Ads'te "Hakkımızda" adıyla **Birincil** dönüşüm.
- `generate_lead` Ads'e import edilmemiş (Ads listesinde yok) → şu an çift sayım yok.
- Not: 2026-10-09 test sırasında /contact ziyareti 1 adet `generate_lead` üretti.
- Değişiklik yapılmadı; öneriler kullanıcıya sunuldu.
