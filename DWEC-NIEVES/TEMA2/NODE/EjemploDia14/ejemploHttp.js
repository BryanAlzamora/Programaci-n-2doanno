
const http = require('http');
const url = require('url');

const server = http. createServer ((req , res) => {
// Parseamos la URL para obtener los parametros

const parsedUrl = url.parse(req.url , true);
const name = parsedUrl .query.name || 'desconocido ';

// Configuramos la cabecera y la respuesta
res. writeHead (200 , { 'Content -Type ': 'text/plain; charset=utf -8' });
res.end('Hola , ${name }!');
});

const PORT = 3000;
server.listen(PORT , () => {
console.log('Servidor HTTP escuchando en http :// localhost :${PORT }');
});
