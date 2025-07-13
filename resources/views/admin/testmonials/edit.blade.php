@extends('admin.master')

@section('title', __('keywords.edit_testmonial'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class=" page-title">{{ __('keywords.edit_testmonial') }}</h2>

                <!-- simple table -->

                <div class="card shadow">
                    <div class="card-body">

                        <form action="{{ route('admin.testmonials.update',['testmonial' => $testmonial]) }}" method="post" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="title">{{ __('keywords.name') }}</label>
                                        <input value="{{ $testmonial->name }}" type="text" id="name" name="name" class="form-control">
                                        @error('name')
                                      <span class="text-danger" >{{ $message }}</span> 
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="position">{{ __('keywords.position') }}</label>
                                        <input value="{{ $testmonial->position }}" type="text" id="position" name="position" class="form-control">
                                        @error('position')
                                      <span class="text-danger" >{{ $message }}</span> 
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label for="image">{{ __('keywords.image') }}</label>
                                        <input value="{{ $testmonial->icon }}" type="file" id="image" name="image" class="form-control-file">
                                        @error('image')
                                        <span class="text-danger" >{{ $message }}</span>   
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label for="description">{{ __('keywords.description') }}</label>
                                        <textarea id="description" name="description" class="form-control">{{ $testmonial->description }}</textarea>
                                        @error('description')
                                        <span class="text-danger" >{{ $message }}</span>   
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class=" btn btn-primary">{{ __('keywords.update') }}</button>
                        </form>

                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
