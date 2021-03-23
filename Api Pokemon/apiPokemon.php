<!DOCTYPE HTML>
<html>

<head>
    <link rel="shortcut icon" href="https://i.imgur.com/zWezrQJ.png" />
   	<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>DEVzator | Pokémon</title>
</head>

<body class="bg-white">
<center>
	<header>
	<div class="pr-8" id="Menu1Container">
		<div class="shadow-md flex fixed bg-gradient-to-l from-blue-700 via-blue-500 to-blue-300 w-full px-3 md:px-20 pt-2 pb-2">
	            <div class="container flex items-center mx-auto">
	                <div>
	                    <a class="text-blue-100 hover:bg-blue-500 hover:text-white font-bold bg-blue-700 rounded p-2" href="index.php">DEVzator</a>
	                </div>	                
	                <div class="items-end flex-1 text-white font-bold hidden md:flex">
	                    <nav class="flex-1">
	                        <ul class="flex justify-end flex-1">
	                            	<li class="px-4 border-b-2 border-transparent hover:border-blue-200">
		                                <a href="posts.php" class="hover:text-blue-200 text-sm">Posts</a>
		                            </li>
		                            <li class="px-4 border-b-2 border-transparent hover:border-blue-200">
		                                <a href="user.php" class="hover:text-blue-200 text-sm">Usuários</a>
		                            </li>
		                            <li class="px-4 border-b-2 border-transparent hover:border-blue-200">
		                                <a href="seeDev.php" class="hover:text-blue-200 text-sm">DEVs Cadastrados</a>
		                            </li>
		                            <li class="px-4 border-b-2 border-transparent hover:border-blue-200">
		                                <a href="buscaProdutos.php" class="hover:text-blue-200 text-sm">Buscar Produtos</a>
		                            </li>
		                            <li class="px-4 border-b-2 border-transparent hover:border-blue-200">
										<a href="apiPokemon.php" class="hover:text-blue-200 text-sm">Pokémons</a>
		                            </li>
		                            <li class="px-4 border-b-2 border-transparent hover:border-blue-200">
										<a href="https://cristian.ambientedev.com/login.php?ret_link=%2F&type=notLogged" class="hover:text-blue-200 text-sm">Sair</a>
		                            </li>
	                        </ul>
	                    </nav>
	                </div>
	            </div>
	        </div>
	</div>
</header>
<div class="pt-16 bg-white ">
	<div class="bg-blue-300 my-8 mx-48 max-w-full shadow-lg rounded-md">
		<div class="mt-24 mb-12">
			<div class="grid grid-cols-6">
			    	<?php
				    $url = "https://www.canalti.com.br/api/pokemons.json";
				 
				    $ch = curl_init($url);
				    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
				    $pokemons = json_decode(curl_exec($ch));
				
				    foreach ($pokemons->pokemon as $poke) {
				    ?>
				    		<div class="m-4 p-4 text-white shadow-md rounded-lg bg-gradient-to-br from-yellow-500 via-yellow-300 to-yellow-500">
				    		 
				    		<?php
				    		
					        echo "<b>Nome: </b>" . $poke->name . "<br>";
					        echo "<b>Id: </b>" . $poke->id . "<br>";
					
					        foreach ($poke->type as $tipo) {
					            echo "<b>Tipo: </b>" . $tipo . "<br>";
					        }
					        
					        ?>
				    
				    		<img class="bg-gradient-to-bl shadow-md from-gray-500 via-gray-300 to-gray-500 rounded-xl p-4 mt-2" src="<?= $poke->img ?>">
				    		</div>
				    		
				    <?php
				    }
				   	?>
		</div>
	</div>
</div>
</center>
</body>

</html>