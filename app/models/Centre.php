<?php

class Centre extends Eloquent {

    protected $fillable = array(
        'name', 'small_desc', 'long_desc', 'image',
        'total_nos_stalls', 'total_cooked_food_stalls', 'total_occupied_food_stalls',
        'unique_qualities','longitude', 'latitude', 'status'
    );

    public $rules = array(
        'name' => 'required|alpha_spaces|min:5',
        'small_desc' => 'required|min:20',
        'long_desc' => 'required|min:100',
        'image' => 'required|image|mimes:jpeg,jpg,png',
        'total_nos_stalls' => 'integer',
        'total_cooked_food_stalls' => 'integer',
        'total_occupied_food_stalls' => 'integer'
     );
}
