<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:65:"D:\laragon\www\apiicms/application/admin\view\template\index.html";i:1721554327;s:62:"D:\laragon\www\apiicms\application\admin\view\public\head.html";i:1721554327;s:62:"D:\laragon\www\apiicms\application\admin\view\public\foot.html";i:1721554327;}*/ ?>
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
    <div class="my-btn-box lh30" >
        <div class="btn btn-primary-group fl">
            <a data-full="1" data-href="<?php echo url('info'); ?>?fpath=<?php echo $curpath; ?>&fname=" class="btn btn-primary me-1 j-iframe"><i class="layui-icon">&#xe654;</i><?php echo lang('add'); ?></a>
        </div>
        <div class="page-filter fr" >

        </div>
    </div>

    <form class="layui-form layui-form-pane" action="">
        <table class="layui-table mt10">
        <thead>
        <tr>
            <th><?php echo lang('file_name'); ?></th>
            <th width="200"><?php echo lang('file_des'); ?></th>
            <th width="200"><?php echo lang('file_size'); ?></th>
            <th width="200"><?php echo lang('file_time'); ?></th>
            <th width="100"><?php echo lang('opt'); ?></th>
        </tr>
        </thead>

        <?php if($ischild == 1): ?>
        <tr><td colspan="4"><a href="<?php echo url('template/index',['path'=>$uppath]); ?>">...<?php echo lang('return_parent_dir'); ?></a></td></tr>
        <?php endif; if(is_array($files) || $files instanceof \think\Collection || $files instanceof \think\Paginator): $i = 0; $__LIST__ = $files;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <tr>
                <?php if($vo['isfile'] == 1): ?>
                <th><?php echo $vo['name']; ?></a></th>
                <td><?php echo $vo['note']; ?></td>
                <td><?php echo $vo['size']; ?></td>
                <td><?php echo mac_day($vo['time'],'color'); ?></td>
                <td class="w200">
                    <a class="badge badge-dim bg-primary j-iframe" data-full="1" data-href="<?php echo url('info'); ?>?fpath=<?php echo $vo['path']; ?>&fname=<?php echo $vo['name']; ?>" href="javascript:;" title="<?php echo lang('edit'); ?>"><?php echo lang('edit'); ?></a>
                    <a class="badge badge-dim bg-primary j-tr-del" data-href="<?php echo url('del'); ?>?fname=<?php echo $vo['fullname']; ?>" href="javascript:;" title="<?php echo lang('del'); ?>"><?php echo lang('del'); ?></a>
                </td>
                <?php else: ?>
                <th><a href="<?php echo url('template/index',['path'=>$vo['path']]); ?>"><?php echo $vo['name']; ?></a></th>
                <td><?php echo $vo['note']; ?></td>
                <td></td>
                <td><?php echo mac_day($vo['time'],'color'); ?></td>
                <td></td>
                <?php endif; ?>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
        <tfoot>
            <tr><td colspan="5"><?php echo lang('admin/template/current_dir'); ?>: <?php echo str_replace('@','/',$curpath); ?>, <?php echo lang('sum'); ?> <b class="red"><?php echo $num_path; ?></b> <?php echo lang('dir'); ?>, <b class="red"><?php echo $num_file; ?></b> <?php echo lang('file'); ?>, <?php echo lang('occupies'); ?> <b class="red"><?php echo $sum_size; ?></b> <?php echo lang('space'); ?></td></tr>
        </tfoot>
    </table>
    </form>
</div>
<script type="text/javascript" src="/static/js/admin_common.js?<?php echo $MAC_VERSION; ?>"></script>
<script type="text/javascript">
    function data_info(path,name)
    {
        var index = layer.open({
            type: 2,
            shade:0.4,
            title: "<?php echo lang('edit'); ?>",
            content: "<?php echo url('template/info'); ?>?fpath="+path+'&fname='+name
        });

        layer.full(index);
    }

    function data_del(id)
    {
        if(!id){
            id  = checkIds('fname[]');
        }
        layer.confirm("<?php echo lang('del_confirm'); ?>", function (index) {
            location.href = "<?php echo url('template/del'); ?>?fname=" + id;
        });
    }

    $(function(){

    });
</script>
</body>
</html>