@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Добавление города</div>
                <div class="panel-body">
                    <form method="POST" action="{{ URL::to('admin/cities/add') }}" enctype="multipart/form-data" class="pure-form pure-form-aligned">
                        <fieldset>
                            <div class="pure-control-group">
                                <label>Название:</label>
                                <input name="name">
                            </div>
                            <div class="pure-control-group">
                                <label>Фотография:</label>
                                <input name="photo" type="file">
                            </div>
                            <div class="pure-controls">
                                <button type="submit" class="pure-button pure-button-primary">Добавить</button>
                            </div>
                        </fieldset>
                    <form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
