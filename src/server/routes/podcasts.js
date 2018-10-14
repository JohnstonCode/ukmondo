const express = require('express');
const router = express.Router();

router.get('/podcasts', (req, res) => {
    res.sendFile(path.join(__dirname, "..", "..", "..", "dist"));
});

module.exports = router;
