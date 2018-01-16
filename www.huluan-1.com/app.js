const express=require("express");
const http=require("http");
const mysql=require("mysql");
const routerUser=require("./user");
const routerProduct=require("./product");
const routerCaus=require("./product");
const body_parser=require("body-parser");
var app=express();
var server=http.createServer(app);
server.listen(8080);
app.use(express.static("public"));
var pool = mysql.createPool({
  host:"127.0.0.1",
  user:"root",
  password:"",
  database:"huluan",
  port:3306,
  connectionLimit:25	
});
app.use(body_parser.urlencoded({extended:false}));
app.use("/user",routerUser);
app.use("/product",routerProduct);
