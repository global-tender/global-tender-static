@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Добавление семинара</div>
                <div class="panel-body">
                    <form method="POST" action="{{ URL::to('admin/seminars/add') }}" enctype="multipart/form-data" class="pure-form pure-form-aligned">
                        <fieldset>
                            <div class="pure-control-group">
                                <label>Город:</label>
                                <select name="city">
                                    @foreach($cities as $city)
                                        <option value="{{ $city['id'] }}">{{ $city['name'] }}</option>
                                    @endforeach
                                </select>
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
