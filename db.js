/*
 *MYSQL CONNECTION
 *
 */

var mysql = require('mysql');
var connection = mysql.createConnection({
    host: '114.215.152.154',
	user: 'root',
	password: 'ghb134013',
	database: 'salarymanagement' ,
	timezone: '0000' //时区
});
connection.connect();

/*
 *SQL SERVER CONNECTION
 *
 */
// var mssql = require('mssql');   
// var config = {  
//   user: 'sa',  
//   password: 'abcd1234',  
//   server: '127.0.0.1',   
//   database: 'project',  
//   port:53841,  
//   options: {  
//     encrypt: true // Use this if you're on Windows Azure  
//   },  
//   pool: {  
//     min: 0,  
//     max: 10,  
//     idleTimeoutMillis: 3000  
//   }  
// };
// var connection = new mssql.Connection(config,(err) => {  
//       if (err) {  
//         console.log(err);  
//         return;  
//       }
// });


module.exports = connection;