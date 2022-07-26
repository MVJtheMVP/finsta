<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finstagram</title>
    <style>
        a { text-decoration: none; }
    </style>
</head>
<style typr="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap');
    *{
        margin:0;
        padding: 0;
        box-sizing: border-box;
    }

    body{
        width:100%;
        background: #fafafa;
        position: relative;
        font-family: 'roboto', sans-serif;
    }

    .navbar{
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 50px;
        background: #fff;
        border-bottom: 1px solid #dfdfdf;
        display: flex;
        justify-content: center;
        padding: 5px 0;
    
    }
    

    .brand-img{
        height: 60px;
        width: 175px;
        position: fixed;
        top: 220px;
        margin-left: 100px;
        
    }

    .main{
        width: 100%;
        padding: 40px 0;
        display: flex;
        justify-content: center;
        margin-top: 50px;
    }

    .wrapper{
        width: 70%;
        max-width: 1000px;
        display: grid;
        grid-template-columns: 60% 40%;
        grid-gap: 30x;
    }

    .left-col{
        display: flex;
        flex-direction: column;
    }

    .status-wrapper{
        width: 400px;
        height: 400px;
        margin: 0 auto;
        position: Relative;
        margin-left:250px;
        top: 100px;
        background: #fff;
        border: 1px solid #dfdfdf;
        border-radius: 2px;
        padding: 20px;
        padding-right: 0;
        display: flex;
        overflow: hidden;
        overflow-x: auto;
    }

    .register{
        width: 400px;
        height: 100px;
        margin: 0 auto;
        position: Relative;
        margin-left:250px;
        top: 120px;
        background: #fff;
        border: 1px solid #dfdfdf;
        border-radius: 2px;
        padding: 20px;
        padding-right: 0;
        display: flex;
        align-items: center;
        overflow: hidden;
        overflow-x: auto;
       
    }


    .font{
        align-items: center;
        margin-left: 65px;

    }

    .password{
        position: fixed;
        right: 0px;
        vertical-align: -80px;
        top: 450px;
        margin-right: 890px;

    }
    .error{

        position: fixed;
        right: 0px;
        vertical-align: -80px;
        top: 300px;
        margin-right: 820px;
    
    }

    .login{
        border-radius: 5px;
        background: #405DE6;
        padding: 15px; 
        width: 175px;
        height: 25px;
        color: white;
        position: relative;
        top: 270px;
        justify-content: center;
        margin-left: 101px;
        cursor: pointer;

    }

    .forgot{
        position: relative;
        top: 285px;
        margin-left: 120px;
        cursor: pointer;



    }

    .trouble{
        position: relative;
        top: 80px;
        margin-left: 120px;
        font-size: 15px;
        font-weight: 700;

    }

    .enter{
        position: relative;
        top: 100px;
        width: 250px;
        font-size: 13px;
        color: lightgray;
        margin-left: 70px;

    }

    .email{
        position: fixed;
        margin-top: 120px;
        margin-left: 105px;
        height: 30px;

    }

    .rgst{
        position: relative;
        border-radius: 5px;
        margin-top: 165px;
        background: #405DE6;
        width: 175px;
        height: 25px;
        color: white;
        cursor: pointer;
        outline: none;
        margin-left: 105px;

    }
    .or{
        position: relative;
        margin-left: 25px;
        margin-top: 20px;
       
    }

    .newacc{
        position: relative;
        font-size: 14px;
        font-weight: 700;
        margin-left: 125px;
        cursor: pointer;

    }

    .nodec{
        text-decoration: none;

    }


</style>
<body>

    <section class="main">
        <div class="wrapper">
            <div class="left-col">
                <div class="status-wrapper">
                    <a href="/"><img src="/img/finstagram-logo.png" class="brand-img" alt=""></a><br> 
                        <br>
                     <!-- Session Status -->
                        <x-auth-session-status class="error" :status="session('status')" />

                    <!-- Validation Errors -->
                        <x-auth-validation-errors class="error" :errors="$errors" />
                        <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <p class="trouble"> Trouble Logging In?</p>

                        <p class="enter"> Enter your email and we'll send you link to reset you password.</p>

                        <div>
                        <x-input id="email" class="email" type="email" placeholder="Enter email" name="email" :value="old('email')" required autofocus />
                        </div>

                        <x-button class="rgst">
                            {{ __('Email Password Reset Link') }}
                        </x-button>

                        <img src="/img/or.png" class="or" alt="">

                        <a href="/register" class="nodec"><p class="newacc"> Create New Account</p><a>

                    </div>
                    

                </div>

            </div>

        </div>

    </section>

</html>
