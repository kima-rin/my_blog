<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lush</title>
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
    <link rel="stylesheet" href="/PF/lush/index.css">
    <link rel="stylesheet" href="/PF/lush/font.css">
</head>

<body>
    <div class="wrapper con-min-width relative">
        <div class="background"></div>
        <div class="top-menu-box">
            <div class="menu-box-base flex flex-jc-c flex-ai-c">
                <div class="logo img-box flex flex-jc-c">
                    <a href="#"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 108.75 20.75">
                            <path
                                d="M1.636 1.467h5.442v13.32h8.494v4.353H1.636V1.467zm27.234 0h5.43v10.53c0 1.043-.16 2.03-.486 2.957a6.393 6.393 0 0 1-1.526 2.434c-.693.694-1.42 1.182-2.18 1.462-1.058.394-2.328.59-3.81.59-.856 0-1.79-.06-2.804-.18-1.013-.12-1.86-.36-2.54-.716-.682-.357-1.304-.866-1.87-1.524-.564-.66-.95-1.337-1.158-2.036-.336-1.124-.505-2.12-.505-2.988V1.466h5.43v10.78c0 .964.27 1.717.8 2.26.54.54 1.28.812 2.22.812.94 0 1.67-.267 2.21-.8.534-.534.8-1.29.8-2.27V1.468zm26.827 0h5.442V7.65h5.94V1.468h5.463V19.14H67.08v-7.15h-5.94v7.15h-5.443V1.467zm-18.742 11.5h5.178c.112.845.34 1.488.685 1.93.56.715 1.362 1.073 2.403 1.073.78 0 1.38-.183 1.8-.55.42-.365.63-.788.63-1.27 0-.46-.2-.87-.6-1.23-.4-.363-1.33-.704-2.79-1.026-2.38-.538-4.09-1.254-5.1-2.146-1.024-.892-1.54-2.03-1.54-3.412 0-.908.26-1.766.79-2.574.524-.808 1.312-1.443 2.366-1.905s2.496-.693 4.33-.693c2.25 0 3.967.42 5.148 1.26 1.18.84 1.94 2.477 2.167 4.31h-5.19c-.136-.795-.423-1.374-.86-1.736-.435-.362-1.04-.543-1.807-.543-.635 0-1.11.134-1.43.404-.32.26-.48.59-.48.98 0 .28.13.53.395.76.256.23.865.45 1.826.65 2.38.51 4.085 1.03 5.114 1.56 1.03.52 1.778 1.18 2.246 1.96.47.78.703 1.65.703 2.61A5.62 5.62 0 0 1 52 16.52c-.626.956-1.5 1.682-2.62 2.176-1.12.494-2.535.74-4.24.74-2.996 0-5.07-.577-6.224-1.735-1.153-1.156-1.806-2.95-1.96-4.736zm41.325.503V9.78h.742v1.454h1.456V9.778h.744v3.693h-.744v-1.61h-1.456v1.62h-.743zm7.028 0H84.5l-.322-.838h-1.47l-.304.84h-.788l1.433-3.694h.78l1.47 3.692zm-1.368-1.46l-.507-1.37-.497 1.37h1.004zm1.77 1.46V9.78h.722l1.506 2.467v-2.47h.69v3.694h-.745l-1.483-2.4v2.41h-.69zm3.703-3.692h1.357c.307 0 .54.024.7.07.217.065.402.178.556.34.154.164.27.363.352.6.08.235.12.526.12.872 0 .304-.038.566-.113.786-.092.27-.223.487-.394.653a1.315 1.315 0 0 1-.52.29 2.24 2.24 0 0 1-.65.08h-1.4V9.78zm.742.625v2.446h.555c.207 0 .357-.02.45-.04a.68.68 0 0 0 .3-.16.785.785 0 0 0 .193-.357c.05-.166.076-.39.076-.677s-.03-.504-.08-.658a.845.845 0 0 0-.21-.36.717.717 0 0 0-.35-.173 3.58 3.58 0 0 0-.61-.033h-.334zm2.965 3.067V9.78h1.11l.668 2.52.66-2.52h1.115v3.693h-.69v-2.906l-.73 2.907h-.717l-.727-2.906v2.907h-.69zm7.61 0h-.81l-.32-.838h-1.47l-.305.84h-.788l1.433-3.694h.786l1.474 3.693zm-1.37-1.46l-.505-1.37-.498 1.37h1.004zm1.762-2.232h1.358c.307 0 .54.024.7.07.216.065.4.178.555.34.154.164.27.363.352.6.08.235.12.526.12.872 0 .304-.038.566-.113.786-.092.27-.224.487-.394.653a1.305 1.305 0 0 1-.522.29 2.235 2.235 0 0 1-.657.08h-1.39V9.78zm.743.625v2.446h.555c.207 0 .357-.02.45-.04a.69.69 0 0 0 .3-.16c.08-.073.143-.192.194-.357.05-.166.075-.39.075-.677s-.03-.504-.08-.658a.856.856 0 0 0-.21-.36.726.726 0 0 0-.35-.173 3.584 3.584 0 0 0-.61-.033h-.335zm2.972 3.067V9.78h2.73v.625h-1.987v.82h1.848v.62h-1.848v1.006h2.056v.62h-2.8zM80.6 17.66l.703.223c-.11.395-.288.686-.54.877-.25.19-.568.287-.954.287-.48 0-.87-.164-1.18-.49-.31-.328-.46-.775-.46-1.343 0-.6.15-1.067.46-1.4.31-.33.71-.497 1.22-.497.44 0 .79.13 1.07.39.16.155.28.376.37.665l-.72.172a.763.763 0 0 0-.27-.443.76.76 0 0 0-.49-.16.815.815 0 0 0-.65.29c-.167.19-.25.5-.25.93 0 .46.08.78.245.98a.79.79 0 0 0 .636.29.72.72 0 0 0 .497-.183c.14-.122.24-.316.3-.58zm1.178-.455c0-.368.055-.676.165-.926.08-.19.193-.35.334-.5a1.42 1.42 0 0 1 .465-.33 1.96 1.96 0 0 1 .775-.142c.53 0 .953.164 1.27.494.32.33.478.79.478 1.376 0 .585-.158 1.04-.473 1.37-.315.33-.737.493-1.265.493-.535 0-.96-.164-1.276-.49-.31-.327-.47-.78-.47-1.35zm.748-.025c0 .41.094.718.282.93a.92.92 0 0 0 .716.315c.29 0 .527-.104.712-.314.186-.2.278-.52.278-.94 0-.41-.09-.72-.27-.92a.915.915 0 0 0-.72-.302.92.92 0 0 0-.724.31c-.182.206-.274.516-.274.93zm6.646 1.806v-3.608h1.087l.65 2.46.64-2.46h1.09v3.608h-.678v-2.84l-.714 2.84h-.7l-.71-2.84v2.84h-.675zm4.194 0v-3.608h2.666v.61h-1.94v.8h1.805v.608h-1.805v.982h2.01v.608h-2.736zm4.16 0V15.99H96.46v-.612h2.855v.61H98.25v2.998h-.725zm2.236 0v-3.608h.726v3.608h-.726zm3.718-1.326l.703.223c-.107.395-.287.686-.538.877-.252.19-.57.287-.956.287-.48 0-.87-.164-1.18-.49-.31-.328-.46-.775-.46-1.343 0-.6.15-1.067.46-1.4.31-.33.71-.497 1.22-.497.44 0 .792.13 1.07.39.16.155.283.376.37.665l-.72.172a.766.766 0 0 0-.267-.443.763.763 0 0 0-.493-.16.817.817 0 0 0-.65.29c-.164.19-.246.5-.246.93 0 .46.08.78.245.98a.8.8 0 0 0 .636.29.72.72 0 0 0 .496-.183c.14-.122.24-.316.3-.58zm-17.832.085h.707c.042.238.128.413.26.525.13.11.304.167.525.167.234 0 .41-.05.53-.148a.448.448 0 0 0 .177-.35.33.33 0 0 0-.074-.22.603.603 0 0 0-.262-.16 9.413 9.413 0 0 0-.58-.16c-.39-.097-.66-.216-.82-.357a.94.94 0 0 1-.33-.726.93.93 0 0 1 .16-.515.982.982 0 0 1 .45-.366 1.8 1.8 0 0 1 .71-.126c.45 0 .79.1 1.02.296.23.197.35.494.36.826h-.73c-.03-.185-.1-.32-.2-.4-.1-.082-.253-.122-.46-.122-.21 0-.373.044-.492.13a.263.263 0 0 0-.115.225.28.28 0 0 0 .107.22c.09.075.313.156.666.24.352.083.613.17.782.26.17.09.302.21.398.365a1.1 1.1 0 0 1 .144.576 1.065 1.065 0 0 1-.658.984c-.21.086-.47.13-.786.13-.454 0-.804-.105-1.047-.316-.25-.21-.39-.59-.44-.99zm18.975 0h.707c.043.238.13.413.26.525.13.11.305.167.525.167.234 0 .41-.05.528-.148.12-.1.178-.22.178-.35a.33.33 0 0 0-.07-.22.605.605 0 0 0-.26-.16 9.523 9.523 0 0 0-.58-.16c-.39-.097-.66-.216-.82-.357a.94.94 0 0 1-.33-.726.91.91 0 0 1 .16-.515.977.977 0 0 1 .45-.366 1.8 1.8 0 0 1 .707-.126c.45 0 .79.1 1.02.296.227.197.35.494.362.826h-.73c-.03-.185-.1-.32-.2-.4-.103-.082-.256-.122-.46-.122-.21 0-.377.044-.496.13a.262.262 0 0 0-.115.225.28.28 0 0 0 .106.22c.09.075.315.156.668.24.353.083.614.17.784.26.17.09.3.21.4.365a1.1 1.1 0 0 1 .142.576 1.062 1.062 0 0 1-.66.984c-.21.086-.47.13-.78.13-.456 0-.806-.105-1.05-.316-.243-.21-.39-.59-.436-.99zM89.028 6.895c0-.077-.002-.153-.003-.23-.01-.17-.015-.327-.023-.45-.04-.58-.203-1.183-.732-1.433a1.64 1.64 0 0 0 .4-.318c.285-.318.428-.72.428-1.208 0-.385-.094-.726-.282-1.024-.19-.3-.44-.506-.753-.622-.314-.117-.817-.176-1.51-.176h-2.75v6.5h1.306V5.22h1.46l-.01.002c.71 0 .97.297 1.07.974.02.15.033.31.046.47l.002.23c.03.377.057.76.174 1.037h1.413c-.17-.242-.22-.662-.243-1.037zm-2.952-2.71h-.968v-1.65h1.02c.53 0 .85.007.956.022a.8.8 0 0 1 .492.255c.117.134.175.31.175.53a.852.852 0 0 1-.13.487.71.71 0 0 1-.36.27c-.156.05-.547.08-1.174.08zM78.28 7.93V1.436h4.437v1.1h-3.13V4.07h2.7v1.1h-2.7v2.76H78.28zm12.045 0V1.436h4.8v1.1H91.63v1.44h3.25V5.07h-3.25v1.767h3.617V7.93h-4.922zm5.7-2.237h1.27c.078.428.233.743.467.944.234.2.55.3.948.3.42 0 .738-.09.95-.267.215-.18.322-.388.322-.627a.595.595 0 0 0-.134-.392c-.092-.1-.248-.2-.472-.28a21.7 21.7 0 0 0-1.046-.28c-.7-.17-1.192-.39-1.475-.64-.397-.354-.595-.79-.595-1.304 0-.33.093-.64.28-.93a1.76 1.76 0 0 1 .808-.66c.35-.15.777-.224 1.274-.224.812 0 1.424.18 1.834.537.412.36.634.893.655 1.49H99.8c-.056-.333-.176-.573-.36-.72-.184-.146-.46-.22-.827-.22-.38 0-.677.08-.892.236a.475.475 0 0 0-.2.4c0 .154.068.285.197.395.166.14.566.283 1.2.434.638.15 1.108.306 1.413.467.303.16.54.38.714.66.173.277.26.623.26 1.033 0 .375-.103.72-.31 1.048a1.85 1.85 0 0 1-.874.727c-.377.16-.846.24-1.408.24-.82 0-1.447-.19-1.886-.57-.44-.38-.705-1.06-.79-1.786zm6.367 2.237V1.436h1.308v2.557h2.56V1.435h1.308V7.93h-1.307V5.09h-2.56v2.84h-1.3z"
                                fill="#FFF" /></svg></a>
                </div>
                <div class="etc-box flex">
                    <div><a href="#"><svg version="1.1" id="レイヤー_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 47.62 47.62"
                                style="enable-background:new 0 0 47.62 47.62;" xml:space="preserve">
                                <style type="text/css">
                                    .st0 {
                                        fill: #1D1D1B;
                                    }
                                </style>
                                <g>
                                    <path class="st0" d="M17.84,19.93c0.55-11,17.25-12,18.15-0.67c1,12.49-17.69,13.33-18.34,0.86c-0.08-1.54-2.48-1.55-2.4,0
		C15.59,26.54,20,31.39,26.5,31.75c6.85,0.39,11.3-5.09,11.89-11.4c1.4-15-22.21-15.15-22.94-0.42c-0.08,1.55,2.32,1.54,2.4,0
		L17.84,19.93z" />
                                    <path class="st0" d="M14.05,38.23c2.23-2.68,4.27-5.53,6.66-8.08c1.06-1.13-0.64-2.83-1.7-1.7c-2.39,2.56-4.42,5.4-6.66,8.08
		C11.35,37.71,13.06,39.42,14.05,38.23z" />
                                </g>
                            </svg>
                    </div>
                    <div><a href="#"><svg version="1.1" id="レイヤー_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 47.62 47.62"
                                style="enable-background:new 0 0 47.62 47.62;" xml:space="preserve">
                                <path d="M18.9,21.85c0,0-0.3-2.6-0.3-4.8c0-0.6-0.1-1.7-0.1-2.3c0.2-2.6,3-4.1,5.7-4c2.2,0.1,3.9,0.8,4.7,3c0.3,0.8,0.4,2.3,0.4,3.1
	c0,1.9,0.1,5.5,0.1,6.4c0,1.6,2.4,2,2.4,1.1c0-1.9-0.2-5.8-0.2-9.2c0-4-3-6-6.5-6.5c-4.4-0.6-8.6,1.8-8.9,6
	c-0.2,2.4,0.1,5.9,0.3,8.7c0.1,1.6,2.6,1.7,2.6,0.7C19.1,24.15,18.9,22.95,18.9,21.85z" />
                                <path d="M41,20.45c0.1-2.1-1.3-3.5-3.6-3.5c-3.6,0-10.5,0.2-14.1,0.2H10.1c-5,0-3.2,6.8-3.2,10.2c0.1,12.4,12.9,11.2,21.6,11.2
	c4.6,0,8.6-1.3,11.2-5.4C41.7,29.75,41,24.35,41,20.45c0-1.4-2.3-1.4-2.3,0c0.1,2.5-0.1,5,0,7.5c0.1,6.5-5.6,8.1-10.9,8.1h-9.6
	c-6.8,0-9.1-5.2-9.2-11.1c0-0.8-0.6-5.7,0.6-5.7h13.8c2.3,0,14.9-1,15.2,1.1c0.2,1.4,2.3,1.4,2,0L41,20.45L41,20.45z" />
                            </svg></a></div>
                    <div><a href="#"><svg version="1.1" id="レイヤー_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 47.62 47.62"
                                style="enable-background:new 0 0 47.62 47.62;" xml:space="preserve">
                                <path d="M18.02,14.99c1.2-3.3,4.3-4.9,7.7-4s4.5,4.8,3.9,7.9c-1.5,8-13.9,3.8-11.8-3.9c0.4-1.5-1.9-2.1-2.3-0.6
	c-2.7,10.2,12.1,16,16.3,5.9c1.7-4.1-0.6-9.7-4.7-11.2c-4.9-1.9-9.5,0.7-11.3,5.4C15.12,15.89,17.52,16.49,18.02,14.99L18.02,14.99z
	" />
                                <path d="M37.72,37.99c0,0-5.2,0-6.8,0.2c-4.4,0.3-21.3-0.5-21.3-0.5c-0.7,0-1.2-0.6-1.2-1.2c0-3.2-0.6-7.1,4-9.2
	c1.2-0.6,2.8-1.5,4.3-1.9c0.4-0.1,0.9,0,1.2,0.3c1.6,1.6,3.5,3,5.7,3c2.1,0,4.3-1.3,5.8-2.8c0.3-0.3,0.8-0.4,1.2-0.3
	c1.6,0.4,2.9,1,4.1,1.8c3.8,2.6,4.1,5.8,4.1,9.4C38.92,37.39,38.42,37.99,37.72,37.99z M10.52,35.49c0,0,3.8,0.2,8.7,0.4
	s17.2,0.1,17.2,0.1c-0.1-2.9-0.7-5-3-6.6c-0.8-0.5-1.7-1-2.7-1.3c-1.9,1.5-4.3,2.4-6.8,2.4c-2.7,0-5.2-0.9-7.1-2.7
	c-1.1,0.3-2.2,0.7-3.1,1.1C11.12,30.09,10.62,32.49,10.52,35.49z" />
                            </svg></a></div>
                    <span class="flex flex-ai-c">
                        <a class="frist" href="#">LOGIN</a>
                        <a href="#">JOIN</a>
                    </span>
                </div>
                <div class="top-menu-bar">
                    <nav class="con">
                        <ul class="flex">
                            <li class="flex-1-0-0 flex-jc-c"><a href="https://site2.blog.oa.gg/PF/lush/product.php" class="block">New & Discover</a>
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
                            <li class="flex-1-0-0 flex-jc-c"><a href="#" class="block">Bath & Shower</a>
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
                            <li class="flex-1-0-0 flex-jc-c"><a href="#" class="block">body</a>
                                <ul>
                                    <li><a href="#">클렌져</a></li>
                                    <li><a href="#">로션</a></li>
                                    <li><a href="#">핸드 앤 풋</a></li>
                                    <li><a href="#">마사지바</a></li>
                                    <li><a href="#">더스팅파우더</a></li>
                                    <li><a href="#">쉐이빙크림</a></li>
                                </ul>
                            </li>
                            <li class="flex-1-0-0 flex-jc-c"><a href="#" class="block">face</a>
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
                            <li class="flex-1-0-0 flex-jc-c"><a href="#" class="block">hair</a>
                                <ul>
                                    <li><a href="#">샴푸 바</a></li>
                                    <li><a href="#">샴푸</a></li>
                                    <li><a href="#">드라이 샴푸</a></li>
                                    <li><a href="#">컨디셔너</a></li>
                                    <li><a href="#">트리트먼트</a></li>
                                    <li><a href="#">스타일링</a></li>
                                </ul>
                            </li>
                            <li class="flex-1-0-0"><a href="#" class="block">gifts</a>
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
                            <li class="flex-1-0-0 flex-jc-c"><a href="#" class="block">makeup</a>
                                <ul>
                                    <li><a href="#">페이스파우더</a></li>
                                    <li><a href="#">아이메이크업</a></li>
                                    <li><a href="#">파운데이션</a></li>
                                    <li><a href="#">스킨틴트</a></li>
                                    <li><a href="#">비건브러쉬</a></li>
                                </ul>
                            </li>
                            <li class="flex-1-0-0 flex-jc-c"><a href="#" class="block">fragrances</a>
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
            </div>
        </div>
    </div>
    <section class="top-menu-box-2">
        <div class="top-menu-bar">
            <div class="background"></div>
            <nav class="con flex height-100p">
                <div class="flex flex-jc-s flex-ai-c"><img
                        src="https://kima-rin.github.io/img1/pf/lush/lush_logo-wh.svg" width="180" alt=""></div>
                <ul class="flex flex flex-jc-c flex-ai-c">
                    <li><a href="https://site2.blog.oa.gg/PF/lush/product.php" class="block">New & Discover</a>
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
    <section class="main-slider-1 con-min-width">
        <div class="swiper-container relative">
            <div class="swiper-wrapper">
                <div class="swiper-slide img-background-cover"
                    style="background-image:url(https://kima-rin.github.io/img1/pf/lush/Lush_main_01.jpg)"></div>
                <div class="swiper-slide img-background-cover"
                    style="background-image:url(https://kima-rin.github.io/img1/pf/lush/Lush_main_02.jpg)"></div>
                <div class="swiper-slide img-background-cover"
                    style="background-image:url(https://kima-rin.github.io/img1/pf/lush/Lush_main_03.jpg)"></div>
                <div class="swiper-slide img-background-cover"
                    style="background-image:url(https://kima-rin.github.io/img1/pf/lush/Lush_main_01.jpg)"></div>
                <div class="swiper-slide img-background-cover"
                    style="background-image:url(https://kima-rin.github.io/img1/pf/lush/Lush_main_02.jpg)"></div>
                <div class="swiper-slide img-background-cover"
                    style="background-image:url(https://kima-rin.github.io/img1/pf/lush/Lush_main_03.jpg)"></div>

            </div>
            <!-- Add Pagination -->
            <div class="swiper-button-next">
            <a class="circle" href="#"> <img src="https://kima-rin.github.io/img1/pf/lush/circlesvg_33.svg" alt="">
                </a>
                <a class="arrow" href="#"><img src="https://kima-rin.github.io/img1/pf/lush/circle_arrow_1.svg"
                        alt=""></a>
            </div>

        </div>
    </section>
    <section class="lush-life relative con-min-width">
        <div class="black-back">
            <div class="con flex flex-1-0-0">
                <div class="img-background-cover"
                    style="background-image:url(https://kima-rin.github.io/img1/pf/lush/ace-mask-day.jpg)">
                    <img src="https://kima-rin.github.io/img1/pf/lush/people_03.png" alt="">
                </div>
                <div class="life-text-box flex-1-0-0">
                    <div class="font-lushHw">we believe</div>
                    <h1 class="font-lushHw">a lush life....</h1>
                    <p class="font-gyeonggi-t" style="font-weight:200">신선한 과일과 채소, 최상의 에센셜 오일, 그리고 안전한 원료를 사용하여 효과적인 제품을
                        만들 수 있다는 것을 믿습니다. <br>
                        우리는 동물 실험을 하지 않는 회사와 거래하고,인체에 직접 테스트함으로써 안전한 제품을 만들 수 있다고 믿습니다. <br>
                        최소한의 포장과 보존제를 사용하여 직접 손으로 제품을 만들고, 베지테리언 원료만을 사용하며, 제품이 만들어진 시기를 표시하여 고객에게 알리는 것이 옳다고 믿습니다. <br>
                        행복한 사람이 행복한 제품을 만들 수 있다고 믿으며, 제조자의 얼굴 스티커를 제품라벨에 붙임으로써 자부심을 가질 수 있다고 믿습니다.</p>
                    <div class="sticker flex">
                        <span><img src="https://kima-rin.github.io/img1/pf/lush/people_01.svg" width="80" alt=""></span>
                        <span><img src="https://kima-rin.github.io/img1/pf/lush/people_02.svg" width="80" alt=""></span>
                    </div>
                    <div class="icon-box"><img src="https://kima-rin.github.io/img1/pf/lush/footer-icon-sprite.svg"
                            alt=""></div>
                </div>
            </div>
        </div>
    </section>
    <section class="charity-pot con-min-width">
        <div class="text-box flex flex-ai-c flex-jc-c height-100p">
            <div class="text-align-center con relative">
                <h3 class="font-lushHw">we believe a lush life</h3>
                <h1 class="font-lushHw">charity pot</h1>
                <p>우리는 환경,동물,그리고 도움이 필요한 사람들을 옹호하고 지역 및 전 세계의 단체에 후원하는 것이 우리의 책임이라고 생각합니다. <br> 총 934,976,756원이 64개의 단체에
                    후원 되었습니다. 부가세를 제외한 판매금 100%는 <br>인권,동물보호,환경보전에 지속해서 공헌하는 소규모 ,비영리 시민 단체에 후원하고 있습니다.</p>
                <ul class="login-etc">
                    <li><a href="#"><img src="https://kima-rin.github.io/img1/pf/lush/account_01.svg" width="50"
                                alt=""></a></li>
                    <li><a href="#"><img src="https://kima-rin.github.io/img1/pf/lush/add-to-basket.svg" width="40"
                                alt=""></a></li>
                    <li><a href="#"><img src="https://kima-rin.github.io/img1/pf/lush/kakao.svg" width="40" alt=""> <br>
                            상담톡</a></li>
                </ul>
            </div>
        </div>
    </section>
    <section class="prod-box-1 flex con-min-width">
        <div class="prod-img-box img-background-cover "
            style="background-image:url(https://kima-rin.github.io/img1/pf/lush/product_img_02.jpg.jpg)">
            <div class="img-text-box flex flex-jc-end flex-ai-c height-100p">
                <div>
                    <h1 class="font-lushHw">bestsellers</h1>
                    <h3 class="font-lushHw">from heroes to must-haves-all <br> hail lush best-selling <br> products</h3>
                    <div> <a href="#"> REAS MORE</a></div>
                </div>
            </div>
        </div>
        <div class="prod-img-list ">
            <div class="prod-box">
                <div class="prod-item">
                    <img src="https://kima-rin.github.io/img1/pf/lush/best_01.jpg" alt="">
                    <div class="prod-title font-lushHw">ocean salt</div>
                    <div class="under-line">Face And Body Scrub</div>
                    <div class="under-line">Exfoliating and refreshing</div>
                    <div class="price"><strong>€11.00/ Original / </strong><small>120g</small>
                        <img src="https://kima-rin.github.io/img1/pf/lush/add-to-basket.svg" alt="">
                    </div>

                </div>
                <div class="prod-item">
                    <img src="https://kima-rin.github.io/img1/pf/lush/best_02.jpg" alt="">
                    <div class="prod-title font-lushHw">ultrabland</div>
                    <div class="under-line">Facial Cleanser</div>
                    <div class="under-line">Ultra simple oil cleansing</div>
                    <div class="price"><strong>€9.00/ </strong><small>45g</small>
                        <img src="https://kima-rin.github.io/img1/pf/lush/add-to-basket.svg" alt="">
                    </div>

                </div>
                <div class="prod-item">
                    <img src="https://kima-rin.github.io/img1/pf/lush/best_03.jpg" alt="">
                    <div class="prod-title font-lushHw">mask of maganminty</div>
                    <div class="under-line">Face And Body Mask</div>
                    <div class="under-line">Deep cleansing exfoliation</div>
                    <div class="price"><strong>€9.00/ </strong><small>125g</small>
                        <img src="https://kima-rin.github.io/img1/pf/lush/add-to-basket.svg" alt="">
                    </div>

                </div>
                <div class="prod-item">
                    <img src="https://kima-rin.github.io/img1/pf/lush/best_04.jpg" alt="">
                    <div class="prod-title font-lushHw">SEANIK</div>
                    <div class="under-line">Shampoo Bar</div>
                    <div class="under-line">Buoyant and beautiful hair</div>
                    <div class="price"><strong>€9.00/ </strong><small>125g</small>
                        <img src="https://kima-rin.github.io/img1/pf/lush/add-to-basket.svg" alt="">
                    </div>

                </div>
                <div class="prod-item">
                    <img src="https://kima-rin.github.io/img1/pf/lush/best_05.jpg" alt="">
                    <div class="prod-title font-lushHw">Big</div>
                    <div class="under-line">Shampoo</div>
                    <div class="under-line">To make you feel like a mermaid</div>
                    <div class="price"><strong>€15.00/ </strong><small>330g</small>
                        <img src="https://kima-rin.github.io/img1/pf/lush/add-to-basket.svg" alt="">
                    </div>

                </div>
                <div class="prod-item">
                    <img src="https://kima-rin.github.io/img1/pf/lush/best_06.jpg" alt="">
                    <div class="prod-title font-lushHw">Sleepy</div>
                    <div class="under-line">Body Lotion</div>
                    <div class="under-line">Soothing, comforting, relaxing</div>
                    <div class="price"><strong>€16.00/ </strong><small>215g</small>
                        <img src="https://kima-rin.github.io/img1/pf/lush/add-to-basket.svg" alt="">
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="prod-box-2 ">
     <div class="flex con">
         <div class="prod-soap-1 relative">
             <div class="new-soap">
                 <img src="https://kima-rin.github.io/img1/pf/lush/soap_b_01.jpg" alt="">
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
                 <p>I have very sensitive skin and this soap works wonders, without drying my skin out <br> or irritating it. The lather it creates is very velvety and the honey smell is subtle and <br> not too sweet.</p>
             </div>
             <div class="sopa-img-1 img-background-cover flex flex-jc-c" style="background-image:url(https://kima-rin.github.io/img1/pf/lush/new_pic_1.jpg)">
                 <div class="cc-2">
                     <a href="#">your hero <br> products</a>
                 </div>
                 <div class="View-c">View collection</div>
             </div>
         </div>
         <div class="prod-soap-2">
             <div class="grop-1 flex">
                 <div class="black-lives"><a href="#">black lives <br> matter</a></div>
                 <div class="delivery img-background-cover" style="background-image:url(https://kima-rin.github.io/img1/pf/lush/new_pic_2.jpg)"><a href="#">delivery <br> information</a></div>
             </div>
             <div class="grop-2 flex">
                 <div class="shop-open img-background-cover" style="background-image:url(https://kima-rin.github.io/img1/pf/lush/new_pic_3.jpg)"><a href="#">shop openings - key information</a></div>
                 <div class="prod-seanik">
                     <div class="ocean-img text-align-center"><img src="https://kima-rin.github.io/img1/pf/lush/soap_b_02.jpg" alt=""></div>
                     <div class="prod-title font-lushHw">Seanik</div>
                     <div class="under-line">Shampoo Bar</div>
                     <div class="under-line">Buoyant and beautiful hair</div>
                     <div class="price"><strong>€8.00/ </strong><small>55g</small>
                         <img src="https://kima-rin.github.io/img1/pf/lush/add-to-basket.svg" alt="">
                     </div>
                 </div>
             </div>
             <div class="my-slider-2">
                 <div class="nav height-100p flex flex-jc-end">
                     <div class="swiper-button-prev"></div>
                     <div class="swiper-button-next"></div>
                 </div>
                 <div class="swiper-container">
                     <div class="swiper-wrapper grop-3">
                         <div class="swiper-slide">
                             <div class="prod-img text-align-center"><img src="https://kima-rin.github.io/img1/pf/lush/soap_01.jpg" alt=""></div>
                             <div class="prod-title font-lushHw">outback mate</div>
                             <div class="under-line">Soap</div>
                             <div class="under-line">Tingly mint and eucalyptus</div>
                             <div class="price"><strong>€8.00/ </strong><small>100g</small>
                                 <img src="https://kima-rin.github.io/img1/pf/lush/add-to-basket.svg" alt="">
                             </div>
                         </div>
                         <div class="swiper-slide">
                             <div class="prod-img text-align-center"><img src="https://kima-rin.github.io/img1/pf/lush/soap_02.jpg" alt=""></div>
                             <div class="prod-title font-lushHw">louts flower</div>
                             <div class="under-line">Soap</div>
                             <div class="under-line">A rich and exfoliating wash</div>
                             <div class="price"><strong>€6.00/ </strong><small>100g</small>
                                 <img src="https://kima-rin.github.io/img1/pf/lush/add-to-basket.svg" alt="">
                             </div>
                         </div>
                         <div class="swiper-slide">
                             <div class="prod-img text-align-center"><img src="https://kima-rin.github.io/img1/pf/lush/soap_03.jpg" alt=""></div>
                             <div class="prod-title font-lushHw">lemon zest</div>
                             <div class="under-line">Soap</div>
                             <div class="under-line">Bright, refreshing lemon</div>
                             <div class="price"><strong>€6.00/ </strong><small>100g</small>
                                 <img src="https://kima-rin.github.io/img1/pf/lush/add-to-basket.svg" alt="">
                             </div>
                         </div>
                         <div class="swiper-slide">
                             <div class="prod-img text-align-center"><img src="https://kima-rin.github.io/img1/pf/lush/soap_04.jpg" alt=""></div>
                             <div class="prod-title font-lushHw">lemon zest</div>
                             <div class="under-line">Soap</div>
                             <div class="under-line">Bright, refreshing lemon</div>
                             <div class="price"><strong>€6.00/ </strong><small>100g</small>
                                 <img src="https://kima-rin.github.io/img1/pf/lush/add-to-basket.svg" alt="">
                             </div>
                         </div>
                         <div class="swiper-slide">
                             <div class="prod-img text-align-center"><img src="https://kima-rin.github.io/img1/pf/lush/soap_05.jpg" alt=""></div>
                             <div class="prod-title font-lushHw">lemon zest</div>
                             <div class="under-line">Soap</div>
                             <div class="under-line">Bright, refreshing lemon</div>
                             <div class="price"><strong>€6.00/ </strong><small>100g</small>
                                 <img src="https://kima-rin.github.io/img1/pf/lush/add-to-basket.svg" alt="">
                             </div>
                         </div>
                         <div class="swiper-slide">
                             <div class="prod-img text-align-center"><img src="https://kima-rin.github.io/img1/pf/lush/soap_06.jpg" alt=""></div>
                             <div class="prod-title font-lushHw">lemon zest</div>
                             <div class="under-line">Soap</div>
                             <div class="under-line">Bright, refreshing lemon</div>
                             <div class="price"><strong>€6.00/ </strong><small>100g</small>
                                 <img src="https://kima-rin.github.io/img1/pf/lush/add-to-basket.svg" alt="">
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
    <section class="banner-box con-min-width">
        <div class="new-style-banner img-background-cover"
            style="background-image:url(https://kima-rin.github.io/img1/pf/lush/soap_banner_2020_01.jpg)">
            <a class="banner-title font-lushHw" href="#">new style and a thorough clean</a>
            <a class="banner-btn" href="#">SHOP SOAPS</a>
        </div>
        <div class="spa-box">
            <div class="spa-banner flex con">
                <div class="spa-slide height-100p flex">
                    <div class="spa-slide-box-1 flex-1-0-0">
                        <div>
                            <div class="img-background-cover"
                                style="background-image:url(https://kima-rin.github.io/img1/pf/lush/spa_01.jpg)"></div>
                            <span>쉿! 숨죽이고 소리에 집중하세요. <br> 고요한 아우성만이 존재할 뿐입니다.</span>
                        </div>
                    </div>
                    <div class="spa-slide-box-2 flex-1-0-0">
                        <div class="img-background-cover"
                            style="background-image:url(https://kima-rin.github.io/img1/pf/lush/spa_02.jpg)">
                            <div>
                                <a href="#">아침 바람의 바스락거림은 기분을 <br> 한층 더 신어그럽게층도와줍니다. </a>
                                <a href="#">지붕처럼 늘어진 머리 위로 다양한 <br> 소리가 감은 눈꺼풀을 품고 황홀한 <br> 햇살을 선사합니다. <br>
                                    희미한 불꽃, 마음을 차분히 가라 앉히고 <br> 두 귀와 마음을 열어주세요 소리의 흐름 <br> 속에 몸을 담가 입욕을 즐기듯 편안함을 <br>
                                    누려보세요.</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="spa-text-box">
                    <div>
                        <a class="spa-title font-lushHw block" href="#">lush spa</a>
                        <a class="spa-text block" href="#">편안함으로 가득한 상상의 세계에 초대 합니다 <br>
                            달콤쌉쌀한 코코아의 입맞춤이 다정한 사랑을 속삭이고, <br> 기분좋은 보살핌을 온전히 느끼게 해 줄 거예요<br>
                            핫 초콜릿 보디 스크럽&따뜻하게 녹인 영양 가득한 장미 <br> 보디 세럼 오묘하고도 멋진 선율에 모을 맡긴
                            채 초콜릿 <br> 과 공상, 그리고 음악에 흠뻑 취해 보세요 </a>
                        <a class="spa-shop block" href="#">SHOP SOAPS</a>

                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section class="prod-box-3 con-min-width">
        <div class="con font-lushHw">RELATED PRODUCT</div>
        <div class="prod-list-box con flex">
            <div class="prod-etc-box-1">
                <div class="prod-rap flex">
                    <div class="prod-dirty flex-grow-1 relative">
                        <div class="prod-img text-align-center">
                            <img src="https://kima-rin.github.io/img1/pf/lush/spray_01.jpg" alt="">
                            <div class="cc"><a href="#">new style</a></div>
                        </div>
                        <div class="prod-title font-lushHw">dirty</div>
                        <div class="under-line">Body spray</div>
                        <div class="under-line">#보디 스프레이 #상큼한 라임</div>
                        <div class="price"><strong>€8.00/ </strong><small>55g</small>
                            <img src="https://kima-rin.github.io/img1/pf/lush/add-to-basket.svg" alt="">
                        </div>
                    </div>
                    <div class="prod-dads flex-grow-1 relative">
                        <div class="prod-img text-align-center">
                            <img src="https://kima-rin.github.io/img1/pf/lush/spray_02.jpg" alt="">
                            <div class="cc"><a href="#">new style</a></div>
                        </div>
                        <div class="prod-title font-lushHw">dads garden lemon </div>
                        <div class="under-line">Body spray</div>
                        <div class="under-line">#보디 스프레이 #레몬라임상큼짜릿</div>
                        <div class="price"><strong>€8.00/ </strong><small>55g</small>
                            <img src="https://kima-rin.github.io/img1/pf/lush/add-to-basket.svg" alt="">
                        </div>
                    </div>
                </div>

            </div>

            <div class="prod-etc-box-2">
                <div class="prod-rap-2 flex">
                    <div class="prod-white flex-grow-1">
                        <div class="prod-img text-align-center relative">
                            <img src="https://kima-rin.github.io/img1/pf/lush/spray_01.jpg" alt="">
                            <div class="cc"><a href="#">new style</a></div>
                        </div>
                        <div class="prod-title font-lushHw">so white</div>
                        <div class="under-line">Body spray</div>
                        <div class="under-line">#보디 스프레이 #풋사과를 한입</div>
                        <div class="price"><strong>€8.00/ </strong><small>55g</small>
                            <img src="https://kima-rin.github.io/img1/pf/lush/add-to-basket.svg" alt="">
                        </div>
                    </div>
                    <div class="prod-qna">
                        <ul>
                            <li>Q.스프레이 분사가 되질 않아요, 불량 인가요?</li>
                            <li class="block"
                                style="background-image:url(https://kima-rin.github.io/img1/pf/lush/c_lush_t.svg)">
                                <a href="#">안전을 위하여 캡이 장착되어 있습니다. <br> 하늘색의 안전캡을 아래로 당겨 제거하고 스프 <br> 레이를두 세 번 분사한 후 사용해
                                    주세요!</a>
                                <div class="lush-cc"><img src="https://kima-rin.github.io/img1/pf/lush/c_lush.svg"
                                        alt=""></div>
                            </li>
                            <li>Q. 제품을 가방에 넣어서 다니다가 새버렸어요!</li>
                            <li class="block"
                                style="background-image:url(https://kima-rin.github.io/img1/pf/lush/c_lush_t_2.svg)">
                                <a href="#">보디 스프레이는 이동에 적합한 용기가 아닙니다. <br> 사용 후 반드시 세워서 보관해 주세요! 또한 몸이 <br> 아닌 신발,의류
                                    가구 등 사용 용도 이외에 사용하실 <br> 경우 이염 및 오염의 위험이 있을 수 있으니<br> 주의하세요 !</a>
                                <div class="lush-cc"><img src="https://kima-rin.github.io/img1/pf/lush/c_lush.svg"
                                        alt=""></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="prod-box-4 flex con-min-width">
        <div class="prod-soap-list">
            <div class="prod-soap-bar row">
                <div class="cell-right">
                    <div class="prod-img text-align-center"><img
                            src="https://kima-rin.github.io/img1/pf/lush/Shampoo_bar_01.jpg" width="110" alt=""></div>
                    <div class="prod-title font-lushHw">soak and float</div>
                    <div class="under-line">Shampoo Bar</div>
                    <div class="under-line">Keep a clear, calm head</div>
                    <div class="price"><strong>€8.00/ </strong><small>55g</small>
                        <img src="https://kima-rin.github.io/img1/pf/lush/add-to-basket.svg" alt="">
                    </div>
                </div>
                <div class="cell-right">
                    <div class="prod-img text-align-center"><img
                            src="https://kima-rin.github.io/img1/pf/lush/Shampoo_bar_02.jpg" width="110" alt=""></div>
                    <div class="prod-title font-lushHw">seanik</div>
                    <div class="under-line">Shampoo Bar</div>
                    <div class="under-line">Buoyant and beautiful hair</div>
                    <div class="price"><strong>€8.00/ </strong><small>55g</small>
                        <img src="https://kima-rin.github.io/img1/pf/lush/add-to-basket.svg" alt="">
                    </div>
                </div>
                <div class="cell-right">
                    <div class="prod-img text-align-center"><img
                            src="https://kima-rin.github.io/img1/pf/lush/Shampoo_bar_03.jpg" width="110" alt=""></div>
                    <div class="prod-title font-lushHw">montalbano</div>
                    <div class="under-line">Shampoo Bar</div>
                    <div class="under-line">When life gives you lemons...</div>
                    <div class="price"><strong>€8.00/ </strong><small>55g</small>
                        <img src="https://kima-rin.github.io/img1/pf/lush/add-to-basket.svg" alt="">
                    </div>
                </div>
                <div class="cell-right">
                    <div class="prod-img text-align-center"><img
                            src="https://kima-rin.github.io/img1/pf/lush/Shampoo_bar_04.jpg" width="120" alt=""></div>
                    <div class="prod-title font-lushHw">new</div>
                    <div class="under-line">Shampoo Bar</div>
                    <div class="under-line">Boost, shine and stimulate</div>
                    <div class="price"><strong>€8.00/ </strong><small>55g</small>
                        <img src="https://kima-rin.github.io/img1/pf/lush/add-to-basket.svg" alt="">
                    </div>
                </div>


            </div>
        </div>
        <div class="prod-soap-img">
            <div class="grop-1 flex">
                <div class="Pac-img img-background-cover"
                    style="background-image:url(https://kima-rin.github.io/img1/pf/lush/Hair_Lab_2.jpg)"><a
                        class="font-lushHw" href="#">Packaging free <br> july</a></div>
                <div class="howTo-img img-background-cover"
                    style="background-image:url(https://kima-rin.github.io/img1/pf/lush/Hair_Lab_1.jpg)"><a
                        class="font-lushHw" href="#">how
                        to have a <br> perfect hair <br> day </a></div>
            </div>
        </div>
    </section>
    <section class="ourPolicies-box con-min-width">
        <div class="ourPolicies-bg img-background-cover"
            style="background-image:url(https://kima-rin.github.io/img1/pf/lush/our_policies_00.jpg)">
            <div class="con">
                <div class="lush-ceo"><img src="https://kima-rin.github.io/img1/pf/lush/people_04.png" width="470"
                        alt=""></div>
                <div class="title-box">
                    <p>“러쉬는 좋은 느낌을 주는 단어입니다. <br> 자연이 생각나기도 하고 ,비가오는 숲 또는 시의 한 구절을 떠올리게 하죠.”</p>
                    <span class="title font-lushHw">our policies</span>
                    <span class="subtitle">_This is what we stand for.</span>
                </div>
            </div>
        </div>
        <div class="Policies-list-box">
            <div class="flex con">
                <div class="relative"><img src="https://kima-rin.github.io/img1/pf/lush/lush_times_25_years.png"
                        width="250" alt="">
                    <img class="text-25th" src="https://kima-rin.github.io/img1/pf/lush/lush_25.png" alt="">
                </div>
                <div class="policies-slide">
                    <div class="flex">
                        <div class="Policies-img-1 img-background-cover"
                            style="background-image:url(https://kima-rin.github.io/img1/pf/lush/our_policies_01.jpg)">
                            <a class="block" href="#">Cimpany Tax <br> policies</a></div>
                        <div class="Policies-img-2 img-background-cover"
                            style="background-image:url(https://kima-rin.github.io/img1/pf/lush/our_policies_02.png)">
                            <a class="block" href="#">Fighting Animal <br> Testing</a></div>
                        <div class="Policies-img-3 img-background-cover"
                            style="background-image:url(https://kima-rin.github.io/img1/pf/lush/our_policies_03.jpg)">
                            <a class="block" href="#">Charity Suupport</a></div>
                    </div>
                </div>
            </div>
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
                <h1 class="font-lushHw">25 years of lush</h1>
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