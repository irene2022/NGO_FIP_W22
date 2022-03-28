import express from 'express';
import { createServer } from 'http';

const app = express();
const httpServer = createServer(app);

const port = process.env.PORT || 3000;

httpServer.listen(port, () => {
    console.log(`page is running on ${port}`)
});