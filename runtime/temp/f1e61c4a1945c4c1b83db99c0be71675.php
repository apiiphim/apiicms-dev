<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:62:"D:\laragon\www\apiicms/application/admin\view\admin\index.html";i:1721554327;s:62:"D:\laragon\www\apiicms\application\admin\view\public\head.html";i:1721554327;s:62:"D:\laragon\www\apiicms\application\admin\view\public\foot.html";i:1721554327;}*/ ?>
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
<div class="page-container p10">

    <div class="my-toolbar-box">

        <div class="btn btn-primary-group">
            <a data-href="<?php echo url('info'); ?>" class="btn btn-primary me-1 j-iframe"><i class="layui-icon">&#xe654;</i><?php echo lang('add'); ?></a>
            <a data-href="<?php echo url('del'); ?>" class="btn btn-primary me-1 j-page-btns confirm"><i class="layui-icon">&#xe640;</i><?php echo lang('del'); ?></a>
        </div>

    </div>

    <form class="layui-form " method="post" id="pageListForm">
        <table class="layui-table" lay-size="sm">
            <thead>
            <tr>
                <th width="25"><input type="checkbox" lay-skin="primary" lay-filter="allChoose"></th>
                <th width="100"><?php echo lang('id'); ?></th>
                <th ><?php echo lang('name'); ?></th>
                <th width="100"><?php echo lang('status'); ?></th>
                <th width="140"><?php echo lang('last_login_time'); ?></th>
                <th width="140"><?php echo lang('last_login_ip'); ?></th>
                <th width="130"><?php echo lang('login_num'); ?></th>
                <th width="100"><?php echo lang('opt'); ?></th>
            </tr>
            </thead>

            <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <tr>
                <td>
                    <?php if($admin['admin_id'] != $vo['admin_id']): ?>
                    <input type="checkbox" name="ids[]" value="<?php echo $vo['admin_id']; ?>" class="layui-checkbox checkbox-ids" lay-skin="primary">
                    <?php endif; ?>
                </td>
                <td><?php echo $vo['admin_id']; ?></td>
                <td><?php echo htmlspecialchars($vo['admin_name']); ?></td>
                <td>
                    <input type="checkbox" name="status" <?php if($vo['admin_status'] == 1): ?>checked<?php endif; ?> value="<?php echo $vo['admin_status']; ?>" lay-skin="switch" lay-filter="switchStatus" lay-text="<?php echo lang('enable'); ?>|<?php echo lang('disable'); ?>" data-href="<?php echo url('field?col=admin_status&ids='.$vo['admin_id']); ?>">
                </td>
                <td><?php echo mac_day($vo['admin_last_login_time'],'color'); ?></td>
                <td><?php echo long2ip($vo['admin_last_login_ip']); ?></td>
                <td><?php echo $vo['admin_login_num']; ?></td>
                <td class="w200">
                    <a class="badge badge-dim bg-primary j-iframe" data-href="<?php echo url('info?id='.$vo['admin_id']); ?>" href="javascript:;" title="<?php echo lang('edit'); ?>"><?php echo lang('edit'); ?></a>
                    <?php if($admin['admin_id'] != $vo['admin_id']): ?>
                    <a class="badge badge-dim bg-primary j-tr-del" data-href="<?php echo url('del?ids='.$vo['admin_id']); ?>" href="javascript:;" title="<?php echo lang('del'); ?>"><?php echo lang('del'); ?></a>
                    <?php endif; ?>
                </td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
        <div id="pages" class="center"></div>
    </form>
</div>

<script type="text/javascript" src="/static/js/admin_common.js?<?php echo $MAC_VERSION; ?>"></script>

<script type="text/javascript">
    var curUrl="<?php echo url('admin/index',$param); ?>";
    layui.use(['laypage', 'layer'], function() {
        var laypage = layui.laypage
                , layer = layui.layer;

        laypage.render({
            elem: 'pages'
            ,count: <?php echo $total; ?>
            ,limit: <?php echo $limit; ?>
            ,curr: <?php echo $page; ?>
            ,layout: ['count', 'prev', 'page', 'next', 'limit', 'skip']
            ,jump: function(obj,first){
                if(!first){
                    location.href = curUrl.replace('%7Bpage%7D',obj.curr).replace('%7Blimit%7D',obj.limit);
                }
            }
        });
    });
</script>
</body>
</html>