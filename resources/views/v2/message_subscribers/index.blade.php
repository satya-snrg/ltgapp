@extends('v2.layouts.app')
@section('content')
    @parent
    <div class="card mb-12">
        <div class="card-header">
            <h3>Message for the Day: Subscribed Users</h3>
        </div>
        <div class="card-body">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <table class="table table-bordered">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Joined</th>
                </tr>
                @foreach ($records as $record)
                    <tr>
                        <td>{{ $record->name }}</td>
                        <td>{{ $record->email }}</td>
                        <td>{{ $record->phone }}</td>
                        <td>{{ $record->created_at }}</td>
                    </tr>
                @endforeach
            </table>
            {{ $records->links() }}
        </div>
    </div>
@endsection
