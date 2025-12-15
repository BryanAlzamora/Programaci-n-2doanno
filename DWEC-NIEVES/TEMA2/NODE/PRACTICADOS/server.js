const express=require("express");
const app=express();
const userRoutes= require("./routes/userRouter");

app.use (express.json());
app.use(express.static("public"));

app.get("/api/users",userRoutes);

app.listen(3000,()=>{
    consol.log("Servidor en http://localhost:3000");
});