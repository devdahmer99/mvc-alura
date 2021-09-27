<?php

namespace Alura\Cursos\Controllers;

class CadastrarCurso implements InterfaceControladorRequisicao
{
    public function processaRequisicao(): void
    {
        $titulo = 'Cadastrar Novo Curso';
        require __DIR__ . '/../../view/cursos/novo-curso.php';
    }
}