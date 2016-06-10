<?php
namespace common\components;
use yii\base\Component;

class MyComponent extends Component {
	public $message = "";
	 /**
     * Evento que se ejecutará cuando se requiera
    */
    const EVENT_BEFORE = 'before';
    /**
     * Evento que se ejecutará cuando se requiera
    */
    const EVENT_AFTER = 'after';

    public function init()
    {
 		parent::init();
 		$this->on(self::EVENT_BEFORE, [$this, 'beforeMensaje']);
 		if(empty($this->message)) {
			$this->message = '¡¡¡Hola Mundo!!!';
 		}
 	}

    public function Hola() {
    	return $this->message;
    }

    public function beforeMensaje()
    {
    	echo "'\'\'\'\'\'\'\: Hola Mundo :///////";
    }
}
?>