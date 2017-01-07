<?php
/**
 * Created by PhpStorm.
 * User: sydney_manjaro
 * Date: 07/01/17
 * Time: 21:03
 */

namespace RASP\RaspBundle\Form\User;

//use Doctrine\DBAL\Types\TextType;
use Doctrine\ORM\Query\Expr\Base;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Security\Core\Validator\Constraints\UserPassword;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;

use RASP\RaspBundle\Entity\User;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormEvents;

use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;


use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Security\Core\Validator\Constraint\UserPassword as OldUserPassword;
use FOS\UserBundle\Form\Type\ChangePasswordFormType as BaseType;

/*
class UserPasswdType extends BaseType{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options); // TODO: Change the autogenerated stub
    }
}
*/

class UserPasswdType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('password', RepeatedType::class, array(
                'type' => PasswordType::class,
                'first_options' => array('label' => 'Mot de passe'),
                'second_options' => array('label' => 'Vérification'),
                'required' => true))
            ->add('save', SubmitType::class)
        ;
    }

}
