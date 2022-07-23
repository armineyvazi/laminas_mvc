<?php 

declare(strict_types=1);

namespace User\From\Auth;
use Laminas\Form\Form;
use Laminas\Form\Element;

class CreateForm extends Form{

    public function __construct()
    {
        parent::__construct('new_account');
        $this->setAttribute('method','post');

        #user input field
        $this->add([
            'type'=>Element\Text::class,
            'name'=>'username',
            'options'=>[
                'label'=>'Username'
            ],
            'attributes'=>[
                'required'=>true,
                'size'=>40,
                'maxlength'=>25,
                'pattern'=>'^[a-zA-Z0-9]+$',#enforcing what type of data we accept
                'data-toggle'=>'tooltip',
                'class'=>'form-control',#styling the text field
                'title'=>'Username must consict of alphanumeric Charectors only',
                'placeholder'=>'Enter Your Usename',
                
            ]
        ]);
        

    }





}
