@extends('base')
@section('title', $contact->first_name)
@section('main')
    <div class="card">
        <div class="col-sm-12">
            <h1 class="display-3">Show Item</h1>
            <table class="table table-striped">
                <thead>
                <tr>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Job Title</td>
                    <td>City</td>
                    <td>Country</td>
                    <td colspan = 2>Actions</td>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$contact->first_name}}</td>
                        <td>{{$contact->last_name}}</td>
                        <td>{{$contact->email}}</td>
                        <td>{{$contact->job_title}}</td>
                        <td>{{$contact->city}}</td>
                        <td>{{$contact->country}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
