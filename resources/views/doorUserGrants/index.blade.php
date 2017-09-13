@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Berechtigungen</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="list-group">
                      @foreach($elements as $element)
                      <a href="#" class="list-group-item">{{ $element->name }}</a>
                      @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
