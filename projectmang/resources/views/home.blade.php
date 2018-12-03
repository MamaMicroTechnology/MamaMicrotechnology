@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                 <li><a href="{{ URL::to('/') }}/employess" style="font-size:1.6em"><b>Task List </b></a></li>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
