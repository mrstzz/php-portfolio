<?php

$info = [
    'nome' => 'Matheus Montovaneli',
    'titulo' => 'Desenvolvedor Full-Stack | PHP',
    'bio' => 'Olá! Sou estudante de Ciência da Computação e um desenvolvedor apaixonado por criar soluções web eficientes e escaláveis. Meu foco está no backend com PHP mas também tenho experiência sólida em frontend moderno.',
    'avatar' => 'icons/fotoPerfil.jpg', 
    'links' => [
        [
            'nome' => 'GitHub',
            'url' => 'https://github.com/mrstzz',
            'icone' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.4a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>'
        ],
        [
            'nome' => 'LinkedIn',
            'url' => 'https://linkedin.com/in/matheus-montovaneli',
            'icone' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>'
        ]
    ]
];

$habilidades = [
    ['nome' => 'PHP', 'icone' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/php/php-original.svg'],
    ['nome' => 'Python', 'icone' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/python/python-original.svg'],
    ['nome' => 'Laravel', 'icone' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/laravel/laravel-original.svg'],
    ['nome' => 'JavaScript', 'icone' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/javascript/javascript-original.svg'],
    ['nome' => 'Bootstrap', 'icone' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/bootstrap/bootstrap-original.svg'],
    ['nome' => 'Tailwind CSS', 'icone' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/tailwindcss/tailwindcss-original-wordmark.svg'],
    ['nome' => 'MySQL', 'icone' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/mysql/mysql-original.svg'],
    ['nome' => 'PostgreSQL', 'icone' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/postgresql/postgresql-original.svg'],
    ['nome' => 'Docker', 'icone' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/docker/docker-original.svg'],
    ['nome' => 'Git', 'icone' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/git/git-original.svg'],
    ['nome' => 'Postman', 'icone' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/postman/postman-original.svg']
];

$projetos = [
    [
        'titulo' => 'Peppa  (em desenvolvimento)',
        'descricao' => 'Um sistema que conecta prestadores de serviço e comerciantes locais à cliente.',
        'imagem' => 'icons/dashboardPeppa.png',
        'link' => 'https://github.com/mrstzz/peppa',
        'tecnologias' => ['PHP', 'Bootstrap', 'API REST', 'MySQL']
    ],
    [
        'titulo' => 'Capsula do tempo (2023)',
        'descricao' => 'Este é um design de cápsula do tempo responsivo para exibir memórias em uma linha do tempo.',
        'imagem' => 'icons/capsula11.png', 
        'link' => 'https://github.com/mrstzz/nlw-spacetime',
        'tecnologias' => ['HTML', 'CSS']
    ],
    [
        'titulo' => 'TrampoAqui (2025)',
        'descricao' => 'Projeto Acâdemico ',
        'imagem' => 'icons/TrampoAqui.png',
        'link' => 'https://github.com/trampoaqui',
        'tecnologias' => ['PHP', 'MySQL', 'Bootstrap']
    ]
];


?>
<!DOCTYPE html>
<html lang="pt-br" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfólio | <?php echo htmlspecialchars($info['nome']); ?></title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'sans': ['Inter', 'ui-sans-serif', 'system-ui', '-apple-system', 'BlinkMacSystemFont', '"Segoe UI"', 'Roboto', '"Helvetica Neue"', 'Arial', '"Noto Sans"', 'sans-serif', '"Apple Color Emoji"', '"Segoe UI Emoji"', '"Segoe UI Symbol"', '"Noto Color Emoji"'],
                    }
                }
            }
        }
    </script>

    <style type="text/tailwindcss">
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;800&display=swap');
        body {
            font-family: 'Inter', sans-serif;
        }
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #111827; 
        }
        ::-webkit-scrollbar-thumb {
            background: #374151; 
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #4B5563; 
        }
    </style>
</head>
<body class="bg-gray-900 text-gray-200">

    <header class="bg-gray-900/80 backdrop-blur-md sticky top-0 z-50">
        <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="#home" class="text-2xl font-bold text-white hover:text-indigo-400 transition-colors">
                <?php echo htmlspecialchars($info['nome']); ?>
            </a>
            <div class="space-x-6">
                <a href="#habilidades" class="text-gray-300 hover:text-indigo-400 transition-colors">Habilidades</a>
                <a href="#projetos" class="text-gray-300 hover:text-indigo-400 transition-colors">Projetos</a>
                </div>
        </nav>
    </header>

    <main class="container mx-auto px-6">

        <section id="home" class="min-h-screen flex flex-col md:flex-row items-center justify-center py-20">
            <div class="md:w-1/2 text-center md:text-left">
                <h1 class="text-4xl md:text-6xl font-extrabold text-white leading-tight mb-4">
                    <?php echo htmlspecialchars($info['nome']); ?>
                </h1>
                <h2 class="text-2xl md:text-3xl font-medium text-indigo-400 mb-6">
                    <?php echo htmlspecialchars($info['titulo']); ?>
                </h2>
                <p class="text-lg text-gray-300 max-w-xl mb-8">
                    <?php echo htmlspecialchars($info['bio']); ?>
                </p>
                <div class="flex justify-center md:justify-start space-x-4">
                    <?php foreach ($info['links'] as $link): ?>
                        <a href="<?php echo htmlspecialchars($link['url']); ?>" 
                           target="_blank" 
                           rel="noopener noreferrer"
                           class="text-gray-400 hover:text-white bg-gray-800 hover:bg-indigo-600 transition-all duration-300 p-3 rounded-full flex items-center space-x-2">
                            <?php echo $link['icone']; // Renderiza o SVG ?>
                            <span class="hidden md:inline"><?php echo htmlspecialchars($link['nome']); ?></span>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="md:w-1/2 mt-10 md:mt-0 flex justify-center">
                <img src="<?php echo htmlspecialchars($info['avatar']); ?>" 
                     alt="Avatar de <?php echo htmlspecialchars($info['nome']); ?>" 
                     class="w-64 h-64 md:w-80 md:h-80 rounded-full object-cover shadow-2xl shadow-indigo-500/20 border-4 border-gray-800">
            </div>
        </section>

        <section id="habilidades" class="py-20">
            <h2 class="text-3xl font-bold text-center text-white mb-2">Minha Stack</h2>
            <p class="text-center text-gray-400 mb-12">Tecnologias e ferramentas que utilizo no dia a dia.</p>
            
            <div class="flex flex-wrap justify-center gap-6 max-w-4xl mx-auto">
                
                <?php foreach ($habilidades as $habilidade): ?>
                    <div class="flex flex-col items-center p-4 bg-gray-800 rounded-lg shadow-lg w-32 h-32 justify-center
                                transform transition-all duration-300 hover:scale-110 hover:bg-gray-700 cursor-default">
                        
                        <img 
                            src="<?php echo htmlspecialchars($habilidade['icone']); ?>" 
                            alt="Ícone <?php echo htmlspecialchars($habilidade['nome']); ?>" 
                            class="h-14 w-14 object-contain mb-2">
                            
                        <span class="text-gray-300 text-sm font-medium">
                            <?php echo htmlspecialchars($habilidade['nome']); ?>
                        </span>
                    </div>
                <?php endforeach; ?>

            </div>
        </section>
        <section id="projetos" class="py-20">
            <h2 class="text-3xl font-bold text-center text-white mb-12">Projetos em Destaque</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <?php foreach ($projetos as $projeto): ?>
                <div class="bg-gray-800 rounded-lg overflow-hidden shadow-xl transform transition-all duration-300 hover:scale-105 hover:shadow-indigo-500/30">
                    <img src="<?php echo htmlspecialchars($projeto['imagem']); ?>" 
                         alt="Imagem do <?php echo htmlspecialchars($projeto['titulo']); ?>" 
                         class="w-full h-48 object-cover">
                    
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-white mb-2">
                            <?php echo htmlspecialchars($projeto['titulo']); ?>
                        </h3>
                        <p class="text-gray-400 text-sm mb-4">
                            <?php echo htmlspecialchars($projeto['descricao']); ?>
                        </p>
                        
                        <h4 class="text-sm font-semibold text-gray-300 mb-2">Tecnologias:</h4>
                        <div class="flex flex-wrap gap-2 mb-6">
                            <?php foreach ($projeto['tecnologias'] as $tech): ?>
                                <span classclass="bg-gray-700 text-gray-300 text-xs font-medium px-2.5 py-0.5 rounded-full">
                                    <?php echo htmlspecialchars($tech); ?>
                                </span>
                            <?php endforeach; ?>
                        </div>

                        <a href="<?php echo htmlspecialchars($projeto['link']); ?>" 
                           target="_blank" 
                           rel="noopener noreferrer"
                           class="inline-block w-full text-center bg-indigo-600 text-white font-semibold px-4 py-2 rounded-lg hover:bg-indigo-700 transition-colors">
                           Ver Projeto no GitHub
                        </a>
                    </div>
                </div>
                <?php endforeach; ?>

            </div>
        </section>

    </main>

    <footer class="border-t border-gray-800 mt-20">
        <div class="container mx-auto px-6 py-8 text-center text-gray-500">
            <p>&copy; <?php echo date('Y'); ?> <?php echo htmlspecialchars($info['nome']); ?>. Todos os direitos reservados.</p>
        </div>
    </footer>

</body>
</html>