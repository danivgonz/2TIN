
module.exports = (app) => {
    app.get('/lista', function(req, res){
        res.render('produtos/lista');
    });
}