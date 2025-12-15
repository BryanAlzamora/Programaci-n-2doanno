/**Usa el modulo http para crear un servidor en localhost:3000 que de- ´
vuelva Hola desde Node.js al entrar desde el navegador. */

const http= require('http');
const url=require('url');

const server= http.createServer((req,res)=>{
    const parsearUrl= url.parse(req.url,true);
    const palabra= 'Hola desde Node.js';
    
    res.writeHead(200,{'Content-type': 'text/plain; charset=utf-8'});
    //res.end(`${palabra}`);
    res.end(palabra);
});

const PORT= 3000;
server.listen(PORT,()=>{
    console.log(`Servidor HTTP escuchando en ${PORT}`);
})