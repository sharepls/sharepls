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
                            <h1>
                                <img class="img-responsive img-rounded center-block" src="https://placehold.it/180x180">
                            </h1>
                        </div>

                        <a class="btn btn-default" href="{{ route('objects.index') }}">
                            <i class="fa fa-chevron-left" aria-hidden="true">&nbsp;</i> Back
                        </a>

                        <a class="btn btn-success" href="{{ route('objects.index') }}">
                            Available
                        </a>

                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="page-header">
                            <h5 class="text-center">Information</h5>
                        </div>
                        <h4>{{ $object->name }}</h4>
                        <p>{{ $object->description }}</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection