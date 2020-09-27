@extends('layouts.app')

@section('content')

  <form action="{!! route('profile', $user) !!}" method="POST" class="text-black" enctype="multipart/form-data">
    @csrf
    @method('PATCH')

    <div class="mb-6">
      <label for="username" class=" block mb-2 ml-2 uppercase font-bold text-xs text-white">
        Username
      </label>

      <input type="text" name="username" value="{{ $user->username }}" class="border border-blue-400 rounded-full p-2 w-full" required>

      @error('username')
        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
      @enderror
    </div>

    <div class="mb-6">
      <label for="name" class=" block mb-2 ml-2 uppercase font-bold text-xs text-white">
        Name
      </label>

      <input type="text" name="name" value="{{ $user->name }}" class="border border-blue-400 rounded-full p-2 w-full" required>

      @error('name')
        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
      @enderror
    </div>

    <div class="mb-6">
      <label for="email" class=" block mb-2 ml-2 uppercase font-bold text-xs text-white">
        Email
      </label>

      <input type="text" name="email" value="{{ $user->email }}" class="border border-blue-400 rounded-full p-2 w-full" required>

      @error('email')
        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
      @enderror
    </div>

    <div class="mb-6">
      <label for="avatar" class=" block mb-2 ml-2 uppercase font-bold text-xs text-white">
        Avatar
      </label>

      <input type="file" name="avatar" class="border border-blue-400 rounded-full p-2 w-full bg-white" required>

      @error('email')
        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
      @enderror
    </div>

    <div class="mb-6">
      <label for="password" class=" block mb-2 ml-2 uppercase font-bold text-xs text-white">
        Password
      </label>

      <input type="password" name="password" value="" class="border border-blue-400 rounded-full p-2 w-full" required>

      @error('password')
        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
      @enderror
    </div>

    <div class="mb-6">
      <label for="password_confirmation" class="block mb-2 ml-2 uppercase font-bold text-xs text-white">
        Password Confirmation
      </label>

      <input type="password" name="password_confirmation" value="" class="border border-blue-400 rounded-full p-2 w-full" required>

      @error('password_confirmation')
        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
      @enderror
    </div>

    <div class="mb-6">
      <button type="submit" class="bg-blue-400 rounded-full ml-2 text-white py-2 px-4 hover:bg-blue-500">Submit</button>
    </div>
  </form>

@endsection
