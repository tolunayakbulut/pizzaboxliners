# cPanel Deployment Guide — pizzaboxliners.net

## Sunucu Yapısı

```
/home/CPANEL_KULLANICI/
├── pizzaboxliners/        ← 1. ADIM: bu klasörü oluştur
│   ├── app/
│   ├── vendor/
│   ├── writable/
│   ├── composer.json
│   └── .env              ← .env.production'dan düzenlenerek
└── public_html/           ← 2. ADIM: buraya public/ içeriği
    ├── index.php          ← deploy/index.php (bu klasördeki)
    ├── .htaccess          ← public/.htaccess
    ├── assets/
    ├── favicon.ico
    └── robots.txt
```

---

## ADIM 1 — pizzaboxliners/ klasörünü oluştur ve yükle

cPanel File Manager'da `/home/CPANEL_KULLANICI/` içinde `pizzaboxliners` klasörü oluştur.

İçine şunları yükle (public/ klasörü HARİÇ her şey):
- `app/`
- `vendor/`
- `writable/`
- `composer.json`
- `composer.lock`
- `spark`

---

## ADIM 2 — public_html/ içine yükle

`public/` klasörünün İÇİNDEKİLERİ (klasörün kendisini değil):
- `deploy/index.php` → `public_html/index.php` olarak yükle
- `public/.htaccess` → `public_html/.htaccess`
- `public/assets/` → `public_html/assets/`
- `public/favicon.ico` → `public_html/favicon.ico`
- `public/robots.txt` → `public_html/robots.txt`

---

## ADIM 3 — Veritabanı kur

1. cPanel > **MySQL Databases** > yeni database oluştur (örn. `cpuser_pizzaboxliners`)
2. Yeni kullanıcı oluştur, database'e ekle, **Tüm İzinler** ver
3. cPanel > **phpMyAdmin** > oluşturduğun database'i seç > **SQL** sekmesi
4. `deploy/database.sql` dosyasının içeriğini yapıştır > **Git**

---

## ADIM 4 — .env dosyasını ayarla

`deploy/.env.production` dosyasını kopyala, `.env` olarak kaydet.
İçindeki şu değerleri düzenle:

```
database.default.database = cpuser_pizzaboxliners
database.default.username = cpuser_dbuser
database.default.password = sifren
email.SMTPPass            = mail_sifren
encryption.key            = hex2bin:RASTGELE_32BYTE_HEX
```

`.env` dosyasını `pizzaboxliners/` klasörüne yükle (public_html/ değil).

### Encryption key üretmek için:
cPanel > Terminal (varsa) ya da lokal terminalde:
```bash
php -r "echo 'hex2bin:' . bin2hex(random_bytes(32)) . PHP_EOL;"
```

---

## ADIM 5 — writable/ izinleri

cPanel File Manager'da `pizzaboxliners/writable/` klasörünü ve alt klasörlerini seç:
- `chmod 755` veya `chmod 775`

---

## ADIM 6 — Test et

`https://pizzaboxliners.net/` adresini aç.

Hata alırsan → cPanel > `pizzaboxliners/writable/logs/` klasöründeki log dosyasına bak.

---

## PHP Sürümü Kontrolü

cPanel > **Select PHP Version** → **8.2** veya üstü seç.

---

## Notlar

- `vendor/` klasörü büyüktür (~20MB). FTP ile yüklemek yavaş olabilir.
  ZIP yapıp cPanel File Manager ile yükleyip sunucuda extract etmek daha hızlıdır.
- `writable/` klasörü boş yüklenebilir, alt klasörler (`cache/`, `logs/`, `session/`, `uploads/`) otomatik oluşur.
