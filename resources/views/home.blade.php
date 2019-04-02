@extends('layouts.app')




@section('home')
<div id="content-wrapper" class="container-fluid">
     <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Overview</li>
    </ol>

    <h1>HOME PAGE</h1>

</div>

@endsection
