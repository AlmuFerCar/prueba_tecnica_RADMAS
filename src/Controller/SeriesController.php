<?php

namespace App\Controller;

class SeriesController
{

    private Irepo $repository;

    function __construct(Irepo $repository){
        $this->repository=$repository;
    }
    function search ($request){
        $year=$request->getParameter('year');
        $creator=$request->getParameter('creator');
        $collection=$this->repository->getAll();

        $find   = $collection->find('year LIKE :year AND creator LIKE:creator');
        $result = $find
            ->bind(['year' => $year, 'creator' => $creator])
            ->execute();
        return $result;
    }
}