<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquery-3.7.1.min.js"></script>
    <title>Breaking Bad Quiz</title>
    <style>
        body{
            background-color: #F7E733;
        }
        label{
            font-size: 22px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        input[type=text], input[type=mail]{
            width: 65%;
            background-color: #dee2e6;
            border-style: solid;
            border-color: black;
            border-radius: 5px;
        }
        input[type=number]{
            width: 20%;
            background-color: #dee2e6;
            border-style: solid;
            border-color: black;
            border-radius: 5px;
        }
        select{
            width: 67%;
            background-color: #dee2e6;
            border-style: solid;
            border-color: black;
            border-width: 2px;
            border-radius: 5px;
        }
        form{
            align-items: center;
        }
        .some{
            display: none;
        }
        .aparece{
            display: contents;
        }
        .btQuiz{
            font-size: 18px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #dee2e6;
            border-style: solid;
            border-color: black;
            border-radius: 5px;
            width: 160px;
            height: 30px;
        }
        .btEnviar{
            font-size: 18px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #dee2e6;
            border-style: solid;
            border-color: black;
            border-radius: 5px;
            width: 130px;
            height: 30px;
        }
        #formContainer{
            margin: auto;
            text-align: center;
            width: 25%;
            padding: 15px;
            border-radius: 25px;
            border-style: solid;
            background-color: #F7D500;
        }
        #textContainer{
            margin: auto;
            text-align: justify;
            width: 230px;
        }
        #Intro{
            font-family: Arial, Helvetica, sans-serif;
            font-size: 35px;
        }
        #TCadastro{
            font-family: Arial, Helvetica, sans-serif;
            font-size: 28px;
        }
        h2{
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-size: x-large;
            color: black;
            text-align: center;
        }
        .nomes{
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 20px;
            color: black;
        }
        input[type=radio]{
            width: 20px;
            height: 20px;
        }
        .perguntasContainer{
            background-color: #F7D500;
            width: 35%;
            margin: auto;
            padding: 4px;
            padding-bottom: 20px;
            border-radius: 25px;
            border-style: solid;
            border-width: 2px;
            border-color: black;
        }
        .centralizar{
            margin-left: auto;
            margin-right: auto;
        }
        .correct { color: green; }
        .wrong { color: red; }
    </style>
