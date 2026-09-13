@extends('layouts.app')

@section('title', 'Education — Ruhana Faiz Restiyanti')

@section('content')
<section class="max-w-4xl mx-auto px-6 py-12">
    <span class="italic font-serif text-indigo-600 text-sm">Akademik &mdash;</span>
    <h1 class="text-3xl font-bold mb-8">Riwayat <span class="italic font-serif font-normal text-indigo-600">Pendidikan.</span></h1>

    <div class="space-y-8">
        <div class="bg-white p-6 rounded-2xl border border-gray-200 shadow-sm flex flex-col md:flex-row justify-between md:items-center gap-4">
            <div>
                <span class="text-xs text-indigo-600 font-bold uppercase tracking-wider">2025 &ndash; Sekarang</span>
                <h2 class="text-lg font-bold text-gray-900">D4 Teknologi Rekayasa Perangkat Lunak</h2>
                <p class="text-xs text-gray-500">Sekolah Vokasi &mdash; Universitas Gadjah Mada</p>
                <p class="mt-2 text-xs text-gray-600">Mempelajari pengembangan perangkat lunak, pemrograman web, basis data, dan penerapan teknologi modern.</p>
            </div>
        </div>

        <div class="bg-white p-6 rounded-2xl border border-gray-200 shadow-sm flex flex-col md:flex-row justify-between md:items-center gap-4">
            <div>
                <span class="text-xs text-indigo-600 font-bold uppercase tracking-wider">2022 &ndash; 2025</span>
                <h2 class="text-lg font-bold text-gray-900">MAS Unggulan Amanatul Ummah</h2>
                <p class="text-xs text-gray-500">Surabaya</p>
            </div>
        </div>

        <div class="bg-white p-6 rounded-2xl border border-gray-200 shadow-sm flex flex-col md:flex-row justify-between md:items-center gap-4">
            <div>
                <span class="text-xs text-indigo-600 font-bold uppercase tracking-wider">Program Percepatan (2 Tahun)</span>
                <h2 class="text-lg font-bold text-gray-900">MTs CI Amanatul Ummah</h2>
                <p class="text-xs text-gray-500">Pacet</p>
            </div>
        </div>
    </div>
</section>
@endsection