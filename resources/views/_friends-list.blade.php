<h3 class="font-bold text-xl mb-4"><i class="fa fa-users mr-2"></i>Following</h3>

<ul>
  @foreach (auth()->user()->follows as $user)

    <li>
      <a href="{!! route('profile', $user) !!}">
        <div class="flex mb-4 items-center text-sm font-bold">
          <img src="/images/profile.jpg"
          alt="" style="height:40px" class="mr-2 rounded-full">
            {{ $user->name }}
        </div>
      </a>
    </li>

  @endforeach
</ul>
