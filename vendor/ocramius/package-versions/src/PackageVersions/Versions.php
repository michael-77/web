<?php

declare(strict_types=1);

namespace PackageVersions;

/**
 * This class is generated by ocramius/package-versions, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 */
final class Versions
{
    public const ROOT_PACKAGE_NAME = '__root__';
    public const VERSIONS          = array (
  'composer/xdebug-handler' => '1.3.2@d17708133b6c276d6e42ef887a877866b909d892',
  'jean85/pretty-package-versions' => '1.2@75c7effcf3f77501d0e0caa75111aff4daa0dd48',
  'nette/bootstrap' => 'v2.4.6@268816e3f1bb7426c3a4ceec2bd38a036b532543',
  'nette/di' => 'v2.4.15@d0561b8f77e8ef2ed6d83328860e16c81a5a8649',
  'nette/finder' => 'v2.4.2@ee951a656cb8ac622e5dd33474a01fd2470505a0',
  'nette/neon' => 'v3.0.0@cbff32059cbdd8720deccf9e9eace6ee516f02eb',
  'nette/php-generator' => 'v3.2.1@9de4e093a130f7a1bd175198799ebc0efbac6924',
  'nette/robot-loader' => 'v3.1.0@fc76c70e740b10f091e502b2e393d0be912f38d4',
  'nette/utils' => 'v2.5.3@17b9f76f2abd0c943adfb556e56f2165460b15ce',
  'nikic/php-parser' => 'v4.2.1@5221f49a608808c1e4d436df32884cbc1b821ac0',
  'ocramius/package-versions' => '1.4.0@a4d4b60d0e60da2487bd21a2c6ac089f85570dbb',
  'phpstan/phpdoc-parser' => '0.3.1@2cc49f47c69b023eaf05b48e6529389893b13d74',
  'phpstan/phpstan' => '0.11.2@8e185a74004920419ee97bf9dc62e6a175e8dca5',
  'psr/log' => '1.1.0@6c001f1daafa3a3ac1d8ff69ee4db8e799a654dd',
  'symfony/console' => 'v4.2.3@1f0ad51dfde4da8a6070f06adc58b4e37cbb37a4',
  'symfony/contracts' => 'v1.0.2@1aa7ab2429c3d594dd70689604b5cf7421254cdf',
  'symfony/finder' => 'v4.2.3@ef71816cbb264988bb57fe6a73f610888b9aa70c',
  'symfony/polyfill-mbstring' => 'v1.10.0@c79c051f5b3a46be09205c73b80b346e4153e494',
  '__root__' => 'dev-master@e198c4db65320cce173bdde14ef08da5beb5d6d8',
);

    private function __construct()
    {
    }

    /**
     * @throws \OutOfBoundsException If a version cannot be located.
     */
    public static function getVersion(string $packageName) : string
    {
        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new \OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: cannot detect its version'
        );
    }
}