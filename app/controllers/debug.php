<?php

/**
 * 
 */
class debug extends Controller
{
    public function index()
    {
        echo var_dump($_POST);
    }
}
