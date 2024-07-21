<?php if (!defined('THINK_PATH')) exit(); /*a:9:{s:39:"template/mooncake/html/index\index.html";i:1721554327;s:63:"D:\laragon\www\apiicms\template\mooncake\html\index\seokey.html";i:1721554327;s:64:"D:\laragon\www\apiicms\template\mooncake\html\index\include.html";i:1721554327;s:63:"D:\laragon\www\apiicms\template\mooncake\html\index\header.html";i:1721554327;s:63:"D:\laragon\www\apiicms\template\mooncake\html\index\slider.html";i:1721554327;s:64:"D:\laragon\www\apiicms\template\mooncake\html\index\vod_img.html";i:1721554327;s:64:"D:\laragon\www\apiicms\template\mooncake\html\index\art_img.html";i:1721554327;s:66:"D:\laragon\www\apiicms\template\mooncake\html\index\topic_img.html";i:1721554327;s:63:"D:\laragon\www\apiicms\template\mooncake\html\index\footer.html";i:1721554327;}*/ ?>
<!DOCTYPE html>
<html lang="vi">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE10" />
	<meta name="renderer" content="webkit|ie-comp|ie-stand" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<?php if($maccms['aid']==1): ?>
  <title><?php echo $maccms['site_name']; ?></title>
  <meta name="keywords" content="<?php echo $maccms['site_keywords']; ?>" />
  <meta name="description" content="<?php echo $maccms['site_description']; ?>" />
  <meta itemprop="url" property="og:url" content="<?php echo mac_url('index/index'); ?>" />
  <meta itemprop="name" property="og:title" content="<?php echo $maccms['site_name']; ?>" />
  <meta itemprop="image" property="og:image" content="<?php echo $maccms['site_url']; ?>/<?php echo $maccms['site_logo']; ?>" />
  <meta itemprop="description" property="og:description" content="<?php echo $maccms['site_description']; ?>" />
<?php elseif($maccms['aid']==2): ?>
  <title>Cập nhật mới nhất - <?php echo $maccms['site_name']; ?></title>
  <meta name="keywords" content="Cập nhật mới nhất, <?php echo $maccms['site_keywords']; ?>" />
  <meta name="description" content="<?php echo $maccms['site_description']; ?>" />
  <meta itemprop="url" property="og:url" content="<?php echo mac_url('map/index'); ?>" />
  <meta itemprop="name" property="og:title" content="Cập nhật mới nhất - <?php echo $maccms['site_name']; ?>" />
  <meta itemprop="image" property="og:image" content="<?php echo $maccms['site_url']; ?>/<?php echo $maccms['site_logo']; ?>" />
  <meta itemprop="description" property="og:description" content="<?php echo $maccms['site_description']; ?>" />
<?php elseif($maccms['aid']==4): ?>
  <title>Bảng tin - <?php echo $maccms['site_name']; ?></title>
  <meta name="keywords" content="Bảng tin, <?php echo $maccms['site_keywords']; ?>" />
  <meta name="description" content="<?php echo $maccms['site_description']; ?>" />
  <meta itemprop="url" property="og:url" content="<?php echo mac_url('gbook/index'); ?>" />
  <meta itemprop="name" property="og:title" content="Bảng tin - <?php echo $maccms['site_name']; ?>" />
  <meta itemprop="image" property="og:image" content="<?php echo $maccms['site_url']; ?>/<?php echo $maccms['site_logo']; ?>" />
  <meta itemprop="description" property="og:description" content="<?php echo $maccms['site_description']; ?>" />
<?php elseif($maccms['aid']==6): ?>
  <title>Profile - <?php echo $maccms['site_name']; ?></title>
  <meta name="keywords" content="Profile, <?php echo $maccms['site_keywords']; ?>" />
  <meta name="description" content="<?php echo $maccms['site_description']; ?>" />
  <meta itemprop="url" property="og:url" content="<?php echo mac_url('user/index'); ?>" />
  <meta itemprop="name" property="og:title" content="Profile - <?php echo $maccms['site_name']; ?>" />
  <meta itemprop="image" property="og:image" content="<?php echo $maccms['site_url']; ?>/<?php echo $maccms['site_logo']; ?>" />
  <meta itemprop="description" property="og:description" content="<?php echo $maccms['site_description']; ?>" />
<?php elseif($maccms['aid']==10): ?>
  <title><?php echo $maccms['site_name']; ?></title>
  <meta name="keywords" content="<?php echo $maccms['site_keywords']; ?>" />
  <meta name="description" content="<?php echo $maccms['site_description']; ?>" />
  <meta itemprop="url" property="og:url" content="<?php echo mac_url('vod/index'); ?>" />
  <meta itemprop="name" property="og:title" content="<?php echo $maccms['site_name']; ?>" />
  <meta itemprop="image" property="og:image" content="<?php echo $maccms['site_url']; ?>/<?php echo $maccms['site_logo']; ?>" />
  <meta itemprop="description" property="og:description" content="<?php echo $maccms['site_description']; ?>" />
<?php elseif($maccms['aid']==11): ?>
  <title><?php echo mac_default($obj['type_title'],$obj['type_name']); ?> - <?php echo $maccms['site_name']; ?></title>
  <meta name="keywords" content="<?php echo mac_default($obj['type_key'],$obj['type_name']); ?>,<?php echo $maccms['site_name']; ?>" />
  <meta name="description" content="<?php echo mac_default($obj['type_des'],$maccms['site_description']); ?>" />
  <meta itemprop="url" property="og:url" content="<?php echo mac_url_type($obj); ?>" />
  <meta itemprop="name" property="og:title" content="<?php echo mac_default($obj['type_title'],$obj['type_name']); ?> - <?php echo $maccms['site_name']; ?>" />
  <meta itemprop="image" property="og:image" content="<?php echo $maccms['site_url']; ?>/<?php echo $maccms['site_logo']; ?>" />
  <meta itemprop="description" property="og:description" content="<?php echo mac_default($obj['type_des'],$maccms['site_description']); ?>" />
<?php elseif($maccms['aid']==12): ?>
  <title><?php echo $param['year']; ?><?php echo $param['area']; ?><?php echo $obj['type_name']; ?><?php echo $param['lang']; ?> - <?php echo $maccms['site_name']; ?></title>
  <meta name="keywords" content="<?php echo mac_default($obj['type_key'],$maccms['site_keywords']); ?>,<?php echo $maccms['site_name']; ?>" />
  <meta name="description" content="<?php echo mac_default($obj['type_des'],$maccms['site_description']); ?>" />
  <meta itemprop="url" property="og:url" content="<?php echo mac_url_type($obj,['area'=>$param['area'],'lang'=>$param['lang'],'year'=>$param['year']],'show'); ?>" />
  <meta itemprop="name" property="og:title" content="<?php echo $param['year']; ?><?php echo $param['area']; ?><?php echo $obj['type_name']; ?><?php echo $param['lang']; ?> - <?php echo $maccms['site_name']; ?>" />
  <meta itemprop="image" property="og:image" content="<?php echo $maccms['site_url']; ?>/<?php echo $maccms['site_logo']; ?>" />
  <meta itemprop="description" property="og:description" content="<?php echo mac_default($obj['type_des'],$maccms['site_description']); ?>" />
