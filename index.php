<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>TicTacToe</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="css/styles.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <script>
        function clickEvent(id) {
            const button = document.getElementById(id);
            if (button.innerText === "⠀") {
                button.innerText = "X";

                let buttons = [];
                for (let i = 0; i < 9; i++) {
                    const button = document.getElementById("btn-" + i);
                    buttons[i.toString()] = button.innerText;
                }

                let winner = calculateWinner(buttons);
                if (winner != null) {
                    if (winner === "X") {
                        Swal.fire('You win!').then(function () {
                            window.location.reload()
                        });
                    } else {
                        Swal.fire('You lose!').then(function () {
                            window.location.reload()
                        });
                    }
                    return;
                }

                for (let i = 0; i < 9; i++) {
                    const button = document.getElementById("btn-" + i);
                    if (button.innerText === "⠀") {
                        button.innerText = "O";
                        break;
                    }
                }

                buttons = [];
                for (let i = 0; i < 9; i++) {
                    const button = document.getElementById("btn-" + i);
                    buttons[i.toString()] = button.innerText;
                }

                winner = calculateWinner(buttons);
                if (winner != null) {
                    if (winner === "X") {
                        Swal.fire('You win!').then(function () {
                            window.location.reload()
                        });
                    } else {
                        Swal.fire('You lose!').then(function () {
                            window.location.reload()
                        });
                    }
                    return;
                }

                if (!buttons.includes("⠀")) {
                    Swal.fire('Tie!').then(function () {
                        window.location.reload()
                    });
                }
            }
        }

        function calculateWinner(squares) {
            const lines = [
                [0, 1, 2],
                [3, 4, 5],
                [6, 7, 8],
                [0, 3, 6],
                [1, 4, 7],
                [2, 5, 8],
                [0, 4, 8],
                [2, 4, 6]
            ];

            for (let i = 0; i < lines.length; i++) {
                const [a, b, c] = lines[i];
                if (squares[a] && squares[a] === squares[b] && squares[a] === squares[c]) {
                    if (squares[a] !== "⠀") {
                        return squares[a];
                    }
                }
            }

            return null;
        }
    </script>
</head>

<body>
<div class="container">
    <br><br><br><br><br><br>
    <div class="text-center">
        <h1>TicTacToe</h1>
        <button id="btn-0" onclick="clickEvent(this.id)" type="button" class="btn btn-primary btn-lg"
                style="margin-top: 0.2em">⠀
        </button>
        <button id="btn-1" onclick="clickEvent(this.id)" type="button" class="btn btn-primary btn-lg"
                style="margin-top: 0.2em">⠀
        </button>
        <button id="btn-2" onclick="clickEvent(this.id)" type="button" class="btn btn-primary btn-lg"
                style="margin-top: 0.2em">⠀
        </button>
        <br>
        <button id="btn-3" onclick="clickEvent(this.id)" type="button" class="btn btn-primary btn-lg"
                style="margin-top: 0.2em">⠀
        </button>
        <button id="btn-4" onclick="clickEvent(this.id)" type="button" class="btn btn-primary btn-lg"
                style="margin-top: 0.2em">⠀
        </button>
        <button id="btn-5" onclick="clickEvent(this.id)" type="button" class="btn btn-primary btn-lg"
                style="margin-top: 0.2em">⠀
        </button>
        <br>
        <button id="btn-6" onclick="clickEvent(this.id)" type="button" class="btn btn-primary btn-lg"
                style="margin-top: 0.2em">⠀
        </button>
        <button id="btn-7" onclick="clickEvent(this.id)" type="button" class="btn btn-primary btn-lg"
                style="margin-top: 0.2em">⠀
        </button>
        <button id="btn-8" onclick="clickEvent(this.id)" type="button" class="btn btn-primary btn-lg"
                style="margin-top: 0.2em">⠀
        </button>
    </div>
</div>
</body>