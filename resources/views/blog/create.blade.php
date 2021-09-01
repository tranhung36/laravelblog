@extends('layouts.app')

@section('content')
    <div class="w-4/5 m-auto text-left">
        <div class="py-15 border-b border-gray-200">
            <h1 class="text-6xl">
                Create Post
            </h1>
        </div>
    </div>

    @if ($errors->any())
        <div class="w-4/5 m-auto">
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="w-1/5 mb-4 text-gray-50 bg-red-70 rounded-2xl py-4">
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="w-4/5 pt-20 m-auto">
        <form action="/blog" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" name="title" placeholder="Title..." class="bg-transparent block border-b-2 w-4/5 h-10 text-xl outline-none">
            <textarea name="description" placeholder="Description..." class="py-20 bg-transparent block border-b-2 w-4/5 h-60 text-xl outline-none"></textarea>
            <div class="bg-grey-lighter pt-15">
                <label class="w-44 flex flex-col items-center px-2 py-3 bg-white-rounded-lg shadow-lg tracking-lg tracking-wide uppercase border border-blue cursor-pointer">
                    <span class="mt-2 text-base leading-normal">
                        Select a file
                    </span>
                    <input type="file" name="image" class="hidden">
                </label>
            </div>
            <button class="uppercase mt-15 bg-blue-500 text-gray-100 text-l font-extrabold py-4 px-8 rounded-3xl" type="submit">
                Submit post
            </button>
        </form>
    </div>
@endsection
