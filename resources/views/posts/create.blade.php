@extends('layouts.app')

@section('content')
<div class="card-header">Board</div>
<div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

            <div class="card">
              <div class="card-body">
              <form>
                <div class="form-group">
                  <label for="exampleInputEmail1">title</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="title">
                </div>
                
                
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
              </div>
            </div>
    </div>
@endsection