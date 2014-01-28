<?php

namespace SdA\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="codecraft_user")
 */
class User extends BaseUser
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;

	/**
	 * @ORM\Column(type="string", length=255)
	 */
	protected $firstName;

	/**
	 * @ORM\Column(type="string", length=255)
	 */
	protected $lastName;

	/**
	 * @ORM\Column(type="integer")
	 */
	protected $age;

	/**
	 * @ORM\Column(type="string", length=500)
	 */
	protected $experience;

	/**
	 * @ORM\Column(type="string", length=500)
	 */
	protected $status;

	/**
     * @ORM\ManyToMany(targetEntity="SdA\UserBundle\Entity\Language", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $languages;


	public function __construct()
	{
		parent::__construct();
		$this->languages = new \Doctrine\Common\Collections\ArrayCollection();
	}

	public function __toString()
	{
		return $this->username;
	}
	 /**
     * Set id
     *
     * @param integer $id
     * @return User
     */
    public function setId($id)
    {
        $this->id = $id;
    
        return $this;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

	 /**
     * Set firstName
     *
     * @param string $firstName
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    
        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    
        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

     /**
     * Set age
     *
     * @param integer $age
     * @return User
     */
    public function setAge($age)
    {
        $this->age = $age;
    
        return $this;
    }

    /**
     * Get age
     *
     * @return integer 
     */
    public function getAge()
    {
        return $this->age;
    }


    /**
     * Set experience
     *
     * @param string $experience
     * @return User
     */
    public function setExperience($experience)
    {
        $this->experience = $experience;
    
        return $this;
    }

    /**
     * Get experience
     *
     * @return string 
     */
    public function getExperience()
    {
        return $this->experience;
    }


    /**
     * Set status
     *
     * @param string $status
     * @return User
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }


   /**
     * @param SdA\UserBundle\Entity\Language $language
     * @return Article
     */
    public function addLanguage(\SdA\UserBundle\Entity\Language $language)
    {
    	$this->languages[] = $language;
    	return $this;
    }
    
    /**
     * @param SdA\UserBundle\Entity\Language $language
     */
    public function removeLanguage(\SdA\UserBundle\Entity\Language $language)
    {
    	$this->languages->removeElement($language);
    }
    
    /**
     * @return Doctrine\Common\Collections\Collection
     */
    public function getLanguages()
    {
    	return $this->languages;
    }


}