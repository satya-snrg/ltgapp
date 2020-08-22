@extends('v2.layouts.app')
@section('content')
    @parent
    <div class="card mb-12">
        <div class="card-header">
            <h3>Letter to God</h3>
        </div>
        <div class="card-body">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <table class="table table-bordered">
                <tr>
                    <th>Date</th>
                    <th>Name</th>
                    <th>Question</th>
                    <th>Response Message</th>
                </tr>
                @foreach ($records as $record)
                    <tr>
                        <td>{{ $record->created_at }}</td>
                        <td>{{ $record->name }}</td>
                        <td>{{ $record->question }}</td>
                        <td>{{ $record->message }}</td>
                    </tr>
                @endforeach
            </table>
            {{ $records->links() }}
        </div>
    </div>
@endsection
