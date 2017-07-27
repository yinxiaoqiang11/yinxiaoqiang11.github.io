var express = require('express')
var router = express.Router();
var data = require("../../data.json");
var seller = data.seller;
var ratings = data.ratings;
var goods = data.goods;

router.get('/seller', function(req, res, next) {
  console.log("1")
  res.send({
    success: 1,
    data:seller
  })
});
router.get('/ratings', function(req, res, next) {
  console.log("2")

  res.send({
    success: 1,
    data:ratings
  })
});
router.get('/goods', function(req, res, next) {
  console.log("3")
  console.log("...")
  res.send({
    success: 1,
    data:goods
  })
});



module.exports = router;
