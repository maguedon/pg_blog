<?php
namespace Dawin\PgBlog\Domain\Model;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2016
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Author
 */
class Author extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * firstName
     *
     * @var string
     */
    protected $firstName = '';
    
    /**
     * lastName
     *
     * @var string
     */
    protected $lastName = '';
    
    /**
     * username
     *
     * @var string
     */
    protected $username = '';
    
    /**
     * presentation
     *
     * @var string
     */
    protected $presentation = '';
    
    /**
     * image
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     */
    protected $image = null;
    
    /**
     * tags
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Dawin\PgBlog\Domain\Model\Tag>
     */
    protected $tags = null;
    
    /**
     * Returns the firstName
     *
     * @return string $firstName
     */
    public function getFirstName()
    {
        return $this->firstName;
    }
    
    /**
     * Sets the firstName
     *
     * @param string $firstName
     * @return void
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }
    
    /**
     * Returns the lastName
     *
     * @return string $lastName
     */
    public function getLastName()
    {
        return $this->lastName;
    }
    
    /**
     * Sets the lastName
     *
     * @param string $lastName
     * @return void
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }
    
    /**
     * Returns the username
     *
     * @return string $username
     */
    public function getUsername()
    {
        return $this->username;
    }
    
    /**
     * Sets the username
     *
     * @param string $username
     * @return void
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }
    
    /**
     * Returns the presentation
     *
     * @return string $presentation
     */
    public function getPresentation()
    {
        return $this->presentation;
    }
    
    /**
     * Sets the presentation
     *
     * @param string $presentation
     * @return void
     */
    public function setPresentation($presentation)
    {
        $this->presentation = $presentation;
    }
    
    /**
     * Returns the image
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     */
    public function getImage()
    {
        return $this->image;
    }
    
    /**
     * Sets the image
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     * @return void
     */
    public function setImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $image)
    {
        $this->image = $image;
    }
    
    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }
    
    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->tags = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }
    
    /**
     * Adds a Tag
     *
     * @param \Dawin\PgBlog\Domain\Model\Tag $tag
     * @return void
     */
    public function addTag(\Dawin\PgBlog\Domain\Model\Tag $tag)
    {
        $this->tags->attach($tag);
    }
    
    /**
     * Removes a Tag
     *
     * @param \Dawin\PgBlog\Domain\Model\Tag $tagToRemove The Tag to be removed
     * @return void
     */
    public function removeTag(\Dawin\PgBlog\Domain\Model\Tag $tagToRemove)
    {
        $this->tags->detach($tagToRemove);
    }
    
    /**
     * Returns the tags
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Dawin\PgBlog\Domain\Model\Tag> $tags
     */
    public function getTags()
    {
        return $this->tags;
    }
    
    /**
     * Sets the tags
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Dawin\PgBlog\Domain\Model\Tag> $tags
     * @return void
     */
    public function setTags(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $tags)
    {
        $this->tags = $tags;
    }

}