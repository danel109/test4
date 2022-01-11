<?php


namespace app\controller;


class Test
{
//    public function index(){
//        return 'index';
//    }
    public function hello($value){
        return 'hello   == >  '. $value  ;
    }
    public function arrayout(){
        $data=['a'=>1,'b'=>2,'c'=>3 ];
        return dump($data);
    }
}