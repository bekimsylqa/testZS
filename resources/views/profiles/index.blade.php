@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.fprn1-1.fna.fbcdn.net/v/t51.2885-19/s150x150/75616180_940503576330570_7341750528084279296_n.jpg?_nc_ht=instagram.fprn1-1.fna.fbcdn.net&_nc_ohc=kYlndV4cURsAX8e-5AP&oh=f81c78368bb1ed9429726f48f5d4b0f9&oe=5EBF867C" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
           <div class="d-flex justify-content-between align-items-baseline">
               <h1>{{ $user->username }}</h1>
               <a href="/p/create">Add new post</a>
           </div>
            <div class="d-flex">
            <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> posts </div>
            <div class="pr-5"><strong>999</strong> followers </div>
            <div class="pr-5"><strong>999</strong> following </div>
                </div>
            <div class="pt-4 font-weight-bold" >{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>
    <div class="row pt-5">
        @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="/p/{{ $post->id }}">
                    <img src="/storage/{{ $post->image }}" class="w-100">
                </a>
            </div>
        @endforeach

    </div>
</div>
@endsection
