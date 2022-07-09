@extends('Backend.Admin.AdminHome')
@section('admin-content')
<div class="row">
    <div class="col-md-12 d-flex">

        <div class="card card-table flex-fill">
            <div class="card-header">
                <h4 class="card-title float-start">Destination</h4>



                <div class="table-search float-end">
                    <input type="text" class="form-control" placeholder="Search">
                    <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                </div>

                
            </div>
            <div class="card-body" style="box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;">
                <div class="table-responsive no-radius">
                    <table class="table table-hover table-center">
                        <thead>
                            <tr>
                                
                                <th class="text-center">Destination</th>
                                <th></th>
                                <th></th>
                               
                                <th class="text-end">
                                    <span>
                                        <a href="">
                                         <button type="button" style="box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;" class="btn btn-success">Add</button>
                                        </a>
                                     </span>
                                </th>
                                <th class="">
                                    <span>
                                        <a href="">
                                         <button type="button" style="box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px; color:white" class="btn btn-info">Add sub</button>
                                        </a>
                                     </span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <tr>

                                <td class="text-nowrap">Dummy Name</td>
                                <td class="text-center">22-02-2002</td>
                                <td class="text-center">
                                    02-02-2002
                                </td>
                                <td class="text-center">
                                    7000 AMD
                                </td>
                                <td class="text-end">
                                    <div class="font-weight-600 text-danger">
                                        <span>
                                            <a href="">
                                             <button type="button" style="box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;" class="btn btn-dark">Update</button>
                                            </a>
                                         </span>
                                         <span>
                                            <a href="">
                                             <button type="button" style="box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px; color:white" class="btn btn-danger">Delete</button>
                                            </a>
                                         </span>
                                        
                                    </div>
                                </td>
                            </tr>
                           
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection