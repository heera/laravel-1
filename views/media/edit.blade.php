@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @if (!empty($errors) && count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="panel panel-default">
                    <div class="panel-heading">Edit Media</div>

                    <div class="panel-body typerocket-container">
                        <img src="{{ $form->getModel()->sizes['local']['full'] }}?w=120&h=120" alt="{{$form->getModel()->alt}}">
                        {!! $form->open() !!}
                        {!! $form->text('alt')->setLabel('SEO Image Description') !!}
                        {!! $form->text('Caption')->setSetting('help', 'Used by search feature') !!}
                        {!! $form->media('Media') !!}
                        {!! $form->submit('Update Media') !!}
                        {!! $form->close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>


@stop
