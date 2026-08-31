<?php

require __DIR__ . '/classes/Pessoa.php';

require __DIR__ . '/classes/Aluno.php';

require __DIR__ . '/classes/Professor.php';

require __DIR__ . '/classes/Disciplina.php';

require __DIR__ . '/classes/Matricula.php';


//$pessoa1 = new Pessoa();
//$pessoa1->nome = 'Bruno';
//$pessoa1->telefone = '429984347';
//$pessoa1->email = 'sla@gmail.com';

$aluno1 = new Aluno();
$aluno1->ra = 'Stads238490';
$aluno1->nome = 'vitor';
//$aluno1->matriculas = [];

$Professor1 = new Professor();
$Professor1->nome = "claudinei";
$Professor1->email = 'claudinei@gmail.com';
$Professor1->titulacao = 'mestre';

$disciplina1 = new Disciplina();
$disciplina1->nome = 'Poo_web';

$matricula1 = new Matricula();

$matricula1->data = '20/08/2026';
$matricula1->aluno = $aluno1;

var_dump($matricula1);


die;