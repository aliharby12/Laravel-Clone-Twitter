<div class=" border border-blue-300 rounded-lg">
    @forelse ($tweets as $tweet)
      @include('_tweet')
    @empty
    <div class="flex justify-center">
      <h1 class="font-bold">No Tweets Yet</h1>
    </div>
  @endforelse
</div>

@if ($tweets->total() > $tweets->perPage())
  <div class="flex justify-center border border-blue-300 rounded-lg mt-3">
    <h1 class="font-bold">{{ $tweets->links() }}</h1>
  </div>
@endif