<?php elseif($maccms['aid']==13): ?>
  <title>Kết quả tìm kiếm cho <?php echo $param['wd']; ?><?php echo $param['actor']; ?><?php echo $param['director']; ?><?php echo $param['area']; ?><?php echo $param['lang']; ?> - <?php echo $maccms['site_name']; ?></title>
  <meta name="keywords" content="<?php echo $param['wd']; ?>,<?php echo $param['actor']; ?>,<?php echo $param['director']; ?>,<?php echo $param['area']; ?>,<?php echo $param['lang']; ?>,<?php echo $maccms['site_name']; ?>" />
  <meta name="description" content="<?php echo $maccms['site_description']; ?>" />
  <meta itemprop="url" property="og:url" content="<?php echo mac_url('vod/search',['wd'=>$param['wd']]); ?>" />
  <meta itemprop="name" property="og:title" content="Kết quả tìm kiếm cho <?php echo $param['wd']; ?><?php echo $param['actor']; ?><?php echo $param['director']; ?><?php echo $param['area']; ?><?php echo $param['lang']; ?><?php echo $param['year']; ?> - <?php echo $maccms['site_name']; ?>" />
  <meta itemprop="image" property="og:image" content="<?php echo $maccms['site_url']; ?>/<?php echo $maccms['site_logo']; ?>" />
  <meta itemprop="description" property="og:description" content="<?php echo $maccms['site_description']; ?>" />
<?php elseif($maccms['aid']==14): ?>
  <title><?php echo mac_default($obj['vod_name'],'404'); ?> - <?php echo mac_default($obj['vod_en'],'404'); ?> - <?php echo $obj['type']['type_name']; ?><?php echo $obj['type_1']['type_name']; ?> - <?php echo $maccms['seo']['vod']['name']; ?></title>
  <meta name="keywords" content="<?php echo $obj['vod_actor']; ?>,<?php echo $obj['vod_director']; ?>,<?php echo $obj['vod_name']; ?>,<?php echo $obj['type']['type_name']; ?>,<?php echo $obj['type_1']['type_name']; ?>,<?php echo $maccms['seo']['vod']['key']; ?>,<?php echo $maccms['site_name']; ?>" />
  <meta name="description" content="<?php echo $obj['vod_name']; ?> - <?php echo $obj['vod_en']; ?> - <?php echo mac_filter_html($obj['vod_content']); ?>" />
  <meta itemprop="url" property="og:url" content="<?php echo mac_url_vod_detail($obj); ?>" />
  <meta itemprop="name" property="og:title" content="<?php echo $obj['vod_name']; ?>_<?php echo $obj['type']['type_name']; ?><?php echo $obj['type_1']['type_name']; ?> - <?php echo $maccms['site_name']; ?>" />
  <meta itemprop="type" property="og:type" content="videolist" />
  <meta itemprop="image" property="og:image" content="<?php echo $maccms['site_url']; ?><?php echo mac_url_img($obj['vod_pic']); ?>" />
  <meta itemprop="class" property="og:video:class" content="<?php echo $obj['type']['type_name']; ?>" />
  <meta itemprop="actor" property="og:video:actor" content="<?php echo $obj['vod_actor']; ?>" />
  <meta itemprop="uploadDate" property="og:video:date" content="<?php echo date('Y-m-d',$obj['vod_time']); ?>" />
  <meta itemprop="contentLocation" property="og:video:area" content="<?php echo $obj['vod_area']; ?>" />
  <meta itemprop="description" property="og:description" content="<?php echo mac_substring(mac_filter_html($obj['vod_content']),110); ?>" />
<?php elseif($maccms['aid']==15): ?>
  <title>Đang xem phim <?php echo mac_default($obj['vod_name'],'404'); ?><?php echo $obj['vod_play_list'][$param['sid']]['urls'][$param['nid']]['name']; ?> | <?php echo $obj['vod_play_list'][$param['sid']]['player_info']['show']; ?>_<?php echo $obj['type']['type_name']; ?><?php echo $obj['type_1']['type_name']; ?> - <?php echo $maccms['site_name']; ?></title>
  <meta name="keywords" content="<?php echo $obj['vod_actor']; ?>,<?php echo $obj['vod_director']; ?>,<?php echo $obj['vod_name']; ?>,<?php echo $obj['type']['type_name']; ?>,<?php echo $obj['type_1']['type_name']; ?>,<?php echo $maccms['site_name']; ?>" />
  <meta name="description" content="<?php echo mac_substring(mac_filter_html($obj['vod_content']),110); ?>" />
  <meta itemprop="url" property="og:url" content="<?php echo mac_url_vod_detail($obj); ?>" />
  <meta itemprop="name" property="og:title" content="Đang xem phim <?php echo $obj['vod_name']; ?><?php echo $obj['vod_play_list'][$param['sid']]['urls'][$param['nid']]['name']; ?> | <?php echo $obj['vod_play_list'][$param['sid']]['player_info']['show']; ?>_<?php echo $obj['type']['type_name']; ?><?php echo $obj['type_1']['type_name']; ?> - <?php echo $maccms['site_name']; ?>" />
  <meta itemprop="type" property="og:type" content="video" />
  <meta itemprop="image" property="og:image" content="<?php echo $maccms['site_url']; ?><?php echo mac_url_img($obj['vod_pic']); ?>" />
  <meta itemprop="class" property="og:video:class" content="<?php echo $obj['type']['type_name']; ?>" />
  <meta itemprop="actor" property="og:video:actor" content="<?php echo $obj['vod_actor']; ?>" />
  <meta itemprop="uploadDate" property="og:video:date" content="<?php echo date('Y-m-d',$obj['vod_time']); ?>" />
  <meta itemprop="contentLocation" property="og:video:area" content="<?php echo $obj['vod_area']; ?>" />
  <meta itemprop="description" property="og:description" content="<?php echo mac_substring(mac_filter_html($obj['vod_content']),110); ?>" />
<?php elseif($maccms['aid']==16): ?>
  <title><?php echo mac_default($obj['vod_name'],'404'); ?>_<?php echo $obj['vod_down_list'][$param['sid']]['player_info']['show']; ?>_<?php echo $obj['type']['type_name']; ?><?php echo $obj['type_1']['type_name']; ?> - <?php echo $maccms['site_name']; ?></title>
  <meta name="keywords" content="<?php echo $obj['vod_actor']; ?>,<?php echo $obj['vod_director']; ?>,<?php echo $obj['vod_name']; ?>,<?php echo $obj['type']['type_name']; ?>,<?php echo $obj['type_1']['type_name']; ?>,<?php echo $maccms['site_name']; ?>" />
  <meta name="description" content="<?php echo mac_substring(mac_filter_html($obj['vod_content']),110); ?>" />
  <meta itemprop="url" property="og:url" content="<?php echo mac_url_vod_detail($obj); ?>" />
  <meta itemprop="name" property="og:title" content="<?php echo $obj['vod_name']; ?>_<?php echo $obj['vod_down_list'][$param['sid']]['player_info']['show']; ?>_<?php echo $obj['type']['type_name']; ?><?php echo $obj['type_1']['type_name']; ?> - <?php echo $maccms['site_name']; ?>" />
  <meta itemprop="type" property="og:type" content="download" />
  <meta itemprop="image" property="og:image" content="<?php echo $maccms['site_url']; ?><?php echo mac_url_img($obj['vod_pic']); ?>" />
  <meta itemprop="class" property="og:video:class" content="<?php echo $obj['type']['type_name']; ?>" />
  <meta itemprop="actor" property="og:video:actor" content="<?php echo $obj['vod_actor']; ?>" />
  <meta itemprop="uploadDate" property="og:video:date" content="<?php echo date('Y-m-d',$obj['vod_time']); ?>" />
  <meta itemprop="contentLocation" property="og:video:area" content="<?php echo $obj['vod_area']; ?>" />
  <meta itemprop="description" property="og:description" content="<?php echo mac_substring(mac_filter_html($obj['vod_content']),110); ?>" />
