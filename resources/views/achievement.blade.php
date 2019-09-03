<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.css')}}">
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <link rel="stylesheet" href="/css/app.css">
    <title>Achivement</title>
    <script>
        $(document).ready(function (){

            function describe(icon){


                $('#describe-' + icon).fadeIn();
                
            }

            $('#achievement-king-hill').click(function(){
                describe('king-hill');
            });

            $('#achievement-spread').click(function(){
                describe('spread');
            });

            $('#achievement-photos').click(function(){
                describe('photos');
            });

            $('#achievement-videos').click(function(){
                describe('videos');
            });

            function Closedescribe(icon){

                $('#describe-' + icon).hide();

            }

            $('#close-describe-king-hill').click(function(){

                Closedescribe('king-hill');

            });

            $('#close-describe-spread').click(function(){

                Closedescribe('spread');

            });

            $('#close-describe-photos').click(function(){

                Closedescribe('photos');

            });

            $('#close-describe-videos').click(function(){

                Closedescribe('videos');

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
        .describe{
            display: none;
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

            <div class="flex-grow-1 bd-highlight h6 text-white font-berlin">Achievement</div>

        </div>
    </div>

    <section class="aw-achievement">

        <div class="container my-2" id="achievement-king-hill">
                <div class="d-flex justify-content-start align-items-center bg-white shadow-sm py-2" style="width:98%; margin: auto;">
                    <div class="mx-3">
                        <i class="fas fa-crown rounded-circle" style="font-size: 10pt;color: lightblue; border: 1px solid lightblue; padding: 9px 8px;"></i>    
                    </div>
                    <!-- <div style="width: 1px; height: 50px; background: lightblue"></div> -->
                    <div class="pl-4" style="border-left: 1px solid lightblue">
                        <p class="mb-0" style="color: lightblue; font-family: berlin sans fb; font-size: 11pt">King of the hill  <span style="color: gold; font-family: arial; font-size: 9pt;"> +200xp</span></p>
                        <p class="mb-0" style="color: lightgray; font-family: arial;  font-size: 8pt;">Your Progress : </p>
                        <div class="container mt-1 d-flex" style="margin-left: -15px;">
                            <div class="w-persentase rounded p-1" style="width: 155px; border: 1px solid lightblue">
                                <div class="persentase rounded" style="width: 50%; height: 5px; background: lightpink;"></div>
                            </div>
                            <div class="ml-1" style="width: 5%;font-family: arial; color: lightpink; font-size: 8pt;">50%</div>
                        </div>
                    </div>
                    <!-- <div>
                        <i class="fas fa-medal" style="color: gold; font-size: 12pt;"></i>
                    </div> -->
                </div>
        </div>
        <div class="describe container" id="describe-king-hill" style="width: 98%;">
            <div class="bg-white shadow-sm py-3 px-4">
                <div class="d-flex align-items-end flex-column bd-highlight mb-0">
                    <i class="fas fa-times" style="color: lightblue; font-size: 13pt;" id="close-describe-king-hill"></i>
                </div>
                <center>
                    <i class="fas fa-crown rounded-circle p-4 mb-3" style="font-size: 16pt;color: gold; border: 1px solid gold;"></i>
                    <div>
                        <p class="mb-0" style="color: lightblue; font-family: berlin sans fb; font-size: 11pt">King of the hill</p>
                        <p class="mb-0" style="color: lightgray; font-family: arial;  font-size: 9pt;">Complete a "30 Challenge" with at least 21 days successfully performed.</p>
                    </div>
                </center>
            </div>
        </div>


        <div class="container my-3" id="achievement-spread">
                <div class="d-flex justify-content-start align-items-center bg-white shadow-sm py-2" style="width:98%; margin: auto;">
                    <div class="mx-3">
                        <i class="fas fa-share-alt rounded-circle" style="font-size: 10pt;color: lightblue; border: 1px solid lightblue; padding: 8px 10px;"></i>
                    </div>
                    <div class="pl-4" style="border-left: 1px solid lightblue">
                        <p class="mb-0" style="color: lightblue; font-family: berlin sans fb; font-size: 11pt">Spread the world<span style="color: gold; font-family: arial; font-size: 9pt;"> +450xp</span></p>
                        <p class="mb-0" style="color: lightgray; font-family: arial;  font-size: 8pt;">Your Progress :</p>
                        <div class="container mt-1 d-flex" style="margin-left: -15px;">
                            <div class="w-persentase rounded p-1" style="width: 155px; border: 1px solid lightblue">
                                <div class="persentase rounded" style="width: 100%; height: 5px; background: lightpink;"></div>
                            </div>
                            <div class="ml-1" style="width: 5%;font-family: arial; color: lightpink; font-size: 8pt;">100%</div>
                        </div>
                    </div>
                </div>
        </div>
        <div class="describe container" id="describe-spread" style="width: 98%;">
            <div class="bg-white shadow-sm py-3 px-4">
                <div class="d-flex align-items-end flex-column bd-highlight mb-0">
                    <i class="fas fa-times" style="color: lightblue; font-size: 13pt;" id="close-describe-spread"></i>
                </div>
                <center>
                    <i class="fas fa-share-alt rounded-circle mb-3" style="font-size: 16pt;color: gold; border: 1px solid gold; padding: 25px 28px"></i>
                    <div>
                        <p class="mb-0" style="color: lightblue; font-family: berlin sans fb; font-size: 11pt">Spread the world</p>
                        <p class="mb-0" style="color: lightgray; font-family: arial;  font-size: 9pt;">Complete a "30 Challenge" with at least 21 days successfully performed.</p>
                    </div>
                </center>
            </div>
        </div>

        <div class="container my-3" id="achievement-photos">
                <div class="d-flex justify-content-start align-items-center bg-white shadow-sm py-2" style="width:98%; margin: auto;">
                    <div class="mx-3">
                        <i class="fas fa-camera-retro rounded-circle" style="font-size: 10pt;color: lightblue; border: 1px solid lightblue; padding: 10px 10px;"></i>
                    </div>
                    <div class="pl-4" style="border-left: 1px solid lightblue">
                        <p class="mb-0" style="color: lightblue; font-family: berlin sans fb; font-size: 11pt">Calm and take photos<span style="color: gold; font-family: arial; font-size: 9pt;"> +300xp</span></p>
                        <p class="mb-0" style="color: lightgray; font-family: arial;  font-size: 8pt;">Your Progress :</p>
                        <div class="container mt-1 d-flex" style="margin-left: -15px;">
                            <div class="w-persentase rounded p-1" style="width: 155px; border: 1px solid lightblue">
                                <div class="persentase rounded" style="width: 20%; height: 5px; background: lightpink;"></div>
                            </div>
                            <div class="ml-1" style="width: 5%;font-family: arial; color: lightpink; font-size: 8pt;">20%</div>
                        </div>
                    </div>
                </div>
        </div>
        <div class="describe container" id="describe-photos" style="width: 98%;">
            <div class="bg-white shadow-sm py-3 px-4">
                <div class="d-flex align-items-end flex-column bd-highlight mb-0">
                    <i class="fas fa-times" style="color: lightblue; font-size: 13pt;" id="close-describe-photos"></i>
                </div>
                <center>
                    <i class="fas fa-camera-retro rounded-circle mb-3" style="font-size: 16pt;color: gold; border: 1px solid gold; padding: 25px 28px"></i>
                    <div>
                        <p class="mb-0" style="color: lightblue; font-family: berlin sans fb; font-size: 11pt">Keep calm and take photos</p>
                        <p class="mb-0" style="color: lightgray; font-family: arial;  font-size: 9pt;">Complete a "30 Challenge" with at least 21 days successfully performed.</p>
                    </div>
                </center>
            </div>
        </div>

        <div class="container my-3" id="achievement-videos">
                <div class="d-flex justify-content-start align-items-center bg-white shadow-sm py-2" style="width:98%; margin: auto;">
                    <div class="mx-3">
                        <i class="fas fa-video rounded-circle" style="font-size: 10pt;color: lightblue; border: 1px solid lightblue; padding: 10px 9px;"></i>
                    </div>
                    <div class="pl-4" style="border-left: 1px solid lightblue">
                        <p class="mb-0" style="color: lightblue; font-family: berlin sans fb; font-size: 11pt">Calm and take videos<span style="color: gold; font-family: arial; font-size: 9pt;"> +450xp</span></p>
                        <p class="mb-0" style="color: lightgray; font-family: arial;  font-size: 8pt;">Your Progress :</p>
                        <div class="container mt-1 d-flex" style="margin-left: -15px;">
                            <div class="w-persentase rounded p-1" style="width: 155px; border: 1px solid lightblue">
                                <div class="persentase rounded" style="width: 80%; height: 5px; background: lightpink;"></div>
                            </div>
                            <div class="ml-1" style="width: 5%;font-family: arial; color: lightpink; font-size: 8pt;">80%</div>
                        </div>
                    </div>
                </div>
        </div>
        <div class="describe container" id="describe-videos" style="width: 98%;">
            <div class="bg-white shadow-sm py-3 px-4">
                <div class="d-flex align-items-end flex-column bd-highlight mb-0">
                    <i class="fas fa-times" style="color: lightblue; font-size: 13pt;" id="close-describe-videos"></i>
                </div>
                <center>
                    <i class="fas fa-video rounded-circle mb-3" style="font-size: 16pt;color: gold; border: 1px solid gold; padding: 25px 25px"></i>
                    <div>
                        <p class="mb-0" style="color: lightblue; font-family: berlin sans fb; font-size: 11pt">Keep calm and take videos</p>
                        <p class="mb-0" style="color: lightgray; font-family: arial;  font-size: 9pt;">Complete a "30 Challenge" with at least 21 days successfully performed.</p>
                    </div>
                </center>
            </div>
        </div>
    
    </section>
</body>
</html>