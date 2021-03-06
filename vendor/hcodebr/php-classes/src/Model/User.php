<?php

namespace Hcode\Model;

#use Exception;
use \Hcode\DB\Sqlpgsql;
use \Hcode\Model;

class User extends Model
{

    const SESSION = "User";

    public static function login($usu_rs, $password)
    {

        $sql = new Sqlpgsql();

        $results = $sql->select("SELECT * FROM tb_usuario WHERE usu_rs = :usu_rs", array(
            ":usu_rs"=>$usu_rs
        ));

        if (count($results) === 0) 
        {
            throw new \Exception("Usuário inexistente ou senha inválida.");
        }

        $data = $results[0];

        if (password_verify($password, $data["usu_cd_senha"]) === true) 
        {
            
            $user = new User();

            $user->setData($data);

            $_SESSION[User::SESSION] = $user->getValues();

            return $user;

        } else {
            throw new \Exception("Usuário inexistente ou senha inválida.");
        }

    }

    public static function verifyLogin($inadmin = true)
    {

        if (
            !isset($_SESSION[User::SESSION])
            ||
            !$_SESSION[User::SESSION]
        ) {
            header("Location: /");
            exit;
        }

    }

    public static function logout()
    {

        $_SESSION[User::SESSION] = NULL;

    }

    public static function listAll()
    {

        $sql = new Sqlpgsql();

        return $sql->select("SELECT * FROM tb_users a INNER JOIN tb_persons b USING(idperson) ORDER BY desperson");

    }

    public function save()
    {

        $sql = new Sqlpgsql();

        $results = $sql->select("CALL sp_users_save(:desperson, :deslogin, :despassword, :desemail, :nrphone, :inadmin)", array(
            ":desperson"=>$this->getdesperson(),
            ":deslogin"=>$this->getdeslogin(),
            ":despassword"=>$this->getdespassword(),
            ":desemail"=>$this->getdesemail(),
            ":nrphone"=>$this->getnrphone(),
            ":inadmin"=>$this->getinadmin()
        ));

        $this->setData($results[0]);

    }

    public function get($iduser)
    {

        $sql = new Sqlpgsql();

        $results = $sql->select("SELECT * FROM tb_users a INNER JOIN tb_persons b USING(idperson) WHERE a.iduser = :iduser", array(
            "iduser"=>$iduser
        ));

        $this->setData($results[0]);

    }

    public function update()
    {

        $sql = new Sqlpgsql();

        $results = $sql->select("CALL sp_usersupdate_save(:iduser, :desperson, :deslogin, :despassword, :desemail, :nrphone, :inadmin)", array(
            ":iduser"=>$this->getiduser(),
            ":desperson"=>$this->getdesperson(),
            ":deslogin"=>$this->getdeslogin(),
            ":despassword"=>$this->getdespassword(),
            ":desemail"=>$this->getdesemail(),
            ":nrphone"=>$this->getnrphone(),
            ":inadmin"=>$this->getinadmin()
        ));

        $this->setData($results[0]);

    }

    public function delete()
    {

        $sql = new Sqlpgsql();

        $sql->query("CALL sp_users_delete(:iduser)", array(
            ":iduser"=>$this->getiduser()
        ));

    }
/*
    public static function getForgot($email)
    {

        $sql = new Sqlpgsql();

        $results = $sql->select("
        SELECT * 
        FROM tb_presosns a 
        INNER JOIN tb_users b USING(idperson) 
        WHERE a,desemail = :email", 
        array(
            ":email"=>$email
        ));

        if (count($results) === 0) 
        {

            throw new \Exception("Email não cadastrado em nossa base de dados.");
            
        }
        else
        {

            $data = $results[0];

            $results2 = $sql->select("CALL sp_userpasswordsrecoveries_create(:iduser, :desip)", array(
                ":iduser"=>$data["iduser"],
                ":desip"=>$_SERVER["REMOTE_ADDR"]
            ));

            if (count($results2) === 0 ) 
            {
                throw new \Exception("Não foi possível recuperar a senha");
            }
            else
            {

                $dataRecovery = $results2[0];

                $code = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_128, User::SECRET, $dataRecovery["idrecovery"], MCRYPT_MODE_ECB));

            }

        }

    }
    */

}