<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
        <title>{{ strtolower($title_page ?? "Tiểu luận chuyên ngành")   }}</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" sizes="32x32" type="image/png" href="{{ asset('ico.png') }}" />
        @yield('css')

        {{-- Thông báo --}}
        @if(session('toastr'))
            <script>
                var TYPE_MESSAGE = "{{session('toastr.type')}}";
                var MESSAGE = "{{session('toastr.message')}}";
            </script>
        @endif
        <style>
            .commonTop #headers{
                background-image: linear-gradient(0, #0a4560, #2196f3) !important;
            }
            .top-header .content a:hover {
                opacity: 0.7;
            } 
            .fa {
                margin-right: 4px;
            }
            /* .product-two .bot .item .product-item {
                border_radius: 2px !important;
            } */
            .product-item:hover {
                top: -4px;
            }
            .right li:hover {
                opacity: 0.7;
            }
            
            #headers .search form .btnSearch:hover {
                opacity: 0.9;
            }
            #headers .logo span:hover {
                opacity: 0.8;
            }
            .text-sm {
                margin-right: 12px !important;
            }
            .text-sm1 {
                position: relative;
                margin-right: 8px !important;
                top: -10px;
            }
            .justify-between {
                margin-right: -100px;
            }
        </style>
    </head>
    <body>
        @include('frontend.components.header')
        @yield('content')
        @include('frontend.components.footer')
        <script>
            var DEVICE = '{{  device_agent() }}'
        </script>
        @yield('script')
    </body>
</html>
