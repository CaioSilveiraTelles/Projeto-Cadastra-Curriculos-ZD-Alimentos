<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

 class Helpers extends Model{

    public static function removeSpecialChar($value) {
        
        // $result  = preg_replace('/[^a-zA-Z0-9\s]/', '', $value);
        // $result  = preg_replace('/[^a-zA-Z0-9]/', '', $value);
        // return $result;
        $value = str_replace(' ', '-', $value); // Replaces all spaces with hyphens.
        $value = str_replace('-', '', $value); // Replaces all spaces with hyphens.
        $value = preg_replace('/[^A-Za-z0-9\-]/', '', $value); // Removes special chars.
        return preg_replace('/-+/', '-', $value); // Replaces multiple hyphens with single one.
    }


    public static function states() {
        $states = [
            'Janeiro'
            ,'Fevereiro'
            ,'Março'
            ,'Abril'
            ,'Maio'
            ,'Junho'
            ,'Julho'
            ,'Agosto'
            ,'Setembro'
            ,'Outubro'
            ,'Novembro'
            ,'Dezembro'
        ];
        return $states;
    }


    public static function formatarCNPJCPF($value) {
        $cnpj_cpf = preg_replace("/\D/", '', $value);
    
        if (strlen($cnpj_cpf) === 11) {
            return preg_replace("/(\d{3})(\d{3})(\d{3})(\d{2})/", "\$1.\$2.\$3-\$4", $cnpj_cpf);
        } 
        
        return preg_replace("/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/", "\$1.\$2.\$3/\$4-\$5", $cnpj_cpf);
    }
}
    