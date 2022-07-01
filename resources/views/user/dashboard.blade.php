@extends('user.layout')

@section('style')
    <style>
        .arena {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }
        .arena .row {
            display: flex;
            gap: 0.5rem;
            height: 5rem;
            justify-content: center;
        }
        .arena .row .cell {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 5rem;
            width: 5rem;
            background: #6b7280;
            color: white;
            font-size: 2rem;
            cursor: pointer;
            transition: 0.1s;
            border-radius: 0.25rem;
        }
        .arena .row .cell:hover {
            background: #5b6270;
        }
    </style>
@endsection

@section('content')
    <div class="arena" id="arena">
        Game
    </div>
@endsection

@section('script')
    <script>
        let grid = ``
        for(let r=0; r<3; r++) {
            grid += `<div class="row" id="row_${r}" data-row="${r}">`
            for(let c=0; c<3; c++) {
                grid += `<div class="cell" id="cell_${r}_${c}" data-row="${r}" data-col="${c}"></div>`
            }
            grid += `</div>`
        }

        document.addEventListener('DOMContentLoaded', initiateApp)

        function initiateApp () {
            let arena = document.getElementById('arena')
            arena.innerHTML = grid
            arena.addEventListener('click', handleClick)

        }
        function handleClick(event) {
            if (event.target.classList.contains('cell')) {
                if (event.target.innerText) {
                    event.target.innerText = '';
                } else event.target.innerText = 'x';
            }
        }
    </script>
@endsection
