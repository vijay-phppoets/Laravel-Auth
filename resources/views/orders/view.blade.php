@extends('layouts.mainlayout')

@section('content')

<!-- Content Wrapper. Contains page content -->

<title>PHPPOESTS - Orders  - View</title>

<div class="main-content">

  <div class="page-content">
    <div class="container-fluid">
      <!-- start page title -->
      <div class="row">
          <div class="col-12">
              <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                  <h4 class="mb-sm-0">Orders</h4>

                  <div class="page-title-right">
                      <ol class="breadcrumb m-0">
                          <li class="breadcrumb-item"><a href="javascript: void(0);">Orders</a></li>
                          <li class="breadcrumb-item active">Orders</li>
                      </ol>
                  </div>

              </div>
              <div class="card">              

                <div class="card-body">
                    <div id="customerList">
                        <div class="row g-4 mb-3">
                            <div class="col-sm-auto">
                                <div>
                                    <!-- <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModal"><i class="ri-add-line align-bottom me-1"></i> Add</button> -->
                                    <button class="btn btn-soft-danger" onClick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="d-flex justify-content-sm-end">
                                    <div class="search-box ms-2">
                                        <input type="text" class="form-control search" placeholder="Search...">
                                        <i class="ri-search-line search-icon"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive table-card mt-3 mb-1">
                            <table class="table align-middle table-nowrap" id="customerTable">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col" style="width: 50px;">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                            </div>
                                        </th>                                      
                                        <th class="sort" data-sort="name">Name</th>
                                        <th class="sort" data-sort="designation">Designation</th>
                                        <th class="sort" data-sort="department">Department</th>
                                        <th class="sort" data-sort="email">Email</th>                                      
                                        <th class="sort" data-sort="phone">Contact No</th>
                                        <th class="sort" data-sort="status">Status</th>
                                        <th class="sort" data-sort="action">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="list form-check-all">
                                <?php $i=1; ?>
                                
                                    <tr>
                                        <th scope="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                            </div>
                                        </th>
                                        <td class="name">Vijay Lakshkar</td>
                                        <td class="designation">Software Developer</td>
                                        <td class="department1">Department</td>
                                        <td class="email">Email</td>
                                        <td class="phone">Phone Number</td>                                       
                                        <td class="status"><span class="badge badge-soft-success text-uppercase">Active</span></td>                                     
                                        <td>
                                            <div class="d-flex gap-2">
                                                <div class="edit">
                                                    <!-- <button class="btn btn-sm btn-success edit-item-btn" data-bs-toggle="modal" data-bs-target="#showModal">Edit</button> -->
                                                    <a href="#" class="btn btn-sm btn-success edit-item-btn"> Edit</a>
                                                </div>
                                                <div class="remove">
                                                <a data-attr="" class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal" id="delete-model">Remove</a>    
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                               
                                </tbody>
                            </table>
                            <div class="noresult" style="display: none">
                                <div class="text-center">
                                    <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px"></lord-icon>
                                    <h5 class="mt-2">Sorry! No Result Found</h5>
                                    <p class="text-muted mb-0">We've searched more than 150+ Orders We did not find any orders for you search.</p>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end">
                            <div class="pagination-wrap hstack gap-2">
                                <a class="page-item pagination-prev disabled" href="#">
                                    Previous
                                </a>
                                <ul class="pagination listjs-pagination mb-0"></ul>
                                <a class="page-item pagination-next" href="#">
                                    Next
                                </a>
                            </div>
                        </div>
                    </div>
                </div><!-- end card -->
            </div>
          </div>
      </div>
    </div>
  </div>
</div>    

 <!-- Modal -->
 <div class="modal fade zoomIn" id="deleteRecordModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btn-close"></button>
              </div>
              <div class="modal-body">
                  <div class="mt-2 text-center">
                      <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                      <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                          <h4>Are you Sure ?</h4>
                          <p class="text-muted mx-4 mb-0">Are you Sure You want to Remove this Record ?</p>
                      </div>
                  </div>
                  <form method="POST" class="needs-validation" action="{{ route('Users/delete') }}" novalidate>
                    @csrf
                    <input type="hidden" id="id" value="" name="id">
                  <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                      <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn w-sm btn-danger " id="delete-record">Yes, Delete It!</button>
                  </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
  <!--end modal -->

@endsection
