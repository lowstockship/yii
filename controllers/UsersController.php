<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Users;

class UsersController extends Controller{
    public function actionIndex(){
        $info = Users::find()->all();
        return $this->render('index',['data'=>$info]);
    }
}