<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class SinglePortfolio extends Controller{
    protected $acf = true;

    public function myPost()
    {
        if (get_field('title')){
            $title = get_field('title');
        }
        if (get_field('date')){
            $date = get_field('date');
        }
        if (get_field('description')){
            $description = get_field('description');
        }
        if (get_field('author')){
            $author = get_field('author');
        }
        if (get_field('image')){
            $image = get_field('image');
        }
        if (get_field('url')){
            $url = get_field('url');
        }
    }

}
