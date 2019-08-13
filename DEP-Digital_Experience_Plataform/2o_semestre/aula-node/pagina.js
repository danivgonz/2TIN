var http = require('http'); // incorporando módulo HTTP

// Criar um servidor

var server = http.createServer(function (req, res) {
    var categoria = req.url;

    if (categoria == "/cerveja") {
        res.end("<html><body>Tudo sobre cerveja</body></html>");
    } else if (categoria == "/musica") {
        res.end("<html><body>Tudo sobre musica</body></html>");
    } else {
        res.end("<html><body>Outra pagina</body></html>");
    }

    
});

server.listen(3000, function () {
    console.log("Servidor Ativo, rodando com Express!");
});



