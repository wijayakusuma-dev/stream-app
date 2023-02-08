@extends('member.layouts.base')

@section('title', 'Watch Today')

@section('title-description', 'Our selected movies for your mood')

@section('content')
    <!-- Featured -->
    <div>
        <div class="font-semibold text-[22px] text-white mb-[18px]">Featured</div>
        <div class="grid grid-cols-2 gap-5 xl:gap-12">
            @foreach ($movies as $movie)
                <div class="col-span-1 relative overflow-hidden group">
                    <img src="{{ asset('storage/thumbnail/'.$movie->short_thumbnail) }}" class="object-cover rounded-[30px]" alt="">
                    <div
                        class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black rounded-bl-[28px] rounded-br-[28px] z-10 translate-y-0 group-hover:translate-y-[300px] transition ease-in-out duration-500 group-hover:bg-transparent">
                        <div class="px-7 pb-7">
                            <div class="font-medium text-xl text-white">{{ $movie->title }}</div>
                            <p class="mb-0 text-stream-gray text-base mt-[10px]">
                                {{ date('Y', strtotime($movie->release_date)) }}
                            </p>
                        </div>
                    </div>
                    <div class="absolute top-1/2 left-1/2 -translate-y-[500px] group-hover:-translate-y-1/2
                        -translate-x-1/2 z-20 transition ease-in-out duration-500">
                        <img src="{{ asset('stream/assets/images/ic_play.svg') }}" class="" width="80" alt="">
                    </div>
                    <a href="{{ route('member.movie.detail', $movie->id) }}" class="inset-0 absolute z-50"></a>
                </div>
            @endforeach
        </div>
    </div>
    <!-- /Featured -->
@endsection
