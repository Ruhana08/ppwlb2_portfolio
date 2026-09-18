@extends('layouts.app')

@section('title', 'Home — Ruhana Faiz Restiyanti')

@section('content')
<section class="max-w-6xl mx-auto px-6 py-16 grid md:grid-cols-2 gap-12 items-center">
    <div>
        <span class="inline-block bg-indigo-50 text-indigo-600 text-xs px-4 py-1.5 rounded-full font-semibold mb-6">
            &bull; Open to Opportunities &middot; 2026
        </span>
        <h1 class="text-4xl md:text-5xl font-bold text-gray-900 leading-tight">
            Ruhana Faiz <br>
            <span class="italic font-serif font-normal text-indigo-600">Restiyanti.</span>
        </h1>
        <p class="mt-4 text-gray-600 text-sm leading-relaxed">
            Mahasiswa <strong class="text-black">D4 Teknologi Rekayasa Perangkat Lunak &mdash; UGM</strong>.
            Fokus pada pengembangan perangkat lunak, basis data, serta manajemen operasional tim.
        </p>
        <div class="mt-8 flex gap-4 text-sm">
            <a href="{{ route('projects.index') }}" class="bg-black text-white px-6 py-3 rounded-full hover:bg-gray-800 transition">Lihat Projects &rarr;</a>
            <a href="{{ route('about') }}" class="border border-gray-300 px-6 py-3 rounded-full hover:bg-gray-100 transition">Tentang Saya</a>
        </div>
    </div>
    <div class="flex justify-center md:justify-end">
        <div class="relative">
            <div class="absolute -top-10 -right-10 w-48 h-48 bg-indigo-500 rounded-full blur-3xl opacity-20"></div>
            <img src="{{ asset('gambar/profil.png') }}" alt="Ruhana Faiz Restiyanti" class="w-64 h-80 object-cover rounded-3xl border-4 border-white shadow-xl relative z-10">
        </div>
    </div>
</section>
@endsection