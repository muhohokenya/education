@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                {{ $errors }}
                <form action="{{ route('lessons.store') }}" method="post">
                    @csrf
               <div class="row">
                   <div class="col-md-6">
                       <div class="form-group">
                           <label for="">select subject</label>
                           <select name="subject" id="subject" class="form-control">
                                @foreach($subjects as $subject)
                                   <option value="{{$subject->id}}">
                                       {{$subject->name}}
                                   </option>
                                    @endforeach
                           </select>
                       </div>
                   </div>
                   <div class="col-md-6">
                       <div class="form-group">
                           <label for="">name</label>
                           <input type="text" class="form-control" name="lesson">
                       </div>
                   </div>
               </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="lesson_content">content</label>
                                <textarea class="form-control" name="lesson_content" id="lesson_content" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                    </div>


                    <button class="btn btn-primary" type="submit">save</button>

                </form>


            </div>
            <div class="col-md-5">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>lesson</th>
                        <th>subject</th>
                        <th colspan="2">Action</th>
                    </tr>
                    @foreach($lessons as $lesson)
                        <tr>
                            <td><a href="{{route('lessons.show',$lesson)}}">
                                    {{$lesson->name}}
                                </a></td>
                            <td>{{$lesson->subject->name}}</td>
                            <td>
                                <a href="{{ route('lessons.edit',$lesson) }}">
                                    Edit
                                </a>
                            </td>
                            <td>
                                <a href="" class="btn btn-sm btn-outline-danger">
                                    Delete
                                </a>
                            </td>
                        </tr>
                        @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection