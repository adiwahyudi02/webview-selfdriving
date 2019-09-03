<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.css')}}">
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <link rel="stylesheet" href="/css/app.css">
    <!-- <link rel="stylesheet" href="/css/bootstrap.min.css"> -->
    <title>Search</title>
    <script>
        $(document).ready(function(){

            $(".btn").click(function(){
                $(".input").toggleClass("active").focus;

                $(this).toggleClass("animate");

                $(".input").val("");

            });

            $(".fa-times").click(function(){
                $(".w-form-both").fadeOut();
                $(".w-search").fadeIn();
            });

            $(".w-search").click(function(){
                $(".w-form-both").fadeIn();
                $(".w-search").fadeOut();
            });


            // nav-search

            $("#nav-search-hastag").click(function(){
                
                $("#nav-search-user").removeClass('add-class-bb-search');
                
                $("#nav-search-hastag").addClass('add-class-bb-search');

                $("#nav-search-user").removeClass('add-class-font-color-search');

                $("#nav-search-hastag").addClass('add-class-font-color-search');

                $(".section-following").fadeOut();

                // $(".add-class-bb-hastag-search").delay(150).css("-webkit-animation-play-state", "running");
            });


            $("#nav-search-user").click(function(){

                $("#nav-search-hastag").removeClass('add-class-bb-search');
                
                $("#nav-search-user").addClass('add-class-bb-search');

                $("#nav-search-hastag").removeClass('add-class-font-color-search');

                $("#nav-search-user").addClass('add-class-font-color-search');

                $(".section-following").fadeIn();
                
                // $(".border-bottom-search").addClass('add-class-bb-user-search');

                // $(".border-bottom-search").removeClass('.add-class-bb-hastag-search');

                // $("#nav-search-hastag").removeClass('add-class-font-color-search');

                // $("#nav-search-user").addClass('add-class-font-color-search');

                // $(".add-class-bb-user-search").delay(150).css("-webkit-animation-play-state", "running");
            });



            // unffollow

            function fadeInUnfollow(name){
                $('#unfollow-name-' + name).fadeIn();
            }

            $('#btn-following-name-1').click(function(){
                fadeInUnfollow('1');
            });

            $('#btn-following-name-2').click(function(){
                fadeInUnfollow('2');
            });

            $('#btn-following-name-3').click(function(){
                fadeInUnfollow('3');
            });


            function fadeOutUnfollow(name){
                $('#unfollow-name-' + name).fadeOut();
            }

            $('#cancel-name-1').click(function(){
                fadeOutUnfollow('1');
            });

            $('#cancel-name-2').click(function(){
                fadeOutUnfollow('2');
            });

            $('#cancel-name-3').click(function(){
                fadeOutUnfollow('3');
            });

            // follow

            function fadeInFollow(name){
                $('#follow-name-' + name).fadeIn();
            }

            $('#btn-follow-name-1').click(function(){
                fadeInFollow('1');
            });

            $('#btn-follow-name-2').click(function(){
                fadeInFollow('2');
            });

            function fadeOutFollow(name){
                $('#follow-name-' + name).fadeOut();
            }

            $('#cancel-follow-name-1').click(function(){
                fadeOutFollow('1');
            });

            $('#cancel-follow-name-2').click(function(){
                fadeOutFollow('2');
            });
            
        });
    </script>
    <style>

        body{
            /* padding-top: 20%; */
            padding-bottom: 10%;
            /* background: black; */
        }
        .f-left{
            float: left;
        }
        .f-right{
            float: right;
        }
        .clear{
            clear: both;
        }
        .bg-nav{
            background: #4fc1a7;
        }

        /* nav */

        .add-class-nav{
            color: #4fc1a7;
        }
        .nav-font{
            font-family: arial;
            font-size: 8pt;
            margin-bottom: 0;
        }
        .nav-icon{
            font-size: 12pt;
        }

        .w-form-both{
            border-bottom: 2px solid lightpink;
            padding-bottom: 5px;
            margin-bottom: 30px;
        }
        .input-form{
            width: 85%;
            background: none;
            outline: none;
            border: none;
            color: rgb(83, 212, 210);
            font-family: berlin sans fb;
        }
        .input-form::-webkit-input-placeholder{
            color: rgb(83, 212, 210);
        }
        .icon-input{
            font-size: 11pt;
            color: lightpink;
            margin-left: 5px;
        }
        .add-focus-input{
            color: rgb(45,165,163);
        }
        .add-border-bottom-input{
            border-bottom: 2px solid rgb(83, 212, 210)
        }

        .add-class-bb-search{
            border-bottom: 2px solid rgb(83, 212, 210);
            width: 50%;
        }

        .add-class-bb-hastag-search{
            border-bottom: 2px solid rgb(83, 212, 210);
            width: 50%;
            animation-name: slider-border-hastag;
            animation-duration: 0.75s;
            /* animation-iteration-count: 100; */
            animation-fill-mode: forwards;
            animation-play-state: paused;
        }
        @keyframes slider-border-hastag{
            0%{
                margin-left: 0%;
                width: 50%;
            }
            50%{
                width: 20%;
                border-color: lightsalmon;
            }
            100%{
                margin-left: 50%;
                width: 50%;
            }
        }

        .add-class-bb-user-search{
            border-bottom: 2px solid rgb(83, 212, 210);
            width: 50%;
            animation-name: slider-border-user;
            animation-duration: 0.75s;
            /* animation-iteration-count: 100; */
            animation-fill-mode: forwards;
            animation-play-state: paused;
        }
        @keyframes slider-border-user{
            0%{
                margin-left: 50%;
                width: 50%;
            }
            50%{
                width: 20%;
                border-color: lightsalmon;
            }
            100%{
                margin-left: 0%;
                width: 50%;
            }
        }
        .add-class-font-color-search{
            color: lightpink;
        }
        .font-color-search{
            color: lightgray;
        }
        

        /* pp Following */

        .profile-pic {
            max-width: 200px;
            max-height: 200px;
            display: block;
        }
        .circle {
            border-radius: 1000px !important;
            overflow: hidden;
            width: 80px;
            height: 80px;
            border: 1px rgb(83, 212, 210) solid;
            transform: scale(0.5);
        }
        img {
            max-width: 100%;
            height: 80px;
        }
        .w-unfollow{
            display: none;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 99;
        }
    </style>
