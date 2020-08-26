<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>raemian</title>
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
    <script src="/PF/raemian/index.js"></script>
    <link rel="stylesheet" href="/PF/raemian/index.css">
</head>

<body>
    <div class="top-bar con-min-width">
        <div class="con flex height-100p">
            <a class="btn-toggle-menu-popup flex flex-ai-c">
                <img src="https://raemian.co.kr/assets/front/inc/images/layout/btn_h_sitemap.png" alt="">
            </a>
            <div class="flex-grow-1"></div>
            <nav class="menu-box-1">
                <ul class="flex height-100p relative">
                    <div class="item-bottom-line"></div>
                    <li class="flex-order-2 li-logo">
                        <a class="logo flex flex-ai-c height-100p" href="#"><img
                                src="https://raemian.co.kr/assets/front/inc/images/layout/logo_h.png" alt=""></a>
                        <div class="sub-menu-bg-logo">
                            <img src="https://raemian.co.kr/assets/front/inc/images/layout/bg_h_pe.png" alt="">
                        </div>
                    </li>
                    <li class="flex-order-1">
                        <a class="flex flex-ai-c height-100p">단지정보</a>
                        <ul>
                            <li><a href="#">분양단지</a></li>
                            <li><a href="#">공사단지</a></li>
                            <li><a href="#">입주단지</a></li>
                        </ul>
                    </li>
                    <li class="flex-order-1">
                        <a class="flex flex-ai-c height-100p">갤러리</a>
                        <ul>
                            <li><a href="#">갤러리소개</a></li>
                            <li><a href="#">갤러리소식</a></li>
                            <li><a href="#">래미안홈랩</a></li>
                            <li><a href="#">래미안아카데미</a></li>
                            <li><a href="#">래미안클라스</a></li>
                            <li><a href="#">방문후기</a></li>
                        </ul>
                    </li>
                    <li class="flex-order-1">
                        <a class="flex flex-ai-c height-100p">래미안타임즈</a>
                        <ul>
                            <li><a href="#">래미안투어</a></li>
                            <li><a href="#">래미안라이프</a></li>
                            <li><a href="#">부동산꿀팁</a></li>
                            <li><a href="#">래미안뉴스</a></li>
                            <li><a href="#">이벤트</a></li>
                        </ul>
                    </li>
                    <li class="flex-order-1">
                        <a class="flex flex-ai-c height-100p">브랜드</a>
                        <ul>
                            <li><a href="#">브랜드소개</a></li>
                            <li><a href="#">BI</a></li>
                            <li><a href="#">브랜드히스토리</a></li>
                            <li><a href="#">래미안상품</a></li>
                            <li><a href="#">래미안광고</a></li>
                        </ul>
                    </li>
                    <li class="flex-order-3">
                        <a class="flex flex-ai-c height-100p">분양안내</a>
                        <ul>
                            <li><a href="#">분양캘린더</a></li>
                            <li><a href="#">청약가이드</a></li>
                            <li><a href="#">견본주택</a></li>
                            <li><a href="#">전화상담예약</a></li>
                            <li><a href="#">부동산세금</a></li>
                            <li><a href="#">래미안시세</a></li>
                        </ul>
                    </li>
                    <li class="flex-order-3">
                        <a class="flex flex-ai-c height-100p">계약·입주서비스</a>
                        <ul>
                            <li><a href="#">분양대금조회</a></li>
                            <li><a href="#">입주안내</a></li>
                            <li><a href="#">초청행사방문예약</a></li>
                            <li><a href="#">입주예약</a></li>
                            <li><a href="#">A/S</a></li>
                            <li><a href="#">해스티아서비스</a></li>
                            <li><a href="#">래미안 생활가이드</a></li>
                            <li><a href="#">래미안웰스토리몰</a></li>
                        </ul>
                    </li>
                    <li class="flex-order-3">
                        <a class="flex flex-ai-c height-100p">고객센터</a>
                        <ul>
                            <li><a href="#">고객센터안내</a></li>
                            <li><a href="#">자주하는질문</a></li>
                            <li><a href="#">1:1문의</a></li>
                            <li><a href="#">A/S신청</a></li>
                            <li><a href="#">사업소안내</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="sub-menu-bg con-min-width"></div>
            </nav>
            <div class="flex-grow-1"></div>
            <a href="#" class="btn-go-calendar-page flex flex-ai-c margin-left-40">
                <img src="https://raemian.co.kr/assets/front/inc/images/layout/btn_h_calendar.png" alt="">
            </a>
            <a href="#" class="btn-go-user-page flex flex-ai-c margin-left-20">
                <img src="https://raemian.co.kr/assets/front/inc/images/layout/btn_h_mymenu.png" alt="">
            </a>
        </div>
    </div>



    <div class="main-banner-box con-min-width relative">
            <div class="video-box">
                <video autoplay="" muted="" playsinline="" class="main-video__video" src="https://play.raemian.co.kr/Raemian_brand2020A.mp4"></video>   
            </div>

    </div>

</body>

</html>