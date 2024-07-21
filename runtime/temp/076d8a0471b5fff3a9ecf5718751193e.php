<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:68:"D:\laragon\www\apiicms-dev/application/admin\view\index\welcome.html";i:1721554327;s:66:"D:\laragon\www\apiicms-dev\application\admin\view\public\head.html";i:1721554327;s:66:"D:\laragon\www\apiicms-dev\application\admin\view\public\foot.html";i:1721554327;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php echo $title; ?> - <?php echo lang('admin/public/head/title'); ?></title>
    <link rel="stylesheet" href="/static/layui/css/layui.css">
	<link rel="stylesheet" href="/static/css/dashlite.css">
    <link rel="stylesheet" href="/static/css/admin_style.css?<?php echo $MAC_VERSION; ?>">
    <script type="text/javascript" src="/static/js/jquery.js"></script>
    <script type="text/javascript" src="/static/layui/layui.js"></script>
    <script>
        var ROOT_PATH="",ADMIN_PATH="<?php echo $_SERVER['SCRIPT_NAME']; ?>", MAC_VERSION="v10";
    </script>
 <script>
    const translations = {
        '信息': 'Thông tin',
        '播放器代码': 'Mã trình phát',
        '基本设置': 'Cài đặt cơ bản',
        'Disable': 'Tắt',
        'Enable': 'Bật',
        'Yes': 'Có',
        'No': 'Không',
        '页备注': 'Ghi chú trang',
        '上移': 'Đẩy lên',
        '下移': 'Đẩy xuống',
        '确定': 'Chắc chắn',
        '取消': 'Hủy bỏ',
        '接口类型': 'Loại mã',
        '资源类型': 'Tài nguyên',
        '资源站': 'URL tài nguyên',
        '采集选项': 'Tùy chọn cào',
        '采集当天': 'Cào hôm nay',
        '采集本周': 'Cào tuần này',
        '采集所有': 'Cào tất cả',
        '采集所有': 'Thu thập tất cả',
        // Thêm các cặp giá trị khác vào đây
    };
    function translatePage() {
        document.querySelectorAll('*').forEach(element => {
            // Duyệt qua các node con của mỗi phần tử
            element.childNodes.forEach(child => {
                if (child.nodeType === Node.TEXT_NODE) {
                    const text = child.nodeValue.trim();
                    if (translations[text]) {
                        child.nodeValue = translations[text];
                    }
                }
            });

            for (let attr of element.attributes) {
                const text = attr.value.trim();
                if (translations[text]) {
                    element.setAttribute(attr.name, translations[text]);
                }
            }
        });
    }

    document.addEventListener('DOMContentLoaded', translatePage);
    </script>
</head>
<body>
<script>
    var MAC_VERSION='<?php echo $version['code']; ?>',PHP_VERSION='<?php echo PHP_VERSION ?>',THINK_VERSION='<?php echo THINK_VERSION ?>';MAC_LANG='<?php echo $mac_lang; ?>';
</script>
<div class="page-container">
    <?php $pass="<strong class='green'>√</strong>";$error="<strong class='red'>×</strong>";?>

    <blockquote class="layui-elem-quote layui-quote-nm mt10">
        <p class="f-20 text-success"><?php echo lang('admin/index/welcome/tip_warn'); ?></p>
        <p><?php echo lang('admin/index/welcome/filed_login_num'); ?>:<?php echo $admin['admin_login_num']; ?>  <?php echo lang('admin/index/welcome/filed_last_login_ip'); ?>:<?php echo long2ip($admin['admin_last_login_ip']); ?>  <?php echo lang('admin/index/welcome/filed_last_login_time'); ?>:<?php echo mac_day($admin['admin_last_login_time']); ?></p>
    </blockquote>

    <table class="layui-table" >
        <tbody>
            <tr>
                <td width="200"><?php echo lang('admin/index/welcome/filed_os'); ?></td>
                <td><?php echo PHP_OS ?> (<?php echo $_SERVER['SERVER_SOFTWARE'] ?>)</td>
            </tr>
            <tr>
                <td><?php echo lang('admin/index/welcome/filed_host'); ?></td>
                <td><?php echo $_SERVER['HTTP_HOST'] ?></td>
            </tr>
            <tr>
                <td><?php echo lang('admin/index/welcome/filed_max_upload'); ?></td>
                <td><?php echo get_cfg_var("file_uploads") ? get_cfg_var("upload_max_filesize") : $error;?></td>
            </tr>
            <tr>
                <td><?php echo lang('admin/index/welcome/filed_date'); ?></td>
                <td><?php echo date('Y-m-d'); ?></td>
            </tr>
            <tr>
                <td><?php echo lang('admin/index/welcome/filed_php_ver'); ?></td>
                <td><?php echo PHP_VERSION ?></td>
            </tr>
            <tr>
                <td><?php echo lang('admin/index/welcome/filed_thinkphp_ver'); ?></td>
                <td><?php echo THINK_VERSION; ?></td>
            </tr>
            <tr>
                <td><?php echo lang('admin/index/welcome/filed_ver'); ?></td>
                <td><span class="badge bg-danger"><?php echo $version['code']; ?></span></td>
            </tr>
        </tbody>
    </table>
    <?php if($update_sql): ?>
    <table class="tbinfo pleft layui-table" ><thead><th colspan="2"><?php echo lang('admin/index/welcome/tip_update_db'); ?></th></thead><tr><td colspan="2"><font class="tif s20"><?php echo lang('admin/index/welcome/tip_update_db_txt'); ?></font><a class="j-iframe" title="<?php echo lang('admin/index/welcome/tip_update_go'); ?>" data-href="<?php echo url('update/step2'); ?>"><font class="tit s20"><?php echo lang('admin/index/welcome/tip_update_go'); ?></font></a> </td></tr></table>
    <?php endif; ?>
</div>
<script type="text/javascript" src="/static/js/admin_common.js?<?php echo $MAC_VERSION; ?>"></script>
</body>
</html>