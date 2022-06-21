@extends('layouts.app')

@section('content')
<div class="container">
    
   <div class="row">
    <div class="col-3 p-5">
        <img src="https://media.afrocharts.com/file/afrocharts-media/uploads/2020/5/Nyampinga-by-Mani-Martin-afrocharts.jpg" class="rounded-circle"  style="max-height: 100px;">
    </div>
    
   
    <div class="col-9 pt-5">
        <div class="d-flex justify-content-between align-items-baseline ">
            <h1>{{ $user->username}}</h1>
            <a href="/p/create">Add New Post</a>
        </div>
        <div class="d-flex">
            <div class="pr-5"><strong>153</strong>posts</div>
            <div class="pr-5"><strong>23k</strong>followers</div>
            <div class="pr-5 "><strong>2</strong>following</div>

        </div>
            <div  class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div> {{ $user->profile->description}} </div>
            <div> <a href="">{{ $user->profile->url ?? 'N/A'}}</a></div>
        </div>
        <div class="row pt-5">

        @foreach($user->posts as $post)
            <div class="col-4">
                <img src="/storage/{{ $post->image }}" class="w-100">
            </div>
        @endforeach
           
        </div>
    </div>
    </div>

</div>
@endsection
