const express=require("express");
const router= express.Router();
const userController= require("../controllers/userController");

router.get("/",userController.getAll);
router.post("/create",userController.create);
router.put("/update",userController.update);
router.delete("/",userController.delete);

module.exports=router;