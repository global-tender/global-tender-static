@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Редактирование города</div>
                <div class="panel-body">
                    <form method="POST" action="{{ URL::to('admin/cities/edit') }}" enctype="multipart/form-data" class="pure-form pure-form-aligned">
                        <fieldset>
                            <input type="hidden" name="id" value="{{ $city['id'] }}">
                            <div class="pure-control-group">
                                <label>Название:</label>
                                <input name="name" value="{{ $city['name'] }}">
                            </div>
                            <div class="pure-controls">
                                <div class="admin__city-img">
                                    <img src="{{ URL::to('uploads/'.$city['photo']) }}">
                                </div>
                            </div>
                            <div class="pure-control-group">
                                <label>Фотография:</label>
                                <input name="photo" type="file">
                            </div>
                            <div class="pure-controls">
                                <button type="submit" class="pure-button pure-button-primary">Редактировать</button>
                            </div>
                        </fieldset>
                    <form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
