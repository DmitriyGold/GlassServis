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
class ImgWidget extends Widget {

    public $imagePath; // путь к картинке 

    public function init() {
        parent::init();
    }

    public function run() {

        return $this->render('img', [
                    'imagePath' => $this->imagePath
        ]);
    }

}
