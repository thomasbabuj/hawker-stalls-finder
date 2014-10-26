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
                             <th>Name</th>
                             <th>Image</th>
                             <th>Status</th>
                             <th>Actions</th>
                         </tr>
                         </thead>
                         <tbody>

                         @foreach( $centres as $centre )
                         <tr>
                             <td>{{ $centre->name }}</td>
                             <td class="center">{{ HTML::image($centre->image, $centre->name, array('width' => '100', 'height' => '100')) }}</td>
                             <td class="center">
                                 <span class="label-warning label label-default">{{ $centre->status }}</span>
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
                         @endforeach
                         </tbody>
                     </table>
                 </div>
             </div>
         </div>
         <!--/span-->

     </div><!--/row-->

@stop()