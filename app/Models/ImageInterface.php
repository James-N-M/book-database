<?php
/**
 * Created by PhpStorm.
 * User: jamesm
 * Date: 2019-01-17
 * Time: 8:03 PM
 */

interface ImageInterface
{
    public function setId($id);
    public function getId();

    public function setName($name);
    public function getName();

    public function setImage($image);
    public function getImage();
}