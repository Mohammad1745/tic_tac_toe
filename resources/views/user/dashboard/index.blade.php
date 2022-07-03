@extends('user.layout')

@section('style')
    <style>
        button, input {
            font-size: 2rem;
            font-weight: 700;
            width: 100%;
            border-radius: 0.25rem;
        }
        .form-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            overflow: hidden;
        }
        .form {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1rem;
            border: 1px solid #5b6270;
            padding: 2.5rem;
            width: 500px;
            border-radius: 0.25rem;
        }
        .form-header {
        }
    </style>
@endsection

@section('content')
    <div class="form-wrapper">
        <div class="form" id="form">
            <h2 class="form-header">Tic Tac Toe</h2>
            <input type="text" class="form-input" id="game_id" placeholder="Game ID">
            <button type="button" class="form-btn" id="join_game_btn">Join Game</button> Or,
            <button type="button" class="form-btn" id="create_game_btn">Create Game</button>
        </div>
    </div>
@endsection

@section('script')
    <script>
        document.addEventListener('DOMContentLoaded', initiate)

        function initiate () {
            let createGameBtn = document.getElementById('create_game_btn')
            let joinGameBtn = document.getElementById('join_game_btn')
            createGameBtn.addEventListener('click', handleClickCreateGame)
            joinGameBtn.addEventListener('click', handleClickJoinGame)

        }
        function handleClickCreateGame(event) {
            alert(event.target.id)
        }
        function handleClickJoinGame(event) {
            alert(event.target.id)
        }
    </script>
@endsection
