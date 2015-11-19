<?php declare(strict_types=1);
namespace Phan\Persistent;

/**
 * Objects implementing this interface can be
 * read from and written to a SQLite3 database
 */
interface ModelListInterface {

    /**
     * @return ModelOne[]
     * Get a list of models to write
     */
    abstract public function modelOneList() : array;

}
