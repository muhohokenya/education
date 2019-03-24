@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
           {{ $lesson->content}}
        </div>
    </div>
@endsection