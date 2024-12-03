const express = require('express')
const app = express()
const bodyParser = require('body-parser')
const cookieParser = require('cookie-parser')
const jwt = require('jsonwebtoken');
const JWT_SECRET = "p!No0rR#$t@Te";
require('./db')

app.use(bodyParser.urlencoded({ extended: false }))
app.use(bodyParser.json())
app.use(cookieParser())

app.set('view engine', 'ejs');
app.use('/', express.static(__dirname + '/views'));

const PORT = process.env.PORT || 8761

app.get('/', async (req, res) => {
    res.render('index')
})

app.get('/about-us', async (req, res) => {
    res.render('about-us')
})

app.get('/buy', async (req, res) => {
    res.render('buy')
})

app.get('/career', async (req, res) => {
    res.render('career')
})

app.get('/contact-us', async (req, res) => {
    res.render('contact-us')
})

app.get('/faqs', async (req, res) => {
    res.render('faqs')
})

app.get('/landing', async (req, res) => {
    res.render('landing')
})

app.get('/our-mission', async (req, res) => {
    res.render('our-mission')
})

app.get('/projects', async (req, res) => {
    res.render('projects')
})

app.get('/properties', async (req, res) => {
    res.render('properties')
})

app.get('/reports', async (req, res) => {
    res.render('reports')
})

app.get('/request-appraisal', async (req, res) => {
    res.render('request-appraisal')
})

app.get('/sell', async (req, res) => {
    res.render('sell')
})

app.get('/services', async (req, res) => {
    res.render('services')
})

app.get('/team', async (req, res) => {
    res.render('team')
})

app.get('/trusted-pilot', async (req, res) => {
    res.render('trusted-pilot')
})

app.get('/privacy-policy', async (req, res) => {
    res.render('privacy-policy')
})

app.listen(PORT, () => {
    console.log(`App is live on: http://localhost:${PORT}/`)
})