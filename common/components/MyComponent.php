<?php
namespace common\components;
use yii\base\Component;

class MyComponent extends Component {
	public $message = "Mundo";

    public function Hola() {
        return "Hola " . $this->message;
    }
}
?>