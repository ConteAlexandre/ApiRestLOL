<?php


namespace App\Admin;


use App\Entity\Users;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

/**
 * Class UsersAdmin
 * @package App\Admin
 *
 * @author CONTE Alexandre <pro.alexandre.conte@gmail.com>
 */
class UsersAdmin extends AbstractAdmin
{
    public function toString($object)
    {
        return $object instanceof Users
            ? $object->getUsername()
            : 'Users : USERNAME';
    }

    protected function configureFormFields(FormMapper $form)
    {
        $form
            ->add('username', TextType::class)
            ->add('email', EmailType::class)
            ->add('password', TextType::class)
        ;
    }

    protected function configureListFields(ListMapper $list)
    {
        $list
            ->addIdentifier('username')
            ->add('email')
            ->add('createdAt')
            ->add('createdBy')
            ->add('_action', null, [
                'actions' => [
                    'edit' => [],
                    'delete' => [],
                ]
            ])
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $filter)
    {
        $filter
            ->add('username')
            ->add('email')
        ;
    }

    protected function configureShowFields(ShowMapper $show)
    {
        $show
            ->add('username')
            ->add('email')
            ->add('createdAt')
            ->add('updatedAt')
            ->add('createdBy')
            ->add('updatedBy')
        ;
    }
}