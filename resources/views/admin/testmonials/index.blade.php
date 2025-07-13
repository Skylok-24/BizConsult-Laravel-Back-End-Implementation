@extends('admin.master')

@section('title', __('keywords.testmonials'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
                    <h2 class="page-title">{{ __('keywords.testmonials') }}</h2>

                    <div class="page-title-right">
                        <x-action-button href="{{ route('admin.testmonials.create') }}" type="create" ></x-action-button>
                    </div>
                </div>

                <!-- simple table -->

                <div class="card shadow">
                    <div class="card-body">
                        @if(session('status'))
                            <x-alert-success></x-alert-success>
                        @endif
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>{{ __('keywords.name') }}</th>
                                    <th>{{ __('keywords.position') }}</th>
                                    <th>{{ __('keywords.image') }}</th>
                                    <th>{{ __('keywords.actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($testmonials) > 0)
                                    @foreach ($testmonials as $key => $testmonial)
                                        <tr>
                                            <td>{{ $testmonials->firstItem() + $loop->index }}</td>
                                            <td>{{ $testmonial->name }}</td>
                                            <td>{{ $testmonial->position }}</td>
                                            <td >
                                                <img src="{{ asset("storage/testmonials/$testmonial->image") }}" alt="#" width="50px">
                                            </td>
                                            <td width="15%">
                                                <x-action-button href="{{ route('admin.testmonials.edit' , ['testmonial' => $testmonial]) }}" type="edit" ></x-action-button>
                                
                                                <x-action-button href="{{ route('admin.testmonials.show' , ['testmonial' => $testmonial]) }}" type="show" ></x-action-button>
                                                <x-delete-button href="{{ route('admin.testmonials.destroy' , ['testmonial' => $testmonial]) }}" id="{{ $testmonial->id }}" ></x-delete-button>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                <x-alert-danger></x-alert-danger>
                                @endif

                            </tbody>
                        </table>
                        {{ $testmonials->render('pagination::bootstrap-5') }}
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
