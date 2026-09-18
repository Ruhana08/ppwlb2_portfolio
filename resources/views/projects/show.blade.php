@extends('layouts.app')

@section('title', $project->title . ' — Detail Proyek')

@section('content')
<section class="max-w-4xl mx-auto px-6 py-12">
    <a href="{{ route('projects.index') }}" class="inline-flex items-center gap-1 text-xs font-semibold text-indigo-600 hover:text-indigo-800 mb-6">
        &larr; Kembali ke Daftar Proyek
    </a>

    @if(session('success'))
        <div class="mb-6 p-4 bg-emerald-50 border border-emerald-200 text-emerald-700 text-xs rounded-2xl flex items-center justify-between shadow-sm">
            <span class="flex items-center gap-2">
                <svg class="w-4 h-4 text-emerald-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                {{ session('success') }}
            </span>
        </div>
    @endif

    <div class="bg-white border border-gray-100 p-8 rounded-3xl shadow-sm hover:shadow-xl hover:shadow-indigo-500/10 transition-all duration-300">
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-6">
            <div>
                <span class="text-[10px] font-semibold text-indigo-600 bg-indigo-50 px-3 py-1 rounded-full uppercase tracking-wider">Detail Proyek</span>
                <h1 class="text-3xl font-bold text-gray-900 mt-2">{{ $project->title }}</h1>
                <p class="text-xs text-gray-400 mt-1">Dibuat pada: {{ $project->created_at ? $project->created_at->format('d F Y, H:i') : '-' }}</p>
            </div>
            
            <div class="flex items-center gap-2">
                <a href="{{ route('projects.edit', $project->id) }}" class="inline-flex items-center gap-1.5 bg-amber-500 hover:bg-amber-600 text-white text-xs font-semibold px-4 py-2 rounded-xl transition shadow-sm">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                    Edit Proyek
                </a>

                <form action="{{ route('projects.destroy', $project->id) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Yakin ingin menghapus proyek ini?')" class="inline-flex items-center gap-1 bg-red-50 hover:bg-red-100 text-red-600 text-xs font-semibold px-4 py-2 rounded-xl transition">
                        Hapus
                    </button>
                </form>
            </div>
        </div>

        <div class="flex flex-wrap gap-2 mb-6">
            <span class="bg-indigo-50 text-indigo-600 text-xs px-3 py-1 rounded-full font-medium">PHP / Laravel</span>
            <span class="bg-indigo-50 text-indigo-600 text-xs px-3 py-1 rounded-full font-medium">MySQL</span>
            <span class="bg-indigo-50 text-indigo-600 text-xs px-3 py-1 rounded-full font-medium">Tailwind CSS</span>
        </div>

        <hr class="border-gray-100 my-6">

        <h3 class="text-sm font-bold text-gray-800 uppercase tracking-wider mb-3">Deskripsi Proyek</h3>
        <div class="bg-gray-50/70 p-6 rounded-2xl border border-gray-100">
            <p class="text-sm text-gray-700 leading-relaxed whitespace-pre-line">
                {{ $project->description }}
            </p>
        </div>
    </div>
</section>
@endsection