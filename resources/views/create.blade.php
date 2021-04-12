@extends('layouts.app')

@section('content')
    @if($errors->any())
        <ul>
        @foreach($errors->all() as $err)
            <li>{{$err}}</li>
        @endforeach
        </ul>
    @endif
    <form action="{{route('project.store')}}" method="post">
    @csrf
        <div class="container shadow rounded-lg p-4">
            <div class="row">
                <div class="col-12">
                    <div class="display-4">Add Project</div>
                </div>
                <div class="col-12">
                    <p>
                        <label>Title</label>
                        <input type="text" class="form-control" name="title" require>
                    </p>
                </div>

                <div class="col-12">
                    <p>
                        <label>Description</label>
                        <textarea name="description" class="form-control" id="description" cols="30" rows="10" require></textarea>
                    </p>
                </div>

                <div class="col-12">
                    <p>
                        <button type="submit" class="btn btn-success w-100">Save</button>
                    </p>
                </div>
            </div>
        </div>
    </form>
@endsection