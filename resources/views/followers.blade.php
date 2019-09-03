<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.css')}}">
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <link rel="stylesheet" href="/css/app.css">
    <title>Followers</title>
    <script>
    
        $(document).ready(function(){
            
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
            padding-top: 20%;
            padding-bottom: 10%;
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
    <div class="container text-center shadow-sm rounded-bottom bg-nav mb-4 fixed-top">
        <div class="d-flex justify-content-between py-3">

            <div class="bd-highlight">
                <a href="{{route('challenge.index')}}">
                    <i class="fas fa-arrow-left text-white" style="font-size: 13pt;"></i>
                </a>
            </div>

            <div class="flex-grow-1 bd-highlight h6 text-white font-berlin">Followers</div>
        </div>
    </div>

    <section class="unfollowing">

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