const express = require('express ');
const app = express ();

// Middleware para leer JSON en peticiones POST
app.use(express.json ());

// Ruta GET: recibe el nombre por query
app.get('/saludo ', (req , res) => {
const name = req.query.name || 'desconocido ';
res.send('Hola , ${name }!');
});


// Ruta POST: recibe el nombre en el cuerpo JSON
app.post ('/saludo ', (req , res) => {
const { name } = req.body;
res.send('Hola , ${name || ´desconocido ´}! ');
});

const PORT = 3000;
app.listen(PORT , () => {
console.log('Servidor Express escuchando en http :// localhost :${PORT }');
});


// Probarlo con http :// localhost :3000/ saludo?name=Carlos