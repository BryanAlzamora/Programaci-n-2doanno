const User = require("../models/userModel");

module.exports = {

    list(req,res){
        User.getAll((err,results)=>{
            if(err) return res.status(500).json({error:err});
            res.json(results);
        });
    },

    create(req,res){
        const {nombre,email,password} = req.body;
        User.create(nombre,email,password,(err,result)=>{
            if(err) return res.status(500).json ({error:err});
            res.json({success:true});
        });
    },

    update(req,res){
        const id=req.params.id;
        const {nombre}=req.body;

        User.update(id,nombre,(err,result)=>{
            if(err) return res.status(500).json({error:er});
            res.json({success:true});
        });
    },

    delete(req,res){
        const id=req.params.id;

        User.delete(id,(err,result)=>{
            if(err) return res.status(500).json({error: err});
            res.json({success:true});
        });
    }

};