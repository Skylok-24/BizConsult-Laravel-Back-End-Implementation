@extends('admin.master')

@section('title', __('keywords.add_new'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class=" page-title">{{ __('keywords.add_new') }}</h2>

                <!-- simple table -->

                <div class="card shadow">
                    <div class="card-body">

                        <form action="{{ route('admin.services.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="title">{{ __('keywords.title') }}</label>
                                        <input value="{{ old('title') }}" type="text" id="title" name="title" class="form-control">
                                        @error('title')
                                      <span class="text-danger" >{{ $message }}</span> 
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="icon">{{ __('keywords.icon') }}</label>
                                        <input value="{{ old('icon') }}" type="text" id="icon" name="icon" class="form-control">
                                        @error('icon')
                                        <span class="text-danger" >{{ $message }}</span>   
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label for="description">{{ __('keywords.description') }}</label>
                                        <textarea id="description" name="description" class="form-control">{{old('description')}}</textarea>
                                        @error('description')
                                        <span class="text-danger" >{{ $message }}</span>   
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class=" btn btn-primary">{{ __('keywords.submit') }}</button>
                        </form>

                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
