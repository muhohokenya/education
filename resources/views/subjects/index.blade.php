@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                {{ $errors }}
                <form action="{{ route('subjects.store') }}" method="post">
                    @csrf
                <div class="form-group">
                    <label for="">name</label>
                    <input type="text" class="form-control" name="subject">
                </div>


                    <button class="btn btn-primary" type="submit">save</button>

                </form>


            </div>
            <div class="col-md-4">
               <table class="table table-bordered table-striped">
                   <tr>
                       <th class="bg-danger">Name</th>
                       <th colspan="2">Action</th>
                   </tr>
                   @foreach($subjects as $subject)
                       <tr>
                           <td><a href="{{route('subjects.show',$subject)}}">{{ $subject->name }}</a></td>
                           <td>
                               <a href="{{ route('subjects.edit',$subject) }}">
                                   Edit
                               </a>
                           </td>
                       </tr>
                       @endforeach
               </table>
            </div>
        </div>
    </div>
@endsection