</head>
<body>

    <div class="container text-center shadow-sm rounded-bottom fixed-top">
        
    </div>

    <!-- navigasi -->

    <section class="navbar fixed-bottom bg-white" id="navbar" style="box-shadow: 1px 1px 2px 1px #dbdbdb;">
        
            <div class="container rounded-top  d-flex justify-content-between">
                    <div class="col-xs-3" id="nav-feed">
                        <center>
                            <a href="{{route('feed')}}" style="color: #bdbbbb">
                                <div>
                                    <i class="fas fa-clock nav-icon"></i>
                                </div>
                                <p class="nav-font">Timeline</p>
                            </a>
                        </center>
                    </div>
                    <div class="col-xs-3" id="nav-challenges">
                        <center>
                            <a href="{{route('challenge.index')}}" style="color: #bdbbbb" >
                                <div>
                                    <i class="fas fa-chart-area nav-icon"></i>
                                </div>
                                <p class="nav-font">Challenges</p>
                            </a>
                        </center>
                    </div>
                    <div class="col-xs-3" id="nav-explore">
                        <center>
                            <a href="{{route('explore')}}" style="color: #bdbbbb">
                                <div>
                                    <i class="fab fa-chrome nav-icon"></i>
                                </div>
                                <p class="nav-font">Explore</p>
                            </a>
                        </center>
                    </div>
                    <div class="col-xs-3" id="nav-search">
                        <center>
                            <a href="{{route('search')}}" class="add-class-nav">
                                <div>
                                    <i class="fas fa-search nav-icon"></i>
                                </div>
                                <p class="nav-font">Search</p>
                            </a>
                        </center>
                    </div>
            </div>
        
        </section>
        
        <!-- <div class="container w-search">
            <div class="d-flex align-items-center">
                <i class="fas fa-search mr-2" style="color: lightpink;"></i>
                <p class="mb-0" style="color: rgb(83, 212, 210);">Search..</p>
            </div>
        </div> -->

        <!-- <form class="container w-form-both" style="display: none; width: 80%;" action="">

            <div class="" id="border-bottom-name-signUp">
                <input type="text" name="inputName" placeholder="Search.." class="input-form" id="input-name-signUp" style="text-indent: 10px;">
                
                <i class="fas fa-times icon-input" id="icon-name-signUp"></i>
                
            </div>

        </form> -->

        <div class="rounded-bottom" style="width: 100%;">
        
            <div class="d-flex justify-content-center bg-white shadow-sm">

                <div class="text-center nav-search add-class-bb-search" id="nav-search-user" style="padding: 9px 30px; width: 50%; font-family: berlin sans fb; color: lightpink; font-size: 9pt;">
                    <p class="mb-0">User</p>
                </div>

                <div class="text-center nav-search" id="nav-search-hastag" style="padding: 9px 25px;  width: 50%; font-family: berlin sans fb;  color: lightpink; font-size: 9pt;">
                    <p class="mb-0">Hastag</p>
                </div>
    
            </div>
            
            <!-- <div class="border-bottom-search"></div> -->
        </div>


        <section class="section-following">

        <div class="container my-2" id="name-1">
                <div class="d-flex justify-content-around align-items-center bg-white shadow-sm pr-3" style="width:100%; margin: auto;">
                    <div class="mx-0 circle" style="margin: auto;">
                        <img class="profile-pic" src="../img/love2.jpg">
                    </div>
                    <div class="pl-0">
                        <p class="mb-0" style="color: lightblue; font-family: berlin sans fb; font-size: 11pt">Name</p>
                        <p class="mb-0" style="color: lightgray; font-family: arial;  font-size: 8pt;">Your username </p>
                    </div>
                    <div class="ml-2">
                        <p class="mb-0" style="color: gold; font-family: berlin sans fb; font-size: 9pt">1020 xp</p>
                        <p class="mb-0" style="color: lightblue; font-family: berlin sans fb; font-size: 9pt">10 done</p>
                    </div>
                    <div class="ml-3">
                        <div class="text-white rounded px-2 py-1" id="btn-following-name-1" style="background: rgb(83, 212, 210)">
                            <p class="mb-0" style="font-size: 8pt; font-family: berlin sans fb;">Following</p>
                        </div>
                    </div>
                </div>
        </div>

        <div class="container bg-white shadow py-5 rounded w-unfollow" id="unfollow-name-1" style="width: 70%;">
            <center>
                <div class="mx-0 rounded-circle" style="width: 60px; height: 60px; overflow: hidden; border: 1px rgb(83, 212, 210) solid;">
                    <img class="profile-pic" src="../img/love2.jpg">
                </div>
                <p class="mb-0" style="color: lightblue; font-family: arial;  font-size: 10pt;">Your username </p>
                <p class="mb-0" style="color: lightgray; font-family: arial;  font-size: 9pt;">Stop following (username) ? </p>
                <div class="d-flex justify-content-around mt-3">
                    <div class="text-white rounded px-2 py-1" id="cancel-name-1" style="width: 40%;background: red">
                        <p class="mb-0" style="font-size: 8pt; font-family: berlin sans fb;">Cancel</p>
                    </div>
                    <div class="text-white rounded px-2 py-1" style="width: 40%;background: rgb(83, 212, 210)">
                        <p class="mb-0" style="font-size: 8pt; font-family: berlin sans fb;">Unfollow</p>
                    </div>
                </div>
            </center>
        </div>


        <div class="container my-2" id="name-2">
                <div class="d-flex justify-content-around align-items-center bg-white shadow-sm pr-3" style="width:100%; margin: auto;">
                    <div class="mx-0 circle" style="margin: auto;">
                        <img class="profile-pic" src="../img/creativity.png">
                    </div>
                    <div class="pl-0">
                        <p class="mb-0" style="color: lightblue; font-family: berlin sans fb; font-size: 11pt">Name</p>
                        <p class="mb-0" style="color: lightgray; font-family: arial;  font-size: 8pt;">Your username </p>
                    </div>
                    <div class="ml-2">
                        <p class="mb-0" style="color: gold; font-family: berlin sans fb; font-size: 9pt">1020 xp</p>
                        <p class="mb-0" style="color: lightblue; font-family: berlin sans fb; font-size: 9pt">10 done</p>
                    </div>
                    <div class="ml-3">
                        <div class="text-white rounded px-2 py-1" id="btn-following-name-2" style="background: rgb(83, 212, 210)">
                            <p class="mb-0" style="font-size: 8pt; font-family: berlin sans fb;">Following</p>
                        </div>
                    </div>
                </div>
        </div>

        <div class="container bg-white shadow py-5 rounded w-unfollow" id="unfollow-name-2" style="width: 70%;">
            <center>
                <div class="mx-0 rounded-circle" style="width: 60px; height: 60px; overflow: hidden; border: 1px rgb(83, 212, 210) solid;">
                    <img class="profile-pic" src="../img/creativity.png">
                </div>
                <p class="mb-0" style="color: lightblue; font-family: arial;  font-size: 10pt;">Your username </p>
                <p class="mb-0" style="color: lightgray; font-family: arial;  font-size: 9pt;">Stop following (username) ? </p>
                <div class="d-flex justify-content-around mt-3">
                    <div class="text-white rounded px-2 py-1" id="cancel-name-2" style="width: 40%;background: red">
                        <p class="mb-0" style="font-size: 8pt; font-family: berlin sans fb;">Cancel</p>
                    </div>
                    <div class="text-white rounded px-2 py-1" style="width: 40%;background: rgb(83, 212, 210)">
                        <p class="mb-0" style="font-size: 8pt; font-family: berlin sans fb;">Unfollow</p>
                    </div>
                </div>
            </center>
        </div>


        <div class="container my-2" id="name-3">
                <div class="d-flex justify-content-around align-items-center bg-white shadow-sm pr-3" style="width:100%; margin: auto;">
                    <div class="mx-0 circle" style="margin: auto;">
                        <img class="profile-pic" src="../img/gastronomy.jpg">
                    </div>
                    <div class="pl-0">
                        <p class="mb-0" style="color: lightblue; font-family: berlin sans fb; font-size: 11pt">Name</p>
                        <p class="mb-0" style="color: lightgray; font-family: arial;  font-size: 8pt;">Your username </p>
                    </div>
                    <div class="ml-2">
                        <p class="mb-0" style="color: gold; font-family: berlin sans fb; font-size: 9pt">1020 xp</p>
                        <p class="mb-0" style="color: lightblue; font-family: berlin sans fb; font-size: 9pt">10 done</p>
                    </div>
                    <div class="ml-3">
                        <div class="text-white rounded px-2 py-1" id="btn-following-name-3" style="background: rgb(83, 212, 210)">
                            <p class="mb-0" style="font-size: 8pt; font-family: berlin sans fb;">Following</p>
                        </div>
                    </div>
                </div>
        </div>

        <div class="container bg-white shadow py-5 rounded w-unfollow" id="unfollow-name-3" style="width: 70%;">
            <center>
                <div class="mx-0 rounded-circle" style="width: 60px; height: 60px; overflow: hidden; border: 1px rgb(83, 212, 210) solid;">
                    <img class="profile-pic" src="../img/gastronomy.jpg">
                </div>
                <p class="mb-0" style="color: lightblue; font-family: arial;  font-size: 10pt;">Your username </p>
                <p class="mb-0" style="color: lightgray; font-family: arial;  font-size: 9pt;">Stop following (username) ? </p>
                <div class="d-flex justify-content-around mt-3">
                    <div class="text-white rounded px-2 py-1" id="cancel-name-3" style="width: 40%;background: red">
                        <p class="mb-0" style="font-size: 8pt; font-family: berlin sans fb;">Cancel</p>
                    </div>
                    <div class="text-white rounded px-2 py-1" style="width: 40%;background: rgb(83, 212, 210)">
                        <p class="mb-0" style="font-size: 8pt; font-family: berlin sans fb;">Unfollow</p>
                    </div>
                </div>
            </center>
        </div>


        <!-- follow -->


        <div class="container my-2" id="follower-name-1">
                <div class="d-flex justify-content-around align-items-center bg-white shadow-sm pr-3" style="width:100%; margin: auto;">
                    <div class="mx-0 circle" style="margin: auto;">
                        <img class="profile-pic" src="../img/sport.jpg">
                    </div>
                    <div class="pl-0">
                        <p class="mb-0" style="color: lightblue; font-family: berlin sans fb; font-size: 11pt">Name</p>
                        <p class="mb-0" style="color: lightgray; font-family: arial;  font-size: 8pt;">Your username </p>
                    </div>
                    <div class="ml-2">
                        <p class="mb-0" style="color: gold; font-family: berlin sans fb; font-size: 9pt">1020 xp</p>
                        <p class="mb-0" style="color: lightblue; font-family: berlin sans fb; font-size: 9pt">10 done</p>
                    </div>
                    <div class="ml-3">
                        <div class="rounded px-2 py-1" id="btn-follow-name-1" style="border: 1px rgb(83, 212, 210) solid; color: rgb(83, 212, 210)">
                            <p class="mb-0" style="font-size: 8pt; font-family: berlin sans fb;">Follow</p>
                        </div>
                    </div>
                </div>
        </div>

        <div class="container bg-white shadow py-5 rounded w-unfollow" id="follow-name-1" style="width: 70%;">
            <center>
                <div class="mx-0 rounded-circle" style="width: 60px; height: 60px; overflow: hidden; border: 1px rgb(83, 212, 210) solid;">
                    <img class="profile-pic" src="../img/sport.jpg">
                </div>
                <p class="mb-0" style="color: lightblue; font-family: arial;  font-size: 10pt;">Your username </p>
                <p class="mb-0" style="color: lightgray; font-family: arial;  font-size: 9pt;">Follow (username) ? </p>
                <div class="d-flex justify-content-around mt-3">
                    <div class="text-white rounded px-2 py-1" id="cancel-follow-name-1" style="width: 40%;background: red">
                        <p class="mb-0" style="font-size: 8pt; font-family: berlin sans fb;">Cancel</p>
                    </div>
                    <div class="text-white rounded px-2 py-1" style="width: 40%;background: rgb(83, 212, 210)">
                        <p class="mb-0" style="font-size: 8pt; font-family: berlin sans fb;">Follow</p>
                    </div>
                </div>
            </center>
        </div>

        <div class="container my-2" id="follower-name-2">
                <div class="d-flex justify-content-around align-items-center bg-white shadow-sm pr-3" style="width:100%; margin: auto;">
                    <div class="mx-0 circle" style="margin: auto;">
                        <img class="profile-pic" src="../img/health.jpg">
                    </div>
                    <div class="pl-0">
                        <p class="mb-0" style="color: lightblue; font-family: berlin sans fb; font-size: 11pt">Name</p>
                        <p class="mb-0" style="color: lightgray; font-family: arial;  font-size: 8pt;">Your username </p>
                    </div>
                    <div class="ml-2">
                        <p class="mb-0" style="color: gold; font-family: berlin sans fb; font-size: 9pt">1020 xp</p>
                        <p class="mb-0" style="color: lightblue; font-family: berlin sans fb; font-size: 9pt">10 done</p>
                    </div>
                    <div class="ml-3">
                        <div class="rounded px-2 py-1" id="btn-follow-name-2" style="border: 1px rgb(83, 212, 210) solid; color: rgb(83, 212, 210)">
                            <p class="mb-0" style="font-size: 8pt; font-family: berlin sans fb;">Follow</p>
                        </div>
                    </div>
                </div>
        </div>

        <div class="container bg-white shadow py-5 rounded w-unfollow" id="follow-name-2" style="width: 70%;">
            <center>
                <div class="mx-0 rounded-circle" style="width: 60px; height: 60px; overflow: hidden; border: 1px rgb(83, 212, 210) solid;">
                    <img class="profile-pic" src="../img/health.jpg">
                </div>
                <p class="mb-0" style="color: lightblue; font-family: arial;  font-size: 10pt;">Your username </p>
                <p class="mb-0" style="color: lightgray; font-family: arial;  font-size: 9pt;">Follow (username) ? </p>
                <div class="d-flex justify-content-around mt-3">
                    <div class="text-white rounded px-2 py-1" id="cancel-follow-name-2" style="width: 40%;background: red">
                        <p class="mb-0" style="font-size: 8pt; font-family: berlin sans fb;">Cancel</p>
                    </div>
                    <div class="text-white rounded px-2 py-1" style="width: 40%;background: rgb(83, 212, 210)">
                        <p class="mb-0" style="font-size: 8pt; font-family: berlin sans fb;">Follow</p>
                    </div>
                </div>
            </center>
        </div>
       
    </section>

</body>
</html>
