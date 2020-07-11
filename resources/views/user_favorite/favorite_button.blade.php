@if (Auth::id() != $user->id)
    @if (Auth::user()->is_favorite($user->id))
        {!! Form::open(['route' => ['users.favorite', $user->id], 'method' => 'favorite']) !!}
            {!! Form::submit('Unfavorite', ['class' => "btn btn-danger btn-green"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['users.favorite', $user->id]]) !!}
            {!! Form::submit('Favorite', ['class' => "btn btn-primary btn-red"]) !!}
        {!! Form::close() !!}
    @endif
@endif