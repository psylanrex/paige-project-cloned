@extends('manage.index')

@section('manage-content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3>Customers Info</h3>
        </div>
        <div class="panel-body">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Business</th>
                        <th>Business Address</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Loan Amount</th>
                        <th>Expected Time</th>
                        <th>Reason</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customers as $customer)
                        <tr>
                            <td>{{ $customer->id }}</td>
                            <td>{{ $customer->first_name}} {{ $customer->last_name }}</td>
                            <td>{{ $customer->business_name }}</td>
                            <td>{{ $customer->getFullAddress() }}</td>
                            <td>{{ $customer->phone }}</td>
                            <td>{{ $customer->email }}</td>
                            <td>{{ $customer->loan_amount }}</td>
                            <td>{{ $customer->need_timeframe }}</td>
                            <td>{{ $customer->getReason() }}</td>
                        </tr>
                    @endforeach
                </tbody>
            
            </table>
        </div>
    </div>
@stop