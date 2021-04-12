@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="{{route('project.create')}}" class="btn btn-success">+ Add Project</a>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-12">
                <table width="100%" border="1" class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($project as $value)
                        <tr>
                            <td>{{$value->id}}</td>
                            <td>{{$value->title}}</td>
                            <td>{{$value->description}}</td>
                            <td><a href="{{route('project.show',$value->id)}}" class="btn btn-outline-warning">Detail</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
@endsection