<?php elseif($maccms['aid']==20): ?>
  <title>Blog - <?php echo $maccms['site_name']; ?></title>
  <meta name="keywords" content="Blog, <?php echo $maccms['site_keywords']; ?>" />
  <meta name="description" content="<?php echo $maccms['site_description']; ?>" />
  <meta itemprop="url" property="og:url" content="<?php echo mac_url('art/index'); ?>" />
  <meta itemprop="name" property="og:title" content="Blog - <?php echo $maccms['site_name']; ?>" />
  <meta itemprop="image" property="og:image" content="<?php echo $maccms['site_url']; ?>/<?php echo $maccms['site_logo']; ?>" />
  <meta itemprop="description" property="og:description" content="<?php echo $maccms['site_description']; ?>" />
<?php elseif($maccms['aid']==21): ?>
  <title><?php echo mac_default($obj['type_title'],$obj['type_name']); ?> - <?php echo $maccms['site_name']; ?></title>
  <meta name="keywords" content="<?php echo mac_default($obj['type_key'],$obj['type_name']); ?>,<?php echo $maccms['site_name']; ?>" />
  <meta name="description" content="<?php echo mac_default($obj['type_des'],$maccms['site_description']); ?>" />
  <meta itemprop="url" property="og:url" content="<?php echo mac_url_type($obj); ?>" />
  <meta itemprop="name" property="og:title" content="<?php echo $obj['type_name']; ?> - <?php echo $maccms['site_name']; ?>" />
  <meta itemprop="image" property="og:image" content="<?php echo $maccms['site_url']; ?>/<?php echo $maccms['site_logo']; ?>" />
  <meta itemprop="description" property="og:description" content="<?php echo mac_default($obj['type_des'],$maccms['site_description']); ?>" />
<?php elseif($maccms['aid']==24): ?>
  <title><?php echo mac_default($obj['art_name'],'404'); ?>_<?php echo $obj['type']['type_name']; ?> - <?php echo $maccms['site_name']; ?></title>
  <meta name="keywords" content="<?php echo mac_default($obj['art_tag'],$obj['type']['type_name']); ?>,<?php echo $maccms['site_name']; ?>" />
  <meta name="description" content="<?php echo mac_substring(mac_filter_html($obj['art_content']),110); ?>" />
  <meta itemprop="url" property="og:url" content="<?php echo mac_url_art_detail($obj); ?>" />
  <meta itemprop="name" property="og:title" content="<?php echo $obj['art_name']; ?>_<?php echo $obj['type']['type_name']; ?> - <?php echo $maccms['site_name']; ?>" />
  <meta itemprop="type" property="og:type" content="article" />
  <meta itemprop="image" property="og:image" content="<?php echo $maccms['site_url']; ?><?php echo mac_url_img($obj['art_pic']); ?>" />
  <meta itemprop="releaseDate" property="og:release_date" content="<?php echo date('Y-m-d',$obj['art_time']); ?>"/>
  <meta itemprop="description" property="og:description" content="<?php echo mac_substring(mac_filter_html($obj['art_content']),110); ?>" />
<?php elseif($maccms['aid']==30): ?>
  <title>Topic - <?php echo $maccms['site_name']; ?></title>
  <meta name="keywords" content="Phim HD, Xem Phim, Phim Hoạt Hình, Xem Phim Online, <?php echo $maccms['site_keywords']; ?>" />
  <meta name="description" content="<?php echo $maccms['site_description']; ?>" />
  <meta itemprop="url" property="og:url" content="<?php echo mac_url_topic_index(); ?>" />
  <meta itemprop="name" property="og:title" content="Topic - <?php echo $maccms['site_name']; ?>" />
  <meta itemprop="image" property="og:image" content="<?php echo mac_default($maccms['site_waplogo'],'/statics/img/logo.png'); ?>" />
  <meta itemprop="description" property="og:description" content="<?php echo $maccms['site_description']; ?>" />
<?php elseif($maccms['aid']==34): ?>
  <title>Topic <?php echo mac_default($obj['topic_name'],'404'); ?> - <?php echo $maccms['site_name']; ?></title>
  <meta name="keywords" content="<?php echo mac_default($obj['topic_key'],$obj['topic_name']); ?>,<?php echo $maccms['site_name']; ?>" />
  <meta name="description" content="<?php echo mac_default($obj['topic_des'],$maccms['site_description']); ?>" />
  <meta itemprop="url" property="og:url" content="<?php echo mac_url_topic_detail($obj); ?>" />
  <meta itemprop="name" property="og:title" content="Topic <?php echo $obj['topic_name']; ?> - <?php echo $maccms['site_name']; ?>" />
  <meta itemprop="image" property="og:image" content="<?php echo $maccms['site_url']; ?>/<?php echo $maccms['site_logo']; ?>" />
  <meta itemprop="description" property="og:description" content="<?php echo mac_default($obj['topic_des'],$maccms['site_description']); ?>" />
<?php elseif($maccms['aid']==80): ?>
  <title>Tin tức Sao - <?php echo $maccms['site_name']; ?></title>
  <meta name="keywords" content="Tin tức ngôi sao, <?php echo $maccms['site_keywords']; ?>" />
  <meta name="description" content="<?php echo $maccms['site_description']; ?>" />
  <meta itemprop="url" property="og:url" content="<?php echo mac_url_topic_index(); ?>" />
  <meta itemprop="name" property="og:title" content="明星首页 - <?php echo $maccms['site_name']; ?>" />
  <meta itemprop="image" property="og:image" content="<?php echo $maccms['site_url']; ?>/<?php echo $maccms['site_logo']; ?>" />
  <meta itemprop="description" property="og:description" content="<?php echo $maccms['site_description']; ?>" />
<?php elseif($maccms['aid']==84): ?>
  <title>Diễn viên <?php echo $obj['actor_name']; ?> - <?php echo $maccms['site_name']; ?></title>
  <meta name="keywords" content="<?php echo mac_default($obj['actor_key'],$obj['actor_name']); ?>,<?php echo $maccms['site_name']; ?>" />
  <meta name="description" content="<?php echo mac_default($obj['actor_blurb'],$maccms['site_description']); ?>" />
  <meta itemprop="url" property="og:url" content="<?php echo mac_url_actor_detail($obj); ?>" />
  <meta itemprop="name" property="og:title" content="Diễn viên <?php echo $obj['actor_name']; ?> - <?php echo $maccms['site_name']; ?>" />
  <meta itemprop="image" property="og:image" content="<?php echo $maccms['site_url']; ?><?php echo mac_url_img($obj['actor_pic']); ?>" />
  <meta itemprop="description" property="og:description" content="<?php echo mac_default($obj['actor_blurb'],$maccms['site_description']); ?>" />
<?php endif; ?>
	<link rel="apple-touch-icon-precomposed" sizes="180x180" href="<?php echo $maccms['path_tpl']; ?>asset/img/ios_fav.png">
<link rel="shortcut icon" href="<?php echo $maccms['path_tpl']; ?>asset/img/favicon.png" type="image/x-icon"/>

