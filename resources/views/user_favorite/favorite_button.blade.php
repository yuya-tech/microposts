    @if (Auth::user()->is_favorite($user->id))
        {!! Form::open(['route' => ['favorites.unfavorite', $user->id], 'method' => 'delete']) !!}
            {!! Form::submit('Unfavorite', ['class' => "btn btn-danger btn-red"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['favorites.favorite', $user->id]]) !!}
            {!! Form::submit('Favorite', ['class' => "btn btn-primary btn-black"]) !!}
        {!! Form::close() !!}
    @endif