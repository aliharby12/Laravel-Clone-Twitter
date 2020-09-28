@extends('layouts.app')

@section('content')

  <div>
    @foreach ($users as $user)
      <a class="flex items-center mb-5" href="{!! route('profile', $user) !!}">
        <img src="{{ $user->avatar_path }}" width="60" class="mr-4 rounded-full">

        <div>
          <h4 class="font-bold">{{ '@' . $user->username }}</h4>
        </div>
      </a>
    @endforeach
  </div>
  <div class="flex justify-center border border-blue-300 rounded-full">
    <h1 class="font-bold">{{ $users->links() }}</h1>
  </div>
@endsection
