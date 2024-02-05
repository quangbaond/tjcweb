@extends('layouts.app')
@section('css')
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>


<link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">

@endsection
@section('js')
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script src="{{ asset('assets/js/home.js') }}"></script>
@endsection
@section('breadcrumb')
    {{ Breadcrumbs::render('ring') }}
@endsection
@section('banner')
    <div class="banner ">
        <img class="w-full max-h-[454px]" src="{{ asset('assets/images/banners/banner.png') }}" alt="banner" srcset="{{ asset('assets/images/banners/banner.png') }}">
    </div>
@endsection
@section('content')
<div class="container">
    sdsd
</div>
@endsection
