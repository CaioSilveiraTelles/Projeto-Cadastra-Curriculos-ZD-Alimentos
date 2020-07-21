<?php

use Illuminate\Database\Seeder;
use App\Skill;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dev_skills = [            
            ['description' => 'Laravel'],
            ['description' => 'PHP'],
            ['description' => 'Phyton'],
            ['description' => 'SQL'],
            ['description' => 'SQLite'],
            ['description' => 'Scrum'],
            ['description' => 'Java'],
            ['description' => 'Android'],
            ['description' => 'Flex'],
            ['description' => 'Postgre'],
            ['description' => 'SQL Server'],
            ['description' => 'AndroidX'],
            ['description' => 'Javascript'],
            ['description' => 'HTML'],
            ['description' => 'HTML5'],
            ['description' => 'JQuery'],
            ['description' => 'Composer'],
            ['description' => 'CSS'],
            ['description' => 'Bootstrap'],
            ['description' => 'Sublime'],
            ['description' => 'Visual Studio Code (VScode)'],
            ['description' => 'Joomla'],
            ['description' => 'NPM'],
            ['description' => 'ES6'],
            ['description' => 'ES7'],
            ['description' => 'GITLAB'],
            ['description' => 'Git'],
            ['description' => 'Github'],
            ['description' => 'Bitbucket'],
            ['description' => 'API'],
            ['description' => 'REST'],
            ['description' => 'SOAP'],
            ['description' => 'Android Studio'],
        ];
        $contab_skills = [            
            ['description' => 'Domínio sistemas'],
            ['description' => 'Lucro Real'],
            ['description' => 'Lucro presumido'],
            ['description' => 'Simples Nacional'],
            ['description' => 'Demonstrações coontábeis'],
            ['description' => 'IRPF'],
            ['description' => 'Declarações Anuais'],
            ['description' => 'ECF'],
            ['description' => 'ECD'],
            ['description' => 'Protheus'],
            ['description' => 'Totvs'],
            ['description' => 'Defis'],
            ['description' => 'Coordenação'],
            ['description' => 'Perdcomp'],
            ['description' => 'Conciliação'],
            ['description' => 'Lançamentos'],
            ['description' => 'Lalur'],
        ];
        $dep_pessoal_skills = [
            ['description' => 'Prolabore'],
            ['description' => 'Férias'],
            ['description' => 'Recisões'],
            ['description' => 'DCTF WEB'],
            ['description' => 'INSS'],
            ['description' => 'FGTS'],
            ['description' => 'E-Social'],
            ['description' => 'IRRF'],
        ];
        foreach ($dev_skills as $skill) {
            Skill::create($skill);
        }
        foreach ($contab_skills as $skill) {
            Skill::create($skill);
        }
        foreach ($dep_pessoal_skills as $skill) {
            Skill::create($skill);
        }
    }
}
