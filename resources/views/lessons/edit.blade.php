@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                {{ $errors }}
                <form action="{{ route('lessons.update',$lesson) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">select subject</label>
                                <select name="subject" id="subject" class="form-control">
                                    <option value="{{$lesson->subject->id}}">
                                        {{$lesson->subject->name}}
                                    </option>
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
                                <input type="text" value="{{ $lesson->name }}" class="form-control" name="lesson">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="lesson_content">content</label>
                                <textarea class="form-control" name="lesson_content" id="lesson_content"
                                          cols="30" rows="10">{{ $lesson->content }}</textarea>
                            </div>
                        </div>
                    </div>


                    <button class="btn btn-primary" type="submit">save</button>

                </form>


            </div>
        </div>
    </div>
@endsection