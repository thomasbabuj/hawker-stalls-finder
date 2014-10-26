@extends ('layouts.main')

@section('content')

    <div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-th"></i>{{ $centre->name }}</h2>

                    <div class="box-icon">
                        <a href="#" class="btn btn-setting btn-round btn-default"><i
                                class="glyphicon glyphicon-cog"></i></a>
                        <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                class="glyphicon glyphicon-chevron-up"></i></a>
                        <a href="#" class="btn btn-close btn-round btn-default"><i
                                class="glyphicon glyphicon-remove"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <div class="row">
                        <div class="col-md-4"><h6>column 4</h6></div>
                        <div class="col-md-4"><h6>column 4</h6></div>
                        <div class="col-md-4"><h6>column 4</h6></div>
                    </div>
                </div>
            </div>
        </div>
        <!--/span-->
    </div><!--/row-->
@stop