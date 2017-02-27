<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <div class="modal-title"><h3>{{ $user->name }}</h3></div>
</div>
<div class="modal-body modal-permission">
    {{ Form::open([
        'url' => action('Web\UserController@updatePermission', ['id' => $user->id]),
        'method' => 'POST',
    ]) }}
        <div>
            @foreach($permissionGroups as $groupKey => $groupId)
                <fieldset>
                    <h4>@lang('messages.permission_' . $groupKey)</h4>
                    @foreach($permissions->where('group_id', $groupId)->chunk(3) as $checkPermissions)
                        <div class="row">
                            @foreach($checkPermissions as $permission)
                                <div class="col-md-4">
                                    <div class="checkbox">
                                        <label>
                                            {{ Form::checkbox('permission[]', $permission->id,
                                                $user->permissions->where('id', $permission->id)->count()) }}
                                            {{ $permission->name }}
                                        </label>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                </fieldset>
            @endforeach
        </div>
        <div class="modal-footer modal-submit-permission">
            {{ Form::submit("Save", ["class" => "btn btn-success btn-permission", "data-dismiss" => "modal"]) }}
        </div>
    {{ Form::close() }}
</div>
