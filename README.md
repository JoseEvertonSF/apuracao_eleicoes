<h2>Apuração das eleições 2024</h2>
<p><strong>Para utilizar o sistema é preferível as seguintes configurações:</strong></p>
<ul>
    <li>Laravel 11^</li>
    <li>O schedule rodará automaticamente a apuração dos votos por meio da cron, então para um melhor desempenho use o SO Ubuntu.</li>
    <li><strong>Na sua cron você deve inserir o seguinte comando:</strong></li>
    <ul>
        <li>* * * * * cd /path-to-your-project && php artisan schedule:run >> /dev/null 2>&1</li>
    </ul>
</ul>
<p><strong>Comandos que precisam ser rodados:</strong></p>
<ul>
    <li>php artisan generate key</li>
    <li>composer install</li>
</ul>
<p><strong>Em caso da utilização do Ubuntu, aplique a permissao para todos os arquivos do seu projeto.</strong></p>

