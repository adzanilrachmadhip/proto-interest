@extends('layouts.app')

@section('content')

    @yield('page-header')

    <div class="@yield('page-wrapper-class')">
        <div class="container">
            <div class="row">

                <div class="col-lg-4">
                    @yield('sidebar')
                </div>

                <div class="col-lg-8">
                    @yield('main-content')
                </div>
            </div>
        </div>
    </div>

@endsection