<link rel="stylesheet" type="text/css" href="<?php echo $maccms['path_tpl']; ?>asset/css/mxstyle.css">
<link rel="stylesheet" type="text/css" href="<?php echo $maccms['path_tpl']; ?>asset/css/hlstyle.css">
<link rel="stylesheet" type="text/css" href="<?php echo $maccms['path_tpl']; ?>asset/css/default.css" name="skin">
<link rel="stylesheet" type="text/css" href="<?php echo $maccms['path_tpl']; ?>asset/css/black.css" name="color">
<script type="text/javascript" src="<?php echo $maccms['path_tpl']; ?>asset/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $maccms['path_tpl']; ?>asset/js/jquery.cookie.js"></script>
<script type="text/javascript" src="<?php echo $maccms['path_tpl']; ?>asset/js/hlhtml.js"></script>

<script>var maccms={"path":"","mid":"<?php echo $maccms['mid']; ?>","aid":"<?php echo $maccms['aid']; ?>","url":"<?php echo $maccms['site_url']; ?>","wapurl":"<?php echo $maccms['site_wapurl']; ?>","mob_status":"<?php echo $maccms['mob_status']; ?>"};</script>

<style type="text/css">.balist_thumb,.wbalist_thumb,.vodlist_thumb,.topiclist_thumb,.artlist_thumb,.artbanner_thumb,.art_relates .artlr_pic,.play_vlist_thumb,.zbo .play_vlist_thumb.zboad,.actor_pic,.ranklist_thumb{background-image:url("<?php echo $maccms['path_tpl']; ?>asset/img/load.gif");background-repeat: no-repeat;}</style>
<script type="text/javascript">
	var cookie_style=$.cookie("mystyle");
	if(cookie_style==null){}
	else {
		$("link[name='color']").attr("href","<?php echo $maccms['path_tpl']; ?>asset/css/"+cookie_style+".css")}
		$(function(){
			var cookie_style = $.cookie("mystyle");
			if(cookie_style == null){
				if(white == black){
					$("#black").addClass("hide");
					$("#white").removeClass("hide")
				}else{
					$("#white").addClass("hide");
					$("#black").removeClass("hide")
				}
			}else{
				$("[id='"+cookie_style+"'].mycolor").addClass("hide");
				$("[id!='"+cookie_style+"'].mycolor").removeClass("hide")
			}
		});
</script>
<script type="text/javascript">
	var cookie_themes=$.cookie("mythemes");
	if(cookie_themes==null){}
	else{
		$("link[name='skin']").attr("href","<?php echo $maccms['path_tpl']; ?>asset/css/"+cookie_themes+".css")}
		$(function(){
			var cookie_themes=$.cookie("mythemes");
			if(cookie_themes==null){
				if(0==green){
					$("#themes li#green").addClass("cur")
				}else if(0==blue){
					$("#themes li#blue").addClass("cur")
				}else if(0==pink){
					$("#themes li#pink").addClass("cur")
				}else if(0==red){
					$("#themes li#red").addClass("cur")
				}else if(0==gold){
					$("#themes li#gold").addClass("cur")
				}else{
					$("#themes li#default").addClass("cur")
				}
			}else{
				$("#themes li[id='"+cookie_themes+"']").addClass("cur")
			}
		});
</script>
<script src="<?php echo $maccms['path_tpl']; ?>asset/js/parts/jquery.adaptive.js"></script>
<!-- Facebook comment -->
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v14.0" nonce="I90IS5lr"></script>
<!-- END Facebook comment -->
</head>

<body class="bstem">
	<div id="topnav" class="head_box">
    <div class="header">
        <div class="head_a">
            <div class="head_logo">
                <a title="<?php echo $maccms['site_url']; ?>" class="logo logo_b" style="background-image: url(/<?php echo $maccms['site_logo']; ?>);" href="/"></a>
                <a title="<?php echo $maccms['site_url']; ?>" class="logo logo_w" style="background-image: url(/<?php echo $maccms['site_logo']; ?>);" href="/"></a>
            </div>
            <div class="head_menu_a hidden_xs hidden_mi">
                <ul class="top_nav clearfix">
                    <li <?php if($maccms['aid'] == 1): ?>class="active"<?php endif; ?>><a href="/" title="Trang chủ">Home</a></li>
                    <?php $__TAG__ = '{"ids":"parent","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                    <li <?php if(($vo['type_id'] == $GLOBALS['type_id'] || $vo['type_id'] == $GLOBALS['type_pid'])): ?>class="active"<?php endif; ?>><a href="<?php echo mac_url_type($vo); ?>" title="<?php echo $vo['type_name']; ?>"><?php echo $vo['type_name']; ?></a></li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
            <div class="head_user">
                <ul>
                    <li class="top_ico">
                        <a href="javascript:;" class="history" title="Lịch sử xem"><i class="iconfont">&#xe624;</i></a>
                    </li>
                    <li class="top_ico">
                        <a href="<?php echo mac_url('gbook/index'); ?>" title="Lời Nhắn"><i class="iconfont">&#xe632;</i></a>
                    </li>
                    <li class="top_ico">
                        <a href="<?php echo mac_url('label/rank'); ?>" title="Bảng xếp hạng"><i class="iconfont">&#xe618;</i></a>
                    </li>
                    <li class="top_ico">
                        <a class="mac_user" href="javascript:;" title="Người dùng"><i class="iconfont">&#xe62b;</i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="header">
        <div class="head_b">
            <a class="bk_btn fl" href="javascript:MAC.GoBack()" title="Trở về"><i class="iconfont">&#xe625;</i></a>
            <span class="hd_tit fl"></span>
            <a class="se_btn fr open-share" href="javascript:void(0)" title="Chia sẻ"><i class="iconfont">&#xe615;</i></a>
            <a class="se_btn pl_btn fr" href="#pinglun" title="Bình luận"><i class="iconfont">&#xe632;</i></a>

            <div class="head_menu_b">
                <a class="menu" href="javascript:void(0)" title="Danh mục"><i class="iconfont menu_ico">&#xe640;</i><span class="hidden_xs">&nbsp;Danh Mục</span></a>
                <div class="all_menu">
                    <div class="all_menu_inner">
                        <div class="menu_top hidden_mb"><a class="close_menu" href="javascript:void(0)"><i class="iconfont">&#xe616;</i></a>Danh Mục</div>
                        <!-- Danh mục -->
                        <div class="all_menu_box">
                            <ul class="nav_list clearfix">
                                <li class="active"><a class="mob_btn mob_btn7" href="/" title="Trang chủ"><i class="iconfont">&#xe634;</i><span>HOME</span></a></li>
                                <?php $__TAG__ = '{"ids":"parent","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                                <li>
                                    <a class="mob_btn mob_btn<?php echo $key; ?>" href="<?php echo mac_url_type($vo); ?>" title="<?php echo $vo['type_name']; ?>">
                                        <i class="iconfont"><?php switch($vo1['type_id']): case "1": ?>&#xe64a;<?php break; case "2": ?>&#xe649;<?php break; case "3": ?>&#xe64b;<?php break; case "4": ?>&#xe648;<?php break; case "5": ?>&#xe630;<?php break; default: ?>&#xe64a;<?php endswitch; ?></i>
                                        <span><?php echo $vo['type_name']; ?></span></a>
                                </li>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                <li><a class="mob_btn mob_btn2" href="<?php echo mac_url_topic_index(); ?>" title="Chủ đề"><i class="iconfont">&#xe64c;</i><span>Chủ Đề</span></a></li>
                                <li><a class="mob_btn mob_btn1" href="<?php echo mac_url('gbook/index'); ?>" title="Lời nhắn"><i class="iconfont">&#xe632;</i><span>Lời Nhắn</span></a></li>
                                <li><a class="mob_btn mob_btn3" href="<?php echo mac_url('label/rank'); ?>" title="Mới cập nhật"><i class="iconfont">&#xe652;</i><span>Phim Mới</span></a></li>
                                <li><a class="mob_btn mob_btn4" href="<?php echo mac_url('label/rank'); ?>" title="Bảng xếp hạng"><i class="iconfont">&#xe618;</i><span>Xếp Hạng</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="head_search">
                <form id="search" name="search" method="get" action="<?php echo mac_url('vod/search'); ?>" onsubmit="return qrsearch();">
                    <i class="iconfont">&#xe633;</i>
                    <input id="txt" type="text" name="wd" class="mac_wd form_control" value="" placeholder="Có nhiều điều đợi bạn khám phá">
                    <button class="submit" id="searchbutton" type="submit" name="submit">Tìm Kiếm</button>
                </form>
            </div>
            <div class="head_hot_search hidden_xs">
                <ul class="pops_list">
                    <li><span class="hot_search_tit"><i class="iconfont">&#xe631;</i>&nbsp;Hot Search</span></li>
                    <?php $_669cd8dd1591c=explode(',',$maccms['search_hot']); if(is_array($_669cd8dd1591c) || $_669cd8dd1591c instanceof \think\Collection || $_669cd8dd1591c instanceof \think\Paginator): if( count($_669cd8dd1591c)==0 ) : echo "" ;else: foreach($_669cd8dd1591c as $key=>$vo): ?>
                    <li><a href="<?php echo mac_url('vod/search',['wd'=>html_entity_decode($vo)]); ?>" class="hot_name"><?php echo $vo; ?></a></li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </div>
    </div>
