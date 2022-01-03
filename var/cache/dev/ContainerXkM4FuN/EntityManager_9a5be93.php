<?php

namespace ContainerXkM4FuN;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
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

    public function getConnection()
    {
        $this->initializerfb1ff && ($this->initializerfb1ff->__invoke($valueHolder62ad4, $this, 'getConnection', array(), $this->initializerfb1ff) || 1) && $this->valueHolder62ad4 = $valueHolder62ad4;

        return $this->valueHolder62ad4->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerfb1ff && ($this->initializerfb1ff->__invoke($valueHolder62ad4, $this, 'getMetadataFactory', array(), $this->initializerfb1ff) || 1) && $this->valueHolder62ad4 = $valueHolder62ad4;

        return $this->valueHolder62ad4->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerfb1ff && ($this->initializerfb1ff->__invoke($valueHolder62ad4, $this, 'getExpressionBuilder', array(), $this->initializerfb1ff) || 1) && $this->valueHolder62ad4 = $valueHolder62ad4;

        return $this->valueHolder62ad4->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerfb1ff && ($this->initializerfb1ff->__invoke($valueHolder62ad4, $this, 'beginTransaction', array(), $this->initializerfb1ff) || 1) && $this->valueHolder62ad4 = $valueHolder62ad4;

        return $this->valueHolder62ad4->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerfb1ff && ($this->initializerfb1ff->__invoke($valueHolder62ad4, $this, 'getCache', array(), $this->initializerfb1ff) || 1) && $this->valueHolder62ad4 = $valueHolder62ad4;

        return $this->valueHolder62ad4->getCache();
    }

    public function transactional($func)
    {
        $this->initializerfb1ff && ($this->initializerfb1ff->__invoke($valueHolder62ad4, $this, 'transactional', array('func' => $func), $this->initializerfb1ff) || 1) && $this->valueHolder62ad4 = $valueHolder62ad4;

        return $this->valueHolder62ad4->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerfb1ff && ($this->initializerfb1ff->__invoke($valueHolder62ad4, $this, 'wrapInTransaction', array('func' => $func), $this->initializerfb1ff) || 1) && $this->valueHolder62ad4 = $valueHolder62ad4;

        return $this->valueHolder62ad4->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerfb1ff && ($this->initializerfb1ff->__invoke($valueHolder62ad4, $this, 'commit', array(), $this->initializerfb1ff) || 1) && $this->valueHolder62ad4 = $valueHolder62ad4;

        return $this->valueHolder62ad4->commit();
    }

    public function rollback()
    {
        $this->initializerfb1ff && ($this->initializerfb1ff->__invoke($valueHolder62ad4, $this, 'rollback', array(), $this->initializerfb1ff) || 1) && $this->valueHolder62ad4 = $valueHolder62ad4;

        return $this->valueHolder62ad4->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerfb1ff && ($this->initializerfb1ff->__invoke($valueHolder62ad4, $this, 'getClassMetadata', array('className' => $className), $this->initializerfb1ff) || 1) && $this->valueHolder62ad4 = $valueHolder62ad4;

        return $this->valueHolder62ad4->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerfb1ff && ($this->initializerfb1ff->__invoke($valueHolder62ad4, $this, 'createQuery', array('dql' => $dql), $this->initializerfb1ff) || 1) && $this->valueHolder62ad4 = $valueHolder62ad4;

        return $this->valueHolder62ad4->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerfb1ff && ($this->initializerfb1ff->__invoke($valueHolder62ad4, $this, 'createNamedQuery', array('name' => $name), $this->initializerfb1ff) || 1) && $this->valueHolder62ad4 = $valueHolder62ad4;

        return $this->valueHolder62ad4->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerfb1ff && ($this->initializerfb1ff->__invoke($valueHolder62ad4, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerfb1ff) || 1) && $this->valueHolder62ad4 = $valueHolder62ad4;

        return $this->valueHolder62ad4->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerfb1ff && ($this->initializerfb1ff->__invoke($valueHolder62ad4, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerfb1ff) || 1) && $this->valueHolder62ad4 = $valueHolder62ad4;

        return $this->valueHolder62ad4->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerfb1ff && ($this->initializerfb1ff->__invoke($valueHolder62ad4, $this, 'createQueryBuilder', array(), $this->initializerfb1ff) || 1) && $this->valueHolder62ad4 = $valueHolder62ad4;

        return $this->valueHolder62ad4->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerfb1ff && ($this->initializerfb1ff->__invoke($valueHolder62ad4, $this, 'flush', array('entity' => $entity), $this->initializerfb1ff) || 1) && $this->valueHolder62ad4 = $valueHolder62ad4;

        return $this->valueHolder62ad4->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerfb1ff && ($this->initializerfb1ff->__invoke($valueHolder62ad4, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfb1ff) || 1) && $this->valueHolder62ad4 = $valueHolder62ad4;

        return $this->valueHolder62ad4->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerfb1ff && ($this->initializerfb1ff->__invoke($valueHolder62ad4, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerfb1ff) || 1) && $this->valueHolder62ad4 = $valueHolder62ad4;

        return $this->valueHolder62ad4->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerfb1ff && ($this->initializerfb1ff->__invoke($valueHolder62ad4, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerfb1ff) || 1) && $this->valueHolder62ad4 = $valueHolder62ad4;

        return $this->valueHolder62ad4->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerfb1ff && ($this->initializerfb1ff->__invoke($valueHolder62ad4, $this, 'clear', array('entityName' => $entityName), $this->initializerfb1ff) || 1) && $this->valueHolder62ad4 = $valueHolder62ad4;

        return $this->valueHolder62ad4->clear($entityName);
    }

    public function close()
    {
        $this->initializerfb1ff && ($this->initializerfb1ff->__invoke($valueHolder62ad4, $this, 'close', array(), $this->initializerfb1ff) || 1) && $this->valueHolder62ad4 = $valueHolder62ad4;

        return $this->valueHolder62ad4->close();
    }

    public function persist($entity)
    {
        $this->initializerfb1ff && ($this->initializerfb1ff->__invoke($valueHolder62ad4, $this, 'persist', array('entity' => $entity), $this->initializerfb1ff) || 1) && $this->valueHolder62ad4 = $valueHolder62ad4;

        return $this->valueHolder62ad4->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerfb1ff && ($this->initializerfb1ff->__invoke($valueHolder62ad4, $this, 'remove', array('entity' => $entity), $this->initializerfb1ff) || 1) && $this->valueHolder62ad4 = $valueHolder62ad4;

        return $this->valueHolder62ad4->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerfb1ff && ($this->initializerfb1ff->__invoke($valueHolder62ad4, $this, 'refresh', array('entity' => $entity), $this->initializerfb1ff) || 1) && $this->valueHolder62ad4 = $valueHolder62ad4;

        return $this->valueHolder62ad4->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerfb1ff && ($this->initializerfb1ff->__invoke($valueHolder62ad4, $this, 'detach', array('entity' => $entity), $this->initializerfb1ff) || 1) && $this->valueHolder62ad4 = $valueHolder62ad4;

        return $this->valueHolder62ad4->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerfb1ff && ($this->initializerfb1ff->__invoke($valueHolder62ad4, $this, 'merge', array('entity' => $entity), $this->initializerfb1ff) || 1) && $this->valueHolder62ad4 = $valueHolder62ad4;

        return $this->valueHolder62ad4->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerfb1ff && ($this->initializerfb1ff->__invoke($valueHolder62ad4, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerfb1ff) || 1) && $this->valueHolder62ad4 = $valueHolder62ad4;

        return $this->valueHolder62ad4->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerfb1ff && ($this->initializerfb1ff->__invoke($valueHolder62ad4, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfb1ff) || 1) && $this->valueHolder62ad4 = $valueHolder62ad4;

        return $this->valueHolder62ad4->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerfb1ff && ($this->initializerfb1ff->__invoke($valueHolder62ad4, $this, 'getRepository', array('entityName' => $entityName), $this->initializerfb1ff) || 1) && $this->valueHolder62ad4 = $valueHolder62ad4;

        return $this->valueHolder62ad4->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerfb1ff && ($this->initializerfb1ff->__invoke($valueHolder62ad4, $this, 'contains', array('entity' => $entity), $this->initializerfb1ff) || 1) && $this->valueHolder62ad4 = $valueHolder62ad4;

        return $this->valueHolder62ad4->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerfb1ff && ($this->initializerfb1ff->__invoke($valueHolder62ad4, $this, 'getEventManager', array(), $this->initializerfb1ff) || 1) && $this->valueHolder62ad4 = $valueHolder62ad4;

        return $this->valueHolder62ad4->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerfb1ff && ($this->initializerfb1ff->__invoke($valueHolder62ad4, $this, 'getConfiguration', array(), $this->initializerfb1ff) || 1) && $this->valueHolder62ad4 = $valueHolder62ad4;

        return $this->valueHolder62ad4->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerfb1ff && ($this->initializerfb1ff->__invoke($valueHolder62ad4, $this, 'isOpen', array(), $this->initializerfb1ff) || 1) && $this->valueHolder62ad4 = $valueHolder62ad4;

        return $this->valueHolder62ad4->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerfb1ff && ($this->initializerfb1ff->__invoke($valueHolder62ad4, $this, 'getUnitOfWork', array(), $this->initializerfb1ff) || 1) && $this->valueHolder62ad4 = $valueHolder62ad4;

        return $this->valueHolder62ad4->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerfb1ff && ($this->initializerfb1ff->__invoke($valueHolder62ad4, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfb1ff) || 1) && $this->valueHolder62ad4 = $valueHolder62ad4;

        return $this->valueHolder62ad4->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerfb1ff && ($this->initializerfb1ff->__invoke($valueHolder62ad4, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfb1ff) || 1) && $this->valueHolder62ad4 = $valueHolder62ad4;

        return $this->valueHolder62ad4->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerfb1ff && ($this->initializerfb1ff->__invoke($valueHolder62ad4, $this, 'getProxyFactory', array(), $this->initializerfb1ff) || 1) && $this->valueHolder62ad4 = $valueHolder62ad4;

        return $this->valueHolder62ad4->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerfb1ff && ($this->initializerfb1ff->__invoke($valueHolder62ad4, $this, 'initializeObject', array('obj' => $obj), $this->initializerfb1ff) || 1) && $this->valueHolder62ad4 = $valueHolder62ad4;

        return $this->valueHolder62ad4->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerfb1ff && ($this->initializerfb1ff->__invoke($valueHolder62ad4, $this, 'getFilters', array(), $this->initializerfb1ff) || 1) && $this->valueHolder62ad4 = $valueHolder62ad4;

        return $this->valueHolder62ad4->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerfb1ff && ($this->initializerfb1ff->__invoke($valueHolder62ad4, $this, 'isFiltersStateClean', array(), $this->initializerfb1ff) || 1) && $this->valueHolder62ad4 = $valueHolder62ad4;

        return $this->valueHolder62ad4->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerfb1ff && ($this->initializerfb1ff->__invoke($valueHolder62ad4, $this, 'hasFilters', array(), $this->initializerfb1ff) || 1) && $this->valueHolder62ad4 = $valueHolder62ad4;

        return $this->valueHolder62ad4->hasFilters();
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

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerfb1ff = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder62ad4) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder62ad4 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder62ad4->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerfb1ff && ($this->initializerfb1ff->__invoke($valueHolder62ad4, $this, '__get', ['name' => $name], $this->initializerfb1ff) || 1) && $this->valueHolder62ad4 = $valueHolder62ad4;

        if (isset(self::$publicPropertiesdd14f[$name])) {
            return $this->valueHolder62ad4->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
