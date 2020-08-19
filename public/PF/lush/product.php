<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lush_product</title>
    <!-- 유용한 링크 -->
    <!-- cdnsj : https://cdnjs.com/ -->
    <!-- 폰트어썸 아이콘 리스트 : https://fontawesome.com/icons?d=gallery&m=free -->

    <!-- 구글 폰트 불러오기 -->
    <!-- rotobo(400/700/900), notosanskr(400/600/900) -->
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@400;700;900&family=Roboto:wght@400;700;900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">

    <!-- 폰트어썸 불러오기 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">

    <!-- 제이쿼리 불러오기 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- 스와이퍼 불러오기 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/js/swiper.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.min.css">
    <script src="/PF/lush/index.js"></script>
    <link rel="stylesheet" href="/PF/lush/common.css">
    <link rel="stylesheet" href="/PF/lush/product.css">
    <link rel="stylesheet" href="/PF/lush/font.css">
</head>
<body>
<section class="top-menu-box-2">
        <div class="top-menu-bar">
            <div class="background"></div>
            <nav class="con flex height-100p">
                <div class="flex flex-jc-s flex-ai-c"><img src="https://kima-rin.github.io/img1/pf/lush/lush_logo-wh.svg" width="180" alt=""></div>                    
                <ul class="flex flex flex-jc-c flex-ai-c">
                    <li><a href="#" class="block">New & Discover</a>
                        <ul>
                            <li><a href="#">보디스프레이</a></li>
                            <li><a href="#">버블 바 큐레이션</a></li>
                            <li><a href="#">별 다섯개 후기</a></li>
                            <li><a href="#">스프링 컬렉션</a></li>
                            <li><a href="#">마더스&파더스</a></li>
                            <li><a href="#">주간베스트</a></li>
                            <li><a href="#">별 다섯개 후기</a></li>
                            <li><a href="#">온라인 전용</a></li>
                            <li><a href="#">국내제조</a></li>
                            <li><a href="#">네이키드</a></li>
                            <li><a href="#">우리의 장미가 특별한 이유</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="block">Bath & Shower</a>
                        <ul>
                            <li><a href="#">솜</a></li>
                            <li><a href="#">샤워젤&</a></li>
                            <li><a href="#">보디컨디셔너</a></li>
                            <li><a href="#">샤워오일</a></li>
                            <li><a href="#">샤워밤</a></li>
                            <li><a href="#">주간베스트</a></li>
                            <li><a href="#">스크럽&버터</a></li>
                            <li><a href="#">펀</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="block">body</a>
                        <ul>
                            <li><a href="#">클렌져</a></li>
                            <li><a href="#">로션</a></li>
                            <li><a href="#">핸드 앤 풋</a></li>
                            <li><a href="#">마사지바</a></li>
                            <li><a href="#">더스팅파우더</a></li>
                            <li><a href="#">쉐이빙크림</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="block">face</a>
                        <ul>
                            <li><a href="#">클렌져</a></li>
                            <li><a href="#">페이스마스크</a></li>
                            <li><a href="#">토너</a></li>
                            <li><a href="#">모이스춰라이저</a></li>
                            <li><a href="#">프라이머</a></li>
                            <li><a href="#">립</a></li>
                            <li><a href="#">쉐이빙크림</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="block">hair</a>
                        <ul>
                            <li><a href="#">샴푸 바</a></li>
                            <li><a href="#">샴푸</a></li>
                            <li><a href="#">드라이 샴푸</a></li>
                            <li><a href="#">컨디셔너</a></li>
                            <li><a href="#">트리트먼트</a></li>
                            <li><a href="#">스타일링</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="block">gifts</a>
                        <ul>
                            <li><a href="#">기프트 베스트</a></li>
                            <li><a href="#">1-3만원대</a></li>
                            <li><a href="#">4-5만원대</a></li>
                            <li><a href="#">7만원이상</a></li>
                            <li><a href="#">낫랩</a></li>
                            <li><a href="#">스웨그</a></li>
                            <li><a href="#">악세사리</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="block">makeup</a>
                        <ul>
                            <li><a href="#">페이스파우더</a></li>
                            <li><a href="#">아이메이크업</a></li>
                            <li><a href="#">파운데이션</a></li>
                            <li><a href="#">스킨틴트</a></li>
                            <li><a href="#">비건브러쉬</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="block">fragrances</a>
                        <ul>
                            <li><a href="#">보디스프레이</a></li>
                            <li><a href="#">퍼퓸라이브러리</a></li>
                            <li><a href="#">코어레인지</a></li>
                            <li><a href="#">7만원이상</a></li>
                            <li><a href="#">솔리드 퍼퓸</a></li>
                            <li><a href="#">워시카드</a></li>
                            <li><a href="#">퍼퓸낫랩</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </section>
</body>
</html>