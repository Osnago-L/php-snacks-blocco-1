
    <?php
        $partite = [
            [
                "teamCasa" => [
                    "nome" => "teamCasa",
                    "punti" => rand(20,70)
                ],
                "teamOspite" => [
                    "nome" => "teamOspite",
                    "punti" => rand(20,70)
                ],
            ],
            [
                "teamCasa" => [
                    "nome" => "teamCasa",
                    "punti" => rand(20,70)
                ],
                "teamOspite" => [
                    "nome" => "teamOspite",
                    "punti" => rand(20,70)
                ],
            ],
            [
                "teamCasa" => [
                    "nome" => "teamCasa",
                    "punti" => rand(20,70)
                ],
                "teamOspite" => [
                    "nome" => "teamOspite",
                    "punti" => rand(20,70)
                ],
            ],
            [
                "teamCasa" => [
                    "nome" => "teamCasa",
                    "punti" => rand(20,70)
                ],
                "teamOspite" => [
                    "nome" => "teamOspite",
                    "punti" => rand(20,70)
                ],
            ],
        ];
        for ($i=0; $i < sizeof($partite) ; $i++) { 
            echo $partite[$i]["teamCasa"]["nome"]."-".$partite[$i]["teamOspite"]["nome"]." | ".$partite[$i]["teamCasa"]["punti"]."-".$partite[$i]["teamOspite"]["punti"]."<br>"."<br>";
        };
    ?>
