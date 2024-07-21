 //                    模板馆专业苹果cms模板下载  www.iqmbg.com                         
 // 此模板仅限用于学习和研究目的；不得将上述内容用于商业或者非法用途，否则，一切后果请用户自负。 
//横幅 顶部

var banner_html = '';
var banner_array = new Array();


//此处设置图片和链接地址
banner_array = [
  {
  'pic': '', //图片地址，如不需显示广告请留空
  'link': '', //链接地址
  }, 
];


//以下不要修改

if (banner_array.length > 0) {
  for (var i = 0; i < banner_array.length; i++) {
    if (banner_array[i]['pic'] != '' && banner_array[i]['pic'] != undefined) {
      banner_html += '<a ';
      banner_html += (banner_array[i]['link'] != '' && banner_array[i]['link'] != undefined) ? 'href="' + banner_array[i]['link'] + '" target="_blank">' : 'href="javascript:;">';
      banner_html += '<img src="' + banner_array[i]['pic'] + '"></a>';
    }
  }
}
if ((banner_html == '' || banner_html == undefined) && ewave_config.banner_text == 1) {
  banner_html = '<p class="ewave-banner-text">广告位</p>';
}
document.getElementById('banner-top').innerHTML = banner_html;
