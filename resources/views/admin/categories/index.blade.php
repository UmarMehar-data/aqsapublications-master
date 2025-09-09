@extends("layouts.master")
@section('title','All Categories')

@section("content")

    <div class="ms-content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb pl-0">
                      <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
                      <li class="breadcrumb-item"><a href="#">Categories</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Categories List</li>
                    </ol>
                  </nav>
                  <div class="ms-panel">
                      <div class="ms-panel-header d-flex justify-content-between">
                          <h4>All Categories</h4>
                          <button class="btn btn-primary btn-sm" id="openCreateModalBtn">Add New</button>
                      </div><br>
                      <div class="ms-panel-body">
                          <div class="table-responsive">
                             <div class="row">
                              <div class="col-md-12">


                                  @include('flashmessages')
                                  <table id="categoryTble" class="table table-striped dt-responsive table-bordered border-collapse" style="width:100%">
                                      <thead>
                                          <tr>
                                              <th>Id</th>
                                              <th>Name</th>
                                              <th>Parent Name </th>
                                              <th>Opertions</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                      </tbody>
                                  </table>
                              </div>
                             </div>
                          </div>
                      </div>
                  </div>
            </div>

        </div>
    </div>




@include('admin.categories.modals')
@include('admin.categories.js.index')
@endsection



