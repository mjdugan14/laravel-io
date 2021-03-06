@extends('layouts._two_columns_left_sidebar')

@section('sidebar')
    @include('forum._sidebar')
@stop

@section('content')
    <div class="row forum">
        <div class="small-12 columns form">
            {{ Form::model($comment->resource) }}
                <fieldset>
                    <legend>Edit Comment</legend>

                    <div class="row">
                        <div class="">
                            {{ Form::label('body', 'Thread') }}
                            {{ Form::textarea("body", null) }}
                            {{ $errors->first('body', '<small class="error">:message</small>') }}
                            <small>Paste a <a href="https://gist.github.com" target="_NEW">Gist</a> URL to embed source. <em>example: https://gist.github.com/username/1234</em></small>
                        </div>
                    </div>

                    <div class="row">
                        {{ Form::button('Save', ['type' => 'submit', 'class' => 'button']) }}
                    </div>

                </fieldset>

            {{ Form::close() }}

        </div>
    </div>
@stop

{{-- “What do you think you are, for Chrissake, crazy or somethin'? Well you're not! You're not! You're no crazier than the average asshole out walkin' around on the streets and that's it. ”  --}}