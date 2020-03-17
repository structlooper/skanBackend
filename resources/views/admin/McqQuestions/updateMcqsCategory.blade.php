@extends('admin.layouts.sideBar')

@section('adminTitle')
    MCQs Questions
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
                    <h1 class="text-center">Question Management</h1>
                    <br>
              <form action="addMcqsCategory/{{ $updateData->id }} " method="POST">
                @csrf
                @method('POST')
              <div class="form-group">
                <label>Quiz Name</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                  </div>
                  <input type="text" class="form-control" value="{{ $updateData->questionName }} " required  name="Qname">
                </div>
              </div>
              
              <div class="form-group">
                <label>Select Question Category</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                  </div>
                  <select class="form-control" required name="Qcategory" id="">
                      <option value=" " >Change Category</option>
                      @foreach ($categoryData as $item)
                      <option value="{{ $item->id }} ">{{ $item->category }} </option>
                      @endforeach
                  </select>
                </div>
              </div>
              
              
              <div class="form-group">
                <label>Time Slot</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                  </div>
                  <select name="QtimeSet"  class="form-control" id="">
                    <option @if ($updateData->timeDuration === '' ) value='no'  @else value='yes' @endif>@if ($updateData->timeDuration === '' ) No  @else Yes  @endif</option>
                    @if ($updateData->timeDuration === '' ) <option value="yes">Yes</option>  @else <option value="No">No</option> @endif  
                      
                      
                  </select>
                </div>
              </div>
              
              <div class="form-group">
                <label>Time in Min</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                  </div>
                  <input type="text" class="form-control" value="{{ $updateData->timeDuration }} " name="Qtime">
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