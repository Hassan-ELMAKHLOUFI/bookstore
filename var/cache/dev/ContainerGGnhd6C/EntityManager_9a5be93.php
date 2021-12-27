<?php

namespace ContainerGGnhd6C;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder1858c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere24c6 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesad56d = [
        
    ];

    public function getConnection()
    {
        $this->initializere24c6 && ($this->initializere24c6->__invoke($valueHolder1858c, $this, 'getConnection', array(), $this->initializere24c6) || 1) && $this->valueHolder1858c = $valueHolder1858c;

        return $this->valueHolder1858c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializere24c6 && ($this->initializere24c6->__invoke($valueHolder1858c, $this, 'getMetadataFactory', array(), $this->initializere24c6) || 1) && $this->valueHolder1858c = $valueHolder1858c;

        return $this->valueHolder1858c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializere24c6 && ($this->initializere24c6->__invoke($valueHolder1858c, $this, 'getExpressionBuilder', array(), $this->initializere24c6) || 1) && $this->valueHolder1858c = $valueHolder1858c;

        return $this->valueHolder1858c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializere24c6 && ($this->initializere24c6->__invoke($valueHolder1858c, $this, 'beginTransaction', array(), $this->initializere24c6) || 1) && $this->valueHolder1858c = $valueHolder1858c;

        return $this->valueHolder1858c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializere24c6 && ($this->initializere24c6->__invoke($valueHolder1858c, $this, 'getCache', array(), $this->initializere24c6) || 1) && $this->valueHolder1858c = $valueHolder1858c;

        return $this->valueHolder1858c->getCache();
    }

    public function transactional($func)
    {
        $this->initializere24c6 && ($this->initializere24c6->__invoke($valueHolder1858c, $this, 'transactional', array('func' => $func), $this->initializere24c6) || 1) && $this->valueHolder1858c = $valueHolder1858c;

        return $this->valueHolder1858c->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializere24c6 && ($this->initializere24c6->__invoke($valueHolder1858c, $this, 'wrapInTransaction', array('func' => $func), $this->initializere24c6) || 1) && $this->valueHolder1858c = $valueHolder1858c;

        return $this->valueHolder1858c->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializere24c6 && ($this->initializere24c6->__invoke($valueHolder1858c, $this, 'commit', array(), $this->initializere24c6) || 1) && $this->valueHolder1858c = $valueHolder1858c;

        return $this->valueHolder1858c->commit();
    }

    public function rollback()
    {
        $this->initializere24c6 && ($this->initializere24c6->__invoke($valueHolder1858c, $this, 'rollback', array(), $this->initializere24c6) || 1) && $this->valueHolder1858c = $valueHolder1858c;

        return $this->valueHolder1858c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializere24c6 && ($this->initializere24c6->__invoke($valueHolder1858c, $this, 'getClassMetadata', array('className' => $className), $this->initializere24c6) || 1) && $this->valueHolder1858c = $valueHolder1858c;

        return $this->valueHolder1858c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializere24c6 && ($this->initializere24c6->__invoke($valueHolder1858c, $this, 'createQuery', array('dql' => $dql), $this->initializere24c6) || 1) && $this->valueHolder1858c = $valueHolder1858c;

        return $this->valueHolder1858c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializere24c6 && ($this->initializere24c6->__invoke($valueHolder1858c, $this, 'createNamedQuery', array('name' => $name), $this->initializere24c6) || 1) && $this->valueHolder1858c = $valueHolder1858c;

        return $this->valueHolder1858c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializere24c6 && ($this->initializere24c6->__invoke($valueHolder1858c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializere24c6) || 1) && $this->valueHolder1858c = $valueHolder1858c;

        return $this->valueHolder1858c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializere24c6 && ($this->initializere24c6->__invoke($valueHolder1858c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializere24c6) || 1) && $this->valueHolder1858c = $valueHolder1858c;

        return $this->valueHolder1858c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializere24c6 && ($this->initializere24c6->__invoke($valueHolder1858c, $this, 'createQueryBuilder', array(), $this->initializere24c6) || 1) && $this->valueHolder1858c = $valueHolder1858c;

        return $this->valueHolder1858c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializere24c6 && ($this->initializere24c6->__invoke($valueHolder1858c, $this, 'flush', array('entity' => $entity), $this->initializere24c6) || 1) && $this->valueHolder1858c = $valueHolder1858c;

        return $this->valueHolder1858c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializere24c6 && ($this->initializere24c6->__invoke($valueHolder1858c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere24c6) || 1) && $this->valueHolder1858c = $valueHolder1858c;

        return $this->valueHolder1858c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializere24c6 && ($this->initializere24c6->__invoke($valueHolder1858c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializere24c6) || 1) && $this->valueHolder1858c = $valueHolder1858c;

        return $this->valueHolder1858c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializere24c6 && ($this->initializere24c6->__invoke($valueHolder1858c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializere24c6) || 1) && $this->valueHolder1858c = $valueHolder1858c;

        return $this->valueHolder1858c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializere24c6 && ($this->initializere24c6->__invoke($valueHolder1858c, $this, 'clear', array('entityName' => $entityName), $this->initializere24c6) || 1) && $this->valueHolder1858c = $valueHolder1858c;

        return $this->valueHolder1858c->clear($entityName);
    }

    public function close()
    {
        $this->initializere24c6 && ($this->initializere24c6->__invoke($valueHolder1858c, $this, 'close', array(), $this->initializere24c6) || 1) && $this->valueHolder1858c = $valueHolder1858c;

        return $this->valueHolder1858c->close();
    }

    public function persist($entity)
    {
        $this->initializere24c6 && ($this->initializere24c6->__invoke($valueHolder1858c, $this, 'persist', array('entity' => $entity), $this->initializere24c6) || 1) && $this->valueHolder1858c = $valueHolder1858c;

        return $this->valueHolder1858c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializere24c6 && ($this->initializere24c6->__invoke($valueHolder1858c, $this, 'remove', array('entity' => $entity), $this->initializere24c6) || 1) && $this->valueHolder1858c = $valueHolder1858c;

        return $this->valueHolder1858c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializere24c6 && ($this->initializere24c6->__invoke($valueHolder1858c, $this, 'refresh', array('entity' => $entity), $this->initializere24c6) || 1) && $this->valueHolder1858c = $valueHolder1858c;

        return $this->valueHolder1858c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializere24c6 && ($this->initializere24c6->__invoke($valueHolder1858c, $this, 'detach', array('entity' => $entity), $this->initializere24c6) || 1) && $this->valueHolder1858c = $valueHolder1858c;

        return $this->valueHolder1858c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializere24c6 && ($this->initializere24c6->__invoke($valueHolder1858c, $this, 'merge', array('entity' => $entity), $this->initializere24c6) || 1) && $this->valueHolder1858c = $valueHolder1858c;

        return $this->valueHolder1858c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializere24c6 && ($this->initializere24c6->__invoke($valueHolder1858c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializere24c6) || 1) && $this->valueHolder1858c = $valueHolder1858c;

        return $this->valueHolder1858c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializere24c6 && ($this->initializere24c6->__invoke($valueHolder1858c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere24c6) || 1) && $this->valueHolder1858c = $valueHolder1858c;

        return $this->valueHolder1858c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializere24c6 && ($this->initializere24c6->__invoke($valueHolder1858c, $this, 'getRepository', array('entityName' => $entityName), $this->initializere24c6) || 1) && $this->valueHolder1858c = $valueHolder1858c;

        return $this->valueHolder1858c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializere24c6 && ($this->initializere24c6->__invoke($valueHolder1858c, $this, 'contains', array('entity' => $entity), $this->initializere24c6) || 1) && $this->valueHolder1858c = $valueHolder1858c;

        return $this->valueHolder1858c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializere24c6 && ($this->initializere24c6->__invoke($valueHolder1858c, $this, 'getEventManager', array(), $this->initializere24c6) || 1) && $this->valueHolder1858c = $valueHolder1858c;

        return $this->valueHolder1858c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializere24c6 && ($this->initializere24c6->__invoke($valueHolder1858c, $this, 'getConfiguration', array(), $this->initializere24c6) || 1) && $this->valueHolder1858c = $valueHolder1858c;

        return $this->valueHolder1858c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializere24c6 && ($this->initializere24c6->__invoke($valueHolder1858c, $this, 'isOpen', array(), $this->initializere24c6) || 1) && $this->valueHolder1858c = $valueHolder1858c;

        return $this->valueHolder1858c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializere24c6 && ($this->initializere24c6->__invoke($valueHolder1858c, $this, 'getUnitOfWork', array(), $this->initializere24c6) || 1) && $this->valueHolder1858c = $valueHolder1858c;

        return $this->valueHolder1858c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializere24c6 && ($this->initializere24c6->__invoke($valueHolder1858c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializere24c6) || 1) && $this->valueHolder1858c = $valueHolder1858c;

        return $this->valueHolder1858c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializere24c6 && ($this->initializere24c6->__invoke($valueHolder1858c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializere24c6) || 1) && $this->valueHolder1858c = $valueHolder1858c;

        return $this->valueHolder1858c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializere24c6 && ($this->initializere24c6->__invoke($valueHolder1858c, $this, 'getProxyFactory', array(), $this->initializere24c6) || 1) && $this->valueHolder1858c = $valueHolder1858c;

        return $this->valueHolder1858c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializere24c6 && ($this->initializere24c6->__invoke($valueHolder1858c, $this, 'initializeObject', array('obj' => $obj), $this->initializere24c6) || 1) && $this->valueHolder1858c = $valueHolder1858c;

        return $this->valueHolder1858c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializere24c6 && ($this->initializere24c6->__invoke($valueHolder1858c, $this, 'getFilters', array(), $this->initializere24c6) || 1) && $this->valueHolder1858c = $valueHolder1858c;

        return $this->valueHolder1858c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializere24c6 && ($this->initializere24c6->__invoke($valueHolder1858c, $this, 'isFiltersStateClean', array(), $this->initializere24c6) || 1) && $this->valueHolder1858c = $valueHolder1858c;

        return $this->valueHolder1858c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializere24c6 && ($this->initializere24c6->__invoke($valueHolder1858c, $this, 'hasFilters', array(), $this->initializere24c6) || 1) && $this->valueHolder1858c = $valueHolder1858c;

        return $this->valueHolder1858c->hasFilters();
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

        $instance->initializere24c6 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder1858c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder1858c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder1858c->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializere24c6 && ($this->initializere24c6->__invoke($valueHolder1858c, $this, '__get', ['name' => $name], $this->initializere24c6) || 1) && $this->valueHolder1858c = $valueHolder1858c;

        if (isset(self::$publicPropertiesad56d[$name])) {
            return $this->valueHolder1858c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1858c;

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

        $targetObject = $this->valueHolder1858c;
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
        $this->initializere24c6 && ($this->initializere24c6->__invoke($valueHolder1858c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere24c6) || 1) && $this->valueHolder1858c = $valueHolder1858c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1858c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder1858c;
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
        $this->initializere24c6 && ($this->initializere24c6->__invoke($valueHolder1858c, $this, '__isset', array('name' => $name), $this->initializere24c6) || 1) && $this->valueHolder1858c = $valueHolder1858c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1858c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder1858c;
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
        $this->initializere24c6 && ($this->initializere24c6->__invoke($valueHolder1858c, $this, '__unset', array('name' => $name), $this->initializere24c6) || 1) && $this->valueHolder1858c = $valueHolder1858c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1858c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder1858c;
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
        $this->initializere24c6 && ($this->initializere24c6->__invoke($valueHolder1858c, $this, '__clone', array(), $this->initializere24c6) || 1) && $this->valueHolder1858c = $valueHolder1858c;

        $this->valueHolder1858c = clone $this->valueHolder1858c;
    }

    public function __sleep()
    {
        $this->initializere24c6 && ($this->initializere24c6->__invoke($valueHolder1858c, $this, '__sleep', array(), $this->initializere24c6) || 1) && $this->valueHolder1858c = $valueHolder1858c;

        return array('valueHolder1858c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializere24c6 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializere24c6;
    }

    public function initializeProxy() : bool
    {
        return $this->initializere24c6 && ($this->initializere24c6->__invoke($valueHolder1858c, $this, 'initializeProxy', array(), $this->initializere24c6) || 1) && $this->valueHolder1858c = $valueHolder1858c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder1858c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder1858c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
