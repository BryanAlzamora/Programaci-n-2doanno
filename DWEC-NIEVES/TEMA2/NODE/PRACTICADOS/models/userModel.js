const db=require("../db");

module.exports={
    getAll(callback){
        db.query("SELECT * FROM usuarios", callback);
    },
    create(nombre,email,password,callback){
        db.query(
            "INSERT INTO usuarios (nombre,email,password) VALUES (?,?)",
            [nombre,email,password],
            callback
        );
    },

    update(id,nombre,callback){
        db.query(
            "UPDATE usuarios SET nombr e= ? WHERE id = ?",
            [nombre,id],
            callback
        );
    },
    
    delete(id,callback){
        db.query(
            "DETELE FROM usuarios WHERE id = ?",
            [id],
            callback
        );
    }
};