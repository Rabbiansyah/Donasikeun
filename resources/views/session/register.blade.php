@extends('layouts.header')
@section('title', 'Register')

@section('content')
    <div class="d-flex justify-content-center mt-5">
        <form class="form" action="/session/create" method="POST">
            @csrf
            <div class="header">Registrasi</div>
            <div class="inputs">
                <input name="username" placeholder="Username" class="input" type="text" required
                    value="{{ Session::get('username') }}">
                <input name="password" placeholder="Password" class="input" type="password" required>
                <button name="submit" type="submit" class="sigin-btn">Daftar</button>
            </div>
            <p class="text-center">Sudah punya akun? <a href="/session">Login</a></p>
        </form>
    </div>

    <style>
        .form {
            position: relative;
            margin-top: 15px;
            display: flex;
            flex-direction: column;
            border-radius: 0.75rem;
            background-color: #fff;
            color: rgb(97 97 97);
            box-shadow: 20px 20px 30px rgba(0, 0, 0, .05);
            width: 22rem;
            background-clip: border-box;
            animation: scrollUp 1s ease-in-out forwards;
        }

        /* animasi form */
        @keyframes scrollUp {
            0% {
                transform: translateY(10px);
                opacity: 0;
            }
            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .header {
            background-clip: border-box;
            background-color: #0021b1;
            background-image: linear-gradient(to top right, #0021b1, #42a5f5);
            margin: 10px;
            border-radius: 0.75rem;
            color: #fff;
            height: 7rem;
            font-weight: 600;
            font-size: 1.9rem;
            font-family: Roboto, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .inputs {
            padding: 1.5rem;
            gap: 1rem;
            display: flex;
            flex-direction: column;
        }

        .input {
            border: 1px solid rgba(128, 128, 128, 0.61);
            outline: 0;
            color: rgb(69 90 100);
            font-weight: 400;
            font-size: .9rem;
            line-height: 1.25rem;
            padding: 0.75rem;
            background-color: transparent;
            border-radius: .375rem;
            width: 100%;
        }

        .input:focus {
            border: 1px solid #0021b1;
        }

        .sigin-btn {
            text-transform: uppercase;
            font-weight: 700;
            font-size: .75rem;
            line-height: 1rem;
            text-align: center;
            padding: .75rem 1.5rem;
            background-color: #0021b1;
            background-image: linear-gradient(to top right, #0021b1, #42a5f5);
            border-radius: .5rem;
            width: 100%;
            outline: 0;
            border: 0;
            color: #fff;
            transition: 0.3s;
        }

        .sigin-btn:hover {
            opacity: 0.9;
        }

        a {
            color: #1e88e5;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
@endsection
