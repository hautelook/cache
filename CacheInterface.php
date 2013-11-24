<?php

namespace Beryllium\Cache;

/**
 * Requirements for a cache implementation
 *
 * @package
 * @version $id$
 * @author Jeremy Livingston <jeremyjlivingston@gmail.com>
 * @license See LICENSE.md
 */
interface CacheInterface
{
    /**
     * Retrieve the value corresponding to a provided key
     *
     * @param string $key Unique identifier
     * @return mixed Result from the cache
     */
    public function get($key);

    /**
     * Add a value to the cache under a unique key
     *
     * @param string $key Unique key to identify the data
     * @param mixed $value Data to store in the cache
     * @param int $ttl Lifetime for stored data (in seconds)
     * @return boolean
     */
    public function set($key, $value, $ttl);

    /**
     * Delete a value from the cache
     *
     * @param string $key
     * @return boolean
     */
    public function delete($key);
}
