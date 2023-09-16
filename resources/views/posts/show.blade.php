@extends('app')

@section('content')
    <div class="bg-white px-6 py-32 lg:px-8">
        <div class="mx-auto max-w-3xl text-base leading-7 text-gray-700">
            <h1 class="mt-2 text-base font-semibold leading-7 text-indigo-600">{{ $post->title }}</h1>
            <p class="mt-6 text-xl leading-8">
                {{ $post->content }}
            </p>
            <div class="text-sm leading-6">{{ $post->description }}</div>
        </div>
    </div>
@endsection
