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
    <link rel="stylesheet" href="../css/tm-custom.css">
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
                <h3>사진으로 보는 그리스신화박물관<span>HOME>그리스박물관><b>사진으로 보는 그리스신화박물관</b></span></h3>
                <form name="sform" method="post" action="#">
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
                                    <input type="text" name="keyword" id="keyword" title="검색어를 입력하세요!" value="">
                                </li>
                                <li><img src="http://www.greekmythology.co.kr/default/_template/image/default/common/btn_search.gif"
                                        align="absmiddle" alt="검색"></li>
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
                                <li class="jn_pic"><a><img
                                            src="http://www.greekmythology.co.kr/default/Bd/upload/gallery/%EC%9E%85%EA%B5%AC_1.jpg"
                                            alt=""></a></li>
                                <li class="jn_title"><a>입구</a>
                                    <img src="http://www.greekmythology.co.kr/default/Bd/img/hot.gif" alt="인기글">
                                </li>
                                <li class="jn_date">2015-01-19</li>
                            </ul>
                            <ul class="jn_photo">
                                <li class="jn_pic"><a><img
                                            src="http://www.greekmythology.co.kr/default/Bd/upload/gallery/%EC%99%B8%EB%B6%80%EC%A0%84%EA%B2%BD-%ED%92%8D%EC%B0%A8.jpg"
                                            alt=""></a></li>
                                <li class="jn_title"><a ">외부전경
                                        풍차</a> <img src=" http://www.greekmythology.co.kr/default/Bd/img/hot.gif"
                                        alt="인기글"></li>
                                <li class="jn_date">2015-01-19</li>
                            </ul>
                            <ul class="jn_photo">
                                <li class="jn_pic"><a><img
                                            src="http://www.greekmythology.co.kr/default/Bd/upload/gallery/%EC%99%B8%EB%B6%80%EC%A0%84%EA%B2%BD_1.jpg"
                                            alt=""></a></li>
                                <li class="jn_title"><a>외부전경</a>
                                    <img src="http://www.greekmythology.co.kr/default/Bd/img/hot.gif" alt="인기글">
                                </li>
                                <li class="jn_date">2015-01-19</li>
                            </ul>
                            <ul class="jn_photo">
                                <li class="jn_pic"><a><img
                                            src="http://www.greekmythology.co.kr/default/Bd/upload/gallery/%EC%99%B8%EB%B6%80%EC%A0%84%EA%B2%BD-%EC%B9%B4%ED%8E%98%ED%8B%B0%EB%9D%BC_%ED%92%8D%EC%B0%A8.jpg"
                                            alt=""></a></li>
                                <li class="jn_title"><a ">외부전경
                                        풍차</a> <img src=" http://www.greekmythology.co.kr/default/Bd/img/hot.gif"
                                        alt="인기글"></li>
                                <li class="jn_date">2015-01-19</li>
                            </ul>
                            <ul class="jn_photo">
                                <li class="jn_pic"><a><img
                                            src="http://www.greekmythology.co.kr/default/Bd/upload/gallery/%EC%99%B8%EB%B6%80%EC%A0%84%EA%B2%BD-%EB%A7%A4%ED%91%9C.jpg"
                                            alt=""></a></li>
                                <li class="jn_title"><a>외부전경
                                        매표</a> <img src="http://www.greekmythology.co.kr/default/Bd/img/hot.gif"
                                        alt="인기글"></li>
                                <li class="jn_date">2015-01-19</li>
                            </ul>
                            <ul class="jn_photo">
                                <li class="jn_pic"><a><img
                                            src="http://www.greekmythology.co.kr/default/Bd/upload/gallery/%EC%99%B8%EB%B6%80-%EB%B6%84%EC%88%98.jpg"
                                            alt=""></a></li>
                                <li class="jn_title"><a ">외부
                                        분수</a> <img src=" http://www.greekmythology.co.kr/default/Bd/img/hot.gif"
                                        alt="인기글"></li>
                                <li class="jn_date">2015-01-19</li>
                            </ul>
                            <ul class="jn_photo">
                                <li class="jn_pic"><a><img
                                            src="http://www.greekmythology.co.kr/default/Bd/upload/gallery/%EC%B0%BD%EC%A1%B0%EA%B4%80_1.jpg"
                                            alt=""></a></li>
                                <li class="jn_title"><a>창조관</a>
                                    <img src="http://www.greekmythology.co.kr/default/Bd/img/hot.gif" alt="인기글">
                                </li>
                                <li class="jn_date">2015-01-19</li>
                            </ul>
                            <ul class="jn_photo">
                                <li class="jn_pic"><a><img
                                            src="http://www.greekmythology.co.kr/default/Bd/upload/gallery/%EC%99%B8%EB%B6%80%EC%A0%84%EA%B2%BD-%EB%A7%A4%ED%91%9C.jpg"
                                            alt=""></a></li>
                                <li class="jn_title"><a ">올림포스관</a>
                                    <img src=" http://www.greekmythology.co.kr/default/Bd/img/hot.gif" alt="인기글">
                                </li>
                                <li class="jn_date">2015-01-19</li>
                            </ul>
                            <ul class="jn_photo">
                                <li class="jn_pic"><a><img
                                            src="http://www.greekmythology.co.kr/default/Bd/upload/gallery/%EC%8B%A0%ED%83%81%EA%B4%80_1.jpg"
                                            alt=""></a></li>
                                <li class="jn_title"><a ">신탁관</a>
                                    <img src=" http://www.greekmythology.co.kr/default/Bd/img/hot.gif" alt="인기글">
                                </li>
                                <li class="jn_date">2015-01-19</li>
                            </ul>
                        </fieldset>
                    </div>
                </form>
                <!-- 페이지 버튼 -->
                <div class="page-nation">
                    <img src="http://www.greekmythology.co.kr/default/Bd/skin/basic/img/prebtn.gif" alt="이전"
                        align="absmiddle">
                    <span style="padding:0 5px 0 3px;"><strong>1</strong> </span>
                    <img src="http://www.greekmythology.co.kr/default/Bd/skin/basic/img/nextbtn.gif" alt="다음"
                        align="absmiddle">
                </div>
                <article id="sub_contact">
                    <div>
                        <h5>관람문의<span>Tel : 064-773-5800</span>관람시간<span>09:00~18:00 (입장마감 17:00)</span></h5>
                    </div>
                </article>
            </section>
        </div>
        <footer>
            <?php include("../footer.html"); ?>
        </footer>
    </div>
</body>


</body>

</html>