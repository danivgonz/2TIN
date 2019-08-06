var express = require('express');
var app = express();

app.set('view engine', 'ejs');


app.get('/', function(req, res) {
    res.send("<html><body>Home Page</body></html>");
});

app.get('/cervejas', function(req, res) {
    res.render('secao/cerveja');
})

//app.get('/tabuada', function(req, res) {
//    var mensagem = '<center><h2>Tabuada</h2>';
//    for (let i = 0; i < 11; i++) {
//        mensagem += '<hr> Tabuada do ' + a + '<br>';
//        for (let j = 0; j < 11; j++) {
//            let saida = i + ' * ' + j + ' = ' + i * j + '<br>';
//            mensagem += saida;          
//        }        
//    }  
//    mensagem += '<hr>';
//    mensagem += '</center>';
//    res.send(mensagem);
//})

app.listen(3000, function () {
    console.log("Servidor Ativo, rodando com Express!");
});