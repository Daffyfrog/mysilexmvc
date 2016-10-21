<?php

namespace App\Users\Service;

class UserService
{
    protected $repo;

    public function __construct($repo)
    {
        $this->repo = $repo;
    }

    public function getAll()
    {
        return $this->repo->getAll();
    }

    public function getById($id)
    {
        return $this->repo->getById($id);
    }

    public function save($parameters)
    {
        if ($parameters['id']) {
            return $this->repo->update($parameters);
        } else {
            return $this->repo->insert($parameters);
        }
    }
}
