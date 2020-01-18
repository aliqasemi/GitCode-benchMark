<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{URL::asset('CJ/css/bootstrap.css')}}" type="text/css">
    <link rel="stylesheet" href="{{URL::asset('CJ/css/style.css')}}" type="text/css">
</head>
<body>
<div class="container" style="padding-top: 5% ; margin: 0 auto">
    <div class="row">
        <h1 class="col-9 bg-info" style="border-radius: 20px ; padding: 5px ; margin : 0 auto ; text-align: center">&nbsp;&nbsp;Dr. Biglari : Inplemention Of Database System</h1>
        <br>
        <h2 class="col-6 bg-info" style="border-radius: 20px ; padding: 5px ; margin : 0 auto ; text-align: center">&nbsp;&nbsp;Vahid Baghani Ali Qasemi </h2>
    </div>
    <div class="row  text-center">
        <div class="col-9" style="margin: 0 auto ; padding: 50px ; border-radius: 20px ; cursor: pointer">

            <form  class="bg-info" style="padding: 40px ; border-radius: 20px ; margin: 0 auto" method="post" action="@yield('action')" enctype="multipart/form-data">
                @yield('{{csrf_field()}}')
                <div class="form-group">
                    <div class="row">
                        <div class="col-9 bg-warning" style="border-radius: 5px ; margin: 0 auto">
                            @yield('data-input-output-label')
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-9 bg-warning" style="border-radius: 5px ; margin: 0 auto ; padding: 20px">
                            <div class="col-12">
                                @yield('data-input-output')
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
<script type="text/javascript" src="{{URL::asset('CJ/js/bootstrap.js')}}" ></script>
<script type="text/javascript" src="{{URL::asset('CJ/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('CJ/js/script.js')}}"></script>
</html>
