<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:37:"template/mooncake/html/map\index.html";i:1721554327;}*/ ?>
<?php echo '<?'; ?>
xml version="1.0" encoding="UTF-8" ?>
<rss version="2.0">
<channel>
<title><?php echo $maccms['site_name']; ?></title>
<description><?php echo $maccms['site_name']; ?></description>
<link><?php echo $maccms['site_url']; ?></link>
<language>zh-cn</language>
<docs><?php echo $maccms['site_name']; ?></docs>
<generator>Rss Powered By <?php echo $maccms['site_url']; ?></generator>
<image>
<url>http://<?php echo $maccms->site_url; ?><?php echo $maccms->path_tpl; ?>images/logo.png</url>
</image>
<?php $__TAG__ = '{"num":"30","paging":"yes","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__);$__PAGING__ = mac_page_param($__LIST__['total'],$__LIST__['limit'],$__LIST__['page'],$__LIST__['pageurl'],$__LIST__['half']); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
<item>
<title><?php echo htmlspecialchars($vo['vod_name']); ?> <?php echo htmlspecialchars($vo['vod_remarks']); ?></title>
<link>http://<?php echo $maccms['site_url']; ?><?php echo mac_url_vod_detail($vo); ?></link>
<author><?php echo htmlspecialchars($vo['vod_actor']); ?></author>
<pubDate><?php echo date('Y-m-d H:i:s',$vo['vod_time']); ?></pubDate>
<description><![CDATA["<?php echo mac_substring(strip_tags($vo['vod_content']),50); ?>"]]></description>
</item>
<?php endforeach; endif; else: echo "" ;endif; ?>
</channel>
</rss>