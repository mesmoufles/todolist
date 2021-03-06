<?php

namespace AppBundle\Form;

use AppBundle\Entity\User;
use AppBundle\Entity\Criticity;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;



class ToDoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder->add('description')->add('user', EntityType::class, array(
            'choice_label' => function ($user) {
                return $user->getFirstName() . ' ' . $user->getLastName();
            },
            'class' => 'AppBundle:User',
            'query_builder' => function (EntityRepository $er) {
                return $er->createQueryBuilder('c')
                    ->orderBy('c.id', 'ASC');
            },
        ))->add('criticity', EntityType::class, array(
            'choice_label' => function ($criticity) {
                return $criticity->getLevel();
            },
            'class' => 'AppBundle:Criticity',
            'query_builder' => function (EntityRepository $er) {
                return $er->createQueryBuilder('c')
                    ->orderBy('c.id', 'ASC');
            },
        ));
    }


    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\ToDo'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_todo';
    }


}
