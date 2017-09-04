<?php
interface IUser
{
    function getName();
}
/*
 *  创建一个工厂(中间类)
 *  具体的实现了类（这个类就好比我们在整个系统中各个功能的类）
 * */
class User implements IUser
{
    public function __construct( $id ) { }
    public function getName()
    {
        return "Jack";
    }
}
/*
 * 
 * 我们要调用接口，就直接使用通过该工厂来实现调用类
 * */
class UserFactory
{
    public static function Create( $id )
    {
        return new User( $id );
    }
}
$uo = UserFactory::Create( 1 );
echo( $uo->getName()."\n" );