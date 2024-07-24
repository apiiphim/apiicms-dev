<?php
/*
Cảm ơn Admin Ramcms: @Brevisnguyen
ApiiCms được phát triển dựa trên Ramcms tiền thân là Maccms, ApiiCms với nhiều cải tiến và sửa lỗi mới giúp cho các bạn tạo lập website chia sẻ video cá nhân miễn phí.
Nhóm Tele hỗ trợ ApiiCms: Tham gia ngay https://t.me/apiionlines
APIICMS dành cho mục đích học tập và nghiên cứu, vui lòng không kinh doanh và tuân thủ luật pháp nước CHXHCN Việt Nam!
*/
header('Content-Type:text/html;charset=utf-8');
if(version_compare(PHP_VERSION,'7.4','<'))  die('Phiên bản PHP yêu cầu >=7.4, vui lòng nâng cấp PHP [PHP version requires > = 7.4，please upgrade]');
@ini_set('max_execution_time', '0');
@ini_set("memory_limit",'-1');
define('ROOT_PATH', __DIR__ . '/');
define('APP_PATH', __DIR__ . '/application/');
define('MAC_COMM', __DIR__.'/application/common/common/');
define('MAC_HOME_COMM', __DIR__.'/application/index/common/');
define('MAC_ADMIN_COMM', __DIR__.'/application/admin/common/');
define('MAC_START_TIME', microtime(true) );
define('BIND_MODULE', 'install');
define('ENTRANCE', 'install');
$in_file = rtrim($_SERVER['SCRIPT_NAME'],'/');
if(substr($in_file,strlen($in_file)-4)!=='.php'){
    $in_file = substr($in_file,0,strpos($in_file,'.php')) .'.php';
}
define('IN_FILE',$in_file);
if(is_file('./application/data/install/install.lock')) {
	echo 'Nếu bạn cần cài đặt lại, vui lòng xóa [To re install, please remove] >>> /application/data/install/install.lock';
	exit;
}

if(!is_writable('./runtime')) {
	echo 'Vui lòng kích hoạt quyền đọc và ghi cho thư mục [runtime] | [Please turn on the read and write permissions of the [runtime] folde]';
	exit;
}

require __DIR__ . '/thinkphp/start.php';
