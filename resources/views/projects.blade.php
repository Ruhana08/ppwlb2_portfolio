@extends('layouts.app')

@section('title', 'Projects — Ruhana Faiz Restiyanti')

@section('content')
<section class="max-w-6xl mx-auto px-6 py-12">
    <div class="flex justify-between items-center mb-8">
        <div>
            <span class="italic font-serif text-indigo-600 text-sm">Karya &mdash;</span>
            <h1 class="text-3xl font-bold">Daftar <span class="italic font-serif font-normal text-indigo-600">Proyek.</span></h1>
        </div>
        <a href="{{ route('projects.create') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white text-xs font-semibold px-4 py-2 rounded-xl shadow-sm transition">
            + Tambah Proyek
        </a>
    </div>

    @if(session('success'))
        <div class="mb-6 p-4 bg-green-50 border border-green-200 text-green-700 text-xs rounded-xl shadow-sm">
            {{ session('success') }}
        </div>
    @endif

    <div class="grid md:grid-cols-3 gap-6">
        @forelse($projects as $project)
            <div class="bg-white border border-gray-200 p-6 rounded-3xl shadow-sm hover:shadow-xl hover:shadow-indigo-500/15 hover:border-indigo-200 transition-all duration-300 flex flex-col justify-between group">
                
                {{-- Seluruh area card mengarah ke Halaman Detail --}}
                <a href="{{ route('projects.show', $project->id) }}" class="block">
                    <h2 class="font-bold text-lg mb-2 text-gray-900 group-hover:text-indigo-600 transition-colors">
                        {{ $project->title }}
                    </h2>
                    <p class="text-xs text-gray-600 leading-relaxed mb-4 line-clamp-3">
                        {{ $project->description }}
                    </p>
                </a>
                
                <div>
                    <div class="flex flex-wrap gap-1.5 mb-4">
                        <span class="bg-indigo-50 text-indigo-600 text-[10px] px-2.5 py-1 rounded-full font-medium">Laravel</span>
                        <span class="bg-indigo-50 text-indigo-600 text-[10px] px-2.5 py-1 rounded-full font-medium">MySQL</span>
                        <span class="bg-indigo-50 text-indigo-600 text-[10px] px-2.5 py-1 rounded-full font-medium">Tailwind</span>
                    </div>

                    {{-- Tombol Aksi Hapus di Card Utama --}}
                    <div class="pt-3 border-t border-gray-100 flex items-center justify-between text-xs font-medium">
                        <a href="{{ route('projects.show', $project->id) }}" class="text-indigo-600 hover:text-indigo-800 font-semibold">
                            Lihat Detail &rarr;
                        </a>
                        <form action="{{ route('projects.destroy', $project->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Yakin mau hapus proyek ini?')" class="text-red-400 hover:text-red-600">
                                Hapus
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-span-3 text-center py-12 bg-gray-50 rounded-3xl border border-dashed border-gray-200">
                <p class="text-xs text-gray-500">Belum ada data proyek di database MySQL.</p>
            </div>
        @endforelse
    </div>
</section>
@endsection