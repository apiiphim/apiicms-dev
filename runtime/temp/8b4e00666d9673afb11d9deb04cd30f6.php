<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:62:"D:\laragon\www\apiicms/application/admin\view\order\index.html";i:1721554327;s:62:"D:\laragon\www\apiicms\application\admin\view\public\head.html";i:1721554327;s:62:"D:\laragon\www\apiicms\application\admin\view\public\foot.html";i:1721554327;}*/ ?>
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

    <div class="my-toolbar-box" >
        <div class="center mb10">
            <form class="layui-form " method="post" action="<?php echo url('index'); ?>">
                <div class="layui-input-inline w150">
                    <select name="status">
                        <option value=""><?php echo lang('select_order_status'); ?></option>
                        <option value="0" <?php if($param['status'] == '0'): ?>selected <?php endif; ?>><?php echo lang('not_paid'); ?></option>
                        <option value="1" <?php if($param['status'] == '1'): ?>selected <?php endif; ?>><?php echo lang('paid'); ?></option>
                    </select>
                </div>
                <div class="layui-input-inline">
                    <input type="text" autocomplete="off" placeholder="<?php echo lang('wd'); ?>" class="layui-input" name="wd" value="<?php echo mac_filter_xss($param['wd']); ?>">
                </div>
                <button class="btn btn-primary me-1 mgl-20 j-search" ><?php echo lang('btn_search'); ?></button>
            </form>
        </div>

        <div class="btn btn-primary-group">
            <a data-href="<?php echo url('del'); ?>" class="btn btn-primary me-1 j-page-btns confirm"><i class="layui-icon">&#xe640;</i><?php echo lang('del'); ?></a>
            <a data-href="<?php echo url('del'); ?>?ids=1&all=1" class="btn btn-primary me-1 j-ajax" confirm="<?php echo lang('clear_confirm'); ?>"><i class="layui-icon">&#xe640;</i><?php echo lang('clear'); ?></a>
        </div>

    </div>

     <form class="layui-form " method="post" id="pageListForm">
         <table class="layui-table" lay-size="sm">
            <thead>
            <tr>
                <th width="25"><input type="checkbox" lay-skin="primary" lay-filter="allChoose"></th>
                <th width="50"><?php echo lang('id'); ?></th>
                <th width="100"><?php echo lang('admin/order/order_no'); ?></th>
                <th width="80"><?php echo lang('admin/order/order_money'); ?></th>
                <th width="80"><?php echo lang('admin/order/order_status'); ?></th>
                <th width="130"><?php echo lang('admin/order/order_time'); ?></th>
                <th width="100"><?php echo lang('admin/order/pay_type'); ?></th>
                <th width="130"><?php echo lang('admin/order/pay_time'); ?></th>
                <th width="80"><?php echo lang('user'); ?></th>
                <th width="50"><?php echo lang('opt'); ?></th>
            </tr>
            </thead>

            <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <tr>
                <td><input type="checkbox" name="ids[]" value="<?php echo $vo['order_id']; ?>" class="layui-checkbox checkbox-ids" lay-skin="primary"></td>
                <td><?php echo $vo['order_id']; ?></td>
                <td><?php echo $vo['order_code']; ?></td>
                <td><?php echo $vo['order_price']; ?></td>
                <td><?php echo mac_get_order_status_text($vo['order_status']); ?></td>
                <td><?php echo mac_day($vo['order_time'],'color'); ?></td>
                <td><?php echo $vo['order_type']; ?></td>
                <td><?php echo mac_day($vo['order_paytime'],'color'); ?></td>
                <td><?php echo $vo['user_id']; ?>、<?php echo $vo['user_name']; ?></td>
                <td>
                    <a class="badge badge-dim bg-primary j-tr-del" data-href="<?php echo url('del?ids='.$vo['order_id']); ?>" href="javascript:;" title="<?php echo lang('del'); ?>"><?php echo lang('del'); ?></a>
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
    var curUrl="<?php echo url('order/index',$param); ?>";
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