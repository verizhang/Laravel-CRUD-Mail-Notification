@extends('layouts.app')

@section('content')
    <div class="container shadow-sm p-3 rounded-lg">
        <div class="row">
            <div class="col-12">
                <div class="display-3">{{$project->title}}</div>
            </div>

            <div class="col-12">
                <div class="text-muted">{{$project->description}}</div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-6">
                <form action="{{route('project.edit',$project->id)}}" method="get">
                    <button type="submit" class="btn btn-primary w-100">Edit</button>
                </form>
            </div>
            
            <div class="col-6">
                <form action="{{route   ('project.destroy',$project->id)}}" method="post">
                @csrf
                @method('delete')
                    <button type="submit" class="btn btn-danger w-100">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection