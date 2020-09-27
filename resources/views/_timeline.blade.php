<div class=" border border-blue-300 rounded-lg">
  @if ($tweets->count() > 0)
    @foreach ($tweets as $tweet)
      @include('_tweet')
    @endforeach

  @else
    <div class="flex justify-center">
      <h1 class="font-bold">No Tweets Yet</h1>
    </div>
  @endif
</div>
