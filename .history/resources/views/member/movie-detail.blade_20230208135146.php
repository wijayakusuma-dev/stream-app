@extends('member.layouts.base')

@section('title', 'Watch Today')

@section('title-description', 'Our selected movies for your mood')

@section('content')
<!-- Details -->
<div class="flex gap-14 items-start">
    <a href="{{ route('member.dashboard') }}">
        <img src="{{ asset('stream/assets/images/ic_arrow-left-normal.svg') }}" alt="">
    </a>
    <div class="flex flex-col gap-10">
        <!-- Thumbnail -->
        <div class="w-full relative overflow-hidden group">
            <img src="{{ asset('storage/thumbnail/'.$movie->large_thumbnail) }}" class="object-cover rounded-[30px]" alt="">
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-20">
                <img src="{{ asset('stream/assets/images/ic_play.svg') }}" width="80" alt="">
            </div>
            <a href="{{ route('member.movie.watch', $movie->id) }}" class="inset-0 absolute z-50"></a>
        </div>

        <!-- Judul & Rating -->
        <div class="flex items-center justify-between">
            <div>
                <div class="text-white font-medium text-[28px] capitalize">
                    {{ $movie->title }}
                </div>
                <p class="text-stream-gray text-base mt-[6px]">
                    {{ $movie->categories }} • Released at {{ date('M D, Y', strtotime($movie->release_date)) }}
                </p>
            </div>
            <div class="inline-flex items-center gap-[6px]">
                <img src="{{ asset('stream(assets/images/ic_star.svg') }}" alt="">
                <img src="{{ asset('stream(assets/images/ic_star.svg') }}" alt="">
                <img src="{{ asset('stream(assets/images/ic_star.svg') }}" alt="">
                <img src="{{ asset('stream(assets/images/ic_star.svg') }}" alt="">
                <img src="{{ asset('stream(assets/images/ic_star.svg') }}" alt="">
            </div>
        </div>

        <!-- Synopsis -->
        <div>
            <div class="text-xl text-white">About</div>
            <p class="max-w-[700px] mt-[10px] text-stream-gray text-base leading-8">
                {{ $movie->about }}
            </p>
        </div>
    </div>
</div>
<!-- ./Details -->
@endsection
