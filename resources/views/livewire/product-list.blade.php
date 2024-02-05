<div class="max-w-screen-lg mx-auto p-3 ">
    <div class="flex flex-row my-5">
        <div class="basis-1/1">
            <p class="my-3">Bộ lọc:</p>
            <div class="flex flex-row justify-items-center">
                <div class="mr-2">
                    <select id="countries" class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Tuổi vàng</option>
                        <option value="US">United States</option>
                        <option value="CA">Canada</option>
                        <option value="FR">France</option>
                        <option value="DE">Germany</option>
                    </select>
                </div>
                <div class="mx-2">
                    <select id="countries" class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Đá chính</option>
                        <option value="US">United States</option>
                        <option value="CA">Canada</option>
                        <option value="FR">France</option>
                        <option value="DE">Germany</option>
                    </select>
                </div>
                <div class="mx-2">
                    <select id="countries" class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Đá phụ</option>
                        <option value="US">United States</option>
                        <option value="CA">Canada</option>
                        <option value="FR">France</option>
                        <option value="DE">Germany</option>
                    </select>
                </div>
                <div class="mx-2">
                    <select id="countries" class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Kiểu viên chủ</option>
                        <option value="US">United States</option>
                        <option value="CA">Canada</option>
                        <option value="FR">France</option>
                        <option value="DE">Germany</option>
                    </select>
                </div>
                <div class="mx-2">
                    <select id="countries" class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Chất liêu</option>
                        <option value="US">United States</option>
                        <option value="CA">Canada</option>
                        <option value="FR">France</option>
                        <option value="DE">Germany</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="basis-1/2">
            <p class="my-3 text-right">Sắp xếp:</p>
            <div class="flex flex-row justify-end">
                <div class="mx-2">
                    <select id="countries" class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Phổ biến nhất</option>
                        <option value="US">United States</option>
                        <option value="CA">Canada</option>
                        <option value="FR">France</option>
                        <option value="DE">Germany</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="grid md:grid-cols-4 sm:grid-cols-1 gap-4">
        @for($i = 1; $i <= 20; $i++)
            <div >
                <div class="block mx-1 bg-white border border-gray-200 shadow ">
                    <div class="product_img flex justify-center">
                        <img  src="{{ asset('assets/images/products/product1.png') }}" alt="">
                    </div>
                    <p class="font-normal text-gray-700 text-sm text-center  px-3">
                        Nhẫn Kim cương Vàng
                        Tangled DDDDC001597
                    </p>
                    <p class="font-normal  text-md text-center mt-5  text-[#C48C46]  px-3">
                        1.00.000đ
                    </p>
                    <p class="font-normal  text-sm text-center my-3 text-gray-700 line-through  px-3">
                        2.00.000đ
                    </p>
                    <div class="actions border-t-1 border-color-gray flex">
                        <button type="button" class="py-1 pr-[0.5rem] w-full  pl-[0.57rem] font-medium text-gray-900 text-xs  bg-white border border-gray-200 hover:bg-gray-100 hover:text-red-700 focus:z-10 ">
                            Tư vấn ngay
                        </button>
                        <button type="button" class="py-1 pr-[0.625rem] w-full pl-[0.650rem] text-xs font-medium text-gray-900 bg-white border border-gray-200 hover:bg-gray-100 hover:text-red-700">
                            Thêm vào giỏ hàng
                        </button>
                    </div>
                </div>
            </div>
        @endfor
    </div>
    <div class="w-full relative">
        <div class="bg-[#F8F3EF] w-full h-[220px] absolute bottom-0 z-1"></div>
        <div class="md:max-w-screen-md  flex-wrap items-center justify-between mx-auto md:my-20 container my-5  ">
            <div class="grid md:grid-cols-2 md:gap-0 gap-1 md:w-full  mx-auto">
                <div class="new_image  flex justify-center">
                    <img class="" src="{{ asset('assets/images/products/banner1.png') }}" alt="about">
                </div>
                <div class="md:flex  mx-auto new_image">
                    <div class="flex self-end">
{{--                        <img class="" src="{{ asset('assets/images/home/new_art.png') }}" alt="new_art">--}}
{{--                        <p class="my-3 font-medium text-1xl">Thấu hiểu và tạo tác nên những món trang sức lý tưởng cho Quý khách hàng</p>--}}
                        <img class="" src="{{ asset('assets/images/products/banner2.png') }}" alt="about">
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="max-w-screen-lg flex-wrap items-center justify-between mx-auto md:my-20 container my-5 ">
        <div class="flex justify-between items-center">
            <h4 class="font-medium text-[#FF0000] text-2xl	my-2">Có thể bạn sẽ thích</h4>
            <h3 class="text-gray-700 hover:text-red-500"><a href="">Xem thêm ></a></h3>
        </div>
        <div class="slider_product">
            @for($i = 0; $i <= 10; $i++)
                <div class="block mx-1 w-full bg-white border border-gray-200 shadow ">
                    <div class="product_img flex justify-center">
                        <img  src="{{ asset('assets/images/products/product1.png') }}" alt="">
                    </div>
                    <p class="font-normal text-gray-700 text-sm text-center  px-3">
                        Nhẫn Kim cương Vàng
                        Tangled DDDDC001597
                    </p>
                    <p class="font-normal  text-md text-center mt-5  text-[#C48C46]  px-3">
                        1.00.000đ
                    </p>
                    <p class="font-normal  text-sm text-center my-3 text-gray-700 line-through  px-3">
                        2.00.000đ
                    </p>
                    <div class="actions border-t-1 border-color-gray flex">
                        <button type="button" class="py-1 pr-[0.5rem]  pl-[0.57rem] font-medium text-gray-900 text-sm  bg-white border border-gray-200 hover:bg-gray-100 hover:text-red-700 focus:z-10 ">
                            Tư vấn ngay
                        </button>
                        <button type="button" class="py-1 pr-[0.625rem] pl-[0.650rem] text-sm font-medium text-gray-900 bg-white border border-gray-200 hover:bg-gray-100 hover:text-red-700">
                            Thêm vào giỏ hàng
                        </button>
                    </div>
                </div>
            @endfor
        </div>
    </div>

</div>
