<?php
	
	
	function defineCategoriaCompetidor( string $nome, string $idade) {
		$categorias = [];
		$categorias[] = "infantil";
		$categorias[] = "adolescente";
		$categorias[] = "adulto";
		$categorias[] = "idoso";
		
		if(validaNome($nome) && validaIdade($idade)) : ?string{
			removerMensagemErro();
			if ($idade >= 6 && $idade <= 12) {
				for ($i = 0; $i <= count($categorias); $i++) {
					if ($categorias[$i] == "infantil") {
						setarMensagemSucesso("O nadador ".$nome." compete na categoria ".$categorias[$i]);
						return null;
					}
				}
			}else if($idade >= 13 && $idade <= 18){
				for ($i = 0; $i <= count($categorias); $i++){
					if ($categorias[$i] == "adolescente"){
						setarMensagemSucesso("O nadador ".$nome." compete na categoria ".$categorias[$i]);
						return null;
					}
				}
			}else if ($idade <= 19 && $idade <= 40){
				for ($i = 0; $i <= count($categorias); $i++){
					if ($categorias[$i] == "adulto"){
						setarMensagemSucesso("O nadador ".$nome." compete na categoria ".$categorias[$i]);
						return null;
					}
				}
			}else{
				for ($i = 0; $i <= count($categorias); $i++){
					if ($categorias[$i] == "idoso"){
						setarMensagemSucesso("O nadador ".$nome." compete na categoria ".$categorias[$i]);
						return null;
					}
				}
			}
			
		}else{
			removerMensagemSucesso();
			return obterMensagemErro();
		}
	}
