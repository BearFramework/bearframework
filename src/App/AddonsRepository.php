<?php

/*
 * Bear Framework
 * http://bearframework.com
 * Copyright (c) Ivo Petkov
 * Free to use under the MIT license.
 */

namespace BearFramework\App;

use BearFramework\App;

/**
 *  Provides a way to enable addons.
 */
class AddonsRepository
{

    /**
     *
     * @var array 
     */
    private $data = [];

    /**
     * Enables an addon.
     * 
     * @param string $id The id of the addon.
     * @throws \Exception
     * @return \BearFramework\App\AddonsRepository A reference to itself.
     */
    public function add(string $id): \BearFramework\App\AddonsRepository
    {
        if (!isset($this->data[$id])) {
            $registeredAddon = \BearFramework\Addons::get($id);
            if ($registeredAddon === null) {
                throw new \Exception('The addon ' . $id . ' is not registered!');
            }
            $app = App::get();
            $registeredAddonOptions = $registeredAddon->options;
            if (isset($registeredAddonOptions['require']) && is_array($registeredAddonOptions['require'])) {
                foreach ($registeredAddonOptions['require'] as $requiredAddonID) {
                    if (is_string($requiredAddonID) && !isset($this->data[$requiredAddonID])) {
                        $this->add($requiredAddonID);
                    }
                }
            }

            $dir = $registeredAddon->dir;
            $this->data[$id] = new \BearFramework\App\Addon($id, $dir);
            $app->context->add($dir);
        }
        return $this;
    }

    /**
     * Returns the enabled addon or null if not found.
     * 
     * @param string $id The id of the addon.
     * @return BearFramework\App\Addon|null The enabled addon or null if not found.
     */
    public function get(string $id): ?\BearFramework\App\Addon
    {
        if (isset($this->data[$id])) {
            return clone($this->data[$id]);
        }
        return null;
    }

    /**
     * Returns information whether an addon with the id specified is enabled.
     * 
     * @param string $id  The id of the addon.
     * @return bool TRUE if an addon with the name specified is enabled, FALSE otherwise.
     */
    public function exists(string $id): bool
    {
        return isset($this->data[$id]);
    }

    /**
     * Returns a list of all enabled addons.
     * 
     * @return \BearFramework\DataList|\BearFramework\App\Addon[] An array containing all enabled addons.
     */
    public function getList()
    {
        $list = new \BearFramework\DataList();
        foreach ($this->data as $addon) {
            $list[] = clone($addon);
        }
        return $list;
    }

}
