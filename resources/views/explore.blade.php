<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.css')}}">
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <link rel="stylesheet" href="/css/app.css">
    <title>Explore</title>
    <style>

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
        
    </style>
</head>
<body>
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
                            <a href="{{route('explore')}}" class="add-class-nav">
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