<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.css')}}">
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <link rel="stylesheet" href="/css/app.css">
    <title>Notification</title>
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
    </style>
</head>
<body>
    <div class="container text-center shadow-sm rounded-bottom bg-nav mb-4 fixed-top">
        <div class="d-flex justify-content-between py-3">

            <div class="bd-highlight">
                <a href="{{route('feed')}}">
                    <i class="fas fa-arrow-left text-white" style="font-size: 13pt;"></i>
                </a>
            </div>
            <div class="flex-grow-1 bd-highlight h6 text-white font-berlin">Notification</div>
        </div>
    </div>

    <section>
        <div class="container rounded d-flex align-items-center bg-white shadow-sm py-2 px-2" style="width:95%; margin: auto;">
            <div class="w-100">
                <i class="fas fa-crown rounded-circle f-left ml-2 mr-3" style="font-size: 10pt;color: gold; border: 1px solid lightblue; padding: 12px 12px;"></i>
                <div class="">
                    <p class="mb-0" style="color: lightblue; font-family: berlin sans fb; font-size: 11pt">King of the hill</p>
                    <p class="mb-0" style="color: lightgray; font-family: arial;  font-size: 8pt;">You got a achievement</p>
                </div>
            </div>
            <div class="flex-shrink-1" style="leftt: 100%;">
                <i class="fas fa-trophy" style="color: gold; font-size: 11pt;"></i>
                <p class="mb-0" style="color: lightblue; font-size: 7pt;">1 h</p>
            </div>
        </div>

        <div class="container rounded d-flex align-items-center bg-white shadow-sm py-2 px-2 mt-2" style="width:95%; margin: auto;">
            <div class="w-100">
                <i class="fas fa-share-alt rounded-circle f-left ml-2 mr-3" style="font-size: 10pt;color: gold; border: 1px solid lightblue; padding: 12px 14px;"></i>
                <div class="">
                    <p class="mb-0" style="color: lightblue; font-family: berlin sans fb; font-size: 11pt">Spread the world</p>
                    <p class="mb-0" style="color: lightgray; font-family: arial;  font-size: 8pt;">You got a achievement</p>
                </div>
            </div>
            <div class="flex-shrink-1" style="leftt: 100%;">
                <i class="fas fa-trophy" style="color: gold; font-size: 11pt;"></i>
                <p class="mb-0" style="color: lightblue; font-size: 7pt;">1 h</p>
            </div>
        </div>

        <div class="container rounded d-flex align-items-center bg-white shadow-sm py-2 px-2 mt-2" style="width:95%; margin: auto;">
            <div class="w-100">
                <i class="fas fa-camera-retro rounded-circle f-left ml-2 mr-3" style="font-size: 10pt;color: gold; border: 1px solid lightblue; padding: 12px 13px;"></i>
                <div class="">
                    <p class="mb-0" style="color: lightblue; font-family: berlin sans fb; font-size: 11pt">Keep calm and take photos</p>
                    <p class="mb-0" style="color: lightgray; font-family: arial;  font-size: 8pt;">You got a achievement</p>
                </div>
            </div>
            <div class="flex-shrink-1" style="leftt: 100%;">
                <i class="fas fa-trophy" style="color: gold; font-size: 11pt;"></i>
                <p class="mb-0" style="color: lightblue; font-size: 7pt;">1 h</p>
            </div>
        </div>
    </section>
</body>
</html>