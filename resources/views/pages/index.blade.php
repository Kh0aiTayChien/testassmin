@extends('layouts.master')
@section('content')

    <div class="banner-container">
        <img class="img-fluid img-responsive banner mt-4 w-100  " src="{{asset('images/banner-01.png')}}" alt="banner">
        <div class="text-banner h2">TIN TỨC</div>
        <div class="text-banner text-mini h3"> Trang chủ / Tin tức</div>
    </div>
    <div class="content">
        <div class="side-content ">
            <div class="box-side-content">
                <div class="p-4">
                    <h4 class="font-size-medium"> DANH MỤC NỘI DUNG</h4>
                    <div class="mt-3"> Cẩm nang tri thức</div>
                    <div class="mt-3"> Sự kiện doanh nghiệp</div>
                    <div class="mt-3"> Tuyển dụng</div>
                </div>
            </div>
            <div>

            </div>
        </div>
        <div class="main-content ms-4">
            <h3> TIN TỨC </h3>
           @livewire('list-index')
        </div>
    </div>
    <script>

    </script>
@endsection
