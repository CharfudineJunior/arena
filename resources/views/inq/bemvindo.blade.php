@extends('base')
@section('content')
<main id="main">

        <!-- <div id="preloader"></div> -->

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i>
        </a>

        <section id="featured-services" class="featured-services">
            <div class="container" data-aos="fade-up">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-md-8">
                        <form id="regForm" method="POST" action="abc.php">

                            <h5 id="register">Bem vindo ao <br>
                                <span style="color: #2b6bb0">Inquérito de satisfação - Atendimento ao Cliente</span> (TvCabo).
                            </h5><br>

                            <h5 id="register1" style="font-size: 13px; font-style: italic;">
                                Ajude-nos a melhorar os nossos serviços de atendimento, 
                                <br> preenchendo as seguintes opções...&ensp;
                                <label
                                    for="company" id="progressbar">
                                    <p>[1/4]</p>
                                    <p>[2/4]</p>
                                    <p>[3/4]</p>
                                    <p>[4/4]</p>
                                </label>
                            </h5>

                            <fieldset>

                                <h6>1. De modo geral, como você avalia a qualidade de atendimento ao cliente
                                    realizado por nossa
                                    empresa?
                                </h6><br>

                                <label class="container">Bom
                                    <input type='radio' id="_positive" value="positive" name="opcao">
                                    <span class='checkmark'></span>
                                </label>

                                <label class="container">Normal
                                    <input type='radio' id="_normal" value="normal" name="opcao">
                                    <span class='checkmark'></span>
                                </label>

                                <label class="container">Mau
                                    <input type='radio' id="_negative" value="negative" name="opcao">
                                    <span class='checkmark'></span>
                                </label>

                                <label id="1" style="color:rgb(231, 18, 18); font-size: 12px;"></label>

                                <button style="float: right; background-color: #054284;" type="button" name="next"
                                    class="next btn-sm action-button" value="NEXT">Seguinte
                                </button>

                            </fieldset>

                            <fieldset>

                                <h6>2. Nossos atendentes conseguem captar adequadamente suas dúvidas e preocupações?
                                </h6>

                                <br>

                                <label class="container">Sim
                                    <input type='radio' id="_positive2" value="pos_positive2" name="opcao2">
                                    <span class='checkmark'></span>
                                </label>

                                <label class="container">Nem sempre
                                    <input type='radio' id="_normal2" value="normal2" name="opcao2">
                                    <span class='checkmark'></span>
                                </label>

                                <label class="container">Não
                                    <input type='radio' id="_negative2" value="negative2" name="opcao2">
                                    <span class='checkmark'></span>
                                </label>

                                <label id="2" style="color:rgb(231, 18, 18); font-size: 12px;"></label>

                                <div style="float: right;" class="row next btn-sm action-button">
                                    <button type="button" name="next" style="background-color: #054284;"
                                        class="next btn-sm action-button" value="NEXT">Seguinte
                                    </button>
                                </div>

                                <div style="float: right;" class="previous btn-sm action-button">
                                    <button type="button" name="previous"
                                        class="previous btn-secondary btn-sm action-button" value="BACK">Voltar
                                    </button>
                                </div>

                            </fieldset>

                            <fieldset>

                                <h6>3. Nossos atendentes conseguem captar adequadamente suas dúvidas e preocupações?
                                </h6>

                                <br>

                                <label class="container">Sim
                                    <input type='radio' id="_positive2" value="pos_positive2" name="opcao3">
                                    <span class='checkmark'></span>
                                </label>

                                <label class="container">Nem sempre
                                    <input type='radio' id="_normal2" value="normal2" name="opcao3">
                                    <span class='checkmark'></span>
                                </label>

                                <label class="container">Não
                                    <input type='radio' id="_negative2" value="negative2" name="opcao3">
                                    <span class='checkmark'></span>
                                </label>

                                <label id="3" style="color:rgb(231, 18, 18); font-size: 12px;"></label>

                                <div style="float: right;" class="row next btn-sm action-button">
                                    <button type="button" name="next" style="background-color: #054284;"
                                        class="next btn-sm action-button" value="NEXT">Seguinte
                                    </button>
                                </div>

                                <div style="float: right;" class="previous btn-sm action-button">
                                    <button type="button" name="previous"
                                        class="previous btn-secondary btn-sm action-button" value="BACK">Voltar</button>
                                </div>

                            </fieldset>

                            <fieldset>

                                <h6>4. Nossos atendentes conseguem captar adequadamente suas dúvidas e preocupações?</h6><br>

                                <label class="container">Sim
                                    <input type='radio' id="_positive2" value="pos_positive2" name="opcao4">
                                    <span class='checkmark'></span>
                                </label>

                                <label class="container">Nem sempre
                                    <input type='radio' id="_normal2" value="normal2" name="opcao4">
                                    <span class='checkmark'></span>
                                </label>

                                <label class="container">Não
                                    <input type='radio' id="_negative2" value="negative2" name="opcao4">
                                    <span class='checkmark'></span>
                                </label>

                                <label id="4" style="color:rgb(231, 18, 18); font-size: 12px;"></label>

                                <div style="float: right;" class="row next btn-sm action-button">
                                    <button class="next btn-success btn-sm" style="float: right;" type="submit">Submeter</button>
                                </div>

                                <div style="float: right;" class="previous btn-sm action-button">
                                    <button type="button" name="previous"
                                        class="previous btn-secondary btn-sm action-button" value="BACK">Voltar
                                    </button>
                                </div>

                            </fieldset>

                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection