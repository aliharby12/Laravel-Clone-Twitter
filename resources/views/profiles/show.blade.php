@extends('layouts.app')

@section('content')
  <header class="mb-10 relative">
    <img src="/images/background.jpg"
    alt="Profile background" style="width:100%;border-radius: 20px;" class="mb-2">

    <div class="flex justify-between mb-3 mt-8 items-center">
      <div>
        <h2 class="font-bold text-sxl bm-2">{{ $user->name }}</h2>
        <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
      </div>

      <div>
        <a href="" class="bg-green-500 rounded-lg shadow py-2 px-2 text-white">Edit Profile</a>
        <a href="" class="bg-blue-500 rounded-lg shadow py-2 px-2 text-white">Follow Me</a>
      </div>
    </div>

      <img src="/images/profile.jpg"
      alt="" class="mr-2 absolute"
      style="width: 130px; left:calc(50% - 75px); top:60%; border-radius:50%"
      >

  </header>


  @include('_timeline', ['tweets' => $user->tweets])
@endsection
