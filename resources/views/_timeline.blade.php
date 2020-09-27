<div class=" border border-blue-300 rounded-lg">
    @forelse ($tweets as $tweet)
      @include('_tweet')
    @empty
    <div class="flex justify-center">
      <h1 class="font-bold">No Tweets Yet</h1>
    </div>
  @endforelse
</div>
