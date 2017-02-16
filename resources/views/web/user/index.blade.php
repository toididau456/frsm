@push('css')
{!! Html::style(mix('css/table.css')) !!}
@endpush

@extends('layouts.web.main')

@section('content')
<div class="col-md-9" id="content">
    <div class="row">
        <div class="panel panel-primary filterable col-md-12">
            <div class="panel-heading">
                <h3 class="panel-title">{{ trans_choice('messages.employee', 2) }}</h3>
                <div class="pull-right">
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span>{{ trans('messages.filter') }}</button>
                </div>
            </div>
            <div class="table">
                <table class="table">
                    <thead>
                    <tr class="filters filter-inputs">
                        <th><input name="id" type="text" class="form-control" placeholder="{{ trans('messages.id') }}" disabled></th>
                        <th><input name="name" type="text" id="name" class="form-control" placeholder="{{ trans('messages.name') }}" disabled></th>
                        <th><input name="email" type="text" class="form-control" placeholder="{{ trans('messages.email') }}" disabled></th>
                        <th><input name="position" type="text" class="form-control" placeholder="{{ trans('messages.edit') }}" disabled></th>
                        <th>{{ trans('messages.action') }}</th>
                    </tr>
                    </thead>
                    <tbody class="result">
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->position->name }}</td>
                                <td>
                                    <a class="btn btn-primary "
                                       href="">
                                        @lang('messages.edit')
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="pull-right">
                {{ $users->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
