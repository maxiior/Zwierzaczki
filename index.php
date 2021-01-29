<?php

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=chrome,edge=1"/>

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">

        <title>Soccerstat</title>
        <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    </head>
    <body>
        <div id="app">
            <div id="header">
                <div class="container-fluid progress top">
                    <h1>Soccerstat.pl</h1>
                </div>
                <div class="bottom-bar">
                    <div class="all">
                        <div>ALL</div>
                    </div>
                    <div v-for="l in ligi" v-bind:key="l.id" class="liga">
                        <img :src="l.im">
                        <div>{{ l.title }}</div>
                    </div>
                </div>
                <div class="options">
                    <a v-for="(o, i) in opt" v-bind:key="o.id" href="#">
                        <button class="option" @click="useOption(i)">
                            <div>{{ o.title }}</div>
                        </button>
                    </a>
                </div>
            </div>

            <div id="matchs">
                <div >
                </div>
                <div class="wider-list">
                    <div class="list">
                        <a href="#">
                            <div v-for="m in mecze" v-bind:key="m.id" class="match">
                                <img v-if="m.league === 'LaLiga'" src="photos/hiszpania.jpeg">
                                <img v-else-if="m.league === 'Bundesliga'" src="photos/niemcy.jpeg">
                                <img v-else-if="m.league === 'Ligue 1'" src="photos/francja.jpeg">
                                <img v-else-if="m.league === 'Premier League'" src="photos/anglia.jpeg">
                                <img v-else-if="m.league === 'Serie A'" src="photos/wlochy.jpeg">
                                <div class="date">
                                    <span>{{ m.date }}</span>
                                </div>
                                <div class="info">
                                    <span v-if="m.whoWon === 1 || m.whoWon === 0" style="font-weight: bold;">{{ m.team1 }}</span>
                                    <span v-else>{{ m.team1 }}</span>
                                    <span>{{ m.score }}</span>
                                    <span v-if="m.whoWon === 2 || m.whoWon === 0" style="font-weight: bold;">{{ m.team2 }}</span>
                                    <span v-else>{{ m.team2 }}</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="padding"></div>

            <div id="footer">
                <div>
                    <div class="name">Soccerstat.pl</div>
                    <div>
                        Created by Maksim Brzezinski & Kacper Buczko & Miłosz Orliński & Dawid Bronszkiewicz
                    </div>
                </div>
            </div>

            <div id="overlay" v-if="showAddMatch">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add match</h5>
                            <button type="button" class="btn-close" @click="showAddMatch=false"></button>
                        </div>
                        <div class="modal-body p-4">
                            <form action="#" method="post">
                                <div class="mb-3">
                                    <input type="text" name="team1" class="form-control form-control-m" placeholder="Team 1">
                                </div>
                                <div class="mb-3">
                                    <input type="text" name="team2" class="form-control form-control-m" placeholder="Team 2">
                                </div>
                                <div class="mb-3">
                                    <input type="text" name="score" class="form-control form-control-m" placeholder="Score">
                                </div>
                                <div class="mb-3">
                                    <button class="btn btn-success w-100 btn-m">Add match</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div id="import" v-if="showImport">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Import data</h5>
                            <button type="button" class="btn-close" @click="showImport=false"></button>
                        </div>
                        <div class="modal-body p-4">
                            <div class="mb-3">
                                This function is for import database
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-success w-100 btn-m">Import data</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="export" v-if="showExport">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Export data</h5>
                            <button type="button" class="btn-close" @click="showExport=false"></button>
                        </div>
                        <div class="modal-body p-4">
                            <div class="mb-3">
                                This function is for export database
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-success w-100 btn-m">Export data</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <script type="text/javascript" src="main.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
