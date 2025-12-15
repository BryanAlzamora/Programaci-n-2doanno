function cargar() {
  fetch("/api/users")
    .then(r => r.json())
    .then(users => {
      let html = "";
      users.forEach(u => {
        html += `
          <tr>
            <td>${u.id}</td>
            <td>${u.nombre}</td>
            <td>${u.email}</td>
            <td>
              <button onclick="editar(${u.id}, '${u.nombre}')">Editar</button>
              <button onclick="eliminar(${u.id})">Eliminar</button>
            </td>
          </tr>`;
      });
      document.getElementById("tabla").innerHTML = html;
    });
}

document.getElementById("formCrear").addEventListener("submit", e => {
  e.preventDefault();

  fetch("/api/users", {
    method: "POST",
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify({
      nombre: document.getElementById("nombre").value,
      email: document.getElementById("email").value
    })
  }).then(cargar);
});

function editar(id, nombreActual) {
  const nuevo = prompt("Nuevo nombre:", nombreActual);
  if (!nuevo) return;

  fetch(`/api/users/${id}`, {
    method: "PUT",
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify({ nombre: nuevo })
  }).then(cargar);
}

function eliminar(id) {
  if (!confirm("¿Eliminar usuario?")) return;

  fetch(`/api/users/${id}`, { method: "DELETE" })
    .then(cargar);
}

cargar();
