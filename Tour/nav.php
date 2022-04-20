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
            <img src="../img/tour/sub_visual_bg.jpg" alt="">
        </section>
        <div id="sub_main">
            <aside id="left_menu">
                <?php include ("left_menu.html"); ?>
            </aside>
            <section id="sub_contents" style="width: 71%;">
                <h3>관람안내<span>HOME > 관람안내 ><b> 관람안내</b></span></h3>
                <div id="contents" class="mt-3">
                    <h4>오시는길</h4>
                    <ul class="con01">
                        <li class="text-blue"><strong>주소</strong> : 제주특별자치도 제주시 한림읍 광산로 942</li>
                        <li><strong>제주시, 공항에서 오시는 길</strong> : 평화로 금악, 봉성 출구 금악 방면</li>
                        <li><strong>서귀포, 중문에서 오시는 길</strong> : 평화로 금악, 휴게소 출구 금악 방면</li>
                        <li><strong>네비번호</strong> : 7735800 / 7735600<br>
                            <strong>상호검색</strong> : 그리스신화박물관, 트릭아이미술관
                        </li>
                    </ul>
                </div>
                <!-- * 카카오맵 - 지도퍼가기 -->
                <!-- 1. 지도 노드 -->
                <div id="daumRoughmapContainer1650441870650" class="root_daum_roughmap root_daum_roughmap_landing"
                    style="width: 100%;">
                </div>
                <script charset="UTF-8" class="daum_roughmap_loader_script"
                    src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>
                <script charset="UTF-8">
                new daum.roughmap.Lander({
                    "timestamp": "1650441870650",
                    "key": "29why",
                    "mapHeight": "360"
                }).render();
                </script>
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