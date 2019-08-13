var express = require('express');
var app = express();

app.set('view engine', 'ejs');


app.get('/', function(req, res) {
    res.send("<html><body>Home Page</body></html>");
});

app.get('/cervejas', function(req, res) {
    res.render('secao/cerveja');
})

// Brincando com Renderizar com EJS

app.get('/vingadores', function(req, res){
    res.render('secao/vingadores');
})



app.listen(3000, function () {
    console.log("Servidor Ativo, rodando com Express!");
});