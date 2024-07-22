@extends('layouts.Frontend.app')
@section('title')
    Pondok Daaru Hiraa
@endsection

@section('content')
    

    {{-- About --}}
    @section('about')
        @include('frontend.content.about')
    @endsection

    {{-- Guru --}}
    @section('guru')
        @include('frontend.content.guru')
    @endsection

     {{-- Berita & Event --}}
     @section('beritaEvent')
        @include('frontend.content.beritaEvent')
    @endsection
@endsection