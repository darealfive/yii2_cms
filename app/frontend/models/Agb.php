<?php

namespace frontend\models;

class Agb extends \common\models\Agb
{
    public function __toString()
    {
        return $this->text;
    }

}