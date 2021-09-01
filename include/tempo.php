<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item">
        <label id="demo"></label>

        <script>
            var semana = ["domingo", "segunda-feira", "terça-feira", "quarta-feira", "quinta-feira", "sexta-feira", "sábado"];
            var d = new Date();
            document.getElementById("demo").innerHTML = semana[d.getDay()];
        </script>
    </li>
    <li class="breadcrumb-item">
        <?php 
            date_default_timezone_set('America/Sao_Paulo'); 
            echo date('d/m/Y');
        
        ?>
    </li>
    <li class="breadcrumb-item">
        <label id="hora"></label>
        <Script>

            setInterval(function(){

            let novaHora = new Date();

            let hora = novaHora.getHours();
            let minuto = novaHora.getMinutes();
            let segundo = novaHora.getSeconds();

            minuto = zero(minuto);
            segundo = zero(segundo);

            document.getElementById('hora').textContent = hora+':'+minuto+':'+segundo;
        },1000)

            function zero(x) {
            if (x < 10) {
                x = '0' + x;
            } return x;
            }

        </Script>

    </li>
</ol>