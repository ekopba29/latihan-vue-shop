<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Library App</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">


        <div class="container">
            <nav class="navbar" role="navigation" aria-label="main navigation">
                <div class="navbar-start">
                    <div class="navbar-brand">
                        <a class="navbar-item" href="https://bulma.io">
                            <img src="https://bulma.io/images/bulma-logo.png"
                                alt="Bulma: Free, open source, and modern CSS framework based on Flexbox" width="112"
                                height="28">
                        </a>
                    </div>
                </div>
                <div class="navbar-end">
                    <a class="navbar-item">
                        
                        <i class="fa fa-shopping-cart">&nbsp; <div class="tag is-danger is-small">3</div></i>
                    </a>
                </div>
            </nav>

            <div class="section">
                <div class="box">
                    <article class="media">
                        <div class="media-left is-marginless" style="position: sticky; top: 0;">
                            <div class="card-image column">
                                <figure class="image">
                                    <img src="https://picsum.photos/30/30" alt="Placeholder image">
                                </figure>
                            </div>
                            <div class="card-image column">
                                <figure class="image">
                                    <img src="https://picsum.photos/30/30" alt="Placeholder image">
                                </figure>
                            </div>
                            <div class="card-image column">
                                <figure class="image">
                                    <img src="https://picsum.photos/30/30" alt="Placeholder image">
                                </figure>
                            </div>
                        </div>
                        <div class="media-left mr-6" style="position: sticky; top: 1rem;">
                            <div class="card-image">
                                <figure class="image">
                                    <img src="https://picsum.photos/400/400" alt="Placeholder image">
                                </figure>
                            </div>
                            <div class="column is-primary is-pulled-right">
                                <button class="button is-primary is-small">
                                    <i class="fa fa-shopping-cart">&nbsp;Add to cart</i>
                                </button>
                            </div>
                            <div class="column is-primary is-pulled-left">
                                <div class="tag subtitle is-black">
                                    Rp.2000
                                </div>
                            </div>

                        </div>
                        <div class="media-content">
                            <div class="content">
                                <p class="title">
                                    <strong class="title">John Smith</strong>
                                </p>
                            </div>
                            <div class="content">
                                <h3>Hello World</h3>
                                <p>Lorem ipsum<sup><a>[1]</a></sup> dolor sit amet, consectetur adipiscing elit. Nulla
                                    accumsan, metus ultrices eleifend gravida, nulla nunc varius lectus, nec rutrum
                                    justo nibh eu lectus. Ut vulputate semper dui. Fusce erat odio, sollicitudin vel
                                    erat vel, interdum mattis neque. Sub<sub>script</sub> works as well!</p>
                                <h3>Second level</h3>
                                <p>Curabitur accumsan turpis pharetra <strong>augue tincidunt</strong> blandit. Quisque
                                    condimentum maximus mi, sit amet commodo arcu rutrum id. Proin pretium urna vel
                                    cursus venenatis. Suspendisse potenti. Etiam mattis sem rhoncus lacus dapibus
                                    facilisis. Donec at dignissim dui. Ut et neque nisl.</p>
                                <ul>
                                    <li>In fermentum leo eu lectus mollis, quis dictum mi aliquet.</li>
                                    <li>Morbi eu nulla lobortis, lobortis est in, fringilla felis.</li>
                                    <li>Aliquam nec felis in sapien venenatis viverra fermentum nec lectus.</li>
                                    <li>Ut non enim metus.</li>
                                </ul>
                                <h3>Third level</h3>
                                <p>Quisque ante lacus, malesuada ac auctor vitae, congue <a href="#">non ante</a>.
                                    Phasellus lacus ex, semper ac tortor nec, fringilla condimentum orci. Fusce eu
                                    rutrum tellus.</p>
                                <ol>
                                    <li>Donec blandit a lorem id convallis.</li>
                                    <li>Cras gravida arcu at diam gravida gravida.</li>
                                    <li>Integer in volutpat libero.</li>
                                    <li>Donec a diam tellus.</li>
                                    <li>Aenean nec tortor orci.</li>
                                    <li>Quisque aliquam cursus urna, non bibendum massa viverra eget.</li>
                                    <li>Vivamus maximus ultricies pulvinar.</li>
                                </ol>
                            </div>
                    </article>
                </div>
            </div>

            <section class="section">
                <h1 class="title">Banyak orang mencari ini</h1>
                <hr>
                <div class="columns is-multiline">
                    <div class="column is-3">
                        <div class="card">
                            <div class="card-image">
                                <figure class="image is-4by3">
                                    <img src="https://picsum.photos/256/256" alt="Placeholder image">
                                </figure>
                            </div>
                            <div class="card-content">
                                <div class="media">
                                    <div class="media-content">
                                        <p><h3>Sandal</h3></p>
                                        <p>Rp.4000</p>
                                    </div>
                                </div>
                                <div class="level">
                                    <button class="button is-small is-primary">Detail</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column is-3">
                        <div class="card">
                            <div class="card-image">
                                <figure class="image is-4by3">
                                    <img src="https://picsum.photos/256/256" alt="Placeholder image">
                                </figure>
                            </div>
                            <div class="card-content">
                                <div class="media">
                                    <div class="media-content">
                                        <p><h3>Sandal</h3></p>
                                        <p>Rp.4000</p>
                                    </div>
                                </div>
                                <div class="level">
                                    <button class="button is-small is-primary">Detail</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column is-3">
                        <div class="card">
                            <div class="card-image">
                                <figure class="image is-4by3">
                                    <img src="https://picsum.photos/256/256" alt="Placeholder image">
                                </figure>
                            </div>
                            <div class="card-content">
                                <div class="media">
                                    <div class="media-content">
                                        <p><h3>Sandal</h3></p>
                                        <p>Rp.4000</p>
                                    </div>
                                </div>
                                <div class="level">
                                    <button class="button is-small is-primary">Detail</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column is-3">
                        <div class="card">
                            <div class="card-image">
                                <figure class="image is-4by3">
                                    <img src="https://picsum.photos/256/256" alt="Placeholder image">
                                </figure>
                            </div>
                            <div class="card-content">
                                <div class="media">
                                    <div class="media-content">
                                        <p><h3>Sandal</h3></p>
                                        <p>Rp.4000</p>
                                    </div>
                                </div>
                                <div class="level">
                                    <button class="button is-small is-primary">Detail</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column is-3">
                        <div class="card">
                            <div class="card-image">
                                <figure class="image is-4by3">
                                    <img src="https://picsum.photos/256/256" alt="Placeholder image">
                                </figure>
                            </div>
                            <div class="card-content">
                                <div class="media">
                                    <div class="media-content">
                                        <p><h3>Sandal</h3></p>
                                        <p>Rp.4000</p>
                                    </div>
                                </div>
                                <div class="level">
                                    <button class="button is-small is-primary">Detail</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column is-3">
                        <div class="card">
                            <div class="card-image">
                                <figure class="image is-4by3">
                                    <img src="https://picsum.photos/256/256" alt="Placeholder image">
                                </figure>
                            </div>
                            <div class="card-content">
                                <div class="media">
                                    <div class="media-content">
                                        <p><h3>Sandal</h3></p>
                                        <p>Rp.4000</p>
                                    </div>
                                </div>
                                <div class="level">
                                    <button class="button is-small is-primary">Detail</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column is-3">
                        <div class="card">
                            <div class="card-image">
                                <figure class="image is-4by3">
                                    <img src="https://picsum.photos/256/256" alt="Placeholder image">
                                </figure>
                            </div>
                            <div class="card-content">
                                <div class="media">
                                    <div class="media-content">
                                        <p><h3>Sandal</h3></p>
                                        <p>Rp.4000</p>
                                    </div>
                                </div>
                                <div class="level">
                                    <button class="button is-small is-primary">Detail</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column is-3">
                        <div class="card">
                            <div class="card-image">
                                <figure class="image is-4by3">
                                    <img src="https://picsum.photos/256/256" alt="Placeholder image">
                                </figure>
                            </div>
                            <div class="card-content">
                                <div class="media">
                                    <div class="media-content">
                                        <p><h3>Sandal</h3></p>
                                        <p>Rp.4000</p>
                                    </div>
                                </div>
                                <div class="level">
                                    <button class="button is-small is-primary">Detail</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
        </div>
</body>

<script src="{{ asset('js/app.js') }}">
</script>

</html>
