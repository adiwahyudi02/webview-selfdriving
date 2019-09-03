<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.css')}}">
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <link rel="stylesheet" href="/css/app.css">
    <title>feed</title>
    <script>
        
    </script>
    <style>
        body{
            padding-bottom: 100px;
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

        /* feed */
        body{
            background: white;
            padding-left: 15px;
            padding-right: 15px;
            margin-top: 80px;
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
        .font-arial{
            font-family: berlin sans fb;
        }
        .bg-education{
            background: cadetblue;
            /* background: purple; */
        }
        .bg-music{
            background: gold;
        }
        .bg-sport{
            background: #25a9f0;
        }
        .bg-game{
            background: #4fc1a7;
        }
        .bg-fashion{
            background: #941988;
        }
        .bg-creativity{
            background: #ff4d00;
        }
        .bg-love{
            background: #ffb3ba;
        }
        .bg-health{
            background: lightblue;
        }
        .bg-finance{
            background: wheat;
        }
        .bg-gastronomy{
            background: indianred;
        }
        .bg-makeup{
            background: lightsalmon;
        }
        .bg-productivity{
            background: darkslateblue;
        }
        .color-education{
            color: cadetblue;
        }
        .color-sport{
            color: #25a9f0;
        }
        .color-game{
            color: #4fc1a7;
        }
        .color-music{
            color: gold;
        }
        .color-fashion{
            color: 	#941988;
        }
        .color-creativity{
            color: #ff4d00;
        }
        .color-love{
            color: #ffb3ba;
        }
        .color-health{
            color: lightblue;
        }
        .color-finance{
            color: wheat;
        }
        .color-gastronomy{
            color: indianred;
        }
        .color-makeup{
            color: lightsalmon;
        }
        .color-productivity{
            color: darkslateblue;
        }
        .profile-feed{
            width: 55px;
            height:55px;
        }
        #img-education{
            background: url("img/education2.jpg");
            width: 100%;
            height: 140px;
            border-radius: 25px 5px 5px 5px;
            background-repeat: no-repeat;
            background-size: 100% 130%;
        }
        #img-music{
            background: url("img/music.jpg");
            width: 100%;
            height: 140px;
            border-radius: 25px 5px 5px 5px;
            background-repeat: no-repeat;
            background-size: 100% 130%;
        }
        #img-game{
            background: url("img/game5.jpg");
            width: 100%;
            height: 140px;
            border-radius: 25px 5px 5px 5px;
            background-repeat: no-repeat;
            background-size: 100% 130%;
        }
        #img-sport{
            background: url("img/sport2.jpg");
            width: 100%;
            height: 140px;
            border-radius: 25px 5px 5px 5px;
            background-repeat: no-repeat;
            background-size: 100% 130%;
        }
        #img-fashion{
            background: url("img/fashion.jpg");
            width: 100%;
            height: 140px;
            border-radius: 25px 5px 5px 5px;
            background-repeat: no-repeat;
            background-size: 100% 130%;
        }
        #img-creativity{
            background: url("img/creativity.png");
            width: 100%;
            height: 140px;
            border-radius: 25px 5px 5px 5px;
            background-repeat: no-repeat;
            background-size: 100% 130%;
        }
        #img-love{
            background: url("img/love2.jpg");
            width: 100%;
            height: 140px;
            border-radius: 25px 5px 5px 5px;
            background-repeat: no-repeat;
            background-size: 100% 130%;
        }
        #img-health{
            background: url("img/health2.jpg");
            width: 100%;
            height: 140px;
            border-radius: 25px 5px 5px 5px;
            background-repeat: no-repeat;
            background-size: 100% 130%;
        }
        #img-finance{
            background: url("img/finance7.png");
            width: 100%;
            height: 140px;
            border-radius: 25px 5px 5px 5px;
            background-repeat: no-repeat;
            background-size: 100% 130%;
        }
        #img-gastronomy{
            background: url("img/gastronomy2.jpg");
            width: 100%;
            height: 140px;
            border-radius: 25px 5px 5px 5px;
            background-repeat: no-repeat;
            background-size: 100% 130%;
        }
        #img-makeup{
            background: url("img/makeup.jpg");
            width: 100%;
            height: 140px;
            border-radius: 25px 5px 5px 5px;
            background-repeat: no-repeat;
            background-size: 100% 130%;
        }
        #img-productivity{
            background: url("img/productivity7.jpg");
            width: 100%;
            height: 140px;
            border-radius: 25px 5px 5px 5px;
            background-repeat: no-repeat;
            background-size: 100% 130%;
        }
        .w-content-feed{
            height: 255px;
            width: 100%; 
            border-radius: 25px 5px 5px 5px;
        }
        .w-content-achievement{
            height: 200px;
            width: 100%; 
            border-radius: 25px 5px 5px 5px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <div class="container text-center shadow-sm rounded-bottom bg-nav mb-4 fixed-top">
        <div class="d-flex bd-highlight py-3">

            <div class="flex-grow-1 bd-highlight h6 text-white font-arial">Self Driving</div>

            <div class="bd-highlight">
                <a href="{{route('notification')}}">
                    <i class="far fa-bell text-white" style="font-size: 13pt;"></i>
                </a>
            </div>

        </div>
    </div>

    <!-- create a Challenge -->

    <!-- education -->

    <p class="m-0" style="text-indent: 55px; color: #b5b3b0; font-family: berlin sans fb;">Adi wahyudi</p>
    <div class="container px-0 bg-white shadow-sm w-content-feed mt-2">

        <div class="img container px-0" id="img-education">
            <div class="container px-0 bg-education" style="height: 140px; border-radius: 25px 5px 5px 5px;opacity:0.5;">
            </div>
        </div>

        <div class="container p-0" style="margin-top: -150px;">
            <div class="col-sm-12 px-0">
                <div class="rounded-circle profile-feed bg-education text-center f-left" style="margin-top: -5px;position: absolute;">
                    <i class="far fa-user text-white align-middle mt-3" style="font-size: 13pt;"></i>
                </div>
                <div class="p-2 bg-education ml-3 d-flex rounded-right">
                    <p class="text-white m-0 " style="text-indent: 45px;">Created a Challenge</p>
                    <i class="fas fas fa-book-reader text-white ml-auto mr-1" style="font-size: 12pt"></i>
                </div>
            </div>
        </div>
        
        <p class="h5 font-arial ml-3 text-white" style="position: absolute;  margin-top: 30px;"><!-- title challenge -->Education</p>
        <div class="d-flex"  style="margin-top: 125px;">
            <div class="ml-3 mr-auto">
                <p class="h6 m-0"> Your Goals </p>
                <small class="m-0" style="color:grey;"> Your Date </small>
            </div>
            <div class="mx-1">
                <p class="text-white bg-education p-1" style="border-radius: 5px; font-size: 7pt;">#crash</p>
            </div>
            <div class="mx-1">
                <p class="text-white bg-education p-1" style="border-radius: 5px; font-size: 7pt;">#crash</p>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="p-2">
                <i class="far fa-heart p-2 rounded-circle color-education" style="border: 1px solid cadetblue;"></i>
            </div>
            <div class="p-2">
                <i class="far fa-comment p-2 rounded-circle color-education" style="border: 1px solid cadetblue;"></i>
            </div>
            <div class="p-2">
                <i class="fas fa-pencil-alt p-2 rounded-circle color-education" style="border: 1px solid cadetblue;"></i>
            <div class="clear"></div>
        </div>
    </div>

    <!-- sport -->
    
    <p class="m-0 mt-5" style="text-indent: 55px; color: #b5b3b0; font-family: berlin sans fb;">Adi wahyudi</p>
    <div class="container px-0 bg-white shadow-sm w-content-feed mt-2">

        <div class="img container px-0" id="img-sport">
            <div class="container px-0 bg-sport" style="height: 140px; border-radius: 25px 5px 5px 5px;opacity:0.5;">
            </div>
        </div>

        <div class="container p-0" style="margin-top: -150px;">
            <div class="col-sm-12 px-0">
                <div class="rounded-circle profile-feed bg-sport text-center f-left" style="margin-top: -5px;position: absolute;">
                    <i class="far fa-user text-white align-middle mt-3" style="font-size: 13pt;"></i>
                </div>
                <div class="p-2 bg-sport ml-3 d-flex rounded-right">
                    <p class="text-white m-0 " style="text-indent: 45px;">Created a Challenge</p>
                    <i class="fas fa-volleyball-ball text-white ml-auto mr-1"  style="font-size: 12pt"></i>
                </div>
            </div>
        </div>

        <p class="h5 font-arial ml-3 text-white" style="position: absolute; opacity: 1; margin-top: 30px;">Sport</p>
        
        <div class="d-flex"  style="margin-top: 125px;">
            <div class="ml-3 mr-auto">
                <p class="h6 m-0"> Your Goals </p>
                <small class="m-0" style="color:grey;"> Your Date </small>
            </div>
            <div class="mx-1">
                <p class="text-white bg-sport p-1" style="border-radius: 5px; font-size: 7pt;">#crash</p>
            </div>
        </div>

        <div class="d-flex justify-content-center">
            <div class="p-2">
                <i class="far fa-heart p-2 rounded-circle color-sport" style="border: 1px solid #25a9f0;"></i>
            </div>
            <div class="p-2">
                <i class="far fa-comment p-2 rounded-circle color-sport" style="border: 1px solid #25a9f0;"></i>
            </div>
            <div class="p-2">
                <i class="fas fa-pencil-alt p-2 rounded-circle color-sport" style="border: 1px solid #25a9f0;"></i>
            <div class="clear"></div>
        </div>
    </div>

    <!-- game -->

    <p class="m-0 mt-5" style="text-indent: 55px; color: #b5b3b0; font-family: berlin sans fb;">Adi wahyudi</p>
    <div class="container px-0 bg-white shadow-sm w-content-feed mt-2">

        <div class="img container px-0" id="img-game">
            <div class="container px-0 bg-game" style="height: 140px; border-radius: 25px 5px 5px 5px;opacity:0.5;">
            </div>
        </div>

        <div class="container p-0" style="margin-top: -150px;">
            <div class="col-sm-12 px-0">
                <div class="rounded-circle profile-feed bg-game text-center f-left" style="margin-top: -5px;position: absolute;">
                    <i class="far fa-user text-white align-middle mt-3" style="font-size: 13pt;"></i>
                </div>
                <div class="p-2 bg-game ml-3 d-flex rounded-right">
                    <p class="text-white m-0 " style="text-indent: 45px;">Created a Challenge</p>
                    <i class="fas fa-gamepad text-white ml-auto mr-1" style="font-size: 12pt"></i>
                </div>
            </div>
        </div>

        <p class="h5 font-arial ml-3 text-white" style="position: absolute; opacity: 1; margin-top: 30px;">Game</p>
        
        <div class="d-flex"  style="margin-top: 125px;">
            <div class="ml-3 mr-auto">
                <p class="h6 m-0"> Your Goals </p>
                <small class="m-0" style="color:grey;"> Your Date </small>
            </div>
            <div class="mx-1">
                <p class="text-white bg-game p-1" style="border-radius: 5px; font-size: 7pt;">#crash</p>
            </div>
        </div>

        <div class="d-flex justify-content-center">
            <div class="p-2">
                <i class="far fa-heart p-2 rounded-circle color-game" style="border: 1px solid #4fc1a7;"></i>
            </div>
            <div class="p-2">
                <i class="far fa-comment p-2 rounded-circle color-game" style="border: 1px solid #4fc1a7;"></i>
            </div>
            <div class="p-2">
                <i class="fas fa-pencil-alt p-2 rounded-circle color-game" style="border: 1px solid #4fc1a7;"></i>
            <div class="clear"></div>
        </div>
    </div>

    <!-- music -->

    <p class="m-0 mt-5" style="text-indent: 55px; color: #b5b3b0; font-family: berlin sans fb;">Adi wahyudi</p>
    <div class="container px-0 bg-white shadow-sm w-content-feed mt-2">

        <div class="img container px-0" id="img-music">
            <div class="container px-0 bg-music" style="height: 140px; border-radius: 25px 5px 5px 5px;opacity:0.5;">
            </div>
        </div>

        <div class="container p-0" style="margin-top: -150px;">
            <div class="col-sm-12 px-0">
                <div class="rounded-circle profile-feed bg-music text-center f-left" style="margin-top: -5px;position: absolute;">
                    <i class="far fa-user text-white align-middle mt-3" style="font-size: 13pt;"></i>
                </div>
                <div class="p-2 bg-music ml-3 d-flex rounded-right">
                    <p class="text-white m-0 " style="text-indent: 45px;">Created a Challenge</p>
                    <i class="fas fas fa-music text-white ml-auto mr-1" style="font-size: 12pt"></i>
                </div>
            </div>
        </div>

        <p class="h5 font-arial ml-3 text-white" style="position: absolute;  margin-top: 30px;">Music</p>
        <div class="d-flex"  style="margin-top: 125px;">
            <div class="ml-3 mr-auto">
                <p class="h6 m-0"> Your Goals </p>
                <small class="m-0" style="color:grey;"> Your Date </small>
            </div>
            <div class="mx-1">
                <p class="text-white bg-music p-1" style="border-radius: 5px; font-size: 7pt;">#crash</p>
            </div>
            <div class="mx-1">
                <p class="text-white bg-music p-1" style="border-radius: 5px; font-size: 7pt;">#crash</p>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="p-2">
                <i class="far fa-heart p-2 rounded-circle color-music" style="border: 1px solid gold;"></i>
            </div>
            <div class="p-2">
                <i class="far fa-comment p-2 rounded-circle color-music" style="border: 1px solid gold;"></i>
            </div>
            <div class="p-2">
                <i class="fas fa-pencil-alt p-2 rounded-circle color-music" style="border: 1px solid gold;"></i>
            <div class="clear"></div>
        </div>
    </div>

    <!-- fashion -->

    <p class="m-0 mt-5" style="text-indent: 55px; color: #b5b3b0; font-family: berlin sans fb;">Adi wahyudi</p>
    <div class="container px-0 bg-white shadow-sm w-content-feed mt-2">

        <div class="img container px-0" id="img-fashion">
            <div class="container px-0 bg-fashion" style="height: 140px; border-radius: 25px 5px 5px 5px;opacity:0.5;">
            </div>
        </div>

        <div class="container p-0" style="margin-top: -150px;">
            <div class="col-sm-12 px-0">
                <div class="rounded-circle profile-feed bg-fashion text-center f-left" style="margin-top: -5px;position: absolute;">
                    <i class="far fa-user text-white align-middle mt-3" style="font-size: 13pt;"></i>
                </div>
                <div class="p-2 bg-fashion ml-3 d-flex rounded-right">
                    <p class="text-white m-0 " style="text-indent: 45px;">Created a Challenge</p>
                    <i class="fas fas fa-tshirt text-white ml-auto mr-1" style="font-size: 12pt"></i>
                </div>
            </div>
        </div>

        <p class="h5 font-arial ml-3 text-white" style="position: absolute;  margin-top: 30px;">Fashion</p>
        <div class="d-flex"  style="margin-top: 125px;">
            <div class="ml-3 mr-auto">
                <p class="h6 m-0"> Your Goals </p>
                <small class="m-0" style="color:grey;"> Your Date </small>
            </div>
            <div class="mx-1">
                <p class="text-white bg-fashion p-1" style="border-radius: 5px; font-size: 7pt;">#crash</p>
            </div>
            <div class="mx-1">
                <p class="text-white bg-fashion p-1" style="border-radius: 5px; font-size: 7pt;">#crash</p>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="p-2">
                <i class="far fa-heart p-2 rounded-circle color-fashion" style="border: 1px solid purple;"></i>
            </div>
            <div class="p-2">
                <i class="far fa-comment p-2 rounded-circle color-fashion" style="border: 1px solid purple;"></i>
            </div>
            <div class="p-2">
                <i class="fas fa-pencil-alt p-2 rounded-circle color-fashion" style="border: 1px solid purple;"></i>
            <div class="clear"></div>
        </div>
    </div>

    <!-- creativity -->

    <p class="m-0 mt-5" style="text-indent: 55px; color: #b5b3b0; font-family: berlin sans fb;">Adi wahyudi</p>
    <div class="container px-0 bg-white shadow-sm w-content-feed mt-2">

        <div class="img container px-0" id="img-creativity">
            <div class="container px-0 bg-creativity" style="height: 140px; border-radius: 25px 5px 5px 5px;opacity:0.5;">
            </div>
        </div>

        <div class="container p-0" style="margin-top: -150px;">
            <div class="col-sm-12 px-0">
                <div class="rounded-circle profile-feed bg-creativity text-center f-left" style="margin-top: -5px;position: absolute;">
                    <i class="far fa-user text-white align-middle mt-3" style="font-size: 13pt;"></i>
                </div>
                <div class="p-2 bg-creativity ml-3 d-flex rounded-right">
                    <p class="text-white m-0 " style="text-indent: 45px;">Created a Challenge</p>
                    <i class="fas fas fa-brain text-white ml-auto mr-1" style="font-size: 12pt"></i>
                </div>
            </div>
        </div>

        <p class="h5 font-arial ml-3 text-white" style="position: absolute;  margin-top: 30px;">Creativity</p>
        <div class="d-flex"  style="margin-top: 125px;">
            <div class="ml-3 mr-auto">
                <p class="h6 m-0"> Your Goals </p>
                <small class="m-0" style="color:grey;"> Your Date </small>
            </div>
            <div class="mx-1">
                <p class="text-white bg-creativity p-1" style="border-radius: 5px; font-size: 7pt;">#crash</p>
            </div>
            <div class="mx-1">
                <p class="text-white bg-creativity p-1" style="border-radius: 5px; font-size: 7pt;">#crash</p>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="p-2">
                <i class="far fa-heart p-2 rounded-circle color-creativity" style="border: 1px solid #ff4d00;"></i>
            </div>
            <div class="p-2">
                <i class="far fa-comment p-2 rounded-circle color-creativity" style="border: 1px solid #ff4d00;"></i>
            </div>
            <div class="p-2">
                <i class="fas fa-pencil-alt p-2 rounded-circle color-creativity" style="border: 1px solid #ff4d00;"></i>
            <div class="clear"></div>
        </div>
    </div>

    <!-- love -->

    <p class="m-0 mt-5" style="text-indent: 55px; color: #b5b3b0; font-family: berlin sans fb;">Adi wahyudi</p>
    <div class="container px-0 bg-white shadow-sm w-content-feed mt-2">

        <div class="img container px-0" id="img-love">
            <div class="container px-0 bg-love" style="height: 140px; border-radius: 25px 5px 5px 5px;opacity:0.5;">
            </div>
        </div>

        <div class="container p-0" style="margin-top: -150px;">
            <div class="col-sm-12 px-0">
                <div class="rounded-circle profile-feed bg-love text-center f-left" style="margin-top: -5px;position: absolute;">
                    <i class="far fa-user text-white align-middle mt-3" style="font-size: 13pt;"></i>
                </div>
                <div class="p-2 bg-love ml-3 d-flex rounded-right">
                    <p class="text-white m-0 " style="text-indent: 45px;">Created a Challenge</p>
                    <i class="fas fas fa-heart text-white ml-auto mr-1" style="font-size: 12pt"></i>
                </div>
            </div>
        </div>

        <p class="h5 font-arial ml-3 text-white" style="position: absolute;  margin-top: 30px;">Love</p>
        <div class="d-flex"  style="margin-top: 125px;">
            <div class="ml-3 mr-auto">
                <p class="h6 m-0"> Your Goals </p>
                <small class="m-0" style="color:grey;"> Your Date </small>
            </div>
            <div class="mx-1">
                <p class="text-white bg-love p-1" style="border-radius: 5px; font-size: 7pt;">#crash</p>
            </div>
            <div class="mx-1">
                <p class="text-white bg-love p-1" style="border-radius: 5px; font-size: 7pt;">#crash</p>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="p-2">
                <i class="far fa-heart p-2 rounded-circle color-love" style="border: 1px solid #ffb3ba;"></i>
            </div>
            <div class="p-2">
                <i class="far fa-comment p-2 rounded-circle color-love" style="border: 1px solid #ffb3ba;"></i>
            </div>
            <div class="p-2">
                <i class="fas fa-pencil-alt p-2 rounded-circle color-love" style="border: 1px solid #ffb3ba;"></i>
            <div class="clear"></div>
        </div>
    </div>

    <!-- finance -->
    
    <p class="m-0 mt-5" style="text-indent: 55px; color: #b5b3b0; font-family: berlin sans fb;">Adi wahyudi</p>
    <div class="container px-0 bg-white shadow-sm w-content-feed mt-2">

        <div class="img container px-0" id="img-finance">
            <div class="container px-0 bg-finance" style="height: 140px; border-radius: 25px 5px 5px 5px;opacity:0.5;">
            </div>
        </div>

        <div class="container p-0" style="margin-top: -150px;">
            <div class="col-sm-12 px-0">
                <div class="rounded-circle profile-feed bg-finance text-center f-left" style="margin-top: -5px;position: absolute;">
                    <i class="far fa-user text-white align-middle mt-3" style="font-size: 13pt;"></i>
                </div>
                <div class="p-2 bg-finance ml-3 d-flex rounded-right">
                    <p class="text-white m-0 " style="text-indent: 45px;">Created a Challenge</p>
                    <i class="fas fa-money-bill-alt text-white ml-auto mr-1"  style="font-size: 12pt"></i>
                </div>
            </div>
        </div>

        <p class="h5 font-arial ml-3 text-white" style="position: absolute; opacity: 1; margin-top: 30px;">Finance</p>
        
        <div class="d-flex"  style="margin-top: 125px;">
            <div class="ml-3 mr-auto">
                <p class="h6 m-0"> Your Goals </p>
                <small class="m-0" style="color:grey;"> Your Date </small>
            </div>
            <div class="mx-1">
                <p class="text-white bg-finance p-1" style="border-radius: 5px; font-size: 7pt;">#crash</p>
            </div>
        </div>

        <div class="d-flex justify-content-center">
            <div class="p-2">
                <i class="far fa-heart p-2 rounded-circle color-finance" style="border: 1px solid wheat;"></i>
            </div>
            <div class="p-2">
                <i class="far fa-comment p-2 rounded-circle color-finance" style="border: 1px solid wheat;"></i>
            </div>
            <div class="p-2">
                <i class="fas fa-pencil-alt p-2 rounded-circle color-finance" style="border: 1px solid wheat;"></i>
            <div class="clear"></div>
        </div>
    </div>

    <!-- health -->

    <p class="m-0 mt-5" style="text-indent: 55px; color: #b5b3b0; font-family: berlin sans fb;">Adi wahyudi</p>
    <div class="container px-0 bg-white shadow-sm w-content-feed mt-2">

        <div class="img container px-0" id="img-health">
            <div class="container px-0 bg-health" style="height: 140px; border-radius: 25px 5px 5px 5px;opacity:0.5;">
            </div>
        </div>

        <div class="container p-0" style="margin-top: -150px;">
            <div class="col-sm-12 px-0">
                <div class="rounded-circle profile-feed bg-health text-center f-left" style="margin-top: -5px;position: absolute;">
                    <i class="far fa-user text-white align-middle mt-3" style="font-size: 13pt;"></i>
                </div>
                <div class="p-2 bg-health ml-3 d-flex rounded-right">
                    <p class="text-white m-0 " style="text-indent: 45px;">Created a Challenge</p>
                    <i class="fas fa-medkit text-white ml-auto mr-1" style="font-size: 12pt"></i>
                </div>
            </div>
        </div>

        <p class="h5 font-arial ml-3 text-white" style="position: absolute; opacity: 1; margin-top: 30px;">Health</p>
        
        <div class="d-flex"  style="margin-top: 125px;">
            <div class="ml-3 mr-auto">
                <p class="h6 m-0"> Your Goals </p>
                <small class="m-0" style="color:grey;"> Your Date </small>
            </div>
            <div class="mx-1">
                <p class="text-white bg-health p-1" style="border-radius: 5px; font-size: 7pt;">#crash</p>
            </div>
        </div>

        <div class="d-flex justify-content-center">
            <div class="p-2">
                <i class="far fa-heart p-2 rounded-circle color-health" style="border: 1px solid lightblue;"></i>
            </div>
            <div class="p-2">
                <i class="far fa-comment p-2 rounded-circle color-health" style="border: 1px solid lightblue;"></i>
            </div>
            <div class="p-2">
                <i class="fas fa-pencil-alt p-2 rounded-circle color-health" style="border: 1px solid lightblue;"></i>
            <div class="clear"></div>
        </div>
    </div>

    <!-- gastronomy -->
    
    <p class="m-0 mt-5" style="text-indent: 55px; color: #b5b3b0; font-family: berlin sans fb;">Adi wahyudi</p>
    <div class="container px-0 bg-white shadow-sm w-content-feed mt-2">

        <div class="img container px-0" id="img-gastronomy">
            <div class="container px-0 bg-gastronomy" style="height: 140px; border-radius: 25px 5px 5px 5px;opacity:0.5;">
            </div>
        </div>

        <div class="container p-0" style="margin-top: -150px;">
            <div class="col-sm-12 px-0">
                <div class="rounded-circle profile-feed bg-gastronomy text-center f-left" style="margin-top: -5px;position: absolute;">
                    <i class="far fa-user text-white align-middle mt-3" style="font-size: 13pt;"></i>
                </div>
                <div class="p-2 bg-gastronomy ml-3 d-flex rounded-right">
                    <p class="text-white m-0 " style="text-indent: 45px;">Created a Challenge</p>
                    <i class="fas fa-utensils text-white ml-auto mr-1"  style="font-size: 12pt"></i>
                </div>
            </div>
        </div>

        <p class="h5 font-arial ml-3 text-white" style="position: absolute; opacity: 1; margin-top: 30px;">Gastronomy</p>
        
        <div class="d-flex"  style="margin-top: 125px;">
            <div class="ml-3 mr-auto">
                <p class="h6 m-0"> Your Goals </p>
                <small class="m-0" style="color:grey;"> Your Date </small>
            </div>
            <div class="mx-1">
                <p class="text-white bg-gastronomy p-1" style="border-radius: 5px; font-size: 7pt;">#crash</p>
            </div>
        </div>

        <div class="d-flex justify-content-center">
            <div class="p-2">
                <i class="far fa-heart p-2 rounded-circle color-gastronomy" style="border: 1px solid indianred;"></i>
            </div>
            <div class="p-2">
                <i class="far fa-comment p-2 rounded-circle color-gastronomy" style="border: 1px solid indianred;"></i>
            </div>
            <div class="p-2">
                <i class="fas fa-pencil-alt p-2 rounded-circle color-gastronomy" style="border: 1px solid indianred;"></i>
            <div class="clear"></div>
        </div>
    </div>

    <!-- makeup -->

    <p class="m-0 mt-5" style="text-indent: 55px; color: #b5b3b0; font-family: berlin sans fb;">Adi wahyudi</p>
    <div class="container px-0 bg-white shadow-sm w-content-feed mt-2">

        <div class="img container px-0" id="img-makeup">
            <div class="container px-0 bg-makeup" style="height: 140px; border-radius: 25px 5px 5px 5px;opacity:0.5;">
            </div>
        </div>

        <div class="container p-0" style="margin-top: -150px;">
            <div class="col-sm-12 px-0">
                <div class="rounded-circle profile-feed bg-makeup text-center f-left" style="margin-top: -5px;position: absolute;">
                    <i class="far fa-user text-white align-middle mt-3" style="font-size: 13pt;"></i>
                </div>
                <div class="p-2 bg-makeup ml-3 d-flex rounded-right">
                    <p class="text-white m-0 " style="text-indent: 45px;">Created a Challenge</p>
                    <i class="fas fa-theater-masks text-white ml-auto mr-1" style="font-size: 12pt"></i>
                </div>
            </div>
        </div>

        <p class="h5 font-arial ml-3 text-white" style="position: absolute; opacity: 1; margin-top: 30px;">makeup</p>
        
        <div class="d-flex"  style="margin-top: 125px;">
            <div class="ml-3 mr-auto">
                <p class="h6 m-0"> Your Goals </p>
                <small class="m-0" style="color:grey;"> Your Date </small>
            </div>
            <div class="mx-1">
                <p class="text-white bg-makeup p-1" style="border-radius: 5px; font-size: 7pt;">#crash</p>
            </div>
        </div>

        <div class="d-flex justify-content-center">
            <div class="p-2">
                <i class="far fa-heart p-2 rounded-circle color-makeup" style="border: 1px solid lightsalmon;"></i>
            </div>
            <div class="p-2">
                <i class="far fa-comment p-2 rounded-circle color-makeup" style="border: 1px solid lightsalmon;"></i>
            </div>
            <div class="p-2">
                <i class="fas fa-pencil-alt p-2 rounded-circle color-makeup" style="border: 1px solid lightsalmon;"></i>
            <div class="clear"></div>
        </div>
    </div>

    <!-- productivity -->
    
    <p class="m-0 mt-5" style="text-indent: 55px; color: #b5b3b0; font-family: berlin sans fb;">Adi wahyudi</p>
    <div class="container px-0 bg-white shadow-sm w-content-feed mt-2">

        <div class="img container px-0" id="img-productivity">
            <div class="container px-0 bg-productivity" style="height: 140px; border-radius: 25px 5px 5px 5px;opacity:0.5;">
            </div>
        </div>

        <div class="container p-0" style="margin-top: -150px;">
            <div class="col-sm-12 px-0">
                <div class="rounded-circle profile-feed bg-productivity text-center f-left" style="margin-top: -5px;position: absolute;">
                    <i class="far fa-user text-white align-middle mt-3" style="font-size: 13pt;"></i>
                </div>
                <div class="p-2 bg-productivity ml-3 d-flex rounded-right">
                    <p class="text-white m-0 " style="text-indent: 45px;">Created a Challenge</p>
                    <i class="fas fa-business-time text-white ml-auto mr-1"  style="font-size: 12pt"></i>
                </div>
            </div>
        </div>

        <p class="h5 font-arial ml-3 text-white" style="position: absolute; opacity: 1; margin-top: 30px;">productivity</p>
        
        <div class="d-flex"  style="margin-top: 125px;">
            <div class="ml-3 mr-auto">
                <p class="h6 m-0"> Your Goals </p>
                <small class="m-0" style="color:grey;"> Your Date </small>
            </div>
            <div class="mx-1">
                <p class="text-white bg-productivity p-1" style="border-radius: 5px; font-size: 7pt;">#crash</p>
            </div>
        </div>

        <div class="d-flex justify-content-center">
            <div class="p-2">
                <i class="far fa-heart p-2 rounded-circle color-productivity" style="border: 1px solid darkslateblue;"></i>
            </div>
            <div class="p-2">
                <i class="far fa-comment p-2 rounded-circle color-productivity" style="border: 1px solid darkslateblue;"></i>
            </div>
            <div class="p-2">
                <i class="fas fa-pencil-alt p-2 rounded-circle color-productivity" style="border: 1px solid darkslateblue;"></i>
            <div class="clear"></div>
        </div>
    </div>



        <!-- won an achievement -->

    <p class="m-0 mt-5" style="text-indent: 55px; color: #b5b3b0; font-family: berlin sans fb;">Adi wahyudi</p>
    <div class="container px-0 bg-white shadow-sm w-content-achievement">

        <div class="container p-0">
            <div class="col-sm-12 px-0">
                <div class="rounded-circle profile-feed bg-sport text-center f-left" style="margin-top: -5px;position: absolute;">
                    <i class="far fa-user text-white align-middle mt-3" style="font-size: 13pt;"></i>
                </div>
                <div class="p-2 bg-sport ml-3 d-flex rounded-right">
                    <p class="text-white m-0 " style="text-indent: 45px;">Won an achievement</p>
                    <i class="fas fas fa-medal text-white ml-auto mr-1" style="font-size: 12pt"></i>
                </div>
            </div>
        </div>

        <div class="ml-3 f-left" style="margin-top: 25px; width: 60%;">
            <p class="h5 m-0 color-sport"> Achievement  <span style="color: gold;">+30p</span></p>
            <small class="m-0" style="color:grey;"> Accomplish 20 days successfully on a single "30 challenge" </small>
        </div>
        <div class="f-right ml-2" style="margin-top: 35px; width: 30%;">
            <i class="fas fa-trophy" style="color: gold; font-size: 25pt"></i>
        </div>

        <div class="clear"></div>

        <div class="d-flex justify-content-center mt-3">
            <div class="p-2">
                <i class="far fa-heart p-2 rounded-circle color-sport" style="border: 1px solid #25a9f0;"></i>
            </div>
            <div class="p-2">
                <i class="far fa-comment p-2 rounded-circle color-sport" style="border: 1px solid #25a9f0;"></i>
            </div>
            <div class="p-2">
                <i class="fas fa-pencil-alt p-2 rounded-circle color-sport" style="border: 1px solid #25a9f0;"></i>
            <div class="clear"></div>
        </div>
    </div>

    <!-- upadated a challenge -->

        <!-- sport -->

    <p class="m-0 mt-5" style="text-indent: 55px; color: #b5b3b0; font-family: berlin sans fb;">Adi wahyudi</p>
    <div class="container px-0 bg-white shadow-sm w-content-achievement">

        <div class="container p-0">
            <div class="col-sm-12 px-0">
                <div class="rounded-circle profile-feed bg-sport text-center f-left" style="margin-top: -5px;position: absolute;">
                    <i class="far fa-user text-white align-middle mt-3" style="font-size: 13pt;"></i>
                </div>
                <div class="p-2 bg-sport ml-3 d-flex rounded-right">
                    <p class="text-white m-0 " style="text-indent: 45px;">Updated a Challenge</p>
                    <i class="fas fa-volleyball-ball text-white ml-auto mr-1" style="font-size: 12pt"></i>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center" style="margin-top: 20px;">
            @for ($i = 1; $i <= 30; $i++)

                <div class="rounded-circle" style="width: 5px; height: 5px; background: grey; margin-left: 3px;"></div>

            @endfor
        </div>

        <div class="ml-3 f-left" style="margin-top: 25px; width: 60%;">
            <p class="h5 m-0 color-sport"><!-- title -->Sport</p>
            <small class="m-0" style="color:grey;"> Describe tell the word </small>
        </div>

        <div class="clear"></div>

        <div class="d-flex justify-content-center mt-3">
            <div class="p-2">
                <i class="far fa-heart p-2 rounded-circle color-sport" style="border: 1px solid #25a9f0;"></i>
            </div>
            <div class="p-2">
                <i class="far fa-comment p-2 rounded-circle color-sport" style="border: 1px solid #25a9f0;"></i>
            </div>
            <div class="p-2">
                <i class="fas fa-pencil-alt p-2 rounded-circle color-sport" style="border: 1px solid #25a9f0;"></i>
            <div class="clear"></div>
        </div>
    </div>

    <!-- education -->

    <p class="m-0 mt-5" style="text-indent: 55px; color: #b5b3b0; font-family: berlin sans fb;">Adi wahyudi</p>
    <div class="container px-0 bg-white shadow-sm w-content-achievement">

        <div class="container p-0">
            <div class="col-sm-12 px-0">
                <div class="rounded-circle profile-feed bg-education text-center f-left" style="margin-top: -5px;position: absolute;">
                    <i class="far fa-user text-white align-middle mt-3" style="font-size: 13pt;"></i>
                </div>
                <div class="p-2 bg-education ml-3 d-flex rounded-right">
                    <p class="text-white m-0 " style="text-indent: 45px;">Updated a Challenge</p>
                    <i class="fas fas fa-book-reader text-white ml-auto mr-1" style="font-size: 12pt"></i>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center" style="margin-top: 20px;">
            @for ($i = 1; $i <= 30; $i++)

                <div class="rounded-circle" style="width: 5px; height: 5px; background: grey; margin-left: 3px;"></div>

            @endfor
        </div>

        <div class="ml-3 f-left" style="margin-top: 25px; width: 60%;">
            <p class="h5 m-0 color-education">Education</p>
            <small class="m-0" style="color:grey;"> Describe tell the word </small>
        </div>

        <div class="clear"></div>

        <div class="d-flex justify-content-center mt-3">
            <div class="p-2">
                <i class="far fa-heart p-2 rounded-circle color-education" style="border: 1px solid cadetblue;"></i>
            </div>
            <div class="p-2">
                <i class="far fa-comment p-2 rounded-circle color-education" style="border: 1px solid cadetblue;"></i>
            </div>
            <div class="p-2">
                <i class="fas fa-pencil-alt p-2 rounded-circle color-education" style="border: 1px solid cadetblue;"></i>
            <div class="clear"></div>
        </div>
    </div>

        <!-- game -->

    <p class="m-0 mt-5" style="text-indent: 55px; color: #b5b3b0; font-family: berlin sans fb;">Adi wahyudi</p>
    <div class="container px-0 bg-white shadow-sm w-content-achievement">

        <div class="container p-0">
            <div class="col-sm-12 px-0">
                <div class="rounded-circle profile-feed bg-game text-center f-left" style="margin-top: -5px;position: absolute;">
                    <i class="far fa-user text-white align-middle mt-3" style="font-size: 13pt;"></i>
                </div>
                <div class="p-2 bg-game ml-3 d-flex rounded-right">
                    <p class="text-white m-0 " style="text-indent: 45px;">Updated a Challenge</p>
                    <i class="fas fa-gamepad text-white ml-auto mr-1" style="font-size: 12pt"></i>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center" style="margin-top: 20px;">
            @for ($i = 1; $i <= 30; $i++)

                <div class="rounded-circle" style="width: 5px; height: 5px; background: grey; margin-left: 3px;"></div>

            @endfor
        </div>

        <div class="ml-3 f-left" style="margin-top: 25px; width: 60%;">
            <p class="h5 m-0 color-game">Game</p>
            <small class="m-0" style="color:grey;"> Describe tell the word </small>
        </div>

        <div class="clear"></div>

        <div class="d-flex justify-content-center mt-3">
            <div class="p-2">
                <i class="far fa-heart p-2 rounded-circle color-game" style="border: 1px solid #4fc1a7;"></i>
            </div>
            <div class="p-2">
                <i class="far fa-comment p-2 rounded-circle color-game" style="border: 1px solid #4fc1a7;"></i>
            </div>
            <div class="p-2">
                <i class="fas fa-pencil-alt p-2 rounded-circle color-game" style="border: 1px solid #4fc1a7;"></i>
            <div class="clear"></div>
        </div>
    </div>

    <!-- love -->

    <p class="m-0 mt-5" style="text-indent: 55px; color: #b5b3b0; font-family: berlin sans fb;">Adi wahyudi</p>
    <div class="container px-0 bg-white shadow-sm w-content-achievement">

        <div class="container p-0">
            <div class="col-sm-12 px-0">
                <div class="rounded-circle profile-feed bg-love text-center f-left" style="margin-top: -5px;position: absolute;">
                    <i class="far fa-user text-white align-middle mt-3" style="font-size: 13pt;"></i>
                </div>
                <div class="p-2 bg-love ml-3 d-flex rounded-right">
                    <p class="text-white m-0 " style="text-indent: 45px;">Updated a Challenge</p>
                    <i class="fas fa-heart text-white ml-auto mr-1" style="font-size: 12pt"></i>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center" style="margin-top: 20px;">
            @for ($i = 1; $i <= 30; $i++)

                <div class="rounded-circle" style="width: 5px; height: 5px; background: grey; margin-left: 3px;"></div>

            @endfor
        </div>

        <div class="ml-3 f-left" style="margin-top: 25px; width: 60%;">
            <p class="h5 m-0 color-love">Love</p>
            <small class="m-0" style="color:grey;"> Describe tell the word </small>
        </div>

        <div class="clear"></div>

        <div class="d-flex justify-content-center mt-3">
            <div class="p-2">
                <i class="far fa-heart p-2 rounded-circle color-love" style="border: 1px solid #ffb3ba;"></i>
            </div>
            <div class="p-2">
                <i class="far fa-comment p-2 rounded-circle color-love" style="border: 1px solid #ffb3ba;"></i>
            </div>
            <div class="p-2">
                <i class="fas fa-pencil-alt p-2 rounded-circle color-love" style="border: 1px solid #ffb3ba;"></i>
            <div class="clear"></div>
        </div>
    </div>

    <!-- health -->

    <p class="m-0 mt-5" style="text-indent: 55px; color: #b5b3b0; font-family: berlin sans fb;">Adi wahyudi</p>
    <div class="container px-0 bg-white shadow-sm w-content-achievement">

        <div class="container p-0">
            <div class="col-sm-12 px-0">
                <div class="rounded-circle profile-feed bg-health text-center f-left" style="margin-top: -5px;position: absolute;">
                    <i class="far fa-user text-white align-middle mt-3" style="font-size: 13pt;"></i>
                </div>
                <div class="p-2 bg-health ml-3 d-flex rounded-right">
                    <p class="text-white m-0 " style="text-indent: 45px;">Updated a Challenge</p>
                    <i class="fas fa-medkit text-white ml-auto mr-1" style="font-size: 12pt"></i>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center" style="margin-top: 20px;">
            @for ($i = 1; $i <= 30; $i++)

                <div class="rounded-circle" style="width: 5px; height: 5px; background: grey; margin-left: 3px;"></div>

            @endfor
        </div>

        <div class="ml-3 f-left" style="margin-top: 25px; width: 60%;">
            <p class="h5 m-0 color-health">Health</p>
            <small class="m-0" style="color:grey;"> Describe tell the word </small>
        </div>

        <div class="clear"></div>

        <div class="d-flex justify-content-center mt-3">
            <div class="p-2">
                <i class="far fa-heart p-2 rounded-circle color-health" style="border: 1px solid lightblue;"></i>
            </div>
            <div class="p-2">
                <i class="far fa-comment p-2 rounded-circle color-health" style="border: 1px solid lightblue;"></i>
            </div>
            <div class="p-2">
                <i class="fas fa-pencil-alt p-2 rounded-circle color-health" style="border: 1px solid lightblue;"></i>
            <div class="clear"></div>
        </div>
    </div>

    <!-- productivity -->

    <p class="m-0 mt-5" style="text-indent: 55px; color: #b5b3b0; font-family: berlin sans fb;">Adi wahyudi</p>
    <div class="container px-0 bg-white shadow-sm w-content-achievement">

        <div class="container p-0">
            <div class="col-sm-12 px-0">
                <div class="rounded-circle profile-feed bg-productivity text-center f-left" style="margin-top: -5px;position: absolute;">
                    <i class="far fa-user text-white align-middle mt-3" style="font-size: 13pt;"></i>
                </div>
                <div class="p-2 bg-productivity ml-3 d-flex rounded-right">
                    <p class="text-white m-0 " style="text-indent: 45px;">Updated a Challenge</p>
                    <i class="fas fa-business-time text-white ml-auto mr-1" style="font-size: 12pt"></i>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center" style="margin-top: 20px;">
            @for ($i = 1; $i <= 30; $i++)

                <div class="rounded-circle" style="width: 5px; height: 5px; background: grey; margin-left: 3px;"></div>

            @endfor
        </div>

        <div class="ml-3 f-left" style="margin-top: 25px; width: 60%;">
            <p class="h5 m-0 color-productivity">Productivity</p>
            <small class="m-0" style="color:grey;"> Describe tell the word </small>
        </div>

        <div class="clear"></div>

        <div class="d-flex justify-content-center mt-3">
            <div class="p-2">
                <i class="far fa-heart p-2 rounded-circle color-productivity" style="border: 1px solid darkslateblue;"></i>
            </div>
            <div class="p-2">
                <i class="far fa-comment p-2 rounded-circle color-productivity" style="border: 1px solid darkslateblue;"></i>
            </div>
            <div class="p-2">
                <i class="fas fa-pencil-alt p-2 rounded-circle color-productivity" style="border: 1px solid darkslateblue;"></i>
            <div class="clear"></div>
        </div>
    </div>

    <!-- makeup -->

    <p class="m-0 mt-5" style="text-indent: 55px; color: #b5b3b0; font-family: berlin sans fb;">Adi wahyudi</p>
    <div class="container px-0 bg-white shadow-sm w-content-achievement">

        <div class="container p-0">
            <div class="col-sm-12 px-0">
                <div class="rounded-circle profile-feed bg-makeup text-center f-left" style="margin-top: -5px;position: absolute;">
                    <i class="far fa-user text-white align-middle mt-3" style="font-size: 13pt;"></i>
                </div>
                <div class="p-2 bg-makeup ml-3 d-flex rounded-right">
                    <p class="text-white m-0 " style="text-indent: 45px;">Updated a Challenge</p>
                    <i class="fas fa-theater-masks text-white ml-auto mr-1" style="font-size: 12pt"></i>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center" style="margin-top: 20px;">
            @for ($i = 1; $i <= 30; $i++)

                <div class="rounded-circle" style="width: 5px; height: 5px; background: grey; margin-left: 3px;"></div>

            @endfor
        </div>

        <div class="ml-3 f-left" style="margin-top: 25px; width: 60%;">
            <p class="h5 m-0 color-makeup">Makeup</p>
            <small class="m-0" style="color:grey;"> Describe tell the word </small>
        </div>

        <div class="clear"></div>

        <div class="d-flex justify-content-center mt-3">
            <div class="p-2">
                <i class="far fa-heart p-2 rounded-circle color-makeup" style="border: 1px solid lightsalmon;"></i>
            </div>
            <div class="p-2">
                <i class="far fa-comment p-2 rounded-circle color-makeup" style="border: 1px solid lightsalmon;"></i>
            </div>
            <div class="p-2">
                <i class="fas fa-pencil-alt p-2 rounded-circle color-makeup" style="border: 1px solid lightsalmon;"></i>
            <div class="clear"></div>
        </div>
    </div>

    <!-- gastronomy -->

    <p class="m-0 mt-5" style="text-indent: 55px; color: #b5b3b0; font-family: berlin sans fb;">Adi wahyudi</p>
    <div class="container px-0 bg-white shadow-sm w-content-achievement">

        <div class="container p-0">
            <div class="col-sm-12 px-0">
                <div class="rounded-circle profile-feed bg-gastronomy text-center f-left" style="margin-top: -5px;position: absolute;">
                    <i class="far fa-user text-white align-middle mt-3" style="font-size: 13pt;"></i>
                </div>
                <div class="p-2 bg-gastronomy ml-3 d-flex rounded-right">
                    <p class="text-white m-0 " style="text-indent: 45px;">Updated a Challenge</p>
                    <i class="fas fa-utensils text-white ml-auto mr-1" style="font-size: 12pt"></i>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center" style="margin-top: 20px;">
            @for ($i = 1; $i <= 30; $i++)

                <div class="rounded-circle" style="width: 5px; height: 5px; background: grey; margin-left: 3px;"></div>

            @endfor
        </div>

        <div class="ml-3 f-left" style="margin-top: 25px; width: 60%;">
            <p class="h5 m-0 color-gastronomy">Gastronomy</p>
            <small class="m-0" style="color:grey;"> Describe tell the word </small>
        </div>

        <div class="clear"></div>

        <div class="d-flex justify-content-center mt-3">
            <div class="p-2">
                <i class="far fa-heart p-2 rounded-circle color-gastronomy" style="border: 1px solid indianred;"></i>
            </div>
            <div class="p-2">
                <i class="far fa-comment p-2 rounded-circle color-gastronomy" style="border: 1px solid indianred;"></i>
            </div>
            <div class="p-2">
                <i class="fas fa-pencil-alt p-2 rounded-circle color-gastronomy" style="border: 1px solid indianred;"></i>
            <div class="clear"></div>
        </div>
    </div>

    <!-- finance -->

    <p class="m-0 mt-5" style="text-indent: 55px; color: #b5b3b0; font-family: berlin sans fb;">Adi wahyudi</p>
    <div class="container px-0 bg-white shadow-sm w-content-achievement">

        <div class="container p-0">
            <div class="col-sm-12 px-0">
                <div class="rounded-circle profile-feed bg-finance text-center f-left" style="margin-top: -5px;position: absolute;">
                    <i class="far fa-user text-white align-middle mt-3" style="font-size: 13pt;"></i>
                </div>
                <div class="p-2 bg-finance ml-3 d-flex rounded-right">
                    <p class="text-white m-0 " style="text-indent: 45px;">Updated a Challenge</p>
                    <i class="fas fa-money-bill-alt text-white ml-auto mr-1" style="font-size: 12pt"></i>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center" style="margin-top: 20px;">
            @for ($i = 1; $i <= 30; $i++)

                <div class="rounded-circle" style="width: 5px; height: 5px; background: grey; margin-left: 3px;"></div>

            @endfor
        </div>

        <div class="ml-3 f-left" style="margin-top: 25px; width: 60%;">
            <p class="h5 m-0 color-finance">Finance</p>
            <small class="m-0" style="color:grey;"> Describe tell the word </small>
        </div>

        <div class="clear"></div>

        <div class="d-flex justify-content-center mt-3">
            <div class="p-2">
                <i class="far fa-heart p-2 rounded-circle color-finance" style="border: 1px solid wheat;"></i>
            </div>
            <div class="p-2">
                <i class="far fa-comment p-2 rounded-circle color-finance" style="border: 1px solid wheat;"></i>
            </div>
            <div class="p-2">
                <i class="fas fa-pencil-alt p-2 rounded-circle color-finance" style="border: 1px solid wheat;"></i>
            <div class="clear"></div>
        </div>
    </div>

    <!-- fashion -->

    <p class="m-0 mt-5" style="text-indent: 55px; color: #b5b3b0; font-family: berlin sans fb;">Adi wahyudi</p>
    <div class="container px-0 bg-white shadow-sm w-content-achievement">

        <div class="container p-0">
            <div class="col-sm-12 px-0">
                <div class="rounded-circle profile-feed bg-fashion text-center f-left" style="margin-top: -5px;position: absolute;">
                    <i class="far fa-user text-white align-middle mt-3" style="font-size: 13pt;"></i>
                </div>
                <div class="p-2 bg-fashion ml-3 d-flex rounded-right">
                    <p class="text-white m-0 " style="text-indent: 45px;">Updated a Challenge</p>
                    <i class="fas fa-tshirt text-white ml-auto mr-1" style="font-size: 12pt"></i>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center" style="margin-top: 20px;">
            @for ($i = 1; $i <= 30; $i++)

                <div class="rounded-circle" style="width: 5px; height: 5px; background: grey; margin-left: 3px;"></div>

            @endfor
        </div>

        <div class="ml-3 f-left" style="margin-top: 25px; width: 60%;">
            <p class="h5 m-0 color-fashion">Fashion</p>
            <small class="m-0" style="color:grey;"> Describe tell the word </small>
        </div>

        <div class="clear"></div>

        <div class="d-flex justify-content-center mt-3">
            <div class="p-2">
                <i class="far fa-heart p-2 rounded-circle color-fashion" style="border: 1px solid purple;"></i>
            </div>
            <div class="p-2">
                <i class="far fa-comment p-2 rounded-circle color-fashion" style="border: 1px solid purple;"></i>
            </div>
            <div class="p-2">
                <i class="fas fa-pencil-alt p-2 rounded-circle color-fashion" style="border: 1px solid purple;"></i>
            <div class="clear"></div>
        </div>
    </div>

    <!-- creativity -->

    <p class="m-0 mt-5" style="text-indent: 55px; color: #b5b3b0; font-family: berlin sans fb;">Adi wahyudi</p>
    <div class="container px-0 bg-white shadow-sm w-content-achievement">

        <div class="container p-0">
            <div class="col-sm-12 px-0">
                <div class="rounded-circle profile-feed bg-creativity text-center f-left" style="margin-top: -5px;position: absolute;">
                    <i class="far fa-user text-white align-middle mt-3" style="font-size: 13pt;"></i>
                </div>
                <div class="p-2 bg-creativity ml-3 d-flex rounded-right">
                    <p class="text-white m-0 " style="text-indent: 45px;">Updated a Challenge</p>
                    <i class="fas fa-brain text-white ml-auto mr-1" style="font-size: 12pt"></i>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center" style="margin-top: 20px;">
            @for ($i = 1; $i <= 30; $i++)

                <div class="rounded-circle" style="width: 5px; height: 5px; background: grey; margin-left: 3px;"></div>

            @endfor
        </div>

        <div class="ml-3 f-left" style="margin-top: 25px; width: 60%;">
            <p class="h5 m-0 color-creativity">Creativity</p>
            <small class="m-0" style="color:grey;"> Describe tell the word </small>
        </div>

        <div class="clear"></div>

        <div class="d-flex justify-content-center mt-3">
            <div class="p-2">
                <i class="far fa-heart p-2 rounded-circle color-creativity" style="border: 1px solid #ff4d00;"></i>
            </div>
            <div class="p-2">
                <i class="far fa-comment p-2 rounded-circle color-creativity" style="border: 1px solid #ff4d00;"></i>
            </div>
            <div class="p-2">
                <i class="fas fa-pencil-alt p-2 rounded-circle color-creativity" style="border: 1px solid #ff4d00;"></i>
            <div class="clear"></div>
        </div>
    </div>

    <!-- music -->

    <p class="m-0 mt-5" style="text-indent: 55px; color: #b5b3b0; font-family: berlin sans fb;">Adi wahyudi</p>
    <div class="container px-0 bg-white shadow-sm w-content-achievement">

        <div class="container p-0">
            <div class="col-sm-12 px-0">
                <div class="rounded-circle profile-feed bg-music text-center f-left" style="margin-top: -5px;position: absolute;">
                    <i class="far fa-user text-white align-middle mt-3" style="font-size: 13pt;"></i>
                </div>
                <div class="p-2 bg-music ml-3 d-flex rounded-right">
                    <p class="text-white m-0 " style="text-indent: 45px;">Updated a Challenge</p>
                    <i class="fas fa-music text-white ml-auto mr-1" style="font-size: 12pt"></i>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center" style="margin-top: 20px;">
            @for ($i = 1; $i <= 30; $i++)

                <div class="rounded-circle" style="width: 5px; height: 5px; background: grey; margin-left: 3px;"></div>

            @endfor
        </div>

        <div class="ml-3 f-left" style="margin-top: 25px; width: 60%;">
            <p class="h5 m-0 color-music">Music</p>
            <small class="m-0" style="color:grey;"> Describe tell the word </small>
        </div>

        <div class="clear"></div>

        <div class="d-flex justify-content-center mt-3">
            <div class="p-2">
                <i class="far fa-heart p-2 rounded-circle color-music" style="border: 1px solid gold;"></i>
            </div>
            <div class="p-2">
                <i class="far fa-comment p-2 rounded-circle color-music" style="border: 1px solid gold;"></i>
            </div>
            <div class="p-2">
                <i class="fas fa-pencil-alt p-2 rounded-circle color-music" style="border: 1px solid gold;"></i>
            <div class="clear"></div>
        </div>
    </div>

    <!-- navigasi -->

    <section class="navbar fixed-bottom bg-white" id="navbar" style="box-shadow: 1px 1px 2px 1px #dbdbdb;">
        
            <div class="container rounded-top  d-flex justify-content-between">
                    <div class="col-xs-3" id="nav-feed">
                        <center>
                            <a href="{{route('feed')}}" class="add-class-nav">
                                <div>
                                    <i class="fas fa-clock nav-icon"></i>
                                </div>
                                <p class="nav-font">Timeline</p>
                            </a>
                        </center>
                    </div>
                    <div class="col-xs-3" id="nav-challenges">
                        <center>
                            <a href="{{route('challenge.index')}}" style="color: #bdbbbb">
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
                            <a href="{{route('search')}}" style="color: #bdbbbb">
                                <div>
                                    <i class="fas fa-search nav-icon"></i>
                                </div>
                                <p class="nav-font">Search</p>
                            </a>
                        </center>
                    </div>
            </div>
        
        </section>
</body>
</html>