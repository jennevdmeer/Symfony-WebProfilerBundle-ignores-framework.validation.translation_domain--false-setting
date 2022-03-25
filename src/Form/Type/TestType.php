<?php

namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\NotBlank;

class TestType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->add('test', TextType::class, [
            'required' => false,
            'label' => false,
            'constraints' => [
                new NotBlank(['message' => 'this.is.bad']),
            ]
        ]);
    }
}
