<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:69:"D:\laragon\www\apiicms/application/admin\view\collect\nguonc_goc.html";i:1721529776;s:62:"D:\laragon\www\apiicms\application\admin\view\public\head.html";i:1721554327;s:62:"D:\laragon\www\apiicms\application\admin\view\public\foot.html";i:1721554327;}*/ ?>
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
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">CÀO NGUỒN C</h4>
        </div>
        <div class="card-body">
            <form id="crawl-form">
                <h5>Crawl từng phim</h5>
                <div class="mb-3">
                    <div class="input-group">
                        <span class="input-group-text"><strong>URL phim</strong></span>
                        <input name="link_detail" type="text" class="form-control">
                        <button id="crawl_one" type="button" class="btn btn-primary me-1">Cào phim</button>
                    </div>
                </div>
                <h5>Crawl theo trang</h5>
                <div class="mb-3 row g-3 align-items-center">
                    <div class="col">
                        <div class="input-group">
                            <span class="input-group-text"><strong>Từ trang</strong></span>
                            <input name="page_from" type="number" class="form-control">
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-group">
                            <span class="input-group-text"><strong>Đến trang</strong></span>
                            <input name="page_to" type="number" class="form-control">
                        </div>
                    </div>
                    <div class="col-auto">
                        <button id="get_list_movies" type="button" class="btn btn-success">Tải phim</button>
                    </div>
                </div>
                
                
                
                <div id="msg" class="mb-3" style="display: none;">
                    <p id="msg_text"></p>
                </div>
                <div class="mb-3">
                    <strong class="form-label">Danh sách phim (Có thể dán danh sách link vào đây để cào)</strong>
                    <textarea id="result_list_movies" rows="̀5" class="form-control"></textarea>
                </div>
                <div class="text-center mb-3">
                    <div class="btn-group w-100" role="group">
                        <button id="roll_movies" type="button" class="btn btn-success w-50 btn-block">Trộn phim</button>
                        <button id="crawl_movies" type="button" class="btn btn-primary me-1 w-50 btn-block">Cào phim</button>
                    </div>
                </div>
                
                
                <div id="result_success" class="mb-3" style="display: none;">
                    <p>Crawl Thành Công</p>
                    <textarea id="list_crawl_success" rows="10" class="form-control"></textarea>
                </div>
                <div id="result_error" class="mb-3" style="display: none;">
                    <p>Crawl Lỗi</p>
                    <textarea id="list_crawl_error" rows="10" class="form-control"></textarea>
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript" src="/static/js/admin_common.js?<?php echo $MAC_VERSION; ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
    layui.use(['form','laypage', 'layer','upload'], function() {

        const buttonGetListMovies = $("#get_list_movies");
        const buttonCrawlOne = $("#crawl_one");
        const inputPageFrom = $("input[name=page_to]");
        const inputPageTo = $("input[name=page_from]");
        const divMsg = $("div#msg");
        const divMsgText = $("p#msg_text");
        const textArealistMovies = $("textarea#result_list_movies");
        const buttonCrawlMovies = $("#crawl_movies");
        const buttonRollMovies = $("#roll_movies");
        const divMsgCrawlSuccess = $("div#result_success");
        const divMsgCrawlError = $("div#result_error");
        const textAreaResultSuccess = $("textarea#list_crawl_success");
        const textAreaResultError = $("textarea#list_crawl_error");
        const inputLink = $("input[name=link_detail]");

        var inputFilterType = [];

        buttonRollMovies.on("click", () => {
            var listLink = textArealistMovies.val();
            listLink = listLink.split("\n");
            listLink.sort(() => Math.random() - 0.5);
            listLink = listLink.join("\n");
            textArealistMovies.val(listLink);
        });

        buttonCrawlOne.on("click", () => {
            if (inputLink.val() == "") {
                alert("Mời nhập link phim");
                return;
            }
            var urlPhim = inputLink.val();
            divMsg.show(300);
            divMsgCrawlSuccess.show(300);
            divMsgCrawlError.show(300);
            divMsgText.html(`Crawl Link: ${urlPhim}`);
            $.ajax({
                url:"<?php echo url('crawl_nguonc_goc_link'); ?>",
                type: "POST",
                data: {
                    url: urlPhim,
                },
                beforeSend: function () {
                    buttonCrawlOne.hide(300);
                },
                success: function (res) {
                    let data = JSON.parse(res);
                    if (data.status) {
                        textAreaResultSuccess.val(urlPhim);
                    } else {
                        textAreaResultError.val(urlPhim);
                    }
                    divMsgText.html("Done!");
                    buttonCrawlOne.show(300);
                }
            })
        });

        buttonGetListMovies.on("click", () => {
            divMsg.show(300);
            textArealistMovies.show(300);
            crawl_page_callback(parseInt(inputPageFrom.val()));
        });
        const crawl_page_callback = (currentPage) => {
            var urlPageCrawl = `https://phim.nguonc.com/api/films/phim-moi-cap-nhat?page=${currentPage}`;

            if (currentPage < parseInt(inputPageTo.val())) {
                divMsgText.html("Done!");
                buttonCrawlMovies.show(300);
                return false;
            }
            divMsgText.html(`Crawl Page: ${urlPageCrawl}`);
            $.ajax({
                url: "<?php echo url('crawl_nguonc_goc_page'); ?>",
                type: "POST",
                data: {
                    url: urlPageCrawl,
                },
                beforeSend: function () {
                    buttonGetListMovies.hide(300);
                },
                success: function (res) {
                    let currentList = textArealistMovies.val();
                    if (currentList != "") currentList += "\n" + res;
                    else currentList += res;

                    textArealistMovies.val(currentList);
                    currentPage--;
                    crawl_page_callback(currentPage);
                },
            });
        };

        buttonCrawlMovies.on("click", () => {
            divMsg.show(300);
            divMsgCrawlSuccess.show(300);
            divMsgCrawlError.show(300);

            $("input[name='filter_type[]']:checked").each(function () {
                inputFilterType.push($(this).val());
            });
            crawl_movies(false);
        });
        const crawl_movies = () => {
            var listLink = textArealistMovies.val();
            listLink = listLink.split("\n");
            let linkCurrent = listLink.shift();
            if (linkCurrent == "") {
                divMsgText.html(`Crawl Done!`);
                return false;
            }
            listLink = listLink.join("\n");
            textArealistMovies.val(listLink);
            divMsgText.html(`Crawl Movies: <b>${linkCurrent}</b>`);

            $.ajax({
                url: "<?php echo url('crawl_nguonc_goc_movies'); ?>",
                type: "POST",
                data: {
                    url: linkCurrent,
                    filterType: inputFilterType.join(","),
                },
                beforeSend: function () {
                    buttonCrawlMovies.hide(300);
                    buttonRollMovies.hide(300);
                },
                success: function (res) {
                    let data = JSON.parse(res);
                    console.log(data);
                    if (data.status) {
                        let currentList = textAreaResultSuccess.val();
                        if (currentList != "") currentList += "\n" + linkCurrent + '====>' + data.msg;
                        else currentList += linkCurrent + '====>' + data.msg;
                        textAreaResultSuccess.val(currentList);
                    } else {
                        let currentList = textAreaResultError.val();
                        if (currentList != "") currentList += "\n" + linkCurrent;
                        else currentList += linkCurrent;
                        textAreaResultError.val(currentList);
                    }
                    crawl_movies();
                },
            });
        };

    });
</script>
</body>
</html>
