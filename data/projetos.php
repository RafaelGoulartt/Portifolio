<?php

$statusMap = [
    'completed' => [
        'class' => 'status-completed',
        'text'  => 'Concluído'
    ],
    'in_progress' => [
        'class' => 'status-progress',
        'text'  => 'Em andamento'
    ]
];


$projetos = [
  'newspace' => [
    'slug' => 'newspace',
    'categoria' => 'Web',
    'status' => 'completed',
    'titulo' => [
      'pt' => 'NewSpace',
      'en' => 'NewSpace'
    ],
    'descricao_curta' => [
      'pt' => 'LadingPage de salão de beleza',
      'en' => 'Landing Page for beauty salon'
    ],
    'descricao_longa' => [
      'pt' => 'LadingPage de salão de beleza',
      'en' => 'Landing Page for beauty salon'
    ],
    'stack' => 'PHP · Bootstrap',
    'imagem' => 'assets/img/Newspace.png',
    'imagemProject' => 'assets/img/Newspace.png'
  ],

  'ecommerce' => [
    'slug' => 'ecommerce',
    'categoria' => 'Fullstack',
    'status' => 'in_progress',
    'ano' => '2025',
    'titulo' => [
      'pt' => 'Sistema de E-commerce',
      'en' => 'E-commerce System'
    ],
    'descricao_curta' => [
      'pt' => 'Plataforma completa de vendas online',
      'en' => 'Complete online sales platform'
    ],
    'descricao_longa' => [
      'pt' => 'Sistema de e-commerce com carrinho, gestão de produtos, pedidos e integração com banco de dados.',
      'en' => 'E-commerce system with cart, product management, orders and database integration.'
    ],
    'stack' => 'PHP · SQL Server · Bootstrap',
    'imagem' => 'assets/img/eccomerceBase.png',
    'imagemProject' => 'assets/img/eccomerceBase.png'
  ],

];
