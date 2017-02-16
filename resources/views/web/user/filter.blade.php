@forelse($users as $user)
    <tr>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->position->name }}</td>
        <td>
            <a class="btn btn-primary" href="">@lang('messages.edit')</a>
        </td>
    </tr>
    @empty
    <tr>
        <td class="no-result" colspan="4">@lang('messages.no_result')</td>
    </tr>
@endforelse

