<?php

namespace ContainerAw5Ib64;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
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

    public function getConnection()
    {
        $this->initializere140b && ($this->initializere140b->__invoke($valueHolderb685b, $this, 'getConnection', array(), $this->initializere140b) || 1) && $this->valueHolderb685b = $valueHolderb685b;

        return $this->valueHolderb685b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializere140b && ($this->initializere140b->__invoke($valueHolderb685b, $this, 'getMetadataFactory', array(), $this->initializere140b) || 1) && $this->valueHolderb685b = $valueHolderb685b;

        return $this->valueHolderb685b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializere140b && ($this->initializere140b->__invoke($valueHolderb685b, $this, 'getExpressionBuilder', array(), $this->initializere140b) || 1) && $this->valueHolderb685b = $valueHolderb685b;

        return $this->valueHolderb685b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializere140b && ($this->initializere140b->__invoke($valueHolderb685b, $this, 'beginTransaction', array(), $this->initializere140b) || 1) && $this->valueHolderb685b = $valueHolderb685b;

        return $this->valueHolderb685b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializere140b && ($this->initializere140b->__invoke($valueHolderb685b, $this, 'getCache', array(), $this->initializere140b) || 1) && $this->valueHolderb685b = $valueHolderb685b;

        return $this->valueHolderb685b->getCache();
    }

    public function transactional($func)
    {
        $this->initializere140b && ($this->initializere140b->__invoke($valueHolderb685b, $this, 'transactional', array('func' => $func), $this->initializere140b) || 1) && $this->valueHolderb685b = $valueHolderb685b;

        return $this->valueHolderb685b->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializere140b && ($this->initializere140b->__invoke($valueHolderb685b, $this, 'wrapInTransaction', array('func' => $func), $this->initializere140b) || 1) && $this->valueHolderb685b = $valueHolderb685b;

        return $this->valueHolderb685b->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializere140b && ($this->initializere140b->__invoke($valueHolderb685b, $this, 'commit', array(), $this->initializere140b) || 1) && $this->valueHolderb685b = $valueHolderb685b;

        return $this->valueHolderb685b->commit();
    }

    public function rollback()
    {
        $this->initializere140b && ($this->initializere140b->__invoke($valueHolderb685b, $this, 'rollback', array(), $this->initializere140b) || 1) && $this->valueHolderb685b = $valueHolderb685b;

        return $this->valueHolderb685b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializere140b && ($this->initializere140b->__invoke($valueHolderb685b, $this, 'getClassMetadata', array('className' => $className), $this->initializere140b) || 1) && $this->valueHolderb685b = $valueHolderb685b;

        return $this->valueHolderb685b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializere140b && ($this->initializere140b->__invoke($valueHolderb685b, $this, 'createQuery', array('dql' => $dql), $this->initializere140b) || 1) && $this->valueHolderb685b = $valueHolderb685b;

        return $this->valueHolderb685b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializere140b && ($this->initializere140b->__invoke($valueHolderb685b, $this, 'createNamedQuery', array('name' => $name), $this->initializere140b) || 1) && $this->valueHolderb685b = $valueHolderb685b;

        return $this->valueHolderb685b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializere140b && ($this->initializere140b->__invoke($valueHolderb685b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializere140b) || 1) && $this->valueHolderb685b = $valueHolderb685b;

        return $this->valueHolderb685b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializere140b && ($this->initializere140b->__invoke($valueHolderb685b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializere140b) || 1) && $this->valueHolderb685b = $valueHolderb685b;

        return $this->valueHolderb685b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializere140b && ($this->initializere140b->__invoke($valueHolderb685b, $this, 'createQueryBuilder', array(), $this->initializere140b) || 1) && $this->valueHolderb685b = $valueHolderb685b;

        return $this->valueHolderb685b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializere140b && ($this->initializere140b->__invoke($valueHolderb685b, $this, 'flush', array('entity' => $entity), $this->initializere140b) || 1) && $this->valueHolderb685b = $valueHolderb685b;

        return $this->valueHolderb685b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializere140b && ($this->initializere140b->__invoke($valueHolderb685b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere140b) || 1) && $this->valueHolderb685b = $valueHolderb685b;

        return $this->valueHolderb685b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializere140b && ($this->initializere140b->__invoke($valueHolderb685b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializere140b) || 1) && $this->valueHolderb685b = $valueHolderb685b;

        return $this->valueHolderb685b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializere140b && ($this->initializere140b->__invoke($valueHolderb685b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializere140b) || 1) && $this->valueHolderb685b = $valueHolderb685b;

        return $this->valueHolderb685b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializere140b && ($this->initializere140b->__invoke($valueHolderb685b, $this, 'clear', array('entityName' => $entityName), $this->initializere140b) || 1) && $this->valueHolderb685b = $valueHolderb685b;

        return $this->valueHolderb685b->clear($entityName);
    }

    public function close()
    {
        $this->initializere140b && ($this->initializere140b->__invoke($valueHolderb685b, $this, 'close', array(), $this->initializere140b) || 1) && $this->valueHolderb685b = $valueHolderb685b;

        return $this->valueHolderb685b->close();
    }

    public function persist($entity)
    {
        $this->initializere140b && ($this->initializere140b->__invoke($valueHolderb685b, $this, 'persist', array('entity' => $entity), $this->initializere140b) || 1) && $this->valueHolderb685b = $valueHolderb685b;

        return $this->valueHolderb685b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializere140b && ($this->initializere140b->__invoke($valueHolderb685b, $this, 'remove', array('entity' => $entity), $this->initializere140b) || 1) && $this->valueHolderb685b = $valueHolderb685b;

        return $this->valueHolderb685b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializere140b && ($this->initializere140b->__invoke($valueHolderb685b, $this, 'refresh', array('entity' => $entity), $this->initializere140b) || 1) && $this->valueHolderb685b = $valueHolderb685b;

        return $this->valueHolderb685b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializere140b && ($this->initializere140b->__invoke($valueHolderb685b, $this, 'detach', array('entity' => $entity), $this->initializere140b) || 1) && $this->valueHolderb685b = $valueHolderb685b;

        return $this->valueHolderb685b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializere140b && ($this->initializere140b->__invoke($valueHolderb685b, $this, 'merge', array('entity' => $entity), $this->initializere140b) || 1) && $this->valueHolderb685b = $valueHolderb685b;

        return $this->valueHolderb685b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializere140b && ($this->initializere140b->__invoke($valueHolderb685b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializere140b) || 1) && $this->valueHolderb685b = $valueHolderb685b;

        return $this->valueHolderb685b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializere140b && ($this->initializere140b->__invoke($valueHolderb685b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere140b) || 1) && $this->valueHolderb685b = $valueHolderb685b;

        return $this->valueHolderb685b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializere140b && ($this->initializere140b->__invoke($valueHolderb685b, $this, 'getRepository', array('entityName' => $entityName), $this->initializere140b) || 1) && $this->valueHolderb685b = $valueHolderb685b;

        return $this->valueHolderb685b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializere140b && ($this->initializere140b->__invoke($valueHolderb685b, $this, 'contains', array('entity' => $entity), $this->initializere140b) || 1) && $this->valueHolderb685b = $valueHolderb685b;

        return $this->valueHolderb685b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializere140b && ($this->initializere140b->__invoke($valueHolderb685b, $this, 'getEventManager', array(), $this->initializere140b) || 1) && $this->valueHolderb685b = $valueHolderb685b;

        return $this->valueHolderb685b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializere140b && ($this->initializere140b->__invoke($valueHolderb685b, $this, 'getConfiguration', array(), $this->initializere140b) || 1) && $this->valueHolderb685b = $valueHolderb685b;

        return $this->valueHolderb685b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializere140b && ($this->initializere140b->__invoke($valueHolderb685b, $this, 'isOpen', array(), $this->initializere140b) || 1) && $this->valueHolderb685b = $valueHolderb685b;

        return $this->valueHolderb685b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializere140b && ($this->initializere140b->__invoke($valueHolderb685b, $this, 'getUnitOfWork', array(), $this->initializere140b) || 1) && $this->valueHolderb685b = $valueHolderb685b;

        return $this->valueHolderb685b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializere140b && ($this->initializere140b->__invoke($valueHolderb685b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializere140b) || 1) && $this->valueHolderb685b = $valueHolderb685b;

        return $this->valueHolderb685b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializere140b && ($this->initializere140b->__invoke($valueHolderb685b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializere140b) || 1) && $this->valueHolderb685b = $valueHolderb685b;

        return $this->valueHolderb685b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializere140b && ($this->initializere140b->__invoke($valueHolderb685b, $this, 'getProxyFactory', array(), $this->initializere140b) || 1) && $this->valueHolderb685b = $valueHolderb685b;

        return $this->valueHolderb685b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializere140b && ($this->initializere140b->__invoke($valueHolderb685b, $this, 'initializeObject', array('obj' => $obj), $this->initializere140b) || 1) && $this->valueHolderb685b = $valueHolderb685b;

        return $this->valueHolderb685b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializere140b && ($this->initializere140b->__invoke($valueHolderb685b, $this, 'getFilters', array(), $this->initializere140b) || 1) && $this->valueHolderb685b = $valueHolderb685b;

        return $this->valueHolderb685b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializere140b && ($this->initializere140b->__invoke($valueHolderb685b, $this, 'isFiltersStateClean', array(), $this->initializere140b) || 1) && $this->valueHolderb685b = $valueHolderb685b;

        return $this->valueHolderb685b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializere140b && ($this->initializere140b->__invoke($valueHolderb685b, $this, 'hasFilters', array(), $this->initializere140b) || 1) && $this->valueHolderb685b = $valueHolderb685b;

        return $this->valueHolderb685b->hasFilters();
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

        $instance->initializere140b = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderb685b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderb685b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderb685b->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializere140b && ($this->initializere140b->__invoke($valueHolderb685b, $this, '__get', ['name' => $name], $this->initializere140b) || 1) && $this->valueHolderb685b = $valueHolderb685b;

        if (isset(self::$publicPropertiesab1e9[$name])) {
            return $this->valueHolderb685b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
