<?php
namespace Goetas\XML\WSDLReader\Wsdl;

/**
 * XSD Type: tPortType
 */
class PortType extends ExtensibleAttributesDocumented
{

    /**
     * @var string
     */
    protected $name;

    /**
     * @var array
     */
    protected $operation = array();

    public function __construct(Definitions $def, $name)
    {
        parent::__construct($def);
        $this->name = $name;
    }
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * @param $name string
     * @return \Goetas\XML\WSDLReader\Wsdl\PortType
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }



    /**
     * @param $operation \Goetas\XML\WSDLReader\Wsdl\PortType\Operation
     */
    public function addOperation(\Goetas\XML\WSDLReader\Wsdl\PortType\Operation $operation)
    {
        $this->operation[$operation->getName()] = $operation;
        return $this;
    }
    /**
     * @return \Goetas\XML\WSDLReader\Wsdl\PortType\Operation
     */
    public function getOperation($name)
    {
        return $this->operation[$name];
    }
    /**
     * @return \Goetas\XML\WSDLReader\Wsdl\PortType\Operation[]
     */
    public function getOperations()
    {
        return $this->operation;
    }

}
