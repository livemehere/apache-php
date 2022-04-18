<!DOCTYPE html>
<html lang="kor">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>그리스신화박물관</title>
    <link rel="stylesheet" href="../css/common.css">
    <link rel="stylesheet" href="../css/subpage_common.css">
    <link rel="stylesheet" href="../css/about.css">
    <link rel="stylesheet" href="../css/templates.css">
    <link rel="stylesheet" href="../css/content.css">
    <link rel="stylesheet" href="../css/sub/type.css">
    <link rel="stylesheet" href="../css/board_basic_photo.css">

    <script src="//code.jquery.com/jquery-3.4.1.min.js"></script>
</head>

<body>
    <div id="wrap">
        <header>
            <?php include("../header.html"); ?>
        </header>

        <section id="slider">
            <img src="../img/aboutus/sub_visual_bg.jpg" alt="">
        </section>
        <div id="sub_main">
            <aside id="left_menu">
                <?php include ("left_menu.html"); ?>
            </aside>
            <section id="sub_contents">
                <div id="page">

                    <h3 id="page_head">
                        <h3>사진으로보는 그리스신화 박물관<div id="location">
                                HOME &gt; 그리스신화박물관 &gt; <b>사진으로보는 그리스신화 박물관</b> </div>
                        </h3>
                    </h3>
                    <div id="contents">

                        <!--내용시작-->
                        <div class="boardBody">

                            <form name="sform" method="post" action="/default/Bd/list.php">
                                <input type="hidden" name="btable" value="gallery" />
                                <input type="hidden" name="mode" value="search" />
                                <div id="searchField">
                                    <!-- 게시판 검색 -->
                                    <fieldset class="boardSearch">
                                        <legend>게시물 검색</legend>
                                        <ul>
                                            <li>
                                                <label for="l_search">검색</label>
                                                <select name="l_search" id="l_search" title="검색항목을 선택하세요!">
                                                    <option value="sc">제목+내용</option>
                                                    <option value="subject">제목</option>
                                                    <option value="name">이름</option>
                                                    <option value="comment">내용</option>
                                                </select>
                                            </li>
                                            <li>
                                                <label for="keyword">검색어를 입력하세요</label>
                                                <input type="text" name="keyword" id="keyword" title="검색어를 입력하세요!"
                                                    value="" />
                                            </li>
                                            <li><img src="/image/default/common/btn_search.gif" onclick="submit();"
                                                    align="absmiddle" alt="검색" /></li>
                                        </ul>
                                    </fieldset>
                                    <!-- //게시판 검색 -->

                                    <!-- 카테고리 -->
                                    <fieldset class="boardCategory">
                                        <legend>카테고리 검색</legend>

                                    </fieldset>
                                    <!-- //카테고리 -->
                                </div>

                                <div id="boardListForm">
                                    <fieldset>

                                        <legend>게시물 목록</legend>


                                        <ul class="jn_photo">
                                            <li class="jn_pic"><a
                                                    href="../Bd/view.php?btable=gallery&amp;bno=14&amp;p=1&amp;lcate=&amp;search=&amp;keyword="><img
                                                        src="../Bd/upload/gallery/입구_1.jpg" alt="" /></a></li>
                                            <li class="jn_title"><a
                                                    href="../Bd/view.php?btable=gallery&amp;bno=14&amp;p=1&amp;lcate=&amp;search=&amp;keyword=">입구</a>
                                                <img src="../Bd/img/hot.gif" alt="인기글" />
                                            </li>
                                            <li class="jn_date">2015-01-19</li>
                                        </ul>
                                        <ul class="jn_photo">
                                            <li class="jn_pic"><a
                                                    href="../Bd/view.php?btable=gallery&amp;bno=13&amp;p=1&amp;lcate=&amp;search=&amp;keyword="><img
                                                        src="../Bd/upload/gallery/외부전경-풍차.jpg" alt="" /></a></li>
                                            <li class="jn_title"><a
                                                    href="../Bd/view.php?btable=gallery&amp;bno=13&amp;p=1&amp;lcate=&amp;search=&amp;keyword=">외부전경
                                                    풍차</a> <img src="../Bd/img/hot.gif" alt="인기글" /></li>
                                            <li class="jn_date">2015-01-19</li>
                                        </ul>
                                        <ul class="jn_photo">
                                            <li class="jn_pic"><a
                                                    href="../Bd/view.php?btable=gallery&amp;bno=12&amp;p=1&amp;lcate=&amp;search=&amp;keyword="><img
                                                        src="../Bd/upload/gallery/외부전경_1.jpg" alt="" /></a></li>
                                            <li class="jn_title"><a
                                                    href="../Bd/view.php?btable=gallery&amp;bno=12&amp;p=1&amp;lcate=&amp;search=&amp;keyword=">외부전경</a>
                                                <img src="../Bd/img/hot.gif" alt="인기글" />
                                            </li>
                                            <li class="jn_date">2015-01-19</li>
                                        </ul>
                                        <ul class="jn_photo">
                                            <li class="jn_pic"><a
                                                    href="../Bd/view.php?btable=gallery&amp;bno=11&amp;p=1&amp;lcate=&amp;search=&amp;keyword="><img
                                                        src="../Bd/upload/gallery/외부전경-카페티라_풍차.jpg" alt="" /></a></li>
                                            <li class="jn_title"><a
                                                    href="../Bd/view.php?btable=gallery&amp;bno=11&amp;p=1&amp;lcate=&amp;search=&amp;keyword=">외부전경
                                                    풍차</a> <img src="../Bd/img/hot.gif" alt="인기글" /></li>
                                            <li class="jn_date">2015-01-19</li>
                                        </ul>
                                        <ul class="jn_photo">
                                            <li class="jn_pic"><a
                                                    href="../Bd/view.php?btable=gallery&amp;bno=10&amp;p=1&amp;lcate=&amp;search=&amp;keyword="><img
                                                        src="../Bd/upload/gallery/외부전경-매표.jpg" alt="" /></a></li>
                                            <li class="jn_title"><a
                                                    href="../Bd/view.php?btable=gallery&amp;bno=10&amp;p=1&amp;lcate=&amp;search=&amp;keyword=">외부전경
                                                    매표</a> <img src="../Bd/img/hot.gif" alt="인기글" /></li>
                                            <li class="jn_date">2015-01-19</li>
                                        </ul>
                                        <ul class="jn_photo">
                                            <li class="jn_pic"><a
                                                    href="../Bd/view.php?btable=gallery&amp;bno=9&amp;p=1&amp;lcate=&amp;search=&amp;keyword="><img
                                                        src="../Bd/upload/gallery/외부-분수.jpg" alt="" /></a></li>
                                            <li class="jn_title"><a
                                                    href="../Bd/view.php?btable=gallery&amp;bno=9&amp;p=1&amp;lcate=&amp;search=&amp;keyword=">외부
                                                    분수</a> <img src="../Bd/img/hot.gif" alt="인기글" /></li>
                                            <li class="jn_date">2015-01-19</li>
                                        </ul>
                                        <ul class="jn_photo">
                                            <li class="jn_pic"><a
                                                    href="../Bd/view.php?btable=gallery&amp;bno=8&amp;p=1&amp;lcate=&amp;search=&amp;keyword="><img
                                                        src="../Bd/upload/gallery/창조관_1.jpg" alt="" /></a></li>
                                            <li class="jn_title"><a
                                                    href="../Bd/view.php?btable=gallery&amp;bno=8&amp;p=1&amp;lcate=&amp;search=&amp;keyword=">창조관</a>
                                                <img src="../Bd/img/hot.gif" alt="인기글" />
                                            </li>
                                            <li class="jn_date">2015-01-19</li>
                                        </ul>
                                        <ul class="jn_photo">
                                            <li class="jn_pic"><a
                                                    href="../Bd/view.php?btable=gallery&amp;bno=7&amp;p=1&amp;lcate=&amp;search=&amp;keyword="><img
                                                        src="../Bd/upload/gallery/올림포스관-(2).jpg" alt="" /></a></li>
                                            <li class="jn_title"><a
                                                    href="../Bd/view.php?btable=gallery&amp;bno=7&amp;p=1&amp;lcate=&amp;search=&amp;keyword=">올림포스관</a>
                                                <img src="../Bd/img/hot.gif" alt="인기글" />
                                            </li>
                                            <li class="jn_date">2015-01-19</li>
                                        </ul>
                                        <ul class="jn_photo">
                                            <li class="jn_pic"><a
                                                    href="../Bd/view.php?btable=gallery&amp;bno=6&amp;p=1&amp;lcate=&amp;search=&amp;keyword="><img
                                                        src="../Bd/upload/gallery/신탁관_1.jpg" alt="" /></a></li>
                                            <li class="jn_title"><a
                                                    href="../Bd/view.php?btable=gallery&amp;bno=6&amp;p=1&amp;lcate=&amp;search=&amp;keyword=">신탁관</a>
                                                <img src="../Bd/img/hot.gif" alt="인기글" />
                                            </li>
                                            <li class="jn_date">2015-01-19</li>
                                        </ul>
                                        <div class="boardPagination">
                                            <img class="prev" src="/image/default/Bd/skin/basic/img/prebtn.gif" alt="이전"
                                                align="absmiddle" /> <span
                                                style="padding:0 5px 0 3px;"><strong>1</strong> <a class="paging_num"
                                                    href=/image/default/Bd/list.php?btable=gallery&amp;mode=&amp;l_search=&amp;keyword=&amp;sort=notice+desc,+fid+desc,+thread&amp;recnum=&amp;lcate=&p=2>2</a>
                                            </span><a
                                                href=/image/default/Bd/list.php?btable=gallery&amp;mode=&amp;l_search=&amp;keyword=&amp;sort=notice+desc,+fid+desc,+thread&amp;recnum=&amp;lcate=&p=2><img
                                                    class="next" src="/image/default/Bd/skin/basic/img/nextbtn.gif"
                                                    alt="다음" align="absmiddle" /></a>
                                        </div>
                                        <div class="boardBtn">
                                            <!--           <img src="../Bd/skin/basic_photo/img/btn_write.gif" alt="글쓰기" />
-->
                                        </div>
                                    </fieldset>
                                    <div class="foot_info">
                                        <strong>관람문의</strong> Tel : 064-773-5800 <strong class="mgl20">관람시간</strong>
                                        09:00~18:00 (입장마감 17:00)
                                    </div>
                                </div>
                            </form>
                        </div>
            </section>
        </div>
        <footer>
            <?php include("../footer.html"); ?>
        </footer>
    </div>

</body>

</html>