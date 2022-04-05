@extends('layout.Adminlayout')
@section('title','Home')
@section('heading','This is Home Page')
@section('Nav')
    <h2>This is Home Heading Two</h2>
@endsection

@section('Banner')
    <h2>This is Home Banner</h2>
@endsection

@section('Default-content')
<!-- this is Append-->
@parent
<p>This is Home Default Content</p>
@endsection