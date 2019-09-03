<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.css')}}">
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <link rel="stylesheet" href="/css/app.css">
    <title>Edit your profile</title>
    <script>
        $(document).ready(function(){
            $('#iconShowPassword').click(function(){
                $('#input-password-signUp').attr('type', 'text');
                $('#iconShowPassword').fadeToggle();
                $('#iconClosePassword').fadeIn();
            });

            $('#iconClosePassword').click(function(){
                $('#input-password-signUp').attr('type', 'password');
                $('#iconClosePassword').fadeToggle();
                $('#iconShowPassword').fadeIn();
            });

            // edit-photo-profile

            var readURL = function(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('.profile-pic').attr('src', e.target.result);
                    }
            
                    reader.readAsDataURL(input.files[0]);
                }
            }
            

            $(".file-upload").on('change', function(){
                readURL(this);
            });
            
            $(".upload-button").on('click', function() {
            $(".file-upload").click();
            });

        });
    </script>
    <style>
        body{
            padding-top: 15%;
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

        .w-profile{
            width: 80px;
            height: 80px;
            border-radius: 50%;
            border: 1px grey solid;
        }
        .img-profile{
            background: url('../img/creativity.png');
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

        /* form */

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


        /* profile photo update */

        .profile-pic {
            max-width: 200px;
            max-height: 200px;
            display: block;
        }

        .file-upload {
            display: none;
        }
        .circle {
            border-radius: 1000px !important;
            overflow: hidden;
            width: 80px;
            height: 80px;
            border: 1px grey solid;
            /* position: absolute; */
            /* top: 72px; */
        }
        img {
            max-width: 100%;
            height: 80px;
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
            <div class="flex-grow-1 bd-highlight h6 text-white font-berlin">Your Profile</div>
        </div>
    </div>
    
    <div class="container px-5 pt-4 pb-4 bg-white w-bg-profile">
        <div class="">
                <div class="circle" style="margin: auto;">
                <!-- User Profile Image -->
                <img class="profile-pic" src="../img/creativity.png">

                <!-- Default Image -->
                <!-- <i class="fa fa-user fa-5x"></i> -->
                </div>
                <center>
                    <div style="margin-top: 10px;">
                        <p class="text-center mb-0 upload-button text-white rounded px-2 py-1" style="width: 100px;background: lightpink; font-size: 8pt;">Change Photo</p>
                        <input class="file-upload" type="file" accept="image/*"/>
                    </div>
                </center>
        </div>
    </div>

    <div class="container mt-4" style="width: 90%">
            <form name="logIn" action="doLogin.php" method="post">
                <div class="w-form-both" id="border-bottom-name-signUp">
                    <input type="text" name="inputName" value="{{auth()->user()->name}}" class="input-form" id="input-name-signUp" style="text-indent: 10px;">
                    <i class="fas fa-signature icon-input" id="icon-name-signUp"></i>
                </div>

                <div class="w-form-both" id="border-bottom-name-signUp">
                    <input type="text" name="inputName" value="{{auth()->user()->username}}" class="input-form" id="input-name-signUp" style="text-indent: 10px;">
                    <i class="far fa-user icon-input" id="icon-name-signUp"></i>
                </div>

                <div class="w-form-both" id="border-bottom-email-signUp">
                    <input type="email" name="inputEmailRegister" value="{{auth()->user()->email}}" class="input-form" id="input-email-signUp" style="text-indent: 10px;">
                    <i class="far fa-envelope icon-input" id="icon-email-signUp"></i>
                </div>

                <div class="w-form-both pr-3" id="border-bottom-password-signUp">
                    <input type="password" name="inputPasswordRegister" value="password" class="input-form f-left" id="input-password-signUp" style="width: 80%;text-indent: 10px;">
                    <div class="">
                        <i class="far fa-eye icon-input" id="iconShowPassword" style="position: absolute;"></i>
                        <i class="far fa-eye-slash icon-input" id="iconClosePassword" style="display:none; position: absolute;"></i>
                    </div>
                    <i class="fas fa-unlock-alt icon-input f-right" id="icon-password-signUp"></i>    
                    <div style="clear:both;"></div>
                </div>

                <div>
                    <input name="submit-signUp" id="btnRegister" type="submit" value="Submit" class="input-submit f-right">
                    <div style="clear:both;"></div>
                </div>  

            </form>
    </div>
</body>
</html>