const express = require("express");
const path = require("path");
const pool = require("./config/db");
const cors = require("cors");
const imageRoutes = require("./routes/imageRoutes");
const testRoutes = require("../test/testRoutes");
const apiRoutes = require("./routes/apiRoutes");

const app = express();

app.use(express.static(path.join(__dirname, '../public/'))); // Menyajikan file statis dari folder public

app.use(cors());
// Global Routes
app.get('/', (req, res) => {
    res.sendFile(path.join(__dirname, '../public', 'index.html'));
});
app.get('/gallery', (req, res) => {
    res.sendFile(path.join(__dirname, '../public/view', 'gallery.html'));
});

// Endpoint untuk memeriksa koneksi database
app.get('/health-check', async (req, res) => {
    try {
        await pool.query('SELECT 1'); // Query sederhana untuk memeriksa koneksi
        res.status(200).send('Database is connected');
    } catch (err) {
        console.error('Database connection error:', err);
        res.status(500).send('Database connection error');
    }
});

// Image Routes
app.use('/api', imageRoutes);
app.use('/api', apiRoutes);  // API route for Instagram profile fetching

// Test Routes
app.use('/test', testRoutes);

module.exports = app;
