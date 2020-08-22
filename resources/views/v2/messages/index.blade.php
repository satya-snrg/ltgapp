@extends('v2.layouts.app')
@section('content')
    @parent
    <div class="card mb-12">
        <div class="card-header">
            <h3>Messages</h3>
        </div>
        <div class="card-body">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <a href="{{ route('messages.create')}}">Add </a>
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th width="280px">Action</th>
                </tr>
                @foreach ($records as $record)
                    <tr>
                        <td>{{ $record->id }}</td>
                        <td>{{ $record->lang_en }}</td>
                        <td>
                            <form action="{{ route('messages.destroy',$record->id) }}" method="POST">
                                <a class="btn btn-primary" href="{{ route('messages.edit',$record->id) }}">Edit</a>
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
            {{ $records->links() }}
        </div>
    </div>
@endsection
