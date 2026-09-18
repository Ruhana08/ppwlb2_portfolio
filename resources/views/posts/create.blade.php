@extends('layouts.app')

@section('title', 'Add Blog Post')

@section('content')
<div class="max-w-3xl mx-auto px-6 py-12">
    <a href="{{ route('posts.index') }}" class="inline-flex items-center gap-1 text-xs font-semibold text-indigo-600 hover:text-indigo-800 mb-6">
        &larr; Batal & Kembali
    </a>

    <div class="bg-white border border-gray-100 p-8 rounded-3xl shadow-sm hover:shadow-xl hover:shadow-indigo-500/10 transition-all duration-300">
        <h1 class="text-2xl font-bold text-gray-900 mb-6">Add Blog Post</h1>

        <form action="{{ route('posts.store') }}" method="POST" class="space-y-6">
            @csrf

            <div>
                <label for="title" class="block text-xs font-semibold text-gray-700 uppercase tracking-wider mb-2">Title</label>
                <input type="text" class="w-full text-sm px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500" id="title" name="title" required>
            </div>

            <div>
                <label for="description" class="block text-xs font-semibold text-gray-700 uppercase tracking-wider mb-2">Description</label>
                <textarea class="w-full text-sm px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500" id="description" rows="5" name="description" required></textarea>
            </div>

            <div class="pt-4 flex items-center justify-end gap-3">
                <a href="{{ route('posts.index') }}" class="px-5 py-2.5 text-xs font-semibold text-gray-600 hover:text-gray-900 transition">Batal</a>
                <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white text-xs font-semibold px-6 py-2.5 rounded-full shadow-md transition">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection
