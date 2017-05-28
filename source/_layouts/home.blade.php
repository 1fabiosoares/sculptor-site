@extends('_layouts.master')

@section('title', 'Sculptor | The future web experience')

@section('body')
    <div class="my-wrapper">
        <nav class="s-navbar">
            <div class="s-container">
                <div class="s-navbar__item s-navbar__item--logo">Sculptor</div>
                <a href="#" class="s-navbar__item s-right">Contribute</a>
                <a href="#" class="s-navbar__item s-right">Docs</a>
            </div>
        </nav>

        <header class="my-header">
            <img src="/img/sculptor-logo-red-blue.svg" alt="Sculptor" class="my-img--logo">
            <h1>Sculptor</h1>
            <p>A brand new future experience</p>
        </header>
        <main class="s-container my-main">
            <a href="#" class="s-button">Get Started</a>
            <a href="#" class="s-button s-button--secondary">Github</a>
            <p>v0.2.0-alpha</p>
        </main>
        <section class="my-section">
            <header class="my-section__header s-valigner niceSundown">
                <h2>Easy to use</h2>
            </header>
            <article class="my-section__content s-container">
                <div class="s-row">
                    <div class="s-col s-small--12 s-medium--6">
                        <p class="s-text--indent s-text--justify">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam beatae blanditiis eum incidunt nesciunt, quis sapiente sunt voluptates! A blanditiis corporis cum dicta ea eius eligendi, enim mollitia neque optio saepe voluptatibus? Eaque excepturi, fuga libero quis repellat tempora temporibus? At dignissimos magnam necessitatibus qui quisquam soluta voluptas voluptatibus. Eaque!
                        </p>
                    </div>
                    <div class="s-col s-small--12 s-medium--6">
                        <img src="/img/sculptor-logo-black.svg" alt="Sculptor" class="s-img--responsive">
                    </div>
                </div>
            </article>
        </section>

        <section class="my-section">
            <header class="my-section__header s-valigner niceSundown">
                <h2>Extensible</h2>
            </header>
            <article class="my-section__content s-container">
                <div class="s-row">
                    <div class="s-col s-small--12 s-medium--6">
                        <img src="/img/sculptor-logo-black.svg" alt="Sculptor" class="s-img--responsive">
                    </div>
                    <div class="s-col s-small--12 s-medium--6">
                        <p class="s-text--indent s-text--justify">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam beatae blanditiis eum incidunt nesciunt, quis sapiente sunt voluptates! A blanditiis corporis cum dicta ea eius eligendi, enim mollitia neque optio saepe voluptatibus? Eaque excepturi, fuga libero quis repellat tempora temporibus? At dignissimos magnam necessitatibus qui quisquam soluta voluptas voluptatibus. Eaque!
                        </p>
                    </div>
                </div>
            </article>
        </section>
    </div>
@endsection
