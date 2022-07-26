<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
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
        .nav-wrapper{
            width: 70%;
            max-width: 1000px;
            height: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
    
        .brand-img{
            height: 40px;
            margin-top: 5px;
        }
    
        
        .icon{
            height: 100%;
            cursor: pointer;
            margin: 0 10px;
            display: inline-block;
        }
        .nav-items{
            height: 22px;
            position: relative;
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
            width: 100%;
            height: 120px;
            background: #fff;
            border: 1px solid #dfdfdf;
            border-radius: 2px;
            padding: 10px;
            padding-right: 0;
            display: flex;
            align-items: center;
            overflow: hidden;
            overflow-x: auto;
        }
        .status-card{
                flex: 0 0 auto;
                width: 80px;
                max-width: 80px;
                display: flex;
                flex-direction: column;
                align-items: center;
                margin-right: 15px;
        }
        .profile-pic{
            width: 70px;
            height: 70px;
            border-radius: 50%;
            overflow: hidden;
            padding: 3px;
            cursor: pointer;
            align-items: left;
            background: linear-gradient(45deg, rgb(255, 230, 0), rgb(220, 244, 0) 80%);
    
        }
    
        .profile-pic img{
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
            border: 2px solid #fff;
        }
    
        .username{
            width: 100%;
            overflow: hidden;
            text-align: left;
            font-size: 12px;
            margin-top: 5px;
            color: rgb(0, 0, 0,);
    
    
    
        }
        .post{
            width: 100%;
            height: auto;
            background: #fff;
            border: 2px solid #dfdfdf;
            margin-top: 40px;
        }
    
        .info{
        width: 100%;
        height: 60px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 20px;
        }
    
        .info .username{
            width: auto;
            font-weight: bold;
            color: #000;
            font-size: 14px;
            margin-left: 10px;
    
        }
    
        .info .options{
            height: 10px;
            cursor: pointer;
        }
    
        .info .user{
            display: flex;
            align-items: center;
    
        }
        
        .info .profile-pic{
            height: 40px;
            width: 40px;
            padding: 0;
            background: none;
    
        }
    
        .post-image{
            width: 100%;
            height: 500px;
            object-fit: cover;
        }
        .post-content{
            width: 100%;
            padding: 20px;
        }
    
        .likes{
            font-weight: bold;
        }
    
        .description{
            margin: 10px 0;
            font-size: 14px;
            line-height: 20px;
            font-weight: bold;
        }
    
        .post-time{
            font-size: 10px;
            color: rgb(208, 208, 208,);
    
        }
    
        .lgn{
            position: relative;
            height: 130%;
            cursor: pointer;
            margin: 0 10px;
            display: inline-block;
            margin-left: 30px;
    
    
        }

        .user{
            position: relative;
            display: inline-block;
            margin-right: 160px;


        }
        .pfp{
            height: 100%;
            display: inline-block;
            border-radius: 50%;
            

        }
    
    
    </style>
            @include('layouts.navigation')  

            <!-- Page Content -->
            <main>
                <nav class="navbar">
                    <div class="nav-wrapper">
                        <a href="/"><img src="/img/finstagram-logo.png" class="brand-img" alt=""></a>
                        <div class="nav-items">
                        @auth
                            <p class="user"> Welcome, {{ Auth::user()->name }}</p>
                            <img src="/img/home.png" class="icon" alt="">
                            <img src="/img/messenger.png" class="icon" alt="">
                            <img src="/img/add.png" class="icon" alt="">
                            <img src="/img/explore.png" class="icon" alt="">
                            <img src="/img/like.png" class="icon" alt="">
                        @endauth
                            @auth
                                <img src="{{ Auth::user()->image }}" class="pfp" alt="">
                                <form method="POST" action="{{ route('logout') }}" class="lgn">
                                    @csrf
                
                                    <x-responsive-nav-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        <img src="/img/logout.png" class="lgn" alt=""></a>
                                    </x-responsive-nav-link>
                                </form>
                            @endauth
                            @guest
                                Todo add the login button    
                            
                            @endguest
                            
                        </div>
                    </div>
                </nav>
                <section class="main">
                    <div class="wrapper">
                        <div class="left-col">
                            <div class="status-wrapper">
                                @foreach ($story_users as $user)
                                <div class="status-card">
                                    <div class="profile-pic"><img src="/img/profile_photos/{{ $user->image }}"alt=""></div>
                                    <p class="username">{{ $user->name }}</p>
                                </div>
                                @endforeach
            
                            </div>
            
                           {{$slot}}
            
                        </div>
                        <div class="right-col">
            
                        </div>
            
                    </div>
            
                </section>
            
            </main>
</html>
