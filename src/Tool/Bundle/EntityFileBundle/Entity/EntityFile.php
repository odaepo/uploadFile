<?php

namespace Tool\Bundle\EntityFileBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EntityFile
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Tool\Bundle\EntityFileBundle\Entity\EntityFileRepository")
 */
class EntityFile
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nameFile", type="string", length=255)
     */
    private $nameFile;

    /**
     * @var string
     *
     * @ORM\Column(name="shortDescription", type="string", length=255)
     */
    private $shortDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updateAt", type="datetime")
     */
    private $updateAt;


    /**
     * @var boolean
     *
     * @ORM\Column(name="deleted", type="boolean")
     */
    private $deleted;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deletedAt", type="datetime")
     */
    private $deletedAt;

    /**
     * @var string
     *
     * @ORM\Column(name="uploadedFromUser", type="string", length=255)
     */
    private $uploadedFromUser;


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
     * Set nameFile
     *
     * @param string $nameFile
     * @return EntityFile
     */
    public function setNameFile($nameFile)
    {
        $this->nameFile = $nameFile;

        return $this;
    }

    /**
     * Get nameFile
     *
     * @return string 
     */
    public function getNameFile()
    {
        return $this->nameFile;
    }

    /**
     * Set shortDescription
     *
     * @param string $shortDescription
     * @return EntityFile
     */
    public function setShortDescription($shortDescription)
    {
        $this->shortDescription = $shortDescription;

        return $this;
    }

    /**
     * Get shortDescription
     *
     * @return string 
     */
    public function getShortDescription()
    {
        return $this->shortDescription;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return EntityFile
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set updateAt
     *
     * @param \DateTime $updateAt
     * @return EntityFile
     */
    public function setUpdateAt($updateAt)
    {
        $this->updateAt = $updateAt;

        return $this;
    }

    /**
     * Get updateAt
     *
     * @return \DateTime 
     */
    public function getUpdateAt()
    {
        return $this->updateAt;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     * @return EntityFile
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;

        return $this;
    }

    /**
     * Get deleted
     *
     * @return boolean 
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * Set deletedAt
     *
     * @param \DateTime $deletedAt
     * @return EntityFile
     */
    public function setDeletedAt($deletedAt)
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }

    /**
     * Get deletedAt
     *
     * @return \DateTime 
     */
    public function getDeletedAt()
    {
        return $this->deletedAt;
    }

    /**
     * Set uploadedFromUser
     *
     * @param string $uploadedFromUser
     * @return EntityFile
     */
    public function setUploadedFromUser($uploadedFromUser)
    {
        $this->uploadedFromUser = $uploadedFromUser;

        return $this;
    }

    /**
     * Get uploadedFromUser
     *
     * @return string 
     */
    public function getUploadedFromUser()
    {
        return $this->uploadedFromUser;
    }
}
