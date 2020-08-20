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
                <div class="flex flex-jc-s flex-ai-c"><img
                        src="https://kima-rin.github.io/img1/pf/lush/lush_logo-wh.svg" width="180" alt=""></div>
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

    <section class="main-img-box con-min-width">
        <div class="main-img img-background-cover"
            style="background-image:url(https://kima-rin.github.io/img1/pf/lush_product/main_image_01.jpg)">
            <div class="font-lushHw">Bestsellers</div>
            <p>From heroes to must-haves - all hail Lush's best-selling <br> products</p>

        </div>
        <div class="submenu-box con">
            <span class="font-lushHw">Bestsellers</span>
            <span>베스트&신제품</span>
        </div>
        <div class="submenu-bar flex con">
            <ul class="flex flex-1-0-0 flex-grow-1">
                <li><a href="#">전체(235)</a></li>
                <li><a href="#">착한캠핑 준비(71)</a></li>
                <li><a href="#">주간베스트(31)</a></li>
                <li><a href="#">별 다섯개 후기(17)</a></li>
                <li><a href="#">온라인 전용(57)</a></li>
                <li><a href="#">국내제조(18)</a></li>
                <li><a href="#">네이키드(174)</a></li>
                <li><a href="#">우리의 장미가 특별한 이유(11)</a></li>
            </ul>
            <div class="flex flex-jc-end border-red">
                <span>추천수</span>
                <span>▷</span>
            </div>
        </div>


    </section>
    <section class="product con-min-width">
        <div class="prod-box-1 con">
            <div class="flex">
                <div class="prod-item flex-1-0-0">
                    <img src="https://kima-rin.github.io/img1/pf/lush_product/prod_01.jpg" alt="">
                    <div class="prod-title font-lushHw">ocean salt</div>
                    <div class="under-line">Face And Body Scrub</div>
                    <div class="under-line">Exfoliating and refreshing</div>
                    <div class="price"><strong>€11.00/ Original / </strong><small>120g</small>
                        <img src="https://kima-rin.github.io/img1/pf/lush/add-to-basket.svg" alt="">
                    </div>
                </div>
                <div class="prod-item flex-1-0-0">
                    <img src="https://kima-rin.github.io/img1/pf/lush_product/prod_02.jpg" alt="">
                    <div class="prod-title font-lushHw">ocean salt</div>
                    <div class="under-line">Face And Body Scrub</div>
                    <div class="under-line">Exfoliating and refreshing</div>
                    <div class="price"><strong>€11.00/ Original / </strong><small>120g</small>
                        <img src="https://kima-rin.github.io/img1/pf/lush/add-to-basket.svg" alt="">
                    </div>
                </div>
                <div class="prod-item flex-1-0-0">
                    <img src="https://kima-rin.github.io/img1/pf/lush_product/prod_03.jpg" alt="">
                    <div class="prod-title font-lushHw">ocean salt</div>
                    <div class="under-line">Face And Body Scrub</div>
                    <div class="under-line">Exfoliating and refreshing</div>
                    <div class="price"><strong>€11.00/ Original / </strong><small>120g</small>
                        <img src="https://kima-rin.github.io/img1/pf/lush/add-to-basket.svg" alt="">
                    </div>
                </div>
                <div class="prod-item flex-1-0-0">
                    <img src="https://kima-rin.github.io/img1/pf/lush_product/prod_04.jpg" alt="">
                    <div class="prod-title font-lushHw">ocean salt</div>
                    <div class="under-line">Face And Body Scrub</div>
                    <div class="under-line">Exfoliating and refreshing</div>
                    <div class="price"><strong>€11.00/ Original / </strong><small>120g</small>
                        <img src="https://kima-rin.github.io/img1/pf/lush/add-to-basket.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="prod-box-2 con-min-width">
        <div class="flex con">
            <div class="prod-soap-1 relative">
                <div class="new-soap">
                    <img src="https://kima-rin.github.io/img1/pf/lush_product/prod_05.jpg" alt="">
                    <div class="cc"><a href="#">new style</a></div>
                </div>
                <div class="soap-title font-lushHw">Honey i washed the kids</div>
                <div class="soap-under-line">soap</div>
                <div class="soap-under-line">Gentle, sweet and moisturising</div>
                <div class="price"><strong>€11.00/ Original / </strong><small>120g</small>
                    <img src="https://kima-rin.github.io/img1/pf/lush/add-to-basket.svg" alt="">
                </div>
                <div class="comment">
                    <div class="flex">
                        <div class="icon-back">
                            <img src="https://kima-rin.github.io/img1/pf/lush/account_01.svg" width="20" alt="">
                        </div>
                        <div class="name">boydelyn</div>
                    </div>
                    <p>I have very sensitive skin and this soap works wonders, without drying my skin out <br> or
                        irritating it. The lather it creates is very velvety and the honey smell is subtle and <br> not
                        too sweet.</p>
                </div>

            </div>
            <div class="prod-soap-2">
                <div class="grop-1 flex">
                    <div class="black-lives"><a class="font-lushHw" href="#">black lives <br> matter</a></div>
                    <div class="delivery img-background-cover"
                        style="background-image:url(https://kima-rin.github.io/img1/pf/lush/new_pic_2.jpg)"><a
                            class="font-lushHw" href="#">delivery <br> information</a></div>
                </div>
                <div class="grop-2 flex">
                    <div class="shop-open img-background-cover"
                        style="background-image:url(https://kima-rin.github.io/img1/pf/lush/new_pic_3.jpg)"><a
                            class="font-lushHw" href="#">shop openings - key information</a></div>
                    <div class="prod-seanik">
                        <div class="ocean-img text-align-center"><img
                                src="https://kima-rin.github.io/img1/pf/lush/soap_b_02.jpg" alt=""></div>
                        <div class="prod-title font-lushHw">Seanik</div>
                        <div class="under-line">Shampoo Bar</div>
                        <div class="under-line">Buoyant and beautiful hair</div>
                        <div class="price"><strong>€8.00/ </strong><small>55g</small>
                            <img src="https://kima-rin.github.io/img1/pf/lush/add-to-basket.svg" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="con-min-width">
        <div class="prod-box-3 con">
            <div class="flex">
                <div class="prod-item flex-1-0-0">
                    <img src="https://kima-rin.github.io/img1/pf/lush_product/prod_10.jpg" alt="">
                    <div class="prod-title font-lushHw">ocean salt</div>
                    <div class="under-line">Face And Body Scrub</div>
                    <div class="under-line">Exfoliating and refreshing</div>
                    <div class="price"><strong>€11.00/ Original / </strong><small>120g</small>
                        <img src="https://kima-rin.github.io/img1/pf/lush/add-to-basket.svg" alt="">
                    </div>
                </div>
                <div class="prod-item flex-1-0-0">
                    <img src="https://kima-rin.github.io/img1/pf/lush_product/prod_11.jpg" alt="">
                    <div class="prod-title font-lushHw">ocean salt</div>
                    <div class="under-line">Face And Body Scrub</div>
                    <div class="under-line">Exfoliating and refreshing</div>
                    <div class="price"><strong>€11.00/ Original / </strong><small>120g</small>
                        <img src="https://kima-rin.github.io/img1/pf/lush/add-to-basket.svg" alt="">
                    </div>
                </div>
                <div class="prod-item flex-1-0-0">
                    <img src="https://kima-rin.github.io/img1/pf/lush_product/prod_12.jpg" alt="">
                    <div class="prod-title font-lushHw">ocean salt</div>
                    <div class="under-line">Face And Body Scrub</div>
                    <div class="under-line">Exfoliating and refreshing</div>
                    <div class="price"><strong>€11.00/ Original / </strong><small>120g</small>
                        <img src="https://kima-rin.github.io/img1/pf/lush/add-to-basket.svg" alt="">
                    </div>
                </div>
                <div class="prod-item flex-1-0-0">
                    <img src="https://kima-rin.github.io/img1/pf/lush_product/prod_13.jpg" alt="">
                    <div class="prod-title font-lushHw">ocean salt</div>
                    <div class="under-line">Face And Body Scrub</div>
                    <div class="under-line">Exfoliating and refreshing</div>
                    <div class="price"><strong>€11.00/ Original / </strong><small>120g</small>
                        <img src="https://kima-rin.github.io/img1/pf/lush/add-to-basket.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="con-min-width">
        <div class="product-box-4 con">
            <div class="font-lushHw">products...</div>
            <ul>
                <li style="background-image:url(https://kima-rin.github.io/img1/pf/lush_product/prod_img_01.jpg)"><a
                        href="#"></a></li>
                <li style="background-image:url(https://kima-rin.github.io/img1/pf/lush_product/prod_img_02.jpg)"><a
                        href="#"></a></li>
                <li style="background-image:url(https://kima-rin.github.io/img1/pf/lush_product/prod_img_03.jpg)"><a
                        href="#"></a></li>
                <li><a href="#"></a></li>
                <li style="background-image:url(https://kima-rin.github.io/img1/pf/lush_product/prod_img_04.jpg)"><a
                        href="#"></a></li>
                <li style="background-image:url(https://kima-rin.github.io/img1/pf/lush_product/prod_img_05.jpg)"><a
                        href="#"></a></li>
                <li style="background-image:url(https://kima-rin.github.io/img1/pf/lush_product/prod_img_06.jpg)"><a
                        href="#"></a></li>
                <li style="background-image:url(https://kima-rin.github.io/img1/pf/lush_product/prod_img_07.jpg)"><a
                        href="#"></a></li>
                <li style="background-image:url(https://kima-rin.github.io/img1/pf/lush_product/prod_img_08.jpg)"><a
                        href="#"></a></li>
                <li style="background-image:url(https://kima-rin.github.io/img1/pf/lush_product/prod_img_09.jpg)"><a
                        href="#"></a></li>
                <li style="background-image:url(https://kima-rin.github.io/img1/pf/lush_product/prod_img_10.jpg)"><a
                        href="#"></a></li>
                <li><a href="#"></a></li>
            </ul>
        </div>

    </section>
    <section class="icon-etc-box">
        <div class="icon-box con"><img src="https://kima-rin.github.io/img1/pf/lush/footer-icon-sprite.svg" alt="">
        </div>
    </section>
    <section class="footer con-min-width">
        <div class="con flex">

            <div>
                <img src="https://kima-rin.github.io/img1/pf/lush/lush_logo_2.png" alt="">
                <h3>고객센터</h3>
                <p class="tell-box">1644-1234 <br> wedmaster@lush.com <br> 상담전화 13:00~16:00(평일) <br>상담톡 10:00~16:00(평일)
                </p>
            </div>
            <div>
                <ul class="flex">
                    <li>스카우트</li>
                    <li>회사소개</li>
                    <li>개인정보처리</li>
                    <li>영상정보 관리 지침</li>
                    <li>이용약관</li>
                    <li>고객센터</li>
                </ul>
                <p class="news">가장 빠르게 LUSH 소식을 만나는 법! <br> 지금 뉴스레터를 구독하세요. <br> 언제든지 구독 해지할 수 있습니다.</p>
                <div class="flex">
                    <div class="email-box">
                        <p>이메일 주소를 입력해 주세요.</p>
                    </div>
                    <div class="channel">
                        <p>구독</p>
                    </div>
                </div>
                <p class="add">서울특별시 서초구 서운로 123(서운로 서초타워)10층 사이트 운영자:주식회사 러쉬코리아 대표이사 :홍길동</p>
                <p class="etc">사업자 등록번호 :123-45-67890 사업자정보확인 통신판매업 신고번호 : 1231-서울서초-5678 개인정보보호책임자:홍길순</p>
                <p class="copyright">CopyrightⓒLUSHKOREA co.,ltd.All rights reserved.</p>
            </div>

        </div>

    </section>
</body>

</html>