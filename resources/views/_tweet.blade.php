<div class="flex p-4 border-b border-b-gray-400">

  <div class="mr-2 flex-shrink-0">
    <img src="/images/profile.jpg"

    alt="" style="height:40px" class="mr-2 rounded-full">
  </div>

  <div>

    <h5 class="font-bold mb-4">{{ $tweet->user->name }}</h5>
    <p class="text-sm">

      {{ $tweet->body }}
    </p>

  </div>
</div>
