@extends ('layouts.main')

@section('content')

    <div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-th"></i> {{ $centre->name }}</h2>

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
                        <div class="col-md-6">{{ HTML::image( URL( $centre->image )) }}</div>
                        <div class="col-md-6">{{ $centre->small_desc }}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">{{ $centre->long_desc }}</div>
                    </div>

                    <table class="table table-bordered table-striped responsive">
                        <tbody>
                        <tr>
                            <td><h4>Total Nos of Stalls</h4></td>
                            <td>{{ $centre->total_nos_stalls }}</td>
                        </tr>
                        <tr>
                            <td><h4>Total Cooked Foods Stalls</h4></td>
                            <td>
                                {{ $centre->total_cooked_food_stalls }}
                            </td>
                        </tr>
                        <tr>
                            <td><h4>Total Occupied Food Stalls</h4></td>
                            <td>{{ $centre->total_occupied_food_stalls }}</td>
                        </tr>
                        <tr>
                            <td><h4>Unique Attractions</h4></td>
                            <td>{{ $centre->unique_qualities }}</td>
                        </tr>
                        <tr>
                            <td><h4>Location</h4></td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--/span-->
    </div><!--/row-->

@stop