</div>
	<div id="banstem" class="hot_banner">
    <div class="bgi_box">
        <span id="bgimage" class="bgi"></span>
        <span class="bgfd"></span>
    </div>

    <div class="hot_list">
        <div class="hot_banner_box">
            <div class="banner-top">
                <ul class="swiper-wrapper vodlist clearfix">
                    <?php $__TAG__ = '{"num":"8","level":"9","order":"desc","type":"current","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                    <li class="balist_item swiper-slide">
                        <a class="balist_thumb swiper-lazy" href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" data-background="<?php echo mac_url_img($vo['vod_pic']); ?>">
                            <span class="play hidden_xs"></span>
                            <div class="balist_titbox pic_text">
                                <p class="vodlist_title"><?php echo $vo['vod_name']; ?></p>
                                <p class="vodlist_sub"><?php echo $vo['vod_en']; ?></p>
                            </div>
                            <span class="balist_bg"></span>
                        </a>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
            <div class="banner-arrow">
                <a class="swiper-button-prev" href="javascript:;"><i class="iconfont">&#xe625;</i></a>
                <a class="swiper-button-next" href="javascript:;"><i class="iconfont">&#xe623;</i></a>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var bannum = document.getElementById('banstem').getElementsByTagName("li").length;
    if (bannum < 3) {
        $("#banstem").remove();
        $("body").removeClass("bstem");
    }
</script>

	<div class="container">
		<div class="row hidden_mb">
            <div class="pannel">
                <ul class="hom_mob_list">
					<?php $__TAG__ = '{"mid":"1","ids":"parent","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
					<li>
						<a class="mob_btn mob_btn<?php echo $vo['type_id']; ?>" href="<?php echo mac_url_type($vo); ?>">
							<i class="iconfont"><?php if($vo['type_id']==1): ?>&#xe64a;<?php elseif($vo['type_id']==2): ?>&#xe649;<?php elseif($vo['type_id']==3): ?>&#xe64b;<?php elseif($vo['type_id']==4): ?>&#xe648;<?php endif; ?></i>
							<span class="mob_font"><?php echo $vo['type_name']; ?></span>
						</a>
					</li>
					<?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </div>
		<div class="row">
			<div class="pannel">
				<ul class="hom_sm_list vodlist_wi">
					<li class="notice">
                        <div class="smlist_box">
                            <marquee scrollamount="4" behavior="scroll" onmouseover=this.stop() onmouseout=this.start()>Chào mừng bạn đến với web xem phim online miễn phí cập nhật nhanh nhất tại: <span class='mycol'>www.ishoutu.com</span> Liên hệ quảng cáo</marquee>
                            <i class="iconfont nico">&#xe62d;</i>
                        </div>
                    </li>
					<li class="hidden_xs">
						<div class="smlist_box list_m">
							<?php $__TAG__ = '{"ids":"1","order":"desc","by":"sort","id":"vo1","key":"key1"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key1 = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($key1 % 2 );++$key1;?>
							<a class="text_muted" href="<?php echo mac_url_type($vo1); ?>" title="Phim Bộ"><i class="iconfont">&#xe64a;</i>Phim Bộ</a>
							<?php $_669cd8dd158f2=explode(',',$vo1['type_extend']['area']); if(is_array($_669cd8dd158f2) || $_669cd8dd158f2 instanceof \think\Collection || $_669cd8dd158f2 instanceof \think\Paginator): if( count($_669cd8dd158f2)==0 ) : echo "" ;else: foreach($_669cd8dd158f2 as $key2=>$vo2): if($key2 < 3): ?>
							<a class="num<?php echo $key2; ?>" href="<?php echo mac_url_type($vo1,['area'=>$vo2],'show'); ?>" title="<?php echo $vo2; ?>"><?php echo $vo2; ?></a>
							<?php endif; endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
						</div>
					</li>
					<li class="hidden_xs">
						<div class="smlist_box list_m">
							<?php $__TAG__ = '{"ids":"2","order":"desc","by":"sort","id":"vo1","key":"key1"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key1 = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($key1 % 2 );++$key1;?>
							<a class="text_muted" href="<?php echo mac_url_type($vo1); ?>" title="Phim Lẻ"><i class="iconfont">&#xe649;</i>Phim Lẻ</a>
							<?php $_669cd8dd158d3=explode(',',$vo1['type_extend']['class']); if(is_array($_669cd8dd158d3) || $_669cd8dd158d3 instanceof \think\Collection || $_669cd8dd158d3 instanceof \think\Paginator): if( count($_669cd8dd158d3)==0 ) : echo "" ;else: foreach($_669cd8dd158d3 as $key2=>$vo2): if($key2 < 3): ?>
							<a class="num<?php echo $key2; ?>" href="<?php echo mac_url_type($vo1,['class'=>$vo2],'show'); ?>" title="<?php echo $vo2; ?>"><?php echo $vo2; ?></a>
							<?php endif; endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<!-- Phim Đề Xuất -->
		<div class="vod_row tit_up">
			<div class="pannel">
				<div class="pannel_head clearfix">
					<a class="text_muted pull_right v_change" href="javascript:;"><i class="iconfont">&#xe62a;</i>&nbsp;Ngẫu nhiên</a>
					<h2 class="title"><i class="iconfont">&#xe631;</i>Phim Đề Cử</h2>
					<span class="text_muted pull_left"><a href="<?php echo mac_url('label/rank'); ?>">Mới cập nhật<em class="new_date"><?php echo mac_data_count(0,'today','vod'); ?></em></a></span>
				</div>
				<div class="cbox_list">
					<div class="cbox1">
						<ul class="vodlist vodlist_wi list_v6 clearfix">
							<?php $__TAG__ = '{"num":"12","order":"desc","by":"time","level":"0","key":"key","id":"vo"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
							<li class="vodlist_item num_<?php echo $key; ?>">
								<a class="vodlist_thumb lazyload" href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>">
    <span class="play hidden_xs"></span>
    <span class="vodlist_top"><em class="voddate voddate_year"><?php echo $vo['vod_year']; ?></em><em class="voddate voddate_type"><?php echo mac_default($vo['vod_remarks'],$vo['vod_score']); ?></em></span>
    <span class="pic_text text_right text_dy"><?php echo mac_default($vo['vod_version'],$vo['vod_score']); ?></span>
