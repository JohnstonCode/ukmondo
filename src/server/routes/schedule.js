const express = require('express');
const router = express.Router();

router.get('/schedule', (req, res) => {
    res.sendFile(path.join(__dirname, "..", "..", "..", "dist"));
});

module.exports = router;
