
//var dbConnection = require('../../config/dbConnection');

module.exports = function(app){
  app.get('/produtos', function(req, res){

    var connection = app.config.dbConnection();
    
    // var connection = dbConnection();
    connection.query('SELECT * FROM produto', function(error, result){
      res.render("produtos/produtos", {produtos : result});
    });
  });
}
