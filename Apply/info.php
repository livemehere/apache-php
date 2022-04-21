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
                                <span class="total">총 96902건</span>
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
                                            <tr onclick="view('K140022204210004');" style="cursor: pointer;">
                                                <td>(주)정림</td>

                                                <td class="job_info">
                                                    <div>
                                                        <a href="#" onclick="view('K140022204210004');">
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

                                            <tr onclick="view('K131162204210003');" style="cursor: pointer;">
                                                <td>영진기계(주)</td>

                                                <td class="job_info">
                                                    <div>
                                                        <a href="#" onclick="view('K131162204210003');">
                                                            <p class="job_title">도장,도색 유경험자 구인모집합니다.</p>
                                                            <ul>
                                                                <li>
                                                                    <span class="type1 type1_4">월급</span>
                                                                    <span class="type2">주5일근무</span>
                                                                    <span class="type3">330만원 ~ 370만원</span>
                                                                </li>
                                                                <li class="bar"></li>
                                                                <li class="area">경남 창녕군</li>
                                                            </ul>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td class="list_hidden"> 학력무관<br>경력</td>
                                                <td class="list_hidden">22-04-21</td>
                                                <td class="list_hidden">

                                                    채용시까지<br> 22-06-19</td>
                                            </tr>

                                            <tr onclick="view('K161322204210003');" style="cursor: pointer;">
                                                <td>꼬꼬어린이집</td>

                                                <td class="job_info">
                                                    <div>
                                                        <a href="#" onclick="view('K161322204210003');">
                                                            <p class="job_title">야간연장반 교사를 구합니다</p>
                                                            <ul>
                                                                <li>
                                                                    <span class="type1 type1_4">월급</span>
                                                                    <span class="type2">주5일근무</span>
                                                                    <span class="type3">180만원</span>
                                                                </li>
                                                                <li class="bar"></li>
                                                                <li class="area">전북 군산시</li>
                                                            </ul>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td class="list_hidden"> 대졸(2~3년)<br>경력</td>
                                                <td class="list_hidden">22-04-21</td>
                                                <td class="list_hidden">

                                                    채용시까지<br> 22-06-19</td>
                                            </tr>

                                            <tr onclick="view('K171222204210005');" style="cursor: pointer;">
                                                <td>(주)케이씨필</td>

                                                <td class="job_info">
                                                    <div>
                                                        <a href="#" onclick="view('K171222204210005');">
                                                            <p class="job_title">산업용필터 제조업 생산직 모집</p>
                                                            <ul>
                                                                <li>
                                                                    <span class="type1 type1_4">시급</span>
                                                                    <span class="type2">주5일근무</span>
                                                                    <span class="type3">9160원</span>
                                                                </li>
                                                                <li class="bar"></li>
                                                                <li class="area">충북 충주시</li>
                                                            </ul>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td class="list_hidden"> 학력무관<br>신입</td>
                                                <td class="list_hidden">22-04-21</td>
                                                <td class="list_hidden">

                                                    22-05-10</td>
                                            </tr>

                                            <tr onclick="view('K162232204210003');" style="cursor: pointer;">
                                                <td>씨에스주식회사</td>

                                                <td class="job_info">
                                                    <div>
                                                        <a href="#" onclick="view('K162232204210003');">
                                                            <p class="job_title">전동공구 수리 가능자 (전기,전자 설비 조작원) ...</p>
                                                            <ul>
                                                                <li>
                                                                    <span class="type1 type1_4">월급</span>
                                                                    <span class="type2">주5일근무</span>
                                                                    <span class="type3">250만원 ~ 300만원</span>
                                                                </li>
                                                                <li class="bar"></li>
                                                                <li class="area">전남 여수시</li>
                                                            </ul>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td class="list_hidden"> 학력무관<br>경력</td>
                                                <td class="list_hidden">22-04-21</td>
                                                <td class="list_hidden">

                                                    채용시까지<br> 22-06-19</td>
                                            </tr>

                                            <tr onclick="view('K131162204210002');" style="cursor: pointer;">
                                                <td>세홍산업</td>

                                                <td class="job_info">
                                                    <div>
                                                        <a href="#" onclick="view('K131162204210002');">
                                                            <p class="job_title">세홍산업 가족 모십니다.</p>
                                                            <ul>
                                                                <li>
                                                                    <span class="type1 type1_4">시급</span>
                                                                    <span class="type2">주5일근무</span>
                                                                    <span class="type3">11000원 ~ 11000원</span>
                                                                </li>
                                                                <li class="bar"></li>
                                                                <li class="area">경남 창녕군</li>
                                                            </ul>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td class="list_hidden"> 학력무관<br>관계없음</td>
                                                <td class="list_hidden">22-04-21</td>
                                                <td class="list_hidden">

                                                    22-05-05</td>
                                            </tr>

                                            <tr onclick="view('K130112204210012');" style="cursor: pointer;">
                                                <td>재광건설(주)</td>

                                                <td class="job_info">
                                                    <div>
                                                        <a href="#" onclick="view('K130112204210012');">
                                                            <p class="job_title">토목기사님 구합니다.</p>
                                                            <ul>
                                                                <li>
                                                                    <span class="type1 type1_4">연봉</span>
                                                                    <span class="type2">주6일근무</span>
                                                                    <span class="type3">3500만원</span>
                                                                </li>
                                                                <li class="bar"></li>
                                                                <li class="area">부산 기장군</li>
                                                            </ul>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td class="list_hidden"> 학력무관<br>관계없음</td>
                                                <td class="list_hidden">22-04-21</td>
                                                <td class="list_hidden">

                                                    채용시까지<br> 22-06-19</td>
                                            </tr>

                                            <tr onclick="view('K140022204210003');" style="cursor: pointer;">
                                                <td>대동전산폼주식회사</td>

                                                <td class="job_info">
                                                    <div>
                                                        <a href="#" onclick="view('K140022204210003');">
                                                            <p class="job_title">영업부 사원 모집(납품병행)</p>
                                                            <ul>
                                                                <li>
                                                                    <span class="type1 type1_4">시급</span>
                                                                    <span class="type2">주5일근무</span>
                                                                    <span class="type3">9160원</span>
                                                                </li>
                                                                <li class="bar"></li>
                                                                <li class="area">대구 달서구</li>
                                                            </ul>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td class="list_hidden"> 고졸<br>신입</td>
                                                <td class="list_hidden">22-04-21</td>
                                                <td class="list_hidden">

                                                    22-05-05</td>
                                            </tr>

                                            <tr onclick="view('K162232204210002');" style="cursor: pointer;">
                                                <td>씨에스주식회사</td>

                                                <td class="job_info">
                                                    <div>
                                                        <a href="#" onclick="view('K162232204210002');">
                                                            <p class="job_title">플랜트 관련 품질관리자 구인(도약장려금)</p>
                                                            <ul>
                                                                <li>
                                                                    <span class="type1 type1_4">연봉</span>
                                                                    <span class="type2">주5일근무</span>
                                                                    <span class="type3">4000만원 ~ 6000만원</span>
                                                                </li>
                                                                <li class="bar"></li>
                                                                <li class="area">전남 여수시</li>
                                                            </ul>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td class="list_hidden"> 학력무관<br>경력</td>
                                                <td class="list_hidden">22-04-21</td>
                                                <td class="list_hidden">

                                                    채용시까지<br> 22-06-19</td>
                                            </tr>

                                            <tr onclick="view('K150012204210005');" style="cursor: pointer;">
                                                <td>대양로프시스템</td>

                                                <td class="job_info">
                                                    <div>
                                                        <a href="#" onclick="view('K150012204210005');">
                                                            <p class="job_title">시공 모집(금속물설치)</p>
                                                            <ul>
                                                                <li>
                                                                    <span class="type1 type1_4">월급</span>
                                                                    <span class="type2">주6일근무</span>
                                                                    <span class="type3">270만원 ~ 350만원</span>
                                                                </li>
                                                                <li class="bar"></li>
                                                                <li class="area">인천 남동구</li>
                                                            </ul>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td class="list_hidden"> 고졸<br>관계없음</td>
                                                <td class="list_hidden">22-04-21</td>
                                                <td class="list_hidden">

                                                    22-05-10</td>
                                            </tr>


                                        </tbody>
                                    </table>
                                </div>
                            </div>





                            <div class="pagination">


                                <a href="#" class="prev"><img src="https://jobs.kmu.ac.kr/job/images/icon_prev.png"
                                        alt=""></a>


                                <a href="#" class="btn cur" onclick="javascript:pageing('1')">1</a>

                                <a href="#" class="btn" onclick="javascript:pageing('2')">2</a>

                                <a href="#" class="btn" onclick="javascript:pageing('3')">3</a>

                                <a href="#" class="btn" onclick="javascript:pageing('4')">4</a>

                                <a href="#" class="btn" onclick="javascript:pageing('5')">5</a>


                                <a href="#" class="next" onclick="javascript:block('2')"><img
                                        src="https://jobs.kmu.ac.kr/job/images/icon_next.png" alt=""></a>


                            </div>





                            <script type="text/javascript">
                            function pageing(page) {
                                document.readFrm.nowPage.value = page;
                                document.readFrm.action = 'career.do?method=worknet';
                                //document.readFrm.action='joblist.jsp';
                                document.readFrm.submit();
                            }

                            function view(wantedAuthNo) {
                                document.readFrm.wantedAuthNo.value = wantedAuthNo;
                                document.readFrm.action = 'career.do?method=worknetView';

                                document.readFrm.submit();
                            }

                            function block(value) {
                                document.readFrm.nowPage.value = 5 * (value - 1) + 1;
                                document.readFrm.submit();
                            }
                            </script>


                            <script>
                            $(document).ready(function() {
                                        $('.onlyNumber').keyup(function(event) {

                                            var inputVal = $(this).val();

                                            var regId = /^[0-9]{0,200}$/;
                                            if (!regId.test(inputVal)) {
                                                alert('Enter only alphanumeric number.'); //영문과 숫자만 입력하세요.
                                                $(this).val(inputVal.replace(/[^0-9]/gi, ''));
                                                $(this).focus();
                                                return false;
                                            }
                                            return true;

                                        });
                            </script>
                            <br><br><br>&nbsp;
                            <!-- 내용 끝 -->


                            <form name="frm" id="frm" method="post">
                                <input type="hidden" name="SCH_PAGE" id="SCH_PAGE" value="1">
                                <input type="hidden" name="SCH_BBS_TYPE" id="SCH_BBS_TYPE" value="">
                                <input type="hidden" name="SCH_JOB_TYPE" id="SCH_JOB_TYPE" value="">
                                <input type="hidden" name="BBS_NO" id="BBS_NO" value="">
                                <input type="hidden" name="DATA_FLAG" id="DATA_FLAG" value="">
                                <input type="hidden" name="NOTICE_YN" id="NOTICE_YN" value="">
                                <input type="hidden" name="CATEGORY" id="CATEGORY" value="centerinfo">
                            </form>


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