<?php

namespace douggonsouza\imwvg\controls;

use douggonsouza\mvc\control\controllers;
use douggonsouza\mvc\control\controllersInterface;
use douggonsouza\mvc\model\connection\conn;
use douggonsouza\routes\router;
use douggonsouza\propertys\propertysInterface;
use douggonsouza\logged\models\user;
use douggonsouza\logged\logged;
use douggonsouza\gentelela\benchmarck;
use douggonsouza\mvc\view\views;

class register extends controllers implements controllersInterface
{
    public function main(propertysInterface $info = null)
    {
        if(isset($_POST['pub_key']) && $_POST['pub_key'] == 'cmVnaXN0ZXIgY29udHJvbGxlcg=='){
            $user = new user();
            $_POST['password'] = md5($_POST['password']);
            $user->populate($_POST);

            conn::begin();

            if(!$user->save()){
                conn::rollback();
                router::setAlert('Erro durante o registro do usuário.', benchmarck::BADGE_DANGER); 
                return views::view('', $info, LOGIN);
            }

            if(!$user->exist()){
                conn::rollback();
                router::setAlert('Não encontrado usuário.', benchmarck::BADGE_DANGER); 
                return views::view('', $info, LOGIN);
            }

            // login
            if(!logged::in($user->info())){
                conn::rollback();
                router::setAlert('Erro no login do usuário.', benchmarck::BADGE_DANGER);
            };

            conn::commit();
            router::setAlert('Usuário registrado com sucesso.');
            return router::redirect("/admin/dashboard", $info);
        }

        return views::view('', $info, LOGIN);
    }
}
?>