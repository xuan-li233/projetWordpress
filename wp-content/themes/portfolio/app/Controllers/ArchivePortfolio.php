<?php

namespace App\Controllers;

use Sober\Controller\Controller;


class ArchivePortfolio extends Controller{
    protected $acf = true;

    public function allPost(){

        $args = array(
            'numberposts'	=> -1,
            'post_type'		=> 'portfolio'
        );

        $custom_posts = get_posts( $args );
        $result = array_map(function ($p) use ($custom_posts){

            $p->link = get_permalink( $p->ID);
            $p->title = get_field('title',$p);
            $p->author = get_field('author',$p);
            $p->image = get_field('image',$p);
            return $p;


        },$custom_posts);
        return $result;

    }

}
