<div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">

  <form action="/tweets" method="POST">
    @csrf

    <textarea name="body" class="w-full p-10 my-4" placeholder="Let's Tweet!" style="border-radius:8px; background-color: #1d2b42"></textarea>


    <footer class="flex justify-between">
      <img src="{{ auth()->user()->avatar_path }}" alt="my avatar" style="height:40px" class="rounded-full mr-2">

      <button type="submit" name="button" class="bg-blue-500 rounded-full shadow py-2 px-5 text-white text-sm hover:bg-blue-700">Tweet</button>
    </footer>

  </form>

  @error('body')
    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
  @enderror

</div>
