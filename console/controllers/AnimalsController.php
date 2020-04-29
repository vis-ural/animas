<?php

namespace console\controllers;

use backend\modules\animals\components\AnimalsHunt;
use backend\modules\animals\components\AnimalsSwim;
use backend\modules\animals\components\Dog;
use backend\modules\animals\components\Kat;
use Yii;
use yii\console\Controller;
use yii\helpers\Console;
use yii\helpers\Inflector;
use yii\console\ExitCode;
use Faker\Factory;
use common\models\Article;
use common\models\ArticleCategory;
use common\models\User;

/**
 * @author Eugene Terentev <eugene@terentev.net>
 */
class AnimalsController extends Controller
{

    public function actionTest()
    {
        $typeAnimals = 'backend\modules\animals\components\Dog';

        $animals = new $typeAnimals('Тоша');
        $btn = $animals->getButtons();

        $this->stdout(print_r($btn));





    }


}
