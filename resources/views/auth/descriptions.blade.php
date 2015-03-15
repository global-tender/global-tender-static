@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Описания</div>
                <ul class="admin__cities-list">
                    @foreach($descriptions as $desc)
                        <li>
                            <a href="{{ URL::to('admin/descriptions/edit/'.$desc['id']) }}">{{ $desc['name'] }}</a>
                            <form class="city__rm-link" method="POST" action="{{ URL::to('admin/descriptions/rm') }}">
                                <input type="hidden" name="id" value="{{ $desc['id'] }}">
                                <button type="submit">
                                    <i class="fa fa-trash-o"></i>
                                </button>
                            </form>
                    @endforeach
                </ul>
                <div class="panel-body">
                    <div class="admin__add-link">
                        <a href="{{ URL::to('admin/descriptions/add') }}">Добавить описание</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
