@extends('admin.master')

@section('title', __('keywords.subscribers'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
                    <h2 class="page-title">{{ __('keywords.subscribers') }}</h2>
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
                                    <th>{{ __('keywords.email') }}</th>
                                    <th>{{ __('keywords.actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($subscribers) > 0)
                                    @foreach ($subscribers as $key => $subscriber)
                                        <tr>
                                            <td>{{ $subscribers->firstItem() + $loop->index }}</td>
                                            <td>
                                                {{ $subscriber->email }}
                                            </td>
                                            <td width="5%">
                                
                                                
                                                <x-delete-button href="{{ route('admin.subscribers.destroy' , ['subscriber' => $subscriber]) }}" id="{{ $subscriber->id }}" ></x-delete-button>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                <x-alert-danger></x-alert-danger>
                                @endif

                            </tbody>
                        </table>
                        {{ $subscribers->render('pagination::bootstrap-5') }}
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
