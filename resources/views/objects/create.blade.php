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

                        @include('objects.header')

                        <a class="btn btn-default" href="{{ route('objects.index') }}">
                            <i class="fa fa-chevron-left" aria-hidden="true">&nbsp;</i> Index
                        </a>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-body">

                        <form action="{{ route('objects.store') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group  @if ($errors->has('name')) has-error @endif">
                                <label class="control-label" for="name">Name</label>
                                <input id="name" type="text" name="name" class="form-control" value="{{ old('name') }}">
                                @if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif
                            </div>

                            <div class="form-group  @if ($errors->has('description')) has-error @endif">
                                <label class="control-label" for="description">Description</label>
                                <input id="name" type="text" name="description" class="form-control" value="{{ old('description') }}">
                                @if ($errors->has('description')) <p class="help-block">{{ $errors->first('description') }}</p> @endif
                            </div>

                            <div class="form-group @if ($errors->has('inventory_id')) has-error @endif">
                                <label class="control-label" for="inventory_id">Inventory</label>
                                @if($inventories->count() > 0)
                                    <select name="inventory_id" id="inventory_id" class="form-control">
                                        @foreach($inventories as $inventory)
                                            <option value="{{ $inventory->id }}">{{ $inventory->name }}</option>
                                        @endforeach
                                    </select>
                                @else
                                    <div class="alert alert-warning">
                                        <i class="fa fa-exclamation" aria-hidden="true">&nbsp;</i> User doesn't have inventories related
                                    </div>
                                @endif
                                @if ($errors->has('inventory_id')) <p class="help-block">{{ $errors->first('inventory_id') }}</p> @endif
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