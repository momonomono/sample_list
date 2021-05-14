@extends('layouts.list_layout')

@section('title',"Login")

@section('body')
    <div class="l-container">

        <div class="p-form">

            <h2 class="p-form__title">Login</h2>

            <label class="p-form__label">
                <p>ユーザー名</p>
                <input type="text" 
                       class="p-form__inputBox"
                       name="name">
            </label>

            <label class="p-form__label">
                <p>パスワード</p>
                <input type="text"
                       class="p-form__inputBox"
                       name="password">
            </label>

            <label class="p-form__label c-label__form">
                <button class="p-form__button c-button__form">Login</button>
            </label>
        </div>
    </div>
@endsection