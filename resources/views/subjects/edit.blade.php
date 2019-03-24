@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                {{ $errors }}
                <form action="{{ route('subjects.update',$subject) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">name</label>
                                <input type="text" value="{{ $subject->name }}" class="form-control" name="subject">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">

                            </div>
                        </div>
                    </div>


                    <button class="btn btn-primary" type="submit">save</button>

                </form>


            </div>
        </div>
    </div>
@endsection