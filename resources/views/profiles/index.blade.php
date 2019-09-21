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
            <a href="#">Add New Post</a>
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
       <div class="col-4 p-3">
           <img src="https://www.bunkaku.net/wp-content/uploads/2019/03/blog0257-580x400.jpg" class="w-100">
       </div>
        <div class="col-4 p-3">
           <img src="https://www.bunkaku.net/wp-content/uploads/2019/03/blog0256-600x317.jpg" class="w-100">
       </div>
        <div class="col-4 p-3">
           <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQy6pe6GvItDOXvaPUtLYKeh4IcI2AUlqgQOCbQWwr5o86K4Yw4" class="w-100">
       </div>
        <div class="col-4 p-3">
           <img src="https://ryskkbysh.com/wp-content/uploads/2018/07/SnapShot5.jpg" class="w-100">
       </div>
        <div class="col-4 p-3">
           <img src="https://ryskkbysh.com/wp-content/uploads/2018/07/SnapShot-2.jpg" class="w-100">
       </div>
        <div class="col-4 p-3">
           <img src="https://www.bunkaku.net/wp-content/uploads/2019/05/blog0406-600x275.jpg" class="w-100">
       </div>
       <div class="col-4 p-3">
           <img src="https://ryskkbysh.com/wp-content/uploads/2018/07/SnapShot3.jpg" class="w-100">
       </div>
       <div class="col-4 p-3">
           <img src="https://ryskkbysh.com/wp-content/uploads/2018/07/SnapShot4.jpg" class="w-100">
       </div>
       <div class="col-4 p-3">
           <img src="https://hibinokoto.net/wp-content/uploads/2018/03/2018y03m28d_212553305.png" class="w-100">
       </div>
   </div>
</div>
@endsection
