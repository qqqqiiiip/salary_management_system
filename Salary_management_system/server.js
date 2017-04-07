/**
 * Module dependencies.
 */


var express = require('express')
  , http = require('http')
  , path = require('path')
  , session = require('express-session');
var mssql = require('mssql');   
var config = {  
  user: 'sa',  
  password: 'abcd1234',  
  server: '127.0.0.1',   
  database: 'project',  
  port:53841,  
  options: {  
    encrypt: true // Use this if you're on Windows Azure  
  },  
  pool: {  
    min: 0,  
    max: 10,  
    idleTimeoutMillis: 3000  
  }  
};
var app = express();
var bodyParser = require('body-parser');
app.use(bodyParser.urlencoded({ extended : false}));

app.set('port', process.env.PORT || 80);
app.set('views', __dirname + '/views');
app.set('view engine', 'ejs');

app.use(express.static(path.join(__dirname, 'public')));

app.use(session({
    secret: 'ss', //secret的值建议使用随机字符串
    cookie: {maxAge: 60 * 1000 * 30}, // 过期时间（毫秒）
    resave: false,
    saveUninitialized: true,
}));

var con = new mssql.Connection(config,(err) => {  
      if (err) {  
        console.log(err);  
        return;  
      }
});
//Routes


//index
app.get('/', (req, res) => {
    res.render('pages/login');
});

app.post('/',(req,res) => {
    let usernm = req.body.username;
    let passwd = req.body.password;
    let request = new mssql.Request(con);
    request.query("select * from usr where username='"+usernm+"' and password='"+passwd+"'", (err, recordset) => {
      if(err){
        res.redirect('/');
      }else{
        if(recordset[0] === undefined){
         res.redirect('/');
        }else{
          req.session.user = recordset[0];
          res.redirect('index');
        }
      }
    });
});

app.get('/index', (req, res) => {
    if(!req.session.user){
      res.redirect('/');
      // res.render('pages/index');
    }else{
       res.render('pages/index');
    }
});

app.get('/logout', (req, res) => {
    req.session.user = null;
    res.redirect('/');
});

app.post('/delete', (req, res) => {
  let id = req.body.id;
  let i = req.body.type;
  let table = ["base_information","wage","wage"];
  let request = new mssql.Request(con);
  if(i == 1){
    request.query("delete from wage where e_id = "+id, (err, recordset) => {
    });
    request.query("update base_information set superior_id ="+null+" where superior_id = "+id, (err, recordset) => {
    });
  }
  request.query("delete from "+table[i-1]+" where id = "+id, (err, recordset) => {
    if(err){
      res.send('error');
    }else{
      res.send('sucess');
    }
  });
});
app.post('/search', (req, res) => {

  let i = req.body.type;
  let content = req.body.content;
  let x = req.body.x;
  let table = ["base_information","wage","wage"];
  let type = ["id","name","superior_id","department_id","e_id","d_id","year","month"];
  let request = new mssql.Request(con);
  if( i == 2){
    if(x == 1)
      var sql = "select * from "+table[x-1]+" where "+type[i-1]+" like '%"+content+"%'";
    else
      var sql = "select * from "+table[x-1]+" where "+type[i-1]+" like '%"+content+"%' order by e_id,year,month";
  }else{
    if(x == 1)
      var sql = "select * from "+table[x-1]+" where "+type[i-1]+" = "+content+"";
    else
      var sql = "select * from "+table[x-1]+" where "+type[i-1]+" = "+content+" order by e_id,year,month";

  }
  request.query(sql, (err, recordset) => {
    if(err){
      // console.log(err)
      res.send('error');
    }else{
      res.send(recordset);
    }
  });
});
app.post('/save', (req, res) => {
  let inf = req.body;
  let request = new mssql.Request(con);
  let sql = ["update base_information set name ='"+inf.name+"', superior_id=isnull(NULL,'"+inf.superior_id+"'), department_id=isnull(NULL,'"+inf.department_id+"'), base_wage=isnull(NULL,'"+inf.base_wage+"'), House_wage=isnull(NULL,'"+inf.House_wage+"') where id = "+inf.id,
    "update wage set late_days =isnull(NULL,'"+inf.late_days+"'), leave_days=isnull(NULL,'"+inf.leave_days+"'), year=isnull(NULL,'"+inf.year+"'), month=isnull(NULL,'"+inf.month+"'), ask_days=isnull(NULL,'"+inf.ask_days+"'), over_hours=isnull(NULL,'"+inf.over_hours+"') where id = "+inf.id,
    "update wage set base_wage =isnull(NULL,'"+inf.base_wage+"'), House_wage=isnull(NULL,'"+inf.House_wage+"'), should_wage=isnull(NULL,'"+inf.should_wage+"'), shouldnot_wage=isnull(NULL,'"+inf.shouldnot_wage+"'), real_wage=isnull(NULL,'"+inf.real_wage+"') where id = "+inf.id,
    "update rules set base_days =isnull(NULL,'"+inf.base_days+"'), late_wage=isnull(NULL,'"+inf.late_wage+"'), leave_wage=isnull(NULL,'"+inf.leave_wage+"'), ask_wage=isnull(NULL,'"+inf.ask_wage+"'), over_wage=isnull(NULL,'"+inf.over_wage+"') where id = "+inf.id
    ];
  request.query(sql[inf.type-1], (err, recordset) => {
    if(err){
      res.send('error');
    }else{
      res.send('sucess');
    }
  });
  
});
app.post('/add_new', (req, res) => {
  let name = req.body.name;
  let superior_id = req.body.superior_id;
  let department_id = req.body.department_id;
  let request = new mssql.Request(con);
  request.query("insert into base_information(name,superior_id,department_id) values('"+name+"','"+superior_id+"','"+department_id+"')", (err, recordset) => {
    if(err){
      res.send('error');
    }else{
      res.send('sucess');
    }
  });
});
app.post('/add', (req, res) => {
  let id = req.body.id;
  let name = req.body.name;
  let department_id = req.body.department_id;
  let request = new mssql.Request(con);
  let base_wage,House_wage;
  request.query("select base_wage,House_wage from base_information where id = "+id, (err, recordset) => {
      base_wage = recordset[0].base_wage;
      House_wage = recordset[0].House_wage;
      request.query("insert into wage(e_id,name,d_id,base_wage,House_wage) values('"+id+"','"+name+"','"+department_id+"','"+base_wage+"','"+House_wage+"')", (err, recordset) => {
        if(err){
          res.send(err);
        }else{
          res.send('sucess');
        }
      });
 });
 
});

app.post('/show_inf',(req,res) =>{
  let request = new mssql.Request(con);
  let i = req.body.type;
  let sql = ["select * from base_information","select * from wage order by e_id,year,month", "select * from wage order by e_id,year,month","select * from rules"];
  request.query(sql[i-1], (err, recordset) => {
    if(err){
      res.send('error');
    }else{
      res.send(recordset);
    }
  });
  
});





app.listen(process.env.PORT || 8080);