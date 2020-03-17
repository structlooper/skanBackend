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
              <div class="section-body">
                  <div class="row">
                      <div class="col-sm-2"></div>
                      <div class="col-sm-6">
                          <h1 class="text-center">Question Management</h1>
                        </div>
                        <div class="col-sm">
                            <a href="#" class="btn btn-lg btn-primary"  data-toggle="modal" data-target="#exampleModal"> <i data-feather="plus-circle"></i> Add Category</a><br>
                            <input id="myInput" type="text" class="my-2" placeholder="Search..">
                        </div>
                        <br><br>
                  </div>
                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm">
                        <div class="card">
                            @if ($errors->any())
                            <div class="alert alert-danger">
                              <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                              </ul>
                            </div>
                            @endif
                            @if (session('status'))
                            <div class="alert alert-success alert-dismissible" role="alert">
                              {{session('status')}}
                            </div>
                            @endif
                            @if (session('error'))
                            <div class="alert alert-danger alert-dismissible" role="alert">
                              {{session('error')}}
                            </div>
                            @endif
                            <table class="table">
                                <thead>
                              <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Name</th>
                                  <th scope="col">Question Category</th>
                                  <th scope="col">Time</th>
                                  <th scope="col">Add Question</th>
                                  <th scope="col">View Questions</th>
                                  <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody id="myTable">
                                @foreach ($datas as $key => $item)
                                  
                                      
                                  <tr>
                                      <th scope="row"> {{ $key+1 }} </th>
                                      <td>{{ $item->questionName }} </td>
                                      <td> {{ $item->category }} </td>
                                      <td>{{ $item->timeDuration }} </td>
                                      <td><a href="# {{ $item->id}}" class="btn btn-success"><i data-feather="file-plus"> </i>Add</a></td>
                                                  
                                              
                                      <td class=""><a href="# {{ $item->id}}" class="btn btn-warning"><i data-feather="eye"></i>View</a></td>

                                      
                                      <td>
                                          <div class="row">
                                              <div class="col-sm-4">
                                                  <a href="updateMcqsCategory/{{ $item->id}}" class="btn btn-primary updateData" ><i data-feather="edit"></i></a> 
                                                </div>
                                                <div class="col-sm-4">
                                                  <form action="deleteMcqsCategory/{{ $item->id}}" method='post'>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"><i data-feather="trash-2"></i></button>
                                                    
                                                  </form>
                                                </div>
                                            </div>
                                        </td>
                                        
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-sm-2"></div>
                </div>
              </div>
            </section>
        </div>
    </div>
</div>

@include('admin.modals.Mcqs.addCategoryModal')
@endsection

@section('adminJsFile')
<script>
    $(document).ready(function(){
      $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });

    $(function () {
        setTimeout(function () {
           if ($(".alert").is(":visible")){
               $(".alert").fadeOut("fast");
                            }
                        }, 2000)

                  });



    
       
    </script>
@endsection