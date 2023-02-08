@extends('member.layouts.base')

@section('title', 'Watch Today')

@section('title-description', 'Our selected movies for your mood')

@section('content')

<!-- Details -->
<div class="flex gap-14 items-start">
    <a href="dashboard.html">
        <img src="assets/images/ic_arrow-left-normal.svg" alt="">
    </a>
    <div class="flex flex-col gap-10">
        <!-- Thumbnail -->
        <div class="w-full relative overflow-hidden group">
            <img src="assets/images/featured-2.png" class="object-cover rounded-[30px]" alt="">
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-20">
                <img src="assets/images/ic_play.svg" width="80" alt="">
            </div>
            <a href="watching.html" class="inset-0 absolute z-50"></a>
        </div>

        <!-- Judul & Rating -->
        <div class="flex items-center justify-between">
            <div>
                <div class="text-white font-medium text-[28px] capitalize">
                    Death On The nile
                </div>
                <p class="text-stream-gray text-base mt-[6px]">
                    Action • Love - Released at 2022
                </p>
            </div>
            <div class="inline-flex items-center gap-[6px]">
                <img src="assets/images/ic_star.svg" alt="">
                <img src="assets/images/ic_star.svg" alt="">
                <img src="assets/images/ic_star.svg" alt="">
                <img src="assets/images/ic_star.svg" alt="">
                <img src="assets/images/ic_star.svg" alt="">
                <div class="text-base text-white ml-[6px] mt-1">
                    18,049
                </div>
            </div>
        </div>

        <!-- Synopsis -->
        <div>
            <div class="text-xl text-white">About</div>
            <p class="max-w-[700px] mt-[10px] text-stream-gray text-base leading-8">
                Film ini diumumkan pada bulan Oktober 2014 sebagai Avengers: Infinity War - Part 2.
                Russo bersaudara ditunjuk untuk mengarahkan pada bulan April 2015, dan pada bulan Mei,
                Markus dan McFeely dikontrak sebagai penulis naskah film tersebut. Pada bulan Juli 2016,
                Marvel menghapus judul, merujuknya hanya sebagai Untitled Avengers.
            </p>
            <p class="max-w-[700px] mt-[10px] text-stream-gray text-base leading-8">
                Georgia mengambil gambar secara berurutan dengan Infinity War, dan berakhir pada Januari
                2018. Pembuatan film tambahan dilakukan di wilayah Metro dan Pusat Kota Atlanta dan New
                York. Judul resmi terungkap pada Desember 2018.
            </p>
        </div>
    </div>
</div>
<!-- ./Details -->
@endsection
