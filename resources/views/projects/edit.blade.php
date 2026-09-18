@extends('layouts.app')

@section('title', 'Edit Proyek — ' . $project->title)

@section('content')
<section class="max-w-3xl mx-auto px-6 py-12">
    <a href="{{ route('projects.show', $project->id) }}" class="inline-flex items-center gap-1 text-xs font-semibold text-indigo-600 hover:text-indigo-800 mb-6">
        &larr; Batal & Kembali ke Detail
    </a>

    <div class="bg-white border border-gray-100 p-8 rounded-3xl shadow-sm hover:shadow-xl hover:shadow-indigo-500/10 transition-all duration-300">
        <h1 class="text-2xl font-bold text-gray-900 mb-2">Edit Proyek</h1>
        <p class="text-xs text-gray-500 mb-6">Perbarui data proyek "<strong>{{ $project->title }}</strong>".</p>

        <form action="{{ route('projects.update', $project->id) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            <div>
                <label for="title" class="block text-xs font-semibold text-gray-700 uppercase tracking-wider mb-2">
                    Judul Proyek <span class="text-red-500">*</span>
                </label>
                <input type="text"
                       name="title"
                       id="title"
                       value="{{ old('title', $project->title) }}"
                       class="w-full text-sm px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition @error('title') border-red-500 @enderror"
                       required>
                @error('title')
                    <p class="text-xs text-red-500 mt-1.5">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="description" class="block text-xs font-semibold text-gray-700 uppercase tracking-wider mb-2">
                    Deskripsi Proyek <span class="text-red-500">*</span>
                </label>
                <textarea name="description"
                          id="description"
                          rows="6"
                          class="w-full text-sm px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition @error('description') border-red-500 @enderror"
                          required>{{ old('description', $project->description) }}</textarea>
                @error('description')
                    <p class="text-xs text-red-500 mt-1.5">{{ $message }}</p>
                @enderror
            </div>

            <div class="pt-4 flex items-center justify-end gap-3">
                <a href="{{ route('projects.show', $project->id) }}" class="px-5 py-2.5 text-xs font-semibold text-gray-600 hover:text-gray-900 transition">
                    Batal
                </a>
                <button type="submit" class="bg-amber-500 hover:bg-amber-600 text-white text-xs font-semibold px-6 py-2.5 rounded-full shadow-md shadow-amber-500/20 hover:shadow-lg transition">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
</section>
@endsection
