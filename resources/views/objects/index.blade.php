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

                        @include('objects.header')

                        <a class="btn btn-default" href="{{ url('objects/search') }}">
                            <i class="fa fa-search" aria-hidden="true">&nbsp;</i> Search
                        </a>
                        <a class="btn btn-success" href="{{ route('objects.create') }}">
                            <i class="fa fa-camera" aria-hidden="true">&nbsp;</i> Upload
                        </a>
                    </div>
                </div>

                @if($objects->count() == 0)

                @else

                    @foreach($objects as $object)

                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <a href="{{ route('objects.show', $object->id) }}">
                                            <img class="img-responsive img-rounded" src="https://placehold.it/180x180">
                                        </a>
                                    </div>
                                    <div class="col-xs-8">
                                        <h4>{{ $object->name }}</h4>
                                        <p>{{ $object->description }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
@endsection