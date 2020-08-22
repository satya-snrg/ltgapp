@extends('v2.layouts.app')
@section('content')
    @parent
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h1 class="h3 mb-4 text-gray-800">Messages</h1>
    <div class="card mb-12">
        <div class="card-header">
            Add Message
        </div>
        <div class="card-body">
            {{ Form::open(['url' => 'messages', 'method' => 'post','files'=>'true']) }}
            <div class="form-group">
                <label for="email">English:</label>
                {{Form::text('lang_en', isset($record) ? $record->lang_en : null, ['class' => 'form-control', 'id' => 'lang_en'])}}
            </div>
            <div class="form-group">
                <label for="email">Hindi:</label>
                {{Form::text('lang_hi', isset($record) ? $record->lang_hi : null, ['class' => 'form-control', 'id' => 'lang_hi'])}}
            </div>
            <div class="form-group">
                <label for="email">Telugu:</label>
                {{Form::text('lang_te', isset($record) ? $record->lang_te : null, ['class' => 'form-control', 'id' => 'lang_te'])}}
            </div>
            @if(isset($category) && !empty($record->image_url))
                <img src="{{URL::to('/uploads/'.$record->image_url)}}" style="width: 100px;">
            @endif
            <div class="form-group">
                <label for="email">Image:</label>
                {{Form::file('image', ['class' => 'form-control', 'id' => 'image'])}}
            </div>
            @if(isset($record))
                <input type="hidden" name="id" value="{{$record->id}}">
            @endif
            {{Form::submit('Save', ['class' => 'btn btn-primary'])}}
            <a href="{{ route('messages.index')}}">Cancel </a>
            {{ Form::close() }}
        </div>
    </div>
@endsection
