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
            <video autoplay="" muted="" playsinline="" class="main-video__video"
                src="https://play.raemian.co.kr/Raemian_brand2020A.mp4"></video>
        </div>

    </div>
    <div class="sns-box flex con">
        <div class="flex flex-ai-c">
            <p>래미안의 SNS를 <br> 만나보세요</p>
            <span></span>
        </div>
        <div>
            <div class="sns-bar flex flex-jc-c flex-ai-c">
                <div class="img-box"><img src="https://kima-rin.github.io/img1/pf/raemian/ico_ms_instagram.png" alt="">
                </div>
                <div class="img-box"><img src="https://kima-rin.github.io/img1/pf/raemian/ico_ms_youtube.png" alt="">
                </div>
                <div class="img-box"><img src="https://kima-rin.github.io/img1/pf/raemian/ico_ms_line.png" alt=""></div>
            </div>
        </div>
    </div>
    <div class="my-slider-1 banner-box con">
        <div class="swiper-container">
            <div class="swiper-wrapper flex">
                <div class="swiper-slide relative">
                    <div class="img-box relative">
                        <img src="https://kima-rin.github.io/img1/pf/raemian/estate_23304055.jpg" alt="">
                        <div class="text-box-small">분양 <br> 예정</div>
                    </div>
                    <div class="text-box-big">
                        <div class="cover-1">
                            <span class="date rubic-font">2020.09</span><span class="condition">분양예정</span>
                            <p class="name">레이카운티</p>
                            <p class="address">부산광역시 연제구 거제동 802번지 일원</p>
                            <p class="guide-1"> <strong>세대</strong> &nbsp;&nbsp; 총 4,470 세대 (일반분양 2,759 세대)</p>
                            <p class="guide-2"> <strong>문의</strong> &nbsp;&nbsp; 051-557-4470</p>
                            <div class="detail">
                                <p>상세보기</p>
                            </div>
                        </div>
                        <div class="cover-2"></div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img-box">
                        <img src="https://kima-rin.github.io/img1/pf/raemian/estate_36106849.jpg" alt="">
                        <div class="text-box-small">분양 <br> 예정</div>
                    </div>
                    <div class="text-box-big">
                        <div class="cover-1">
                            <span class="date rubic-font">2020.10</span><span class="condition">분양예정</span>
                            <p class="name">레미안원베일리</p>
                            <p class="address">서울특별시 서초구 반포2동 신반포로19길 10</p>
                            <p class="guide-1"> <strong>세대</strong> &nbsp;&nbsp; 총 2,990 세대 (일반분양 224 세대)</p>
                            <p class="guide-2"> <strong>문의</strong> &nbsp;&nbsp; 1588-3588</p>
                            <div class="detail">
                                <p>상세보기</p>
                            </div>
                        </div>
                        <div class="cover-2"></div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img-box">
                        <img src="https://kima-rin.github.io/img1/pf/raemian/estate_26900952.jpg" alt="">
                        <div class="text-box-small">입주 <br> (준비)중</div>
                    </div>
                    <div class="text-box-big">
                        <div class="cover-1">
                            <span class="date rubic-font">2020.09</span><span class="condition">입주예정</span>
                            <p class="name">래미안 리더스원</p>
                            <p class="address">서울특별시 서초구 서운로 62</p>
                            <p class="guide-1"> <strong>세대</strong> &nbsp;&nbsp; 총 1,317 세대 (일반분양 232 세대)</p>
                            <p class="guide-2"> <strong>문의</strong> &nbsp;&nbsp; 1588-3588</p>
                            <div class="detail">
                                <p>상세보기</p>
                            </div>
                        </div>
                        <div class="cover-2"></div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img-box">
                        <img src="https://kima-rin.github.io/img1/pf/raemian/estate_47903195.jpg" alt="">
                        <div class="text-box-small">분양 <br> 예정</div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img-box">
                        <img src="https://kima-rin.github.io/img1/pf/raemian/estate_05527071.jpg" alt="">
                        <div class="text-box-small-2">공사중</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="img-box con">
        <img src="https://kima-rin.github.io/img1/pf/raemian/mainEvent_05432744.png" alt="">
    </div>

    <div class="banner-bar-1 flex con">
        <div class="banner-box-1">
            <div class="img-box">
                <img src="https://kima-rin.github.io/img1/pf/raemian/photo_mgl_gallery.png" alt="">
            </div>
            <a href="#">
                <p>래미안 갤러리</p>
                <h1>래미안이 꿈꾸는 주거문화를 <br> 만나는 곳</h1>
            </a>
        </div>
        <div class="banner-box-2 img-box">
            <div>
                <img src="https://kima-rin.github.io/img1/pf/raemian/photo_mgl_academy.png" alt="">
            </div>
            <a href="#">
                <p>래미안 아카데미</p>
                <h1>래미안 고객만을 위한 특권</h1>
            </a>
        </div>
    </div>

    <nav class="icon-box con">
        <ul class="flex flex-jc-c">
            <li><a href="#" class="flex flex-jc-c"><img
                        src="https://kima-rin.github.io/img1/pf/raemian/ico_mum_payment.png" alt="">
                    <div class="flex flex-ai-c">분양대금조회</div>
                </a></li>
            <li><a href="#" class="flex flex-jc-c"><img
                        src="https://kima-rin.github.io/img1/pf/raemian/ico_mum_contact.png" alt="">
                    <div class="flex flex-ai-c">1:1 문의</div>
                </a></li>
            <li><a href="#" class="flex flex-jc-c"><img
                        src="https://raemian.co.kr/assets/front/inc/images/main/ico_mum_as.png" alt="">
                    <div class="flex flex-ai-c">A/S 신청</div>
                </a></li>
            <li><a href="#" class="flex flex-jc-c"><img
                        src="https://kima-rin.github.io/img1/pf/raemian/ico_mum_counsel.png" alt="">
                    <div class="flex flex-ai-c">전화상담예약</div>
                </a></li>
            <li><a href="#" class="flex flex-jc-c"><img
                        src="https://kima-rin.github.io/img1/pf/raemian/ico_mum_market.png" alt="">
                    <div class="flex flex-ai-c">래미안 웰스토리몰</div>
                </a></li>
        </ul>
    </nav>
    <div class="banner-bar-2 border-red" style="background-image:url(https://kima-rin.github.io/img1/pf/raemian/bg_times.jpg)">
        <div>

        </div>

    </div>


</body>

</html>