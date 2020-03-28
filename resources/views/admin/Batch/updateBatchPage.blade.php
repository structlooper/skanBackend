@extends('admin.layouts.sideBar')


@section('adminSide')
<div class="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        <div class="main-content">
            <section class="section">
             <div class="row">
                 <div class="col-sm-3"></div>
                 <div class=" card col-sm ">
                    <h1 class="text-center">Batch Management</h1>
                    <br>
              <form action="{{ url('updationBatch') }}/{{ $updateData->id }}" method="POST">
                @csrf
                @method('POST')
              <div class="form-group">
                <label>Batch Name</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                  </div>
                  <input type="text" class="form-control" value="{{ $updateData->batchName }}"   name="batchName">
                </div>
              </div>
              
              
              
              <button type="submit" class="btn btn-warning m-t-15 my-2 waves-effect">Update</button>
            </form>
        </div>
        <div class="col-sm-3"></div>
        </div>
            </section>
        </div>
    </div>
</div>
@endsection