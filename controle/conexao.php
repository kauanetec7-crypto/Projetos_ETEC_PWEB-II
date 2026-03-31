<?php 
/*DataModulo do Delphi ou  do Lazarus*/
class Conexao
{
    /*FnConnection do Delphi ou ZeosConnection Lazarus*/
    private static $dbname ="olojinha";
    private static $host = "127.0.0.1";
    private static $user = "root";
    private static $pass = "";
    private static $con = null;

    public function _construpct()
    {
        throw new \Exception('Not Implemented');
    }

    /*cria a função que conecta no banco de dados*/
    public static function conectar(){
        if (null === self::$con){
        /*PHP 1 igual é igual recebe (:= recebe no delphi)
            php 2 iguais é igua sem fazer diferença de caracteres (=igual no delphi)
            PHP 3 iguais é igual fazendo diferença de caracteres (=Igual no delphi) ou lazarus)
            $nome1 = "Kauan";
            $nome2 = "kauan";
            if ($nome1 === $nome2){
            echo 'são diferentes mesmo tendo caracteres em maiusculo';}
        */
        try{
            self::$con = new PDO("mysql:host=".self::$host.";dbname=".self::$dbname,self::$user,self::$pass,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            
        }catch(Exception $erro){
            die($erro->getMessage());/*possivel erro de banco, tabela, atributo retorna a mensagem direta do banco*/
        }
    
        }
        return self::$con;
    }

    public static function desconectar()
    {
        self::$con = null;
    }
}
?>