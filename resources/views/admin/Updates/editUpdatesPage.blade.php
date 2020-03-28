@extends('admin.layouts.sideBar')

@section('adminTitle')
    Edit Updates
@endsection

@section('adminSide')
<div class="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        <div class="main-content">
            <section class="section">
             <div class="row">
                 <div class="col-sm-3"></div>
                 <div class=" card col-sm ">
                    <h1 class="text-center">Latest Updates</h1>
                    <br>
              <form action="{{ url('updationUpdates') }}/{{ $data->id }}" method="POST">
                @csrf
                @method('POST')
              <div class="form-group">
                <label>Title</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                  </div>
                  <input type="text" class="form-control" value="{{ $data->title }} "  name="title">
                </div>
              </div>
              
              <div class="form-group">
                <label>Link</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                  </div>
                  <input type="text" class="form-control" value="{{ $data->link }} " name="link">
                </div>
              </div>

               <div class="form-group">
                <label>Description</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                  </div>
                    <textarea class="form-control" name="desc">{{ $data->desc }}</textarea>

                </div>
              </div>
              
              
              <button type="submit" class="btn btn-primary m-t-15 my-2 waves-effect">Submit</button>
            </form>
        </div>
        <div class="col-sm-3"></div>
        </div>
            </section>
        </div>
    </div>
</div>
@endsection