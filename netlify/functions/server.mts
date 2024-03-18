const https = require("https"); // Use the https module
const fs = require("fs"); // Required for reading SSL certificates

const options = {
    key: fs.readFileSync("key.pem"), // Path to your private key
    cert: fs.readFileSync("cert.pem"), // Path to your certificate
};

const server = https.createServer(options, (req, res) => {
    // Handle GET requests here
    res.end("Hello, World!");
});

const PORT = process.env.PORT || 3000;
server.listen(PORT, () => {
    console.log(`Listening on PORT ${PORT} (HTTPS)`);
});
