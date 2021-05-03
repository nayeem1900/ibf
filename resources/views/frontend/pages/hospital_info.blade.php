@extends('frontend.layouts.master')
@section('content')
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">SL</th>
            <th scope="col">Hospital Name</th>
            <th scope="col">Address</th>
            <th scope="col">Contact Number</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Islami Bank Central Hospital</td>
            <td>30, Anjuman-e-Mofidul Islam Road, Kakrail, Dhaka-1000</td>
            <td>Phone:+(02)9360331-2, 9355801-2 Mobile:+01915728266,01918872802, Email:ibhdit@yahoo.com</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Islami Bank Hospital Motijheel</td>
            <td>Islmi Bank Hospital, Motijheel
                24 / B, Outer Circular Road
                Motijheel, Dhaka-1000</td>
            <td>Phone:02 – 58311740,02 – 58312372, 01981415403</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
        </tr>
        </tbody>
    </table>


@endsection