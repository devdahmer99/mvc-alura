<?php

use Alura\Cursos\Controllers\{CadastrarCurso, Exclusao, ListarCursos, Persistencia};

$rotas = [
    '/listar-cursos' => ListarCursos::class,
    '/novo-curso' => CadastrarCurso::class,
    '/salvar-curso' => Persistencia::class,
    '/excluir-curso' => Exclusao::class
];

return $rotas;