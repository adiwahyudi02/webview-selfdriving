<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.css')}}">
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <link rel="stylesheet" href="/css/app.css">
    <title>Challenges</title>
    <script>
    
        $(document).ready(function(){
            $('#create-challenge').click(function(){
                $('#create-challenge').toggleClass('add-create-challenge');
                $('#deskripsi-create-challenge').fadeToggle();
            });

            $('#menu-logout').click(function(){
                $('#deskripsi-menu-logout').fadeToggle();
            });
            $('#close-deskripsi-menu-logout').click(function(){
                $('#deskripsi-menu-logout').fadeOut();
            });
            
        });
    
    </script>
    <style>

        body{
            padding-bottom: 60px;
        }
        #sticky{
            position: sticky;
            top: 9%;
            z-index: 99;
        }
        
        /* create challenge */

        .add-create-challenge{
            transform: rotate(45deg);
        }
        #deskripsi-create-challenge{
            display: none;
        }

        .add-deskripsi-create-challenge{
            display: block;
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
        
        .f-left{
            float: left;
        }
        .f-right{
            float: right;
        }
        .clear{
            clear: both;
        }

        /* challenges */

        .font-berlin{
            font-family: berlin sans fb;
        }
        .bg-nav{
            background: #4fc1a7;
        }
        .w-profile{
            width: 80px;
            height: 80px;
            border-radius: 50%;
            border: 1px grey solid;
        }
        .img-profile{
            background: url("img/creativity.png");
            width: 100%;
            height: 80px;
            border-radius: 50%;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .w-bg-profile{
            width: 100%; 
            border-radius: 5px 5px 5px 5px;
        }
        .color-education{
            color: cadetblue;
        }
        .bg-education{
            background: cadetblue;
        }
        .color-sport{
            color: #25a9f0;
        }
        .bg-sport{
            background: #25a9f0;
        }
        .color-game{
            color: #4fc1a7;
        }
        .bg-game{
            background: #4fc1a7;
        }
        .color-music{
            color: gold;
        }
        .bg-music{
            background: gold;
        }
        .color-fashion{
            color: 	#941988;
        }
        .bg-fashion{
            background: #941988;
        }
        .color-creativity{
            color: #ff4d00;
        }
        .bg-creativity{
            background: #ff4d00;
        }
        .color-love{
            color: #ffb3ba;
        }
        .bg-love{
            background: #ffb3ba;
        }
        .color-health{
            color: lightblue;
        }
        .bg-health{
            background: lightblue;
        }
        .color-finance{
            color: wheat;
        }
        .bg-finance{
            background: wheat;
        }
        .color-gastronomy{
            color: indianred;
        }
        .bg-gastronomy{
            background: indianred;
        }
        .color-makeup{
            color: lightsalmon;
        }
        .bg-makeup{
            background: lightsalmon;
        }
        .color-productivity{
            color: darkslateblue;
        }
        .bg-productivity{
            background: darkslateblue;
        }

        /* animasi alert */


        .animasi-alert{
            background: rgb(83, 212, 210);;
            position: absolute;
            z-index: 9999;
            top: 30%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 11pt;
            width: 70%;
            animation-name: popUP;
            animation-duration: 4s;
            visibility: hidden;
            opacity: 0;
        }

        @keyframes popUP{
            0%{
                margin-top: 0;
                visibility: visible;
                opacity: 1;
            }
            50%{
                margin-top: 30px;
                visibility: visible;
                opacity: 1;
            }
            100%{
                visibility: hidden;
                opacity: 0;
            }
        }
    </style>
</head>
<body>
    <div class="container text-center shadow-sm rounded-bottom bg-nav mb-4 fixed-top">
        <div class="d-flex justify-content-between py-3">

            <div class="flex-grow-1 bd-highlight h6 text-white font-berlin">{{auth()->user()->name}}</div>

            <div class="bd-highlight">
                <i class="fas fa-ellipsis-v text-white" id="menu-logout" style="font-size: 13pt;"></i>
            </div>

            <div id="deskripsi-menu-logout" style="position: absolute; right: 1%; top: 105%; display: none;">
                <div class="shadow-sm px-3 pt-2 pb-0 rounded d-flex justify-content-between" style="width: 220px; background: powderblue;">
                    <div>
                        <a href="{{route('editProfile')}}">
                       <p class="text-white mb-3" style="color: lightblue; font-size: 10pt; font-family: berlin sans fb;">Edit your Profile</p>
                       </a>
                        
                        <p class="mb-0 text-white" style="text-align: left; font-size: 10pt; font-family: berlin sans fb;">
                        
                            <a class="text-white" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form class="mb-0" id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        
                        </p>
                        
                    </div>
                    <div>
                        <i class="fas fa-times text-white" style="font-size: 14pt;" id="close-deskripsi-menu-logout"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container px-5 pt-3 pb-2 bg-white w-bg-profile" style="margin-top: 60px;">
        <div class="d-flex justify-content-between">
            <div class="mt-1">
                <p>0 done</p>
            </div>
            <div class="w-profile">
                <div class="img-profile"></div>
            </div>
            <div class="mt-1">
                <p> 1024 xp </p>
            </div>
        </div>
        <div class="mt-2">
            <p class="text-center mb-0" style="color: darkgrey;">{{auth()->user()->username}}</p>
        </div>
    </div>

            
            <div class="container d-flex justify-content-around my-0 bg-white border-bottom pt-2 pb-0" id="sticky">
                <div class="p-2 py-0 mr-2">
                    <a href="{{route('following')}}">
                        <p class="h6 text-center" style="color: darkgreen; font-size: 10pt;">158</p>
                        <p class="text-center mb-1" style="color:darkgreen; font-size: 8pt;">Following</p>
                    </a>
                </div>
                <div class="p-2 py-0  text-center">
                    <div class="" style="border-left: 1px solid darkgreen;border-right: 1px solid darkgreen; padding: 0px 35px;">
                        <a href="{{route('achievement')}}">
                            <i class="fas fas fa-medal ml-auto mr-1" style=" font-size: 10pt; color: darkgreen;"></i>
                            <p class="text-center mb-1" style="color:darkgreen; font-size: 8pt;">Achievement</p>
                        </a>
                    </div>
                </div>
                <div class="p-2 py-0 ml-2">
                    <a href="{{route('followers')}}">
                        <p class="h6 text-center" style="color: darkgreen;  font-size: 10pt;">158</p>
                        <p class="text-center mb-1" style="color:darkgreen; font-size: 8pt;">Followers</p>
                    </a>
                </div>
            </div>


            @if (session ('sukses'))

                <center>
                
                    <div class="alert alert-succes text-center shadow animasi-alert" role="alert">
                            {{session ('sukses')}}
                    </div>

                </center>

            @endIf
        

    <!-- challenges -->

    <div class="container content">

    @if(count($data_challenges) > 0)
        @foreach($data_challenges as $data)

            @if( $data->category_id == 1)

                    <!-- education -->
                <div class="col-sm-12 bg-white py-2 shadow-sm my-3" style="border-radius: 5px;">

                    <div class="d-flex justify-content-between align-items-center">
                        <div class="p-2">
                            <i class="fas fa-book-reader p-2 rounded-circle text-white bg-education" ></i>
                        </div>
                        <div class="bg-education" style="width: 1px; height: 55px; margin-left: 0px;margin-right: 10px;"></div>
                        <div>
                            <p class="mb-0 color-education" style="font-size: 10pt;">{{$data->title}}</p>
                            @for ($i = 1; $i <= 30; $i++)

                                <div class="rounded-circle f-left my-2" style="width: 4px; height: 4px; background: grey; margin-left: 1.5px;"></div>

                            @endfor

                            <div class="clear"></div>
                            <p class="" style="font-size: 8pt; color: darkgrey;">{{$data->starting_at}}</p>
                        </div>

                        
                        @if($data->private == 'yes')
                            <div>
                                <i class="fas fa-lock color-education mt-5 f-rigth"></i>
                            </div>
                        @else
                            <div>
                                <i class="fas fa-lock color-education mt-5 f-rigth text-white"></i>
                            </div>

                        @endif

                            
                        
                    </div>
                </div>

            @elseif( $data->category_id == 2 )

                <!-- sport -->
            
                <div class="col-sm-12 bg-white py-2 shadow-sm my-3" style="border-radius: 5px;">

                    <div class="d-flex justify-content-between align-items-center">
                        <div class="p-2">
                            <i class="fas fa-volleyball-ball p-2 rounded-circle text-white bg-sport" ></i>
                        </div>
                        <div class="bg-education" style="width: 1px; height: 55px; margin-left: 0px;margin-right: 10px;"></div>
                        <div>
                            <p class="mb-0 color-education" style="font-size: 10pt;">{{$data->title}}</p>
                            @for ($i = 1; $i <= 30; $i++)

                                <div class="rounded-circle f-left my-2" style="width: 4px; height: 4px; background: grey; margin-left: 1.5px;"></div>

                            @endfor

                            <div class="clear"></div>
                            <p class="" style="font-size: 8pt; color: darkgrey;">{{$data->starting_at}}</p>
                        </div>
                        @if($data->private == 'yes')
                            <div>
                                <i class="fas fa-lock color-education mt-5 f-rigth"></i>
                            </div>
                        @else
                            <div>
                                <i class="fas fa-lock color-education mt-5 f-rigth text-white"></i>
                            </div>

                        @endif
                    </div>
                </div>
            
            @elseif( $data->category_id == 3 )

                <!-- music -->

                <div class="col-sm-12 bg-white py-2 shadow-sm my-3" style="border-radius: 5px;">

                    <div class="d-flex justify-content-between align-items-center">
                        <div class="p-2">
                            <i class="fas fa-music p-2 rounded-circle text-white bg-music" ></i>
                        </div>
                        <div class="bg-education" style="width: 1px; height: 55px; margin-left: 0px;margin-right: 10px;"></div>
                        <div>
                            <p class="mb-0 color-education" style="font-size: 10pt;">{{$data->title}}</p>
                            @for ($i = 1; $i <= 30; $i++)

                                <div class="rounded-circle f-left my-2" style="width: 4px; height: 4px; background: grey; margin-left: 1.5px;"></div>

                            @endfor

                            <div class="clear"></div>
                            <p class="" style="font-size: 8pt; color: darkgrey;">{{$data->starting_at}}</p>
                        </div>
                        @if($data->private == 'yes')
                            <div>
                                <i class="fas fa-lock color-education mt-5 f-rigth"></i>
                            </div>
                        @else
                            <div>
                                <i class="fas fa-lock color-education mt-5 f-rigth text-white"></i>
                            </div>

                        @endif
                    </div>
                </div>

                @elseif( $data->category_id == 4 )

                    <!-- fashion -->

                    <div class="col-sm-12 bg-white py-2 shadow-sm my-3" style="border-radius: 5px;">

                        <div class="d-flex justify-content-between align-items-center">
                            <div class="p-2">
                                <i class="fas fa-tshirt p-2 rounded-circle text-white bg-fashion" ></i>
                            </div>
                            <div class="bg-education" style="width: 1px; height: 55px; margin-left: 0px;margin-right: 10px;"></div>
                            <div>
                                <p class="mb-0 color-education" style="font-size: 10pt;">{{$data->title}}</p>
                                @for ($i = 1; $i <= 30; $i++)

                                    <div class="rounded-circle f-left my-2" style="width: 4px; height: 4px; background: grey; margin-left: 1.5px;"></div>

                                @endfor

                                <div class="clear"></div>
                                <p class="" style="font-size: 8pt; color: darkgrey;">{{$data->starting_at}}</p>
                            </div>
                            @if($data->private == 'yes')
                                <div>
                                    <i class="fas fa-lock color-education mt-5 f-rigth"></i>
                                </div>
                            @else
                                <div>
                                    <i class="fas fa-lock color-education mt-5 f-rigth text-white"></i>
                                </div>

                            @endif
                        </div>
                    </div>


                @elseif( $data->category_id == 5 )

                    <!-- creativity -->

                    <div class="col-sm-12 bg-white py-2 shadow-sm my-3" style="border-radius: 5px;">

                        <div class="d-flex justify-content-between align-items-center">
                            <div class="p-2">
                                <i class="fas fa-brain p-2 rounded-circle text-white bg-creativity" ></i>
                            </div>
                            <div class="bg-education" style="width: 1px; height: 55px; margin-left: 0px;margin-right: 10px;"></div>
                            <div>
                                <p class="mb-0 color-education" style="font-size: 10pt;">{{$data->title}}</p>
                                @for ($i = 1; $i <= 30; $i++)

                                    <div class="rounded-circle f-left my-2" style="width: 4px; height: 4px; background: grey; margin-left: 1.5px;"></div>

                                @endfor

                                <div class="clear"></div>
                                <p class="" style="font-size: 8pt; color: darkgrey;">{{$data->starting_at}}</p>
                            </div>
                            @if($data->private == 'yes')
                                <div>
                                    <i class="fas fa-lock color-education mt-5 f-rigth"></i>
                                </div>
                            @else
                                <div>
                                    <i class="fas fa-lock color-education mt-5 f-rigth text-white"></i>
                                </div>

                            @endif
                        </div>
                    </div>


                @elseif( $data->category_id == 6 )

                    <!-- love -->

                    <div class="col-sm-12 bg-white py-2 shadow-sm my-3" style="border-radius: 5px;">

                        <div class="d-flex justify-content-between align-items-center">
                            <div class="p-2">
                                <i class="fas fa-heart p-2 rounded-circle text-white bg-love" ></i>
                            </div>
                            <div class="bg-education" style="width: 1px; height: 55px; margin-left: 0px;margin-right: 10px;"></div>
                            <div>
                                <p class="mb-0 color-education" style="font-size: 10pt;">{{$data->title}}</p>
                                @for ($i = 1; $i <= 30; $i++)

                                    <div class="rounded-circle f-left my-2" style="width: 4px; height: 4px; background: grey; margin-left: 1.5px;"></div>

                                @endfor

                                <div class="clear"></div>
                                <p class="" style="font-size: 8pt; color: darkgrey;">{{$data->starting_at}}</p>
                            </div>
                            @if($data->private == 'yes')
                                <div>
                                    <i class="fas fa-lock color-education mt-5 f-rigth"></i>
                                </div>
                            @else
                                <div>
                                    <i class="fas fa-lock color-education mt-5 f-rigth text-white"></i>
                                </div>

                            @endif
                        </div>
                    </div>


                @elseif( $data->category_id == 7 )

                    <!-- finance -->

                    <div class="col-sm-12 bg-white py-2 shadow-sm my-3" style="border-radius: 5px;">

                        <div class="d-flex justify-content-between align-items-center">
                            <div class="p-2">
                                <i class="fas fa-money-bill-alt p-2 rounded-circle text-white bg-finance" ></i>
                            </div>
                            <div class="bg-education" style="width: 1px; height: 55px; margin-left: 0px;margin-right: 10px;"></div>
                            <div>
                                <p class="mb-0 color-education" style="font-size: 10pt;">{{$data->title}}</p>
                                @for ($i = 1; $i <= 30; $i++)

                                    <div class="rounded-circle f-left my-2" style="width: 4px; height: 4px; background: grey; margin-left: 1.5px;"></div>

                                @endfor

                                <div class="clear"></div>
                                <p class="" style="font-size: 8pt; color: darkgrey;">{{$data->starting_at}}</p>
                            </div>
                            @if($data->private == 'yes')
                                <div>
                                    <i class="fas fa-lock color-education mt-5 f-rigth"></i>
                                </div>
                            @else
                                <div>
                                    <i class="fas fa-lock color-education mt-5 f-rigth text-white"></i>
                                </div>

                            @endif
                        </div>
                    </div>


                @elseif( $data->category_id == 8 )

                    <!-- health -->

                    <div class="col-sm-12 bg-white py-2 shadow-sm my-3" style="border-radius: 5px;">

                        <div class="d-flex justify-content-between align-items-center">
                            <div class="p-2">
                                <i class="fas fa-medkit p-2 rounded-circle text-white bg-health" ></i>
                            </div>
                            <div class="bg-education" style="width: 1px; height: 55px; margin-left: 0px;margin-right: 10px;"></div>
                            <div>
                                <p class="mb-0 color-education" style="font-size: 10pt;">{{$data->title}}</p>
                                @for ($i = 1; $i <= 30; $i++)

                                    <div class="rounded-circle f-left my-2" style="width: 4px; height: 4px; background: grey; margin-left: 1.5px;"></div>

                                @endfor

                                <div class="clear"></div>
                                <p class="" style="font-size: 8pt; color: darkgrey;">{{$data->starting_at}}</p>
                            </div>
                            @if($data->private == 'yes')
                                <div>
                                    <i class="fas fa-lock color-education mt-5 f-rigth"></i>
                                </div>
                            @else
                                <div>
                                    <i class="fas fa-lock color-education mt-5 f-rigth text-white"></i>
                                </div>

                            @endif
                        </div>
                    </div>

                @elseif( $data->category_id == 9 )


                    <!-- gastronomy -->

                    <div class="col-sm-12 bg-white py-2 shadow-sm my-3" style="border-radius: 5px;">

                        <div class="d-flex justify-content-between align-items-center">
                            <div class="p-2">
                                <i class="fas fa-utensils p-2 rounded-circle text-white bg-gastronomy" ></i>
                            </div>
                            <div class="bg-education" style="width: 1px; height: 55px; margin-left: 0px;margin-right: 10px;"></div>
                            <div>
                                <p class="mb-0 color-education" style="font-size: 10pt;">{{$data->title}}</p>
                                @for ($i = 1; $i <= 30; $i++)

                                    <div class="rounded-circle f-left my-2" style="width: 4px; height: 4px; background: grey; margin-left: 1.5px;"></div>

                                @endfor

                                <div class="clear"></div>
                                <p class="" style="font-size: 8pt; color: darkgrey;">{{$data->starting_at}}</p>
                            </div>
                            @if($data->private == 'yes')
                                <div>
                                    <i class="fas fa-lock color-education mt-5 f-rigth"></i>
                                </div>
                            @else
                                <div>
                                    <i class="fas fa-lock color-education mt-5 f-rigth text-white"></i>
                                </div>

                            @endif
                        </div>
                    </div>


                @elseif( $data->category_id == 10 )


                    <!-- makeup -->

                    <div class="col-sm-12 bg-white py-2 shadow-sm my-3" style="border-radius: 5px;">

                        <div class="d-flex justify-content-between align-items-center">
                            <div class="p-2">
                                <i class="fas fa-theater-masks p-2 rounded-circle text-white bg-makeup" ></i>
                            </div>
                            <div class="bg-education" style="width: 1px; height: 55px; margin-left: 0px;margin-right: 10px;"></div>
                            <div>
                                <p class="mb-0 color-education" style="font-size: 10pt;">{{$data->title}}</p>
                                @for ($i = 1; $i <= 30; $i++)

                                    <div class="rounded-circle f-left my-2" style="width: 4px; height: 4px; background: grey; margin-left: 1.5px;"></div>

                                @endfor

                                <div class="clear"></div>
                                <p class="" style="font-size: 8pt; color: darkgrey;">{{$data->starting_at}}</p>
                            </div>
                            @if($data->private == 'yes')
                                <div>
                                    <i class="fas fa-lock color-education mt-5 f-rigth"></i>
                                </div>
                            @else
                                <div>
                                    <i class="fas fa-lock color-education mt-5 f-rigth text-white"></i>
                                </div>

                            @endif
                        </div>
                    </div>


                @elseif( $data->category_id == 11 )

                    <!-- productivity -->

                    <div class="col-sm-12 bg-white py-2 shadow-sm my-3" style="border-radius: 5px;">

                        <div class="d-flex justify-content-between align-items-center">
                            <div class="p-2">
                                <i class="fas fa-business-time p-2 rounded-circle text-white bg-productivity" ></i>
                            </div>
                            <div class="bg-education" style="width: 1px; height: 55px; margin-left: 0px;margin-right: 10px;"></div>
                            <div>
                                <p class="mb-0 color-education" style="font-size: 10pt;">{{$data->title}}</p>
                                @for ($i = 1; $i <= 30; $i++)

                                    <div class="rounded-circle f-left my-2" style="width: 4px; height: 4px; background: grey; margin-left: 1.5px;"></div>

                                @endfor

                                <div class="clear"></div>
                                <p class="" style="font-size: 8pt; color: darkgrey;">{{$data->starting_at}}</p>
                            </div>
                            @if($data->private == 'yes')
                                <div>
                                    <i class="fas fa-lock color-education mt-5 f-rigth"></i>
                                </div>
                            @else
                                <div>
                                    <i class="fas fa-lock color-education mt-5 f-rigth text-white"></i>
                                </div>

                            @endif
                        </div>
                    </div>



                @elseif( $data->category_id == 12 )

                    <!-- game -->

                    <div class="col-sm-12 bg-white py-2 shadow-sm my-3" style="border-radius: 5px;">

                        <div class="d-flex justify-content-between align-items-center">
                            <div class="p-2">
                                <i class="fas fa-gamepad p-2 rounded-circle text-white bg-game" ></i>
                            </div>
                            <div class="bg-education" style="width: 1px; height: 55px; margin-left: 0px;margin-right: 10px;"></div>
                            <div>
                                <p class="mb-0 color-education" style="font-size: 10pt;">{{$data->title}}</p>
                                @for ($i = 1; $i <= 30; $i++)

                                    <div class="rounded-circle f-left my-2" style="width: 4px; height: 4px; background: grey; margin-left: 1.5px;"></div>

                                @endfor

                                <div class="clear"></div>
                                <p class="" style="font-size: 8pt; color: darkgrey;">{{$data->starting_at}}</p>
                            </div>
                            @if($data->private == 'yes')
                                <div>
                                    <i class="fas fa-lock color-education mt-5 f-rigth"></i>
                                </div>
                            @else
                                <div>
                                    <i class="fas fa-lock color-education mt-5 f-rigth text-white"></i>
                                </div>

                            @endif
                        </div>
                    </div>

            @endif

        @endforeach

    @else

        <p class="text-center mt-5" style="color: lightgray">You don't have a challenge..</p>

    @endif

        
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
                            <a href="{{route('challenge.index')}}" class="add-class-nav">
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
        <div>
            <a href="{{route('create-challenges')}}">
                <div class="px-2 py-2 rounded" id="deskripsi-create-challenge" style="width: 150px; background: rgb(83, 212, 210); position: fixed; top: 81%; left: 53%; transform: translate(-50%, -50%);">
                    <p class="text-white mb-0 text-center" style="font-size: 9pt;">Create an Challenge</p>
                </div>
            </a>
        </div>

        <div class="rounded-circle shadow-sm" style="width: 50px;height :50px; background: lightpink; padding: 15px 15px; position: fixed; top: 81%; left: 85%; transform: translate(-50%, -50%);">
            <div>
                <center>
                    <i class="fas fa-plus text-white" id="create-challenge" style="font-size: 15pt;"></i>
                </center>
            </div>
        </div>

</body>
</html>