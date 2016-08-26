<?php
namespace Mapper;

/**
 * Description of DataMapperInterface
 *
 * @author Fawwaz
 */
//use ModelEntityInterface;

interface DataMapperInterface
{
    public function findById($id);
    public function findAll(array $conditions = array());
    public function insert($entity);
    public function update($entity);
    public function save($entity);
    public function delete($entity);
}

