<?php
/**
 * Created by PhpStorm.
 * User: andy
 * Date: 2017/10/4
 * Time: 上午10:23
 */

namespace App\Contracts;


abstract class SettingsContract

{
    protected $isRefresh = false;

    abstract function all();


    function set( $key , $value ) {
        $this->isRefresh = true;
        //TODO broadcast the event .
    }

    function delete( $key ) {
        $this->isRefresh = true;
        //TODO broadcast the event .
    }



    public function needRefresh() {
        return $this->isRefresh;
    }

}