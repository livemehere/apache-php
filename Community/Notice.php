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
            <img src="../img/community/sub_visual_bg.jpg" alt="">
        </section>
        <div id="sub_main">
            <aside id="left_menu">
                <?php include ("left_menu.html"); ?>
            </aside>
            <section id="sub_contents">
                <h3>공지사항<span>HOME>커뮤니티><b>공지사항</b></span></h3>
                <form name="sform" method="post" action="#" class="mt-2">
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
                    <div class="boardListForm">
                        <fieldset>
                            <legend>게시물 목록</legend>
                            <table cellspacing="0" cellpadding="0" width="100%" summary="공지사항 목록 테이블입니다.">
                                <caption>공지사항 게시물 목록입니다.</caption>
                                <thead>
                                    <tr>
                                        <th scope="col" class="first-child"> No.</th>
                                        <th scope="col">제목</th>
                                        <th scope="col">작성자</th>
                                        <th scope="col">파일</th>
                                        <th scope="col">작성일</th>
                                        <th scope="col">조회</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="jn_num">8</td>
                                        <td class="jn_title"><a title="그리스신화박물관 포스트 시작합니다">그리스신화박물관 포스트 시작…</a> <img
                                                src="http://www.greekmythology.co.kr/default/Bd/img/hot.gif"
                                                class="new"></td>
                                        <td class="jn_author"><a href="mailto:greekjeju@naver.com">운영자</a></td>
                                        <td class="jn_ad">&nbsp;</td>
                                        <td class="jn_date">2018-08-05</td>
                                        <td class="jn_vCount">2826</td>
                                    </tr>
                                    <tr>

                                        <td class="jn_num">7</td>
                                        <td class="jn_title"><a title="2018년 새해 복 많이 받으세요~ ">2018년 새해 복 많이 받으세요~ </a>
                                            <img src="http://www.greekmythology.co.kr/default/Bd/img/hot.gif"
                                                class="new">
                                        </td>
                                        <td class="jn_author">운영자</td>
                                        <td class="jn_ad"><img
                                                src="http://www.greekmythology.co.kr/default/Bd/img/icon_file.gif"
                                                alt="첨부파일"></td>
                                        <td class="jn_date">2018-02-15</td>
                                        <td class="jn_vCount">3011</td>
                                    </tr>
                                    <tr>

                                        <td class="jn_num">6</td>
                                        <td class="jn_title"><a title="2017년도 문화가 있는날은 계속됩니다!!">2017년도 문화가 있는날은 계속…</a>
                                            <img src="http://www.greekmythology.co.kr/default/Bd/img/hot.gif"
                                                class="new">
                                        </td>
                                        <td class="jn_author">운영자</td>
                                        <td class="jn_ad"><img
                                                src="http://www.greekmythology.co.kr/default/Bd/img/icon_file.gif"
                                                alt="첨부파일"></td>
                                        <td class="jn_date">2017-06-23</td>
                                        <td class="jn_vCount">3205</td>
                                    </tr>
                                    <tr>

                                        <td class="jn_num">5</td>
                                        <td class="jn_title"><a title="2017년 정유년 새해 복 많이 받읍시닭!">2017년 정유년 새해 복 많이 받…</a>
                                            <img src="http://www.greekmythology.co.kr/default/Bd/img/hot.gif"
                                                class="new">
                                        </td>
                                        <td class="jn_author">운영자</td>
                                        <td class="jn_ad"><img
                                                src="http://www.greekmythology.co.kr/default/Bd/img/icon_file.gif"
                                                alt="첨부파일"></td>
                                        <td class="jn_date">2017-01-26</td>
                                        <td class="jn_vCount">3976</td>
                                    </tr>
                                    <tr>

                                        <td class="jn_num">4</td>
                                        <td class="jn_title"><a title="7월 제주도민을 위한 SNS EVENT!">7월 제주도민을 위한 SNS
                                                EVENT!</a> <img
                                                src="http://www.greekmythology.co.kr/default/Bd/img/hot.gif"
                                                class="new"></td>
                                        <td class="jn_author">운영자</td>
                                        <td class="jn_ad"><img
                                                src="http://www.greekmythology.co.kr/default/Bd/img/icon_file.gif"
                                                alt="첨부파일"></td>
                                        <td class="jn_date">2015-07-06</td>
                                        <td class="jn_vCount">7248</td>
                                    </tr>
                                    <tr>

                                        <td class="jn_num">3</td>
                                        <td class="jn_title"><a title="가정의 달 HAPPY EVENT!!">가정의 달 HAPPY EVENT!!</a> <img
                                                src="http://www.greekmythology.co.kr/default/Bd/img/hot.gif"
                                                class="new"></td>
                                        <td class="jn_author">운영자</td>
                                        <td class="jn_ad"><img
                                                src="http://www.greekmythology.co.kr/default/Bd/img/icon_file.gif"
                                                alt="첨부파일"></td>
                                        <td class="jn_date">2015-04-15</td>
                                        <td class="jn_vCount">7144</td>
                                    </tr>
                                    <tr>

                                        <td class="jn_num">2</td>
                                        <td class="jn_title"><a title="매월 마지막 수요일은 '문화가 있는 날'">매월 마지막 수요일은 '문화가 …</a>
                                            <img src="http://www.greekmythology.co.kr/default/Bd/img/hot.gif"
                                                class="new">
                                        </td>
                                        <td class="jn_author">운영자</td>
                                        <td class="jn_ad"><img
                                                src="http://www.greekmythology.co.kr/default/Bd/img/icon_file.gif"
                                                alt="첨부파일"></td>
                                        <td class="jn_date">2015-02-27</td>
                                        <td class="jn_vCount">7696</td>
                                    </tr>
                                    <tr>

                                        <td class="jn_num">1</td>
                                        <td class="jn_title"><a title="그리스신화박물관 홈페이지 OPEN!">그리스신화박물관 홈페이지 OPE</a> <img
                                                src="http://www.greekmythology.co.kr/default/Bd/img/hot.gif"
                                                class="new"></td>
                                        <td class="jn_author">운영자</td>
                                        <td class="jn_ad">&nbsp;</td>
                                        <td class="jn_date">2015-02-09</td>
                                        <td class="jn_vCount">7026</td>
                                    </tr>
                                </tbody>
                            </table>
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