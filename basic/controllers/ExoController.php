<?php

namespace app\controllers;

use yii\web\Controller;
// use yii\rest\ActiveController;
// use linslin\yii2\curl;

class ExoController extends Controller
{
    public function actionFormulario()
    {
        $cadastroModel = new CadastroModel;

        return $this->render('formulario', [
            'model' => $cadastroModel
        ]);
    }
}