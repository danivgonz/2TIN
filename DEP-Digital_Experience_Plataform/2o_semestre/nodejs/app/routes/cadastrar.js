module.exports = function(app){

  app.get('/cadastrar', function(req, res){
    res.render("admin/form_add_produto");
  });

  app.post('/produtos/salvar', function(req, res){
    var produto = req.body;
    //res.send(produto);

    // Conexão
    var connection = app.config.dbConnection();
    // Model
    var produtosModel = app.app.models.produtosModel;
    // Função
    produtosModel.salvarProduto(produto, connection, function(error, result) {
      //res.render("produtos/produto", {produto : result} ) ;
      res.redirect('/produtos')
    })
  })

}
