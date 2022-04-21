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
                <h3>정부지원일자리<span>HOME>취업정보><b>정부지원일자리</b></span></h3>
                <!-- 시작 -->
                <div id="content">
                    <!-- 윗부분 -->
                    <div class="page_top">
                        <h1 style="text-align: center;">정부지원일자리</h1>

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
                                                    <th>기관소재지</th>
                                                    <td>
                                                        <select name="region" id="region" style="width:90%;">
                                                            <option value="27000">대구</option>
                                                            <option value="11000">서울</option>
                                                            <option value="26000">부산</option>
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

                                                        <script>
                                                        $("#region").val("27000");
                                                        </script>

                                                    </td>

                                                    <th>검색기간</th>
                                                    <td>


                                                        <input type="text" name="srchBgnDt" id="srchBgnDt"
                                                            class="calendar txt_date uiDate_input hasDatepicker"
                                                            maxlength="10" style="width:40%" value="2021-04-22"
                                                            onchange="fnChk();">
                                                        <span>~</span>
                                                        <input type="text" name="srchEndDt" id="srchEndDt"
                                                            class="calendar txt_date uiDate_input hasDatepicker"
                                                            maxlength="10" style="width:40%" value="2022-04-21">
                                                        <script>
                                                        $("#srchBgnDt").val("2021-04-22");
                                                        $("#srchEndDt").val("2022-04-21");

                                                        function fnChk() {
                                                            if ($("#srchBgnDt").val().length > 9 && $("#srchEndDt")
                                                                .val().length > 9) diff_sample($("#srchBgnDt").val(), $(
                                                                "#srchEndDt").val());

                                                        }
                                                        </script>
                                                    </td>
                                                </tr>

                                                <tr class="row2">
                                                    <th>직종</th>
                                                    <td>
                                                        <select name="jssfcCode" id="jssfcCode" style="width:90%;">
                                                            <option value="">=선택=</option>
                                                            <option value="01">경영·사무·금융·보험</option>
                                                            <option value="02">연구 및 공학기술</option>
                                                            <option value="03">교육·법률·사회복지·경찰·소방 및 군인</option>
                                                            <option value="04">보건·의료</option>
                                                            <option value="05">예술·디자인·방송·스포츠</option>
                                                            <option value="06">미용·여행·숙박·음식·경비·돌봄·청소</option>
                                                            <option value="07">영업·판매·운전·운송</option>
                                                            <option value="08">건설·채굴</option>
                                                            <option value="09">설치·정비·생산-기계·금속·재료</option>
                                                            <option value="10">설치·정비·생산-전기·전자·정보통신</option>
                                                            <option value="11">설치·정비·생산-화학·환경·섬유·의복·식품가공</option>
                                                            <option value="12">설치·정비·생산-인쇄·목재·공예 및 제조 단순</option>
                                                            <option value="13">농림어업직</option>
                                                        </select>
                                                        <script>
                                                        $("#jssfcCode").val("");
                                                        </script>
                                                    </td>

                                                    <th>기관유형</th>
                                                    <td>
                                                        <select name="insttTyCode" id="insttTyCode" style="width:90%;">
                                                            <option value="">=선택=</option>
                                                            <option value="Z7001">중앙부처</option>
                                                            <option value="Z7002">자치단체</option>
                                                        </select>
                                                        <script>
                                                        $("#insttTyCode").val("");
                                                        </script>
                                                    </td>
                                                </tr>


                                                <!-- <tr class="row2">
                                                    <th>사업아이디</th>
                                                    <td >bsnsId
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
                                <span class="position" style="float:right;"><strong>1</strong>/1 page</span>
                            </div>

                            <div class="job_list">
                                <!-- 리스트 내용 시작 -->
                                <div class="job_list_table">
                                    <table>
                                        <colgroup>
                                            <col class="col1">
                                            <col class="col2">
                                            <col class="col3 list_hidden">
                                        </colgroup>
                                        <thead>
                                            <tr>
                                                <th>사업명<br>기관유형/주관기관</th>
                                                <th>기관명/임금/모집공고(일자리)명</th>
                                                <th class="list_hidden">등록일<br>모집공고기간 </th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php
                                                for($i=0;$i<10;$i++){
                                                    echo '
                                                    <tr  style="cursor:pointer;">
												<td>(대구광역시청)2022년 어린이집 방역인력 지원사업<br>
													<span class="type1 type1_2">자치단체</span> 
                                                    <span class="type1 type1_3">대구광역시청</span>
												</td>
												
												 <td class="job_info">
                                                    <div>
                                                    		 
                                                            <ul style="line-height:30px;">
                                                                <li>
                                                                    <span class="type3">기관:대구광역시청</span>
                                                                </li>
                                                                <li style="margin-top:3px;">
                                                                	<span class="type3">임금:시급 9,160</span> 
                                                                	<span class="type3">근무지역: 대구광역시 중구</span>
                                                                </li>
                                                                <li style="margin-top:3px;">어린이집 방역인력 모집 공고</li>
                                                            </ul>
                                                        	
                                                    </div>
                                                </td>
												<td class="list_hidden" style="line-height:30px;">2022-04-19<br>2022-04-20 2022-04-27</td>
                                                
                                                
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