@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Emploee {{ $emploee->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/employee/emploee') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/employee/emploee/' . $emploee->id . '/edit') }}" title="Edit Emploee"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['employee/emploee', $emploee->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Emploee',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th>
                                        <td>{{ $emploee->id }}</td>
                                    </tr>

                                    <tr>
                                        <th> Company </th>
                                        <td> {{ $emploee->company }} </td>
                                    </tr>

                                    <tr>
                                        <th> Email </th>
                                        <td> {{ $emploee->email }} </td>
                                    </tr>

                                    <tr>
                                        <th> Employee Id </th>
                                        <td> {{ $emploee->employee_id }} </td>
                                    </tr>

                                    <tr>
                                        <th> Employee Gender </th>
                                        <td> {{ $emploee->gender }} </td>
                                    </tr>
                                    <tr>
                                        <th> Employee first_name </th>
                                        <td> {{ $emploee->first_name }} </td>
                                    </tr>


                                    <tr>
                                        <th> Employee Type </th>
                                        <td> {{ $emploee->employee_type }} </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
