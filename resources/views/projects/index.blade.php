@extends('layouts.app')

@section('title', 'Daftar Proyek — Ruhana Faiz Restiyanti')

@section('content')
<section class="max-w-6xl mx-auto px-6 py-12">
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-8">
        <div>
            <span class="text-indigo-600 font-display italic text-sm">Portfolio &mdash;</span>
            <h1 class="text-3xl font-bold text-gray-900 mt-1">Daftar <span class="font-display italic font-normal text-indigo-600">Proyek.</span></h1>
            <p class="text-xs text-gray-500 mt-1">Kelola data proyek portofolio yang tersimpan di MySQL database.</p>
        </div>
        <a href="{{ route('projects.create') }}" class="inline-flex items-center gap-2 bg-indigo-600 hover:bg-indigo-700 text-white text-xs font-semibold px-5 py-2.5 rounded-full shadow-md shadow-indigo-600/20 hover:shadow-lg hover:shadow-indigo-600/30 transition">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
            Tambah Proyek
        </a>
    </div>

    @if(session('success'))
        <div class="mb-8 p-4 bg-emerald-50 border border-emerald-200 text-emerald-700 text-xs rounded-2xl flex items-center justify-between shadow-sm">
            <span class="flex items-center gap-2">
                <svg class="w-4 h-4 text-emerald-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                {{ session('success') }}
            </span>
        </div>
    @endif

    <div class="grid md:grid-cols-3 gap-6">
        @forelse($projects as $project)
            <div class="bg-white border border-gray-100 rounded-3xl p-6 shadow-sm hover:shadow-xl 
            hover:shadow-indigo-500/20 hover:border-indigo-200 hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between group">
                <div>
                    <a href="{{ route('projects.show', $project->id) }}" class="block">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-[10px] font-semibold text-indigo-600 bg-indigo-50 px-2.5 py-1 rounded-full">MySQL Data</span>
                            <span class="text-[10px] text-gray-400">{{ $project->created_at ? $project->created_at->format('d M Y') : '' }}</span>
                        </div>
                        <h2 class="font-bold text-lg text-gray-900 group-hover:text-indigo-600 transition-colors line-clamp-1">
                            {{ $project->title }}
                        </h2>
                        <p class="text-xs text-gray-600 leading-relaxed mt-2 line-clamp-3">
                            {{ $project->description }}
                        </p>
                    </a>
                </div>

                <div class="pt-5 mt-5 border-t border-gray-100 flex items-center justify-between">
                    <a href="{{ route('projects.show', $project->id) }}" class="inline-flex items-center gap-1.5 text-xs font-semibold text-indigo-600 
                    hover:text-indigo-800 bg-indigo-50/70 hover:bg-indigo-100 px-3.5 py-1.5 rounded-full transition">
                        Detail Proyek &rarr;
                    </a>

                    <form action="{{ route('projects.destroy', $project->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Yakin ingin menghapus proyek ini?')" class="text-xs text-red-400 hover:text-red-600 
                        font-medium transition px-2 py-1">
                            Hapus
                        </button>
                    </form>
                </div>
            </div>
        @empty
            <div class="col-span-3 text-center py-16 bg-white rounded-3xl border border-dashed border-gray-200 shadow-sm">
                <svg class="w-12 h-12 text-gray-300 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                <p class="text-sm font-medium text-gray-600">Belum ada data proyek di database MySQL.</p>
                <a href="{{ route('projects.create') }}" class="inline-block mt-4 text-xs font-semibold text-indigo-600 hover:underline">+ Tambah Proyek Sekarang</a>
            </div>
        @endforelse
    </div>
</section>
@endsection
