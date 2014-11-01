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
                                 <a class="btn btn-success" href="{{ url('centres/show/'.$centre->id) }}">
                                     <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                                     View
                                 </a>
                                 <a class="btn btn-info" href="{{ url('centres/edit/'.$centre->id ) }}">
                                     <i class="glyphicon glyphicon-edit icon-white"></i>
                                     Edit
                                 </a>
                                 {{ Form::open( array('url' => 'centres/delete/', 'id' => "submit-form") ) }}
                                 {{ Form::hidden('id', $centre->id) }}
                                 <a class="btn btn-danger btn-info btn-setting" href="#">
                                     <i class="glyphicon glyphicon-trash icon-white"></i>
                                     Delete
                                 </a>
                                 {{ Form::close() }}
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

    <!-- Delete Confirmation dialog box -->
     <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
          aria-hidden="true">

         <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal">×</button>
                     <h3>Confirm Delete</h3>
                 </div>
                 <div class="modal-body">
                     <p>Kindly confirm the delete?</p>
                 </div>
                 <div class="modal-footer">
                     <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                     <a href="#" class="btn btn-primary" data-dismiss="modal" id="btn-remove-data">Delete</a>
                 </div>
             </div>
         </div>
     </div> <!-- End - Delete Confirmation dialog box -->

     <script>
        $(".btn-setting").click(function(e){
            e.preventDefault();
            $("#myModal").modal('show');
        });

        $("#btn-remove-data").click(function(e){
            e.preventDefault();
            $("#submit-form").submit();

        });
     </script>

@stop()