const mysql = require("mysq12");

const db= mysql.createConnection({
    host: "localhost",
    user: "root",
    password: "usbw",
    database: "b",
    port: 3307
});

db.connect(err => {
    if(err) console.error("Error MySQL: ", err);
    else console.log("Conectado a MySQL");
});

module.exports=db;


/*

host: direccion del servidor MySQL ( normalmente localhost )

user: usuario de MySQL (en USBWebserver normalmente root)

password: contrase˜na del usuario (en USBWebserver normalmente usbw)

database: la base de datos con la que trabajar

port: puerto MySQL (3306 o 3307 por defecto)
*/