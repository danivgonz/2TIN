module.exports = function() {

    this.getUsuarios = function(connection, callback){
        connection.query('SELECT * FROM usuario', callback);
    }

    return this;
}