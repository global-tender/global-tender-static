@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Города</div>
                <ul class="admin__cities-list">
                    @foreach($cities as $city)
                        <li>
                            <a href="{{ URL::to('admin/cities/edit/'.$city['id']) }}">{{ $city['name'] }}</a>
                            <form class="city__rm-link" method="POST" action="{{ URL::to('admin/cities/rm') }}">
                                <input type="hidden" name="id" value="{{ $city['id'] }}">
                                <button type="submit">
                                    <i class="fa fa-trash-o"></i>
                                </button>
                            </form>
                    @endforeach
                </ul>
                <div class="panel-body">
                    <div class="admin__add-link">
                        <a href="{{ URL::to('admin/cities/add') }}">Добавить город</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
