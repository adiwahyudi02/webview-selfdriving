<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('fontawesome/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <link rel="stylesheet" href="/css/app.css">
    <style>
    
    body{
        background: white;
    }
    .f-right{
        float: right;
    }

    .sub-title-form {
        font-family: Comic Sans MS;
        color: rgb(45,165,163);
        font-size: 13pt;
        margin-bottom: 30px;
        /* margin-top: 25px; */
        margin-left: 25px;
        /* margin: auto; */
    }

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
        font-size: 10pt;
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
        border: 1px solid rgb(83, 212, 210);
        color: white;
        font-family: berlin sans fb;
        font-size: 9pt;
        padding: 5px 20px 5px 20px;
        border-radius: 5px;
        cursor: pointer;
        transition: 0.5s;
    }
    .input-submit:hover{
        background: rgb(83, 212, 210);
        color: white;
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
            font-size: 13px;
            height: 17px;
            width: 17px;
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
            font-size: 9pt;
            transition: 0.2s;
        }
    
    </style>
</head>
<body>

    <main class="py-5">
        @yield('content')
    </main>

</body>
</html>
