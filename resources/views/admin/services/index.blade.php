@extends('admin.master')

@section('title', __('keywords.services'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
                    <h2 class="page-title">{{ __('keywords.services') }}</h2>

                    <div class="page-title-right">
                        <x-action-button href="{{ route('admin.services.create') }}" type="create" ></x-action-button>
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
                                    <th>{{ __('keywords.title') }}</th>
                                    <th>{{ __('keywords.icon') }}</th>
                                    <th>{{ __('keywords.actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($services) > 0)
                                    @foreach ($services as $key => $service)
                                        <tr>
                                            <td>{{ $services->firstItem() + $loop->index }}</td>
                                            <td>{{ $service->title }}</td>
                                            <td width="10%">
                                                <i class="{{ $service->icon }}"></i>
                                            </td>
                                            <td width="15%">
                                                <x-action-button href="{{ route('admin.services.edit' , ['service' => $service]) }}" type="edit" ></x-action-button>
                                
                                                <x-action-button href="{{ route('admin.services.show' , ['service' => $service]) }}" type="show" ></x-action-button>
                                                <x-delete-button href="{{ route('admin.services.destroy' , ['service' => $service]) }}" id="{{ $service->id }}" ></x-delete-button>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                <x-alert-danger></x-alert-danger>
                                @endif

                            </tbody>
                        </table>
                        {{ $services->render('pagination::bootstrap-5') }}
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
