<?php

namespace ContainerFfSihDA;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder79799 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer07f7c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties3fed0 = [
        
    ];

    public function getConnection()
    {
        $this->initializer07f7c && ($this->initializer07f7c->__invoke($valueHolder79799, $this, 'getConnection', array(), $this->initializer07f7c) || 1) && $this->valueHolder79799 = $valueHolder79799;

        return $this->valueHolder79799->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer07f7c && ($this->initializer07f7c->__invoke($valueHolder79799, $this, 'getMetadataFactory', array(), $this->initializer07f7c) || 1) && $this->valueHolder79799 = $valueHolder79799;

        return $this->valueHolder79799->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer07f7c && ($this->initializer07f7c->__invoke($valueHolder79799, $this, 'getExpressionBuilder', array(), $this->initializer07f7c) || 1) && $this->valueHolder79799 = $valueHolder79799;

        return $this->valueHolder79799->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer07f7c && ($this->initializer07f7c->__invoke($valueHolder79799, $this, 'beginTransaction', array(), $this->initializer07f7c) || 1) && $this->valueHolder79799 = $valueHolder79799;

        return $this->valueHolder79799->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer07f7c && ($this->initializer07f7c->__invoke($valueHolder79799, $this, 'getCache', array(), $this->initializer07f7c) || 1) && $this->valueHolder79799 = $valueHolder79799;

        return $this->valueHolder79799->getCache();
    }

    public function transactional($func)
    {
        $this->initializer07f7c && ($this->initializer07f7c->__invoke($valueHolder79799, $this, 'transactional', array('func' => $func), $this->initializer07f7c) || 1) && $this->valueHolder79799 = $valueHolder79799;

        return $this->valueHolder79799->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer07f7c && ($this->initializer07f7c->__invoke($valueHolder79799, $this, 'wrapInTransaction', array('func' => $func), $this->initializer07f7c) || 1) && $this->valueHolder79799 = $valueHolder79799;

        return $this->valueHolder79799->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer07f7c && ($this->initializer07f7c->__invoke($valueHolder79799, $this, 'commit', array(), $this->initializer07f7c) || 1) && $this->valueHolder79799 = $valueHolder79799;

        return $this->valueHolder79799->commit();
    }

    public function rollback()
    {
        $this->initializer07f7c && ($this->initializer07f7c->__invoke($valueHolder79799, $this, 'rollback', array(), $this->initializer07f7c) || 1) && $this->valueHolder79799 = $valueHolder79799;

        return $this->valueHolder79799->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer07f7c && ($this->initializer07f7c->__invoke($valueHolder79799, $this, 'getClassMetadata', array('className' => $className), $this->initializer07f7c) || 1) && $this->valueHolder79799 = $valueHolder79799;

        return $this->valueHolder79799->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer07f7c && ($this->initializer07f7c->__invoke($valueHolder79799, $this, 'createQuery', array('dql' => $dql), $this->initializer07f7c) || 1) && $this->valueHolder79799 = $valueHolder79799;

        return $this->valueHolder79799->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer07f7c && ($this->initializer07f7c->__invoke($valueHolder79799, $this, 'createNamedQuery', array('name' => $name), $this->initializer07f7c) || 1) && $this->valueHolder79799 = $valueHolder79799;

        return $this->valueHolder79799->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer07f7c && ($this->initializer07f7c->__invoke($valueHolder79799, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer07f7c) || 1) && $this->valueHolder79799 = $valueHolder79799;

        return $this->valueHolder79799->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer07f7c && ($this->initializer07f7c->__invoke($valueHolder79799, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer07f7c) || 1) && $this->valueHolder79799 = $valueHolder79799;

        return $this->valueHolder79799->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer07f7c && ($this->initializer07f7c->__invoke($valueHolder79799, $this, 'createQueryBuilder', array(), $this->initializer07f7c) || 1) && $this->valueHolder79799 = $valueHolder79799;

        return $this->valueHolder79799->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer07f7c && ($this->initializer07f7c->__invoke($valueHolder79799, $this, 'flush', array('entity' => $entity), $this->initializer07f7c) || 1) && $this->valueHolder79799 = $valueHolder79799;

        return $this->valueHolder79799->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer07f7c && ($this->initializer07f7c->__invoke($valueHolder79799, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer07f7c) || 1) && $this->valueHolder79799 = $valueHolder79799;

        return $this->valueHolder79799->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer07f7c && ($this->initializer07f7c->__invoke($valueHolder79799, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer07f7c) || 1) && $this->valueHolder79799 = $valueHolder79799;

        return $this->valueHolder79799->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer07f7c && ($this->initializer07f7c->__invoke($valueHolder79799, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer07f7c) || 1) && $this->valueHolder79799 = $valueHolder79799;

        return $this->valueHolder79799->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer07f7c && ($this->initializer07f7c->__invoke($valueHolder79799, $this, 'clear', array('entityName' => $entityName), $this->initializer07f7c) || 1) && $this->valueHolder79799 = $valueHolder79799;

        return $this->valueHolder79799->clear($entityName);
    }

    public function close()
    {
        $this->initializer07f7c && ($this->initializer07f7c->__invoke($valueHolder79799, $this, 'close', array(), $this->initializer07f7c) || 1) && $this->valueHolder79799 = $valueHolder79799;

        return $this->valueHolder79799->close();
    }

    public function persist($entity)
    {
        $this->initializer07f7c && ($this->initializer07f7c->__invoke($valueHolder79799, $this, 'persist', array('entity' => $entity), $this->initializer07f7c) || 1) && $this->valueHolder79799 = $valueHolder79799;

        return $this->valueHolder79799->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer07f7c && ($this->initializer07f7c->__invoke($valueHolder79799, $this, 'remove', array('entity' => $entity), $this->initializer07f7c) || 1) && $this->valueHolder79799 = $valueHolder79799;

        return $this->valueHolder79799->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer07f7c && ($this->initializer07f7c->__invoke($valueHolder79799, $this, 'refresh', array('entity' => $entity), $this->initializer07f7c) || 1) && $this->valueHolder79799 = $valueHolder79799;

        return $this->valueHolder79799->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer07f7c && ($this->initializer07f7c->__invoke($valueHolder79799, $this, 'detach', array('entity' => $entity), $this->initializer07f7c) || 1) && $this->valueHolder79799 = $valueHolder79799;

        return $this->valueHolder79799->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer07f7c && ($this->initializer07f7c->__invoke($valueHolder79799, $this, 'merge', array('entity' => $entity), $this->initializer07f7c) || 1) && $this->valueHolder79799 = $valueHolder79799;

        return $this->valueHolder79799->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer07f7c && ($this->initializer07f7c->__invoke($valueHolder79799, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer07f7c) || 1) && $this->valueHolder79799 = $valueHolder79799;

        return $this->valueHolder79799->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer07f7c && ($this->initializer07f7c->__invoke($valueHolder79799, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer07f7c) || 1) && $this->valueHolder79799 = $valueHolder79799;

        return $this->valueHolder79799->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer07f7c && ($this->initializer07f7c->__invoke($valueHolder79799, $this, 'getRepository', array('entityName' => $entityName), $this->initializer07f7c) || 1) && $this->valueHolder79799 = $valueHolder79799;

        return $this->valueHolder79799->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer07f7c && ($this->initializer07f7c->__invoke($valueHolder79799, $this, 'contains', array('entity' => $entity), $this->initializer07f7c) || 1) && $this->valueHolder79799 = $valueHolder79799;

        return $this->valueHolder79799->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer07f7c && ($this->initializer07f7c->__invoke($valueHolder79799, $this, 'getEventManager', array(), $this->initializer07f7c) || 1) && $this->valueHolder79799 = $valueHolder79799;

        return $this->valueHolder79799->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer07f7c && ($this->initializer07f7c->__invoke($valueHolder79799, $this, 'getConfiguration', array(), $this->initializer07f7c) || 1) && $this->valueHolder79799 = $valueHolder79799;

        return $this->valueHolder79799->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer07f7c && ($this->initializer07f7c->__invoke($valueHolder79799, $this, 'isOpen', array(), $this->initializer07f7c) || 1) && $this->valueHolder79799 = $valueHolder79799;

        return $this->valueHolder79799->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer07f7c && ($this->initializer07f7c->__invoke($valueHolder79799, $this, 'getUnitOfWork', array(), $this->initializer07f7c) || 1) && $this->valueHolder79799 = $valueHolder79799;

        return $this->valueHolder79799->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer07f7c && ($this->initializer07f7c->__invoke($valueHolder79799, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer07f7c) || 1) && $this->valueHolder79799 = $valueHolder79799;

        return $this->valueHolder79799->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer07f7c && ($this->initializer07f7c->__invoke($valueHolder79799, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer07f7c) || 1) && $this->valueHolder79799 = $valueHolder79799;

        return $this->valueHolder79799->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer07f7c && ($this->initializer07f7c->__invoke($valueHolder79799, $this, 'getProxyFactory', array(), $this->initializer07f7c) || 1) && $this->valueHolder79799 = $valueHolder79799;

        return $this->valueHolder79799->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer07f7c && ($this->initializer07f7c->__invoke($valueHolder79799, $this, 'initializeObject', array('obj' => $obj), $this->initializer07f7c) || 1) && $this->valueHolder79799 = $valueHolder79799;

        return $this->valueHolder79799->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer07f7c && ($this->initializer07f7c->__invoke($valueHolder79799, $this, 'getFilters', array(), $this->initializer07f7c) || 1) && $this->valueHolder79799 = $valueHolder79799;

        return $this->valueHolder79799->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer07f7c && ($this->initializer07f7c->__invoke($valueHolder79799, $this, 'isFiltersStateClean', array(), $this->initializer07f7c) || 1) && $this->valueHolder79799 = $valueHolder79799;

        return $this->valueHolder79799->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer07f7c && ($this->initializer07f7c->__invoke($valueHolder79799, $this, 'hasFilters', array(), $this->initializer07f7c) || 1) && $this->valueHolder79799 = $valueHolder79799;

        return $this->valueHolder79799->hasFilters();
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

        $instance->initializer07f7c = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder79799) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder79799 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder79799->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer07f7c && ($this->initializer07f7c->__invoke($valueHolder79799, $this, '__get', ['name' => $name], $this->initializer07f7c) || 1) && $this->valueHolder79799 = $valueHolder79799;

        if (isset(self::$publicProperties3fed0[$name])) {
            return $this->valueHolder79799->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder79799;

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

        $targetObject = $this->valueHolder79799;
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
        $this->initializer07f7c && ($this->initializer07f7c->__invoke($valueHolder79799, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer07f7c) || 1) && $this->valueHolder79799 = $valueHolder79799;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder79799;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder79799;
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
        $this->initializer07f7c && ($this->initializer07f7c->__invoke($valueHolder79799, $this, '__isset', array('name' => $name), $this->initializer07f7c) || 1) && $this->valueHolder79799 = $valueHolder79799;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder79799;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder79799;
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
        $this->initializer07f7c && ($this->initializer07f7c->__invoke($valueHolder79799, $this, '__unset', array('name' => $name), $this->initializer07f7c) || 1) && $this->valueHolder79799 = $valueHolder79799;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder79799;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder79799;
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
        $this->initializer07f7c && ($this->initializer07f7c->__invoke($valueHolder79799, $this, '__clone', array(), $this->initializer07f7c) || 1) && $this->valueHolder79799 = $valueHolder79799;

        $this->valueHolder79799 = clone $this->valueHolder79799;
    }

    public function __sleep()
    {
        $this->initializer07f7c && ($this->initializer07f7c->__invoke($valueHolder79799, $this, '__sleep', array(), $this->initializer07f7c) || 1) && $this->valueHolder79799 = $valueHolder79799;

        return array('valueHolder79799');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer07f7c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer07f7c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer07f7c && ($this->initializer07f7c->__invoke($valueHolder79799, $this, 'initializeProxy', array(), $this->initializer07f7c) || 1) && $this->valueHolder79799 = $valueHolder79799;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder79799;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder79799;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
