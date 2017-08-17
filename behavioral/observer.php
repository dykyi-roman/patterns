<?php

/**
 * Class Client
 */
class Client implements SplObserver
{
    public function update(SplSubject $subject)
    {
        $userId = $subject->getId();
        return $userId.'change';
    }
}

/**
 * Class Customer
 */
class Customer implements SplObserver
{
    public function update(SplSubject $subject)
    {
        $userId = $subject->getId();
        return $userId.'change';
    }
}

/**
 * Class ObserverAbstract
 */
abstract class ObserverAbstract implements SplSubject
{
    // Array of observers
    private $_observers = [];

    public function attach(SplObserver $observer)
    {
        $hash = spl_object_hash($observer);
        if(!isset ($this->_observers[$hash])) {
            $this->_observers[$hash] = $observer;
        }
    }

    public function detach(SplObserver $observer)
    {
        unset($this->_observers[spl_object_hash($observer)]);
    }

    /**
     * Implement SplSubject method
     */
    public function notify()
    {
        foreach($this->_observers as $value) {
            $value->update($this);
        }
    }
}

/**
 * Class Product
 */
class Product extends ObserverAbstract
{
    private $_userId;

    public function setId($userId)
    {
        $this->_userId = $userId;
    }

    public function getId()
    {
        return $this->_userId;
    }

    public function delete($userId)
    {
        $this->setId($userId);
        // delete and notify...
        $this->notify();
    }
}
