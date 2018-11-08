<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
          html, body {
        background: #ff9c08;
        color: #fff;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 24px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
a {
  color:#fff;
}
p {
  padding: 3em 0;
}
.container {
  text-align:center;
  padding: 3em 0;


}
p.double {border-style: double;}
#logo {
  display: inline-block;
  position: relative;
  width: 100%;
  padding-bottom: 10%;
  vertical-align: middle;
  overflow: hidden;
}

svg {
  display: inline-block;
  position: absolute;
  top: 0;
  left: 0;
  width:100%;
  height:100%;
}
        </style>
    </head>
<body>
        <div class="container">
          <div id="withStyles"></div>
            </Br></Br>
              <div class="flex-center position-ref full-height">
                  <div class="content">
                      <div class="title m-b-md"><p class="double">WEBAPP</p>
                      </div>
                          <div id="app"></div>
                      </div>
                  </div>
              </div>


<script src="js/app.js"></script>
<script src="js/components/Example.js"></script>
</body>
</html>
