@extends('spark::layouts.app')

@section('content')
    <div class="container">
        <table class="table table-striped table-responsive">
            <thead>
            <!-- headers here -->
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Address</th>
                <th>Zip</th>
                <th>City</th>
                <th>Phone</th>
                <th>E-mail</th>
                <th>Country</th>
            </tr>
            </thead>

            <tbody>
            <!-- foreach loop here -->
            @foreach ($customers as $customer)
                <tr>
                    <td>{{ $customer->id }}</td>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->address }}</td>
                    <td>{{ $customer->zip }}</td>
                    <td>{{ $customer->city }}</td>
                    <td>{{ $customer->phone }}</td>
                    <td>{{ $customer->mail }}</td>
                    <td>{{ $customer->country }}</td>
                    <td><a class="btn btn-info" href="/customers/{{ $customer->id }}/edit">Edit</a></td>
                    <td><a class="btn btn-danger"
                           onclick="var del = window.confirm('Are you sure you want to delete entry {{ $customer->name }}?');
                                   if (del) { document.location.href = '/customers/{{ $customer->id }}/delete'; }">
                            Delete
                        </a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
