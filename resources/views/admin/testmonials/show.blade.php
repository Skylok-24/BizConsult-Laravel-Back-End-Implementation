@extends('admin.master')

@section('title', __('keywords.show_testmonial'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class=" page-title">{{ __('keywords.show_testmonial') }}</h2>

                <!-- simple table -->

                <div class="card shadow">
                    <div class="card-body">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group mb-3">
                                        <label for="title">{{ __('keywords.name') }}</label>
                                        <p class="form-control">{{ $testmonial->name }}</p>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group mb-3">
                                        <label for="title">{{ __('keywords.position') }}</label>
                                        <p class="form-control">{{ $testmonial->position }}</p>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group mb-3">
                                        <label for="icon">{{ __('keywords.image') }}</label>
                                        <div class="mt-2" >
                                            <img src="{{ asset("storage/testmonials/$testmonial->image") }}" alt="#" width="50px" >
                                            <i class="{{ $testmonial->image }}"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label for="description">{{ __('keywords.description') }}</label>
                                        <p class="form-control">{{ $testmonial->description }}</p>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
