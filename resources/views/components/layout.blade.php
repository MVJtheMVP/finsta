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

    .user-profile{
        width: 22px;
        border-radius: 50%;
        background-image: url(/img/profile-pic.png);
        background-size: cover;

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


</style>
<body>

    <nav class="navbar">
        <div class="nav-wrapper">
            <a href="/"><img src="/img/finstagram-logo.png" class="brand-img" alt=""></a>
            <div class="nav-items">
                <img src="/img/home.png" class="icon" alt="">
                <img src="/img/messenger.png" class="icon" alt="">
                <img src="/img/add.png" class="icon" alt="">
                <img src="/img/explore.png" class="icon" alt="">
                <img src="/img/like.png" class="icon" alt="">
                <a href="/login"><img src="/img/login.png" class="lgn" alt=""></a>
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

   <!--

    Next steps for moving profile pictures into the DB:
    - put them all in the same directory, separate from other images (DONE)
    - Create a new migration to add a "image" column to the users table (DONE)
    - In your users table, or in your seeders, seed all of your sample people above with their correct image filename(DONE)
    - Run your seeder: php artisan db:seed (DONE)
    - Update the instagram posts to reference the users table
        - Eloquent relationships: Post BelongsTo User (https://laracasts.com/series/laravel-8-from-scratch/episodes/24), or the docs
         (https://laravel.com/docs/9.x/eloquent-relationships#one-to-many-inverse but their "Post has many comments" is our "User has many posts")
         (laracast video user=category posts=post declare "foreignId in create posts table("user_id" )
        - add a new column to posts table that is "user_id" (create a new migration to do this); make this field nullable() for now
        - add a relationship to the Post model that is "user()"
        - once that works you can now, on any $post, just reference $post->user and that will be the full user record for the connected user
        - add posts to the database seeder
        - When rendering a post into the template, you can then say $post->user->image for the image URL and $post->user->name for their username
    - Update the references to each user in the templates to pull the user information
        - STories template at the top
        - Also, any time you're looking up a user in the individual post template

    Next steps:
    - setting up user login and registration

    
    Will probably do this *after* we get back to Sail vs other environments

    Next steps for the like button:
    - We can't build likes until we have user registration/login set up
    - Create a Like model and migration
    - each like will have: "post_id" so you know what post is being liked, and "user_id", so you know which user is liking it
    - Then, you have to update the UI of the page so that when a user is logged in, the heart button is red if this user has liked this post
        - we will pair to make a method on the user model that is $user->likes($post) and will return true or false
    - when a user is logged in, make the like button just a traditional link to a route that's something like localhost/posts/4/like
    - In that route, you'll create a new "like" in the database for the current user and the post you got from the URL
    - That route will also have to make sure that if a like already exists, a user can't double like
    - If the post is already liked, the link should instead take them to /posts/4/unlike, which will find that like in the db and delete it


-->

<!--logos from <a href="https://www.flaticon.com/free-icons/heart" title="heart icons">Heart icons created by Freepik - Flaticon</a>-->
</body>
</html>
