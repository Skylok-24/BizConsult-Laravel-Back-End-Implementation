@extends('admin.master')

@section('title', __('keywords.show_message'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class=" page-title">{{ __('keywords.show_message') }}</h2>

                <!-- simple table -->

                <div class="card shadow">
                    <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="title">{{ __('keywords.name') }}</label>
                                        <p class="form-control">{{ $message->name }}</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="icon">{{ __('keywords.subject') }}</label>
                                        <p class="form-control" >
                                            {{ $message->subject }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label for="description">{{ __('keywords.message') }}</label>
                                        <p class="form-control">{{ $message->message }}</p>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
