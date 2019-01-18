<?php

class ImageController
{
    protected $imageMapper;

    public function __construct()
    {
        $this->imageMapper = new ImageMapper(App::get('database'));
    }
}