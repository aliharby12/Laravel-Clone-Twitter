@extends('layouts.app')

@section('content')
  <header class="mb-10 relative">
    <img src="{{ $user->cover_path }}"
    alt="Profile background" style="width:100%;border-radius: 20px;" class="mb-2">

    <div class="flex justify-between mb-3 mt-8 items-center">
      <div>
        <h2 class="font-bold text-sxl bm-2">{{ $user->name }}</h2>
        <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
        <p class="text-sm">{{ $user->tweets->count() }} Tweets</p>
        <p class="text-sm">{{ $user->follows->count() }} Following</p>
        <p class="text-sm">{{ $user->followers->count() }} Followers</p>
      </div>

      <div class="flex">
        @if (auth()->user()->is($user))
          <a href="{!! route('edit', $user) !!}" class="bg-blue-500 rounded-full shadow py-2 px-2 text-white">Edit Profile</a>
        @endif
        @unless (auth()->user()->is($user))
          <form method="POST" action="{!! route('follow', $user->username) !!}">
            @csrf

            <button type="submit"
              class="bg-blue-500 rounded-full shadow py-2 px-2 text-white ml-2">
              {{ auth()->user()->following($user) ? 'Unfollow Me' : 'Follow Me' }}
            </button>
          </form>
        @endunless
      </div>
    </div>

    <div class="flex justify-center mb-3 mt-8">
      <p>{{ $user->description }}</p>
    </div>

      <img src="{{ $user->avatar_path }}"
      alt="" class="mr-2 absolute"
      style="width: 130px; left:calc(50% - 75px); top:50%; border-radius:50%"
      >

  </header>


  @include('_timeline', ['tweets' => $tweets])
@endsection
