<?php
/**
 * QuestionReadOnly
 *
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Server\Model
 * @author   OpenAPI Generator team
 * @link     https://github.com/openapitools/openapi-generator
 */

/**
 * Testbed API
 *
 * API for Testbed project.
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: jens.wegar@gmail.com
 * Generated by: https://github.com/openapitools/openapi-generator.git
 *
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Do not edit the class manually.
 */

namespace OpenAPI\Server\Model;

use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

/**
 * Class representing the QuestionReadOnly model.
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */
class QuestionReadOnly 
{
        /**
     * A unique identifier for this entity
     *
     * @var int|null
     * @SerializedName("id")
     * @Assert\Type("int")
     * @Type("int")
     * @Assert\GreaterThanOrEqual(1)
     */
    protected $id;

    /**
     * The date/time when the entity was created
     *
     * @var \DateTime|null
     * @SerializedName("created")
     * @Assert\DateTime()
     * @Type("DateTime")
     */
    protected $created;

    /**
     * The date/time when the entity was last modified
     *
     * @var \DateTime|null
     * @SerializedName("modified")
     * @Assert\DateTime()
     * @Type("DateTime")
     */
    protected $modified;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->id = isset($data['id']) ? $data['id'] : null;
        $this->created = isset($data['created']) ? $data['created'] : null;
        $this->modified = isset($data['modified']) ? $data['modified'] : null;
    }

    /**
     * Gets id.
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets id.
     *
     * @param int|null $id  A unique identifier for this entity
     *
     * @return $this
     */
    public function setId($id = null)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets created.
     *
     * @return \DateTime|null
     */
    public function getCreated(): ?\DateTime
    {
        return $this->created;
    }

    /**
     * Sets created.
     *
     * @param \DateTime|null $created  The date/time when the entity was created
     *
     * @return $this
     */
    public function setCreated(\DateTime $created = null)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Gets modified.
     *
     * @return \DateTime|null
     */
    public function getModified(): ?\DateTime
    {
        return $this->modified;
    }

    /**
     * Sets modified.
     *
     * @param \DateTime|null $modified  The date/time when the entity was last modified
     *
     * @return $this
     */
    public function setModified(\DateTime $modified = null)
    {
        $this->modified = $modified;

        return $this;
    }
}

