<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Auteur extends \App\Entity\Auteur implements \Doctrine\ORM\Proxy\InternalProxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as __load;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'Livres' => [parent::class, 'Livres', null],
        "\0".parent::class."\0".'dateNaissance' => [parent::class, 'dateNaissance', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'nom' => [parent::class, 'nom', null],
        "\0".parent::class."\0".'prenom' => [parent::class, 'prenom', null],
        'Livres' => [parent::class, 'Livres', null],
        'dateNaissance' => [parent::class, 'dateNaissance', null],
        'id' => [parent::class, 'id', null],
        'nom' => [parent::class, 'nom', null],
        'prenom' => [parent::class, 'prenom', null],
    ];

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"]);

        return $properties;
    }
}
