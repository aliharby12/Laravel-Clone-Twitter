<h3 class="font-bold text-xl mb-4">Friends</h3>

<ul>
  @foreach (range(1, 8) as $index)

    <li>
      <div class="flex mb-4 items-center text-sm">
        <img

          src="/images/profile.jpg"

          alt=""
          style="height:20px"
          class="rounded-full mr-2"
          >

          Ali Harby
      </div>
    </li>

  @endforeach
</ul>
