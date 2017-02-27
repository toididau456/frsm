@push('css')
<link rel="stylesheet" href="/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/bower_components/sweetalert/dist/sweetalert.css">
{!! Html::style(mix('css/setting/table.css')) !!}
@endpush

@extends('layouts.web.main')

@section('content')
    <div class="col-md-9" id="content">
        <div class="row">
            <div class="panel panel-primary table-filterable col-md-12">
                <div class="panel-heading">
                    <h3 class="panel-title">{{ trans_choice('messages.settings', 2) }}</h3>
                </div>
                <div class="table">
                    <table class="table" id="settings-table">
                        <thead>
                            <tr>
                                <th>@lang('messages.index')</th>
                                <th>@lang('messages.option')</th>
                                <th>@lang('messages.value')</th>
                                <th>@lang('messages.action')</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($settings as $setting)
                            <tr class="setting_{{ $loop->iteration }}"
                                data-url={{ action('Web\SettingController@update', ['setting' => $setting->key]) }}>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    {{ $setting->title }}
                                </td>
                                <td class="update">
                                    <div class="setting-value">{{ $setting->value }}</div>
                                    <div class="setting-input">
                                        <input type="text" value="{{ $setting->value }}">
                                    </div>
                                </td>
                                <td>
                                    <button class="btn btn-link btn-detail btn-xs" data-id="{{ $loop->iteration }}">
                                        @lang('messages.detail')
                                    </button>
                                    <button class="btn btn-primary btn-edit btn-xs" data-id="{{ $loop->iteration }}">
                                        @lang('messages.edit')
                                    </button>
                                    <button class="btn btn-success btn-save btn-xs" data-id="{{ $loop->iteration }}">
                                        @lang('messages.save')
                                    </button>
                                    <button class="btn btn-default btn-cancel btn-xs" data-id="{{ $loop->iteration }}">
                                        @lang('messages.cancel')
                                    </button>
                                    <div class="modal" id="detail">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <span class="close">&times;</span>
                                                <h5>#{{ $loop->iteration }}. {{ $setting->title }}</h5>
                                            </div>
                                            <div class="modal-body">
                                                <div class="setting-value">{{ $setting->value }}</div>
                                                <div class="setting-input">
                                                    <textarea>{{ $setting->value }}</textarea>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-primary btn-edit"
                                                    data-id="{{ $loop->iteration }}">
                                                    @lang('messages.edit')
                                                </button>
                                                <button class="btn btn-success btn-save"
                                                    data-id="{{ $loop->iteration }}">
                                                    @lang('messages.save')
                                                </button>
                                                <button class="btn btn-default btn-cancel"
                                                    data-id="{{ $loop->iteration }}">
                                                    @lang('messages.cancel')
                                                </button>
                                            </div>
                                          </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
<script src="{{ asset('/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('/bower_components/sweetalert/dist/sweetalert.min.js') }}"></script>
<script src="{{ asset('js/autosize.min.js') }}"></script>
@endpush
