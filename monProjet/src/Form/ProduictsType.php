<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('ProductName')
            ->add('SupplierId')
            ->add('CategoryId')
            ->add('QuantityPerUnit')
            ->add('UnitPrice')
            ->add('UnitsInStock')
            ->add('UnitsOnOrder')
            ->add('RedorderLevel')
            ->add('Discontinued')
            ->add('SupplierID')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Products::class,
        ]);
    }
}

