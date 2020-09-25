@extends('layouts.app')

@section('content')

  <div class="lg:flex lg:justify-between">

    <div class="lg:w-32">
      @include('_sidebar-links')
    </div>
    {{-- end of _sidebar div --}}

    <div class="lg:flex-1 lg:mx-10" style="max-width:700px">
      @include('_publish-tweet-panel')

      <div class=" border border-gray-300 rounded-lg">

        @foreach ($tweets as $tweet)

          @include('_tweet')
          
        @endforeach

      </div>
    </div>
    {{-- end of feeds and timeline --}}


    <div class="lg:w-1/6 bg-blue-100 rounded-lg p-4">
      @include('_friends-list')
    </div>
    {{-- end of friends div --}}

  </div>
  {{-- end of base div --}}

@endsection
