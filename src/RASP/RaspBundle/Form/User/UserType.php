<?php
/**
 * Created by PhpStorm.
 * User: sydney_manjaro
 * Date: 07/01/17
 * Time: 14:08
 */


namespace RASP\RaspBundle\Form\User;

use Doctrine\DBAL\Types\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use RASP\RaspBundle\Entity\User;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormEvents;

use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('username')
            ->add('email')
            ->add('status', null, array('required' => true))
            ->add('rank', null, array('required' => true, 'label' => 'Garde'))
            /*->add('ufr', ChoiceType::class, array(
                'choices' => array(
                    'FST' => 0,
                    'ISIMA' => 1,
                    'ENSISISA' => 2
                ),
            ))
            */
            //->add('ufr', UfrType::class, array('by_reference' => true))
            ->add('ufr', null, array(
                    'class' => 'RASP\RaspBundle\Entity\Ufr',
                    'choices' => array("e" => 1)
            ))
            ->add('save', SubmitType::class)
        ;

    }
}
