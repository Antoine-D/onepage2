<?php
/**
 * Created by PhpStorm.
 * User: antoine
 * Date: 25/03/2018
 * Time: 14:09
 */

class HomeController {


    public function getHome(){

      $user = new User();
      $v = new Views();
      $v->assign("current", 'home');

      if( isset( $_GET['form'] ) && $_GET['form'] == 'signin' ){
        $form = $user->FormSignIn();
        $v->assign( "formUsed", 'form');
      }
      else{
        $form = $user->LoginForm();
          $v->assign( "formUsed", 'login');
      }

        $v->assign("config", $form );
    }
}
