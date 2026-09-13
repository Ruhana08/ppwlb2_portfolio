@extends('layouts.app')

@section('title', 'About — Ruhana Faiz Restiyanti')

@section('content')
<section class="max-w-6xl mx-auto px-6 py-12">
    <span class="italic font-serif text-indigo-600 text-sm">Profil &mdash;</span>
    <h1 class="text-3xl font-bold mb-8">Tentang <span class="italic font-serif font-normal text-indigo-600">Saya.</span></h1>

    <div class="grid md:grid-cols-2 gap-12">
        <div>
            <p class="text-sm text-gray-600 leading-relaxed mb-4">
                Mahasiswa D4 Teknologi Rekayasa Perangkat Lunak di Universitas Gadjah Mada dengan dasar pemrograman web dan basis data, serta pengalaman aktif dalam organisasi kemahasiswaan.
            </p>
            <p class="text-sm text-gray-600 leading-relaxed mb-6">
                Terbiasa mengelola tanggung jawab administratif dan operasional secara disiplin, teliti, dan kolaboratif untuk mencapai target bersama.
            </p>
            
            <h2 class="font-bold text-lg mb-4 text-gray-900">Pengalaman Organisasi & Kerja</h2>
            <ul class="space-y-4 text-xs text-gray-600 border-l-2 border-indigo-500 pl-4">
                <li>
                    <strong class="text-gray-900 block">Bendahara Divisi Kewirausahaan &mdash; KMTEDI UGM (2025–Sekarang)</strong>
                    Mengelola keuangan divisi & event Perwira 2025 serta mengoordinasikan vendor Korsa.
                </li>
                <li>
                    <strong class="text-gray-900 block">Asisten Operasional &mdash; Fotocopy & ATK Resty (2025–Sekarang)</strong>
                    Melayani 30+ pelanggan harian dan menyusun laporan keuangan harian.
                </li>
                <li>
                    <strong class="text-gray-900 block">Logistik & Konsumsi &mdash; TEDI Games 2026</strong>
                    Bermitra dengan UMKM lokal untuk penyediaan konsumsi kegiatan.
                </li>
            </ul>
        </div>

        <div class="bg-indigo-50/60 p-6 rounded-3xl border border-indigo-100 self-start">
            <h2 class="font-bold text-lg mb-4 text-indigo-900">Keahlian (Skills)</h2>
            <div class="space-y-4 text-xs">
                <div>
                    <span class="font-semibold text-gray-700 block mb-1">Software & Tools:</span>
                    <div class="flex flex-wrap gap-2">
                        <span class="bg-white border px-3 py-1 rounded-full text-gray-600">Visual Studio Code</span>
                        <span class="bg-white border px-3 py-1 rounded-full text-gray-600">Figma</span>
                        <span class="bg-white border px-3 py-1 rounded-full text-gray-600">Canva</span>
                        <span class="bg-white border px-3 py-1 rounded-full text-gray-600">MS Office</span>
                    </div>
                </div>
                <div>
                    <span class="font-semibold text-gray-700 block mb-1">Soft Skills:</span>
                    <div class="flex flex-wrap gap-2">
                        <span class="bg-white border px-3 py-1 rounded-full text-gray-600">Komunikasi</span>
                        <span class="bg-white border px-3 py-1 rounded-full text-gray-600">Kerja Sama Tim</span>
                        <span class="bg-white border px-3 py-1 rounded-full text-gray-600">Problem Solving</span>
                        <span class="bg-white border px-3 py-1 rounded-full text-gray-600">Manajemen Waktu</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection