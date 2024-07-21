<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:69:"D:\laragon\www\apiicms/application/admin\view\collect\kkphim_goc.html";i:1721473366;s:62:"D:\laragon\www\apiicms\application\admin\view\public\head.html";i:1721554327;s:62:"D:\laragon\www\apiicms\application\admin\view\public\foot.html";i:1721554327;}*/ ?>
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
            <h4 class="card-title">CÀO NGUỒN KKPHIM OLD</h4>
        </div>
        <div class="card-body">
            <form id="crawl-form">
                <div class="mb-3">
                    <strong class="form-label">Bỏ qua loại phim</strong>
                    <div style=" display: flex; flex-direction: row; flex-wrap: wrap; justify-content: flex-start; ">
                    <div class="form-check me-2">
                        <input class="form-check-input" type="checkbox" name="filter_type[]" value="single" id="type-single">
                        <label class="form-check-label" for="type-single">Phim Lẻ</label>
                    </div>
                    <div class="form-check me-2">
                        <input class="form-check-input" type="checkbox" name="filter_type[]" value="series" id="type-series">
                        <label class="form-check-label" for="type-series">Phim Bộ</label>
                    </div>
                    <div class="form-check me-2">
                        <input class="form-check-input" type="checkbox" name="filter_type[]" value="hoathinh" id="type-hoathinh">
                        <label class="form-check-label" for="type-hoathinh">Hoạt Hình</label>
                    </div>
                    <div class="form-check me-2">
                        <input class="form-check-input" type="checkbox" name="filter_type[]" value="tvshows" id="type-tvshows">
                        <label class="form-check-label" for="type-tvshows">TV Shows</label>
                    </div>
                    </div>
                </div>
                <div class="mb-3">
                    <strong class="form-label">Bỏ qua thể loại</strong>
                    <div style=" display: flex; flex-direction: row; flex-wrap: wrap; justify-content: flex-start; ">
                    <div class="form-check me-2">
                        <input class="form-check-input" type="checkbox" name="filter_category[]" value="tinh-cam" id="category-tinh-cam">
                        <label class="form-check-label" for="category-tinh-cam">Tình Cảm</label>
                    </div>
                    <div class="form-check me-2">
                        <input class="form-check-input" type="checkbox" name="filter_category[]" value="hai-huoc" id="category-hai-huoc">
                        <label class="form-check-label" for="category-hai-huoc">Hài Hước</label>
                    </div>
                    <div class="form-check me-2">
                        <input class="form-check-input" type="checkbox" name="filter_category[]" value="chinh-kich" id="category-chinh-kich">
                        <label class="form-check-label" for="category-chinh-kich">Chính Kịch</label>
                    </div>
                    <div class="form-check me-2">
                        <input class="form-check-input" type="checkbox" name="filter_category[]" value="phieu-luu" id="category-phieu-luu">
                        <label class="form-check-label" for="category-phieu-luu">Phiêu Lưu</label>
                    </div>
                    <div class="form-check me-2">
                        <input class="form-check-input" type="checkbox" name="filter_category[]" value="hanh-dong" id="category-hanh-dong">
                        <label class="form-check-label" for="category-hanh-dong">Hành Động</label>
                    </div>
                    <div class="form-check me-2">
                        <input class="form-check-input" type="checkbox" name="filter_category[]" value="tam-ly" id="category-tam-ly">
                        <label class="form-check-label" for="category-tam-ly">Tâm Lý</label>
                    </div>
                    <div class="form-check me-2">
                        <input class="form-check-input" type="checkbox" name="filter_category[]" value="kinh-di" id="category-kinh-di">
                        <label class="form-check-label" for="category-kinh-di">Kinh Dị</label>
                    </div>
                    <div class="form-check me-2">
                        <input class="form-check-input" type="checkbox" name="filter_category[]" value="bi-an" id="category-bi-an">
                        <label class="form-check-label" for="category-bi-an">Bí Ẩn</label>
                    </div>
                    <div class="form-check me-2">
                        <input class="form-check-input" type="checkbox" name="filter_category[]" value="vien-tuong" id="category-vien-tuong">
                        <label class="form-check-label" for="category-vien-tuong">Viễn Tưởng</label>
                    </div>
                    <div class="form-check me-2">
                        <input class="form-check-input" type="checkbox" name="filter_category[]" value="khoa-hoc" id="category-khoa-hoc">
                        <label class="form-check-label" for="category-khoa-hoc">Khoa Học</label>
                    </div>
                    <div class="form-check me-2">
                        <input class="form-check-input" type="checkbox" name="filter_category[]" value="hinh-su" id="category-hinh-su">
                        <label class="form-check-label" for="category-hinh-su">Hình Sự</label>
                    </div>
                    <div class="form-check me-2">
                        <input class="form-check-input" type="checkbox" name="filter_category[]" value="chien-tranh" id="category-chien-tranh">
                        <label class="form-check-label" for="category-chien-tranh">Chiến Tranh</label>
                    </div>
                    <div class="form-check me-2">
                        <input class="form-check-input" type="checkbox" name="filter_category[]" value="co-trang" id="category-co-trang">
                        <label class="form-check-label" for="category-co-trang">Cổ Trang</label>
                    </div>
                    <div class="form-check me-2">
                        <input class="form-check-input" type="checkbox" name="filter_category[]" value="vo-thuat" id="category-vo-thuat">
                        <label class="form-check-label" for="category-vo-thuat">Võ Thuật</label>
                    </div>
                    <div class="form-check me-2">
                        <input class="form-check-input" type="checkbox" name="filter_category[]" value="gia-dinh" id="category-gia-dinh">
                        <label class="form-check-label" for="category-gia-dinh">Gia Đình</label>
                    </div>
                    <div class="form-check me-2">
                        <input class="form-check-input" type="checkbox" name="filter_category[]" value="hoat-hinh" id="category-hoat-hinh">
                        <label class="form-check-label" for="category-hoat-hinh">Hoạt Hình</label>
                    </div>
                    <div class="form-check me-2">
                        <input class="form-check-input" type="checkbox" name="filter_category[]" value="tai-lieu" id="category-tai-lieu">
                        <label class="form-check-label" for="category-tai-lieu">Tài Liệu</label>
                    </div>
                    <div class="form-check me-2">
                        <input class="form-check-input" type="checkbox" name="filter_category[]" value="hoc-duong" id="category-hoc-duong">
                        <label class="form-check-label" for="category-hoc-duong">Học Đường</label>
                    </div>
                    <div class="form-check me-2">
                        <input class="form-check-input" type="checkbox" name="filter_category[]" value="am-nhac" id="category-am-nhac">
                        <label class="form-check-label" for="category-am-nhac">Âm Nhạc</label>
                    </div>
                    <div class="form-check me-2">
                        <input class="form-check-input" type="checkbox" name="filter_category[]" value="the-thao" id="category-the-thao">
                        <label class="form-check-label" for="category-the-thao">Thể Thao</label>
                    </div>
                    <div class="form-check me-2">
                        <input class="form-check-input" type="checkbox" name="filter_category[]" value="than-thoai" id="category-than-thoai">
                        <label class="form-check-label" for="category-than-thoai">Thần Thoại</label>
                    </div>
                    <div class="form-check me-2">
                        <input class="form-check-input" type="checkbox" name="filter_category[]" value="lich-su" id="category-lich-su">
                        <label class="form-check-label" for="category-lich-su">Lịch Sử</label>
                    </div>
                    <div class="form-check me-2">
                        <input class="form-check-input" type="checkbox" name="filter_category[]" value="phim-18" id="category-phim-18">
                        <label class="form-check-label" for="category-phim-18">Phim 18+</label>
                    </div>
                    <div class="form-check me-2">
                        <input class="form-check-input" type="checkbox" name="filter_category[]" value="gia-tuong" id="category-gia-tuong">
                        <label class="form-check-label" for="category-gia-tuong">Giả Tượng</label>
                    </div>
                    <div class="form-check me-2">
                        <input class="form-check-input" type="checkbox" name="filter_category[]" value="gay-can" id="category-gay-can">
                        <label class="form-check-label" for="category-gay-can">Gây Cấn</label>
                    </div>
                    <div class="form-check me-2">
                        <input class="form-check-input" type="checkbox" name="filter_category[]" value="kinh-dien" id="category-kinh-dien">
                        <label class="form-check-label" for="category-kinh-dien">Kinh Điển</label>
                    </div>
                    <div class="form-check me-2">
                        <input class="form-check-input" type="checkbox" name="filter_category[]" value="chuong-trinh-truyen-hinh" id="category-chuong-trinh-truyen-hinh">
                        <label class="form-check-label" for="category-chuong-trinh-truyen-hinh">Chương Trình Truyền Hình</label>
                    </div>
                    <div class="form-check me-2">
                        <input class="form-check-input" type="checkbox" name="filter_category[]" value="mien-tay" id="category-mien-tay">
                        <label class="form-check-label" for="category-mien-tay">Miền Tây</label>
                    </div>
                    <div class="form-check me-2">
                        <input class="form-check-input" type="checkbox" name="filter_category[]" value="action-amp-adventure" id="category-action-amp-adventure">
                        <label class="form-check-label" for="category-action-amp-adventure">Action & Adventure</label>
                    </div>
                    <div class="form-check me-2">
                        <input class="form-check-input" type="checkbox" name="filter_category[]" value="sci-fi-amp-fantasy" id="category-sci-fi-amp-fantasy">
                        <label class="form-check-label" for="category-sci-fi-amp-fantasy">Sci-Fi & Fantasy</label>
                    </div>
                </div>
                    <button type="button" class="btn btn-outline-primary btn-sm mt-2" id="select-all-categories">Chọn tất cả</button>
                    <button type="button" class="btn btn-outline-secondary btn-sm mt-2" id="deselect-all-categories">Bỏ chọn tất cả</button>
                </div>
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
    document.addEventListener('DOMContentLoaded', function () {
        const buttonGetListMovies = document.getElementById("get_list_movies");
        const buttonCrawlOne = document.getElementById("crawl_one");
        const inputPageFrom = document.querySelector("input[name=page_from]");
        const inputPageTo = document.querySelector("input[name=page_to]");
        const divMsg = document.getElementById("msg");
        const divMsgText = document.getElementById("msg_text");
        const textArealistMovies = document.getElementById("result_list_movies");
        const buttonCrawlMovies = document.getElementById("crawl_movies");
        const buttonRollMovies = document.getElementById("roll_movies");
        const divMsgCrawlSuccess = document.getElementById("result_success");
        const divMsgCrawlError = document.getElementById("result_error");
        const textAreaResultSuccess = document.getElementById("list_crawl_success");
        const textAreaResultError = document.getElementById("list_crawl_error");
        const inputLink = document.querySelector("input[name=link_detail]");
        const selectAllCategoriesButton = document.getElementById("select-all-categories");
        const deselectAllCategoriesButton = document.getElementById("deselect-all-categories");

        let inputFilterType = [];
        let inputFilterCategory = [];

        selectAllCategoriesButton.addEventListener('click', () => {
            document.querySelectorAll("input[name='filter_category[]']").forEach(el => el.checked = true);
        });

        deselectAllCategoriesButton.addEventListener('click', () => {
            document.querySelectorAll("input[name='filter_category[]']").forEach(el => el.checked = false);
        });

        buttonRollMovies.addEventListener('click', () => {
            let listLink = textArealistMovies.value.split("\n");
            listLink.sort(() => Math.random() - 0.5);
            textArealistMovies.value = listLink.join("\n");
        });

        buttonCrawlOne.addEventListener('click', () => {
            if (inputLink.value === "") {
                alert("Mời nhập link phim");
                return;
            }
            let urlPhim = inputLink.value;
            divMsg.style.display = "block";
            divMsgCrawlSuccess.style.display = "block";
            divMsgCrawlError.style.display = "block";
            divMsgText.textContent = `Crawl Link: ${urlPhim}`;
            fetch("<?php echo url('crawl_kkphim_goc_link'); ?>", {
                method: "POST",
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ url: urlPhim })
            }).then(response => response.json())
              .then(data => {
                  if (data.status) {
                      textAreaResultSuccess.value += `${urlPhim}\n`;
                  } else {
                      textAreaResultError.value += `${urlPhim}\n`;
                  }
                  divMsgText.textContent = "Done!";
                  buttonCrawlOne.style.display = "block";
              });
        });

        buttonGetListMovies.addEventListener('click', () => {
            divMsg.style.display = "block";
            textArealistMovies.style.display = "block";
            crawl_page_callback(parseInt(inputPageFrom.value));
        });

        const crawl_page_callback = (currentPage) => {
            const urlPageCrawl = `https://phimapi.com/danh-sach/phim-moi-cap-nhat?page=${currentPage}`;

            if (currentPage > parseInt(inputPageTo.value)) {
                divMsgText.textContent = "Done!";
                buttonCrawlMovies.style.display = "block";
                return false;
            }
            divMsgText.textContent = `Crawl Page: ${urlPageCrawl}`;
            fetch("<?php echo url('crawl_kkphim_goc_page'); ?>", {
                method: "POST",
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ url: urlPageCrawl })
            }).then(response => response.text())
              .then(res => {
                  let currentList = textArealistMovies.value;
                  if (currentList !== "") currentList += "\n" + res;
                  else currentList += res;

                  textArealistMovies.value = currentList;
                  currentPage++;
                  crawl_page_callback(currentPage);
              });
        };

        buttonCrawlMovies.addEventListener('click', () => {
            divMsg.style.display = "block";
            divMsgCrawlSuccess.style.display = "block";
            divMsgCrawlError.style.display = "block";

            inputFilterType = [];
            inputFilterCategory = [];

            document.querySelectorAll("input[name='filter_type[]']:checked").forEach(el => {
                inputFilterType.push(el.value);
            });

            document.querySelectorAll("input[name='filter_category[]']:checked").forEach(el => {
                inputFilterCategory.push(el.value);
            });

            crawl_movies();
        });

        const crawl_movies = () => {
            let listLink = textArealistMovies.value.split("\n");
            let linkCurrent = listLink.shift();
            if (linkCurrent === "") {
                divMsgText.textContent = `Crawl Done!`;
                return false;
            }
            textArealistMovies.value = listLink.join("\n");
            divMsgText.textContent = `Đang cào phim: ${linkCurrent}`;

            fetch("<?php echo url('crawl_kkphim_goc_movies'); ?>", {
                method: "POST",
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    url: linkCurrent,
                    filterType: inputFilterType.join(","),
                    filterCategory: inputFilterCategory.join(",")
                })
            }).then(response => response.json())
              .then(data => {
                  if (data.status) {
                      let currentList = textAreaResultSuccess.value;
                      if (currentList !== "") currentList += "\n" + linkCurrent + '====>' + data.msg;
                      else currentList += linkCurrent + '====>' + data.msg;
                      textAreaResultSuccess.value = currentList;
                  } else {
                      let currentList = textAreaResultError.value;
                      if (currentList !== "") currentList += "\n" + linkCurrent;
                      else currentList += linkCurrent;
                      textAreaResultError.value = currentList;
                  }
                  crawl_movies();
              });
        };
    });
</script>
</body>
</html>
