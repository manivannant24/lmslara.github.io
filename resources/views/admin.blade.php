<!DOCTYPE html>
<html lang="en">
<head>
@extends('layouts.sidebar')  

</head>
<body>
    
@section('contents')
<li class="nav-item">
                <a class="nav-link" href="{{url('leadtakenanalysis')}}">
                <i class="fa fa-bars" aria-hidden="true"></i>

                    <span>Lead Taken Analysis</span></a>
            </li>
            @endsection
@section('contents2')
<li class="nav-item">
                <a class="nav-link" href="{{url('lta')}}">
                <i class="fa fa-download" aria-hidden="true"></i>

                    <span>Lead Taken Analysis2</span></a>
            </li>
            @endsection
    
</body>

                    </html>
