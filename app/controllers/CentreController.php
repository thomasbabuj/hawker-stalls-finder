<?php

class CentreController extends BaseController {

    public function __construct()
    {
        $this->beforeFilter('csrf', array('on' => 'post'));
    }

    public function getIndex()
    {
        return View::make('centres.index')
                ->with('centres', Centre::all());
    }

    public function getCreate()
    {

        return View::make('centres.create');

    }

    public function postCreate()
    {
        $validator = Validator::make(Input::all(), Centre::$rules);

        if ( $validator->passes() ) {
            $centre = new Centre();
            $centre->name = Input::get('name');
            $centre->small_desc = Input::get('small_desc');
            $centre->long_desc = Input::get('long_desc');

            $image = Input::file('image');
            $filename = time()."-".$image->getClientOriginalExtension();
            $path = public_path('img/uploads/hawker_centres/'.$filename);
            Image::make($image->getRealPath())->resize(468, 249)->save($path);
            $centre->image = 'img/uploads/hawker_centres/'.$filename;

            $centre->total_nos_stalls = Input::get('total_nos_stalls');
            $centre->total_cooked_food_stalls = Input::get('total_cooked_food_stalls');
            $centre->total_occupied_food_stalls = Input::get('total_occupied_food_stalls');
            $centre->unique_qualities = Input::get('unique_qualities');
            $centre->longitude = Input::get('longitude');
            $centre->latitude = Input::get('latitude');
            $centre->status = Input::get('status');

            $centre->save();

            return Redirect::to('centres')
                    ->with('message', 'Centre Added');
        }

        return Redirect::to('centres/create')
                    ->with('message', 'Something went wrong')
                    ->withErrors($validator)
                    ->withInput();
    }

    public function postDelete()
    {
        $centre = Centre::find(Input::get('id'));

        if ($centre)
        {
            $centre->delete();
            return Redirec::to('centres/index')
                    ->with('message', 'Centre Deleted');
        }

        return Redirect::to('centres/index')
                ->with('message', 'Something went wrong. Please try again!');
    }

    public function getShow($id)
    {
        $centre = Centre::find($id);

        return View::make('centres.show')
                        ->with('centre', $centre);
    }

    public function getEdit($id)
    {
        $centre = Centre::find($id);

        return View::make('centres.edit')
            ->with('centre', $centre);
    }

    public function postUpdate($id)
    {
        $post_values = Input::all();
        $no_upload = FALSE;
        print_r ($post_values);

        $centre = Centre::find($id);

        if ( empty( $post_values['image'] ) )
        {
            $post_values['image'] = $centre->image;
            $no_upload = TRUE;
        }

        $validator = Validator::make($post_values, Centre::$rules);


        if ( $validator->passes() ) {
            $centre = new Centre();
            $centre->name = Input::get('name');
            $centre->small_desc = Input::get('small_desc');
            $centre->long_desc = Input::get('long_desc');

            if( !$no_upload) {

                $image = Input::file('image');
                $filename = time()."-".$image->getClientOriginalExtension();
                $path = public_path('img/uploads/hawker_centres/'.$filename);
                Image::make($image->getRealPath())->resize(468, 249)->save($path);
                $centre->image = 'img/uploads/hawker_centres/'.$filename;
            }


            $centre->total_nos_stalls = Input::get('total_nos_stalls');
            $centre->total_cooked_food_stalls = Input::get('total_cooked_food_stalls');
            $centre->total_occupied_food_stalls = Input::get('total_occupied_food_stalls');
            $centre->unique_qualities = Input::get('unique_qualities');
            $centre->longitude = Input::get('longitude');
            $centre->latitude = Input::get('latitude');
            $centre->status = Input::get('status');

            $centre->save();

            return Redirect::to('centres')
                ->with('message', 'Centre Updated');
        }

        return Redirect::to('centres/edit/'.$id)
            ->with('message', 'Something went wrong')
            ->withErrors($validator)
            ->withInput();
    }
}