<?php

/**
 * @see       https://github.com/laminas/laminas-form for the canonical source repository
 * @copyright https://github.com/laminas/laminas-form/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-form/blob/master/LICENSE.md New BSD License
 */

namespace LaminasTest\Form\TestAsset;

use Laminas\Form\Fieldset;
use Laminas\InputFilter\InputFilterProviderInterface;

class FieldsetWithInputFilter extends Fieldset implements InputFilterProviderInterface
{
    public function getInputFilterSpecification()
    {
        return [
            'foo' => [
                'required' => true,
                'filters' => [
                    ['name' => 'Laminas\Filter\StringTrim'],
                ],
                'validators' => [
                    ['name' => 'Laminas\Validator\NotEmpty'],
                    ['name' => 'Laminas\I18n\Validator\Alnum'],
                ],
            ],
            'bar' => [
                'required' => false,
                'filters' => [
                    ['name' => 'Laminas\Filter\StringTrim'],
                ],
            ],
        ];
    }
}
