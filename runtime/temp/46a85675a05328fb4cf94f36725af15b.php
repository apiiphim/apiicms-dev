<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:59:"D:\laragon\www\apiicms/application/admin\view\make\opt.html";i:1721554327;s:62:"D:\laragon\www\apiicms\application\admin\view\public\head.html";i:1721554327;s:62:"D:\laragon\www\apiicms\application\admin\view\public\foot.html";i:1721554327;}*/ ?>
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

<div class="container py-3">

    <form method="post" action="" id="form1">

        <div class="row mb-4">
            <div class="col-2">
                <label for="vodtype" class="form-label"><?php echo lang('vod'); ?><?php echo lang('type'); ?>:</label>
                <select name="vodtype[]" id="vodtype" multiple class="form-select" style="height: 150px; width: 200px;">
                    <?php if(is_array($vod_type_list) || $vod_type_list instanceof \think\Collection || $vod_type_list instanceof \think\Paginator): $i = 0; $__LIST__ = $vod_type_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <option value="<?php echo $vo['type_id']; ?>"><?php echo $vo['type_name']; ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
            </div>
            <div class="col-10 d-flex align-items-end">
                <div class="btn-group">
                    <button type="button" class="btn btn-primary me-1" onclick="post('ac=type&tab=vod');"><?php echo lang('admin/make/select_type'); ?></button>
                    <button type="button" class="btn btn-primary me-1" onclick="post('ac=type&tab=vod&vodtype=<?php echo $vod_type_ids; ?>');"><?php echo lang('admin/make/all_type'); ?></button>
                    <button type="button" class="btn btn-primary me-1" onclick="post('ac=type&tab=vod&vodtype=<?php echo $vod_type_ids_today; ?>&ac2=day');"><?php echo lang('admin/make/today_type'); ?></button>
                    <button type="button" class="btn btn-primary me-1" onclick="post('ac=info&tab=vod');"><?php echo lang('admin/make/select_info'); ?></button>
                    <button type="button" class="btn btn-primary me-1" onclick="post('ac=info&tab=vod&vodtype=<?php echo $vod_type_ids; ?>');"><?php echo lang('admin/make/all_info'); ?></button>
                    <button type="button" class="btn btn-primary me-1" onclick="post('ac=info&tab=vod&vodtype=<?php echo $vod_type_ids_today; ?>&ac2=day');"><?php echo lang('admin/make/today_info'); ?></button>
                    <button type="button" class="btn btn-primary me-1" onclick="post('ac=info&tab=vod&ac2=nomake');"><?php echo lang('admin/make/no_make_info'); ?></button>
                    <button type="button" class="btn btn-primary me-1" onclick="post('ac=info&tab=vod&vodtype=<?php echo $vod_type_ids_today; ?>&ac2=day&jump=1');"><?php echo lang('admin/make/one_today'); ?></button>
                </div>
            </div>
            <div class="col-2">
                <label for="arttype" class="form-label"><?php echo lang('art'); ?><?php echo lang('type'); ?>:</label>
                <select name="arttype[]" id="arttype" multiple class="form-select" style="height: 150px;">
                    <?php if(is_array($art_type_list) || $art_type_list instanceof \think\Collection || $art_type_list instanceof \think\Paginator): $i = 0; $__LIST__ = $art_type_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <option value="<?php echo $vo['type_id']; ?>"><?php echo $vo['type_name']; ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
            </div>
            <div class="col-10 d-flex align-items-end">
                <div class="btn-group">
                    <button type="button" class="btn btn-primary me-1" onclick="post('ac=type&tab=art');"><?php echo lang('admin/make/select_type'); ?></button>
                    <button type="button" class="btn btn-primary me-1" onclick="post('ac=type&tab=art&arttype=<?php echo $art_type_ids; ?>');"><?php echo lang('admin/make/all_type'); ?></button>
                    <button type="button" class="btn btn-primary me-1" onclick="post('ac=type&tab=art&arttype=<?php echo $art_type_ids_today; ?>&ac2=day');"><?php echo lang('admin/make/today_type'); ?></button>
                    <button type="button" class="btn btn-primary me-1" onclick="post('ac=info&tab=art');"><?php echo lang('admin/make/select_info'); ?></button>
                    <button type="button" class="btn btn-primary me-1" onclick="post('ac=info&tab=art&arttype=<?php echo $art_type_ids; ?>');"><?php echo lang('admin/make/all_info'); ?></button>
                    <button type="button" class="btn btn-primary me-1" onclick="post('ac=info&tab=art&arttype=<?php echo $art_type_ids_today; ?>&ac2=day');"><?php echo lang('admin/make/today_info'); ?></button>
                    <button type="button" class="btn btn-primary me-1" onclick="post('ac=info&tab=art&ac2=nomake');"><?php echo lang('admin/make/no_make_info'); ?></button>
                    <button type="button" class="btn btn-primary me-1" onclick="post('ac=info&tab=art&arttype=<?php echo $art_type_ids_today; ?>&ac2=day&jump=1');"><?php echo lang('admin/make/one_today'); ?></button>
                </div>
            </div>
        </div>

        <hr class="my-4">

        <div class="row mb-4">
            <div class="col-2">
                <label for="topic" class="form-label"><?php echo lang('admin/make/topic_list'); ?>:</label>
                <select name="topic[]" id="topic" multiple class="form-select" style="height: 150px;">
                    <?php if(is_array($topic_list) || $topic_list instanceof \think\Collection || $topic_list instanceof \think\Paginator): $i = 0; $__LIST__ = $topic_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <option value="<?php echo $vo['topic_id']; ?>"><?php echo $vo['topic_name']; ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
            </div>
            <div class="col-10 d-flex align-items-end">
                <div class="btn-group">
                    <button type="button" class="btn btn-primary me-1" onclick="post('ac=topic_info');"><?php echo lang('admin/make/select_topic'); ?></button>
                    <button type="button" class="btn btn-primary me-1" onclick="post('ac=topic_info&topic=<?php echo $topic_ids; ?>');"><?php echo lang('admin/make/all_topic'); ?></button>
                    <button type="button" class="btn btn-primary me-1" onclick="post('ac=topic_index');"><?php echo lang('admin/make/topic_index'); ?></button>
                </div>
            </div>
            <div class="col-2">
                <label for="label" class="form-label"><?php echo lang('admin/make/label_page'); ?>:</label>
                <select name="label[]" id="label" multiple class="form-select" style="height: 150px;">
                    <?php if(is_array($label_list) || $label_list instanceof \think\Collection || $label_list instanceof \think\Paginator): $i = 0; $__LIST__ = $label_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <option value="<?php echo $vo; ?>"><?php echo $vo; ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
            </div>
            <div class="col-10 d-flex align-items-end">
                <div class="btn-group">
                    <button type="button" class="btn btn-primary me-1" onclick="post('ac=label');"><?php echo lang('make_page'); ?></button>
                    <button type="button" class="btn btn-primary me-1" onclick="post('ac=label&label=<?php echo $label_ids; ?>');"><?php echo lang('make_all'); ?></button>
                </div>
            </div>
        </div>

        <hr class="my-4">

        <div class="row mb-4">
            <div class="col-2">
                <label class="form-label">SiteMap:</label>
            </div>
            <div class="col-md-2">
                <label for="ps" class="form-label"><?php echo lang('admin/make/make_page_num'); ?>:</label>
                <input type="text" name="ps" id="ps" class="form-control" value="1">
            </div>
            <div class="col-8 d-flex align-items-end">
                <div class="btn-group">
                    <button type="button" class="btn btn-primary me-1" onclick="post('ac=rss&ac2=index');"><?php echo lang('admin/make/rss'); ?></button>
                    <button type="button" class="btn btn-primary me-1" onclick="post('ac=rss&ac2=google');"><?php echo lang('admin/make/google'); ?></button>
                    <button type="button" class="btn btn-primary me-1" onclick="post('ac=rss&ac2=baidu');"><?php echo lang('admin/make/baidu'); ?></button>
                    <button type="button" class="btn btn-primary me-1" onclick="post('ac=rss&ac2=so');"><?php echo lang('admin/make/so'); ?></button>
                    <button type="button" class="btn btn-primary me-1" onclick="post('ac=rss&ac2=sogou');"><?php echo lang('admin/make/sogou'); ?></button>
                    <button type="button" class="btn btn-primary me-1" onclick="post('ac=rss&ac2=bing');"><?php echo lang('admin/make/bing'); ?></button>
                    <button type="button" class="btn btn-primary me-1" onclick="post('ac=rss&ac2=sm');"><?php echo lang('admin/make/sm'); ?></button>
                </div>
            </div>
            
        </div>

    </form>

</div>

<script type="text/javascript" src="/static/js/admin_common.js?<?php echo $MAC_VERSION; ?>"></script>

<script type="text/javascript">
    var curUrl = "<?php echo url('make'); ?>";
    function post(p) {
        $("#form1").attr("action", curUrl + "?" + p);
        $("#form1").submit();
    }
</script>
</body>
</html>
