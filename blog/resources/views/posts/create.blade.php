@extends('layouts.app')

@section('title', 'Create Post')

@section('content')
  <div class="container mx-auto py-10">
    <h1 class="text-4xl mb-8 text-gray-700">Create a new post</h1>
    <form method="POST" action="/posts" class="bg-white rounded-lg shadow-lg p-6">
      @csrf
      <div class="mb-4">
        <label for="title" class="block text-gray-600 mb-1">
          Title
        </label>
        <input type="text" id="title" name="title" class="w-full border border-gray-200 px-3 py-2 rounded">
      </div>
      <div class="mb-4">
        <label for="body" class="block text-gray-600 mb-1">
          Body
        </label>
        <input type="text" id="body" name="body" class="w-full border border-gray-200 px-3 py-2 rounded">
      </div>
      <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded-lg">
        Create
      </button>
    </form>
  </div>
@endsection
