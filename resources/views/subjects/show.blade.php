@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            {{$subject->name}}

            <table class="table table-striped table-bordered">
                <tr>
                    <th></th>
                </tr>
                @foreach($subject->lessons as $lesson)
                    <tr>
                        <td><a href="{{route('lessons.show',$lesson)}}">
                                {{$lesson->name}}
                            </a></td>
                    </tr>
                    @endforeach
            </table>
        </div>
    </div>
@endsection