@extends('layouts.app')

@section('scripts')
    <script>
    //
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
                            <h4 class="text-center">
                                Inventories
                            </h4>
                        </div>
                        <a class="btn btn-default" href="{{ url()->previous() }}">
                            <i class="fa fa-chevron-left" aria-hidden="true">&nbsp;</i> Back
                        </a>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-body">
                        <form action="{{ route('inventories.store') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input id="name" type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="latitude">Latitude</label>
                                <input id="latitude" type="text" name="latitude" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="longitude">Longitude</label>
                                <input id="longitude" type="text" name="longitude" class="form-control">
                            </div>
                            <button class="btn btn-success" type="submit">
                                <i class="fa fa-save" aria-hidden="true">&nbsp;</i> Save
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection