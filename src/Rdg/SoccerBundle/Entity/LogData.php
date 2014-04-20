<?php

namespace Rdg\SoccerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LogData
 *
 * @ORM\Table(name="log_data", indexes={@ORM\Index(name="action", columns={"synch_id", "action", "table_name"})})
 * @ORM\Entity
 */
class LogData
{
    /**
     * @var integer
     *
     * @ORM\Column(name="synch_id", type="integer", nullable=false)
     */
    private $synchId;

    /**
     * @var string
     *
     * @ORM\Column(name="action", type="string", nullable=false)
     */
    private $action;

    /**
     * @var string
     *
     * @ORM\Column(name="table_name", type="string", length=50, nullable=false)
     */
    private $tableName;

    /**
     * @var string
     *
     * @ORM\Column(name="subsql", type="text", nullable=false)
     */
    private $subsql;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set synchId
     *
     * @param integer $synchId
     * @return LogData
     */
    public function setSynchId($synchId)
    {
        $this->synchId = $synchId;

        return $this;
    }

    /**
     * Get synchId
     *
     * @return integer 
     */
    public function getSynchId()
    {
        return $this->synchId;
    }

    /**
     * Set action
     *
     * @param string $action
     * @return LogData
     */
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Get action
     *
     * @return string 
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set tableName
     *
     * @param string $tableName
     * @return LogData
     */
    public function setTableName($tableName)
    {
        $this->tableName = $tableName;

        return $this;
    }

    /**
     * Get tableName
     *
     * @return string 
     */
    public function getTableName()
    {
        return $this->tableName;
    }

    /**
     * Set subsql
     *
     * @param string $subsql
     * @return LogData
     */
    public function setSubsql($subsql)
    {
        $this->subsql = $subsql;

        return $this;
    }

    /**
     * Get subsql
     *
     * @return string 
     */
    public function getSubsql()
    {
        return $this->subsql;
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
}
