
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
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <input type="file" id="exampleInputFile">

                            <p class="help-block">Example block-level help text here.</p>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Check me out
                            </label>
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>

                </div>
            </div>
        </div>
        <!--/span-->

    </div><!--/row-->
@stop