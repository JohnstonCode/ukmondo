const app = require("./server/app");
const port = process.env.PORT || 3000;

app.listen(port, () => {
  console.log(`App is runnig on port: ${port}`);
});

process.on("unhandledRejection", e => {
  console.log(e.message);
  process.exit(1);
});
