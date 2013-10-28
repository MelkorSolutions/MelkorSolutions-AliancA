<?php
class Application_Model_Empresa
{
   public function select()
   {
      
   }

   public function find()
   {
      
   }
 
   public function insert(array $request)
   {
      $dao = new Application_Model_DbTable_Empresa();
      $dados = array(
        'A1_BAIRRO' => $request['bairro'],
        'A1_CEP' => $request['cep'],
        'A1_CIDADE' => $request['cidade'],
        'A1_CNPJ'  => $request['cnpj'],
//        'A1_DATAEXP'  => $request['bairro'],
//        'A1_DATALNC'
//        'A1_DEL'
        'A1_EMAIL' => $request['email'],
        'A1_END' => $request['logradouro'],
        'A1_ESTADO' => $request['uf'],
        'A1_NOME' => $request['nomeEmpresa'],
        'A1_TELEFONE'  => $request['telefone']
//        'A1_TPLNC'
//         'A1_NOME' => $request['nomeEmpresa'],
//         'A1_TELEFONE' => $request['telefone'],
//         'A1_EMAIL' => $request['email']
      );
      
      return $dao->insert($dados);
   }
 
   public function update()
   {
      
   }
 
   public function delete()
   {
      
   }
}
?>
