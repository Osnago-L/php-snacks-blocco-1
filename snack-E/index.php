
    <?php
        $alunni = [
            [
                "nome" => "Matteo",
                "cognome" => "Pompei",
                "voti"=>[
                    rand(1,100),
                    rand(1,100),
                    rand(1,100),
                    rand(1,100),
                    rand(1,100),
                ]
            ],
            [
                "nome" => "Lorenzo",
                "cognome" => "Bernardini",
                "voti"=>[
                    rand(1,100),
                    rand(1,100),
                    rand(1,100),
                    rand(1,100),
                    rand(1,100),
                ]
            ],
            [
                "nome" => "Milan",
                "cognome" => "*inserire-cognome-serbo-qui*",
                "voti"=>[
                    rand(1,100),
                    rand(1,100),
                    rand(1,100),
                    rand(1,100),
                    rand(1,100),
                ]
            ],
            [
                "nome" => "Simone",
                "cognome" => "Massaro",
                "voti"=>[
                    rand(1,100),
                    rand(1,100),
                    rand(1,100),
                    rand(1,100),
                    rand(1,100),
                ]
            ],
            [
                "nome" => "Matteo",
                "cognome" => "Salvalaggio",
                "voti"=>[
                    rand(1,100),
                    rand(1,100),
                    rand(1,100),
                    rand(1,100),
                    rand(1,100),
                ]
            ],
        ];

        for ($i=0; $i < sizeof($alunni) ; $i++) { 
            $sumVoti = 0;        
            for ($index=0; $index < sizeof($alunni[$i]["voti"]); $index++) { 
                $sumVoti += $alunni[$i]["voti"][$index];
            }
            echo $alunni[$i]["nome"]." ".$alunni[$i]["cognome"]." | ".($sumVoti/sizeof($alunni[$i]["voti"]))."<br>"."<br>";
        }
    ?>