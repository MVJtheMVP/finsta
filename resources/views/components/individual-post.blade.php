<div class="post">
    <div class="info">
        <div class="user">
            <div class="profile-pic"><img src="/img/profile_photos/{{ $post->user->image}}" alt=""></div>
            <a href="/users/{{ $post->user->id }}"><p class ="username">{{ $post->user->name }}</p>
        </div>
        <img src="img/dots.png" class="options" alt="">
    </div>
    <a href="/posts/{{ $post->id }}">
    <img src="{{ $post->image }}" class="post-image" alt=""></a><br>
    <p class="likes">{{$post->likes}} </p>
    <p class="description"><span>{{ $post->user->name}}</span>  {{$post->caption}}</p>
    <p class="post-time"> {{$post->created_at}}</p>
</div>