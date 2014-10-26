
@extends('layouts.main')

@section('content')

 <div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-edit"></i>Edit - {{ $centre->name }}</h2>

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
                    {{ Form::open( array('url' => 'centres/update/'.$centre->id, 'role' => 'form', 'files' => TRUE)) }}
                        <div class="form-group @if ($errors->has('name')) has-error @endif" >
                            {{ Form::label('name') }}
                            {{ Form::text('name', $centre->name , array('class' => 'form-control', 'placeholder' => 'Enter Name')) }}
                            @if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif
                        </div>
                        <div class="form-group @if ($errors->has('small_desc')) has-error @endif">
                            {{ Form::label('small_desc') }}
                            {{ Form::text('small_desc', $centre->small_desc, array('class' => 'form-control', 'placeholder' => 'Enter a short description')) }}
                            @if ($errors->has('small_desc')) <p class="help-block">{{ $errors->first('small_desc') }}</p> @endif
                        </div>
                        <div class="form-group @if ($errors->has('long_desc')) has-error @endif">
                            {{ Form::label('long_desc') }}
                            {{ Form::textarea('long_desc', $centre->long_desc, array('class' => 'form-control', 'placeholder' => 'Enter a short description')) }}
                            @if ($errors->has('long_desc')) <p class="help-block">{{ $errors->first('long_desc') }}</p> @endif
                        </div>
                        <div class="form-group @if ($errors->has('image')) has-error @endif">
                            {{ Form::label('image', 'Choose an image') }}
                            {{ Form::file('image') }}
                            @if ($errors->has('image')) <p class="help-block">{{ $errors->first('image') }}</p> @endif
                        </div>
                        <div class="form-group">
                            {{ Form::label('total_nos_stalls') }}
                            {{ Form::text('total_nos_stalls', $centre->total_nos_stalls, array('class' => 'form-control', 'placeholder' => 'Enter total nos of stalls')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('total_cooked_food_stalls') }}
                            {{ Form::text('total_cooked_food_stalls', $centre->total_cooked_food_stalls, array('class' => 'form-control', 'placeholder' => 'Enter total cooked food stalls')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('total_occupied_food_stalls') }}
                            {{ Form::text('total_occupied_food_stalls', $centre->total_occupied_food_stalls, array('class' => 'form-control', 'placeholder' => 'Enter total occupied food stalls')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('unique_qualities') }}
                            {{ Form::textarea('unique_qualities', $centre->unique_qualities, array('class' => 'form-control', 'placeholder' => 'Enter some unique qualities')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('longitude') }}
                            {{ Form::text('longitude', $centre->longitude, array('class' => 'form-control', 'placeholder' => 'Enter longitude')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('latitude') }}
                            {{ Form::text('latitude', $centre->latitude, array('class' => 'form-control', 'placeholder' => 'Enter latitude')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('status') }}
                            {{ Form::select('status', array('1' => 'Active' , '0' => 'Not Active'), $centre->status) }}
                        </div>

                        {{ Form::submit('Save', array('class' => 'btn btn-primary btn-lg')) }}

                    {{ Form::close() }}

                </div>
            </div>
        </div>
        <!--/span-->

    </div><!--/row-->

@stop()