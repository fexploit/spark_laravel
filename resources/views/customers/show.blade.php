@extends('spark::layouts.app')

@section('content')
    <div class="container">
        <table class="table table-striped table-responsive sortable">
            <thead>
            <!-- headers here -->
            <tr>
                <th>ID</th>
                <th data-defaultsort="asc">Name</th>
                <th>E-mail address</th>
                <th>Phone number</th>
                <th>Country</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            </thead>

            <tbody>
            <!-- foreach loop here -->
            @foreach ($customers as $customer)
                <tr>
                    <td>{{ $customer->id }}</td>
                    <td>{{ $customer->c_name }}</td>
                    <td>{{ $customer->c_email }}</td>
                    <td>{{ $customer->c_phone }}</td>
                    <td>{{ $customer->c_country }}</td>
                    <td><a class="btn btn-info btn-sm" href="/customers/{{ $customer->id }}/more">more</a></td>
                    <td><a class="btn btn-danger btn-sm"
                           onclick="var del = window.confirm('Are you sure you want to delete entry {{ $customer->c_name }}?');
                                   if (del) { document.location.href = '/customers/{{ $customer->id }}/delete'; }">
                            delete
                        </a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
