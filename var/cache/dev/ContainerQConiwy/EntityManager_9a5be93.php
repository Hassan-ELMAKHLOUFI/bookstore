<?php

namespace ContainerQConiwy;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder581ed = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer3f094 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties20156 = [
        
    ];

    public function getConnection()
    {
        $this->initializer3f094 && ($this->initializer3f094->__invoke($valueHolder581ed, $this, 'getConnection', array(), $this->initializer3f094) || 1) && $this->valueHolder581ed = $valueHolder581ed;

        return $this->valueHolder581ed->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer3f094 && ($this->initializer3f094->__invoke($valueHolder581ed, $this, 'getMetadataFactory', array(), $this->initializer3f094) || 1) && $this->valueHolder581ed = $valueHolder581ed;

        return $this->valueHolder581ed->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer3f094 && ($this->initializer3f094->__invoke($valueHolder581ed, $this, 'getExpressionBuilder', array(), $this->initializer3f094) || 1) && $this->valueHolder581ed = $valueHolder581ed;

        return $this->valueHolder581ed->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer3f094 && ($this->initializer3f094->__invoke($valueHolder581ed, $this, 'beginTransaction', array(), $this->initializer3f094) || 1) && $this->valueHolder581ed = $valueHolder581ed;

        return $this->valueHolder581ed->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer3f094 && ($this->initializer3f094->__invoke($valueHolder581ed, $this, 'getCache', array(), $this->initializer3f094) || 1) && $this->valueHolder581ed = $valueHolder581ed;

        return $this->valueHolder581ed->getCache();
    }

    public function transactional($func)
    {
        $this->initializer3f094 && ($this->initializer3f094->__invoke($valueHolder581ed, $this, 'transactional', array('func' => $func), $this->initializer3f094) || 1) && $this->valueHolder581ed = $valueHolder581ed;

        return $this->valueHolder581ed->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer3f094 && ($this->initializer3f094->__invoke($valueHolder581ed, $this, 'wrapInTransaction', array('func' => $func), $this->initializer3f094) || 1) && $this->valueHolder581ed = $valueHolder581ed;

        return $this->valueHolder581ed->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer3f094 && ($this->initializer3f094->__invoke($valueHolder581ed, $this, 'commit', array(), $this->initializer3f094) || 1) && $this->valueHolder581ed = $valueHolder581ed;

        return $this->valueHolder581ed->commit();
    }

    public function rollback()
    {
        $this->initializer3f094 && ($this->initializer3f094->__invoke($valueHolder581ed, $this, 'rollback', array(), $this->initializer3f094) || 1) && $this->valueHolder581ed = $valueHolder581ed;

        return $this->valueHolder581ed->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer3f094 && ($this->initializer3f094->__invoke($valueHolder581ed, $this, 'getClassMetadata', array('className' => $className), $this->initializer3f094) || 1) && $this->valueHolder581ed = $valueHolder581ed;

        return $this->valueHolder581ed->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer3f094 && ($this->initializer3f094->__invoke($valueHolder581ed, $this, 'createQuery', array('dql' => $dql), $this->initializer3f094) || 1) && $this->valueHolder581ed = $valueHolder581ed;

        return $this->valueHolder581ed->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer3f094 && ($this->initializer3f094->__invoke($valueHolder581ed, $this, 'createNamedQuery', array('name' => $name), $this->initializer3f094) || 1) && $this->valueHolder581ed = $valueHolder581ed;

        return $this->valueHolder581ed->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer3f094 && ($this->initializer3f094->__invoke($valueHolder581ed, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer3f094) || 1) && $this->valueHolder581ed = $valueHolder581ed;

        return $this->valueHolder581ed->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer3f094 && ($this->initializer3f094->__invoke($valueHolder581ed, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer3f094) || 1) && $this->valueHolder581ed = $valueHolder581ed;

        return $this->valueHolder581ed->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer3f094 && ($this->initializer3f094->__invoke($valueHolder581ed, $this, 'createQueryBuilder', array(), $this->initializer3f094) || 1) && $this->valueHolder581ed = $valueHolder581ed;

        return $this->valueHolder581ed->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer3f094 && ($this->initializer3f094->__invoke($valueHolder581ed, $this, 'flush', array('entity' => $entity), $this->initializer3f094) || 1) && $this->valueHolder581ed = $valueHolder581ed;

        return $this->valueHolder581ed->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer3f094 && ($this->initializer3f094->__invoke($valueHolder581ed, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3f094) || 1) && $this->valueHolder581ed = $valueHolder581ed;

        return $this->valueHolder581ed->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer3f094 && ($this->initializer3f094->__invoke($valueHolder581ed, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer3f094) || 1) && $this->valueHolder581ed = $valueHolder581ed;

        return $this->valueHolder581ed->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer3f094 && ($this->initializer3f094->__invoke($valueHolder581ed, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer3f094) || 1) && $this->valueHolder581ed = $valueHolder581ed;

        return $this->valueHolder581ed->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer3f094 && ($this->initializer3f094->__invoke($valueHolder581ed, $this, 'clear', array('entityName' => $entityName), $this->initializer3f094) || 1) && $this->valueHolder581ed = $valueHolder581ed;

        return $this->valueHolder581ed->clear($entityName);
    }

    public function close()
    {
        $this->initializer3f094 && ($this->initializer3f094->__invoke($valueHolder581ed, $this, 'close', array(), $this->initializer3f094) || 1) && $this->valueHolder581ed = $valueHolder581ed;

        return $this->valueHolder581ed->close();
    }

    public function persist($entity)
    {
        $this->initializer3f094 && ($this->initializer3f094->__invoke($valueHolder581ed, $this, 'persist', array('entity' => $entity), $this->initializer3f094) || 1) && $this->valueHolder581ed = $valueHolder581ed;

        return $this->valueHolder581ed->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer3f094 && ($this->initializer3f094->__invoke($valueHolder581ed, $this, 'remove', array('entity' => $entity), $this->initializer3f094) || 1) && $this->valueHolder581ed = $valueHolder581ed;

        return $this->valueHolder581ed->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer3f094 && ($this->initializer3f094->__invoke($valueHolder581ed, $this, 'refresh', array('entity' => $entity), $this->initializer3f094) || 1) && $this->valueHolder581ed = $valueHolder581ed;

        return $this->valueHolder581ed->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer3f094 && ($this->initializer3f094->__invoke($valueHolder581ed, $this, 'detach', array('entity' => $entity), $this->initializer3f094) || 1) && $this->valueHolder581ed = $valueHolder581ed;

        return $this->valueHolder581ed->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer3f094 && ($this->initializer3f094->__invoke($valueHolder581ed, $this, 'merge', array('entity' => $entity), $this->initializer3f094) || 1) && $this->valueHolder581ed = $valueHolder581ed;

        return $this->valueHolder581ed->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer3f094 && ($this->initializer3f094->__invoke($valueHolder581ed, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer3f094) || 1) && $this->valueHolder581ed = $valueHolder581ed;

        return $this->valueHolder581ed->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer3f094 && ($this->initializer3f094->__invoke($valueHolder581ed, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3f094) || 1) && $this->valueHolder581ed = $valueHolder581ed;

        return $this->valueHolder581ed->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer3f094 && ($this->initializer3f094->__invoke($valueHolder581ed, $this, 'getRepository', array('entityName' => $entityName), $this->initializer3f094) || 1) && $this->valueHolder581ed = $valueHolder581ed;

        return $this->valueHolder581ed->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer3f094 && ($this->initializer3f094->__invoke($valueHolder581ed, $this, 'contains', array('entity' => $entity), $this->initializer3f094) || 1) && $this->valueHolder581ed = $valueHolder581ed;

        return $this->valueHolder581ed->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer3f094 && ($this->initializer3f094->__invoke($valueHolder581ed, $this, 'getEventManager', array(), $this->initializer3f094) || 1) && $this->valueHolder581ed = $valueHolder581ed;

        return $this->valueHolder581ed->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer3f094 && ($this->initializer3f094->__invoke($valueHolder581ed, $this, 'getConfiguration', array(), $this->initializer3f094) || 1) && $this->valueHolder581ed = $valueHolder581ed;

        return $this->valueHolder581ed->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer3f094 && ($this->initializer3f094->__invoke($valueHolder581ed, $this, 'isOpen', array(), $this->initializer3f094) || 1) && $this->valueHolder581ed = $valueHolder581ed;

        return $this->valueHolder581ed->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer3f094 && ($this->initializer3f094->__invoke($valueHolder581ed, $this, 'getUnitOfWork', array(), $this->initializer3f094) || 1) && $this->valueHolder581ed = $valueHolder581ed;

        return $this->valueHolder581ed->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer3f094 && ($this->initializer3f094->__invoke($valueHolder581ed, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3f094) || 1) && $this->valueHolder581ed = $valueHolder581ed;

        return $this->valueHolder581ed->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer3f094 && ($this->initializer3f094->__invoke($valueHolder581ed, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3f094) || 1) && $this->valueHolder581ed = $valueHolder581ed;

        return $this->valueHolder581ed->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer3f094 && ($this->initializer3f094->__invoke($valueHolder581ed, $this, 'getProxyFactory', array(), $this->initializer3f094) || 1) && $this->valueHolder581ed = $valueHolder581ed;

        return $this->valueHolder581ed->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer3f094 && ($this->initializer3f094->__invoke($valueHolder581ed, $this, 'initializeObject', array('obj' => $obj), $this->initializer3f094) || 1) && $this->valueHolder581ed = $valueHolder581ed;

        return $this->valueHolder581ed->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer3f094 && ($this->initializer3f094->__invoke($valueHolder581ed, $this, 'getFilters', array(), $this->initializer3f094) || 1) && $this->valueHolder581ed = $valueHolder581ed;

        return $this->valueHolder581ed->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer3f094 && ($this->initializer3f094->__invoke($valueHolder581ed, $this, 'isFiltersStateClean', array(), $this->initializer3f094) || 1) && $this->valueHolder581ed = $valueHolder581ed;

        return $this->valueHolder581ed->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer3f094 && ($this->initializer3f094->__invoke($valueHolder581ed, $this, 'hasFilters', array(), $this->initializer3f094) || 1) && $this->valueHolder581ed = $valueHolder581ed;

        return $this->valueHolder581ed->hasFilters();
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

        $instance->initializer3f094 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder581ed) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder581ed = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder581ed->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer3f094 && ($this->initializer3f094->__invoke($valueHolder581ed, $this, '__get', ['name' => $name], $this->initializer3f094) || 1) && $this->valueHolder581ed = $valueHolder581ed;

        if (isset(self::$publicProperties20156[$name])) {
            return $this->valueHolder581ed->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder581ed;

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

        $targetObject = $this->valueHolder581ed;
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
        $this->initializer3f094 && ($this->initializer3f094->__invoke($valueHolder581ed, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer3f094) || 1) && $this->valueHolder581ed = $valueHolder581ed;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder581ed;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder581ed;
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
        $this->initializer3f094 && ($this->initializer3f094->__invoke($valueHolder581ed, $this, '__isset', array('name' => $name), $this->initializer3f094) || 1) && $this->valueHolder581ed = $valueHolder581ed;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder581ed;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder581ed;
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
        $this->initializer3f094 && ($this->initializer3f094->__invoke($valueHolder581ed, $this, '__unset', array('name' => $name), $this->initializer3f094) || 1) && $this->valueHolder581ed = $valueHolder581ed;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder581ed;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder581ed;
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
        $this->initializer3f094 && ($this->initializer3f094->__invoke($valueHolder581ed, $this, '__clone', array(), $this->initializer3f094) || 1) && $this->valueHolder581ed = $valueHolder581ed;

        $this->valueHolder581ed = clone $this->valueHolder581ed;
    }

    public function __sleep()
    {
        $this->initializer3f094 && ($this->initializer3f094->__invoke($valueHolder581ed, $this, '__sleep', array(), $this->initializer3f094) || 1) && $this->valueHolder581ed = $valueHolder581ed;

        return array('valueHolder581ed');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer3f094 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer3f094;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer3f094 && ($this->initializer3f094->__invoke($valueHolder581ed, $this, 'initializeProxy', array(), $this->initializer3f094) || 1) && $this->valueHolder581ed = $valueHolder581ed;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder581ed;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder581ed;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
