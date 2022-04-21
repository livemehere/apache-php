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
                <h3>일반채용<span>HOME>취업정보><b>일반채용</b></span></h3>
                <!-- 시작 -->
                <div id="content">
                    <!-- 윗부분 -->
                    <div class="page_top">
                        <h1 style="text-align: center;">일반채용</h1>


                    </div>
                    <!--  -->
                    <div class="job_list_wrap">
                        <div class="inner s_inner">

                            <!-- 내용 시작 -->
                            <div class="job_list_search_wrap">
                                <div class="job_list_search_table">
                                    <form name="readFrm" method="post" action="/career.do?method=worknet">
                                        <table>
                                            <colgroup>
                                                <col class="col1" style="width:20%;">
                                                <col class="col2" style="width:30%;">
                                                <col class="col1" style="width:20%;">
                                                <col class="col2" style="width:30%;">
                                            </colgroup>
                                            <tbody>
                                                <tr class="row12">
                                                </tr>

                                                <tr class="row11">
                                                    <th>검색 키워드</th>
                                                    <td colspan="3">
                                                        <select class="select_w100" id="SCH_TYPE">
                                                            <option value="A">전체</option>
                                                            <option value="T">제목</option>
                                                            <option value="C">내용</option>
                                                        </select>
                                                        <input type="text" class="input_w480" value="" title="검색어 입력란"
                                                            name="SCH_WORD" id="SCH_WORD" style="width:70%;"
                                                            placeholder="예)전략영업, 개발자,ERP" onkeydown="search();">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <a href="javascript:;" class="job_search_btn">검색하기</a>

                                        <input type="hidden" name="num">
                                        <input type="hidden" name="nowPage" value="1">
                                        <input type="hidden" name="numPerPage" value="10">

                                        <input type="hidden" name="wantedAuthNo" id="wantedAuthNo" value="">
                                    </form>
                                </div>
                            </div>
                            <!-- pc 채용리스트 -->
                            <div class="job_list_top">
                                <span>검색건수:</span>
                                <span class="total">총 1건</span>
                                <span class="position" style="float:right;"><strong>1</strong>/9691 page</span>
                            </div>

                            <div class="job_list">
                                <!-- 리스트 내용 시작 -->
                                <div class="job_list_table">
                                    <table>
                                        <colgroup>
                                            <col class="col1">
                                            <col class="col2">
                                            <col class="col3 list_hidden">
                                            <col class="col4 list_hidden">
                                            <col class="col5 list_hidden">
                                        </colgroup>
                                        <thead>
                                            <tr>
                                                <th>회사명</th>
                                                <th>채용제목/임금/근무지역/근무형태</th>
                                                <th class="list_hidden">학력/경력</th>
                                                <th class="list_hidden">등록일</th>
                                                <th class="list_hidden">마감일</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php
                                                for($i=0;$i<1;$i++){
                                                    echo '
                                                    <tr style="cursor: pointer;">
                                                <td>(주)정림</td>

                                                <td class="job_info">
                                                    <div>
                                                        <a href="#">
                                                            <p class="job_title">품질및납품기사(프레스자동차부품) 모집</p>
                                                            <ul>
                                                                <li>
                                                                    <span class="type1 type1_4">연봉</span>
                                                                    <span class="type2">주6일근무</span>
                                                                    <span class="type3">2800만원</span>
                                                                </li>
                                                                <li class="bar"></li>
                                                                <li class="area">대구 달서구</li>
                                                            </ul>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td class="list_hidden"> 학력무관<br>관계없음</td>
                                                <td class="list_hidden">22-04-21</td>
                                                <td class="list_hidden">

                                                    22-05-20</td>
                                            </tr>
                                                    ';
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="pagination">
                                <a href="#" class="prev"><img src="https://jobs.kmu.ac.kr/job/images/icon_prev.png"
                                        alt=""></a>
                                <a href="#" class="btn cur">1</a>

                                <a href="#" class="next" onclick="javascript:block('2')"><img
                                        src="https://jobs.kmu.ac.kr/job/images/icon_next.png" alt=""></a>
                            </div>
                            <br><br><br>&nbsp;
                            <!-- 내용 끝 -->
                        </div>
                    </div>
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

</html>