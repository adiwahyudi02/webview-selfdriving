
<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <title>fadeImages</title>
  <link rel="stylesheet" href="{{asset('fontawesome/css/all.css')}}">
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <link rel="stylesheet" href="/css/app.css">
    <script type="text/javascript" src="{{asset('js/fadeimages/js/jquery.fadeImg.js')}}"></script>
    <script>
        $(document).ready(function($) {
            $(".slide").fadeImages({
            time:4000,
            arrows: true,
            complete: function() {
                console.log("Fade Images Complete");
            }
            });

        });
    </script>
  <style>
    * {
      margin: 0;
      padding: 0;
    }

    body {
      margin: 0 auto;
      font-family: "MicrosoftYaHei", Arial, sans-serif;
    }

    .wrap {
      max-width: 1400px;
      /* margin: 20px auto; */
      height: 400px;
    }

    .slide {
      width: 100%;
      height: 100vh;
      margin: 0 auto;
      position: relative;
      overflow: hidden;
    }

    .slide ul {
      margin: 0 auto;
      height: 50vh;
      cursor:pointer;
    }

    .slide ul li {
      width: 100%;
      list-style: none;
      position: absolute;
      z-index: 1;
      height: 100%;
      background-position: top center;
      top: 0;
      left: 0;
      right: 0;
      background-repeat: no-repeat;
    }

    .slide #dots {
      position: absolute;
      left: 0;
      right: 0;
      top: 80%;
      bottom: 10px;
      height: 30px;
      z-index: 9999;
      font-size: 0;
      text-align: center;
      opacity: 0.7;
    }

    .slide #dots a {
      background: #333;
      margin: 0 6px;
      width: 18px;
      height: 18px;
      box-shadow: 0 0 1px 0 #333;
      border-radius: 100%;
      display: inline-block;
      cursor: pointer;
    }

    .slide #dots a.active {
      background: #FFF;
    }

    .slide .arrow {
      position: absolute;
      top: 50%;
      width: 70px;
      height: 100px;
      margin-top: -50px;
      background: #FFF;
      z-index: 999;
      opacity: 0.7;
      line-height: 100px;
      color: #333;
      text-align: center;
      text-decoration: none;
      font-size: 14pt;
    }

    .slide .arrow.prev {
      left: 0;
      display: none;
    }

    .slide .arrow.next {
      right: 0;
      display: none;
    }

    .slide .arrow:active {
      background: #FAFAFA;
      opacity: 1;
    }

    .fadeimg{
        width: 100%;
        height: 100vh;
    }
  </style>
</head>

<body>
  <div class="wrap">
    <div class="slide">
      <ul>
        <li style="background: cadetblue" class="fadeimg"></li>
        <li style="background: #ff4d00" class="fadeimg"></li>
        <li style="background: #ffb3ba" class="fadeimg"></li>
        <li style="background: lightblue" class="fadeimg"></li>
      </ul>
    </div>
  </div>
</body>

</html>
