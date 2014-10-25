<?php

class CentreController extends BaseController {

    public function __construct()
    {
        $this->beforeFilter('csrf', array('on' => 'post'));
    }

    public function getIndex()
    {
        return View::make('centres.index')
                ->with('centers', Centre::all());
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
            $path = public_path('img/hawker_centers/'.$filename);
            Image::make($image->getRealPath())->resize(468, 249)->save($path);
            $centre->image = 'img/hawker_centers/'.$filename;

            $centre->total_nos_stalls = Input::get('total_nos_stalls');
            $centre->total_cooked_food_stalls = Input::get('total_cooked_food_stalls');
            $centre->total_occupied_food_stalls = Input::get('total_occupied_food_stalls');
            $centre->unique_qualities = Input::get('unique_qualities');
            $centre->longitude = Input::get('longitude');
            $centre->latitude = Input::get('latitude');

            $centre->save();

            return Redirect::to('centres/index')
                    ->with('message', 'Centre Added');
        }

        return Redirect::to('centres/index')
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
}