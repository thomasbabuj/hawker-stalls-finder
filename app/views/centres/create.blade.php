
@extends('layouts.main')

@section('content')

    <!-- Form Validation Errors ->
    <!-- End Form Validation Errors -->

    <div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-edit"></i>Add Hawker Centre</h2>

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
                    {{ Form::open( array('url' => 'centres/create', 'role' => 'form')) }}
                        <div class="form-group">
                            {{ Form::label('name') }}
                            {{ Form::text('name', null, array('class' => 'form-control', 'placeholder' => 'Enter Name')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('small_desc') }}
                            {{ Form::text('small_desc', null, array('class' => 'form-control', 'placeholder' => 'Enter a short description')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('long_desc') }}
                            {{ Form::textarea('long_desc', null, array('class' => 'form-control', 'placeholder' => 'Enter a short description')) }}
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Choose an image</label>
                            {{ Form::label('image', 'Choose an image') }}
                            {{ Form::file('image') }}

                            <p class="help-block">Use JPG or PNG files.</p>
                        </div>
                        <div class="form-group">
                            {{ Form::label('total_nos_stalls') }}
                            {{ Form::text('total_nos_stalls', null, array('class' => 'form-control', 'placeholder' => 'Enter total nos of stalls')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('total_cooked_food_stalls') }}
                            {{ Form::text('total_cooked_food_stalls', null, array('class' => 'form-control', 'placeholder' => 'Enter total cooked food stalls')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('total_occupied_food_stalls') }}
                            {{ Form::text('total_occupied_food_stalls', null, array('class' => 'form-control', 'placeholder' => 'Enter total occupied food stalls')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('unique_qualities') }}
                            {{ Form::text('unique_qualities', null, array('class' => 'form-control', 'placeholder' => 'Enter some unique qualities')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('longitude') }}
                            {{ Form::textarea('longitude', null, array('class' => 'form-control', 'placeholder' => 'Enter longitude')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('latitude') }}
                            {{ Form::text('latitude', null, array('class' => 'form-control', 'placeholder' => 'Enter latitude')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('status') }}
                            {{ Form::select('status', array('1' => 'Active' , '0' => 'Not Active')) }}
                        </div>

                        {{ Form::submit('Create a center', array('class' => 'btn btn-default')) }}

                    {{ Form::close() }}

                </div>
            </div>
        </div>
        <!--/span-->

    </div><!--/row-->
@stop