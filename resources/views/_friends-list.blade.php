<div class="border border-blue-500 rounded-lg p-5 mb-5">
  <h3 class="font-bold text-xl mb-4"><i class="fa fa-users mr-2"></i>Following</h3>

  <ul>
    @forelse (auth()->user()->follows as $user)

      <li>
        <a href="{!! route('profile', $user) !!}">
          <div class="flex mb-4 items-center text-sm font-bold">
            <img src="{{ $user->avatar_path }}"
            alt="" style="height:40px" class="mr-2 rounded-full">
              {{ $user->name }}
          </div>
        </a>
      </li>
    @empty
      <h1 class="font-bold">No Following User yet</h1>
    @endforelse
  </ul>

</div>
<div class="border border-blue-500 rounded-lg p-5 mb-5">
  <h3 class="font-bold text-xl mb-4"><i class="fa fa-users mr-2"></i>Followers</h3>

  <ul>
    @forelse (auth()->user()->followers as $user)

      <li>
        <a href="{!! route('profile', $user) !!}">
          <div class="flex mb-4 items-center text-sm font-bold">
            <img src="{{ $user->avatar_path }}"
            alt="" style="height:40px" class="mr-2 rounded-full">
              {{ $user->name }}
          </div>
        </a>
      </li>
    @empty
      <h1 class="font-bold">No Followers yet</h1>
    @endforelse
  </ul>

</div>
