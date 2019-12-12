<?php 
header('Content-Type: application/json');
    $calendario = [
        [
            'team_1' => 'Inter',
            'team_2' => 'Roma',
            'punteggio_team_1' => 0,
            'punteggio_team_2' => 0
        ],
        [
            'team_1' => 'Atalanta',
            'team_2' => 'Verona',
            'punteggio_team_1' => 3,
            'punteggio_team_2' => 2
        ],
        [
            'team_1' => 'Udinese',
            'team_2' => 'Napoli',
            'punteggio_team_1' => 1,
            'punteggio_team_2' => 1
        ],
        [
            'team_1' => 'Lazio',
            'team_2' => 'Juventus',
            'punteggio_team_1' => 3,
            'punteggio_team_2' => 1
        ],
        [
            'team_1' => 'Lecce',
            'team_2' => 'Genoa',
            'punteggio_team_1' => 2,
            'punteggio_team_2' => 2
        ],
        [
            'team_1' => 'Spal',
            'team_2' => 'Brescia',
            'punteggio_team_1' => 0,
            'punteggio_team_2' => 1
        ],
        [
            'team_1' => 'Sassuolo',
            'team_2' => 'Cagliari',
            'punteggio_team_1' => 2,
            'punteggio_team_2' => 2
        ],
        [
            'team_1' => 'Torino',
            'team_2' => 'Fiorentina',
            'punteggio_team_1' => 2,
            'punteggio_team_2' => 1
        ],
        [
            'team_1' => 'Sampdoria',
            'team_2' => 'Parma',
            'punteggio_team_1' => 0,
            'punteggio_team_2' => 1
        ],
        [
            'team_1' => 'Bologna',
            'team_2' => 'Milan',
            'punteggio_team_1' => 2,
            'punteggio_team_2' => 3
        ],
    ];


    echo json_encode($calendario);