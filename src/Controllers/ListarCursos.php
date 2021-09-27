<?php

namespace Alura\Cursos\Controllers;

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Infra\EntityManagerCreator;
use Doctrine\Common\Persistence\ObjectRepository;

class ListarCursos implements InterfaceControladorRequisicao
{
    private ObjectRepository $repositorioDeCursos;

    public function __construct()
    {
        $entityManager = (new EntityManagerCreator())
            ->getEntityManager();
        $this->repositorioDeCursos = $entityManager
            ->getRepository(Curso::class);
    }



    public function processaRequisicao(): void
    {

        $cursos = $this->repositorioDeCursos->findAll();
        $titulo = "Lista de Cursos";
        require __DIR__ . '/../../view/cursos/listar-cursos.php';
    }

}