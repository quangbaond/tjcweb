
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
    {{ Breadcrumbs::render('promotion') }}
@endsection
@section('banner')

@endsection
@section('content')
    <div class="flex justify-center flex-col my-5">
        <h1 class="text-3xl text-center">ƯU ĐÃI ONLINE</h1>
        <p class="text-center">
            <i>Với hệ thống và chính sách giao hàng nhanh toàn quốc hoàn toàn miễn phí
            </i></p>
        <p class="text-center">
            <i><a href="" class="text-red-500 font-bold">TJC</a> sẽ giúp quá trình mua hàng của bạn trở nên tiện lợi, nhanh chóng, tiết kiệm và an toàn hơn.</i>
        </p>
    </div>

    <div class="w-full relative">
        <div class="flex flex-row my-10">
            <div class="w-full bg-red-500">
                <div class="flex justify-end">
                    <div class="w-1/2">
                        <img class="w-full" src="{{ asset('assets/images/promotion/banner1.png') }}" alt="about">
                    </div>
                </div>
            </div>
            <div class="w-full bg-[#F8F3EF]">
                <div class="flex justify-start">
                    <div class="w-1/2">
                        <img class="w-full" src="{{ asset('assets/images/promotion/banner2.png') }}" alt="about">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full bg-[#F8F3EF] py-5 mb-10">
        <h2 class="text-center font-bold text-3xl">ƯU ĐÃI MUA ONLINE TRANG SỨC KIM CƯƠNG</h2>
        <p class="text-center">(Ưu đãi 10% + 5% khi mua kèm viên chủ GIA khi mua online)</p>
    </div>

    <div class="max-w-screen-lg mx-auto  py-5 mb-10">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="mb-2">
                <div class="bg-[#F7F7F7] p-3 mb-2">
                    <div class="flex justify-end">
                        <div class="w-1/2">
                            <img  src="{{ asset('assets/images/promotion/product1.png') }}" alt="about">
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <h2 class="text-1xl ">Vòng Kim Cương</h2>
                        <p class="text-sm py-2">
                            <a href="" class="text-gray-500">Đi tới ưu tải -></a>
                        </p>
                    </div>
                </div>
                <div class="bg-[#F7F7F7] p-3 mb-2">
                    <div class="flex justify-end">
                        <div class="w-2/2">
                            <img  src="{{ asset('assets/images/promotion/product2.png') }}" alt="about">
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <h2 class="text-1xl ">Bông tai đá quý</h2>
                        <p class="text-sm py-2">
                            <a href="" class="text-gray-500">Đi tới ưu tải -></a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="mb-2">
                <div class="bg-[#F7F7F7] p-3 mb-2">
                    <div class="flex justify-end">
                        <div class="w-1/2">
                            <img  src="{{ asset('assets/images/promotion/product1.png') }}" alt="about">
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <h2 class="text-1xl ">Vòng Kim Cương</h2>
                        <p class="text-sm py-2">
                            <a href="" class="text-gray-500">Đi tới ưu tải -></a>
                        </p>
                    </div>
                </div>
                <div class="bg-[#F7F7F7] p-3 mb-2">
                    <div class="flex justify-end">
                        <div class="w-2/2">
                            <img  src="{{ asset('assets/images/promotion/product2.png') }}" alt="about">
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <h2 class="text-1xl ">Bông tai đá quý</h2>
                        <p class="text-sm py-2">
                            <a href="" class="text-gray-500">Đi tới ưu tải -></a>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="w-full bg-[#F8F3EF] py-5 mb-10">
        <h2 class="text-center font-bold text-3xl">ƯU ĐÃI MUA ONLINE TRANG SỨC KIM CƯƠNG</h2>
        <p class="text-center">(Ưu đãi 10% + 5% khi mua kèm viên chủ GIA khi mua online)</p>
    </div>

    <div class="w-full">
        <div class=" flex-wrap  md:my-20  my-5  ">
            <div class="grid md:grid-cols-2 md:gap-0 gap-0 md:w-full">
                <div class="new_image max-h-[446px] flex">
                    <img class="w-full" src="{{ asset('assets/images/promotion/banner3.png') }}" alt="about">
                </div>
                <div class="md:flex self-end  new_image ">
                    <div class="flex self-end flex-col w-full">
                        <h2 class="text-1xl ">Nhẫn cươ</h2>
                        <p class="text-sm py-2">
                            <a href="" class="text-gray-500">Đi tới ưu tải -></a>
                        </p>
                        <div class="bg-[#F7F7F7] w-full">
                            <img class="w-full md:w-auto" src="{{ asset('assets/images/promotion/banner4.png') }}" alt="new_art">

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="w-full bg-[#F8F3EF] py-5 mb-10">
        <h2 class="text-center font-bold text-3xl">CÁC ƯU ĐÃI KHÁC KHI MUA TẠI CỬA HÀNG</h2>
        <p class="text-center">(Ưu đãi 10% + 5% khi mua kèm viên chủ GIA khi mua online)</p>
    </div>

    <div class="my-5 mb-10">
        <div class="flex flex-row justify-center">
            <div class="mx-2">
                <img src="{{ asset('assets/images/promotion/banner5.png') }}" alt="">
            </div>
            <div class="mx-2">
                <img src="{{ asset('assets/images/promotion/banner6.png') }}" alt="">
            </div>
            <div class="mx-2">
                <img src="{{ asset('assets/images/promotion/banner7.png') }}" alt="">
            </div>
        </div>
    </div>
@endsection
