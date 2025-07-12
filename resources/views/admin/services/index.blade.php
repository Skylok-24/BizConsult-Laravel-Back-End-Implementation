@extends('admin.master')

@section('title', __('keywords.services'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
                    <h2 class="page-title">{{ __('keywords.services') }}</h2>

                    <div class="page-title-right">
                        <a href="{{ route('admin.services.create') }}" class="btn btn-primary">{{ __('keywords.add_new') }}</a>
                    </div>
                </div>

                <!-- simple table -->

                <div class="card shadow">
                    <div class="card-body">
                        @if(session('status'))
                            <div class="alert alert-success">{{ session('status') }}</div>
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
                                                <a href="{{ route('admin.services.edit',['service' => $service]) }}" class=" btn btn-success">
                                                    <i class="fe fe-edit-2"></i>
                                                </a>
                                                <a href="{{ route('admin.services.show',['service' => $service]) }}" class=" btn btn-primary">
                                                    <i class="fe fe-eye"></i>
                                                </a>
                                                <form action="{{ route('admin.services.destroy',['service' => $service]) }}" class="d-inline" 
                                                     method="POST" id="deleteForm-{{ $service->id }}">
                                                     @csrf
                                                     @method('DELETE')
                                                    <button class=" btn btn-danger" type="button" onclick="confirmDelete({{ $service->id }})">
                                                        <i class="fe fe-trash-2"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                <tr>
                                    <td colspan="4">{{ __('keywords.no_record_found') }}</td>
                                </tr>
                                @endif

                            </tbody>
                        </table>
                        {{ $services->render('pagination::bootstrap-5') }}
                    </div>
                </div>


            </div>
        </div>
    </div>

    <script>
        function confirmDelete(id) {
            if(confirm('are sure you want to delete this record ?'))
                document.getElementById('deleteForm-'+id).submit();

        }
    </script>
@endsection
