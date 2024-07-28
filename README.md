# apiicms-dev
Hỗ trợ tự động cập nhật và ..... xem thêm tại https://t.me/apiionlines
# Donate tác giả
Em nhận donate của các bác!
ví USDT TRC20 : TNAaEjUsWFaZLNhdooM3Aqs1kcUacFsZRE
Em xin chân thành cảm ơn!
# Hướng dẫn cài đặt
- Up lên host hoặc vps
- Giải nén
- Chạy tên miền đã thêm
- Cài đặt theo hướng dẫn
- Sửa truy cập admin từ 69.php thành gì tùy ý bạn để bảo mật
- Chạy từ 7.4 tới 8.4
- Thay đổi quảng cáo: Thư mục gốc /static/player/artplayer/index.html
    Sửa:    const TVC_VIDEO
            const TVC_URL

# Changelog
- Thêm phim bằng TMDB
- Sửa hoàn toàn lỗi lọc phim
- Sửa giao diện admin
- Thêm crawler các nguồn phim miễn phí
- Nâng cấp phiên bản PHP 8.3
- Tự động thêm nổi bật với phim chiếu rạp
- Thêm máy chủ phát phim theo các nguồn
- Hỗ trợ gộp nguồn từ Apii.online
- ....


# PHP version
```Yêu cầu PHP >= 7.4```

# Cấu hình Nginx/Apache
```nginx
  <IfModule mod_rewrite.c>
  Options +FollowSymlinks -Multiviews
  RewriteEngine on

  RewriteCond %{REQUEST_FILENAME} !-d
  RewriteCond %{REQUEST_FILENAME} !-f
  RewriteRule ^(.*)$ index.php?/$1 [QSA,PT,L]
  </IfModule>
```

```apache
location / {
 if (!-e $request_filename) {
        rewrite ^/index.php(.*)$ /index.php?s=$1 last;
        rewrite ^/admin.php(.*)$ /admin.php?s=$1 last;
        rewrite ^/api.php(.*)$ /api.php?s=$1 last;
        rewrite ^(.*)$ /index.php?s=$1 last;
        break;
   }
}
```
