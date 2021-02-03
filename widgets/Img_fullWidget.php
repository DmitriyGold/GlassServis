<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\widgets;

use yii\base\Widget;

/**
 * Description of mainCardWidget
 *
 * @author Дмитрий
 */
class Img_fullWidget extends Widget {

    public $imagePath; // путь к картинке 

    public function init() {
        parent::init();
    }

    public function run() {

        return $this->render('img_full', [
                    'imagePath' => $this->imagePath
        ]);
    }

}
