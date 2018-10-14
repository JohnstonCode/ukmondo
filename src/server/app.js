const express = require("express");
const app = express();
const path = require("path");

const home = require("./routes/home");
const schedule = require("./routes/schedule");
const podcasts = require("./routes/podcasts");
const contact = require("./routes/contact");

app.disable("x-powered-by");

app.use(express.static(path.join(__dirname, "..", "dist")));

app.use(home);
app.use(schedule);
app.use(podcasts);
app.use(contact);

module.exports = app;
