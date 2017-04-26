@extends('layouts.app')

@section('scripts')
    <script>

    </script>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="page-header">
                            <div class="text-center">
                                <i class="fa fa-cubes fa-3x" aria-hidden="true"></i>
                            </div>
                            <h2 class="text-center">{{ $inventory->name }}</h2>
                        </div>
                        <a class="btn btn-default" href="{{ url()->previous() }}">
                            <i class="fa fa-chevron-left" aria-hidden="true">&nbsp;</i> Back
                        </a>
                        <a class="btn btn-default" href="{{ url('inventories/search') }}">
                            <i class="fa fa-search" aria-hidden="true">&nbsp;</i> Search
                        </a>
                        <a class="btn btn-success" href="{{ route('inventories.create') }}">
                            <i class="fa fa-camera" aria-hidden="true">&nbsp;</i> Upload
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection