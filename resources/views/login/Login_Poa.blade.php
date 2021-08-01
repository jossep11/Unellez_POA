<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset ('css/styleslogin.css') }}">
    <title>Document</title>
    
</head>
<body>  

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form class="login100-form validate-form"  action="{{route("poa.store")}}" method="post">
                @csrf
                <span class="login100-form-title p-b-34">
                    Account Login
                </span>
                
                <div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type user name">
                    <input id="first-name" class="input100" type="text" name="name" placeholder="User name">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
                    <input class="input100" type="password" name="password" placeholder="Password">
                    <span class="focus-input100"></span>
                </div>
                
                <div class="container-login100-form-btn">
                    <button  type="submit" class="login100-form-btn">
                        Sign in
                    </button>
                </div>

            </form>

            <div class="login100-more" style="background-image: url('images/bg-01.jpg');"></div>
        </div>
    </div>
</div>





</body>
</html>