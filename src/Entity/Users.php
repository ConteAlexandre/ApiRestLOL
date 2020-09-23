<?php
/**
 * Created by PhpStorm
 * User: shadowluffy
 * Date: 9/23/20
 * Time: 11:08 AM
 */

namespace App\Entity;

use App\Repository\UsersRepository;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Blameable\Traits\BlameableEntity;
use Sonata\UserBundle\Entity\BaseUser;

/**
 * @ORM\Entity(repositoryClass=UsersRepository::class)
 *
 * @author CONTE Alexandre <pro.alexandre.conte@gmail.com>
 */
class Users extends BaseUser
{
    use BlameableEntity;

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;
}
