<?php

namespace ContainerXkM4FuN;
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolder62ad4 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerfb1ff = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesdd14f = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializerfb1ff && ($this->initializerfb1ff->__invoke($valueHolder62ad4, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializerfb1ff) || 1) && $this->valueHolder62ad4 = $valueHolder62ad4;

        if ($this->valueHolder62ad4 === $returnValue = $this->valueHolder62ad4->paginate($target, $page, $limit, $options)) {
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

        $instance->initializerfb1ff = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder62ad4) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder62ad4 = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializerfb1ff && ($this->initializerfb1ff->__invoke($valueHolder62ad4, $this, '__get', ['name' => $name], $this->initializerfb1ff) || 1) && $this->valueHolder62ad4 = $valueHolder62ad4;

        if (isset(self::$publicPropertiesdd14f[$name])) {
            return $this->valueHolder62ad4->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder62ad4;

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

        $targetObject = $this->valueHolder62ad4;
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
        $this->initializerfb1ff && ($this->initializerfb1ff->__invoke($valueHolder62ad4, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerfb1ff) || 1) && $this->valueHolder62ad4 = $valueHolder62ad4;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder62ad4;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder62ad4;
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
        $this->initializerfb1ff && ($this->initializerfb1ff->__invoke($valueHolder62ad4, $this, '__isset', array('name' => $name), $this->initializerfb1ff) || 1) && $this->valueHolder62ad4 = $valueHolder62ad4;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder62ad4;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder62ad4;
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
        $this->initializerfb1ff && ($this->initializerfb1ff->__invoke($valueHolder62ad4, $this, '__unset', array('name' => $name), $this->initializerfb1ff) || 1) && $this->valueHolder62ad4 = $valueHolder62ad4;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder62ad4;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder62ad4;
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
        $this->initializerfb1ff && ($this->initializerfb1ff->__invoke($valueHolder62ad4, $this, '__clone', array(), $this->initializerfb1ff) || 1) && $this->valueHolder62ad4 = $valueHolder62ad4;

        $this->valueHolder62ad4 = clone $this->valueHolder62ad4;
    }

    public function __sleep()
    {
        $this->initializerfb1ff && ($this->initializerfb1ff->__invoke($valueHolder62ad4, $this, '__sleep', array(), $this->initializerfb1ff) || 1) && $this->valueHolder62ad4 = $valueHolder62ad4;

        return array('valueHolder62ad4');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerfb1ff = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerfb1ff;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerfb1ff && ($this->initializerfb1ff->__invoke($valueHolder62ad4, $this, 'initializeProxy', array(), $this->initializerfb1ff) || 1) && $this->valueHolder62ad4 = $valueHolder62ad4;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder62ad4;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder62ad4;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
