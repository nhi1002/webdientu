<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'dientu' );

/** Username của database */
define( 'DB_USER', 'dientu' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'J}E?H6zj*](dw$w[di>Hf-)<BD;V>gjXJq>(W+8>4K=-x63^ag:5YN8ON]7~X?;p' );
define( 'SECURE_AUTH_KEY',  '`Fh-:(qGYv_Y}h9i9pfkTTukrXWo;WM[p9j43FdO8$f_n,D[{|yn327T&n/UF/2x' );
define( 'LOGGED_IN_KEY',    '_ HTg4s8JHIpo*x Vp=[tBa/9 nlUKsD7]f@.DnmV!@bmB2s}@j],J.7N_DE@6yl' );
define( 'NONCE_KEY',        'W)](t+.VKK0uG?.^DgCjCQU)cA@Cp~:OM+u!Xj#U&VzIwmPwn@l=ek[~ &}+IDD3' );
define( 'AUTH_SALT',        'S}e/ZJW>lStSda<foH75`QpMv]6%=Og`NK_W!j= =+i0A$;QThq#WMD PE)3d)ED' );
define( 'SECURE_AUTH_SALT', '0Ni9|`,],*L}RG6}HP85^fUidcwzi!53EcX9Ni71}|H2@4d~9~Sc0(3WIQWlBL>]' );
define( 'LOGGED_IN_SALT',   'Nrr;t]<!;Ov,M&7u(SuBjB{x7-P9pG_MBfeFxUIu)[A=7qUZLaY0}W%tQe2NMwg5' );
define( 'NONCE_SALT',       '/pm]Sik9!>YsLwJ[X (_L(3o-jSkrBYGy!8=qYep6b&Avu/a{FKN;aZ]We%^NDtW' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
