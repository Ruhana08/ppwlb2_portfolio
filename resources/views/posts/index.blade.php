@extends('layouts.app')

@section('title', 'Blog Posts — Modul Praktikum')

@section('content')
<div class="max-w-4xl mx-auto px-6 py-12">
    <div class="flex justify-between items-center mb-6">
        <div>
            <span class="text-indigo-600 font-display italic text-sm">Praktikum &mdash;</span>
            <h1 class="text-3xl font-bold text-gray-900">Blog Posts</h1>
        </div>
        <a href="{{ route('posts.create') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white text-xs font-semibold px-5 py-2.5 rounded-full shadow-md transition">
            + Add Blog Post
        </a>
    </div>

    @if(count($posts) > 0)
        <div class="space-y-4">
            @foreach($posts as $post)
                <div class="bg-white border border-gray-100 p-6 rounded-3xl shadow-sm hover:shadow-xl hover:shadow-indigo-500/20 hover:border-indigo-200 transition-all duration-300">
                    <h3 class="text-xl font-bold text-gray-900">
                        <a href="/posts/{{$post->id}}" class="hover:text-indigo-600 transition">{{$post->title}}</a>
                    </h3>
                    <small class="text-xs text-gray-400 block mt-1">Tanggal: {{$post->created_at}}</small>
                </div>
            @endforeach
        </div>
    @else
        <div class="bg-white p-8 rounded-3xl border border-dashed border-gray-200 text-center">
            <h3 class="text-sm font-medium text-gray-500">Tidak ada data.</h3>
        </div>
    @endif
</div>
@endsection
