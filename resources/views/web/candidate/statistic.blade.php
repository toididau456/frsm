@extends('layouts.web.main')
@section('content')
    @push('css')
          {!! Charts::assets() !!}
    @endpush
    <div class="col-md-9 col-md-offset-3 statistic">
        {!! Form::open([
            'action' => 'Web\StatisticController@index',
            'role' => 'form',
            'method' => 'get',
            'class' => 'statistic-limit-day',
        ]) !!}
            {!! Form::select('month', $optionMonth, app('request')->input('month')) !!}
            {!! Form::submit(trans('statistic.filter'), ['class' => 'btn btn-default btn-sm']) !!}
        {!! Form::close() !!}
        <div class="box-statistic" id="candidate-status">
        <center>
            {!! $chart->render() !!}
        </center>
        </div>
    </div>
@stop
