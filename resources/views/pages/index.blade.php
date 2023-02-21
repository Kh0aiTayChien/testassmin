@extends('layouts.master')
@section('content')

    @include('pages/banner',compact('banner'))
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