</head>
<body>
    <div class="<?= cadastro();?>" id="some">
        <center>
            <h1 id="Intro">Bem Vindo ao quiz sobre<br> Breaking  Bad!</h1>
        </center>
        <div id="formContainer">
            <h1 id="TCadastro">Faça um Cadastro!</h1>
            <form action="index.php" method="post" id="form">
                <div id="textContainer">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" id="nome" required> <br><br>
                    <label for="idade">Idade: </label>
                    <input type="number" min="1" max="130" name="idade" id="idade" required> <br><br>
                    <label for="email">E-mail:</label>
                    <input type="mail" name="email" id="email" required> <br><br>
                    <label for="">Ensino:</label>
                    <select name="select" id="select" required>
                        <option value=""></option>
                        <option value="Ensino Fundamental">Ensino Fundamental</option>
                        <option value="Ensino Médio">Ensino Médio</option>
                        <option value="Ensino Superior">Ensino Superior</option>
                        <option value="Pós Graduação">Pós Graduação</option>
                    </select> <br><br>
                    <center>
                    <button type="submit" class="btEnviar" id="btSubmit">Ir para o Quiz</button>
                    </center>
                    <?php
                        function quiz(){
                            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                                return '';
                            } else{
                                return "some";
                            };
                        };
                        function cadastro(){
                            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                                $some = "some";
                            } else{
                                $some = '';
                            }
                            return $some;
                        };
                        if($_SERVER['REQUEST_METHOD'] == 'POST'){
                            $nome = $_POST["nome"];
                            $idade = $_POST["idade"];
                            $email = $_POST["email"];
                            $ensino = $_POST["select"];
                        };
                    ?>
                </div>
            </form>
        </div>
        <center>
            <p style="line-height: 0.1;">*responda o quiz e descubra quantas acertou.</p> 
            <p style="line-height: 0.1;">*se você não responder alguma pergunta, será avisado.</p>
        </center>
    </div>
    <div id="quizDiv" class="<?= quiz()?>">
        <center>
            <h1 id="Intro">Breaking Bad:<br> 10 Perguntas</h1>
        </center>
        <div class="perguntasContainer" id="q1">
            <h2> 1.<br> O que Heisenberg pede para Declan responder no início do EP "Say My Name"?</h2> 
                <table class="centralizar">
                    <tr><td><label class="nomes">Who am I?</label></td><td><input type="radio" name="q1" value="0"></td></tr>
                    <tr><td><label class="nomes">Say my name.</label></td><td><input type="radio" name="q1" value="1"></td></tr>
                    <tr><td><label class="nomes">You're goddamn right!</label></td><td><input type="radio" name="q1" value="0"></td></tr>
                    <tr><td><label class="nomes">Cheese.</label></td><td><input type="radio" name="q1" value="0"></td></tr>
                </table>
        </div> <br>
        <div class="perguntasContainer" id="q2">
            <h2>2.<br> Qual é o produto que Heisenberg fabrica?</h2> 
                <table class="centralizar">
                    <tr><td><label class="nomes">LSD</label></td><td><input type="radio" name="q2" value="0"></td></tr>
                    <tr><td><label class="nomes">Cocaína</label></td><td><input type="radio" name="q2" value="0"></td></tr>
                    <tr><td><label class="nomes">Metanfetamina</label></td><td><input type="radio" name="q2" value="2"></td></tr>
                    <tr><td><label class="nomes">Maconha</label></td><td><input type="radio" name="q2" value="0"></td></tr>
                </table>
        </div> <br>
        <div class="perguntasContainer" id="q3">
            <h2>3.<br> Qual é a doença que aflinge Walter White?</h2> 
                <table class="centralizar">
                    <tr><td><label class="nomes">AIDS</label></td><td><input type="radio" name="q3" value="0"></td></tr>
                    <tr><td><label class="nomes">Câncer</label></td><td><input type="radio" name="q3" value="3"></td></tr>
                    <tr><td><label class="nomes">Alzheimer</label></td><td><input type="radio" name="q3" value="0"></td></tr>
                    <tr><td><label class="nomes">Osteoporose</label></td><td><input type="radio" name="q3" value="0"></td></tr>
                </table>
        </div> <br>
        <div class="perguntasContainer" id="q4">
            <h2>4.<br> Quem matou Gus Fring?</h2> 
                <table class="centralizar">
                    <tr><td><label class="nomes">Heisenberg</label></td><td><input type="radio" name="q4" value="4"></td></tr>
                    <tr><td><label class="nomes">Hector Salamanca</label></td><td><input type="radio" name="q4" value="0"></td></tr>
                    <tr><td><label class="nomes">Jesse Pinkman</label></td><td><input type="radio" name="q4" value="0"></td></tr>
                    <tr><td><label class="nomes">Hank Schrader</label></td><td><input type="radio" name="q4" value="0"></td></tr>
                </table>
        </div> <br>
        <div class="perguntasContainer" id="q5">
            <h2>5.<br> Em qual cidade a maior parte de BB se passa?</h2> 
                <table class="centralizar">
                    <tr><td><label class="nomes">Albuquerque</label></td><td><input type="radio" name="q5" value="5"></td></tr>
                    <tr><td><label class="nomes">Phoenix</label></td><td><input type="radio" name="q5" value="0"></td></tr>
                    <tr><td><label class="nomes">Dallas</label></td><td><input type="radio" name="q5" value="0"></td></tr>
                    <tr><td><label class="nomes">Houston</label></td><td><input type="radio" name="q5" value="0"></td></tr>
                </table>
        </div> <br>
        <div class="perguntasContainer" id="q6">
            <h2>6.<br> Quem é o advogado que ajuda Heisenberg?</h2> 
                <table class="centralizar">
                    <tr><td><label class="nomes">Todd Alquist</label></td><td><input type="radio" name="q6" value="0"></td></tr>
                    <tr><td><label class="nomes">Mike Ehrmantraut</label></td><td><input type="radio" name="q6" value="0"></td></tr>
                    <tr><td><label class="nomes">Gus Fring</label></td><td><input type="radio" name="q6" value="0"></td></tr>
                    <tr><td><label class="nomes">Saul Goodman</label></td><td><input type="radio" name="q6" value="6"></td></tr>
                </table>
        </div> <br>
        <div class="perguntasContainer" id="q7">
            <h2>7.<br> Quem mata Gale Boetticher?</h2> 
                <table class="centralizar">
                    <tr><td><label class="nomes">Walter White</label></td><td><input type="radio" name="q7" value="0"></td></tr>
                    <tr><td><label class="nomes">Mike Ehrmantraut</label></td><td><input type="radio" name="q7" value="0"></td></tr>
                    <tr><td><label class="nomes">Jesse Pinkman</label></td><td><input type="radio" name="q7" value="7"></td></tr>
                    <tr><td><label class="nomes">Gus Fring</label></td><td><input type="radio" name="q7" value="0"></td></tr>
                </table>
        </div> <br>
        <div class="perguntasContainer" id="q8">
            <h2>8.<br> Qual o nome da filha do Walter White?</h2> 
                <table class="centralizar">
                    <tr><td><label class="nomes">Holly</label></td><td><input type="radio" name="q8" value="8"></td></tr>
                    <tr><td><label class="nomes">Marie</label></td><td><input type="radio" name="q8" value="0"></td></tr>
                    <tr><td><label class="nomes">Lydia</label></td><td><input type="radio" name="q8" value="0"></td></tr>
                    <tr><td><label class="nomes">Jane</label></td><td><input type="radio" name="q8" value="0"></td></tr>
                </table>
        </div> <br>
        <div class="perguntasContainer" id="q9">
            <h2>9.<br> O que Saul Goodman costuma dizer?</h2> 
                <table class="centralizar">
                    <tr><td><label class="nomes">Call me!</label></td><td><input type="radio" name="q9" value="0"></td></tr>
                    <tr><td><label class="nomes">Better Call Saul!</label></td><td><input type="radio" name="q9" value="9"></td></tr>
                    <tr><td><label class="nomes">Ring on Saul!</label></td><td><input type="radio" name="q9" value="0"></td></tr>
                    <tr><td><label class="nomes">I'm here for Democracy!</label></td><td><input type="radio" name="q9" value="0"></td></tr>
                </table>
        </div> <br>
        <div class="perguntasContainer" id="q10">
            <h2>10.<br> Por quê Heisenberg faz o que faz?</h2> 
                <table class="centralizar">
                    <tr><td><label class="nomes">Por vingança</label></td><td><input type="radio" name="q10" value="0"></td></tr>
                    <tr><td><label class="nomes">pela família</label></td><td><input type="radio" name="q10" value="0"></td></tr>
                    <tr><td><label class="nomes">Pelo dinheiro</label></td><td><input type="radio" name="q10" value="0"></td></tr>
                    <tr><td><label class="nomes">Por ele mesmo</label></td><td><input type="radio" name="q10" value="10"></td></tr>
                </table>
        </div> <br>
        <center>
            <button type="button" id="quizFim" class="btQuiz" onclick="resultados()">Ver Acertos 👀</button>
        </center>
    </div>
    <div id="mensagFim" class="some">
        <center>
            <p style="font-size: large;" id="tempo"></p>
            <p style="font-size: large;" id="resultado"></p>
        </center>
    </div>
    <script>
        let startTime, endTime;

        document.addEventListener('DOMContentLoaded', function() {
            let quizSection = document.getElementById('quizDiv');
            
            if (!quizDiv.classList.contains('some')) {
                startTime = new Date();
            }
        });

        const respCorretas = {
            q1: '1',
            q2: '2',
            q3: '3',
            q4: '4',
            q5: '5',
            q6: '6',
            q7: '7',
            q8: '8',
            q9: '9',
            q10: '10'
        };

        document.getElementById('quizFim').addEventListener('click', function() {

            endTime = new Date();
            let timeDiff = (endTime - startTime) / 1000;
            document.getElementById('tempo').textContent = `Você demorou ${timeDiff} segundos para finalizar o quiz.`;

            let textResultado = '';
            let contAcertos = 0;

            for (let i = 1; i <= 10; i++) {
                const pergunta = document.querySelector(`input[name="q${i}"]:checked`);
                
                if (pergunta) {
                    const userResp = pergunta.value;
                    if (userResp === respCorretas[`q${i}`]) {
                        textResultado += `<p class="correct">Você acertou a pergunta ${i}!</p>`;
                        contAcertos++;
                    } else {
                        textResultado += `<p class="wrong">Você errou a pergunta ${i}.` 
                    }
                } else {
                    textResultado += `<p class="wrong">Você não respondeu a pergunta ${i}.</p>`;
                };
            };

            document.getElementById("quizDiv").classList.add("some");
            document.getElementById("mensagFim").classList.remove("some");
            document.getElementById('resultado').innerHTML = textResultado;
        }); 
    </script>
</body>
</html> 