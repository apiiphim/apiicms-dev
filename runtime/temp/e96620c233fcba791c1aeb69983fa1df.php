<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:64:"D:\laragon\www\apiicms/application/admin\view\website\batch.html";i:1721554327;s:62:"D:\laragon\www\apiicms\application\admin\view\public\head.html";i:1721554327;}*/ ?>
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

    <form class="layui-form" method="post" action="">

        <div class="my-toolbar-box">

            <div class="center mb10">

                    <div class="layui-input-inline w150">
                        <select name="type">
                            <option value=""><?php echo lang('select_type'); ?></option>
                            <?php if(is_array($type_tree) || $type_tree instanceof \think\Collection || $type_tree instanceof \think\Paginator): $i = 0; $__LIST__ = $type_tree;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['type_mid'] == 11): ?>
                            <option value="<?php echo $vo['type_id']; ?>" <?php if($param['type'] == $vo['type_id']): ?>selected <?php endif; ?>><?php echo $vo['type_name']; ?></option>
                            <?php if(is_array($vo['child']) || $vo['child'] instanceof \think\Collection || $vo['child'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ch): $mod = ($i % 2 );++$i;?>
                            <option value="<?php echo $ch['type_id']; ?>" <?php if($param['type'] == $ch['type_id']): ?>selected <?php endif; ?>>&nbsp;&nbsp;&nbsp;&nbsp;├&nbsp;<?php echo $ch['type_name']; ?></option>
                            <?php endforeach; endif; else: echo "" ;endif; endif; endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                    </div>
                    <div class="layui-input-inline w150">
                        <select name="status">
                            <option value=""><?php echo lang('select_status'); ?></option>
                            <option value="0" <?php if($param['status'] == '0'): ?>selected <?php endif; ?>><?php echo lang('reviewed_not'); ?></option>
                            <option value="1" <?php if($param['status'] == '1'): ?>selected <?php endif; ?>><?php echo lang('reviewed'); ?></option>
                        </select>
                    </div>
                    <div class="layui-input-inline w150">
                        <select name="level">
                            <option value=""><?php echo lang('select_level'); ?></option>
                            <option value="9" <?php if($param['level'] == '9'): ?>selected <?php endif; ?>><?php echo lang('level'); ?> 9-<?php echo lang('slide'); ?></option>
                            <option value="1" <?php if($param['level'] == '1'): ?>selected <?php endif; ?>><?php echo lang('level'); ?> 1</option>
                            <option value="2" <?php if($param['level'] == '2'): ?>selected <?php endif; ?>><?php echo lang('level'); ?> 2</option>
                            <option value="3" <?php if($param['level'] == '3'): ?>selected <?php endif; ?>><?php echo lang('level'); ?> 3</option>
                            <option value="4" <?php if($param['level'] == '4'): ?>selected <?php endif; ?>><?php echo lang('level'); ?> 4</option>
                            <option value="5" <?php if($param['level'] == '5'): ?>selected <?php endif; ?>><?php echo lang('level'); ?> 5</option>
                            <option value="6" <?php if($param['level'] == '6'): ?>selected <?php endif; ?>><?php echo lang('level'); ?> 6</option>
                            <option value="7" <?php if($param['level'] == '7'): ?>selected <?php endif; ?>><?php echo lang('level'); ?> 7</option>
                            <option value="8" <?php if($param['level'] == '8'): ?>selected <?php endif; ?>><?php echo lang('level'); ?> 8</option>
                        </select>
                    </div>
                    <div class="layui-input-inline w150">
                        <select name="lock">
                            <option value=""><?php echo lang('select_lock'); ?></option>
                            <option value="0" <?php if($param['lock'] == '0'): ?>selected <?php endif; ?>><?php echo lang('unlock'); ?></option>
                            <option value="1" <?php if($param['lock'] == '1'): ?>selected <?php endif; ?>><?php echo lang('lock'); ?></option>
                        </select>
                    </div>
                    <div class="layui-input-inline w150">
                        <select name="pic">
                            <option value=""><?php echo lang('select_pic'); ?></option>
                            <option value="1" <?php if($param['pic'] == '1'): ?>selected<?php endif; ?>><?php echo lang('pic_empty'); ?></option>
                            <option value="2" <?php if($param['pic'] == '2'): ?>selected<?php endif; ?>><?php echo lang('pic_remote'); ?></option>
                            <option value="3" <?php if($param['pic'] == '3'): ?>selected<?php endif; ?>><?php echo lang('pic_sync_err'); ?></option>
                        </select>
                    </div>

                    <div class="layui-input-inline">
                        <input type="text" autocomplete="off" placeholder="<?php echo lang('wd'); ?>" class="layui-input" name="wd" value="<?php echo mac_filter_xss($param['wd']); ?>">
                    </div>

            </div>

        </div>

        <fieldset class="layui-elem-field">
            <legend><?php echo lang('del_multi'); ?></legend>
            <div class="layui-field-box">
                <div class="layui-form-item">
                    <div class="layui-inline">
                        <label class="layui-form-label"><input type="checkbox" lay-ignore value="1" name="ck_del"><?php echo lang('del_data'); ?></label>
                        <div class="layui-input-inline" style="width: 100px;">
                        </div>
                    </div>
                </div>
                <div class="layui-form-item">
                    <button type="button" class="btn btn-primary me-1 btn_submit"><?php echo lang('del_multi'); ?></button>
                </div>
            </div>
        </fieldset>

        <fieldset class="layui-elem-field">
        <legend><?php echo lang('multi_set'); ?></legend>
        <div class="layui-field-box">

            <div class="layui-form-item">
                <div class="layui-inline">
                    <label class="layui-form-label"><input type="checkbox" lay-ignore value="1" name="ck_level" title="<?php echo lang('level'); ?>"><?php echo lang('level'); ?></label>
                    <div class="layui-input-inline" style="width: 100px;">
                        <select name="val_level">
                            <option value=""><?php echo lang('select_level'); ?></option>
                            <option value="9" ><?php echo lang('level'); ?> 9-<?php echo lang('slide'); ?></option>
                            <option value="1" ><?php echo lang('level'); ?> 1</option>
                            <option value="2" ><?php echo lang('level'); ?> 2</option>
                            <option value="3" ><?php echo lang('level'); ?> 3</option>
                            <option value="4" ><?php echo lang('level'); ?> 4</option>
                            <option value="5" ><?php echo lang('level'); ?> 5</option>
                            <option value="6" ><?php echo lang('level'); ?> 6</option>
                            <option value="7" ><?php echo lang('level'); ?> 7</option>
                            <option value="8" ><?php echo lang('level'); ?> 8</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="layui-form-item">
                <div class="layui-inline">
                    <label class="layui-form-label"><input type="checkbox" lay-ignore value="1" name="ck_lock"><?php echo lang('lock'); ?></label>
                    <div class="layui-input-inline" style="width: 100px;">
                        <select name="val_lock">
                            <option value=""><?php echo lang('select_opt'); ?></option>
                            <option value="0" ><?php echo lang('unlock'); ?></option>
                            <option value="1" ><?php echo lang('lock'); ?></option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="layui-form-item">
                <div class="layui-inline">
                    <label class="layui-form-label"><input type="checkbox" lay-ignore value="1" name="ck_status"><?php echo lang('status'); ?></label>
                    <div class="layui-input-inline" style="width: 100px;">
                        <select name="val_status">
                            <option value=""><?php echo lang('select_status'); ?></option>
                            <option value="0" ><?php echo lang('reviewed_not'); ?></option>
                            <option value="1" ><?php echo lang('reviewed'); ?></option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="layui-form-item">
                <div class="layui-inline">
                    <label class="layui-form-label"><input type="checkbox" lay-ignore value="1" name="ck_hits"><?php echo lang('hits'); ?></label>
                    <div class="layui-input-inline" style="width: 100px;">
                        <input type="text" name="val_hits_min" required  placeholder="<?php echo lang('min_val'); ?>" autocomplete="off" class="layui-input">
                    </div>
                    <div class="layui-input-inline" style="width: 100px;">
                        <input type="text" name="val_hits_max" required  placeholder="<?php echo lang('max_val'); ?>" autocomplete="off" class="layui-input">
                    </div>
                </div>
            </div>

            <div class="layui-form-item">
                <button type="submit" class="btn btn-primary me-1 btn_submit"><?php echo lang('start_exec'); ?></button>
            </div>

        </div>
    </fieldset>
    </form>
</div>

<script type="text/javascript">
    layui.use(['form'], function () {

    });

    $('.btn_submit').click(function(){
        $('form').submit();
    })
</script>
</body>
</html>