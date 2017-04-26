@if (count($errors) > 0)
    <div class="alert alert-danger">
        <h2><i class="fa fa-exclamation-triangle">&nbsp;</i> Validation errors</h2>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif