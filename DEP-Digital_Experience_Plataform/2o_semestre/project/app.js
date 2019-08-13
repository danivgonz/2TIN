var app = require('./config/server');


// Renderizando páginas

// Require da ROTA home
var rotaHome = require('./app/routes/home')(app);

// Require da ROTA cadastrar
var rotaCadastrar = require('./app/routes/cadastrar')(app);

// Require da ROTA produto
var rotaProdutos = require('./app/routes/produtos')(app);

// Require da ROTA lista
var rotaLista = require('./app/routes/lista')(app);


app.get('/lista', function(req, res){
    res.render('produtos/lista');
})


app.listen(2000, () => {
    console.log('Server ativo!');
})