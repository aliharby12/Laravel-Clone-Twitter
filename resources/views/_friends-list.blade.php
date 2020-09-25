<h3 class="font-bold text-xl mb-4">Following</h3>

<ul>
  @foreach (auth()->user()->follows as $user)

    <li>
      <div class="flex mb-4 items-center text-sm">
        <img src="/images/profile.jpg"

        alt="" style="height:40px" class="mr-2 rounded-full">

          {{ $user->name }}
      </div>
    </li>

  @endforeach
</ul>
