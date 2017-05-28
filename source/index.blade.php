@extends('_layouts.master')

@section('title', 'Sculptor | The future web experience')

@section('body')
<div class="my-wrapper">
    <nav class="s-navbar">
        <div class="s-navbar__container">
            <ul class="s-navbar__menu">
                <li class="s-navbar__item">
                    <a href="#" class="s-navbar__link"><i class="fa fa-github"></i> Github</a>
                </li>
                <li class="s-navbar__item s-navbar__item--right">
                    <a href="#" class="s-button s-button--warning">Docs</a>
                </li>
            </ul>
        </div>
    </nav>
    <header class="my-header">
        <img src="/img/sculptor-logo-white.svg" alt="Sculptor" class="my-img--logo">
        <h1>Sculptor</h1>
        <p>The future web experience</p>
        <a href="#" class="s-button s-button--block n-button">Get started</a>
        <code>v0.2.0</code>
        <a href="#" class="n-arrow-down"></a>
    </header>
    <main class="my-main">
        <section class="s-container my-section">
            <div class="s-flex__row">
                <div class="s-flex__col">
                    <h2>What Sculptor is?</h2>
                    <p class="s-text--indent">
                        Sculptor is a CSS Framework that allows you make beautiful web-based applications.
                        We've got inspired in designs we believe is real futuristic and in colors of the universe.
                    </p>
                </div>
                <div class="s-flex__col">
                    <h2>Why use Sculptor?</h2>
                    <p class="s-text--indent">
                        Because Sculptor is very light, beautiful, easy to use and doesn't conflict.
                        Sculptor was written in BEM based architecture, made to do not conflict with your CSS or another lib you're using.
                    </p>
                </div>
            </div>
        </section>

        <section class="s-container my-section">
            
        </section>
    </main>

</div>
@endsection
