<h3>Apuração das eleições 2024</h3>
<p>Para utilizar o sistema é preferivel as seguintes configurações</p>
<ul>
    <li>Laravel 11^</li>
    <li>O schedule rodará automaticamente a apuração dos votos por meio da cron, então para um melhor desempenho use o SO Ubuntu.</li>
    <li>Na sua cron você deve inserir o seguinte comando:</li>
    <ul>
        <li>* * * * * cd /path-to-your-project && php artisan schedule:run >> /dev/null 2>&1</li>
    </ul>
</ul>
<p>Comandos que precisam ser rodados:</p>
<ul>
    <li>php artisan generate key</li>
    <li>composer install</li>
</ul>
<p>Em caso da utilização do Ubuntu, na sua pasta do Laravel, aplique a permissao para todos os arquivos.</p>

