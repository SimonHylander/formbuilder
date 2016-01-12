<?php

namespace Shy\FormBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class AppForm extends AbstractType {
    protected $components;

    public function __construct($components){
        $this->components = $components;
    }

    public function buildForm(FormBuilderInterface $builder, array $options){
        $theme = 'default';
        if($theme == 'default') {
            $form_class = 'form-default';
        }else if($theme == 'responsive') {
            $form_class = 'form-bootstrap';
        }

        $components = $this->components;
        foreach($components as $component) {
            $type = $component['type'];

            $formArr = array();
            if($type == 'submit' || $type == 'button'){
                $formArr['attr'] = array(
                    'class' => 'form-default-btn'
                );
            }else {
                $formArr['attr'] = array(
                    'class' => 'form-default'
                );
            }

            if($type == 'choice') {
                $val = explode(',', $component['value']);
                $formArr['choices'] = array_combine($val, $val);
//                $formArr['empty_value'] = 'Choose a value';
            }

            if(isset($component['label'])) {
                $label = $component['label'];
                $name = $label.'_'.$type;
                $formArr['label'] = $label;
//
                if($type != 'submit' && $type != 'button') {
                    $formArr['label_attr'] = array(
                        'class' => 'form-default-label'
                    );
                }
            }else {
                $name = $type;
                $formArr['label'] = false;
            }

            $builder->add($name, $type, $formArr);
        }

        $builder->add('hidden', 'hidden', array(
            'data' => ''
        ));

        /*$builder->add('email', 'text', array(
            'label' => 'Email',
            'label_attr' => array(
                'class' => 'form-default-label'
            ),
            'attr' => array(
                'class' => 'form-default'
            )
        ));

        $builder->add('password', 'password', array(
            'label' => 'Password',
            'label_attr' => array(
                'class' => 'form-default-label'
            ),
            'attr' => array(
                'class' => 'form-default'
            )
        ));

        $builder->add('textarea', 'textarea', array(
            'label' => 'Provide some text',
            'label_attr' => array(
                'class' => 'form-default-label'
            ),
            'attr' => array(
                'class' => 'form-default'
            )
        ));

        $builder->add('dropdown', 'choice', array(
            'multiple' => false,
            'choices' => array(
                '1' => 'option1',
                '2' => 'option2',
                '3' => 'option3'
            ),
            'label' => false,
            'empty_value' => 'Choose a value',
            'attr' => array(
                'class' => 'form-default'
            )
        ));

        $builder->add('submit', 'submit', array(
            'label' => 'Value',
            'attr' => array(
                'class' => 'form-default-btn',
            )
        ));*/
    }

    public function getName() {
        return '_form';
    }
}