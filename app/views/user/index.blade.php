

{{{ '<script>alert("hacking attemp double braces")</script>' }}}
@extends('layouts.default')
@if(count($users))
    @foreach($users as $user)
        {{--<p>{{ $user->email; }} </p>--}}
        {{--<p><?php echo isset($user->email) ? $user->email : 'Default value'; ?></p>--}}
        <p>{{{ $user->email or 'Default value' }}} </p>
    @endforeach
@endif

