var mysql = require('mysql');
var connection = mysql.createConnection({
    // host : settings.host,
    // port : "3306",
    database : "curriculum_design",
    user : "root",
    password : ""
});
connection.connect();
module.exports = connection;