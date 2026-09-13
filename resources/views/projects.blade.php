@extends('layouts.app')

@section('title', 'Projects — Ruhana Faiz Restiyanti')

@section('content')
<section class="max-w-6xl mx-auto px-6 py-12">
    <span class="italic font-serif text-indigo-600 text-sm">Karya &mdash;</span>
    <h1 class="text-3xl font-bold mb-8">Daftar <span class="italic font-serif font-normal text-indigo-600">Proyek.</span></h1>

    <div class="grid md:grid-cols-3 gap-6">
        <div class="bg-white border border-gray-200 p-6 rounded-2xl shadow-sm flex flex-col justify-between">
            <div>
                <h2 class="font-bold text-lg mb-2 text-gray-900">Corta &mdash; Pemesanan Lapangan</h2>
                <p class="text-xs text-gray-600 leading-relaxed mb-4">Aplikasi web pemesanan lapangan olahraga berbasis PHP Native dan MySQL dengan antarmuka interaktif HTML, CSS, dan JavaScript.</p>
            </div>
            <div class="flex flex-wrap gap-1.5">
                <span class="bg-indigo-50 text-indigo-600 text-[10px] px-2.5 py-1 rounded-full font-medium">PHP Native</span>
                <span class="bg-indigo-50 text-indigo-600 text-[10px] px-2.5 py-1 rounded-full font-medium">MySQL</span>
                <span class="bg-indigo-50 text-indigo-600 text-[10px] px-2.5 py-1 rounded-full font-medium">HTML/CSS/JS</span>
            </div>
        </div>

        <div class="bg-white border border-gray-200 p-6 rounded-2xl shadow-sm flex flex-col justify-between">
            <div>
                <h2 class="font-bold text-lg mb-2 text-gray-900">Resty Fotocopy & Printing</h2>
                <p class="text-xs text-gray-600 leading-relaxed mb-4">Desain prototipe antarmuka dan aset visual untuk platform pemesanan percetakan online yang dirancang menggunakan Figma dan Canva.</p>
            </div>
            <div class="flex flex-wrap gap-1.5">
                <span class="bg-indigo-50 text-indigo-600 text-[10px] px-2.5 py-1 rounded-full font-medium">Figma</span>
                <span class="bg-indigo-50 text-indigo-600 text-[10px] px-2.5 py-1 rounded-full font-medium">Canva</span>
                <span class="bg-indigo-50 text-indigo-600 text-[10px] px-2.5 py-1 rounded-full font-medium">UI/UX Design</span>
            </div>
        </div>

        <div class="bg-white border border-gray-200 p-6 rounded-2xl shadow-sm flex flex-col justify-between">
            <div>
                <h2 class="font-bold text-lg mb-2 text-gray-900">Soundwave &mdash; Music Streaming</h2>
                <p class="text-xs text-gray-600 leading-relaxed mb-4">Platform pemutar musik berbasis web yang dibangun dengan PHP Native, database MySQL, serta pemrosesan frontend HTML, CSS, dan JS.</p>
            </div>
            <div class="flex flex-wrap gap-1.5">
                <span class="bg-indigo-50 text-indigo-600 text-[10px] px-2.5 py-1 rounded-full font-medium">PHP Native</span>
                <span class="bg-indigo-50 text-indigo-600 text-[10px] px-2.5 py-1 rounded-full font-medium">MySQL</span>
                <span class="bg-indigo-50 text-indigo-600 text-[10px] px-2.5 py-1 rounded-full font-medium">HTML/CSS/JS</span>
            </div>
        </div>
    </div>
</section>
@endsection