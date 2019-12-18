<?php

namespace omny\yii2\city\component\actions;

use omny\yii2\city\component\components\CityComponent;

/**
 * Class ChoseCityAction
 * @package omny\yii2\city\component\actions
 */
class ChoseCityAction extends AbstractAction
{

    public function run($id)
    {
        $this->setCityCookie($id);
        $defaultReturnUrl = CityComponent::$returnUrl;

        return $this->controller->goBack($defaultReturnUrl);
    }

}
