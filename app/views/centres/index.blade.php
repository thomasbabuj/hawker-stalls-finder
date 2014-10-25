@extends ('layouts.main')


@section ('content')

     <div class="row">
         <div class="box col-md-12">
             <div class="box-inner">
                 <div class="box-header well" data-original-title="">
                     <h2><i class="glyphicon glyphicon-user"></i> Hawker Centers List</h2>

                     <div class="box-icon">
                         <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                 class="glyphicon glyphicon-chevron-up"></i></a>
                         <!--a href="#" class="btn btn-close btn-round btn-default"><i
                                 class="glyphicon glyphicon-remove"></i></a-->
                     </div>
                 </div>
                 <div class="box-content">
                     <table class="table table-striped table-bordered responsive">
                         <thead>
                         <tr>
                             <th>Username</th>
                             <th>Date registered</th>
                             <th>Role</th>
                             <th>Status</th>
                             <th>Actions</th>
                         </tr>
                         </thead>
                         <tbody>


                         <tr>
                             <td>Muhammad Usman</td>
                             <td class="center">2012/03/01</td>
                             <td class="center">Member</td>
                             <td class="center">
                                 <span class="label-warning label label-default">Pending</span>
                             </td>
                             <td class="center">
                                 <a class="btn btn-success" href="#">
                                     <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                                     View
                                 </a>
                                 <a class="btn btn-info" href="#">
                                     <i class="glyphicon glyphicon-edit icon-white"></i>
                                     Edit
                                 </a>
                                 <a class="btn btn-danger" href="#">
                                     <i class="glyphicon glyphicon-trash icon-white"></i>
                                     Delete
                                 </a>
                             </td>
                         </tr>
                         <tr>
                             <td>Abraham</td>
                             <td class="center">2012/03/01</td>
                             <td class="center">Member</td>
                             <td class="center">
                                 <span class="label-warning label label-default">Pending</span>
                             </td>
                             <td class="center">
                                 <a class="btn btn-success" href="#">
                                     <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                                     View
                                 </a>
                                 <a class="btn btn-info" href="#">
                                     <i class="glyphicon glyphicon-edit icon-white"></i>
                                     Edit
                                 </a>
                                 <a class="btn btn-danger" href="#">
                                     <i class="glyphicon glyphicon-trash icon-white"></i>
                                     Delete
                                 </a>
                             </td>
                         </tr>
                         <tr>
                             <td>Brown Blue</td>
                             <td class="center">2012/03/01</td>
                             <td class="center">Member</td>
                             <td class="center">
                                 <span class="label-warning label label-default">Pending</span>
                             </td>
                             <td class="center">
                                 <a class="btn btn-success" href="#">
                                     <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                                     View
                                 </a>
                                 <a class="btn btn-info" href="#">
                                     <i class="glyphicon glyphicon-edit icon-white"></i>
                                     Edit
                                 </a>
                                 <a class="btn btn-danger" href="#">
                                     <i class="glyphicon glyphicon-trash icon-white"></i>
                                     Delete
                                 </a>
                             </td>
                         </tr>
                         <tr>
                             <td>Worth Name</td>
                             <td class="center">2012/03/01</td>
                             <td class="center">Member</td>
                             <td class="center">
                                 <span class="label-warning label label-default">Pending</span>
                             </td>
                             <td class="center">
                                 <a class="btn btn-success" href="#">
                                     <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                                     View
                                 </a>
                                 <a class="btn btn-info" href="#">
                                     <i class="glyphicon glyphicon-edit icon-white"></i>
                                     Edit
                                 </a>
                                 <a class="btn btn-danger" href="#">
                                     <i class="glyphicon glyphicon-trash icon-white"></i>
                                     Delete
                                 </a>
                             </td>
                         </tr>
                         </tbody>
                     </table>
                 </div>
             </div>
         </div>
         <!--/span-->

     </div><!--/row-->

@stop()