<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@500&family=Quicksand&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="../Logo/icone.ico" type="image/x-icon">

    <title>FAQ - Perguntas</title>

    <script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>

    <style>

        body {
            padding-top: 50px;
            font-size: 16px;
            font-family: 'Quicksand', sans-serif;
        }

    </style>

</head>

<body class="h-screen bg-blue-50">

    <main class="p-5 bg-light-blue">

        <div class="flex justify-center items-start my-2">

            <div class="w-full sm:w-10/12 md:w-1/2 my-1">

                <h2 class="text-xl font-semibold text-vnet-blue mb-2">FAQ - Pedidos, Pagamentos, Compras, Etc.</h2>

                <ul class="flex flex-col">

                    <li class="bg-white my-2 shadow-lg" x-data="accordion(1)">
                        
                        <h2 @click="handleClick()" class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">

                            <span>Qual é o prazo de entrega do meu pedido?</span>

                            <svg :class="handleRotate()" class="fill-current text-blue-700 h-6 w-6 transform transition-transform duration-500" viewBox="0 0 20 20">

                                <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>

                            </svg>

                        </h2>

                        <div x-ref="tab" :style="handleToggle()" class="border-l-2 border-blue-600 overflow-hidden max-h-0 duration-500 transition-all">

                            <p class="p-3 text-gray-900">
                                O prazo de entrega é definido pelos nossos parceiros de entrega, de acordo com a forma de entrega escolhida por você. Detalhes adicionais podem ser encontrados na confirmação do pedido.
                            </p>

                        </div>

                    </li>

                    <li class="bg-white my-2 shadow-lg" x-data="accordion(2)">

                        <h2 @click="handleClick()" class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">

                            <span>Como faço para rastrear meu pedido?</span>

                            <svg :class="handleRotate()" class="fill-current text-blue-700 h-6 w-6 transform transition-transform duration-500" viewBox="0 0 20 20">

                                <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>

                            </svg>

                        </h2>

                        <div class="border-l-2 border-blue-600 overflow-hidden max-h-0 duration-500 transition-all" x-ref="tab" :style="handleToggle()">

                            <p class="p-3 text-gray-900">
                                Após o envio, você receberá um e-mail de confirmação que inclui um número de rastreamento e informações adicionais sobre o rastreamento do seu pedido.
                            </p>

                        </div>

                    </li>

                    <li class="bg-white my-2 shadow-lg" x-data="accordion(3)">

                        <h2 @click="handleClick()" class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">

                            <span>Qual é a nossa política de devolução?</span>

                            <svg :class="handleRotate()" class="fill-current text-blue-700 h-6 w-6 transform transition-transform duration-500" viewBox="0 0 20 20">

                                <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>

                            </svg>

                        </h2>

                        <div class="border-l-2 border-blue-600 overflow-hidden max-h-0 duration-500 transition-all" x-ref="tab" :style="handleToggle()">

                            <p class="p-3 text-gray-900">
                                Permitimos a devolução de todos os itens no prazo de 30 dias a partir da data do seu pedido original. Se você estiver interessado em devolver seus itens, envie-nos um e-mail com o número do seu pedido e enviaremos uma etiqueta de devolução <a href="#"><code>aqui.</code></a>
                            </p>

                        </div>

                    </li>

                    <li class="bg-white my-2 shadow-lg" x-data="accordion(4)">

                        <h2 @click="handleClick()" class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">

                            <span>Como faço alterações em um pedido existente?</span>

                            <svg :class="handleRotate()" class="fill-current text-blue-700 h-6 w-6 transform transition-transform duration-500" viewBox="0 0 20 20">

                                <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>

                            </svg>

                        </h2>

                        <div class="border-l-2 border-blue-600 overflow-hidden max-h-0 duration-500 transition-all" x-ref="tab" :style="handleToggle()">

                            <p class="p-3 text-gray-900">
                                Alterações em um pedido existente podem ser feitas desde que o pedido ainda esteja no status “processando”. Entre em contato com nossa equipe por e-mail e aplicaremos as alterações necessárias. Se a sua encomenda já tiver sido enviada, não poderemos aplicar quaisquer alterações à mesma. Se você não estiver satisfeito com seu pedido quando ele chegar, entre em contato conosco para quaisquer alterações/devoluções que você possa precisar.
                            </p>

                        </div>

                    </li>

                    <li class="bg-white my-2 shadow-lg" x-data="accordion(5)">

                        <h2 @click="handleClick()" class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">

                            <span>Quais opções de entrega nós temos?</span>

                            <svg :class="handleRotate()" class="fill-current text-blue-700 h-6 w-6 transform transition-transform duration-500" viewBox="0 0 20 20">

                                <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>

                            </svg>

                        </h2>

                        <div class="border-l-2 border-blue-600 overflow-hidden max-h-0 duration-500 transition-all" x-ref="tab" :style="handleToggle()">

                            <p class="p-3 text-gray-900">
                                Para entregas em todo o Brasil temos parceria com o Correios, Sedex, FedEx e Loggi.
                            </p>

                        </div>

                    </li>

                    <li class="bg-white my-2 shadow-lg" x-data="accordion(6)">

                        <h2 @click="handleClick()" class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">

                            <span>Quais são os métodos de pagamentos que aceitamos?</span>

                            <svg :class="handleRotate()" class="fill-current text-blue-700 h-6 w-6 transform transition-transform duration-500" viewBox="0 0 20 20">

                                <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>

                            </svg>

                        </h2>
                        
                        <div class="border-l-2 border-blue-600 overflow-hidden max-h-0 duration-500 transition-all" x-ref="tab" :style="handleToggle()">

                            <p class="p-3 text-gray-900">
                                Aceitamos MasterCard, Visa, American Express, PayPal, Boleto Bancário e Pix.
                            </p>

                        </div>

                    </li>

                </ul>

            </div>

        </div>

        <section class="text-gray-600 body-font">

            <div class="container px-5 py-10 mx-auto">

                <div class="xl:w-1/2 lg:w-3/4 w-full mx-auto text-center">

                    <a href="../index.php"><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-8 h-8 text-blue-700 mb-8" viewBox="0 0 975.036 975.036">

                            <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>

                        </svg></a>

                    <p class="leading-relaxed text-lg">Recentemente, como um investidor preocupado com estilo e imagem, tive a sorte de descobrir uma nova loja de grife masculina que se tornou meu refúgio fashion. Sua seleção de tecidos de alta qualidade, a atenção aos detalhes e o atendimento impecável me conquistaram. Vestir um de seus ternos não só me fez sentir confiante, mas também transmitiu minha dedicação ao sucesso em minha próxima reunião de negócios. Para qualquer homem que valorize estilo e elegância, essa site é uma visita obrigatória.</p>

                    <span class="inline-block h-1 w-10 rounded bg-blue-600 mt-8 mb-6"></span>

                    <br>

                    <img alt="testimonial" width="300" height="300" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100" src="../Icons/jovem-alegre-de-terno-preto-classico-e-camisa-branca-com-fones-de-ouvido-sem-fio-olhando-alegremente-na-camera-com-o-laptop-nas-maos-enquanto-passa-o-tempo-ao-ar-livre.jpg">

                    <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">ALEXANDER SILVEIRA</h2>

                    <p class="text-gray-500">Consultor Financeiro</p>

                </div>

            </div>

        </section>

    </main>

</body>

<script>
    
    document.addEventListener('alpine:init', () => {
        Alpine.store('accordion', {
            tab: 0
        });

        Alpine.data('accordion', (idx) => ({
            init() {
                this.idx = idx;
            },
            idx: -1,
            handleClick() {
                this.$store.accordion.tab = this.$store.accordion.tab === this.idx ? 0 : this.idx;
            },
            handleRotate() {
                return this.$store.accordion.tab === this.idx ? 'rotate-180' : '';
            },
            handleToggle() {
                return this.$store.accordion.tab === this.idx ? `max-height: ${this.$refs.tab.scrollHeight}px` : '';
            }
        }));
    })

</script>

</html>