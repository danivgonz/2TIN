module.exports = function(app){
  app.get('/produtos', function(req, res){
      var connection = app.config.dbConnection();

      // Por que 2 app?
      // 1° app = variável 
      // 2° app = pasta
      var produtosModel = app.app.models.produtosModel;

      produtosModel.getProdutos(connection, function(error, result){
        // res.send(result);
        res.render("produtos/produtos", {produtos : result} ) ;
      });
  
    });

    app.get('/produto', function(req, res){
      var connection = app.config.dbConnection();

      // Por que 2 app?
      // 1° app = variável 
      // 2° app = pasta
      var produtosModel = app.app.models.produtosModel;
      
      produtosModel.getProduto(connection, function(error, result){
        // res.send(result);
        res.render("produtos/produto", {produto : result} ) ;
      });
  
    });
  }
  