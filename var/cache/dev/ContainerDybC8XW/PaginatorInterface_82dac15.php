<?php

namespace ContainerDybC8XW;
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolderb685b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere140b = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesab1e9 = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializere140b && ($this->initializere140b->__invoke($valueHolderb685b, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializere140b) || 1) && $this->valueHolderb685b = $valueHolderb685b;

        if ($this->valueHolderb685b === $returnValue = $this->valueHolderb685b->paginate($target, $page, $limit, $options)) {
            return $this;
        }

        return $returnValue;
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        $instance->initializere140b = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolderb685b) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolderb685b = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializere140b && ($this->initializere140b->__invoke($valueHolderb685b, $this, '__get', ['name' => $name], $this->initializere140b) || 1) && $this->valueHolderb685b = $valueHolderb685b;

        if (isset(self::$publicPropertiesab1e9[$name])) {
            return $this->valueHolderb685b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb685b;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderb685b;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializere140b && ($this->initializere140b->__invoke($valueHolderb685b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere140b) || 1) && $this->valueHolderb685b = $valueHolderb685b;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb685b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderb685b;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializere140b && ($this->initializere140b->__invoke($valueHolderb685b, $this, '__isset', array('name' => $name), $this->initializere140b) || 1) && $this->valueHolderb685b = $valueHolderb685b;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb685b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderb685b;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializere140b && ($this->initializere140b->__invoke($valueHolderb685b, $this, '__unset', array('name' => $name), $this->initializere140b) || 1) && $this->valueHolderb685b = $valueHolderb685b;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb685b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderb685b;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializere140b && ($this->initializere140b->__invoke($valueHolderb685b, $this, '__clone', array(), $this->initializere140b) || 1) && $this->valueHolderb685b = $valueHolderb685b;

        $this->valueHolderb685b = clone $this->valueHolderb685b;
    }

    public function __sleep()
    {
        $this->initializere140b && ($this->initializere140b->__invoke($valueHolderb685b, $this, '__sleep', array(), $this->initializere140b) || 1) && $this->valueHolderb685b = $valueHolderb685b;

        return array('valueHolderb685b');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializere140b = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializere140b;
    }

    public function initializeProxy() : bool
    {
        return $this->initializere140b && ($this->initializere140b->__invoke($valueHolderb685b, $this, 'initializeProxy', array(), $this->initializere140b) || 1) && $this->valueHolderb685b = $valueHolderb685b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb685b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb685b;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
