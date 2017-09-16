@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Personen</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    {{--
                    <div class="form-group">
                    <a href="{{action('DoorUserController@create')}}"
                      class="btn btn-success" role="button">hinzufügen</a>
                    </div>
                    --}}

                    @if(count($logs) > 0)
                    <div class="list-group">
                      @foreach($logs as $log)
                      <a href="{{action('DoorUserController@create', ['chip_uuid' => $log->chip_uuid])}}" class="list-group-item list-group-item-info"> {{ $log->created_at }} - {{ $log->chip_uuid }}</a>
                      @endforeach
                    </div>
                    @endif

                    <div class="list-group">
                      @foreach($elements as $element)
                      <a href="{{action('DoorUserController@show', $element->id)}}" class="list-group-item">{{ $element->name }}</a>
                      @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
