@extends('layouts.app')

@section('content')

<h2>Dashboard</h2>

<div class="row mt-4">

    <div class="col-md-4">
        <div class="card p-3">
            <h5>Total Users</h5>
            <h3>10</h3>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card p-3">
            <h5>Roles</h5>
            <h3>3</h3>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card p-3">
            <h5>Active Sessions</h5>
            <h3>5</h3>
        </div>
    </div>

</div>

@endsection