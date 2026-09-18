@extends('layouts.app')

@section('title', 'Detail Post — ' . ($posts->title ?? 'Post'))

@section('content')
<div class="max-w-4xl mx-auto px-6 py-12">
    <a href="{{ route('posts.index') }}" class="inline-flex items-center gap-1 text-xs font-semibold text-indigo-600 hover:text-indigo-800 mb-6">
        &larr; Kembali ke Blog Posts
    </a>

    <div class="bg-white border border-gray-100 p-8 rounded-3xl shadow-sm hover:shadow-xl hover:shadow-indigo-500/10 transition-all duration-300">
        <h1 class="text-3xl font-bold text-gray-900 mb-2">{{$posts->title}}</h1>
        <small class="text-xs text-gray-400 block mb-6">Tanggal: {{$posts->created_at}}</small>
        <div class="bg-gray-50/70 p-6 rounded-2xl border border-gray-100">
            <p class="text-sm text-gray-700 leading-relaxed whitespace-pre-line">{{$posts->description}}</p>
        </div>
    </div>
</div>
@endsection