</a>
<div class="vodlist_titbox">
    <p class="vodlist_title">
        <a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a>
    </p>
    <p class="vodlist_sub"><?php echo $vo['vod_en']; ?></p>
</div>
							</li>
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
					</div>
					<div class="cbox2 hide">
						<ul class="vodlist vodlist_wi list_v6 clearfix">
							<?php $__TAG__ = '{"num":"12","order":"desc","by":"time","level":"0","start":"7","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
							<li class="vodlist_item num_">
								<a class="vodlist_thumb lazyload" href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>">
    <span class="play hidden_xs"></span>
    <span class="vodlist_top"><em class="voddate voddate_year"><?php echo $vo['vod_year']; ?></em><em class="voddate voddate_type"><?php echo mac_default($vo['vod_remarks'],$vo['vod_score']); ?></em></span>
    <span class="pic_text text_right text_dy"><?php echo mac_default($vo['vod_version'],$vo['vod_score']); ?></span>
</a>
<div class="vodlist_titbox">
    <p class="vodlist_title">
        <a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a>
    </p>
    <p class="vodlist_sub"><?php echo $vo['vod_en']; ?></p>
</div>
							</li>
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
					</div>
					<div class="cbox3 hide">
						<ul class="vodlist vodlist_wi list_v6 clearfix">
							<?php $__TAG__ = '{"num":"12","order":"desc","by":"time","level":"0","start":"13","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
							<li class="vodlist_item num_">
								<a class="vodlist_thumb lazyload" href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>">
    <span class="play hidden_xs"></span>
    <span class="vodlist_top"><em class="voddate voddate_year"><?php echo $vo['vod_year']; ?></em><em class="voddate voddate_type"><?php echo mac_default($vo['vod_remarks'],$vo['vod_score']); ?></em></span>
    <span class="pic_text text_right text_dy"><?php echo mac_default($vo['vod_version'],$vo['vod_score']); ?></span>
</a>
<div class="vodlist_titbox">
    <p class="vodlist_title">
        <a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a>
    </p>
    <p class="vodlist_sub"><?php echo $vo['vod_en']; ?></p>
