@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
       <div class="col-3 p-5">
           <img src="https://vignette.wikia.nocookie.net/dragonball/images/8/82/SS3_FCM.png/revision/latest/scale-to-width-down/323?cb=20160410144508" class="rounded-circle" style="max-height: 300px; width: auto;">
       </div>
       <div class="col-9 pt-5">
           <div class="d-flex justify-content-between align-items-baseline">
            <h1>{{ $user->username }}</h1>
            <a href="/p/create">Add New Post</a>
          </div>
           <div class="d-flex">
               <div class="pr-5"><strong>500</strong> post</div>
               <div class="pr-5"><strong>5k</strong> followers</div>
               <div class="pr-5"><strong>50</strong> following</div>
           </div>
           <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
           <div>{{ $user->profile->description }}</div>
           <div><a href="#">{{ $user->profile->url }}</a></div>
       </div>
   </div>

   <div class="row pt-5">
    @foreach($user->posts as $post)

    <div class="col-4 p-3">
           <img src="/storage/{{ $post->image }}" class="w-100">
       </div>


    @endforeach

   </div>


</div>
@endsection