@extends('admin.master')

@section('title', __('keywords.messages'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
                    <h2 class="page-title">{{ __('keywords.messages') }}</h2>
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
                                    <th>{{ __('keywords.subject') }}</th>
                                    <th>{{ __('keywords.email') }}</th>
                                    <th>{{ __('keywords.actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($messages) > 0)
                                    @foreach ($messages as $key => $message)
                                        <tr>
                                            <td>{{ $messages->firstItem() + $loop->index }}</td>
                                            <td>{{ $message->name }}</td>
                                            <td>
                                                {{ $message->subject }}
                                            </td>
                                            <td>
                                                {{ $message->email }}
                                            </td>
                                            <td width="15%">
                                
                                                <x-action-button href="{{ route('admin.messages.show' , ['message' => $message]) }}" type="show" ></x-action-button>
                                                <x-delete-button href="{{ route('admin.messages.destroy' , ['message' => $message]) }}" id="{{ $message->id }}" ></x-delete-button>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                <x-alert-danger></x-alert-danger>
                                @endif

                            </tbody>
                        </table>
                        {{ $messages->render('pagination::bootstrap-5') }}
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
