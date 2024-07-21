<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:63:"D:\laragon\www\apiicms/application/admin\view\domain\index.html";i:1721554327;s:62:"D:\laragon\www\apiicms\application\admin\view\public\head.html";i:1721554327;s:62:"D:\laragon\www\apiicms\application\admin\view\public\foot.html";i:1721554327;}*/ ?>
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
    <div class="showpic" style="display:none;"><img class="showpic_img" width="120" height="160" referrerPolicy="no-referrer"></div>
    
    <form class="layui-form layui-form-pane" method="post" action="">
        <input type="hidden" name="vod_id" value="<?php echo $info['vod_id']; ?>">

        <div class="layui-tab">
            <ul class="layui-tab-title ">
                <li class="layui-this"><?php echo lang('admin/domain/title'); ?></a></li>
            </ul>
            <div class="layui-tab-content">

                <div class="layui-tab-item layui-show">

                    <blockquote class="layui-elem-quote layui-quote-nm">
                        <?php echo lang('admin/domain/help_tip'); ?>
                        <a class="btn btn-primary me-1" href="<?php echo url('export'); ?>" ><?php echo lang('export'); ?></a>
                        <a class="btn btn-primary me-1 layui-upload" data-href="<?php echo url('import'); ?>" ><?php echo lang('import'); ?></a>
                    </blockquote>

                    <script>
                        var arr_len = <?php echo count($domain_list); ?>;
                    </script>
                    <?php 
                    $n=0;
                     ?>

                    <div id="domain_list" class="contents">
                        <?php if(is_array($domain_list) || $domain_list instanceof \think\Collection || $domain_list instanceof \think\Paginator): $i = 0; $__LIST__ = $domain_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;
                        $n++;
                         ?>
                        <div class="layui-form-item tr" data-i="<?php echo $key; ?>">
                        <label class="layui-form-label"><?php echo lang('website'); ?><?php echo $n; ?>:</label>
                            <div class="layui-input-inline w150"><input type="text" name="domain[site_url][]" class="layui-input" placeholder="<?php echo lang('domain'); ?>" value="<?php echo $vo['site_url']; ?>"></div>&nbsp;
                            <div class="layui-input-inline w150"><input type="text" name="domain[site_name][]" class="layui-input" placeholder="<?php echo lang('site_name'); ?>" value="<?php echo $vo['site_name']; ?>"></div>&nbsp;
                            <div class="layui-input-inline w150"><input type="text" name="domain[site_keywords][]" class="layui-input" placeholder="<?php echo lang('keywords'); ?>" value="<?php echo $vo['site_keywords']; ?>"></div>&nbsp;
                            <div class="layui-input-inline w150"><input type="text" name="domain[site_description][]" class="layui-input" placeholder="<?php echo lang('description'); ?>" value="<?php echo $vo['site_description']; ?>"></div>&nbsp;
                            <div class="layui-input-inline w150"><select name="domain[template_dir][]"><option value="no"><?php echo lang('select_template'); ?>.</option><?php if(is_array($templates) || $templates instanceof \think\Collection || $templates instanceof \think\Paginator): $i = 0; $__LIST__ = $templates;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i;?><option value="<?php echo $vo2; ?>" <?php if($vo2 == $vo['template_dir']): ?>selected<?php endif; ?>><?php echo $vo2; ?></option><?php endforeach; endif; else: echo "" ;endif; ?></select></div>
                            <div class="layui-input-inline w150"><input type="text" name="domain[html_dir][]" class="layui-input" placeholder="<?php echo lang('tpl_dir'); ?>" value="<?php echo $vo['html_dir']; ?>"></div>
                            <div class="layui-input-inline w150"><input type="text" name="domain[ads_dir][]" class="layui-input" placeholder="<?php echo lang('ads_dir'); ?>" value="<?php echo $vo['ads_dir']; ?>"></div>
                            <div> <a class="badge badge-dim bg-primary j-tr-del" data-href="<?php echo url('del?ids='.$vo['site_url']); ?>" href="javascript:;" title="<?php echo lang('del'); ?>"><?php echo lang('del'); ?></a></div>
                        </div>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                    <div class="layui-form-item">
                        <label class=""><button class="btn btn-primary me-1 radius j-player-add" type="button"><?php echo lang('add_group'); ?></button></label>
                        <div class="layui-input-block">

                        </div>
                    </div>


        </div>

            </div>
        </div>

                <div class="layui-form-item center">
                    <div class="layui-input-block">

                        <button type="submit" class="btn btn-primary me-1" lay-submit="" lay-filter="formSubmit" data-child=""><?php echo lang('btn_save'); ?></button>
                        <button class="btn btn-warning me-1 layui-btn-warm" type="reset"><?php echo lang('btn_reset'); ?></button>
                    </div>
                </div>
    </form>

</div>
<script type="text/javascript" src="/static/js/admin_common.js?<?php echo $MAC_VERSION; ?>"></script>

<script type="text/javascript">
    var template_select='<?php if(is_array($templates) || $templates instanceof \think\Collection || $templates instanceof \think\Paginator): $i = 0; $__LIST__ = $templates;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo $vo; ?>"><?php echo $vo; ?></option><?php endforeach; endif; else: echo "" ;endif; ?>';

    layui.use(['form','layer','upload'], function () {
        // 操作对象
        var form = layui.form
                , layer = layui.layer
                , $ = layui.jquery
            , upload = layui.upload;


        upload.render({
            elem: '.layui-upload'
            ,url: "<?php echo url('domain/import'); ?>"
            ,method: 'post'
            ,exts:'txt'
            ,before: function(input) {
                layer.msg("<?php echo lang('upload_ing'); ?>", {time:3000000});
            },done: function(res, index, upload) {
                var obj = this.item;
                if (res.code == 0) {
                    layer.msg(res.msg);
                    return false;
                }
                location.reload();
            }
        });

        $('.j-player-add').on('click',function(){
            arr_len++;
            var tpl='<div class="layui-form-item" ><label class="layui-form-label"><?php echo lang('website'); ?>:'+arr_len+'</label><div class="layui-input-inline w150"><input type="text" name="domain[site_url][]" class="layui-input" placeholder="<?php echo lang('domain'); ?>" ></div>&nbsp;<div class="layui-input-inline w150"><input type="text" name="domain[site_name][]" class="layui-input" placeholder="<?php echo lang('site_name'); ?>"></div>&nbsp;<div class="layui-input-inline w150"><input type="text" name="domain[site_keywords][]" class="layui-input" placeholder="<?php echo lang('keywords'); ?>" ></div>&nbsp;<div class="layui-input-inline w150"><input type="text" name="domain[site_description][]" class="layui-input" placeholder="<?php echo lang('description'); ?>" ></div>&nbsp;<div class="layui-input-inline w150"><select name="domain[template_dir][]"><option value="no"><?php echo lang('select_template'); ?>.</option>'+template_select+'</select></div><div class="layui-input-inline w150"><input type="text" name="domain[html_dir][]" class="layui-input" placeholder="<?php echo lang('tpl_dir'); ?>" ></div><div class="layui-input-inline w150"><input type="text" name="domain[ads_dir][]" class="layui-input" placeholder="<?php echo lang('ads_dir'); ?>" ></div><div><a href="javascript:void(0)" class="badge bg-dark me-1 j-editor-remove"><?php echo lang('del'); ?></a>&nbsp;</div></div>';
            $("#domain_list").append(tpl);

            form.render('select');
        });

        if(arr_len==0) {
            $('.j-player-add').click();
        }
    });
    
</script>

</body>
</html>