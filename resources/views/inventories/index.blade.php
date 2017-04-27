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
                        <h4 class="text-center">Inventories</h4>
                    </div>
                    <a class="btn btn-default" href="{{ url('inventories/search') }}">
                        <i class="fa fa-search" aria-hidden="true">&nbsp;</i> Search
                    </a>
                    <a class="btn btn-success" href="{{ route('inventories.create') }}">
                        <i class="fa fa-cube" aria-hidden="true">&nbsp;</i> Create
                    </a>
                </div>
            </div>

            @if($inventories->count() == 0)

            @else
                @foreach($inventories as $inventory)
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="page-header">
                                <h4>
                                    {{ $inventory->name }}
                                    <i class="fa fa-cube pull-right" aria-hidden="true">&nbsp;</i>
                                </h4>
                            </div>

                            <div class="row">
                                @foreach($inventory->objects as $object)
                                    <div class="col-xs-4">
                                        <a href="{{ route('objects.show', $object->id) }}">
                                            <img class="img-responsive img-rounded" src="https://placehold.it/180x180" alt="">
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</div>
@endsection