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
                <h3>채용정보<span>HOME>취업정보><b>채용정보</b></span></h3>
                <!-- 시작 -->
                <div id="content">
                    <!-- 윗부분 -->
                    <div class="page_top">
                        <h1 style="text-align: center;">채용정보</h1>
                        <div style="text-align:right;">
                            <a href="/career.do?method=worknet15" class="job_search_btn"
                                style="display:inline-block;background: #0797f9;width: 120px;line-height: 40px;font-size: 18px;color: #fff;text-align:center;">청년인턴정보</a>
                            <a href="/career.do?method=worknet17" class="job_search_btn"
                                style="display:inline-block;background: #0797f9;width: 120px;line-height: 40px;font-size: 18px;color: #fff;text-align:center;">공채속보</a>
                        </div>
                        <p class="page_desc">정보출처 <img src="https://jobs.kmu.ac.kr/job/images/worknet.png"
                                alt="worknet">: 본 자료는 고용노동부
                            워크넷(www.work.go.kr)에서 제공된 정보이며, 무단복제 및 배포를 금지합니다.</p>
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
                                                <col style="width:15%">
                                                <col style="width:35%">
                                                <col style="width:15%">
                                                <col style="width:35%">
                                            </colgroup>
                                            <tbody>
                                                <tr class="row1">
                                                    <th>근무지역</th>
                                                    <td>
                                                        <select name="region" id="region">
                                                            <option value="" selected="">=근무지역=</option>
                                                            <option value="11000">서울</option>
                                                            <option value="26000">부산</option>
                                                            <option value="27000">대구</option>
                                                            <option value="28000">인천</option>
                                                            <option value="29000">광주</option>
                                                            <option value="30000">대전</option>
                                                            <option value="31000">울산</option>
                                                            <option value="36110">세종</option>
                                                            <option value="41000">경기</option>
                                                            <option value="42000">강원</option>
                                                            <option value="43000">충북</option>
                                                            <option value="44000">충남</option>
                                                            <option value="45000">전북</option>
                                                            <option value="46000">전남</option>
                                                            <option value="47000">경북</option>
                                                            <option value="48000">경남</option>
                                                            <option value="50000">제주</option>
                                                        </select>

                                                    </td>

                                                    <th>경력</th>
                                                    <td>
                                                        <select name="career" id="career">
                                                            <option value="" selected="">전체</option>
                                                            <option value="N">신입</option>
                                                            <option value="E">경력</option>
                                                            <option value="Z">관계없음</option>
                                                        </select>


                                                    </td>


                                                </tr>
                                                <tr class="row2">
                                                    <th>희망직종</th>
                                                    <td colspan="3">
                                                        <select name="occupation" id="occupation">
                                                            <option value="">=직종코드=</option>
                                                            <option value="01">관리자, 공학기술자(엔지니어) </option>
                                                            <option value="02">경영·사무·금융·보험 </option>
                                                            <option value="03">교육·연구·법률</option>
                                                            <option value="04">의료·보건·사회복지</option>
                                                            <option value="05">문화·예술·신문방송·디자인·캐드</option>
                                                            <option value="06">영업·판매·TM·고객상담</option>
                                                            <option value="07">미용·여행·숙박·오락·스포츠·음식·경비청소</option>
                                                            <option value="08">무역·물류·운전·운송 </option>
                                                            <option value="09">건설·건축·토목·환경·에너지·산업안전</option>
                                                            <option value="10">기계·금속·재료</option>
                                                            <option value="11">전기·전자</option>
                                                            <option value="12">화학·섬유·식품</option>
                                                            <option value="13">IT·정보통신·웹</option>
                                                            <option value="14">인쇄·목재·가구·종이·공예·상하수·재활용·농림어업·군인</option>
                                                            <option value="15">생산직·단순노무·경비·청소</option>
                                                        </select>
                                                        <script>
                                                        $("#occupation").val("");
                                                        </script>
                                                    </td>
                                                </tr>
                                                <tr class="row3">
                                                    <th>희망임금</th>
                                                    <td colspan="3">
                                                        <div style="float:left;margin-right:15px;">
                                                            <select name="salTp" id="salTp"
                                                                onchange="if($(this).val()=='Y'){$('#PayBox').show();}else{$('#PayBox').hide();}">
                                                                <option value="">=임금형태=</option>
                                                                <option value="D">일급</option>
                                                                <option value="H">시급</option>
                                                                <option value="M">월급</option>
                                                                <option value="Y">연봉</option>
                                                                <option value="">관계없음</option>
                                                            </select>
                                                            <script>
                                                            $("#salTp").val("");
                                                            </script>
                                                        </div>

                                                        <!--급여 -->
                                                        <div style="display:none;float:left;" id="PayBox">
                                                            <input type="text" name="minPay" id="minPay" value="0"
                                                                class="onlyNumber" style="width:80px;">만원이상
                                                            <input type="text" name="maxPay" id="maxPay" value=""
                                                                class="onlyNumber" style="width:80px;">만원이하
                                                        </div>

                                                    </td>
                                                </tr>
                                                <!-- 
                                                 <tr class="row8">
                                                	<th>등록기간</th>
                                                	<td colspan="3">
                                                		<input type="text" name="" class="txt_date uiDate_input" maxlength="10" >
														<span>~</span>
														<input type="text" name="" class="txt_date uiDate_input" maxlength="10" >
                                                	</td>
                                                </tr> -->

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
                                <span class="total">총 10건</span>
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
                                                for($i=0;$i<10;$i++){
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

                                <a href="#" class="btn">2</a>

                                <a href="#" class="btn">3</a>

                                <a href="#" class="btn">4</a>

                                <a href="#" class="btn">5</a>

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