<?php

// require_once 'Clube.php';
// require_once 'ClubeDao.php';

// $clube = new Clube;
// $dao = new ClubeDao;

// // $clube->setId();
// $clube->setNome('Marco Oliveira');
// $clube->setRazaoSocial('Marco Oliveira');
// $clube->setCnpj('57484177000128');
// $clube->setCep('17052330');
// $clube->setRua('Teste');
// $clube->setNumero('1');
// $clube->setBairro('Teste');
// // $clube->setComplemento()
// $clube->setCidade('Bauru');
// $clube->setUf('SP');
// $clube->setTelefone('1132430816');
// $clube->setCelular('14981047450');
// $clube->setEmail('teste@teste.com');
// $clube->setSenha(md5('teste'));
// $clube->setCategoria(2);

// $dao->create($clube);

// require_once '../controller/CategoriaController.php';

// $controller = new CategoriaController;

// $controller->geraSelect();

// print("<pre>");print_r($dao->read(get_class($clube), null, null));print("</pre>");

// require_once '../controller/SessionController.php';

// $controller = new SessionController('Clube');

// $login = $controller->login('marco_oliveira94@live.com', 'm4rco@0103');

// print("<pre>");print_r($login);print("</pre>");

// require_once '../controller/MinhaPaginaAssinanteController.php';
// $_SESSION['id'] = 9;

// $controller = new MinhaPaginaAssinanteController;

// echo $controller->constroiFormCadastro();

// require_once 'PacoteDao.php';

// $dao = new PacoteDao;

// print_r($dao->read('Pacote', null, null));

// print("<pre>");print_r($controller);print("</pre>");

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
// 	require_once '../controller/MinhaPaginaClubeController.php';

// 	$controller = new MinhaPaginaClubeController;

// 	$controller->buscaResultadosVendasPacote($_POST);
// }

require_once '../controller/GeraPdf.php';

$pdfGen = new GeraPdf;

$html = <<<EOD
<table class="table table-striped table-hover">
													<thead>
														<tr><th>Pacotes</th>
														<th>Quantidade</th>
														<th>Valor Total</th>
													</tr></thead>
													<tbody class="resultadosVendasPacotes">
														
                    <tr>
                        <td>Thor Ragnarok</td>
                        <td>1</td>
                        <td>R$89.99</td>
                    </tr>
                													</tbody>
												</table>
EOD;

$pdfGen->criaPdf($html);

?>