</div>
							</li>
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- END Phim Đề Xuất -->
		<!-- Tin Tức -->
		<div class="row tit_up">
			<div class="pannel">
				<div class="pannel_head clearfix">
					<a class="text_muted pull_right v_change" href="javascript:;"><i class="iconfont">&#xe62a;</i>&nbsp;Ngẫu nhiên</a>
					<h2 class="title"><i class="iconfont">&#xe630;</i>Tin Tức</h2>
					<?php $__TAG__ = '{"mid":"2","ids":"parent","order":"asc","by":"id","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
					<a class="text_muted pull_left" href="<?php echo mac_url_type($vo); ?>">Xem thêm<i class="iconfont more_i">&#xe623;</i></a>
					<?php endforeach; endif; else: echo "" ;endif; ?>
					<span class="hidden_xs pull_left">
						<?php $__TAG__ = '{"mid":"2","ids":"parent","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;$__TAG__ = '{"parent":"'.$vo['type_id'].'","order":"asc","by":"sort","id":"vo2","key":"key2"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key2 = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($key2 % 2 );++$key2;?> 
								<span class="split_line"></span><a href="<?php echo mac_url_type($vo2); ?>" class="text_muted"><?php echo $vo2['type_name']; ?></a>
							<?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
					</span>
				</div>
				<div class="cbox_list">
					<div class="cbox1">
						<ul class="arthom_list list_v5 clearfix">
							<?php $__TAG__ = '{"num":"5","paging":"yes","type":"current","order":"desc","by":"time","key":"key","id":"vo"}';$__LIST__ = model("Art")->listCacheData($__TAG__);$__PAGING__ = mac_page_param($__LIST__['total'],$__LIST__['limit'],$__LIST__['page'],$__LIST__['pageurl'],$__LIST__['half']); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
							<li class="arthom_item num_<?php echo $key; ?>">
								<a class="artlist_thumb lazyload" href="<?php echo mac_url_art_detail($vo); ?>" title="<?php echo $vo['art_name']; ?>" data-original="<?php echo mac_url_img($vo['art_pic']); ?>">
    <span class="look hidden_xs"></span>
    <span class="pic_text text_right"><?php echo $vo['type']['type_name']; ?></span>
</a>
<div class="arthom_title">
    <a href="<?php echo mac_url_art_detail($vo); ?>" title="<?php echo $vo['art_name']; ?>"><?php echo $vo['art_name']; ?></a>
</div>
							</li>
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
					</div>
					<div class="cbox2 hide">
						<ul class="arthom_list list_v5 clearfix">
							<?php $__TAG__ = '{"num":"5","start":"6","paging":"yes","type":"current","order":"desc","by":"time","key":"key","id":"vo"}';$__LIST__ = model("Art")->listCacheData($__TAG__);$__PAGING__ = mac_page_param($__LIST__['total'],$__LIST__['limit'],$__LIST__['page'],$__LIST__['pageurl'],$__LIST__['half']); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
							<li class="arthom_item num_<?php echo $key; ?>">
								<a class="artlist_thumb lazyload" href="<?php echo mac_url_art_detail($vo); ?>" title="<?php echo $vo['art_name']; ?>" data-original="<?php echo mac_url_img($vo['art_pic']); ?>">
    <span class="look hidden_xs"></span>
    <span class="pic_text text_right"><?php echo $vo['type']['type_name']; ?></span>
</a>
<div class="arthom_title">
    <a href="<?php echo mac_url_art_detail($vo); ?>" title="<?php echo $vo['art_name']; ?>"><?php echo $vo['art_name']; ?></a>
</div>
							</li>
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
					</div>
					<div class="cbox3 hide">
						<ul class="arthom_list list_v5 clearfix">
							<?php $__TAG__ = '{"num":"5","start":"13","paging":"yes","type":"current","order":"desc","by":"time","key":"key","id":"vo"}';$__LIST__ = model("Art")->listCacheData($__TAG__);$__PAGING__ = mac_page_param($__LIST__['total'],$__LIST__['limit'],$__LIST__['page'],$__LIST__['pageurl'],$__LIST__['half']); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
							<li class="arthom_item num_<?php echo $key; ?>">
								<a class="artlist_thumb lazyload" href="<?php echo mac_url_art_detail($vo); ?>" title="<?php echo $vo['art_name']; ?>" data-original="<?php echo mac_url_img($vo['art_pic']); ?>">
    <span class="look hidden_xs"></span>
    <span class="pic_text text_right"><?php echo $vo['type']['type_name']; ?></span>
</a>
<div class="arthom_title">
    <a href="<?php echo mac_url_art_detail($vo); ?>" title="<?php echo $vo['art_name']; ?>"><?php echo $vo['art_name']; ?></a>
</div>
							</li>
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- END Tin Tức -->
		<!-- Video -->
		<div class="vod_row tit_up">
			<?php $__TAG__ = '{"ids":"parent","order":"asc","by":"sort","id":"vo1","key":"key1","flag":"vod"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key1 = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($key1 % 2 );++$key1;?>
			<div class="pannel">
				<div class="pannel_head clearfix">
					<a class="text_muted pull_right v_change" href="javascript:;"><i class="iconfont">&#xe62a;</i>&nbsp;Ngẫu nhiên</a>
					<h2 class="title"><i class="iconfont"><?php switch($vo1['type_id']): case "1": ?>&#xe64a;<?php break; case "2": ?>&#xe649;<?php break; case "3": ?>&#xe64b;<?php break; case "4": ?>&#xe648;<?php break; default: ?>&#xe64a;<?php endswitch; ?></i><?php echo $vo1['type_name']; ?></h2>
					<a class="text_muted pull_left" href="<?php echo mac_url_type($vo1,[],'show'); ?>">Xem thêm<i class="iconfont more_i">&#xe623;</i></a>
					<span class="hidden_xs pull_left">
						<?php $__TAG__ = '{"num":"3","type":"'.$vo1['type_id'].'","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
						<span class="split_line"></span><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="text_muted"><?php echo $vo['vod_name']; ?></a>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</span>
				</div>
				<div class="cbox_list">
					<div class="cbox1">
						<ul class="vodlist vodlist_wi list_v6 clearfix">
							<?php $__TAG__ = '{"num":"12","type":"'.$vo1['type_id'].'","order":"desc","by":"time","key":"key2","id":"vo"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key2 = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key2 % 2 );++$key2;?>
							<li class="vodlist_item num_<?php echo $key2; ?>">
								<a class="vodlist_thumb lazyload" href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>">
    <span class="play hidden_xs"></span>
    <span class="vodlist_top"><em class="voddate voddate_year"><?php echo $vo['vod_year']; ?></em><em class="voddate voddate_type"><?php echo mac_default($vo['vod_remarks'],$vo['vod_score']); ?></em></span>
    <span class="pic_text text_right text_dy"><?php echo mac_default($vo['vod_version'],$vo['vod_score']); ?></span>
</a>
<div class="vodlist_titbox">
    <p class="vodlist_title">
        <a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a>
    </p>
    <p class="vodlist_sub"><?php echo $vo['vod_en']; ?></p>
</div>
							</li>
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
					</div>
					<div class="cbox2 hide">
						<ul class="vodlist vodlist_wi list_v6 clearfix">
							<?php $__TAG__ = '{"num":"12","start":"7","type":"'.$vo1['type_id'].'","order":"desc","by":"time","key":"key2","id":"vo"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key2 = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key2 % 2 );++$key2;?>
							<li class="vodlist_item num_<?php echo $key2; ?>">
								<a class="vodlist_thumb lazyload" href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>">
    <span class="play hidden_xs"></span>
    <span class="vodlist_top"><em class="voddate voddate_year"><?php echo $vo['vod_year']; ?></em><em class="voddate voddate_type"><?php echo mac_default($vo['vod_remarks'],$vo['vod_score']); ?></em></span>
    <span class="pic_text text_right text_dy"><?php echo mac_default($vo['vod_version'],$vo['vod_score']); ?></span>
</a>
<div class="vodlist_titbox">
    <p class="vodlist_title">
        <a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a>
    </p>
    <p class="vodlist_sub"><?php echo $vo['vod_en']; ?></p>
</div>
							</li>
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
					</div>
					<div class="cbox3 hide">
						<ul class="vodlist vodlist_wi list_v6 clearfix">
							<?php $__TAG__ = '{"num":"12","start":"13","type":"'.$vo1['type_id'].'","order":"desc","by":"time","key":"key2","id":"vo"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key2 = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key2 % 2 );++$key2;?>
							<li class="vodlist_item num_<?php echo $key2; ?>">
								<a class="vodlist_thumb lazyload" href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>">
    <span class="play hidden_xs"></span>
    <span class="vodlist_top"><em class="voddate voddate_year"><?php echo $vo['vod_year']; ?></em><em class="voddate voddate_type"><?php echo mac_default($vo['vod_remarks'],$vo['vod_score']); ?></em></span>
    <span class="pic_text text_right text_dy"><?php echo mac_default($vo['vod_version'],$vo['vod_score']); ?></span>
</a>
<div class="vodlist_titbox">
    <p class="vodlist_title">
        <a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a>
    </p>
    <p class="vodlist_sub"><?php echo $vo['vod_en']; ?></p>
</div>
							</li>
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
					</div>
				</div>
			</div>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
		<!-- END Video -->
		<!-- Topic -->
		<div class="row tit_up">
			<div class="pannel">
				<div class="pannel_head clearfix">
					<h2 class="title"><i class="iconfont">&#xe64c;</i>Chủ Đề</h2>
                    <a class="text_muted pull_left" href="<?php echo mac_url_topic_index(); ?>">Xem thêm<i class="iconfont more_i">&#xe623;</i></a>
				</div>
				<ul class="topiclist topic_hom list_v5 clearfix">
					<?php $__TAG__ = '{"num":"10","order":"desc","by":"sort","ids":"all","key":"key","id":"vo"}';$__LIST__ = model("Topic")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
					<li class="topiclist_item num_<?php echo $key; ?>">
						<a class="topiclist_thumb lazyload" href="<?php echo mac_url_topic_detail($vo); ?>" title="<?php echo $vo['topic_name']; ?>" data-original="<?php echo mac_url_img($vo['topic_pic']); ?>">
	<span class="play hidden_xs"></span>
	<span class="pic_text text_right"><i class="iconfont">&#xe62f;</i>&nbsp;<?php echo count(explode(',',$vo['topic_rel_vod'])); ?>&nbsp;ảnh</span>
</a>
<div class="topiclist_title">
	<a href="<?php echo mac_url_topic_detail($vo); ?>" title="<?php echo $vo['topic_name']; ?>"><?php echo $vo['topic_name']; ?></a>
	<p class="topiclist_blurb"><?php echo $vo['topic_blurb']; ?></p>
</div>
					</li>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
		</div>
		<!-- END Topic -->
		<!-- Ranking -->
		<div class="row tit_up">
			<div class="pannel">
				<div class="pannel_head clearfix">
                    <h2 class="title"><i class="iconfont">&#xe618;</i>Bảng Xếp Hạng</h2>
                    <a class="text_muted pull_left" href="<?php echo mac_url('label/rank'); ?>">Xem thêm<i class="iconfont more_i">&#xe623;</i></a>
                </div>
				<div class="rank_hom list_scroll">
					<?php $__TAG__ = '{"ids":"1,2,3,4","order":"asc","by":"sort","id":"vo1","key":"key1"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key1 = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($key1 % 2 );++$key1;?>
					<div class="rank_info">
						<div class="list_info">
							<div class="pannel_head clearfix">
                                <h3 class="title">Xếp hạng <?php echo $vo1['type_name']; ?></h3>
                            </div>
							<ul class="part_rows">
								<?php $__TAG__ = '{"num":"5","type":"'.$vo1['type_id'].'","order":"desc","by":"hits","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;if($key == 1): ?>
								<li class="ranklist_item">
									<a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>">
										<div class="ranklist_img">
											<div class="ranklist_thumb  lazyload" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>">
												<span class="play hidden_xs"></span>
												<span class="part_nums part_num1">1</span>
                                                <span class="pic_text text_right text_dy"><?php echo $vo['vod_score']; ?></span>
											</div>
										</div>
										<div class="ranklist_txt">
											<div class="pannel_head clearfix">
												<span class="text_muted pull_right"><i class="iconfont">&#xe631;</i><?php echo $vo['vod_hits']; ?></span>
                                                <h4 class="title"><?php echo $vo['vod_name']; ?></h4>
												<p class="vodlist_sub"><?php echo $vo['vod_year']; ?>&nbsp;/&nbsp;<?php echo $vo['vod_area']; ?>&nbsp;/&nbsp;<?php echo $vo['vod_version']; ?></p>
                                            	<p><span class="vodlist_sub">Trạng thái: <?php echo $vo['vod_remarks']; ?></span></p>
											</div>
										</div>
									</a>
								</li>
								<?php else: ?>
								<li class="part_eone">
									<a href="<?php echo mac_url_vod_detail($vo); ?>">
                                        <span class="part_nums part_num<?php echo $key; ?>"><?php echo $key; ?></span>
										<span class="text_muted pull_right renqi"><i class="iconfont">&#xe631;</i>&nbsp;<?php echo $vo['vod_hits']; ?></span>
										<?php echo $vo['vod_name']; ?>
									</a>
								</li>
								<?php endif; endforeach; endif; else: echo "" ;endif; ?>
							</ul>
						</div>
					</div>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
			</div>
		</div>
		<!-- END Ranking -->
	</div>
	<!-- Footer -->
	<div class="foot foot_nav clearfix">
	<div class="container">
		<ul class="extra clearfix">
			<li id="backtop-ico">
				<a class="backtop" href="javascript:scroll(0,0)" title="Lên đầu"><span class="top_ico"><i class="iconfont">&#xe628;</i></span></a>
			</li>
			<li>
				<a id="black" class="mycolor " href="javascript:void(0)" title="Chế độ sáng - Light mode">
					<span class="m_ico theme_ico"><i class="iconfont">&#xe656;</i></span>
				</a>
				<a id="white" class="mycolor hide" href="javascript:void(0)" title="Chế độ tối - Dark mode">
					<span class="m_ico theme_ico"><i class="iconfont">&#xe657;</i></span>
				</a>
			</li>
			<li>
				<a class="btn_theme" href="javascript:void(0)" title="Màu chủ đề">
					<span class="m_ico"><i class="iconfont">&#xe665;</i></span>
				</a>
				<div class="sideslip">
					<div class="themecolor">
						<p class="text_center"><i class="iconfont">&#xe665;</i>&nbsp;Màu chủ đề</p>
						<ul id="themes">
							<li id="default" class="color_default">Màu Cam</li>
							<li id="green" class="color_green">Xanh Lục</li>
							<li id="blue" class="color_blue">Blue</li>
							<li id="pink" class="color_pink">Hồng</li>
							<li id="red" class="color_red">Đỏ</li>
							<li id="gold" class="color_gold">Vàng</li>
						</ul>
					</div>
				</div>
			</li>
		</ul>
		<div class="fo_t">
			<p>Trang web này không cung cấp bất kỳ dịch vụ tải lên hoặc lưu trữ tài nguyên nào, tất cả nội dung được tự động thu thập từ nguồn trên mạng đã được nêu ra.</p>
			<p>Nếu nội dung có trong trang này vô ý vi phạm quyền của công ty bạn, vui lòng thông báo qua <a href="mailto:<?php echo $maccms['site_email']; ?>"><?php echo $maccms['site_email']; ?></a>, chúng tôi sẽ xử lý và xóa nó sớm nhất, xin cảm ơn!</p>
			<p>&copy;&nbsp;2022&nbsp;<?php echo $maccms['site_url']; ?>&nbsp;All Rights Reserved&nbsp;&#124;&nbsp;<?php echo $maccms['site_name']; ?>&nbsp;&nbsp;</p>
		</div>
		<div class="map_nav">
			<a href="<?php echo mac_url('gbook/index'); ?>" target="_blank">Để lại lời nhắn</a>
			<span class="split_line"></span>
			<a href="<?php echo mac_url('label/rank'); ?>" target="_blank">Danh sách phim</a>
			<span class="split_line"></span>
			<a href="<?php echo mac_url('rss/google'); ?>" target="_blank">Google Sitemap</a>
			<span class="split_line"></span>
			<a href="<?php echo mac_url('rss/bing'); ?>" target="_blank">Bing Sitemap</a>
		</div>
	</div>
	<div class="foot_mnav hidden_mb">
		<ul class="foot_rows">
			<li class="foot_text">
				<a <?php if($maccms['aid'] == 1): ?>class="active"<?php endif; ?> href="/" title="Trang chủ">
					<i class="iconfont">&#xe678;</i> <span class="foot_font">Home</span>
				</a>
			</li>
			<?php $__TAG__ = '{"mid":"1","ids":"parent","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
			<li class="foot_text">
				<a <?php if(($vo['type_id'] == $GLOBALS['type_id'] || $vo['type_id'] == $GLOBALS['type_pid'])): ?>class="active"<?php endif; ?> href="<?php echo mac_url_type($vo); ?>">
					<i class="iconfont"><?php switch($vo['type_id']): case "1": ?>&#xe64a;<?php break; case "2": ?>&#xe649;<?php break; case "3": ?>&#xe64b;<?php break; case "4": ?>&#xe648;<?php break; default: ?>&#xe64a;<?php endswitch; ?></i>
					<span class="foot_font"><?php echo $vo['type_name']; ?></span>
				</a>
			</li>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div>

	<div class="infobox" style="display: none!important;">
		<input type="hidden" id="shareurl" value="">
		<input type="hidden" id="version" value="5.3">
		<input type="hidden" id="openapi" value="sina">
		<input type="hidden" id="apiurl" value="#">
	</div>
	<div id="show" style="display: none;">
		<div class="copy-tip">
			<p>Sao chép thành công</p>
		</div>
	</div>
	<div class="am-share">
		<div class="am-share-url">
			<div class="bdsharebuttonbox" data-tag="share_1" data-name="Xem phim <?php echo $obj['vod_name']; ?>"></div>
			<span class="title_span">Copy liên kết dưới đây và gửi cho bạn bè xem nhé ^^</span>
			<span id="short" class="url_span shorturl"></span>
		</div>
		<div class="am-share-footer">
			<span class="share_btn">Huỷ</span>
			<span id="btn" class="copy_btn" data-clipboard-action="copy" data-clipboard-target="#short">Copy</span>
		</div>
	</div>
</div>
<div class="conch_history_pop user_log">
	<div class="conch_history_bg">
		<div class="conch_history_title"><span>Lịch sử xem</span><a id="close_history" target="_self" href="javascript:void(0)"><i class="iconfont">&#xe616;</i></a></div>
		<div class="conch_history_box">
			<ul class="vodlist" id="conch_history"></ul>
		</div>
	</div>
</div>
<div id="fb-root"></div>
<div style="display: none;" class="mac_timming" data-file=""></div>
<script type="text/javascript" src="<?php echo $maccms['path_tpl']; ?>asset/js/hlstem.js"></script>
<script type="text/javascript" src="<?php echo $maccms['path_tpl']; ?>asset/js/hlexpand.js"></script>
<script type="text/javascript" src="<?php echo $maccms['path_tpl']; ?>asset/js/home.js"></script>
	<!-- END Footer -->
</body>

</html>