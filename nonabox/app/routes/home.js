module.exports = function(app){
    var connection = app.config.dbConnection();


    app.get('/', function(req, res){
      res.render("home/index");
    });
    
};
