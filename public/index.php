<?php
include "../part/head_head.php"
?>
<?php
include "../part/head.php"
?>
<link rel="stylesheet" href="/resource/common.css">
<link rel="stylesheet" href="/resource/index.css">

<div class="wrapper">
    <div class="main-box con flex">
        <div class="slide-box flex">
            <div class="slides">
               <div class="active flex-grow-1" style="background-image:url(/resource/img/main-01.png)"></div>
               <div class="flex-grow-1" style="background-image:url(/resource/img/main-02.png)"></div>
               <div class="flex-grow-1"style="background-image:url(/resource/img/main-03.png)"></div>
            </div>
            <div class="side-btn">
                <div><span><i class="fas fa-angle-left"></i></span></div>
                <div><span><i class="fas fa-angle-right"></i></span></div>                          
            </div>
        </div>

        <div class="logo block">
            <div class="main-logo" style="background-image:url(/resource/img/logo-4.png)"></div>
            <div class="article-box flex">
               <nav class="article-list flex">
                    <ul>
                       <li class="flex"><a href="#" class="block">News from Journal</a></li>
                       <li><a href="#" class="block flex-grow-1">
                            <span>2020.5.26</span>
                            <span>about the news</span>
                            <span><i class="fas fa-angle-right"></i></span>
                           </a></li>
                       <li><a href="#" class="block flex-grow-1">
                            <span>2020.5.26</span>
                            <span class="">about the news</span>
                            <span><i class="fas fa-angle-right"></i></span>
                           </a></li>
                       <li><a href="#" class="block flex-grow-1">
                            <span>2020.5.26</span>
                            <span>about the news</span>
                            <span><i class="fas fa-angle-right"></i></span>
                        </a></li>
                   </ul>
                </nav>
           </div>
        </div>
    </div>
<?php
include "../part/foot.php"
?>