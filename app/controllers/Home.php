<?php

/**
 * Home controller
 *
 * PHP version 7.0
 */
class Home
{

    /**
     * Show the index page
     *
     * @return void
     */
    public function index()
    {
       echo App::render('home/index');
    }
}
