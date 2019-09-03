<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <link rel="stylesheet" href="/css/app.css">
    <!-- <script type="text/javascript" src="{{asset('js/fadeimages/js/jquery.fadeImg.js')}}"></script> -->
    <title>Search</title>
    
    <link rel="stylesheet" type="text/css" href="{{asset('js/slick/slick.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('js/slick/slick-theme.css')}}"/>
    <script type="text/javascript" src="{{asset('js/slick/slick.min.js')}}"></script>

    <script>

    
        $(document).ready(function(){

                    // slick

            // $('#konten-deskripsi').slick({
            //         dots:true,
            //         slidesToShow: 1,
            //         slidesToScroll: 1,
            //         autoplay: true,
            //         autoplaySpeed: 3000,
            // });

            var inputCategory = $('#input-category').val();

            function category(icon){

                $('#icon-category-'+icon).removeClass('color-icon-category');
                $('#icon-category-'+icon).addClass('font-color-'+icon);

                $('#icon-category-'+icon).removeClass('border-icon-category');
                $('#icon-category-'+icon).addClass('border-icon-'+icon);

                $('#title-icon-'+icon).removeClass('color-icon-category');
                $('#title-icon-'+icon).addClass('font-color-'+icon);

                $('#background-default').hide('fast');
                $('#background-category').show('fast');
                $('#background-category').addClass('img-'+icon);

                // var inputCategory = $('#input-category').val(icon);

                $('#btn-next-1').attr('disabled', false);

                $('#btn-next-1').removeClass('disabled');

                $('#btn-next-1').addClass('add-disabled');

                $('#categories').text(icon.charAt(0).toUpperCase() + icon.substr(1).toLowerCase());
                
            }

            function remove(){

                // ubah hapus border icon lain
                $("i[id^='icon-category-']").addClass('border-icon-category');
                
                // ubah hapus color icon 
                $("i[id^='icon-category-']").addClass('color-icon-category');

                // ubah hapus color title icon lain   
                $("p[id^='title-icon-']").addClass('color-icon-category');
            }

            $('#w-icon-category-education').click(function(){

                // ubah image icon lain
                $('#background-category')
                    .removeClass('img-sport')
                    .removeClass('img-music')
                    .removeClass('img-fashion')
                    .removeClass('img-creativity')
                    .removeClass('img-love')
                    .removeClass('img-finance')
                    .removeClass('img-health')
                    .removeClass('img-gastronomy')
                    .removeClass('img-makeup')
                    .removeClass('img-productivity')
                    .removeClass('img-game');               

                remove()
                
                category('education');

                var inputCategory = $('#input-category').val(1);
            });

            $('#w-icon-category-sport').click(function(){
               

                // ubah image icon lain
                $('#background-category')
                    .removeClass('img-education')
                    .removeClass('img-music')
                    .removeClass('img-fashion')
                    .removeClass('img-creativity')
                    .removeClass('img-love')
                    .removeClass('img-finance')
                    .removeClass('img-health')
                    .removeClass('img-gastronomy')
                    .removeClass('img-makeup')
                    .removeClass('img-productivity')
                    .removeClass('img-game'); 

                    remove()

                    category('sport');

                    var inputCategory = $('#input-category').val(2);
            });

            $('#w-icon-category-music').click(function(){
                $('#background-category')
                    .removeClass('img-sport')
                    .removeClass('img-education')
                    .removeClass('img-fashion')
                    .removeClass('img-creativity')
                    .removeClass('img-love')
                    .removeClass('img-finance')
                    .removeClass('img-health')
                    .removeClass('img-gastronomy')
                    .removeClass('img-makeup')
                    .removeClass('img-productivity')
                    .removeClass('img-game');               

                remove()
                
                category('music');

                var inputCategory = $('#input-category').val(3);
                
            });

            $('#w-icon-category-fashion').click(function(){
                $('#background-category')
                    .removeClass('img-sport')
                    .removeClass('img-music')
                    .removeClass('img-education')
                    .removeClass('img-creativity')
                    .removeClass('img-love')
                    .removeClass('img-finance')
                    .removeClass('img-health')
                    .removeClass('img-gastronomy')
                    .removeClass('img-makeup')
                    .removeClass('img-productivity')
                    .removeClass('img-game');               

                remove()
                
                category('fashion');

                var inputCategory = $('#input-category').val(4);
            });

            $('#w-icon-category-creativity').click(function(){
                $('#background-category')
                    .removeClass('img-sport')
                    .removeClass('img-music')
                    .removeClass('img-fashion')
                    .removeClass('img-education')
                    .removeClass('img-love')
                    .removeClass('img-finance')
                    .removeClass('img-health')
                    .removeClass('img-gastronomy')
                    .removeClass('img-makeup')
                    .removeClass('img-productivity')
                    .removeClass('img-game');               

                remove()
                
                category('creativity');

                var inputCategory = $('#input-category').val(5);
            });

            $('#w-icon-category-love').click(function(){

                $('#background-category')
                    .removeClass('img-sport')
                    .removeClass('img-music')
                    .removeClass('img-fashion')
                    .removeClass('img-creativity')
                    .removeClass('img-education')
                    .removeClass('img-finance')
                    .removeClass('img-health')
                    .removeClass('img-gastronomy')
                    .removeClass('img-makeup')
                    .removeClass('img-productivity')
                    .removeClass('img-game');               

                remove()
                
                category('love');

                var inputCategory = $('#input-category').val(6);

            });

            $('#w-icon-category-finance').click(function(){
                $('#background-category')
                    .removeClass('img-sport')
                    .removeClass('img-music')
                    .removeClass('img-fashion')
                    .removeClass('img-creativity')
                    .removeClass('img-love')
                    .removeClass('img-education')
                    .removeClass('img-health')
                    .removeClass('img-gastronomy')
                    .removeClass('img-makeup')
                    .removeClass('img-productivity')
                    .removeClass('img-game');               

                remove()
                
                category('finance');

                var inputCategory = $('#input-category').val(7);

            });

            $('#w-icon-category-health').click(function(){
                 // ubah image icon lain
                 $('#background-category')
                    .removeClass('img-sport')
                    .removeClass('img-music')
                    .removeClass('img-fashion')
                    .removeClass('img-creativity')
                    .removeClass('img-love')
                    .removeClass('img-finance')
                    .removeClass('img-education')
                    .removeClass('img-gastronomy')
                    .removeClass('img-makeup')
                    .removeClass('img-productivity')
                    .removeClass('img-game');               

                remove()
                
                category('health');

                var inputCategory = $('#input-category').val(8);

            });

            $('#w-icon-category-gastronomy').click(function(){
                 // ubah image icon lain
                 $('#background-category')
                    .removeClass('img-sport')
                    .removeClass('img-music')
                    .removeClass('img-fashion')
                    .removeClass('img-creativity')
                    .removeClass('img-love')
                    .removeClass('img-finance')
                    .removeClass('img-health')
                    .removeClass('img-education')
                    .removeClass('img-makeup')
                    .removeClass('img-productivity')
                    .removeClass('img-game');               

                remove()
                
                category('gastronomy');

                var inputCategory = $('#input-category').val(9);
            });

            $('#w-icon-category-makeup').click(function(){
                 // ubah image icon lain
                 $('#background-category')
                    .removeClass('img-sport')
                    .removeClass('img-music')
                    .removeClass('img-fashion')
                    .removeClass('img-creativity')
                    .removeClass('img-love')
                    .removeClass('img-finance')
                    .removeClass('img-health')
                    .removeClass('img-gastronomy')
                    .removeClass('img-education')
                    .removeClass('img-productivity')
                    .removeClass('img-game');               

                remove()
                
                category('makeup');

                var inputCategory = $('#input-category').val(10);
            });

            $('#w-icon-category-productivity').click(function(){
                 // ubah image icon lain
                 $('#background-category')
                    .removeClass('img-sport')
                    .removeClass('img-music')
                    .removeClass('img-fashion')
                    .removeClass('img-creativity')
                    .removeClass('img-love')
                    .removeClass('img-finance')
                    .removeClass('img-health')
                    .removeClass('img-gastronomy')
                    .removeClass('img-makeup')
                    .removeClass('img-education')
                    .removeClass('img-game');               

                remove()
                
                category('productivity');

                var inputCategory = $('#input-category').val(11);
            });

            $('#w-icon-category-game').click(function(){
                 // ubah image icon lain
                 $('#background-category')
                    .removeClass('img-sport')
                    .removeClass('img-music')
                    .removeClass('img-fashion')
                    .removeClass('img-creativity')
                    .removeClass('img-love')
                    .removeClass('img-finance')
                    .removeClass('img-health')
                    .removeClass('img-gastronomy')
                    .removeClass('img-makeup')
                    .removeClass('img-productivity')
                    .removeClass('img-education');               

                remove()
                
                category('game');

                var inputCategory = $('#input-category').val(12);

            });

            // validasi button 1 category input
            $('#btn-next-1').click(function(){

                $('.nav-icon-category').hide();
                
                $('#input-title-goals').show();

                $('#btn-next-1').hide();

                $('#btn-next-2').show();

            });
                
            if (inputCategory == ""){
                $('#btn-next-1').attr('disabled', true);
            }



                // validasi button 2
                $( "#input-title" ).keyup(function() {
                    var valueTitle = $( this ).val();
                    var valueGoal = $("#input-goal").val();

                    if(valueTitle == "" || valueGoal == ""){
                        $('#btn-next-2').attr('disabled', true);
                        $('#btn-next-2').removeClass('add-disabled');
                    }
                    else{
                        $('#btn-next-2').attr('disabled', false);
                        $('#btn-next-2').removeClass('disabled');
                        $('#btn-next-2').addClass('add-disabled');
                    }
                })

                $( "#input-goal" ).keyup(function() {
                    var valueGoal = $( this ).val();
                    var valueTitle = $("#input-title").val();

                    if(valueGoal == "" || valueTitle == ""){
                        $('#btn-next-2').attr('disabled', true);
                        $('#btn-next-2').removeClass('add-disabled');
                    }
                    else{
                        $('#btn-next-2').attr('disabled', false);
                        $('#btn-next-2').removeClass('disabled');
                        $('#btn-next-2').addClass('add-disabled');
                    }
                })


                $('#btn-next-2').click(function(){
                    $('#input-title-goals').hide();
                    $('#input-notif').show();
                    $('#btn-next-2').hide();
                });
        });
    </script>

    <style>

        .disabled{
            background : lightgray;
        }
        .add-disabled{
            background: rgb(83, 212, 210);
        }
    
        body{
            padding-top: 20%;
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

        /* background-content */

        .background-content{
            width: 95%;
            height: 180px;
        }
        .img-education{
            background: url("img/education2.jpg");
            box-shadow: inset 1000px 1000px rgb(95, 158, 160, 0.4);
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }
        .img-sport{
            background: url("img/sport2.jpg");
            box-shadow: inset 1000px 1000px rgb(37, 169, 240, 0.4);
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }
        .img-music{
            background: url("img/music.jpg");
            box-shadow: inset 1000px 1000px rgb(255, 215, 0, 0.4);
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }
        .img-fashion{
            background: url("img/fashion.jpg");
            box-shadow: inset 1000px 1000px rgb(148, 25, 136, 0.4);
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }
        .img-creativity{
            background: url("img/creativity.png");
            box-shadow: inset 1000px 1000px rgb(255, 77, 0, 0.4);
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }
        .img-love{
            background: url("img/love2.jpg");
            box-shadow: inset 1000px 1000px rgb(255, 179, 186, 0.4);
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }
        .img-finance{
            background: url("img/finance7.png");
            box-shadow: inset 1000px 1000px rgb(245, 222, 179, 0.4);
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }
        .img-health{
            background: url("img/health2.jpg");
            box-shadow: inset 1000px 1000px rgb(173, 216, 230, 0.4);
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }
        .img-gastronomy{
            background: url("img/gastronomy2.jpg");
            box-shadow: inset 1000px 1000px rgb(205, 92, 92, 0.4);
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }
        .img-makeup{
            background: url("img/makeup.jpg");
            box-shadow: inset 1000px 1000px rgb(255, 160, 122, 0.4);
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }
        .img-productivity{
            background: url("img/productivity7.jpg");
            box-shadow: inset 1000px 1000px rgb(72, 61, 139, 0.4);
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }
        .img-game{
            background: url("img/game5.jpg");
            box-shadow: inset 1000px 1000px rgb(79, 193, 167, 0.4);
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }
        .bg-education{
            background: rgb(95, 158, 160);
        }
        .font-color-education{
            color: rgb(95, 158, 160);
        }
        .border-icon-education{
            border: 1px solid rgb(95, 158, 160);
        }
        .bg-sport{
            background: #25a9f0;
        }
        .font-color-sport{
            color: #25a9f0;
        }
        .border-icon-sport{
            border: 1px solid #25a9f0;
        }
        .bg-music{
            background: gold;
        }
        .font-color-music{
            color: gold;
        }
        .border-icon-music{
            border: 1px solid gold;
        }
        .bg-fashion{
            background: #941988;
        }
        .font-color-fashion{
            color: #941988;
        }
        .border-icon-fashion{
            border: 1px solid #941988;
        }
        .bg-creativity{
            background: #ff4d00;
        }
        .font-color-creativity{
            color: #ff4d00;
        }
        .border-icon-creativity{
            border: 1px solid #ff4d00;
        }
        .bg-love{
            background: #ffb3ba;
        }
        .font-color-love{
            color: #ffb3ba;
        }
        .border-icon-love{
            border: 1px solid #ffb3ba;
        }
        .bg-finance{
            background: wheat;
        }
        .font-color-finance{
            color: wheat;
        }
        .border-icon-finance{
            border: 1px solid wheat;
        }
        .bg-health{
            background: lightblue;
        }
        .font-color-health{
            color: lightblue;
        }
        .border-icon-health{
            border: 1px solid lightblue;
        }
        .bg-gastronomy{
            background: indianred;
        }
        .font-color-gastronomy{
            color: indianred;
        }
        .border-icon-gastronomy{
            border: 1px solid indianred;
        }
        .bg-makeup{
            background: lightsalmon;
        }
        .font-color-makeup{
            color: lightsalmon;
        }
        .border-icon-makeup{
            border: 1px solid lightsalmon;
        }
        .bg-productivity{
            background: darkslateblue;
        }
        .font-color-productivity{
            color: darkslateblue;
        }
        .border-icon-productivity{
            border: 1px solid darkslateblue;
        }
        .bg-game{
            background: #4fc1a7;
        }
        .font-color-game{
            color: #4fc1a7;
        }
        .border-icon-game{
            border: 1px solid #4fc1a7;
        }

        .border-icon-category{
            border: 1px solid lightgray;
        }
        .color-icon-category{
            color: lightgray;
        }

        /* input form */

        .w-form-both{
            border-bottom: 1px solid rgb(83, 212, 210);
            padding-bottom: 5px;
            margin-bottom: 30px;
        }
        .input-form{
            width: 85%;
            background: none;
            outline: none;
            border: none;
            color: rgb(45,165,163);
            font-family: berlin sans fb;
        }
        .input-form::-webkit-input-placeholder{
            color: rgb(83, 212, 210);
        }
        .icon-input{
            font-size: 12pt;
            color: rgb(83, 212, 210);
            margin-left: 5px;
        }
        .add-focus-input{
            color: rgb(45,165,163);
        }
        .add-border-bottom-input{
            border-bottom: 1px solid rgb(45,165,163);
        }
        .input-submit{
            background: rgb(83, 212, 210);
            outline: none;
            border: none;
            color: white;
            font-family: berlin sans fb;
            font-size: 9pt;
            padding: 5px 20px 5px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.5s;
        }
        .w-btn{
            background: none;
            outline: none;
            border: 1px solid white;
            border-radius: 24px;
            width: 160px;
            height: 40px;
            position: absolute;
            top: 70%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        /* input checkbox */

        input[type="checkbox"] {
            display: none;	
        }

        input[type="checkbox"] + label:before {
            background-color: white;
            border: 2px solid rgb(83, 212, 210);
            content: "";
            display: inline-block;
            font-size: 20px;
            height: 20px;
            width: 20px;
            line-height: 20px;
            margin: 5px 6px;
            vertical-align: middle;
            text-align: center;
            border-radius: 4px;
        }

        input[type="checkbox"]:checked + label:before {
            content: "\2713";
            color: white;	
            background: rgb(83, 212, 210);
            border: none;
        }
        .teks-check-box{
            font-family: Candara;
            font-size: 11pt;
            transition: 0.2s;
        }

        /* slide or slick */

        

    </style>
</head>
<body>
    <div class="container text-center shadow-sm rounded-bottom bg-nav 4 fixed-top">
        <div class="d-flex justify-content-between py-3">

            <div class="bd-highlight">
                <a href="{{route('challenge.index')}}">
                    <i class="fas fa-arrow-left text-white" style="font-size: 13pt;"></i>
                </a>
            </div>

            <div class="flex-grow-1 bd-highlight h6 text-white font-berlin">Create challenge</div>

        </div>
    </div>

    <div class="container background-content rounded mb-3" style="padding-top: 80px; display: none;" id="background-category">
        <b><p class="text-center text-white" id="categories" style="font-size: 17pt; font-family: berlin sans fb"></p></b>
    </div>

    <div class="container background-content rounded mb-3" style="padding-top: 80px; color: lightgray;" id="background-default">
        <p class="text-center" style="font-size: 14pt; font-family: berlin sans fb">Choose Your Category</p>    
    </div>

    <form action="{{ Route('challenge.store') }}" method="post">
        {{csrf_field()}}
        <div id="konten-deskripsi">
            <div class="nav-icon-category animated mt-2">
                <section>
                    <div class="container d-flex justify-content-around mb-2 mt-1">
                        <div class="" id="w-icon-category-education">
                            <center>
                                <div class="">
                                    <i id="icon-category-education" class="fas fa-book-reader p-3 rounded-circle border-icon-category color-icon-category" style="font-size: 15pt;"></i>
                                </div>
                                <p class="color-icon-category mb-0" id="title-icon-education" style="font-size: 8pt;">Education</p>
                            </center>
                        </div>

                        <div class="" id="w-icon-category-sport">
                            <center>
                                <div class="">
                                    <i id="icon-category-sport" class="fas fa-volleyball-ball p-3 rounded-circle border-icon-category color-icon-category" style="font-size: 15pt; "></i>
                                </div>
                                <p class="color-icon-category mb-0" id="title-icon-sport" style="font-size: 8pt;">Sport</p>
                            </center>
                        </div>

                        <div class="" id="w-icon-category-music">
                            <center>
                                <div class="">
                                    <i id="icon-category-music" class="fas fa-music p-3 rounded-circle border-icon-category color-icon-category" style="font-size: 15pt; "></i>
                                </div>
                                <p class="color-icon-category mb-0" id="title-icon-music" style="font-size: 8pt;">Music</p>
                            </center>
                        </div>

                        <div class="" id="w-icon-category-fashion">
                            <center>
                                <div class="">
                                    <i id="icon-category-fashion" class="fas fa-tshirt rounded-circle border-icon-category color-icon-category" style="font-size: 15pt; padding: 15px 14px; "></i>
                                </div>
                                <p class="color-icon-category mb-0" id="title-icon-fashion" style="font-size: 8pt;">Fashion</p>
                            </center>
                        </div>
                        
                    </div>

                    <div class="container d-flex justify-content-around my-2">
                        <div class="" id="w-icon-category-creativity">
                            <center>
                                <div class="">
                                    <i id="icon-category-creativity" class="fas fa-brain p-3 rounded-circle border-icon-category color-icon-category" style="font-size: 15pt; "></i>
                                </div>
                                <p class="color-icon-category mb-0" id="title-icon-creativity" style="font-size: 8pt;">Creativity</p>
                            </center>
                        </div>

                        <div class="" id="w-icon-category-love">
                            <center>
                                <div class="">
                                    <i id="icon-category-love" class="fas fa-heart p-3 rounded-circle border-icon-category color-icon-category" style="font-size: 15pt; "></i>
                                </div>
                                <p class="color-icon-category mb-0" id="title-icon-love" style="font-size: 8pt;">Love</p>
                            </center>
                        </div>

                        <div class="" id="w-icon-category-finance">
                            <center>
                                <div class="">
                                    <i id="icon-category-finance" class="fas fa-money-bill-alt rounded-circle border-icon-category color-icon-category" style="font-size: 15pt; padding: 16px 14px; "></i>
                                </div>
                                <p class="color-icon-category mb-0" id="title-icon-finance" style="font-size: 8pt;">Finance</p>
                            </center>
                        </div>

                        <div class="" id="w-icon-category-health">
                            <center>
                                <div class="">
                                    <i id="icon-category-health" class="fas fa-medkit rounded-circle border-icon-category color-icon-category" style="font-size: 15pt; padding: 16px 16px; "></i>
                                </div>
                                <p class="color-icon-category mb-0" id="title-icon-health" style="font-size: 8pt;">Health</p>
                            </center>
                        </div>
                        
                    </div>

                    <div class="container d-flex justify-content-around mb-0 mt-2">
                        <div class="" id="w-icon-category-gastronomy">
                            <center>
                                <div class="">
                                    <i id="icon-category-gastronomy" class="fas fa-utensils rounded-circle border-icon-category color-icon-category" style="font-size: 15pt; padding: 15px 18px; "></i>
                                </div>
                                <p class="color-icon-category mb-0" id="title-icon-gastronomy" style="font-size: 8pt;">Gastronomy</p>
                            </center>
                        </div>

                        <div class="" id="w-icon-category-makeup">
                            <center>
                                <div class="">
                                    <i id="icon-category-makeup" class="fas fa-theater-masks rounded-circle border-icon-category color-icon-category" style="font-size: 15pt;padding: 16px 14px;"></i>
                                </div>
                                <p class="color-icon-category mb-0" id="title-icon-makeup" style="font-size: 8pt;">MakeUp</p>
                            </center>
                        </div>

                        <div class="" id="w-icon-category-productivity">
                            <center>
                                <div class="">
                                    <i id="icon-category-productivity" class="fas fa-business-time rounded-circle border-icon-category color-icon-category" style="font-size: 15pt; padding: 15px 14px; "></i>
                                </div>
                                <p class="color-icon-category mb-0" id="title-icon-productivity" style="font-size: 8pt;">Productivity</p>
                            </center>
                        </div>

                        <div class="" id="w-icon-category-game">
                            <center>
                                <div class="">
                                    <i id="icon-category-game" class="fas fa-gamepad rounded-circle border-icon-category color-icon-category" style="font-size: 15pt; padding: 15px 13px; "></i>
                                </div>
                                <p class="color-icon-category mb-0" id="title-icon-game" style="font-size: 8pt;">Game</p>
                            </center>
                        </div>
                        
                    </div>
                </section>
                <input type="hidden" name="inputCategori" id="input-category">
            </div>


            <div id="input-title-goals" style="display: none;">
            
                <div class="container bg-white mt-2 py-4 shadow-sm rounded" style="width: 90%">
                    <div class="w-form-both" id="border-bottom-name-signUp">
                        <label for="input-title" style="color: lightpink; font-size: 12pt;">Give your challenge a title</label>
                        <input type="text" name="inputTitle" value="" placeholder="Touch to write" class="input-form" id="input-title" style="text-indent: 5px; font-size: 10pt;">
                    </div>

                    <div class="w-form-both" id="border-bottom-name-signUp">
                        <label for="input-goal" style="color: lightpink; font-size: 12pt;">What's your goal?</label>
                        <input type="text" name="inputGoal" value="" placeholder="Touch to write" class="input-form" id="input-goal" style="text-indent: 5px; font-size: 10pt;">
                    </div>
                </div>
            
            </div>



            <div id="input-notif" style="display: none;">
            
                <div class="container bg-white mt-2 py-5 shadow-sm rounded" style="width: 90%">
                    <label class="" for="input-date-starting" style="color: lightpink; font-size: 11pt; float: left;">Starting at :</label>
                    <div class="w-form-both f-right" id="border-bottom-name-signUp" style="width: 70%;">
                        <input type="date" name="dateStarting" placeholder="Touch to write" class="input-form" id="input-date-starting" style="text-indent: 5px; font-size: 10pt;">
                    </div>
                    <div class="clear"></div>

                    <label for="input-notified" style="color: lightpink; font-size: 11pt;">Be notified at:</label>
                    <div class="w-form-both f-right" id="border-bottom-name-signUp" style="width: 64%;">
                        <input type="time" name="notified" placeholder="Touch to write" class="input-form" id="input-notified" style="text-indent: 5px; font-size: 10pt;">
                    </div>
                    <div class="djustify-content-around">
                        <div>
                            <input type="checkbox" name="turnOnNotification" value="yes" id="check-box-home">
                            <label for="check-box-home" class="teks-check-box" style="color: rgb(45,165,163);">Turn on notifications?</label><br>
                        </div>
                        <div>
                            <input type="checkbox" name="private" value="yes" id="check-box-dresses">
                            <label for="check-box-dresses" class="teks-check-box" style="color: rgb(45,165,163);">Private?</label><br>
                        </div>
                    </div>
                    <div>
                        <input name="submit" id="btnRegister" type="submit" value="Submit" class="input-submit f-right">
                        <div style="clear:both;"></div>
                    </div>  
                </div>
            
            </div>
        </div>

    </form>

    <div>
        <center>
            <button class="shadow-sm rounded disabled py-1 px-4 mt-4" id="btn-next-1" disabled style=" border: none;">
                <i class="fas fa-arrow-right text-white text-center mb-0" style="font-size: 11pt;"></i>
            </button>
        </center>
    </div>
    <div>
        <center>
            <button class="shadow-sm rounded disabled py-1 px-4 mt-4" id="btn-next-2" disabled style=" border: none; display: none;">
                <i class="fas fa-arrow-right text-white text-center mb-0" style="font-size: 11pt;"></i>
            </button>
        </center>
    </div>
                
    
</body>
</html>
